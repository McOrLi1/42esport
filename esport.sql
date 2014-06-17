-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2014 at 02:15 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `esport`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `id_forum` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `id_forum`, `created`) VALUES
(1, 'General', 3, '2014-06-10 07:15:00'),
(2, 'Equipes', 3, '2014-06-16 04:09:00'),
(3, 'General', 2, '2014-06-09 00:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `name`, `created`) VALUES
(1, 'LOL', '1212-12-12 12:12:12'),
(2, 'WOW', '2014-06-16 00:00:00'),
(3, 'CS', '2014-06-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_thread` int(11) DEFAULT NULL,
  `id_author` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `name`, `id_category`, `created`) VALUES
(1, 'Equipe Bubulle au taquet', 1, '2014-06-09 05:00:00'),
(2, 'Equipe Louloute bug', 1, '2014-06-16 00:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `lastname` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `type` varchar(10) DEFAULT 'user',
  `birthdate` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_profile` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `lastname`, `email`, `type`, `birthdate`, `status`, `created_profile`) VALUES
(1, 'Supertoto', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'Admin', '1990-12-12', 'Normal', NULL),
(2, 'Supertata', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'En attente', NULL),
(3, 'Supertiti', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'Admin', '1990-12-12', 'Normal', NULL),
(4, 'Supertutu', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'Banni', NULL),
(5, 'Supertete', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'Suspendu', NULL),
(6, 'Minitoto', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'Normal', NULL),
(7, 'Minitata', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'Normal', NULL),
(8, 'Minititi', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'Suspendu', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
