-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 01:49 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogID`, `tipID`, `naslov`, `opis`, `datum`) VALUES
(1, 2, '10 aktivnosti za koje nauka tvrdi da će vas učiniti srećnijim', '1.Mentalno izdvojite nešto dobro iz života\r\n2.Pošaljite poruku zahvalnosti\r\n3.Potrošite novac na nekog drugog\r\n4.Vežbajte\r\n5.Slušanje muzike\r\n6.Planiranje\r\n7.Navedite 3 dobre stvari koje su danas dogodile', '2020-01-22'),
(2, 3, 'Panični napad i simptomi- testirajte se i proverite Vaš rezultat', 'https://www.anxietycentre.com/anxiety-tests/panic-attack-test.shtml\r\nNa linku koji se nalazi u donjem redu možete preuzeti besplatan test sa 10 pitanja, koji će Vam pomoći da proverite koliki je Vaš nivo anksioznosti i mogućnost paničnog poremećaja.', '2020-01-15'),
(3, 2, 'Deset stvari koje kafa zaista radi vašem mozgu', '1-Kofein većinu ljudi ne sprečava da spavaju\r\n2-Ljudi krive kafu za sve i svašta\r\n3-Kofein i dremka?\r\n4-Pojačavanje održavanja pažnje\r\n5-Dve šolje dobro, pet šolja loše\r\n6-Bez simptoma povlačenja kada prestanete s uzimanjem?\r\n7-Dobro se osećate', '2020-01-01'),
(4, 4, 'Socijalna fobija- socijalna anksioznost i strah od odbacivanja', 'Socijalna fobija (socijalni anksiozni poremećaj) podrazumeva intenzivni strah od različitih društvenih situacija – posebno situacije koje nisu poznate ili u kojoj osećate da ćete biti posmatrani ili vrednovani od strane drugih. Ove društvene situacije ', '2019-10-16'),
(5, 1, 'Psihologija ljubavi koje traju čitav život', 'Nauka nam govori da romantična ljubav može da traje- i duže nego što joj često dajemo za pravo. Kao kultura, imamo tendenciju da budemo prilično cinični kada govorimo o mogućnostima romantične ljubavi', '2020-01-14'),
(6, 3, 'Test ličnosti – Big Five. O testu, njegovim dimenzijama i besplatno testiranje', 'NEUROTICIZAM(N)-razlikuje prilagođenost ili emocionalnu stabilnost od neprilagođenosti i neuroticizma.\r\nEKSTRAVERZIJA(E)-socijabilni\r\nOTVORENOST(O)-aktivna imaginacija\r\nSARADLJIVOST(A)-bazično altruistična\r\nSAVESNOST(C)-sposobnost kontrole impulsa', '2020-04-10');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf32 COLLATE=utf32_croatian_ci;

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
(1, 'ljubav', 'heart'),
(2, 'top10', 'list-ol'),
(3, 'testovi', 'clipboard'),
(4, 'razno', 'users');

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
