-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-04-2023 a las 04:24:44
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
(1, '¿Qué fecha tiene la Gaceta Oficial del Estado Bolívar, en la cual se publicó la Ley Orgánica de la Procuraduría General del Estado Bolívar?', '23-08-1994', '16-07- 1987', '13-08-2002', '02-01-1964', 'C', 'No Contestada'),
(2, 'Un objeto de la Ley Orgánica de la Procuraduría General del Estado Bolívar es:', 'Actuación en la defensa y protección de los derechos e intereses patrimoniales del Estado Bolívar.	', 'Tendrá potestad exclusiva para determinar responsabilidades administrativas y civiles culposas e indicios de responsabilidad penal. ', 'Proteger al trabajo como hecho social y garantizar los derechos de los trabajadores y de las trabajadoras.', 'Establecer el desarrollo integral de la Nación, los principios rectores para la conservación, defensa y mejoramiento del ambiente.', 'A', 'No Contestada'),
(3, 'Por mandato de la Constitución del Estado Bolívar, la Procuraduría General del Estado, es:', 'El órgano que compone, junto al alcalde, el ayuntamiento municipal o alcaldía.', 'Es el órgano que gestiona y promueve el desarrollo integral de sus habitantes, mediante la adopción y ejecución de planes y programas generales.', 'Es un organismo que regula el poder estatal y, también, las libertades fundamentales.', 'Es el órgano de asesoramiento jurídico del Poder Público Estadal, representante y defensor judicial y extrajudicial de los derechos e intereses patrimoniales del Estado Bolívar.', 'D', 'No Contestada'),
(4, '“Más vale pájaro en mano que cien…”', 'cantando', 'volando', 'riendo', 'bailando', 'B', 'No Contestada'),
(5, '“En casa de herrero, cuchillo de…”', 'oro', 'cobre', 'palo', 'hierro', 'C', 'No Contestada'),
(6, '¿Cuáles son los símbolos patrios de Venezuela?', 'el joropo, la cachapa y el café ', 'la arepa, el cochino frito y el papelón con limón', 'dulce de lechoza, la hallaca y el pan de jamón', 'la bandera, el escudo y el himno nacional	', 'D', 'No Contestada'),
(7, 'Los funcionarios públicos que, en el ejercicio de sus competencias, realicen actos extrajudiciales de convenimiento, desistimiento, de compromiso en árbitros, de conciliación o cualesquiera otros actos de disposición relacionados directa o indirectamente con los derechos e intereses patrimoniales del estado Bolívar, deben contar previamente con la opinión escrita y favorable del…', 'Contralor General del Estado Bolívar', 'Procurador General del Estado Bolívar', 'Defensor del Pueblo', 'Gobernador del Estado', 'B', 'No Contestada'),
(8, 'Los funcionarios de la Procuraduría General del Estado Bolívar y quienes actúen en su nombre, tendrán…', 'posibilidad de viajar por todo el país con gastos pagos.	', ' la función de autorizar al Presidente o Presidenta de la República para salir del territorio nacional.', 'acceso a los expedientes que se encuentren en los tribunales, registros, notarías y demás órganos nacionales, estadales y municipales, vinculados con las actuaciones que los mismos adelanten, de conformidad con la ley.', 'Nombrar y remover al Vicepresidente Ejecutivo o Vicepresidenta Ejecutiva, nombrar y remover los Ministros o Ministras.', 'C', 'No Contestada'),
(9, '¿Qué obligación tienen los funcionarios de la Procuraduría General del Estado Bolívar y quienes actúen en su nombre?', 'No divulgar ni conservar para su aprovechamiento personal o de terceros, la información o documentación a la cual tengan acceso o conocimiento como consecuencia del ejercicio de sus funciones, so pena de incurrir en las responsabilidades civiles, penales o administrativas a que haya lugar.', 'Gobernar y administrar el Estado.', 'Desarrollar un sistema integrado de inteligencia tributaria.', 'Hacer y cumplir las leyes', 'A', 'No Contestada'),
(10, '¿Cuál fue el primer nombre de Ciudad Bolívar?', 'Ciudad Bendita', 'Santo Tomás de la Nueva Guayana de la Angostura del Orinoco ', 'Ciudad de Río Grande', 'Ciudad Rivereña', 'B', 'No Contestada'),
(11, 'Los funcionarios judiciales, registradores, notarios y demás autoridades nacionales, estadales y municipales, están obligados a prestar gratuitamente los oficios legales de su ministerio a la Procuraduría General del Estado Bolívar; a informar a ésta de la existencia de cualquier hecho o acto que afecte algún derecho o interés patrimonial del Estado Bolívar y a remitirle, si fuere el caso, copia certificada de la documentación respectiva?', 'Falso', 'No sé', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(12, 'La Ley de la Procuraduría del Estado Bolívar establece que las normas contenidas en ella, son de orden público, y se aplicarán con preferencia a otras leyes estadales y deben interpretarse a favor de los:', 'derechos de los niños, niñas y adolescentes', 'derechos de la mujer', 'derechos universales', 'derechos e intereses patrimoniales del estado Bolívar', 'D', 'No Contestada'),
(13, '¿Cuál es la capital del municipio Piar del estado Bolívar?', 'Ciudad Piar', 'El Palmar', 'Upata', 'Tumeremo', 'C', 'No Contestada'),
(14, ' ¿Actualmente Ciudad Bolívar es la capital del municipio…?', 'Heres', 'Cedeño', 'Roscio', 'Angostura del Orinoco', 'D', 'No Contestada'),
(15, '¿Es competencia de la Procuraduría General del Estado Bolívar representar y defender judicial y extrajudicialmente los derechos e intereses patrimoniales del estado Bolívar?', 'Verdadero', ' No sé', 'Falso', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(16, '¿Está entre las atribuciones de la Procuraduría General del Estado Bolívar revisar y dictaminar sobre la legalidad de los contratos que involucren los intereses patrimoniales del Estado?', 'Falso', 'No sé ', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(17, '¿El Salto Ángel, el cual se encuentra ubicado en el estado Bolívar, es la cascada más alta del mundo?', 'No sé', 'Falso', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(18, '\"A ponerse las alpargatas que lo que viene es…\"', 'Salsa', 'Merengue', 'Joropo', 'Reggaeton', 'C', 'No Contestada'),
(19, 'Una de las atribuciones de la Procuraduría General del Estado Bolívar es:', 'Proponer, debatir, formular, decidir, gestionar y evaluar proyectos de política pública. ', 'Llevar adecuadamente un Registro y Control de los bienes muebles e inmuebles pertenecientes al Estado Bolívar.', 'Dirigir las relaciones exteriores de la República; celebrar y ratificar los tratados, convenios o acuerdos internacionales.', 'Designar al Comandante en Jefe de las Fuerzas Armadas', 'B', 'No Contestada'),
(20, 'Representar y defender al Estado Bolívar, en los juicios que se susciten con entes públicos o privados, por nulidad, caducidad, resolución, alcance, interpretación, cumplimiento de contratos que suscriban los órganos del Poder Público del Estado Bolívar y en especial sobre los contratos que celebre el Poder Ejecutivo del Estado Bolívar, es atribución de:', 'Consejo Legislativo del Estado Bolívar', 'SENIAT', 'Procuraduría General del Estado Bolívar', 'Contraloría del Estado Bolívar', 'C', 'No Contestada'),
(21, '¿La Procuraduría General del Estado Bolívar podrá asesorar jurídicamente a las fundaciones y asociaciones civiles del Estado, a los institutos autónomos, empresas y demás establecimientos públicos del Estado Bolívar cuando el asunto objeto de la consulta esté relacionado con los derechos e intereses patrimoniales del Estado Bolívar?', ' Falso', 'No sé', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(22, 'Las fundaciones y asociaciones civiles del Estado Bolívar; los institutos autónomos, empresas y demás establecimientos públicos del Estado Bolívar, tramitarán sus consultas a través del respectivo órgano de adscripción. Tales consultas deberán consignarse ante la Procuraduría General del Estado Bolívar acompañadas del… ', 'Presidente de la República', 'Consejo Comunal y sus voceros', 'Gobernador del Estado', 'expediente respectivo y de la opinión jurídica de sus correspondientes órganos asesores.', 'D', 'No Contestada'),
(23, 'Se entiende por autonomía organizativa de la Procuraduría General del Estado Bolívar…', 'Organizar la oficina', 'La potestad para definir y establecer el número y jerarquía de sus oficinas, dependencias y de los funcionarios que requiera para el logro de su misión, de conformidad con el reglamento orgánico que apruebe el Procurador General del Estado Bolívar, dentro de los límites establecidos en la presente ley. ', 'La Potestad de hacer leyes', 'Organizar su servicio interior de vigilancia y custodia', 'B', 'No Contestada'),
(24, '¿Cuál de estas opciones es leyenda del estado Bolívar?', ' La Sapoara', 'La serpiente de las siete cabezas', 'La tonina', 'El silbón', 'B', 'No Contestada'),
(25, 'Cuenta la historia  que también se le conoció a la “Piedra del medio”, ubicada en el Río Orinoco entre Ciudad Bolívar y Ciudad Orinoco (antigua Soledad), con el nombre de “Piedra del Arbolito”, púes hasta 1885 estuvo sobre ella un arbusto que talaron manos desconocidas.', 'Verdadero', ' Falso', 'No sé', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(26, 'El escudo del estado Bolívar tiene en el centro:', 'la Piedra del Medio y sobre ella una mujer indígena con un jarrón.', 'un caballo negro con cola blanca', 'la cara de Simón Bolívar', 'el Salto Ángel', 'A', 'No Contestada'),
(27, '¿En qué periodo el Dr. Aconcito Bozán se desempeñó como Procurador General del Estado Bolívar?', '2012-2022', '2005-2022', ' 2002-2021', '2008-2022', 'B', 'No Contestada'),
(28, 'El Procurador General del Estado Bolívar elaborará el proyecto anual de presupuesto de ingresos y gastos de la Procuraduría General del Estado Bolívar y lo remitirá al….', 'Consejo Comunal Cruz Verde', 'Tributos Bolívar', 'Poder Ejecutivo del Estado Bolívar para su incorporación al respectivo Proyecto de Ley de Presupuesto del Estado.', 'Fundación del Niño', 'C', 'No Contestada'),
(29, 'La Dirección de Administración es la encargada de…', 'asistir al Procurador General en lo referente a la emisión de dictámenes; supervisión y actuación en juicios; redacción, verificación y conformación de contratos de interés público; realización de estudios jurídicos…', 'asistir al Procurador General en el suministro y control de los recursos idóneos necesarios para el correcto funcionamiento de la institución, salvaguardando los intereses del Estado en materia económica, financiera y administrativa.', 'planificar, coordinar y supervisar las actividades del personal de la institución; recibe y examina las solicitudes de personal, supervisa la emisión de nóminas en lo que sea aplicable de acuerdo a la ley…', 'velar por el correcto funcionamiento del Archivo de Registro de Bienes del Estado Bolívar, ubicar y verificar la efectiva existencia y condiciones de los bienes documentados a nombre del Estado…', 'B', 'No Contestada'),
(30, 'Uno de los requisitos para ser designado Procurador General del Estado Bolívar es:', 'Mayor de dieciocho (18) años', 'Mayor de veinticinco (25) años', 'Mayor de cincuenta (50) años', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(31, 'Para ser Procurador General del Estado Bolívar, su profesión debe ser:', 'Abogado', 'Contador Público.', 'Administrador', 'Cualquier profesión', 'A', 'No Contestada'),
(32, 'Para ser Procurador General del Estado Bolívar se requiere ser:', 'De cualquier nacionalidad', 'De doble nacionalidad', 'Venezolano por naturalización', 'Venezolano por nacimiento', 'D', 'No Contestada'),
(33, 'Para ser Procurador General del Estado Bolívar se requiere:', 'Haber residido en el Estado Bolívar por lo menos cuatro años consecutivos antes de su designación.', 'Haber nacido en el Estado Bolívar', 'Haber residido en el Estado Bolívar mínimo un (01) año antes de su designación', 'Haber nacido en Ciudad Bolívar', 'A', 'No Contestada'),
(34, 'Para ser Procurador General del Estado Bolívar se requiere:', 'Gozar de solvencia moral y ética', 'Gozar de solvencia económica', 'Gozar de solvencia municipal', 'Gozar de solvencia técnica', 'A', 'No Contestada'),
(35, 'No podrá ser designado Procurador General del Estado Bolívar quien haya sido objeto de una decisión firme de destitución de cualquier organismo público nacional, estadal o municipal, en razón de un procedimiento disciplinario, o que haya sido condenado mediante sentencia definitivamente firme a pena de presidio o prisión.', 'No sé', 'Falso', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(36, 'Delegar en los funcionarios de la Procuraduría General del Estado Bolívar las competencias que tiene asignadas por ley, así como la firma de los documentos que estime necesarios es atribución de:', 'el Director de Administración', 'el Procurador General del Estado Bolívar', 'el Coordinador de Registro de Bienes, Mantenimiento y Servicios Generales', 'el Director de Asuntos Legales', 'B', 'No Contestada'),
(37, '¿El Procurador General del Estado Bolívar otorga poderes o mandatos a particulares, cuando la representación y defensa del interés del Estado Bolívar así lo requiera?', 'Falso', 'No sé', ' Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(38, 'Una de las atribuciones del Procurador General del Estado Bolívar es establecer directrices de integración y coordinación con:', 'las consultorías jurídicas de los órganos del Poder Público Estadal', 'los líderes de calle del CLAP', 'voceros de los consejos comunales', 'la Dirección de Recursos Humanos del Consejo Legislativo', 'A', 'No Contestada'),
(39, '¿Es atribución del Procurador General del Estado Bolívar, designar representantes de la Procuraduría General del Estado Bolívar ante los distintos organismos estadales y municipales?', 'No sé', 'Falso', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(40, 'Ante la falta absoluta del Procurador General del Estado Bolívar, será ejercido hasta la designación del titular por parte del Gobernador del Estado de conformidad con lo establecido en la Constitución del Estado y la Ley de la Procuraduría General del Estado Bolívar por:', 'el Administrador', 'el Director General', ' el Subprocurador', 'el Director de Talento Humano', 'C', 'No Contestada'),
(41, '¿La improbación por el Consejo Legislativo del Informe de gestión anual se considera una de las causas graves a los efectos de la destitución del Procurador General del Estado Bolívar?', 'Verdadero', 'No sé', 'Falso', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(42, 'El no presentar oportunamente el Informe de Gestión Anual al que se refiere el Artículo 175 de la Constitución del Estado Bolívar se considera… ', 'sin importancia', ' no tiene ningún efecto legal', 'una de las causas graves a los efectos de la destitución del Procurador General del Estado Bolívar', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(43, '¿En qué fecha se fundó la Procuraduría General del Estado Bolívar?', '05 de abril de 1969', '31 de diciembre de 1992', '05 de abril de 1902', '12 de febrero de 1998', 'C', 'No Contestada'),
(44, '¿Cuántos años de  fundada está cumpliendo la Procuraduría General del Estado         Bolívar?', '105 años', '118 años', '130 años', '121 años', 'D', 'No Contestada'),
(45, '¿Cuántos Procuradores aparecen en el reconocimiento que se encuentra ubicado en la sede de la Procuraduría General del Estado Bolívar?', '17', '20', '18', '10', 'C', 'No Contestada'),
(46, 'El Dr. Pacífico Rodríguez fue Procurador General entre los años…', '1959-1963', '1969-1963', '1958-1970', '1959-1964', 'A', 'No Contestada'),
(47, 'Para que proceda la destitución del Procurador General del Estado Bolívar, el Consejo Legislativo del Estado Bolívar, en Sesión Ordinaria o Especial convocada al efecto, nombrará una…', 'Comisión Permanente', 'Comisión de Servicio', 'Comisión Sustanciadora para que instruya el procedimiento sancionatorio a que haya lugar', 'Comisión de Paz', 'C', 'No Contestada'),
(48, 'La Dirección donde actualmente se encuentra la sede de la Procuraduría General del Estado Bolívar es….', 'Paseo Orinoco', 'Calle Amor Patrio', 'Av. Cruz Verde, diagonal Av. Táchira', 'Av. Cruz Verde, diagonal Av. Cedeño', 'D', 'No Contestada'),
(49, 'La decisión de destitución del Procurador General del Estado Bolívar, de conformidad con el procedimiento correspondiente, deberá ser aprobada por el Consejo Legislativo en cámara plena, con el voto favorable de…', '100% de los diputados que lo integran', '50 % de los diputados que lo integran', '25 % de los diputados que lo integran', 'las dos terceras (2/3) partes de los diputados que lo integran.', 'D', 'No Contestada'),
(50, '¿Se considera causa grave a los efectos de la destitución del Procurador General del Estado Bolívar, cuando en el ejercicio de sus competencias con intención, imprudencia, negligencia o impericia manifiesta, se le cause un daño al patrimonio del Estado?', 'Verdadero', 'Falso', 'No sé', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(51, '¿El Subprocurador General del Estado deberá reunir las mismas condiciones exigidas en la Constitución del Estado y esta Ley para ser Procurador General del Estado, y no podrá tener ningún parentesco de consanguinidad ni de afinidad con éste?', 'Falso', ' Verdadero', 'No sé', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(52, '¿Una de las atribuciones del Subprocurador es colaborar con el Procurador General del Estado en la acción y conducción de la Procuraduría?', 'Verdadero', 'Falso', 'No sé', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(53, '¿Son de libre nombramiento y remoción los cargos cuyas funciones son?', 'De exclusividad', 'Comisión de Servicio', 'De alto nivel y de confianza', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(54, '¿La Procuraduría General del Estado puede contratar los servicios de especialistas sobre materias que requieran conocimientos, experticia y dedicación especial?', 'Falso', 'No sé', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(55, 'Corresponde a la Procuraduría General del Estado representar al Poder Ejecutivo Estadal y defender sus actos ante la jurisdicción contencioso administrativa y…', 'civil', 'penal', 'constitucional', 'tributario', 'C', 'No Contestada'),
(56, 'La Procuraduría General del Estado puede intervenir en todos los procesos judiciales en que sean parte los Institutos Autónomos y los establecimientos…', 'comerciales', 'colectivos', 'públicos estadales, cuando en ellos se afecten derechos e intereses patrimoniales del Estado Bolívar.', 'sociales', 'C', 'No Contestada'),
(57, '¿El municipio Roscio pertenece al estado Anzoátegui?', 'Falso', 'Verdadero', 'No sé', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(58, '¿Cuál es la capital del municipio Gran Sabana?', 'Cd. Piar', 'Guasipati', 'Santa Elena de Uairén', 'El Palmar', 'C', 'No Contestada'),
(59, '¿Cuál es la capital del municipio Padre Pedro Chien?', 'Upata', 'Caicara del Orinoco', ' Tumeremo', 'El Palmar', 'D', 'No Contestada'),
(60, '¿La capital del municipio Sifontes es El Dorado?', 'Falso', 'Verdadero', 'No sé', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(61, '¿La capital del municipio El Callao es El Pao?', 'Falso', 'No sé', 'Verdadero', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(62, '¿Cuál era el antiguo nombre del municipio Angostura cuya capital es Ciudad Piar?', 'Heres', 'Raúl Leoni', 'Roscio', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(63, 'Caicara del Orinoco es capital del municipio….', 'Cedeño', 'Sifontes', 'Angostura del Orinoco', 'Caroní', 'A', 'No Contestada'),
(64, 'Ciudad Guayana es capital del municipio…', 'Angostura', 'Sifontes', 'Piar', 'Caroní', 'D', 'No Contestada'),
(65, '¿Qué presidente inauguró el Puente Angostura en 1967?', 'Luis Herrera Campins', 'Rafael Caldera', 'Raúl Leoni', 'Hugo Chávez', 'C', 'No Contestada'),
(66, '¿Cómo se llama actualmente la Dirección de Personal de la Procuraduría General del Estado Bolívar?', 'Dirección de Recursos Humanos', 'Dirección de Talento Humano', 'Dirección de Gestión Humana', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(67, '¿Puede el Procurador General del Estado Bolívar estar vinculado por parentesco hasta el cuarto grado de consanguinidad y segundo de afinidad con el Gobernador del Estado?', 'Falso', 'Verdadero', 'No sé', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(68, 'Uno de los requisitos para ser Procurador General es ser de estado seglar, que significa…', 'No ser de ninguna religión', 'Que no ejerza el sacerdocio ni estar adscrito a ninguna orden religiosa', 'Estar casado', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(69, 'La Plaza de la Coroba es catalogada como símbolo cultural de:', 'San Félix', 'Upata', ' El Palmar', 'Caicara del Orinoco', 'D', 'No Contestada'),
(70, 'Cuando a un funcionario u obrero de la Procuraduría General del Estado se le comprobare haber divulgado algún asunto relativo al Organismo, que haya tramitado o de los que tenga conocimiento, será sancionado con multa entre cincuenta y cien Unidades Tributarias (50 y 100 U.T.), sin perjuicio de las demás sanciones legales aplicables.	', 'Falso', 'Verdadero', 'No sé', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(71, 'Las potestades y competencias de representación y defensa previstas en el artículo 2 no podrán ser ejercidas por ningún otro órgano o funcionario del Estado, sin que medie previa y expresa sustitución otorgada por el Procurador General del Estado. Los sustitutos y quienes actúen por delegación del Procurador General del Estado no pueden sustituir la representación conferida, sin autorización… ', 'oral', 'grabada', 'digital', 'previa y escrita', 'D', 'No Contestada'),
(72, 'Las actuaciones de la Procuraduría General del Estado Bolívar, se harán en papel común y no estarán sujetas a obligaciones…', 'tributarias de ninguna naturaleza', 'administrativas', 'sociales', 'morales de ninguna índole', 'A', 'No Contestada'),
(73, '“La avaricia rompe el”…', 'vaso', 'plato', 'saco', 'cuadro', 'C', 'No Contestada'),
(74, '“No hay peor ciego que el que no”. ...', 'tiene lentes', 'abre los ojos', 'quiere ver ', 'prende la luz', 'C', 'No Contestada'),
(75, '¿Redactar, conforme a las instrucciones que le comunique el Poder Ejecutivo del Estado Bolívar, los documentos contentivos de actos, contratos o negocios relacionados con los ingresos públicos del Estado Bolívar, es una atribución de la Procuraduría General del Estado Bolívar?', 'Falso', 'No sé', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(76, '¿Cuántas Coordinaciones tiene actualmente la Procuraduría General del Estado Bolívar según su Estructura Organizativa? ', '09', '10', '05', '12', 'A', 'No Contestada'),
(77, '¿Cuántas Coordinaciones tiene la Dirección de Talento Humano según la Estructura Organizativa de la Procuraduría General del Estado Bolívar? ', '01', '03', 'Ninguna', '02', 'A', 'No Contestada'),
(78, '¿Cuál es el nombre de la Dirección de la Procuraduría General del Estado Bolívar que se encarga de asistir al Procurador General en lo referente a la emisión de dictámenes; supervisión y actuación en juicios; redacción, verificación y conformación de contratos de interés público; realización de estudios jurídicos…', 'Dirección de Talento Humano', 'Dirección de Administración', 'Dirección de Asuntos Legales', 'Dirección de Responsabilidad Social y de Atención a la Ciudadanía', 'C', 'No Contestada'),
(79, '¿El ejercicio del cargo de Procurador General del Estado Bolívar es incompatible con el desempeño de cualquier otro cargo público o privado, salvo, las actividades académicas y docentes que no sean a tiempo completo o a dedicación exclusiva?', 'Falso', 'No sé', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(80, 'Es atribución del Procurador General del Estado asistir con derecho a voz a las reuniones…', 'Sociales', 'de Condominio', 'de Gabinete', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(81, 'Las normas de la Ley de la Procuraduría General del Estado Bolívar son de orden público, se aplicarán con preferencia a otras leyes estadales y deben interpretarse a favor de los derechos e intereses patrimoniales del…', 'Municipio Caroní', 'Municipio Padre Pedro Chien', 'Municipio Angostura del Orinoco', 'Estado Bolívar', 'D', 'No Contestada'),
(82, 'La “Feria de la Sapoara” o “Feria del Orinoco” se realiza en el mes de…', 'enero', 'abril', 'diciembre', 'ninguna de las anteriores', 'D', 'No Contestada'),
(83, '¿El mazapán de merey es un dulce típico de la región guayanesa?	', 'No sé', 'Falso', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(84, '¿Fue declarado por la Unesco en el año 2016 el Carnaval del Callao (Edo. Bolívar) como Patrimonio Cultural Inmaterial de la Humanidad?', 'No sé', 'Verdadero', 'Falso', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(85, '¿La Lealtad es un valor que significa: Crear un entorno favorable, donde existen los mismos derechos, deberes y oportunidades para todos; sin ningún tipo de discriminación? ', 'No sé', 'Falso', 'Verdadero', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(86, 'El Correo del Orinoco fue un periódico venezolano fundado en Ciudad Bolívar (antigua Angostura), que circuló desde el 27 de junio de 1818 hasta el 23 de marzo de 1822 y fue creado por: ', 'José Antonio Páez', 'Manuel Piar', 'Fernando Peñalver', 'Simón Bolívar', 'D', 'No Contestada'),
(87, 'La conocida Calle de Piedra de Ciudad Bolívar forma parte del llamado Cerro… ', 'Negro', 'Verde', 'Azul', 'Amarillo', 'C', 'No Contestada'),
(88, '¿Es cierto que la Isla del Degredo fue un lugar de convalecencia para enfermos contagiosos, cuando las Juntas de Sanidad de la hoy Ciudad Bolívar, recibían informaciones sobre brotes de viruela, peste bubónica, fiebre amarilla en algún puerto de Venezuela o de Las Antillas, obligando a los buques que tocaban en los puertos afectados,  permanecer quince días bajo estricta observación?', ' No sé', 'Falso', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(89, '¿La antigua Angostura, hoy Ciudad Bolívar, fue nombrada en 1818 por Simón Bolívar, capital provisional de la República?', 'Verdadero', 'Falso ', 'No sé', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(90, 'Según el artículo 12 de la Ley, la Procuraduría General del Estado Bolívar dispone de autonomía organizativa, funcional, administrativa y…', 'social', 'tributaria', 'económica', 'presupuestaria', 'D', 'No Contestada'),
(91, 'Según el artículo 15 de la Ley, se entiende por autonomía presupuestaria de la Procuraduría General del Estado Bolívar, la facultad para elaborar y ejecutar su presupuesto…', 'anual', 'mensual', 'semanal', 'diario', 'A', 'No Contestada'),
(92, '¿Es atribución del Procurador General, según el artículo 33, crear y dirigir los comités de asesores que considere convenientes para el mejor cumplimiento de las competencias de la Alcaldía del municipio Angostura del Orinoco?', 'Falso', 'Verdadero', 'No sé', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(93, 'Según la historia, nuestro Libertador Simón Bolívar amarraba su caballo en la Casa de San Isidro, en un árbol de:', 'Mango', 'Mamón', 'Tamarindo', 'Ciruela', 'C', 'No Contestada'),
(94, 'El venezolano y reconocido artista Jesús Soto, uno de los máximos exponentes del arte cinético, nació en:', 'Ciudad Bolívar', 'Maracaibo', 'Caracas', 'Puerto Ordaz', 'A', 'No Contestada'),
(95, ' “Que se haga justicia y que ésta se imparta si la tengo, si no la tengo, recibiré tranquilo el fallo de los tribunales”, es una frase de:', 'Andrés Bello', 'Simón Bolívar', 'Hugo Chávez', 'José Medrano', 'B', 'No Contestada'),
(96, '  \"A caballo regalado, no se le mira…”', 'oreja', 'nariz', 'pata', 'colmillo', 'D', 'No Contestada'),
(97, '¿Dónde nace el Río Orinoco?', 'Estado Bolívar ', 'Estado Anzoátegui', 'Estado Amazonas', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(98, '¿Cuántos municipios tiene el estado Bolívar?', '10', '15', '11', '09', 'C', 'No Contestada'),
(99, '¿Cuál es la capital del municipio Sucre?', ' El Palmar', 'Guasipati', 'Tumeremo', 'Maripa', 'D', 'No Contestada'),
(100, '¿El Callao es capital del municipio Sifontes?', 'Verdadero', 'Falso', 'No sé', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(101, '¿Es Ciudad Piar capital del municipio Piar?', 'Verdadero', 'No sabe', 'Falso', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(102, '¿Cuál es el nombre del Director de Administración de la Procuraduría General del Estado Bolívar?', 'Reinaldo José Franco Romero', 'Reinaldo Romero', 'José Reinaldo Franco Romero', 'José Romero', 'C', 'No Contestada'),
(103, '\"Morrocoy no sube palo ni que le pongan…\"', 'canciones', 'amor', 'horqueta', 'cuerda', 'C', 'No Contestada'),
(104, '“Cuando el río suena,…”', 'piedras trae', 'salgan corriendo', 'hay muchos peces', 'no se puede nadar', 'A', 'No Contestada'),
(105, '“Más difícil que matar un burro a…”', 'empujones', 'golpes', 'besos', 'pellizcos', 'D', 'No Contestada'),
(106, 'Evacuar por inhibición del Procurador General del Estado, las consultas que le sometan, es una atribución de…', 'Director de Administración', 'Director de Talento Humano', 'Director de Asuntos Legales', 'Subprocurador General del Estado', 'D', 'No Contestada'),
(107, '¿El Procurador General del Estado Bolívar ejerce la potestad reglamentaria y tiene a su cargo la dirección de toda la Administración Pública Central e Institucional ya sea directa o indirectamente a través de sus ministros o delegados?', 'Verdadero', 'No sé', 'Falso', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(108, '¿El ejercicio del cargo de Procurador General del Estado Bolívar es incompatible con el desempeño de cualquier otro cargo público o privado, salvo, las actividades académicas y docentes que no sean a tiempo completo o a dedicación exclusiva?', 'Verdadero', 'Falso', 'No sé', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(109, '¿La Dirección de Asuntos Legales es la encargada de dictar los reglamentos, instructivos y manuales de procedimientos internos, necesarios para el funcionamiento de la Procuraduría General del Estado Bolívar?', 'Falso', 'No sé', 'Verdadero', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(110, ' “Quien tiene un amigo tiene un…”', 'problema', 'acertijo', 'tesoro', 'afán', 'C', 'No Contestada'),
(111, '¿Tiene que ver la Ética con desarrollar las funciones con niveles de excelencia, eficiencia y eficacia, siempre en la búsqueda de enaltecer y dignificar las labores encomendadas bajo inexorables criterios legales?', 'Falso', ' No sé', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(112, ')¿ La Responsabilidad es un valor en la que se asume de manera individual y colectiva las obligaciones respectivas con cada uno de los objetivos, metas, políticas y lineamientos establecidos por la institución a fin de cumplirlos de manera satisfactoria y oportuna dentro de un ambiente de confianza y respeto mutuo.?', 'Verdadero', 'No sé', 'Falso', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(113, '¿Está entre las atribuciones de la Procuraduría General del Estado Bolívar demandar la nulidad de cualquier acto de los órganos y entes del Poder Público estadal y municipal, por razones de inconstitucionalidad o de ilegalidad?', 'Falso', 'No sé', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(114, '¿Está entre las atribuciones de la Procuraduría General del Estado Bolívar regular la naturaleza, organización y funcionamiento de la Defensoría del Pueblo?', 'Verdadero', 'No sé', 'Falso', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(115, '¿Está entre las atribuciones de la Procuraduría General del Estado Bolívar velar por la efectiva conservación y protección del medio ambiente, en resguardo del interés colectivo?', 'No sé', 'Falso', 'Verdadero', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(116, '¿Está entre las atribuciones de la Procuraduría General del Estado Bolívar ejercer las acciones a que haya lugar frente a la amenaza o violación de los derechos humanos de las mujeres, niñas, niños y adolescentes?', 'No sé', 'Verdadero', 'Falso', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(117, '¿Está entre las atribuciones de la Procuraduría General del Estado Bolívar velar por los derechos de los pueblos indígenas y ejercer las acciones necesarias para su garantía y efectiva protección?', 'Falso', 'Verdadero', 'No sé', 'Ninguna de las anteriores', 'A', 'No Contestada'),
(118, '¿Está entre las atribuciones de la Procuraduría General del Estado Bolívar solicitar ante el órgano competente la aplicación de los correctivos y las sanciones a que hubiere lugar por la violación de los derechos del consumidor y el usuario?', 'Verdadero', 'No sé', 'Falso', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(119, '¿Está entre las atribuciones de la Procuraduría General del Estado Bolívar ejercer la suprema dirección, conducción, supervisión, vigilancia y control de los procesos electorales directamente y a través de los órganos electorales subordinados y organismos electorales subalternos?', 'No sé', 'Falso', 'Verdadero', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(120, '¿Está entre las atribuciones de la Procuraduría General del Estado Bolívar juramentar a los funcionarios y funcionarias policiales que hayan aprobado el período de prueba tras los procesos de ingreso a la carrera policial?', 'Verdadero', 'Falso', 'No sé', 'Ninguna de las anteriores', 'B', 'No Contestada'),
(121, '¿Está entre las atribuciones de la Procuraduría General del Estado Bolívar solicitar al Poder Ejecutivo Nacional la concesión para el aprovechamiento y captación del agua cruda, así como para hacer las respectivas descargas de aguas servidas?', 'No sé', 'Verdadero', 'Falso', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(122, 'Campanita, campanera, blanca por dentro, verde por fuera, si no lo adivinas, piensa y espera…', 'la esperanza', 'la navidad', 'la pera', 'la guanábana', 'C', 'No Contestada'),
(123, 'Tiene famosa memoria, gran tamaño y dura piel, y la nariz más grandota que en el mundo pueda haber…', 'pinocho', 'el oso hormiguero', 'el elefante', 'el pato', 'C', 'No Contestada'),
(124, '¿En lo que corresponde a la parte geológica, Ciudad Bolívar presenta una gran estabilidad tectónica, ya que se encuentra ubicada sobre las rocas ígneas del Escudo Guayanés, correspondientes al Precámbrico, las formaciones geológicas más antiguas y estables de nuestro planeta.?', 'No sé', 'Falso', 'Verdadero', 'Ninguna de las anteriores', 'C', 'No Contestada'),
(125, '¿Desde cuál tepuy se precipita la cascada más alta del mundo llamada Salto Ángel?', 'Roraima', 'kukenan', 'Auyantepuy', 'Wadaka-piapó', 'C', 'No Contestada'),
(126, ' La misión de la Procuraduría es garantizar la seguridad jurídica de la actuación del estado, la defensa y protección de los derechos e intereses patrimoniales, mediante la aplicación honorable del conocimiento jurídico vigente, en su acción de asesoramiento al poder público estadal  y de representación judicial y extrajudicial…?', 'No sé', 'Verdadero', 'Falso', 'Ninguna de las anteriores', 'B', 'No Contestada');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT de la tabla `participantes`
--
ALTER TABLE `participantes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

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
