-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 17 nov. 2025 à 15:54
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `societe`
--

-- --------------------------------------------------------

--
-- Structure de la table `dirigeants`
--

DROP TABLE IF EXISTS `dirigeants`;
CREATE TABLE IF NOT EXISTS `dirigeants` (
  `id` int NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `poste` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `salaire` float NOT NULL,
  `date_embauche` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dirigeants`
--

INSERT INTO `dirigeants` (`id`, `prenom`, `nom`, `poste`, `email`, `salaire`, `date_embauche`) VALUES
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15'),
(0, 'issa', 'issaadi', 'patron', 'issaissaadi@gmail.com', 10000, '2025-07-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
