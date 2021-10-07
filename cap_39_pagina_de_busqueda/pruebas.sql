-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2021 a las 23:41:33
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datospersonales`
--

CREATE TABLE `datospersonales` (
  `NIF` varchar(10) CHARACTER SET utf8mb4 DEFAULT NULL,
  `nombre` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `apellido` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `edad` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datospersonales`
--

INSERT INTO `datospersonales` (`NIF`, `nombre`, `apellido`, `edad`) VALUES
('14952694', 'Fabian', 'Nogueroles', 58),
('15258639', 'Carlos', 'Perez', 61),
('20587456', 'Jorge', 'Mastrangelo', 72),
('20123456', 'Arturo', 'Martines', 60),
('20147258', 'Fabián', 'Carló', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `CODIGOARTICULO` varchar(5) DEFAULT NULL,
  `SECCION` varchar(10) DEFAULT NULL,
  `NOMBRE` varchar(18) DEFAULT NULL,
  `PRECIO` varchar(7) DEFAULT NULL,
  `FECHA` varchar(10) DEFAULT NULL,
  `IMPORTADO` varchar(9) DEFAULT NULL,
  `PAISDEORIGEN` varchar(9) DEFAULT NULL,
  `FOTO` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`CODIGOARTICULO`, `SECCION`, `NOMBRE`, `PRECIO`, `FECHA`, `IMPORTADO`, `PAISDEORIGEN`, `FOTO`) VALUES
('AR01', 'FERRETERIA', 'DESTORNILLADOR', '6,63', '22/10/2000', 'FALSO', 'ESPAÑA', NULL),
('AR02', 'CONFECCION', 'TRAJE CABALLERO', '284,58', '11/3/2002', 'VERDADERO', 'ITALIA', NULL),
('AR03', 'JUGETERIA', 'COCHE TELEDIRIGIDO', '159,45', '26/5/2002', 'VERDADERO', 'MARRUECOS', NULL),
('AR04', 'DEPORTES', 'RAQUETA TENIS', '93,47', '20/3/2000', 'VERDADERO', 'USA', NULL),
('AR06', 'DEPORTES', 'MANCUERNA', '60,00', '13/9/2000', 'VERDADERO', 'USA', NULL),
('AR07', 'CONFECCION', 'SERRUCHO', '30,20', '23/3/2001', 'VERDADERO', 'FRANCIA', NULL),
('AR08', 'JUGETERIA', 'CORREPAS', '103,34', '11/4/2000', 'VERDADERO', 'JAPON', NULL),
('AR09', 'CONFECCION', 'PANTALON SEÑORA', '174,23', '10/1/2000', 'VERDADERO', 'MARRUECOS', NULL),
('AR10', 'JUGETERIA', 'CONSOLA VIDEO', '442,54', '24/9/2002', 'VERDADERO', 'USA', NULL),
('AR11', 'CERAMICA', 'TUBOS', '168,43', '4/2/2000', 'VERDADERO', 'CHINA', NULL),
('AR12', 'FERRETERIA', 'LLAVE INGLESA', '24,40', '23/5/2001', 'VERDADERO', 'USA', NULL),
('AR13', 'CONFECCION', 'CAMISA CABALLERO', '67,13', '11/8/2002', 'FALSO', 'ESPAÑA', NULL),
('AR14', 'JUGETERIA', 'TREN ELECTRICO', '1505,38', '3/7/2001', 'VERDADERO', 'JAPON', NULL),
('AR15', 'CERAMICA', 'PLATO DECORADO', '54,09', '7/6/2000', 'VERDADERO', 'CHINA', NULL),
('AR16', 'FERRETERIA', 'ALICATE', '6,74', '17/4/2000', 'VERDADERO', 'ITALIA', NULL),
('AR17', 'JUGETERIA', 'MUNECA ARTICULADA', '105,06', '4/1/2001', 'FALSO', 'ESPAÑA', NULL),
('AR18', 'DEPORTES', 'PISTOLA OLIMPICA', '46,73', '2/2/2001', 'VERDADERO', 'SUECIA', NULL),
('AR019', 'CONFECCION', 'BLUSA SEÑORA', '101,35', '18/3/2000', 'VERDADERO', 'CHINA', NULL),
('AR20', 'CERAMICA', 'JUEGO DE TE', '43,27', '15/1/2001', 'VERDADERO', 'CHINA', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos3`
--

CREATE TABLE `productos3` (
  `CODIGOARTICULO` varchar(4) DEFAULT NULL,
  `SECCION` varchar(11) DEFAULT NULL,
  `NOMBREARTICULO` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos3`
--

INSERT INTO `productos3` (`CODIGOARTICULO`, `SECCION`, `NOMBREARTICULO`) VALUES
('AR01', 'DEPORTES', 'RAQUETA'),
('AR02', 'FERRETERIA', 'TRINCHETA');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
