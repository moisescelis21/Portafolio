-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2023 a las 19:41:44
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `liceo`
--
CREATE DATABASE IF NOT EXISTS `liceo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `liceo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `cedula` int(255) NOT NULL,
  `edad` int(255) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `seccion` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `aniocurso` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `nombres`, `apellidos`, `cedula`, `edad`, `anio`, `seccion`, `direccion`, `aniocurso`, `turno`) VALUES
(9, 'Moises', 'Celis', 27438841, 23, '1', 'A', 'Los proceres', '2023-2024', 'Mañana');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(255) NOT NULL,
  `materias` varchar(255) NOT NULL,
  `año` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `materias`, `año`) VALUES
(1, 'Castellano', 1),
(2, 'Ingles y otras lenguas extranjeras', 1),
(3, 'Matematicas', 1),
(4, 'Educacion Fisica', 1),
(5, 'Artes y Patrimonio', 1),
(6, 'Ciencias Naturales', 1),
(7, 'Geografia Historia y Ciudadania', 1),
(8, 'Orientacion y Convivencia', 1),
(9, 'Participación en grupos ', 1),
(10, 'Castellano', 2),
(11, 'Ingles y otras lenguas extranjeras', 2),
(12, 'Matematicas', 2),
(13, 'Educacion Fisica', 2),
(14, 'Artes y Patrimonio', 2),
(15, 'Ciencias Naturales', 2),
(16, 'Geografia Historia y Ciudadania', 2),
(17, 'Orientacion y Convivencia', 2),
(18, 'Participación en grupos ', 2),
(19, 'Castellano', 3),
(20, 'Ingles y otras lenguas extranjeras', 3),
(21, 'Matematicas', 3),
(22, 'Educacion Fisica', 3),
(23, 'Fisica', 3),
(24, 'Quimica', 3),
(25, 'Biologia', 3),
(26, 'Geografia Historia y Ciudadania', 3),
(27, 'Formacion Para la Soberania Nacional', 3),
(28, 'Castellano', 4),
(29, 'Ingles y otras lenguas extranjeras', 4),
(30, 'Matematicas', 4),
(31, 'Fisica', 4),
(32, 'Educacion Fisica', 4),
(33, 'Quimica', 4),
(34, 'Biologia', 4),
(35, 'Biologia', 4),
(36, 'Geografia Historia y Ciudadania', 4),
(37, 'Formacion Para la Soberania Nacional', 4),
(38, 'Castellano', 5),
(39, 'Ingles y otras lenguas extranjeras', 5),
(40, 'Matematicas', 5),
(41, 'Educacion Fisica', 5),
(42, 'Fisica', 5),
(43, 'Quimica', 5),
(44, 'Biologia', 5),
(45, 'Ciencias Naturales', 5),
(46, 'Geografia Historia y Ciudadania', 5),
(47, 'Formacion Para la Soberania Nacional', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(255) NOT NULL,
  `materia` varchar(255) NOT NULL,
  `nota1` varchar(255) NOT NULL,
  `nota2` varchar(255) NOT NULL,
  `nota3` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `año` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `materia`, `nota1`, `nota2`, `nota3`, `cedula`, `año`) VALUES
(73, 'Castellano', '20', '20', '20', '27438841', 1),
(74, 'Ingles y otras lenguas extranjeras', '20', '20', '20', '27438841', 1),
(75, 'Matematicas', '20', '20', '20', '27438841', 1),
(76, 'Educacion Fisica', '20', '20', '20', '27438841', 1),
(77, 'Artes y Patrimonio', '20', '20', '20', '27438841', 1),
(78, 'Ciencias Naturales', '20', '20', '20', '27438841', 1),
(79, 'Geografia Historia y Ciudadania', '20', '20', '20', '27438841', 1),
(80, 'Orientacion y Convivencia', '20', '20', '20', '27438841', 1),
(81, 'Participación en grupos ', '20', '20', '20', '27438841', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(255) NOT NULL,
  `pregunta1` varchar(255) NOT NULL,
  `respuesta1` varchar(255) NOT NULL,
  `pregunta2` varchar(255) NOT NULL,
  `respuesta2` varchar(255) NOT NULL,
  `pregunta3` varchar(255) NOT NULL,
  `respuesta3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldos`
--

CREATE TABLE `respaldos` (
  `id` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `respaldos`
--

INSERT INTO `respaldos` (`id`, `nombre`, `ruta`, `fecha`) VALUES
('id', 'liceo-2023-03-29.sql', 'C:/xampp/htdocs/liceo', '2023-03-29');

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
  `cedula` int(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `admin` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `password`, `cedula`, `correo`, `admin`) VALUES
(3, 'Moises', 'Celis', 'Moises', '7c4a8d09ca3762af61e59520943dc26494f8941b', 27438841, 'moisescelis21@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
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
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
