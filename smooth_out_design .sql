-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2022 at 09:06 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smooth_out_design`
--

-- --------------------------------------------------------

--
-- Table structure for table `cusbuyproducts`
--

CREATE TABLE IF NOT EXISTS `cusbuyproducts` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phonenumber` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cusbuyproducts`
--

INSERT INTO `cusbuyproducts` (`name`, `email`, `phonenumber`, `address`, `date`) VALUES
('', '', '', '', '2022-01-23 12:19:09'),
('cus', 'cus@gmail.com', '1231231212', 'bnglr', '2022-01-23 12:28:22'),
('cus', 'cus@gmail.com', '1231231212', 'bnglr', '2022-01-23 13:43:25'),
('cus', 'cus@gmail.com', '1231231212', 'bnglr', '2022-01-23 13:49:42'),
('cus', 'cus@gmail.com', '1231231212', 'bnglr', '2022-01-23 14:14:52'),
('cus', 'cus@gmail.com', '1231231212', 'bnglr', '2022-01-24 00:30:46');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` int(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `email`, `password`, `phonenumber`, `address`) VALUES
('cus', 'cus@gmail.com', '123', 1231231122, 'bnglr');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE IF NOT EXISTS `designer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `abt` varchar(400) NOT NULL,
  `exp` varchar(400) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pro_image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`id`, `uname`, `email`, `password`, `phonenumber`, `abt`, `exp`, `address`, `pro_image`) VALUES
(1, 'des1', 'des1@gmail.com', 'dd', '1234567890', 'ntg', '1 yr', 'bnglr', 'Beautiful-Profile-Images-4.jpg'),
(2, 'aa', 'admin@gmail.com', 'a', '34325', 'as', '2', 'sda', 'des1.jpg'),
(3, 'd2', 'd2@gmail.com', '123', '1231231212', 'nn', '1', 'bnlrr', 'de3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productname` varchar(200) NOT NULL,
  `productdescription` varchar(200) NOT NULL,
  `productprice` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pro_image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `productdescription`, `productprice`, `email`, `pro_image`) VALUES
(1, 'first pro', 'first pro11', '20000', 'admin@gmail.com', 'img2.jpg'),
(2, 'scpr', 'stylish', '15000', 'd2@gmail.com', 'img9.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
