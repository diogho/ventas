-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-01-2015 a las 04:29:18
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ventas`
--
CREATE DATABASE IF NOT EXISTS `ventas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ventas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbperfil`
--

DROP TABLE IF EXISTS `tbperfil`;
CREATE TABLE IF NOT EXISTS `tbperfil` (
`id` int(2) NOT NULL,
  `nombre` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tbperfil`
--

INSERT INTO `tbperfil` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'vendedor'),
(3, 'supervisor'),
(4, 'inventario'),
(5, 'logistica'),
(6, 'contador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `documento` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `idperfil` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbusuario`
--

INSERT INTO `tbusuario` (`documento`, `nombre`, `telefono`, `direccion`, `idperfil`) VALUES
('1072665508', 'Andres', '8638608', 'Cra', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbperfil`
--
ALTER TABLE `tbperfil`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
 ADD PRIMARY KEY (`nombre`), ADD KEY `idperfil` (`idperfil`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbperfil`
--
ALTER TABLE `tbperfil`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbusuario`
--
ALTER TABLE `tbusuario`
ADD CONSTRAINT `tbusuario_ibfk_1` FOREIGN KEY (`idperfil`) REFERENCES `tbperfil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
