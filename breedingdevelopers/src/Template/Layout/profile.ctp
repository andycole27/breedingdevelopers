<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?= h($user->username) ?></h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="<?php echo $user1->image; ?>" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <?= $this->Form->create($user) ?>
        <?php
            echo $this->Form->file('image',['class'=>'form-control']);
         ?>
         <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
         <?= $this->Form->end() ?>
      </div><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Bleeding Developers <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><?= $this->Html->link(__('btechsolutionghana'), ['action' => 'index']) ?></div>
          </div>
    
        </div><!--/col-3-->
        <div class="col-sm-9">
         <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Profile Details</h3>
                  </div>
                  <div class="col col-xs-6 btn text-right">
                    <?= $this->Html->link(__('Edit User'),['action' => 'edit', $user->id]) ?> 
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                       <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs"><?= __('Username')?></th>
                        <th><?= __('Created')?></th>
                        <th><?= __('Email')?></th>
                    </tr> 
                  </thead>
              <tbody>
                          <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs"><?= h($user->username) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->email) ?></td>
                          </tr>
             </tbody>
        </table>
            
              </div>
            
            </div>

</div></div></div>
    <hr>
 </div>
              