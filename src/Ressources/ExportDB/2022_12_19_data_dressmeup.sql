-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 19 déc. 2022 à 15:25
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
(62, 'Rouge foncé', '#95621f', NULL, NULL, NULL, NULL);

--
-- Déchargement des données de la table `reference_color`
--

INSERT INTO `reference_color` (`id`, `name`, `color_code`, `r`, `g`, `b`, `active`) VALUES
(1, 'Rouge', '#FF0000', 255, 0, 0, 1),
(2, 'Rouge foncé', '#8B0000', 139, 0, 0, 1),
(3, 'Rose', '#FFC0CB', 255, 192, 203, 1),
(4, 'Rose foncé', '#FF1493', 255, 20, 147, 1),
(5, 'Orange foncé', '#FF8C00', 255, 140, 0, 1),
(6, 'Orange', '#FFA500', 255, 165, 0, 1),
(7, 'Or', '#FFD700', 255, 215, 0, 1),
(8, 'Jaune', '#FFFF00', 255, 255, 0, 1),
(9, 'Kaki foncé', '#BDB76B', 189, 183, 107, 1),
(10, 'Violet', '#EE82EE', 238, 130, 238, 1),
(11, 'Fuchsia', '#FF00FF', 255, 0, 255, 1),
(12, 'Violet foncé', '#9400D3', 148, 0, 211, 1),
(13, 'Violet', '#800080', 128, 0, 128, 1),
(14, 'Vert', '#008000', 0, 128, 0, 1),
(15, 'Vert Foncé', '#006400', 0, 100, 0, 1),
(16, 'Turquoise', '#40E0D0', 64, 224, 208, 1),
(17, 'Bleu Ciel', '#87CEEB', 135, 206, 235, 1),
(18, 'Bleu', '#0000FF', 0, 0, 255, 1),
(19, 'Bleu marine', '#000080', 0, 0, 128, 1),
(20, 'Beige', '#ffe4c4', 255, 228, 196, 1),
(21, 'Marron', '#800000', 128, 0, 0, 1),
(22, 'Blanc', '#FFFFFF', 255, 255, 255, 1),
(23, 'Gris clair', '#D3D3D3', 211, 211, 211, 1),
(24, 'Argent', '#C0C0C0', 192, 192, 192, 1),
(25, 'Gris', '#808080', 128, 128, 128, 1),
(26, 'Gris', '#7D8082', 125, 128, 130, 1),
(27, 'Noir', '#000000', 0, 0, 0, 1);

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

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `handicap_id`, `email`, `roles`, `password`, `name`, `firstname`, `sexe`, `birthdate`, `bio`, `avatar`) VALUES
(1, NULL, 'camillelelouche@yahoo.fr', '[]', '$2y$13$q0fX7I8B5DpO/ZgFZQ15aORTu50B98oV13hh4gyVZcFKZ.cyCf3vK', 'Lelouche', 'Camille', NULL, NULL, NULL, NULL);

--
-- Déchargement des données de la table `vetement`
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
(17, NULL, 'Bas', 'Chino', '1-63a070810998d.jpg', 'Chino-Sortie entre ami(e)-Rouge foncé', 1);

--
-- Déchargement des données de la table `vetement_color`
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
(17, 62);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
