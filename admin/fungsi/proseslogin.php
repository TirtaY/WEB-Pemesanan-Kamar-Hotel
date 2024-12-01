<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="../../lib/sweet.js"></script>
</head>
<body>

<?php
	include "koneksi.php";
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = $pdo->query("SELECT * FROM login WHERE username='$user' AND password='$pass'");
	$cari = $sql->rowCount();
	$akses= $sql->fetch();
	if($cari){
		session_start();
		$_SESSION['ceklog'] = $akses['username'];
		echo "<script>swal({
	  	type: 'success',
	  	title: 'Login Sukses!',
	  	showConfirmButton: false,
	  	backdrop: 'rgba(0,0,123,0.5)',
		});
		window.setTimeout(function(){
			window.location.replace('../beranda.php');
 		} ,1500); </script>";
	}
	else{
		echo "<script>swal({
	  	type: 'error',
	  	title: 'Login Gagal!',
	  	showConfirmButton: false,
	  	backdrop: 'rgba(123,0,0,0.5)',
		});
		window.setTimeout(function(){
			window.location.replace('../');
 		} ,1500); </script>";
	}
?>

</body>
</html>