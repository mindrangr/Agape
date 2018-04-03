-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2015 at 01:11 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agape`
--
CREATE DATABASE IF NOT EXISTS `agape` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `agape`;

-- --------------------------------------------------------

--
-- Table structure for table `agape_ads`
--

DROP TABLE IF EXISTS `agape_ads`;
CREATE TABLE IF NOT EXISTS `agape_ads` (
  `ads_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ads_title` varchar(45) DEFAULT NULL,
  `ads_content` text,
  `ads_creatorID` varchar(45) DEFAULT NULL,
  `ads_creatorUname` varchar(25) DEFAULT NULL,
  `ads_status` varchar(25) DEFAULT NULL,
  `ads_createDate` datetime DEFAULT NULL,
  `ads_calcDate` datetime DEFAULT NULL,
  PRIMARY KEY (`ads_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `agape_blog_header`
--

DROP TABLE IF EXISTS `agape_blog_header`;
CREATE TABLE IF NOT EXISTS `agape_blog_header` (
  `blog_ID` int(11) NOT NULL AUTO_INCREMENT,
  `blog_creator_username` varchar(50) NOT NULL,
  `blog_creator_photo` text NOT NULL,
  `blog_createDate` datetime NOT NULL,
  `blog_lastReplyDate` datetime NOT NULL,
  `blog_lastReply_username` varchar(50) NOT NULL,
  `blog_lastReply_ID` int(11) NOT NULL,
  `blog_group` varchar(35) NOT NULL,
  `blog_creatorID` int(11) NOT NULL,
  `blog_Content` mediumtext NOT NULL,
  `blog_response_count` int(11) NOT NULL,
  `blog_title` varchar(120) NOT NULL,
  `blog_city` varchar(24) NOT NULL,
  `blog_State` varchar(30) NOT NULL,
  PRIMARY KEY (`blog_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `agape_friendrequest`
--

DROP TABLE IF EXISTS `agape_friendrequest`;
CREATE TABLE IF NOT EXISTS `agape_friendrequest` (
  `requestID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `requestorID` varchar(45) DEFAULT NULL,
  `requestorUsername` varchar(35) DEFAULT NULL,
  `requestedID` varchar(45) DEFAULT NULL,
  `requestedUsername` varchar(45) DEFAULT NULL,
  `requestSent` datetime DEFAULT NULL,
  `requestStatus` varchar(45) DEFAULT 'sent',
  `requestMessage` varchar(250) DEFAULT NULL,
  `requestorImgUrl` text,
  PRIMARY KEY (`requestID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `agape_inquiries`
--

DROP TABLE IF EXISTS `agape_inquiries`;
CREATE TABLE IF NOT EXISTS `agape_inquiries` (
  `agape_inquiryID` int(11) NOT NULL AUTO_INCREMENT,
  `agape_inquiryType` varchar(250) NOT NULL,
  `agape_inquiryComment` varchar(400) NOT NULL,
  `agape_inquiryCreateDate` datetime NOT NULL,
  `agape_inquiryResponseEmail` varchar(250) NOT NULL,
  PRIMARY KEY (`agape_inquiryID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `agape_messages`
--

DROP TABLE IF EXISTS `agape_messages`;
CREATE TABLE IF NOT EXISTS `agape_messages` (
  `agape_message_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agape_message_title` varchar(125) DEFAULT NULL,
  `agape_message` text,
  `agape_message_sender_ID` varchar(15) DEFAULT NULL,
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
  PRIMARY KEY (`agape_message_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

-- --------------------------------------------------------

--
-- Table structure for table `agape_profile`
--

DROP TABLE IF EXISTS `agape_profile`;
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
  `agape_profile_political` varchar(35) NOT NULL,
  `agape_partner_political` varchar(35) NOT NULL,
  `agape_profile_children` varchar(36) DEFAULT 'Not Answered',
  `agape_profile_description` text,
  `agape_profile_partner_description` text,
  `agape_profile_firstDate` text,
  `agape_profile_salary` varchar(25) DEFAULT 'Not Answered',
  `agape_profile_accountType` varchar(40) NOT NULL DEFAULT 'Basic',
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
  `agape_profile_nation` varchar(45) DEFAULT 'USA'
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state_cities`
--

DROP TABLE IF EXISTS `state_cities`;
CREATE TABLE IF NOT EXISTS `state_cities` (
  `state_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state_name` varchar(25) DEFAULT NULL,
  `state_abbreviation` varchar(5) DEFAULT NULL,
  `state_cities` text,
  `longLat` varchar(250) NOT NULL,
  `pickRatio` int(11) NOT NULL,
  PRIMARY KEY (`state_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
