-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 19 Juin 2014 à 11:44
-- Version du serveur :  5.5.36
-- Version de PHP :  5.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `esport`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `id_forum` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `id_forum`, `created`) VALUES
(1, 'General', 3, '2014-06-10 07:15:00'),
(2, 'Equipes', 3, '2014-06-16 04:09:00'),
(3, 'General', 2, '2014-06-09 00:13:20');

-- --------------------------------------------------------

--
-- Structure de la table `forums`
--

CREATE TABLE IF NOT EXISTS `forums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `forums`
--

INSERT INTO `forums` (`id`, `name`, `created`) VALUES
(1, 'LOL', '1212-12-12 12:12:12'),
(2, 'WOW', '2014-06-16 00:00:00'),
(3, 'CS', '2014-06-16 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `inscriptions`
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
-- Structure de la table `news`
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
-- Structure de la table `posts`
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
-- Structure de la table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_team` varchar(256) NOT NULL,
  `id_tournois` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `threads`
--

INSERT INTO `threads` (`id`, `name`, `id_category`, `created`) VALUES
(1, 'Equipe Bubulle au taquet', 1, '2014-06-09 05:00:00'),
(2, 'Equipe Louloute bug', 1, '2014-06-16 00:13:00');

-- --------------------------------------------------------

--
-- Structure de la table `tournaments`
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
-- Contenu de la table `tournaments`
--

INSERT INTO `tournaments` (`id`, `name_tournament`, `start_tournament`, `end_tournament`, `start_register`, `end_register`, `inscrits_max`, `price`, `gamer_max`, `remplace_max`, `id_forum`, `tweet_off`, `tweet_flood`, `description`, `name_game`, `bg_url`, `gmap`) VALUES
(12, 'Tournois de Lauwl', '2014-09-22 00:00:00', '2014-10-10 00:00:00', '2014-09-12 00:00:00', '2014-09-12 23:42:00', 200, 10, 5, 2, 1, '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 'Ce tournois est trop bien', 'LOL', 'http://euw.leagueoflegends.com/sites/default/files/upload/art/wp_alistar_vs_olaf_1920x1080.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.981811342866!2d2.3183754999999993!3d48.896683800000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9e73a1ef7%3A0x139fccdd7378e83!2s96+Boulevard+Bessi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1403201135995" width="600" height="450" frameborder="0" style="border:0"></iframe>'),
(13, 'Counter noob', '2014-12-13 12:11:56', '2014-12-23 12:02:56', '2014-12-13 08:11:56', '2014-12-26 12:11:56', 500, 10, 5, 2, 3, '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 'hmjhkfyhrtegr', 'CS', 'http://img0.gm.gtsstatic.com/wallpapers/d45a577e1e36562d19ff87bceb52d436_large.jpeg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.981811342866!2d2.3183754999999993!3d48.896683800000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9e73a1ef7%3A0x139fccdd7378e83!2s96+Boulevard+Bessi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1403201135995" width="600" height="450" frameborder="0" style="border:0"></iframe>'),
(14, 'Woweur de la mort qui tue', '2014-10-13 21:00:00', '2014-10-13 22:00:00', '2014-10-13 20:00:00', '2014-10-13 20:30:00', 100, 10, 2, 1, 2, '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 'efrwbeitjh', 'WOW', 'http://mathieu.ammixe.fr/wp-content/uploads/2013/03/hd-wallpaper-world-of-warcraft-3-1.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.981811342866!2d2.3183754999999993!3d48.896683800000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9e73a1ef7%3A0x139fccdd7378e83!2s96+Boulevard+Bessi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1403201135995" width="600" height="450" frameborder="0" style="border:0"></iframe>'),
(15, 'Loleur de folies', '2014-10-13 21:00:00', '2014-12-23 12:02:56', '2014-10-13 20:00:00', '2014-10-13 20:30:00', 100, 10, 5, 2, 1, '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 'Ce tournois est trop bien', 'LOL', 'http://euw.leagueoflegends.com/sites/default/files/upload/art/wp_alistar_vs_olaf_1920x1080.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.981811342866!2d2.3183754999999993!3d48.896683800000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9e73a1ef7%3A0x139fccdd7378e83!2s96+Boulevard+Bessi%C3%A8res!5e0!3m2!1sfr!2sfr!4v1403201135995" width="600" height="450" frameborder="0" style="border:0"></iframe>');

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `users`
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

-- --------------------------------------------------------

--
-- Structure de la table `videos`
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
