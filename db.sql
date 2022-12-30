/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `aouka` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `aouka`;

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`, `category`, `name`, `price`, `image`, `description`) VALUES
	(1, 'yacht', '25 pers - Yacht de luxe', 250, 'burning_boat.jpg', 'Ce yacht de luxe est un bateau de rêve, conçu pour offrir le summum du confort et de l\'élégance. Sa coque moderne et élancée lui confère une allure raffinée, tandis que son intérieur spacieux et haut de gamme est aménagé avec le plus grand soin.'),
	(2, 'voilier', '4 pers - Voilier de plaisance', 20, 'voilier.webp', 'Ce voilier est un modèle de marque reconnue, conçu pour naviguer en toute sécurité et confort. Il est équipé d\'un moteur puissant et d\'une coque solide, qui lui permettent de affronter les conditions météorologiques les plus difficiles.'),
	(3, 'bateau cabine', '10 pers - Bateau de plaisance avec cabine', 35, 'bateau1.jpg', 'Ce bateau cabine est un modèle de marque reconnue, conçu pour naviguer en toute sécurité et confort. Sa coque solide et son moteur puissant lui permettent de affronter les conditions météorologiques les plus difficiles.'),
	(4, 'vertical', '1 pers - Bateau vertical', 45, 'vertical.jpg', 'Ce bateau est un navire de qualité, conçu pour naviguer en toute sécurité et confort. Sa coque solide et son moteur puissant lui permettent de affronter les conditions météorologiques les plus difficiles.'),
	(5, 'militaire', '500 pers - Bateau de guerre (avec torpilles)', 530, 'war.jpeg', 'Le navire de guerre "Le Redoutable" est à louer pour des missions militaires ou des exercices de formation. Ce navire est un croiseur lanceur de missiles de classe Ticonderoga, long de 178 mètres et pesant près de 9 000 tonnes. Il est doté d\'une puissante batterie de missiles de croisière et de canons de défense aérienne. Le Redoutable est également équipé d\'un système de défense antiaérienne et d\'un hangar pouvant accueillir jusqu\'à 20 avions et hélicoptères.\r\n\r\nLe navire est en excellent état, ayant subi une révision complète de ses systèmes de propulsion et de ses armes au cours des deux dernières années. Il est prêt à être mis en service immédiatement et est idéal pour une nation souhaitant mettre à disposition de ses forces armées un navire de guerre de haute qualité.\r\n\r\nLe prix de location du navire "Le Redoutable" est de 530€ par jour. Si vous êtes intéressé par la location de ce navire de guerre pour vos missions ou exercices militaires, n\'hésitez pas à nous contacter pour plus d\'informations.'),
	(6, 'magie', '200 pers - Bateau flotant', 270, 'float.jpg', 'Le navire magique "L\'Émeraude" est à louer pour des croisières de rêve ou des événements spéciaux. Ce navire est unique en son genre, car il flotte grâce à ses pouvoirs magiques et peut naviguer sur l\'eau comme sur la terre. Il est long de 50 mètres et peut accueillir jusqu\'à 200 passagers confortablement. Le navire est entièrement équipé de toutes les commodités nécessaires pour passer des vacances de rêve, y compris des chambres luxueuses, un restaurant gastronomique, une piscine sur le pont et un salon de détente. En outre, l\'Émeraude est doté d\'une équipe de magiciens professionnels qui proposent des spectacles de magie tout au long de la croisière.\r\n\r\nLe prix de location du navire "L\'Émeraude" est de 270 dollars par jour. Si vous êtes intéressé par la location de ce navire magique pour votre prochaine croisière ou événement spécial, n\'hésitez pas à nous contacter pour plus d\'informations.'),
	(7, 'pirate', '80 pers - Bateau pirate', 195, 'pirate.jpg', 'Le navire pirate "Le Vaisseau Fantôme" est à louer pour des croisières thématiques ou des événements spéciaux. Ce navire est un galion espagnol reconverti en navire pirate, long de 80 mètres et capable d\'accueillir jusqu\'à 80 passagers. Il est doté de tous les accessoires nécessaires pour une croisière pirate authentique, y compris des canons, des lanternes, des drapeaux noirs et une figure de proue terrifiante. Le navire est entièrement équipé de toutes les commodités nécessaires pour passer des vacances de rêve, y compris des chambres confortables, un restaurant proposant de la nourriture pirate typique, une piscine sur le pont et un salon de détente. En outre, l\'équipage du Vaisseau Fantôme est habillé en costume de pirate et propose des spectacles de combat de sabre et des chasses au trésor tout au long de la croisière.\r\n\r\nLe prix de location du navire "Le Vaisseau Fantôme" est de 195 dollars par jour. Si vous êtes intéressé par la location de ce navire pirate pour votre prochaine croisière thématique ou événement spécial, n\'hésitez pas à nous contacter pour plus d\'informations.'),
	(8, 'Deltaplane, bateau ', '2 pers - Delta\'Boat', 35, 'deltaboat.jpg', 'Le navire/deltaplane "Le Cygne" est à louer pour des aventures romantiques ou des escapades en tête à tête. Ce navire est unique en son genre, car il peut se transformer en deltaplane et naviguer aussi bien sur l\'eau que dans les airs. Il est long de 2 mètres et peut accueillir deux passagers confortablement.\r\n\r\nLe navire est entièrement équipé de toutes les commodités nécessaires pour passer des vacances romantiques, y compris une chambre luxueuse avec un lit king size, un salon de détente et une cuisine entièrement équipée. En outre, le Cygne est doté d\'un pilote professionnel qui peut emmener les passagers sur de spectaculaires vols en deltaplane au-dessus des paysages les plus spectaculaires.\r\n\r\nLe prix de location du navire/deltaplane "Le Cygne" est de 35€ par jour. Si vous êtes intéressé par la location de ce navire/deltaplane pour votre prochaine aventure romantique ou escapade en tête à tête, n\'hésitez pas à nous contacter pour plus d\'informations.');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `reservation` (
  `name` varchar(30) DEFAULT NULL,
  `sname` varchar(30) DEFAULT NULL,
  `guest` int(11) DEFAULT NULL,
  `boat` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `datef` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
