<div class="container">
<h2>Upload data bukti pembayaran</h2>
<?php if ($this->session->flashdata('pesan')): ?>
<div class="alert-warning">
<?=$this->session->flashdata('pesan');?>
</div>
<?php endif ?>
<br>		
<form action="<?=base_url('index.php/cart/proses_upload')?>" method="post" enctype="multipart/form-data">
	<input type="hidden" name="id_nota" value="<?=$id_nota?>">
	<input type="file" name="bukti" class="form-control">
	<br>
	<br>
	<input type="submit" name="upload" value="UPLOAD" class="btn btn-success">
	<br>
	<br>
	<br>
	<br>
</form>
</div>