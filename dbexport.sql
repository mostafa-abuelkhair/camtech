-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: cam
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

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
-- Table structure for table `emails`
--

DROP TABLE IF EXISTS `emails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emails` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emails`
--

LOCK TABLES `emails` WRITE;
/*!40000 ALTER TABLE `emails` DISABLE KEYS */;
INSERT INTO `emails` VALUES (1,'cmth','01007375396');
/*!40000 ALTER TABLE `emails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `idata`
--

DROP TABLE IF EXISTS `idata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `idata` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `c1` varchar(255) DEFAULT NULL,
  `c2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `idata`
--

LOCK TABLES `idata` WRITE;
/*!40000 ALTER TABLE `idata` DISABLE KEYS */;
INSERT INTO `idata` VALUES (1,'cmth','01007375396');
/*!40000 ALTER TABLE `idata` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `systems`
--

DROP TABLE IF EXISTS `systems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `systems` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `item_name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `price` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `m_img` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `imgs` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `details` varchar(1000) DEFAULT NULL,
  `banner` int(2) DEFAULT NULL,
  `banner_img` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `systems`
--

LOCK TABLES `systems` WRITE;
/*!40000 ALTER TABLE `systems` DISABLE KEYS */;
INSERT INTO `systems` VALUES (6,'Ø³ÙŠØ³ØªÙ… ÙƒØ§Ù…Ù„ Ø§Ø±Ø¨Ø¹ ÙƒØ§Ù…ÙŠØ±Ø§Øª','3000 Ø¬Ù†ÙŠÙ‡','Ø³ÙŠØ³ØªÙ… ÙƒØ§Ù…Ù„ Ø§Ø±Ø¨Ø¹ ÙƒØ§Ù…ÙŠØ±Ø§Øª ÙˆØ§Ù„Ø¬Ù‡Ø§Ø² ÙˆØ§Ù„Ù‡Ø§Ø±Ø¯ ÙˆØ§Ù„Ø£Ø³Ù„Ø§Ùƒ ÙˆØ§Ù„Ø§Ø¯Ø§Ø¨ØªÙˆØ±Ø§Øª ÙˆØ§Ù„ØªØ±ÙƒÙŠØ¨ ÙˆØ§Ù„ØªØ´ØºÙŠÙ„Ø§Ù„Ø³Ø¹Ø± 3000Ø¬ ','67705170_1577731575691494_1436919985057300480_n.jpg','67705170_1577731575691494_1436919985057300480_n.jpg','ÙˆÙ„Ùˆ Ù…Ø­ØªØ§Ø¬ Ø¹Ø¯Ø¯ Ø£ÙƒØ¨Ø± Ø£Ùˆ Ø§Ù‚Ù„ Ù‡Ù†ÙØµÙ„Ùƒ Ø¹Ø±Ø¶ ÙŠÙ†Ø§Ø³Ø¨ Ù…ÙƒØ§Ù†Ùƒ 0102001827401060639068',0,'o3.jpg'),(9,'Ø§Ø±Ø¨Ø¹ ÙƒØ§Ù…ÙŠØ±Ø§Øª ÙˆØ§ÙŠØ±Ù„Ø³ Ù…Ù† ØºÙŠØ± Ø§Ù‰ Ø§Ø³Ù„Ø§Ùƒ ','3500 Ø¬Ù†ÙŠÙ‡',' Ø³ÙŠØ³ØªÙ… ÙƒØ§Ù…Ù„ Ø´Ø§Ù…Ù„ Ø§Ù„ØªØ±ÙƒÙŠØ¨ Ø§Ø±Ø¨Ø¹ ÙƒØ§Ù…ÙŠØ±Ø§Øª ÙˆØ§ÙŠØ±Ù„Ø³ Ù…Ù† ØºÙŠØ± Ø§Ù‰ Ø§Ø³Ù„Ø§Ùƒ\r\n nvrÙˆ Ù‡Ø§Ø±Ø¯ Ùˆ Ø§Ø¯Ø§Ø¨ØªÙˆØ±Ø§Øª ÙˆØ§Ù„Ø£Ø³Ù„Ø§Ùƒ ÙˆØ§Ù„ØªØ±ÙƒÙŠØ¨ ÙˆÙ„Ø£ÙˆÙ„ Ù…Ø±Ù‡ Ø§Ù„Ø³Ø¹Ø± 3500Ø¬','67624978_1577731555691496_5058305524211122176_n.jpg','67624978_1577731555691496_5058305524211122176_n.jpg','ÙˆÙ„Ùˆ Ù…Ø­ØªØ§Ø¬ Ø¹Ø¯Ø¯ Ø£ÙƒØ¨Ø± Ø£Ùˆ Ø§Ù‚Ù„ Ù‡Ù†ÙØµÙ„Ùƒ Ø¹Ø±Ø¶ ÙŠÙ†Ø§Ø³Ø¨ Ù…ÙƒØ§Ù†Ùƒ 01020018274    01060639068',1,'67803841_1585579038240081_2778835817513091072_n.jpg'),(19,'ÙƒØ§Ù…ÙŠØ±Ø§Øª Ù…Ø±Ø§Ù‚Ø¨Ù‡ 4 Ù…ÙŠØ¬Ø§','2200 Ø¬Ù†ÙŠÙ‡','Ù„Ø§ÙˆÙ„ Ù…Ø±Ù‡ Ø¹Ø±Ø¶ 4 Ù…ÙŠØ¬Ø§ ØŒØ¹Ø§Ø±Ù ÙŠØ¹Ù†ÙŠ Ø§ÙŠÙ‡ ÙƒØ§Ù…ÙŠØ±Ø§Øª Ù…Ø±Ø§Ù‚Ø¨Ù‡ 4 Ù…ÙŠØ¬Ø§ !!! ðŸ“·4ï¸âƒ£Ø¨Ø§Ù…ÙƒØ§Ù†ÙŠØ§Øª Ù…Ø¨Ù‡Ø±Ù‡ ÙˆØ³Ø¹Ø± Ø®Ø§Øµ Ø¬Ø¯Ø§ Ø³Ø§Ø±ÙŠ Ù„Ù…Ø¯Ø© Ø£Ø³Ø¨ÙˆØ¹ ÙÙ‚Ø· Ø³Ø¹Ø± Ø§Ù„Ø³ÙŠØ³ØªÙ… ÙƒØ§Ù…Ù„ Ø´Ø§Ù…Ù„ Ø§Ù„ÙƒØ§Ù…ÙŠØ±Ø§Øª , Ø§Ù„Ù‡Ø§Ø±Ø¯ØŒØ§Ù„Ø§Ø³Ù„Ø§Ùƒ ØŒØ§Ù„Ø§Ø¯Ø§Ø¨ØªÙˆØ±Ø§ØªØŒØ§Ù„ØªØ±ÙƒÙŠØ¨ ÙˆØ§Ù„ØªØ´ØºÙŠÙ„2200 Ø¬Ù†ÙŠÙ‡','67404772_1571720612959257_8697298784306069504_n.jpg','67404772_1571720612959257_8697298784306069504_n.jpg','Ù„Ø§ÙˆÙ„ Ù…Ø±Ù‡ Ø¹Ø±Ø¶ 4 Ù…ÙŠØ¬Ø§ ØŒØ¹Ø§Ø±Ù ÙŠØ¹Ù†ÙŠ Ø§ÙŠÙ‡ ÙƒØ§Ù…ÙŠØ±Ø§Øª Ù…Ø±Ø§Ù‚Ø¨Ù‡ 4 Ù…ÙŠØ¬Ø§ !!! ðŸ“·4ï¸âƒ£Ø¨Ø§Ù…ÙƒØ§Ù†ÙŠØ§Øª Ù…Ø¨Ù‡Ø±Ù‡ ÙˆØ³Ø¹Ø± Ø®Ø§Øµ Ø¬Ø¯Ø§ Ø³Ø§Ø±ÙŠ Ù„Ù…Ø¯Ø© Ø£Ø³Ø¨ÙˆØ¹\r\n ÙÙ‚Ø· Ø³Ø¹Ø± Ø§Ù„Ø³ÙŠØ³ØªÙ… ÙƒØ§Ù…Ù„ Ø´Ø§Ù…Ù„ Ø§Ù„ÙƒØ§Ù…ÙŠØ±Ø§Øª , Ø§Ù„Ù‡Ø§Ø±Ø¯ØŒØ§Ù„Ø§Ø³Ù„Ø§Ùƒ ØŒØ§Ù„Ø§Ø¯Ø§Ø¨ØªÙˆØ±Ø§ØªØŒØ§Ù„ØªØ±ÙƒÙŠØ¨ ÙˆØ§Ù„ØªØ´ØºÙŠÙ„2200 Ø¬Ù†ÙŠÙ‡ ÙŠÙˆØ¬Ø¯ Ø¹Ø±ÙˆØ¶ Ù‚ÙˆÙŠÙ‡ Ù„Ø¬Ù…ÙŠØ¹ Ø§Ù„Ø³ÙŠØ³ØªÙ…Ø§Øª ØŒÙƒÙ„ Ù…Ø§ÙŠØ²ÙŠØ¯ Ø§Ù„Ø¹Ø¯Ø¯ Ø¨ÙŠØ²ÙŠØ¯ Ø§Ù„Ø®ØµÙ… \r\n01020018274 Ø§Ù„Ø¹Ø±Ø¶ Ø´Ø§Ù…Ù„ Ø¹Ø¯Ø¯ Ù¢ÙƒØ§Ù…ÙŠØ±Ø§ ÙˆØ§Ù„Ø¬Ù‡Ø§Ø² ÙˆØ§Ù„Ù‡Ø§Ø±Ø¯ ÙˆØ§Ù„Ø§Ø¯Ø§Ø¨ØªÙˆØ±Ø§Øª ÙˆØ§Ù„ØªØ±ÙƒÙŠØ¨',0,'');
/*!40000 ALTER TABLE `systems` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-08 22:24:23
