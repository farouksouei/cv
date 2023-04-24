-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 avr. 2023 à 21:02
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `education` text NOT NULL,
  `experience` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `job_description` text NOT NULL,
  `skill1` varchar(255) NOT NULL,
  `skill2` varchar(255) NOT NULL,
  `skill3` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `start_date_edu` date DEFAULT NULL,
  `end_date_edu` date DEFAULT NULL,
  `edu_description` text DEFAULT NULL,
  `job_title` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id`, `first_name`, `last_name`, `email`, `phone`, `address`, `city`, `state`, `zip_code`, `summary`, `education`, `experience`, `start_date`, `end_date`, `job_description`, `skill1`, `skill2`, `skill3`, `image`, `degree`, `institution`, `start_date_edu`, `end_date_edu`, `edu_description`, `job_title`) VALUES
(1, 'farouk', 'souei', 'farouksouei@gmail.com', '23351414', '05 Rue bahr Jaoua', 'Ghazela City', 'Ariana', '2084', '\'(s-(d_èçf-_oyipmublvçè', '', '', '2023-04-25', '2023-04-09', 'ko^\r\n*ojkoi,\r\nopîjçà_h$p_=', 'dzdzaFEF', 'ZEFOIzbefnoiue', 'lomEZUFBZE', 'images/ph2.png', 'CS degree', NULL, NULL, NULL, NULL, 'dd'),
(2, 'farouk', 'souei', 'farouksouei@gmail.com', '23351414', '05 Rue bahr Jaoua', 'Ghazela City', 'Ariana', '2084', '\'(s-(d_èçf-_oyipmublvçè', '', '', '2023-04-25', '2023-04-09', 'ko^\r\n*ojkoi,\r\nopîjçà_h$p_=', 'dzdzaFEF', 'ZEFOIzbefnoiue', 'lomEZUFBZE', 'images/ph2.png', 'CS degree', NULL, NULL, NULL, NULL, 'dd'),
(3, 'farouk', 'souei', 'farouksouei@gmail.com', '23351414', '05 Rue bahr Jaoua', 'Ghazela City', 'Ariana', '2084', 'zfEEZ', '', '', '2023-04-12', '2023-03-27', 'DZadz', 'Eefz', 'ezf', 'efz', 'images/ph 8.png', 'CS degree', NULL, NULL, NULL, NULL, 'fZE4'),
(4, 'farouk', 'souei', 'farouksouei@gmail.com', '23351414', '05 Rue bahr Jaoua', 'Ghazela City', 'Ariana', '2084', 'zfEEZ', '', '', '2023-04-12', '2023-03-27', 'DZadz', 'Eefz', 'ezf', 'efz', 'images/ph 8.png', 'CS degree', NULL, NULL, NULL, NULL, 'fZE4'),
(5, 'farouk', 'souei', 'farouksouei@gmail.com', '23351414', '05 Rue bahr Jaoua', 'Ghazela City', 'Ariana', '2084', 'zfEEZ', '', '', '2023-04-12', '2023-03-27', 'DZadz', 'Eefz', 'ezf', 'efz', 'images/ph 8.png', 'CS degree', 'Iset', '2023-04-14', '2023-04-10', 'fe', 'fZE4');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
