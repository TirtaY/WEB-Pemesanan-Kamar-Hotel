<?php
	require_once "header.php";

?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>

	<div id="imgindex">
		<div id="imglog">
			<p><br>Selamat Datang<br>
			<a href="daftar-harga.php" id="tomboll">Cek Kamar</a>
			<a href="pemesanan.php" id="tombol2">Pesan Sekarang</a><br>&nbsp;</p>
		</div>
	</div>

			<div id="tentang">
				<h3>Tentang Kami</h3><br>
				<p>
					Selamat datang di Hotel BNSP, tempat kenyamanan dan kemewahan berpadu untuk menciptakan pengalaman menginap yang tak terlupakan. Kami berkomitmen untuk memberikan pelayanan terbaik dengan fasilitas yang memenuhi kebutuhan Anda, baik untuk perjalanan bisnis maupun liburan.
					Hotel kami menawarkan berbagai pilihan kamar yang nyaman, restoran dengan menu lezat, dan layanan ramah dari staf profesional kami. Lokasi strategis kami memberikan akses mudah ke berbagai destinasi wisata dan bisnis di kota ini.
				</p><br>

			</center>