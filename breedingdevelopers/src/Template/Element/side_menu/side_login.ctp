  
    <div class="panel panel-primary "> 
    <div class="panel-heading ">
    <h3 class="panel-title"> <?= $viewName ?></h3>
    </div>
    <div class="panel-body panel-collapse">
        <ul class="list-group">
        <li class="list-group-item"><?= $this->Html->link(__('New' .$viewName),['action' =>'register']) ?></li>
        <li class="list-group-item"> <?= $this->Html->link(__('Change Password'), ['controller' => 'Users','action' => 'forgotpassword']) ?></li>
        </ul>
    </div>
    
    <div class="panel-heading">
    <h3 class="panel-title"> Answers</h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            <li class="list-group-item"><?= $this->Html->link(__('i:list List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
            <li class="list-group-item"><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
        </ul>    
    </div>
    
    <div class="panel-heading">
    <h3 class="panel-title">Questions</h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            <li class="list-group-item"><?= $this->Html->link(__('i:list List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
            <li class="list-group-item"> <?= $this->Html->link(__('Post Question'), ['controller' => 'Questions', 'action' => 'add']) ?></li>
       </ul>
    </div>
    </div>     
        
     
   
    