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
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `name` varchar(20) NOT NULL,
  `date` varchar(18) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `doctor` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`name`, `date`, `dept`, `doctor`) VALUES
('kannan', '1/jan/2016', '-1', '-1'),
('kannan', '3/feb/2017', 'orthopedics', 'kishore'),
('kannan', '1/jan/2016', '-1', '-1'),
('kannan', '1/jan/2016', 'cardiology', 'siddharth'),
('kannan', '1/jan/2016', '-1', '-1'),
('kannan', '1/jan/2016', '-1', '-1'),
('kannan', '5/may/2017', 'cancer', 'shalini'),
('kannan', '5/apr/2017', 'cancer', 'shalini'),
('kannan', '4/mar/2017', 'cancer', 'shalini'),
('koushik', '4/mar/2017', 'orthopedics', 'ambika'),
('kannan', '1/jan/2016', 'cardiology', 'siddharth'),
('kannan', '1/jan/2016', 'orthopedics', 'kannan');
