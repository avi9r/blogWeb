-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 11:50 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'avinash', '12345', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, 'test', 'this is testing purpose', '1606240668.jpeg', '2020-11-24 12:27:48', '2020-11-24 12:27:48'),
(2, 'srv', 'srv technology', '1606286406.png', '2020-11-25 01:10:06', '2020-11-25 01:10:06'),
(3, 'New posts', 'All posts', '1606386542.png', '2020-11-26 04:59:02', '2020-11-26 04:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'nice job', NULL, '2020-11-26 01:11:52'),
(2, 2, 1, 'wdwfdwsf', '2020-11-26 02:15:22', '2020-11-26 02:15:22'),
(3, 2, 3, 'this is a comment', '2020-11-26 04:20:00', '2020-11-26 04:20:00'),
(4, 2, 9, 'The Indian government has already banned TikTok', '2020-11-26 05:06:32', '2020-11-26 05:06:32'),
(5, 2, 12, 'this is awesome post', '2020-11-26 05:15:57', '2020-11-26 05:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_24_154621_create_categories_table', 2),
(5, '2020_11_24_165215_create_posts_table', 3),
(6, '2020_11_24_165644_create_comments_table', 4),
(7, '2020_11_24_171343_create_admins_table', 5),
(8, '2020_11_24_171358_create_settings_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `cat_id`, `title`, `thumb`, `full_img`, `detail`, `tags`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'test test', '1606240779.jpeg', '1606240779.jpeg', 'SRV technology is a good environment for employees', '#srvtechnology', '2020-11-24 12:29:39', '2020-11-24 12:29:39'),
(3, 0, 2, 'kiran', '1606293012.jpg', '1606293012.jpg', 'she is beautiful', '#kiran', '2020-11-25 03:00:12', '2020-11-25 03:00:12'),
(4, 0, 3, 'The Weeknd, Justin Bieber, Nicki Minaj Aren’t Taking The 2021 Grammy Nominations Well', '1606386635.webp', '1606386635.webp', 'The 2021 Grammy Nominations list came with a fair share of surprises. Some nods like Beyoncé leading with nine nominations, Taylor Swift and Dua Lipa following close behind with six each aren\'t shockers but some snubs are so glaring, it’s making fans and artists collectively critique the Recording Academy. The 63rd Grammy Awards will see major snubs for artists who enjoyed a great run on music charts.\r\n\r\nTo begin with, The Weeknd was snubbed hard. You\'d think his album ‘After Hours’ with tracks like \'Blinding Lights\' and \'Heartless\' is a great contender in the R&B or pop category but the Recording Academy didn\'t see it that way. He was left out of the list entirely and he expectedly didn\'t take it well. The artist lashed out in response and his fandom nodded in agreement.', '#sgcwkc', '2020-11-26 05:00:35', '2020-11-26 05:00:35'),
(5, 0, 3, 'Meghan Markle Pens Powerful Op-Ed On Pregnancy Loss', '1606386671.webp', '1606386671.webp', 'Meghan Markle, Duchess of Sussex, has penned a powerful op-ed for The New York Times about experiencing pregnancy loss. \r\n\r\nIn a piece entitled \"The Losses We Share,\" published Wednesday, Markle wrote about her own experience of going through a miscarriage, considered the power of asking someone the simple question, \"Are you OK?\" and drew on the collective grief many of us are experiencing in 2020.\r\n\r\n\"After changing his [Archie\'s] diaper, I felt a sharp cramp,\" Markle wrote. \"I dropped to the floor with him in my arms, humming a lullaby to keep us both calm, the cheerful tune a stark contrast to my sense that something was not right.\"\r\n\r\n\"I knew, as I clutched my firstborn child, that I was losing my second,\" she added. She described lying in a hospital bed as her husband, Prince Harry, held her hand. \"I felt the clamminess of his palm and kissed his knuckles, wet from both our tears,\" she wrote. \"Staring at the cold white walls, my eyes glazed over. I tried to imagine how we’d heal.\"\r\n\r\nMarkle recalled a moment during her and Prince Harry\'s tour of South Africa in Oct. 2019 when a journalist, Tom Bradby, asked her if she was OK. \"I was exhausted. I was breastfeeding our infant son, and I was trying to keep a brave face in the very public eye,\" she wrote.', '#fevevev', '2020-11-26 05:01:11', '2020-11-26 05:01:11'),
(6, 0, 3, 'Spotify Begins ‘Rolling Reset’ Of Passwords For Users Affected By A Credential Stuffing Attack', '1606386744.webp', '1606386744.webp', 'It was recently reported that a possible credential stuffing operation affected over 300K online users with Spotify accounts. To that end, Spotify has reportedly begun ‘Rolling Reset’ for passwords of user accounts that were compromised by the hackers.\r\n\r\nSEE ALSO: 68% of Hackers Launch Cyberattacks With The Purpose Of Being Challenged: Report\r\n\r\nThe research behind the potential fraud scheme was led by the VPNmentor team who recently discovered an Elasticsearch database with over 380 million records. These records included information like login credentials and other user data like their email address, country of residence, etc, to hack into Spotify accounts. The exposed database was found to consist of over 72GB of data. The origins of the discovered database and how hackers were targeting Spotify is currently unknown. But, it’s likely that hackers were using login credentials stolen from another platform or app to hack into Spotify accounts.\r\n\r\nThe report by VPNmentor reveals that the database most likely belonged to a 3rd party that was using it to store all the Spotify login credentials. All these login credentials and user personal information was most probably obtained either through illegal ways or got leaked from other sources.\r\n\r\nThe VPNmentor team states that this tactic of credential stuffing is quite common among hackers and is used by them to access private accounts on popular platforms like Spotify. This usually happens given the use of weak passwords y users online and it’s not something that the companies can prevent from happening as they can’t control what passwords the users choose to keep. It also notes that companies can play a role by helping users regain control of their accounts as well as by instilling safer password practices for users which were done by Spotify.', '#wcvwsv', '2020-11-26 05:02:24', '2020-11-26 05:02:24'),
(7, 0, 3, 'Diesel On Fadelite Wear OS Smartwatch Launched In India', '1606386780.webp', '1606386780.webp', 'First unveiled at CES earlier this year, Diesel\'s funky-looking smartwatch has finally made it to India. The Wear OS-based smartwatch is priced at INR 21,995 and is already available on online stores such as Amazon.\r\n\r\nThe Wear OS-running smartwatch is powered by the Qualcomm Snapdragon Wear 3100 processor. It misses out on the newer, more efficient Wear 4100 processor but, as mentioned above, the watch was initially announced in Jan 2020 and preceded the launch of the newer processor.\r\n\r\nThe Fadelite is sure to draw some attention with its transparent strap and iridiscent case that are available in a bunch of colours: red to black, black to clear, blue to clear, or all clear. With a case size of 43mm, the watch is suitable to be worn both by men and women.', '#cfvfffv', '2020-11-26 05:03:00', '2020-11-26 05:03:00'),
(8, 0, 3, 'Google Now Allows Editing MS Office Files On Docs, Sheets, And Slides For iOS', '1606386818.webp', '1606386818.webp', 'Google has rolled out native editing support for Microsoft Office files on Google Docs, Sheets, and Slides for iOS. The company announced the latest change today, available now for all users with both personal and enterprise accounts.\r\n\r\nThe new update allows you to edit, comment, and collaborate on Office files in Docs, Sheets, and Slides on your iPhone or iPad. Google says the feature \"brings the collaborative and assistive features of Google Workspace to your Microsoft Office files” for iOS users.\r\n\r\nAs per an update on a Google Workspace blog, \"We\'re making Office editing available on iOS. This feature brings the collaborative and assistive features of Google Workspace to your Microsoft Office files when you\'re using your iOS device. Already available on the web and Android.\"', '#vbnm', '2020-11-26 05:03:38', '2020-11-26 05:03:38'),
(9, 0, 3, 'Indian Government Bans TikTok-Like Snack Video And 42 Other Chinese Apps', '1606386852.webp', '1606386852.webp', 'The Indian government recently blocked a slew of new apps under the IT act. One of the apps that have been banned is a Chinese app called Snack Video which acted as a TikTok alternative for Indians and had been observing a surge in its downloads.\r\n\r\nSEE ALSO: ‘Tooter’, India’s Alternative To Social Networking Site Twitter Goes Viral\r\n\r\nAs per the reports, the Ministry of Electronics and Information Technology (MeitY) issued a ban earlier this week on a total of 43 Chinese apps. These apps have been blocked by the Indian government under section 69A of the Information and Technology Act, so you won’t be able to access them anymore. The ban has been implemented by the government given the security-related concerns around these apps.\r\n\r\nThese apps were found to be involved in activities that are “prejudicial to sovereignty, integrity, and defense of India, the security of the state, and public order\". Apart from Snack Video, other apps that have been banned recently includes AliSuppliers Mobile App, Alibaba Workbench, AliExpress - Smarter Shopping, Better Living, Alipay Cashier, Lalamove India - Delivery App, CamCard - Business Card Reader, CamCard - BCR (Western), Date in Asia - Dating & Chat For Asian Singles, WeDate-Dating App, and more.', '#svvv', '2020-11-26 05:04:12', '2020-11-26 05:04:12'),
(10, 0, 2, 'Indian Government Bans TikTok-Like Snack Video And 42 Other Chinese Apps', '1606387037.webp', '1606387037.webp', 'The Indian government recently blocked a slew of new apps under the IT act. One of the apps that have been banned is a Chinese app called Snack Video which acted as a TikTok alternative for Indians and had been observing a surge in its downloads.\r\n\r\nSEE ALSO: ‘Tooter’, India’s Alternative To Social Networking Site Twitter Goes Viral\r\n\r\nAs per the reports, the Ministry of Electronics and Information Technology (MeitY) issued a ban earlier this week on a total of 43 Chinese apps. These apps have been blocked by the Indian government under section 69A of the Information and Technology Act, so you won’t be able to access them anymore. The ban has been implemented by the government given the security-related concerns around these apps.\r\n\r\nThese apps were found to be involved in activities that are “prejudicial to sovereignty, integrity, and defense of India, the security of the state, and public order\". Apart from Snack Video, other apps that have been banned recently includes AliSuppliers Mobile App, Alibaba Workbench, AliExpress - Smarter Shopping, Better Living, Alipay Cashier, Lalamove India - Delivery App, CamCard - Business Card Reader, CamCard - BCR (Western), Date in Asia - Dating & Chat For Asian Singles, WeDate-Dating App, and more.', '#srv', '2020-11-26 05:07:17', '2020-11-26 05:07:17'),
(11, 0, 2, 'Google ML Experiment Will Automatically Add \'Chapters\' To YouTube Videos', '1606387081.webp', '1606387081.webp', 'My biggest gripe with videos - and the reason why I prefer reading articles over videos - is that it\'s not really possible to skip to the part you\'d like to watch the most. But YouTube\'s recent addition of chapters has been a boon for people like me who prefer skipping straight to the part they care about the most, rather than painfully scrolling through a long video to find the right moment.\r\n\r\nUntil now, the only way to add chapters to a video was if the creators themselves added timestamps. Now, YouTube is experimenting \'automatic video chapters\' which removes the need to do so.\r\n\r\nHow does Google do it? Well, in a brief explanation on their support page, Google says they \"use machine learning to recognize text in order to auto generate video chapters.\" Automatically adding chapters may prove to be more helpful to creators who upload several videos a day.', '#fwefe', '2020-11-26 05:08:01', '2020-11-26 05:08:01'),
(12, 0, 2, '\'Cherry\': The Dramatic First Look Images Of Tom Holland In The Russo Brothers-Directed Film Are Here', '1606387119.webp', '1606387119.webp', 'If you think The Devil All the Time was a drastic departure for Spider-Man star Tom Holland, you\'re in for a surprise. The first look images from Cherry are here and they\'re teasing a very intense role for the Marvel actor. The film arriving on Apple TV+ sees Holland\'s latest outing with Joe and Anthony Russo after Avengers: Infinity War and Avengers: Endgame. Based on Nico Walker\'s novel of the same name, the film revolves around the titular character, an Army medic drafted to Iraq who returns with PTSD. The film casts Ciara Bravo, Jack Reynor, Michael Gandolfini and Thomas Lennon among others.\r\n\r\nThe first look images of Cherry have arrived in a Vanity Fair issue amidst considerable Oscar buzz. The Russo Brothers took to Instagram to share the film\'s release date and images featuring Tom Holland in a crisis on and off the battlefield. We also get a first look at Ciara Bravo\'s character who plays Holland\'s onscreen wife.', '#efthy', '2020-11-26 05:08:39', '2020-11-26 05:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'rahul', 'rahulgandhi@gmail.com', NULL, '$2y$10$ijc0kmVfHmGldbMxO3EEY.6r7deMuZvCdOCSoz3UTx.kcholBvOR6', NULL, '2020-11-25 01:34:17', '2020-11-25 10:49:56'),
(3, 'avinash', 'avinashranjan633@gmail.com', NULL, '$2y$10$FSmFNkTT0Ehid3GzJ0DjeeQryYdZtw3It/PfkYXpR3WYze6Zxtn3e', NULL, '2020-11-25 11:33:39', '2020-11-25 11:35:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
