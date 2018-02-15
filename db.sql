-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: madeiramadeira
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` varchar(32) NOT NULL,
  `city` varchar(64) DEFAULT NULL,
  `postal_code` varchar(32) DEFAULT NULL,
  `neighbor` varchar(64) DEFAULT NULL,
  `street` varchar(64) DEFAULT NULL,
  `number` varchar(32) DEFAULT NULL,
  `state` char(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'Wilson de Souza 1','wilsonfalai@gmail.com','22988515853','Itaperuna','28300000','Aeroporto','Francisco Frias Rabelo','51','RJ','2018-02-13 19:09:53','2018-02-14 23:21:25'),(28,'Eucimara da Silva','eucimaradasilva@gmail.com','22988515853','Cabo Frio','28300000','','Rua Francisco Frias Rabelo','','RJ','2018-02-14 22:55:52','2018-02-14 22:55:52'),(30,'Wilson de Souza 2','wilsonfalai@gmail.com','22988515853','Itaperuna','28300000','Aeroporto','Francisco Frias Rabelo','51','RJ','2018-02-14 23:09:52','2018-02-14 23:09:52'),(31,'Wilson de Souza 3','wilsonfalai@gmail.com','22988515853','Itaperuna','28300000','Aeroporto','Francisco Frias Rabelo','51','RJ','2018-02-14 23:09:59','2018-02-14 23:09:59'),(32,'Wilson de Souza 4','wilsonfalai@gmail.com','22988515853','Pádua','28300000','Aeroporto','Francisco Frias Rabelo','51','RJ','2018-02-14 23:10:38','2018-02-14 23:21:41'),(33,'Wilson de Souza 5','wilsonfalai@gmail.com','22988515853','Itaperuna','28300000','Aeroporto','Francisco Frias Rabelo','51','RJ','2018-02-14 23:11:59','2018-02-14 23:11:59'),(34,'Wilson de Souza 8','wilsonfalai@gmail.com','22988515853','Itaperuna','28300000','Aeroporto','Francisco Frias Rabelo','51','SP','2018-02-14 23:12:50','2018-02-14 23:20:35');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-14 21:30:07
