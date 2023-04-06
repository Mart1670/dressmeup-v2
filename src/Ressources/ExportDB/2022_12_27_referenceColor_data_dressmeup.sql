-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2022 at 05:36 PM
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

--
-- Dumping data for table `reference_color`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
