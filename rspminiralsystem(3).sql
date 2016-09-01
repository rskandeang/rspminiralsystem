-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2016 at 04:16 AM
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
-- Table structure for table `costomers`
--

CREATE TABLE `costomers` (
  `id` int(3) NOT NULL,
  `name` varchar(225) NOT NULL,
  `dob` datetime NOT NULL,
  `gender` varchar(5) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` enum('T','F') NOT NULL,
  `first` enum('T','F') NOT NULL,
  `code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `costomers`
--

INSERT INTO `costomers` (`id`, `name`, `dob`, `gender`, `phone`, `email`, `status`, `first`, `code`) VALUES
(535, 'a', '2016-08-25 03:09:00', '', 1234567, '', 'T', 'T', ''),
(536, 'b', '2016-08-25 03:09:00', '', 1234567, '', 'T', '', '20160825041257'),
(537, 'c', '2016-08-25 03:09:00', '', 1234567, '', 'T', '', 'st20160825041435'),
(538, 'd', '2016-08-25 03:09:00', '', 1234567, '', 'T', '', 'nd20160825041542'),
(539, 'e', '2016-08-25 03:09:00', '', 1234567, '', 'T', '', 'rd20160825041710'),
(540, 'b1', '2016-08-25 03:09:00', '', 1234567, '', 'T', '', '20160825041257'),
(541, 'z', '2016-08-25 09:45:00', '', 12345678, '', 'T', 'T', '');

-- --------------------------------------------------------

--
-- Table structure for table `fours`
--

CREATE TABLE `fours` (
  `fours_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL,
  `refer` varchar(225) NOT NULL,
  `costomer_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fours`
--

INSERT INTO `fours` (`fours_id`, `code`, `refer`, `costomer_id`) VALUES
(95, 'rd20160825041710', '20160825041257', 538),
(96, 'rd20160825042409', '20160825041435', 539);

-- --------------------------------------------------------

--
-- Table structure for table `monies`
--

CREATE TABLE `monies` (
  `money_id` int(3) NOT NULL,
  `benefit` float NOT NULL,
  `customer_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monies`
--

INSERT INTO `monies` (`money_id`, `benefit`, `customer_id`) VALUES
(1, 7.5, 0),
(2, 7.5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ones`
--

CREATE TABLE `ones` (
  `one_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL,
  `costomer_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ones`
--

INSERT INTO `ones` (`one_id`, `code`, `costomer_id`) VALUES
(90, '20160825041257', 535),
(91, '20160825041435', 536),
(92, '20160825041542', 537),
(93, '20160825041710', 538),
(94, '20160825094753', 541);

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `pur_id` int(3) NOT NULL,
  `pur_date` date NOT NULL,
  `amounts` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `customer_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`pur_id`, `pur_date`, `amounts`, `price`, `customer_id`) VALUES
(1, '2016-08-25', 10, 15, 536),
(2, '2016-08-24', 30, 15, 540),
(3, '2016-08-26', 20, 15, 537),
(4, '2016-08-26', 30, 15, 536),
(5, '2016-08-26', 10, 15, 535);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(3) NOT NULL,
  `name` varchar(225) NOT NULL,
  `code` int(10) NOT NULL,
  `refer` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `code`, `refer`) VALUES
(66, 'gg', 1, ''),
(68, 'uu', 2, ''),
(69, 'yaay', 3, '1'),
(70, 'ha', 4, '1'),
(71, 'tata', 5, '3'),
(72, 'gaga', 6, '3'),
(73, 'oo', 7, '6'),
(74, 'uy', 8, '4');

-- --------------------------------------------------------

--
-- Table structure for table `threes`
--

CREATE TABLE `threes` (
  `three_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL,
  `refer` varchar(225) NOT NULL,
  `costomer_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `threes`
--

INSERT INTO `threes` (`three_id`, `code`, `refer`, `costomer_id`) VALUES
(102, 'nd20160825041542', '20160825041257', 537),
(103, 'nd20160825041710', '20160825041435', 538),
(104, 'nd20160825042409', '20160825041542', 539);

-- --------------------------------------------------------

--
-- Table structure for table `twos`
--

CREATE TABLE `twos` (
  `two_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL,
  `refer` varchar(225) NOT NULL,
  `costomer_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `twos`
--

INSERT INTO `twos` (`two_id`, `code`, `refer`, `costomer_id`) VALUES
(239, 'st20160825041435', '20160825041257', 536),
(240, 'st20160825041542', '20160825041435', 537),
(241, 'st20160825041710', '20160825041542', 538),
(242, 'st20160825042409', '20160825041710', 539),
(243, 'st20160825043010', '20160825041257', 540);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(1) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `gender`, `email`, `phone`, `created`, `modified`, `status`) VALUES
(1, 'aa', '89c83fe2130ac25957d5928390c616f629492344', 0, 'f', 'test@gmail.com', '012345678', '2016-08-16 00:00:00', '2016-08-16 10:59:33', 1),
(2, 'test1', '89c83fe2130ac25957d5928390c616f629492344', 1, 'f', 'test1@gmail.com', '012345678', '2016-08-16 00:00:00', '2016-08-16 11:23:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawals`
--

CREATE TABLE `withdrawals` (
  `draw_id` int(3) NOT NULL,
  `money` int(6) NOT NULL,
  `draw_date` datetime NOT NULL,
  `customer_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `withdrawals`
--

INSERT INTO `withdrawals` (`draw_id`, `money`, `draw_date`, `customer_id`) VALUES
(1, 20, '2016-08-29 00:00:00', 535),
(2, 20, '2016-08-28 00:00:00', 535),
(3, 10, '2016-08-27 00:00:00', 535),
(4, 10, '2016-08-29 00:00:00', 536);

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
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`draw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costomers`
--
ALTER TABLE `costomers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=542;
--
-- AUTO_INCREMENT for table `fours`
--
ALTER TABLE `fours`
  MODIFY `fours_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `monies`
--
ALTER TABLE `monies`
  MODIFY `money_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ones`
--
ALTER TABLE `ones`
  MODIFY `one_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `pur_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `threes`
--
ALTER TABLE `threes`
  MODIFY `three_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `twos`
--
ALTER TABLE `twos`
  MODIFY `two_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `draw_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
