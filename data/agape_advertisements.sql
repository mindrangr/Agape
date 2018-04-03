-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 09:47 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=328 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agape_advertisements`
--

INSERT INTO `agape_advertisements` (`agape_advertisement_ID`, `agape_advertisement_Company`, `agape_advertisement_Commercial_ID`, `agape_advertisement_PhoneNumber`, `agape_advertisement_Address`, `agape_advertisement_State`, `agape_advertisement_City`, `agape_advertisement_Zip`, `agape_advertisement_Gender`, `agape_advertisement_Race`, `agape_advertisement_Religion`, `agape_advertisement_Politics`, `agape_advertisement_Education`, `agape_advertisement_Section`, `agape_advertisement_Type`, `agape_advertisement_Contact`, `agape_advertisement_Created`, `agape_advertisement_start`, `agape_advertisement_updated`, `agape_advertisement_expire`, `agape_advertisement_Link`, `agape_advertisement_Image`, `agape_advertisement_Parameter`, `agape_advertisement_Price`, `agape_advertisement_Package`, `agape_advertisement_PParams`, `agape_advertisement_Industry`, `agape_advertisement_Active`) VALUES
(1, 'Liberty Mutual', 0, '1-800-632-2839', '2525 West Collins rd', 'Nebraska', 'Holden', '44255', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Pete Ross', '2017-01-10 13:09:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Insurance', 'true'),
(2, 'Nordstrom', 2, '1-800-635-2839', '1731 Brady ct', 'Nebraska', 'Holden', '44284', 'Either', 'Latino', 'Judaica', 'Independent Party', 'Some college', 'Trump', '1x8', 'James Linaks', '2017-06-01 08:48:00', '2016-11-17 02:07:24', '2016-11-17 02:07:24', '2016-12-17 02:07:24', '/agape/politics', 'advertiseImages/businessAds/IquJQVO9yUtfBpUDaD7hrhKZVCRdBTKWvmpxQ23sPaM.jpeg', '', 0, 'Silver', '', 'Business', 'true'),
(3, 'Kroeger', 0, '1-800-953-1126', '74 Highway 33 north', 'National', 'Any', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Connie Thompson', '2016-12-12 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', 'http://quickvotes.com', 'advertiseImages/quickVotes.png', '', 0, 'Silver', '', 'hair', 'true'),
(4, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'Nebraska', 'Holden', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'David Claos', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(5, 'Verizon', 0, '1-800-998-2811', '1731 Brady ct', 'Nebraska', 'Holden', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Amanda King', '2016-08-17 00:00:00', '2016-08-17 00:00:00', '2016-08-17 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Communications', 'true'),
(6, 'Ellis Hair Design', 0, '1-877-363-9311', '84 Arrison Circle ', 'National', 'Any', '44278', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Brian Catching', '2017-04-10 11:03:06', '2017-04-10 11:03:06', '2017-04-10 11:03:06', '0000-00-00 00:00:00', 'http://nordstrom.com', 'advertiseImages/nordstrom.png', '', 0, 'Silver', '', 'Hair Care', 'true'),
(7, 'xfinity', 0, '1-800-953-1126', '74 Highway 33 north', 'National', 'Any', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Donna Halk', '2017-03-08 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Media', 'true'),
(8, 'Atlanta Housing', 0, '1-888-285-6633', '1899 nw 22 st', 'National', 'Any', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Brian Copeland', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Real Estate', 'true'),
(9, 'Legal Zoom', 0, '1-877-552-9057', '1077 West Hurns Circle', 'Nebraska', 'Any', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '1x8', 'Rita Gonzalez', '2017-03-20 08:21:22', '2017-03-16 02:21:04', '2017-03-16 02:21:04', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/realestatebook.jpg', '', 0, 'Silver', '', 'Business', 'true'),
(10, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'Georgia', 'Woodbine', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Mark Daniels', '2017-02-10 00:43:14', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(11, 'Kroeger', 0, '1-800-953-1126', '74 Highway 33 north', 'South Carolina', 'Paxville', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'William Martin', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'hair', 'true'),
(12, 'Legal Zoom', 0, '1-877-552-9057', '1077 West Hurns Circle', 'Nebraska', 'Bingham', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '1x8', 'Carla Cambridge', '2017-04-07 00:24:13', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/autoAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(13, 'Liberty Mutual', 0, '1-800-632-2839', '2525 West Collins rd', 'Louisiana', 'Mitchell', '44255', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Doug Blake', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Insurance', 'true'),
(14, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'Wyoming', 'Hulett', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Larry Marshall', '2016-11-11 03:26:24', '2016-11-11 03:26:24', '2016-11-11 03:26:24', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(15, 'Atlanta Housing', 0, '1-888-285-6633', '1899 nw 22 st', 'Kentucky', 'Roundhill', '44356', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Victor Reece', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Real Estate', 'true'),
(16, 'Legal Zoom', 0, '1-877-552-9057', '1077 West Hurns Circle', 'National', 'Any', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Benjamin Beckman', '2017-01-26 13:00:07', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(17, 'Liberty Mutual', 0, '1-800-632-2839', '2525 West Collins rd', 'Louisiana', 'Hackberry', '44255', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '1x8', 'Patricia Wilson', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/Att.jpg', '', 0, 'Silver', '', 'Insurance', 'true'),
(18, 'xfinity', 2, '1-800-953-1126', '74 Highway 33 north', 'Louisiana', 'Rosedale', '44002', 'Female', 'Mediterranean', 'Judaica', 'Green Party', 'BA/BS', 'Trump', '1x8', 'Kylie Berry', '2017-06-09 15:18:00', '2016-12-25 00:39:09', '2016-12-25 00:39:09', '2017-01-25 00:39:09', '/agape/politics', 'advertiseImages/businessAds/Bn1yItEJpHOWlo7oSU+PKN88Y0BV1Y6gPQPCm+HYpKU.jpeg', '', 0, 'Silver', '', 'Media', 'true'),
(19, 'Verizon', 0, '1-800-998-2811', '1731 Brady ct', 'Nebraska', 'Juniata', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Beverly Cory', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Communications', 'true'),
(20, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'New York', 'Victor', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Gail Phillips', '2016-08-15 00:25:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(21, 'Nordstrom', 0, '1-800-635-2839', '1731 Brady ct', 'National', 'Any', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Barbara Wynn', '2017-01-16 14:00:06', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', 'https://theagapecommunity.com/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Auto', 'true'),
(22, 'Atlanta Housing', 0, '1-888-285-6633', '1899 nw 22 st', 'Georgia', 'Atlanta', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Lamar Ponder', '2016-09-12 11:12:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Real Estate', 'true'),
(23, 'Kroeger', 0, '1-800-953-1126', '74 Highway 33 north', 'Missouri', 'Hollister', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Brandy Oliver', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'hair', 'true'),
(24, 'Legal Zoom', 0, '1-877-552-9057', '1077 West Hurns Circle', 'Georgia', 'Doerun', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Norman Miller', '2016-12-10 08:08:14', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(25, 'Ellis Hair Design', 0, '1-877-363-9311', '84 Arrison Circle ', 'Nevada', 'Laughlin', '44278', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'William Jones', '2016-06-19 11:11:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Hair Care', 'true'),
(26, 'Liberty Mutual', 0, '1-800-632-2839', '2525 West Collins rd', 'Florida', 'Old Town', '44255', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Ellen Maddock', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Insurance', 'true'),
(27, 'Liberty Mutual', 0, '1-800-632-2839', '2525 West Collins rd', 'South Dakota', 'Wanblee', '44255', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Tori Valentine', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Insurance', 'true'),
(28, 'Nordstrom', 0, '1-800-635-2839', '1731 Brady ct', 'New Hampshire', 'Bedford', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '1x8', 'Jaron Vickers', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/uload.gif', '', 0, 'Silver', '', 'Auto', 'true'),
(29, 'xfinity', 0, '1-800-953-1126', '74 Highway 33 north', 'Washington', 'Raymond', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Barbara Curry', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Media', 'true'),
(30, 'Verizon', 0, '1-800-998-2811', '1731 Brady ct', 'Arkansas', 'Mount Judea', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Anthony Carpenter', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Communications', 'true'),
(31, 'Kroeger', 0, '1-800-953-1126', '74 Highway 33 north', 'New Jersey', 'South Hackensack', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '1x8', 'Jessica Ponder', '2017-03-26 00:40:19', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/autoAd.png', '', 0, 'Silver', '', 'hair', 'true'),
(32, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'Minnesota', 'Battle Lake', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '1x8', 'William Stacy', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/Att.jpg', '', 0, 'Silver', '', 'Business', 'true'),
(33, 'Legal Zoom', 0, '1-877-552-9057', '1077 West Hurns Circle', 'Delaware', 'Camden', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Jessica Sanchez', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(34, 'Kroeger', 0, '1-800-953-1126', '74 Highway 33 north', 'Maryland', 'Marriottsville', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '1x8', 'Victor Latimore', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/bongo.jpg', '', 0, 'Silver', '', 'hair', 'true'),
(35, 'xfinity', 0, '1-800-953-1126', '74 Highway 33 north', 'Massachusetts', 'Forestdale', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Lashawn Wilson', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Media', 'true'),
(36, 'xfinity', 0, '1-800-953-1126', '74 Highway 33 north', 'National', 'Any', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '1x8', 'Jessica Valentine', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', 'http://OptimalHearing.com', 'advertiseImages/flashad1.gif', '', 0, 'Silver', '', 'Media', 'true'),
(37, 'Nordstrom', 0, '1-800-635-2839', '1731 Brady ct', 'Mississippi', 'Thaxton', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Tracy Smith', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Auto', 'true'),
(38, 'Atlanta Housing', 0, '1-888-285-6633', '1899 nw 22 st', 'Georgia', 'Meansville', '44356', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '1x8', 'Anthony Martin', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/download.png', '', 0, 'Silver', '', 'Real Estate', 'true'),
(39, 'Legal Zoom', 0, '1-877-552-9057', '1077 West Hurns Circle', 'Delaware', 'Laurel', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Tina Black', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(40, 'Liberty Mutual', 0, '1-800-632-2839', '2525 West Collins rd', 'Louisiana', 'Pelican', '44255', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Stacie Reece', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Insurance', 'true'),
(41, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'South Dakota', 'Caputa', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '1x8', 'Dexter Johnson', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/realestatebook.jpg', '', 0, 'Silver', '', 'Business', 'true'),
(42, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'Florida', 'Apollo Beach', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '1x8', 'Raechel Jackson', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/realestatebook.jpg', '', 0, 'Silver', '', 'Business', 'true'),
(43, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'Nevada', 'Alamo', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Brandy Dupree', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(44, 'Verizon', 0, '1-800-998-2811', '1731 Brady ct', 'Virginia', 'Ruther Glen', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Aaron Marshall', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Communications', 'true'),
(45, 'Nordstrom', 0, '1-800-635-2839', '1731 Brady ct', 'Mississippi', 'Vicksburg', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '1x8', 'Tobi Miller', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/autoAd.png', '', 0, 'Silver', '', 'Auto', 'true'),
(46, 'Kroeger', 0, '1-800-953-1126', '74 Highway 33 north', 'Florida', 'Forest Lakes', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Lance Washington', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'hair', 'true'),
(47, 'Nordstrom', 0, '1-800-635-2839', '1731 Brady ct', 'Maine', 'Wayne', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Dwayne Murphy', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Auto', 'true'),
(48, 'Kroeger', 0, '1-800-953-1126', '74 Highway 33 north', 'Idaho', 'Kellogg', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '1x8', 'Jordan Winters', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/uload.gif', '', 0, 'Silver', '', 'hair', 'true'),
(49, 'xfinity', 0, '1-800-953-1126', '74 Highway 33 north', 'West Virginia', 'Marfrance', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Rebecca Willis', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Media', 'true'),
(50, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'Missouri', 'South West City', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Elliot Duncan', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(51, 'Verizon', 0, '1-800-998-2811', '1731 Brady ct', 'National', 'Any', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '1x8', 'Jonathan Washington', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', 'https://theagapecommunity.com/agape/aboutus', 'advertiseImages/realestatebook.jpg', '', 0, 'Silver', '', 'Communications', 'true'),
(52, 'Legal Zoom', 0, '1-877-552-9057', '1077 West Hurns Circle', 'Rhode Island', 'Any', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Rodney Gonzalez', '2017-03-17 08:27:32', '2017-03-17 08:27:32', '2017-03-17 08:27:32', '2017-04-17 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(53, 'Atlanta Housing', 3, '1-888-285-6633', '1899 nw 22 st', 'Georgia', 'Evans', '44356', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Gail Beckworth', '2017-03-09 00:15:03', '2017-03-09 00:15:03', '2017-03-09 00:15:03', '2017-04-09 00:15:03', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Real Estate', 'true'),
(54, 'Kroeger', 0, '1-800-953-1126', '74 Highway 33 north', 'California', 'Long Beach', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Lamar Carter', '2017-05-14 05:26:00', '2017-05-14 05:26:00', '2017-05-14 05:26:00', '2017-06-14 05:26:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'hair', 'true'),
(55, 'Liberty Mutual', 0, '1-800-632-2839', '2525 West Collins rd', 'Iowa', 'Red Oak', '44255', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '1x8', 'Brendan Ponder', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/bongo.jpg', '', 0, 'Silver', '', 'Insurance', 'true'),
(56, 'Legal Zoom', 0, '1-877-552-9057', '1077 West Hurns Circle', 'Minnesota', 'Flensburg', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Allen Kemp', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(57, 'Nordstrom', 0, '1-800-635-2839', '1731 Brady ct', 'National', 'Any', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Brad Scott', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Auto', 'true'),
(58, 'Nordstrom', 0, '1-800-635-2839', '1731 Brady ct', 'Kentucky', 'Bardwell', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Brianna Jackson', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Auto', 'true'),
(59, 'Quick Votes', 3, '1-888-285-6633', '1899 nw 22 st', 'Louisiana', 'Pierre Part', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Romance', '2x2', 'Angela Cantrell', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(60, 'Kroeger', 0, '1-800-953-1126', '74 Highway 33 north', 'Arizona', 'Paradise Valley', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '1x8', 'Debra Lewis', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/uload.gif', '', 0, 'Silver', '', 'hair', 'true'),
(61, 'Verizon', 0, '1-800-998-2811', '1731 Brady ct', 'New York', 'Jay', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Katrina Ponder', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Communications', 'true'),
(62, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'Oregon', 'Harper', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '1x8', 'Katrina Cory', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/flashad1.gif', '', 0, 'Silver', '', 'Business', 'true'),
(63, 'Quick Votes', 0, '1-888-285-6633', '1899 nw 22 st', 'National', 'Any', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Renee Kemp', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/ellis.png', '', 0, 'Silver', '', 'Business', 'true'),
(64, 'Atlanta Housing', 0, '1-888-285-6633', '1899 nw 22 st', 'Nevada', 'Moundhouse', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '1x8', 'Shelley Jackson', '2016-12-27 08:10:02', '2016-12-27 08:10:02', '2016-12-27 08:10:02', '2017-01-26 08:10:02', '/agape/politics', 'advertiseImages/autoAd.png', '', 0, 'Silver', '', 'Real Estate', 'true'),
(65, 'Credit Karma', 0, '1-877-552-9057', '1077 West Hurns Circle', 'Kansas', 'Bunker Hill', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Tonya Grant', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(66, 'Credit karma', 3, '1-800-998-2811', '1731 Brady ct', 'New Hampshire', 'Plaistow', '44284', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Michael Goins', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Communications', 'true'),
(67, 'Legal Zoom', 0, '1-877-552-9057', '8045 West Berry Circle', 'Colorado', 'Larkspur', '44288', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '2x2', 'Brianna Finnie', '2017-02-09 00:00:00', '2017-02-09 00:00:00', '2017-02-09 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'Business', 'true'),
(68, 'Kroeger', 0, '1-800-953-1126', '74 Highway 99 north haven', 'Idaho', 'Worley', '44002', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Kathryn Carter', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '2017-01-25 00:00:00', '0000-00-00 00:00:00', '/agape/politics', 'advertiseImages/AgapeAd.png', '', 0, 'Silver', '', 'hair', 'true'),
(133, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'Arkansas', 'All', '78633', 'Male', 'White', 'Christianity', 'Republican Party', 'Masters', 'Romance', '2x2', 'Bryant Huang', '2017-06-01 08:48:00', '2017-05-15 09:29:00', '2017-05-15 09:29:00', '2017-06-15 09:29:00', 'none', 'advertiseImages/verizon.png', '', 27, '', '', 'Bars', 'true'),
(134, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'California', 'Sacramento', '78633', 'Female', 'Any', 'Any', 'Libetarian Party', 'Any', 'News', '2x2', 'Bryant Huang', '2017-06-05 17:43:00', '2017-03-25 05:29:16', '2017-03-25 05:29:16', '2017-04-25 05:29:16', 'none', 'advertiseImages/AgapeAd.png', '', 5.99, '', '', 'Accountants', 'true'),
(135, 'Coca Cola', 3, '856-244-5575', '6725 Winter Dyle dr', 'California', 'Herald', '78633', 'Female', 'Any', 'Christianity', 'Any', 'Any', 'News', '2x2', 'Lee Wilson', '2017-04-24 09:10:00', '2017-04-24 09:10:00', '2017-04-24 09:10:00', '2017-05-24 09:10:00', 'none', 'advertiseImages/businessAds/yInHimzQ1Ov3xzY6RRPr3MsN2MV1V16tlALKG+IxkVI.jpeg', '', 5.99, '', '', 'Casinos', 'true'),
(136, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'California', 'Hi Vista', '78633', 'Any', 'Any', 'Christianity', 'Any', 'Some college', 'Romance', '2x2', 'Dillon McConnell', '2017-06-05 17:55:00', '2017-05-13 03:34:11', '2017-05-13 03:34:11', '2017-05-13 03:34:11', 'none', 'advertiseImages/businessAds/o7vKjVMe1brLulm8P7nN68Vpg2m1ClwbMZzrEet7z8Y.jpeg', '', 5.99, '', '', 'Business', 'true'),
(137, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'Florida', 'Sunrise', '78633', 'Any', 'Any', 'Christianity', 'Any', 'Any', 'Romance', '2x2', 'Bryant Huang', '2017-06-01 07:46:00', '2017-05-15 09:29:00', '2017-05-15 09:29:00', '2017-06-15 09:29:00', 'none', 'advertiseImages/AgapeAd.png', '', 5.99, '', '', 'Civil', 'true'),
(138, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'Florida', 'Opa Locka', '78633', 'Any', 'Any', 'Christianity', 'Any', 'Any', 'Romance', '2x2', 'Nelson Prodder', '2017-07-13 08:24:00', '2017-07-13 08:24:00', '2017-07-13 08:24:00', '2017-08-12 08:24:00', 'none', 'advertiseImages/AgapeAd.png', '', 5.99, '', '', 'Clergy', 'true'),
(139, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'Florida', 'Any', '78633', 'Any', 'Any', 'Christianity', 'Any', 'Any', 'Romance', '2x2', 'Bryant Huang', '2017-06-09 14:55:00', '2016-11-29 04:19:08', '2016-11-29 04:19:08', '2016-11-29 04:19:08', 'none', 'advertiseImages/businessAds/n429Hbgo8UG5ho+cnv66PgBtU2l92BAzGPLvtgKPzDc.gif', '', 5.99, '', '', 'Agriculture', 'true'),
(267, 'Camelot', 22, '353-753-2277', '228 daqrus Way', 'Florida', 'Cottondale', '74557', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Brian Jones', '2017-07-05 16:02:00', '2017-07-05 16:02:00', '2017-07-05 16:02:00', '2017-08-04 16:02:00', 'none', 'advertiseImages/AgapeAd.png', '', 9.75, '', '', 'Accountants', 'true'),
(304, 'Camelot', 22, '353-753-2277', '228 daqrus Way', 'California', 'Alturas', '74557', 'Any', 'Any', 'Any', 'Any', 'Any', 'Politics', '1x8', 'Brian Jones', '2017-07-05 17:00:00', '2017-07-05 17:00:00', '2017-07-05 17:00:00', '2017-08-04 17:00:00', 'none', 'advertiseImages/realestatebook.jpg', '', 9.75, '', '', 'Accountants', 'true'),
(315, 'Camelot', 22, '353-753-2277', '228 daqrus Way', 'Connecticut', 'Coventry', '74557', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '1x8', 'Brian Jones', '2017-07-05 17:11:00', '2017-07-05 17:11:00', '2017-07-05 17:11:00', '2017-08-04 17:11:00', 'none', 'advertiseImages/flashad1.gif', '', 9.75, '', '', 'Casinos', 'true'),
(316, 'Camelot', 22, '353-753-2277', '228 daqrus Way', 'Connecticut', 'Deep River', '74557', 'Any', 'Any', 'Any', 'Any', 'Any', 'Trump', '2x2', 'Brian Jones', '2017-07-05 17:09:00', '2017-07-05 17:09:00', '2017-07-05 17:09:00', '2017-08-04 17:09:00', 'none', 'advertiseImages/AgapeAd.png', '', 9.75, '', '', 'Accountants', 'true'),
(321, 'Camelot', 22, '353-753-2277', '228 daqrus Way', 'Connecticut', 'All', '74557', 'Any', 'Any', 'Any', 'Any', 'Any', 'News', '2x2', 'Brian Jones', '2017-08-14 11:25:00', '2017-08-14 11:25:00', '2017-08-14 11:25:00', '2017-09-13 11:25:00', 'none', 'advertiseImages/AgapeAd.png', '', 39, '', '', 'Motion Picture Production & Distribution', 'true'),
(322, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'Alabama', 'All', '78633', 'Any', 'Any', 'Any', 'Any', 'Any', 'Any', '2x2', 'Bryant Huang', '2017-08-30 10:23:00', '2017-08-30 10:23:00', '2017-08-30 10:23:00', '2017-09-29 10:23:00', 'none', 'advertiseImages/AgapeAd.png', '', 39, '', '', 'Food & Beverage', 'true'),
(323, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'Arkansas', 'Agnos', '78633', 'Any', 'Any', 'Any', 'Any', 'High School', 'Trump', '2x2', 'Bryant Huang', '2017-09-03 12:18:00', '2017-09-03 12:18:00', '2017-09-03 12:18:00', '2017-10-03 12:18:00', 'none', 'advertiseImages/AgapeAd.png', '', 5.99, '', '', 'Food & Beverage', 'true'),
(324, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'Arkansas', 'Almyra', '78633', 'Any', 'Any', 'Any', 'Any', 'High School', 'Trump', '2x2', 'Bryant Huang', '2017-09-03 12:18:00', '2017-09-03 12:18:00', '2017-09-03 12:18:00', '2017-10-03 12:18:00', 'none', 'advertiseImages/AgapeAd.png', '', 5.99, '', '', 'Food & Beverage', 'true'),
(325, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'Arkansas', 'Altheimer', '78633', 'Any', 'Any', 'Any', 'Any', 'High School', 'Trump', '2x2', 'Bryant Huang', '2017-09-03 12:18:00', '2017-09-03 12:18:00', '2017-09-03 12:18:00', '2017-10-03 12:18:00', 'none', 'advertiseImages/AgapeAd.png', '', 5.99, '', '', 'Food & Beverage', 'true'),
(326, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'Arkansas', 'Alpena', '78633', 'Any', 'Any', 'Any', 'Any', 'High School', 'Trump', '2x2', 'Bryant Huang', '2017-09-03 12:18:00', '2017-09-03 12:18:00', '2017-09-03 12:18:00', '2017-10-03 12:18:00', 'none', 'advertiseImages/AgapeAd.png', '', 5.99, '', '', 'Food & Beverage', 'true'),
(327, 'Coca Cola', 2, '856-244-5575', '6725 Winter Dyle dr', 'Arkansas', 'Altus', '78633', 'Any', 'Any', 'Any', 'Any', 'High School', 'Trump', '2x2', 'Bryant Huang', '2017-09-03 12:18:00', '2017-09-03 12:18:00', '2017-09-03 12:18:00', '2017-10-03 12:18:00', 'none', 'advertiseImages/AgapeAd.png', '', 5.99, '', '', 'Food & Beverage', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_advertisements`
--
ALTER TABLE `agape_advertisements`
  ADD PRIMARY KEY (`agape_advertisement_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_advertisements`
--
ALTER TABLE `agape_advertisements`
  MODIFY `agape_advertisement_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=328;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
