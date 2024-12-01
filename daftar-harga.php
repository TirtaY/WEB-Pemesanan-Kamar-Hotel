<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Harga Kamar</title>

        <nav>
        <ul>
            <a href="index.php">Beranda</a>
            <a href="produk.php">Produk</a>
            <a href="daftar-harga.php">Daftar Harga</a>
            <a href="tentang.php">Tentang Kami</a>
            <a href="pemesanan.php">Pesan Kamar</a>
            
        </ul>
    </nav>
<style>

header, nav, main, footer {
    max-width: 100%;
}

nav {
    height: 130px;
    overflow: hidden;
    background-color:#B40301;
     /* Set the navbar to fixed position */
    top: 0; /* Position the navbar at the top of the page */
    width: 100%;
}
nav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-weight: bold;
    border-right: 1px solid white;
}
nav a:hover {
    background: yellow;
  color: black;
}
nav img {
    margin-top: 10px;
    margin-left: 10px;
}

#det table tr td {
    color: white;
}

body {
    background-image: url('gambar/bg2.png');
    background-size: cover;
    background-attachment: fixed;
}

main {
    width: 100%;
    height: auto;
    margin-top: 130px;
    margin-bottom: 0;
}

main table {
    margin: 16px;
    background: rgba(255,255,255,0.6);
}

main table tr td {

}

main input {
    border: 0;
    background: white;
    color: black;
    padding: 3px;
}

main select {
    height: 27px;
}
</style>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: #333;
            margin: 20px 0;
        }

        .kamar {
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 20px auto;
            width: 90%;
            max-width: 600px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .kamar img {
            display: block;
            width: 100%;
            height: auto;
        }

        .idkamar {
            font-size: 1.5em;
            font-weight: bold;
            color: #000;
            margin: 10px 0;
        }

        .tipekamar {
            font-size: 1.2em;
            color: #444;
            margin-bottom: 10px;
        }

        .fasilitas {
            padding: 15px;
            background-color: #f9f9f9;
            border-top: 1px solid #ddd;
        }

        .fasilitas ul {
            list-style: none;
            padding: 0;
        }

        .fasilitas ul li {
            margin: 5px 0;
            color: #555;
        }

        .button-container {
            text-align: center;
            padding: 15px;
            background-color: #fff;
            border-top: 1px solid #ddd;
        }

        .button-container button {
            width: 100px;
            background-color: #000;
            color: white;
            font-weight: bold;
            padding: 8px;
            border: 1px solid red;
            cursor: pointer;
            border-radius: 4px;
        }

        .button-container button:hover {
            background-color: red;
            color: #fff;
        }
    </style>
</head>
<body>

    <?php
    include "koneksi.php";

    $sql = $pdo->query("SELECT * FROM kamar");
    while ($data = $sql->fetch()) {
        $id = $data['idkamar'];
        $tipe = $data['tipe'];
        $jumlah = $data['jumlah'];
        $harga = $data['harga'];
        $gambar = $data['gambar'];

        $angka = number_format($harga, 0, ",", ".");

        // Fasilitas berdasarkan tipe kamar
        $fasilitas = "";
        if (strtolower($tipe) === "standar") {
            $fasilitas = "
                <ul>
                    <li>Fasilitas Tempat Tidur: Double Bed</li>
                    <li>Fasilitas Kamar Mandi: Shower</li>
                    <li>Kecepatan WiFi: Standar</li>
                </ul>
            ";
        } elseif (strtolower($tipe) === "deluxe") {
            $fasilitas = "
                <ul>
                    <li>Fasilitas Tempat Tidur: Queen Bed</li>
                    <li>Fasilitas Kamar Mandi: Shower + Bathtub</li>
                    <li>Kecepatan WiFi: Cepat</li>
                </ul>
            ";
        } elseif (strtolower($tipe) === "executive") {
            $fasilitas = "
                <ul>
                    <li>Fasilitas Tempat Tidur: King-size Premium</li>
                    <li>Fasilitas Kamar Mandi: Jacuzzi/Bathtub Mewah</li>
                    <li>Kecepatan WiFi: Sangat Cepat</li>
                </ul>
            ";
        }
    ?>

    <div class="kamar">
        <h1>Daftar Harga Kamar</h1>
        <img src="simpangambar/<?php echo $gambar ?>" alt="Gambar Kamar <?php echo $tipe ?>">
        <div class="idkamar"><?php echo $tipe ?></div>
        <div class="tipekamar">Rp. <?php echo $angka ?></div>
        <div class="fasilitas">
            <?php echo $fasilitas; ?>
        </div>
        <div class="button-container">
            <a href="pemesanan.php"><button>Pesan</button></a>
        </div>
    </div>

    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
