-- MySQL Workbench Synchronization
-- Generated: 2016-04-12 01:18
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: Evandro vasconcelos

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `pidev2016` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

CREATE TABLE IF NOT EXISTS `pidev2016`.`gastronomia` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `prato` VARCHAR(45) NOT NULL COMMENT '',
  `valor` FLOAT(11) NOT NULL COMMENT '',
  `receita` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
