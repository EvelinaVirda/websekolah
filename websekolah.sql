-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08 Mar 2019 pada 05.41
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(10) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `gambar`, `judul`, `isi`, `date`) VALUES
(6, '1551940114aer0Wq5_460s.jpg', 'Sekolah Terbaik', '<p>\r\n</p><p>REPUBLIKA.CO.ID, JAKARTA -- Mendikbud Mohammad Nuh mengumumkan 10 SMP\r\n yang berhasil meraih rata-rata nilai Ujian Nasional (UN) murni \r\ntertinggi pada tahun ajaran 2012-2013.\"Seperti biasa, tiap tahunnya ada \r\n10 sekolah yang mendapatkan rata-rata nilai UN murni tertinggi. Lima di \r\nantaranya dari DKI Jakarta,\" kata Nuh di Jakarta, Jumat (31/5).SMP yang \r\nb...</p>\r\n\r\n<br><p></p>', '2019-03-07 07:18:29'),
(7, '1551940909empty.png', 'yoga Terbaik untuk anjing', '<p>REPUBLIKA.CO.ID, JAKARTA -- Mendikbud Mohammad Nuh mengumumkan 10 SMP\r\n yang berhasil meraih rata-rata nilai Ujian Nasional (UN) murni \r\ntertinggi pada tahun ajaran 2012-2013.\"Seperti biasa, tiap tahunnya ada \r\n10 sekolah yang mendapatkan rata-rata nilai UN murni tertinggi. Lima di \r\nantaranya dari DKI Jakarta,\" kata Nuh di Jakarta, Jumat (31/5).SMP yang \r\nb...</p>', '2019-03-07 12:41:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(5) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `photo`) VALUES
(9, '15514086471.jpg'),
(10, '15514086512.jpg'),
(11, '15514086583.jpg'),
(12, '15514086634.jpg'),
(13, '15514086695.jpg'),
(14, '15514086756.jpg'),
(18, '1551410343Annotation_2018-12-18_195420.jpg'),
(19, '1551410938az9133b_460s.jpg'),
(22, '155148651916535.jpg'),
(23, '155148652616536.jpg'),
(24, '1551962493sdf.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjek` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `subjek`, `pesan`) VALUES
(14, 'alvi fadillah', 'alvi@gmail.com', 'test', 'test'),
(15, 'alvi fadillah', 'alvi@gmail.com', 'test2', 'test2'),
(17, 'alvi fadillah', 'alvi@gmail.com', 'alvi fadillah', 'alvi fadillah'),
(19, 'alvi fadillah', 'alvi@gmail.com', 'alvi fadillah', 'alvi fadillah'),
(23, 'alvi fadillah', 'alvi.lah13@gmail.com', 'test3', 'test3'),
(24, 'getek', 'evelinavirda@gmail.com', 'sdafsadf', 'test'),
(25, 'yoga', '43564', 'goblog', 'yoga '),
(26, 'yoga', 'alvi.lah13@gmail.com', 'goblog', 'fsdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id_profile` int(5) NOT NULL,
  `judul_profile` varchar(50) NOT NULL,
  `isi_profile` text NOT NULL,
  `sub_isi_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id_profile`, `judul_profile`, `isi_profile`, `sub_isi_profile`) VALUES
(1, 'Tulis Judul Profile Sekolah Disini', '<div><b><blockquote>1. Tulis Isi Profile Sekolah Disini</blockquote></b></div><div><i>\r\n2. Tulis Isi Profile Sekolah Disini&nbsp;</i></div><blockquote><div><small><i><b>\r\n3. Tulis Isi Profile Sekolah Disini </b></i></small><br></div></blockquote><small><i><b><u>4Tulis Isi Profile Sekolah Disini </u></b></i></small>\r\n\r\n<div><ol><li>5. Tulis Isi Profile Sekolah Disini\r\n\r\n</li></ol></div>', '<div>Tulis Isi Profile Sekolah Disini</div><div>Tulis Isi Profile Sekolah Disini</div><div><u>Tulis Isi Profile Sekolah Disini</u></div><div><small>Tulis Isi Profile Sekolah Disini</small></div><div><i>Tulis Isi Profile Sekolah Disini</i></div><div><b>Tulis Isi Profile Sekolah Disini</b><br></div>&nbsp;visi misi sekolah<br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
