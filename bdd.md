-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- HÃ´te : 127.0.0.1:3306
-- GÃ©nÃ©rÃ© le : lun. 30 aoÃ»t 2021 Ã  14:49
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de donnÃ©es : `exam_poo`
--

-- --------------------------------------------------------

--
-- Structure de la table `motos`
--

DROP TABLE IF EXISTS `motos`;
CREATE TABLE IF NOT EXISTS `motos` (
  `id_motos` int NOT NULL AUTO_INCREMENT,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id_motos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- DÃ©chargement des donnÃ©es de la table `motos`
--

INSERT INTO `motos` (`id_motos`, `brand`, `model`, `type`, `image`) VALUES
(1, 'YAMAHA', 'MT-10', 'Roadster', ''),
(2, 'Toyota', 'RT200', 'Custom', ''),
(3, 'Honda', 'MC 20', 'Sportive', ''),
(4, 'YAMAHA', 'ZZ 677', 'Enduro', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
