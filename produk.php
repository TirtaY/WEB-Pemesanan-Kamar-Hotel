<?php
    require_once "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kamar Hotel</title>
  
    <div id="imgindex">
    <div id="imglog">
      <p><br>Jenis Kamar<br>
    </div>
  </div>

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      color: #333;
    }
    .container {
      max-width: 1000px;
      margin: 50px auto;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .heading {
      text-align: center;
      margin-bottom: 20px;
      font-size: 30px;
      color: #444;
    }
    .room {
      margin-bottom: 30px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      display: flex;
      align-items: flex-start;
      gap: 20px;
      transition: 0.3s;
    }
    .room:hover {
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
    }
    .room img {
      border-radius: 10px;
      border: 1px solid #ddd;
    }
    .room-details {
      flex-grow: 1;
    }
    .room-title {
      font-size: 22px;
      color: #007bff;
      margin-bottom: 10px;
    }
    .room-description {
      margin-bottom: 15px;
      line-height: 1.6;
    }
    .button-container {
      margin-top: 10px;
    }
    .button-container a button {
      width: 100px;
      background-color: #000;
      color: white;
      font-weight: bold;
      padding: 8px;
      border: 1px solid red;
      cursor: pointer;
      transition: 0.3s;
    }
    .button-container a button:hover {
      background-color: red;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="heading"></div>

<?php
// Contoh data yang diambil dari database
$gambar_standar = "gambar_standar.jpg";
$gambar_deluxe = "gambar_deluxe.jpg";
$gambar_executive = "gambar_executive.jpg";
?>
    <!-- Kamar Standar -->
    <div class="room">
      <img src="simpangambar/<?php echo $gambar_standar ?>" width="200px" height="150px" alt="Kamar Standar">
      <div class="room-details">
        <div class="room-title">Standar</div>
        <div class="room-description">
          <strong>Nyaman dan Terjangkau</strong><br>
          Didesain untuk kenyamanan dasar Anda, kamar ini dilengkapi dengan tempat tidur yang nyaman, WiFi gratis, TV layar datar, dan kamar mandi pribadi modern. <br>
          Cocok untuk Anda yang mencari penginapan berkualitas dengan harga terjangkau.
        </div>
        <div class="button-container">
          <a href="daftar-harga.php"><button>Cek Harga</button></a>
        </div>
      </div>
    </div>

    <!-- Kamar Deluxe -->
    <div class="room">
      <img src="simpangambar/<?php echo $gambar_deluxe ?>" width="200px" height="150px" alt="Kamar Deluxe">
      <div class="room-details">
        <div class="room-title">Deluxe</div>
        <div class="room-description">
          <strong>Kemewahan yang Terjangkau</strong><br>
          Nikmati ruang yang lebih luas dengan desain modern dan elegan. Kamar Deluxe dilengkapi dengan tempat tidur king-size, sofa santai, bathtub mewah, dan pemandangan menenangkan. <br>
          Pilihan sempurna untuk perjalanan bisnis atau liburan keluarga.
        </div>
        <div class="button-container">
          <a href="daftar-harga.php"><button>Cek Harga</button></a>
        </div>
      </div>
    </div>

    <!-- Kamar Executive -->
    <div class="room">
      <img src="simpangambar/<?php echo $gambar_executive ?>" width="200px" height="150px" alt="Kamar Executive">
      <div class="room-details">
        <div class="room-title">Executive</div>
        <div class="room-description">
          <strong>Kemewahan Eksklusif untuk Anda</strong><br>
          Hadirkan pengalaman menginap kelas atas di kamar Executive kami. Dilengkapi dengan ruang tamu pribadi, tempat tidur premium, jacuzzi, dan akses eksklusif ke Executive Lounge. <br>
          Ideal untuk tamu istimewa yang menginginkan kenyamanan dan layanan tak tertandingi.
        </div>
        <div class="button-container">
          <a href="daftar-harga.php"><button>Cek Harga</button></a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
