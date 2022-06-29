-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: supermercat
-- ------------------------------------------------------
-- Server version	5.7.32-log
CREATE DATABASE IF NOT EXISTS supermercat;

USE supermercat; 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `assigna`
--

DROP TABLE IF EXISTS `assigna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assigna` (
  `Codi_seccio` varchar(6) NOT NULL,
  `DNI_cap` varchar(9) NOT NULL,
  `Data` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Codi_seccio`,`DNI_cap`),
  KEY `fk_assigna_2_idx` (`DNI_cap`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assigna`
--

LOCK TABLES `assigna` WRITE;
/*!40000 ALTER TABLE `assigna` DISABLE KEYS */;
INSERT INTO `assigna` VALUES ('A','20456772F','2020-02-02'),('B','47882119Z','2020-01-01');
/*!40000 ALTER TABLE `assigna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beneficia`
--

DROP TABLE IF EXISTS `beneficia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `beneficia` (
  `DNI_client` varchar(9) NOT NULL,
  `DNI_beneficiari` varchar(9) NOT NULL,
  PRIMARY KEY (`DNI_client`,`DNI_beneficiari`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beneficia`
--

LOCK TABLES `beneficia` WRITE;
/*!40000 ALTER TABLE `beneficia` DISABLE KEYS */;
INSERT INTO `beneficia` VALUES ('11883451S','32012635A'),('48567900V','12883915G');
/*!40000 ALTER TABLE `beneficia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caixer`
--

DROP TABLE IF EXISTS `caixer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `caixer` (
  `Titulacio` varchar(45) DEFAULT NULL,
  `Estat_civil` varchar(45) DEFAULT NULL,
  `DNI` varchar(9) NOT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caixer`
--

LOCK TABLES `caixer` WRITE;
/*!40000 ALTER TABLE `caixer` DISABLE KEYS */;
INSERT INTO `caixer` VALUES ('CFGS','Casat/da','19008412F'),('Auxiliar administratiu','Solter/a','20456772F'),('Batxillerat','Casat/da','45001239H'),('ADEM','Solter/a','78991354W');
/*!40000 ALTER TABLE `caixer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cap`
--

DROP TABLE IF EXISTS `cap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cap` (
  `Extra` decimal(10,0) DEFAULT NULL,
  `DNI` varchar(9) NOT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cap`
--

LOCK TABLES `cap` WRITE;
/*!40000 ALTER TABLE `cap` DISABLE KEYS */;
INSERT INTO `cap` VALUES (500,'20456772F'),(300,'47882119Z');
/*!40000 ALTER TABLE `cap` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `client` (
  `DNI` varchar(10) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `1rcog` varchar(45) DEFAULT NULL,
  `2ncog` varchar(45) DEFAULT NULL,
  `Telefon` varchar(9) DEFAULT NULL,
  `Poblacio` varchar(45) DEFAULT NULL,
  `Adreça` varchar(45) DEFAULT NULL,
  `Data_naix` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
INSERT INTO `client` VALUES ('11883451S','Jordi','Marti','Val','93124678','Barcelona','C/Guipuzcua,37','2001-10-23'),('12883915G','Marta','Torner','Font','621112234','Sitjes','Pza. Concordia,1','1996-05-06'),('22346771C','Elena','Larios','Cadiz','622381993','Girona','C/Segura,78','1973-08-09'),('32012635A','Robert','Guardiola','Sanz','677221439','Terrassa','C/Rasa,12','1994-12-12'),('46129771F','Maria','Pujol','Garriga','666113829','Barcelona','C/Bilbao,12','1965-10-12'),('48567900V','Albert','Grau','Silva','655232318','Manlleu','C/Cordoba,22','1987-12-04'),('53129748H','Marc','Lopez','Lopez','625319133','Abrera',' C/Mitjà S/N','1996-05-06');
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compra` (
  `DNI_client` varchar(9) NOT NULL,
  `Codi_promocio` varchar(6) NOT NULL,
  `Codi_producte` varchar(6) NOT NULL,
  PRIMARY KEY (`DNI_client`,`Codi_producte`,`Codi_promocio`),
  KEY `fk_compra_2_idx` (`Codi_producte`),
  KEY `fk_compra_3_idx` (`Codi_promocio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

LOCK TABLES `compra` WRITE;
/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
INSERT INTO `compra` VALUES ('11883451S','1','AA3121'),('22346771C','1','AA3121'),('53129748H','1','AA3121'),('32012635A','3','CJ2289'),('48567900V','2','GH1275'),('11883451S','1','GS2348'),('12883915G','1','GS2348'),('22346771C','1','GS2348'),('11883451S','1','KT7821'),('12883915G','1','KT7821'),('48567900V','2','KU1881'),('53129748H','2','KU1881'),('11883451S','4','SG4429'),('22346771C','4','SG4429'),('53129748H','4','SG4429');
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleat`
--

DROP TABLE IF EXISTS `empleat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleat` (
  `DNI` varchar(9) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `1rcog` varchar(45) DEFAULT NULL,
  `2ncog` varchar(45) DEFAULT NULL,
  `Telefon` varchar(9) DEFAULT NULL,
  `Adreça` varchar(45) DEFAULT NULL,
  `Poblacio` varchar(45) DEFAULT NULL,
  `Data_naix` date DEFAULT NULL,
  `Data_alta_cont` date DEFAULT NULL,
  `Data_fin_cont` date DEFAULT NULL,
  `Sou` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleat`
--

LOCK TABLES `empleat` WRITE;
/*!40000 ALTER TABLE `empleat` DISABLE KEYS */;
INSERT INTO `empleat` VALUES ('19008412F','Ana','Martin','Salceda','664732992','C/Constitucio,10','Blanes','2020-12-09','2017-07-15',NULL,'1200'),('20456772F','Antonio','Rodriguez','Pérez','633991644','C/Sol,13','Girona','1975-10-10','2016-10-04',NULL,'2000'),('23661452S','Maria','Martos','Perez','688239114','C/Zaragoza,22','Girona','1989-06-02','2019-02-02',NULL,'1200'),('38993175K','Alex','Caballero','Mongat','663881992','C/Revolució','Terrassa','1991-09-10','2019-12-10','2020-04-08','1500'),('44678154F','Raul','Marquez','Rio','631883921','C/Bailen,25','Barcelona','1993-06-27','2020-03-15','2020-05-01','1500'),('45001239H','Aroa','Lopez','Cal','612876459','C/Pintor Sorolla','Girona','1984-12-06','2018-01-02',NULL,'1200'),('47882119Z','Marc','Mayor','Caballero','645772911','C/Major,18','Barcelona','1990-10-04','2019-03-03',NULL,'1800'),('67331900G','Aitor','Machado','Soler','655888112','C/Sant Celoni,9','Barcelona','1992-07-12','2015-03-10','2017-03-03','1500'),('78991354W','Marta','Castro','Marrero','611934582','Pza. Molina,2','Badalona','1999-05-10','2016-03-04',NULL,'1200');
/*!40000 ALTER TABLE `empleat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producte`
--

DROP TABLE IF EXISTS `producte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producte` (
  `Codi` varchar(6) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `Descripcio` mediumtext,
  `Preu` decimal(10,0) DEFAULT NULL,
  `NIF` varchar(9) NOT NULL,
  `Codi_seccio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Codi`,`NIF`),
  KEY `fk_producte_1_idx` (`NIF`),
  KEY `fk_producte_2_idx` (`Codi_seccio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producte`
--

LOCK TABLES `producte` WRITE;
/*!40000 ALTER TABLE `producte` DISABLE KEYS */;
INSERT INTO `producte` VALUES ('AA3121','Arros Bomba','Arros Categoria extra',3,'65321783V','A'),('CJ2289','Bolquers','De 15 a 20 kg',12,'78633198G','D'),('GH1275','Llegiu','Aroma fresc',2,'25634111D','D'),('GS2348','Avellana','Avellana de Reus',6,'34567821F','A'),('JH4032','Caña de lomo','Llom curat',7,'67754990K','C'),('KT7821','Cogombre','De Murcia',1,'11134568V','A'),('KU1881','Gel','Gel de dutxa',2,'25634111D','D'),('OP3310','Nous','De Macadamia',4,'34567821F','A'),('SG4429','Pernil curat','Pernil de Jabugo',50,'67754990K','C'),('YI9011','Pernil dolç','Pernil extra',4,'67754990K','B');
/*!40000 ALTER TABLE `producte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `promocio`
--

DROP TABLE IF EXISTS `promocio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `promocio` (
  `Codi` varchar(6) NOT NULL,
  `Descripcio` varchar(45) DEFAULT NULL,
  `Data_inici` varchar(45) DEFAULT NULL,
  `Data_fi` date DEFAULT NULL,
  `Descompte` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`Codi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `promocio`
--

LOCK TABLES `promocio` WRITE;
/*!40000 ALTER TABLE `promocio` DISABLE KEYS */;
INSERT INTO `promocio` VALUES ('1','Temporada','2020-03-01','2020-04-01',20),('2','Neteja barata','2019-12-12','2020-02-01',5),('3','Tot hogar','2019-07-01','2019-08-01',10),('4','Pernilada','2018-10-10','2018-11-11',15);
/*!40000 ALTER TABLE `promocio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveidor`
--

DROP TABLE IF EXISTS `proveidor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveidor` (
  `NIF` varchar(9) NOT NULL,
  `Nom` varchar(45) DEFAULT NULL,
  `Telefon` varchar(9) DEFAULT NULL,
  `Poblacio` varchar(45) DEFAULT NULL,
  `Provincia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`NIF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveidor`
--

LOCK TABLES `proveidor` WRITE;
/*!40000 ALTER TABLE `proveidor` DISABLE KEYS */;
INSERT INTO `proveidor` VALUES ('11134568V','ECIGSA','646117234','Murcia','Murcia'),('23588143R','NIFICSA','623119335','Hellin','Albacete'),('25634111D','JOLCAR','621347999','Badalona','Barcelona'),('34567821F','CERISCAT','699231766','Barcelona','Barcelona'),('65321783V','ARROCES OZ','623445192','Valencia','Valencia'),('67754990K','JAMONES VERA','687875412','Jabugo','Huelva'),('78633198G','JM SL','656333228','Girona','Girona');
/*!40000 ALTER TABLE `proveidor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reponedor`
--

DROP TABLE IF EXISTS `reponedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reponedor` (
  `Hora_in` time(4) DEFAULT NULL,
  `Hora_out` time(4) DEFAULT NULL,
  `DNI` varchar(9) NOT NULL,
  PRIMARY KEY (`DNI`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reponedor`
--

LOCK TABLES `reponedor` WRITE;
/*!40000 ALTER TABLE `reponedor` DISABLE KEYS */;
INSERT INTO `reponedor` VALUES ('21:00:00.0000','07:00:00.0000','38993175K'),('07:00:00.0000','19:00:00.0000','44678154F'),('09:00:00.0000','21:00:00.0000','67331900G');
/*!40000 ALTER TABLE `reponedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seccio`
--

DROP TABLE IF EXISTS `seccio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `seccio` (
  `Codi` varchar(6) NOT NULL,
  `Situacio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Codi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seccio`
--

LOCK TABLES `seccio` WRITE;
/*!40000 ALTER TABLE `seccio` DISABLE KEYS */;
INSERT INTO `seccio` VALUES ('A','Accés Sud'),('B','Accés Nord'),('C','Accés Est'),('D','Accés Oest');
/*!40000 ALTER TABLE `seccio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-24 12:03:44