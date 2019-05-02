

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
<?php
namespace App\mailer;
 Use Cake\Mailer\Mailer;
 
 class UserMailer extends Mailer{
 
     public function welcome($user)
 
 {
 
     $this
     ->to($user->email)
     ->emailformat('html')
     ->subject(sprintf('Welcome %s',$user->username))
     ->ViewVars(['$myname'=>$user->username,
                 '$myemail'=>$user->email])
     ->template('welcome')
     ->layout('default');
    
 }
    public function resetpassword($user){
        $this
            ->to($user->email)
            ->subject('Reset password')
            ->set(['token' => $user->token]);
        
    }
 }
?>