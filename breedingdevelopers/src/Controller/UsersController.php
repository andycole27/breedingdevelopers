<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\MailerAwareTrait;
use Cake\Mailer\Email;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Utility\Security;
use Cake\ORM\TableRegistry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
        use MailerAwareTrait;
     public function initialize(){
        parent::initialize();
        $this->viewBuilder()->setLayout("dashboard");
    }
    
////////////////////////////////////////////////////////////////////////    
    public function index()
    {
       
        $this->paginate = ['limit'=>'5'];
        $users = $this->paginate($this->Users->find('all'));
       
        $this->set(compact('users'));
    }
    ///////////////////////////////////////////////////////////////////
    public function resetpassword($token){
       if($this->request->is('post')){
         
         $hasher = new DefaultPasswordHasher();
         $mypass = $hasher->hash($this->request->getData('password'));
         
         $userTable = TableRegistry::get('Users');
         $user = $userTable->find('all')->where(['token'=>$token])->first();
         $user->password = $mypass;
      if($userTable->save($user)){
          return $this->redirect([ 'controller'=>'users','action'=>'login']);
          
      } 
      }
   
    }

    //////////////////////////////////////////////////////////////////
    public function view($id = null)
    {
      
        $user = $this->Users->get($id, [
            'contain' => ['Answers']]);
        //$this->set(compact('user'));
         
        $this->set('user', $user);
        
        $user1 = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user1 = $this->Users->patchEntity($user1, $this->request->getData());
            if ($this->Users->save($user1)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'view']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user1'));
    }

   //////////////////////////////////////////////////////////////////
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
             $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set('user', $user);
    }
   /////////////////////////////////////////////////////////////////////////
   public function login(){
     if ($this->request->is('post')) {
          $user = $this->Auth->identify();
          if ($user){
          $this->Auth->setUser($user);
          if($this->Auth->user('role') === 'admin'){
              return $this->redirect('admin/admin/index');
              
          }
          elseif($this->Auth->user('role') === 'user'){
              return $this->redirect('users/index');
          }
          
          else{
              return $this->redirect($this->Auth->redirectUrl());
          }
          
          }else{
          $this->Flash->error('Your username or password is incorrect.');
          }
           }
    if($this->Auth->user('id')){
        $this->Flash->warning('You are already logged in');
        return $this->redirect(['controller'=>'users','action'=>'index']);
    }
    
    } 


    ///////////////////////////////////////////////////////////////////////
    public function Register(){
    if($this->request->is('post')){
    $userTable = TableRegistry::get('Users');
    $user = $userTable->newEntity();
    
    $hasher = new DefaultPasswordHasher();
    $myname = $this->request->getData('username');
    $myemail = $this->request->getData('email');
    $mypass = $this->request->getData('password');
    $role = 'user';
    $mytoken = Security::hash(Security::randomBytes(32));
    $user->username = $myname;
    $user->email = $myemail;
    $user->password = $hasher->hash($mypass);
    $user->token = $mytoken;
    $user->role = $role;
    $user->created = date('Y-m-d H:i:s');
    $user->modified = date('Y-m-d H:i:s');
    if($userTable->save($user)){
        $this->Flash->set('Register Successfully',['element'=>'success']);  
    }else{
        $this->Flash->set('Register failed, Please Try Again',['element'=>'error']);
     }
    }
}
 
   //////////////////////////////////////////////////////////////////////////
    public function verification($token){
    $userTable = TableRegistry::get('Users');
    $verify = $userTable->find('all')->where(['token'=>$token])->first();
    $verify->verified = '1';
    $userTable->save($verify);
}

   /////////////////////////////////////////////////////////////////////////
public function forgotpassword(){
    if($this->request->is('post')){
        $myemail = $this->request->getData('email');
        $mytoken = Security::hash(Security::randomBytes(32));
        
         $userTable = TableRegistry::get('Users');
         $user = $userTable->find('all')->where(['email'=>$myemail])->first();
         $user->passwrod ='';
         $user->token = $mytoken;
          if($userTable->save($user)){
              $this->Flash->Success('reset password link has been sent to your email('.$myemail.'), please check your inbox');
              
         Email::configTransport('mailtrap', [
            'host' => 'smtp.mailtrap.io',
            'port' => 2525,
            'username' => 'ecc72c5b0a5f14',
            'password' => '7173670ae33e04',
            'className' => 'Smtp'
            ]);
          $email = new Email('default');
                $email->transport('mailtrap');
                $email->emailFormat('html');
                $email->from('rtofaig@gmail.com','George');
                 $email->subject('Please your password have been sent to your email account');
                $email->to($myemail);
                
               $email ->send('Hello '.$myemail.'<br/>Please check your email link below to reset your password<br/><a href="http://localhost:8765/users/resetpassword/'.$mytoken.'">Reset Password</a><br/>Thank you for joining Us');
          }
    }
    
    
}
//////////////////////////////////////////////////////////////////////////
public function logout(){
    $this->Flash->Success("You have Logged Out Successfully");
    return $this->redirect($this->Auth->logout());
}
/////////////////////////////////////////////////////////////////////////////
    public function profile($id = null){
         {
        $user = $this->Users->get($id, [
            'contain' => ['Answers', 'Documents', 'Questions']
        ]);

        $this->set('user', $user);
        $this->viewBuilder()->setLayout('profile');
    }
    }

//////////////////////////////////////////////////////////////////////////
public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /////////////////////////////////////////////////////////////////////////
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    ////////////////////////////////////////////////////////////////////////////
    public function signup(){
        
        
        
    }
    
    
    
    
    
    
    
    
}



