-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Lun 03 Juin 2013 à 11:15
-- Version du serveur: 5.1.44
-- Version de PHP: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `webblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE `billets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_author` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `content` longtext NOT NULL,
  `tags` varchar(16) NOT NULL,
  `resume` varchar(32) NOT NULL,
  `img` varchar(64) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_author` (`id_author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `billets`
--

INSERT INTO `billets` VALUES(7, '2013-06-02 19:47:00', '0000-00-00 00:00:00', 0, 'ouverture du site', 'coucou le site ouvre', '', ' coucou', '');
INSERT INTO `billets` VALUES(8, '2013-06-02 21:22:24', '0000-00-00 00:00:00', 0, '', '', '', '', 'image/play1.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `pwd` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` VALUES(1, 'admin', 'admin', 'admin@admin.fr', 1);
INSERT INTO `users` VALUES(2, 'blogger', 'blogger', 'blogger@blogger.fr', 2);
