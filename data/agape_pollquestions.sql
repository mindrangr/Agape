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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agape_pollquestions`
--

INSERT INTO `agape_pollquestions` (`question_ID`, `question_Core`, `question_reply`, `question_group`, `question_type`, `question_comms`, `question_updatedBy`, `question_updateBy_ID`, `question_createdBy`, `question_created`, `question_lastUpdated`, `question_answerCount`) VALUES
(1, 'So whose it going to be in 2016? Take a dip in our April popularity vote.', '{"answers":[{"param1":"Gary Johnson","count":12},{"param1":"Donald Trump","count":7},{"param1":"Bernie Sanders","count":9},{"param1":"Hillary Clinton","count":10}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_1', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '116'),
(2, 'Should ISIS be the primary issue for all candidates?', '{"answers":[{"param1":"Yes","count":127},{"param1":"No","count":647},{"param1":"Not at this time.","count":99}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_2', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '874'),
(3, 'Has Fox news been fair and balanced in its coverage of the debates?', '{"answers":[{"param1":"Yes","count":3426},{"param1":"No","count":2671},{"param1":"I don&#39;t watch Fox.","count":106}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_3', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '6204'),
(4, 'How would you rate the job that president Obama did as the leader of the US?', '{"answers":[{"param1":"He did a great job","count":3426},{"param1":"He was ok. He did not stand out","count":2671},{"param1":"Terrible job.","count":142},{"param1":"He should be impeached.","count":106},{"param1":"History will validate him..","count":254}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_4', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '6600'),
(5, 'Is Obama care a disaster?', '{"answers":[{"param1":"Yes. It will negatively effect Americans later.","count":3426},{"param1":"No. It will be the best thing to happen to Americans.","count":2672},{"param1":"I&#39;ll withhold judgement for now.","count":106}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_5', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '57072'),
(6, 'Do you see the value in the lobby system?', '{"answers":[{"param1":"Yes. It gives organizations a vehicle to be heard.","count":2127},{"param1":"No. It breeds corruption.","count":647},{"param1":"Maybe. It seems relevant to the way we govern.","count":499}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_6', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '3274'),
(7, 'In 2015 military spending accounted for more than half the US budget at nearly $600 billion. Is this much expense necessary?', '{"answers":[{"param1":"Yes. This is how we stay safe.","count":15},{"param1":"No. that is too much money.","count":8},{"param1":"On the fence with this issue.","count":8}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_7', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(8, 'Which potential candidate is most likely to lead us to war should they become president?', '{"answers":[{"param1":"John Kasich","count":0},{"param1":"Ted Cruz","count":0},{"param1":"Donald Trump","count":0},{"param1":"Bernie Sanders","count":0},{"param1":"Marco Rubio","count":0},{"param1":"Hillary Clinton","count":0}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_8', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(9, 'Is Israel a good friend to the US?', '{"answers":[{"param1":"Yes. they are our allies in the ME","count":127},{"param1":"No. They use us for their own agenda.","count":647},{"param1":"Not sure at this time.","count":99}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_9', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(10, 'In the Israeli-Palestinian conflict, who do you sympathize with more?', '{"answers":[{"param1":"The Palestinians.","count":0},{"param1":"The Israelis.","count":0},{"param1":"I haven&#39;t made up my mind.","count":0},{"param1":"I couldn&#39;t care less.","count":0}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_10', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(11, 'How relevant should womens rights be the next president?', '{"answers":[{"param1":"Very. What is good for women is good for all.","count":3426},{"param1":"Not Very. There are other more pressing issues for me to be concerned with.","count":0},{"param1":"I don&#39;t concern myself with Women&#39;s rights at all.","count":106}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_11', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(12, 'How relevant should pressing civil rights for blacks be the next president?', '{"answers":[{"param1":"Very. What is good for AA&#39;s is good for all.","count":3426},{"param1":"Not Very. There are other more pressing issues for me to be concerned with.","count":0},{"param1":"I don&#39;t concern myself with AA rights at all.","count":106}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_12', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(13, 'Did electing a black president prove to you that America has progressed in its battle against racism?', '{"answers":[{"param1":"Yes. This was a big step in the right direction.","count":4},{"param1":"No. Not much has changed outside of that.","count":3},{"param1":"Maybe. Some ways better, some ways worse.","count":3}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_13', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(14, 'How relevant should gay rights be to the next president?', '{"answers":[{"param1":"Very. This is relevant to America.","count":1},{"param1":"Not very. Gay rights shouldn&#39;t top anyones agenda.","count":1},{"param1":"I don&#39;t really care about gay rights.","count":0}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_14', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(15, 'Does our 3 tiered government system work?', '{"answers":[{"param1":"Yes. We need the checks and balances","count":0},{"param1":"No. It only slows us down.","count":2},{"param1":"I haven&#39;t made up my mind.","count":0},{"param1":"It&#39;s not the worse system. We get things done.","count":0},{"param1":"It&#39;s got to go!","count":0}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_15', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(16, 'Does it bother you that all our presidential candidates are millionaires?', '{"answers":[{"param1":"No. Their experience is important.","count":127},{"param1":"Yes. Can&#39;t we get a regular guy in the white house?","count":647},{"param1":"Maybe. It seems like it&#39;s always been that way.","count":0}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_16', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(17, 'Did our government do enough in their investigation of 911 to satisfy you?', '{"answers":[{"param1":"Absolutely. I believe that justice was served.","count":4},{"param1":"No. There are still things that don''t make sense","count":0},{"param1":"Everyone knows this was a false flag.","count":12},{"param1":"I couldn&#39;t care less.","count":0}]}', 'Conspiracy', '{"type":"radio","qnty":1}', 'pollCommQues_17', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(18, 'Is America a Christian nation?', '{"answers":[{"param1":"Yes. We&#39;ve always been so.","count":0},{"param1":"No. Church and state are wisely separated.","count":0},{"param1":"I don&#39;t believe in religion.","count":1}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_18', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '257'),
(19, 'Do socialistic principals adulterate a true democracy?', '{"answers":[{"param1":"No. All governments require some socialism.","count":15},{"param1":"Yes. Free enterprise is the key to a true democracy.","count":8},{"param1":"On the fence with this issue.","count":0},{"param1":"Just say no to Socialism!","count":0}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_19', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '776'),
(20, 'Do you have an opinion on buying foreign cars?', '{"answers":[{"param1":"Yes. They are the best!","count":0},{"param1":"Yes. I only buy American.","count":0},{"param1":"No. Not really.","count":0},{"param1":"No. Budget decides.","count":0}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_20', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '3457'),
(21, 'Do you feel that Islam is an enemy of America??', '{"answers":[{"param1":"Yes. Sharia law is real","count":0},{"param1":"No. The decent are being punished with the fanatics.","count":0},{"param1":"Our foreign policy has made them that way.","count":0},{"param1":"I haven&#39;t made up my mind.","count":0}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_21', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '88'),
(22, 'Do you believe that NASA went to the moon?', '{"answers":[{"param1":"Yes. Why would I doubt that?","count":8356},{"param1":"No. Everyone knows it was faked.","count":23168},{"param1":"I don&#39;t really know.","count":7352}]}', 'Conspiracy', '{"type":"radio","qnty":1}', 'pollCommQues_22', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '38876'),
(23, 'Do you believe that the world is round or flat?', '{"answers":[{"param1":"Round! Tighten up.","count":525},{"param1":"Flat. I can&#39;t believe I thought it was round.","count":47},{"param1":"Haven&#39;t decided yet.","count":842}]}', 'Conspiracy', '{"type":"radio","qnty":1}', 'pollCommQues_23', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1415'),
(24, 'Is Ben Carson too mellow to be president?', '{"answers":[{"param1":"Yes. Americas leader needs to display more assertiveness in his manner.","count":0},{"param1":"No. How loud you are has little to do with how effective you are","count":0},{"param1":"I haven&#39;t decided yet.","count":0}]}', 'Political', '{"type":"radio","qnty":1}', 'pollCommQues_24', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '513'),
(25, 'Do you believe that evolution should be taught in school?', '{"answers":[{"param1":"Yes. We should teach evolution in schools.","count":0},{"param1":"No. It is not real science.","count":2},{"param1":"I haven&#39;t made up my mind on the subject.","count":0},{"param1":"Doesn&#39;t really matter.","count":0}]}', 'Religion', '{"type":"radio","qnty":1}', 'pollCommQues_25', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(26, 'Do you feel that the past presidents have been more concerned with foreign nations than their own?', '{"answers":[{"param1":"Yes. Our president should represent America&#39;s interest","count":127},{"param1":"No. They&#39;ve done a pretty good job of representing America.","count":647},{"param1":"They can do a better job.","count":99}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_26', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(27, 'How would you rate the job that John Boehner did as speaker of the house?', '{"answers":[{"param1":"Very good. He performed his duties admirably","count":0},{"param1":"No. He slowed down our nation.","count":1},{"param1":"He won&#39;t be remembered.","count":0},{"param1":"I don&#39;t know John Boehner.","count":0}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_27', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(28, 'Global warming?', '{"answers":[{"param1":"It&#39;s a very real issue that deserves our attention.","count":0},{"param1":"Global warming is a bad joke.","count":0},{"param1":"I don&#39;t know enough about it.","count":0}]}', 'Conspiracy', '{"type":"radio","qnty":1}', 'pollCommQues_28', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(29, 'What % of our economic problems are caused by the federal reserve?', '{"answers":[{"param1":"All of them. The Feds are bad news for America","count":14},{"param1":"None. America needs this institution to protect our dollar financial guidance.","count":25},{"param1":"I don&#39;t know.","count":13}]}', 'Conspiracy', '{"type":"radio","qnty":1}', 'pollCommQues_29', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(30, 'Who is the top rapper today?', '{"answers":[{"param1":"Rick Ross","count":188},{"param1":"Drake","count":229},{"param1":"Lil Wayne","count":241},{"param1":"Future.","count":116},{"param1":"Jay Z","count":142},{"param1":"Wale.","count":93}]}', 'Entertainment', '{"type":"radio","qnty":1}', 'pollCommQues_30', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(31, 'Does it matter when a president lies?', '{"answers":[{"param1":"No. Some lies have to be told to rule a nation.","count":0},{"param1":"Yes.Once trust is lost support will follow.","count":3},{"param1":"I don&#39;t like it but I unnderstand it.","count":0}]}', 'Political', '{"type":"radio","qnty":1}', 'pollCommQues_31', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(32, 'How long should a woman wait until they have sex with a new partner?', '{"answers":[{"param1":"2 weeks, you know the rules.","count":0},{"param1":"As soon as she feels ready.","count":0},{"param1":"At least a month.","count":0},{"param1":"Depends on the situation.","count":0},{"param1":"When she marries him.","count":0}]}', 'Relationship', '{"type":"radio","qnty":1}', 'pollCommQues_32', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(33, 'How long should a man wait until they have sex with a new partner?', '{"answers":[{"param1":"2 weeks, you know the rules.","count":0},{"param1":"Immediately if possible.","count":0},{"param1":"At least a month.","count":1},{"param1":"Depends on the situation.","count":0},{"param1":"When he marries her.","count":0}]}', 'Relationship', '{"type":"radio","qnty":1}', 'pollCommQues_33', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(34, 'Would you be agreeable to having an open relationship with your partner and another person?', '{"answers":[{"param1":"Absolutely, as long as my partner and I have trust.","count":0},{"param1":"Hell no. Nothing good comes from an open relationship.","count":1},{"param1":"If its another person for me.","count":1},{"param1":"Maybe.","count":1}]}', 'Relationship', '{"type":"radio","qnty":1}', 'pollCommQues_34', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-11 18:43:00', '23'),
(35, 'Do you believe in marriage?', '{"answers":[{"param1":"Yes","count":12},{"param1":"No.","count":53},{"param1":"Maybe with the right person.","count":23}]}', 'Relationship', '{"type":"radio","qnty":1}', 'pollCommQues_35', 'uname250', '250', 'Agape', '2017-09-08 00:00:00', '2017-09-12 08:47:00', '888'),
(36, 'Does seeing opposite sex members of your race dating members of another race bother you at all?', '{"answers":[{"param1":"Nope. Date who you want.","count":0},{"param1":"Sure it does. Stick to your own.","count":0},{"param1":"A little. But I don&#39;t lose sleep over it though.","count":0},{"param1":"My race is so scrambled up that I can&#39;t tell anyway.","count":1},{"param1":"Not unless its someone that I like.","count":0}]}', 'Relationship', '{"type":"radio","qnty":1}', 'pollCommQues_36', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '444'),
(37, 'Who was the greatest president in American history?', '{"answers":[{"param1":"Abraham Lincoln","count":0},{"param1":"George Washington","count":0},{"param1":"Barack Obama","count":1},{"param1":"John F. Kennedy","count":0},{"param1":"Ronald Reagan","count":1},{"param1":"Andrew Jackson","count":0},{"param1":"Some one else","count":0}]}', 'Pollitics', '{"type":"radio","qnty":1}', 'pollCommQues_37', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(38, 'Are you familiar with the term "MGTOW"?', '{"answers":[{"param1":"Yes, I am aware of and I support MGTOW.","count":0},{"param1":"No. What is this MGTOW you speak of?","count":3},{"param1":"Sure, they are a bunch of angry men.","count":0},{"param1":"I heard of it, I just don&#39;t care about it.","count":0}]}', 'Relationship', '{"type":"radio","qnty":1}', 'pollCommQues_38', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '4'),
(39, 'How do you feel about marrying someone who has children?', '{"answers":[{"param1":"No problem. I got kids.","count":1},{"param1":"I want someone with no kids.","count":0},{"param1":" It doesn&#39;t matter as long as we love each other.","count":0},{"param1":"Depends on the situation.","count":0},{"param1":"I will take only 1.","count":0}]}', 'Relationship', '{"type":"radio","qnty":1}', 'pollCommQues_39', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(40, 'Have you ever cheated on a spouse?', '{"answers":[{"param1":"No. I don&#39;t cheat.","count":0},{"param1":"Yes I have.","count":10},{"param1":"My marriage is open, so it aint cheatin","count":0},{"param1":"I wouldn&#39;t call it cheating, but maybe improper behavior.","count":0}]}', 'Relationship', '{"type":"radio","qnty":1}', 'pollCommQues_40', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '76'),
(41, 'Who was the worst president in the history of America?', '{"answers":[{"param1":"George Bush.","count":0},{"param1":"Barrack Obama.","count":0},{"param1":"Richard Nixon.","count":0},{"param1":"Lyndon Johnson.","count":0},{"param1":"Woodrow Wilson.","count":0},{"param1":"Someone else.","count":0}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_41', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '2112'),
(42, 'What is your favorite holiday?', '{"answers":[{"param1":"Christmas.","count":0},{"param1":"Valentines Day.","count":0},{"param1":"Thanksgiving.","count":0},{"param1":Halloween.","count":0},{"param1":"Other.","count":0}]}', 'Other', '{"type":"radio","qnty":1}', 'pollCommQues_42', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(43, 'Is Lebron James the greatest basketball player ever?', '{"answers":[{"param1":"Yes. There has never been anyone like him.","count":0},{"param1":"No. He is good, but  not the greatest.","count":0},{"param1":"He&#39;s not even top 10.","count":1}]}', 'Sports', '{"type":"radio","qnty":1}', 'pollCommQues_43', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(44, 'Did President Obama pay enough attention to global warming?', '{"answers":[{"param1":"Yes.","count":525},{"param1":"No. president Obama should have done more.","count":0},{"param1":"I&#39;m indifferent to global warming.","count":0}]}', 'Political', '{"type":"radio","qnty":1}', 'pollCommQues_44', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '1'),
(45, 'Should the definition of marriage be changed so that the LGBT community can embrace it?', '{"answers":[{"param1":"Yes. Gays should be entitled to the same institutions as heterosexuals.","count":0},{"param1":"No. Marriage should remain a union between man and woman.","count":3},{"param1":"I am uncertain about the issue.","count":0}]}', 'Other', '{"type":"radio","qnty":1}', 'pollCommQues_45', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '34'),
(46, 'Does Donald Trump have the temperament to successfully run America?', '{"answers":[{"param1":"Yes","count":12},{"param1":"No","count":7},{"param1":"I&#39;m not sure","count":9},{"param1":"He deserves a chance","count":10}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_46', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '116'),
(47, 'Should the democratic party stand in opposition to Trump&#43;s objectives as a matter of policy?', '{"answers":[{"param1":"Absolutely. The republicans gave out 8 years of resistance","count":12},{"param1":"No. Bipartisan politics are the problem in this country","count":7},{"param1":"I&#39;m not sure.","count":9}]}', 'Politics', '{"type":"radio","qnty":1}', 'pollCommQues_47', 'uname100', '100', 'Agape', '2017-09-08 00:00:00', '2017-09-10 14:09:00', '116');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_pollquestions`
--
ALTER TABLE `agape_pollquestions`
  ADD PRIMARY KEY (`question_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_pollquestions`
--
ALTER TABLE `agape_pollquestions`
  MODIFY `question_ID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
