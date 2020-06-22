-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 01:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahanbaku` int(2) NOT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `nama` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahanbaku`, `jumlah`, `nama`) VALUES
(1, 20, 'Bahan A'),
(2, 5, 'Bahan B'),
(3, 15, 'Bahan C'),
(4, 10, 'Bahan D'),
(5, 25, 'Bahan E');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(10) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8_swedish_ci NOT NULL,
  `id_shift` int(2) UNSIGNED NOT NULL,
  `id_perusahaan` smallint(5) UNSIGNED DEFAULT NULL,
  `id_mesin` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `id_shift`, `id_perusahaan`, `id_mesin`) VALUES
(2, 'Budi Sasongko', 5, 8, 2),
(3, 'Budi Santoso', 6, 8, 2),
(5, 'Saryono', 6, 8, 2),
(6, 'Sutikno', 5, 8, 2),
(10, 'Harto Subagyo', 6, 8, 2),
(11, 'Daryono', 6, 8, 2),
(12, 'Anggoro Kusumo', 5, 8, 2),
(13, 'Haryanto aww', 6, 8, 2),
(14, 'Harto Mujiono', 6, 8, 2),
(16, 'Sutrisno', 6, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(11) NOT NULL,
  `id_perusahaan` smallint(5) UNSIGNED DEFAULT NULL,
  `nama` text COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(99) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id_manager`, `id_perusahaan`, `nama`, `email`) VALUES
(1, 8, 'Budi Santoso', 'sngtuwu@gmail.com'),
(2, 8, 'Budi', 'uwubgt@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mesin`
--

CREATE TABLE `mesin` (
  `id_mesin` int(10) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8_swedish_ci NOT NULL,
  `id_perusahaan` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `mesin`
--

INSERT INTO `mesin` (`id_mesin`, `nama`, `id_perusahaan`) VALUES
(2, 'Mesin UwU 1', 8);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id_model` int(10) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8_swedish_ci NOT NULL,
  `id_bahanbaku` int(2) NOT NULL,
  `id_perusahaan` smallint(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id_model`, `nama`, `id_bahanbaku`, `id_perusahaan`) VALUES
(2, 'Model 1', 1, 8),
(6, 'Model 2', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `persediaan`
--

CREATE TABLE `persediaan` (
  `id_persediaan` int(10) UNSIGNED NOT NULL,
  `id_perusahaan` smallint(5) UNSIGNED DEFAULT NULL,
  `id_bahanbaku` int(2) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `persediaan`
--

INSERT INTO `persediaan` (`id_persediaan`, `id_perusahaan`, `id_bahanbaku`, `jumlah`) VALUES
(1, 8, 1, 15000),
(2, 8, 2, 1500),
(3, 8, 3, 300),
(4, 8, 4, 2000),
(5, 8, 5, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` smallint(5) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nama`) VALUES
(8, 'UwU Garment Sejahtera');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(10) UNSIGNED NOT NULL,
  `id_model` int(10) UNSIGNED NOT NULL,
  `nama` varchar(200) COLLATE utf8_swedish_ci NOT NULL,
  `jumlah` int(5) DEFAULT NULL,
  `tanggal_diambil` date NOT NULL,
  `upah_perpotong` int(99) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_model`, `nama`, `jumlah`, `tanggal_diambil`, `upah_perpotong`) VALUES
(1, 2, 'Pesanan 1', 100, '2020-06-08', 3000),
(2, 2, 'Pesanan 2', 20, '2020-06-16', 2500),
(3, 2, 'Pesanan 3', 150, '2020-05-24', 4000),
(4, 2, 'Pesanan Coba Coba\r\n', 50, '2020-06-17', 1500),
(5, 2, 'Pesanan UwU', 150, '2020-06-23', 3000),
(9, 2, 'Pesanan Keren', 250, '2020-06-25', 8500),
(10, 6, 'Pesanan WOW', 150, '2020-06-30', 3000),
(12, 6, 'Pesanan WOW KEREN BGTT', 100, '2020-06-28', 4000),
(13, 6, 'Pesanan WOW AWW ', 50, '2020-06-25', 2500),
(14, 6, 'PESANAN WOW KEREN BANGET', 50, '2020-06-23', 1500),
(15, 6, 'PESANAN AAAAAAAAAA', 30, '2020-06-28', 5000),
(16, 6, 'Pesanan UWU BANGET UNCH', 30, '2020-06-30', 5500);

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id_produksi` int(2) UNSIGNED NOT NULL,
  `id_pesanan` int(10) UNSIGNED NOT NULL,
  `id_karyawan` int(10) UNSIGNED NOT NULL,
  `potong_terselesaikan` int(5) NOT NULL,
  `tanggal_produksi` date NOT NULL,
  `nama` text COLLATE utf8_swedish_ci NOT NULL,
  `ket` varchar(100) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id_produksi`, `id_pesanan`, `id_karyawan`, `potong_terselesaikan`, `tanggal_produksi`, `nama`, `ket`) VALUES
(34, 2, 3, 2, '2020-06-15', '15ee6e1d471f00prod', 'TERVERIFIKASI'),
(36, 2, 3, 1, '2020-06-15', '15ee70c61f115eprod', 'TERVERIFIKASI'),
(38, 2, 3, 3, '2020-06-15', '15ee711e7120c4prod', 'TERVERIFIKASI'),
(40, 2, 3, 2, '2020-06-15', '15ee7130c1c765prod', 'TERVERIFIKASI'),
(41, 5, 2, 5, '2020-06-15', '15ee7287bec4bfprod', 'TERVERIFIKASI'),
(42, 4, 2, 2, '2020-06-15', '15ee732fa6b455prod', 'TERVERIFIKASI'),
(44, 5, 3, 5, '2020-06-16', '15ee83751c9bceprod', 'TERVERIFIKASI'),
(45, 9, 3, 5, '2020-06-16', '15ee83aaca2b9cprod', 'TERVERIFIKASI'),
(46, 9, 2, 5, '2020-06-16', '15ee83b45aba19prod', 'TERVERIFIKASI'),
(47, 4, 3, 3, '2020-06-16', '15ee83bc5e4016prod', 'BELUM TERVERIFIKASI'),
(50, 9, 2, 20, '2020-06-17', '15eea1c3287439prod', 'TERVERIFIKASI'),
(51, 5, 2, 15, '2020-06-17', '15eea1c3e36e51prod', 'TERVERIFIKASI'),
(55, 10, 10, 15, '2020-06-22', '15ef039ad8ed53prod', 'TERVERIFIKASI'),
(56, 12, 11, 15, '2020-06-22', '15ef043dc6a428prod', 'TERVERIFIKASI'),
(58, 13, 12, 15, '2020-06-22', '15ef046d40dbeaprod', 'TERVERIFIKASI'),
(59, 10, 12, 25, '2020-06-22', '15ef046db8e2e9prod', 'TERVERIFIKASI'),
(62, 15, 14, 10, '2020-06-22', '15ef04e6042612prod', 'TERVERIFIKASI'),
(63, 14, 14, 5, '2020-06-22', '15ef04e68dfe7bprod', 'TERVERIFIKASI'),
(65, 16, 16, 10, '2020-06-22', '15ef0625597a1fprod', 'TERVERIFIKASI');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` int(2) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `keterangan`) VALUES
(5, 'Pagi'),
(6, 'Siang'),
(7, 'Sore');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(99) NOT NULL,
  `level` varchar(99) NOT NULL,
  `id_user` int(99) NOT NULL,
  `nama` varchar(999) NOT NULL,
  `pemilik` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `level`, `id_user`, `nama`, `pemilik`) VALUES
('budi', '202cb962ac59075b964b07152d234b70', 'karyawan', 7, 'Budi Santoso', 3),
('sasongko', '202cb962ac59075b964b07152d234b70', 'karyawan', 8, 'Budi Sasongko', 2),
('pengembangan', '202cb962ac59075b964b07152d234b70', 'pengembangan', 9, 'Divisi Pengembangan', NULL),
('manager', '202cb962ac59075b964b07152d234b70', 'manager', 10, 'Fathan Arsyadani', NULL),
('saryono', '202cb962ac59075b964b07152d234b70', 'karyawan', 11, 'Saryono', 5),
('sutikno', '202cb962ac59075b964b07152d234b70', 'karyawan', 14, 'Sutikno', 6),
('harto', '202cb962ac59075b964b07152d234b70', 'karyawan', 22, 'Harto Subagyo', 10),
('daryono', '202cb962ac59075b964b07152d234b70', 'karyawan', 23, 'Daryono', 11),
('anggoro', '202cb962ac59075b964b07152d234b70', 'karyawan', 24, 'Anggoro Kusumo', 12),
('haryanto', '202cb962ac59075b964b07152d234b70', 'karyawan', 25, 'Haryanto aww', 13),
('mujiono', '202cb962ac59075b964b07152d234b70', 'karyawan', 26, 'Harto Mujiono', 14),
('sutrisno', '202cb962ac59075b964b07152d234b70', 'karyawan', 28, 'Sutrisno', 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahanbaku`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`),
  ADD KEY `id_shift` (`id_shift`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_mesin` (`id_mesin`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `mesin`
--
ALTER TABLE `mesin`
  ADD PRIMARY KEY (`id_mesin`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id_model`),
  ADD KEY `id_bahanbaku` (`id_bahanbaku`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `persediaan`
--
ALTER TABLE `persediaan`
  ADD PRIMARY KEY (`id_persediaan`),
  ADD KEY `id_perusahaan` (`id_perusahaan`),
  ADD KEY `id_bahan` (`id_bahanbaku`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_model` (`id_model`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_produksi`),
  ADD KEY `id_pesanan` (`id_pesanan`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `pemilik` (`pemilik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  MODIFY `id_bahanbaku` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id_manager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mesin`
--
ALTER TABLE `mesin`
  MODIFY `id_mesin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id_model` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `persediaan`
--
ALTER TABLE `persediaan`
  MODIFY `id_persediaan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_produksi` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`id_mesin`) REFERENCES `mesin` (`id_mesin`),
  ADD CONSTRAINT `karyawan_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `karyawan_ibfk_3` FOREIGN KEY (`id_shift`) REFERENCES `shift` (`id_shift`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);

--
-- Constraints for table `mesin`
--
ALTER TABLE `mesin`
  ADD CONSTRAINT `mesin_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`);

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_2` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `model_ibfk_3` FOREIGN KEY (`id_bahanbaku`) REFERENCES `bahan_baku` (`id_bahanbaku`);

--
-- Constraints for table `persediaan`
--
ALTER TABLE `persediaan`
  ADD CONSTRAINT `persediaan_ibfk_1` FOREIGN KEY (`id_perusahaan`) REFERENCES `perusahaan` (`id_perusahaan`),
  ADD CONSTRAINT `persediaan_ibfk_2` FOREIGN KEY (`id_bahanbaku`) REFERENCES `bahan_baku` (`id_bahanbaku`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`id_model`) REFERENCES `model` (`id_model`);

--
-- Constraints for table `produksi`
--
ALTER TABLE `produksi`
  ADD CONSTRAINT `produksi_ibfk1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `produksi_ibfk_2` FOREIGN KEY (`id_pesanan`) REFERENCES `pesanan` (`id_pesanan`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`pemilik`) REFERENCES `karyawan` (`id_karyawan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
