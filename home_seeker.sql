-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 03, 2018 at 04:35 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `home seeker`
--
CREATE DATABASE IF NOT EXISTS `home seeker` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `home seeker`;

-- --------------------------------------------------------

--
-- Table structure for table `property12`
--

CREATE TABLE IF NOT EXISTS `property12` (
  `FlatNumber` varchar(100) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `Locality` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Pincode` varchar(7) NOT NULL,
  `Source` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property12`
--

INSERT INTO `property12` (`FlatNumber`, `Street`, `Locality`, `City`, `State`, `Country`, `Pincode`, `Source`, `Status`, `Username`) VALUES
('qwerty', 'sdfghjk', 'lkjhgfdxcvbn', ';lkjhgf', 'cvhjkl', 'kjhgcg', 'jkjhg', 'Property/hello.jpg', 'Avalaible', 'avidipransh');

-- --------------------------------------------------------

--
-- Table structure for table `question123`
--

CREATE TABLE IF NOT EXISTS `question123` (
  `SNo` int(11) NOT NULL,
  `Question` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question123`
--

INSERT INTO `question123` (`SNo`, `Question`) VALUES
(1, 'Name Of Grandmother?'),
(2, 'Color Of First Car?'),
(3, 'First Mobile Number?');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE IF NOT EXISTS `registrations` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `PhoneNumber` varchar(100) NOT NULL,
  `PhoneNumber2` varchar(100) NOT NULL,
  ` Question` varchar(100) NOT NULL,
  `Answer` varchar(100) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`FirstName`, `LastName`, `Username`, `Email`, `Password`, `DOB`, `PhoneNumber`, `PhoneNumber2`, ` Question`, `Answer`) VALUES
('Avi', 'Dipransh', 'avidipransh', 'avidipransh@gmail.com', '22346', '1998-11-13', '8840196557', '9793898315', 'First Mobile Number?', '8604808994');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
