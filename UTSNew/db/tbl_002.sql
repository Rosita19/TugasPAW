-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2022 pada 08.49
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rosita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_002`
--

CREATE TABLE `tbl_002` (
  `id_002` varchar(10) NOT NULL,
  `nama_002` varchar(50) NOT NULL,
  `email_002` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_002`
--

INSERT INTO `tbl_002` (`id_002`, `nama_002`, `email_002`) VALUES
('101', 'Rosita Dewi Lutfiyah', 'dewilutfiyah@gmail.com'),
('102', 'dewi Lutfiyah', 'lutfiyah@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_002`
--
ALTER TABLE `tbl_002`
  ADD PRIMARY KEY (`id_002`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
