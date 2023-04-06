-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 20 déc. 2022 à 10:30
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
