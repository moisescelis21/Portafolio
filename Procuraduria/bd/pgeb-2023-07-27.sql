-- MariaDB dump 10.19  Distrib 10.4.27-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: procuraduria
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
-- Table structure for table `archivos`
--

DROP TABLE IF EXISTS `archivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `archivos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `cedula` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `archivos`
--

LOCK TABLES `archivos` WRITE;
/*!40000 ALTER TABLE `archivos` DISABLE KEYS */;
INSERT INTO `archivos` VALUES (22,'imagen','1-6.jpg','2023-06-27','27438841');
/*!40000 ALTER TABLE `archivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `constancias`
--

DROP TABLE IF EXISTS `constancias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `constancias` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `correlativo` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `constancias`
--

LOCK TABLES `constancias` WRITE;
/*!40000 ALTER TABLE `constancias` DISABLE KEYS */;
INSERT INTO `constancias` VALUES (21,'27438841','2023-06-06',1),(22,'27438841','2023-06-06',2),(23,'8868263','2023-06-07',3),(24,'27438841','2023-06-07',4),(25,'27438841','2023-06-09',5),(26,'27438841','2023-06-13',6),(27,'7877725','2023-06-13',7),(28,'28694047','2023-06-13',8),(29,'27438841','2023-06-13',9),(30,'27438841','2023-06-21',10),(31,'27438841','2023-06-23',11),(32,'27438841','2023-06-23',12),(33,'27438841','2023-07-03',13),(34,'27438841','2023-07-27',14);
/*!40000 ALTER TABLE `constancias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datosbancarios`
--

DROP TABLE IF EXISTS `datosbancarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datosbancarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `centpago` varchar(255) NOT NULL,
  `nrocuenta` varchar(255) NOT NULL,
  `tipcuenta` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosbancarios`
--

LOCK TABLES `datosbancarios` WRITE;
/*!40000 ALTER TABLE `datosbancarios` DISABLE KEYS */;
INSERT INTO `datosbancarios` VALUES (1,'BANCO DE VENEZUELA','01020635920000042479','0','8868657'),(2,'BANCO DE VENEZUELA','01020635910000052883','0','16914525'),(3,'BANCO DE VENEZUELA','01020414360000107068','0','6954619'),(4,'BANCO DE VENEZUELA','01020635920000140931','0','10565869'),(5,'BANCO DE VENEZUELA','01020414320000846167','0','10049489'),(6,'BANCO DE VENEZUELA','01020635980000025483','0','18237190'),(7,'BANCO DE VENEZUELA','01020635900000155942','0','21608801'),(8,'BANCO DE VENEZUELA','01020635980000048651','0','11168416'),(9,'BANCO DE VENEZUELA','01020635960000195795','0','14044189'),(10,'BANCO DE VENEZUELA','01020414390000128542','0','14883663'),(11,'BANCO DE VENEZUELA','01020414340000728845','0','13326473'),(12,'BANCO DE VENEZUELA','01020414300000804141','0','30385423'),(13,'BANCO DE VENEZUELA','01020635980000207670','0','22817345'),(14,'BANCO DE VENEZUELA','01020635970000052935','0','13920259'),(15,'BANCO DE VENEZUELA','01020635980000073422','0','8853145'),(16,'BANCO DE VENEZUELA','01020414330000781442','0','27438841'),(17,'BANCO DE VENEZUELA','01020414370001106217','0','23551159'),(18,'BANCO DE VENEZUELA','01020635990000191977','0','17162661'),(19,'BANCO DE VENEZUELA','01020640530000223405','0','17633481'),(20,'BANCO DE VENEZUELA','01020788620100002805','1','17383870'),(21,'BANCO DE VENEZUELA','01020414380000862235','0','13657269'),(22,'BANCO DE VENEZUELA','01020457700000122522','0','11202458'),(23,'BANCO DE VENEZUELA','01020414390000994077','0','28694047'),(24,'BANCO DE VENEZUELA','01020414300001410864','0','24849503'),(25,'BANCO DE VENEZUELA','01020457770100634000','1','10049990'),(26,'BANCO DE VENEZUELA','01020788660100001330','1','25849393'),(27,'BANCO DE VENEZUELA','01020788690000098232','0','10573385'),(28,'BANCO DE VENEZUELA','01020635910000444611','0','7877725'),(29,'BANCO DE VENEZUELA','01020414300000822039','0','26744514'),(30,'BANCO DE VENEZUELA','01020635940000043517','0','5551362'),(31,'BANCO DE VENEZUELA','01020635900000043478','0','3610305'),(32,'BANCO DE VENEZUELA','01020635900000043559','0','8868263'),(33,'BANCO DE VENEZUELA','01020635910000043494','0','4031187'),(34,'BANCO DE VENEZUELA','01020635960000043533','0','5556488'),(35,'BANCO DE VENEZUELA','01020635940000043520','0','5555646'),(36,'BANCO DE VENEZUELA','01020635930000043588','0','8878329'),(37,'BANCO DE VENEZUELA','01020501850003113059','0','8856323'),(38,'BANCO DE VENEZUELA','100000000001','0','19975830'),(39,'BANCO DE VENEZUELA','100000000000001','0','19975830'),(40,'BANCO DE VENEZUELA','1000000000002','0','27730163'),(41,'BANCO DE VENEZUELA','10000000003','0','31298934'),(42,'BANCO DE VENEZUELA','1000000004','0','28032172'),(43,'BANCO DE VENEZUELA','1000000006','0','18238207');
/*!40000 ALTER TABLE `datosbancarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `montos`
--

DROP TABLE IF EXISTS `montos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `montos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sueldo` varchar(255) NOT NULL,
  `compensacion` varchar(255) NOT NULL,
  `vacaciones` varchar(255) NOT NULL,
  `liquidacion` varchar(255) NOT NULL,
  `especiales` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `montos`
--

LOCK TABLES `montos` WRITE;
/*!40000 ALTER TABLE `montos` DISABLE KEYS */;
INSERT INTO `montos` VALUES (1,'409','700','0','0','0','8868657'),(2,'391','554','0','0','0','16914525'),(3,'376','450','0','0','0','6954619'),(4,'376','400','0','0','0','10565869'),(5,'376','708','0','0','0','10049489'),(6,'13','400','0','0','0','18237190'),(7,'376','554','0','0','0','21608801'),(8,'348','400','0','0','0','11168416'),(9,'348','350','0','0','0','14044189'),(10,'348','400','0','0','0','14883663'),(11,'348','504','0','0','0','13326473'),(12,'348','300','0','0','400','30385423'),(13,'348','658','0','0','0','22817345'),(14,'348','658','0','0','0','13920259'),(15,'348','708','0','0','0','8853145'),(16,'348','658','2000','0','400','27438841'),(17,'348','558','0','0','0','23551159'),(18,'228','250','0','0','0','17162661'),(19,'305','100','0','0','0','17633481'),(20,'203','508','0','0','0','17383870'),(21,'228','508','0','0','0','13657269'),(22,'316','300','0','0','0','11202458'),(23,'228','376','0','2000','0','28694047'),(24,'316','508','0','0','0','24849503'),(25,'228','504','0','0','0','10049990'),(26,'316','300','0','0','0','25849393'),(27,'200','458','0','0','0','10573385'),(28,'161','458','0','0','0','7877725'),(29,'200','200','0','0','0','26744514'),(30,'130','0','0','0','0','5551362'),(31,'130','0','0','0','0','3610305'),(32,'130','0','0','0','0','8868263'),(33,'130','0','0','0','0','4031187'),(34,'130','0','0','0','0','5556488'),(35,'130','0','0','0','0','5555646'),(36,'130','0','0','0','0','8878329'),(37,'250','350','0','0','0','8856323'),(38,'316','0','0','0','0','19975830'),(39,'316','0','0','0','0','19975830'),(40,'200','0','0','0','0','27730163'),(41,'200','0','0','0','0','31298934'),(42,'100','0','0','0','0','28032172'),(43,'100','0','0','0','0','18238207');
/*!40000 ALTER TABLE `montos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipios`
--

DROP TABLE IF EXISTS `municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `municipio` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipios`
--

LOCK TABLES `municipios` WRITE;
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
INSERT INTO `municipios` VALUES (2,'Angostura del Orinoco (Ciudad Bolívar)','Bolivar'),(4,'Angostura (Ciudad Piar)','Bolivar'),(5,'Caroní (Ciudad Guayana)','Bolivar'),(6,'Cedeño (Caicara del Orinoco)','Bolivar'),(7,'Chien (El Palmar)','Bolivar'),(8,'El Callao (El Callao)','Bolivar'),(9,'Gran Sabana (Santa Elena de Uairén)','Bolivar'),(10,'Piar (Upata)','Bolivar'),(11,'Roscio (Guasipati)','Bolivar'),(12,'Sifontes (El Dorado)','Bolivar'),(13,'Sucre (Maripa)','Bolivar');
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nominapersonal`
--

DROP TABLE IF EXISTS `nominapersonal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nominapersonal` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(255) NOT NULL,
  `diastrabajados` varchar(255) NOT NULL,
  `correlativo` varchar(255) NOT NULL,
  `tiponomina` varchar(255) NOT NULL,
  `nomina` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=209 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nominapersonal`
--

LOCK TABLES `nominapersonal` WRITE;
/*!40000 ALTER TABLE `nominapersonal` DISABLE KEYS */;
INSERT INTO `nominapersonal` VALUES (138,'8868657','15','1-2023','Nomina','Alto Funcionario'),(139,'16914525','15','1-2023','Nomina','Alto Nivel'),(140,'6954619','15','1-2023','Nomina','Alto Nivel'),(141,'10565869','15','1-2023','Nomina','Alto Nivel'),(142,'10049489','15','1-2023','Nomina','Alto Nivel'),(143,'18237190','15','1-2023','Nomina','Alto Nivel'),(144,'21608801','15','1-2023','Nomina','Alto Nivel'),(145,'11168416','15','1-2023','Nomina','Alto Nivel'),(146,'14044189','15','1-2023','Nomina','Alto Nivel'),(147,'14883663','15','1-2023','Nomina','Alto Nivel'),(148,'13326473','15','1-2023','Nomina','Alto Nivel'),(149,'30385423','15','1-2023','Nomina','Alto Nivel'),(150,'22817345','15','1-2023','Nomina','Alto Nivel'),(151,'13920259','15','1-2023','Nomina','Alto Nivel'),(152,'8853145','15','1-2023','Nomina','Alto Nivel'),(153,'27438841','15','1-2023','Nomina','Alto Nivel'),(154,'23551159','15','1-2023','Nomina','Alto Nivel'),(155,'17162661','15','1-2023','Nomina','Empleado'),(156,'17633481','15','1-2023','Nomina','Empleado'),(157,'17383870','15','1-2023','Nomina','Empleado'),(158,'13657269','15','1-2023','Nomina','Empleado'),(159,'11202458','15','1-2023','Nomina','Empleado'),(160,'28694047','15','1-2023','Nomina','Empleado'),(161,'24849503','15','1-2023','Nomina','Empleado'),(162,'10049990','15','1-2023','Nomina','Empleado'),(163,'25849393','15','1-2023','Nomina','Empleado'),(164,'10573385','15','1-2023','Nomina','Obrero'),(165,'7877725','15','1-2023','Nomina','Obrero'),(166,'26744514','15','1-2023','Nomina','Obrero'),(167,'5551362','15','1-2023','Nomina','Pension'),(168,'3610305','15','1-2023','Nomina','Pension'),(169,'8868263','15','1-2023','Nomina','Pension'),(170,'4031187','15','1-2023','Nomina','Jubilacion'),(171,'5556488','15','1-2023','Nomina','Jubilacion'),(172,'5555646','15','1-2023','Nomina','Jubilacion'),(173,'8878329','15','1-2023','Nomina','Jubilacion'),(174,'19975830','15','1-2023','Nomina','Empleado'),(175,'8868657','15','2-2023','Nomina','Alto Funcionario'),(176,'16914525','15','2-2023','Nomina','Alto Nivel'),(177,'6954619','15','2-2023','Nomina','Alto Nivel'),(178,'10565869','15','2-2023','Nomina','Alto Nivel'),(179,'10049489','15','2-2023','Nomina','Alto Nivel'),(180,'18237190','15','2-2023','Nomina','Alto Nivel'),(181,'21608801','15','2-2023','Nomina','Alto Nivel'),(182,'11168416','15','2-2023','Nomina','Alto Nivel'),(183,'14044189','15','2-2023','Nomina','Alto Nivel'),(184,'14883663','15','2-2023','Nomina','Alto Nivel'),(185,'13326473','15','2-2023','Nomina','Alto Nivel'),(186,'30385423','15','2-2023','Nomina','Alto Nivel'),(187,'22817345','15','2-2023','Nomina','Alto Nivel'),(188,'13920259','15','2-2023','Nomina','Alto Nivel'),(189,'8853145','15','2-2023','Nomina','Alto Nivel'),(190,'27438841','15','2-2023','Nomina','Alto Nivel'),(191,'23551159','15','2-2023','Nomina','Alto Nivel'),(192,'17162661','15','2-2023','Nomina','Empleado'),(193,'17633481','15','2-2023','Nomina','Empleado'),(194,'17383870','15','2-2023','Nomina','Empleado'),(195,'13657269','15','2-2023','Nomina','Empleado'),(196,'11202458','15','2-2023','Nomina','Empleado'),(197,'28694047','15','2-2023','Nomina','Empleado'),(198,'24849503','15','2-2023','Nomina','Empleado'),(199,'10049990','15','2-2023','Nomina','Empleado'),(200,'25849393','15','2-2023','Nomina','Empleado'),(201,'10573385','15','2-2023','Nomina','Obrero'),(202,'7877725','15','2-2023','Nomina','Obrero'),(203,'26744514','15','2-2023','Nomina','Obrero'),(204,'19975830','15','2-2023','Nomina','Empleado'),(205,'27730163','15','3-2023','Contratados','Contratado'),(206,'31298934','15','3-2023','Contratados','Contratado'),(207,'28032172','15','3-2023','Contratados','Contratado'),(208,'18238207','15','3-2023','Contratados','Contratado');
/*!40000 ALTER TABLE `nominapersonal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nominas`
--

DROP TABLE IF EXISTS `nominas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nominas` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `periodo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `realizado` varchar(255) NOT NULL,
  `correlativo` varchar(255) NOT NULL,
  `tiponomina` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nominas`
--

LOCK TABLES `nominas` WRITE;
/*!40000 ALTER TABLE `nominas` DISABLE KEYS */;
INSERT INTO `nominas` VALUES (5,'31-07-2023','2023-07-27','27438841','1-2023','Nomina'),(6,'15-07-2023','2023-07-27','27438841','2-2023','Nomina'),(7,'31-07-2023','2023-07-27','27438841','3-2023','Contratados');
/*!40000 ALTER TABLE `nominas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticias` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `redaccion` varchar(5000) NOT NULL,
  `resumen` varchar(2500) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (7,'La procuraduria realizo un seminario de capacitación del personal','img/noticias/descarga.jpg','La procuraduria realizo un seminario de capacitación del personal el 18 de enero del 2022 para un mejor funcionamiento de todos los trabajadores adscritos a la institucion','La procuraduria realizo un seminario de capacitación del personal el 18 de enero del 2022 para un mejor funcionamiento de todos los trabajadores adscritos a la institucion','27438841','2023-01-25'),(12,'La procuraduria realizo un seminario de capacitación del personal','img/noticias/IMG_20221215_101319.jpg','La procuraduria realizo un seminario de capacitación del personal','La procuraduria realizo un seminario de capacitación del personal','27438841','2023-01-27'),(13,'La procuraduria realizo un seminario de capacitación del personal','img/noticias/Penguins.jpg','La procuraduria realizo un seminario de capacitación del personal','La procuraduria realizo un seminario de capacitación del personal','27438841','2023-01-27'),(15,'La procuraduria realizo un seminario de capacitación del personal','img/noticias/Koala.jpg','La procuraduria realizo un seminario de capacitación del personal el 18 de enero del 2022 para un mejor funcionamiento de todos los trabajadores adscritos a la institucion','La procuraduria realizo un seminario de capacitación del personal el 18 de enero del 2022 para un mejor funcionamiento de todos los trabajadores adscritos a la institucion','27438841','2023-01-27'),(16,'La tecnología de la informática en 2022: una mirada al futuro','img/noticias/GIGABYTE_CES_2023.jpg','La informática se ha convertido en una parte integral de la vida moderna. Con el avance de la tecnología y la innovación, la informática 2022 ofrece perspectivas prometedoras. El aumento de la velocidad de procesamiento, la mejora de la seguridad y la inteligencia artificial (IA) estarán a la vanguardia de esta innovación.\r\n\r\nLos motores de búsqueda y los buscadores de información tendrán un papel clave en la informática 2022. Los motores de búsqueda cada vez más inteligentes, inteligencia artificial aplicada a la búsqueda de información, y sistemas que proporcionan información sobre temas específicos serán parte de la tecnología 2022. Esto permitirá a los usuarios encontrar la información que necesitan más rápido y de forma más precisa.\r\n\r\nLa seguridad informática será un gran foco de innovación en 2022. Los avances en criptografía, inteligencia artificial y tecnologías de autenticación mejorarán la seguridad de los sistemas informáticos. Esto ayudará a los usuarios a protegerse contra fraudes, ataques y otros riesgos informáticos.\r\n\r\nLa Inteligencia Artificial (IA) también será una de las principales innovaciones de la informática 2022. La IA será utilizada para mejorar el rendimiento de los dispositivos y aplicaciones, para proporcionar una experiencia de usuario más intuitiva y para mejorar los procesos comerciales en línea.\r\n\r\nSe espera que la informática 2022 mejore la productividad de los negocios al mejorar la interacción entre los sistemas informáticos, el internet de las cosas (IoT) y otros dispositivos. Los avances en la computación en nube, así como en los sistemas de colaboración empresarial, impulsarán esta tendencia.\r\n\r\nEstas son solo algunas de las innovaciones que se espera que lleguen a la informática 2022. Se espera que la innovación siga proporcionando nuevas oportunidades y beneficios para los usuarios y empresas.','La informática se ha convertido en una parte integral de la vida moderna, con el avance de la tecnología y la innovación. Para 2022, se esperan avances en velocidad de procesamiento, seguridad, inteligencia artificial, motores de búsqueda inteligentes y sistemas de información específicos. También se mejorará la seguridad informática, la interacción entre los sistemas informáticos y el internet de las cosas, además de nuevas oportunidades para los usuarios y empresas.','27438841','2023-01-30'),(20,'La procuraduria','img/noticias/1.png','La procuraduria','La procuraduria','27438841','2023-07-03');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parroquias`
--

DROP TABLE IF EXISTS `parroquias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parroquias` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `parroquia` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parroquias`
--

LOCK TABLES `parroquias` WRITE;
/*!40000 ALTER TABLE `parroquias` DISABLE KEYS */;
INSERT INTO `parroquias` VALUES (1,'Agua Salada','Angostura del Orinoco (Ciudad Bolívar)'),(2,'Catedral','Angostura del Orinoco (Ciudad Bolívar)'),(3,'José Antonio Páez','Angostura del Orinoco (Ciudad Bolívar)'),(6,'La Sabanita','Angostura del Orinoco (Ciudad Bolívar)'),(7,'Vista Hermosa','Angostura del Orinoco (Ciudad Bolívar)'),(8,'Marhuanta','Angostura del Orinoco (Ciudad Bolívar)'),(9,'Orinoco','Angostura del Orinoco (Ciudad Bolívar)'),(10,'Panapana','Angostura del Orinoco (Ciudad Bolívar)'),(11,'Zea','Angostura del Orinoco (Ciudad Bolívar)'),(12,'Sección Capital Raúl Leoni','Angostura (Ciudad Piar)'),(13,'Barceloneta','Angostura (Ciudad Piar)'),(14,'Santa Bárbara','Angostura (Ciudad Piar)'),(15,'San Francisco','Angostura (Ciudad Piar)'),(16,'5 de Julio','Caroní (Ciudad Guayana)'),(17,'Cachamay','Caroní (Ciudad Guayana)'),(18,'Chirica','Caroní (Ciudad Guayana)'),(19,'Once de Abril','Caroní (Ciudad Guayana)'),(20,'Dalla Costa','Caroní (Ciudad Guayana)'),(21,'Pozo Verde','Caroní (Ciudad Guayana)'),(22,'Simón Bolívar','Caroní (Ciudad Guayana)'),(23,'Unare','Caroní (Ciudad Guayana)'),(24,'Universidad','Caroní (Ciudad Guayana)'),(25,'Vista al Sol','Caroní (Ciudad Guayana)'),(26,'Yocoima','Caroní (Ciudad Guayana)'),(27,'Altagracia','Cedeño (Caicara del Orinoco)'),(28,'Ascensión Farreras','Cedeño (Caicara del Orinoco)'),(29,'Caicara del Orinoco','Cedeño (Caicara del Orinoco)'),(30,'Guaniamo','Cedeño (Caicara del Orinoco)'),(31,'La Urbana','Cedeño (Caicara del Orinoco)'),(32,'Pijiguaos','Cedeño (Caicara del Orinoco)'),(33,'El Palmar','Chien (El Palmar)'),(34,'El Callao','El Callao (El Callao)'),(35,'Santa Elena','Gran Sabana (Santa Elena de Uairén)'),(36,'Ikabarú','Gran Sabana (Santa Elena de Uairén)'),(37,'Andrés Eloy Blanco','Piar (Upata)'),(38,'Pedro Cova','Piar (Upata)'),(39,'Upata','Piar (Upata)'),(40,'Salom','Roscio (Guasipati)'),(41,'Parroquia y sección capital Roscio','Roscio (Guasipati)'),(42,'Dalla Costa','Sifontes (El Dorado)'),(43,'San Isidro','Sifontes (El Dorado)'),(44,'Tumeremo','Sifontes (El Dorado)'),(45,'Sección capital Sucre','Sucre (Maripa)'),(46,'Aripao','Sucre (Maripa)'),(47,'Guarataro','Sucre (Maripa)'),(48,'Las Majadas','Sucre (Maripa)'),(49,'Moitaco','Sucre (Maripa)');
/*!40000 ALTER TABLE `parroquias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preciobcv`
--

DROP TABLE IF EXISTS `preciobcv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preciobcv` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `precioactual` varchar(255) NOT NULL,
  `preciomanual` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preciobcv`
--

LOCK TABLES `preciobcv` WRITE;
/*!40000 ALTER TABLE `preciobcv` DISABLE KEYS */;
INSERT INTO `preciobcv` VALUES (6,'29.314','26.6');
/*!40000 ALTER TABLE `preciobcv` ENABLE KEYS */;
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
  `cedula` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (3,'¿Cual es su color favorito?','Negro','¿Cuando es su cumpleaños?','2001-12-04','¿Cual es su numero favorito?','4','28694047'),(7,'¿Cual es su color favorito?','Azul','¿Cuando es su cumpleaños?','2000-02-07','¿Cual es su numero favorito?','07','27438841');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `primantiguedad`
--

DROP TABLE IF EXISTS `primantiguedad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `primantiguedad` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `porcentaje` varchar(255) NOT NULL,
  `tiempo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primantiguedad`
--

LOCK TABLES `primantiguedad` WRITE;
/*!40000 ALTER TABLE `primantiguedad` DISABLE KEYS */;
INSERT INTO `primantiguedad` VALUES (1,'1','1'),(2,'2','2'),(3,'3','3'),(4,'4','4'),(5,'5','5'),(6,'6.20','6'),(7,'7.40','7'),(8,'8.60','8'),(9,'9.80','9'),(10,'11','10'),(11,'12.40','11'),(12,'13.80','12'),(13,'15.20','13'),(14,'16.60','14'),(15,'18','15'),(16,'19.60','16'),(17,'21.20','17'),(18,'22.80','18'),(19,'24.40','19'),(20,'26','20'),(21,'27.80','21'),(22,'29.60','22'),(23,'30','23'),(24,'0','0');
/*!40000 ALTER TABLE `primantiguedad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `primaspersonal`
--

DROP TABLE IF EXISTS `primaspersonal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `primaspersonal` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `antiguedad` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `hijos` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primaspersonal`
--

LOCK TABLES `primaspersonal` WRITE;
/*!40000 ALTER TABLE `primaspersonal` DISABLE KEYS */;
INSERT INTO `primaspersonal` VALUES (1,'23','ESPECIALISTA','0','8868657'),(2,'11','PROFESIONAL','2','16914525'),(3,'15','ESPECIALISTA','0','6954619'),(4,'13','TECNICO SUPERIOR UNIVERSITARIO','0','10565869'),(5,'3','MAESTRIA','0','10049489'),(6,'11','PROFESIONAL','1','18237190'),(7,'8','PROFESIONAL','1','21608801'),(8,'17','TECNICO SUPERIOR UNIVERSITARIO','0','11168416'),(9,'8','TECNICO SUPERIOR UNIVERSITARIO','2','14044189'),(10,'16','PROFESIONAL','0','14883663'),(11,'5','PROFESIONAL','1','13326473'),(12,'4','Sin Profesionalizacion','0','30385423'),(13,'3','PROFESIONAL','1','22817345'),(14,'2','TECNICO SUPERIOR UNIVERSITARIO','0','13920259'),(15,'19','PROFESIONAL','0','8853145'),(16,'5','TECNICO SUPERIOR UNIVERSITARIO','0','27438841'),(17,'1','PROFESIONAL','0','23551159'),(18,'7','Sin Profesionalizacion','2','17162661'),(19,'2','PROFESIONAL','1','17633481'),(20,'5','Sin Profesionalizacion','0','17383870'),(21,'13','TECNICO SUPERIOR UNIVERSITARIO','2','13657269'),(22,'17','PROFESIONAL','1','11202458'),(23,'0','Sin Profesionalizacion','0','28694047'),(24,'0','Sin Profesionalizacion','0','24849503'),(25,'4','Sin Profesionalizacion','0','10049990'),(26,'0','Sin Profesionalizacion','0','25849393'),(27,'5','Sin Profesionalizacion','0','10573385'),(28,'1','Sin Profesionalizacion','0','7877725'),(29,'4','Sin Profesionalizacion','0','26744514'),(30,'0','Sin Profesionalizacion','0','5551362'),(31,'0','Sin Profesionalizacion','0','3610305'),(32,'0','Sin Profesionalizacion','0','8868263'),(33,'0','Sin Profesionalizacion','0','4031187'),(34,'0','Sin Profesionalizacion','0','5556488'),(35,'0','Sin Profesionalizacion','0','5555646'),(36,'0','Sin Profesionalizacion','0','8878329'),(37,'0','Sin Profesionalizacion','0','8856323'),(38,'5','PROFESIONAL','1','19975830'),(39,'5','PROFESIONAL','1','19975830'),(40,'0','Sin Profesionalizacion','0','27730163'),(41,'0','Sin Profesionalizacion','0','31298934'),(42,'0','Sin Profesionalizacion','0','28032172'),(43,'0','Sin Profesionalizacion','0','18238207');
/*!40000 ALTER TABLE `primaspersonal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `primhijos`
--

DROP TABLE IF EXISTS `primhijos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `primhijos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `valor` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primhijos`
--

LOCK TABLES `primhijos` WRITE;
/*!40000 ALTER TABLE `primhijos` DISABLE KEYS */;
INSERT INTO `primhijos` VALUES (4,'12.50');
/*!40000 ALTER TABLE `primhijos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `primprofesion`
--

DROP TABLE IF EXISTS `primprofesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `primprofesion` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `profesion` varchar(255) NOT NULL,
  `porcentaje` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primprofesion`
--

LOCK TABLES `primprofesion` WRITE;
/*!40000 ALTER TABLE `primprofesion` DISABLE KEYS */;
INSERT INTO `primprofesion` VALUES (2,'TECNICO SUPERIOR UNIVERSITARIO','20'),(3,'PROFESIONAL','25'),(4,'ESPECIALISTA','30'),(5,'MAESTRIA','35'),(6,'DOCTOR','40'),(7,'Sin Profesionalizacion','0');
/*!40000 ALTER TABLE `primprofesion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recibos`
--

DROP TABLE IF EXISTS `recibos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recibos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(255) NOT NULL,
  `sueldo` varchar(255) NOT NULL,
  `antiguedad` varchar(255) NOT NULL,
  `profesion` varchar(255) NOT NULL,
  `hijos` varchar(255) NOT NULL,
  `totalcobra` varchar(255) NOT NULL,
  `correlativo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recibos`
--

LOCK TABLES `recibos` WRITE;
/*!40000 ALTER TABLE `recibos` DISABLE KEYS */;
/*!40000 ALTER TABLE `recibos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `referencias`
--

DROP TABLE IF EXISTS `referencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `referencias` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `COD` varchar(255) NOT NULL,
  `localizacion` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `parroquia` varchar(255) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `referencias`
--

LOCK TABLES `referencias` WRITE;
/*!40000 ALTER TABLE `referencias` DISABLE KEYS */;
INSERT INTO `referencias` VALUES (8,'10005','Registro CIvil','Angostura del Orinoco (Ciudad Bolívar)','Agua Salada','app_inf.rar'),(9,'1006','Llovizna','Angostura del Orinoco (Ciudad Bolívar)','Agua Salada','app_inf.rar');
/*!40000 ALTER TABLE `referencias` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respaldos`
--

LOCK TABLES `respaldos` WRITE;
/*!40000 ALTER TABLE `respaldos` DISABLE KEYS */;
INSERT INTO `respaldos` VALUES (21,'bd/pgeb-2023-06-07.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-07'),(22,'bd/pgeb-2023-06-09.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-09'),(23,'bd/pgeb-2023-06-19.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-19'),(24,'bd/pgeb-2023-06-23.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-23'),(25,'bd/pgeb-2023-06-23.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-23'),(26,'bd/pgeb-2023-06-26.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-26'),(27,'bd/pgeb-2023-06-27.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-27'),(28,'bd/pgeb-2023-07-12.sql','C:/xampp/htdocs/Procuraduria/bd','2023-07-12'),(29,'bd/pgeb-2023-07-26.sql','C:/xampp/htdocs/Procuraduria/bd','2023-07-26');
/*!40000 ALTER TABLE `respaldos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(255) NOT NULL,
  `roles` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'13657269',8);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trabajadores`
--

DROP TABLE IF EXISTS `trabajadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trabajadores` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `resolucion` varchar(255) DEFAULT NULL,
  `fechresolucion` date DEFAULT NULL,
  `nomina` varchar(255) NOT NULL,
  `adscrito` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadores`
--

LOCK TABLES `trabajadores` WRITE;
/*!40000 ALTER TABLE `trabajadores` DISABLE KEYS */;
INSERT INTO `trabajadores` VALUES (1,'SOLANGGE DEL CARMEN','CASTRO HINOJOSA','8868657','PROCURADOR GENERAL','123456462','2018-03-19','Alto Funcionario','Despacho del Procurador ','Activo'),(2,'RICARDO ENRIQUE','BERNAL LIZARDI','16914525','DIRECTOR GENERAL','445522154','2021-01-11','Alto Nivel','Despacho del Procurador ','Activo'),(3,'ROSIVIS','FARIAS RIVERO','6954619','DIRECTORA DE TALENTO HUMANO ','100-110-0042/2022','2018-08-01','Alto Nivel','Despacho del Procurador','Activo'),(4,'MAYERLING','CASTRO HINOJOSA','10565869','DIRECTORA DE COMUNICACIÓN Y PROTOCOLO','55844412','2018-08-31','Alto Nivel','Despacho del Procurador ','Activo'),(5,'JOSÉ REINALDO   ','FRANCO ROMERO','10049489','DIRECTOR DE ADMINISTRACIÓN(E)','22258441','2019-10-01','Alto Nivel','Despacho del Procurador','Activo'),(6,'ANGEL ANIBAL','ASCANIO','18237190','DIRECTOR DE REGISTRO DE BIENES MTTO Y SERV GRALES','454844212','2019-03-18','Alto Nivel','Despacho del Procurador ','Activo'),(7,'STEFANY MARIA','GUAURA BERTI','21608801','DIRECTORA DE  ASUNTOS LEGALES','88744412','2014-08-04','Alto Nivel','Dirección de Asuntos Legales','Activo'),(8,'MILAGRO DEL C','MACHADO ALMADA ','11168416','COORD EJECUTIVA DEL DESPACHO DEL PROCURADOR','11168416','2012-02-01','Alto Nivel','Despacho del Procurador','Activo'),(9,'HAYDELIS','ESPINOZA DE REQUENA','14044189','COORD DE REGISTRO DE BIENES MTTO Y SERV GENERALES','14044189','2015-06-26','Alto Nivel','Despacho del Procurador ','Activo'),(10,'EDUARDO JOSE','MARQUINA RAMOS','14883663','COORDINADOR DE DICTAMENES CONTRATOS Y OPINIONES JURID','14883663','2017-07-01','Alto Nivel','Dirección de Asuntos Legales','Activo'),(11,'SIUDY MARELVIS','INFANTE BRITO ','13326473','COORDINADORA DE TALENTO HUMANO','2224121','2021-12-01','Alto Nivel','Dirección de Talento Humano','Activo'),(12,'YANIHOT EDUARDO','LUGO GARCÍA','30385423','COORDINADOR DE SISTEMAS Y SOPORTE TÉCNICO','00025456','2021-12-01','Alto Nivel','Despacho del Procurador','Activo'),(13,'CARLA','TRIAS SALAS','22817345','DIRECTORA DE ADMOINISTRACION Y FINANZAS','22241154','2022-02-01','Alto Nivel','Despacho del Procurador ','Activo'),(14,'ANA YECENIA','ESPAÑA','13920259','COORDINADORA DE COMUNICACIÓN','77411541','2022-02-17','Alto Nivel','Dirección de Comunicación y Protocolo','Activo'),(15,'RENE RAFAEL','PUERTA MATA','8853145','DIRECTOR DE TALENTO HUMANO','42525252','2022-10-24','Alto Nivel','Despacho del Procurador ','Activo'),(16,'MOISES FRANCISCO','CELIS','27438841','COORDINADOR DE SISTEMAS Y SOPORTE TÉCNICO (E)','100-110-0014/2023','2021-11-02','Alto Nivel','Despacho del Procurador ','Activo'),(17,'CINDY ISAMAR','INFANTE MARTINEZ','23551159','COORDINADORA DE ARCHIVOS','55541124','2022-02-01','Alto Nivel','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(18,'LEISY LEYSANDER','SALAZAR RUIZ','17162661','ASISTENTE DE REGISTRO DE BIENES','2221541','2015-08-17','Empleado','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(19,'MILENIS JOSÉ','RODRIGUEZ','17633481','ABOGADO PROCURADOR DE LITIGIOS','222114411','2021-01-16','Empleado','Dirección de Asuntos Legales','Activo'),(20,'YANITZA MAGDALENA','INFANTE','17383870','RECEPCIONISTA','114412365','2018-08-21','Empleado','Dirección de Talento Humano','Activo'),(21,'AIDA MARÍA','PACHECO MAITA','13657269','ANALISTA DE TALENTO HUMANO II','4252526262','2022-05-02','Empleado','Dirección de Talento Humano','Activo'),(22,'YUTSI DEL VALLE','PEÑALVER DE RANGEL','11202458','ABOGADO PROCURADOR DE LITIGIOS','45646546546','2022-05-06','Empleado','Dirección de Asuntos Legales','Activo'),(23,'DARWIN JOSE','ZAMORA IBARRA','28694047','ANALISTA DE SISTEMAS','100-110-0007-2023','2022-01-02','Empleado','Coordinación de Sistemas y Soporte Técnico','Activo'),(24,'YOBEL ALBERTO','IRIARTE LARA','24849503','ANALISTA ADMINISTRATIVO','555441212','2023-01-11','Empleado','Dirección de Administracion','Activo'),(25,'JUAN CARLOS','ASCANIO PULIDO','10049990','CHOFER','4154654651','2023-01-16','Empleado','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(26,'LUIS FRANCISCO','MORILLO SAAVEDRA','25849393','ANALISTA DE ARCHIVO','456456565','2023-05-02','Empleado','Coordinación de Archivos','Activo'),(27,'ZUNILDE','SIFONTES','10573385','ASEADORA','1155441233','2018-06-11','Obrero','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(28,'DIGNA DEL VALLE','HERNÁNDEZ','7877725','MANTENIMIENTO Y SERVICIOS GENERALES','666887445','2022-02-17','Obrero','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(29,'IVAN JUNIOR','VERA BENAVIDES','26744514','MANTENIMIENTO Y SERVICIOS GENERALES','55744451','2022-06-16','Obrero','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(30,'GILDA','RODRIGUEZ','5551362','PENSIONADA','00000000','2000-01-01','Pension','PENSION','Activo'),(31,'VICTOR','PANTOJA','3610305','PENSIONADO','00000000','2000-01-01','Pension','PENSION','Activo'),(32,'MOISES','PEREZ','8868263','PENSIONADO','00000000','2000-01-01','Pension','Pensionado','Activo'),(33,'ALBA BERENICE','LORETO','4031187','JUBILADA','00000000','2000-01-01','Jubilacion','Jubilada','Activo'),(34,'YADIRA','VASQUEZ','5556488','JUBILADA','00000000','2000-01-01','Jubilacion','Jubilada','Activo'),(35,'CARMEN TRINA ','APONTE DE CONTRERAS','5555646','PENSION DE SOBREVIVIENTE','00000000','2000-01-01','Jubilacion','Jubilada','Activo'),(36,'LUIS ALBERTO','GUILLEN RODRIGUEZ','8878329','JUBILADO','00000000','2000-01-01','Jubilacion','Jubilada','Activo'),(37,'LUIS JESUS','IBARRA RENDON','8856323','Contratado','00000000','2023-05-01','Contratado','Contratado','Activo'),(38,'YESSIKA DEL CARMEN','YTRIAGO MAST','19975830','ANALISTA DE ADMINISTRACION','554411245','2023-07-21','Empleado','DIRECCION DE ADMINISTRACION','Activo'),(39,'KIMBERLY SABINA','VISIER DEDIER','27730163','PROMOTOR SOCIAL','4545454555','2023-06-01','Contratado','DESPACHO DEL PROCURADOR','Activo'),(40,'SCARLETH DEL CARMEN','RODRIGUEZ  MENDOZA','31298934','PROMOTOR SOCIAL','6665522541','2023-07-01','Contratado','DESPACHO DEL PROCURADOR','Activo'),(41,'EISSER GABRIEL','CAMARAY','28032172','PROMOTOR SOCIAL','665522511','2023-07-01','Contratado','DESPACHO DEL PROCURADOR','Activo'),(42,'NAIROBI VIRGINIA','GOMEZ VERA','18238207','PROMOTOR SOCIAL','4445551122','2023-07-01','Contratado','DESPACHO DEL PROCURADOR','Activo');
/*!40000 ALTER TABLE `trabajadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `txt`
--

DROP TABLE IF EXISTS `txt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `txt` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `total` varchar(255) NOT NULL,
  `correlativo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `txt`
--

LOCK TABLES `txt` WRITE;
/*!40000 ALTER TABLE `txt` DISABLE KEYS */;
/*!40000 ALTER TABLE `txt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cedula` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `privilegio` varchar(255) NOT NULL,
  `roles` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (3,'000000000','7c4a8d09ca3762af61e59520943dc26494f8941b','0',0,'img/perfil/1.png\r\n','Activo'),(10,'8868657','7c4a8d09ca3762af61e59520943dc26494f8941b','1',8,'img/perfil/1.png','Activo'),(14,'27438841','7c4a8d09ca3762af61e59520943dc26494f8941b','0',0,'img/perfil/5.png','Activo'),(15,'13326473','7c4a8d09ca3762af61e59520943dc26494f8941b','1',1,'img/perfil/1.png','Activo'),(16,'22817345','7c4a8d09ca3762af61e59520943dc26494f8941b','1',8,'img/perfil/1.png','Activo'),(17,'23551159','7c4a8d09ca3762af61e59520943dc26494f8941b','1',3,'img/perfil/2.png','Activo');
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

-- Dump completed on 2023-07-27 12:39:49
