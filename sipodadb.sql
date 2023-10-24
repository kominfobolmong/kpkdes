-- MySQL dump 10.13  Distrib 8.0.31, for macos12.6 (arm64)
--
-- Host: localhost    Database: sipodadb
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aktas`
--

DROP TABLE IF EXISTS `aktas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aktas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `jumlah_anak_0_18_tahun` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_anak_memiliki_akta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentase_jumlah_anak_memiliki_akta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_anak_belum_memiliki_akta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentase_anak_belum_memiliki_akta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aktas`
--

LOCK TABLES `aktas` WRITE;
/*!40000 ALTER TABLE `aktas` DISABLE KEYS */;
INSERT INTO `aktas` VALUES (1,19,1,5,2021,'3751','3467','92.428685683818','284','7.5713143161824','2022-10-29 19:19:14','2022-10-29 19:19:14'),(2,19,2,5,2021,'5976','5320','89.022757697456','656','10.977242302544','2022-10-29 19:19:14','2022-10-29 19:19:14'),(3,19,3,5,2021,'6501','5653','86.955852945701','848','13.044147054299','2022-10-29 19:19:14','2022-10-29 19:19:14'),(4,19,4,5,2021,'4036','3272','81.070366699703','764','18.929633300297','2022-10-29 19:19:14','2022-10-29 19:19:14'),(5,19,5,5,2021,'10291','9721','94.461179671558','570','5.5388203284423','2022-10-29 19:19:14','2022-10-29 19:19:14'),(6,19,6,5,2021,'6391','5876','91.941793146612','515','8.0582068533876','2022-10-29 19:19:14','2022-10-29 19:19:14'),(7,19,7,5,2021,'8192','7595','92.71240234375','597','7.28759765625','2022-10-29 19:19:14','2022-10-29 19:19:14'),(8,19,8,5,2021,'4681','4299','91.839350566118','382','8.1606494338816','2022-10-29 19:19:14','2022-10-29 19:19:14'),(9,19,9,5,2021,'5391','5115','94.880356149137','276','5.1196438508625','2022-10-29 19:19:14','2022-10-29 19:19:14'),(10,19,10,5,2021,'3238','2954','91.229153798641','284','8.7708462013589','2022-10-29 19:19:14','2022-10-29 19:19:14'),(11,19,11,5,2021,'3856','3806','98.703319502075','50','1.2966804979253','2022-10-29 19:19:14','2022-10-29 19:19:14'),(12,19,12,5,2021,'1978','1972','99.696663296259','6','0.30333670374115','2022-10-29 19:19:14','2022-10-29 19:19:14'),(13,19,13,5,2021,'4443','4003','90.096781453973','440','9.9032185460275','2022-10-29 19:19:14','2022-10-29 19:19:14'),(14,19,14,5,2021,'2702','2381','88.119911176906','321','11.880088823094','2022-10-29 19:19:14','2022-10-29 19:19:14'),(15,19,15,5,2021,'3189','2756','86.422075885858','433','13.577924114142','2022-10-29 19:19:14','2022-10-29 19:19:14');
/*!40000 ALTER TABLE `aktas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `babis`
--

DROP TABLE IF EXISTS `babis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `babis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `jumlah_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konversi_jlh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jantan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `betina` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_ekor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_siap_potong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_prod_dagingthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keb_kons_dagingthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_kons_daging_thn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `babis`
--

LOCK TABLES `babis` WRITE;
/*!40000 ALTER TABLE `babis` DISABLE KEYS */;
INSERT INTO `babis` VALUES (1,18,2,14,2021,'18599','7811.58','1122','2754','3876','3294.6','197676','16873.0128','180802.9872','2022-11-02 00:42:08','2022-11-02 00:42:08'),(2,18,4,14,2021,'15126','6352.92','3876','8031','11907','10120.95','607257','13722.3072','593534.6928','2022-11-02 00:42:08','2022-11-02 00:42:08'),(3,18,3,14,2021,'21735','9128.7','2032','4039','6071','5160.35','309621','19717.992','289903.008','2022-11-02 00:42:08','2022-11-02 00:42:08'),(4,18,7,14,2021,'26359','11070.78','143','316','459','390.15','23409','23912.8848','-503.8848','2022-11-02 00:42:08','2022-11-02 00:42:08'),(5,18,8,14,2021,'17107','7184.94','0','0','0','0','0','15519.4704','-15519.4704','2022-11-02 00:42:08','2022-11-02 00:42:08'),(6,18,10,14,2021,'12732','5347.44','265','702','967','821.95','49317','11550.4704','37766.5296','2022-11-02 00:42:08','2022-11-02 00:42:08'),(7,18,12,14,2021,'6548','2750.16','0','0','0','0','0','5940.3456','-5940.3456','2022-11-02 00:42:08','2022-11-02 00:42:08'),(8,18,9,14,2021,'18778','7886.76','656','1233','1889','1605.65','96339','17035.4016','79303.5984','2022-11-02 00:42:08','2022-11-02 00:42:08'),(9,18,6,14,2021,'20904','8779.68','64','128','192','163.2','9792','18964.1088','-9172.1088','2022-11-02 00:42:08','2022-11-02 00:42:08'),(10,18,11,14,2021,'11973','5028.66','20','46','66','56.1','3366','10861.9056','-7495.9056','2022-11-02 00:42:08','2022-11-02 00:42:08'),(11,18,5,14,2021,'32925','13828.5','497','1118','1583','1345.55','80733','29869.56','50863.44','2022-11-02 00:42:08','2022-11-02 00:42:08'),(12,18,1,14,2021,'11787','4950.54','147','411','547','464.95','27897','10693.1664','17203.8336','2022-11-02 00:42:08','2022-11-02 00:42:08'),(13,18,13,14,2021,'15299','6425.58','1461','2988','4449','3781.65','226899','13879.2528','213019.7472','2022-11-02 00:42:08','2022-11-02 00:42:08'),(14,18,15,14,2021,'11748','4934.16','2734','6111','8845','7518.25','451095','10657.7856','440437.2144','2022-11-02 00:42:08','2022-11-02 00:42:08'),(15,18,14,14,2021,'8858','3720.36','0','0','0','0','0','8035.9776','-8035.9776','2022-11-02 00:42:08','2022-11-02 00:42:08');
/*!40000 ALTER TABLE `babis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `budidaya_ikans`
--

DROP TABLE IF EXISTS `budidaya_ikans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `budidaya_ikans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `ikan_nila` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ikan_mas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `udang_vaname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ikan_bandeng` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `budidaya_ikans`
--

LOCK TABLES `budidaya_ikans` WRITE;
/*!40000 ALTER TABLE `budidaya_ikans` DISABLE KEYS */;
INSERT INTO `budidaya_ikans` VALUES (1,17,1,8,2021,'0','0','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(2,17,5,8,2021,'0','0','12.8','10.3','2022-10-29 19:48:27','2022-10-29 19:48:27'),(3,17,9,8,2021,'21.18','5.7','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(4,17,11,8,2021,'0','-','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(5,17,6,8,2021,'31.58','3.1','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(6,17,8,8,2021,'0','0','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(7,17,10,8,2021,'0','0','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(8,17,12,8,2021,'9,0','0','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(9,17,7,8,2021,'29.82','5.65','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(10,17,13,8,2021,'0','0','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(11,17,3,8,2021,'0','0','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(12,17,15,8,2021,'0','0','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(13,17,14,8,2021,'10.6','0','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(14,17,4,8,2021,'0','0','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27'),(15,17,2,8,2021,'31.82','2.95','0','0','2022-10-29 19:48:27','2022-10-29 19:48:27');
/*!40000 ALTER TABLE `budidaya_ikans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dagings`
--

DROP TABLE IF EXISTS `dagings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dagings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `jumlah_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_prod_daging_unggasthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_prod_daging_kambingthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_prod_daging_sapithn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_prod_daging_thn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keb_kons_dagingthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_kons_daging_thn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dagings`
--

LOCK TABLES `dagings` WRITE;
/*!40000 ALTER TABLE `dagings` DISABLE KEYS */;
INSERT INTO `dagings` VALUES (1,18,2,15,2021,'18599','56845.819663','5163.75','43041.636','105051.205663','40173.84','64877.365663','2022-11-02 02:43:28','2022-11-02 02:43:28'),(2,18,4,15,2021,'15126','48677.329','8548.875','70193.178','127419.382','32672.16','94747.222','2022-11-02 02:43:28','2022-11-02 02:43:28'),(3,18,3,15,2021,'21735','24849.8195','1836','17703.378','44389.1975','46947.6','-2558.4025','2022-11-02 02:43:28','2022-11-02 02:43:28'),(4,18,7,15,2021,'26359','58217.4945','17499.375','27151.542','102868.4115','56935.44','45932.9715','2022-11-02 02:43:28','2022-11-02 02:43:28'),(5,18,8,15,2021,'17107','19028.637','10098','22332.024','51458.661','36951.12','14507.541','2022-11-02 02:43:28','2022-11-02 02:43:28'),(6,18,10,15,2021,'12732','7900.557','2008.125','6274.917','16183.599','27501.12','-11317.521','2022-11-02 02:43:28','2022-11-02 02:43:28'),(7,18,12,15,2021,'6548','6975.375','3557.25','3483.414','14016.039','14143.68','-127.641','2022-11-02 02:43:28','2022-11-02 02:43:28'),(8,18,9,15,2021,'18778','24269.259','87898.5','47527.128','159694.887','40560.48','119134.407','2022-11-02 02:43:28','2022-11-02 02:43:28'),(9,18,6,15,2021,'20904','24543.012','134544.375','33593.472','192680.859','45152.64','147528.219','2022-11-02 02:43:28','2022-11-02 02:43:28'),(10,18,11,15,2021,'11973','7669.8735','63915.75','19683.675','91269.2985','25861.68','65407.6185','2022-11-02 02:43:28','2022-11-02 02:43:28'),(11,18,5,15,2021,'32925','21192.36','58981.5','74869.542','155043.402','71118','83925.402','2022-11-02 02:43:28','2022-11-02 02:43:28'),(12,18,1,15,2021,'11787','14756.6935','99086.625','42516.738','156360.0565','25459.92','130900.1365','2022-11-02 02:43:28','2022-11-02 02:43:28'),(13,18,13,15,2021,'15299','20441.5395','2754','15627.645','38823.1845','33045.84','5777.3445','2022-11-02 02:43:28','2022-11-02 02:43:28'),(14,18,15,15,2021,'11748','27623.011','2524.5','82575.999','112723.51','25375.68','87347.83','2022-11-02 02:43:28','2022-11-02 02:43:28'),(15,18,14,15,2021,'8858','28219.886','10212.75','19874.547','58307.183','19133.28','39173.903','2022-11-02 02:43:28','2022-11-02 02:43:28');
/*!40000 ALTER TABLE `dagings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `jenis`
--

DROP TABLE IF EXISTS `jenis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jenis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis`
--

LOCK TABLES `jenis` WRITE;
/*!40000 ALTER TABLE `jenis` DISABLE KEYS */;
INSERT INTO `jenis` VALUES (1,'Kependudukan','kependudukan','2022-06-15 17:28:08','2022-06-15 17:28:08'),(2,'KIA','kia','2022-06-15 17:28:10','2022-06-15 17:28:10'),(3,'KTP','ktp','2022-06-15 17:28:16','2022-06-15 17:28:16'),(4,'Pariwisata','pariwisata','2022-06-15 17:28:18','2022-06-15 17:28:18'),(5,'Akta','akta','2022-06-15 17:28:24','2022-06-15 17:28:24'),(6,'Kelompok Umur','kelompok-umur','2022-06-15 17:28:26','2022-06-15 17:28:26'),(7,'Kepala Keluarga','kepala-keluarga','2022-10-30 03:30:54','2022-10-30 03:30:54'),(8,'Budidaya Ikan','budidaya-ikan','2022-10-30 03:46:22','2022-10-30 03:46:22'),(9,'Pertanian','pertanian','2022-11-01 18:41:47','2022-11-01 18:41:47'),(10,'Perkebunan','perkebunan','2022-11-01 19:47:20','2022-11-01 19:47:20'),(11,'Peternakan','peternakan','2022-11-01 20:13:23','2022-11-01 20:13:23'),(12,'Daging Unggas','daging-unggas','2022-11-01 20:33:25','2022-11-02 02:33:46'),(14,'Daging Babi','daging-babi','2022-11-02 00:00:58','2022-11-02 00:00:58'),(15,'Ketersediaan Daging','ketersediaan-daging','2022-11-02 02:34:41','2022-11-02 02:34:41'),(16,'Puskesmas','puskesmas','2022-11-06 19:55:19','2022-11-06 19:55:31'),(17,'Nakes','nakes','2022-11-06 20:58:38','2022-11-06 20:58:38'),(18,'Sekolah','sekolah','2022-11-06 22:54:43','2022-11-06 22:54:43'),(19,'PAUD','paud','2022-11-06 22:54:46','2022-11-06 22:54:46');
/*!40000 ALTER TABLE `jenis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kecamatan`
--

DROP TABLE IF EXISTS `kecamatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kecamatan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sebelah_utara` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sebelah_timur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sebelah_selatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sebelah_barat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kecamatan`
--

LOCK TABLES `kecamatan` WRITE;
/*!40000 ALTER TABLE `kecamatan` DISABLE KEYS */;
INSERT INTO `kecamatan` VALUES (1,'710105','SANG TOMBOLANG','sang-tombolang',NULL,NULL,NULL,NULL,'assets/kecamatan/tMZGkfvyfmQScCQ0lbMjR5nf7iH5eV2j8JO04tt9.png','2022-10-18 23:13:40','2022-11-02 03:18:28'),(2,'710109','DUMOGA BARAT','dumoga-barat',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:13:52','2022-10-18 23:17:16'),(3,'710110','DUMOGA TIMUR','dumoga-timur',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:14:02','2022-10-18 23:17:22'),(4,'710111','DUMOGA UTARA','dumoga-utara',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:14:13','2022-10-18 23:17:28'),(5,'710112','LOLAK','lolak',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:14:22','2022-10-18 23:17:35'),(6,'710113','BOLAANG','bolaang',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:14:31','2022-10-18 23:17:42'),(7,'710114','LOLAYAN','lolayan',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:14:41','2022-10-18 23:17:49'),(8,'710119','PASSI BARAT','passi-barat',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:14:49','2022-10-18 23:17:56'),(9,'710120','POIGAR','poigar',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:14:58','2022-10-18 23:18:05'),(10,'710122','PASSI TIMUR','passi-timur',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:15:06','2022-10-18 23:18:12'),(11,'710131','BOLAANG TIMUR','bolaang-timur','Berbatasan Dengan Selat Nonapan','Berbatasan Dengan Kecamatan Poigar','Berbatasan Dengan Kecamatan Bolaang','Berbatasan Dengan  Kecamatan  Bolaang','assets/kecamatan/4Vj8VdMUM0umB58Xtt8lgRyKzZbug3av88yUXf3f.jpg','2022-10-18 23:15:14','2022-11-04 01:35:00'),(12,'710132','BILALANG','bilalang',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:15:23','2022-10-18 23:18:31'),(13,'710133','DUMOGA','dumoga',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:15:35','2022-10-18 23:18:37'),(14,'710134','DUMOGA TENGGARA','dumoga-tenggara',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:15:45','2022-10-18 23:18:44'),(15,'710135','DUMOGA TENGAH','dumoga-tengah',NULL,NULL,NULL,NULL,NULL,'2022-10-18 23:15:54','2022-10-18 23:18:49');
/*!40000 ALTER TABLE `kecamatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelompok_umurs`
--

DROP TABLE IF EXISTS `kelompok_umurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kelompok_umurs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `l_00_04` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_00_04` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_00_04` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_05_09` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_05_09` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_05_09` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l10_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p10_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_10_14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_15_19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_15_19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_15_19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_20_24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_20_24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_20_24` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_25_29` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_25_29` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_25_29` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_30_34` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_30_34` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_30_34` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_35_39` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_35_39` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_35_39` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_40_44` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_40_44` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_40_44` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_45_49` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_45_49` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_45_49` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_50_54` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_50_54` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_50_54` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_55_59` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_55_59` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_55_59` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_60_64` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_60_64` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_60_64` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_65_69` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_65_69` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_65_69` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_70_74` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_70_74` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_70_74` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l_75_up` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_75_up` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_75_up` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelompok_umurs`
--

LOCK TABLES `kelompok_umurs` WRITE;
/*!40000 ALTER TABLE `kelompok_umurs` DISABLE KEYS */;
INSERT INTO `kelompok_umurs` VALUES (1,19,1,6,2021,'342','287','629','508','446','954','545','497','1042','682','560','1242','473','469','942','483','399','882','348','360','708','425','397','822','412','418','830','463','425','888','359','323','682','302','282','584','210','216','426','184','149','333','110','100','210','95','103','198','2022-10-29 19:29:49','2022-10-29 19:29:49'),(2,19,2,6,2021,'513','469','982','792','744','1536','855','823','1678','1061','919','1980','897','780','1677','816','739','1555','592','533','1125','668','629','1297','667','654','1321','645','656','1301','569','485','1054','402','381','783','295','272','567','229','212','441','170','143','313','195','161','356','2022-10-29 19:29:49','2022-10-29 19:29:49'),(3,19,3,6,2021,'612','613','1225','843','794','1637','976','891','1867','1087','1009','2096','1037','942','1979','953','843','1796','720','638','1358','757','744','1501','764','761','1525','938','849','1787','732','657','1389','591','501','1092','424','409','833','334','369','703','219','209','428','283','307','590','2022-10-29 19:29:49','2022-10-29 19:29:49'),(4,19,4,6,2021,'371','369','740','563','473','1036','584','533','1117','725','637','1362','671','662','1333','572','566','1138','490','476','966','575','580','1155','666','637','1303','677','686','1363','630','476','1106','401','386','787','344','290','634','230','196','426','148','168','316','199','148','347','2022-10-29 19:29:49','2022-10-29 19:29:49'),(5,19,5,6,2021,'1072','1014','2086','1504','1342','2846','1548','1377','2925','1675','1568','3243','1587','1389','2976','1711','1400','3111','1250','1059','2309','1193','1040','2233','1204','1126','2330','1262','1107','2369','1024','947','1971','825','790','1615','597','563','1160','483','462','945','297','219','516','294','376','670','2022-10-29 19:29:49','2022-10-29 19:29:49'),(6,19,6,6,2021,'611','567','1178','836','832','1668','992','890','1882','1153','964','2117','943','854','1797','907','832','1739','718','686','1404','891','715','1606','804','725','1529','860','797','1657','690','648','1338','527','536','1063','393','368','761','329','301','630','165','162','327','163','192','355','2022-10-29 19:29:49','2022-10-29 19:29:49'),(7,19,7,6,2021,'733','665','1398','1078','1061','2139','1278','1171','2449','1414','1323','2737','1228','1179','2407','1197','1077','2274','856','830','1686','1012','889','1901','1116','927','2043','1029','999','2028','1001','891','1892','746','633','1379','520','455','975','358','298','656','231','184','415','203','209','412','2022-10-29 19:29:49','2022-10-29 19:29:49'),(8,19,8,6,2021,'432','364','796','718','658','1376','712','640','1352','812','683','1495','736','665','1401','667','636','1303','587','546','1133','699','646','1345','808','707','1515','675','607','1282','631','549','1180','475','439','914','384','335','719','279','270','549','200','169','369','187','227','414','2022-10-29 19:29:49','2022-10-29 19:29:49'),(9,19,9,6,2021,'460','451','911','788','705','1493','778','764','1542','934','888','1822','816','742','1558','826','705','1531','653','544','1197','629','615','1244','746','663','1409','767','795','1562','694','622','1316','624','560','1184','450','435','885','375','341','716','194','207','401','194','263','457','2022-10-29 19:29:49','2022-10-29 19:29:49'),(10,19,10,6,2021,'293','307','600','425','381','806','493','483','976','566','564','1130','561','547','1108','547','530','1077','433','344','777','432','415','847','558','493','1051','614','560','1174','524','459','983','401','350','751','290','245','535','248','199','447','149','144','293','173','195','368','2022-10-29 19:29:49','2022-10-29 19:29:49'),(11,19,11,6,2021,'372','389','761','593','478','1071','594','531','1125','616','578','1194','468','494','962','491','487','978','423','394','817','499','474','973','466','404','870','458','420','878','383','367','750','326','321','647','227','253','480','160','149','309','96','85','181','91','100','191','2022-10-29 19:29:49','2022-10-29 19:29:49'),(12,19,12,6,2021,'156','144','300','270','243','513','292','289','581','369','367','736','322','304','626','303','304','607','268','217','485','325','284','609','305','245','550','262','236','498','217','159','376','129','155','284','123','101','224','74','81','155','40','40','80','61','74','135','2022-10-29 19:29:49','2022-10-29 19:29:49'),(13,19,13,6,2021,'417','397','814','616','528','1144','620','647','1267','847','841','1688','796','686','1482','710','628','1338','523','408','931','513','504','1017','633','549','1182','584','558','1142','559','485','1044','441','364','805','331','306','637','266','205','471','141','145','286','188','198','386','2022-10-29 19:29:49','2022-10-29 19:29:49'),(14,19,14,6,2021,'245','265','510','362','378','740','422','375','797','506','448','954','405','375','780','390','364','754','308','276','584','390','337','727','377','366','743','353','312','665','317','290','607','256','191','447','143','142','285','117','98','215','91','49','140','69','51','120','2022-10-29 19:29:49','2022-10-29 19:29:49'),(15,19,15,6,2021,'322','301','623','452','402','854','495','445','940','523','555','1078','536','501','1037','522','454','976','383','331','714','442','404','846','419','404','823','494','476','970','397','371','768','366','329','695','232','210','442','186','184','370','131','157','288','167','159','326','2022-10-29 19:29:49','2022-10-29 19:29:49');
/*!40000 ALTER TABLE `kelompok_umurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kepala_keluargas`
--

DROP TABLE IF EXISTS `kepala_keluargas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kepala_keluargas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `lk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_kepala_keluarga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kepala_keluargas`
--

LOCK TABLES `kepala_keluargas` WRITE;
/*!40000 ALTER TABLE `kepala_keluargas` DISABLE KEYS */;
INSERT INTO `kepala_keluargas` VALUES (1,19,1,7,2021,'5941','5431','11372','3611','2022-10-29 19:37:39','2022-10-29 19:37:39'),(2,19,2,7,2021,'9366','8600','17966','5558','2022-10-29 19:37:39','2022-10-29 19:37:39'),(3,19,3,7,2021,'11270','10536','21806','7045','2022-10-29 19:37:39','2022-10-29 19:37:39'),(4,19,4,7,2021,'7846','7283','15129','5212','2022-10-29 19:37:39','2022-10-29 19:37:39'),(5,19,5,7,2021,'17526','15779','33305','10961','2022-10-29 19:37:39','2022-10-29 19:37:39'),(6,19,6,7,2021,'10982','10069','21051','7018','2022-10-29 19:37:39','2022-10-29 19:37:39'),(7,19,7,7,2021,'14000','12791','26791','8796','2022-10-29 19:37:39','2022-10-29 19:37:39'),(8,19,8,7,2021,'9002','8141','17143','5827','2022-10-29 19:37:39','2022-10-29 19:37:39'),(9,19,9,7,2021,'9928','9300','19228','6759','2022-10-29 19:37:39','2022-10-29 19:37:39'),(10,19,10,7,2021,'6707','6216','12923','4567','2022-10-29 19:37:39','2022-10-29 19:37:39'),(11,19,11,7,2021,'6263','5924','12187','4060','2022-10-29 19:37:39','2022-10-29 19:37:39'),(12,19,12,7,2021,'3516','3243','6759','2191','2022-10-29 19:37:39','2022-10-29 19:37:39'),(13,19,13,7,2021,'8185','7449','15634','4956','2022-10-29 19:37:39','2022-10-29 19:37:39'),(14,19,14,7,2021,'4751','4317','9068','3004','2022-10-29 19:37:39','2022-10-29 19:37:39'),(15,19,15,7,2021,'6067','5683','11750','3886','2022-10-29 19:37:39','2022-10-29 19:37:39');
/*!40000 ALTER TABLE `kepala_keluargas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kias`
--

DROP TABLE IF EXISTS `kias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `wajib_kia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yang_memiliki_kia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kias`
--

LOCK TABLES `kias` WRITE;
/*!40000 ALTER TABLE `kias` DISABLE KEYS */;
INSERT INTO `kias` VALUES (1,19,1,2,2021,'3433','1677','49.12','2022-10-29 18:37:38','2022-10-29 18:37:38'),(2,19,2,2,2021,'5361','1579','29.48','2022-10-29 18:37:38','2022-10-29 18:37:38'),(3,19,3,2,2021,'5969','1651','28.12','2022-10-29 18:37:38','2022-10-29 18:37:38'),(4,19,4,2,2021,'3640','1051','28.86','2022-10-29 18:37:38','2022-10-29 18:37:38'),(5,19,5,2,2021,'9636','3739','39.14','2022-10-29 18:37:38','2022-10-29 18:37:38'),(6,19,6,2,2021,'5860','1315','22.54','2022-10-29 18:37:38','2022-10-29 18:37:38'),(7,19,7,2,2021,'7422','3181','42.73','2022-10-29 18:37:38','2022-10-29 18:37:38'),(8,19,8,2,2021,'4390','1956','44.13','2022-10-29 18:37:38','2022-10-29 18:37:38'),(9,19,9,2,2021,'5084','945','18.61','2022-10-29 18:37:38','2022-10-29 18:37:38'),(10,19,10,2,2021,'3044','1346','43.25','2022-10-29 18:37:38','2022-10-29 18:37:38'),(11,19,11,2,2021,'3663','826','22.4','2022-10-29 18:37:38','2022-10-29 18:37:38'),(12,19,12,2,2021,'1805','960','53.01','2022-10-29 18:37:38','2022-10-29 18:37:38'),(13,19,13,2,2021,'4132','940','22.61','2022-10-29 18:37:38','2022-10-29 18:37:38'),(14,19,14,2,2021,'2475','559','22.43','2022-10-29 18:37:38','2022-10-29 18:37:38'),(15,19,15,2,2021,'2943','1025','34.59','2022-10-29 18:37:38','2022-10-29 18:37:38');
/*!40000 ALTER TABLE `kias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ktps`
--

DROP TABLE IF EXISTS `ktps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ktps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `jumlah_wajib_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_sudah_rekaman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentase_sudah_rekam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_belum_rekaman` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persentase_belum_rekam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ktps`
--

LOCK TABLES `ktps` WRITE;
/*!40000 ALTER TABLE `ktps` DISABLE KEYS */;
INSERT INTO `ktps` VALUES (1,19,1,3,2021,'8650','7354','85.017341040462','1296','14.982658959538','2022-10-29 18:56:44','2022-10-29 18:56:44'),(2,19,2,3,2021,'13916','11271','80.993101465938','2645','19.006898534062','2022-10-29 18:56:44','2022-10-29 18:56:44'),(3,19,3,3,2021,'16848','14421','85.594729344729','2427','14.405270655271','2022-10-29 18:56:44','2022-10-29 18:56:44'),(4,19,4,3,2021,'11998','9839','82.00533422237','2159','17.99466577763','2022-10-29 18:56:44','2022-10-29 18:56:44'),(5,19,5,3,2021,'23861','20845','87.360127404551','3016','12.639872595449','2022-10-29 18:56:44','2022-10-29 18:56:44'),(6,19,6,3,2021,'15391','12811','83.236956662985','2580','16.763043337015','2022-10-29 18:56:44','2022-10-29 18:56:44'),(7,19,7,3,2021,'19597','16962','86.554064397612','2635','13.445935602388','2022-10-29 18:56:44','2022-10-29 18:56:44'),(8,19,8,3,2021,'12965','11518','88.839182414192','1447','11.160817585808','2022-10-29 18:56:44','2022-10-29 18:56:44'),(9,19,9,3,2021,'14345','13052','90.986406413384','1293','9.0135935866155','2022-10-29 18:56:44','2022-10-29 18:56:44'),(10,19,10,3,2021,'9994','9037','90.424254552732','957','9.5757454472684','2022-10-29 18:56:44','2022-10-29 18:56:44'),(11,19,11,3,2021,'8625','7729','89.611594202899','896','10.388405797101','2022-10-29 18:56:44','2022-10-29 18:56:44'),(12,19,12,3,2021,'5037','4288','85.130037720866','749','14.869962279134','2022-10-29 18:56:44','2022-10-29 18:56:44'),(13,19,13,3,2021,'10841','9527','87.879346923716','1314','12.120653076284','2022-10-29 18:56:44','2022-10-29 18:56:44'),(14,19,14,3,2021,'6280','5493','87.468152866242','787','12.531847133758','2022-10-29 18:56:44','2022-10-29 18:56:44'),(15,19,15,3,2021,'8470','7767','91.700118063754','703','8.2998819362456','2022-10-29 18:56:44','2022-10-29 18:56:44');
/*!40000 ALTER TABLE `ktps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=166 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_03_18_083737_create_permission_tables',1),(5,'2021_04_14_230443_create_information_table',2),(6,'2021_06_10_120507_create_kategoris_table',3),(7,'2021_06_10_120521_create_satuans_table',3),(8,'2021_06_10_120533_create_lokasis_table',3),(9,'2021_06_10_120620_create_jenis_pelanggans_table',3),(10,'2021_06_10_120644_create_kontraks_table',3),(11,'2021_06_10_120702_create_pemasoks_table',3),(12,'2021_06_10_120712_create_produks_table',3),(13,'2021_06_10_120942_create_jasas_table',3),(14,'2021_06_10_121008_create_kategori_jasas_table',3),(15,'2021_06_10_121047_create_jasa_produks_table',3),(16,'2021_06_10_121302_create_spks_table',3),(17,'2021_06_10_121646_create_kendaraans_table',3),(18,'2021_06_10_121654_create_jenis_kendaraans_table',3),(19,'2021_06_11_100443_add_fiel_name_to_galleries',4),(20,'2021_06_11_105159_add_field_delete_to_jasa',5),(21,'2021_06_11_211138_add_keterangan_field_to_kategori_jasa',6),(22,'2021_06_11_234346_add_more_field_to_profiles',7),(23,'2021_06_13_035231_create_konsultasis_table',8),(24,'2021_06_13_040258_add_thumbnail_field_to_profiles',9),(25,'2021_06_13_062648_create_testimonis_table',10),(31,'2021_06_13_102750_add_pesan_field_to_konsultasi',11),(32,'2021_06_25_231311_create_jasa_produks_table',11),(33,'2021_06_26_235302_create_jasa_kendaraans_table',12),(34,'2021_06_26_235544_create_jasa_spks_table',12),(36,'2021_06_27_012738_add_more_field_to_users',13),(37,'2021_07_07_023038_add_field_password_to_users',13),(38,'2021_07_07_092013_add_pemilik_field_to_kendaraan',14),(39,'2021_07_08_003707_create_mereks_table',15),(40,'2021_07_08_004139_add_field_merek_to_jenis_kendaraan',15),(41,'2021_07_08_054331_create_temp_jasas_table',16),(42,'2021_07_08_055003_create_temp_users_table',17),(43,'2021_07_09_004743_create_temp_mekaniks_table',18),(44,'2021_07_09_024113_create_mekanik_spks_table',19),(45,'2021_07_10_093936_create_approve_spks_table',20),(46,'2021_07_11_082402_create_jenis_users_table',21),(47,'2021_07_11_084745_add_field_telpon_to_users',22),(48,'2021_07_11_084922_create_jenis_pembayarans_table',23),(49,'2021_07_11_092210_create_jenis_pelanggan_users_table',24),(50,'2021_07_12_011919_create_registrasis_table',25),(51,'2021_07_12_012005_create_statuses_table',25),(53,'2021_07_12_013415_create_registrasi_statuses_table',26),(54,'2021_07_12_105623_add_field_nomor_to_registrasi',27),(55,'2021_07_12_202629_create_invoices_table',28),(56,'2021_07_12_203228_add_user_field_to_invoice',29),(57,'2021_07_12_213439_add_total_field_to_invoice',30),(58,'2021_07_12_233648_add_pembayaran_field_to_invoice',31),(59,'2021_07_14_234231_add_email_field_to_users',32),(61,'2021_07_15_081822_create_invoice_produks_table',33),(62,'2021_07_15_101542_create_invoice_jasas_table',34),(63,'2021_07_15_101619_create_invoice_produk_manuals_table',34),(64,'2021_07_18_001601_add_minimal_field_to_produk',35),(65,'2021_07_18_041626_add_status_field_to_registrasi',36),(66,'2021_07_18_073400_add_status_field_to_spk',37),(67,'2021_07_18_234325_add_some_field_to_users',38),(79,'2022_01_29_043423_add_more_field_to_sakip',39),(80,'2022_01_29_051022_add_more_field_to_peraturan',40),(81,'2022_01_29_053047_add_more_field_to_klasifikasi',41),(82,'2022_02_18_013653_add_field_publish_to_sakip',42),(83,'2022_02_18_013857_create_validasis_table',42),(84,'2022_02_18_023943_change_catatan_nulllable_to_validasi',43),(85,'2022_02_18_034810_change_telpon_nulllable_to_users',44),(105,'2022_06_15_011856_create_pendidikans_table',45),(106,'2022_06_15_011902_create_pekerjaans_table',45),(107,'2022_06_15_011920_create_surveis_table',45),(108,'2022_06_16_004928_create_usias_table',45),(109,'2022_06_16_004946_create_waktus_table',45),(142,'2022_10_19_081347_create_penduduks_table',46),(143,'2022_10_19_083433_create_kias_table',46),(144,'2022_10_19_085843_create_ktps_table',46),(145,'2022_10_19_090952_create_aktas_table',46),(146,'2022_10_29_230847_create_jumlah_kepala_keluargas_table',46),(147,'2022_10_29_231259_create_kelompok_umurs_table',46),(148,'2022_10_29_232620_create_pariwisatas_table',46),(149,'2022_10_29_233429_create_budidaya_ikans_table',46),(151,'2022_11_02_023552_create_pertanians_table',47),(152,'2022_11_02_033350_create_perkebunans_table',48),(153,'2022_11_02_041216_create_peternakans_table',49),(154,'2022_11_02_043151_create_unggas_table',50),(156,'2022_11_02_075540_create_babis_table',51),(157,'2022_11_02_103049_create_dagings_table',52),(159,'2022_11_06_073427_create_pasars_table',53),(160,'2022_11_06_074904_create_panas_bumis_table',54),(161,'2022_11_06_075847_create_puskesmas_table',54),(162,'2022_11_06_110411_create_nakes_table',54),(163,'2022_11_06_110832_create_sekolahs_table',54),(164,'2022_11_06_111057_create_pauds_table',54),(165,'2022_11_07_050413_add_more_field_to_nakes',55);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',19),(6,'App\\Models\\User',26),(1,'App\\Models\\User',28);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nakes`
--

DROP TABLE IF EXISTS `nakes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nakes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_desa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_dokter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_dokter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsi_dokter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_dokter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_dokter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_dokter_gigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_dokter_gigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsi_dokter_gigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_dokter_gigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_dokter_gigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_perawat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_perawat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsi_perawat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_perawat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_perawat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_perawat_gigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_perawat_gigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsi_perawat_gigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_perawat_gigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_perawat_gigi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_bidan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_bidan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsi_bidan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_bidan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_bidan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_lab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_lab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsi_lab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_lab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_lab` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_promkes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_promkes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsi_promkes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_promkes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_promkes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_kesling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_kesling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsi_kesling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_kesling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_kesling` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_apoteker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_apoteker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsi_apotoker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_apoteker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_apoteker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_kefarmasian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_kefarmasian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nsi_kefarmasian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_kefarmasian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_kefarmasian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pns_gizi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ptt_gizi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nis_gizi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sukarela_gizi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_gizi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nakes`
--

LOCK TABLES `nakes` WRITE;
/*!40000 ALTER TABLE `nakes` DISABLE KEYS */;
INSERT INTO `nakes` VALUES (1,7,'2022-11-06 21:19:37','2022-11-06 21:19:37',11,17,2021,'PUSKESMAS RJ','TADOY','9','1','0','0','0','1','0','1','0','0','1','5','1','2','2','10','1','0','0','0','1','9','1','2','4','16','0','0','1','0','1','0','0','0','0','0','0','1','1','0','2','0','0','0','0','0','1','0','1','0','2','0','1','0','0','1'),(2,7,'2022-11-06 21:19:37','2022-11-06 21:19:37',5,17,2021,'PUSKESMAS RJ','BUNTALO','7','1','0','0','0','1','0','0','0','0','0','5','1','2','2','10','1','0','0','0','1','7','1','1','1','10','0','0','0','0','0','0','0','1','0','1','0','1','0','1','2','0','0','0','0','0','0','0','1','0','1','1','1','0','0','2'),(3,7,'2022-11-06 21:19:37','2022-11-06 21:19:37',6,17,2021,'PUSKESMAS RJ','KOMANGAAN','5','1','1','0','0','2','0','0','0','0','0','5','0','0','5','10','1','0','0','0','1','6','1','1','4','12','0','1','1','0','2','1','0','0','0','1','1','0','0','0','1','0','1','0','0','1','0','0','1','0','1','1','1','0','1','3'),(4,7,'2022-11-06 21:19:37','2022-11-06 21:19:37',8,17,2021,'PUSKESMAS RJ','PASSI BARAT','13','0','2','0','0','2','0','1','0','0','1','15','0','0','4','19','0','0','0','0','0','9','0','1','13','23','0','1','1','0','2','1','0','0','0','1','3','0','0','0','3','0','1','1','0','2','0','1','0','0','1','3','0','0','1','4'),(5,7,'2022-11-06 21:19:37','2022-11-06 21:19:37',12,17,2021,'PUSKESMAS RJ','BILALANG','8','0','2','0','0','2','0','1','0','0','1','8','6','0','4','18','1','0','0','0','1','6','6','1','4','17','0','1','1','0','2','1','0','0','0','1','2','1','0','0','3','0','1','0','0','1','0','0','1','0','1','2','0','0','1','3'),(6,7,'2022-11-06 21:19:37','2022-11-06 21:19:37',7,17,2021,'PUSKESMAS RJ','TUNGOI','7','1','1','0','0','2','0','1','0','0','1','13','0','0','6','19','1','0','0','0','1','8','4','1','4','17','0','1','0','0','1','0','0','0','0','0','0','1','0','0','1','1','0','0','0','1','0','1','0','0','1','3','1','0','0','4'),(7,7,'2022-11-06 21:19:37','2022-11-06 21:19:37',2,17,2021,'PUSKESMAS RJ','WERDHI AGUNG','10','1','0','0','0','1','0','0','0','0','0','8','3','0','0','11','2','0','0','0','2','11','0','0','0','11','0','0','1','0','1','0','0','0','0','0','3','0','0','0','3','0','0','0','0','0','1','0','0','0','1','1','1','0','0','2'),(8,7,'2022-11-06 21:19:37','2022-11-06 21:19:37',14,17,2021,'PUSKESMAS RJ','KONAROM','10','1','1','0','0','2','0','0','0','0','0','11','2','0','2','15','2','0','0','0','2','6','2','0','4','12','0','0','0','0','0','1','0','0','0','1','0','0','0','1','1','0','0','0','0','0','0','2','0','0','2','2','0','0','0','2'),(9,7,'2022-11-06 21:20:18','2022-11-06 21:20:18',9,17,2021,'PUSKESMAS RI','POIGAR','20','1','2','0','0','3','0','1','0','0','1','10','1','0','9','20','2','0','0','0','2','7','2','1','6','16','0','1','0','0','1','0','0','0','0','0','2','0','0','0','2','0','1','0','0','1','0','0','1','0','1','1','1','0','0','2'),(10,7,'2022-11-06 21:20:18','2022-11-06 21:20:18',6,17,2021,'PUSKESMAS RI','INOBONTO','6','1','1','0','0','2','0','1','0','0','1','8','2','0','7','17','2','0','0','0','2','7','1','1','6','15','0','1','1','0','2','0','1','1','0','2','1','1','0','0','2','0','0','1','0','1','0','0','0','0','0','2','1','2','0','5'),(11,7,'2022-11-06 21:20:18','2022-11-06 21:20:18',5,17,2021,'PUSKESMAS RI','LOLAK','19','1','0','0','0','1','0','1','0','0','1','10','0','0','2','12','2','0','0','0','2','6','2','2','9','19','0','0','1','0','1','0','0','0','0','0','0','1','1','0','2','0','1','0','0','1','0','1','0','0','1','1','1','0','0','2'),(12,7,'2022-11-06 21:20:18','2022-11-06 21:20:18',1,17,2021,'PUSKESMAS RI','MAELANG','12','0','2','0','0','2','0','0','0','0','0','11','0','2','1','14','0','0','0','0','0','8','1','1','1','11','0','1','0','0','1','0','0','0','0','0','2','0','0','0','2','0','0','1','0','1','0','0','0','0','0','1','1','0','0','2'),(13,7,'2022-11-06 21:20:18','2022-11-06 21:20:18',10,17,2021,'PUSKESMAS RI','PANGIAN','13','2','0','0','0','2','0','1','0','0','1','13','1','0','2','16','1','1','0','0','2','8','5','0','4','17','0','1','1','0','2','0','0','0','0','0','3','0','0','0','3','0','1','0','0','1','0','1','0','0','1','3','0','0','0','3'),(14,7,'2022-11-06 21:20:18','2022-11-06 21:20:18',7,17,2021,'PUSKESMAS RI','TANOYAN','7','1','1','0','0','2','0','1','0','0','1','15','3','0','0','18','1','0','0','0','1','7','7','0','0','14','0','1','1','0','2','0','0','0','0','0','2','0','0','0','2','0','1','0','0','1','0','1','1','0','2','1','1','0','0','2'),(15,7,'2022-11-06 21:20:18','2022-11-06 21:20:18',13,17,2021,'PUSKESMAS RI','PUSIAN','12','1','1','0','0','2','0','1','0','0','1','11','3','0','4','18','1','0','0','0','1','4','2','0','3','9','0','1','1','0','2','0','0','0','0','0','2','0','0','0','2','0','0','0','0','0','1','0','0','0','1','1','0','0','0','1'),(16,7,'2022-11-06 21:20:18','2022-11-06 21:20:18',4,17,2021,'PUSKESMAS RI','DOLODUO','12','2','0','0','0','2','0','1','0','0','1','11','5','0','3','19','4','0','0','0','4','9','4','0','4','17','0','1','1','0','2','1','0','0','0','1','0','0','0','0','0','0','0','0','0','0','1','1','0','0','2','3','0','0','0','3'),(17,7,'2022-11-06 21:20:18','2022-11-06 21:20:18',3,17,2021,'PUSKESMAS RI','IMANDI','16','1','1','0','0','2','0','0','0','0','0','13','1','0','4','18','2','0','0','0','2','12','0','1','5','18','0','1','1','0','2','1','0','0','0','1','1','1','0','0','2','0','0','0','0','0','1','1','0','0','2','1','1','0','0','2'),(18,7,'2022-11-06 21:20:18','2022-11-06 21:20:18',15,17,2021,'PUSKESMAS RI','MOPUYA','16','1','1','0','1','3','0','0','0','0','0','26','0','0','7','33','3','0','0','1','4','14','1','0','7','22','0','0','1','0','1','0','0','0','0','0','4','0','0','1','5','0','1','0','0','1','1','1','1','0','3','2','0','0','0','2');
/*!40000 ALTER TABLE `nakes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `opd`
--

DROP TABLE IF EXISTS `opd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `opd` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `opd`
--

LOCK TABLES `opd` WRITE;
/*!40000 ALTER TABLE `opd` DISABLE KEYS */;
INSERT INTO `opd` VALUES (1,'Dinas Ketahanan Pangan','dinas-ketahanan-pangan','-',NULL,'2021-06-11 13:17:54','2022-06-15 17:29:55'),(2,'Inspektorat Daerah','inspektorat-daerah','-',NULL,'2021-06-11 13:18:27','2022-06-15 17:30:05'),(3,'Badan Perencanaan Pembangunan Daerah','badan-perencanaan-pembangunan-daerah','-',NULL,'2021-06-11 13:18:50','2022-06-15 17:30:58'),(4,'Sekretariat Daerah','sekretariat-daerah','-',NULL,'2021-06-11 13:19:06','2022-06-15 17:31:10'),(5,'Rumah Sakit Umum Daerah','rumah-sakit-umum-daerah','-','2021-07-19 07:13:01','2021-06-11 13:19:23','2022-06-15 17:31:21'),(6,'Dinas Pemberdayaan Perempuan dan Anak','dinas-pemberdayaan-perempuan-dan-anak','-',NULL,'2021-06-11 13:19:40','2022-06-15 17:31:53'),(7,'Dinas Kesehatan','dinas-kesehatan','-',NULL,'2021-07-19 01:20:36','2022-06-15 17:32:25'),(8,'Dinas Pekerjaan Umum dan Penataan Ruang','dinas-pekerjaan-umum-dan-penataan-ruang','-',NULL,'2021-07-19 07:07:56','2022-06-15 17:32:44'),(9,'Dinas Penanggulangan Bencana Daerah','dinas-penanggulangan-bencana-daerah','-',NULL,'2021-07-19 07:08:23','2022-06-15 17:32:56'),(10,'Dinas Sosial','dinas-sosial','-',NULL,'2021-07-19 07:08:31','2022-06-15 17:33:04'),(11,'Dinas Lingkungan Hidup','dinas-lingkungan-hidup',NULL,NULL,'2021-07-19 07:09:03','2022-06-15 17:33:15'),(12,'Dinas Perpustakaan dan Kearsipan','dinas-perpustakaan-dan-kearsipan',NULL,NULL,'2021-07-19 07:09:25','2022-06-15 17:33:30'),(13,'Dinas Pemberdayaan Masyarakat Desa','dinas-pemberdayaan-masyarakat-desa',NULL,NULL,'2021-07-19 07:09:41','2022-06-15 17:33:45'),(14,'Dinas Perkebunan','dinas-perkebunan',NULL,NULL,'2021-07-19 07:10:03','2022-06-15 17:33:55'),(15,'Badan Kepegawaian Pendidikan dan Pelatihan','badan-kepegawaian-pendidikan-dan-pelatihan',NULL,NULL,'2021-07-19 07:10:21','2022-06-15 17:34:17'),(16,'Dinas Pariwisata dan Kebudayaan','dinas-pariwisata-dan-kebudayaan',NULL,NULL,'2021-07-19 07:10:35','2022-06-15 17:34:34'),(17,'Dinas Perikanan','dinas-perikanan',NULL,NULL,'2021-07-19 07:10:46','2022-06-15 17:34:47'),(18,'Dinas Pertanian','dinas-pertanian',NULL,NULL,'2021-07-19 07:11:07','2022-06-15 17:34:56'),(19,'Dinas Kependudukan dan Catatan Sipil','dinas-kependudukan-dan-catatan-sipil',NULL,NULL,'2022-06-15 17:35:07','2022-06-15 17:35:07'),(20,'Dinas Koperasi dan UMKM','dinas-koperasi-dan-umkm',NULL,NULL,'2022-06-15 17:35:14','2022-06-15 17:35:14'),(21,'Dinas Pengendalian Penduduk dan Keluarga Berencana','dinas-pengendalian-penduduk-dan-keluarga-berencana',NULL,NULL,'2022-06-15 17:36:19','2022-06-15 17:36:19'),(22,'Dinas Transmigrasi dan Tenaga Kerja','dinas-transmigrasi-dan-tenaga-kerja',NULL,NULL,'2022-06-15 17:36:30','2022-06-15 17:36:30'),(23,'Dinas Perdagangan dan ESDM','dinas-perdagangan-dan-esdm',NULL,NULL,'2022-06-15 17:36:39','2022-06-15 17:36:39'),(24,'Dinas Penanaman Modal dan PTSP','dinas-penanaman-modal-dan-ptsp',NULL,NULL,'2022-06-15 17:36:53','2022-06-15 17:36:53'),(25,'Satuan Polisi Pamong Praja','satuan-polisi-pamong-praja',NULL,NULL,'2022-06-15 17:36:59','2022-06-15 17:36:59'),(26,'Dinas Pendidikan','dinas-pendidikan',NULL,NULL,'2022-06-15 17:37:06','2022-06-15 17:37:06'),(27,'Dinas Pemuda dan Olahraga','dinas-pemuda-dan-olahraga',NULL,NULL,'2022-06-15 17:37:12','2022-06-15 17:37:12'),(28,'Dinas Perumahan dan Kawasan Permukiman','dinas-perumahan-dan-kawasan-permukiman',NULL,NULL,'2022-06-15 17:37:21','2022-06-15 17:37:21'),(29,'Dinas Komunikasi dan Informatika','dinas-komunikasi-dan-informatika',NULL,NULL,'2022-06-15 17:37:26','2022-06-15 17:37:26'),(30,'Badan Keuangan Daerah','badan-keuangan-daerah',NULL,NULL,'2022-06-15 17:37:31','2022-06-15 17:37:31'),(31,'Dinas Perhubungan','dinas-perhubungan',NULL,NULL,'2022-06-15 17:37:36','2022-06-15 17:37:36'),(32,'Badan Kesatuan Bangsa dan Politik','badan-kesatuan-bangsa-dan-politik',NULL,NULL,'2022-06-15 17:37:47','2022-06-15 17:37:47');
/*!40000 ALTER TABLE `opd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `panas_bumis`
--

DROP TABLE IF EXISTS `panas_bumis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `panas_bumis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_kecamatan` bigint unsigned NOT NULL,
  `panas_bumi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `panas_bumis`
--

LOCK TABLES `panas_bumis` WRITE;
/*!40000 ALTER TABLE `panas_bumis` DISABLE KEYS */;
INSERT INTO `panas_bumis` VALUES (1,2,'Potensi Panas Bumi','Desa Uuwan, 80 c','','2022-11-07 00:17:59','2022-11-07 00:17:59'),(2,3,'Titik Panas Bumi','Desa Mogoyunggung 45c','','2022-11-07 00:18:58','2022-11-07 00:18:58');
/*!40000 ALTER TABLE `panas_bumis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pariwisatas`
--

DROP TABLE IF EXISTS `pariwisatas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pariwisatas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `nama_usaha_wisata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pemilik_pengusaha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_area_m2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kegiatan_usaha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode_wilayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pariwisatas`
--

LOCK TABLES `pariwisatas` WRITE;
/*!40000 ALTER TABLE `pariwisatas` DISABLE KEYS */;
INSERT INTO `pariwisatas` VALUES (1,16,1,4,2021,'Desa Wisata Pasir Putih Sallugo Boki','Bumdes','30000','Wisata Pantai',NULL,'Desa Pasir Putih Kecamatan Sang Tombolang','0.844674','123.814808','Sudah pernah dikunjungi oleh wisatawan asing','assets/pariwisata/Ij0V1St5w5mbUAo0NGDCflWb7aZq14ezxE1AMtXG.png','2022-10-29 19:11:53','2022-11-02 03:11:45'),(2,16,1,4,2021,'Kawasan Pulau Tiga','Pemprof','2000000',' Wisata Pantai dan Taman Laut',NULL,'Desa Pasir Putih Kecamatan Sang Tombolang','0.862933','124.810899','Sering menjadi kunjungan wisatawan asing',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(3,16,1,4,2021,'Pantai Pasir Putih','Pemda','70000','Wisata Pantai',NULL,'Desa Pasir Putih Kecamatan Sang Tombolang','0.843153','123.821723','Menjadi kunjungan wisatawan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(4,16,1,4,2021,'Pantai Indah Maelang','Bumdes','20000','Wisata Pantai',NULL,'Desa Maelang Kec.Sang Tombolang','0.840114','123.833984','Belum dikelola untuk dijadikan sumber pendapatan desa',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(5,16,1,4,2021,'Pulau Tai\'/Gogabola Maelang','Pemdes','13000','Wisata Pulau',NULL,'Desa Maelang Kec.Sang Tombolang','0.842704','123.82998','Masih dalam pengembangan tetapi sudah ada pengunjung',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(6,16,1,4,2021,'Pantai Sumpit','Pemdes',NULL,'Wisata Pantai',NULL,'Desa Bolangat Sang Tombolang','0.84014','123.842884',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(7,16,1,4,2021,'Pantai Fajar Indah Babo','Ani Mirawan','2000','Wisata Pantai',NULL,'Desa Babo Kec.Sang Tombolang','0.83905','123.866242',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(8,16,1,4,2021,'Pantai Nyiur Hijau Babo','Yulpa','2000','Wisata Pantai',NULL,'Desa Babo Kec.Sang Tombolang','0.839036',NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(9,16,1,4,2021,'Pantai Hidayah Babo','Hidayati','2000','Wisata Pantai',NULL,'Desa Babo Kec.Sang Tombolang','0.838673','123.867937',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(10,16,1,4,2021,'Pantai Nurmala Indah Babo','Swandi Goniwada','2000','Wisata Pantai',NULL,'Desa Babo Kec.Sang Tombolang','0.838806','123.868566',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(11,16,1,4,2021,'Pantai Babo Moonow','Nahara Dilapanga','2500','Wisata Pantai',NULL,'Desa Babo Kec.Sang Tombolang','0.838652','123.869773','Sudah pernah dikunjungi oleh wisatawan asing',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(12,16,1,4,2021,'Pantai Ayong','Pemdes','5000','Wisata Pantai',NULL,'Desa Ayong Kec.Sang Tombolang','0.841728','123.889494','Perlu pengembangan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(13,16,1,4,2021,'Kawasan Mangrove Ayong','Pemdes',NULL,'Wisata Pantai',NULL,'Desa Ayong Kec.Sang Tombolang','0.841706','123.892207','Perlu pengembangan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(14,16,2,4,2021,'Lokasi Karapan sapi Sirkuit Lembah Sunyi','Pemdes','5000','Usaha Arena Permainan',NULL,'Desa Ikhwan Kec.Dumoga Barat','0.513425','123.956819','Sudah pernah dilaksanakan ajang perlombaan ',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(15,16,2,4,2021,'Air Panas Desa Ihwan','Pemdes','1000','Pemandian Alam',NULL,'Desa Ikhwan Kec.Dumoga Barat','0.513425','123.956399','Perlu dikembangkan tapi sudah banyak kunjungan masyarakat',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(16,16,2,4,2021,'Kolam Renang Doloduo 2','Pemdes',NULL,'Taman Wisata/Rekreasi',NULL,'Desa Doloduo 2 Kec.Dumoga Barat','0.520156','123.944669','Dalam perencanaan pembangunan lokasi kolam renang',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(17,16,2,4,2021,'Objek Wisata Toraut Taman Nasional Bogani Nani Wartabone','TNBW',NULL,'Taman Nasional',NULL,'Desa Toraut Utara Kec.Dumoga Barat','0.562313','123.904461','Diperlukan pengembangan/pemeliharaan/pembersihan, dan juga terdapat wisma wallace',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(18,16,2,4,2021,'Gua Batu Berkamar','Sangadi Toraut Utara',NULL,'Wisata Gua',NULL,'Desa Toraut Utara Kec.Dumoga Barat','0.562975','123.906198','Koordinat belum sesuai dengan lokasi wisata',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(19,16,2,4,2021,'Air Terjun Tumpa','TNBW',NULL,'Pemandian Alam',NULL,'Desa Toraut Utara Kec.Dumoga Barat','0.562975','123.906198','Koordinat belum sesuai dengan lokasi wisata',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(20,16,2,4,2021,'Wisata Air Sungai Toraut Utara','TNBW',NULL,'Wisata Air Sungai',NULL,'Desa Toraut Utara Kec.Dumoga Barat','0.562604','123.903082','Dalam perencanaan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(21,16,2,4,2021,'Penangkaran Maleo Matayangan','TNBW',NULL,'Taman Konservasi di Luar Habitat Alami',NULL,'Desa Matayangan Kec.Dumoga Barat','0.472779','123.931834','Perlu pengembangan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(22,16,3,4,2021,'Kolam Air Panas Modomang/Kolam Y\'hanget','I Wayan Sukaryawan','7800','Taman Wisata/Rekreasi dan Pemandian Alam',NULL,'Desa Modomang Kec.Dumoga Timur','0.587871','124.073427','Dalam pengembangan tapi sudah dibuka untuk pengunjung dan telah memiliki banyak pengunjung',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(23,16,3,4,2021,'Penangkaran Maleo Tambun','TNBW',NULL,'Suaka Marga Satwa & Cagar Alam',NULL,'Desa Pinonobatuan Kec.Dumoga Timur','0.588769','124.118757',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(24,16,3,4,2021,'Penangkaran Burung Maleo Pinonobatuon Induk',NULL,NULL,NULL,NULL,'Desa Pinonobatuan Induk Kec.Dumoga Timur','0.58868','124°.11888','Maleo senkawor atau maleo, yang dalam nama ilmiahnya Macrocephalon maleo adalah sejenis burung gosong yang berukuran sedang, dengan panjang sekira 55 sentimeter, dan merupakan satu-satunya burung di dalam genus tunggal Macrocephalon. Yang unik dari maleo ',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(25,16,3,4,2021,'Penangkaran Burung Muara Pusian',NULL,NULL,NULL,NULL,'Desa Pusian Kec.Dumoga Timur','0.69755','12411923','sudah Banyak Pengunjung dari mancanegara',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(26,16,3,4,2021,'Wisata Air Panas Mogoyunggung',NULL,NULL,NULL,NULL,'Desa Mogoyunggung Kec.Dumoga Timur','0570522\"','124.050623\"',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(27,16,3,4,2021,'Wisata Pemandian Air Panas Citawaya',NULL,NULL,NULL,NULL,'Desa Pinonobatuon Kec.Dumoga Timur','00° 34\' 24\"','124° 06.36\"',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(28,16,3,4,2021,'Wisata Calvelindo Swimming Pool',NULL,NULL,NULL,NULL,'Desa Dumoga II Kec.Dumoga Timur','0.61035','124.05575',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(29,16,4,4,2021,'Wisata Kebun Jati Gelebug Chandra','Gelebug Chandra','16000','Taman Wisata/Rekreasi',NULL,'Desa Mopugad Selatan Kec.Dumoga Utara','0.556768','123.964087',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(30,16,5,4,2021,'Air Terjun Desa Sauk','Pemdes',NULL,'Pemandian alam',NULL,'Desa Sauk Kec.Lolak','0.816580','123955182','sudah banyak pengunjung dan masih perlu pengembangan,',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(31,16,5,4,2021,'Pantai Beau Sauk','Pemdes','15000','Wisata Pantai',NULL,'Sauk, Kec. Lolak','0.836351','123.934064',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(32,16,5,4,2021,'Waduk Pindol','Kementrian PUPR','8000','Wisata Buatan',NULL,'Desa Pindol Kecamatan Lolak','0.782283','124051426',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(33,16,5,4,2021,'Kawasan Mangrove Baturapa 2','Bumdes','35000','Wisata Pantai',NULL,'Baturapa 2 Kecamatan Lolak','0.835956','123.95923','Masih dalam pengembangan untuk dijadikan tempat wisata',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(34,16,5,4,2021,'Pantai Bungin',NULL,NULL,'Wisata Pantai',NULL,'Motabang Kecamatan Lolak','0.880036','123.985404','Sering menjadi kunjungan wisatawan, dan terdapat wisata mangrove di belakangnya',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(35,16,5,4,2021,'Pantai Pulau Molosing','Pemprof','140000','Wisata Pantai dan Taman Laut',NULL,'Desa Lolak Kec. Lolak','0.901238','123.976788','Sering dikunjungi oleh wisatawan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(36,16,5,4,2021,'Pantai Pondok Cinta','Anonim',NULL,'Wisata Pantai',NULL,'Desa Lolak Kec. Lolak','0.899684','123.976999',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(37,16,5,4,2021,'Pantai Losari','Anonim','3000','Wisata Pantai',NULL,'Desa Lolak Kec. Lolak',NULL,'124.006896','Sering dikunjungi oleh wisatawan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(38,16,5,4,2021,'Pantai Lolak','Anonim',NULL,'Wisata Pantai',NULL,'Desa Lolak Kec. Lolak','0.889027','124.009097',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(39,16,5,4,2021,'Wisata Pantai Lolak Indah','Yasti Mokoagow','12000','Wisata Pantai',NULL,'Desa Lolak Kec. Lolak','0.890149','124.011487',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(40,16,5,4,2021,'Pantai Tanjung Ompu','Pemda','2000','Wisata Pantai',NULL,'Desa Lalow Kec.Lolak','0.904005','124.041448','Perlu pengembangan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(41,16,5,4,2021,'Kawasan Mangrove Tuyat','Pemdes',NULL,'Wisata Pantai',NULL,'Desa Tuyat Kec.Lolak','0.908994','124.057413',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(42,16,6,4,2021,'Pemandian Alam Kukut Biru','Pemdes','500','Pemandian Alam',NULL,'Desa Komangaan Kec.Bolaang','0.810919','124.204185','Perlu pengembangan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(43,16,6,4,2021,'Makam Bua Hotinimbang Manopo Sugeha','Pemda','50','Peninggalan Sejarah dan  Wisata Budaya',NULL,'Desa Langagon Kec.Bolaang','0.880848','124.122002',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(44,16,7,4,2021,'Agrowisata Sawah Padi Bombanon','Pemdes','10000','Agrowisata',NULL,'Bombanon Kec.Lolayan','0.653846','124.190061',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(45,16,7,4,2021,'Wisata Pemandian Air Panas Bakan','Pemdes','12000','Aktivitas Wisata Air',NULL,'Desa Bakan Kec.Lolayan','0.598134','124.292925',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(46,16,7,4,2021,'Wahana Totabuan Blessing','Manly Komaling Roring','20000','Wisata Tirta/Aktivitas Wisata Air',NULL,'Tungoi 1 Kecamatan Lolayan','0.657528','124.24382',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(47,16,7,4,2021,'Wisata Air Terjun 5 Dimensi Mengkang','Pemdes','tinggi 30 Meter','Wisata alam',NULL,'Desa Mengkang Kecamatan Lolayan','0.575145','124213154','Obyek wisata air terjun ini telah meyimpan potensi wisata yang lebih menarik, serta segarnya suasana dan kelestarian alamya akan menjadikan kita untuk lebih betah, apalagi dengan jernihnya air yang dingin.Selain itu, disudut desa juga terdapat papan bertu',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(48,16,7,4,2021,'Wisata Religi Kolipot','Pemdes',NULL,'Wisata Religi',NULL,'Desa Mopait Kecamatan Lolayan','0.78508','12416633','wisata religi bentuk kearifan local, dengan falsafah daun kolipot yang harum baunya, dan disenangi oleh seluruh masyarakat, serta mampu menyatukan beras yang tercerai berai menjadi sebuah kesatuan yang tidak terpisahkan.',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(49,16,7,4,2021,'Rumah Adat Monopi',NULL,NULL,NULL,NULL,'Desa Mengkang Kecamatan Lolayan',NULL,NULL,'Rumah adat ini menyimpan 300 jenis benda peninggalan nenek moyang zaman dahulu, mulai dari alat rumah tangga sampai bercocok tanam. Alat peninggalan seperti bubu, singkop dan pole lotung dan alu, pingku, sikaku, bonagoi, biko, sondo, dulang dan uka inkopi',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(50,16,7,4,2021,'Wisata Watercool Pinaingan','Pemdes',NULL,'Wisata pemandian Alam',NULL,'Desa Matali Baru Kecamatan Lolayan','0.55571','12429051','Pinaingan Watercool banyak didatangi pengunjung yang ingin menikmati airnya yang dingin',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(51,16,8,4,2021,'Wisata Bailayong Paradise Pool',NULL,NULL,NULL,NULL,'Desa Passi Kecamatan Passi Barat','0.75431','12428936',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(52,16,8,4,2021,'Wisata Air Terjun Muntoi',NULL,NULL,NULL,NULL,'Desa Muntoi Kecamatan Passi Barat','0.4829','1241422',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(53,16,8,4,2021,'Wisata Goa Kristal Inuai',NULL,NULL,NULL,NULL,'Desa Inuai Kecamatan Passi Barat','0.473423','124121099',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(54,16,8,4,2021,'Wisata Air Terjun Mominit',NULL,NULL,NULL,NULL,'Desa Otam Kecamatan Passi Barat','0.473423','124121099',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(55,16,8,4,2021,'Wisata Air Terjun Inuai',NULL,NULL,NULL,NULL,'Desa Inuai Kecamatan Passi Barat','0.49221','124131667',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(56,16,8,4,2021,'Wisata Embun Tudu Aog',NULL,NULL,NULL,NULL,'Desa Tudu Aog Kecamatan Passi Barat',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(57,16,8,4,2021,'Wisata Air Terjun Pogabat',NULL,NULL,NULL,NULL,'Desa Otam Kecamatan Passi Barat',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(58,16,8,4,2021,'Wisata Geo Wisata Wangga',NULL,NULL,NULL,NULL,'Desa Wangga Kecamatan Passi Barat',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(59,16,8,4,2021,'Wisata Kuburan Bogani',NULL,NULL,NULL,NULL,'Desa Passi II Kecamatan Passi Barat',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(60,16,8,4,2021,'Wisata Makam Nojodo Mokoginta',NULL,NULL,NULL,NULL,'Desa Bulud Kecamatan Passi Barat',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(61,16,8,4,2021,'Wisata Makam Sainun Mokodompit',NULL,NULL,NULL,NULL,'Desa Bulud Kecamatan Passi Barat',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(62,16,9,4,2021,'Pantai Wisata Nonapan Baru','Pemdes','20000','Wisata Pantai',NULL,'Desa Nonapan Baru Kecamatan Poigar','0.994626','124.237971','Belum dikelola untuk dijadikan sumber pendapatan desa',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(63,16,9,4,2021,'Air Terjun Buyungon','Pemdes',NULL,'Pemandian Alam',NULL,'Desa Mariri I Kec. Poigar',NULL,NULL,'sudah ada pengunjung',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(64,16,9,4,2021,'Pantai Tiberias','Bumdes','8000','Wisata Pantai',NULL,'Desa Tiberias Kec.Poigar','1.00032','124.264737','Masih dalam pengembangan tetapi sudah ada pengunjung, dan akan bekerja sama dengan investor',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(65,16,9,4,2021,'Wisata Tambak Udang Tiberias','PT. Swantika','200000','Wisata Tambak Udang',NULL,'Desa Tiberias Kec.Poigar','0.996442','124.271774','Masih dalam proses pembangunan/ pengembangan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(66,16,9,4,2021,'Pantai Mariri Baru','Pemdes','5000','Wisata Pantai',NULL,'Desa Mariri Baru Kecamatan Poigar','0.99312','124.215332','Masih dalam pembangunan/pengembangan kawasan wisata pinggir pantai',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(67,16,9,4,2021,'Pantai Pasir Putih Tanjung Mariri Baru','Bumdes','40000','Wisata Pantai',NULL,'Desa Mariri Baru Kecamatan Poigar','0.981025','124.189946','Masih dalam perencanaan pengembangan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(68,16,9,4,2021,'Campladean Beach','Otorita','30000','Wisata Pantai',NULL,'Desa Mariri Lama Kecamataan Poigar','0.986559','124.199017','Sudah memiliki pengunjung',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(69,16,10,4,2021,'Agrowisata (Kebun Holtikultura) Desa Insil','Pemdes',NULL,'Wisata Agro',NULL,'Desa Insil Kecamatan Passi Timur',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(70,16,10,4,2021,'Agrowisata (Kebun Holtikultura)  Desa Sinsingon','Pemdes',NULL,'Wisata Agro',NULL,'Desa Sinsingon Kecamatan Passi Timur',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(71,16,10,4,2021,'Wisata Swimming pool mobuya',NULL,NULL,NULL,NULL,'Desa Mobuya Kecamatan Passi Timur','0.82467','12443156',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(72,16,11,4,2021,'Pantai Lolan','Bumdes','90000','Wisata Pantai',NULL,'Desa Lolan Kecamatan Bolaang Timur','0.954403','124.171089','Sudah ada pengunjung',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(73,16,11,4,2021,NULL,'Bumdes','1000','Pemandian Alam dan Petualangan Alam',NULL,'Desa Lolan2  Kecamatan Bolaang Timur','0.938365','124.200028','Dalam perencanaan perbaikan lokasi wisata',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(74,16,11,4,2021,'Makam Raja Abraham','Pemdes','2160','Peninggalan Sejarah dan  Wisata Budaya',NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.938593','124.162726',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(75,16,11,4,2021,'Wisata Budaya Desa Bolaang 1','Pemdes','1000','Peninggalan Sejarah',NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.941303','124.16059','Lokasi Istana Raja Komalig yang telah dikabat oleh permesta',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(76,16,11,4,2021,'Wisata Budaya Desa Bolaang 1',NULL,NULL,NULL,NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.94071','124.156997','Lokasi Gereja Pertama di Bolaang, Gereja Kalvari',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(77,16,11,4,2021,'Wisata Budaya Desa Bolaang 1',NULL,NULL,NULL,NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.937342','124.162436','Lokasi Kuburan Penduduk Tionghoa zaman Kerajaan Bolaang',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(78,16,11,4,2021,'Wisata Budaya Desa Bolaang 1',NULL,NULL,NULL,NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.943777','124.159233','Lokasi Kuburan Penduduk zaman Kerajaan Bolaang',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(79,16,11,4,2021,'Wisata Budaya Desa Bolaang 1',NULL,NULL,NULL,NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.937016','124.152107','Makam Kapten Kapal zaman Kerajaan Bolaang, Yohanis Toli',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(80,16,11,4,2021,'Wisata Budaya Desa Bolaang 1',NULL,NULL,NULL,NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.939401','124.153777','Pondasi skoni sebagai tempat penampungan minyak waktu penjajahan Belanda',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(81,16,11,4,2021,'Wisata Budaya Desa Bolaang 1',NULL,NULL,NULL,NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.939235','124.15541','Makam Pendeta dan Guru pertama Bolmong, Pdt. Bastian',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(82,16,11,4,2021,'Wisata Budaya Desa Bolaang 1',NULL,NULL,NULL,NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.942551','124.157556','Lokasi pasar zaman kerajaan Bolaang',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(83,16,11,4,2021,'Kawasan Mangrove Bolaang 1','Pemdes','30000','Wisata Pantai',NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.945875','124.160763','Perlu dikembangkan dan dilakukan pembersihan',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(84,16,11,4,2021,'Pulau Pantai Pasir Putih/Napo Bolaang 1','Bumdes','100000','Wisata Pantai',NULL,'Desa Bolaang 1 Kecamatan Bolaang Timur','0.975564','124.150312','Mercusuar peninggalan zaman Kerajaan Bolaang,  hanya muncul ketika air laut surut',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(85,16,11,4,2021,'Air Terjun Desa Ambang 2','Pemdes','100','Pemandian Alam dan Petualangan Alam',NULL,'Desa Ambang 2 Kec.Bolaang Timur','0.906516','124.128873',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(86,16,12,4,2021,'Wisata Religi Motayok',NULL,NULL,NULL,NULL,'Desa Bilalang IV Kec.Bilalang',NULL,NULL,'Motayok adalah tradisi pengobatan yang dipercaya melibatkan roh leluhur.  Kearifan tradisi ini merupakan cara pengobatan nenek moyang suku Mongondow yang mediami wilayah pegunungan.',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(87,16,12,4,2021,'Sumur Peninggalan Pendeta Belanda Pertama di Bolaang Mongondow',NULL,NULL,NULL,NULL,'Desa Bilalang III Kec.Bilalang',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(88,16,13,4,2021,'Wisata Gunung Kramat Bumbungon',NULL,NULL,NULL,NULL,'Desa Bumbungon Kecmatan Dumoga','0.66481','124.10615',NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(89,16,14,4,2021,'Wisata Sungai Lembah Indah',NULL,NULL,NULL,NULL,'Desa Konarom Kec.Dumoga Tenggara',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(90,16,15,4,2021,'Wisata Relegi Ogo-ogo',NULL,NULL,NULL,NULL,'Desa Werdhi Agung Selatan Kec.Dumoga Tengah',NULL,NULL,NULL,NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53'),(91,16,15,4,2021,'Wisata Religi Hadrah Kosio',NULL,NULL,NULL,NULL,'Desa Kosio Kec.Dumoga Tengah',NULL,NULL,'Hadrah tradisonal menjadi salah satu atraksi kegiatan pada ajang Festival Seni Budaya Jawa Tondano di Desa Kosio. Sehingga kegiatan ini perlu dikembangkan dan dicatat kedalam kalender ivent pariwisata.',NULL,'2022-10-29 19:11:53','2022-10-29 19:11:53');
/*!40000 ALTER TABLE `pariwisatas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasars`
--

DROP TABLE IF EXISTS `pasars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pasars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_kecamatan` bigint unsigned NOT NULL,
  `nama_pasar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasars`
--

LOCK TABLES `pasars` WRITE;
/*!40000 ALTER TABLE `pasars` DISABLE KEYS */;
INSERT INTO `pasars` VALUES (1,9,'Pasar Poigar','Berfungsi','','2022-11-07 00:08:02','2022-11-07 00:08:02'),(2,6,'Pasar Inobonto','Berfungsi','','2022-11-07 00:08:21','2022-11-07 00:08:21'),(3,5,'Pasar Lolak','Berfungsi','','2022-11-07 00:08:37','2022-11-07 00:08:37'),(4,5,'Pasar Lolak Induk','Belum Berfungsi','','2022-11-07 00:08:49','2022-11-07 00:11:43'),(5,13,'Pasar Pusian','Berfungsi','','2022-11-07 00:09:11','2022-11-07 00:09:11'),(6,3,'Pasar Imandi','Berfungsi','','2022-11-07 00:09:27','2022-11-07 00:09:27'),(7,15,'Pasar Ibolian','Berfungsi','','2022-11-07 00:09:42','2022-11-07 00:09:42'),(8,2,'Pasar Doloduo','Berfungsi','','2022-11-07 00:10:02','2022-11-07 00:10:02'),(9,4,'Pasar Mopuya','Berfungsi','','2022-11-07 00:10:17','2022-11-07 00:10:17'),(10,3,'Pasar Imandi Pengembangan','KDP (Konstruksi Dalam Penyelesaian)','','2022-11-07 00:10:49','2022-11-07 00:10:49'),(11,13,'Pasar Bumbungon','Berfungsi/Tahap Uji Coba','','2022-11-07 00:11:10','2022-11-07 00:11:10'),(12,5,'Pasar Buntalo','KDP (Konstruksi Dalam Penyelesaian)','','2022-11-07 00:11:27','2022-11-07 00:11:27');
/*!40000 ALTER TABLE `pasars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `pauds`
--

DROP TABLE IF EXISTS `pauds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pauds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_kecamatan` bigint unsigned NOT NULL,
  `nama_paud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pauds`
--

LOCK TABLES `pauds` WRITE;
/*!40000 ALTER TABLE `pauds` DISABLE KEYS */;
INSERT INTO `pauds` VALUES (1,11,'TK DAYOW TADOY','DESA TADOY','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(2,11,'TK NURHIDAYAH BANTIK','DESA BANTIK','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(3,11,'TK MELATI BOLAANG','DESA BOLAANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(4,11,'TK MONOMPIA LOLAN','DESA LOLAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(5,11,'TK MOTOTABIAN AMBANG','DESA AMBANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(6,11,'TK INATON BOLAANG','DESA BOLAANG 1','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(7,6,'TK AL KHAIRAAT INOBONTO','KELURAHAN INOBONTO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(8,6,'TK ANUGERAH SOLIMANDUNGAN','DESA SOLIMANDUNGAN II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(9,6,'TK ASYIFA LANGAGON','DESA LANGAGON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(10,6,'TK DAHLIA INOBONTO','DESA INOBONTO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(11,6,'TK INTAN LANGAGON','DESA LANGAGON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(12,6,'TK KRISAN LANGAGON','DESA LANGAGON II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(13,6,'TK KRISTEN EKLESIA INOBONTO','KELURAHAN INOBONTO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(14,6,'TK MOTOTOMPIAAN INOBONTO','KELURAHAN INOBONTO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(15,6,'TK MUTIARA INOBONTO','DESA INOBONTO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(16,6,'TK NONAYUKAN SOLIMANDUNGAN','DESA SOLIMANDUNGAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(17,6,'TK BUGENFIL','DESA BANGOMOLUNOW','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(18,6,'TK TOTANOBAN KOMANGAAN','DESA KOMANGAAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(19,6,'KB BINA ILMU ','DESA INOBONTO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(20,6,'KB INTAN LANGAGON','DESA LANGAGON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(21,6,'KB PERMATA HATI BANGOMOLUNOW','DESA BANGOMOLUNOW','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(22,6,'PAUD FILADELFIA INOBONTO II','KELURAHAN INOBONTO II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(23,6,'SPS RAODAH ','DESA BANGOMOLUNOW','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(24,6,'SPS TESALONIKA','DESA LANGAGON II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(25,9,'PAUD MELATI MONDATONG','DESA MONDATONG BARU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(26,9,'TK AL AMIN AL KHAIRAAT','DESA NONAPAN II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(27,9,'TK ALAMANDA MARIRI LAMA','DESA MARIRI LAMA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(28,9,'TK ANGGREK NANASI','DESA NANASI TIMUR','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(29,9,'TK EFRATA POIGAR II','DESA POIGAR II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(30,9,'TK HANDAYANI GOGALUMAN','DESA GOGALUMAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(31,9,'TK IMANUEL TIBERIAS','DESA TIBERIAS','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(32,9,'TK KARTINI MONDATONG','DESA MONDATONG ','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(33,9,'TK KRISTEN BETHESDA TIBERIAS','DESA TIBERIAS','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(34,9,'TK MAWAR NONAPAN 1','DESA NONAPAN 1','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(35,9,'TK MELATI II NONAPAN','DESA NONAPAN BARU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(36,9,'TK MELATI WINERU','DESA WINERU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(37,9,'TK MIRACLE NANASI','DESA NANASI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(38,9,'TK TERATAI 1 POIGAR 1','DESA POIGAR 1','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(39,9,'TK TERATAI II POIGAR III','DESA POIGAR III','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(40,9,'PAUD GENERASI BINTANG POIGAR II','DESA POIGAR II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(41,9,'TK TUMOU TOU MARIRI BARU','DESA MARIRI BARU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(42,9,'SPS EKLESIA WINERU','DESA WINERU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(43,9,'SPS FASTABIQULKHAIRAT AISYIYAH','DESA POIGAR II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(44,9,'SPS IMANUEL TIBERIAS','DESA TIBERIAS','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(45,5,'PAUD DARUSALAM MONGKOINIT','DESA MONGKOINIT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(46,5,'PAUD HARAPAN BUNTALO SELATAN','DESA BUNTALO SELATAB','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(47,5,'TK AL USWAH MONGKOINIT','DESA MONGKOINIT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(48,5,'TK BUNDA TANDU','DESA TANDU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(49,5,'TK DAHLIA PINOGALUMAN','DESA PINOGALUMAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(50,5,'TK FAJAR ILMI DIAT','DESA DIAT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(51,5,'TK FLAMBOYAN BATURAPA','DESA BATURAPA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(52,5,'TK KASIH IBU SAUK','DESA SAUK','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(53,5,'TK KRISTEN NAZARETH LOLAK','DESA LOLAK','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(54,5,'TK KRISTEN SOLAGRATIA BUNTALO','DESA BUNTALO ','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(55,5,'TK KRISTEN TORSINA','DESA LOLAK II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(56,5,'TK PELANGI MONGKOINIT BARAT','DESA MONGKOINIT BARAT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(57,5,'TK FILADELFIA TUYAT','DESA TUYAT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(58,5,'TK KUNTUM MEKAR BATURAPA','DESA BATURAPA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(59,5,'TK LABUAN INDAH','DESA LABUAN UKI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(60,5,'TK MOLOSING MOTABANG','DESA MOTABANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(61,5,'TK MONOMPIA BUMBUNG','DESA BUMBUNG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(62,5,'TK MURNI SOLOG','DESA SOLOG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(63,5,'TK NUR SIDIK TOTABUAN','DESA TOTABUAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(64,5,'TK KARTIKA XXI SERUNI','DESA DULANGON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(65,5,'TK NURSYIFA LOLAK','DESA LOLAK ','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(66,5,'TK NUSA INDAH PINDOLILI','DESA PINDOLILI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(67,5,'TK PESAN MAMA SOLOG','DESA SOLOG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(68,5,'TK QUEEN LABUAN','DESA LABUAN UKI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(69,5,'TK SINAR LESTARI MOTABANG','DESA MOTABANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(70,5,'TK TUNAS BANGSA TERPADU','DESA LALOW','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(71,5,'TK IT BINA INSAN','DESA LOLAK','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(72,5,'TK BERSATU PINDOL','DESA PINDOL','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(73,5,'PAUD TUNAS MUDA LOLAK 2','DESA LOLAK 2','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(74,5,'KB AL ISLAH MOTABANG','DESA MOTABANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(75,5,'KB AN NISSA 1 LOLAK','DESA LOLAK','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(76,5,'KB TUNAS BOGANI DULANGON','DESA DULANGON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(77,5,'KB MURNI','DESA SOLOG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(78,5,'KB SINAR LESTARI MOTABANG','DESA MOTABANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(79,5,'SPS AL HIKMAH MOTABANG','DESA MOTABANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(80,5,'SPS AL IQLAS BUMBUNG','DESA BUMBUNG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(81,5,'SPS AL FURQON SAUK','DESA SAUK','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(82,5,'SPS AL FURQON MONGKOINIT','DESA MONGKOINIT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(83,5,'SPS AL IQRO LOLAK','DESA LOLAK','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(84,5,'SPS ALAAQ THORIQ MOTABANG','DESA MOTABANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(85,5,'SPS AL MUMINA ','DESA MOTABANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(86,5,'SPS AN NUR LOLAK','DESA LOLAK','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(87,5,'SPS MURNI LOLAK','DESA LOLAK','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(88,5,'SPS SERUNI MONGKOINIT','DESA MONGKOINIT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(89,1,'TK ALLUTFI LOLANAN','DESA LOLANAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(90,1,'TK AL IKHLAS LOLANAN','DESA LOLANAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(91,1,'TK ALUMAN MAELANG','DESA MAELANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(92,1,'TK ANGGREK BOLANGAT TIMUR','DESA BOLANGAT TIMUR','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(93,1,'TK BERINGIN BABO','DESA BABO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(94,1,'TK JAYA BOLANGAT','DESA BOLANGAT TIMUR','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(95,1,'TK MAWAR DOMISIL','DESA DOMISIL M00N0W','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(96,1,'TK MAWAR II PASIR PUTIH','DESA PASIR PUTIH','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(97,1,'TK MELATI SATAP BATUMERAH','DESA BATUMERAH','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(98,1,'TK PANGI','DESA PANGI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(99,1,'TK SERUNI AYONG','DESA AYONG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(100,1,'KB AMALIA JAYA LOLANAN','DESA LOLANAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(101,1,'KB ANUGERAH BABO','DESA BABO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(102,1,'KB BOUGENVILE BOLANGAT','DESA BOLANGAT ','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(103,1,'KB KARUNIA AYONG','DESA AYONG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(104,1,'KB MOONOW DOMISIL','DESA DOMISIL','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(105,1,'PAUD PELANGI PANGI','DESA PANGI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(106,1,'PAUD TERATAI MAELANG','DESA MAELANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(107,8,'PAUD BHAYANGKARI II INUAI','DESA INUAI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(108,8,'TK DEWI SARTIKA BULUD','DESA BULUD','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(109,8,'TK INATON LOBONG','DESA LOBONG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(110,8,'TK MUALIMIN BINTAU','DESA BINTAU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(111,8,'TK RESTU IBU POYUYANAN','DESA POYUYANAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(112,8,'TK SITI AISA MUNTOI','DESA MUNTOI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(113,8,'TK SITI MASITA 2','DESA PASSI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(114,8,'TK AL FATIHA','DESA OTAM','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(115,8,'TK SITI MASITA 1 ','DESA PASSI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(116,8,'TK TERBIT TERANG WANGGA','DESA WANGGA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(117,8,'SPS ANNAMIROH OTAM','DESA OTAM','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(118,10,'TK BOHUSAMI SINGSINGON','DESA SINGSINGON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(119,10,'TK DHARMA WANITA POOPO','DESA POOPO BARAT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(120,10,'TK ESTER MANEMBO','DESA MANEMBO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(121,10,'TK KASIH IBU PANGIAN','DESA PANGIAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(122,10,'TK KUNTUM SEGAR PANGIAN','DESA PANGIAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(123,10,'TK SYALOOM MOBUYA','DESA MOBUYA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(124,10,'TK TERATAI INSIL','DESA INSIL','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(125,10,'TK TUNAS HARAPAN POOPO','DESA POOPO SELATAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(126,10,'KB MELATI POOPO ','DESA POOPO BARAT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(127,10,'SPS AL IKHLAS PANGIAN','DESA PANGIAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(128,10,'SPS AT TAQWA PANGIAN','DESA PANGIAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(129,12,'TK ABA III TUDU AOG','DESA TUDU AG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(130,12,'TK MOONOW BILALANG ','DESA BILALANG III','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(131,12,'TK PKK BILALANG IV ','DESA BILALANG IV','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(132,12,'PAUD BUNDA BILALANG BARU','DESA BILALANG BARU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(133,12,'KB MOONOW BILALANG','DESA BILALANG III','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(134,7,'TK NEGERI PEMBINA','DESA KOPANDAKAN II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(135,7,'TK ANNISA TANOYAN SELATAN','DESA TANOYAN SELATAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(136,7,'TK KAMBOJA','DESA LOLAYAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(137,7,'TK KARTINI MOPUSI','DESA MOPUSI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(138,7,'TK MANDIRI TUNGOI','DESA TUNGOI II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(139,7,'TK MELATI MATALI BARU','DESA MATALI BARU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(140,7,'TK PGRI ABAK','DESA ABAK','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(141,7,'TK PGRI BERINGIN MARDIAH','DESA TANOYAN UTARA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(142,7,'TK PGRI KEMBANG MEKAR','DESA TUNGOI 1','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(143,7,'TK SATAP NUNUK','DESA TAPA AOG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(144,7,'TK SETIA BUDI BAKAN','DESA BAKAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(145,7,'TK SYALOOM BOMBANON','DESA BOMBANON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(146,7,'TK TOTANOBAN MENGKANG','DESA MENGKANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(147,7,'TK TUNAS HARAPAN MOPAIT','DESA MOPAIT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(148,7,'KB KREATIF MANDIRI ','DESA TUNGOI 2','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(149,7,'KB LESTARI ','DESA MOPAIT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(150,7,'KB MELATI BAKAN','DESA BAKAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(151,7,'KB SION BOMBANON','DESA BOMBANON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(152,7,'PAUD KARTINI MANDIRI TUNGOI 1','DESA TUNGOI 1','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(153,13,'TK KASIH IBU BUMBUNGON','DESA BUMBUNGON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(154,13,'TK MUTIARA KASIH PUSIAN SELATAN','DESA PUSIAN SELATAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(155,13,'TK PERMATA BANGSA SINIYUNG','DESA SINIYUNG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(156,13,'TK LESTARI PKK SINYUNG','DESA SINIYUNG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(157,13,'TK PINTAR SINIYUNG','DESA SINIYUNG 1','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(158,13,'TK PKK WALANDA KIDS PONOMPIAAN','DESA PONOMPIAAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(159,13,'TK RESTU BUNDA PUSIAN BARAT','DESA PUSIAN BARAT ','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(160,13,'TK NURUL IMAN TORUAKAT','DESA TORUAKAT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(161,13,'TK PKK PUSIAN','DESA PUSIAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(162,13,'TK CINTA KASIH IBU DUMOGA 1','DESA DUMOGA 1','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(163,13,'TK EZRA TORUAKAT','DESA TORUAKAT','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(164,13,'TK DEBORA KANAAN','DESA KANAAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(165,13,'KB DEBORA KANAAN','DESA KANAAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(166,13,'KB LEMBAH AYALON','DESA KANAAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(167,13,'KB MUTIARA HATI PUSIAN SELATAN','DESA PUSIAN SELATAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(168,13,'SPS DEBORA KANAAN','DESA KANAAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(169,13,'SPS NURUL YAKIN SINIYUNG 1','DESA SINIYUNG 1','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(170,3,'PAUD INSPIRASI TOAR','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(171,3,'PAUD SARASWATI KEMBANG SARI','DESA KEMBANG SARI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(172,3,'TK ADVENT IMANDI','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(173,3,'TK ANDREYNE MOGOYUNGGUNG','DESA MOGOYUNGGUNG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(174,3,'TK CINTA KASIH IMANDI','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(175,3,'TK FAJAR MEREKAH MODOMANG','DESA MODOMANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(176,3,'TK GOGALUMAN 1 PKK DUMOGA','DESA DUMOGA III','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(177,3,'TK GOGALUMAN II PKK DUMOGA','DESA DUMOGA ','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(178,3,'TK IMANUEL PINONOBATUAN','DESA PINONOBATUAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(179,3,'TK INSPIRASI GANESA','DESA AMERTHA SARI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(180,3,'TK MELATI IMANDI','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(181,3,'TK PELITA KASIH 1 TAMBUN','DESA PINONOBATUAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(182,3,'TK PELITA KASIH IBU DUMOGA II','DESA DUMOGA II','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(183,3,'TK PELITA KASIH II TAMBUN','DESA TAMBUN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(184,3,'TK SEHATI TONOM','DESA TONOM','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(185,3,'TK STAR KIDS MOGOYUNGGUNG','DESA MOGOYUNGGUNG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(186,3,'TK MAWAR SHAROON','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(187,3,'TK INATON DUMOGA','DESA DUMOGA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(188,3,'TK SYALOOM IMANDI','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(189,3,'TK TABITA ADVEN MOGOYUNGGUNG','DESA MOGOYUNGGUNG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(190,3,'TK ZAITUN MOGOYUNGGUNG','DESA MOGOYUNGGUNG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(191,3,'KB ADVENT IMANDI','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(192,3,'KB ANGGREK MODOMANG','DESA MODOMANG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(193,3,'KB IMANUEL','DESA PINONOBATUAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(194,3,'KB CINTA KASIH IMANDI','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(195,3,'KB TOAR INSPIRASI','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(196,3,'KB SARASWATI AMERTHA SARI','DESA AMERTHA SARI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(197,3,'SPS ADVENT IMANDI','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(198,3,'SPS DANIEL','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(199,3,'SPS INSPIRASI TOAR','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(200,3,'SPS MOSES IMANDI','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(201,3,'SPS CHRISTOFEL PINONOBATUAN','DESA PINONOBATUAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(202,3,'SPS NUR SARI IMANDI','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(203,3,'TPA CINTA KASIH','KELURAHAN IMANDI','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(204,15,'PAUD MONOMPIA IBOLIAN','DESA IBOLIAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(205,15,'TK PERMATA BUNDA KOSIO','DESA KOSIO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(206,15,'PAUD BUDI UTOMO KOSIO TIMUR','DESA KOSIO TIMUR','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(207,15,'KB BUNDA MULIA KOSIO','DESA KOSIO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(208,15,'KB PERMATA BUNDA KOSIO','DESA KOSIO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(209,15,'KB CINTA URSULA','DESA WERDHI AGUNG SELATAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(210,15,'SPS AL HIKAYAH KOSIO','DESA KOSIO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(211,2,'PAUD CAHAYA HATI WANGGA BARU','DESA WANGGA BARU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(212,2,'TK AT TAUBAH WANGGA BARU','DESA WANGGA BARU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(213,2,'TK AISYIYAH BUSTANUL ATHFAL (ABA) 6 ','DESA DOLODUO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(214,2,'TK BETSAIDA UUWAN','DESA UUWAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(215,2,'TK KARTIKA UUWAN','DESA UUWAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(216,2,'TK MIRACLE UUWAN','DESA UUWAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(217,2,'TK MOGOGONIPA INDAH MATAYANGAN','DESA MATAYANGAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(218,2,'TK NAILAH DOLODUO','DESA DOLODUO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(219,2,'TK NAZARETH WERDHI AGUNG','DESA WERHI AGUNG','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(220,2,'TK PANCARAN KASIH MEKARUO','DESA MEKARUO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(221,2,'TK PUTRA II DOLODUO','DESA DOLODUO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(222,2,'TK ASYIFA DOLODUO','DESA DOLODUO 3','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(223,2,'TK INATON DOLODUO 2','DESA DOLODUO 2','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(224,2,'KB AISYIYAH BUSTANUL ATHFAL (ABA) 6 ','DESA DOLODUO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(225,2,'KB GEDEON MEKARUO','DESA MEKARUO','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(226,2,'KB KARTIKA UUWAN','DESA UUWAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(227,2,'SPS AL IKHLAS IKHWAN','DESA IKHWAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(228,2,'SPS AT TAUBAH WANGGA BARU','DESA WANGGA BARU','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(229,2,'SPS MEY FLOWER MATAYANGAN','DESA MATAYANGAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(230,4,'TK ABA IV MOPUYA UTARA','DESA MOPUYA UTARA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(231,4,'TK AL ANSAR TAPADAKA','DESA TAPADAKA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(232,4,'TK BUAH HATI IBU DONDOMON','DESA DONDOMON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(233,4,'TK IMANUEL MOPUYA','DESA MOPUYA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(234,4,'TK JANATUL ILMI MOPUYA SELATAN','DESA MOPUYA SELATAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(235,4,'TK KATOLIK SANTA MARIA MOPUYA','DESA MOPUYA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(236,4,'TK MELATI KONAROM','DESA KONAROM','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(237,4,'TK PERMATA OSION','DESA OSION','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(238,4,'TK SWADHARMA MOPUYA','DESA MOPUYA SELATAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(239,4,'TK MAWAR HEBAT IKUNA','DESA IKUNA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(240,4,'TK TUNAS PERTIWI MOPUGAD','DESA MOPUGAD','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(241,4,'TK TUNAS BANGSA TAPADAKA','DESA TAPADAKA 1','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(242,4,'KB CAHAYA BUNDA MOPUYA','DESA MOPUYA SELATAN','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(243,4,'KB CAHAYA HATI MOPUYA UTARA','DESA MOPUYA UTARA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(244,4,'SPS AL AMIN MOPUYA UTARA','DESA MOPUYA UTARA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(245,4,'SPS AL KAUTSAR','DESA TAPADAKA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(246,4,'SPS POWER OF MAJESTY DONDOMON','DESA DONDOMON','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(247,14,'TK AZ ZAHRA KONAROM','DESA KONAROM','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(248,14,'TK PKK DAHLIA DUMARA','DESA DUMARA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(249,14,'KB BUNGA ANGGREK TAPADAKA UTARA','DESA TAPADAKA UTARA','','2022-11-06 23:26:34','2022-11-06 23:26:34'),(250,14,'PAUD BUGENFIL TAPADAKA','DESA TAPADAKA TIMUR','','2022-11-06 23:26:34','2022-11-06 23:26:34');
/*!40000 ALTER TABLE `pauds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pendidikan`
--

DROP TABLE IF EXISTS `pendidikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pendidikan` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pendidikan`
--

LOCK TABLES `pendidikan` WRITE;
/*!40000 ALTER TABLE `pendidikan` DISABLE KEYS */;
/*!40000 ALTER TABLE `pendidikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penduduks`
--

DROP TABLE IF EXISTS `penduduks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penduduks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `laki` text COLLATE utf8mb4_unicode_ci,
  `peremp` text COLLATE utf8mb4_unicode_ci,
  `blm_kwn` text COLLATE utf8mb4_unicode_ci,
  `kwn` text COLLATE utf8mb4_unicode_ci,
  `cr_hdp` text COLLATE utf8mb4_unicode_ci,
  `cr_mati` text COLLATE utf8mb4_unicode_ci,
  `blm_sklh` text COLLATE utf8mb4_unicode_ci,
  `tdk_tm_sd` text COLLATE utf8mb4_unicode_ci,
  `tm_sd` text COLLATE utf8mb4_unicode_ci,
  `sltp` text COLLATE utf8mb4_unicode_ci,
  `slta` text COLLATE utf8mb4_unicode_ci,
  `dip_ii` text COLLATE utf8mb4_unicode_ci,
  `dip_iii` text COLLATE utf8mb4_unicode_ci,
  `str_i` text COLLATE utf8mb4_unicode_ci,
  `str_ii` text COLLATE utf8mb4_unicode_ci,
  `str_iii` text COLLATE utf8mb4_unicode_ci,
  `belum_tidak_bekerja` text COLLATE utf8mb4_unicode_ci,
  `mengurus_rumah_tangga` text COLLATE utf8mb4_unicode_ci,
  `pelajar_mahasiswa` text COLLATE utf8mb4_unicode_ci,
  `pensiunan` text COLLATE utf8mb4_unicode_ci,
  `pegawai_negeri_sipil` text COLLATE utf8mb4_unicode_ci,
  `tentara_nasional_indonesia` text COLLATE utf8mb4_unicode_ci,
  `kepolisian_ri` text COLLATE utf8mb4_unicode_ci,
  `perdagangan` text COLLATE utf8mb4_unicode_ci,
  `petani_pekebun` text COLLATE utf8mb4_unicode_ci,
  `peternak` text COLLATE utf8mb4_unicode_ci,
  `nelayan_perikanan` text COLLATE utf8mb4_unicode_ci,
  `industri` text COLLATE utf8mb4_unicode_ci,
  `konstruksi` text COLLATE utf8mb4_unicode_ci,
  `transportasi` text COLLATE utf8mb4_unicode_ci,
  `karyawan_swasta` text COLLATE utf8mb4_unicode_ci,
  `karyawan_bumn` text COLLATE utf8mb4_unicode_ci,
  `karyawan_bumd` text COLLATE utf8mb4_unicode_ci,
  `karyawan_honorer` text COLLATE utf8mb4_unicode_ci,
  `buruh_harian_lepas` text COLLATE utf8mb4_unicode_ci,
  `buruh_tani_perkebunan` text COLLATE utf8mb4_unicode_ci,
  `buruh_nelayan_perikanan` text COLLATE utf8mb4_unicode_ci,
  `buruh_peternakan` text COLLATE utf8mb4_unicode_ci,
  `pembantu_rumah_tangga` text COLLATE utf8mb4_unicode_ci,
  `tukang_cukur` text COLLATE utf8mb4_unicode_ci,
  `tukang_listrik` text COLLATE utf8mb4_unicode_ci,
  `tukang_batu` text COLLATE utf8mb4_unicode_ci,
  `tukang_kayu` text COLLATE utf8mb4_unicode_ci,
  `tukang_sol_sepatu` text COLLATE utf8mb4_unicode_ci,
  `tukang_las_pandai_besi` text COLLATE utf8mb4_unicode_ci,
  `tukang_jahit` text COLLATE utf8mb4_unicode_ci,
  `tukang_gigi` text COLLATE utf8mb4_unicode_ci,
  `penata_rias` text COLLATE utf8mb4_unicode_ci,
  `penata_busana` text COLLATE utf8mb4_unicode_ci,
  `penata_rambut` text COLLATE utf8mb4_unicode_ci,
  `mekanik` text COLLATE utf8mb4_unicode_ci,
  `seniman` text COLLATE utf8mb4_unicode_ci,
  `tabib` text COLLATE utf8mb4_unicode_ci,
  `paraji` text COLLATE utf8mb4_unicode_ci,
  `perancang_busana` text COLLATE utf8mb4_unicode_ci,
  `penterjemah` text COLLATE utf8mb4_unicode_ci,
  `imam_mesjid` text COLLATE utf8mb4_unicode_ci,
  `pendeta` text COLLATE utf8mb4_unicode_ci,
  `pastor` text COLLATE utf8mb4_unicode_ci,
  `wartawan` text COLLATE utf8mb4_unicode_ci,
  `ustadz_mubaligh` text COLLATE utf8mb4_unicode_ci,
  `juru_masak` text COLLATE utf8mb4_unicode_ci,
  `promotor_acara` text COLLATE utf8mb4_unicode_ci,
  `anggota_dpr_ri` text COLLATE utf8mb4_unicode_ci,
  `anggota_dpd` text COLLATE utf8mb4_unicode_ci,
  `anggota_bpk` text COLLATE utf8mb4_unicode_ci,
  `presiden` text COLLATE utf8mb4_unicode_ci,
  `wakil_presiden` text COLLATE utf8mb4_unicode_ci,
  `anggota_mahkamah_konstitusi` text COLLATE utf8mb4_unicode_ci,
  `anggota_kabinet_kementerian` text COLLATE utf8mb4_unicode_ci,
  `duta_besar` text COLLATE utf8mb4_unicode_ci,
  `gubernur` text COLLATE utf8mb4_unicode_ci,
  `wakil_gubernur` text COLLATE utf8mb4_unicode_ci,
  `bupati` text COLLATE utf8mb4_unicode_ci,
  `wakil_bupati` text COLLATE utf8mb4_unicode_ci,
  `walikota` text COLLATE utf8mb4_unicode_ci,
  `wakil_walikota` text COLLATE utf8mb4_unicode_ci,
  `anggota_dprd_provinsi` text COLLATE utf8mb4_unicode_ci,
  `anggota_dprd_kabupaten_kota` text COLLATE utf8mb4_unicode_ci,
  `dosen` text COLLATE utf8mb4_unicode_ci,
  `guru` text COLLATE utf8mb4_unicode_ci,
  `pilot` text COLLATE utf8mb4_unicode_ci,
  `pengacara` text COLLATE utf8mb4_unicode_ci,
  `notaris` text COLLATE utf8mb4_unicode_ci,
  `arsitek` text COLLATE utf8mb4_unicode_ci,
  `akuntan` text COLLATE utf8mb4_unicode_ci,
  `konsultan` text COLLATE utf8mb4_unicode_ci,
  `dokter` text COLLATE utf8mb4_unicode_ci,
  `bidan` text COLLATE utf8mb4_unicode_ci,
  `perawat` text COLLATE utf8mb4_unicode_ci,
  `apoteker` text COLLATE utf8mb4_unicode_ci,
  `psikiater_psikolog` text COLLATE utf8mb4_unicode_ci,
  `penyiar_televisi` text COLLATE utf8mb4_unicode_ci,
  `penyiar_radio` text COLLATE utf8mb4_unicode_ci,
  `pelaut` text COLLATE utf8mb4_unicode_ci,
  `peneliti` text COLLATE utf8mb4_unicode_ci,
  `sopir` text COLLATE utf8mb4_unicode_ci,
  `pialang` text COLLATE utf8mb4_unicode_ci,
  `paranormal` text COLLATE utf8mb4_unicode_ci,
  `pedagang` text COLLATE utf8mb4_unicode_ci,
  `perangkat_desa` text COLLATE utf8mb4_unicode_ci,
  `kepala_desa` text COLLATE utf8mb4_unicode_ci,
  `biarawati` text COLLATE utf8mb4_unicode_ci,
  `wiraswasta` text COLLATE utf8mb4_unicode_ci,
  `lainnya` text COLLATE utf8mb4_unicode_ci,
  `jml_duk` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penduduks`
--

LOCK TABLES `penduduks` WRITE;
/*!40000 ALTER TABLE `penduduks` DISABLE KEYS */;
INSERT INTO `penduduks` VALUES (1,19,1,1,2021,'5941','5431','5270','5531','105','466','2082','1668','3029','2422','1894','29','39','205','4','0','3129','2750','2035','18','128','7','16','7','1701','0','450','0','0','3','132','4','1','77','16','57','14','0','1','0','0','6','52','0','0','0','0','0','0','0','3','0','0','1','0','0','2','10','0','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','29','0','0','0','0','0','2','1','2','3','0','0','0','0','3','0','64','0','0','10','14','5','0','610','8','11372','2022-10-29 18:25:18','2022-10-29 18:25:18'),(2,19,2,1,2021,'9366','8600','8649','8558','138','621','3441','2861','5014','3507','2796','32','52','257','6','0','5032','4151','3475','27','144','5','12','12','3725','1','3','1','0','1','79','5','0','99','21','48','0','0','1','0','0','4','18','0','3','0','0','0','0','0','3','0','1','0','0','0','4','25','0','1','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','33','0','1','0','0','0','1','2','7','8','0','0','0','0','4','0','50','0','0','19','16','3','0','892','27','17966','2022-10-29 18:25:18','2022-10-29 18:25:18'),(3,19,3,1,2021,'11270','10536','9761','11033','127','885','4089','2637','5087','4587','4598','63','168','558','17','2','5788','5089','3893','89','260','13','63','14','4451','3','3','0','1','2','175','15','1','122','27','34','0','2','2','0','2','3','25','0','2','1','0','0','0','0','11','0','0','0','0','0','1','39','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','0','0','3','0','101','0','0','0','0','0','0','5','6','20','1','0','0','0','4','0','79','0','0','13','28','5','0','1373','36','21806','2022-10-29 18:25:18','2022-10-29 18:25:18'),(4,19,4,1,2021,'7846','7283','6221','8304','95','509','2784','1851','4514','2833','2516','26','175','417','13','0','3545','2140','2410','16','213','15','54','13','4441','0','1','0','0','0','125','4','1','128','32','58','0','0','0','0','0','2','14','0','2','0','0','0','0','0','2','0','0','0','0','0','1','12','1','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','2','1','72','0','0','0','0','0','0','8','7','11','2','0','0','0','3','0','25','0','0','35','7','2','0','1703','20','15129','2022-10-29 18:25:18','2022-10-29 18:25:18'),(5,19,5,1,2021,'17526','15779','15584','16207','336','1178','6869','4412','9331','5961','5715','74','206','721','15','1','9529','7885','5313','76','357','387','49','13','5216','1','1209','3','0','2','447','16','3','201','59','22','3','0','11','0','2','17','135','0','1','5','0','1','0','0','13','0','0','1','0','0','2','45','1','1','1','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','2','0','76','0','0','0','0','1','0','7','8','24','0','0','0','0','43','0','289','0','0','17','21','4','0','1746','38','33305','2022-10-29 18:25:18','2022-10-29 18:25:18'),(6,19,6,1,2021,'10982','10069','9569','10393','204','885','4208','2385','6600','3776','3554','45','107','364','12','0','6022','5148','3106','70','230','19','35','12','3201','1','688','1','1','1','224','10','2','118','33','44','19','3','3','1','0','16','143','0','4','3','0','0','0','0','1','0','0','0','0','0','3','10','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','3','54','0','0','0','0','0','1','0','3','6','1','0','0','0','13','0','312','0','0','30','8','5','0','1420','23','21051','2022-10-29 18:25:18','2022-10-29 18:25:18'),(7,19,7,1,2021,'14000','12791','12064','13445','365','917','4854','3973','7532','6236','3583','45','132','428','7','1','6774','6698','4931','42','283','17','42','5','5744','3','3','0','0','1','427','7','3','134','59','59','1','1','0','1','0','6','69','1','0','1','0','2','0','0','0','0','0','0','0','0','1','9','0','0','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','2','0','40','0','0','0','0','0','0','2','5','7','0','0','0','0','3','0','140','0','0','7','27','1','0','1200','32','26791','2022-10-29 18:25:18','2022-10-29 18:25:18'),(8,19,8,1,2021,'9002','8141','7567','8529','309','738','2789','2226','4943','3647','3041','30','101','353','12','1','4336','4196','2781','92','279','15','64','7','3350','1','6','0','3','2','211','11','3','106','18','30','0','0','1','0','0','4','13','0','13','6','0','0','0','1','8','0','0','0','0','0','5','1','0','1','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','2','2','36','0','0','0','0','0','1','0','3','5','0','0','0','0','4','0','172','0','0','13','23','3','0','1291','23','17143','2022-10-29 18:25:18','2022-10-29 18:25:18'),(9,19,9,1,2021,'9928','9300','8423','9716','187','902','3531','2249','5139','3875','3826','46','92','455','15','0','5200','4748','2745','101','255','25','37','15','3443','0','399','0','2','7','306','0','2','108','37','61','5','0','2','0','0','13','115','0','0','3','0','2','0','0','9','0','0','0','1','0','0','27','0','2','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','0','57','0','1','0','0','0','1','2','3','11','0','0','0','0','17','0','168','0','0','9','38','8','1','1224','16','19228','2022-10-29 18:25:18','2022-10-29 18:25:18'),(10,19,10,1,2021,'6707','6216','5129','7227','122','445','1949','1558','4484','2511','1945','23','77','372','4','0','2982','3431','2020','52','231','5','19','29','3231','2','1','1','0','0','100','4','1','77','38','34','0','0','3','0','1','3','30','0','0','1','0','0','0','0','1','0','0','0','0','0','1','27','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','41','0','0','0','0','0','0','1','5','7','0','0','0','0','0','0','48','0','0','1','25','3','0','453','13','12923','2022-10-29 18:25:18','2022-10-29 18:25:18'),(11,19,11,1,2021,'6263','5924','5441','6077','159','510','2444','1407','3757','2339','1953','18','56','209','4','0','3457','3152','1877','27','124','10','13','1','1782','2','462','0','0','0','113','4','0','79','13','10','6','0','1','0','0','4','24','0','4','1','0','0','0','0','8','0','0','0','0','0','0','4','0','1','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','13','0','0','0','0','0','1','0','1','3','0','0','0','0','5','0','120','0','0','7','14','3','0','828','12','12187','2022-10-29 18:25:18','2022-10-29 18:25:18'),(12,19,12,1,2021,'3516','3243','3113','3318','82','246','1316','1011','2397','1124','770','17','30','92','2','0','1830','1575','1074','7','83','4','11','0','1804','0','0','0','0','1','35','1','0','25','0','3','0','0','0','0','0','0','2','0','0','1','0','0','0','0','0','0','0','0','0','0','1','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','6','0','0','0','0','0','2','0','0','0','0','0','0','0','0','0','9','0','0','3','1','2','0','271','7','6759','2022-10-29 18:25:18','2022-10-29 18:25:18'),(13,19,13,1,2021,'8185','7449','7171','7818','81','564','2862','1987','3840','3807','2751','32','67','275','13','0','4387','3779','2597','43','170','22','9','3','3578','2','2','0','1','0','115','3','1','72','28','13','1','0','0','0','1','0','21','0','1','0','0','0','0','0','2','0','0','0','0','0','1','44','0','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','1','1','40','0','0','0','0','0','0','1','0','7','0','0','0','0','1','1','44','0','0','0','19','4','0','592','26','15634','2022-10-29 18:25:18','2022-10-29 18:25:18'),(14,19,14,1,2021,'4751','4317','4004','4662','93','309','1900','1133','3113','1801','998','7','21','90','5','0','2419','2172','1388','4','40','2','7','2','2380','1','0','0','0','1','39','2','0','44','19','18','0','0','7','0','0','2','4','0','0','0','0','0','0','0','2','0','2','0','0','0','2','5','0','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','17','0','0','0','0','0','0','0','2','0','0','0','0','0','0','0','39','0','0','12','2','2','0','427','4','9068','2022-10-29 18:25:18','2022-10-29 18:25:18'),(15,19,15,1,2021,'6067','5683','5157','6001','83','509','2030','1623','2732','2221','2527','59','172','378','8','0','2921','2224','2087','38','286','23','76','17','2696','2','1','0','1','1','136','6','1','73','35','31','0','0','6','0','0','1','17','0','3','2','0','0','0','1','2','0','0','0','0','0','2','14','0','0','1','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','71','0','0','0','0','0','0','4','7','14','1','0','0','0','2','0','50','0','0','56','9','3','0','808','21','11750','2022-10-29 18:25:18','2022-10-29 18:25:18');
/*!40000 ALTER TABLE `penduduks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perkebunans`
--

DROP TABLE IF EXISTS `perkebunans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `perkebunans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `jenis` enum('Kemiri','Pala','Kakao','Cingkeh','Kop Robusta','Kopi Arabica','Kelapa Dalam') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanam_akhir_semester_laporan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produksi_semester_laporan_ton` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perkebunans`
--

LOCK TABLES `perkebunans` WRITE;
/*!40000 ALTER TABLE `perkebunans` DISABLE KEYS */;
INSERT INTO `perkebunans` VALUES (1,14,12,10,2021,'Kemiri','49.06','61.79','2022-11-01 19:55:12','2022-11-01 19:55:12'),(2,14,10,10,2021,'Kemiri','66.43','75.75','2022-11-01 19:55:12','2022-11-01 19:55:12'),(3,14,8,10,2021,'Kemiri','42.05','35.41','2022-11-01 19:55:12','2022-11-01 19:55:12'),(4,14,7,10,2021,'Kemiri','60','61.63','2022-11-01 19:55:12','2022-11-01 19:55:12'),(5,14,4,10,2021,'Kemiri','8.15','7.28','2022-11-01 19:55:12','2022-11-01 19:55:12'),(6,14,14,10,2021,'Kemiri','4.1','4.88','2022-11-01 19:55:12','2022-11-01 19:55:12'),(7,14,3,10,2021,'Kemiri','34.23','7.78','2022-11-01 19:55:12','2022-11-01 19:55:12'),(8,14,13,10,2021,'Kemiri','166.42','10.37','2022-11-01 19:55:12','2022-11-01 19:55:12'),(9,14,2,10,2021,'Kemiri','12.41','8.07','2022-11-01 19:55:12','2022-11-01 19:55:12'),(10,14,15,10,2021,'Kemiri','10.24','7.33','2022-11-01 19:55:12','2022-11-01 19:55:12'),(11,14,9,10,2021,'Kemiri','31.41','16.65','2022-11-01 19:55:12','2022-11-01 19:55:12'),(12,14,11,10,2021,'Kemiri','13.25','8.62','2022-11-01 19:55:12','2022-11-01 19:55:12'),(13,14,5,10,2021,'Kemiri','68.45','65.58','2022-11-01 19:55:12','2022-11-01 19:55:12'),(14,14,1,10,2021,'Kemiri','87.4','87.06','2022-11-01 19:55:12','2022-11-01 19:55:12'),(15,14,6,10,2021,'Kemiri','27.4','12.8','2022-11-01 19:55:12','2022-11-01 19:55:12'),(16,14,12,10,2021,'Pala','98.05','8.61','2022-11-01 19:55:42','2022-11-01 19:55:42'),(17,14,10,10,2021,'Pala','20.7','1.62','2022-11-01 19:55:42','2022-11-01 19:55:42'),(18,14,8,10,2021,'Pala','64.15','1.45','2022-11-01 19:55:42','2022-11-01 19:55:42'),(19,14,7,10,2021,'Pala','246.25','7.11','2022-11-01 19:55:42','2022-11-01 19:55:42'),(20,14,4,10,2021,'Pala','78.83','1.46','2022-11-01 19:55:42','2022-11-01 19:55:42'),(21,14,14,10,2021,'Pala','73.33','3.16','2022-11-01 19:55:42','2022-11-01 19:55:42'),(22,14,3,10,2021,'Pala','62.26','3.26','2022-11-01 19:55:42','2022-11-01 19:55:42'),(23,14,13,10,2021,'Pala','151.79','1.13','2022-11-01 19:55:42','2022-11-01 19:55:42'),(24,14,2,10,2021,'Pala','74.7','1.12','2022-11-01 19:55:42','2022-11-01 19:55:42'),(25,14,15,10,2021,'Pala','26.5','1.5','2022-11-01 19:55:42','2022-11-01 19:55:42'),(26,14,9,10,2021,'Pala','108.35','2.99','2022-11-01 19:55:42','2022-11-01 19:55:42'),(27,14,11,10,2021,'Pala','117.6','0.45','2022-11-01 19:55:42','2022-11-01 19:55:42'),(28,14,5,10,2021,'Pala','178.13','4.61','2022-11-01 19:55:42','2022-11-01 19:55:42'),(29,14,1,10,2021,'Pala','75.15','0.34','2022-11-01 19:55:42','2022-11-01 19:55:42'),(30,14,6,10,2021,'Pala','101.2','2.02','2022-11-01 19:55:42','2022-11-01 19:55:42'),(31,14,12,10,2021,'Kakao','145.01','84.45','2022-11-01 19:55:49','2022-11-01 19:55:49'),(32,14,10,10,2021,'Kakao','270.3','182.94','2022-11-01 19:55:49','2022-11-01 19:55:49'),(33,14,8,10,2021,'Kakao','191.17','145.61','2022-11-01 19:55:49','2022-11-01 19:55:49'),(34,14,7,10,2021,'Kakao','1445.94','897.81','2022-11-01 19:55:49','2022-11-01 19:55:49'),(35,14,4,10,2021,'Kakao','158.16','83.33','2022-11-01 19:55:49','2022-11-01 19:55:49'),(36,14,14,10,2021,'Kakao','726.15','478.7','2022-11-01 19:55:49','2022-11-01 19:55:49'),(37,14,3,10,2021,'Kakao','498.17','428.35','2022-11-01 19:55:49','2022-11-01 19:55:49'),(38,14,13,10,2021,'Kakao','390','248.07','2022-11-01 19:55:49','2022-11-01 19:55:49'),(39,14,2,10,2021,'Kakao','382.25','362.57','2022-11-01 19:55:49','2022-11-01 19:55:49'),(40,14,15,10,2021,'Kakao','249.25','178.02','2022-11-01 19:55:49','2022-11-01 19:55:49'),(41,14,9,10,2021,'Kakao','267.65','156.71','2022-11-01 19:55:49','2022-11-01 19:55:49'),(42,14,11,10,2021,'Kakao','123.2','86.37','2022-11-01 19:55:49','2022-11-01 19:55:49'),(43,14,5,10,2021,'Kakao','207.55','115.43','2022-11-01 19:55:49','2022-11-01 19:55:49'),(44,14,1,10,2021,'Kakao','335.05','183.27','2022-11-01 19:55:49','2022-11-01 19:55:49'),(45,14,6,10,2021,'Kakao','309.15','144.37','2022-11-01 19:55:49','2022-11-01 19:55:49'),(61,14,12,10,2021,'Cingkeh','424.7',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(62,14,10,10,2021,'Cingkeh','1105.5',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(63,14,8,10,2021,'Cingkeh','568.2',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(64,14,7,10,2021,'Cingkeh','1926.99',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(65,14,4,10,2021,'Cingkeh','167.11',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(66,14,14,10,2021,'Cingkeh','115.79',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(67,14,3,10,2021,'Cingkeh','68.34',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(68,14,13,10,2021,'Cingkeh','151.24',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(69,14,2,10,2021,'Cingkeh','101.21',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(70,14,15,10,2021,'Cingkeh','85.84',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(71,14,9,10,2021,'Cingkeh','506',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(72,14,11,10,2021,'Cingkeh','107.77',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(73,14,5,10,2021,'Cingkeh','42',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(74,14,1,10,2021,'Cingkeh','282.37',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(75,14,6,10,2021,'Cingkeh','94.94',NULL,'2022-11-01 19:56:41','2022-11-01 19:56:41'),(76,14,12,10,2021,'Kop Robusta','361.2','330.67','2022-11-01 19:56:49','2022-11-01 19:56:49'),(77,14,10,10,2021,'Kop Robusta','521.85','426.67','2022-11-01 19:56:49','2022-11-01 19:56:49'),(78,14,8,10,2021,'Kop Robusta','374.75','281.48','2022-11-01 19:56:49','2022-11-01 19:56:49'),(79,14,7,10,2021,'Kop Robusta','1985.04','1558.73','2022-11-01 19:56:49','2022-11-01 19:56:49'),(80,14,4,10,2021,'Kop Robusta','78.59','38.57','2022-11-01 19:56:49','2022-11-01 19:56:49'),(81,14,14,10,2021,'Kop Robusta','47.81','28.02','2022-11-01 19:56:49','2022-11-01 19:56:49'),(82,14,3,10,2021,'Kop Robusta','71.54','32.55','2022-11-01 19:56:49','2022-11-01 19:56:49'),(83,14,13,10,2021,'Kop Robusta','62.11','27.79','2022-11-01 19:56:49','2022-11-01 19:56:49'),(84,14,2,10,2021,'Kop Robusta','97.15','49.66','2022-11-01 19:56:49','2022-11-01 19:56:49'),(85,14,15,10,2021,'Kop Robusta','68.08','34.22','2022-11-01 19:56:49','2022-11-01 19:56:49'),(86,14,9,10,2021,'Kop Robusta','46.75','21.84','2022-11-01 19:56:49','2022-11-01 19:56:49'),(87,14,11,10,2021,'Kop Robusta','93.38','40.52','2022-11-01 19:56:49','2022-11-01 19:56:49'),(88,14,5,10,2021,'Kop Robusta','40.15','13.91','2022-11-01 19:56:49','2022-11-01 19:56:49'),(89,14,1,10,2021,'Kop Robusta','86.67','31.93','2022-11-01 19:56:49','2022-11-01 19:56:49'),(90,14,6,10,2021,'Kop Robusta','119.4','53.66','2022-11-01 19:56:49','2022-11-01 19:56:49'),(91,14,12,10,2021,'Kopi Arabica','79',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(92,14,10,10,2021,'Kopi Arabica','45',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(93,14,8,10,2021,'Kopi Arabica','10',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(94,14,7,10,2021,'Kopi Arabica','58','2','2022-11-01 19:56:57','2022-11-01 19:56:57'),(95,14,4,10,2021,'Kopi Arabica','2',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(96,14,14,10,2021,'Kopi Arabica','2',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(97,14,3,10,2021,'Kopi Arabica','3',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(98,14,13,10,2021,'Kopi Arabica','7',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(99,14,2,10,2021,'Kopi Arabica','0',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(100,14,15,10,2021,'Kopi Arabica','0',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(101,14,9,10,2021,'Kopi Arabica','3',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(102,14,11,10,2021,'Kopi Arabica','0',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(103,14,5,10,2021,'Kopi Arabica',NULL,NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(104,14,1,10,2021,'Kopi Arabica','0',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(105,14,6,10,2021,'Kopi Arabica','2',NULL,'2022-11-01 19:56:57','2022-11-01 19:56:57'),(106,14,12,10,2021,'Kelapa Dalam','844.15','805.4','2022-11-01 19:57:06','2022-11-01 19:57:06'),(107,14,10,10,2021,'Kelapa Dalam','729.95','794.79','2022-11-01 19:57:06','2022-11-01 19:57:06'),(108,14,8,10,2021,'Kelapa Dalam','1240.35','1484.5','2022-11-01 19:57:06','2022-11-01 19:57:06'),(109,14,7,10,2021,'Kelapa Dalam','3387.15','3903.69','2022-11-01 19:57:06','2022-11-01 19:57:06'),(110,14,4,10,2021,'Kelapa Dalam','337.2','291.79','2022-11-01 19:57:06','2022-11-01 19:57:06'),(111,14,14,10,2021,'Kelapa Dalam','223.77','261.49','2022-11-01 19:57:06','2022-11-01 19:57:06'),(112,14,3,10,2021,'Kelapa Dalam','501.32','461.92','2022-11-01 19:57:06','2022-11-01 19:57:06'),(113,14,13,10,2021,'Kelapa Dalam','541.54','413.23','2022-11-01 19:57:06','2022-11-01 19:57:06'),(114,14,2,10,2021,'Kelapa Dalam','306.8','283.09','2022-11-01 19:57:06','2022-11-01 19:57:06'),(115,14,15,10,2021,'Kelapa Dalam','237.09','256.69','2022-11-01 19:57:06','2022-11-01 19:57:06'),(116,14,9,10,2021,'Kelapa Dalam','3622.71','4890.43','2022-11-01 19:57:06','2022-11-01 19:57:06'),(117,14,11,10,2021,'Kelapa Dalam','2620.12','3038.59','2022-11-01 19:57:06','2022-11-01 19:57:06'),(118,14,5,10,2021,'Kelapa Dalam','4627.18','6540.3','2022-11-01 19:57:06','2022-11-01 19:57:06'),(119,14,1,10,2021,'Kelapa Dalam','2014.21','2690.67','2022-11-01 19:57:06','2022-11-01 19:57:06'),(120,14,6,10,2021,'Kelapa Dalam','2831.37','3738.66','2022-11-01 19:57:06','2022-11-01 19:57:06');
/*!40000 ALTER TABLE `perkebunans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (93,'role-list','web','2021-03-18 01:03:38','2021-03-18 01:03:38'),(94,'role-create','web','2021-03-18 01:03:38','2021-03-18 01:03:38'),(95,'role-edit','web','2021-03-18 01:03:39','2021-03-18 01:03:39'),(96,'role-delete','web','2021-03-18 01:03:39','2021-03-18 01:03:39'),(105,'kategori-list','web','2021-03-18 01:03:39','2021-03-18 01:03:39'),(106,'kategori-create','web','2021-03-18 01:03:39','2021-03-18 01:03:39'),(107,'kategori-edit','web','2021-03-18 01:03:39','2021-03-18 01:03:39'),(108,'kategori-delete','web','2021-03-18 01:03:39','2021-03-18 01:03:39'),(117,'user-list','web','2021-03-18 10:27:32','2021-03-18 10:27:32'),(118,'user-create','web','2021-03-18 10:27:32','2021-03-18 10:27:32'),(119,'user-edit','web','2021-03-18 10:28:18','2021-03-18 10:28:18'),(120,'user-delete','web','2021-03-18 10:28:18','2021-03-18 10:27:32'),(147,'invoice-edit','web','2021-07-11 17:44:44','2021-07-11 17:44:44'),(148,'invoice-delete','web','2021-07-11 17:44:44','2021-07-11 17:44:44'),(149,'peraturan-list','web','2021-07-12 04:58:07','2021-07-12 04:58:07'),(150,'peraturan-create','web','2021-07-12 04:58:07','2021-07-12 04:58:07'),(151,'peraturan-edit','web','2021-07-12 04:58:07','2021-07-12 04:58:07'),(152,'peraturan-delete','web','2021-07-12 04:58:07','2021-07-12 04:58:07'),(153,'opd-list','web','2021-07-12 05:29:35','2021-07-12 05:29:35'),(154,'opd-create','web','2021-07-12 05:29:35','2021-07-12 05:29:35'),(155,'opd-edit','web','2021-07-12 05:29:35','2021-07-12 05:29:35'),(156,'opd-delete','web','2021-07-12 05:29:35','2021-07-12 05:29:35'),(157,'sakip-list','web','2021-07-12 05:29:35','2021-07-12 05:29:35'),(158,'sakip-create','web','2021-07-12 05:29:35','2021-07-12 05:29:35'),(159,'sakip-edit','web','2021-07-12 05:29:35','2021-07-12 05:29:35'),(160,'sakip-delete','web','2021-07-12 05:29:35','2021-07-12 05:29:35'),(161,'validasi-list','web','2022-02-17 21:18:59','2022-02-17 21:18:59'),(162,'validasi-create','web','2022-02-17 21:18:59','2022-02-17 21:18:59'),(163,'validasi-edit','web','2022-02-17 21:18:59','2022-02-17 21:18:59'),(164,'validasi-delete','web','2022-02-17 21:18:59','2022-02-17 21:18:59');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pertanians`
--

DROP TABLE IF EXISTS `pertanians`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pertanians` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `jenis` enum('Padi Sawah','Padi Ladang','Jagung','Kedelai','Kacang Tanah','Kacang Hijau','Ubi Kayu','Ubi Jalar') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_tanam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luas_panen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provitas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produksi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pertanians`
--

LOCK TABLES `pertanians` WRITE;
/*!40000 ALTER TABLE `pertanians` DISABLE KEYS */;
INSERT INTO `pertanians` VALUES (1,18,2,9,2021,'Padi Sawah','5567','5484.4','5.5','30164.2','2022-11-01 19:18:12','2022-11-01 19:18:12'),(2,18,4,9,2021,'Padi Sawah','6235','6169.1','6.1','37631.51','2022-11-01 19:18:12','2022-11-01 19:18:12'),(3,18,3,9,2021,'Padi Sawah','7492','7448.9','5.8','43203.62','2022-11-01 19:18:12','2022-11-01 19:18:12'),(4,18,15,9,2021,'Padi Sawah','4380','3565.1','5.6','19964.56','2022-11-01 19:18:12','2022-11-01 19:18:12'),(5,18,14,9,2021,'Padi Sawah','5007','5627.2','6','33763.2','2022-11-01 19:18:12','2022-11-01 19:18:12'),(6,18,13,9,2021,'Padi Sawah','5433','5433','5.5','29881.5','2022-11-01 19:18:12','2022-11-01 19:18:12'),(7,18,7,9,2021,'Padi Sawah','9310','9010','5.5','49555','2022-11-01 19:18:12','2022-11-01 19:18:12'),(8,18,8,9,2021,'Padi Sawah','182','182','4.5','819','2022-11-01 19:18:12','2022-11-01 19:18:12'),(9,18,10,9,2021,'Padi Sawah','773','965','5.2','5018','2022-11-01 19:18:12','2022-11-01 19:18:12'),(10,18,12,9,2021,'Padi Sawah','330','275','5','1375','2022-11-01 19:18:12','2022-11-01 19:18:12'),(11,18,9,9,2021,'Padi Sawah','4050','4455','5.5','24502.5','2022-11-01 19:18:12','2022-11-01 19:18:12'),(12,18,6,9,2021,'Padi Sawah','3302','3325','5.7','18952.5','2022-11-01 19:18:12','2022-11-01 19:18:12'),(13,18,11,9,2021,'Padi Sawah','1392','1595','5.5','8772.5','2022-11-01 19:18:12','2022-11-01 19:18:12'),(14,18,5,9,2021,'Padi Sawah','7601','7635.6','5.5','41995.8','2022-11-01 19:18:12','2022-11-01 19:18:12'),(15,18,1,9,2021,'Padi Sawah','4215','4115','5.7','23455.5','2022-11-01 19:18:12','2022-11-01 19:18:12'),(16,18,2,9,2021,'Padi Ladang','0','0','2.5','0','2022-11-01 19:18:29','2022-11-01 19:18:29'),(17,18,4,9,2021,'Padi Ladang','0','0','2','0','2022-11-01 19:18:29','2022-11-01 19:18:29'),(18,18,3,9,2021,'Padi Ladang','0','0','2.1','0','2022-11-01 19:18:29','2022-11-01 19:18:29'),(19,18,15,9,2021,'Padi Ladang','0','0','2.2','0','2022-11-01 19:18:29','2022-11-01 19:18:29'),(20,18,14,9,2021,'Padi Ladang','0','0','2.3','0','2022-11-01 19:18:29','2022-11-01 19:18:29'),(21,18,13,9,2021,'Padi Ladang','0','0','2.3','0','2022-11-01 19:18:29','2022-11-01 19:18:29'),(22,18,7,9,2021,'Padi Ladang','0','0','2.6','0','2022-11-01 19:18:29','2022-11-01 19:18:29'),(23,18,8,9,2021,'Padi Ladang','0','0','2','0','2022-11-01 19:18:29','2022-11-01 19:18:29'),(24,18,10,9,2021,'Padi Ladang','0','0','-','-','2022-11-01 19:18:29','2022-11-01 19:18:29'),(25,18,12,9,2021,'Padi Ladang','0','0','-','-','2022-11-01 19:18:29','2022-11-01 19:18:29'),(26,18,9,9,2021,'Padi Ladang','0','390.6','2.5','976.5','2022-11-01 19:18:29','2022-11-01 19:18:29'),(27,18,6,9,2021,'Padi Ladang','0','88.6','2','177.2','2022-11-01 19:18:29','2022-11-01 19:18:29'),(28,18,11,9,2021,'Padi Ladang','5.5','490.4','2.3','1127.92','2022-11-01 19:18:29','2022-11-01 19:18:29'),(29,18,5,9,2021,'Padi Ladang','858','290.3','2.7','783.81','2022-11-01 19:18:29','2022-11-01 19:18:29'),(30,18,1,9,2021,'Padi Ladang','51','285.9','2.6','743.34','2022-11-01 19:18:29','2022-11-01 19:18:29'),(31,18,2,9,2021,'Jagung','6650.9','6348.91','4.6','29204.986','2022-11-01 19:18:37','2022-11-01 19:18:37'),(32,18,4,9,2021,'Jagung','698.2','698.2','4','2792.8','2022-11-01 19:18:37','2022-11-01 19:18:37'),(33,18,3,9,2021,'Jagung','3971.2','3747.78','5.5','20612.79','2022-11-01 19:18:37','2022-11-01 19:18:37'),(34,18,15,9,2021,'Jagung','3733.2','3551.58','5.5','19533.69','2022-11-01 19:18:37','2022-11-01 19:18:37'),(35,18,14,9,2021,'Jagung','4345.5','4018.55','4.2','16877.91','2022-11-01 19:18:37','2022-11-01 19:18:37'),(36,18,13,9,2021,'Jagung','7456.9','7287.91','5.8','42269.878','2022-11-01 19:18:37','2022-11-01 19:18:37'),(37,18,7,9,2021,'Jagung','7544.1','7479.19','6.5','48614.735','2022-11-01 19:18:37','2022-11-01 19:18:37'),(38,18,8,9,2021,'Jagung','1899.6','1799.2','5','8996','2022-11-01 19:18:37','2022-11-01 19:18:37'),(39,18,10,9,2021,'Jagung','2383.5','2364.62','4','9458.48','2022-11-01 19:18:37','2022-11-01 19:18:37'),(40,18,12,9,2021,'Jagung','1713.2','1686.58','4.2','7083.636','2022-11-01 19:18:37','2022-11-01 19:18:37'),(41,18,9,9,2021,'Jagung','6326.6','6326.6','5.5','34796.3','2022-11-01 19:18:37','2022-11-01 19:18:37'),(42,18,6,9,2021,'Jagung','2229.5','2229.5','6','13377','2022-11-01 19:18:37','2022-11-01 19:18:37'),(43,18,11,9,2021,'Jagung','2846.7','2846.7','5.4','15372.18','2022-11-01 19:18:37','2022-11-01 19:18:37'),(44,18,5,9,2021,'Jagung','9740.6','9740.6','6','58443.6','2022-11-01 19:18:37','2022-11-01 19:18:37'),(45,18,1,9,2021,'Jagung','4040.3','4040.3','6','24241.8','2022-11-01 19:18:37','2022-11-01 19:18:37'),(46,18,2,9,2021,'Kedelai','9.6','188','1.2','225.6','2022-11-01 19:18:44','2022-11-01 19:18:44'),(47,18,4,9,2021,'Kedelai','0','0','0','0','2022-11-01 19:18:44','2022-11-01 19:18:44'),(48,18,3,9,2021,'Kedelai','0','0','1.1','0','2022-11-01 19:18:44','2022-11-01 19:18:44'),(49,18,15,9,2021,'Kedelai','0','0','0','0','2022-11-01 19:18:44','2022-11-01 19:18:44'),(50,18,14,9,2021,'Kedelai','0','0','0','0','2022-11-01 19:18:44','2022-11-01 19:18:44'),(51,18,13,9,2021,'Kedelai','0','81','1.2','97.2','2022-11-01 19:18:44','2022-11-01 19:18:44'),(52,18,7,9,2021,'Kedelai','0','114','1.1','125.4','2022-11-01 19:18:44','2022-11-01 19:18:44'),(53,18,8,9,2021,'Kedelai','0','0','0','0','2022-11-01 19:18:44','2022-11-01 19:18:44'),(54,18,10,9,2021,'Kedelai','0','0','0','0','2022-11-01 19:18:44','2022-11-01 19:18:44'),(55,18,12,9,2021,'Kedelai','0','0','0','0','2022-11-01 19:18:44','2022-11-01 19:18:44'),(56,18,9,9,2021,'Kedelai','0','24','1.2','28.8','2022-11-01 19:18:44','2022-11-01 19:18:44'),(57,18,6,9,2021,'Kedelai','0','0','0','0','2022-11-01 19:18:44','2022-11-01 19:18:44'),(58,18,11,9,2021,'Kedelai','0','2','1.1','2.2','2022-11-01 19:18:44','2022-11-01 19:18:44'),(59,18,5,9,2021,'Kedelai','0','29','1.1','31.9','2022-11-01 19:18:44','2022-11-01 19:18:44'),(60,18,1,9,2021,'Kedelai','0','19','1.1','20.9','2022-11-01 19:18:44','2022-11-01 19:18:44'),(61,18,2,9,2021,'Kacang Tanah','5','3.5','1','3.5','2022-11-01 19:18:52','2022-11-01 19:18:52'),(62,18,4,9,2021,'Kacang Tanah','5','5.5','1','5.5','2022-11-01 19:18:52','2022-11-01 19:18:52'),(63,18,3,9,2021,'Kacang Tanah','7','7.7','1','7.7','2022-11-01 19:18:52','2022-11-01 19:18:52'),(64,18,15,9,2021,'Kacang Tanah','0','7','1','7','2022-11-01 19:18:52','2022-11-01 19:18:52'),(65,18,14,9,2021,'Kacang Tanah','2','16','1.1','17.6','2022-11-01 19:18:52','2022-11-01 19:18:52'),(66,18,13,9,2021,'Kacang Tanah','113','52','1','52','2022-11-01 19:18:52','2022-11-01 19:18:52'),(67,18,7,9,2021,'Kacang Tanah','9.1','6.5','1','6.5','2022-11-01 19:18:52','2022-11-01 19:18:52'),(68,18,8,9,2021,'Kacang Tanah','33','19','1','19','2022-11-01 19:18:52','2022-11-01 19:18:52'),(69,18,10,9,2021,'Kacang Tanah','75','46','1','46','2022-11-01 19:18:52','2022-11-01 19:18:52'),(70,18,12,9,2021,'Kacang Tanah','30','30','1.1','33','2022-11-01 19:18:52','2022-11-01 19:18:52'),(71,18,9,9,2021,'Kacang Tanah','11','9.5','1.2','11.4','2022-11-01 19:18:52','2022-11-01 19:18:52'),(72,18,6,9,2021,'Kacang Tanah','5','5.5','1','5.5','2022-11-01 19:18:52','2022-11-01 19:18:52'),(73,18,11,9,2021,'Kacang Tanah','5','4','1.2','4.8','2022-11-01 19:18:52','2022-11-01 19:18:52'),(74,18,5,9,2021,'Kacang Tanah','22','7.5','1.2','9','2022-11-01 19:18:52','2022-11-01 19:18:52'),(75,18,1,9,2021,'Kacang Tanah','13','12.5','1.1','13.75','2022-11-01 19:18:52','2022-11-01 19:18:52'),(76,18,2,9,2021,'Kacang Hijau','4.3','1.5','1.2','1.8','2022-11-01 19:19:00','2022-11-01 19:19:00'),(77,18,4,9,2021,'Kacang Hijau','3','1','1.1','0','2022-11-01 19:19:00','2022-11-01 19:19:00'),(78,18,3,9,2021,'Kacang Hijau','1','1','1.1','0','2022-11-01 19:19:00','2022-11-01 19:19:00'),(79,18,15,9,2021,'Kacang Hijau','1','0','1.1','0','2022-11-01 19:19:00','2022-11-01 19:19:00'),(80,18,14,9,2021,'Kacang Hijau','2','1','1.1','0','2022-11-01 19:19:00','2022-11-01 19:19:00'),(81,18,13,9,2021,'Kacang Hijau','75','31','1.1','34.1','2022-11-01 19:19:00','2022-11-01 19:19:00'),(82,18,7,9,2021,'Kacang Hijau','0.5','2','1','2','2022-11-01 19:19:00','2022-11-01 19:19:00'),(83,18,8,9,2021,'Kacang Hijau','0','1','1','1','2022-11-01 19:19:00','2022-11-01 19:19:00'),(84,18,10,9,2021,'Kacang Hijau','6','2','1.1','2.2','2022-11-01 19:19:00','2022-11-01 19:19:00'),(85,18,12,9,2021,'Kacang Hijau','0','0','0','0','2022-11-01 19:19:00','2022-11-01 19:19:00'),(86,18,9,9,2021,'Kacang Hijau','1','1','1','1','2022-11-01 19:19:00','2022-11-01 19:19:00'),(87,18,6,9,2021,'Kacang Hijau','0','1','1.1','1.1','2022-11-01 19:19:00','2022-11-01 19:19:00'),(88,18,11,9,2021,'Kacang Hijau','1','0','1','0','2022-11-01 19:19:00','2022-11-01 19:19:00'),(89,18,5,9,2021,'Kacang Hijau','10','2.5','1.2','3','2022-11-01 19:19:00','2022-11-01 19:19:00'),(90,18,1,9,2021,'Kacang Hijau','10.5','17.5','1.2','21','2022-11-01 19:19:00','2022-11-01 19:19:00'),(91,18,2,9,2021,'Ubi Kayu','10','11','1.2','13.2','2022-11-01 19:19:07','2022-11-01 19:19:07'),(92,18,4,9,2021,'Ubi Kayu','7.5','10.5','1.5','15.75','2022-11-01 19:19:07','2022-11-01 19:19:07'),(93,18,3,9,2021,'Ubi Kayu','8','9.8','1.8','17.64','2022-11-01 19:19:07','2022-11-01 19:19:07'),(94,18,15,9,2021,'Ubi Kayu','19.5','10','1.8','18','2022-11-01 19:19:07','2022-11-01 19:19:07'),(95,18,14,9,2021,'Ubi Kayu','6','8.5','1.6','13.6','2022-11-01 19:19:07','2022-11-01 19:19:07'),(96,18,13,9,2021,'Ubi Kayu','125.6','58','1.8','104.4','2022-11-01 19:19:07','2022-11-01 19:19:07'),(97,18,7,9,2021,'Ubi Kayu','2.2','3','1.7','5.1','2022-11-01 19:19:07','2022-11-01 19:19:07'),(98,18,8,9,2021,'Ubi Kayu','3','4.5','1.5','6.75','2022-11-01 19:19:07','2022-11-01 19:19:07'),(99,18,10,9,2021,'Ubi Kayu','14','15.5','1.3','20.15','2022-11-01 19:19:07','2022-11-01 19:19:07'),(100,18,12,9,2021,'Ubi Kayu','8.5','9','1.5','13.5','2022-11-01 19:19:07','2022-11-01 19:19:07'),(101,18,9,9,2021,'Ubi Kayu','14','10.5','1.5','15.75','2022-11-01 19:19:07','2022-11-01 19:19:07'),(102,18,6,9,2021,'Ubi Kayu','3.5','6','1.6','9.6','2022-11-01 19:19:07','2022-11-01 19:19:07'),(103,18,11,9,2021,'Ubi Kayu','7.8','9.8','1.6','15.68','2022-11-01 19:19:07','2022-11-01 19:19:07'),(104,18,5,9,2021,'Ubi Kayu','10.5','12.5','1.6','20','2022-11-01 19:19:07','2022-11-01 19:19:07'),(105,18,1,9,2021,'Ubi Kayu','5.5','10.5','1.3','13.65','2022-11-01 19:19:07','2022-11-01 19:19:07'),(106,18,2,9,2021,'Ubi Jalar','3','6','5','30','2022-11-01 19:19:14','2022-11-01 19:19:14'),(107,18,4,9,2021,'Ubi Jalar','8','6.5','8','52','2022-11-01 19:19:14','2022-11-01 19:19:14'),(108,18,3,9,2021,'Ubi Jalar','7','5.5','9','49.5','2022-11-01 19:19:14','2022-11-01 19:19:14'),(109,18,15,9,2021,'Ubi Jalar','2.5','4','7','28','2022-11-01 19:19:14','2022-11-01 19:19:14'),(110,18,14,9,2021,'Ubi Jalar','3','5','4','20','2022-11-01 19:19:14','2022-11-01 19:19:14'),(111,18,13,9,2021,'Ubi Jalar','73','39','7','273','2022-11-01 19:19:14','2022-11-01 19:19:14'),(112,18,7,9,2021,'Ubi Jalar','0','2.5','9','22.5','2022-11-01 19:19:14','2022-11-01 19:19:14'),(113,18,8,9,2021,'Ubi Jalar','3','7','5','35','2022-11-01 19:19:14','2022-11-01 19:19:14'),(114,18,10,9,2021,'Ubi Jalar','9','8.5','5','42.5','2022-11-01 19:19:14','2022-11-01 19:19:14'),(115,18,12,9,2021,'Ubi Jalar','4','6','5','30','2022-11-01 19:19:14','2022-11-01 19:19:14'),(116,18,9,9,2021,'Ubi Jalar','5','8','6','48','2022-11-01 19:19:14','2022-11-01 19:19:14'),(117,18,6,9,2021,'Ubi Jalar','1','3.5','5','17.5','2022-11-01 19:19:14','2022-11-01 19:19:14'),(118,18,11,9,2021,'Ubi Jalar','5.5','6.8','4','27.2','2022-11-01 19:19:14','2022-11-01 19:19:14'),(119,18,5,9,2021,'Ubi Jalar','7','10','5','50','2022-11-01 19:19:14','2022-11-01 19:19:14'),(120,18,1,9,2021,'Ubi Jalar','6.5','3.5','3','10.5','2022-11-01 19:19:14','2022-11-01 19:19:14');
/*!40000 ALTER TABLE `pertanians` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peternakans`
--

DROP TABLE IF EXISTS `peternakans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `peternakans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peternakans`
--

LOCK TABLES `peternakans` WRITE;
/*!40000 ALTER TABLE `peternakans` DISABLE KEYS */;
/*!40000 ALTER TABLE `peternakans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `puskesmas`
--

DROP TABLE IF EXISTS `puskesmas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `puskesmas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_kecamatan` bigint unsigned NOT NULL,
  `puskesmas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kemampuan_pelayanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `puskesmas`
--

LOCK TABLES `puskesmas` WRITE;
/*!40000 ALTER TABLE `puskesmas` DISABLE KEYS */;
INSERT INTO `puskesmas` VALUES (1,9,'POIGAR','PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(2,11,'TADOY',' NON PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(3,6,'INOBONTO','PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(4,5,'LOLAK','PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(5,5,'BUNTALO',' NON PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(6,1,'MAELANG','PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(7,6,'KOMANGAAN','NON PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(8,8,'PASSI BARAT','NON PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(9,12,'BILALANG','NON PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(10,10,'PANGIAN','PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(11,7,'TANOYAN','PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(12,7,'TUNGOI','NON PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(13,13,'PUSIAN','PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(14,3,'IMANDI','PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(15,2,'WERDHI AGUNG','NON PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(16,4,'DOLODUO','PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(17,15,'MOPUYA','PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47'),(18,14,'KONAROM','NON PERAWATAN','','2022-11-06 20:01:47','2022-11-06 20:01:47');
/*!40000 ALTER TABLE `puskesmas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (93,1),(94,1),(95,1),(96,1),(105,1),(106,1),(107,1),(108,1),(117,1),(118,1),(119,1),(120,1),(147,1),(148,1),(149,1),(150,1),(151,1),(152,1),(119,6),(157,6),(158,6),(159,6),(160,6);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','web','2021-03-18 01:05:27','2021-03-18 01:05:27'),(6,'OPD','web','2022-01-28 17:20:04','2022-01-28 17:20:04');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sekolahs`
--

DROP TABLE IF EXISTS `sekolahs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sekolahs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned DEFAULT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned DEFAULT NULL,
  `tahun` int DEFAULT NULL,
  `nama_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` enum('SDN','SMPN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=293 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sekolahs`
--

LOCK TABLES `sekolahs` WRITE;
/*!40000 ALTER TABLE `sekolahs` DISABLE KEYS */;
INSERT INTO `sekolahs` VALUES (1,26,1,18,2021,'SMP Negeri 1 Sang Tombolang','Desa Lolanan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(2,26,1,18,2021,'SMP Negeri 3 Sangtombolang','Desa Pangi','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(3,26,1,18,2021,'SMP Negeri 4 Sang Tombolang','Desa Ayong','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(4,26,1,18,2021,'SMP Negeri Satap Batu Merah','Desa Batumerah','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(5,26,5,18,2021,'SMP Negeri 1 Lolak','Desa Lolak','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(6,26,5,18,2021,'SMP Negeri 2 Lolak','Desa Pindol','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(7,26,5,18,2021,'SMP Negeri 3 Lolak','Desa Buntalo','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(8,26,5,18,2021,'SMP Negeri 4 Lolak','Desa Labuan Uki','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(9,26,5,18,2021,'SMP Negeri 5 Lolak','Desa Padang Lalow','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(10,26,5,18,2021,'SMP Negeri 6 Lolak','Desa Baturapa I','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(11,26,5,18,2021,'SMP Negeri Satap Totabuan','Desa Totabuan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(12,26,5,18,2021,'SMP Cokroaminoto Solog','Desa Solog','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(13,26,6,18,2021,'SMP Negeri 1 Bolaang','Desa Inobonto 2','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(14,26,6,18,2021,'SMP Negeri 2 Bolaang','Desa Komangaan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(15,26,6,18,2021,'SMP Negeri 4 Bolaang','Desa Solimandungan I','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(16,26,6,18,2021,'SMP Negeri 5 Bolaang','Desa Langagon','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(17,26,6,18,2021,'SMP Muhamadiyah Bolaang','Desa Inobonto 1','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(18,26,6,18,2021,'SMP Kristen Bolaang','Desa Inobonto 2','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(19,26,11,18,2021,'SMP Negeri 3 Bolaang','Desa Tadoy','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(20,26,9,18,2021,'SMP Negeri 1 Poigar','Desa Poigar I','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(21,26,9,18,2021,'SMP Negeri 2 Poigar','Desa Nonapan 2','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(22,26,9,18,2021,'SMP Negeri 3 Poigar','Desa Mariri Lama','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(23,26,9,18,2021,'SMP Negeri Satap Pomoman','Desa Pomoman','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(24,26,9,18,2021,'SMP Advent Nanasi','Desa Nanasi','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(25,26,9,18,2021,'SMP Kristen Nanasi','Desa Nanasi','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(26,26,8,18,2021,'SMP Negeri 2 Passi','Desa Bintau','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(27,26,8,18,2021,'SMP Negeri 5 Passi','Desa Poyuyanan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(28,26,8,18,2021,'SMP PGRI Otam','Desa Otam ','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(29,26,8,18,2021,'SMP Negeri 4 Passi','Desa Sinsingon','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(30,26,8,18,2021,'SMP Negeri Satap Mobuya','Desa Mopbuya','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(31,26,8,18,2021,'SMP PGRI Insil','Desa Insil','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(32,26,8,18,2021,'SMP PGRI Poopo','Desa Poopo','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(33,26,12,18,2021,'SMP Negeri 3 Passi','Desa Tudu Aog','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(34,26,12,18,2021,'SMP Negeri Satap Apado','Desa Apado','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(35,26,12,18,2021,'SMP Negeri Satap Kolingagaan','Desa Kolingagaan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(36,26,7,18,2021,'SMP Negeri 2 Lolayan','Desa Tanoyan Utara','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(37,26,7,18,2021,'SMP Negeri 4 Lolayan','Desa Mopusi','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(38,26,7,18,2021,'SMP Negeri 5 Lolayan','Desa Tungoi','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(39,26,7,18,2021,'SMP Negeri Satap Lolayan','Desa Tanoyan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(40,26,7,18,2021,'SMP Islam Cendekia Mopait','Desa Mopait','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(41,26,7,18,2021,'SMP Lukmanul Hakim','Desa Abak','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(42,26,13,18,2021,'SMP Negeri 4 Dumoga','Desa Pusian','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(43,26,13,18,2021,'SMP Negeri 8 Dumoga','Desa Ikarad','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(44,26,13,18,2021,'SMP Negeri 9 Dumoga','Desa Ponompiaan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(45,26,13,18,2021,'SMP Negeri Satap Molingongot','Desa Kanaan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(46,26,13,18,2021,'SMP PGRI Siniyung','Desa Siniyung','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(47,26,3,18,2021,'SMP Negeri 3 Dumoga','Desa Dumoga','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(48,26,3,18,2021,'SMP Negeri 7 Dumoga','Desa Tambun','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(49,26,3,18,2021,'SMP Negeri 12 Dumoga','Desa Mogoyunggung','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(50,26,3,18,2021,'SMP Negeri Satap Lolaigan','Desa Lolaigan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(51,26,3,18,2021,'SMP Cinta Kasih Imandi','Desa Imandi','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(52,26,3,18,2021,'SMP Kristen Dumoga','Desa Dumoga','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(53,26,3,18,2021,'SMP Budi Luhur Kembang Mertha','Desa Kembang Mertha','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(54,26,3,18,2021,'SMP Advent Imandi','Desa Imandi','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(55,26,15,18,2021,'SMP Negeri 1 Dumoga','Desa Werdhi Agung','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(56,26,15,18,2021,'SMP Negeri Satap Werdhi Agung','Desa Werdhi Agung','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(57,26,15,18,2021,'SMP Katholik Werdhi Agung','Desa Werdhi Agung','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(58,26,15,18,2021,'SMP Swadharma Werdhi Agung','Desa Werdhi Agung','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(59,26,2,18,2021,'SMP Negeri 5 Dumoga','Desa Doloduo','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(60,26,2,18,2021,'SMP Negeri Satap Matayangan','Desa Matayangan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(61,26,2,18,2021,'SMP Negeri 10 Dumoga','Desa Toraot','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(62,26,2,18,2021,'SMP Negeri 11 Dumoga','Desa Uuwan','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(63,26,14,18,2021,'SMP Negeri 6 Dumoga','Desa Konarom','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(64,26,14,18,2021,'SMP Negeri 14 Dumoga','Desa Tapadaka','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(65,26,4,18,2021,'SMP Negeri 2 Dumoga','Desa Mopuya','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(66,26,4,18,2021,'SMP Negeri 13 Dumoga','Desa Tumokang Baru','SMPN','Negeri','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(67,26,4,18,2021,'SMP PGRI Dumoga Utara','Desa Dondomon','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(68,26,4,18,2021,'SMP Swadharma Mopugad','Desa Mopugad','SMPN','Swasta','','2022-11-06 23:40:03','2022-11-06 23:40:03'),(69,26,1,18,2021,'SD Negeri 1 Maelang','Desa Maelang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(70,26,1,18,2021,'SD Negeri 2 Maelang','Desa Lolanan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(71,26,1,18,2021,'SD Negeri 3 Maelang','Desa Batumerah','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(72,26,1,18,2021,'SD Negeri 4 Maelang','Desa Pasir Putih','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(73,26,1,18,2021,'SD Negeri 1 Bolangat','Desa Bolangat','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(74,26,1,18,2021,'SD Negeri 2 Bolangat','Desa Bolangat','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(75,26,1,18,2021,'SD Negeri 1 Ayong','Desa Ayong','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(76,26,1,18,2021,'SD Negeri 2 Ayong','Desa Cempaka','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(77,26,1,18,2021,'SD Negeri Pangi','Desa Pangi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(78,26,1,18,2021,'SD Negeri Domisil','Desa Domisil','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(79,26,1,18,2021,'SD Negeri Babo','Desa Babo','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(80,26,5,18,2021,'SD Negeri 1 Lolak','Desa Lolak','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(81,26,5,18,2021,'SD Negeri 2 Lolak','Desa Lolak Tombolango','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(82,26,5,18,2021,'SD Negeri 3 Lolak','Desa Lolak','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(83,26,5,18,2021,'SD Negeri 1 Lalow','Desa Lalow','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(84,26,5,18,2021,'SD Negeri 2 Lalow','Desa Lolak II','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(85,26,5,18,2021,'SD Negeri 3 Lalow','Desa Padang Lalow','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(86,26,5,18,2021,'SD Negeri 1 Motabang','Desa Motabang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(87,26,5,18,2021,'SD Negeri 2 Motabang','Desa Motabang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(88,26,5,18,2021,'SD Negeri 1 Mongkoinit','Desa Mongkoinit','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(89,26,5,18,2021,'SD Negeri 2 Mongkoinit','Desa Mongkoinit Barat','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(90,26,5,18,2021,'SD Negeri 1 Labuan Uki','Desa Labuan Uki','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(91,26,5,18,2021,'SD Negeri 2 Labuan Uki','Desa Labuan Uki','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(92,26,5,18,2021,'SD Negeri 1 Pinogaluman','Desa Pinogaluman','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(93,26,5,18,2021,'SD Negeri 2 Pinogaluman','Desa Pindolili','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(94,26,5,18,2021,'SD Negeri 3 Pinogaluman','Desa Pinogaluman','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(95,26,5,18,2021,'SD Negeri 1 Baturapa','Desa Baturapa I','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(96,26,5,18,2021,'SD Negeri 2 Baturapa','Desa Baturapa 2','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(97,26,5,18,2021,'SD Negeri 1 Buntalo','Desa Buntalo','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(98,26,5,18,2021,'SD Negeri 2 Buntalo','Desa Buntalo Selatan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(99,26,5,18,2021,'SD Negeri Solog','Desa Diat','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(100,26,5,18,2021,'SD Negeri Tuyat','Desa Tuyat','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(101,26,5,18,2021,'SD Negeri Sauk','Desa Sauk','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(102,26,5,18,2021,'SD Negeri Bumbung','Desa Bumbung','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(103,26,5,18,2021,'SD Negeri Pindol','Desa Pindol','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(104,26,5,18,2021,'SD Negeri Totabuan','Desa Totabuan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(105,26,5,18,2021,'SD Cokroaminoto Solog','Desa Solog','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(106,26,5,18,2021,'SD Kristen Tandu','Desa Tandu','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(107,26,5,18,2021,'SD Kristen Dulangon','Desa Mongkoinit Barat','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(108,26,5,18,2021,'SD Cokroaminoto Bumbung','Desa Bumbung','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(109,26,6,18,2021,'SD Negeri 1 Inobonto 2','Desa Inobonto 2','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(110,26,6,18,2021,'SD Negeri 2 Inobonto II','Desa Inobonto 2','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(111,26,6,18,2021,'SD Negeri 3 Inobonto II','Desa Inobonto 2','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(112,26,6,18,2021,'SD Negeri 1 Inobonto 1','Desa Inobonto 1','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(113,26,6,18,2021,'SD Negeri 2 Inobonto I','Desa Kaya','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(114,26,6,18,2021,'SD Negeri 1 Langagon','Desa Langagon','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(115,26,6,18,2021,'SD Negeri 2 Langagon','Desa Langagon','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(116,26,6,18,2021,'SD Negeri 3 Langagon','Desa Langagon','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(117,26,6,18,2021,'SD Negeri 1 Solimandungan 1','Desa Solimandungan I','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(118,26,6,18,2021,'SD Negeri Solimandungan II','Desa Solimandungan 2','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(119,26,6,18,2021,'SD Negeri 1 Komangaan','Desa Komangaan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(120,26,6,18,2021,'SD Negeri 2 Komangaan','Desa Komangaan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(121,26,6,18,2021,'SD Negeri Bangomolunow','Desa Bangomolunow','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(122,26,6,18,2021,'SD Kristen Ambang Budidaya','Desa Inobonto 2','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(123,26,6,18,2021,'SD Kristen V Inobonto 1','Desa Inobonto I','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(124,26,11,18,2021,'SD Negeri 1 Lolan','Desa Lolan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(125,26,11,18,2021,'SD Negeri 2 Lolan','Desa Lolan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(126,26,11,18,2021,'SD Negeri 1 Bolaang','Desa Bolaang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(127,26,11,18,2021,'SD Negeri 2 Bolaang','Desa Bolaang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(128,26,11,18,2021,'SD Negeri 1 Tadoy','Desa Tadoy','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(129,26,11,18,2021,'SD Negeri 2 Tadoy','Desa Tadoy','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(130,26,11,18,2021,'SD Negeri 1 Ambang','Desa Ambang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(131,26,11,18,2021,'SD Negeri 2 Ambang 2','Desa Ambang 2','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(132,26,11,18,2021,'SD Negeri Bantik','Desa Bantik','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(133,26,9,18,2021,'SD Negeri 1 Nanasi','Desa Nanasi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(134,26,9,18,2021,'SD Negeri 2 Nanasi','Desa Nanasi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(135,26,9,18,2021,'SD Negeri 1 Nonapan II','Desa Nonapan 2','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(136,26,9,18,2021,'SD Negeri 2 Nonapan II','Desa Nonapan 2','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(137,26,9,18,2021,'SD Negeri 1 Mariri Baru','Desa Mariri Baru','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(138,26,9,18,2021,'SD Negeri 2 Mariri Baru','Desa Mariri Baru','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(139,26,9,18,2021,'SD Negeri 1 Mariri Lama','Desa Mariri Lama','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(140,26,9,18,2021,'SD Negeri 2 Mariri Lama','Desa Mariri Lama','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(141,26,9,18,2021,'SD Negeri 3 Mariri Lama','Desa Mariri Lama','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(142,26,9,18,2021,'SD Negeri 4 Mariri Lama','Desa Mariri Lama','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(143,26,9,18,2021,'SD Negeri 1 Poigar','Desa Poigar','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(144,26,9,18,2021,'SD Negeri 2 Poigar','Desa Poigar','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(145,26,9,18,2021,'SD Negeri 1 Poigar Budidaya','Desa Tiberias','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(146,26,9,18,2021,'SD Negeri 2 Poigar Budidaya','Desa Tiberias','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(147,26,9,18,2021,'SD Negeri 1 Wineru','Desa Wineru','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(148,26,9,18,2021,'SD Negeri 2 Wineru','Desa Wineru','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(149,26,9,18,2021,'SD Negeri Nonapan I','Desa Nonapan I','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(150,26,9,18,2021,'SD Negeri Pomoman','Desa Pomoman','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(151,26,9,18,2021,'SD Negeri Gogaluman','Desa Gogaluman','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(152,26,9,18,2021,'SD Advent Nanasi','Desa Nanasi','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(153,26,9,18,2021,'SD Cokroaminoto Poigar','Desa Poigar','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(154,26,9,18,2021,'SD Negeri Mondatong','Desa Mondatong','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(155,26,8,18,2021,'SD Negeri 1 Muntoi','Desa Muntoi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(156,26,8,18,2021,'SD Negeri 2 Muntoi','Desa Muntoi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(157,26,8,18,2021,'SD Negeri 3 Muntoi','Desa Muntoi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(158,26,8,18,2021,'SD Negeri 1 Otam','Desa Otam','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(159,26,8,18,2021,'SD Negeri 2 Otam','Desa Otam','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(160,26,8,18,2021,'SD Negeri 1 Passi','Desa Passi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(161,26,8,18,2021,'SD Negeri 2 Passi','Desa Passi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(162,26,8,18,2021,'SD Negeri Lobong','Desa Lobong','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(163,26,10,18,2021,'SD Negeri Manembo','Desa Manembo','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(164,26,8,18,2021,'SD Negeri Bintau','Desa Bintau','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(165,26,8,18,2021,'SD Negeri Poyuyanan','Desa Poyuyanan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(166,26,8,18,2021,'SD Negeri Bulud','Desa Bulud','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(167,26,8,18,2021,'SD Negeri Wangga','Desa Wangga','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(168,26,10,18,2021,'SD Negeri 1 Insil','Desa Insil','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(169,26,10,18,2021,'SD Negeri 2 Insil','Desa Insil','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(170,26,10,18,2021,'SD Negeri 1 Sinsingon','Desa Sinsingon','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(171,26,10,18,2021,'SD Negeri 2 Sinsingon','Desa Sinsingon','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(172,26,10,18,2021,'SD Negeri 3 Sinsingon','Desa Sinsingon','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(173,26,10,18,2021,'SD Negeri 1 Poopo','Desa Poopo','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(174,26,10,18,2021,'SD Negeri 2 Poopo','Desa Poopo','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(175,26,10,18,2021,'SD Negeri 1 Pangian','Desa Pangian','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(176,26,10,18,2021,'SD Negeri 2 Pangian','Desa Pangian','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(177,26,10,18,2021,'SD Negeri 3 Pangian','Desa Pangian','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(178,26,10,18,2021,'SD Negeri Mobuya','Desa Mobuya','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(179,26,12,18,2021,'SD Negeri 1 Bilalang','Desa Bilalang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(180,26,12,18,2021,'SD Negeri 2 Bilalang','Desa Bilalang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(181,26,12,18,2021,'SD Negeri 5 Bilalang','Desa Apado','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(182,26,12,18,2021,'SD Negeri 6 Bilalang','Desa Bilalang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(183,26,12,18,2021,'SD Negeri 7 Bilalang','Desa Bilalang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(184,26,12,18,2021,'SD Negeri 1 Tudu Aog','Desa Tudu Aog','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(185,26,12,18,2021,'SD Negeri 2 Tudu Aog','Desa Tudu Aog','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(186,26,12,18,2021,'SD Negeri Kolingangaan','Desa Kolingangaan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(187,26,7,18,2021,'SD Negeri 1 Tanoyan','Desa Tanoyan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(188,26,7,18,2021,'SD Negeri 2 Tanoyan','Desa Tanoyan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(189,26,7,18,2021,'SD Negeri 3 Tanoyan','Desa Tanoyan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(190,26,7,18,2021,'SD Negeri 4 Tanoyan','Desa Tanoyan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(191,26,7,18,2021,'SD Negeri 1 Tungoi','Desa Tungoi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(192,26,7,18,2021,'SD Negeri 2 Tungoi','Desa Tungoi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(193,26,7,18,2021,'SD Negeri 3 Tungoi','Desa Tungoi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(194,26,7,18,2021,'SD Negeri 4 Tungoi','Desa Tungoi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(195,26,7,18,2021,'SD Negeri 1 Mopusi','Desa Mopusi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(196,26,7,18,2021,'SD Negeri 2 Mopusi','Desa Mopusi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(197,26,7,18,2021,'SD Negeri 1 Mopait','Desa Mopait','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(198,26,7,18,2021,'SD Negeri 2 Mopait','Desa Mopait','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(199,26,7,18,2021,'SD Negeri 2 Kopandakan','Desa Kopandakan 2','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(200,26,7,18,2021,'SD Negeri 5 Kopandakan','Desa Kopandakan 2','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(201,26,7,18,2021,'SD Negeri Bombanon','Desa Bombanon','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(202,26,7,18,2021,'SD Negeri Tapaaog','Desa Tapaaog','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(203,26,7,18,2021,'SD Negeri Matali Baru','Desa Matali Baru','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(204,26,7,18,2021,'SD Negeri Mengkang','Desa Mengkang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(205,26,7,18,2021,'SD Negeri Lolayan','Desa Lolayan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(206,26,7,18,2021,'SD Negeri Abak','Desa Abak','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(207,26,7,18,2021,'SD Negeri Bakan','Desa Bakan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(208,26,7,18,2021,'SD Kristen Bombanon','Desa Bombanon','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(209,26,7,18,2021,'SD Cokroaminoto Bakan','Desa Bakan','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(210,26,13,18,2021,'SD Negeri 1 Ikarad','Desa Ikarad','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(211,26,13,18,2021,'SD Negeri 2 Ikarad','Desa Ikarad','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(212,26,13,18,2021,'SD Negeri 1 Bumbungon','Desa Bumbungon','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(213,26,13,18,2021,'SD Negeri 2 Bumbungon','Desa Bumbungon','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(214,26,13,18,2021,'SD Negeri 1 Ponompiaan','Desa Ponompiaan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(215,26,13,18,2021,'SD Negeri 2 Ponompiaan','Desa Ponompiaan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(216,26,13,18,2021,'SD Negeri 1 Pusian','Desa Pusian','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(217,26,13,18,2021,'SD Negeri 2 Pusian','Desa Pusian','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(218,26,13,18,2021,'SD Negeri 1 Toruakat','Desa Toruakat','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(219,26,13,18,2021,'SD Negeri 2 Toruakat','Desa Toruakat','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(220,26,13,18,2021,'SD Negeri 4 Dumoga','Desa Dumoga','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(221,26,13,18,2021,'SD Negeri Siniyung','Desa Siniyung','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(222,26,13,18,2021,'SD Negeri Molingongot','Desa Molingongot','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(223,26,13,18,2021,'SD Negeri Oboy','Desa Oboy','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(224,26,13,18,2021,'SD Negeri Persiapan Gunung Sari','Desa Serasi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(225,26,13,18,2021,'SD Kristen Siniyung','Desa Siniyung','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(226,26,3,18,2021,'SD Negeri 1 Tonom','Desa Tonom','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(227,26,3,18,2021,'SD Negeri 2 Tonom','Desa Tonom','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(228,26,3,18,2021,'SD Negeri 1 Tambun','Desa Tambun','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(229,26,3,18,2021,'SD Negeri 2 Tambun','Desa Tambun','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(230,26,3,18,2021,'SD Negeri 1 Imandi','Desa Imandi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(231,26,3,18,2021,'SD Negeri 2 Imandi','Desa Imandi','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(232,26,3,18,2021,'SD Negeri 1 Mogoyunggung','Desa Mogoyunggung','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(233,26,3,18,2021,'SD Negeri 2 Mogoyunggung','Desa Mogoyunggung','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(234,26,3,18,2021,'SD Negeri 1 Kembang Mertha','Desa Kembang Mertha','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(235,26,3,18,2021,'SD Negeri 2 Kembang Mertha','Desa Kembang Mertha','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(236,26,3,18,2021,'SD Negeri 3 Kembang Mertha','Desa Kembang Mertha','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(237,26,3,18,2021,'SD Negeri 1 Dumoga','Desa Dumoga','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(238,26,3,18,2021,'SD Negeri 2 Dumoga','Desa Dumoga','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(239,26,3,18,2021,'SD Negeri 3 Dumoga','Desa Dumoga','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(240,26,3,18,2021,'SD Negeri 5 Dumoga','Desa Dumoga','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(241,26,3,18,2021,'SD Negeri Lolaigan','Desa Lolaigan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(242,26,3,18,2021,'SD Negeri Mokintob','Desa Mokintob','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(243,26,3,18,2021,'SD Advent Imandi','Desa Imandi','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(244,26,3,18,2021,'SD Cinta Kasih Imandi','Desa Imandi','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(245,26,3,18,2021,'SD Kristen 8 Modomang','Desa Modomang','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(246,26,3,18,2021,'SDK Santu Petrus Tambun','Desa Tambun','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(247,26,14,18,2021,'SD Negeri 1 Konarom','Desa Konarom','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(248,26,14,18,2021,'SD Negeri 2 Konarom','Desa Konarom','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(249,26,14,18,2021,'SD Negeri 1 Tapadaka','Desa Tapadaka','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(250,26,14,18,2021,'SD Negeri 2 Tapadaka','Desa Tapadaka','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(251,26,14,18,2021,'SD Negeri Osion','Desa Osion','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(252,26,14,18,2021,'SD Negeri Tonawang','Desa Ikuna','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(253,26,14,18,2021,'SD Negeri Dumara','Desa Dumara','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(254,26,4,18,2021,'SD Negeri 1 Mopugad','Desa Mopugad','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(255,26,4,18,2021,'SD Negeri 2 Mopugad','Desa Mopugad','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(256,26,4,18,2021,'SD Negeri 3 Mopugad','Desa Mopugad','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(257,26,4,18,2021,'SD Negeri 1 Reset Mopuya','Desa Resertlement','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(258,26,4,18,2021,'SD Negeri 2 Reset Mopuya','Desa Resertlement','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(259,26,4,18,2021,'SD Negeri 3 Reset Mopuya','Desa Dondomon','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(260,26,4,18,2021,'SD Negeri 1 Mopuya Utara','Desa Mopuya Utara','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(261,26,4,18,2021,'SD Negeri 2 Mopuya','Desa Mopuya','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(262,26,4,18,2021,'SD Negeri 3 Mopuya','Desa Mopuya','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(263,26,4,18,2021,'SD Negeri 4 Mopuya','Desa Mopuya','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(264,26,4,18,2021,'SD Negeri 5 Mopuya','Desa Mopuya','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(265,26,4,18,2021,'SD Negeri Tumokang Baru','Desa Tumokang Baru','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(266,26,4,18,2021,'SD Katolik Santa Maria Mopuya','Desa Mopuya','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(267,26,15,18,2021,'SD Negeri 1 Kosio','Desa Kosio','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(268,26,15,18,2021,'SD Negeri 2 Kosio','Desa Kosio','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(269,26,15,18,2021,'SD Negeri 1 Werdhi Agung','Desa Werdhi Agung','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(270,26,15,18,2021,'SD Negeri 2 Werdhi Agung','Desa Werdhi Agung','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(271,26,15,18,2021,'SD Negeri 3 Werdhi Agung','Desa Werdhi Agung','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(272,26,15,18,2021,'SD Negeri 4 Werdhi Agung','Desa Werdhi Agung','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(273,26,15,18,2021,'SD Negeri 1 Ibolian','Desa Ibolian','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(274,26,15,18,2021,'SD Negeri 2 Ibolian','Desa Ibolian','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(275,26,15,18,2021,'SD Negeri Kinomaligan','Desa Kinomaligan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(276,26,15,18,2021,'SD Katolik Santa Maria Kosio','Desa Kosio','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(277,26,2,18,2021,'SD Negeri 1 Doloduo','Desa Doloduo','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(278,26,2,18,2021,'SD Negeri 2 Doloduo','Desa Doloduo','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(279,26,2,18,2021,'SD Negeri 3 Doloduo','Desa Doloduo','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(280,26,2,18,2021,'SD Negeri 1 Uuwan','Desa Uuwan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(281,26,2,18,2021,'SD Negeri 2 Uuwan','Desa Uuwan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(282,26,2,18,2021,'SD Negeri 3 Uuwan','Desa Uuwan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(283,26,2,18,2021,'SD Negeri 1 Kosinggolan','Desa Kosinggolan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(284,26,2,18,2021,'SD Negeri 2 Kosinggolan','Desa Kosinggolang','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(285,26,2,18,2021,'SD Negeri Sinanodan','Desa Sinanodan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(286,26,2,18,2021,'SD Negeri Matayangan','Desa Matayangan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(287,26,2,18,2021,'SD Negeri Toraut','Desa Toraut','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(288,26,2,18,2021,'SD Negeri Wangga Baru','Desa Wangga Baru','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(289,26,2,18,2021,'SD Negeri Ikhwan','Desa Ikhwan','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(290,26,2,18,2021,'SD Negeri Doloduo Tiga','Desa Doloduo Tiga','SDN','Negeri','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(291,26,2,18,2021,'SD Cokroaminoto Ikhwan','Desa Ikhwan','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10'),(292,26,2,18,2021,'SD Islam Cendekia Doloduo','Desa Doloduo','SDN','Swasta','','2022-11-06 23:41:10','2022-11-06 23:41:10');
/*!40000 ALTER TABLE `sekolahs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unggas`
--

DROP TABLE IF EXISTS `unggas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `unggas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_opd` bigint unsigned NOT NULL,
  `id_kecamatan` bigint unsigned NOT NULL,
  `id_jenis` bigint unsigned NOT NULL,
  `tahun` int NOT NULL,
  `jumlah_penduduk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `populasi_ayam_petelur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prod_telur_ayam_petelur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_siap_potong_ayam_ptlr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_prod_daging_ayam_ptlrthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_itik_petelur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produksi_telur_itik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_produksi_telur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_siap_potong_itik_ptlr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_prod_daging_itik_ptlrthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_itik_manila` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_siap_potong_itik_manila` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_prod_daging_itik_manilathn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_itikthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_prod_daging_itik_manilathn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_itik_siap_potong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ayam_daging` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_siap_potong_ayam_daging` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_prod_daging_ayam_pedagingthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ayam_buras` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `produksi_telur_ayam_buras` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_siap_potong_ayam_buras` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_prod_daging_ayam_burasthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_ayam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_ayam_siap_potong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_prod_daging_ayamthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_unggas_penghasil_daging` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_unggas_siap_potong` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_prod_daging_unggasthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keb_kons_daging_thn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jlh_kons_dagingthn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unggas`
--

LOCK TABLES `unggas` WRITE;
/*!40000 ALTER TABLE `unggas` DISABLE KEYS */;
INSERT INTO `unggas` VALUES (1,18,2,12,2021,'18599','6958','1777769','1739.5','2330.93','663','145197','1922966','165.75','152.1585','204','173.4','202.878','867','30869.612163','339.15','4121','4121','5851.82','26071','1772828','16946.15','17793.4575','37150','22806.65','25976.2075','38017','23145.8','56845.819663','40731.81','16114.009663','2022-11-01 23:54:29','2022-11-01 23:54:29'),(2,18,4,12,2021,'15126','65660','16776130','16415','21996.1','4315','944985','17721115','1078.75','990.2925','1597','1357.45','1588.2165','5912','2578.509','2436.2','4335','4335','6155.7','26296','1788128','17092.4','17947.02','96291','37842.4','46098.82','102203','40278.6','48677.329','33125.94','15551.389','2022-11-01 23:54:29','2022-11-01 23:54:29'),(3,18,3,12,2021,'21735','2548','651014','637','853.58','7160','1568040','2219054','1790','1643.22','396','336.6','393.822','7556','2037.042','2126.6','1311','1311','1861.62','29447','2002396','19140.55','20097.5775','33306','21088.55','22812.7775','40862','23215.15','24849.8195','47599.65','-22749.8305','2022-11-01 23:54:29','2022-11-01 23:54:29'),(4,18,7,12,2021,'26359','931','237870.5','232.75','311.885','1051','230169','468039.5','262.75','241.2045','535','454.75','532.0575','1586','773.262','717.5','7711','7711','10949.62','67667','4601356','43983.55','46182.7275','76309','51927.3','57444.2325','77895','52644.8','58217.4945','57726.21','491.28450000001','2022-11-01 23:54:29','2022-11-01 23:54:29'),(5,18,8,12,2021,'17107','0','0','0','0','561','122859','122859','140.25','128.7495','265','225.25','263.5425','826','392.292','365.5','0','0','0','27306','1856808','17748.9','18636.345','27306','17748.9','18636.345','28132','18114.4','19028.637','37464.33','-18435.693','2022-11-01 23:54:29','2022-11-01 23:54:29'),(6,18,10,12,2021,'12732','0','0','0','0','209','45771','45771','52.25','47.9655','102','86.7','101.439','311','149.4045','138.95','0','0','0','11357','772276','7382.05','7751.1525','11357','7382.05','7751.1525','11668','7521','7900.557','27883.08','-19982.523','2022-11-01 23:54:29','2022-11-01 23:54:29'),(7,18,12,12,2021,'6548','0','0','0','0','203','44457','44457','50.75','46.5885','112','95.2','111.384','315','157.9725','145.95','867','867','1231.14','8185','556580','5320.25','5586.2625','9052','6187.25','6817.4025','9367','6333.2','6975.375','14340.12','-7364.745','2022-11-01 23:54:29','2022-11-01 23:54:29'),(8,18,9,12,2021,'18778','0','0','0','0','428','93732','93732','107','98.226','214','181.9','212.823','642','311.049','288.9','2601','2601','3693.42','29692','2019056','19299.8','20264.79','32293','21900.8','23958.21','32935','22189.7','24269.259','41123.82','-16854.561','2022-11-01 23:54:29','2022-11-01 23:54:29'),(9,18,6,12,2021,'20904','0','0','0','0','184','40296','40296','46','42.228','97','82.45','96.4665','281','138.6945','128.45','7374','7374','10471.08','20415','1388220','13269.75','13933.2375','27789','20643.75','24404.3175','28070','20772.2','24543.012','45779.76','-21236.748','2022-11-01 23:54:29','2022-11-01 23:54:29'),(10,18,11,12,2021,'11973','0','0','0','0','122','26718','26718','30.5','27.999','61','51.85','60.6645','183','88.6635','82.35','0','0','0','11108','755344','7220.2','7581.21','11108','7220.2','7581.21','11291','7302.55','7669.8735','26220.87','-18550.9965','2022-11-01 23:54:29','2022-11-01 23:54:29'),(11,18,5,12,2021,'32925','1764','450702','441','590.94','1122','245718','696420','280.5','257.499','398','338.3','395.811','1520','653.31','618.8','0','0','0','29228','1987504','18998.2','19948.11','30992','19439.2','20539.05','32512','20058','21192.36','72105.75','-50913.39','2022-11-01 23:54:29','2022-11-01 23:54:29'),(12,18,1,12,2021,'11787','794','202867','198.5','265.99','1040','227760','430627','260','238.68','418','355.3','415.701','1458','654.381','615.3','0','0','0','20273','1378564','13177.45','13836.3225','21067','13375.95','14102.3125','22525','13991.25','14756.6935','25813.53','-11056.8365','2022-11-01 23:54:29','2022-11-01 23:54:29'),(13,18,13,12,2021,'15299','0','0','0','0','663','145197','145197','165.75','152.1585','398','338.3','395.811','1061','547.9695','504.05','969','969','1375.98','27132','1844976','17635.8','18517.59','28101','18604.8','19893.57','29162','19108.85','20441.5395','33504.81','-13063.2705','2022-11-01 23:54:29','2022-11-01 23:54:29'),(14,18,15,12,2021,'11748','29537','7546703.5','7384.25','9894.895','796','174324','7721027.5','199','182.682','357','303.45','355.0365','1153','537.7185','502.45','948','948','1346.16','23215','1578620','15089.75','15844.2375','53700','23422','27085.2925','54853','23924.45','27623.011','25728.12','1894.891','2022-11-01 23:54:29','2022-11-01 23:54:29'),(15,18,14,12,2021,'8858','29596','7561778','7399','9914.66','1224','268056','7829834','306','280.908','694','589.9','690.183','1918','971.091','895.9','0','0','0','25398','1727064','16508.7','17334.135','54994','23907.7','27248.795','56912','24803.6','28219.886','19399.02','8820.866','2022-11-01 23:54:29','2022-11-01 23:54:29');
/*!40000 ALTER TABLE `unggas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telpon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` enum('Y','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (28,'ADMIN','','-','sipoda','admin@e-surveiikm.bolmongkab.go.id','2021-07-26 14:43:12','$2a$12$fMGkQDRtrv17sP4n09pqguSjShFrqGZeLj0fqM8EYacRAWDcCKida',NULL,'Y',1,'2021-07-26 14:43:12','2022-01-28 17:23:34');
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

-- Dump completed on 2022-11-07 16:22:34
