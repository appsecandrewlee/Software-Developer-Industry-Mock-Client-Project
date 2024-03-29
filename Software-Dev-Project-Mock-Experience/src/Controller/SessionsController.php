<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Sessions Controller
 *
 * @property \App\Model\Table\SessionsTable $Sessions
 * @property \App\Model\Table\ServicesTable $Services
 * @method \App\Model\Entity\Session[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SessionsController extends AppController
{
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

                return $this->redirect(['action' => 'confirmation']);

            }
            $this->Flash->error(__('Invalid session times. Please try again.'));
            debug($session);
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
        if ($this->request->is(['patch', 'post', 'put'])) {
            $session = $this->Sessions->patchEntity($session, $this->request->getData());
            if ($this->Sessions->save($session)) {
//                $this->Flash->success(__('The session has been saved.'));

            }
        }
        $employees = $this->Sessions->Employees->find('list', ['limit' => 200])->all();
        $quotes = $this->Sessions->Quotes->find('list', ['limit' => 200])->all();
        $services = $this->Sessions->Services->find('list', ['limit' => 200])->all();
        $serviceTitles = $this->Sessions->Services->find('list', ['keyField' => 'service_title', 'valueField' => 'service_title']);
        $this->set(compact('session', 'employees', 'quotes', 'services', 'serviceTitles'));
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
            $this->Flash->success(__('The session has been deleted.'));
        } else {
            $this->Flash->error(__('The session could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function confirmation()
    {

    }

    public function calendar()
    {
        // Get the current year and month
        $year = date('Y');
        $month = date('m');

        // Get the sessions for the current month and year
        $sessions = $this->Sessions->find()
            ->where(function ($exp) use ($year, $month) {
                return $exp->year('session_date', $year)->month('session_date', $month);
            })
            ->contain(['Employees', 'Quotes', 'Services'])
            ->all();

        // Pass the sessions to the view
        $this->set(compact('sessions', 'year', 'month'));
    }
}
