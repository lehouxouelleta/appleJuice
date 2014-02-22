-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 22 Février 2014 à 20:52
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ums_prod`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE IF NOT EXISTS `auteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `adhésion` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` varchar(512) DEFAULT NULL,
  `ordre` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ordre` (`ordre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_contenu`
--

CREATE TABLE IF NOT EXISTS `categorie_contenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idcontenu` int(11) NOT NULL,
  `idcategorie` int(11) NOT NULL,
  PRIMARY KEY (`id`,`idcontenu`,`idcategorie`),
  KEY `idcontenu` (`idcontenu`),
  KEY `idcategorie` (`idcategorie`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `contenu`
--

CREATE TABLE IF NOT EXISTS `contenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `description` text,
  `auteur` int(11) NOT NULL,
  `lien` text NOT NULL,
  `positif` int(11) NOT NULL,
  `negatif` int(11) NOT NULL,
  `vue` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `contenu`
--

INSERT INTO `contenu` (`id`, `titre`, `description`, `auteur`, `lien`, `positif`, `negatif`, `vue`) VALUES
(1, 'Photo', 'Voici la photo de moi', 1, 'http://www.netconnexion.com/blog/wp-content/uploads/2012/10/panda.jpg', 0, 0, 0),
(2, 'Panthère', 'Salut Panthère, tu es trop belle!', 1, 'http://images.4ever.eu/data/download/animaux/sauvages/panthere%20noire%20169856.jpg', 0, 0, 0),
(3, 'Pomme', 'Voici une pomme, bon pour votre santé!', 1, 'http://www.petitcreux.tv/wp-content/uploads/2010/01/Petit_creux_pomme-rouge.png', 0, 0, 0);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `categorie_contenu`
--
ALTER TABLE `categorie_contenu`
  ADD CONSTRAINT `categorie_contenu_ibfk_4` FOREIGN KEY (`idcategorie`) REFERENCES `categorie` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `categorie_contenu_ibfk_3` FOREIGN KEY (`idcontenu`) REFERENCES `contenu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
