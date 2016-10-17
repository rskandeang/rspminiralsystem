-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2016 at 09:46 AM
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
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `costomers`
--

CREATE TABLE `costomers` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `dob` date NOT NULL,
  `gender` tinytext NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `first` tinyint(1) DEFAULT NULL,
  `code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `costomers`
--

INSERT INTO `costomers` (`id`, `first_name`, `last_name`, `user_name`, `password`, `dob`, `gender`, `phone`, `email`, `status`, `first`, `code`) VALUES
(231, 'test', 'test', '231', '123456', '1998-12-19', 'áž”áŸ’ážšáž»ážŸ', 123456789, '', 1, 1, ''),
(232, 'test1', 'test1', 'ST231232', '', '1999-12-19', 'áž”áŸ’ážšáž»ážŸ', 1234567, 'test@gmail.com', 1, NULL, '231'),
(233, 'a', 'a', '233', '123456', '1998-12-19', 'áž”áŸ’ážšáž»ážŸ', 123456789, '', 1, 1, ''),
(234, 'a1', 'a1', 'ST233234', '123456', '1999-12-18', 'áž”áŸ’ážšáž»ážŸ', 123456, '', 1, 0, '233'),
(235, 'a2', 'a2', 'ND234235', '123456', '1998-12-19', 'áž”áŸ’ážšáž»ážŸ', 123456, '', 1, NULL, 'ST233234'),
(236, 'a3', 'a3', 'RD235236', '123456', '1998-12-19', 'áž”áŸ’ážšáž»ážŸ', 123456, '', 1, NULL, 'ND234235'),
(237, 'a4', 'a4', 'RD236237', '', '1999-11-17', 'áž”áŸ’ážšáž»ážŸ', 12345678, '', 1, 0, 'RD235236');

-- --------------------------------------------------------

--
-- Table structure for table `fours`
--

CREATE TABLE `fours` (
  `fours_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL,
  `refer` varchar(225) NOT NULL,
  `costomer_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fours`
--

INSERT INTO `fours` (`fours_id`, `code`, `refer`, `costomer_id`) VALUES
(60, 'RD235236', '233', 236),
(61, 'RD236237', '233234', 237);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `lock_id` int(3) NOT NULL,
  `cus_name` varchar(225) NOT NULL,
  `date` varchar(225) NOT NULL,
  `amounts` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `cus_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`lock_id`, `cus_name`, `date`, `amounts`, `status`, `cus_id`) VALUES
(1, 'a1 a1', '2016-10-11â€‹â€‹ 14:22:04', 'áž”áž¶áž“áž‘áž·áž‰áž…áŸ†áž“áž½áž“ 5 áž€áŸážŸ', 0, 234),
(2, 'a a', '2016-10-11â€‹â€‹ 14:22:29', 'áž”áž¶áž“ážŠáž€áž”áŸ’ážšáž¶áž€áŸ‹áž…áŸ†áž“áž½áž“ $ 1', 0, 233),
(3, 'a3 a3', '2016-10-11â€‹â€‹ 14:22:46', 'áž”áž¶áž“áž‘áž·áž‰áž…áŸ†áž“áž½áž“ 4 áž€áŸážŸ', 0, 236);

-- --------------------------------------------------------

--
-- Table structure for table `monies`
--

CREATE TABLE `monies` (
  `money_id` int(3) NOT NULL,
  `benefit` float NOT NULL,
  `customer_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ones`
--

CREATE TABLE `ones` (
  `one_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL,
  `costomer_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ones`
--

INSERT INTO `ones` (`one_id`, `code`, `costomer_id`) VALUES
(158, '231', 231),
(159, '231232', 232),
(160, '233', 233),
(161, '233234', 234),
(162, '234235', 235),
(163, '235236', 236),
(164, '236237', 237);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `pur_id` int(3) NOT NULL,
  `pur_date` varchar(225) NOT NULL,
  `amounts` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `customer_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`pur_id`, `pur_date`, `amounts`, `price`, `customer_id`) VALUES
(1, '2016-10-11â€‹â€‹ 14:22:04', 5, 15, 234),
(2, '2016-10-11â€‹â€‹ 14:22:46', 4, 15, 236);

-- --------------------------------------------------------

--
-- Table structure for table `threes`
--

CREATE TABLE `threes` (
  `three_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL,
  `refer` varchar(225) NOT NULL,
  `costomer_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `threes`
--

INSERT INTO `threes` (`three_id`, `code`, `refer`, `costomer_id`) VALUES
(50, 'ND234235', '233', 235),
(51, 'ND235236', '233234', 236),
(52, 'ND236237', '234235', 237);

-- --------------------------------------------------------

--
-- Table structure for table `twos`
--

CREATE TABLE `twos` (
  `two_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL,
  `refer` varchar(225) NOT NULL,
  `costomer_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `twos`
--

INSERT INTO `twos` (`two_id`, `code`, `refer`, `costomer_id`) VALUES
(71, 'ST231232', '231', 232),
(72, 'ST233234', '233', 234),
(73, 'ST234235', '233234', 235),
(74, 'ST235236', '234235', 236),
(75, 'ST236237', '235236', 237);

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
  `role` varchar(5) NOT NULL,
  `gender` tinytext NOT NULL,
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

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `role`, `gender`, `email`, `phone`, `created`, `modified`, `status`, `image`) VALUES
(158, 'admin', 'admin', 'admin', '89c83fe2130ac25957d5928390c616f629492344', 'admin', 'ážŸáŸ’ážšáž¸', 'yana@gamil.com', '0123456789', '2016-10-11 09:00:29', '2016-10-11 09:00:29', 1, 'avatar.jpg'),
(159, 'thea', 'thea', 'administrator', '89c83fe2130ac25957d5928390c616f629492344', 'admin', 'áž”áŸ’ážšáž»ážŸ', 'test@gmail.com', '0123456789', '2016-10-11 09:07:03', '2016-10-11 09:07:03', 1, 'unnamed.jpg'),
(160, 'test', 'test', '231', '89c83fe2130ac25957d5928390c616f629492344', 'user', 'áž”áŸ’ážšáž»ážŸ', '', '123456789', '2016-10-11 09:08:13', '2016-10-11 09:08:13', 1, ''),
(161, 'test1', 'test1', 'ST231232', '6bad9332c3a47efa08c94849215f4b615afd74c5', 'user', 'áž”áŸ’ážšáž»ážŸ', 'test@gmail.com', '1234567', '2016-10-11 09:08:53', '2016-10-11 09:08:53', 1, ''),
(162, 'a', 'a', '233', '89c83fe2130ac25957d5928390c616f629492344', 'user', 'áž”áŸ’ážšáž»ážŸ', '', '123456789', '2016-10-11 09:12:36', '2016-10-11 09:12:36', 1, ''),
(163, 'a1', 'a1', 'ST233234', '89c83fe2130ac25957d5928390c616f629492344', 'user', 'áž”áŸ’ážšáž»ážŸ', '', '123456', '2016-10-11 09:14:47', '2016-10-11 09:14:47', 1, ''),
(164, 'a2', 'a2', 'ND234235', '89c83fe2130ac25957d5928390c616f629492344', 'user', 'áž”áŸ’ážšáž»ážŸ', '', '123456', '2016-10-11 09:15:26', '2016-10-11 09:15:26', 1, ''),
(165, 'a3', 'a3', 'RD235236', '89c83fe2130ac25957d5928390c616f629492344', 'user', 'áž”áŸ’ážšáž»ážŸ', '', '123456', '2016-10-11 09:16:12', '2016-10-11 09:16:12', 1, ''),
(166, 'a4', 'a4', 'RD236237', '6bad9332c3a47efa08c94849215f4b615afd74c5', 'user', 'áž”áŸ’ážšáž»ážŸ', '', '12345678', '2016-10-11 09:21:45', '2016-10-11 09:21:45', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `id` int(3) NOT NULL,
  `money` float NOT NULL,
  `draw_date` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `customer_name` varchar(225) NOT NULL,
  `customer_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`id`, `money`, `draw_date`, `status`, `customer_name`, `customer_id`) VALUES
(1, 1, '2016-10-11â€‹â€‹ 14:22:29', 1, 'a a', 233);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costomers`
--
ALTER TABLE `costomers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fours`
--
ALTER TABLE `fours`
  ADD PRIMARY KEY (`fours_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`lock_id`);

--
-- Indexes for table `monies`
--
ALTER TABLE `monies`
  ADD PRIMARY KEY (`money_id`);

--
-- Indexes for table `ones`
--
ALTER TABLE `ones`
  ADD PRIMARY KEY (`one_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`pur_id`);

--
-- Indexes for table `threes`
--
ALTER TABLE `threes`
  ADD PRIMARY KEY (`three_id`);

--
-- Indexes for table `twos`
--
ALTER TABLE `twos`
  ADD PRIMARY KEY (`two_id`);

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
-- AUTO_INCREMENT for table `costomers`
--
ALTER TABLE `costomers`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;
--
-- AUTO_INCREMENT for table `fours`
--
ALTER TABLE `fours`
  MODIFY `fours_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `lock_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `monies`
--
ALTER TABLE `monies`
  MODIFY `money_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ones`
--
ALTER TABLE `ones`
  MODIFY `one_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `pur_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `threes`
--
ALTER TABLE `threes`
  MODIFY `three_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `twos`
--
ALTER TABLE `twos`
  MODIFY `two_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;
--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
