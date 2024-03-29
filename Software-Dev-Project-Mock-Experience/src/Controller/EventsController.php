<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Table\ServicesTable;
use Cake\Datasource\ConnectionManager;
use DateTime;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 * @property \App\Model\Table\SessionsTable $Sessions
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Sessions');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $events = $this->paginate($this->Events);

        $db = ConnectionManager::get('default');
        $today = Date('Y-m-d');
        $dateQuery = "SELECT date FROM events WHERE available = 1 AND date > '$today' LIMIT 56"; // 8 times per day 7 days a week therefore, 8 * 7 = 56
        $dateResult = $db->execute($dateQuery)->fetchAll();

        $dateOptions = [];

        foreach ($dateResult as $row) {
            foreach ($row as $value) {
                $value = Date('d-m-Y', strtotime($value));
                if (!in_array($value, $dateOptions)) {
                    $dateOptions[$value] = $value;
                }
            }
        }

        // initialisation of db
        $latestDate = $db->execute("SELECT date FROM events ORDER BY id DESC LIMIT 1")->fetchAll()[0][0];
        $dateInAYear = Date('Y-m-d', strtotime('+365 days'));
        $time = ['09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00'];

        while ($latestDate <= $dateInAYear) {
            $newDate = Date('Y-m-d', strtotime($latestDate." +1 day"));
            if (Date('N', strtotime($newDate)) == 1 or Date('N', strtotime($newDate)) == 7) {
                $latestDate = Date('Y-m-d', strtotime($newDate."+1 day"));
                continue;
            }

            for ($i = 0; $i < 8; $i++) {
                $event = $this->Events->newEmptyEntity();
                $event->date = $newDate;
                $event->available = 1;
                $event->time = $time[$i];

                $this->Events->save($event);
            }

            $latestDate = $db->execute("SELECT date FROM events ORDER BY id DESC LIMIT 1")->fetchAll()[0][0];
        }

        $servicesTable = new ServicesTable();
        $serviceTitles = $servicesTable->find('list', ['keyField' => 'service_title', 'valueField' => 'service_title']);

        if ($this->request->is('ajax') && $this->request->is('post')) {
            $selectedDate = Date('Y-m-d', strtotime($this->request->getData('selected_date')));

            $timeOptions = $db->execute('SELECT time FROM events WHERE date = ? AND available = 1', [$selectedDate])->fetchAll();

            $this->response = $this->response->withType('application/json');
            $json = json_encode($timeOptions);
            $this->response = $this->response->withStringBody($json);

            return $this->response;
        }

        $session = $this->Sessions->newEmptyEntity();
        if ($this->request->is('post')) {
            $requestData = $this->request->getData();
            $stringDate = $requestData['session_date'];
            $stringTime = $requestData['session_start'];

            $date = DateTime::createFromFormat('d-m-Y', $stringDate);
            $formattedDate = $date->format('Y-m-d');

            $time = DateTime::createFromFormat('H:i', $stringTime);
            $formattedTime = $time->format('H:i:s');

            $requestData['session_date'] = $formattedDate;
            $requestData['session_start'] = $formattedTime;

            $session = $this->Sessions->patchEntity($session, $requestData);

            if ($this->Sessions->save($session)) {
                $db
                    ->newQuery()
                    ->update('events')
                    ->set(['available' => 0])
                    ->where(['date' => $formattedDate])
                    ->andWhere(['time' => $stringTime])
                    ->execute();
                return $this->redirect(['controller' => 'Sessions', 'action' => 'confirmation']);
            }
        }

        $this->set(compact('events', 'serviceTitles', 'dateOptions', 'session'));
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('event'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEmptyEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $this->set(compact('event'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $this->set(compact('event'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
