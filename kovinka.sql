-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 20, 2019 at 12:23 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kovinka_markovic`
--

-- --------------------------------------------------------

--
-- Table structure for table `galerije`
--

DROP TABLE IF EXISTS `galerije`;
CREATE TABLE IF NOT EXISTS `galerije` (
  `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nazivGalerije` varchar(100) NOT NULL,
  `vreme` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galerije`
--

INSERT INTO `galerije` (`id`, `nazivGalerije`, `vreme`, `komentar`) VALUES
(1, 'Vesti', '2019-08-18 20:47:52', NULL),
(2, 'Restoran', '2019-08-18 20:47:52', NULL),
(3, 'Promocija', '2019-08-18 20:47:52', NULL),
(4, 'Krojacka radnja', '2019-08-18 20:47:52', NULL),
(6, 'Frizerski salon', '2019-08-20 11:57:43', NULL),
(7, 'Baze podataka', '2019-08-20 12:05:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galerijeslike`
--

DROP TABLE IF EXISTS `galerijeslike`;
CREATE TABLE IF NOT EXISTS `galerijeslike` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `idGalerije` int(2) NOT NULL,
  `slika` varchar(100) NOT NULL,
  `komentar` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galerijeslike`
--

INSERT INTO `galerijeslike` (`id`, `idGalerije`, `slika`, `komentar`) VALUES
(1, 1, '1.jpg', NULL),
(2, 1, '2.jpg', NULL),
(3, 1, '3.jpg', NULL),
(4, 1, '4.jpg', NULL),
(5, 1, '5.jpg', NULL),
(6, 1, '6.jpg', NULL),
(7, 1, '7.jpg', NULL),
(8, 1, '8.jpg', NULL),
(9, 1, '9.jpg', NULL),
(14, 2, '15.jpg', NULL),
(17, 2, '18.jpg', NULL),
(16, 2, '17.jpg', NULL),
(15, 2, '16.jpg', NULL),
(13, 2, '14.jpg', NULL),
(12, 2, '13.jpg', NULL),
(11, 2, '12.jpg', NULL),
(10, 2, '11.jpg', NULL),
(18, 3, '20.jpg', NULL),
(19, 3, '21.jpg', NULL),
(20, 3, '22.jpg', NULL),
(21, 3, '23.jpg', NULL),
(22, 3, '24.jpg', NULL),
(23, 3, '25.jpg', NULL),
(24, 4, '30.jpg', NULL),
(25, 4, '31.jpg', NULL),
(26, 4, '32.jpg', NULL),
(27, 4, '33.jpg', NULL),
(28, 4, '34.jpg', NULL),
(29, 4, '35.jpg', NULL),
(30, 5, '40.jpg', NULL),
(31, 5, '41.jpg', NULL),
(32, 5, '42.jpg', NULL),
(33, 5, '43.jpg', NULL),
(34, 5, '40.jpg', NULL),
(35, 5, '41.jpg', NULL),
(36, 5, '42.jpg', NULL),
(37, 5, '43.jpg', NULL),
(38, 5, '40.jpg', NULL),
(39, 5, '41.jpg', NULL),
(40, 5, '42.jpg', NULL),
(41, 5, '43.jpg', NULL),
(42, 6, '40.jpg', NULL),
(43, 6, '41.jpg', NULL),
(44, 6, '42.jpg', NULL),
(45, 6, '43.jpg', NULL),
(46, 6, '44.jpg', NULL),
(47, 7, '50.jpg', NULL),
(48, 7, '51.jpg', NULL),
(49, 7, '52.jpg', NULL),
(50, 7, '53.jpg', NULL),
(51, 7, '54.jpg', NULL),
(52, 7, '55.jpg', NULL),
(53, 7, '56.jpg', NULL),
(54, 7, '57.jpg', NULL),
(55, 7, '58.jpg', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
