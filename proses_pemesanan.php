<?php
include "koneksi.php";

$nama_pemesan = $_POST['nama_pemesan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_identitas = $_POST['nomor_identitas'];
$tipe_kamar = $_POST['tipe_kamar'];
$harga = $_POST['harga'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$durasi = $_POST['durasi'];
$termasuk_breakfast = isset($_POST['termasuk_breakfast']) ? 1 : 0;
$total_bayar = $_POST['total_bayar'];

$sql = $pdo->prepare("INSERT INTO pemesanan 
    (nama_pemesan, jenis_kelamin, nomor_identitas, tipe_kamar, harga, tanggal_pesan, durasi, termasuk_breakfast, total_bayar) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$sql->execute([$nama_pemesan, $jenis_kelamin, $nomor_identitas, $tipe_kamar, $harga, $tanggal_pesan, $durasi, $termasuk_breakfast, $total_bayar]);

header("Location: tampil.php");
exit();
?>
