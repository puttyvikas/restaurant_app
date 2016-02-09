-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2016 at 02:35 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE IF NOT EXISTS `breakfast` (
  `id_breakfast` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`id_breakfast`, `item_name`, `price`, `status`) VALUES
(1, 'Idly', 20, 1),
(2, 'Dosa', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE IF NOT EXISTS `dinner` (
  `id_dinner` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`id_dinner`, `item_name`, `price`, `status`) VALUES
(1, 'Chicken', 120, 1),
(2, 'Mutton', 135, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id_item` int(11) NOT NULL,
  `id_restaurant` int(11) NOT NULL,
  `item_name` varchar(60) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_item`, `id_restaurant`, `item_name`, `price`) VALUES
(1, 1, 'Idly', 20),
(2, 1, 'Dosa', 25),
(3, 2, 'Chicken', 120),
(4, 3, 'Mutton', 250);

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE IF NOT EXISTS `lunch` (
  `id_lunch` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`id_lunch`, `item_name`, `price`, `status`) VALUES
(1, 'Chicken Biriyani', 140, 1),
(2, 'Mutton Biriyani', 160, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `title`, `status`) VALUES
(1, 'Break fast Menu ', 1),
(2, 'Lunch Menu', 1),
(3, 'Dinner Menu ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id_photo` int(11) NOT NULL,
  `id_restaurant` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id_photo`, `id_restaurant`, `title`, `description`, `status`) VALUES
(1, 1, 'res1.jpg', 'description goes here', 1),
(2, 2, 'res2.jpg', 'decsripition', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE IF NOT EXISTS `restaurants` (
  `id_restaurant` int(11) NOT NULL,
  `restaurant_name` varchar(100) NOT NULL,
  `location` varchar(60) NOT NULL,
  `area` varchar(60) NOT NULL,
  `rating` float NOT NULL,
  `profile_pic` varchar(60) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id_restaurant`, `restaurant_name`, `location`, `area`, `rating`, `profile_pic`, `status`) VALUES
(1, 'ABs - Absolute Barbecues', 'Hyderabad', 'Jubilee Hills', 10, 'res1.jpg', 1),
(2, 'Feast - Sheraton Hyderabad Hotel', 'Hyderabad', 'Gachibowli', 9.3, 'res2.jpg', 1),
(3, 'Barbeque Nation', 'Kolkata', 'Salt Lake', 7, 'res3.jpg', 1),
(4, 'Seasonal Tastes - The Westin', 'Hyderabad', 'Hitech City', 5, 'res4.jpg', 1),
(5, 'Exotica', 'Hyderabad', 'Banjara Hills', 6.8, 'res5.jpg', 1),
(6, 'Little Italy', 'Hyderabad', 'Hitech City', 8.1, 'res5.jpg', 1),
(7, 'Hanglaatherium', 'Kolkata', 'Prince Anwar Shah Road', 4, 'res7.jpg', 1),
(8, 'Kebab Gali', 'Delhi', 'Malviya Nagar', 9, 'res8.jpg', 1),
(9, 'Res1', 'Hyderabad', 'Lingampally', 6, 'res8.jpg', 1),
(10, 'Res2', 'Hyderabad', 'Kothaguda', 7.2, 'res9.jpg', 1),
(11, 'Res3', 'Hyderabad', 'JNTU', 5.5, 'res10.jpg', 1),
(12, 'Res4', 'Hyderabad', 'Nampally', 8.5, 'res1.jpg', 1),
(13, 'Res5', 'Hyderabad', 'Kukatpally', 9.8, 'res2.jpg', 1),
(14, 'Res11', 'Kolkata', 'area11', 3, 'res3.jpg', 1),
(15, 'Res2', 'Kolkata', 'ares12', 5.7, 'res4.jpg', 1),
(16, 'Res13', 'Kolkata', 'area13', 6.9, 'res5.jpg', 1),
(17, 'Res14', 'Kolkata', 'ares14', 9.5, 'res6.jpg', 1),
(18, 'Res14', 'Kolkata', 'area14', 8.9, 'res7.jpg', 1),
(19, 'Res15', 'Kolkata', 'ares15', 7.2, 'res8.jpg', 1),
(20, 'Res16', 'Kolkata', 'area16', 7.7, 'res9.jpg', 1),
(21, 'Res17', 'Kolkata', 'ares17', 8.4, 'res10.jpg', 1),
(22, 'Res18', 'Kolkata', 'area18', 9.1, 'res7.jpg', 1),
(23, 'Res19', 'Kolkata', 'ares19', 7.8, 'res1.jpg', 1),
(24, 'Res21', 'Delhi', 'area21', 7.1, 'res7.jpg', 1),
(25, 'Res22', 'Delhi', 'ares12', 6.8, 'res5.jpg', 1),
(26, 'Res23', 'Delhi', 'area23', 5.1, 'res2.jpg', 1),
(27, 'Res24', 'Delhi', 'ares14', 4.8, 'res5.jpg', 1),
(28, 'Res25', 'Delhi', 'area25', 8.1, 'res6.jpg', 1),
(29, 'Res26', 'Delhi', 'ares26', 7.8, 'res2.jpg', 1),
(30, 'Res31', 'Mumbai', 'area31', 7.8, 'res1.jpg', 1),
(31, 'Res32', 'Mumbai', 'area32', 8.7, 'res9.jpg', 1),
(32, 'Res33', 'Mumbai', 'area33', 7.4, 'res10.jpg', 1),
(33, 'Res34', 'Mumbai', 'area34', 5.7, 'res2.jpg', 1),
(34, 'ResD', 'Delhi', 'areaD', 7.2, 'res2.jpg', 1),
(35, 'ResD', 'Delhi', 'areaD', 5.9, 'res2.jpg', 1),
(36, 'ResD', 'Delhi', 'areaD', 4.2, 'res2.jpg', 1),
(37, 'ResM', 'Mumbai', 'areaM', 4.2, 'res2.jpg', 1),
(38, 'ResM', 'Mumbai', 'areaM', 5.2, 'res2.jpg', 1),
(39, 'ResM', 'Mumbai', 'areaM', 7.9, 'res2.jpg', 1),
(40, 'ResM', 'Mumbai', 'areaM', 9.2, 'res2.jpg', 1),
(41, 'ResM', 'Mumbai', 'areaM', 6.8, 'res2.jpg', 1),
(42, 'ResM`', 'Mumbai', 'areaM', 9.2, 'res2.jpg', 1),
(47, 'Test res', 'Hyderabad', 'areaaa', 9.1, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id_review` int(11) NOT NULL,
  `id_restaurant` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id_review`, `id_restaurant`, `comment`, `date_created`) VALUES
(1, 1, 'Restaurant is very clean, here chicken biriyani is too tasty.', '2016-02-08 07:58:44'),
(2, 2, 'Restaurant is not clean, but chicken biriyani is too tasty.', '2016-02-08 07:58:44'),
(3, 1, 'bad serving', '2016-02-08 07:58:44'),
(4, 5, 'Restaurant is not clean, but food is ok.', '2016-02-08 07:58:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`id_breakfast`);

--
-- Indexes for table `dinner`
--
ALTER TABLE `dinner`
  ADD PRIMARY KEY (`id_dinner`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`id_lunch`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id_restaurant`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breakfast`
--
ALTER TABLE `breakfast`
  MODIFY `id_breakfast` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dinner`
--
ALTER TABLE `dinner`
  MODIFY `id_dinner` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lunch`
--
ALTER TABLE `lunch`
  MODIFY `id_lunch` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id_photo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id_restaurant` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
