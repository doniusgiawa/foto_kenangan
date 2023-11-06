-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Nov 2023 pada 05.39
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foto_kenangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_keluarga`
--

CREATE TABLE `foto_keluarga` (
  `id_file` int(11) NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `foto_keluarga`
--

INSERT INTO `foto_keluarga` (`id_file`, `nama_file`) VALUES
(8, 'tampilan program.PNG'),
(11, 'Screenshot (1).png'),
(12, 'IMG_20221105_094619.jpg'),
(13, 'IMG-20221208-WA0000.jpg'),
(14, 'IMG-20221208-WA0000.jpg'),
(15, 'IMG-20221208-WA0000.jpg'),
(16, 'IMG_20221212_224612.jpg'),
(17, '6fb0c36954652fc68b559565e3348c06.png.jpg'),
(18, 'IMG-20221208-WA0000.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_sidang`
--

CREATE TABLE `foto_sidang` (
  `id_sidang` int(11) NOT NULL,
  `file_sidang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `foto_sidang`
--

INSERT INTO `foto_sidang` (`id_sidang`, `file_sidang`) VALUES
(3, 'Screenshot (1).png'),
(5, 'IMG_20221208_214150.jpg'),
(6, 'IMG-20230201-WA0003.jpg'),
(7, 'IMG-20230201-WA0008.jpg'),
(8, 'IMG-20230201-WA0020.jpg'),
(9, 'IMG20221025121309.jpg'),
(10, 'IMG20221030115527.jpg'),
(11, 'IMG20221017141619.jpg'),
(12, 'IMG-20230201-WA0035.jpg'),
(13, 'IMG-20221210-WA0000.jpg'),
(14, 'IMG_20221119_222826.jpg'),
(15, 'IMG-20230201-WA0000.jpg'),
(16, 'IMG_20221208_214150.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `foto_keluarga`
--
ALTER TABLE `foto_keluarga`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `foto_sidang`
--
ALTER TABLE `foto_sidang`
  ADD PRIMARY KEY (`id_sidang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `foto_keluarga`
--
ALTER TABLE `foto_keluarga`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `foto_sidang`
--
ALTER TABLE `foto_sidang`
  MODIFY `id_sidang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
