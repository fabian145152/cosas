-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2021 a las 21:41:41
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
-- Base de datos: `cosas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` bigint(4) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `calle` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `numero` varchar(5) CHARACTER SET utf8mb4 DEFAULT NULL,
  `barrio` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `cp` int(4) DEFAULT NULL,
  `telefono` varchar(13) CHARACTER SET utf8mb4 DEFAULT NULL,
  `celular` varchar(20) CHARACTER SET utf8mb4 DEFAULT NULL,
  `correo` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `calle`, `numero`, `barrio`, `cp`, `telefono`, `celular`, `correo`) VALUES
(4, 'Candela', 'Martin Fierro', '4520', 'Villa Bosch', 1650, '45782145', '1152541479', 'candela@gmail.com'),
(6, 'Carlitos', '25 de Mayo', '5241', 'San Martin', 1650, '457889563', '1145784512', 'carlitos@gmail.com'),
(7, 'Joya', 'Jaureguy', '430', 'Centro', 850, '12457854', '1145784512', 'joya@gmail.com'),
(8, 'Carlos                        ', 'Cochabamba ', '154', 'Centro', 1000, '48445956', '1152541479', 'fet@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id` int(3) NOT NULL,
  `CODIGOARTICULO` varchar(4) CHARACTER SET utf8mb4 DEFAULT NULL,
  `producto` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `cantidad` int(5) DEFAULT NULL,
  `proveedor` varchar(25) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `CODIGOARTICULO`, `producto`, `cantidad`, `proveedor`) VALUES
(0, 'CA01', 'Pepas', 15, 'Gaona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `PASSWORD` char(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `initial_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_users`, `username`, `PASSWORD`, `email`, `initial_date`) VALUES
(1, 'Maria', 'e10adc3949ba59abbe56e057f20f883e', 'maria@gmail.com', '2021-09-14 03:00:00'),
(2, 'Fabián', 'e10adc3949ba59abbe56e057f20f883e', 'fabian@gmail.com', '2021-09-14 03:00:00'),
(3, 'Lucas', 'e10adc3949ba59abbe56e057f20f883e', 'lucas@gmail.com', '2021-09-14 03:00:00'),
(4, 'Sofia', 'e10adc3949ba59abbe56e057f20f883e', 'Sofia@gmail.com', '2021-09-14 03:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
