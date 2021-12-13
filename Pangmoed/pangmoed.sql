-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2021 pada 20.39
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pangmoed`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `NoHp` varchar(20) NOT NULL,
  `Password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `NoHp`, `Password`) VALUES
(1, '081234567890', 12345678);

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int(5) NOT NULL,
  `Nama` varchar(75) NOT NULL,
  `Email` varchar(75) NOT NULL,
  `NoHp` varchar(15) NOT NULL,
  `Password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id`, `Nama`, `Email`, `NoHp`, `Password`) VALUES
(2, 'nurul', 'yuyun@gmail.com', '081233456780', 'lupa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `idreservasi` int(11) NOT NULL,
  `Makanan` varchar(255) NOT NULL,
  `Minuman` varchar(255) NOT NULL,
  `Paket` varchar(20) NOT NULL,
  `Tempat` varchar(20) NOT NULL,
  `NomorMeja` int(75) NOT NULL,
  `Tanggal` date NOT NULL,
  `NoHp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`idreservasi`, `Makanan`, `Minuman`, `Paket`, `Tempat`, `NomorMeja`, `Tanggal`, `NoHp`) VALUES
(3, '', '', 'Paket 1', 'Rooftop', 12, '2022-02-22', '081233456780');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`idreservasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `register`
--
ALTER TABLE `register`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `idreservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
