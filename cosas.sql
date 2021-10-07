-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2021 a las 16:45:30
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
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(4) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `direccion` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `telef` int(8) DEFAULT NULL,
  `celu` int(20) DEFAULT NULL,
  `barrio` varchar(15) CHARACTER SET utf8mb4 DEFAULT NULL,
  `cp` int(4) DEFAULT NULL,
  `correo` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `direccion`, `telef`, `celu`, `barrio`, `cp`, `correo`) VALUES
(1, 'Tota                          ', 'Bolivia 850                   ', 47092664, 1547092664, 'Martelli       ', 1603, 'tota@gmail.com'),
(2, 'Porota', 'Venezuela 5662', 78451258, 1532659865, 'Villa Martelli', 1603, 'pro@gmail.com'),
(4, 'Aga Pito', 'Cuba 5050', 45784578, 1512457889, 'Belgrano', 1020, 'aga@hotmail.com'),
(5, 'Twister Sister', 'Manaos 50', 45124578, 1532659865, 'Villa Bosch', 1408, 'twqister@gmail.com'),
(6, 'Papa Frita', 'Bolas 125', 21548754, 1545784512, 'Caceros', 1648, 'papa@gmail.com'),
(7, 'Juan Caca', 'Fecal 326', 45665111, 1545661111, 'Versalles', 1414, 'juan@gmail.com'),
(8, 'Jhony Westmuller ', 'Selva 2658', 44444444, 1111111111, 'Africa ', 2586, 'jhony@gmail.com'),
(9, 'Anselmo Ru', 'El Campo 589', 11111111, 1111111111, 'Pampa Del Infie', 258525, 'anselmo@gmail.com'),
(10, 'Garufa Fa', 'La Calle 9856', 65982356, 1512459865, 'Centro', 1102, 'garufa@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` bigint(4) NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `calle` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `numero` varchar(8) CHARACTER SET utf8mb4 DEFAULT NULL,
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
(6, 'Fabian                        ', '25 de Mayo                    ', '321     ', 'Pablo Podesta', 1650, ' 549116935623', '1145784512          ', 'carlitos@gmail.com'),
(7, 'Joya', 'Jaureguy', '430', 'Centro', 850, '12457854', '1145784512', 'joya@gmail.com'),
(8, 'Carlos                        ', 'Cochabamba ', '154', 'Centro', 1000, '48445956', '1152541479', 'fet@gmail.com'),
(9, 'Maria', 'Puyen', '2030', 'Versalles', 1414, '45668589', '1156888956', 'maria@gmail.com'),
(10, 'Jorge                         ', 'Corrientes                    ', '123     ', ' Flores        ', 1020, '1122222222   ', '1145665777          ', 'poya@gmail.com'),
(12, 'Moncho                        ', 'Posadas                       ', '2536    ', 'Pompeya        ', 1000, '78451245     ', '1125142587          ', 'ana@hotmail.com'),
(13, 'Barbi', 'Ecuador', '2020', 'Centro', 10010, '45781245', '2214512458', 'barbi@gmail.com'),
(14, 'Marcelo                       ', 'Lafuente                      ', '1499    ', 'Flores         ', 1245, '45665111     ', '1145784578', 'marcelo@hotmail.com'),
(16, 'Carmelo                       ', 'Cuchachcha                    ', '4578', 'Villa Celina', 54201, '45788956     ', '1145784512          ', 'agad@asdfg'),
(17, 'Gaston                        ', 'Rotemberg', '1245', 'Burzaco', 2582, '02320404241', '1145124578', 'lalomadeort0@ppp.com'),
(18, 'Etel Rojo                     ', 'Grecia                        ', '2025    ', 'Tucuman        ', 1120, '45124578     ', '1125852545          ', 'etel@gmail.com'),
(19, 'Marck Zuckerberk', 'EEUU', '4525', 'Loria', 2584, '89562312', '1178451245', 'mark@gmail.com'),
(20, 'Tincho Zabala', 'Cementerio', '222', 'Chacarita', 2584, '99999999', '1199999999', 'tin@gmail.com'),
(21, 'Alberto Azninni', 'La cerver', '2020', 'Devoto', 4578, '321654897', '3246476978', 'al@gmail.com'),
(22, 'Elmer                         ', 'Wenseslao del Tala            ', '850     ', 'Caseros        ', 1630, '56895656     ', '1145454545          ', 'elmer@gmail.com');

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
-- Estructura de tabla para la tabla `stock_productos`
--

CREATE TABLE `stock_productos` (
  `id` int(4) NOT NULL,
  `codigo` varchar(5) CHARACTER SET utf8mb4 NOT NULL,
  `seccion` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `nombre` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `proveedor` varchar(30) CHARACTER SET utf8mb4 NOT NULL,
  `stock` int(4) NOT NULL,
  `costo` decimal(7,2) NOT NULL,
  `precio_venta` decimal(7,2) NOT NULL,
  `obs` varchar(60) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `stock_productos`
--

INSERT INTO `stock_productos` (`id`, `codigo`, `seccion`, `nombre`, `proveedor`, `stock`, `costo`, `precio_venta`, `obs`) VALUES
(2, 'G002 ', 'Galletitas                    ', 'Pepas                         ', 'Gaona                         ', 35, '45.00', '60.00', 'Ver'),
(3, 'G003 ', 'Galletitas                    ', 'Vizcogitos de grasa           ', 'Don Satur                     ', 44, '60.00', '75.00', 'cal'),
(4, 'G001 ', 'Galletitas                    ', 'Scons                         ', 'Gaona                         ', 75, '45.00', '99.99', 'ver');

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
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `stock_productos`
--
ALTER TABLE `stock_productos`
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
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `stock_productos`
--
ALTER TABLE `stock_productos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
