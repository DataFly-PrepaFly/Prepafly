-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 14 jan. 2021 à 16:32
-- Version du serveur :  5.7.31
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
  `id_article` int(11) NOT NULL,
  `article` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cgu`
--

INSERT INTO `cgu` (`id_article`, `article`) VALUES
(1, 'DataFly exerce en qualité de sous-traitant à l’entreprise Infinite Measures. Domiciliée à Paris, DataFly fournit des sites web spécialisés dans les tests d’aptitudes pour divers domaines. Ici, le site web vise les compagnies aériennes, et est accessible par les pilotes des compagnies clientes et leurs managers, appartenant à ces mêmes compagnies.\r\n\r\nDataFly permet, sur son site web, de s\'entraîner, s’évaluer en tant que pilote; mais aussi d\'évaluer son équipe lorsque l’on est manager, à des exercices psychotechniques. Toute personne ayant les identifiants nécessaires à la connexion, préalablement fourni par le manager, possède un droit d’accès aux  tests proposés sur le site. \r\n\r\nVous pouvez acheter des Abonnements par le billet d’un contrat établi entre l’entreprise Infinite Measures et la compagnie aérienne, (ci-après dénommés « les Abonnements »). Cela permet de débloquer l\'accès à des sélections d\'exercices (aussi appelés « tests ») utilisables dans le site, pendant une période déterminée.\r\n\r\nL’utilisation du site est soumise aux présentes Conditions Générales et à la Politique de Confidentialité (ci-après dénommées les « Conditions Générales »). En accédant à notre site, vous prenez acte et reconnaissez avoir lu, compris et accepté les Conditions Générales de Vente. Si vous n’êtes pas d’accord avec ces conditions, veuillez ne pas utiliser notre site ou le quitter.'),
(2, 'Durée :\r\nPendant toute la durée des Abonnements, vous êtes libres d\'utiliser le site internet ainsi que les tests autant de fois que vous le souhaitez.\r\n\r\nCompte :\r\nL\'utilisation du site requiert la création d\'un compte par la compagnie aérienne. Vos résultats sont donnés sur le site dans une page qui y est dédiée.\r\n\r\nContraintes d\'utilisations :\r\nL\'Utilisateur doit prendre note des restrictions d\'utilisation suivantes :\r\n- Vous ne pouvez créer qu\'un seul compte par personne.\r\n- Vous ne pouvez pas partager votre compte avec un autre Utilisateur, cela pourrait fausser les résultats.\r\n\r\nInformation : Nous avons pris ces mesures afin d\'endiguer l\'utilisation frauduleuse du programme (partage de comptes) ainsi que l\'abus de l\'offre de démonstration.\r\n\r\nRésultats :\r\nÀ la fin de chaque test, le site vous présentera le résultat sous forme de tableaux.\r\nCes résultats sont fournis à titre indicatif et permettent une visualisation du niveau du pilote par le manager.\r\n\r\nMises à jour obligatoires :\r\nDes mises à jour sont faites régulièrement afin d’améliorer l’expérience de l’utilisateur sur le site.\r\n\r\nCoûts d\'accès :\r\nTous les coûts d’accès aux tests (par exemple les frais d’accès à Internet ou les frais liés aux données mobiles) incombent à l’utilisateur.');

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id_question` int(11) NOT NULL,
  `question` varchar(5000) DEFAULT NULL,
  `reponse` varchar(10000) DEFAULT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id_question`, `question`, `reponse`) VALUES
(1, 'Comment récupérer un mot de passe oublié ?', 'Pour obtenir un nouveau mot de passe, il vous suffit d\'aller sur l\'onglet \"S\'identifier\" et de cliquer sur \"Mot de passe oublié\". Nous serons alors en mesure de vous envoyer par mail un nouveau mot de passe.'),
(2, 'Question 2', 'Réponse 2');

-- --------------------------------------------------------

--
-- Structure de la table `mesure`
--

DROP TABLE IF EXISTS `mesure`;
CREATE TABLE IF NOT EXISTS `mesure` (
  `id_mesure` int(11) NOT NULL,
  `valeur` decimal(10,0) DEFAULT NULL,
  `Test_id_test` int(11) NOT NULL,
  PRIMARY KEY (`id_mesure`,`Test_id_test`),
  KEY `fk_Mesure_Test1_idx` (`Test_id_test`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mesure`
--

INSERT INTO `mesure` (`id_mesure`, `valeur`, `Test_id_test`) VALUES
(1, '19', 234567890),
(2, '7', 234567890),
(3, '16', 456789012),
(4, '7', 456789012),
(5, '24', 1234567890),
(6, '11', 1234567890);

-- --------------------------------------------------------

--
-- Structure de la table `société`
--

DROP TABLE IF EXISTS `société`;
CREATE TABLE IF NOT EXISTS `société` (
  `id_societe` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_test` int(11) NOT NULL,
  `date` datetime DEFAULT NULL,
  `resultat` varchar(20) DEFAULT NULL,
  `Type Test_id_type` varchar(50) NOT NULL,
  `Utilisateur_nSS` int(11) NOT NULL,
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
  `nSS` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `adresse` varchar(200) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `code_postal` int(5) NOT NULL,
  `mdp` varchar(60) NOT NULL,
  `type_utilisateur_id_type` varchar(2) NOT NULL,
  `société_id_societe` int(11) NOT NULL,
  PRIMARY KEY (`nSS`,`type_utilisateur_id_type`,`société_id_societe`),
  KEY `fk_Utilisateur_Type Utilisateur1_idx` (`type_utilisateur_id_type`),
  KEY `fk_utilisateur_société1_idx` (`société_id_societe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`nSS`, `nom`, `prenom`, `date_naissance`, `mail`, `adresse`, `ville`, `code_postal`, `mdp`, `type_utilisateur_id_type`, `société_id_societe`) VALUES
(12345, 'FALLOUH', 'Tatiana', '2000-05-12', 'tf@gmail.com', '110 rue Vauban', 'Mouvaux', 59420, '$2y$10$A2KMukEO4AqOAHkCc1TEfumC37LMB.aJ943ZoekX.ehXRr5zYs19y', 'p', 2),
(24680, 'GUESSOUM', 'Sérine', NULL, 'sg@gmail.com', '10 rue du Dragon', 'Paris', 75000, '$2y$10$N4BWqXR9eee4j7SJvbnT4OBmOnuCIHkodCX6ZhRWgiOB7D1cLJTDO', 'a', 1),
(67890, 'MERAH', 'Nadir', '2000-12-22', 'nm@gmail.com', NULL, NULL, 0, '$2y$10$4qBPY.1Fw0qwpUkF.G5/ZOl6a8kd2D0kavuyvCWGQD6NKSoOT07fq', 'm', 2),
(135790, 'LU', 'Yihong', NULL, 'yl@gmail.com', NULL, NULL, 0, '$2y$10$wpd8luvFZgULAsZUQ1.jW.oZ3PCkD/ZPTlATPyBZqVLLABprDrqvu', 'p', 2),
(1245780, 'DUBOIS', 'Paul', NULL, 'pd@gmail.com', NULL, NULL, 0, '$2y$10$48uFwMqSz3I6vGEcoGRmnOcA76VEKITWQjl5r2fN81DC81NRy/zj2', 'p', 2),
(2356890, 'ARMAND', 'Jean', NULL, 'ja@gmail.com', NULL, NULL, 0, '$2y$10$jN4yQDRig2eGI.JO4hV16OP/2nXudg6oD5v9HKp6FRXpmDFtaF4vu', 'p', 2);

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
  ADD CONSTRAINT `fk_Utilisateur_Type Utilisateur1` FOREIGN KEY (`type_utilisateur_id_type`) REFERENCES `type utilisateur` (`id_type`),
  ADD CONSTRAINT `fk_utilisateur_société1` FOREIGN KEY (`société_id_societe`) REFERENCES `société` (`id_societe`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;