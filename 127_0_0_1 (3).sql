-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 08:44 AM
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
(2, 'kaki', 13000, 123, 12345, '2019-01-28 12:10:13', '2019-01-28 12:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` varchar(255) NOT NULL,
  `id_pegawai` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `id_pegawai`, `created_at`, `updated_at`) VALUES
('2019-01-28/000000002', 'PRARARAMA000000009', '2019-01-28 01:21:17', '2019-01-28 01:21:17'),
('2019-01-28/000000003', 'PRARARAMA000000009', '2019-01-28 01:23:35', '2019-01-28 01:23:35'),
('2019-01-28/000000004', 'PRARARAMA000000009', '2019-01-28 01:24:40', '2019-01-28 01:24:40'),
('2019-01-28/000000005', 'PRARARAMA000000009', '2019-01-28 01:25:38', '2019-01-28 01:25:38'),
('2019-01-28/000000006', 'PRARARAMA000000009', '2019-01-28 01:26:18', '2019-01-28 01:26:18'),
('2019-01-28/000000007', 'PRARARAMA000000009', '2019-01-28 01:30:13', '2019-01-28 01:30:13'),
('2019-01-28/000000008', 'PRARARAMA000000009', '2019-01-28 01:30:33', '2019-01-28 01:30:33'),
('2019-01-28/000000009', 'PRARARAMA000000011', '2019-01-28 01:31:23', '2019-01-28 01:31:23'),
('2019-01-28/000000010', 'PRARARAMA000000009', '2019-01-28 01:32:25', '2019-01-28 01:32:25');

--
-- Triggers `transaksi`
--
DELIMITER $$
CREATE TRIGGER `AUTONOTRANSAKSI` BEFORE INSERT ON `transaksi` FOR EACH ROW BEGIN
  INSERT INTO transaksi_seq VALUES (NULL);
  SET NEW.no_transaksi = CONCAT_WS('/' ,CURDATE(), LPAD(LAST_INSERT_ID(), 9, '0'));
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
(10);

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
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_pegawai`, `nama_pegawai`, `alamat`, `no_telp`, `jabatan`, `username`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
('PRARARAMA000000009', 'Muh Bayu Aji', 'ashdjkashdka', '', 'Owner', 'mbayuajis', '$2y$10$To9BhiS3sRgYJacJprcsTO54k1/6viKEK3ZwoX9dgaxvfgrUW2D.q', '2019-01-28 07:51:37', '2019-01-26 12:50:15', 'fAOHXKhS2IykOXbpl4UjZI5PXsUGbNe3bBUpEGn2ltfvoFVdMO240npbSdxe'),
('PRARARAMA000000011', 'Muh Bayu Sa', 'mbayuajis1', '', 'Kasir', 'mbayuajis1', '$2y$10$.5q4w39KrY/rCj6/o9JE0.SikIUcXVsFYhQvM8JlbclQV7/Cjef2K', '2019-01-26 20:05:24', '2019-01-26 13:05:24', 'X6mTDmDbuBnTZCd9ezUIgq8o8AedXNThowrgzmRmEMbQTAgj4uReIPUtAybU');

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
(11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

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
  MODIFY `id_barang` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_seq`
--
ALTER TABLE `transaksi_seq`
  MODIFY `no_transaksi` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_seq`
--
ALTER TABLE `users_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pegawai`) REFERENCES `users` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
