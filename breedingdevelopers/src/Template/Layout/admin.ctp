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
    <?= $this->Html->css('fontawesome') ?>
    <?= $this->Html->css(['bootstrap.css','bootstrap.min','andycss','profile','style','style1']) ?>
    <?= $this->Html->css(['font-awesome.min.css','animate.min.css','ionicons.min.css','owl.carousel.min.css','lightbox.min.css']) ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') ?>
    
    <link href="../../../webroot/css/andy.css" rel="stylesheet" type="text/css"/>
   
     <?= $this->Html->script(['jquery','bootstrap','bootstrap.min','profile']) ?>
    <?= $this->Html->script(['jquery-ui-1.12.1/jquery-ui','jquery-ui-1.12.1/jquery-ui.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
   </head>
<body>
 
 <div style=" height:100px;">
  <div class="jumbotron">
      
<h3>Welcome to landing page!</h3>
            
 </div>
</div>
    <nav class="navbar navbar navbar-fixed-top"style=" background-color: purple;">
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
    <li><?php echo $this->Html->link('i:heart Answers', array('controller' => 'answers', 'action' => 'index',)); ?></li>
 <li><?php echo $this->Html->link('i:home Questions', array('controller' => 'questions', 'action' => 'index',)); ?></li>
 <li><?php echo $this->Html->link('i:briefcase Categories', array('controller' => 'categories', 'action' => 'index',)); ?></li>
 <li><?php echo $this->Html->link('i:tag Tags', array('controller' => 'tags', 'action' => 'index',)); ?></li>
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
 
    
    
    
    
    
    
    

<footer>
      <?php echo $this->element('footer')?>   
 </footer>
<!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
<?php echo $this->Html->script('jquery'); ?>
</body>
</html>
