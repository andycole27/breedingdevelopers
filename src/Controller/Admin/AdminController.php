<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class AdminController extends AppController
{
public function beforeFilter(Event $event){
    parent::beforeFilter($event);
     $this->viewBuilder()->setLayout("admin");
}
    public function index()
   {
      $this->set('title','Welcome to admin Panel');  
   }
    
}

