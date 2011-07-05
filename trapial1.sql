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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (2,'ACTIVIDADES DE VERANO','actividades, talleres y entretención de verano 2010',1,'2011-06-13 23:51:41','2011-06-23 12:02:24','actividades-de-verano'),(3,'FOTOS DEL RECUERDO','AÑOS ANTERIORES, RECUERDOS HERMOSOS',1,'2011-06-23 12:03:17','2011-06-23 12:04:40','fotos-del-recuerdo'),(4,'EVENTOS INFANTILES','ALGUNOS DE NUESTROS SERVICIOSSERVICIOS',1,'2011-06-23 12:09:02','2011-06-23 12:17:43','eventos-infantiles');
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
INSERT INTO `photos` VALUES (22,'','PB296376.JPG',2,0,'2011-06-13 23:53:05','2011-06-13 23:53:05','pb296376-jpg1308023585'),(23,'','PB296377.JPG',2,0,'2011-06-13 23:53:09','2011-06-13 23:53:09','pb296377-jpg1308023589'),(26,'','activ. verano 2011, correlacióm2 695.jpg',2,1,'2011-06-15 10:44:34','2011-06-15 10:44:34','activ-verano-2011-correlaci-m2-695-jpg1308149074'),(27,'','Paseos recreativos verano 2011 313.jpg',2,0,'2011-06-23 11:39:48','2011-06-23 11:39:48','paseos-recreativos-verano-2011-313-jpg1308843588'),(28,'','4.jpg',2,0,'2011-06-23 12:01:54','2011-06-23 12:01:54','4-jpg1308844914'),(29,'','1.jpg',3,1,'2011-06-23 12:03:35','2011-06-23 12:03:35','1-jpg1308845015'),(30,'','2.jpg',3,0,'2011-06-23 12:03:43','2011-06-23 12:03:43','2-jpg1308845023'),(31,'','3.jpg',3,0,'2011-06-23 12:03:50','2011-06-23 12:03:50','3-jpg1308845030'),(32,'','5.jpg',3,0,'2011-06-23 12:03:55','2011-06-23 12:03:55','5-jpg1308845035'),(33,'','DSC02296.JPG',4,1,'2011-06-23 12:09:22','2011-06-23 12:09:22','dsc02296-jpg1308845362'),(34,'','DSC02300.JPG',4,0,'2011-06-23 12:09:34','2011-06-23 12:09:34','dsc02300-jpg1308845374'),(35,'','DSC02388.JPG',4,0,'2011-06-23 12:09:42','2011-06-23 12:09:42','dsc02388-jpg1308845382'),(36,'','DSC02853.JPG',4,0,'2011-06-23 12:10:55','2011-06-23 12:10:55','dsc02853-jpg1308845455'),(38,'','DSC02844.JPG',4,0,'2011-06-23 12:12:58','2011-06-23 12:12:58','dsc02844-jpg1308845578'),(39,'','IMG_4221.JPG',4,0,'2011-06-23 12:13:06','2011-06-23 12:13:06','img_4221-jpg1308845586'),(41,'','DSC01965.JPG',4,0,'2011-06-23 12:16:23','2011-06-23 12:16:23','dsc01965-jpg1308845783'),(42,'','DSC02095.JPG',4,0,'2011-06-23 12:17:17','2011-06-23 12:17:17','dsc02095-jpg1308845837');
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
INSERT INTO `sf_guard_user` VALUES (1,'Admin','Cantaclaro','admin@mundocantaclaro.cl','admin','sha1','5f497664731801d48e1ab7687486135c','31bfab00fb6a16144a6bacc360cf3d31f7775922',1,1,'2011-06-23 12:00:23','2011-05-25 19:33:06','2011-06-23 12:00:23'),(2,'Test','User','test@test.com','test','sha1','01fd4c6e64bdbc84e332ce171ee04026','334d5afdf541bbbcecd841ead7a8577c440792b3',1,0,'2011-06-15 12:27:24','2011-05-25 19:33:06','2011-06-15 12:27:24');
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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trapial_employee`
--

LOCK TABLES `trapial_employee` WRITE;
/*!40000 ALTER TABLE `trapial_employee` DISABLE KEYS */;
INSERT INTO `trapial_employee` VALUES (28,'Ximena','Espinosa Gonzalez','Educadora de Párvulos','Directora Institucional','8ea6f8eec0cbab632fb82273c97d50b3e202d6fe.jpg','0','0'),(30,'Ximena','Gonzalez Escobar','Administradora','Representante Legal y Directora de Gestión de Finanzas','8a17442bc41826420570fafa06b66a2860ec4c77.jpg','0','5'),(31,'Lavinia','Sandoval','','Manipuladora de Alimentos','902003475f2bd00c817731dc7fbd902a0b399a1c.jpg','2','0'),(32,'Ingrid','Cavieres Dearruoy','','Secretaría Administrativa','e5e6e3a449d6e5d2076c70a808577fadb04f6844.jpg','0','0'),(33,'Karen','Resse','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','de02e7b00e327bab1a42c23c032581a220866adf.jpg','1','0'),(34,'Constanza','Rivera Silva','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','36d50caebac94e1ea066b81b52b53d4c64b97730.jpg','1','0'),(35,'Yasna','Toledo','Educadora de Párvulos','Educadora de Párvulos','d052ed4655ede3254c20e74fd2de0f59d68da4af.jpg','1','1'),(36,'Pamela','Diaz Utreras','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','b6cf632273d966bce4c5127087df99ae788f56a6.jpg','1','1'),(37,'Tamara','Muñoz','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','a00372518e7284be8543a020f4ba7a79d167281f.jpg','1','1'),(38,'Marjorie','Araya Toledo','Educadora de Párvulos','Educadora de Párvulos','4f1b65527b17458e57c18c7003ea7b0ae479eb4e.jpg','1','2'),(39,'Viviana','Herrera Silva','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','7108a4c2d5253e91faa413d161b4bcf5235bda77.jpg','1','2'),(40,'Jocelyn','Alarcon','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','58690a45e610fa54d26dbb5f8dfbd4c862250275.jpg','1','2'),(41,'Nadia','Mardones Gonzalez','Educadora de Párvulos','Educadora de Párvulos','5d500197c9db51a3a15dcc37487362d849fec58e.jpg','1','3'),(42,'Valeria','Salazar Jaramillo','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','a14a4eb1ee23be589bb15225e2be70e959297d35.jpg','1','3'),(43,'Katherine','Saez Godoy','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','87c4c9c5c37fbb85b1fc72329dfc1116901cf359.jpg','1','3'),(44,'Janira','Silva Rios','Educadora de Párvulos','Educadora de Párvulos','1dabc0a06abadb65df983381ee2d65f2078d8b40.jpg','1','4'),(45,'Elena','Sanchez Mella','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','721d2bedd032ae975c42976248d575a58ce5edce.jpg','1','4'),(46,'Alejandra','Garcia Crisosto','Educadora de Párvulos','Educadora de Párvulos','888ccb3a66b94f6e0a33796c6f2bdaa80b99a2a9.jpg','1','5'),(47,'Dolores','Miranda Burgos','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','9e79199b5abbb3d4ff822d563567401ac9807863.jpg','1','5'),(48,'Sandra','Rojas Coloma','Educadora de Párvulos','Educadora de Párvulos','7b28e58adb14a2dc09691adc2426d89d2bc93d78.jpg','1','6'),(49,'Daniela','Jara Velasquez','Técnico de Nivel Superior en Párvulos ','Asistente de Párvulos','3bdea76c7ce0dec3556802b301deb682be22d4ad.jpg','1','6'),(50,'Maricel','Burboa Parra','Educadora de Párvulos','Educadora de Párvulos','159df1df569e6ed74d874896dac385cc68c97991.jpg','1','7'),(51,'Regina','Lobos','','Auxiliar de Aseo','8ea191d4939241fa7df8893587f24e4c116610f4.jpg','2','0'),(52,'Tamara','Muñoz','','Asistente de Furgón','3282f7d5bd3f2ee81b57196cbafbd21cbac247c0.jpg','2','0'),(53,'Constanza','Rivera','','Asistente de Furgón','72e1a287d8a85123c7c763ef18b3dc01f3c30e34.jpg','2','0'),(54,'Macarena','Vargas Aguila','Educadora de Párvulos','Educadora de Párvulos','dbdcbb7f850d3764368e13306870179aeaeeaea3.jpg','1','0'),(55,'Marcela','Aedo','','Manipuladora de Alimentos','1041dd11a6d694cb7300d60507ff5add775fa17d.jpg','2','0'),(56,'Mauricio','','','Conductor','18fad6b332a3002a542dbf47ad7e1fabece8e3e3.jpg','2','0'),(57,'Jacqueline','Larenas','','Auxiliar de Aseo','b4b629feb9b0b5d25e9a90bdbf4e077017aefaa9.jpg','2','0'),(58,'Fabiola ','Parra','Contadora','Contadora y Conductora Furgón','491f58a5f24169604e3999f16e3829d15cae527a.jpg','2','0');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trapial_posts`
--

LOCK TABLES `trapial_posts` WRITE;
/*!40000 ALTER TABLE `trapial_posts` DISABLE KEYS */;
INSERT INTO `trapial_posts` VALUES (9,'<div style=\"color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: #ffffff; margin: 8px;\">\r\n<p><span style=\"font-family: verdana, geneva; font-size: large; color: #993300;\"><em><span style=\"line-height: 115%;\">Ya se encuentra disponible la atenci&oacute;n en Medicina Complementaria y Terapeutica \"AGUA LUNA\", donde se ofrece: Reiki, Reflexolog&iacute;a, Drenajes Linf&aacute;ticos y de Colon y Masajes de Relajaci&oacute;n, articulares, terapeuticos...entre otros adem&aacute;s de talleres...con profesionales del &aacute;rea que atienden en tercer piso, oficina 2...</span></em></span></p>\r\n<p><em><span style=\"font-size: 18.0pt; line-height: 115%; font-family: \'Verdana\',\'sans-serif\'; mso-fareast-font-family: Calibri; mso-fareast-theme-font: minor-latin; mso-bidi-font-family: \'Times New Roman\'; mso-bidi-theme-font: minor-bidi; color: black; mso-ansi-language: ES; mso-fareast-language: EN-US; mso-bidi-language: AR-SA;\"><span style=\"font-family: verdana, geneva; font-size: large; color: #993300;\">Cualquier consulta la pueden hacer a los tel&eacute;fonos: 93103250, 91323782 y</span>&nbsp;<span style=\"font-size: large; color: #993300; font-family: verdana, geneva;\">98711655 o al correo: tamblay2@gmail.com.</span></span></em></p>\r\n</div>','MASOTERAPIA EN TERCER PISO, COCHRANE 890','2011-06-20 12:33:07','2011-06-20 12:33:07',1,1),(10,'<div style=\"color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: #ffffff; margin: 8px;\">\r\n<p style=\"margin-bottom: .0001pt; background: white;\"><span style=\"font-family: \'MV Boli\'; color: #993300; font-size: large;\">Para los pap&aacute;s que necesiten para sus hijos dentista infantil y adultos, en la oficina que est&aacute; en una esquina de nuestras nuevas dependencias, se instal&oacute;<span class=\"apple-converted-space\">&nbsp;</span><strong>NovelDent Odont&oacute;logo Infantil y Adultos,</strong>&nbsp;que ya est&aacute; atendendiendo. Ofrece presupuesto gratuito!!! Para mayor informaci&oacute;n contactarse a los fonos: 323 91 66 &oacute; m&oacute;vil 92591215.</span></p>\r\n</div>','NovelDent Odontólogo Infantil y Adultos','2011-06-20 12:33:35','2011-06-20 12:33:35',1,1),(11,'<div style=\"color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: #ffffff; margin: 8px;\">\r\n<p style=\"margin-bottom: .0001pt; background: white;\"><span style=\"font-family: \'MV Boli\'; color: #993300; font-size: large;\">En el segundo piso del nuevo edificio, se encuentra funcionando el Centro M&eacute;dico y Dental, que atiende especialidades de Medicina General, Kinesiolog&iacute;a y Odontolog&iacute;a Adultos, para quienes quieran hacer las consultas, el fono es: 317 46 32</span></p>\r\n</div>','CENTRO MEDICO Y DENTAL EN COCHRANE 890 ','2011-06-20 12:33:59','2011-06-20 12:33:59',1,1),(12,'<div style=\"color: #000000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 11px; background-image: initial; background-attachment: initial; background-origin: initial; background-clip: initial; background-color: #ffffff; margin: 8px;\">\r\n<p style=\"background: white;\"><span style=\"color: #993300; font-family: \'trebuchet ms\', geneva; font-size: large;\"><em>Nuestras nuevas dependencias de nuestro Jard&iacute;n, cuenta ahora con un grupo&nbsp; de profesionales en el tercer piso llamado CICCA, que cuenta con: psic&oacute;logas, fonoaudi&oacute;logas, psicopedagogas, orientaci&oacute;n familiar, reforzamiento escolar... As&iacute; es que cualquier consulta pueden dirigirse a los fonos: 762 46 492 - 919 203 93 o al correo centrointegralcicca@gmail.com o visitar el sitio: www.wix.com/centrointegralcicca/centrointegral.</em></span></p>\r\n</div>','CENTRO INTEGRAL COGNITIVO CONDUCTUAL \"CICCA\"','2011-06-20 12:34:17','2011-06-20 12:34:17',1,1),(14,'<p><span class=\"Apple-style-span\" style=\"color: #993300; font-size: large;\"><em>En nuestras nuevas dependencias, tercer piso, oficina 1; se encuentra funcionando un box de atenci&oacute;n profesional de Biomagnetismo Medicinal, llamado \"KALLFU\", que consiste en detectar las molestias y dolores f&iacute;sicos del cuerpo y a trav&eacute;s de imanes pasivos (no mediante electrificaci&oacute;n) trabaja en los puntos deectados del cuerpo, dentro de los 10 a 15 minutos por cada uno o en forma simult&aacute;nea, para corregir ciertas dolencias. Es compatible con cualuier otra forma de terapia de tipo energ&eacute;tico o natural.FONO: 66011560</em></span><span class=\"Apple-style-span\" style=\"border-collapse: collapse; font-family: Arial; font-size: 13px;\">&nbsp;</span><span class=\"Apple-style-span\" style=\"color: #993300; font-size: large;\"><em>&nbsp;</em></span></p>','20% DE DESCUENTOS PARA APODERADOS DE NUESTRO JARDIN!!!!','2011-06-23 12:08:15','2011-06-23 12:08:15',1,1);
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

-- Dump completed on 2011-07-05  2:54:27
