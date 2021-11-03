SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema bd_restaurante
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bd_restaurante
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_restaurante` DEFAULT CHARACTER SET utf8 ;
USE `bd_restaurante` ;

-- -----------------------------------------------------
-- Table `bd_restaurante`.`tbl_sala`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_restaurante`.`tbl_sala` (
  `id_sal` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_sal` ENUM("Sala romance", "Terraza atardecer", "Terraza baja", "Sala central", "Sala superior") NULL DEFAULT NULL,
  `capacidad_sal` INT(3) NULL DEFAULT NULL,
  PRIMARY KEY (`id_sal`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bd_restaurante`.`tbl_mesa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_restaurante`.`tbl_mesa` (
  `id_mes` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_mes` VARCHAR(45) NULL DEFAULT NULL,
  `status_mes` ENUM("Libre", "Mantenimiento", "Ocupado/Reservado") NOT NULL,
  `capacidad_mes` INT(3) NOT NULL,
  `id_sal_fk` INT(11) NOT NULL,
  PRIMARY KEY (`id_mes`),
  INDEX `fk_sala_mesa_idx` (`id_sal_fk` ASC),
  CONSTRAINT `fk_sala_mesa`
    FOREIGN KEY (`id_sal_fk`)
    REFERENCES `bd_restaurante`.`tbl_sala` (`id_sal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bd_restaurante`.`tbl_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_restaurante`.`tbl_usuario` (
  `id_use` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_use` VARCHAR(45) NULL DEFAULT NULL,
  `email_use` VARCHAR(50) NOT NULL,
  `pwd_use` VARCHAR(50) NOT NULL,
  `tipo_use` ENUM('Camarero', 'Admin', 'Mantenimiento') NOT NULL,
  PRIMARY KEY (`id_use`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `bd_restaurante`.`tbl_reserva`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bd_restaurante`.`tbl_reserva` (
  `id_res` INT(11) NOT NULL AUTO_INCREMENT,
  `horaIni_res` TIME NOT NULL,
  `horaFin_res` TIME NULL DEFAULT NULL,
  `datos_res` VARCHAR(30) NOT NULL,
  `id_use_fk` INT(11) NOT NULL,
  `id_mes_fk` INT(11) NOT NULL,
  PRIMARY KEY (`id_res`),
  INDEX `fk_mesa_reserva_idx` (`id_mes_fk` ASC),
  INDEX `fk_usuario_reserva_idx` (`id_use_fk` ASC),
  CONSTRAINT `fk_mesa_reserva`
    FOREIGN KEY (`id_mes_fk`)
    REFERENCES `bd_restaurante`.`tbl_mesa` (`id_mes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_reserva`
    FOREIGN KEY (`id_use_fk`)
    REFERENCES `bd_restaurante`.`tbl_usuario` (`id_use`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;