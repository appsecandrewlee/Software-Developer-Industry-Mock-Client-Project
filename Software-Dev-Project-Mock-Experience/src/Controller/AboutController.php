<?php

namespace App\Controller;

use App\Controller\AppController;

class AboutController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('default');
        $this->render('about_us');
    }
}
