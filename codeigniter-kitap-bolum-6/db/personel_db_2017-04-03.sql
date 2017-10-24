# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.16-MariaDB)
# Database: personel_db
# Generation Time: 2017-04-03 18:56:33 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table kullanici
# ------------------------------------------------------------

DROP TABLE IF EXISTS `kullanici`;

CREATE TABLE `kullanici` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `kullanici_adi` varchar(255) DEFAULT NULL,
  `sifre` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

LOCK TABLES `kullanici` WRITE;
/*!40000 ALTER TABLE `kullanici` DISABLE KEYS */;

INSERT INTO `kullanici` (`id`, `kullanici_adi`, `sifre`, `email`)
VALUES
	(1,'gkandemir','e10adc3949ba59abbe56e057f20f883e','gokhan@gkandemir.com');

/*!40000 ALTER TABLE `kullanici` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table personel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personel`;

CREATE TABLE `personel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ad_soyad` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefon` varchar(15) DEFAULT NULL,
  `adres` text,
  `departman` varchar(100) DEFAULT NULL,
  `imgUrl` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin5;

LOCK TABLES `personel` WRITE;
/*!40000 ALTER TABLE `personel` DISABLE KEYS */;

INSERT INTO `personel` (`id`, `ad_soyad`, `email`, `telefon`, `adres`, `departman`, `imgUrl`)
VALUES
	(1,'Gökhan Kandemir','info@yazilimegitim.net','05077158109','İstanbul / Ümraniye','Yazılım Departmanıı','34db4711.jpg');

/*!40000 ALTER TABLE `personel` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
