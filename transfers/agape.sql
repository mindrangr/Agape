-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 12:21 AM
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
-- Table structure for table `agape_advertisements`
--

CREATE TABLE IF NOT EXISTS `agape_advertisements` (
  `agape_advertisement_ID` int(11) NOT NULL,
  `agape_advertisement_Company` varchar(200) NOT NULL,
  `agape_advertisement_Commercial_ID` int(11) NOT NULL,
  `agape_advertisement_PhoneNumber` varchar(40) NOT NULL,
  `agape_advertisement_Address` varchar(50) NOT NULL,
  `agape_advertisement_State` varchar(35) NOT NULL,
  `agape_advertisement_City` varchar(200) NOT NULL,
  `agape_advertisement_Zip` varchar(15) NOT NULL,
  `agape_advertisement_Gender` varchar(20) NOT NULL DEFAULT 'Any',
  `agape_advertisement_Race` varchar(25) NOT NULL DEFAULT 'Any',
  `agape_advertisement_Religion` varchar(30) NOT NULL DEFAULT 'Any',
  `agape_advertisement_Politics` varchar(35) NOT NULL DEFAULT 'Any',
  `agape_advertisement_Education` varchar(100) NOT NULL DEFAULT 'Any',
  `agape_advertisement_Section` varchar(100) NOT NULL,
  `agape_advertisement_Type` varchar(25) NOT NULL,
  `agape_advertisement_Contact` varchar(100) NOT NULL,
  `agape_advertisement_Created` datetime NOT NULL,
  `agape_advertisement_start` datetime NOT NULL,
  `agape_advertisement_updated` datetime NOT NULL,
  `agape_advertisement_expire` datetime NOT NULL,
  `agape_advertisement_Link` varchar(400) NOT NULL,
  `agape_advertisement_Image` varchar(400) NOT NULL,
  `agape_advertisement_Parameter` text NOT NULL,
  `agape_advertisement_Price` float NOT NULL,
  `agape_advertisement_Package` varchar(100) NOT NULL,
  `agape_advertisement_PParams` text NOT NULL,
  `agape_advertisement_Industry` varchar(100) NOT NULL,
  `agape_advertisement_Active` varchar(24) NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agape_answers`
--

CREATE TABLE IF NOT EXISTS `agape_answers` (
  `agape_answers_ID` int(11) NOT NULL,
  `agape_answers_Question_ID` int(11) DEFAULT NULL,
  `agape_answers_answer` varchar(100) NOT NULL,
  `agape_answers_explained` varchar(400) NOT NULL,
  `agape_answers_gender` varchar(25) NOT NULL,
  `agape_answers_age` varchar(3) NOT NULL,
  `agape_answers_religion` varchar(25) NOT NULL,
  `agape_answers_city` varchar(25) NOT NULL,
  `agape_answers_state` varchar(25) NOT NULL,
  `agape_answers_race` varchar(20) NOT NULL,
  `agape_answers_income` varchar(15) NOT NULL,
  `agape_answers_politics` varchar(20) NOT NULL,
  `agape_answers_education` varchar(15) NOT NULL,
  `agape_answers_nation` varchar(15) NOT NULL,
  `agape_answers_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agape_comments`
--

CREATE TABLE IF NOT EXISTS `agape_comments` (
  `agape_commentsID` int(11) unsigned NOT NULL,
  `agape_comments_Comment` varchar(2500) NOT NULL,
  `agape_commentsType` varchar(25) NOT NULL DEFAULT 'comment',
  `agape_commentsCommentDataResponse` mediumtext NOT NULL,
  `agape_comments_count` int(15) NOT NULL,
  `agape_commentsSource` varchar(25) NOT NULL,
  `agape_commentsLastComment_username` varchar(40) NOT NULL,
  `agape_commentsLastComment` datetime NOT NULL,
  `agape_comment_createdate` datetime NOT NULL,
  `agape_commentCreator_ID` varchar(10) NOT NULL,
  `agape_commentCreator_Username` varchar(15) NOT NULL,
  `agape_comments_image` varchar(150) NOT NULL,
  `agape_commentsPagination` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `agape_commercial_Email` varchar(100) NOT NULL,
  `agape_commercial_AddCost` decimal(8,0) NOT NULL,
  `agape_commercial_Add` text NOT NULL,
  `agape_commercial_Placement_code` varchar(450) NOT NULL,
  `agape_commercial_AccountCreated` datetime NOT NULL,
  `agape_commercial_LastUpdated` datetime NOT NULL,
  `agape_commercial_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `agape_logtable`
--

CREATE TABLE IF NOT EXISTS `agape_logtable` (
  `agape_Logtable_ID` int(11) NOT NULL,
  `agape_Logtable_ChangeID` int(11) NOT NULL,
  `agape_Logtable_ChangeDate` datetime NOT NULL,
  `agape_Logtable_database` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agape_messages`
--

CREATE TABLE IF NOT EXISTS `agape_messages` (
  `agape_message_ID` int(10) unsigned NOT NULL,
  `agape_message_title` varchar(250) DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `agape_pollquestions`
--

CREATE TABLE IF NOT EXISTS `agape_pollquestions` (
  `question_ID` int(11) unsigned NOT NULL,
  `question_Core` varchar(400) NOT NULL,
  `question_reply` mediumtext NOT NULL,
  `question_group` varchar(150) NOT NULL,
  `question_type` varchar(240) NOT NULL,
  `question_comms` varchar(20) NOT NULL,
  `question_updatedBy` varchar(30) NOT NULL,
  `question_updateBy_ID` varchar(25) NOT NULL,
  `question_createdBy` varchar(35) NOT NULL,
  `question_created` datetime NOT NULL,
  `question_lastUpdated` datetime NOT NULL,
  `question_answerCount` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `agape_profile_onlineStatus` varchar(100) NOT NULL DEFAULT 'Offline',
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
  `agape_profile_advertiseCode` varchar(400) NOT NULL,
  `agape_friendList` mediumtext NOT NULL,
  `agape_vote_recordThumbs` text NOT NULL,
  `agape_vote_recordPolls` text NOT NULL,
  `agape_vote_presidentialCandidates` text NOT NULL,
  `agape_profile_commercial_Account` varchar(8) DEFAULT 'False',
  `agape_profile_romanceAccount` varchar(25) NOT NULL DEFAULT '',
  `agape_profile_romanceAccount_type` varchar(20) NOT NULL DEFAULT 'Basic',
  `agape_profile_presidentAccount` varchar(25) NOT NULL,
  `agape_profile_presidentAccount_type` varchar(25) NOT NULL DEFAULT 'None',
  `agape_profile_lastLogin` datetime NOT NULL,
  `agape_profile_zodiacSign` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agape_sponsors`
--

CREATE TABLE IF NOT EXISTS `agape_sponsors` (
  `agape_sponsors_ID` int(11) NOT NULL,
  `agape_sponsors_Image` varchar(60) NOT NULL,
  `agape_sponsors_URL` varchar(120) NOT NULL,
  `agape_sponsors_Company` varchar(50) NOT NULL,
  `agape_sponsors_ContactFirstName` varchar(50) NOT NULL,
  `agape_sponsors_ContactLastName` varchar(50) NOT NULL,
  `agape_sponsors_Company_Address` varchar(50) NOT NULL,
  `agape_sponsors_Message` text NOT NULL,
  `agape_sponsors_Company_State` varchar(50) NOT NULL,
  `agape_sponsors_Company_City` varchar(50) NOT NULL,
  `agape_sponsors_Company_Number` varchar(12) NOT NULL,
  `agape_sponsors_CommercialAccount` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agape_task`
--

CREATE TABLE IF NOT EXISTS `agape_task` (
  `agape_TaskID` int(11) unsigned NOT NULL,
  `agape_TaskCreate_Date` datetime NOT NULL,
  `agape_TaskStatus` varchar(80) NOT NULL,
  `agape_TaskTitle` varchar(150) NOT NULL,
  `agape_TaskData` varchar(400) NOT NULL,
  `agape_TaskType` varchar(25) NOT NULL,
  `agape_TaskCreator` varchar(80) NOT NULL,
  `agape_TaskAssignTo` varchar(80) NOT NULL,
  `agape_TaskStart_Date` datetime NOT NULL,
  `agape_TaskExpectedDue_Date` datetime NOT NULL,
  `agape_TaskUpdated_Date` datetime NOT NULL,
  `agape_TaskNotes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `agape_topics`
--

CREATE TABLE IF NOT EXISTS `agape_topics` (
  `agape_media_ID` int(11) unsigned NOT NULL,
  `agape_media_createDate` datetime NOT NULL,
  `agape_media_title` varchar(200) NOT NULL,
  `agape_media_content` text NOT NULL,
  `agape_media_author` varchar(150) NOT NULL,
  `agape_media_lastComment_date` datetime NOT NULL,
  `agape_media_comments_count` int(11) NOT NULL DEFAULT '0',
  `agape_media_SourceID` varchar(25) NOT NULL,
  `agape_media_reply` mediumtext NOT NULL,
  `agape_media_thumbsUp` int(15) NOT NULL DEFAULT '0',
  `agape_media_thumbsDown` int(15) NOT NULL DEFAULT '0',
  `agape_media_updatedBy` varchar(65) NOT NULL,
  `agape_media_images` text NOT NULL,
  `agape_media_author_ID` int(11) NOT NULL,
  `agape_media_updatedBy_ID` int(11) NOT NULL,
  `agape_media_group` varchar(40) NOT NULL,
  `agape_media_type` varchar(20) NOT NULL,
  `agape_media_link` varchar(250) NOT NULL DEFAULT 'None',
  `agape_media_city` varchar(25) NOT NULL,
  `agape_media_state` varchar(25) NOT NULL,
  `agape_media_status` varchar(40) NOT NULL DEFAULT 'Active',
  `agape_media_comments` text NOT NULL,
  `agape_media_pollType` varchar(40) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `alabama`
--
CREATE TABLE IF NOT EXISTS `alabama` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `alaska`
--
CREATE TABLE IF NOT EXISTS `alaska` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `arizona`
--
CREATE TABLE IF NOT EXISTS `arizona` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `arkansas`
--
CREATE TABLE IF NOT EXISTS `arkansas` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `california`
--
CREATE TABLE IF NOT EXISTS `california` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `colorado`
--
CREATE TABLE IF NOT EXISTS `colorado` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `connecticut`
--
CREATE TABLE IF NOT EXISTS `connecticut` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `delaware`
--
CREATE TABLE IF NOT EXISTS `delaware` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `florida`
--
CREATE TABLE IF NOT EXISTS `florida` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `georgia`
--
CREATE TABLE IF NOT EXISTS `georgia` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `hawaii`
--
CREATE TABLE IF NOT EXISTS `hawaii` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `idaho`
--
CREATE TABLE IF NOT EXISTS `idaho` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `illinois`
--
CREATE TABLE IF NOT EXISTS `illinois` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `indiana`
--
CREATE TABLE IF NOT EXISTS `indiana` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `iowa`
--
CREATE TABLE IF NOT EXISTS `iowa` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `kansas`
--
CREATE TABLE IF NOT EXISTS `kansas` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `kentucky`
--
CREATE TABLE IF NOT EXISTS `kentucky` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `louisiana`
--
CREATE TABLE IF NOT EXISTS `louisiana` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `maine`
--
CREATE TABLE IF NOT EXISTS `maine` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `maryland`
--
CREATE TABLE IF NOT EXISTS `maryland` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `massachusetts`
--
CREATE TABLE IF NOT EXISTS `massachusetts` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `michigan`
--
CREATE TABLE IF NOT EXISTS `michigan` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `minnesota`
--
CREATE TABLE IF NOT EXISTS `minnesota` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `mississippi`
--
CREATE TABLE IF NOT EXISTS `mississippi` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `missouri`
--
CREATE TABLE IF NOT EXISTS `missouri` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `montana`
--
CREATE TABLE IF NOT EXISTS `montana` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nebraska`
--
CREATE TABLE IF NOT EXISTS `nebraska` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `nevada`
--
CREATE TABLE IF NOT EXISTS `nevada` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `newhampshire`
--
CREATE TABLE IF NOT EXISTS `newhampshire` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `newjersey`
--
CREATE TABLE IF NOT EXISTS `newjersey` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `newmexico`
--
CREATE TABLE IF NOT EXISTS `newmexico` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `newyork`
--
CREATE TABLE IF NOT EXISTS `newyork` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `northcarolina`
--
CREATE TABLE IF NOT EXISTS `northcarolina` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `northdakota`
--
CREATE TABLE IF NOT EXISTS `northdakota` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `ohio`
--
CREATE TABLE IF NOT EXISTS `ohio` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `oklahoma`
--
CREATE TABLE IF NOT EXISTS `oklahoma` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `oregon`
--
CREATE TABLE IF NOT EXISTS `oregon` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `pennsylvania`
--
CREATE TABLE IF NOT EXISTS `pennsylvania` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `rhodeisland`
--
CREATE TABLE IF NOT EXISTS `rhodeisland` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Table structure for table `sessiontable`
--

CREATE TABLE IF NOT EXISTS `sessiontable` (
  `sessiontable_expires` datetime NOT NULL,
  `sessiontable_string` varchar(300) NOT NULL,
  `sessiontable_user_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `southcarolina`
--
CREATE TABLE IF NOT EXISTS `southcarolina` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `southdakota`
--
CREATE TABLE IF NOT EXISTS `southdakota` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tennessee`
--
CREATE TABLE IF NOT EXISTS `tennessee` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `texas`
--
CREATE TABLE IF NOT EXISTS `texas` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `utah`
--
CREATE TABLE IF NOT EXISTS `utah` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vermont`
--
CREATE TABLE IF NOT EXISTS `vermont` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `virginia`
--
CREATE TABLE IF NOT EXISTS `virginia` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `washington`
--
CREATE TABLE IF NOT EXISTS `washington` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `westvirginia`
--
CREATE TABLE IF NOT EXISTS `westvirginia` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `wisconsin`
--
CREATE TABLE IF NOT EXISTS `wisconsin` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `wyoming`
--
CREATE TABLE IF NOT EXISTS `wyoming` (
`agape_profile_memberID` int(10) unsigned
,`agape_profile_firstname` varchar(45)
,`agape_profile_lastname` varchar(45)
,`agape_profile_gender` varchar(15)
,`agape_profile_dateOfBirth` datetime
,`agape_profile_age` varchar(4)
,`agape_profile_bodyType` varchar(25)
,`agape_profile_height` varchar(25)
,`agape_profile_city` varchar(45)
,`agape_profile_state` varchar(25)
,`agape_profile_email` varchar(45)
,`agape_profile_friends` mediumtext
,`agape_profile_intentions` varchar(45)
,`agape_profile_recreation` varchar(400)
,`agape_profile_education` varchar(45)
,`agape_profile_relationship_dist` varchar(25)
,`agape_profile_political` varchar(35)
,`agape_partner_political` varchar(35)
,`agape_profile_children` varchar(36)
,`agape_profile_description` text
,`agape_profile_partner_description` text
,`agape_profile_firstDate` text
,`agape_profile_salary` varchar(25)
,`agape_profile_accountType` varchar(240)
,`agape_profile_username` varchar(45)
,`agape_profile_default_img` text
,`agape_profile_password` varchar(45)
,`agape_profile_religion` varchar(35)
,`agape_profile_register_date` datetime
,`agape_profile_drugs` varchar(25)
,`agape_profile_alcohol` varchar(25)
,`agape_partner_gender` varchar(40)
,`agape_partner_age_range` varchar(25)
,`agape_partner_salary` varchar(25)
,`agape_partner_drugs` varchar(25)
,`agape_partner_religion` varchar(35)
,`agape_partner_education` varchar(45)
,`agape_partner_opts` varchar(450)
,`agape_partner_alcohol` varchar(25)
,`agape_partner_children` varchar(35)
,`agape_partner_bodyType` varchar(25)
,`agape_profile_opts` varchar(450)
,`agape_profile_race` varchar(45)
,`agape_profile_fRequest` text
,`agape_partner_race` varchar(25)
,`agape_partner_height` varchar(25)
,`agape_profile_children_future` varchar(25)
,`agape_profile_amt2Invest` varchar(25)
,`agape_profile_nation` varchar(45)
,`agape_profile_accountStatus` varchar(35)
,`agape_friendList` mediumtext
,`agape_vote_recordThumbs` text
,`agape_vote_recordPolls` text
,`agape_vote_presidentialCandidates` text
,`agape_profile_romanceAccount` varchar(25)
,`agape_profile_presidentAccount` varchar(25)
,`agape_profile_presidentAccount_type` varchar(25)
);

-- --------------------------------------------------------

--
-- Structure for view `alabama`
--
DROP TABLE IF EXISTS `alabama`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alabama` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Alabama');

-- --------------------------------------------------------

--
-- Structure for view `alaska`
--
DROP TABLE IF EXISTS `alaska`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alaska` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Alaska');

-- --------------------------------------------------------

--
-- Structure for view `arizona`
--
DROP TABLE IF EXISTS `arizona`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `arizona` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Arizona');

-- --------------------------------------------------------

--
-- Structure for view `arkansas`
--
DROP TABLE IF EXISTS `arkansas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `arkansas` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Arkansas');

-- --------------------------------------------------------

--
-- Structure for view `california`
--
DROP TABLE IF EXISTS `california`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `california` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'California');

-- --------------------------------------------------------

--
-- Structure for view `colorado`
--
DROP TABLE IF EXISTS `colorado`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `colorado` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Colorado');

-- --------------------------------------------------------

--
-- Structure for view `connecticut`
--
DROP TABLE IF EXISTS `connecticut`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `connecticut` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Connecticut');

-- --------------------------------------------------------

--
-- Structure for view `delaware`
--
DROP TABLE IF EXISTS `delaware`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `delaware` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Delaware');

-- --------------------------------------------------------

--
-- Structure for view `florida`
--
DROP TABLE IF EXISTS `florida`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `florida` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Florida');

-- --------------------------------------------------------

--
-- Structure for view `georgia`
--
DROP TABLE IF EXISTS `georgia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `georgia` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Georgia');

-- --------------------------------------------------------

--
-- Structure for view `hawaii`
--
DROP TABLE IF EXISTS `hawaii`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hawaii` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Hawaii');

-- --------------------------------------------------------

--
-- Structure for view `idaho`
--
DROP TABLE IF EXISTS `idaho`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `idaho` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Idaho');

-- --------------------------------------------------------

--
-- Structure for view `illinois`
--
DROP TABLE IF EXISTS `illinois`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `illinois` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Illinois');

-- --------------------------------------------------------

--
-- Structure for view `indiana`
--
DROP TABLE IF EXISTS `indiana`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `indiana` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Indiana');

-- --------------------------------------------------------

--
-- Structure for view `iowa`
--
DROP TABLE IF EXISTS `iowa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `iowa` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Iowa');

-- --------------------------------------------------------

--
-- Structure for view `kansas`
--
DROP TABLE IF EXISTS `kansas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kansas` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Kansas');

-- --------------------------------------------------------

--
-- Structure for view `kentucky`
--
DROP TABLE IF EXISTS `kentucky`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `kentucky` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Kentucky');

-- --------------------------------------------------------

--
-- Structure for view `louisiana`
--
DROP TABLE IF EXISTS `louisiana`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `louisiana` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Louisiana');

-- --------------------------------------------------------

--
-- Structure for view `maine`
--
DROP TABLE IF EXISTS `maine`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `maine` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Maine');

-- --------------------------------------------------------

--
-- Structure for view `maryland`
--
DROP TABLE IF EXISTS `maryland`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `maryland` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Maryland');

-- --------------------------------------------------------

--
-- Structure for view `massachusetts`
--
DROP TABLE IF EXISTS `massachusetts`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `massachusetts` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Massachusetts');

-- --------------------------------------------------------

--
-- Structure for view `michigan`
--
DROP TABLE IF EXISTS `michigan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `michigan` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Michigan');

-- --------------------------------------------------------

--
-- Structure for view `minnesota`
--
DROP TABLE IF EXISTS `minnesota`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `minnesota` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Minnesota');

-- --------------------------------------------------------

--
-- Structure for view `mississippi`
--
DROP TABLE IF EXISTS `mississippi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mississippi` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Mississippi');

-- --------------------------------------------------------

--
-- Structure for view `missouri`
--
DROP TABLE IF EXISTS `missouri`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `missouri` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Missouri');

-- --------------------------------------------------------

--
-- Structure for view `montana`
--
DROP TABLE IF EXISTS `montana`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `montana` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Montana');

-- --------------------------------------------------------

--
-- Structure for view `nebraska`
--
DROP TABLE IF EXISTS `nebraska`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nebraska` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Nebraska');

-- --------------------------------------------------------

--
-- Structure for view `nevada`
--
DROP TABLE IF EXISTS `nevada`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `nevada` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Nevada');

-- --------------------------------------------------------

--
-- Structure for view `newhampshire`
--
DROP TABLE IF EXISTS `newhampshire`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `newhampshire` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'New Hampshire');

-- --------------------------------------------------------

--
-- Structure for view `newjersey`
--
DROP TABLE IF EXISTS `newjersey`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `newjersey` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'New Jersey ');

-- --------------------------------------------------------

--
-- Structure for view `newmexico`
--
DROP TABLE IF EXISTS `newmexico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `newmexico` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'New Mexico');

-- --------------------------------------------------------

--
-- Structure for view `newyork`
--
DROP TABLE IF EXISTS `newyork`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `newyork` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'New York');

-- --------------------------------------------------------

--
-- Structure for view `northcarolina`
--
DROP TABLE IF EXISTS `northcarolina`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `northcarolina` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'North Carolina');

-- --------------------------------------------------------

--
-- Structure for view `northdakota`
--
DROP TABLE IF EXISTS `northdakota`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `northdakota` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'North Dakota');

-- --------------------------------------------------------

--
-- Structure for view `ohio`
--
DROP TABLE IF EXISTS `ohio`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `ohio` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Ohio');

-- --------------------------------------------------------

--
-- Structure for view `oklahoma`
--
DROP TABLE IF EXISTS `oklahoma`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `oklahoma` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Oklahoma');

-- --------------------------------------------------------

--
-- Structure for view `oregon`
--
DROP TABLE IF EXISTS `oregon`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `oregon` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Oregon');

-- --------------------------------------------------------

--
-- Structure for view `pennsylvania`
--
DROP TABLE IF EXISTS `pennsylvania`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pennsylvania` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Pennsylvania');

-- --------------------------------------------------------

--
-- Structure for view `rhodeisland`
--
DROP TABLE IF EXISTS `rhodeisland`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `rhodeisland` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Rhode Island');

-- --------------------------------------------------------

--
-- Structure for view `southcarolina`
--
DROP TABLE IF EXISTS `southcarolina`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `southcarolina` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'South Carolina');

-- --------------------------------------------------------

--
-- Structure for view `southdakota`
--
DROP TABLE IF EXISTS `southdakota`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `southdakota` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'South Dakota');

-- --------------------------------------------------------

--
-- Structure for view `tennessee`
--
DROP TABLE IF EXISTS `tennessee`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tennessee` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Tennessee');

-- --------------------------------------------------------

--
-- Structure for view `texas`
--
DROP TABLE IF EXISTS `texas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `texas` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Texas');

-- --------------------------------------------------------

--
-- Structure for view `utah`
--
DROP TABLE IF EXISTS `utah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `utah` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Utah');

-- --------------------------------------------------------

--
-- Structure for view `vermont`
--
DROP TABLE IF EXISTS `vermont`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vermont` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Vermont');

-- --------------------------------------------------------

--
-- Structure for view `virginia`
--
DROP TABLE IF EXISTS `virginia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `virginia` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Virginia');

-- --------------------------------------------------------

--
-- Structure for view `washington`
--
DROP TABLE IF EXISTS `washington`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `washington` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Washington');

-- --------------------------------------------------------

--
-- Structure for view `westvirginia`
--
DROP TABLE IF EXISTS `westvirginia`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `westvirginia` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'West Virginia');

-- --------------------------------------------------------

--
-- Structure for view `wisconsin`
--
DROP TABLE IF EXISTS `wisconsin`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wisconsin` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Wisconsin');

-- --------------------------------------------------------

--
-- Structure for view `wyoming`
--
DROP TABLE IF EXISTS `wyoming`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wyoming` AS select `agape_profile`.`agape_profile_memberID` AS `agape_profile_memberID`,`agape_profile`.`agape_profile_firstname` AS `agape_profile_firstname`,`agape_profile`.`agape_profile_lastname` AS `agape_profile_lastname`,`agape_profile`.`agape_profile_gender` AS `agape_profile_gender`,`agape_profile`.`agape_profile_dateOfBirth` AS `agape_profile_dateOfBirth`,`agape_profile`.`agape_profile_age` AS `agape_profile_age`,`agape_profile`.`agape_profile_bodyType` AS `agape_profile_bodyType`,`agape_profile`.`agape_profile_height` AS `agape_profile_height`,`agape_profile`.`agape_profile_city` AS `agape_profile_city`,`agape_profile`.`agape_profile_state` AS `agape_profile_state`,`agape_profile`.`agape_profile_email` AS `agape_profile_email`,`agape_profile`.`agape_profile_friends` AS `agape_profile_friends`,`agape_profile`.`agape_profile_intentions` AS `agape_profile_intentions`,`agape_profile`.`agape_profile_recreation` AS `agape_profile_recreation`,`agape_profile`.`agape_profile_education` AS `agape_profile_education`,`agape_profile`.`agape_profile_relationship_dist` AS `agape_profile_relationship_dist`,`agape_profile`.`agape_profile_political` AS `agape_profile_political`,`agape_profile`.`agape_partner_political` AS `agape_partner_political`,`agape_profile`.`agape_profile_children` AS `agape_profile_children`,`agape_profile`.`agape_profile_description` AS `agape_profile_description`,`agape_profile`.`agape_profile_partner_description` AS `agape_profile_partner_description`,`agape_profile`.`agape_profile_firstDate` AS `agape_profile_firstDate`,`agape_profile`.`agape_profile_salary` AS `agape_profile_salary`,`agape_profile`.`agape_profile_accountType` AS `agape_profile_accountType`,`agape_profile`.`agape_profile_username` AS `agape_profile_username`,`agape_profile`.`agape_profile_default_img` AS `agape_profile_default_img`,`agape_profile`.`agape_profile_password` AS `agape_profile_password`,`agape_profile`.`agape_profile_religion` AS `agape_profile_religion`,`agape_profile`.`agape_profile_register_date` AS `agape_profile_register_date`,`agape_profile`.`agape_profile_drugs` AS `agape_profile_drugs`,`agape_profile`.`agape_profile_alcohol` AS `agape_profile_alcohol`,`agape_profile`.`agape_partner_gender` AS `agape_partner_gender`,`agape_profile`.`agape_partner_age_range` AS `agape_partner_age_range`,`agape_profile`.`agape_partner_salary` AS `agape_partner_salary`,`agape_profile`.`agape_partner_drugs` AS `agape_partner_drugs`,`agape_profile`.`agape_partner_religion` AS `agape_partner_religion`,`agape_profile`.`agape_partner_education` AS `agape_partner_education`,`agape_profile`.`agape_partner_opts` AS `agape_partner_opts`,`agape_profile`.`agape_partner_alcohol` AS `agape_partner_alcohol`,`agape_profile`.`agape_partner_children` AS `agape_partner_children`,`agape_profile`.`agape_partner_bodyType` AS `agape_partner_bodyType`,`agape_profile`.`agape_profile_opts` AS `agape_profile_opts`,`agape_profile`.`agape_profile_race` AS `agape_profile_race`,`agape_profile`.`agape_profile_fRequest` AS `agape_profile_fRequest`,`agape_profile`.`agape_partner_race` AS `agape_partner_race`,`agape_profile`.`agape_partner_height` AS `agape_partner_height`,`agape_profile`.`agape_profile_children_future` AS `agape_profile_children_future`,`agape_profile`.`agape_profile_amt2Invest` AS `agape_profile_amt2Invest`,`agape_profile`.`agape_profile_nation` AS `agape_profile_nation`,`agape_profile`.`agape_profile_accountStatus` AS `agape_profile_accountStatus`,`agape_profile`.`agape_friendList` AS `agape_friendList`,`agape_profile`.`agape_vote_recordThumbs` AS `agape_vote_recordThumbs`,`agape_profile`.`agape_vote_recordPolls` AS `agape_vote_recordPolls`,`agape_profile`.`agape_vote_presidentialCandidates` AS `agape_vote_presidentialCandidates`,`agape_profile`.`agape_profile_romanceAccount` AS `agape_profile_romanceAccount`,`agape_profile`.`agape_profile_presidentAccount` AS `agape_profile_presidentAccount`,`agape_profile`.`agape_profile_presidentAccount_type` AS `agape_profile_presidentAccount_type` from `agape_profile` where (`agape_profile`.`agape_profile_state` = 'Wyoming');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_advertisements`
--
ALTER TABLE `agape_advertisements`
  ADD PRIMARY KEY (`agape_advertisement_ID`);

--
-- Indexes for table `agape_answers`
--
ALTER TABLE `agape_answers`
  ADD PRIMARY KEY (`agape_answers_ID`);

--
-- Indexes for table `agape_comments`
--
ALTER TABLE `agape_comments`
  ADD PRIMARY KEY (`agape_commentsID`);

--
-- Indexes for table `agape_commercial`
--
ALTER TABLE `agape_commercial`
  ADD PRIMARY KEY (`agape_commercial_Id`);

--
-- Indexes for table `agape_correspondence`
--
ALTER TABLE `agape_correspondence`
  ADD PRIMARY KEY (`agape_correspondence_Id`);

--
-- Indexes for table `agape_friendrequest`
--
ALTER TABLE `agape_friendrequest`
  ADD PRIMARY KEY (`requestID`);

--
-- Indexes for table `agape_logtable`
--
ALTER TABLE `agape_logtable`
  ADD PRIMARY KEY (`agape_Logtable_ID`);

--
-- Indexes for table `agape_messages`
--
ALTER TABLE `agape_messages`
  ADD PRIMARY KEY (`agape_message_ID`);

--
-- Indexes for table `agape_messages_archive`
--
ALTER TABLE `agape_messages_archive`
  ADD PRIMARY KEY (`agape_message_ID`);

--
-- Indexes for table `agape_pollquestions`
--
ALTER TABLE `agape_pollquestions`
  ADD PRIMARY KEY (`question_ID`);

--
-- Indexes for table `agape_profile`
--
ALTER TABLE `agape_profile`
  ADD PRIMARY KEY (`agape_profile_memberID`);

--
-- Indexes for table `agape_sponsors`
--
ALTER TABLE `agape_sponsors`
  ADD PRIMARY KEY (`agape_sponsors_ID`);

--
-- Indexes for table `agape_task`
--
ALTER TABLE `agape_task`
  ADD PRIMARY KEY (`agape_TaskID`);

--
-- Indexes for table `agape_topics`
--
ALTER TABLE `agape_topics`
  ADD PRIMARY KEY (`agape_media_ID`);

--
-- Indexes for table `sessiontable`
--
ALTER TABLE `sessiontable`
  ADD PRIMARY KEY (`sessiontable_user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_advertisements`
--
ALTER TABLE `agape_advertisements`
  MODIFY `agape_advertisement_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_answers`
--
ALTER TABLE `agape_answers`
  MODIFY `agape_answers_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_comments`
--
ALTER TABLE `agape_comments`
  MODIFY `agape_commentsID` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_commercial`
--
ALTER TABLE `agape_commercial`
  MODIFY `agape_commercial_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_correspondence`
--
ALTER TABLE `agape_correspondence`
  MODIFY `agape_correspondence_Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_friendrequest`
--
ALTER TABLE `agape_friendrequest`
  MODIFY `requestID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_logtable`
--
ALTER TABLE `agape_logtable`
  MODIFY `agape_Logtable_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_messages`
--
ALTER TABLE `agape_messages`
  MODIFY `agape_message_ID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_messages_archive`
--
ALTER TABLE `agape_messages_archive`
  MODIFY `agape_message_ID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_pollquestions`
--
ALTER TABLE `agape_pollquestions`
  MODIFY `question_ID` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_profile`
--
ALTER TABLE `agape_profile`
  MODIFY `agape_profile_memberID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_sponsors`
--
ALTER TABLE `agape_sponsors`
  MODIFY `agape_sponsors_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_task`
--
ALTER TABLE `agape_task`
  MODIFY `agape_TaskID` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `agape_topics`
--
ALTER TABLE `agape_topics`
  MODIFY `agape_media_ID` int(11) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
