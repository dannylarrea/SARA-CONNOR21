I jerk to Anime
#3723
₿

skrisirex — hoy a las 16:36
.hide {
  display: none;
}

.flex-cv, .region-login form.login-form, .region-salas, .region-salas .grid-salas .sala, .region-mesas .mesa, .popup form {
  display: -webkit-box;
Expandir
style.css
12 KB
///////////////////////////////////////////////////
/////Colores, Mixins, y classes compartidas
///////////////////777
.hide {
    display: none;
}
Expandir
style.scss
11 KB
function showPass() {
    var x = document.getElementById("login_password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
Expandir
js.js
3 KB
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
Expandir
mesa2.svg
3 KB
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
Expandir
mesa4.svg
4 KB
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
Expandir
mesa6.svg
5 KB
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
Expandir
mesa10.svg
8 KB
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
Expandir
login.php
2 KB
<!DOCTYPE html>
<?php
    session_start();
    if (isset($_SESSION['email']))
    {
    
Expandir
menu.php
4 KB
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
Expandir
reservas.php
4 KB
<?php //mirar si esta la sesion iniciada
    include_once '../services/mesa.php';
    include_once '../services/connection.php';
        session_start();
    if (isset($_SESSION['email']))
    {
Expandir
sala.php
6 KB
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2021 a las 19:35:19
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesa`
--
create database `bd_restaurante`;
use `bd_restaurante`;
CREATE TABLE `tbl_mesa` (
  `id_mes` int(11) NOT NULL,
  `nombre_mes` varchar(45) DEFAULT NULL,
  `status_mes` enum('Libre','Mantenimiento','Ocupado/Reservado') NOT NULL,
  `capacidad_mes` int(3) NOT NULL,
  `id_sal_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_mesa`
--

INSERT INTO `tbl_mesa` (`id_mes`, `nombre_mes`, `status_mes`, `capacidad_mes`, `id_sal_fk`) VALUES
(1, NULL, 'Libre', 2, 1),
(2, NULL, 'Libre', 2, 1),
(3, NULL, 'Libre', 2, 1),
(4, NULL, 'Libre', 2, 1),
(5, NULL, 'Libre', 2, 1),
(6, NULL, 'Libre', 2, 1),
(7, NULL, 'Libre', 2, 1),
(8, NULL, 'Libre', 2, 1),
(9, NULL, 'Libre', 2, 1),
(10, NULL, 'Libre', 2, 1),
(11, NULL, 'Libre', 2, 1),
(12, NULL, 'Libre', 2, 1),
(13, NULL, 'Libre', 4, 1),
(14, NULL, 'Libre', 4, 1),
(15, NULL, 'Libre', 2, 2),
(16, NULL, 'Libre', 2, 2),
(17, NULL, 'Libre', 2, 2),
(18, NULL, 'Libre', 2, 2),
(19, NULL, 'Libre', 4, 2),
(20, NULL, 'Libre', 4, 2),
(21, NULL, 'Libre', 4, 2),
(22, NULL, 'Libre', 4, 2),
(23, NULL, 'Libre', 6, 2),
(24, NULL, 'Libre', 6, 2),
(25, NULL, 'Libre', 6, 2),
(26, NULL, 'Libre', 10, 2),
(27, NULL, 'Libre', 2, 3),
(28, NULL, 'Libre', 2, 3),
(29, NULL, 'Libre', 4, 3),
(30, NULL, 'Libre', 4, 3),
(31, NULL, 'Libre', 4, 3),
(32, NULL, 'Libre', 4, 3),
(33, NULL, 'Libre', 4, 3),
(34, NULL, 'Libre', 4, 3),
(35, NULL, 'Libre', 2, 4),
(36, NULL, 'Libre', 2, 4),
(37, NULL, 'Libre', 4, 4),
(38, NULL, 'Libre', 4, 4),
(39, NULL, 'Libre', 4, 4),
(40, NULL, 'Libre', 6, 4),
(41, NULL, 'Libre', 6, 4),
(42, NULL, 'Ocupado/Reservado', 2, 5),
(43, NULL, 'Libre', 2, 5),
(44, NULL, 'Libre', 4, 5),
(45, NULL, 'Libre', 4, 5),
(46, NULL, 'Libre', 4, 5);





-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

... (148 líneas restantes)
Contraer
CreateDB.sql
8 KB
﻿
-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-11-2021 a las 19:35:19
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mesa`
--
create database `bd_restaurante`;
use `bd_restaurante`;
CREATE TABLE `tbl_mesa` (
  `id_mes` int(11) NOT NULL,
  `nombre_mes` varchar(45) DEFAULT NULL,
  `status_mes` enum('Libre','Mantenimiento','Ocupado/Reservado') NOT NULL,
  `capacidad_mes` int(3) NOT NULL,
  `id_sal_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_mesa`
--

INSERT INTO `tbl_mesa` (`id_mes`, `nombre_mes`, `status_mes`, `capacidad_mes`, `id_sal_fk`) VALUES
(1, NULL, 'Libre', 2, 1),
(2, NULL, 'Libre', 2, 1),
(3, NULL, 'Libre', 2, 1),
(4, NULL, 'Libre', 2, 1),
(5, NULL, 'Libre', 2, 1),
(6, NULL, 'Libre', 2, 1),
(7, NULL, 'Libre', 2, 1),
(8, NULL, 'Libre', 2, 1),
(9, NULL, 'Libre', 2, 1),
(10, NULL, 'Libre', 2, 1),
(11, NULL, 'Libre', 2, 1),
(12, NULL, 'Libre', 2, 1),
(13, NULL, 'Libre', 4, 1),
(14, NULL, 'Libre', 4, 1),
(15, NULL, 'Libre', 2, 2),
(16, NULL, 'Libre', 2, 2),
(17, NULL, 'Libre', 2, 2),
(18, NULL, 'Libre', 2, 2),
(19, NULL, 'Libre', 4, 2),
(20, NULL, 'Libre', 4, 2),
(21, NULL, 'Libre', 4, 2),
(22, NULL, 'Libre', 4, 2),
(23, NULL, 'Libre', 6, 2),
(24, NULL, 'Libre', 6, 2),
(25, NULL, 'Libre', 6, 2),
(26, NULL, 'Libre', 10, 2),
(27, NULL, 'Libre', 2, 3),
(28, NULL, 'Libre', 2, 3),
(29, NULL, 'Libre', 4, 3),
(30, NULL, 'Libre', 4, 3),
(31, NULL, 'Libre', 4, 3),
(32, NULL, 'Libre', 4, 3),
(33, NULL, 'Libre', 4, 3),
(34, NULL, 'Libre', 4, 3),
(35, NULL, 'Libre', 2, 4),
(36, NULL, 'Libre', 2, 4),
(37, NULL, 'Libre', 4, 4),
(38, NULL, 'Libre', 4, 4),
(39, NULL, 'Libre', 4, 4),
(40, NULL, 'Libre', 6, 4),
(41, NULL, 'Libre', 6, 4),
(42, NULL, 'Ocupado/Reservado', 2, 5),
(43, NULL, 'Libre', 2, 5),
(44, NULL, 'Libre', 4, 5),
(45, NULL, 'Libre', 4, 5),
(46, NULL, 'Libre', 4, 5);





-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

CREATE TABLE `tbl_reserva` (
  `id_res` int(11) NOT NULL,
  `horaIni_res` datetime NOT NULL,
  `horaFin_res` datetime DEFAULT NULL,
  `datos_res` varchar(30) NOT NULL,
  `id_use_fk` int(11) NOT NULL,
  `id_mes_fk` int(11) NOT NULL,
  `id_sal_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_reserva`
--

INSERT INTO `tbl_reserva` (`id_res`, `horaIni_res`, `horaFin_res`, `datos_res`, `id_use_fk`, `id_mes_fk`,`id_sal_fk`) VALUES
(1, '2021-11-05 19:10:41', '2021-11-05 17:37:26', 'Loko', 2, 2, 1),
(3, '2021-11-05 17:04:34', '2021-11-05 17:30:02', 'Starkiller', 2, 8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sala`
--

CREATE TABLE `tbl_sala` (
  `id_sal` int(11) NOT NULL,
  `nombre_sal` varchar(50) DEFAULT NULL,
  `capacidad_sal` int(3) DEFAULT NULL,
  `imagen_sal` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_sala`
--

INSERT INTO `tbl_sala` (`id_sal`, `nombre_sal`, `capacidad_sal`, `imagen_sal`) VALUES
(1, 'Sala romance', 32, 'heart-dynamic-color.png'),
(2, 'Salón Sol', 52, 'sun-dynamic-color.png'),
(3, 'Sala gourmet', 28, 'glass-dynamic-color.png'),
(4, 'Terraza Luna', 28, 'moon-dynamic-clay.png'),
(5, 'Terraza estrellas', 16, 'star-dynamic-color.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `id_use` int(11) NOT NULL,
  `nombre_use` varchar(45) DEFAULT NULL,
  `email_use` varchar(50) NOT NULL,
  `pwd_use` varchar(50) NOT NULL,
  `tipo_use` enum('Camarero','Admin','Mantenimiento') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_use`, `nombre_use`, `email_use`, `pwd_use`, `tipo_use`) VALUES
(1, 'Alfredo', 'blumal@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055', 'Camarero'),
(2, 'Isaac', 'isaac@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055', 'Camarero'),
(3, 'Raul', 'raulseleccion@fje.edu', '1fa3356b1eb65f144a367ff8560cb406', 'Camarero');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  ADD PRIMARY KEY (`id_mes`),
  ADD KEY `fk_sala_mesa_idx` (`id_sal_fk`);

--
-- Indices de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD PRIMARY KEY (`id_res`),
  ADD KEY `fk_mesa_reserva_idx` (`id_mes_fk`),
  ADD KEY `fk_usuario_reserva_idx` (`id_use_fk`);

--
-- Indices de la tabla `tbl_sala`
--
ALTER TABLE `tbl_sala`
  ADD PRIMARY KEY (`id_sal`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_use`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_sala`
--
ALTER TABLE `tbl_sala`
  MODIFY `id_sal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_use` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_mesa`
--
ALTER TABLE `tbl_mesa`
  ADD CONSTRAINT `fk_sala_mesa` FOREIGN KEY (`id_sal_fk`) REFERENCES `tbl_sala` (`id_sal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD CONSTRAINT `fk_mesa_reserva` FOREIGN KEY (`id_mes_fk`) REFERENCES `tbl_mesa` (`id_mes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_reserva` FOREIGN KEY (`id_use_fk`) REFERENCES `tbl_usuario` (`id_use`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sal_reserva` FOREIGN KEY (`id_sal_fk`) REFERENCES `tbl_mesa` (`id_sal_fk`) ON DELETE NO ACTION ON UPDATE NO ACTION;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
CreateDB.sql
8 KB