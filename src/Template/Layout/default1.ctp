<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Btech! Bleeding Developers';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       
        <?= $this->fetch('title') ?>
    </title>
     <?= $this->Html->meta('img1/logo.jpg',['type'=>'image/x-icon']) ?>
    
    <?= $this->Html->css('fontawesome') ?>
    <?= $this->Html->css(['bootstrap.css','bootstrap.min','andycss','profile']) ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="../../../webroot/css/andy.css" rel="stylesheet" type="text/css"/>
     <?= $this->Html->script(['jquery','bootstrap','bootstrap.min','profile']) ?>
    <?= $this->Html->script(['jquery-ui-1.12.1/jquery-ui','jquery-ui-1.12.1/jquery-ui.min']) ?>
   

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
   </head>
<body>
 
 <div style=" height:100px;">
  
     <img src="img1/bleedingbanner.png" alt="bleeding developers"/>
 </div>
</div>
    <nav class="navbar navbar navbar-static-top"style=" background-color: purple;">
<div class="navbar-header" >
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
    </button>
</div>
        <div >
    <div class="collapse navbar-collapse navbar-ex1-collapse" >
 
<ul class="nav navbar-nav" style="float: right;">
    <?php if($this->request->session()->read('Auth.User.id')){ ?>
    <li><a><?php echo $this->request->session()->read('Auth.User.email'); ?></a></li>   
 <li><?php echo $this->Html->link('i:home Questions', array('controller' => 'questions', 'action' => 'index',)); ?></li>
  <li><?php echo $this->Html->link('i:user Users', array('controller' => 'users', 'action' => 'index',)); ?></li>
  <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout',)); ?></li>
 <?php } ?>
</ul>
</div>
    </div>
    </nav>
<div class="container">
 <?= $this->fetch('content') ?>     
</div>
 

</body>
<footer>
     <?php echo $this->element('footer');?>
 </footer>
</html>
