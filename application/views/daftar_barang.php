<h2>Daftar Penitipan Barang</h2>


<?php
echo anchor('barang/tambah', 'tambah barang', 'title="tambah barang"');
echo " ";
echo anchor('logout', 'LOGOUT', 'title="logout"'); ?>
<p>berikut adalah view untuk daftar penitipan barang :</p>
<?php if ($barang) { ?>
<table border = 1>
	<tr>
		<td>Nomer Transaksi</td>
		<td>Nama Pemilik</td>
		<td>Nomer HP</td>
		<td>Keterangan Barang</td>
	</tr>
	<?php 
	foreach($barang as $item) {
		echo "<tr>";
		echo "<td>".$item['id_transaksi']."</td>";
		echo "<td>".$item['nama_pengguna']."</td>";
		echo "<td>".$item['no_hp']."</td>";
		echo "<td>".$item['keterangan']."</td>";
		echo "</tr>";
	}
	?>
</table>
<?php } else { echo "Data masih kosong"; } ?>
