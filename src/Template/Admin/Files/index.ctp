<p>
    <?php echo $this->Html->Link('Upload File',['controller'=>'files','action'=>'upload'],['class'=>'btn btn-primary']);?>
</p>

<div class="row">
    <?php foreach($files as $file){
        
        ?>
    <div class="col-md-3">
        <div class="card">
            <div>              
            <img src="<?= $file->path;?>" height="200" width="200"/>
            </div>
            <div class="card-body">
            <h4 class="card-title"><?php echo $file->name;?></h4>
            <?php echo $this->Html->Link('Download',['action'=>'download', $file->id],['class'=>'btn btn-primary'])?>
             <?php echo $this->Html->Link('Delete',['action'=>'delete', $file->id],['class'=>'btn btn-danger'])?>
            </div>
        </div>
    </div>
    <?php }?>
</div>