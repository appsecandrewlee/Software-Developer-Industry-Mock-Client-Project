<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use DateTime;

/**
 * Sessions Controller
 *
 * @property \App\Model\Table\SessionsTable $Sessions
 * @method \App\Model\Entity\Session[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SessionsController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
        $this->loadComponent('Authorization.Authorization');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Employees', 'Quotes', 'Services'],
        ];
        $sessions = $this->paginate($this->Sessions);

        $this->set(compact('sessions'));
       //$this->viewBuilder()->setLayout("sessions");
    }

    /**
     * View method
     *
     * @param string|null $id Session id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $session = $this->Sessions->get($id, [
            'contain' => ['Employees', 'Quotes', 'Services'],
        ]);

        $this->set(compact('session'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $session = $this->Sessions->newEmptyEntity();
        if ($this->request->is('post')) {
            $session = $this->Sessions->patchEntity($session, $this->request->getData());
            if ($this->Sessions->save($session)) {
//                $this->Flash->success(__('The session has been saved.'));

                return $this->redirect('/booking');
            }
//            $this->Flash->error(__('The session could not be saved. Please, try again.'));
        }
        $employees = $this->Sessions->Employees->find('list', ['limit' => 200])->all();
        $quotes = $this->Sessions->Quotes->find('list', ['limit' => 200])->all();
        $services = $this->Sessions->Services->find('list', ['limit' => 200])->all();
        $serviceTitles = $this->Sessions->Services->find('list', ['keyField' => 'service_title', 'valueField' => 'service_title']);
        $this->set(compact('session', 'employees', 'quotes', 'services', 'serviceTitles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Session id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $session = $this->Sessions->get($id, [
            'contain' => [],
        ]);

        $db = ConnectionManager::get('default');

        $result = $db->execute('SELECT session_date, session_start FROM sessions WHERE session_id = ?', [$id])->fetchAll();

        if (count($result) > 0 and count($result[0]) > 0) {
            $date = Date('d-m-Y', strtotime($result[0][0]));
            $time = substr($result[0][1], 0, -3);
        } else {
            $date = '';
            $time = '';
        }

        if ($this->request->is('ajax') && $this->request->is('post')) {
            $selectedDate = Date('Y-m-d', strtotime($this->request->getData('selected_date')));

            $timeOptions = $db->execute('SELECT time FROM events WHERE date = ?', [$selectedDate])->fetchAll();

            $this->response = $this->response->withType('application/json');
            $json = json_encode($timeOptions);
            $this->response = $this->response->withStringBody($json);

            return $this->response;
        }

//        if ($this->request->is(['patch', 'post', 'put'])) {
//            $session = $this->Sessions->patchEntity($session, $this->request->getData());
//            if ($this->Sessions->save($session)) {
//                return $this->redirect(['controller' => 'Sessions', 'action' => 'index']);
//            }
//        }

        if ($this->request->is(['post', 'patch', 'put'])) {
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

                return $this->redirect(['controller' => 'Sessions', 'action' => 'editConfirmation']);
            }
        }

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

        $employees = $this->Sessions->Employees->find('list', ['limit' => 200])->all();
        $quotes = $this->Sessions->Quotes->find('list', ['limit' => 200])->all();
        $services = $this->Sessions->Services->find('list', ['limit' => 200])->all();
        $serviceTitles = $this->Sessions->Services->find('list', ['keyField' => 'service_title', 'valueField' => 'service_title']);
        $this->set(compact('session', 'employees', 'quotes', 'services', 'serviceTitles', 'dateOptions', 'date', 'time'));
    }

    public function editConfirmation() {

    }

    /**
     * Delete method
     *
     * @param string|null $id Session id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $session = $this->Sessions->get($id);
        if ($this->Sessions->delete($session)) {
//            $this->Flash->success(__('The session has been deleted.'));
        } else {
//            $this->Flash->error(__('The session could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function continue()
    {
        $date = $this->request->getData('date');
        // Perform a search for bookings on the selected date
    }
}
