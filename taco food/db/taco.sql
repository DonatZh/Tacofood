-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2022 at 01:42 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taco`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `price`) VALUES
(1, 'Taco with Cheese', '9'),
(2, 'Taco with Fries', '8'),
(3, 'Loaded Fries', '4'),
(4, 'Loaded Nachos', '4'),
(5, 'Bell Rice Bowl	', '5'),
(6, 'Chickstar', '7'),
(7, 'Grilled Struft Burrito', '9'),
(8, 'Chicken Quesadilla', '8'),
(9, 'Taco Supreme', '7'),
(10, 'Taco', '5');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `idU` int(11) NOT NULL,
  `idPr` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Test` (`idPr`),
  KEY `test1` (`idU`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `address`, `phone`, `qty`, `idU`, `idPr`) VALUES
(1, 'Lidhja e Prizrenit', '48604888', '5', 6000, 2),
(2, 'Lidhja e Prizrenit', '48604888', '166', 6000, 1),
(3, 'arti', '048500600', '5', 8000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL,
  `des` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `des`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role` (`role`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `address`, `phone`, `email`, `password`, `role`) VALUES
(2000, 'Trim', 'Kusari', 'Lidhja e Prizrenit', '+383 48 604 888', 'trimkusari@gmail.com', '007758dfd9b16f25ed4f014042a10010', 1),
(3000, 'Jon', 'Kusari', 'Lidhja e Prizrenit', '+383 48 500 624', 'jon.kusari@artmotion.net', '007758dfd9b16f25ed4f014042a10010', 1),
(6000, 'Trim', 'Kusari', 'Lidhja e Prizrenit', '045800800', 'trimkusari@gmail.com', 'df97bc35d29b867d7f256cbff3f59fbc', 2),
(5000, 'Trim', 'Kusari', 'Lidhja e Prizrenit', '045500800', 'trim@gmail.com', '007758dfd9b16f25ed4f014042a10010', 2),
(2555, 'Trima', 'kusa', 'Lidhja e Prizrenit', '45800600', 'trima@gmail.com', '007758dfd9b16f25ed4f014042a10010', 1),
(9999, 'Jon', 'kusa', 'Lidhja e Prizrenit', '48604887', 'joni@gmail.com', '007758dfd9b16f25ed4f014042a10010', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
