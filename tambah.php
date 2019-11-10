<?php
require 'function.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'daftar_buku_admin.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'daftar_buku_admin.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Buku</title>
</head>
<body>
	<h1>Tambah data Buku</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="isbn">ISBN : </label>
				<input type="text" name="isbn" id="isbn" required>
			</li>
			<li>
				<label for="judul_buku">JUDUL : </label>
				<input type="text" name="judul_buku" id="judul_buku">
			</li>
			<li>
				<label for="pengarang">PENGARANG :</label>
				<input type="text" name="pengarang" id="pengarang">
			</li>
			<li>
				<label for="kota_terbit">KOTA TERBIT :</label>
				<input type="text" name="kota_terbit" id="kota_terbit">
			</li>
			<li>
				<label for="tahun_terbit">TAHUN TERBIT :</label>
				<input type="text" name="tahun_terbit" id="tahun_terbit">
			</li>
			<li>
				<label for="edis">EDISI :</label>
				<input type="text" name="edisi" id="edisi">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>