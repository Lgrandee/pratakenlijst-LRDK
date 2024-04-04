-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Versie:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Databasestructuur van takenlijst wordt geschreven
CREATE DATABASE IF NOT EXISTS `takenlijst` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `takenlijst`;

-- Structuur van  tabel takenlijst.taken wordt geschreven
CREATE TABLE IF NOT EXISTS `taken` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titel` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  `afdeling` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'todo',
  `deadline` date DEFAULT NULL,
  `user` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumpen data van tabel takenlijst.taken: ~0 rows (ongeveer)

-- Structuur van  tabel takenlijst.users wordt geschreven
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(320) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `achternaam` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumpen data van tabel takenlijst.users: ~3 rows (ongeveer)
INSERT INTO `users` (`id`, `naam`, `username`, `password`, `email`, `achternaam`) VALUES
	(1, 'Testgebruiker 1', 'user1', '$2y$10$XQwbcsOWgM0KvAbya2Ad2efBwTLra2CzeduJtAuY8.BW9EHx.cFKa', '', ''),
	(2, 'Testgebruiker 2', 'user2', '$2y$10$HoDxSJa/4NcFcJ.U.kj9N.cSBgcm75IwUkdgxJhLjRXY/K2cP8Fl.', '', ''),
	(3, 'Testgebruiker 3', 'user3', '$2y$10$M7vkYfdWMYqLzvCqjlOh7.nPc79zwDxtItUOh/91teGikS/XrpNuO', '', '');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
