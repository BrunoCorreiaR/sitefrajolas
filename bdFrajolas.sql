-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: frajolas
-- ------------------------------------------------------
-- Server version	5.7.10-log

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
-- Table structure for table `tblfaleconosco`
--

DROP TABLE IF EXISTS `tblfaleconosco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblfaleconosco` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `celular` varchar(17) NOT NULL,
  `email` varchar(45) NOT NULL,
  `Home_Page` varchar(45) DEFAULT NULL,
  `sexo` varchar(1) NOT NULL,
  `Link_Facebook` varchar(45) DEFAULT NULL,
  `Sugestao_Criticas` varchar(255) DEFAULT NULL,
  `Informacoes_Produtos` varchar(200) DEFAULT NULL,
  `Proficao` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblfaleconosco`
--

LOCK TABLES `tblfaleconosco` WRITE;
/*!40000 ALTER TABLE `tblfaleconosco` DISABLE KEYS */;
INSERT INTO `tblfaleconosco` VALUES (22,'bruna correi','1140028922','11989296556','brna@gmail','https://nandovieira.com.br','f','https://nandovieira.com.br','asef','asef','Técnico de Informática');
/*!40000 ALTER TABLE `tblfaleconosco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbluploadcuriosidade`
--

DROP TABLE IF EXISTS `tbluploadcuriosidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbluploadcuriosidade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL DEFAULT '',
  `descricao` varchar(250) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `estatos` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbluploadcuriosidade`
--

LOCK TABLES `tbluploadcuriosidade` WRITE;
/*!40000 ALTER TABLE `tbluploadcuriosidade` DISABLE KEYS */;
INSERT INTO `tbluploadcuriosidade` VALUES (9,'marcel','suave','arquivos/60.jpg',0),(10,'curioidade wer6jhw5','lsdkurgau ehrgukh aleuihgua heru ghael ugakeu hgkuhae kuhgaeh ugh aeul hgeq erbarueeeeeeeeeeeeeeeeeeeeeeeel','arquivos/icons8-shutdown (1).png',NULL);
/*!40000 ALTER TABLE `tbluploadcuriosidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblusuario`
--

DROP TABLE IF EXISTS `tblusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblusuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `telefone` varchar(12) DEFAULT NULL,
  `loguin` varchar(45) NOT NULL,
  `Senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblusuario`
--

LOCK TABLES `tblusuario` WRITE;
/*!40000 ALTER TABLE `tblusuario` DISABLE KEYS */;
INSERT INTO `tblusuario` VALUES (4,'dani oliveira','1198928392','br@gamil.com','1234'),(5,'Bruno correia','1140028922','br2@gamil.com','1234'),(6,'bruno','1140028922','br@gamil.com','1234');
/*!40000 ALTER TABLE `tblusuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-30 11:28:03
