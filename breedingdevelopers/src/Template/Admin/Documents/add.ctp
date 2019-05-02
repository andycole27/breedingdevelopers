<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Applications'), ['controller' => 'Applications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Application'), ['controller' => 'Applications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="documents form large-9 medium-8 columns content">
    <?= $this->Form->create($document, ['type'=>'file']) ?>
    <fieldset>
        <legend><?= __('Add Document') ?></legend>
        <?php
        echo $this->Form->input('application', ['type' => 'text', 'default' => $application_id, 'disabled' => true]);
            echo $this->Form->control('application_id', ['type'=>'hidden','options' => $application_id]);
            echo $this->Form->control('user_id', ['type'=>'hidden','options' => $user_id]);
            echo $this->Form->control('name',['autofocus'=>'true']);
            echo $this->Form->control('filename',['type'=>'file','require'=>'true']);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit',['class'=>'btn-primary'])) ?>
    <?php echo $this->Html->Link('Cancel',['controller'=>'Applications','action'=>'view',$application_id],['class'=>'btn btn-danger']) ?>
    <?= $this->Form->end() ?>
</div>
