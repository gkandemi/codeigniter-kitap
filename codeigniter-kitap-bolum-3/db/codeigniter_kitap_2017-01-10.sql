# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.16-MariaDB)
# Database: codeigniter_kitap
# Generation Time: 2017-01-10 17:51:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table personel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personel`;

CREATE TABLE `personel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `personel_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `eposta` varchar(100) COLLATE utf8_turkish_ci DEFAULT NULL,
  `yas` int(11) DEFAULT NULL,
  `maas` float(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

LOCK TABLES `personel` WRITE;
/*!40000 ALTER TABLE `personel` DISABLE KEYS */;

INSERT INTO `personel` (`id`, `personel_adi`, `eposta`, `yas`, `maas`)
VALUES
	(1,'Gökhan Kandemir','gokhan@gkandemir.com',30,9000.00),
	(2,'Felakettin Köse','felo@yazilimegitim.net',20,10000.00),
	(3,'Cemil Tüfekçi','cemil@tufekci.net',16,4000.00),
	(4,'Ediz Mahleç','ediz@mahlec.com',29,8000.00),
	(5,'Berk Kazancı','berk@kazancii.com',25,5000.00),
	(6,'Tayfun Er','tayfuner@er.net',29,7000.00),
	(7,'İflasettin','ifo@yazilimegitim.net',35,12000.00);

/*!40000 ALTER TABLE `personel` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
