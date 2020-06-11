<h2>Daftar Film</h2>
<?php 
foreach ($tampil_film as $film) {
?>

	
<div class="col-md-4">
	<a href="<?=base_url('index.php/bioskop/detail_film/'.$film->id_film)?>" class="thumbnail">
		<img src="<?=base_url()?>asset/img/<?=$film->gambar_film;?>" style="width: 100%">
		<div class="caption">
			<?=$film->nama_film;?>
		</div>
	</a>
</div>
<?php 

}

?>
