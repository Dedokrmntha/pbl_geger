-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 01:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpbl_geger`
--
CREATE DATABASE IF NOT EXISTS `dbpbl_geger` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbpbl_geger`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_gambar`
--

CREATE TABLE `tb_gambar` (
  `id_gambar` int(10) NOT NULL,
  `judul_gambar` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gambar`
--

INSERT INTO `tb_gambar` (`id_gambar`, `judul_gambar`, `gambar`, `deskripsi`) VALUES
(10, 'Air Jernih ', '', 'Air laut yang masih jernih berwarna hijau toska'),
(11, 'Hotel Pantai', 'foto2.jpg', 'Terdapat beberapa hotel di sepanjang pesisir pantai geger'),
(13, 'Pemecah Ombak', 'foto3.jpg', 'Ini membuat gelombang pada pantai lebih tenang'),
(14, 'Pura Geger', 'foto4.jpg', 'Terdapat sebuah pura yang tepat berada di atas karang'),
(15, 'Keindahan Pantai', 'foto5.jpg', 'Pesona pantai ini dapat dinikmati pada pagi dan sore hari'),
(16, 'Teluk Pantai Geger', 'foto6.jpg', 'Teluk geger dengan air jernih dapat menjadi spot berenang ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `balas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `nama`, `email`, `pesan`, `balas`) VALUES
(12, 'Iwan Sandithama', 'dewakadekiwan@gmail.com', 'Pantainya sangat bersih dan masih sepi pengunjung', 'Terima kasih telah berkunjung ke pantai geger, untuk saran maupun kritik dapat langsung menghubungi langsung admin pantai geger.'),
(13, 'Dedo Karmanata', 'dedokarmanata@gmail.com', 'Akses jalan nya sangat baik dan akses parkir cukup mudah', 'Terima kasih atas kunjungannya ke pantai geger semoga dapat menjadi salah satu rekomendasi tempat wisata di bali.'),
(14, 'Hilmi Rakhmawati', 'hilmi@gmail.com', ' Dapat menjadi rekomendasi wisata saat berkunjung ke bali', 'Terima kasih telah berkunjung ke pantai geger, untuk saran maupun kritik dapat langsung menghubungi langsung admin pantai geger.'),
(16, 'Deny Hermawan', 'deny@gmail.com', 'Lokasi nya cukup strategis, banyak tempat menginap disekitar', 'Terima kasih atas kunjungannya ke pantai geger semoga dapat menjadi salah satu rekomendasi tempat wisata di bali.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama`) VALUES
(3, 'iwan', '$2y$10$D8xw.MdaZWrD3jZX4M0egOnjhFLqF3XjxL2ZDDd15cVL8o5u84qJW', 'iwan'),
(4, 'dedo', '$2y$10$SVegPKoo/CuNx4QQ5LHVLubcVwUynnPYk1dHSBpbn639W2FyWT59W', 'Dedoo'),
(5, 'hilmi', '$2y$10$dsZZeFQCsSU/nvXChVOP0e1ckEANfZBKWol2Q3LAbg/g8vS2oGJre', 'hilmi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_gambar`
--
ALTER TABLE `tb_gambar`
  MODIFY `id_gambar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
