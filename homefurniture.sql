-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2018 at 03:03 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homefurniture`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccounts`
--

CREATE TABLE `adminaccounts` (
  `idNo` int(11) NOT NULL,
  `Aname` varchar(50) NOT NULL,
  `Aemail` varchar(50) NOT NULL,
  `Ausername` varchar(50) NOT NULL,
  `Apassword` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminaccounts`
--

INSERT INTO `adminaccounts` (`idNo`, `Aname`, `Aemail`, `Ausername`, `Apassword`) VALUES
(8, 'd', 'do@rwrqw', 'd', '8277e0910d750195b448797616e091ad'),
(14, 'Fernando abuda', 'do@rwrqw', 'do', 'd4579b2688d675235f402f6b4b43bcbf');

-- --------------------------------------------------------

--
-- Table structure for table `clientaccounts`
--

CREATE TABLE `clientaccounts` (
  `custID` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `custusername` varchar(50) NOT NULL,
  `custpassword` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientaccounts`
--

INSERT INTO `clientaccounts` (`custID`, `firstname`, `lastname`, `address`, `email`, `custusername`, `custpassword`) VALUES
(7, 'Fernando', 'Abuda', 'Sasa Davao City', 'abudafernando19@gmail.com', 'do', 'd4579b2688d675235f402f6b4b43bcbf');

-- --------------------------------------------------------

--
-- Table structure for table `clientitem`
--

CREATE TABLE `clientitem` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `item_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientitem`
--

INSERT INTO `clientitem` (`id`, `pid`, `cid`, `item_desc`, `item_price`, `qty`, `item_img`) VALUES
(8, 21, 6, 'Sample Product 1', 12500, 1, '15085498_10211855548530440_1903822684901162020_n.jpg'),
(7, 18, 6, 'Dining Table', 9999, 2, '15109497_10211855535090104_4207247954779519198_n.jpg'),
(9, 19, 6, 'bre', 16000, 1, '15170998_10211855544130330_935917275902526968_n.jpg'),
(10, 19, 7, 'bre', 16000, 2, '15170998_10211855544130330_935917275902526968_n.jpg'),
(11, 18, 7, 'Dining Table', 9999, 2, '15109497_10211855535090104_4207247954779519198_n.jpg'),
(12, 21, 7, 'Sample Product 1', 12500, 1, '15085498_10211855548530440_1903822684901162020_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `Comments` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `description` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `pname`, `price`, `description`, `img`) VALUES
(19, 'bre', '16000', 'rqwewqwqeqwe', '15170998_10211855544130330_935917275902526968_n.jpg'),
(21, 'Sample Product 1', '12500', 'this product is made of wooden', '15085498_10211855548530440_1903822684901162020_n.jpg'),
(18, 'Dining Table', '9999', 'This is a dining table', '15109497_10211855535090104_4207247954779519198_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `rateID` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `custID` int(11) NOT NULL,
  `Rate` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccounts`
--
ALTER TABLE `adminaccounts`
  ADD PRIMARY KEY (`idNo`);

--
-- Indexes for table `clientaccounts`
--
ALTER TABLE `clientaccounts`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `clientitem`
--
ALTER TABLE `clientitem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`rateID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaccounts`
--
ALTER TABLE `adminaccounts`
  MODIFY `idNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `clientaccounts`
--
ALTER TABLE `clientaccounts`
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `clientitem`
--
ALTER TABLE `clientitem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `rateID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
