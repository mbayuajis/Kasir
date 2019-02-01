-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 09:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_kasir`
--
CREATE DATABASE IF NOT EXISTS `kp_kasir` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kp_kasir`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `stock` int(100) NOT NULL,
  `harga_beli` bigint(255) NOT NULL,
  `harga_jual` bigint(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stock`, `harga_beli`, `harga_jual`, `created_at`, `updated_at`) VALUES
(3, 'celanaku', 0, 10000, 1000000, '2019-01-30 09:42:07', '2019-02-01 20:25:00'),
(4, 'bajuku', 12, 10000, 1000000, '2019-01-30 11:13:18', '2019-02-01 20:40:35'),
(5, '5', 2311, 3232, 32423432, '2019-01-31 02:04:32', '2019-02-01 20:40:29'),
(6, 'ahdasg', 374827, 273847238947, 23784927394, '2019-01-31 02:05:30', '2019-02-01 20:32:24');

-- --------------------------------------------------------

--
-- Table structure for table `barang_transaksi`
--

CREATE TABLE `barang_transaksi` (
  `id` int(11) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `kode_barang` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_transaksi`
--

INSERT INTO `barang_transaksi` (`id`, `no_transaksi`, `kode_barang`) VALUES
(41, '2019-01-31-000000018', 3),
(60, '2019-01-31-000000019', 3),
(61, '2019-01-31-000000019', 4),
(62, '2019-01-31-000000019', 4),
(91, '2019-01-31-000000020', 4),
(92, '2019-01-31-000000020', 4),
(124, '2019-01-30-000000015', 3),
(125, '2019-01-30-000000015', 4),
(127, '2019-02-01-000000022', 3),
(128, '2019-02-01-000000022', 4),
(129, '2019-02-01-000000023', 4),
(130, '2019-02-01-000000024', 5),
(131, '2019-02-01-000000024', 5),
(133, '2019-01-30-000000016', 3),
(135, '2019-01-31-000000017', 3),
(136, '2019-01-31-000000017', 3),
(137, '2019-01-31-000000017', 3),
(138, '2019-01-31-000000017', 3),
(139, '2019-01-31-000000017', 3),
(140, '2019-01-31-000000017', 3),
(141, '2019-01-31-000000017', 3),
(142, '2019-01-31-000000017', 3),
(143, '2019-01-31-000000017', 3),
(144, '2019-01-31-000000017', 3),
(145, '2019-01-31-000000017', 3),
(146, '2019-01-31-000000017', 3),
(147, '2019-01-31-000000017', 3),
(148, '2019-01-31-000000017', 3),
(156, '2019-02-01-000000025', 3),
(157, '2019-02-01-000000025', 3),
(158, '2019-02-01-000000025', 3),
(159, '2019-01-31-000000018', 4),
(160, '2019-01-31-000000019', 3),
(162, '2019-01-31-000000021', 3),
(165, '2019-01-31-000000021', 6),
(166, '2019-02-01-000000026', 3),
(167, '2019-02-01-000000026', 3),
(170, '2019-02-01-000000027', 3),
(171, '2019-02-01-000000028', 3),
(172, '2019-02-01-000000029', 3),
(175, '2019-02-01-000000031', 3),
(176, '2019-02-01-000000031', 3),
(179, '2019-02-01-000000031', 6),
(180, '2019-02-01-000000031', 5),
(189, '2019-02-01-000000030', 5),
(191, '2019-02-01-000000030', 6),
(192, '2019-02-01-000000030', 4),
(193, '2019-02-01-000000030', 5),
(195, '2019-02-01-000000030', 3),
(196, '2019-02-01-000000030', 3),
(197, '2019-02-01-000000030', 3),
(198, '2019-02-01-000000030', 3),
(199, '2019-02-01-000000030', 4),
(200, '2019-02-01-000000030', 4),
(201, '2019-02-01-000000032', 5),
(202, '2019-02-02-000000033', 5),
(203, '2019-02-02-000000033', 5),
(204, '2019-02-02-000000033', 6),
(205, '2019-02-01-000000032', 5),
(206, '2019-02-01-000000032', 6),
(207, '2019-02-02-000000035', 3),
(208, '2019-02-02-000000035', 4),
(209, '2019-02-02-000000035', 4),
(210, '2019-02-02-000000035', 5),
(211, '2019-02-02-000000035', 5),
(212, '2019-02-02-000000035', 5),
(213, '2019-02-02-000000035', 6),
(214, '2019-02-02-000000035', 6),
(215, '2019-02-02-000000035', 6),
(216, '2019-02-02-000000035', 6),
(221, '2019-02-02-000000036', 6),
(223, '2019-02-02-000000036', 6),
(224, '2019-02-02-000000037', 5),
(225, '2019-02-02-000000037', 4),
(226, '2019-02-02-000000037', 4);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(255) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `harga_beli` bigint(255) NOT NULL,
  `harga_jual` bigint(255) NOT NULL,
  `nama_kasir` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `no_transaksi`, `kode_barang`, `nama_barang`, `qty`, `harga_beli`, `harga_jual`, `nama_kasir`, `created_at`, `updated_at`) VALUES
(1, '2019-02-02-000000033', '5', '5', 2, 3232, 32423432, 'admin', '2019-02-01 20:21:56', '2019-02-01 20:21:56'),
(2, '2019-02-01-000000032', '5', '5', 2, 3232, 32423432, 'admin', '2019-02-01 20:23:39', '2019-02-01 20:23:39'),
(3, '2019-02-01-000000032', '6', 'ahdasg', 1, 273847238947, 23784927394, 'admin', '2019-02-01 20:23:39', '2019-02-01 20:23:39'),
(4, '2019-02-02-000000035', '3', 'celanaku', 1, 10000, 1000000, 'admin', '2019-02-01 20:25:40', '2019-02-01 20:25:40'),
(5, '2019-02-02-000000035', '4', 'bajuku', 2, 10000, 1000000, 'admin', '2019-02-01 20:25:40', '2019-02-01 20:25:40'),
(6, '2019-02-02-000000035', '5', '5', 3, 3232, 32423432, 'admin', '2019-02-01 20:25:40', '2019-02-01 20:25:40'),
(7, '2019-02-02-000000035', '6', 'ahdasg', 4, 273847238947, 23784927394, 'admin', '2019-02-01 20:25:40', '2019-02-01 20:25:40'),
(8, '2019-02-02-000000036', '6', 'ahdasg', 2, 273847238947, 23784927394, 'admin', '2019-02-01 20:32:39', '2019-02-01 20:32:39'),
(9, '2019-02-02-000000037', '4', 'bajuku', 2, 10000, 1000000, 'Muh Bayu Aji', '2019-02-01 20:40:53', '2019-02-01 20:40:53'),
(10, '2019-02-02-000000037', '5', '5', 1, 3232, 32423432, 'Muh Bayu Aji', '2019-02-01 20:40:53', '2019-02-01 20:40:53');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(255) NOT NULL,
  `id_pegawai` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `id_pegawai`, `status`, `created_at`, `updated_at`) VALUES
('2019-01-30-000000015', 'PRARARAMA000000009', 'Selesai', '2019-01-30 09:52:21', '2019-01-31 05:31:34'),
('2019-01-30-000000016', 'PRARARAMA000000009', 'Selesai', '2019-01-30 09:56:19', '2019-01-31 21:06:19'),
('2019-01-31-000000017', 'PRARARAMA000000009', 'Selesai', '2019-01-30 14:31:42', '2019-01-31 21:23:01'),
('2019-01-31-000000018', 'PRARARAMA000000016', 'Selesai', '2019-01-30 14:42:15', '2019-01-31 21:29:24'),
('2019-01-31-000000019', 'PRARARAMA000000009', 'Selesai', '2019-01-30 14:46:27', '2019-01-31 21:40:14'),
('2019-01-31-000000020', 'PRARARAMA000000016', 'Selesai', '2019-01-31 01:20:50', '2019-01-31 21:43:16'),
('2019-01-31-000000021', 'PRARARAMA000000016', 'Selesai', '2019-01-31 01:21:59', '2019-01-31 21:44:30'),
('2019-02-01-000000022', 'PRARARAMA000000016', 'Selesai', '2019-01-31 12:41:17', '2019-01-31 12:41:58'),
('2019-02-01-000000023', 'PRARARAMA000000016', 'Selesai', '2019-01-31 12:42:08', '2019-01-31 12:42:36'),
('2019-02-01-000000024', 'PRARARAMA000000016', 'Selesai', '2019-01-31 12:42:55', '2019-01-31 20:08:32'),
('2019-02-01-000000025', 'PRARARAMA000000016', 'Selesai', '2019-01-31 21:11:05', '2019-01-31 21:22:21'),
('2019-02-01-000000026', 'PRARARAMA000000016', 'Selesai', '2019-01-31 21:46:54', '2019-01-31 21:48:08'),
('2019-02-01-000000027', 'PRARARAMA000000016', 'Selesai', '2019-01-31 21:48:45', '2019-01-31 21:49:01'),
('2019-02-01-000000028', 'PRARARAMA000000016', 'Selesai', '2019-01-31 21:49:57', '2019-01-31 21:50:22'),
('2019-02-01-000000029', 'PRARARAMA000000016', 'Selesai', '2019-01-31 21:56:49', '2019-01-31 22:11:09'),
('2019-02-01-000000030', 'PRARARAMA000000016', 'Selesai', '2019-01-31 22:17:22', '2019-02-01 16:40:08'),
('2019-02-01-000000031', 'PRARARAMA000000016', 'Selesai', '2019-02-01 06:31:53', '2019-02-01 06:33:23'),
('2019-02-01-000000032', 'PRARARAMA000000016', 'Selesai', '2019-02-01 06:55:10', '2019-02-01 20:23:39'),
('2019-02-02-000000033', 'PRARARAMA000000016', 'Selesai', '2019-02-01 20:21:28', '2019-02-01 20:21:55'),
('2019-02-02-000000034', 'PRARARAMA000000016', 'Memasukkan Belanjaan', '2019-02-01 20:24:19', '2019-02-01 20:24:19'),
('2019-02-02-000000035', 'PRARARAMA000000016', 'Selesai', '2019-02-01 20:24:50', '2019-02-01 20:25:40'),
('2019-02-02-000000036', 'PRARARAMA000000016', 'Selesai', '2019-02-01 20:31:31', '2019-02-01 20:32:39'),
('2019-02-02-000000037', 'PRARARAMA000000009', 'Selesai', '2019-02-01 20:40:21', '2019-02-01 20:40:53');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `AUTONOTRANSAKSI` BEFORE INSERT ON `transaksi` FOR EACH ROW BEGIN
  INSERT INTO transaksi_seq VALUES (NULL);
  SET NEW.no_transaksi = CONCAT_WS('-' ,CURDATE(), LPAD(LAST_INSERT_ID(), 9, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_seq`
--

CREATE TABLE `transaksi_seq` (
  `no_transaksi` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_seq`
--

INSERT INTO `transaksi_seq` (`no_transaksi`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_pegawai` varchar(100) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_pegawai`, `nama_pegawai`, `alamat`, `no_telp`, `jabatan`, `username`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
('PRARARAMA000000009', 'Muh Bayu Aji', 'ashdjkashdka', '0972323', 'Owner', 'mbayuajis', '$2y$10$To9BhiS3sRgYJacJprcsTO54k1/6viKEK3ZwoX9dgaxvfgrUW2D.q', '2019-01-28 07:51:37', '2019-01-26 12:50:15', 'tyIcEthEfC8iInw5QLzEib1qLbMvDtrxSTFyuk7U7APBYHPU94GQxYdPfh7g'),
('PRARARAMA000000011', 'Muh Bayu Sa', 'mbayuajis1', '0348348', 'Kasir', 'mbayuajis1', '$2y$10$.5q4w39KrY/rCj6/o9JE0.SikIUcXVsFYhQvM8JlbclQV7/Cjef2K', '2019-01-26 20:05:24', '2019-01-26 13:05:24', 'X6mTDmDbuBnTZCd9ezUIgq8o8AedXNThowrgzmRmEMbQTAgj4uReIPUtAybU'),
('PRARARAMA000000016', 'admin', 'admin', '21312321', 'Owner', 'admin', '$2y$10$.k5Vf/8LfhpRiprr4STeceKc7b8lVXsM9yXDgbUWJs4c0vC.ba2p.', '2019-01-30 14:39:28', '2019-01-30 14:39:28', 'bbthswGaV8MiT4REqAGflkWTWMBfRoz6ZWTwpEB1onk98pyC1Z5prL1peYSm');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `AUTOIDPEGAWAI` BEFORE INSERT ON `users` FOR EACH ROW BEGIN
  INSERT INTO users_seq VALUES (NULL);
  SET NEW.id_pegawai = CONCAT('PRARARAMA', LPAD(LAST_INSERT_ID(), 9, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users_seq`
--

CREATE TABLE `users_seq` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_seq`
--

INSERT INTO `users_seq` (`id`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(15),
(16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_transaksi`
--
ALTER TABLE `barang_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_transaksi` (`no_transaksi`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `transaksi_seq`
--
ALTER TABLE `transaksi_seq`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_seq`
--
ALTER TABLE `users_seq`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `barang_transaksi`
--
ALTER TABLE `barang_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi_seq`
--
ALTER TABLE `transaksi_seq`
  MODIFY `no_transaksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users_seq`
--
ALTER TABLE `users_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_transaksi`
--
ALTER TABLE `barang_transaksi`
  ADD CONSTRAINT `barang_transaksi_ibfk_1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `barang_transaksi_ibfk_2` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `users` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
