# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: paul_collection
# Generation Time: 2021-03-29 10:55:16 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table weapons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `weapons`;

CREATE TABLE `weapons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `damage_per_second` enum('1','2','3','4','5','6','7','8','9','10') DEFAULT NULL,
  `rate_of_fire` enum('1','2','3','4','5','6','7','8','9','10') DEFAULT NULL,
  `ammo_comsumption` mediumint(11) DEFAULT NULL,
  `ammo_efficiency` enum('1','2','3','4','5','6','7','8','9','10','infinite') DEFAULT NULL,
  `default_weapon_number` tinyint(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `weapons` WRITE;
/*!40000 ALTER TABLE `weapons` DISABLE KEYS */;

INSERT INTO `weapons` (`id`, `name`, `damage_per_second`, `rate_of_fire`, `ammo_comsumption`, `ammo_efficiency`, `default_weapon_number`)
VALUES
	(1,'Wraithverge','10','6',36,'8',4),
	(2,'Mace of Contrition','1','5',0,'infinite',1),
	(3,'Arc of Death','5','3',5,'3',3),
	(4,'Frost Shards','3','4',3,'2',2),
	(5,'Hammer of Retribution','7','3',3,'10',3),
	(6,'Hellstaff','6','9',1,'9',5),
	(7,'Chainsaw','3','10',0,'infinite',1),
	(8,'Super Shotgun','5','2',2,'9',3),
	(9,'Rocket Launcher (Doom)','8','7',1,'5',5),
	(10,'Serpent Staff','6','8',1,'6',2),
	(11,'Firemace','7','9',1,'1',7);

/*!40000 ALTER TABLE `weapons` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
