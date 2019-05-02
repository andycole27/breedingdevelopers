<p>
    <?php echo $this->Html->Link('Upload File',['actions'=>'upload'],['class'=>'btn btn-primary']);?>
</p>

<div class="row">
    <?php 
    foreach($files as $file){
    ?>
    <div class="col-md-3" >      
    <div class=" card">
<div class="card-body">
            <div>
                <img src="<?= $file->path;?>"  height="200" width="200"/>
            </div>
        <h3 class="card-title"><?php echo $file->name; ?> </h3>
         </div>
         <?php echo $this->Html->Link('Download',['action'=>'download', $file->id],['class'=>'btn btn-primary'])?>
         <?php echo $this->Html->Link('Delete',['action'=>'delete', $file->id],['class'=>'btn btn-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $file->id)])?>
           
          </div>
    </div>
    <?php }?>
</div>