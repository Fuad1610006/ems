-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 08:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `check_in_time` time DEFAULT NULL,
  `check_out_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `employee_id`, `date`, `status`, `check_in_time`, `check_out_time`, `created_at`, `updated_at`) VALUES
(43, 5, '2023-12-09', '1', NULL, NULL, '2023-12-09 00:33:39', '2023-12-09 00:33:39'),
(44, 10, '2023-12-09', '1', NULL, NULL, '2023-12-09 00:33:39', '2023-12-09 00:33:39'),
(45, 11, '2023-12-09', '1', NULL, NULL, '2023-12-09 00:33:39', '2023-12-09 00:33:39'),
(46, 12, '2023-12-09', '1', NULL, NULL, '2023-12-09 00:33:39', '2023-12-09 00:33:39'),
(47, 13, '2023-12-09', '1', NULL, NULL, '2023-12-09 00:33:39', '2023-12-09 00:33:39'),
(48, 14, '2023-12-09', '1', NULL, NULL, '2023-12-09 00:33:39', '2023-12-09 00:33:39'),
(49, 15, '2023-12-09', '1', NULL, NULL, '2023-12-09 00:33:39', '2023-12-09 00:33:39'),
(50, 16, '2023-12-09', '1', NULL, NULL, '2023-12-09 00:33:39', '2023-12-09 00:33:39'),
(67, 5, '2023-12-11', '1', NULL, NULL, '2023-12-10 22:46:15', '2023-12-10 22:46:15'),
(68, 10, '2023-12-11', '1', NULL, NULL, '2023-12-10 22:46:15', '2023-12-10 22:46:15'),
(69, 11, '2023-12-11', '1', NULL, NULL, '2023-12-10 22:46:15', '2023-12-10 22:46:15'),
(70, 12, '2023-12-11', '1', NULL, NULL, '2023-12-10 22:46:15', '2023-12-10 22:46:15'),
(71, 13, '2023-12-11', '1', NULL, NULL, '2023-12-10 22:46:15', '2023-12-10 22:46:15'),
(72, 14, '2023-12-11', '1', NULL, NULL, '2023-12-10 22:46:15', '2023-12-10 22:46:15'),
(73, 15, '2023-12-11', '1', NULL, NULL, '2023-12-10 22:46:15', '2023-12-10 22:46:15'),
(74, 16, '2023-12-11', '1', NULL, NULL, '2023-12-10 22:46:15', '2023-12-10 22:46:15'),
(91, 5, '2023-12-19', '1', NULL, NULL, '2023-12-18 23:03:51', '2023-12-18 23:03:51'),
(92, 10, '2023-12-19', '0', NULL, NULL, '2023-12-18 23:03:51', '2023-12-18 23:03:51'),
(93, 11, '2023-12-19', '1', NULL, NULL, '2023-12-18 23:03:51', '2023-12-18 23:03:51'),
(94, 12, '2023-12-19', '1', NULL, NULL, '2023-12-18 23:03:51', '2023-12-18 23:03:51'),
(95, 13, '2023-12-19', '1', NULL, NULL, '2023-12-18 23:03:51', '2023-12-18 23:03:51'),
(96, 14, '2023-12-19', '1', NULL, NULL, '2023-12-18 23:03:51', '2023-12-18 23:03:51'),
(97, 15, '2023-12-19', '1', NULL, NULL, '2023-12-18 23:03:51', '2023-12-18 23:03:51'),
(98, 16, '2023-12-19', '1', NULL, NULL, '2023-12-18 23:03:51', '2023-12-18 23:03:51'),
(100, 5, '2023-12-24', '1', NULL, NULL, NULL, NULL),
(101, 10, '2023-12-24', '1', NULL, NULL, NULL, NULL),
(102, 11, '2023-12-24', '0', NULL, NULL, NULL, NULL),
(103, 12, '2023-12-24', '1', NULL, NULL, NULL, NULL),
(104, 13, '2023-12-24', '1', NULL, NULL, NULL, NULL),
(105, 14, '2023-12-24', '1', NULL, NULL, NULL, NULL),
(106, 5, '2023-12-24', '1', NULL, NULL, NULL, NULL),
(107, 10, '2023-12-25', '1', NULL, NULL, NULL, NULL),
(108, 11, '2023-12-25', '0', NULL, NULL, NULL, NULL),
(109, 12, '2023-12-25', '1', NULL, NULL, NULL, NULL),
(110, 13, '2023-12-25', '1', NULL, NULL, NULL, NULL),
(111, 14, '2023-12-25', '1', NULL, NULL, NULL, NULL),
(112, 15, '2023-12-25', '1', NULL, NULL, NULL, NULL),
(113, 16, '2023-12-25', '1', NULL, NULL, NULL, NULL),
(114, 15, '2023-12-24', '0', NULL, NULL, NULL, NULL),
(115, 16, '2023-12-24', '1', NULL, NULL, NULL, NULL),
(116, 5, '2023-12-26', '0', NULL, NULL, NULL, NULL),
(117, 10, '2023-12-26', '1', NULL, NULL, NULL, NULL),
(118, 11, '2023-12-26', '1', NULL, NULL, NULL, NULL),
(119, 12, '2023-12-26', '1', NULL, NULL, NULL, NULL),
(120, 13, '2023-12-26', '1', NULL, NULL, NULL, NULL),
(121, 14, '2023-12-26', '1', NULL, NULL, NULL, NULL),
(122, 15, '2023-12-26', '1', NULL, NULL, NULL, NULL),
(123, 16, '2023-12-26', '1', NULL, NULL, NULL, NULL),
(124, 5, '2023-12-27', '0', NULL, NULL, NULL, NULL),
(125, 10, '2023-12-27', '1', NULL, NULL, NULL, NULL),
(126, 11, '2023-12-27', '1', NULL, NULL, NULL, NULL),
(127, 12, '2023-12-27', '1', NULL, NULL, NULL, NULL),
(128, 13, '2023-12-27', '1', NULL, NULL, NULL, NULL),
(129, 14, '2023-12-27', '1', NULL, NULL, NULL, NULL),
(130, 15, '2023-12-27', '1', NULL, NULL, NULL, NULL),
(131, 16, '2023-12-27', '1', NULL, NULL, NULL, NULL),
(132, 5, '2023-12-28', '0', NULL, NULL, NULL, NULL),
(133, 10, '2023-12-28', '1', NULL, NULL, NULL, NULL),
(134, 11, '2023-12-28', '1', NULL, NULL, NULL, NULL),
(135, 12, '2023-12-28', '1', NULL, NULL, NULL, NULL),
(136, 13, '2023-12-28', '1', NULL, NULL, NULL, NULL),
(137, 14, '2023-12-28', '1', NULL, NULL, NULL, NULL),
(138, 15, '2023-12-28', '1', NULL, NULL, NULL, NULL),
(139, 16, '2023-12-28', '1', NULL, NULL, NULL, NULL),
(140, 5, '2023-12-29', '0', NULL, NULL, NULL, NULL),
(141, 10, '2023-12-29', '1', NULL, NULL, NULL, NULL),
(142, 11, '2023-12-29', '1', NULL, NULL, NULL, NULL),
(143, 12, '2023-12-29', '1', NULL, NULL, NULL, NULL),
(144, 13, '2023-12-29', '1', NULL, NULL, NULL, NULL),
(145, 14, '2023-12-29', '1', NULL, NULL, NULL, NULL),
(146, 15, '2023-12-29', '1', NULL, NULL, NULL, NULL),
(147, 16, '2023-12-29', '1', NULL, NULL, NULL, NULL),
(148, 5, '2023-12-30', '0', NULL, NULL, NULL, NULL),
(149, 10, '2023-12-30', '1', NULL, NULL, NULL, NULL),
(150, 11, '2023-12-30', '1', NULL, NULL, NULL, NULL),
(151, 12, '2023-12-30', '1', NULL, NULL, NULL, NULL),
(152, 13, '2023-12-30', '1', NULL, NULL, NULL, NULL),
(153, 14, '2023-12-30', '1', NULL, NULL, NULL, NULL),
(154, 15, '2023-12-30', '1', NULL, NULL, NULL, NULL),
(155, 16, '2023-12-30', '1', NULL, NULL, NULL, NULL),
(156, 5, '2023-12-31', '1', NULL, NULL, NULL, NULL),
(157, 10, '2023-12-31', '1', NULL, NULL, NULL, NULL),
(158, 11, '2023-12-31', '1', NULL, NULL, NULL, NULL),
(159, 12, '2023-12-31', '1', NULL, NULL, NULL, NULL),
(160, 13, '2023-12-31', '1', NULL, NULL, NULL, NULL),
(161, 14, '2023-12-31', '0', NULL, NULL, NULL, NULL),
(162, 15, '2023-12-31', '1', NULL, NULL, NULL, NULL),
(163, 16, '2023-12-31', '1', NULL, NULL, NULL, NULL),
(164, 5, '2023-12-02', '1', NULL, NULL, NULL, NULL),
(165, 10, '2023-12-02', '1', NULL, NULL, NULL, NULL),
(166, 11, '2023-12-02', '1', NULL, NULL, NULL, NULL),
(167, 12, '2023-12-02', '1', NULL, NULL, NULL, NULL),
(168, 13, '2023-12-02', '1', NULL, NULL, NULL, NULL),
(169, 14, '2023-12-02', '0', NULL, NULL, NULL, NULL),
(170, 15, '2023-12-02', '1', NULL, NULL, NULL, NULL),
(171, 16, '2023-12-02', '1', NULL, NULL, NULL, NULL),
(172, 5, '2023-12-03', '1', NULL, NULL, NULL, NULL),
(173, 10, '2023-12-03', '1', NULL, NULL, NULL, NULL),
(174, 11, '2023-12-03', '1', NULL, NULL, NULL, NULL),
(175, 12, '2023-12-03', '1', NULL, NULL, NULL, NULL),
(176, 13, '2023-12-03', '1', NULL, NULL, NULL, NULL),
(177, 14, '2023-12-03', '1', NULL, NULL, NULL, NULL),
(178, 15, '2023-12-03', '1', NULL, NULL, NULL, NULL),
(179, 16, '2023-12-03', '0', NULL, NULL, NULL, NULL),
(180, 5, '2023-12-04', '1', NULL, NULL, NULL, NULL),
(181, 10, '2023-12-04', '1', NULL, NULL, NULL, NULL),
(182, 11, '2023-12-04', '1', NULL, NULL, NULL, NULL),
(183, 12, '2023-12-04', '1', NULL, NULL, NULL, NULL),
(184, 13, '2023-12-04', '1', NULL, NULL, NULL, NULL),
(185, 14, '2023-12-04', '1', NULL, NULL, NULL, NULL),
(186, 15, '2023-12-04', '1', NULL, NULL, NULL, NULL),
(187, 16, '2023-12-04', '0', NULL, NULL, NULL, NULL),
(188, 5, '2023-12-05', '1', NULL, NULL, NULL, NULL),
(189, 10, '2023-12-05', '1', NULL, NULL, NULL, NULL),
(190, 11, '2023-12-05', '1', NULL, NULL, NULL, NULL),
(191, 12, '2023-12-05', '1', NULL, NULL, NULL, NULL),
(192, 13, '2023-12-05', '1', NULL, NULL, NULL, NULL),
(193, 14, '2023-12-05', '1', NULL, NULL, NULL, NULL),
(194, 15, '2023-12-05', '1', NULL, NULL, NULL, NULL),
(195, 16, '2023-12-05', '0', NULL, NULL, NULL, NULL),
(196, 5, '2023-12-06', '1', NULL, NULL, NULL, NULL),
(197, 10, '2023-12-06', '1', NULL, NULL, NULL, NULL),
(198, 11, '2023-12-06', '1', NULL, NULL, NULL, NULL),
(199, 12, '2023-12-06', '1', NULL, NULL, NULL, NULL),
(200, 13, '2023-12-06', '1', NULL, NULL, NULL, NULL),
(201, 14, '2023-12-06', '1', NULL, NULL, NULL, NULL),
(202, 15, '2023-12-06', '1', NULL, NULL, NULL, NULL),
(203, 16, '2023-12-06', '1', NULL, NULL, NULL, NULL),
(204, 5, '2023-12-07', '1', NULL, NULL, NULL, NULL),
(205, 10, '2023-12-07', '1', NULL, NULL, NULL, NULL),
(206, 11, '2023-12-07', '0', NULL, NULL, NULL, NULL),
(207, 12, '2023-12-07', '1', NULL, NULL, NULL, NULL),
(208, 13, '2023-12-07', '1', NULL, NULL, NULL, NULL),
(209, 14, '2023-12-07', '1', NULL, NULL, NULL, NULL),
(210, 15, '2023-12-07', '1', NULL, NULL, NULL, NULL),
(211, 16, '2023-12-07', '1', NULL, NULL, NULL, NULL),
(212, 5, '2023-12-08', '1', NULL, NULL, NULL, NULL),
(213, 10, '2023-12-08', '1', NULL, NULL, NULL, NULL),
(214, 11, '2023-12-08', '1', NULL, NULL, NULL, NULL),
(215, 12, '2023-12-08', '1', NULL, NULL, NULL, NULL),
(216, 13, '2023-12-08', '1', NULL, NULL, NULL, NULL),
(217, 14, '2023-12-08', '1', NULL, NULL, NULL, NULL),
(218, 15, '2023-12-08', '1', NULL, NULL, NULL, NULL),
(219, 16, '2023-12-08', '1', NULL, NULL, NULL, NULL),
(220, 5, '2023-12-12', '1', NULL, NULL, NULL, NULL),
(221, 10, '2023-12-12', '1', NULL, NULL, NULL, NULL),
(222, 11, '2023-12-12', '1', NULL, NULL, NULL, NULL),
(223, 12, '2023-12-12', '1', NULL, NULL, NULL, NULL),
(224, 13, '2023-12-12', '1', NULL, NULL, NULL, NULL),
(225, 14, '2023-12-12', '1', NULL, NULL, NULL, NULL),
(226, 15, '2023-12-12', '1', NULL, NULL, NULL, NULL),
(227, 16, '2023-12-12', '1', NULL, NULL, NULL, NULL),
(228, 5, '2023-12-13', '1', NULL, NULL, NULL, NULL),
(229, 10, '2023-12-13', '1', NULL, NULL, NULL, NULL),
(230, 11, '2023-12-13', '1', NULL, NULL, NULL, NULL),
(231, 12, '2023-12-13', '1', NULL, NULL, NULL, NULL),
(232, 13, '2023-12-13', '1', NULL, NULL, NULL, NULL),
(233, 14, '2023-12-13', '1', NULL, NULL, NULL, NULL),
(234, 15, '2023-12-13', '1', NULL, NULL, NULL, NULL),
(235, 16, '2023-12-13', '0', NULL, NULL, NULL, NULL),
(236, 5, '2023-12-14', '1', NULL, NULL, NULL, NULL),
(237, 10, '2023-12-14', '1', NULL, NULL, NULL, NULL),
(238, 11, '2023-12-14', '1', NULL, NULL, NULL, NULL),
(239, 12, '2023-12-14', '1', NULL, NULL, NULL, NULL),
(240, 13, '2023-12-14', '1', NULL, NULL, NULL, NULL),
(241, 14, '2023-12-14', '1', NULL, NULL, NULL, NULL),
(242, 15, '2023-12-14', '1', NULL, NULL, NULL, NULL),
(243, 16, '2023-12-14', '1', NULL, NULL, NULL, NULL),
(244, 5, '2023-12-16', '1', NULL, NULL, NULL, NULL),
(245, 10, '2023-12-16', '1', NULL, NULL, NULL, NULL),
(246, 11, '2023-12-16', '1', NULL, NULL, NULL, NULL),
(247, 12, '2023-12-16', '1', NULL, NULL, NULL, NULL),
(248, 13, '2023-12-16', '1', NULL, NULL, NULL, NULL),
(249, 14, '2023-12-16', '1', NULL, NULL, NULL, NULL),
(250, 15, '2023-12-16', '1', NULL, NULL, NULL, NULL),
(251, 16, '2023-12-16', '1', NULL, NULL, NULL, NULL),
(252, 5, '2023-12-17', '1', NULL, NULL, NULL, NULL),
(253, 10, '2023-12-17', '1', NULL, NULL, NULL, NULL),
(254, 11, '2023-12-17', '1', NULL, NULL, NULL, NULL),
(255, 12, '2023-12-17', '1', NULL, NULL, NULL, NULL),
(256, 13, '2023-12-17', '1', NULL, NULL, NULL, NULL),
(257, 14, '2023-12-17', '1', NULL, NULL, NULL, NULL),
(258, 15, '2023-12-17', '1', NULL, NULL, NULL, NULL),
(259, 16, '2023-12-17', '1', NULL, NULL, NULL, NULL),
(260, 5, '2023-12-18', '1', NULL, NULL, NULL, NULL),
(261, 10, '2023-12-18', '1', NULL, NULL, NULL, NULL),
(262, 11, '2023-12-18', '1', NULL, NULL, NULL, NULL),
(263, 12, '2023-12-18', '1', NULL, NULL, NULL, NULL),
(264, 13, '2023-12-18', '1', NULL, NULL, NULL, NULL),
(265, 14, '2023-12-18', '1', NULL, NULL, NULL, NULL),
(266, 15, '2023-12-18', '1', NULL, NULL, NULL, NULL),
(267, 16, '2023-12-18', '1', NULL, NULL, NULL, NULL),
(268, 5, '2023-12-20', '1', NULL, NULL, NULL, NULL),
(269, 10, '2023-12-20', '1', NULL, NULL, NULL, NULL),
(270, 11, '2023-12-20', '1', NULL, NULL, NULL, NULL),
(271, 12, '2023-12-20', '1', NULL, NULL, NULL, NULL),
(272, 13, '2023-12-20', '1', NULL, NULL, NULL, NULL),
(273, 14, '2023-12-20', '1', NULL, NULL, NULL, NULL),
(274, 15, '2023-12-20', '1', NULL, NULL, NULL, NULL),
(275, 16, '2023-12-20', '1', NULL, NULL, NULL, NULL),
(276, 5, '2023-12-21', '1', NULL, NULL, NULL, NULL),
(277, 10, '2023-12-21', '1', NULL, NULL, NULL, NULL),
(278, 11, '2023-12-21', '1', NULL, NULL, NULL, NULL),
(279, 12, '2023-12-21', '1', NULL, NULL, NULL, NULL),
(280, 13, '2023-12-21', '1', NULL, NULL, NULL, NULL),
(281, 14, '2023-12-21', '1', NULL, NULL, NULL, NULL),
(282, 15, '2023-12-21', '1', NULL, NULL, NULL, NULL),
(283, 16, '2023-12-21', '1', NULL, NULL, NULL, NULL),
(284, 5, '2023-12-23', '1', NULL, NULL, NULL, NULL),
(285, 10, '2023-12-23', '1', NULL, NULL, NULL, NULL),
(286, 11, '2023-12-23', '1', NULL, NULL, NULL, NULL),
(287, 12, '2023-12-23', '1', NULL, NULL, NULL, NULL),
(288, 13, '2023-12-23', '1', NULL, NULL, NULL, NULL),
(289, 14, '2023-12-23', '1', NULL, NULL, NULL, NULL),
(290, 15, '2023-12-23', '1', NULL, NULL, NULL, NULL),
(291, 16, '2023-12-23', '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sales', NULL, NULL, NULL),
(2, 'Finance', NULL, NULL, NULL),
(3, 'Operations', NULL, NULL, NULL),
(5, 'HR & Compliance', '2023-11-28 22:03:48', '2023-11-28 22:26:02', NULL),
(7, 'Branding & Communication', '2023-12-09 00:12:05', '2023-12-09 00:12:05', NULL),
(8, 'IT Infrastructure', '2023-12-09 00:12:17', '2023-12-09 00:12:17', NULL),
(9, 'Logistics', '2023-12-09 00:12:44', '2023-12-09 00:12:44', NULL),
(10, 'Transportation', '2023-12-09 00:13:00', '2023-12-09 00:13:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(255) NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'Executive', 1, NULL, NULL),
(2, 'Officer', 1, NULL, '2023-12-09 00:14:48'),
(3, 'Senior Executive', 1, NULL, '2023-12-09 00:10:53'),
(5, 'Assistant Manager', 5, '2023-11-28 22:15:33', '2023-11-28 22:15:33'),
(7, 'Assistant Officer', 5, '2023-12-09 00:11:25', '2023-12-09 00:11:25'),
(8, 'In-Charge', 10, '2023-12-09 00:17:07', '2023-12-09 00:17:07'),
(9, 'Junior Executive', 9, '2023-12-09 00:17:19', '2023-12-09 00:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `present_address` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `joining_date` date DEFAULT NULL,
  `basic` decimal(10,2) NOT NULL,
  `bonus` decimal(10,2) NOT NULL,
  `nid_no` bigint(50) UNSIGNED DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `blood_group` varchar(255) NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_id`, `name_en`, `name_bn`, `email`, `contact_no_en`, `contact_no_bn`, `password`, `permanent_address`, `present_address`, `date_of_birth`, `joining_date`, `basic`, `bonus`, `nid_no`, `gender`, `blood_group`, `department_id`, `designation_id`, `role_id`, `shift_id`, `user_id`, `image`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, NULL, 'AFM Fuad', NULL, 'admin@ems.com', '01521326979', NULL, '$2y$12$guA3/m/tpQwaSwNB5S91ze1feu2dFT2WQBCeJMEVdO9RbRlVFflpe', NULL, NULL, '1999-11-07', NULL, 25000.00, 50.00, NULL, NULL, 'A+', 3, 3, 2, 0, NULL, '8431701055961.jpg', NULL, '2023-11-26 21:32:41', '2023-11-26 21:32:41', NULL),
(10, NULL, 'Kamal Uddin', NULL, 'employee@ems.com', '01852117151', NULL, '$2y$12$PoykYWVLkR7mcMXulZtW1eBr2I0VTmLkEzf9Fviu.PLF.Xq.GoOEy', 'Feni', 'Chattogram', '1995-11-02', NULL, 24500.00, 50.00, NULL, NULL, 'AB+', 1, 1, 3, 0, NULL, '8791701057657.jpg', NULL, '2023-11-26 22:00:57', '2023-11-26 22:00:57', NULL),
(11, NULL, 'Ibrahim Khalil', NULL, 'ikshakil@gmail.com', '01645', NULL, '$2y$12$rC78qW0tnSBciVxc5/n9U..eNNDxXIofqqoguyzAgjgeT3ix8UwYC', 'CoxsBazar', 'Chattogram', '1996-11-02', NULL, 28000.00, 50.00, NULL, NULL, 'A-', 2, 2, 3, 0, NULL, '6251701152229.jpg', NULL, '2023-11-28 00:17:10', '2023-11-28 00:17:10', NULL),
(12, NULL, 'Asadullah Al Galib', NULL, 'galib@yahoo.com', '01985472121', NULL, '$2y$12$95xD8L3I3xSfXOi5OLUdSeubnoEi5j.0Kq7Q/F7O69I7JgrsAqDey', 'Rajshahi', 'Chattogram', '1997-11-15', '2023-10-30', 27500.00, 50.00, 548712659865, NULL, 'A+', 3, 3, 3, 0, NULL, '4091701152712.jpg', NULL, '2023-11-28 00:25:12', '2023-11-28 00:25:12', NULL),
(13, NULL, 'Saad Uddin', NULL, 'saad@yahoo.com', '01721002773', NULL, '$2y$12$chpxmq5e4KIGOiwN3w/Yjut0a2/wcxrtiFvb50MhnKjk25ZSbz9lm', 'Khulna', 'Chattogram', '2000-10-28', '2023-10-31', 29000.00, 50.00, 36587412, NULL, 'A+', 5, 5, 3, 0, NULL, '8741701231480.jpg', NULL, '2023-11-28 22:18:00', '2023-11-28 22:18:00', NULL),
(14, NULL, 'Raihan Sazzad', NULL, 'raihan@yahoo.com', '0152154879', NULL, '$2y$12$p5WoPTAw0lnrUAUD7ncYO.Rit3BzesNAq4pBi.WIVA6WuFB6YlAWG', 'Feni', 'Chattogram', '1999-05-01', '2023-09-01', 27850.00, 50.00, 5445878754, NULL, 'O-', 2, 1, 2, 0, NULL, '3081701487626.jpg', NULL, '2023-12-01 21:27:07', '2023-12-01 21:27:07', NULL),
(15, NULL, 'MJU Sharhrukh', NULL, 'mju@nstu.edu.bd', '3265988754', NULL, '$2y$12$PVcj.CeojRipQ/UoP8DH/.Q.xmhg5JUlLxx4VnnNOV5aoYu916iXS', 'Chattogram', 'Noakhali', '2000-09-05', '2023-10-05', 26950.00, 50.00, 3265987, NULL, 'AB+', 3, 2, 3, 4, NULL, '9651702098047.jpg', NULL, '2023-12-08 23:00:47', '2023-12-08 23:00:47', NULL),
(16, NULL, 'Rafsan Al Azad', NULL, 'rafsan@yahoo.com', '01968574321', NULL, '$2y$12$7pXIpMOGqF4HI39vz3V2aOvZk1/k54EKl7uGooeRnI./dkOODrGpC', 'Sylhet', 'Dhaka', '1995-11-25', '2023-11-30', 30000.00, 50.00, 3258741, NULL, 'AB+', 7, 1, 3, 5, NULL, NULL, NULL, '2023-12-09 00:18:44', '2023-12-09 00:18:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `leave_type` varchar(255) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `allotted_leaves` int(11) NOT NULL,
  `reason` text NOT NULL,
  `status` enum('Pending','Approved','Rejected') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `employee_id`, `start_date`, `end_date`, `leave_type`, `no_of_days`, `allotted_leaves`, `reason`, `status`, `created_at`, `updated_at`) VALUES
(1, '14', '2023-12-02', '2023-12-03', '', 2, 15, '', 'Pending', NULL, NULL),
(2, '13', '2023-12-20', '2023-12-21', '', 2, 15, '', 'Pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_11_13_035729_create_roles_table', 1),
(3, '2023_11_13_035730_create_users_table', 1),
(4, '2023_11_18_042424_create_permissions_table', 1),
(5, '2023_11_19_060238_create_departments_table', 1),
(6, '2023_11_19_060341_create_designations_table', 1),
(7, '2023_11_23_044840_create_employees_table', 1),
(8, '2023_11_27_003204_create_attendances_table', 2),
(9, '2023_11_27_063444_create_leaves_table', 3),
(11, '2023_12_01_140311_create_overtimes_table', 4),
(13, '2023_12_01_140358_create_resignations_table', 4),
(14, '2023_12_01_140413_create_terminations_table', 4),
(15, '2023_12_01_140443_create_salaries_table', 4),
(17, '2023_12_01_140223_create_shifts_table', 5),
(18, '2023_12_01_140342_create_promotions_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `overtimes`
--

CREATE TABLE `overtimes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `hours` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overtimes`
--

INSERT INTO `overtimes` (`id`, `employee_id`, `date`, `hours`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 13, '2023-12-02', 2, '', '2023-12-18 23:08:36', '2023-12-18 23:08:36', NULL),
(2, 14, '2023-12-04', 2, '', NULL, NULL, NULL),
(3, 14, '2023-12-14', 2, '', NULL, NULL, NULL),
(4, 15, '2023-12-11', 2, '', NULL, NULL, NULL),
(5, 11, '2023-12-05', 2, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `to_designation` bigint(20) UNSIGNED NOT NULL,
  `to_department` bigint(20) UNSIGNED NOT NULL,
  `notice_date` date NOT NULL,
  `promotion_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `employee_id`, `department_id`, `designation_id`, `to_designation`, `to_department`, `notice_date`, `promotion_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 1, 1, 3, 1, '2023-12-28', '2024-01-02', '2023-12-19 11:31:46', '2023-12-19 11:31:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resignations`
--

CREATE TABLE `resignations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `notice_date` date NOT NULL,
  `resignation_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `identity` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `identity`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', '2023-11-26 00:19:32', NULL),
(2, 'Admin', 'admin', '2023-11-26 00:19:32', NULL),
(3, 'Employee', 'employee', '2023-11-26 00:19:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salaries`
--

CREATE TABLE `salaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `pay_date` date NOT NULL,
  `basic_salary` double NOT NULL,
  `house_rent` decimal(8,2) NOT NULL,
  `medical_allowance` decimal(8,2) NOT NULL,
  `travel_allowance` decimal(8,2) NOT NULL,
  `dearness_allowance` decimal(8,2) NOT NULL,
  `overtime_amount` decimal(8,2) NOT NULL,
  `bonus` decimal(8,2) NOT NULL,
  `tax` decimal(8,2) NOT NULL,
  `provident_fund` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shift` varchar(255) NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shifts`
--

INSERT INTO `shifts` (`id`, `shift`, `start_time`, `end_time`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Basic Day Shift', '09:00:00', '05:00:00', '2023-12-06 22:07:17', '2023-12-06 22:07:17', NULL),
(4, 'Night Shift', '06:00:00', '06:00:00', '2023-12-06 22:11:44', '2023-12-06 22:11:44', NULL),
(5, 'Second Shift', '05:00:00', '12:00:00', '2023-12-09 00:10:33', '2023-12-09 00:10:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terminations`
--

CREATE TABLE `terminations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `designation_id` bigint(20) UNSIGNED NOT NULL,
  `notice_date` date NOT NULL,
  `termination_date` date NOT NULL,
  `type` tinyint(4) NOT NULL,
  `reason` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terminations`
--

INSERT INTO `terminations` (`id`, `employee_id`, `department_id`, `designation_id`, `notice_date`, `termination_date`, `type`, `reason`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 10, 1, 1, '2023-12-27', '2024-01-01', 0, 'xyz', '2023-12-19 10:42:21', '2023-12-19 10:42:21', NULL),
(2, 14, 2, 1, '2023-11-25', '2023-12-01', 0, 'xyz', '2023-12-19 11:23:07', '2023-12-19 11:23:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_bn` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact_no_en` varchar(255) NOT NULL,
  `contact_no_bn` varchar(255) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL DEFAULT 'en',
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 2=>inactive',
  `full_access` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=>yes 0=>no',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_en`, `name_bn`, `email`, `contact_no_en`, `contact_no_bn`, `role_id`, `employee_id`, `password`, `language`, `image`, `status`, `full_access`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'John Doe', NULL, 'john@ems.com', '01676878734', NULL, 1, '4', '$2y$12$tx2z.ds461CangVKokmD0edbiY6/cFLUQyGYS9CDmOrYCTsr/BmGm', 'en', NULL, 1, 1, NULL, '2023-11-26 00:39:07', '2023-11-26 00:39:07', NULL),
(2, 'AFM Fuad', NULL, 'admin@ems.com', '01521326979', NULL, 2, '5', '$2y$12$BH7Apj9W.uZmfFR8yx3tP.Bt57.S.pKn0eDIyLPdExt0Aj7Ktag/G', 'en', NULL, 1, 1, NULL, '2023-11-26 21:32:41', '2023-11-26 21:32:41', NULL),
(3, 'Kamal Uddin', NULL, 'employee@ems.com', '01852117151', NULL, 3, '10', '$2y$12$WAfOwk6kspY2sTUflVye6OmHue9Qrji5YNC7sVZGutPdKuGpE47c2', 'en', NULL, 1, 1, NULL, '2023-11-26 22:00:57', '2023-11-26 22:00:57', NULL),
(4, 'Ibrahim Khalil', NULL, 'ikshakil@gmail.com', '01645', NULL, 3, '11', '$2y$12$fXgGinRI/MrwNzPIKk/0jO5B5koIji68WoOXJLJMNGRw59.sW1DNO', 'en', NULL, 1, 1, NULL, '2023-11-28 00:17:10', '2023-11-28 00:17:10', NULL),
(5, 'Asadullah Al Galib', NULL, 'galib@yahoo.com', '01985472121', NULL, 3, '12', '$2y$12$f2hnhO8ezS/ZoUk7WflPge2U9Srh3on882ADZe.61tBZcZaKg95vS', 'en', NULL, 1, 1, NULL, '2023-11-28 00:25:12', '2023-11-28 00:25:12', NULL),
(6, 'Saad Uddin', NULL, 'saad@yahoo.com', '01721002773', NULL, 3, '13', '$2y$12$Sk7GsH/.tO8AlvMHqbOWuuUGfzC5fstyKm/KdWEPOCUlnKebnHLiO', 'en', NULL, 1, 1, NULL, '2023-11-28 22:18:00', '2023-11-28 22:18:00', NULL),
(7, 'Raihan Sazzad', NULL, 'raihan@yahoo.com', '0152154879', NULL, 2, '14', '$2y$12$9aNo9ul3gIs.HfLpnV618OdFQKGLHfl4wa1pOv3XGNEorEK.0YV8a', 'en', NULL, 1, 1, NULL, '2023-12-01 21:27:07', '2023-12-01 21:27:07', NULL),
(8, 'MJU Sharhrukh', NULL, 'mju@nstu.edu.bd', '3265988754', NULL, 3, '15', '$2y$12$8itYJBLsp/OZ5agj2xphM.D.CjF6IZgeWlfINZn87IrmOALrYDO6q', 'en', NULL, 1, 1, NULL, '2023-12-08 23:00:47', '2023-12-08 23:00:47', NULL),
(9, 'Rafsan Al Azad', NULL, 'rafsan@yahoo.com', '01968574321', NULL, 3, '16', '$2y$12$c92hML4FMc6Xgiiec6aDbe54nV/tExxIcY4EsL8Q3afyqlHVWSGCa', 'en', NULL, 1, 1, NULL, '2023-12-09 00:18:44', '2023-12-09 00:18:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendances_employee_id_index` (`employee_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `designations_department_id_foreign` (`department_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `employees_employee_id_unique` (`employee_id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_contact_no_bn_unique` (`contact_no_bn`),
  ADD KEY `employees_department_id_index` (`department_id`),
  ADD KEY `employees_designation_id_index` (`designation_id`),
  ADD KEY `employees_role_id_index` (`role_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overtimes`
--
ALTER TABLE `overtimes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `overtimes_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_index` (`role_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promotions_employee_id_foreign` (`employee_id`),
  ADD KEY `promotions_department_id_index` (`department_id`),
  ADD KEY `promotions_designation_id_index` (`designation_id`),
  ADD KEY `promotions_to_designation_index` (`to_designation`),
  ADD KEY `promotions_to_department_index` (`to_department`);

--
-- Indexes for table `resignations`
--
ALTER TABLE `resignations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resignations_employee_id_foreign` (`employee_id`),
  ADD KEY `resignations_department_id_index` (`department_id`),
  ADD KEY `resignations_designation_id_index` (`designation_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_identity_unique` (`identity`);

--
-- Indexes for table `salaries`
--
ALTER TABLE `salaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `salaries_employee_id_foreign` (`employee_id`),
  ADD KEY `salaries_department_id_index` (`department_id`),
  ADD KEY `salaries_designation_id_index` (`designation_id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminations`
--
ALTER TABLE `terminations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `terminations_employee_id_foreign` (`employee_id`),
  ADD KEY `terminations_department_id_index` (`department_id`),
  ADD KEY `terminations_designation_id_index` (`designation_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_contact_no_en_unique` (`contact_no_en`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_contact_no_bn_unique` (`contact_no_bn`),
  ADD KEY `users_role_id_index` (`role_id`),
  ADD KEY `users_employee_id_index` (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `overtimes`
--
ALTER TABLE `overtimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resignations`
--
ALTER TABLE `resignations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `salaries`
--
ALTER TABLE `salaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `terminations`
--
ALTER TABLE `terminations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendances`
--
ALTER TABLE `attendances`
  ADD CONSTRAINT `attendances_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `designations`
--
ALTER TABLE `designations`
  ADD CONSTRAINT `designations_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `overtimes`
--
ALTER TABLE `overtimes`
  ADD CONSTRAINT `overtimes_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `promotions`
--
ALTER TABLE `promotions`
  ADD CONSTRAINT `promotions_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `promotions_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `promotions_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `resignations`
--
ALTER TABLE `resignations`
  ADD CONSTRAINT `resignations_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `resignations_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `resignations_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `salaries`
--
ALTER TABLE `salaries`
  ADD CONSTRAINT `salaries_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `salaries_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `salaries_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `terminations`
--
ALTER TABLE `terminations`
  ADD CONSTRAINT `terminations_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `terminations_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `terminations_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
