/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP DATABASE IF EXISTS `aouka`;
CREATE DATABASE IF NOT EXISTS `aouka` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `aouka`;

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `category`, `name`, `price`, `image`) VALUES
	(1, 'yacht', '25 pers - Yacht de luxe', 250, 'burning_boat.jpg'),
	(2, 'voilier', '4 pers - Voilier de plaisance', 20, 'voilier.webp'),
	(3, 'bateau cabine', '10 pers - Bateau de plaisance avec cabine', 35, 'bateau1.jpg'),
	(4, 'vertical', '1 pers - Bateau vertical', 45, 'vertical.jpg'),
	(5, 'militaire', '500 pers - Bateau de guerre (avec torpilles)', 530, 'war.jpeg'),
	(6, 'magie', '235 pers - Bateau flotant', 270, 'float.jpg'),
	(7, 'pirate', '80 pers - Bateau pirate', 195, 'pirate.jpg'),
	(8, 'Deltaplane, bateau ', '2 pers - Delta\'Boat', 35, 'deltaboat.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
