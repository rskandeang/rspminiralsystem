-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2016 at 12:04 PM
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
  `code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `costomers`
--

INSERT INTO `costomers` (`id`, `name`, `dob`, `gender`, `phone`, `email`, `status`, `code`) VALUES
(192, 'test', '2016-08-19 07:04:00', 'm', 2342342, 'test@gmail.com', 'T', '2016'),
(243, 'b', '2016-08-19 11:05:00', '', 2342342, '', 'T', '2016'),
(244, 'c', '2016-08-19 11:05:00', '', 2342342, '', 'T', 'st20160819112149'),
(245, 'bb', '2016-08-19 11:05:00', '', 2342342, '', 'T', 'st20160819112149'),
(246, 'bbb', '2016-08-19 11:05:00', '', 2342342, '', 'T', 'st20160819112149'),
(247, 'bbb', '2016-08-19 11:05:00', '', 2342342, '', 'T', 'nd20160819112536'),
(248, 'bbb', '2016-08-19 11:05:00', '', 2342342, '', 'T', 'rd20160819112610'),
(249, 'bbb', '2016-08-19 11:05:00', '', 2342342, '', 'T', 'rd20160819112610'),
(250, 'd', '2016-08-19 11:05:00', '', 2342342, '', 'T', 'rd20160819112825'),
(251, 'd57', '2016-08-19 11:05:00', '', 2342342, '', 'T', 'rd20160819112857'),
(252, 'd57', '2016-08-19 11:05:00', '', 2342342, '', 'T', 'rd20160819112857');

-- --------------------------------------------------------

--
-- Table structure for table `fours`
--

CREATE TABLE `fours` (
  `fours_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fours`
--

INSERT INTO `fours` (`fours_id`, `code`) VALUES
(17, 'rd20160819112610'),
(18, 'rd20160819112626'),
(19, 'rd20160819112825'),
(20, 'rd20160819112857'),
(21, '20160819113302'),
(22, 'rd20160819113346');

-- --------------------------------------------------------

--
-- Table structure for table `ones`
--

CREATE TABLE `ones` (
  `one_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ones`
--

INSERT INTO `ones` (`one_id`, `code`) VALUES
(152, '2016'),
(161, '20160819112149'),
(163, '20160819112536'),
(164, '20160819112610'),
(165, '20160819112825'),
(166, '20160819112857'),
(167, '20160819112857');

-- --------------------------------------------------------

--
-- Table structure for table `threes`
--

CREATE TABLE `threes` (
  `three_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `threes`
--

INSERT INTO `threes` (`three_id`, `code`) VALUES
(42, 'nd20160819112213'),
(44, 'nd20160819112536'),
(45, 'nd20160819112610'),
(46, 'nd20160819112825'),
(47, 'nd20160819112857'),
(48, 'nd20160819113302'),
(49, 'nd20160819113346');

-- --------------------------------------------------------

--
-- Table structure for table `twos`
--

CREATE TABLE `twos` (
  `two_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `twos`
--

INSERT INTO `twos` (`two_id`, `code`) VALUES
(67, 'st20160819112149'),
(68, 'st20160819112213'),
(70, 'st20160819112536'),
(71, 'st20160819112610'),
(72, 'st20160819112825'),
(73, 'st20160819112857'),
(74, 'st20160819113302'),
(75, 'st20160819113346');

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
-- Indexes for table `ones`
--
ALTER TABLE `ones`
  ADD PRIMARY KEY (`one_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costomers`
--
ALTER TABLE `costomers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;
--
-- AUTO_INCREMENT for table `fours`
--
ALTER TABLE `fours`
  MODIFY `fours_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `ones`
--
ALTER TABLE `ones`
  MODIFY `one_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;
--
-- AUTO_INCREMENT for table `threes`
--
ALTER TABLE `threes`
  MODIFY `three_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `twos`
--
ALTER TABLE `twos`
  MODIFY `two_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
