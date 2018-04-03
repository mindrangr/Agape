-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2016 at 01:28 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agape_president`
--

-- --------------------------------------------------------

--
-- Table structure for table `people_candidates`
--

CREATE TABLE IF NOT EXISTS `people_candidates` (
  `peopleCandidate_ID` int(11) NOT NULL,
  `agape_profile_ID` int(11) NOT NULL,
  `peopleCandidate_Firstname` varchar(25) NOT NULL,
  `peopleCandidate_profileID` varchar(10) NOT NULL,
  `peopleCandidate_Lastname` varchar(25) NOT NULL,
  `peopleCandidate_Username` varchar(100) NOT NULL,
  `peopleCandidate_Party` varchar(25) NOT NULL,
  `peopleCandidate_BirthCity` varchar(20) NOT NULL,
  `peopleCandidate_BirthState` varchar(20) NOT NULL,
  `agape_profile_gender` varchar(15) NOT NULL,
  `peopleCandidate_CurrentPosition` varchar(25) NOT NULL,
  `peopleCandidate_workingCity` varchar(25) NOT NULL,
  `peopleCandidate_workingState` varchar(20) NOT NULL,
  `peopleCandidate_upVotes` varchar(15) NOT NULL,
  `peopleCandidate_downVotes` varchar(15) NOT NULL,
  `peopleCandidate_website` varchar(120) NOT NULL,
  `peopleCandidate_issue_list` text NOT NULL,
  `peopleCandidate_Comments` varchar(400) NOT NULL,
  `peopleCandidate_photos` text NOT NULL,
  `peopleCandidate_LastPosition` varchar(125) NOT NULL,
  `peopleCandidate_video` text NOT NULL,
  `peopleCandidate_email` varchar(120) NOT NULL,
  `peopleCandidate_AccountCreated` datetime NOT NULL,
  `peopleCandidate_AccountUpdated` datetime NOT NULL,
  `peopleCandidate_Active` varchar(25) NOT NULL DEFAULT 'Active',
  `peopleCandidate_discussPage` varchar(50) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

ALTER TABLE `people_candidates`
  ADD PRIMARY KEY (`peopleCandidate_ID`);
--
-- Dumping data for table `people_candidates`
--

INSERT INTO `people_candidates` (`peopleCandidate_ID`, `agape_profile_ID`, `peopleCandidate_Firstname`, `peopleCandidate_profileID`, `peopleCandidate_Lastname`, `peopleCandidate_Username`, `peopleCandidate_Party`, `peopleCandidate_BirthCity`, `peopleCandidate_BirthState`, `agape_profile_gender`, `peopleCandidate_CurrentPosition`, `peopleCandidate_workingCity`, `peopleCandidate_workingState`, `peopleCandidate_upVotes`, `peopleCandidate_downVotes`, `peopleCandidate_website`, `peopleCandidate_issue_list`, `peopleCandidate_Comments`, `peopleCandidate_photos`, `peopleCandidate_LastPosition`, `peopleCandidate_video`, `peopleCandidate_email`, `peopleCandidate_AccountCreated`, `peopleCandidate_AccountUpdated`, `peopleCandidate_Active`, `peopleCandidate_discussPage`) VALUES
(1, 250, 'Tommy', '', 'Martin', 'Tommy Martin', 'Democratic Party', 'South Pasadena', 'California', 'Male', 'smiler', 'South Pasadena', 'California', '2', '34', '', '', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"profileImages/workImages/71TGbD7aGskj243QX1xcVy2EdjDl0+wAvFLdhhbxrxQ.gif","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'email250', '2016-05-17 08:15:00', '2016-06-02 12:50:00', 'Active', '483'),
(2, 249, 'Joann', '', 'Turner', 'Joann Turner', 'Republican Party', 'Lacarne', 'Ohio', 'Female', 'hello', 'Lacarne', 'Ohio', '11', '363', '', '', '', '{"defaultPic":"profileImages/female35_w.jpg","defaultPicTitle":"My Pic","Pic1":"Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"profileImages/female35_w.jpg","Pic7Title":"Presidential","Presidential1":"Images/Female-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'email249', '2016-05-17 08:21:00', '2016-05-17 08:21:00', 'Active', 'None'),
(3, 200, 'Benjamin', '', 'Li', 'Benjamin Li', 'Republican Party', 'Rubottom', 'Oklahoma', '-Select-', 'driver', 'Rubottom', 'Oklahoma', '526', '45', '', '[]', '', '{"defaultPic":"profileImages/male5_a.jpg","defaultPicTitle":"My Pic","Pic1":"Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"profileImages/workImages/zZdRlPvQ3tTfvQ93GazWv7l40T7Tcg9IqiqPthWjPE8.jpeg","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'email200', '2016-05-17 08:25:00', '2016-06-02 09:05:00', 'Active', '482'),
(4, 5230, 'miles', '', 'miles', '', 'Green Party', 'Glasgow', 'Illinois', 'Male', 'miles', 'Lilburn', 'Georgia', '15', '1', '', '[]', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"profileImages/male3_l.jpg","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'miles', '2016-05-17 08:30:00', '2016-05-17 08:30:00', 'Active', 'None'),
(5, 5231, 'Greg', '', 'Lewis', 'Greg Lewis', 'Democratic Party', 'Blackwater', 'Virginia', 'Male', 'programmer', 'Dorchester', 'South Carolina', '653', '35', '', '[]', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"Images/Male-icon.png","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'glew', '2016-05-17 08:43:00', '2016-05-17 08:43:00', 'Active', 'None'),
(6, 5232, 'Renee', '', 'Carey', 'Renee Carey', 'Independent Party', 'Castle Hayne', 'North Carolina', 'Female', 'singer', 'Bald Knob', 'Arkansas', '156467', '3634', '', '[]', '', '{"defaultPic":"Images/Female-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Female-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"Images/Female-icon.png","Pic7Title":"Presidential"}', '', '[]', 'mcarey', '2016-05-18 08:09:00', '2016-05-18 08:09:00', 'Active', 'None'),
(8, 5234, 'asdf ', '', 'asdf ', '', 'Libetarian Party', 'Fence Lake', 'New Mexico', 'Male', 'asdf ', 'Marietta', 'South Carolina', '4634', '233', '', '[]', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"Images/Male-icon.png","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'asdf ', '2016-05-18 08:26:00', '2016-05-18 08:26:00', 'Active', 'None'),
(9, 5236, 'Lisa', '', 'account', '', 'Democratic Party', 'Bruceville', 'Texas', 'Female', 'accountant', 'Douglas', 'Georgia', '0', '0', '', '[]', '', '{"defaultPic":"Images/Female-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Female-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"Images/Female-icon.png","Pic7Title":"Presidential","Presidential1":"Images/Female-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'account', '2016-05-18 08:40:00', '2016-05-18 08:40:00', 'Active', 'None'),
(11, 50, 'Kevin', '', 'Duncan', 'Kevin Duncan', 'Democratic Party', 'Bridgeville', 'Delaware', 'Male', 'buyer', 'Bridgeville', 'Delaware', '4574', '37', '', '[]', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"Images/Male-icon.png","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'email50', '2016-05-18 08:48:00', '2016-05-18 08:48:00', 'Active', 'None'),
(12, 5237, 'Mike', '', 'Tinker', '', 'Libetarian Party', 'Batesville', 'Texas', 'Male', 'Coach', 'Honaunau', 'Hawaii', '743', '356', '', '[]', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"Images/Male-icon.png","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'stink', '2016-05-18 08:50:00', '2016-05-18 08:50:00', 'Active', 'None'),
(14, 5239, 'checks', '', 'checks', '', 'Libetarian Party', 'Aiea', 'Hawaii', 'Male', 'checks', 'Bear', 'Delaware', '967457', '36764', '', '[]', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"Images/Male-icon.png","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'checks', '2016-05-18 08:55:00', '2016-05-18 08:55:00', 'Active', 'None'),
(15, 5240, 'button', '', 'button', '', 'Green Party', 'Attica', 'Indiana', 'Male', 'button', 'Astatula', 'Florida', '375', '367', '', '[]', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"Images/Male-icon.png","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'button', '2016-05-18 08:58:00', '2016-05-18 08:58:00', 'Active', 'None'),
(16, 5241, 'Trel', '', 'Burns', 'Trel Burns', 'Green Party', 'Abac', 'Georgia', 'Male', 'boebee', 'Bear', 'Delaware', '836737', '3248', '', '[]', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"profileImages/workImages/sA3yVh0y6hUa5qsIWCGD6A4uvy9XQ9W986vqKoQgfzg.gif","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'boebee', '2016-05-18 13:33:00', '2016-06-03 07:54:00', 'Active', 'None'),
(22, 77, 'Gordan', '', 'Douglas', 'Gordan Douglas', 'Libetarian Party', 'Alexander', 'Kansas', 'Male', 'teacher', 'Alexander', 'Kansas', '1', '0', '', '[]', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"Images/Male-icon.png","Pic7Title":"Presidential","Presidential1":"Images/Male-icon.png","Pic8Title":"Presidential1"}', '', '[]', 'email77', '2016-05-20 14:41:00', '2016-06-03 08:13:00', 'Active', '490'),
(23, 55, 'Michael', '', 'Castro', 'Michael Castro', 'Republican Party', 'Hobbsville', 'North Carolina', 'Male', 'teacher', 'Hobbsville', 'North Carolina', '5', '2', '', '[]', '', '{"defaultPic":"Images/Male-icon.png","defaultPicTitle":"My Pic","Pic1":"Images/Images/Male-icon.png","Pic1Title":"none","Pic2":"none","Pic2Title":"none","Pic3":"none","Pic3Title":"none","Pic4":"none","Pic4Title":"none","Pic5":"none","Pic5Title":"none","Pic6":"none","Pic6Title":"none","Presidential":"profileImages/workImages/6NCdYJuYJXvnv5Q4QLQTh+MbuzFWvB4qe2dX2PnpD0c.gif","Pic7Title":"Presidential","Presidential1":"profileImages/workImages/6NCdYJuYJXvnv5Q4QLQTh+MbuzFWvB4qe2dX2PnpD0c.gif","Pic8Title":"Presidential1"}', '', '[]', 'email55', '2016-05-20 14:52:00', '2016-06-02 13:36:00', 'Active', '484');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people_candidates`
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people_candidates`
--
ALTER TABLE `people_candidates`
  MODIFY `peopleCandidate_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
