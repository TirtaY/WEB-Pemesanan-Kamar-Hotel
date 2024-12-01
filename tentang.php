<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tentang Kami</title>
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

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.6;
            color: #555;
            margin-bottom: 15px;
        }



        footer {
            margin-top: 30px;
            text-align: center;
            color: #888;
            font-size: 0.9em;
        }

        footer a {
            color: #000;
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tentang Kami</h1>
        <p>Selamat datang di Hotel BNSP, tempat kenyamanan dan kemewahan berpadu untuk menciptakan pengalaman menginap yang tak terlupakan. Kami berkomitmen untuk memberikan pelayanan terbaik dengan fasilitas yang memenuhi kebutuhan Anda, baik untuk perjalanan bisnis maupun liburan.</p>

        <p>Hotel kami menawarkan berbagai pilihan kamar yang nyaman, restoran dengan menu lezat, dan layanan ramah dari staf profesional kami. Lokasi strategis kami memberikan akses mudah ke berbagai destinasi wisata dan bisnis di kota ini.</p>

        <div class="info">
            <h3>Informasi Kontak</h3>
            <ul>
                <li><span>Alamat:</span> Jl. Universitas Nasional No. 123, Jakarta, Indonesia</li>
                <li><span>No. Telepon:</span> +62 21 1234 5678</li>
                <li><span>Email:</span> info@bnsplsp.com</li>
            </ul>
        </div>

        <footer>
            &copy; 2024 Hotel BNSP. Semua Hak Dilindungi. | <a href="index.php">Kembali ke Beranda</a>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
