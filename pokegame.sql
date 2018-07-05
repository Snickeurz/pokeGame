-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 05 Juillet 2018 à 07:44
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pokegame`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(11) NOT NULL,
  `vendeur` varchar(20) NOT NULL,
  `pokemon` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id`, `vendeur`, `pokemon`, `prix`, `description`, `date`) VALUES
(1, 'Migouel', 'Pikaraille', 245, 'Pokemon de luxe', '2018-04-24'),
(2, 'JP', 'Perozor', 500, 'Un peu craintif', '2018-04-17'),
(3, 'SIBAUD', 'Tartiflette', 5156, 'descruotuin ', '2018-07-04');

-- --------------------------------------------------------

--
-- Structure de la table `lieux`
--

CREATE TABLE `lieux` (
  `id` int(11) NOT NULL,
  `lieu` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lieux`
--

INSERT INTO `lieux` (`id`, `lieu`) VALUES
(1, 'Desert'),
(2, 'Montagne'),
(3, 'Plage'),
(4, 'Prairie');

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `espece` varchar(30) DEFAULT NULL,
  `type1` varchar(30) DEFAULT NULL,
  `type2` varchar(30) DEFAULT NULL,
  `evolution` tinyint(1) DEFAULT NULL,
  `sexe` tinyint(4) NOT NULL,
  `xp` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `vie` int(11) NOT NULL,
  `heureEntrainement` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pokemon`
--

INSERT INTO `pokemon` (`id`, `espece`, `type1`, `type2`, `evolution`, `sexe`, `xp`, `lvl`, `vie`, `heureEntrainement`) VALUES
(3, 'Tartiflette', '8', '12', 0, 0, 600, 60, 456, '0000-00-00'),
(4, 'Pikachu', '2', '5', 1, 0, 56, 5, 555, '0000-00-00'),
(5, 'Luxio', '1', '2', 1, 0, 406, 65, 4560, '2018-07-03'),
(6, 'Papilord', '9', '7', 1, 0, 77, 7, 321, '0000-00-00'),
(7, 'PokemonTropBadass', '3', '17', 0, 0, 786, 88, 987, '0000-00-00'),
(8, 'Lockpin', '2', '10', 1, 0, 456, 65, 654, '0000-00-00'),
(10, 'Salameche', '6', '8', 1, 0, 78, 4, 65, '0000-00-00'),
(11, 'bulbizare', '9', '2', 1, 0, 9789, 123, 782, '2015-03-02');

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

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `xp` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `solde` int(11) NOT NULL,
  `new_user` tinyint(4) NOT NULL,
  `starter` varchar(25) NOT NULL,
  `arrayPokemon` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `pseudo`, `telephone`, `email`, `pass`, `xp`, `lvl`, `solde`, `new_user`, `starter`, `arrayPokemon`) VALUES
(2, 'SIBAUD', 'Nicolas', 'Guacamole', '0637322907', 'nicolassibaud@hotmail.com', '123', 2600, 666, 5000, 0, 'salameche', '3,4,5,6,7,8,10'),
(3, 'Henry', 'Charle', 'kirikou', '0102030405', 'Charle.henry@wanadoo.com', '123', 0, 1, 5000, 0, 'bulbizare', '3,4,5,7'),
(7, 'Tanatos', 'Zeus', 'ZeusTanaos', '123', '123@free.fr', '123', 0, 1, 5000, 0, 'pikachu', '4'),
(8, 'SIBAUD', 'Nicolas', 'tartipute', '0637322907', 'nicolassibaud@gmail.com', '123', 0, 1, 5000, 0, 'pikachu', ',');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lieux`
--
ALTER TABLE `lieux`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `lieux`
--
ALTER TABLE `lieux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
