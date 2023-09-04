-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: delmary
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (2,'¿Color Favorito?','Azul','¿Que edad tienes?','24','¿Profesion?','Informatico','moises');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `producto` varchar(255) NOT NULL,
  `tipo_producto` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (11,'Pan de Jamon','Panaderia','10','img/product/p-jamon.png','Mas Vendido'),(12,'Pan de Perro','Panaderia','2.50','img/product/p-perro.png','Nuevo'),(13,'Pan de Guayaba','Panaderia','1','img/product/p-guayaba.png','Nuevo'),(14,'Pan Frances','Panaderia','0.15','img/product/p-frances.png','Mas Vendido'),(15,'Pan Dulce','Panaderia','0.40','img/product/p-dulce.png','Nuevo'),(16,'Pan de Coco','Panaderia','0.50','img/product/p-coco.png','Nuevo'),(17,'Pan Canilla','Panaderia','0.30','img/product/p-canilla.png','Nuevo'),(18,'Pan Campesino','Panaderia','2','img/product/p-campesino.png','Nuevo'),(19,'Torta de Arequipe','Pasteleria','12.5','img/product/t-arequipe.png','Nuevo'),(20,'Torta de Chocolate','Pasteleria','22','img/product/t-chocolate.png','Nuevo'),(21,'Torta de Chocolate con Motivo','Pasteleria','18','img/product/t-chocolate2.png','Nuevo'),(22,'Torta de Cumpleaños de Chocolate','Pasteleria','18','img/product/t-cumpleañosc.png','Mas Vendido'),(23,'Minicake de Chocolate','Pasteleria','12','img/product/t-minicakec.png','Nuevo'),(24,'Minicake de Fresa','Pasteleria','10','img/product/t-minicakef.png','Nuevo'),(25,'Torta Tres Leche','Pasteleria','15','img/product/t-tres.png','Nuevo'),(26,'Torta de Vainilla','Pasteleria','8','img/product/t-vainilla.png','Nuevo'),(27,'Arepas','Desayunos','1.70','img/product/d-arepa.png','Nuevo'),(28,'Cachitos','Desayunos','1.25','img/product/d-cachitos.png','Nuevo'),(30,'Empanadas','Desayunos','1.90','img/product/d-empanadas.png','Nuevo'),(31,'Hamburguesa','Desayunos','3','img/product/d-hamburguesa.png','Nuevo'),(32,'Perro Caliente','Desayunos','1.50','img/product/d-hotdog.png','Mas Vendido'),(33,'Panquecas','Desayunos','1.80','img/product/d-panquecas.png','Nuevo'),(34,'Pastelitos','Desayunos','1.50','img/product/d-pastelitos.png','Nuevo'),(35,'Sandwich','Desayunos','2','img/product/d-sandwich.png','Nuevo'),(36,'Arreglo N°1','Arreglos','13','img/product/a-arreglo1.png','Mas Vendido'),(37,'Arreglo N°2','Arreglos','14','img/product/a-arreglo2.png','Nuevo'),(38,'Arreglo N°3','Arreglos','7','img/product/a-arreglo3.png','Nuevo'),(39,'Arreglo N°4','Arreglos','9','img/product/a-arreglo4.png','Nuevo'),(40,'Arreglo N°5','Arreglos','15','img/product/a-arreglo5.png','Nuevo'),(41,'Arreglo N°6','Arreglos','12.80','img/product/a-arreglo6.png','Mas Vendido'),(42,'Arreglo N°7','Arreglos','19','img/product/a-arreglo7.png','Nuevo'),(43,'Arreglo N°8','Arreglos','17.80','img/product/a-arreglo8.png','Nuevo'),(44,'Combo N°1','Combos','30','img/product/l-combo1.png','Nuevo'),(45,'Combo N°2','Combos','30','img/product/l-combo2.png','Nuevo'),(46,'Combo N°3','Combos','30','img/product/l-combo3.png','Nuevo'),(47,'Combo N°4','Combos','30','img/product/l-combo4.png','Nuevo'),(48,'Combo N°5','Combos','30','img/product/l-combo5.png','Nuevo'),(49,'Combo N°6','Combos','30','img/product/l-combo6.png','Nuevo');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respaldos`
--

LOCK TABLES `respaldos` WRITE;
/*!40000 ALTER TABLE `respaldos` DISABLE KEYS */;
INSERT INTO `respaldos` VALUES (1,'puntodelsabor-2023-02-14.sql','C:/xampp/htdocs/delmary','2023-02-14'),(2,'puntodelsabor-2023-02-14.sql','C:/xampp/htdocs/delmary','2023-02-14');
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
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `privilegio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'moises','7c4a8d09ca3762af61e59520943dc26494f8941b','moisescelis20@gmail.com','27438841','1'),(4,'delmary','7c4a8d09ca3762af61e59520943dc26494f8941b','delmary@gmail.com','2888412','1'),(5,'moises2','7c4a8d09ca3762af61e59520943dc26494f8941b','moisescelis21@gmail.com','27438842','0');
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

-- Dump completed on 2023-04-19  1:40:32
