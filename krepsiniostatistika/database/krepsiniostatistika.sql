-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2024 at 01:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `krepsiniostatistika`
--

-- --------------------------------------------------------

--
-- Table structure for table `komandos`
--

CREATE TABLE `komandos` (
  `ID` int(11) NOT NULL,
  `Pavadinimas` varchar(255) DEFAULT NULL,
  `Miestas` varchar(255) DEFAULT NULL,
  `Ikurmio_metai` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rungtynes`
--

CREATE TABLE `rungtynes` (
  `ID` int(11) NOT NULL,
  `data_ir_laikas` datetime DEFAULT NULL,
  `vieta` varchar(255) DEFAULT NULL,
  `komandos_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `statistika`
--

CREATE TABLE `statistika` (
  `ID` int(11) NOT NULL,
  `zaidejo_ID` int(11) DEFAULT NULL,
  `rungtyniu_ID` int(11) DEFAULT NULL,
  `Taskai` int(11) DEFAULT NULL,
  `rezultatyvus_perdavimai` int(11) DEFAULT NULL,
  `Atkovoti_kamuoliai` int(11) DEFAULT NULL,
  `Blokavimai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zaidejai`
--

CREATE TABLE `zaidejai` (
  `ID` int(11) NOT NULL,
  `Vardas` varchar(255) DEFAULT NULL,
  `Pavarde` varchar(255) DEFAULT NULL,
  `Gimimo_data` date DEFAULT NULL,
  `Aukstis` decimal(5,2) DEFAULT NULL,
  `Svoris` decimal(5,2) DEFAULT NULL,
  `Komandos_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komandos`
--
ALTER TABLE `komandos`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rungtynes`
--
ALTER TABLE `rungtynes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `komandos_ID` (`komandos_ID`);

--
-- Indexes for table `statistika`
--
ALTER TABLE `statistika`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `zaidejo_ID` (`zaidejo_ID`),
  ADD KEY `rungtyniu_ID` (`rungtyniu_ID`);

--
-- Indexes for table `zaidejai`
--
ALTER TABLE `zaidejai`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Komandos_ID` (`Komandos_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rungtynes`
--
ALTER TABLE `rungtynes`
  ADD CONSTRAINT `rungtynes_ibfk_1` FOREIGN KEY (`komandos_ID`) REFERENCES `rungtynes` (`ID`);

--
-- Constraints for table `statistika`
--
ALTER TABLE `statistika`
  ADD CONSTRAINT `statistika_ibfk_1` FOREIGN KEY (`zaidejo_ID`) REFERENCES `statistika` (`ID`),
  ADD CONSTRAINT `statistika_ibfk_2` FOREIGN KEY (`rungtyniu_ID`) REFERENCES `statistika` (`ID`);

--
-- Constraints for table `zaidejai`
--
ALTER TABLE `zaidejai`
  ADD CONSTRAINT `zaidejai_ibfk_1` FOREIGN KEY (`Komandos_ID`) REFERENCES `zaidejai` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
