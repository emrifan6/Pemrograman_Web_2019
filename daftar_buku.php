<?php 
require 'function.php';
$daftar_buku = query("SELECT * FROM daftar_buku");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman User</title>
</head>
<body>

<h1>Daftar Buku</h1>

<br><br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>ISBN</th>
		<th>JUDUL</th>
		<th>PENGARANG</th>
		<th>KOTA TERBIT</th>
		<th>TAHUN TERBIT</th>
		<th>EDISI</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $daftar_buku as $row ) : ?>
	<tr>
		
		<td><?= $i; ?></td>
		<td><?= $row["isbn"]; ?></td>
		<td><?= $row["judul_buku"]; ?></td>
		<td><?= $row["pengarang"]; ?></td>
		<td><?= $row["kota_terbit"]; ?></td>
		<td><?= $row["tahun_terbit"]; ?></td>
		<td><?= $row["edisi"]; ?></td>

	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</body>
</html>