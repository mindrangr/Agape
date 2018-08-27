-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 06:19 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agape_sponsors`
--

INSERT INTO `agape_sponsors` (`agape_sponsors_ID`, `agape_sponsors_Image`, `agape_sponsors_URL`, `agape_sponsors_Company`, `agape_sponsors_ContactFirstName`, `agape_sponsors_ContactLastName`, `agape_sponsors_Company_Address`, `agape_sponsors_Message`, `agape_sponsors_Company_State`, `agape_sponsors_Company_City`, `agape_sponsors_Company_Number`, `agape_sponsors_CommercialAccount`) VALUES
(1, 'images/sponsors/sprint.png', 'http://www.sprint.com', 'Sprint', 'Mitchell', 'Gary', '', 'Sprint savings until 1/31/19; then $60/mo. for line 1, $40/mo. for line 2 & $30/mo. for lines 3-5 with AutoPay. Includes unlimited talk, text and data. Price compared to advertised unlimited rates for 4 lines. Carrier features differ. HD video streams up to 1080p, music up to 1.5 Mbps, gaming streams up to 8 Mbps. Data deprioritization during congestion. Other mo. and data charges apply.&#42;&#42; ', 'Glenwood', 'Illinois', '763-781-3378', ''),
(2, 'images/sponsors/ford.png', 'http://www.Ford.com', 'Ford Auto', 'Kelly', 'Chime', '', '', 'Fort Lauderdale', 'Florida', '305-932-8901', ''),
(3, 'images/sponsors/coca_cola.png', 'http://www.cocacola.com', 'Coca Cola', 'Linda', 'Wenton', '', '', 'New York', 'New York', '321-341-7982', '2'),
(4, 'images/sponsors/ATTGlobeATT.png', 'http://www.Att.com', 'AT&T', 'Carl', 'Jenkins', '', '<div class="content-wrapper  content-left  text-black-sm" tabindex="-1">											<h3 style="color:" class="eyebrow ">AT&amp;T WIRELESS CUSTOMERS</h3>																																																																	<h2 class="marquee-header    " style="color:">Get a $200 reward card by adding DIRECTV<br></h2>																																																																 							 															<div class="subhead  desktop-tablet-block  " style="color:"><p>w/ 24 mo. agmt. Redemption req''d. Ends 12/31/17.</p><p>Plus, save $15/mo. for life on DIRECTV when you have an eligible AT&amp;T Unlimited Plus wireless plan.</p></div>														<div class="subhead  mobile-inline " style="color:"><p>w/ 24 mo. agmt. Redemption req''d. Ends 12/31/17.</p><p>Plus, save $15/mo. for life on DIRECTV when you have an eligible AT&amp;T Unlimited Plus wireless plan.<br></p></div>																																																																							<div class="cta-wrapper">							<div class="price-info">								<p class="ps-small price-support"></p>								<p class="price"><sup>$</sup>20<span class="price-tail">/mo. + taxes for 12 mos. w/ an eligible AT&amp;T</span>								</p>							</div>						</div>																																																					<div class="cta-wrapper">							<div class="price-info">								<p class="ps-small price-support"></p>								<p class="price"><sup>$</sup><span class="price-tail">Unlimited Plus wireless plan (min. $90/mo.)</span>								</p>							</div>						</div>																																																																	<div class="text-legal marquee-font-arial">															<div>         	                        <p class="text-legal legal-complete" data-analytics-action="linkClick" data-analytics-code="Link_Click" data-analytics-info="{''page.location.url'':''/virtual/legaldisclaimer.html'',''page.pageInfo.friendlyPageName'':''UF Legal Disclaimer Modal Pg''}" data-desktop-short="/shopcms/sharedcontent/en/legal/Wireline/UpperFunnel/DTV_Unlimited_Private_Offer_MQ/_jcr_content/desktoplegal/legalsharedcontent_4.html" data-desktop-long="/shopcms/sharedcontent/en/legal/Wireline/UpperFunnel/DTV_Unlimited_Private_Offer_MQ/_jcr_content/desktoplegal/legalsharedcontent.modal.html" data-mobile-short="/shopcms/sharedcontent/en/legal/Wireline/UpperFunnel/DTV_Unlimited_Private_Offer_MQ/_jcr_content/desktoplegal/legalsharedcontent_4.html" data-mobile-long="/shopcms/sharedcontent/en/legal/Wireline/UpperFunnel/DTV_Unlimited_Private_Offer_MQ/_jcr_content/desktoplegal/legalsharedcontent.modal.html"><div class="legal">   w/ 24-mo. TV agmt, after $5/mo. discount for 12 mos. (autopay may be req’d). Pay $40/mo. + taxes until credits start. $61/mo. in months 13-24 (subj to change). <b>Early termination fee of $20/mo. for each month remaining on agmt., equipment non-return and add''l fees apply.</b> Price incl. SELECT TV Pkg., monthly service &amp; equip. fees for 1 HD DVR &amp; is after $15/mo. credit with eligible wireless plan (starts w/in 3 bills) and $5/mo. discount for 12 mos. $5/mo. discount is instant for online orders on att.com only. In other channels AutoPay is req’d and discount starts w/in 3 bills. New approved residential customers only (equipment lease req’d). Credit card req’d (except MA &amp; PA). Restr’s apply. <a href="#" class="att-modal-trigger legal-modal-trigger" data-cqpath="86548433125036839615765526640639732850;2017331" data-ajaxdata="/shopcms/sharedcontent/en/legal/Wireline/UpperFunnel/DTV_Unlimited_Private_Offer_MQ/_jcr_content/desktoplegal/legalsharedcontent.modal.html" data-ajax="true" data-legalmodal="true" data-target="legal-modal" data-ignore-analytics="true" tabindex="0"> See offer details</a>  </div></p>    </div>													</div>																																			<div class="cta-wrapper">														 		                           																			<a href="https://www.att.com/bundles" data-mobile-url="https://www.att.com/bundles" data-analytics-action="linkClick" data-analytics-code="Link_Click" data-analytics-info="{''events.contentId'':''31941537259900634969026257537431472356'',''events.slotFriendlyName'':''hp_marquee_gigapower-prospect'', ''events.contentFriendlyName'':''Private_Offer_EWLS'', ''events.contentProductGroup'':''ATT'',''events.linkName'':''Learn more'', ''events.linkPosition'':''Marquee'', ''events.linkDestinationUrl'':''https://www.att.com/bundles'',''events.customerType'':''Consumer''}" class="btn btn-primary-promo " role="button" tabindex="0" data-slot-position="1">Learn more											<span class="hidden-spoken"></span>									</a>	                                                                                                                                                        						</div>																																					</div>', 'Camden', 'Oklahoma', '569-132-4512', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agape_sponsors`
--
ALTER TABLE `agape_sponsors`
  ADD PRIMARY KEY (`agape_sponsors_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agape_sponsors`
--
ALTER TABLE `agape_sponsors`
  MODIFY `agape_sponsors_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
