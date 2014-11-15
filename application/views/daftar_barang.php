<h2>Daftar Penitipan Barang</h2>

<p>berikut adalah view untuk daftar penitipan barang :</p>
<table>
	<tr>
		<td>Nomer Transaksi</td>
		<td>Nama Pemilik</td>
		<td>Keterangan Barang</td>
	</tr>
	<?php 
	foreach($barang as $item) {
		echo "<tr>";
		echo "<td>$item[0]</td>";
		echo "<td>$item[1]</td>";
		echo "<td>$item[2]</td>";
		echo "</tr>";
	}
	?>
</table>