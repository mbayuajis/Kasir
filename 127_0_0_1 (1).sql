-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 09:14 PM
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
('PRARARAMA000000004', 'bayu', 'asdasdsad', 'asdasdasdqwdqw', 'asdasdasdasdasd', '2019-01-24 19:53:04', '2019-01-24 12:53:04'),
('PRARARAMA000000005', 'poiuwe', 'asdasdas', 'asdasdasd', 'asdasdasdasdas', '2019-01-24 13:13:56', '2019-01-24 13:13:56');

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
(5);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `users_seq`
--
ALTER TABLE `users_seq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
