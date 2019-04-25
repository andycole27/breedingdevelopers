<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile[]|\Cake\Collection\CollectionInterface $profiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Profile'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="profiles index large-9 medium-8 columns content">
    <h3><?= __('Profiles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uniquehandle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('current_institution') ?></th>
                <th scope="col"><?= $this->Paginator->sort('website') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skills') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link5') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($profiles as $profile): ?>
            <tr>
                <td><?= $this->Number->format($profile->id) ?></td>
                <td><?= h($profile->uniquehandle) ?></td>
                <td><?= $this->Number->format($profile->position) ?></td>
                <td><?= h($profile->current_institution) ?></td>
                <td><?= h($profile->website) ?></td>
                <td><?= h($profile->region) ?></td>
                <td><?= h($profile->skills) ?></td>
                <td><?= h($profile->link1) ?></td>
                <td><?= h($profile->link2) ?></td>
                <td><?= h($profile->link3) ?></td>
                <td><?= h($profile->link4) ?></td>
                <td><?= h($profile->link5) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $profile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
</div>
