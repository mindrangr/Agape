-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 09:09 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agape_questions`
--

-- --------------------------------------------------------

--
-- Table structure for table `agape_answers`
--

CREATE TABLE IF NOT EXISTS `agape_answers` (
  `agape_answers_ID` int(11) NOT NULL,
  `agape_answers_Question_ID` int(11) DEFAULT NULL,
  `agape_answers_answer` varchar(45) NOT NULL,
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
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_ID` int(11) NOT NULL,
  `question_Core` varchar(400) NOT NULL,
  `question_reply` mediumtext NOT NULL,
  `question_group` varchar(150) NOT NULL,
  `question_type` varchar(240) NOT NULL,
  `question_answerCount` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_answers`
--
ALTER TABLE `agape_answers`
  ADD PRIMARY KEY (`agape_answers_ID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_answers`
--
ALTER TABLE `agape_answers`
  MODIFY `agape_answers_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `question_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
