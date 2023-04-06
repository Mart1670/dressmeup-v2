-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 16 déc. 2022 à 17:28
-- Version du serveur :  5.7.34
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
(1, 'Gris', '#7D8082', 125, 128, 130, 1),
(2, 'Blanc', '#F9F6F2', 249, 246, 242, 1),
(3, 'Argent', '#CEBCAE', 206, 188, 174, 1),
(4, 'Gris', '#91A096', 145, 160, 150, 1),
(6, 'Kaki foncé', '#FEB083', 254, 176, 131, 1),
(7, 'Marron', '#78422C', 120, 66, 44, 1),
(8, 'Beige', '#ECDFD2', 236, 223, 210, 1),
(9, 'Kaki foncé', '#E3AC8F', 227, 172, 143, 1),
(10, 'Gris', '#6F604D', 111, 96, 77, 1),
(11, 'Gris', '#595C3C', 89, 92, 60, 1),
(12, 'Noir', '#10005', 16, 0, 5, 1),
(13, 'Bleu marine', '#2C3159', 44, 49, 89, 1),
(14, 'Noir', '#COC3D3', 12, NULL, NULL, 1),
(16, 'Marron', '#6C2109', 108, 33, 9, 1),
(17, 'Marron', '#60000', 96, 0, 0, 1),
(18, 'Orange', '#CE5A07', 206, 90, 7, 1),
(19, 'Jaune', '#FEC029', 254, 192, 41, 1),
(21, 'Bleu marine', '#024C69', 2, 76, 105, 1),
(22, 'Noir', '#23244', 35, 36, 4, 1),
(23, 'Gris', '#4E7784', 78, 119, 132, 1),
(26, 'Gris clair', '#DCD2E5', 220, 210, 229, 1),
(27, 'Blanc', '#FCFDFC', 252, 253, 252, 1),
(28, 'Gris clair', '#CDCDCD', 205, 205, 205, 1),
(29, 'Violet', '#7046C3', 112, 70, 195, 1),
(30, 'Violet', '#490E9B', 73, 14, 155, 1),
(31, 'Blanc', '#E7FAFF', 231, 250, 255, 1),
(32, 'Bleu Ciel', '#B8C2FF', 184, 194, 255, 1),
(33, 'Gris clair', '#B9F1FF', 185, 241, 255, 1),
(34, 'Blanc', '#E8E8FD', 232, 232, 253, 1),
(35, 'Rose', '#C9A9FF', 201, 169, 255, 1),
(36, 'Vert Foncé', '#39663F', 57, 102, 63, 1),
(37, 'Vert Foncé', '#433C32', 67, 60, 50, 1),
(38, 'Noir', '#20003', 32, 0, 3, 1),
(39, 'Gris', '#72BA69', 114, 186, 105, 1),
(40, 'Blanc', '#FFFFFF', 255, 255, 255, 1),
(41, 'Orange', '#FD5505', 253, 85, 5, 1),
(42, 'Blanc', '#FCFDFC', 252, 253, 252, 1),
(43, 'Kaki foncé', '#F48159', 244, 129, 89, 1),
(44, 'Argent', '#DCC19B', 220, 193, 155, 1),
(46, 'Turquoise', '#02FEC9', 2, 254, 201, 1),
(47, 'Gris', '#54D460', 84, 212, 96, 1),
(48, 'Rose', '#E2159C', 226, 21, 156, 1),
(49, 'Marron', '#60100', 96, 16, 0, 1),
(51, 'Violet', '#41014D', 65, 1, 77, 1),
(52, 'Violet', '#930048', 147, 0, 72, 1),
(53, 'Gris clair', '#DCCED5', 220, 206, 213, 1),
(54, 'Marron', '#571432', 87, 20, 50, 1),
(56, 'Gris', '#BF6154', 191, 97, 84, 1),
(57, 'Vert Foncé', '#424242', 66, 66, 66, 1),
(58, 'Blanc', '#FEFEFE', 254, 254, 254, 1),
(59, 'Violet', '#942A44', 148, 42, 68, 1),
(61, 'Blanc', '#EEEDF2', 238, 237, 242, 1),
(62, 'Kaki foncé', '#F6B856', 246, 184, 86, 1),
(63, 'Bleu Ciel', '#82D1D8', 130, 209, 216, 1),
(64, 'Noir', '#1D1C1A', 29, 28, 26, 1),
(66, 'Rose', '#BF3E83', 191, 62, 131, 1),
(67, 'Turquoise', '#28AD97', 40, 173, 151, 1),
(68, 'Kaki foncé', '#DAA376', 218, 163, 118, 1),
(71, 'Gris', '#8B86AF', 139, 134, 175, 1),
(72, 'Rose', '#F6CFC8', 246, 207, 200, 1),
(73, 'Blanc', '#EEEDF2', 238, 237, 242, 1),
(74, 'Kaki foncé', '#F6B856', 246, 184, 86, 1),
(76, 'Gris clair', '#BDD6F2', 189, 214, 242, 1),
(77, 'Bleu Ciel', '#74A2DD', 116, 162, 221, 1),
(78, 'Gris', '#344C7A', 52, 76, 122, 1),
(79, 'Noir', '#0E0E0E', 14, 14, 14, 1),
(81, 'Gris', '#7B64BF', 123, 100, 191, 1),
(82, 'Kaki foncé', '#F56D60', 245, 109, 96, 1),
(83, 'Bleu marine', '#3C336F', 60, 51, 111, 1),
(84, 'Kaki foncé', '#DDA786', 221, 167, 134, 1),
(86, 'Gris', '#916953', 145, 105, 83, 1),
(87, 'Kaki foncé', '#CF8E80', 207, 142, 128, 1),
(88, 'Rose', '#FCB5B5', 252, 181, 181, 1),
(89, 'Blanc', '#FAF6F6', 250, 246, 246, 1),
(91, 'Kaki foncé', '#DA9C7F', 218, 156, 127, 1),
(92, 'Gris', '#9B6C7E', 155, 108, 126, 1),
(93, 'Argent', '#DABDC1', 218, 189, 193, 1),
(94, 'Blanc', '#F6F7FB', 246, 247, 251, 1),
(96, 'Beige', '#F9DAC5', 249, 218, 197, 1),
(97, 'Kaki foncé', '#C69262', 198, 146, 98, 1),
(98, 'Marron', '#73301E', 115, 48, 30, 1),
(99, 'Noir', '#1A0C03', 26, 12, 3, 1),
(100, 'Gris', '#717076', 113, 112, 118, 1),
(101, 'Blanc', '#FEFEFE', 254, 254, 254, 1),
(102, 'Vert', '#0D8A32', 13, 138, 50, 1),
(103, 'Vert Foncé', '#3F5A0A', 63, 90, 10, 1),
(104, 'Blanc', '#FCFDF7', 252, 253, 247, 1),
(105, 'Gris', '#96A687', 150, 166, 135, 1),
(106, 'Gris clair', '#D9D9D9', 217, 217, 217, 1),
(107, 'Gris', '#7F7F7F', 127, 127, 127, 1),
(108, 'Gris', '#4C4C4C', 76, 76, 76, 1),
(109, 'Noir', '#000000', 0, 0, 0, 1),
(111, 'Rose', '#F9BEB3', 249, 190, 179, 1),
(112, 'Orange', '#FEA642', 254, 166, 66, 1),
(113, 'Jaune', '#FEEB54', 254, 235, 84, 1),
(114, 'Orange', '#FF5D14', 255, 93, 20, 1),
(116, 'Argent', '#D9C6B6', 217, 198, 182, 1),
(117, 'Gris', '#A48066', 164, 128, 102, 1),
(118, 'Rouge foncé', '#87250B', 135, 37, 11, 1),
(119, 'Rouge foncé', '#B73515', 183, 53, 21, 1),
(120, 'Marron', '#7F4724', 127, 71, 36, 1),
(121, 'Vert Foncé', '#424242', 66, 66, 66, 1),
(122, 'Argent', '#D1C7BB', 209, 199, 187, 1),
(123, 'Gris', '#797548', 121, 117, 72, 1),
(124, 'Orange', '#F29140', 242, 145, 64, 1),
(125, 'Argent', '#E1C5A0', 225, 197, 160, 1),
(126, 'Kaki foncé', '#BBAC97', 187, 172, 151, 1),
(127, 'Gris', '#616C4E', 97, 108, 78, 1),
(128, 'Orange', '#D77C2B', 215, 124, 43, 1),
(129, 'Bleu marine', '#264355', 38, 67, 85, 1),
(131, 'Gris', '#7B9A4A', 123, 154, 74, 1),
(132, 'Beige', '#F0EEBE', 240, 238, 190, 1),
(133, 'Rose', '#FB5154', 251, 81, 84, 1),
(134, 'Kaki foncé', '#FED876', 254, 216, 118, 1),
(136, 'Rouge foncé', '#8F6F02', 143, 111, 2, 1),
(137, 'Gris', '#645737', 100, 87, 55, 1),
(138, 'Gris', '#6F6422', 111, 100, 34, 1),
(139, 'Marron', '#824808', 130, 72, 8, 1),
(140, 'Noir', '#2F2727', 47, 39, 39, 1),
(141, 'Argent', '#C0AFDF', 192, 175, 223, 1),
(142, 'Violet', '#8C0A48', 140, 10, 72, 1),
(143, 'Violet', '#5B1D4D', 91, 29, 77, 1),
(144, 'Kaki foncé', '#B5926E', 181, 146, 110, 1),
(146, 'Beige', '#FBD5C1', 251, 213, 193, 1),
(147, 'Gris', '#4B69E7', 75, 105, 231, 1),
(148, 'Blanc', '#EEEEEE', 238, 238, 238, 1),
(151, 'Gris', '#5F5D50', 95, 93, 80, 1),
(152, 'Gris', '#846344', 132, 99, 68, 1),
(153, 'Argent', '#CCB49A', 204, 180, 154, 1),
(154, 'Gris', '#B18481', 177, 132, 129, 1),
(155, 'Kaki foncé', '#B7815D', 183, 129, 93, 1),
(156, 'Noir', '#000000', 0, 0, 0, 1),
(157, 'Blanc', '#FFFFFF', 255, 255, 255, 1),
(158, 'Violet', '#800080', 128, 0, 128, 1);

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
('DoctrineMigrations\\Version20221214143523', '2022-12-14 15:35:32', 316);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `palette`
--

INSERT INTO `palette` (`id`, `name`) VALUES
(1, 'Palette 1'),
(2, 'Palette 2'),
(3, 'Palette 3'),
(4, 'Palette 4'),
(5, 'Palette 5'),
(6, 'Palette 6'),
(7, 'Palette 7'),
(8, 'Palette 8'),
(9, 'Palette 9'),
(10, 'Palette 10'),
(11, 'Palette 11'),
(12, 'Palette 12'),
(13, 'Palette 13'),
(14, 'Palette 14'),
(15, 'Palette 15'),
(16, 'Palette 16'),
(17, 'Palette 17'),
(18, 'Palette 18'),
(19, 'Palette 19'),
(20, 'Palette 20'),
(21, 'Palette 21'),
(22, 'Palette 22'),
(23, 'Palette 23'),
(24, 'Palette 24'),
(25, 'Palette 25'),
(26, 'Palette 26'),
(27, 'Palette 27'),
(28, 'Palette 28'),
(29, 'Palette 29'),
(30, 'Palette 30'),
(31, 'Palette 31'),
(32, 'Palette 32');

-- --------------------------------------------------------

--
-- Structure de la table `palette_color`
--

CREATE TABLE `palette_color` (
  `palette_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `palette_color`
--

INSERT INTO `palette_color` (`palette_id`, `color_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(4, 16),
(4, 17),
(4, 18),
(4, 19),
(5, 21),
(5, 22),
(5, 23),
(6, 26),
(6, 27),
(6, 28),
(6, 29),
(6, 30),
(7, 31),
(7, 32),
(7, 33),
(7, 34),
(7, 35),
(8, 36),
(8, 37),
(8, 38),
(8, 39),
(8, 40),
(9, 41),
(9, 42),
(9, 43),
(9, 44),
(10, 46),
(10, 47),
(10, 48),
(10, 49),
(11, 51),
(11, 52),
(11, 53),
(11, 54),
(12, 56),
(12, 57),
(12, 58),
(12, 59),
(13, 61),
(13, 62),
(13, 63),
(13, 64),
(14, 66),
(14, 67),
(14, 68),
(15, 71),
(15, 72),
(15, 73),
(15, 74),
(16, 76),
(16, 77),
(16, 78),
(16, 79),
(17, 81),
(17, 82),
(17, 83),
(17, 84),
(18, 86),
(18, 87),
(18, 88),
(18, 89),
(19, 91),
(19, 92),
(19, 93),
(19, 94),
(20, 96),
(20, 97),
(20, 98),
(20, 99),
(20, 100),
(21, 101),
(21, 102),
(21, 103),
(21, 104),
(21, 105),
(22, 106),
(22, 107),
(22, 108),
(22, 109),
(23, 111),
(23, 112),
(23, 113),
(23, 114),
(24, 116),
(24, 117),
(24, 118),
(24, 119),
(24, 120),
(25, 121),
(25, 122),
(25, 123),
(25, 124),
(25, 125),
(26, 126),
(26, 127),
(26, 128),
(26, 129),
(27, 131),
(27, 132),
(27, 133),
(27, 134),
(28, 136),
(28, 137),
(28, 138),
(28, 139),
(28, 140),
(29, 141),
(29, 142),
(29, 143),
(29, 144),
(30, 146),
(30, 147),
(30, 148),
(31, 151),
(31, 152),
(31, 153),
(31, 154),
(31, 155),
(32, 156),
(32, 157),
(32, 158);

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
(2, 'Rouge foncé', '#8B0000', 139, 0, 0, 0),
(3, 'Rose', '#FFC0CB', 255, 192, 203, 0),
(4, 'Rose', '#ff1493', 255, 20, 147, 1),
(5, 'Orange', '#ff8c00', 255, 140, 0, 1),
(6, 'Orange', '#FFA500', 255, 165, 0, 0),
(7, 'Jaune', '#ffd700', 255, 215, 0, 0),
(8, 'Jaune', '#FFFF00', 255, 255, 0, 1),
(9, 'Kaki foncé', '#BDB76B', 189, 183, 107, 0),
(10, 'Rose', '#ee82ee', 238, 130, 238, 1),
(11, 'Rose', '#ff00ff', 255, 0, 255, 0),
(12, 'Violet', '#9400d3', 148, 0, 211, 1),
(13, 'Violet', '#800080', 128, 0, 128, 0),
(14, 'Vert', '#008000', 0, 128, 0, 1),
(15, 'Vert Foncé', '#006400', 0, 100, 0, 0),
(16, 'Turquoise', '#40E0D0', 64, 224, 208, 0),
(17, 'Bleu Ciel', '#87CEEB', 135, 206, 235, 0),
(18, 'Bleu', '#0000FF', 0, 0, 255, 1),
(19, 'Bleu marine', '#000080', 0, 0, 128, 0),
(20, 'Beige', '#ffe4c4', 255, 228, 196, 1),
(21, 'Marron', '#804400', 128, 0, 0, 1),
(22, 'Blanc', '#FFFFFF', 255, 255, 255, 1),
(23, 'Gris clair', '#D3D3D3', 211, 211, 211, 0),
(24, 'Argent', '#C0C0C0', 192, 192, 192, 0),
(25, 'Gris', '#808080', 128, 128, 128, 0),
(26, 'Gris', '#7D8082', 125, 128, 130, 1),
(27, 'Noir', '#000000', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tag_ambiance`
--

CREATE TABLE `tag_ambiance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `user_id` int(11) DEFAULT NULL,
  `haut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `tag_ambiance`
--
ALTER TABLE `tag_ambiance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vetement`
--
ALTER TABLE `vetement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
