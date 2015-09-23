-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Jeu 03 Septembre 2015 à 13:14
-- Version du serveur: 5.6.24
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `myitbox`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vitrine` varchar(10) NOT NULL,
  `photos` varchar(10) NOT NULL,
  `interface` varchar(10) NOT NULL,
  `connexion` varchar(10) NOT NULL,
  `bref` text NOT NULL,
  `nom` varchar(250) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `tel` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id`, `vitrine`, `photos`, `interface`, `connexion`, `bref`, `nom`, `mail`, `tel`) VALUES
(27, 'non', 'non', 'non', 'non', 'Application multi-plateforme', 'nomentsoa', 'noments@gmail.com', '2122222'),
(28, 'non', 'non', 'non', 'non', 'Inc adsddddddddddddddddddddddddddddddddddddddddddd', 'andeiis', 'nddse@gmail.com', '333333333');

-- --------------------------------------------------------

--
-- Structure de la table `commandeweb`
--

CREATE TABLE IF NOT EXISTS `commandeweb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wordpress` varchar(10) NOT NULL,
  `drupal` varchar(10) NOT NULL,
  `backoffice` varchar(10) NOT NULL,
  `connexion` varchar(10) NOT NULL,
  `bref` text NOT NULL,
  `nom` varchar(150) NOT NULL,
  `mail` varchar(170) NOT NULL,
  `tel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `commandeweb`
--

INSERT INTO `commandeweb` (`id`, `wordpress`, `drupal`, `backoffice`, `connexion`, `bref`, `nom`, `mail`, `tel`) VALUES
(3, 'non', 'non', 'oui', 'oui', 'Application web de dernière generation', 'Andriants', 'andr@gmail.com', '03322'),
(4, 'oui', 'oui', 'non', 'oui', 'drupal blog', 'client', 'noments@gmail.com', '033322');

-- --------------------------------------------------------

--
-- Structure de la table `prix`
--

CREATE TABLE IF NOT EXISTS `prix` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `tablette` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `vitrine` int(11) NOT NULL,
  `photo` int(11) NOT NULL,
  `interface` int(11) NOT NULL,
  `son` int(11) NOT NULL,
  `connexion` int(11) NOT NULL,
  `prixPage` int(11) NOT NULL,
  `industrie` int(11) NOT NULL,
  `technologie` int(11) NOT NULL,
  `immobilier` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `prix`
--

INSERT INTO `prix` (`id`, `tablette`, `phone`, `vitrine`, `photo`, `interface`, `son`, `connexion`, `prixPage`, `industrie`, `technologie`, `immobilier`) VALUES
(1, 30, 5, 12, 25, 1, 9, 1, 20, 22, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `prixsite`
--

CREATE TABLE IF NOT EXISTS `prixsite` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `wordpress` int(11) NOT NULL,
  `drupal` int(11) NOT NULL,
  `vitrine` int(11) NOT NULL,
  `Backoffice` int(11) NOT NULL,
  `compteUtilisateur` int(11) NOT NULL,
  `appliPersonnalise` int(11) NOT NULL,
  `connexion` int(11) NOT NULL,
  `prixPage` int(11) NOT NULL,
  `industrie` int(11) NOT NULL,
  `technologie` int(11) NOT NULL,
  `immobilier` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `prixsite`
--

INSERT INTO `prixsite` (`id`, `wordpress`, `drupal`, `vitrine`, `Backoffice`, `compteUtilisateur`, `appliPersonnalise`, `connexion`, `prixPage`, `industrie`, `technologie`, `immobilier`) VALUES
(1, 4, 2, 2, 2, 2, 2, 2, 2, 5, 4, 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
