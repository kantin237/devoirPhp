-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 02 août 2020 à 18:22
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `voitures`
--

-- --------------------------------------------------------

--
-- Structure de la table `modele`
--

DROP TABLE IF EXISTS `modele`;
CREATE TABLE IF NOT EXISTS `modele` (
  `id_modele` varchar(80) NOT NULL,
  `nom_modele` varchar(80) NOT NULL,
  PRIMARY KEY (`id_modele`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `modele`
--

INSERT INTO `modele` (`id_modele`, `nom_modele`) VALUES
('A', 'Toyota'),
('B', 'Peugeot'),
('C', 'Suzuki'),
('D', 'Mercedes Benz'),
('E', 'Pick up'),
('F', '4x4'),
('G', 'Mercedes\r'),
('H', 'BMW\r\n'),
('I', 'Ferari\r'),
('J', 'Lexus\r');

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

DROP TABLE IF EXISTS `possede`;
CREATE TABLE IF NOT EXISTS `possede` (
  `id_vehicule` varchar(80) NOT NULL,
  `id_proprietaire` varchar(80) NOT NULL,
  PRIMARY KEY (`id_vehicule`,`id_proprietaire`),
  KEY `id_vehicule` (`id_vehicule`),
  KEY `id_proprietaire` (`id_proprietaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

DROP TABLE IF EXISTS `proprietaire`;
CREATE TABLE IF NOT EXISTS `proprietaire` (
  `id_proprietaire` varchar(80) NOT NULL,
  `nom_proprietaire` varchar(80) NOT NULL,
  `prenom_proprietaire` varchar(80) NOT NULL,
  PRIMARY KEY (`id_proprietaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `proprietaire`
--

INSERT INTO `proprietaire` (`id_proprietaire`, `nom_proprietaire`, `prenom_proprietaire`) VALUES
('001', 'kemkeng', 'orich'),
('002', 'fomekong', 'kantin'),
('003', 'tambo', 'tambo');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `id_vehicule` varchar(80) NOT NULL,
  `nom_vehicule` varchar(80) NOT NULL,
  `id_modele` varchar(80) NOT NULL,
  PRIMARY KEY (`id_vehicule`),
  KEY `id_modele` (`id_modele`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `possede_ibfk_1` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule` (`id_vehicule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `possede_ibfk_2` FOREIGN KEY (`id_proprietaire`) REFERENCES `proprietaire` (`id_proprietaire`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `vehicule_ibfk_1` FOREIGN KEY (`id_modele`) REFERENCES `modele` (`id_modele`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
