-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 09 déc. 2022 à 16:31
-- Version du serveur :  5.7.34
-- Version de PHP : 7.4.21

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
-- Structure de la table `accord`
--

CREATE TABLE `accord` (
  `id` int(11) NOT NULL,
  `combinaison` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `accord_color`
--

CREATE TABLE `accord_color` (
  `accord_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `color`
--

INSERT INTO `color` (`id`, `name`, `color_code`) VALUES
(1, 'bleu', '#0432ff'),
(2, 'noir', '#000000'),
(3, 'rouge', '#ff2600'),
(4, 'orange', '#ff9200'),
(5, 'blanc', '#feffff'),
(6, 'violet', '#932092'),
(7, 'marron', '#aa7941'),
(8, 'vert', '#00f900');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221209103902', '2022-12-09 10:39:13', 154);

-- --------------------------------------------------------

--
-- Structure de la table `handicap`
--

CREATE TABLE `handicap` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tenue`
--

CREATE TABLE `tenue` (
  `id` int(11) NOT NULL,
  `haut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tenue_vetement`
--

CREATE TABLE `tenue_vetement` (
  `tenue_id` int(11) NOT NULL,
  `vetement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `handicap_id` int(11) DEFAULT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `bio` longtext COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `handicap_id`, `email`, `roles`, `password`, `name`, `firstname`, `sexe`, `birthdate`, `bio`, `avatar`) VALUES
(1, NULL, 'camillelelouche@yahoo.fr', '[]', '$2y$13$q0fX7I8B5DpO/ZgFZQ15aORTu50B98oV13hh4gyVZcFKZ.cyCf3vK', 'Lelouche', 'Camille', NULL, NULL, NULL, NULL);

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
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vetement_color`
--

CREATE TABLE `vetement_color` (
  `vetement_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vetement_tag`
--

CREATE TABLE `vetement_tag` (
  `vetement_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accord`
--
ALTER TABLE `accord`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `accord_color`
--
ALTER TABLE `accord_color`
  ADD PRIMARY KEY (`accord_id`,`color_id`),
  ADD KEY `IDX_743E1CFA1EDF023F` (`accord_id`),
  ADD KEY `IDX_743E1CFA7ADA1FB5` (`color_id`);

--
-- Index pour la table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `handicap`
--
ALTER TABLE `handicap`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tenue`
--
ALTER TABLE `tenue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EB51486DA76ED395` (`user_id`);

--
-- Index pour la table `tenue_vetement`
--
ALTER TABLE `tenue_vetement`
  ADD PRIMARY KEY (`tenue_id`,`vetement_id`),
  ADD KEY `IDX_BC01B54628239C7` (`tenue_id`),
  ADD KEY `IDX_BC01B546969D8B67` (`vetement_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD KEY `IDX_8D93D649B996CB29` (`handicap_id`);

--
-- Index pour la table `vetement`
--
ALTER TABLE `vetement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vetement_color`
--
ALTER TABLE `vetement_color`
  ADD PRIMARY KEY (`vetement_id`,`color_id`),
  ADD KEY `IDX_640260C4969D8B67` (`vetement_id`),
  ADD KEY `IDX_640260C47ADA1FB5` (`color_id`);

--
-- Index pour la table `vetement_tag`
--
ALTER TABLE `vetement_tag`
  ADD PRIMARY KEY (`vetement_id`,`tag_id`),
  ADD KEY `IDX_BB1DB660969D8B67` (`vetement_id`),
  ADD KEY `IDX_BB1DB660BAD26311` (`tag_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accord`
--
ALTER TABLE `accord`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `handicap`
--
ALTER TABLE `handicap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `tenue`
--
ALTER TABLE `tenue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vetement`
--
ALTER TABLE `vetement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accord_color`
--
ALTER TABLE `accord_color`
  ADD CONSTRAINT `FK_743E1CFA1EDF023F` FOREIGN KEY (`accord_id`) REFERENCES `accord` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_743E1CFA7ADA1FB5` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tenue`
--
ALTER TABLE `tenue`
  ADD CONSTRAINT `FK_EB51486DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `tenue_vetement`
--
ALTER TABLE `tenue_vetement`
  ADD CONSTRAINT `FK_BC01B54628239C7` FOREIGN KEY (`tenue_id`) REFERENCES `tenue` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BC01B546969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649B996CB29` FOREIGN KEY (`handicap_id`) REFERENCES `handicap` (`id`);

--
-- Contraintes pour la table `vetement_color`
--
ALTER TABLE `vetement_color`
  ADD CONSTRAINT `FK_640260C47ADA1FB5` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_640260C4969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `vetement_tag`
--
ALTER TABLE `vetement_tag`
  ADD CONSTRAINT `FK_BB1DB660969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BB1DB660BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
