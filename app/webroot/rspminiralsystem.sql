-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2016 at 12:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rspminiralsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `monies`
--

CREATE TABLE `monies` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `curent_moneys` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monies`
--

INSERT INTO `monies` (`id`, `customer_id`, `curent_moneys`) VALUES
(1, 50, 1250),
(2, 60, 1224),
(3, 64, 1251),
(4, 23, 5200);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `amounts` int(10) NOT NULL,
  `prices` int(12) NOT NULL,
  `t_price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `customer_id`, `amounts`, `prices`, `t_price`) VALUES
(1, 0, 150, 15, 2250),
(2, 0, 100, 15, 1500),
(3, 68, 125, 15, 1254),
(4, 25, 500, 15, 3250),
(5, 85, 50, 15, 750),
(6, 78, 100, 15, 1500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `gender`, `email`, `phone`, `created`, `modified`, `status`, `image`) VALUES
(17, 'my', 'computer', 'mycomputer', 'e2352213d0234ab22cc4f8f5dbdf308fa82b50ce', 'Female', 'mycompter@gmail.com', '0123456789', '2016-08-17 04:33:40', '2016-08-18 06:58:34', 0, 'isc.png'),
(18, 'barang', 'barang', 'barang', '86115e2edbb560e57cfa6a0f9fb3c47680289a29', 'Male', 'barangbarang123@gamail.com', '0123456789', '2016-08-17 04:46:10', '2016-08-18 06:51:31', 0, '1.png'),
(19, 'youtube', 'channel', 'youtube', '46f87cb19c8fcb4df9b27e0151899a1b1597172d', 'Male', 'youtubechannel@gmail.com', '0123456789', '2016-08-17 06:22:57', '2016-08-17 06:29:53', 1, '6.png'),
(20, 'admin', 'admin', 'admin', '89c83fe2130ac25957d5928390c616f629492344', 'Male', 'admin@gmail.com', '0123456789', '2016-08-17 08:59:18', '2016-08-17 08:59:18', 1, '6.png'),
(21, 'mak', 'pa', 'makpa', '89c83fe2130ac25957d5928390c616f629492344', 'Female', 'makpa@gmail.com', '0123456789', '2016-08-17 10:42:40', '2016-08-17 10:42:40', 1, '1.png'),
(22, 'bong', 'thom', 'bongthom', '89c83fe2130ac25957d5928390c616f629492344', 'Female', 'bongthom@gmail.ocm', '012345678', '2016-08-17 10:59:42', '2016-08-17 10:59:42', 1, 'isc.png'),
(23, 'bay', 'kork', 'baykork', '89c83fe2130ac25957d5928390c616f629492344', 'Female', 'sohour@gmail.com', '0123456789', '2016-08-18 07:24:20', '2016-08-18 07:24:20', 1, 'isc.png'),
(24, 'banan', 'kork', 'baybana', '44a4b77a307bcc5a75fe06d31aa400aad2f46460', 'Female', 'sohour@gmail.com', '0123456789', '2016-08-18 09:04:03', '2016-08-18 09:04:03', 1, 'isc.png'),
(26, 'admin', 'admin', 'sohourtheung', 'd2399a8c2ac30a81cdbe87e5d54f91a67cd10f72', 'Male', 'admin@gmail.com', '0968100045', '2016-08-19 08:50:10', '2016-08-19 08:51:16', 1, '13879369_1359587717402387_321440979816065792_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `withdrawal` int(10) NOT NULL,
  `withdrawal_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `customer_id`, `cus_name`, `withdrawal`, `withdrawal_date`) VALUES
(1, 0, 'konan', 125, '2016-08-19 00:00:00'),
(2, 0, 'iran', 1251, '2016-08-19 00:00:00'),
(3, 52, 'botan', 100, '2016-08-19 00:00:00'),
(4, 45, 'saman', 150, '2016-08-19 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monies`
--
ALTER TABLE `monies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawals`
--
ALTER TABLE `withdrawals`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monies`
--
ALTER TABLE `monies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
