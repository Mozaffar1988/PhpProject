-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2014 at 12:38 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_emf`
--

-- --------------------------------------------------------

--
-- Table structure for table `letter`
--

CREATE TABLE IF NOT EXISTS `letter` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `user_id` int(60) NOT NULL,
  `section_id` int(60) NOT NULL,
  `upload_date` varchar(40) NOT NULL,
  `issue_no` int(50) NOT NULL,
  `subject` int(200) NOT NULL,
  `file_name` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `letter`
--


-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `user_id` int(60) NOT NULL,
  `section_id` int(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `permission`
--


-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE IF NOT EXISTS `section` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `section_code` varchar(4) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `section_code`, `section_name`) VALUES
(16, '143', 'hello'),
(7, 'who', 'me'),
(15, '062', 'hack'),
(14, 'o12', 'wwf'),
(13, 'o12', 'hello'),
(17, '676', 'erft');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` varchar(20) NOT NULL,
  `section_id` varchar(40) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_role`, `section_id`, `user_name`, `password`) VALUES
(17, 'Admin', 'Database', 'test', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'User', 'Database', 'hello', '202cb962ac59075b964b07152d234b70'),
(20, 'Admin', 'wwf', 'tam', '81dc9bdb52d04dc20036dbd8313ed055'),
(21, 'Admin', 'me', 'ewq', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
