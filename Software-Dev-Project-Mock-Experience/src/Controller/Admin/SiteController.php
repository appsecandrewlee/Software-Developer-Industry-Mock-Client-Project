<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Site Controller
 *
 */
class SiteController extends AppController
{
    private $db;

    public function initialize(): void{
        parent:: initialize();

        $this->db = ConnectionManager::get("default");
    }

    public function piechart(){
        $sales = $this->db->execute("SELECT COUNT(id) as count, SUM(cost) as sale FROM carts GROUP BY cost")->fetchALl("assoc");

        $this->set(compact("sales"));
    }

    public function bargraph(){
        $sales = $this->db->execute("SELECT COUNT(id) as count, SUM(cost) as sale FROM carts GROUP BY cost")->fetchALl("assoc");

        $this->set(compact("sales"));
    }

}

