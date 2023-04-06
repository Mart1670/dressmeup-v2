-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2022 at 12:32 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dressmeup`
--

-- --------------------------------------------------------

--
-- Table structure for table `color`
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
-- Dumping data for table `color`
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
(70, 'Rouge', '#cd1e15', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20221209103902', '2022-12-09 10:39:13', 154),
('DoctrineMigrations\\Version20221215095810', '2022-12-15 10:58:29', 537),
('DoctrineMigrations\\Version20221218193636', '2022-12-19 11:19:43', 158);

-- --------------------------------------------------------

--
-- Table structure for table `handicap`
--

CREATE TABLE `handicap` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `palette`
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
-- Dumping data for table `palette`
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
-- Table structure for table `palette_color`
--

CREATE TABLE `palette_color` (
  `palette_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reference_color`
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
-- Dumping data for table `reference_color`
--

INSERT INTO `reference_color` (`id`, `name`, `color_code`, `r`, `g`, `b`, `active`) VALUES
(1, 'Rouge', '#FF0000', 255, 0, 0, 1),
(3, 'Rose', '#FFC0CB', 255, 192, 203, 1),
(6, 'Orange', '#FFA500', 255, 165, 0, 1),
(8, 'Jaune', '#FFFF00', 255, 255, 0, 1),
(10, 'Violet', '#EE82EE', 238, 130, 238, 1),
(13, 'Violet', '#800080', 128, 0, 128, 1),
(14, 'Vert', '#008000', 0, 128, 0, 1),
(17, 'Bleu Ciel', '#87CEEB', 135, 206, 235, 1),
(18, 'Bleu', '#0000FF', 0, 0, 255, 1),
(19, 'Bleu marine', '#000080', 0, 0, 128, 1),
(20, 'Beige', '#ffe4c4', 255, 228, 196, 1),
(21, 'Marron', '#802d00', 128, 0, 0, 1),
(22, 'Blanc', '#FFFFFF', 255, 255, 255, 1),
(25, 'Gris', '#808080', 128, 128, 128, 1),
(27, 'Noir', '#000000', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tag_ambiance`
--

CREATE TABLE `tag_ambiance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_ambiance`
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
-- Table structure for table `tag_ambiance_vetement`
--

CREATE TABLE `tag_ambiance_vetement` (
  `tag_ambiance_id` int(11) NOT NULL,
  `vetement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag_humeur`
--

CREATE TABLE `tag_humeur` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenue`
--

CREATE TABLE `tenue` (
  `id` int(11) NOT NULL,
  `haut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tenue_vetement`
--

CREATE TABLE `tenue_vetement` (
  `tenue_id` int(11) NOT NULL,
  `vetement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `handicap_id`, `email`, `roles`, `password`, `name`, `firstname`, `sexe`, `birthdate`, `bio`, `avatar`) VALUES
(1, NULL, 'camillelelouche@yahoo.fr', '[]', '$2y$13$q0fX7I8B5DpO/ZgFZQ15aORTu50B98oV13hh4gyVZcFKZ.cyCf3vK', 'Lelouche', 'Camille', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vetement`
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
-- Dumping data for table `vetement`
--

INSERT INTO `vetement` (`id`, `name`, `type`, `style`, `image`, `alt`, `user_id`) VALUES
(1, NULL, 'Bas', 'Jean', '1-63a03adbf079b.png', 'Jean-Travail-test', 1),
(2, NULL, 'Bas', 'Chino', '1-63a03d606fab7.png', 'Chino-Sport-test', 1),
(3, NULL, 'Bas', 'Chino', '1-63a03de9a8c44.png', 'Chino-Sport-test', 1),
(4, NULL, 'Bas', 'Chino', '1-63a03e38b52d3.png', 'Chino-Sport-test', 1),
(5, NULL, 'Bas', 'Jean', '1-63a03ee5e6b1c.jpg', 'Jean-Travail-Kaki foncé', 1),
(6, NULL, 'Bas', 'Jean', '1-63a03f4c2fe9d.jpg', 'Jean-Travail-Kaki foncé', 1),
(7, NULL, 'Bas', 'Jean', '1-63a03f83b9fd0.jpg', 'Jean-Travail-Kaki foncé', 1),
(8, NULL, 'Bas', 'Chino', '1-63a05bbb2d643.png', 'Chino-Travail-Gris', 1),
(9, NULL, 'Bas', 'Chino', '1-63a05bf7e6bca.png', 'Chino-Travail-Gris', 1),
(10, NULL, 'Bas', 'Chino', '1-63a05c43aa8b4.png', 'Chino-Travail-Gris', 1),
(11, NULL, 'Bas', 'Chino', '1-63a061fbc6e0d.jpg', 'Chino-Sortie entre ami(e)-Rouge foncé', 1),
(12, NULL, 'Bas', 'Chino', '1-63a062654c227.jpg', 'Chino-Sortie entre ami(e)-Rouge foncé', 1),
(13, NULL, 'Bas', 'Chino', '1-63a063f2c654c.jpg', 'Chino-Sortie entre ami(e)-Rouge foncé', 1),
(14, NULL, 'Bas', 'Chino', '1-63a06458bb734.jpg', 'Chino-Sortie entre ami(e)-Rouge foncé', 1),
(15, NULL, 'Bas', 'Chino', '1-63a064b917a7d.jpg', 'Chino-Sortie entre ami(e)-Rouge foncé', 1),
(16, NULL, 'Bas', 'Chino', '1-63a06ab8382d8.jpg', 'Chino-Sortie entre ami(e)-Rouge foncé', 1),
(17, NULL, 'Bas', 'Chino', '1-63a070810998d.jpg', 'Chino-Sortie entre ami(e)-Rouge foncé', 1),
(18, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae0e2384a.jpg', 'Tee-Shirt-Sport-Gris', 1),
(19, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae289929e.jpg', 'Tee-Shirt-Détente-Gris', 1),
(20, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae41db496.jpg', 'Tee-Shirt-Rendez-vous romantique-Kaki foncé', 1),
(21, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae5bd2c79.jpg', 'Tee-Shirt-Rien de prévu-Kaki foncé', 1),
(22, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae6fa71a5.jpg', 'Tee-Shirt-Sortie entre ami(e)-Noir', 1),
(23, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae7e4ef0b.jpg', 'Tee-Shirt-Détente-Noir', 1),
(24, NULL, 'Haut', 'Tee-Shirt', '1-63a9ae8e40613.jpg', 'Tee-Shirt-Rendez-vous romantique-Rouge', 1),
(25, NULL, 'Haut', 'Tee-Shirt', '1-63a9aeb2504af.jpg', 'Tee-Shirt-Rendez-vous romantique-Rouge', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vetement_color`
--

CREATE TABLE `vetement_color` (
  `vetement_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vetement_color`
--

INSERT INTO `vetement_color` (`vetement_id`, `color_id`) VALUES
(1, 46),
(2, 47),
(3, 48),
(4, 49),
(5, 50),
(6, 51),
(7, 52),
(8, 53),
(9, 54),
(10, 55),
(11, 56),
(12, 57),
(13, 58),
(14, 59),
(15, 60),
(16, 61),
(17, 62),
(18, 63),
(19, 64),
(20, 65),
(21, 66),
(22, 67),
(23, 68),
(24, 69),
(25, 70);

-- --------------------------------------------------------

--
-- Table structure for table `vetement_tag_humeur`
--

CREATE TABLE `vetement_tag_humeur` (
  `vetement_id` int(11) NOT NULL,
  `tag_humeur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `handicap`
--
ALTER TABLE `handicap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `palette`
--
ALTER TABLE `palette`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `palette_color`
--
ALTER TABLE `palette_color`
  ADD PRIMARY KEY (`palette_id`,`color_id`),
  ADD KEY `IDX_6A00BA8D908BC74` (`palette_id`),
  ADD KEY `IDX_6A00BA8D7ADA1FB5` (`color_id`);

--
-- Indexes for table `reference_color`
--
ALTER TABLE `reference_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_ambiance`
--
ALTER TABLE `tag_ambiance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_ambiance_vetement`
--
ALTER TABLE `tag_ambiance_vetement`
  ADD PRIMARY KEY (`tag_ambiance_id`,`vetement_id`),
  ADD KEY `IDX_6648AA802B692073` (`tag_ambiance_id`),
  ADD KEY `IDX_6648AA80969D8B67` (`vetement_id`);

--
-- Indexes for table `tag_humeur`
--
ALTER TABLE `tag_humeur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenue`
--
ALTER TABLE `tenue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_EB51486DA76ED395` (`user_id`);

--
-- Indexes for table `tenue_vetement`
--
ALTER TABLE `tenue_vetement`
  ADD PRIMARY KEY (`tenue_id`,`vetement_id`),
  ADD KEY `IDX_BC01B54628239C7` (`tenue_id`),
  ADD KEY `IDX_BC01B546969D8B67` (`vetement_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  ADD KEY `IDX_8D93D649B996CB29` (`handicap_id`);

--
-- Indexes for table `vetement`
--
ALTER TABLE `vetement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3CB446CFA76ED395` (`user_id`);

--
-- Indexes for table `vetement_color`
--
ALTER TABLE `vetement_color`
  ADD PRIMARY KEY (`vetement_id`,`color_id`),
  ADD KEY `IDX_640260C4969D8B67` (`vetement_id`),
  ADD KEY `IDX_640260C47ADA1FB5` (`color_id`);

--
-- Indexes for table `vetement_tag_humeur`
--
ALTER TABLE `vetement_tag_humeur`
  ADD PRIMARY KEY (`vetement_id`,`tag_humeur_id`),
  ADD KEY `IDX_E351393B969D8B67` (`vetement_id`),
  ADD KEY `IDX_E351393B2F693A87` (`tag_humeur_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `handicap`
--
ALTER TABLE `handicap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `palette`
--
ALTER TABLE `palette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `reference_color`
--
ALTER TABLE `reference_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tag_ambiance`
--
ALTER TABLE `tag_ambiance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tag_humeur`
--
ALTER TABLE `tag_humeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenue`
--
ALTER TABLE `tenue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vetement`
--
ALTER TABLE `vetement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `palette_color`
--
ALTER TABLE `palette_color`
  ADD CONSTRAINT `FK_6A00BA8D7ADA1FB5` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6A00BA8D908BC74` FOREIGN KEY (`palette_id`) REFERENCES `palette` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tag_ambiance_vetement`
--
ALTER TABLE `tag_ambiance_vetement`
  ADD CONSTRAINT `FK_6648AA802B692073` FOREIGN KEY (`tag_ambiance_id`) REFERENCES `tag_ambiance` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6648AA80969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tenue`
--
ALTER TABLE `tenue`
  ADD CONSTRAINT `FK_EB51486DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `tenue_vetement`
--
ALTER TABLE `tenue_vetement`
  ADD CONSTRAINT `FK_BC01B54628239C7` FOREIGN KEY (`tenue_id`) REFERENCES `tenue` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BC01B546969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649B996CB29` FOREIGN KEY (`handicap_id`) REFERENCES `handicap` (`id`);

--
-- Constraints for table `vetement`
--
ALTER TABLE `vetement`
  ADD CONSTRAINT `FK_3CB446CFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `vetement_color`
--
ALTER TABLE `vetement_color`
  ADD CONSTRAINT `FK_640260C47ADA1FB5` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_640260C4969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vetement_tag_humeur`
--
ALTER TABLE `vetement_tag_humeur`
  ADD CONSTRAINT `FK_E351393B2F693A87` FOREIGN KEY (`tag_humeur_id`) REFERENCES `tag_humeur` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E351393B969D8B67` FOREIGN KEY (`vetement_id`) REFERENCES `vetement` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
