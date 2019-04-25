<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Profile $profile
 */
?>


  <!-- Create Profile -->
  <div class="create-profile">
    <div class="container">
      <div class="row">
        <div class="col-md-8 m-auto">
            <div class="container">
          <?php echo $this->Html->link('Back', array('controller' => 'users', 'action' => 'index'),['class'=>'btn btn-danger']); ?>
           <?= $this->Html->link(__('List Profiles'), ['action' => 'index'],['class'=>'btn btn-primary']) ?> 
            </div>
          <h1 class="display-4 text-center">Create Your Profile</h1>
          <p class="lead text-center">Let's get some information to make your profile stand out</p>
          <small class="d-block pb-3">* = required field</small>
         <?= $this->Form->create($profile) ?>
            <div class="form-group">
                <?php echo $this->Form->control('current_institution',['class' => 'form-control form-control-lg','placeholder'=>'* Profile handle', 'label'=>false]);?>
              <small class="form-text text-muted">A unique handle for your profile URL. Your full name, company name, nickname, etc (This CAN'T be changed later)</small>
            </div>
              <div class="form-group">
              <?php  echo $this->Form->select('position',['Empty'=>'*Select Professional Stutus','Developer', 'Junior Developer','Senior Developer','Manager','Student or Learning','Instructor or Teacher','Intern','Other'],['class'=>'form-control form-control-lg']); ?>
              
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('current_institution',['class' => 'form-control form-control-lg','placeholder'=>'Give us an idea of where you are at in your career', 'label'=>false]);?>
              <input type="text" class="form-control form-control-lg" placeholder="Company" name="company" />
              <small class="form-text text-muted">Could be your own company or one you work for</small>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('website',['class' => 'form-control form-control-lg','placeholder'=>'Website', 'label'=>false]);?>
              <small class="form-text text-muted">Could be your own or a company website</small>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('region',['class' => 'form-control form-control-lg','placeholder'=>'Region', 'label'=>false]);?>
              <small class="form-text text-muted">Please lets know your current Region</small>
            </div>
            <div class="form-group">
                <?php echo $this->Form->control('skills',['class' => 'form-control form-control-lg','placeholder'=>'Skills', 'label'=>false]);?>
              <small class="form-text text-muted">Please use comma separated values (eg. HTML,CSS,JavaScript,PHP)</small>
            </div>
           
            <div class="form-group">
                <?php echo $this->Form->control('about',['class' => 'form-control form-control-lg','placeholder'=>'A short bio of yourself', 'label'=>false]);?>
              <small class="form-text text-muted">Tell us a little about yourself</small>
            </div>

            <div class="mb-3">
              <button type="button" class="btn btn-light">Add Social Network Links</button>
              <span class="text-muted">Optional</span>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fab fa-twitter"></i>
                </span>
              </div>
                 <?php echo $this->Form->control('link1',['class' => 'form-control form-control-lg','placeholder'=>'Twitter Profile URL', 'label'=>false]); ?>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fab fa-facebook"></i>
                </span>
              </div>
                <?php echo $this->Form->control('link2',['class' => 'form-control form-control-lg','placeholder'=>'Facebook Page URL', 'label'=>false]); ?>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fab fa-linkedin"></i>
                </span>
              </div>
              <?php echo $this->Form->control('link3',['class' => 'form-control form-control-lg','placeholder'=>'Linkedin Profile URL', 'label'=>false]); ?>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fab fa-youtube"></i>
                </span>
              </div>
                 <?php echo $this->Form->control('link4',['class' => 'form-control form-control-lg','placeholder'=>'YouTube Channel URL', 'label'=>false]); ?>
            </div>

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fab fa-instagram"></i>
                </span>
              </div>
                <?php echo $this->Form->control('link5',['class' => 'form-control form-control-lg','placeholder'=>'Instagram Page URL', 'label'=>false]); ?>
              
            </div>
            
            <?= $this->Form->button(('Submit'),['class' => 'btn btn-info btn-block mt-4']); ?>
            <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>
