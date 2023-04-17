-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2023 pada 15.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkir-web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `parkir`
--

CREATE TABLE `parkir` (
  `id_parkir` int(11) NOT NULL,
  `platNomor` varchar(8) NOT NULL,
  `masuk` datetime NOT NULL DEFAULT current_timestamp(),
  `keluar` datetime NOT NULL DEFAULT current_timestamp(),
  `tarif` int(11) NOT NULL DEFAULT 0,
  `sudah_masuk` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `parkir`
--

INSERT INTO `parkir` (`id_parkir`, `platNomor`, `masuk`, `keluar`, `tarif`, `sudah_masuk`, `created_at`, `updated_at`) VALUES
(1, 'L1234ABC', '2023-03-22 20:39:33', '2023-03-22 20:39:33', 0, 1, '2023-03-22 20:39:33', '2023-03-22 20:39:33'),
(2, '', '2023-03-22 20:39:33', '2023-03-22 20:39:33', 0, 0, '2023-03-22 20:39:33', '2023-03-22 20:39:33'),
(3, 'L123DAS', '2023-03-22 21:07:55', '2023-03-22 21:07:55', 0, 0, '2023-03-22 21:07:55', '2023-03-22 21:07:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `parkir`
--
ALTER TABLE `parkir`
  ADD PRIMARY KEY (`id_parkir`),
  ADD UNIQUE KEY `platNomor` (`platNomor`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `parkir`
--
ALTER TABLE `parkir`
  MODIFY `id_parkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
