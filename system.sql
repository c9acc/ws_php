-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2014 at 10:18 AM
-- Server version: 5.5.25
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_manager` int(5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `second_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `purpose` text NOT NULL,
  `birth_date` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `post_index` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `id_manager`, `first_name`, `second_name`, `last_name`, `purpose`, `birth_date`, `address`, `post_index`) VALUES
(1, 5, 'Ovi', 'nafas', 'Aghaei', 'student kpi', '0000-00-00', 'ukraine', 232323),
(2, 2, 'Peyman', 'Agahei', 'aghghamish', 'Doctor general', '0000-00-00', 'IRAN', 121212),
(3, 6, 'Sergei', 'kruz', 'Segei', 'Senior Programist', '0000-00-00', 'kiev', 22212),
(4, 4, 'Alireza', 'Geraeili', 'ostad', 'teacher univercity', '0000-00-00', 'Gonbad', 797979),
(5, 3, 'Yakub', 'aghaei', 'aghaghamish', 'student kpi', '0000-00-00', 'kiev Ukraine', 3324),
(6, 7, 'yash', 'ghash', 'dash', 'student dentist', '0000-00-00', 'tajekstan', 7979),
(7, 15, 'nemat', 'allah', 'aghaei', 'doctor dentest', '0000-00-00', 'Iran', 122),
(8, 2, 'jallali', 'nadr', 'seleymani', 'enginear', '2014-01-16', 'mashhad', 22334);

-- --------------------------------------------------------

--
-- Table structure for table `link_client_email`
--

CREATE TABLE IF NOT EXISTS `link_client_email` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `link_client_phone`
--

CREATE TABLE IF NOT EXISTS `link_client_phone` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `phone` int(5) NOT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `role`) VALUES
(8, 'ovi', 'ovi', '111', 'economist'),
(9, 'nafas', 'ipad', 'aple', 'manager'),
(10, 'saed', 'dost', 'refigh', 'director'),
(11, 'shayan', 'bandr', 'abas', 'manager');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
