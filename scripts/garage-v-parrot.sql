-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 sep. 2023 à 20:35
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
-- Base de données : `garage_v_parrot`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `avis` text NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `avis`, `nom`) VALUES
(1, 'Trop sympa a l\'accueil ', 'Mathieu nougaré');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `nom` varchar(50) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `date`, `message`, `nom`, `telephone`, `email`) VALUES
(3, '05-09-2023 20:09', 'dsfqsdfqsgddsgdsqg', 'sdqfdsqfsd', '0627201444', 'nico-du-64@outlook.fr'),
(5, '06-09-2023 00:03', 'dsgsqgdgqsgdsgsdqg', 'nicoooo', '0627201444', 'nicolas.guigay.ng@gmail.com'),
(9, '06-09-2023 19:38', 'reyzzzzzzzzzzzzzz', 'guigay nicolas', '0627201444', 'nicolas.guigay.ng@gmail.com'),
(10, '06-09-2023 19:40', 'dfsfqd', 'Sarrance', '0627201444', 'nico-du-64@outlook.fr');

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

CREATE TABLE `horaires` (
  `id` int(11) NOT NULL,
  `lundi` varchar(50) DEFAULT NULL,
  `mardi` varchar(50) DEFAULT NULL,
  `mercredi` varchar(50) DEFAULT NULL,
  `jeudi` varchar(50) DEFAULT NULL,
  `vendredi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `horaires`
--

INSERT INTO `horaires` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`) VALUES
(23, '10:00 - 11:30 / 12:00 - 17:00', '09:00 - 11:30 / 12:00 - 17:00', '08:00 - 11:30 / 12:00 - 17:00', '08:00 - 11:30 / 12:00 - 17:00', '08:00 - 11:30 / 12:00 - 17:00'),
(24, '10:00 - 11:30 / 12:00 - 17:00', '09:00 - 11:30 / 12:00 - 17:00', '08:00 - 11:30 / 12:00 - 17:00', '08:00 - 11:30 / 12:00 - 17:00', '08:00 - 11:30 / 12:00 - 17:00');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `image`, `nom`, `description`) VALUES
(48, 'réparation auto.jpg', 'Réparation auto', 'Expert dans la réparation automobile'),
(49, 'nettoyage voitures.jpg', 'Nettoyage voitures', 'On nettoie votre voiture'),
(87, 'vente de véhicule d\'occasion.jpg', 'Vente de véhicules d\'occasion', 'Nous revendons vos véhicules d\'occasions'),
(88, 'lamborghini urus.png', 'N\'importe', ' ');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(15) NOT NULL,
  `prénom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mdp` varchar(5000) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `code_employé` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role`, `prénom`, `nom`, `email`, `mdp`, `telephone`, `code_employé`) VALUES
(1, 'Admin', 'Nico', 'Guigay', 'nicolas.guigay@gmail.com', '0', '0658741255', '78451'),
(9, 'Employé', 'Jean', 'Emploi', 'jean.emploi@gmail.com', '0', '0627201444', '00003');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

CREATE TABLE `vehicules` (
  `id` int(11) NOT NULL,
  `modele` char(50) NOT NULL,
  `annee` int(4) NOT NULL,
  `kilometrage` int(7) NOT NULL,
  `prix` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id`, `modele`, `annee`, `kilometrage`, `prix`, `description`, `image`) VALUES
(17, 'Peugeot 206', 2006, 136000, 5000, 'vvefe', 'audi rs4.png'),
(34, 'audi a1', 2023, 136000, 5000, 'hghhv', 'audi tt.png'),
(44, 'Mercedes AMG', 2015, 150000, 15201, 'dsgqgdsqgds', 'peugeot 308.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `horaires`
--
ALTER TABLE `horaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `horaires`
--
ALTER TABLE `horaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
