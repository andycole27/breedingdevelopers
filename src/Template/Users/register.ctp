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

<div class="register">
    <div class="container">
<div class="row">
     <div class="col-md-8 m-auto">
          <h1 class="display-4 text-center">Register</h1>
          <p class="lead text-center">Create your Developer account</p>
        <div class="users form">
            <?php //echo $this->flash->render();?>
    <?= $this->Form->create(); ?>
    <fieldset>
        <?php
        echo $this->Form->control('username', ['label' => __d('CakeDC/Users', 'Username')]);
        echo $this->Form->control('email', ['label' => __d('CakeDC/Users', 'Email')]);
        echo $this->Form->control('password', ['label' => __d('CakeDC/Users', 'Password')]);
        echo $this->Form->control('password_confirm', [
            'type' => 'password',
            'label' => __d('CakeDC/Users', 'Confirm password')
        ]);
        echo $this->Form->control('first_name', ['label' => __d('CakeDC/Users', 'First name')]);
        echo $this->Form->control('last_name', ['label' => __d('CakeDC/Users', 'Last name')]);
        if (Configure::read('Users.Tos.required')) {
            echo $this->Form->control('tos', ['type' => 'checkbox', 'label' => __d('CakeDC/Users', 'Accept TOS conditions?'), 'required' => true]);
        }
        if (Configure::read('Users.reCaptcha.registration')) {
            echo $this->User->addReCaptcha();
        }
        ?>
    </fieldset>
    <?= $this->Form->button('Submit',['class'=>'btn btn-primary btn block']) ?>
     
    <?= $this->Form->end() ?>
      </div>
        </div>
    </div>
</div>
</div>

