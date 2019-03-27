### Progress Tracker WebApp

- Login-system
- Register-system
- Safe authentication
- Track progress
- Effective and easy-to-use UI

```sql

--
-- Database: `bit_master`
--

CREATE TABLE `assignment_table` (
  `ID` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `assignment_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `assignment_table`
--

INSERT INTO `assignment_table` (`ID`, `level`, `assignment_name`) VALUES
(1, 12, '00 UP AND RUNNING'),
(2, 12, '00 UP AND RUNNING'),
(3, 12, '01 LEVEN OVERVIEW'),
(4, 12, '02 LEVEL AANMAKEN'),
(5, 12, '03 QUERY PARAMS'),
(6, 12, '04 OPDRACHTEN AANMAKEN'),
(7, 12, '05 OPDRACHTEN TONEN'),
(8, 12, '06 START IT'),
(9, 12, '07 MAKE IT PRETTY'),
(10, 12, '08 BOOS FIGHT');

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
--

INSERT INTO `user_table` (`ID`, `user_login`, `user_password`, `user_name`, `current_assignment`) VALUES
(1, 'younesea28@gmail.com', 'd49a20e0fc16d5d0d714c97511f6aef3', 'Younes el Anjri', NULL),
(2, 'test@test.com', 'd49a20e0fc16d5d0d714c97511f6aef3', 'Younes el Anjri', NULL);

--
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
