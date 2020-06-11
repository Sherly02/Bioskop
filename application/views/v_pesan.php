<div class="container">
<h2>Daftar Pesanan Saya</h2>
<table id="example1" class="table table-hover table-striped dataTable">
	<thead>
		<tr><td>NO</td><td>No Nota</td><td>Grand Total</td><td>Status</td><td>Konfirm</td><td>Detail</td></tr>
	</thead>
	<tbody>
		<?php $no=0; foreach ($pesanan as $psn): $no++; ?>
			<tr><td><?=$no?></td><td><?=$psn->id_nota?></td><td><?=$psn->grand_total?></td><td><?=$psn->status?></td><td>
				<?php if ($psn->bukti==""): ?>
					<a href="<?=base_url('index.php/cart/konfirm/'.$psn->id_nota)?>">Konfirmasi</a> | <a href="<?=base_url('index.php/pesanan/hapus/'.$psn->id_nota)?>"> Cancel </a>
				<?php else: ?>
					Lunas
				<?php endif ?>
			</td><td>Lihat Barang</td></tr>
		<?php endforeach ?>
	</tbody>
</table>
</div>
<br>
<br>
<br>