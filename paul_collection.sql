-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2021 at 02:55 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paul_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

DROP TABLE IF EXISTS `weapons`;
CREATE TABLE IF NOT EXISTS `weapons` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `damage_per_second` enum('1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '1',
  `rate_of_fire` enum('1','2','3','4','5','6','7','8','9','10') NOT NULL DEFAULT '1',
  `ammo_consumption` mediumint(11) NOT NULL DEFAULT '0',
  `ammo_efficiency` enum('1','2','3','4','5','6','7','8','9','10','infinite') NOT NULL DEFAULT '1',
  `default_weapon_number` tinyint(11) NOT NULL DEFAULT '1',
  `image_url` varchar(3000) NOT NULL DEFAULT 'https://upload.wikimedia.org/wikipedia/en/3/3d/Hexenbox.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weapons`
--

INSERT INTO `weapons` (`id`, `name`, `damage_per_second`, `rate_of_fire`, `ammo_consumption`, `ammo_efficiency`, `default_weapon_number`, `image_url`) VALUES
(1, 'Wraithverge', '10', '6', 36, '8', 4, 'images/wraithverge.png'),
(2, 'Mace of Contrition', '1', '5', 0, 'infinite', 1, 'images/maceOfContrition.png'),
(3, 'Arc of Death', '5', '3', 5, '3', 3, 'images/arcOfDeath.png'),
(4, 'Frost Shards', '3', '4', 3, '2', 2, 'images/frostShards.png'),
(5, 'Hammer of Retribution', '7', '3', 3, '10', 3, 'images/hammerOfRetribution.png'),
(6, 'Hellstaff', '6', '9', 1, '9', 5, 'images/hellstaff.png'),
(7, 'Chainsaw (Doom)', '3', '10', 0, 'infinite', 1, 'images/chainsawDoom.png'),
(8, 'Super Shotgun', '5', '2', 2, '9', 3, 'images/superShotgun.png'),
(9, 'Rocket Launcher (Doom)', '8', '7', 1, '5', 5, 'images/rocketLauncherDoom.png'),
(10, 'Serpent Staff', '6', '8', 1, '6', 2, 'images/serpentStaff.png'),
(11, 'Firemace', '7', '9', 1, '1', 7, 'images/firemace.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
