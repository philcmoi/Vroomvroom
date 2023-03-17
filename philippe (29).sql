-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 17 mars 2023 à 05:44
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

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
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `idmembre` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pseudo` varchar(100) NOT NULL,
  `token` varchar(10000) NOT NULL,
  `password` varchar(10000) NOT NULL,
  `role` varchar(25) NOT NULL DEFAULT 'visiteur',
  PRIMARY KEY (`idmembre`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idmembre`, `email`, `pseudo`, `token`, `password`, `role`) VALUES
(12, 'lhpp.philippe@gmail.com', 'wfh', '164038145', '$2y$10$1s0C2N6yIVF6twkuPyElMuxwjbDYFMyu0gDiykXwG/6w3iTWG63uy', 'visiteur'),
(13, 'wongfeyhong45@gmail.com', 'wfh45', '254776898', '$2y$10$aSwWWTDoVKUnnEa08SjA2u7ZtiIl.Ut5ZNRCkak1xMzqRARl46nKq', 'visiteur'),
(16, 'wongfeyhong1@gmail.com', 'wfh1', '238381825', '$2y$10$AyiJSPZUUVM4EW7Apq7VfeLmwIxUjPf12wmWm/6Y.iWUTTPZoSGvG', 'visiteur'),
(17, 'wfhphilippe@gmail.com', 'wfhphilippe', '1886015738', '$2y$10$V/1Kau1kqXhHLoSoyEGTc.vkYxiDgM88.1aAPfUq/XU9cKLw3ejre', 'visiteur'),
(18, 'lhpp.philippe2@gmail.com', 'mp', '718516018', '$2y$10$PKKsAvIL9CfE5de79Awh0e7koyATmSdV8jBqBwI6uZJ00.v0zXXwi', 'visiteur');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_number` int NOT NULL AUTO_INCREMENT,
  `conducteur` varchar(100) DEFAULT NULL,
  `lieudepart` varchar(500) DEFAULT NULL,
  `lieuarrive` varchar(255) DEFAULT NULL,
  `participation` double DEFAULT NULL,
  `datedepart` datetime DEFAULT NULL,
  `datearrive` datetime DEFAULT NULL,
  `membre_idmembre` int NOT NULL,
  PRIMARY KEY (`order_number`),
  KEY `fk_orders_membre_idx` (`membre_idmembre`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`order_number`, `conducteur`, `lieudepart`, `lieuarrive`, `participation`, `datedepart`, `datearrive`, `membre_idmembre`) VALUES
(19, 'elan retrouve', 'Paris', 'Bordeaux', 50, '2022-12-16 19:12:00', '2022-12-16 19:12:00', 0),
(20, 'philippe', 'Paris', 'Bordeaux', 50, '2022-12-08 19:31:00', '2022-12-08 19:31:00', 0),
(21, 'philippe', 'Paris', 'Pekin', 500, '2022-12-08 19:45:00', '2022-12-08 19:45:00', 0),
(22, 'elan retrouve et moi', 'Paris', 'Pekin', 500, '2022-12-16 19:06:00', '2022-12-16 19:06:00', 0),
(23, 'elan retrouve et moi', 'Paris', 'Pekin', 500, '2022-12-16 19:13:00', '2022-12-16 19:13:00', 0),
(24, 'DECONNECTE', 'Paris', 'Bordeaux', 50, '2023-02-11 19:25:00', '2023-02-11 19:25:00', 0),
(26, 'DECONNECTE', 'Paris', 'Paris', 0, '2023-02-13 15:52:00', '2023-02-13 15:52:00', 0),
(27, 'elan retrouve', 'Paris', 'Bordeaux', 50, '2023-02-19 08:29:00', '2023-02-27 08:29:00', 0),
(28, 'elan retrouve', 'Paris', 'Bordeaux', 50, '2023-02-22 18:25:00', '2023-02-22 18:25:00', 0),
(31, 'elan retrouve', 'Paris', 'Pekin', 500, '2023-03-12 08:03:00', '2023-03-12 08:03:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `prospects`
--

DROP TABLE IF EXISTS `prospects`;
CREATE TABLE IF NOT EXISTS `prospects` (
  `idprospects` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `numtel` varchar(20) NOT NULL,
  PRIMARY KEY (`idprospects`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

DROP TABLE IF EXISTS `trajet`;
CREATE TABLE IF NOT EXISTS `trajet` (
  `idtrajet` int NOT NULL AUTO_INCREMENT,
  `depart` varchar(255) DEFAULT NULL,
  `arrive` varchar(255) DEFAULT NULL,
  `latDepart` float DEFAULT NULL,
  `longDepart` float DEFAULT NULL,
  `latArrive` float DEFAULT NULL,
  `longArrive` float DEFAULT NULL,
  `orders_order_number` int NOT NULL,
  PRIMARY KEY (`idtrajet`,`orders_order_number`),
  UNIQUE KEY `idtrajet` (`idtrajet`),
  UNIQUE KEY `idtrajet_2` (`idtrajet`),
  UNIQUE KEY `idtrajet_3` (`idtrajet`),
  UNIQUE KEY `idtrajet_4` (`idtrajet`),
  UNIQUE KEY `idtrajet_5` (`idtrajet`),
  KEY `fk_trajet_orders1_idx` (`orders_order_number`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `trajet`
--

INSERT INTO `trajet` (`idtrajet`, `depart`, `arrive`, `latDepart`, `longDepart`, `latArrive`, `longArrive`, `orders_order_number`) VALUES
(11, 'Paris', 'Suresnes', 48.8326, 2.31365, 48.8616, 2.20585, 0),
(12, 'Paris', 'Rueil-Malmaison', 48.8286, 2.32315, 48.8661, 2.19818, 0),
(13, 'Clamart', 'Paris', 48.8078, 2.26971, 48.8503, 2.3164, 0),
(14, 'Paris', 'DÃ©partement de Paris', 48.829, 2.32625, 48.8819, 2.31389, 0);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `idvisiteur_visiteur` bigint NOT NULL AUTO_INCREMENT,
  `Nom_visiteur` varchar(50) DEFAULT NULL,
  `prenom_visiteur` varchar(50) DEFAULT NULL,
  `email_visiteur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idvisiteur_visiteur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
