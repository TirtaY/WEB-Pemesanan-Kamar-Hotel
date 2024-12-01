<?php
require_once "header.php";
?>

<?php
include "koneksi.php";

// Ambil data pemesanan terakhir
$sql = $pdo->query("SELECT * FROM pemesanan ORDER BY id DESC LIMIT 1");
$data = $sql->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Pesanan</title>
    <style>
        /* CSS untuk kontainer utama */
        .container {
            max-width: 600px;
            margin: 50px auto; /* Berikan jarak di atas dan pusatkan konten */
            background-color: #ffffff; /* Latar belakang putih untuk kontras */
            padding: 20px; /* Ruang di dalam kontainer */
            border-radius: 10px; /* Membuat sudut membulat */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Tambahkan bayangan */
        }

        /* Heading */
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        /* Paragraf detail pesanan */
        p {
            font-size: 16px;
            color: #555;
            margin: 10px 0;
            line-height: 1.5;
        }

        /* Highlight total bayar */
        p:last-child {
            font-weight: bold;
            color: #007bff; /* Biru untuk menonjolkan angka */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Detail Pesanan</h2>
        <p>Nama Pemesan: <?= htmlspecialchars($data['nama_pemesan']) ?></p>
        <p>Nomor Identitas: <?= htmlspecialchars($data['nomor_identitas']) ?></p>
        <p>Jenis Kelamin: <?= htmlspecialchars($data['jenis_kelamin']) ?></p>
        <p>Tipe Kamar: <?= htmlspecialchars($data['tipe_kamar']) ?></p>
        <p>Durasi Menginap: <?= htmlspecialchars($data['durasi']) ?> hari</p>
        <p>Total Bayar: Rp <?= number_format($data['total_bayar'], 0, ',', '.') ?></p>
    </div>
</body>
</html>
