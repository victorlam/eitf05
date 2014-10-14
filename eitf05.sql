-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 15 okt 2014 kl 00:40
-- Serverversion: 5.6.17
-- PHP-version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `eitf05`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `USERNAME` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  UNIQUE KEY `USERNAME` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `customers`
--

INSERT INTO `customers` (`USERNAME`, `PASSWORD`, `ADDRESS`) VALUES
('test', '$2y$10$pjbT54tCrklaO88dmyd1sefUlUIpGCeCj2T2/pEPTfr/WfQk0rmLa', 'test'),
('kund', '$2y$10$QnGY9Ofqf2/cqIkKioIDa.dCASDMyOhTodr1Can7Tl3QbBNBSEy/W', 'kund');

-- --------------------------------------------------------

--
-- Tabellstruktur `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(30) NOT NULL,
  `PRICE` int(11) NOT NULL,
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `products`
--

INSERT INTO `products` (`ID`, `NAME`, `PRICE`) VALUES
(1, 'Glass', 200),
(2, 'Lunch', 500),
(3, 'Bakelse', 300),
(4, 'Kaffe', 150),
(5, 'Te', 150),
(6, 'Baguette', 200),
(7, 'Sallad', 200),
(8, 'Energidryck', 800);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
