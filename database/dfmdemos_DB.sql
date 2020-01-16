-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2020 at 04:50 PM
-- Server version: 5.6.45
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dfmdemos_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'DFM Admin', 'pooja@etcspl.com', NULL, 'vendor', '$2y$10$BRBGPN7t2QmIWum/mC2uuuAt6Yw3iw7EaEsXSDMhsyVqcnQonVJLm', 'KUTXWXBva0CYLaxuyMODngYOWtMNKyvEF1w4O55uW2JebNJSelIUke2r4gFF', '2019-05-30 00:59:45', '2019-07-11 04:39:15'),
(2, 'Arti Ambhore', 'arti@etcspl.com', NULL, 'vendor', '$2y$10$OWLlcxzGB9a5ysUL7PwMTeg6cI2fBN3MON61w/3qfGViYiYBwgGPe', 'r75genxCwfgBXMcI4j1nVTga3YTCqHFCzRUTw0ZGECCgzUv08zQhWQ3lcEPz', '2019-07-01 01:24:48', '2019-07-01 01:24:48');

-- --------------------------------------------------------

--
-- Table structure for table `admin_profiles`
--

CREATE TABLE `admin_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_profiles`
--

INSERT INTO `admin_profiles` (`id`, `user_id`, `name`, `email`, `contact`, `address`, `city`, `state`, `country`, `pin_code`, `profile_img`, `created_at`, `updated_at`) VALUES
(1, '1', 'DFM Admin', 'pooja@etcspl.com', '9876543212', 'ETC\'s, Railway Station MIDC', 'Aurangabad', 'Aurangabad', 'India', '431001', NULL, '2019-07-01 00:44:18', '2019-07-11 04:39:59'),
(2, '2', 'Arti Ambhore', 'arti@etcspl.com', '9876543212', 'ETC\'s, Railway Station MIDC', 'Aurangabad', 'Aurangabad', 'India', '431001', NULL, '2019-07-01 01:24:48', '2019-07-01 03:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) NOT NULL,
  `maid_id` int(10) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_cat_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_days` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_stay_hours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_material` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_from_time_slot` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_to_time_slot` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_instruction` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pay_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `maid_id`, `name`, `email`, `region`, `address`, `contact`, `service_cat_id`, `c_days`, `c_stay_hours`, `c_qty`, `c_material`, `c_date`, `c_from_time_slot`, `c_to_time_slot`, `c_instruction`, `pay_method`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(20, 1, 2, 'Pooja Bochare', 'pooja@etcspl.com', 'Sharjah', 'N-6 Cidco', '09845784585', '5', 'One-off', '2', '1', 'Yes', '2019-09-19', '09:00 AM', '12:00 AM', 'Test Requirement', 'Cash On Delivery', '70', 'Pending', '2019-08-03 10:35:56', '2019-08-25 06:43:26'),
(36, 1, NULL, 'Sysu', 'Pooja@etcspl.com', 'Sharjah', 'Wusu', '1234546878', '7', 'One-off', '7', '3', 'No', '2019-08-24', '11:00 AM', '12:00 AM', 'Ueue', 'Cash On Delivery', '245', 'Pending', '2019-08-21 11:17:15', NULL),
(22, 1, 2, 'Pooja Bochare', 'pooja@etcspl.com', 'Sharjah', 'N-6 Cidco', '09845784585', '7', 'One-off', '4', '3', 'Yes', '2019-08-08', '09:00 AM', '10:00 AM', 'test', 'Cash On Delivery', '100', 'Pending', '2019-08-05 12:10:45', NULL),
(23, 1, 1, 'Pooja Bochare', 'pooja@etcspl.com', 'Sharjah', 'N-6 Cidco', '09845784585', '6', 'One-off', '4', '1', 'Yes', '2019-08-07', '09:00 AM', '10:00 AM', 'test', 'Cash On Delivery', '100', 'Pending', '2019-08-05 12:14:42', NULL),
(24, 1, 1, 'Pooja Bochare', 'pooja@etcspl.com', 'Abu Dhabi', 'N-6 Cidco', '09845784585', '8', 'One-off', '6', '2', 'Yes', '2019-08-10', '10:00 AM', '12:00 AM', 'Test', 'Cash On Delivery', '100', 'Pending', '2019-08-05 12:58:11', NULL),
(35, 1, 2, 'Mansi Palkar', 'mansi@etcspl.com', 'Abu Dhabi', 'N-6 Cidco', '09845784585', '6', 'Every Day', '4', '1', 'Yes', '2019-08-22', '11:00 AM', '01:00 PM', 'test', 'Cash On Delivery', '140', 'Pending', '2019-08-21 06:58:43', NULL),
(26, 1, 1, 'Pooja Bochare', 'pooja@etcspl.com', 'Sharjah', 'N-6 Cidco', '96523147896', '8', 'One-off', '2', '1', 'Yes', '2019-08-16', '10:00 AM', '12:00 AM', 'Test requirements', 'Cash On Delivery', '100', 'Pending', '2019-08-08 09:22:56', NULL),
(28, 63, 1, 'Harsh rathod', 'Harsh@gmail.com', 'Sharjah', 'Harsh address', '1234567890', '8', 'Every two weeks', '4', '3', 'No', '2019-08-10', '11:30 AM', '01:00 PM', 'Harsh appointment today', 'Cash On Delivery', '100', 'Pending', '2019-08-08 09:44:36', NULL),
(31, 1, 1, 'Pooja Bochare', 'pooja@etcspl.com', 'Abu Dhabi', 'N-6 Cidco', '09845784585', '7', 'One-off', '5', '1', 'Yes', '2019-08-11', '09:00 AM', '12:00 AM', 'Test Requirement', 'Cash On Delivery', '35', 'Pending', '2019-08-10 06:07:48', NULL),
(33, 1, 2, 'Mansi Palkar', 'mansi@etcspl.com', 'Sharjah', 'N-6 Cidco', '09845784585', '3', 'One-off', '2', '1', 'Yes', '2019-08-15', '08:00 AM', '10:00 AM', 'Test', 'Cash On Delivery', '35', 'Pending', '2019-08-13 11:57:09', NULL),
(34, 1, 1, 'Pooja Bochare', 'pooja@etcspl.com', 'Abu Dhabi', 'N-6 Cidco', '09845784585', '5', 'One-off', '2', '1', 'Yes', '2019-08-20', '09:00 AM', '10:00 AM', 'Test Appointment', 'Cash On Delivery', '70', 'Pending', '2019-08-14 10:46:55', NULL),
(37, 213, 1, 'R', 'R@r..com', 'Sharjah', 'Karama', '123456789', '7', 'One-off', '2', '1', 'Yes', '2019-08-27', '10:30 AM', '11:30 AM', 'No', 'Cash On Delivery', '70', 'Pending', '2019-08-25 05:08:27', '2019-08-25 05:34:39'),
(38, 213, NULL, 'Ghj', 'Hjk@fgh.com', 'Abu Dhabi', 'Hhh', '2578896788', '3', 'One-off', '2', '2', 'No', '2019-08-14', '12:00 AM', '11:30 AM', 'No', 'Cash On Delivery', '70', 'Pending', '2019-08-25 05:53:50', NULL),
(39, 213, NULL, 'Ghjj', 'Ghh', 'Dubai', 'Huuu', '1346', '5', 'One-off', '2', '1', 'Yes', '2019-08-26', '09:00 AM', '10:30 AM', 'Uuji', 'Cash On Delivery', '70', 'Pending', '2019-08-25 10:01:55', NULL),
(40, 213, 2, 'Raj', 'R@r.com', 'Sharjah', 'Karama', '123456789', '6', 'One-off', '5', '1', 'No', '2019-08-28', '08:00 AM', '10:00 AM', 'Yes', 'Cash On Delivery', '175', 'Pending', '2019-08-25 10:55:24', '2019-08-25 05:48:32'),
(41, 213, NULL, 'Ghj', 'R@r.com', 'Dubai', 'Ghh', '2457899000', '5', 'One-off', '4', '1', 'Yes', '2019-08-29', '10:00 AM', '12:00 AM', 'Tt', 'Cash On Delivery', '140', 'Pending', '2019-08-25 11:29:54', NULL),
(42, 213, NULL, 'Hbi', 'Rhj', 'Sharjah', 'Yhh', '1235', '5', 'One-off', '2', '3', 'Yes', '2019-08-26', '10:00 AM', '12:00 AM', 'Test', 'Cash On Delivery', '70', 'Pending', '2019-08-25 17:13:59', NULL),
(43, 321, NULL, 'Raj', 'rdharna@etcspl.com', 'Dubai', 'Hjk', '0555372844', '7', 'One-off', '2', '1', 'Yes', '2019-10-11', '11:00 AM', '11:30 AM', 'Yy', 'Cash On Delivery', '70', 'Pending', '2019-09-08 21:59:23', NULL),
(44, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'sdfdf', 'N-6 Cidco', '9845784585', '6', 'Every two weeks', '6', '3', 'No', '2019-09-12', '03:30 PM', NULL, 'jkkl', 'Cash On Delivery', '210', 'Pending', '2019-09-11 10:00:17', NULL),
(45, 321, NULL, 'Raj', 'rdharna@etcspl.com', 'Hjkk', 'Jjkk', '0555372844', '5', 'One-off', '2', '1', 'Yes', '2019-09-21', '10:30 AM', NULL, 'Hhh', 'Cash On Delivery', '70', 'Pending', '2019-09-11 14:03:08', NULL),
(46, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Fgh', 'N-6 Cidco', '9845784585', '5', 'One-off', '5', '2', 'No', '2019-09-29', '09:30 AM', NULL, 'Qeegjjkd', 'Cash On Delivery', '175', 'Pending', '2019-09-29 05:55:28', NULL),
(47, 332, NULL, 'rajudharna@gmail.com', 'rajudharna@gmail.com', 'Hjk', 'Hjk', '0555372844', '5', 'One-off', '2', '1', 'No', '2019-09-20', '10:30 AM', NULL, 'Hi', 'Cash On Delivery', '70', 'Pending', '2019-09-29 13:45:48', NULL),
(48, 332, NULL, 'rajudharna@gmail.com', 'rajudharna@gmail.com', 'Bur dubai', 'Karama', '0555372844', '6', 'One-off', '5', '1', 'Yes', '2019-09-27', '11:00 AM', NULL, 'Test1234', 'Cash On Delivery', '175', 'Pending', '2019-09-29 13:49:22', NULL),
(49, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Dubai', 'N-6 Cidco', '9845784585', '6', 'Every Day', '4', '2', 'Yes', '2019-10-04', '08:30 AM', NULL, 'Test', 'Cash On Delivery', '140', 'Pending', '2019-10-03 13:17:53', NULL),
(50, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Dubai', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-10-06', '09:00 AM', NULL, 'Abcde', 'Cash On Delivery', '70', 'Pending', '2019-10-05 05:03:37', NULL),
(53, 337, NULL, 'Atul', 'atul@etcspl.com', 'Dubai', 'Cidco n7', '9876543212', '6', 'Every Day', '2', '2', 'Yes', '2019-10-06', '10:00 AM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-10-05 05:47:24', NULL),
(54, 337, NULL, 'Atul', 'atul@etcspl.com', 'Sharjah', 'N7 cidco', '9876543210', '6', 'One-off', '2', '1', 'Yes', '2019-10-06', '09:00 AM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-10-05 06:22:12', NULL),
(55, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Dubai', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-10-08', '09:00 AM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-10-05 10:02:22', NULL),
(56, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Abu Dhabi', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-10-07', '09:00 AM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-10-05 10:11:05', NULL),
(57, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Dubai', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-10-17', '11:00 AM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-10-05 10:19:31', NULL),
(58, 337, NULL, 'Atul', 'atul@etcspl.com', 'Lkasdfjjd', 'Sdfjlasdfjsdl', '9876543212', '6', 'Every Day', '2', '1', 'Yes', '2019-10-05', '08:00 AM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-10-05 11:12:16', NULL),
(59, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Waha', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-11-06', '03:00 PM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-10-06 10:31:37', NULL),
(60, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Waha', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-11-06', '03:00 PM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-10-06 10:31:40', NULL),
(61, 321, NULL, 'Raj', 'rdharna@etcspl.com', 'Rolla', 'Aryas', '0555372844', '5', 'One-off', '2', '1', 'Yes', '2022-10-13', '08:30 AM', NULL, 'Test', 'Cash On Delivery', '70', 'Pending', '2019-10-10 05:43:48', NULL),
(62, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'dubai', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-09-01', '01:30 PM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-11-06 11:52:16', NULL),
(63, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Gharija', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-07', '02:00 PM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-11-07 07:17:30', NULL),
(64, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Ajman', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-11-15', '04:00 PM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-11-07 07:32:47', NULL),
(65, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Soygaon', 'N-6 Cidco', '9845784585', '7', 'Every week', '8', '4', 'No', '2019-11-30', '06:00 PM', NULL, 'Test', 'Cash On Delivery', '280', 'Pending', '2019-11-09 06:37:35', NULL),
(66, 1, NULL, 'pp', 'pooja@etcspl.com', 'test', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-11-21', '11:30 AM', NULL, 'test', 'Cash On Delivery', '70', 'Pending', '2019-11-20 08:57:41', NULL),
(67, 1, NULL, 'pp', 'pooja@etcspl.com', 'test', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-11-21', '11:30 AM', NULL, 'test', 'Cash On Delivery', '70', 'Pending', '2019-11-20 08:57:42', NULL),
(68, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Test', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-11-21', '10:00 AM', NULL, 'Test', 'undefined', '70', 'Pending', '2019-11-20 10:39:14', NULL),
(69, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Dubai', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-11-30', '10:00 AM', '11:30 AM', NULL, 'Cash On Delivery', '70', 'Pending', '2019-11-27 14:24:16', NULL),
(70, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Dubai', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-11-29', '07:30 PM', NULL, 'test', 'Cash On Delivery', '70', 'Pending', '2019-11-29 05:26:19', NULL),
(71, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', '45601', 'N-6 Cidco', '9845784585', '5', 'One-off', '3', '1', 'No', '2019-11-30', '11:30 AM', NULL, 'Clear&clean', 'Cash On Delivery', '105', 'Pending', '2019-11-29 05:55:49', NULL),
(72, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Dubai - manual', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'No', '2019-11-29', '07:30 PM', NULL, 'Test from tejas sinelogix', 'Cash On Delivery', '70', 'Pending', '2019-11-29 06:02:03', NULL),
(73, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'test dubai', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-11-30', '08:00 PM', NULL, 'test', 'Cash On Delivery', '70', 'Pending', '2019-11-30 09:16:03', NULL),
(74, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Deira', 'N-6 Cidco', '9845784585', '7', 'Every Day', '2', '1', 'Yes', '2019-12-01', '02:30 PM', NULL, 'hi', 'Cash On Delivery', '70', 'Pending', '2019-11-30 11:05:53', NULL),
(75, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'sdfsdf', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-02', '04:00 PM', NULL, 'sdfsdf', 'Cash On Delivery', '70', 'Pending', '2019-12-02 05:36:16', NULL),
(76, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'eteasdasd', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-02', '08:00 PM', NULL, 'test 12323423', 'undefined', '70', 'Pending', '2019-12-02 11:21:03', NULL),
(77, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'dfgdsf', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-12-03', '04:00 PM', NULL, 'csc', 'Cash On Delivery', '70', 'Pending', '2019-12-02 12:44:38', NULL),
(78, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'sfdsf', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-02', '03:00 PM', NULL, 'ddfds', 'Cash On Delivery', '70', 'Pending', '2019-12-02 12:46:46', NULL),
(79, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'test', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '08:00 PM', NULL, 'test', 'undefined', '70', 'Pending', '2019-12-03 04:01:39', NULL),
(80, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'tessa', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '04:30 PM', NULL, 'test', 'undefined', '70', 'Pending', '2019-12-03 04:22:01', NULL),
(81, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'd', 'N-6 Cidco', '9845784585', '7', 'One-off', '2', '1', 'Yes', '275760-04-04', '10:30 AM', NULL, 'gxg', 'Cash On Delivery', '70', 'Pending', '2019-12-03 04:22:35', NULL),
(82, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'd', 'N-6 Cidco', '9845784585', '7', 'One-off', '2', '1', 'Yes', '275760-04-04', '10:30 AM', NULL, 'gxg', 'Cash On Delivery', '70', 'Pending', '2019-12-03 04:22:36', NULL),
(83, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'asdasdasd', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '05:00 PM', NULL, 'asdasd', 'undefined', '70', 'Pending', '2019-12-03 04:32:48', NULL),
(84, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'test', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '08:00 PM', NULL, 'asdasd', 'undefined', '70', 'Pending', '2019-12-03 04:37:11', NULL),
(85, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'asdasdads', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '07:30 PM', NULL, 'asdasda', 'undefined', '70', 'Pending', '2019-12-03 04:39:50', NULL),
(86, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', '234234', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '08:00 PM', NULL, 'asdasd', 'Pay With Card', '70', 'Pending', '2019-12-03 04:55:08', NULL),
(87, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'l', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '12:00 AM', NULL, 'dasd', 'Cash On Delivery', '70', 'Pending', '2019-12-03 04:58:13', NULL),
(88, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'asdasd', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '04:30 PM', NULL, 'asdasdasd', 'Pay With Card', '70', 'Pending', '2019-12-03 05:01:25', NULL),
(89, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Dubai', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-23', '08:00 AM', NULL, 'asdasdas', 'Cash On Delivery', '70', 'Pending', '2019-12-03 05:08:59', NULL),
(90, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'asd', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '07:30 PM', NULL, 'asdasdasd', 'Pay With Card', '70', 'Pending', '2019-12-03 05:12:24', NULL),
(91, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'gdf', 'N-6 Cidco', '9845784585', '7', 'One-off', '2', '1', 'Yes', '2019-12-03', '09:30 AM', NULL, 'fdsf', 'undefined', '70', 'Pending', '2019-12-03 05:18:26', NULL),
(92, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'asdasdas', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '03:00 PM', NULL, 'asdasd', 'Pay With Card', '70', 'Pending', '2019-12-03 05:20:34', NULL),
(93, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', '66', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-04', '02:00 PM', NULL, 'dddd', 'undefined', '70', 'Pending', '2019-12-03 05:22:06', NULL),
(94, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', '66', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-04', '02:00 PM', NULL, 'dddd', 'undefined', '70', 'Pending', '2019-12-03 05:22:06', NULL),
(95, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'dasdasd', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '07:30 PM', NULL, 'asdsaddsa', 'Pay With Card', '70', 'Pending', '2019-12-03 05:29:06', NULL),
(96, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'kj', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '11:30 AM', NULL, 'khj', 'undefined', '70', 'Pending', '2019-12-03 05:34:56', NULL),
(97, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'kj', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '11:30 AM', NULL, 'khj', 'undefined', '70', 'Pending', '2019-12-03 05:34:56', NULL),
(98, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'dd', 'N-6 Cidco', '9845784585', '7', 'One-off', '2', '1', 'Yes', '2019-12-03', '12:30 PM', NULL, 'cs', 'undefined', '70', 'Pending', '2019-12-03 05:44:22', NULL),
(99, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'dd', 'N-6 Cidco', '9845784585', '7', 'One-off', '2', '1', 'Yes', '2019-12-03', '12:30 PM', NULL, 'cs', 'undefined', '70', 'Pending', '2019-12-03 05:44:22', NULL),
(100, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'asdasdasd', 'N-6 Cidco', '9845784585', '6', 'One-off', '2', '1', 'Yes', '2019-12-03', '03:00 PM', NULL, 'asdasdasd', 'Pay With Card', '70', 'Pending', '2019-12-03 05:51:07', NULL),
(101, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Bur dubai', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-12-20', '10:30 AM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-12-23 10:29:29', NULL),
(102, 1, NULL, 'Pooja Bochare', 'pooja@etcspl.com', 'Dubai', 'N-6 Cidco', '9845784585', '5', 'One-off', '2', '1', 'Yes', '2019-12-18', '09:00 AM', NULL, NULL, 'Cash On Delivery', '70', 'Pending', '2019-12-23 10:39:42', NULL),
(103, 351, NULL, 'Sabha', 'sabhaasim@gmail.com', 'Dubai', 'Karama', '0553560786', '5', 'One-off', '3', '2', 'Yes', '2020-01-08', '08:30 AM', NULL, NULL, 'Cash On Delivery', '105', 'Pending', '2020-01-07 12:50:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_image`, `category_slug`, `meta_title`, `meta_description`, `meta_keyword`, `parent_url`, `status`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Test\"}', 'Test', '{\"en\":\"test\"}', '{\"en\":\"Test\"}', '{\"en\":null}', '{\"en\":\"Test\"}', 'Test', '1', '2018-12-27 02:42:49', '2018-12-27 02:42:49'),
(2, '{\"en\":\"Test\"}', 'Test', '{\"en\":\"test\"}', '{\"en\":\"test\"}', '{\"en\":null}', '{\"en\":\"test\"}', 'Test', '1', '2019-05-20 04:20:31', '2019-05-20 04:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `maids`
--

CREATE TABLE `maids` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maids`
--

INSERT INTO `maids` (`id`, `name`, `email`, `email_verified_at`, `job_title`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mansi Palkar', 'mansi@etcspl.com', NULL, 'Maid', '$2y$10$wImto/uhMp08gkWCjt2O1uefpkSSKHp2/sU0dNGdRc6FNRF1JtBAa', '51OksqMwpFyRBDDvxXYZH8qMxhIBRLQDKFo4GKcWWEohcxOboVt8rerMp8Je', '2019-07-04 01:42:09', '2019-07-08 01:11:39'),
(7, 'appa', 'appa@gmail.com', NULL, 'Maid', '$2y$10$P59Sz9vlrb8gLXhetr7WFOkNDCycQ3rucVGUtIB.5qkTs0VYuWPia', '', '2019-08-04 00:41:48', '2019-08-04 00:41:48'),
(13, 'amol', 'amol@gmail.com', NULL, 'Maid', '$2y$10$0qW1y6TgHBQFiFQTTyDbFeKX.2XFZFY0leVovz/CaeQw0oysKeeIW', NULL, '2019-08-06 03:59:49', '2019-08-06 03:59:49');

-- --------------------------------------------------------

--
-- Table structure for table `maid_profiles`
--

CREATE TABLE `maid_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maid_profiles`
--

INSERT INTO `maid_profiles` (`id`, `user_id`, `name`, `email`, `contact`, `address`, `city`, `state`, `country`, `pin_code`, `profile_img`, `created_at`, `updated_at`) VALUES
(1, '1', 'Mansi Palkar', 'mansi@etcspl.com', '09876543212', 'ETC\'s, Railway Station MIDC', 'Aurangabad', 'Aurangabad', 'India', '431001', NULL, '2019-07-04 01:42:09', '2019-07-08 00:44:46'),
(2, '7', 'appa', 'appa@gmail.com', '9845654599', 'wedant nagar', 'Aurangabad', 'Aurangabad', 'India', '431204', NULL, '2019-08-04 00:41:48', '2019-08-06 03:54:48'),
(8, '13', 'amol', 'amol@gmail.com', '9845654565', 'jalna', NULL, NULL, NULL, NULL, NULL, '2019-08-06 03:59:49', '2019-08-06 03:59:49');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_12_10_102006_create_admins_table', 2),
(4, '2018_12_17_055534_create_products_table', 3),
(5, '2018_12_23_043749_create_superadmins_table', 4),
(7, '2018_12_26_095108_create_user_profiles_table', 6),
(8, '2018_12_26_105017_create_orders_table', 7),
(9, '2018_12_23_110322_create_categories_table', 8),
(10, '2019_05_22_063616_create_service_categories_table', 9),
(11, '2019_05_23_092355_create_services_table', 10),
(12, '2016_06_01_000001_create_oauth_auth_codes_table', 11),
(13, '2016_06_01_000002_create_oauth_access_tokens_table', 11),
(14, '2016_06_01_000003_create_oauth_refresh_tokens_table', 11),
(15, '2016_06_01_000004_create_oauth_clients_table', 11),
(16, '2016_06_01_000005_create_oauth_personal_access_clients_table', 11),
(17, '2019_06_08_065546_create_appointments_table', 12),
(18, '2019_07_01_053540_create_admin_profiles_table', 13),
(19, '2019_07_03_050353_create_maids_table', 14),
(20, '2019_07_04_063634_create_maid_profiles_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('01bb84b624c31319dc3154705a5da84edce44083d3d1e962723f4ea872371732ff749f4d19e82d00', 1, 1, 'MyApp', '[]', 0, '2019-07-25 00:32:05', '2019-07-25 00:32:05', '2020-07-25 06:02:05'),
('02072f3d84e3608dab7cb0cbc02f586cb409c900b3486695b822cc288e98ebff66551ac3cc549654', 1, 1, 'MyApp', '[]', 0, '2019-07-26 06:28:58', '2019-07-26 06:28:58', '2020-07-26 11:58:58'),
('0217e9321cad803954d49658aa936397457d1d58662e32bfe6dc48701593dfa27731c9690f7ad0df', 21, 1, 'MyApp', '[]', 0, '2019-07-29 06:19:48', '2019-07-29 06:19:48', '2020-07-29 11:49:48'),
('021e8fa6bd25dc9692a05be484e259152cefc37096d992ee412f645737f2faf39423600c3b54a839', 321, 1, 'MyApp', '[]', 0, '2019-09-08 16:25:49', '2019-09-08 16:25:49', '2020-09-08 21:55:49'),
('0293d08ee19699a1214ff5a164efdf4ed5ab73b2073b269122a54fac76fe340bf0d35823b82ac7d6', 1, 1, 'MyApp', '[]', 0, '2019-07-15 05:46:55', '2019-07-15 05:46:55', '2020-07-15 11:16:55'),
('04a08e29e0142aeb21480e8693ffd97b9a56e8929c79e278a6aa1e9f7dfce0cba3085e085d42ec4d', 1, 1, 'MyApp', '[]', 0, '2019-07-25 05:25:14', '2019-07-25 05:25:14', '2020-07-25 10:55:14'),
('074b4bc69e5b61a0a6d9879c039bfed1a2417d6bdef876ff76771201998d2b03f448d08a4819f724', 1, 1, 'MyApp', '[]', 0, '2019-07-25 05:04:06', '2019-07-25 05:04:06', '2020-07-25 10:34:06'),
('08428930c600ed48a93030e5284a61c2a84cc3109c8f70e11cbb2ea391113fdc99c3f75f20c5b636', 345, 1, 'MyApp', '[]', 0, '2019-11-09 01:13:07', '2019-11-09 01:13:07', '2020-11-09 06:43:07'),
('0859ccd2f0a3f8cdd955f92f306ebc9269192d802d94a9a20fb88cefbd1b37a1fe3bc43610d20e6f', 1, 1, 'MyApp', '[]', 0, '2019-07-24 03:59:07', '2019-07-24 03:59:07', '2020-07-24 09:29:07'),
('08e0c940b34ce3cde3e5120009c9cc1b281db7db4734f2b810515a7b1bdf06c083bcf17f360ad92a', 20, 1, 'MyApp', '[]', 0, '2019-07-29 05:35:41', '2019-07-29 05:35:41', '2020-07-29 11:05:41'),
('0ad55f61a0bf4a2e71e572f682d89990d9bcf7ded84bf6c4b663963dab1b92734951f4fded9332cb', 338, 1, 'MyApp', '[]', 0, '2019-10-05 05:39:11', '2019-10-05 05:39:11', '2020-10-05 11:09:11'),
('0b96c912783dc15417c2accf41dc67a1c7b694111fb325b354ebe4bbf8fc1ddda86138117db993a6', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:28:21', '2019-07-22 01:28:21', '2020-07-22 06:58:21'),
('0c4dcf31b29a8e085e790a246747124aaabb7302ae4e78cb916e2d617c64d25c1df2775eb9d701bf', 346, 1, 'MyApp', '[]', 0, '2019-11-09 01:27:01', '2019-11-09 01:27:01', '2020-11-09 06:57:01'),
('0d3f5e85c370c279b7932e584a76fd295f1b8b3fc28fc80aef04ad1766344865a52fe4910dbcaf75', 214, 1, 'MyApp', '[]', 0, '2019-08-25 06:33:40', '2019-08-25 06:33:40', '2020-08-25 12:03:40'),
('0e254cba37f638a3c55131ffd5cd9b435db5704ecce44356fb6ac235dc3bb09f6894d5eb86e452ef', 1, 1, 'MyApp', '[]', 0, '2019-07-25 06:57:47', '2019-07-25 06:57:47', '2020-07-25 12:27:47'),
('131364b80485d4a57be3431872b894b94c9450d69a38b691e945882d03c71c90429c8da54e539101', 1, 1, 'MyApp', '[]', 0, '2019-07-15 22:58:35', '2019-07-15 22:58:35', '2020-07-16 04:28:35'),
('1446535fa7ced0dbe401d2a9ed62495310bafeb85a437cb020650bc3160dd15629fb5b0360e93127', 1, 1, 'MyApp', '[]', 0, '2019-07-17 04:47:48', '2019-07-17 04:47:48', '2020-07-17 10:17:48'),
('14b381fee831061c1ed141bec8a987350732c32f5af46ec2fc27f6582db2a7eb68db27a8911d00c8', 1, 1, 'MyApp', '[]', 0, '2019-07-26 06:19:11', '2019-07-26 06:19:11', '2020-07-26 11:49:11'),
('1575a50dca0c753f0a975a53d6525f79db097a07bdec168aef704522c255db54ab7aa62d23c691f0', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:15:10', '2019-07-22 01:15:10', '2020-07-22 06:45:10'),
('1882ac964d96d02b9a931bcf0139d8d3dffb044e8ef7e123ea3a5a766dfa6b794ae23b241d63fd6a', 1, 1, 'MyApp', '[]', 0, '2019-07-15 22:59:02', '2019-07-15 22:59:02', '2020-07-16 04:29:02'),
('1ac350ce9df44ef188ac95664b7537c1c9bff98d4343530cd2e67489ae2b54af2af24079f76baa81', 316, 1, 'MyApp', '[]', 0, '2019-09-08 01:52:45', '2019-09-08 01:52:45', '2020-09-08 07:22:45'),
('1bd340cac901ddca9c8fb7ffb62a30722fab477ebb686ce734bd7e3be01aeca696aaf724f3013a6d', 1, 1, 'MyApp', '[]', 0, '2019-07-23 01:04:19', '2019-07-23 01:04:19', '2020-07-23 06:34:19'),
('1e9ca85da43ff8bdd524927f9776a6161214d67933819b45467e83bbab56d91358b4dddb0517888b', 9, 1, 'MyApp', '[]', 0, '2019-06-02 03:00:56', '2019-06-02 03:00:56', '2020-06-02 08:30:56'),
('1f59d88b0d0c7b97d287260d9bb6bd4ad51f137c23aa6713c6bb686cba03b9f73ee58a8e6ab85189', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:35:01', '2019-07-22 01:35:01', '2020-07-22 07:05:01'),
('1f67221647c11dc7ce94490c2d97dfe1e1c1e13852800f51b04356160e28ad2e868aa43a21b0586b', 1, 1, 'MyApp', '[]', 0, '2019-06-01 04:23:49', '2019-06-01 04:23:49', '2020-06-01 09:53:49'),
('2179c84ff2f42695a069113b9b1c1f7367feca29eb07f06a10396c5182e0c7e41edb9cefb00d52fc', 1, 1, 'MyApp', '[]', 0, '2019-07-29 02:03:37', '2019-07-29 02:03:37', '2020-07-29 07:33:37'),
('25ae225363cbb7de527bd4cdec950dca56c2c8e641b23a41224c6379041c5d4d52a81985160cd9fb', 344, 1, 'MyApp', '[]', 0, '2019-10-26 12:28:29', '2019-10-26 12:28:29', '2020-10-26 17:58:29'),
('2601447ab53903a8cdb08cf9f687897c244fa7ca436f9d5b618059a614057a2fc7af05a78abcc383', 1, 1, 'MyApp', '[]', 0, '2019-07-26 06:38:18', '2019-07-26 06:38:18', '2020-07-26 12:08:18'),
('27e50217e319da4aca406fca1ff2ea4e2b25f57c7d964420b1cdeaa1476cc01a00a8467ee735c064', 1, 1, 'MyApp', '[]', 0, '2019-07-29 00:57:26', '2019-07-29 00:57:26', '2020-07-29 06:27:26'),
('29d87e108e9729f1de6ca920296decef20779cd450a6ed248a0f1dfd475c8b1e05fb08df7ea8e33e', 18, 1, 'MyApp', '[]', 0, '2019-07-29 05:32:15', '2019-07-29 05:32:15', '2020-07-29 11:02:15'),
('2a2bbd83923e5530159c081c7fd8b40aa722f39be398ea9051dda147ed3a1764eb6a147df9c0ab85', 5, 1, 'MyApp', '[]', 0, '2019-07-23 00:09:34', '2019-07-23 00:09:34', '2020-07-23 05:39:34'),
('2b323f140f58b1c5da6f127aa7ebb5a5b7650e9d7597098b2be50677da9b56d65d092ce73d260519', 1, 1, 'MyApp', '[]', 0, '2019-07-26 06:26:21', '2019-07-26 06:26:21', '2020-07-26 11:56:21'),
('2c41368d5b5128f4bf1689e0bca1c3bdc91d014a2ee1028803ce5171c98e39952560a9205641083d', 1, 1, 'MyApp', '[]', 0, '2019-07-26 23:39:27', '2019-07-26 23:39:27', '2020-07-27 05:09:27'),
('2f0b4712cb380c09ab2e46f8a97dff31216d441968fea89f0b8c407af2434f251aa07cbb5398913e', 1, 1, 'MyApp', '[]', 0, '2019-07-25 05:30:02', '2019-07-25 05:30:02', '2020-07-25 11:00:02'),
('2f7a75044b0f6d0f9bcd041bf945cac28535b2899a0cdbcab54fb87ddb6c175c33b73b2f9215c60a', 349, 1, 'MyApp', '[]', 0, '2019-11-09 04:14:01', '2019-11-09 04:14:01', '2020-11-09 09:44:01'),
('2f92fd14151a3c2dc21af93080b7230830977d5dd911181a3439bc8ed6fcd7de282edeea2fdd1b24', 1, 1, 'MyApp', '[]', 0, '2019-07-29 06:09:57', '2019-07-29 06:09:57', '2020-07-29 11:39:57'),
('2fd64ba949544df18c3b8b9853d607ddcfde4793be8ccd29fadb4a5d89f4af845af2636648fec054', 1, 1, 'MyApp', '[]', 0, '2019-07-17 04:44:59', '2019-07-17 04:44:59', '2020-07-17 10:14:59'),
('323ea3475449502b994b35bdcb0d6044a81e63b16cc574927c2bfd4dedfe36608cbe1f7046e96089', 1, 1, 'MyApp', '[]', 0, '2019-07-27 00:35:44', '2019-07-27 00:35:44', '2020-07-27 06:05:44'),
('32e072b9687879528106184c45d98a0813751f137c74fd579479b777f61811af8ce0aec67e897290', 329, 1, 'MyApp', '[]', 0, '2019-09-21 04:08:33', '2019-09-21 04:08:33', '2020-09-21 09:38:33'),
('331d3522b9c0458866a664b4997a9525a52ae0c37486aa9561dd90c3ee4e4b4ddd4ed57a8c9db540', 1, 1, 'MyApp', '[]', 0, '2019-07-25 07:09:40', '2019-07-25 07:09:40', '2020-07-25 12:39:40'),
('334c120c6ce60df0dde9c2455a08d427b83d7ceb8c39b39fe08a2eda85aaf9bd2c3d4828bbae2fd2', 335, 1, 'MyApp', '[]', 0, '2019-10-03 06:30:08', '2019-10-03 06:30:08', '2020-10-03 12:00:08'),
('33571eae34a3cde7a8485ae8fb8c23ef012e044014a6e346a91d7ce12e96db3e12aa8810ea06b16c', 1, 1, 'MyApp', '[]', 0, '2019-07-22 00:56:31', '2019-07-22 00:56:31', '2020-07-22 06:26:31'),
('353dd692108d1c67858bd69bd845c045cec2704a74bb2c25073da0666f33ce5b1860fe2fe70d6cf7', 346, 1, 'MyApp', '[]', 0, '2019-11-11 03:57:21', '2019-11-11 03:57:21', '2020-11-11 09:27:21'),
('35f444dfc521c22566aa4261571468ff19934156a50d44b33ee80f6509306452c7460eba653b53c5', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:54:49', '2019-07-22 01:54:49', '2020-07-22 07:24:49'),
('363cbe41b73bf1f7016d43baa4ad7768a1f9bf17ae2d131e965025b1dfe19f6b2e7deef1ecc2f552', 341, 1, 'MyApp', '[]', 0, '2019-10-10 01:32:48', '2019-10-10 01:32:48', '2020-10-10 07:02:48'),
('372dd85644974cf5538641915f168a39896913cb41355cc58b58c7db604fb2d002b53b450d753fdd', 1, 1, 'MyApp', '[]', 0, '2019-07-22 06:07:23', '2019-07-22 06:07:23', '2020-07-22 11:37:23'),
('38916bec0394e63fb9b88c708867aff7301bbc634bc887df4ae9f33194c4399382a8ac97b71e325a', 348, 1, 'MyApp', '[]', 0, '2019-11-09 03:54:59', '2019-11-09 03:54:59', '2020-11-09 09:24:59'),
('39169ba969c6dba0b6810cdf69a3a6d531aae481eb147a8576b593e802c1f9b05cfe1dfa85487ec8', 1, 1, 'MyApp', '[]', 0, '2019-07-25 00:21:45', '2019-07-25 00:21:45', '2020-07-25 05:51:45'),
('39ca40052dbceed8d9ed537763fc10cfe7df15858946c096a6de9f5cc171dd388b91bc4daa6dab67', 1, 1, 'MyApp', '[]', 0, '2019-07-29 01:25:44', '2019-07-29 01:25:44', '2020-07-29 06:55:44'),
('3bc1c2b2980decf007f7e5ccaae37c0b20ae5530d97e14d7fd52cad4c011151d34a25d261014241f', 207, 1, 'MyApp', '[]', 0, '2019-08-11 03:36:28', '2019-08-11 03:36:28', '2020-08-11 09:06:28'),
('3c624c25f54ed2dca250a6b1bc2049fe3524315b3ebf5d383a300abcc6544ce24b8c88312832cfb7', 17, 1, 'MyApp', '[]', 0, '2019-07-29 05:30:15', '2019-07-29 05:30:15', '2020-07-29 11:00:15'),
('3c68b8e0658bfd572db260102495a1c56dee81e5db787b365a95bcd19cc68440f59b6a4659b63f16', 317, 1, 'MyApp', '[]', 0, '2019-09-08 02:04:41', '2019-09-08 02:04:41', '2020-09-08 07:34:41'),
('3ceee58691b26dc185d982a40044bb342cef761a08ee12d5634b31ca060660bb52fc5664756dec94', 214, 1, 'MyApp', '[]', 0, '2019-08-25 06:32:12', '2019-08-25 06:32:12', '2020-08-25 12:02:12'),
('3eb489f34b2f87647179eebe4db1e27f24f966452677b963770bd6514b319f996972d2c6c066ee1f', 1, 1, 'MyApp', '[]', 0, '2019-07-26 06:27:19', '2019-07-26 06:27:19', '2020-07-26 11:57:19'),
('4346456ce0f6773fc2c64f09332a84986018c0802e353af36158f90c3cf95fa43bb254a82543263b', 328, 1, 'MyApp', '[]', 0, '2019-09-09 00:59:37', '2019-09-09 00:59:37', '2020-09-09 06:29:37'),
('44a48875096cbc9365b3cd4624399a8382977893d6a6bfa4e53d73efab57e0b1af831c544323e21c', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:53:09', '2019-07-22 01:53:09', '2020-07-22 07:23:09'),
('44f397c779d1a2b25dec750a86c5a16f9b22d5911295b868dc6e4c52fbcb335ebb52d33b75900d90', 334, 1, 'MyApp', '[]', 0, '2019-09-29 08:16:39', '2019-09-29 08:16:39', '2020-09-29 13:46:39'),
('4512b22d53a3da58e800964a05bfcf9a7899fe34a0ff892096a07b015eea4e8550029fb4b97b15d4', 21, 1, 'MyApp', '[]', 0, '2019-07-29 06:15:28', '2019-07-29 06:15:28', '2020-07-29 11:45:28'),
('4b359a9ce6ae96682cf7764c66013cb2a4c12daaafad29ea5f5f3ca80791d69f653cd888b2410928', 1, 1, 'MyApp', '[]', 0, '2019-07-25 00:16:42', '2019-07-25 00:16:42', '2020-07-25 05:46:42'),
('4f40ee32af330bf408e0102894dfeb5e30a5f032e10f46f2b69c2edb9738dd570005bbd06cf187c8', 1, 1, 'MyApp', '[]', 0, '2019-07-27 04:05:45', '2019-07-27 04:05:45', '2020-07-27 09:35:45'),
('50028130ce9c232b54bfff72a42d6d939fe358af1b4ff1cb2577854caf9cfaaa318f6e94e4cf34d2', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:04:12', '2019-07-22 01:04:12', '2020-07-22 06:34:12'),
('51bf9d496c18c35de5eb29b4ba7921db34c99a0d6019493cfdafb81dc7b9da1c86d76b300f293f43', 348, 1, 'MyApp', '[]', 0, '2019-11-30 23:04:06', '2019-11-30 23:04:06', '2020-12-01 04:34:06'),
('52a6315733e04ed9a17d2c0bb502916752e9b704865dc9d7fb08a00c8d75e2d43904629973efa796', 1, 1, 'MyApp', '[]', 0, '2019-07-17 04:43:05', '2019-07-17 04:43:05', '2020-07-17 10:13:05'),
('52e73a515f8b94d5ac11dd4b76484972369c3182461ae110e255619530333c03e8eb4c7af303b249', 1, 1, 'MyApp', '[]', 0, '2019-07-26 23:39:24', '2019-07-26 23:39:24', '2020-07-27 05:09:24'),
('54a142fa09673998c96077168e296e669848b029c5e8c332137a1af98389e0bc81407e72ed2b349f', 1, 1, 'MyApp', '[]', 0, '2019-07-29 02:02:37', '2019-07-29 02:02:37', '2020-07-29 07:32:37'),
('565540250b17ae51cebcf6dc0bbe5f906b616f385672f251af026d861e886697ebd255ce4cb1d7d9', 1, 1, 'MyApp', '[]', 0, '2019-07-27 00:26:51', '2019-07-27 00:26:51', '2020-07-27 05:56:51'),
('56ec6baba8f7edcbd741f043999de44add70bf28a44f9fdab9f4f7f4cd210cb4741e5780965bc9dc', 331, 1, 'MyApp', '[]', 0, '2019-09-29 07:50:46', '2019-09-29 07:50:46', '2020-09-29 13:20:46'),
('59cae326d4d55ff8ce2db02e41568e63a052c4b60bf01560bcfc728559931490be31f3cc28db3e68', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:07:14', '2019-07-22 01:07:14', '2020-07-22 06:37:14'),
('5b09b39f363a82a80dc0e7c26e40c193d9aa11a877e018280ab5675f23e8e685d2da6e9f045fd199', 333, 1, 'MyApp', '[]', 0, '2019-09-29 08:11:59', '2019-09-29 08:11:59', '2020-09-29 13:41:59'),
('5c58f37f027638d2c9f78ca60e72cce8936811b3ff1780e0e66134a9d8f73b9bc56d5382637252a6', 50, 1, 'MyApp', '[]', 0, '2019-07-27 05:59:28', '2019-07-27 05:59:28', '2020-07-27 11:29:28'),
('5cbdc9735400bfda8f8301ce6d060115f7976aebdf6de2cc695aaefb2edf78b78b63e76b0cccc255', 1, 1, 'MyApp', '[]', 0, '2019-07-26 23:39:28', '2019-07-26 23:39:28', '2020-07-27 05:09:28'),
('5f890ce677c7f0d40fce57b2fe35078acc12edc5bbe293847e26dd7a76541bcc545c4eb40be389fd', 1, 1, 'MyApp', '[]', 0, '2019-07-17 04:22:50', '2019-07-17 04:22:50', '2020-07-17 09:52:50'),
('5f97a74e5ed34348aed274ccabdde02253d4d7da3a1d6893b16ea0cc7fa3f59356d81a348d5f2608', 10, 1, 'MyApp', '[]', 0, '2019-06-06 02:12:15', '2019-06-06 02:12:15', '2020-06-06 07:42:15'),
('5ff4b8b93854305dffbd914a2eba657bcce16b80bc879caef90fbea8e0cb11d27b43c445e19fce84', 6, 1, 'MyApp', '[]', 0, '2019-07-24 03:45:33', '2019-07-24 03:45:33', '2020-07-24 09:15:33'),
('61269c84b80f5974d5beb3d9dd237541fb43311893303fe0f0e666cae6806028e36f4e5a6fb55806', 347, 1, 'MyApp', '[]', 0, '2019-11-09 01:37:04', '2019-11-09 01:37:04', '2020-11-09 07:07:04'),
('629b9073cc47d9878336035f21a7798ac13578a18f702e8e51b2734b540ca377d08dfefeb30cbdc4', 339, 1, 'MyApp', '[]', 0, '2019-10-10 01:21:48', '2019-10-10 01:21:48', '2020-10-10 06:51:48'),
('63cd7a8eabac421e69b3ac6e1f7c247a13d57a477922cce5e3fb80866d47f1517535e71a0193914e', 337, 1, 'MyApp', '[]', 0, '2019-10-04 23:49:30', '2019-10-04 23:49:30', '2020-10-05 05:19:30'),
('6881b1bf5aad76878427b35389050b1f5424dcaf6128edf903d9a4171283791cf2473d51bda41096', 1, 1, 'MyApp', '[]', 0, '2019-07-23 00:00:31', '2019-07-23 00:00:31', '2020-07-23 05:30:31'),
('688f8fa393fa963934fa0fff2fbf97cc6b7120d76da2a4a3a5060003996de2be2edb6960824d2e44', 209, 1, 'MyApp', '[]', 0, '2019-08-11 04:41:51', '2019-08-11 04:41:51', '2020-08-11 10:11:51'),
('6a7f75db7cfddb803db93bc5a8bad671892595e90f372ef4d070924bb8e0846339f650c86bd852cc', 1, 1, 'MyApp', '[]', 0, '2019-07-29 05:17:00', '2019-07-29 05:17:00', '2020-07-29 10:47:00'),
('6af5709d58c6f96def9d13cd2de835a9b2f543fa15138f3a86a05eaf531717f10f64e8611b7a98aa', 1, 1, 'MyApp', '[]', 0, '2019-07-26 23:40:54', '2019-07-26 23:40:54', '2020-07-27 05:10:54'),
('6b802770cede58e1466f28a01a88b45c798c3121e2d0759b295ec0720339ff39efb39e965fee1694', 1, 1, 'MyApp', '[]', 0, '2019-07-26 23:46:27', '2019-07-26 23:46:27', '2020-07-27 05:16:27'),
('6b8cf862a760fdd69e0d77073a7d42ee6955f2cd5e349f99a6cae899e6ff84663fdef1e3fa29d9c0', 7, 1, 'MyApp', '[]', 0, '2019-07-24 03:59:30', '2019-07-24 03:59:30', '2020-07-24 09:29:30'),
('6bde043425ce0cc435a274659b4d6dd1b067a9fe62e8ea4da2355b11cf629e82bd2256561e4ad25f', 1, 1, 'MyApp', '[]', 0, '2019-07-22 00:21:07', '2019-07-22 00:21:07', '2020-07-22 05:51:07'),
('6c4b25a5bc1622be8cc5470c70b81f03b3e25c55cb47e1c9160b84d9d07a9b992df058537fdcca63', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:31:22', '2019-07-22 01:31:22', '2020-07-22 07:01:22'),
('6c92352a60237efc3a11badd9d55ebb9a100fbd3c96b9c52911c0ebb57552091f76d6b882fc5450f', 21, 1, 'MyApp', '[]', 0, '2019-07-29 06:22:13', '2019-07-29 06:22:13', '2020-07-29 11:52:13'),
('6d5337525821abf71780881f9460eb098d322b8ea0aaa75514d537bb7c75c3b6e5892865e09e5291', 1, 1, 'MyApp', '[]', 0, '2019-08-03 03:47:18', '2019-08-03 03:47:18', '2020-08-03 09:17:18'),
('70c212456ca8a7dee96d31b533af31a18760926e6187b3525b85a46d3ffa8c994ef0ac2826cda138', 347, 1, 'MyApp', '[]', 0, '2019-11-27 04:07:53', '2019-11-27 04:07:53', '2020-11-27 09:37:53'),
('7235dfb59b58936d81c28d08ba749b7b3280e0531165b27920393eaa7d5efd916256109455cd89c3', 1, 1, 'MyApp', '[]', 0, '2019-07-16 00:36:16', '2019-07-16 00:36:16', '2020-07-16 06:06:16'),
('72b7b39f082e48456da41d5b69c7740b38241a735b28f457b78da2dc5611d55465269649a5be1f26', 21, 1, 'MyApp', '[]', 0, '2019-07-29 06:32:31', '2019-07-29 06:32:31', '2020-07-29 12:02:31'),
('73109c79b8500700368ca1b3bd2e47d74ff936b8a444e8ed8913066350c066e4da44ad95f52a44e1', 1, 1, 'MyApp', '[]', 0, '2019-07-16 03:43:18', '2019-07-16 03:43:18', '2020-07-16 09:13:18'),
('7397dc669743cf26d5eb8f2bb9468cd640cc5cb2db79ff6b4ffa729c24358bc7992bcab6ccec14f8', 351, 1, 'MyApp', '[]', 0, '2019-11-09 05:59:09', '2019-11-09 05:59:09', '2020-11-09 11:29:09'),
('73eea7eba351029708af72fa3bb8e990e9b2b1df2af04436ba8f07bc20cf97b94ed5c1547ad478fd', 1, 1, 'MyApp', '[]', 0, '2019-07-27 00:03:38', '2019-07-27 00:03:38', '2020-07-27 05:33:38'),
('742bded2ccd219eb2418b5a444e86bd005ac02d5874a03d9184655b857ecaa217601f8c493fb48fa', 320, 1, 'MyApp', '[]', 0, '2019-09-08 04:32:55', '2019-09-08 04:32:55', '2020-09-08 10:02:55'),
('7757f20e5a85b40c96968de52f5746c0b986e410f1ecd6ed632171249ac4654af7923f4726a856d6', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:00:17', '2019-07-22 01:00:17', '2020-07-22 06:30:17'),
('7af3804c53f4fa515af74658282c2f19c3b494e6e2bf85e26be4cefc1f494d51f01f1232feb31fb3', 1, 1, 'MyApp', '[]', 0, '2019-07-29 01:35:12', '2019-07-29 01:35:12', '2020-07-29 07:05:12'),
('7c355c338fdf3ac33647d64694b4cc783056dcdc04ee67780d267d63f781512505ee8e2f681946a9', 5, 1, 'MyApp', '[]', 0, '2019-07-23 01:01:06', '2019-07-23 01:01:06', '2020-07-23 06:31:06'),
('7c40ec0d30b3d41df0e2133e3692a7d2caab82f834d3372dc4fbda2b92ec74bf60465dd6f31c9f8f', 1, 1, 'MyApp', '[]', 0, '2019-07-29 05:04:26', '2019-07-29 05:04:26', '2020-07-29 10:34:26'),
('7cc9543025a59b7e9d5505fd9d8a937d253892e1e789a5b01267712f6c899b83740e5f0f91fb77c0', 1, 1, 'MyApp', '[]', 0, '2019-07-29 01:44:45', '2019-07-29 01:44:45', '2020-07-29 07:14:45'),
('7ce6740faac65f91777dd676c73d16e6bfc6662b98ebb6494287a6ab89ace0067c91193f235310f6', 1, 1, 'MyApp', '[]', 0, '2019-07-27 03:41:48', '2019-07-27 03:41:48', '2020-07-27 09:11:48'),
('7d635e87c5a5e1fc9adc4c96450d40a933f082e8f469a499a9a0808caaf5d958d3ba988353d17b27', 1, 1, 'MyApp', '[]', 0, '2019-07-22 05:50:20', '2019-07-22 05:50:20', '2020-07-22 11:20:20'),
('7e0092133d92e7164918341f811a7ab5be8a43f6e326649719a954b756d98e272e7e4e1c84f06400', 1, 1, 'MyApp', '[]', 0, '2019-07-17 00:08:10', '2019-07-17 00:08:10', '2020-07-17 05:38:10'),
('802675632c01c8534895d46eb649cd122f3d5f35e3c4aa7498da48e4b2cfc761071162772e85c871', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:12:54', '2019-07-22 01:12:54', '2020-07-22 06:42:54'),
('80d2fffc78eb8a810238c8cb1e9665ef66a9cc5b9a68b98b96535bdcfeefeb23b92d36f9857d036b', 1, 1, 'MyApp', '[]', 0, '2019-07-25 06:46:55', '2019-07-25 06:46:55', '2020-07-25 12:16:55'),
('8249f580bf6b2244b61150ad48a4986c5e5358b237534bf1cc51e592e02739b5410690cd78ee0ea5', 1, 1, 'MyApp', '[]', 0, '2019-07-23 03:32:22', '2019-07-23 03:32:22', '2020-07-23 09:02:22'),
('83559d065888a185d65715f65e651cbcb614eeb7e7374ecd778c20b35f4f753e3f8aa158096984e6', 1, 1, 'MyApp', '[]', 0, '2019-07-29 01:44:14', '2019-07-29 01:44:14', '2020-07-29 07:14:14'),
('8584b7f4d6f2e076e334d9382d610c9ca3642b677ec76ea5359e9ec22b95dfdc4030171588716649', 5, 1, 'MyApp', '[]', 0, '2019-07-23 00:34:28', '2019-07-23 00:34:28', '2020-07-23 06:04:28'),
('85dda675bde0c311172d841eecf80ec1191a5b333171c2470558efa765d37d96c313f268cfeaf7e7', 5, 1, 'MyApp', '[]', 0, '2019-07-22 23:32:22', '2019-07-22 23:32:22', '2020-07-23 05:02:22'),
('86fbd856622321501e0e37e51970cc547169fb15618e090ad10704efbd34434810d4b2e06c369700', 1, 1, 'MyApp', '[]', 0, '2019-07-27 03:06:43', '2019-07-27 03:06:43', '2020-07-27 08:36:43'),
('88b33d74161b8fd84ecc506ecf53b512d546ebcb926bf43a78af5c3e35cd4f60a01ecc6e1b4397de', 1, 1, 'MyApp', '[]', 0, '2019-07-17 04:25:50', '2019-07-17 04:25:50', '2020-07-17 09:55:50'),
('897ff1503856c703be40bf208f58303231bd0d450c812f0809812f3fd4477df4d64d088a5a301cb3', 1, 1, 'MyApp', '[]', 0, '2019-07-26 23:39:19', '2019-07-26 23:39:19', '2020-07-27 05:09:19'),
('8b29756cb780aad2dc31d9e945cfeaf67b870b38ecd6e7ce7d132a2a8d7075b31fca54dc4f773d70', 1, 1, 'MyApp', '[]', 0, '2019-08-03 03:48:46', '2019-08-03 03:48:46', '2020-08-03 09:18:46'),
('8ea546a7cb5af6db2f44d6799e3edcf8f13be7477fe2cb01bd470ca46a375a0ffb9bf12e0d903735', 200, 1, 'MyApp', '[]', 0, '2019-08-11 03:11:19', '2019-08-11 03:11:19', '2020-08-11 08:41:19'),
('929fd581d92c8d3ecae405ba204bdd94c8c863e4a4a6b09a0b6a498c4ccefe09829ae6c453ffd408', 1, 1, 'MyApp', '[]', 0, '2019-07-23 00:18:30', '2019-07-23 00:18:30', '2020-07-23 05:48:30'),
('930a7e42fe2b3433215b4a93646d4fe515bc3c51538a11100fc89091025089e2597d2de3def355eb', 12, 1, 'MyApp', '[]', 0, '2019-06-06 02:13:23', '2019-06-06 02:13:23', '2020-06-06 07:43:23'),
('94b17eb84c0324f613184878453334b3ab44533d310c5efa70c62e94c4cde6be7db6daba63ff4e43', 1, 1, 'MyApp', '[]', 0, '2019-07-16 00:25:38', '2019-07-16 00:25:38', '2020-07-16 05:55:38'),
('94e8d401037e107e90005c18c5e1183de2b02a4d64522005cce48c73dd62284288b5fa1426df7362', 1, 1, 'MyApp', '[]', 0, '2019-07-29 01:35:49', '2019-07-29 01:35:49', '2020-07-29 07:05:49'),
('95385641649553666978c43fa53de230ca20ba12a0b9efe6b277ed42e3a53bf01ce9c3e4493f3ef1', 1, 1, 'MyApp', '[]', 0, '2019-07-26 23:39:28', '2019-07-26 23:39:28', '2020-07-27 05:09:28'),
('954332eea4205b6c630d297c30369cb453a5195907bf2b86df3978027b4ccc6d7f1084574bdd6b21', 1, 1, 'MyApp', '[]', 0, '2019-07-25 05:26:01', '2019-07-25 05:26:01', '2020-07-25 10:56:01'),
('96252cc6674c371ed9d28026b45844948550ba2481b9cf7ea2399ba1d1da63f9f6d9064e3b6c2399', 1, 1, 'MyApp', '[]', 0, '2019-07-26 23:02:43', '2019-07-26 23:02:43', '2020-07-27 04:32:43'),
('99aa245ef5b26addb12ce5e81cf331d9073982993b97fd9b41cef4c9ae1ef2abd0fb185e243074bb', 1, 1, 'MyApp', '[]', 0, '2019-07-27 00:26:31', '2019-07-27 00:26:31', '2020-07-27 05:56:31'),
('9a1325f07831101f5547c3f9c0ff96e153e3d164f7e014cd03278448a996cff94d154e44d15b5803', 24, 1, 'MyApp', '[]', 0, '2019-07-27 01:57:59', '2019-07-27 01:57:59', '2020-07-27 07:27:59'),
('9a8950b8ce1a55bf0ed561533fb28c4d3f162f6f2f6b7b152a5cd9d66109e66124624ce91219aa3c', 1, 1, 'MyApp', '[]', 0, '2019-07-27 00:31:54', '2019-07-27 00:31:54', '2020-07-27 06:01:54'),
('9c4925875ebab235115f70a9e4d0dc5ba36e9a798d8171ba33426e3b03a54b8e1dd2b38d9d13bfaa', 1, 1, 'MyApp', '[]', 0, '2019-07-27 03:41:47', '2019-07-27 03:41:47', '2020-07-27 09:11:47'),
('9ddcff06d44e26adc6558e822f89d2f754bfdd1d5ac4c7d0d3dc08c553796ddb7091ef7e7a55da83', 1, 1, 'MyApp', '[]', 0, '2019-07-25 00:06:13', '2019-07-25 00:06:13', '2020-07-25 05:36:13'),
('9ec7ce22359047abd53243d2632653b88b94c8505652de15c43e34939699ddef92ff7327ef906e70', 1, 1, 'MyApp', '[]', 0, '2019-07-27 03:41:47', '2019-07-27 03:41:47', '2020-07-27 09:11:47'),
('a00e668ac94af1c3660b4d02eee5a7c73a3e95190e39ea7c66cad026c5dcfdcd15e796af507a1ec4', 332, 1, 'MyApp', '[]', 0, '2019-09-29 08:01:28', '2019-09-29 08:01:28', '2020-09-29 13:31:28'),
('a4f3257e79e5638c1ce2027c84a2a4f836a173e41dda9b27b6b0868e892755a92f0dad702ffc0ec3', 1, 1, 'MyApp', '[]', 0, '2019-07-26 06:34:24', '2019-07-26 06:34:24', '2020-07-26 12:04:24'),
('a5bb3a9913f43de708b4858d159dbea215dc5ecb5fdbd619c19027355072a7eb76edc280db977b71', 15, 1, 'MyApp', '[]', 0, '2019-07-27 08:13:12', '2019-07-27 08:13:12', '2020-07-27 13:43:12'),
('a6e9fa3b8b0fe9f536d2f289e7343a552fba62480335f624c62d5445ef99158397af63579137745d', 1, 1, 'MyApp', '[]', 0, '2019-07-25 06:08:24', '2019-07-25 06:08:24', '2020-07-25 11:38:24'),
('aa8707faf258cfbdc91a3eb50165249358cf06ba6553493ee5a9051940949a543081caf45105cb68', 1, 1, 'MyApp', '[]', 0, '2019-07-15 23:07:37', '2019-07-15 23:07:37', '2020-07-16 04:37:37'),
('abd86ba520a6fb74bc215ee221449b0c18feca9c4fea02d0ee7627c2ead3084451d288715d71ed79', 1, 1, 'MyApp', '[]', 0, '2019-07-29 01:33:51', '2019-07-29 01:33:51', '2020-07-29 07:03:51'),
('ad8613dd53bdd0b248f9ac757e2b9afc9d60404390155bf0679277a77bf65862f010e756d133b1a0', 1, 1, 'MyApp', '[]', 0, '2019-07-23 00:16:39', '2019-07-23 00:16:39', '2020-07-23 05:46:39'),
('af45a4f601f84a484d8c424c0ae55da238854af597c1c2dd9d5b8ee151033182492413e8794fe0ce', 21, 1, 'MyApp', '[]', 0, '2019-07-29 06:12:00', '2019-07-29 06:12:00', '2020-07-29 11:42:00'),
('aff139e2da5f174450638c8355f071478852d8bf2e08c76ecb1f2d835e34d199234435c4fa4d03ef', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:02:25', '2019-07-22 01:02:25', '2020-07-22 06:32:25'),
('b0721aed72d8a025ff3db5d03c38571a43c779a85174a0af7c6cfafa06ed39a821a810ef00ee3504', 1, 1, 'MyApp', '[]', 0, '2019-07-22 00:54:01', '2019-07-22 00:54:01', '2020-07-22 06:24:01'),
('b1ef77dc063bc2da8c2070e37c38c2e5facbc0c3e2221f0e658746bd85c59f92f9651a3cddfbdff3', 315, 1, 'MyApp', '[]', 0, '2019-09-08 01:46:12', '2019-09-08 01:46:12', '2020-09-08 07:16:12'),
('b26ce240db2a55aa2b4075aee243f312239e4e87fae02a0b9b02173d4ad98952bf49275741ffe0b1', 9, 1, 'MyApp', '[]', 0, '2019-06-02 03:00:39', '2019-06-02 03:00:39', '2020-06-02 08:30:39'),
('b3da6c67aa13c90ca7ca51d2db9e7997c38baa5b6077d8db8486e2b5786ca61dbf77e1f2b40545c8', 1, 1, 'MyApp', '[]', 0, '2019-07-17 04:30:23', '2019-07-17 04:30:23', '2020-07-17 10:00:23'),
('b643b9703d05d1fe8afe4978a5d825262fb7468991cc00c7191aa67f83872b2c91329e8873fe44d7', 1, 1, 'MyApp', '[]', 0, '2019-07-15 05:30:39', '2019-07-15 05:30:39', '2020-07-15 11:00:39'),
('b838660d3a30f98c7f0b2445c09104f67c5091ac7fb56a05636bfc02649a981278f583ce20cc4816', 214, 1, 'MyApp', '[]', 0, '2019-08-25 06:42:45', '2019-08-25 06:42:45', '2020-08-25 12:12:45'),
('ba67bbdcb60d85977795f625f6d5beb3624cba08bf8bf2d177320fa763ee0ee765e3f2e3efb55466', 1, 1, 'MyApp', '[]', 0, '2019-07-29 01:35:24', '2019-07-29 01:35:24', '2020-07-29 07:05:24'),
('bb04727dd2477049a4a5f3823f5fcc719f5364fb357d900a7da8007928024ceed520ef339f81f027', 9, 2, NULL, '[]', 0, '2019-06-04 00:37:23', '2019-06-04 00:37:23', '2020-06-04 06:07:23'),
('bb403129f0b8d15949a57ad321b01e038cb4b4246fc65f7ef4e3cdd185ef4d00cf4a06468c840082', 1, 1, 'MyApp', '[]', 0, '2019-07-27 00:22:51', '2019-07-27 00:22:51', '2020-07-27 05:52:51'),
('bb8df508836e2b72d0874036f6598fe5aba248f74307b8d8caf9a04326f913dea2de572e24d08fd3', 19, 1, 'MyApp', '[]', 0, '2019-07-29 05:34:27', '2019-07-29 05:34:27', '2020-07-29 11:04:27'),
('c1d9d1655eb91f2a25d7a1c4a88d2f7f52bd340c5f1ac789cf18f01f8150925dbc98db9c3c8957be', 206, 1, 'MyApp', '[]', 0, '2019-08-11 03:30:08', '2019-08-11 03:30:08', '2020-08-11 09:00:08'),
('c3161e231b55be4a377e19df38a6d834d3cb31559b6894621edef835ee9d4099f693d819b7da3f18', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:20:48', '2019-07-22 01:20:48', '2020-07-22 06:50:48'),
('c5b0029c714e7a55c914519b12aa1e328dc9dba8abcae226cadee443c7b774b70fcaa23b19913d18', 322, 1, 'MyApp', '[]', 0, '2019-09-08 20:31:10', '2019-09-08 20:31:10', '2020-09-09 02:01:10'),
('c6dc07b433b93cfed18c4b56c224d99cb51f83e17f089ab50d2368b0a1b44b72865d14b9c1b09b6f', 330, 1, 'MyApp', '[]', 0, '2019-09-21 04:36:23', '2019-09-21 04:36:23', '2020-09-21 10:06:23'),
('c7662ddfdbb2f7b0f13a775840a6b4a21e86eb43974e042d16c2c8f2abab40dae41963767e926e77', 1, 1, 'MyApp', '[]', 0, '2019-07-16 00:35:09', '2019-07-16 00:35:09', '2020-07-16 06:05:09'),
('c96ba61e805a1a7a4132fc91596ec75e7b3158d71a3aa65cd5aaf27fc87b640bc76a6f2b49652caf', 340, 1, 'MyApp', '[]', 0, '2019-10-10 01:27:28', '2019-10-10 01:27:28', '2020-10-10 06:57:28'),
('ca165cbaf4d90a9980948bc7b8de7b32824a5b80e25da7a8845efb1ff87e520cd45806b49b6929be', 1, 1, 'MyApp', '[]', 0, '2019-08-03 03:49:13', '2019-08-03 03:49:13', '2020-08-03 09:19:13'),
('cce415d15bd060157f855e8ebd975cb6fbc4f3b69ceee319331640a6a7cbe1756e020d5c9219534c', 22, 1, 'MyApp', '[]', 0, '2019-07-29 06:32:01', '2019-07-29 06:32:01', '2020-07-29 12:02:01'),
('ccfae9d53972bf95387c237e2851bf638fe3c25fae33c7b74c9f2210ec037c68109f4d1074e403ce', 11, 1, 'MyApp', '[]', 0, '2019-06-06 02:13:10', '2019-06-06 02:13:10', '2020-06-06 07:43:10'),
('ce139556fee389960f4adca8053f2438d9c0245041e32af747a7a42fca540ec6a09135e9c8764da8', 327, 1, 'MyApp', '[]', 0, '2019-09-09 00:27:19', '2019-09-09 00:27:19', '2020-09-09 05:57:19'),
('ced35e41d91cd3ee82e1e9c2b9840b993864449e659d01261ccba0d78a41f67e4feda6d39e58068e', 1, 1, 'MyApp', '[]', 0, '2019-07-25 06:22:29', '2019-07-25 06:22:29', '2020-07-25 11:52:29'),
('cefffabc082adb4bf1a537a4e8a5ead0903894d12f3d90aeb626b7304adcc4613330dc604daa9477', 1, 1, 'MyApp', '[]', 0, '2019-08-03 03:47:21', '2019-08-03 03:47:21', '2020-08-03 09:17:21'),
('cfe4d8d29aee078c8f3e1c440d5e4384151184ee15ae5340da62abbbd1e878e5c895925c78697120', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:23:31', '2019-07-22 01:23:31', '2020-07-22 06:53:31'),
('d20975ff3398f7b3bd1d9f72dccb5e93cf98023dbf72573d1b337f051d96c5a4229afb03f00d4bd0', 310, 1, 'MyApp', '[]', 0, '2019-09-08 01:23:48', '2019-09-08 01:23:48', '2020-09-08 06:53:48'),
('d37efb7a1093aadf1b220641f5a944a49b5678d1d49d0ecc3750aca8a8b2f9ecdc143161201c8e45', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:33:01', '2019-07-22 01:33:01', '2020-07-22 07:03:01'),
('d3b95f94443a0bd97225ed467b0e6415f492e1e3a345149bf7fcade40a5b83bbcc07675507225ac5', 1, 1, 'MyApp', '[]', 0, '2019-07-26 06:25:22', '2019-07-26 06:25:22', '2020-07-26 11:55:22'),
('d3fdea883ed3c8f7b5ce2649b0a1d8131e88b59819fe8828f66585f71f00bb39afc6931c118c9192', 1, 1, 'MyApp', '[]', 0, '2019-07-17 00:12:10', '2019-07-17 00:12:10', '2020-07-17 05:42:10'),
('d54b32ebb9f1ca6bb39dcb7fb001db90da14e023baef648c9009f4779a2b74cc073d8997839a2961', 308, 1, 'MyApp', '[]', 0, '2019-09-08 01:19:08', '2019-09-08 01:19:08', '2020-09-08 06:49:08'),
('d568dbb5ac897cd149a83e0d8bd405ee24bbf509d6ba4fa16fe5b8719d66689d78eaa0316437342d', 1, 1, 'MyApp', '[]', 0, '2019-07-26 06:26:32', '2019-07-26 06:26:32', '2020-07-26 11:56:32'),
('d7db615d0f82c0613c90e39d5fe85b7ddb71c7e01c80b1755b3c6a7ffc46c5a2029d1a9b0cb3bb4b', 349, 1, 'MyApp', '[]', 0, '2019-12-07 05:19:15', '2019-12-07 05:19:15', '2020-12-07 10:49:15'),
('da3e16df122b7dcbfb4c8767dea88cb5b1d4d917e2befc4792ef5061a5da7f69f01a2845d9ace961', 1, 1, 'MyApp', '[]', 0, '2019-07-29 05:25:31', '2019-07-29 05:25:31', '2020-07-29 10:55:31'),
('da709c4f3f302881475187780e06a9e2180f33d65ca4b9a81c0c240e93994e031775a711ff6dbad0', 203, 1, 'MyApp', '[]', 0, '2019-08-11 03:26:31', '2019-08-11 03:26:31', '2020-08-11 08:56:31'),
('df28dfc5b8e65fb55fb004bf3271f8daaf5fce9804042ccfe955d542ee9d1ae854a6e1623531eb45', 1, 1, 'MyApp', '[]', 0, '2019-07-27 03:41:47', '2019-07-27 03:41:47', '2020-07-27 09:11:47'),
('df2c6cca97e84132f75531d03fb5fc876a46973992dc539dca9db251f9ec1994d2eb1d2373d327df', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:30:19', '2019-07-22 01:30:19', '2020-07-22 07:00:19'),
('df89a32cbb8a918b8c135eb0f42dc26884fc1ab78c2c234afb27099b22d87e52bbd671d4206400d4', 1, 1, 'MyApp', '[]', 0, '2019-07-25 06:24:35', '2019-07-25 06:24:35', '2020-07-25 11:54:35'),
('e2d9ea907ed05caf9b53047a143a990a2927f005b6ad06a2f71fa1553fe9a926dd6c22dd9787e9cd', 1, 1, 'MyApp', '[]', 0, '2019-07-27 03:41:43', '2019-07-27 03:41:43', '2020-07-27 09:11:43'),
('e4eccf239813a92ee8d889db88f0e21f790813da00d046509e64c0ffc24f71dda606e90a369b6fbe', 1, 1, 'MyApp', '[]', 0, '2019-07-26 23:39:53', '2019-07-26 23:39:53', '2020-07-27 05:09:53'),
('e4ed2787479fbc9999f2eb07a11868235f1233e3e404cfdfd950b68f7df59a3cc996ecd3505c6434', 312, 1, 'MyApp', '[]', 0, '2019-09-08 01:30:08', '2019-09-08 01:30:08', '2020-09-08 07:00:08'),
('e611a8e082f8a6da59d5fae52020e371efca7bfd716f2d55296dc5f156076aea0d03074bd2230cda', 343, 1, 'MyApp', '[]', 0, '2019-10-22 19:46:48', '2019-10-22 19:46:48', '2020-10-23 01:16:48'),
('e9e7965b2bd3d81b9174ea32f6ed01b815139f58d7b4d1e0a6acbb238bb9cc3d5480abde1fcae177', 336, 1, 'MyApp', '[]', 0, '2019-10-04 23:47:01', '2019-10-04 23:47:01', '2020-10-05 05:17:01'),
('eb3a537b5ea462ea56af71f1187618ea0fb87c469c581039ebfc7879c5e5f93c1610d332f1582cc4', 1, 1, 'MyApp', '[]', 0, '2019-07-27 00:38:43', '2019-07-27 00:38:43', '2020-07-27 06:08:43'),
('eb9c71a096e4d949d0815423029e4cd3746fd30943be9be731168429aa2fb3b7e4867d5b3a2d04c4', 1, 1, 'MyApp', '[]', 0, '2019-07-25 05:28:47', '2019-07-25 05:28:47', '2020-07-25 10:58:47'),
('ebdcbbb440aba651931d9e2f8d5d869bcab1801f8feb085a2a27cf228d1c24ab23f0e2e06bf24237', 323, 1, 'MyApp', '[]', 0, '2019-09-08 23:59:59', '2019-09-08 23:59:59', '2020-09-09 05:29:59'),
('ec738f54bc0d8e964505ac53604aa09cd194373e4953c4a611efb58fd9517826fc139c0038f8b599', 1, 1, 'MyApp', '[]', 0, '2019-07-22 23:00:55', '2019-07-22 23:00:55', '2020-07-23 04:30:55'),
('ec9edd5e15c3ef39c6a41f9f8c0c14627aab8ff1ac5a061f249381179e5bf31dfd3d8b96b9cf7b74', 1, 1, 'MyApp', '[]', 0, '2019-07-29 04:17:40', '2019-07-29 04:17:40', '2020-07-29 09:47:40'),
('ed80cd952c88ae0d984e9240d30cc6132f6819a17d3d7e0af9239c27dd1a88730bacbf0506d4c191', 345, 1, 'MyApp', '[]', 0, '2019-11-11 03:29:29', '2019-11-11 03:29:29', '2020-11-11 08:59:29'),
('eed8c6ac135974e942469b50ac9ce6071c9111d92dd9bac5c4e68a23e56baf8b78903d3ede173ea1', 1, 1, 'MyApp', '[]', 0, '2019-07-26 23:02:44', '2019-07-26 23:02:44', '2020-07-27 04:32:44'),
('f38faf540621d0f1994e22c0a10a1457801150899f155f1514680b05e906b834c46a017ef7c4c177', 342, 1, 'MyApp', '[]', 0, '2019-10-12 21:34:06', '2019-10-12 21:34:06', '2020-10-13 03:04:06'),
('f41c8071e1493234bd159a389106cb9e7ee2a83e0f11f143f19ffd6ad8fd9e2395aa50e41da06bcd', 1, 1, 'MyApp', '[]', 0, '2019-07-27 00:39:13', '2019-07-27 00:39:13', '2020-07-27 06:09:13'),
('f5599aabf89e6b3adcd4f1cb29af931a20e48f2c620d883e66e58480665b76bbfbee7318b4adc203', 350, 1, 'MyApp', '[]', 0, '2020-01-07 07:15:53', '2020-01-07 07:15:53', '2021-01-07 12:45:53'),
('f594e0e4cf8e1517b157509a23c4115ec1e5149228205212c3f77376254d6f089a1fe4fece97e564', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:27:20', '2019-07-22 01:27:20', '2020-07-22 06:57:20'),
('f9187338085a5c7a4a3c4936b9d989998b23a5fe85e7e0007e3720e5050f587bea4e758645dc0b24', 350, 1, 'MyApp', '[]', 0, '2019-11-09 04:35:56', '2019-11-09 04:35:56', '2020-11-09 10:05:56'),
('fa0720eb0592f286c322c12b0e6bf1280dc436cda65961bee4a15db285a43b729e27deb607474b6f', 1, 1, 'MyApp', '[]', 0, '2019-07-22 01:08:21', '2019-07-22 01:08:21', '2020-07-22 06:38:21'),
('fa7b89154d54387939760392a1397387cf423050dd2bc2aa159d3746c9fd7fc97b029a5a633075e1', 351, 1, 'MyApp', '[]', 0, '2020-01-07 07:16:40', '2020-01-07 07:16:40', '2021-01-07 12:46:40'),
('fae7ef8d297653ec070356433d0612fbe99fe276b1c2110264d216fc40ddc59fa39f561e36a72681', 1, 1, 'MyApp', '[]', 0, '2019-07-15 05:25:48', '2019-07-15 05:25:48', '2020-07-15 10:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Dial For Made Personal Access Client', 'VjGfN9oKx2JzsfaChQFUJqTcTGDc0OwjIqFJnH9I', 'http://localhost', 1, 0, 0, '2019-06-01 01:16:15', '2019-06-01 01:16:15'),
(2, NULL, 'Dial For Made Password Grant Client', '62wMMoQ2SZYcPHWsxBEKoR9wNqMypDDosbUzZNGi', 'http://localhost', 0, 1, 0, '2019-06-01 01:16:15', '2019-06-01 01:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-06-01 01:16:15', '2019-06-01 01:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('d18d76d0abb8b2264484b9e14326dd96aeb963026b7d7cfe12c57f95700bdc2328e81902e62da538', 'bb04727dd2477049a4a5f3823f5fcc719f5364fb357d900a7da8007928024ceed520ef339f81f027', 0, '2020-06-04 06:07:23');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `cart`, `address`, `name`, `payment_id`, `payment_details`, `transaction_id`, `amount`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:9;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:100;s:4:\"item\";O:11:\"App\\Product\":26:{s:8:\"\0*\0casts\";a:4:{s:5:\"title\";s:5:\"array\";s:8:\"subtitle\";s:5:\"array\";s:13:\"product_price\";s:5:\"array\";s:4:\"body\";s:5:\"array\";}s:11:\"\0*\0fillable\";a:5:{i:0;s:5:\"image\";i:1;s:5:\"title\";i:2;s:8:\"subtitle\";i:3;s:4:\"body\";i:4;s:13:\"product_price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:25:{s:2:\"id\";i:9;s:5:\"title\";s:17:\"{\"en\":\"DemoTest\"}\";s:8:\"subtitle\";s:13:\"{\"en\":\"Test\"}\";s:4:\"slug\";s:4:\"Test\";s:13:\"product_price\";s:5:\"\"100\"\";s:14:\"original_price\";N;s:13:\"main_category\";N;s:12:\"sub_category\";N;s:5:\"offer\";N;s:7:\"country\";N;s:7:\"section\";N;s:10:\"meta_title\";N;s:16:\"meta_description\";N;s:12:\"meta_keyword\";N;s:18:\"product_ref_number\";N;s:8:\"discount\";N;s:13:\"return_policy\";N;s:4:\"body\";s:13:\"{\"en\":\"Test\"}\";s:6:\"status\";i:1;s:8:\"postedby\";N;s:4:\"like\";N;s:7:\"dislike\";N;s:5:\"image\";s:66:\"public/product-images/rVaRmWrwMYuNAxgua3CFDXJKcptldMAz5xaofVy7.png\";s:10:\"created_at\";s:19:\"2018-12-23 10:50:25\";s:10:\"updated_at\";s:19:\"2018-12-23 10:50:25\";}s:11:\"\0*\0original\";a:25:{s:2:\"id\";i:9;s:5:\"title\";s:17:\"{\"en\":\"DemoTest\"}\";s:8:\"subtitle\";s:13:\"{\"en\":\"Test\"}\";s:4:\"slug\";s:4:\"Test\";s:13:\"product_price\";s:5:\"\"100\"\";s:14:\"original_price\";N;s:13:\"main_category\";N;s:12:\"sub_category\";N;s:5:\"offer\";N;s:7:\"country\";N;s:7:\"section\";N;s:10:\"meta_title\";N;s:16:\"meta_description\";N;s:12:\"meta_keyword\";N;s:18:\"product_ref_number\";N;s:8:\"discount\";N;s:13:\"return_policy\";N;s:4:\"body\";s:13:\"{\"en\":\"Test\"}\";s:6:\"status\";i:1;s:8:\"postedby\";N;s:4:\"like\";N;s:7:\"dislike\";N;s:5:\"image\";s:66:\"public/product-images/rVaRmWrwMYuNAxgua3CFDXJKcptldMAz5xaofVy7.png\";s:10:\"created_at\";s:19:\"2018-12-23 10:50:25\";s:10:\"updated_at\";s:19:\"2018-12-23 10:50:25\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:100;}', 'Railway Station MIDC,  Aurangabad - 431001 (Maharashtra) INDIA', 'Ajith Kumar', '1111', 'Test', '', '', '', '2018-12-26 06:52:56', '2018-12-26 06:52:56'),
(2, 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:1;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:100;s:4:\"item\";O:11:\"App\\Product\":26:{s:8:\"\0*\0casts\";a:4:{s:5:\"title\";s:5:\"array\";s:8:\"subtitle\";s:5:\"array\";s:13:\"product_price\";s:5:\"array\";s:4:\"body\";s:5:\"array\";}s:11:\"\0*\0fillable\";a:5:{i:0;s:5:\"image\";i:1;s:5:\"title\";i:2;s:8:\"subtitle\";i:3;s:4:\"body\";i:4;s:13:\"product_price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:25:{s:2:\"id\";i:1;s:5:\"title\";s:224:\"{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:8:\"subtitle\";s:224:\"{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:4:\"slug\";N;s:13:\"product_price\";s:3:\"100\";s:14:\"original_price\";N;s:13:\"main_category\";N;s:12:\"sub_category\";N;s:5:\"offer\";N;s:7:\"country\";N;s:7:\"section\";N;s:10:\"meta_title\";N;s:16:\"meta_description\";N;s:12:\"meta_keyword\";N;s:18:\"product_ref_number\";N;s:8:\"discount\";N;s:13:\"return_policy\";N;s:4:\"body\";s:631:\"{\"en\":\"Go creative with a large space for everything that you want to say.\",\"in\":\"\\u091c\\u094b \\u0915\\u0941\\u091b \\u0906\\u092a \\u0915\\u0939\\u0928\\u093e \\u091a\\u093e\\u0939\\u0924\\u0947 \\u0939\\u0948\\u0902 \\u0909\\u0938\\u0915\\u0947 \\u0932\\u093f\\u090f \\u090f\\u0915 \\u092c\\u0921\\u093c\\u0940 \\u091c\\u0917\\u0939 \\u0915\\u0947 \\u0938\\u093e\\u0925 \\u0930\\u091a\\u0928\\u093e\\u0924\\u094d\\u092e\\u0915 \\u092c\\u0928\\u0947\\u0902\\u0964\",\"ar\":\"\\u0643\\u0646 \\u0645\\u0628\\u062f\\u0639\\u064b\\u0627 \\u0645\\u0639 \\u0645\\u0633\\u0627\\u062d\\u0629 \\u0643\\u0628\\u064a\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0627 \\u062a\\u0631\\u064a\\u062f \\u0642\\u0648\\u0644\\u0647.\"}\";s:6:\"status\";N;s:8:\"postedby\";N;s:4:\"like\";N;s:7:\"dislike\";N;s:5:\"image\";s:31:\"public/product-images/img-1.jpg\";s:10:\"created_at\";s:19:\"2018-12-22 07:59:07\";s:10:\"updated_at\";s:19:\"2018-12-22 07:59:07\";}s:11:\"\0*\0original\";a:25:{s:2:\"id\";i:1;s:5:\"title\";s:224:\"{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:8:\"subtitle\";s:224:\"{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:4:\"slug\";N;s:13:\"product_price\";s:3:\"100\";s:14:\"original_price\";N;s:13:\"main_category\";N;s:12:\"sub_category\";N;s:5:\"offer\";N;s:7:\"country\";N;s:7:\"section\";N;s:10:\"meta_title\";N;s:16:\"meta_description\";N;s:12:\"meta_keyword\";N;s:18:\"product_ref_number\";N;s:8:\"discount\";N;s:13:\"return_policy\";N;s:4:\"body\";s:631:\"{\"en\":\"Go creative with a large space for everything that you want to say.\",\"in\":\"\\u091c\\u094b \\u0915\\u0941\\u091b \\u0906\\u092a \\u0915\\u0939\\u0928\\u093e \\u091a\\u093e\\u0939\\u0924\\u0947 \\u0939\\u0948\\u0902 \\u0909\\u0938\\u0915\\u0947 \\u0932\\u093f\\u090f \\u090f\\u0915 \\u092c\\u0921\\u093c\\u0940 \\u091c\\u0917\\u0939 \\u0915\\u0947 \\u0938\\u093e\\u0925 \\u0930\\u091a\\u0928\\u093e\\u0924\\u094d\\u092e\\u0915 \\u092c\\u0928\\u0947\\u0902\\u0964\",\"ar\":\"\\u0643\\u0646 \\u0645\\u0628\\u062f\\u0639\\u064b\\u0627 \\u0645\\u0639 \\u0645\\u0633\\u0627\\u062d\\u0629 \\u0643\\u0628\\u064a\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0627 \\u062a\\u0631\\u064a\\u062f \\u0642\\u0648\\u0644\\u0647.\"}\";s:6:\"status\";N;s:8:\"postedby\";N;s:4:\"like\";N;s:7:\"dislike\";N;s:5:\"image\";s:31:\"public/product-images/img-1.jpg\";s:10:\"created_at\";s:19:\"2018-12-22 07:59:07\";s:10:\"updated_at\";s:19:\"2018-12-22 07:59:07\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:100;}', 'Railway Station MIDC,  Aurangabad - 431001 (Maharashtra) INDIA', 'Ajith Kumar', '1111', 'Test', '', '100', 'Paid', '2018-12-26 06:57:31', '2018-12-26 06:57:31'),
(3, 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:2;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:200;s:4:\"item\";O:11:\"App\\Product\":26:{s:8:\"\0*\0casts\";a:4:{s:5:\"title\";s:5:\"array\";s:8:\"subtitle\";s:5:\"array\";s:13:\"product_price\";s:5:\"array\";s:4:\"body\";s:5:\"array\";}s:11:\"\0*\0fillable\";a:5:{i:0;s:5:\"image\";i:1;s:5:\"title\";i:2;s:8:\"subtitle\";i:3;s:4:\"body\";i:4;s:13:\"product_price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:25:{s:2:\"id\";i:2;s:5:\"title\";s:224:\"{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:8:\"subtitle\";s:224:\"{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:4:\"slug\";N;s:13:\"product_price\";s:3:\"200\";s:14:\"original_price\";N;s:13:\"main_category\";N;s:12:\"sub_category\";N;s:5:\"offer\";N;s:7:\"country\";N;s:7:\"section\";N;s:10:\"meta_title\";N;s:16:\"meta_description\";N;s:12:\"meta_keyword\";N;s:18:\"product_ref_number\";N;s:8:\"discount\";N;s:13:\"return_policy\";N;s:4:\"body\";s:635:\"{\"en\":\"Let your logo be the only thing that shines and stands out.\",\"in\":\"\\u0905\\u092a\\u0928\\u0947 \\u0932\\u094b\\u0917\\u094b \\u0915\\u094b \\u0915\\u0947\\u0935\\u0932 \\u090f\\u0915 \\u091a\\u0940\\u091c \\u0939\\u094b\\u0928\\u0947 \\u0926\\u0947\\u0902 \\u091c\\u094b \\u091a\\u092e\\u0915\\u0924\\u093e \\u0939\\u0948 \\u0914\\u0930 \\u092c\\u093e\\u0939\\u0930 \\u0916\\u0921\\u093c\\u093e \\u0939\\u0948\\u0964\",\"ar\":\"\\u0627\\u0633\\u0645\\u062d \\u0644\\u0634\\u0639\\u0627\\u0631\\u0643 \\u0623\\u0646 \\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0634\\u064a\\u0621 \\u0627\\u0644\\u0648\\u062d\\u064a\\u062f \\u0627\\u0644\\u0630\\u064a \\u064a\\u0636\\u064a\\u0621 \\u0648\\u064a\\u0628\\u0631\\u0632.\"}\";s:6:\"status\";N;s:8:\"postedby\";N;s:4:\"like\";N;s:7:\"dislike\";N;s:5:\"image\";s:31:\"public/product-images/img-2.jpg\";s:10:\"created_at\";s:19:\"2018-12-22 07:59:07\";s:10:\"updated_at\";s:19:\"2018-12-22 07:59:07\";}s:11:\"\0*\0original\";a:25:{s:2:\"id\";i:2;s:5:\"title\";s:224:\"{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:8:\"subtitle\";s:224:\"{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:4:\"slug\";N;s:13:\"product_price\";s:3:\"200\";s:14:\"original_price\";N;s:13:\"main_category\";N;s:12:\"sub_category\";N;s:5:\"offer\";N;s:7:\"country\";N;s:7:\"section\";N;s:10:\"meta_title\";N;s:16:\"meta_description\";N;s:12:\"meta_keyword\";N;s:18:\"product_ref_number\";N;s:8:\"discount\";N;s:13:\"return_policy\";N;s:4:\"body\";s:635:\"{\"en\":\"Let your logo be the only thing that shines and stands out.\",\"in\":\"\\u0905\\u092a\\u0928\\u0947 \\u0932\\u094b\\u0917\\u094b \\u0915\\u094b \\u0915\\u0947\\u0935\\u0932 \\u090f\\u0915 \\u091a\\u0940\\u091c \\u0939\\u094b\\u0928\\u0947 \\u0926\\u0947\\u0902 \\u091c\\u094b \\u091a\\u092e\\u0915\\u0924\\u093e \\u0939\\u0948 \\u0914\\u0930 \\u092c\\u093e\\u0939\\u0930 \\u0916\\u0921\\u093c\\u093e \\u0939\\u0948\\u0964\",\"ar\":\"\\u0627\\u0633\\u0645\\u062d \\u0644\\u0634\\u0639\\u0627\\u0631\\u0643 \\u0623\\u0646 \\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0634\\u064a\\u0621 \\u0627\\u0644\\u0648\\u062d\\u064a\\u062f \\u0627\\u0644\\u0630\\u064a \\u064a\\u0636\\u064a\\u0621 \\u0648\\u064a\\u0628\\u0631\\u0632.\"}\";s:6:\"status\";N;s:8:\"postedby\";N;s:4:\"like\";N;s:7:\"dislike\";N;s:5:\"image\";s:31:\"public/product-images/img-2.jpg\";s:10:\"created_at\";s:19:\"2018-12-22 07:59:07\";s:10:\"updated_at\";s:19:\"2018-12-22 07:59:07\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:1;s:10:\"totalPrice\";i:200;}', 'Railway Station MIDC,  Aurangabad - 431001 (Maharashtra) INDIA', 'Ajith Kumar', '1111', 'Test', NULL, '200', 'Paid', '2018-12-26 07:00:12', '2018-12-26 07:00:12'),
(4, 1, 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:2;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:200;s:4:\"item\";O:11:\"App\\Product\":26:{s:8:\"\0*\0casts\";a:4:{s:5:\"title\";s:5:\"array\";s:8:\"subtitle\";s:5:\"array\";s:13:\"product_price\";s:5:\"array\";s:4:\"body\";s:5:\"array\";}s:11:\"\0*\0fillable\";a:5:{i:0;s:5:\"image\";i:1;s:5:\"title\";i:2;s:8:\"subtitle\";i:3;s:4:\"body\";i:4;s:13:\"product_price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:25:{s:2:\"id\";i:2;s:5:\"title\";s:224:\"{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:8:\"subtitle\";s:224:\"{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:4:\"slug\";N;s:13:\"product_price\";s:3:\"200\";s:14:\"original_price\";N;s:13:\"main_category\";N;s:12:\"sub_category\";N;s:5:\"offer\";N;s:7:\"country\";N;s:7:\"section\";N;s:10:\"meta_title\";N;s:16:\"meta_description\";N;s:12:\"meta_keyword\";N;s:18:\"product_ref_number\";N;s:8:\"discount\";N;s:13:\"return_policy\";N;s:4:\"body\";s:635:\"{\"en\":\"Let your logo be the only thing that shines and stands out.\",\"in\":\"\\u0905\\u092a\\u0928\\u0947 \\u0932\\u094b\\u0917\\u094b \\u0915\\u094b \\u0915\\u0947\\u0935\\u0932 \\u090f\\u0915 \\u091a\\u0940\\u091c \\u0939\\u094b\\u0928\\u0947 \\u0926\\u0947\\u0902 \\u091c\\u094b \\u091a\\u092e\\u0915\\u0924\\u093e \\u0939\\u0948 \\u0914\\u0930 \\u092c\\u093e\\u0939\\u0930 \\u0916\\u0921\\u093c\\u093e \\u0939\\u0948\\u0964\",\"ar\":\"\\u0627\\u0633\\u0645\\u062d \\u0644\\u0634\\u0639\\u0627\\u0631\\u0643 \\u0623\\u0646 \\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0634\\u064a\\u0621 \\u0627\\u0644\\u0648\\u062d\\u064a\\u062f \\u0627\\u0644\\u0630\\u064a \\u064a\\u0636\\u064a\\u0621 \\u0648\\u064a\\u0628\\u0631\\u0632.\"}\";s:6:\"status\";N;s:8:\"postedby\";N;s:4:\"like\";N;s:7:\"dislike\";N;s:5:\"image\";s:31:\"public/product-images/img-2.jpg\";s:10:\"created_at\";s:19:\"2018-12-22 07:59:07\";s:10:\"updated_at\";s:19:\"2018-12-22 07:59:07\";}s:11:\"\0*\0original\";a:25:{s:2:\"id\";i:2;s:5:\"title\";s:224:\"{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:8:\"subtitle\";s:224:\"{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:4:\"slug\";N;s:13:\"product_price\";s:3:\"200\";s:14:\"original_price\";N;s:13:\"main_category\";N;s:12:\"sub_category\";N;s:5:\"offer\";N;s:7:\"country\";N;s:7:\"section\";N;s:10:\"meta_title\";N;s:16:\"meta_description\";N;s:12:\"meta_keyword\";N;s:18:\"product_ref_number\";N;s:8:\"discount\";N;s:13:\"return_policy\";N;s:4:\"body\";s:635:\"{\"en\":\"Let your logo be the only thing that shines and stands out.\",\"in\":\"\\u0905\\u092a\\u0928\\u0947 \\u0932\\u094b\\u0917\\u094b \\u0915\\u094b \\u0915\\u0947\\u0935\\u0932 \\u090f\\u0915 \\u091a\\u0940\\u091c \\u0939\\u094b\\u0928\\u0947 \\u0926\\u0947\\u0902 \\u091c\\u094b \\u091a\\u092e\\u0915\\u0924\\u093e \\u0939\\u0948 \\u0914\\u0930 \\u092c\\u093e\\u0939\\u0930 \\u0916\\u0921\\u093c\\u093e \\u0939\\u0948\\u0964\",\"ar\":\"\\u0627\\u0633\\u0645\\u062d \\u0644\\u0634\\u0639\\u0627\\u0631\\u0643 \\u0623\\u0646 \\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0634\\u064a\\u0621 \\u0627\\u0644\\u0648\\u062d\\u064a\\u062f \\u0627\\u0644\\u0630\\u064a \\u064a\\u0636\\u064a\\u0621 \\u0648\\u064a\\u0628\\u0631\\u0632.\"}\";s:6:\"status\";N;s:8:\"postedby\";N;s:4:\"like\";N;s:7:\"dislike\";N;s:5:\"image\";s:31:\"public/product-images/img-2.jpg\";s:10:\"created_at\";s:19:\"2018-12-22 07:59:07\";s:10:\"updated_at\";s:19:\"2018-12-22 07:59:07\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}i:3;a:3:{s:3:\"qty\";i:1;s:5:\"price\";i:100;s:4:\"item\";O:11:\"App\\Product\":26:{s:8:\"\0*\0casts\";a:4:{s:5:\"title\";s:5:\"array\";s:8:\"subtitle\";s:5:\"array\";s:13:\"product_price\";s:5:\"array\";s:4:\"body\";s:5:\"array\";}s:11:\"\0*\0fillable\";a:5:{i:0;s:5:\"image\";i:1;s:5:\"title\";i:2;s:8:\"subtitle\";i:3;s:4:\"body\";i:4;s:13:\"product_price\";}s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:25:{s:2:\"id\";i:3;s:5:\"title\";s:224:\"{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:8:\"subtitle\";s:224:\"{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:4:\"slug\";N;s:13:\"product_price\";s:3:\"100\";s:14:\"original_price\";N;s:13:\"main_category\";N;s:12:\"sub_category\";N;s:5:\"offer\";N;s:7:\"country\";N;s:7:\"section\";N;s:10:\"meta_title\";N;s:16:\"meta_description\";N;s:12:\"meta_keyword\";N;s:18:\"product_ref_number\";N;s:8:\"discount\";N;s:13:\"return_policy\";N;s:4:\"body\";s:631:\"{\"en\":\"Go creative with a large space for everything that you want to say.\",\"in\":\"\\u091c\\u094b \\u0915\\u0941\\u091b \\u0906\\u092a \\u0915\\u0939\\u0928\\u093e \\u091a\\u093e\\u0939\\u0924\\u0947 \\u0939\\u0948\\u0902 \\u0909\\u0938\\u0915\\u0947 \\u0932\\u093f\\u090f \\u090f\\u0915 \\u092c\\u0921\\u093c\\u0940 \\u091c\\u0917\\u0939 \\u0915\\u0947 \\u0938\\u093e\\u0925 \\u0930\\u091a\\u0928\\u093e\\u0924\\u094d\\u092e\\u0915 \\u092c\\u0928\\u0947\\u0902\\u0964\",\"ar\":\"\\u0643\\u0646 \\u0645\\u0628\\u062f\\u0639\\u064b\\u0627 \\u0645\\u0639 \\u0645\\u0633\\u0627\\u062d\\u0629 \\u0643\\u0628\\u064a\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0627 \\u062a\\u0631\\u064a\\u062f \\u0642\\u0648\\u0644\\u0647.\"}\";s:6:\"status\";N;s:8:\"postedby\";N;s:4:\"like\";N;s:7:\"dislike\";N;s:5:\"image\";s:31:\"public/product-images/img-1.jpg\";s:10:\"created_at\";s:19:\"2018-12-22 02:29:07\";s:10:\"updated_at\";s:19:\"2018-12-22 02:29:07\";}s:11:\"\0*\0original\";a:25:{s:2:\"id\";i:3;s:5:\"title\";s:224:\"{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:8:\"subtitle\";s:224:\"{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}\";s:4:\"slug\";N;s:13:\"product_price\";s:3:\"100\";s:14:\"original_price\";N;s:13:\"main_category\";N;s:12:\"sub_category\";N;s:5:\"offer\";N;s:7:\"country\";N;s:7:\"section\";N;s:10:\"meta_title\";N;s:16:\"meta_description\";N;s:12:\"meta_keyword\";N;s:18:\"product_ref_number\";N;s:8:\"discount\";N;s:13:\"return_policy\";N;s:4:\"body\";s:631:\"{\"en\":\"Go creative with a large space for everything that you want to say.\",\"in\":\"\\u091c\\u094b \\u0915\\u0941\\u091b \\u0906\\u092a \\u0915\\u0939\\u0928\\u093e \\u091a\\u093e\\u0939\\u0924\\u0947 \\u0939\\u0948\\u0902 \\u0909\\u0938\\u0915\\u0947 \\u0932\\u093f\\u090f \\u090f\\u0915 \\u092c\\u0921\\u093c\\u0940 \\u091c\\u0917\\u0939 \\u0915\\u0947 \\u0938\\u093e\\u0925 \\u0930\\u091a\\u0928\\u093e\\u0924\\u094d\\u092e\\u0915 \\u092c\\u0928\\u0947\\u0902\\u0964\",\"ar\":\"\\u0643\\u0646 \\u0645\\u0628\\u062f\\u0639\\u064b\\u0627 \\u0645\\u0639 \\u0645\\u0633\\u0627\\u062d\\u0629 \\u0643\\u0628\\u064a\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0627 \\u062a\\u0631\\u064a\\u062f \\u0642\\u0648\\u0644\\u0647.\"}\";s:6:\"status\";N;s:8:\"postedby\";N;s:4:\"like\";N;s:7:\"dislike\";N;s:5:\"image\";s:31:\"public/product-images/img-1.jpg\";s:10:\"created_at\";s:19:\"2018-12-22 02:29:07\";s:10:\"updated_at\";s:19:\"2018-12-22 02:29:07\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}}s:8:\"totalQty\";i:2;s:10:\"totalPrice\";i:300;}', 'Railway Station MIDC,  Aurangabad - 431001 (Maharashtra) INDIA', 'Ajith Kumar', '1111', 'Test', NULL, '300', 'Paid', '2018-12-27 00:34:06', '2018-12-27 00:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sneha@etcspl.com', '$2y$10$8uV1/u6jRTxVn/h87jYm4ebnXnaICdl5ot7BjmJopiPCL2fML8tDK', '2019-06-08 03:11:35'),
('pooja@etcspl.com', '$2y$10$G0Ptj0CvzfQdFOUj2Uc3r.rGqYUQpNBgDeoEm9AwFa4MCtUse3w.q', '2019-06-30 00:26:03'),
('sneha@etcspl.com', '$2y$10$8uV1/u6jRTxVn/h87jYm4ebnXnaICdl5ot7BjmJopiPCL2fML8tDK', '2019-06-08 03:11:35'),
('pooja@etcspl.com', '$2y$10$G0Ptj0CvzfQdFOUj2Uc3r.rGqYUQpNBgDeoEm9AwFa4MCtUse3w.q', '2019-06-30 00:26:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 NOT NULL,
  `subtitle` text CHARACTER SET utf8mb4 NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` text CHARACTER SET utf8mb4 NOT NULL,
  `original_price` text COLLATE utf8mb4_unicode_ci,
  `main_category` int(11) DEFAULT NULL,
  `sub_category` int(11) DEFAULT NULL,
  `offer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci,
  `product_ref_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_policy` text COLLATE utf8mb4_unicode_ci,
  `body` text CHARACTER SET utf8mb4 NOT NULL,
  `status` int(11) DEFAULT NULL,
  `postedby` int(11) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `subtitle`, `slug`, `product_price`, `original_price`, `main_category`, `sub_category`, `offer`, `country`, `section`, `meta_title`, `meta_description`, `meta_keyword`, `product_ref_number`, `discount`, `return_policy`, `body`, `status`, `postedby`, `like`, `dislike`, `image`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', '{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"Go creative with a large space for everything that you want to say.\",\"in\":\"\\u091c\\u094b \\u0915\\u0941\\u091b \\u0906\\u092a \\u0915\\u0939\\u0928\\u093e \\u091a\\u093e\\u0939\\u0924\\u0947 \\u0939\\u0948\\u0902 \\u0909\\u0938\\u0915\\u0947 \\u0932\\u093f\\u090f \\u090f\\u0915 \\u092c\\u0921\\u093c\\u0940 \\u091c\\u0917\\u0939 \\u0915\\u0947 \\u0938\\u093e\\u0925 \\u0930\\u091a\\u0928\\u093e\\u0924\\u094d\\u092e\\u0915 \\u092c\\u0928\\u0947\\u0902\\u0964\",\"ar\":\"\\u0643\\u0646 \\u0645\\u0628\\u062f\\u0639\\u064b\\u0627 \\u0645\\u0639 \\u0645\\u0633\\u0627\\u062d\\u0629 \\u0643\\u0628\\u064a\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0627 \\u062a\\u0631\\u064a\\u062f \\u0642\\u0648\\u0644\\u0647.\"}', NULL, NULL, NULL, NULL, 'public/product-images/img-1.jpg', '2018-12-22 02:29:07', '2018-12-22 02:29:07'),
(2, '{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', '{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', NULL, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"Let your logo be the only thing that shines and stands out.\",\"in\":\"\\u0905\\u092a\\u0928\\u0947 \\u0932\\u094b\\u0917\\u094b \\u0915\\u094b \\u0915\\u0947\\u0935\\u0932 \\u090f\\u0915 \\u091a\\u0940\\u091c \\u0939\\u094b\\u0928\\u0947 \\u0926\\u0947\\u0902 \\u091c\\u094b \\u091a\\u092e\\u0915\\u0924\\u093e \\u0939\\u0948 \\u0914\\u0930 \\u092c\\u093e\\u0939\\u0930 \\u0916\\u0921\\u093c\\u093e \\u0939\\u0948\\u0964\",\"ar\":\"\\u0627\\u0633\\u0645\\u062d \\u0644\\u0634\\u0639\\u0627\\u0631\\u0643 \\u0623\\u0646 \\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0634\\u064a\\u0621 \\u0627\\u0644\\u0648\\u062d\\u064a\\u062f \\u0627\\u0644\\u0630\\u064a \\u064a\\u0636\\u064a\\u0621 \\u0648\\u064a\\u0628\\u0631\\u0632.\"}', NULL, NULL, NULL, NULL, 'public/product-images/img-2.jpg', '2018-12-22 02:29:07', '2018-12-22 02:29:07'),
(3, '{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', '{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"Go creative with a large space for everything that you want to say.\",\"in\":\"\\u091c\\u094b \\u0915\\u0941\\u091b \\u0906\\u092a \\u0915\\u0939\\u0928\\u093e \\u091a\\u093e\\u0939\\u0924\\u0947 \\u0939\\u0948\\u0902 \\u0909\\u0938\\u0915\\u0947 \\u0932\\u093f\\u090f \\u090f\\u0915 \\u092c\\u0921\\u093c\\u0940 \\u091c\\u0917\\u0939 \\u0915\\u0947 \\u0938\\u093e\\u0925 \\u0930\\u091a\\u0928\\u093e\\u0924\\u094d\\u092e\\u0915 \\u092c\\u0928\\u0947\\u0902\\u0964\",\"ar\":\"\\u0643\\u0646 \\u0645\\u0628\\u062f\\u0639\\u064b\\u0627 \\u0645\\u0639 \\u0645\\u0633\\u0627\\u062d\\u0629 \\u0643\\u0628\\u064a\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0627 \\u062a\\u0631\\u064a\\u062f \\u0642\\u0648\\u0644\\u0647.\"}', NULL, NULL, NULL, NULL, 'public/product-images/img-1.jpg', '2018-12-21 20:59:07', '2018-12-21 20:59:07'),
(4, '{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', '{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', NULL, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"Let your logo be the only thing that shines and stands out.\",\"in\":\"\\u0905\\u092a\\u0928\\u0947 \\u0932\\u094b\\u0917\\u094b \\u0915\\u094b \\u0915\\u0947\\u0935\\u0932 \\u090f\\u0915 \\u091a\\u0940\\u091c \\u0939\\u094b\\u0928\\u0947 \\u0926\\u0947\\u0902 \\u091c\\u094b \\u091a\\u092e\\u0915\\u0924\\u093e \\u0939\\u0948 \\u0914\\u0930 \\u092c\\u093e\\u0939\\u0930 \\u0916\\u0921\\u093c\\u093e \\u0939\\u0948\\u0964\",\"ar\":\"\\u0627\\u0633\\u0645\\u062d \\u0644\\u0634\\u0639\\u0627\\u0631\\u0643 \\u0623\\u0646 \\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0634\\u064a\\u0621 \\u0627\\u0644\\u0648\\u062d\\u064a\\u062f \\u0627\\u0644\\u0630\\u064a \\u064a\\u0636\\u064a\\u0621 \\u0648\\u064a\\u0628\\u0631\\u0632.\"}', NULL, NULL, NULL, NULL, 'public/product-images/img-2.jpg', '2018-12-21 20:59:07', '2018-12-21 20:59:07'),
(5, '{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', '{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"Go creative with a large space for everything that you want to say.\",\"in\":\"\\u091c\\u094b \\u0915\\u0941\\u091b \\u0906\\u092a \\u0915\\u0939\\u0928\\u093e \\u091a\\u093e\\u0939\\u0924\\u0947 \\u0939\\u0948\\u0902 \\u0909\\u0938\\u0915\\u0947 \\u0932\\u093f\\u090f \\u090f\\u0915 \\u092c\\u0921\\u093c\\u0940 \\u091c\\u0917\\u0939 \\u0915\\u0947 \\u0938\\u093e\\u0925 \\u0930\\u091a\\u0928\\u093e\\u0924\\u094d\\u092e\\u0915 \\u092c\\u0928\\u0947\\u0902\\u0964\",\"ar\":\"\\u0643\\u0646 \\u0645\\u0628\\u062f\\u0639\\u064b\\u0627 \\u0645\\u0639 \\u0645\\u0633\\u0627\\u062d\\u0629 \\u0643\\u0628\\u064a\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0627 \\u062a\\u0631\\u064a\\u062f \\u0642\\u0648\\u0644\\u0647.\"}', NULL, NULL, NULL, NULL, 'public/product-images/img-1.jpg', '2018-12-21 20:59:07', '2018-12-21 20:59:07'),
(6, '{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', '{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', NULL, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"Let your logo be the only thing that shines and stands out.\",\"in\":\"\\u0905\\u092a\\u0928\\u0947 \\u0932\\u094b\\u0917\\u094b \\u0915\\u094b \\u0915\\u0947\\u0935\\u0932 \\u090f\\u0915 \\u091a\\u0940\\u091c \\u0939\\u094b\\u0928\\u0947 \\u0926\\u0947\\u0902 \\u091c\\u094b \\u091a\\u092e\\u0915\\u0924\\u093e \\u0939\\u0948 \\u0914\\u0930 \\u092c\\u093e\\u0939\\u0930 \\u0916\\u0921\\u093c\\u093e \\u0939\\u0948\\u0964\",\"ar\":\"\\u0627\\u0633\\u0645\\u062d \\u0644\\u0634\\u0639\\u0627\\u0631\\u0643 \\u0623\\u0646 \\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0634\\u064a\\u0621 \\u0627\\u0644\\u0648\\u062d\\u064a\\u062f \\u0627\\u0644\\u0630\\u064a \\u064a\\u0636\\u064a\\u0621 \\u0648\\u064a\\u0628\\u0631\\u0632.\"}', NULL, NULL, NULL, NULL, 'public/product-images/img-2.jpg', '2018-12-21 20:59:07', '2018-12-21 20:59:07'),
(7, '{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', '{\"en\":\"Wraparound Print\",\"in\":\"\\u0930\\u0948\\u092a\\u0930\\u093e\\u0909\\u0902\\u0921 \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u0644\\u062a\\u0641\\u0627\\u0641 \\u062d\\u0648\\u0644 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', NULL, '100', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"Go creative with a large space for everything that you want to say.\",\"in\":\"\\u091c\\u094b \\u0915\\u0941\\u091b \\u0906\\u092a \\u0915\\u0939\\u0928\\u093e \\u091a\\u093e\\u0939\\u0924\\u0947 \\u0939\\u0948\\u0902 \\u0909\\u0938\\u0915\\u0947 \\u0932\\u093f\\u090f \\u090f\\u0915 \\u092c\\u0921\\u093c\\u0940 \\u091c\\u0917\\u0939 \\u0915\\u0947 \\u0938\\u093e\\u0925 \\u0930\\u091a\\u0928\\u093e\\u0924\\u094d\\u092e\\u0915 \\u092c\\u0928\\u0947\\u0902\\u0964\",\"ar\":\"\\u0643\\u0646 \\u0645\\u0628\\u062f\\u0639\\u064b\\u0627 \\u0645\\u0639 \\u0645\\u0633\\u0627\\u062d\\u0629 \\u0643\\u0628\\u064a\\u0631\\u0629 \\u0644\\u0643\\u0644 \\u0645\\u0627 \\u062a\\u0631\\u064a\\u062f \\u0642\\u0648\\u0644\\u0647.\"}', NULL, NULL, NULL, NULL, 'public/product-images/img-1.jpg', '2018-12-21 20:59:07', '2018-12-21 20:59:07'),
(8, '{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', '{\"en\":\"Two-side Print\",\"in\":\"\\u0926\\u094b \\u0924\\u0930\\u092b\\u093e \\u092a\\u094d\\u0930\\u093f\\u0902\\u091f\",\"ar\":\"\\u0627\\u062b\\u0646\\u064a\\u0646 \\u0645\\u0646 \\u062c\\u0627\\u0646\\u0628 \\u0627\\u0644\\u0637\\u0628\\u0627\\u0639\\u0629\"}', NULL, '200', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"Let your logo be the only thing that shines and stands out.\",\"in\":\"\\u0905\\u092a\\u0928\\u0947 \\u0932\\u094b\\u0917\\u094b \\u0915\\u094b \\u0915\\u0947\\u0935\\u0932 \\u090f\\u0915 \\u091a\\u0940\\u091c \\u0939\\u094b\\u0928\\u0947 \\u0926\\u0947\\u0902 \\u091c\\u094b \\u091a\\u092e\\u0915\\u0924\\u093e \\u0939\\u0948 \\u0914\\u0930 \\u092c\\u093e\\u0939\\u0930 \\u0916\\u0921\\u093c\\u093e \\u0939\\u0948\\u0964\",\"ar\":\"\\u0627\\u0633\\u0645\\u062d \\u0644\\u0634\\u0639\\u0627\\u0631\\u0643 \\u0623\\u0646 \\u064a\\u0643\\u0648\\u0646 \\u0627\\u0644\\u0634\\u064a\\u0621 \\u0627\\u0644\\u0648\\u062d\\u064a\\u062f \\u0627\\u0644\\u0630\\u064a \\u064a\\u0636\\u064a\\u0621 \\u0648\\u064a\\u0628\\u0631\\u0632.\"}', NULL, NULL, NULL, NULL, 'public/product-images/img-2.jpg', '2018-12-21 20:59:07', '2018-12-21 20:59:07'),
(9, '{\"en\":\"DemoTest\"}', '{\"en\":\"Test\"}', 'Test', '\"100\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"Test\"}', 1, NULL, NULL, NULL, 'public/product-images/rVaRmWrwMYuNAxgua3CFDXJKcptldMAz5xaofVy7.png', '2018-12-23 05:20:25', '2018-12-23 05:20:25'),
(10, '{\"en\":\"DemoTest\"}', '{\"en\":\"DemoTest\"}', 'DemoTest', '\"100\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"DemoTest\"}', 1, NULL, NULL, NULL, 'public/product-images/G5jCtcdRmSuPoJFH3QbRBf0xsmWtelN6oAzIvf25.png', '2018-12-23 05:51:34', '2018-12-23 05:51:34'),
(11, '{\"en\":\"Test\"}', '{\"en\":\"hgsadh\"}', 'fhghf', '\"500\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"en\":\"sdfgdg\"}', 1, NULL, NULL, NULL, 'public/product-images/HUVrSgkw8hTiamsrrd3Af2w0ph5eYEccvHbqesSg.png', '2019-05-20 04:18:40', '2019-05-20 04:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE `service_categories` (
  `service_cat_id` int(10) UNSIGNED NOT NULL,
  `service_cat_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_cat_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_cat_description` text COLLATE utf8mb4_unicode_ci,
  `service_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_cat_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`service_cat_id`, `service_cat_name`, `service_cat_image`, `service_cat_description`, `service_price`, `service_cat_slug`, `meta_title`, `meta_description`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(3, '{\"en\":\"DEEP CLEANING\"}', 'public/category_images/Services.png', '{\"en\":\"DEEP CLEANING\"}', '25', '{\"en\":\"Test\"}', '{\"en\":\"DEEP CLEANING\"}', '{\"en\":\"DEEP CLEANING\"}', '{\"en\":\"DEEP CLEANING\"}', '0', '2019-05-25 01:59:51', '2019-08-25 05:45:37'),
(5, '{\"en\":\"GENERAL CLEANING  SERVICES\"}', 'public/category_images/Services.png', '{\"en\":\"MATTRESS CLEANING\"}', '35', '{\"en\":\"Test\"}', '{\"en\":\"MATTRESS CLEANING\"}', '{\"en\":\"MATTRESS CLEANING\"}', '{\"en\":\"MATTRESS CLEANING\"}', '1', '2019-05-25 02:53:14', '2019-08-08 06:55:40'),
(6, '{\"en\":\"CARPET CLEANING\"}', 'public/category_images/Services.png', '{\"en\":\"CARPET CLEANING\"}', '35', '{\"en\":\"Test\"}', '{\"en\":\"CARPET CLEANING\"}', '{\"en\":\"CARPET CLEANING\"}', '{\"en\":\"CARPET CLEANING\"}', '1', '2019-05-25 02:53:53', '2019-08-08 06:56:00'),
(7, '{\"en\":\"CURTAIN CLEANING\"}', 'public/category_images/Services.png', '{\"en\":\"CURTAIN CLEANING\"}', '35', '{\"en\":\"Test\"}', '{\"en\":\"CURTAIN CLEANING\"}', '{\"en\":\"CURTAIN CLEANING\"}', '{\"en\":\"CURTAIN CLEANING\"}', '1', '2019-05-25 02:54:35', '2019-08-08 06:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `superadmins`
--

CREATE TABLE `superadmins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `superadmins`
--

INSERT INTO `superadmins` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'pooja@etcspl.com', NULL, 'superadmin', '$2y$10$B0NCeJCqibGEsYv/3CXlXuEq8JGzAUkNds4MnYFhriZAsaXKWMxv6', 'lcEiFsABamms514VsD9HcwrUo5waOSC7JYtWbrkitJUQ8ZI3XtZaRTF2mPQa', NULL, '2019-07-01 03:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `settings`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pooja Bochare', 'pooja@etcspl.com', NULL, '$2y$10$YpMbjsn2HcHWLsPkfs/Lne/7TSjvVBcIB5xFSJwFL3zP1E4IYugVy', 1, 'cGDzmc7wfnAnJSAyyjycMiC85ykSYJeSKlYJArYiFFDIsDcTEPB4QArgojrk', '2019-06-01 01:34:38', '2019-06-01 01:34:38'),
(5, 'Sneha Sonawane', 'sneha@etcspl.com', NULL, '$2y$10$8rB4/T..czyOmmD.cfS4V.I9ztHh80UAQu5qqs1gcmyooyO9JTDE6', 0, 'WmACBwqEepwSBzXqJdgz7fNU7H6ywG6AaeqLhneLzFAdkl8FQZlwMPQFyyAq', '2019-07-22 23:32:00', '2019-07-22 23:32:00'),
(6, 'appa@etcspl.com', 'appa@etcspl.com', NULL, '$2y$10$Z9TsAsZtGYyhYgKnaP8FQ.3cYRT2iy15mSI/fXk57jlc5Tp0DJJ9u', 0, NULL, '2019-07-24 03:45:33', '2019-07-24 03:45:33'),
(35, 'Mansi Palkar', 'mansi@etcspl.com', NULL, '$2y$10$7AnY5.pp45yCgZAnjufIbOYOCZaLcxX86stiCi/No3dNkLQtJ4Xt.', 0, NULL, '2019-07-30 00:16:19', '2019-07-30 00:16:19'),
(55, 'atul', 'bb@gmail.com', NULL, '$2y$10$1a9aBe3t.2ZiY2vJnZGtnuQvDG5N8npgjTmZ4TphZPYGtf7RnvMz6', 0, NULL, '2019-07-30 04:10:46', '2019-07-30 04:10:46'),
(56, 'kartik', 'k@gmail.com', NULL, '$2y$10$NseWf9k3Uv1nl9blB2WUC.vfdfuPyWqLbjAhGp.P5DRb7s82RcMzm', 0, NULL, '2019-07-30 04:23:48', '2019-07-30 04:23:48'),
(63, 'harsh', 'harsh@gmail.com', NULL, '$2y$10$bcGWmfGlGwaMW/IU8fFpAOaj1CLa7cqO3XD2gLS6rgRTxDNC8cGvC', 0, NULL, '2019-07-30 06:10:50', '2019-07-30 06:10:50'),
(64, 'test@etcspl.com', 'test@etcspl.com', NULL, '$2y$10$Z4tcenM08AmWS7JzTQgyUevejrd7HO6KhmF6BkIRh1WF3q6r5SE9q', 0, NULL, '2019-08-01 00:44:23', '2019-08-01 00:44:23'),
(65, 'aa@gmail.com', 'aa@gmail.com', NULL, '$2y$10$aRRFPcsV5uEY2HbRLQaDZOg6254s6zBUeMVQYnHJMCuSbq0FUDW0y', 0, NULL, '2019-08-01 05:16:08', '2019-08-01 05:16:08'),
(168, 'yogesh@gmail.com', 'yogesh@gmail.com', NULL, '$2y$10$KS3pCyOVfkaORaOGRNAseeBfU1GxxrSHSeHHjWRWH69j/iiw1F0gS', 0, NULL, '2019-08-07 07:28:01', '2019-08-07 07:28:01'),
(169, 'abc@gmail.com', 'abc@gmail.com', NULL, '$2y$10$9RCCcjc7HFDu9Ls9B7TCCeOe3ajnqh.SpSO.odjLBZ.B5BPIeN1Jq', 0, NULL, '2019-08-07 07:34:03', '2019-08-07 07:34:03'),
(170, 'test@test.com', 'test@test.com', NULL, '$2y$10$RFHzPIcRkSTDkRiqZtHIEewig2Nsca8xLv2iVoogf4rJ50HvCWM1i', 0, NULL, '2019-08-08 00:45:49', '2019-08-08 00:45:49'),
(177, 'test1@test.com', 'test1@test.com', NULL, '$2y$10$zhonzJqw7naA3fYXRr/L1OzJXaU8CXDLJnhpeS21BmFnslB.FxJsO', 0, NULL, '2019-08-08 00:50:35', '2019-08-08 00:50:35'),
(179, 'Naseer', 'naseer.a@etcspl.com', NULL, '$2y$10$RF5DloaDeX0SBpKmgImPk.wbEftoj0.UKaMKQdjPNHnvWmEzxPu4.', 0, NULL, '2019-08-08 01:02:57', '2019-08-08 01:02:57'),
(180, 'Trst', 'test2@test.com', NULL, '$2y$10$d7SQk6XLOln..2hALHdIA.7cK.GduEhijbmAUkZ3HCCKUdjIkB9.q', 0, NULL, '2019-08-08 03:26:33', '2019-08-08 03:26:33'),
(181, 'Rahul', 'rahul@etcs.com', NULL, '$2y$10$PUfORAMp.YoBOYWlOZ/Yde1enzoRuR4n4TRz6iZ7jAZBzCDvcTBgO', 0, NULL, '2019-08-08 03:32:50', '2019-08-08 03:32:50'),
(182, 'Raju', 'rdharna@mail.com', NULL, '$2y$10$/3Lr8ygJiZpzpsFIyTdLBe3meBfjblRLdpuCVT.oa8TT.Rev68hZi', 0, NULL, '2019-08-08 03:41:41', '2019-08-08 03:41:41'),
(183, 'ctcmaids@gmail.com', 'ctcmaids@gmail.com', NULL, '$2y$10$eAcGQlKnRmFu9IU06442beIyf.uLuSGcKHD.ki./wX412Vz0wPr3C', 0, NULL, '2019-08-08 03:42:57', '2019-08-08 03:42:57'),
(188, 'utlaraajnamrah14@gmail.com', 'utlaraajnamrah14@gmail.com', NULL, '$2y$10$SVyNjuaZAFnYH7wBYgUMuOuQUNs3f.asAG70RtzDnlLNf.HTXyzui', 0, NULL, '2019-08-08 03:46:08', '2019-08-08 03:46:08'),
(194, 'Chetan', 'chetan@etcspl.com', NULL, '$2y$10$RwiCwsTBRPbDY4NjGDMzjuz9sbR3sJFhlLP7z7Qah6RBAgfUwQxT.', 0, NULL, '2019-08-08 06:31:34', '2019-08-08 06:31:34'),
(207, 'aaa', 'aaa@gmail.com', NULL, '$2y$10$pwVwnyy1KbSO5E5WRe/qQ.nWHLdbA5LlvI9DKC8EicwbEnoSMXSxK', 0, NULL, '2019-08-11 03:36:28', '2019-08-11 03:36:28'),
(209, 'bbb', 'bbb@gmail.com', NULL, '$2y$10$whcI2GTtiX.D426q0qDA1ez44NbAw4KeRHwcv4AM20DCHt8fv7ziW', 0, NULL, '2019-08-11 04:41:51', '2019-08-11 04:41:51'),
(214, 'Neha', 'Imneha00@yahoo.com', NULL, '$2y$10$uPhY4ZGUNtQzEF7rlZtxN.qxf5arVgaToHZBcAb7DA/kFMVKNRYXq', 0, NULL, '2019-08-25 06:42:45', '2019-08-25 06:42:45'),
(248, 'ab', 'ab@gmail.com', NULL, '$2y$10$0D87F5hECEIknKOuDvpDfuamH7xqvnCM/qR.BJaAkn5jiSk6Zt5nq', 1, 'gvoNex73IrnONaPU3z3NKXnQ0vO4zVnFHIPt9yLuNH2sC1fWJUw1rbJd7L0b', '2019-09-02 01:13:13', '2019-09-02 01:14:26'),
(260, 'ac', 'ac@gmail.com', NULL, '$2y$10$1KJE2ZUAXLAcgx5BvR7mPOiohNuCpsHeLF3RVcj5IOMcwyW4cC6WK', 1, NULL, '2019-09-02 23:34:45', '2019-09-02 23:35:58'),
(301, 'ad', 'ad@gmail.com', NULL, '$2y$10$CI5eQljpTEiLPPASegH0iONq1KhdYGj.TycoEBk2zBVSDRasYdf6G', 0, NULL, '2019-09-04 03:24:47', '2019-09-04 03:24:47'),
(302, 'ae', 'ae@gmail.com', NULL, '$2y$10$G0v6PAc5bLNZ0ogZGO5.m.O4Vmq8qgfX/yDGhaDtYMIf83tguxwYu', 1, NULL, '2019-09-04 03:29:40', '2019-09-04 03:31:02'),
(314, 'ganesh', 'girish@etcspl.com', NULL, '$2y$10$IzrhscLkrxqCyl3qFvWPNe6Q4B7qtmYY1SmGWtlfGZ7eG8c1T2oia', 0, NULL, '2019-09-08 01:35:48', '2019-09-08 01:35:48'),
(317, 'deepak', 'ganesh.j@etcspl.com', NULL, '$2y$10$RzicdUVtmiU3f9D6O1nsOuL0nqWHogF4oke4B9cUz9DpmazL9vQcm', 1, NULL, '2019-09-08 02:04:41', '2019-09-08 02:10:21'),
(321, 'Raj', 'rdharna@etcspl.com', NULL, '$2y$10$T8PpX5f3mmej6CJlLb2bxuieioc7E.gzRq.wu9AZ73N3HfpcBYT6.', 1, NULL, '2019-09-08 16:25:49', '2019-09-08 16:27:46'),
(322, 'Rana', 'ranamahbiz@gmail.com', NULL, '$2y$10$T/5DRyijnTUXFowaiS0XH.x9AqwCnZe0U.MYuqqkaZEOFBmWBc4eu', 1, NULL, '2019-09-08 20:31:10', '2019-09-08 20:46:41'),
(328, 'ganesh', 'jagdhaneganesh515@gmail.com', NULL, '$2y$10$wxMO3E3Wz6e47rF0ll6GE.fVyvy1tA1xSXIbK6.K6L0/.J9Rvt5Dy', 0, NULL, '2019-09-09 00:59:37', '2019-09-09 00:59:37'),
(329, 'Raj', 'rajeswari@etcspl.co', NULL, '$2y$10$0dN2ThPqBnFqJd.5vKjLGeedv6VnvhGUCvC3yFeMzQ/MzGu3BDLfq', 0, NULL, '2019-09-21 04:08:32', '2019-09-21 04:08:32'),
(332, 'rajudharna@gmail.com', 'rajudharna@gmail.com', NULL, '$2y$10$GdgxKsNDI9MHOHF5QnERU.TdzZPVylEXinrFH/wh0necC5FkHuDKi', 1, NULL, '2019-09-29 08:01:27', '2019-09-29 08:09:52'),
(335, 'Test', 'test@test.test', NULL, '$2y$10$c3zR9MSNEsykKDBZqqXcCupPt6rKWNv/UV58XWcSB0zwksej8unky', 0, NULL, '2019-10-03 06:30:08', '2019-10-03 06:30:08'),
(337, 'Atul', 'atul@etcspl.com', NULL, '$2y$10$x/vEMj3OgPvFIBjbNIUB2.KEuAUBTuOOhHa5R785JEqyjrFBhaGEW', 1, NULL, '2019-10-04 23:49:30', '2019-10-04 23:55:40'),
(338, 'A', 'a@a.a', NULL, '$2y$10$iscIFgJlr4BD9Km8GkSUrejufE0vvKPp5KptDcDz589kL.EKGcMJO', 0, NULL, '2019-10-05 05:39:10', '2019-10-05 05:39:10'),
(339, 'Harish', 'harish.servicesmbc@gmail.com', NULL, '$2y$10$yCy7nqNgHvoQ4MRw09Cc.ulcGZ5N3qCyKyBNjABcZcrdRGYCEZT.K', 0, NULL, '2019-10-10 01:21:48', '2019-10-10 01:21:48'),
(340, 'Akhil', 'asundar93@gmail.com', NULL, '$2y$10$e1ioceVbfdeddFPfugElau5U6zGbnMsozYiQAOzi048ZnSPqNG6Qu', 0, NULL, '2019-10-10 01:27:28', '2019-10-10 01:27:28'),
(341, 'Akhil', 'rejaniraj90@gmail.com', NULL, '$2y$10$RXBYJT.WtC.R2rorefr7me3AOEFYRlzhEKuCXaE/d0E31magdtf8.', 0, NULL, '2019-10-10 01:32:48', '2019-10-10 01:32:48'),
(342, 'Ramesh', 'rameshllcdxb@gmail.com', NULL, '$2y$10$hBcaPV/A/5DcXu4dg.aYU.o7wByZXnEfn3odCRgAOTG7jZYm9MUnq', 0, NULL, '2019-10-12 21:34:05', '2019-10-12 21:34:05'),
(343, 'A', 'a@a.c', NULL, '$2y$10$yzHrX34rkF5iHnTMSqazv.AJJp7NN362ka8yLwssrcTgNIUi3A8EG', 0, NULL, '2019-10-22 19:46:47', '2019-10-22 19:46:47'),
(344, 'Sabine', 'sabineponcelet@yahoo.com', NULL, '$2y$10$7QPy4ltsOMKrqOJGq4I/xO/PPdZGvHHHd4Bvv9RqIuojhp7s.mG.K', 0, NULL, '2019-10-26 12:28:29', '2019-10-26 12:28:29'),
(346, 'shrikant', 'shrikant@etcspl.com', NULL, '$2y$10$s9n11Kr29y2dRsvEgvxzU.MrbYIXKR11CZsUExyFgdW9kyfn8SUVa', 0, NULL, '2019-11-11 03:57:21', '2019-11-11 03:57:21'),
(347, 'Ayman', 'ahossainy@me.com', NULL, '$2y$10$TvaC3vvkDvakWDBR.vvOP.LY60kM24EzEuuaH4JxGMrHw1O2tFxX2', 0, NULL, '2019-11-27 04:07:53', '2019-11-27 04:07:53'),
(348, 'Ajayi Victoria', 'lawlahvictoria2000@gmail.com', NULL, '$2y$10$Vu41eaTmI0RgvhMjNQ9k4.FDrDFeRbmkjg87nCB2EJz3Q0UK1DlgO', 0, NULL, '2019-11-30 23:04:06', '2019-11-30 23:04:06'),
(349, 'Hussein', 'hussein.alhennawy@gmail.com', NULL, '$2y$10$kXfhY.cjbVp/uWr7HnKdJemhOTjucaIVn/sdfvkNvQmAHVj4An9zu', 0, NULL, '2019-12-07 05:19:15', '2019-12-07 05:19:15'),
(350, 'sabha', 'sabha@gmail.com', NULL, '$2y$10$y95doY78vnqTK.33UpreT.6N7Z2HXY7WRlCZD3D/ArctcIc.E4Nbu', 0, NULL, '2020-01-07 07:15:53', '2020-01-07 07:15:53'),
(351, 'Sabha', 'sabhaasim@gmail.com', NULL, '$2y$10$JfXXYMoxrEKbWGMLE.Akbe76oyXQi7CGrLQql7C1OqLikmpTR48Wi', 0, NULL, '2020-01-07 07:16:40', '2020-01-07 07:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `name`, `email`, `contact`, `city`, `address`, `state`, `country`, `locality`, `pin_code`, `profile_img`, `created_at`, `updated_at`) VALUES
(1, 'Pooja Bochare', 'pooja@etcspl.com', '9845784585', 'Aurangabad', 'N-6 Cidco', 'Maharashtra', 'India', 'Aurangabad', '431001', '', '2019-06-01 01:34:38', '2019-07-11 04:32:33'),
(5, 'Appa', 'appa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-27 07:52:41', '2019-07-27 07:52:41'),
(6, 'Ganes h', 'ganeh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-27 08:02:30', '2019-07-27 08:02:30'),
(22, 'atul', 'bb@gmail.com', '7845454545', NULL, 'jalna', NULL, NULL, NULL, NULL, NULL, '2019-07-30 04:10:46', '2019-07-30 04:10:46'),
(23, 'kartik', 'k@gmail.com', '9999777788', 'jalna', 'jalna', 'bb', 'india', NULL, '421412', NULL, '2019-07-30 04:23:48', '2019-08-04 23:39:08'),
(30, 'harsh', 'harsh@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-07-30 06:10:50', '2019-07-30 06:10:50'),
(31, 'test@etcspl.com', 'test@etcspl.com', '9876543212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-01 00:44:23', '2019-08-01 00:44:23'),
(32, 'aa@gmail.com', 'aa@gmail.com', '9876543212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-01 05:16:08', '2019-08-01 05:16:08'),
(168, 'yogesh@gmail.com', 'yogesh@gmail.com', '22745555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-07 07:28:01', '2019-08-07 07:28:01'),
(169, 'abc@gmail.com', 'abc@gmail.com', '23445566', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-07 07:34:03', '2019-08-07 07:34:03'),
(170, 'test@test.com', 'test@test.com', '9876543210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 00:45:49', '2019-08-08 00:45:49'),
(177, 'test1@test.com', 'test1@test.com', '9876543210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 00:50:35', '2019-08-08 00:50:35'),
(178, 'bbb', 'bbb@gmail.com', '9876543212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 00:54:25', '2019-08-08 00:54:25'),
(179, 'Naseer', 'naseer.a@etcspl.com', '8272629927', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 01:02:57', '2019-08-08 01:02:57'),
(180, 'Trst', 'test2@test.com', '9876543210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 03:26:34', '2019-08-08 03:26:34'),
(181, 'Rahul', 'rahul@etcs.com', '9823007333', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 03:32:50', '2019-08-08 03:32:50'),
(182, 'Raju', 'rdharna@mail.com', '0555378122', NULL, 'Sharjah', NULL, NULL, NULL, NULL, NULL, '2019-08-08 03:41:41', '2019-08-08 03:41:41'),
(183, 'ctcmaids@gmail.com', 'ctcmaids@gmail.com', '0521636993', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 03:42:57', '2019-08-08 03:42:57'),
(188, 'utlaraajnamrah14@gmail.com', 'utlaraajnamrah14@gmail.com', '8971564195', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 03:46:08', '2019-08-08 03:46:08'),
(194, 'Chetan', 'chetan@etcspl.com', '9823273936', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-08 06:31:34', '2019-08-08 06:31:34'),
(207, 'aaa', 'aaa@gmail.com', '09845784585', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-11 03:36:28', '2019-08-11 03:36:28'),
(209, 'bbb', 'bbb@gmail.com', '09845784585', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-11 04:41:51', '2019-08-11 04:41:51'),
(214, 'Neha', 'Imneha00@yahoo.com', '0553560786', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-25 06:42:45', '2019-08-25 06:42:45'),
(248, 'ab', 'ab@gmail.com', '7845454545', NULL, 'bb', NULL, NULL, NULL, NULL, NULL, '2019-09-02 01:13:13', '2019-09-02 01:13:13'),
(260, 'ac', 'ac@gmail.com', '7778889991', 'jalna', 'dd', 'jalna', 'india', NULL, '421412', NULL, '2019-09-02 23:34:45', '2019-09-03 01:35:15'),
(301, 'ad', 'ad@gmail.com', '7778889991', NULL, 'ad', NULL, NULL, NULL, NULL, NULL, '2019-09-04 03:24:47', '2019-09-04 03:24:47'),
(302, 'ae', 'ae@gmail.com', '7778889991', NULL, 'a', NULL, NULL, NULL, NULL, NULL, '2019-09-04 03:29:40', '2019-09-04 03:29:40'),
(304, 'ganesh', 'ganesh.j123@etcspl.com', '7777777777', NULL, 'aa', NULL, NULL, NULL, NULL, NULL, '2019-09-05 03:35:06', '2019-09-05 03:35:06'),
(317, 'deepak', 'ganesh.j@etcspl.com', '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 02:04:41', '2019-09-08 02:04:41'),
(321, 'Raj', 'rdharna@etcspl.com', '0555372844', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 16:25:49', '2019-09-08 16:25:49'),
(322, 'Rana', 'ranamahbiz@gmail.com', '9987910945', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 20:31:10', '2019-09-08 20:31:10'),
(328, 'ganesh', 'jagdhaneganesh515@gmail.com', '1234567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-09 00:59:37', '2019-09-09 00:59:37'),
(329, 'Raj', 'rajeswari@etcspl.co', '5907825', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-21 04:08:32', '2019-09-21 04:08:32'),
(332, 'rajudharna@gmail.com', 'rajudharna@gmail.com', '0555372844', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-29 08:01:27', '2019-09-29 08:01:27'),
(335, 'Test', 'test@test.test', '9876543210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-03 06:30:08', '2019-10-03 06:30:08'),
(337, 'Atul', 'atul@etcspl.com', '9876543212', 'Aurangabad', 'N10 cidco', 'MAH', 'India', NULL, NULL, NULL, '2019-10-04 23:49:30', '2019-10-04 23:49:30'),
(338, 'A', 'a@a.a', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-05 05:39:11', '2019-10-05 05:39:11'),
(339, 'Harish', 'harish.servicesmbc@gmail.com', '0553218585', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-10 01:21:48', '2019-10-10 01:21:48'),
(340, 'Akhil', 'asundar93@gmail.com', '0521636993', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-10 01:27:28', '2019-10-10 01:27:28'),
(341, 'Akhil', 'rejaniraj90@gmail.com', '0501868585', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-10 01:32:48', '2019-10-10 01:32:48'),
(342, 'Ramesh', 'rameshllcdxb@gmail.com', '0566758585', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-12 21:34:05', '2019-10-12 21:34:05'),
(343, 'A', 'a@a.c', '1234567', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-22 19:46:47', '2019-10-22 19:46:47'),
(344, 'Sabine', 'sabineponcelet@yahoo.com', '0508144529', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-10-26 12:28:29', '2019-10-26 12:28:29'),
(346, 'shrikant', 'shrikant@etcspl.com', '9876543210', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-11 03:57:21', '2019-11-11 03:57:21'),
(347, 'Ayman', 'ahossainy@me.com', '0522446781', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-27 04:07:53', '2019-11-27 04:07:53'),
(348, 'Ajayi Victoria', 'lawlahvictoria2000@gmail.com', '0557251154', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-30 23:04:06', '2019-11-30 23:04:06'),
(349, 'Hussein', 'hussein.alhennawy@gmail.com', '0564606967', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-07 05:19:15', '2019-12-07 05:19:15'),
(350, 'sabha', 'sabha@gmail.com', '0553560786', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-07 07:15:53', '2020-01-07 07:15:53'),
(351, 'Sabha', 'sabhaasim@gmail.com', '0553560786', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-01-07 07:16:40', '2020-01-07 07:16:40');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`user_id`, `token`, `created_at`, `updated_at`) VALUES
(248, 'hFahEWOmMDwQYM0WOBnuoKNRTqg1bYsHpLt27lOK', '2019-09-02 01:13:13', '2019-09-02 01:13:13'),
(260, 'NCrIgVi9dBQcX31e41mN0UIy20dOAqV1s0c8pfIS', '2019-09-02 23:34:45', '2019-09-02 23:34:45'),
(301, '3ejmmXu4S9Pv1hljgoM60jBZqCMh7zSYecQlULUq', '2019-09-04 03:24:47', '2019-09-04 03:24:47'),
(302, 'K71lbakOfZIzdpIA0QRlxpV7fIFCvdQC7qlQxl8f', '2019-09-04 03:29:40', '2019-09-04 03:29:40'),
(304, 'LqCWyuPCpRRFBXTy0IiLlYYOCpJxnc2JEvdHGxsy', '2019-09-05 03:35:06', '2019-09-05 03:35:06'),
(317, '5aVZJINjXuZR17q8VRgQZ90TCPiAXkWoFgQUvKYn', '2019-09-08 02:04:41', '2019-09-08 02:04:41'),
(321, 'EZVKES18VtInJ7rHXF6xAtP9koryqldrLVhHqC1T', '2019-09-08 16:25:49', '2019-09-08 16:25:49'),
(322, 'ZBO0m1ZhOYctrRSizbAuzrMPZvqhE9MEBb0xfEIH', '2019-09-08 20:31:10', '2019-09-08 20:31:10'),
(328, 'UByRVuDAiytE8up4sErqC4yv3mEu4oL8bDuR7hKe', '2019-09-09 00:59:37', '2019-09-09 00:59:37'),
(329, 'sRXIuj3oWEUXHDIV3fCz19vYLLbnvh4LQ4rGMbjA', '2019-09-21 04:08:33', '2019-09-21 04:08:33'),
(332, 'uQjv2eN24BhoNndcH5tS6FohfGGnvx1l8W4NeKGX', '2019-09-29 08:01:28', '2019-09-29 08:01:28'),
(335, 'APZ8e1riKJCeOAjHGPXciiJGMmjCW5UsJgxCWNHX', '2019-10-03 06:30:08', '2019-10-03 06:30:08'),
(337, 'jL1VLggBodCBQcIzWpIFqC3ZQrIdmgSFhsmVTUSI', '2019-10-04 23:49:30', '2019-10-04 23:49:30'),
(338, 'dpCYfNsNjWErni4sK7IH1ezf0ZGYdGZnqhm1lKrg', '2019-10-05 05:39:11', '2019-10-05 05:39:11'),
(339, '94qZ9RMxXE6xwiwjkDwKBt02LraTnXojkcpoz5KQ', '2019-10-10 01:21:48', '2019-10-10 01:21:48'),
(340, 'OO0d9kwnO6CLrmHdVHkPDOoLos9O3CE03nN05bg8', '2019-10-10 01:27:28', '2019-10-10 01:27:28'),
(341, '5jrNdu7DKTZ2iFlqePFcIGvNxAcQsMsUSUhNXLUl', '2019-10-10 01:32:48', '2019-10-10 01:32:48'),
(342, 'xjaZJ6iSdQ2A15PPboOMbCrt6EcCavC0YOq9BtSX', '2019-10-12 21:34:06', '2019-10-12 21:34:06'),
(343, 'NzJ4CTggmrd5bTVBAb52g3stC58apjFMq5zpZ98C', '2019-10-22 19:46:48', '2019-10-22 19:46:48'),
(346, 'w4wQVWSxXH6K2ztcV7UNgREHoiy90KEOLYu6MOnX', '2019-11-11 03:57:21', '2019-11-11 03:57:21'),
(347, 'dgxZ8FyW0Y6kGH5GilmyddqWlrxx25H7z33Z8PQz', '2019-11-27 04:07:53', '2019-11-27 04:07:53'),
(348, 'jaxL7cIhc5maXH17eenNu3LygFTR8QM7opKzLiVw', '2019-11-30 23:04:06', '2019-11-30 23:04:06'),
(349, 'iZQ2WlHzWxQN1phDUVlP0snd2Gcqej7MF3OY2QhK', '2019-12-07 05:19:15', '2019-12-07 05:19:15'),
(350, 'H8dNG07omM5ChQMpfJIS6B8OsVkl8Egj31YpMvXE', '2020-01-07 07:15:53', '2020-01-07 07:15:53'),
(351, 'Z2jAKoNvQYPQSNKXakZpqEDQvIE2lYDu5Y2mMDag', '2020-01-07 07:16:40', '2020-01-07 07:16:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `maids`
--
ALTER TABLE `maids`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `maids_email_unique` (`email`);

--
-- Indexes for table `maid_profiles`
--
ALTER TABLE `maid_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`service_cat_id`);

--
-- Indexes for table `superadmins`
--
ALTER TABLE `superadmins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `superadmins_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_profiles`
--
ALTER TABLE `admin_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `maids`
--
ALTER TABLE `maids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `maid_profiles`
--
ALTER TABLE `maid_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `service_cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `superadmins`
--
ALTER TABLE `superadmins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=352;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
