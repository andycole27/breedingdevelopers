    <div class="related">
        <?php echo $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add', $application->id], ['class' => 'right']) ?>
        <h3><?php echo __('Documents') ?></h3>
        <?php if (!empty($application->documents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?php echo __('Name') ?>
                <th scope="col"><?php echo __('Description') ?>
                <th scope="col" class="actions"><?php echo __('Actions') ?>
            </tr>
            <?php foreach ($application->documents as $documents): ?>
            <tr>
                <td><?php echo $this->Html->link($documents->name, '/files/' . $documents->filename) ?>
                <td><?php echo h($documents->description) ?></td>
                <td class="actions">
                    <?php echo $this->Html->link(__('View'), '/files/' . $documents->filename) ?> |
                    <?php echo $this->Html->link(__('Edit'), ['controller' => 'Documents', 'action' => 'edit', $documents->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
