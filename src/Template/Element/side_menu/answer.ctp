<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Answer </h3>
    </div>
    <div class="panel-body">
        <ul class="list-group">
            <li class="list-group-item"><?= $this->Html->link(__('New Answer'), ['action' => 'add']) ?></li>
        </ul>
    </div>   
    
    <div class="panel-heading">
        <h3 class="panel-title">Users </h3>
    </div>
    <div class="panel-body">
     <ul class="list-group">
     <li class="list-group-item"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
     <li class="list-group-item"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
            
        </ul>
    </div>   
    
    <div class="panel-heading">
    <h3 class="panel-title">Question </h3>
    </div>
    <div class="panel-body">
    <ul class="list-group">
    <li class="list-group-item"><?= $this->Html->link(__('List Questions'), ['controller' => 'Questions', 'action' => 'index']) ?></li>
    <li class="list-group-item"><?= $this->Html->link(__('New Question'), ['controller' => 'Questions', 'action' => 'add']) ?> </li>
    </ul>
    </div>
    
</div>
    
