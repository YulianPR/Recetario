-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.29 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table recipes_db.tb_recipes
CREATE TABLE IF NOT EXISTS `tb_recipes` (
  `id_recipe` int NOT NULL AUTO_INCREMENT,
  `recipe_name` text NOT NULL,
  `recipe_category_id` int NOT NULL DEFAULT '0',
  `recipe_time` text NOT NULL,
  `recipe_preparation` text NOT NULL,
  `recipe_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `recipe_ingredients` text NOT NULL,
  `recipes_steps` text NOT NULL,
  `recipe_complex_id` int NOT NULL DEFAULT '0',
  `recipe_like_id` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_recipe`),
  KEY `FK_category` (`recipe_category_id`),
  KEY `FK_complex` (`recipe_complex_id`),
  CONSTRAINT `FK_category` FOREIGN KEY (`recipe_category_id`) REFERENCES `tb_recipes_category` (`id_recipe_category`),
  CONSTRAINT `FK_complex` FOREIGN KEY (`recipe_complex_id`) REFERENCES `tb_recipes_complex` (`id_recipe_complex`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table recipes_db.tb_recipes: ~5 rows (approximately)
DELETE FROM `tb_recipes`;
/*!40000 ALTER TABLE `tb_recipes` DISABLE KEYS */;
INSERT INTO `tb_recipes` (`id_recipe`, `recipe_name`, `recipe_category_id`, `recipe_time`, `recipe_preparation`, `recipe_image`, `recipe_ingredients`, `recipes_steps`, `recipe_complex_id`, `recipe_like_id`) VALUES
	(73, 'Pollo al horno', 1, '10  mins', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a bibendum nunc, eget blandit orci. Curabitur egestas sem sed metus sagittis, at blandit dolor consectetur. Proin eget semper nisl, ultrices pharetra ex. Pellentesque tincidunt sit amet tellus eget dignissim. Donec id efficitur lectus, ut commodo sapien. Morbi quam ex, vulputate id auctor nec, laoreet a neque. Sed tincidunt nisl sit amet urna vestibulum vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam ipsum erat, convallis at ex ut, vestibulum dictum enim.\r\n\r\nAliquam at enim condimentum, tincidunt libero eu, euismod mauris. Morbi metus est, posuere id mi non, suscipit egestas eros. Curabitur nec turpis ac eros ultrices suscipit at sit amet leo. Praesent ornare varius purus eu malesuada. Nullam congue elementum est, eu sodales sem accumsan ut. Phasellus consectetur ultrices urna, vel mollis arcu fringilla a. Nunc diam quam, eleifend sed libero sed, auctor aliquet eros. Vestibulum eu dignissim arcu. Donec ut lacus in massa eleifend cursus id et lectus.', 'baked-chicken-wings-in-the-asian-style-min.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\nAliquam tincidunt mauris eu risus.\r\nVestibulum auctor dapibus neque.\r\nNunc dignissim risus id metus.\r\nCras ornare tristique elit.\r\nVivamus vestibulum ntulla nec ante.\r\nPraesent placerat risus quis eros.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nPellentesque et est congue mi tempus egestas.\r\nAenean id mi non odio dapibus molestie non vitae mi.\r\nMorbi congue tortor eu vestibulum aliquet.\r\nUt eget dui a nisl bibendum venenatis.\r\nUt nec lacus maximus, rhoncus nulla sed, dignissim felis.\r\nFusce placerat augue sed blandit sagittis.\r\nPellentesque ut tellus id sapien eleifend eleifend.\r\nNulla consequat odio ut pellentesque suscipit.\r\nSuspendisse vel dui finibus, rutrum elit ac, porta lacus.\r\nQuisque quis lacus lobortis, finibus mi non, commodo nisi.\r\nInteger sit amet sem vel tortor convallis lacinia.\r\nProin interdum massa vel nunc venenatis molestie.\r\nPraesent id sapien lacinia, accumsan eros rutrum, sodales ex.\r\nDonec et neque venenatis, condimentum massa vitae, convallis magna.\r\nNullam malesuada nunc quis auctor viverra.', 1, 0),
	(74, 'Hamburguesa', 2, '5  mins', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a bibendum nunc, eget blandit orci. Curabitur egestas sem sed metus sagittis, at blandit dolor consectetur. Proin eget semper nisl, ultrices pharetra ex. Pellentesque tincidunt sit amet tellus eget dignissim. Donec id efficitur lectus, ut commodo sapien. Morbi quam ex, vulputate id auctor nec, laoreet a neque. Sed tincidunt nisl sit amet urna vestibulum vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam ipsum erat, convallis at ex ut, vestibulum dictum enim.\r\n\r\nAliquam at enim condimentum, tincidunt libero eu, euismod mauris. Morbi metus est, posuere id mi non, suscipit egestas eros. Curabitur nec turpis ac eros ultrices suscipit at sit amet leo. Praesent ornare varius purus eu malesuada. Nullam congue elementum est, eu sodales sem accumsan ut. Phasellus consectetur ultrices urna, vel mollis arcu fringilla a. Nunc diam quam, eleifend sed libero sed, auctor aliquet eros. Vestibulum eu dignissim arcu. Donec ut lacus in massa eleifend cursus id et lectus.', 'big-sandwich-hamburger-with-juicy-beef-burger-cheese-tomato-and-red-onion-on-wooden-table-min.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\nAliquam tincidunt mauris eu risus.\r\nVestibulum auctor dapibus neque.\r\nNunc dignissim risus id metus.\r\nCras ornare tristique elit.\r\nVivamus vestibulum ntulla nec ante.\r\nPraesent placerat risus quis eros.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nPellentesque et est congue mi tempus egestas.\r\nAenean id mi non odio dapibus molestie non vitae mi.\r\nMorbi congue tortor eu vestibulum aliquet.\r\nUt eget dui a nisl bibendum venenatis.\r\nUt nec lacus maximus, rhoncus nulla sed, dignissim felis.\r\nFusce placerat augue sed blandit sagittis.\r\nPellentesque ut tellus id sapien eleifend eleifend.\r\nNulla consequat odio ut pellentesque suscipit.\r\nSuspendisse vel dui finibus, rutrum elit ac, porta lacus.\r\nQuisque quis lacus lobortis, finibus mi non, commodo nisi.\r\nInteger sit amet sem vel tortor convallis lacinia.\r\nProin interdum massa vel nunc venenatis molestie.\r\nPraesent id sapien lacinia, accumsan eros rutrum, sodales ex.\r\nDonec et neque venenatis, condimentum massa vitae, convallis magna.\r\nNullam malesuada nunc quis auctor viverra.', 2, 0),
	(75, 'Tacos Mexicanos', 4, '20  mins', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a bibendum nunc, eget blandit orci. Curabitur egestas sem sed metus sagittis, at blandit dolor consectetur. Proin eget semper nisl, ultrices pharetra ex. Pellentesque tincidunt sit amet tellus eget dignissim. Donec id efficitur lectus, ut commodo sapien. Morbi quam ex, vulputate id auctor nec, laoreet a neque. Sed tincidunt nisl sit amet urna vestibulum vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam ipsum erat, convallis at ex ut, vestibulum dictum enim.\r\n\r\nAliquam at enim condimentum, tincidunt libero eu, euismod mauris. Morbi metus est, posuere id mi non, suscipit egestas eros. Curabitur nec turpis ac eros ultrices suscipit at sit amet leo. Praesent ornare varius purus eu malesuada. Nullam congue elementum est, eu sodales sem accumsan ut. Phasellus consectetur ultrices urna, vel mollis arcu fringilla a. Nunc diam quam, eleifend sed libero sed, auctor aliquet eros. Vestibulum eu dignissim arcu. Donec ut lacus in massa eleifend cursus id et lectus.', 'mexican-tacos-with-beef-in-tomato-sauce-and-salsa-min.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\nAliquam tincidunt mauris eu risus.\r\nVestibulum auctor dapibus neque.\r\nNunc dignissim risus id metus.\r\nCras ornare tristique elit.\r\nVivamus vestibulum ntulla nec ante.\r\nPraesent placerat risus quis eros.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nPellentesque et est congue mi tempus egestas.\r\nAenean id mi non odio dapibus molestie non vitae mi.\r\nMorbi congue tortor eu vestibulum aliquet.\r\nUt eget dui a nisl bibendum venenatis.\r\nUt nec lacus maximus, rhoncus nulla sed, dignissim felis.\r\nFusce placerat augue sed blandit sagittis.\r\nPellentesque ut tellus id sapien eleifend eleifend.\r\nNulla consequat odio ut pellentesque suscipit.\r\nSuspendisse vel dui finibus, rutrum elit ac, porta lacus.\r\nQuisque quis lacus lobortis, finibus mi non, commodo nisi.\r\nInteger sit amet sem vel tortor convallis lacinia.\r\nProin interdum massa vel nunc venenatis molestie.\r\nPraesent id sapien lacinia, accumsan eros rutrum, sodales ex.\r\nDonec et neque venenatis, condimentum massa vitae, convallis magna.\r\nNullam malesuada nunc quis auctor viverra.', 3, 0),
	(76, 'Pasta con camarones', 5, '10  mins', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a bibendum nunc, eget blandit orci. Curabitur egestas sem sed metus sagittis, at blandit dolor consectetur. Proin eget semper nisl, ultrices pharetra ex. Pellentesque tincidunt sit amet tellus eget dignissim. Donec id efficitur lectus, ut commodo sapien. Morbi quam ex, vulputate id auctor nec, laoreet a neque. Sed tincidunt nisl sit amet urna vestibulum vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam ipsum erat, convallis at ex ut, vestibulum dictum enim.\r\n\r\nAliquam at enim condimentum, tincidunt libero eu, euismod mauris. Morbi metus est, posuere id mi non, suscipit egestas eros. Curabitur nec turpis ac eros ultrices suscipit at sit amet leo. Praesent ornare varius purus eu malesuada. Nullam congue elementum est, eu sodales sem accumsan ut. Phasellus consectetur ultrices urna, vel mollis arcu fringilla a. Nunc diam quam, eleifend sed libero sed, auctor aliquet eros. Vestibulum eu dignissim arcu. Donec ut lacus in massa eleifend cursus id et lectus.', 'Pasta-con-camarones-min.png', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\nAliquam tincidunt mauris eu risus.\r\nVestibulum auctor dapibus neque.\r\nNunc dignissim risus id metus.\r\nCras ornare tristique elit.\r\nVivamus vestibulum ntulla nec ante.\r\nPraesent placerat risus quis eros.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nPellentesque et est congue mi tempus egestas.\r\nAenean id mi non odio dapibus molestie non vitae mi.\r\nMorbi congue tortor eu vestibulum aliquet.\r\nUt eget dui a nisl bibendum venenatis.\r\nUt nec lacus maximus, rhoncus nulla sed, dignissim felis.\r\nFusce placerat augue sed blandit sagittis.\r\nPellentesque ut tellus id sapien eleifend eleifend.\r\nNulla consequat odio ut pellentesque suscipit.\r\nSuspendisse vel dui finibus, rutrum elit ac, porta lacus.\r\nQuisque quis lacus lobortis, finibus mi non, commodo nisi.\r\nInteger sit amet sem vel tortor convallis lacinia.\r\nProin interdum massa vel nunc venenatis molestie.\r\nPraesent id sapien lacinia, accumsan eros rutrum, sodales ex.\r\nDonec et neque venenatis, condimentum massa vitae, convallis magna.\r\nNullam malesuada nunc quis auctor viverra.', 4, 0),
	(77, 'Pescado al ajillo', 6, '10  mins', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a bibendum nunc, eget blandit orci. Curabitur egestas sem sed metus sagittis, at blandit dolor consectetur. Proin eget semper nisl, ultrices pharetra ex. Pellentesque tincidunt sit amet tellus eget dignissim. Donec id efficitur lectus, ut commodo sapien. Morbi quam ex, vulputate id auctor nec, laoreet a neque. Sed tincidunt nisl sit amet urna vestibulum vehicula. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam ipsum erat, convallis at ex ut, vestibulum dictum enim.\r\n\r\nAliquam at enim condimentum, tincidunt libero eu, euismod mauris. Morbi metus est, posuere id mi non, suscipit egestas eros. Curabitur nec turpis ac eros ultrices suscipit at sit amet leo. Praesent ornare varius purus eu malesuada. Nullam congue elementum est, eu sodales sem accumsan ut. Phasellus consectetur ultrices urna, vel mollis arcu fringilla a. Nunc diam quam, eleifend sed libero sed, auctor aliquet eros. Vestibulum eu dignissim arcu. Donec ut lacus in massa eleifend cursus id et lectus.', 'Receta-de-Pescado-al-AJILLO-min.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\nAliquam tincidunt mauris eu risus.\r\nVestibulum auctor dapibus neque.\r\nNunc dignissim risus id metus.\r\nCras ornare tristique elit.\r\nVivamus vestibulum ntulla nec ante.\r\nPraesent placerat risus quis eros.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\nPellentesque et est congue mi tempus egestas.\r\nAenean id mi non odio dapibus molestie non vitae mi.\r\nMorbi congue tortor eu vestibulum aliquet.\r\nUt eget dui a nisl bibendum venenatis.\r\nUt nec lacus maximus, rhoncus nulla sed, dignissim felis.\r\nFusce placerat augue sed blandit sagittis.\r\nPellentesque ut tellus id sapien eleifend eleifend.\r\nNulla consequat odio ut pellentesque suscipit.\r\nSuspendisse vel dui finibus, rutrum elit ac, porta lacus.\r\nQuisque quis lacus lobortis, finibus mi non, commodo nisi.\r\nInteger sit amet sem vel tortor convallis lacinia.\r\nProin interdum massa vel nunc venenatis molestie.\r\nPraesent id sapien lacinia, accumsan eros rutrum, sodales ex.\r\nDonec et neque venenatis, condimentum massa vitae, convallis magna.\r\nNullam malesuada nunc quis auctor viverra.', 4, 0);
/*!40000 ALTER TABLE `tb_recipes` ENABLE KEYS */;

-- Dumping structure for table recipes_db.tb_recipes_category
CREATE TABLE IF NOT EXISTS `tb_recipes_category` (
  `id_recipe_category` int NOT NULL AUTO_INCREMENT,
  `recipe_category` text NOT NULL,
  PRIMARY KEY (`id_recipe_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table recipes_db.tb_recipes_category: ~6 rows (approximately)
DELETE FROM `tb_recipes_category`;
/*!40000 ALTER TABLE `tb_recipes_category` DISABLE KEYS */;
INSERT INTO `tb_recipes_category` (`id_recipe_category`, `recipe_category`) VALUES
	(1, 'Breakfast'),
	(2, 'Drinks'),
	(3, 'Lunch'),
	(4, 'Desserts'),
	(5, 'Soups'),
	(6, 'Entrees');
/*!40000 ALTER TABLE `tb_recipes_category` ENABLE KEYS */;

-- Dumping structure for table recipes_db.tb_recipes_complex
CREATE TABLE IF NOT EXISTS `tb_recipes_complex` (
  `id_recipe_complex` int NOT NULL AUTO_INCREMENT,
  `recipe_complex` text NOT NULL,
  PRIMARY KEY (`id_recipe_complex`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table recipes_db.tb_recipes_complex: ~3 rows (approximately)
DELETE FROM `tb_recipes_complex`;
/*!40000 ALTER TABLE `tb_recipes_complex` DISABLE KEYS */;
INSERT INTO `tb_recipes_complex` (`id_recipe_complex`, `recipe_complex`) VALUES
	(1, 'Fácil'),
	(2, 'Medio'),
	(3, 'Dificil'),
	(4, 'Avanzado');
/*!40000 ALTER TABLE `tb_recipes_complex` ENABLE KEYS */;

-- Dumping structure for table recipes_db.tb_recipes_likes
CREATE TABLE IF NOT EXISTS `tb_recipes_likes` (
  `id_recipe_like` int NOT NULL AUTO_INCREMENT,
  `id_recipe` int DEFAULT '0',
  `recipe_likes` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_recipe_like`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table recipes_db.tb_recipes_likes: ~0 rows (approximately)
DELETE FROM `tb_recipes_likes`;
/*!40000 ALTER TABLE `tb_recipes_likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_recipes_likes` ENABLE KEYS */;

-- Dumping structure for table recipes_db.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table recipes_db.tb_users: ~0 rows (approximately)
DELETE FROM `tb_users`;
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` (`id_user`, `user_name`, `password`) VALUES
	(1, 'Administrador', '12345678');
/*!40000 ALTER TABLE `tb_users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
