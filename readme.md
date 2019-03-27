### Progress Tracker WebApp

- Login-system
- Register-system
- Safe authentication
- Track progress
- Effective and easy-to-use UI

```sql
-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 27 mrt 2019 om 14:21
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bit_master`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `assignment_table`
--

CREATE TABLE `assignment_table` (
  `ID` int(11) NOT NULL,
  `assignment_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `assignment_table`
--

INSERT INTO `assignment_table` (`ID`, `assignment_name`) VALUES
(1, '00 UP AND RUNNING'),
(2, '00 UP AND RUNNING'),
(3, '01 LEVEN OVERVIEW'),
(4, '02 LEVEL AANMAKEN'),
(5, '03 QUERY PARAMS'),
(6, '04 OPDRACHTEN AANMAKEN'),
(7, '05 OPDRACHTEN TONEN'),
(8, '06 START IT'),
(9, '07 MAKE IT PRETTY'),
(10, '08 BOOS FIGHT');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_table`
--

CREATE TABLE `user_table` (
  `ID` int(11) NOT NULL,
  `user_login` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `current_assignment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user_table`

-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `assignment_table`
--
ALTER TABLE `assignment_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `current_assignment` (`current_assignment`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `assignment_table`
--
ALTER TABLE `assignment_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT voor een tabel `user_table`
--
ALTER TABLE `user_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `user_table`
--
ALTER TABLE `user_table`
  ADD CONSTRAINT `user_table_ibfk_1` FOREIGN KEY (`current_assignment`) REFERENCES `assignment_table` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

```