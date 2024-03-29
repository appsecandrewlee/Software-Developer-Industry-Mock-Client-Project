<?php
declare(strict_types=1);

namespace App\Controller\Client;

use Cake\Controller\Controller;

/**
 * App Controller
 *
 * @method \App\Model\Entity\App[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AppController extends Controller
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $app = $this->paginate($this->App);

        $this->set(compact('app'));
    }

    /**
     * View method
     *
     * @param string|null $id App id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $app = $this->App->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('app'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $app = $this->App->newEmptyEntity();
        if ($this->request->is('post')) {
            $app = $this->App->patchEntity($app, $this->request->getData());
            if ($this->App->save($app)) {
                $this->Flash->success(__('The app has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The app could not be saved. Please, try again.'));
        }
        $this->set(compact('app'));
    }

    /**
     * Edit method
     *
     * @param string|null $id App id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $app = $this->App->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $app = $this->App->patchEntity($app, $this->request->getData());
            if ($this->App->save($app)) {
                $this->Flash->success(__('The app has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The app could not be saved. Please, try again.'));
        }
        $this->set(compact('app'));
    }

    /**
     * Delete method
     *
     * @param string|null $id App id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $app = $this->App->get($id);
        if ($this->App->delete($app)) {
            $this->Flash->success(__('The app has been deleted.'));
        } else {
            $this->Flash->error(__('The app could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
