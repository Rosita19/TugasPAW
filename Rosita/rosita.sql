-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2022 pada 12.26
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
-- Database: `rosita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_002`
--

CREATE TABLE `tbl_002` (
  `kd_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun` int(10) NOT NULL,
  `harga` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_002`
--

INSERT INTO `tbl_002` (`kd_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun`, `harga`) VALUES
('B001', 'Tips Membuat Kue', 'S zainal', 'erlangga', 2010, 50000),
('B002', 'Ketika Matahari Terbenam', 'susilawati', 'gramedia', 2009, 60000),
('B003', 'Matematika', 'Alifdianti Rahmawati', 'Republika', 2020, 55000),
('B004', 'Bahasa Inggris', 'Kholifatunnajah', 'Gramedia', 2018, 60000),
('B005', 'Pintar Membaca', 'Agus Setiawan', 'Erlangga', 2019, 45000),
('B006', 'Mariposa', 'albi fabian', 'Gramedia', 2009, 90000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_002`
--
ALTER TABLE `tbl_002`
  ADD PRIMARY KEY (`kd_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
