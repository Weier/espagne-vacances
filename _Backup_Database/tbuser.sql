-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Dez 2013 um 14:51
-- Server Version: 5.6.11
-- PHP-Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `dbspanien`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `Name` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Vorname` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Strasse` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `PLZ` varchar(4) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Ort` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Username` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `Email` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `rechte` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=19 ;

--
-- Daten für Tabelle `tbuser`
--

INSERT INTO `tbuser` (`Name`, `Vorname`, `Strasse`, `PLZ`, `Ort`, `Username`, `Email`, `password`, `ID`, `rechte`) VALUES
('Weier', 'Andreas', 'Ch de la Verne 12', '1073', 'Savigny', 'weierand', 'andreas.weier@citycable.ch', '6030abd0ce7570eb4cb7c1003dcceb9e', 1, 1),
('Weier', 'Peter et Susanne', 'Ch. de la Verne 12', '1073', 'Savigny', 'famille', 'calpe.spain@citycable.ch', '6d11b4dba8d43ca20324b3ba44053fa2', 2, 1),
('Visitor', 'Nbr1', '', '', '', 'visiteur', '', '99f4a5e6a494d174c5210c51704fd643', 15, 0),
('Visitor', 'Nbr2', '', '', '', 'visiteur 1', '', '', 13, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
