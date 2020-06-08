-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 08, 2020 la 02:26 PM
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

--
-- Eliminarea datelor din tabel `commentmusic`
--

INSERT INTO `commentmusic` (`Id`, `IdMusic`, `UserName`, `Comment`, `Date`) VALUES
(1, 1, 'MariusDinu', 'Cea mai faina melodie!', '2020-06-08'),
(2, 1, 'fefe', 'Adevarat graiesti!', '2020-06-08'),
(3, 1, 'mariusd30', 'Sa-ti traiasca familia!', '2020-06-08'),
(4, 1, 'MariusAdmin', 'Va dau afara!', '2020-06-08');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `favorite`
--

CREATE TABLE `favorite` (
  `Id` int(11) NOT NULL,
  `NumeMelodie` varchar(255) NOT NULL,
  `UserName` varchar(255) NOT NULL,
  `ListaFavorite` varchar(255) NOT NULL,
  `Album` varchar(255) NOT NULL,
  `Gen` varchar(255) NOT NULL,
  `Artist` varchar(255) NOT NULL,
  `Local` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `favorite`
--

INSERT INTO `favorite` (`Id`, `NumeMelodie`, `UserName`, `ListaFavorite`, `Album`, `Gen`, `Artist`, `Local`) VALUES
(1, '', 'MariusDinu', 'MyList', '', '', '', ''),
(2, 'Goodbye', 'MariusDinu', 'MyList', 'Love', 'Pop', 'Jason Derulo', 'https://www.youtube.com/embed/kUjKxtJd21E'),
(4, 'FEFE', 'MariusDinu', 'MyList', 'Dolar', 'Rap', '6IX9INE', 'https://www.youtube.com/embed/V_MXGdSBbAI'),
(6, '', 'MariusDinu', 'ListaMea2019', '', '', '', ''),
(7, 'STOOPID', 'MariusDinu', 'ListaMea2019', 'REKT', 'Rap', '6IX9INE', 'https://www.youtube.com/embed/VDa5iGiPgGs'),
(8, 'Swalla', 'MariusDinu', 'ListaMea2019', 'Lalala', 'Pop', 'Jason Derulo', 'https://www.youtube.com/embed/NGLxoKOvzu4');

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
  `Play` int(11) NOT NULL,
  `Local` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `music`
--

INSERT INTO `music` (`Id`, `Name`, `Artist`, `Album`, `Gen`, `Date`, `Play`, `Local`) VALUES
(1, 'GOOBA', '6IX9INE', 'REKT', 'Rap', '8-5-2020', 0, 'https://www.youtube.com/embed/pPw_izFr5PA'),
(2, 'STOOPID', '6IX9INE', 'REKT', 'Rap', '5-10-2018', 0, 'https://www.youtube.com/embed/VDa5iGiPgGs'),
(3, 'FEFE', '6IX9INE', 'Dolar', 'Rap', '22-7-2018', 0, 'https://www.youtube.com/embed/V_MXGdSBbAI'),
(4, 'Swalla', 'Jason Derulo', 'Lalala', 'Pop', '17-3-2017', 0, 'https://www.youtube.com/embed/NGLxoKOvzu4'),
(5, 'Tip Toe', 'Jason Derulo', 'Lalala', 'Pop', '8-11-2017', 0, 'https://www.youtube.com/embed/nNA9ru2Ox5o'),
(6, 'Goodbye', 'Jason Derulo', 'Love', 'Pop', '22-10-2018', 0, 'https://www.youtube.com/embed/kUjKxtJd21E'),
(7, 'Run Up', 'Major Lazer', 'High', 'Tehno', '12-4-2016', 0, 'https://www.youtube.com/embed/s616v2pSWDU'),
(8, 'Particula', 'Major Lazer', 'High', 'Tehno', '12-10-2014', 0, 'https://www.youtube.com/embed/CtEHrcA8dKc'),
(10, 'Unforgettable', 'French Montana', 'Free', 'Rap', '14-4-2017', 0, 'https://www.youtube.com/embed/CTFtOOh47oo'),
(11, ' Famous', 'French Montana', 'Start', 'Pop', '26-3-2018', 0, 'https://www.youtube.com/embed/VkNOzyyTPjk'),
(12, 'Salam', 'French Montana', 'Start', 'Jazz', '7-12-2019', 0, 'https://www.youtube.com/embed/p-lLhriCuyM'),
(13, 'Hai cu mine in Bali', 'Florin Salam', 'Soarele din nori', 'Manele', '8-2-2020', 0, 'https://www.youtube.com/embed/GPmwXVx7gME'),
(14, '10 ani de ghinion sa ai', 'Florin Salam', 'Dragoste', 'Manele', '24-12-2019', 0, 'https://www.youtube.com/embed/i8WP78xxS0Q'),
(15, 'Californication', 'Red Hot Chili Peppers', 'Travel', 'Rock', '27-10-2009', 0, 'https://www.youtube.com/embed/YlUKcNNmywk'),
(16, 'Clint Eastwood', 'Gorillaz', 'Heavy', 'Rock', '3-3-2015', 0, 'https://www.youtube.com/embed/1V_xRb0x9aw'),
(17, ' Feel Good Inc', 'Gorillaz', 'Free', 'Rock', '5-4-2009', 0, 'https://www.youtube.com/embed/HyHNuVaZJ-k');

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
  `AdminLevel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `register`
--

INSERT INTO `register` (`Id`, `Email`, `UserName`, `UserPassword`, `ConfirmUserPassword`, `Country`, `AdminLevel`) VALUES
(2, 'MariusAdmin', 'MariusAdmin', '123', '123', 'italia', 1),
(56, 'alin123@yahoo.com', 'alin123', '123', '123', 'italia', 0),
(58, 'mariusd30@yahoo.com', 'mariusd30', '123', '123', 'italia', 0),
(59, 'mariusd90@yahoo.com', 'MariusDinu', '123', '123', 'italia', 0),
(73, 'ukamuraz@gmail.com', 'ukamuraz', '123', '123', 'italia', 0),
(74, 'mihaidamian870@gmail.com', 'fefe', '123', '123', 'italia', 0);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `views`
--

CREATE TABLE `views` (
  `Id` int(11) NOT NULL,
  `IdMelodie` int(11) NOT NULL,
  `UserView` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `views`
--

INSERT INTO `views` (`Id`, `IdMelodie`, `UserView`) VALUES
(1, 3, 'MariusDinu'),
(2, 8, 'MariusDinu'),
(3, 1, 'MariusDinu'),
(4, 2, 'MariusDinu'),
(5, 1, 'fefe'),
(6, 1, 'mariusd30'),
(7, 1, 'MariusAdmin'),
(8, 17, 'MariusDinu'),
(9, 6, 'MariusDinu'),
(10, 14, 'MariusDinu');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `commentmusic`
--
ALTER TABLE `commentmusic`
  ADD PRIMARY KEY (`Id`);

--
-- Indexuri pentru tabele `favorite`
--
ALTER TABLE `favorite`
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
-- Indexuri pentru tabele `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `commentmusic`
--
ALTER TABLE `commentmusic`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pentru tabele `favorite`
--
ALTER TABLE `favorite`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pentru tabele `music`
--
ALTER TABLE `music`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pentru tabele `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pentru tabele `views`
--
ALTER TABLE `views`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
