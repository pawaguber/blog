-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2022 at 09:05 PM
-- Server version: 5.7.38-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posts`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'text'),
(2, 'IT'),
(3, 'CRYPTO'),
(4, 'WINDOWS');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `login`, `text`, `post_id`) VALUES
(73, 'User_13', 'Cool!!', 13),
(74, 'Ivan', 'WOw!!', 14),
(75, 'loposss1', 'Oh my GOD!', 15),
(76, 'Father_1985', 'Oh nooooo!', 16),
(77, 'Never die', 'Yes, i think too', 17),
(78, 'Mahomed', '\\Yes/ yes, yes', 18),
(79, 'Elon Musk', 'I think no, but yes', 19),
(80, 'Joe Biden', 'Yes!!!', 19),
(81, 'Joe Biden', 'Yes!!!', 20);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL,
  `date` datetime DEFAULT NULL,
  `category_id` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `name`, `text`, `img`, `date`, `category_id`, `views`, `likes`, `dislikes`) VALUES
(13, 'Google Chrome is getting a powerful screenshot tool on Windows and other platforms', 'Google Chrome is apparently getting a new and advanced screenshot tool inspired by Microsoft Edge. If you use Microsoft Edge, you may be aware of the incredibly handy ‘Web Capture’ tool, which lets you capture certain areas of the browser and copy the snap to the clipboard or edit it using Windows Ink.\r\n\r\nChrome for Android also comes with a handy screenshot tool and Google is now adding similar functionality to Chrome for Windows 11, Windows 10, macOS and ChromeOS. This might appear similar to the Web Capture feature in Edge, but Google’s implementation is significantly better.\r\n\r\nMicrosoft Edge’s Web capture screenshot tool only lets you use the Windows Inking feature to edit the screenshot. On the other hand, Chrome’s screenshot tool, which is included as part of the Share menu, opens your screenshot in a separate window with various editing controls.', 'https://www.windowslatest.com/wp-content/uploads/2022/05/Chrome-for-Windows.jpg', '2022-05-19 16:00:00', '4', 114, 19, 0),
(14, 'Microsoft confirms Windows 10s screenshot tool is crashing for some users', 'It looks like Windows 10s native screenshot tool called Snip & Sketc is being hit by a pretty annoying problem, where the app simply fails to load for some users when they try to take screenshots. This bug doesn’t appear to entirely affect the operating system’s ability to capture screenshots as long as you dont rely on Snip & Sketch tool.\r\n\r\nThe fact that Microsofts own app is not able to run on its own operating system isn’t a great look, but this isn’t the first time. A bug broke the same app last year and the company later rushed out a fix for some of the issues.\r\n\r\nAs you’re probably aware, Snip & Sketch tool allows users to capture screenshots on Windows and it comes with a variety of options, including the ability to edit screenshots, capture only parts of the screen, and later make changes using apps like Paint, so it can be a genuinely useful tool for many folks.', 'https://www.windowslatest.com/wp-content/uploads/2022/05/Windows-10-screenshot-tool-issues.jpg', '2022-05-19 12:00:00', '4', 445, 13, 0),
(15, 'Windows 10 April 2022 updates: Whats new, improved and fixed', 'Windows 10 April 2022 cumulative update is now available with a long list of improvements for everyone. April 2022 Patch Tuesday is actually a massive release and there are plenty of noticeable changes if you haven’t installed the March 2022 optional update.\r\n\r\nWindows 11 April 2022 update fixes as many as 119 vulnerabilities (we’re not taking Microsoft Edge into account). Out of these many security issues, 47 are under “Elevation of Privilege”, another 47 are Remote Code Execution vulnerabilities and there is 9 Denial of Service vulnerabilities.\r\n\r\n10 security issues are considered ‘Critical’ as they can be exploited to run code remotely on affected devices. In addition to the aforementioned issues, the company has also fixed 13 Information disclosures, 3 Spoofing, and 26 issues in Microsoft Edge. Microsoft is aware of three zero-day vulnerabilities, according to official release notes.', 'https://www.windowslatest.com/wp-content/uploads/2022/04/Windows-11-April-2022-Updates.jpg', '2022-05-19 06:00:00', '4', 100, 23, 0),
(16, 'Facebook owner Meta updates its privacy policy', 'Millions of users of Meta products, including Facebook and Instagram, are to receive notifications of the firm\'s updated privacy policies.\r\n\r\nMeta says the changes are designed to make it easier to understand how customers\' information is used.\r\n\r\nThe company has previously been criticised by regulators and campaigners over its use of customers\' data.\r\n\r\nWhatsApp and some other products are not covered by the update.\r\n\r\nControl over posts\r\nMeta says the changes won\'t allow it to \"collect, use or share your data in new ways\".\r\n\r\nThere are, however, two changes to the way that users can control how their information is processed.', 'https://ichef.bbci.co.uk/news/976/cpsprodpb/15542/production/_124926378_metagettyimages-1239883597.jpg', '2022-05-27 07:30:00', '2', 189, 33, 0),
(17, 'Twitter investors sue Elon Musk and platform over takeover bid', 'Twitter investors are suing Elon Musk and the social media platform over the handling of the billionaire\'s $44bn (34.9bn) bid for the company.\r\n\r\nThe case alleges he violated California corporate laws in a number of ways.\r\n\r\nIt accuses the Tesla boss of \"wrongful conduct\" as his \"false statements and market manipulation have created \'chaos\' at Twitter\'s headquarters in San Francisco\".\r\n\r\nTwitter shares are around 27% lower than Mr Musk\'s $54.20 offer price.\r\n\r\nThe lawsuit also said Mr Musk benefitted financially by delaying the disclosure of his significant stake in Twitter, and his plan to become a board member of the company.\r\n\r\nIt also claimed that several tweets posted by Mr Musk, who is a regular Twitter user with more than 95m followers, were \"misleading\".', 'https://ichef.bbci.co.uk/news/976/cpsprodpb/FE31/production/_124937056_gettyimages-1240408699.jpg', '2022-05-25 18:29:00', '2', 143, 43, 0),
(18, 'Android 13\'s dueling identities', 'When Android 13 officially arrives this summer, we\'re bound to see a bunch of befuddled head scratching.\r\n\r\nIt won\'t be because of heat-induced brain fog and/or dry scalp, either — not entirely, anyway. Instead, this fresh crop of confusion will stem from the fact that after months of buildup and anticipation, Google\'s latest and greatest Android version isn\'t gonna look like much for the majority of Android-owning organisms.\r\n\r\nSounds strange, I know, but it\'s true: For anyone carrying a phone that was already running last year\'s Android 12 software, Android 13 is shaping up to be an incredibly subtle, almost-not-even-noticeable change — at least on a surface level.\r\n\r\nThat\'s not to say Android 13 isn\'t significant. Far from it, in fact: This year\'s Android update may be one of Google\'s most pivotal, platform-shifting releases and the rare arrival that genuinely changes the course of where the platform is headed from a bigger-picture perspective.', 'https://images.idgesg.net/images/article/2022/05/android-13-100928311-large.jpg?auto=webp&quality=85,70', '2022-05-24 13:29:13', '1', 90, 13, 0),
(19, 'Ethereum, Altcoins Keep Dropping Against Bitcoin', ' - Bitcoin price fluctuates around USD 29,000.\r\n - Ethereum declined 9% and tested USD 1,725, XRP is testing USD 0.40.\r\n - ADA, SOL, and DOT are down 9%-11%.\r\nBitcoin price failed to stay above the USD 28,500 support zone and declined to USD 27,500 before there was a recovery wave. It is currently (04:05 UTC) consolidating losses near USD 29,000  and is down almost 3% in a day and 4% in a week.\r\n\r\nBesides, most major altcoins gained bearish momentum but are not trying to recover losses. ETH is still down 9% and is trading below the USD 1,800 level. XRP is might extend losses toward USD 0.365. ADA declined 9% and tested USD 0.455.', 'https://v2.cimg.co/news/79720/199133/responsive-images/9___media_library_original_1280_853.jpg', '2022-05-28 16:20:00', '3', 44, 12, 0),
(20, 'Terra Moves Closer to New Chain Launch, Secures Exchange Support', 'The Terra (LUNA) blockchain is moving closer to being re-born as Terra 2.0, this time without an algorithmic stablecoin. The project has already received the blessing of several exchanges, but questions about what the value of Terra is without a stablecoin have started to emerge.\r\n\r\nIn an update published on Terra’s official blog on Thursday, the team shared the first detailed description of the coming airdrop, how it will affect users, as well as an exact breakdown of the new token distribution.\r\n\r\nAccording to the update, the number of new tokens each user receives will depend on the type of tokens held on the old Terra chain – from now on called Terra Classic – the time tokens were held for, and the number of tokens held.', 'https://v2.cimg.co/news/79690/198682/responsive-images/adobestock-sdx15-1-media-library-original-1200-800___media_library_original_1200_800.jpeg', '2022-05-23 14:47:00', '3', 343, 14, 0),
(21, 'New Elon Musk Crypto Scam Deepfake Promises 30% Returns On Deposits', 'Tesla CEO Elon Musk continues to be the target of online con artists who are using his image to rob traders of their cash - with a new deepfake video depicting the billionaire entrepreneur making the rounds on Twitter.\r\n\r\nA short video, reposted by user DogeDesigner, shows Musk being interviewed, encouraging viewers in a clearly manipulated audio track to invest in the BitVex trading platform.\r\n\r\n“Today we are launching an investment project that is working right now if you see this video. Absolutely everyone can earn everything, it’s very simple,” the deepfaked Musk says, promising the scam’s potential victims a 30% return on deposits made in crypto.', 'https://v2.cimg.co/news/79660/198649/responsive-images/emdf-1___media_library_original_1200_765.jpg', '2022-05-28 14:35:09', '3', 56, 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_views`
--

CREATE TABLE `post_views` (
  `post_id` int(11) NOT NULL,
  `users_ip` varchar(255) NOT NULL,
  `liked` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_views`
--

INSERT INTO `post_views` (`post_id`, `users_ip`, `liked`) VALUES
(2, '33', 0),
(1, '4', 0),
(1, '4', 0),
(1, '185.157.121.243', 0),
(2, '213.5.195.252', 0),
(3, '213.5.195.252', 0),
(3, '65.108.192.186', 0),
(1, '91.195.99.170', 0),
(1, '185.217.68.140', 0),
(4, '213.5.195.143', 1),
(5, '213.5.195.143', 0),
(8, '213.5.195.143', 0),
(1, '213.5.195.143', 0),
(6, '213.5.195.143', 0),
(1, '213.5.195.48', 0),
(8, '213.5.195.48', 1),
(7, '213.5.195.48', 1),
(7, '65.108.192.186', 1),
(1, '213.5.195.73', 1),
(2, '213.5.195.73', 1),
(8, '213.5.195.73', 1),
(3, '213.5.195.73', 0),
(6, '213.5.195.73', 1),
(1, '46.211.95.222', 1),
(7, '213.5.195.73', 0),
(7, '8.40.107.10', 0),
(4, '8.40.107.10', 1),
(4, '146.70.97.206', 0),
(4, '91.207.103.208', 0),
(9, '8.40.107.10', 1),
(9, '91.207.103.208', 1),
(9, '185.217.68.140', 1),
(9, '217.138.255.198', 0),
(1, '46.211.248.144', 1),
(5, '46.211.248.144', 1),
(9, '108.59.6.100', 1),
(1, '8.40.107.10', 1),
(10, '8.40.107.10', 1),
(10, '46.211.248.144', 0),
(10, '213.5.195.73', 1),
(3, '46.211.248.144', 0),
(3, '8.39.206.6', 0),
(1, '8.39.206.6', 0),
(4, '8.39.206.6', 0),
(8, '8.39.206.6', 0),
(5, '8.39.206.6', 0),
(10, '89.46.103.235', 0),
(10, '185.4.227.86', 1),
(10, '27.122.12.104', 1),
(5, '46.211.3.204', 0),
(15, '213.5.195.73', 0),
(1, '213.5.195.226', 0),
(10, '213.5.195.226', 0),
(1, '185.157.121.206', 1),
(10, '185.157.121.206', 0),
(7, '185.157.121.206', 0),
(12, '185.157.121.206', 0),
(12, '213.5.195.88', 0),
(6, '213.5.195.88', 0),
(10, '213.5.195.88', 0),
(1, '46.211.117.34', 0),
(15, '213.5.195.14', 0),
(13, '213.5.195.14', 0),
(14, '213.5.195.14', 0),
(15, '46.211.117.34', 0),
(15, '176.124.133.116', 1),
(15, '8.39.206.6', 0),
(15, '46.211.70.45', 0),
(1, '46.211.70.45', 0),
(13, '46.211.70.45', 0),
(0, '46.211.70.45', 0),
(130, '46.211.70.45', 0),
(14, '46.211.70.45', 0),
(13, '46.211.24.139', 0),
(1, '8.43.225.27', 0),
(14, '8.43.225.27', 0),
(15, '194.44.216.178', 1),
(1, '194.44.216.178', 0),
(13, '194.44.216.178', 1),
(14, '8.40.107.10', 0),
(15, '8.40.107.10', 0),
(13, '8.40.107.10', 0),
(1, '213.5.195.14', 0),
(14, '27.122.12.114', 0),
(13, '46.211.145.9', 0),
(1, '27.122.12.114', 0),
(13, '27.122.12.114', 0),
(14, '194.44.216.178', 1),
(13, '46.211.22.237', 0),
(13, '8.43.225.25', 0),
(15, '46.211.228.110', 0),
(15, '109.169.23.79', 0),
(13, '46.165.250.72', 0),
(17, '46.211.147.58', 0),
(16, '46.211.147.58', 0),
(21, '46.211.147.58', 1),
(13, '27.122.12.109', 0),
(13, '46.211.147.58', 0),
(14, '46.211.147.58', 0),
(15, '46.211.147.58', 0),
(18, '46.211.147.58', 0),
(19, '46.211.147.58', 0),
(20, '46.211.147.58', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'pawaguber', '123'),
(2, 'pawaguber', '123'),
(3, 'pawaguber', '123'),
(4, 'pawaguber', '123'),
(5, '321321321', '44646'),
(6, 'frfrf', '72ec65e3ee410a6027439753699f0f2d'),
(7, 'frfrf', '8f429400d48046161219642ad59cb35a'),
(8, '1', 'a8fa1becb75431d198d8329ef1cf1ea2'),
(9, '12345678909887654322323', '39250d61cf5880f94ec4a05728d97d63'),
(10, '12345678909887654322323', '465982a64f5e43653deeb6cb8fef06ed'),
(11, '12345678909887654322323', 'd220260b7029d2982cd6819b64fbf813'),
(12, '11', 'efd6463984946e075aee3540c41e3723'),
(13, '12345678909887654322323', '065202fa8d7daafa8c56a86e0327620a'),
(14, '12345678909887654322323', '065202fa8d7daafa8c56a86e0327620a'),
(15, 'pawaguber', '123'),
(16, '22', 'd49a8265b5c0cf95fca80ca43198b155'),
(17, '33', '01b5a306b5781a2157865cbb5f3f2b14'),
(18, '55', '6be547bd4d003a060cb047c5523ae803'),
(19, '44', '39250d61cf5880f94ec4a05728d97d63'),
(20, '66', '0f4801b85acec6a02ea99420c07a3aa6'),
(21, '77', '77'),
(22, '88', '321'),
(23, 'aqswde', 'qwerty'),
(24, 'swdefr', 'swdefr'),
(25, 'kek', 'kek'),
(26, 'testt', 'testt'),
(27, 'dima', '123'),
(28, 'Penis', 'penis12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD UNIQUE KEY `category` (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
