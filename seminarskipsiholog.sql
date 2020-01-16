-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 07:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminarskipsiholog`
--
CREATE DATABASE IF NOT EXISTS `seminarskipsiholog` DEFAULT CHARACTER SET utf32 COLLATE utf32_croatian_ci;
USE `seminarskipsiholog`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `blogID` int(11) NOT NULL AUTO_INCREMENT,
  `tipID` int(11) NOT NULL,
  `naslov` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `opis` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `datum` date NOT NULL,
  PRIMARY KEY (`blogID`),
  KEY `tipID_fk` (`tipID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogID`, `tipID`, `naslov`, `opis`, `datum`) VALUES
(2, 3, 'samo da haf', 'gfsdgf', '2020-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

DROP TABLE IF EXISTS `korisnik`;
CREATE TABLE IF NOT EXISTS `korisnik` (
  `korisnikID` int(11) NOT NULL AUTO_INCREMENT,
  `imePrezime` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `username` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `password` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `admin` tinyint(4) NOT NULL,
  PRIMARY KEY (`korisnikID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnikID`, `imePrezime`, `username`, `password`, `admin`) VALUES
(1, 'Aleksa Igic', 'aka', 'aka', 0),
(2, 'Svetozar Igic', 'cko', 'cko', 0),
(3, 'Mihailo Igic', 'misa', 'misa', 1),
(4, 'Masa Aleksic', 'masa', 'masa', 1),
(5, 'Tijana Milošević', 'tina', 'tina', 0);

-- --------------------------------------------------------

--
-- Table structure for table `psiholozi`
--

DROP TABLE IF EXISTS `psiholozi`;
CREATE TABLE IF NOT EXISTS `psiholozi` (
  `psihologID` int(11) NOT NULL AUTO_INCREMENT,
  `imePrezimePsihologa` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `grad` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `slika` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  PRIMARY KEY (`psihologID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `psiholozi`
--

INSERT INTO `psiholozi` (`psihologID`, `imePrezimePsihologa`, `grad`, `slika`) VALUES
(1, 'Mihailo Igic', 'Beograd', 'mihailo.jpg'),
(2, 'Masa Aleksic', 'Ferizaj', 'masa.jpg\r\n'),
(3, 'Tijana Milosevic', 'Skoplje', 'tijana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tip`
--

DROP TABLE IF EXISTS `tip`;
CREATE TABLE IF NOT EXISTS `tip` (
  `tipID` int(11) NOT NULL,
  `nazivTipa` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  `slikica` varchar(255) COLLATE utf32_croatian_ci NOT NULL,
  PRIMARY KEY (`tipID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `tip`
--

INSERT INTO `tip` (`tipID`, `nazivTipa`, `slikica`) VALUES
(1, 'ljubav', ''),
(2, 'top10', ''),
(3, 'testovi', ''),
(4, 'razno', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `tipID_fk` FOREIGN KEY (`tipID`) REFERENCES `tip` (`tipID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
