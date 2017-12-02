-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 02:21 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko2`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups2`
--

CREATE TABLE `groups2` (
  `id2` tinyint(1) NOT NULL,
  `name2` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups2`
--

INSERT INTO `groups2` (`id2`, `name2`) VALUES
(1, 'Admin2'),
(2, 'Member2');

-- --------------------------------------------------------

--
-- Table structure for table `invoices2`
--

CREATE TABLE `invoices2` (
  `id2` int(10) NOT NULL,
  `date2` datetime NOT NULL,
  `due_date2` datetime NOT NULL,
  `user_id2` int(10) NOT NULL,
  `status2` enum('paid','confirmed','unpaid','canceled','expired') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoices2`
--

INSERT INTO `invoices2` (`id2`, `date2`, `due_date2`, `user_id2`, `status2`) VALUES
(58, '2017-07-09 13:56:58', '2017-07-10 13:56:58', 52, 'confirmed'),
(59, '2017-07-09 14:11:20', '2017-07-10 14:11:20', 52, 'unpaid'),
(60, '2017-07-09 14:11:50', '2017-07-10 14:11:50', 52, 'unpaid'),
(61, '2017-07-11 20:07:04', '2017-07-12 20:07:04', 53, 'confirmed'),
(62, '2017-07-11 20:10:39', '2017-07-12 20:10:39', 53, 'unpaid'),
(63, '2017-07-11 20:14:44', '2017-07-12 20:14:44', 53, 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `orders2`
--

CREATE TABLE `orders2` (
  `id2` int(10) NOT NULL,
  `invoice_id2` int(10) NOT NULL,
  `product_id2` int(10) NOT NULL,
  `product_name2` varchar(50) NOT NULL,
  `qty2` int(3) NOT NULL,
  `price2` int(9) NOT NULL,
  `options2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders2`
--

INSERT INTO `orders2` (`id2`, `invoice_id2`, `product_id2`, `product_name2`, `qty2`, `price2`, `options2`) VALUES
(49, 58, 5, 'Jaket', 1, 100000, ''),
(50, 59, 2, 'Sandal', 1, 20000, ''),
(51, 60, 1, 'Bajuu', 1, 50000, ''),
(52, 61, 2, 'Sandal', 1, 20000, ''),
(53, 62, 2, 'Sandal', 1, 20000, ''),
(54, 63, 2, 'Sandal', 1, 20000, '');

-- --------------------------------------------------------

--
-- Table structure for table `products2`
--

CREATE TABLE `products2` (
  `id2` int(3) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `description2` text NOT NULL,
  `price2` int(9) NOT NULL,
  `stock2` int(3) NOT NULL,
  `image2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products2`
--

INSERT INTO `products2` (`id2`, `name2`, `description2`, `price2`, `stock2`, `image2`) VALUES
(2, 'Sandal', 'Rp20.000', 20000, 1, 'sandal1.jpg'),
(5, 'Jaket', 'Rp100.000', 100000, 2, 'jaket1.jpg'),
(7, 'Kaos Kaki', 'Rp20.000', 20000, 2, 'kaos_kaki1.jpg'),
(8, 'Kaca Mata', 'Rp15.000', 15000, 4, 'kaca_mata1.jpg'),
(9, 'Helm', 'Rp250.000', 250000, 6, 'helm.jpg'),
(10, 'Dasi', 'Rp20.000', 20000, 9, 'dasi.jpg'),
(11, 'Celana', 'Rp150.000', 150000, 3, 'celana.jpg'),
(12, 'Ikat Pinggang', 'Rp30.000', 30000, 7, 'ikat_pinggang.jpg'),
(13, 'Jam Tangan', 'Rp180.000', 180000, 9, 'jam.jpg'),
(14, 'Kaos Dalam', 'Rp.40.000', 40000, 2, 'kaso_dalam.jpg'),
(15, 'Masker ', 'Rp50.000', 50000, 11, 'masker1.jpg'),
(16, 'Sarung Tangan', 'Rp60.000', 60000, 21, 'sarung_tangan1.jpg'),
(17, 'Topi', 'Rp20.000', 20000, 4, 'topi3.jpg'),
(18, 'Sepatu Kets', 'Rp70.000', 70000, 30, 'sepatu3.jpg'),
(19, 'Tas Eiger Sport', 'Rp600.000', 600000, 2, 'tas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `toko_sessions`
--

CREATE TABLE `toko_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `id2` int(10) NOT NULL,
  `username2` varchar(25) NOT NULL,
  `email2` text NOT NULL,
  `password2` varchar(60) NOT NULL,
  `group2` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id2`, `username2`, `email2`, `password2`, `group2`) VALUES
(1, 'admin', '', 'admin', 1),
(53, 'septian', 'Septian123@gmail.com', '1234567', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups2`
--
ALTER TABLE `groups2`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `invoices2`
--
ALTER TABLE `invoices2`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `orders2`
--
ALTER TABLE `orders2`
  ADD PRIMARY KEY (`id2`);

--
-- Indexes for table `products2`
--
ALTER TABLE `products2`
  ADD PRIMARY KEY (`id2`),
  ADD UNIQUE KEY `id2` (`id2`);

--
-- Indexes for table `toko_sessions`
--
ALTER TABLE `toko_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id2`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups2`
--
ALTER TABLE `groups2`
  MODIFY `id2` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `invoices2`
--
ALTER TABLE `invoices2`
  MODIFY `id2` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `orders2`
--
ALTER TABLE `orders2`
  MODIFY `id2` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `products2`
--
ALTER TABLE `products2`
  MODIFY `id2` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `id2` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
