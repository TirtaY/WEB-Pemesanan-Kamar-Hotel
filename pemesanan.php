<?php
    require_once "header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Form Pemesanan</title>
  <style>
    input, select {
      width: calc(100% - 20px);
      padding: 8px 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-size: 14px;
    }

    input[type="radio"] {
      width: auto;
      margin-right: 5px;
    }

    input[readonly] {
      background-color: #f5f5f5;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      gap: 10px;
    }

    button {
      flex: 1;
      padding: 10px;
      border: none;
      border-radius: 5px;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button[type="button"] {
      background-color: #007bff;
      color: white;
    }

    button[type="button"]:hover {
      background-color: #0056b3;
    }

    button[type="submit"] {
      background-color: #28a745;
      color: white;
    }

    button[type="submit"]:hover {
      background-color: #218838;
    }

    button.cancel {
      background-color: #dc3545;
      color: white;
    }

    button.cancel:hover {
      background-color: #c82333;
    }
  </style>

  <style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: flex-start; /* Ubah dari center ke flex-start agar elemen mulai dari atas */
    height: 100vh;
    overflow-y: auto; /* Tambahkan scroll otomatis jika elemen lebih besar dari layar */
    padding-top: 50px; /* Tambahkan jarak dari atas agar seluruh form terlihat */
  }

  .container {
    width: 400px;
    background-color: #eaf3fc;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
  }

  h2 {
    text-align: center;
    color: #444;
    margin-bottom: 20px;
    font-size: 20px;
  }

  form {
    display: flex;
    flex-direction: column;
  }

  label {
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
  }

  input,
  select {
    margin-bottom: 15px;
    padding: 8px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
  }

  button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
  }

  }
</style>

</head>
<body>
  <div class="container">
    <h2>Form Pemesanan</h2>
    <form action="proses_pemesanan.php" method="POST" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="nama_pemesan">Nama Pemesan:</label>
        <input type="text" id="nama_pemesan" name="nama_pemesan" required>
      </div>

      <div class="form-group">
        <label>Jenis Kelamin:</label>
        <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" required>
        <label for="laki-laki" style="display: inline; font-weight: normal;">Laki-laki</label>
        <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
        <label for="perempuan" style="display: inline; font-weight: normal;">Perempuan</label>
      </div>

      <div class="form-group">
        <label for="nomor_identitas">Nomor Identitas (16 Digit):</label>
        <input type="text" id="nomor_identitas" name="nomor_identitas" maxlength="16" required>
      </div>

      <div class="form-group">
        <label for="tipe_kamar">Tipe Kamar:</label>
        <select id="tipe_kamar" name="tipe_kamar" onchange="updateHarga()" required>
          <option value="">-STANDAR-</option>
          <option value="Standar">Standar</option>
          <option value="Deluxe">Deluxe</option>
          <option value="Executive">Executive</option>
        </select>
      </div>

      <div class="form-group">
        <label for="harga">Harga (Rp):</label>
        <input type="text" id="harga" name="harga" readonly value="500.000">
      </div>

      <div class="form-group">
        <label for="tanggal_pesan">Tanggal Pesan (dd/mm/yyyy):</label>
        <input type="date" id="tanggal_pesan" name="tanggal_pesan" required>
      </div>

      <div class="form-group">
        <label for="durasi">Durasi Menginap (Hari):</label>
        <input type="number" id="durasi" name="durasi" required value="0">
      </div>

      <div class="form-group">
        <label>
            Termasuk Breakfast
          <input type="checkbox" name="termasuk_breakfast" value="1" checked>
        </label>
      </div>

      <div class="form-group">
        <label for="total_bayar">Total Bayar (Rp):</label>
        <input type="text" id="total_bayar" name="total_bayar" readonly value="0">
      </div>

      <div class="button-container">
        <button type="button" onclick="hitungTotal()">Hitung Total Bayar</button>
        <button type="submit">Simpan</button>
        <button type="button" class="cancel">Cancel</button>
      </div>
    </form>
  </div>

  <script>
    function updateHarga() {
      const tipeKamar = document.getElementById('tipe_kamar').value;
      let harga = 0;

      if (tipeKamar === 'Standar') harga = 410000;
      else if (tipeKamar === 'Deluxe') harga = 700000;
      else if (tipeKamar === 'Executive') harga = 1200000;

      document.getElementById('harga').value = harga;
    }

    function hitungTotal() {
      const harga = parseInt(document.getElementById('harga').value.replace(/\./g, '')) || 0;
      const durasi = parseInt(document.getElementById('durasi').value) || 0;
      const breakfast = document.querySelector('[name="termasuk_breakfast"]').checked ? 80000 : 0;

      if (isNaN(harga) || isNaN(durasi)) {
        alert("Mohon isi harga dan durasi dengan benar!");
        return;
      }

      let total = harga * durasi;
      if (durasi > 3) total *= 0.9; // Diskon 10%
      total += breakfast * durasi;

      document.getElementById('total_bayar').value = total;
    }

    function validateForm() {
      // Validasi Nomor Identitas
      const identitas = document.getElementById('nomor_identitas').value;
      if (identitas.length !== 16 || isNaN(identitas)) {
        alert("Nomor identitas harus 16 digit angka!");
        return false;
      }

      // Validasi Tanggal Pemesanan
      const tanggalPesan = document.getElementById('tanggal_pesan').value;

      // Jika input tanggal kosong
      if (!tanggalPesan) {
        alert("Tanggal pemesanan harus diisi!");
        return false;
      }

      // Ambil tanggal hari ini
      const currentDate = new Date();
      const selectedDate = new Date(tanggalPesan);

      // Hilangkan komponen waktu untuk perbandingan yang akurat
      currentDate.setHours(0, 0, 0, 0);
      selectedDate.setHours(0, 0, 0, 0);

      // Debugging untuk memeriksa nilai tanggal
      console.log("Tanggal yang dipilih:", selectedDate);
      console.log("Tanggal saat ini:", currentDate);

      // Jika tanggal yang dipilih kurang dari hari ini
      if (selectedDate < currentDate) {
        alert("Tanggal pemesanan tidak boleh kurang dari hari ini.");
        return false;
      }

      return true; // Semua validasi berhasil
    }

  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
