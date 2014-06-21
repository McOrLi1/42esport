-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 21, 2014 at 06:13 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `id_forum`, `created`) VALUES
(1, 'General', 3, '2014-06-10 07:15:12'),
(2, 'Equipes', 3, '2014-06-16 04:09:00'),
(3, 'General', 2, '2014-06-09 00:13:20'),
(6, 'Flood', 3, '2014-06-17 05:53:43'),
(9, 'General', 1, '2014-06-17 08:15:15'),
(10, 'Test', 1, '2014-06-17 08:15:31'),
(12, 'Annonces Officielles', 2, '2014-06-17 21:57:15');

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
(1, 'LOL', '4242-12-12 12:12:12'),
(2, 'WOW', '2014-06-16 00:00:00'),
(3, 'CS', '2014-06-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `inscriptions`
--

CREATE TABLE IF NOT EXISTS `inscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_team` int(11) NOT NULL,
  `status` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `text` text NOT NULL,
  `id_tournament` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text,
  `id_thread` int(11) DEFAULT NULL,
  `id_author` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `content`, `id_thread`, `id_author`, `created`, `modified`) VALUES
(1, 'Ceci est un content', 2, 2, '2014-06-17 00:00:00', '2014-06-17 00:00:00'),
(6, 'Tres bien poulette', 2, 2, '2014-06-19 07:18:05', '2014-06-19 07:18:05'),
(16, 'Parle correctement petit', 2, 2, '2014-06-19 08:50:28', '2014-06-19 08:50:28'),
(17, 'Flood', 4, 2, '2014-06-19 08:52:52', '2014-06-19 08:52:52'),
(19, 'Flood Flood', 4, 2, '2014-06-19 08:53:16', '2014-06-19 08:53:16'),
(20, 'Flood Flood Flood', 4, 2, '2014-06-19 08:53:24', '2014-06-20 12:27:19'),
(21, '<img src="http://www.quickmeme.com/img/93/93f0eb66f8db28906cf1b437d7b7d1c9ca2b1d2b7bbb7d05350d280c3517536f.jpg"></img>', 4, 2, '2014-06-19 08:53:29', '2014-06-19 08:53:29'),
(22, 'Nous recherchons désespérément un joueur.<br>Merci d''envoyer un cv et une lettre de motiv.<br>5 ans d''experience requis, payé 400e/mois.', 7, 2, '2014-06-20 12:22:13', '2014-06-20 12:22:13'),
(24, 'Votez pour moi !!', 8, 2, '2014-06-20 12:40:13', '2014-06-20 12:40:22'),
(25, 'Fill', 1, 2, '2014-06-20 03:44:36', '2014-06-20 03:44:36'),
(31, 'test', 9, 2, '2014-06-20 06:39:38', '2014-06-20 06:39:38'),
(32, 'Oki', 10, 2, '2014-06-21 02:43:49', '2014-06-21 02:43:49'),
(33, 'Re', 11, 2, '2014-06-21 02:43:53', '2014-06-21 02:43:53'),
(34, 'Nope', 10, 2, '2014-06-21 02:43:56', '2014-06-21 02:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_team` varchar(256) NOT NULL,
  `id_tournois` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `threads`
--

INSERT INTO `threads` (`id`, `name`, `id_category`, `created`) VALUES
(1, 'Equipe Bubulle au taquet', 1, '2014-06-09 05:00:00'),
(2, 'Equipe Louloute !!', 1, '2014-06-16 00:13:00'),
(4, 'Salut ! Tu veux du flood ? Manges !!!', 6, '2014-06-17 22:01:30'),
(7, 'Equipe entreprise cherche un joueur', 2, '2014-06-20 12:22:09'),
(8, 'Concours du plus grand feeder', 9, '2014-06-20 12:40:11'),
(10, 'Test', 10, '2014-06-20 18:40:55'),
(11, 'Test 2', 10, '2014-06-21 14:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE IF NOT EXISTS `tournaments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_tournament` varchar(256) DEFAULT NULL,
  `start_tournament` datetime DEFAULT NULL,
  `end_tournament` datetime DEFAULT NULL,
  `start_register` datetime DEFAULT NULL,
  `end_register` datetime DEFAULT NULL,
  `inscrits_max` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `gamer_max` int(11) DEFAULT NULL,
  `remplace_max` int(11) DEFAULT NULL,
  `id_forum` int(11) DEFAULT NULL,
  `tweet_off` varchar(500) DEFAULT NULL,
  `tweet_flood` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `name_game` varchar(256) DEFAULT NULL,
  `bg_url` text,
  `gmap` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `name_tournament`, `start_tournament`, `end_tournament`, `start_register`, `end_register`, `inscrits_max`, `price`, `gamer_max`, `remplace_max`, `id_forum`, `tweet_off`, `tweet_flood`, `description`, `name_game`, `bg_url`, `gmap`) VALUES
(12, 'Tournois de Lauwl', '2014-09-22 00:00:00', '2014-10-10 00:00:00', '2014-09-12 00:00:00', '2014-09-12 23:42:00', 200, 10, 5, 2, 1, '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 'Ce tournois est trop bien', 'LOL', 'http://euw.leagueoflegends.com/sites/default/files/upload/art/wp_alistar_vs_olaf_1920x1080.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.981811342866!2d2.3183754999999993!3d48.896683800000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9e73a1ef7%3A0x139fccdd7378e83!2s96+Boulevard+Bessi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1403201135995" width="100%" height="450" frameborder="0" style="border:0"></iframe>'),
(13, 'Counter noob', '2014-12-13 12:11:56', '2014-12-23 12:02:56', '2014-12-13 08:11:56', '2014-12-26 12:11:56', 500, 10, 5, 2, 3, '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 'Ouais on va trop s''eclater!', 'CS', 'http://img0.gm.gtsstatic.com/wallpapers/d45a577e1e36562d19ff87bceb52d436_large.jpeg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.981811342866!2d2.3183754999999993!3d48.896683800000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9e73a1ef7%3A0x139fccdd7378e83!2s96+Boulevard+Bessi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1403201135995" width="100%" height="450" frameborder="0" style="border:0"></iframe>'),
(14, 'Woweur de la mort qui tue', '2014-10-13 21:00:00', '2014-10-13 22:00:00', '2014-10-13 20:00:00', '2014-10-13 20:30:00', 100, 10, 2, 1, 2, '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 'YOUPI', 'WOW', 'http://mathieu.ammixe.fr/wp-content/uploads/2013/03/hd-wallpaper-world-of-warcraft-3-1.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.981811342866!2d2.3183754999999993!3d48.896683800000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9e73a1ef7%3A0x139fccdd7378e83!2s96+Boulevard+Bessi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1403201135995" width="100%" height="450" frameborder="0" style="border:0"></iframe>'),
(15, 'Loleur de folies', '2014-10-13 21:00:00', '2014-12-23 12:02:56', '2014-10-13 20:00:00', '2014-10-13 20:30:00', 100, 10, 5, 2, 1, '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 'Ce tournois est trop bien', 'LOL', 'http://euw.leagueoflegends.com/sites/default/files/upload/art/wp_alistar_vs_olaf_1920x1080.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.981811342866!2d2.3183754999999993!3d48.896683800000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9e73a1ef7%3A0x139fccdd7378e83!2s96+Boulevard+Bessi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1403201135995" width="100%" height="450" frameborder="0" style="border:0"></iframe>');

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
  `photo` varchar(256) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `lastname`, `email`, `type`, `birthdate`, `status`, `created_profile`, `photo`) VALUES
(1, 'Supertoto', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'Admin', '1990-12-12', 'Normal', NULL, 'http://data.nimages.fr/flouckyouauw.jpg'),
(2, 'fokoc', 'sdafsadf1sadfdsa', 'manon', 'budin', 'mbudin@student.42.fr', 'Admin', '1990-12-12', 'En attente', NULL, 'https://cdn.42.fr/userprofil/mbudin.jpg'),
(3, 'Supertiti', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'Admin', '1990-12-12', 'Normal', NULL, ''),
(4, 'Supertutu', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'Banni', NULL, ''),
(5, 'Supertete', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'Suspendu', NULL, ''),
(6, 'Minitoto', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'Normal', NULL, ''),
(7, 'Minitata', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'Normal', NULL, ''),
(8, 'Minititi', 'sdafsadf1sadfdsa', 'Toto', 'Grantoto', 'asdfa@mail.com', 'User', '1990-12-12', 'Suspendu', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tournament` int(11) NOT NULL,
  `url_video` varchar(535) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
