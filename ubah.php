<?php
require 'function.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$buku = query("SELECT * FROM daftar_buku WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'daftar_buku_admin.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'daftar_buku_admin.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data Buku</title>
</head>
<body>
	<h1>Ubah data Buku</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $buku["id"]; ?>">
		<ul>
			<li>
				<label for="isbn">ISBN : </label>
				<input type="text" name="isbn" id="isbn" required value="<?= $buku["isbn"]; ?>">
			</li>
			<li>
				<label for="judul_buku">JUDUL BUKU : </label>
				<input type="text" name="judul_buku" id="judul_buku" required value="<?= $buku["judul_buku"]; ?>">
			</li>
			<li>
				<label for="pengarang">PENGARANG :</label>
				<input type="text" name="pengarang" id="pengarang" required value="<?= $buku["pengarang"]; ?>">
			</li>
			<li>
				<label for="kota_terbit">KOTA TERBIT :</label>
				<input type="text" name="kota_terbit" id="kota_terbit"  required value="<?= $buku["kota_terbit"]; ?>">
			</li>
			<li>
				<label for="tahun_terbit">TAHUN TERBIT :</label>
				<input type="text" name="tahun_terbit" id="tahun_terbit"  required value="<?= $buku["tahun_terbit"]; ?>">
			</li>
			<li>
				<label for="edis">EDISI :</label>
				<input type="text" name="edisi" id="edisi"  required value="<?= $buku["edisi"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>