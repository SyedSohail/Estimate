-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: estimate
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data` (
  `cloudamp__data__c` varchar(100) DEFAULT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `bedrooms` int(11) DEFAULT NULL,
  `fullBaths` int(11) DEFAULT NULL,
  `frequency` varchar(100) DEFAULT NULL,
  `hear` varchar(256) DEFAULT NULL,
  `promoCode` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data`
--

LOCK TABLES `data` WRITE;
/*!40000 ALTER TABLE `data` DISABLE KEYS */;
INSERT INTO `data` VALUES ('','','','asdasd','asda','Alabama',234,'asd@sdfsdf','342342',2,2,'Weekly','sdfsf','w54'),('','','','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q'),('','asda','asda','asda','asda','Alabama',2,'dasd','asda',3,1,'Monthly','asdads','34q');
/*!40000 ALTER TABLE `data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'estimate'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-08 19:40:41
