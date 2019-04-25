<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Question $question
 */
?>
<div class="row">
    
</nav>
        </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Add Question') ?></legend>
        <?php
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('title');
            echo $this->Form->control('body');
           
        ?>
    </fieldset>
    <?= $this->Form->button('Submit',['bootstrap-type' => 'primary']) ?>
    <?= $this->Form->end() ?>

        </div>
</div>