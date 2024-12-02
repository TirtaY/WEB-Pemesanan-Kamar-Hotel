-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2024 pada 06.11
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `idkamar` varchar(10) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`idkamar`, `tipe`, `jumlah`, `harga`, `gambar`) VALUES
('001', 'Standar', 7, 410000, 'gambar_standar.jpg'),
('002', 'Deluxe', 4, 700000, 'gambar_deluxe.jpg'),
('003', 'Executive', 12, 1200000, 'gambar_executive.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `nomor_identitas` char(16) NOT NULL,
  `tipe_kamar` enum('Standar','Deluxe','Executive') NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `durasi` int(11) NOT NULL,
  `termasuk_breakfast` tinyint(1) NOT NULL,
  `total_bayar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama_pemesan`, `jenis_kelamin`, `nomor_identitas`, `tipe_kamar`, `harga`, `tanggal_pesan`, `durasi`, `termasuk_breakfast`, `total_bayar`) VALUES
(1, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 800000, '2024-11-13', 3, 1, 2640),
(2, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 800000, '2024-11-13', 4, 1, 3200),
(3, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Standar', 500000, '2024-11-21', 4, 1, 2120),
(4, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 800, '2024-11-06', 4, 1, 3200),
(5, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Standar', 410, '2024-11-03', 3, 1, 1470),
(6, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-11-28', 4, 0, 2520),
(7, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-11-06', 3, 1, 1590),
(8, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-10-31', 3, 1, 2340),
(9, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Executive', 1200, '2024-10-30', 3, 1, 3840),
(10, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-11-06', 3, 1, 1740),
(11, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 500, '2024-11-06', 3, 1, 1590),
(12, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Executive', 1200, '2024-11-27', 3, 1, 3840),
(13, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-11-27', 3, 1, 1590),
(14, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 500, '2024-11-12', 3, 1, 1590),
(15, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 500, '2024-11-12', 3, 1, 1590),
(16, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-11-27', 3, 1, 1590),
(17, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 500, '2024-11-11', 3, 1, 1590),
(18, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 500, '2024-10-11', 3, 1, 1740),
(19, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 500, '2024-11-30', 3, 1, 1590),
(20, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 500, '2024-12-04', 3, 1, 1590),
(21, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 500, '2024-12-04', 3, 1, 1590),
(22, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Executive', 1200, '2024-11-19', 3, 1, 3840),
(23, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-10-30', 3, 1, 2340),
(24, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-10-30', 3, 1, 1590),
(25, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-10-30', 3, 1, 1590),
(26, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Executive', 1200, '2024-12-01', 3, 1, 3840),
(27, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Executive', 500, '2024-11-30', 3, 1, 1590),
(28, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-12-01', 3, 1, 2340),
(29, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700, '2024-12-01', 4, 1, 1590),
(30, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Executive', 1200000, '2024-12-01', 2, 1, 2560),
(31, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Executive', 500, '2024-12-01', 2, 1, 1160),
(32, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Executive', 500, '2024-12-01', 2, 1, 1160),
(33, 'adad', 'Laki-laki', '2170644160071004', 'Deluxe', 700000, '2024-12-04', 1, 1, 780),
(34, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Standar', 410000, '2024-12-04', 1, 1, 490000),
(35, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Executive', 1200000, '2024-12-19', 3, 1, 3840000),
(36, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Executive', 500, '2024-12-02', 3, 1, 1740000),
(37, 'Tirtayasa Sumikar', 'Laki-laki', '2170644160071004', 'Deluxe', 700000, '2024-12-02', 1, 1, 780000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokkamar`
--

CREATE TABLE `stokkamar` (
  `idkamar` varchar(20) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `stokkamar`
--

INSERT INTO `stokkamar` (`idkamar`, `tipe`, `stok`) VALUES
('001', 'Standar', 7),
('003', 'Executive', 12);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`idkamar`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stokkamar`
--
ALTER TABLE `stokkamar`
  ADD PRIMARY KEY (`idkamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
