-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 20, 2023 at 12:11 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Quizzeo`
--

-- --------------------------------------------------------

--
-- Table structure for table `Choix`
--

CREATE TABLE `Choix` (
  `IdC` int(11) NOT NULL,
  `reponse` varchar(255) NOT NULL,
  `Breponse` tinyint(1) NOT NULL,
  `IDQuestion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Choix`
--

INSERT INTO `Choix` (`IdC`, `reponse`, `Breponse`, `IDQuestion`) VALUES
(1, 'Belgique', 0, 1),
(2, 'Brésil', 0, 1),
(3, 'Argentine', 0, 1),
(4, 'France', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE `Question` (
  `IdQt` int(11) NOT NULL,
  `intituléQuestion` varchar(255) NOT NULL,
  `Difficulte` int(2) NOT NULL,
  `datedecreation` date NOT NULL,
  `IDQuizz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`IdQt`, `intituléQuestion`, `Difficulte`, `datedecreation`, `IDQuizz`) VALUES
(1, 'Quel est le pays qui a gagné la Coupe du Monde de football en 1998 ?', 1, '2023-06-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Quizz`
--

CREATE TABLE `Quizz` (
  `IdQz` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Difficulte` int(2) NOT NULL,
  `Datedecreation` date NOT NULL,
  `IDQuizzeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Quizz`
--

INSERT INTO `Quizz` (`IdQz`, `Titre`, `Difficulte`, `Datedecreation`, `IDQuizzeur`) VALUES
(1, 'Sport\r\n', 1, '2023-06-19', 1),
(2, 'Géographie', 1, '2023-06-19', 1),
(3, 'Français', 1, '2023-06-19', 1),
(4, 'Mathématique', 1, '2023-06-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `Role` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`ID`, `Username`, `Email`, `mdp`, `Role`) VALUES
(1, 'Admin', 'admin@admin', '$2y$10$tLoQEJvx33Pb.oaBe3hmneCrChRJC2vo4XYKWM.lohfhHVvUESfbS', 3),
(17, 'Zaky', 'zaky@gmail.com', '$2y$10$S.Ucx4m0J9ChNd4XQDj9eebXr.6TVRWf24.TDzMg0.q/IQiNLtv3W', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Choix`
--
ALTER TABLE `Choix`
  ADD PRIMARY KEY (`IdC`),
  ADD KEY `IDQuestion` (`IDQuestion`);

--
-- Indexes for table `Question`
--
ALTER TABLE `Question`
  ADD PRIMARY KEY (`IdQt`),
  ADD KEY `IDQuizz` (`IDQuizz`);

--
-- Indexes for table `Quizz`
--
ALTER TABLE `Quizz`
  ADD PRIMARY KEY (`IdQz`),
  ADD KEY `IDQuizzeur` (`IDQuizzeur`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `E-mail` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Choix`
--
ALTER TABLE `Choix`
  MODIFY `IdC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Question`
--
ALTER TABLE `Question`
  MODIFY `IdQt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Quizz`
--
ALTER TABLE `Quizz`
  MODIFY `IdQz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Choix`
--
ALTER TABLE `Choix`
  ADD CONSTRAINT `IDQuestion` FOREIGN KEY (`IDQuestion`) REFERENCES `Question` (`IdQt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Question`
--
ALTER TABLE `Question`
  ADD CONSTRAINT `IDQuizz` FOREIGN KEY (`IDQuizz`) REFERENCES `Quizz` (`IdQz`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Quizz`
--
ALTER TABLE `Quizz`
  ADD CONSTRAINT `IDQuizzeur` FOREIGN KEY (`IDQuizzeur`) REFERENCES `User` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
