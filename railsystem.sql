-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2021 at 10:55 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2021_01_18_155218_create_users_table', 1),
(3, '2021_02_07_074609_create_ticket_fees_table', 1),
(4, '2021_02_07_080005_create_registrations_table', 1),
(5, '2021_02_13_080935_create_transactions_table', 2),
(6, '2021_02_13_090530_create_transactions_table', 3),
(7, '2021_02_13_123001_create_verify_tickets_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
CREATE TABLE IF NOT EXISTS `registrations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `created_at`, `updated_at`, `phone_number`, `name`, `email`) VALUES
(1, NULL, NULL, '08162789385', 'oyin', 'oyindamolamusiliu@gmail.com'),
(2, NULL, NULL, '08055949631', 'williams', 'oyindamolamusiliu@gmail.com'),
(3, '2021-02-28 15:58:14', '2021-02-28 15:58:14', '08162789385', 'Tolu', 'steelatrakts@gmail.com'),
(4, '2021-02-28 16:05:23', '2021-02-28 16:05:23', '08155434440', 'Tolu', 'steelatrakts@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_fees`
--

DROP TABLE IF EXISTS `ticket_fees`;
CREATE TABLE IF NOT EXISTS `ticket_fees` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_fees`
--

INSERT INTO `ticket_fees` (`id`, `created_at`, `updated_at`, `source`, `destination`, `fee`) VALUES
(1, NULL, NULL, 'Agege', 'Abeokuta', '1000'),
(2, NULL, NULL, 'Agege', 'Ikeja', '500');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `created_at`, `updated_at`, `source`, `destination`, `fees`, `amount_paid`, `phone_number`) VALUES
(NULL, '2021-02-13 09:29:10', '2021-02-13 09:29:10', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('H00502137554145', '2021-02-13 11:52:03', '2021-02-13 11:52:03', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('32019420028406N', '2021-02-13 11:52:56', '2021-02-13 11:52:56', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('G89118655534501', '2021-02-13 11:54:39', '2021-02-13 11:54:39', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('270145601F22166', '2021-02-13 11:56:25', '2021-02-13 11:56:25', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('059L40862251359', '2021-02-13 11:58:50', '2021-02-13 11:58:50', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('4845H3749254741', '2021-02-25 11:30:37', '2021-02-25 11:30:37', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('17691217437C266', '2021-02-25 11:50:03', '2021-02-25 11:50:03', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('512962956I48897', '2021-02-27 13:13:57', '2021-02-27 13:13:57', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('4295572P3096515', '2021-02-27 13:22:30', '2021-02-27 13:22:30', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('N30378765568721', '2021-02-27 13:31:03', '2021-02-27 13:31:03', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('5128899005H2316', '2021-02-27 17:41:52', '2021-02-27 17:41:52', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('529Y13698458607', '2021-02-27 17:42:51', '2021-02-27 17:42:51', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('17W275083994486', '2021-02-27 17:43:48', '2021-02-27 17:43:48', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('213Z17395626379', '2021-02-27 17:44:22', '2021-02-27 17:44:22', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('0871724409S0069', '2021-02-27 18:07:28', '2021-02-27 18:07:28', 'Agege', 'Ikeja', '5000', '5000', '08162789385'),
('63665T160563946', '2021-02-27 18:07:36', '2021-02-27 18:07:36', 'Agege', 'Ikeja', '5000', '5000', '08162789385'),
('5D8695077924902', '2021-02-27 18:13:27', '2021-02-27 18:13:27', 'Agege', 'Ikeja', '5000', '5000', '08162789385'),
('57773093518105G', '2021-02-28 15:32:26', '2021-02-28 15:32:26', 'Agege', 'Ikeja', '500', '500', '08162789385'),
('012684N25582426', '2021-02-28 16:06:05', '2021-02-28 16:06:05', 'Agege', 'Ikeja', '500', '500', '08155434440');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verify_tickets`
--

DROP TABLE IF EXISTS `verify_tickets`;
CREATE TABLE IF NOT EXISTS `verify_tickets` (
  `ticket_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_paid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_tickets`
--

INSERT INTO `verify_tickets` (`ticket_id`, `created_at`, `updated_at`, `transaction_id`, `amount_paid`) VALUES
('2', '2021-02-13 11:52:56', '2021-02-13 11:52:56', '32019420028406N', '500'),
('G89118655534501', '2021-02-13 11:54:39', '2021-02-13 11:54:39', 'G89118655534501', '500'),
('11', '2021-02-13 11:56:25', '2021-02-13 11:56:25', '270145601F22166', '500'),
('L19586205032495', '2021-02-13 11:58:50', '2021-02-13 11:58:50', '059L40862251359', '500'),
('4723415474859H4', '2021-02-25 11:30:37', '2021-02-25 11:30:37', '4845H3749254741', '500'),
('91C176312776642', '2021-02-25 11:50:03', '2021-02-25 11:50:03', '17691217437C266', '500'),
('8249785I6919625', '2021-02-27 13:13:58', '2021-02-27 13:13:58', '512962956I48897', '500'),
('29P653052145975', '2021-02-27 13:22:31', '2021-02-27 13:22:31', '4295572P3096515', '500'),
('1077665387583N2', '2021-02-27 13:31:03', '2021-02-27 13:31:03', 'N30378765568721', '500'),
('9189200532815H6', '2021-02-27 17:41:53', '2021-02-27 17:41:53', '5128899005H2316', '500'),
('20Y785995483616', '2021-02-27 17:42:51', '2021-02-27 17:42:51', '529Y13698458607', '500'),
('804573W92718649', '2021-02-27 17:43:48', '2021-02-27 17:43:48', '17W275083994486', '500'),
('71239537Z692136', '2021-02-27 17:44:22', '2021-02-27 17:44:22', '213Z17395626379', '500'),
('4060S0471790982', '2021-02-27 18:07:28', '2021-02-27 18:07:28', '0871724409S0069', '5000'),
('966614T35063665', '2021-02-27 18:07:36', '2021-02-27 18:07:36', '63665T160563946', '5000'),
('4996D7285905270', '2021-02-27 18:13:27', '2021-02-27 18:13:27', '5D8695077924902', '5000'),
('78379030575115G', '2021-02-28 15:32:26', '2021-02-28 15:32:26', '57773093518105G', '500'),
('2N6642025284851', '2021-02-28 16:06:05', '2021-02-28 16:06:05', '012684N25582426', '500');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
