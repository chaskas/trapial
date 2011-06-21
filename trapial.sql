-- MySQL dump 10.13  Distrib 5.1.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: trapial
-- ------------------------------------------------------
-- Server version	5.1.54-1ubuntu4

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
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `dans_gallerie` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gallery_sluggable_idx` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'Test','',0,'2011-05-26 10:02:13','2011-05-26 10:02:40','test'),(2,'Tests','',0,'2011-06-13 23:51:41','2011-06-13 23:51:41','tests');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `picpath` varchar(255) DEFAULT NULL,
  `gallery_id` bigint(20) DEFAULT NULL,
  `is_default` tinyint(1) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `photos_sluggable_idx` (`slug`),
  KEY `gallery_id_idx` (`gallery_id`),
  CONSTRAINT `photos_gallery_id_gallery_id` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (1,'','AlejandraGarciaCrisosto.jpg',1,1,'2011-05-26 10:02:27','2011-05-26 10:02:27','alejandragarciacrisosto-jpg1306418547'),(2,'','ConstanzaRiveraSilva.jpg',1,0,'2011-05-26 10:02:28','2011-05-26 10:02:28','constanzariverasilva-jpg1306418548'),(3,'','DanielaJaraVelazquez.jpg',1,0,'2011-05-26 10:02:28','2011-05-26 10:02:28','danielajaravelazquez-jpg1306418548'),(4,'','DoloresMirandaBurgos.jpg',1,0,'2011-05-26 10:02:29','2011-05-26 10:02:29','doloresmirandaburgos-jpg1306418549'),(5,'','EducadorasDeParvulo3roSantoTomas.jpg',1,0,'2011-05-26 10:02:30','2011-05-26 10:02:30','educadorasdeparvulo3rosantotomas-jpg1306418550'),(6,'','ElenaSanchezMella.jpg',1,0,'2011-05-26 10:02:31','2011-05-26 10:02:31','elenasanchezmella-jpg1306418551'),(7,'','IngridCavieresDearruoy.jpg',1,0,'2011-05-26 10:02:31','2011-05-26 10:02:31','ingridcavieresdearruoy-jpg1306418551'),(8,'','JackelineLarenas.jpg',1,0,'2011-05-26 10:02:32','2011-05-26 10:02:32','jackelinelarenas-jpg1306418552'),(9,'','JaniraSilvaRios.jpg',1,0,'2011-05-26 10:02:33','2011-05-26 10:02:33','janirasilvarios-jpg1306418553'),(10,'','JocelynAlarcon.jpg',1,0,'2011-05-26 10:02:34','2011-05-26 10:02:34','jocelynalarcon-jpg1306418554'),(11,'','KarenReese.jpg',1,0,'2011-05-26 10:02:35','2011-05-26 10:02:35','karenreese-jpg1306418555'),(12,'','KatherineSaezGodoy.jpg',1,0,'2011-05-26 10:02:35','2011-05-26 10:02:35','katherinesaezgodoy-jpg1306418555'),(13,'','LaviniaSandoval.jpg',1,0,'2011-05-26 10:02:36','2011-05-26 10:02:36','laviniasandoval-jpg1306418556'),(14,'','PB296368.JPG',2,1,'2011-06-13 23:52:38','2011-06-13 23:52:38','pb296368-jpg1308023558'),(15,'','PB296369.JPG',2,0,'2011-06-13 23:52:42','2011-06-13 23:52:42','pb296369-jpg1308023562'),(16,'','PB296370.JPG',2,0,'2011-06-13 23:52:45','2011-06-13 23:52:45','pb296370-jpg1308023565'),(17,'','PB296371.JPG',2,0,'2011-06-13 23:52:49','2011-06-13 23:52:49','pb296371-jpg1308023569'),(18,'','PB296372.JPG',2,0,'2011-06-13 23:52:52','2011-06-13 23:52:52','pb296372-jpg1308023572'),(19,'','PB296373.JPG',2,0,'2011-06-13 23:52:56','2011-06-13 23:52:56','pb296373-jpg1308023576'),(20,'','PB296374.JPG',2,0,'2011-06-13 23:52:59','2011-06-13 23:52:59','pb296374-jpg1308023579'),(21,'','PB296375.JPG',2,0,'2011-06-13 23:53:02','2011-06-13 23:53:02','pb296375-jpg1308023582'),(22,'','PB296376.JPG',2,0,'2011-06-13 23:53:05','2011-06-13 23:53:05','pb296376-jpg1308023585'),(23,'','PB296377.JPG',2,0,'2011-06-13 23:53:09','2011-06-13 23:53:09','pb296377-jpg1308023589'),(24,'','PB296378.JPG',2,0,'2011-06-13 23:53:12','2011-06-13 23:53:12','pb296378-jpg1308023592'),(25,'','PB296379.JPG',2,0,'2011-06-13 23:53:17','2011-06-13 23:53:17','pb296379-jpg1308023597');
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_forgot_password`
--

DROP TABLE IF EXISTS `sf_guard_forgot_password`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_forgot_password` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `unique_key` varchar(255) DEFAULT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `sf_guard_forgot_password_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_forgot_password`
--

LOCK TABLES `sf_guard_forgot_password` WRITE;
/*!40000 ALTER TABLE `sf_guard_forgot_password` DISABLE KEYS */;
/*!40000 ALTER TABLE `sf_guard_forgot_password` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_group`
--

DROP TABLE IF EXISTS `sf_guard_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_group` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_group`
--

LOCK TABLES `sf_guard_group` WRITE;
/*!40000 ALTER TABLE `sf_guard_group` DISABLE KEYS */;
INSERT INTO `sf_guard_group` VALUES (1,'admin','Administrator group','2011-05-25 19:33:06','2011-05-25 19:33:06');
/*!40000 ALTER TABLE `sf_guard_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_group_permission`
--

DROP TABLE IF EXISTS `sf_guard_group_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_group_permission` (
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `permission_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`group_id`,`permission_id`),
  KEY `sf_guard_group_permission_permission_id_sf_guard_permission_id` (`permission_id`),
  CONSTRAINT `sf_guard_group_permission_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_group_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_group_permission`
--

LOCK TABLES `sf_guard_group_permission` WRITE;
/*!40000 ALTER TABLE `sf_guard_group_permission` DISABLE KEYS */;
INSERT INTO `sf_guard_group_permission` VALUES (1,1,'2011-05-25 19:33:06','2011-05-25 19:33:06');
/*!40000 ALTER TABLE `sf_guard_group_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_permission`
--

DROP TABLE IF EXISTS `sf_guard_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_permission` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_permission`
--

LOCK TABLES `sf_guard_permission` WRITE;
/*!40000 ALTER TABLE `sf_guard_permission` DISABLE KEYS */;
INSERT INTO `sf_guard_permission` VALUES (1,'admin','Administrator permission','2011-05-25 19:33:06','2011-05-25 19:33:06');
/*!40000 ALTER TABLE `sf_guard_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_remember_key`
--

DROP TABLE IF EXISTS `sf_guard_remember_key`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_remember_key` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) DEFAULT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `sf_guard_remember_key_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_remember_key`
--

LOCK TABLES `sf_guard_remember_key` WRITE;
/*!40000 ALTER TABLE `sf_guard_remember_key` DISABLE KEYS */;
/*!40000 ALTER TABLE `sf_guard_remember_key` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_user`
--

DROP TABLE IF EXISTS `sf_guard_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT '1',
  `is_super_admin` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_address` (`email_address`),
  UNIQUE KEY `username` (`username`),
  KEY `is_active_idx_idx` (`is_active`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_user`
--

LOCK TABLES `sf_guard_user` WRITE;
/*!40000 ALTER TABLE `sf_guard_user` DISABLE KEYS */;
INSERT INTO `sf_guard_user` VALUES (1,'Rodrigo','Campos','mr.chaskas@gmail.com','admin','sha1','5f497664731801d48e1ab7687486135c','f7e0da1f051804409cba1f9d41af071398f113bf',1,1,'2011-06-13 23:51:23','2011-05-25 19:33:06','2011-06-13 23:51:23'),(2,'Test','User','test@test.com','test','sha1','01fd4c6e64bdbc84e332ce171ee04026','334d5afdf541bbbcecd841ead7a8577c440792b3',1,0,'2011-06-07 12:16:35','2011-05-25 19:33:06','2011-06-07 12:16:35');
/*!40000 ALTER TABLE `sf_guard_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_user_group`
--

DROP TABLE IF EXISTS `sf_guard_user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_user_group` (
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `group_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `sf_guard_user_group_group_id_sf_guard_group_id` (`group_id`),
  CONSTRAINT `sf_guard_user_group_group_id_sf_guard_group_id` FOREIGN KEY (`group_id`) REFERENCES `sf_guard_group` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_user_group_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_user_group`
--

LOCK TABLES `sf_guard_user_group` WRITE;
/*!40000 ALTER TABLE `sf_guard_user_group` DISABLE KEYS */;
INSERT INTO `sf_guard_user_group` VALUES (1,1,'2011-05-25 19:33:06','2011-05-25 19:33:06');
/*!40000 ALTER TABLE `sf_guard_user_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_user_permission`
--

DROP TABLE IF EXISTS `sf_guard_user_permission`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_user_permission` (
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `permission_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`),
  KEY `sf_guard_user_permission_permission_id_sf_guard_permission_id` (`permission_id`),
  CONSTRAINT `sf_guard_user_permission_permission_id_sf_guard_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `sf_guard_permission` (`id`) ON DELETE CASCADE,
  CONSTRAINT `sf_guard_user_permission_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_user_permission`
--

LOCK TABLES `sf_guard_user_permission` WRITE;
/*!40000 ALTER TABLE `sf_guard_user_permission` DISABLE KEYS */;
/*!40000 ALTER TABLE `sf_guard_user_permission` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sf_guard_user_profile`
--

DROP TABLE IF EXISTS `sf_guard_user_profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sf_guard_user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `email` varchar(80) DEFAULT NULL,
  `fullname` varchar(80) DEFAULT NULL,
  `validate` varchar(17) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `sf_guard_user_profile_user_id_sf_guard_user_id` FOREIGN KEY (`user_id`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sf_guard_user_profile`
--

LOCK TABLES `sf_guard_user_profile` WRITE;
/*!40000 ALTER TABLE `sf_guard_user_profile` DISABLE KEYS */;
/*!40000 ALTER TABLE `sf_guard_user_profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trapial_comments`
--

DROP TABLE IF EXISTS `trapial_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trapial_comments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `comment_post_id` bigint(20) NOT NULL,
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT ' ',
  `comment_author_ip` varchar(100) NOT NULL DEFAULT ' ',
  `comment_content` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `comment_post_id` (`comment_post_id`),
  KEY `comment_post_id_idx` (`comment_post_id`),
  CONSTRAINT `trapial_comments_comment_post_id_trapial_posts_id` FOREIGN KEY (`comment_post_id`) REFERENCES `trapial_posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trapial_comments`
--

LOCK TABLES `trapial_comments` WRITE;
/*!40000 ALTER TABLE `trapial_comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `trapial_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trapial_employee`
--

DROP TABLE IF EXISTS `trapial_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trapial_employee` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `profession` text,
  `ocupation` text NOT NULL,
  `picture` text NOT NULL,
  `team` text NOT NULL,
  `nivel` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trapial_employee`
--

LOCK TABLES `trapial_employee` WRITE;
/*!40000 ALTER TABLE `trapial_employee` DISABLE KEYS */;
INSERT INTO `trapial_employee` VALUES (28,'Ximena','Espinosa Gonzalez','Educadora de Párvulos','Directora Institucional','810593dbbae0b6e57255a490d6c3c51d69a41f9d.jpg','0','0'),(30,'Ximena','Gonzalez Escobar','Administradora','Representante Legal y Directora de Gestión de Finanzas','bef9329470c1a5bf12b7685af28bfcec4d8d1c94.jpg','0','5'),(31,'Lavinia','Sandoval','','Manipuladora de Alimentos','adec7fa214a7ee5731ac1c02ad9f8b799f4e6fbd.jpg','2','0'),(32,'Ingrid','Cavieres Dearruoy','','Secretaría Administrativa','d700e442db8741c7a524a2aec48ce2a57234615f.jpg','0','0'),(33,'Karen','Resse','','Asistente','368565f9b01b6c3784123d3bf07fbffd06cd17ff.jpg','1','0'),(34,'Constanza','Rivera Silva','','Asistente','c06d7a2e1bf54089f89be520b2677d2ef187bf37.jpg','1','0'),(35,'Yasna','Toledo','','Educadora','fc218732df83aa7797a2026e84c69e6f2dcb2a06.jpg','1','1'),(36,'Pamela','Diaz Utreras','','Asistente','03253a87aa00b08673484fd028ab140ef1d1c6bc.jpg','1','1'),(37,'Tamara','Muñoz','','Asistente','4959144858578862d898a1246fa466ca04e14067.jpg','1','1'),(38,'Marjorie','Araya Toledo','','Educadora','51d9c8ba2e6bb3c7c2b98de2fa4710e577df229b.jpg','1','2'),(39,'Viviana','Herrera Silva','','Asistente','6acf68257de89767a018d265c8bbe15a98899563.jpg','1','2'),(40,'Jocelyn','Alarcon','','Asistente','33966788e2915d70b6db14142cacefd9d0f4d3b1.jpg','1','2'),(41,'Nadia','Mardones Gonzalez','','Educadora','dfb8b17e41365d16d0aa0761f386f18936ae2629.jpg','1','3'),(42,'Valeria','Salazar Jaramillo','','Asistente','7baa42ad6eb658b63808512b4d03b2e582e2ecfd.jpg','1','3'),(43,'Katherine','Saez Godoy','','Asistente','b2c7ddeeb5527bf5c56c5224985fe037b2ade8c6.jpg','1','3'),(44,'Janira','Silva Rios','','Educadora','da6c9927a3d73ab9853c80a49bb43f3581f4d493.jpg','1','4'),(45,'Elena','Sanchez Mella','','Asistente','6664060f2e4411867a466a6c20db20a7a31b5bf4.jpg','1','4'),(46,'Alejandra','Garcia Crisosto','','Educadora','ea2239a2a166c7d8b8a71a4e22b76297be497033.jpg','1','5'),(47,'Dolores','Miranda Burgos','','Asistente','1047b917d57e114cac9abdf15f68cc14d18ec19d.jpg','1','5'),(48,'Sandra','Rojas Coloma','','Educadora','b21f4a8b7396eb5c99b5fd400c43a0079962dd57.jpg','1','6'),(49,'Daniela','Jara Velasquez','','Asistente','2bc1c479e2d49535a43b24550e8cdf2bfb953af6.jpg','1','6'),(50,'Maricel','Burboa Parra','','Educadora','6577cb066db98f6d259ee0a5d276e48d8600da3d.jpg','1','7'),(51,'Regina','Lobos','','Auxiliar de Aseo','68ba5a0243488f28138df425362f925dc05e29e0.jpg','2','0'),(52,'Tamara','Muñoz','','Asistente de Furgón','b28003e85c8b84d73b977d729cd9f9c6a28526f4.jpg','2','0'),(53,'Constanza','Rivera','','Asistente de Furgón','82aa8f749e21c87bee6b9e50eafd971be20c2c18.jpg','2','0');
/*!40000 ALTER TABLE `trapial_employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trapial_posts`
--

DROP TABLE IF EXISTS `trapial_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trapial_posts` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by_idx` (`created_by`),
  KEY `updated_by_idx` (`updated_by`),
  CONSTRAINT `trapial_posts_created_by_sf_guard_user_id` FOREIGN KEY (`created_by`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE,
  CONSTRAINT `trapial_posts_updated_by_sf_guard_user_id` FOREIGN KEY (`updated_by`) REFERENCES `sf_guard_user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trapial_posts`
--

LOCK TABLES `trapial_posts` WRITE;
/*!40000 ALTER TABLE `trapial_posts` DISABLE KEYS */;
INSERT INTO `trapial_posts` VALUES (2,'<p><span style=\"font-family: \'trebuchet ms\', geneva;\"><em><span style=\"font-size: medium;\">Los delantales y buzos para el Jard&iacute;n se encargan en BARROS ARANA 514, LOCAL 7, FONO 2251611, Galer&iacute;a Catedral, Concepci&oacute;n.</span></em></span></p>','Delantales y Buzos','2011-05-25 19:33:06','2011-06-07 12:30:47',NULL,2),(3,'<p><em><span style=\"font-size: medium; font-family: \'trebuchet ms\', geneva;\">Nuestras nuevas dependencias de nuestro Jard&iacute;n, cuenta ahora con un grupo&nbsp; de profesionales en el tercer piso llamado CICCA, que cuenta con psic&oacute;logas, fonoaudi&oacute;logas, psicopedagogas y orientaci&oacute;n familiar. As&iacute; es que cualquier consulta pueden dirigirse a los fonos: 762 46 492 - 919 203 93 o al correo centrointegralcicca@gmail.com o visitar el sitio: www.wix.com/centrointegralcicca/centrointegral.</span></em></p>','Atención personalizada de profesionales','2011-05-31 19:21:09','2011-06-07 12:30:11',1,2),(4,'<p style=\"margin-bottom: 0cm;\" align=\"JUSTIFY\"><span style=\"font-size: medium;\"><span style=\"font-family: \'MV Boli\';\">En el segundo piso del nuevo edificio, se encuentra funcionando el Centro M&eacute;dico y Dental, que atiende especialidades de Medicina General, Kinesiolog&iacute;a y Odontolog&iacute;a Adultos, para quienes quieran hacer las consultas, el fono es: 317 46 32...</span></span></p>','Nuevo Centro Médico en nuestras dependencias','2011-05-31 19:46:57','2011-06-07 12:29:39',1,2),(5,'<p style=\"margin-bottom: 0cm;\" align=\"JUSTIFY\"><span style=\"font-family: \'MV Boli\'; font-size: medium;\">Para los pap&aacute;s que necesiten para sus hijos dentista infantil y adultos, en la oficina que est&aacute; en una esquina de nuestras nuevas dependencias, se instal&oacute; <strong>NovelDent Odont&oacute;logo Infantil y Adultos Jonathan Rubilar</strong>, que ya est&aacute; atendendiendo. Ofrece presupuesto gratuito!!! Para mayor informaci&oacute;n contactarse a los fonos: 323 91 66 &oacute; m&oacute;vil 92591215.</span></p>','Odontología Infantil abrió sus puertas para atención personalizada!!!!','2011-05-31 19:53:32','2011-06-07 12:29:23',1,2);
/*!40000 ALTER TABLE `trapial_posts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-06-14 10:49:06
