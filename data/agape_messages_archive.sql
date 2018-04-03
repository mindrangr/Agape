-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 04:43 AM
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
-- Table structure for table `agape_messages_archive`
--

CREATE TABLE IF NOT EXISTS `agape_messages_archive` (
  `agape_message_ID` int(10) unsigned NOT NULL,
  `agape_message_title` varchar(125) DEFAULT NULL,
  `agape_message` text,
  `agape_message_sender_ID` varchar(25) DEFAULT NULL,
  `agape_message_sender_username` varchar(45) DEFAULT NULL,
  `agape_message_receiver_username` varchar(45) DEFAULT NULL,
  `agape_message_receiver_url` text,
  `agape_message_receiver_ID` varchar(15) DEFAULT NULL,
  `agape_message_send_date` datetime DEFAULT NULL,
  `agape_message_update` datetime NOT NULL,
  `agape_message_active` varchar(16) DEFAULT 'true',
  `agape_message_opened` varchar(25) DEFAULT 'Sealed',
  `agape_sender_url` text,
  `agape_message_responses` text,
  `agape_message_type` varchar(25) NOT NULL DEFAULT 'simple'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_messages_archive`
--
ALTER TABLE `agape_messages_archive`
  ADD PRIMARY KEY (`agape_message_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_messages_archive`
--
ALTER TABLE `agape_messages_archive`
  MODIFY `agape_message_ID` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
