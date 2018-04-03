-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2017 at 03:51 PM
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
-- Table structure for table `agape_commercial`
--

CREATE TABLE IF NOT EXISTS `agape_commercial` (
  `agape_commercial_Id` int(11) NOT NULL,
  `agape_commercial_profile_Id` int(11) NOT NULL,
  `agape_commercial_Company` varchar(100) NOT NULL,
  `agape_commercial_Industry` varchar(50) NOT NULL,
  `agape_commercial_Rep_Firstname` varchar(25) NOT NULL,
  `agape_commercial_Rep_Lastname` varchar(25) NOT NULL,
  `agape_commercial_Address` varchar(200) NOT NULL,
  `agape_commercial_Rep_City` varchar(35) NOT NULL,
  `agape_commercial_Rep_State` varchar(35) NOT NULL,
  `agape_commercial_zipCode` varchar(12) NOT NULL,
  `agape_commercial_RepPhoneNumber` varchar(12) NOT NULL,
  `agape_commercial_AddCost` decimal(8,0) NOT NULL,
  `agape_commercial_Add` text NOT NULL,
  `agape_commercial_Placement_code` varchar(450) NOT NULL,
  `agape_commercial_AccountCreated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agape_commercial`
--

INSERT INTO `agape_commercial` (`agape_commercial_Id`, `agape_commercial_profile_Id`, `agape_commercial_Company`, `agape_commercial_Industry`, `agape_commercial_Rep_Firstname`, `agape_commercial_Rep_Lastname`, `agape_commercial_Address`, `agape_commercial_Rep_City`, `agape_commercial_Rep_State`, `agape_commercial_zipCode`, `agape_commercial_RepPhoneNumber`, `agape_commercial_AddCost`, `agape_commercial_Add`, `agape_commercial_Placement_code`, `agape_commercial_AccountCreated`) VALUES
(1, 200, 'Coca Cola', 'Food and Beverage', 'Bryant', 'Huang', '6725 Winter Dyle dr', 'Henry Falls', 'Minnesota', '78633', '856-244-5575', '0', '', '', '2017-05-03 01:24:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_commercial`
--
ALTER TABLE `agape_commercial`
  ADD PRIMARY KEY (`agape_commercial_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_commercial`
--
ALTER TABLE `agape_commercial`
  MODIFY `agape_commercial_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
