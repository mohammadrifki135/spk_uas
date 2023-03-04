-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2022 pada 17.50
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
-- Database: `uas_prak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(9, 'SAHRIL', 'fiksionaril@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 'Ni Nengah Widiani', 'murahsenyum@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, 'admin', 'purecodingofficial@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'Rifki', 'mohammadrifki135@gmail.com', '9e9d73110083ce9efbd7b5b0893f0aee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternative`
--

CREATE TABLE `alternative` (
  `id` int(11) NOT NULL,
  `nama_kampus` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alternative`
--

INSERT INTO `alternative` (`id`, `nama_kampus`, `alamat`) VALUES
(10, 'Universitas Tadulako', 'JL. Soekarno Hatta'),
(11, 'UIN Datokarama', 'JL. Diponegoro'),
(12, 'Akademik Kebidanan', 'JL. Cendrawasih'),
(13, 'Amik Tri Dharma Palu', 'JL. Undata'),
(14, 'Politeknik Palu', 'Tondo'),
(15, 'Poltekkes Kemenkes Palu', 'JL. Thalua Konchi'),
(16, 'Sekolah Tinggi Ilmu Administrasi Panca marga', 'JL. Dayodara'),
(17, 'Sekolah Tinggi Ilmu Administrasi Pembangunan (STIAP) Palu', 'JL. Nuri'),
(18, 'STIE Panca Bhakti Palu', 'JL. DR. Suharso'),
(19, 'Sekolah Tinggi Ilmu Farmasi Pelita Mas', 'JL. Wolter Monginsidi'),
(20, 'Sekolah Tinggi Ilmu Kesehatan Indonesia Jaya Palu', 'JL. Towua'),
(21, 'Sekolah Tinggi Perikanan Dan Kelautan', 'JL. Soekarno Hatta'),
(22, 'STIKes Widya Nusantara Palu', 'Tondo'),
(23, 'STIMIK Adhi Guna', 'JL. Undata'),
(24, 'STIMIK Bina Mulia Palu', 'JL. Soeprapto'),
(25, 'Itkesbis Graha (Institut Teknologi Kesehatan dan Bisnis Graha Ananda)', 'JL. Singgani'),
(26, 'Universitas Alkhairaat ', 'JL. Diponegoro'),
(27, 'Universitas Muhammadiyah Palu', 'JL. Jabal'),
(28, 'STAH Dharma Sentana Sulawesi Tengah', 'JL. Roviga'),
(29, 'Politeknik Industri Logam Morowali', 'JL. Labota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `akreditasi` varchar(100) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `magister` varchar(100) NOT NULL,
  `ukm` varchar(100) NOT NULL,
  `biaya` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id`, `akreditasi`, `fasilitas`, `magister`, `ukm`, `biaya`) VALUES
(2, '0.25', '0.15', '0.25', '0.2', '0.15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian`
--

CREATE TABLE `penilaian` (
  `id` int(11) NOT NULL,
  `alternative` varchar(100) NOT NULL,
  `akreditasi` int(250) NOT NULL,
  `fasilitas` int(250) NOT NULL,
  `magister` int(250) NOT NULL,
  `ukm` int(250) NOT NULL,
  `biaya` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penilaian`
--

INSERT INTO `penilaian` (`id`, `alternative`, `akreditasi`, `fasilitas`, `magister`, `ukm`, `biaya`) VALUES
(7, 'Universitas Tadulako', 4, 5, 5, 5, 5),
(8, 'UIN Datokarama', 4, 4, 5, 4, 5),
(9, 'Akademik Kebidanan', 4, 4, 5, 3, 3),
(10, 'Amik Tri Dharma Palu', 4, 4, 5, 3, 3),
(11, 'Politeknik Palu', 3, 4, 4, 2, 5),
(13, 'Poltekkes Kemenkes Palu', 4, 3, 5, 3, 4),
(14, 'Sekolah Tinggi Ilmu Administrasi Panca marga', 4, 5, 4, 2, 3),
(16, 'Sekolah Tinggi Ilmu Administrasi Pembangunan (STIAP) Palu', 4, 2, 4, 2, 4),
(17, 'STIE Panca Bhakti Palu', 3, 4, 4, 3, 3),
(18, 'Sekolah Tinggi Ilmu Farmasi Pelita Mas', 3, 4, 4, 2, 3),
(19, 'Sekolah Tinggi Ilmu Kesehatan Indonesia Jaya Palu', 4, 3, 4, 3, 5),
(21, 'Sekolah Tinggi Perikanan Dan Kelautan', 3, 3, 4, 2, 4),
(22, 'STIKes Widya Nusantara Palu', 3, 4, 4, 3, 4),
(23, 'STIMIK Adhi Guna', 3, 4, 5, 4, 4),
(24, 'STIMIK Bina Mulia Palu', 3, 4, 5, 3, 4),
(25, 'Itkesbis Graha (Institut Teknologi Kesehatan dan Bisnis Graha Ananda)', 3, 4, 4, 3, 3),
(26, 'Universitas Alkhairaat ', 4, 5, 5, 4, 4),
(27, 'Universitas Muhammadiyah Palu', 4, 4, 5, 4, 4),
(28, 'STAH Dharma Sentana Sulawesi Tengah', 4, 4, 4, 3, 5),
(29, 'Politeknik Industri Logam Morowali', 3, 4, 4, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `preferensi`
--

CREATE TABLE `preferensi` (
  `id` int(11) NOT NULL,
  `alternative` varchar(100) NOT NULL,
  `nilai_preferensi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `preferensi`
--

INSERT INTO `preferensi` (`id`, `alternative`, `nilai_preferensi`) VALUES
(1, 'Universitas Tadulako', '1'),
(2, 'UIN Datokarama', '0.88333333333333'),
(3, 'Akademik Kebidanan', '0.66666666666667'),
(4, 'Amik Tri Dharma Palu', '0.66666666666667'),
(5, 'Politeknik Palu', '0.25'),
(6, 'Poltekkes Kemenkes Palu', '0.69166666666667'),
(7, 'Sekolah Tinggi Ilmu Administrasi Panca marga', '0.4'),
(8, 'Sekolah Tinggi Ilmu Administrasi Pembangunan (STIAP) Palu', '0.325'),
(9, 'STIE Panca Bhakti Palu', '0.16666666666667'),
(10, 'Sekolah Tinggi Ilmu Farmasi Pelita Mas', '0.1'),
(11, 'Sekolah Tinggi Ilmu Kesehatan Indonesia Jaya Palu', '0.51666666666667'),
(12, 'Sekolah Tinggi Perikanan Dan Kelautan', '0.125'),
(13, 'STIKes Widya Nusantara Palu', '0.24166666666667'),
(14, 'STIMIK Adhi Guna', '0.55833333333333'),
(15, 'STIMIK Bina Mulia Palu', '0.49166666666667'),
(16, 'Itkesbis Graha (Institut Teknologi Kesehatan dan Bisnis Graha Ananda)', '0.16666666666667'),
(17, 'Universitas Alkhairaat ', '0.85833333333333'),
(18, 'Universitas Muhammadiyah Palu', '0.80833333333333'),
(19, 'STAH Dharma Sentana Sulawesi Tengah', '0.56666666666667'),
(20, 'Politeknik Industri Logam Morowali', '0.16666666666667');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(12, 'SAHRIL', 'fiksionaril@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alternative`
--
ALTER TABLE `alternative`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `preferensi`
--
ALTER TABLE `preferensi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `alternative`
--
ALTER TABLE `alternative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `preferensi`
--
ALTER TABLE `preferensi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
