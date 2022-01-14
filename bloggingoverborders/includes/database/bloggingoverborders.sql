--
-- Create Database: `bloggingoverborders`
--

CREATE DATABASE IF NOT EXISTS `bloggingoverborders` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;

/* Add an administrative user to bloggingoverborders with select, insert, update and delete privileges

User name: justin
host: localhost
password: Password1234
Global privileges: select, insert, update, delete */

----------------------------------------------------------

USE `bloggingoverborders`;

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` tinyint(4) NOT NULL,
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`, `email`, `last_login`) VALUES
(1, 'justin', 'Password1234', 'justin.harker@student.curtin.edu.au', '2015-04-30 01:42:47'),
(2, 'michael', 'Password1234', 'michael.borck@curtin.edu.au', '2015-04-30 01:42:47'),
(3, 'derek', 'Password1234', 'derek.lichtensteiger@student.curtin.edu.au', '2015-04-30 01:42:47');

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);


--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


--
-- Database: `bloggingoverborders`
--
USE `bloggingoverborders`;

--
-- drop table `feature_article if exists`
--

DROP TABLE IF EXISTS `feature_article`;

--
-- Table structure for table `feature_article`
--

CREATE TABLE `feature_article` (
  `featureID` int(100) NOT NULL,
  `featureTitle` varchar(255) NOT NULL,
  `authorName` varchar(255) NOT NULL,
  `publishDate` date NOT NULL,
  `blockQuote` TEXT NOT NULL,
  `featureText` TEXT NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET = latin1;


--
-- Dumping data for table `feature_article`
--

INSERT INTO `feature_article` (`featureID`, `featureTitle`, `blockQuote`, `authorName`, `publishDate`, `featureText`)
VALUES
(1, '<h2>Trekking in Sapa, Vietnam</h2>', '<blockquote><p>"If you happen to take the overnight train to Sapa, ensure you have transportation to Sapa as you arrive at Lao Cai in the early hours of the morning".</p></blockquote>', '<p><cite>by Derek Lichtenstieger</cite><p>', '<date>2018-05-25</date>',  '<p><span>Our trip began</span> by taking an overnight train with Chapa Express, departing at 10PM from Hanoi train station. I had heard a few horror stories about the overnight train with people having stuff stolen, the toilets being in a terrible state and the carriage rocking back and forth making it almost impossible to sleep. With that in mind, I had very low expectations of our journey and was not looking forward to it. On arrival however, we were greeted by a crew member and directed to our cabin, with fresh linen, snacks, water and a toothbrush provided.</p><img class="left-image" src="/bloggingoverborders/Content/Themes/Img/2017/Vietnam/halongbay2.jpg"  alt="picture of ferry on halong bay"/><p>We stayed in a 4-berth cabin, shared with two other friendly travellers. After a few beers, and putting on my ear plugs, I was knocked out for the night. Me and my partner were awoken by taps on our cabin door at dawn, notifying us that we were arriving shortly. Chapa Express conveniently provides a free shuttlebus to Sapa town, as the train stops about an hour away in Lao Cai. If you happen to take the overnight train to Sapa, ensure you have transportation to Sapa as you arrive in Lao Cai in the early hours of the morning.</p><img class="right-image" src="/bloggingoverborders/Content/Themes/Img/2017/Vietnam/sapa2.jpg" alt="picture of villagers"/><p>We arrived shortly after at the <a href="https://www.tripadvisor.com.au/Hotel_Review-g311304-d12903623-Reviews-Eden_Boutique_Hotel_Sapa-Sapa_Lao_Cai_Province.html" target="_blank">Eden Boutique Hotel Spa<a/>, enjoying a lovely breakfast of local and western food. As we arrived at 7AM, no rooms were available to check in, though we had organised a private trekking tour with Sapa Original Trek with Tinh.</p><p><span>Our tour guide took us to some of the main attractions in Sapa</span> - Love Waterfall, Silver Waterfall, Heaven\'s Gate and Sin Chai Village. The whole tour was very peaceful and scenic, with no tourists to be seen and many friendly locals along the way. After visiting the waterfalls, and driving to Heaven\'s Gate (the highest pass in Sapa), we were dropped off in a field where the tour guide provided us with a packed lunch, making us his rendition of a Bahn Mi. Here the tour guide shared a little about his background, family and hometown.</p><img class="left-image" src="/bloggingoverborders/Content/Themes/Img/2017/Vietnam/sapa1.jpg"  alt="picture of person walking"/><p><span>After lunch we trekked down through the valley</span> back to the town, Tinh provided us the option to take the easy route or the hard; and of course, we chose the hard route. He wasn\'t kidding, we walked through rice fields full of mud and down steep slopes to get back to the main town. If I was honest, I probably enjoyed it more. The tour concluded with a stroll through the ethnic minority village of Cin Chai Village, where we were able to meet the locals and see how they lived. There were plenty of farm animals running around and children playing with toys. We finished at the hotel where we were able to finally check in to a lovely modern room, take a long hot shower and have a solid nap.</p><p>The weather may not be as good tomorrow as it was today, so we will be planning our next day depending on the weather! Will keep you guys posted on our next adventure :) Tata for now!</p>');


--
-- Indexes for table `feature_article`
--
ALTER TABLE `feature_article`
  ADD PRIMARY KEY (`featureID`);

--
-- AUTO_INCREMENT for table `feature_article`
--
ALTER TABLE `feature_article`
  MODIFY `featureID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


--
-- Database: `bloggingoverborders`
--
USE `bloggingoverborders`;

--
-- drop table `photoAlbum' if exists
--

DROP TABLE IF EXISTS `photoAlbum`;

--
-- Table structure for table `photoAlbum`
--

CREATE TABLE `photoAlbum` (
  `photoAlbumID` int(100) NOT NULL,
  `photoAlbumTitle` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `imageDesc` text NOT NULL,
  `imageDate` date NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


--
-- Dumping data for table `photoAlbum`
--

INSERT INTO `photoAlbum` (`photoAlbumID`, `photoAlbumTitle`, `author`,`imagePath`, `imageDesc`, `imageDate`)
VALUES
('1', 'Trekking in Sapa, Vietnam', '<cite>photography by Derek Lichtenstieger<cite>', '<img src="./bloggingoverborders/Content/Themes/Img/2017/Vietnam/halongbay1.jpg" style="width:100%" alt="halongbay1">', '<p>picture of lady rowing.</p>','17th May, 2017'),
('2', 'Trekking in Sapa, Vietnam', '<cite>photography by Derek Lichtenstieger<cite>', '<img src="./bloggingoverborders/Content/Themes/Img/2017/Vietnam/halongbay2.jpg" style="width:100%"  alt="halongbay2">', '<p>picture of ferry in halong bay.</p>','17th May, 2017'),
('3', 'Trekking in Sapa, Vietnam', '<cite>photography by Derek Lichtenstieger<cite>', '<img src="./bloggingoverborders/Content/Themes/Img/2017/Vietnam/sapa1.jpg" style="width:100%" alt="sapa1">', '<p>picture of young woman trekking.</p>','17th May, 2017'),
('4', 'Trekking in Sapa, Vietnam', '<cite>photography by Derek Lichtenstieger<cite>', '<img src="./bloggingoverborders/Content/Themes/Img/2017/Vietnam/sapa2.jpg" style="width:100%" alt="sapa2">', '<p>picture of ethnic sapa family relaxing on a hill.</p>','17th May, 2017'),
('5', 'Trekking in Sapa, Vietnam', '<cite>photography by Derek Lichtenstieger<cite>', '<img src="./bloggingoverborders/Content/Themes/Img/2017/Vietnam/vietnam1.jpg" style="width:100%" alt="vietnam1">', '<p>picture of temple artwork spirals.</p>','17th May, 2017'),
('6', 'Trekking in Sapa, Vietnam', '<cite>photography by Derek Lichtenstieger<cite>', '<img src="./bloggingoverborders/Content/Themes/Img/2017/Vietnam/vietnam2.jpg" style="width:100%" alt="vietnam2">', '<p>picture of dogs relaxing.</p>','17th May, 2017'),
('7', 'Trekking in Sapa, Vietnam', '<cite>photography by Derek Lichtenstieger<cite>', '<img src="./bloggingoverborders/Content/Themes/Img/2017/Vietnam/vietnam3.jpg" style="width:100%" alt="vietnam3">', '<p>picture of old abandoned temple.</p>','17th May, 2017'),
('8', 'Trekking in Sapa, Vietnam', '<cite>photography by Derek Lichtenstieger<cite>', '<img src="./bloggingoverborders/Content/Themes/Img/2017/Vietnam/vietnam4.jpg" style="width:100%" alt="vietnam4">', '<p>picture of food vendor on a rowboat with seafood.</p>','17th May, 2017'),
('9', 'Trekking in Sapa, Vietnam', '<cite>photography by Derek Lichtenstieger<cite>', '<img src="./bloggingoverborders/Content/Themes/Img/2017/Vietnam/vietnam5.jpg" style="width:100%" alt="vietnam5">', '<p>picture of rice field valley.</p>', '17th May, 2017');


--
-- Indexes for table `photoAlbum`
--
ALTER TABLE `photoAlbum`
  ADD PRIMARY KEY (`photoAlbumID`);

--
-- AUTO_INCREMENT for table `photoAlbum`
--
ALTER TABLE `photoAlbum`
  MODIFY `photoAlbumID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;



USE `bloggingoverborders`;

-- --------------------------------------------------------

--
-- drop table `subscribers' if exists
--

DROP TABLE IF EXISTS `subscribers`;
--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `subscriberID` int(100) NOT NULL,
  `subscriberEmailAddress` varchar(80) NOT NULL DEFAULT '',
  `subscribeDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`subscriberID`, `subscriberEmailAddress`, `subscribeDateTime`) VALUES
(1, 'justin.harker@student.curtin.edu.au', '2018-05-25 01:42:47'),
(2, 'derek.lichtensteiger@student.curtin.edu.au', '2018-05-25 01:42:47'),
(3, 'michael.borck@curtin.edu.au', '2018-05-25 01:42:47');

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`subscriberID`);


--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `subscriberID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

