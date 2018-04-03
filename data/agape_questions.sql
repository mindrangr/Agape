-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2016 at 12:36 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agape_questions`
--
CREATE DATABASE IF NOT EXISTS `agape_questions` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `agape_questions`;

-- --------------------------------------------------------

--
-- Table structure for table `agape_answers`
--

CREATE TABLE IF NOT EXISTS `agape_answers` (
  `agape_answers_ID` int(11) NOT NULL AUTO_INCREMENT,
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
  `agape_answers_created` datetime NOT NULL,
  PRIMARY KEY (`agape_answers_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `agape_answers`
--

INSERT INTO `agape_answers` (`agape_answers_ID`, `agape_answers_Question_ID`, `agape_answers_answer`, `agape_answers_gender`, `agape_answers_age`, `agape_answers_religion`, `agape_answers_city`, `agape_answers_state`, `agape_answers_race`, `agape_answers_income`, `agape_answers_politics`, `agape_answers_education`, `agape_answers_nation`, `agape_answers_created`) VALUES
(1, 1, 'Bernie Sanders', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 09:50:00'),
(2, 1, 'Rand Paul', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 09:58:00'),
(3, 1, 'Bernie Sanders', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:23:00'),
(4, 1, 'Hillary Clinton', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:24:00'),
(5, 1, 'Donald Trump', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:25:00'),
(6, 1, 'Bernie Sanders', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:26:00'),
(7, 1, 'Marco Rubio', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:30:00'),
(8, 1, 'Marco Rubio', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:31:00'),
(9, 1, 'Marco Rubio', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:32:00'),
(10, 1, 'Mike Huckabee', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:33:00'),
(11, 1, 'Ben Carson', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:33:00'),
(12, 1, 'Mike Huckabee', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:50:00'),
(13, 1, 'John Kasich', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:52:00'),
(14, 1, 'John Kasich', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:52:00'),
(15, 1, 'Mike Huckabee', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-27 20:27:00'),
(16, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:02:00'),
(17, 2, 'Yes', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:12:00'),
(18, 1, 'Jeb Bush', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:13:00'),
(19, 2, 'Yes', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:14:00'),
(20, 1, 'Chris Christie', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:14:00'),
(21, 2, 'Yes', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:15:00'),
(22, 1, 'Carly Fiorina', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:15:00'),
(23, 1, 'Bernie Sanders', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:16:00'),
(24, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:18:00'),
(25, 1, 'Chris Christie', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:18:00'),
(26, 1, 'Donald Trump', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:19:00'),
(27, 1, 'Rick Santorum', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:19:00'),
(28, 1, 'Carly Fiorina', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:20:00'),
(29, 1, 'Marco Rubio', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:20:00'),
(30, 1, 'Marco Rubio', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:22:00'),
(31, 1, 'Carly Fiorina', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:23:00'),
(32, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:25:00'),
(33, 1, 'Carly Fiorina', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:29:00'),
(34, 2, 'Not sure yet', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:29:00'),
(35, 2, 'Yes', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:29:00'),
(36, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:31:00'),
(37, 1, 'Ted Cruz', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:31:00'),
(38, 1, 'Hillary Clinton', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:32:00'),
(39, 1, 'Hillary Clinton', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:34:00'),
(40, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:37:00'),
(41, 1, 'Jeb Bush', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:37:00'),
(42, 1, 'Ted Cruz', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:40:00'),
(43, 1, 'John Kasich', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:41:00'),
(44, 1, 'Ben Carson', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:43:00'),
(45, 1, 'Marco Rubio', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:44:00'),
(46, 1, 'Ben Carson', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:45:00'),
(47, 1, 'John Kasich', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:49:00'),
(48, 1, 'Marco Rubio', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:51:00'),
(49, 1, 'Rick Santorum', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:51:00'),
(50, 1, 'Donald Trump', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:53:00'),
(51, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:55:00'),
(52, 1, 'Jeb Bush', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:55:00'),
(53, 1, 'Bernie Sanders', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:56:00'),
(54, 1, 'Jeb Bush', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:57:00'),
(55, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:57:00'),
(56, 1, 'Bernie Sanders', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:58:00'),
(57, 1, 'Rick Santorum', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:02:00'),
(58, 1, 'Ben Carson', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:03:00'),
(59, 1, 'Jeb Bush', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:14:00'),
(60, 1, 'Hillary Clinton', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:15:00'),
(61, 1, 'Carly Fiorina', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:16:00'),
(62, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:16:00'),
(63, 1, 'Rick Santorum', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 13:54:00'),
(64, 1, 'Rick Santorum', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:16:00'),
(65, 1, 'Rick Santorum', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:21:00'),
(66, 1, 'Chris Christie', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:23:00'),
(67, 1, 'Ted Cruz', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:24:00'),
(68, 1, 'Chris Christie', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:26:00'),
(69, 1, 'Hillary Clinton', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:28:00'),
(70, 1, 'Rick Santorum', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:29:00'),
(71, 1, 'Donald Trump', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:31:00'),
(72, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:32:00'),
(73, 1, 'Chris Christie', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:34:00'),
(74, 1, 'John Kasich', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:34:00'),
(75, 1, 'Mike Huckabee', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:35:00'),
(76, 1, 'Hillary Clinton', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:36:00'),
(77, 1, 'John Kasich', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:38:00'),
(78, 1, 'Rand Paul', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:47:00'),
(79, 1, 'Carly Fiorina', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:49:00'),
(80, 1, 'Marco Rubio', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:51:00'),
(81, 1, 'Marco Rubio', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:52:00'),
(82, 1, 'Mike Huckabee', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:53:00'),
(83, 1, 'Hillary Clinton', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:58:00'),
(84, 1, 'Carly Fiorina', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:00:00'),
(85, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:00:00'),
(86, 1, 'Ted Cruz', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:00:00'),
(87, 2, 'Yes', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:00:00'),
(88, 1, 'Hillary Clinton', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:07:00'),
(89, 1, 'Carly Fiorina', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:10:00'),
(90, 1, 'John Kasich', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:11:00'),
(91, 1, 'John Kasich', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:13:00'),
(92, 1, 'Rick Santorum', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:16:00'),
(93, 1, 'Ben Carson', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:16:00'),
(94, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:17:00'),
(95, 1, 'Bernie Sanders', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:18:00'),
(96, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:18:00'),
(97, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:22:00'),
(98, 2, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:23:00'),
(99, 2, 'Yes', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:23:00'),
(100, 1, 'Carly Fiorina', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:25:00'),
(101, 2, 'Not sure yet', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:25:00'),
(102, 1, 'Rand Paul', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:27:00'),
(103, 2, 'Not sure yet', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:30:00'),
(104, 1, 'Carly Fiorina', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:43:00'),
(105, 1, 'John Kasich', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:43:00'),
(106, 1, 'Rand Paul', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:44:00'),
(107, 1, 'Marco Rubio', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:46:00'),
(108, 1, 'John Kasich', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:46:00'),
(109, 1, 'Donald Trump', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:47:00'),
(110, 1, 'Rick Santorum', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:47:00'),
(111, 2, 'Not sure yet', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:54:00'),
(112, 1, 'Mike Huckabee', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:55:00'),
(113, 2, 'Not sure yet', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:57:00'),
(114, 1, 'Bernie Sanders', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 16:06:00'),
(115, 1, 'Rand Paul', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 16:06:00'),
(116, 1, 'Marco Rubio', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:27:00'),
(117, 3, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:44:00'),
(118, 1, 'Jeb Bush', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:44:00'),
(119, 3, 'Yes', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:44:00'),
(120, 3, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:44:00'),
(121, 3, 'No', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:44:00'),
(122, 3, 'I don&#39;t watch Fox.', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:51:00'),
(123, 3, 'I don&#39;t watch Fox.', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:51:00'),
(124, 3, 'I don&#39;t watch Fox.', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:56:00'),
(125, 3, 'I don&#39;t watch Fox.', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 18:04:00'),
(126, 3, 'I don&#39;t watch Fox.', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 18:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_ID` int(11) NOT NULL AUTO_INCREMENT,
  `question_Core` varchar(400) NOT NULL,
  `question_reply` mediumtext NOT NULL,
  `question_group` varchar(150) NOT NULL,
  `question_type` varchar(240) NOT NULL,
  PRIMARY KEY (`question_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_ID`, `question_Core`, `question_reply`, `question_group`, `question_type`) VALUES
(1, 'So whose it going to be in 2016? Take a dip in our April popularity vote.', '{"answers":[{"param1":"Marco Rubio","count":14},{"param1":"Mike Huckabee","count":8},{"param1":"Ben Carson","count":9},{"param1":"John Kasich","count":12},{"param1":"Martin O&#39;Malley","count":3},{"param1":"Rick Santorum","count":11},{"param1":"Donald Trump","count":6},{"param1":"Bernie Sanders","count":7},{"param1":"Carly Fiorina","count":11},{"param1":"Rick Santorum","count":11},{"param1":"Hillary Clinton","count":10},{"param1":"Ted Cruz","count":7},{"param1":"Jeb Bush","count":8},{"param1":"Rand Paul","count":7},{"param1":"Chris Christie","count":6}]}', 'Politics', '{"type":"radio","qnty":1}'),
(2, 'Should ISIS be the primary issue for all of the candidate?', '{"answers":[{"param1":"Yes","count":127},{"param1":"No","count":647},{"param1":"Not at this time.","count":99}]}', 'Politics', '{"type":"radio","qnty":1}'),
(3, 'Has Fox news been fair and balanced in its coverage of the debates?', '{"answers":[{"param1":"Yes","count":3426},{"param1":"No","count":2670},{"param1":"I don&#39;t watch Fox.","count":101}]}', 'Politics', '{"type":"radio","qnty":1}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
