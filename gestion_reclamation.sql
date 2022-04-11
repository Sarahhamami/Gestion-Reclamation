-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 11 avr. 2022 à 20:00
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_reclamation`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idcli` varchar(50) NOT NULL,
  `mat_fisc` varchar(50) NOT NULL,
  `nom_cli` varchar(50) NOT NULL,
  `login_cli` varchar(50) NOT NULL,
  `pwd_cli` varchar(50) NOT NULL,
  `nom_rep` varchar(50) NOT NULL,
  `prenom_rep` varchar(50) NOT NULL,
  PRIMARY KEY (`idcli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idcli`, `mat_fisc`, `nom_cli`, `login_cli`, `pwd_cli`, `nom_rep`, `prenom_rep`) VALUES
('admin', '', '', 'admin', 'admin', '', ''),
('ad', 'ad', 'ad', 'ad', 'ad', 'ad', 'ad');

-- --------------------------------------------------------

--
-- Structure de la table `est_chargé_de`
--

DROP TABLE IF EXISTS `est_chargé_de`;
CREATE TABLE IF NOT EXISTS `est_chargé_de` (
  `id_rec` int(11) NOT NULL,
  `id_pers` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rec`,`id_pers`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

DROP TABLE IF EXISTS `personnel`;
CREATE TABLE IF NOT EXISTS `personnel` (
  `id_pers` int(11) NOT NULL,
  `login_pers` varchar(30) NOT NULL,
  `pwd_pers` varchar(30) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_pers`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`id_pers`, `login_pers`, `pwd_pers`, `type`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

DROP TABLE IF EXISTS `reclamation`;
CREATE TABLE IF NOT EXISTS `reclamation` (
  `id_rec` varchar(50) NOT NULL,
  `date_crea_rec` date NOT NULL,
  `type_rec` varchar(50) NOT NULL,
  `desc_cli` varchar(50) NOT NULL,
  `idcli` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rec`,`date_crea_rec`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_rec`, `date_crea_rec`, `type_rec`, `desc_cli`, `idcli`) VALUES
('ad', '2022-02-25', 'ad', 'ad', ''),
('ad', '2022-02-02', 'ad', 'ad', ''),
('a', '2022-02-03', 'a', 'a', ''),
('aaaaa', '2022-02-10', 'adadazdazd', 'adzda', ''),
('ad', '2022-02-10', 'ad', 'adzda', ''),
('khalil', '2022-02-06', 'khalil', 'khaliiil', ''),
('now', '2022-02-01', 'now', 'now', 'now'),
('now', '2022-02-02', 'now', 'now', 'now'),
('contrat', '2022-02-02', 'contrat', 'contrat', 'contrat');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
