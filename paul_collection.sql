# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: paul_collection
# Generation Time: 2021-03-30 14:23:19 +0000
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
  `name` varchar(255) NOT NULL DEFAULT '',
  `damage_per_second` enum('1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '1',
  `rate_of_fire` enum('1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '1',
  `ammo_consumption` mediumint(11) NOT NULL DEFAULT '0',
  `ammo_efficiency` enum('1','2','3','4','5','6','7','8','9','10','infinite') NOT NULL DEFAULT '1',
  `default_weapon_number` tinyint(11) NOT NULL DEFAULT '1',
  `image_url` varchar(3000) NOT NULL DEFAULT 'https://upload.wikimedia.org/wikipedia/en/3/3d/Hexenbox.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `weapons` WRITE;
/*!40000 ALTER TABLE `weapons` DISABLE KEYS */;

INSERT INTO `weapons` (`id`, `name`, `damage_per_second`, `rate_of_fire`, `ammo_consumption`, `ammo_efficiency`, `default_weapon_number`, `image_url`)
VALUES
	(1,'Wraithverge','10','6',36,'8',4,'https://www.hexenmagetower.com/charact_files/wraithverge5.JPG'),
	(2,'Mace of Contrition','1','5',0,'infinite',1,'https://static.doomworld.com/monthly_2020_02/Screenshot_Hexen_20200221_080012.png.340d9d002265a0b15a01b1569f39237b.png'),
	(3,'Arc of Death','5','3',5,'3',3,'https://doomwiki.org/w/images/8/8c/Hexen5.png'),
	(4,'Frost Shards','3','4',3,'2',2,'https://doomwiki.org/w/images/4/48/Hexen2.png'),
	(5,'Hammer of Retribution','7','3',3,'10',3,'https://doomwiki.org/w/images/c/c3/DarkBishop.png'),
	(6,'Hellstaff','6','9',1,'9',5,'https://doomwiki.org/w/images/2/21/Hellstaff.png'),
	(7,'Chainsaw (Doom)','3','10',0,'infinite',1,'https://doomwiki.org/w/images/thumb/3/3a/Chainsaw.jpg/250px-Chainsaw.jpg'),
	(8,'Super Shotgun','5','2',2,'9',3,'https://doomwiki.org/w/images/thumb/7/7d/DoubleBarreled_firing2.jpg/256px-DoubleBarreled_firing2.jpg'),
	(9,'Rocket Launcher (Doom)','8','7',1,'5',5,'https://assets1.ignimgs.com/2019/03/29/4-rocket-launcher-1553903531418.jpg'),
	(10,'Serpent Staff','6','8',1,'6',2,'https://doomwiki.org/w/images/1/1b/Serpent_Staff_Small.PNG'),
	(11,'Firemace','7','9',1,'1',7,'images/firemaceFiring.png');

/*!40000 ALTER TABLE `weapons` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
