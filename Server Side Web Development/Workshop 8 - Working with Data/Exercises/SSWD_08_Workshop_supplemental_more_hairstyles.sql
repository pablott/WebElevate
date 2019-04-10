-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2013 at 10:38 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbhairstyles`
--
CREATE DATABASE IF NOT EXISTS `dbhairstyles` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbhairstyles`;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `gender` varchar(6) NOT NULL,
  `personId` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender`, `personId`) VALUES
('Male', 1),
('Female', 2),
('Male', 3),
('Male', 4),
('Male', 5),
('Female', 6),
('Male', 7),
('Female', 8),
('Male', 9),
('Male', 10);

-- --------------------------------------------------------

--
-- Table structure for table `hairstyle`
--

CREATE TABLE IF NOT EXISTS `hairstyle` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hairstyle`
--

INSERT INTO `hairstyle` (`id`, `name`) VALUES
(1, 'Invisible-afro'),
(2, 'Beehive'),
(3, 'Cornrows'),
(4, 'Dreadlocks'),
(5, 'Mohawk'),
(6, 'Bob'),
(7, 'Pony Tail'),
(8, 'Bouffant'),
(9, 'Bowl cut'),
(10, 'French Braid');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(3) NOT NULL,
  `name` varchar(25) NOT NULL,
  `styleId` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`id`, `name`, `styleId`) VALUES
(1, 'Daniel', 1),
(2, 'Amy Winehouse', 2),
(3, 'Andre 3000', 3),
(4, 'Bob Marley', 4),
(5, 'Congo Natty', 4),
(6, 'Brigitte Bardo', 8),
(7, 'Jah Wobble', 4),
(8, 'Warrior Queen', 4),
(9, ' Tewodros II', 3),
(10, 'Jim Carey', 9);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
