-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Jul 2021 pada 06.22
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasipwl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataabsen`
--

CREATE TABLE `dataabsen` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapegawai`
--

CREATE TABLE `datapegawai` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `jk` varchar(100) NOT NULL,
  `hp` int(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapegawai`
--

INSERT INTO `datapegawai` (`id`, `nama`, `tanggal`, `jk`, `hp`, `alamat`) VALUES
(12, 'Arif Arfan ', '2021-06-01', 'laki-laki', 345, 'sde'),
(1232, 'arfan', '2021-06-02', 'laki-laki', 21, 'adsd'),
(1323, 'arfab', '2021-06-04', 'laki-laki', 123, 'dfdsf'),
(2132, 'arfan', '2021-06-03', 'laki-laki', 9888, 'depok'),
(112213, 'del', '2021-06-01', 'laki-laki', 1212, 'asdasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `profile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `profile`) VALUES
('arfan', '123', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dataabsen`
--
ALTER TABLE `dataabsen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapegawai`
--
ALTER TABLE `datapegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dataabsen`
--
ALTER TABLE `dataabsen`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
