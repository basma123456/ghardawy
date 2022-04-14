-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 12:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghardawy`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(191) NOT NULL,
  `upper_paragraphs` longtext NOT NULL,
  `how_we_work_paragraphs` longtext NOT NULL,
  `big_cat` bigint(20) UNSIGNED NOT NULL,
  `first_cat` bigint(20) UNSIGNED NOT NULL,
  `last_cat` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `photo`, `upper_paragraphs`, `how_we_work_paragraphs`, `big_cat`, `first_cat`, `last_cat`, `updated_at`, `created_at`) VALUES
(1, '16496490351.jpg', '{\"ar\":\"pppppppppppar__aar - jjjjjjjjjjjjjjjjjjjjj__ar - sssssssssssssss__ar - aaaaaaaaaaaaaaaa__ar\",\"en\":\"ppppppppppen__en - jjjjjjjjjjjjjjjj_en - sssssssssssssssss__en - aaaaaaaaaaaaaaa__en\",\"ru\":\"pppppppppp__ru - jjjjjjjjjjjjjjjjj_ru - sssssssssssssssss__ru - aaaaaaaaaaaa__ru\"}', '{\"ar\":\"howddddddddddddddd__ar - aaaaaaaaaaaaaaaaaaaaaa__ar - qqqqqqqqqqqqqqqqqqqqqqqq__ar - ooooooooooooooooooooo__ar - wwwwwwwwwwwwwwwwwwww__ar - mmmmmmmmmmmmmmmm__ar - bbbbbbbbbbbbbbbbbbbbbb__ar\",\"en\":\"howdddddddddddddd_en - aaaaaaaaaaaaaaaaaaaaaaaa__en - qqqqqqqqqqqqqqqqqqqqq__en - oooooooooooooooooooooo__en - wwwwwwwwwwwwwwwwwww__en - mmmmmmmmmmmmmm__en - bbbbbbbbbbbbbbbbbbbb__en\",\"ru\":\"howdddddddddddd__ru - aaaaaaaaaaaaaaaaaa__ru - qqqqqqqqqqqqqqqqqqq__ru - ooooooooooooooooooooo__ru - wwwwwwwwwwwwwwwwwww__ru - mmmmmmmmmmmm__ru - bbbbbbbbbbbbbbbbbbb__ru\"}', 120, 29, 28, '2022-04-11 01:50:35', '2022-04-11 01:50:35'),
(4, '16497301261.jpg', '{\"ar\":\"pppppppppppar__aarssssssssssss-jjjjjjjjjjjjjjjj_en-sssssssssssssss__ar-aaaaaaaaaaaaaaaa__ar\",\"en\":\"ppppppppppen__en,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,-jjjjjjjjjjjjjjjj_en-sssssssssssssssss__en-aaaaaaaaaaaaaaa__en\",\"ru\":\"pppppppppp__ru-jjjjjjjjjjjjjjjjj_ru-sssssssssssssssss__ru-aaaaaaaaaaaa__ru\"}', '{\"ar\":\"yhyyhyhy-yhyhyhyh-yhyhyhy-yhhyhy-ertetet-etete-etete\",\"en\":\"hyhyyy-yhyyhyh-hyhyhyh-yhyhyh-etete-etete  dddddddddddddddd-etete\",\"ru\":\"yhhyhyh-yhyhhy-yhyyhy-hyhyhyh-rtter-tet-etete\"}', 31, 33, 45, '2022-04-12 03:58:24', '2022-04-12 00:22:06'),
(5, '16497301261.jpg', '{\"ar\":\"pppppppppppar__aar-jjjjjjjjjjjjjjjj_en-sssssssssssssss__ar-aaaaaaaaaaaaaaaa__ar\",\"en\":\"ppppppppppen__en-jjjjjjjjjjjjjjjj_en-sssssssssssssssss__en-aaaaaaaaaaaaaaa__en\",\"ru\":\"pppppppppp__ru-jjjjjjjjjjjjjjjjj_ru-sssssssssssssssss__ru-aaaaaaaaaaaa__ru\"}', '{\"ar\":\"yhyyhyhy-yhyhyhyh-yhyhyhy-yhhyhy-ertetet-etete-etete\",\"en\":\"hyhyyy-yhyyhyh-hyhyhyh-yhyhyh-etete-etete-etete\",\"ru\":\"yhhyhyh-yhyhhy-yhyyhy-hyhyhyh-rtter-tet-etete\"}', 31, 33, 45, '2022-04-12 03:56:21', '2022-04-12 03:56:21'),
(6, '16497301261.jpg', '{\"ar\":\"pppppppppppar__aarooooooooooooooooooo-jjjjjjjjjjjjjjjj_en-sssssssssssssss__ar-aaaaaaaaaaaaaaaa__ar\",\"en\":\"ppppppppppen__en-jjjjjjjjjjjjjjjj_en-sssssssssssssssss__en-aaaaaaaaaaaaaaa__en\",\"ru\":\"pppppppppp__ru-jjjjjjjjjjjjjjjjj_ru-sssssssssssssssss__ru-aaaaaaaaaaaa__ru\"}', '{\"ar\":\"yhyyhyhy-yhyhyhyh-yhyhyhy-yhhyhy-ertetet-etete-etete\",\"en\":\"hyhyyy-yhyyhyh-hyhyhyh-yhyhyh-etete-etete-etete\",\"ru\":\"yhhyhyh-yhyhhy-yhyyhy-hyhyhyh-rtter-tet-etete\"}', 31, 33, 45, '2022-04-12 03:56:31', '2022-04-12 03:56:31'),
(7, '16497301261.jpg', '{\"ar\":\"pppppppppppar__aaroooooooooooooo-jjjjjjjjjjjjjjjj_en-sssssssssssssss__ar-aaaaaaaaaaaaaaaa__ar\",\"en\":\"ppppppppppen__en-jjjjjjjjjjjjjjjj_en-sssssssssssssssss__en-aaaaaaaaaaaaaaa__en\",\"ru\":\"pppppppppp__ru-jjjjjjjjjjjjjjjjj_ru-sssssssssssssssss__ru-aaaaaaaaaaaa__ru\"}', '{\"ar\":\"yhyyhyhy-yhyhyhyh-yhyhyhy-yhhyhy-ertetet-etete-etete\",\"en\":\"hyhyyy-yhyyhyh-hyhyhyh-yhyhyh-etete-etete-etete\",\"ru\":\"yhhyhyh-yhyhhy-yhyyhy-hyhyhyh-rtter-tet-etete\"}', 127, 126, 125, '2022-04-13 03:34:01', '2022-04-12 03:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `additionals`
--

CREATE TABLE `additionals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('ads','best','special') COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `additionals`
--

INSERT INTO `additionals` (`id`, `title`, `desc`, `type`, `place_id`, `admin_id`, `super_admin_id`, `status`, `created_at`, `updated_at`) VALUES
(18, '{\"ar\":\"اتاتاتاتتاتتتتتتتتتتتتتتتتتتتتتتتتتت\",\"en\":\"lllllllllllllllllllllllllllllllllll\",\"ru\":\"lllllllllllllllllllllllllllllllllll\"}', '{\"ar\":\"اتاتاتاتتاتتتتتتتتتتتتتتتتتتتتتتتتتتاتاتاتاتتاتتتتتتتتتتتتتتتتتتتتتتتتتت\",\"en\":\"llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll\",\"ru\":\"llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll\"}', 'ads', 56, NULL, 1, 1, '2022-04-14 02:36:49', '2022-04-14 02:36:49'),
(19, '{\"ar\":\"ززززززززززززززززززززززززززززز\",\"en\":\"rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\",\"ru\":\"rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\"}', '{\"ar\":\"ززززززززززززززززززززززززززززز\",\"en\":\"rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\",\"ru\":\"rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\"}', 'ads', 55, NULL, 1, 1, '2022-04-14 02:38:01', '2022-04-14 02:38:01'),
(20, '{\"ar\":\"mmmmmmm\",\"en\":\"mmmmmmm\",\"ru\":\"mmmmmmm\"}', '{\"ar\":\"mmmmmmm\",\"en\":\"mmmmmmm\",\"ru\":\"mmmmmmm\"}', 'ads', 54, NULL, 1, 1, '2022-04-14 02:38:50', '2022-04-14 02:38:50'),
(21, '{\"ar\":\"hhhh\",\"en\":\"hhhh\",\"ru\":\"hhhh\"}', '{\"ar\":\"mmmmmmm\",\"en\":\"mmmmmmm\",\"ru\":\"mmmmmmm\"}', 'best', 53, NULL, 1, 1, '2022-04-14 02:39:24', '2022-04-14 02:39:24'),
(22, '{\"ar\":\"hhhh\",\"en\":\"hhhh\",\"ru\":\"hhhh\"}', '{\"ar\":\"mmmmmmm\",\"en\":\"mmmmmmm\",\"ru\":\"mmmmmmm\"}', 'best', 53, NULL, 1, 1, '2022-04-14 02:39:25', '2022-04-14 02:39:25'),
(23, '{\"ar\":\"llllllll\",\"en\":\"llllllll\",\"ru\":\"llllllllmmmmmmmmmmmmmm\"}', '{\"ar\":\"llllllllmmmmmmmmmmmmmm\",\"en\":\"llllllllmmmmmmmmmmmmmm\",\"ru\":\"llllllllmmmmmmmmmmmmmm\"}', 'best', 53, NULL, 1, 1, '2022-04-14 02:40:06', '2022-04-14 02:40:06'),
(24, '{\"ar\":\"ggggg\",\"en\":\"ggggg\",\"ru\":\"wwwwwwwwwww\"}', '{\"ar\":\"llllllllmmmmmmmmmmmmmm\",\"en\":\"llllllllmmmmmmmmmmmmmm\",\"ru\":\"llllllllmmmmmmmmmmmmmm\"}', 'best', 52, NULL, 1, 1, '2022-04-14 02:40:42', '2022-04-14 02:40:42'),
(25, '{\"ar\":\"ggggg\",\"en\":\"ggggg\",\"ru\":\"ggggg\"}', '{\"ar\":\"gggggggggg\",\"en\":\"gggggggggg\",\"ru\":\"gggggggggg\"}', 'special', 53, NULL, 1, 1, '2022-04-14 02:41:25', '2022-04-14 02:41:25'),
(26, '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', 'special', 55, NULL, 1, 1, '2022-04-14 02:42:08', '2022-04-14 02:42:08');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 2,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ggg@email.com', NULL, '$2y$10$cEeeHtoHdXg27vqXUrVFfOcl52DUTj7I0tA.ty6Xw91UDTsNIJpmK', NULL, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apply_for_place`
--

CREATE TABLE `apply_for_place` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `description` varchar(255) NOT NULL,
  `place_progress` varchar(330) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seen` tinyint(1) DEFAULT 0,
  `status` enum('accepted','called','postponed','no_action_yet','rejected') DEFAULT 'no_action_yet',
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_for_place`
--

INSERT INTO `apply_for_place` (`id`, `title`, `description`, `place_progress`, `phone`, `address`, `created_at`, `updated_at`, `seen`, `status`, `admin_id`, `super_admin_id`) VALUES
(1, 'place 1', 'jddjjd', 'gkrglgrl', '444444', 'jdjdjd', '2022-04-09 23:25:05', '2022-04-10 22:06:23', 1, 'accepted', NULL, 1),
(2, 'place 1', 'jddjjd', 'ggggggggggggg', '8886868', 'jdjdjd', '2022-04-10 05:06:51', '2022-04-10 05:11:32', 1, 'no_action_yet', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likes` int(4) DEFAULT NULL,
  `unlikes` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_image` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bottom_images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_page` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `at_front_page` tinyint(4) NOT NULL DEFAULT 0,
  `countPlaces` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `likes`, `unlikes`, `image`, `bg_image`, `bottom_images`, `about_page`, `admin_id`, `super_admin_id`, `status`, `at_front_page`, `countPlaces`, `created_at`, `updated_at`) VALUES
(120, '{\"ar\":\"ةةةةةةةةةةةةةةةةةةةةةة\",\"en\":\"jhjhjh\"}', 1000, 100, '1649799286.jpg', NULL, NULL, '{\"ar\":\"jhjhjhjhjhjhjhjhjhjhjhjh\",\"en\":\"jhjhjhjhjhjhjhjhjh\"}', NULL, 1, 1, 1, 0, '2022-04-12 19:33:02', '2022-04-13 03:26:36'),
(121, '{\"ar\":\"ةةةةةةةةةةةةةةةةةةةةةة\",\"en\":\"consequuntur sed. Excepturi esse tempore neque\"}', 2000, 20, '16497995851.jpg', NULL, NULL, '{\"ar\":\"ةةةةةةةةةةةةةةةةةةةةةة\",\"en\":\"consequuntur sed. Excepturi esse tempore neque\"}', NULL, 1, 1, 0, 0, '2022-04-12 19:39:45', '2022-04-12 19:39:45'),
(122, '{\"ar\":\"ةةةةةةةةةةةةةةةةةةةةةة\",\"en\":\"jhjhjh\"}', 10, 0, '16497996221.jpg', NULL, NULL, '{\"ar\":\"dddddddddddddddddd\",\"en\":\"ddddddddddddddddd\"}', NULL, 1, 1, 0, 1, '2022-04-12 19:40:22', '2022-04-12 20:02:44'),
(123, '{\"ar\":\"additionsadditions\",\"en\":\"consequuntur sed. Excepturi esse tempore neque\"}', 6000, 60, '16498272511.jpg', NULL, NULL, '{\"ar\":\"consequuntur sed. Excepturi esse tempore neque\",\"en\":\"consequuntur sed. Excepturi esse tempore neque\"}', NULL, 1, 1, 1, 1, '2022-04-13 03:20:51', '2022-04-14 02:23:44'),
(124, '{\"ar\":\"ةةةةةةةةةةةةةةةةةةةةةة\",\"en\":\"jhjhjh\"}', 10000, 2, '16498272911.jpg', NULL, NULL, '{\"ar\":\"ةةةةةةةةةةةةةةةةةةةةةة\",\"en\":\"jhjhjh\"}', NULL, 1, 1, 1, 0, '2022-04-13 03:21:31', '2022-04-13 03:26:36'),
(125, '{\"ar\":\"rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\",\"en\":\"rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\"}', 500, 5, '16498274261.jpg', NULL, NULL, '{\"ar\":\"rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\",\"en\":\"rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\"}', NULL, 1, 1, 1, 1, '2022-04-13 03:23:46', '2022-04-14 02:21:48'),
(126, '{\"ar\":\"kkkkkkkkkkkkkkkk\",\"en\":\"kkkkkkkkkkkkkkkk\"}', 301, 4, '16498274671.jpg', NULL, NULL, '{\"ar\":\"kkkkkkkkkkkkkkkk\",\"en\":\"kkkkkkkkkkkkkkkk\"}', NULL, 1, 1, 1, 1, '2022-04-13 03:24:27', '2022-04-14 02:20:00'),
(127, '{\"ar\":\"ةةةةة\",\"en\":\"jjjhhhhhhhhhhhhhh\"}', 22, 4, '16498275011.jpg', NULL, NULL, '{\"ar\":\"kkkkkkkkkkkkkkkk\",\"en\":\"kkkkkkkkkkkkkkkk\"}', NULL, 1, 1, 1, 1, '2022-04-13 03:25:01', '2022-04-14 02:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `likes` tinyint(4) NOT NULL,
  `unlikes` tinyint(4) NOT NULL,
  `seen` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `liked_unliked_places`
--

CREATE TABLE `liked_unliked_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `liked_status` tinyint(1) DEFAULT 0,
  `unliked_status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mains`
--

CREATE TABLE `mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bg_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1648997754.jpg',
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `top_desc` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `left_desc` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_desc` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `right_desc` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `left_upper_cat` bigint(20) UNSIGNED NOT NULL,
  `right_upper_cat` bigint(20) UNSIGNED NOT NULL,
  `screen_cat` bigint(20) UNSIGNED NOT NULL,
  `bottom_big_cat` bigint(20) UNSIGNED NOT NULL,
  `bottom_left_upper_cat` bigint(20) UNSIGNED NOT NULL,
  `bottom_left_lower_cat` bigint(20) UNSIGNED NOT NULL,
  `at_front_page` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mains`
--

INSERT INTO `mains` (`id`, `bg_photo`, `title1`, `title2`, `top_desc`, `left_desc`, `middle_desc`, `right_desc`, `website`, `left_upper_cat`, `right_upper_cat`, `screen_cat`, `bottom_big_cat`, `bottom_left_upper_cat`, `bottom_left_lower_cat`, `at_front_page`, `created_at`, `updated_at`) VALUES
(132, '16498275961.jpg', '{\"ar\":\"ةةةةةةةةةةةةةةةةةةةةةة\",\"en\":\"jhjhjh\",\"ru\":\"zacks\"}', '{\"ar\":\"العنوان 2lllllllllllllllllllllllllllll\",\"en\":\"jhjhjh\",\"ru\":\"title2\"}', '{\"ar\":\"kkkkkkkkkkkkkkkk\",\"en\":\"kkkkkkkkkkkkkkkk\",\"ru\":\"kkkkkkkkkkkkkkkk\"}', '{\"ar\":\"kkkkkkkkkkkkkkkk\",\"en\":\"kkkkkkkkkkkkkkkk\",\"ru\":\"kkkkkkkkkkkkkkkk\"}', '{\"ar\":\"kkkkkkkkkkkkkkkk\",\"en\":\"kkkkkkkkkkkkkkkk\",\"ru\":\"kkkkkkkkkkkkkkkk\"}', '{\"ar\":\"kkkkkkkkkkkkkkkk\",\"en\":\"kkkkkkkkkkkkkkkk\",\"ru\":\"kkkkkkkkkkkkkkkk\"}', 'www.ghardawy.com', 127, 126, 125, 124, 120, 123, 0, '2022-04-13 03:26:36', '2022-04-13 03:26:36');

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
(4, '2022_03_16_152439_create_admins_table', 2),
(5, '2022_03_16_161620_create_super_admins_table', 3),
(6, '2022_03_16_163702_create_sellers_table', 4),
(7, '2022_03_18_012333_create_roles_table', 5),
(9, '2022_03_18_182121_create_roles_table', 6),
(10, '2022_03_21_182507_create_categories_table', 7),
(11, '2022_03_23_011652_create_places_table', 8),
(12, '2022_03_23_214527_create_additionals_table', 9),
(13, '2022_03_23_222208_create_comments_table', 10),
(14, '2022_03_25_182647_create_regions_table', 11),
(15, '2022_03_25_192849_create_place_regions_table', 12),
(16, '2022_03_29_151114_create_mains_table', 13),
(17, '2022_04_03_000345_create_news_cats_table', 13),
(18, '2022_04_03_011639_create_news_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `newss`
--

CREATE TABLE `newss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `second_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `third_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_cat_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newss`
--

INSERT INTO `newss` (`id`, `main_p`, `first_p`, `second_p`, `third_p`, `image`, `label`, `news_cat_id`, `status`, `admin_id`, `super_admin_id`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"dfjlkfksdjfjdsffffffffffffffffffffffffffffffffffffffff\",\"en\":\"fdkfdfjsdfjsdfffffffffffffffffffffffffffff\",\"ru\":\"kffndfkjdffk\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '1649034659.jpg', '{\"ru\":null}', 1, 0, NULL, 1, '2022-04-03 21:05:13', '2022-04-03 23:10:59'),
(3, '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"fdkfdfjsdfjsd\",\"ru\":\"kffndfkjdffk\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '1649043366.jpg', '{\"ru\":null}', 5, 1, NULL, 1, '2022-04-03 22:59:51', '2022-04-04 01:36:06'),
(4, '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"fdkfdfjsdfjsd\",\"ru\":\"kffndfkjdffk\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '1649043346.jpg', '{\"ru\":null}', 5, 1, NULL, 1, '2022-04-03 22:59:59', '2022-04-04 01:35:46'),
(5, '{\"ar\":\"ffff\",\"en\":\"fdkfdfjsdfjsd\",\"ru\":\"kffndfkjdffk\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '{\"ar\":\"dfjlkfksdjfjdsf\",\"en\":\"dfjlkfksdjfjdsf\",\"ru\":\"dfjlkfksdjfjdsf\"}', '1649798323.jpg', '{\"ru\":null}', 5, 1, NULL, 1, '2022-04-03 23:00:10', '2022-04-12 19:18:43'),
(8, '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', '16499119901.jpg', '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', 4, 1, NULL, 1, '2022-04-14 02:53:10', '2022-04-14 02:53:10'),
(9, '{\"ar\":\"dddddddddddddddd\",\"en\":\"dddddddddddddddd\",\"ru\":\"dddddddddddddddd\"}', '{\"ar\":\"dddddddddddddddd\",\"en\":\"dddddddddddddddd\",\"ru\":\"dddddddddddddddd\"}', '{\"ar\":\"dddddddddddddddd\",\"en\":\"dddddddddddddddd\",\"ru\":\"dddddddddddddddd\"}', '{\"ar\":\"dddddddddddddddd\",\"en\":\"dddddddddddddddd\",\"ru\":\"dddddddddddddddd\"}', '16499120991.jpg', '{\"ar\":\"dddddddddddddddd\",\"en\":\"dddddddddddddddd\",\"ru\":\"dddddddddddddddd\"}', 2, 1, NULL, 1, '2022-04-14 02:54:59', '2022-04-14 02:54:59'),
(10, '{\"ar\":\"ffffffffffffff\",\"en\":\"ffffffffffffff\",\"ru\":\"ffffffffffffff\"}', '{\"ar\":\"ffffffffffffff\",\"en\":\"ffffffffffffff\",\"ru\":\"ffffffffffffff\"}', '{\"ar\":\"ffffffffffffff\",\"en\":\"ffffffffffffff\",\"ru\":\"ffffffffffffff\"}', '{\"ar\":\"ffffffffffffff\",\"en\":\"ffffffffffffff\",\"ru\":\"ffffffffffffff\"}', '16499122061.jpg', '{\"ar\":\"ffffffffffffff\",\"en\":\"ffffffffffffff\",\"ru\":\"ffffffffffffff\"}', 1, 1, NULL, 1, '2022-04-14 02:56:46', '2022-04-14 02:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `news_cats`
--

CREATE TABLE `news_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_cats`
--

INSERT INTO `news_cats` (`id`, `title`, `status`, `admin_id`, `super_admin_id`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"oiijohipojijgggggggggggggg\",\"en\":\"iiirdre\",\"ru\":null}', 1, NULL, 1, '2022-04-03 14:20:35', '2022-04-03 18:29:04'),
(2, '{\"ar\":\"oiijohipojij\",\"en\":\"iiirdre\",\"ru\":null}', 1, NULL, NULL, '2022-04-03 16:08:50', '2022-04-03 16:08:50'),
(3, '{\"ar\":\"oiijohipojij\",\"en\":\"iiirdre\",\"ru\":null}', 1, NULL, NULL, '2022-04-03 16:09:04', '2022-04-03 16:09:04'),
(4, '{\"ar\":\"oiijohipojij\",\"en\":\"iiirdre\",\"ru\":null}', 1, NULL, NULL, '2022-04-03 16:09:56', '2022-04-03 16:09:56'),
(5, '{\"ar\":\"oiijohipojij\",\"en\":\"iiirdre\",\"ru\":null}', 1, NULL, NULL, '2022-04-03 16:10:26', '2022-04-03 16:10:26'),
(6, '{\"ar\":\"oiijohipojij\",\"en\":\"iiirdre\",\"ru\":null}', 1, NULL, NULL, '2022-04-03 16:10:31', '2022-04-03 16:10:31');

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
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(800) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(800) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_progress` varchar(330) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `likes` int(11) DEFAULT NULL,
  `unlikes` int(11) DEFAULT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '1648997754.jpg',
  `menu` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL DEFAULT '1648997754.jpg',
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `joining_date` date DEFAULT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `title`, `address`, `email`, `phone`, `desc`, `place_progress`, `seen`, `status`, `likes`, `unlikes`, `image`, `menu`, `seller_id`, `category_id`, `joining_date`, `admin_id`, `super_admin_id`, `created_at`, `updated_at`) VALUES
(52, '{\"ar\":\"ةةةةةةةةةةةةةةةةةةةةةة\",\"en\":\"consequuntur sed. Excepturi esse tempore neque\",\"ru\":\"jhjhjh\"}', '{\"ar\":\"اااااااااااااااااااااااااااااا\",\"en\":\"ddddddddddddddddddddddd\",\"ru\":\"ssssssssssssssssss\"}', 'ggg@email.com', '8886868', '{\"ar\":\"ثثثثثثثثثثثثثثثثثثثثثثثثصصصصصصصصصصصصصصصصصصصص\",\"en\":\"ppppppppppppppppppppppppp\",\"ru\":\"aaaaaaaaaaaaaaaaaaaa\"}', NULL, NULL, 1, 10, 0, '[\"16497999663.jpg\",\"16497999664.jpg\",\"16497999665.jpg\",\"16497999666.jpg\",\"16497999667.jpg\",\"16497999668.jpg\",\"16497999669.jpg\"]', '[\"164979996611.jpg\",\"164979996612.jpg\",\"164979996613.jpg\",\"164979996614.jpg\"]', 15, 122, '2022-04-12', NULL, 1, '2022-04-12 19:46:06', '2022-04-12 20:02:44'),
(53, '{\"ar\":\"hhhh\",\"en\":\"hhhh\",\"ru\":\"hhhh\"}', '{\"ar\":\"hhhh\",\"en\":\"hhhh\",\"ru\":\"hhhh\"}', 'ggg@email.com', '2222222222222222222', '{\"ar\":\"hhhh\",\"en\":\"hhhh\",\"ru\":\"hhhh\"}', NULL, NULL, 1, 20, 2, '[\"16499098633.jpg\",\"16499098634.jpg\",\"16499098635.jpg\",\"16499098636.jpg\",\"16499098637.jpg\",\"16499098638.jpg\",\"16499098639.jpg\"]', '[\"164990986311.jpg\",\"164990986312.jpg\",\"164990986313.jpg\",\"164990986314.jpg\"]', 15, 127, '2022-04-14', NULL, 1, '2022-04-14 02:17:43', '2022-04-14 02:17:43'),
(54, '{\"ar\":\"llllllll\",\"en\":\"llllllll\",\"ru\":\"llllllll\"}', '{\"ar\":\"llllllllllllllll\",\"en\":\"llllllllllllllll\",\"ru\":\"llllllllllllllll\"}', 'ggg@email.comllllllll', '2222222222222222222', '{\"ar\":\"llllllllllllllll\",\"en\":\"llllllllllllllll\",\"ru\":\"llllllllllllllll\"}', NULL, NULL, 1, 300, 3, '[\"16499100003.jpg\",\"16499100004.jpg\",\"16499100005.jpg\",\"16499100006.jpg\",\"16499100007.jpg\",\"16499100008.jpg\",\"16499100009.jpg\"]', '[\"164991000011.jpg\",\"164991000012.jpg\",\"164991000013.jpg\",\"164991000014.jpg\"]', 20, 126, '2022-04-15', NULL, 1, '2022-04-14 02:20:00', '2022-04-14 02:20:00'),
(55, '{\"ar\":\"ggggg\",\"en\":\"ggggg\",\"ru\":\"ggggg\"}', '{\"ar\":\"gggggggggg\",\"en\":\"gggggggggg\",\"ru\":\"gggggggggg\"}', 'ggg@email.comllllllllggggg', '2222222222222222222', '{\"ar\":\"gggggggggg\",\"en\":\"gggggggggg\",\"ru\":\"gggggggggg\"}', NULL, NULL, 1, 400, 4, '[\"16499101083.jpg\",\"16499101084.jpg\",\"16499101085.jpg\",\"16499101086.jpg\",\"16499101087.jpg\",\"16499101088.jpg\",\"16499101089.jpg\"]', '[\"164991010811.jpg\",\"164991010812.jpg\",\"164991010813.jpg\",\"164991010814.jpg\"]', 21, 125, '2022-04-13', NULL, 1, '2022-04-14 02:21:48', '2022-04-14 02:21:48'),
(56, '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', '{\"ar\":\"wwwwwwwwwwwwwwwwwwwwww\",\"en\":\"wwwwwwwwwwwwwwwwwwwwww\",\"ru\":\"wwwwwwwwwwwwwwwwwwwwww\"}', 'ggg@email.comwwwwwwwwwww', '2222222222222222222', '{\"ar\":\"wwwwwwwwwwwwwwwwwwwwww\",\"en\":\"wwwwwwwwwwwwwwwwwwwwww\",\"ru\":\"wwwwwwwwwwwwwwwwwwwwww\"}', NULL, NULL, 0, 4000, 40, '[\"16499102233.jpg\",\"16499102234.jpg\",\"16499102235.jpg\",\"16499102236.jpg\",\"16499102237.jpg\",\"16499102238.jpg\",\"16499102239.jpg\"]', '[\"164991022311.jpg\",\"164991022312.jpg\",\"164991022313.jpg\",\"164991022314.jpg\"]', 21, 123, '2022-04-11', NULL, 1, '2022-04-14 02:23:43', '2022-04-14 02:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `place_regions`
--

CREATE TABLE `place_regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `place_regions`
--

INSERT INTO `place_regions` (`id`, `place_id`, `region_id`, `address`, `desc`, `phone`, `admin_id`, `super_admin_id`, `created_at`, `updated_at`) VALUES
(3, 52, 4, '{\"ar\":\"kkkkkkkkkkkkk\",\"en\":\"kkkkkkkkkkkkk\",\"ru\":\"kkkkkkkkkkkkk\"}', '{\"ar\":\"kkkkkkkkkkkkkkkkkkkkkkkkkk\",\"en\":\"kkkkkkkkkkkkkkkkkkkkkkkkkk\",\"ru\":\"kkkkkkkkkkkkkkkkkkkkkkkkkk\"}', '2222222222222222222', NULL, 1, '2022-04-14 00:16:45', '2022-04-14 00:16:45'),
(4, 56, 3, '{\"ar\":\"kkkkkkkkkkkkk\",\"en\":\"kkkkkkkkkkkkk\",\"ru\":\"kkkkkkkkkkkkk\"}', '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', '2222222222222222222', NULL, 1, '2022-04-14 02:26:37', '2022-04-14 02:26:37'),
(5, 56, 4, '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', '{\"ar\":\"wwwwwwwwwww\",\"en\":\"wwwwwwwwwww\",\"ru\":\"wwwwwwwwwww\"}', '5555555555555555', NULL, 1, '2022-04-14 02:27:25', '2022-04-14 02:27:25'),
(6, 55, 3, '{\"ar\":\"خخخخخخخخخخخخخخخخخ\",\"en\":\"jjjjjjjjjjjjjjjjjjjjjjjjjjj\",\"ru\":\"jjjjjjjjjjjjjjjjjjjjjjjjjjj\"}', '{\"ar\":\"خخخخخخخخخخخخخخخخخ\",\"en\":\"jjjjjjjjjjjjjjjjjjjjjjjjjjj\",\"ru\":\"jjjjjjjjjjjjjjjjjjjjjjjjjjj\"}', '77777777777', NULL, 1, '2022-04-14 02:28:52', '2022-04-14 02:28:52'),
(7, 54, 4, '{\"ar\":\"hhhhhhhhhhhhhhhhhh\",\"en\":\"hhhhhhhhhhhhhhhhhh\",\"ru\":\"hhhhhhhhhhhhhhhhhh\"}', '{\"ar\":\"hhhhhhhhhhhhhhhhhh\",\"en\":\"hhhhhhhhhhhhhhhhhh\",\"ru\":\"hhhhhhhhhhhhhhhhhh\"}', '33333333333333333', NULL, 1, '2022-04-14 02:29:59', '2022-04-14 02:29:59'),
(8, 53, 3, '{\"ar\":\"ffffffffffffffff\",\"en\":\"ffffffffffffffff\",\"ru\":\"ffffffffffffffff\"}', '{\"ar\":\"ffffffffffffffff\",\"en\":\"ffffffffffffffff\",\"ru\":\"ffffffffffffffff\"}', '44444444444444444', NULL, 1, '2022-04-14 02:31:20', '2022-04-14 02:31:20'),
(9, 52, 3, '{\"ar\":\"eeeeeeeeeeeeeeeeeee\",\"en\":\"eeeeeeeeeeeeeeeeeee\",\"ru\":\"eeeeeeeeeeeeeeeeeee\"}', '{\"ar\":\"eeeeeeeeeeeeeeeeeee\",\"en\":\"eeeeeeeeeeeeeeeeeee\",\"ru\":\"eeeeeeeeeeeeeeeeeee\"}', '111111111111111111111111111111', NULL, 1, '2022-04-14 02:32:25', '2022-04-14 02:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `government` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(800) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `government`, `city`, `district`, `desc`, `admin_id`, `super_admin_id`, `created_at`, `updated_at`) VALUES
(2, '{\"ar\":\"س\",\"en\":\"gfggf\",\"ru\":\"gfggf\"}', '{\"ar\":\"ب\",\"en\":\"gfggf\",\"ru\":\"gfggf\"}', '{\"ar\":\"و\",\"en\":\"gfggf\",\"ru\":\"gfggf\"}', '{\"ar\":\"تاتاتاتاتا\",\"en\":\"gfggf\",\"ru\":\"gfggf\"}', NULL, 1, '2022-03-25 20:11:36', '2022-03-25 22:43:02'),
(3, '{\"ar\":\"جيزة\",\"en\":\"giza\",\"ru\":\"giza\"}', '{\"ar\":\"اكتوبر\",\"en\":\"october\",\"ru\":\"october\"}', '{\"ar\":\"ننننن\",\"en\":\"kkkkkkkkkkkkk\",\"ru\":\"pppppppppppppp\"}', '{\"ar\":\"نننننننننننننن\",\"en\":\"kkkkkkkkkkk\",\"ru\":\"ppppppppppppppppp\"}', NULL, 1, '2022-04-14 00:04:58', '2022-04-14 00:04:58'),
(4, '{\"ar\":\"قاهرة\",\"en\":\"cairo\",\"ru\":\"cairo\"}', '{\"ar\":\"تااتاتات\",\"en\":\"jkjkjkjkk\",\"ru\":\"ghghghh\"}', '{\"ar\":\"ننننن\",\"en\":\"kkkkkkkkkkkkk\",\"ru\":\"pppppppppppppp\"}', '{\"ar\":\"تتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتت\",\"en\":\"kkkkkkkkkkkkk\",\"ru\":\"kkkkkkkkkkkkk\"}', NULL, 1, '2022-04-14 00:06:23', '2022-04-14 00:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permessions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`permessions`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `permessions`, `created_at`, `updated_at`) VALUES
(1, '{\"ar\":\"المدير الرئيسي\",\"en\":\"Super Admin\"}', '[\"products\",\"comments\",\"tags\",\"add_sellers_status\",\"photos\"]', '2022-03-18 17:15:31', '2022-03-18 23:30:54'),
(2, '{\"ar\":\"مدير\",\"en\":\"manager\"}', '[\"products\",\"photos\"]', '2022-03-18 19:22:23', '2022-03-18 23:31:11'),
(3, '{\"ar\":\"بائع\",\"en\":\"Seller\"}', '[\"tags\",\"comments\",\"photos\"]', '2022-03-18 21:12:19', '2022-03-18 23:31:57'),
(4, '{\"ar\":\"عميل\",\"en\":\"Customer\"}', '[\"products\"]', '2022-03-18 23:32:33', '2022-03-18 23:32:33');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `joining_date` date DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `status`, `joining_date`, `address`, `admin_id`, `super_admin_id`, `created_at`, `updated_at`) VALUES
(15, '{\"ar\":\"لبيبيب\",\"en\":\"gggdf\"}', 'ggg@email.com', NULL, '$2y$10$cEeeHtoHdXg27vqXUrVFfOcl52DUTj7I0tA.ty6Xw91UDTsNIJpmK', NULL, NULL, 0, NULL, '{\"ar\":\"اارباب يييل سلسلل ساسا\",\"en\":\"ghgh fjfj fjfj\"}', NULL, 1, '2022-03-19 16:25:06', '2022-03-19 23:10:55'),
(20, '{\"ar\":\"بائع3\",\"en\":\"seller3\"}', 'lklklk@email.co', NULL, '$2y$10$gdFMIooBvs6n7KakUjr5Z.6U8tsPJ4PCWHdL7ECA7vsGxnqxRioHu', NULL, 3, 1, '2022-03-14', '{\"ar\":\"ملتقتخقن\",\"en\":\"fdffjk\"}', NULL, 1, '2022-03-19 18:20:15', '2022-03-19 23:12:02'),
(21, '{\"ar\":\"بائع4\",\"en\":\"seller4\"}', 'jjhjghgh@email.comggggg', NULL, '$2y$10$z4QG.xr2KdFLj10mD1R/4ufmVatJ0/YLYckoM7UDBneeofBYXUy4q', NULL, 3, 1, '2022-02-13', '{\"ar\":\"يمبنميبين\",\"en\":\"lfdfkldjf\"}', NULL, 1, '2022-03-19 18:21:17', '2022-04-14 07:21:28'),
(22, '{\"ar\":\"بائ3\",\"en\":\"mmm\"}', 'ggg@email.coma', NULL, '$2y$10$BELEwrBQakqnTfC08bo4aem3CyfTpAqAI6N2AGXxQYpFnc1SH5VwW', NULL, NULL, 0, '2022-03-02', '{\"ar\":\"انتتنتن\",\"en\":\"yuliuyyh\"}', NULL, 1, '2022-03-19 23:16:20', '2022-03-23 18:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `super_admins`
--

CREATE TABLE `super_admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `super_admins`
--

INSERT INTO `super_admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'super admin', 'ggg@email.com', NULL, '$2y$10$oyeBgt.s4P01V1lpIQdW6Olz/7guWfiqPtgllUIbUkaO2hNflCTiK', NULL, 1, 1, NULL, NULL);

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
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 4,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `super_admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `status`, `admin_id`, `super_admin_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'basma', 'ggg@email.com', NULL, '$2y$10$oyeBgt.s4P01V1lpIQdW6Olz/7guWfiqPtgllUIbUkaO2hNflCTiK', 1, 1, NULL, NULL, NULL, '2022-03-16 16:16:34', '2022-03-16 16:16:34'),
(6, 'basma', 'gggg@email.com', NULL, '$2y$10$SynJtYbKHUOtzIL0tiWbT.MWxHtH0JhCkXrQ.XyxVlZawAo8AF6ey', 1, 1, NULL, NULL, NULL, '2022-03-16 23:23:46', '2022-03-16 23:23:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `additionals`
--
ALTER TABLE `additionals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `additionals_place_id_foreign` (`place_id`),
  ADD KEY `additionals_admin_id_foreign` (`admin_id`),
  ADD KEY `additionals_super_admin_id_foreign` (`super_admin_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_ibfk_1` (`role_id`);

--
-- Indexes for table `apply_for_place`
--
ALTER TABLE `apply_for_place`
  ADD PRIMARY KEY (`id`),
  ADD KEY `super_admin_id` (`super_admin_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_admin_id_foreign` (`admin_id`),
  ADD KEY `categories_super_admin_id_foreign` (`super_admin_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_place_id_foreign` (`place_id`),
  ADD KEY `comments_admin_id_foreign` (`admin_id`),
  ADD KEY `comments_super_admin_id_foreign` (`super_admin_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `liked_unliked_places`
--
ALTER TABLE `liked_unliked_places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `liked_unliked_places_ibfk_2` (`place_id`);

--
-- Indexes for table `mains`
--
ALTER TABLE `mains`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bottom_big_cat` (`bottom_big_cat`),
  ADD KEY `bottom_left_lower_cat` (`bottom_left_lower_cat`),
  ADD KEY `bottom_left_upper_cat` (`bottom_left_upper_cat`),
  ADD KEY `left_upper_cat` (`left_upper_cat`),
  ADD KEY `right_upper_cat` (`right_upper_cat`),
  ADD KEY `screen_cat` (`screen_cat`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newss`
--
ALTER TABLE `newss`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newss_news_cat_id_foreign` (`news_cat_id`),
  ADD KEY `newss_admin_id_foreign` (`admin_id`),
  ADD KEY `newss_super_admin_id_foreign` (`super_admin_id`);

--
-- Indexes for table `news_cats`
--
ALTER TABLE `news_cats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_cats_admin_id_foreign` (`admin_id`),
  ADD KEY `news_cats_super_admin_id_foreign` (`super_admin_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `places_seller_id_foreign` (`seller_id`),
  ADD KEY `places_category_id_foreign` (`category_id`),
  ADD KEY `places_admin_id_foreign` (`admin_id`),
  ADD KEY `places_super_admin_id_foreign` (`super_admin_id`);

--
-- Indexes for table `place_regions`
--
ALTER TABLE `place_regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_regions_place_id_foreign` (`place_id`),
  ADD KEY `place_regions_region_id_foreign` (`region_id`),
  ADD KEY `place_regions_admin_id_foreign` (`admin_id`),
  ADD KEY `place_regions_super_admin_id_foreign` (`super_admin_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_admin_id_foreign` (`admin_id`),
  ADD KEY `regions_super_admin_id_foreign` (`super_admin_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`),
  ADD KEY `sellers_ibfk_1` (`role_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `super_admin_id` (`super_admin_id`);

--
-- Indexes for table `super_admins`
--
ALTER TABLE `super_admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `super_admins_email_unique` (`email`),
  ADD KEY `super_admins_ibfk_1` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_ibfk_1` (`role_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `super_admin_id` (`super_admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `additionals`
--
ALTER TABLE `additionals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_for_place`
--
ALTER TABLE `apply_for_place`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liked_unliked_places`
--
ALTER TABLE `liked_unliked_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mains`
--
ALTER TABLE `mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `newss`
--
ALTER TABLE `newss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `news_cats`
--
ALTER TABLE `news_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `place_regions`
--
ALTER TABLE `place_regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `super_admins`
--
ALTER TABLE `super_admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `additionals`
--
ALTER TABLE `additionals`
  ADD CONSTRAINT `additionals_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `additionals_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `additionals_super_admin_id_foreign` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `apply_for_place`
--
ALTER TABLE `apply_for_place`
  ADD CONSTRAINT `apply_for_place_ibfk_1` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `apply_for_place_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `categories_super_admin_id_foreign` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_super_admin_id_foreign` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `liked_unliked_places`
--
ALTER TABLE `liked_unliked_places`
  ADD CONSTRAINT `liked_unliked_places_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `liked_unliked_places_ibfk_2` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mains`
--
ALTER TABLE `mains`
  ADD CONSTRAINT `mains_ibfk_1` FOREIGN KEY (`bottom_big_cat`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mains_ibfk_2` FOREIGN KEY (`bottom_left_lower_cat`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mains_ibfk_3` FOREIGN KEY (`bottom_left_upper_cat`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mains_ibfk_4` FOREIGN KEY (`left_upper_cat`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mains_ibfk_6` FOREIGN KEY (`right_upper_cat`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mains_ibfk_7` FOREIGN KEY (`screen_cat`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `newss`
--
ALTER TABLE `newss`
  ADD CONSTRAINT `newss_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `newss_news_cat_id_foreign` FOREIGN KEY (`news_cat_id`) REFERENCES `news_cats` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `newss_super_admin_id_foreign` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `news_cats`
--
ALTER TABLE `news_cats`
  ADD CONSTRAINT `news_cats_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `news_cats_super_admin_id_foreign` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `places_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `places_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `sellers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `places_super_admin_id_foreign` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `place_regions`
--
ALTER TABLE `place_regions`
  ADD CONSTRAINT `place_regions_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `place_regions_place_id_foreign` FOREIGN KEY (`place_id`) REFERENCES `places` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `place_regions_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `place_regions_super_admin_id_foreign` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `regions_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `regions_super_admin_id_foreign` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `sellers_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sellers_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `sellers_ibfk_3` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `super_admins`
--
ALTER TABLE `super_admins`
  ADD CONSTRAINT `super_admins_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`super_admin_id`) REFERENCES `super_admins` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
