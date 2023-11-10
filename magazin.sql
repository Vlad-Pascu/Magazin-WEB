-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: mai 31, 2021 la 05:10 AM
-- Versiune server: 5.7.31
-- Versiune PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `magazin`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `componenta`
--

DROP TABLE IF EXISTS `componenta`;
CREATE TABLE IF NOT EXISTS `componenta` (
  `componenta_id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` text,
  PRIMARY KEY (`componenta_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `componenta`
--

INSERT INTO `componenta` (`componenta_id`, `nume`) VALUES
(1, 'Procesor'),
(2, 'Placa de baza'),
(3, 'Placa video'),
(4, 'RAM'),
(5, 'Sursa');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `cos`
--

DROP TABLE IF EXISTS `cos`;
CREATE TABLE IF NOT EXISTS `cos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume_produs` varchar(25) DEFAULT NULL,
  `componenta_id` int(11) NOT NULL,
  `email_client` varchar(253) DEFAULT NULL,
  `cant` int(11) DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `cos`
--

INSERT INTO `cos` (`id`, `nume_produs`, `componenta_id`, `email_client`, `cant`, `pret`) VALUES
(22, 'RM850x', 5, 'pascuvlad2001@yahoo.com', 1, 780);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `placa_de_baza`
--

DROP TABLE IF EXISTS `placa_de_baza`;
CREATE TABLE IF NOT EXISTS `placa_de_baza` (
  `specificatii_id` int(11) NOT NULL AUTO_INCREMENT,
  `forma` varchar(5) DEFAULT NULL,
  `soclu_procesor` varchar(10) DEFAULT NULL,
  `producator_chip` varchar(5) DEFAULT NULL,
  `model_chip` varchar(5) DEFAULT NULL,
  `interfata_grafica` varchar(25) DEFAULT NULL,
  `tip_memorie` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`specificatii_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `placa_de_baza`
--

INSERT INTO `placa_de_baza` (`specificatii_id`, `forma`, `soclu_procesor`, `producator_chip`, `model_chip`, `interfata_grafica`, `tip_memorie`) VALUES
(1, 'ATX', '1200', 'Intel', 'Z490', 'PCI Express x16 3.0', 'DDR4'),
(2, 'ATX', '1200', 'Intel', 'Z590', 'PCI Express x16 4.0', 'DDR4'),
(3, 'ATX', 'AM4', 'AMD', 'B450', 'PCI Express x16 3.0', 'DDR4'),
(4, 'ATX', 'AM4', 'AMD', 'B550', 'PCI Express x16 4.0', 'DDR4'),
(5, 'mATX', '1200', 'Intel', 'H410', 'PCI Express x16 3.0', 'DDR4');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `placa_video`
--

DROP TABLE IF EXISTS `placa_video`;
CREATE TABLE IF NOT EXISTS `placa_video` (
  `specificatii_id` int(11) NOT NULL AUTO_INCREMENT,
  `serie` text,
  `interfata` text,
  `tip_memorie` text,
  `dim_memorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`specificatii_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `placa_video`
--

INSERT INTO `placa_video` (`specificatii_id`, `serie`, `interfata`, `tip_memorie`, `dim_memorie`) VALUES
(1, 'GeForce GTX 1600', 'PCI Express x16 3.0', 'GDDR5', 6),
(2, 'GeForce RTX 2000', 'PCI Express x16 3.0', 'GDDR6', 6),
(3, 'GeForce RTX 2000', 'PCI Express x16 3.0', 'GDDR6', 8),
(4, 'GeForce RTX 3000', 'PCI Express x16 4.0', 'GDDR6', 12),
(5, 'GeForce RTX 3000', 'PCI Express x16 4.0', 'GDDR6', 8);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `procesor`
--

DROP TABLE IF EXISTS `procesor`;
CREATE TABLE IF NOT EXISTS `procesor` (
  `specificatii_id` int(11) NOT NULL AUTO_INCREMENT,
  `socket` varchar(5) DEFAULT NULL,
  `serie` text,
  `nucleu` text,
  `frecventa` text,
  `tehnologie` int(11) DEFAULT NULL,
  PRIMARY KEY (`specificatii_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `procesor`
--

INSERT INTO `procesor` (`specificatii_id`, `socket`, `serie`, `nucleu`, `frecventa`, `tehnologie`) VALUES
(1, '1200', 'Core i5 10th gen', 'Comet Lake', '4.1', 14),
(2, '1200', 'Core i7 10th gen', 'Comet Lake', '3.8', 14),
(3, '1200', 'Core i9 10th gen', 'Comet Lake', '3.7', 14),
(4, 'AM4', 'Ryzen 5 5000 Series', 'Vermeer', '3.7', 7),
(5, 'AM4', 'Ryzen 9 5000 Series', 'Vermeer', '3.7', 7);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `produs`
--

DROP TABLE IF EXISTS `produs`;
CREATE TABLE IF NOT EXISTS `produs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(20) DEFAULT NULL,
  `poza` text,
  `producator` varchar(20) DEFAULT NULL,
  `pret` int(11) DEFAULT NULL,
  `stoc` int(11) DEFAULT NULL,
  `componenta_id` int(11) DEFAULT NULL,
  `specificatii_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `produs`
--

INSERT INTO `produs` (`id`, `nume`, `poza`, `producator`, `pret`, `stoc`, `componenta_id`, `specificatii_id`) VALUES
(21, 'i5-10600KF', 'i5-10600KF.jpg', 'Intel', 980, 10, 1, 1),
(22, 'i7-10700K', 'i7-10700K.jpg', 'Intel', 1680, 8, 1, 2),
(23, 'i9-10900K', 'i9-10900K.jpg', 'Intel', 2600, 9, 1, 3),
(24, 'Ryzen 5 5600X', 'Ryzen5600X.jpg', 'AMD', 1400, 10, 1, 4),
(25, 'Ryzen 9 5900X', 'Ryzen5900X.jpg', 'AMD', 2700, 10, 1, 5),
(16, 'PRIME Z490-P', 'PRIMEZ490-P.jpg', 'ASUS', 935, 8, 2, 1),
(17, 'PRIME Z590-P', 'PRIMEZ590-P.jpg', 'ASUS', 1000, 9, 2, 2),
(18, 'PRIME B450-PLUS', 'PRIMEB450-PLUS.jpg', 'ASUS', 410, 8, 2, 3),
(19, 'PRIME B550-PLUS', 'PRIMEB550-PLUS.jpg', 'ASUS', 750, 10, 2, 4),
(20, 'PRIME H410-D', 'PRIMEH410-D.jpg', 'ASUS', 420, 10, 2, 5),
(11, 'GTX 1660 Super', 'GTX1660Super.jpg', 'GIGABYTE', 1500, 10, 3, 1),
(12, 'RTX 2060', 'RTX2060.jpg', 'GIGABYTE', 2100, 10, 3, 2),
(13, 'RTX 2070 SUPER', 'RTX2070.jpg', 'GIGABYTE', 2500, 10, 3, 3),
(14, 'RTX 3060', 'RTX3060.jpg', 'GIGABYTE', 3500, 10, 3, 4),
(15, 'RTX 3070', 'RTX3070.jpg', 'GIGABYTE', 4300, 9, 3, 5),
(6, 'Fury ', 'Fury8.jpg', 'HyperX', 260, 10, 4, 1),
(7, 'Fury ', 'Fury16.jpg', 'HyperX', 450, 10, 4, 2),
(8, 'Fury ', 'Fury1632.jpg', 'HyperX', 470, 10, 4, 3),
(9, 'Vengeance', 'Vengeance16.jpg', 'Corsair', 510, 8, 4, 4),
(10, 'Vengeance', 'Vengeance32.jpg', 'Corsair', 1100, 9, 4, 5),
(1, 'S12-III-550', 'S12-III-550.jpg', 'Seasonic', 260, 10, 5, 1),
(2, 'S12-III-650', 'S12-III-650.jpg', 'Seasonic', 284, 10, 5, 2),
(3, 'CV650', 'CV650.jpg', 'Corsair', 300, 10, 5, 3),
(4, 'Pulsar', 'Pulsar.jpg', 'AQIRYS', 360, 10, 5, 4),
(5, 'RM850x', 'RM850x.jpg', 'Corsair', 780, 8, 5, 5);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `ram`
--

DROP TABLE IF EXISTS `ram`;
CREATE TABLE IF NOT EXISTS `ram` (
  `specificatii_id` int(11) NOT NULL AUTO_INCREMENT,
  `tip` varchar(5) DEFAULT NULL,
  `capacitate` int(11) DEFAULT NULL,
  `frecventa` int(11) DEFAULT NULL,
  `latenta` int(11) DEFAULT NULL,
  PRIMARY KEY (`specificatii_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `ram`
--

INSERT INTO `ram` (`specificatii_id`, `tip`, `capacitate`, `frecventa`, `latenta`) VALUES
(1, 'DDR4', 8, 2666, 16),
(2, 'DDR4', 16, 2666, 16),
(3, 'DDR4', 16, 3200, 16),
(4, 'DDR4', 16, 3200, 16),
(5, 'DDR4', 32, 3200, 16);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `sursa`
--

DROP TABLE IF EXISTS `sursa`;
CREATE TABLE IF NOT EXISTS `sursa` (
  `specificatii_id` int(11) NOT NULL AUTO_INCREMENT,
  `putere` int(11) DEFAULT NULL,
  `eficienta` varchar(4) DEFAULT NULL,
  `certificare` text,
  PRIMARY KEY (`specificatii_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `sursa`
--

INSERT INTO `sursa` (`specificatii_id`, `putere`, `eficienta`, `certificare`) VALUES
(1, 550, '85%', '80+ Bronze'),
(2, 650, '85%', '80+ Bronze'),
(3, 650, '88%', '80+ Bronze'),
(4, 750, '88%', '80+ Bronze'),
(5, 850, '90%', '80+ Gold');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `utilizator`
--

DROP TABLE IF EXISTS `utilizator`;
CREATE TABLE IF NOT EXISTS `utilizator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(25) NOT NULL,
  `prenume` varchar(25) NOT NULL,
  `email` varchar(253) NOT NULL,
  `parola` char(255) DEFAULT NULL,
  `admin` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `utilizator`
--

INSERT INTO `utilizator` (`id`, `nume`, `prenume`, `email`, `parola`, `admin`) VALUES
(10, 'Pascu', 'Vlad', 'pascuvlad2001@yahoo.com', 'dc0a31703e61c6f0710318b7be4d1083', 1),
(9, 'Vlad', 'Florin', '6', '8287458823facb8ff918dbfabcd22ccb', NULL),
(11, 'Ion', 'Ion', 'email@yahoo.com', '8287458823facb8ff918dbfabcd22ccb', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
