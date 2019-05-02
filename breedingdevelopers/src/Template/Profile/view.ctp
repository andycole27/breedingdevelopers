<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Profile'), ['action' => 'edit', $profile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Profile'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Profile'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="profile view large-9 medium-8 columns content">
    <h3><?= h($profile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uniquehandle') ?></th>
            <td><?= h($profile->uniquehandle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Current Institution') ?></th>
            <td><?= h($profile->current_institution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Website') ?></th>
            <td><?= h($profile->website) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($profile->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skills') ?></th>
            <td><?= h($profile->skills) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link1') ?></th>
            <td><?= h($profile->link1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link2') ?></th>
            <td><?= h($profile->link2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link3') ?></th>
            <td><?= h($profile->link3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link4') ?></th>
            <td><?= h($profile->link4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link5') ?></th>
            <td><?= h($profile->link5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($profile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $this->Number->format($profile->position) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('About') ?></h4>
        <?= $this->Text->autoParagraph(h($profile->about)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($profile->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Profile Id') ?></th>
                <th scope="col"><?= __('Username') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Token') ?></th>
                <th scope="col"><?= __('Verified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($profile->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->profile_id) ?></td>
                <td><?= h($users->username) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->role) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->token) ?></td>
                <td><?= h($users->verified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
