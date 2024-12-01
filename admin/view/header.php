<?php
	session_start();
	require_once "fungsi/koneksi.php";
	if(!isset($_SESSION['ceklog'])) {
?>
		<html>
		<head>
		<title></title>
		<script type="text/javascript" src="../lib/sweet.js"></script>
		</head>
		<body>
			<script>
				swal({
			  		title: 'Oops...?',
			  		text: 'Silahkan Login Terlebih Dahulu!',
			  		showConfirmButton: false,
			  		type: 'warning',
			  		backdrop: 'rgba(123,0,0,5)',
				});
				window.setTimeout(function(){
					window.location.replace('index.php');
		 		} ,2000); 
		 	</script>;
		</body>
		</html>
<?php
	}	
?>

<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
	<header>
		<h1 class="judul">Pemesanan Kamar Hotel</h1>
		<h3 class="desc">Halaman Admin</h3>
	</header>

	<nav>
		<ul>
			
		</ul>
	</nav>

	<main>
		<ul>
			<li><a href="beranda.php" class="kiri">Beranda Admin</a></li>
			<li><a href="inputkamar.php" class="kiri">Input Kamar</a></li>
			<li><a href="datakamar.php" class="kiri">Data Kamar</a></li>
			<li><a href="fungsi/proseskeluar.php" class="kiri">Keluar</a></li>
		</ul>
		
	</main>