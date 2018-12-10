<?php
namespace App\Controller;
use App\Controller\AuthController;

class PaymentController extends AuthController{

    public function index(){
        $this->autoRender = false;
        echo 'OH YEAH';
    }
}