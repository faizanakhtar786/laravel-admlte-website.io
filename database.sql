-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 05, 2018 at 10:21 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gauravsuraj11`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `feature_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `description`, `feature_image`, `rate`, `images`, `email`, `mobile`, `website`, `address`, `created_at`, `updated_at`) VALUES
(5, 'Amrita Vidyalayam Lucknow', NULL, 'clients/5bac6f405cdff.png', '5', 'client/5bac6f405ccc7.png-&', 'amritaslucknow@gmail.com', NULL, NULL, NULL, '2018-09-27 12:48:48', '2018-09-27 12:48:48'),
(7, 'Millennium School Lucknow', NULL, 'clients/5bac6ffd1847d.png', '4', 'client/5bac6ffd182b4.png-&', 'info.lucknow@themillenniumschools.com', NULL, NULL, NULL, '2018-09-27 12:51:57', '2018-09-27 12:51:57'),
(8, 'Allen House Public School In Lucknow', NULL, 'clients/5bac70b53ec80.png', '5', 'client/5bac70b53e5d4.png-&', 'contact@allenhouselucknow.com', NULL, NULL, NULL, '2018-09-27 12:55:01', '2018-09-27 12:55:01'),
(9, 'Ornet Hotel Lucknow', NULL, 'clients/5bac7137d6fa5.jpg', '5', 'client/5bac7137d6e69.jpg-&', 'info@theornate.in', NULL, NULL, NULL, '2018-09-27 12:57:11', '2018-09-27 12:57:11'),
(12, 'Mount Litera Zee School Lucknow', NULL, 'clients/5bac787249ccb.jpg', '5', 'client/5bac787249b94.jpg-&', 'mlzs.lucknow@mountlitera.com', NULL, NULL, NULL, '2018-09-27 13:28:02', '2018-09-27 13:28:02'),
(13, 'CRPF Lucknow', NULL, 'clients/5bac792c29f90.jpg', '5', 'client/5bac792c29e1f.jpg-&', 'contact@crpf.nic.in', NULL, NULL, NULL, '2018-09-27 13:31:08', '2018-09-27 13:31:08'),
(14, 'Nepal Ambuja Cement', NULL, 'clients/5bac79625ed51.png', '5', 'client/5bac79625eb9b.png-&', 'corporate.communications@ambujacement.com', NULL, NULL, NULL, '2018-09-27 13:32:02', '2018-09-27 13:32:02'),
(15, 'Urban Axis Developers', NULL, 'clients/5bac79d239e26.jpg', '5', 'client/5bac79d239c77.jpg-&', 'info@urbanaxis.in', NULL, NULL, NULL, '2018-09-27 13:33:54', '2018-09-27 13:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `massage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `created_at`, `updated_at`, `name`, `email`, `mobile`, `massage`) VALUES
(4, '2018-10-04 14:10:27', '2018-10-04 14:10:27', 'AMIT KUMAR YADAV', 'amityadav021@gmail.com', 9532707066, 'testing'),
(6, '2018-10-10 16:00:54', '2018-10-10 16:00:54', 'AMIT KUMAR YADAV', 'amityadav021@gmail.com', 9532707066, 'testing 2'),
(7, '2018-11-23 04:33:36', '2018-11-23 04:33:36', 'farag', 'usama.ahmed31@yahoo.com', 17078443704, 'Hello! There is an interesting bonus - more than 400 incredible games & 300 top online slots waiting for you.  Try and be our next winner. http://bit.ly/2Jb0j7a'),
(8, '2018-12-01 18:34:19', '2018-12-01 18:34:19', 'PatrickHIB', 'se.brunnsvatten@synlab.se', 111677282, 'Hi What we get here is , seriouscome forward \r\n To reap the grade click on the cement subordinate to  \r\n \r\n \r\nhttp://topratinglist.com?20409');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `created_at`, `updated_at`, `title`, `image`, `description`) VALUES
(11, '2018-09-27 03:36:17', '2018-09-27 03:36:17', 'Gardening', 'gallery/5babedc19d35e.jpg', NULL),
(12, '2018-09-27 04:30:55', '2018-09-27 04:30:55', 'Gardening', 'gallery/5babfa8f15fac.jpg', NULL),
(13, '2018-09-27 04:31:02', '2018-09-27 04:31:02', 'Gardening', 'gallery/5babfa9639fce.jpg', NULL),
(14, '2018-09-27 04:31:09', '2018-09-27 04:31:09', 'Gardening', 'gallery/5babfa9d94719.jpg', NULL),
(15, '2018-09-27 04:31:16', '2018-09-27 04:31:16', 'Gardening', 'gallery/5babfaa4467b8.jpg', NULL),
(16, '2018-09-27 04:31:23', '2018-09-27 04:31:23', 'Gardening', 'gallery/5babfaab07aab.jpg', NULL),
(17, '2018-09-27 04:31:30', '2018-09-27 04:31:30', 'Gardening', 'gallery/5babfab216f97.jpg', NULL),
(18, '2018-09-27 04:31:37', '2018-09-27 04:31:37', 'Gardening', 'gallery/5babfab985736.jpg', NULL),
(19, '2018-09-27 04:31:44', '2018-09-27 04:31:44', 'Gardening', 'gallery/5babfac0b0b67.jpg', NULL),
(20, '2018-09-27 04:32:12', '2018-09-27 04:32:12', 'Gardening', 'gallery/5babfadc49feb.jpg', NULL),
(21, '2018-09-27 04:32:19', '2018-09-27 04:32:19', 'Gardening', 'gallery/5babfae33ccda.jpg', NULL),
(22, '2018-09-27 04:32:26', '2018-09-27 04:32:26', 'Gardening', 'gallery/5babfaeadfc6f.jpg', NULL),
(23, '2018-09-27 04:32:35', '2018-09-27 04:32:35', 'Gardening', 'gallery/5babfaf347b84.jpg', NULL),
(24, '2018-09-27 04:32:42', '2018-09-27 04:32:42', 'Gardening', 'gallery/5babfafacc48d.jpg', NULL),
(25, '2018-09-27 04:32:51', '2018-09-27 04:32:51', 'Gardening', 'gallery/5babfb03728a5.jpg', NULL),
(26, '2018-09-27 04:33:08', '2018-09-27 04:33:08', 'Gardening', 'gallery/5babfb14a120f.jpg', NULL),
(27, '2018-09-27 04:33:21', '2018-09-27 04:33:21', 'Gardening', 'gallery/5babfb212ef13.jpg', NULL),
(28, '2018-09-27 04:33:44', '2018-09-27 04:33:44', 'Gardening', 'gallery/5babfb3853a9f.jpg', NULL),
(29, '2018-09-27 04:34:03', '2018-09-27 04:34:03', 'Gardening', 'gallery/5babfb4b909bd.jpg', NULL),
(30, '2018-09-27 04:34:12', '2018-09-27 04:34:12', 'Gardening', 'gallery/5babfb54bc959.jpg', NULL),
(31, '2018-09-27 04:34:21', '2018-09-27 04:34:21', 'Gardening', 'gallery/5babfb5d07517.jpg', NULL),
(32, '2018-09-27 04:34:28', '2018-09-27 04:34:28', 'Gardening', 'gallery/5babfb6464f4a.jpg', NULL),
(33, '2018-09-27 04:34:37', '2018-09-27 04:34:37', 'Gardening', 'gallery/5babfb6d163d8.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2018_06_27_165302_create_sliders_table', 2),
(31, '2018_06_29_204752_create_pages_table', 2),
(32, '2018_07_01_060936_create_profile_table', 2),
(33, '2018_07_05_214308_create_setting_create', 3),
(34, '2018_07_09_131649_create_clients_table', 4),
(35, '2018_09_30_082950_create_services_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortdescription` longtext COLLATE utf8mb4_unicode_ci,
  `longdescription` longtext COLLATE utf8mb4_unicode_ci,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `created_at`, `updated_at`, `title`, `image`, `shortdescription`, `longdescription`, `name`, `meta_keyword`, `meta_description`) VALUES
(1, '2018-07-05 13:34:27', '2018-09-27 23:55:44', 'Achal’s Green Empire | The Real Empire', 'pages/5baceb63b7517.jpg', '<h2><span style=\"color:#2980b9\"><span style=\"font-family:Arial,Helvetica,sans-serif\">About&nbsp;Our&nbsp;Empire</span></span></h2>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\">We strongly believe that the garden and office area shall have a reflection of an organisation, and therefore, institutions and individuals are engaging agencies offering gardening services and landscaping solutions.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\">The detoriating level of water, shortage of time, quality of garden services and alarming level of pollutions&nbsp;&nbsp; are the challenges being faced by the plants and garden lover. we as an expert in the field of garden management and garden related services have proved ourself by winning the award given by the national botanical research institute Lucknow.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"color:#2980b9\"><strong>Our mission</strong>: </span><span style=\"color:null\">T</span>o provide the most affordable gardening services and solutions </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\">&nbsp;</p>', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"color:#2980b9\"><strong>Our vision</strong>:</span>&nbsp;To create a masterpiece garden, landscape by our expertise in green services. We, after&nbsp;&nbsp; listening to our valuable clients, understand them and assess their current&nbsp; as well as future garden related necessary resources , finally design our packages by offering them the most affordable gardening and landscape solutions which include creation and maintenance of the indoor and outdoor garden. Having rich experience in the gardening services including garden development and garden maintenance, landscape, fountain services, horticulture, contract farming, organic farming,esate management,soil and pest treatment and nursery industries, we&nbsp; offer the most affordable gardening services and solution&nbsp;&nbsp; to maintain the long list of&nbsp; satisfied customer.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><strong><span style=\"color:#0070c0\">TEAM MEMBER&#39;S</span></strong></span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"color:#2c3e50\">&nbsp;1.)<strong> Mr. ACHAL BIHAR LAL &nbsp;(Founder )</strong></span><span style=\"color:#27ae60\"> </span>, &nbsp;RETIRED INSPECTOR/EXE. FROM CISF,MHA( GOI) AND NATIONAL BOTANICAL RESEARCH INSTITUTE AWRAD WINNER </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"color:#2c3e50\">2.) <strong>Dr. VANDITA SINHA ( PhD&nbsp; IN BOTANY)</strong>: </span><span style=\"color:#27ae60\">&nbsp;</span>HAVING DEEP KNOWLEDGE OF THE TEXONOMY OF THE PLANTS ,ENVIORMENT AND ECOLOGY.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"color:#2c3e50\"><span style=\"background-color:#ffffff\">3.) </span><strong><span style=\"background-color:#ffffff\">DR. MANJU SHANKAR</span></strong><span style=\"background-color:#ffffff\">:&nbsp;</span></span> NATIONAL BOTANICAL RESEARCH INSTITUTE AWRAD WINNER.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"color:#2c3e50\">4.) <strong>MRS. SUNITA NIGAM </strong>:</span><span style=\"color:#27ae60\"> </span>NATIONAL BOTANICAL RESEARCH INSTITUTE AWRAD WINNER.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"color:#2c3e50\">5.)<strong> MR. ANIL SRIVASTAVA (ARCH)</strong>: </span>FOUNDER DIRECTOR OF SNOW AND FOUNTAION. </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\">&nbsp;</p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"color:#2c3e50\"><strong>20 MEMBERS TEAMS OF GARDENERS</strong>:</span> WITH PROPER POLICE VERIFICATION, WELL DRESSED, SKILLED AND EXPERINCED IN THE GARDEN DEVELOPMENT AND LANDSCAPING AND FOUNTAIN SERVICES. </span></span></p>', 'About US', 'Achal’s Green Empire | The Real Empire', 'Achal’s Green Empire | The Real Empire'),
(2, '2018-07-05 13:35:51', '2018-09-27 21:22:55', 'Achal’s Green Empire | The real empire', 'pages/5babee1d9773b.jpg', '<h1 style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"color:#2980b9\"><strong>OUR MISSION</strong>:</span> TO PROVIDE THE MOST AFFORDABKE GARDENING SERVICES AND SOLUTIONS </span></span></h1>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\"><span style=\"color:#2980b9\"><strong>OUR VISION</strong>:</span> TO CREAT A MASTERPIECE GARDEN, LANDSCAPE BY OUR EXPERTISE IN GREEN SERVICES</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\">We strongly Believe that the garden and office area shall have&nbsp; a&nbsp; reflection of an organisation , and therefore&nbsp; institutions and individulas are engaging agencies offering gardening services and landscapeing solutions.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-family:Arial,Helvetica,sans-serif\"><span style=\"font-size:11pt\">The deterioting level of water, shortage of time, quality of garden services and alarming level of polutions&nbsp;&nbsp;are the challenges being faced by the plants and garden lover.</span></span></p>', NULL, 'Achal’s Green Empire <br> The real empire', 'Achal’s Green Empire | The real empire', 'Achal’s Green Empire | The real empire');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','deactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(3, 'GARDENING SERVICES', 'fa-angellist', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Garden Management and garden maintenance is done with our skilled and experienced&nbsp; team member in the guidance of Botanist Dr. Vandita Sinha and monitored by other NBRI&nbsp; FLOWER SHOW AWARED WINNERs.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">The gardening services is being offered by entering, &nbsp;garden maintenance agreement with the following scope of work to&nbsp; keep your garden free of weeds&nbsp; and unhealthy plants, we &nbsp;maintain its beauty and pleasing effects&nbsp; by caring&nbsp; the &nbsp;best &nbsp;way they should be under our mission of the &nbsp;most affordable gardening services and solutions with the following scope of work.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*Cutting of grass,(lawn)and hedges, keeping the plants in the desired beautiful shape, </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*Removal of weeds regularly.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*Spraying of bio pesticide and insecticide.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*Manuring and fertilizer </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*Carry&rsquo;s/Bonds will be made for all the plants and bushes.</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*Lawn will be maintained green with application of nitrogen urea and DAP </span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*Replacing the dead and unhealthy plants</span></span></p>\r\n\r\n<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">*Regular&nbsp; watering, removing the useless weeds etc.</span></span></p>', '2018-10-01 11:55:47', '2018-10-01 11:55:47'),
(4, 'LAWN SERVICE', 'fa-archive', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Weeding, feeding, watering and pruning of shrubs, bushes and hedges, are some the major difficulties faced by the lawn owner these days. We, as an expert in the field of garden management and garden related services, take care of all your worries, by offering our most affordable gardening services and solutions, that includes, Cutting the grass, giving proper shape to the shrubs and pruning of&nbsp; &nbsp;plants used around the lawn by Our dedicated well dressed teams of gardeners equipped with necessary garden tools and kits. </span></span></p>', '2018-10-01 11:59:46', '2018-10-01 11:59:46'),
(5, 'HORTICULTURE SERVICES', 'fa-bomb', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">The fields are prepared after the testing of the soil and its essential treatments to yield the maximum profit by practising organic farming along with drip irrigations to save the environment and the human lives from the hazardous effects of pollutions. Currently engaged in vegetables having rich antioxidants, and banana (fruits). Irrigation and Cleaning of fruits and vegetables are done with running fresh water, with zero scope of the accumulation of pollutants and heavy metals. To get&nbsp; the harvest utilised on time we have a strong network of the stockists who can collect these harvest even from the farm. &nbsp;</span></span></p>', '2018-10-01 12:00:42', '2018-10-01 12:00:42'),
(6, 'LANDSCAPE SERVICE', 'fa-certificate', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">The dedicated skilled team member and various designers, work together to deliver their best suitable and affordable beautiful green place. Selection of beautiful gravels, pebbles, rocks, water body, lights, music and many more is being done so meticulously, while designing&nbsp;&nbsp; enclosures and planters for indoor and outdoor gardens. Selection of native and state plants, indoor and out door plants, ornamental and oxygenating green beautiful plants are the next steps, followed by making adequate provisions for the seasonal and permanent beautiful flowers. Finally caring of your dream garden by our expert teams begins.</span></span></p>', '2018-10-01 12:00:58', '2018-10-01 12:00:58'),
(7, 'GREEN BELT DEVELOPMENT SERVICES', 'fa-drupal', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Selection of native plants, states plants, fruit yielding plants and less water absorbing plants are &nbsp;done to maintain the local ecosystem and biodiversity so beautifully that fulfilled the purpose meaningfully, &nbsp;by offering you our most affordable gardening services and solutions.</span></span></p>', '2018-10-01 12:01:14', '2018-10-01 12:01:14'),
(8, 'TYPES OF GARDEN WE DEALS IN', 'fa-child', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;Garden on land, Aqua Garden , Zodiac Garden, Medicinal Garden, Kitchen Garden, Dish Garden, Roof Garden ,&nbsp; Vertical Garden, Hanging Garden, Horizontal garden, Circular Garden, Mobile garden and finally Zero Water Gardening.</span></span></p>', '2018-10-01 12:01:25', '2018-10-01 12:01:25'),
(9, 'GARDEN DEVELOPMENT SERVICES', 'fa-diamond', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Experiments and creativity including DIY (DO IT YOURSELF) is being done to design and deliver the ultimate masterpiece garden with in your budget, by implementing our most affordable gardening services and solutions. Adequate provision is being done for the bio swale, rain water harvesting while creating a garden.&nbsp; Installations of modern irrigation technique (drip irrigations), and use of water sprinkler etc has now became an integral element for the gardening services. Selections of plants, flowers rocks, stone and fountain are being done so precisely, to create the masterpiece garden under our mission of most affordable gardening services and solutions.</span></span></p>', '2018-10-01 12:01:40', '2018-10-01 12:01:40'),
(10, 'GARDEN CLEANUP', 'fa-connectdevelop', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Weeding out, cleaning of beds, bonds and carry&rsquo;s on a fixed schedule, replacing the dead and unhealthy plants, cleaning and colouring of pots &nbsp;are some of the practices that have been done under these services. All types of garden including vertical garden are being maintained on AMC basis. Treatment of soil and plants is being done on a Scheduled basis under the scope of our most affordable gardening services and solutions.</span></span></p>', '2018-10-01 12:03:18', '2018-10-01 12:03:18'),
(11, 'LIVING GREEN PLANTS AND BEAUTIFUL  FULLY BLOOMED FLOWERS ON RENT', 'fa-mixcloud', '<p style=\"margin-left:0cm; margin-right:0cm; text-align:justify\"><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">The available indoor and outdoor spaces are being maintained green and beautiful by supplying living green and fresh sets of oxygenating plants and flowers on rent, so that the staff and the visitors may feel relaxed and work in the best green and beautiful environment to deliver their optimum output. The entire set of plants and flowers is replaced by fresh sets, fortnightly.</span></span></p>\r\n\r\n<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">We also make your occasions more memorable by placing our BIG, Medium and Small sized plants in beautifully coloured planters, inside and outside the venue to welcome and greet your guests happily. We encouraged the people to practices to place living real fresh and green plants, and real beautiful seasonal flowers by offering our most affordable gardening services and solutions.</span></span></p>', '2018-10-01 12:03:46', '2018-10-01 12:03:46'),
(12, 'SOIL TREATMENT & PEST TREATMENT', 'fa-sellsy', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;Unexpected seasonal changes such as excess rain, fogs, heat waves&nbsp;&nbsp; etc not only poses climatic threat but also gives birth to various pests that causes damages to your masterpiece garden. To preserve&nbsp; the health of the&nbsp; shrubs, bushes, creepers&nbsp; of your indoors and outdoor&nbsp; garden ,&nbsp; service&nbsp; of soil and pest treatment&nbsp; is being offered&nbsp; under our mission of the&nbsp; most affordable gardening services and solutions that helps&nbsp; to maintain the fertility of&nbsp; the soil&nbsp; and also helps your garden pest free. </span></span></p>', '2018-10-01 12:04:06', '2018-10-01 12:04:06'),
(13, 'FOUNTAIN SERVICES', 'fa-filter', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">Various types of fountains are being created by the expert in the industry. </span></span></p>', '2018-10-01 12:04:31', '2018-10-01 12:04:31'),
(14, 'NURSERY SERVICES', 'fa-step-forward', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">&nbsp;Spread in an area of 10sft having a stocks of&nbsp; Variety of&nbsp; seasonal ,ornamental, native, state , oxygenating, pollutant absorbing ,less water absorbing plants ,shrubs ,tree, seeds are available.&nbsp; </span></span></p>', '2018-10-01 12:04:55', '2018-10-01 12:04:55'),
(15, 'GARDEN TOOLS/KITS AND PLANTERS SERVICES', 'fa-area-chart', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">All types of designer eco-friendly, strong and durable planters used in indoor, outdoor and vertical garden are available. Beautifully designed planters stand to enhance the beauty of the indoor and outdoor garden r also available.</span></span></p>', '2018-10-01 12:05:27', '2018-10-01 12:05:27'),
(16, 'CONTRACT FARMING SERVICES', 'fa-jsfiddle', '<p><span style=\"font-size:11.0pt\"><span style=\"font-family:&quot;Calibri&quot;,sans-serif\">To serve the society in a best way, we r promoting contract farming by entering into a contract with the land owner to promote the practise of agriculture, forestry, agribusiness in the guidance of expert. All the necessary support starting from searching a fertile land, crops selection, installation of drip irrigation, labour contract, to sending the crops yields to the markets is being provided. </span></span></p>', '2018-10-01 12:05:54', '2018-10-01 12:05:54'),
(18, 'testing', 'fa-address-card-o', '<h2>We strongly Believe that the garden and office area shall have&nbsp; a&nbsp; reflection of an organisation , and therefore&nbsp; institutions and individulas are engaging agencies offering gardening services and landscapeing solutions.</h2>\r\n\r\n<h1><span style=\"color:#ffffff\"><span style=\"font-family:Arial,Helvetica,sans-serif\">The deterioting level of water, shortage of time, quality of garden services and alarming level of polutions&nbsp;&nbsp;are the challenges being faced by the plants and garden lover.</span></span></h1>\r\n\r\n<p>&nbsp;</p>', '2018-10-14 14:25:40', '2018-10-14 14:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `created_at`, `updated_at`, `title`, `content`, `link`, `image`) VALUES
(1, '2018-07-05 13:39:28', '2018-07-06 16:19:13', 'The Real Empire', 'Presenting The Most Affordable Gardening Solutions and Services', NULL, 'slider/5b3fe3d972abe.jpg'),
(2, '2018-07-05 13:40:59', '2018-07-06 16:19:34', 'The Real Empire', 'Presenting The Most Affordable Gardening Solutions and Services', NULL, 'slider/5b3fe3eeb13d6.jpg'),
(3, '2018-07-05 13:41:12', '2018-07-06 16:19:23', 'The Real Empire', 'Presenting The Most Affordable Gardening Solutions and Services', NULL, 'slider/5b3fe3e3cabed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `created_at`, `updated_at`, `name`, `email`, `mobile`, `image`, `designation`, `facebook`, `twitter`, `google`, `company`, `description`) VALUES
(1, '2018-07-05 13:45:38', '2018-07-06 15:43:42', 'Mary Jane g', 'mary@gmail.com', NULL, 'team/5b3e6e5a8271f.jpg', NULL, '#', '#', '#', NULL, 'Vestibulum'),
(2, '2018-07-05 13:46:29', '2018-07-05 13:46:29', 'Selena', 'Selena@gmail.com', NULL, 'team/5b3e6e8d00f1b.jpg', NULL, NULL, NULL, NULL, NULL, 'Vestibulum'),
(3, '2018-07-05 13:46:52', '2018-07-05 13:46:52', 'Watson', 'Watson@gmail.com', NULL, 'team/5b3e6ea4ad100.jpg', NULL, NULL, NULL, NULL, NULL, 'Watson'),
(4, '2018-07-05 13:47:13', '2018-07-05 13:47:13', 'Steven', 'Steven@gmail.com', NULL, 'team/5b3e6eb95e17b.jpg', NULL, NULL, NULL, NULL, NULL, 'StevenSteven');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Kumar Gaurav', 'gaurav@gmail.com', '$2y$10$UuDNAwQLk1nf9MM7JIqo.O7mv.T.NXoyKjISR2k8j1ClSAPPim3Xu', 'efjsTqC8bVFYBYNT1XpN8x8OQlnsnM11XrSGABuKT5cKPYnEk1Kfm7hqsrul', '2018-07-01 01:09:40', '2018-07-25 02:59:50'),
(3, 'achalgreenempire@gmail.com', 'achalgreenempire@gmail.com', '$2y$10$Gmx3ESVpVrHJLMH/J8X3z.ejHKtXMJsFgHqPiKYBtlw7h/I0ClAwu', 'xipTJ7QD0NNxgavSAn4Nxcuk7ETCNV6OzaqARVTgBdSmXhnm4dP2vY5adDgR', '2018-10-02 10:24:11', '2018-10-02 10:24:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_email_unique` (`email`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonial_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
