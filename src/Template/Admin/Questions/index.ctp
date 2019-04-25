<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
 */
?>
<div class="row">
    <div class="col-md-4 col-lg-3 col-sm-4">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['controller' => 'Answers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav></div>
    <div class="col-md-8 col-lg-9 col-sm-8">
<form class="input-group" role="search" action="<?php echo $this->Url->build(['action'=>'search'])?>" method="get">
       <input type="search" name="q" class="form-control"/>
          
        <button class="btn btn-primary input-group-text" type="submit">Search</button>  
        
 </form>
        <div class="card">
            <h3 class="card-header"><?= __('Questions') ?></h3>
            <div class="card-block">
                <?php //if(!empty(iterator_count($question))){ ?>
    <table class="table table-stripe table-hover table-bordered">
        <thead class="thead-inversed">
            <tr>
       <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                 <th scope="col"><?= $this->Paginator->sort('body') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php //$question = 1;?>
            <?php foreach ($questions as $question): ?>
            <tr>
                 <?php //$question++ ?>
                <td><?= h($question->title) ?></td>
                <td><?= h($question->body) ?></td>
                <td><?= h($question->created) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('New Answer'), ['controller' => 'Answers', 'action' => 'add']) ?>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $question->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
       

    
        
    </table>
                <?php //}else {?>
               <?php //$this->Html->image('andy',['alt' => 'logo','style' => 'height:200px, width:100px, display :block']);?>   
                <?php //} ?>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
    </div></div>
</div>
</div>