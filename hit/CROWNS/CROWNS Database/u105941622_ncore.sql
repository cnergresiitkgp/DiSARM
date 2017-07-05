-- MySQL dump 10.15  Distrib 10.0.23-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u105941622_ncore
-- ------------------------------------------------------
-- Server version	10.0.22-MariaDB-wsrep

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
-- Table structure for table `admin_missing_master`
--

DROP TABLE IF EXISTS `admin_missing_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_missing_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `lastseenat` varchar(100) NOT NULL,
  `phone_requester` varchar(100) NOT NULL,
  `phone_missing` varchar(100) NOT NULL,
  `Picture_Uploaded` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_missing_master`
--

/*!40000 ALTER TABLE `admin_missing_master` DISABLE KEYS */;
INSERT INTO `admin_missing_master` VALUES (1,'sdf','asd','sde','111','222','','',''),(2,'Siraj','Biswas','Ichapur','12345','12345','','1','2'),(3,'abc','df','Ichapuer','12345','12345','','1','2'),(4,'abc','df','','12345','','','1','2'),(5,'sdf2','qwe2','B-12/004','9432430050','09432430050','','',''),(6,'abc','df','Ichapur','12345','12345','','1','2'),(7,'Siraj','Biswas','Ichapur','12345','12345','','1','2'),(8,'d','f','','12345','','','',''),(9,'Suman','Da','','123456789','','','1','3'),(10,'Souvik','Basu','','9903998511','','','',''),(11,'av','wer','','13424','','','',''),(12,'aa','aa','','qq','','','','');
/*!40000 ALTER TABLE `admin_missing_master` ENABLE KEYS */;

--
-- Table structure for table `agency_master`
--

DROP TABLE IF EXISTS `agency_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agency_master` (
  `agency_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` varchar(30) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `block` varchar(100) DEFAULT NULL,
  `panchayat` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `pincode` int(10) NOT NULL,
  `contact_no` varchar(13) DEFAULT NULL,
  `work_palces` varchar(255) DEFAULT NULL,
  `expertise` text,
  `is_deleted` enum('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`agency_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agency_master`
--

/*!40000 ALTER TABLE `agency_master` DISABLE KEYS */;
INSERT INTO `agency_master` VALUES (1,'Spade','spd@gmail.com','1','1','1','2','1',0,'8296106229','Namkhana,Haripur,Haripur-1. Namkhana,Frazergung,Debnibas. Namkhana,Namkhana,Namkhana.','education','n'),(4,'Kasa','kasa@live.com','1','1','1','1','2',0,'85236974','Namkhana,Haripur,Haripur-1.Namkhana,Namkhana,Namkhana','selter','n'),(16,'CMBS','cnbs@gmail.com','1','1','2','3','3',0,'9856231520','Namkhana,Narayanpur,North Chandanpiri','rescue','y'),(17,'RedCross','rdc@live.com','1','1','1','1','2',0,'7856230045','Namkhana,Haripur,Chandanpiri','medicine','n'),(18,'Ram Krishna Mission','rk@live.com','1','1','1','1','2',0,'8956253700','Namkhana,Haripur,Chandanpiri','rescue','n'),(19,'Bharat Sevasram','vs@gmail.com','1','1','1','1','2',0,'4589362312','Namkhana,Haripur,Chandanpiri','selter','n'),(20,'Doctors for You','dfy@gmail.com','1','1','1','1','2',0,'8956452300','Namkhana,Narayanpur,North Chandanpiri.Namkhana,Haripur,Chandanpiri','medicine','n'),(23,'CRY','cry@gmail.com','1','1','2','3','3',0,'9874563216','Namkhana,Haripur,Chandanpiri.Namkhana,Narayanpur,North Chandanpiri.Namkhana,Frazergung,Debnibas','food','n'),(24,'ISN','isn@gmail.com','1','1','1','2','1',0,'9051000000','Namkhana,Haripur,Chandanpiri.Namkhana,Frazergung,Debnibas','medicine','n'),(25,'LAMP','lamp@gmail.com','1','1','1','1','2',0,'7854231609','Namkhana,Narayanpur,North Chandanpiri.Namkhana,Haripur,Chandanpiri.Namkhana,Frazergung,Debnibas','rescue','n'),(26,'MSS','mss@gmail.com','1','1','1','1','2',0,'8523697432','Namkhana,Haripur,Chandanpiri.Namkhana,Narayanpur,North Chandanpiri','medicine','n'),(27,'VES','ves@gmail.com','1','1','2','3','3',0,'9523641796','Namkhana,Haripur,Chandanpiri','selter','n'),(28,'RKV','rkv@gmail.com','1','1','1','2','1',743144,'9874563210','Namkhana,Haripur,Chandanpiri.Namkhana,Narayanpur,North Chandanpiri.Namkhana,Frazergung,Debnibas','food','n');
/*!40000 ALTER TABLE `agency_master` ENABLE KEYS */;

--
-- Table structure for table `ans2`
--

DROP TABLE IF EXISTS `ans2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ans2` (
  `qid` int(11) NOT NULL DEFAULT '0',
  `ans` varchar(500) DEFAULT NULL,
  `mobile` varchar(100) NOT NULL DEFAULT '',
  `timestamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `rid` int(11) NOT NULL,
  PRIMARY KEY (`qid`,`mobile`,`timestamp`,`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ans2`
--

/*!40000 ALTER TABLE `ans2` DISABLE KEYS */;
INSERT INTO `ans2` VALUES (1,'A','+919830342404','2016-07-18 05:47:24',1),(2,'A','+919830342404','2016-07-18 05:47:54',1);
/*!40000 ALTER TABLE `ans2` ENABLE KEYS */;

--
-- Table structure for table `block`
--

DROP TABLE IF EXISTS `block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `block` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `block` varchar(50) DEFAULT NULL,
  `districtid` tinyint(4) DEFAULT NULL,
  `stateid` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `block`
--

/*!40000 ALTER TABLE `block` DISABLE KEYS */;
INSERT INTO `block` VALUES (1,'Namkhana',1,1),(2,'Kakdwip',1,1);
/*!40000 ALTER TABLE `block` ENABLE KEYS */;

--
-- Table structure for table `cat_advisory`
--

DROP TABLE IF EXISTS `cat_advisory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_advisory` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_advisory`
--

/*!40000 ALTER TABLE `cat_advisory` DISABLE KEYS */;
INSERT INTO `cat_advisory` VALUES ('adv001d','আপনি কি কোনো পরিষেবা সংক্রান্ত সহায়তা চান?','হ্যাঁ','না','','','','পরিষেবা সংক্রান্ত সহায়তা চাই কিনা'),('adv013d','সরকার এর পক্ষ নিয়মিত প্রচার হয় এই ধরনের খবর জানাবার জন্য?','হ্যাঁ','না','','','','সরকার এর পক্ষ নিয়মিত প্রচার '),('adv003e','কি ধরনের সহায়তা চান?','চিকিৎসা ','শিক্ষা ','আইনি ','অন্যান্য','','চিকিৎসা সংক্রান্ত প্রয়োজনীয় পরিষেবা'),('adv012a','নির্বাচন করুন','স্কলারশিপ','ক্যারিয়ার অপশন','অন্যান্য হলে লিখুন','','','নির্বাচন'),('adv004a','কি ধরনের চিকিৎসার সহায়তা চান?	','হার্টের','গর্ভবতী মায়েদের','অন্যান্য','','','চিকিৎসার সহায়তা'),('adv005a','3','বাচ্চাদের','থ্যালাসেমিয়া','অন্যান্য','','','চিকিৎসার ধরণ'),('adv006e','3','মানসিক রোগের','ক্যান্সার','এইডস','অন্যান্য','','চিকিৎসার ধরণ'),('adv010a','বৃত্তিমূলক প্রশিক্ষণ চান','অষ্টম','দশম','দ্বাদশ শ্রেণীর পর','','','বৃত্তিমূলক প্রশিক্ষণ'),('adv011d','আপনি উচ্চশিক্ষার খবর সংক্রান্ত সহায়তা চান?','মাধ্যমিক','উচ্চমাধ্যমিক','','','','উচ্চশিক্ষার খোঁজখবর সংক্রান্ত সহায়তা'),('adv007a','3','নেশার চিকিৎসা','চোখের চিকিৎসা','অন্যান্য','','','চিকিৎসার ধরণ'),('adv008d',' কি ধরনের শিক্ষা সংক্রান্ত সহায়তা চান?','চাকুরী ','উচ্চশিক্ষা','','','','শিক্ষা সংক্রান্ত সহায়তা'),('adv009d','আইনি সহায়তা চান?','পারিবারিক হিংসা','সম্পত্তি বিষয়ে ঝামেলা','','','','আইনি সহায়তা ');
/*!40000 ALTER TABLE `cat_advisory` ENABLE KEYS */;

--
-- Table structure for table `cat_building`
--

DROP TABLE IF EXISTS `cat_building`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_building` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_building`
--

/*!40000 ALTER TABLE `cat_building` DISABLE KEYS */;
INSERT INTO `cat_building` VALUES ('bui002f','Which type of structure is mostly affected ?','Mud & thatched','Masonry','concrete','Steel','Others','ypes of structure mostly affected due to the disaster'),('bui003b','What is the percentage of damage?','','','','','','Intensity of damage(in percentage)'),('bui004a','Are the damaged buildings suitable for habitat?','Yes','No','Information unavailable','','','Suitability of damaged buildings for habitat'),('bui005a','Are the damaged buildings repairable?','Yes','No','Information unavailable','','','Damaged buildings fit for repair'),('bui006d','What is the category of the majority of damaged buildings?','Public Buildings','Private buildings','','','','Categories of the majority of damaged buildings'),('bui001f','What are the predominant types of structure and construction materials?','Mud & thatched','Masonry building','Reinforced concrete building','Steel structure','Timber structure and others','The predominant types of structure and construction materials');
/*!40000 ALTER TABLE `cat_building` ENABLE KEYS */;

--
-- Table structure for table `cat_education`
--

DROP TABLE IF EXISTS `cat_education`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_education` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_education`
--

/*!40000 ALTER TABLE `cat_education` DISABLE KEYS */;
INSERT INTO `cat_education` VALUES ('edu003a','What are the main reasons for schools not functioning ?','No teachers','No students','Others','','','Main reasons for schools/education institutions not functioning post disaster'),('edu004b','What proportion of children are going to school after disaster (in percentage) ?','','','','','','Proportion of children going to school after disaster (in percentage)'),('edu005a','How soon will the schools become functional?','within 15 days','within 30 days','Beyond 30 days','','','Time for the schools to become functional'),('edu006b','	How many schools are not functioning due to disaster?','','','','','','Number of schools not functioning due to disaster'),('edu007a','Are the damaged schools repairable?','Yes','No','Partly','','','Whether schools are repairable'),('edu008a','Govt. helping in repairing schools?','Yes','No','Don\'t know','','','Govt. initiative in repairing schools');
/*!40000 ALTER TABLE `cat_education` ENABLE KEYS */;

--
-- Table structure for table `cat_educational`
--

DROP TABLE IF EXISTS `cat_educational`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_educational` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_educational`
--

/*!40000 ALTER TABLE `cat_educational` DISABLE KEYS */;
INSERT INTO `cat_educational` VALUES ('edu001d','আপনার কোন সন্তান আছে?','হ্যাঁ','না','','','','বেশিরভাগ লোকের সন্তান আছে'),('edu002d','তাদের কি স্কুলে ভর্তি করা হয়েছে?','হ্যাঁ','না','','','','তারা স্কুলে পরে কিনা '),('edu003d','আপনার সন্তান কি কোনো প্রাইভেট টিউশন পড়তে যায়?','হ্যাঁ','না','','','','প্রিভিয়াতে টিউশন পরে কি '),('edu004d','টিউশনের জন্য মাসে কত টাকা লাগে?','১০০ টাকার কম','৩০০ টাকার বেশী','','','','সন্তানের টিউশন পড়ার জন্য মাসিক খরচ'),('edu005d','টিউশনের জন্য পরীক্ষার ফল ভালো হয়েছে?','হ্যাঁ','না','','','','প্রাইভেট টিউশনে যাবার জন্য স্কুল এর পরীক্ষায় রেজাল্ট কি ভালো হয়েছে কিনা'),('edu006d','বাচ্চাদের দুরের স্কুলে যেতে হয় পড়াশোনা করার জন্য?','হ্যাঁ','না','','','','বাচ্চাদের দুরের স্কুলে যেতে হয় পড়াশোনা করার জন্য'),('edu010d','স্কুল থেকে পড়াশুনা ছাড়া কোন সুবিধা (বিনামূল্যে বই) পান?','হ্যাঁ','না','','','','স্কুল থেকে পড়াশুনা ছাড়া কোন সুবিধা (বিনামূল্যে বই) পাওয়া যায়'),('edu007d','গ্রামে কি ধরনের স্কুল আছে?','মাধ্যমিক','উচ্চ মাধ্যমিক','','','','গ্রামেরে স্কুলরে ধরন'),('edu008d','বাচ্চারা স্কুলে গেলে মিড ডে মিল পায়?','হ্যাঁ','না','','','','বাচ্চারা স্কুলে গেলে মিড ডে মিল পায়'),('edu009d','কন্যাশ্রী,যুবশ্রী সরকারী প্রকল্প থেকে কোন সুবিধা পান?','হ্যাঁ','না','','','','কন্যাশ্রী,যুবশ্রী সরকারী প্রকল্প থেকে কোন সুবিধা পান'),('edu011d','সরকার থেকে কম্পিউটার শিক্ষার কোন আয়োজন করা হয়?','হ্যাঁ','না','','','','সরকার থেকে কম্পিউটার শিক্ষার কোন আয়োজন করা হয়েছে'),('edu012d','আপানাদের গ্রামে কম্পিউটার প্রশিক্ষণ কেন্দ্র আছে?','হ্যাঁ','না','','','','গ্রামে কম্পিউটার প্রশিক্ষণ কেন্দ্র আছে');
/*!40000 ALTER TABLE `cat_educational` ENABLE KEYS */;

--
-- Table structure for table `cat_food`
--

DROP TABLE IF EXISTS `cat_food`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_food` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_food`
--

/*!40000 ALTER TABLE `cat_food` DISABLE KEYS */;
INSERT INTO `cat_food` VALUES ('foo001a','Are people likely to have their food stocks (at HH level) destroyed or damaged as a result of the disaster?','Yes','No','Information unavailable','','','Chances of people\'s food stocks getting destroyed or damaged as a result of the disaster'),('foo002e','If food stocks get destroyed, estimate the severity of the damage (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)','Severe','Moderate','Low','Information unavailable','','Damage level if any food stock gets damaged'),('foo003e','What is the current (at the time of assessment) food grains/items stock?','less than a week ','1-3 weeks','1 month','more than a month','','Current stock of food grains/items'),('foo004a','Are there significant changes in the total amount of food that people are eating since the disaster, on average?','Amount decreased ','Amount same','Information unavailable','','','Significant changes in total consumption of food by people since the disaster, on average'),('foo005e','Are there significant changes in the amount of food eaten by under-5 children since emergency happened,  on average?','Amount consumed has increased','Amount consumed has decreased','Amount consumed is same','Do not Know','','Significant changes in the consumption of food by under-5 children since emergency happened, on average'),('foo006a','Has the cost of food has increased post disaster?','Yes','No','Only marginally','','','Increment of the cost of food post disaster'),('foo007b','Do people have access to the following nutrition programmes post disaster? Supplementary nutrition provided by ICDS centers Growth monitoring and identification of SAM child Referral  mechanism of SAM Facility based management of SAM / Nutrition Rehabilitation center None','','','','','','Availability of access to the nutrition programmes(Supplementary nutrition provided by ICDS centers Growth monitoring and identification of SAM child Referral  mechanism of SAM Facility based management of SAM / Nutrition Rehabilitation center) post disaster'),('foo008a','Are households able to cook food/boil water since the disaster?','Yes, majority can cook','No, few can cook ','Information unavailable','','','Whether households are able to cook food/boil water since the disaster'),('foo009a','Do the households have enough supports to cook/ make food (utensils, fuel, stoves)?','Yes, majority have items/ implements ','No, few need supports','Information unavailable','','','Availability of enough supports(utensils, fuel, stoves) for households to cook/ make food'),('foo010a','Are there safe and private places for women to breastfeed?','Yes','No','Information unavailable','','','Availability of safe and private places for women to breastfeed'),('foo013a','Is there a PDS shop in the village and is it operational with stocks?','Available and Functional','Available and Dysfunctional','Unavailable','','','Availability of a PDS shop in the village and whether it is operational with stocks'),('foo012a','Do markets have stocks of food?','Yes','No','Information unavailable','','','Availability of stocks of food in markets'),('foo014e','Are markets in the affected area functioning?','Fully','Partly','Not functioning','Information unavailable','','Functionality of the markets in the affected area'),('foo015a','Are markets generally accessible by the local community?','Yes','No','Information unavailable','','','Availability of general access to the markets by the local community'),('foo016e','Percentage of community who can afford to buy food from market?','0%','1-25%','26-50%','50-100%','','Percentage of community can afford to buy food from market'),('foo017f','Which livelihoods are likely to be most affected?','Non-agricultural day labour ','Agricultural day labour ','Small and marginal farmers ','Medium and big farmers ','Others','Types of livelihoods which are likely to be most affected'),('foo018f','What is the severity of damage of the major crop/crops? (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)','Severe','Moderate','Low','No damage','Information unavailable','Severity of damage of the major crop/crops (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)'),('foo019c','What are the important crops that are damaged?','','','','','','Important crops that are damaged'),('foo024b','Percentage of total agricultural land affected?','','','','','','Percentage of total agricultural land affected'),('foo021f','Have there been losses to agricultural inputs and equipment and other livelihoods assets? (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)','Severe','Moderate','Low','No damage','Information unavailable','Severity of losses to agricultural inputs and equipment and other livelihoods assets (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)'),('foo022f','What is level of death or loss of livestock (animals and poultry)? (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)','Severe','Moderate','Low','No damage','Information unavailable','Level of death or loss of livestock (animals and poultry) (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)'),('foo023f','How has the availability of fodder for domestic animals been affected? (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)','Severe','Moderate','Low','No damage','Information unavailable','Level of damage to fodder for domestic animals (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)');
/*!40000 ALTER TABLE `cat_food` ENABLE KEYS */;

--
-- Table structure for table `cat_health`
--

DROP TABLE IF EXISTS `cat_health`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_health` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_health`
--

/*!40000 ALTER TABLE `cat_health` DISABLE KEYS */;
INSERT INTO `cat_health` VALUES ('hea004f','Are there any health concerns as a result of the disaster?','People injured','Dead bodies (people/animals)','Communicable disease','Ante-natal Care','Other','Health concerns as a result of the disaster'),('hea003f','Are there any underlying health concerns in Village?','Malnutrition','Communicable diseases ','No underlying concerns','Dehydration','Other','Underlying health concerns in village'),('hea001f','What are the main reasons for health facilities not functioning?','Staff shortage	','Damage to building','Supplies/medicine  shortage	','Inaccessibility','Other','Main reasons for health facilities to be non functional '),('hea002a','How soon will the health facilities be functional?','within 15 days	','within 30 days	','Beyond 30 days','','','Estimated number of days required for health facilities to be functional'),('hea005c','No of pregnant women in 8th month of pregnancy  and whether service available  for delivery?','','','','','','Number of pregnant women in 8th month of pregnancy and status of availability of delivery service '),('hea006e','Do people have access to the following health services? Outpatient consultations Antenatal /post natal check ups Routine Immunization Basic essential obstetric care Emergency essential obstetric care/ Institutional delivery Donâ€™t know','Yes','No','Partially','Don\'t know','','Access to health services (Outpatient consultations, Antenatal/post natal check ups, Routine Immunization, Basic essential obstetric care, Emergency essential obstetric care/Institutional delivery)'),('hea007a','Are children in a state of stress due to the disaster?','Yes','No','Information unavailable','','','The disaster has led to stress problems among children'),('hea008a','Do People need counselling and support?','Yes','No','Information unavailable','','','People require counselling and support'),('hea009f','What are the health facilities/service providers in the village?','PHC','Anganwadi','Rural Health Providers','Ambulance','Other','Health facilities/service providers in the Village');
/*!40000 ALTER TABLE `cat_health` ENABLE KEYS */;

--
-- Table structure for table `cat_infrastructure`
--

DROP TABLE IF EXISTS `cat_infrastructure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_infrastructure` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_infrastructure`
--

/*!40000 ALTER TABLE `cat_infrastructure` DISABLE KEYS */;
INSERT INTO `cat_infrastructure` VALUES ('inf001a','Are the transportation facilities (Road, Rail, Port communication) accessible after disaster?','Yes','No','Information unavailable','','','Transportation facilities (Road, Rail, Port communication) are accessible after disaster'),('inf002c','What is the condition of the main route and how far other major routes are affected?','','','','','','Condition of the main route and other major routes'),('inf003f','What is the extent of damage of the telecommunication system? (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)','Severe','Moderate','Low','No Damage','Information unavailable','Extent of damage of the telecommunication system (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)'),('inf004e','What is the condition of power supply?','Partly available','Fully available','No power supply','Information unavailable','','Condition of power supply'),('inf005f','How far medical facilities have been damaged? (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)','Severe','Moderate','Low','No Damage','Information unavailable','Extent of damage to medical facilities (Less than 20% = Low damage; 20-50%  = Moderate  damage;  50% - 100% = Severe damage)'),('inf006e','How Gas, fuel, oil distribution facilities have been affected?','Partially affected','Fully affected','Moderately affected','Information unavailable','','Extent of effect on Gas, fuel and/or oil distribution facilities'),('inf007a','Are Police station and firefighting services still functional?','Yes','No','Information unavailable','','','Police station and firefighting services still functional');
/*!40000 ALTER TABLE `cat_infrastructure` ENABLE KEYS */;

--
-- Table structure for table `cat_market`
--

DROP TABLE IF EXISTS `cat_market`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_market` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_market`
--

/*!40000 ALTER TABLE `cat_market` DISABLE KEYS */;
INSERT INTO `cat_market` VALUES ('mar001d','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী?','কৃষিকাজ','অন্যান্য','','','','প্রশিক্ষণের ধরন'),('mar002e','1.','ধান চাষ','পান চাষ','সূর্যমুখী চাষ','অন্যান্য','','প্রশিক্ষণের ধরণ'),('mar018c','আপনাদের উৎপাদন করা পণ্যের বর্তমান বাজার দর লিখুন? ','','','','','','উৎপাদন করা পণ্যের বর্তমান বাজার দর'),('mar003e','1.','ছাগল পালন, পোল্ট্রি','মৌমাছি পালন','মীন সংগ্রহ','অন্যান্য','','প্রশিক্ষণের ধরণ'),('mar017c','আপনাদের উৎপাদিত করা পণ্যের  নাম ও পরিমাণ লিখুন? ','','','','','','উৎপাদিত করা পণ্যের  নাম ও পরিমাণ'),('mar004a','1.','মুড়ি তৈরী করা','আচার বানানো','অন্যান্য','','','প্রশিক্ষণের ধরণ'),('mar015d','যোগাযোগকারী রাস্তা ঘাটের অবস্থা কেমন?','কাঁচা','পাকা 	','','','','যোগাযোগকারী রাস্তা ঘাটের অবস্থা '),('mar016a','আর্থিক সহায়তা কোথা থেকে আসে?','ব্যাঙ্ক','সংঘ','নিজস্ব তহবিল','','','আর্থিক সহায়তা'),('mar005e','1.','দর্জির কাজ','মুদির দোকান','মসলা প্যাকেজিং','অন্যান্য','','প্রশিক্ষণের ধরণ'),('mar011d','9.','বিক্রয় মূল্য অজানা','সরকার নির্ধারিত ন্যূনতম সহায়ক মূল্য অজানা','','','','পণ্য বিক্রির মূল সমস্যা '),('mar006d','1.','যন্ত্রাংশ মেরামত (সাইকেল, মোবাইল ফোন)','অন্যান্য(লিখুন)','','','','প্রশিক্ষণের ধরণ'),('mar010a','9.','স্থানীয় ব্যবসায়ীদের একছত্র ব্যাবসা','পরিবহন সমস্যা','অন্যান্য','','','পণ্য বিক্রির মূল সমস্যা '),('mar007a','পণ্য কোথায় বিক্রি করেন?','শহরের বাজারে','হাটে','সমবায়ের কাছে','','','পণ্যের বিক্রয়স্থল '),('mar008e','পণ্য কার কাছে বিক্রি করেন?','পাইকারী','খুচরা ক্রেতা','সমবায়','সরকার ','','উৎপাদিত পণ্যের ক্রেতা'),('mar012a','পণ্য বিক্রি করে লাভ কত থাকে?','ঠিকঠাক ','নগণ্য ','লাভ হয় না ','','','পণ্য বিক্রি করে লাভ'),('mar013d','পণ্যের সঠিক বাজার দর জানতে পারেন?','হ্যাঁ','না','','','','পণ্যের সঠিক বাজার দর জানতে পারেন'),('mar014a','পন্যের কাঁচামাল কোথা থেকে সংগ্রহ করেন?','স্থানীয় বাজার','হাটে','শহর','','','পন্যের কাঁচামাল সংগ্রহস্থল'),('mar009a','পণ্য বিক্রির মূল সমস্যা কি?','বাজার দর কম','চাহিদা কম ','অন্যান্য','','','পণ্য বিক্রির মূল সমস্যা'),('mar019d','পণ্যের জন্য কতটা আর্থিক সহায়তা প্রয়োজন?','৪০,০০০এর কম','৪০,০০০এর বেশী','','','','পণ্যের জন্য প্রয়োজনীয় আর্থিক সহায়তার পরিমান');
/*!40000 ALTER TABLE `cat_market` ENABLE KEYS */;

--
-- Table structure for table `cat_need`
--

DROP TABLE IF EXISTS `cat_need`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_need` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_need`
--

/*!40000 ALTER TABLE `cat_need` DISABLE KEYS */;
INSERT INTO `cat_need` VALUES ('nee001d','Whether Search and Rescue are required?','Yes','No','','','','Search and Rescue Operations are needed'),('nee002d','Is Disaster Management Team (DMT) locally available?','Yes','No','','','','Disaster Management Team (DMT) is locally available'),('nee003d','Whether DMT is needed from neighboring blocks/ districts?','Yes','No','','','','DMT is needed from neighboring blocks/ districts'),('nee004b','How many Boats are required?','','','','','','Number of boats required'),('nee005c','Any other transportation is required? Please specify','','','','','','Requirement of other modes of transportation'),('nee006c','What special equipments are required?','','','','','','Special equipments that are required'),('nee007c','What heavy equipments are required?','','','','','','Heavy equipments that are required'),('nee008d','Whether temporary shelter is required?','Yes','No','','','','Requirement of temporary shelter'),('nee009b','How many family based plastic sheets are required?','','','','','','Number of family based plastic sheets required'),('nee010b','How many community based shelters are required?','','','','','','Number of community based shelters required'),('nee011b','How many children garments are required?','','','','','','Number of children garments required'),('nee012b','How many adult male garments (lungi and Panjabi) are required?','','','','','','Number of adult male garments (lungi and Panjabi) required'),('nee013b','How many adult female garments (saree) are required?','','','','','','Number of adult female garments (saree) required'),('nee014b','How many blankets are required?','','','','','','Number of blankets required'),('nee015b','How many bed sheets are required?','','','','','','Number of bed sheets required'),('nee016b','How much Pulses (dal) are required?','','','','','','Kilograms of Pulses (dal) required'),('nee017b','How much Grains (rice) are required?','','','','','','Kilograms of Grains (rice) required'),('nee018b','How much Mustard oil is required?','','','','','','Litres of Mustard oil required'),('nee019c','Is baby food required? If yes, please specify','','','','','',''),('nee020e','What kind of specialized dry food is required?','Muri','Chura','Gur','Biscuits','','Specialized dry food that is required'),('nee021a','What kind of cattle feeds/fodder is required?','Bhusi','Fodder','Poultry Feed','','','cattle feeds/fodder that is required'),('nee022b','How much potable water is required? (3 lts per day per person)','','','','','','Litres of potable water that is required? (3 lts per day per person)'),('nee023b','How much bleaching powder is required?','','','','','','Kilograms of bleaching powder that is required'),('nee024b','How much chlorine powder is required?','','','','','','Kilograms of chlorine powder that is required'),('nee025b','How much halogen tablets are required?','','','','','','Number of halogen tablets that are required'),('nee026d','Whether temporary latrines are required','Yes','No','','','','Temporary latrines are required'),('nee027b','How many pieces of Soaps are required?','','','','','','Pieces of soap that are required'),('nee028b','How much detergent is required? (in kg)','','','','','','Kilograms of detergent required'),('nee029d','Is manpower for carcass disposal required?','Yes','No','','','','Manpower is required for carcass disposal'),('nee030d','Is medical staff is available?','Yes','No','','','','Medical staff is available'),('nee031c','Are Medicines is required? Please specify the names','','','','','','Medicines needed'),('nee032d','Whether IV fluid is available?','Yes','No','','','','Availability of IV fluid'),('nee033d','Whether ORS is available?','Yes','No','','','','Availability of ORS'),('nee034d','Whether Vitamin A is available?','Yes','No','','','','Availability of Vitamin A'),('nee035d','Whether iron tablets is available?','Yes','No','','','','Availability of Iron tablets'),('nee036d','Whether Vaccines for children is available','Yes','No','','','','Availability of vaccines for children'),('nee037d','Whether Health Mobile Units are available?','Yes','No','','','','Availability of Health Mobile Units'),('nee038c','Is repair of roads required? If yes, specify location','','','','','','Roads need repair work'),('nee039c','Is repair of railways and bridges required? If yes, specify location','','','','','','Railways and bridges need repair work'),('nee040c','Is power supply normal? If no, specify location','','','','','','Power supply is normal in the area'),('nee041c','Is telecommunication available? If no, specify location','','','','','','Availability of telecommunication services'),('nee042c','Are equipments for restoration required? If yes, please specify','','','','','','Equipments of restoration are reqiured');
/*!40000 ALTER TABLE `cat_need` ENABLE KEYS */;

--
-- Table structure for table `cat_protection`
--

DROP TABLE IF EXISTS `cat_protection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_protection` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_protection`
--

/*!40000 ALTER TABLE `cat_protection` DISABLE KEYS */;
INSERT INTO `cat_protection` VALUES ('pro001a','Is there lack of adequate physical protection?','Yes','No','Information unavailable','','','Lack of adequate physical protection exists'),('pro002a','Is there breakdown of law and order (looting crime)?','Yes','No','Information unavailable','','','There is a breakdown of law and order (looting crime)'),('pro003a','Is there presence of armed non-state actors?','Yes','No','Information unavailable','','','Armed non-state actors are present in the area'),('pro004a','Is there violence(s) between members of displaced community and/or host community?','Yes','No','Information unavailable','','','Acts of violence(s) have taken place between members of displaced community and/or host community'),('pro005a','Is there threat from host community?','Yes','No','Information unavailable','','','There is a threat from host community'),('pro006a','Is there forced return or relocation?','Yes','No','Information unavailable','','','Incidents of forced return or relocation have occured'),('pro007a','Is there presence or risk of sex and Gender Based Violence?','Yes','No','Information unavailable','','','There is presence or risk of sex and Gender Based Violence'),('pro008a','Is there incidence of child abuse and exploitation?','Yes','No','Information unavailable','','','Incidents of child abuse and exploitation have taken place'),('pro009a','Is there presence or risk of human trafficking?','Yes','No','Information unavailable','','','There presence or risk of human trafficking'),('pro010a','Is there discrimination against ethnicity (indigenous peoples)?','Yes','No','Information unavailable','','','Discrimination against ethnicity (indigenous peoples) exists in the area'),('pro011a','Are there safe and private latrines for women and girls?','Yes','No','Information unavailable','','','There are safe and private latrines for women and girls'),('pro012a','Are there safe and private latrines for men and boys?','Yes','No','Information unavailable','','','There are safe and private latrines for men and boys'),('pro013a','Are there sufficient hygiene materials for women?','Yes','No','Information unavailable','','','Sufficient hygiene materials for women'),('pro014a','Are there safe and private places for women & girls with special needs?','Yes','No','Information unavailable','','','Safe and private places exist for women & girls with special needs');
/*!40000 ALTER TABLE `cat_protection` ENABLE KEYS */;

--
-- Table structure for table `cat_rapid`
--

DROP TABLE IF EXISTS `cat_rapid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_rapid` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_rapid`
--

/*!40000 ALTER TABLE `cat_rapid` DISABLE KEYS */;
INSERT INTO `cat_rapid` VALUES ('rap001b','Total number of Wards?','','','','','','Total number of Wards'),('rap002b','Number of affected Wards?','','','','','','Number of affected Wards'),('rap003b','Total population of village, before disaster','','','','','','Total'),('rap004b','Total male population of village, before disaster','','','','','','Male'),('rap005b','Total female population of village, before disaster','','','','','','Female'),('rap006b','Estimated % of overall population affected?','','','','','','Estimated % of overall population affected'),('rap007b','Estimated number of affected persons','','','','','','Individuals'),('rap008b','Estimated number of affected households','','','','','','Households'),('rap009b','Approximate no. of people dead?','','','','','','Approximate no. of people dead'),('rap010b','Approximate no. of people missing?','','','','','','Approximate no. of people missing'),('rap011b','Approximate no. of people injured?','','','','','','Approximate no. of people injured'),('rap012b','Approximate no. of people displaced?','','','','','','Approximate no. of people displaced'),('rap013b','Approximate no. of people non-displaced (minor shelter damage)','','','','','','Approximate no. of people non-displaced (minor shelter damage)'),('rap014b','Number of children affected','','','','','','Children'),('rap015b','Number of women affected','','','','','','Women'),('rap016b','Number of men affected','','','','','','Men'),('rap017b','Number of P/Cwd1 affected','','','','','','P/CWD1'),('rap018b','Number of Women Pregnant (7th to 9th month) and nursing (0-6 months) who are affected','','','','','','Women Pregnant (7th to 9th month) and nursing (0-6 months)'),('rap019b','Number of minorities affected','','','','','','Minorities'),('rap020b','Number of SC/ST affected','','','','','','SC/ST'),('rap021d','How far has the water entered','within the village','into the houses','','','','How far has the water entered'),('rap022d','How long will the waters stay','less than 3 days','more than 3 days','','','','How long will the waters stay'),('rap023d','How high is the water logging','1-3 ft','above 3 ft','','','','How high is the water logging'),('rap024c','Which are the Six worst affected Wards? (Please write their names)','','','','','','Which are the Six worst affected Wards? (Please write their names)'),('rap025a','Has water supply been damaged/adversely affected?','Yes','No','Inf. unavailable','','','Has water supply been damaged/adversely affected? (If No or Inf. unavailable, skip to Q.39)'),('rap026f','What are the sources of drinking water which have been damaged?','Open Well','Springs','Ponds','Water pipes','Tube well','What are the sources of drinking water which have been damaged?'),('rap027f','What is the current water source?','Wells','Ponds/Open Water bodies','Tube wells','Water pipes','Others','What are the sources of drinking water which have been damaged?'),('rap028f','Approx % of total population without access to safe drinking water due to disaster?','0%','1-25%','26-50%','50%-100%','Inf. unavailable','Approximate % of total population of the Village without access to safe drinking water due to disaster?;0% = None;1-25% (Up to approximately ¼ of the population = A few;26-50% (Between ¼ and ½ of the population) = Some;50% - 100% (More than ½ of the population) = Many?;'),('rap029a','Access to water for all people with disabilities/ST/SC/Minorities (Post disaster)?','Yes','No','Inf. unavailable','','','Access to water for all people with disabilities/ST/SC/Minorities (Post disaster)?'),('rap030e','Is enough water available for short-term and longer-term needs of everyone?','For 1 week','For 2 weeks','Beyond 3 weeks','Inf. unavailable','','Is the water available at the source enough for short-term and longer-term needs for all groups in the population?'),('rap031f','Do people have enough water containers of appropriate size and type?','None','A few','Some','Many','Inf. unavailable','Do people have enough water containers of appropriate size and type?'),('rap032a','Have toilet facilities been damaged/adversely affected?','Yes','No','Inf. unavailable','','','Have toilet facilities been damaged/adversely affected? (If No or Inf. unavailable, skip to Q45)'),('rap033d','What were the pre disaster excreta disposal practices?','Open Areas','Household/Community Latrines','','','','What were the pre disaster excreta disposal practices?'),('rap034f','What % of households have access to toilet facilities for females','0%','1-25%','26-50%','50%-100%','Inf. unavailable','Females'),('rap035f','What % of households have access to toilet facilities for males','0%','1-25%','26-50%','50%-100%','Inf. unavailable','Males'),('rap036d','What are the current (post Disaster) excreta disposal practices?','Open Areas','Household/Community Latrines','','','','What are the current (post Disaster) excreta disposal practices?'),('rap037f','Threats to the health of the affected population','Carcass Disposal',' Solid waste',' Waste Water',' Rainwater runoff/drainage','Other','There is a threat to the health and well-being of the affected population due to:'),('rap038a','What was the practice on menstrual hygiene pre disaster?(ask women and girls/ANM/AWW/ASHA worker)','Cloth','Sanitary Napkins','Other','','','What was the practice on menstrual hygiene pre disaster?(ask women and girls/ANM/AWW/ASHA worker)'),('rap039a','Do they still have access to them (ask women and girls/ANM/AWW/ASHA worker)?','Yes','No','Inf. unavailable','','','Do they still have access to them (ask women and girls/ANM/AWW/ASHA worker)?'),('rap040a','Is shelter an issue as a result of the disaster?','Yes','No','Inf. unavailable','','','Is shelter an issue as a result of the disaster? (If No or Inf. unavailable, skip to Q54)'),('rap041f','Approximate number of households in need of immediate shelter?','0%','1-25%','26-50%','50%-100%','Inf. unavailable','Approximate number of households in need of immediate shelter?;0% = None;1-25% (Up to approximately ¼ of the population = A few;26-50% (Between ¼ and ½ of the population) = Some;50% - 100% (More than ½ of the population) = Many?;'),('rap042f','What are the exposure elements that concern you?','Weather Conditions','Mosquitos','Darkness','Wild Animals/Snakes','Others','What are the exposure elements that concern you?'),('rap043a','Are alternative places available to people who require shelter (e.g. community shelters)?','Yes','No','Inf. unavailable','','','Are alternative places available to people who require shelter (e.g. community shelters or buildings that can be used as collective centers)?'),('rap044b','Number of operational Govt. shelters? (specific number)','','','','','','Number of operational Govt. shelters? (specific number)'),('rap045a','Land availability for shelter damage','Available','Unavailable','Inf. unavailable','','','Land availability for shelter damage'),('rap046a','Availability of NFI','Yes','No','Inf. unavailable','','','Availability of NFI');
/*!40000 ALTER TABLE `cat_rapid` ENABLE KEYS */;

--
-- Table structure for table `cat_shelter`
--

DROP TABLE IF EXISTS `cat_shelter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_shelter` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_shelter`
--

/*!40000 ALTER TABLE `cat_shelter` DISABLE KEYS */;
INSERT INTO `cat_shelter` VALUES ('she003f','What are the exposure elements that concern you?','Rains/Snow','Cold','Mosquitoes','Darkness','Others','Most concerning exposure element(s)'),('she002f','Approximate number of households  in need of immediate shelter? 0% = None1-25% (Up to approximately Â¼ of the population = A few26-50% (Between Â¼ and Â½ of the population) = Some50% - 100% (More than Â½ of the population)  = Many','None','A few','Some','Many','Information unavailable','Approximate number of households needing immediate shelter'),('she001a','Is shelter an issue as a result of the disaster?','Yes','No','Information unavailable','','','Shelter has become an issue due to the disaster'),('she004a','Are alternative places available to people who require shelter (e.g. community shelters or buildings that can be used as collective centers)?','Yes','No','Information unavailable','','','Availability of alternative places to people who require shelter (e.g. community shelters or buildings that can be used as collective centers)'),('she005b','Number and nature of operational  Govt.  shelters? (specific number)','','','','','','Number of operational Government shelters'),('she006a','Are there any NFI available?','Yes','No','Information unavailable','','','Availability of NFI in the area');
/*!40000 ALTER TABLE `cat_shelter` ENABLE KEYS */;

--
-- Table structure for table `cat_training`
--

DROP TABLE IF EXISTS `cat_training`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_training` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_training`
--

/*!40000 ALTER TABLE `cat_training` DISABLE KEYS */;
INSERT INTO `cat_training` VALUES ('tra014d','কতটা আর্থিক সহায়তা প্রয়োজন?','৪০,০০০ এর কম','৪০,০০০ এর বেশী','','','','কতটা আর্থিক সহায়তা প্রয়োজন'),('tra015d','পণ্য বিক্রির জন্য সরকার থেকে সাহায্য পান?','হ্যাঁ','না','','','','পণ্য বিক্রির জন্য সরকার থেকে সাহায্য পান'),('tra013d','ব্যাঙ্ক থেকে আর্থিক সাহায়াতা নেবার জন্য উৎসাহ দেওয়া হয়','হ্যাঁ','না','','','','ব্যাঙ্ক থেকে আর্থিক সাহায়াতা নেবার জন্য উৎসাহ দেওয়া হয়'),('tra011a','দলের কতজন এর সাথে যুক্ত হতে চায়?','প্রায় সবাই','৫ এর কম','৫ এর বেশী','','','দলের কতজন এর সাথে যুক্ত হতে চায়'),('tra012d','পণ্য তৈরির প্রশিক্ষন কোথা থেকে পান?','ব্লক থেকে','এন.জি.ও. থেকে','','','','কোথা থেকে পণ্য তৈরির প্রশিক্ষন পান'),('tra009d','বর্তমানে গ্রামে নিয়মিত প্রশিক্ষণ কর্মশালা হয় ?','হ্যাঁ','না','','','','গ্রামে নিয়মিত প্রশিক্ষণ কর্মশালা হয়'),('tra010d','এম.আই.পি তৈরি করার আগের অভিজ্ঞতা আছে ?','হ্যাঁ','না','','','','এম.আই.পি তৈরি করার আগের অভিজ্ঞতা আছে'),('tra007d','২.','যন্ত্রাংশ মেরামত (সাইকেল, মোবাইল ফোন)','অন্যান্য(লিখুন)','','','','উপযোগী প্রশিক্ষণ'),('tra008d','আপনারা কি ধরনের প্রশিক্ষণ এ অংশগ্রহণ করেছেন?','কৃষিকাজ','অন্যান্য','','','','কি ধরনের প্রশিক্ষণ এ অংশগ্রহণ করেছেন'),('tra006e','২.','দর্জির কাজ','মুদির দোকান','মসলা প্যাকেজিং','অন্যান্য','','উপযোগী প্রশিক্ষণ'),('tra003e','২.','ধানচাষ','পানচাষ','সূর্যমুখীচাষ','অন্যান্য','','উপযোগী প্রশিক্ষণ'),('tra004e','২.','ছাগলপালন,পোল্ট্রি','মৌমাছিপালন','মীনসংগ্রহ','অন্যান্য','','উপযোগী প্রশিক্ষণ'),('tra005a','২.','মুড়ি তৈরী করা','আচার বানানো','অন্যান্য','','','উপযোগী প্রশিক্ষণ'),('tra001d','পঞ্চায়েত বা সঙ্ঘ পরিচালিত কোনো প্রশিক্ষণে আগ্রহী?','হ্যাঁ','না','','','','পঞ্চায়েত বা সঙ্ঘ পরিচালিত প্রশিক্ষণে আগ্রহী'),('tra002d','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী?','কৃষিকাজ','অন্যান্য','','','','উপযোগী প্রশিক্ষণ');
/*!40000 ALTER TABLE `cat_training` ENABLE KEYS */;

--
-- Table structure for table `cat_water`
--

DROP TABLE IF EXISTS `cat_water`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cat_water` (
  `questionid` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `questiontext` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiona` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionb` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optionc` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optiond` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `optione` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repstatement` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`questionid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_water`
--

/*!40000 ALTER TABLE `cat_water` DISABLE KEYS */;
INSERT INTO `cat_water` VALUES ('wat001a','Has water supply been damaged/adversely affected?','Yes','No','Information unavailable','','','There has been damage to water supply'),('wat002f','What are the sources of drinking water which have been damaged?','Open well (erstwhile used for drinking water purposes)','Springs','Pond with embankment breached','Pipe water supply','Tube well','Sources of drinking water which have been damaged?'),('wat003a','Is the supply of disinfectants adequate?','Yes','No','Information unavailable','','','There is adequate supply of disinfectants'),('wat004f','What is the current water source?','Wells','Ponds/Open Water bodies','Tube wells/hand pumps','Piped Water Supply','Others','Current water source(s)'),('wat005f','Approximate % of total population of the Village without access to safe drinking water due to disaster (0% = None; 1-25% of the population = A few; 26-50% upto half of the population = Some; 50% - 100% More than half of the population = Many)','None','A few','Some','Many','Information unavailable','Approximate % of total population of the Village without access to safe drinking water due to disaster (0% = None; 1-25% of the population = A few; 26-50% upto half of the population = Some; 50% - 100% More than half of the population = Many)'),('wat006a','Access to water for all people with disabilities/ST/SC/Minorities (Post disaster)?','Yes','No','Information unavailable','','','Access to water is available for all people with disabilities/ST/SC/Minorities (Post disaster)'),('wat007e','Is the water available at the source enough for short-term and longer-term needs for all groups in the population?','Sufficient for Short term (for 1 weeks)','Partly (for 2 weeks)','Long term sufficiency (beyond 3 weeks)','Information unavailable','','Is the water available at the source enough for short-term and longer-term needs for all groups in the population?'),('wat008f','Do people have enough water containers of appropriate size and type?','None','A few','Some','Many','Information unavailable','Number of people who possess enough water containers of appropriate size and type'),('wat009a','Have toilet facilities been damaged/adversely affected?','Yes','No','Information unavailable','','','Toilet facilities been damaged/adversely affected'),('wat010d','What were the pre disaster excreta disposal practices?','Open Areas','Household/Community Latrines','','','','Pre disaster excreta disposal practices'),('wat011f','What % of households have access to toilet facilities (0% = None; 1-25% of the population = A few; 26-50% upto half of the population = Some; 50% - 100% More than half of the population = Many)','None','A few','Some','Many','Information unavailable','% of households that have access to toilet facilities (0% = None; 1-25% of the population = A few; 26-50% upto half of the population = Some; 50% - 100% More than half of the population = Many)'),('wat012d','What are the current (post Disaster) excreta disposal practices?','Open Areas','Household/Community Latrines','','','','Current (post Disaster) excreta disposal practices?'),('wat013f','Is there a threat to the health and well-being of the affected population due to:','Carcass disposal','Solid waste/garbage','Waste water','Rainwater runoff/drainage','Others','Major threats to the health and well-being of the affected population'),('wat014a','What was the practice on menstrual hygiene pre disaster?','Cloth','Sanitary Napkins','Others','','','Practice on menstrual hygiene pre disaster'),('wat015a','Do they still have access to them (ask women and girls/ANM/AWW/ASHA worker)?','Yes','No','Information unavailable','','','Females have access to menstrual hygiene facilities');
/*!40000 ALTER TABLE `cat_water` ENABLE KEYS */;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `disastertype` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `catname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `supercat` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subcatname` varchar(100) NOT NULL,
  PRIMARY KEY (`disastertype`,`catname`,`supercat`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES ('flood','cat_building','Damage Assessment','Building'),('flood','cat_education','Damage Assessment','Education'),('flood','cat_food','Damage Assessment','Food Aid and Nutrition'),('flood','cat_health','Damage Assessment','Health'),('flood','cat_infrastructure','Damage Assessment','Infrastructure'),('flood','cat_need','Need Assessment','Need'),('flood','cat_protection','Damage Assessment','Protection'),('flood','cat_shelter','Damage Assessment','Shelter'),('flood','cat_water','Damage Assessment','Water and Sanitation'),('flood','cat_training','Livelihood for SHGs','Training'),('flood','cat_educational','Livelihood for SHGs','Educational Training'),('flood','cat_market','Livelihood for SHGs','Market Linkage'),('flood','cat_advisory','Livelihood for SHGs','Advisory Services'),('flood','cat_rapid','RAPID','RAPID');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

--
-- Table structure for table `catreport`
--

DROP TABLE IF EXISTS `catreport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catreport` (
  `supercat` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `repname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`supercat`,`repname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catreport`
--

/*!40000 ALTER TABLE `catreport` DISABLE KEYS */;
INSERT INTO `catreport` VALUES ('Damage Assessment','temp_damage_','temporary'),('Need Assessment','temp_need_','temporary'),('Livelihood for SHGs','temp_livelihood_','temporary'),('RAPID','temp_rapid_','temporary');
/*!40000 ALTER TABLE `catreport` ENABLE KEYS */;

--
-- Table structure for table `chat_master`
--

DROP TABLE IF EXISTS `chat_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chat_master` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `receiver` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` varchar(255) DEFAULT NULL,
  `time_stamp` datetime DEFAULT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `flag` enum('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat_master`
--

/*!40000 ALTER TABLE `chat_master` DISABLE KEYS */;
INSERT INTO `chat_master` VALUES (31,'suman.bhattacharjee21@gmail.com','90513333','Work location change notification','Name : suman.bhattacharjee21@gmail.com \n\r Phone No:  \n\r your work location has been change from: Namkhana,  Frazergung,  Debnibas \n\r to :Namkhana,  Haripur,  Haripur-1','2016-08-21 18:30:00','prasun1926@gmail.com','y'),(32,'prasun1926@gmail.com','321654','Work location change notification','Name : prasun1926@gmail.com \n\r Phone No:  \n\r your work location has been change from: Namkhana,  Haripur,  Haripur-1 \n\r to :Namkhana,  Frazergung,  Debnibas','2016-08-21 18:30:00','prasun1926@gmail.com','n'),(33,'suman.bhattacharjee21@gmail.com','90513333','Work location change notification','Name : suman.bhattacharjee21@gmail.com \n\r Phone No:  \n\r your work location has been change from: Namkhana,  Haripur,  Haripur-1 \n\r to :Namkhana,  Frazergung,  Debnibas','2016-08-22 18:30:00','prasun1926@gmail.com','y'),(34,'suman.bhattacharjee21@gmail.com','90513333','Work location change notification','Name : suman.bhattacharjee21@gmail.com \n\r Phone No: 90513333 \n\r your work location has been change from: Namkhana,  Frazergung,  Debnibas \n\r to :Kakdwip,  Namkhana,  Namkhana','2016-08-22 18:30:00','prasun1926@gmail.com','y'),(35,'spade@abc.com','8562397410','Work location change notification','Name : spade@abc.com \n\r Phone No: 8562397410 \n\r your work location has been change from: Namkhana,  Haripur,  Chandanpiri \n\r to :Kakdwip,  Narayanpur,  North Chandanpiri','2016-09-09 00:00:00','prasun1926@gmail.com','n'),(36,'Jayanta.basak@gmail.com','9877526385','Work location change notification','Name : Jayanta.basak@gmail.com \n\r Phone No: 9877526385 \n\r your work location has been change from: Namkhana,  Frazergung,  Debnibas \n\r to :Kakdwip,  Narayanpur,  North Chandanpiri','2016-09-09 00:00:00','souvik.basu@heritageit.edu','n'),(37,'sk@gmail.com','8956231400','Work location change notification','Name : sk@gmail.com \n\r Phone No: 8956231400 \n\r your work location has been change from: Namkhana,  Haripur,  Chandanpiri \n\r to :Kakdwip,  Narayanpur,  North Chandanpiri','2016-09-11 00:00:00','souvik.basu@heritageit.edu','y'),(38,'sk@gmail.com','8956231400','Work location change notification','Name : sk@gmail.com \n\r Phone No: 8956231400 \n\r your work location has been change from: Kakdwip,  Narayanpur,  North Chandanpiri \n\r to :Namkhana,  Frazergung,  Debnibas','2016-09-11 00:00:00','vs@gmail.com','y'),(39,'rj@gmail.com','4523695612','Work location change notification','Name : rj@gmail.com \n\r Phone No: 4523695612 \n\r your work location has been change from: Namkhana,  Haripur,  Chandanpiri \n\r to :Kakdwip,  Narayanpur,  North Chandanpiri','2016-09-11 14:25:29','souvik.basu@heritageit.edu','y'),(40,'sdb@gmail.com','9874563219','Work location change notification','Name : sdb@gmail.com \n\r Phone No: 9874563219 \n\r your work location has been change from: Namkhana,  Haripur,  Chandanpiri \n\r to :Kakdwip,  Narayanpur,  North Chandanpiri','2016-09-12 08:11:14','souvik.basu@heritageit.edu','y'),(41,'skd@gmail.com','9874563215','Work location change notification','Name : skd@gmail.com \n\r Phone No: 9874563215 \n\r your work location has been change from: Namkhana,  Frazergung,  Debnibas \n\r to :Kakdwip,  Narayanpur,  North Chandanpiri','2016-09-12 08:27:36','cry@gmail.com','y'),(42,'kalyan@gmail.com','9874563210','Work location change notification','Name : kalyan@gmail.com \n\r Phone No: 9874563210 \n\r your work location has been change from: Namkhana,  Haripur,  Chandanpiri \n\r to :Kakdwip,  Narayanpur,  North Chandanpiri','2016-09-15 07:48:39','souvik.basu@heritageit.edu','y');
/*!40000 ALTER TABLE `chat_master` ENABLE KEYS */;

--
-- Table structure for table `contactmaster`
--

DROP TABLE IF EXISTS `contactmaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactmaster` (
  `id` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `affiliation` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contactno` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `numcategory` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `block` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `grampanchayat` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `locname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactmaster`
--

/*!40000 ALTER TABLE `contactmaster` DISABLE KEYS */;
INSERT INTO `contactmaster` VALUES ('con069','Jhuma Pani','Member','Ujjal','8001440375','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con002','Siuli Roy','Director','Computer Application Centre','9830342404','mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con003','Moumita Basu','SRF','IIMC','9831535538','mobile','West Bengal','South 24 Parganas','Namkhana','Frazerganj','Debnibas'),('con065','Shatabdi khatua','Member','Devi Shg','7407625199','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con005','Swapan Kumar Basu','Retired','Dena Bank','9831238511','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Namkhana'),('con006','Somprakash Bandyopadhyay','Professor','IIMC','9231683443','mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con008','Jayanta Basak','Research Associate','IIMC','9830720259','mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con068','Reboti Jana','Member','Chandramallika SHG','7584947798','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Haripur'),('con067','Karuna Vuia','Member','Janmavumi SHG','9647034629','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Haripur'),('con012','Anik RoyChoudhury','Research Associate','IIMC','9088894767','mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con066','Shilajit Sengupta','Member','Radharani SHG','9073357285','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con014','Jogomaya Kathuya','Member','Ma Shyama SHG','9883202262','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con015','Tusi Giri','Member','Samadhan Guru SHG','9732786439','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con016','Alpana Chowdhury','Member','Sayansiddha SHG','8945024413','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con017','Gouri Sinha','Member','Batashi SHG','9933884365','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con018','Kakali Das','Member','Rupali SHG','8116570954','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con019','Kavita Das','Member','Saradamani SHG','9933583592','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con020','Kanaklata Jana','Member','Ma Sarada SHG','7407506954','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con021','Susama Jana','Member','Samadhan Guru SHG','7550815200','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con022','Basanti Shit','Member','Maa Durga SHG','7797050977','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con023','Rekha ','Member','Maa Bisalakhhmi SHG','7407056784','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con024','Sefali Pradhan','Member','Sarajani SHG','8159997151','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con025','Namita Das','Member','Sayansiddha SHG','9564016976','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con026','Banda Maity','Member','Annada SHG','7407666177','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con027','Sefali Roy','Member','Samadhan Guru SHG','8001246223','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con028','Arati ','Member','Kannakumari SHG','7172192654','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con029','Arati ','Member','Sitala SHG','9647368101','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con030','Pratima Paul','Member','Indira Gandhi SHG','9735456932','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con031','Rina Pradhan','Member','Sarojani SHG','7407056787','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con032','Ranu Maity','Member','Maa Tara SHG','8768977698','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con033','Mamata ','Member','Dayamayi SHG','9647319598','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con034','Dhonno Giri','Member','Sila SHG','7602297889','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con035','Ratna Das','Member','Manidip SHG','8159950059','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Maharaj Gunj'),('con036','Mamata Das','Member','Maa Bisalakhhmi SHG','8348235754','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con037','Mamata Maity','Member','Mamatamoyi SHG','9609117177','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con038','Archana Pradhan','Member','Mangal Chandi SHG','9647039402','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con039','Namita Roy','Member','Maa Annapurna SHG','9609488496','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con040','Radharani Das','Member','Manodip SHG','9564366482','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Maharaj Gunj'),('con041','Mamata Maity','Member','Maa Tara SHG','7427946866','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con042','Sabitri Paul','Member','Sitala SHG','9733489757','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con043','Sankari Bera','Member','Sonali SHG','9609185215','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con044','Suchitra Sarkar','Member','Maa Bipatarini SHG','9735450702','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con045','Duga Mali','Member','Bhogini Nibedita SHG','9775304106','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con046','Laxmi Mandal','Member','Maa Durga SHG','8001914763','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con047','Kalpana Jana','Member','Mother Teresa SHG','7384374448','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con048','Shefali Nayak','Member','Maa Sarada SHG','9593116256','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con049','Jayanti Das','Member','Maa Annapurna SHG','9635095343','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con050','Sumita Maity','Member','Shapna Deep SHG','9734570912','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con051','Krishna Rani Kajli','Member','Maa Saraswati SHG','9647372117','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con052','Namita Bhuiya','Member','Surja Kiran SHG','9933426787','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con053','Namita Das','Member','Mandira SHG','9775840243','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con054','Anita Ghorai','Member','Bipad Tarini SHG','9647455326','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con055','Kakali Ghorai','Member','Barisha SHG','8348172165','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con056','Banalata Barua','Member','Mandira SHG','9734697086','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con057','Molina Shit','Member','Maa Karunamoyee SHG','9733234439','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con058','Pompa Das','Member','Sagar Kanna SHG','9609667125','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con059','Maheshwari Singha','Member','Jay Ma Kali SHG','9732395426','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con060','Jayanti Mandal','Member','Subarnalata SHG','9775855019','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con061','Namita Bera','Member','Sandhyadeep SHG','9775122412','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con062','Pramita Pradhan','Member','Surja Kiran SHG','9647363821','Mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con063','Kalyani Maity','Member','Sitala SHG','9734605405','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con064','Sanaka Maity ','Member','Maa Annapurna SHG','9733933107','Mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con070','Sushmita Das','Member','Puja','9775293011','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con071','Chandana Das','Member','Najrul','8372878175','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con072','Shila Das Bera','Member','Sonar Bangla','9735312216','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con073','Anima Jana','Member','Shemashri','9734777038','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con074','Gitanjali Nayek','Member','Najrul','9732716858','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Dakshin Chandanpiri'),('con077','Rita Bhattacharyya','Housewife','Homemaker','9433470895','mobile','West Bengal','North 24 Parganas','Bhadrakali','Hindmotor','Bidhan Park'),('con076','Sankar Bhattacharyya','Retired','CTI','9433450856','mobile','West Bengal','Malda','Dinajpur','Dinajpur','Ramchandrapur'),('con078','Soumya Mukherjee','BDO','Govt.','9231227382','mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con079','Dipok Kalia','DM','Government','9874563210','mobile','West Bengal','South 24 Parganas','Namkhana','Haripur','Haripur'),('con080','Pritha Das','Panchayat Pradhan','Government','8965741230','mobile','West Bengal','South 24 Parganas','Namkhana','Namkhana','Uttar Chandanpiri'),('con081','Sipra Das Bit','BDO','Government','8296106229','mobile','West Bengal','North 24 Parganas','Bhadrakali','Hindmotor','Bidhan Park');
/*!40000 ALTER TABLE `contactmaster` ENABLE KEYS */;

--
-- Table structure for table `disaster`
--

DROP TABLE IF EXISTS `disaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `disaster` (
  `locationid` int(10) unsigned NOT NULL,
  `locname` varchar(100) NOT NULL,
  `disastertype` varchar(100) NOT NULL,
  `disasterdate` date NOT NULL,
  `disastername` varchar(100) NOT NULL,
  `duration` varchar(30) NOT NULL,
  `intensity` varchar(30) NOT NULL,
  PRIMARY KEY (`disastername`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `disaster`
--

/*!40000 ALTER TABLE `disaster` DISABLE KEYS */;
INSERT INTO `disaster` VALUES (1,'Debnibas','flood','2015-09-25','1-debnibasflood2015-09-25','10 days','Severe'),(2,'Haripur','flood','2016-02-04','2-haripurflood2016-02-04','14 days','Moderate'),(3,'Namkhana','flood','2015-07-13','3-namkhanaflood2015-07-13','8 days','Light');
/*!40000 ALTER TABLE `disaster` ENABLE KEYS */;

--
-- Table structure for table `district`
--

DROP TABLE IF EXISTS `district`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `district` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `stateid` tinyint(4) DEFAULT NULL,
  `district` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `district`
--

/*!40000 ALTER TABLE `district` DISABLE KEYS */;
INSERT INTO `district` VALUES (1,1,'South-24pgs');
/*!40000 ALTER TABLE `district` ENABLE KEYS */;

--
-- Table structure for table `donate_master`
--

DROP TABLE IF EXISTS `donate_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donate_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `donated_by` varchar(255) DEFAULT NULL,
  `contact_no` varchar(100) NOT NULL,
  `resource_name` varchar(60) NOT NULL,
  `resource_unit` varchar(20) NOT NULL,
  `resource_amount` varchar(100) NOT NULL,
  `resource_others` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `panchayat_municipality` varchar(255) DEFAULT NULL,
  `village_area` varchar(255) DEFAULT NULL,
  `is_checked` enum('y','n','o') NOT NULL DEFAULT 'o',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donate_master`
--

/*!40000 ALTER TABLE `donate_master` DISABLE KEYS */;
INSERT INTO `donate_master` VALUES (1,'Prasun Seal','8296106229','Water','gallon','8','','743144','1','1','1','2','1','y'),(2,'Suman Bhattacharjee','9874563210','','','','I want to provide voluntary service','752136','1','1','2','3','3','n'),(5,'Suman Das','923561478','Food','quintal','89','','BKP','1','1','1','2','1','y'),(7,'Sabita  Chakraborty','9050403062','Food','quintal','10','','Bidhanpally','1','1','1','1','2','n'),(16,'Deb Dutta','963258741','Water','gallon','52','','nimtola','1','1','2','3','3','y'),(18,'sujoy guha','2356854179','Food','quintal','23','','MD','1','1','1','2','1','o'),(20,'Rahul Dubay','8956231400','Water','gallon','85','','park','1','1','2','3','3','y'),(21,'samar kanti','4589562310','','','',' I will give financial support to rebuilt houses','sodpur','1','1','1','2','1','y'),(24,'Souvik Basu','321456987','Water','ltr','100','','987456','1','1','1','1','2','o'),(25,'Souvik Basu','321456987','Food','Kg','25','       ','987456','1','1','1','1','2','o'),(26,'Soumya Mukherjee','9231227300','Water','ltr','12','','743144','1','1','1','1','2','n'),(29,'Soumya Mukherjeere','9836913300','','','',' Please provide rescue service for 3 victims   ','723123','1','1','2','3','3','y'),(30,'Ankita Das','9874563210','Water','ltr','85','','859632','1','1','1','1','2','o'),(31,'Ankita Das','9874563210','Food','quintal','8','','859632','1','1','1','1','2','o'),(32,'Ankita Das','9874563210','Cloth','packets','6','','859632','1','1','1','1','2','o'),(33,'Ankita Das','9874563210','Water','gallon','12','','859632','1','1','1','1','2','o'),(34,'Ankita Das','9874563210','Food','quintal','1','','859632','1','1','1','1','2','o'),(35,'Ankita Das','9874563210','Water','gallon','45','','859632','1','1','1','1','2','y'),(36,'Ankita Das','9874563210','','','','Rescue','859632','1','1','1','1','2','y'),(37,'Ankita Das','9874563210','','','','send us some services','859632','1','1','1','1','2','y');
/*!40000 ALTER TABLE `donate_master` ENABLE KEYS */;

--
-- Table structure for table `emergency_master`
--

DROP TABLE IF EXISTS `emergency_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emergency_master` (
  `req_id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(13) DEFAULT NULL,
  `prob_details` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `municipalaty` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `is_present` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emergency_master`
--

/*!40000 ALTER TABLE `emergency_master` DISABLE KEYS */;
INSERT INTO `emergency_master` VALUES (26,'Ankita Das','9874563210','send us water','1','1','1','','2',1),(25,'Ankita Debnath','8569741230','Send us reinforcement','1','1','1','','2',1),(24,'aa aa','0000000000','aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa','1','1','1','','2',1),(23,'Mala Saha','8952361245','Food for 30 people required','1','1','1','','2',1),(16,'sunil bose','369852147','No water no service','1','1','1','','1',1),(18,'Suman Bhattacharjee','9836913399','Need evacuation urgently','1','1','1','','1',1),(19,'Sukanta Basak','9869362300','Need drinking water immediately','1','1','1','','2',1),(20,'Saikat Kar','8956231236','Need medicine urgently','1','1','1','','1',2),(21,'Samik Lahiri','9856452300','Urgent evacuation needed.','1','1','1','','2',1),(22,'Kunal Roy','8956231400','Drinking water required for 50 people','1','1','2','','3',1);
/*!40000 ALTER TABLE `emergency_master` ENABLE KEYS */;

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `info` (
  `Shelter_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`Shelter_id`,`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `info`
--

/*!40000 ALTER TABLE `info` DISABLE KEYS */;
/*!40000 ALTER TABLE `info` ENABLE KEYS */;

--
-- Table structure for table `item_master`
--

DROP TABLE IF EXISTS `item_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_master` (
  `Item_id` int(10) NOT NULL,
  `Item_description` int(10) DEFAULT NULL,
  PRIMARY KEY (`Item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_master`
--

/*!40000 ALTER TABLE `item_master` DISABLE KEYS */;
/*!40000 ALTER TABLE `item_master` ENABLE KEYS */;

--
-- Table structure for table `location`
--

DROP TABLE IF EXISTS `location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location` (
  `locationid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `locname` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `grampanchayat` varchar(100) NOT NULL,
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  PRIMARY KEY (`locationid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location`
--

/*!40000 ALTER TABLE `location` DISABLE KEYS */;
INSERT INTO `location` VALUES (1,'Debnibas','West Bengal','South 24 Parganas','Namkhana','Frazerganj','',''),(2,'Haripur','West Bengal','South 24 Parganas','Namkhana','Haripur','',''),(3,'Namkhana','West Bengal','South 24 Parganas','Namkhana','Namkhana','',''),(5,'Uttar Chandanpiri','West Bengal','South 24 Parganas','Namkhana','Namkhana','',''),(6,'Dakshin Chandanpiri','West Bengal','South 24 Parganas','Namkhana','Namkhana','',''),(7,'Maharaj Gunj','West Bengal','South 24 Parganas','Namkhana','Namkhana','',''),(9,'Ramchandrapur','West Bengal','Malda','Dinajpur','Dinajpur','',''),(11,'Bidhan Park','West Bengal','North 24 Parganas','Bhadrakali','Hindmotor','','');
/*!40000 ALTER TABLE `location` ENABLE KEYS */;

--
-- Table structure for table `log_table`
--

DROP TABLE IF EXISTS `log_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_table` (
  `mobileno` varchar(14) NOT NULL,
  `questionid` varchar(10) NOT NULL,
  `catname` varchar(100) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `disastername` varchar(100) NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `responseid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_table`
--

/*!40000 ALTER TABLE `log_table` DISABLE KEYS */;
INSERT INTO `log_table` VALUES ('+919903998511','tra001d','cat_training','à¦ªà¦žà§à¦šà¦¾à§Ÿà§‡à¦¤ à¦¬à¦¾ à¦¸à¦™à§à¦˜ à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦¿à¦¤ à¦•à§‹à¦¨à§‹ à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£à§‡ à¦†à¦—à§à¦°à¦¹à§€? A>à¦¹à§à¦¯à¦¾à¦ B>à¦¨à¦¾','shg','2016-07-12 04:18:32',2),('+919903998511','tra002d','cat_training','à¦ªà¦žà§à¦šà¦¾à§Ÿà§‡à¦¤ à¦¬à¦¾ à¦¸à¦™à§à¦˜ à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦¿à¦¤ à¦•à§‹à¦¨à§‹ à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£à§‡ à¦†à¦—à§à¦°à¦¹à§€? A>à¦¹à§à¦¯à¦¾à¦ B>à¦¨à¦¾','shg','2016-07-12 04:18:35',2),('+919903998511','tra002d','cat_training','à¦•à§‹à¦¨ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦¯à§‹à¦—à§€? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:18:39',2),('+919903998511','tra002d','cat_training','à¦•à§‹à¦¨ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦¯à§‹à¦—à§€? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:18:42',2),('+919903998511','tra002d','cat_training','à¦•à§‹à¦¨ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦¯à§‹à¦—à§€? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:18:47',2),('+919903998511','tra002d','cat_training','à¦•à§‹à¦¨ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦¯à§‹à¦—à§€? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:18:54',2),('+919903998511','tra002d','cat_training','à¦•à§‹à¦¨ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦¯à§‹à¦—à§€? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:18:57',2),('+919903998511','tra002d','cat_training','à¦•à§‹à¦¨ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦¯à§‹à¦—à§€? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:19:03',2),('+919903998511','tra002d','cat_training','à¦•à§‹à¦¨ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦¯à§‹à¦—à§€? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:19:06',2),('+919903998511','tra002d','cat_training','à¦•à§‹à¦¨ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦¯à§‹à¦—à§€? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:19:11',2),('+919903998511','tra002d','cat_training','A','shg','2016-07-12 04:19:13',2),('+919903998511','tra003e','cat_training','à¦•à§‹à¦¨ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦¯à§‹à¦—à§€? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:19:16',2),('+919903998511','tra008d','cat_training','à¦•à§‹à¦¨ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦†à¦ªà¦¨à¦¾à¦° à¦¦à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦‰à¦ªà¦¯à§‹à¦—à§€? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:19:18',2),('+919903998511','tra009d','cat_training','à§¨. A>à¦§à¦¾à¦¨à¦šà¦¾à¦· B>à¦ªà¦¾à¦¨à¦šà¦¾à¦· C>à¦¸à§‚à¦°à§à¦¯à¦®à§à¦–à§€à¦šà¦¾à¦· D>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:19:21',2),('+919903998511','tra010d','cat_training','à¦†à¦ªà¦¨à¦¾à¦°à¦¾ à¦•à¦¿ à¦§à¦°à¦¨à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦ à¦…à¦‚à¦¶à¦—à§à¦°à¦¹à¦£ à¦•à¦°à§‡à¦›à§‡à¦¨? A>à¦•à§ƒà¦·à¦¿à¦•à¦¾à¦œ B>à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯','shg','2016-07-12 04:19:24',2),('+919903998511','tra011a','cat_training','à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦—à§à¦°à¦¾à¦®à§‡ à¦¨à¦¿à§Ÿà¦®à¦¿à¦¤ à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦•à¦°à§à¦®à¦¶à¦¾à¦²à¦¾ à¦¹à§Ÿ ? A>à¦¹à§à¦¯à¦¾à¦ B>à¦¨à¦¾','shg','2016-07-12 04:19:27',2),('+919903998511','tra012d','cat_training','à¦à¦®.à¦†à¦‡.à¦ªà¦¿ à¦¤à§ˆà¦°à¦¿ à¦•à¦°à¦¾à¦° à¦†à¦—à§‡à¦° à¦…à¦­à¦¿à¦œà§à¦žà¦¤à¦¾ à¦†à¦›à§‡ ? A>à¦¹à§à¦¯à¦¾à¦ B>à¦¨à¦¾','shg','2016-07-12 04:19:30',2),('+919903998511','tra013d','cat_training','A','shg','2016-07-12 04:19:32',2),('+919903998511','tra014d','cat_training','à¦¦à¦²à§‡à¦° à¦•à¦¤à¦œà¦¨ à¦à¦° à¦¸à¦¾à¦¥à§‡ à¦¯à§à¦•à§à¦¤ à¦¹à¦¤à§‡ à¦šà¦¾à§Ÿ? A>à¦ªà§à¦°à¦¾à§Ÿ à¦¸à¦¬à¦¾à¦‡ B>à§« à¦à¦° à¦•à¦® C>à§« à¦à¦° à¦¬à§‡à¦¶à§€','shg','2016-07-12 04:19:37',2),('+919903998511','tra015d','cat_training','à¦ªà¦£à§à¦¯ à¦¤à§ˆà¦°à¦¿à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦¨ à¦•à§‹à¦¥à¦¾ à¦¥à§‡à¦•à§‡ à¦ªà¦¾à¦¨? A>à¦¬à§à¦²à¦• à¦¥à§‡à¦•à§‡ B>à¦à¦¨.à¦œà¦¿.à¦“. à¦¥à§‡à¦•à§‡','shg','2016-07-12 04:19:40',2),('+919830342404','tra001d','cat_training','A','shg','2016-07-18 05:47:24',1),('+919830342404','tra002d','cat_training','A','shg','2016-07-18 05:47:54',1),('+918442861305','rap001b','cat_rapid','20','3-rapid','2016-09-11 11:14:35',1),('+919051130586','rap001b','cat_rapid','20','3-rapid','2016-09-11 11:07:39',2),('+919051130586','rap001b','cat_rapid','30','3-rapid','2016-09-11 11:14:26',3),('+918442861305','rap002b','cat_rapid','10','3-rapid','2016-09-11 11:15:08',1),('+919051130586','rap002b','cat_rapid','14','3-rapid','2016-09-11 11:15:03',3),('+918442861305','rap003b','cat_rapid','10000','3-rapid','2016-09-11 11:15:32',1),('+919051130586','rap003b','cat_rapid','10000','3-rapid','2016-09-11 11:15:39',3),('+918442861305','rap004b','cat_rapid','5500','3-rapid','2016-09-11 11:15:59',1),('+919051130586','rap004b','cat_rapid','6500','3-rapid','2016-09-11 11:16:16',3),('+918442861305','rap005b','cat_rapid','4500','3-rapid','2016-09-11 11:16:19',1),('+919051130586','rap005b','cat_rapid','3000','3-rapid','2016-09-11 11:20:06',3),('+918442861305','rap006b','cat_rapid','30','3-rapid','2016-09-11 11:16:53',1),('+919051130586','rap006b','cat_rapid','3000','3-rapid','2016-09-11 11:20:40',3),('+918442861305','rap007b','cat_rapid','3000','3-rapid','2016-09-11 11:17:13',1),('+919051130586','rap007b','cat_rapid','4000','3-rapid','2016-09-11 11:23:00',3),('+918442861305','rap008b','cat_rapid','2000','3-rapid','2016-09-11 11:17:57',1),('+919051130586','rap008b','cat_rapid','500','3-rapid','2016-09-11 11:23:49',3),('+918442861305','rap009b','cat_rapid','1500','3-rapid','2016-09-11 11:18:18',1),('+919051130586','rap009b','cat_rapid','1500','3-rapid','2016-09-11 11:24:46',3),('+918442861305','rap010b','cat_rapid','500','3-rapid','2016-09-11 11:18:44',1),('+919051130586','rap010b','cat_rapid','200','3-rapid','2016-09-11 11:25:29',3),('+918442861305','rap011b','cat_rapid','1000','3-rapid','2016-09-11 11:19:11',1),('+919051130586','rap011b','cat_rapid','700','3-rapid','2016-09-11 11:26:09',3),('+918442861305','rap012b','cat_rapid','1000','3-rapid','2016-09-11 11:19:37',1),('+919051130586','rap012b','cat_rapid','2500','3-rapid','2016-09-11 11:26:38',3),('+918442861305','rap013b','cat_rapid','3000','3-rapid','2016-09-11 11:20:03',1),('+919051130586','rap013b','cat_rapid','1500','3-rapid','2016-09-11 11:27:05',3),('+918442861305','rap014b','cat_rapid','1000','3-rapid','2016-09-11 11:20:29',1),('+919051130586','rap014b','cat_rapid','200','3-rapid','2016-09-11 11:27:38',3),('+918442861305','rap015b','cat_rapid','1200','3-rapid','2016-09-11 11:20:57',1),('+919051130586','rap015b','cat_rapid','1000','3-rapid','2016-09-11 11:28:15',3),('+918442861305','rap016b','cat_rapid','1800','3-rapid','2016-09-11 11:21:25',1),('+919051130586','rap016b','cat_rapid','2000','3-rapid','2016-09-11 11:28:50',3),('+918442861305','rap017b','cat_rapid','800','3-rapid','2016-09-11 11:22:01',1),('+919051130586','rap017b','cat_rapid','400','3-rapid','2016-09-11 11:30:10',3),('+918442861305','rap018b','cat_rapid','400','3-rapid','2016-09-11 11:22:44',1),('+919051130586','rap018b','cat_rapid','200','3-rapid','2016-09-11 11:31:01',3),('+918442861305','rap019b','cat_rapid','300','3-rapid','2016-09-11 11:23:05',1),('+919051130586','rap019b','cat_rapid','400','3-rapid','2016-09-11 11:32:04',3),('+918442861305','rap020b','cat_rapid','100','3-rapid','2016-09-11 11:23:30',1),('+919051130586','rap020b','cat_rapid','3000','3-rapid','2016-09-11 11:33:20',3),('+918442861305','rap021d','cat_rapid','A','3-rapid','2016-09-11 11:24:32',1),('+919051130586','rap021d','cat_rapid','B','3-rapid','2016-09-11 11:34:48',3),('+918442861305','rap022d','cat_rapid','B','3-rapid','2016-09-11 11:30:25',1),('+919051130586','rap022d','cat_rapid','B','3-rapid','2016-09-11 11:35:41',3),('+918442861305','rap023d','cat_rapid','B','3-rapid','2016-09-11 11:31:10',1),('+919051130586','rap023d','cat_rapid','A','3-rapid','2016-09-11 11:36:36',3),('+918442861305','rap024c','cat_rapid','Kolkata\nAsansol\nMalda\nMednipur\nHaldia\nDurgapur','3-rapid','2016-09-11 11:34:10',1),('+919051130586','rap024c','cat_rapid','A B C D E F','3-rapid','2016-09-11 11:38:04',3),('+918442861305','rap025a','cat_rapid','C','3-rapid','2016-09-11 11:34:36',1),('+919051130586','rap025a','cat_rapid','A','3-rapid','2016-09-11 11:38:58',3),('+919051130586','rap026f','cat_rapid','A','3-rapid','2016-09-11 11:40:37',3),('+919051130586','rap027f','cat_rapid','A','3-rapid','2016-09-11 11:41:09',3),('+919051130586','rap028f','cat_rapid','A','3-rapid','2016-09-11 11:41:37',3),('+919051130586','rap029a','cat_rapid','A','3-rapid','2016-09-11 11:42:32',3),('+919051130586','rap030e','cat_rapid','A','3-rapid','2016-09-11 11:43:11',3),('+918442861305','rap031f','cat_rapid','E','3-rapid','2016-09-11 11:35:04',1),('+919051130586','rap031f','cat_rapid','A','3-rapid','2016-09-11 11:45:36',3),('+918442861305','rap032a','cat_rapid','B','3-rapid','2016-09-11 11:35:34',1),('+919051130586','rap032a','cat_rapid','A','3-rapid','2016-09-11 11:46:00',3),('+919051130586','rap033d','cat_rapid','A','3-rapid','2016-09-11 11:46:48',3),('+919051130586','rap034f','cat_rapid','A','3-rapid','2016-09-11 11:47:20',3),('+919051130586','rap035f','cat_rapid','A','3-rapid','2016-09-11 11:48:11',3),('+919051130586','rap036d','cat_rapid','A','3-rapid','2016-09-11 11:49:22',3),('+918442861305','rap037f','cat_rapid','C','3-rapid','2016-09-11 11:36:14',1),('+918442861305','rap038a','cat_rapid','A','3-rapid','2016-09-11 11:37:10',1),('+918442861305','rap039a','cat_rapid','C','3-rapid','2016-09-11 11:37:40',1),('+918442861305','rap040a','cat_rapid','B','3-rapid','2016-09-11 11:38:08',1),('+918442861305','rap046a','cat_rapid','C','3-rapid','2016-09-11 11:38:41',1);
/*!40000 ALTER TABLE `log_table` ENABLE KEYS */;

--
-- Table structure for table `missing_master`
--

DROP TABLE IF EXISTS `missing_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `missing_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `marks` varchar(255) DEFAULT NULL,
  `Phone_Missing` varchar(15) NOT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `age` int(100) DEFAULT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `panchayat` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `missing_master`
--

/*!40000 ALTER TABLE `missing_master` DISABLE KEYS */;
INSERT INTO `missing_master` VALUES (11,'Sriya','Roy','Mole at the left foot','9836913389','Female',3,'1','1','1','1','2',''),(4,'Pratap','Adhikari',NULL,'8296106229','Male',65,'India','WB','kolkata','Ichapur','North-BKP',''),(5,'Soma','Pal',NULL,'9869562310','Female',46,'India','WB','kolkata','Ichapur','North-BKP',''),(12,'Surajit','Roy','Mole on right knee','8956231400','Male',4,'1','1','1','1','2',''),(7,'Prasun ','Seal',NULL,'8296106229','Male',27,'1','1','1','2','1',''),(8,'Toton','Sil','Cut mark at the forehead','9051333389','Male',34,'1','1','1','2','1',''),(9,'Suman','Dey','Birth mark at the left shoulder','9237562300','Male',40,'1','1','1','2','1','');
/*!40000 ALTER TABLE `missing_master` ENABLE KEYS */;

--
-- Table structure for table `notificationmaster`
--

DROP TABLE IF EXISTS `notificationmaster`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificationmaster` (
  `notificationid` varchar(20) NOT NULL,
  `notificationtype` varchar(30) NOT NULL,
  `title` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`notificationid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificationmaster`
--

/*!40000 ALTER TABLE `notificationmaster` DISABLE KEYS */;
INSERT INTO `notificationmaster` VALUES ('w1','Warning','Storm Coming','120 kmph storm coming on Sunderbans','2016-07-11 04:01:30','inactive'),('d1','De-Warning','Storm Gone','Diverted to Bangladesh....','2016-07-11 04:02:25','inactive'),('w2','Warning','Flood Coming','Rivers flowing over danger level. ALERT!!!!!','2016-07-11 11:10:58','inactive'),('d2','De-Warning','Flood Not Coming','Flood not coming','2016-07-11 13:21:03','inactive'),('w3','Warning','Flood ALERT!!!','Rivers in South 24 Parganas are flowing above danger level.....','2016-07-11 13:22:30','active'),('o1','Others','Relief Arrived','Huge amount of relief material arrived from Qatar Red Crescent','2016-07-11 13:24:57','active'),('w4','Warning','Tsunami Coming','huge waves','2016-07-18 03:31:57','active');
/*!40000 ALTER TABLE `notificationmaster` ENABLE KEYS */;

--
-- Table structure for table `panchayat_municipalaty`
--

DROP TABLE IF EXISTS `panchayat_municipalaty`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `panchayat_municipalaty` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `panchayat` varchar(50) DEFAULT NULL,
  `blockid` tinyint(4) DEFAULT NULL,
  `districtid` tinyint(4) DEFAULT NULL,
  `stateid` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `panchayat_municipalaty`
--

/*!40000 ALTER TABLE `panchayat_municipalaty` DISABLE KEYS */;
INSERT INTO `panchayat_municipalaty` VALUES (1,'Haripur',1,1,1),(2,'Frazergung',1,1,1),(3,'Narayanpur',2,1,1);
/*!40000 ALTER TABLE `panchayat_municipalaty` ENABLE KEYS */;

--
-- Table structure for table `phone_numbers`
--

DROP TABLE IF EXISTS `phone_numbers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phone_numbers` (
  `id` int(11) NOT NULL,
  `phone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone_numbers`
--

/*!40000 ALTER TABLE `phone_numbers` DISABLE KEYS */;
INSERT INTO `phone_numbers` VALUES (1,'8001440375'),(2,'9830342404'),(3,'7550815200');
/*!40000 ALTER TABLE `phone_numbers` ENABLE KEYS */;

--
-- Table structure for table `question_data`
--

DROP TABLE IF EXISTS `question_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `question_data` (
  `qid` int(11) NOT NULL DEFAULT '0',
  `questionid` varchar(10) DEFAULT NULL,
  `catname` varchar(100) NOT NULL DEFAULT '',
  `disastername` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_data`
--

/*!40000 ALTER TABLE `question_data` DISABLE KEYS */;
INSERT INTO `question_data` VALUES (1,'tra001d','cat_training','shg'),(2,'tra002d','cat_training','shg'),(3,'tra003e','cat_training','shg'),(4,'tra004e','cat_training','shg'),(5,'tra005a','cat_training','shg'),(6,'tra006e','cat_training','shg'),(7,'tra007d','cat_training','shg'),(8,'tra008d','cat_training','shg'),(9,'tra009d','cat_training','shg'),(10,'tra010d','cat_training','shg'),(11,'tra011a','cat_training','shg'),(12,'tra012d','cat_training','shg'),(13,'tra013d','cat_training','shg'),(14,'tra014d','cat_training','shg'),(15,'tra015d','cat_training','shg');
/*!40000 ALTER TABLE `question_data` ENABLE KEYS */;

--
-- Table structure for table `rapid`
--

DROP TABLE IF EXISTS `rapid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rapid` (
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `block` varchar(100) DEFAULT NULL,
  `grampanchayat` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `hamlet` varchar(100) DEFAULT NULL,
  `ward` varchar(100) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `loc001b` int(10) DEFAULT NULL,
  `loc002b` int(10) DEFAULT NULL,
  `loc003b` int(10) DEFAULT NULL,
  `loc004b` int(10) DEFAULT NULL,
  `loc005b` int(10) DEFAULT NULL,
  `loc006b` int(10) DEFAULT NULL,
  `loc007b` int(10) DEFAULT NULL,
  `loc008b` int(10) DEFAULT NULL,
  `loc009b` int(10) DEFAULT NULL,
  `loc010b` int(10) DEFAULT NULL,
  `loc011b` int(10) DEFAULT NULL,
  `loc012b` int(10) DEFAULT NULL,
  `loc013b` int(10) DEFAULT NULL,
  `loc014b` int(10) DEFAULT NULL,
  `loc015b` int(10) DEFAULT NULL,
  `loc016b` int(10) DEFAULT NULL,
  `loc017b` int(10) DEFAULT NULL,
  `loc018b` int(10) DEFAULT NULL,
  `loc019b` int(10) DEFAULT NULL,
  `loc020b` int(10) DEFAULT NULL,
  `loc021d` varchar(50) DEFAULT NULL,
  `loc022d` varchar(50) DEFAULT NULL,
  `loc023d` varchar(50) DEFAULT NULL,
  `loc024c` varchar(200) DEFAULT NULL,
  `was001a` varchar(50) DEFAULT NULL,
  `was002c` varchar(200) DEFAULT NULL,
  `was003f` varchar(50) DEFAULT NULL,
  `was004f` varchar(50) DEFAULT NULL,
  `was005a` varchar(50) DEFAULT NULL,
  `was006e` varchar(50) DEFAULT NULL,
  `was007e` varchar(50) DEFAULT NULL,
  `was008a` varchar(50) DEFAULT NULL,
  `was009d` varchar(50) DEFAULT NULL,
  `was010f` varchar(50) DEFAULT NULL,
  `was011f` varchar(50) DEFAULT NULL,
  `was012d` varchar(50) DEFAULT NULL,
  `was013f` varchar(50) DEFAULT NULL,
  `was014a` varchar(50) DEFAULT NULL,
  `was015a` varchar(50) DEFAULT NULL,
  `she001a` varchar(50) DEFAULT NULL,
  `she002f` varchar(50) DEFAULT NULL,
  `she003f` varchar(50) DEFAULT NULL,
  `she004a` varchar(50) DEFAULT NULL,
  `she005b` int(10) DEFAULT NULL,
  `she006a` varchar(50) DEFAULT NULL,
  `she007a` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rapid`
--

/*!40000 ALTER TABLE `rapid` DISABLE KEYS */;
/*!40000 ALTER TABLE `rapid` ENABLE KEYS */;

--
-- Table structure for table `register_master`
--

DROP TABLE IF EXISTS `register_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `block` varchar(100) DEFAULT NULL,
  `panchayat` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `landmark` int(10) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL,
  `affiliation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register_master`
--

/*!40000 ALTER TABLE `register_master` DISABLE KEYS */;
INSERT INTO `register_master` VALUES (1,'Prasun','Seal','Male','8296106229','prasun1926@gmail.com','1','1','1','2','1',743144,'827ccb0eea8a706c4c34a16891f84e7b','Agencies','Doctors for You'),(2,'Suman','Bhattacharjee','Male','9432430050','suman.bhattacharjee21@gmail.com','1','1','1','1','2',743144,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','Spade'),(3,'Souvik','Basu','Male','321456987','souvik.basu@heritageit.edu','1','1','2','3','3',987456,'827ccb0eea8a706c4c34a16891f84e7b','Admin','Spade'),(4,'Sanjib','Adikari','Male','9051325644','sanjib@gmail.com','1','1','1','2','1',332144,'827ccb0eea8a706c4c34a16891f84e7b','Donor','Kasa'),(5,'Sujoy','Guha','Male','90511294040','sujoy@abc.com','1','1','1','1','2',745566,'827ccb0eea8a706c4c34a16891f84e7b','Agencies','Spade'),(9,'Soumya','Mukherjee','Male','9836913300','sm@gmail.com',NULL,NULL,NULL,NULL,NULL,723123,'827ccb0eea8a706c4c34a16891f84e7b','Donor',NULL),(12,'CMBS',NULL,NULL,'9856231520','cnbs@gmail.com','1','1','2','3','3',789459,'827ccb0eea8a706c4c34a16891f84e7b','Agencies',NULL),(13,'RedCross',NULL,NULL,'7856230045','rdc@live.com','1','1','1','1','2',784563,'827ccb0eea8a706c4c34a16891f84e7b','Agencies',NULL),(15,'Javed','Khan','Male','8958457823','jk@live.com','1','1','1','2','1',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers',NULL),(16,'Maya','Saha','Female','7856961230','ms@gmail.com','1','1','1','1','2',NULL,'ab56b4d92b40713acc5af89985d4b786','Volunteers',NULL),(17,'Ram Krishna Mission',NULL,NULL,'8956253700','rk@live.com','1','1','1','1','2',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Agencies',NULL),(18,'Sourav','Saha','Male','4589632300','ss@gmail.com','1','1','1','2','1',756234,'827ccb0eea8a706c4c34a16891f84e7b','Donor',NULL),(19,'Soumik','Lahiri','Male','7856230012','sl@live.com','1','1','1','1','2',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers',NULL),(20,'Bharat Sevasram',NULL,NULL,'4589362312','vs@gmail.com','1','1','1','1','2',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Agencies',NULL),(21,'Sujoy','Ghosh','Male','4589231563','sg@gmail.com','1','1','1','1','2',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','Admin'),(24,'Ramesh','Shaw','Male','4589632300','rs@gmail.com','1','1','1','1','2',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers',''),(26,'Doctors for You',NULL,NULL,'8956452300','dfy@gmail.com','1','1','1','1','2',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Agencies',NULL),(27,'Rajib','Jana','Male','7845236900','rjana@gmail.com','1','1','1','1','2',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','Ram Krishna Mission'),(28,'Rahul','Kumar','Male','9856231200','rahul@gmail.com','1','1','1','1','2',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','Ram Krishna Mission'),(29,'Shymal','Roy','Male','8956241036','sroy@live.com','1','1','1','1','2',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','CMBS'),(35,'CRY',NULL,NULL,'9874563210','cry@gmail.com','1','1','2','3','3',789456,'827ccb0eea8a706c4c34a16891f84e7b','Agencies','CRY'),(36,'Sipra','Dasbit','Female','9874563210','sdb@gmail.com','1','1','2','3','3',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','Admin'),(33,'Saurav','Sil','Male','9874563210','saurav@gmail.com','1','1','1','2','1',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','CRY'),(34,'Silpa','Das','Female','9874563210','silpa@gmail.com','1','1','2','3','3',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','CRY'),(37,'SK','Dutta','Male','9874563210','skd@gmail.com','1','1','2','3','3',NULL,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','CRY'),(38,'ISN',NULL,NULL,'9051000000','isn@gmail.com','1','1','1','2','1',712235,'827ccb0eea8a706c4c34a16891f84e7b','Agencies','ISN'),(39,'Haripada','Sil','Male','8523697410','hari@gmail.com','1','1','1','2','1',743144,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','ISN'),(40,'Ankita','Das','Female','9874563210','aaa@gmail.com','1','1','1','1','2',859632,'827ccb0eea8a706c4c34a16891f84e7b','Donor',NULL),(41,'LAMP',NULL,NULL,'7854231609','lamp@gmail.com','1','1','1','1','2',700003,'827ccb0eea8a706c4c34a16891f84e7b','Agencies','LAMP'),(42,'Kalyan','Kumar','Male','9874563210','kalyan@gmail.com','1','1','1','1','2',700005,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','Admin'),(43,'MSS',NULL,NULL,'8523697432','mss@gmail.com','1','1','1','1','2',700235,'827ccb0eea8a706c4c34a16891f84e7b','Agencies','MSS'),(44,'VES',NULL,NULL,'9523641796','ves@gmail.com','1','1','2','3','3',700065,'827ccb0eea8a706c4c34a16891f84e7b','Agencies','VES'),(45,'RKV',NULL,NULL,'9874563210','rkv@gmail.com','1','1','1','2','1',743144,'827ccb0eea8a706c4c34a16891f84e7b','Agencies','RKV'),(46,'Kalipodo','Ganguli',NULL,'8523697410','kalipodo@gmail.com','1','1','1','1','2',700223,'827ccb0eea8a706c4c34a16891f84e7b','Volunteers','Admin');
/*!40000 ALTER TABLE `register_master` ENABLE KEYS */;

--
-- Table structure for table `resource_request`
--

DROP TABLE IF EXISTS `resource_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resource_request` (
  `Req_id` int(50) NOT NULL AUTO_INCREMENT,
  `resource_name` varchar(50) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `importance` text,
  `Requisition_Date` datetime DEFAULT NULL,
  `requested_by` varchar(50) DEFAULT NULL,
  `contact_no` varchar(13) DEFAULT NULL,
  `Affiliation` text,
  `Agency_Id` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `district` varchar(25) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `panchayat_municipality` varchar(255) DEFAULT NULL,
  `village_area` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Req_id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resource_request`
--

/*!40000 ALTER TABLE `resource_request` DISABLE KEYS */;
INSERT INTO `resource_request` VALUES (67,'Food','30 kg','normal','2016-09-14 02:15:32','Prasun Seal','8296106229','Doctors for You',NULL,'743144','1','1','1','1','2'),(68,'Cloth','50 meter','normal','2016-09-05 07:38:20','Prasun Seal','8296106229','Doctors for You',NULL,'743144','1','1','1','1','2'),(69,'Tarpaulin','40 pices','normal','2016-09-06 07:45:41','Prasun Seal','8296106229','Doctors for You',NULL,'743144','1','1','1','1','2'),(70,'Food','30 kg','critical','2016-09-09 09:13:53','Prasun Seal','8296106229','Doctors for You',NULL,'743455','1','1','1','2','1'),(71,'Cloth','50 quintal','critical','2016-09-09 09:13:53','Prasun Seal','8296106229','Doctors for You',NULL,'743455','1','1','1','2','1'),(72,'Tarpaulin','40 pices','critical','2016-09-09 09:13:53','Prasun Seal','8296106229','Doctors for You',NULL,'743455','1','1','1','2','1'),(73,'Water','30 ltr','urgent','2016-09-09 09:16:20','Prasun Seal','8296106229','Doctors for You',NULL,'743144','1','1','1','2','1'),(74,'Water','30 ltr','urgent','2016-09-09 09:16:21','Prasun Seal','8296106229','Doctors for You',NULL,'743144','1','1','1','2','1'),(76,'Water','30 ltr','urgent','2016-09-12 06:19:41','CRY ','9874563210','CRY',NULL,'743144','1','1','1','2','1'),(77,'Food','40 quintal','urgent','2016-09-12 06:19:41','CRY ','9874563210','CRY',NULL,'743144','1','1','1','2','1'),(78,'Water','20 ltr','critical','2016-09-12 08:19:03','CRY ','9874563210','CRY',NULL,'743144','1','1','1','1','2'),(79,'Cloth','40 meter','critical','2016-09-12 08:19:03','CRY ','9874563210','CRY',NULL,'743144','1','1','1','1','2'),(80,'Food','20 kg','normal','2016-09-12 08:21:13','CRY ','9874563210','CRY',NULL,'235698','1','1','1','1','2'),(81,'Cloth','50 meter','normal','2016-09-12 08:21:13','CRY ','9874563210','CRY',NULL,'235698','1','1','1','1','2'),(82,'Tarpaulin','60 pices','normal','2016-09-12 08:21:13','CRY ','9874563210','CRY',NULL,'235698','1','1','1','1','2'),(83,'Tarpaulin','60 pices','normal','2016-09-12 08:21:13','CRY ','9874563210','CRY',NULL,'235698','1','1','1','1','2'),(84,'Water','10 ltr','critical','2016-09-12 08:32:06','SK Dutta','9874563210','CRY',NULL,'745896','1','1','1','1','2'),(85,'Food','40 kg','critical','2016-09-12 08:32:06','SK Dutta','9874563210','CRY',NULL,'745896','1','1','1','1','2'),(86,'Cloth','50 meter','critical','2016-09-12 08:32:06','SK Dutta','9874563210','CRY',NULL,'745896','1','1','1','1','2');
/*!40000 ALTER TABLE `resource_request` ENABLE KEYS */;

--
-- Table structure for table `response`
--

DROP TABLE IF EXISTS `response`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `response` (
  `mobileno` varchar(14) NOT NULL,
  `questionid` varchar(10) NOT NULL,
  `catname` varchar(100) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `disastername` varchar(100) NOT NULL,
  `timestamp` varchar(100) NOT NULL,
  `responseid` int(11) NOT NULL,
  PRIMARY KEY (`mobileno`,`questionid`,`catname`,`disastername`,`timestamp`,`responseid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `response`
--

/*!40000 ALTER TABLE `response` DISABLE KEYS */;
INSERT INTO `response` VALUES ('9163256065','hea001f','cat_health','e','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','hea002a','cat_health','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','hea003f','cat_health','d','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','hea004f','cat_health','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','hea005c','cat_health','10, available','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','hea006e','cat_health','d','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','hea007a','cat_health','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','hea008a','cat_health','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','hea009f','cat_health','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','she001a','cat_shelter','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','she002f','cat_shelter','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','she003f','cat_shelter','d','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','she004a','cat_shelter','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','she005b','cat_shelter','30','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','she006a','cat_shelter','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','bui001f','cat_building','e','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','bui002f','cat_building','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','bui003b','cat_building','20','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','bui004a','cat_building','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','bui005a','cat_building','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','bui006d','cat_building','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat001a','cat_water','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat002f','cat_water','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat003a','cat_water','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat004f','cat_water','d','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat005f','cat_water','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat006a','cat_water','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat007e','cat_water','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat008f','cat_water','e','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat009a','cat_water','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat010d','cat_water','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat011f','cat_water','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat012d','cat_water','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat013f','cat_water','d','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat014a','cat_water','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','wat015a','cat_water','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro001a','cat_protection','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro002a','cat_protection','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro003a','cat_protection','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro004a','cat_protection','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro005a','cat_protection','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro006a','cat_protection','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro007a','cat_protection','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro008a','cat_protection','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro009a','cat_protection','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro010a','cat_protection','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro011a','cat_protection','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro012a','cat_protection','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro013a','cat_protection','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','pro014a','cat_protection','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee001d','cat_need','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee002d','cat_need','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee003d','cat_need','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee004b','cat_need','30','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee005c','cat_need','Steamers and fast boats','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee006c','cat_need','No special equipments needed','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee007c','cat_need','Vehicles that can clear muck','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee008d','cat_need','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee009b','cat_need','50','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee010b','cat_need','70','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee011b','cat_need','40','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee012b','cat_need','20','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee013b','cat_need','30','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee014b','cat_need','25','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee015b','cat_need','38','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee016b','cat_need','40','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee017b','cat_need','20','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee018b','cat_need','50','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee019c','cat_need','No, baby food is not required','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee020e','cat_need','d','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee021a','cat_need','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee022b','cat_need','30','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee023b','cat_need','20','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee024b','cat_need','50','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee025b','cat_need','30','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee026d','cat_need','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee027b','cat_need','50','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee028b','cat_need','20','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee029d','cat_need','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee030d','cat_need','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee031c','cat_need','No, medical aid is available','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee032d','cat_need','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee033d','cat_need','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee034d','cat_need','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee035d','cat_need','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee036d','cat_need','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee037d','cat_need','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee038c','cat_need','No, all major roads are functioning properly','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee039c','cat_need','No','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee040c','cat_need','Yes','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee041c','cat_need','Yes','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','nee042c','cat_need','Additional refugee camps might be needed','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('+919231683443','mar001d','cat_market','','1','2016-06-23 01:10:43',1),('+918420094984','edu007d','cat_education','A','1-debnibasflood2015-09-25','2016-06-23 13:41:51',1),('+919831535538','mar002e','cat_market','B','1','2016-06-22 13:25:30',1),('+919831535538','mar003e','cat_market','C','1','2016-06-22 13:25:51',1),('9163256065','foo001a','cat_food','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo002e','cat_food','d','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo003e','cat_food','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo004a','cat_food','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo005e','cat_food','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo006a','cat_food','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo007b','cat_food','25','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo008a','cat_food','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo009a','cat_food','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo010a','cat_food','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo011a','cat_food','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo012a','cat_food','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo013a','cat_food','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo014e','cat_food','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo015a','cat_food','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo016e','cat_food','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo017f','cat_food','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo018f','cat_food','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo019c','cat_food','Rice','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo021f','cat_food','e','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo022f','cat_food','d','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo023f','cat_food','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','foo024b','cat_food','20','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','inf001a','cat_infrastructure','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','inf002c','cat_infrastructure','All major roads are functioning as before','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','inf003f','cat_infrastructure','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','inf004e','cat_infrastructure','a','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','inf005f','cat_infrastructure','b','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','inf006e','cat_infrastructure','d','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('9163256065','inf007a','cat_infrastructure','c','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',1),('+919830720259','mar001d','cat_market','','1','2016-06-24 06:40:42',1),('+919831535538','mar001d','cat_market','A','1','2016-06-22 13:25:11',1),('+918420094984','edu006b','cat_education','1510','1-debnibasflood2015-09-25','2016-06-23 13:41:31',1),('+918420094984','edu005d','cat_education','A','1-debnibasflood2015-09-25','2016-06-23 13:41:03',1),('+918296106229','bui003b','cat_building','No','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',4),('+918420094984','edu004b','cat_education','A','1-debnibasflood2015-09-25','2016-06-23 13:40:42',1),('+918420094984','edu003a','cat_education','A','1-debnibasflood2015-09-25','2016-06-23 13:40:24',1),('+918296106229','bui002f','cat_building','No','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',4),('+919830342404','bui001f','cat_building','No','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',3),('+919903998511','bui001f','cat_building','No','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',3),('+918296106229','bui001f','cat_building','No','3-namkhanaflood2015-07-13','2016-05-13 11:11:11',4),('+919231683443','mar002e','cat_market','A','1','2016-06-23 01:11:05',1),('+919231683443','mar003e','cat_market','B','1','2016-06-23 01:11:26',1),('+919231683443','mar004a','cat_market','A','1','2016-06-23 01:11:43',1),('+919231683443','mar005e','cat_market','C','1','2016-06-23 01:12:58',1),('+919231683443','mar006d','cat_market','B','1','2016-06-23 01:13:30',1),('+919231683443','mar007a','cat_market','U','1','2016-06-23 01:13:49',1),('+919231683443','mar008e','cat_market','A','1','2016-06-23 01:14:33',1),('+919231683443','mar009a','cat_market','A','1','2016-06-23 01:15:11',1),('+919830342404','mar001d','cat_market','B','1','2016-06-24 06:40:59',1),('+919830720259','mar002e','cat_market','D','1','2016-06-24 06:41:23',1),('+919830342404','mar002e','cat_market','C','1','2016-06-24 06:41:42',1),('+919830342404','mar003e','cat_market','D','1','2016-06-24 06:42:58',1),('+919830342404','mar004a','cat_market','A','1','2016-06-24 06:43:37',1),('+919830342404','mar005e','cat_market','B','1','2016-06-24 06:44:31',1),('+919830342404','mar006d','cat_market','','1','2016-06-24 06:45:17',1),('+919830342404','mar007a','cat_market','C','1','2016-06-24 06:46:08',1),('+919830342404','mar008e','cat_market','C','1','2016-06-24 06:46:33',1),('+919830342404','mar009a','cat_market','A','1','2016-06-24 06:46:56',1),('+918420094984','tra001d','cat_training','A','shg','2016-06-28 05:14:29',0),('+918420094984','tra002d','cat_training','B','shg','2016-06-28 05:15:15',0),('+918420094984','tra004e','cat_training','D','shg','2016-06-28 05:15:49',0),('+918420094984','tra005a','cat_training','A','shg','2016-06-28 05:16:10',0),('+918420094984','tra008d','cat_training','B','shg','2016-06-28 05:16:53',0),('+918420094984','tra009d','cat_training','B','shg','2016-06-28 05:17:38',0),('+918420094984','tra010d','cat_training','B','shg','2016-06-28 05:18:02',0),('+918420094984','tra011a','cat_training','A','shg','2016-06-28 05:18:56',0),('+918420094984','tra012d','cat_training','B','shg','2016-06-28 05:20:38',0),('+918420094984','tra013d','cat_training','A','shg','2016-06-28 05:21:27',0),('+918420094984','tra014d','cat_training','B','shg','2016-06-28 05:21:57',0),('+918420094984','adv001d','cat_advisory','A','shg','2016-06-28 13:21:14',0),('+919831238511','adv001d','cat_advisory','B','shg','2016-06-28 13:21:30',0),('+919831238511','adv003e','cat_advisory','D','shg','2016-06-28 13:21:59',0),('+918420094984','adv003e','cat_advisory','A','shg','2016-06-28 13:22:16',0),('+919831238511','adv004a','cat_advisory','C','shg','2016-06-28 13:22:37',0),('+918420094984','adv004a','cat_advisory','B','shg','2016-06-28 13:23:54',0),('+919831238511','adv005a','cat_advisory','C','shg','2016-06-28 13:24:13',0),('+918420094984','adv008d','cat_advisory','B','shg','2016-06-28 13:24:33',0),('+919831238511','adv006e','cat_advisory','D','shg','2016-06-28 13:24:41',0),('+918420094984','adv009d','cat_advisory','B','shg','2016-06-28 13:24:56',0),('+919831238511','adv007a','cat_advisory','C','shg','2016-06-28 13:25:15',0),('+918420094984','adv010a','cat_advisory','B','shg','2016-06-28 13:25:32',0),('+919831238511','adv008d','cat_advisory','A','shg','2016-06-28 13:26:41',0),('+918420094984','adv011d','cat_advisory','B','shg','2016-06-28 13:27:07',0),('+918420094984','adv012a','cat_advisory','A','shg','2016-06-28 13:27:48',0),('+919831238511','adv009d','cat_advisory','B','shg','2016-06-28 13:27:59',0),('+919831238511','adv010a','cat_advisory','B','shg','2016-06-28 13:28:20',0),('+918420094984','adv013d','cat_advisory','A','shg','2016-06-28 13:28:29',0),('+919831238511','mar001d','cat_market','A','shg','2016-06-28 14:14:00',0),('+919831238511','mar002e','cat_market','D','shg','2016-06-28 14:14:21',0),('+919831238511','mar003e','cat_market','d','shg','2016-06-28 14:15:17',0),('+919831238511','mar004a','cat_market','C','shg','2016-06-28 14:16:08',0),('+919831238511','mar005e','cat_market','B','shg','2016-06-28 14:17:10',0),('+919831238511','mar007a','cat_market','B','shg','2016-06-28 14:19:16',0),('+919831238511','mar008e','cat_market','D','shg','2016-06-28 14:19:42',0),('+919831238511','mar009a','cat_market','C','shg','2016-06-28 14:20:45',0),('+919831238511','mar010a','cat_market','C','shg','2016-06-28 14:22:18',0),('+919831238511','mar011d','cat_market','B','shg','2016-06-28 14:23:28',0),('+919831238511','mar012a','cat_market','A','shg','2016-06-28 14:23:51',0),('+919831238511','mar013d','cat_market','A','shg','2016-06-28 14:24:15',0),('+919831238511','mar014a','cat_market','C','shg','2016-06-28 14:24:42',0),('+919831238511','mar015d','cat_market','B','shg','2016-06-28 14:25:05',0),('+919831238511','mar016a','cat_market','A','shg','2016-06-28 14:25:50',0),('+919831238511','mar017c','cat_market','Dhan 59','shg','2016-06-28 14:26:35',0),('+919831238511','mar018c','cat_market','456','shg','2016-06-28 14:27:06',0),('+919831238511','mar019d','cat_market','45','shg','2016-06-28 14:28:55',0),('+919830720259','mar001d','cat_market','A','shg','2016-06-29 02:44:57',0),('+919830720259','mar002e','cat_market','C','shg','2016-06-29 02:45:30',0),('+919830720259','mar003e','cat_market','A','shg','2016-06-29 02:46:26',0),('+919830720259','mar007a','cat_market','B','shg','2016-06-29 02:47:07',0),('+919830720259','mar008e','cat_market','A','shg','2016-06-29 02:47:45',0),('+919830720259','mar009a','cat_market','A','shg','2016-06-29 02:48:25',0),('+919830720259','mar012a','cat_market','A','shg','2016-06-29 02:49:02',0),('+919830720259','mar013d','cat_market','B','shg','2016-06-29 02:49:34',0),('+919830720259','mar014a','cat_market','B','shg','2016-06-29 02:50:13',0),('+919830720259','mar015d','cat_market','\nA','shg','2016-06-29 02:50:49',0),('+919830720259','mar016a','cat_market','Ba','shg','2016-06-29 02:51:56',0),('+919830720259','mar017c','cat_market','Machu 50 kg','shg','2016-06-29 02:53:11',0),('+919830720259','mar018c','cat_market','Rs.100/kg','shg','2016-06-29 02:54:44',0),('+919830720259','mar019d','cat_market','No','shg','2016-06-29 02:55:38',0),('+919830720259','edu001d','cat_educational','B','shg','2016-06-29 03:04:20',0),('+919830720259','edu002d','cat_educational','A','shg','2016-06-29 03:07:14',0),('+919830720259','edu003d','cat_educational','A','shg','2016-06-29 03:07:34',0),('+919830720259','edu004d','cat_educational','B','shg','2016-06-29 03:07:39',0),('+919830720259','edu005d','cat_educational','A','shg','2016-06-29 03:08:28',0),('+919830720259','edu006d','cat_educational','A','shg','2016-06-29 03:08:31',0),('+919830720259','edu007d','cat_educational','A','shg','2016-06-29 03:08:58',0),('+919830720259','edu008d','cat_educational','A','shg','2016-06-29 03:09:22',0),('+919830720259','edu009d','cat_educational','B','shg','2016-06-29 03:09:45',0),('+919830720259','edu010d','cat_educational','B','shg','2016-06-29 03:10:06',0),('+919830720259','edu011d','cat_educational','B','shg','2016-06-29 03:10:27',0),('+919830720259','edu012d','cat_educational','B','shg','2016-06-29 03:10:56',0),('+919903998511','edu001d','cat_educational','B','shg','2016-06-29 04:49:34',0),('+919831238511','edu001d','cat_educational','B','shg','2016-06-29 05:45:47',0),('+919903998511','edu002d','cat_educational','A','shg','2016-06-29 05:51:53',0),('+919903998511','edu003d','cat_educational','A','shg','2016-06-29 05:52:11',0),('+919903998511','edu004d','cat_educational','A','shg','2016-06-29 05:52:29',0),('+919903998511','edu005d','cat_educational','A','shg','2016-06-29 05:52:46',0),('+919903998511','edu006d','cat_educational','A','shg','2016-06-29 05:53:05',0),('+919903998511','edu007d','cat_educational','A','shg','2016-06-29 05:53:20',0),('+919903998511','edu008d','cat_educational','A','shg','2016-06-29 05:53:37',0),('+919903998511','edu009d','cat_educational','A','shg','2016-06-29 05:53:55',0),('+919903998511','edu010d','cat_educational','A','shg','2016-06-29 05:54:12',0),('+919903998511','edu011d','cat_educational','A','shg','2016-06-29 05:54:28',0),('+919903998511','edu012d','cat_educational','A','shg','2016-06-29 05:54:48',0),('+919830720259','tra001d','cat_training','A','shg','2016-06-29 06:55:11',0),('+919830720259','tra002d','cat_training','B','shg','2016-06-29 06:56:52',0),('+919830720259','tra004e','cat_training','D','shg','2016-06-29 06:57:54',0),('+919830720259','tra005a','cat_training','B','shg','2016-06-29 06:58:30',0),('+919830720259','tra008d','cat_training','B','shg','2016-06-29 06:59:16',0),('+919830720259','tra009d','cat_training','A','shg','2016-06-29 07:01:32',0),('+919830720259','tra010d','cat_training','A','shg','2016-06-29 07:01:58',0),('+919830720259','tra011a','cat_training','A','shg','2016-06-29 07:04:33',0),('+919830720259','tra012d','cat_training','A','shg','2016-06-29 07:05:24',0),('+919830720259','tra013d','cat_training','A','shg','2016-06-29 07:05:47',0),('+919830720259','tra014d','cat_training','A','shg','2016-06-29 07:06:14',0),('+919830720259','tra015d','cat_training','B','shg','2016-06-29 07:06:40',0),('+919073357285','tra001d','cat_training','A','shg','2016-06-30 00:12:10',0),('+919073357285','tra002d','cat_training','A','shg','2016-06-30 00:12:46',0),('+919073357285','tra003e','cat_training','B','shg','2016-06-30 00:13:54',0),('+919073357285','tra008d','cat_training','B','shg','2016-06-30 00:13:58',0),('+919073357285','tra009d','cat_training','D','shg','2016-06-30 00:14:09',0),('+919073357285','tra010d','cat_training','B','shg','2016-06-30 00:14:47',0),('+919073357285','tra011a','cat_training','A','shg','2016-06-30 00:15:09',0),('+919830720259','tra006e','cat_training','A','shg','2016-06-30 00:15:31',0),('+919073357285','tra012d','cat_training','A','shg','2016-06-30 00:15:34',0),('+919073357285','tra013d','cat_training','B','shg','2016-06-30 00:17:07',0),('+919073357285','tra014d','cat_training','A','shg','2016-06-30 00:17:42',0),('+919073357285','tra015d','cat_training','B','shg','2016-06-30 00:18:08',0),('+919903998511','tra001d','cat_training','A','shg','2016-06-30 01:00:52',0),('+919903998511','tra002d','cat_training','B','shg','2016-06-30 01:01:13',0),('+919903998511','tra004e','cat_training','C','shg','2016-06-30 02:57:34',0),('+919903998511','tra008d','cat_training','B','shg','2016-06-30 02:59:49',0),('+919903998511','tra009d','cat_training','A','shg','2016-06-30 03:03:44',0),('+919903998511','tra010d','cat_training','A','shg','2016-06-30 03:04:25',0),('+919830720259','tra007d','cat_training','D','shg','2016-06-30 03:04:53',0),('+919830720259','','','B','','2016-06-30 03:05:00',0),('+919903998511','tra011a','cat_training','C','shg','2016-06-30 03:05:01',0),('+919903998511','tra012d','cat_training','A','shg','2016-06-30 03:05:46',0),('+919903998511','tra013d','cat_training','B','shg','2016-06-30 04:09:16',0),('+919903998511','tra014d','cat_training','B','shg','2016-06-30 04:19:17',0),('+919903998511','tra015d','cat_training','B','shg','2016-06-30 04:33:42',0),('+919903998511','adv001d','cat_advisory','B','shg','2016-06-30 06:16:16',0),('+919903998511','adv003e','cat_advisory','A','shg','2016-06-30 06:16:24',0),('+917300163610','adv001d','cat_advisory','\nA\n','shg','2016-06-30 06:21:28',0),('+919830720259','adv001d','cat_advisory','A','shg','2016-06-30 06:21:46',0),('+919830720259','adv003e','cat_advisory','B','shg','2016-06-30 06:22:23',0),('+919903998511','adv004a','cat_advisory','B','shg','2016-06-30 06:22:52',0),('+919830720259','adv004a','cat_advisory','B','shg','2016-06-30 06:23:28',0),('+917584947798','adv001d','cat_advisory','A','shg','2016-06-30 06:23:29',0),('+917300163610','adv003e','cat_advisory','A','shg','2016-06-30 06:23:37',0),('+919830720259','adv008d','cat_advisory','A','shg','2016-06-30 06:24:04',0),('+917300163610','adv004a','cat_advisory','C','shg','2016-06-30 06:24:34',0),('+917300163610','adv005a','cat_advisory','B','shg','2016-06-30 06:25:43',0),('+917584947798','adv003e','cat_advisory','B','shg','2016-06-30 06:26:09',0),('+919830720259','adv009d','cat_advisory','B','shg','2016-06-30 06:26:11',0),('+919830720259','adv010a','cat_advisory','B','shg','2016-06-30 06:26:45',0),('+917300163610','adv008d','cat_advisory','A','shg','2016-06-30 06:27:01',0),('+919830720259','adv011d','cat_advisory','B','shg','2016-06-30 06:27:07',0),('+919830720259','adv012a','cat_advisory','B','shg','2016-06-30 06:27:25',0),('+919830720259','adv013d','cat_advisory',' c','shg','2016-06-30 06:27:48',0),('+917584947798','adv004a','cat_advisory','B','shg','2016-06-30 06:28:13',0),('+917300163610','adv009d','cat_advisory','B','shg','2016-06-30 06:28:50',0),('+917584947798','adv008d','cat_advisory','A','shg','2016-06-30 06:29:22',0),('+917300163610','adv010a','cat_advisory','B','shg','2016-06-30 06:30:07',0),('+917584947798','adv009d','cat_advisory','B','shg','2016-06-30 06:31:14',0),('+917300163610','adv011d','cat_advisory','B','shg','2016-06-30 06:31:23',0),('+917584947798','adv010a','cat_advisory','A','shg','2016-06-30 06:33:58',0),('+917300163610','adv012a','cat_advisory','Ami chai amar cheler engineering podar jonno keu paramorsho din','shg','2016-06-30 06:37:53',0),('+917584947798','adv011d','cat_advisory','A','shg','2016-06-30 06:38:20',0),('+917300163610','adv013d','cat_advisory','A','shg','2016-06-30 06:39:29',0),('+917584947798','adv012a','cat_advisory','B','shg','2016-06-30 06:41:29',0),('+917584947798','adv013d','cat_advisory','A','shg','2016-06-30 06:43:28',0),('+919903998511','mar001d','cat_market',' B','shg','2016-06-30 06:53:18',0),('+917300163610','mar001d','cat_market','A','shg','2016-06-30 06:54:02',0),('+919830720259','mar004a','cat_market','B','shg','2016-06-30 06:54:03',0),('+917300163610','mar002e','cat_market','C','shg','2016-06-30 06:54:39',0),('+917300163610','mar003e','cat_market','A','shg','2016-06-30 06:55:29',0),('+919903998511','mar003e','cat_market','D','shg','2016-06-30 06:55:37',0),('+917300163610','mar007a','cat_market','B','shg','2016-06-30 06:56:23',0),('+919903998511','mar004a','cat_market','A','shg','2016-06-30 06:56:52',0),('+917300163610','mar008e','cat_market','A','shg','2016-06-30 06:57:09',0),('+917300163610','mar009a','cat_market','A','shg','2016-06-30 06:58:16',0),('+919903998511','mar007a','cat_market','C','shg','2016-06-30 06:58:41',0),('+917300163610','mar012a','cat_market','C','shg','2016-06-30 06:59:19',0),('+919903998511','mar008e','cat_market','D','shg','2016-06-30 07:00:21',0),('+917300163610','mar013d','cat_market','B','shg','2016-06-30 07:00:52',0),('+917300163610','mar014a','cat_market','A','shg','2016-06-30 07:02:17',0),('+917300163610','mar015d','cat_market','A','shg','2016-06-30 07:03:08',0),('+917300163610','mar016a','cat_market','C','shg','2016-06-30 07:06:32',0),('+917300163610','mar017c','cat_market','A','shg','2016-06-30 07:07:50',0),('+917300163610','mar018c','cat_market','Achar 10lg','shg','2016-06-30 07:11:19',0),('+917300163610','mar019d','cat_market','Rs 30','shg','2016-06-30 07:13:43',0),('+917300163610','mar004a','cat_market','B','shg','2016-06-30 07:34:11',0),('+917300163610','mar010a','cat_market','B','shg','2016-06-30 07:37:14',0),('+917300163610','edu001d','cat_educational','B','shg','2016-06-30 08:09:55',0),('+917300163610','edu012d','cat_educational','A','shg','2016-06-30 08:14:55',0),('+917300163610','tra001d','cat_training','A','shg','2016-07-01 03:34:45',0),('+917300163610','tra002d','cat_training','B','shg','2016-07-01 03:36:59',0),('+917300163610','tra004e','cat_training','A','shg','2016-07-01 03:39:56',0),('+917300163610','tra008d','cat_training','X','shg','2016-07-01 03:41:06',0),('+917300163610','tra009d','cat_training','S','shg','2016-07-01 03:42:25',0),('+917300163610','tra010d','cat_training','B','shg','2016-07-01 03:43:21',0),('+917300163610','tra011a','cat_training','S','shg','2016-07-01 03:45:32',0),('+917300163610','tra012d','cat_training','D','shg','2016-07-01 03:47:53',0),('+917300163610','tra013d','cat_training','S','shg','2016-07-01 03:48:33',0),('+917300163610','tra014d','cat_training','B','shg','2016-07-01 03:49:23',0),('+917300163610','tra015d','cat_training','B','shg','2016-07-01 03:50:41',0),('+917300163610','tra003e','cat_training','Ac','shg','2016-07-01 06:13:07',0),('+919830720259','tra003e','cat_training','C','shg','2016-07-01 06:13:52',0),('+919831238511','','','A','','2016-07-11 22:24:03',1),('+919831238511','','','A','','2016-07-11 22:46:32',2),('+919831238511','tra001d','cat_training','A','shg','2016-07-11 23:16:39',6),('+919831238511','tra002d','cat_training','B','shg','2016-07-11 23:17:17',6),('+919831238511','tra004e','cat_training','C','shg','2016-07-11 23:17:49',6),('+919831238511','edu001d','cat_educational','A','shg','2016-07-11 23:31:05',1),('+919831238511','edu002d','cat_educational','A','shg','2016-07-11 23:31:25',1),('+919831238511','edu003d','cat_educational','B','shg','2016-07-11 23:32:40',1),('+919903998511','tra001d','cat_training','পঞ্চায়েত বা সঙ্ঘ পরিচালিত কোনো প্রশিক্ষণে আগ্রহী? A>হ্যাঁ B>না','shg','2016-07-12 04:18:32',2),('+919903998511','tra002d','cat_training','পঞ্চায়েত বা সঙ্ঘ পরিচালিত কোনো প্রশিক্ষণে আগ্রহী? A>হ্যাঁ B>না','shg','2016-07-12 04:18:35',2),('+919903998511','tra002d','cat_training','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:18:39',2),('+919903998511','tra002d','cat_training','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:18:42',2),('+919903998511','tra002d','cat_training','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:18:47',2),('+919903998511','tra002d','cat_training','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:18:54',2),('+919903998511','tra002d','cat_training','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:18:57',2),('+919903998511','tra002d','cat_training','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:19:03',2),('+919903998511','tra002d','cat_training','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:19:06',2),('+919903998511','tra002d','cat_training','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:19:11',2),('+919903998511','tra002d','cat_training','A','shg','2016-07-12 04:19:13',2),('+919903998511','tra003e','cat_training','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:19:16',2),('+919903998511','tra008d','cat_training','কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:19:18',2),('+919903998511','tra009d','cat_training','২. A>ধানচাষ B>পানচাষ C>সূর্যমুখীচাষ D>অন্যান্য','shg','2016-07-12 04:19:21',2),('+919903998511','tra010d','cat_training','আপনারা কি ধরনের প্রশিক্ষণ এ অংশগ্রহণ করেছেন? A>কৃষিকাজ B>অন্যান্য','shg','2016-07-12 04:19:24',2),('+919903998511','tra011a','cat_training','বর্তমানে গ্রামে নিয়মিত প্রশিক্ষণ কর্মশালা হয় ? A>হ্যাঁ B>না','shg','2016-07-12 04:19:27',2),('+919903998511','tra012d','cat_training','এম.আই.পি তৈরি করার আগের অভিজ্ঞতা আছে ? A>হ্যাঁ B>না','shg','2016-07-12 04:19:30',2),('+919903998511','tra013d','cat_training','A','shg','2016-07-12 04:19:32',2),('+919903998511','tra014d','cat_training','দলের কতজন এর সাথে যুক্ত হতে চায়? A>প্রায় সবাই B>৫ এর কম C>৫ এর বেশী','shg','2016-07-12 04:19:37',2),('+919903998511','tra015d','cat_training','পণ্য তৈরির প্রশিক্ষন কোথা থেকে পান? A>ব্লক থেকে B>এন.জি.ও. থেকে','shg','2016-07-12 04:19:40',2),('+919830342404','tra001d','cat_training','A','shg','2016-07-18 05:47:24',1),('+919830342404','tra002d','cat_training','A','shg','2016-07-18 05:47:54',1),('3','rap046a','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap045a','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap044b','cat_rapid','3','2-rapid','2016-09-11 15:11:06',1),('3','rap042f','cat_rapid','a','2-rapid','2016-09-11 15:11:06',1),('3','rap043a','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap041f','cat_rapid','c','2-rapid','2016-09-11 15:11:06',1),('3','rap039a','cat_rapid','a','2-rapid','2016-09-11 15:11:06',1),('3','rap040a','cat_rapid','a','2-rapid','2016-09-11 15:11:06',1),('3','rap038a','cat_rapid','a','2-rapid','2016-09-11 15:11:06',1),('3','rap036d','cat_rapid','a','2-rapid','2016-09-11 15:11:06',1),('3','rap037f','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap035f','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap034f','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap032a','cat_rapid','','2-rapid','2016-09-11 15:11:06',1),('3','rap033d','cat_rapid','a','2-rapid','2016-09-11 15:11:06',1),('3','rap030e','cat_rapid','a','2-rapid','2016-09-11 15:11:06',1),('3','rap031f','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap029a','cat_rapid','a','2-rapid','2016-09-11 15:11:06',1),('3','rap027f','cat_rapid','c','2-rapid','2016-09-11 15:11:06',1),('3','rap028f','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap026f','cat_rapid','c','2-rapid','2016-09-11 15:11:06',1),('3','rap024c','cat_rapid','','2-rapid','2016-09-11 15:11:06',1),('3','rap025a','cat_rapid','a','2-rapid','2016-09-11 15:11:06',1),('3','rap023d','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap021d','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap022d','cat_rapid','b','2-rapid','2016-09-11 15:11:06',1),('3','rap020b','cat_rapid','20','2-rapid','2016-09-11 15:11:06',1),('3','rap019b','cat_rapid','16','2-rapid','2016-09-11 15:11:06',1),('3','rap018b','cat_rapid','10','2-rapid','2016-09-11 15:11:06',1),('3','rap017b','cat_rapid','4','2-rapid','2016-09-11 15:11:06',1),('3','rap016b','cat_rapid','100','2-rapid','2016-09-11 15:11:06',1),('3','rap015b','cat_rapid','60','2-rapid','2016-09-11 15:11:06',1),('3','rap014b','cat_rapid','40','2-rapid','2016-09-11 15:11:06',1),('3','rap013b','cat_rapid','50','2-rapid','2016-09-11 15:11:06',1),('3','rap012b','cat_rapid','100','2-rapid','2016-09-11 15:11:06',1),('3','rap011b','cat_rapid','50','2-rapid','2016-09-11 15:11:06',1),('3','rap010b','cat_rapid','20','2-rapid','2016-09-11 15:11:06',1),('3','rap009b','cat_rapid','15','2-rapid','2016-09-11 15:11:06',1),('3','rap008b','cat_rapid','50','2-rapid','2016-09-11 15:11:06',1),('3','rap007b','cat_rapid','250','2-rapid','2016-09-11 15:11:06',1),('3','rap006b','cat_rapid','50','2-rapid','2016-09-11 15:11:06',1),('3','rap005b','cat_rapid','200','2-rapid','2016-09-11 15:11:06',1),('3','rap004b','cat_rapid','300','2-rapid','2016-09-11 15:11:06',1),('3','rap003b','cat_rapid','500','2-rapid','2016-09-11 15:11:06',1),('3','rap002b','cat_rapid','4','2-rapid','2016-09-11 15:11:06',1),('3','rap001b','cat_rapid','15','2-rapid','2016-09-11 15:11:06',1),('+919051130586','rap001b','cat_rapid','20','3-rapid','2016-09-11 11:07:39',2),('+919051130586','rap001b','cat_rapid','30','3-rapid','2016-09-11 11:14:26',3),('+918442861305','rap001b','cat_rapid','20','3-rapid','2016-09-11 11:14:35',1),('+919051130586','rap002b','cat_rapid','14','3-rapid','2016-09-11 11:15:03',3),('+918442861305','rap002b','cat_rapid','10','3-rapid','2016-09-11 11:15:08',1),('+918442861305','rap003b','cat_rapid','10000','3-rapid','2016-09-11 11:15:32',1),('+919051130586','rap003b','cat_rapid','10000','3-rapid','2016-09-11 11:15:39',3),('+918442861305','rap004b','cat_rapid','5500','3-rapid','2016-09-11 11:15:59',1),('+919051130586','rap004b','cat_rapid','6500','3-rapid','2016-09-11 11:16:16',3),('+918442861305','rap005b','cat_rapid','4500','3-rapid','2016-09-11 11:16:19',1),('+918442861305','rap006b','cat_rapid','30','3-rapid','2016-09-11 11:16:53',1),('+918442861305','rap007b','cat_rapid','3000','3-rapid','2016-09-11 11:17:13',1),('+918442861305','rap008b','cat_rapid','2000','3-rapid','2016-09-11 11:17:57',1),('+918442861305','rap009b','cat_rapid','1500','3-rapid','2016-09-11 11:18:18',1),('+918442861305','rap010b','cat_rapid','500','3-rapid','2016-09-11 11:18:44',1),('+918442861305','rap011b','cat_rapid','1000','3-rapid','2016-09-11 11:19:11',1),('+918442861305','rap012b','cat_rapid','1000','3-rapid','2016-09-11 11:19:37',1),('+918442861305','rap013b','cat_rapid','3000','3-rapid','2016-09-11 11:20:03',1),('+919051130586','rap005b','cat_rapid','3000','3-rapid','2016-09-11 11:20:06',3),('+918442861305','rap014b','cat_rapid','1000','3-rapid','2016-09-11 11:20:29',1),('+919051130586','rap006b','cat_rapid','3000','3-rapid','2016-09-11 11:20:40',3),('+918442861305','rap015b','cat_rapid','1200','3-rapid','2016-09-11 11:20:57',1),('+918442861305','rap016b','cat_rapid','1800','3-rapid','2016-09-11 11:21:25',1),('+918442861305','rap017b','cat_rapid','800','3-rapid','2016-09-11 11:22:01',1),('+918442861305','rap018b','cat_rapid','400','3-rapid','2016-09-11 11:22:44',1),('+919051130586','rap007b','cat_rapid','4000','3-rapid','2016-09-11 11:23:00',3),('+918442861305','rap019b','cat_rapid','300','3-rapid','2016-09-11 11:23:05',1),('+918442861305','rap020b','cat_rapid','100','3-rapid','2016-09-11 11:23:30',1),('+919051130586','rap008b','cat_rapid','500','3-rapid','2016-09-11 11:23:49',3),('+918442861305','rap021d','cat_rapid','A','3-rapid','2016-09-11 11:24:32',1),('+919051130586','rap009b','cat_rapid','1500','3-rapid','2016-09-11 11:24:46',3),('+919051130586','rap010b','cat_rapid','200','3-rapid','2016-09-11 11:25:29',3),('+919051130586','rap011b','cat_rapid','700','3-rapid','2016-09-11 11:26:09',3),('+919051130586','rap012b','cat_rapid','2500','3-rapid','2016-09-11 11:26:38',3),('+919051130586','rap013b','cat_rapid','1500','3-rapid','2016-09-11 11:27:05',3),('+919051130586','rap014b','cat_rapid','200','3-rapid','2016-09-11 11:27:38',3),('+919051130586','rap015b','cat_rapid','1000','3-rapid','2016-09-11 11:28:15',3),('+919051130586','rap016b','cat_rapid','2000','3-rapid','2016-09-11 11:28:50',3),('+919051130586','rap017b','cat_rapid','400','3-rapid','2016-09-11 11:30:10',3),('+918442861305','rap022d','cat_rapid','B','3-rapid','2016-09-11 11:30:25',1),('+919051130586','rap018b','cat_rapid','200','3-rapid','2016-09-11 11:31:01',3),('+918442861305','rap023d','cat_rapid','B','3-rapid','2016-09-11 11:31:10',1),('+919051130586','rap019b','cat_rapid','400','3-rapid','2016-09-11 11:32:04',3),('+919051130586','rap020b','cat_rapid','3000','3-rapid','2016-09-11 11:33:20',3),('+918442861305','rap024c','cat_rapid','Kolkata\nAsansol\nMalda\nMednipur\nHaldia\nDurgapur','3-rapid','2016-09-11 11:34:10',1),('+918442861305','rap025a','cat_rapid','C','3-rapid','2016-09-11 11:34:36',1),('+919051130586','rap021d','cat_rapid','B','3-rapid','2016-09-11 11:34:48',3),('+918442861305','rap031f','cat_rapid','E','3-rapid','2016-09-11 11:35:04',1),('+918442861305','rap032a','cat_rapid','B','3-rapid','2016-09-11 11:35:34',1),('+919051130586','rap022d','cat_rapid','B','3-rapid','2016-09-11 11:35:41',3),('+918442861305','rap037f','cat_rapid','C','3-rapid','2016-09-11 11:36:14',1),('+919051130586','rap023d','cat_rapid','A','3-rapid','2016-09-11 11:36:36',3),('+918442861305','rap038a','cat_rapid','A','3-rapid','2016-09-11 11:37:10',1),('+918442861305','rap039a','cat_rapid','C','3-rapid','2016-09-11 11:37:40',1),('+919051130586','rap024c','cat_rapid','A B C D E F','3-rapid','2016-09-11 11:38:04',3),('+918442861305','rap040a','cat_rapid','B','3-rapid','2016-09-11 11:38:08',1),('+918442861305','rap046a','cat_rapid','C','3-rapid','2016-09-11 11:38:41',1),('+919051130586','rap025a','cat_rapid','A','3-rapid','2016-09-11 11:38:58',3),('+919051130586','rap026f','cat_rapid','A','3-rapid','2016-09-11 11:40:37',3),('+919051130586','rap027f','cat_rapid','A','3-rapid','2016-09-11 11:41:09',3),('+919051130586','rap028f','cat_rapid','A','3-rapid','2016-09-11 11:41:37',3),('+919051130586','rap029a','cat_rapid','A','3-rapid','2016-09-11 11:42:32',3),('+919051130586','rap030e','cat_rapid','A','3-rapid','2016-09-11 11:43:11',3),('+919051130586','rap031f','cat_rapid','A','3-rapid','2016-09-11 11:45:36',3),('+919051130586','rap032a','cat_rapid','A','3-rapid','2016-09-11 11:46:00',3),('+919051130586','rap033d','cat_rapid','A','3-rapid','2016-09-11 11:46:48',3),('+919051130586','rap034f','cat_rapid','A','3-rapid','2016-09-11 11:47:20',3),('+919051130586','rap035f','cat_rapid','A','3-rapid','2016-09-11 11:48:11',3),('+919051130586','rap036d','cat_rapid','A','3-rapid','2016-09-11 11:49:22',3),('+919748233988','rap001b','cat_rapid','10000','6-rapid','2016-09-12 05:01:07',1),('+919748233988','rap002b','cat_rapid','10000','6-rapid','2016-09-12 05:01:39',1);
/*!40000 ALTER TABLE `response` ENABLE KEYS */;

--
-- Table structure for table `service_offered`
--

DROP TABLE IF EXISTS `service_offered`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_offered` (
  `Offer_id` int(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `Offered_By` varchar(20) DEFAULT NULL,
  `Offering_details` varchar(20) DEFAULT NULL,
  `Contact_No` int(11) DEFAULT NULL,
  `Affiliation` text,
  `Address` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Offer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_offered`
--

/*!40000 ALTER TABLE `service_offered` DISABLE KEYS */;
/*!40000 ALTER TABLE `service_offered` ENABLE KEYS */;

--
-- Table structure for table `service_request`
--

DROP TABLE IF EXISTS `service_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_request` (
  `req_id` int(50) NOT NULL AUTO_INCREMENT,
  `requisition_date` datetime DEFAULT NULL,
  `requested_by` varchar(255) DEFAULT NULL,
  `req_details` text,
  `contact_No` varchar(13) DEFAULT NULL,
  `affiliation` text,
  `agency_id` int(10) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `block` varchar(255) DEFAULT NULL,
  `municipalaty` varchar(255) DEFAULT NULL,
  `village` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_request`
--

/*!40000 ALTER TABLE `service_request` DISABLE KEYS */;
INSERT INTO `service_request` VALUES (16,'2016-09-09 06:38:17','Sukanti Roy','Rescue','4589632310',NULL,NULL,'789569','1','1','1','2','1'),(17,'2016-09-09 06:40:01','Tanmoy Roy','We need evacuation service for elderly people','9836913399',NULL,NULL,'895623','1','1','1','2','1'),(18,'2016-09-12 08:54:49','Kolyan Mondol','Give us food.......','9638745210',NULL,NULL,'741258','1','1','1','1','2'),(19,'2016-09-14 08:26:45','Ankita Das','Evaquation','9874563210','',NULL,'859632','1','1','1','1','2');
/*!40000 ALTER TABLE `service_request` ENABLE KEYS */;

--
-- Table structure for table `shelter_inventory`
--

DROP TABLE IF EXISTS `shelter_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shelter_inventory` (
  `Shelter_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL,
  `item_description` varchar(20) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `unit` text,
  PRIMARY KEY (`Shelter_id`),
  UNIQUE KEY `Shelter_id` (`Shelter_id`),
  UNIQUE KEY `item_id` (`item_id`),
  UNIQUE KEY `Shelter_id_2` (`Shelter_id`,`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shelter_inventory`
--

/*!40000 ALTER TABLE `shelter_inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `shelter_inventory` ENABLE KEYS */;

--
-- Table structure for table `shelter_master`
--

DROP TABLE IF EXISTS `shelter_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shelter_master` (
  `Shelter_id` int(50) NOT NULL,
  `Location` varchar(50) DEFAULT NULL,
  `Capacity` int(10) DEFAULT NULL,
  `Occupancy` int(10) DEFAULT NULL,
  `Male_cnt` int(10) DEFAULT NULL,
  `Female_cnt` int(10) DEFAULT NULL,
  `children_cnt` int(10) DEFAULT NULL,
  `pregnant_women` int(10) DEFAULT NULL,
  `elderly_persons` int(10) DEFAULT NULL,
  `managed_by` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Shelter_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shelter_master`
--

/*!40000 ALTER TABLE `shelter_master` DISABLE KEYS */;
/*!40000 ALTER TABLE `shelter_master` ENABLE KEYS */;

--
-- Table structure for table `shg_answers`
--

DROP TABLE IF EXISTS `shg_answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shg_answers` (
  `phone` varchar(10) NOT NULL,
  `village` text NOT NULL,
  `set_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `response` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `phone` (`phone`,`question_id`,`time`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shg_answers`
--

/*!40000 ALTER TABLE `shg_answers` DISABLE KEYS */;
INSERT INTO `shg_answers` VALUES ('9836913399','দক্ষিণ চন্দনপিরি',2,120,'১. আপনার কোন সন্তান আছে?','হ্যাঁ','2016-06-18 07:36:46'),('9836913399','দক্ষিণ চন্দনপিরি',2,121,'২. তাদের কি স্কুলে ভর্তি করা হয়েছে? (উত্তর না হলে ৬ নং প্রশ্নে যান)','হ্যাঁ','2016-06-18 07:36:47'),('9836913399','দক্ষিণ চন্দনপিরি',2,122,'৩. আপনার সন্তান কি কোনো প্রাইভেট টিউশন পড়তে যায়?','হ্যাঁ','2016-06-18 07:36:48'),('9836913399','দক্ষিণ চন্দনপিরি',2,123,'৪. সন্তানের টিউশন পড়ার জন্য মাসে আপনার কত টাকা লাগে?','৩০০ থেকে ৫০০ টাকা','2016-06-18 07:36:48'),('9836913399','দক্ষিণ চন্দনপিরি',2,124,'৫. প্রাইভেট টিউশনে যাবার জন্য স্কুল এর পরীক্ষায় রেজাল্ট কি ভালো হয়েছে?','না','2016-06-18 07:36:48'),('9836913399','দক্ষিণ চন্দনপিরি',2,125,'৬. আপনি কি জানেন যে আপনার সন্তানের অঙ্ক, ইংরাজি এবং বিজ্ঞানের প্রতি দক্ষতা ওদেরকে পরীক্ষায় ভাল নম্বর পেতে এবং ভাল স্কুলে ভর্তিতে সাহায্য করবে যা ওদের ভবিষ্যৎ জীবন কে উজ্জল করবে ।','পরে জানাবো','2016-06-18 07:36:49'),('9836913399','দক্ষিণ চন্দনপিরি',2,126,'৭. যদি আপনার/আপনাদের  গ্রাম বা পার্শ্ববর্তী গ্রামে কলকাতার নামী স্কুলের শিক্ষক দের দ্বারা পরিচালিত ক্লাস এ কম্পিউটার এর সাহায্যে ইন্টারনেট এর মাধ্যমে স্কুল এর পড়াশুনা করানো হয়, তাহলে কি আপনি আপনার সন্তান কে সেখানে পাঠাবেন?','হ্যাঁ','2016-06-18 07:36:49'),('9836913399','দক্ষিণ চন্দনপিরি',2,135,'১. আপনি কি কোনো পরিষেবা সংক্রান্ত সহায়তা চান?','না','2016-06-18 07:36:50'),('9836913399','দক্ষিণ চন্দনপিরি',2,136,'২. আপনি/আপনাদের কি ধরনের পরিষেবা সংক্রান্ত সহায়তা প্রয়োজন?','চিকিৎসা সংক্রান্ত সহায়তা,শিক্ষা সংক্রান্ত সহায়তা,','2016-06-18 07:36:50'),('9836913399','দক্ষিণ চন্দনপিরি',2,137,'৩. আপনি/আপনারা কি ধরনের চিকিৎসা সংক্রান্ত সহায়তা চান?','গর্ভবতী মায়েদের সমস্যা সংক্রান্ত সহায়তা,থ্যালাসেমিয়া সংক্রান্ত সহায়তা,','2016-06-18 07:36:51'),('9836913399','দক্ষিণ চন্দনপিরি',2,138,'৪. আপনি/আপনারা কি ধরনের শিক্ষা সংক্রান্ত সহায়তা চান?','চাকুরী ভিত্তিক কোর্স সংক্রান্ত খবর','2016-06-18 07:36:54'),('9836913399','দক্ষিণ চন্দনপিরি',2,139,'৫.  আপনি/আপনারা কি ধরনের আইনি সহায়তা চান?','মারধর করা','2016-06-18 07:36:55'),('9836913399','দক্ষিণ চন্দনপিরি',2,140,'৬. আপনি/আপনারা চাকুরী ভিত্তিক কোর্স সংক্রান্ত সহায়তা চান?','','2016-06-18 07:36:55'),('9836913399','দক্ষিণ চন্দনপিরি',2,141,'৭. আপনি/আপনারা উচ্চশিক্ষার খোঁজখবর সংক্রান্ত সহায়তা চান?','মাধ্যমিকের পর ক্যারিয়ার অপশন সংক্রান্ত খবর,','2016-06-18 07:36:55'),('9830342404','দক্ষিণ চন্দনপিরি',2,120,'১. আপনার কোন সন্তান আছে?','হ্যাঁ','2016-06-19 04:06:49'),('9830342404','দক্ষিণ চন্দনপিরি',2,121,'২. তাদের কি স্কুলে ভর্তি করা হয়েছে? (উত্তর না হলে ৬ নং প্রশ্নে যান)','হ্যাঁ','2016-06-19 04:06:49'),('9830342404','দক্ষিণ চন্দনপিরি',2,122,'৩. আপনার সন্তান কি কোনো প্রাইভেট টিউশন পড়তে যায়?','না','2016-06-19 04:06:49'),('9830342404','দক্ষিণ চন্দনপিরি',2,123,'৪. সন্তানের টিউশন পড়ার জন্য মাসে আপনার কত টাকা লাগে?','১০০ টাকার কম','2016-06-19 04:06:50'),('9830342404','দক্ষিণ চন্দনপিরি',2,124,'৫. প্রাইভেট টিউশনে যাবার জন্য স্কুল এর পরীক্ষায় রেজাল্ট কি ভালো হয়েছে?','জানি না','2016-06-19 04:06:50'),('9830342404','দক্ষিণ চন্দনপিরি',2,125,'৬. আপনি কি জানেন যে আপনার সন্তানের অঙ্ক, ইংরাজি এবং বিজ্ঞানের প্রতি দক্ষতা ওদেরকে পরীক্ষায় ভাল নম্বর পেতে এবং ভাল স্কুলে ভর্তিতে সাহায্য করবে যা ওদের ভবিষ্যৎ জীবন কে উজ্জল করবে ।','হ্যাঁ','2016-06-19 04:06:50'),('9830342404','দক্ষিণ চন্দনপিরি',2,126,'৭. যদি আপনার/আপনাদের  গ্রাম বা পার্শ্ববর্তী গ্রামে কলকাতার নামী স্কুলের শিক্ষক দের দ্বারা পরিচালিত ক্লাস এ কম্পিউটার এর সাহায্যে ইন্টারনেট এর মাধ্যমে স্কুল এর পড়াশুনা করানো হয়, তাহলে কি আপনি আপনার সন্তান কে সেখানে পাঠাবেন?','হ্যাঁ','2016-06-19 04:06:51'),('9830342404','দক্ষিণ চন্দনপিরি',2,127,'১. বর্তমানে আপনারা কোন ধরনের জীবিকার সহিত যুক্ত?','পশুপালন (ছাগল পালন, মৌমাছি পালন, পোল্ট্রি)','2016-06-19 04:06:51'),('9830342404','দক্ষিণ চন্দনপিরি',2,128,'২. আপনি বা আপনার দলের সদস্যদের উৎপাদন করা পণ্য কোথায় বিক্রি করেন?','গ্রামের বাজারে','2016-06-19 04:06:51'),('9830342404','দক্ষিণ চন্দনপিরি',2,129,'৩. আপনি বা আপনার দলের সদস্যদের উৎপাদন করা পণ্য কার কাছে বিক্রি করেন?','সমবায় এর কাছে','2016-06-19 04:06:51'),('9830342404','দক্ষিণ চন্দনপিরি',2,130,'৪. আপনি কি মনে করেন যে জীবিকা পরিকল্পনা সংক্রান্ত সাহায্য পেলে আপনি ব্যবসা শুরু করতে পারবেন?','হ্যাঁ','2016-06-19 04:06:52'),('9830342404','দক্ষিণ চন্দনপিরি',2,131,'৫. আপনারা আপনাদের উৎপাদিত পণ্য বিক্রি করার জন্য মূলত কি সমস্যার মুখোমুখি হন?','উৎপাদিত পন্যের বাজারে চাহিদা কম','2016-06-19 04:06:52'),('9830342404','দক্ষিণ চন্দনপিরি',2,132,'৬. আপনারা আপনাদের উৎপাদিত পণ্য বিক্রি করার জন্য লাভের পরিমান কত থাকে?','লাভের পরিমান নগণ্য','2016-06-19 04:06:52'),('9830342404','দক্ষিণ চন্দনপিরি',2,133,' ৭. আপনার কি মনে হয় যে আপনারা যদি আপনাদের পণ্যের সঠিক বাজার দর জানতে পারেন, তাহলে আপনাদের লাভের পরিমান বৃদ্ধি পাবে?','হ্যাঁ','2016-06-19 04:06:53'),('9830342404','দক্ষিণ চন্দনপিরি',2,134,'৮. আপনাদের উৎপাদিত পণ্যের বাজারকরণ/ কেনাবেচা সংক্রান্ত সমস্যা সমাধানের জন্য যদি সঙ্ঘ অথবা কোন এন.জি.ও.  পক্ষ থেকে উদ্যোগ নেওয়া হয় তাহলে কি আপনারা তাতে অংশগ্রহণ করবেন?','পরে জানাবো','2016-06-19 04:06:53');
/*!40000 ALTER TABLE `shg_answers` ENABLE KEYS */;

--
-- Table structure for table `shg_questions`
--

DROP TABLE IF EXISTS `shg_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shg_questions` (
  `category_id` int(11) NOT NULL,
  `ques_id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `type` int(11) NOT NULL DEFAULT '2',
  `category` mediumtext NOT NULL,
  PRIMARY KEY (`ques_id`),
  UNIQUE KEY `set_id` (`category_id`,`ques_id`)
) ENGINE=MyISAM AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shg_questions`
--

/*!40000 ALTER TABLE `shg_questions` DISABLE KEYS */;
INSERT INTO `shg_questions` VALUES (1,111,'১. আপনি কি আপনার বর্তমান রোজগার অথবা উপার্জন বৃদ্ধির জন্য গ্রাম পঞ্চায়েত বা সঙ্ঘ পরিচালিত কোনো প্রশিক্ষণে আগ্রহী?;হ্যাঁ;না;\r\n',2,'প্রশিক্ষণ'),(1,112,'২ . কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী?;পশুপালন;মীনচাষ;মুড়ি তৈরী করা;আচার বানানো;অন্যান্য;\r\n',2,'প্রশিক্ষণ'),(1,113,'৩ . আপনাদের দলের উৎপাদিত পন্যের জন্য কাচামাল বা রসদ কথা থেকে সংগ্রহ করেন?;স্থানীয় বাজার;হাট;নামখানা বাজার;কাকদ্বীপ/কলকাতার বাজার;অন্যান্য;\r\n',2,'প্রশিক্ষণ'),(1,114,'৪ . বেচা কেনার কাজ সুষ্ট ভাবে করার জন্য যোগাযোগকারী রাস্তা ঘাটের অবস্থা কেমন?;ভালো;মোটামুটি;খারাপ/কাচা রাস্তা;অন্যান্য;\r\n',2,'প্রশিক্ষণ'),(1,115,'৫ . আপনার দলের সদস্যদের ব্যবসা বা পণ্য উৎপাদন করার জন্য কতটা আর্থিক সহায়তা প্রয়োজন?;৫,০০০ এর কম;৫,০০০-১০,০০০;১০,০০০-২০,০০০;২০,০০০-৩০,০০০;৩০,০০০ এর বেশী\r\n',2,'প্রশিক্ষণ'),(1,116,'৬ . আপনার দলের সদস্যদের ব্যবসা বা পণ্য উৎপাদন করার জন্য আর্থিক সহায়তা কোথা থেকে আসে?;ব্যাঙ্ক;স্বনির্ভর গোষ্ঠী;সংঘ;নিজস্ব তহবিল;\r\n',2,'প্রশিক্ষণ'),(1,117,'৭ . আপনি বা আপনার দলের সদস্যদের উৎপাদন করা পণ্য কোথায় বিক্রি করেন?;গ্রামের বাজারে/স্থানীয় দোকানে;শহরের বাজারে;গ্রামের হাটে;সমবায়ের কাছে;\r\n',2,'প্রশিক্ষণ'),(1,118,'৮. উৎপাদিত পন্যের গুণমান বৃদ্ধির জন্য অথবা ব্যবসা শুরু করার জন্য উপযুক্ত প্রশিক্ষন কোথা থেকে পান?;স্থানীয় প্রশিক্ষন কেন্দ্র;পঞ্চায়েত আয়োজিত কর্মশালা;এন.জি.ও. আয়োজিত প্রশিক্ষন কর্মসূচি;অন্যান্য;জানি না;\r\n',2,'প্রশিক্ষণ'),(1,119,'৯. আপনার দলের কতজন সদস্য/ সদস্যা এই ধরনের প্রশিক্ষনের সাথে যুক্ত হতে চায়?;প্রায় সবাই;৫ জন এর কম;৫-১০ জন;১০-১৫ জন;কেউ না;\r\n',2,'প্রশিক্ষণ'),(2,120,'১. আপনার কোন সন্তান আছে?;হ্যাঁ;না;\r\n',2,'শিক্ষাগত প্রশিক্ষণ'),(2,121,'২. তাদের কি স্কুলে ভর্তি করা হয়েছে?;হ্যাঁ;না;',2,'শিক্ষাগত প্রশিক্ষণ'),(2,122,'৩. আপনার সন্তান কি কোনো প্রাইভেট টিউশন পড়তে যায়?;হ্যাঁ;না;\r\n',2,'শিক্ষাগত প্রশিক্ষণ'),(2,123,'৪. সন্তানের টিউশন পড়ার জন্য মাসে আপনার কত টাকা লাগে?;১০০র কম;১০০-৩০০;৩০০-৫০০;৫০০র বেশী; \r\n',2,'শিক্ষাগত প্রশিক্ষণ'),(2,124,'৫. প্রাইভেট টিউশনে যাবার জন্য স্কুল এর পরীক্ষায় রেজাল্ট কি ভালো হয়েছে?;হ্যাঁ;না;জানি না; \n',2,'শিক্ষাগত প্রশিক্ষণ'),(2,125,'৬. আপনি কি জানেন যে আপনার সন্তানের অঙ্ক, ইংরাজি এবং বিজ্ঞানের প্রতি দক্ষতা ওদেরকে পরীক্ষায় ভাল নম্বর পেতে সাহায্য করবে?;হ্যাঁ;না;পরে জানাবো;\r\n',2,'শিক্ষাগত প্রশিক্ষণ'),(2,126,'৭. আপনাদের  গ্রামে কলকাতার নামী স্কুলের শিক্ষকদ্বারা পরিচালিত ক্লাস এ কম্পিউটার ও ইন্টারনেট এর মাধ্যমে পড়াশুনা করানো হয়,আপনি আপনার সন্তানকে পাঠাবেন?;হ্যাঁ;না;পরে জানাবো; \r\n',2,'শিক্ষাগত প্রশিক্ষণ'),(3,127,'১. বর্তমানে আপনারা কোন ধরনের জীবিকার সহিত যুক্ত?;পশুপালন;মীনচাষ;মুড়ি তৈরী করা;আচার বানানো;অন্যান্য;\r\n',2,'বাজার লিঙ্কেজ'),(3,128,'২. আপনি বা আপনার দলের সদস্যদের উৎপাদন করা পণ্য কোথায় বিক্রি করেন?;গ্রামের বাজারে;স্থানীয় দোকানে;শহরের বাজারে;গ্রামের হাটে;সমবায়ের কাছে;\r\n',2,'বাজার লিঙ্কেজ'),(3,129,'৩. আপনি বা আপনার দলের সদস্যদের উৎপাদন করা পণ্য কার কাছে বিক্রি করেন?;পাইকারী ক্রেতা;খুচরা ক্রেতা;খরিদ্দার এর কাছে;সমবায় এর কাছে;সরকার এর কাছে;\r\n',2,'বাজার লিঙ্কেজ'),(3,130,'৪. আপনি কি মনে করেন যে জীবিকা পরিকল্পনা সংক্রান্ত সাহায্য পেলে আপনি ব্যবসা শুরু করতে পারবেন?;হ্যাঁ;না;হতে পারে;\r\n',2,'বাজার লিঙ্কেজ'),(3,131,'৫. আপনারা আপনাদের উৎপাদিত পণ্য বিক্রি করার জন্য মূলত কি সমস্যার মুখোমুখি হন?;পন্যের বাজার দর কম;পন্যের চাহিদা কম;স্থানীয় ব্যবসায়ীদের একছত্র ব্যাবসা;পরিবহন সমস্যা;জানি না\r\n',2,'বাজার লিঙ্কেজ'),(3,132,'৬. আপনারা আপনাদের উৎপাদিত পণ্য বিক্রি করার জন্য লাভের পরিমান কত থাকে?;আশানুরূপ;নগণ্য;লাভ হয় না;জানি না\r\n',2,'বাজার লিঙ্কেজ'),(3,133,'৭. আপনারা যদি আপনাদের পণ্যের সঠিক বাজার দর জানতে পারেন, তাহলে কি লাভের পরিমান বৃদ্ধি পাবে?;হ্যাঁ;না;হতে পারে;জানি না;\r\n',2,'বাজার লিঙ্কেজ'),(3,134,'৮. আপনাদের উৎপাদিত পণ্যের কেনাবেচা সংক্রান্ত সমস্যা সমাধানের জন্য যদি সঙ্ঘ অথবা কোন এন.জি.ও. পক্ষ থেকে উদ্যোগ নেওয়া হয় তাহলে কি আপনারা তাতে অংশগ্রহণ করবেন?;হ্যাঁ;না;পরে জানাবো;\r\n',2,'বাজার লিঙ্কেজ'),(4,135,'১. আপনি কি কোনো পরিষেবা সংক্রান্ত সহায়তা চান?;হ্যাঁ;না;\r\n',2,'অ্যাডভাইসারির সেবা'),(4,136,'২. আপনি কি ধরনের পরিষেবা সংক্রান্ত সহায়তা প্রয়োজন?;চিকিৎসা সংক্রান্ত;শিক্ষা সংক্রান্ত;আইনি;\r\n',0,'অ্যাডভাইসারির সেবা'),(4,137,'৩. আপনি কি ধরনের চিকিৎসা সংক্রান্ত সহায়তা চান?;হার্টের সমস্যা;গর্ভবতী মায়েদের সমস্যা;বাচ্চাদের সমস্যা;মানসিক রোগের;অন্যান্য;\r\n',0,'অ্যাডভাইসারির সেবা'),(4,138,'৪. আপনি কি ধরনের শিক্ষা সংক্রান্ত সহায়তা চান?;চাকুরী ভিত্তিক কোর্স;উচ্চশিক্ষার খোঁজখবর;\r\n',2,'অ্যাডভাইসারির সেবা'),(4,139,'৫.  আপনি কি ধরনের আইনি সহায়তা চান?;পারিবারিক হিংসা;মারধর করা;সম্পত্তি বিষয়ে ঝামেলা;\r\n',2,'অ্যাডভাইসারির সেবা'),(4,140,'৬. আপনি চাকুরী ভিত্তিক কোর্স সংক্রান্ত সহায়তা চান?;অষ্টম শ্রেণীর পর বৃত্তিমূলক প্রশিক্ষণ;দশম শ্রেণীর পর বৃত্তিমূলক প্রশিক্ষণ;দ্বাদশ শ্রেণীর পর বৃত্তিমূলক প্রশিক্ষণ;\r\n',2,'অ্যাডভাইসারির সেবা'),(4,141,'৭. আপনি উচ্চশিক্ষার খোঁজখবর সংক্রান্ত সহায়তা চান?;মাধ্যমিকের পর বৃত্তি;মাধ্যমিকের পর ক্যারিয়ার অপশন;উচ্চমাধ্যমিকের পর বৃত্তি;উচ্চমাধ্যমিকের পর ক্যারিয়ার অপশন;\r\n',0,'অ্যাডভাইসারির সেবা');
/*!40000 ALTER TABLE `shg_questions` ENABLE KEYS */;

--
-- Table structure for table `shg_type`
--

DROP TABLE IF EXISTS `shg_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shg_type` (
  `type_id` int(11) NOT NULL,
  `Type_name` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shg_type`
--

/*!40000 ALTER TABLE `shg_type` DISABLE KEYS */;
INSERT INTO `shg_type` VALUES (0,'MultiCorrect'),(1,'Text'),(2,'SingleCorrect');
/*!40000 ALTER TABLE `shg_type` ENABLE KEYS */;

--
-- Table structure for table `situational_info`
--

DROP TABLE IF EXISTS `situational_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `situational_info` (
  `message_id` int(10) NOT NULL AUTO_INCREMENT,
  `message_body` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `endtime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `situational_info`
--

/*!40000 ALTER TABLE `situational_info` DISABLE KEYS */;
INSERT INTO `situational_info` VALUES (54,'No Teacher is ready to teach','Debnibas, Frazerganj, Namkhana, South 24 Parganas, West Bengal','published','2016-07-11 13:17:17','2016-06-23 13:41:51'),(55,' - ','Debnibas, Frazerganj, Namkhana, South 24 Parganas, West Bengal','raw message','2016-07-11 13:17:17','2016-06-23 13:41:51'),(56,'Number of schools not functioning due to disaster -100','Debnibas, Frazerganj, Namkhana, South 24 Parganas, West Bengal','ready to publish','2016-07-11 13:17:17','2016-06-23 13:41:51'),(57,' - ','Debnibas, Frazerganj, Namkhana, South 24 Parganas, West Bengal','raw message','2016-07-11 13:17:17','2016-06-23 13:41:51');
/*!40000 ALTER TABLE `situational_info` ENABLE KEYS */;

--
-- Table structure for table `state`
--

DROP TABLE IF EXISTS `state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `state` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `state` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `state`
--

/*!40000 ALTER TABLE `state` DISABLE KEYS */;
INSERT INTO `state` VALUES (1,'West Bengal');
/*!40000 ALTER TABLE `state` ENABLE KEYS */;

--
-- Table structure for table `temp_damage_flood`
--

DROP TABLE IF EXISTS `temp_damage_flood`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_damage_flood` (
  `disastername` varchar(100) NOT NULL,
  `repdate` date NOT NULL,
  `cat_buildingbui001f` varchar(100) NOT NULL,
  `cat_buildingbui002f` varchar(100) NOT NULL,
  `cat_buildingbui003b` varchar(100) NOT NULL,
  `cat_buildingbui004a` varchar(100) NOT NULL,
  `cat_buildingbui005a` varchar(100) NOT NULL,
  `cat_buildingbui006d` varchar(100) NOT NULL,
  `cat_educationedu003a` varchar(100) NOT NULL,
  `cat_educationedu004b` varchar(100) NOT NULL,
  `cat_educationedu005a` varchar(100) NOT NULL,
  `cat_educationedu006a` varchar(100) NOT NULL,
  `cat_educationedu007f` varchar(100) NOT NULL,
  `cat_foodfoo001a` varchar(100) NOT NULL,
  `cat_foodfoo002e` varchar(100) NOT NULL,
  `cat_foodfoo003e` varchar(100) NOT NULL,
  `cat_foodfoo004a` varchar(100) NOT NULL,
  `cat_foodfoo005e` varchar(100) NOT NULL,
  `cat_foodfoo006a` varchar(100) NOT NULL,
  `cat_foodfoo007b` varchar(100) NOT NULL,
  `cat_foodfoo008a` varchar(100) NOT NULL,
  `cat_foodfoo009a` varchar(100) NOT NULL,
  `cat_foodfoo010a` varchar(100) NOT NULL,
  `cat_foodfoo012a` varchar(100) NOT NULL,
  `cat_foodfoo013a` varchar(100) NOT NULL,
  `cat_foodfoo014e` varchar(100) NOT NULL,
  `cat_foodfoo015a` varchar(100) NOT NULL,
  `cat_foodfoo016e` varchar(100) NOT NULL,
  `cat_foodfoo017f` varchar(100) NOT NULL,
  `cat_foodfoo018f` varchar(100) NOT NULL,
  `cat_foodfoo019c` varchar(100) NOT NULL,
  `cat_foodfoo021f` varchar(100) NOT NULL,
  `cat_foodfoo022f` varchar(100) NOT NULL,
  `cat_foodfoo023f` varchar(100) NOT NULL,
  `cat_foodfoo024b` varchar(100) NOT NULL,
  `cat_healthhea001f` varchar(100) NOT NULL,
  `cat_healthhea002a` varchar(100) NOT NULL,
  `cat_healthhea003f` varchar(100) NOT NULL,
  `cat_healthhea004f` varchar(100) NOT NULL,
  `cat_healthhea005c` varchar(100) NOT NULL,
  `cat_healthhea006e` varchar(100) NOT NULL,
  `cat_healthhea007a` varchar(100) NOT NULL,
  `cat_healthhea008a` varchar(100) NOT NULL,
  `cat_healthhea009f` varchar(100) NOT NULL,
  `cat_infrastructureinf001a` varchar(100) NOT NULL,
  `cat_infrastructureinf002c` varchar(100) NOT NULL,
  `cat_infrastructureinf003f` varchar(100) NOT NULL,
  `cat_infrastructureinf004e` varchar(100) NOT NULL,
  `cat_infrastructureinf005f` varchar(100) NOT NULL,
  `cat_infrastructureinf006e` varchar(100) NOT NULL,
  `cat_infrastructureinf007a` varchar(100) NOT NULL,
  `cat_protectionpro001a` varchar(100) NOT NULL,
  `cat_protectionpro002a` varchar(100) NOT NULL,
  `cat_protectionpro003a` varchar(100) NOT NULL,
  `cat_protectionpro004a` varchar(100) NOT NULL,
  `cat_protectionpro005a` varchar(100) NOT NULL,
  `cat_protectionpro006a` varchar(100) NOT NULL,
  `cat_protectionpro007a` varchar(100) NOT NULL,
  `cat_protectionpro008a` varchar(100) NOT NULL,
  `cat_protectionpro009a` varchar(100) NOT NULL,
  `cat_protectionpro010a` varchar(100) NOT NULL,
  `cat_protectionpro011a` varchar(100) NOT NULL,
  `cat_protectionpro012a` varchar(100) NOT NULL,
  `cat_protectionpro013a` varchar(100) NOT NULL,
  `cat_protectionpro014a` varchar(100) NOT NULL,
  `cat_sheltershe001a` varchar(100) NOT NULL,
  `cat_sheltershe002f` varchar(100) NOT NULL,
  `cat_sheltershe003f` varchar(100) NOT NULL,
  `cat_sheltershe004a` varchar(100) NOT NULL,
  `cat_sheltershe005b` varchar(100) NOT NULL,
  `cat_sheltershe006a` varchar(100) NOT NULL,
  `cat_waterwat001a` varchar(100) NOT NULL,
  `cat_waterwat002f` varchar(100) NOT NULL,
  `cat_waterwat003a` varchar(100) NOT NULL,
  `cat_waterwat004f` varchar(100) NOT NULL,
  `cat_waterwat005f` varchar(100) NOT NULL,
  `cat_waterwat006a` varchar(100) NOT NULL,
  `cat_waterwat007e` varchar(100) NOT NULL,
  `cat_waterwat008f` varchar(100) NOT NULL,
  `cat_waterwat009a` varchar(100) NOT NULL,
  `cat_waterwat010d` varchar(100) NOT NULL,
  `cat_waterwat011f` varchar(100) NOT NULL,
  `cat_waterwat012d` varchar(100) NOT NULL,
  `cat_waterwat013f` varchar(100) NOT NULL,
  `cat_waterwat014a` varchar(100) NOT NULL,
  `cat_waterwat015a` varchar(100) NOT NULL,
  PRIMARY KEY (`disastername`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_damage_flood`
--

/*!40000 ALTER TABLE `temp_damage_flood` DISABLE KEYS */;
INSERT INTO `temp_damage_flood` VALUES ('3-namkhanaflood2015-07-13','2016-09-03','','Mud & thatched','10','Yes','No','Public Buildings','','','','','','Yes','Information unavailable','1 month','Amount decreased ','Amount consumed has decreased','No','25','Information unavailable','Yes, majority have items/ implements ','No','No','Unavailable','Not functioning','Yes','0%','Agricultural day labour ','Severe','Rice','Information unavailable','No damage','Severe','20','Other','within 15 days	','Dehydration','People injured','10, available','Don\'t know','Yes','No','Rural Health Providers','No','All major roads are functioning as before','Severe','Partly available','Moderate','Information unavailable','Information unavailable','Yes','Yes','No','Yes','No','Yes','No','Yes','No','No','Yes','No','No','Information unavailable','Information unavailable','None','Darkness','Yes','30','No','No','Open well (erstwhile used for drinking water purposes)','Information unavailable','Piped Water Supply','A few','No','Long term sufficiency (beyond 3 weeks)','Information unavailable','Yes','Open Areas','None','Household/Community Latrines','Rainwater runoff/drainage','Sanitary Napkins','Information unavailable');
/*!40000 ALTER TABLE `temp_damage_flood` ENABLE KEYS */;

--
-- Table structure for table `temp_need_flood`
--

DROP TABLE IF EXISTS `temp_need_flood`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_need_flood` (
  `disastername` varchar(100) NOT NULL,
  `repdate` date NOT NULL,
  `cat_neednee001d` varchar(100) NOT NULL,
  `cat_neednee002d` varchar(100) NOT NULL,
  `cat_neednee003d` varchar(100) NOT NULL,
  `cat_neednee004b` varchar(100) NOT NULL,
  `cat_neednee005c` varchar(100) NOT NULL,
  `cat_neednee006c` varchar(100) NOT NULL,
  `cat_neednee007c` varchar(100) NOT NULL,
  `cat_neednee008d` varchar(100) NOT NULL,
  `cat_neednee009b` varchar(100) NOT NULL,
  `cat_neednee010b` varchar(100) NOT NULL,
  `cat_neednee011b` varchar(100) NOT NULL,
  `cat_neednee012b` varchar(100) NOT NULL,
  `cat_neednee013b` varchar(100) NOT NULL,
  `cat_neednee014b` varchar(100) NOT NULL,
  `cat_neednee015b` varchar(100) NOT NULL,
  `cat_neednee016b` varchar(100) NOT NULL,
  `cat_neednee017b` varchar(100) NOT NULL,
  `cat_neednee018b` varchar(100) NOT NULL,
  `cat_neednee019c` varchar(100) NOT NULL,
  `cat_neednee020e` varchar(100) NOT NULL,
  `cat_neednee021a` varchar(100) NOT NULL,
  `cat_neednee022b` varchar(100) NOT NULL,
  `cat_neednee023b` varchar(100) NOT NULL,
  `cat_neednee024b` varchar(100) NOT NULL,
  `cat_neednee025b` varchar(100) NOT NULL,
  `cat_neednee026d` varchar(100) NOT NULL,
  `cat_neednee027b` varchar(100) NOT NULL,
  `cat_neednee028b` varchar(100) NOT NULL,
  `cat_neednee029d` varchar(100) NOT NULL,
  `cat_neednee030d` varchar(100) NOT NULL,
  `cat_neednee031c` varchar(100) NOT NULL,
  `cat_neednee032d` varchar(100) NOT NULL,
  `cat_neednee033d` varchar(100) NOT NULL,
  `cat_neednee034d` varchar(100) NOT NULL,
  `cat_neednee035d` varchar(100) NOT NULL,
  `cat_neednee036d` varchar(100) NOT NULL,
  `cat_neednee037d` varchar(100) NOT NULL,
  `cat_neednee038c` varchar(100) NOT NULL,
  `cat_neednee039c` varchar(100) NOT NULL,
  `cat_neednee040c` varchar(100) NOT NULL,
  `cat_neednee041c` varchar(100) NOT NULL,
  `cat_neednee042c` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_need_flood`
--

/*!40000 ALTER TABLE `temp_need_flood` DISABLE KEYS */;
INSERT INTO `temp_need_flood` VALUES ('3-namkhanaflood2015-07-13','2016-07-19','Yes','Yes','No','30','Steamers and fast boats','No special equipments needed','Vehicles that can clear muck','No','50','70','40','20','30','25','38','40','20','50','No, baby food is not required','Biscuits','Fodder','30','20','50','30','No','50','20','Yes','No','No, medical aid is available','Yes','No','Yes','Yes','Yes','No','No, all major roads are functioning properly','No','Yes','Yes','Additional refugee camps might be needed');
/*!40000 ALTER TABLE `temp_need_flood` ENABLE KEYS */;

--
-- Table structure for table `temp_rapid_flood`
--

DROP TABLE IF EXISTS `temp_rapid_flood`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_rapid_flood` (
  `disastername` varchar(100) NOT NULL,
  `repdate` date NOT NULL,
  `cat_rapidrap001b` int(10) DEFAULT NULL,
  `cat_rapidrap002b` int(10) DEFAULT NULL,
  `cat_rapidrap003b` int(10) DEFAULT NULL,
  `cat_rapidrap004b` int(10) DEFAULT NULL,
  `cat_rapidrap005b` int(10) DEFAULT NULL,
  `cat_rapidrap006b` int(10) DEFAULT NULL,
  `cat_rapidrap007b` int(10) DEFAULT NULL,
  `cat_rapidrap008b` int(10) DEFAULT NULL,
  `cat_rapidrap009b` int(10) DEFAULT NULL,
  `cat_rapidrap010b` int(10) DEFAULT NULL,
  `cat_rapidrap011b` int(10) DEFAULT NULL,
  `cat_rapidrap012b` int(10) DEFAULT NULL,
  `cat_rapidrap013b` int(10) DEFAULT NULL,
  `cat_rapidrap014b` int(10) DEFAULT NULL,
  `cat_rapidrap015b` int(10) DEFAULT NULL,
  `cat_rapidrap016b` int(10) DEFAULT NULL,
  `cat_rapidrap017b` int(10) DEFAULT NULL,
  `cat_rapidrap018b` int(10) DEFAULT NULL,
  `cat_rapidrap019b` int(10) DEFAULT NULL,
  `cat_rapidrap020b` int(10) DEFAULT NULL,
  `cat_rapidrap021d` varchar(50) DEFAULT NULL,
  `cat_rapidrap022d` varchar(50) DEFAULT NULL,
  `cat_rapidrap023d` varchar(50) DEFAULT NULL,
  `cat_rapidrap024c` varchar(200) DEFAULT NULL,
  `cat_rapidrap025a` varchar(50) DEFAULT NULL,
  `cat_rapidrap026f` varchar(200) DEFAULT NULL,
  `cat_rapidrap027f` varchar(50) DEFAULT NULL,
  `cat_rapidrap028f` varchar(50) DEFAULT NULL,
  `cat_rapidrap029a` varchar(50) DEFAULT NULL,
  `cat_rapidrap030e` varchar(50) DEFAULT NULL,
  `cat_rapidrap031f` varchar(50) DEFAULT NULL,
  `cat_rapidrap032a` varchar(50) DEFAULT NULL,
  `cat_rapidrap033d` varchar(50) DEFAULT NULL,
  `cat_rapidrap034f` varchar(50) DEFAULT NULL,
  `cat_rapidrap035f` varchar(50) DEFAULT NULL,
  `cat_rapidrap036d` varchar(50) DEFAULT NULL,
  `cat_rapidrap037f` varchar(50) DEFAULT NULL,
  `cat_rapidrap038a` varchar(50) DEFAULT NULL,
  `cat_rapidrap039a` varchar(50) DEFAULT NULL,
  `cat_rapidrap040a` varchar(50) DEFAULT NULL,
  `cat_rapidrap041f` varchar(50) DEFAULT NULL,
  `cat_rapidrap042f` varchar(50) DEFAULT NULL,
  `cat_rapidrap043a` varchar(50) DEFAULT NULL,
  `cat_rapidrap044b` int(10) DEFAULT NULL,
  `cat_rapidrap045a` varchar(50) DEFAULT NULL,
  `cat_rapidrap046a` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_rapid_flood`
--

/*!40000 ALTER TABLE `temp_rapid_flood` DISABLE KEYS */;
INSERT INTO `temp_rapid_flood` VALUES ('2-rapid','2016-09-14',15,4,500,300,200,50,250,50,15,20,50,100,50,40,60,100,4,10,16,20,'into the houses','more than 3 days','above 3 ft','','Yes','Ponds','Tube wells','1-25%','Yes','For 1 week','A few',NULL,'Open Areas','1-25%','1-25%','Open Areas',' Solid waste','Cloth','Yes','Yes','26-50%','Weather Conditions','No',3,'Unavailable','No'),('3-rapid','2016-09-14',23,12,10000,6000,3750,1515,3500,1250,1500,350,850,1750,2250,600,1100,1900,600,300,350,1550,'within the village','more than 3 days','above 3 ft','Kolkata\nAsansol\nMalda\nMednipur\nHaldia\nDurgapur','Inf. unavailable','Open Well','Wells','0%','Yes','For 1 week','Inf. unavailable','No','Open Areas','0%','0%','Open Areas',' Waste Water','Cloth','Inf. unavailable','No',NULL,NULL,NULL,NULL,NULL,'Inf. unavailable'),('6-rapid','2016-09-14',10000,10000,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('output','2016-09-14',10038,10016,10500,6300,3950,1565,3750,1300,1515,370,900,1850,2300,640,1160,2000,604,310,366,1570,'into the houses','more than 3 days','above 3 ft','Kolkata\nAsansol\nMalda\nMednipur\nHaldia\nDurgapur','Yes','Ponds','Tube wells','1-25%','Yes','For 1 week','A few','No','Open Areas','1-25%','1-25%','Open Areas',' Solid waste','Cloth','Yes','Yes','26-50%','Weather Conditions','No',3,'Unavailable','No');
/*!40000 ALTER TABLE `temp_rapid_flood` ENABLE KEYS */;

--
-- Table structure for table `tspeech`
--

DROP TABLE IF EXISTS `tspeech`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tspeech` (
  `qdescription` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tspeech`
--

/*!40000 ALTER TABLE `tspeech` DISABLE KEYS */;
INSERT INTO `tspeech` VALUES ('ধন্যবাদ | আমাদের সাথে সহযোগিতা করার জন্য |');
/*!40000 ALTER TABLE `tspeech` ENABLE KEYS */;

--
-- Table structure for table `user_mas1`
--

DROP TABLE IF EXISTS `user_mas1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_mas1` (
  `user_mobile_no` varchar(100) NOT NULL DEFAULT '',
  `user_type` int(11) DEFAULT NULL,
  `rid` int(11) NOT NULL DEFAULT '0',
  `msg` varchar(500) DEFAULT NULL,
  `last_qsent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_mobile_no`,`rid`,`last_qsent`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_mas1`
--

/*!40000 ALTER TABLE `user_mas1` DISABLE KEYS */;
INSERT INTO `user_mas1` VALUES ('+919830342404',1,1,'Y',3);
/*!40000 ALTER TABLE `user_mas1` ENABLE KEYS */;

--
-- Table structure for table `user_master`
--

DROP TABLE IF EXISTS `user_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_master` (
  `user_id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `role` text,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_master`
--

/*!40000 ALTER TABLE `user_master` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_master` ENABLE KEYS */;

--
-- Table structure for table `victims_info`
--

DROP TABLE IF EXISTS `victims_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `victims_info` (
  `Victim_id` int(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `contact_no` int(11) DEFAULT NULL,
  `gender` text,
  `shelter_address` varchar(50) DEFAULT NULL,
  `shelter_id` int(10) DEFAULT NULL,
  `distinguishing_mark` text,
  PRIMARY KEY (`Victim_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `victims_info`
--

/*!40000 ALTER TABLE `victims_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `victims_info` ENABLE KEYS */;

--
-- Table structure for table `village`
--

DROP TABLE IF EXISTS `village`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `village` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `village` varchar(50) DEFAULT NULL,
  `panchayatid` tinyint(4) DEFAULT NULL,
  `blockid` tinyint(4) DEFAULT NULL,
  `districtid` tinyint(4) DEFAULT NULL,
  `stateid` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `village`
--

/*!40000 ALTER TABLE `village` DISABLE KEYS */;
INSERT INTO `village` VALUES (1,'Debnibas',2,1,1,1),(2,'Chandanpiri',1,1,1,1),(3,'North Chandanpiri',3,1,1,1);
/*!40000 ALTER TABLE `village` ENABLE KEYS */;

--
-- Table structure for table `volunteer_master`
--

DROP TABLE IF EXISTS `volunteer_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteer_master` (
  `volunteer_id` int(10) NOT NULL AUTO_INCREMENT,
  `volunteer_name` varchar(255) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `block` varchar(100) DEFAULT NULL,
  `panchayat` varchar(100) DEFAULT NULL,
  `village` varchar(100) DEFAULT NULL,
  `pincode` int(10) NOT NULL,
  `contact_number` varchar(13) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Affiliation` varchar(25) DEFAULT NULL,
  `Designation` varchar(100) DEFAULT NULL,
  `work_block` varchar(100) DEFAULT NULL,
  `work_panchayat` varchar(100) DEFAULT NULL,
  `work_village` varchar(100) DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `expertise` varchar(100) DEFAULT NULL,
  `is_deleted` enum('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`volunteer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteer_master`
--

/*!40000 ALTER TABLE `volunteer_master` DISABLE KEYS */;
INSERT INTO `volunteer_master` VALUES (4,'Suman Das','West Bengal','South-24pgs','Kakdwip','Narayanpur','North Chandanpiri',0,'8523697411','suman.das@gmail.com','CRY','Volunteers','Kakdwip','Namkhana','Namkhana','food','y','n'),(12,'Kamet Majumder','West Bengal','South-24pgs','Namkhana','Frazergung','Debnibas',0,'9874563210','prasun1926@gmail.com','Doctors for You','Volunteer','Namkhana','Frazergung','Debnibas','food','y','n'),(13,'Prasun kumar Seal','WB','South-24pgs','Namkhana','Haripur','Haripur-1',0,'8296106229','prasun1926@gmail.com','Doctors for You','volunteer','Kakdwip','Namkhana','Namkhana','rescue','y','n'),(14,'Tapas Kr. Chakraborty','WB','South-24pgs','Namkhana','Frazergung','Debnibas',0,'9051603063','prasun1926@gmail.com','Doctors for You','volunteer','Namkhana','Haripur','Haripur-1','rescue','y','n'),(15,'souvik Basu','WB','South-24pgs','Namkhana','Frazergung','Debnibas',0,'9051603063','souvik.basu@heritageit.edu','Doctors for You','volunteer','Namkhana','Frazergung','Debnibas','medicine','y','n'),(16,'srestha Banarjee','WB','South-24pgs','Namkhana','Frazergung','Debnibas',0,'9874653210','prasun1926@gmail.com','Doctors for You','volunteer','Namkhana','Haripur','Haripur-1','food','n','n'),(28,'Sauvik Banerjee','WB','South-24pgs','Namkhana','Frazergung','Debnibas',0,'9632587410','souvik.basu@heritageit.edu','Doctors for You','volunteer','Namkhana','Frazergung','Debnibas','water','y','n'),(29,'Suman Dasgupta','WB','South-24pgs','Namkhana','Frazergung','Debnibas',0,'8745963210','prasun1926@gmail.com','Doctors for You','Volunteer','Namkhana','Haripur','Haripur-1','water','y','n'),(32,'Jayanta basak','West Bengal','South-24pgs','Kakdwip','Narayanpur','North Chandanpiri',0,'9877526385','Jayanta.basak@gmail.com','Spade','Volunteer','Kakdwip','Narayanpur','North Chandanpiri','food','y','n'),(33,'Javed Khan','West Bengal','South-24pgs','Namkhana','Haripur','Chandanpiri',0,'8956457823','jk@live.com','','Volunteer','Namkhana','Haripur','Chandanpiri','rescue','y','y'),(34,'Javed Khan','West Bengal','South-24pgs','Namkhana','Frazergung','Debnibas',0,'8958457823','jk@live.com','Spade','Volunteers','Namkhana','Frazergung','Debnibas','rescue','y','n'),(35,'Maya Saha','West Bengal','South-24pgs','Namkhana','Haripur','Chandanpiri',0,'7856961230','ms@gmail.com','Spade','Volunteers','Namkhana','Haripur','Chandanpiri','water','n','n'),(37,'Sujoy Ghosh','West Bengal','South-24pgs','Namkhana','Haripur','Chandanpiri',0,'4589231563','sg@gmail.com','Admin','Volunteers','Namkhana','Haripur','Chandanpiri','rescue','y','n'),(42,'Rajib Jana','West Bengal','South-24pgs','Namkhana','Haripur','Chandanpiri',0,'7845236900','rjana@gmail.com','Ram Krishna Mission','Volunteers','Namkhana','Haripur','Chandanpiri','medicine','y','n'),(43,'Rahul Kumar','West Bengal','South-24pgs','Namkhana','Haripur','Chandanpiri',0,'9856231200','rahul@gmail.com','Ram Krishna Mission','Volunteer','Namkhana','Haripur','Chandanpiri','rescue','y','n'),(44,'Shymal Roy','West Bengal','South-24pgs','Namkhana','Haripur','Chandanpiri',0,'8956241036','sroy@live.com','CMBS','Volunteers','Namkhana','Haripur','Chandanpiri','medicine','n','n'),(46,'Saurav Sil','West Bengal','South-24pgs','Namkhana','Frazergung','Debnibas',0,'9874563210','saurav@gmail.com','CRY','Volunteers','Namkhana','Haripur','Chandanpiri','rescue','y','n'),(47,'Silpa Das','West Bengal','South-24pgs','Kakdwip','Narayanpur','North Chandanpiri',0,'9874563211','silpa@gmail.com','CRY','Volunteers','Namkhana','Haripur','Chandanpiri','medicine','y','n'),(48,'Sipra Dasbit','West Bengal','South-24pgs','Kakdwip','Narayanpur','North Chandanpiri',0,'9874563219','sdb@gmail.com','Admin','Volunteers','Kakdwip','Narayanpur','North Chandanpiri','rescue','y','n'),(49,'SK dutta','West Bengal','South-24pgs','Kakdwip','Narayanpur','North Chandanpiri',0,'9874563215','skd@gmail.com','CRY','Volunteers','Kakdwip','Narayanpur','North Chandanpiri','food','y','n'),(50,'Haripada Sil','West Bengal','South-24pgs','Namkhana','Frazergung','Debnibas',0,'8523697410','hari@gmail.com','ISN','Volunteers','Namkhana','Frazergung','Debnibas','water','y','n'),(51,'Kalyan kumar','West Bengal','South-24pgs','Namkhana','Haripur','Chandanpiri',0,'9874563210','kalyan@gmail.com','Admin','Volunteers','Kakdwip','Narayanpur','North Chandanpiri','water','y','n'),(52,'Kalipodo Ganguli','West Bengal','South-24pgs','Namkhana','Haripur','Chandanpiri',700223,'8523697410','kalipodo@gmail.com','Admin','Volunteers','Namkhana','Haripur','Chandanpiri','food','y','n');
/*!40000 ALTER TABLE `volunteer_master` ENABLE KEYS */;

--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `volunteers` (
  `qid` int(11) NOT NULL DEFAULT '0',
  `qdescription` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `volunteers`
--

/*!40000 ALTER TABLE `volunteers` DISABLE KEYS */;
INSERT INTO `volunteers` VALUES (1,'পঞ্চায়েত বা সঙ্ঘ পরিচালিত কোনো প্রশিক্ষণে আগ্রহী? A>হ্যাঁ B>না'),(2,'কোন ধরনের প্রশিক্ষণ আপনার দলের জন্য উপযোগী? A>কৃষিকাজ B>অন্যান্য'),(3,'২. A>ধানচাষ B>পানচাষ C>সূর্যমুখীচাষ D>অন্যান্য'),(4,'২. A>ছাগলপালন,পোল্ট্রি B>মৌমাছিপালন C>মীনসংগ্রহ D>অন্যান্য'),(5,'২. A>মুড়ি তৈরী করা B>আচার বানানো C>অন্যান্য'),(6,'২. A>দর্জির কাজ B>মুদির দোকান C>মসলা প্যাকেজিং D>অন্যান্য'),(7,'২. A>যন্ত্রাংশ মেরামত (সাইকেল, মোবাইল ফোন) B>অন্যান্য(লিখুন)'),(8,'আপনারা কি ধরনের প্রশিক্ষণ এ অংশগ্রহণ করেছেন? A>কৃষিকাজ B>অন্যান্য'),(9,'বর্তমানে গ্রামে নিয়মিত প্রশিক্ষণ কর্মশালা হয় ? A>হ্যাঁ B>না'),(10,'এম.আই.পি তৈরি করার আগের অভিজ্ঞতা আছে ? A>হ্যাঁ B>না'),(11,'দলের কতজন এর সাথে যুক্ত হতে চায়? A>প্রায় সবাই B>৫ এর কম C>৫ এর বেশী'),(12,'পণ্য তৈরির প্রশিক্ষন কোথা থেকে পান? A>ব্লক থেকে B>এন.জি.ও. থেকে'),(13,'ব্যাঙ্ক থেকে আর্থিক সাহায়াতা নেবার জন্য উৎসাহ দেওয়া হয় A>হ্যাঁ B>না'),(14,'কতটা আর্থিক সহায়তা প্রয়োজন? A>৪০,০০০ এর কম B>৪০,০০০ এর বেশী'),(15,'পণ্য বিক্রির জন্য সরকার থেকে সাহায্য পান? A>হ্যাঁ B>না');
/*!40000 ALTER TABLE `volunteers` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-15  2:56:05
