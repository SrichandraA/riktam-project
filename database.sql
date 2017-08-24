-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 02:12 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riktam`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `name` text NOT NULL,
  `section` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`name`, `section`, `email`, `phone`) VALUES
('riktam', 'A', 'riktam@gmail.com', '1253676212'),
('chand', 'C', 'dsd@ds', '9191979197'),
('ffg', 'A', 'cooper@gmail.com', '7888888886'),
('amaravati', 'A', 'chandra.urfrnd@gmail.com', '8121565915'),
('mnm', 'b', 'kjnk@hjm.com', '1000000001'),
('hello', 'A', 'chandra.urfr@gmail.com', '8989898989'),
('vbn', 'B', 'wee@dd.com', '9090909888'),
('kssdl', 'A', 'cooper@gmail.com', '7777778888'),
('fff', 'C', 'chandra.urfrnd@gmail.com', '9191919190');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
