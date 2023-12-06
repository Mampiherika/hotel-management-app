-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 15 oct. 2023 à 22:38
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `caisse`
--

CREATE TABLE `caisse` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `num_carte` int(50) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `date_entre` varchar(30) NOT NULL,
  `date_sortie` varchar(30) NOT NULL,
  `prix_journalier` varchar(255) NOT NULL,
  `nombre_jour` varchar(255) NOT NULL,
  `num_chambre` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `total_payer` varchar(255) NOT NULL,
  `date_payement` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `caisse`
--

INSERT INTO `caisse` (`id`, `nom`, `prenom`, `phone`, `num_carte`, `pays`, `date_entre`, `date_sortie`, `prix_journalier`, `nombre_jour`, `num_chambre`, `adresse`, `total_payer`, `date_payement`) VALUES
(1, 'Sariaka', 'kely', '0325698745', 25698745, 'Madagascar', ' Sunday 5th November 2023', ' Thursday 23rd November 2023', '80', '18', '001', 'tsiadana', '1440', 'Saturday 14th October 2023'),
(2, 'Nomena', 'Tanyah', '0382569874', 2569874, 'Madagascar', ' Tuesday 10th October 2023', ' Friday 20th October 2023', '80', '10', '003', 'tsiadana', '800', 'Saturday 14th October 2023'),
(3, 'christien', 'Andriamampiherika', '0315320111', 256489, 'Madagascar', ' Monday 2nd October 2023', ' Sunday 15th October 2023', '80', '13', '004', 'Tsiadana', '1040', 'Saturday 14th October 2023'),
(4, 'Razanatsoa mamisoa', 'melissa', '0389658749', 25698745, 'Madagascar', ' Thursday 2nd November 2023', ' Friday 17th November 2023', '80', '15', '005', 'tsiadana', '1200', 'Sunday 15th October 2023'),
(6, 'Razanatsoa mamitiana', 'millaurisse ursilla', '0325689456', 65895412, 'Madagascar', ' Sunday 12th November 2023', ' Sunday 19th November 2023', '80', '7', '006', 'Tsiadana', '560', 'Sunday 15th October 2023'),
(7, 'Rasoanandrasana', 'zerika', '0344644593', 25698741, 'Madagascar', ' Friday 10th November 2023', ' Saturday 25th November 2023', '150', '15', '02', 'Ambatojoby', '2250', 'Sunday 15th October 2023'),
(8, 'christien', 'Andriamampiherika', '0315320111', 2356, 'Madagascar', ' Sunday 1st October 2023', ' Saturday 7th October 2023', '80', '6', '004', 'Tsiadana', '480', 'Sunday 15th October 2023'),
(9, 'christien', 'Andriamampiherika', '0315320111', 25698745, 'Madagascar', ' Sunday 1st October 2023', ' Sunday 15th October 2023', '80', '14', '004', 'Tsiadana', '1120', 'Sunday 15th October 2023'),
(10, 'christien', 'Andriamampiherika', '0315320111', 2147483647, 'France', ' Tuesday 10th October 2023', ' Wednesday 18th October 2023', '80', '8', '004', 'Tsiadana', '640', 'Sunday 15th October 2023');

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE `chambres` (
  `id` int(11) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `lit` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'libre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chambres`
--

INSERT INTO `chambres` (`id`, `numero`, `type`, `lit`, `prix`, `status`) VALUES
(3, '004', 'Studio', '2', '80', 'libre'),
(4, '003', 'Studio', '2', '80', 'libre'),
(5, '006', 'Studio', '2', '80', 'libre'),
(6, '005', 'Studio', '2', '80', 'libre'),
(7, '02', 'Penthouse', '4', '150', 'libre'),
(8, '01', 'Penthouse', '4', '150', 'libre'),
(9, '04', 'Penthouse', '4', '150', 'libre'),
(10, '03', 'Penthouse', '4', '150', 'libre'),
(11, '05', 'Penthouse', '4', '150', 'libre'),
(12, '07', 'Penthouse', '4', '150', 'libre'),
(13, '06', 'Penthouse', '4', '150', 'libre'),
(14, 'A02', 'S+2', '5+', '200', 'libre'),
(15, 'A01', 'S+2', '5+', '200', 'libre'),
(16, 'A03', 'S+2', '5+', '200', 'libre'),
(17, 'A04', 'S+2', '5+', '200', 'libre'),
(18, 'A05', 'S+2', '5+', '200', 'libre'),
(20, 'C1', 'Suite', '1', '400', 'libre'),
(21, 'C2', 'Suite', '1', '400', 'libre'),
(22, 'C3', 'Suite', '1', '400', 'libre'),
(23, 'C4', 'Suite', '1', '400', 'libre'),
(24, 'C5', 'Suite', '1', '400', 'libre'),
(25, 'C6', 'Suite', '1', '400', 'libre'),
(26, '001', 'Studio', '2', '80', 'libre');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `numero_carte` varchar(255) NOT NULL,
  `date_entre` varchar(30) NOT NULL,
  `date_sortie` varchar(30) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `type_chambre` varchar(255) NOT NULL,
  `nombre_lit` varchar(255) NOT NULL,
  `numero_chambre` varchar(255) NOT NULL,
  `prix_journalier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'admin;user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Mampiherika', 'mampiherikajw@gmail.com', ':#M@mpiherika#', 'admin');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `caisse`
--
ALTER TABLE `caisse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `caisse`
--
ALTER TABLE `caisse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
