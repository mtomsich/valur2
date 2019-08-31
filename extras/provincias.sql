-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-08-2019 a las 17:12:06
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbvalur`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `codProvincia` int(2) NOT NULL,
  `provincia` varchar(19) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`codProvincia`, `provincia`) VALUES
(1, 'BUENOS AIRES'),
(2, 'CABA'),
(3, 'CATAMARCA'),
(4, 'CHACO'),
(5, 'CHUBUT'),
(6, 'CORDOBA'),
(7, 'CORRIENTES'),
(8, 'ENTRE RIOS'),
(9, 'FORMOSA'),
(10, 'JUJUY'),
(11, 'LA PAMPA'),
(12, 'LA RIOJA'),
(13, 'MENDOZA'),
(14, 'MISIONES'),
(15, 'NEUQUEN'),
(16, 'RIO NEGRO'),
(17, 'SALTA'),
(18, 'SAN JUAN'),
(19, 'SAN LUIS'),
(20, 'SANTA CRUZ'),
(21, 'SANTA FE'),
(22, 'SANTIAGO DEL ESTERO'),
(23, 'TIERRA DEL FUEGO'),
(24, 'TUCUMAN');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`codProvincia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
