-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 13 jan. 2021 à 21:43
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `prepafly`
--

-- --------------------------------------------------------

--
-- Structure de la table `cgu`
--

DROP TABLE IF EXISTS `cgu`;
CREATE TABLE IF NOT EXISTS `cgu` (
  `id_article` int NOT NULL,
  `article` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id_question` int NOT NULL,
  `question` varchar(5000) DEFAULT NULL,
  `reponse` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `mesure`
--

DROP TABLE IF EXISTS `mesure`;
CREATE TABLE IF NOT EXISTS `mesure` (
  `id_mesure` int NOT NULL,
  `valeur` decimal(10,0) DEFAULT NULL,
  `Test_id_test` int NOT NULL,
  PRIMARY KEY (`id_mesure`,`Test_id_test`),
  KEY `fk_Mesure_Test1_idx` (`Test_id_test`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `société`
--

DROP TABLE IF EXISTS `société`;
CREATE TABLE IF NOT EXISTS `société` (
  `id_societe` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_societe`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `société`
--

INSERT INTO `société` (`id_societe`, `nom`) VALUES
(1, 'Infinite Measures'),
(2, 'Air France');

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id_test` int NOT NULL,
  `date` datetime DEFAULT NULL,
  `resultat` varchar(20) DEFAULT NULL,
  `Type Test_id_type` varchar(50) NOT NULL,
  `Utilisateur_nSS` int NOT NULL,
  PRIMARY KEY (`id_test`,`Type Test_id_type`,`Utilisateur_nSS`),
  KEY `fk_Test_Type Test1_idx` (`Type Test_id_type`),
  KEY `fk_Test_Utilisateur1_idx` (`Utilisateur_nSS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`id_test`, `date`, `resultat`, `Type Test_id_type`, `Utilisateur_nSS`) VALUES
(234567890, NULL, 'A', 'visuel', 135790),
(345678901, NULL, 'C', 'regulier', 1245780),
(456789012, NULL, 'A', 'auditif', 2356890),
(1234567890, NULL, 'B', 'complet', 12345);

-- --------------------------------------------------------

--
-- Structure de la table `type test`
--

DROP TABLE IF EXISTS `type test`;
CREATE TABLE IF NOT EXISTS `type test` (
  `id_type` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type test`
--

INSERT INTO `type test` (`id_type`) VALUES
('auditif'),
('complet'),
('regulier'),
('visuel');

-- --------------------------------------------------------

--
-- Structure de la table `type utilisateur`
--

DROP TABLE IF EXISTS `type utilisateur`;
CREATE TABLE IF NOT EXISTS `type utilisateur` (
  `id_type` varchar(2) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id_type`),
  UNIQUE KEY `id_type_UNIQUE` (`id_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type utilisateur`
--

INSERT INTO `type utilisateur` (`id_type`, `type`) VALUES
('a', 'admin'),
('m', 'manager'),
('p', 'pilote');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `nSS` int NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `mdp` varchar(45) NOT NULL,
  `type_utilisateur_id_type` varchar(2) NOT NULL,
  `société_id_societe` int NOT NULL,
  PRIMARY KEY (`nSS`,`type_utilisateur_id_type`,`société_id_societe`),
  KEY `fk_Utilisateur_Type Utilisateur1_idx` (`type_utilisateur_id_type`),
  KEY `fk_utilisateur_société1_idx` (`société_id_societe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nSS`, `nom`, `prenom`, `date_naissance`, `mail`, `adresse`, `ville`, `mdp`, `type_utilisateur_id_type`, `société_id_societe`) VALUES
(12345, 'FALLOUH', 'Tatiana', '2000-05-12', 'tf@gmail.com', '110 rue Vauban', 'Mouvaux', 'tf123!', 'p', 2),
(24680, 'GUESSOUM', 'Sérine', NULL, 'sg@gmail.com', NULL, NULL, 'sg123!', 'a', 1),
(67890, 'MERAH', 'Nadir', '2000-12-22', 'nm@gmail.com', NULL, NULL, 'nm123!', 'm', 2),
(135790, 'LU', 'Yihong', NULL, 'yl@gmail.com', NULL, NULL, 'yl123!', 'p', 2),
(1245780, 'DUBOIS', 'Paul', NULL, 'pd@gmail.com', NULL, NULL, 'pd123!', 'p', 2),
(2356890, 'ARMAND', 'Jean', NULL, 'ja@gmail.com', NULL, NULL, 'ja123!', 'p', 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `mesure`
--
ALTER TABLE `mesure`
  ADD CONSTRAINT `fk_Mesure_Test1` FOREIGN KEY (`Test_id_test`) REFERENCES `test` (`id_test`);

--
-- Contraintes pour la table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `fk_Test_Type Test1` FOREIGN KEY (`Type Test_id_type`) REFERENCES `type test` (`id_type`),
  ADD CONSTRAINT `fk_Test_Utilisateur1` FOREIGN KEY (`Utilisateur_nSS`) REFERENCES `utilisateur` (`nSS`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_utilisateur_société1` FOREIGN KEY (`société_id_societe`) REFERENCES `société` (`id_societe`),
  ADD CONSTRAINT `fk_Utilisateur_Type Utilisateur1` FOREIGN KEY (`type_utilisateur_id_type`) REFERENCES `type utilisateur` (`id_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
