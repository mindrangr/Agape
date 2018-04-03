-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2016 at 05:18 PM
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
-- Table structure for table `presidential_candidates`
--

CREATE TABLE IF NOT EXISTS `presidential_candidates` (
  `president_ID` int(11) NOT NULL,
  `president_Firstname` varchar(25) NOT NULL,
  `president_Lastname` varchar(25) NOT NULL,
  `president_Fullname` varchar(25) NOT NULL,
  `president_Party` varchar(25) NOT NULL,
  `president_BirthCity` varchar(40) NOT NULL,
  `president_BirthState` varchar(25) NOT NULL,
  `president_CurrentPosition` varchar(25) NOT NULL,
  `president_workingCity` varchar(15) NOT NULL,
  `president_workingState` varchar(10) NOT NULL,
  `president_upVotes` int(15) NOT NULL,
  `president_downVotes` int(15) NOT NULL,
  `president_website` varchar(120) NOT NULL,
  `president_issue_list` text NOT NULL,
  `president_Comments` text NOT NULL,
  `president_photos` text NOT NULL,
  `president_LastPosition` varchar(125) NOT NULL,
  `agape_twitter` varchar(400) NOT NULL,
  `president_facebook` varchar(400) NOT NULL,
  `president_Candidacy_Active` varchar(10) NOT NULL,
  `presidentialCandidate_discussPage` varchar(10) NOT NULL DEFAULT 'None',
  `president_Candidate_video` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presidential_candidates`
--

INSERT INTO `presidential_candidates` (`president_ID`, `president_Firstname`, `president_Lastname`, `president_Fullname`, `president_Party`, `president_BirthCity`, `president_BirthState`, `president_CurrentPosition`, `president_workingCity`, `president_workingState`, `president_upVotes`, `president_downVotes`, `president_website`, `president_issue_list`, `president_Comments`, `president_photos`, `president_LastPosition`, `agape_twitter`, `president_facebook`, `president_Candidacy_Active`, `presidentialCandidate_discussPage`, `president_Candidate_video`) VALUES
(1, 'Jeb', 'Bush', 'Jeb Bush', 'Republican', 'Midland', 'TX', 'Candidate', 'Tallahassee', 'Florida', 301, 83, 'https://jeb2016.com/?lang=en', '{"issues":[{"Racism":"yep"}]}', '"My aspiration for the country and I believe we can achieve it, is 4 percent growth as far as the eye can see," Bush said. "Which means we have to be a lot more productive, workforce participation has to rise from its all-time modern lows. It means that people need to work longer hours."', '{"images":[{"defaultImage":"images/president/Jeb.jpg"},{"defaultImage":"images/president/Jeb_Bush.jpg"}],"ImageIndex":"0"}', 'Governor of Florida from 1999 to 2007', 'https://twitter.com/JebBush?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/jebbush', 'InActive', '', ''),
(2, 'Hillary', 'Clinton', 'Hillary Clinton', 'Democratic', 'Chicago', 'Illinois', 'Secretary of State', 'Washingon', 'Wash. DC', 363, 12, 'https://www.hillaryclinton.com/', '{"issues":[{"Racism":"yep"}]}', 'Where da white wimin at?', '{"images":[{"defaultImage":"images/president/hillary.jpg"},{"defaultImage":"images/president/hillary1.jpg"}],"ImageIndex":"0"}', 'Secretary of State', 'https://twitter.com/HillaryClinton?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/hillaryclinton/', 'Active', '', '{"VidObj":{"videos":[{"url":"https://www.youtube.com/embed/7JLUIbaxa-8","title":"Hillary Clinton accepts Democratic nomination","param":"none","description":"Hillary Clinton accepts Democratic nomination","id":"h3gj3dhd34gghrr","quesSource":"139_vid0","commentCount":9,"thumbsUp":40,"thumbsDown":"35","lastComment":"2016-08-12 08:19:00","lastCommentor":"uname1411"},{"url":"https://www.youtube.com/embed/y04TVy0FxHg","title":"Hillary Clinton FULL Speech On National Security. Trump &#39;temperamentally unfit&#39; for White House","param":"none","description":"Hillary calls Donald Trump too immature to be president","id":"h3gj3g5k33566rr","quesSource":"0","commentCount":5,"thumbsUp":"11","thumbsDown":"35","lastComment":"2016-08-11 09:09:00","lastCommentor":"uname90"},{"url":"https://www.youtube.com/embed/8Ok80PNqxDc","title":"Hillary Clinton being interviewed over emails.","param":"none","description":"Hillary gives statement regarding emails","id":"h3gj3g5orhdbe5","quesSource":"141_vid0","commentCount":7,"thumbsUp":12,"thumbsDown":"35","lastComment":"2016-08-17 22:08:00","lastCommentor":"uname894"}],"count":"3"}}'),
(3, 'Donald', 'Trump', 'Donald Trump', 'Republican', 'Queens', 'New York', 'Realtor', 'Manhattan', 'New York', 14269, 127, 'http://www.trump.com/', '{"issues":[{"Economy":"yep"}]}', 'Al-Shabbab, not ISIS, just made a video on me - they all will as front-runner & if I speak out against them, which I must. Hillary lied!', '{"images":[{"defaultImage":"images/president/donald.jpg"},{"defaultImage":"images/president/donald1.jpg"}],"ImageIndex":"0"}', '', 'https://twitter.com/realDonaldTrump?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/DonaldTrump/', 'Active', '', '{"VidObj":{"videos":[{"url":"https://www.youtube.com/embed/hbajcGoRcjk","title":"Donald Trump accepts GOP nomination","param":"none","description":"Donald Trump accepts GOP nomination","id":"h3gj3ghhd42r","quesSource":"138_vid0","commentCount":8,"thumbsUp":9,"thumbsDown":1,"lastComment":"2016-08-12 08:15:00","lastCommentor":"uname1411"},{"url":"https://www.youtube.com/embed/1Qig45wNpkA","title":"Trump responds to father of slain soldier","param":"none","description":"Trump responds to attacks from Khan family","id":"h3gj3g5k33566rr","quesSource":"140_vid0","commentCount":5,"thumbsUp":7,"thumbsDown":"2","lastComment":"2016-08-12 08:21:00","lastCommentor":"uname1411"},{"url":"https://www.youtube.com/embed/itKWeG-8b5I","title":"Donald Trump says Americanism, not globalism will make us great","param":"none","description":"America first. We  have to make America rich again.","id":"h3gj3g5kjkkiw2","quesSource":"125_vid0","commentCount":37,"thumbsUp":12,"thumbsDown":"35","lastComment":"2016-08-10 09:47:00","lastCommentor":"uname862"}],"count":"3"}}'),
(4, 'Ben', 'Carson', 'Ben Carson', 'Republican', 'Detroit', 'Michigan', 'Retired neurosurgeon', 'Detroit', 'Michigan', 11134, 158, 'https://www.bencarson.com/', '', '', '{"images":[{"defaultImage":"images/president/Ben.jpg"},{"defaultImage":"images/president/Ben1.jpg"}],"ImageIndex":"0"}', '', 'https://twitter.com/RealBenCarson?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/DrBenCarsonforPresident/', 'InActive', '', '{"VidObj":{"videos":[{"url":"https://www.youtube.com/embed/6kotg9Bjcmk","title":"Dr Ben Carson - Republican presidential candidate.","param":"none","description":"Dr. Ben Carson addresses the Republican National Convention","id":"pldh4gh3qew2gh7","quesSource":"0","commentCount":0,"thumbsUp":0,"thumbsDown":0,"lastComment":"2016-06-20 03:19:00","lastCommentor":"Ben Carson"}],"count":"0"}}'),
(5, 'Bernie', 'Sanders', 'Bernie Sanders', 'Democratic', 'Brooklyn', 'New York', 'Senator of Vermont', 'Montpelier', 'Vermont', 5526, 85, 'https://go.berniesanders.com/page/content/splash', '', '', '{"images":[{"defaultImage":"images/president/bernie.jpg"},{"defaultImage":"images/president/bernie1.jpg"}],"ImageIndex":"0"}', '', 'https://twitter.com/berniesanders?lang=en', 'https://www.facebook.com/berniesanders/', 'InActive', '', '{"VidObj":{"videos":[{"url":"https://www.youtube.com/embed/77hkDuxM50o","title":"Senator Sanders endorses Hillary.","param":"none","description":"Bernie Sanders: Electing Donald Trump Would Be A ‘Disaster’ | TODAY","id":"pldh4gh3qew2gh7","quesSource":"0","commentCount":0,"thumbsUp":0,"thumbsDown":0,"lastComment":"2016-04-16 10:07:00","lastCommentor":"Bernie Sanders"}],"count":"0"}}'),
(6, 'Carly', 'Fiorina', 'Carly Fiorina', 'Republican', 'Austin', 'Texas', 'Executive', 'Sacramento', 'California', 4645, 20, 'https://carlyforpresident.com/', '', '', '{"images":[{"defaultImage":"images/president/carly.jpg"},{"defaultImage":"images/president/carly1.jpg"}],"ImageIndex":"0"}', '', 'https://twitter.com/CarlyFiorina?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/CarlyFiorina/', 'InActive', '', ''),
(7, 'Rand', 'Paul', 'Rand Paul', 'Republican', 'Pittsburgh', 'Pennsylvania', 'Politician', 'Lexington', 'Kentucky', 94781, 848, 'https://www.randpaul.com/', '', '', '{"images":[{"defaultImage":"images/president/rand.jpg"},{"defaultImage":"images/president/rand1.jpg"}],"ImageIndex":"0"}', 'Physician', 'https://twitter.com/RandPaul?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/RandPaul', 'InActive', '', '{"VidObj":{"videos":[{"url":"https://www.youtube.com/embed/lXg27xXUAec","title":"Rand Paul on Trump","param":"none","description":"Rand Paul: All The GOP Candidates Got Trump-ed | Morning Joe | MSNBC","id":"u3gj3qew2gh7","quesSource":"0","commentCount":0,"thumbsUp":22,"thumbsDown":1,"lastComment":"2016-04-16 08:19:00","lastCommentor":"Rand Paul"}],"count":"0"}}'),
(8, 'Martin', 'O''Malley', 'Martin O&#39,malley', 'Democratic', 'Wash D.C.', 'Wash D.C.', 'Governor of Maryland', 'Baltimore', 'Maryland', 523, 57, 'https://martinomalley.com/', '', '', '{"images":[{"defaultImage":"images/president/Martin.jpg"},{"defaultImage":"images/president/Martin.jpg"}],"ImageIndex":"0"}', 'Governor of Maryland', 'https://twitter.com/martinomalley?lang=en', 'https://www.facebook.com/omalleyforpresident2016/', 'InActive', '', ''),
(9, 'Marco', 'Rubio', 'Marco Rubio', 'Republican', 'Miami', 'Florida', 'Senator of Florida', 'Miami', 'Florida', 45634, 566, 'https://marcorubio.com/donate/', '', '"We can’t background-check them. You can’t pick up the phone and call Syria, and that’s one of the reasons why I’ve said we won’t be able to take more refugees. It’s not that we don’t want to, it’s that we can''t."', '{"images":[{"defaultImage":"images/president/rubio.jpg"},{"defaultImage":"images/president/rubio.jpg"}],"ImageIndex":"0"}', '', 'https://twitter.com/marcorubio?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/Marco-Rubio-for-President-368755019883064/', 'InActive', '', ''),
(10, 'Rick', 'Santorum', 'Rick Santorum', 'Republican', 'Winchester', 'Virginia', 'Attorney', '', '', 8325, 532, 'http://www.ricksantorum.com/', '', '“I believe that responsible people carrying weapons actually reduces crime in America and saves people’s lives.”', '{"images":[{"defaultImage":"images/president/RickSantorum.jpg"},{"defaultImage":"images/president/RickSantorum.jpg"}],"ImageIndex":"0"}', 'Attorney', 'https://twitter.com/RickSantorum?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/karengarversantorum/', 'InActive', '', ''),
(11, 'Chris', 'Christie', 'Chris Christie', 'Republican', 'Newark', 'New Jersey', 'Governor of New Jersey', 'Trenton', 'New Jersey', 3385, 243, 'http://www.chrischristie.com', '', '', '{"images":[{"defaultImage":"images/president/Chris2.jpg"},{"defaultImage":"images/president/Chris2.jpg"}],"ImageIndex":"0"}', '', 'https://twitter.com/chrischristie', 'https://www.facebook.com/Chris-Christie-for-President-117310468307038/', 'InActive', '', ''),
(12, 'John', 'Kasich', 'John Kasich', 'Republican', 'McKees Rocks', 'Pennsylvania', 'Governor of Ohio', '', 'Ohio', 87433, 5431, 'https://johnkasich.com/', '', '', '{"images":[{"defaultImage":"images/president/kasich.jpg"},{"defaultImage":"images/president/kasich.jpg"}],"ImageIndex":"0"}', 'Politician', 'https://twitter.com/JohnKasich?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/JohnKasich/', 'InActive', '', ''),
(13, 'Mike', 'Huckabee', 'Mike Huckabee', 'Republican', 'Hope', 'Arizona', 'Politician', 'Little Rock', 'Arkansas', 34563, 4563, 'http://www.explorehuckabee.com/', '', '', '{"images":[{"defaultImage":"images/president/MikeHuckabee.jpg"},{"defaultImage":"images/president/MikeHuckabee.jpg"}],"ImageIndex":"0"}', 'Governor of Arkansas', 'https://twitter.com/mikehuckabeegop', 'https://www.facebook.com/mikehuckabee', 'InActive', '', '{"VidObj":{"videos":[{"url":"https://www.youtube.com/embed/YE60Ku6Lteg","title":"Mike Huckabee: Donald Trump unlike anything Hillary or her husband has ever faced. Advanbtage Trump.","param":"none","description":"Mike Huckabee: Donald Trump Is Hillary Clinton&#39;s &quot;Worst Nightmare&quot; - The Kelly File","id":"pldh4gh3qew2gh7","quesSource":"0","commentCount":0,"thumbsUp":0,"thumbsDown":0,"lastComment":"2016-04-28 17:43:18","lastCommentor":"Ben Carson"}],"count":"0"}}'),
(14, 'Ted', 'Cruz', 'Ted Cruz', 'Republican', 'Calgary', 'Canada', 'Senator of Texas', 'Lexington', 'Texas', 14143, 5632, 'https://www.cruz.senate.gov/', '', '', '{"images":[{"defaultImage":"images/president/Ted.jpg"},{"defaultImage":"images/president/Ted2.jpg"}],"ImageIndex":"0"}', 'Senator of Texas', 'https://twitter.com/tedcruz?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/tedcruzpage/', 'InActive', '', '{"VidObj":{"videos":[{"url":"https://www.youtube.com/embed/3PUSRF9LB50","title":"Ted Cruz doesn&#39;t endorse Trump. Fans boo.","param":"none","description":"Ted Cruz will not support Donald Trump.","id":"h3g335dwtu","quesSource":"0","commentCount":"2","thumbsUp":"11","thumbsDown":"35","lastComment":"2016-08-09 8:25:11","lastCommentor":"uname250"},{"url":"https://www.youtube.com/embed/EkCifM0kDd0","title":"Argues with Trump supporters.","param":"none","description":"Ted Cruz confronts Trump supporters.","id":"hhgdhd457jhu","quesSource":"0","commentCount":"0","thumbsUp":"3","thumbsDown":"0","lastComment":"2016-03-09 8:25:11","lastCommentor":"uname250"}],"count":"1"}}'),
(15, 'Gary', 'Johnson', 'Gary Johnson', 'Libertarian', 'Minot', 'North Dakota', 'Governor New Mexico', 'Lexington', 'New Mexico', 542, 22, 'https://garyjohnson2016.com/', '', '', '{"images":[{"defaultImage":"images/president/garyJohnson1.jpg"},{"defaultImage":"images/president/garyJohnson2.jpg"}],"ImageIndex":"0"}', 'Governor New Mexico', 'https://twitter.com/GovGaryJohnson?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.facebook.com/govgaryjohnson/', 'Active', '497', '{"VidObj":{"videos":[{"url":"https://www.youtube.com/embed/CR4iAOqCnpI","title":"Gary Johnson:You should vote Libetarian","param":"none","description":"Libetarian: The best of both worlds.","id":"h3geew7639kku","quesSource":"133_vid0","commentCount":3,"thumbsUp":15,"thumbsDown":41,"lastComment":"2016-08-11 20:19:00","lastCommentor":"uname90"}],"count":"1"}}'),
(16, 'Monica', 'Moorehead', 'Monica Moorehead', 'Workers World', 'Tuscaloosa', 'Alabama', 'Political Activist', 'New York', 'New York', 0, 0, 'http://www.workers.org/wwp/', '', '"Our campaign is anti-capitalist. It’s anti-imperialist. It’s anti-racist. We stand with the people. We’re for the self-determination of oppressed people. We’re for the liberation of women and LGBTQ people. In other words, we’re for full equality for all people."', '{"images":[{"defaultImage":"images/president/MonicaMoorehead.jpg"},{"defaultImage":"images/president/MonicaMoorehead1.jpg"}],"ImageIndex":"0"}', 'Teacher', 'https://twitter.com/wwp2016', 'https://www.facebook.com/mooreheadlilly2016/', 'Active', '', '{"VidObj":{"videos":[{"url":"https://www.youtube.com/embed/d29xlL5ENgM","title":"Presidential candidate Monica Moorehead.","param":"none","description":"Presidential candidate Monica Moorehead.","id":"wweetf563sdgku","quesSource":"134_vid0","commentCount":1,"thumbsUp":536,"thumbsDown":"6","lastComment":"2016-08-12 07:47:00","lastCommentor":"uname1411"}],"count":"1"}}'),
(17, 'Scott', 'Copeland', 'Scott Copeland', 'Constitution', 'Jackson', 'Mississippi', 'Pastor', 'Texas', 'Texas', 0, 0, 'http://www.scottcopelandusa.com/', '', '"…Americans today want to see our constitutional republic restored. They like to gripe, they like to complain. But the bottom line is: do you really want to be free?"', '{"images":[{"defaultImage":"images/president/ScottCopeland.jpg"},{"defaultImage":"images/president/ScottCopeland1.jpg"}],"ImageIndex":"0"}', 'Pastor', 'https://twitter.com/scottusa2016', 'https://www.facebook.com/search/str/Scott%2BCopeland/keywords_top', 'Active', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `presidential_candidates`
--
ALTER TABLE `presidential_candidates`
  ADD PRIMARY KEY (`president_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `presidential_candidates`
--
ALTER TABLE `presidential_candidates`
  MODIFY `president_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
