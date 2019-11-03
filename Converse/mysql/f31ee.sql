-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2019 at 11:08 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f31ee`
--

-- --------------------------------------------------------

--
-- Table structure for table `Customers`
--

CREATE TABLE IF NOT EXISTS `Customers` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `CustomerName` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Addr` text NOT NULL,
  `Delivery` varchar(20) NOT NULL,
  `CardNum` varchar(20) NOT NULL,
  `TotalPrice` float NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `Customers`
--

INSERT INTO `Customers` (`CustomerID`, `CustomerName`, `Email`, `Phone`, `Addr`, `Delivery`, `CardNum`, `TotalPrice`) VALUES
(31, 'ZHANG XINCAI', 'zhangzoe612@gmail.com', '12345678', '21 Lien Ying Chow Dr, Singapore', 'standard', '111111111111', 139.8),
(32, 'ZHANG XINCAI', 'zhangzoe612@gmail.com', '13290110016', '21 Lien Ying Chow Dr, Singapore', 'express', '33333333333333', 69.9),
(33, 'ZHANG XINCAI', 'zhangzoe612@gmail.com', '13290110016', '21 Lien Ying Chow Dr, Singapore', 'express', '4444444444444', 69.9),
(34, 'ZHANG XINCAI', 'zhangzoe612@gmail.com', '13290110016', '21 Lien Ying Chow Dr, Singapore', 'express', '4444444444444', 0),
(35, 'ZHANG XINCAI', 'zhangzoe612@gmail.com', '13290110016', '21 Lien Ying Chow Dr, Singapore', 'express', '1111111111111111', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Inventory`
--

CREATE TABLE IF NOT EXISTS `Inventory` (
  `ProductID` int(11) NOT NULL,
  `Qty(35)` int(11) NOT NULL,
  `Qty(36)` int(11) NOT NULL,
  `Qty(37)` int(11) NOT NULL,
  `Qty(38)` int(11) NOT NULL,
  `Qty(39)` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Inventory`
--

INSERT INTO `Inventory` (`ProductID`, `Qty(35)`, `Qty(36)`, `Qty(37)`, `Qty(38)`, `Qty(39)`) VALUES
(1, 10, 6, 5, 7, 10),
(2, 10, 11, 12, 8, 7),
(3, 10, 10, 10, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `Orders`
--

CREATE TABLE IF NOT EXISTS `Orders` (
  `OrderID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(20) NOT NULL,
  `Size` int(11) NOT NULL,
  `Price` float NOT NULL,
  `CustomerID` int(11) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `Orders`
--

INSERT INTO `Orders` (`OrderID`, `ProductID`, `ProductName`, `Size`, `Price`, `CustomerID`) VALUES
(1, 2, 'CHUCK TAYLOR ALL STA', 35, 0, 30),
(2, 2, 'CHUCK TAYLOR ALL STA', 35, 69.9, 31),
(3, 2, 'CHUCK TAYLOR ALL STA', 35, 69.9, 31),
(4, 2, 'CHUCK TAYLOR ALL STA', 35, 69.9, 32),
(5, 2, 'CHUCK TAYLOR ALL STA', 35, 69.9, 33);

-- --------------------------------------------------------

--
-- Table structure for table `ShoeInfo`
--

CREATE TABLE IF NOT EXISTS `ShoeInfo` (
  `ProductID` int(11) NOT NULL,
  `ProductName` varchar(40) NOT NULL,
  `Price` float unsigned NOT NULL,
  `ImgAddr` varchar(40) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ShoeInfo`
--

INSERT INTO `ShoeInfo` (`ProductID`, `ProductName`, `Price`, `ImgAddr`, `Description`) VALUES
(1, 'CHUCK TAYLOR ALL STAR ''70 HIGH TOP', 119.9, './img/firstshoe', 'The Converse All Star Chuck ''70 is our re-crafted sneaker that uses modern details to celebrate the original Chuck Taylor All Star from the 1970''s.'),
(2, 'CHUCK TAYLOR ALL STAR DAINTY LOW TOP', 69.9, './img/secondshoe', 'The dainty is a more-feminine take on the iconic sneaker. Constructed of lightweight but durable canvas, its super-low profile makes it perfect for who wants to stay light on her feet.'),
(3, 'CHUCK TAYLOR ALL STAR RAINBOW PLATFORM L', 109.9, './img/thirdshoe', ' Platform Chucks with color-popped stitching and a vibrant midsole. Platform Chucks with color-popped stitching and a vibrant midsole. ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
