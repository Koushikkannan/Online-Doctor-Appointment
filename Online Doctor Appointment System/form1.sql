-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2017 at 05:02 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE IF NOT EXISTS `form1` (
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`name`, `username`, `password`, `phone`, `email`, `gender`, `comment`) VALUES
('deva', 'deva', 'df12!@#$%', '919790441055', 'kannan.dakm@gmail.com', 'male', ''),
('kannan', 'kannan', 'kannan', '+917200711397', 'kannan.dakm@gmail.com', 'male', ''),
('siva', 'siva', 'gg34@#$j', '8124851295', 'siva@gmail.com', 'male', ''),
('koushik', 'koushik', 'au9ic8e1', '+918124851295', 'kannan.dakm@gmail.com', 'male', ''),
('D Kannan', 'kannan', 'fg12!@#$', '918124851295', 'kannan.dakm@gmail.com', 'male', ''),
('D Kannan', 'kannan', 'A2@hjjhjk', '918124851295', 'kannan.dakm@gmail.com', 'male', ''),
('swaroop', 'swaroop', 'korbgy7s', '917200711397', 'siva@gmail.com', 'male', ''),
('kanna', 'kannan', 'hg@#234jj', '918124851295', 'kannan.dakm@gmail.com', 'male', '');
