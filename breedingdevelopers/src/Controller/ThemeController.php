<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

/**
 * Contacts Controller
 *
 * @property \App\Model\Table\ContactsTable $Contacts
 *
 * @method \App\Model\Entity\Contact[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ThemeController extends AppController{
    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout("themelayout");
    }
    
    
    Public function index(){
        
    }
    
}

