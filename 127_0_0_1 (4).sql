-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 12:03 AM
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
(3, 'bajuku', 11, 10000, 1000000, '2019-01-30 09:42:07', '2019-01-30 09:42:29'),
(4, 'bajuku', 20, 10000, 1000000, '2019-01-30 11:13:18', '2019-01-30 11:13:18');

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
(1, '2019-01-30-000000015', 3),
(2, '2019-01-30-000000015', 3),
(3, '2019-01-30-000000015', 4),
(4, '2019-01-30-000000015', 4),
(5, '2019-01-30-000000015', 3),
(6, '2019-01-30-000000015', 3),
(7, '2019-01-30-000000015', 4),
(8, '2019-01-30-000000015', 3),
(9, '2019-01-30-000000015', 3),
(10, '2019-01-30-000000015', 4),
(11, '2019-01-30-000000015', 4),
(12, '2019-01-30-000000015', 4),
(13, '2019-01-30-000000015', 4),
(14, '2019-01-30-000000015', 4),
(15, '2019-01-30-000000015', 4),
(16, '2019-01-30-000000015', 4),
(17, '2019-01-30-000000015', 4),
(18, '2019-01-30-000000015', 3),
(19, '2019-01-30-000000015', 3),
(20, '2019-01-30-000000015', 3),
(21, '2019-01-30-000000015', 3),
(22, '2019-01-30-000000015', 3),
(23, '2019-01-30-000000015', 4),
(24, '2019-01-30-000000015', 3),
(25, '2019-01-30-000000015', 3),
(26, '2019-01-30-000000015', 3),
(27, '2019-01-30-000000015', 3),
(28, '2019-01-30-000000015', 3),
(29, '2019-01-30-000000015', 3),
(30, '2019-01-30-000000015', 3),
(31, '2019-01-30-000000015', 3),
(32, '2019-01-30-000000015', 3),
(33, '2019-01-30-000000015', 4),
(34, '2019-01-30-000000015', 3),
(35, '2019-01-30-000000015', 3),
(36, '2019-01-30-000000015', 3),
(37, '2019-01-30-000000015', 4),
(38, '2019-01-31-000000017', 3),
(39, '2019-01-31-000000017', 4),
(40, '2019-01-31-000000017', 3),
(41, '2019-01-31-000000018', 3),
(55, '2019-01-31-000000019', 4),
(56, '2019-01-31-000000019', 3),
(57, '2019-01-31-000000019', 3),
(58, '2019-01-31-000000019', 4),
(59, '2019-01-31-000000019', 3),
(60, '2019-01-31-000000019', 3),
(61, '2019-01-31-000000019', 4),
(62, '2019-01-31-000000019', 4);

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
('2019-01-30-000000015', 'PRARARAMA000000009', 'Memasukkan Belanjaan', '2019-01-30 09:52:21', '2019-01-30 09:52:21'),
('2019-01-30-000000016', 'PRARARAMA000000009', 'Memasukkan Belanjaan', '2019-01-30 09:56:19', '2019-01-30 09:56:19'),
('2019-01-31-000000017', 'PRARARAMA000000009', 'Memasukkan Belanjaan', '2019-01-30 14:31:42', '2019-01-30 14:31:42'),
('2019-01-31-000000018', 'PRARARAMA000000016', 'Memasukkan Belanjaan', '2019-01-30 14:42:15', '2019-01-30 14:42:15'),
('2019-01-31-000000019', 'PRARARAMA000000009', 'Memasukkan Belanjaan', '2019-01-30 14:46:27', '2019-01-30 14:46:27');

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
(19);

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
('PRARARAMA000000016', 'admin', 'admin', '21312321', 'Owner', 'admin', '$2y$10$.k5Vf/8LfhpRiprr4STeceKc7b8lVXsM9yXDgbUWJs4c0vC.ba2p.', '2019-01-30 14:39:28', '2019-01-30 14:39:28', 'FV1DBSENDQ5jRELpLFUQwRmrHfMvrmsboNivuCmP9LBSdkgvzrmdabw04qCT');

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
  MODIFY `id_barang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `barang_transaksi`
--
ALTER TABLE `barang_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `transaksi_seq`
--
ALTER TABLE `transaksi_seq`
  MODIFY `no_transaksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
