-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2015 at 01:00 PM
-- Server version: 5.5.32-cll-lve
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `folio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'vero', 'Voluptate eos praesentium fugit harum distinctio. Tempora quaerat est modi est. Aspernatur suscipit architecto molestiae ut velit. Facere ab id nobis.', '2015-03-16 10:57:38', '2015-03-16 10:57:38'),
(2, 'amet', 'Non repellat aspernatur aliquam est cum sed dolor. Labore possimus nihil possimus labore voluptate. Ut velit voluptas quis et. Eos sed ex voluptate deserunt veniam a. Consectetur maiores laudantium et sed voluptatum. Perspiciatis voluptatum quo voluptatibus adipisci rerum.', '2015-03-16 10:57:38', '2015-03-16 10:57:38'),
(3, 'quia', 'Deserunt voluptate quia consequatur quia cum. Dolores amet in at dolore non. Blanditiis rerum et harum odit dolorem sed eum est. Iure ut vero rem laudantium in ex. Ullam soluta aliquid et culpa aut. Dolores rerum neque aut voluptates quaerat repellendus.', '2015-03-16 10:57:38', '2015-03-16 10:57:38'),
(4, 'exercitationem', 'Sed doloremque quo excepturi nobis sunt reiciendis. Nisi eos earum reprehenderit excepturi. Exercitationem in saepe cum quo. Aut at vel eum veniam sequi.', '2015-03-16 10:57:39', '2015-03-16 10:57:39'),
(5, 'voluptatem', 'Reprehenderit in quasi sed doloribus ut. Aliquid voluptatum animi sit dolores tempora. Corporis consequatur facere eos ab. Qui et sapiente qui culpa adipisci suscipit fugiat.', '2015-03-16 10:57:39', '2015-03-16 10:57:39');

-- --------------------------------------------------------

--
-- Table structure for table `category_work`
--

CREATE TABLE IF NOT EXISTS `category_work` (
  `category_id` int(10) unsigned NOT NULL,
  `work_id` int(10) unsigned NOT NULL,
  KEY `category_work_category_id_index` (`category_id`),
  KEY `category_work_work_id_index` (`work_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_work`
--

INSERT INTO `category_work` (`category_id`, `work_id`) VALUES
(2, 13),
(1, 14),
(2, 7),
(2, 17),
(4, 15),
(3, 10),
(5, 20),
(1, 2),
(3, 5),
(3, 20),
(5, 2),
(1, 2),
(4, 16),
(1, 10),
(3, 13),
(4, 16),
(4, 14),
(2, 4),
(1, 4),
(2, 17),
(5, 3),
(1, 7),
(1, 10),
(2, 16),
(3, 17),
(2, 6),
(3, 19),
(3, 17),
(5, 2),
(3, 14),
(2, 7),
(1, 5),
(4, 8),
(1, 13),
(4, 3),
(1, 9),
(5, 13),
(5, 13),
(1, 19),
(4, 13),
(3, 14),
(3, 3),
(2, 9),
(2, 11),
(4, 10),
(1, 14),
(5, 20),
(3, 12),
(4, 12),
(1, 7),
(4, 5),
(4, 15),
(1, 20),
(3, 18),
(5, 5),
(3, 14),
(1, 15),
(5, 10),
(1, 15),
(5, 20),
(3, 20),
(2, 8),
(3, 6),
(3, 15),
(1, 2),
(1, 5),
(2, 18),
(4, 7),
(5, 12),
(1, 17),
(3, 5),
(2, 1),
(1, 1),
(1, 4),
(1, 18),
(4, 6),
(1, 3),
(3, 19),
(2, 3),
(4, 15),
(2, 18),
(4, 18),
(1, 4),
(1, 10),
(3, 1),
(4, 12),
(5, 6),
(5, 15),
(3, 19),
(5, 7),
(2, 19),
(5, 3),
(2, 1),
(1, 2),
(5, 10),
(4, 16),
(1, 10),
(4, 11),
(5, 19),
(2, 4),
(1, 22),
(2, 22),
(3, 22),
(4, 22),
(1, 23),
(2, 23),
(3, 23),
(1, 24),
(2, 24),
(3, 24),
(4, 24),
(5, 24);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quote` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL,
  `replied` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `quote`, `message`, `read`, `replied`, `created_at`, `updated_at`) VALUES
(1, 'asdsdasd', '', 'none', 'AAsAS', 1, 1, '2015-03-18 14:08:19', '2015-03-18 14:08:19'),
(2, 'Peter Bikundo', 'binmonk@live.com', 'none', 'asdadasdasdas', 0, 0, '2015-03-18 14:27:54', '2015-03-18 14:27:54'),
(3, 'perwqrwqeqw sadasdad', 'binmonk@live.com', 'none', 'asdasdassa', 0, 0, '2015-03-18 14:30:33', '2015-03-18 14:30:33'),
(4, 'asdasdsa', 'binmonk@live.com', 'none', 'asdasdasdsa', 0, 0, '2015-03-18 14:32:12', '2015-03-18 14:32:12'),
(5, 'asdasdasdas', 'binmonk@live.com', 'none', 'sdsfsdfdf', 1, 0, '2015-03-18 14:34:55', '2015-03-18 14:34:55'),
(6, 'asdasdsad', 'binmonk@live.com', 'none', 'sdasdsdassd', 0, 0, '2015-03-18 14:39:28', '2015-03-18 14:39:28'),
(7, 'asdasdasd', 'binmonk@live.com', 'none', 'asdasasdsdas', 0, 0, '2015-03-18 14:41:40', '2015-03-18 14:41:40'),
(8, 'asasdsads', 'binmonk@live.com', 'none', 'asdsdasd', 0, 0, '2015-03-18 14:42:59', '2015-03-18 14:42:59'),
(9, 'sadas', 'bikundo.peter@gmail.com', 'none', 'DSasaSAS', 0, 0, '2015-03-18 14:43:57', '2015-03-18 14:43:57'),
(10, 'asdasdasd', 'binmonk@live.com', 'none', 'sdasdasdsa', 0, 0, '2015-03-18 14:47:24', '2015-03-18 14:47:24'),
(11, 'asdasdsad', 'binmonk@live.com', 'none', 'asdasdasddasdas', 0, 0, '2015-03-18 14:52:10', '2015-03-18 14:52:10'),
(12, 'Peter Bikundo', 'bikundo.peter@gmail.com', 'none', 'asdasdasdsd', 0, 0, '2015-03-18 14:58:59', '2015-03-18 14:58:59'),
(13, 'asdasdasdsa', 'binmonk@live.com', 'none', 'asdasdasdsa', 0, 0, '2015-03-18 15:04:58', '2015-03-18 15:04:58'),
(14, 'adasdsad', 'binmonk@live.com', 'none', 'sdsfds', 0, 0, '2015-03-18 15:06:32', '2015-03-18 15:06:32'),
(15, 'perwqrwqeqw sadasdad', 'binmonk@live.com', 'none', 'aASSADAS', 0, 0, '2015-03-18 15:09:23', '2015-03-18 15:09:23'),
(16, 'ADSADSA', 'binmonk@live.com', 'none', 'ASDASDASDS', 0, 0, '2015-03-18 15:10:05', '2015-03-18 15:10:05'),
(17, 'ASDSAS', 'binmonk@live.com', 'none', 'SFASDASDASD', 0, 0, '2015-03-18 15:12:05', '2015-03-18 15:12:05'),
(18, 'asdsad', 'peter@enezaeducation.com', 'none', 'basdasdsa', 0, 0, '2015-03-18 15:13:44', '2015-03-18 15:13:44'),
(19, 'asdasd', 'binmonk@live.com', 'none', 'asdasd', 0, 0, '2015-03-18 15:15:31', '2015-03-18 15:15:31'),
(20, 'wewe', 'binmonk@live.com', 'none', 'asdsadasd', 0, 0, '2015-03-18 15:20:55', '2015-03-18 15:20:55'),
(21, 'sdas', 'binmonk@live.com', 'none', 'sdaasdads', 0, 0, '2015-03-18 15:23:54', '2015-03-18 15:23:54'),
(22, 'binmonk@live.com', 'binmonk@live.com', 'none', 'asdsadasdasd', 0, 0, '2015-03-18 15:24:43', '2015-03-18 15:24:43'),
(23, 'Denzel Washington Odhiambo', 'binmonk@live.com', 'none', 'asasdasd', 0, 0, '2015-03-18 15:27:58', '2015-03-18 15:27:58'),
(24, '', '', 'none', '', 0, 0, '2015-03-19 09:40:31', '2015-03-19 09:40:31'),
(25, 'asdsdad', 'bikundo.peter@gmail.com', 'none', 'asdasdasd', 0, 0, '2015-03-24 09:00:40', '2015-03-24 09:00:40'),
(26, 'Peter Bikundo', 'binmonk@gmail.com', '200', 'adsadasdsd', 0, 0, '2015-04-29 09:48:23', '2015-04-29 09:48:23'),
(27, 'Peter Bikundo', 'binmonk@gmail.com', '49600', 'asasdadasd', 0, 0, '2015-05-07 09:20:56', '2015-05-07 09:20:56'),
(28, 'Peter Bikundo', 'binmonk@gmail.com', '49600', 'asasdadasd', 0, 0, '2015-05-07 09:20:57', '2015-05-07 09:20:57'),
(29, 'Peter Bikundo', 'binmonk@gmail.com', '900', 'adadsd\nasdasdasd\ndasdasd\ndasdasdasd\nasdas', 0, 0, '2015-07-03 15:04:36', '2015-07-03 15:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_03_16_133311_create_messages_table', 2),
('2015_03_16_133840_create_pictures_table', 3),
('2015_03_16_134422_create_categories_table', 4),
('2015_03_17_130726_create_works_table', 5),
('2015_03_17_134303_create_category_work_pivot_table', 6),
('2015_03_18_100724_add_person_to_works_table', 7),
('2015_03_27_111443_create_skills_table', 8),
('2015_04_07_131120_create_slides_table', 9),
('2015_04_07_134442_create_options_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'My Portfolio', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'site_admin', 'Juan Roman Que Que', '0000-00-00 00:00:00', '2015-05-07 07:23:01'),
(3, 'admin_email', 'timothy@arduio-hacks.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'about_me_intro_home', 'hi, I do things with computers hi, I do things with computers hi, I do things with computers hi, I do things with computers ', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'about_me_subintro', 'The aglow cement comes from a vivo quotation. Some tameless archaeologies are thought of simply as pets.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'about_', 'A bit of Arduino here....etc and so on....', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'about_prose', 'hi, I do things with computers hi, I do things with computers hi, I do things with computers hi, I do things with computers \r\nhi, I do things with computers hi, I do things with computers hi, I do things with computers hi, I do things with computers ', '0000-00-00 00:00:00', '2015-05-07 07:32:34'),
(8, 'site_admin_title', 'Arduino Brogrammer, geek, etc etc', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'site_address', 'www.arduino.com', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'twitter_handle', 'twiitter.com/@asdasdsd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'facebook_link', 'facebook.com/asdsadsad', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'google_plus_page', 'plus.google.com/asdssd', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'mobile_number', '254724149923', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `alt`, `link`, `work_id`, `created_at`, `updated_at`) VALUES
(1, '', 'C:\\Users\\peter\\Documents\\home\\xamp\\htdocs\\folio\\public/uploads/699748_w1.jpg', 22, '2015-03-18 08:48:28', '2015-03-18 08:48:28'),
(2, '', 'uploads/281033_heroa.jpg', 23, '2015-03-18 08:56:53', '2015-03-18 08:56:53'),
(3, '', 'uploads/386254_10150483073867870_695294113_n.jpg', 23, '2015-03-18 08:56:53', '2015-03-18 08:56:53'),
(4, '', 'uploads/404292_10150584312942870_1129312667_n.jpg', 23, '2015-03-18 08:56:53', '2015-03-18 08:56:53'),
(5, '', 'uploads/236790186ff03a723af5477fd19d93c5.png', 24, '2015-03-18 09:00:31', '2015-03-18 09:00:31'),
(6, '', 'uploads/1332003048-pirates-beat-chiefs-32-in-soweto-derby--south-africa_1109030.jpg', 24, '2015-03-18 09:00:31', '2015-03-18 09:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `percentage` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percentage`, `created_at`, `updated_at`) VALUES
(1, 'CoffeeScript', 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ColdFusion', 60, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Haskell', 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Java', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'JavaScript', 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Ruby', 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'C', 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'C++', 90, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'PEEHP', 64, '2015-03-30 11:01:36', '2015-03-30 11:01:36'),
(10, 'SOCCER IN THE SUN AND DUST', 60, '2015-03-30 11:13:49', '2015-03-30 11:13:49'),
(11, 'dadsdad', 100, '2015-04-30 09:50:52', '2015-04-30 09:50:52'),
(12, 'dadsdad', 100, '2015-04-30 09:50:53', '2015-04-30 09:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Before celeries, phones all over lads', ' feathers were only drugs. Some hearties karens are thought of simply as perus.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'dasani water on the table', ' it might be lonely up here.  it might be lonely up here.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Before gaugantan', ' feathers were only drugs. Some hearties karens are thought of simply as perus.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'You know nothing Jon snow', ' it might be lonely up here.  it might be lonely up here.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '@admin', 'admin@admin.com', '$2y$10$sP.U8eLNfjraYC9SSm.m6upkrw9pRQCd2M02UzgLfkapnOwfQac9q', 'CruWzThEufgX80uktHr1FwxXKj0OfZSuaAEXWdxgsq5DUisdrFIlrKe3P5oS', '2015-03-16 08:26:27', '2015-05-07 09:14:13'),
(2, 'Peter Bikundo', 'binmonk@gmail.com', '$2y$10$YIpxQVRb1Z0jwSE4zF/6HOKPNdARajD2wP209IK3B.TvaZPJVuMmu', NULL, '2015-07-03 15:08:39', '2015-07-03 15:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE IF NOT EXISTS `works` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quote` text COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `person` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `description`, `link`, `quote`, `published`, `created_at`, `updated_at`, `person`) VALUES
(1, 'eferovic', 'Unde consequatur quia esse laudantium eos laboriosam nisi. Expedita quia aspernatur et eligendi quis vel. Ut est dolores a voluptatibus et. Hic placeat modi vitae. Dolor ipsum sit exercitationem sed accusantium provident dolorem. Totam eveniet autem sit et.', 'http://reynolds.com/numquam-consequatur-possimus-dolorem-suscipit-maxime.html', 'Inverse actuating securedline', 1, '2015-03-17 10:23:18', '2015-03-17 10:23:18', ''),
(2, 'Kunze-Dickiand Sons', 'Impedit dolore est dolorum maxime possimus. Optio tempore rem voluptas omnis minus molestiae. Occaecati laboriosam et consequatur eum quo nulla. Dolores ut omnis quia dolores. Expedita perferendis et voluptates nostrum est sint quis.', 'https://waters.com/iusto-labore-perferendis-consequatur-et-pariatur-minus-perferendis.html', 'Distributed mobile firmware', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(3, 'Hilll and Sonsand Sons', 'Repellendus minus optio enim repellendus nisi quia. Et maxime dolorem et illo ut dolor sint. Ut incidunt voluptatibus voluptatum aut reprehenderit accusamus sint praesentium. Quaerat voluptates sint id accusantium. Dolorem quam temporibus voluptates et dolores fugit eaque quod. Veritatis nostrum eum delectus qui est dolorum.', 'http://www.padbergkeebler.org/eaque-ad-voluptatum-nisi-harum', 'Ergonomic multi-state systemengine', 0, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(4, 'Glover, Metz and RempelLtd', 'Sapiente dignissimos aut ratione fugiat eligendi laboriosam optio sint. Amet id exercitationem repellat eum. Voluptas nulla autem et est aperiam porro est sint. Esse non libero et sed sed.', 'http://gaylord.com/eum-doloremque-ratione-eveniet-dolores-error-et-animi', 'Synergistic empowering openarchitecture', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(5, 'Von-Grahamand Sons', 'Esse non ut placeat ut fugiat nesciunt. Quo et at optio aut quia enim. Sequi vero architecto et rerum eum expedita possimus provident. Iste quaerat atque ab laborum quibusdam. Occaecati vel quia recusandae non. Facere quos iusto sit. Ex rerum pariatur esse nemo aut quasi ipsam.', 'http://hills.org/sed-rerum-aliquid-ut-rem-facilis-nesciunt.html', 'Multi-lateral discrete ability', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(6, 'Cassin-DurganPLC', 'Maxime voluptatum assumenda est occaecati facere. Repellendus et quos voluptas distinctio eos tempora. Perferendis repellendus quia numquam corrupti ratione. Est rerum sit placeat. Sed nostrum quis enim. Harum dolor non maiores beatae in. Ducimus quae vel quo omnis. Omnis dignissimos dicta velit temporibus totam.', 'http://www.corkery.com/autem-et-ipsum-quos-unde.html', 'Cross-platform intermediate internetsolution', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(7, 'Friesen-TillmanGroup', 'Sed doloremque voluptatem ut sit. Adipisci dolores cumque consectetur. In sed est voluptatum aut sit sit et. Hic minima mollitia a quia et ratione autem. Architecto iusto inventore voluptatem saepe praesentium.', 'http://graham.org/temporibus-praesentium-debitis-eum-est-laboriosam-sequi-ducimus-maiores', 'Adaptive optimizing infrastructure', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(8, 'Walsh GroupInc', 'Architecto ipsam ut quam qui. Enim quisquam neque libero tempore. Officiis labore nobis veritatis totam eos magni eaque. Eius dolores molestiae perferendis aut est nostrum. Culpa mollitia atque similique. In porro id occaecati quas eveniet. Omnis rerum eos ut ratione voluptates qui. Eveniet optio incidunt laborum et. Earum odit ex fugiat corrupti tempore a accusamus.', 'http://www.schultz.com/ratione-sunt-sequi-in', 'Programmable solution-oriented capacity', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(9, 'Abshire-HamillPLC', 'Ut cumque eos est velit. Aut voluptatum sit totam similique fugit. Voluptatum dicta in nisi tenetur ducimus et. Autem libero quia quo harum cumque. Qui minima cupiditate sed est dolorum. Minima doloribus quasi itaque enim modi ratione dicta labore. Voluptatem sed nam pariatur perferendis id.', 'http://stark.org/sed-sed-id-architecto-non-dolor-cumque.html', 'Profit-focused regional focusgroup', 0, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(10, 'Kiehn LLCLLC', 'At voluptatibus blanditiis odio. Eaque omnis laudantium deserunt porro totam ipsa. Et et dolore iure. Facere dicta illo magnam fugiat magni. Dolorum omnis earum aut id dolorum similique occaecati. Recusandae tempore dolores veniam perferendis. Voluptas nemo dicta occaecati eligendi. Magni error dolor ut qui. Nobis ut nihil itaque est et quaerat.', 'https://huels.com/quia-dolores-aut-officia-itaque-nobis-neque.html', 'Monitored secondary superstructure', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(11, 'Muller-SchinnerInc', 'Nisi tenetur qui doloremque illo. Rerum repellendus maiores labore laudantium aut sequi deleniti. Aut et adipisci voluptates exercitationem voluptatum omnis dolorum rerum. Sint illum sed enim aperiam. Quidem eligendi unde quos vitae nisi ipsum. Dolore provident minus perferendis itaque non sunt ad similique.', 'http://doylequitzon.com/quas-corporis-veritatis-velit-dicta-non-earum.html', 'Streamlined analyzing application', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(12, 'Quigley, Auer and TrantowLtd', 'Consectetur omnis laudantium ducimus saepe. Voluptatem eveniet quia beatae voluptatum nam. Optio quisquam dignissimos veritatis quis delectus consequuntur. Nulla hic nostrum expedita consequuntur. Officia sed id repellendus voluptate nesciunt sed libero. Est est dolore enim et officiis. In veniam nisi et voluptate voluptatum quo. Consequatur consequatur aut expedita libero.', 'http://www.haag.com/cumque-exercitationem-illo-voluptas-fuga-consequuntur.html', 'Diverse explicit pricingstructure', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(13, 'Schultz LLCand Sons', 'Consequuntur assumenda facere itaque ut dolorem consequatur aut. Beatae eius nihil et quia. Inventore eos fugiat impedit et explicabo aliquid. Consequatur dolor qui officia id. Explicabo qui voluptatibus eligendi officiis tempora voluptates vel. In sit ipsa qui molestiae voluptatem voluptas nam. Quae praesentium omnis velit expedita quos consequatur. Praesentium laudantium velit tenetur sit. Voluptates sunt incidunt quos ipsa ipsum porro dolorem.', 'http://www.homenick.com/fugiat-repellat-qui-nemo-porro-eius-corrupti-et-impedit', 'Proactive fault-tolerant openarchitecture', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(14, 'Brakus-Runteand Sons', 'Ipsum aperiam a quia consequatur quasi vero. Architecto officiis exercitationem aperiam aut tenetur sed. Amet et et vitae nam harum corrupti omnis. Ad earum inventore vel. Sint omnis consequuntur eum.', 'http://cummeratakrajcik.org/qui-fuga-qui-suscipit-accusantium-consequuntur-beatae-quos-voluptates', 'Inverse attitude-oriented knowledgebase', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(15, 'Runolfsson-GulgowskiInc', 'Ipsam ea impedit voluptatum et architecto. Corrupti totam sed molestiae impedit quidem quae. Dolores repudiandae eum est. Non occaecati provident vero saepe iusto. Id eaque dolor sint commodi unde ut. Dolores voluptatem sit blanditiis sint. Incidunt est delectus odio quia deserunt est commodi. A et ut autem perspiciatis quia necessitatibus minima.', 'http://www.bernhard.com/exercitationem-consequatur-sunt-tempora-quas-sint', 'Cross-platform 5thgeneration GraphicalUserInterface', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(16, 'Gerhold, Botsford and HarveyPLC', 'Voluptatum aspernatur qui repellendus laborum vero. Quis sint repudiandae saepe qui. Dolore voluptatem libero et dignissimos accusamus. Et inventore et sed maxime nihil aut aperiam. Perferendis vitae molestiae voluptatem ut.', 'http://anderson.net/ut-laudantium-quis-illo-animi-quia-sit', 'Intuitive intermediate standardization', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(17, 'Stoltenberg-BogisichLtd', 'Quia et sed qui aut optio alias. Qui rerum voluptas quas maiores. In sunt eius aut maxime molestiae. Optio aperiam quibusdam adipisci in cupiditate ducimus. Porro veniam iste earum. Amet a ratione distinctio. Quod voluptas explicabo officia accusamus molestiae. Et beatae aliquam dolor temporibus. Dolorum voluptas optio veritatis necessitatibus est porro amet.', 'http://www.smithambahringer.info/molestiae-velit-fugit-est-tempora-incidunt-ab-vitae-ipsum.html', 'Organic zerotolerance orchestration', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(18, 'Turner, Dach and LefflerPLC', 'Non amet aperiam unde dicta. Facilis fugiat sed enim unde sint possimus quos soluta. Incidunt praesentium ut quos dolor dolores autem sit. Qui culpa eum quae. Quisquam est eius neque quisquam vitae accusantium ut. Sunt est sint consequatur hic. Autem ullam soluta quia distinctio.', 'http://marvin.net/', 'Front-line optimal help-desk', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(19, 'Towne-ErdmanLLC', 'Eum in magni sequi est quis quidem ut minima. Quia dolor libero doloribus voluptatem optio. Aliquam id quo et et. Ad sunt neque totam consequatur architecto. Ad molestiae dolorem voluptatum distinctio laboriosam et voluptas. Dolores eveniet debitis aut quidem accusantium nemo aut. Temporibus consequatur qui optio et ea aut voluptatem. Et nisi qui vel.', 'http://robertsstracke.net/minus-quis-et-necessitatibus-labore-alias-tempore.html', 'Enhanced real-time middleware', 1, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(20, 'Weimann, Kuvalis and MetzGroup', 'Modi illo ad quia quisquam vero. Iusto qui quis quidem quasi voluptatem. Perspiciatis aperiam labore dolor hic quas. Aut ea atque aliquid expedita harum.', 'http://www.kshlerin.info/adipisci-et-quia-qui-vero-non-nobis-iste', 'Focused mobile groupware', 0, '2015-03-17 10:23:19', '2015-03-17 10:23:19', ''),
(21, 'aasASAasA', 'ASDASDASDASDASDASDAS', 'asdasdas', 'asdsdasdas', 1, '2015-03-18 07:20:14', '2015-03-18 07:20:14', 'dfsdfsdfsd'),
(22, 'Leonardo Jardim', '<span style="color: rgb(82, 82, 82); font-family: ''Source Sans Pro'', sans-serif; font-size: 16px; line-height: 24px;">You may also use the&nbsp;</span><code class=" language-php" style="font-family: Consolas, Monaco, ''Andale Mono'', monospace; font-size: 13px; color: rgb(244, 100, 95); padding: 1px 5px; border-radius: 3px; text-shadow: white 0px 1px; direction: ltr; white-space: pre; word-break: normal; line-height: 1.5; tab-size: 4; background: rgb(240, 242, 241);">sync</code><span style="color: rgb(82, 82, 82); font-family: ''Source Sans Pro'', sans-serif; font-size: 16px; line-height: 24px;">&nbsp;method to attach related models. The&nbsp;</span><code class=" language-php" style="font-family: Consolas, Monaco, ''Andale Mono'', monospace; font-size: 13px; color: rgb(244, 100, 95); padding: 1px 5px; border-radius: 3px; text-shadow: white 0px 1px; direction: ltr; white-space: pre; word-break: normal; line-height: 1.5; tab-size: 4; background: rgb(240, 242, 241);">sync</code><span style="color: rgb(82, 82, 82); font-family: ''Source Sans Pro'', sans-serif; font-size: 16px; line-height: 24px;">&nbsp;method accepts an array of IDs to place on the pivot table. After this operation is complete, only the IDs in the array will be on the intermediate table for the model:</span>', 'http://laravel.io/forum/11-14-2014-pictures-linked-to-posts', 'asdasdasdas asdasdas asdasdasd', 1, '2015-03-18 08:48:28', '2015-03-18 08:48:28', 'aasdasdasdas'),
(23, 'Algebra', '<span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: 13px; line-height: 22.1000003814697px;">First of all i would suggest you to go thru database and eloquent sections of documentation. The naming concept is actually pretty easy with laravel. You need posts and pictures tables and one many to many table picture_photo. ( note that table names combined as singular and alphabetical order ). In this table you need two columns photo_id and post_id. Both singular.</span>', 'adadasdasdas', 'asdada', 1, '2015-03-18 08:56:52', '2015-03-18 08:56:52', 'asdasdasds'),
(24, 'Name', '<pre class="default prettyprint prettyprinted" style="margin-bottom: 1em; padding: 5px; border: 0px; width: auto; max-height: 600px; font-family: Consolas, Menlo, Monaco, ''Lucida Console'', ''Liberation Mono'', ''DejaVu Sans Mono'', ''Bitstream Vera Sans Mono'', ''Courier New'', monospace, sans-serif; color: rgb(57, 51, 24); word-wrap: normal; background-color: rgb(238, 238, 238);"><code style="margin: 0px; border: 0px; font-size: 13px; font-family: Consolas, Menlo, Monaco, ''Lucida Console'', ''Liberation Mono'', ''DejaVu Sans Mono'', ''Bitstream Vera Sans Mono'', ''Courier New'', monospace, sans-serif; white-space: inherit; background-color: rgb(238, 238, 238);"><span class="kwd" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 139);">function</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);"> runEffect</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">()</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);"> </span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">{</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">\r\n    setTimeout</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">(</span><span class="kwd" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 139);">function</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">(){</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">\r\n        </span><span class="kwd" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 139);">var</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);"> selectedEffect </span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">=</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);"> </span><span class="str" style="margin: 0px; padding: 0px; border: 0px; color: rgb(128, 0, 0);">''blind''</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">;</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">\r\n        </span><span class="kwd" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 139);">var</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);"> options </span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">=</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);"> </span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">{};</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">\r\n        $</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">(</span><span class="str" style="margin: 0px; padding: 0px; border: 0px; color: rgb(128, 0, 0);">"#successMessage"</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">).</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">hide</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">(</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">selectedEffect</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">,</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);"> options</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">,</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);"> </span><span class="lit" style="margin: 0px; padding: 0px; border: 0px; color: rgb(128, 0, 0);">500</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">)</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">\r\n     </span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">},</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);"> </span><span class="lit" style="margin: 0px; padding: 0px; border: 0px; color: rgb(128, 0, 0);">5000</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">);</span><span class="pln" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">\r\n</span><span class="pun" style="margin: 0px; padding: 0px; border: 0px; color: rgb(0, 0, 0);">}</span></code></pre>', 'http://laravel.com/docs/5.0/helpers', 'Look at the sky. We are not alone. The whole universe is friendly to us and conspires only to give the best to those who dream and work. ', 1, '2015-03-18 09:00:31', '2015-03-18 09:00:31', 'A. P. J. Abdul Kalam');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_work`
--
ALTER TABLE `category_work`
  ADD CONSTRAINT `category_work_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_work_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `works` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
