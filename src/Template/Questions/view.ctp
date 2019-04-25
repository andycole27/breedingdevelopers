<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="feed">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- Post Feed -->
          <div class="posts">
            <!-- Post Item -->
            <div class="card card-body mb-3">
              <div class="row">
                <div class="col-md-2">
                  <a href="profile.html">
                    <img class="rounded-circle d-none d-md-block" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200"
                      alt="" />
                  </a>
                  <br />
                  <p class="text-center"><?php echo $this->request->session()->read('Auth.User.username'); ?></p>
                </div>
                <div class="col-md-10">
                  <p class="lead"><?= h($question->body) ?></p>
                  <button type="button" class="btn btn-light mr-1">
                    <i class="text-info fas fa-thumbs-up"></i>
                    <span class="badge badge-light">4</span>
                  </button>
                  <button type="button" class="btn btn-light mr-1">
                    <i class="text-secondary fas fa-thumbs-down"></i>
                  </button>
                
                    
                  <?= h($question->created) ?>
                  <!-- <button type="button" class="btn btn-danger mr-1">
                    <i class="fas fa-times" />
                  </button> -->
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
 <div class="card-header bg-info text-white">
                Say Somthing About The Question...
    </div>
   
    
    <div class="related">
        <h4><?= __('Answers') ?></h4>
        <?php if (!empty($question->answers)): ?>
         <div class="container">
             <div class="row">
              
                 <div class="col-md-10">
            <?php foreach ($question->answers as $answers): ?>
             <br>
             <a href="profile.html">
                    <img class="rounded-circle d-none d-md-block" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50?s=200"
                      alt="" />
                 </a>
                    
                <?php echo $this->request->session()->read('Auth.User.username'); ?> <p class="lead"><?= h($answers->answer) ?></p>
                
               
              
                
                
           
            <?php endforeach; ?>
          
        <?php endif; ?>
                  <div>
    <?= $this->Form->create($answer) ?>
    <fieldset>
        <legend><?= __('Add Answer') ?></legend>
        <?php
            echo $this->Form->control('answer',['type' => 'textarea', 'escape' => false]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->hidden('question_id', ['values' => $questions]);
        ?>
    </fieldset>
    <?= $this->Form->button('Submit',['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
        </div>
            </div>
                  </div>
             </div>
    </div>
        
    
     </div>
</div>

