-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema prepafly
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema prepafly
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `prepafly` DEFAULT CHARACTER SET utf8 ;
USE `prepafly` ;

-- -----------------------------------------------------
-- Table `prepafly`.`Compagnie aérienne`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`Compagnie aérienne` (
  `id_compagnie` INT NOT NULL,
  `nom` VARCHAR(45) NULL,
  `pays` VARCHAR(45) NULL,
  `Utilisateur_nSS` INT NOT NULL,
  PRIMARY KEY (`id_compagnie`),
  INDEX `fk_Compagnie aérienne_Utilisateur1_idx` (`Utilisateur_nSS` ASC) VISIBLE,
  CONSTRAINT `fk_Compagnie aérienne_Utilisateur1`
    FOREIGN KEY (`Utilisateur_nSS`)
    REFERENCES `prepafly`.`Utilisateur` (`nSS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prepafly`.`Mesure`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`Mesure` (
  `id_mesure` INT NOT NULL,
  `valeur` DECIMAL NULL,
  `Test_id_test` INT NOT NULL,
  PRIMARY KEY (`id_mesure`),
  INDEX `fk_Mesure_Test1_idx` (`Test_id_test` ASC) VISIBLE,
  CONSTRAINT `fk_Mesure_Test1`
    FOREIGN KEY (`Test_id_test`)
    REFERENCES `prepafly`.`Test` (`id_test`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prepafly`.`Test`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`Test` (
  `id_test` INT NOT NULL,
  `date` DATETIME NULL,
  `resultat` VARCHAR(20) NULL,
  `Mesure_id_mesure` INT NOT NULL,
  `Utilisateur_nSS` INT NOT NULL,
  `type` VARCHAR(50) NULL,
  PRIMARY KEY (`id_test`),
  INDEX `fk_Test_Mesure_idx` (`Mesure_id_mesure` ASC) VISIBLE,
  INDEX `fk_Test_Utilisateur1_idx` (`Utilisateur_nSS` ASC) VISIBLE,
  CONSTRAINT `fk_Test_Mesure`
    FOREIGN KEY (`Mesure_id_mesure`)
    REFERENCES `prepafly`.`Mesure` (`id_mesure`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Test_Utilisateur1`
    FOREIGN KEY (`Utilisateur_nSS`)
    REFERENCES `prepafly`.`Utilisateur` (`nSS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `prepafly`.`Utilisateur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`Utilisateur` (
  `nSS` INT NOT NULL,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `age` VARCHAR(2) NULL,
  `pilote` VARCHAR(1) NULL,
  `manager` VARCHAR(1) NULL,
  `admin` VARCHAR(1) NULL,
  `mail` VARCHAR(60) NULL,
  `adresse` VARCHAR(200) NULL,
  `Compagnie aérienne_id_compagnie` INT NOT NULL,
  `Test_id_test` INT NOT NULL,
  `Utilisateur_nSS` INT NOT NULL,
  PRIMARY KEY (`nSS`),
  INDEX `fk_Utilisateur_Compagnie aérienne1_idx` (`Compagnie aérienne_id_compagnie` ASC) VISIBLE,
  INDEX `fk_Utilisateur_Test1_idx` (`Test_id_test` ASC) VISIBLE,
  INDEX `fk_Utilisateur_Utilisateur1_idx` (`Utilisateur_nSS` ASC) VISIBLE,
  CONSTRAINT `fk_Utilisateur_Compagnie aérienne1`
    FOREIGN KEY (`Compagnie aérienne_id_compagnie`)
    REFERENCES `prepafly`.`Compagnie aérienne` (`id_compagnie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Utilisateur_Test1`
    FOREIGN KEY (`Test_id_test`)
    REFERENCES `prepafly`.`Test` (`id_test`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Utilisateur_Utilisateur1`
    FOREIGN KEY (`Utilisateur_nSS`)
    REFERENCES `prepafly`.`Utilisateur` (`nSS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `prepafly`.`FAQ`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `prepafly`.`FAQ` (
  `id_question` INT NOT NULL,
  `question` VARCHAR(500) NULL,
  `reponse` VARCHAR(500) NULL,
  PRIMARY KEY (`id_question`))
ENGINE = InnoDB;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;