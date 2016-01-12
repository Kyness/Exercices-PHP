-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 12 Janvier 2016 à 17:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mailinglist`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'delphinetravanca@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `uniqid` varchar(255) NOT NULL,
  `state` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `date`, `uniqid`, `state`) VALUES
(1, 'delphinetravanca@gmail.com', '2016-01-12 11:13:14', '', ''),
(2, 'oliviapaquay@gmail.com', '2016-01-12 11:47:44', '', ''),
(3, 'oliviapaquay02@gmail.com', '2016-01-12 12:09:15', '5694dedb657e0', ''),
(4, 'oliviapaquay03@gmail.com', '2016-01-12 12:14:26', '5694e01245ee4', 'off'),
(6, 'delphine.gregoire@etud.infographie-sup.eu', '2016-01-12 13:14:20', '5694edd24e307', 'off'),
(7, 'delphine.gregoire@etud.infographie-sup.eu', '2016-01-12 13:14:24', '5694ee1dee2f7', 'off'),
(8, 'delphine.gregoire@etud.infographie-sup.eu', '2016-01-12 13:14:28', '5694ee21f40bc', 'off'),
(9, 'delphine.gregoire@etud.infographie-sup.eu', '2016-01-12 13:15:23', '5694ee510b9b6', 'off'),
(10, 'delphine.gregoire@etud.infographie-sup.eu', '2016-01-12 13:17:13', '5694eebd7c491', 'off'),
(11, 'delphinetravanca@gmail.com', '2016-01-12 13:23:06', '5694f02997825', 'off'),
(12, 'delphinetravanca@gmail.com', '2016-01-12 13:24:27', '5694f07a9c959', 'off'),
(13, 'blabla@gmail.com', '2016-01-12 13:46:46', '5694f5b49a0a8', 'off'),
(14, 'blabla@gmail.com', '2016-01-12 13:50:55', '5694f6af86ad3', 'off'),
(15, 'blabla2@gmail.com', '2016-01-12 13:55:44', '5694f7cfe4937', 'off'),
(16, 'blabla3@gmail.com', '2016-01-12 14:17:03', '5694fccf86fb8', 'off'),
(17, 'blabla3@gmail.com', '2016-01-12 14:22:20', '5694fe0c1ff0a', 'off'),
(18, 'blabla3@gmail.com', '2016-01-12 14:41:32', '5695028c7e7f0', 'off'),
(19, 'blamatoscope@hip.hop', '2016-01-12 15:35:45', '56950f3634f99', 'off'),
(20, 'delphinetravanca@gmail.com', '2016-01-12 15:47:27', '569511f9890c5', 'off'),
(21, 'y', '2016-01-12 15:53:52', '569513806a621', 'off'),
(22, 'delphinetravanca@gmail.com', '2016-01-12 16:00:13', '569514f69e69f', 'off'),
(23, 'delphine.gregoire@etud.infographie-sup.eu', '2016-01-12 16:03:08', '569515ab1ca2f', 'off');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
