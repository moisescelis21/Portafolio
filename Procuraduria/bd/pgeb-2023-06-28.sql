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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `constancias`
--

LOCK TABLES `constancias` WRITE;
/*!40000 ALTER TABLE `constancias` DISABLE KEYS */;
INSERT INTO `constancias` VALUES (21,'27438841','2023-06-06',1),(22,'27438841','2023-06-06',2),(23,'8868263','2023-06-07',3),(24,'27438841','2023-06-07',4),(25,'27438841','2023-06-09',5),(26,'27438841','2023-06-13',6),(27,'7877725','2023-06-13',7),(28,'28694047','2023-06-13',8),(29,'27438841','2023-06-13',9),(30,'27438841','2023-06-21',10),(31,'27438841','2023-06-23',11),(32,'27438841','2023-06-23',12);
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datosbancarios`
--

LOCK TABLES `datosbancarios` WRITE;
/*!40000 ALTER TABLE `datosbancarios` DISABLE KEYS */;
INSERT INTO `datosbancarios` VALUES (1,'BANCO DE VENEZUELA','01020635920000042479','0','8868657'),(2,'BANCO DE VENEZUELA','01020635910000052883','0','16914525'),(3,'BANCO DE VENEZUELA','01020414360000107068','0','6954619'),(4,'BANCO DE VENEZUELA','01020635920000140931','0','10565869'),(5,'BANCO DE VENEZUELA','01020414320000846167','0','10049489'),(6,'BANCO DE VENEZUELA','01020635980000025483','0','18237190'),(7,'BANCO DE VENEZUELA','01020635900000155942','0','21608801'),(8,'BANCO DE VENEZUELA','01020635980000048651','0','11168416'),(9,'BANCO DE VENEZUELA','01020635960000195795','0','14044189'),(10,'BANCO DE VENEZUELA','01020414390000128542','0','14883663'),(11,'BANCO DE VENEZUELA','01020414340000728845','0','13326473'),(12,'BANCO DE VENEZUELA','01020414300000804141','0','30385423'),(13,'BANCO DE VENEZUELA','01020635980000207670','0','22817345'),(14,'BANCO DE VENEZUELA','01020635970000052935','0','13920259'),(15,'BANCO DE VENEZUELA','01020635980000073422','0','8853145'),(16,'BANCO DE VENEZUELA','01020414330000781442','0','27438841'),(17,'BANCO DE VENEZUELA','01020414370001106217','0','23551159'),(18,'BANCO DE VENEZUELA','01020635990000191977','0','17162661'),(19,'BANCO DE VENEZUELA','01020640530000223405','0','17633481'),(20,'BANCO DE VENEZUELA','01020788620100002805','1','17383870'),(21,'BANCO DE VENEZUELA','01020414380000862235','0','13657269'),(22,'BANCO DE VENEZUELA','01020457700000122522','0','11202458'),(23,'BANCO DE VENEZUELA','01020414390000994077','0','28694047'),(24,'BANCO DE VENEZUELA','01020414300001410864','0','24849503'),(25,'BANCO DE VENEZUELA','01020457770100634000','1','10049990'),(26,'BANCO DE VENEZUELA','01020788660100001330','1','25849393'),(27,'BANCO DE VENEZUELA','01020788690000098232','0','10573385'),(28,'BANCO DE VENEZUELA','01020635910000444611','0','7877725'),(29,'BANCO DE VENEZUELA','01020414300000822039','0','26744514'),(30,'BANCO DE VENEZUELA','01020635940000043517','0','5551362'),(31,'BANCO DE VENEZUELA','01020635900000043478','0','3610305'),(32,'BANCO DE VENEZUELA','01020635900000043559','0','8868263'),(33,'BANCO DE VENEZUELA','01020635910000043494','0','4031187'),(34,'BANCO DE VENEZUELA','01020635960000043533','0','5556488'),(35,'BANCO DE VENEZUELA','01020635940000043520','0','5555646'),(36,'BANCO DE VENEZUELA','01020635930000043588','0','8878329'),(37,'BANCO DE VENEZUELA','01020501850003113059','0','8856323');
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `montos`
--

LOCK TABLES `montos` WRITE;
/*!40000 ALTER TABLE `montos` DISABLE KEYS */;
INSERT INTO `montos` VALUES (1,'409','700','0','0','0','8868657'),(2,'391','554','0','0','0','16914525'),(3,'376','450','0','0','0','6954619'),(4,'376','400','0','0','0','10565869'),(5,'376','708','0','0','0','10049489'),(6,'13','400','0','0','0','18237190'),(7,'376','554','0','0','0','21608801'),(8,'348','400','0','0','0','11168416'),(9,'348','350','0','0','0','14044189'),(10,'348','400','0','0','0','14883663'),(11,'348','504','0','0','0','13326473'),(12,'348','300','0','0','400','30385423'),(13,'348','658','0','0','0','22817345'),(14,'348','658','0','0','0','13920259'),(15,'348','708','0','0','0','8853145'),(16,'348','658','2000','0','400','27438841'),(17,'348','558','0','0','0','23551159'),(18,'228','250','0','0','0','17162661'),(19,'305','100','0','0','0','17633481'),(20,'203','508','0','0','0','17383870'),(21,'228','508','0','0','0','13657269'),(22,'316','300','0','0','0','11202458'),(23,'228','376','0','2000','0','28694047'),(24,'316','508','0','0','0','24849503'),(25,'228','504','0','0','0','10049990'),(26,'316','300','0','0','0','25849393'),(27,'200','458','0','0','0','10573385'),(28,'161','458','0','0','0','7877725'),(29,'200','200','0','0','0','26744514'),(30,'130','0','0','0','0','5551362'),(31,'130','0','0','0','0','3610305'),(32,'130','0','0','0','0','8868263'),(33,'130','0','0','0','0','4031187'),(34,'130','0','0','0','0','5556488'),(35,'130','0','0','0','0','5555646'),(36,'130','0','0','0','0','8878329'),(37,'250','350','0','0','0','8856323');
/*!40000 ALTER TABLE `montos` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=1048 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nominapersonal`
--

LOCK TABLES `nominapersonal` WRITE;
/*!40000 ALTER TABLE `nominapersonal` DISABLE KEYS */;
INSERT INTO `nominapersonal` VALUES (480,'8868657','15','1-2023','Nomina','Alto Funcionario'),(481,'16914525','15','1-2023','Nomina','Alto Nivel'),(482,'6954619','15','1-2023','Nomina','Alto Nivel'),(483,'10565869','15','1-2023','Nomina','Alto Nivel'),(484,'10049489','15','1-2023','Nomina','Alto Nivel'),(485,'18237190','15','1-2023','Nomina','Alto Nivel'),(486,'21608801','15','1-2023','Nomina','Alto Nivel'),(487,'11168416','15','1-2023','Nomina','Alto Nivel'),(488,'14044189','15','1-2023','Nomina','Alto Nivel'),(489,'14883663','15','1-2023','Nomina','Alto Nivel'),(490,'13326473','15','1-2023','Nomina','Alto Nivel'),(491,'30385423','15','1-2023','Nomina','Alto Nivel'),(492,'22817345','15','1-2023','Nomina','Alto Nivel'),(493,'13920259','15','1-2023','Nomina','Alto Nivel'),(494,'8853145','15','1-2023','Nomina','Alto Nivel'),(495,'27438841','15','1-2023','Nomina','Alto Nivel'),(496,'23551159','15','1-2023','Nomina','Alto Nivel'),(497,'17162661','15','1-2023','Nomina','Empleado'),(498,'17633481','15','1-2023','Nomina','Empleado'),(499,'17383870','15','1-2023','Nomina','Empleado'),(500,'13657269','15','1-2023','Nomina','Empleado'),(501,'11202458','15','1-2023','Nomina','Empleado'),(502,'28694047','15','1-2023','Nomina','Empleado'),(503,'24849503','15','1-2023','Nomina','Empleado'),(504,'10049990','15','1-2023','Nomina','Empleado'),(505,'25849393','15','1-2023','Nomina','Empleado'),(506,'10573385','15','1-2023','Nomina','Obrero'),(507,'7877725','15','1-2023','Nomina','Obrero'),(508,'26744514','15','1-2023','Nomina','Obrero'),(509,'5551362','15','1-2023','Nomina','Pension'),(510,'3610305','15','1-2023','Nomina','Pension'),(511,'8868263','15','1-2023','Nomina','Pension'),(512,'4031187','15','1-2023','Nomina','Jubilacion'),(513,'5556488','15','1-2023','Nomina','Jubilacion'),(514,'5555646','15','1-2023','Nomina','Jubilacion'),(515,'8878329','15','1-2023','Nomina','Jubilacion'),(516,'8868657','15','2-2023','Nomina','Alto Funcionario'),(517,'16914525','15','2-2023','Nomina','Alto Nivel'),(518,'6954619','15','2-2023','Nomina','Alto Nivel'),(519,'10565869','15','2-2023','Nomina','Alto Nivel'),(520,'10049489','15','2-2023','Nomina','Alto Nivel'),(521,'18237190','15','2-2023','Nomina','Alto Nivel'),(522,'21608801','15','2-2023','Nomina','Alto Nivel'),(523,'11168416','15','2-2023','Nomina','Alto Nivel'),(524,'14044189','15','2-2023','Nomina','Alto Nivel'),(525,'14883663','15','2-2023','Nomina','Alto Nivel'),(526,'13326473','15','2-2023','Nomina','Alto Nivel'),(527,'30385423','15','2-2023','Nomina','Alto Nivel'),(528,'22817345','15','2-2023','Nomina','Alto Nivel'),(529,'13920259','15','2-2023','Nomina','Alto Nivel'),(530,'8853145','15','2-2023','Nomina','Alto Nivel'),(531,'27438841','15','2-2023','Nomina','Alto Nivel'),(532,'23551159','15','2-2023','Nomina','Alto Nivel'),(533,'17162661','15','2-2023','Nomina','Empleado'),(534,'17633481','15','2-2023','Nomina','Empleado'),(535,'17383870','15','2-2023','Nomina','Empleado'),(536,'13657269','15','2-2023','Nomina','Empleado'),(537,'11202458','15','2-2023','Nomina','Empleado'),(538,'28694047','15','2-2023','Nomina','Empleado'),(539,'24849503','15','2-2023','Nomina','Empleado'),(540,'10049990','15','2-2023','Nomina','Empleado'),(541,'25849393','15','2-2023','Nomina','Empleado'),(542,'10573385','15','2-2023','Nomina','Obrero'),(543,'7877725','15','2-2023','Nomina','Obrero'),(544,'26744514','15','2-2023','Nomina','Obrero'),(614,'28694047','15','8-2023','Liquidacion','Trabajador'),(743,'8868657','15','11-2023','Nomina','Alto Funcionario'),(744,'16914525','15','11-2023','Nomina','Alto Nivel'),(745,'6954619','15','11-2023','Nomina','Alto Nivel'),(746,'10565869','15','11-2023','Nomina','Alto Nivel'),(747,'10049489','15','11-2023','Nomina','Alto Nivel'),(748,'18237190','15','11-2023','Nomina','Alto Nivel'),(749,'21608801','15','11-2023','Nomina','Alto Nivel'),(750,'11168416','15','11-2023','Nomina','Alto Nivel'),(751,'14044189','15','11-2023','Nomina','Alto Nivel'),(752,'14883663','15','11-2023','Nomina','Alto Nivel'),(753,'13326473','15','11-2023','Nomina','Alto Nivel'),(754,'30385423','15','11-2023','Nomina','Alto Nivel'),(755,'22817345','15','11-2023','Nomina','Alto Nivel'),(756,'13920259','15','11-2023','Nomina','Alto Nivel'),(757,'8853145','15','11-2023','Nomina','Alto Nivel'),(758,'27438841','15','11-2023','Nomina','Alto Nivel'),(759,'23551159','15','11-2023','Nomina','Alto Nivel'),(760,'17162661','15','11-2023','Nomina','Empleado'),(761,'17633481','15','11-2023','Nomina','Empleado'),(762,'17383870','15','11-2023','Nomina','Empleado'),(763,'13657269','15','11-2023','Nomina','Empleado'),(764,'11202458','15','11-2023','Nomina','Empleado'),(765,'28694047','15','11-2023','Nomina','Empleado'),(766,'24849503','15','11-2023','Nomina','Empleado'),(767,'10049990','15','11-2023','Nomina','Empleado'),(768,'25849393','15','11-2023','Nomina','Empleado'),(769,'10573385','15','11-2023','Nomina','Obrero'),(770,'7877725','15','11-2023','Nomina','Obrero'),(771,'26744514','15','11-2023','Nomina','Obrero'),(772,'5551362','15','11-2023','Nomina','Pension'),(773,'3610305','15','11-2023','Nomina','Pension'),(774,'8868263','15','11-2023','Nomina','Pension'),(775,'4031187','15','11-2023','Nomina','Jubilacion'),(776,'5556488','15','11-2023','Nomina','Jubilacion'),(777,'5555646','15','11-2023','Nomina','Jubilacion'),(778,'8878329','15','11-2023','Nomina','Jubilacion'),(837,'8868657','15','14-2023','CestaTicket','Alto Funcionario'),(838,'16914525','15','14-2023','CestaTicket','Alto Nivel'),(839,'6954619','15','14-2023','CestaTicket','Alto Nivel'),(840,'10565869','15','14-2023','CestaTicket','Alto Nivel'),(841,'10049489','15','14-2023','CestaTicket','Alto Nivel'),(842,'21608801','15','14-2023','CestaTicket','Alto Nivel'),(843,'11168416','15','14-2023','CestaTicket','Alto Nivel'),(844,'14044189','15','14-2023','CestaTicket','Alto Nivel'),(845,'14883663','15','14-2023','CestaTicket','Alto Nivel'),(846,'13326473','15','14-2023','CestaTicket','Alto Nivel'),(847,'30385423','15','14-2023','CestaTicket','Alto Nivel'),(848,'22817345','15','14-2023','CestaTicket','Alto Nivel'),(849,'13920259','15','14-2023','CestaTicket','Alto Nivel'),(850,'8853145','15','14-2023','CestaTicket','Alto Nivel'),(851,'27438841','15','14-2023','CestaTicket','Alto Nivel'),(852,'23551159','15','14-2023','CestaTicket','Alto Nivel'),(853,'17162661','15','14-2023','CestaTicket','Empleado'),(854,'17633481','15','14-2023','CestaTicket','Empleado'),(855,'17383870','15','14-2023','CestaTicket','Empleado'),(856,'13657269','15','14-2023','CestaTicket','Empleado'),(857,'11202458','15','14-2023','CestaTicket','Empleado'),(858,'28694047','15','14-2023','CestaTicket','Empleado'),(859,'24849503','15','14-2023','CestaTicket','Empleado'),(860,'10049990','15','14-2023','CestaTicket','Empleado'),(861,'25849393','15','14-2023','CestaTicket','Empleado'),(862,'10573385','15','14-2023','CestaTicket','Obrero'),(863,'7877725','15','14-2023','CestaTicket','Obrero'),(864,'26744514','15','14-2023','CestaTicket','Obrero'),(865,'8868657','15','15-2023','CestaTicket','Alto Funcionario'),(866,'16914525','15','15-2023','CestaTicket','Alto Nivel'),(867,'6954619','15','15-2023','CestaTicket','Alto Nivel'),(868,'10565869','15','15-2023','CestaTicket','Alto Nivel'),(869,'10049489','15','15-2023','CestaTicket','Alto Nivel'),(870,'21608801','15','15-2023','CestaTicket','Alto Nivel'),(871,'11168416','15','15-2023','CestaTicket','Alto Nivel'),(872,'14044189','15','15-2023','CestaTicket','Alto Nivel'),(873,'14883663','15','15-2023','CestaTicket','Alto Nivel'),(874,'13326473','15','15-2023','CestaTicket','Alto Nivel'),(875,'30385423','15','15-2023','CestaTicket','Alto Nivel'),(876,'22817345','15','15-2023','CestaTicket','Alto Nivel'),(877,'13920259','15','15-2023','CestaTicket','Alto Nivel'),(878,'8853145','15','15-2023','CestaTicket','Alto Nivel'),(879,'27438841','15','15-2023','CestaTicket','Alto Nivel'),(880,'23551159','15','15-2023','CestaTicket','Alto Nivel'),(881,'17162661','15','15-2023','CestaTicket','Empleado'),(882,'17633481','15','15-2023','CestaTicket','Empleado'),(883,'17383870','15','15-2023','CestaTicket','Empleado'),(884,'13657269','15','15-2023','CestaTicket','Empleado'),(885,'11202458','15','15-2023','CestaTicket','Empleado'),(886,'28694047','15','15-2023','CestaTicket','Empleado'),(887,'24849503','15','15-2023','CestaTicket','Empleado'),(888,'10049990','15','15-2023','CestaTicket','Empleado'),(889,'25849393','15','15-2023','CestaTicket','Empleado'),(890,'10573385','15','15-2023','CestaTicket','Obrero'),(891,'7877725','15','15-2023','CestaTicket','Obrero'),(892,'26744514','15','15-2023','CestaTicket','Obrero'),(894,'8856323','15','6-2023','Contratados','Trabajador'),(938,'27438841','15','5-2023','Vacaciones','Alto Nivel'),(939,'30385423','15','5-2023','Vacaciones','Alto Nivel');
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
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nominas`
--

LOCK TABLES `nominas` WRITE;
/*!40000 ALTER TABLE `nominas` DISABLE KEYS */;
INSERT INTO `nominas` VALUES (44,'30-06-2023','2023-06-06','27438841','1-2023','Nomina'),(45,'15-06-2023','2023-06-06','27438841','2-2023','Nomina'),(48,'30-06-2023','2023-06-06','27438841','5-2023','Vacaciones'),(49,'30-06-2023','2023-06-06','27438841','6-2023','Contratados'),(51,'30-06-2023','2023-06-06','27438841','8-2023','Liquidacion'),(57,'30-06-2023','2023-06-12','27438841','11-2023','Nomina'),(64,'30-06-2023','2023-06-19','27438841','14-2023','CestaTicket'),(65,'30-06-2023','2023-06-19','27438841','15-2023','CestaTicket');
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticias`
--

LOCK TABLES `noticias` WRITE;
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` VALUES (7,'La procuraduria realizo un seminario de capacitación del personal','img/noticias/descarga.jpg','La procuraduria realizo un seminario de capacitación del personal el 18 de enero del 2022 para un mejor funcionamiento de todos los trabajadores adscritos a la institucion','La procuraduria realizo un seminario de capacitación del personal el 18 de enero del 2022 para un mejor funcionamiento de todos los trabajadores adscritos a la institucion','27438841','2023-01-25'),(12,'La procuraduria realizo un seminario de capacitación del personal','img/noticias/IMG_20221215_101319.jpg','La procuraduria realizo un seminario de capacitación del personal','La procuraduria realizo un seminario de capacitación del personal','27438841','2023-01-27'),(13,'La procuraduria realizo un seminario de capacitación del personal','img/noticias/Penguins.jpg','La procuraduria realizo un seminario de capacitación del personal','La procuraduria realizo un seminario de capacitación del personal','27438841','2023-01-27'),(15,'La procuraduria realizo un seminario de capacitación del personal','img/noticias/Koala.jpg','La procuraduria realizo un seminario de capacitación del personal el 18 de enero del 2022 para un mejor funcionamiento de todos los trabajadores adscritos a la institucion','La procuraduria realizo un seminario de capacitación del personal el 18 de enero del 2022 para un mejor funcionamiento de todos los trabajadores adscritos a la institucion','27438841','2023-01-27'),(16,'La tecnología de la informática en 2022: una mirada al futuro','img/noticias/GIGABYTE_CES_2023.jpg','La informática se ha convertido en una parte integral de la vida moderna. Con el avance de la tecnología y la innovación, la informática 2022 ofrece perspectivas prometedoras. El aumento de la velocidad de procesamiento, la mejora de la seguridad y la inteligencia artificial (IA) estarán a la vanguardia de esta innovación.\r\n\r\nLos motores de búsqueda y los buscadores de información tendrán un papel clave en la informática 2022. Los motores de búsqueda cada vez más inteligentes, inteligencia artificial aplicada a la búsqueda de información, y sistemas que proporcionan información sobre temas específicos serán parte de la tecnología 2022. Esto permitirá a los usuarios encontrar la información que necesitan más rápido y de forma más precisa.\r\n\r\nLa seguridad informática será un gran foco de innovación en 2022. Los avances en criptografía, inteligencia artificial y tecnologías de autenticación mejorarán la seguridad de los sistemas informáticos. Esto ayudará a los usuarios a protegerse contra fraudes, ataques y otros riesgos informáticos.\r\n\r\nLa Inteligencia Artificial (IA) también será una de las principales innovaciones de la informática 2022. La IA será utilizada para mejorar el rendimiento de los dispositivos y aplicaciones, para proporcionar una experiencia de usuario más intuitiva y para mejorar los procesos comerciales en línea.\r\n\r\nSe espera que la informática 2022 mejore la productividad de los negocios al mejorar la interacción entre los sistemas informáticos, el internet de las cosas (IoT) y otros dispositivos. Los avances en la computación en nube, así como en los sistemas de colaboración empresarial, impulsarán esta tendencia.\r\n\r\nEstas son solo algunas de las innovaciones que se espera que lleguen a la informática 2022. Se espera que la innovación siga proporcionando nuevas oportunidades y beneficios para los usuarios y empresas.','La informática se ha convertido en una parte integral de la vida moderna, con el avance de la tecnología y la innovación. Para 2022, se esperan avances en velocidad de procesamiento, seguridad, inteligencia artificial, motores de búsqueda inteligentes y sistemas de información específicos. También se mejorará la seguridad informática, la interacción entre los sistemas informáticos y el internet de las cosas, además de nuevas oportunidades para los usuarios y empresas.','27438841','2023-01-30');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preciobcv`
--

LOCK TABLES `preciobcv` WRITE;
/*!40000 ALTER TABLE `preciobcv` DISABLE KEYS */;
INSERT INTO `preciobcv` VALUES (4,'27.6169','26.6');
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (3,'¿Cual es su color favorito?','Negro','¿Cuando es su cumpleaños?','2001-12-04','¿Cual es su numero favorito?','4','28694047'),(5,'¿Cual es su color favorito?','Azul','¿Cuando es su cumpleaños?','2000-02-07','¿Cual es su numero favorito?','07','27438841');
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primaspersonal`
--

LOCK TABLES `primaspersonal` WRITE;
/*!40000 ALTER TABLE `primaspersonal` DISABLE KEYS */;
INSERT INTO `primaspersonal` VALUES (1,'23','ESPECIALISTA','0','8868657'),(2,'10','PROFESIONAL','2','16914525'),(3,'15','ESPECIALISTA','0','6954619'),(4,'12','TECNICO SUPERIOR UNIVERSITARIO','0','10565869'),(5,'3','MAESTRIA','0','10049489'),(6,'11','PROFESIONAL','1','18237190'),(7,'8','PROFESIONAL','1','21608801'),(8,'17','TECNICO SUPERIOR UNIVERSITARIO','0','11168416'),(9,'7','TECNICO SUPERIOR UNIVERSITARIO','2','14044189'),(10,'16','PROFESIONAL','0','14883663'),(11,'4','PROFESIONAL','1','13326473'),(12,'4','Sin Profesionalizacion','0','30385423'),(13,'3','PROFESIONAL','1','22817345'),(14,'2','TECNICO SUPERIOR UNIVERSITARIO','0','13920259'),(15,'19','PROFESIONAL','0','8853145'),(16,'4','TECNICO SUPERIOR UNIVERSITARIO','0','27438841'),(17,'1','PROFESIONAL','0','23551159'),(18,'7','Sin Profesionalizacion','2','17162661'),(19,'5','PROFESIONAL','1','17633481'),(20,'5','Sin Profesionalizacion','0','17383870'),(21,'13','TECNICO SUPERIOR UNIVERSITARIO','2','13657269'),(22,'17','PROFESIONAL','1','11202458'),(23,'0','Sin Profesionalizacion','0','28694047'),(24,'0','Sin Profesionalizacion','0','24849503'),(25,'4','Sin Profesionalizacion','0','10049990'),(26,'0','Sin Profesionalizacion','0','25849393'),(27,'4','Sin Profesionalizacion','0','10573385'),(28,'1','Sin Profesionalizacion','0','7877725'),(29,'4','Sin Profesionalizacion','0','26744514'),(30,'0','Sin Profesionalizacion','0','5551362'),(31,'0','Sin Profesionalizacion','0','3610305'),(32,'0','Sin Profesionalizacion','0','8868263'),(33,'0','Sin Profesionalizacion','0','4031187'),(34,'0','Sin Profesionalizacion','0','5556488'),(35,'0','Sin Profesionalizacion','0','5555646'),(36,'0','Sin Profesionalizacion','0','8878329'),(37,'0','Sin Profesionalizacion','0','8856323');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `primhijos`
--

LOCK TABLES `primhijos` WRITE;
/*!40000 ALTER TABLE `primhijos` DISABLE KEYS */;
INSERT INTO `primhijos` VALUES (3,'12.50');
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
) ENGINE=InnoDB AUTO_INCREMENT=153 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recibos`
--

LOCK TABLES `recibos` WRITE;
/*!40000 ALTER TABLE `recibos` DISABLE KEYS */;
INSERT INTO `recibos` VALUES (30,'8868657','409.00','122.7','122.7','0','303.21','1-2023'),(31,'16914525','391.00','43.01','97.75','25','257.08','1-2023'),(32,'6954619','376.00','67.68','112.8','0','257.26','1-2023'),(33,'10565869','376.00','51.89','75.2','0','231.83','1-2023'),(34,'10049489','376.00','11.28','131.6','0','239.34','1-2023'),(35,'18237190','13.00','1.61','3.25','12.5','14.20','1-2023'),(36,'21608801','376.00','32.34','94','12.5','237.42','1-2023'),(37,'11168416','348.00','73.78','69.6','0','226.83','1-2023'),(38,'14044189','348.00','25.75','69.6','25','215.86','1-2023'),(39,'14883663','348.00','68.21','87','0','232.46','1-2023'),(40,'13326473','348.00','13.92','87','12.5','212.56','1-2023'),(41,'30385423','348.00','13.92','0','0','165.16','1-2023'),(42,'22817345','348.00','10.44','87','12.5','210.90','1-2023'),(43,'13920259','348.00','6.96','69.6','0','195.00','1-2023'),(44,'8853145','348.00','84.91','87','0','240.42','1-2023'),(45,'27438841','348.00','13.92','69.6','0','198.31','1-2023'),(46,'23551159','348.00','3.48','87','0','201.63','1-2023'),(47,'17162661','228.00','16.87','0','25','123.81','1-2023'),(48,'17633481','305.00','15.25','76.25','12.5','188.49','1-2023'),(49,'17383870','203.00','10.15','0','0','97.32','1-2023'),(50,'13657269','228.00','34.66','45.6','25','154.00','1-2023'),(51,'11202458','316.00','66.99','79','12.5','219.45','1-2023'),(52,'28694047','228.00','0','0','0','103.87','1-2023'),(53,'24849503','316.00','0','0','0','143.95','1-2023'),(54,'10049990','228.00','9.12','0','0','108.21','1-2023'),(55,'25849393','316.00','0','0','0','143.95','1-2023'),(56,'10573385','200.00','8','0','0','94.92','1-2023'),(57,'7877725','161.00','1.61','0','0','74.12','1-2023'),(58,'26744514','200.00','8','0','0','94.92','1-2023'),(59,'8868657','409.00','122.7','122.7','0','303.21','2-2023'),(60,'16914525','391.00','43.01','97.75','25','257.08','2-2023'),(61,'6954619','376.00','67.68','112.8','0','257.26','2-2023'),(62,'10565869','376.00','51.89','75.2','0','231.83','2-2023'),(63,'10049489','376.00','11.28','131.6','0','239.34','2-2023'),(64,'18237190','13.00','1.61','3.25','12.5','14.20','2-2023'),(65,'21608801','376.00','32.34','94','12.5','237.42','2-2023'),(66,'11168416','348.00','73.78','69.6','0','226.83','2-2023'),(67,'14044189','348.00','25.75','69.6','25','215.86','2-2023'),(68,'14883663','348.00','68.21','87','0','232.46','2-2023'),(69,'13326473','348.00','13.92','87','12.5','212.56','2-2023'),(70,'30385423','348.00','13.92','0','0','165.16','2-2023'),(71,'22817345','348.00','10.44','87','12.5','210.90','2-2023'),(72,'13920259','348.00','6.96','69.6','0','195.00','2-2023'),(73,'8853145','348.00','84.91','87','0','240.42','2-2023'),(74,'27438841','348.00','13.92','69.6','0','198.31','2-2023'),(75,'23551159','348.00','3.48','87','0','201.63','2-2023'),(76,'17162661','228.00','16.87','0','25','123.81','2-2023'),(77,'17633481','305.00','15.25','76.25','12.5','188.49','2-2023'),(78,'17383870','203.00','10.15','0','0','97.32','2-2023'),(79,'13657269','228.00','34.66','45.6','25','154.00','2-2023'),(80,'11202458','316.00','66.99','79','12.5','219.45','2-2023'),(81,'28694047','228.00','0','0','0','103.87','2-2023'),(82,'24849503','316.00','0','0','0','143.95','2-2023'),(83,'10049990','228.00','9.12','0','0','108.21','2-2023'),(84,'25849393','316.00','0','0','0','143.95','2-2023'),(85,'10573385','200.00','8','0','0','94.92','2-2023'),(86,'7877725','161.00','1.61','0','0','74.12','2-2023'),(87,'26744514','200.00','8','0','0','94.92','2-2023'),(117,'8868657','409.00','122.7','122.7','0','303.21','11-2023'),(118,'16914525','391.00','43.01','97.75','25','257.08','11-2023'),(119,'6954619','376.00','67.68','112.8','0','257.26','11-2023'),(120,'10565869','376.00','51.89','75.2','0','231.83','11-2023'),(121,'10049489','376.00','11.28','131.6','0','239.34','11-2023'),(122,'18237190','13.00','1.61','3.25','12.5','14.20','11-2023'),(123,'21608801','376.00','32.34','94','12.5','237.42','11-2023'),(124,'11168416','348.00','73.78','69.6','0','226.83','11-2023'),(125,'14044189','348.00','25.75','69.6','25','215.86','11-2023'),(126,'14883663','348.00','68.21','87','0','232.46','11-2023'),(127,'13326473','348.00','13.92','87','12.5','212.56','11-2023'),(128,'30385423','348.00','13.92','0','0','165.16','11-2023'),(129,'22817345','348.00','10.44','87','12.5','210.90','11-2023'),(130,'13920259','348.00','6.96','69.6','0','195.00','11-2023'),(131,'8853145','348.00','84.91','87','0','240.42','11-2023'),(132,'27438841','348.00','13.92','69.6','0','198.31','11-2023'),(133,'23551159','348.00','3.48','87','0','201.63','11-2023'),(134,'17162661','228.00','16.87','0','25','123.81','11-2023'),(135,'17633481','305.00','15.25','76.25','12.5','188.49','11-2023'),(136,'17383870','203.00','10.15','0','0','97.32','11-2023'),(137,'13657269','228.00','34.66','45.6','25','154.00','11-2023'),(138,'11202458','316.00','66.99','79','12.5','219.45','11-2023'),(139,'28694047','228.00','0','0','0','103.87','11-2023'),(140,'24849503','316.00','0','0','0','143.95','11-2023'),(141,'10049990','228.00','9.12','0','0','108.21','11-2023'),(142,'25849393','316.00','0','0','0','143.95','11-2023'),(143,'10573385','200.00','8','0','0','94.92','11-2023'),(144,'7877725','161.00','1.61','0','0','74.12','11-2023'),(145,'26744514','200.00','8','0','0','94.92','11-2023'),(146,'5551362','130.00','0','0','0','130.00','11-2023'),(147,'3610305','130.00','0','0','0','130.00','11-2023'),(148,'8868263','130.00','0','0','0','130.00','11-2023'),(149,'4031187','130.00','0','0','0','130.00','11-2023'),(150,'5556488','130.00','0','0','0','130.00','11-2023'),(151,'5555646','130.00','0','0','0','130.00','11-2023'),(152,'8878329','130.00','0','0','0','130.00','11-2023');
/*!40000 ALTER TABLE `recibos` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respaldos`
--

LOCK TABLES `respaldos` WRITE;
/*!40000 ALTER TABLE `respaldos` DISABLE KEYS */;
INSERT INTO `respaldos` VALUES (21,'bd/pgeb-2023-06-07.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-07'),(22,'bd/pgeb-2023-06-09.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-09'),(23,'bd/pgeb-2023-06-19.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-19'),(24,'bd/pgeb-2023-06-23.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-23'),(25,'bd/pgeb-2023-06-23.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-23'),(26,'bd/pgeb-2023-06-26.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-26'),(27,'bd/pgeb-2023-06-27.sql','C:/xampp/htdocs/Procuraduria/bd','2023-06-27');
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trabajadores`
--

LOCK TABLES `trabajadores` WRITE;
/*!40000 ALTER TABLE `trabajadores` DISABLE KEYS */;
INSERT INTO `trabajadores` VALUES (1,'SOLANGGE DEL CARMEN','CASTRO HINOJOSA','8868657','PROCURADOR GENERAL','123456462','2018-03-19','Alto Funcionario','Despacho del Procurador ','Activo'),(2,'RICARDO ENRIQUE','BERNAL LIZARDI','16914525','DIRECTOR GENERAL','445522154','2021-01-11','Alto Nivel','Despacho del Procurador ','Activo'),(3,'ROSIVIS','FARIAS RIVERO','6954619','DIRECTORA DE TALENTO HUMANO ','100-110-0042/2022','2018-08-01','Alto Nivel','Despacho del Procurador','Activo'),(4,'MAYERLING','CASTRO HINOJOSA','10565869','DIRECTORA DE COMUNICACIÓN Y PROTOCOLO','55844412','2018-08-31','Alto Nivel','Despacho del Procurador ','Activo'),(5,'JOSÉ REINALDO   ','FRANCO ROMERO','10049489','DIRECTOR DE ADMINISTRACIÓN(E)','22258441','2019-10-01','Alto Nivel','Despacho del Procurador','Activo'),(6,'ANGEL ANIBAL','ASCANIO','18237190','DIRECTOR DE REGISTRO DE BIENES MTTO Y SERV GRALES','454844212','2019-03-18','Alto Nivel','Despacho del Procurador ','Activo'),(7,'STEFANY MARIA','GUAURA BERTI','21608801','DIRECTORA DE  ASUNTOS LEGALES','88744412','2014-08-04','Alto Nivel','Dirección de Asuntos Legales','Activo'),(8,'MILAGRO DEL C','MACHADO ALMADA ','11168416','COORD EJECUTIVA DEL DESPACHO DEL PROCURADOR','11168416','2012-02-01','Alto Nivel','Despacho del Procurador','Activo'),(9,'HAYDELIS','ESPINOZA DE REQUENA','14044189','COORD DE REGISTRO DE BIENES MTTO Y SERV GENERALES','14044189','2015-06-26','Alto Nivel','Despacho del Procurador ','Activo'),(10,'EDUARDO JOSE','MARQUINA RAMOS','14883663','COORDINADOR DE DICTAMENES CONTRATOS Y OPINIONES JURID','14883663','2017-07-01','Alto Nivel','Dirección de Asuntos Legales','Activo'),(11,'SIUDY MARELVIS','INFANTE BRITO ','13326473','COORDINADOR DE TALENTO HUMANO','2224121','2021-12-01','Alto Nivel','Dirección de Talento Humano','Activo'),(12,'YANIHOT EDUARDO','LUGO GARCÍA','30385423','COORDINADOR DE SISTEMAS Y SOPORTE TÉCNICO','00025456','2021-12-01','Alto Nivel','Despacho del Procurador','Activo'),(13,'CARLA','TRIAS SALAS','22817345','COORDINADOR DE ADMINISTRACIÓN Y FINANZAS','22241154','2022-02-01','Alto Nivel','Despacho del Procurador ','Activo'),(14,'ANA YECENIA','ESPAÑA','13920259','COORDINADORA DE COMUNICACIÓN','77411541','2022-02-17','Alto Nivel','Dirección de Comunicación y Protocolo','Activo'),(15,'RENE RAFAEL','PUERTA MATA','8853145','COORD DE FORMULACIÓN CONTROL Y EJECUCION PRESUPUESTARIA','42525252','2022-10-24','Alto Nivel','Despacho del Procurador ','Activo'),(16,'MOISES FRANCISCO','CELIS','27438841','COORDINADOR DE SISTEMAS Y SOPORTE TÉCNICO (E)','100-110-0014/2023','2021-11-02','Alto Nivel','Despacho del Procurador ','Activo'),(17,'CINDY ISAMAR','INFANTE MARTINEZ','23551159','COORDINADORA DE ARCHIVOS','55541124','2022-02-01','Alto Nivel','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(18,'LEISY LEYSANDER','SALAZAR RUIZ','17162661','ASISTENTE DE REGISTRO DE BIENES','2221541','2015-08-17','Empleado','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(19,'MILENIS JOSÉ','RODRIGUEZ','17633481','ABOGADO PROCURADOR DE LITIGIOS','222114411','2021-01-16','Empleado','Dirección de Asuntos Legales','Activo'),(20,'YANITZA MAGDALENA','INFANTE','17383870','RECEPCIONISTA','114412365','2018-08-21','Empleado','Dirección de Talento Humano','Activo'),(21,'AIDA MARÍA','PACHECO MAITA','13657269','ANALISTA DE TALENTO HUMANO II','4252526262','2022-05-02','Empleado','Dirección de Talento Humano','Activo'),(22,'YUTSI DEL VALLE','PEÑALVER DE RANGEL','11202458','ABOGADO PROCURADOR DE LITIGIOS','45646546546','2022-05-06','Empleado','Dirección de Asuntos Legales','Activo'),(23,'DARWIN JOSE','ZAMORA IBARRA','28694047','ANALISTA DE SISTEMAS','100-110-0007-2023','2022-01-02','Empleado','Coordinación de Sistemas y Soporte Técnico','Activo'),(24,'YOBEL ALBERTO','IRIARTE LARA','24849503','ANALISTA ADMINISTRATIVO','555441212','2023-01-11','Empleado','Dirección de Administracion','Activo'),(25,'JUAN CARLOS','ASCANIO PULIDO','10049990','CHOFER','4154654651','2023-01-16','Empleado','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(26,'LUIS FRANCISCO','MORILLO SAAVEDRA','25849393','ANALISTA DE ARCHIVO','456456565','2023-05-02','Empleado','Coordinación de Archivos','Activo'),(27,'ZUNILDE','SIFONTES','10573385','ASEADORA','1155441233','2018-06-11','Obrero','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(28,'DIGNA DEL VALLE','HERNÁNDEZ','7877725','MANTENIMIENTO Y SERVICIOS GENERALES','666887445','2022-02-17','Obrero','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(29,'IVAN JUNIOR','VERA BENAVIDES','26744514','MANTENIMIENTO Y SERVICIOS GENERALES','55744451','2022-06-16','Obrero','Dirección de Registro de Bienes Mantenimiento y Servicios Generales','Activo'),(30,'GILDA','RODRIGUEZ','5551362','PENSIONADA','00000000','2000-01-01','Pension','PENSION','Activo'),(31,'VICTOR','PANTOJA','3610305','PENSIONADO','00000000','2000-01-01','Pension','PENSION','Activo'),(32,'MOISES','PEREZ','8868263','PENSIONADO','00000000','2000-01-01','Pension','Pensionado','Activo'),(33,'ALBA BERENICE','LORETO','4031187','JUBILADA','00000000','2000-01-01','Jubilacion','Jubilada','Activo'),(34,'YADIRA','VASQUEZ','5556488','JUBILADA','00000000','2000-01-01','Jubilacion','Jubilada','Activo'),(35,'CARMEN TRINA ','APONTE DE CONTRERAS','5555646','PENSION DE SOBREVIVIENTE','00000000','2000-01-01','Jubilacion','Jubilada','Activo'),(36,'LUIS ALBERTO','GUILLEN RODRIGUEZ','8878329','JUBILADO','00000000','2000-01-01','Jubilacion','Jubilada','Activo'),(37,'LUIS JESUS','IBARRA RENDON','8856323','Contratado','00000000','2023-05-01','Contratado','Contratado','Activo');
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
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `txt`
--

LOCK TABLES `txt` WRITE;
/*!40000 ALTER TABLE `txt` DISABLE KEYS */;
INSERT INTO `txt` VALUES (74,'2979200','14-2023');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (3,'000000000','7c4a8d09ca3762af61e59520943dc26494f8941b','0',0,'img/perfil/1.png\r\n','Activo'),(10,'8868657','7c4a8d09ca3762af61e59520943dc26494f8941b','1',8,'img/perfil/1.png','Activo'),(14,'27438841','7c4a8d09ca3762af61e59520943dc26494f8941b','0',0,'img/perfil/5.png','Activo');
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

-- Dump completed on 2023-06-27 20:00:14
