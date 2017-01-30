-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 30 Janvier 2017 à 13:12
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cake`
--

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `note` float NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `notes`
--

INSERT INTO `notes` (`id`, `note`, `student_id`, `subject_id`) VALUES
(3, 11, 27, '5'),
(5, 8, 13, '2'),
(6, 17, 13, '1'),
(7, 19, 25, '4'),
(8, 9, 27, '2'),
(9, 12, 13, '1'),
(12, 13.5, 23, '3'),
(13, 18, 14, '4'),
(14, 6.5, 31, '6'),
(21, 16, 31, '4'),
(20, 19.5, 22, '5'),
(22, 9.5, 23, '1'),
(23, 12, 27, '1');

-- --------------------------------------------------------

--
-- Structure de la table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `students`
--

INSERT INTO `students` (`id`, `name`, `first_name`, `birth_date`, `created`) VALUES
(13, 'Claudel', 'Marie-Alice', '1989-04-14', '2017-01-27 09:11:29'),
(31, 'Dalton', 'Eric', '2001-02-03', '2017-01-30 09:26:30'),
(27, 'Gaston', 'john', '1990-06-04', '2017-01-27 16:55:45'),
(14, 'Rachford', 'Marcus', '1991-02-03', '2017-01-27 09:52:52'),
(23, 'Crafte', 'Justine', NULL, '2017-01-27 15:34:39'),
(22, 'Ducret', 'Cecile', '1997-02-04', '2017-01-27 13:20:07'),
(25, 'Rodrigez', 'Maxime', '1992-05-04', '2017-01-27 15:57:21'),
(32, 'Lambar', 'Christian', NULL, '2017-01-30 11:35:46');

-- --------------------------------------------------------

--
-- Structure de la table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(1, 'Mathématiques'),
(2, 'Français'),
(3, 'Histoire'),
(4, 'Sport'),
(5, 'Musique'),
(6, 'Sciences');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT pour la table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
