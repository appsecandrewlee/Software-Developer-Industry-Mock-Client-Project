<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use App\Model\Table\SessionsTable;
use DateTime;

class FullCalendarController extends AppController
{


    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        $this->loadComponent('Authentication.Authentication');
        $this->loadComponent('Authorization.Authorization');

        $this->loadModel('Sessions');
    }

    public function myEvents()
    {
        $sessionModel = new SessionsTable();
        $sessions = $sessionModel->find('all')->toArray();
        $events = [];

        foreach ($sessions as $session) {
            $title = "Service: " . $session->service_name . "\nName: " . $session->customer_first_name . " " . $session->customer_last_name;
            $startDateTime = $session->session_date->format('Y-m-d') . " " . $session->session_start;
            $endDateTime = Date('Y-m-d H:i:s', strtotime($session->session_date->format('Y-m-d') . " " . $session->session_start."+1 hour"));

            $events[] = [
                'title' => $title,
                'start' => $startDateTime,
                'end' => $endDateTime,
                'id' => $session->session_id,
            ];
        }
        $this->set(compact('events', 'session'));
    }

    public function loadData()
    {
//        if ($this->request->is('ajax')) {
//            $data = $this->Sessions->find()
//                ->where([
//                    'session_date >=' => $this->request->getQuery('start'),
//                    'session_date <=' => $this->request->getQuery('end'),
//                ])
//                ->select(['title' => 'session_notes', 'start' => 'session_date', 'end' => 'session_date'])
//                ->toList();
//
//            echo json_encode($data);
//            exit();
//        }
    }

    public function ajax()
    {
//        if ($this->request->is('ajax')) {
//            $response = ['status' => 0, 'message' => 'Failed to process request'];
//
//            switch ($this->request->getData('type')) {
//                case 'add':
//                    $session = $this->Sessions->newEntity($this->request->getData());
//
//                    if ($this->Sessions->save($session)) {
//                        $response = ['status' => 1, 'message' => 'Session added successfully', 'session' => $session];
//                    }
//                    break;
//
//                case 'update':
//                    $session = $this->Sessions->get($this->request->getData('id'));
//
//                    $session = $this->Sessions->patchEntity($session, $this->request->getData());
//
//                    if ($this->Sessions->save($session)) {
//                        $response = ['status' => 1, 'message' => 'Session updated successfully', 'session' => $session];
//                    }
//                    break;
//
//                case 'delete':
//                    $session = $this->Sessions->get($this->request->getData('id'));
//
//                    if ($this->Sessions->delete($session)) {
//                        $response = ['status' => 1, 'message' => 'Session deleted successfully'];
//                    }
//                    break;
//            }
//
//            $this->set(['response' => $response,
//                '_serialize' => 'response',]);
//        }
    }

}
