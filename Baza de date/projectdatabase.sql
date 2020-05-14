-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 14, 2020 la 08:41 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `projectdatabase`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `commentmusic`
--

CREATE TABLE `commentmusic` (
  `Id` int(11) NOT NULL,
  `IdMusic` int(11) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `music`
--

CREATE TABLE `music` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Artist` varchar(255) NOT NULL,
  `Album` varchar(255) NOT NULL,
  `Gen` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Play` text NOT NULL,
  `Local` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `music`
--

INSERT INTO `music` (`Id`, `Name`, `Artist`, `Album`, `Gen`, `Date`, `Play`, `Local`) VALUES
(1, '1231241', 'b', 'd', 'c', '5-3-1992', '', 'https://www.youtube.com/embed/K-ct13k7x3E'),
(2, 'asd', 'asd', 'asd', 'asd', '1-1-1111', '', 'https://www.youtube.com/embed/K-ct13k7x3E');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `register`
--

CREATE TABLE `register` (
  `Id` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `UserPassword` varchar(20) NOT NULL,
  `ConfirmUserPassword` varchar(20) NOT NULL,
  `Country` varchar(10) NOT NULL,
  `Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `register`
--

INSERT INTO `register` (`Id`, `Email`, `UserName`, `UserPassword`, `ConfirmUserPassword`, `Country`, `Admin`) VALUES
(1, 'a', 'b', 'c', 'd', 'e', 0),
(2, 'asd', 'asd1', '123', '123', 'italia', 1);

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `commentmusic`
--
ALTER TABLE `commentmusic`
  ADD PRIMARY KEY (`Id`);

--
-- Indexuri pentru tabele `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`) USING HASH;

--
-- Indexuri pentru tabele `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `commentmusic`
--
ALTER TABLE `commentmusic`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `music`
--
ALTER TABLE `music`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pentru tabele `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
