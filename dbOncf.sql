-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 07 fév. 2021 à 18:17
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `oncf`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `Numbillet` int(11) NOT NULL,
  `codeVoyage` varchar(50) DEFAULT NULL,
  `Datebillet` date DEFAULT NULL,
  `e-mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE `voyage` (
  `codeVoyage` varchar(50) NOT NULL,
  `heureDepart` time DEFAULT NULL,
  `villeDepart` varchar(50) DEFAULT NULL,
  `heureArrivee` time DEFAULT NULL,
  `villeArrivee` varchar(50) DEFAULT NULL,
  `prixVoyage` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `voyage`
--

INSERT INTO `voyage` (`codeVoyage`, `heureDepart`, `villeDepart`, `heureArrivee`, `villeArrivee`, `prixVoyage`) VALUES
('Voyage1', '20:10:00', 'Tanger', '21:00:00', 'Assilah', 35),
('Voyage2', '10:30:00', 'Casablance', '16:00:00', 'Assilah', 150),
('Voyage3', '19:30:00', 'Kenitra', '23:00:00', 'Tanger', 85);

-- --------------------------------------------------------

--
-- Structure de la table `voyageur`
--

CREATE TABLE `voyageur` (
  `e-mail` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `Telephone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`Numbillet`);

--
-- Index pour la table `voyage`
--
ALTER TABLE `voyage`
  ADD PRIMARY KEY (`codeVoyage`);

--
-- Index pour la table `voyageur`
--
ALTER TABLE `voyageur`
  ADD PRIMARY KEY (`e-mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `Numbillet` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
