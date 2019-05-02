<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $profile->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Profiles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="profiles form large-9 medium-8 columns content">
    <?= $this->Form->create($profile) ?>
    <fieldset>
        <legend><?= __('Edit Profile') ?></legend>
        <?php
            echo $this->Form->control('uniquehandle');
            echo $this->Form->control('position');
            echo $this->Form->control('current_institution');
            echo $this->Form->control('website');
            echo $this->Form->control('region');
            echo $this->Form->control('skills');
            echo $this->Form->control('about');
            echo $this->Form->control('link1');
            echo $this->Form->control('link2');
            echo $this->Form->control('link3');
            echo $this->Form->control('link4');
            echo $this->Form->control('link5');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
