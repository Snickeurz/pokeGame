-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Avril 2018 à 19:41
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pokemon`
--

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `type1` varchar(30) DEFAULT NULL,
  `type2` varchar(30) DEFAULT NULL,
  `evolution` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pokemon`
--

INSERT INTO `pokemon` (`id`, `nom`, `type1`, `type2`, `evolution`) VALUES
(3, 'Tartiflette', '8', '12', 0),
(4, 'Pikachu', '2', '5', 1),
(5, 'Luxio', '1', '2', 1),
(6, 'Papilord', '9', '7', 1),
(7, 'PokemonTropBadass', '3', '17', 0),
(8, 'Lockpin', '2', '10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `libelleType` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `libelleType`) VALUES
(1, 'acier'),
(2, 'combat'),
(3, 'dragon'),
(4, 'eau'),
(5, 'electrik'),
(6, 'fee'),
(7, 'feu'),
(8, 'glace'),
(9, 'insecte'),
(10, 'normal'),
(11, 'plante'),
(12, 'poison'),
(13, 'psy'),
(14, 'roche'),
(15, 'sol'),
(16, 'spectre'),
(17, 'tenebres'),
(18, 'vol');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
