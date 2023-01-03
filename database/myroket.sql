-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2023 pada 18.43
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
-- Database: `myroket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_reg`
--

CREATE TABLE `mitra_reg` (
  `id` varchar(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `zip` varchar(7) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kemampuan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `mitra` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ongkir`
--

CREATE TABLE `ongkir` (
  `id` varchar(5) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `tujuan` varchar(20) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ongkir`
--

INSERT INTO `ongkir` (`id`, `asal`, `tujuan`, `harga`) VALUES
('AB1', 'lampung', 'jakarta', 15000),
('ab2', 'jakarta', 'lampung', 7000),
('ab3', 'lampung', 'pandeglang', 7000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(64) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `email`, `image`, `is_active`, `date_created`) VALUES
(39, 'Syaauqi Zaaidan', '$2y$10$djI2M/FQH2k3H7b6tLK5X.MZG1R.wrARoR6NerH3tsScNnsNCnexa', 'zaidanline67@gmail.com', '73349393_156861225523800_2119508204152772215_n_(1)6.jpg', 1, 1586163321),
(47, 'aldi rabbani', '$2y$10$bKPl4s12lKXmdfkjZQVR/.JwezogLx8UWjLvwO1pDga5N2W49EMbW', 'aldi12@gmail.com', 'default.jpg', 1, 1672498414),
(48, 'alfi if', '$2y$10$sFSF8oj4IrT/3oT4dNHZ9.GdQNaGVsXNFYbiVQFonEZck/9lt7Iw.', 'alfiaja22@gmail.com', 'default.jpg', 1, 1672499713),
(49, 'alfin', '$2y$10$Y8ZJbrfZDAVR1bN4He6H5..KUw9vhgPzd8Qxa6MdKu5h6FI49dtvy', 'alfin22@gmail.com', 'default.jpg', 1, 1672503966),
(50, 'anwar', '$2y$10$78DiqPyrgxGXgpbkJ7rDkOH3pcQJR8IBncpl6oFTzS2/LVI2asPh.', 'reza@gmail.com', 'default.jpg', 1, 1672511188),
(51, 'Anwar', '$2y$10$0fM0KDVARL6FQlPJe/DmSuQ7L4bXDf05XKtDMbzUHHgN/ELKmUF1W', 'anwaraja123@gmail.com', 'default.jpg', 1, 1672636314),
(52, 'albab', '$2y$10$7lT5scel0Qj63nmBaf20I.7z1olb3lHjgIbxycXLYURkxG40ekwf6', 'albaaja@gmail.com', 'default.jpg', 1, 1672767658);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mitra_reg`
--
ALTER TABLE `mitra_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
