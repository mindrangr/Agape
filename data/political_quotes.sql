-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2016 at 10:09 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agape_politics`
--

-- --------------------------------------------------------

--
-- Table structure for table `political_quotes`
--

CREATE TABLE IF NOT EXISTS `political_quotes` (
  `president_commentsID` int(11) unsigned NOT NULL,
  `president_commentsCommentData` mediumtext NOT NULL,
  `president_commentsCommentDataResponse` varchar(100) NOT NULL,
  `president_commentsSource` varchar(25) NOT NULL,
  `president_commentsLastComment_username` varchar(40) NOT NULL,
  `president_commentsLastComment` datetime NOT NULL,
  `president_comment_createdate` datetime NOT NULL,
  `president_commentCreator_ID` varchar(10) NOT NULL,
  `president_commentCreator_Username` varchar(15) NOT NULL,
  `president_commentsMedia_type` varchar(50) NOT NULL,
  `president_commentsMedia_typeLink` varchar(400) NOT NULL,
  `president_comment_audience` varchar(150) NOT NULL,
  `president_commentsThumbsUp` varchar(15) NOT NULL DEFAULT '0',
  `president_commentsThumbsDown` varchar(15) NOT NULL DEFAULT '0',
  `president_commentsReplys` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `political_quotes`
--

INSERT INTO `political_quotes` (`president_commentsID`, `president_commentsCommentData`, `president_commentsCommentDataResponse`, `president_commentsSource`, `president_commentsLastComment_username`, `president_commentsLastComment`, `president_comment_createdate`, `president_commentCreator_ID`, `president_commentCreator_Username`, `president_commentsMedia_type`, `president_commentsMedia_typeLink`, `president_comment_audience`, `president_commentsThumbsUp`, `president_commentsThumbsDown`, `president_commentsReplys`) VALUES
(1, '"I try to learn from the past, but I plan for the future by focusing exclusively on the present. That''s were the fun is."', '279_quot0', '3', 'uname50', '2016-09-19 11:11:00', '2015-12-20 19:43:00', '250', 'uname250', '', '', '', '7', '1', '4'),
(4, 'I&#39;m not sure we need half a billion dollars in funding for women&#39;s health programs. If you took dollar for dollar, there are many extraordinarily fine organizations, community health organizations that exist, federally sponsored community health organizations to provide quality care for women on a wide variety of health issues. But abortion should not be funded by the government, any government in my mind.', '0', '1', 'Jeb Bush', '2015-12-20 21:46:00', '2015-12-20 21:46:00', '250', 'Jeb Bush', 'Politico Magazine', 'http://www.politico.com/story/2015/08/jeb-bush-womens-health-programs-government-support-121005#ixzz3nRRhmRGH', 'Conference of evangelicals in South Carolina', '2', '1', '0'),
(5, '"The Senate, what is it like a French work week? You get like three days where you have to show up?"', '299_quot0', '1', 'uname403', '2016-09-20 08:08:00', '2015-10-29 22:19:00', '250', 'Jeb Bush', 'CNBC', 'http://www.cnbc.com/2015/10/29/jeb-bushs-french-work-comments-nonsense-ambassador.html', 'CNBC debate', '2', '2', '1'),
(6, '&quot;As a public leader, one&#39;s faith should guide you. In the United States, many people think you need to keep your faith, put it in a security box, if you&#39;re an elected official &quot; put it in a safety deposit box until you finish your service as a public servant and then you can go get it back. I never felt that was appropriate.', '0', '1', 'Jeb Bush', '2009-08-29 22:27:00', '2009-08-29 22:27:00', '1250', 'Jeb Bush', 'Lecture', 'http://www.nytimes.com/2015/03/18/us/politics/jeb-bush-20-years-after-conversion-is-guided-by-his-catholic-faith.html?_r=1', 'Conference - THE FUTURE OF NATIONS: FEDERALISM OR DECENTRALISM?', '2', '2', '0'),
(7, '"They made it seem like I''m saying there are a bunch of Chinese boots on the ground, Well, everybody knows that Chinese have physical characteristics that would make them pretty easy to identify in a setting like that. Give me a break. But they just jump on. That kind of stuff is frustrating."', '0', '4', 'Ben Carson', '2015-12-28 22:29:00', '2015-12-28 22:29:00', '1250', 'Ben Carson', 'Interview', 'https://www.washingtonpost.com/politics/ben-carson-on-the-brink-a-process-like-this-is-pretty-brutal/2015/12/27/d0c5c1bc-a9e1-11e5-9b92-dea7cd4b1a4d_story.html', 'Washington Post', '3', '0', '0'),
(8, '"Part of being a winner is knowing when enough is enough. Sometimes you have to give up the fight and walk away, and move on to something that''s more productive."', '277_quot0', '3', 'uname50', '2016-09-19 11:09:00', '2015-12-14 00:00:00', '', 'Donald Trump', 'Quote', 'http://www.inc.com/larry-kim/21-brilliant-quotes-from-the-donald-trump.html', 'Inc. Com', '4', '2', '3'),
(9, '&quot;We have to have a wall. We have to have a border. And in that wall we&#39;re going to have a big fat door where people can come into the country, but they have to come in legally.&quot;', '278_quot0', '3', 'uname678', '2016-09-19 22:14:00', '2015-10-28 00:00:00', '', 'Donald Trump', 'CNBC', 'http://www.cnbc.com/2015/10/28/donald-trump-mexico-going-to-pay-for-wall.html', '', '4', '0', '0'),
(10, '"You know, if you think back to Abraham Lincoln, he was not a loud, bombastic person by any measure. Ungainly, lanky, uncouth, but very courageous and very strong. What I&#39;ve been emphasizing on the road lately is that strength is not defined by the decibels of which you say something or by the gesticulations associated with it, but by the accomplishments of one&#39;s life. What have you faced, and how have you faced those things?"', '0', '4', 'Ben Carson', '2015-12-28 00:00:00', '2015-12-28 00:00:00', '', 'Ben Carson', 'Interview', 'https://www.washingtonpost.com/politics/ben-carson-on-the-brink-a-process-like-this-is-pretty-brutal/2015/12/27/d0c5c1bc-a9e1-11e5-9b92-dea7cd4b1a4d_story.html', 'Washington Post', '3', '0', '0'),
(12, '&quot;And I guess at the end of the day, for me, you know, people talk about their extraordinary grandchildren, but I actually have one and we&#39;re going to do everything we can to give her opportunities.&quot;', '300_quot0', '2', 'uname403', '2016-09-20 08:10:00', '2016-01-17 00:00:00', '2', 'Hillary Clinton', 'Breitbart Magazine', 'http://www.breitbart.com/big-government/2016/01/16/hillary-clinton-attacks-bernie-sanders-adopted-grandchildren-i-actually-have-a-grandchild/', 'MSNBC', '5', '0', '5'),
(16, '"The U.S. has become a dumping ground for everybody else''s problems. Thank you. It''s true, and these are the best and the finest. When Mexico sends its people, they''re not sending their best. They''re not sending you. They''re not sending you. They''re sending people that have lots of problems, and they''re bringing those problems with us. They''re bringing drugs. They''re bringing crime"', '0', '3', 'Donald Trump', '2015-06-15 00:00:00', '2015-06-15 00:00:00', '3', 'Donald Trump', 'Interview', 'http://www.realclearpolitics.com/video/2015/06/16/trump_mexico_not_sending_us_their_best_criminals_drug_dealers_and_rapists_are_crossing_border.html', 'Real Clear Politics', '0', '0', '0'),
(17, '"Race relations problems are almost at an all-time worst," he said. "And President Obama -- I really thought he''d be a unifier. But I thought one thing he''d be is a unifier certainly between African-American and white, and I will tell you that''s turned out not to be so. He has not been a unifier. He''s been a divider."', '298_quot0', '3', 'uname678', '2016-09-20 08:02:00', '2015-08-15 00:00:00', '3', 'Donald Trump', 'Interview', 'http://www.cnn.com/2015/08/27/politics/donald-trump-african-american-polls/', 'CNN', '5', '1', '0'),
(19, '"America needs more new workers to help pay for retirees--"to rebuild the demographic pyramid" as he put it. "Immigrants are more fertile," Bush said. "And they love families and they have more intact families, and they bring a younger population. Immigrants create an engine of economic prosperity."', '0', '1', 'Jeb Bush', '2013-06-13 00:00:00', '2013-06-13 00:00:00', '1', 'Jeb Bush', 'Conference', 'http://www.ontheissues.org/Archive/2016_Hopefuls_Jeb_Bush.htm', 'Faith and Freedom Coalition Conference', '0', '0', '0'),
(20, '"Too often, these are called women&#39;s issues. Well, I am a proud lifelong fighter for women&#39;s issues, because I firmly believe what&#39;s good for women is good for America. </br>As far as I&#39;m concerned, any issue that affects women&#39;s lives and futures is a women&#39;s issue."', '0', '2', 'Hillary Clinton', '2016-08-21 10:35:00', '2015-09-05 00:00:00', '2', 'Hillary Clinton', 'Lecture', 'https://www.hillaryclinton.com/issues/womens-rights-and-opportunity/', 'https://www.hillaryclinton.com/', '0', '1', '1'),
(21, '&quot;Laws have to be backed up with resources and political will, she explained. And deep-seated cultural codes, religious beliefs and structural biases have to be changed. As I have said and as I believe, the advancement of the full participation of women and girls in every aspect of their societies is the great unfinished business of the 21st century and not just for women but for everyone â€” and not just in far away countries but right here in the United States.&quot;', '0', '2', 'Hillary Clinton', '2016-06-07 14:36:00', '2015-08-27 00:00:00', '2', 'Hillary Clinton', 'Lecture', 'http://www.theblaze.com/blog/2015/04/27/hillary-clinton-says-religious-beliefs-have-to-be-changed-on-abortion-heres-why-thats-ironic/', '6th annual Women in the World Summit', '0', '0', '10'),
(22, '"We must deal with reality and stop trying to fool the people, because these budgetary issues are a big problem for all of us and for our progeny. We need to relearn the meaning of the word &#39;sacrifice&#39; which is often necessary before true prosperity is realized."', '0', '4', 'Ben Carson', '2016-01-26 14:40:00', '2013-10-29 00:00:00', '4', 'Ben Carson', 'Interview', 'http://www.washingtontimes.com/news/2013/oct/29/carson-stop-feeding-the-beast/?page=2', 'Washington Post', '1', '0', '1'),
(23, ' "I think really the things you do in your house, we could just leave those in your house and they wouldn''t have to be part of the workplace,".<br/></br> "I think society is rapidly changing and if you are gay, there are plenty of places that will hire you."', '0', '7', 'Rand Paul', '2015-10-14 00:00:00', '2015-10-14 00:00:00', '7', 'Rand Paul', 'Lecture', 'http://www.huffingtonpost.com/entry/rand-paul-lgbt-workers_us_561ed745e4b028dd7ea691a5', 'Drake University', '0', '0', ''),
(24, '"I&#39;m proud to support Israel, America&#39;s longtime friend and ally in the Middle East. \n<br/><br/>\nIsraeli cafes and buses are bombed, towns are victimized by hundreds of rockets, and its citizens are attacked by Palestinian terrorists.\n<br/><br/>\nIt&#39;s time we took a stand for Israel by standing up to the enemies of Israel, the enemies that murder Israeli citizens."', '0', '7', 'Rand Paul', '2015-10-14 00:00:00', '2015-10-14 00:00:00', '7', 'Rand Paul', 'Interview', 'https://www.randpaul.com/issue/israel', 'Website', '0', '0', '0'),
(25, '"As a physician, one of the first things we learn is to &#39;Do no harm&#39;. Since Roe v. Wade decision, over 50 million children have been killed in abortion procedures. As President, I would strongly support legislation restricting federal courts from hearing cases like Roe v. Wade, in an effort to stop harming the lives of the unborn."', '0', '7', 'Rand Paul', '2016-01-26 00:00:00', '2016-01-26 00:00:00', '7', 'Rand Paul', 'Website', 'https://www.randpaul.com/issue/sanctity-of-life', 'Interview', '0', '0', '0'),
(26, '"We must pursue policies to transform this country into a nation that affirms the value of its people of color. That starts with addressing the five central types of violence waged against black, brown and indigenous Americans: physical, political, legal, economic and environmental."', '0', '5', 'Bernie Sanders', '2016-01-28 00:00:00', '2016-01-28 00:00:00', '5', 'Bernie Sanders', 'Website', 'https://berniesanders.com/issues/racial-justice/', 'Interview', '0', '0', '0'),
(27, '"The United States has made remarkable progress on gay rights in a relatively short amount of time. But there is still much work to be done.\n<br/><br/>\nIn many states, it is still legal to fire someone for being gay. It is legal to deny someone housing for being transgender. That is unacceptable and must change. We must end discrimination in all forms."', '0', '5', 'Bernie Sanders', '2016-08-18 09:13:00', '2016-01-28 00:00:00', '5', 'Bernie Sanders', 'Website', 'https://berniesanders.com/issues/fighting-for-lgbt-equality/', 'Interview', '0', '0', '2'),
(28, '"This is not a radical idea. Last year, Germany eliminated tuition because they believed that charging students $1,300 per year was discouraging Germans from going to college. Next year, Chile will do the same. Finland, Norway, Sweden and many other countries around the world also offer free college to all of their citizens. If other countries can take this action, so can the United States of America."', '0', '5', 'Bernie Sanders', '2016-01-28 00:00:00', '2016-01-28 00:00:00', '5', 'Bernie Sanders', 'Website', 'https://berniesanders.com/issues/its-time-to-make-college-tuition-free-and-debt-free/', 'Interview', '0', '0', '0'),
(29, '"First we have to remember what the engine of economic growth is in this nation? Small businesses, family-owned businesses, community-based businesses. Two-thirds of new jobs are created by small businesses. Half of Americans are employed by small businesses. We''re crushing them. We''re now destroying more than we''re creating. That''s why we have to roll back this regulatory burden and take a 75,000-page tax code and make it three pages, because guess what? When you have a big costly, complicated government, only the big, the powerful, wealthy and well connected can deal with it. It''s called crony capitalism. It''s why we must reduce the size of government."', '0', '6', 'Carly Fiorina', '2015-08-09 00:00:00', '2015-08-09 00:00:00', '6', 'Carly Fiorina', 'Interview', 'http://ontheissues.org/2016/Carly_Fiorina_Budget_+_Economy.htm', 'Fox News Sunday interviews', '0', '0', ''),
(30, '"We have loads of laws, and most of the time, criminals are breaking those laws and we are curtailing citizens'' lawful rights to carry guns," she said. "The assault weapons ban is extremely arbitrary about what qualifies as an assault weapon."', '0', '6', 'Carly Fiorina', '2010-09-02 00:00:00', '2010-09-02 00:00:00', '6', 'Carly Fiorina', 'Quote', 'http://articles.latimes.com/2010/sep/02/local/la-me-senate-20100902/2', 'Los Angeles Times', '0', '0', '0'),
(31, '"I was recruited to HP to save a company. It was a company that had grown into a bloated bureaucracy that cost too much and delivered too little to customers and shareholders. As an outsider, I tackled HP''s entrenched problems head-on, I cut the bureaucracy down to size, reintroduced accountability, focused on service, on innovation, on leading in every market and every product segment. It was a difficult time. However, we saved 80,000 jobs. We went on to grow to 160,000 jobs. I had to make tough calls in tough times. I think people are looking for that in Washington. I was fired over a disagreement in the boardroom. One of the things that people don''t understand is how accountable a CEO is. I had to report results every 90 days"', '0', '6', 'Carly Fiorina', '2016-02-09 10:40:00', '2015-10-29 00:00:00', '6', 'Carly Fiorina', 'Interview', 'http://www.cnbc.com/2015/10/29/cnbc-full-transcript-cnbcs-your-money-your-vote-the-republican-presidential-debate-part-2.html', 'CNBC', '0', '0', '1'),
(32, 'I am running for one reason and one reason only: And that is to rebuild the power of the truth of the American dream you and I share; that dream that was given to us by our parents, and grandparents. Not by their words, not by their hopes, but by the actions they took in their own lives to make our country better so that their children and grandchildren could have a better future. ', '0', '8', 'Martin O''malley', '2015-09-27 00:00:00', '2015-09-27 00:00:00', '8', 'Martin O''Malley', 'Interview', 'http://www.oskaloosa.com/news/local_news/presidental-candidate-o-malley-visits-oskaloosa/article_0f4562d7-d268-54d4-8e5c-abaec683aad1.html', 'Oskaloosa Herald Online', '0', '0', '0'),
(33, '&quot;I think the relationship between the United States and Israel is strong, will remain strong, and must be strong for our own security, but also, we have to continue to wage peace, and in this context, waging peace means pushing for a two-state solution.&quot;', '0', '8', 'Martin O''malley', '2015-03-26 00:00:00', '2015-03-26 00:00:00', '8', 'Martin O''Malley', 'Interview', 'http://www.huffingtonpost.com/2015/03/26/martin-omalley-israel-_n_6952086.html', 'Huffington Post', '0', '0', '0'),
(34, '&quot;If you hate the president so much you would rather support the ayatollah of Iran, you should probably not be in the United States Senate.&quot;', '0', '8', 'Martin O''malley', '2015-03-29 00:00:00', '2015-03-29 00:00:00', '8', 'Martin O''Malley', 'Interview', 'http://thehill.com/policy/international/237319-omalley-nuclear-iran-greatest-man-made-threat', 'ABC', '0', '0', '0'),
(35, '"Our nation&#39;s founding document and the supreme law of the land was crafted by our founding fathers to act as chains to bind the mischief of government and to protect the liberties endowed to us by our Creator.<br/><br/>\nUnfortunately, recent administrations have defied the Constitution and the rule of law, and as a result we are less free.<br/><br/>\nWe need to restore the Constitution as our standard. We need to protect the people by rolling back the federal government to the functions the Constitution sets out. We need to give power back to the states and the people so that we remain a land where liberty can flourish."', '301_quot0', '14', 'uname403', '2016-09-20 11:04:00', '2015-10-14 00:00:00', '14', 'Ted Cruz', 'Website', 'https://www.tedcruz.org/issues/restore-the-constitution/', 'Website', '0', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `political_quotes`
--
ALTER TABLE `political_quotes`
  ADD PRIMARY KEY (`president_commentsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `political_quotes`
--
ALTER TABLE `political_quotes`
  MODIFY `president_commentsID` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
