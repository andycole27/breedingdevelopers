<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question[]|\Cake\Collection\CollectionInterface $questions
 */
?>
<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<form class="input-group" role="search" action="<?php echo $this->Url->build(['action'=>'search'])?>" method="get">
       <input type="search" name="q" class="form-control"/>
          
        <button class="btn btn-primary input-group-text" type="submit">Search</button>  
        
 </form>        

<h3 class="card-header"><?= __('Questions') ?></h3>
 <?php foreach ($questions as $question): ?>
          <!-- Post -->
  <div class="post">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
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
                <?= $this->Html->link(__('Answer'), ['action' => 'view', $question->id]) ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>        
             <?php endforeach; ?>    
       <?php //}else {?>
               <?php //$this->Html->image('andy',['alt' => 'logo','style' => 'height:200px, width:100px, display :block']);?>   
                <?php //} ?>
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
    </div></div>
</div>
</div>
<script>
$('.selectall').click(function(){
    $('.selectbox').prop(function('checked',$(this).prop('checked'));
     $('.selectall2').prop(function('checked',$(this).prop('checked'));
           ) });
$('.selectall2').click(function(){
    $('.selectbox').prop(function('checked',$(this).prop('checked'));
     $('.selectall').prop(function('checked',$(this).prop('checked'));
            )});
 $('.selectbox').click(function(){
     
   var total = $('.selectbox').length;  
    var number = $('.selectbox:checked').length;
    if(total == number){
        $('.selectall').prop('checked', true);
          $('.selectall2').prop('checked', true);
    }else{
         $('.selectall').prop('checked', false);
          $('.selectall2').prop('checked', false);
    }
 });                   




</script>