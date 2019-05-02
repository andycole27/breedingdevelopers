   <div class="col-md-8 col-lg-9 col-sm-8">
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('role', [
            'options' => ['admin' => 'Admin', 'student' => 'Student']]);
            echo $this->Form->control('email');
            
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
     </div>