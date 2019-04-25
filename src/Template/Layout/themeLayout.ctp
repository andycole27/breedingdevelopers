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
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
    <link href="../../../webroot/css/andy.css" rel="stylesheet" type="text/css"/>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script', 'bootstrap', 'bootstrap.min') ?>
    <?= $this->Html->script([
    'https://code.jquery.com/jquery-1.12.4.min.js',
    'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'])?>
</head>
<body>
    
    <div class="container " style=" height:100px;">
            <div class="jumbotron">
            <h3>Welcome to students!</h3>
            
            </div>
</div>
    <nav class="navbar navbar navbar-static-top" role="navigation" style=" background-color: purple;">
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
 <li><?php echo $this->Html->link('i:heart Answers', array('controller' => 'answers', 'action' => 'index',)); ?></li>
 <li><?php echo $this->Html->link('i:home Questions', array('controller' => 'questions', 'action' => 'index',)); ?></li>
 <li><?php echo $this->Html->link('i:briefcase Categories', array('controller' => 'categories', 'action' => 'index',)); ?></li>
 <li><?php echo $this->Html->link('i:tag Tags', array('controller' => 'tags', 'action' => 'index',)); ?></li>
  <li><?php echo $this->Html->link('i:user Users', array('controller' => 'users', 'action' => 'index',)); ?></li>
  </ul>
</div>
    </div>
    </nav>
     
   <div class="container">
 <div class="container clearfix">
     <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
  </div>
      
</div>

    
    <footer>
        
    </footer>
    <script src="../../../webroot/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../../../webroot/js/bootstrap.js" type="text/javascript"></script>
    
</body>
</html>
