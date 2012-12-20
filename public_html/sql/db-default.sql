SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `ipanema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `ipanema` ;

-- -----------------------------------------------------
-- Table `ipanema`.`administrator`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`administrator` (
  `idadministrator` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(45) NULL ,
  `password` CHAR(128) NULL ,
  PRIMARY KEY (`idadministrator`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`banner`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`banner` (
  `idbanner` INT NOT NULL AUTO_INCREMENT ,
  `url` VARCHAR(250) NULL ,
  `image` VARCHAR(250) NULL ,
  PRIMARY KEY (`idbanner`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`graduation`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`graduation` (
  `idgraduation` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(120) NULL ,
  `description` TEXT NULL ,
  `remuneration_bigenterprise` VARCHAR(100) NULL ,
  `remuneration_middleenterprise` VARCHAR(100) NULL ,
  `period` VARCHAR(100) NULL ,
  `duration` VARCHAR(100) NULL ,
  `vacancies` VARCHAR(45) NULL ,
  PRIMARY KEY (`idgraduation`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`module`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`module` (
  `idmodule` INT NOT NULL AUTO_INCREMENT ,
  `idgraduation` INT NOT NULL ,
  `name` VARCHAR(100) NULL ,
  `weekly_workload` VARCHAR(100) NULL ,
  `semester_hours` VARCHAR(100) NULL ,
  PRIMARY KEY (`idmodule`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`component`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`component` (
  `idcomponent` INT NOT NULL AUTO_INCREMENT ,
  `idmodule` INT NOT NULL ,
  `name` VARCHAR(100) NULL ,
  `weekly_workload` VARCHAR(100) NULL ,
  `semester_hours` VARCHAR(100) NULL ,
  PRIMARY KEY (`idcomponent`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`posgraduation`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`posgraduation` (
  `idposgraduation` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(120) NULL ,
  `objective` TEXT NULL ,
  `area` TEXT NULL ,
  `public` TEXT NULL ,
  `metodology` TEXT NULL ,
  `avaliation` TEXT NULL ,
  `workload` VARCHAR(100) NULL ,
  PRIMARY KEY (`idposgraduation`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`poscomponent`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`poscomponent` (
  `idposcomponent` INT NOT NULL AUTO_INCREMENT ,
  `idposgraduation` INT NOT NULL ,
  `name` VARCHAR(120) NULL ,
  PRIMARY KEY (`idposcomponent`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`content`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`content` (
  `idcontent` INT NOT NULL AUTO_INCREMENT ,
  `param` VARCHAR(100) NULL ,
  `value` TEXT NULL ,
  PRIMARY KEY (`idcontent`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`process`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`process` (
  `idprocess` INT NOT NULL AUTO_INCREMENT ,
  `code` VARCHAR(45) NULL ,
  `label` VARCHAR(45) NULL ,
  PRIMARY KEY (`idprocess`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`gallery`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`gallery` (
  `idgallery` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(100) NULL ,
  `description` VARCHAR(400) NULL ,
  PRIMARY KEY (`idgallery`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`photo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`photo` (
  `idphoto` INT NOT NULL AUTO_INCREMENT ,
  `idgallery` INT NOT NULL ,
  `image` VARCHAR(250) NULL ,
  PRIMARY KEY (`idphoto`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`video`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`video` (
  `idvideo` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(100) NULL ,
  `description` VARCHAR(400) NULL ,
  `iframe` TEXT NULL ,
  PRIMARY KEY (`idvideo`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`news`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`news` (
  `idnews` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(150) NULL ,
  `content` TEXT NULL ,
  `image` VARCHAR(250) NULL ,
  `date` DATE NULL ,
  PRIMARY KEY (`idnews`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `ipanema`.`course`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `ipanema`.`course` (
  `idcourse` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(120) NULL ,
  `description` TEXT NULL ,
  PRIMARY KEY (`idcourse`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
