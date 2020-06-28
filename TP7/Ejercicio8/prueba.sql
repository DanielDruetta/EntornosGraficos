CREATE DATABASE  IF NOT EXISTS `prueba` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `prueba`;
-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: prueba
-- ------------------------------------------------------
-- Server version	5.7.29-log

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
-- Table structure for table `buscador`
--

DROP TABLE IF EXISTS `buscador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `buscador` (
  `id` int(11) NOT NULL,
  `cancion` varchar(45) COLLATE utf8_bin NOT NULL,
  `album` varchar(45) COLLATE utf8_bin NOT NULL,
  `artista` varchar(45) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buscador`
--

LOCK TABLES `buscador` WRITE;
/*!40000 ALTER TABLE `buscador` DISABLE KEYS */;
INSERT INTO `buscador` VALUES (1,'Velamen','Destilar','La vela puerca'),(2,'Atala','Destilar','La vela puerca'),(3,'La nube','Destilar','La vela puerca'),(4,'Casi todo','Destilar','La vela puerca'),(5,'Mi diablo','Destilar','La vela puerca'),(6,'Con un farol','Destilar','La vela puerca'),(7,'De negro y rojo','Destilar','La vela puerca'),(8,'La luna de neuquen','Destilar','La vela puerca'),(9,'La revancha','Destilar','La vela puerca'),(10,'Pensar ','Destilar','La vela puerca'),(11,'Baco','Destilar','La vela puerca'),(12,'De la mano','Destilar','La vela puerca'),(13,'Aprendiz','Destilar','La vela puerca');
/*!40000 ALTER TABLE `buscador` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-26  9:16:18
