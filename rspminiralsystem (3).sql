-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2016 at 11:54 AM
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
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(225) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `first` enum('T','F') NOT NULL,
  `code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `costomers`
--

INSERT INTO `costomers` (`id`, `firstname`, `lastname`, `username`, `password`, `dob`, `gender`, `phone`, `email`, `status`, `first`, `code`) VALUES
(535, 'coca', 'cola', 'cocacola', '', '2016-08-25', 'Male', '01234567', 'cocacola@gmail.com', 1, 'T', '01256621'),
(536, 'fanta', 'fantara', 'fa', '', '2016-08-25', 'Female', '01244587', 'fanta@gmail.com', 1, '', '20160825041257'),
(540, 'Moha', 'la', 'b12', '', '2016-01-01', 'Male', '1234567', 'b12@gmail.com', 1, '', '20160825041257'),
(545, 'Moha', 'thea', 'binbopha', '21254', '2016-09-02', 'Male', '0123456789', 'binbopha@gmail.com', 1, 'T', '0000000000011111111111'),
(573, 'Moha', 'la', 'MOHALA', '12414156', '2016-09-05', 'Female', '0123456789', 'binbopha@gmail.com', 1, 'T', 'sdfasf4654d65fs'),
(574, '', '', '', '', '2016-09-06', 'Male', '', '', 1, '', ''),
(575, '', '', '', '', '2016-09-06', 'Male', '', '', 1, '', ''),
(576, '', '', '', '', '2016-09-06', 'Male', '', '', 1, '', ''),
(577, 'Moha', 'bin', 'sokunthea', '0123456', '2016-09-06', 'Male', '0123456789', 'mohabin@gmail.com', 1, 'T', '01222254');

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
(94, '20160825094753', 541),
(95, '20160905065923', 546),
(96, '20160905070111', 547),
(97, '20160905070353', 548),
(98, '20160905070618', 549),
(99, '20160905070622', 550),
(100, '20160905070624', 551),
(101, '20160905070739', 552),
(102, '20160905070802', 553),
(103, '20160905070845', 554),
(104, '20160905070848', 555),
(105, '20160905070920', 556),
(106, '20160905070926', 557),
(107, '20160905071007', 558),
(108, '20160905071144', 559),
(109, '20160905081119', 560),
(110, '20160905081322', 561),
(111, '20160905081408', 562),
(112, '20160905081515', 563),
(113, '20160905082928', 564),
(114, '20160905083015', 565),
(115, '20160905083425', 566),
(116, '20160905083625', 567),
(117, '20160905083824', 568),
(118, '20160905105148', 569),
(119, '20160905111341', 570),
(120, '20160905111656', 571),
(121, '20160905112043', 572),
(122, '20160905112335', 573),
(123, '20160905112534', 574),
(124, '20160905112605', 575),
(125, '20160905112630', 576),
(126, '20160905112735', 577),
(127, '20160905112815', 578),
(128, '20160905112819', 579),
(129, '20160905112826', 580),
(130, '20160905112910', 581),
(131, '20160905112937', 582),
(132, '20160905113021', 583),
(133, '20160905113031', 584),
(134, '20160905113249', 585),
(135, '20160905113321', 586),
(136, '20160906113139', 574),
(137, '20160906113146', 575),
(138, '20160906113155', 576),
(139, '20160906113922', 577);

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
(243, 'st20160825043010', '20160825041257', 540),
(244, 'st20160902052441', '0122012', 542),
(245, 'st20160902052606', '0122012', 543),
(246, 'st20160902052633', '022145', 544),
(247, 'st20160902052753', '0000000000011111111111', 545),
(248, 'st20160905112534', '', 574),
(249, 'st20160905112605', '', 575),
(250, 'st20160905112735', '', 577),
(251, 'st20160905112815', '', 578),
(252, 'st20160905112819', '', 579),
(253, 'st20160905112826', '', 580),
(254, 'st20160905112910', '', 581),
(255, 'st20160905112937', '13232132', 582),
(256, 'st20160905113021', '13232132', 583),
(257, 'st20160905113031', '13232132', 584),
(258, 'st20160906113139', '', 574),
(259, 'st20160906113146', '', 575),
(260, 'st20160906113155', '', 576);

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
  `gender` enum('Male','Female') NOT NULL,
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
(17, 'my', 'computer', 'computer', '44a4b77a307bcc5a75fe06d31aa400aad2f46460', 'Male', 'mycompter@gmail.com', '0123456789', '2016-08-17 04:33:40', '2016-09-06 03:40:36', 0, '_79478411_468364257.jpg'),
(18, 'barang', 'barang', 'barangses', '89c83fe2130ac25957d5928390c616f629492344', 'Male', 'barangbarang123@gamail.com', '0123456789', '2016-08-17 04:46:10', '2016-09-06 03:40:41', 0, 'ice_screenshot_20160812-081707.png'),
(19, 'youtube', 'channel', 'youtube', '89c83fe2130ac25957d5928390c616f629492344', 'Female', 'youtubechannel@gmail.com', '0123456789', '2016-08-17 06:22:57', '2016-09-06 05:46:38', 0, 'ice_screenshot_20160812-084159.png'),
(20, 'admin', 'admin', 'admin', '89c83fe2130ac25957d5928390c616f629492344', 'Female', 'admin@gmail.com', '0123456789', '2016-08-17 08:59:18', '2016-09-06 03:40:53', 1, 'ice_screenshot_20160812-084952.png'),
(21, 'mak', 'pa', 'makpa', '89c83fe2130ac25957d5928390c616f629492344', 'Female', 'makpa@gmail.com', '0123456789', '2016-08-17 10:42:40', '2016-09-06 03:41:02', 1, 'ice_screenshot_20160824-090209.png'),
(22, 'bong', 'thom', 'bongthom', '32843b0a545bbe751baf350e4f84f61cd2a458bf', '', 'bongthom@gmail.ocm', '012345678', '2016-08-17 10:59:42', '2016-08-24 08:23:12', 1, 'background2.png'),
(23, 'bay', 'kork', 'baykork', '32843b0a545bbe751baf350e4f84f61cd2a458bf', '', 'sohour@gmail.com', '0123456789', '2016-08-18 07:24:20', '2016-08-24 08:23:11', 1, '001 (www.cute-pictures.blogspot.com).jpg'),
(24, 'banan', 'kork', 'baybana', '93e0a617f43688bec06da73552e9973a28671c1f', '', 'sohour@gmail.com', '0123456789', '2016-08-18 09:04:03', '2016-08-24 08:23:10', 1, '_79478411_468364257.jpg'),
(26, 'admin', 'admin', 'sohourtheung', '0b545fb865156a3feaebf10c869a73e327cb797a', '', 'admin@gmail.com', '0968100045', '2016-08-19 08:50:10', '2016-08-25 08:07:30', 1, 'maxresdefault.jpg'),
(27, 'bros', 'pov', 'brospov', '5b385051ca4456edec805ff4f5129a9c40353b4b', '', 'brospov@gmail.com', '0123456789', '2016-08-23 05:55:35', '2016-08-24 08:23:08', 1, '13151961_560674954102258_35755804117896315_n.jpg'),
(28, 'osama', 'binladen', 'osama', '5b385051ca4456edec805ff4f5129a9c40353b4b', 'Male', 'osama@gmail.com', '0123456789', '2016-08-23 05:56:23', '2016-09-06 03:40:29', 0, '44a94eab9ec7eea5d689014d8ea8804d-content_half.jpg'),
(29, 'kro', 'das', 'krodas', '89c83fe2130ac25957d5928390c616f629492344', '', 'krodas@gmail.com', '0125455214', '2016-08-24 05:59:14', '2016-08-24 08:22:46', 0, 'background.png'),
(30, 'search', 'ortban', 'searchortban', '460cf725e54272a638cce2f59deb5b6bb48c9ca5', '', 'search@gmail.com', '012342215', '2016-08-24 08:34:48', '2016-08-24 08:34:48', 1, 'maxresdefault.jpg'),
(31, 'banan', 'nhem', 'banan', 'afc975138fcda355b05e9b71beb29492aef01e6e', 'Male', 'banan@gmail.com', '01222546', '2016-09-06 03:38:19', '2016-09-06 05:57:03', 0, 'profile.png');

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
(4, 10, '2016-08-29 00:00:00', 536),
(5, 20, '2016-09-06 04:27:12', 535);

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=578;
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
  MODIFY `one_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
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
  MODIFY `two_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `withdrawals`
--
ALTER TABLE `withdrawals`
  MODIFY `draw_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
