-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2021 a las 15:05:16
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empanadas`
--
CREATE DATABASE IF NOT EXISTS `empanadas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `empanadas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(255) NOT NULL,
  `bebida` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `cantidad` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `bebida`, `precio`, `cantidad`) VALUES
(1, 'Coca Cola 1 LTS', '0.5', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(255) NOT NULL,
  `empanada` varchar(255) NOT NULL,
  `bebida` varchar(255) NOT NULL,
  `cantidadE` varchar(255) NOT NULL,
  `cantidadB` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `precioT` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `empanada`, `bebida`, `cantidadE`, `cantidadB`, `ubicacion`, `precioT`, `fecha`, `usuario`) VALUES
(2, 'Empanada de Carne Mechada', 'Coca Cola 1 LTS', '2', '2', 'Los Proceres Casa 51 Manzana 13', '3', '2021-12-02', ''),
(3, 'Empanada de Carne Mechada', 'Coca Cola 1 LTS', '1', '1', 'Los Proceres Casa 51 Manzana 13', '1.5', '2021-12-02', ''),
(4, 'Empanada de Carne Mechada', 'Coca Cola 1 LTS', '1', '1', 'Los Proceres Casa 51 Manzana 13', '1.5', '2021-12-02', ''),
(5, 'Empanada de Carne Mechada', 'Coca Cola 1 LTS', '10', '10', 'Los Proceres Casa 51 Manzana 13', '15', '2021-12-02', 'Moises');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id` int(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id`, `ubicacion`, `usuario`) VALUES
(1, 'Los Proceres Casa 51 Manzana 13', 'Moises'),
(2, 'Casco Historico Calle 13', 'Moises');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id` int(255) NOT NULL,
  `ingredientes` varchar(255) NOT NULL,
  `cantidad` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id`, `ingredientes`, `cantidad`) VALUES
(4, 'Harina Pan', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `empanada` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `cantidad` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `empanada`, `precio`, `cantidad`) VALUES
(2, 'Empanada de Carne Mechada', '1', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `privilegio` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`, `email`, `privilegio`) VALUES
(2, 'moises', 'celis', 'moises', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'moisescelis21@gmail.com', '1'),
(3, 'rafael', 'berroteran', 'rafael', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'rafaellaputa@gmail.com', '0'),
(4, 'holi', 'holi', 'holi', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'holi@gmail.com', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
