-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 25 juin 2023 à 12:38
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
(77, 'Orange', '#e3a036', NULL, NULL, NULL, NULL),
(78, 'Rouge', '#cd1f14', NULL, NULL, NULL, NULL),
(79, 'Rouge', '#cd1f14', NULL, NULL, NULL, NULL),
(80, 'Orange', '#e48738', NULL, NULL, NULL, NULL),
(81, 'Orange', '#febe34', NULL, NULL, NULL, NULL),
(82, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(83, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(84, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(85, 'Bleu Ciel', '#0d6ca2', NULL, NULL, NULL, NULL),
(86, 'Bleu Ciel', '#0d6ca2', NULL, NULL, NULL, NULL),
(87, 'Bleu Ciel', '#0d6ca2', NULL, NULL, NULL, NULL),
(88, 'Bleu Ciel', '#0d6ca2', NULL, NULL, NULL, NULL),
(89, 'Bleu Ciel', '#0d6ca2', NULL, NULL, NULL, NULL),
(90, 'Bleu Ciel', '#0d6ca2', NULL, NULL, NULL, NULL),
(91, 'Bleu Ciel', '#0d6ca2', NULL, NULL, NULL, NULL),
(92, 'Bleu Ciel', '#0e71a6', NULL, NULL, NULL, NULL),
(93, 'Bleu Ciel', '#0f74a9', NULL, NULL, NULL, NULL),
(94, 'Orange', '#ad100a', NULL, NULL, NULL, NULL),
(95, 'Gris', '#3a435e', NULL, NULL, NULL, NULL),
(96, 'Gris', '#3a435e', NULL, NULL, NULL, NULL),
(97, 'Bleu Ciel', '#106ca0', NULL, NULL, NULL, NULL),
(98, 'Jaune', '#feb827', NULL, NULL, NULL, NULL),
(99, 'Jaune', '#feb827', NULL, NULL, NULL, NULL),
(100, 'Jaune', '#feb827', NULL, NULL, NULL, NULL),
(101, 'Orange', '#c41e12', NULL, NULL, NULL, NULL),
(102, 'Gris', '#3e6b91', NULL, NULL, NULL, NULL),
(103, 'Jaune', '#a8a396', NULL, NULL, NULL, NULL),
(104, 'Jaune', '#feb827', NULL, NULL, NULL, NULL),
(105, 'Jaune', '#f1eed2', NULL, NULL, NULL, NULL),
(106, 'Jaune', '#f1eed2', NULL, NULL, NULL, NULL),
(107, 'Jaune', '#efeace', NULL, NULL, NULL, NULL),
(108, 'Jaune', '#efeace', NULL, NULL, NULL, NULL),
(109, 'Jaune', '#feb827', NULL, NULL, NULL, NULL),
(110, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(111, 'Jaune', '#dbcebe', NULL, NULL, NULL, NULL),
(112, 'Orange', '#935f14', NULL, NULL, NULL, NULL),
(113, 'Rouge', '#c41e12', NULL, NULL, NULL, NULL),
(114, 'Rouge', '#c41e12', NULL, NULL, NULL, NULL),
(115, 'Rouge', '#c41e12', NULL, NULL, NULL, NULL),
(116, 'Rouge', '#c41e12', NULL, NULL, NULL, NULL),
(117, 'Orange', '#dd853a', NULL, NULL, NULL, NULL),
(118, 'Jaune', '#febf33', NULL, NULL, NULL, NULL),
(119, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(120, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(121, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(122, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(123, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(124, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(125, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(126, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(127, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(128, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(129, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(130, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(131, 'Jaune', '#febb2c', NULL, NULL, NULL, NULL),
(132, 'Jaune', '#feb827', NULL, NULL, NULL, NULL),
(133, 'Rouge', '#c41e12', NULL, NULL, NULL, NULL),
(134, 'Jaune', '#dbcebe', NULL, NULL, NULL, NULL),
(135, 'Beige', '#f0eed2', NULL, NULL, NULL, NULL),
(136, 'Beige', '#f2eed3', NULL, NULL, NULL, NULL),
(137, 'Jaune', '#aa9e7b', NULL, NULL, NULL, NULL),
(138, 'Jaune', '#feba2b', NULL, NULL, NULL, NULL),
(139, 'Rouge', '#c31a11', NULL, NULL, NULL, NULL),
(140, 'Jaune', '#e6a541', NULL, NULL, NULL, NULL),
(141, 'Marron', '#9a7457', NULL, NULL, NULL, NULL),
(142, 'Gris', '#878787', NULL, NULL, NULL, NULL),
(143, 'Bleu', '#3b6fb7', NULL, NULL, NULL, NULL),
(144, 'Rouge', '#c31a11', NULL, NULL, NULL, NULL),
(145, 'Vert', '#889210', NULL, NULL, NULL, NULL);

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
('DoctrineMigrations\\Version20230509184313', '2023-05-09 18:43:16', 83);

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
  `color1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `palette`
--

INSERT INTO `palette` (`id`, `color1`, `color2`, `color3`, `color4`, `color5`) VALUES
(1, '#7d8082', '#f9f6f2', '#cebcae', '#91a096', '#000000'),
(2, '#feb083', '#78422c', '#ecdfd2', '#e3ac8f', '#6f604d'),
(3, '#595c3c', '#000000', '#2c3159', '#000000', '#000000'),
(4, '#6c2109', '#000000', '#ce5a07', '#fec029', '#000000'),
(5, '#024c69', '#000000', '#4e7784', '#000000', '#000000'),
(6, '#dcd2e5', '#fcfdfc', '#cdcdcd', '#7046c3', '#490e9b'),
(7, '#e7faff', '#b8c2ff', '#b9f1ff', '#e8e8fd', '#c9a9ff'),
(8, '#39663f', '#433c32', '#000000', '#72ba69', '#ffffff'),
(9, '#fd5505', '#fcfdfc', '#f48159', '#dcc19b', '#000000'),
(10, '#02fec9', '#54d460', '#e2159c', '#000000', '#000000'),
(11, '#41014d', '#930048', '#dcced5', '#571432', '#000000'),
(12, '#bf6154', '#424242', '#fefefe', '#942a44', '#000000'),
(13, '#eeedf2', '#f6b856', '#82d1d8', '#1d1c1a', '#000000'),
(14, '#bf3e83', '#28ad97', '#daa376', '#000000', '#000000'),
(15, '#8b86af', '#f6cfc8', '#eeedf2', '#f6b856', '#000000'),
(16, '#bdd6f2', '#74a2dd', '#344c7a', '#0e0e0e', '#000000'),
(17, '#7b64bf', '#f56d60', '#3c336f', '#dda786', '#000000'),
(18, '#916953', '#cf8e80', '#fcb5b5', '#faf6f6', '#000000'),
(19, '#da9c7f', '#9b6c7e', '#dabdc1', '#f6f7fb', '#000000'),
(20, '#f9dac5', '#c69262', '#73301e', '#1a0c03', '#717076'),
(21, '#fefefe', '#0d8a32', '#3f5a0a', '#fcfdf7', '#96a687'),
(22, '#d9d9d9', '#7f7f7f', '#4c4c4c', '#000000', '#000000'),
(23, '#f9beb3', '#fea642', '#feeb54', '#ff5d14', '#000000'),
(24, '#d9c6b6', '#a48066', '#87250b', '#b73515', '#7f4724'),
(25, '#424242', '#d1c7bb', '#797548', '#f29140', '#e1c5a0'),
(26, '#bbac97', '#616c4e', '#d77c2b', '#264355', '#000000'),
(27, '#7b9a4a', '#f0eebe', '#fb5154', '#fed876', '#000000'),
(28, '#8f6f02', '#645737', '#6f6422', '#824808', '#2f2727'),
(29, '#c0afdf', '#8c0a48', '#5b1d4d', '#b5926e', '#000000'),
(30, '#fbd5c1', '#4b69e7', '#eeeeee', '#000000', '#000000'),
(31, '#5f5d50', '#846344', '#ccb49a', '#b18481', '#b7815d'),
(32, '#000000', '#ffffff', '#800080', '#000000', '#000000');

-- --------------------------------------------------------

--
-- Structure de la table `palette_tag_humeur`
--

CREATE TABLE `palette_tag_humeur` (
  `palette_id` int(11) NOT NULL,
  `tag_humeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `palette_tag_humeur`
--

INSERT INTO `palette_tag_humeur` (`palette_id`, `tag_humeur_id`) VALUES
(1, 3),
(1, 7),
(1, 8),
(2, 2),
(2, 6),
(2, 8),
(3, 3),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(4, 1),
(4, 2),
(4, 4),
(4, 5),
(4, 6),
(4, 8),
(5, 3),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(6, 1),
(6, 4),
(6, 6),
(7, 1),
(7, 4),
(7, 6),
(7, 7),
(7, 8),
(8, 4),
(8, 6),
(8, 8),
(9, 1),
(9, 2),
(9, 4),
(9, 6),
(9, 8),
(10, 1),
(10, 4),
(10, 8),
(11, 6),
(11, 8),
(12, 2),
(12, 4),
(12, 5),
(12, 6),
(12, 8),
(13, 1),
(13, 4),
(13, 6),
(13, 8),
(14, 4),
(14, 8),
(15, 1),
(15, 4),
(15, 6),
(15, 8),
(16, 5),
(16, 6),
(16, 7),
(16, 8),
(17, 2),
(17, 4),
(17, 8),
(18, 3),
(18, 6),
(18, 8),
(19, 3),
(19, 5),
(19, 6),
(19, 7),
(19, 8),
(20, 3),
(20, 6),
(20, 7),
(20, 8),
(21, 4),
(21, 6),
(21, 8),
(22, 3),
(22, 7),
(22, 8),
(23, 1),
(23, 2),
(23, 4),
(23, 8),
(24, 4),
(24, 6),
(24, 8),
(25, 2),
(25, 4),
(25, 6),
(25, 8),
(26, 6),
(26, 8),
(27, 1),
(27, 2),
(27, 4),
(27, 6),
(27, 8),
(28, 3),
(28, 7),
(28, 8),
(29, 4),
(29, 6),
(29, 7),
(29, 8),
(30, 4),
(30, 8),
(31, 3),
(31, 6),
(31, 7),
(31, 8),
(32, 3),
(32, 4),
(32, 6),
(32, 7),
(32, 8);

-- --------------------------------------------------------

--
-- Structure de la table `reference_color`
--

CREATE TABLE `reference_color` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `color_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `r` int(11) DEFAULT NULL,
  `g` int(11) DEFAULT NULL,
  `b` int(11) DEFAULT NULL,
  `h_min` int(11) NOT NULL,
  `h_max` int(11) NOT NULL,
  `s_min` int(11) NOT NULL,
  `s_max` int(11) NOT NULL,
  `l_min` int(11) NOT NULL,
  `l_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reference_color`
--

INSERT INTO `reference_color` (`id`, `name`, `active`, `color_code`, `r`, `g`, `b`, `h_min`, `h_max`, `s_min`, `s_max`, `l_min`, `l_max`) VALUES
(52, 'Rouge', 1, '#FF0000', 255, 0, 0, 0, 15, 20, 100, 10, 80),
(53, 'Orange', 1, '#FF5100', 255, 81, 0, 15, 35, 20, 100, 35, 80),
(54, 'Jaune', 1, '#ffc300', 255, 195, 0, 35, 60, 50, 100, 50, 80),
(55, 'Vert', 1, '#2BFF00', 43, 255, 0, 60, 155, 20, 100, 10, 80),
(56, 'Bleu Ciel', 1, '#00FFEE', 0, 255, 238, 155, 200, 20, 100, 10, 80),
(57, 'Bleu', 1, '#0095FF', 0, 149, 255, 200, 240, 20, 100, 10, 90),
(58, 'Bleu Marine', 0, '#3300FF', 51, 0, 255, 220, 240, 20, 100, 10, 80),
(59, 'Violet', 1, '#9000FF', 144, 0, 255, 260, 290, 20, 100, 10, 90),
(60, 'Rose', 1, '#FF00F6', 255, 0, 246, 290, 340, 20, 100, 10, 90),
(61, 'Rouge', 1, '#FF0000', 255, 0, 0, 340, 360, 20, 100, 10, 80),
(62, 'Gris', 1, '#808080', 128, 128, 128, 0, 360, 0, 20, 10, 90),
(64, 'Blanc', 1, '#FFFFFF', 255, 255, 255, 0, 360, 0, 100, 90, 100),
(65, 'Noir', 1, '#000000', 0, 0, 0, 0, 360, 0, 100, 0, 25),
(66, 'Marron', 1, '#4d2b19', 77, 43, 25, 15, 35, 20, 100, 10, 55),
(67, 'Beige', 1, '#ecd2c6', 236, 210, 190, 15, 35, 20, 100, 80, 90),
(68, 'Rose', 1, '#e6b3b3', 230, 179, 179, 0, 15, 20, 100, 80, 90),
(69, 'Beige', 1, '#ece2c6', 236, 226, 198, 35, 60, 20, 50, 50, 90),
(70, 'Blanc', 1, '#c3e6b3', 195, 230, 179, 60, 155, 20, 100, 80, 90),
(71, 'Blanc', 1, '#c6ece9', 198, 236, 233, 155, 200, 20, 100, 80, 90),
(72, 'Rose', 1, '#ecc6d2', 236, 198, 210, 340, 360, 20, 100, 80, 90);

-- --------------------------------------------------------

--
-- Structure de la table `tag_ambiance`
--

CREATE TABLE `tag_ambiance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tag_ambiance`
--

INSERT INTO `tag_ambiance` (`id`, `name`) VALUES
(1, 'Sortie entre ami(e)'),
(2, 'Travail'),
(3, 'Sport'),
(4, 'Détente'),
(5, 'Rendez-vous romantique'),
(6, 'Rien de prévu');

-- --------------------------------------------------------

--
-- Structure de la table `tag_humeur`
--

CREATE TABLE `tag_humeur` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tag_humeur`
--

INSERT INTO `tag_humeur` (`id`, `name`) VALUES
(1, 'Joyeux'),
(2, 'Excité'),
(3, 'Fatigué'),
(4, 'Festif'),
(5, 'Casual friday'),
(6, 'Décontracté'),
(7, 'Comme un lundi'),
(8, 'Je ne sais pas');

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
(1, NULL, 'camillelelouche@yahoo.fr', '[\"ROLE_ADMIN\"]', '$2y$13$q0fX7I8B5DpO/ZgFZQ15aORTu50B98oV13hh4gyVZcFKZ.cyCf3vK', 'Lelouche', 'Camille', 'Il', '1990-07-03', 'Fan de jeux vidéos et de cinéma. J\'aime sortir avec des amis pour découvrir des nouveaux restaurants et faire des apéros jeux de société. J\'essaie de me maintenir en forme.', 'profile-picture.jpg'),
(2, NULL, 'flo@gmx.fr', '[]', '$2y$13$DMDOHXYquqY5oxc5lCtRDO39TtZwxmsa7C/P72x69v1UBz8p0f8tC', 'HARLAUT', 'Florent', 'Il', '1989-02-11', 'Je suis passionné par le foot (qui ne saute pas n\'est pas brestois !), la musique et la culture celtique.', '6446b97808323.jpg'),
(3, NULL, 'nicolasm-developer@gmail.com', '[]', '$2y$13$rvxQNWujhUOWyC8tu7dYFeZhtkpbnS4JFnPv58jfk8l2Ys4QDlR9.', 'MALHERBE', 'Nicolas', 'Il', '1992-12-26', NULL, '644ad26c48917.jpg'),
(4, NULL, 'mart1670@hotmail.fr', '[]', '$2y$13$z2QnRhj4Omf3ScJwv2aPMOaSpRefZZ.yo5XVf2IxqOrZX8LH/CPgO', 'HARLAUT', 'Martin', 'Il', '1990-06-12', 'Coucou', '644bf23083423.jpg'),
(10, NULL, 'martin.harlaut@yahoo.fr', '[]', '$2y$13$0NPVpAEG9STV3dXgv/VFEeZ3zn4OuqAuXAiPnTf3x/uWu93T.UXmS', 'HARLAUT', 'Martin', 'Il', '1990-06-12', 'coucou', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `vetement`
--

CREATE TABLE `vetement` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `vetement`
--

INSERT INTO `vetement` (`id`, `type`, `style`, `image`, `alt`, `user_id`) VALUES
(7, 'Bas', 'Jean', '1-63a03f83b9fd0.jpg', 'Jean-Travail-Kaki foncé', 1),
(10, 'Bas', 'Chino', '1-63a05c43aa8b4.png', 'Chino-Travail-Gris', 1),
(12, 'Bas', 'Chino', '1-63a062654c227.jpg', 'Chino-Sortie entre ami(e)-Rouge foncé', 1),
(20, 'Haut', 'Tee-Shirt', '1-63a9ae41db496.jpg', 'Tee-Shirt-Rendez-vous romantique-Kaki foncé', 1),
(21, 'Haut', 'Tee-Shirt', '1-63a9ae5bd2c79.jpg', 'Tee-Shirt-Rien de prévu-Kaki foncé', 1),
(22, 'Haut', 'Tee-Shirt', '1-63a9ae6fa71a5.jpg', 'Tee-Shirt-Sortie entre ami(e)-Noir', 1),
(23, 'Haut', 'Tee-Shirt', '1-63a9ae7e4ef0b.jpg', 'Tee-Shirt-Détente-Noir', 1),
(24, 'Haut', 'Tee-Shirt', '1-63a9ae8e40613.jpg', 'Tee-Shirt-Rendez-vous romantique-Rouge', 1),
(26, 'Haut', 'Veste', '1-63ab2cb612454.jpg', 'Veste-Sortie entre ami(e)-Marron', 1),
(30, 'Bas', 'Chino', '1-63af1aea5ff09.png', 'Chino-Rien de prévu-Marron', 1),
(32, 'Haut', 'Tee-shirt', '1-64243d0f06735.jpg', 'Tee-shirt-Sortie entre ami(e)-Gris', 1),
(39, 'Bas', 'Jean', '1-6425b4847d323.jpg', 'Jean-Sortie entre ami(e)-Gris', 1),
(42, 'Bas', 'Chino', '1-643bd510b0586.png', 'Chino-Travail-Jaune', 1);

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
(20, 65),
(21, 66),
(22, 67),
(23, 68),
(24, 69),
(26, 71),
(30, 75),
(32, 95),
(39, 102),
(42, 107);

-- --------------------------------------------------------

--
-- Structure de la table `vetement_tag_ambiance`
--

CREATE TABLE `vetement_tag_ambiance` (
  `vetement_id` int(11) NOT NULL,
  `tag_ambiance_id` int(11) NOT NULL
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
-- Index pour la table `palette_tag_humeur`
--
ALTER TABLE `palette_tag_humeur`
  ADD PRIMARY KEY (`palette_id`,`tag_humeur_id`),
  ADD KEY `IDX_625CA31E908BC74` (`palette_id`),
  ADD KEY `IDX_625CA31E2F693A87` (`tag_humeur_id`);

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
-- Index pour la table `tag_humeur`
--
ALTER TABLE `tag_humeur`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `vetement_tag_ambiance`
--
ALTER TABLE `vetement_tag_ambiance`
  ADD PRIMARY KEY (`vetement_id`,`tag_ambiance_id`),
  ADD KEY `IDX_E4F937A7969D8B67` (`vetement_id`),
  ADD KEY `IDX_E4F937A72B692073` (`tag_ambiance_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT pour la table `tag_ambiance`
--
ALTER TABLE `tag_ambiance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `tag_humeur`
--
ALTER TABLE `tag_humeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `vetement`
--
ALTER TABLE `vetement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `palette_tag_humeur`
--
ALTER TABLE `palette_tag_humeur`
  ADD CONSTRAINT `FK_625CA31E2F693A87` FOREIGN KEY (`tag_humeur_id`) REFERENCES `tag_humeur` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_625CA31E908BC74` FOREIGN KEY (`palette_id`) REFERENCES `palette` (`id`) ON DELETE CASCADE;

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
-- Contraintes pour la table `vetement_tag_ambiance`
--
ALTER TABLE `vetement_tag_ambiance`
  ADD CONSTRAINT `FK_E4F937A72B692073` FOREIGN KEY (`tag_ambiance_id`) REFERENCES `tag_ambiance` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E4F937A7969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
