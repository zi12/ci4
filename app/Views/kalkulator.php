<?php echo $this->extend('template/layout') ?>

<?php echo $this->section('content'); ?> 

<div class="content">
	<center>
	<h1><?= $judul; ?></h1>
	<form action="/segitiga/proses" method="post">
	    <?= csrf_field(); ?>
	<p>
		1/2 x
		<input type="text" name="angka1" value="<?= $angka1; ?>"> x
		<input type="text" name="angka2" value="<?= $angka2; ?>"> =
		<?= $hasil; ?>
	</p>
	<p><button type="submit" class="button button2">hitung</button></p>
	</form>
	</center>
</div>

<?php echo $this->endSection(); ?>
