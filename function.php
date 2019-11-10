<?php 
$servername = "localhost";
$username = "id10110477_emrifan6";
$password = "emrifan6";
$database = "id10110477_e_library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}




function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah($data) {
	global $conn;

	$isbn = htmlspecialchars($data["isbn"]);
	$judul_buku = htmlspecialchars($data["judul_buku"]);
	$pengarang = htmlspecialchars($data["pengarang"]);
	$kota_terbit = htmlspecialchars($data["kota_terbit"]);
	$tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
	$edisi = htmlspecialchars($data["edisi"]);

	$query = "INSERT INTO daftar_buku VALUES (NULL, '$isbn', '$judul_buku','$pengarang', '$kota_terbit','$tahun_terbit', '$edisi')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM daftar_buku WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$isbn = htmlspecialchars($data["isbn"]);
	$judul_buku = htmlspecialchars($data["judul_buku"]);
	$pengarang = htmlspecialchars($data["pengarang"]);
	$kota_terbit = htmlspecialchars($data["kota_terbit"]);
	$tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
	$edisi = htmlspecialchars($data["edisi"]);

	$query = "UPDATE daftar_buku SET
				isbn = '$isbn',
				judul_buku = '$judul_buku',
				pengarang = '$pengarang',
				kota_terbit = '$kota_terbit',
				tahun_terbit = '$tahun_terbit',
				edisi = '$edisi'
			  WHERE id = $id
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}
?>