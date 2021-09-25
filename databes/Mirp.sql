-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2021 at 04:37 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basicrp`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `pID` int(12) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `PosX` float NOT NULL DEFAULT 0,
  `PosY` float NOT NULL DEFAULT 0,
  `PosZ` float NOT NULL DEFAULT 0,
  `Health` float NOT NULL DEFAULT 100,
  `Interior` int(8) NOT NULL DEFAULT 0,
  `World` int(8) NOT NULL DEFAULT 0,
  `UCP` varchar(22) NOT NULL,
  `Age` int(5) NOT NULL DEFAULT 0,
  `Origin` varchar(22) NOT NULL DEFAULT 'None',
  `Gender` int(3) NOT NULL DEFAULT 0,
  `Skin` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`pID`, `Name`, `PosX`, `PosY`, `PosZ`, `Health`, `Interior`, `World`, `UCP`, `Age`, `Origin`, `Gender`, `Skin`) VALUES
(6, 'Jay_Alberd', 1650.18, -2246.32, 13.5033, 100, 0, 0, 'Jay_Alberd', 19, 'asia', 1, 240),
(7, 'Jay_Turner', -207.262, -188.67, 6.1262, 100, 0, 0, 'Jay_Turner', 19, 'Jay_Alberd', 1, 240);

-- --------------------------------------------------------

--
-- Table structure for table `playerucp`
--

CREATE TABLE `playerucp` (
  `ID` int(11) NOT NULL,
  `UCP` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `Skin` int(11) NOT NULL DEFAULT '137',
  `slot1` varchar(32) NOT NULL DEFAULT '0',
  `slot2` varchar(32) NOT NULL DEFAULT '0',
  `slot3` varchar(32) NOT NULL DEFAULT '0',
  `cash` int(11) NOT NULL,
  `cank` int(11) NOT NULL,
  `pLevel` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playerucp`
--

INSERT INTO `playerucp` (`ID`, `UCP`, `email`, `password`, `code`, `status`) VALUES
(9, 'Jay_Alberd', 'skyot201@gmail.com', '$2y$10$HFMiH5rKtTMUbKwsqpeBFuG905YYRRlze1IbDfiiYDMUC4c0F.Rk6', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `playerucp`
--
ALTER TABLE `playerucp`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `pID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `playerucp`
--
ALTER TABLE `playerucp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
