-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Lun 04 Décembre 2017 à 15:15
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `penguins`
--

-- --------------------------------------------------------

--
-- Structure de la table `addresses`
--

CREATE TABLE `addresses` (
  `full_name` varchar(50) DEFAULT NULL,
  `num_voie` varchar(10) DEFAULT NULL,
  `nom_voie` varchar(100) DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `nom_ville` varchar(100) DEFAULT NULL,
  `pays` varchar(20) DEFAULT NULL,
  `id_membre` int(10) DEFAULT NULL,
  `id_add` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `addresses`
--

INSERT INTO `addresses` (`full_name`, `num_voie`, `nom_voie`, `cp`, `nom_ville`, `pays`, `id_membre`, `id_add`) VALUES
('Your Penguins', '1', 'Place Georges Pompidou', '83000', 'Toulon', 'France', NULL, 1),
('Robert Enguerran', '1', 'Rue de la pomme de pin', '83000', 'Toulon', 'France', 33, 3);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `login` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`nom`, `prenom`, `mail`, `password`, `login`, `id`) VALUES
('Compte', 'Admin', 'admin@penguins.fr', 'admin', 'admin', 1),
('charnoz', 'PA', 'paul.charnoz13310@gmail.com', 'admin', 'PAC', 2),
('nom', 'prenom', 'mail@fr.fr', 'pasw', 'id', 26),
('Robert', 'Enguerran', 'enguerran.robert-hublin@isen.yncrea.fr', '123456', 'blyseur', 33);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id_add`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id_add` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
