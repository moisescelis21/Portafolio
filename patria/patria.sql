-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2021 a las 07:59:55
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `patria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargafamiliar`
--

CREATE TABLE `cargafamiliar` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `edad` int(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `cedulaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargafamiliar`
--

INSERT INTO `cargafamiliar` (`id`, `name`, `cedula`, `edad`, `sexo`, `direccion`, `cedulaje`) VALUES
(1, 'Moises', '28188841', 21, 'Masculino', 'Los proceres', '27438841'),
(3, 'Fa', '27438843', 21, 'Masculino', 'Los proceres', '27438841'),
(4, 'SkullSupreme', '27438842', 21, 'Masculino', 'Los proceres', '27438841');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefecasa`
--

CREATE TABLE `jefecasa` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `edad` int(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `agregado` varchar(255) NOT NULL,
  `carga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefecasa`
--

INSERT INTO `jefecasa` (`id`, `name`, `cedula`, `edad`, `sexo`, `direccion`, `agregado`, `carga`) VALUES
(1, 'Moises', '27438841', 21, 'Masculino', 'Los proceres', 'Moises', 3),
(2, 'udeinys', '55454554', 21, 'Femenino', 'Los proceres', 'Moises', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lideres`
--

CREATE TABLE `lideres` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `edad` int(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `agregado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lideres`
--

INSERT INTO `lideres` (`id`, `name`, `cedula`, `edad`, `sexo`, `direccion`, `agregado`) VALUES
(1, 'dsafa', '28188841', 21, 'Masculino', 'Los proceres', 'Moises'),
(2, 'Fa', '27438842', 21, 'Femenino', 'Los proceres', 'Moises');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creacion` date NOT NULL,
  `privilegio` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `email`, `password`, `creacion`, `privilegio`) VALUES
(1, 'udeinys', 'holi@gmail.com', '123456', '2021-10-26', 1),
(2, 'Moises', 'moisescelis21@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-10-26', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargafamiliar`
--
ALTER TABLE `cargafamiliar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jefecasa`
--
ALTER TABLE `jefecasa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lideres`
--
ALTER TABLE `lideres`
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
-- AUTO_INCREMENT de la tabla `cargafamiliar`
--
ALTER TABLE `cargafamiliar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `jefecasa`
--
ALTER TABLE `jefecasa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `lideres`
--
ALTER TABLE `lideres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
