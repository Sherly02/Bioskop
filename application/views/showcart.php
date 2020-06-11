<div class="container">
<h2>Detail Pembelian</h2>
<form action="<?=base_url('index.php/cart/simpan')?>" method="post">
<table class="table table-hover table-stripped">
	<tr>
		<td>ID Film</td><td>Nama Film</td><td>Jumlah</td><td>Harga</td><td>Genre</td><td>Aksi</td><td>Subtotal</td>
	</tr>

	<?php 
		foreach($this->cart->contents() as $items){


	?>
	<tr>
		<input type="hidden" name="id_film[]" value="<?=$items['id']?>"> <input type="hidden" name="qty[]" value="<?=$items['qty']?>">

		<td><?=$items['id']?></td><td><?=$items['name']?></td><td><?=$items['qty']?></td><td><?=$items['price']?></td><td><?=$items['options']['kategori']?></td><td><a href="<?=base_url('index.php/cart/hapus_item/'.$items['rowid'])?>" onclick="return confirm('apakah anda yakin?')">Hapus</a></td><td><?=$items['subtotal']?></td>
	</tr>

		<?php } ?>
	<tr>
		<input type="hidden" name="grand_total" value="<?=$this->cart->total()?>">
		<td colspan="6">Grand Total</td><td><?=$this->cart->total()?></td>
	</tr>


</table>
<input type="submit" name="simpan" value="check-out" class="btn btn-success">

<br>
<br>
</form>
</div>