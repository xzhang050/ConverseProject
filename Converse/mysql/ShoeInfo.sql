-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2019 at 03:27 PM
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
