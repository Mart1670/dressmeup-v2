-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 02 jan. 2023 à 20:40
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `dressmeup`
--

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

CREATE TABLE `vetement` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vetement`
--

INSERT INTO `vetement` (`id`, `name`, `type`, `style`, `image`, `alt`, `user_id`) VALUES
(27, NULL, 'Bas', 'Chino', '1-63b32a3e3862f.jpg', 'Chino-Rien de prévu-Beige', 1),
(28, NULL, 'Haut', 'Tee-Shirt', '1-63b32a6820c0d.jpg', 'Tee-Shirt-Détente-Bleu Ciel', 1),
(29, NULL, 'Bas', 'Jean', '1-63b32a9ad88ae.jpg', 'Jean-Rendez-vous romantique-Noir', 1),
(30, NULL, 'Haut', 'Tee-Shirt', '1-63b32ace06818.jpg', 'Tee-Shirt-Sport-Marron', 1),
(32, NULL, 'Bas', 'Chino', '1-63b32b47c8d74.jpg', 'Chino-Rien de prévu-Marron', 1),
(33, NULL, 'Haut', 'Tee-Shirt', '1-63b32b8128285.jpg', 'Tee-Shirt-Sport-Orange', 1),
(34, NULL, 'Bas', 'Pantalon', '1-63b32cb164f28.png', 'Pantalon-Travail-Gris', 1),
(35, NULL, 'Haut', 'Tee-Shirt', '1-63b340865c334.jpg', 'Tee-Shirt-Sortie entre ami(e)-Rouge', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `vetement`
--
ALTER TABLE `vetement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3CB446CFA76ED395` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `vetement`
--
ALTER TABLE `vetement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vetement`
--
ALTER TABLE `vetement`
  ADD CONSTRAINT `FK_3CB446CFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
