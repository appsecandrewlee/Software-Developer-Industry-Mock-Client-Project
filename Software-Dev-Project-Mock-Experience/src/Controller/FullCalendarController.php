<?php
declare(strict_types=1);

namespace App\Controller;

class FullCalendarController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Sessions');
    }

    public function myEvents()
    {
    }

    public function loadData()
    {
        if ($this->request->is('ajax')) {
            $data = $this->Sessions->find()
                ->where([
                    'session_date >=' => $this->request->getQuery('start'),
                    'session_date <=' => $this->request->getQuery('end'),
                ])
                ->select(['title' => 'session_notes', 'start' => 'session_date', 'end' => 'session_date'])
                ->toList();

            echo json_encode($data);
            exit();
        }
    }

    public function ajax()
    {
        if ($this->request->is('ajax')) {
            $response = ['status' => 0, 'message' => 'Failed to process request'];

            switch ($this->request->getData('type')) {
                case 'add':
                    $session = $this->Sessions->newEntity($this->request->getData());

                    if ($this->Sessions->save($session)) {
                        $response = ['status' => 1, 'message' => 'Session added successfully', 'session' => $session];
                    }
                    break;

                case 'update':
                    $session = $this->Sessions->get($this->request->getData('id'));

                    $session = $this->Sessions->patchEntity($session, $this->request->getData());

                    if ($this->Sessions->save($session)) {
                        $response = ['status' => 1, 'message' => 'Session updated successfully', 'session' => $session];
                    }
                    break;

                case 'delete':
                    $session = $this->Sessions->get($this->request->getData('id'));

                    if ($this->Sessions->delete($session)) {
                        $response = ['status' => 1, 'message' => 'Session deleted successfully'];
                    }
                    break;
            }

            $this->set([
                'response' => $response,
                '_serialize' => 'response',
            ]);
        }
    }

}
