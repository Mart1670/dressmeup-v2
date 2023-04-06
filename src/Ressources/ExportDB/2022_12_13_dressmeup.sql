-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 13 déc. 2022 à 17:29
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
  `b` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `color`
--

INSERT INTO `color` (`id`, `name`, `color_code`, `r`, `g`, `b`) VALUES
(1, 'Rouge indien', '#CD5C5C', 205, 92, 92),
(2, 'Corail clair', '#F08080', 240, 128, 128),
(3, 'Saumon', '#FA8072', 250, 128, 114),
(4, 'Saumon foncé', '#E9967A', 233, 150, 122),
(5, 'Saumon clair', '#FFA07A', 255, 160, 122),
(6, 'Cramoisi', '#DC143C', 220, 20, 60),
(7, 'Rouge', '#FF0000', 255, 0, 0),
(8, 'Brique de feu', '#B22222', 178, 34, 34),
(9, 'Rouge foncé', '#8B0000', 139, 0, 0),
(10, 'Rose', '#FFC0CB', 255, 192, 203),
(11, 'Rose clair', '#FFB6C1', 255, 182, 193),
(12, 'Rose chaud', '#FF69B4', 255, 105, 180),
(13, 'Rose foncé', '#FF1493', 255, 20, 147),
(14, 'Rouge violet moyen', '#C71585', 199, 21, 133),
(15, 'Rouge violet pâle', '#DB7093', 219, 112, 147),
(16, 'Saumon clair', '#FFA07A', 255, 160, 122),
(17, 'Corail', '#FF7F50', 255, 127, 80),
(18, 'Tomate', '#FF6347', 255, 99, 71),
(19, 'Rouge Orange', '#FF4500', 255, 69, 0),
(20, 'Orange foncé', '#FF8C00', 255, 140, 0),
(21, 'Orange', '#FFA500', 255, 165, 0),
(22, 'Or', '#FFD700', 255, 215, 0),
(23, 'Jaune', '#FFFF00', 255, 255, 0),
(24, 'Jaune clair', '#FFFFE0', 255, 255, 224),
(25, 'Chiffon citron', '#FFFACD', 255, 250, 205),
(26, 'Jaune tige doré clair', '#FAFAD2', 250, 250, 210),
(27, 'Fouet Papaye', '#FFEFD5', 255, 239, 213),
(28, 'Mocassin', '#FFE4B5', 255, 228, 181),
(29, 'Mousse de Pêche', '#FFDAB9', 255, 218, 185),
(30, 'Tige d\'or pâle', '#EEE8AA', 238, 232, 170),
(31, 'Kaki', '#F0E68C', 240, 230, 140),
(32, 'Kaki foncé', '#BDB76B', 189, 183, 107),
(33, 'Lavande', '#E6E6FA', 230, 230, 250),
(34, 'Chardon', '#D8BFD8', 216, 191, 216),
(35, 'Prune', '#DDA0DD', 221, 160, 221),
(36, 'Violet', '#EE82EE', 238, 130, 238),
(37, 'Orchidée', '#DA70D6', 218, 112, 214),
(38, 'Fuchsia', '#FF00FF', 255, 0, 255),
(39, 'Magenta', '#FF00FF', 255, 0, 255),
(40, 'Orchidée moyenne', '#BA55D3', 186, 85, 211),
(41, 'Violet moyen', '#9370DB', 147, 112, 219),
(42, 'Violet bleu', '#8A2BE2', 138, 43, 226),
(43, 'Violet foncé', '#9400D3', 148, 0, 211),
(44, 'Orchidée foncée', '#9932CC', 153, 50, 204),
(45, 'Magenta foncé', '#8B008B', 139, 0, 139),
(46, 'Violet', '#800080', 128, 0, 128),
(47, 'Indigo', '#4B0082', 75, 0, 130),
(48, 'Bleu ardoise', '#6A5ACD', 106, 90, 205),
(49, 'Bleu ardoise foncé', '#483D8B', 72, 61, 139),
(50, 'Jaune vert', '#ADFF2F', 173, 255, 47),
(51, 'Chartreuse', '#7FFF00', 127, 255, 0),
(52, 'Vert gazon', '#7CFC00', 124, 252, 0),
(53, 'Tilleul', '#00FF00', 0, 255, 0),
(54, 'Vert Tilleul', '#32CD32', 50, 205, 50),
(55, 'Vert pâle', '#98FB98', 152, 251, 152),
(56, 'Vert Clair', '#90EE90', 144, 238, 144),
(57, 'Vert Printemps Moyen', '#00FA9A', 0, 250, 154),
(58, 'Vert de printemps', '#00FF7F', 0, 255, 127),
(59, 'Vert de mer moyen', '#3CB371', 60, 179, 113),
(60, 'Vert marin', '#2E8B57', 46, 139, 87),
(61, 'Vert forêt', '#228B22', 34, 139, 34),
(62, 'Vert', '#008000', 0, 128, 0),
(63, 'Vert Foncé', '#006400', 0, 100, 0),
(64, 'Vert Jaune', '#9ACD32', 154, 205, 50),
(65, 'Vert olive', '#6B8E23', 107, 142, 35),
(66, 'Olive', '#808000', 128, 128, 0),
(67, 'Vert olive foncé', '#556B2F', 85, 107, 47),
(68, 'Aigue-marine moyen', '#66CDAA', 102, 205, 170),
(69, 'Vert de mer foncé', '#8FBC8F', 143, 188, 143),
(70, 'Vert de mer clair', '#20B2AA', 32, 178, 170),
(71, 'Cyan foncé', '#008B8B', 0, 139, 139),
(72, 'Sarcelle', '#008080', 0, 128, 128),
(73, 'Aqua', '#00FFFF', 0, 255, 255),
(74, 'Cyan', '#00FFFF', 0, 255, 255),
(75, 'Cyan clair', '#E0FFFF', 224, 255, 255),
(76, 'Turquoise pâle', '#AFEEEE', 175, 238, 238),
(77, 'Aigue-marine', '#7FFFD4', 127, 255, 212),
(78, 'Turquoise', '#40E0D0', 64, 224, 208),
(79, 'Turquoise moyen', '#48D1CC', 72, 209, 204),
(80, 'Turquoise foncé', '#00CED1', 0, 206, 209),
(81, 'Bleu Cadet', '#5F9EA0', 95, 158, 160),
(82, 'Bleu acier', '#4682B4', 70, 130, 180),
(83, 'Bleu acier clair', '#B0C4DE', 176, 196, 222),
(84, 'Bleu Poudre', '#B0E0E6', 176, 224, 230),
(85, 'Bleu clair', '#ADD8E6', 173, 216, 230),
(86, 'Bleu Ciel', '#87CEEB', 135, 206, 235),
(87, 'Bleu Ciel Clair', '#87CEFA', 135, 206, 250),
(88, 'Bleu ciel profond', '#00BFFF', 0, 191, 255),
(89, 'Bleu cagnard', '#1E90FF', 30, 144, 255),
(90, 'Bleu de Bleuet', '#6495ED', 100, 149, 237),
(91, 'Bleu ardoise moyen', '#7B68EE', 123, 104, 238),
(92, 'Bleu Royal', '#4169E1', 65, 105, 225),
(93, 'Bleu', '#0000FF', 0, 0, 255),
(94, 'Bleu moyen', '#0000CD', 0, 0, 205),
(95, 'Bleu foncé', '#00008B', 0, 0, 139),
(96, 'Marine', '#000080', 0, 0, 128),
(97, 'Bleu de minuit', '#191970', 25, 25, 112),
(98, 'Mais', '#FFF8DC', 255, 248, 220),
(99, 'Amande blanchie', '#FFEBCD', 255, 235, 205),
(100, 'Bisque', '#FFE4C4', 255, 228, 196),
(101, 'Blanc Navajo', '#FFDEAD', 255, 222, 173),
(102, 'Blé', '#F5DEB3', 245, 222, 179),
(103, 'bois de ronce', '#DEB887', 222, 184, 135),
(104, 'Tan', '#D2B48C', 210, 180, 140),
(105, 'Brun rosé', '#BC8F8F', 188, 143, 143),
(106, 'Marron sableux', '#F4A460', 244, 164, 96),
(107, 'Verge d\'or', '#DAA520', 218, 165, 32),
(108, 'Verge d\'or foncé', '#B8860B', 184, 134, 11),
(109, 'Pérou', '#CD853F', 205, 133, 63),
(110, 'Chocolat', '#D2691E', 210, 105, 30),
(111, 'Brun selle', '#8B4513', 139, 69, 19),
(112, 'Sienne', '#A0522D', 160, 82, 45),
(113, 'Marron', '#A52A2A', 165, 42, 42),
(114, 'Marron', '#800000', 128, 0, 0),
(115, 'Blanc', '#FFFFFF', 255, 255, 255),
(116, 'Neige', '#FFFAFA', 255, 250, 250),
(117, 'Miel', '#F0FFF0', 240, 255, 240),
(118, 'Crème de menthe', '#F5FFFA', 245, 255, 250),
(119, 'Azure', '#F0FFFF', 240, 255, 255),
(120, 'Bleu Alice', '#F0F8FF', 240, 248, 255),
(121, 'Blanc fantôme', '#F8F8FF', 248, 248, 255),
(122, 'Fumée blanche', '#F5F5F5', 245, 245, 245),
(123, 'Nacre', '#FFF5EE', 255, 245, 238),
(124, 'Beige', '#F5F5DC', 245, 245, 220),
(125, 'Vieille dentelle', '#FDF5E6', 253, 245, 230),
(126, 'Blanc Floral', '#FFFAF0', 255, 250, 240),
(127, 'Ivoire', '#FFFFF0', 255, 255, 240),
(128, 'Blanc antique', '#FAEBD7', 250, 235, 215),
(129, 'Lin', '#FAF0E6', 250, 240, 230),
(130, 'Blush lavande', '#FFF0F5', 255, 240, 245),
(131, 'Rose brumeux', '#FFE4E1', 255, 228, 225),
(132, 'Gainsboro', '#DCDCDC', 220, 220, 220),
(133, 'Gris clair', '#D3D3D3', 211, 211, 211),
(134, 'Argent', '#C0C0C0', 192, 192, 192),
(135, 'Gris foncé', '#A9A9A9', 169, 169, 169),
(136, 'Gris', '#808080', 128, 128, 128),
(137, 'Gris foncé', '#696969', 105, 105, 105),
(138, 'Gris ardoise clair', '#778899', 119, 136, 153),
(139, 'Gris ardoise', '#708090', 112, 128, 144),
(140, 'Gris ardoise foncé', '#2F4F4F', 47, 79, 79),
(142, 'Gris', '#7D8082', 125, 128, 130),
(143, 'Fumée blanche', '#F9F6F2', 249, 246, 242),
(144, 'Argent', '#CEBCAE', 206, 188, 174),
(145, 'Vert de mer foncé', '#91A096', 145, 160, 150),
(147, 'Saumon clair', '#FEB083', 254, 176, 131),
(148, 'Brun selle', '#78422C', 120, 66, 44),
(149, 'Blanc antique', '#ECDFD2', 236, 223, 210),
(150, 'bois de ronce', '#E3AC8F', 227, 172, 143),
(151, 'Gris foncé', '#6F604D', 111, 96, 77),
(152, 'Vert olive foncé', '#595C3C', 89, 92, 60),
(153, 'Noir', '#10005', 16, 0, 5),
(154, 'Gris ardoise foncé', '#2C3159', 44, 49, 89),
(157, 'Marron', '#6C2109', 108, 33, 9),
(158, 'Marron', '#60000', 96, 0, 0),
(159, 'Chocolat', '#CE5A07', 206, 90, 7),
(160, 'Verge d\'or', '#FEC029', 254, 192, 41),
(162, 'Gris ardoise foncé', '#024C69', 2, 76, 105),
(163, 'Noir', '#23244', 35, 36, 4),
(164, 'Gris ardoise', '#4E7784', 78, 119, 132),
(167, 'Gainsboro', '#DCD2E5', 220, 210, 229),
(168, 'Blanc', '#FCFDFC', 252, 253, 252),
(169, 'Gris clair', '#CDCDCD', 205, 205, 205),
(170, 'Bleu ardoise', '#7046C3', 112, 70, 195),
(171, 'Indigo', '#490E9B', 73, 14, 155),
(172, 'Cyan clair', '#E7FAFF', 231, 250, 255),
(173, 'Bleu acier clair', '#B8C2FF', 184, 194, 255),
(174, 'Turquoise pâle', '#B9F1FF', 185, 241, 255),
(175, 'Lavande', '#E8E8FD', 232, 232, 253),
(176, 'Prune', '#C9A9FF', 201, 169, 255),
(177, 'Gris ardoise foncé', '#39663F', 57, 102, 63),
(178, 'Gris ardoise foncé', '#433C32', 67, 60, 50),
(179, 'Noir', '#20003', 32, 0, 3),
(180, 'Vert de mer foncé', '#72BA69', 114, 186, 105),
(181, 'Blanc', '#FFFFFF', 255, 255, 255),
(182, 'Rouge Orange', '#FD5505', 253, 85, 5),
(183, 'Blanc', '#FCFDFC', 252, 253, 252),
(184, 'Corail', '#F48159', 244, 129, 89),
(185, 'bois de ronce', '#DCC19B', 220, 193, 155),
(187, 'Vert Printemps Moyen', '#02FEC9', 2, 254, 201),
(188, 'Vert de mer moyen', '#54D460', 84, 212, 96),
(189, 'Rose foncé', '#E2159C', 226, 21, 156),
(190, 'Marron', '#60100', 96, 16, 0),
(192, 'Indigo', '#41014D', 65, 1, 77),
(193, 'Marron', '#930048', 147, 0, 72),
(194, 'Gris clair', '#DCCED5', 220, 206, 213),
(195, 'Marron', '#571432', 87, 20, 50),
(197, 'Rouge indien', '#BF6154', 191, 97, 84),
(198, 'Gris ardoise foncé', '#424242', 66, 66, 66),
(199, 'Blanc', '#FEFEFE', 254, 254, 254),
(200, 'Marron', '#942A44', 148, 42, 68),
(202, 'Fumée blanche', '#EEEDF2', 238, 237, 242),
(203, 'Marron sableux', '#F6B856', 246, 184, 86),
(204, 'Bleu Ciel', '#82D1D8', 130, 209, 216),
(205, 'Noir', '#1D1C1A', 29, 28, 26),
(207, 'Rouge violet moyen', '#BF3E83', 191, 62, 131),
(208, 'Vert de mer clair', '#28AD97', 40, 173, 151),
(209, 'Saumon foncé', '#DAA376', 218, 163, 118),
(212, 'Gris ardoise clair', '#8B86AF', 139, 134, 175),
(213, 'Rose', '#F6CFC8', 246, 207, 200),
(214, 'Fumée blanche', '#EEEDF2', 238, 237, 242),
(215, 'Marron sableux', '#F6B856', 246, 184, 86),
(217, 'Bleu clair', '#BDD6F2', 189, 214, 242),
(218, 'Bleu de Bleuet', '#74A2DD', 116, 162, 221),
(219, 'Bleu ardoise foncé', '#344C7A', 52, 76, 122),
(220, 'Noir', '#0E0E0E', 14, 14, 14),
(222, 'Bleu ardoise', '#7B64BF', 123, 100, 191),
(223, 'Corail', '#F56D60', 245, 109, 96),
(224, 'Bleu ardoise foncé', '#3C336F', 60, 51, 111),
(225, 'bois de ronce', '#DDA786', 221, 167, 134),
(227, 'Gris foncé', '#916953', 145, 105, 83),
(228, 'Brun rosé', '#CF8E80', 207, 142, 128),
(229, 'Rose clair', '#FCB5B5', 252, 181, 181),
(230, 'Fumée blanche', '#FAF6F6', 250, 246, 246),
(232, 'Saumon foncé', '#DA9C7F', 218, 156, 127),
(233, 'Gris', '#9B6C7E', 155, 108, 126),
(234, 'Chardon', '#DABDC1', 218, 189, 193),
(235, 'Blanc fantôme', '#F6F7FB', 246, 247, 251),
(237, 'Bisque', '#F9DAC5', 249, 218, 197),
(238, 'Pérou', '#C69262', 198, 146, 98),
(239, 'Brun selle', '#73301E', 115, 48, 30),
(240, 'Noir', '#1A0C03', 26, 12, 3),
(241, 'Gris foncé', '#717076', 113, 112, 118),
(242, 'Blanc', '#FEFEFE', 254, 254, 254),
(243, 'Vert forêt', '#0D8A32', 13, 138, 50),
(244, 'Vert olive foncé', '#3F5A0A', 63, 90, 10),
(245, 'Neige', '#FCFDF7', 252, 253, 247),
(246, 'Vert de mer foncé', '#96A687', 150, 166, 135),
(247, 'Gainsboro', '#D9D9D9', 217, 217, 217),
(248, 'Gris', '#7F7F7F', 127, 127, 127),
(249, 'Gris ardoise foncé', '#4C4C4C', 76, 76, 76),
(250, 'Noir', '#000000', 0, 0, 0),
(252, 'Rose clair', '#F9BEB3', 249, 190, 179),
(253, 'Marron sableux', '#FEA642', 254, 166, 66),
(254, 'Kaki', '#FEEB54', 254, 235, 84),
(255, 'Rouge Orange', '#FF5D14', 255, 93, 20),
(257, 'Argent', '#D9C6B6', 217, 198, 182),
(258, 'Gris', '#A48066', 164, 128, 102),
(259, 'Brun selle', '#87250B', 135, 37, 11),
(260, 'Brique de feu', '#B73515', 183, 53, 21),
(261, 'Brun selle', '#7F4724', 127, 71, 36),
(262, 'Gris ardoise foncé', '#424242', 66, 66, 66),
(263, 'Argent', '#D1C7BB', 209, 199, 187),
(264, 'Gris foncé', '#797548', 121, 117, 72),
(265, 'Corail', '#F29140', 242, 145, 64),
(266, 'bois de ronce', '#E1C5A0', 225, 197, 160),
(267, 'Gris foncé', '#BBAC97', 187, 172, 151),
(268, 'Gris foncé', '#616C4E', 97, 108, 78),
(269, 'Chocolat', '#D77C2B', 215, 124, 43),
(270, 'Gris ardoise foncé', '#264355', 38, 67, 85),
(272, 'Vert olive', '#7B9A4A', 123, 154, 74),
(273, 'Bisque', '#F0EEBE', 240, 238, 190),
(274, 'Tomate', '#FB5154', 251, 81, 84),
(275, 'Kaki', '#FED876', 254, 216, 118),
(277, 'Olive', '#8F6F02', 143, 111, 2),
(278, 'Vert olive foncé', '#645737', 100, 87, 55),
(279, 'Vert olive foncé', '#6F6422', 111, 100, 34),
(280, 'Brun selle', '#824808', 130, 72, 8),
(281, 'Gris ardoise foncé', '#2F2727', 47, 39, 39),
(282, 'Bleu acier clair', '#C0AFDF', 192, 175, 223),
(283, 'Marron', '#8C0A48', 140, 10, 72),
(284, 'Indigo', '#5B1D4D', 91, 29, 77),
(285, 'Brun rosé', '#B5926E', 181, 146, 110),
(287, 'Mousse de Pêche', '#FBD5C1', 251, 213, 193),
(288, 'Bleu Royal', '#4B69E7', 75, 105, 231),
(289, 'Fumée blanche', '#EEEEEE', 238, 238, 238),
(292, 'Gris foncé', '#5F5D50', 95, 93, 80),
(293, 'Sienne', '#846344', 132, 99, 68),
(294, 'Tan', '#CCB49A', 204, 180, 154),
(295, 'Brun rosé', '#B18481', 177, 132, 129),
(296, 'Pérou', '#B7815D', 183, 129, 93),
(298, 'Blanc', '#FFFFFF', 255, 255, 255),
(299, 'Violet', '#800080', 128, 0, 128);

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
('DoctrineMigrations\\Version20221213131651', '2022-12-13 14:16:54', 609);

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
(1, 142),
(1, 143),
(1, 144),
(1, 145),
(2, 147),
(2, 148),
(2, 149),
(2, 150),
(2, 151),
(3, 152),
(3, 153),
(3, 154),
(4, 157),
(4, 158),
(4, 159),
(4, 160),
(5, 162),
(5, 163),
(5, 164),
(6, 167),
(6, 168),
(6, 169),
(6, 170),
(6, 171),
(7, 172),
(7, 173),
(7, 174),
(7, 175),
(7, 176),
(8, 177),
(8, 178),
(8, 179),
(8, 180),
(8, 181),
(9, 182),
(9, 183),
(9, 184),
(9, 185),
(10, 187),
(10, 188),
(10, 189),
(10, 190),
(11, 192),
(11, 193),
(11, 194),
(11, 195),
(12, 197),
(12, 198),
(12, 199),
(12, 200),
(13, 202),
(13, 203),
(13, 204),
(13, 205),
(14, 207),
(14, 208),
(14, 209),
(15, 212),
(15, 213),
(15, 214),
(15, 215),
(16, 217),
(16, 218),
(16, 219),
(16, 220),
(17, 222),
(17, 223),
(17, 224),
(17, 225),
(18, 227),
(18, 228),
(18, 229),
(18, 230),
(19, 232),
(19, 233),
(19, 234),
(19, 235),
(20, 237),
(20, 238),
(20, 239),
(20, 240),
(20, 241),
(21, 242),
(21, 243),
(21, 244),
(21, 245),
(21, 246),
(22, 247),
(22, 248),
(22, 249),
(22, 250),
(23, 252),
(23, 253),
(23, 254),
(23, 255),
(24, 257),
(24, 258),
(24, 259),
(24, 260),
(24, 261),
(25, 262),
(25, 263),
(25, 264),
(25, 265),
(25, 266),
(26, 267),
(26, 268),
(26, 269),
(26, 270),
(27, 272),
(27, 273),
(27, 274),
(27, 275),
(28, 277),
(28, 278),
(28, 279),
(28, 280),
(28, 281),
(29, 282),
(29, 283),
(29, 284),
(29, 285),
(30, 287),
(30, 288),
(30, 289),
(31, 292),
(31, 293),
(31, 294),
(31, 295),
(31, 296),
(32, 298),
(32, 299);

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
-- AUTO_INCREMENT pour la table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=302;

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
