-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 01:24 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_pegawai` varchar(100) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_pegawai`, `nama_pegawai`, `alamat`, `username`, `password`, `created_at`, `updated_at`) VALUES
('1283128312', 'ahsdjashdjka', 'ahsdjkashdjkas', 'ahsdjkashdkj', 'ashdjkashdjkas', '2019-01-23 16:45:21', '2019-01-23 16:45:21'),
('213123123123', 'gghjghjgjh', 'ghjghjg', 'hjghjghjgjhg', 'ghjghjgjh', '2019-01-23 15:40:57', '2019-01-23 15:40:57'),
('89890878q7we8qw', '980890890', 'adweqwe', 'adqweqweqweqwe', 'asdasdsadasd', '2019-01-23 15:46:44', '2019-01-23 15:46:44'),
('asdasdasd12321', 'asdasdasdas', 'asdasdasdas', 'asdasdasdasd', 'asdasdas', '2019-01-23 16:46:39', '2019-01-23 16:46:39'),
('asdhasjkdh', 'ahsdjkashdjkash', 'ashdjkashdjk', 'ahsdjkashdjkas', 'ashdjkashdasjk', '2019-01-23 15:47:44', '2019-01-23 15:47:44'),
('dsajdhasjkdhasjkdh', 'asdsad', 'asdasdas', 'asdasd', 'ahsjdahsdjkahsdkjas', '2019-01-23 16:43:21', '2019-01-23 16:43:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
