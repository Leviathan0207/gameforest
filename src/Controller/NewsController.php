<?php
namespace App\Controller;

class NewsController extends AppController
{
    public function index(){

    }

    public function post($slug){
        
    }

    public function tag(){
        $tags = $this->request->getQuery('t');

        $this->set(compact(['tags']));
    }

    public function userPublished(){

    }
}