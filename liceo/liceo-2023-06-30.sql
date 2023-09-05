-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: liceo
-- ------------------------------------------------------
-- Server version	10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `estudiantes`
--

DROP TABLE IF EXISTS `estudiantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudiantes` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `cedula` int(255) NOT NULL,
  `edad` int(255) NOT NULL,
  `anio` varchar(255) NOT NULL,
  `seccion` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `aniocurso` varchar(255) NOT NULL,
  `turno` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiantes`
--

LOCK TABLES `estudiantes` WRITE;
/*!40000 ALTER TABLE `estudiantes` DISABLE KEYS */;
INSERT INTO `estudiantes` VALUES (11,'benecya','rondon',28668961,20,'3','A','coquito','2023-2024','Mañana'),(12,'maria carolina','romero romero',5556776,20,'3','B','coquito','2023-2024','Mañana'),(13,'manu','yan',233454343,13,'1','A','coquito','2023-2024','Tarde'),(14,'monica','moon',3233244,13,'3','A','coquito','2023-2024','Tarde'),(15,'ana','lan',2343453,12,'1','A','coquito','2023-2024','Mañana'),(16,'mon ','mon',4343434,13,'1','B','Proceres','2023-2024','Tarde'),(18,'benecya','yan',545879,20,'2','A','coquito','2023-2024','Tarde'),(19,'maria carolina','yan',454545,14,'2','B','Proceres','2023-2024','Mañana'),(20,'maria carolina','yan',48748,14,'2','B','Proceres','2023-2024','Tarde'),(22,'manu','rondon',65656,13,'3','B','Proceres','2023-2024','Tarde'),(23,'maria carolina','moon',21212,14,'4','A','Proceres','2023-2024','Mañana'),(24,'manu','yan',2454,13,'4','B','coquito','2023-2024','Mañana'),(25,'monica','moon',545,12,'4','A','Proceres','2023-2024','Tarde'),(26,'monica','lan',54654,14,'4','B','coquito','2023-2024','Tarde'),(27,'francisco','lan',645,14,'5','A','coquito','2023-2024','Mañana'),(28,'francisco','moon',313,13,'5','B','Proceres','2023-2024','Mañana'),(30,'benecya','rondon',45,12,'5','B','coquito','2023-2024','Tarde');
/*!40000 ALTER TABLE `estudiantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materias`
--

DROP TABLE IF EXISTS `materias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materias` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `materias` varchar(255) NOT NULL,
  `año` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materias`
--

LOCK TABLES `materias` WRITE;
/*!40000 ALTER TABLE `materias` DISABLE KEYS */;
INSERT INTO `materias` VALUES (1,'Castellano',1),(2,'Ingles y otras lenguas extranjeras',1),(3,'Matematicas',1),(4,'Educacion Fisica',1),(5,'Artes y Patrimonio',1),(6,'Ciencias Naturales',1),(7,'Geografia Historia y Ciudadania',1),(8,'Orientacion y Convivencia',1),(9,'Participación en grupos ',1),(10,'Castellano',2),(11,'Ingles y otras lenguas extranjeras',2),(12,'Matematicas',2),(13,'Educacion Fisica',2),(14,'Artes y Patrimonio',2),(15,'Ciencias Naturales',2),(16,'Geografia Historia y Ciudadania',2),(17,'Orientacion y Convivencia',2),(18,'Participación en grupos ',2),(19,'Castellano',3),(20,'Ingles y otras lenguas extranjeras',3),(21,'Matematicas',3),(22,'Educacion Fisica',3),(23,'Fisica',3),(24,'Quimica',3),(25,'Biologia',3),(26,'Geografia Historia y Ciudadania',3),(27,'Formacion Para la Soberania Nacional',3),(28,'Castellano',4),(29,'Ingles y otras lenguas extranjeras',4),(30,'Matematicas',4),(31,'Fisica',4),(32,'Educacion Fisica',4),(33,'Quimica',4),(35,'Biologia',4),(36,'Geografia Historia y Ciudadania',4),(37,'Formacion Para la Soberania Nacional',4),(38,'Castellano',5),(39,'Ingles y otras lenguas extranjeras',5),(40,'Matematicas',5),(41,'Educacion Fisica',5),(42,'Fisica',5),(43,'Quimica',5),(44,'Biologia',5),(45,'Ciencias Naturales',5),(46,'Geografia Historia y Ciudadania',5),(47,'Formacion Para la Soberania Nacional',5);
/*!40000 ALTER TABLE `materias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `materia` varchar(255) NOT NULL,
  `nota1` varchar(255) NOT NULL,
  `nota2` varchar(255) NOT NULL,
  `nota3` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `año` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
INSERT INTO `notas` VALUES (91,'Castellano','20','20','20','28668961',3),(92,'Ingles y otras lenguas extranjeras','20','20','20','28668961',3),(93,'Matematicas','15','20','20','28668961',3),(94,'Educacion Fisica','12','20','20','28668961',3),(95,'Fisica','16','20','20','28668961',3),(96,'Quimica','17','20','20','28668961',3),(97,'Biologia','13','20','20','28668961',3),(98,'Geografia Historia y Ciudadania','05','20','20','28668961',3),(99,'Formacion Para la Soberania Nacional','07','20','20','28668961',3),(100,'Castellano','15','20','20','5556776',3),(101,'Ingles y otras lenguas extranjeras','18','20','20','5556776',3),(102,'Matematicas','19','20','20','5556776',3),(103,'Educacion Fisica','19','20','20','5556776',3),(104,'Fisica','17','20','20','5556776',3),(105,'Quimica','16','20','20','5556776',3),(106,'Biologia','18','20','20','5556776',3),(107,'Geografia Historia y Ciudadania','14','20','20','5556776',3),(108,'Formacion Para la Soberania Nacional','16','20','20','5556776',3),(109,'Castellano','20','20','20','2343453',1),(110,'Ingles y otras lenguas extranjeras','10','20','20','2343453',1),(111,'Matematicas','19','20','20','2343453',1),(112,'Educacion Fisica','12','20','20','2343453',1),(113,'Artes y Patrimonio','16','0','0','2343453',1),(114,'Ciencias Naturales','17','20','20','2343453',1),(115,'Geografia Historia y Ciudadania','20','20','20','2343453',1),(116,'Orientacion y Convivencia','05','0','0','2343453',1),(117,'Participación en grupos ','20','0','0','2343453',1),(118,'Castellano','20','20','20','4343434',1),(119,'Ingles y otras lenguas extranjeras','10','20','20','4343434',1),(120,'Matematicas','19','20','20','4343434',1),(121,'Educacion Fisica','20','20','20','4343434',1),(122,'Artes y Patrimonio','17','0','0','4343434',1),(123,'Ciencias Naturales','20','20','20','4343434',1),(124,'Geografia Historia y Ciudadania','20','20','20','4343434',1),(125,'Orientacion y Convivencia','20','0','0','4343434',1),(126,'Participación en grupos ','20','0','0','4343434',1),(127,'Castellano','20','20','20','233454343',1),(128,'Ingles y otras lenguas extranjeras','20','20','20','233454343',1),(129,'Matematicas','15','20','20','233454343',1),(130,'Educacion Fisica','12','20','20','233454343',1),(131,'Artes y Patrimonio','17','0','0','233454343',1),(132,'Ciencias Naturales','17','20','20','233454343',1),(133,'Geografia Historia y Ciudadania','18','20','20','233454343',1),(134,'Orientacion y Convivencia','20','0','0','233454343',1),(135,'Participación en grupos ','','0','0','233454343',1),(136,'Castellano','20','20','20','645',5),(137,'Ingles y otras lenguas extranjeras','20','20','20','645',5),(138,'Matematicas','20','20','20','645',5),(139,'Educacion Fisica','20','20','20','645',5),(140,'Fisica','20','20','20','645',5),(141,'Quimica','20','20','20','645',5),(142,'Biologia','20','20','20','645',5),(143,'Ciencias Naturales','20','20','20','645',5),(144,'Geografia Historia y Ciudadania','20','20','20','645',5),(145,'Formacion Para la Soberania Nacional','20','20','20','645',5);
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `pregunta1` varchar(255) NOT NULL,
  `respuesta1` varchar(255) NOT NULL,
  `pregunta2` varchar(255) NOT NULL,
  `respuesta2` varchar(255) NOT NULL,
  `pregunta3` varchar(255) NOT NULL,
  `respuesta3` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (3,'¿Cual es su color favorito?','Azul','¿Cuando es su cumpleaños?','2000-02-07','¿Cual es su numero favorito?','07','moises'),(4,'¿Cual es su color favorito?','Azul','¿Cuando es su cumpleaños?','2000-02-07','¿Cual es su numero favorito?','07','francisco'),(5,'¿Cual es su mes favorito?','enero','¿Cuando es su cumpleaños?','2006-05-12','¿Cual es su numero favorito?','07','manu');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respaldos`
--

DROP TABLE IF EXISTS `respaldos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respaldos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `ruta` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respaldos`
--

LOCK TABLES `respaldos` WRITE;
/*!40000 ALTER TABLE `respaldos` DISABLE KEYS */;
INSERT INTO `respaldos` VALUES (1,'liceo-2023-06-30.sql','C:/xampp/htdocs/liceo','2023-06-30');
/*!40000 ALTER TABLE `respaldos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cedula` int(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `admin` int(2) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (9,'Manu','yan','manu','7c4a8d09ca3762af61e59520943dc26494f8941b',233454343,'manu@gamil.com',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-30 16:38:26
