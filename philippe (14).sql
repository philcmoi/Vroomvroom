-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 18 sep. 2022 à 08:39
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `philippe`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `idtrajet` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_events_trajet1_idx` (`idtrajet`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `idmembre` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `token` varchar(10000) NOT NULL,
  `password` varchar(10000) NOT NULL,
  PRIMARY KEY (`idmembre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_number` int(11) NOT NULL AUTO_INCREMENT,
  `conducteur` varchar(100) DEFAULT NULL,
  `lieudepart` varchar(500) DEFAULT NULL,
  `lieuarrive` varchar(255) DEFAULT NULL,
  `participation` double DEFAULT NULL,
  `datedepart` datetime DEFAULT NULL,
  `datearrive` datetime DEFAULT NULL,
  `idmembre` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_number`),
  KEY `fk_orders_membre_idx` (`idmembre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

DROP TABLE IF EXISTS `trajet`;
CREATE TABLE IF NOT EXISTS `trajet` (
  `idtrajet` int(11) NOT NULL AUTO_INCREMENT,
  `depart` varchar(255) DEFAULT NULL,
  `arrive` varchar(255) DEFAULT NULL,
  `latDepart` float DEFAULT NULL,
  `longDepart` float DEFAULT NULL,
  `latArrive` float DEFAULT NULL,
  `longArrive` float DEFAULT NULL,
  `idmembre` int(11) DEFAULT NULL,
  `order_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtrajet`),
  UNIQUE KEY `idtrajet` (`idtrajet`),
  UNIQUE KEY `idtrajet_2` (`idtrajet`),
  UNIQUE KEY `idtrajet_3` (`idtrajet`),
  UNIQUE KEY `idtrajet_4` (`idtrajet`),
  UNIQUE KEY `idtrajet_5` (`idtrajet`),
  KEY `fk_trajet_membre1_idx` (`idmembre`),
  KEY `fk_trajet_orders1_idx` (`order_number`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`idtrajet`, `depart`, `arrive`, `latDepart`, `longDepart`, `latArrive`, `longArrive`, `idmembre`, `order_number`) VALUES
(15, 'Clamart', 'Paris', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_membre` FOREIGN KEY (`idmembre`) REFERENCES `membre` (`idmembre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
