
 <div class="register">
    <div class="container">
      <div class="row">
        <div class="col-md-8 m-auto">
            <?= $this->Flash->render() ?>  
          <h1 class="display-4 text-center">Sign Up</h1>
          <p class="lead text-center">Create your Bleeding Developers account</p>
          <?= $this->Form->create($user,['type'=>'file']) ?>
            <div class="form-group">
        <?php echo $this->Form->control('username', ['class'=>'form-control form-control-lg', 'placeholder'=>'Enter Username', 'label'=> false ]); ?>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('Email', ['class'=>'form-control form-control-lg', 'placeholder'=>'Email Address','label'=> false ]); ?>
            </div>
            <div class="form-group">
              <?php echo $this->Form->control('password', ['class'=>'form-control form-control-lg', 'placeholder'=>'Enter Password','label'=> false ]); ?>
            </div>
            <!--<div class="form-group">
              <input type="password" class="form-control form-control-lg" placeholder="Confirm Password" name="password2" />
            </div> -->
            <div class="form-group">
            <?= $this->Form->button('Submit',['class'=>'btn btn-primary ']); ?>
            <?= $this->Html->link('Back', ['controller'=>'Users','action'=>'login'],['class'=>'btn btn-danger']); ?></div>
            <?= $this->Form->end() ?>
            
          </form>
        </div>
      </div>
    </div>
  </div>

