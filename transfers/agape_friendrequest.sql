-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 04:49 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agape`
--

-- --------------------------------------------------------

--
-- Table structure for table `agape_friendrequest`
--

CREATE TABLE IF NOT EXISTS `agape_friendrequest` (
  `requestID` int(10) unsigned NOT NULL,
  `requestorID` varchar(45) DEFAULT NULL,
  `requestorUsername` varchar(35) DEFAULT NULL,
  `requestedID` varchar(45) DEFAULT NULL,
  `requestedUsername` varchar(45) DEFAULT NULL,
  `requestSent` datetime DEFAULT NULL,
  `requestResponse` datetime NOT NULL,
  `requestStatus` varchar(45) DEFAULT 'sent',
  `requestMessage` varchar(250) DEFAULT NULL,
  `requestorImgUrl` varchar(400) DEFAULT NULL,
  `requestedImgUrl` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_friendrequest`
--
ALTER TABLE `agape_friendrequest`
  ADD PRIMARY KEY (`requestID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_friendrequest`
--
ALTER TABLE `agape_friendrequest`
  MODIFY `requestID` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
