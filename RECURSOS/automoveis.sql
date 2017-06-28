-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: automoveis
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `automoveis`
--

DROP TABLE IF EXISTS `automoveis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `automoveis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelo_id` int(11) DEFAULT NULL,
  `cor_id` int(11) DEFAULT NULL,
  `disponibilidade` tinyint(1) DEFAULT NULL,
  `matricula` char(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk-model_idx` (`modelo_id`),
  KEY `fk-color_idx` (`cor_id`),
  CONSTRAINT `fk-color` FOREIGN KEY (`cor_id`) REFERENCES `cores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk-model` FOREIGN KEY (`modelo_id`) REFERENCES `modelos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `automoveis`
--

LOCK TABLES `automoveis` WRITE;
/*!40000 ALTER TABLE `automoveis` DISABLE KEYS */;
INSERT INTO `automoveis` VALUES (1,15,2,0,'VE-08-23'),(2,8,1,0,'MZ-06-49'),(3,1,3,1,'CP-47-70'),(4,13,7,0,'IW-54-31'),(5,4,4,1,'QH-35-14'),(6,1,6,0,'GB-15-03'),(7,9,4,1,'TI-12-38'),(8,1,3,1,'PF-47-70'),(9,6,4,0,'UN-76-52'),(10,8,4,1,'VT-46-43'),(11,4,1,1,'EK-61-00'),(12,7,5,1,'KV-31-03'),(13,4,7,1,'ZL-96-18'),(14,2,6,0,'SH-16-44'),(15,13,1,1,'PA-83-78'),(16,14,1,0,'YQ-73-35'),(17,7,2,1,'MG-25-27'),(18,2,3,0,'BW-44-47'),(19,1,7,1,'YO-27-51'),(20,8,4,0,'KC-83-61'),(21,3,7,0,'ZP-68-47'),(22,5,5,1,'HM-96-97'),(23,11,1,1,'WC-99-60'),(24,8,6,0,'BN-00-16'),(25,7,5,0,'WJ-83-26'),(26,14,5,0,'FM-91-32'),(27,3,3,1,'FM-53-36'),(28,10,3,0,'TH-67-43'),(29,11,2,1,'KN-64-43'),(30,13,7,0,'RX-36-93'),(31,1,4,1,'XY-61-72'),(32,15,4,1,'EA-48-72'),(33,12,7,0,'UM-76-83'),(34,6,3,1,'BY-00-53'),(35,8,7,1,'UB-31-46'),(36,14,4,1,'PP-66-74'),(37,5,3,1,'LB-20-80'),(38,14,5,1,'LD-46-26'),(39,13,3,1,'SR-39-92'),(40,7,4,0,'BT-29-10'),(41,1,5,1,'FN-52-62'),(42,15,6,0,'SR-45-17'),(43,15,5,0,'EV-62-75'),(44,12,7,0,'ZE-17-56'),(45,9,7,1,'FW-77-75'),(46,3,2,0,'UE-38-29'),(47,1,2,1,'HO-31-22'),(48,2,2,1,'XM-48-90'),(49,4,2,1,'DK-49-00'),(50,3,3,1,'LS-43-70'),(51,8,4,1,'YZ-13-24'),(52,14,5,0,'SP-07-60'),(53,1,4,0,'RY-05-30'),(54,4,7,0,'WC-62-15'),(55,5,6,1,'SY-81-50'),(56,1,7,1,'GG-37-57'),(57,6,2,0,'XG-49-84'),(58,15,5,1,'IT-37-03'),(59,11,7,1,'JS-24-86'),(60,1,3,1,'BR-81-30'),(61,12,5,0,'YK-05-60'),(62,10,5,1,'GU-16-56'),(63,9,4,0,'BJ-73-84'),(64,1,2,1,'FF-00-05'),(65,4,3,1,'GH-92-15'),(66,3,6,0,'LA-25-21'),(67,14,4,1,'CF-75-23'),(68,15,6,0,'LS-99-96'),(69,12,4,0,'FI-49-43'),(70,8,4,0,'TJ-38-76'),(71,3,4,0,'XR-11-66'),(72,14,7,1,'SB-58-10'),(73,15,3,0,'BR-84-57'),(74,2,7,0,'DK-31-40'),(75,4,4,0,'MX-75-31'),(76,14,5,0,'CU-20-20'),(77,15,4,1,'JT-66-38'),(78,3,3,0,'AH-46-76'),(79,6,7,0,'VM-11-33'),(80,3,7,1,'JB-33-27'),(81,3,3,1,'HV-72-95'),(82,4,5,0,'OZ-39-54'),(83,12,7,1,'LN-10-57'),(84,4,3,0,'OF-56-86'),(85,12,7,0,'WE-40-42'),(86,12,7,1,'RL-96-95'),(87,10,4,1,'MX-60-26'),(88,9,6,0,'TQ-45-43'),(89,7,4,1,'EE-43-29'),(90,1,4,1,'BE-20-11'),(91,5,5,1,'SZ-29-19'),(92,7,2,0,'YB-11-04'),(93,3,6,0,'AM-40-34'),(94,12,4,0,'NF-23-69'),(95,11,2,0,'LA-57-94'),(96,13,3,1,'YS-09-04'),(97,5,2,0,'MB-49-32'),(98,3,1,0,'XX-32-25'),(99,4,2,0,'HM-64-74'),(100,14,5,0,'WC-44-48');
/*!40000 ALTER TABLE `automoveis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cores`
--

DROP TABLE IF EXISTS `cores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cores`
--

LOCK TABLES `cores` WRITE;
/*!40000 ALTER TABLE `cores` DISABLE KEYS */;
INSERT INTO `cores` VALUES (1,'vermelho'),(2,'verde'),(3,'preto'),(4,'branco'),(5,'cinzento'),(6,'azul'),(7,'amarelo');
/*!40000 ALTER TABLE `cores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fabricantes`
--

DROP TABLE IF EXISTS `fabricantes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fabricantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fabricantes`
--

LOCK TABLES `fabricantes` WRITE;
/*!40000 ALTER TABLE `fabricantes` DISABLE KEYS */;
INSERT INTO `fabricantes` VALUES (1,'Alfa Romeo'),(2,'BMW'),(3,'Audi'),(4,'Ford'),(5,'Fiat'),(6,'Nissan'),(7,'Peugeot'),(8,'Mercedes'),(9,'Toyota');
/*!40000 ALTER TABLE `fabricantes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos`
--

DROP TABLE IF EXISTS `modelos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `fabricante_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk-fabricante_idx` (`fabricante_id`),
  CONSTRAINT `fk-fabricante` FOREIGN KEY (`fabricante_id`) REFERENCES `fabricantes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos`
--

LOCK TABLES `modelos` WRITE;
/*!40000 ALTER TABLE `modelos` DISABLE KEYS */;
INSERT INTO `modelos` VALUES (1,'Gulieta',1),(2,'320',2),(3,'120',2),(4,'A3',3),(5,'A4',3),(6,'Escort',4),(7,'Uno',5),(8,'Qashqai',6),(9,'Micra',6),(10,'106',7),(11,'308',7),(12,'Classe A',8),(13,'GLA',8),(14,'Corolla',9),(15,'Yaris',9);
/*!40000 ALTER TABLE `modelos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-24  8:56:16
