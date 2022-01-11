<?= $this->extend('template/layout') ?>  
<?= $this->section('content'); ?>         
        <!-- content -->  
        <div class="content">              
        	<h2><?= $judul; ?></h2>              
        	<p><?= $isi; ?></p>          
        </div>          
        <!-- content -->   
    </div>    
</div>    
<?= $this->endSection(); ?>
