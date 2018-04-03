-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2016 at 01:40 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agape_answers`
--

INSERT INTO `agape_answers` (`agape_answers_ID`, `agape_answers_Question_ID`, `agape_answers_answer`, `agape_answers_explained`, `agape_answers_gender`, `agape_answers_age`, `agape_answers_religion`, `agape_answers_city`, `agape_answers_state`, `agape_answers_race`, `agape_answers_income`, `agape_answers_politics`, `agape_answers_education`, `agape_answers_nation`, `agape_answers_created`) VALUES
(1, 1, 'Bernie Sanders', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 09:50:00'),
(2, 1, 'Rand Paul', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 09:58:00'),
(3, 1, 'Bernie Sanders', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:23:00'),
(4, 1, 'Hillary Clinton', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:24:00'),
(5, 1, 'Donald Trump', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:25:00'),
(6, 1, 'Bernie Sanders', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:26:00'),
(7, 1, 'Marco Rubio', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:30:00'),
(8, 1, 'Marco Rubio', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:31:00'),
(9, 1, 'Marco Rubio', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:32:00'),
(10, 1, 'Mike Huckabee', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:33:00'),
(11, 1, 'Ben Carson', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:33:00'),
(12, 1, 'Mike Huckabee', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:50:00'),
(13, 1, 'John Kasich', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:52:00'),
(14, 1, 'John Kasich', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-26 14:52:00'),
(15, 1, 'Mike Huckabee', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-27 20:27:00'),
(16, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:02:00'),
(17, 2, 'Yes', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:12:00'),
(18, 1, 'Jeb Bush', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:13:00'),
(19, 2, 'Yes', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:14:00'),
(20, 1, 'Chris Christie', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:14:00'),
(21, 2, 'Yes', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:15:00'),
(22, 1, 'Carly Fiorina', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:15:00'),
(23, 1, 'Bernie Sanders', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:16:00'),
(24, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:18:00'),
(25, 1, 'Chris Christie', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:18:00'),
(26, 1, 'Donald Trump', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:19:00'),
(27, 1, 'Rick Santorum', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:19:00'),
(28, 1, 'Carly Fiorina', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:20:00'),
(29, 1, 'Marco Rubio', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:20:00'),
(30, 1, 'Marco Rubio', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:22:00'),
(31, 1, 'Carly Fiorina', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:23:00'),
(32, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:25:00'),
(33, 1, 'Carly Fiorina', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:29:00'),
(34, 2, 'Not sure yet', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:29:00'),
(35, 2, 'Yes', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:29:00'),
(36, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:31:00'),
(37, 1, 'Ted Cruz', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:31:00'),
(38, 1, 'Hillary Clinton', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:32:00'),
(39, 1, 'Hillary Clinton', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:34:00'),
(40, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:37:00'),
(41, 1, 'Jeb Bush', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:37:00'),
(42, 1, 'Ted Cruz', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:40:00'),
(43, 1, 'John Kasich', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:41:00'),
(44, 1, 'Ben Carson', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:43:00'),
(45, 1, 'Marco Rubio', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:44:00'),
(46, 1, 'Ben Carson', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:45:00'),
(47, 1, 'John Kasich', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:49:00'),
(48, 1, 'Marco Rubio', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:51:00'),
(49, 1, 'Rick Santorum', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:51:00'),
(50, 1, 'Donald Trump', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:53:00'),
(51, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:55:00'),
(52, 1, 'Jeb Bush', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:55:00'),
(53, 1, 'Bernie Sanders', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:56:00'),
(54, 1, 'Jeb Bush', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:57:00'),
(55, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:57:00'),
(56, 1, 'Bernie Sanders', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 10:58:00'),
(57, 1, 'Rick Santorum', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:02:00'),
(58, 1, 'Ben Carson', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:03:00'),
(59, 1, 'Jeb Bush', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:14:00'),
(60, 1, 'Hillary Clinton', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:15:00'),
(61, 1, 'Carly Fiorina', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:16:00'),
(62, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 11:16:00'),
(63, 1, 'Rick Santorum', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 13:54:00'),
(64, 1, 'Rick Santorum', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:16:00'),
(65, 1, 'Rick Santorum', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:21:00'),
(66, 1, 'Chris Christie', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:23:00'),
(67, 1, 'Ted Cruz', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:24:00'),
(68, 1, 'Chris Christie', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:26:00'),
(69, 1, 'Hillary Clinton', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:28:00'),
(70, 1, 'Rick Santorum', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:29:00'),
(71, 1, 'Donald Trump', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:31:00'),
(72, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:32:00'),
(73, 1, 'Chris Christie', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:34:00'),
(74, 1, 'John Kasich', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:34:00'),
(75, 1, 'Mike Huckabee', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:35:00'),
(76, 1, 'Hillary Clinton', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:36:00'),
(77, 1, 'John Kasich', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:38:00'),
(78, 1, 'Rand Paul', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:47:00'),
(79, 1, 'Carly Fiorina', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:49:00'),
(80, 1, 'Marco Rubio', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:51:00'),
(81, 1, 'Marco Rubio', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:52:00'),
(82, 1, 'Mike Huckabee', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:53:00'),
(83, 1, 'Hillary Clinton', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 14:58:00'),
(84, 1, 'Carly Fiorina', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:00:00'),
(85, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:00:00'),
(86, 1, 'Ted Cruz', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:00:00'),
(87, 2, 'Yes', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:00:00'),
(88, 1, 'Hillary Clinton', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:07:00'),
(89, 1, 'Carly Fiorina', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:10:00'),
(90, 1, 'John Kasich', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:11:00'),
(91, 1, 'John Kasich', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:13:00'),
(92, 1, 'Rick Santorum', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:16:00'),
(93, 1, 'Ben Carson', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:16:00'),
(94, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:17:00'),
(95, 1, 'Bernie Sanders', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:18:00'),
(96, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:18:00'),
(97, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:22:00'),
(98, 2, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:23:00'),
(99, 2, 'Yes', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:23:00'),
(100, 1, 'Carly Fiorina', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:25:00'),
(101, 2, 'Not sure yet', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:25:00'),
(102, 1, 'Rand Paul', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:27:00'),
(103, 2, 'Not sure yet', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:30:00'),
(104, 1, 'Carly Fiorina', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:43:00'),
(105, 1, 'John Kasich', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:43:00'),
(106, 1, 'Rand Paul', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:44:00'),
(107, 1, 'Marco Rubio', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:46:00'),
(108, 1, 'John Kasich', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:46:00'),
(109, 1, 'Donald Trump', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:47:00'),
(110, 1, 'Rick Santorum', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:47:00'),
(111, 2, 'Not sure yet', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:54:00'),
(112, 1, 'Mike Huckabee', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:55:00'),
(113, 2, 'Not sure yet', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 15:57:00'),
(114, 1, 'Bernie Sanders', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 16:06:00'),
(115, 1, 'Rand Paul', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 16:06:00'),
(116, 1, 'Marco Rubio', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:27:00'),
(117, 3, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:44:00'),
(118, 1, 'Jeb Bush', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:44:00'),
(119, 3, 'Yes', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:44:00'),
(120, 3, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:44:00'),
(121, 3, 'No', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:44:00'),
(122, 3, 'I don&#39;t watch Fox.', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:51:00'),
(123, 3, 'I don&#39;t watch Fox.', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:51:00'),
(124, 3, 'I don&#39;t watch Fox.', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 17:56:00'),
(125, 3, 'I don&#39;t watch Fox.', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 18:04:00'),
(126, 3, 'I don&#39;t watch Fox.', '', 'Christianity', '44', 'Christianity', 'Coyle', 'Oklahoma', 'Latino', 'Not Answered', 'Democratic Party', 'High School', 'USA', '2016-02-28 18:04:00'),
(127, 3, 'I don&#39;t watch Fox.', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 07:59:00'),
(128, 1, 'Donald Trump', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 08:21:00'),
(129, 1, 'Rick Santorum', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 08:22:00'),
(130, 3, 'I don&#39;t watch Fox.', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 08:33:00'),
(131, 3, 'I don&#39;t watch Fox.', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 08:34:00'),
(132, 3, 'I don&#39;t watch Fox.', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 08:36:00'),
(133, 3, 'No', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 08:38:00'),
(134, 3, 'I don&#39;t watch Fox.', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 08:40:00'),
(135, 1, 'Marco Rubio', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 08:47:00'),
(136, 5, 'No. It will be the best thing to happen to Am', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 09:42:00'),
(137, 13, 'Maybe. Some ways better, some ways worse.', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-02-29 10:48:00'),
(138, 22, 'Yes. Why would I doubt that?', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-03-03 10:50:00'),
(139, 14, 'Very. This is relevant to America.', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-03-03 11:22:00'),
(140, 15, 'No. It only slows us down.', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-03-03 11:33:00'),
(141, 15, 'No. It only slows us down.', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-03-03 11:37:00'),
(142, 1, 'Carly Fiorina', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-03-03 11:37:00'),
(143, 30, 'Rick Ross', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-03-07 13:25:00'),
(144, 1, 'Bernie Sanders', '', '', '', '', '', '', '', '', '', '', '', '2016-03-07 13:33:00'),
(145, 1, 'Bernie Sanders', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-03-18 15:00:00'),
(146, 1, 'Marco Rubio', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-03-18 15:04:00'),
(147, 31, 'Yes.Once trust is lost support will follow.', '', 'Islam', '28', 'Islam', 'Bonneau', 'South Carolina', 'Black', '5000000', 'Not Important', 'AA Degree', 'USA', '2016-03-30 08:16:00'),
(148, 13, 'Maybe. Some ways better, some ways worse.', '', '', '', '', 'Hartford', 'Connecticut', '', '', 'Democratic Party', '', 'USA', '2016-05-05 07:47:00'),
(149, 31, 'Yes.Once trust is lost support will follow.', '', '', '', '', 'Hartford', 'Connecticut', '', '', 'Democratic Party', '', 'USA', '2016-05-05 07:48:00'),
(150, 31, 'Yes.Once trust is lost support will follow.', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Not Answered', 'USA', '2016-05-12 09:11:00'),
(151, 34, 'Hell no. Nothing good comes from an open rela', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-16 08:09:00'),
(152, 17, 'No. There are still things that don', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:12:00'),
(153, 17, 'I couldn&#39;t care less.', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:15:00'),
(154, 17, 'No. There are still things that don', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:24:00'),
(155, 17, 'Absolutely. I believe that justice was served', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:27:00'),
(156, 17, 'I couldn&#39;t care less.', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:29:00'),
(157, 17, 'Everyone knows this was a false flag.', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:32:00'),
(158, 17, 'Everyone knows this was a false flag.', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:33:00'),
(159, 17, 'Absolutely. I believe that justice was served', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:37:00'),
(160, 14, 'Not very. Gay rights shouldn&#39;t top anyone', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:44:00'),
(161, 27, 'No. He slowed down our nation.', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:49:00'),
(162, 29, 'I &#39;t know.', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:51:00'),
(163, 29, 'None. America needs this institution to prote', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:55:00'),
(164, 13, 'Yes. This was a big step in the right directi', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-17 07:55:00'),
(165, 29, 'All of them. The Feds are bad news for Americ', '', '', '', '', 'Dorchester', 'South Carolina', '', '', 'Democratic Party', '', 'USA', '2016-05-17 08:45:00'),
(166, 29, 'None. America needs this institution to prote', '', '', '', '', 'Dorchester', 'South Carolina', '', '', 'Democratic Party', '', 'USA', '2016-05-17 08:45:00'),
(167, 13, 'Yes. This was a big step in the right directi', '', '', '', '', 'Dorchester', 'South Carolina', '', '', 'Democratic Party', '', 'USA', '2016-05-17 11:22:00'),
(168, 35, 'It doesn&#39;t matter how many. They&#39;re with me now..', '', '', '', '', 'Bald Knob', 'Arkansas', '', '', 'Democratic Party', '', 'USA', '2016-05-18 08:18:00'),
(169, 35, 'It doesn&#39;t matter how many. They&#39;re with me now..', '', '', '', '', 'Bald Knob', 'Arkansas', '', '', 'Democratic Party', '', 'USA', '2016-05-18 08:18:00'),
(170, 13, 'Maybe. Some ways better, some ways worse.', '', '', '', '', 'Bald Knob', 'Arkansas', '', '', 'Democratic Party', '', 'USA', '2016-05-18 08:19:00'),
(171, 35, 'no more than 1.', '', '', '', '', 'Day', 'Florida', '', '', 'Independent Party', '', 'USA', '2016-05-18 08:20:00'),
(172, 35, 'no more than 1.', '', '', '', '', 'Marietta', 'South Carolina', '', '', 'Libetarian Party', '', 'USA', '2016-05-18 08:27:00'),
(173, 13, 'No. Not much has changed outside of that.', '', '', '', '', 'Marietta', 'South Carolina', '', '', 'Libetarian Party', '', 'USA', '2016-05-18 08:27:00'),
(174, 13, 'No. Not much has changed outside of that.', '', 'Not Answered', 'non', 'Not Answered', 'Marietta', 'South Carolina', 'Not answered', 'Not Answered', 'Libetarian Party', 'Not Answered', 'USA', '2016-05-18 08:30:00'),
(175, 35, 'no more than 3.', '', 'Not Answered', 'non', 'Not Answered', 'Marietta', 'South Carolina', 'Black', 'Not Answered', 'Libetarian Party', 'Not Answered', 'USA', '2016-05-18 08:33:00'),
(176, 35, 'no more than 4.', '', 'Christianity', '50', 'Christianity', 'Troy', 'Alabama', 'Asian', '5000', 'Independent Party', 'High School', 'USA', '2016-05-18 08:35:00'),
(177, 13, 'No. Not much has changed outside of that.', '', 'Not Answered', '21', 'Not Answered', 'Bridgeville', 'Delaware', 'Black', '15000', 'Democratic Party', 'Masters', 'USA', '2016-05-18 08:49:00'),
(178, 13, 'Yes. This was a big step in the right direction.', '', '', '', '', 'Honaunau', 'Hawaii', '', '', 'Libetarian Party', '', 'USA', '2016-05-18 08:51:00'),
(179, 37, 'Barack Obama', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-25 08:42:00'),
(180, 30, 'Rick Ross', '', 'Christianity', '45', 'Christianity', 'South Pasadena', 'California', 'White', '250000', 'Democratic Party', 'Masters', 'USA', '2016-05-25 08:56:00'),
(181, 39, 'No problem. I got kids.', '', 'Not Answered', '21', 'Not Answered', 'Bridgeville', 'Delaware', 'Black', '15000', 'Democratic Party', 'Masters', 'USA', '2016-06-02 14:00:00'),
(182, 40, 'Yes I have.', '', 'Male', '21', 'Not Answered', 'Bridgeville', 'Delaware', 'Black', '15000', 'Democratic Party', 'Masters', 'USA', '2016-06-02 14:02:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_answers`
--
ALTER TABLE `agape_answers`
  ADD PRIMARY KEY (`agape_answers_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_answers`
--
ALTER TABLE `agape_answers`
  MODIFY `agape_answers_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
