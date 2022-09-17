-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 17 sep. 2022 à 14:06
-- Version du serveur : 8.0.27
-- Version de PHP : 8.1.10

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
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `idtrajet` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_events_trajet1_idx1` (`idtrajet`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  PRIMARY KEY (`idmembre`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`idmembre`, `email`, `pseudo`, `token`, `password`) VALUES
(26, 'lhpp.philippe@gmail.com', 'wfh', '1029559248', '$2y$10$sD5p0Gh8th0UgABDcZGnlevXPaPG3SGrp0LkLNmYfi.j8yy82jTRq'),
(27, 'wongfeyhong45@gmail.com', 'ww', '1465756238', '$2y$10$bRV3VLjl4ug68j0YZkTNt.LpTfEuOMzMtf17clBv78iLNHsCLUwxC');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_number` int NOT NULL AUTO_INCREMENT,
  `conducteur` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lieudepart` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lieuarrive` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `participation` double NOT NULL,
  `datedepart` datetime NOT NULL,
  `datearrive` datetime NOT NULL,
  `idmembre` int DEFAULT NULL,
  PRIMARY KEY (`order_number`),
  KEY `fk_orders_membre_idx` (`idmembre`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

DROP TABLE IF EXISTS `trajet`;
CREATE TABLE IF NOT EXISTS `trajet` (
  `idtrajet` int NOT NULL AUTO_INCREMENT,
  `depart` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `arrive` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idmembre` int DEFAULT NULL,
  PRIMARY KEY (`idtrajet`),
  KEY `fk_trajet_membre1_idx1` (`idmembre`)
) ENGINE=InnoDB AUTO_INCREMENT=505 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_events_trajet1` FOREIGN KEY (`idtrajet`) REFERENCES `trajet` (`idtrajet`);

--
-- Contraintes pour la table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_membre` FOREIGN KEY (`idmembre`) REFERENCES `membre` (`idmembre`);

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
  ADD CONSTRAINT `fk_trajet_membre1` FOREIGN KEY (`idmembre`) REFERENCES `membre` (`idmembre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
