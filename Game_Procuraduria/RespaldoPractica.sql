-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2023 a las 15:48:41
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
-- Base de datos: `procuraduria`
--
CREATE DATABASE IF NOT EXISTS `procuraduria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `procuraduria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `id` int(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `ronda` varchar(255) NOT NULL,
  `correctas` varchar(255) NOT NULL,
  `incorrectas` varchar(255) NOT NULL,
  `preguntas_anuladas` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participantes`
--

CREATE TABLE `participantes` (
  `id` int(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `participantes`
--

INSERT INTO `participantes` (`id`, `equipo`, `cantidad`) VALUES
(1, 'A', 7),
(2, 'B', 7),
(3, 'C', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id` int(255) NOT NULL,
  `pregunta` varchar(2000) NOT NULL,
  `respuesta1` varchar(2000) NOT NULL,
  `respuesta2` varchar(2000) NOT NULL,
  `respuesta3` varchar(2000) NOT NULL,
  `respuesta4` varchar(2000) NOT NULL,
  `respuestacorrecta` varchar(2000) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id`, `pregunta`, `respuesta1`, `respuesta2`, `respuesta3`, `respuesta4`, `respuestacorrecta`, `status`) VALUES
(1, '¿Cuál es el río más largo del mundo?', 'El Cuyuni', 'El Mariano', 'El Amazonas', 'Orinoco', 'C', 'No Contestada'),
(2, '¿Qué tipo de animal es la ballena? ', 'Mamifero', 'Acuatico', 'Terrestre', 'Antropogo', 'A', 'Preguntada'),
(3, '¿Cuándo murió Freddie Mercury? ', '24/11/2023', '24/11/1991', '14/05/1992', '18/10/1993', 'B', 'No Contestada'),
(4, '¿Quién es Jeff Bezos?', 'El Fundador de Amazon', 'El Fundador de Apple', 'El Fundador de Nescafe', 'El Fundador de Dell', 'A', 'No Contestada'),
(5, '¿En qué año comenzó la II Guerra Mundial?', '1935', '1915', '1939', '1811', 'C', 'No Contestada'),
(6, '¿Quién ganó el mundial de fútbol de 2014? ', 'Rusia', 'Argentina', 'Venezuela', 'Alemania', 'D', 'No Contestada'),
(7, '¿Quién fue el auténtico padre de la electricidad? ', 'Albert Einstein', 'Roberto Carlos', 'Nikosla Tesla', 'Francisco Miranda', 'C', 'No Contestada'),
(8, '¿Cuánto vale el número pi?', '1.11552', '.555.22', '1.1444', '3,1416', 'D', 'No Contestada'),
(9, '¿Quién es el CEO de Tesla?', 'Jeff Bezos', 'Elon Musk', 'Maduro', 'Jeff Marzo', 'B', 'No Contestada'),
(10, '¿Qué es un ovíparo?', 'Un anilmal dentro de un huevo', 'Un animal que nace dentro de un huevo', 'Un animal que acaba de salir de un huevo', 'Un animal que murio dentro de un huevo', 'B', 'No Contestada'),
(11, '¿Cuándo acabó la II Guerra Mundial?', '1935', '1949', '1945', '1920', 'C', 'No Contestada'),
(12, '¿Cuál era el apellido de la reina Isabel II de Inglaterra?', 'Tercera', 'Windsor', 'Gonzalez', 'Salas', 'B', 'Preguntada'),
(13, '¿En qué año se aprobó la actual Constitución española?', '1978', '1980', '1995', '1960', 'A', 'No Contestada'),
(14, '¿Qué día es la fiesta nacional de Estados Unidos?', '4 de Julio', '10 de Marzo', '11 de Septiembre', '24 de Diciembre', 'A', 'No Contestada'),
(15, '¿En qué país se usó la primera bomba atómica?', 'Japon', 'Brasil', 'Venezuela', 'Siria', 'A', 'No Contestada'),
(16, '¿Cuántas veces ha estado el hombre en la Luna?', '4', '5', '6', '3', 'C', 'No Contestada'),
(17, '¿En qué año llegó Cristóbal Colón a América?', '1580', '1492', '1840', '1200', 'B', 'No Contestada'),
(18, '¿En qué año cayó el muro de Berlín?', '1850', '1989', '1950', '2000', 'B', 'Preguntada'),
(19, '¿Cuándo se extinguieron los dinosaurios?', '20 Millones de años', '54 Millones de años', '36 Millones de años', '66 Millones de Años', 'C', 'No Contestada'),
(20, '¿En qué país nació Adolf Hitler?', 'Alemania', 'Austria', 'Brasil', 'San Petesburgo', 'B', 'No Contestada'),
(21, '¿Cuánto duró “La Guerra de los Cien Años”?', '120 Años', '116 Años', '135 Años', '100 Años', 'B', 'No Contestada'),
(22, '¿Quién fue el último faraón de Egipto?', 'Ramsés III', 'Ferseo II', 'Persefone IV', 'Salador VII', 'A', 'No Contestada'),
(23, '¿Cuándo empezó la Revolución Rusa?', '1918', '1917', '1920', '1915', 'B', 'No Contestada'),
(24, '¿Cuál fue el genocidio más grande de la historia?', 'La Caida de las Torres de Gemelas', 'La Caida del Muro de Berlin', 'El Holocausto', 'El asesinato de los judios', 'C', 'No Contestada'),
(25, '¿Dónde se encuentra la Sagrada Familia?', 'Brasil', 'España', 'Barcelona', 'Inglaterra', 'C', 'No Contestada'),
(26, '¿Dónde está la Casa Blanca?', 'Texas', 'Washington D.C', 'California', 'Miami', 'B', 'No Contestada'),
(27, '¿Dónde se inventó la pizza?', 'Napoles', 'Rusia', 'Francia', 'India', 'A', 'No Contestada'),
(28, '¿Cómo se llama el río más famoso de Egipto?', 'El Amazonas', 'El Nilo', 'El Pacifico', 'El Salado', 'B', 'No Contestada'),
(29, '¿Cuál es el continente más extenso del planeta?', 'Asia', 'America', 'Europa', 'Ninguna de las Anteriores', 'A', 'No Contestada'),
(30, '¿Cuál es el país más visitado del mundo?', 'Francia', 'El Vaticano', 'Brasil', 'Venezuela', 'A', 'No Contestada'),
(31, '¿Dónde se queda lo que pasa en Las Vegas?', 'En los hoteles', 'En el casino', 'En las capillas', 'Ninguna de las Anteriores', 'C', 'No Contestada'),
(32, '¿Cuál es la ciudad más poblada del mundo?', 'Tokio', 'Santiago de Chile', 'Hiroshima', 'Ciudad Bolivar', 'A', 'No Contestada'),
(33, '¿Cuántos países tiene África?', '20', '54', '30', '20', 'B', 'No Contestada'),
(34, '¿Cuántos huesos hay en el cuerpo humano adulto?', '206', '150', '220', '120', 'A', 'No Contestada'),
(35, '¿Qué es más grande un átomo o una célula?', 'Atomo', 'Celula', 'No se', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(36, '¿Cuál es el animal más grande de la Tierra?', 'El tiburon blanco', 'La ballena Jorobada', 'La ballena azul', 'El elefante', 'C', 'Preguntada'),
(37, '¿Cuántos corazones tiene un pulpo?', '1', '2', '3', '4', 'C', 'No Contestada'),
(38, '¿Cuál es el órgano más grande del cuerpo humano?', 'El esqueleto', 'La piel', 'El cabello', 'Los Brazos', 'B', 'No Contestada'),
(39, '¿Cuál es el mineral más duro del planeta?', 'Oro', 'Diamante', 'Cobre', 'Metal', 'B', 'No Contestada'),
(40, '¿Qué órgano del cuerpo consume más energía?', 'El corazon', 'El cerebro', 'Las extremidades', 'Los ojos', 'B', 'No Contestada'),
(41, '¿Cuántos dientes tiene un humano adulto?', '20', '30', '32', '45', 'C', 'Preguntada'),
(42, '¿Cuántas patas tiene una araña?', '8', '5', '4', '9', 'A', 'No Contestada'),
(43, '¿En qué mes del año el Sol está más cerca de la Tierra', 'Enero', 'Diciembre', 'Marzo', 'Julio', 'B', 'No Contestada'),
(44, '¿Cuántos días tiene un año bisiesto?', '365', '364', '366', '367', 'C', 'No Contestada'),
(45, '¿Cuántas vertebras posee el cuerpo humano?', '22', '33', '40', '25', 'B', 'Preguntada'),
(46, '¿En qué año nació Salvador Dalí?', '1904', '1905', '1920', '1902', 'A', 'No Contestada'),
(47, '¿Cuántas películas hay de Saw?', '9', '5', '4', '2', 'A', 'No Contestada'),
(48, '¿A qué año viajan Marty y Doc en Regreso al futuro II?', '1905', '2015', '1950', '2000', 'B', 'No Contestada'),
(49, '¿Quién creo los cómics de Spiderman?', 'Stan Lee', 'Salvador Dali', 'Marvel', 'DC', 'A', 'No Contestada'),
(50, '¿Quién es el máximo goleador de la historia del fútbol?', 'Messi', 'Cristiano Ronaldo', 'Mbappe', 'Iker Casillas', 'B', 'No Contestada'),
(51, '¿Qué selección ha ganado más Copas Mundiales de Fútbol?', 'Brasil', 'Colombia', 'Alemania', 'Argentina', 'A', 'No Contestada'),
(52, '¿Quién es el futbolista con más balones de oro?', 'Messi', 'Cristiano Ronaldo', 'Mbappe', 'Iker Casillas', 'A', 'No Contestada'),
(53, '¿Cuántos anillos hay en la bandera olímpica?', '4', '5', '6', '8', 'C', 'No Contestada'),
(54, '¿Qué equipo juega en el Parque de los Príncipes?', 'PSG', 'Real Madrid', 'Barcelona', 'Ninguno de los Anteriores', 'A', 'No Contestada'),
(55, '¿Quién ganó el Mundial de 2022?', 'Brasil', 'Francia', 'Argentina', 'Venezuela', 'C', 'No Contestada'),
(56, '¿Cuánto dura una maratón?', '42 Km', '20 Km', '30 Km', '60 Km', 'A', 'No Contestada'),
(57, '¿Cuántos jugadores hay en un equipo de béisbol?', '10', '15', '9', '8', 'C', 'No Contestada'),
(58, '¿Qué país ganó la Copa del Mundo 2018?', 'Francia', 'Brasil', 'Venezuela', 'Alemania', 'A', 'Preguntada'),
(59, '¿En qué ciudad se encuentra el estadio popularmente conocido como La Bombonera?', 'Paris', 'Buenos Aires', 'Santiago de Chile', 'Barcelona', 'B', 'Preguntada'),
(60, '¿Cuánto dura la prórroga en un partido de fútbol?', '30 Min', '20 Min', '15 Min', '45 Min', 'A', 'No Contestada'),
(61, '¿Cuánto dura un round de boxeo masculino?', '3 Min', '10 Min', '5 Min', '20 Min', 'A', 'No Contestada'),
(62, '¿Cuántos campeonatos ganó Michael Jordan con los Chicago Bulls?', '6', '5', '4', '3', 'A', 'No Contestada'),
(63, '¿Cuál es el deporte más practicado en el mundo?', 'Artes Marciales', 'Natacion', 'Salto con Palanca', 'Futbol', 'B', 'No Contestada'),
(64, '¿En qué deporte tendrías un touchdown?', 'Futbol Americano', 'Rugby', 'Futbol Sala', 'Beisbol', 'B', 'No Contestada'),
(65, '¿Cuántas veces ha ganado España un Mundial?', '1', '2', '3', '4', 'A', 'No Contestada'),
(66, '¿Cuándo se publicó la primera parte de Don Quijote de la Mancha?', '1906', '1605', '1950', '1600', 'B', 'No Contestada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respaldos`
--

CREATE TABLE `respaldos` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `respaldos`
--

INSERT INTO `respaldos` (`id`, `nombre`, `ruta`, `fecha`) VALUES
(1, 'pgeb-2023-01-25.sql', 'C:/xampp/htdocs/Procuraduria', '2023-01-25'),
(2, 'pgeb-2023-01-25.sql', 'C:/xampp/htdocs/Procuraduria', '2023-01-25'),
(3, 'pgeb-2023-01-27.sql', 'C:/xampp/htdocs/Procuraduria', '2023-01-27'),
(4, 'pgeb-2023-01-27.sql', 'C:/xampp/htdocs/Procuraduria', '2023-01-27'),
(5, 'pgeb-2023-02-01.sql', 'C:/xampp/htdocs/Procuraduria', '2023-02-01'),
(6, 'pgeb-2023-02-08.sql', 'C:/xampp/htdocs/Procuraduria', '2023-02-08'),
(7, 'pgeb-2023-02-10.sql', 'C:/xampp/htdocs/Procuraduria', '2023-02-10'),
(8, 'pgeb-2023-03-03.sql', 'C:/xampp/htdocs/Procuraduria', '2023-03-03'),
(9, 'pgeb-2023-03-08.sql', 'C:/xampp/htdocs/Procuraduria', '2023-03-08'),
(10, 'pgeb-2023-03-10.sql', 'C:/xampp/htdocs/Procuraduria', '2023-03-10'),
(11, 'pgeb-2023-03-13.sql', 'C:/xampp/htdocs/Procuraduria', '2023-03-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `roles` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `cedula`, `roles`) VALUES
(1, '13657269', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajadores`
--

CREATE TABLE `trabajadores` (
  `id` int(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `resolucion` varchar(255) DEFAULT NULL,
  `fechresolucion` date DEFAULT NULL,
  `nomina` varchar(255) NOT NULL,
  `sueldo` varchar(255) NOT NULL,
  `centpago` varchar(255) DEFAULT NULL,
  `adscrito` varchar(255) DEFAULT NULL,
  `antiguedad` varchar(255) NOT NULL DEFAULT '0',
  `profesion` varchar(255) NOT NULL DEFAULT '0',
  `hijos` varchar(255) NOT NULL DEFAULT '0',
  `nrocuenta` varchar(255) NOT NULL,
  `tipcuenta` int(255) NOT NULL,
  `cestaT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `trabajadores`
--

INSERT INTO `trabajadores` (`id`, `nombres`, `apellidos`, `cedula`, `cargo`, `resolucion`, `fechresolucion`, `nomina`, `sueldo`, `centpago`, `adscrito`, `antiguedad`, `profesion`, `hijos`, `nrocuenta`, `tipcuenta`, `cestaT`) VALUES
(1, 'SOLANGGE DEL CARMEN', 'CASTRO HINOJOSA', '8868657', 'PROCURADOR GENERAL', '123456462', '2018-03-19', 'Alto Funcionario', '409', 'BANCO DE VENEZUELA', 'Despacho del Procurador ', '30', '30', '0', '01020635920000042479', 0, '45'),
(2, 'RICARDO ENRIQUE', 'BERNAL LIZARDI', '16914525', 'DIRECTOR GENERAL', '445522154', '2021-01-11', 'Alto Nivel', '391', 'BANCO DE VENEZUELA', 'Despacho del Procurador', '11', '25', '2', '01020635910000052883', 0, '45'),
(3, 'ROSIVIS', 'FARIAS RIVERO', '6.954.619', 'DIRECTORA DE TALENTO HUMANO', '100-110-0042/2022 ', '2022-10-24', 'Alto Nivel', '376.00', 'BANCO DE VENEZUELA', 'DESPACHO DEL PROCURADOR', '18.00', '30', '0', '01020414360000107068', 0, '45'),
(4, 'MAYERLING', 'CASTRO HINOJOSA', '10565869', 'DIRECTORA RESPONSABILIDAD SOCIAL Y ATENCIÓN A LA CIUDADANÍA', '55844412', '2018-08-31', 'Alto Nivel', '376', 'BANCO DE VENEZUELA', 'Despacho del Procurador ', '13.80', '20', '0', '01020635920000140931', 0, '45'),
(5, ' JOSÉ REINALDO', 'FRANCO', '10049489', 'DIRECTOR DE ADMINISTRACIÓN (e)', '22258441', '2019-10-01', 'Alto Nivel', '376', 'BANCO DE VENEZUELA', 'Despacho del Procurador ', '3', '35', '0', '01020414320000846167', 0, '45'),
(6, 'ANGEL ANIBAL', 'ASCANIO', '18237190', 'DIRECTOR DE REGISTRO DE BIENES, MTTO Y SERV. GRALES. (COMISIÓN DE SERVICIO)', '454844212', '2019-03-18', 'Alto Nivel', '13', 'BANCO DE VENEZUELA', 'Despacho del Procurador ', '12.40', '25', '1', '01020635980000025483', 0, '27'),
(7, 'STEFANY MARIA', 'GUAURA BERTI', '21608801', 'DIRECTORA DE  ASUNTOS LEGALES', '88744412', '2014-08-04', 'Alto Nivel', '376', 'BANCO DE VENEZUELA', 'Dirección de Asuntos Legales', '8.60', '25', '1', '01020635900000155942', 0, '45'),
(8, 'MILAGRO DEL C', 'MACHADO ALMADA ', '11168416', 'COORD EJECUTIVA DEL DESPACHO DEL PROCURADOR', '66632114', '2012-02-01', 'Alto Nivel', '348', 'BANCO DE VENEZUELA', 'Despacho del Procurador', '19.60', '20', '0', '01020635980000048651', 0, '45'),
(9, 'HAYDELIS', 'ESPINOZA DE REQUENA', '14044189', 'COORD. DE REGISTRO DE BIENES, MTTO. Y SERV GENERALES', '1114741', '2015-05-06', 'Alto Nivel', '348', 'BANCO DE VENEZUELA', 'Despacho del Procurador ', '7.40', '20', '2', '01020635960000195795', 0, '45'),
(10, 'EDUARDO JOSE', 'MARQUINA RAMOS', '14883663', 'COORDINADOR DE DICTAMENES, CONTRATOS Y OPINIONES JURID', '77411224', '2017-07-01', 'Alto Nivel', '348', 'BANCO DE VENEZUELA', 'Dirección de Asuntos Legales', '19.60', '25', '0', '01020414390000128542', 0, '45'),
(11, 'SIUDY MARELVIS', 'INFANTE BRITO ', '13326473', 'COORDINADOR DE TALENTO HUMANO', '2224121', '2021-12-01', 'Alto Nivel', '348', 'BANCO DE VENEZUELA', 'Dirección deTalento Humano', '4', '25', '1', '01020414340000728845', 0, '45'),
(12, 'YANIHOT EDUARDO', 'LUGO GARCIA', '30385423', 'COORDINADOR DE SISTEMAS Y SOPORTE TÉCNICO', '00025456', '2021-11-04', 'Alto Nivel', '348.00', 'BANCO DE VENEZUELA', 'DESPACHO DEL PROCURADOR', '4', '0', '0', '01020414300000804141', 0, '45'),
(13, 'CARLA ', 'TRIAS SALAS', '22817345', 'COORDINADOR DE ADMINISTRACIÓN Y FINANZAS', '22241154', '0000-00-00', 'Alto Nivel', '348', 'BANCO DE VENEZUELA', 'Despacho del Procurador ', '3', '25', '1', '01020635980000207670', 0, '45'),
(14, 'ANA YECENIA', 'ESPAÑA', '13920259', 'COORDINADOR DE ATENCIÓN AL CIUDADANO', '77411541', '2022-02-17', 'Alto Nivel', '348', 'BANCO DE VENEZUELA', 'Despacho del Procurador ', '2', '20', '0', '01020635970000052935', 0, '45'),
(15, 'RENE RAFAEL ', 'PUERTA MATA', '8853145', 'COORD. DE FORMULACIÓN, CONTROL Y EJECUCION PRESUPUESTARIA', '42525252', '2022-06-06', 'Alto Nivel', '348.00', 'BANCO DE VENEZUELA', 'DESPACHO DEL PROCURADOR', '22.80', '25', '0', '01020635980000073422', 0, '45'),
(16, 'MOISES FRANCISCO', 'CELIS SALAZAR', '27438841', 'COORDINADOR DE SISTEMAS Y SOPORTE TÉCNICO (E) ', '100-110-0014/2023', '2021-11-02', 'Alto Nivel', '348.00', 'BANCO DE VENEZUELA', 'DESPACHO DEL PROCURADOR', '4', '20', '0', '01020414330000781442', 0, '45'),
(17, 'LEISY LEYSANDER', 'SALAZAR RUIZ', '17162661', 'ASISTENTE DE REGISTRO DE BIENES', '2221541', '2015-08-17', 'Empleado', '177', 'BANCO DE VENEZUELA', 'Dirección de Bienes', '7.40', '0', '2', '01020635990000191977', 0, '45'),
(18, 'MILENIS JOSÉ', 'RODRIGUEZ', '17633481', 'ABOGADO PROCURADOR DE LITIGIOS', '222114411', '2021-01-16', 'Empleado', '305', 'BANCO DE VENEZUELA', 'Dirección de Asuntos Legales', '2', '25', '1', '01020640530000223405', 0, '45'),
(19, 'YANITZA MAGDALENA', 'INFANTE', '17383870', 'PROMOTOR SOCIAL DE ATENCIÓN A LA CIUDADANIA', '114412365', '2018-06-21', 'Empleado', '203', 'BANCO DE VENEZUELA', 'Dirección de Responsabilidad Social y Atención a la Ciudadanía', '4', '0', '0', '01020788620100002805', 1, '45'),
(20, 'CINDY ISAMAR', 'INFANTE MARTINEZ', '23551159', 'ASISTENTE DE MANTENIMIENTO Y SERVICIOS GENERALES', '55541124', '2022-02-01', 'Empleado', '316', 'BANCO DE VENEZUELA', 'Dirección de Bienes', '1', '25', '0', '01020414370001106217', 0, '45'),
(21, 'AIDA MARIA', 'PACHECO MAITA', '13657269', 'PROMOTOR SOCIAL DE ATENCIÓN A LA CIUDADANIA', '4252526262', '2021-11-04', 'Empleado', '228.00', 'Banco de Venezuela', 'Dirección de Responsabilidad Social y Atención a la Ciudadanía', '13.80', '20', '2', '01020414380000862235', 0, '45'),
(22, 'YUTSI DEL VALLE', 'PEÑALVER DE RANGEL', '11202458', 'ABOGADO PROCURADOR DE LITIGIOS', '', '2022-05-06', 'Empleado', '316', 'BANCO DE VENEZUELA', 'Dirección de Asuntos Legales', '19.60', '25', '1', '01020457700000122522', 0, '45'),
(23, 'DARWIN JOSE', 'ZAMORA IBARRA', '28694047', 'ANALISTA DE SISTEMAS', '100-110-0007-2023', '2023-01-02', 'Empleado', '228', 'BANCO DE VENEZUELA', 'Coordinación de Sistemas y Soporte Técnico', '0', '0', '0', '01020414390000994077', 0, '45'),
(24, 'YOBEL ALBERTO', 'IRIARTE LARA', '24849503', 'ANALISTA ADMINISTRATIVO', '555441212', '2023-01-11', 'Empleado', '316', 'BANCO DE VENEZUELA', 'Direccion de Administracion', '0', '0', '0', '01020414300001410864', 0, '45'),
(25, 'JUAN CARLOS', 'ASCANIO PULIDO', '10049990', 'CHOFER', '', '2023-01-16', 'Empleado', '228', 'BANCO DE VENEZUELA', 'Dirección de Bienes', '4', '0', '0', '01020457770100634000', 1, '45'),
(26, 'ZUNILDE', 'SIFONTES', '10573385', 'ASEADORA', '1155441233', '2018-06-11', 'Obrero', '171', 'BANCO DE VENEZUELA', 'Dirección de Bienes', '4', '0', '0', '01020788690000098232', 0, '45'),
(27, 'DIGNA DEL VALLE', 'HERNÁNDEZ', '7877725', 'MANTENIMIENTO Y SERVICIOS GENERALES', '666887445', '2022-02-17', 'Obrero', '132', 'BANCO DE VENEZUELA', 'Dirección de Bienes', '1', '0', '0', '01020635910000444611', 0, '45'),
(28, 'IVAN JUNIOR', 'VERA BENAVIDES', '26744514', 'MANTENIMIENTO Y SERVICIOS GENERALES', '55744451', '2022-06-16', 'Obrero', '171', 'BANCO DE VENEZUELA', 'Dirección de Bienes', '4', '0', '0', '01020414300000822039', 0, '45'),
(29, 'GILDA', 'RODRIGUEZ', '5551362', 'PENSIONADA', '00000000', '0000-00-00', 'Pension', '130', 'BANCO DE VENEZUELA', 'Pensionada', '0', '0', '0', '01020635940000043517', 0, '45'),
(30, 'VICTOR', 'PANTOJA', '3610305', 'PENSIONADO', '00000000', '0000-00-00', 'Pension', '130', 'BANCO DE VENEZUELA', 'Pensionado', '0', '0', '0', '01020635900000043478', 0, '45'),
(31, 'MOISES', 'PEREZ', '8868263', 'PENSIONADO', '00000000', '0000-00-00', 'Pension', '130', 'BANCO DE VENEZUELA', 'Pensionado', '0', '0', '0', '01020635900000043559', 0, '45'),
(32, 'ALBA', 'LORETO', '4031187', 'JUBILADA', '00000000', '0000-00-00', 'Jubilacion', '130', 'BANCO DE VENEZUELA', 'Jubilada', '0', '0', '0', '01020635910000043494', 0, '45'),
(33, 'YADIRA', 'VASQUEZ', '5556488', 'JUBILADA', '00000000', '0000-00-00', 'Jubilacion', '130', 'BANCO DE VENEZUELA', 'Jubilada', '0', '0', '0', '01020635960000043533', 0, '45'),
(34, 'CARMEN', 'APONTE', '5555646', 'PENSION DE SOBREVIVIENTE', '00000000', '0000-00-00', 'Jubilacion', '130', 'BANCO DE VENEZUELA', 'Jubilada', '0', '0', '0', '01020635940000043520', 0, '45'),
(35, 'MILAGROS DEL C.', 'FAJARDO DE VIERA ', '8874124', 'JUBILADA', '00000000', '0000-00-00', 'Jubilacion', '130', 'BANCO DE VENEZUELA', 'Jubilada', '0', '0', '0', '01020635910000043575', 0, '45'),
(36, 'LUIS ALBERTO', 'GUILLEN RODRIGUEZ', '8878329', 'JUBILADO', '00000000', '0000-00-00', 'Jubilacion', '130', 'BANCO DE VENEZUELA', 'Jubilada', '0', '0', '0', '01020635930000043588', 0, '45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilegio` varchar(255) NOT NULL,
  `roles` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cedula`, `password`, `privilegio`, `roles`) VALUES
(1, '27438841', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0', 0),
(3, '000000000', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0', 0),
(4, '28694047', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2', 8),
(5, '18237190', '7c4a8d09ca3762af61e59520943dc26494f8941b', '3', 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `participantes`
--
ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respaldos`
--
ALTER TABLE `respaldos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
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
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `respaldos`
--
ALTER TABLE `respaldos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trabajadores`
--
ALTER TABLE `trabajadores`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
