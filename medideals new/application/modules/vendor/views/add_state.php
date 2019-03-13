<?php
$timeNow = time();
?>
<script src="<?= base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/bootstrap-select-1.12.1/bootstrap-select.min.css') ?>">
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <?php
        if ($this->session->flashdata('result_publish')) {
            ?> 
            <div class="alert alert-success"><?= $this->session->flashdata('result_publish') ?></div> 
            <?php
        }
        ?>
        <div class="content">
            <form class="form-box" action="<?php echo base_url('vendor/Addproduct/Savestate'); ?>" method="POST" enctype="multipart/form-data">
         
                    <div class="form-group">
                        
                        <input type="text" name="name" placeholder="State Name" value="" class="form-control">
                    </div>
                 
                
                
                <button type="submit" name="setProduct" class="btn btn-green">Submit</button>
            </form> 
        </div>
    </div>
</div>
<!-- Modal Upload More Images -->

<script src="<?= base_url('assets/bootstrap-select-1.12.1/js/bootstrap-select.min.js') ?>"></script>