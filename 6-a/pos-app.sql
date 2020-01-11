-- --------------------------------------------------------
-- Host:                         127.17.0.1
-- Server version:               5.5.62 - MySQL Community Server (GPL)
-- Server OS:                    linux-glibc2.12
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for pos-app
CREATE DATABASE IF NOT EXISTS `pos-app` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pos-app`;

-- Dumping structure for table pos-app.cashier
CREATE TABLE IF NOT EXISTS `cashier` (
  `id_cashier` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cashier`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table pos-app.cashier: ~0 rows (approximately)
/*!40000 ALTER TABLE `cashier` DISABLE KEYS */;
INSERT INTO `cashier` (`id_cashier`, `name`) VALUES
	(1, 'Pevita Oearce'),
	(2, 'Raisa Andrianan'),
	(3, 'Supriyanto');
/*!40000 ALTER TABLE `cashier` ENABLE KEYS */;

-- Dumping structure for table pos-app.category
CREATE TABLE IF NOT EXISTS `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table pos-app.category: ~0 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id_category`, `name`) VALUES
	(1, 'Food'),
	(2, 'Drink');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table pos-app.product
CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `id_category` int(10) DEFAULT NULL,
  `id_cashier` int(10) DEFAULT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table pos-app.product: ~1 rows (approximately)
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` (`id_product`, `name`, `price`, `id_category`, `id_cashier`) VALUES
	(1, 'Latte', 10000, 2, 1),
	(2, 'Cake', 20000, 1, 2),
	(3, 'Soto Ayam', 15000, 1, 3);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
