-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 03 Mai 2018 à 21:11
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pokegame`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendeur` varchar(20) NOT NULL,
  `pokemon` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` varchar(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id`, `vendeur`, `pokemon`, `prix`, `description`, `date`) VALUES
(1, 'Migouel', 'Pikaraille', 245, 'Pokemon de luxe', '2018-04-24'),
(2, 'JP', 'Perozor', 500, 'Un peu craintif', '2018-04-17');

-- --------------------------------------------------------

--
-- Structure de la table `lieux`
--

CREATE TABLE IF NOT EXISTS `lieux` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `pokemon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `espece` varchar(30) DEFAULT NULL,
  `type1` varchar(30) DEFAULT NULL,
  `type2` varchar(30) DEFAULT NULL,
  `evolution` tinyint(1) DEFAULT NULL,
  `sexe` tinyint(4) NOT NULL,
  `xp` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `vie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `pokemon`
--

INSERT INTO `pokemon` (`id`, `espece`, `type1`, `type2`, `evolution`, `sexe`, `xp`, `lvl`, `vie`) VALUES
(3, 'Tartiflette', '8', '12', 0, 0, 600, 60, 456),
(4, 'Pikachu', '2', '5', 1, 0, 56, 5, 555),
(5, 'Luxio', '1', '2', 1, 0, 406, 65, 4560),
(6, 'Papilord', '9', '7', 1, 0, 77, 7, 321),
(7, 'PokemonTropBadass', '3', '17', 0, 0, 786, 88, 987),
(8, 'Lockpin', '2', '10', 1, 0, 456, 65, 654),
(10, 'Salameche', '6', '8', 1, 0, 78, 4, 65),
(11, 'bulbizare', '9', '2', 1, 0, 9789, 123, 782);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelleType` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

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

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(15) NOT NULL,
  `xp` int(11) NOT NULL,
  `lvl` int(11) NOT NULL,
  `solde` int(11) NOT NULL,
  `new_user` tinyint(4) NOT NULL,
  `starter` varchar(25) NOT NULL,
  `arrayPokemon` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `pseudo`, `telephone`, `email`, `password`, `xp`, `lvl`, `solde`, `new_user`, `starter`, `arrayPokemon`) VALUES
(2, 'SIBAUD', 'Nicolas', 'Guacamole', '0637322907', 'nicolassibaud@hotmail.com', '123', 2600, 666, 5000, 0, 'salameche', '3,4,5,6,7,8,10'),
(3, 'Henry', 'Charle', 'kirikou', '0102030405', 'Charle.henry@wanadoo.com', '123', 0, 1, 5000, 0, 'bulbizare', '3,4,5,7'),
(7, 'Tanatos', 'Zeus', 'ZeusTanaos', '123', '123@free.fr', '123', 0, 1, 5000, 0, 'pikachu', '4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
