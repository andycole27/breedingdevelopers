
<?php
/**
 * Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2017, Cake Development Corporation (https://www.cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

use Cake\Core\Configure;

?>
   <div class="login">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto">
 <p class="lead text-center">Sign in to your Developers account</p>
    <?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
       
        <?= $this->Form->control('username', ['label' => false, 'class' => 'form-control form-control-lg','placeholder' => 'Username','required' => true]) ?>
        <?= $this->Form->control('password', ['label' => false, 'class' => 'form-control form-control-lg','placeholder' =>'Password', 'required' => true]) ?>
        <?php
        if (Configure::read('Users.reCaptcha.login')) {
            echo $this->User->addReCaptcha();
        }
        if (Configure::read('Users.RememberMe.active')) {
            echo $this->Form->control(Configure::read('Users.Key.Data.rememberMe'), [
                'type' => 'checkbox',
                'label' => __d('CakeDC/Users', 'Remember me'),
                'checked' => Configure::read('Users.RememberMe.checked')
            ]);
        }
        ?>
        <?php
        $registrationActive = Configure::read('Users.Registration.active');
        if ($registrationActive) {
            echo $this->Html->link(__d('CakeDC/Users', 'Register'), ['action' => 'register'],['class'=>'btn btn-primary']);
        }
        if (Configure::read('Users.Email.required')) {
            if ($registrationActive) {
                echo '  ';
            }
            echo $this->Html->link(__d('CakeDC/Users', 'Reset Password'), ['action' => 'request_Reset_Password'],['class'=>'btn btn-success']);
        }
        ?>
 <br>
    <?= implode(' ', $this->User->socialLoginList()); ?>
    <?= $this->Form->button(('Login'), ['class' => 'btn btn-primary form-control ']); ?>
    <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
