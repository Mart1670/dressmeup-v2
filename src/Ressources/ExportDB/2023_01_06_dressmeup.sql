-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : ven. 06 jan. 2023 à 15:18
-- Version du serveur : 5.7.24
-- Version de PHP : 8.1.0

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
-- Structure de la table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r` int(11) DEFAULT NULL,
  `g` int(11) DEFAULT NULL,
  `b` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `color`
--

INSERT INTO `color` (`id`, `name`, `color_code`, `r`, `g`, `b`, `active`) VALUES
(1, 'bleu', '#0432ff', NULL, NULL, NULL, NULL),
(2, 'noir', '#000000', NULL, NULL, NULL, NULL),
(3, 'rouge', '#ff2600', NULL, NULL, NULL, NULL),
(4, 'orange', '#ff9200', NULL, NULL, NULL, NULL),
(5, 'blanc', '#feffff', NULL, NULL, NULL, NULL),
(6, 'violet', '#932092', NULL, NULL, NULL, NULL),
(7, 'marron', '#aa7941', NULL, NULL, NULL, NULL),
(8, 'vert', '#00f900', NULL, NULL, NULL, NULL),
(10, 'gris', '#808080', NULL, NULL, NULL, NULL),
(11, 'jaune', '#fefb00', NULL, NULL, NULL, NULL),
(12, 'beige', '#ffe3c3', NULL, NULL, NULL, NULL),
(13, 'test', '#4a7dc0', NULL, NULL, NULL, NULL),
(14, 'test', '#164599', NULL, NULL, NULL, NULL),
(15, 'test', '#1a4a9d', NULL, NULL, NULL, NULL),
(16, 'test', '#0b348c', NULL, NULL, NULL, NULL),
(17, 'test', '#134095', NULL, NULL, NULL, NULL),
(18, 'test', '#1d4ea0', NULL, NULL, NULL, NULL),
(19, 'test', '#2b5fac', NULL, NULL, NULL, NULL),
(20, 'test', '#2b5fac', NULL, NULL, NULL, NULL),
(21, 'test', '#2b5fac', NULL, NULL, NULL, NULL),
(22, 'test', '#295baa', NULL, NULL, NULL, NULL),
(23, 'test', '#285aaa', NULL, NULL, NULL, NULL),
(24, 'test', '#2f62af', NULL, NULL, NULL, NULL),
(25, 'test', '#3367b2', NULL, NULL, NULL, NULL),
(26, 'test', '#2052a3', NULL, NULL, NULL, NULL),
(27, 'test', '#2052a3', NULL, NULL, NULL, NULL),
(28, 'test', '#123e94', NULL, NULL, NULL, NULL),
(29, 'test', '#123e94', NULL, NULL, NULL, NULL),
(30, 'test', '#4d80c1', NULL, NULL, NULL, NULL),
(31, 'test', '#487bbf', NULL, NULL, NULL, NULL),
(32, 'test', '#487bbf', NULL, NULL, NULL, NULL),
(33, 'test', '#487bbf', NULL, NULL, NULL, NULL),
(34, 'test', '#487bbf', NULL, NULL, NULL, NULL),
(35, 'test', '#487bbf', NULL, NULL, NULL, NULL),
(36, 'test', '#487bbf', NULL, NULL, NULL, NULL),
(37, 'test', '#487bbf', NULL, NULL, NULL, NULL),
(38, 'test', '#487bbf', NULL, NULL, NULL, NULL),
(39, 'test', '#2c5fad', NULL, NULL, NULL, NULL),
(40, 'test', '#2c5fad', NULL, NULL, NULL, NULL),
(41, 'test', '#2c5fad', NULL, NULL, NULL, NULL),
(42, 'test', '#2c5fad', NULL, NULL, NULL, NULL),
(43, 'test', '#2c5fad', NULL, NULL, NULL, NULL),
(44, 'test', '#16469a', NULL, NULL, NULL, NULL),
(45, 'test', '#16469a', NULL, NULL, NULL, NULL),
(46, 'test', '#5688c7', NULL, NULL, NULL, NULL),
(47, 'test', '#a0a0a0', NULL, NULL, NULL, NULL),
(48, 'test', '#a0a0a0', NULL, NULL, NULL, NULL),
(49, 'test', '#a0a0a0', NULL, NULL, NULL, NULL),
(50, 'Kaki foncé', '#afa580', NULL, NULL, NULL, NULL),
(51, 'Kaki foncé', '#afa580', NULL, NULL, NULL, NULL),
(52, 'Kaki foncé', '#afa580', NULL, NULL, NULL, NULL),
(53, 'Gris', '#4e81c2', NULL, NULL, NULL, NULL),
(54, 'Gris', '#4e81c2', NULL, NULL, NULL, NULL),
(55, 'Gris', '#4e81c2', NULL, NULL, NULL, NULL),
(56, 'Rouge foncé', '#95621f', NULL, NULL, NULL, NULL),
(57, 'Rouge foncé', '#95621f', NULL, NULL, NULL, NULL),
(58, 'Rouge foncé', '#95621f', NULL, NULL, NULL, NULL),
(59, 'Rouge foncé', '#95621f', NULL, NULL, NULL, NULL),
(60, 'Rouge foncé', '#95621f', NULL, NULL, NULL, NULL),
(61, 'Rouge foncé', '#95621f', NULL, NULL, NULL, NULL),
(62, 'Rouge foncé', '#95621f', NULL, NULL, NULL, NULL),
(63, 'Gris', '#0e6fa5', NULL, NULL, NULL, NULL),
(64, 'Gris', '#444f6e', NULL, NULL, NULL, NULL),
(65, 'Kaki foncé', '#c4922d', NULL, NULL, NULL, NULL),
(66, 'Kaki foncé', '#d3be85', NULL, NULL, NULL, NULL),
(67, 'Noir', '#0b0b0b', NULL, NULL, NULL, NULL),
(68, 'Noir', '#0b0b0b', NULL, NULL, NULL, NULL),
(69, 'Rouge', '#cd1e15', NULL, NULL, NULL, NULL),
(70, 'Rouge', '#cd1e15', NULL, NULL, NULL, NULL),
(71, 'Marron', '#b56a51', NULL, NULL, NULL, NULL),
(72, 'Orange', '#e28333', NULL, NULL, NULL, NULL),
(73, 'Orange', '#e5a53f', NULL, NULL, NULL, NULL),
(74, 'Orange', '#e5a53f', NULL, NULL, NULL, NULL),
(75, 'Marron', '#909912', NULL, NULL, NULL, NULL),
(76, 'Orange', '#e3a036', NULL, NULL, NULL, NULL),
(77, 'Orange', '#e3a036', NULL, NULL, NULL, NULL);

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
('DoctrineMigrations\\Version20221209103902', '2022-12-09 10:39:13', 154),
('DoctrineMigrations\\Version20221215095810', '2022-12-15 10:58:29', 537),
('DoctrineMigrations\\Version20221218193636', '2022-12-19 11:19:43', 158);

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
-- Structure de la table `palette`
--

CREATE TABLE `palette` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color1` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color2` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color3` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color4` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color5` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `palette`
--

INSERT INTO `palette` (`id`, `name`, `color1`, `color2`, `color3`, `color4`, `color5`) VALUES
(1, '', '#7D8082', '#F9F6F2', '#CEBCAE', '#91A096', ''),
(2, '', '#FEB083', '#78422C', '#ECDFD2', '#E3AC8F', '#6F604D'),
(3, '', '#595C3C', '#10005', '#2C3159', '#COC3D3', ''),
(4, '', '#6C2109', '#60000', '#CE5A07', '#FEC029', ''),
(5, '', '#024C69', '#23244', '#4E7784', '', ''),
(6, '', '#DCD2E5', '#FCFDFC', '#CDCDCD', '#7046C3', '#490E9B'),
(7, '', '#E7FAFF', '#B8C2FF', '#B9F1FF', '#E8E8FD', '#C9A9FF'),
(8, '', '#39663F', '#433C32', '#20003', '#72BA69', '#FFFFFF'),
(9, '', '#FD5505', '#FCFDFC', '#F48159', '#DCC19B', ''),
(10, '', '#02FEC9', '#54D460', '#E2159C', '#60100', ''),
(11, '', '#41014D', '#930048', '#DCCED5', '#571432', ''),
(12, '', '#BF6154', '#424242', '#FEFEFE', '#942A44', ''),
(13, '', '#EEEDF2', '#F6B856', '#82D1D8', '#1D1C1A', ''),
(14, '', '#BF3E83', '#28AD97', '#DAA376', '', ''),
(15, '', '#8B86AF', '#F6CFC8', '#EEEDF2', '#F6B856', ''),
(16, '', '#BDD6F2', '#74A2DD', '#344C7A', '#0E0E0E', ''),
(17, '', '#7B64BF', '#F56D60', '#3C336F', '#DDA786', ''),
(18, '', '#916953', '#CF8E80', '#FCB5B5', '#FAF6F6', ''),
(19, '', '#DA9C7F', '#9B6C7E', '#DABDC1', '#F6F7FB', ''),
(20, '', '#F9DAC5', '#C69262', '#73301E', '#1A0C03', '#717076'),
(21, '', '#FEFEFE', '#0D8A32', '#3F5A0A', '#FCFDF7', '#96A687'),
(22, '', '#D9D9D9', '#7F7F7F', '#4C4C4C', '#000000', ''),
(23, '', '#F9BEB3', '#FEA642', '#FEEB54', '#FF5D14', ''),
(24, '', '#D9C6B6', '#A48066', '#87250B', '#B73515', '#7F4724'),
(25, '', '#424242', '#D1C7BB', '#797548', '#F29140', '#E1C5A0'),
(26, '', '#BBAC97', '#616C4E', '#D77C2B', '#264355', ''),
(27, '', '#7B9A4A', '#F0EEBE', '#FB5154', '#FED876', ''),
(28, '', '#8F6F02', '#645737', '#6F6422', '#824808', '#2F2727'),
(29, '', '#C0AFDF', '#8C0A48', '#5B1D4D', '#B5926E', ''),
(30, '', '#FBD5C1', '#4B69E7', '#EEEEEE', '', ''),
(31, '', '#5F5D50', '#846344', '#CCB49A', '#B18481', '#B7815D'),
(32, '', '#000000', '#FFFFFF', '#800080', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `palette_color`
--

CREATE TABLE `palette_color` (
  `palette_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reference_color`
--

CREATE TABLE `reference_color` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r` int(11) DEFAULT NULL,
  `g` int(11) DEFAULT NULL,
  `b` int(11) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reference_color`
--

INSERT INTO `reference_color` (`id`, `name`, `color_code`, `r`, `g`, `b`, `active`) VALUES
(1, 'Rouge', '#FF0000', 255, 0, 0, 1),
(2, 'Rouge', '#4E0000', 78, 0, 0, 1),
(3, 'Rouge', '#FF6363', 255, 99, 99, 1),
(4, 'Noir', '#4A0000', 77, 0, 0, 1),
(5, 'Noir', '#000000', 0, 0, 0, 1),
(6, 'Noir', '#363636', 54, 54, 54, 1),
(7, 'Gris', '#373737', 55, 55, 55, 1),
(8, 'Gris', '#8B7F7F', 139, 127, 127, 1),
(9, 'Gris', '#C8C8C8', 200, 200, 200, 1),
(10, 'Blanc', '#FFFFFF', 255, 255, 255, 1),
(11, 'Blanc', '#C9C9C9', 201, 201, 201, 1),
(12, 'Blanc', '#FFD8D8', 255, 216, 216, 1),
(13, 'Rose', '#FF009A', 255, 0, 154, 1),
(14, 'Rose', '#B6006C', 182, 0, 108, 1),
(15, 'Rose', '#FFA8DC', 255, 168, 220, 1),
(16, 'Violet', '#B7006D', 183, 0, 109, 1),
(17, 'Violet', '#842F62', 132, 47, 98, 1),
(18, 'Violet', '#410027', 65, 0, 39, 1),
(19, 'Violet', '#9900FF', 153, 0, 255, 1),
(20, 'Violet', '#2F004E', 47, 0, 78, 1),
(21, 'Violet', '#B84CFF', 184, 76, 255, 1),
(22, 'Rose', '#B94DFF', 185, 77, 255, 1),
(23, 'Rose', '#E1B1FF', 255, 177, 255, 1),
(24, 'Rose', '#C1A1D5', 193, 161, 213, 1),
(25, 'Bleu', '#0047FF', 0, 71, 255, 1),
(26, 'Bleu', '#001446', 0, 20, 78, 1),
(27, 'Bleu', '#A4BEFF', 164, 190, 255, 1),
(28, 'Vert', '#00FF00', 0, 255, 0, 1),
(29, 'Vert', '#004900', 0, 73, 0, 1),
(30, 'Vert', '#9CFF9C', 156, 255, 156, 1),
(31, 'Jaune', '#ffd700', 255, 215, 0, 1),
(32, 'Jaune', '#FFE55B', 255, 229, 91, 1),
(33, 'Jaune', '#857000', 133, 112, 0, 1),
(34, 'Beige', '#ffe65c', 255, 230, 92, 1),
(35, 'Beige', '#fff6c5', 255, 246, 197, 1),
(36, 'Beige', '#c4b460', 196, 180, 96, 1),
(37, 'Marron', '#867100', 134, 113, 0, 1),
(38, 'Marron', '#312A00', 49, 42, 0, 1),
(39, 'Marron', '#726C42', 114, 108, 66, 1),
(40, 'Orange', '#FF7500', 255, 117, 0, 1),
(41, 'Orange', '#FFA95F', 255, 169, 95, 1),
(42, 'Orange', '#BD5800', 189, 88, 0, 1),
(43, 'Marron', '#BE5900', 190, 89, 0, 1),
(44, 'Marron', '#3D1D00', 61, 29, 0, 1),
(45, 'Marron', '#936740', 147, 103, 64, 1),
(46, 'Beige', '#ffa960', 255, 169, 96, 1),
(47, 'Beige', '#ffd2ab', 255, 210, 171, 1),
(48, 'Beige', '#E1A36E', 225, 163, 110, 1),
(49, 'Bleu Ciel', '#00F9FF', 0, 249, 255, 1),
(50, 'Bleu Ciel', '#00A7AB', 0, 167, 171, 1),
(51, 'Bleu Ciel', '#A5FDFF', 165, 253, 255, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tag_ambiance`
--

CREATE TABLE `tag_ambiance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tag_ambiance`
--

INSERT INTO `tag_ambiance` (`id`, `name`, `categorie`) VALUES
(1, 'Sortie entre ami(e)', 'Ambiance'),
(2, 'Travail', 'Ambiance'),
(3, 'Sport', 'Ambiance'),
(4, 'Détente', 'Ambiance'),
(5, 'Rendez-vous romantique', 'Ambiance'),
(6, 'Rien de prévu', 'Ambiance');

-- --------------------------------------------------------

--
-- Structure de la table `tag_ambiance_vetement`
--

CREATE TABLE `tag_ambiance_vetement` (
  `tag_ambiance_id` int(11) NOT NULL,
  `vetement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `tag_humeur`
--

CREATE TABLE `tag_humeur` (
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
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vetement`
--

INSERT INTO `vetement` (`id`, `name`, `type`, `style`, `image`, `alt`, `user_id`) VALUES
(7, NULL, 'Bas', 'Jean', '1-63a03f83b9fd0.jpg', 'Jean-Travail-Kaki foncé', 1),
(10, NULL, 'Bas', 'Chino', '1-63a05c43aa8b4.png', 'Chino-Travail-Gris', 1),
(12, NULL, 'Bas', 'Chino', '1-63a062654c227.jpg', 'Chino-Sortie entre ami(e)-Rouge foncé', 1),
(18, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae0e2384a.jpg', 'Tee-Shirt-Sport-Gris', 1),
(19, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae289929e.jpg', 'Tee-Shirt-Détente-Gris', 1),
(20, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae41db496.jpg', 'Tee-Shirt-Rendez-vous romantique-Kaki foncé', 1),
(21, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae5bd2c79.jpg', 'Tee-Shirt-Rien de prévu-Kaki foncé', 1),
(22, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae6fa71a5.jpg', 'Tee-Shirt-Sortie entre ami(e)-Noir', 1),
(23, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae7e4ef0b.jpg', 'Tee-Shirt-Détente-Noir', 1),
(24, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae8e40613.jpg', 'Tee-Shirt-Rendez-vous romantique-Rouge', 1),
(26, NULL, 'Haut', 'Veste', '1-63ab2cb612454.jpg', 'Veste-Sortie entre ami(e)-Marron', 1),
(30, NULL, 'Bas', 'Chino', '1-63af1aea5ff09.png', 'Chino-Rien de prévu-Marron', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vetement_color`
--

CREATE TABLE `vetement_color` (
  `vetement_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vetement_color`
--

INSERT INTO `vetement_color` (`vetement_id`, `color_id`) VALUES
(7, 52),
(10, 55),
(12, 57),
(18, 63),
(19, 64),
(20, 65),
(21, 66),
(22, 67),
(23, 68),
(24, 69),
(26, 71),
(30, 75);

-- --------------------------------------------------------

--
-- Structure de la table `vetement_tag_humeur`
--

CREATE TABLE `vetement_tag_humeur` (
  `vetement_id` int(11) NOT NULL,
  `tag_humeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

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
-- Index pour la table `palette`
--
ALTER TABLE `palette`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `palette_color`
--
ALTER TABLE `palette_color`
  ADD PRIMARY KEY (`palette_id`,`color_id`),
  ADD KEY `IDX_6A00BA8D908BC74` (`palette_id`),
  ADD KEY `IDX_6A00BA8D7ADA1FB5` (`color_id`);

--
-- Index pour la table `reference_color`
--
ALTER TABLE `reference_color`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag_ambiance`
--
ALTER TABLE `tag_ambiance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tag_ambiance_vetement`
--
ALTER TABLE `tag_ambiance_vetement`
  ADD PRIMARY KEY (`tag_ambiance_id`,`vetement_id`),
  ADD KEY `IDX_6648AA802B692073` (`tag_ambiance_id`),
  ADD KEY `IDX_6648AA80969D8B67` (`vetement_id`);

--
-- Index pour la table `tag_humeur`
--
ALTER TABLE `tag_humeur`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3CB446CFA76ED395` (`user_id`);

--
-- Index pour la table `vetement_color`
--
ALTER TABLE `vetement_color`
  ADD PRIMARY KEY (`vetement_id`,`color_id`),
  ADD KEY `IDX_640260C4969D8B67` (`vetement_id`),
  ADD KEY `IDX_640260C47ADA1FB5` (`color_id`);

--
-- Index pour la table `vetement_tag_humeur`
--
ALTER TABLE `vetement_tag_humeur`
  ADD PRIMARY KEY (`vetement_id`,`tag_humeur_id`),
  ADD KEY `IDX_E351393B969D8B67` (`vetement_id`),
  ADD KEY `IDX_E351393B2F693A87` (`tag_humeur_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT pour la table `handicap`
--
ALTER TABLE `handicap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `palette`
--
ALTER TABLE `palette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `reference_color`
--
ALTER TABLE `reference_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `tag_ambiance`
--
ALTER TABLE `tag_ambiance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tag_humeur`
--
ALTER TABLE `tag_humeur`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `palette_color`
--
ALTER TABLE `palette_color`
  ADD CONSTRAINT `FK_6A00BA8D7ADA1FB5` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6A00BA8D908BC74` FOREIGN KEY (`palette_id`) REFERENCES `palette` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `tag_ambiance_vetement`
--
ALTER TABLE `tag_ambiance_vetement`
  ADD CONSTRAINT `FK_6648AA802B692073` FOREIGN KEY (`tag_ambiance_id`) REFERENCES `tag_ambiance` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6648AA80969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE;

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
-- Contraintes pour la table `vetement`
--
ALTER TABLE `vetement`
  ADD CONSTRAINT `FK_3CB446CFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `vetement_color`
--
ALTER TABLE `vetement_color`
  ADD CONSTRAINT `FK_640260C47ADA1FB5` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_640260C4969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `vetement_tag_humeur`
--
ALTER TABLE `vetement_tag_humeur`
  ADD CONSTRAINT `FK_E351393B2F693A87` FOREIGN KEY (`tag_humeur_id`) REFERENCES `tag_humeur` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E351393B969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
