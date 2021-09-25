-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 03:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `accounts` (
  `pID` int(11) NOT NULL,
  `pName` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `pPassword` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `pass_salt` varchar(6) NOT NULL,
  `pKeyIp` varchar(11) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `pMail` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `pIpReg` varchar(16) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `pIp` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `pOnline` varchar(32) CHARACTER SET cp1251 COLLATE cp1251_bin NOT NULL,
  `pDataReg` varchar(32) CHARACTER SET utf8 NOT NULL,
  `pReferal` int(11) NOT NULL DEFAULT 0,
  `pLogin` int(11) NOT NULL,
  `pSex` int(11) NOT NULL,
  `pHP` float NOT NULL DEFAULT 100,
  `pSatiety` float NOT NULL DEFAULT 100,
  `pHaus` float NOT NULL DEFAULT 100,
  `pSkin` int(11) NOT NULL DEFAULT -1,
  `PosX` float NOT NULL,
  `PosY` float NOT NULL,
  `PosZ` float NOT NULL,
  `PosA` float NOT NULL,
  `Interior` int(11) NOT NULL,
  `World` int(11) NOT NULL,
  `pInjured` int(11) NOT NULL DEFAULT 0,
  `pHospital` int(11) NOT NULL DEFAULT 0,
  `pCash` int(11) NOT NULL,
  `pBank` int(11) NOT NULL,
  `pLevel` int(11) NOT NULL DEFAULT 1,
  `pExp` int(11) NOT NULL DEFAULT 1,
  `pSetSpawn` int(11) NOT NULL,
  `pMember` int(11) NOT NULL,
  `pRank` int(11) NOT NULL,
  `pLeader` int(11) NOT NULL,
  `pJob` int(11) NOT NULL,
  `pDrugs` int(11) NOT NULL,
  `pPatron` int(11) NOT NULL,
  `pMetall` int(11) NOT NULL,
  `pUseCar` int(11) NOT NULL,
  `pDonatechet` int(11) NOT NULL,
  `pProducts` varchar(16) NOT NULL DEFAULT '0,0,0',
  `pNumber` int(11) NOT NULL,
  `pSummaNumber` int(11) NOT NULL,
  `pSatietyBarActive` int(11) NOT NULL DEFAULT 100,
  `pZakon` int(11) NOT NULL,
  `pWarn` int(11) NOT NULL,
  `pfWarn` int(11) NOT NULL,
  `pWanted` int(11) NOT NULL,
  `pMuted` int(11) NOT NULL,
  `pPayCheck` int(11) NOT NULL,
  `pUpdPlayer` varchar(12) NOT NULL DEFAULT '0,0,0,0,0',
  `pMaxSchet` int(11) NOT NULL,
  `pPodtvMail` int(11) NOT NULL,
  `pCheckIp` int(11) NOT NULL,
  `pCheckGoogle` int(11) NOT NULL,
  `pCodeGoogle` varchar(17) NOT NULL,
  `pPrison` int(11) NOT NULL,
  `pMestoPrison` int(11) NOT NULL,
  `pGun` varchar(64) NOT NULL DEFAULT '0,0,0,0,0,0,0,0,0,0,0,0,0',
  `pAmmo` varchar(64) NOT NULL DEFAULT '0,0,0,0,0,0,0,0,0,0,0,0,0',
  `pBolnica` int(11) NOT NULL,
  `pFrSkin` int(11) NOT NULL,
  `pLicenses` varchar(32) NOT NULL,
  `pGunSkill` varchar(64) NOT NULL,
  `pText` int(11) NOT NULL,
  `pHeals` int(11) NOT NULL,
  `pRouble` int(11) NOT NULL,
  `pVip` int(11) NOT NULL,
  `pVipTime` int(11) NOT NULL,
  `promo` varchar(64) CHARACTER SET utf8 NOT NULL,
  `pRobleCheck` int(11) NOT NULL,
  `family` int(11) NOT NULL DEFAULT -1,
  `family_rang` int(11) NOT NULL,
  `cModel` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cColor1` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cColor2` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cNumber` varchar(46) NOT NULL DEFAULT 'None,None,None',
  `cLock` varchar(16) NOT NULL DEFAULT '0,0,0',
  `cFuel` varchar(32) NOT NULL DEFAULT '100.0,100.0,100.0',
  `cCost` varchar(46) NOT NULL DEFAULT '0,0,0',
  `cProbeg` varchar(46) NOT NULL DEFAULT '0.0,0.0,0.0',
  `cHeal` varchar(46) NOT NULL DEFAULT '1000.0,1000.0,1000.0',
  `cDamagePanel` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cDamageDoors` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cDamageLights` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cDamageTires` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cWheels` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cSpoiler` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cBumper1` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cBumper2` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cNitro` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cHydrawlic` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cHood` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cRoof` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cSideskirt` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cLamps` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cExhaust` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cStereo` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cVentRight` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cVentLeft` varchar(32) NOT NULL DEFAULT '0,0,0',
  `cSost` varchar(32) NOT NULL DEFAULT '100,100,100',
  `cPaintJobs` varchar(32) NOT NULL DEFAULT '255,255,255',
  `x0` float NOT NULL,
  `x1` float NOT NULL,
  `x2` float NOT NULL,
  `y0` float NOT NULL,
  `y1` float NOT NULL,
  `y2` float NOT NULL,
  `z0` float NOT NULL,
  `z1` float NOT NULL,
  `z2` float NOT NULL,
  `a0` float NOT NULL,
  `a1` float NOT NULL,
  `a2` float NOT NULL,
  `interior0` int(11) NOT NULL,
  `interior1` int(11) NOT NULL,
  `interior2` int(11) NOT NULL,
  `world0` int(11) NOT NULL,
  `world1` int(11) NOT NULL,
  `world2` int(11) NOT NULL,
  `engine_tune` varchar(64) NOT NULL DEFAULT '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0',
  `brake_tune` varchar(64) NOT NULL DEFAULT '0,0,0,0,0|0,0,0,0,0|0,0,0,0,0',
  `pHotel` int(11) NOT NULL DEFAULT -1,
  `pDrugMarkAmount` int(11) NOT NULL,
  `pDrugMarkID` int(11) NOT NULL,
  `warehouse_quest_id` int(11) NOT NULL,
  `warehouse_quest_status` int(11) NOT NULL,
  `warehouse_quest_progress` int(11) NOT NULL,
  `warehouse_quest_block` int(11) NOT NULL,
  `car_park` varchar(64) NOT NULL DEFAULT '0.0,0.0,0.0,0.0|0.0,0.0,0.0,0.0|0.0,0.0,0.0,0.0',
  `pMask` int(11) NOT NULL,
  `pClip` int(11) NOT NULL,
  `b_quest_id` int(11) NOT NULL,
  `b_quest_status` int(11) NOT NULL,
  `b_quest_progress` int(11) NOT NULL,
  `pInfSatiety` int(11) NOT NULL,
  `pRepairKit` int(11) NOT NULL,
  `pElecVote` int(11) NOT NULL,
  `pInGameSeconds` int(11) NOT NULL,
  `pInGameAFKSeconds` int(11) NOT NULL,
  `pInGameHourSeconds` int(11) NOT NULL,
  `pClock` int(11) NOT NULL,
  `pFreeRoulet` int(11) NOT NULL,
  `last_curdate` int(11) NOT NULL,
  `last_hour` int(11) NOT NULL,
  `pSupport` int(11) NOT NULL,
  `pDrugDep` int(11) NOT NULL,
  `pMoneyCase` int(11) NOT NULL DEFAULT 1,
  `pVkId` int(11) NOT NULL,
  `pBoombox` int(11) NOT NULL,
  `pComponent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
