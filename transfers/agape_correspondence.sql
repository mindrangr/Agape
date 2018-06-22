-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 03:11 PM
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
-- Table structure for table `agape_correspondence`
--

CREATE TABLE IF NOT EXISTS `agape_correspondence` (
  `agape_correspondence_Id` int(11) NOT NULL,
  `agape_correspondence_type` varchar(100) NOT NULL,
  `agape_correspondence_Firstname` varchar(100) NOT NULL,
  `agape_correspondence_Lastname` varchar(100) NOT NULL,
  `agape_correspondence_Email` varchar(100) NOT NULL,
  `agape_correspondence_Phonenumber` varchar(20) NOT NULL,
  `agape_correspondence_ContactType` varchar(50) NOT NULL,
  `agape_correspondence_comment` varchar(400) NOT NULL,
  `agape_correspondence_created` datetime NOT NULL,
  `agape_correspondence_responded` datetime NOT NULL,
  `agape_correspondence_response` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agape_correspondence`
--

INSERT INTO `agape_correspondence` (`agape_correspondence_Id`, `agape_correspondence_type`, `agape_correspondence_Firstname`, `agape_correspondence_Lastname`, `agape_correspondence_Email`, `agape_correspondence_Phonenumber`, `agape_correspondence_ContactType`, `agape_correspondence_comment`, `agape_correspondence_created`, `agape_correspondence_responded`, `agape_correspondence_response`) VALUES
(1, 'Customer service', 'gsdg', 'awec', 'asdad', 'sdfgs', 'Phone', 'dfh', '2017-07-23 09:06:00', '0000-00-00 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_correspondence`
--
ALTER TABLE `agape_correspondence`
  ADD PRIMARY KEY (`agape_correspondence_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_correspondence`
--
ALTER TABLE `agape_correspondence`
  MODIFY `agape_correspondence_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
