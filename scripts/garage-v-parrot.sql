-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-garage-v-parrot.alwaysdata.net
-- Generation Time: Sep 15, 2023 at 12:29 AM
-- Server version: 10.6.14-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage-v-parrot_ecf`
--
CREATE DATABASE IF NOT EXISTS `garage-v-parrot_ecf` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `garage-v-parrot_ecf`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `date`, `message`, `name`, `phone`, `email`) VALUES
(11, '11-09-2023 01:55', 'fdhfdshdf', 'fdgsfdgs', '0147854785', 'fdhsdhfdshfdh@hfdhsh.fr'),
(12, '11-09-2023 21:57', 'test message', 'guigay nicolas', '0627201444', 'nicolas.guigay.ng@gmail.com'),
(13, '12-09-2023 00:19', 'Message envoyé depuis iphone ', 'Uejejj', '0528421455', 'sknsisjs@giajja.com');

-- --------------------------------------------------------

--
-- Table structure for table `horaires`
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
-- Dumping data for table `horaires`
--

INSERT INTO `horaires` (`id`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`) VALUES
(23, '07:00 - 11:30 / 12:00 - 17:00', '09:00 - 11:30 / 12:00 - 17:00', '05:00 - 11:30 / 12:00 - 17:00', '08:00 - 11:30 / 12:00 - 17:00', '08:00 - 11:30 / 12:00 - 17:00'),
(24, '07:00 - 11:30 / 12:00 - 17:00', '09:00 - 11:30 / 12:00 - 17:00', '05:00 - 11:30 / 12:00 - 17:00', '08:00 - 11:30 / 12:00 - 17:00', '08:00 - 11:30 / 12:00 - 17:00');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `state` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `message`, `name`, `state`) VALUES
(1, 'Trop sympa a l\'accueil ', 'Mathieu nougaré', 'valid'),
(5, 'thehterhe', 'rehyerhre', 'valid'),
(6, 'liyluykujk,hugyj', 'ujkyku', 'waiting'),
(8, 'ytrytrfyhrthdetryhrety', 'utrutfryhtr', 'valid'),
(9, 'skjbfdslfvhbdsufbdsfq dfsdqgdsgfdsgs dqg dsgqdsqg dsqg ds qgdsgdsgqdsqgd sqgdsgqdsq gdsqgdsqg dsqgds gqdsgds qgdsqg dsqg dsqg', 'sdqgsdqg', 'waiting'),
(10, 'gdsgqdsg qdsgds qgd sg dsgqdsgdsgds gdsgdsgds gdsgdsgds gdsgqdsgdsgds qgd sqg dsqds qgdsgqdsqg dsqgds gdsqggdsg dsg  qgdsgds gdsg ds g dsgqdsgds gdsqgdsg dsgdsgdsgdsg sdqgdsqgdgsdqgds qgdsgdsgq dgsqgdsq gdsgdsqgdsgdsgsdq gdqsgdsqgdgsqg dsqgdsgqdsgqgd', 'gdgqgdsq', 'valid');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `title`, `description`) VALUES
(48, 'réparation auto.jpg', 'Réparation auto', 'Expert dans la réparation automobile'),
(49, 'nettoyage voitures.jpg', 'Nettoyage voitures', 'On nettoie votre voiture'),
(87, 'vente de véhicule d\'occasion.jpg', 'Vente de véhicules d\'occasion', 'Nous revendons vos véhicules d\'occasions');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(15) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(5000) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `first_name`, `name`, `email`, `password`, `phone`, `code`) VALUES
(1, 'Admin', 'Nico', 'Guigay', 'nicolas.guigay@gmail.com', '$2y$10$rq9bmSH1wD7jokXvAulqDOLoFPWA92Ez8pbx8lkda4e0pInuHj/3W', '0627201445', '78451'),
(9, 'Employé', 'Jean', 'Emploi', 'jean.emploi@gmail.com', '$2y$10$jGfx24kcPVGyPxis..kW1uCFAPrnPWDXgAP7Tdm/FUTwUaDYfZ4vq', '0627201444', '00003'),
(17, 'Employé', 'Mathieu', 'Peste', 'mathieu.peste@gmail.com', '$2y$10$d50CeOxHA0ZDqkGBfFSk5uYIt6j/rLa7LPSRCPUz7.GvxoO25f4gW', '0657847847', '00007');

-- --------------------------------------------------------

--
-- Table structure for table `vehicules`
--

CREATE TABLE `vehicules` (
  `id` int(11) NOT NULL,
  `model` char(50) NOT NULL,
  `year` int(4) NOT NULL,
  `kilometrage` int(7) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicules`
--

INSERT INTO `vehicules` (`id`, `model`, `year`, `kilometrage`, `price`, `description`, `image`) VALUES
(34, 'audi a1', 2023, 136000, 5000, 'hghhv', 'audi tt.png'),
(53, 'Porsche Cayenne', 2021, 12000, 45000, 'Porsche Cayenne turbo, comme neuve.', 'porsche-cayenne.png'),
(54, 'Tesla X', 1500, 1, 1, 'dsfqdsq', 'lamborghini urus.png'),
(55, 'Skoda fabia', 1500, 1, 1, 'dfsfs', 'skoda fabia.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horaires`
--
ALTER TABLE `horaires`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicules`
--
ALTER TABLE `vehicules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `horaires`
--
ALTER TABLE `horaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vehicules`
--
ALTER TABLE `vehicules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
