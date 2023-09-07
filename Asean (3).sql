-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: asean
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'tin nội bộ','tin-noi-bo',0,'2023-08-23 15:00:03','2023-08-23 15:00:03'),(2,'tin ngành','tin-nganh',0,'2023-08-23 15:00:15','2023-08-23 15:00:15'),(3,'Đời sống','doi-song',0,'2023-08-24 01:33:44','2023-08-24 01:33:44');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_hightlights`
--

DROP TABLE IF EXISTS `customer_hightlights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_hightlights` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_hightlights`
--

LOCK TABLES `customer_hightlights` WRITE;
/*!40000 ALTER TABLE `customer_hightlights` DISABLE KEYS */;
INSERT INTO `customer_hightlights` VALUES (2,'YLIHO_logo.png','http://vn.dorco.co.kr/',1,'2023-08-24 04:09:19','2023-08-25 16:18:13'),(3,'mnA5F_logo asean.png','https://asean.org/',1,'2023-08-24 04:09:40','2023-08-24 04:18:07'),(4,'YLIHO_logo.png','http://vn.dorco.co.kr/',1,'2023-08-24 04:09:19','2023-08-25 16:18:14'),(5,'mnA5F_logo asean.png','https://asean.org/',1,'2023-08-24 04:09:40','2023-08-24 04:21:54'),(6,'YLIHO_logo.png','http://vn.dorco.co.kr/',1,'2023-08-24 04:09:19','2023-08-25 16:18:15'),(7,'mnA5F_logo asean.png','https://asean.org/',1,'2023-08-24 04:09:40','2023-08-24 04:21:55'),(8,'YLIHO_logo.png','http://vn.dorco.co.kr/',1,'2023-08-24 04:09:19','2023-08-25 16:18:16'),(9,'mnA5F_logo asean.png','https://asean.org/',1,'2023-08-24 04:09:40','2023-08-24 04:21:53');
/*!40000 ALTER TABLE `customer_hightlights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_reviews`
--

DROP TABLE IF EXISTS `customer_reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer_reviews` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_reviews`
--

LOCK TABLES `customer_reviews` WRITE;
/*!40000 ALTER TABLE `customer_reviews` DISABLE KEYS */;
INSERT INTO `customer_reviews` VALUES (1,'phan mạnh hào','96wBV_img user.png','lập trình viên','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',1,'2023-08-23 08:39:24','2023-08-27 16:19:51'),(3,'phan mạnh hào','FscWP_img user.png','quản trị viên','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',1,'2023-08-24 03:30:54','2023-08-27 16:19:09'),(4,'phan mạnh hào','c2m4i_img user.png','lập trình viên','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',1,'2023-08-23 08:39:24','2023-08-27 16:20:01'),(5,'phan mạnh hào','NVX7d_img user.png','quản trị viên','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',1,'2023-08-24 03:30:54','2023-08-27 16:19:20'),(6,'phan mạnh hào','cEi8N_img user.png','quản trị viên','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',1,'2023-08-24 03:30:54','2023-08-27 16:19:31'),(7,'phan mạnh hào','fYEg2_img user.png','lập trình viên','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',1,'2023-08-23 08:39:24','2023-08-27 16:20:12'),(8,'phan mạnh hào','XUGVW_img user.png','quản trị viên','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',1,'2023-08-24 03:30:54','2023-08-27 16:19:40');
/*!40000 ALTER TABLE `customer_reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_08_06_030047_create_sliders_table',1),(6,'2023_08_06_143241_create_categories_table',1),(7,'2023_08_07_004354_create_posts_table',1),(8,'2023_08_23_111502_create_customer_reviews_table',2),(9,'2023_08_23_171354_create_customer_hightlights',3),(10,'2023_08_23_220442_create_options_table',4),(13,'2023_08_24_102639_create_customer_reviews_table',5),(14,'2023_08_24_111025_create_customer_hightlights_table',6),(17,'2023_08_24_231426_create_services_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `options_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `options`
--

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;
INSERT INTO `options` VALUES (29,'post','{\"cate\":[\"1\",\"2\"]}','2023-08-28 03:43:45','2023-08-28 04:15:17'),(30,'home-power','{\"data\":{\"title\":\"\\u201cAN TO\\u00c0N C\\u1ee6A B\\u1ea0N L\\u00c0 S\\u1ee8 M\\u1ec6NH C\\u1ee6A ASEAN\\u201d\",\"des\":\"S\\u1ee9 m\\u1ec7nh c\\u1ee7a ch\\u00fang t\\u00f4i l\\u00e0 \\u0111em l\\u1ea1i nh\\u1eefng gi\\u1ea3i ph\\u00e1p v\\u00e0 d\\u1ecbch v\\u1ee5 t\\u1ed1t nh\\u1ea5t nh\\u1eb1m \\u0111\\u00e1p \\u1ee9ng nh\\u1eefng s\\u1ef1 k\\u1ef3 v\\u1ecdng c\\u1ee7a kh\\u00e1ch h\\u00e0ng, gi\\u00fap kh\\u00e1ch h\\u00e0ng \\u0111\\u1ea1t \\u0111\\u01b0\\u1ee3c m\\u1ee5c ti\\u00eau trong chi\\u1ebfn l\\u01b0\\u1ee3c kinh doanh l\\u00e2u d\\u00e0i c\\u1ee7a h\\u1ecd. Ch\\u00fang t\\u00f4i \\u0111\\u00e1nh gi\\u00e1 s\\u1ef1 th\\u00e0nh c\\u00f4ng d\\u1ef1a tr\\u00ean s\\u1ef1 t\\u00edn nhi\\u1ec7m c\\u1ee7a kh\\u00e1ch h\\u00e0ng v\\u00e0 c\\u00e1c \\u0111\\u1ed1i t\\u00e1c li\\u00ean quan. S\\u1ef1 th\\u00e0nh c\\u00f4ng \\u0111\\u00f3 t\\u1ea5t y\\u1ebfu ph\\u1ea3i d\\u1ef1a tr\\u00ean c\\u00e1c y\\u1ebfu t\\u1ed1 v\\u1ec1 ch\\u1ea5t l\\u01b0\\u1ee3ng cao, d\\u1ecbch v\\u1ee5 ho\\u00e0n h\\u1ea3o.\",\"images\":[\"image\\/power\\/1693195798_du-h\\u1ecdc-singapore-2021.jpg\",\"image\\/power\\/1693195798_du-hoc-singapore-nganh-cong-nghe-sinh-hoc.jpg\",\"image\\/power\\/1693195798_du-hoc-sinh-can-chuan-bi-nhung-gi-truoc-khi-bay.jpg\"]},\"power\":[{\"title\":\"T\\u1ea7m nh\\u00ecn\",\"content\":\"<p>Ch&uacute;ng t&ocirc;i lu&ocirc;n \\u0111\\u1eb7t ph&aacute;t tri\\u1ec3n b\\u1ec1n v\\u1eefng l&agrave;m c\\u1ed1t l&otilde;i trong l\\u0129nh v\\u1ef1c kinh doanh c\\u1ee7a m&igrave;nh. T\\u1eebng b\\u01b0\\u1edbc tr\\u1edf th&agrave;nh m\\u1ed9t trong nh\\u1eefng \\u0111\\u01a1n v\\u1ecb \\u01b0u th\\u1ebf trong l\\u0129nh v\\u1ef1c an to&agrave;n, v\\u1ec7 sinh lao \\u0111\\u1ed9ng v&agrave; \\u0111&agrave;o t\\u1ea1o ngh\\u1ec1.<\\/p>\",\"image-power\":\"image\\/power\\/1693195798_Object.png\"},{\"title\":\"S\\u1ee9 m\\u1ec7nh\",\"content\":\"<p>Ch&uacute;ng t&ocirc;i lu&ocirc;n \\u0111\\u1eb7t ph&aacute;t tri\\u1ec3n b\\u1ec1n v\\u1eefng l&agrave;m c\\u1ed1t l&otilde;i trong l\\u0129nh v\\u1ef1c kinh doanh c\\u1ee7a m&igrave;nh. T\\u1eebng b\\u01b0\\u1edbc tr\\u1edf th&agrave;nh m\\u1ed9t trong nh\\u1eefng \\u0111\\u01a1n v\\u1ecb \\u01b0u th\\u1ebf trong l\\u0129nh v\\u1ef1c an to&agrave;n, v\\u1ec7 sinh lao \\u0111\\u1ed9ng v&agrave; \\u0111&agrave;o t\\u1ea1o ngh\\u1ec1.<\\/p>\",\"image-power\":\"image\\/power\\/1693195798_Object.png\"},{\"title\":\"Gi\\u00e1 tr\\u1ecb c\\u1ed1t l\\u00f5i\",\"content\":\"<p>Ch&uacute;ng t&ocirc;i lu&ocirc;n \\u0111\\u1eb7t ph&aacute;t tri\\u1ec3n b\\u1ec1n v\\u1eefng l&agrave;m c\\u1ed1t l&otilde;i trong l\\u0129nh v\\u1ef1c kinh doanh c\\u1ee7a m&igrave;nh. T\\u1eebng b\\u01b0\\u1edbc tr\\u1edf th&agrave;nh m\\u1ed9t trong nh\\u1eefng \\u0111\\u01a1n v\\u1ecb \\u01b0u th\\u1ebf trong l\\u0129nh v\\u1ef1c an to&agrave;n, v\\u1ec7 sinh lao \\u0111\\u1ed9ng v&agrave; \\u0111&agrave;o t\\u1ea1o ngh\\u1ec1.<\\/p>\\r\\n\\r\\n<div class=\\\"ddict_btn\\\" style=\\\"left:136.367px; top:234px\\\"><img src=\\\"chrome-extension:\\/\\/bpggmmljdiliancllaapiggllnkbjocb\\/logo\\/48.png\\\" \\/><\\/div>\",\"image-power\":\"image\\/power\\/1693195798_Object.png\"}]}','2023-08-28 03:45:01','2023-08-28 04:09:58');
/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users_id` bigint unsigned NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `category_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_users_id_foreign` (`users_id`),
  KEY `posts_category_id_foreign` (`category_id`),
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `posts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Khái niệm về đặc khu kinh tế &amp; Đặc điểm nổi bật của đặc khu kinh tế','khai-niem-ve-dac-khu-kinh-te-amp-dac-diem-noi-bat-cua-dac-khu-kinh-te','<p>&ldquo;Đặc khu kinh tế&rdquo; l&agrave; cụm từ m&agrave; ch&uacute;ng ta thường được nghe kh&aacute; nhiều trong thời gian qua</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:114px; top:28px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n\r\n<div class=\"ddict_btn\" style=\"left:1218.23px; top:26px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>','<h2><strong>1. Đặc khu kinh tế l&agrave; g&igrave;?</strong></h2>\r\n\r\n<p>Kh&aacute;i niệm n&agrave;y c&ograve;n được gọi với c&aacute;i t&ecirc;n l&agrave; khu kinh tế đặc biệt, trong tiếng Anh được gọi l&agrave; Special Economic Zones v&agrave; thường được viết tắt l&agrave; SEZ. Đ&acirc;y l&agrave; khu kinh tế đặc biệt được hưởng trọn những luật kinh doanh v&agrave; thương mại kh&aacute;c với c&aacute;c phần c&ograve;n lại.</p>\r\n\r\n<p>C&aacute;c m&ocirc; h&igrave;nh đặc khu kinh tế SEZ đ&atilde; được th&agrave;nh lập v&agrave; ph&aacute;t triển ở nhiều quốc gia tr&ecirc;n thế giới, sớm nhất l&agrave; v&agrave;o những năm 1950 tại c&aacute;c nước c&ocirc;ng nghiệp.</p>\r\n\r\n<p><img alt=\"Khái niệm về đặc khu kinh tế\" src=\"https://citinews.net/uploads/2021/09/29/images/dac-khu-kinh-te-la-gi.jpg.webp\" style=\"height:427px; width:640px\" /><br />\r\n<em>Kh&aacute;i niệm về đặc khu kinh tế</em></p>\r\n\r\n<p>Đ&acirc;y l&agrave; khu vực c&oacute; địa giới x&aacute;c định, diện t&iacute;ch rộng lớn hơn khu c&ocirc;ng nghiệp, khu chế xuất thuộc l&atilde;nh thổ quốc gia. Trong khu vực n&agrave;y, c&aacute;c ưu đ&atilde;i về chế độ hải quan, ngoại hối, thuế,..sẽ được &aacute;p dụng đối với c&aacute;c nh&agrave; đầu tư trong nước v&agrave; quốc tế.&nbsp;</p>\r\n\r\n<p>Th&ocirc;ng thường, trong một khu kinh tế tự do c&oacute; thể bao gồm nhiều khu chức năng kh&aacute;c nhau như:&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Khu vực phi thuế quan</li>\r\n	<li>Khu vực c&ocirc;ng nghiệp</li>\r\n	<li>Khu vực chế xuất</li>\r\n	<li>Khu vực c&ocirc;ng nghệ cao</li>\r\n	<li>C&aacute;c tiểu khu dịch vụ</li>\r\n	<li>Khu nghỉ dưỡng, giải tr&iacute;</li>\r\n</ul>\r\n\r\n<p>Theo c&aacute;c thống k&ecirc; th&igrave; hiện nay tr&ecirc;n thế giới c&oacute; khoảng 200&nbsp;<strong><a href=\"https://vi.wikipedia.org/wiki/%C4%90%E1%BA%B7c_khu_kinh_t%E1%BA%BF\" rel=\"nofollow\">đặc khu kinh tế</a></strong>&nbsp;nằm ở hơn 60 quốc gia tr&ecirc;n thế giới. Tại Việt Nam ch&uacute;ng ta cũng c&oacute; 3 đặc khu kinh tế, đ&oacute; l&agrave;: Ph&uacute; Quốc - Ki&ecirc;n Giang, V&acirc;n Đồn - Quảng Ninh, Bắc V&acirc;n Phong - Kh&aacute;nh Ho&agrave;.</p>\r\n\r\n<p><strong>&gt;&gt;C&Oacute; THỂ BẠN QUAN T&Acirc;M&lt;&lt;</strong></p>\r\n\r\n<ul>\r\n	<li><em><strong><a href=\"https://citinews.net/dau-co-la-gi.html\">Đầu cơ l&agrave; g&igrave; &amp; Đầu cơ liệu c&oacute; phải l&agrave; đầu tư kh&ocirc;ng?</a></strong></em></li>\r\n	<li><em><strong><a href=\"https://citinews.net/giam-phat-la-gi.html\">Giảm ph&aacute;t nghĩa l&agrave; g&igrave; &amp; Nguy&ecirc;n nh&acirc;n, ảnh hưởng của giảm ph&aacute;t</a></strong></em></li>\r\n	<li><em><strong><a href=\"https://citinews.net/he-thong-crs-la-gi.html\">Phần mềm CRS l&agrave; g&igrave; &amp; CRS hỗ trợ ng&agrave;nh du lịch như thế n&agrave;o?</a></strong></em></li>\r\n</ul>\r\n\r\n<h2><strong>2. Lợi &iacute;ch m&agrave; đặc khu kinh tế đem lại</strong></h2>\r\n\r\n<p>N&oacute; đem đến rất nhiều lợi &iacute;ch, cụ thể như sau:</p>\r\n\r\n<ul>\r\n	<li>Khi SEZ được th&agrave;nh lập, những người d&acirc;n địa phương v&agrave; c&aacute;c v&ugrave;ng l&acirc;n cận sẽ c&oacute; một c&ocirc;ng việc để l&agrave;m, từ đ&oacute; gi&uacute;p giải quyết c&ocirc;ng ăn việc l&agrave;m cho người lao động</li>\r\n	<li>Th&uacute;c đẩy qu&aacute; tr&igrave;nh xuất khẩu h&agrave;ng h&oacute;a v&agrave; c&aacute;c dịch vụ li&ecirc;n quan.</li>\r\n	<li>L&agrave; tiền đề ph&aacute;t triển hệ thống khu vực hạ tầng tại khu vực.</li>\r\n	<li>Hạn chế t&igrave;nh trạng thuế m&agrave; tr&agrave;n lan.</li>\r\n	<li>N&acirc;ng cao hiệu quả kinh tế.</li>\r\n</ul>\r\n\r\n<h2><strong>3. Những đặc điểm nổi bật của đặc khu kinh tế</strong></h2>\r\n\r\n<p>Special Economic Zones c&oacute; những đặc điểm nổi bật m&agrave; những nơi kh&aacute;c kh&ocirc;ng c&oacute;, đ&oacute; l&agrave;:</p>\r\n\r\n<p><strong>Về cơ chế:</strong></p>\r\n\r\n<ul>\r\n	<li>Thời gian thu&ecirc; đất: C&aacute;c doanh nghiệp c&oacute; thể thu&ecirc; đất tại c&aacute;c đặc khu c&oacute; thời gian tối đa l&agrave; 99 năm.</li>\r\n	<li>Thuế thu nhập c&aacute; nh&acirc;n: Với những c&aacute; nh&acirc;n l&agrave;m việc trong c&aacute;c đặc khu sẽ được miễn thuế thu nhập c&aacute; nh&acirc;n trong v&ograve;ng 5 năm đầu ti&ecirc;n v&agrave; tiếp tục được giảm thuế thu nhập c&aacute; nh&acirc;n trong những năm sau đ&oacute;.</li>\r\n	<li>Tổ chức ch&iacute;nh quyền: Tại c&aacute;c đặc khu kinh tế sẽ kh&ocirc;ng c&oacute; hội đồng nh&acirc;n d&acirc;n m&agrave; thủ tướng sẽ trực tiếp bổ nhiệm trưởng đặc khu.</li>\r\n	<li>Sở hữu nh&agrave; ở với đối tượng l&agrave; người nước ngo&agrave;i: Người nước ngo&agrave;i c&oacute; thể tự do mua b&aacute;n nh&agrave; (lao động tối thiểu l&agrave; 3 th&aacute;ng), đối với biệt thự l&agrave; thời hạn vĩnh viễn, v&agrave; thời hạn 99 năm với chung cư.</li>\r\n	<li>Đối với Casino th&igrave; người Việt c&oacute; thể chơi tại đ&acirc;y.</li>\r\n</ul>\r\n\r\n<p><strong>C&aacute;c biện ph&aacute;p khuyến kh&iacute;ch để thu h&uacute;t nguồn vốn đầu tư trong nước v&agrave; quốc tế</strong></p>\r\n\r\n<ul>\r\n	<li>Hệ thống cơ sở hạ tầng được x&acirc;y dựng đồng bộ v&agrave; thuận lợi cho người sinh sống v&agrave; l&agrave;m việc tại đ&acirc;y.</li>\r\n	<li>M&ocirc;i trường kinh doanh l&yacute; tưởng, c&oacute; nhiều ch&iacute;nh s&aacute;ch để thu h&uacute;t đầu tư.</li>\r\n	<li>C&oacute; vị tr&iacute; địa l&yacute; thuận lợi, thường nằm ở những vị tr&iacute; chiến lược như cảng biển hoặc cảng h&agrave;ng kh&ocirc;ng quốc tế,...</li>\r\n	<li>Được hưởng nhiều ch&iacute;nh s&aacute;ch hỗ trợ v&agrave; ưu đ&atilde;i kh&aacute;c m&agrave; c&aacute;c v&ugrave;ng kh&aacute;c kh&ocirc;ng c&oacute; được.</li>\r\n</ul>\r\n\r\n<h2><strong>4. Những th&aacute;ch thức của đặc khu kinh tế</strong></h2>\r\n\r\n<p>Tuy c&oacute; nhiều &yacute; nghĩa v&agrave; được kỳ vọng rất nhiều nhưng nhiều đặc khu cũng phải đối mặt với kh&ocirc;ng &iacute;t những th&aacute;ch thức, cụ thể như sau:</p>\r\n\r\n<ul>\r\n	<li>Những ch&iacute;nh s&aacute;ch hỗ trợ v&agrave; ưu đ&atilde;i d&agrave;nh cho c&aacute;c đặc khu n&agrave;y đ&ocirc;i khi lại g&acirc;y ra sự m&eacute;o m&oacute; nền kinh tế.</li>\r\n	<li>Nếu kh&ocirc;ng quản l&yacute; tốt, những đặc khu kinh tế c&ograve;n c&oacute; thể l&agrave; nơi tạo điều kiện thuận lợi cho những h&agrave;nh vi tham nhũng, rửa tiền v&agrave; thao t&uacute;ng ch&iacute;nh s&aacute;ch.</li>\r\n	<li>Mặt kh&aacute;c, tại đ&acirc;y lấp đầy c&aacute;c dự &aacute;n đầu tư cũng phải trả gi&aacute; bằng chi ph&iacute; cơ hội kh&ocirc;ng hề rẻ, li&ecirc;n quan đến t&igrave;nh trạng thất thu thuế trong nhiều năm (do qu&aacute; rộng r&atilde;i trong quy định về mức thuế suất v&agrave; thời hạn được miễn giảm thuế).</li>\r\n</ul>\r\n\r\n<h2><strong>5. Luật đặc khu kinh tế l&agrave; g&igrave;?</strong></h2>\r\n\r\n<p>Dự thảo luật đặc khu kinh tế do Bộ Kế hoạch v&agrave; Đầu tư Việt Nam chủ tr&igrave; x&acirc;y dựng (gọi tắt l&agrave; Dự thảo Luật Đặc Khu).</p>\r\n\r\n<p>Dự thảo Luật Đặc khu đ&atilde; được Ch&iacute;nh phủ tr&igrave;nh Quốc hội cho &yacute; kiến tại kỳ họp thứ 4 (th&aacute;ng 10/2017), được tiếp thu chỉnh l&yacute; v&agrave; tr&igrave;nh tiếp v&agrave;o kỳ họp thứ 5 v&agrave; sau đ&oacute; tiếp tục được l&ugrave;i lại v&agrave;o kỳ họp thứ 6 Quốc hội kh&oacute;a 14 (th&aacute;ng 10.2018) để c&oacute; th&ecirc;m thời gian nghi&ecirc;n cứu.</p>','1OCKD_Hoc-bong-du-hoc-Singapore.jpg',1,1,2,'2023-08-23 15:00:30','2023-08-28 04:08:11'),(3,'Nước và sức khoẻ','nuoc-va-suc-khoe1','<p><strong>C&aacute;c biện ph&aacute;p khuyến kh&iacute;ch để thu h&uacute;t nguồn vốn đầu tư trong nước v&agrave; quốc tế</strong></p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:307.469px; top:9px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n\r\n<div class=\"ddict_btn\" style=\"left:1203px; top:53px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>','<h2><strong>4. Những th&aacute;ch thức của đặc khu kinh tế</strong></h2>\r\n\r\n<p>Tuy c&oacute; nhiều &yacute; nghĩa v&agrave; được kỳ vọng rất nhiều nhưng nhiều đặc khu cũng phải đối mặt với kh&ocirc;ng &iacute;t những th&aacute;ch thức, cụ thể như sau:</p>\r\n\r\n<ul>\r\n	<li>Những ch&iacute;nh s&aacute;ch hỗ trợ v&agrave; ưu đ&atilde;i d&agrave;nh cho c&aacute;c đặc khu n&agrave;y đ&ocirc;i khi lại g&acirc;y ra sự m&eacute;o m&oacute; nền kinh tế.</li>\r\n	<li>Nếu kh&ocirc;ng quản l&yacute; tốt, những đặc khu kinh tế c&ograve;n c&oacute; thể l&agrave; nơi tạo điều kiện thuận lợi cho những h&agrave;nh vi tham nhũng, rửa tiền v&agrave; thao t&uacute;ng ch&iacute;nh s&aacute;ch.</li>\r\n	<li>Mặt kh&aacute;c, tại đ&acirc;y lấp đầy c&aacute;c dự &aacute;n đầu tư cũng phải trả gi&aacute; bằng chi ph&iacute; cơ hội kh&ocirc;ng hề rẻ, li&ecirc;n quan đến t&igrave;nh trạng thất thu thuế trong nhiều năm (do qu&aacute; rộng r&atilde;i trong quy định về mức thuế suất v&agrave; thời hạn được miễn giảm thuế).</li>\r\n</ul>\r\n\r\n<h2><strong>5. Luật đặc khu kinh tế l&agrave; g&igrave;?</strong></h2>\r\n\r\n<p>Dự thảo luật đặc khu kinh tế do Bộ Kế hoạch v&agrave; Đầu tư Việt Nam chủ tr&igrave; x&acirc;y dựng (gọi tắt l&agrave; Dự thảo Luật Đặc Khu).</p>\r\n\r\n<p>Dự thảo Luật Đặc khu đ&atilde; được Ch&iacute;nh phủ tr&igrave;nh Quốc hội cho &yacute; kiến tại kỳ họp thứ 4 (th&aacute;ng 10/2017), được tiếp thu chỉnh l&yacute; v&agrave; tr&igrave;nh tiếp v&agrave;o kỳ họp thứ 5 v&agrave; sau đ&oacute; tiếp tục được l&ugrave;i lại v&agrave;o kỳ họp thứ 6 Quốc hội kh&oacute;a 14 (th&aacute;ng 10.2018) để c&oacute; th&ecirc;m thời gian nghi&ecirc;n cứu.</p>\r\n\r\n<p>Đến ng&agrave;y 11 th&aacute;ng 6 năm 2018, Quốc hội cho &yacute; kiến về việc r&uacute;t nội dung biểu quyết th&ocirc;ng qua Dự &aacute;n Luật Đặc khu, kết quả biểu quyết 423 đại biểu t&aacute;n th&agrave;nh r&uacute;t trong tổng số 432 đại biểu tham gia biểu quyết (tổng số đại biểu Quốc hội l&agrave; 487, 55 đại biểu kh&ocirc;ng tham gia biểu quyết) chiếm tỉ lệ 87.45%.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:202px; top:32px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>','gwKKg_du-hoc-singapore-nganh-cong-nghe-sinh-hoc.jpg',1,1,2,'2023-08-24 01:55:51','2023-08-28 04:07:27'),(4,'Ví VTC Pay là gì? Cách tạo tài khoản và sử dụng ví VTC Pay','vi-vtc-pay-la-gi-cach-tao-tai-khoan-va-su-dung-vi-vtc-pay','<p>V&iacute; VTC Pay l&agrave; g&igrave;? C&aacute;ch tạo t&agrave;i khoản v&agrave; sử dụng v&iacute; VTC Pay</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:114px; top:20px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n\r\n<div class=\"ddict_btn\" style=\"left:1233.14px; top:22px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>\r\n\r\n<div class=\"ddict_btn\" style=\"left:691.938px; top:25px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>','<h2><strong>5. Luật đặc khu kinh tế l&agrave; g&igrave;?</strong></h2>\r\n\r\n<p>Dự thảo luật đặc khu kinh tế do Bộ Kế hoạch v&agrave; Đầu tư Việt Nam chủ tr&igrave; x&acirc;y dựng (gọi tắt l&agrave; Dự thảo Luật Đặc Khu).</p>\r\n\r\n<p>Dự thảo Luật Đặc khu đ&atilde; được Ch&iacute;nh phủ tr&igrave;nh Quốc hội cho &yacute; kiến tại kỳ họp thứ 4 (th&aacute;ng 10/2017), được tiếp thu chỉnh l&yacute; v&agrave; tr&igrave;nh tiếp v&agrave;o kỳ họp thứ 5 v&agrave; sau đ&oacute; tiếp tục được l&ugrave;i lại v&agrave;o kỳ họp thứ 6 Quốc hội kh&oacute;a 14 (th&aacute;ng 10.2018) để c&oacute; th&ecirc;m thời gian nghi&ecirc;n cứu.</p>\r\n\r\n<p>Đến ng&agrave;y 11 th&aacute;ng 6 năm 2018, Quốc hội cho &yacute; kiến về việc r&uacute;t nội dung biểu quyết th&ocirc;ng qua Dự &aacute;n Luật Đặc khu, kết quả biểu quyết 423 đại biểu t&aacute;n th&agrave;nh r&uacute;t trong tổng số 432 đại biểu tham gia biểu quyết (tổng số đại biểu Quốc hội l&agrave; 487, 55 đại biểu kh&ocirc;ng tham gia biểu quyết) chiếm tỉ lệ 87.45%.</p>\r\n\r\n<h2><strong>6. Đặc khu kinh tế kh&aacute;c biệt như thế n&agrave;o so với c&aacute;c khu c&ocirc;ng nghiệp?</strong></h2>\r\n\r\n<p>Do c&oacute; những đặc điểm ri&ecirc;ng m&agrave; c&aacute;c khu kh&aacute;c kh&ocirc;ng thể c&oacute; được n&ecirc;n đặc khu kinh tế đương nhi&ecirc;n sẽ kh&aacute;c biệt so với c&aacute;c khu c&ocirc;ng nghiệp, cụ thể như sau:</p>\r\n\r\n<div class=\"ddict_btn\" style=\"left:200.75px; top:43px\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/48.png\" /></div>','iUrMK_du-hoc-uc-nganh-ky-su-dieu-kien-cac-truong-dao-tao-co-hoi-dinh-cu.jpg',1,1,1,'2023-08-24 01:56:06','2023-08-28 04:28:13'),(5,'Danh mục thiết bị bắt buộc phải kiểm định an toàn','danh-muc-thiet-bi-bat-buoc-phai-kiem-dinh-an-toan1','<p>Theo quy định của Nh&agrave; nước đối với c&aacute;c thiết bị m&aacute;y m&oacute;c c&oacute; nguy cơ g&acirc;y mất an to&agrave;n lao động khi vận h&agrave;nh v&agrave; ảnh hưởng &hellip;</p>','<p>1. Ng&acirc;n h&agrave;ng Vietcombank c&oacute; cho vay online kh&ocirc;ng? H&igrave;nh thức vay vốn l&agrave; một trong những dịch vụ h&agrave;ng đầu được c&aacute;c ng&acirc;n h&agrave;ng đẩy mạnh trong việc đa dạng c&aacute;c loại h&igrave;nh vay v&agrave; linh động trong l&atilde;i suất. Đặc biệt với nhu cầu về c&aacute;c khoản vay nhanh, &iacute;t thủ tục, kh&ocirc;ng cần nhiều hồ sơ giấy tờ đang được ưa chuộng hiện nay. Người vay sẽ nhanh ch&oacute;ng nhận được những khoản tiền để giải quyết được c&aacute;c vấn đề t&agrave;i ch&iacute;nh thuận lợi. Vietcombank l&agrave; một trong những ng&acirc;n h&agrave;ng lớn tại nước ta c&oacute; một lượng kh&aacute;ch h&agrave;ng lu&ocirc;n tin tưởng v&agrave; ủng hộ đặc biệt nổi bật với h&igrave;nh thức vay tiền online. Vay online hiểu một c&aacute;ch đơn giản ch&iacute;nh l&agrave; h&igrave;nh thức vay t&iacute;n chấp l&agrave; kh&ocirc;ng cần t&agrave;i sản thế chấp. Kh&aacute;ch h&agrave;ng chỉ cần truy cập v&agrave;o website của Vietcombank v&agrave; đăng k&yacute; vay trực tuyến sẽ được nh&acirc;n vi&ecirc;n tư vấn hỗ trợ v&agrave; hướng dẫn đầy đủ về thủ tục. Vay online Vietcombank mang lại nhiều lợi &iacute;ch cho người vay, b&ecirc;n cạnh đ&oacute; Vietcombank l&agrave; một ng&acirc;n h&agrave;ng lớn v&agrave; uy t&iacute;n n&ecirc;n kh&aacute;ch h&agrave;ng c&oacute; thể ho&agrave;n to&agrave;n tin tưởng v&agrave; sử dụng dịch vụ. Hướng dẫn c&aacute;ch vay tiền ng&acirc;n h&agrave;ng Vietcombank online Hướng dẫn c&aacute;ch vay tiền ng&acirc;n h&agrave;ng Vietcombank online 2. C&aacute;ch vay tiền online Vietcombank 2.1. C&aacute;c h&igrave;nh thức vay Vietcombank trực tuyến D&ugrave; l&agrave; h&igrave;nh thức vay t&iacute;n chấp, vay online nhưng Vietcombank vẫn cố gắng ph&aacute;t triển đa dạng c&aacute;c h&igrave;nh thức vay để kh&aacute;ch h&agrave;ng c&oacute; thể lựa chọn cho ph&ugrave; hợp với nhu cầu sử dụng của c&aacute; nh&acirc;n. Kh&aacute;ch h&agrave;ng c&oacute; thể tham khảo c&aacute;c g&oacute;i vay sau: 2.1.1. Vay c&aacute;n bộ nh&acirc;n vi&ecirc;n G&oacute;i vay n&agrave;y c&oacute; mức vay thấp nhất trong h&igrave;nh thức vay online của ng&acirc;n h&agrave;ng thường hướng tới c&aacute;c c&aacute;n bộ, nh&acirc;n vi&ecirc;n l&agrave;m việc tại cơ quan nh&agrave; nước hay tổ chức c&oacute; nhu cầu vay vốn. Với thời hạn vay kh&aacute; linh động từ 12 - 60 th&aacute;ng, hạn mức vay dưới 200.000.00 VNĐ t&ugrave;y v&agrave;o nhu cầu của mỗi c&aacute; nh&acirc;n. 2.1.2. Vay c&aacute;n bộ quản l&yacute; Đ&acirc;y l&agrave; g&oacute;i vay c&oacute; mức vay cao tối đa l&agrave; 300.000.000 VNĐ d&agrave;nh cho c&aacute;c kh&aacute;ch h&agrave;ng l&agrave; c&aacute;n bộ, vi&ecirc;n chức nh&agrave; nước, người lao động tại c&aacute;c tổ chức c&oacute; nhu cầu v&agrave; thỏa m&atilde;n c&aacute;c y&ecirc;u cầu của ng&acirc;n h&agrave;ng Vietcombank. 2.1.3. Vay thấu chi t&agrave;i khoản c&aacute; nh&acirc;n G&oacute;i vay n&agrave;y d&agrave;nh c&oacute; kh&aacute;ch h&agrave;ng đ&atilde; c&oacute; t&agrave;i khoản ng&acirc;n h&agrave;ng tại Vietcombank v&agrave; đang sử dụng đồng thời 1 trong 2 g&oacute;i vay c&aacute;n bộ nh&acirc;n vi&ecirc;n hoặc vay c&aacute;n bộ quản l&yacute;. Hiện g&oacute;i vay n&agrave;y cũng được kh&aacute; nhiều người lựa chọn trong những nhu cầu ngắn hạn v&agrave; cần tiền gấp. 2.2. L&atilde;i suất vay online ng&acirc;n h&agrave;ng Vietcombank L&agrave; h&igrave;nh thức vay t&iacute;n chấp, vay nhanh m&agrave; kh&ocirc;ng cần t&agrave;i sản thế chấp ch&iacute;nh v&igrave; vậy mức l&atilde;i suất sẽ cao hơn rất nhiều so với vay c&oacute; t&agrave;i sản thế chấp th&ocirc;ng thường. T&ugrave;y v&agrave;o từng g&oacute;i vay kh&aacute;c nhau sẽ c&oacute; mức l&atilde;i suất kh&aacute;c nhau khi vay tiền ng&acirc;n h&agrave;ng Vietcombank online cụ thể như sau: Sản phẩm vay L&atilde;i suất (%/năm) Vay t&iacute;n chấp c&aacute;n bộ, nh&acirc;n vi&ecirc;n 16% Vay t&iacute;n chấp c&aacute;n bộ quản l&yacute; 15% Vay thấu chi t&agrave;i khoản c&aacute; nh&acirc;n 15% 3. Hướng dẫn đăng k&yacute; vay online Vietcombank 3.1. Điều kiện vay tiền online Vietcombank Để c&oacute; thể vay trực tuyến tại Vietcombank kh&aacute;ch h&agrave;ng cần phải đảm bảo thỏa m&atilde;n c&aacute;c điều kiện cơ bản m&agrave; ng&acirc;n h&agrave;ng đưa ra với h&igrave;nh thức vay n&agrave;y cụ thể l&agrave;: Kh&aacute;ch h&agrave;ng vay l&agrave; c&ocirc;ng d&acirc;n Việt Nam trong độ tuổi lao động. Thuộc độ tuổi từ 21 - 58 tuổi kể từ thời gian đăng k&yacute; đến khi tất to&aacute;n khoản vay. Thuộc c&aacute;c tỉnh, th&agrave;nh phố c&oacute; ng&acirc;n h&agrave;ng Vietcombank c&oacute; chi nh&aacute;nh hoạt động. C&oacute; thu nhập tối thiểu h&agrave;ng th&aacute;ng l&agrave; 5.000.000VNĐ đảm bảo c&oacute; thể thanh to&aacute;n khoản vay. Người vay phải kh&ocirc;ng c&oacute; c&aacute;c khoản nợ xấu tại tất cả c&aacute;c tổ chức t&iacute;n dụng hay tại ng&acirc;n h&agrave;ng n&agrave;o. Chứng minh mục đ&iacute;ch vay r&otilde; r&agrave;ng, hợp l&yacute;. Đ&acirc;y l&agrave; một trong số những điều kiện cơ bản m&agrave; hầu hết c&aacute;c ng&acirc;n h&agrave;ng cho vay t&iacute;n dụng online đều y&ecirc;u cầu chứ kh&ocirc;ng ri&ecirc;ng với Vietcombank. Nếu kh&aacute;ch h&agrave;ng kh&ocirc;ng thỏa m&atilde;n 1 trong c&aacute;c điều kiện tr&ecirc;n th&igrave; kh&oacute; c&oacute; thể vay theo h&igrave;nh thức n&agrave;y. Điều kiện, hồ sơ, thủ tục đăng k&yacute; vay tiền online tại Vietcombank Điều kiện, hồ sơ, thủ tục đăng k&yacute; vay tiền online tại Vietcombank 3.2. Hồ sơ thủ tục vay online Vietcombank Sau khi chắc chắn bản th&acirc;n đủ điều kiện để vay t&iacute;n chấp online tại Vietcombank bạn cần tiến h&agrave;nh chuẩn bị hồ sơ, giấy tờ hỗ trợ cho qu&aacute; tr&igrave;nh l&agrave;m thủ tục được nhanh ch&oacute;ng hơn. C&aacute;c giấy tờ cần thiết cho h&igrave;nh thức vay n&agrave;y gồm: Giấy tờ c&aacute; nh&acirc;n l&agrave; CMND, thẻ căn cước c&ocirc;ng d&acirc;n hoặc hộ chiếu c&ograve;n hiệu lực bản sao v&agrave; bản ch&iacute;nh. Sổ hộ khẩu thường tr&uacute; hoặc giấy đăng k&yacute; tạm tr&uacute; Bản sao hợp đồng lao động, k&ecirc; khai 3 th&aacute;ng lương gần nhất Thẻ bảo hiểm y tế bản sao Ngo&agrave;i ra sẽ c&ograve;n một số giấy tờ kh&aacute;c c&oacute; thể sẽ ph&aacute;t sinh trong qu&aacute; tr&igrave;nh l&agrave;m việc m&agrave; ng&acirc;n h&agrave;ng sẽ y&ecirc;u cầu. XEM TH&Ecirc;M: Thủ tục vay tiền thế chấp của ng&acirc;n h&agrave;ng Vietcombank Hướng dẫn vay tiền t&iacute;n chấp của Vietcombank Gửi tiết kiệm online của ng&acirc;n h&agrave;ng Vietcombank l&agrave; g&igrave;? 3.3. Quy tr&igrave;nh vay trực tuyến Vietcombank D&ugrave; l&agrave; vay theo h&igrave;nh thức n&agrave;o th&igrave; tất cả c&aacute;c khoản vay tại ng&acirc;n h&agrave;ng đều phải trải qua những quy tr&igrave;nh nhất định. Đặc biệt với vay vốn online Vietcombank qu&aacute; tr&igrave;nh kiểm tra sẽ được diễn ra nghi&ecirc;m ngặt hơn nhưng vẫn đảm bảo được t&iacute;nh nhanh ch&oacute;ng v&agrave; thuận tiện của h&igrave;nh thức n&agrave;y. Bước 1: Thực hiện đăng k&yacute; th&ocirc;ng tin vay t&iacute;n dụng tr&ecirc;n website của Vietcombank Bước 2: Nh&acirc;n vi&ecirc;n ng&acirc;n h&agrave;ng sẽ li&ecirc;n hệ hỗ trợ v&agrave; tư vấn kh&aacute;ch h&agrave;ng chuẩn bị hồ sơ v&agrave; giấy tờ cần thiết. Bước 3: Kh&aacute;ch h&agrave;ng chuẩn bị hồ sơ Bước 4: Thẩm định hồ sơ vay vốn theo ti&ecirc;u ch&iacute; của ng&acirc;n h&agrave;ng, nếu đạt sẽ được nhận th&ocirc;ng b&aacute;o về khoản vay đ&oacute;. Bước 5: K&yacute; hợp đồng v&agrave; giải ng&acirc;n, tiền nhận sẽ th&ocirc;ng qua thẻ m&agrave; kh&ocirc;ng cần đến ng&acirc;n h&agrave;ng. Nội dung tr&ecirc;n đ&acirc;y đ&atilde; đưa ra những th&ocirc;ng tin li&ecirc;n quan đến h&igrave;nh thức vay tiền online Vietcombank một c&aacute;ch kh&aacute; chi tiết v&agrave; đầy. Hi vọng những chia sẻ n&agrave;y sẽ hỗ trợ được phần n&agrave;o khi bạn c&oacute; &yacute; định vay hoặc t&igrave;m hiểu về c&aacute;c g&oacute;i vay trực tuyến của Vietcombank.</p>','4j3G9_du-hoc-sinh-can-chuan-bi-nhung-gi-truoc-khi-bay-2.jpg',1,1,2,'2023-08-27 03:39:36','2023-08-28 04:29:33'),(6,'[UPDATE] Hạn mức giao dịch Vietcombank mới nhất năm 2022','[update]-han-muc-giao-dich-vietcombank-moi-nhat-nam-2022','<p>Hiện nay với c&aacute;c kh&aacute;ch h&agrave;ng sử dụng dịch vụ của ng&acirc;n h&agrave;ng Vietcombank c&oacute; thể chuyển tiền theo nhiều h&igrave;nh thức kh&aacute;c nhau v&ocirc; c&ugrave;ng đơn giản v&agrave; tiện lợi. Nhưng đối với mỗi h&igrave;nh thức sẽ c&oacute; quy định về hạn mức chuyển tiền kh&aacute;c nhau. Vậy hạn mức chuyển tiền Vietcombank như thế n&agrave;o? C&ugrave;ng ch&uacute;ng t&ocirc;i t&igrave;m hiểu chi tiết qua b&agrave;i viết dưới đ&acirc;y.</p>','<p>1. C&aacute;c h&igrave;nh thức chuyển tiền Vietcombank C&oacute; thể thấy nhu cầu chuyển tiền giữa c&aacute;c t&agrave;i khoản nội bộ Vietcombank, ngo&agrave;i ng&acirc;n h&agrave;ng v&agrave; quốc tế l&agrave; rất lớn đặc biệt trong thời đại hiện nay. Do đ&oacute; m&agrave; ng&acirc;n h&agrave;ng lu&ocirc;n ph&aacute;t triển đồng thời nhiều h&igrave;nh thức v&agrave; từng hạn mức giao dịch Vietcombank kh&aacute;c nhau ph&ugrave; hợp với nhu cầu của mọi đối tượng kh&aacute;ch h&agrave;ng. C&aacute;c h&igrave;nh thức chuyển tiền c&oacute; tại Vietcombank như sau: Chuyển tiền trực tiếp tại quầy giao dịch: Đ&acirc;y l&agrave; h&igrave;nh thức chuyển tiền truyền thống từ trước đến nay ng&acirc;n h&agrave;ng vẫn đang &aacute;p dụng. Th&ocirc;ng thường những người sử dụng c&aacute;ch chuyển n&agrave;y khi t&agrave;i khoản thanh to&aacute;n kh&ocirc;ng đủ số tiền cần chuyển hoặc chuyển mới một số lượng lớn vượt qu&aacute; hạn mức của c&aacute;c h&igrave;nh thức chuyển online kh&aacute;c. Chuyển tiền qua m&aacute;y ATM: C&aacute;ch chuyển tiền n&agrave;y hiện nay &iacute;t được sử dụng hơn so với c&aacute;c h&igrave;nh thức c&ograve;n lại. Kh&aacute;ch h&agrave;ng c&oacute; nhu cầu chuyển tiền sẽ tới trực tiếp c&aacute;c c&acirc;y ATM v&agrave; thực hiện. B&ecirc;n cạnh đ&oacute; h&igrave;nh thức n&agrave;y cũng c&oacute; những ưu điểm trong việc c&oacute; thể chuyển tiền 24/24 bất kể khi n&agrave;o cần m&agrave; kh&ocirc;ng phụ thuộc v&agrave;o thời gian l&agrave;m việc của ng&acirc;n h&agrave;ng. Chuyển tiền qua dịch vụ internet banking hoặc mobile banking của ng&acirc;n h&agrave;ng. Đ&acirc;y l&agrave; h&igrave;nh thức chuyển tiền được sử dụng phổ biến v&agrave; rộng r&atilde;i nhất hiện nay. Ch&uacute;ng được triển khai từ khi ng&acirc;n h&agrave;ng trực tuyến ra đời thực sự đ&atilde; mang đến hiệu quả v&ocirc; c&ugrave;ng lớn. Kh&aacute;ch h&agrave;ng c&oacute; thể thực hiện chuyển tiền chỉ bằng v&agrave;i thao t&aacute;c đơn giản tr&ecirc;n m&aacute;y t&iacute;nh, laptop hoặc điện thoại di động th&ocirc;ng minh m&agrave; kh&ocirc;ng mất thời gian cũng như chi ph&iacute; thấp. T&igrave;m hiểu về hạn mức chuyển tiền của Vietcombank của từng h&igrave;nh thức T&igrave;m hiểu về hạn mức chuyển tiền của Vietcombank của từng h&igrave;nh thức 2. Hạn mức chuyển tiền Vietcombank mới nhất 2022 2.1. Hạn mức chuyển tiền tại Vietcombank - x&aacute;c thực Smart OTP Đối với mỗi một h&igrave;nh thức chuyển tiền tại ng&acirc;n h&agrave;ng Vietcombank đang &aacute;p dụng đều c&oacute; những quy định về hạn mức v&agrave; đối tượng kh&aacute;c nhau. Ch&iacute;nh v&igrave; vậy l&agrave; một kh&aacute;ch h&agrave;ng sử dụng dịch vụ của ng&acirc;n h&agrave;ng cần phải nắm r&otilde; để thuận tiện khi c&oacute; nhu cầu giao dịch. Nếu kh&aacute;ch h&agrave;ng chuyển tiền qua h&igrave;nh thức x&aacute;c thực bằng Smart OTP th&igrave; hạn mức chuyển tiền của Vietcombank cụ thể như sau: Loại giao dịch Hạn mức KHCN thường KHCN Priority Chuyển khoản nội bộ c&ugrave;ng t&agrave;i khoản Kh&ocirc;ng giới hạn Chuyển khoản nội bộ kh&aacute;c chủ t&agrave;i khoản 1 tỷ đồng/ng&agrave;y 2 tỷ đồng/ng&agrave;y Chuyển tiền nhanh 24/7 qua số thẻ 300 triệu đồng /giao dịch. 1 tỷ đồng/ng&agrave;y 300 triệu đồng /giao dịch 2 tỷ đồng/ng&agrave;y Chuyển tiền nhanh 24/7 qua số t&agrave;i khoản Chuyển khoản li&ecirc;n ng&acirc;n h&agrave;ng th&ocirc;ng thường 1 tỷ đồng/giao dịch 1 tỷ đồng/ng&agrave;y 2 tỷ đồng/giao dịch 2 tỷ đồng/ng&agrave;y Chuyển tiền nhận tiền mặt tại quầy/chuyển tiền từ thiện C&aacute;c giao dịch thanh to&aacute;n h&oacute;a đơn, dịch vụ t&agrave;i ch&iacute;nh 1 tỷ đồng/ng&agrave;y 2 tỷ đồng/ng&agrave;y C&aacute;c giao dịch thuộc nh&oacute;m tiền gửi, thanh to&aacute;n sao k&ecirc; thẻ t&iacute;n dụng, nộp ng&acirc;n s&aacute;ch nh&agrave; nước, nộp lệ ph&iacute; hải quan Kh&ocirc;ng giới hạn 2.2. Hạn mức chuyển tiền Vietcombank - X&aacute;c thực bằng SMS OTP Với hạn mức giao dịch Vietcombank đ&atilde; quy định theo từng h&igrave;nh thức chuyển tiền l&agrave; c&aacute;ch để đảm bảo an to&agrave;n cho t&agrave;i sản v&agrave; t&agrave;i sản của kh&aacute;ch h&agrave;ng. B&ecirc;n cạnh đ&oacute; l&agrave; tr&aacute;nh được c&aacute;c trường hợp rửa tiền của những kẻ xấu. Khi người d&ugrave;ng lựa chọn h&igrave;nh thức chuyển tiền x&aacute;c thực bằng SMS OTP c&oacute; hạn mức chi tiết như sau: Loại giao dịch Hạn mức Giao dịch chuyển khoản nội bộ trong hệ thống VCB v&agrave; c&ugrave;ng chủ t&agrave;i khoản Kh&ocirc;ng giới hạn Chuyển khoản nội bộ trong hệ thống VCB kh&aacute;c chủ t&agrave;i khoản 100 triệu VNĐ/giao dịch 100 triệu VNĐ/ng&agrave;y Chuyển tiền nhanh 24/7 qua số thẻ 50 triệu VNĐ/giao dịch 100 triệu VNĐ/ng&agrave;y Chuyển tiền nhanh 24/7 qua số t&agrave;i khoản Chuyển khoản li&ecirc;n ng&acirc;n h&agrave;ng th&ocirc;ng thường 100 triệu VNĐ/giao dịch 100 triệu VNĐ/ng&agrave;y Chuyển tiền cho người nhận tiền mặt tại quầy/Chuyển tiền từ thiện C&aacute;c giao dịch Thanh to&aacute;n h&oacute;a đơn, Dịch vụ t&agrave;i ch&iacute;nh, Nộp ng&acirc;n s&aacute;ch nh&agrave; nước 100 triệu VNĐ/ng&agrave;y C&aacute;c giao dịch thuộc nh&oacute;m Tiền gửi, Thanh to&aacute;n sao k&ecirc; thẻ t&iacute;n dụng Kh&ocirc;ng giới hạn 2.4. Hạn chuyển tiền qua thẻ ghi nợ nội địa Vietcombank Ngo&agrave;i ra với h&igrave;nh thức chuyển tiền qua thẻ ghi nợ được ph&acirc;n chia theo hạng thẻ v&agrave; phương thức chuyển kh&aacute;c nhau. Cụ thể hạn mức hạn mức chuyển khoản của Vietcombank như sau: Giao dịch Hạng chuẩn Hạng v&agrave;ng Hạng đặc biệt Chuyển khoản Số tiền chuyển khoản tối đa trong 1 ng&agrave;y 100 triệu VNĐ 100 triệu VNĐ 100 triệu VNĐ Hạn mức chuyển khoản tối đa/giao dịch Dưới 100 triệu VNĐ Dưới 100 triệu VNĐ Dưới 100 triệu VNĐ Chuyển tiền li&ecirc;n ng&acirc;n h&agrave;ng qua thẻ K&ecirc;nh ATM Hạn mức chuyển khoản tối đa 01 lần 50.000.000 VNĐ Hạn mức chuyển khoản tối đa 01 ng&agrave;y 100.000.000 VNĐ K&ecirc;nh VCB-iB@nking Hạn mức chuyển khoản tối đa 01 lần 30.000.000 VNĐ Hạn mức chuyển khoản tối đa 01 ng&agrave;y 60.000.000 VNĐ K&ecirc;nh VCB-Mobile B@nking Hạn mức chuyển khoản tối đa 01 lần 20.000.000 VNĐ Hạn mức chuyển khoản tối đa 01 ng&agrave;y 50.000.000 VNĐ Hướng dẫn c&aacute;ch n&acirc;ng hạn mức chuyển tiền Vietcombank Hướng dẫn c&aacute;ch n&acirc;ng hạn mức chuyển tiền Vietcombank 3. Hướng dẫn c&aacute;ch n&acirc;ng hạn mức chuyển tiền Vietcombank Theo quy định của Vietcombank việc chuyển tiền của mọi kh&aacute;ch h&agrave;ng sử dụng dịch vụ của ng&acirc;n h&agrave;ng đều phải tu&acirc;n thủ hạn mức đ&atilde; được đề ra. Nhưng nếu kh&aacute;ch h&agrave;ng muốn n&acirc;ng hạn mức giao dịch Vietcombank th&igrave; phải n&acirc;ng hạng thẻ, hạng kh&aacute;ch h&agrave;ng hoặc đăng k&yacute; sử dụng h&igrave;nh thức x&aacute;c nhận kh&aacute;c. N&acirc;ng hạng kh&aacute;ch h&agrave;ng: Đ&acirc;y l&agrave; h&igrave;nh thức được kh&aacute; nhiều người sử dụng trong việc n&acirc;ng hạng mức từ kh&aacute;ch h&agrave;ng thường l&ecirc;n Priority. Nhưng cần phải đảm bảo một số điều kiện d&agrave;nh ri&ecirc;ng cho kh&aacute;ch h&agrave;ng n&agrave;y theo quy định của ng&acirc;n h&agrave;ng. Đăng k&yacute; h&igrave;nh thức x&aacute;c nhận chuyển tiền: Như đ&atilde; biết với h&igrave;nh thức chuyển tiền x&aacute;c nhận bằng Smart OTP c&oacute; hạn mức cao hơn so với chuyển qua OTP SMS. Để thực hiện đăng k&yacute; chuyển đổi kh&aacute;ch h&agrave;ng mang CMND đến chi nh&aacute;nh ng&acirc;n h&agrave;ng để được hỗ trợ. XEM TH&Ecirc;M: Ph&iacute; chuyển tiền của ng&acirc;n h&agrave;ng Vietcombank l&agrave; bao nhi&ecirc;u? Hướng dẫn c&aacute;ch chuyển tiền của Vietcombank Thủ tục vay t&iacute;n chấp ng&acirc;n h&agrave;ng Vietcombank 4. C&aacute;ch c&agrave;i đặt hạn mức chuyển tiền Vietcombank Đối với những kh&aacute;ch h&agrave;ng sử dụng dịch vụ internet banking hay mobile banking để chuyển tiền n&ecirc;n c&agrave;i đặt số tiền chuyển khoản tối đa Vietcombank sẽ thuận lợi cho qu&aacute; tr&igrave;nh giao dịch của mỗi người. C&aacute;c bước thực hiện c&agrave;i đặt như sau: Bước 1: Đăng nhập v&agrave;o ứng dụng của ng&acirc;n h&agrave;ng Vietcombank. Bước 2: Tr&ecirc;n thanh menu chọn mục &ldquo;C&agrave;i đặt hạn mức chuyển tiền&rdquo;. Bước 3: Lựa chọn hạn mức mong muốn. Bước 4: X&aacute;c thực bằng m&atilde; OTP để ho&agrave;n tất c&agrave;i đặt. Với c&aacute;c bước đơn giản tr&ecirc;n đ&acirc;y việc c&agrave;i đặt hạn mức chuyển tiền đ&atilde; được thực hiện th&agrave;nh c&ocirc;ng v&ocirc; c&ugrave;ng dễ d&agrave;ng. Nội dung b&agrave;i viết tr&ecirc;n đ&acirc;y đ&atilde; giới thiệu đến bạn hạn mức chuyển tiền Vietcombank kh&aacute; chi tiết v&agrave; đầy đủ. Citinews.net hy vọng những th&ocirc;ng tin n&agrave;y trở n&ecirc;n c&oacute; &iacute;ch v&agrave; cần thiết đối với bạn trong qu&aacute; tr&igrave;nh sử dụng dịch vụ của ng&acirc;n h&agrave;ng Vietcombank.</p>','DBvxc_du-hoc-singapore-nganh-cong-nghe-sinh-hoc.jpg',1,1,1,'2023-08-27 16:21:41','2023-08-28 04:06:01');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `services` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `listservices` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (2,'DỊCH VỤ NỔI BẬT','Sứ mệnh của chúng tôi là đem lại những giải pháp và dịch vụ tốt nhất nhằm đáp ứng những sự kỳ vọng của khách hàng','[{\"title\":\"D\\u1ecbch v\\u1ee5 hu\\u1ea5n luy\\u1ec7n\",\"des\":\"<p>S\\u1edf h\\u1eefu nhi\\u1ec1u t&iacute;nh n\\u0103ng v\\u01b0\\u1ee3t tr\\u1ed9i l\\u1ea1i mang \\u0111\\u1ebfn nhi\\u1ec1u ti\\u1ec7n l\\u1ee3i v&agrave; l\\u1ee3i &iacute;ch cho ng\\u01b0\\u1eddi d&ugrave;ng, c&aacute;c lo\\u1ea1i v&iacute; \\u0111i\\u1ec7n t\\u1eed nh\\u01b0 Momo, Zalopay hay VTC Pay,... \\u0111ang ng&agrave;y c&agrave;ng tr\\u1edf th&agrave;nh xu h\\u01b0\\u1edbng thanh to&aacute;n ph\\u1ed5 bi\\u1ebfn trong th\\u1eddi \\u0111\\u1ea1i c&ocirc;ng nghi\\u1ec7p 4.0. Trong b&agrave;i vi\\u1ebft ng&agrave;y h&ocirc;m nay, ch&uacute;ng t&ocirc;i s\\u1ebd gi&uacute;p b\\u1ea1n hi\\u1ec3u r&otilde; h\\u01a1n v\\u1ec1&nbsp;<a href=\\\"https:\\/\\/citinews.net\\/vi-dien-tu-vtc-pay-la-gi.html\\\"><strong>v&iacute; VTC Pay l&agrave; g&igrave;<\\/strong><\\/a>? - M\\u1ed9t lo\\u1ea1i v&iacute; \\u0111i\\u1ec7n t\\u1eed \\u0111ang r\\u1ea5t \\u0111\\u01b0\\u1ee3c \\u01b0a chu\\u1ed9ng hi\\u1ec7n nay. C&ugrave;ng t&igrave;m hi\\u1ec3u ngay nh&eacute;.<\\/p>\\r\\n\\r\\n<div class=\\\"ddict_btn\\\" style=\\\"left:301.973px; top:49px\\\"><img src=\\\"chrome-extension:\\/\\/bpggmmljdiliancllaapiggllnkbjocb\\/logo\\/48.png\\\" \\/><\\/div>\\r\\n\\r\\n<div class=\\\"ddict_btn\\\" style=\\\"left:1074.98px; top:-3px\\\"><img src=\\\"chrome-extension:\\/\\/bpggmmljdiliancllaapiggllnkbjocb\\/logo\\/48.png\\\" \\/><\\/div>\"},{\"title\":\"Ki\\u1ec3m \\u0111\\u1ecbnh thi\\u1ebft b\\u1ecb\",\"des\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco<\\/p>\\r\\n\\r\\n<div class=\\\"ddict_btn\\\" style=\\\"left:410.133px; top:23px\\\"><img src=\\\"chrome-extension:\\/\\/bpggmmljdiliancllaapiggllnkbjocb\\/logo\\/48.png\\\" \\/><\\/div>\"},{\"title\":\"Quan tr\\u1eafc m\\u00f4i tr\\u01b0\\u1eddng\",\"des\":\"<p>S\\u1edf h\\u1eefu nhi\\u1ec1u t&iacute;nh n\\u0103ng v\\u01b0\\u1ee3t tr\\u1ed9i l\\u1ea1i mang \\u0111\\u1ebfn nhi\\u1ec1u ti\\u1ec7n l\\u1ee3i v&agrave; l\\u1ee3i &iacute;ch cho ng\\u01b0\\u1eddi d&ugrave;ng, c&aacute;c lo\\u1ea1i v&iacute; \\u0111i\\u1ec7n t\\u1eed nh\\u01b0 Momo, Zalopay hay VTC Pay,... \\u0111ang ng&agrave;y c&agrave;ng tr\\u1edf th&agrave;nh xu h\\u01b0\\u1edbng thanh to&aacute;n ph\\u1ed5 bi\\u1ebfn trong th\\u1eddi \\u0111\\u1ea1i c&ocirc;ng nghi\\u1ec7p 4.0. Trong b&agrave;i vi\\u1ebft ng&agrave;y h&ocirc;m nay, ch&uacute;ng t&ocirc;i s\\u1ebd gi&uacute;p b\\u1ea1n hi\\u1ec3u r&otilde; h\\u01a1n v\\u1ec1&nbsp;<a href=\\\"https:\\/\\/citinews.net\\/vi-dien-tu-vtc-pay-la-gi.html\\\"><strong>v&iacute; VTC Pay l&agrave; g&igrave;<\\/strong><\\/a>? - M\\u1ed9t lo\\u1ea1i v&iacute; \\u0111i\\u1ec7n t\\u1eed \\u0111ang r\\u1ea5t \\u0111\\u01b0\\u1ee3c \\u01b0a chu\\u1ed9ng hi\\u1ec7n nay. C&ugrave;ng t&igrave;m hi\\u1ec3u ngay nh&eacute;.<\\/p>\\r\\n\\r\\n<div class=\\\"ddict_btn\\\" style=\\\"left:229.5px; top:-7px\\\"><img src=\\\"chrome-extension:\\/\\/bpggmmljdiliancllaapiggllnkbjocb\\/logo\\/48.png\\\" \\/><\\/div>\\r\\n\\r\\n<div class=\\\"ddict_btn\\\" style=\\\"left:1074.98px; top:-30px\\\"><img src=\\\"chrome-extension:\\/\\/bpggmmljdiliancllaapiggllnkbjocb\\/logo\\/48.png\\\" \\/><\\/div>\"},{\"title\":\"L\\u1eadp h\\u1ed3 s\\u01a1\\/ T\\u01b0 v\\u1ea5n\",\"des\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco<\\/p>\\r\\n\\r\\n<div class=\\\"ddict_btn\\\" style=\\\"left:215.219px; top:21px\\\"><img src=\\\"chrome-extension:\\/\\/bpggmmljdiliancllaapiggllnkbjocb\\/logo\\/48.png\\\" \\/><\\/div>\"}]','2023-08-24 17:10:58','2023-08-28 04:27:16');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sliders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliders`
--

LOCK TABLES `sliders` WRITE;
/*!40000 ALTER TABLE `sliders` DISABLE KEYS */;
INSERT INTO `sliders` VALUES (2,'Nước và sức khoẻ','(Tổ Quốc) - Với những gì đã thể hiện, cả hai chiếc máy đều xứng đáng lọt vào ứng cử viên camera phone tốt bậc nhất ở thời điểm hiện tại.','Md3S0_Thông-tin-du-học-Singapore-2021-1024x396.png',1,'2023-08-23 03:19:22','2023-08-28 04:04:14'),(3,'phan mạnh hào','máy tính cũ','MTFrl_background-service.png',1,'2023-08-23 03:50:06','2023-08-28 04:03:54'),(4,'phan mạnh hào','(Tổ Quốc) - Với những gì đã thể hiện, cả hai chiếc máy đều xứng đáng lọt vào ứng cử viên camera phone tốt bậc nhất ở thời điểm hiện tại.','f8okF_bg-slide.png',1,'2023-08-25 16:15:31','2023-08-28 04:03:40');
/*!40000 ALTER TABLE `sliders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
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
INSERT INTO `users` VALUES (1,'phan mạnh hào','phanhaost@gmail.com','$2y$10$LujjyiSweV3iy9RiqygBUexSx2X4x6lv9eQgztZRKnsXPK6e4j4xK',NULL,NULL,1,'2023-08-23 02:48:49','2023-08-23 02:48:49');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'asean'
--

--
-- Dumping routines for database 'asean'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-28 11:40:54
