-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2021 pada 16.11
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsiwikode`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner_depok`
--

CREATE TABLE `kuliner_depok` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `bintang` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kuliner_depok`
--

INSERT INTO `kuliner_depok` (`id`, `nama`, `deskripsi`, `fasilitas`, `bintang`, `kontak`, `email`, `alamat`, `foto`) VALUES
(2, 'kopi nako', 'menyajikan kopi-kopi nikmat', 'lengkap', '4', '0987654321', 'nako.kopi@gmail.com', 'margonda', 'thumb-021.jpg'),
(3, 'Walking Drumbs', 'Cafe gitu deh', 'lengkap', '4', '087763829288', 'walk.drumbs@gmail.com', 'depok', 'thumb-1.jpg'),
(4, 'Louis Cafe', 'Cafe gitu deh', 'lengkap', '4', '081265434321', 'louis.cafe@gmail.com', 'depok', 'thumb-020.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profesi`
--

CREATE TABLE `profesi` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profesi`
--

INSERT INTO `profesi` (`id`, `nama`) VALUES
(1, 'Artist'),
(2, 'Pejabat'),
(3, 'Mahasiswa'),
(4, 'Pegawai Swasta'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `wisata_id` int(11) NOT NULL,
  `profesi_id` int(11) NOT NULL,
  `rating` smallint(6) DEFAULT NULL,
  `komentar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'adminweb', '25d55ad283aa400af464c76d713c07ad'),
(2, 'juki', 'ab56b4d92b40713acc5af89985d4b786'),
(3, 'aulia', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(4, 'zakky', 'a8698009bce6d1b8c2128eddefc25aad'),
(5, 'sri', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'dian', 'c46f0797a7e39230056f99cba2cfe3e0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `bintang` smallint(6) DEFAULT NULL,
  `kontak` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `latlong` varchar(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `web` varchar(45) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata_depok`
--

CREATE TABLE `wisata_depok` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `fasilitas` varchar(255) NOT NULL,
  `bintang` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wisata_depok`
--

INSERT INTO `wisata_depok` (`id`, `nama`, `deskripsi`, `fasilitas`, `bintang`, `kontak`, `email`, `alamat`, `foto`) VALUES
(1, 'kubah emas', 'kubah berwarna emas', 'lengkap', '5', '998841910', 'kubah.emas@gmail.com', 'meruyung', 'thumb-011.jpg'),
(2, 'dkandang', 'taman bermain anak anak', 'lengkap', '5', '0987643258', 'd.kandang@gmail.com', 'depok', 'thumb-012.jpg'),
(3, 'Taman Wiladatika', 'sebuah taman', 'lengkap', '5', '989892981', 'wildatika@gmail.com', 'cibubur', 'thumb-016.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kuliner_depok`
--
ALTER TABLE `kuliner_depok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profesi`
--
ALTER TABLE `profesi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_testimoni_wisata1_idx` (`wisata_id`),
  ADD KEY `fk_testimoni_profesi1_idx` (`profesi_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `wisata_depok`
--
ALTER TABLE `wisata_depok`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kuliner_depok`
--
ALTER TABLE `kuliner_depok`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `profesi`
--
ALTER TABLE `profesi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `wisata_depok`
--
ALTER TABLE `wisata_depok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `fk_testimoni_profesi1` FOREIGN KEY (`profesi_id`) REFERENCES `profesi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_testimoni_wisata1` FOREIGN KEY (`wisata_id`) REFERENCES `wisata` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
