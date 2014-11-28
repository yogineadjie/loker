 <h2>Input Penitipan Barang</h2>

 <?php //echo validation_errors();?>

<form action="tambah" method="post">
	<p>Nama *: <input type="text" name="nama"><?php echo form_error('nama');?></p>
	<p>No. Handphone *: <input type="text" name="no_hp"><?php echo form_error('no_hp');?></p>
	<p>Keterangan Barang : <textarea name="keterangan"></textarea></p>
	<p>Nomor Loker *: <input type="text" name="no_loker"><?php echo form_error('no_loker');?></p>
	<p><input class = "btn btn-primary" type="submit" name= "simpan" value = "Simpan"></p>
	<p><span style ="color:red">*wajib diisi</span></p>
</form> 


