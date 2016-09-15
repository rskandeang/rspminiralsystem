-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2016 at 11:38 AM
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
  `phone` varchar(30) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `first` enum('T','F') NOT NULL,
  `code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `ones`
--

CREATE TABLE `ones` (
  `one_id` int(3) NOT NULL,
  `code` varchar(225) NOT NULL,
  `costomer_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `pur_id` int(3) NOT NULL,
  `amounts` int(10) NOT NULL,
  `pur_date` varchar(225) NOT NULL,
  `price` int(10) NOT NULL,
  `customer_id` int(3) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `gender` tinytext NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fours`
--
ALTER TABLE `fours`
  MODIFY `fours_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `lock_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ones`
--
ALTER TABLE `ones`
  MODIFY `one_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `pur_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `threes`
--
ALTER TABLE `threes`
  MODIFY `three_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `twos`
--
ALTER TABLE `twos`
  MODIFY `two_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
