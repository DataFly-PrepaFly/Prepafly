-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema prepafly
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema prepafly
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `prepafly` DEFAULT CHARACTER SET utf8 ;
USE `prepafly` ;

-- -----------------------------------------------------
-- Table `prepafly`.`faq`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`faq` (
  `id_question` INT NOT NULL,
  `question` VARCHAR(5000) NULL DEFAULT NULL,
  `reponse` VARCHAR(10000) NULL DEFAULT NULL,
  PRIMARY KEY (`id_question`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `prepafly`.`type test`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`type test` (
  `id_type` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_type`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `prepafly`.`société`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`société` (
  `id_societe` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_societe`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


INSERT INTO `société` (`id_societe`, `nom`) VALUES
(1, 'Infinite Measures'),
(2, 'Air France');


-- -----------------------------------------------------
-- Table `prepafly`.`type utilisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`type utilisateur` (
  `id_type` VARCHAR(2) NOT NULL,
  `type` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`id_type`),
  UNIQUE INDEX `id_type_UNIQUE` (`id_type` ASC) VISIBLE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

INSERT INTO `type utilisateur` (`id_type`, `type`) VALUES
('a', 'admin'),
('m', 'manager'),
('p', 'pilote');

-- -----------------------------------------------------
-- Table `prepafly`.`utilisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`utilisateur` (
  `nSS` INT NOT NULL,
  `nom` VARCHAR(45) NULL DEFAULT NULL,
  `prenom` VARCHAR(45) NULL DEFAULT NULL,
  `date_naissance` DATE NULL DEFAULT NULL,
  `mail` VARCHAR(100) NULL DEFAULT NULL,
  `adresse` VARCHAR(200) NULL DEFAULT NULL,
  `ville` VARCHAR(50) NULL DEFAULT NULL,
  `mdp` VARCHAR(45) NOT NULL,
  `type_utilisateur_id_type` VARCHAR(2) NOT NULL,
  `société_id_societe` INT NOT NULL,
  PRIMARY KEY (`nSS`, `type_utilisateur_id_type`, `société_id_societe`),
  INDEX `fk_Utilisateur_Type Utilisateur1_idx` (`type_utilisateur_id_type` ASC) VISIBLE,
  INDEX `fk_utilisateur_société1_idx` (`société_id_societe` ASC) VISIBLE,
  CONSTRAINT `fk_utilisateur_société1`
    FOREIGN KEY (`société_id_societe`)
    REFERENCES `prepafly`.`société` (`id_societe`),
  CONSTRAINT `fk_Utilisateur_Type Utilisateur1`
    FOREIGN KEY (`type_utilisateur_id_type`)
    REFERENCES `prepafly`.`type utilisateur` (`id_type`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


INSERT INTO `utilisateur` (`nSS`, `nom`, `prenom`, `date_naissance`, `mail`, `adresse`, `ville`, `mdp`, `type_utilisateur_id_type`, `société_id_societe`) VALUES
(12345, 'FALLOUH', 'Tatiana', '2000-05-12', 'tf@gmail.com', '110 rue Vauban', 'Mouvaux', 'tf123!', 'p', 2),
(67890, 'MERAH', 'Nadir', '2000-12-22', 'nm@gmail.com', NULL, NULL, 'nm123!', 'm', 2);


-- -----------------------------------------------------
-- Table `prepafly`.`test`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`test` (
  `id_test` INT NOT NULL,
  `date` DATETIME NULL DEFAULT NULL,
  `resultat` VARCHAR(20) NULL DEFAULT NULL,
  `Type Test_id_type` VARCHAR(50) NOT NULL,
  `Utilisateur_nSS` INT NOT NULL,
  PRIMARY KEY (`id_test`, `Type Test_id_type`, `Utilisateur_nSS`),
  INDEX `fk_Test_Type Test1_idx` (`Type Test_id_type` ASC) VISIBLE,
  INDEX `fk_Test_Utilisateur1_idx` (`Utilisateur_nSS` ASC) VISIBLE,
  CONSTRAINT `fk_Test_Type Test1`
    FOREIGN KEY (`Type Test_id_type`)
    REFERENCES `prepafly`.`type test` (`id_type`),
  CONSTRAINT `fk_Test_Utilisateur1`
    FOREIGN KEY (`Utilisateur_nSS`)
    REFERENCES `prepafly`.`utilisateur` (`nSS`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `prepafly`.`mesure`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`mesure` (
  `id_mesure` INT NOT NULL,
  `valeur` DECIMAL(10,0) NULL DEFAULT NULL,
  `Test_id_test` INT NOT NULL,
  PRIMARY KEY (`id_mesure`, `Test_id_test`),
  INDEX `fk_Mesure_Test1_idx` (`Test_id_test` ASC) VISIBLE,
  CONSTRAINT `fk_Mesure_Test1`
    FOREIGN KEY (`Test_id_test`)
    REFERENCES `prepafly`.`test` (`id_test`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;




SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
