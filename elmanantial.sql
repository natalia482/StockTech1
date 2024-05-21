-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2023 a las 23:50:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `elmanantial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoscliente`
--

CREATE TABLE `datoscliente` (
  `IDCLIENTE` int(5) NOT NULL,
  `ROL` varchar(30) NOT NULL,
  `NOMCLIENTE` varchar(40) NOT NULL,
  `CIUDCLIENTE` varchar(20) NOT NULL,
  `TDCLIENTE` varchar(3) NOT NULL,
  `DCMTOCLIENTE` varchar(10) NOT NULL,
  `EMAILCLIENTE` varchar(60) NOT NULL,
  `USUARIOCLIENTE` varchar(300) NOT NULL,
  `CONTRASENACLIENTE` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datoscliente`
--

INSERT INTO `datoscliente` (`IDCLIENTE`, `ROL`, `NOMCLIENTE`, `CIUDCLIENTE`, `TDCLIENTE`, `DCMTOCLIENTE`, `EMAILCLIENTE`, `USUARIOCLIENTE`, `CONTRASENACLIENTE`) VALUES
(5, 'CLIENTE', 'Natalia Villalobos', 'Fusa', 'C.C', '1003652717', 'Nataliavillalobos482@gmail.com', 'Natalia', '$2y$10$VHa0tgUzV7CXq9o2GBU/t.QKcDfom6E1hCStPItsTT97BJ.7oW4iK'),
(6, 'CLIENTE', 'Jomina', 'Fusa', 'C.C', '123456789', 'Jomina@gmail.com', 'Jomina', '$2y$10$QQH81derXCExcpldmYarUeZd94fwoFmbacK72svtsF2xkE5Ev/mDe'),
(7, 'CLIENTE', 'prueba', 'fusa', 'C.C', '12345', 'prueba@gmnail.com', 'prueba', '$2y$10$unSK5bmRB8ahkaaJxRuXseOFNd8LbJwA3yymSnkyn1jjHYpzE8EEC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosvendedor`
--

CREATE TABLE `datosvendedor` (
  `IDVENDEDOR` int(5) NOT NULL,
  `ROL` varchar(20) NOT NULL,
  `NOMVENDEDOR` varchar(40) NOT NULL,
  `CIUDADVENDEDOR` varchar(20) NOT NULL,
  `TDVENDEDOR` varchar(3) NOT NULL,
  `DCMTOVENDEDOR` varchar(10) NOT NULL,
  `EMAILVENDEDOR` varchar(60) NOT NULL,
  `USUARIOVENDEDOR` varchar(300) NOT NULL,
  `CONTRASENAVENDEDOR` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datosvendedor`
--

INSERT INTO `datosvendedor` (`IDVENDEDOR`, `ROL`, `NOMVENDEDOR`, `CIUDADVENDEDOR`, `TDVENDEDOR`, `DCMTOVENDEDOR`, `EMAILVENDEDOR`, `USUARIOVENDEDOR`, `CONTRASENAVENDEDOR`) VALUES
(3, 'VENDEDOR', 'prueba', 'prueba', 'C.C', '12345', 'prueba@gmail.com', 'prueba', '$2y$10$wFjbOta.6t6S5OATV3yGR.QO2Jco4xzHyCv4ofI.v6QcfbwlRXZgS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `IDFACTURA` int(5) NOT NULL,
  `IDPRODUCTO` int(5) NOT NULL,
  `CANTIDADPRODUCTO` int(5) NOT NULL,
  `TOTALPRODUCTO` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detallefactura`
--

INSERT INTO `detallefactura` (`IDFACTURA`, `IDPRODUCTO`, `CANTIDADPRODUCTO`, `TOTALPRODUCTO`) VALUES
(1, 2, 1, 2500),
(2, 2, 1, 2500),
(2, 1, 3, 21000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `idfactura` int(5) NOT NULL,
  `IDCLIENTE` int(5) NOT NULL,
  `TOTALFACTURA` float NOT NULL,
  `FECHAFACTURA` date NOT NULL,
  `ESTADO` varchar(20) NOT NULL DEFAULT 'PAGADA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`idfactura`, `IDCLIENTE`, `TOTALFACTURA`, `FECHAFACTURA`, `ESTADO`) VALUES
(1, 6, 2500, '2020-06-25', 'NOPAGO'),
(2, 6, 23500, '2020-06-26', 'NOPAGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `IDPRODUCTO` int(5) NOT NULL,
  `TIPOPLANTA` varchar(20) NOT NULL,
  `NOMPRODUC` varchar(20) NOT NULL,
  `NUMBOLSA` varchar(20) NOT NULL,
  `VUNITARIO` float NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `ESTADO` varchar(10) NOT NULL DEFAULT 'EN VENTA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`IDPRODUCTO`, `TIPOPLANTA`, `NOMPRODUC`, `NUMBOLSA`, `VUNITARIO`, `CANTIDAD`, `ESTADO`) VALUES
(1, 'Ornamental', 'CAYENO COMUN', '35', 6000, 1, 'EN VENTA'),
(2, 'Flor', 'Margarita', 'p14', 2500, 2, 'EN VENTA'),
(3, 'Abonos', 'triple 15', '1kg', 100000, 0, 'EN VENTA'),
(4, 'Cactus', 'cactus', 'p14', 3500, 0, 'AGOTADO'),
(5, 'Suculentas', 'SUCULENTAS', '35', 2500, 0, 'EN VENTA'),
(6, 'Ornamental', 'bonsay ', 'plato', 100000, 0, 'en venta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datoscliente`
--
ALTER TABLE `datoscliente`
  ADD PRIMARY KEY (`IDCLIENTE`);

--
-- Indices de la tabla `datosvendedor`
--
ALTER TABLE `datosvendedor`
  ADD PRIMARY KEY (`IDVENDEDOR`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD KEY `IDFACTURA` (`IDFACTURA`),
  ADD KEY `IDPRODUCTO` (`IDPRODUCTO`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`idfactura`),
  ADD KEY `IDCLIENTE` (`IDCLIENTE`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`IDPRODUCTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datoscliente`
--
ALTER TABLE `datoscliente`
  MODIFY `IDCLIENTE` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `datosvendedor`
--
ALTER TABLE `datosvendedor`
  MODIFY `IDVENDEDOR` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `idfactura` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `IDPRODUCTO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `detallefactura_ibfk_1` FOREIGN KEY (`IDFACTURA`) REFERENCES `factura` (`idfactura`) ON UPDATE CASCADE,
  ADD CONSTRAINT `detallefactura_ibfk_2` FOREIGN KEY (`IDPRODUCTO`) REFERENCES `producto` (`IDPRODUCTO`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`IDCLIENTE`) REFERENCES `datoscliente` (`IDCLIENTE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
