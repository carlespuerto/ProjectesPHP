-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-02-2014 a las 13:11:34
-- Versión del servidor: 5.5.35
-- Versión de PHP: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `aeroport`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pilots`
--

CREATE TABLE IF NOT EXISTS `pilots` (
  `nifpilot` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `nom` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `cognoms` text COLLATE utf8_spanish_ci NOT NULL,
  `telefon` text COLLATE utf8_spanish_ci NOT NULL,
  `adreca` text COLLATE utf8_spanish_ci NOT NULL,
  `numAterratges` int(11) NOT NULL,
  `numHoresVol` double NOT NULL,
  `actiu` tinyint(1) NOT NULL,
  PRIMARY KEY (`nifpilot`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pilots`
--

INSERT INTO `pilots` (`nifpilot`, `nom`, `cognoms`, `telefon`, `adreca`, `numAterratges`, `numHoresVol`, `actiu`) VALUES
('52165327q', 'Carles', 'Puerto Escayola', '655079064', 'casa del pilot 2', 346, 99, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
