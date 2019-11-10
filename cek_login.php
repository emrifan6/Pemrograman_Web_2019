<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
require 'function.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data user dengan username dan password yang sesuai
$data = mysqli_query($conn,"select * from user where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$login = mysqli_fetch_assoc($data);
	if($login['level']=="admin"){
 
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		
		echo "
			<script>
				alert('Berhasil Login Sebagai Admin');
				document.location.href = 'daftar_buku_admin.php';
			</script>
		";
		}else if($login['level']=="user"){
		
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		echo "
			<script>
				alert('Berhasil Login Sebagai User');
				document.location.href = 'daftar_buku.php';
			</script>
		";
		}else{
		echo "
			<script>
				alert('Login Gagal');
				document.location.href = 'index.php';
			</script>
		";
			}	
	
	}else{
		echo "
			<script>
				alert('Login Gagal');
				document.location.href = 'index.php';
			</script>
		";
			}
?>