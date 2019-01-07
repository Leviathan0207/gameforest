<?php
namespace App\Controller;

use App\Controller\AppController;

class FunctionalController extends AppController{

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->setLayout(false);
    }

    public function index(){

    }

    public function mce(){

    }
}