-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2019 at 06:12 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `barang_transaksi`
--

CREATE TABLE `barang_transaksi` (
  `id` int(11) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `kode_barang` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '2019-02-06-000000001', '1234567', 'baju', 1, 200000, 500000, 'admin', '2019-02-06 12:06:20', '2019-02-06 12:06:20');

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
('2019-02-06-000000001', 'PRARARAMA000000016', 'Selesai', '2019-02-06 12:05:05', '2019-02-06 12:06:20');

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
(1);

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
('PRARARAMA000000011', 'Muh Bayu S', 'yogya', '07643', 'Admin', 'mbayuajis', '$2y$10$.5q4w39KrY/rCj6/o9JE0.SikIUcXVsFYhQvM8JlbclQV7/Cjef2K', '2019-01-26 20:05:24', '2019-02-06 17:03:14', 'X6mTDmDbuBnTZCd9ezUIgq8o8AedXNThowrgzmRmEMbQTAgj4uReIPUtAybU'),
('PRARARAMA000000016', 'admin', 'admin', '21312321', 'Owner', 'admin', '$2y$10$BdLqfrM9xcixGgJYf6l3H.HD9Wkg2aYjTwT9getCBuv3v/BUfoWCG', '2019-01-30 14:39:28', '2019-02-05 16:33:14', 'xPL7a7oTcNbxjLO1BICs6joIcPABZqkuhCgHd4FwnLJbGO2APNPVVvUEgIwZ'),
('PRARARAMA000000017', 'user', 'user', '0987654', 'Kasir', 'userku', '$2y$10$WGBJI0AA5lXNrTcKffZakO2GvURhy3B6RJye/ju3QdbQ96i27DW1G', '2019-02-06 17:04:24', '2019-02-06 17:04:24', NULL);

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
(16),
(17);

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
-- AUTO_INCREMENT for table `barang_transaksi`
--
ALTER TABLE `barang_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_seq`
--
ALTER TABLE `transaksi_seq`
  MODIFY `no_transaksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_seq`
--
ALTER TABLE `users_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_transaksi`
--
ALTER TABLE `barang_transaksi`
  ADD CONSTRAINT `barang_transaksi_ibfk_2` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE,
  ADD CONSTRAINT `barang_transaksi_ibfk_3` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `users` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
