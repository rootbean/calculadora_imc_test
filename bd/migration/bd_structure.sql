
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema imc_test_celia
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema imc_test_celia
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `imc_test_celia` DEFAULT CHARACTER SET utf8 ;
USE `imc_test_celia` ;

-- -----------------------------------------------------
-- Table `imc_test_celia`.`tipos_documentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imc_test_celia`.`tipos_documentos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(10) NOT NULL,
  `descripcion` VARCHAR(40) NULL,
  `fecha_registro` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `activo` TINYINT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `imc_test_celia`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imc_test_celia`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(30) NOT NULL,
  `apellidos` VARCHAR(30) NOT NULL,
  `numero_documento` VARCHAR(20) NULL,
  `email` VARCHAR(60) NOT NULL,
  `password` VARCHAR(200) NOT NULL,
  `rol` ENUM("admin", "user") NULL DEFAULT 'user',
  `avatar` VARCHAR(200) NULL,
  `fecha_nacimiento` DATE NULL,
  `fecha_registro` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `activo` TINYINT NULL DEFAULT 1,
  `tipos_documentos_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  INDEX `fk_usuarios_tipos_documentos_idx` (`tipos_documentos_id` ASC) VISIBLE,
  CONSTRAINT `fk_usuarios_tipos_documentos`
    FOREIGN KEY (`tipos_documentos_id`)
    REFERENCES `imc_test_celia`.`tipos_documentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `imc_test_celia`.`resultados_imc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `imc_test_celia`.`resultados_imc` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `estatura` FLOAT NOT NULL,
  `peso` FLOAT NOT NULL,
  `fecha_registro` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  `activo` TINYINT NULL DEFAULT 1,
  `usuarios_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_resultados_imc_usuarios1_idx` (`usuarios_id` ASC) VISIBLE,
  CONSTRAINT `fk_resultados_imc_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `imc_test_celia`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;