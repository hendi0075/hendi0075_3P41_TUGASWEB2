-- phpMyAdmin SQL Dump
-- version 5.2.2-dev+20240926.d88c285fee
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Okt 2024 pada 15.55
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_php_0075`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users_0075`
--

CREATE TABLE `tb_users_0075` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nohp` char(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users_0075`
--

INSERT INTO `tb_users_0008` (`id`, `nama`, `alamat`, `nohp`, `foto`, `kelas`, `nim`, `jenis_kelamin`) VALUES
(3, 'Hendi mulyo wicaksono', 'Pekalongan, Sumub', '08458462157', '20230119_112540.heic', '3P41', '23.240.0075', 'laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_users_0075`
--
ALTER TABLE `tb_users_0075`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_users_0008`
--
ALTER TABLE `tb_users_0075`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;