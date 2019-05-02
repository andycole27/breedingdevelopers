<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <div class="col-md-4 col-lg-3 col-sm-4">
<?php echo $this->element('side_menu/side_login', ['viewName' => 'Users']); ?>
   </div>
    <div class="col-md-8 col-lg-9 col-sm-8">
 <table cellpadding="0" cellspacing="0" class="table table-hover table-responsive table-stripe">
    <h3><?= __('Users') ?></h3>
   
        <thead>
            <tr>
         <th scope="col"><?= $this->Paginator->sort('username') ?></th>
               
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
               
                <td><?= h($user->username) ?></td>
                
                <td><?= h($user->email) ?></td>
               
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class'=>'btn btn-success']) ?>
                    <?= $this->Html->link(__('i:edit Edit'), ['action' => 'edit', $user->id],['class'=>'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id],['class'=>'btn btn-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    

    </div>
//////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////
 <!-- Dashboard -->
  <div class="dashboard">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4">Dashboard</h1>
          <p class="lead text-muted">Welcome <?= h($user->username) ?></p>
          <!-- Dashboard Actions -->
          <div class="btn-group mb-4" role="group">
             <?= $this->Html->link(__('Edit Profile'),array('controller'=>'users','action' => 'edit', $user->id),['class'=>'btn btn-success']) ?>
            
            <?= $this->Html->link('Add Profile', array('controller'=>'profiles','action' => 'add'),['class'=>'btn btn-primary']) ?>
              
               <?= $this->Html->link(__('View Profile'), ['action' => 'view', $user->id],['class'=>'btn btn-success']) ?>
              
          </div>

          <!-- Experience -->
          <div>
            <h4 class="mb-2">Experience Credentials</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>Company</th>
                  <th>Title</th>
                  <th>Years</th>
                  <th />
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tech Guy Web Solutions</td>
                  <td>Senior Developer</td>
                  <td>
                    02-03-2009 - 01-02-2014
                  </td>
                  <td>
                    <button class="btn btn-danger">
                      Delete
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>Traversy Media</td>
                  <td>Instructor & Developer</td>
                  <td>
                    02-03-2015 - Now
                  </td>
                  <td>
                    <button class="btn btn-danger">
                      Delete
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Education -->
          <div>
            <h4 class="mb-2">Education Credentials</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>School</th>
                  <th>Degree</th>
                  <th>Years</th>
                  <th />
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Northern Essex</td>
                  <td>Associates</td>
                  <td>
                    02-03-2007 - 01-02-2009
                  </td>
                  <td>
                    <button class="btn btn-danger">
                      Delete
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div style="margin-bottom: 60px;">
            <button class="btn btn-danger">
              Delete My Account
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
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
