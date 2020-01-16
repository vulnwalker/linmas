-- MySQL dump 10.13  Distrib 5.7.28, for Linux (x86_64)
--
-- Host: localhost    Database: linmas
-- ------------------------------------------------------
-- Server version	5.7.28-0ubuntu0.16.04.2

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
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activity_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=614 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activity_log`
--

LOCK TABLES `activity_log` WRITE;
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` VALUES (1,'default','App\\Permission model has been created',1,'App\\Permission',NULL,NULL,'[]','2018-08-29 09:20:28','2018-08-29 09:20:28'),(2,'default','App\\Permission model has been created',2,'App\\Permission',NULL,NULL,'[]','2018-08-29 09:20:34','2018-08-29 09:20:34'),(3,'default','App\\Role model has been created',1,'App\\Role',NULL,NULL,'[]','2018-08-29 09:21:32','2018-08-29 09:21:32'),(4,'default','App\\Role model has been created',2,'App\\Role',NULL,NULL,'[]','2018-08-29 09:21:40','2018-08-29 09:21:40'),(5,'default','App\\Kecamatan model has been created',1,'App\\Kecamatan',1,'App\\User','[]','2018-08-29 09:23:38','2018-08-29 09:23:38'),(6,'default','App\\Kelurahan model has been created',1,'App\\Kelurahan',1,'App\\User','[]','2018-08-29 09:23:50','2018-08-29 09:23:50'),(7,'default','App\\Linma model has been created',1,'App\\Linma',1,'App\\User','[]','2018-08-29 09:49:58','2018-08-29 09:49:58'),(8,'default','App\\Linma model has been created',2,'App\\Linma',1,'App\\User','[]','2018-08-29 09:59:21','2018-08-29 09:59:21'),(9,'default','App\\Linma model has been created',3,'App\\Linma',1,'App\\User','[]','2018-08-29 10:08:04','2018-08-29 10:08:04'),(10,'default','App\\JenisLinma model has been created',1,'App\\JenisLinma',1,'App\\User','[]','2018-08-29 10:16:36','2018-08-29 10:16:36'),(11,'default','App\\Linma model has been created',6,'App\\Linma',1,'App\\User','[]','2018-08-29 10:31:30','2018-08-29 10:31:30'),(12,'default','App\\Linma model has been created',7,'App\\Linma',1,'App\\User','[]','2018-08-29 14:18:19','2018-08-29 14:18:19'),(13,'default','App\\Linma model has been created',8,'App\\Linma',1,'App\\User','[]','2018-08-29 15:25:22','2018-08-29 15:25:22'),(14,'default','App\\Linma model has been created',9,'App\\Linma',1,'App\\User','[]','2018-08-30 13:52:12','2018-08-30 13:52:12'),(15,'default','App\\Linma model has been created',13,'App\\Linma',1,'App\\User','[]','2018-08-30 19:50:11','2018-08-30 19:50:11'),(16,'default','App\\Kelurahan model has been created',2,'App\\Kelurahan',1,'App\\User','[]','2018-08-30 19:50:42','2018-08-30 19:50:42'),(17,'default','App\\Linma model has been created',14,'App\\Linma',1,'App\\User','[]','2018-08-30 19:51:17','2018-08-30 19:51:17'),(18,'default','App\\AsetLima model has been created',1,'App\\AsetLima',1,'App\\User','[]','2018-08-31 13:31:50','2018-08-31 13:31:50'),(19,'default','App\\Pendaftaran model has been created',1,'App\\Pendaftaran',1,'App\\User','[]','2018-08-31 14:52:12','2018-08-31 14:52:12'),(20,'default','App\\Pendaftaran model has been deleted',1,'App\\Pendaftaran',1,'App\\User','[]','2018-08-31 14:52:32','2018-08-31 14:52:32'),(21,'default','App\\Pendaftaran model has been created',2,'App\\Pendaftaran',1,'App\\User','[]','2018-08-31 14:54:16','2018-08-31 14:54:16'),(22,'default','App\\Pendaftaran model has been created',3,'App\\Pendaftaran',1,'App\\User','[]','2018-08-31 14:54:54','2018-08-31 14:54:54'),(23,'default','App\\Pendaftaran model has been created',4,'App\\Pendaftaran',1,'App\\User','[]','2018-08-31 14:58:56','2018-08-31 14:58:56'),(24,'default','App\\Pendaftaran model has been deleted',2,'App\\Pendaftaran',1,'App\\User','[]','2018-08-31 15:41:44','2018-08-31 15:41:44'),(25,'default','App\\Pendaftaran model has been deleted',3,'App\\Pendaftaran',1,'App\\User','[]','2018-08-31 15:45:40','2018-08-31 15:45:40'),(26,'default','App\\Pendaftaran model has been deleted',4,'App\\Pendaftaran',1,'App\\User','[]','2018-08-31 15:45:42','2018-08-31 15:45:42'),(27,'default','App\\Pendaftaran model has been created',5,'App\\Pendaftaran',1,'App\\User','[]','2018-08-31 15:46:05','2018-08-31 15:46:05'),(28,'default','App\\Pendaftaran model has been created',6,'App\\Pendaftaran',1,'App\\User','[]','2018-08-31 15:47:51','2018-08-31 15:47:51'),(29,'default','App\\Pendaftaran model has been created',7,'App\\Pendaftaran',1,'App\\User','[]','2018-09-01 10:30:18','2018-09-01 10:30:18'),(30,'default','App\\Linma model has been created',15,'App\\Linma',1,'App\\User','[]','2018-09-01 13:01:10','2018-09-01 13:01:10'),(31,'default','App\\Linma model has been created',16,'App\\Linma',1,'App\\User','[]','2018-09-01 13:02:39','2018-09-01 13:02:39'),(32,'default','App\\Linma model has been created',17,'App\\Linma',1,'App\\User','[]','2018-09-01 13:15:19','2018-09-01 13:15:19'),(33,'default','App\\Linma model has been created',18,'App\\Linma',1,'App\\User','[]','2018-09-01 13:22:07','2018-09-01 13:22:07'),(34,'default','App\\Linma model has been created',19,'App\\Linma',1,'App\\User','[]','2018-09-01 13:22:25','2018-09-01 13:22:25'),(35,'default','App\\Linma model has been created',20,'App\\Linma',1,'App\\User','[]','2018-09-01 13:23:35','2018-09-01 13:23:35'),(36,'default','App\\Linma model has been created',21,'App\\Linma',1,'App\\User','[]','2018-09-01 13:27:02','2018-09-01 13:27:02'),(37,'default','App\\Kecamatan model has been created',2,'App\\Kecamatan',1,'App\\User','[]','2018-09-01 14:34:05','2018-09-01 14:34:05'),(38,'default','App\\Penugasan model has been created',1,'App\\Penugasan',1,'App\\User','[]','2018-09-03 11:03:49','2018-09-03 11:03:49'),(39,'default','App\\Penugasan_linma model has been created',1,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:03:24','2018-09-03 14:03:24'),(40,'default','App\\Penugasan_linma model has been created',2,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:09:22','2018-09-03 14:09:22'),(41,'default','App\\Penugasan_linma model has been created',3,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:21:08','2018-09-03 14:21:08'),(42,'default','App\\Penugasan_linma model has been created',4,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:21:27','2018-09-03 14:21:27'),(43,'default','App\\Penugasan_linma model has been created',5,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:25:33','2018-09-03 14:25:33'),(44,'default','App\\Penugasan_linma model has been created',6,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:25:39','2018-09-03 14:25:39'),(45,'default','App\\Penugasan_linma model has been created',7,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:27:22','2018-09-03 14:27:22'),(46,'default','App\\Penugasan_linma model has been created',8,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:39:15','2018-09-03 14:39:15'),(47,'default','App\\Penugasan_linma model has been created',9,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:39:23','2018-09-03 14:39:23'),(48,'default','App\\Penugasan_linma model has been created',10,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:40:19','2018-09-03 14:40:19'),(49,'default','App\\Penugasan_linma model has been created',11,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:40:19','2018-09-03 14:40:19'),(50,'default','App\\Penugasan_linma model has been created',12,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:40:38','2018-09-03 14:40:38'),(51,'default','App\\Penugasan_linma model has been created',13,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 14:47:59','2018-09-03 14:47:59'),(52,'default','App\\Penugasan_linma model has been created',14,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 15:04:24','2018-09-03 15:04:24'),(53,'default','App\\Penugasan_linma model has been created',15,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 15:04:52','2018-09-03 15:04:52'),(54,'default','App\\Penugasan_linma model has been created',16,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 15:04:55','2018-09-03 15:04:55'),(55,'default','App\\Penugasan_linma model has been created',17,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 15:11:59','2018-09-03 15:11:59'),(56,'default','App\\Penugasan_linma model has been created',18,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 15:12:01','2018-09-03 15:12:01'),(57,'default','App\\Penugasan_linma model has been created',19,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 15:16:06','2018-09-03 15:16:06'),(58,'default','App\\Penugasan_linma model has been created',20,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 15:16:08','2018-09-03 15:16:08'),(59,'default','App\\Penugasan_linma model has been created',21,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:00:12','2018-09-03 16:00:12'),(60,'default','App\\Penugasan_linma model has been created',22,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:02:38','2018-09-03 16:02:38'),(61,'default','App\\Penugasan_linma model has been created',23,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:02:46','2018-09-03 16:02:46'),(62,'default','App\\Penugasan_linma model has been created',24,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:02:51','2018-09-03 16:02:51'),(63,'default','App\\Penugasan_linma model has been created',25,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:06:25','2018-09-03 16:06:25'),(64,'default','App\\Penugasan_linma model has been created',26,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:06:34','2018-09-03 16:06:34'),(65,'default','App\\Penugasan_linma model has been created',27,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:09:38','2018-09-03 16:09:38'),(66,'default','App\\Penugasan_linma model has been created',28,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:10:16','2018-09-03 16:10:16'),(67,'default','App\\Penugasan_linma model has been created',29,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:10:21','2018-09-03 16:10:21'),(68,'default','App\\Penugasan_linma model has been created',30,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:10:46','2018-09-03 16:10:46'),(69,'default','App\\Penugasan_linma model has been created',31,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:12:57','2018-09-03 16:12:57'),(70,'default','App\\Penugasan_linma model has been created',32,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:14:43','2018-09-03 16:14:43'),(71,'default','App\\Penugasan_linma model has been created',33,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:15:10','2018-09-03 16:15:10'),(72,'default','App\\Penugasan_linma model has been created',34,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:17:05','2018-09-03 16:17:05'),(73,'default','App\\Penugasan_linma model has been created',35,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:17:16','2018-09-03 16:17:16'),(74,'default','App\\Penugasan_linma model has been created',36,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:17:42','2018-09-03 16:17:42'),(75,'default','App\\Penugasan_linma model has been created',37,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:18:56','2018-09-03 16:18:56'),(76,'default','App\\Penugasan_linma model has been created',38,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:19:29','2018-09-03 16:19:29'),(77,'default','App\\Penugasan_linma model has been created',39,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:26:17','2018-09-03 16:26:17'),(78,'default','App\\Penugasan_linma model has been created',40,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:31:14','2018-09-03 16:31:14'),(79,'default','App\\Penugasan_linma model has been created',41,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:31:27','2018-09-03 16:31:27'),(80,'default','App\\Penugasan_linma model has been created',42,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:31:44','2018-09-03 16:31:44'),(81,'default','App\\Penugasan_linma model has been created',43,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:32:36','2018-09-03 16:32:36'),(82,'default','App\\Penugasan_linma model has been created',44,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:32:41','2018-09-03 16:32:41'),(83,'default','App\\Penugasan_linma model has been created',45,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:37:57','2018-09-03 16:37:57'),(84,'default','App\\Penugasan_linma model has been created',46,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:40:43','2018-09-03 16:40:43'),(85,'default','App\\Penugasan_linma model has been created',47,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:42:34','2018-09-03 16:42:34'),(86,'default','App\\Penugasan_linma model has been created',48,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:44:01','2018-09-03 16:44:01'),(87,'default','App\\Penugasan_linma model has been created',49,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:44:38','2018-09-03 16:44:38'),(88,'default','App\\Penugasan_linma model has been created',50,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:47:05','2018-09-03 16:47:05'),(89,'default','App\\Penugasan_linma model has been created',51,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:47:48','2018-09-03 16:47:48'),(90,'default','App\\Penugasan_linma model has been created',52,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:49:31','2018-09-03 16:49:31'),(91,'default','App\\Penugasan_linma model has been created',53,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:50:57','2018-09-03 16:50:57'),(92,'default','App\\Penugasan_linma model has been created',54,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:51:11','2018-09-03 16:51:11'),(93,'default','App\\Penugasan_linma model has been created',55,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:51:40','2018-09-03 16:51:40'),(94,'default','App\\Penugasan_linma model has been created',56,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:54:32','2018-09-03 16:54:32'),(95,'default','App\\Penugasan_linma model has been created',57,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:55:30','2018-09-03 16:55:30'),(96,'default','App\\Penugasan_linma model has been created',58,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 16:59:03','2018-09-03 16:59:03'),(97,'default','App\\Penugasan_linma model has been created',59,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 17:02:11','2018-09-03 17:02:11'),(98,'default','App\\Penugasan_linma model has been created',60,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 17:06:13','2018-09-03 17:06:13'),(99,'default','App\\Penugasan_linma model has been created',61,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-03 17:15:05','2018-09-03 17:15:05'),(100,'default','App\\Penugasan_linma model has been created',62,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 09:29:34','2018-09-04 09:29:34'),(101,'default','App\\Penugasan_linma model has been created',63,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 10:11:32','2018-09-04 10:11:32'),(102,'default','App\\Penugasan_linma model has been created',64,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 10:35:17','2018-09-04 10:35:17'),(103,'default','App\\Penugasan_linma model has been created',65,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 10:43:05','2018-09-04 10:43:05'),(104,'default','App\\Penugasan_linma model has been created',66,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 10:43:12','2018-09-04 10:43:12'),(105,'default','App\\Penugasan_linma model has been created',67,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 10:49:10','2018-09-04 10:49:10'),(106,'default','App\\Penugasan_linma model has been created',68,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:23:15','2018-09-04 11:23:15'),(107,'default','App\\Penugasan_linma model has been created',69,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:23:19','2018-09-04 11:23:19'),(108,'default','App\\Penugasan_linma model has been created',70,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:23:24','2018-09-04 11:23:24'),(109,'default','App\\Penugasan_linma model has been created',71,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:23:33','2018-09-04 11:23:33'),(110,'default','App\\Penugasan_linma model has been created',72,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:25:27','2018-09-04 11:25:27'),(111,'default','App\\Penugasan_linma model has been created',73,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:25:34','2018-09-04 11:25:34'),(112,'default','App\\Penugasan_linma model has been created',74,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:25:42','2018-09-04 11:25:42'),(113,'default','App\\Penugasan_linma model has been created',75,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:25:47','2018-09-04 11:25:47'),(114,'default','App\\Penugasan_linma model has been created',76,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:25:52','2018-09-04 11:25:52'),(115,'default','App\\Penugasan_linma model has been created',77,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:26:37','2018-09-04 11:26:37'),(116,'default','App\\Penugasan_linma model has been created',78,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:26:50','2018-09-04 11:26:50'),(117,'default','App\\Penugasan_linma model has been created',79,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:31:11','2018-09-04 11:31:11'),(118,'default','App\\Penugasan_linma model has been created',80,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:31:13','2018-09-04 11:31:13'),(119,'default','App\\Penugasan_linma model has been created',81,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:32:28','2018-09-04 11:32:28'),(120,'default','App\\Penugasan_linma model has been created',82,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:32:30','2018-09-04 11:32:30'),(121,'default','App\\Penugasan_linma model has been created',83,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:32:38','2018-09-04 11:32:38'),(122,'default','App\\Penugasan_linma model has been created',84,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:32:40','2018-09-04 11:32:40'),(123,'default','App\\Penugasan_linma model has been created',85,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:32:43','2018-09-04 11:32:43'),(124,'default','App\\Penugasan_linma model has been created',86,'App\\Penugasan_linma',1,'App\\User','[]','2018-09-04 11:32:45','2018-09-04 11:32:45'),(125,'default','App\\Pendaftaran model has been created',8,'App\\Pendaftaran',3,'App\\User','[]','2018-09-04 00:05:10','2018-09-04 00:05:10'),(126,'default','App\\PosJaga model has been created',1,'App\\PosJaga',3,'App\\User','[]','2018-09-10 02:06:17','2018-09-10 02:06:17'),(127,'default','App\\PosJaga model has been created',2,'App\\PosJaga',3,'App\\User','[]','2018-09-10 02:26:00','2018-09-10 02:26:00'),(128,'default','App\\PosJaga model has been created',3,'App\\PosJaga',3,'App\\User','[]','2018-09-10 02:37:29','2018-09-10 02:37:29'),(129,'default','App\\PosJaga model has been created',4,'App\\PosJaga',3,'App\\User','[]','2018-09-11 20:49:11','2018-09-11 20:49:11'),(130,'default','App\\PosJaga model has been created',5,'App\\PosJaga',3,'App\\User','[]','2018-09-11 20:56:03','2018-09-11 20:56:03'),(131,'default','App\\PosJaga model has been created',6,'App\\PosJaga',3,'App\\User','[]','2018-09-11 20:57:32','2018-09-11 20:57:32'),(132,'default','App\\PosJaga model has been created',7,'App\\PosJaga',3,'App\\User','[]','2018-09-11 20:58:53','2018-09-11 20:58:53'),(133,'default','App\\PosJaga model has been created',8,'App\\PosJaga',3,'App\\User','[]','2018-09-12 00:11:45','2018-09-12 00:11:45'),(134,'default','App\\PosJaga model has been updated',8,'App\\PosJaga',3,'App\\User','[]','2018-09-12 00:14:35','2018-09-12 00:14:35'),(135,'default','App\\PosJaga model has been created',11,'App\\PosJaga',3,'App\\User','[]','2018-09-12 00:51:52','2018-09-12 00:51:52'),(136,'default','App\\PosJaga model has been deleted',8,'App\\PosJaga',3,'App\\User','[]','2018-09-12 19:12:41','2018-09-12 19:12:41'),(137,'default','App\\PosJaga model has been created',42,'App\\PosJaga',3,'App\\User','[]','2018-09-12 19:15:07','2018-09-12 19:15:07'),(138,'default','App\\PosJaga model has been created',90,'App\\PosJaga',3,'App\\User','[]','2018-09-12 20:13:39','2018-09-12 20:13:39'),(139,'default','App\\PosJaga model has been created',95,'App\\PosJaga',3,'App\\User','[]','2018-09-12 20:18:25','2018-09-12 20:18:25'),(140,'default','App\\PosJaga model has been created',100,'App\\PosJaga',4,'App\\User','[]','2018-09-13 00:56:44','2018-09-13 00:56:44'),(141,'default','App\\PosJaga model has been created',105,'App\\PosJaga',3,'App\\User','[]','2018-09-13 19:20:02','2018-09-13 19:20:02'),(142,'default','App\\Linma model has been created',21,'App\\Linma',3,'App\\User','[]','2018-09-13 23:26:47','2018-09-13 23:26:47'),(143,'default','App\\Linma model has been created',22,'App\\Linma',3,'App\\User','[]','2018-09-13 23:34:13','2018-09-13 23:34:13'),(144,'default','App\\Linma model has been created',24,'App\\Linma',3,'App\\User','[]','2018-09-14 00:13:40','2018-09-14 00:13:40'),(145,'default','App\\Linma model has been created',25,'App\\Linma',3,'App\\User','[]','2018-09-14 00:34:00','2018-09-14 00:34:00'),(146,'default','App\\Linma model has been created',37,'App\\Linma',3,'App\\User','[]','2018-09-14 02:18:15','2018-09-14 02:18:15'),(147,'default','App\\Linma model has been created',54,'App\\Linma',3,'App\\User','[]','2018-09-18 20:39:33','2018-09-18 20:39:33'),(148,'default','App\\Linma model has been created',65,'App\\Linma',3,'App\\User','[]','2018-09-20 00:46:42','2018-09-20 00:46:42'),(149,'default','App\\Sapra model has been updated',1,'App\\Sapra',3,'App\\User','[]','2018-09-23 19:27:03','2018-09-23 19:27:03'),(150,'default','App\\Sapra model has been updated',1,'App\\Sapra',3,'App\\User','[]','2018-09-23 19:28:28','2018-09-23 19:28:28'),(151,'default','App\\Sapra model has been updated',1,'App\\Sapra',3,'App\\User','[]','2018-09-23 19:28:41','2018-09-23 19:28:41'),(152,'default','App\\Sapra model has been created',6,'App\\Sapra',3,'App\\User','[]','2018-09-23 19:31:46','2018-09-23 19:31:46'),(153,'default','App\\Sapra model has been created',7,'App\\Sapra',3,'App\\User','[]','2018-09-23 19:32:12','2018-09-23 19:32:12'),(154,'default','App\\Sapra model has been created',8,'App\\Sapra',3,'App\\User','[]','2018-09-23 20:00:10','2018-09-23 20:00:10'),(155,'default','App\\Sapra model has been created',9,'App\\Sapra',3,'App\\User','[]','2018-09-23 20:12:58','2018-09-23 20:12:58'),(156,'default','App\\ContentPublikasi model has been created',1,'App\\ContentPublikasi',3,'App\\User','[]','2018-09-23 20:42:33','2018-09-23 20:42:33'),(157,'default','App\\ContentPublikasi model has been created',2,'App\\ContentPublikasi',3,'App\\User','[]','2018-09-23 20:59:30','2018-09-23 20:59:30'),(158,'default','App\\Sapra model has been updated',8,'App\\Sapra',3,'App\\User','[]','2018-09-23 23:52:17','2018-09-23 23:52:17'),(159,'default','App\\Sapra model has been updated',8,'App\\Sapra',3,'App\\User','[]','2018-09-23 23:52:22','2018-09-23 23:52:22'),(160,'default','App\\Sapra model has been created',10,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:07:24','2018-09-24 00:07:24'),(161,'default','App\\ContentPublikasi model has been created',3,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-24 00:08:51','2018-09-24 00:08:51'),(162,'default','App\\ContentPublikasi model has been created',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-24 00:12:21','2018-09-24 00:12:21'),(163,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-24 00:27:32','2018-09-24 00:27:32'),(164,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-24 00:27:51','2018-09-24 00:27:51'),(165,'default','App\\Sapra model has been updated',8,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:33:06','2018-09-24 00:33:06'),(166,'default','App\\Sapra model has been updated',10,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:33:48','2018-09-24 00:33:48'),(167,'default','App\\Sapra model has been updated',8,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:35:04','2018-09-24 00:35:04'),(168,'default','App\\Sapra model has been created',11,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:36:10','2018-09-24 00:36:10'),(169,'default','App\\Sapra model has been updated',8,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:41:11','2018-09-24 00:41:11'),(170,'default','App\\Sapra model has been updated',8,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:42:26','2018-09-24 00:42:26'),(171,'default','App\\Sapra model has been updated',8,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:42:41','2018-09-24 00:42:41'),(172,'default','App\\Sapra model has been updated',8,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:43:01','2018-09-24 00:43:01'),(173,'default','App\\Sapra model has been updated',8,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:43:28','2018-09-24 00:43:28'),(174,'default','App\\Sapra model has been updated',8,'App\\Sapra',3,'App\\User','[]','2018-09-24 00:44:28','2018-09-24 00:44:28'),(175,'default','App\\Sapra model has been created',12,'App\\Sapra',3,'App\\User','[]','2018-09-24 01:36:59','2018-09-24 01:36:59'),(176,'default','App\\Sapra model has been created',13,'App\\Sapra',3,'App\\User','[]','2018-09-24 01:37:17','2018-09-24 01:37:17'),(177,'default','App\\Sapra model has been updated',13,'App\\Sapra',3,'App\\User','[]','2018-09-24 02:08:27','2018-09-24 02:08:27'),(178,'default','App\\Linma model has been created',66,'App\\Linma',3,'App\\User','[]','2018-09-24 06:36:55','2018-09-24 06:36:55'),(179,'default','App\\Sapra model has been updated',12,'App\\Sapra',3,'App\\User','[]','2018-09-24 08:22:13','2018-09-24 08:22:13'),(180,'default','App\\Sapra model has been updated',12,'App\\Sapra',3,'App\\User','[]','2018-09-24 08:22:34','2018-09-24 08:22:34'),(181,'default','App\\Sapra model has been created',14,'App\\Sapra',3,'App\\User','[]','2018-09-24 08:24:47','2018-09-24 08:24:47'),(182,'default','App\\ContentPublikasi model has been created',5,'App\\ContentPublikasi',3,'App\\User','[]','2018-09-24 18:35:08','2018-09-24 18:35:08'),(183,'default','App\\ContentPublikasi model has been updated',5,'App\\ContentPublikasi',3,'App\\User','[]','2018-09-24 18:36:22','2018-09-24 18:36:22'),(184,'default','App\\ContentPublikasi model has been created',6,'App\\ContentPublikasi',3,'App\\User','[]','2018-09-24 19:58:03','2018-09-24 19:58:03'),(185,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-24 20:57:39','2018-09-24 20:57:39'),(186,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-24 23:52:24','2018-09-24 23:52:24'),(187,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-24 23:55:45','2018-09-24 23:55:45'),(188,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-25 00:46:23','2018-09-25 00:46:23'),(189,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-25 00:51:04','2018-09-25 00:51:04'),(190,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-25 00:53:31','2018-09-25 00:53:31'),(191,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-26 18:43:32','2018-09-26 18:43:32'),(192,'default','App\\Pembinaan model has been created',3,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 19:11:02','2018-09-26 19:11:02'),(193,'default','App\\Pembinaan model has been created',4,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 19:54:29','2018-09-26 19:54:29'),(194,'default','App\\Pembinaan model has been created',5,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 19:58:01','2018-09-26 19:58:01'),(195,'default','App\\Pembinaan model has been created',6,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 19:59:46','2018-09-26 19:59:46'),(196,'default','App\\Pembinaan model has been created',7,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 20:00:13','2018-09-26 20:00:13'),(197,'default','App\\Pembinaan model has been created',8,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 20:01:07','2018-09-26 20:01:07'),(198,'default','App\\Pembinaan model has been created',9,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 20:13:31','2018-09-26 20:13:31'),(199,'default','App\\Pembinaan model has been created',10,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 20:14:22','2018-09-26 20:14:22'),(200,'default','App\\Pembinaan model has been created',11,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 20:15:30','2018-09-26 20:15:30'),(201,'default','App\\Pembinaan model has been created',12,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 20:16:20','2018-09-26 20:16:20'),(202,'default','App\\Pembinaan model has been created',13,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 23:44:33','2018-09-26 23:44:33'),(203,'default','App\\Pembinaan model has been created',14,'App\\Pembinaan',3,'App\\User','[]','2018-09-26 23:50:18','2018-09-26 23:50:18'),(204,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-27 23:18:59','2018-09-27 23:18:59'),(205,'default','App\\Linma model has been created',56,'App\\Linma',3,'App\\User','[]','2018-09-27 23:20:22','2018-09-27 23:20:22'),(206,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-27 23:22:18','2018-09-27 23:22:18'),(207,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-27 23:23:05','2018-09-27 23:23:05'),(208,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-27 23:28:04','2018-09-27 23:28:04'),(209,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-27 23:54:39','2018-09-27 23:54:39'),(210,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-28 00:06:25','2018-09-28 00:06:25'),(211,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-28 00:06:51','2018-09-28 00:06:51'),(212,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-09-28 00:07:30','2018-09-28 00:07:30'),(213,'default','App\\Linma model has been created',57,'App\\Linma',3,'App\\User','[]','2018-09-30 02:15:07','2018-09-30 02:15:07'),(214,'default','App\\Pembinaan model has been created',29,'App\\Pembinaan',3,'App\\User','[]','2018-09-30 19:51:18','2018-09-30 19:51:18'),(215,'default','App\\Pembinaan model has been created',30,'App\\Pembinaan',3,'App\\User','[]','2018-09-30 20:53:46','2018-09-30 20:53:46'),(216,'default','App\\Pembinaan model has been created',166,'App\\Pembinaan',3,'App\\User','[]','2018-09-30 21:36:49','2018-09-30 21:36:49'),(217,'default','App\\PosJaga model has been created',123,'App\\PosJaga',3,'App\\User','[]','2018-10-01 00:14:00','2018-10-01 00:14:00'),(218,'default','App\\Linma model has been created',58,'App\\Linma',3,'App\\User','[]','2018-10-01 00:18:56','2018-10-01 00:18:56'),(219,'default','App\\Pembinaan model has been created',167,'App\\Pembinaan',3,'App\\User','[]','2018-10-01 00:21:57','2018-10-01 00:21:57'),(220,'default','App\\ContentPublikasi model has been created',7,'App\\ContentPublikasi',17,'App\\User','[]','2018-10-01 18:59:52','2018-10-01 18:59:52'),(221,'default','App\\ContentPublikasi model has been created',8,'App\\ContentPublikasi',17,'App\\User','[]','2018-10-01 19:01:08','2018-10-01 19:01:08'),(222,'default','App\\ContentPublikasi model has been updated',4,'App\\ContentPublikasi',17,'App\\User','[]','2018-10-01 19:10:13','2018-10-01 19:10:13'),(223,'default','App\\ContentPublikasi model has been created',9,'App\\ContentPublikasi',3,'App\\User','[]','2018-10-01 21:14:56','2018-10-01 21:14:56'),(224,'default','App\\Pelaporan model has been created',1,'App\\Pelaporan',3,'App\\User','[]','2018-10-01 21:35:57','2018-10-01 21:35:57'),(225,'default','App\\Pelaporan model has been created',2,'App\\Pelaporan',3,'App\\User','[]','2018-10-01 21:50:27','2018-10-01 21:50:27'),(226,'default','App\\Linma model has been created',59,'App\\Linma',3,'App\\User','[]','2018-10-01 22:19:19','2018-10-01 22:19:19'),(227,'default','App\\PosJaga model has been created',124,'App\\PosJaga',3,'App\\User','[]','2018-10-01 22:26:16','2018-10-01 22:26:16'),(228,'default','App\\Pelaporan model has been updated',2,'App\\Pelaporan',3,'App\\User','[]','2018-10-01 23:18:00','2018-10-01 23:18:00'),(229,'default','App\\Pelaporan model has been updated',2,'App\\Pelaporan',3,'App\\User','[]','2018-10-01 23:18:06','2018-10-01 23:18:06'),(230,'default','App\\Linma model has been created',60,'App\\Linma',3,'App\\User','[]','2018-10-02 00:10:39','2018-10-02 00:10:39'),(231,'default','App\\Linma model has been created',61,'App\\Linma',17,'App\\User','[]','2018-10-02 02:39:16','2018-10-02 02:39:16'),(232,'default','App\\Linma model has been created',62,'App\\Linma',17,'App\\User','[]','2018-10-02 02:59:13','2018-10-02 02:59:13'),(233,'default','App\\Linma model has been created',63,'App\\Linma',17,'App\\User','[]','2018-10-02 03:01:09','2018-10-02 03:01:09'),(234,'default','App\\Linma model has been created',68,'App\\Linma',17,'App\\User','[]','2018-10-02 19:03:30','2018-10-02 19:03:30'),(235,'default','App\\Linma model has been created',69,'App\\Linma',3,'App\\User','[]','2018-10-02 19:33:16','2018-10-02 19:33:16'),(236,'default','App\\Linma model has been created',70,'App\\Linma',17,'App\\User','[]','2018-10-02 19:34:24','2018-10-02 19:34:24'),(237,'default','App\\Linma model has been created',71,'App\\Linma',3,'App\\User','[]','2018-10-02 21:29:31','2018-10-02 21:29:31'),(238,'default','App\\Linma model has been created',72,'App\\Linma',3,'App\\User','[]','2018-10-02 21:32:03','2018-10-02 21:32:03'),(239,'default','App\\Linma model has been created',73,'App\\Linma',3,'App\\User','[]','2018-10-02 23:54:28','2018-10-02 23:54:28'),(240,'default','App\\Linma model has been created',74,'App\\Linma',3,'App\\User','[]','2018-10-03 00:04:05','2018-10-03 00:04:05'),(241,'default','App\\Linma model has been created',75,'App\\Linma',23,'App\\User','[]','2018-10-03 20:46:09','2018-10-03 20:46:09'),(242,'default','App\\Sapra model has been created',15,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:16:45','2018-10-04 20:16:45'),(243,'default','App\\Sapra model has been created',16,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:19:07','2018-10-04 20:19:07'),(244,'default','App\\Sapra model has been created',17,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:20:13','2018-10-04 20:20:13'),(245,'default','App\\Sapra model has been updated',17,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:24:18','2018-10-04 20:24:18'),(246,'default','App\\Sapra model has been created',18,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:28:49','2018-10-04 20:28:49'),(247,'default','App\\Sapra model has been updated',18,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:29:34','2018-10-04 20:29:34'),(248,'default','App\\Sapra model has been updated',18,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:35:30','2018-10-04 20:35:30'),(249,'default','App\\Sapra model has been updated',18,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:35:56','2018-10-04 20:35:56'),(250,'default','App\\Sapra model has been updated',18,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:38:10','2018-10-04 20:38:10'),(251,'default','App\\Sapra model has been updated',18,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:45:24','2018-10-04 20:45:24'),(252,'default','App\\Sapra model has been updated',18,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:53:05','2018-10-04 20:53:05'),(253,'default','App\\Sapra model has been updated',18,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:57:00','2018-10-04 20:57:00'),(254,'default','App\\Sapra model has been updated',18,'App\\Sapra',3,'App\\User','[]','2018-10-04 20:58:48','2018-10-04 20:58:48'),(255,'default','App\\Sapra model has been created',19,'App\\Sapra',17,'App\\User','[]','2018-10-04 21:08:47','2018-10-04 21:08:47'),(256,'default','App\\Sapra model has been updated',18,'App\\Sapra',17,'App\\User','[]','2018-10-04 21:09:06','2018-10-04 21:09:06'),(257,'default','App\\Sapra model has been created',20,'App\\Sapra',3,'App\\User','[]','2018-10-04 21:28:23','2018-10-04 21:28:23'),(258,'default','App\\Sapra model has been created',21,'App\\Sapra',3,'App\\User','[]','2018-10-04 21:34:37','2018-10-04 21:34:37'),(259,'default','App\\Sapra model has been created',22,'App\\Sapra',3,'App\\User','[]','2018-10-04 21:35:58','2018-10-04 21:35:58'),(260,'default','App\\Sapra model has been created',23,'App\\Sapra',3,'App\\User','[]','2018-10-04 21:39:59','2018-10-04 21:39:59'),(261,'default','App\\Sapra model has been created',24,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:37:44','2018-10-04 23:37:44'),(262,'default','App\\Sapra model has been created',25,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:38:40','2018-10-04 23:38:40'),(263,'default','App\\Sapra model has been created',26,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:39:14','2018-10-04 23:39:14'),(264,'default','App\\Sapra model has been created',27,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:50:53','2018-10-04 23:50:53'),(265,'default','App\\Sapra model has been created',28,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:51:07','2018-10-04 23:51:07'),(266,'default','App\\Sapra model has been created',29,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:54:42','2018-10-04 23:54:42'),(267,'default','App\\Sapra model has been created',30,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:54:53','2018-10-04 23:54:53'),(268,'default','App\\Sapra model has been created',31,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:56:35','2018-10-04 23:56:35'),(269,'default','App\\Sapra model has been created',32,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:56:48','2018-10-04 23:56:48'),(270,'default','App\\Sapra model has been created',33,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:58:37','2018-10-04 23:58:37'),(271,'default','App\\Sapra model has been created',34,'App\\Sapra',3,'App\\User','[]','2018-10-04 23:58:50','2018-10-04 23:58:50'),(272,'default','App\\Sapra model has been created',35,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:05:09','2018-10-05 00:05:09'),(273,'default','App\\Sapra model has been created',36,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:05:32','2018-10-05 00:05:32'),(274,'default','App\\Sapra model has been created',37,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:10:11','2018-10-05 00:10:11'),(275,'default','App\\Sapra model has been created',38,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:10:30','2018-10-05 00:10:30'),(276,'default','App\\Sapra model has been updated',37,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:10:38','2018-10-05 00:10:38'),(277,'default','App\\Sapra model has been created',39,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:15:34','2018-10-05 00:15:34'),(278,'default','App\\Sapra model has been created',40,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:15:49','2018-10-05 00:15:49'),(279,'default','App\\Sapra model has been created',41,'App\\Sapra',17,'App\\User','[]','2018-10-05 00:16:41','2018-10-05 00:16:41'),(280,'default','App\\Sapra model has been created',42,'App\\Sapra',17,'App\\User','[]','2018-10-05 00:16:54','2018-10-05 00:16:54'),(281,'default','App\\Sapra model has been created',43,'App\\Sapra',17,'App\\User','[]','2018-10-05 00:19:40','2018-10-05 00:19:40'),(282,'default','App\\Sapra model has been created',44,'App\\Sapra',17,'App\\User','[]','2018-10-05 00:19:51','2018-10-05 00:19:51'),(283,'default','App\\Sapra model has been created',45,'App\\Sapra',17,'App\\User','[]','2018-10-05 00:22:48','2018-10-05 00:22:48'),(284,'default','App\\Sapra model has been created',46,'App\\Sapra',17,'App\\User','[]','2018-10-05 00:22:58','2018-10-05 00:22:58'),(285,'default','App\\Sapra model has been created',47,'App\\Sapra',17,'App\\User','[]','2018-10-05 00:24:15','2018-10-05 00:24:15'),(286,'default','App\\Sapra model has been created',48,'App\\Sapra',17,'App\\User','[]','2018-10-05 00:24:28','2018-10-05 00:24:28'),(287,'default','App\\Sapra model has been created',49,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:26:29','2018-10-05 00:26:29'),(288,'default','App\\Sapra model has been created',50,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:26:43','2018-10-05 00:26:43'),(289,'default','App\\Sapra model has been created',51,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:29:58','2018-10-05 00:29:58'),(290,'default','App\\Sapra model has been updated',49,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:30:05','2018-10-05 00:30:05'),(291,'default','App\\Sapra model has been created',52,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:32:13','2018-10-05 00:32:13'),(292,'default','App\\Sapra model has been created',53,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:32:44','2018-10-05 00:32:44'),(293,'default','App\\Sapra model has been created',54,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:35:53','2018-10-05 00:35:53'),(294,'default','App\\Sapra model has been created',55,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:36:19','2018-10-05 00:36:19'),(295,'default','App\\Sapra model has been created',56,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:38:48','2018-10-05 00:38:48'),(296,'default','App\\Sapra model has been created',57,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:39:06','2018-10-05 00:39:06'),(297,'default','App\\Sapra model has been created',58,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:42:06','2018-10-05 00:42:06'),(298,'default','App\\Sapra model has been created',59,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:42:20','2018-10-05 00:42:20'),(299,'default','App\\Sapra model has been created',60,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:44:21','2018-10-05 00:44:21'),(300,'default','App\\Sapra model has been created',61,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:44:34','2018-10-05 00:44:34'),(301,'default','App\\Sapra model has been created',62,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:46:00','2018-10-05 00:46:00'),(302,'default','App\\Sapra model has been created',63,'App\\Sapra',3,'App\\User','[]','2018-10-05 00:46:14','2018-10-05 00:46:14'),(303,'default','App\\Sapra model has been created',64,'App\\Sapra',3,'App\\User','[]','2018-10-05 01:24:41','2018-10-05 01:24:41'),(304,'default','App\\Pembinaan model has been created',168,'App\\Pembinaan',3,'App\\User','[]','2018-10-05 02:02:55','2018-10-05 02:02:55'),(305,'default','App\\Pelaporan model has been updated',2,'App\\Pelaporan',3,'App\\User','[]','2018-10-07 19:33:50','2018-10-07 19:33:50'),(306,'default','App\\ContentPublikasi model has been created',9,'App\\ContentPublikasi',3,'App\\User','[]','2018-10-07 20:39:49','2018-10-07 20:39:49'),(307,'default','App\\Pembinaan model has been created',169,'App\\Pembinaan',3,'App\\User','[]','2018-10-07 20:45:28','2018-10-07 20:45:28'),(308,'default','App\\Linma model has been created',77,'App\\Linma',42,'App\\User','[]','2018-10-08 20:29:46','2018-10-08 20:29:46'),(309,'default','App\\Linma model has been created',78,'App\\Linma',42,'App\\User','[]','2018-10-08 20:30:08','2018-10-08 20:30:08'),(310,'default','App\\Sapra model has been created',65,'App\\Sapra',35,'App\\User','[]','2018-10-08 20:36:41','2018-10-08 20:36:41'),(311,'default','App\\Sapra model has been created',66,'App\\Sapra',35,'App\\User','[]','2018-10-08 20:37:22','2018-10-08 20:37:22'),(312,'default','App\\Sapra model has been created',67,'App\\Sapra',35,'App\\User','[]','2018-10-08 20:38:13','2018-10-08 20:38:13'),(313,'default','App\\Sapra model has been created',68,'App\\Sapra',35,'App\\User','[]','2018-10-08 20:39:29','2018-10-08 20:39:29'),(314,'default','App\\Sapra model has been created',69,'App\\Sapra',35,'App\\User','[]','2018-10-08 20:40:18','2018-10-08 20:40:18'),(315,'default','App\\Linma model has been created',79,'App\\Linma',3,'App\\User','[]','2018-10-10 02:00:19','2018-10-10 02:00:19'),(316,'default','App\\Linma model has been created',80,'App\\Linma',3,'App\\User','[]','2018-10-10 02:00:19','2018-10-10 02:00:19'),(317,'default','App\\Linma model has been created',81,'App\\Linma',3,'App\\User','[]','2018-10-10 02:47:34','2018-10-10 02:47:34'),(318,'default','App\\Linma model has been created',82,'App\\Linma',3,'App\\User','[]','2018-10-10 03:17:02','2018-10-10 03:17:02'),(319,'default','App\\Linma model has been created',83,'App\\Linma',3,'App\\User','[]','2018-10-10 03:28:58','2018-10-10 03:28:58'),(320,'default','App\\Linma model has been created',84,'App\\Linma',3,'App\\User','[]','2018-10-10 03:28:58','2018-10-10 03:28:58'),(321,'default','App\\Linma model has been created',85,'App\\Linma',3,'App\\User','[]','2018-10-10 03:28:58','2018-10-10 03:28:58'),(322,'default','App\\Linma model has been created',86,'App\\Linma',3,'App\\User','[]','2018-10-10 03:30:14','2018-10-10 03:30:14'),(323,'default','App\\Linma model has been created',87,'App\\Linma',3,'App\\User','[]','2018-10-10 03:30:15','2018-10-10 03:30:15'),(324,'default','App\\Linma model has been created',88,'App\\Linma',3,'App\\User','[]','2018-10-10 03:39:00','2018-10-10 03:39:00'),(325,'default','App\\Linma model has been created',89,'App\\Linma',3,'App\\User','[]','2018-10-10 03:39:40','2018-10-10 03:39:40'),(326,'default','App\\Linma model has been created',90,'App\\Linma',3,'App\\User','[]','2018-10-10 03:53:33','2018-10-10 03:53:33'),(327,'default','App\\Linma model has been created',91,'App\\Linma',3,'App\\User','[]','2018-10-10 06:37:11','2018-10-10 06:37:11'),(328,'default','App\\Linma model has been created',92,'App\\Linma',39,'App\\User','[]','2018-10-10 09:01:00','2018-10-10 09:01:00'),(329,'default','App\\ContentPublikasi model has been created',11,'App\\ContentPublikasi',17,'App\\User','[]','2018-10-10 09:01:45','2018-10-10 09:01:45'),(330,'default','App\\ContentPublikasi model has been created',12,'App\\ContentPublikasi',17,'App\\User','[]','2018-10-10 09:02:02','2018-10-10 09:02:02'),(331,'default','App\\Linma model has been created',93,'App\\Linma',39,'App\\User','[]','2018-10-11 03:43:59','2018-10-11 03:43:59'),(332,'default','App\\Linma model has been created',94,'App\\Linma',39,'App\\User','[]','2018-10-11 03:44:36','2018-10-11 03:44:36'),(333,'default','App\\Linma model has been created',95,'App\\Linma',39,'App\\User','[]','2018-10-11 03:51:36','2018-10-11 03:51:36'),(334,'default','App\\Linma model has been created',96,'App\\Linma',39,'App\\User','[]','2018-10-11 03:56:10','2018-10-11 03:56:10'),(335,'default','App\\Linma model has been created',97,'App\\Linma',39,'App\\User','[]','2018-10-11 05:40:58','2018-10-11 05:40:58'),(336,'default','App\\Sapra model has been created',70,'App\\Sapra',3,'App\\User','[]','2018-10-11 09:35:09','2018-10-11 09:35:09'),(337,'default','App\\Linma model has been created',98,'App\\Linma',39,'App\\User','[]','2018-10-12 02:26:35','2018-10-12 02:26:35'),(338,'default','App\\Linma model has been created',99,'App\\Linma',39,'App\\User','[]','2018-10-12 03:45:33','2018-10-12 03:45:33'),(339,'default','App\\Linma model has been created',100,'App\\Linma',39,'App\\User','[]','2018-10-12 04:22:59','2018-10-12 04:22:59'),(340,'default','App\\Linma model has been created',101,'App\\Linma',39,'App\\User','[]','2018-10-12 08:08:24','2018-10-12 08:08:24'),(341,'default','App\\Linma model has been created',102,'App\\Linma',39,'App\\User','[]','2018-10-13 01:33:46','2018-10-13 01:33:46'),(342,'default','App\\Linma model has been created',103,'App\\Linma',39,'App\\User','[]','2018-10-13 01:42:28','2018-10-13 01:42:28'),(343,'default','App\\Linma model has been created',104,'App\\Linma',39,'App\\User','[]','2018-10-13 01:48:18','2018-10-13 01:48:18'),(344,'default','App\\Linma model has been created',105,'App\\Linma',39,'App\\User','[]','2018-10-13 01:54:48','2018-10-13 01:54:48'),(345,'default','App\\Linma model has been created',106,'App\\Linma',39,'App\\User','[]','2018-10-13 02:01:33','2018-10-13 02:01:33'),(346,'default','App\\Linma model has been created',107,'App\\Linma',39,'App\\User','[]','2018-10-13 02:04:27','2018-10-13 02:04:27'),(347,'default','App\\Linma model has been created',108,'App\\Linma',39,'App\\User','[]','2018-10-14 02:48:07','2018-10-14 02:48:07'),(348,'default','App\\Linma model has been created',109,'App\\Linma',39,'App\\User','[]','2018-10-14 12:59:13','2018-10-14 12:59:13'),(349,'default','App\\Linma model has been created',110,'App\\Linma',39,'App\\User','[]','2018-10-14 14:33:36','2018-10-14 14:33:36'),(350,'default','App\\Linma model has been created',111,'App\\Linma',39,'App\\User','[]','2018-10-14 14:36:40','2018-10-14 14:36:40'),(351,'default','App\\PosJaga model has been created',124,'App\\PosJaga',39,'App\\User','[]','2018-10-14 15:16:30','2018-10-14 15:16:30'),(352,'default','App\\Linma model has been created',112,'App\\Linma',39,'App\\User','[]','2018-10-15 00:16:33','2018-10-15 00:16:33'),(353,'default','App\\Linma model has been created',113,'App\\Linma',3,'App\\User','[]','2018-10-16 07:02:29','2018-10-16 07:02:29'),(354,'default','App\\Linma model has been created',114,'App\\Linma',39,'App\\User','[]','2018-10-16 15:32:26','2018-10-16 15:32:26'),(355,'default','App\\Sapra model has been created',71,'App\\Sapra',17,'App\\User','[]','2018-10-17 09:06:44','2018-10-17 09:06:44'),(356,'default','App\\Sapra model has been updated',65,'App\\Sapra',17,'App\\User','[]','2018-10-19 02:26:13','2018-10-19 02:26:13'),(357,'default','App\\Sapra model has been updated',65,'App\\Sapra',17,'App\\User','[]','2018-10-19 02:27:00','2018-10-19 02:27:00'),(358,'default','App\\Linma model has been created',115,'App\\Linma',39,'App\\User','[]','2018-10-20 03:06:39','2018-10-20 03:06:39'),(359,'default','App\\Linma model has been created',116,'App\\Linma',45,'App\\User','[]','2018-10-23 02:29:58','2018-10-23 02:29:58'),(360,'default','App\\Linma model has been created',117,'App\\Linma',45,'App\\User','[]','2018-10-23 02:33:23','2018-10-23 02:33:23'),(361,'default','App\\Linma model has been created',118,'App\\Linma',45,'App\\User','[]','2018-10-23 02:40:30','2018-10-23 02:40:30'),(362,'default','App\\Linma model has been created',119,'App\\Linma',45,'App\\User','[]','2018-10-23 02:55:37','2018-10-23 02:55:37'),(363,'default','App\\Linma model has been created',120,'App\\Linma',45,'App\\User','[]','2018-10-23 02:59:33','2018-10-23 02:59:33'),(364,'default','App\\Linma model has been created',121,'App\\Linma',45,'App\\User','[]','2018-10-23 03:03:05','2018-10-23 03:03:05'),(365,'default','App\\Linma model has been created',122,'App\\Linma',45,'App\\User','[]','2018-10-23 03:12:13','2018-10-23 03:12:13'),(366,'default','App\\Linma model has been created',123,'App\\Linma',45,'App\\User','[]','2018-10-23 03:20:11','2018-10-23 03:20:11'),(367,'default','App\\Linma model has been created',124,'App\\Linma',45,'App\\User','[]','2018-10-23 03:26:39','2018-10-23 03:26:39'),(368,'default','App\\Linma model has been created',125,'App\\Linma',45,'App\\User','[]','2018-10-23 03:29:21','2018-10-23 03:29:21'),(369,'default','App\\Linma model has been created',126,'App\\Linma',45,'App\\User','[]','2018-10-23 03:31:40','2018-10-23 03:31:40'),(370,'default','App\\Linma model has been created',127,'App\\Linma',45,'App\\User','[]','2018-10-23 03:33:26','2018-10-23 03:33:26'),(371,'default','App\\Linma model has been created',128,'App\\Linma',45,'App\\User','[]','2018-10-23 03:37:18','2018-10-23 03:37:18'),(372,'default','App\\Linma model has been created',129,'App\\Linma',45,'App\\User','[]','2018-10-23 03:47:05','2018-10-23 03:47:05'),(373,'default','App\\Linma model has been created',130,'App\\Linma',45,'App\\User','[]','2018-10-23 03:49:56','2018-10-23 03:49:56'),(374,'default','App\\Linma model has been created',131,'App\\Linma',45,'App\\User','[]','2018-10-23 03:53:08','2018-10-23 03:53:08'),(375,'default','App\\Linma model has been created',132,'App\\Linma',45,'App\\User','[]','2018-10-23 03:55:08','2018-10-23 03:55:08'),(376,'default','App\\Linma model has been created',133,'App\\Linma',45,'App\\User','[]','2018-10-23 03:57:36','2018-10-23 03:57:36'),(377,'default','App\\Linma model has been created',134,'App\\Linma',45,'App\\User','[]','2018-10-23 04:00:47','2018-10-23 04:00:47'),(378,'default','App\\Linma model has been created',135,'App\\Linma',45,'App\\User','[]','2018-10-23 04:04:22','2018-10-23 04:04:22'),(379,'default','App\\Linma model has been created',136,'App\\Linma',45,'App\\User','[]','2018-10-23 04:07:35','2018-10-23 04:07:35'),(380,'default','App\\Linma model has been created',137,'App\\Linma',3,'App\\User','[]','2018-10-23 04:09:39','2018-10-23 04:09:39'),(381,'default','App\\Linma model has been created',138,'App\\Linma',3,'App\\User','[]','2018-10-23 04:10:19','2018-10-23 04:10:19'),(382,'default','App\\Linma model has been created',139,'App\\Linma',45,'App\\User','[]','2018-10-23 04:11:22','2018-10-23 04:11:22'),(383,'default','App\\Linma model has been created',140,'App\\Linma',45,'App\\User','[]','2018-10-23 04:14:40','2018-10-23 04:14:40'),(384,'default','App\\Linma model has been created',141,'App\\Linma',45,'App\\User','[]','2018-10-23 04:18:19','2018-10-23 04:18:19'),(385,'default','App\\Linma model has been created',142,'App\\Linma',45,'App\\User','[]','2018-10-23 04:21:40','2018-10-23 04:21:40'),(386,'default','App\\Linma model has been created',143,'App\\Linma',45,'App\\User','[]','2018-10-23 04:24:37','2018-10-23 04:24:37'),(387,'default','App\\Linma model has been created',144,'App\\Linma',45,'App\\User','[]','2018-10-23 04:29:28','2018-10-23 04:29:28'),(388,'default','App\\Linma model has been created',145,'App\\Linma',45,'App\\User','[]','2018-10-23 04:32:12','2018-10-23 04:32:12'),(389,'default','App\\Linma model has been created',146,'App\\Linma',45,'App\\User','[]','2018-10-23 04:35:15','2018-10-23 04:35:15'),(390,'default','App\\Linma model has been created',147,'App\\Linma',45,'App\\User','[]','2018-10-23 04:37:50','2018-10-23 04:37:50'),(391,'default','App\\Linma model has been created',148,'App\\Linma',45,'App\\User','[]','2018-10-23 04:40:39','2018-10-23 04:40:39'),(392,'default','App\\Linma model has been created',149,'App\\Linma',45,'App\\User','[]','2018-10-23 04:44:24','2018-10-23 04:44:24'),(393,'default','App\\Linma model has been created',150,'App\\Linma',45,'App\\User','[]','2018-10-23 04:47:27','2018-10-23 04:47:27'),(394,'default','App\\Linma model has been created',151,'App\\Linma',45,'App\\User','[]','2018-10-23 04:50:46','2018-10-23 04:50:46'),(395,'default','App\\Linma model has been created',152,'App\\Linma',45,'App\\User','[]','2018-10-23 04:54:22','2018-10-23 04:54:22'),(396,'default','App\\Linma model has been created',153,'App\\Linma',45,'App\\User','[]','2018-10-23 04:57:24','2018-10-23 04:57:24'),(397,'default','App\\Linma model has been created',154,'App\\Linma',45,'App\\User','[]','2018-10-23 04:59:36','2018-10-23 04:59:36'),(398,'default','App\\Linma model has been created',155,'App\\Linma',45,'App\\User','[]','2018-10-23 05:03:09','2018-10-23 05:03:09'),(399,'default','App\\Linma model has been created',156,'App\\Linma',45,'App\\User','[]','2018-10-23 05:06:40','2018-10-23 05:06:40'),(400,'default','App\\Linma model has been created',157,'App\\Linma',45,'App\\User','[]','2018-10-23 05:09:20','2018-10-23 05:09:20'),(401,'default','App\\Linma model has been created',158,'App\\Linma',45,'App\\User','[]','2018-10-23 07:34:31','2018-10-23 07:34:31'),(402,'default','App\\Linma model has been created',159,'App\\Linma',45,'App\\User','[]','2018-10-23 07:37:32','2018-10-23 07:37:32'),(403,'default','App\\Linma model has been created',160,'App\\Linma',45,'App\\User','[]','2018-10-23 07:40:21','2018-10-23 07:40:21'),(404,'default','App\\Linma model has been created',161,'App\\Linma',45,'App\\User','[]','2018-10-23 07:43:46','2018-10-23 07:43:46'),(405,'default','App\\Linma model has been created',162,'App\\Linma',45,'App\\User','[]','2018-10-23 07:47:56','2018-10-23 07:47:56'),(406,'default','App\\Linma model has been created',163,'App\\Linma',45,'App\\User','[]','2018-10-23 07:51:00','2018-10-23 07:51:00'),(407,'default','App\\Pembinaan model has been created',170,'App\\Pembinaan',3,'App\\User','[]','2018-10-23 08:34:35','2018-10-23 08:34:35'),(408,'default','App\\Linma model has been created',164,'App\\Linma',17,'App\\User','[]','2018-10-23 08:43:20','2018-10-23 08:43:20'),(409,'default','App\\Sapra model has been created',72,'App\\Sapra',17,'App\\User','[]','2018-10-23 08:46:18','2018-10-23 08:46:18'),(410,'default','App\\Sapra model has been updated',72,'App\\Sapra',17,'App\\User','[]','2018-10-23 08:46:57','2018-10-23 08:46:57'),(411,'default','App\\PosJaga model has been created',125,'App\\PosJaga',3,'App\\User','[]','2018-10-23 08:56:35','2018-10-23 08:56:35'),(412,'default','App\\Linma model has been created',165,'App\\Linma',45,'App\\User','[]','2018-10-23 09:20:39','2018-10-23 09:20:39'),(413,'default','App\\Linma model has been created',166,'App\\Linma',45,'App\\User','[]','2018-10-24 03:15:51','2018-10-24 03:15:51'),(414,'default','App\\PosJaga model has been created',126,'App\\PosJaga',3,'App\\User','[]','2018-10-24 03:34:35','2018-10-24 03:34:35'),(415,'default','App\\Linma model has been created',167,'App\\Linma',45,'App\\User','[]','2018-10-24 06:43:56','2018-10-24 06:43:56'),(416,'default','App\\Linma model has been created',168,'App\\Linma',45,'App\\User','[]','2018-10-24 06:48:34','2018-10-24 06:48:34'),(417,'default','App\\Linma model has been created',169,'App\\Linma',45,'App\\User','[]','2018-10-24 06:52:39','2018-10-24 06:52:39'),(418,'default','App\\Linma model has been created',170,'App\\Linma',45,'App\\User','[]','2018-10-24 07:03:29','2018-10-24 07:03:29'),(419,'default','App\\Linma model has been created',171,'App\\Linma',45,'App\\User','[]','2018-10-24 07:07:13','2018-10-24 07:07:13'),(420,'default','App\\Linma model has been created',172,'App\\Linma',45,'App\\User','[]','2018-10-24 07:12:53','2018-10-24 07:12:53'),(421,'default','App\\Linma model has been created',173,'App\\Linma',45,'App\\User','[]','2018-10-24 07:17:26','2018-10-24 07:17:26'),(422,'default','App\\Linma model has been created',174,'App\\Linma',45,'App\\User','[]','2018-10-24 07:21:07','2018-10-24 07:21:07'),(423,'default','App\\Linma model has been created',175,'App\\Linma',45,'App\\User','[]','2018-10-24 07:24:51','2018-10-24 07:24:51'),(424,'default','App\\Linma model has been created',176,'App\\Linma',45,'App\\User','[]','2018-10-24 07:27:24','2018-10-24 07:27:24'),(425,'default','App\\Linma model has been created',177,'App\\Linma',45,'App\\User','[]','2018-10-24 07:30:56','2018-10-24 07:30:56'),(426,'default','App\\Linma model has been created',178,'App\\Linma',45,'App\\User','[]','2018-10-24 07:33:39','2018-10-24 07:33:39'),(427,'default','App\\Linma model has been created',179,'App\\Linma',45,'App\\User','[]','2018-10-24 07:36:29','2018-10-24 07:36:29'),(428,'default','App\\Linma model has been created',180,'App\\Linma',45,'App\\User','[]','2018-10-24 07:38:48','2018-10-24 07:38:48'),(429,'default','App\\Linma model has been created',181,'App\\Linma',45,'App\\User','[]','2018-10-24 07:42:26','2018-10-24 07:42:26'),(430,'default','App\\Linma model has been created',182,'App\\Linma',45,'App\\User','[]','2018-10-24 09:48:10','2018-10-24 09:48:10'),(431,'default','App\\Linma model has been created',183,'App\\Linma',45,'App\\User','[]','2018-10-24 09:51:32','2018-10-24 09:51:32'),(432,'default','App\\Linma model has been created',184,'App\\Linma',45,'App\\User','[]','2018-10-24 09:54:43','2018-10-24 09:54:43'),(433,'default','App\\Linma model has been created',185,'App\\Linma',45,'App\\User','[]','2018-10-24 09:59:41','2018-10-24 09:59:41'),(434,'default','App\\Linma model has been created',186,'App\\Linma',45,'App\\User','[]','2018-10-24 10:02:26','2018-10-24 10:02:26'),(435,'default','App\\Linma model has been created',187,'App\\Linma',45,'App\\User','[]','2018-10-24 10:06:07','2018-10-24 10:06:07'),(436,'default','App\\Linma model has been created',188,'App\\Linma',45,'App\\User','[]','2018-10-24 10:09:18','2018-10-24 10:09:18'),(437,'default','App\\Linma model has been created',189,'App\\Linma',45,'App\\User','[]','2018-10-24 10:12:48','2018-10-24 10:12:48'),(438,'default','App\\Linma model has been created',190,'App\\Linma',45,'App\\User','[]','2018-10-24 10:15:34','2018-10-24 10:15:34'),(439,'default','App\\Linma model has been created',191,'App\\Linma',45,'App\\User','[]','2018-10-24 10:19:48','2018-10-24 10:19:48'),(440,'default','App\\Linma model has been created',192,'App\\Linma',45,'App\\User','[]','2018-10-24 10:23:04','2018-10-24 10:23:04'),(441,'default','App\\Linma model has been created',193,'App\\Linma',45,'App\\User','[]','2018-10-24 10:25:21','2018-10-24 10:25:21'),(442,'default','App\\Linma model has been created',194,'App\\Linma',45,'App\\User','[]','2018-10-24 10:29:29','2018-10-24 10:29:29'),(443,'default','App\\Linma model has been created',195,'App\\Linma',45,'App\\User','[]','2018-10-24 10:32:46','2018-10-24 10:32:46'),(444,'default','App\\Linma model has been created',196,'App\\Linma',45,'App\\User','[]','2018-10-24 10:36:44','2018-10-24 10:36:44'),(445,'default','App\\Linma model has been created',197,'App\\Linma',45,'App\\User','[]','2018-10-24 10:39:41','2018-10-24 10:39:41'),(446,'default','App\\Linma model has been created',198,'App\\Linma',45,'App\\User','[]','2018-10-24 10:42:20','2018-10-24 10:42:20'),(447,'default','App\\Linma model has been created',199,'App\\Linma',45,'App\\User','[]','2018-10-24 10:45:23','2018-10-24 10:45:23'),(448,'default','App\\Linma model has been created',200,'App\\Linma',45,'App\\User','[]','2018-10-24 10:47:46','2018-10-24 10:47:46'),(449,'default','App\\Linma model has been created',201,'App\\Linma',45,'App\\User','[]','2018-10-24 13:46:13','2018-10-24 13:46:13'),(450,'default','App\\Linma model has been created',202,'App\\Linma',45,'App\\User','[]','2018-10-24 13:49:30','2018-10-24 13:49:30'),(451,'default','App\\Linma model has been created',203,'App\\Linma',45,'App\\User','[]','2018-10-24 13:53:30','2018-10-24 13:53:30'),(452,'default','App\\Linma model has been created',204,'App\\Linma',45,'App\\User','[]','2018-10-24 13:57:29','2018-10-24 13:57:29'),(453,'default','App\\Linma model has been created',205,'App\\Linma',45,'App\\User','[]','2018-10-24 14:01:11','2018-10-24 14:01:11'),(454,'default','App\\Linma model has been created',206,'App\\Linma',45,'App\\User','[]','2018-10-24 14:04:11','2018-10-24 14:04:11'),(455,'default','App\\Linma model has been created',207,'App\\Linma',45,'App\\User','[]','2018-10-24 14:07:56','2018-10-24 14:07:56'),(456,'default','App\\Linma model has been created',208,'App\\Linma',45,'App\\User','[]','2018-10-24 14:11:03','2018-10-24 14:11:03'),(457,'default','App\\Linma model has been created',209,'App\\Linma',45,'App\\User','[]','2018-10-24 14:16:16','2018-10-24 14:16:16'),(458,'default','App\\Linma model has been created',210,'App\\Linma',45,'App\\User','[]','2018-10-24 14:20:46','2018-10-24 14:20:46'),(459,'default','App\\Linma model has been created',211,'App\\Linma',45,'App\\User','[]','2018-10-24 14:23:44','2018-10-24 14:23:44'),(460,'default','App\\Linma model has been created',212,'App\\Linma',45,'App\\User','[]','2018-10-24 14:26:32','2018-10-24 14:26:32'),(461,'default','App\\Linma model has been created',213,'App\\Linma',45,'App\\User','[]','2018-10-24 14:29:48','2018-10-24 14:29:48'),(462,'default','App\\Sapra model has been created',70,'App\\Sapra',4,'App\\User','[]','2018-10-30 01:34:11','2018-10-30 01:34:11'),(463,'default','App\\PosJaga model has been created',125,'App\\PosJaga',3,'App\\User','[]','2018-11-02 04:12:54','2018-11-02 04:12:54'),(464,'default','App\\PosJaga model has been created',126,'App\\PosJaga',3,'App\\User','[]','2018-11-02 04:12:54','2018-11-02 04:12:54'),(465,'default','App\\PosJaga model has been created',127,'App\\PosJaga',3,'App\\User','[]','2018-11-02 04:12:54','2018-11-02 04:12:54'),(466,'default','App\\PosJaga model has been created',128,'App\\PosJaga',3,'App\\User','[]','2018-11-02 04:16:50','2018-11-02 04:16:50'),(467,'default','App\\PosJaga model has been created',129,'App\\PosJaga',3,'App\\User','[]','2018-11-02 07:08:09','2018-11-02 07:08:09'),(468,'default','App\\PosJaga model has been created',130,'App\\PosJaga',3,'App\\User','[]','2018-11-02 07:08:44','2018-11-02 07:08:44'),(469,'default','App\\PosJaga model has been created',131,'App\\PosJaga',3,'App\\User','[]','2018-11-02 07:21:48','2018-11-02 07:21:48'),(470,'default','App\\ContentPublikasi model has been created',13,'App\\ContentPublikasi',3,'App\\User','[]','2018-11-02 07:23:09','2018-11-02 07:23:09'),(471,'default','App\\Pelaporan model has been created',1,'App\\Pelaporan',3,'App\\User','[]','2018-11-02 07:23:38','2018-11-02 07:23:38'),(472,'default','App\\ContentPublikasi model has been created',14,'App\\ContentPublikasi',3,'App\\User','[]','2018-11-02 07:24:35','2018-11-02 07:24:35'),(473,'default','App\\Pelaporan model has been created',2,'App\\Pelaporan',3,'App\\User','[]','2018-11-02 07:24:51','2018-11-02 07:24:51'),(474,'default','App\\Pembinaan model has been created',1,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:25:21','2018-11-02 07:25:21'),(475,'default','App\\Pembinaan model has been created',2,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:30','2018-11-02 07:31:30'),(476,'default','App\\Pembinaan model has been created',3,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:48','2018-11-02 07:31:48'),(477,'default','App\\Pembinaan model has been created',4,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:48','2018-11-02 07:31:48'),(478,'default','App\\Pembinaan model has been created',5,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:48','2018-11-02 07:31:48'),(479,'default','App\\Pembinaan model has been created',6,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:48','2018-11-02 07:31:48'),(480,'default','App\\Pembinaan model has been created',7,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:48','2018-11-02 07:31:48'),(481,'default','App\\Pembinaan model has been created',8,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:48','2018-11-02 07:31:48'),(482,'default','App\\Pembinaan model has been created',9,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:49','2018-11-02 07:31:49'),(483,'default','App\\Pembinaan model has been created',10,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:49','2018-11-02 07:31:49'),(484,'default','App\\Pembinaan model has been created',11,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:49','2018-11-02 07:31:49'),(485,'default','App\\Pembinaan model has been created',12,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:49','2018-11-02 07:31:49'),(486,'default','App\\Pembinaan model has been created',13,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:31:49','2018-11-02 07:31:49'),(487,'default','App\\Pembinaan model has been created',14,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:36','2018-11-02 07:35:36'),(488,'default','App\\Pembinaan model has been created',15,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:51','2018-11-02 07:35:51'),(489,'default','App\\Pembinaan model has been created',16,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:51','2018-11-02 07:35:51'),(490,'default','App\\Pembinaan model has been created',17,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:51','2018-11-02 07:35:51'),(491,'default','App\\Pembinaan model has been created',18,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:51','2018-11-02 07:35:51'),(492,'default','App\\Pembinaan model has been created',19,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:52','2018-11-02 07:35:52'),(493,'default','App\\Pembinaan model has been created',20,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:52','2018-11-02 07:35:52'),(494,'default','App\\Pembinaan model has been created',21,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:52','2018-11-02 07:35:52'),(495,'default','App\\Pembinaan model has been created',22,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:52','2018-11-02 07:35:52'),(496,'default','App\\Pembinaan model has been created',23,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:52','2018-11-02 07:35:52'),(497,'default','App\\Pembinaan model has been created',24,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:53','2018-11-02 07:35:53'),(498,'default','App\\Pembinaan model has been created',25,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:53','2018-11-02 07:35:53'),(499,'default','App\\Pembinaan model has been created',26,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:53','2018-11-02 07:35:53'),(500,'default','App\\Pembinaan model has been created',27,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:53','2018-11-02 07:35:53'),(501,'default','App\\Pembinaan model has been created',28,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:35:54','2018-11-02 07:35:54'),(502,'default','App\\Pembinaan model has been created',29,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 07:45:19','2018-11-02 07:45:19'),(503,'default','App\\Pembinaan model has been created',30,'App\\Pembinaan',3,'App\\User','[]','2018-11-02 08:53:15','2018-11-02 08:53:15'),(504,'default','App\\Linma model has been created',214,'App\\Linma',3,'App\\User','[]','2018-11-05 02:11:37','2018-11-05 02:11:37'),(505,'default','App\\Linma model has been created',215,'App\\Linma',39,'App\\User','[]','2018-11-06 14:16:48','2018-11-06 14:16:48'),(506,'default','App\\Linma model has been created',216,'App\\Linma',39,'App\\User','[]','2018-11-07 04:26:07','2018-11-07 04:26:07'),(507,'default','App\\Linma model has been created',217,'App\\Linma',3,'App\\User','[]','2018-11-23 02:53:37','2018-11-23 02:53:37'),(508,'default','App\\Linma model has been created',218,'App\\Linma',4,'App\\User','[]','2018-11-28 03:51:48','2018-11-28 03:51:48'),(509,'default','App\\Linma model has been created',219,'App\\Linma',4,'App\\User','[]','2018-11-28 04:36:38','2018-11-28 04:36:38'),(510,'default','App\\Linma model has been created',220,'App\\Linma',4,'App\\User','[]','2018-11-29 04:23:39','2018-11-29 04:23:39'),(511,'default','App\\Linma model has been created',221,'App\\Linma',4,'App\\User','[]','2018-12-05 03:42:52','2018-12-05 03:42:52'),(512,'default','App\\Linma model has been created',222,'App\\Linma',4,'App\\User','[]','2018-12-18 05:57:22','2018-12-18 05:57:22'),(513,'default','App\\Linma model has been created',223,'App\\Linma',4,'App\\User','[]','2018-12-18 05:59:57','2018-12-18 05:59:57'),(514,'default','App\\Linma model has been created',224,'App\\Linma',4,'App\\User','[]','2018-12-18 06:02:10','2018-12-18 06:02:10'),(515,'default','App\\Linma model has been created',225,'App\\Linma',4,'App\\User','[]','2018-12-18 06:04:03','2018-12-18 06:04:03'),(516,'default','App\\Linma model has been created',226,'App\\Linma',4,'App\\User','[]','2018-12-18 06:06:53','2018-12-18 06:06:53'),(517,'default','App\\Linma model has been created',227,'App\\Linma',4,'App\\User','[]','2018-12-18 06:09:07','2018-12-18 06:09:07'),(518,'default','App\\Linma model has been created',228,'App\\Linma',4,'App\\User','[]','2018-12-18 06:10:55','2018-12-18 06:10:55'),(519,'default','App\\Linma model has been created',229,'App\\Linma',4,'App\\User','[]','2018-12-18 06:12:49','2018-12-18 06:12:49'),(520,'default','App\\Linma model has been created',230,'App\\Linma',4,'App\\User','[]','2018-12-18 06:14:17','2018-12-18 06:14:17'),(521,'default','App\\Linma model has been created',231,'App\\Linma',4,'App\\User','[]','2018-12-18 06:15:43','2018-12-18 06:15:43'),(522,'default','App\\Linma model has been created',232,'App\\Linma',4,'App\\User','[]','2018-12-18 06:17:07','2018-12-18 06:17:07'),(523,'default','App\\Linma model has been created',233,'App\\Linma',4,'App\\User','[]','2018-12-18 06:18:47','2018-12-18 06:18:47'),(524,'default','App\\Linma model has been created',234,'App\\Linma',4,'App\\User','[]','2018-12-18 06:21:32','2018-12-18 06:21:32'),(525,'default','App\\Linma model has been created',235,'App\\Linma',4,'App\\User','[]','2018-12-18 06:24:42','2018-12-18 06:24:42'),(526,'default','App\\Linma model has been created',236,'App\\Linma',4,'App\\User','[]','2018-12-18 06:28:01','2018-12-18 06:28:01'),(527,'default','App\\Linma model has been created',237,'App\\Linma',4,'App\\User','[]','2018-12-18 06:31:05','2018-12-18 06:31:05'),(528,'default','App\\Linma model has been created',238,'App\\Linma',4,'App\\User','[]','2018-12-18 06:37:39','2018-12-18 06:37:39'),(529,'default','App\\Linma model has been created',239,'App\\Linma',4,'App\\User','[]','2018-12-18 06:39:23','2018-12-18 06:39:23'),(530,'default','App\\Linma model has been created',240,'App\\Linma',4,'App\\User','[]','2018-12-18 06:40:51','2018-12-18 06:40:51'),(531,'default','App\\Linma model has been created',241,'App\\Linma',4,'App\\User','[]','2018-12-18 06:42:28','2018-12-18 06:42:28'),(532,'default','App\\Linma model has been created',242,'App\\Linma',4,'App\\User','[]','2018-12-18 06:44:57','2018-12-18 06:44:57'),(533,'default','App\\Linma model has been created',243,'App\\Linma',4,'App\\User','[]','2018-12-18 06:53:03','2018-12-18 06:53:03'),(534,'default','App\\Linma model has been created',244,'App\\Linma',4,'App\\User','[]','2018-12-18 06:55:16','2018-12-18 06:55:16'),(535,'default','App\\Linma model has been created',245,'App\\Linma',4,'App\\User','[]','2018-12-18 06:58:13','2018-12-18 06:58:13'),(536,'default','App\\Linma model has been created',246,'App\\Linma',4,'App\\User','[]','2018-12-18 07:05:08','2018-12-18 07:05:08'),(537,'default','App\\Linma model has been created',247,'App\\Linma',4,'App\\User','[]','2018-12-18 07:06:55','2018-12-18 07:06:55'),(538,'default','App\\Linma model has been created',248,'App\\Linma',4,'App\\User','[]','2018-12-18 07:12:52','2018-12-18 07:12:52'),(539,'default','App\\Linma model has been created',249,'App\\Linma',4,'App\\User','[]','2018-12-18 07:37:31','2018-12-18 07:37:31'),(540,'default','App\\Linma model has been created',250,'App\\Linma',4,'App\\User','[]','2018-12-18 07:40:35','2018-12-18 07:40:35'),(541,'default','App\\Linma model has been created',251,'App\\Linma',4,'App\\User','[]','2018-12-18 08:18:36','2018-12-18 08:18:36'),(542,'default','App\\Linma model has been created',252,'App\\Linma',4,'App\\User','[]','2018-12-18 08:20:08','2018-12-18 08:20:08'),(543,'default','App\\Linma model has been created',253,'App\\Linma',4,'App\\User','[]','2018-12-18 08:22:19','2018-12-18 08:22:19'),(544,'default','App\\Linma model has been created',254,'App\\Linma',4,'App\\User','[]','2018-12-18 08:24:02','2018-12-18 08:24:02'),(545,'default','App\\Linma model has been created',255,'App\\Linma',4,'App\\User','[]','2018-12-18 08:25:50','2018-12-18 08:25:50'),(546,'default','App\\Linma model has been created',256,'App\\Linma',4,'App\\User','[]','2018-12-18 08:27:30','2018-12-18 08:27:30'),(547,'default','App\\Linma model has been created',257,'App\\Linma',4,'App\\User','[]','2018-12-18 08:28:44','2018-12-18 08:28:44'),(548,'default','App\\Linma model has been created',258,'App\\Linma',4,'App\\User','[]','2018-12-18 08:43:31','2018-12-18 08:43:31'),(549,'default','App\\Linma model has been created',259,'App\\Linma',4,'App\\User','[]','2018-12-19 11:40:24','2018-12-19 11:40:24'),(550,'default','App\\Linma model has been created',260,'App\\Linma',4,'App\\User','[]','2018-12-19 11:42:01','2018-12-19 11:42:01'),(551,'default','App\\Linma model has been created',261,'App\\Linma',4,'App\\User','[]','2018-12-19 11:43:22','2018-12-19 11:43:22'),(552,'default','App\\Linma model has been created',262,'App\\Linma',4,'App\\User','[]','2018-12-19 11:44:55','2018-12-19 11:44:55'),(553,'default','App\\Linma model has been created',263,'App\\Linma',4,'App\\User','[]','2018-12-19 11:46:01','2018-12-19 11:46:01'),(554,'default','App\\Linma model has been created',264,'App\\Linma',4,'App\\User','[]','2018-12-19 11:47:23','2018-12-19 11:47:23'),(555,'default','App\\Linma model has been created',265,'App\\Linma',4,'App\\User','[]','2018-12-19 11:48:22','2018-12-19 11:48:22'),(556,'default','App\\Linma model has been created',266,'App\\Linma',4,'App\\User','[]','2018-12-19 11:49:23','2018-12-19 11:49:23'),(557,'default','App\\Linma model has been created',267,'App\\Linma',4,'App\\User','[]','2018-12-19 12:07:18','2018-12-19 12:07:18'),(558,'default','App\\Linma model has been created',268,'App\\Linma',4,'App\\User','[]','2018-12-19 13:12:52','2018-12-19 13:12:52'),(559,'default','App\\Linma model has been created',269,'App\\Linma',4,'App\\User','[]','2018-12-19 13:14:30','2018-12-19 13:14:30'),(560,'default','App\\Linma model has been created',270,'App\\Linma',4,'App\\User','[]','2018-12-19 13:15:39','2018-12-19 13:15:39'),(561,'default','App\\Linma model has been created',271,'App\\Linma',4,'App\\User','[]','2018-12-19 13:17:16','2018-12-19 13:17:16'),(562,'default','App\\Linma model has been created',272,'App\\Linma',49,'App\\User','[]','2019-07-28 14:27:41','2019-07-28 14:27:41'),(563,'default','App\\Linma model has been created',273,'App\\Linma',49,'App\\User','[]','2019-07-28 14:33:54','2019-07-28 14:33:54'),(564,'default','App\\Linma model has been created',274,'App\\Linma',49,'App\\User','[]','2019-07-28 14:38:09','2019-07-28 14:38:09'),(565,'default','App\\Linma model has been created',275,'App\\Linma',49,'App\\User','[]','2019-07-28 14:40:48','2019-07-28 14:40:48'),(566,'default','App\\Linma model has been created',276,'App\\Linma',49,'App\\User','[]','2019-07-28 14:42:59','2019-07-28 14:42:59'),(567,'default','App\\Linma model has been created',277,'App\\Linma',49,'App\\User','[]','2019-07-28 14:46:35','2019-07-28 14:46:35'),(568,'default','App\\Linma model has been created',278,'App\\Linma',49,'App\\User','[]','2019-07-28 14:48:32','2019-07-28 14:48:32'),(569,'default','App\\Linma model has been created',279,'App\\Linma',49,'App\\User','[]','2019-07-28 14:52:24','2019-07-28 14:52:24'),(570,'default','App\\Linma model has been created',280,'App\\Linma',49,'App\\User','[]','2019-07-28 14:54:59','2019-07-28 14:54:59'),(571,'default','App\\Linma model has been created',281,'App\\Linma',49,'App\\User','[]','2019-07-28 14:57:18','2019-07-28 14:57:18'),(572,'default','App\\Linma model has been created',282,'App\\Linma',49,'App\\User','[]','2019-07-28 14:58:55','2019-07-28 14:58:55'),(573,'default','App\\Linma model has been created',283,'App\\Linma',49,'App\\User','[]','2019-07-28 15:00:54','2019-07-28 15:00:54'),(574,'default','App\\Linma model has been created',284,'App\\Linma',49,'App\\User','[]','2019-07-28 15:02:28','2019-07-28 15:02:28'),(575,'default','App\\Linma model has been created',285,'App\\Linma',49,'App\\User','[]','2019-07-28 15:03:41','2019-07-28 15:03:41'),(576,'default','App\\Linma model has been created',286,'App\\Linma',49,'App\\User','[]','2019-07-28 15:05:20','2019-07-28 15:05:20'),(577,'default','App\\Linma model has been created',287,'App\\Linma',49,'App\\User','[]','2019-07-28 15:06:44','2019-07-28 15:06:44'),(578,'default','App\\Linma model has been created',288,'App\\Linma',49,'App\\User','[]','2019-07-28 15:07:58','2019-07-28 15:07:58'),(579,'default','App\\Linma model has been created',289,'App\\Linma',49,'App\\User','[]','2019-07-28 15:10:20','2019-07-28 15:10:20'),(580,'default','App\\Linma model has been created',290,'App\\Linma',49,'App\\User','[]','2019-07-28 15:11:43','2019-07-28 15:11:43'),(581,'default','App\\Linma model has been created',291,'App\\Linma',49,'App\\User','[]','2019-07-28 15:13:11','2019-07-28 15:13:11'),(582,'default','App\\Linma model has been created',292,'App\\Linma',49,'App\\User','[]','2019-07-28 15:14:50','2019-07-28 15:14:50'),(583,'default','App\\Linma model has been created',293,'App\\Linma',49,'App\\User','[]','2019-07-28 15:16:07','2019-07-28 15:16:07'),(584,'default','App\\Linma model has been created',294,'App\\Linma',49,'App\\User','[]','2019-07-28 15:17:16','2019-07-28 15:17:16'),(585,'default','App\\Linma model has been created',295,'App\\Linma',49,'App\\User','[]','2019-07-28 15:19:17','2019-07-28 15:19:17'),(586,'default','App\\Linma model has been created',296,'App\\Linma',49,'App\\User','[]','2019-07-28 15:31:20','2019-07-28 15:31:20'),(587,'default','App\\Linma model has been created',297,'App\\Linma',49,'App\\User','[]','2019-07-28 15:32:35','2019-07-28 15:32:35'),(588,'default','App\\Linma model has been created',298,'App\\Linma',49,'App\\User','[]','2019-07-28 15:36:22','2019-07-28 15:36:22'),(589,'default','App\\Linma model has been created',299,'App\\Linma',49,'App\\User','[]','2019-07-28 15:37:56','2019-07-28 15:37:56'),(590,'default','App\\Linma model has been created',300,'App\\Linma',49,'App\\User','[]','2019-07-28 15:39:12','2019-07-28 15:39:12'),(591,'default','App\\Linma model has been created',301,'App\\Linma',49,'App\\User','[]','2019-07-28 15:44:59','2019-07-28 15:44:59'),(592,'default','App\\Linma model has been created',302,'App\\Linma',49,'App\\User','[]','2019-07-28 15:46:24','2019-07-28 15:46:24'),(593,'default','App\\Linma model has been created',303,'App\\Linma',49,'App\\User','[]','2019-07-28 15:47:57','2019-07-28 15:47:57'),(594,'default','App\\Linma model has been created',304,'App\\Linma',49,'App\\User','[]','2019-07-28 15:49:21','2019-07-28 15:49:21'),(595,'default','App\\Linma model has been created',305,'App\\Linma',49,'App\\User','[]','2019-07-28 15:50:44','2019-07-28 15:50:44'),(596,'default','App\\Linma model has been created',306,'App\\Linma',49,'App\\User','[]','2019-07-29 12:24:21','2019-07-29 12:24:21'),(597,'default','App\\Linma model has been created',307,'App\\Linma',49,'App\\User','[]','2019-08-01 02:22:36','2019-08-01 02:22:36'),(598,'default','App\\Linma model has been created',308,'App\\Linma',49,'App\\User','[]','2019-08-01 02:25:03','2019-08-01 02:25:03'),(599,'default','App\\Linma model has been created',309,'App\\Linma',49,'App\\User','[]','2019-08-01 02:59:00','2019-08-01 02:59:00'),(600,'default','App\\Linma model has been created',310,'App\\Linma',49,'App\\User','[]','2019-08-15 15:55:20','2019-08-15 15:55:20'),(601,'default','App\\Linma model has been created',311,'App\\Linma',49,'App\\User','[]','2019-08-15 15:58:45','2019-08-15 15:58:45'),(602,'default','App\\Linma model has been created',312,'App\\Linma',49,'App\\User','[]','2019-08-16 01:41:31','2019-08-16 01:41:31'),(603,'default','App\\Linma model has been created',313,'App\\Linma',49,'App\\User','[]','2019-08-16 01:43:37','2019-08-16 01:43:37'),(604,'default','App\\Linma model has been created',314,'App\\Linma',49,'App\\User','[]','2019-08-16 01:46:16','2019-08-16 01:46:16'),(605,'default','App\\Linma model has been created',315,'App\\Linma',49,'App\\User','[]','2019-08-16 01:48:08','2019-08-16 01:48:08'),(606,'default','App\\Linma model has been created',316,'App\\Linma',49,'App\\User','[]','2019-08-16 03:28:40','2019-08-16 03:28:40'),(607,'default','App\\Pelaporan model has been created',1,'App\\Pelaporan',4,'App\\User','[]','2019-08-21 03:00:36','2019-08-21 03:00:36'),(608,'default','App\\Pelaporan model has been created',2,'App\\Pelaporan',4,'App\\User','[]','2019-09-03 07:31:22','2019-09-03 07:31:22'),(609,'default','App\\ContentPublikasi model has been created',13,'App\\ContentPublikasi',4,'App\\User','[]','2019-09-24 01:15:42','2019-09-24 01:15:42'),(610,'default','App\\Pembinaan model has been created',31,'App\\Pembinaan',4,'App\\User','[]','2019-09-24 02:52:12','2019-09-24 02:52:12'),(611,'default','App\\Pelaporan model has been created',3,'App\\Pelaporan',4,'App\\User','[]','2019-09-26 08:24:40','2019-09-26 08:24:40'),(612,'default','App\\ContentPublikasi model has been created',14,'App\\ContentPublikasi',50,'App\\User','[]','2019-10-07 01:17:03','2019-10-07 01:17:03'),(613,'default','App\\PosJaga model has been created',125,'App\\PosJaga',50,'App\\User','[]','2019-10-07 01:20:46','2019-10-07 01:20:46');
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adminis`
--

DROP TABLE IF EXISTS `adminis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hak_akses` int(3) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kd_kec` char(11) NOT NULL,
  `kd_kel_des` char(11) NOT NULL,
  `jns_sapras` int(11) NOT NULL,
  `regu_anggota` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminis`
--

LOCK TABLES `adminis` WRITE;
/*!40000 ALTER TABLE `adminis` DISABLE KEYS */;
/*!40000 ALTER TABLE `adminis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aset_limas`
--

DROP TABLE IF EXISTS `aset_limas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aset_limas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_kecamatan` text COLLATE utf8mb4_unicode_ci,
  `id_kelurahan` text COLLATE utf8mb4_unicode_ci,
  `nama` text COLLATE utf8mb4_unicode_ci,
  `kode_aset` text COLLATE utf8mb4_unicode_ci,
  `jumlah` text COLLATE utf8mb4_unicode_ci,
  `tahun_produksi` text COLLATE utf8mb4_unicode_ci,
  `tahun_perolehan` text COLLATE utf8mb4_unicode_ci,
  `merk` text COLLATE utf8mb4_unicode_ci,
  `kondisi` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aset_limas`
--

LOCK TABLES `aset_limas` WRITE;
/*!40000 ALTER TABLE `aset_limas` DISABLE KEYS */;
INSERT INTO `aset_limas` VALUES (1,'2018-08-31 13:31:50','2018-08-31 13:31:58',NULL,'1','1','Scanner Barcode','90712646124','901','2018','2018','Honda','Jelek','1535697110aset.jpg');
/*!40000 ALTER TABLE `aset_limas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content_publikasis`
--

DROP TABLE IF EXISTS `content_publikasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content_publikasis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_publikasi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kd_kec` text COLLATE utf8mb4_unicode_ci,
  `kel_des` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_publikasis`
--

LOCK TABLES `content_publikasis` WRITE;
/*!40000 ALTER TABLE `content_publikasis` DISABLE KEYS */;
INSERT INTO `content_publikasis` VALUES (13,'2019-09-24 01:15:42','2019-09-24 01:15:42',NULL,'10','Kegiatan Pelantikan Anggota Satlinmas Angkatan II dan III di Lingkungan Pemerintah Kabupaten Serang','test','erwin','05','2001'),(14,'2019-10-07 01:17:03','2019-10-07 01:17:03',NULL,'9','ggg',NULL,'asapkalimantan','30','2001');
/*!40000 ALTER TABLE `content_publikasis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_pembinaan`
--

DROP TABLE IF EXISTS `detail_pembinaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_pembinaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_linmas` int(11) NOT NULL,
  `id_pembinaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_pembinaan`
--

LOCK TABLES `detail_pembinaan` WRITE;
/*!40000 ALTER TABLE `detail_pembinaan` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_pembinaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` VALUES (1,'KEPALA SATUAN TUGAS'),(3,'DANRU KESIAPSIAGAAN & KEWASPADAAN DINI'),(4,'DANRU PENGAMANAN'),(5,'DANRU PERTOLONGAN PERTAMA PADA KORBAN & KEBAKARAN'),(6,'DANRU PENYELAMATAN & EVAKUASI'),(7,'DANRU DAPUR UMUM'),(9,'KEPALA SATUAN LINMAS'),(10,'ANGGOTA');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_linmas`
--

DROP TABLE IF EXISTS `jenis_linmas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_linmas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_linmas`
--

LOCK TABLES `jenis_linmas` WRITE;
/*!40000 ALTER TABLE `jenis_linmas` DISABLE KEYS */;
INSERT INTO `jenis_linmas` VALUES (1,'2018-08-29 10:16:36','2018-08-29 10:16:36',NULL,'UTAMA');
/*!40000 ALTER TABLE `jenis_linmas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jnsPublikasi`
--

DROP TABLE IF EXISTS `jnsPublikasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jnsPublikasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jnsPublikasi`
--

LOCK TABLES `jnsPublikasi` WRITE;
/*!40000 ALTER TABLE `jnsPublikasi` DISABLE KEYS */;
INSERT INTO `jnsPublikasi` VALUES (5,'Lomba'),(6,'Kegiatan Sosialisasi'),(8,'Kegiatan Pembinaan dan Pelatihan'),(9,'Kegiatan Monitoring'),(10,'Kegiatan Lainnya'),(11,'Kegiatan Pelantikan');
/*!40000 ALTER TABLE `jnsPublikasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jns_sapras`
--

DROP TABLE IF EXISTS `jns_sapras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jns_sapras` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jns_sapras`
--

LOCK TABLES `jns_sapras` WRITE;
/*!40000 ALTER TABLE `jns_sapras` DISABLE KEYS */;
INSERT INTO `jns_sapras` VALUES (6,'Alat Angkut / Kendaraan',2),(14,'Alat Komunikasi',2),(23,'Alat Penerangan',2),(24,'Alat Keamanan',2),(25,'Peralatan dan Perlengkapan Lainnya',2);
/*!40000 ALTER TABLE `jns_sapras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jns_tugas`
--

DROP TABLE IF EXISTS `jns_tugas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jns_tugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nm_tugas` varchar(255) NOT NULL,
  `sifat` int(11) NOT NULL COMMENT '1: Rutin, 2: Berkala',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jns_tugas`
--

LOCK TABLES `jns_tugas` WRITE;
/*!40000 ALTER TABLE `jns_tugas` DISABLE KEYS */;
INSERT INTO `jns_tugas` VALUES (1,'test',1);
/*!40000 ALTER TABLE `jns_tugas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_laporan`
--

DROP TABLE IF EXISTS `kategori_laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_laporan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_laporan`
--

LOCK TABLES `kategori_laporan` WRITE;
/*!40000 ALTER TABLE `kategori_laporan` DISABLE KEYS */;
INSERT INTO `kategori_laporan` VALUES (3,'Laporan Gangguan Trantibum'),(4,'Laporan Gangguan Bencana');
/*!40000 ALTER TABLE `kategori_laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kecamatans`
--

DROP TABLE IF EXISTS `kecamatans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kecamatans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `kecamatan` text COLLATE utf8mb4_unicode_ci,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `telp` text COLLATE utf8mb4_unicode_ci,
  `fax` text COLLATE utf8mb4_unicode_ci,
  `nama_camat` text COLLATE utf8mb4_unicode_ci,
  `nip_camat` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kecamatans`
--

LOCK TABLES `kecamatans` WRITE;
/*!40000 ALTER TABLE `kecamatans` DISABLE KEYS */;
INSERT INTO `kecamatans` VALUES (1,'2018-08-29 09:23:38','2018-08-29 09:23:38',NULL,'CIMAHI SELATAN','awsdas','0889324234123','087767412421412','Kontoru Desuka','120064125122512'),(2,'2018-09-01 14:34:05','2018-09-01 14:34:05',NULL,'CIMAHI TENGAH','cigugur','0889324234123','087767412421412','Kontoru Desuka','120064125122512');
/*!40000 ALTER TABLE `kecamatans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelurahans`
--

DROP TABLE IF EXISTS `kelurahans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelurahans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelurahan` text COLLATE utf8mb4_unicode_ci,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `telp` text COLLATE utf8mb4_unicode_ci,
  `fax` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelurahans`
--

LOCK TABLES `kelurahans` WRITE;
/*!40000 ALTER TABLE `kelurahans` DISABLE KEYS */;
INSERT INTO `kelurahans` VALUES (1,'2018-08-29 09:23:50','2018-08-29 09:23:50',NULL,'1','UTAMA','dsaw','0889324234123','087767412421412','taufantritama69@gmail.com'),(2,'2018-08-30 19:50:42','2018-08-30 19:50:42',NULL,'1','BAROS','Baros','0889324234123','087767412421412','taufantritama69@gmail.com');
/*!40000 ALTER TABLE `kelurahans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `linmas`
--

DROP TABLE IF EXISTS `linmas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `linmas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_angota` text COLLATE utf8mb4_unicode_ci,
  `nama` text COLLATE utf8mb4_unicode_ci,
  `tempat_lahir` text COLLATE utf8mb4_unicode_ci,
  `tgl_lahir` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `agama` text COLLATE utf8mb4_unicode_ci,
  `gol_darah` text COLLATE utf8mb4_unicode_ci,
  `pendidikan` text COLLATE utf8mb4_unicode_ci,
  `no_ktp` text COLLATE utf8mb4_unicode_ci,
  `jenis_kelamin` text COLLATE utf8mb4_unicode_ci,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `alamat_kecamatan` text COLLATE utf8mb4_unicode_ci,
  `alamat_kelurahan` text COLLATE utf8mb4_unicode_ci,
  `rt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_linmas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_linmas` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` text COLLATE utf8mb4_unicode_ci,
  `no_sk` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `uk_baju` text COLLATE utf8mb4_unicode_ci,
  `uk_sepatu` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jenis_linmas` (`jenis_linmas`),
  KEY `id_kecamatan` (`id_kecamatan`),
  KEY `id_kelurahan` (`id_kelurahan`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `linmas_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=317 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `linmas`
--

LOCK TABLES `linmas` WRITE;
/*!40000 ALTER TABLE `linmas` DISABLE KEYS */;
INSERT INTO `linmas` VALUES (78,'2018-10-08 20:30:08','2018-10-10 04:08:42',NULL,'17','2007','','Akmad','Serang','10/09/1990','','','Kawin','Islam',NULL,'SMA/SMK','3604171009900001','Laki-Laki','Kp. Walikukun','Carenang','Walikukun','007','003','0','0','','',NULL,'','L','40',42),(93,'2018-10-11 03:43:59','2018-10-12 00:46:23',NULL,'17','2009',NULL,'ARMIN','Serang','12/10/1964','',NULL,'Kawin','Islam','B','SD','3604171104640003','Laki-Laki','Kp.Mandaya','Carenang','Panenjoan','O17','002','0','0',NULL,'',NULL,'Sehat','M','49',39),(96,'2018-10-11 03:56:10','2018-11-05 07:13:45',NULL,'17','2009','','JARWI','PATI','07/04/1961','','085-6922-41745','Kawin','Islam','A','SD','3604170704610001','Laki-Laki','Kp.Mandaya','Carenang','Panenjoan','007','002','0','0','','','1540989057linmas.jpg','Sehat','M','39',39),(99,'2018-10-12 03:45:33','2018-11-30 03:01:33',NULL,'17','2009',NULL,'MARKANDI','Serang','10/07/1990','','085-8801-23720','Kawin','Islam',NULL,'SMP','3604170708910004','Laki-Laki','Kp.Panenjoan','Carenang','Panenjoan','013','001','0','0',NULL,'','1543546893linmas.jpg','Sehat','M','41',4),(102,'2018-10-13 01:33:46','2018-10-31 14:17:43',NULL,'17','2009',NULL,'JUBED','Serang','02/03/1986','','087-8093-77750','Kawin','Islam','B','SMA/SMK','304170203860006','Laki-Laki','KP.PANENJOAN','Carenang','Panenjoan','014','001','0','0',NULL,'',NULL,'Sehat','M','42',39),(103,'2018-10-13 01:42:28','2018-10-31 14:23:51',NULL,'17','2009',NULL,'HASAN BASRI','Serang','10/15/1985','','085-2182-13819','Belum Kawin','Islam','A','SMA/SMK','3604171510850004','Laki-Laki','Kp.Mandaya','Carenang','Panenjoan','006','002','0','0',NULL,'','1540994986linmas.jpg','Sehat','M','41',39),(104,'2018-10-13 01:48:18','2018-10-13 01:48:18',NULL,'17','2009',NULL,'SARIKAM','Serang','04/25/1985','',NULL,'Kawin','Islam','B','SMP','3604172504850002','Laki-Laki','Kp.Panenjoan','Carenang','Panenjoan','001','001','0','0','','',NULL,'Sehat','M','40',39),(105,'2018-10-13 01:54:48','2018-10-13 01:54:48',NULL,'17','2009',NULL,'FAHROJI','Serang','07/22/1986','',NULL,'Kawin','Islam','A','SMA/SMK','3604171211860003','Laki-Laki','Kp.pamanuk','Carenang','Panenjoan','010','003','0','0','','',NULL,'Sehat','M','41',39),(107,'2018-10-13 02:04:27','2018-10-13 02:04:27',NULL,'17','2009',NULL,'SUKARYA','Serang','07/15/1965','',NULL,'Kawin','Islam','A','SD','3604171507650002','Laki-Laki','Kp.Panenjoan','Carenang','Panenjoan','012','001','0','0','','',NULL,'Sehat','M','40',39),(108,'2018-10-14 02:48:07','2018-10-27 08:30:04',NULL,'17','2009',NULL,'MIRTA','Serang','05/07/1973','',NULL,'Kawin','Islam','B','SD','3604170507730002','Laki-Laki','Kp.Panenjoan','Carenang','Panenjoan','013','001','0','0',NULL,'','1539485287linmas.jpg','Sehat','L','42',39),(109,'2018-10-14 12:59:13','2018-10-31 14:13:33',NULL,'17','2009',NULL,'DAUD','Serang','06/02/2000','','081-7798-01057','Belum Kawin','Islam','A','SMA/SMK','3604170602000002','Laki-Laki','Kp.Pamanuk','Carenang','Panenjoan','009','003','0','0',NULL,'','1539529912linmas.jpg','Sehat','M','40',39),(110,'2018-10-14 14:33:36','2018-10-14 14:33:36',NULL,'17','2009',NULL,'SAEPUDIN','Serang','10/14/2018','','081-9056-99466','Kawin','Islam','B','SMA/SMK','3604172006770001','Laki-Laki','Kp.Jahurs','Carenang','Panenjoan','005','003','0','0','','',NULL,'Sehat','M','32',39),(111,'2018-10-14 14:36:40','2018-11-21 08:23:33',NULL,'17','2009',NULL,'ARPALI','Serang','10/21/1989','','081-2182-02706','Kawin','Islam','B','SD','1871061809900006','Laki-Laki','Kp.Jahura','Carenang','Panenjoan','005','002','0','0',NULL,'',NULL,'Sehat','L','41',39),(112,'2018-10-15 00:16:33','2018-10-15 00:16:33',NULL,'17','2009',NULL,'MAMAT','Serang','06/10/1976','','085-2169-27458','Kawin','Islam','B','SD','3604171006760994','Laki-Laki','Kp.Panenjoan','Carenang','Panenjoan','002','001','0','0','','',NULL,'Aktif','M','42',39),(114,'2018-10-16 15:32:26','2018-10-18 22:59:34',NULL,'17','2009',NULL,'SARAM','Serang','10/03/1975','',NULL,'Kawin','Islam','B','SD','3604171003750003','Laki-Laki','Kp.Panenjoan','Carenang','Panenjoan','004','001','0','0',NULL,'',NULL,'Sehat','XL','42',39),(115,'2018-10-20 03:06:39','2018-10-22 02:04:12',NULL,'17','2009',NULL,'SARWAK','Serang','08/17/1975','','085-2115-08223','Kawin','Islam','B','SD','60470817750003','Laki-Laki','Kp Panenjoan','Carenang','Panenjoan','003','001','0','0',NULL,'',NULL,'Aktip','XL','40',39),(116,'2018-10-23 02:29:58','2018-11-30 02:36:54',NULL,'17','2003',NULL,'MU\'MIN','serang','03/03/1984','','087-8757-01433','Kawin','Islam','O','SMA/SMK','3604170303840002','Laki-Laki','Kp. Mandaya','Carenang','Mandaya','012','003','0','0',NULL,'','1543545414linmas.jpg','p','M','40',4),(117,'2018-10-23 02:33:23','2018-11-30 03:37:27',NULL,'17','2004',NULL,'SUPRI','Serang','02/24/1974','','087-8717-18390','Kawin','Islam','B','SMA/SMK','3604172402740001','Laki-Laki','Kp.Beberan','Carenang','Teras','005','003','0','0',NULL,'','1543549047linmas.jpg','P','M','39',4),(118,'2018-10-23 02:40:30','2018-11-30 03:30:23',NULL,'17','2001',NULL,'KHOLILI','Serang','03/17/1985','','0','Kawin','Islam',NULL,'SMP','3604171703850001','Laki-Laki','Kp.Bendung Kadikaran','Carenang','Carenang','008','003','0','0',NULL,'','1543548623linmas.jpg','p','L','42',4),(120,'2018-10-23 02:59:33','2018-11-30 02:34:58',NULL,'17','2007',NULL,'SAMUDI','Serang','10/04/1991','','083-8741-97073','Kawin','Islam',NULL,'SMA/SMK','3604170410910002','Laki-Laki','Kp.Kedung sentul','Carenang','Walikukun','012','003','0','0',NULL,'','1543545298linmas.jpg','p','L','43',4),(121,'2018-10-23 03:03:05','2018-11-30 03:33:27',NULL,'17','2002',NULL,'SUMINTA','Serang','07/13/1985','','087-8754-96864','Kawin','Islam',NULL,'SD','3604171307850003','Laki-Laki','Kp.Bayongbong Pintu','Carenang','Pamanuk','010','001','0','0',NULL,'','1543548807linmas.jpg','p','XL','42',4),(122,'2018-10-23 03:12:13','2018-11-30 02:44:37',NULL,'17','2010',NULL,'JOKO SUKANTO','Serang','05/27/1972','','087-7717-94755','Kawin','Islam',NULL,'SMP','3604172705720001','Laki-Laki','Kp. Bojong Lo','Carenang','Mekarsari','001','001','0','0',NULL,'','1543545877linmas.jpg','p','XL','41',4),(123,'2018-10-23 03:20:11','2018-10-23 09:13:39',NULL,'17','2006',NULL,'RASMANI','Serang','05/17/1965','','087-8833-00541','Kawin','Islam','O','SD','0','Laki-Laki','Kp.Toyek Rt.005/001 Desa Ragas Masigit Kecamatan Carenang','Carenang','Ragasmasigit','005','001','0','0',NULL,'',NULL,'p','XL','42',45),(124,'2018-10-23 03:26:39','2018-11-29 06:51:24',NULL,'25','2006',NULL,'SABIT SURJANI','Serang','03/02/1974','','085-2100-81944','Kawin','Islam',NULL,'SMP','3604250203740002','Laki-Laki','Kp. Gabus Sukamaju','Kopo','Gabus','014','006','0','0',NULL,'','1543474284linmas.jpg','p','L','39',4),(125,'2018-10-23 03:29:21','2018-11-29 03:58:49',NULL,'25','2003',NULL,'JOHAR SUPRIADI','Serang','06/01/1978','','0','Kawin','Islam','A','SMA/SMK','3604250106780006','Laki-Laki','Kp. Cukang Galih','Kopo','Nanggung','009','003','0','0',NULL,'','1543463929linmas.jpg','p','L','39',4),(126,'2018-10-23 03:31:40','2018-11-29 04:44:52',NULL,'25','2002',NULL,'SAMAN','Serang','04/02/1972','','085-3118-61945','Kawin','Islam','B','SMA/SMK','3604250204720003','Laki-Laki','Kp. Padaharan','Kopo','Garut','012','003','0','0',NULL,'','1543466692linmas.jpg','p','L','42',4),(127,'2018-10-23 03:33:26','2018-11-29 04:19:27',NULL,'25','2004',NULL,'PAISAL','Tangerang','01/04/1983','','0','Kawin','Islam',NULL,'SD','3604250102830005','Laki-Laki','Kp. Cidahu','Kopo','Cidahu','003','001','0','0',NULL,'','1543465167linmas.jpg','P','L','40',4),(128,'2018-10-23 03:37:17','2018-11-29 04:04:51',NULL,'25','2008',NULL,'HAERUDIN','Serang','01/10/1966','','085-2196-87551','Kawin','Islam',NULL,'SMA/SMK','3604251001660001','Laki-Laki','Kp. Ranca Sumur','Kopo','Rancasumur','011','003','0','0',NULL,'','1543464291linmas.jpg','p','L','40',4),(129,'2018-10-23 03:47:05','2018-11-29 04:00:57',NULL,'25','2005',NULL,'SUHERMAN','Serang','08/12/1976','','082-1121-06327','Kawin','Islam',NULL,'SMP','3604251208760001','Laki-Laki','Kp. Rangkas','Kopo','Nyompok','002','001','0','0',NULL,'','1543464057linmas.jpg','p','L','39',4),(130,'2018-10-23 03:49:56','2018-11-29 04:00:08',NULL,'25','2001',NULL,'ABDUL KHAM','Serang','08/08/1972','','085-2124-39931','Kawin','Islam','O','SMP','3604250808720002','Laki-Laki','Kp. Rancodo','Kopo','Kopo','002','004','0','0',NULL,'','1543464008linmas.jpg','p','XL','43',4),(131,'2018-10-23 03:53:08','2018-11-29 04:30:34',NULL,'25','2007',NULL,'RASA WIJAYA','Serang','08/18/1976','','083-8058-35805','Kawin','Islam',NULL,'SMP','3604251808760002','Laki-Laki','Kp. Carenang','Kopo','Carenang Udik','010','003','0','0',NULL,'','1543465834linmas.jpg','p','L','41',4),(132,'2018-10-23 03:55:08','2018-11-29 04:26:12',NULL,'25','2010',NULL,'KOTIB','Serang','04/09/1977','','087-7341-27411','Kawin','Islam','O','SD','3604250904770001','Laki-Laki','Kp. Kabayan','Kopo','Mekarbaru','006','002','0','0',NULL,'','1543465572linmas.jpg','p','L','40',4),(133,'2018-10-23 03:57:36','2018-11-30 04:26:07',NULL,'18','2004',NULL,'JUHRI','Serang','02/10/1979','','087-7743-47444','Kawin','Islam','B','SMA/SMK','3604181002790001','Laki-Laki','Kp. Pasir Sembung','Binuang','Gembor','015','005','0','0',NULL,'','1543551967linmas.jpg','p','M','39',4),(134,'2018-10-23 04:00:47','2018-12-06 07:43:35',NULL,'18','2002',NULL,'HENDRI','Tangerang','02/05/1979','','087-7206-88675','Kawin','Islam',NULL,'SD','3604180502790003','Laki-Laki','Kp. Jati Gede','Binuang','Cakung','012','004','0','0',NULL,'','1544082215linmas.jpg','p','XL','41',4),(135,'2018-10-23 04:04:22','2018-12-05 03:57:18',NULL,'18','2003',NULL,'RUSMAN','Serang','07/20/1984','','087-8893-59839','Kawin','Islam',NULL,'SMP','3604181001840003','Laki-Laki','Kp. Pendawa Lima','Binuang','Renged','005','002','0','0',NULL,'',NULL,'p','L','40',4),(136,'2018-10-23 04:07:35','2018-11-30 02:47:23',NULL,'18','2007',NULL,'ANEN SAPUTRA','Serang','01/03/1992','','083-1272-08323','Belum Kawin','Islam',NULL,'SMA/SMK','3604180301920003','Laki-Laki','Kp.Sambiayunan','Binuang','Lamaran','013','001','0','0',NULL,'','1543546043linmas.jpg','p','M','39',4),(139,'2018-10-23 04:11:22','2018-11-30 04:32:08',NULL,'18','2006',NULL,'JUNAEDI','Serang','07/08/1985','','081-6178-25540','Kawin','Islam','O','SMA/SMK','3604180708850001','Laki-Laki','Kp. Binuang Rangdu','Binuang','Sukamampir','006','002','0','0',NULL,'','1543552328linmas.jpg','p','XL','42',4),(140,'2018-10-23 04:14:40','2018-11-30 04:25:10',NULL,'18','2005',NULL,'SAEPUDIN','Serang','05/01/1966','','085-9468-15445','Kawin','Islam',NULL,'SMP','3604180105660001','Laki-Laki','Kp.Wawaluh','Binuang','Warakas','010','002','0','0',NULL,'','1543551889linmas.jpg','p','L','40',4),(141,'2018-10-23 04:18:19','2018-11-30 04:24:05',NULL,'18','2001',NULL,'EDI SUPRIYADI','Serang','08/28/1984','','085-7771-11325','Kawin','Islam',NULL,'SMA/SMK','3604182808840005','Laki-Laki','Kp. Pesantren','Binuang','Binuang','003','002','0','0',NULL,'','1543551845linmas.jpg','P','M','41',4),(142,'2018-10-23 04:21:40','2018-11-29 07:05:41',NULL,'11','2004',NULL,'MUJAHIDIN','Serang','05/05/1978','','085-2156-02240','Kawin','Islam',NULL,'SMP','3604110505780003','Laki-Laki','Kp. Dukuh','Kragilan','Dukuh','012','005','0','0',NULL,'','1543475141linmas.jpg','p','L','40',4),(143,'2018-10-23 04:24:37','2018-11-29 07:16:20',NULL,'11','2013',NULL,'AENUDIN','Serang','10/04/1974','','087-8095-91216','Kawin','Islam',NULL,'SMA/SMK','3604110410740006','Laki-Laki','Kp. Cisait Muncang','Kragilan','Cisait','003','001','0','0',NULL,'','1543475780linmas.jpg','p','M','40',4),(144,'2018-10-23 04:29:28','2018-11-29 07:14:18',NULL,'11','2007',NULL,'EDI RUKAN SAPUTRA','Serang','05/06/1970','','081-7171-96380','Kawin','Islam','O','SMP','3604110605700005','Laki-Laki','Kp.Baru','Kragilan','Sentul','017','004','0','0',NULL,'','1543475658linmas.jpg','p','L','40',4),(145,'2018-10-23 04:32:12','2018-11-29 07:07:50',NULL,'11','2001',NULL,'KASAN B ASWENDI','Serang','07/15/1979','','081-3804-07801','Kawin','Islam','O','SMP','3604111507790001','Laki-Laki','Kp. Baru Pasar','Kragilan','Kragilan','003','003','0','0',NULL,'','1543475270linmas.jpg','p','L','39',4),(146,'2018-10-23 04:35:15','2018-11-30 02:23:23',NULL,'11','2002',NULL,'ROBI','Serang','05/04/1987','','083-8138-40081','Kawin','Islam','A','SMA/SMK','3604110405870001','Laki-Laki','Kp. Serdang','Kragilan','Silebu','002','002','0','0',NULL,'','1543544603linmas.jpg','p','L','42',4),(147,'2018-10-23 04:37:50','2018-11-29 07:12:18',NULL,'11','2011',NULL,'JUADI','Serang','07/12/1982','','085-2158-22733','Kawin','Islam',NULL,'SMP','3604111207820007','Laki-Laki','Kp. Meracang','Kragilan','Kendayakan','013','004','0','0',NULL,'','1543475538linmas.jpg','p','L','41',4),(148,'2018-10-23 04:40:39','2018-11-29 07:10:19',NULL,'11','2005',NULL,'AAN SUGANDI','Serang','07/03/1975','','083-8131-84090','Kawin','Islam','AB','SMP','3604090307750001','Laki-Laki','Kp. Undar Andir','Kragilan','Undar Andir','003','001','0','0',NULL,'','1543475419linmas.jpg','p','L','40',4),(149,'2018-10-23 04:44:24','2018-11-29 07:19:39',NULL,'11','2014',NULL,'KISMULLAH','Serang','05/04/1983','','087-7716-38329','Kawin','Islam',NULL,'SMP','3604110405830004','Laki-Laki','Kp.Kramat Masjid','Kragilan','Kramatjati','010','001','0','0',NULL,'','1543475979linmas.jpg','p','XL','42',4),(150,'2018-10-23 04:47:27','2018-11-28 03:36:08',NULL,'14','2008',NULL,'MARJUKI','Serang','08/15/1966','','085-7776-02223','Kawin','Islam','B','SMP','3604172508660001','Laki-Laki','Kp. Pesisir','Tanara','Pedaleman','001','001','0','0',NULL,'','1543376168linmas.jpg','p','M','41',4),(151,'2018-10-23 04:50:46','2018-11-28 05:24:14',NULL,'14','2009',NULL,'TONI','Serang','12/19/1984','','081-9173-58673','Kawin','Islam',NULL,'SMP','3604141912840004','Laki-Laki','Kp. Nambo Desa','Tanara','Cibodas','002','001','0','0',NULL,'','1543382654linmas.jpg','p','M','40',4),(152,'2018-10-23 04:54:22','2018-11-28 03:31:49',NULL,'14','2007',NULL,'SIDIK','Serang','06/13/1971','','081-5194-13710','Kawin','Islam',NULL,'SD','3604141306710001','Laki-Laki','Kp. Bendung','Tanara','Bendung','002','001','0','0',NULL,'','1543375909linmas.jpg','p','L','42',4),(153,'2018-10-23 04:57:24','2018-11-28 05:21:46',NULL,'14','2005',NULL,'ALFIN','Serang','06/18/1999','','087-7750-97530','Belum Kawin','Islam','A','SMA/SMK','3604141806980001','Laki-Laki','Kp. Agusguntur','Tanara','Lempuyang','001','001','0','0',NULL,'','1543382506linmas.jpg','p','M','41',4),(154,'2018-10-23 04:59:36','2018-11-28 05:19:34',NULL,'14','2002',NULL,'SAHRONI','Serang','06/09/1986','','085-7779-27200','Kawin','Islam','B','SMA/SMK','3604140906860004','Laki-Laki','Kp. Laban','Tanara','Cerukcuk','005','002','0','0',NULL,'','1543382374linmas.jpg','p','L','39',4),(155,'2018-10-23 05:03:09','2018-11-28 03:30:49',NULL,'14','2001',NULL,'ABDUL RAJAK','Serang','06/13/1988','','083-8126-49909','Kawin','Islam',NULL,'SMP','3604141306880004','Laki-Laki','Kp.Kemuludan','Tanara','Tanara','001','002','0','0',NULL,'','1543375849linmas.jpg','p','XL','42',4),(156,'2018-10-23 05:06:40','2018-11-28 03:37:34',NULL,'14','2004',NULL,'SOFWAN','Serang','05/26/1987','','085-8855-51457','Kawin','Islam',NULL,'SMA/SMK','3604142605870001','Laki-Laki','Kp. Bojong','Tanara','Sukamanah','004','002','0','0',NULL,'','1543376254linmas.jpg','p','M','40',4),(157,'2018-10-23 05:09:20','2018-11-28 05:17:09',NULL,'14','2003',NULL,'SATIBI','Serang','02/03/1987','','081-5113-10350','Kawin','Islam','O','SMP','3604140203780001','Laki-Laki','Kp. Pegadungan','Tanara','Tenjoayu','001','001','0','0',NULL,'','1543382229linmas.jpg','p','XL','42',4),(158,'2018-10-23 07:34:31','2018-11-28 05:43:14',NULL,'13','2005',NULL,'MAHDI','Serang','02/28/1970','','087-8793-34302','Kawin','Islam','O','SMP','3604132802700001','Laki-Laki','Kp. Sidayu','Tirtayasa','Kebon','001','001','0','0',NULL,'','1543383794linmas.jpg','p','M','42',4),(159,'2018-10-23 07:37:32','2018-11-28 05:12:44',NULL,'13','2006',NULL,'RIMIN','Serang','08/28/1971','','081-9111-45677','Kawin','Islam',NULL,'SMA/SMK','3604132808710001','Laki-Laki','Kp. Legon','Tirtayasa','Sujung','006','002','0','0',NULL,'','1543381964linmas.jpg','p','L','40',4),(160,'2018-10-23 07:40:21','2018-11-28 04:23:38',NULL,'13','2014',NULL,'SUWARNA','Serang','02/11/1982','','085-8858-70223','Kawin','Islam',NULL,'SMA/SMK','36041431102820001','Laki-Laki','Kp. Bojong','Tirtayasa','Puser','003','002','0','0',NULL,'','1543379018linmas.jpg','p','L','40',4),(161,'2018-10-23 07:43:46','2018-11-28 04:20:56',NULL,'13','2002',NULL,'QUBAILA AMAL JADID','Serang','12/30/1992','','087-8746-33654','Kawin','Islam',NULL,'SMA/SMK','3604133012920001','Laki-Laki','Kp. Kemantenan','Tirtayasa','Samparwadi','006','002','0','0',NULL,'','1543378856linmas.jpg','p','L','40',4),(162,'2018-10-23 07:47:56','2018-12-06 07:46:09',NULL,'13','2003',NULL,'DEDI SUHENDI','Serang','01/01/1981','','085-8814-89271','Kawin','Islam',NULL,'SD','3604130101810001','Laki-Laki','Kp. Penyelagan','Tirtayasa','Kamanisan','001','001','0','0',NULL,'','1544082369linmas.jpg','p','L','40',4),(163,'2018-10-23 07:51:00','2018-11-28 05:08:46',NULL,'13','2008',NULL,'UBAIDILLAH','Serang','01/01/1977','','087-8097-32428','Kawin','Islam','AB','SMA/SMK','3604130101780006','Laki-Laki','Kp. Susukan','Tirtayasa','Susukan','005','002','0','0',NULL,'','1543381726linmas.jpg','p','XL','42',4),(165,'2018-10-23 09:20:39','2018-11-28 04:30:09',NULL,'13','2001',NULL,'SURYADI','Serang','07/18/1984','','085-7809-33323','Belum Kawin','Islam','O','SMA/SMK','3604131806850001','Laki-Laki','Kp. Tirtayasa','Tirtayasa','Tirtayasa','001','001','0','0',NULL,'','1543379409linmas.jpg','p','M','39',4),(166,'2018-10-24 03:15:51','2018-11-28 04:27:59',NULL,'13','2012',NULL,'JAZULI','Serang','11/24/1984','','085-6927-00069','Kawin','Islam',NULL,'SMA/SMK','3604122401840001','Laki-Laki','Kp. Alang Alang','Tirtayasa','Alang-alang','009','003','0','0',NULL,'','1543379279linmas.jpg','P','L','40',4),(168,'2018-10-24 06:48:34','2018-11-28 05:42:26',NULL,'13','2011',NULL,'MUHAMAD HILMAN SETIAWAN','Serang','11/25/1994','','085-7770-49691','Belum Kawin','Islam',NULL,'SMA/SMK','3604132511940001','Laki-Laki','Kp. Tengkurak','Tirtayasa','Tengkurak','003','001','0','0',NULL,'','1543383746linmas.jpg','P','L','42',4),(169,'2018-10-24 06:52:39','2018-11-28 05:09:34',NULL,'13','2010',NULL,'ALI ROCHMAN','Serang','02/23/1968','','087-8092-29267','Kawin','Islam','O','SD','3604132302680001','Laki-Laki','Kp. Laban','Tirtayasa','Laban','009','003','0','0',NULL,'','1543381774linmas.jpg','P','L','42',4),(170,'2018-10-24 07:03:29','2018-11-28 05:08:00',NULL,'13','2009',NULL,'MA\'MUN','Serang','01/02/1977','','087-8819-58123','Kawin','Islam','O','SMA/SMK','3604130201770002','Laki-Laki','Kp. Pulo Tunda','Tirtayasa','Wargasara','001','001','0','0',NULL,'','1543381680linmas.jpg','P','XL','42',4),(171,'2018-10-24 07:07:13','2018-12-06 07:51:57',NULL,'29','2001',NULL,'NANANG SEVY PURNAMA','Serang','05/30/1988','','087-8710-72272','Kawin','Islam',NULL,'SMA/SMK','3604293005880002','Laki-Laki','Kp. Padarincang Masjid','Padarincang','Padarincang','002','001','0','0',NULL,'','1544082717linmas.jpg','P','XL','40',4),(172,'2018-10-24 07:12:53','2018-12-10 17:30:12',NULL,'29','2010',NULL,'MUKLAS','Serang','06/19/1968','','081-2817-71705','Kawin','Islam',NULL,'SD','3604291906680001','Laki-Laki','Kp. Ranca Kalahang','Padarincang','Kelumpang','013','006','0','0',NULL,'','1544083039linmas.jpg','P','M','40',4),(173,'2018-10-24 07:17:26','2018-12-06 08:02:13',NULL,'29','2011',NULL,'JUMRI B SANIRAN','Serang','11/06/1970','','087-7712-61165','Kawin','Islam','O','SMP','3604290611700001','Laki-Laki','Kp. Cibodas','Padarincang','Kadubeureum','004','002','0','0',NULL,'','1544083333linmas.jpg','P','XL','40',4),(174,'2018-10-24 07:21:07','2018-12-06 08:27:00',NULL,'29','2008',NULL,'IKBAL MAULANA YUSUF','Serang','07/28/1997','','081-9384-21352','Belum Kawin','Islam',NULL,'SMA/SMK','3604292807970001','Laki-Laki','Kp. Cikoneng','Padarincang','Batu Kuwung','005','003','0','0',NULL,'','1544084820linmas.jpg','P','M','40',4),(175,'2018-10-24 07:24:51','2018-12-06 08:24:31',NULL,'29','2009',NULL,'ROHANI','Serang','08/05/1973','','087-7739-05926','Kawin','Islam','O','SMP','3604290508730002','Laki-Laki','Kp. Ranca Ranji','Padarincang','Kramatlaban','007','002','0','0',NULL,'','1544084671linmas.jpg','P','XL','42',4),(176,'2018-10-24 07:27:24','2018-12-06 08:22:02',NULL,'29','2014',NULL,'UDIN','Serang','01/01/1972','','083-8125-30396','Kawin','Islam','A','SMP','3604290101720005','Laki-Laki','Kp.Sabrang','Padarincang','Kadu Kempong','001','001','0','0',NULL,'','1544084522linmas.jpg',NULL,'XL','40',4),(177,'2018-10-24 07:30:56','2018-12-06 08:18:34',NULL,'29','2012',NULL,'APIPI','Serang','12/18/1980','','087-7730-94707','Belum Kawin','Islam',NULL,'SMP','3604291812800001','Laki-Laki','Kp.Cirahab Barat','Padarincang','Cipayung','010','003','0','0',NULL,'','1544084314linmas.jpg','P','L','40',4),(178,'2018-10-24 07:33:39','2018-12-06 08:15:56',NULL,'29','2013',NULL,'SA\'I','Serang','06/04/1954','','083-8723-07174','Kawin','Islam','A','SMP','3604290406540001','Laki-Laki','Kp.Curug Goong Permai','Padarincang','Curug Goong','011','004','0','0',NULL,'','1544084156linmas.jpg','P','L','41',4),(179,'2018-10-24 07:36:29','2018-12-06 08:13:09',NULL,'29','2006',NULL,'ASMARI','Serang','11/05/1959','','08-1765-85775','Kawin','Islam','AB','SD','3604290511590001','Laki-Laki','Kp. Cilongkrang','Padarincang','Ciomas','022','005','0','0',NULL,'','1544083989linmas.jpg','P','XL','41',4),(180,'2018-10-24 07:38:48','2018-12-06 08:10:01',NULL,'29','2002',NULL,'WARDI SUPRIADI','Bogor','06/15/1970','','087-8750-22012','Kawin','Islam',NULL,'SMP','3604291506700007','Laki-Laki','Kp. Muncang','Padarincang','Bugel','005','004','0','0',NULL,'','1544083801linmas.jpg','P','L','41',4),(181,'2018-10-24 07:42:26','2018-12-10 17:31:40',NULL,'29','2004',NULL,'AMIN','Serang','08/06/1964','','087-8715-84757','Kawin','Islam','A','SD','3604290608640001','Laki-Laki','Kp. Cipanas Masjid','Padarincang','Citasuk','007','002','0','0',NULL,'','1544083587linmas.jpg','P','L','41',4),(182,'2018-10-24 09:48:10','2018-11-27 07:34:05',NULL,'08','2007',NULL,'DANI','Serang','03/14/1971','','087-7206-86549','Kawin','Islam','AB','SMP','3604081403710001','Laki-Laki','Kp.Cikebel Rt.01/01 Desa Banyuwangi Kecamatan Pulo Ampel','Pulo Ampel','Banyuwangi','01','01','0','0',NULL,'','1543304045linmas.jpg','P','L','42',4),(183,'2018-10-24 09:51:32','2018-11-29 20:29:12',NULL,'08','2006',NULL,'FURSANUDIN','Serang','04/21/1962','','087-7737-99899','Kawin','Islam',NULL,'SMA/SMK','3604082104620001','Laki-Laki','Kp.Ragas Grenyang','Pulo Ampel','Argawana','015','008','0','0',NULL,'',NULL,'P','L','40',4),(184,'2018-10-24 09:54:43','2018-11-27 07:35:55',NULL,'08','2009',NULL,'FAISAL','Kasemen','08/11/1992','','085-9454-44972','Kawin','Islam',NULL,'SMA/SMK','3604081108920002','Laki-Laki','Kp.Peres Rt.01/01 Desa Pulo Panjang Kecamatan Pulo Ampel','Pulo Ampel','Pulo Panjang','01','01','0','0',NULL,'','1543304155linmas.jpg','P','L','42',4),(185,'2018-10-24 09:59:41','2018-11-27 08:57:50',NULL,'08','2001',NULL,'SUFRI','Serang','08/16/1976','','081-9111-82382','Belum Kawin','Islam',NULL,'SMA/SMK','3604081608760001','Laki-Laki','Kp.Gondara','Pulo Ampel','Pulo Ampel','002','001','0','0',NULL,'','1543309070linmas.jpg','P','L','42',4),(186,'2018-10-24 10:02:26','2018-11-27 07:58:37',NULL,'08','2008',NULL,'SANIMAN','Serang','12/11/1997','','082-3105-51795','Kawin','Islam','AB','SMP','0','Laki-Laki','Kp. Bani Mesir','Pulo Ampel','Margasari','002','006','0','0',NULL,'','1543305517linmas.jpg','P','XL','42',4),(187,'2018-10-24 10:06:07','2018-11-27 07:56:15',NULL,'08','2002',NULL,'SAFRULOH','Serang','09/17/1979','','081-9062-81417','Kawin','Islam',NULL,'SMA/SMK','3604081709790003','Laki-Laki','Kp.Sumuranja','Pulo Ampel','Sumuranja','005','003','0','0',NULL,'','1543305375linmas.jpg','P','XL','41',4),(188,'2018-10-24 10:09:18','2018-11-27 07:57:53',NULL,'08','2003',NULL,'KHAERUDIN KHAERUN','Serang','06/01/1964','','087-8713-35718','Kawin','Islam','O','SMA/SMK','3604080106640001','Laki-Laki','Kp.Cibaga','Pulo Ampel','Mangunreja','010','002','0','0',NULL,'','1543305473linmas.jpg','P','L','40',4),(189,'2018-10-24 10:12:48','2018-12-05 02:06:50',NULL,'32','2010',NULL,'ROHMATULLAH','Serang','08/08/1978','','087-7811-32262','Kawin','Islam','A','SD','3604320808780003','Laki-Laki','Kp. Barat','Mancak','Winong','005','001','0','0',NULL,'','1543975610linmas.jpg','P','L','42',4),(190,'2018-10-24 10:15:34','2018-12-03 04:37:52',NULL,'32','2003',NULL,'SARIP','Serang','12/07/1970','','087-8716-91496','Kawin','Islam','O','SD','3604320712700001','Laki-Laki','Kp. Jang Kilang','Mancak','Angsana','009','002','0','0',NULL,'','1543811872linmas.jpg','P','XXL','43',4),(191,'2018-10-24 10:19:48','2018-12-03 04:32:09',NULL,'32','2008',NULL,'RAIAN','Serang','03/07/1984','','087-7731-84377','Kawin','Islam',NULL,'SMA/SMK','3604320703840003','Laki-Laki','Kp.Sukajaya','Mancak','Pasirwaru','001','001','0','0',NULL,'','1543811529linmas.jpg','P','XL','42',4),(192,'2018-10-24 10:23:04','2018-12-03 05:06:13',NULL,'32','2007',NULL,'DADANG SUHADA','Sumedang','08/02/1974','','0','Kawin','Islam','O','SMA/SMK','0','Laki-Laki','Kp.Kadutukon Rt.01/02 Desa Sangiang Kecamatan Mancak','Mancak','Sangiang','01','02','0','0',NULL,'',NULL,'P','L','39',4),(193,'2018-10-24 10:25:21','2018-12-03 04:27:54',NULL,'32','2004',NULL,'MASERAN','Serang','01/18/1982','','087-8081-63000','Kawin','Islam','AB','Sarjana','3604321801820002','Laki-Laki','Kp.Belokang Mesjid','Mancak','Talaga','001','001','0','0',NULL,'','1543811274linmas.jpg','P','M','39',4),(194,'2018-10-24 10:29:29','2018-12-03 04:23:49',NULL,'32','2006',NULL,'SUNANI','Serang','11/30/1984','','087-7221-63181','Kawin','Islam',NULL,'SMP','3604323011840002','Laki-Laki','Kp.Gunung Pal','Mancak','Sigedong','006','003','0','0',NULL,'','1543811029linmas.jpg','P','XL','42',4),(195,'2018-10-24 10:32:46','2018-12-03 05:22:16',NULL,'32','2011',NULL,'ASEP TAUFIK ROHMAN','Serang','06/03/1992','','087-7841-23842','Belum Kawin','Islam',NULL,'SMP','3604321504940001','Laki-Laki','Kp.Langgerang','Mancak','Batukuda','004','001','0','0',NULL,'','1543814536linmas.jpg','P','M','40',4),(196,'2018-10-24 10:36:44','2018-12-03 04:30:13',NULL,'32','2009',NULL,'SAYUTI','Serang','04/01/1976','','087-8093-74166','Kawin','Islam',NULL,'SD','36043201044760003','Laki-Laki','Kp. Pariuk','Mancak','Waringin','003','001','0','0',NULL,'','1543811413linmas.jpg','P','XL','41',4),(197,'2018-10-24 10:39:41','2019-11-07 03:08:49',NULL,'32','2014',NULL,'KARIM','Serang','03/02/1970','','085-9473-08250','Kawin','Islam',NULL,'SD','3604320203700007','Laki-Laki','Kp.Taritih','Mancak','Bale Kencana','012','003','0','0',NULL,'','1543810605linmas.jpg','P','XL','43',4),(198,'2018-10-24 10:42:20','2018-12-03 04:13:25',NULL,'32','2005',NULL,'JAKA','Pandeglang','07/02/1968','','082-1139-00583','Kawin','Islam','O','SD','3604320207680001','Laki-Laki','Kp. Pasir Menteng','Mancak','Cikedung','007','003','0','0',NULL,'','1543810405linmas.jpg','P','XL','41',4),(199,'2018-10-24 10:45:23','2018-10-24 10:45:23',NULL,'32','2001',NULL,'HAERIN','Serang','07/05/1973','','0','Kawin','Islam','O','SD','0','Laki-Laki','Kp.Kresek Rt 014/002 Desa Mancak Kecamatan Mancak','Mancak','Mancak','014','002','0','0','','',NULL,'P','L','42',45),(200,'2018-10-24 10:47:46','2019-11-07 03:23:22',NULL,'32','2012',NULL,'AHMAD HANAFI','Serang','11/24/1975','','087-8542-18655','Kawin','Islam',NULL,'SMP','3604322411750001','Laki-Laki','Kp.Pasar','Mancak','Labuan','005','002','0','0',NULL,'','1543813108linmas.jpg','P','XL','42',4),(201,'2018-10-24 13:46:13','2018-12-03 04:09:10',NULL,'32','2013',NULL,'IWAN SUHANDI','Serang','03/21/1972','','087-7740-10447','Kawin','Islam','A','SMA/SMK','3604322006720002','Laki-Laki','Kp. Cipeucang','Mancak','Bale Kambang','001','001','0','0',NULL,'','1543810150linmas.jpg','P','L','40',4),(202,'2018-10-24 13:49:30','2018-12-03 05:11:36',NULL,'32','2002',NULL,'SODIK','Serang','06/07/1977','','0','Kawin','Islam','O','SMA/SMK','0','Laki-Laki','Kp.Kambangan Desa Ciwarna Kecamatan Mancak','Mancak','Ciwarna','0','0','0','0',NULL,'',NULL,'P','XL','42',4),(203,'2018-10-24 13:53:30','2018-12-03 05:18:22',NULL,'33','2006',NULL,'SARJAYA','Serang','02/10/1968','','0','Kawin','Islam','O','SMP','0','Laki-Laki','Kp.Cikondang','Gunung Sari','Luwuk','0','0','0','0',NULL,'',NULL,'P','L','42',4),(204,'2018-10-24 13:57:29','2018-12-03 03:57:45',NULL,'33','2004',NULL,'UCI ASMANINGRUM','Serang','05/23/1979','','087-7722-75968','Kawin','Islam','A','SMA/SMK','3604332305790001','Laki-Laki','Kp.Ciuni','Gunung Sari','Sukalaba','005','001','0','0',NULL,'','1543809465linmas.jpg','P','L','39',4),(205,'2018-10-24 14:01:11','2018-12-03 03:55:54',NULL,'33','2005',NULL,'MADSUPI','Serang','04/05/1978','','085-9200-35381','Kawin','Islam',NULL,'SMA/SMK','3604330504780004','Laki-Laki','Kp.Leuwi Seeng','Gunung Sari','Kadu Agung','008','003','0','0',NULL,'','1543809354linmas.jpg','P','M','41',4),(206,'2018-10-24 14:04:11','2018-12-03 03:53:33',NULL,'33','2003',NULL,'SAHID','Serang','12/05/1982','','087-8712-16414','Belum Kawin','Islam',NULL,'SMP','3604330512820003','Laki-Laki','Kp.Simenjangan','Gunung Sari','Tamiang','010','004','0','0',NULL,'','1543809213linmas.jpg','P','M','40',4),(207,'2018-10-24 14:07:56','2018-12-06 07:39:59',NULL,'30','2002',NULL,'SAIPUL ANWAR','Teluk Betung','10/04/1983','','081-3840-50630','Kawin','Islam',NULL,'SMP','1871070410830005','Laki-Laki','Kp. Jaha','Anyar','Sindang Mandi','002','001','0','0',NULL,'','1544081999linmas.jpg',NULL,'L','42',4),(208,'2018-10-24 14:11:03','2018-12-05 03:39:34',NULL,'30','2001',NULL,'HILMI','Serang','10/04/1974','','087-7819-02777','Kawin','Islam',NULL,'SMA/SMK','3604300410740001','Laki-Laki','Kp. Kepuh II','Anyar','Anyar','001','003','0','0',NULL,'','1543981174linmas.jpg','P','M','40',4),(209,'2018-10-24 14:16:16','2018-12-05 03:20:01',NULL,'30','2004',NULL,'MASHADI','Serang','09/06/1979','','085-2132-75642','Kawin','Islam',NULL,'SMP','3604300609790002','Laki-Laki','Kp. Siring','Anyar','Tanjung Manis','002','001','0','0',NULL,'','1543980001linmas.jpg','P','M','40',4),(210,'2018-10-24 14:20:46','2018-12-05 03:37:03',NULL,'30','2011',NULL,'JUMAEDI','Serang','02/05/1978','','087-8711-57446','Kawin','Islam',NULL,'SMA/SMK','3604300502780002','Laki-Laki','Kp. Cibaru','Anyar','Tambang Ayam','002','001','0','0',NULL,'','1543981023linmas.jpg','P','L','40',4),(211,'2018-10-24 14:23:44','2018-12-05 03:52:32',NULL,'30','2010',NULL,'SUKMADI','Serang','09/27/1969','','0878-0888-70292','Kawin','Islam',NULL,'SMP','3604302709690002','Laki-Laki','Kp.Kareo','Anyar','Sindangkarya','003','001','0','0',NULL,'','1543981892linmas.jpg','P','L','41',4),(212,'2018-10-24 14:26:32','2018-12-05 03:55:07',NULL,'30','2008',NULL,'DIDI AHMADI','Serang','05/09/1997','','082-3113-26551','Kawin','Islam',NULL,'SMP','3604300905970001','Laki-Laki','Kp.Kadu Odeng','Anyar','Banjarsari','001','003','0','0',NULL,'','1543982107linmas.jpg','P','XL','41',4),(213,'2018-10-24 14:29:48','2018-12-05 03:35:02',NULL,'30','2005','','TB HERMAWAN','Serang','08/12/1969','','087-7740-09620','Kawin','Islam',NULL,'SMP','3604301208690003','Laki-Laki','Kp.Cirahab','Anyar','Bandulu','003','004','0','0',NULL,'','1543980902linmas.jpg','P','M','41',4),(214,'2018-11-05 02:11:37','2018-11-05 02:15:24',NULL,'32','2009','2018.001','Test Linmas','Bandung','11/20/2018','','0861-2512-41212','Kawin','Islam','A','SD','01257127591251251','Laki-Laki','as','Mancak','Waringin','09','12','1','','','28',NULL,'we','S','23',3),(215,'2018-11-06 14:16:48','2018-11-07 04:33:54',NULL,'17','2009',NULL,'RIYADI','NGAWI','12/07/1967','',NULL,'Kawin','Islam','A','SD','3604171207670004','Laki-Laki','KP.MANDAYA','Carenang','Panenjoan','06','02','0','0',NULL,'','1541513808linmas.jpg','SEHAT','XL','41',39),(216,'2018-11-07 04:26:07','2018-11-23 08:09:45',NULL,'17','2009','','NASRULLAH','SERANG','02/15/1992','',NULL,'Kawin','Islam','A','SD','3604171502920002','Laki-Laki','KP.MANDAYA','Carenang','Panenjoan','006','002','0','0','','','1541564767linmas.jpg','SEHAT','XL','41',39),(217,'2018-11-23 02:53:37','2018-11-23 02:57:16',NULL,'35','2009','2018.003','Taufan Tritama','Bandung','12/29/2014','','0861-2512-41212','Kawin','Islam','A','SMA/SMK','01257127591251251','Laki-Laki','awds','Lebak Wangi','Tirem','12','12','1','','','28','1542941650linmas.jpg','makan','S','23',3),(218,'2018-11-28 03:51:48','2018-11-28 04:24:42',NULL,'13','2004',NULL,'MUSTAJAB','Serang','02/20/1996','','085-8884-44938','Belum Kawin','Islam',NULL,'SMA/SMK','3604132002960001','Laki-Laki','Kp. Pontang Legon','Tirtayasa','Pontang Legon','007','003','0','0',NULL,'','1543379082linmas.jpg','P','L','40',4),(219,'2018-11-28 04:36:38','2018-11-28 05:07:11',NULL,'13','2007',NULL,'MOCH PENDI','Serang','03/16/1971','','08-5614-75659','Kawin','Islam','B','SMA/SMK','3604131603710001','Laki-Laki','Kp. Lontar','Tirtayasa','Lontar','012','003','0','0',NULL,'','1543381631linmas.jpg',NULL,'XL','42',4),(220,'2018-11-29 04:23:39','2018-11-29 04:23:39',NULL,'25','2009',NULL,'M. TAJUDIN','Serang','07/11/1980','','081-2856-39807','Belum Kawin','Islam','AB','SMA/SMK','3604251107800001','Laki-Laki','Kp. Pasepatan','Kopo','Babakanjaya','003','002','0','0','','','1543465419linmas.jpg','P','L','40',4),(221,'2018-12-05 03:42:52','2018-12-05 03:42:52',NULL,'30','2009',NULL,'MASHUDI','Serang','10/15/1986','','085-9467-08214','Belum Kawin','Islam',NULL,'SMP','3604301510860001','Laki-Laki','Kp. Cikeuyeup','Anyar','Mekarsari','000','000','0','0','','','1543981372linmas.jpg',NULL,'XL','42',4),(222,'2018-12-18 05:57:22','2019-07-29 12:55:43',NULL,'27','2007',NULL,'MUHAMMAD ENDAN RAMDHAN','Serang','12/09/1999','','0838-8071-83332','Belum Kawin','Islam',NULL,'SMA/SMK','3604270912990004','Laki-Laki','Kp. Sirnagalih','Ciomas','Sukadana','006','002','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE II','L','41',4),(223,'2018-12-18 05:59:57','2019-07-29 12:56:13',NULL,'27','2007',NULL,'AKHMAD NAWAWI','Serang','09/18/1987','','085-9465-68776','Belum Kawin','Islam',NULL,'SMA/SMK','3604272401880064','Laki-Laki','Kp. Sirna Galih','Ciomas','Sukadana','006','002','0','0',NULL,'',NULL,'Celana : 32\r\nANGKATAN KE II','L','42',4),(224,'2018-12-18 06:02:10','2019-07-29 12:56:30',NULL,'16','2001',NULL,'ACENG SYURO','Palembang','07/07/1978','','083-8906-82140','Kawin','Islam',NULL,'SMP','3604160707780001','Laki-Laki','Kp. Ciwajik','Kibin','Kibin','004','002','0','0',NULL,'',NULL,'Celana : 31\r\nANGKATAN KE II','L','40',4),(225,'2018-12-18 06:04:03','2019-07-29 12:56:45',NULL,'09','2011',NULL,'DARUS SALAM','Serang','10/04/1995','','083-8781-67637','Belum Kawin','Islam',NULL,'SMP','3604090410950002','Laki-Laki','Kp. Pamong','Ciruas','Pamong','001','001','0','0',NULL,'',NULL,'Celana : 32\r\nANGKATAN KE II','M','40',4),(226,'2018-12-18 06:06:53','2019-07-29 12:57:02',NULL,'22','2005',NULL,'IWAN','Serang','01/01/1986','','087-8710-74557','Kawin','Islam',NULL,'SMA/SMK','3604220101860019','Laki-Laki','Kp. Nagerang','Baros','Sukacai','008','004','0','0',NULL,'',NULL,'Celana : 32\r\nANGKATAN KE II','L','40',4),(227,'2018-12-18 06:09:07','2019-07-29 12:57:22',NULL,'22','2001',NULL,'DADI ADHANI','Serang','05/10/1995','','083-8121-59919','Belum Kawin','Islam',NULL,'SMA/SMK','3604221005950001','Laki-Laki','Kp. Pulokiong','Baros','Baros','006','001','0','0',NULL,'',NULL,'Celana : 32\r\nANGKATAN KE II','M','40',4),(228,'2018-12-18 06:10:55','2019-07-29 12:57:38',NULL,'09','2011',NULL,'SAHIRI','Serang','10/01/1985','','087-7614-59738','Belum Kawin','Islam',NULL,'SMP','3604090110850001','Laki-Laki','Kp. Pamong','Ciruas','Pamong','001','001','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE II','M','41',4),(229,'2018-12-18 06:12:49','2019-07-29 12:58:01',NULL,'09','2011',NULL,'SUHERI','Serang','04/15/1994','','087-8712-12704','Belum Kawin','Islam',NULL,'SMA/SMK','3604091504940006','Laki-Laki','Kp. Pamong','Ciruas','Pamong','001','001','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE II','M','39',4),(230,'2018-12-18 06:14:17','2019-07-29 12:58:30',NULL,'24','2007',NULL,'NARSA','Serang','03/05/1978','',NULL,'Belum Kawin','Islam',NULL,'SMP','360420503780001','Laki-Laki','Kp. Beusi Lebak','Pamarayan','Sangiang','009','003','0','0',NULL,'',NULL,'Celana : 28\r\nANGKATAN KE II','L','40',4),(231,'2018-12-18 06:15:43','2019-07-29 12:58:45',NULL,'35','2002',NULL,'SADELI','Serang','02/02/1974','','087-8251-01991','Kawin','Islam',NULL,'SMP','3604110202740003','Laki-Laki','Kp. Tonjong Parhan','Lebak Wangi','Teras Bendung','002','003','0','0',NULL,'',NULL,'Celana : 32\r\nANGKATAN KE II','L','41',4),(232,'2018-12-18 06:17:07','2019-07-29 12:48:15',NULL,'35','2008',NULL,'MAKSUM','Serang','10/05/1982','','087-8853-74970','Kawin','Islam',NULL,'SMP','3604170510820003','Laki-Laki','Kp. Bolang','Lebak Wangi','Bolang','004','001','0','0',NULL,'',NULL,'Celana : 31\r\nANGKATAN KE II','L','41',4),(233,'2018-12-18 06:18:47','2019-07-29 12:48:30',NULL,'17','2006',NULL,'H. DANUBI','Serang','12/22/1970','','0858-1777-81059','Kawin','Islam',NULL,'SMP','3604172212700002','Laki-Laki','Kp. Bolang Pulo','Carenang','Ragasmasigit','016','005','0','0',NULL,'',NULL,'Celana : 33\r\nANGKATAN KE II','L','41',4),(234,'2018-12-18 06:21:32','2019-07-29 12:48:48',NULL,'23','2011',NULL,'HASAN BASRI','Serang','10/25/1988','','083-8130-55344','Kawin','Islam',NULL,'SMP','3604232510880001','Laki-Laki','Kp. Pabuaran Barat','Cikeusal','Sukaratu','003','005','0','0',NULL,'',NULL,'Celana : 31\r\nANGKATAN KE II','L','40',4),(235,'2018-12-18 06:24:42','2019-07-29 12:49:07',NULL,'16','2007',NULL,'ADE ASMUNANDAR','Carenang','05/27/1974','','082-1103-15548','Kawin','Islam',NULL,'SMA/SMK','3604172705740001','Laki-Laki','Kp. Laes Ulon','Kibin','Sukamaju','006','002','0','0',NULL,'',NULL,'Celana : 32\r\nANGKATAN KE II','M','38',4),(236,'2018-12-18 06:28:01','2019-07-29 12:50:17',NULL,'27','2004',NULL,'SUPRIADI','Serang','02/23/1994','','083-8131-51816','Belum Kawin','Islam',NULL,'SMA/SMK','3604272302940002','Laki-Laki','Kp. CIlongkrang Pusaka','Ciomas','Pondok Kaharu','008','004','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE II','M','42',4),(237,'2018-12-18 06:31:05','2019-07-29 12:50:34',NULL,'31','2005',NULL,'KUSEN','Serang','04/10/1966','','087-8091-57396','Kawin','Islam',NULL,'SD','3604311004660001','Laki-Laki','Kp. Tawing Susukan','Cinangka','Karang Suraga','002','001','0','0',NULL,'',NULL,'Celana : 28\r\nANGKATAN KE II','L','41',4),(238,'2018-12-18 06:37:39','2019-07-29 12:50:50',NULL,'31','2012',NULL,'RASJAYA','Serang','07/15/1963','',NULL,'Kawin','Islam',NULL,'SD','3604311002820002','Laki-Laki','Kp. Puri','Cinangka','Bantar Wangi','003','002','0','0',NULL,'',NULL,'Celana : 30\r\nANGKATAN KE II','L','39',4),(239,'2018-12-18 06:39:23','2019-07-29 12:51:10',NULL,'05','2003',NULL,'NAIM','Serang','10/10/1987','','08-9986-16831','Belum Kawin','Islam','A','SMA/SMK','36040510108770007','Laki-Laki','Kp. Kemertan','Kramatwatu','Pejaten','001','003','0','0',NULL,'',NULL,'Celana : 35\r\nANGKATAN KE II','L','39',4),(240,'2018-12-18 06:40:51','2019-07-29 12:51:34',NULL,'26','2008',NULL,'PIKIH','Serang','11/25/1995','','082-1122-31446','Belum Kawin','Islam','AB','SMA/SMK','3604262511950004','Laki-Laki','Kp. Kareo Dukuh','Jawilan','Kareo','001','001','0','0',NULL,'',NULL,'Celana : 38\r\nANGKATAN KE II','XL','43',4),(241,'2018-12-18 06:42:28','2019-07-29 12:52:10',NULL,'26','2005',NULL,'CECEP','Serang','05/08/1976','','082-3129-18295','Kawin','Islam',NULL,'SMP','3604260805760001','Laki-Laki','Kp. Kalapaciung','Jawilan','Pasirbuyut','002','002','0','0',NULL,'',NULL,'Celana : 33\r\nANGKATAN KE II','XL','42',4),(242,'2018-12-18 06:44:57','2019-07-29 12:55:01',NULL,'26','2003',NULL,'SAPTA PERTALA','Serang','08/17/1970','','085-3115-07636','Kawin','Islam',NULL,'SMA/SMK','3604261708700001','Laki-Laki','Kp. Bendung Sari','Jawilan','Cemplang','019','004','0','0',NULL,'',NULL,'Celana : 35\r\nANGKATAN KE II','XXL','42',4),(243,'2018-12-18 06:53:03','2019-07-29 12:54:42',NULL,'24','2008',NULL,'UNATIB','Serang','10/19/1972','','089-6812-20871','Kawin','Islam',NULL,'SMP','3604241910720001','Laki-Laki','Kp. Kampung Baru','Pamarayan','Kampung Baru','004','002','0','0',NULL,'',NULL,'Celana : 30\r\nANGKATAN KE II','XL','40',4),(244,'2018-12-18 06:55:16','2019-07-29 12:54:16',NULL,'31','2014',NULL,'SUKMANA','Serang','03/02/1977','','0-8780-92105','Kawin','Islam',NULL,'SD','3604310203770011','Laki-Laki','Kp. Pasir Tangkil','Cinangka','Baros Jaya','002','004','0','0',NULL,'',NULL,'Celana : 28\r\nANGKATAN KE II','L','40',4),(245,'2018-12-18 06:58:13','2019-07-29 12:54:01',NULL,'34','2005',NULL,'SARYANI','Serang','07/06/1971','','085-9212-91657','Kawin','Islam',NULL,'SMP','3604340607710002','Laki-Laki','Kp. Malabar','Bandung','Malabar','001','001','0','0',NULL,'',NULL,'Celana : 27\r\nANGKATAN KE II','M','41',4),(246,'2018-12-18 07:05:08','2019-07-29 12:53:45',NULL,'06','2001',NULL,'MASRI','Serang','04/16/1973','','081-9966-55652','Kawin','Islam','O','SMP','3604061604730001','Laki-Laki','Kp. Jalumprit','Waringinkurung','Waringinkurung','003','001','0','0',NULL,'',NULL,'Celana : 36\r\nANGKATAN KE II','XXL','40',4),(247,'2018-12-18 07:06:55','2019-07-29 12:53:27',NULL,'23','2007',NULL,'SARDAGA','Serang','11/10/1969','',NULL,'Kawin','Islam',NULL,'SMP','3604231011690002','Laki-Laki','Kp. Pabuaran','Cikeusal','Cimaung','005','003','0','0',NULL,'',NULL,'Celana : 31\r\nANGKATAN KE II','XL','42',4),(248,'2018-12-18 07:12:52','2019-07-29 12:53:04',NULL,'22','2003',NULL,'EDI SURYADI','Serang','07/27/1988','','087-8082-47350','Belum Kawin','Islam',NULL,'SMA/SMK','3604222707880005','Laki-Laki','Kp. Cisolong','Baros','Panyirapan','001','001','0','0',NULL,'',NULL,'Celana : 30\r\nANGKATAN KE II','M','39',4),(249,'2018-12-18 07:37:31','2019-07-29 12:52:45',NULL,'06','2007',NULL,'MASDAM','Serang','02/13/1975','','085-7165-86353','Duda','Islam','A','SMP','3604061302750003','Laki-Laki','Kp. Kasubuhan','Waringinkurung','Sukabares','006','002','0','0',NULL,'',NULL,'Celana : 31\r\nANGKATAN KE II','L','40',4),(250,'2018-12-18 07:40:35','2019-07-29 12:52:30',NULL,'06','2008',NULL,'SAEFULLAH','Serang','06/15/2019','','085-2166-34979','Kawin','Islam',NULL,'SMA/SMK','3604061506880003','Laki-Laki','Kp. Pasir Dangdor','Waringinkurung','Sambilawang','007','002','0','0',NULL,'',NULL,'Celana : 28\r\nANGKATAN KE II','L','40',4),(251,'2018-12-18 08:18:36','2019-07-29 12:50:01',NULL,'28','2015',NULL,'MAMAN SULAEMAN','Serang','09/08/1996','','083-8131-52496','Belum Kawin','Islam',NULL,'SMA/SMK','3604280809960256','Laki-Laki','Kp. Tanjung Kulon','Pabuaran','Talaga Warna','001','001','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE II','M','41',4),(252,'2018-12-18 08:20:08','2019-07-29 12:49:43',NULL,'28','2007',NULL,'A. FAZRY MACHMUD, S.Sos','Serang','11/04/1986','','081-3101-43734','Kawin','Islam',NULL,'SMA/SMK','3604280411860650','Laki-Laki','Kp. Kadu Kacapi','Pabuaran','Tanjungsari','001','001','0','0',NULL,'',NULL,'Celana : 31\r\nANGKATAN KE II','M','40',4),(253,'2018-12-18 08:22:19','2019-07-29 12:49:26',NULL,'28','2006',NULL,'DICKY PURNAMA RAHAYU PUTRA','Serang','06/24/1990','','083-8134-80845','Belum Kawin','Islam',NULL,'SMA/SMK','3604282406900001','Laki-Laki','Kp. Cisitu Barat','Pabuaran','Kadubeureum','015','003','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE II','M','41',4),(254,'2018-12-18 08:24:02','2019-07-29 12:47:59',NULL,'07','2001',NULL,'HABUDIN','Serang','04/27/1963','',NULL,'Kawin','Islam',NULL,'SD','3604072704630001','Laki-Laki','Kp. Ciranggon','Bojonegara','Bojonegara','001','004','0','0',NULL,'',NULL,'Celana : 31\r\nANGKATAN KE II','L','42',4),(255,'2018-12-18 08:25:50','2019-07-29 12:47:41',NULL,'19','2012',NULL,'AHMAD SOBARI','Serang','06/09/1981','','082-3103-59257','Kawin','Islam',NULL,'SD','3604190906810002','Laki-Laki','Kp. Bojong Nawilis','Petir','Mekar Baru','001','001','0','0',NULL,'',NULL,'Celana : 28\r\nANGKATAN KE II','M','39',4),(256,'2018-12-18 08:27:30','2019-07-29 12:47:15',NULL,'07','2001',NULL,'HAMDAN','Serang','12/18/2018','','087-7740-28911','Kawin','Islam',NULL,'SMA/SMK','3604071707720003','Laki-Laki','Kp.Kejangkungan','Bojonegara','Bojonegara','001','001','0','0',NULL,'',NULL,'Celana : 36\r\nANGKATAN KE II','XL','41',4),(257,'2018-12-18 08:28:44','2019-07-29 12:44:38',NULL,'07','2001',NULL,'ZAENUDIN','Serang','02/09/1969','',NULL,'Kawin','Islam',NULL,'SMA/SMK','3604070902690001','Laki-Laki','Kp. Gunung Santri','Bojonegara','Bojonegara','001','006','0','0',NULL,'',NULL,'Celana : 32\r\nANGKATAN KE II','L','41',4),(258,'2018-12-18 08:43:31','2019-07-29 12:45:13',NULL,'16','2003',NULL,'JUWENI','Serang','01/02/1985','','085-2152-00167','Belum Kawin','Islam',NULL,'SMA/SMK','3604160301850001','Laki-Laki','Kp. Cijeruk','Kibin','Cijeruk','001','001','0','0',NULL,'',NULL,'Celana : 31\r\nANGKATAN KE II','L','41',4),(259,'2018-12-19 11:40:24','2019-07-29 12:46:38',NULL,'16','2008',NULL,'RAMIN','Serang','04/07/1980','','081-3148-24793','Kawin','Islam',NULL,'SMP','3604160704800001','Laki-Laki','Kp. Kadingding','Kibin','Tambak','008','002','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE II','L','39',4),(260,'2018-12-19 11:42:01','2019-07-29 12:46:54',NULL,'20','2003',NULL,'A. RASMAN SAPUTRA','Jakarta','07/25/1958','',NULL,'Duda','Islam','O','SD','3604202507580001','Laki-Laki','Kp. Pabuaran','Tunjung Teja','Panunggulan','014','003','0','0',NULL,'',NULL,'Celana : 31\r\nANGKATAN KE II','L','41',4),(261,'2018-12-19 11:43:22','2019-07-29 12:46:07',NULL,'20','2003',NULL,'BASRI','Serang','07/01/1972','',NULL,'Kawin','Islam',NULL,'SD','3604200107720019','Laki-Laki','Kp. Panggulingan','Tunjung Teja','Panunggulan','002','001','0','0',NULL,'',NULL,'Celana : 30\r\nANGKATAN KE II','L','42',4),(262,'2018-12-19 11:44:55','2019-07-29 12:45:50',NULL,'12','2009',NULL,'RASIMUN','Serang','04/14/1986','','085-7716-31815','Kawin','Islam',NULL,'SMP','3604121404860001','Laki-Laki','Kp. Domas','Pontang','Domas','012','003','0','0',NULL,'',NULL,'Celana : 30\r\nANGKATAN KE II','L','42',4),(263,'2018-12-19 11:46:01','2019-07-29 12:45:30',NULL,'12','2001',NULL,'IRFAN ZIDNI','Serang','01/17/1995','','085-9454-79009','Belum Kawin','Islam',NULL,'SMP','3604121701950001','Laki-Laki','Kp. Pontang','Pontang','Pontang','011','004','0','0',NULL,'',NULL,'Celana : 32\r\nANGKATAN KE II','L','43',4),(264,'2018-12-19 11:47:23','2019-07-29 12:44:20',NULL,'12','2010',NULL,'HALIMI','Serang','11/02/1973','','081-5748-30526','Kawin','Islam',NULL,'SMA/SMK','3604120211730003','Laki-Laki','Kp. Begog','Pontang','Singarajan','006','002','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE II','L','39',4),(265,'2018-12-19 11:48:22','2019-07-29 12:44:02',NULL,'15','2004',NULL,'AHMAD YANI','Serang','02/05/1976','','085-2167-56422','Kawin','Islam',NULL,'SMA/SMK','3604150502760002','Laki-Laki','Kp. Kramat','Cikande','Parigi','001','005','0','0',NULL,'',NULL,'Celana : 36\r\nANGKATAN KE II','XL','42',4),(266,'2018-12-19 11:49:23','2019-07-29 12:43:39',NULL,'16','2002',NULL,'NAAN','Serang','05/10/1972','','087-8754-16884','Kawin','Islam',NULL,'SMA/SMK','3604161005720002','Laki-Laki','Kp. Pasir','Kibin','Ketos','002','001','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE II','L','42',4),(267,'2018-12-19 11:58:06','2019-07-29 12:43:16',NULL,'16','2009',NULL,'PAYUMI SUGIARJO','Serang','08/15/1979','','081-3807-46415','Kawin','Islam','AB','SMA/SMK','3604161508790002','Laki-Laki','Kp. Ocit','Kibin','Ciagel','004','002','0','0',NULL,'',NULL,'Celana : 30\r\nANGKATAN KE II','M','39',4),(268,'2018-12-19 13:12:52','2019-07-29 12:42:08',NULL,'05','2014',NULL,'SYAFEI','Serang','06/10/1975','','087-7742-58033','Kawin','Islam',NULL,'SMP','3604051006750007','Laki-Laki','Kp. Kebarosan','Kramatwatu','Teluk Terate','005','003','0','0',NULL,'',NULL,'Celana : 32\r\nANGKATAN KE II','L','40',4),(269,'2018-12-19 13:14:30','2019-07-29 12:42:52',NULL,'15','2006',NULL,'NURHADI','Serang','04/03/1982','','087-8844-31114','Kawin','Islam',NULL,'SMA/SMK','3604150403820001','Laki-Laki','Kp. Kamurang','Cikande','Bakung','006','001','0','0',NULL,'',NULL,'Celana : 28\r\nANGKATAN KE II','M','38',4),(270,'2018-12-19 13:15:39','2019-07-29 12:40:41',NULL,'34','2007',NULL,'JAELANI','Serang','01/05/1977','','083-8734-69197','Kawin','Islam',NULL,'SMP','360415051770005','Laki-Laki','Kp. Cilegon','Bandung','Babakan','002','001','0','0',NULL,'',NULL,'Celana : 33\r\nANGKATAN KE II','XL','40',4),(271,'2018-12-19 13:17:16','2019-07-29 12:39:58',NULL,'34','2006',NULL,'MULKANUDIN','Pamarayan','05/07/1982','','085-9595-21644','Kawin','Islam',NULL,'SMA/SMK','3604340703620004','Laki-Laki','Kp. Sukaraja','Bandung','Blokang','013','003','0','0',NULL,'',NULL,'Celana : 29 \r\nANGKATAN KE II','L','40',4),(272,'2019-07-28 14:27:41','2019-07-28 14:35:24',NULL,'28','2001',NULL,'MIRANTI HERMAWATI','Serang','01/05/1995','','087-7730-05477','Belum Kawin','Islam',NULL,'SMA/SMK','3604284501950451','Perempuan','Kp. Nangka Bongkok','Pabuaran','Pabuaran','001','001','0','0',NULL,'',NULL,'Celana : 30\r\nANGKATAN KE III','L','40',49),(273,'2019-07-28 14:33:54','2019-07-29 13:11:16',NULL,'28','2006',NULL,'AYU LESTARI','Serang','09/07/2000','','083-8972-99552','Belum Kawin','Islam',NULL,'SMA/SMK','3604284709000046','Perempuan','Kp. Cadasngerong','Pabuaran','Kadubeureum','019','004','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE III','M','39',4),(274,'2019-07-28 14:38:09','2019-07-28 14:38:09',NULL,'23','2008',NULL,'MITA TALIA','Serang','07/25/1998','','085-2157-51971','Belum Kawin','Islam',NULL,'SMA/SMK','3604236507980002','Perempuan','Kp. Katulisan','Cikeusal','Panyabrangan','001','001','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','M','39',49),(275,'2019-07-28 14:40:48','2019-07-28 14:40:48',NULL,'22','2003',NULL,'MUHIYARATI','Jakarta','03/23/1988','','087-8795-35200','Kawin','Islam',NULL,'Sarjana','3604226303880001','Perempuan','Kp. Warung','Baros','Panyirapan','022','005','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','M','40',49),(276,'2019-07-28 14:42:59','2019-07-28 14:42:59',NULL,'23','2008',NULL,'VENI SEPTIANI','Serang','09/16/2001','','083-8069-60255','Belum Kawin','Islam',NULL,'SMA/SMK','3604235609010002','Perempuan','Kp. Batu Kurung','Cikeusal','Panyabrangan','011','004','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','M','38',49),(277,'2019-07-28 14:46:35','2019-07-28 14:46:35',NULL,'23','2010',NULL,'AINA','Serang','02/24/2000','','083-8909-85038','Belum Kawin','Islam',NULL,'SMA/SMK','3604236402000002','Perempuan','Kp. Pasir Gadung','Cikeusal','Bantar Panjang','005','002','0','0','','',NULL,'Celana : 30\r\nANGKATAN KE III','XL','42',49),(278,'2019-07-28 14:48:32','2019-07-28 14:48:32',NULL,'23','2010',NULL,'AINI','Serang','02/24/2000','','083-8909-85038','Belum Kawin','Islam',NULL,'SMA/SMK','3604236402000001','Perempuan','Kp. Pasir Gadung','Cikeusal','Bantar Panjang','005','002','0','0','','',NULL,'Celana : 30\r\nANGKATAN KE III','XL','42',49),(279,'2019-07-28 14:52:24','2019-07-28 14:52:24',NULL,'24','2001',NULL,'DENI NURUL HAMZAH','Serang','03/17/1995','','085-6946-96242','Belum Kawin','Islam',NULL,'SMA/SMK','3604241703950004','Laki-Laki','Kp. Pamarayan','Pamarayan','Pamarayan','002','001','0','0','','',NULL,'Celana : 30\r\nANGKATAN KE III','XL','42',49),(280,'2019-07-28 14:54:59','2019-07-28 14:54:59',NULL,'22','2001',NULL,'SULAIMAN DANIEL','Serang','06/10/1997','','087-8708-59777','Kawin','Islam',NULL,'SMA/SMK','3604291006970005','Laki-Laki','Kp. Pulo Kiong','Baros','Baros','006','001','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','M','41',49),(281,'2019-07-28 14:57:18','2019-07-28 14:57:18',NULL,'23','2002',NULL,'YOGI TRI CAHYADI','Serang','01/02/1994','','085-7701-72458','Belum Kawin','Islam',NULL,'SMA/SMK','3604230201940001','Laki-Laki','Kp. Pasir Manggu','Cikeusal','Dahu','002','001','0','0','','',NULL,'Celana : 32\r\nANGKATAN KE III','L','41',49),(282,'2019-07-28 14:58:55','2019-07-28 14:58:55',NULL,'23','2008',NULL,'SIDIK','Serang','06/05/1998','','082-2489-51104','Belum Kawin','Islam',NULL,'SMA/SMK','3604230101000010','Laki-Laki','Kp. Ranca Leutik','Cikeusal','Panyabrangan','017','004','0','0','','',NULL,'Celana : 30\r\nANGKATAN KE III','L','41',49),(283,'2019-07-28 15:00:54','2019-07-28 15:00:54',NULL,'19','2012',NULL,'INAWAN','Serang','03/25/1999','','087-7754-73306','Belum Kawin','Islam',NULL,'SMA/SMK','3604192503990003','Laki-Laki','Kp. Lembur Jati','Petir','Mekar Baru','007','003','0','0','','',NULL,'Celana : 30\r\nANGKATAN KE III','L','41',49),(284,'2019-07-28 15:02:28','2019-07-28 15:02:28',NULL,'19','2003',NULL,'DODI ROSADI','Serang','10/05/1998','','083-8790-01025','Belum Kawin','Islam',NULL,'SMA/SMK','3604190510980004','Laki-Laki','Kp. Katapura','Petir','Tambiluk','007','003','0','0','','',NULL,'Celana : 30\r\nANGKATAN KE III','L','41',49),(285,'2019-07-28 15:03:41','2019-07-28 15:03:41',NULL,'23','2002',NULL,'AGUS SURYANA','Serang','08/27/2000','','083-8069-64799','Belum Kawin','Islam',NULL,'SMA/SMK','3604232708000008','Laki-Laki','Kp. Pasir Manggu','Cikeusal','Dahu','004','002','0','0','','',NULL,'Celana : 30\r\nANGKATAN KE III','L','40',49),(286,'2019-07-28 15:05:20','2019-07-28 15:05:20',NULL,'23','2008',NULL,'GILANG AGUNG PRAKOSO','Serang','08/09/2002','','085-7196-52044','Belum Kawin','Islam',NULL,'SMA/SMK','3604230908020003','Laki-Laki','Kp. Batu Kurung','Cikeusal','Panyabrangan','011','004','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','M','39',49),(287,'2019-07-28 15:06:44','2019-07-28 15:06:44',NULL,'20','2007',NULL,'HAERUL RIFAI','Serang','04/08/1999','','083-8900-32472','Belum Kawin','Islam',NULL,'SMA/SMK','3604200804990005','Laki-Laki','Kp. Pabuaran','Tunjung Teja','Bojong Catang','001','001','0','0','','',NULL,'Celana : 33\r\nANGKATAN KE III','XL','44',49),(288,'2019-07-28 15:07:58','2019-07-28 15:08:41',NULL,'20','2007',NULL,'ARNANDI','Serang','05/26/1998','','085-2814-69765','Belum Kawin','Islam',NULL,'SMA/SMK','3604202605980002','Laki-Laki','Kp. Catang Masjid','Tunjung Teja','Bojong Catang','011','003','0','0',NULL,'',NULL,'Celana : 31\r\nANGKATAN KE III','L','42',49),(289,'2019-07-28 15:10:20','2019-07-28 15:10:20',NULL,'20','2007',NULL,'NUGRAHA ADRIAN','Serang','08/03/2000','','085-2173-10906','Belum Kawin','Islam',NULL,'SMA/SMK','3604200308000001','Laki-Laki','Kp. Catang Pertelon','Tunjung Teja','Bojong Catang','013','003','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','M','39',49),(290,'2019-07-28 15:11:43','2019-07-28 15:11:43',NULL,'20','2007',NULL,'MUH ARIEF HIDAYAT','Serang','08/07/2001','','081-3143-16196','Belum Kawin','Islam',NULL,'SMA/SMK','3604200708010002','Laki-Laki','Kp. Masjid','Tunjung Teja','Bojong Catang','011','003','0','0','','',NULL,'Celana : 32\r\nANGKATAN KE III','L','43',49),(291,'2019-07-28 15:13:11','2019-07-28 15:13:11',NULL,'20','2007',NULL,'ARPANI','Serang','06/15/2000','','083-8138-22024','Belum Kawin','Islam',NULL,'SMA/SMK','3604201506000003','Laki-Laki','Kp. Catang Masjid','Tunjung Teja','Bojong Catang','011','003','0','0','','',NULL,'Celana : 32\r\nANGKATAN KE III','XL','43',49),(292,'2019-07-28 15:14:50','2019-07-28 15:14:50',NULL,'22','2003',NULL,'MUHAMAD ARIS','Serang','04/06/1996','','085-2153-52996','Belum Kawin','Islam',NULL,'SMA/SMK','3604221001940001','Laki-Laki','Kp. Cipari','Baros','Panyirapan','010','004','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','L','42',49),(293,'2019-07-28 15:16:07','2019-07-28 15:16:07',NULL,'19','2007',NULL,'AHMAD GULYUBI','Serang','04/01/1994','','083-8128-91431','Belum Kawin','Islam',NULL,'SMA/SMK','3604190104940002','Laki-Laki','Kp. Kadumanjangan','Petir','Nagarapadang','012','003','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','M','40',49),(294,'2019-07-28 15:17:16','2019-07-28 15:17:16',NULL,'28','2006',NULL,'MUHAMAD WAHYUDI','Serang','03/05/1999','','083-1272-36238','Belum Kawin','Islam',NULL,'SMA/SMK','3604280503990002','Laki-Laki','Kp. Cisitu','Pabuaran','Kadubeureum','011','004','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','M','40',49),(295,'2019-07-28 15:19:17','2019-07-28 15:19:17',NULL,'22','2009',NULL,'SONHAJI','Serang','12/20/1995','','083-8121-51106','Belum Kawin','Islam',NULL,'SMA/SMK','3604222012950001','Laki-Laki','Kp. Kalobarang','Baros','Sukamanah','003','004','0','0','','',NULL,'Celana : 31\r\nANGKATAN KE III','XL','42',49),(296,'2019-07-28 15:31:20','2019-07-28 15:31:20',NULL,'24','2007',NULL,'MUHAMMAD HELMI','Serang','07/01/1997','','085-8933-36024','Belum Kawin','Islam',NULL,'SMA/SMK','3604240107970040','Laki-Laki','Kp. Barani','Pamarayan','Sangiang','011','004','0','0','','',NULL,'Celana : 35\r\nANGKATAN KE III','L','42',49),(297,'2019-07-28 15:32:35','2019-07-28 15:32:35',NULL,'24','2007',NULL,'MULYA HAKIKI','Serang','01/05/2000','','085-7767-44770','Belum Kawin','Islam',NULL,'SMA/SMK','3604240501000005','Laki-Laki','Kp. Barani','Pamarayan','Sangiang','011','004','0','0','','',NULL,'Celana : 30\r\nANGKATAN KE III','M','42',49),(298,'2019-07-28 15:36:22','2019-07-28 15:36:22',NULL,'23','2013',NULL,'MARDIANSYAH','Serang','03/05/1996','','083-8127-22482','Belum Kawin','Islam',NULL,'SMA/SMK','3604230503960001','Laki-Laki','Kp. Cikasap','Cikeusal','Sukarame','004','002','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','M','41',49),(299,'2019-07-28 15:37:56','2019-07-28 15:37:56',NULL,'23','0',NULL,'AMHAD BISRI','Serang','10/10/1997','','081-4133-24470','Belum Kawin','Islam',NULL,'SMA/SMK','3604230612970001','Laki-Laki','Kp. Pasir Kakapa','Cikeusal','','016','003','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','L','41',49),(300,'2019-07-28 15:39:12','2019-07-28 15:39:12',NULL,'23','2002',NULL,'RIFALDI GUNAWAN','Serang','11/05/2001','','083-8131-61595','Belum Kawin','Islam',NULL,'SMA/SMK','3604230511010001','Laki-Laki','Kp. Pasir Manggu','Cikeusal','Dahu','003','001','0','0','','',NULL,'Celana : 31\r\nANGKATAN KE III','XL','42',49),(301,'2019-07-28 15:44:59','2019-07-28 15:44:59',NULL,'13','2005',NULL,'TAUFIK HIDAYAT','Serang','09/18/2000','','085-7788-08438','Belum Kawin','Islam',NULL,'SMA/SMK','3604131809000001','Laki-Laki','Kp. Sidayu','Tirtayasa','Kebon','003','001','0','0','','',NULL,'Celana : 30\r\nANGKATAN KE III','L','32',49),(302,'2019-07-28 15:46:24','2019-07-28 15:46:24',NULL,'23','2003',NULL,'EDWIN PRATAMA PUTRA','Serang','10/12/1996','','083-8715-32228','Belum Kawin','Islam',NULL,'SMA/SMK','3604231210960009','Laki-Laki','Kp. Turun Bales','Cikeusal','Katulisan','008','002','0','0','','',NULL,'Celana : 30\r\nANGKATAN KE III','L','32',49),(303,'2019-07-28 15:47:57','2019-07-28 15:47:57',NULL,'17','2009',NULL,'ADITYA MULYANA KUSUMA','Serang','01/25/1996','','081-3950-32594','Belum Kawin','Islam',NULL,'SMA/SMK','3604172501960004','Laki-Laki','Kp. Sukajaya','Carenang','Panenjoan','011','003','0','0','','',NULL,'Celana : 32\r\nANGKATAN KE III','XL','44',49),(304,'2019-07-28 15:49:21','2019-07-28 15:49:21',NULL,'09','2002',NULL,'FERDY FEBRIANSYAH','Serang','02/09/1997','','087-8770-80082','Belum Kawin','Islam',NULL,'SMA/SMK','3604090902970001','Laki-Laki','Kp. Ciruas Pasar','Ciruas','Citerep','003','003','0','0','','',NULL,'Celana : 31\r\nANGKATAN KE III','L','42',49),(305,'2019-07-28 15:50:44','2019-07-28 15:50:44',NULL,'09','2002',NULL,'ACHMAD NAJILI','Serang','06/01/1996','','087-8862-50202','Belum Kawin','Islam',NULL,'SMA/SMK','3604090106960001','Laki-Laki','Kp. Citerep','Ciruas','Citerep','003','004','0','0','','',NULL,'Celana : 29\r\nANGKATAN KE III','L','42',49),(306,'2019-07-29 12:24:21','2019-07-29 12:24:21',NULL,'20','2007',NULL,'NELA','Bekasi','03/18/2000','','085-2198-23632','Belum Kawin','Islam',NULL,'SMA/SMK','3216175008990049','Perempuan','Kp. Catang batas','Tunjung Teja','Bojong Catang','014','003','0','0','','',NULL,'Celana : 33\r\nANGKATAN KE III','XL','40',49),(308,'2019-08-01 02:25:03','2019-08-15 15:52:09',NULL,'13','2010',NULL,'AHMAD SYAHID','Serang','09/19/1997','',NULL,'Belum Kawin','Islam',NULL,NULL,'3604131909970003','Laki-Laki','Kp. Laban','Tirtayasa','Laban','007','002','0','0',NULL,'',NULL,'Celana : 36\r\nANGKATAN KE III','XL','43',49),(309,'2019-08-01 02:59:00','2019-08-15 15:51:04',NULL,'28','2006',NULL,'MUHAMMAD EKA FAKSI','Serang','09/30/1998','',NULL,'Belum Kawin','Islam',NULL,NULL,'3604283009980001','Laki-Laki','Kp. Cipatat','Pabuaran','Kadubeureum','014','003','0','0',NULL,'',NULL,'Celana : 34\r\nANGKATAN KE III','XXL','43',49),(310,'2019-08-15 15:55:20','2019-08-15 15:58:58',NULL,'19','2004',NULL,'WINDA WIDIYANINGSIH','Serang','04/19/1999','',NULL,'Belum Kawin','Islam',NULL,NULL,'3604195904990001','Perempuan','Kp. Wadas Cikiray','Petir','Sindangsari','007','002','0','0',NULL,'',NULL,'Celana : 29\r\nANGKATAN KE III','L','40',49),(311,'2019-08-15 15:58:45','2019-08-15 15:58:45',NULL,'20','2001',NULL,'ELMA HALIMATUSSA\'DIAH','Serang','08/01/1997','',NULL,'Belum Kawin','Islam',NULL,NULL,'3604204108970002','Perempuan','Kp. Pasar','Tunjung Teja','Tanjung Teja','003','001','0','0','','',NULL,'Celana : 28\r\nANGKATAN KE III','M','38',49),(312,'2019-08-16 01:41:31','2019-08-16 03:21:44',NULL,'09','2001',NULL,'ABDULLOH','Serang','03/03/1996','','081-9328-61877','Belum Kawin','Islam',NULL,'SMA/SMK','3673020303960003','Laki-Laki','Kp. Ciwanda','Ciruas','Ciruas','005','002','0','0',NULL,'',NULL,'Celana : 37\r\nANGKATAN KE III','L','42',49),(313,'2019-08-16 01:43:37','2019-08-16 03:22:39',NULL,'22','2001',NULL,'REYHAN DARMAISHA','Serang','11/19/1996','','087-8832-91625','Belum Kawin','Islam',NULL,'SMA/SMK','3604011911960376','Laki-Laki','Kp. Pertanian','Baros','Baros','003','001','0','0',NULL,'',NULL,'Celana : 37\r\nANGKATAN KE III','M','45',49),(314,'2019-08-16 01:46:16','2019-08-16 03:23:32',NULL,'22','2001',NULL,'RIDWAN','Serang','07/01/1989','','083-8900-37624','Kawin','Islam',NULL,'SMA/SMK','3604020107890072','Laki-Laki','Kp. Pulokiong','Baros','Baros','006','001','0','0',NULL,'',NULL,'Celana : 36\r\nANGKATAN KE III','M','41',49),(315,'2019-08-16 01:48:08','2019-08-16 03:24:14',NULL,'23','2001',NULL,'TB. NANANG MAULANA','Serang','09/08/1993','','085-9300-03336','Belum Kawin','Islam',NULL,'SMA/SMK','3604020803930201','Laki-Laki','Kp. Cirogol','Cikeusal','Cikeusal','004','001','0','0',NULL,'',NULL,'Celana : 37\r\nANGKATAN KE III','L','42',49),(316,'2019-08-16 03:28:40','2019-09-26 06:43:31',NULL,'09','2001','','INVAR DIPUTRA','Serang','10/08/1994','','082-2584-31455','Belum Kawin','Islam',NULL,'SMA/SMK','3673010810940005','Laki-Laki','Kp. Bokor','Ciruas','Ciruas','003','001','0','0','','',NULL,'Celana : 31\r\nANGKATAN KE III','M','40',49);
/*!40000 ALTER TABLE `linmas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lokasis`
--

DROP TABLE IF EXISTS `lokasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lokasis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_kecamatan` text COLLATE utf8mb4_unicode_ci,
  `id_kelurahan` text COLLATE utf8mb4_unicode_ci,
  `nama` text COLLATE utf8mb4_unicode_ci,
  `lokasi` text COLLATE utf8mb4_unicode_ci,
  `kondisi` text COLLATE utf8mb4_unicode_ci,
  `kelengkapan` text COLLATE utf8mb4_unicode_ci,
  `sarpras` text COLLATE utf8mb4_unicode_ci,
  `aktifitas` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lokasis`
--

LOCK TABLES `lokasis` WRITE;
/*!40000 ALTER TABLE `lokasis` DISABLE KEYS */;
/*!40000 ALTER TABLE `lokasis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (7,'2018_08_21_040322_create_kecamatans_table',3),(10,'2018_08_21_043945_create_linmas_table',6),(11,'2018_08_21_064531_create_jenis_limas_table',7),(41,'2014_10_12_000000_create_users_table',8),(42,'2014_10_12_100000_create_password_resets_table',8),(43,'2016_01_01_193651_create_roles_permissions_tables',8),(44,'2018_08_01_183154_create_pages_table',8),(45,'2018_08_04_122319_create_settings_table',8),(46,'2018_08_21_032020_create_activity_log_table',8),(47,'2018_08_21_042138_create_kecamatans_table',8),(48,'2018_08_21_043502_create_kelurahans_table',8),(49,'2018_08_21_064721_create_jenis_linmas_table',8),(50,'2018_08_21_065704_create_linmas_table',8),(51,'2018_08_21_070624_create_poskamlings_table',8),(52,'2018_08_21_071512_create_aset_limas_table',8),(53,'2018_08_24_082515_create_lokasis_table',8),(54,'2018_08_28_094507_create_pendaftarans_table',8),(55,'2018_09_03_025021_create_penugasans_table',9),(56,'2018_09_03_065043_create_penugasan_linmas_table',10),(57,'2018_09_19_070443_create_sapras_table',11),(58,'2018_09_20_024627_create_pembinaans_table',12),(59,'2018_09_24_032944_create_content_publikasis_table',13),(60,'2018_10_02_041737_create_pelaporans_table',14);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelaporans`
--

DROP TABLE IF EXISTS `pelaporans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelaporans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `judul` text COLLATE utf8mb4_unicode_ci,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_laporan` int(11) DEFAULT NULL,
  `kd_kec` text COLLATE utf8mb4_unicode_ci,
  `kel_des` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelaporans`
--

LOCK TABLES `pelaporans` WRITE;
/*!40000 ALTER TABLE `pelaporans` DISABLE KEYS */;
/*!40000 ALTER TABLE `pelaporans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembinaans`
--

DROP TABLE IF EXISTS `pembinaans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembinaans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci,
  `lokasi` text COLLATE utf8mb4_unicode_ci,
  `kegiatan` text COLLATE utf8mb4_unicode_ci,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `penyelengara` text COLLATE utf8mb4_unicode_ci,
  `narasumber` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembinaans`
--

LOCK TABLES `pembinaans` WRITE;
/*!40000 ALTER TABLE `pembinaans` DISABLE KEYS */;
INSERT INTO `pembinaans` VALUES (31,'2019-09-24 02:52:12','2019-09-24 02:52:12',NULL,'Pelatihan Anggota Satlinmas','Anyer','Pelatihan','2019-07-28','2019-07-30','Bidang Linmas',NULL,4);
/*!40000 ALTER TABLE `pembinaans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pendaftarans`
--

DROP TABLE IF EXISTS `pendaftarans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pendaftarans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kelurahan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kelamin` text COLLATE utf8mb4_unicode_ci,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `alamat_kecamatan` text COLLATE utf8mb4_unicode_ci,
  `alamat_kelurahan` text COLLATE utf8mb4_unicode_ci,
  `rt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rw` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pendaftarans`
--

LOCK TABLES `pendaftarans` WRITE;
/*!40000 ALTER TABLE `pendaftarans` DISABLE KEYS */;
INSERT INTO `pendaftarans` VALUES (7,'2018-09-01 10:30:18','2018-09-01 13:23:35','1','1','Ananda Mahdara','taufantritama69@gmail.com','078899','012412412124','Laki-Laki','dsaw','Cimahi Selatan','Utama','09','07','1','1535772618pendaftaran.png'),(8,'2018-09-04 00:05:10','2018-09-04 00:05:10','1','1','SD A','iwanhardiwan@yahoo.com','sss','s','Laki-Laki','sss','555','555','01','02','2',NULL);
/*!40000 ALTER TABLE `pendaftarans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penugasan_linmas`
--

DROP TABLE IF EXISTS `penugasan_linmas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penugasan_linmas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_linmas` text COLLATE utf8mb4_unicode_ci,
  `id_user` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penugasan_linmas`
--

LOCK TABLES `penugasan_linmas` WRITE;
/*!40000 ALTER TABLE `penugasan_linmas` DISABLE KEYS */;
/*!40000 ALTER TABLE `penugasan_linmas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penugasans`
--

DROP TABLE IF EXISTS `penugasans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penugasans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kelurahan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_pendaftaran` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penugasans`
--

LOCK TABLES `penugasans` WRITE;
/*!40000 ALTER TABLE `penugasans` DISABLE KEYS */;
INSERT INTO `penugasans` VALUES (1,'2018-09-03 11:03:49','2018-09-03 11:03:49',NULL,'1','1','Ananda Mahdara','dasdasas','0','0');
/*!40000 ALTER TABLE `penugasans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,2);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'admin','Akses Hanya Admin','2018-08-29 09:20:28','2018-08-29 09:20:28'),(2,'master','Akses Hanya Master','2018-08-29 09:20:34','2018-08-29 09:20:34');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pos_jagas`
--

DROP TABLE IF EXISTS `pos_jagas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pos_jagas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kelurahan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_kec` text COLLATE utf8mb4_unicode_ci,
  `alamat_kel` text COLLATE utf8mb4_unicode_ci,
  `nama` text COLLATE utf8mb4_unicode_ci,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `luas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konstruksi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kondisi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kepemilikan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_tanah` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelengkapan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sarana` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aktifitas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pos_jagas`
--

LOCK TABLES `pos_jagas` WRITE;
/*!40000 ALTER TABLE `pos_jagas` DISABLE KEYS */;
INSERT INTO `pos_jagas` VALUES (105,'2018-09-13 19:20:02','2018-11-02 04:21:56',NULL,'22','2001','Baros','Baros','Pos Melati','Jalan Mawar RT 06 / RW 07','16','2','1','Swadaya Masyarakat','200','0','0','1',NULL,'1537801985posjaga.jpg',3),(125,'2019-10-07 01:20:46','2019-10-07 01:20:46',NULL,'30','2001','Anyar','Anyar','xxx',NULL,'150','1','1','xxvv','120','0','0','1','ok','1570411246posjaga.php',50);
/*!40000 ALTER TABLE `pos_jagas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poskamlings`
--

DROP TABLE IF EXISTS `poskamlings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `poskamlings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_kecamatan` text COLLATE utf8mb4_unicode_ci,
  `id_kelurahan` text COLLATE utf8mb4_unicode_ci,
  `nama` text COLLATE utf8mb4_unicode_ci,
  `lokasi` text COLLATE utf8mb4_unicode_ci,
  `kondisi` text COLLATE utf8mb4_unicode_ci,
  `kelengkapan` text COLLATE utf8mb4_unicode_ci,
  `sarpras` text COLLATE utf8mb4_unicode_ci,
  `aktifitas` text COLLATE utf8mb4_unicode_ci,
  `foto` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poskamlings`
--

LOCK TABLES `poskamlings` WRITE;
/*!40000 ALTER TABLE `poskamlings` DISABLE KEYS */;
/*!40000 ALTER TABLE `poskamlings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regu`
--

DROP TABLE IF EXISTS `regu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regu`
--

LOCK TABLES `regu` WRITE;
/*!40000 ALTER TABLE `regu` DISABLE KEYS */;
INSERT INTO `regu` VALUES (9,'REGU KESIAPSIAGAAN & KEWASPADAAN DINI'),(10,'REGU PENGAMANAN'),(11,'REGU PERTOLONGAN PERTAMA PADA KORBAN & KEBAKARAN'),(13,'REGU PENYELAMATAN & EVAKUASI'),(14,'REGU DAPUR UMUM');
/*!40000 ALTER TABLE `regu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`user_id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_user`
--

LOCK TABLES `role_user` WRITE;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
INSERT INTO `role_user` VALUES (1,3),(1,17),(2,19),(2,20),(2,21),(2,22),(2,23),(2,24),(2,25),(2,26),(2,27),(2,29),(2,35),(2,36),(2,37),(2,38),(2,39),(2,40),(2,41),(2,42),(2,43),(2,44),(2,45),(1,46),(2,47),(2,48),(1,49),(1,50);
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Akses Hanya Admin','2018-08-29 09:21:32','2018-08-29 09:21:32'),(2,'master','Akses Hanya Master','2018-08-29 09:21:40','2018-08-29 09:21:40');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sapras`
--

DROP TABLE IF EXISTS `sapras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sapras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_kecamatan` text COLLATE utf8mb4_unicode_ci,
  `id_kelurahan` text COLLATE utf8mb4_unicode_ci,
  `jenis_sapras` text COLLATE utf8mb4_unicode_ci,
  `merk` text COLLATE utf8mb4_unicode_ci,
  `type` text COLLATE utf8mb4_unicode_ci,
  `spesifikasi` text COLLATE utf8mb4_unicode_ci,
  `ket_item` text COLLATE utf8mb4_unicode_ci,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `tahun` text COLLATE utf8mb4_unicode_ci,
  `kondisi` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sapras`
--

LOCK TABLES `sapras` WRITE;
/*!40000 ALTER TABLE `sapras` DISABLE KEYS */;
/*!40000 ALTER TABLE `sapras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `surat_keputusan`
--

DROP TABLE IF EXISTS `surat_keputusan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `surat_keputusan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor` text NOT NULL,
  `tanggal` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `surat_keputusan`
--

LOCK TABLES `surat_keputusan` WRITE;
/*!40000 ALTER TABLE `surat_keputusan` DISABLE KEYS */;
INSERT INTO `surat_keputusan` VALUES (28,'127120102812712912','2018-10-30'),(29,'872.1/Kep.Kasatpol PP.027-Bid.Linmas/2018','2018-12-05');
/*!40000 ALTER TABLE `surat_keputusan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_pembinaan`
--

DROP TABLE IF EXISTS `temp_pembinaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_pembinaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_linmas` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_linmas` (`id_linmas`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `temp_pembinaan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_pembinaan`
--

LOCK TABLES `temp_pembinaan` WRITE;
/*!40000 ALTER TABLE `temp_pembinaan` DISABLE KEYS */;
INSERT INTO `temp_pembinaan` VALUES (3,217,17);
/*!40000 ALTER TABLE `temp_pembinaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uploads`
--

DROP TABLE IF EXISTS `uploads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `resized_name` varchar(255) NOT NULL,
  `original_name` varchar(255) NOT NULL,
  `modul` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uploads`
--

LOCK TABLES `uploads` WRITE;
/*!40000 ALTER TABLE `uploads` DISABLE KEYS */;
INSERT INTO `uploads` VALUES (85,'29892862d5828b1f3e46d3d7f5cd31d065ff52c7.jpg','29892862d5828b1f3e46d3d7f5cd31d065ff52c70w.jpg','1539572760368_Linmas.jpg',NULL,'Ananda Mahdar',1,'2018-10-15 03:30:01','2018-10-15 03:30:01'),(86,'a926595a56f767d6102f8d7a2a00783cad9eee67.jpg','a926595a56f767d6102f8d7a2a00783cad9eee67go.jpg','1539572760434_Linmas2.jpg',NULL,'Ananda Mahdar',1,'2018-10-15 04:37:11','2018-10-15 04:37:11'),(87,'1a24e8dd83b46fde26a07afdcb3df4fc1fe75df0.jpg','1a24e8dd83b46fde26a07afdcb3df4fc1fe75df0yQ.jpg','1539572760389_Linmas3.jpg',NULL,'Ananda Mahdar',1,'2018-10-15 04:37:18','2018-10-15 04:37:18'),(88,'56fc0aad864e1e7a24eab1c1e50b93e0ca2ccb44.jpg','56fc0aad864e1e7a24eab1c1e50b93e0ca2ccb44w6.jpg','1539572760441_Linmas4.jpg',NULL,'Ananda Mahdar',1,'2018-10-15 04:37:25','2018-10-15 04:37:25'),(89,'f7f0bd5f48c6c6a165d8a774c773f9b3b46a2658.jpg','f7f0bd5f48c6c6a165d8a774c773f9b3b46a2658qJ.jpg','1539572760456_Linmas5.jpg',NULL,'Ananda Mahdar',1,'2018-10-15 04:37:32','2018-10-15 04:37:32'),(93,'34f351f1719a1cf3496ef90a5f33e4aae757975e.jpg','34f351f1719a1cf3496ef90a5f33e4aae757975e2F.jpg','1540212551415_HANSIP(2).jpg',NULL,'admin',1,'2018-10-23 08:53:11','2018-10-23 08:53:11');
/*!40000 ALTER TABLE `uploads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password2nd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_kec` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kel_des` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nm_kec` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nm_kel_des` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(3) NOT NULL,
  `level` int(3) NOT NULL,
  `adminis` int(3) NOT NULL,
  `user` int(3) NOT NULL,
  `anggota` int(3) NOT NULL,
  `pengasahaan` int(3) NOT NULL,
  `pembinaan` int(3) NOT NULL,
  `posKamling` int(3) NOT NULL,
  `sapras` int(3) NOT NULL,
  `publikasi` int(3) NOT NULL,
  `pelaporan` int(3) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'admin','admin','$2y$10$FBfr7fpIjKUKHdf6UJxyGuPVLf8Ydj26D/tvbgVp6siVPeANsT9xu','123456','00','00','SEMUA','SEMUA',1,1,1,1,1,1,1,1,1,1,1,'KPq3kKIKc67QuKGNAvg9eWcf0rMIPcGiOgipAEVUSR27LKY7jRYVzhJkPNTf','2018-08-29 09:22:34','2018-08-29 09:22:34'),(4,'erwin','erwin','$2y$10$XL6zzMPxnCZrzefd0wtNHeRNCEutVvtoVZBc7ZdxQHMqLTuy8Blv2','123456','00','00','SEMUA','SEMUA',1,1,2,2,2,2,2,2,2,2,2,'X21ea29a4SvDmG7voYt8ZzSl3Xyyhn6mlRUAOm0NY9DOFpa6w0vnCms4UOqq','2018-08-29 09:22:34','2018-08-29 09:22:34'),(17,'Ananda Mahdar','Ananda Mahdar','$2y$10$WqpuwyqYGLRIXIOoYHTL6OtXdQ/8gJc473l4TGS9sidHhZQDj6dsy','monsterhunterunitedusa','00','00','SEMUA','SEMUA',1,1,2,2,2,2,2,2,2,2,2,'UqWmWfA9kvZ4MPOZ8O7Faf8fzFNxX3EBFzkwIuBgEfRzBZbDOOwl81mm7Ul9',NULL,NULL),(19,'Ketos','Ketos','$2y$10$7lucvve6UtPSvnZnhLW5uOSkCf.oJZhNUvO5hymkexysUl03xXzeO','123456','16','2002','Kibin','Ketos',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(20,'Barengkok','Barengkok','$2y$10$Y2kUZDKZ99OnfA0PshoKb.OiFlqLJJ8e75WxPnFQ8VGZFeLbQLiJq','123456','16','2006','Kibin','Barengkok',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(21,'Cijeruk','Cijeruk','$2y$10$l8.x9zWCq1Qm9HR8q.py5u5tjTDwY97DS0s9jO8njogRP8DiwYszS','123456','16','2003','Kibin','Cijeruk',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(22,'Ciagel','Ciagel','$2y$10$NblBPzLcLkUYUZWjsV0s0efv/4kEglNbXCsEtrg8r4UOCAvKmz8fi','123456','16','2009','Kibin','Ciagel',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(23,'Kibin','Kibin','$2y$10$N/opJ/CLpSWYLWGV35r//.6Q/MUwrO5SHt6oOxwa62M5Ru036Esh6','123456','16','2001','Kibin','Kibin',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(24,'Nagara','Nagara','$2y$10$gwbFk1mwWehUY6G8aSrEz.BG/F658QJrsoZHNrAW9MfGEvRwjIfCy','123456','16','2004','Kibin','Nagara',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(25,'Nambo Ilir','Nambo Ilir','$2y$10$sSj68cOlP6g5g973DRt5BeAMXMB/92toHg8UF7OK5ECvJi2P/Qf12','123456','16','2005','Kibin','Nambo Ilir',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(26,'Sukamaju','Sukamaju','$2y$10$aqsCqg5C33jfbYtpS13kZ.EtGQK9Xzeihu6P1LZKjkwEYFLzGIZSy','123456','16','2007','Kibin','Sukamaju',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(27,'Tambak','Tambak','$2y$10$I4qBu.TVldMfS1sB/etRhe1oTygFTqoZR3sEMzu.94p8Og4Qi.i/m','123456','16','2008','Kibin','Tambak',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(29,'iwan','iwan','$2y$10$vA.2CstJ2g6drrdqPIhBHeq2giWw9WpFz.a5.qy17vfqjC2/.j/P2','123','30','2005','Anyar','Bandulu',1,2,3,3,2,2,2,2,2,2,2,'TVwWXuBaQLvYkuVtTDeS23cC1cCXuVlfg8n6OkcBkveNw264syzNcpwqHHpP',NULL,NULL),(35,'carenang','carenang','$2y$10$huo2mPbJIb56ju90BbcpK.sgqBiMZqY2RAWRBSDs7VJh4wtBfyKOW','123456','17','2001','Carenang','Carenang',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(36,'mandaya','mandaya','$2y$10$SPcv0n6OwjMsmUq.yduf2erJfMzeCeZ1.r1QI/zgNiG76TTLNmA4u','123456','17','2003','Carenang','Mandaya',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(37,'mekarsari','mekarsari','$2y$10$HEYUG48qAjrf./4Zu8yK3eT9lcMXdcVdpMgndrHLpjON0R67Tac4C','123456','17','2010','Carenang','Mekarsari',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(38,'pamanuk','pamanuk','$2y$10$hTp3b/UTAYss5BFyOKG0EOFz3MhMfvW2XHzvXyvVrNFA0I5ViNSL2','123456','17','2002','Carenang','Pamanuk',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(39,'panenjoan','panenjoan','$2y$10$J5q5QgBWlnkt8c4i2flNbOuch4RhRzkiM0KJmKkv.aRN/1gZ6GyOq','123456','17','2009','Carenang','Panenjoan',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(40,'ragasmasigit','ragasmasigit','$2y$10$eHZA7vSgkTusMHCDOrbQRO23GDDAxS8uQ.57R2f0SaCm5oaYACQR.','123456','17','2006','Carenang','Ragasmasigit',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(41,'teras','teras','$2y$10$APCMIYaS0nQvvte44vIzZemiCL9KkH0yujFHorh1AIsVw.3i.Zw9.','123456','17','2004','Carenang','Teras',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(42,'walikukun','walikukun','$2y$10$kSwJHzejRCdkkQShuKTjpelIDmjpiKfWT8c2a6crdghEB202K6zQu','123456','17','2007','Carenang','Walikukun',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(43,'keccarenang','keccarenang','$2y$10$C8bi11XhVwO2v2XKu3spTOPt1Rq7Zs6rgMvOHHrnzmmWSmebthf0a','123456','00','00','SEMUA','SEMUA',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(44,'polpp','polpp','$2y$10$nA9BdA6G7HYX3fh0kxh6wukKIGjltsd1HFz01PRbIRBIgRqAX2KAC','123456','00','00','SEMUA','SEMUA',1,2,3,3,2,2,2,2,2,2,2,NULL,NULL,NULL),(45,'ratih','ratih','$2y$10$IN.0bb/UT5tjdqGI7pDXKuZZPd5WjBG0q5DVMgfh1dFbry.w1cLv.','123456','00','00','SEMUA','SEMUA',1,2,3,3,2,2,2,2,2,2,2,'I3BvTYk5JISyDyYkTDATNIfV7stlqIdwTW5f70lXWDMo50PpKzQ5SCr2f4YY',NULL,NULL),(46,'iwong','iwong','$2y$10$aITfUpN7qu8t9/y1F6eaHewtAeTVXg2egaLOFOe2jQuEGFk0AxvZa','123456','00','00','SEMUA','SEMUA',1,1,2,2,2,2,2,2,2,2,2,'k0WQ8aUzBLtD167zFlVvTbIcjSKDGlPcKfhhN4T4QQp1jMWPOAmSoDEPAhSM',NULL,NULL),(47,'KECTIRTAYASA','KECTIRTAYASA','$2y$10$h4rUcLBM/3MonhBztYPH5eXisszH30yuXroMTT2.YJyE2eZTk.fWm','123456','00','00','SEMUA','SEMUA',1,2,3,3,2,1,1,2,2,2,2,'qi3tYhxBlabS1MYLTUU62OkHd9wU7tDBcn8gdhw48Dp9RbV0RaAVkufKHJxp',NULL,NULL),(48,'KECKOPO','KECKOPO','$2y$10$VEvmGoWGjGP86FEqHWGqnuJbmewUI.h8kwkJHFT8jfuNbznjk76t6','123456','00','00','SEMUA','SEMUA',1,2,3,3,2,1,2,2,2,2,2,NULL,NULL,NULL),(49,'agung','agung','$2y$10$R19d0kVUIsmfcvyKtbUR5esW6zco1naNcpyy0OuGC/1Uiul1pndeq','123456','00','00','SEMUA','SEMUA',1,1,2,2,2,2,2,2,2,2,2,'a2r4zY8udYqlbRNSzggkejceK3WojXcRiXpEJLC5oifPvvONP0oFFT7mCltZ',NULL,NULL),(50,'asapkalimantan','asapkalimantan','$2y$10$7nJqezeMZJd.Ugcb1jcbrOL7LmcNgeky1ynM1gv0OeHqaIBTUNDhy','closeup','00','00','SEMUA','SEMUA',1,1,2,2,2,2,2,2,2,2,2,NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_login`
--

DROP TABLE IF EXISTS `users_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `refid_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kd_kec` varchar(255) NOT NULL,
  `kel_des` varchar(255) NOT NULL,
  `nm_kec` varchar(255) NOT NULL,
  `nm_kel_des` varchar(255) NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime NOT NULL,
  `status_login` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=230 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_login`
--

LOCK TABLES `users_login` WRITE;
/*!40000 ALTER TABLE `users_login` DISABLE KEYS */;
INSERT INTO `users_login` VALUES (51,4,'erwin','34','2003','Bandung','Penamping','2018-10-10 09:44:55','2018-10-09 03:47:45',0),(52,36,'mandaya','','','Carenang','Mandaya','2018-10-09 03:45:27','2018-10-09 03:11:20',0),(53,35,'carenang','','','Carenang','Carenang','2018-10-09 03:44:12','2018-10-09 03:11:56',0),(54,38,'pamanuk','','','Carenang','Pamanuk','2018-10-09 03:39:45','2018-10-09 03:13:52',0),(56,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-09 10:38:34','2018-10-09 03:45:44',0),(57,3,'admin','34','2003','Bandung','Penamping','2018-10-10 10:43:00','2018-10-10 09:06:35',0),(59,42,'walikukun','','','Carenang','Walikukun','2018-10-10 11:56:26','2018-10-10 11:55:27',0),(61,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-10 10:38:34','2018-10-10 15:51:33',0),(62,3,'admin','34','2003','Bandung','Penamping','2018-10-11 10:43:00','2018-10-11 08:53:51',0),(64,4,'erwin','34','2003','Bandung','Penamping','2018-10-11 09:44:55','2018-10-11 09:39:30',0),(65,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-11 10:38:34','2018-10-11 10:33:47',0),(66,17,'Ananda Mahdar','34','2003','Bandung','Penamping','2018-10-10 11:42:03','2019-01-14 15:02:17',0),(71,44,'polpp','00','00','SEMUA','SEMUA','2018-10-11 12:35:34','2018-10-11 12:35:34',0),(74,17,'Ananda Mahdar','34','2003','Bandung','Penamping','2018-10-11 13:30:39','2019-01-14 15:02:17',0),(75,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-12 07:38:37','2018-10-12 07:38:37',0),(76,17,'Ananda Mahdar','34','2003','Bandung','Penamping','2018-10-12 08:42:57','2019-01-14 15:02:17',0),(77,3,'admin','34','2003','Bandung','Penamping','2018-10-12 08:48:25','2018-10-12 08:48:25',0),(78,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-13 00:00:56','2018-10-13 00:00:56',0),(79,4,'erwin','34','2003','Bandung','Penamping','2018-10-13 17:47:18','2018-10-13 17:47:18',0),(80,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-14 09:46:05','2018-10-14 09:46:05',0),(81,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-15 07:13:41','2018-10-15 07:13:41',0),(82,17,'Ananda Mahdar','34','2003','Bandung','Penamping','2018-10-15 09:04:53','2019-01-14 15:02:17',0),(83,3,'admin','34','2003','Bandung','Penamping','2018-10-15 09:21:21','2018-10-15 09:21:21',0),(84,3,'admin','34','2003','Bandung','Penamping','2018-10-16 09:03:57','2018-10-16 09:03:57',0),(85,17,'Ananda Mahdar','34','2003','Bandung','Penamping','2018-10-16 09:30:01','2019-01-14 15:02:17',0),(86,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-16 22:30:27','2018-10-16 22:30:27',0),(87,3,'admin','34','2003','Bandung','Penamping','2018-10-17 08:57:30','2018-10-17 08:57:30',0),(88,17,'Ananda Mahdar','34','2003','Bandung','Penamping','2018-10-17 09:12:45','2019-01-14 15:02:17',0),(89,3,'admin','34','2003','Bandung','Penamping','2018-10-18 09:12:59','2018-10-18 09:12:59',0),(90,17,'Ananda Mahdar','34','2003','Bandung','Penamping','2018-10-18 09:40:15','2019-01-14 15:02:17',0),(91,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-19 05:56:43','2018-10-19 05:56:43',0),(92,17,'Ananda Mahdar','34','2003','Bandung','Penamping','2018-10-19 08:18:45','2019-01-14 15:02:17',0),(93,3,'admin','34','2003','Bandung','Penamping','2018-10-19 08:36:30','2018-10-19 08:36:30',0),(94,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-20 10:03:20','2018-10-20 10:03:20',0),(95,4,'erwin','34','2003','Bandung','Penamping','2018-10-22 08:12:16','2018-10-22 19:51:16',0),(97,3,'admin','34','2003','Bandung','Penamping','2018-10-22 14:10:08','2018-10-22 08:45:21',0),(98,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-22 09:03:48','2018-10-22 09:03:48',0),(100,17,'Ananda Mahdar','34','2003','Bandung','Penamping','2018-10-22 14:01:55','2019-01-14 15:02:17',0),(101,4,'erwin','34','2003','Bandung','Penamping','2018-10-23 09:05:15','2018-10-23 17:08:32',0),(102,45,'ratih','00','00','SEMUA','SEMUA','2018-10-23 09:17:10','2018-10-23 16:22:14',0),(103,3,'admin','34','2003','Bandung','Penamping','2018-10-23 09:57:11','2018-10-23 09:57:11',0),(104,17,'Ananda Mahdar','34','2001','Bandung','Bandung','2018-10-23 09:57:58','2019-01-14 15:02:17',0),(105,3,'admin','34','2003','Bandung','Penamping','2018-10-24 09:14:32','2018-10-24 09:14:32',0),(106,17,'Ananda Mahdar','34','2001','Bandung','Bandung','2018-10-24 09:31:19','2019-01-14 15:02:17',0),(107,45,'ratih','00','00','SEMUA','SEMUA','2018-10-24 10:12:13','2018-10-24 10:12:13',0),(108,17,'Ananda Mahdar','34','2001','Bandung','Bandung','2018-10-25 09:03:30','2019-01-14 15:02:17',0),(109,3,'admin','34','2003','Bandung','Penamping','2018-10-25 09:58:03','2018-10-25 09:58:03',0),(110,4,'erwin','34','2003','Bandung','Penamping','2018-10-25 19:36:17','2018-10-25 20:25:39',0),(111,17,'Ananda Mahdar','34','2001','Bandung','Bandung','2018-10-26 08:38:46','2019-01-14 15:02:17',0),(112,3,'admin','34','2003','Bandung','Penamping','2018-10-26 08:57:47','2018-10-26 08:57:47',0),(113,4,'erwin','34','2003','Bandung','Penamping','2018-10-26 09:45:48','2018-10-26 09:45:48',0),(114,4,'erwin','00','00','SEMUA','SEMUA','2018-10-27 13:29:12','2018-10-27 21:51:06',0),(115,3,'admin','00','00','SEMUA','SEMUA','2018-10-27 18:33:15','2018-10-27 21:50:53',0),(116,4,'erwin','00','00','SEMUA','SEMUA','2018-10-28 11:44:44','2018-10-28 22:35:27',0),(117,3,'admin','00','00','SEMUA','SEMUA','2018-10-29 08:37:22','2018-10-29 08:37:22',0),(118,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2018-10-29 09:27:04','2019-01-14 15:02:17',0),(119,24,'Nagara','16','2004','Kibin','Nagara','2018-10-29 15:16:24','2018-10-29 15:16:24',0),(120,4,'erwin','00','00','SEMUA','SEMUA','2018-10-30 08:29:01','2018-10-30 09:06:21',0),(121,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2018-10-30 09:42:06','2019-01-14 15:02:17',0),(122,3,'admin','00','00','SEMUA','SEMUA','2018-10-30 09:52:50','2018-10-30 09:53:03',0),(123,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-30 21:03:35','2018-10-30 21:03:35',0),(124,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-10-31 18:26:23','2018-10-31 18:26:23',0),(125,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-11-01 05:43:21','2018-11-01 05:43:21',0),(126,4,'erwin','00','00','SEMUA','SEMUA','2018-11-02 09:08:43','2018-11-02 10:23:26',0),(127,3,'admin','00','00','SEMUA','SEMUA','2018-11-02 09:11:17','2018-11-02 09:11:17',0),(128,46,'iwong','00','00','SEMUA','SEMUA','2018-11-02 16:22:33','2018-11-02 16:22:33',0),(129,3,'admin','00','00','SEMUA','SEMUA','2018-11-05 09:07:11','2018-11-05 14:12:29',0),(130,27,'Tambak','16','2008','Kibin','Tambak','2018-11-05 10:50:05','2018-11-05 10:50:05',0),(131,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2018-11-06 09:26:07','2019-01-14 15:02:17',0),(132,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-11-06 21:10:52','2018-11-06 21:10:52',0),(133,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-11-07 11:22:31','2018-11-07 11:22:31',0),(134,4,'erwin','00','00','SEMUA','SEMUA','2018-11-08 11:01:03','2018-11-08 11:01:57',0),(135,4,'erwin','00','00','SEMUA','SEMUA','2018-11-09 11:43:30','2018-11-09 11:43:30',0),(136,3,'admin','00','00','SEMUA','SEMUA','2018-11-12 11:28:55','2018-11-12 11:28:55',0),(137,4,'erwin','00','00','SEMUA','SEMUA','2018-11-13 01:37:38','2018-11-13 01:41:37',0),(138,3,'admin','00','00','SEMUA','SEMUA','2018-11-15 10:01:14','2018-11-15 14:20:11',0),(139,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2018-11-15 10:39:44','2019-01-14 15:02:17',0),(140,36,'mandaya','17','2003','Carenang','Mandaya','2018-11-16 20:13:36','2018-11-16 20:13:36',0),(141,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2018-11-21 14:37:15','2019-01-14 15:02:17',0),(142,39,'panenjoan','17','2009','Carenang','Panenjoan','2018-11-21 15:16:30','2018-11-21 15:16:30',0),(143,4,'erwin','00','00','SEMUA','SEMUA','2018-11-23 09:18:18','2018-11-23 10:17:22',0),(144,3,'admin','00','00','SEMUA','SEMUA','2018-11-23 09:24:53','2018-11-23 09:24:53',0),(145,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2018-11-23 13:25:06','2019-01-14 15:02:17',0),(146,4,'erwin','00','00','SEMUA','SEMUA','2018-11-27 13:56:38','2018-11-27 15:58:20',0),(147,4,'erwin','00','00','SEMUA','SEMUA','2018-11-28 10:10:52','2018-11-28 12:49:05',0),(148,47,'KECTIRTAYASA','00','00','SEMUA','SEMUA','2018-11-28 12:49:11','2018-11-28 13:00:38',0),(149,4,'erwin','00','00','SEMUA','SEMUA','2018-11-29 10:31:10','2018-11-29 14:34:23',0),(150,47,'KECTIRTAYASA','00','00','SEMUA','SEMUA','2018-11-29 11:13:39','2018-11-29 13:43:50',0),(151,4,'erwin','00','00','SEMUA','SEMUA','2018-11-30 03:25:08','2018-11-30 11:39:01',0),(152,47,'KECTIRTAYASA','00','00','SEMUA','SEMUA','2018-11-30 12:53:26','2018-11-30 12:53:26',0),(153,4,'erwin','00','00','SEMUA','SEMUA','2018-12-03 10:33:45','2018-12-03 12:33:12',0),(154,3,'admin','00','00','SEMUA','SEMUA','2018-12-04 11:34:33','2018-12-04 11:34:33',0),(155,4,'erwin','00','00','SEMUA','SEMUA','2018-12-05 08:54:14','2018-12-05 08:54:14',0),(156,47,'KECTIRTAYASA','00','00','SEMUA','SEMUA','2018-12-05 13:54:48','2018-12-05 13:58:07',0),(157,4,'erwin','00','00','SEMUA','SEMUA','2018-12-06 07:50:21','2018-12-06 15:28:15',0),(158,3,'admin','00','00','SEMUA','SEMUA','2018-12-09 16:30:24','2018-12-09 16:30:24',0),(159,47,'KECTIRTAYASA','00','00','SEMUA','SEMUA','2018-12-10 13:38:45','2018-12-10 13:40:32',0),(160,4,'erwin','00','00','SEMUA','SEMUA','2018-12-10 16:45:41','2018-12-10 17:35:23',0),(161,3,'admin','00','00','SEMUA','SEMUA','2018-12-10 17:04:36','2018-12-10 17:04:36',0),(162,47,'KECTIRTAYASA','00','00','SEMUA','SEMUA','2018-12-12 11:50:02','2018-12-12 11:54:17',0),(163,3,'admin','00','00','SEMUA','SEMUA','2018-12-16 15:00:11','2018-12-16 15:00:11',0),(164,3,'admin','00','00','SEMUA','SEMUA','2018-12-17 10:44:47','2018-12-17 10:44:47',0),(165,4,'erwin','00','00','SEMUA','SEMUA','2018-12-18 12:53:56','2018-12-18 15:46:56',0),(166,4,'erwin','00','00','SEMUA','SEMUA','2018-12-19 07:59:53','2018-12-19 08:55:23',0),(167,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2018-12-19 10:36:38','2019-01-14 15:02:17',0),(168,3,'admin','00','00','SEMUA','SEMUA','2018-12-19 10:40:51','2018-12-19 10:40:51',0),(169,4,'erwin','00','00','SEMUA','SEMUA','2018-12-20 08:33:47','2018-12-20 16:30:00',0),(170,3,'admin','00','00','SEMUA','SEMUA','2018-12-20 08:35:03','2018-12-20 08:35:03',0),(171,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2018-12-20 08:52:55','2019-01-14 15:02:17',0),(172,3,'admin','00','00','SEMUA','SEMUA','2018-12-21 10:30:26','2018-12-21 16:21:49',0),(173,3,'admin','00','00','SEMUA','SEMUA','2018-12-22 20:38:50','2018-12-22 20:38:50',0),(174,3,'admin','00','00','SEMUA','SEMUA','2018-12-23 02:37:10','2018-12-23 02:37:10',0),(175,3,'admin','00','00','SEMUA','SEMUA','2018-12-24 09:39:08','2018-12-24 09:39:08',0),(176,3,'admin','00','00','SEMUA','SEMUA','2018-12-25 15:51:06','2018-12-25 15:51:06',0),(177,3,'admin','00','00','SEMUA','SEMUA','2018-12-26 16:32:43','2018-12-26 16:32:43',0),(178,3,'admin','00','00','SEMUA','SEMUA','2018-12-27 00:34:37','2018-12-27 01:47:25',0),(179,4,'erwin','00','00','SEMUA','SEMUA','2018-12-27 01:47:44','2018-12-27 01:47:44',0),(180,3,'admin','00','00','SEMUA','SEMUA','2019-01-02 15:19:17','2019-01-02 15:19:17',0),(181,39,'panenjoan','17','2009','Carenang','Panenjoan','2019-01-06 01:22:52','2019-01-06 01:22:52',0),(182,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2019-01-11 10:15:07','2019-01-14 15:02:17',0),(183,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2019-01-14 15:02:08','2019-01-14 15:02:17',0),(184,3,'admin','00','00','SEMUA','SEMUA','2019-01-16 10:32:25','2019-01-16 10:32:25',0),(185,4,'erwin','00','00','SEMUA','SEMUA','2019-01-16 15:20:57','2019-01-16 15:30:43',0),(186,3,'admin','00','00','SEMUA','SEMUA','2019-01-17 10:39:07','2019-01-17 10:39:07',0),(187,3,'admin','00','00','SEMUA','SEMUA','2019-01-22 14:03:19','2019-01-22 14:03:19',0),(188,4,'erwin','00','00','SEMUA','SEMUA','2019-01-29 09:07:25','2019-01-29 09:11:25',0),(189,39,'panenjoan','17','2009','Carenang','Panenjoan','2019-02-03 03:11:37','2019-02-03 03:11:37',0),(190,3,'admin','00','00','SEMUA','SEMUA','2019-02-28 19:50:05','2019-02-28 19:50:05',0),(191,3,'admin','00','00','SEMUA','SEMUA','2019-07-04 23:38:33','2019-07-04 23:38:33',0),(192,3,'admin','00','00','SEMUA','SEMUA','2019-07-05 08:26:45','2019-07-05 08:26:45',0),(193,4,'erwin','00','00','SEMUA','SEMUA','2019-07-22 00:30:17','2019-07-22 00:30:45',0),(194,4,'erwin','00','00','SEMUA','SEMUA','2019-07-28 19:44:43','2019-07-28 19:50:54',0),(195,49,'agung','00','00','SEMUA','SEMUA','2019-07-28 19:51:30','2019-07-29 00:57:33',0),(196,49,'agung','00','00','SEMUA','SEMUA','2019-07-29 19:18:56','2019-07-29 19:24:46',0),(197,4,'erwin','00','00','SEMUA','SEMUA','2019-07-29 19:27:49','2019-07-30 06:25:27',0),(198,49,'agung','00','00','SEMUA','SEMUA','2019-07-31 14:47:56','2019-07-31 14:47:56',0),(199,49,'agung','00','00','SEMUA','SEMUA','2019-08-13 10:23:22','2019-08-13 10:23:22',0),(200,4,'erwin','00','00','SEMUA','SEMUA','2019-08-13 17:54:17','2019-08-13 20:53:27',0),(201,49,'agung','00','00','SEMUA','SEMUA','2019-08-15 22:48:19','2019-08-15 22:48:19',0),(202,49,'agung','00','00','SEMUA','SEMUA','2019-08-16 07:10:07','2019-08-16 10:37:43',0),(203,4,'erwin','00','00','SEMUA','SEMUA','2019-08-19 23:12:41','2019-08-19 23:12:41',0),(204,4,'erwin','00','00','SEMUA','SEMUA','2019-08-21 09:57:39','2019-08-21 11:29:18',0),(205,4,'erwin','00','00','SEMUA','SEMUA','2019-09-03 14:29:38','2019-09-03 17:23:44',0),(206,4,'erwin','00','00','SEMUA','SEMUA','2019-09-11 09:47:43','2019-09-11 09:47:43',0),(207,4,'erwin','00','00','SEMUA','SEMUA','2019-09-12 09:33:34','2019-09-12 09:33:34',0),(208,3,'admin','00','00','SEMUA','SEMUA','2019-09-12 09:52:55','2019-09-12 09:56:14',0),(209,17,'Ananda Mahdar','00','00','SEMUA','SEMUA','2019-09-12 09:56:23','2019-09-12 09:58:05',0),(210,4,'erwin','00','00','SEMUA','SEMUA','2019-09-13 11:02:32','2019-09-13 11:02:32',0),(211,4,'erwin','00','00','SEMUA','SEMUA','2019-09-16 10:58:47','2019-09-16 10:58:47',0),(212,4,'erwin','00','00','SEMUA','SEMUA','2019-09-17 10:32:39','2019-09-17 10:32:39',0),(213,3,'admin','00','00','SEMUA','SEMUA','2019-09-20 05:49:52','2019-09-20 05:53:41',0),(214,46,'iwong','00','00','SEMUA','SEMUA','2019-09-20 05:57:02','2019-09-20 05:58:39',0),(215,4,'erwin','00','00','SEMUA','SEMUA','2019-09-20 21:52:15','2019-09-20 21:52:15',0),(216,4,'erwin','00','00','SEMUA','SEMUA','2019-09-24 07:45:11','2019-09-24 09:54:26',0),(217,4,'erwin','00','00','SEMUA','SEMUA','2019-09-26 13:42:17','2019-09-26 13:42:17',0),(218,4,'erwin','00','00','SEMUA','SEMUA','2019-09-27 06:35:20','2019-09-27 06:39:59',0),(219,4,'erwin','00','00','SEMUA','SEMUA','2019-10-02 10:19:29','2019-10-02 10:39:40',0),(220,4,'erwin','00','00','SEMUA','SEMUA','2019-10-04 15:40:43','2019-10-04 15:42:08',0),(221,3,'admin','00','00','SEMUA','SEMUA','2019-10-07 08:04:21','2019-10-07 08:05:52',0),(222,50,'asapkalimantan','00','00','SEMUA','SEMUA','2019-10-07 08:06:12','2019-10-07 08:06:12',0),(223,3,'admin','00','00','SEMUA','SEMUA','2019-10-10 10:22:59','2019-10-10 10:22:59',0),(224,49,'agung','00','00','SEMUA','SEMUA','2019-11-06 11:39:52','2019-11-06 11:42:48',0),(225,4,'erwin','00','00','SEMUA','SEMUA','2019-11-07 09:51:08','2019-11-07 10:53:45',0),(226,4,'erwin','00','00','SEMUA','SEMUA','2019-11-12 16:58:07','2019-11-12 17:16:19',0),(227,47,'KECTIRTAYASA','00','00','SEMUA','SEMUA','2019-11-21 07:27:11','2019-11-21 07:27:11',0),(228,4,'erwin','00','00','SEMUA','SEMUA','2019-12-03 08:35:03','2019-12-03 09:20:01',0),(229,4,'erwin','00','00','SEMUA','SEMUA','2019-12-07 08:47:04','2019-12-07 08:47:04',1);
/*!40000 ALTER TABLE `users_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wilayah`
--

DROP TABLE IF EXISTS `wilayah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wilayah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_prov` char(11) NOT NULL,
  `kd_kota_kab` char(11) NOT NULL,
  `kd_kec` char(11) NOT NULL,
  `kd_kel_des` char(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=379 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wilayah`
--

LOCK TABLES `wilayah` WRITE;
/*!40000 ALTER TABLE `wilayah` DISABLE KEYS */;
INSERT INTO `wilayah` VALUES (19,'36','04','05','00','Kramatwatu'),(20,'36','04','05','2001','Kramatwatu'),(21,'36','04','05','2002','Margasana'),(22,'36','04','05','2003','Pejaten'),(23,'36','04','05','2004','Toyomerto'),(24,'36','04','05','2005','Harjatani'),(25,'36','04','05','2006','Serdang'),(26,'36','04','05','2007','Terate'),(27,'36','04','05','2008','Tonjong'),(28,'36','04','05','2009','Pamengkang'),(29,'36','04','05','2010','Pegadingan'),(30,'36','04','05','2011','Lebakwana'),(31,'36','04','05','2012','Wanayasa'),(32,'36','04','05','2013','Pelamunan'),(33,'36','04','05','2014','Teluk Terate'),(34,'36','04','05','2015','Margatani'),(35,'36','04','06','00','Waringinkurung'),(36,'36','04','06','2001','Waringinkurung'),(37,'36','04','06','2002','Talaga Luhur'),(38,'36','04','06','2003','Binangun'),(39,'36','04','06','2004','Melati'),(40,'36','04','06','2005','Sasahan'),(41,'36','04','06','2006','Suka Dalem'),(42,'36','04','06','2007','Sukabares'),(43,'36','04','06','2008','Sambilawang'),(44,'36','04','06','2009','Sampir'),(45,'36','04','06','2010','Cokopsulanjana'),(46,'36','04','06','2011','Kemuning'),(47,'36','04','07','00','Bojonegara'),(48,'36','04','07','2001','Bojonegara'),(49,'36','04','07','2002','Mangkunegara'),(50,'36','04','07','2003','Wanakarta'),(51,'36','04','07','2004','Karang Kepuh'),(52,'36','04','07','2005','Lambangsari'),(53,'36','04','07','2006','Kertasana'),(54,'36','04','07','2007','Margagiri'),(55,'36','04','07','2008','Ukirsari'),(56,'36','04','07','2009','Pakuncen'),(57,'36','04','07','2010','Pangarengan'),(58,'36','04','07','2011','Mekar Jaya'),(59,'36','04','08','00','Pulo Ampel'),(60,'36','04','08','2001','Pulo Ampel'),(61,'36','04','08','2002','Sumuranja'),(62,'36','04','08','2003','Mangunreja'),(63,'36','04','08','2004','Gedung Soka'),(64,'36','04','08','2005','Salira'),(65,'36','04','08','2006','Argawana'),(66,'36','04','08','2007','Banyuwangi'),(67,'36','04','08','2008','Margasari'),(68,'36','04','08','2009','Pulo Panjang'),(69,'36','04','09','00','Ciruas'),(70,'36','04','09','2001','Ciruas'),(71,'36','04','09','2002','Citerep'),(72,'36','04','09','2003','Pulo'),(73,'36','04','09','2004','Kadikaran'),(74,'36','04','09','2005','Kepandean'),(75,'36','04','09','2006','Gosara'),(76,'36','04','09','2007','Kebonratu'),(77,'36','04','09','2008','Tirem'),(78,'36','04','09','2009','Bumijaya'),(79,'36','04','09','2010','Penggalang'),(80,'36','04','09','2011','Pamong'),(81,'36','04','09','2012','Cigelam'),(82,'36','04','09','2013','Singamerta'),(83,'36','04','09','2014','Ranjeng'),(84,'36','04','09','2015','Beberan'),(85,'36','04','09','2016','Kaserangan'),(86,'36','04','09','2017','Pelawad'),(87,'36','04','11','00','Kragilan'),(88,'36','04','11','2001','Kragilan'),(89,'36','04','11','2002','Silebu'),(90,'36','04','11','2003','Pematang'),(91,'36','04','11','2004','Dukuh'),(92,'36','04','11','2005','Undar Andir'),(93,'36','04','11','2006','Sukajadi'),(94,'36','04','11','2007','Sentul'),(95,'36','04','11','2008','Jeruk Tipis'),(96,'36','04','11','2009','Teras Bendung'),(97,'36','04','11','2010','Kamaruton'),(98,'36','04','11','2011','Kendayakan'),(99,'36','04','11','2012','Tegalmaja'),(100,'36','04','11','2013','Cisait'),(101,'36','04','11','2014','Kramatjati'),(102,'36','04','12','00','Pontang'),(103,'36','04','12','2001','Pontang'),(104,'36','04','12','2002','Sukanegara'),(105,'36','04','12','2003','Linduk'),(106,'36','04','12','2004','Pulokencana'),(107,'36','04','12','2006','Kelapian'),(108,'36','04','12','2008','Kubang Puji'),(109,'36','04','12','2009','Domas'),(110,'36','04','12','2010','Singarajan'),(111,'36','04','12','2011','Kaserangan'),(112,'36','04','12','2012','Wanayasa'),(113,'36','04','12','2013','Suka Jaya'),(114,'36','04','13','00','Tirtayasa'),(115,'36','04','13','2001','Tirtayasa'),(116,'36','04','13','2001','Tirtayasa'),(117,'36','04','13','2002','Samparwadi'),(118,'36','04','13','2003','Kamanisan'),(119,'36','04','13','2004','Pontang Legon'),(120,'36','04','13','2005','Kebon'),(121,'36','04','13','2006','Sujung'),(122,'36','04','13','2007','Lontar'),(123,'36','04','13','2008','Susukan'),(124,'36','04','13','2009','Wargasara'),(125,'36','04','13','2010','Laban'),(126,'36','04','13','2011','Tengkurak'),(127,'36','04','13','2012','Alang-alang'),(128,'36','04','13','2013','Kebuyutan'),(129,'36','04','13','2014','Puser'),(130,'36','04','14','00','Tanara'),(131,'36','04','14','2001','Tanara'),(132,'36','04','14','2002','Cerukcuk'),(133,'36','04','14','2003','Tenjoayu'),(134,'36','04','14','2004','Sukamanah'),(135,'36','04','14','2005','Lempuyang'),(136,'36','04','14','2006','Siremen'),(137,'36','04','14','2007','Bendung'),(138,'36','04','14','2008','Pedaleman'),(139,'36','04','14','2009','Cibodas'),(140,'36','04','15','00','Cikande'),(141,'36','04','15','2001','Cikande'),(142,'36','04','15','2002','Leuwi Limus'),(143,'36','04','15','2003','Nambo Udik'),(144,'36','04','15','2004','Parigi'),(145,'36','04','15','2005','Koper'),(146,'36','04','15','2006','Bakung'),(147,'36','04','15','2007','Julang'),(148,'36','04','15','2008','Sukatani'),(149,'36','04','15','2009','Situterate'),(150,'36','04','15','2010','Kamurang'),(151,'36','04','15','2011','Gembor Udik'),(152,'36','04','15','2012','Songgomjaya'),(153,'36','04','15','2013','Cikande Permai'),(154,'36','04','16','00','Kibin'),(155,'36','04','16','2001','Kibin'),(156,'36','04','16','2002','Ketos'),(157,'36','04','16','2003','Cijeruk'),(158,'36','04','16','2004','Nagara'),(159,'36','04','16','2005','Nambo Ilir'),(160,'36','04','16','2006','Barengkok'),(161,'36','04','16','2007','Sukamaju'),(162,'36','04','16','2008','Tambak'),(163,'36','04','16','2009','Ciagel'),(164,'36','04','17','00','Carenang'),(165,'36','04','17','2001','Carenang'),(166,'36','04','17','2002','Pamanuk'),(167,'36','04','17','2003','Mandaya'),(168,'36','04','17','2004','Teras'),(169,'36','04','17','2006','Ragasmasigit'),(170,'36','04','17','2007','Walikukun'),(171,'36','04','17','2009','Panenjoan'),(172,'36','04','17','2010','Mekarsari'),(173,'36','04','18','00','Binuang'),(174,'36','04','18','2001','Binuang'),(175,'36','04','18','2002','Cakung'),(176,'36','04','18','2003','Renged'),(177,'36','04','18','2004','Gembor'),(178,'36','04','18','2005','Warakas'),(179,'36','04','18','2006','Sukamampir'),(180,'36','04','18','2007','Lamaran'),(181,'36','04','19','00','Petir'),(182,'36','04','19','2001','Petir'),(183,'36','04','19','2002','Cirangkong'),(184,'36','04','19','2003','Tambiluk'),(185,'36','04','19','2004','Sindangsari'),(186,'36','04','19','2005','Padasuka'),(187,'36','04','19','2006','Seuat'),(188,'36','04','19','2007','Nagarapadang'),(189,'36','04','19','2008','Kadugenep'),(190,'36','04','19','2009','Cirendeu'),(191,'36','04','19','2010','Sanding'),(192,'36','04','19','2011','Kampung Baru'),(193,'36','04','19','2012','Mekar Baru'),(194,'36','04','19','2013','Seuat Jaya'),(195,'36','04','19','2014','Kubang Jaya'),(196,'36','04','19','2015','Bojong Nangka'),(197,'36','04','20','00','Tunjung Teja'),(198,'36','04','20','2001','Tanjung Teja'),(199,'36','04','20','2002','Sukasari'),(200,'36','04','20','2003','Panunggulan'),(201,'36','04','20','2004','Malanggah'),(202,'36','04','20','2005','Kemuning'),(203,'36','04','20','2006','Bojong Menteng'),(204,'36','04','20','2007','Bojong Catang'),(205,'36','04','20','2008','Bojong Pandan'),(206,'36','04','20','2009','Pancaregang'),(207,'36','04','22','00','Baros'),(208,'36','04','22','2001','Baros'),(209,'36','04','22','2002','Tejamari'),(210,'36','04','22','2003','Panyirapan'),(211,'36','04','22','2004','Sidamukti'),(212,'36','04','22','2005','Sukacai'),(213,'36','04','22','2006','Tamansari'),(214,'36','04','22','2007','Sindangmandi'),(215,'36','04','22','2008','Cisalam'),(216,'36','04','22','2009','Sukamanah'),(217,'36','04','22','2010','Sukamenak'),(218,'36','04','22','2011','Curugagung'),(219,'36','04','22','2012','Padasuka'),(220,'36','04','22','2013','Sinarmukti'),(221,'36','04','22','2014','Suka Indah'),(222,'36','04','23','00','Cikeusal'),(223,'36','04','23','2001','Cikeusal'),(224,'36','04','23','2002','Dahu'),(225,'36','04','23','2003','Katulisan'),(226,'36','04','23','2004','Sukamaju'),(227,'36','04','23','2005','Cilayang'),(228,'36','04','23','2006','Sukamenak'),(229,'36','04','23','2007','Cimaung'),(230,'36','04','23','2008','Panyabrangan'),(231,'36','04','23','2009','Gandayasa'),(232,'36','04','23','2010','Bantar Panjang'),(233,'36','04','23','2011','Sukaratu'),(234,'36','04','23','2012','Harundang'),(235,'36','04','23','2013','Sukarame'),(236,'36','04','23','2014','Panosogan'),(237,'36','04','23','2015','Mongpok'),(238,'36','04','23','2016','Sukaraja'),(239,'36','04','23','2017','Cilayang Guha'),(240,'36','04','24','00','Pamarayan'),(241,'36','04','24','2001','Pamarayan'),(242,'36','04','24','2002','Damping'),(243,'36','04','24','2003','Wirana'),(244,'36','04','24','2004','Keboncau'),(245,'36','04','24','2005','Pudar'),(246,'36','04','24','2006','Binong'),(247,'36','04','24','2007','Sangiang'),(248,'36','04','24','2008','Kampung Baru'),(249,'36','04','24','2010','Pasirlimus'),(250,'36','04','24','2018','Pasir Kembang'),(251,'36','04','25','00','Kopo'),(252,'36','04','25','2001','Kopo'),(253,'36','04','25','2002','Garut'),(254,'36','04','25','2003','Nanggung'),(255,'36','04','25','2004','Cidahu'),(256,'36','04','25','2005','Nyompok'),(257,'36','04','25','2006','Gabus'),(258,'36','04','25','2007','Carenang Udik'),(259,'36','04','25','2008','Rancasumur'),(260,'36','04','25','2009','Babakanjaya'),(261,'36','04','25','2010','Mekarbaru'),(262,'36','04','26','00','Jawilan'),(263,'36','04','26','2001','Jawilan'),(264,'36','04','26','2002','Bojot'),(265,'36','04','26','2003','Cemplang'),(266,'36','04','26','2004','Pagintungan'),(267,'36','04','26','2005','Pasirbuyut'),(268,'36','04','26','2006','Majasari'),(269,'36','04','26','2007','Parakan'),(270,'36','04','26','2008','Kareo'),(271,'36','04','26','2009','Junti'),(272,'36','04','27','00','Ciomas'),(273,'36','04','27','2001','Ujungtebu'),(274,'36','04','27','2002','Siketug'),(275,'36','04','27','2003','Lebak'),(276,'36','04','27','2004','Pondok Kaharu'),(277,'36','04','27','2005','Sukabares'),(278,'36','04','27','2006','Sukarena'),(279,'36','04','27','2007','Sukadana'),(280,'36','04','27','2008','Cemplang'),(281,'36','04','27','2009','Cisitu'),(282,'36','04','27','2010','Citaman'),(283,'36','04','27','2011','Panyaungan Jaya'),(284,'36','04','28','00','Pabuaran'),(285,'36','04','28','2001','Pabuaran'),(286,'36','04','28','2006','Kadubeureum'),(287,'36','04','28','2007','Tanjungsari'),(288,'36','04','28','2009','Pancanegara'),(289,'36','04','28','2010','Sindangsari'),(290,'36','04','28','2012','Sindangheula'),(291,'36','04','28','2013','Pasanggrahan'),(292,'36','04','28','2015','Talaga Warna'),(293,'36','04','29','00','Padarincang'),(294,'36','04','29','2001','Padarincang'),(295,'36','04','29','2002','Bugel'),(296,'36','04','29','2003','Cibojong'),(297,'36','04','29','2004','Citasuk'),(298,'36','04','29','2005','Cisaat'),(299,'36','04','29','2006','Ciomas'),(300,'36','04','29','2007','Barugbug'),(301,'36','04','29','2008','Batu Kuwung'),(302,'36','04','29','2009','Kramatlaban'),(303,'36','04','29','2010','Kelumpang'),(304,'36','04','29','2011','Kadubeureum'),(305,'36','04','29','2012','Cipayung'),(306,'36','04','29','2013','Curug Goong'),(307,'36','04','29','2014','Kadu Kempong'),(308,'36','04','30','00','Anyar'),(309,'36','04','30','2001','Anyar'),(310,'36','04','30','2002','Sindang Mandi'),(311,'36','04','30','2003','Cikoneng'),(312,'36','04','30','2004','Tanjung Manis'),(313,'36','04','30','2005','Bandulu'),(314,'36','04','30','2006','Bunihara'),(315,'36','04','30','2007','Kosambironyok'),(316,'36','04','30','2008','Banjarsari'),(317,'36','04','30','2009','Mekarsari'),(318,'36','04','30','2010','Sindangkarya'),(319,'36','04','30','2011','Tambang Ayam'),(320,'36','04','30','2012','Grogol Indah'),(321,'36','04','31','00','Cinangka'),(322,'36','04','31','2001','Cinangka'),(323,'36','04','31','2002','Bantar Waru'),(324,'36','04','31','2003','Pasauran'),(325,'36','04','31','2004','Bulakan'),(326,'36','04','31','2005','Karang Suraga'),(327,'36','04','31','2006','Umbul Tanjung'),(328,'36','04','31','2007','Kubang Baros'),(329,'36','04','31','2008','Ranca Sanggal'),(330,'36','04','31','2009','Cikolelet'),(331,'36','04','31','2010','Sindang Laya'),(332,'36','04','31','2011','Kamasan'),(333,'36','04','31','2012','Bantar Wangi'),(334,'36','04','31','2013','Mekarsari'),(335,'36','04','31','2014','Baros Jaya'),(336,'36','04','32','00','Mancak'),(337,'36','04','32','2001','Mancak'),(338,'36','04','32','2002','Ciwarna'),(339,'36','04','32','2003','Angsana'),(340,'36','04','32','2004','Talaga'),(341,'36','04','32','2005','Cikedung'),(342,'36','04','32','2006','Sigedong'),(343,'36','04','32','2007','Sangiang'),(344,'36','04','32','2008','Pasirwaru'),(345,'36','04','32','2009','Waringin'),(346,'36','04','32','2010','Winong'),(347,'36','04','32','2011','Batukuda'),(348,'36','04','32','2012','Labuan'),(349,'36','04','32','2013','Bale Kambang'),(350,'36','04','32','2014','Bale Kencana'),(351,'36','04','33','00','Gunung Sari'),(352,'36','04','33','2001','Gunungsari'),(353,'36','04','33','2002','Ciherang'),(354,'36','04','33','2003','Tamiang'),(355,'36','04','33','2004','Sukalaba'),(356,'36','04','33','2005','Kadu Agung'),(357,'36','04','33','2006','Luwuk'),(358,'36','04','33','2007','Curug Sulanjana'),(359,'36','04','34','00','Bandung'),(360,'36','04','34','2001','Bandung'),(361,'36','04','34','2002','Mander'),(362,'36','04','34','2003','Penamping'),(363,'36','04','34','2004','Pangawinan'),(364,'36','04','34','2005','Malabar'),(365,'36','04','34','2006','Blokang'),(366,'36','04','34','2007','Babakan'),(367,'36','04','34','2008','Pringwulung'),(368,'36','04','35','00','Lebak Wangi'),(369,'36','04','35','2001','Kamaruton'),(370,'36','04','35','2002','Teras Bendung'),(371,'36','04','35','2003','Lebak Wangi'),(372,'36','04','35','2004','Lebak Kepuh'),(373,'36','04','35','2005','Kencana Harapan'),(374,'36','04','35','2006','Pegandikan'),(375,'36','04','35','2007','Purwadadi'),(376,'36','04','35','2008','Bolang'),(377,'36','04','35','2009','Tirem'),(378,'36','04','35','2010','Kebonratu');
/*!40000 ALTER TABLE `wilayah` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-25 20:55:49
