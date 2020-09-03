-- MySQL dump 10.13  Distrib 5.7.31, for Linux (x86_64)
--
-- Host: localhost    Database: ronanblog
-- ------------------------------------------------------
-- Server version	5.7.31-0ubuntu0.16.04.1

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
-- Current Database: `ronanblog`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `ronanblog` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ronanblog`;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_23_194231_create_posts_table',1),(4,'2019_09_05_215704_create_projects_table',1),(5,'2019_09_06_171504_add_image_to_posts',1),(6,'2019_09_07_030757_add_image_to_projects',1),(7,'2019_09_07_035647_replace_datetime_for_date_projects',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'My First Hackathon! HealthHack!','<h3><strong>How was my&nbsp;first hackathon?</strong></h3>\r\n\r\n<p>Let&#39;s just say, things were a bit rough around the edges. From having to learn how to use some technology I have never touched before, to having to&nbsp;restart our project half-way through, it was no breeze in the park to get through the 24 hour hackathon. While our finished product didn&#39;t win any awards, I am proud to say that we did have a &quot;working&quot; product to present after the 24 hour period! Looking back, I would say that while my first hackathon was quite the&nbsp;bumpy road, I had a ton of fun working with all of the cool trinkets and software available to us, all while&nbsp;getting to meet (and work along with)&nbsp;a whole lot of other tech-lovers like myself.</p>\r\n\r\n<p>&nbsp;</p>','2018-10-09 03:20:20','2020-09-04 03:58:55','healthhack_1_1599164861.png'),(2,'IEEE Remote Caregiver','<h3><strong>How was my first IEEE (Winter) Quarterly Project?</strong></h3>\r\n\r\n<p>Definitely, if I have the time, I would embark on another quarterly project. Over the course of 10 weeks, my team of 3 and I worked to develop a remote caregiver system that tracked patients remotely with sensors and a smartphone. I had a lot of fun, staying up late at my teammates dorm hacking away, learning how to develop Android apps and build Arduino circuits. IEEE also had sponsered events, where my team and I got to learn about different technologies and tools, such as machine learning software, soldering, and Android Firestore Database. Overall, this was a great experience, where I not only learned a bunch, but also made some new friends.</p>','2019-03-28 17:02:25','2020-09-04 03:58:36','ieee_1_1599166676.png');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (1,'Data Infrastructure -- Event Logging System','The system contains an api for logging and retrieving data and a spreadsheet style interface for interacting with logged data.','<h3><strong>Project Overview</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Over the course of 9 months, my team and I worked on developing an event logging system for our customer. Our customer eventually used our system to record data from medical equipment used by CoVid19 patients. The developed system consisted of two components: (1) an API for event submissions and event retrievals and (2) a spreadsheet style viewer with filtering, searching, and sorting capabilities.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<h3><strong>Technologies</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In building the Event Logger, the LAMP (Linux Apache MYSQL PHP) stack was employed. The web application was hosted on an AWS EC2 instance that ran Ubuntu 18.04 (Linux). The backend was built using a PHP framework called Laravel. The frontend made use of HTML5, CSS, and Vanilla Javascript, as well as MaterializeCSS and Bootstrap. Data Infrastructure services employed OAuth2 authorization protocols to ensure security. Swagger was used for documentation.</p>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<h3><strong>Project Timeline</strong></h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>March</strong>:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Project introduction, reading through documentation</p>\r\n	</li>\r\n	<li>\r\n	<p>Setting up basic schema with minimal parameters and exposing it through swagger for demonstrating what customer can expect in terms of live API</p>\r\n	</li>\r\n	<li>\r\n	<p>(GET) /event/{event_id} for retrieving event by event_id</p>\r\n	</li>\r\n	<li>\r\n	<p>(POST) /event&nbsp; for storing event; uses body params for specifying params</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>April:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Set up live server and hosts basic API and swagger documentation</p>\r\n	</li>\r\n	<li>\r\n	<p>Set up very basic spreadsheet UI for viewing events and with searching and sorting capabilities</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>May:&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Implement Oauth2 authorization for securing API requests and adding to swagger documentation</p>\r\n	</li>\r\n	<li>\r\n	<p>Add pagination, events per page, tooltips, and comments using models (per event entry)</p>\r\n	</li>\r\n	<li>\r\n	<p>Add validation on data entries</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>June:</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Clean up UI</p>\r\n	</li>\r\n	<li>\r\n	<p>Fixing minor bugs</p>\r\n	</li>\r\n	<li>\r\n	<p>Testing by customer</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>July-August:&nbsp;</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>AJAX for spreadsheet live update notifications</p>\r\n	</li>\r\n	<li>\r\n	<p>Filtering API (with extensive validation checks)</p>\r\n	</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>September-October</strong></p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Add calendar UI for selecting dates in filtering</p>\r\n	</li>\r\n	<li>\r\n	<p>Filtering on the spreadsheet UI</p>\r\n\r\n	<ul>\r\n		<li>\r\n		<p>Add saving and deleting and editing options to preset and saved filters</p>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Launch product</p>\r\n	</li>\r\n</ul>','software','2019-03-01','2019-11-07 01:01:01','tricorder_main_1599167413.png');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ronan Konishi','rkonishi@ucsd.edu',NULL,'$2y$10$o1W/uQPvgWm.Xnrvl/yh7.0lfme/cignrTpk2bF8sqcIw.aK4gZNG',NULL,'2020-09-04 03:04:08','2020-09-04 03:04:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-03 16:18:24
