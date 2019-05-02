
<div class="row">
    <?php echo $this->element('courses');?>
<div class="col-md-4 col-md-offset-8" style="margin-top: 40px;">
 <div><?= $this->Flash->render() ?></div>
             <div class="panel-title"> <legend><?= __('Enter email and password') ?></legend></div>
                  <?= $this->Form->create() ?>
                    
	<div class="form-group">
	  <?= $this->Form->control('email',['class' => 'form-control']) ?>
	</div>
	<div class="form-group">
         <?= $this->Form->control('password',['class' => 'form-control']) ?>
	</div>
        <div class="form-group"> <?= $this->Form->button(('Login'),['class' => 'btn3d btn btn-magick btn-lg btn-block']); ?></div>
        <div class="form-group"><?= $this->Html->link('Register', ['action'=>'register'],['class'=>'btn btn-primary']);?>
        <?= $this->Html->link('Forgot Password', ['action'=>'forgotpassword'],['class'=>'btn btn-success']);?></div>
        <?= $this->Form->end(); ?>
       
                      <hr/>
                    </div>
		
</div>
    
