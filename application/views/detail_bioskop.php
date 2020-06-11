<div class="col-md-4">
	<center><img width="80%" src="<?= base_url()?>asset/img/<?=$detail->gambar_film;?>"></center>

</div>
<div class="col-md-8">
	<table class="table table-hover table-stripped">
		<tr>
			<td>Judul Film</td><td><?=$detail->nama_film;?></td>
		</tr>
		<tr>
			<td>Deskripsi</td><td><?=$detail->deskripsi_film;?></td>
		</tr>
		<tr>
			<td>Kategori </td><td><?=$detail->nama_kategori ?></td>
		</tr>

		<tr>
			<td>Film</td><td>
         <input type="text" name="Film" value="<?=$detail->nama_film;?>" disabled > 
        </td>
		</tr>
		<tr>
			<td>Jam</td><td><select name="input_jam" ><option value="#"> - Pilih - </option><option value="jam1"> 10.00 - 12.00 </option><option value="jam2"> 12.30 - 14.30 </option></select></td>
		</tr>
		<tr>
			<td>Studio</td><td><select name="input_studio" ><option value="#"> - Pilih - </option><option value="studio_a"> Studio A </option><option value="studio_b"> Studio B </option><option value="studio_c"> Studio C </option></select></td>
		</tr>
		<tr>
			<td>Harga Tiket</td><td><input  value="RP 45.000" name="input_jumlah_tiket" size=10 disabled></td>

		</tr>
		<tr>
			<td>Nomor Kursi</td><td><input type="text" name="input_no_kursi" size=10></td>

		</tr>
      <tr>
      	<td></td><td><a href="<?=base_url($url)?>" ><button class=" btn btn-success"><?=$beli?></button></a></td>
      </tr>
     
	</table>


    <style>
      form{line-height:2em} label, select,input{ margin-left: 95px; width: 120px; display: block; float: left; line-height: 15px } </style>

</html>
