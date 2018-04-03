-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2016 at 04:03 PM
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
-- Table structure for table `agape_profile`
--

CREATE TABLE IF NOT EXISTS `agape_profile` (
  `agape_profile_memberID` int(10) unsigned NOT NULL,
  `agape_profile_firstname` varchar(45) DEFAULT NULL,
  `agape_profile_lastname` varchar(45) DEFAULT NULL,
  `agape_profile_gender` varchar(15) DEFAULT NULL,
  `agape_profile_dateOfBirth` datetime DEFAULT NULL,
  `agape_profile_age` varchar(4) NOT NULL DEFAULT 'none',
  `agape_profile_bodyType` varchar(25) DEFAULT NULL,
  `agape_profile_height` varchar(25) DEFAULT 'Not Answered',
  `agape_profile_city` varchar(45) DEFAULT NULL,
  `agape_profile_state` varchar(25) DEFAULT NULL,
  `agape_profile_email` varchar(45) DEFAULT NULL,
  `agape_profile_friends` mediumtext,
  `agape_profile_intentions` varchar(45) DEFAULT NULL,
  `agape_profile_recreation` varchar(400) NOT NULL DEFAULT '[]',
  `agape_profile_education` varchar(45) DEFAULT NULL,
  `agape_profile_relationship_dist` varchar(25) NOT NULL,
  `agape_profile_political` varchar(35) NOT NULL,
  `agape_partner_political` varchar(35) NOT NULL,
  `agape_profile_children` varchar(36) DEFAULT 'Not Answered',
  `agape_profile_description` text,
  `agape_profile_partner_description` text,
  `agape_profile_firstDate` text,
  `agape_profile_salary` varchar(25) DEFAULT 'Not Answered',
  `agape_profile_accountType` varchar(240) NOT NULL DEFAULT 'Basic',
  `agape_profile_username` varchar(45) DEFAULT NULL,
  `agape_profile_default_img` text,
  `agape_profile_password` varchar(45) DEFAULT NULL,
  `agape_profile_religion` varchar(35) DEFAULT NULL,
  `agape_profile_register_date` datetime DEFAULT NULL,
  `agape_profile_drugs` varchar(25) DEFAULT 'Not answered',
  `agape_profile_alcohol` varchar(25) DEFAULT 'Not answered',
  `agape_partner_gender` varchar(40) NOT NULL,
  `agape_partner_age_range` varchar(25) DEFAULT 'Not answered',
  `agape_partner_salary` varchar(25) DEFAULT NULL,
  `agape_partner_drugs` varchar(25) DEFAULT 'Not answered',
  `agape_partner_religion` varchar(35) DEFAULT 'Not answered',
  `agape_partner_education` varchar(45) DEFAULT 'Not anwsered',
  `agape_partner_opts` varchar(450) NOT NULL DEFAULT '[]',
  `agape_partner_alcohol` varchar(25) DEFAULT 'Not answered',
  `agape_partner_children` varchar(35) DEFAULT 'Not answered',
  `agape_partner_bodyType` varchar(25) DEFAULT NULL,
  `agape_profile_opts` varchar(450) DEFAULT '[]',
  `agape_profile_race` varchar(45) DEFAULT 'Not answered',
  `agape_profile_fRequest` text,
  `agape_partner_race` varchar(25) DEFAULT 'Not Answered',
  `agape_partner_height` varchar(25) DEFAULT 'Not Answered',
  `agape_profile_children_future` varchar(25) DEFAULT 'Not Answered',
  `agape_profile_amt2Invest` varchar(25) DEFAULT 'Not Answered',
  `agape_profile_nation` varchar(45) DEFAULT 'USA',
  `agape_profile_accountStatus` varchar(35) NOT NULL DEFAULT 'Active',
  `agape_friendList` mediumtext NOT NULL,
  `agape_vote_recordThumbs` text NOT NULL,
  `agape_vote_recordPolls` text NOT NULL,
  `agape_vote_presidentialCandidates` text NOT NULL,
  `agape_profile_romanceAccount` varchar(25) NOT NULL DEFAULT '',
  `agape_profile_presidentAccount` varchar(25) NOT NULL,
  `agape_profile_presidentAccount_type` varchar(25) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_profile`
--
ALTER TABLE `agape_profile`
  ADD PRIMARY KEY (`agape_profile_memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_profile`
--
ALTER TABLE `agape_profile`
  MODIFY `agape_profile_memberID` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
