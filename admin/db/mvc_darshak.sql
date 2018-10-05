-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2018 at 10:18 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_darshak`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`, `description`, `created_date`, `created_time`) VALUES
(1, 'Home Applincess', 'good', '16/08/18', '15:01:32 pm'),
(2, 'Electronics Items', 'good electronics items', '16/08/18', '15:01:42 pm'),
(3, 'Mens & Womens Clothes', 'good clothes Hosery', '16/08/18', '15:01:52 pm'),
(4, 'Footwear', 'good', '16/08/18', '15:02:05 pm'),
(5, 'medicines', 'good', '16/08/18', '15:02:22 pm'),
(6, 'Jwellery', 'good', '16/08/18', '15:02:33 pm'),
(7, 'Opticals', 'good', '16/08/18', '15:02:42 pm'),
(8, 'Imitations Jwellery', 'good', '16/08/18', '15:03:02 pm');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `colid` int(11) NOT NULL,
  `colname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`cid`, `cname`) VALUES
(1, 'India'),
(2, 'Usa'),
(3, 'China'),
(4, 'Autralia');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `subcatid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pimage1` varchar(255) NOT NULL,
  `pimage2` varchar(255) NOT NULL,
  `price` bigint(20) NOT NULL,
  `qty` int(11) NOT NULL,
  `colid` int(11) NOT NULL,
  `sizeid` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `oid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `ordercode` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `cid` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `ctid` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `ord_date` varchar(255) NOT NULL,
  `ord_time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `rid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`rid`, `email`, `password`, `photo`, `mobile`, `cid`) VALUES
(1, 'd@gmail.com', '123', 'upload/bg1.jpg', 9454554, 1),
(2, 'keval@gmail.com', '123', 'upload/logo12.png', 9512215918, 1),
(3, 'brijesh@gmail.com', '123', 'upload/logo12.png', 9512215918, 1),
(4, 'l@gmail.com', '123', 'upload/logo12.png', 9173357217, 1),
(5, 'm@gmail.com', '123', 'upload/logo12.png', 9173357217, 1),
(6, 'virali@gmail.com', '123456', 'upload/color-chart-web.png', 9558813149, 1),
(7, 'virali@gmail.com', '123', 'upload/color-chart-web.png', 7623038598, 1);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `sizeid` int(11) NOT NULL,
  `sizename` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcatid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `subcatname` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_date` varchar(255) NOT NULL,
  `created_time` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcatid`, `catid`, `subcatname`, `description`, `created_date`, `created_time`) VALUES
(1, 1, 'Refrigerator', 'good', '17/08/18', '14:31:25 pm'),
(2, 1, 'Washing Machine', 'good', '17/08/18', '14:32:02 pm'),
(3, 1, 'Led Tv', 'good', '17/08/18', '14:32:31 pm'),
(4, 1, 'Split Ac', 'good', '17/08/18', '14:33:12 pm'),
(5, 2, 'Mobiles', 'good', '17/08/18', '14:33:25 pm'),
(6, 2, 'Tablet', 'good', '17/08/18', '14:33:39 pm'),
(7, 2, 'smart watch', 'good', '17/08/18', '14:33:50 pm'),
(8, 2, 'Google Glass', 'good', '17/08/18', '14:34:30 pm'),
(9, 3, 'Formal clothes', 'good', '17/08/18', '14:34:45 pm'),
(10, 3, 'Party wear clothes', 'good', '17/08/18', '14:35:03 pm'),
(11, 3, 'Womens Dresses', 'good', '17/08/18', '14:35:27 pm'),
(12, 3, 'Ethic wears', 'good', '17/08/18', '14:35:55 pm'),
(13, 4, 'Casual shoes', 'good', '17/08/18', '14:36:09 pm'),
(14, 4, 'sports shoes', 'good', '17/08/18', '14:36:21 pm'),
(15, 4, 'Sandals', 'good', '17/08/18', '14:36:40 pm'),
(16, 5, 'Cipla', 'good', '17/08/18', '14:37:14 pm'),
(17, 5, 'Cadila', 'good', '17/08/18', '14:37:37 pm'),
(18, 5, 'Mankind', 'good', '17/08/18', '14:37:51 pm'),
(19, 6, 'Malbar', 'good', '17/08/18', '14:38:08 pm'),
(20, 6, 'Tanishq', 'good', '17/08/18', '14:38:55 pm'),
(21, 7, 'Fastrack', 'good', '17/08/18', '14:39:15 pm'),
(22, 7, 'Titan', 'good', '17/08/18', '14:39:29 pm'),
(23, 7, 'Rayban', 'good', '17/08/18', '14:39:47 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `email`, `password`, `mobile`, `gender`, `hobby`, `cid`) VALUES
(1, 'keval', 'k@gmail.com', 'MTIz', 94154545454, 'male', 'reading,writing,palying', 0),
(2, 'sandip', 'sandip@gmail.com', 'MTIz', 9173357217, 'male', 'reading', 0),
(3, 'ooooo', 'o@gmail.com', 'MTIz', 94754545454, 'male', 'reading,writing,palying', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`colid`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `colid` (`colid`),
  ADD KEY `sizeid` (`sizeid`),
  ADD KEY `catid` (`catid`),
  ADD KEY `subcatid` (`subcatid`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `uid` (`uid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `ctid` (`ctid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`sizeid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcatid`),
  ADD KEY `catid` (`catid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `colid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `size`
--
ALTER TABLE `size`
  MODIFY `sizeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
