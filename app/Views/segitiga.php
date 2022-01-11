<?php echo $this->extend('template/layout') ?>

<?php echo $this->section('content'); ?> 

<div class="content">
	<h1><?= $judul; ?></h1>
	<form action="/segitiga/proses" method="post">
	    <?= csrf_field(); ?>
		<label>
			masukan alas :
		</label>
		<input type="text" name="angka1" value="<?= $angka1; ?>"> 
		<br>
		<p>x</p>
		<label>
			masukan tinggi :
		</label>
		<input id="b" type="text" name="angka2" value="<?= $angka2; ?>"> 
		<br><br>
		<label>
			hasil :
		</label>
		<input type="text" id="a" value="<?= $hasil; ?>"> 
	<button type="submit" class="button button2">hitung</button>
	</form>
	</center>
</div>

<?php echo $this->endSection(); ?>