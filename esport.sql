-- phpMyAdmin SQL Dump
-- version 4.1.9
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Jeu 19 Juin 2014 à 10:59
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `tournaments`
--

INSERT INTO `tournaments` (`id`, `name_tournament`, `start_tournament`, `end_tournament`, `start_register`, `end_register`, `inscrits_max`, `price`, `gamer_max`, `remplace_max`, `id_forum`, `tweet_off`, `tweet_flood`, `description`, `name_game`, `bg_url`, `gmap`) VALUES
(12, 'Tournois de Lauwl', '2014-09-22 00:00:00', '2014-10-10 00:00:00', '2014-09-12 00:00:00', '2014-09-12 23:42:00', 200, 10, 5, 2, 1, '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', '<a class="twitter-timeline" href="https://twitter.com/KateUpton" data-widget-id="479659417588088832">Tweets by @KateUpton</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 'Ce tournois est trop bien', 'League of Legends', 'http://www.naportals.com/wp-content/uploads/2014/02/kate-upton-swimsuit-models.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.987205469353!2d2.3183759999999998!3d48.89658099999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9e933d625%3A0xa0eafb625a650f9d!2zw4ljb2xlIDQy!5e0!3m2!1sfr!2sfr!4v1403195169303" width="100%" height="250" frameborder="0" style="border:0"></iframe>'),
(13, 'Wow 42 Arena', '2015-05-01 00:00:00', '2015-06-01 00:00:00', '2014-01-01 00:00:00', '2015-01-01 00:00:00', 500, 20, 3, 1, 2, '<a class="twitter-timeline" href="https://twitter.com/42esport" data-widget-id="477431927146692610">Tweets by @42esport</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', '<a class="twitter-timeline" href="https://twitter.com/KateUpton" data-widget-id="479659417588088832">Tweets by @KateUpton</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?''http'':''https'';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>', 'Tournois winner / loser bracket', 'Warcraft', 'http://www.sports-extremes.net/wp-content/uploads/2014/03/La-pin-up-du-Mardi-Kate-Upton-SLIDE.jpg', '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2622.987205469353!2d2.3183759999999998!3d48.89658099999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fa9e933d625%3A0xa0eafb625a650f9d!2zw4ljb2xlIDQy!5e0!3m2!1sfr!2sfr!4v1403195169303" width="100%" height="250" frameborder="0" style="border:0"></iframe>');

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
