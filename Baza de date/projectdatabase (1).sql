-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 27, 2020 la 09:28 PM
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
(138, 'cvvvbv', 'Dinu', 'abc', 'bcvbvcv', 'bvbcb', 'bvbvvb', '/MUM/PhpMusic/uploads/MIRA - O privire (Official Video).mp3'),
(140, 'aaaaa', 'Dinu', 'abc', 'aaa', 'aaa', 'aaaa', 'Array'),
(141, 'lkjj', 'Dinu', 'abc', 'jhgjhgjh', 'hjgjg', 'asdasd', 'Array'),
(142, 'nbnnn', 'Marius', 'abc', 'nnnn', 'nnnn', 'nnn', '/MUM/PhpMusic/uploads/DinuMariusA5.jpg');

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
(302, 'nbnnn', 'nnn', 'nnnn', 'nnnn', '3-3-', '', '/MUM/PhpMusic/uploads/DinuMariusA5.jpg'),
(303, 'cvvvbv', 'bvbvvb', 'bcvbvcv', 'bvbcb', '4-3-', '', '/MUM/PhpMusic/uploads/MIRA - O privire (Official Video).mp3'),
(304, '4', '4', '4', '4', '3-3-', '', '/MUM/PhpMusic/uploads/MIRA - O privire (Official Video).mp3'),
(305, '5', '5', '5', '5', '4-2-', '', '/MUM/PhpMusic/uploads/MIRA - O privire (Official Video).mp3'),
(306, '6', '6', '6', '6', '5-4-', '', '/MUM/PhpMusic/uploads/MIRA - O privire (Official Video).mp3'),
(307, '7', '7', '7', '7', '1-2-', '', '/MUM/PhpMusic/uploads/DinuMariusA5.jpg'),
(308, '9', '9', '9', '9', '4-3-', '', '/MUM/PhpMusic/uploads/DinuMariusA5.jpg'),
(309, '76', '76', '76', '76', '2-2-', '', '/MUM/PhpMusic/uploads/MIRA - O privire (Official Video).mp3'),
(310, '23', '23', '32', '23', '2-2-', '', '/MUM/PhpMusic/uploads/MIRA - O privire (Official Video).mp3'),
(311, 'adadas', 'dasadsdsa', 'dasasdas', 'dasasddas', '4-2-', '', '/MUM/PhpMusic/uploads/DinuMariusA5.jpg'),
(312, '999', '999', '999', '999', '3-3-', '', '/MUM/PhpMusic/uploads/DinuMariusA5.jpg'),
(313, 'ddsfdsf', 'dfsfsddsf', 'sdffsdfsd', 'sdffdsfds', '3-3-', '', '/MUM/PhpMusic/uploads/Fisa inscriere - semestrul 2.pdf'),
(314, 'vvcvvccc', 'vvvcvc', 'cvc', 'vvcv', '3-3-', '', '/MUM/PhpMusic/uploads/Fisa inscriere - semestrul 2-Info2R (1) (1).pdf'),
(315, 'kl', 'kl', 'kl', 'kl', '4-4-', '', '/MUM/PhpMusic/uploads/Fisa inscriere - semestrul 2.pdf'),
(316, 'hhghgghgh', 'hffhfhhg', 'fhhfgf', 'fghf', '3-3-', '', '/MUM/PhpMusic/uploads/DinuMariusA5.jpg'),
(317, 'zzzzzzzz', 'zzzzzzz', 'zzzzzzzzz', 'zzzzzzzz', '3-2-', '', '/MUM/PhpMusic/uploads/MIRA - O privire (Official Video).mp3'),
(318, 'fgfgdgf', 'gddfgd', 'gdfgdfg', 'fdgfd', '4-3-', '', '/MUM/PhpMusic/uploads/MIRA - O privire (Official Video).mp3'),
(319, 'sdg', 'sgd', 'gd', 'sdg', '3-2-', '', '/MUM/PhpMusic/uploads/DinuMariusA5.jpg'),
(320, 'asd', '123', '4', 'asd', '2-2-', '', '/MUM/PhpMusic/uploads/DinuMariusA5.jpg'),
(321, '', '', '', '', '', '', '/MUM/PhpMusic/uploads/'),
(322, '88888', '888', '888', '888', '2-1-', '', 'Array'),
(323, '999999', '999', '9999', '999', '3-3-', '', 'Array'),
(324, 'lkjj', 'asdasd', 'jhgjhgjh', 'hjgjg', '2-3-', '', 'Array'),
(325, 'aaaaa', 'aaaa', 'aaa', 'aaa', '4-3-', '', 'Array'),
(326, 'bbbb', 'bbbb', 'bbbb', 'bb', '3-2-', '', 'Array'),
(327, 'cccc', 'cccc', 'cccc', 'cccc', '2-1-', '', 'cccc'),
(328, 'dddd', 'dddd', 'dddd', 'dddd', '4-4-', '', 'dddd'),
(329, 'eeee', 'eeee', 'eee', 'eee', '4-4-', '', 'eeee'),
(330, 'Aquaman', 'aaaa', 'aaaa', 'aaa', '3-3-', '', 'https://www.youtube.com/embed/odHG3MV72sk');

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
(2, 'asd', 'MariusAdmin', '123', '123', 'italia', 1),
(56, 'Marius', 'Marius', '123', '123', 'italia', 0),
(57, 'ukamuraz@gmail.com', 'ukamuraz', '123', '123', 'italia', 0),
(58, 'mariusd30@yahoo.com', 'mariusd30', '123', '123', 'italia', 0),
(59, 'mariusd30@yahoo.com123', '123', '123', '123', 'italia', 0),
(60, ' ', 'AQA8cBRBm2c2jpLKENT8tvkSW578rj', ' ', ' ', ' ', 0),
(70, 'mihaidamian870@gmail.com', '99999', '123', '123', 'italia', 0);

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
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `commentmusic`
--
ALTER TABLE `commentmusic`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `favorite`
--
ALTER TABLE `favorite`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT pentru tabele `music`
--
ALTER TABLE `music`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT pentru tabele `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
