-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 08:52 AM
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
-- Database: `gymgym`
--

-- --------------------------------------------------------

--
-- Table structure for table `audittrail`
--

CREATE TABLE `audittrail` (
  `id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `datetime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audittrail`
--

INSERT INTO `audittrail` (`id`, `type`, `description`, `datetime`) VALUES
(1, 'user', 'Logged In', '2022-09-22 09:46:23 '),
(2, 'admin', 'Logged In', '2022-09-22 09:47:23 '),
(3, 'staff', 'Logged In', '2022-09-22 09:49:55 '),
(5, 'staff', 'Logged In', '2022-09-22 09:52:09 '),
(6, 'staff', 'Logged Out', '2022-09-22 09:52:13 '),
(7, 'staff', 'Logged In', '2022-09-22 09:52:19 '),
(8, 'staff', 'New Expenses', '2022-09-22 09:54:31 '),
(9, 'staff', 'Delete Expenses', '2022-09-22 09:55:32 '),
(10, 'staff', 'Update Profile', '2022-09-22 09:58:51 '),
(11, 'staff', 'Logged Out', '2022-09-22 10:05:45 '),
(12, 'admin', 'Logged In', '2022-09-22 10:05:47 '),
(13, 'admin', 'Logged Out', '2022-09-22 10:29:23 '),
(14, 'user', 'Logged In', '2022-09-22 10:29:26 '),
(15, 'user', 'Purchase Plan', '2022-09-22 10:33:05 '),
(16, 'user', 'Make Payment', '2022-09-22 10:33:15 '),
(17, 'user', 'Logged Out', '2022-09-22 10:33:23 '),
(18, 'staff', 'Logged In', '2022-09-22 10:33:31 '),
(19, 'staff', 'Approved Customer Purchase Plan', '2022-09-22 10:37:56 '),
(20, 'staff', 'Logged Out', '2022-09-22 10:38:05 '),
(21, 'user', 'Logged In', '2022-09-22 10:38:15 '),
(22, 'user', 'Update Profile', '2022-09-22 11:05:20 '),
(23, 'user', 'Logged Out', '2022-09-22 11:05:25 '),
(24, 'admin', 'Logged In', '2022-09-22 11:05:27 '),
(25, 'admin', 'Logged Out', '2022-09-22 11:06:57 '),
(26, 'staff', 'Logged In', '2022-09-22 11:06:58 '),
(27, 'staff', 'Logged Out', '2022-09-22 11:08:07 '),
(28, 'admin', 'Logged In', '2022-09-22 11:08:25 '),
(29, 'admin', 'Logged Out', '2022-09-22 11:10:28 '),
(30, 'user', 'Logged In', '2022-09-22 11:10:32 '),
(31, 'user', 'Purchase Plan', '2022-09-22 01:34:07 '),
(32, 'user', 'Logged Out', '2022-09-22 01:45:32 '),
(33, 'staff', 'Logged In', '2022-09-23 03:51:58 '),
(34, 'user', 'Logged In', '2022-09-23 04:16:38 '),
(35, 'user', 'Logged Out', '2022-09-23 04:16:48 '),
(36, 'staff', 'Approved Customer Purchase Plan', '2022-09-23 04:16:55 '),
(37, 'user', 'Logged In', '2022-09-23 04:17:07 '),
(38, 'staff', 'Logged Out', '2022-09-23 04:17:49 '),
(39, 'staff', 'Logged In', '2022-09-23 04:18:05 '),
(40, 'admin', 'Logged In', '2022-09-23 04:29:11 '),
(41, 'admin', 'Logged Out', '2022-09-23 04:29:17 '),
(42, 'staff', 'Logged In', '2022-09-23 04:29:21 '),
(43, 'staff', 'Logged In', '2022-09-23 04:36:04 '),
(44, 'user', 'Logged In', '2022-09-23 04:36:50 '),
(45, 'admin', 'Logged In', '2022-09-24 02:39:17 '),
(46, 'admin', 'Logged In', '2022-09-26 03:32:52 '),
(47, 'admin', 'Logged Out', '2022-09-26 03:33:18 '),
(48, 'admin', 'Logged In', '2022-09-26 03:34:10 '),
(49, 'admin', 'Logged Out', '2022-09-26 03:56:58 '),
(50, 'user', 'Logged In', '2022-09-26 03:57:02 '),
(51, 'user', 'Logged Out', '2022-09-26 03:59:07 '),
(52, 'staff', 'Logged In', '2022-09-26 03:59:12 '),
(53, 'staff', 'Insert New Membership Packages', '2022-09-26 10:04:57 '),
(54, 'staff', 'Logged Out', '2022-09-26 04:06:04 '),
(55, 'user', 'Logged In', '2022-09-26 04:06:08 '),
(56, 'user', 'Reserved Plan', '2022-09-26 04:44:37 '),
(57, 'user', 'Make Payment', '2022-09-26 04:45:08 '),
(58, 'user', 'Reserved Plan Set to Purchase Plan', '2022-09-26 05:02:30 '),
(59, 'admin', 'Logged In', '2022-10-02 07:26:49 '),
(60, 'admin', 'Logged In', '2022-10-06 05:49:58 '),
(61, 'admin', 'Logged In', '2022-10-11 02:31:16 '),
(62, 'admin', 'Logged In', '2022-10-13 03:25:14 '),
(63, 'admin', 'Logged Out', '2022-10-13 03:25:20 '),
(64, 'admin', 'Logged In', '2022-10-13 05:57:12 '),
(65, 'admin', 'Logged In', '2022-10-14 09:01:00 '),
(66, 'admin', 'Logged Out', '2022-10-14 09:01:33 '),
(67, 'staff', 'Logged In', '2022-10-14 09:01:38 '),
(68, 'staff', 'Logged Out', '2022-10-14 09:01:55 '),
(69, 'admin', 'Logged In', '2022-10-14 09:01:57 '),
(70, 'admin', 'Logged Out', '2022-10-14 09:02:08 '),
(71, 'staff', 'Logged In', '2022-10-14 09:02:11 '),
(72, 'staff', 'Logged Out', '2022-10-14 09:04:53 '),
(73, 'user', 'Logged In', '2022-10-14 09:05:41 '),
(74, 'user', 'Logged Out', '2022-10-14 09:07:31 '),
(75, 'admin', 'Logged In', '2022-10-14 09:08:00 '),
(76, 'admin', 'Logged Out', '2022-10-14 09:08:05 '),
(77, 'staff', 'Logged In', '2022-10-14 09:08:07 '),
(78, 'staff', 'Logged Out', '2022-10-14 09:14:05 '),
(79, 'admin', 'Logged In', '2022-10-17 07:55:24 '),
(80, 'admin', 'Logged Out', '2022-10-17 07:55:41 '),
(81, 'user', 'Logged In', '2022-10-17 07:55:49 '),
(82, 'user', 'Logged Out', '2022-10-17 08:01:43 '),
(83, 'user', 'Logged In', '2022-10-17 08:03:39 '),
(84, 'user', 'Logged Out', '2022-10-17 08:03:52 '),
(85, 'user', 'Logged In', '2022-10-17 08:09:56 '),
(86, 'user', 'Logged In', '2022-10-17 08:18:07 '),
(87, 'user', 'Logged In', '2022-10-17 08:28:25 '),
(88, 'user', 'Logged In', '2022-10-17 12:09:28 '),
(89, 'user', 'Logged Out', '2022-10-17 12:11:03 '),
(90, 'user', 'Logged In', '2022-10-17 12:11:39 '),
(91, 'user', 'Logged Out', '2022-10-17 12:11:41 '),
(92, 'user', 'Logged In', '2022-10-18 12:23:18 '),
(93, 'user', 'Logged In', '2022-10-21 12:23:17 '),
(94, 'user', 'Make Payment', '2022-10-21 12:23:42 '),
(95, 'user', 'Logged Out', '2022-10-21 12:24:16 '),
(96, 'admin', 'Logged In', '2022-10-21 12:24:22 '),
(97, 'admin', 'Logged Out', '2022-10-21 12:25:05 '),
(98, 'staff', 'Logged In', '2022-10-21 12:25:11 '),
(99, 'staff', 'Approved Customer Purchase Plan', '2022-10-21 12:25:46 '),
(100, 'staff', 'Logged Out', '2022-10-21 12:25:49 '),
(101, 'user', 'Logged In', '2022-10-21 12:25:57 '),
(102, 'user', 'Logged Out', '2022-10-21 12:26:45 '),
(103, 'admin', 'Logged In', '2022-10-22 12:44:46 '),
(104, 'user', 'Logged In', '2022-10-22 01:07:39 '),
(105, 'user', 'Logged Out', '2022-10-22 01:08:18 '),
(106, 'admin', 'Logged In', '2022-10-22 01:39:22 '),
(107, 'admin', 'Logged Out', '2022-10-22 01:39:47 '),
(108, 'user', 'Logged In', '2022-10-22 01:40:14 '),
(109, 'user', 'Logged Out', '2022-10-22 01:40:21 '),
(110, 'staff', 'Logged In', '2022-10-22 01:40:41 '),
(111, 'user', 'Logged In', '2022-10-23 04:20:50 '),
(112, 'user', 'Logged In', '2022-10-23 08:41:04 '),
(113, 'admin', 'Logged In', '2022-10-23 08:53:41 '),
(114, 'user', 'Logged In', '2022-10-29 06:59:28 '),
(115, 'user', 'Logged Out', '2022-10-29 07:14:45 '),
(116, 'admin', 'Logged In', '2022-10-29 07:14:56 '),
(117, 'admin', 'Logged Out', '2022-10-29 07:15:16 '),
(118, 'user', 'Logged In', '2022-10-29 07:15:50 '),
(119, 'user', 'Logged Out', '2022-10-29 07:18:57 '),
(120, 'user', 'Logged In', '2022-10-29 07:19:08 '),
(121, 'user', 'Logged Out', '2022-10-29 08:36:01 '),
(122, 'user', 'Logged In', '2022-10-29 08:36:10 '),
(123, 'user', 'Logged Out', '2022-10-29 08:36:59 '),
(124, 'user', 'Logged In', '2022-10-29 08:37:08 '),
(125, 'user', 'Logged Out', '2022-10-29 08:38:32 '),
(126, 'user', 'Logged In', '2022-10-29 08:38:38 '),
(127, 'user', 'Logged Out', '2022-10-29 08:38:52 '),
(128, 'user', 'Logged In', '2022-10-29 08:38:56 '),
(129, 'user', 'Logged Out', '2022-10-29 08:42:24 '),
(130, 'user', 'Logged In', '2022-10-29 08:42:30 '),
(131, 'user', 'Logged Out', '2022-10-29 08:48:37 '),
(132, 'user', 'Logged In', '2022-10-29 08:48:42 '),
(133, 'user', 'Make Payment', '2022-10-29 08:55:58 '),
(134, 'user', 'Logged In', '2022-10-30 07:18:54 '),
(135, 'user', 'Logged In', '2022-10-30 07:20:04 '),
(136, 'user', 'Purchase Plan', '2022-10-30 07:35:19 '),
(137, 'user', 'Reserved Plan', '2022-10-30 07:37:32 '),
(138, 'user', 'Logged In', '2022-10-30 07:38:51 '),
(139, 'user', 'Purchase Plan', '2022-10-30 07:38:58 '),
(140, 'user', 'Purchase Plan', '2022-10-30 07:39:24 '),
(141, 'user', 'Purchase Plan', '2022-10-30 07:39:53 '),
(142, 'user', 'Purchase Plan', '2022-10-30 07:41:59 '),
(143, 'user', 'Logged In', '2022-10-30 08:37:54 '),
(144, 'user', 'Logged In', '2022-10-30 09:10:45 '),
(145, 'user', 'Logged Out', '2022-10-30 09:10:48 '),
(146, 'user', 'Logged In', '2022-10-30 09:10:59 '),
(147, 'user', 'Purchase Plan', '2022-10-30 09:33:16 '),
(148, 'user', 'Purchase Plan', '2022-10-30 09:33:39 '),
(149, 'user', 'Purchase Plan', '2022-10-30 09:35:41 '),
(150, 'user', 'Logged In', '2022-10-30 09:50:47 '),
(151, 'user', 'Reserved Plan', '2022-10-30 10:00:00 '),
(152, 'Doctor', 'Make Payment', '2022-10-30 10:32:03 '),
(153, 'Doctor', 'Make Payment', '2022-10-30 10:33:26 '),
(154, 'Doctor', 'Reserved Plan Set to Purchase Plan', '2022-10-30 10:47:08 '),
(155, 'Doctor', 'Purchase Plan', '2022-10-31 02:18:05 '),
(156, 'Doctor', 'Reserved Plan', '2022-10-31 02:20:30 '),
(157, 'Doctor', 'Logged Out', '2022-10-31 07:16:52 '),
(158, 'user', 'Logged In', '2022-10-31 07:17:46 '),
(159, 'user', 'Logged Out', '2022-10-31 07:20:23 '),
(160, 'admin', 'Logged In', '2022-10-31 07:20:34 '),
(161, 'admin', 'Logged Out', '2022-10-31 07:21:59 '),
(162, 'staff', 'Logged In', '2022-10-31 07:22:05 '),
(163, 'staff', 'Logged Out', '2022-10-31 07:22:26 '),
(164, 'admin', 'Logged In', '2022-10-31 07:22:32 '),
(165, 'admin', 'Logged Out', '2022-10-31 07:23:30 '),
(166, 'user', 'Logged In', '2022-10-31 07:23:34 '),
(167, 'user', 'Purchase Plan', '2022-10-31 07:24:28 '),
(168, 'user', 'Make Payment', '2022-10-31 07:25:06 '),
(169, 'user', 'Logged Out', '2022-10-31 07:25:17 '),
(170, 'staff', 'Logged In', '2022-10-31 07:25:27 '),
(171, 'staff', 'Approved Customer Purchase Plan', '2022-10-31 07:26:28 '),
(172, 'staff', 'Logged Out', '2022-10-31 07:26:35 '),
(173, 'user', 'Logged In', '2022-10-31 07:26:39 '),
(174, 'staff', 'Logged In', '2022-10-31 07:27:51 '),
(175, 'staff', 'Logged In', '2022-10-31 07:28:36 '),
(176, 'user', 'Logged Out', '2022-10-31 07:31:15 '),
(177, 'user', 'Logged In', '2022-10-31 07:31:23 '),
(178, 'user', 'Logged Out', '2022-10-31 07:31:45 '),
(179, 'admin', 'Logged In', '2022-10-31 07:31:50 '),
(180, 'admin', 'Logged Out', '2022-10-31 07:32:03 '),
(181, 'staff', 'Logged In', '2022-10-31 07:32:14 '),
(182, 'staff', 'Insert New Membership Packages', '2022-10-31 02:33:01 '),
(183, 'staff', 'Logged Out', '2022-10-31 07:33:06 '),
(184, 'user', 'Logged In', '2022-10-31 07:33:46 '),
(185, 'user', 'Reserved Plan', '2022-10-31 07:34:10 '),
(186, 'user', 'Logged Out', '2022-10-31 07:38:50 '),
(187, 'admin', 'Logged In', '2022-10-31 07:38:56 '),
(188, 'admin', 'Logged Out', '2022-10-31 07:45:01 '),
(189, 'user', 'Logged In', '2022-10-31 07:45:08 '),
(190, 'user', 'Logged Out', '2022-10-31 07:46:14 '),
(191, 'admin', 'Logged In', '2022-10-31 07:46:20 '),
(192, 'admin', 'Logged Out', '2022-10-31 07:49:57 '),
(193, 'user', 'Logged In', '2022-10-31 07:50:04 '),
(194, 'user', 'Logged Out', '2022-10-31 07:50:25 '),
(195, 'user', 'Logged In', '2022-10-31 07:53:07 '),
(196, 'user', 'Logged Out', '2022-10-31 07:53:16 '),
(197, 'admin', 'Logged In', '2022-10-31 08:03:07 '),
(198, 'admin', 'Logged Out', '2022-10-31 08:09:47 '),
(199, 'user', 'Logged In', '2022-10-31 08:09:57 '),
(200, 'staff', 'Logged In', '2022-10-31 08:10:21 '),
(201, 'user', 'Make Payment', '2022-10-31 08:34:06 '),
(202, 'user', 'Reserved Plan Set to Purchase Plan', '2022-10-31 08:34:10 '),
(203, 'user', 'Purchase Plan', '2022-10-31 08:34:36 '),
(204, 'user', 'Make Payment', '2022-10-31 08:34:42 '),
(205, 'user', 'Logged Out', '2022-10-31 08:34:47 '),
(206, 'admin', 'Logged In', '2022-10-31 08:34:52 '),
(207, 'admin', 'Logged Out', '2022-10-31 08:34:57 '),
(208, 'staff', 'Logged In', '2022-10-31 08:35:08 '),
(209, 'staff', 'Approved Customer Purchase Plan', '2022-10-31 08:35:15 '),
(210, 'staff', 'Logged Out', '2022-10-31 08:35:23 '),
(211, 'user', 'Logged In', '2022-10-31 08:35:28 '),
(212, 'user', 'Logged Out', '2022-10-31 08:42:24 '),
(213, 'staff', 'Logged In', '2022-10-31 08:42:35 '),
(214, 'admin', 'Logged In', '2022-10-31 12:01:27 '),
(215, 'admin', 'Logged Out', '2022-10-31 12:01:28 '),
(216, 'admin', 'Logged In', '2022-10-31 12:02:31 '),
(217, 'admin', 'Logged Out', '2022-10-31 12:02:33 '),
(218, 'admin', 'Logged In', '2022-10-31 12:02:40 '),
(219, 'admin', 'Logged Out', '2022-10-31 12:02:45 '),
(220, 'admin', 'Logged In', '2022-10-31 12:03:03 '),
(221, 'admin', 'Logged Out', '2022-10-31 12:03:06 '),
(222, 'staff', 'Logged In', '2022-10-31 12:11:18 '),
(223, 'user', 'Logged In', '2022-10-31 12:11:38 '),
(224, 'staff', 'Logged Out', '2022-10-31 12:13:33 '),
(225, 'user', 'Logged Out', '2022-10-31 12:13:44 '),
(226, 'admin', 'Logged In', '2022-11-17 02:37:58 '),
(227, 'admin', 'Logged Out', '2022-11-17 02:38:31 '),
(228, 'admin', 'Logged In', '2022-11-17 02:38:45 '),
(229, 'admin', 'Logged Out', '2022-11-17 02:38:47 '),
(230, 'staff', 'Logged In', '2022-11-17 02:39:14 '),
(231, 'staff', 'Logged Out', '2022-11-17 03:01:04 '),
(232, 'user', 'Logged In', '2022-11-17 03:01:21 '),
(233, 'user', 'Logged Out', '2022-11-17 03:03:21 '),
(234, 'staff', 'Logged In', '2022-11-18 06:43:15 '),
(235, 'staff', 'Logged Out', '2022-11-18 06:43:45 '),
(236, 'user', 'Logged In', '2022-11-18 06:43:54 '),
(237, 'user', 'Logged Out', '2022-11-18 06:44:17 '),
(238, 'staff', 'Logged In', '2022-11-18 06:44:22 '),
(239, 'staff', 'Logged Out', '2022-11-18 06:46:30 '),
(240, 'user', 'Logged In', '2022-11-18 06:46:39 '),
(241, 'staff', 'Logged In', '2022-11-18 06:54:14 '),
(242, 'staff', 'Logged Out', '2022-11-18 06:55:11 '),
(243, '3', 'Logged Out', '2022-11-20 07:25:15 '),
(244, 'admin', 'Logged In', '2022-11-20 07:25:27 '),
(245, 'admin', 'Logged Out', '2022-11-20 07:25:32 '),
(246, 'staff', 'Logged In', '2022-11-20 07:25:34 '),
(247, 'user', 'Logged In', '2022-11-22 11:45:18 '),
(248, 'user', 'Logged Out', '2022-11-22 11:48:29 '),
(249, 'admin', 'Logged In', '2022-11-22 12:03:35 '),
(250, 'admin', 'Add New Staff', '2022-11-22 12:04:48 '),
(251, 'admin', 'Delete Instructor', '2022-11-22 12:06:24 '),
(252, 'admin', 'Insert New Membership Packages', '2022-11-22 07:07:43 '),
(253, 'admin', 'Edit Expenses', '2022-11-22 07:07:48 '),
(254, 'admin', 'Delete Expenses', '2022-11-22 12:07:53 '),
(255, 'admin', 'Logged Out', '2022-11-22 12:09:28 '),
(256, 'user', 'Logged In', '2022-11-22 12:15:40 '),
(257, 'user', 'Logged Out', '2022-11-22 12:15:45 '),
(258, 'user', 'Logged In', '2022-11-22 12:18:07 '),
(259, 'user', 'Logged Out', '2022-11-22 12:18:09 '),
(260, 'user', 'Logged In', '2022-11-22 12:24:31 '),
(261, 'user', 'Logged Out', '2022-11-22 12:24:36 '),
(262, 'user', 'Logged In', '2022-11-22 12:24:50 '),
(263, 'user', 'Logged In', '2022-11-22 12:26:42 '),
(264, 'user', 'Logged Out', '2022-11-22 12:27:01 '),
(265, 'user', 'Logged In', '2022-11-22 12:28:47 '),
(266, 'user', 'Logged Out', '2022-11-22 12:29:05 '),
(267, 'user', 'Logged In', '2022-11-22 12:29:14 '),
(268, 'user', 'Purchase Plan', '2022-11-22 12:29:58 '),
(269, 'user', 'Logged Out', '2022-11-22 12:31:19 '),
(270, 'admin', 'Logged In', '2022-11-22 12:31:26 '),
(271, 'admin', 'Logged Out', '2022-11-22 12:39:51 '),
(272, 'user', 'Logged In', '2022-11-22 12:40:04 '),
(273, 'user', 'Logged Out', '2022-11-22 12:41:27 '),
(274, 'admin', 'Logged In', '2022-11-22 12:41:32 '),
(275, 'admin', 'Logged Out', '2022-11-22 12:41:50 '),
(276, 'user', 'Logged In', '2022-11-22 12:41:57 '),
(277, 'user', 'Logged Out', '2022-11-22 12:47:11 '),
(278, 'admin', 'Logged In', '2022-11-22 12:47:20 '),
(279, 'admin', 'Logged Out', '2022-11-22 12:49:22 '),
(280, 'admin', 'Logged In', '2022-11-22 12:49:46 '),
(281, 'admin', 'Logged Out', '2022-11-22 12:49:55 '),
(282, '1', 'Add New Staff', '2022-11-22 12:52:44 '),
(283, 'staff', 'Logged In', '2022-11-22 12:53:00 '),
(284, 'staff', 'Logged Out', '2022-11-22 12:53:02 '),
(285, 'user', 'Logged In', '2022-11-22 12:53:54 '),
(286, 'user', 'Logged In', '2022-11-22 12:53:57 '),
(287, 'admin', 'Logged In', '2022-11-22 12:55:10 '),
(288, 'admin', 'Logged Out', '2022-11-22 12:56:08 '),
(289, 'admin', 'Logged In', '2022-11-22 12:56:17 '),
(290, 'admin', 'Logged Out', '2022-11-22 12:59:22 '),
(291, 'staff', 'Logged In', '2022-11-22 12:59:24 '),
(292, 'staff', 'Update Profile', '2022-11-22 12:59:35 '),
(293, 'staff', 'Logged Out', '2022-11-22 01:00:00 '),
(294, 'admin', 'Logged In', '2022-11-22 01:00:03 '),
(295, 'admin', 'Logged Out', '2022-11-22 01:01:32 '),
(296, 'user', 'Logged In', '2022-11-22 01:01:40 '),
(297, 'user', 'Make Payment', '2022-11-22 01:01:57 '),
(298, 'user', 'Logged Out', '2022-11-22 01:02:04 '),
(299, 'staff', 'Logged In', '2022-11-22 01:02:18 '),
(300, 'staff', 'Approved Customer Purchase Plan', '2022-11-22 01:02:35 '),
(301, 'staff', 'Logged Out', '2022-11-22 01:02:40 '),
(302, 'user', 'Logged In', '2022-11-22 01:02:46 '),
(303, 'user', 'Logged Out', '2022-11-22 01:03:32 '),
(304, 'admin', 'Logged In', '2022-11-22 01:03:36 '),
(305, 'admin', 'Approved Customer Purchase Plan', '2022-11-22 01:04:10 '),
(306, 'admin', 'Logged Out', '2022-11-22 01:05:27 '),
(307, 'user', 'Logged In', '2022-11-22 01:05:33 '),
(308, 'user', 'Reserved Plan', '2022-11-22 01:08:14 '),
(309, 'user', 'Make Payment', '2022-11-22 01:08:25 '),
(310, 'admin', 'Logged In', '2022-11-22 01:10:13 '),
(311, 'admin', 'Logged Out', '2022-11-22 01:10:17 '),
(312, 'user', 'Logged In', '2022-11-22 01:10:23 '),
(313, 'user', 'Reserved Plan Set to Purchase Plan', '2022-11-22 01:10:53 '),
(314, 'user', 'Make Payment', '2022-11-22 01:11:12 '),
(315, 'user', 'Logged Out', '2022-11-22 01:11:34 '),
(316, 'admin', 'Logged In', '2022-11-22 01:11:39 '),
(317, 'admin', 'Approved Customer Purchase Plan', '2022-11-22 01:11:50 '),
(318, 'admin', 'Logged Out', '2022-11-22 01:11:53 '),
(319, 'user', 'Logged In', '2022-11-22 01:11:58 '),
(320, 'user', 'Logged Out', '2022-11-22 01:13:25 '),
(321, 'staff', 'Logged In', '2022-11-22 01:21:50 '),
(322, 'staff', 'Logged Out', '2022-11-22 01:21:53 '),
(323, 'admin', 'Logged In', '2022-11-22 01:22:21 '),
(324, 'admin', 'Logged In', '2022-11-25 07:13:33 '),
(325, 'admin', 'Logged Out', '2022-11-25 07:16:46 '),
(326, 'user', 'Logged In', '2022-11-25 07:16:53 '),
(327, 'user', 'Logged Out', '2022-11-25 07:17:17 '),
(328, 'admin', 'Logged In', '2022-11-25 07:17:23 '),
(329, 'admin', 'Logged Out', '2022-11-25 07:51:29 '),
(330, 'admin', 'Logged In', '2022-11-25 07:54:49 '),
(331, 'admin', 'Logged Out', '2022-11-25 08:22:29 '),
(332, 'user', 'Logged In', '2022-11-25 08:46:38 '),
(333, 'user', 'Logged Out', '2022-11-25 09:03:06 '),
(334, 'admin', 'Logged In', '2022-11-25 09:03:12 '),
(335, 'admin', 'Logged In', '2022-11-25 09:14:46 '),
(336, 'user', 'Logged Out', '2022-11-25 09:15:25 '),
(337, 'admin', 'Logged In', '2022-11-25 09:15:27 '),
(338, 'admin', 'Logged Out', '2022-11-25 09:17:34 '),
(339, 'admin', 'Logged In', '2022-11-25 09:17:36 '),
(340, 'admin', 'Logged In', '2022-11-25 09:18:31 '),
(341, 'user', 'Logged Out', '2022-11-25 09:18:42 '),
(342, 'admin', 'Logged In', '2022-11-25 09:18:48 '),
(343, 'admin', 'Logged In', '2022-11-25 09:20:03 '),
(344, 'user', 'Logged Out', '2022-11-25 09:22:15 '),
(345, 'admin', 'Logged In', '2022-11-25 09:22:17 '),
(346, 'user', 'Logged Out', '2022-11-25 09:22:54 '),
(347, 'admin', 'Logged In', '2022-11-25 09:23:01 '),
(348, 'user', 'Logged Out', '2022-11-25 09:23:18 '),
(349, 'admin', 'Logged In', '2022-11-25 09:24:50 '),
(350, 'user', 'Logged In', '2022-11-28 01:53:29 '),
(351, 'user', 'Reserved Plan', '2022-11-28 01:55:09 '),
(352, 'user', 'Make Payment', '2022-11-28 01:55:18 '),
(353, 'user', 'Reserved Plan Set to Purchase Plan', '2022-11-28 01:55:23 '),
(354, 'user', 'Make Payment', '2022-11-28 01:55:42 '),
(355, 'user', 'Logged Out', '2022-11-28 01:56:02 '),
(356, 'admin', 'Logged In', '2022-11-28 01:56:07 '),
(357, 'admin', 'Approved Customer Purchase Plan', '2022-11-28 01:56:12 '),
(358, 'admin', 'Logged Out', '2022-11-28 01:56:15 '),
(359, 'admin', 'Logged In', '2022-11-28 01:56:18 '),
(360, 'admin', 'Logged Out', '2022-11-28 01:56:35 '),
(361, 'admin', 'Logged In', '2022-11-28 01:56:37 '),
(362, 'admin', 'Logged Out', '2022-11-28 01:56:40 '),
(363, 'admin', 'Logged In', '2022-11-28 02:01:35 '),
(364, 'admin', 'Logged Out', '2022-11-28 02:02:36 '),
(365, 'user', 'Logged In', '2022-11-28 02:02:45 '),
(366, 'user', 'Logged In', '2022-11-29 04:03:50 '),
(367, 'user', 'Logged Out', '2022-11-29 04:05:36 '),
(368, 'admin', 'Logged In', '2022-11-29 04:05:42 '),
(369, 'admin', 'Logged Out', '2022-11-29 04:07:55 '),
(370, 'user', 'Logged In', '2022-11-29 04:08:06 '),
(371, 'user', 'Reserved Plan', '2022-11-29 04:08:12 '),
(372, 'user', 'Logged Out', '2022-11-29 04:08:28 '),
(373, 'admin', 'Logged In', '2022-11-29 04:08:33 '),
(374, 'admin', 'Logged Out', '2022-11-29 04:08:43 '),
(375, 'admin', 'Logged In', '2022-11-29 04:08:57 '),
(376, 'admin', 'Logged Out', '2022-11-29 04:09:32 '),
(377, 'admin', 'Logged In', '2022-11-29 04:09:34 '),
(378, 'admin', 'Logged Out', '2022-11-29 04:09:49 '),
(379, 'user', 'Logged In', '2022-11-29 04:09:55 '),
(380, 'user', 'Logged Out', '2022-11-29 04:13:40 '),
(381, 'admin', 'Logged In', '2022-11-29 04:13:44 '),
(382, 'admin', 'Logged Out', '2022-11-29 04:14:12 '),
(383, 'user', 'Logged In', '2022-11-29 04:14:25 '),
(384, 'user', 'Logged Out', '2022-11-29 04:14:40 '),
(385, 'admin', 'Logged In', '2022-11-29 04:14:45 '),
(386, 'admin', 'Logged Out', '2022-11-29 04:16:46 '),
(387, 'user', 'Logged In', '2022-11-29 04:16:54 '),
(388, 'user', 'Logged Out', '2022-11-29 04:28:00 '),
(389, 'admin', 'Logged In', '2022-11-29 04:28:05 '),
(390, 'admin', 'Logged Out', '2022-11-29 04:38:01 '),
(391, 'user', 'Logged In', '2022-11-29 04:38:12 '),
(392, 'user', 'Logged Out', '2022-11-29 05:33:15 '),
(393, 'admin', 'Logged In', '2022-11-29 05:33:20 '),
(394, 'admin', 'Logged Out', '2022-11-29 05:51:08 '),
(395, 'user', 'Logged In', '2022-11-29 05:51:17 '),
(396, 'user', 'Logged Out', '2022-11-29 05:59:43 '),
(397, 'admin', 'Logged In', '2022-11-29 05:59:49 '),
(398, 'admin', 'Logged Out', '2022-11-29 06:07:32 '),
(399, 'user', 'Logged In', '2022-11-29 06:07:38 '),
(400, 'user', 'Logged Out', '2022-11-29 06:11:36 '),
(401, 'user', 'Logged In', '2022-11-29 06:11:39 '),
(402, 'user', 'Logged In', '2022-11-30 06:28:48 '),
(403, 'user', 'Logged Out', '2022-11-30 06:29:15 '),
(404, 'user', 'Logged In', '2022-11-30 06:29:26 '),
(405, 'user', 'Logged Out', '2022-11-30 06:29:53 '),
(406, 'admin', 'Logged In', '2022-11-30 06:30:01 '),
(407, 'admin', 'Logged Out', '2022-11-30 06:30:16 '),
(408, 'user', 'Logged In', '2022-11-30 06:30:28 '),
(409, 'user', 'Logged Out', '2022-11-30 06:32:40 '),
(410, 'admin', 'Logged In', '2022-11-30 06:32:45 '),
(411, 'admin', 'Logged Out', '2022-11-30 06:35:02 '),
(412, 'user', 'Logged In', '2022-11-30 06:35:08 '),
(413, 'user', 'Logged Out', '2022-11-30 06:35:24 '),
(414, 'admin', 'Logged In', '2022-11-30 06:35:29 '),
(415, 'admin', 'Logged Out', '2022-11-30 06:35:57 '),
(416, 'admin', 'Logged In', '2022-11-30 06:36:22 '),
(417, 'admin', 'Edit Expenses', '2022-11-30 01:36:43 '),
(418, 'admin', 'Logged Out', '2022-11-30 06:36:45 '),
(419, 'user', 'Logged In', '2022-11-30 06:36:53 '),
(420, 'user', 'Purchase Plan', '2022-11-30 06:37:06 '),
(421, 'user', 'Make Payment', '2022-11-30 06:37:20 '),
(422, 'user', 'Logged Out', '2022-11-30 06:37:32 '),
(423, 'admin', 'Logged In', '2022-11-30 06:37:38 '),
(424, 'admin', 'Approved Customer Purchase Plan', '2022-11-30 06:37:48 '),
(425, 'admin', 'Logged Out', '2022-11-30 06:37:52 '),
(426, 'user', 'Logged In', '2022-11-30 06:37:59 '),
(427, 'user', 'Logged Out', '2022-11-30 06:38:12 '),
(428, 'admin', 'Logged In', '2022-11-30 06:40:19 '),
(429, 'admin', 'Approved Customer Purchase Plan', '2022-11-30 06:41:34 '),
(430, 'admin', 'Logged Out', '2022-11-30 06:41:44 '),
(431, 'user', 'Logged In', '2022-11-30 06:41:50 '),
(432, 'user', 'Logged In', '2022-11-30 06:42:41 '),
(433, 'user', 'Logged In', '2022-11-30 06:45:19 '),
(434, 'user', 'Logged Out', '2022-11-30 06:52:51 '),
(435, 'user', 'Logged In', '2022-11-30 06:52:58 '),
(436, 'admin', 'Logged In', '2022-11-30 06:53:33 '),
(437, 'admin', 'Logged Out', '2022-11-30 06:53:45 '),
(438, 'admin', 'Logged In', '2022-11-30 06:53:51 '),
(439, 'admin', 'Logged Out', '2022-11-30 06:54:08 '),
(440, 'admin', 'Logged In', '2022-11-30 06:54:18 '),
(441, 'admin', 'Logged Out', '2022-11-30 06:54:35 '),
(442, 'staff', 'Logged In', '2022-11-30 06:54:37 '),
(443, 'user', 'Logged Out', '2022-11-30 06:57:50 '),
(444, 'staff', 'Logged In', '2022-11-30 06:58:00 '),
(445, 'staff', 'Logged Out', '2022-11-30 06:58:52 '),
(446, 'user', 'Logged In', '2022-11-30 06:58:59 '),
(447, 'user', 'Logged Out', '2022-11-30 07:03:25 '),
(448, 'admin', 'Logged In', '2022-11-30 07:03:30 '),
(449, 'admin', 'Logged Out', '2022-11-30 07:03:54 '),
(450, 'admin', 'Logged In', '2022-12-06 05:29:50 '),
(451, 'admin', 'Logged Out', '2022-12-06 05:30:31 '),
(452, 'user', 'Logged In', '2022-12-06 05:30:51 '),
(453, 'user', 'Logged In', '2022-12-07 08:21:26 '),
(454, 'user', 'Logged Out', '2022-12-07 08:21:29 '),
(455, 'user', 'Logged In', '2022-12-07 08:46:57 '),
(456, 'user', 'Logged Out', '2022-12-07 08:55:19 '),
(457, 'admin', 'Logged In', '2022-12-07 08:55:26 '),
(458, 'admin', 'Logged Out', '2022-12-07 08:56:00 '),
(459, 'user', 'Logged In', '2022-12-07 09:58:06 '),
(460, 'admin', 'Logged In', '2022-12-07 10:00:04 '),
(461, 'user', 'Logged In', '2022-12-07 10:04:54 '),
(462, 'user', 'Logged Out', '2022-12-07 10:05:46 '),
(463, 'user', 'Logged In', '2022-12-07 10:05:51 '),
(464, 'user', 'Logged In', '2022-12-07 10:05:59 '),
(465, 'user', 'Logged Out', '2022-12-07 10:06:13 '),
(466, 'admin', 'Logged In', '2022-12-07 10:06:28 '),
(467, 'user', 'Logged In', '2022-12-09 03:39:59 '),
(468, 'user', 'Logged Out', '2022-12-09 03:45:06 '),
(469, 'admin', 'Logged In', '2022-12-09 03:45:12 '),
(470, 'admin', 'Logged Out', '2022-12-09 03:52:28 '),
(471, 'user', 'Logged In', '2022-12-09 03:52:36 '),
(472, 'admin', 'Logged In', '2022-12-09 06:42:23 '),
(473, 'user', 'Logged In', '2022-12-13 09:29:23 '),
(474, 'user', 'Logged Out', '2022-12-13 09:29:30 '),
(475, 'user', 'Logged In', '2023-01-01 10:36:17 '),
(476, 'user', 'Logged Out', '2023-01-01 10:36:22 '),
(477, 'admin', 'Logged In', '2023-01-01 10:36:29 '),
(478, 'admin', 'Logged In', '2023-01-01 11:03:11 '),
(479, 'admin', 'Logged Out', '2023-01-01 11:03:13 '),
(480, 'admin', 'Logged In', '2023-01-01 11:03:16 '),
(481, 'admin', 'Logged In', '2023-02-02 03:13:43 '),
(482, 'admin', 'Logged Out', '2023-02-02 03:15:03 '),
(483, 'user', 'Logged In', '2023-02-02 03:15:25 '),
(484, 'user', 'Purchase Plan', '2023-02-02 03:16:16 '),
(485, 'user', 'Make Payment', '2023-02-02 03:17:00 '),
(486, 'user', 'Logged Out', '2023-02-02 03:17:07 '),
(487, 'admin', 'Logged In', '2023-02-02 03:17:13 '),
(488, 'admin', 'Approved Customer Purchase Plan', '2023-02-02 03:17:28 '),
(489, 'admin', 'Logged Out', '2023-02-02 03:17:31 '),
(490, 'user', 'Logged In', '2023-02-02 03:17:40 '),
(491, 'user', 'Logged Out', '2023-02-02 03:17:54 '),
(492, 'admin', 'Logged In', '2023-02-02 03:18:01 '),
(493, 'admin', 'Logged Out', '2023-02-02 03:18:42 '),
(494, 'user', 'Logged In', '2023-02-02 03:19:02 '),
(495, 'user', 'Logged Out', '2023-02-02 03:19:42 '),
(496, 'admin', 'Logged In', '2023-02-02 03:19:48 '),
(497, 'admin', 'Logged Out', '2023-02-02 03:22:16 '),
(498, 'admin', 'Logged In', '2023-02-02 03:24:56 '),
(499, 'admin', 'Logged Out', '2023-02-02 03:25:36 '),
(500, 'staff', 'Logged In', '2023-02-02 03:25:38 '),
(501, 'staff', 'Logged Out', '2023-02-02 03:26:09 '),
(502, 'user', 'Logged In', '2023-02-03 11:01:16 '),
(503, 'user', 'Logged In', '2023-02-03 12:15:40 '),
(504, 'user', 'Logged Out', '2023-02-03 12:16:07 '),
(505, 'admin', 'Logged In', '2023-02-03 12:16:14 '),
(506, 'admin', 'Edit Expenses', '2023-02-03 07:17:16 '),
(507, 'admin', 'Delete Expenses', '2023-02-03 12:17:25 '),
(508, 'admin', 'Insert New Membership Packages', '2023-02-03 07:17:42 '),
(509, 'admin', 'Logged Out', '2023-02-03 12:18:34 '),
(510, 'user', 'Logged In', '2023-02-03 12:18:41 '),
(511, 'user', 'Purchase Plan', '2023-02-03 12:19:02 '),
(512, 'user', 'Make Payment', '2023-02-03 12:19:25 '),
(513, 'user', 'Logged Out', '2023-02-03 12:19:36 '),
(514, 'admin', 'Logged In', '2023-02-03 12:19:43 '),
(515, 'admin', 'Approved Customer Purchase Plan', '2023-02-03 12:19:58 '),
(516, 'admin', 'Logged Out', '2023-02-03 12:20:02 '),
(517, 'user', 'Logged In', '2023-02-03 12:20:09 '),
(518, 'user', 'Logged Out', '2023-02-03 12:21:29 '),
(519, 'admin', 'Logged In', '2023-02-03 12:21:38 '),
(520, 'admin', 'Logged Out', '2023-02-03 12:21:47 '),
(521, 'staff', 'Logged In', '2023-02-03 12:21:52 '),
(522, 'staff', 'Logged Out', '2023-02-03 12:23:39 '),
(523, 'user', 'Logged In', '2023-02-03 12:25:01 '),
(524, 'user', 'Logged Out', '2023-02-03 12:25:10 '),
(525, 'admin', 'Logged In', '2023-02-03 12:25:57 '),
(526, 'admin', 'Logged Out', '2023-02-03 12:26:10 '),
(527, 'user', 'Logged In', '2023-02-03 12:26:20 '),
(528, 'user', 'Reserved Plan', '2023-02-03 12:27:08 '),
(529, 'user', 'Reserved Plan Set to Purchase Plan', '2023-02-03 12:28:01 '),
(530, 'user', 'Make Payment', '2023-02-03 12:28:08 '),
(531, 'user', 'Reserved Plan', '2023-02-03 12:28:15 '),
(532, 'user', 'Logged Out', '2023-02-03 12:29:49 '),
(533, 'staff', 'Logged In', '2023-02-03 12:29:55 '),
(534, 'staff', 'Logged Out', '2023-02-03 12:30:14 '),
(535, 'user', 'Logged In', '2023-02-03 12:30:28 '),
(536, 'user', 'Logged Out', '2023-02-03 12:30:48 '),
(537, 'admin', 'Logged In', '2023-02-03 12:30:56 '),
(538, 'admin', 'Logged Out', '2023-02-03 12:34:50 '),
(539, 'staff', 'Logged In', '2023-02-03 12:34:51 '),
(540, 'user', 'Logged In', '2023-02-16 04:09:57 '),
(541, 'admin', 'Logged In', '2023-02-16 04:13:09 '),
(542, 'admin', 'Logged Out', '2023-02-16 04:21:50 '),
(543, '1', 'Add New Staff', '2023-02-16 04:22:47 '),
(544, 'admin', 'Logged In', '2023-02-16 04:28:01 '),
(545, 'admin', 'Update Profile', '2023-02-16 04:31:55 '),
(546, 'admin', 'Logged Out', '2023-02-16 04:32:08 '),
(547, 'admin', 'Logged In', '2023-02-16 08:10:42 '),
(548, 'admin', 'Logged Out', '2023-02-16 08:11:23 '),
(549, 'user', 'Logged In', '2023-02-16 08:18:50 '),
(550, 'user', 'Reserved Plan', '2023-02-16 08:19:00 '),
(551, 'user', 'Logged Out', '2023-02-16 08:19:56 '),
(552, 'user', 'Logged In', '2023-02-16 08:23:25 '),
(553, 'user', 'Logged Out', '2023-02-16 08:24:40 '),
(554, 'staff', 'Logged In', '2023-02-16 08:24:53 '),
(555, 'staff', 'Edit Expenses', '2023-02-17 03:25:27 '),
(556, 'staff', 'Update Profile', '2023-02-16 08:45:25 '),
(557, 'staff', 'Logged Out', '2023-02-17 03:35:27 '),
(558, 'user', 'Logged In', '2023-02-17 03:51:04 '),
(559, 'user', 'Logged Out', '2023-02-17 03:51:19 '),
(560, 'user', 'Logged In', '2023-02-17 03:56:06 '),
(561, 'user', 'Reserved Plan', '2023-02-17 03:56:13 '),
(562, 'user', 'Logged Out', '2023-02-17 03:56:38 '),
(563, 'admin', 'Logged In', '2023-02-17 04:04:05 '),
(564, 'admin', 'Update Profile', '2023-02-17 04:05:45 '),
(565, 'admin', 'Logged Out', '2023-02-17 04:06:22 '),
(566, 'user', 'Logged In', '2023-02-17 06:31:19 '),
(567, 'user', 'Logged In', '2023-02-17 06:31:21 '),
(568, 'user', 'Logged Out', '2023-02-17 06:33:13 '),
(569, 'admin', 'Logged In', '2023-02-17 06:33:25 '),
(570, 'user', 'Logged In', '2023-02-17 06:34:12 '),
(571, 'user', 'Logged Out', '2023-02-17 06:34:24 '),
(572, 'user', 'Logged In', '2023-02-17 06:34:29 '),
(573, 'user', 'Logged Out', '2023-02-17 06:35:05 '),
(574, 'admin', 'Logged In', '2023-02-17 06:35:13 '),
(575, 'admin', 'Logged Out', '2023-02-17 06:36:25 '),
(576, 'user', 'Logged In', '2023-02-17 06:36:35 '),
(577, 'user', 'Update Profile', '2023-02-17 06:38:01 '),
(578, 'user', 'Logged Out', '2023-02-17 06:38:06 '),
(579, 'admin', 'Logged In', '2023-02-17 06:38:11 '),
(580, 'admin', 'Edit Expenses', '2023-02-17 06:38:54 '),
(581, 'admin', 'Edit Expenses', '2023-02-17 06:39:07 '),
(582, 'admin', 'Logged Out', '2023-02-17 06:40:44 '),
(583, 'user', 'Logged In', '2023-02-17 06:40:55 '),
(584, 'user', 'Logged In', '2023-02-17 06:41:02 '),
(585, 'user', 'Logged In', '2023-02-17 06:41:15 '),
(586, 'user', 'Logged In', '2023-02-17 06:41:23 '),
(587, 'user', 'Logged In', '2023-02-17 06:43:20 '),
(588, 'user', 'Logged In', '2023-02-17 06:49:13 '),
(589, 'user', 'Logged Out', '2023-02-17 06:49:50 '),
(590, 'user', 'Logged In', '2023-02-17 06:51:18 '),
(591, 'user', 'Logged Out', '2023-02-17 06:52:51 '),
(592, 'user', 'Logged In', '2023-02-17 06:52:57 '),
(593, 'user', 'Logged In', '2023-02-17 07:00:41 '),
(594, 'user', 'Logged Out', '2023-02-17 07:02:35 '),
(595, 'user', 'Logged In', '2023-02-17 07:02:47 '),
(596, 'user', 'Purchase Plan', '2023-02-17 07:02:54 '),
(597, 'user', 'Make Payment', '2023-02-17 07:03:47 '),
(598, 'user', 'Logged Out', '2023-02-17 07:04:20 '),
(599, 'admin', 'Logged In', '2023-02-17 07:04:30 '),
(600, 'admin', 'Approved Customer Purchase Plan', '2023-02-17 07:05:21 '),
(601, 'admin', 'Approved Customer Purchase Plan', '2023-02-17 07:05:28 '),
(602, 'admin', 'Logged Out', '2023-02-17 07:05:33 '),
(603, 'user', 'Logged In', '2023-02-17 07:05:55 '),
(604, 'user', 'Make Payment', '2023-02-17 07:06:34 '),
(605, 'user', 'Logged Out', '2023-02-17 07:06:40 '),
(606, 'admin', 'Logged In', '2023-02-17 07:06:53 '),
(607, 'admin', 'Logged Out', '2023-02-17 07:15:02 '),
(608, 'user', 'Logged In', '2023-02-17 07:15:27 '),
(609, 'user', 'Logged Out', '2023-02-17 07:19:36 '),
(610, '1', 'Add New Staff', '2023-02-17 07:21:10 '),
(611, 'admin', 'Logged In', '2023-02-17 07:21:20 '),
(612, 'admin', 'Logged Out', '2023-02-17 07:21:32 '),
(613, 'staff', 'Logged In', '2023-02-17 07:21:43 '),
(614, 'admin', 'Logged In', '2023-02-17 07:45:04 '),
(615, 'admin', 'Logged Out', '2023-02-17 07:45:10 '),
(616, 'user', 'Logged In', '2023-02-17 07:45:55 '),
(617, 'user', 'Logged Out', '2023-02-17 07:46:26 '),
(618, 'user', 'Logged In', '2023-02-17 07:46:58 '),
(619, 'staff', 'Logged Out', '2023-02-17 07:51:20 '),
(620, 'user', 'Logged In', '2023-02-17 07:52:33 '),
(621, 'user', 'Logged Out', '2023-02-17 07:54:48 '),
(622, 'user', 'Logged In', '2023-02-17 07:54:59 '),
(623, 'user', 'Logged Out', '2023-02-17 07:56:35 '),
(624, 'user', 'Logged In', '2023-02-17 07:56:40 '),
(625, 'user', 'Logged Out', '2023-02-17 09:53:31 '),
(626, 'user', 'Logged In', '2023-02-17 09:54:57 '),
(627, 'user', 'Logged In', '2023-02-17 09:56:24 '),
(628, 'user', 'Logged In', '2023-02-17 09:58:20 '),
(629, 'user', 'Logged In', '2023-02-19 04:29:33 '),
(630, 'user', 'Make Payment', '2023-02-19 04:32:45 '),
(631, 'user', 'Logged Out', '2023-02-19 04:33:21 '),
(632, 'user', 'Logged In', '2023-02-19 04:33:26 '),
(633, 'user', 'Reserved Plan', '2023-02-19 04:33:42 '),
(634, 'user', 'Reserved Plan Set to Purchase Plan', '2023-02-19 04:33:51 '),
(635, 'user', 'Logged Out', '2023-02-19 04:34:23 '),
(636, 'user', 'Logged In', '2023-02-19 04:34:27 '),
(637, 'admin', 'Logged In', '2023-02-19 04:41:40 '),
(638, 'admin', 'Approved Customer Purchase Plan', '2023-02-19 04:45:48 '),
(639, 'admin', 'Approved Customer Purchase Plan', '2023-02-19 04:45:52 '),
(640, 'admin', 'Logged Out', '2023-02-19 04:56:50 '),
(641, 'staff', 'Logged In', '2023-02-19 04:56:57 '),
(642, 'user', 'Logged In', '2023-02-25 12:55:55 '),
(643, 'user', 'Logged Out', '2023-02-25 01:55:54 '),
(644, 'user', 'Logged In', '2023-02-25 01:56:34 '),
(645, 'user', 'Logged Out', '2023-02-25 01:57:54 '),
(646, 'user', 'Logged In', '2023-02-25 01:58:08 '),
(647, 'user', 'Logged In', '2023-02-25 02:43:32 '),
(648, 'user', 'Logged In', '2023-02-25 03:17:24 '),
(649, 'user', 'Logged Out', '2023-02-25 04:18:29 '),
(650, 'user', 'Logged In', '2023-02-25 04:18:35 '),
(651, 'user', 'Logged Out', '2023-02-25 04:21:15 '),
(652, 'user', 'Logged In', '2023-02-25 04:21:39 '),
(653, 'user', 'Update Profile', '2023-02-25 04:23:30 '),
(654, 'user', 'Logged In', '2023-02-25 04:23:50 '),
(655, 'user', 'Logged Out', '2023-02-25 05:04:53 '),
(656, 'user', 'Logged In', '2023-02-25 05:04:57 '),
(657, 'user', 'Logged Out', '2023-03-13 12:02:45 '),
(658, 'user', 'Logged In', '2023-03-13 12:03:03 '),
(659, 'user', 'Logged Out', '2023-03-13 12:03:06 '),
(660, 'admin', 'Logged Out', '2023-03-13 12:03:12 '),
(661, 'admin', 'Logged In', '2023-03-13 12:03:17 '),
(662, 'admin', 'Logged Out', '2023-03-13 12:03:21 '),
(663, 'user', 'Logged Out', '2023-03-13 12:04:18 '),
(664, 'user', 'Logged In', '2023-03-13 12:04:26 '),
(665, 'user', 'Logged Out', '2023-03-13 12:04:31 '),
(666, 'user', 'Logged In', '2023-03-13 12:14:41 '),
(667, 'user', 'Logged Out', '2023-03-13 01:39:54 '),
(668, 'admin', 'Logged In', '2023-03-13 02:30:01 '),
(669, 'admin', 'Edit Expenses', '2023-03-13 10:36:32 '),
(670, 'admin', 'Add New Instructor', '2023-03-13 10:38:44 '),
(671, 'admin', 'Delete Instructor', '2023-03-13 03:38:56 '),
(672, 'admin', 'Add New Instructor', '2023-03-13 10:40:34 '),
(673, 'user', 'Logged In', '2023-03-13 03:41:10 '),
(674, 'user', 'Purchase Plan', '2023-03-13 03:41:23 '),
(675, 'user', 'Reserved Plan', '2023-03-13 03:53:47 '),
(676, 'admin', 'Logged Out', '2023-03-13 03:57:44 '),
(677, 'staff', 'Logged In', '2023-03-13 03:57:49 '),
(678, 'staff', 'Add New Instructor', '2023-03-13 11:12:34 '),
(679, 'staff', 'Delete Instructor', '2023-03-13 04:15:10 '),
(680, 'staff', 'Delete Instructor', '2023-03-13 04:15:15 '),
(681, 'staff', 'Add New Instructor', '2023-03-13 11:15:33 '),
(682, 'staff', 'Add New Instructor', '2023-03-13 11:16:23 '),
(683, 'staff', 'Logged Out', '2023-03-13 04:17:35 '),
(684, 'admin', 'Logged In', '2023-03-13 04:17:40 '),
(685, 'user', 'Purchase Plan', '2023-03-13 04:20:41 '),
(686, 'user', 'Make Payment', '2023-03-13 04:20:58 '),
(687, 'admin', 'Delete Instructor', '2023-03-13 04:23:31 '),
(688, 'admin', 'Delete Instructor', '2023-03-13 04:23:38 '),
(689, 'admin', 'Add New Instructor', '2023-03-13 11:24:29 '),
(690, 'admin', 'Add New Instructor', '2023-03-13 11:26:43 '),
(691, 'admin', 'Add New Instructor', '2023-03-13 11:29:16 '),
(692, 'admin', 'Delete Instructor', '2023-03-13 04:34:45 '),
(693, 'admin', 'Delete Instructor', '2023-03-13 04:34:54 '),
(694, 'admin', 'Delete Instructor', '2023-03-13 04:34:59 '),
(695, 'admin', 'Add New Instructor', '2023-03-13 11:42:32 '),
(696, 'admin', 'Add New Instructor', '2023-03-13 11:42:51 '),
(697, 'admin', 'Edit Expenses', '2023-03-13 11:43:50 '),
(698, 'admin', 'Edit Expenses', '2023-03-13 11:44:03 '),
(699, 'user', 'Purchase Plan', '2023-03-13 04:46:23 '),
(700, 'user', 'Purchase Plan', '2023-03-13 04:47:02 '),
(701, 'user', 'Purchase Plan', '2023-03-13 05:14:51 '),
(702, 'admin', 'Delete Instructor', '2023-03-13 05:25:02 '),
(703, 'admin', 'Delete Instructor', '2023-03-13 05:25:07 '),
(704, 'admin', 'Add New Instructor', '2023-03-14 12:25:20 '),
(705, 'user', 'Make Payment', '2023-03-13 05:25:40 '),
(706, 'user', 'Logged Out', '2023-03-13 05:41:56 '),
(707, 'user', 'Logged In', '2023-03-13 05:42:01 '),
(708, 'user', 'Logged Out', '2023-03-13 05:42:05 '),
(709, 'user', 'Logged In', '2023-03-13 05:44:22 '),
(710, 'user', 'Purchase Plan', '2023-03-13 05:45:32 '),
(711, 'user', 'Make Payment', '2023-03-13 05:45:44 '),
(712, 'admin', 'Approved Customer Purchase Plan', '2023-03-13 06:06:27 '),
(713, 'user', 'Logged In', '2023-03-14 04:51:46 '),
(714, 'admin', 'Logged Out', '2023-03-14 05:57:38 '),
(715, 'staff', 'Logged In', '2023-03-14 05:57:43 '),
(716, 'staff', 'Logged Out', '2023-03-14 07:19:14 '),
(717, 'admin', 'Logged In', '2023-03-14 07:19:19 '),
(718, 'user', 'Logged In', '2023-03-14 07:41:24 '),
(719, 'user', 'Logged Out', '2023-03-14 08:15:01 '),
(720, 'user', 'Logged In', '2023-03-14 08:15:19 '),
(721, 'user', 'Logged Out', '2023-03-14 08:15:52 '),
(722, 'user', 'Logged In', '2023-03-14 08:16:00 '),
(723, 'user', 'Purchase Plan', '2023-03-14 08:16:08 '),
(724, 'user', 'Make Payment', '2023-03-14 08:16:23 '),
(725, 'user', 'Logged Out', '2023-03-14 10:25:20 '),
(726, 'admin', 'Logged Out', '2023-03-14 10:25:33 '),
(727, 'user', 'Logged In', '2023-03-14 04:44:22 '),
(728, 'user', 'Logged Out', '2023-03-14 04:56:05 '),
(729, 'user', 'Logged In', '2023-03-14 05:06:17 '),
(730, 'admin', 'Logged In', '2023-03-14 05:24:50 '),
(731, 'user', 'Logged Out', '2023-03-14 06:13:19 '),
(732, 'user', 'Logged In', '2023-03-14 06:13:33 '),
(733, 'admin', 'Logged Out', '2023-03-14 08:07:07 '),
(734, 'user', 'Logged Out', '2023-03-16 05:33:40 '),
(735, 'user', 'Logged In', '2023-03-16 05:33:53 '),
(736, 'user', 'Logged Out', '2023-03-16 05:33:57 '),
(737, 'user', 'Logged In', '2023-03-16 05:34:03 '),
(738, 'user', 'Logged Out', '2023-03-16 05:35:23 '),
(739, 'user', 'Logged In', '2023-03-16 05:35:31 '),
(740, 'user', 'Logged Out', '2023-03-16 05:38:03 '),
(741, 'user', 'Logged In', '2023-03-16 05:38:11 '),
(742, 'user', 'Logged Out', '2023-03-17 01:09:28 '),
(743, 'user', 'Logged In', '2023-03-17 01:47:34 '),
(744, 'admin', 'Logged In', '2023-03-17 03:29:44 '),
(745, 'admin', 'Delete Expenses', '2023-03-17 03:30:06 '),
(746, 'admin', 'Delete Expenses', '2023-03-17 03:58:20 '),
(747, 'admin', 'Delete Expenses', '2023-03-17 03:58:41 '),
(748, 'admin', 'Delete Expenses', '2023-03-17 04:05:15 '),
(749, 'admin', 'Delete Expenses', '2023-03-17 04:05:19 '),
(750, 'admin', 'Logged In', '2023-03-19 03:20:17 '),
(751, 'admin', 'Logged In', '2023-03-19 04:25:33 '),
(752, 'admin', 'Logged Out', '2023-03-19 06:03:57 '),
(753, 'user', 'Logged In', '2023-03-19 06:04:29 '),
(754, 'user', 'Logged Out', '2023-03-19 06:20:34 '),
(755, 'user', 'Logged In', '2023-03-19 06:24:26 '),
(756, 'user', 'Logged In', '2023-03-19 08:06:19 '),
(757, 'user', 'Logged In', '2023-03-19 08:12:19 '),
(758, 'user', 'Logged Out', '2023-03-19 08:13:02 '),
(759, 'admin', 'Logged In', '2023-03-20 06:32:20 '),
(760, 'admin', 'Logged Out', '2023-03-20 06:39:45 '),
(761, 'user', 'Logged In', '2023-03-20 06:40:33 '),
(762, 'admin', 'Logged In', '2023-03-20 06:41:33 '),
(763, 'user', 'Logged Out', '2023-03-20 04:32:03 '),
(764, 'admin', 'Logged In', '2023-03-20 06:42:54 '),
(765, 'admin', 'Insert New Membership Packages', '2023-03-21 01:51:55 '),
(766, 'admin', 'Edit Expenses', '2023-03-21 01:52:30 '),
(767, 'user', 'Logged In', '2023-04-02 05:47:14 '),
(768, 'user', 'Logged In', '2023-04-02 05:18:54 '),
(769, 'user', 'Logged In', '2023-04-06 12:48:22 '),
(770, 'user', 'Logged Out', '2023-04-06 01:36:40 '),
(771, 'user', 'Logged In', '2023-04-08 09:27:48 '),
(772, 'user', 'Logged Out', '2023-04-08 09:34:13 '),
(773, 'user', 'Logged In', '2023-04-08 10:30:35 '),
(774, 'user', 'Logged In', '2023-04-08 03:30:47 '),
(775, 'user', 'Logged In', '2023-04-08 04:26:27 '),
(776, 'user', 'Logged In', '2023-04-08 05:04:35 '),
(777, 'user', 'Update Profile', '2023-04-08 05:08:40 '),
(778, 'user', 'Update Profile', '2023-04-08 05:50:45 '),
(779, 'user', 'Update Profile', '2023-04-08 05:51:03 '),
(780, 'user', 'Update Profile', '2023-04-08 05:53:21 '),
(781, 'user', 'Logged Out', '2023-04-09 04:21:00 '),
(782, 'admin', 'Logged In', '2023-04-09 04:22:05 '),
(783, 'admin', 'Logged Out', '2023-04-09 04:23:26 '),
(784, 'user', 'Logged In', '2023-04-09 04:24:22 '),
(785, 'user', 'Logged Out', '2023-04-10 06:34:40 '),
(786, 'user', 'Logged In', '2023-04-10 06:51:48 '),
(787, 'user', 'Logged Out', '2023-04-10 06:51:53 '),
(788, 'user', 'Logged Out', '2023-04-10 06:57:00 '),
(789, 'admin', 'Logged In', '2023-04-10 06:57:45 '),
(790, 'admin', 'Logged Out', '2023-04-10 06:57:54 '),
(791, 'user', 'Logged In', '2023-04-15 12:27:31 '),
(792, 'user', 'Logged Out', '2023-04-15 04:06:04 '),
(793, 'user', 'Logged In', '2023-04-15 06:36:17 '),
(794, 'user', 'Make Payment', '2023-04-15 06:37:55 '),
(795, 'admin', 'Logged In', '2023-04-15 06:38:21 '),
(796, 'admin', 'Approved Customer Purchase Plan', '2023-04-15 06:38:35 '),
(797, 'user', 'Logged Out', '2023-04-16 08:41:47 '),
(798, 'user', 'Logged In', '2023-04-16 08:46:36 '),
(799, 'admin', 'Logged Out', '2023-04-16 10:36:48 '),
(800, 'admin', 'Logged In', '2023-04-16 10:36:56 '),
(801, 'user', 'Logged Out', '2023-04-16 03:43:21 '),
(802, '1', 'Add New Staff', '2023-04-16 03:44:03 '),
(803, 'admin', 'Logged In', '2023-04-16 03:44:13 '),
(804, 'admin', 'Approved Customer Purchase Plan', '2023-04-16 04:26:20 '),
(805, 'admin', 'Approved Customer Purchase Plan', '2023-04-16 05:02:58 '),
(806, 'admin', 'Logged Out', '2023-04-17 12:32:26 '),
(807, 'staff', 'Logged In', '2023-04-17 12:32:32 '),
(808, 'staff', 'Purchase Plan', '2023-04-17 12:36:24 '),
(809, 'staff', 'Update Profile', '2023-04-17 01:02:23 '),
(810, 'admin', 'Insert New Membership Packages', '2023-04-17 01:08:22 '),
(811, 'admin', 'Insert New Membership Packages', '2023-04-17 01:08:44 '),
(812, 'admin', 'Delete Expenses', '2023-04-17 07:08:54 '),
(813, 'admin', 'Insert New Membership Packages', '2023-04-17 01:13:51 '),
(814, 'user', 'Logged Out', '2023-04-17 08:10:01 '),
(815, '1', 'Add New Staff', '2023-04-17 08:59:05 '),
(816, '1', 'Add New Staff', '2023-04-17 06:44:49 '),
(817, '1', 'Add New Staff', '2023-04-17 06:49:23 '),
(818, '1', 'Add New Staff', '2023-04-17 06:54:57 '),
(819, '1', 'Add New Staff', '2023-04-17 07:00:10 '),
(820, '1', 'Add New Staff', '2023-04-18 04:51:21 '),
(821, '1', 'Add New Staff', '2023-04-18 05:15:07 '),
(822, '1', 'Add New Staff', '2023-04-18 10:07:33 '),
(823, '1', 'Add New Staff', '2023-04-18 10:09:11 '),
(824, '1', 'Add New Staff', '2023-04-18 12:02:33 '),
(825, 'user', 'Logged Out', '2023-04-20 08:07:14 '),
(826, '1', 'Add New Staff', '2023-04-20 10:38:20 '),
(827, 'admin', 'Logged In', '2023-04-20 11:51:28 '),
(828, 'admin', 'Logged Out', '2023-04-20 11:55:42 '),
(829, 'user', 'Logged In', '2023-04-21 08:20:22 '),
(830, 'user', 'Logged Out', '2023-04-21 08:21:23 '),
(831, 'admin', 'Logged In', '2023-04-21 08:21:34 '),
(832, 'admin', 'Insert New Membership Packages', '2023-04-21 09:26:31 '),
(833, 'admin', 'Logged Out', '2023-04-21 03:26:50 '),
(834, 'user', 'Logged In', '2023-04-22 04:10:01 '),
(835, 'admin', 'Logged In', '2023-04-22 04:33:54 '),
(836, 'admin', 'Update Profile', '2023-04-22 04:34:09 '),
(837, 'user', 'Update Profile', '2023-04-22 04:52:42 '),
(838, 'user', 'Logged Out', '2023-04-22 04:56:56 '),
(839, 'admin', 'Logged Out', '2023-04-23 06:53:17 '),
(840, 'admin', 'Logged In', '2023-04-23 06:54:21 '),
(841, 'user', 'Logged In', '2023-04-23 03:28:42 '),
(842, 'user', 'Logged Out', '2023-04-24 05:40:16 '),
(843, 'admin', 'Logged In', '2023-04-24 07:06:24 '),
(844, 'admin', 'Logged Out', '2023-04-24 07:07:06 '),
(845, 'admin', 'Logged In', '2023-04-24 07:07:24 '),
(846, 'admin', 'Logged Out', '2023-04-24 07:27:19 '),
(847, 'user', 'Logged In', '2023-04-25 05:08:34 '),
(848, 'user', 'Logged Out', '2023-04-25 06:09:32 '),
(849, 'user', 'Logged In', '2023-04-25 06:10:06 '),
(850, 'user', 'Update Profile', '2023-04-25 06:40:27 '),
(851, 'user', 'Update Profile', '2023-04-25 07:10:33 '),
(852, 'user', 'Update Profile', '2023-04-25 07:13:48 '),
(853, 'user', 'Purchase Plan', '2023-04-25 07:32:54 '),
(854, 'admin', 'Logged In', '2023-04-25 07:47:25 '),
(855, 'user', 'Make Payment', '2023-04-25 09:10:06 '),
(856, 'admin', 'Approved Customer Purchase Plan', '2023-04-25 09:11:29 '),
(857, '1', 'Add New Staff', '2023-04-25 10:31:03 '),
(858, 'staff', 'Logged In', '2023-04-25 10:31:30 '),
(859, 'staff', 'Delete Expenses', '2023-04-25 10:35:40 '),
(860, 'staff', 'Delete Expenses', '2023-04-25 10:35:49 '),
(861, 'staff', 'Delete Expenses', '2023-04-25 10:35:53 '),
(862, 'staff', 'Delete Expenses', '2023-04-25 10:35:57 '),
(863, 'staff', 'Logged Out', '2023-04-25 10:44:18 '),
(864, 'admin', 'Logged In', '2023-04-25 10:44:23 '),
(865, 'admin', 'Delete Expenses', '2023-04-25 10:46:29 '),
(866, 'admin', 'Delete Expenses', '2023-04-25 10:46:35 '),
(867, 'admin', 'Delete Expenses', '2023-04-25 10:46:39 '),
(868, 'admin', 'Delete Expenses', '2023-04-25 10:46:43 '),
(869, 'admin', 'Insert New Membership Packages', '2023-04-25 05:00:24 '),
(870, 'user', 'Logged In', '2023-04-25 11:01:26 '),
(871, 'user', 'Logged In', '2023-04-25 11:02:04 '),
(872, 'user', 'Logged Out', '2023-04-25 11:03:20 '),
(873, 'user', 'Logged In', '2023-04-25 11:03:45 '),
(874, 'user', 'Logged Out', '2023-04-25 11:04:47 '),
(875, 'user', 'Logged In', '2023-04-25 11:05:19 '),
(876, 'user', 'Purchase Plan', '2023-04-25 11:11:28 '),
(877, 'user', 'Make Payment', '2023-04-25 11:11:41 '),
(878, 'user', 'Make Payment', '2023-04-25 11:13:16 '),
(879, 'admin', 'Approved Customer Purchase Plan', '2023-04-25 11:14:35 '),
(880, 'user', 'Logged Out', '2023-04-25 12:40:35 '),
(881, 'user', 'Logged In', '2023-04-25 03:16:44 '),
(882, '1', 'Add New Staff', '2023-04-25 04:50:01 '),
(883, 'admin', 'Insert New Membership Packages', '2023-04-25 11:12:22 '),
(884, 'admin', 'Add New Instructor', '2023-04-25 11:17:31 '),
(885, 'user', 'Purchase Plan', '2023-04-25 05:17:46 '),
(886, 'user', 'Make Payment', '2023-04-26 04:12:12 '),
(887, 'admin', 'Approved Customer Purchase Plan', '2023-04-26 04:12:35 '),
(888, 'user', 'Logged Out', '2023-04-26 05:16:26 '),
(889, 'user', 'Logged In', '2023-04-26 05:17:16 '),
(890, 'user', 'Logged Out', '2023-04-26 05:21:52 '),
(891, 'user', 'Logged In', '2023-04-26 05:41:44 '),
(892, 'admin', 'Logged In', '2023-04-27 05:24:46 '),
(893, 'user', 'Logged In', '2023-04-27 05:29:21 '),
(894, 'admin', 'Logged Out', '2023-04-27 05:37:56 '),
(895, 'staff', 'Logged In', '2023-04-27 05:38:07 '),
(896, 'staff', 'Logged Out', '2023-04-27 05:38:18 '),
(897, 'admin', 'Logged In', '2023-04-27 05:41:17 '),
(898, 'admin', 'Logged Out', '2023-04-27 09:18:03 '),
(899, 'admin', 'Logged In', '2023-04-27 09:18:58 '),
(900, 'admin', 'Insert New Membership Packages', '2023-04-27 03:25:01 '),
(901, 'admin', 'Insert New Membership Packages', '2023-04-27 03:26:12 '),
(902, 'admin', 'Logged Out', '2023-04-27 09:26:50 '),
(903, 'admin', 'Logged In', '2023-04-27 09:34:10 '),
(904, 'admin', 'Logged Out', '2023-04-27 09:34:48 '),
(905, 'user', 'Logged In', '2023-04-27 09:42:55 '),
(906, 'user', 'Logged Out', '2023-04-27 09:43:26 '),
(907, 'user', 'Logged In', '2023-04-27 09:57:09 '),
(908, 'user', 'Logged Out', '2023-04-27 10:27:50 '),
(909, 'user', 'Logged In', '2023-04-27 12:52:38 '),
(910, 'user', 'Update Profile', '2023-04-27 12:53:39 '),
(911, 'user', 'Logged Out', '2023-04-27 12:55:44 '),
(912, 'staff', 'Logged In', '2023-04-27 12:56:10 '),
(913, 'staff', 'Logged Out', '2023-04-27 12:57:20 '),
(914, 'user', 'Logged In', '2023-04-27 12:57:47 '),
(915, 'user', 'Logged Out', '2023-04-27 01:09:39 '),
(916, 'admin', 'Logged In', '2023-04-27 01:09:50 '),
(917, 'admin', 'New Expenses', '2023-04-27 01:13:13 '),
(918, 'admin', 'Reserved Plan', '2023-04-27 04:16:25 '),
(919, 'admin', 'Reserved Plan Set to Purchase Plan', '2023-04-27 04:16:38 '),
(920, 'admin', 'Logged Out', '2023-04-28 12:04:14 '),
(921, 'user', 'Logged In', '2023-04-29 05:57:45 '),
(922, 'user', 'Logged Out', '2023-04-29 05:58:36 '),
(923, 'user', 'Logged In', '2023-04-29 06:01:45 '),
(924, 'user', 'Logged In', '2023-04-29 08:52:58 '),
(925, 'user', 'Logged In', '2023-04-30 03:51:23 '),
(926, 'user', 'Logged Out', '2023-04-30 03:51:27 '),
(927, 'user', 'Logged In', '2023-04-30 04:55:48 '),
(928, 'user', 'Logged In', '2023-04-30 04:56:04 '),
(929, 'user', 'Logged In', '2023-04-30 05:04:23 '),
(930, 'user', 'Logged In', '2023-04-30 05:17:43 '),
(931, 'user', 'Logged In', '2023-04-30 05:18:31 '),
(932, 'user', 'Logged Out', '2023-04-30 05:21:16 '),
(933, 'user', 'Logged In', '2023-04-30 05:21:20 '),
(934, 'user', 'Logged Out', '2023-04-30 05:26:49 '),
(935, 'user', 'Logged In', '2023-04-30 05:28:00 '),
(936, 'user', 'Logged Out', '2023-04-30 05:28:27 '),
(937, 'user', 'Logged Out', '2023-04-30 08:32:25 '),
(938, 'user', 'Logged In', '2023-04-30 12:16:30 '),
(939, 'user', 'Logged Out', '2023-04-30 12:38:41 '),
(940, 'staff', 'Logged In', '2023-04-30 12:39:22 '),
(941, 'staff', 'Logged Out', '2023-04-30 01:03:30 '),
(942, 'admin', 'Logged In', '2023-04-30 01:03:35 '),
(943, 'user', 'Logged In', '2023-05-01 04:30:28 '),
(944, 'user', 'Update Profile', '2023-05-01 05:43:40 '),
(945, 'user', 'Reserved Plan', '2023-05-01 07:49:42 '),
(946, 'user', 'Logged Out', '2023-05-01 11:03:15 '),
(947, 'user', 'Logged In', '2023-05-03 02:59:03 '),
(948, 'admin', 'Logged In', '2023-05-03 03:01:29 '),
(949, 'admin', 'Logged Out', '2023-05-03 07:44:46 '),
(950, 'user', 'Logged In', '2023-05-03 07:54:57 '),
(951, 'user', 'Logged In', '2023-05-03 07:55:09 ');
INSERT INTO `audittrail` (`id`, `type`, `description`, `datetime`) VALUES
(952, 'user', 'Logged In', '2023-05-03 07:55:37 '),
(953, 'user', 'Logged Out', '2023-05-03 07:56:28 '),
(954, 'user', 'Logged In', '2023-05-03 07:56:34 '),
(955, 'user', 'Logged Out', '2023-05-03 08:26:46 '),
(956, 'user', 'Logged In', '2023-05-03 09:23:55 '),
(957, 'user', 'Logged In', '2023-05-03 09:24:37 '),
(958, 'user', 'Logged Out', '2023-05-03 03:32:17 '),
(959, 'admin', 'Logged In', '2023-05-03 03:35:16 '),
(960, 'admin', 'Logged Out', '2023-05-03 06:35:35 '),
(961, 'user', 'Logged In', '2023-05-03 06:36:03 '),
(962, 'user', 'Logged Out', '2023-05-03 07:19:56 '),
(963, 'staff', 'Logged In', '2023-05-03 07:21:37 '),
(964, 'staff', 'Logged Out', '2023-05-03 07:53:12 '),
(965, 'admin', 'Logged In', '2023-05-03 07:53:23 '),
(966, 'admin', 'Logged Out', '2023-05-03 08:44:53 '),
(967, 'admin', 'Logged In', '2023-05-03 09:33:16 '),
(968, 'admin', 'Reserved Plan', '2023-05-03 10:15:04 '),
(969, 'admin', 'Reserved Plan Set to Purchase Plan', '2023-05-03 10:18:13 '),
(970, 'admin', 'Reserved Plan', '2023-05-03 10:20:40 '),
(971, 'admin', 'Make Payment', '2023-05-03 10:21:06 '),
(972, 'admin', 'Reserved Plan Set to Purchase Plan', '2023-05-03 10:25:12 '),
(973, 'admin', 'Approved Customer Purchase Plan', '2023-05-03 10:25:59 '),
(974, 'admin', 'Logged Out', '2023-05-04 06:58:03 '),
(975, 'user', 'Logged In', '2023-05-04 07:46:57 '),
(976, 'user', 'Logged In', '2023-05-04 07:47:35 '),
(977, 'user', 'Purchase Plan', '2023-05-04 08:03:36 '),
(978, 'user', 'Logged Out', '2023-05-04 09:37:54 '),
(979, 'admin', 'Logged In', '2023-05-04 09:38:00 '),
(980, 'admin', 'Insert New Membership Packages', '2023-05-04 03:41:23 '),
(981, 'user', 'Logged In', '2023-05-04 09:44:12 '),
(982, 'admin', 'Delete Expenses', '2023-05-04 09:48:35 '),
(983, 'admin', 'Insert New Membership Packages', '2023-05-04 03:49:26 '),
(984, 'admin', 'Insert New Membership Packages', '2023-05-04 03:54:31 '),
(985, 'admin', 'Logged Out', '2023-05-04 10:55:59 '),
(986, 'admin', 'Logged In', '2023-05-04 11:05:06 '),
(987, 'admin', 'Insert New Membership Packages', '2023-05-04 05:27:36 '),
(988, 'admin', 'Insert New Membership Packages', '2023-05-04 05:37:22 '),
(989, 'admin', 'New Expenses', '2023-05-04 11:38:04 '),
(990, 'admin', 'Add New Instructor', '2023-05-04 05:48:46 '),
(991, 'admin', 'Delete Instructor', '2023-05-04 11:48:53 '),
(992, 'admin', 'Add New Instructor', '2023-05-04 06:29:55 '),
(993, 'user', 'Logged In', '2023-05-04 07:54:09 '),
(994, 'admin', 'Logged In', '2023-05-04 08:02:54 '),
(995, 'user', 'Logged In', '2023-05-05 07:16:15 '),
(996, 'admin', 'Logged In', '2023-05-05 07:19:14 '),
(997, 'user', 'Purchase Plan', '2023-05-05 07:23:06 '),
(998, 'user', 'Make Payment', '2023-05-05 07:23:35 '),
(999, 'admin', 'Approved Customer Purchase Plan', '2023-05-05 07:24:28 '),
(1000, 'user', 'Logged Out', '2023-05-05 10:10:59 '),
(1001, 'admin', 'Logged In', '2023-05-06 07:18:08 '),
(1002, 'admin', 'Delete Expenses', '2023-05-07 08:40:37 '),
(1003, 'admin', 'Delete Expenses', '2023-05-07 08:40:40 '),
(1004, 'admin', 'Delete Expenses', '2023-05-07 08:40:42 '),
(1005, 'admin', 'Delete Expenses', '2023-05-07 08:40:44 '),
(1006, 'admin', 'Logged Out', '2023-05-07 09:21:49 '),
(1007, 'admin', 'Logged In', '2023-05-07 10:55:17 '),
(1008, 'user', 'Logged In', '2023-05-07 11:27:06 '),
(1009, 'admin', 'Logged In', '2023-05-08 12:17:45 '),
(1010, 'admin', 'Logged Out', '2023-05-08 12:18:55 '),
(1011, 'admin', 'Logged In', '2023-05-08 12:19:08 '),
(1012, 'admin', 'Logged In', '2023-05-08 12:21:39 '),
(1013, 'admin', 'Logged In', '2023-05-08 12:27:47 '),
(1014, 'admin', 'Logged Out', '2023-05-08 12:27:58 '),
(1015, 'admin', 'Logged In', '2023-05-08 12:28:02 '),
(1016, 'admin', 'Logged Out', '2023-05-08 12:30:39 '),
(1017, 'admin', 'Logged In', '2023-05-08 12:31:52 '),
(1018, 'admin', 'Logged Out', '2023-05-08 02:16:24 '),
(1019, 'user', 'Logged In', '2023-05-08 04:59:24 '),
(1020, 'user', 'Logged Out', '2023-05-08 01:41:03 '),
(1021, 'admin', 'Logged In', '2023-05-08 01:41:09 '),
(1022, 'admin', 'Delete Expenses', '2023-05-08 02:01:15 '),
(1023, 'admin', 'Insert New Membership Packages', '2023-05-08 09:02:55 '),
(1024, 'admin', 'Delete Expenses', '2023-05-08 03:14:40 '),
(1025, 'admin', 'Insert New Membership Packages', '2023-05-08 09:15:12 '),
(1026, 'admin', 'Insert New Membership Packages', '2023-05-08 09:19:28 '),
(1027, 'admin', 'Logged Out', '2023-05-08 06:45:40 '),
(1028, 'admin', 'Logged In', '2023-05-09 02:16:52 '),
(1029, 'admin', 'Edit Expenses', '2023-05-09 10:29:37 '),
(1030, 'admin', 'Edit Expenses', '2023-05-09 10:30:15 '),
(1031, 'admin', 'Edit Expenses', '2023-05-09 11:07:16 '),
(1032, 'admin', 'Logged Out', '2023-05-09 06:19:26 '),
(1033, 'admin', 'Logged In', '2023-05-09 07:31:40 '),
(1034, 'admin', 'Logged In', '2023-05-09 04:18:34 '),
(1035, 'admin', 'Logged Out', '2023-05-09 05:23:16 '),
(1036, 'user', 'Logged In', '2023-05-09 05:23:25 '),
(1037, 'user', 'Purchase Plan', '2023-05-09 05:27:57 '),
(1038, 'admin', 'Logged In', '2023-05-09 11:20:56 '),
(1039, 'admin', 'Logged Out', '2023-05-10 12:17:38 '),
(1040, 'admin', 'Logged In', '2023-05-10 12:17:42 '),
(1041, 'admin', 'Logged Out', '2023-05-10 01:40:16 '),
(1042, 'admin', 'Logged In', '2023-07-06 10:13:59 '),
(1043, 'admin', 'Logged Out', '2023-07-06 10:15:15 '),
(1044, 'staff', 'Logged In', '2023-07-06 10:15:41 '),
(1045, 'staff', 'Logged Out', '2023-07-06 10:51:47 '),
(1046, 'staff', 'Logged In', '2023-07-16 01:09:29 '),
(1047, 'staff', 'Customer Payment Window', '2023-07-16 01:09:45 '),
(1048, 'staff', 'Customer Edit Payment Window', '2023-07-16 01:09:53 '),
(1049, 'staff', 'Edit Expenses', '2023-07-16 01:10:01 '),
(1050, 'staff', 'Edit Expenses', '2023-07-16 01:13:07 '),
(1051, 'staff', 'Edit Expenses', '2023-07-16 01:14:10 '),
(1052, 'staff', 'Edit Expenses', '2023-07-16 01:14:16 '),
(1053, 'staff', 'Customer Edit Payment Window', '2023-07-16 01:14:30 '),
(1054, 'staff', 'Logged Out', '2023-07-16 01:16:26 '),
(1055, 'admin', 'Logged In', '2023-07-16 01:16:44 '),
(1056, 'admin', 'Logged Out', '2023-07-16 01:18:16 '),
(1057, 'user', 'Logged In', '2023-07-16 01:36:11 '),
(1058, 'user', 'Logged In', '2023-07-16 02:00:20 '),
(1059, 'user', 'Logged Out', '2023-07-16 02:11:52 '),
(1060, 'admin', 'Logged In', '2023-07-25 06:14:53 '),
(1061, 'admin', 'Update Profile', '2023-07-25 06:40:08 '),
(1062, 'admin', 'Logged Out', '2023-07-25 06:40:22 '),
(1063, 'admin', 'Logged In', '2023-07-31 07:50:41 ');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `products_id`, `users_id`, `quantity`, `price`, `total`) VALUES
(56, 147, 41, 1, 100, 100),
(57, 147, 2, 1, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `time` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `date` date NOT NULL DEFAULT current_timestamp(),
  `code` int(11) NOT NULL,
  `chat_notif` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender_id`, `receiver_id`, `message`, `time`, `date`, `code`, `chat_notif`) VALUES
(40, 5, 2, '1', '11:40:32 PM', '2023-07-16', 8184, 0),
(41, 5, 2, 'sdfsdf', '11:50:58 PM', '2023-07-16', 8184, 0),
(42, 5, 2, 'sdfsfs', '11:50:59 PM', '2023-07-16', 8184, 0),
(43, 5, 2, 'sdfsd', '11:51:00 PM', '2023-07-16', 8184, 0),
(44, 2, 5, 'dsfsdfdsfsdfs', '11:53:27 PM', '2023-07-16', 8184, 0),
(45, 2, 5, 'fsdfsdfsd', '11:53:28 PM', '2023-07-16', 8184, 0),
(46, 2, 5, 'fsdfsdf', '11:53:29 PM', '2023-07-16', 8184, 0),
(47, 5, 2, 'dasd', '11:59:06 PM', '2023-07-16', 8184, 0),
(48, 5, 2, 'dasdasdas', '11:59:10 PM', '2023-07-16', 8184, 0),
(49, 2, 3, 'Hello', '12:04:00 AM', '2023-07-16', 13633, 0),
(50, 3, 2, 'dasdas', '12:10:44 AM', '2023-07-16', 13633, 0),
(51, 3, 2, 'asdas', '12:16:57 AM', '2023-07-16', 13633, 0),
(52, 3, 2, 'dasdas', '12:17:55 AM', '2023-07-16', 13633, 0),
(53, 3, 2, 'dsf', '12:21:14 AM', '2023-07-16', 13633, 0),
(54, 3, 2, 'dsfdsfsdfsdfsdfsdfdsfsdfsd', '12:21:18 AM', '2023-07-16', 13633, 0),
(58, 26, 2, '1', '02:54:02 AM', '2023-04-27', 55198, 0),
(59, 26, 2, 'safsadfasdf', '09:25:17 AM', '2023-04-27', 55198, 0),
(60, 26, 2, 'sdfa', '11:48:30 AM', '2023-04-27', 55198, 0),
(61, 2, 26, 'q', '11:52:09 AM', '2023-04-27', 55198, 0),
(62, 26, 2, 'fdsfsa', '11:52:33 AM', '2023-04-27', 55198, 0),
(63, 2, 28, 'hi', '04:14:45 PM', '2023-07-06', 57773, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `messages` mediumtext NOT NULL,
  `responses` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `messages`, `responses`) VALUES
(1, 'hi|Hey|hy|Hello|hay', 'Hello! What can we do for you?'),
(2, 'Good Morning', 'Good Morning Too'),
(3, 'How are you?|Kamusta?|kamusta?|how are you?', 'Im Good');

-- --------------------------------------------------------

--
-- Table structure for table `chat_code`
--

CREATE TABLE `chat_code` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat_code`
--

INSERT INTO `chat_code` (`id`, `sender_id`, `receiver_id`, `code`) VALUES
(5, 1, 36, 39146),
(6, 2, 4, 30848),
(7, 5, 1, 80353),
(8, 3, 5, 1852),
(9, 2, 5, 8184),
(10, 2, 3, 13633),
(11, 3, 2, 41565),
(12, 1, 2, 77294),
(13, 26, 2, 55198),
(14, 2, 28, 57773);

-- --------------------------------------------------------

--
-- Table structure for table `customers_info`
--

CREATE TABLE `customers_info` (
  `customers_info_id` int(11) NOT NULL,
  `customers_code` varchar(100) NOT NULL,
  `users_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `shipping_fee` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `customers_info_status` int(1) NOT NULL,
  `proofs` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `address` text NOT NULL,
  `pickupdate` text NOT NULL,
  `customers_info_notif` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `amount` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `description`, `amount`, `date_created`) VALUES
(2, 'for food', 300, '2022-09-22'),
(4, 'Gym Equipment', 100000, '2023-04-27'),
(5, 'edit', 100, '2023-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `gcash`
--

CREATE TABLE `gcash` (
  `id` int(1) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gcash`
--

INSERT INTO `gcash` (`id`, `image`) VALUES
(1, 'qrcode.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `id` int(11) NOT NULL,
  `instructors` varchar(100) NOT NULL,
  `timein` varchar(20) NOT NULL,
  `timeout` varchar(20) NOT NULL,
  `militarytimein` varchar(20) NOT NULL,
  `militarytimeout` varchar(20) NOT NULL,
  `status` int(1) NOT NULL,
  `fee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`id`, `instructors`, `timein`, `timeout`, `militarytimein`, `militarytimeout`, `status`, `fee`) VALUES
(13, 'instructor1', '11:58:00 AM', '01:17:00 PM', '11:58', '13:17', 0, 120),
(14, 'instructor2', '01:18:00 PM', '04:10:00 PM', '13:18', '16:10', 0, 120),
(28, 'dsdsgdsf', '07:48:00 AM', '08:48:00 PM', '07:48', '20:48', 0, 20),
(29, 'asdasdasd', '05:30:00 AM', '07:30:00 PM', '05:30', '19:30', 0, 120);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `img` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `category`, `img`, `name`, `description`, `stock`, `price`, `date_created`) VALUES
(2, '', '115-1155804_pearl-milk-tea-melon-bubble-tea-transparent.png', 'Milktea', 'fsdfsdfsdf', 50, 120, '2022-11-25'),
(3, '', 'fruit-tea.png', 'Fruit Tea', 'adasvcxv', 50, 89, '2022-11-25'),
(4, '', 'special-tea.png', 'Special Tea', 'Special Tea', 50, 79, '2022-11-25'),
(14, 'Food Supplements', 'JYM.png', 'Pre JYM High-Performance Pre-Workout', 'Pre JYM defined what a true pre-workout should be when it launched in 2013. Its 14 active ingredients deliver energy for more intense workouts; boost muscle strength and power; increase muscle pumps; and enhance mental drive and focus. Most other pre-workouts are underdosed and offer little more than stimulants that make you feel amped up and jittery yet provide little in the way of actual results. Pre JYM produces better workouts and better gains!', 50, 3024, '2023-05-09'),
(15, 'Food Supplements', 'amino.jpg', 'Optimum Nutrition Superior Amino 2222 Tablets', 'mino acids are concentrated in protein-rich foods such as meat, fish, and soybeans. Some people also take certain amino acids in supplement form as a natural way to boost athletic performance or improve mood. They\'re categorized as essential, conditionally essential, or nonessential depending on several factors.', 50, 1070, '2023-05-10'),
(16, 'Food Supplements', 'BBCOM.png', 'BODYBUILDING.COM SIGNATURE CREATINE MONOHYDRATE', 'Creatine monohydrate is the king of supplements: It’s unbeatable for its ability to help your body’s muscles perform at their best and grow to their fullest. Creatine may help delay fatigue too, which means that you can take your workouts to the limit. Our micronized creatine is designed to absorb quickly, so it can get to work when you need it most.', 50, 742, '2023-05-10'),
(17, 'Food Supplements', 'bcaa.jpg', 'BCAA 1000', 'BCAA 1000 contains a potent balance of Branched Chain Amino Acids, which are building blocks of muscle mass and size. Metabolized directly in the muscle, BCAAs, may improve nitrogen retention by sparing other amino acid groups for repair and rebuilding. BCAA supplements have been shown to build muscle, decrease muscle fatigue, and alleviate muscle soreness. They have also successfully been used in a hospital setting to prevent or slow muscle loss and to improve symptoms of liver disease', 50, 350, '2023-05-10'),
(18, 'Food Supplements', 'creatine.jpg', 'Creatine 100 Capsules', 'Creatine is a chemical found naturally in the body. It\'s also in red meat and seafood. It is often used to improve exercise performance and muscle mass.  Creatine is involved in making energy for muscles. About 95% of it is found in skeletal muscle. The majority of sports supplements in the US contain creatine. People who have lower creatine levels when they start taking creatine seem to get more benefit than people who start with higher levels.', 50, 785, '2023-05-10'),
(19, 'Food Supplements', 'mass.jpg', 'SERIOUS MASS', 'SERIOUS MASS is the ultimate muscle building and weight gain formula. With 1,250 calories per 2-scoop serving and 50 grams of protein to support muscle recovery, this powder makes the ideal post-workout and between meals shake for sizing up your goals. SERIOUS MASS provides you with the tools you need to support your weight gains goals.', 50, 1818, '2023-05-10'),
(20, 'Food Supplements', 'whey.jpg', 'Whey Protein', 'A powdered form of proteins taken from whey, which is the liquid left over when cheese is made from cow\'s milk. Whey protein powder is used to increase protein in the diet and is being studied for possible health benefits.', 50, 750, '2023-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `membershippackages`
--

CREATE TABLE `membershippackages` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `plan` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `startdate` date NOT NULL DEFAULT current_timestamp(),
  `enddate` date NOT NULL DEFAULT current_timestamp(),
  `timein` varchar(20) NOT NULL,
  `timeout` varchar(20) NOT NULL,
  `available` int(11) NOT NULL,
  `promo` varchar(10) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membershippackages`
--

INSERT INTO `membershippackages` (`id`, `category`, `plan`, `amount`, `startdate`, `enddate`, `timein`, `timeout`, `available`, `promo`, `description`) VALUES
(3, '', 'Starndard', 1500, '2022-09-30', '2022-10-30', '08:25:00 PM', '11:35:00 PM', 14, '', ''),
(4, '', 'premium', 800, '2023-02-01', '2023-02-25', '', '', 0, '', ''),
(6, '', 'Promo', 120, '2023-01-01', '2023-01-31', '', '', 5, 'Yes', ''),
(7, '', 'pro premium', 1200, '2022-11-01', '2022-11-30', '', '', 5, 'Yes', ''),
(9, '', 'Basic', 1000, '2023-02-01', '2023-02-28', '', '', 5, 'No', ''),
(17, 'Silver', 'Silver', 1000, '2023-05-08', '2023-05-31', '', '', 99, 'No', 'Silver'),
(24, 'Gold', 'Gold', 1200, '2023-05-09', '2023-05-31', '', '', 1000, 'Yes', 'Cardio '),
(25, 'Premium', 'Premium', 1200, '2023-10-31', '2023-11-20', '', '', 1000, 'Yes', 'Cardio '),
(26, 'Premium', 'Premium', 3000, '1970-01-01', '1970-01-01', '', '', 100, 'Yes', 'Cardio || Cardio');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_date` date NOT NULL DEFAULT current_timestamp(),
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `users_id`, `title`, `created_date`, `time`) VALUES
(11, 39, 'Expiration Reservation Date', '2022-11-29', ''),
(12, 39, 'Your Orders Confirmed', '2022-11-29', ''),
(13, 39, 'Your Orders Completed', '2022-11-29', ''),
(15, 39, 'Your Orders Confirmed', '2022-11-30', ''),
(16, 39, 'Your Orders Completed', '2022-11-30', ''),
(17, 39, 'Your Reservation Approved', '2022-11-30', ''),
(25, 39, 'Expiration Reservation Date', '2022-11-29', '13:51:13 PM'),
(26, 39, 'Expiration Reservation Date', '2022-11-30', '13:51:27 PM'),
(27, 39, 'Expiration Reservation Date', '2022-12-06', '12:30:51 PM'),
(28, 39, 'Expiration Reservation Date', '2022-12-07', '15:21:26 PM'),
(29, 52, 'Expiration Reservation Date', '2022-12-07', '17:04:54 PM'),
(30, 39, 'Your Orders Completed', '2022-12-07', ''),
(31, 39, 'Expiration Reservation Date', '2022-12-09', '10:39:59 AM'),
(32, 39, 'Expiration Reservation Date', '2022-12-13', '16:29:23 PM'),
(33, 1, 'Expiration Reservation Date', '2023-01-01', '17:36:17 PM'),
(34, 39, 'Expiration Reservation Date', '2023-02-02', '10:15:25 AM'),
(35, 39, 'Your Reservation Approved', '2023-02-02', ''),
(36, 39, 'Expiration Reservation Date', '2023-02-03', '18:01:16 PM'),
(37, 53, 'Expiration Reservation Date', '2023-02-03', '19:15:40 PM'),
(38, 53, 'Your Reservation Approved', '2023-02-03', ''),
(39, 53, 'Your Orders Confirmed', '2023-02-03', ''),
(40, 53, 'Your Orders Completed', '2023-02-03', ''),
(41, 1, 'Expiration Reservation Date', '2023-02-16', '23:09:58 PM'),
(42, 52, 'Expiration Reservation Date', '2023-02-17', '03:18:51 AM'),
(43, 3, 'Expiration Reservation Date', '2023-02-17', '10:51:06 AM'),
(44, 3, 'Expiration Reservation Date', '2023-02-18', '01:31:22 AM'),
(45, 3, 'Your Orders Completed', '2023-02-18', ''),
(46, 3, 'Your Orders Confirmed', '2023-02-18', ''),
(47, 1, 'Expiration Reservation Date', '2023-02-18', '01:34:12 AM'),
(48, 3, 'Your Orders Completed', '2023-02-18', ''),
(49, 3, 'Your Reservation Approved', '2023-02-18', ''),
(50, 3, 'Your Reservation Approved', '2023-02-18', ''),
(51, 3, 'Expiration Reservation Date', '2023-02-19', '23:29:36 PM'),
(52, 1, 'Expiration Reservation Date', '2023-02-19', '23:33:26 PM'),
(53, 3, 'Your Reservation Approved', '2023-02-19', ''),
(54, 1, 'Your Reservation Approved', '2023-02-19', ''),
(55, 5, 'Expiration Reservation Date', '2023-02-25', '19:55:55 PM'),
(56, 6, 'Expiration Reservation Date', '2023-02-25', '20:56:34 PM'),
(57, 3, 'Expiration Reservation Date', '2023-02-25', '23:18:35 PM'),
(58, 3, 'Expiration Reservation Date', '2023-02-26', '00:04:57 AM'),
(77, 26, 'Your Reservation Approved', '2023-04-26', ''),
(78, 26, 'Your Orders Completed', '2023-04-27', ''),
(79, 2, 'Your Reservation Approved', '2023-05-04', ''),
(80, 39, 'Your Orders Confirmed', '2023-05-05', ''),
(81, 41, 'Your Reservation Approved', '2023-05-05', ''),
(82, 39, 'Your Orders Confirmed', '2023-05-07', ''),
(83, 39, 'Your Orders Completed', '2023-05-07', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL,
  `customers_code` varchar(100) NOT NULL,
  `products_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `customers_code`, `products_id`, `users_id`, `quantity`, `price`, `total`) VALUES
(9, '0575eec595a7', 137, 39, 3, 130, 390),
(10, '0575eec595a7', 138, 39, 4, 120, 480),
(11, 'd54502021cf5', 138, 39, 2, 120, 240),
(12, 'd54502021cf5', 139, 39, 3, 100, 300),
(13, '1a7ccb7a4d13', 137, 39, 1, 130, 130),
(14, '1a7ccb7a4d13', 138, 39, 1, 120, 120),
(15, 'acffb8d4d705', 138, 48, 1, 120, 120),
(16, 'e79c65f0b30c', 138, 39, 1, 120, 120),
(17, 'ce613e8e20be', 141, 39, 1, 89, 89),
(18, 'ce613e8e20be', 142, 39, 1, 79, 79),
(19, 'e85edd5a92e9', 142, 39, 3, 79, 237),
(20, 'e85edd5a92e9', 143, 39, 4, 120, 480),
(21, '596198fa1dab', 141, 39, 1, 89, 89),
(22, '596198fa1dab', 142, 39, 2, 79, 158),
(23, '173b70f01aab', 141, 39, 1, 89, 89),
(24, '173b70f01aab', 142, 39, 1, 79, 79),
(25, 'a9146cdd417b', 141, 39, 4, 89, 356),
(26, 'a9146cdd417b', 142, 39, 3, 79, 237),
(27, '74cc6e3b666b', 142, 39, 2, 79, 158),
(28, '74cc6e3b666b', 143, 39, 2, 120, 240),
(29, '64e558c3112b', 142, 39, 1, 79, 79),
(30, '64e558c3112b', 143, 39, 1, 120, 120),
(31, '61900a9420c2', 142, 39, 1, 79, 79),
(32, 'c4db101076fd', 141, 53, 2, 89, 178),
(33, '9872ee791e15', 141, 3, 1, 89, 89),
(40, '320932ae6b7e', 147, 26, 3, 100, 300),
(41, '7a2dea5c41de', 147, 26, 4, 100, 400),
(42, '26889e28e0c2', 147, 26, 3, 100, 300),
(43, '331074eb2dda', 147, 26, 1, 100, 100),
(44, 'e7031cea4868', 147, 39, 1, 100, 100),
(45, '14f39c258e0e', 151, 39, 11, 100, 1100);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `payer_id` varchar(100) NOT NULL,
  `payer_email` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency` varchar(50) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `users_id` int(11) NOT NULL,
  `customers_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `payment_id`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`, `users_id`, `customers_code`) VALUES
(14, 'PAYID-0ZVVFT637VJRJT04IEFHY7OK', 'NVLZHD4PAWTDS', 'sorar384@gmail.com', 1210, 'PHP', 'approved', 29, 'LLYMY3R2'),
(15, 'PAYID-W43YCGVR4ETPMFYVWVMJFYSJ', '74A5AM7PQFH6Z', 'sorar384@gmail.com', 120, 'PHP', 'approved', 29, 'PDWO2KA5'),
(16, 'PAYID-MMEY7VI6800546852849972U', 'VAYXD2MT4FXEE', 'sb-5gl2f3992677@personal.example.com', 120, 'PHP', 'approved', 29, 'JFSRC4EJ'),
(17, 'PAYID-XIKT4TQQOXJ42MEGCSE5V264', 'LA3HK6DEJCORN', 'test@email.com', 0, 'PHP', 'approved', 35, '4Y4XBBG5'),
(18, 'PAYID-3JX70LQXUOD05SEEGC6VDLFO', 'PBXLYD4MVAUQ5', 'sorar@email.com', 1030, 'PHP', 'approved', 36, 'J3Z4UT0R'),
(20, 'PAYID-D3FNWUMPIJEFWPNEZP23H7OO', '2EU2ZHHHSKMW7', 'sorar@email.com', 2000, '', 'approved', 36, 'G6UBQNWU');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `products_img` text NOT NULL,
  `products_name` varchar(50) NOT NULL,
  `products_description` text NOT NULL,
  `products__quantity` int(11) NOT NULL,
  `products_price` int(11) NOT NULL,
  `products_total` int(11) NOT NULL,
  `products_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `inventory_id`, `category`, `products_img`, `products_name`, `products_description`, `products__quantity`, `products_price`, `products_total`, `products_date_created`, `status`) VALUES
(141, 3, '', 'fruit-tea.png', 'Fruit Tea', 'adasvcxv', 0, 89, 0, '2022-11-25 14:44:29', 0),
(142, 4, '', 'special-tea.png', 'Special Tea', 'Special Tea', 36, 79, 0, '2022-11-29 11:09:41', 0),
(143, 2, '', '115-1155804_pearl-milk-tea-melon-bubble-tea-transparent.png', 'Milktea', 'fsdfsdfsdf', 43, 120, 0, '2022-11-29 11:09:45', 0),
(154, 14, 'Food Supplements', 'JYM.png', 'Pre JYM High-Performance Pre-Workout', 'Pre JYM defined what a true pre-workout should be when it launched in 2013. Its 14 active ingredients deliver energy for more intense workouts; boost muscle strength and power; increase muscle pumps; and enhance mental drive and focus. Most other pre-workouts are underdosed and offer little more than stimulants that make you feel amped up and jittery yet provide little in the way of actual results. Pre JYM produces better workouts and better gains!', 50, 3024, 0, '2023-05-10 07:39:22', 0),
(155, 15, 'Food Supplements', 'amino.jpg', 'Optimum Nutrition Superior Amino 2222 Tablets', 'mino acids are concentrated in protein-rich foods such as meat, fish, and soybeans. Some people also take certain amino acids in supplement form as a natural way to boost athletic performance or improve mood. They\'re categorized as essential, conditionally essential, or nonessential depending on several factors.', 50, 1070, 0, '2023-05-10 07:39:32', 0),
(156, 16, 'Food Supplements', 'BBCOM.png', 'BODYBUILDING.COM SIGNATURE CREATINE MONOHYDRATE', 'Creatine monohydrate is the king of supplements: It’s unbeatable for its ability to help your body’s muscles perform at their best and grow to their fullest. Creatine may help delay fatigue too, which means that you can take your workouts to the limit. Our micronized creatine is designed to absorb quickly, so it can get to work when you need it most.', 50, 742, 0, '2023-05-10 07:39:41', 0),
(157, 17, 'Food Supplements', 'bcaa.jpg', 'BCAA 1000', 'BCAA 1000 contains a potent balance of Branched Chain Amino Acids, which are building blocks of muscle mass and size. Metabolized directly in the muscle, BCAAs, may improve nitrogen retention by sparing other amino acid groups for repair and rebuilding. BCAA supplements have been shown to build muscle, decrease muscle fatigue, and alleviate muscle soreness. They have also successfully been used in a hospital setting to prevent or slow muscle loss and to improve symptoms of liver disease', 50, 350, 0, '2023-05-10 07:39:48', 0),
(158, 18, 'Food Supplements', 'creatine.jpg', 'Creatine 100 Capsules', 'Creatine is a chemical found naturally in the body. It\'s also in red meat and seafood. It is often used to improve exercise performance and muscle mass.  Creatine is involved in making energy for muscles. About 95% of it is found in skeletal muscle. The majority of sports supplements in the US contain creatine. People who have lower creatine levels when they start taking creatine seem to get more benefit than people who start with higher levels.', 50, 785, 0, '2023-05-10 07:39:57', 0),
(159, 19, 'Food Supplements', 'mass.jpg', 'SERIOUS MASS', 'SERIOUS MASS is the ultimate muscle building and weight gain formula. With 1,250 calories per 2-scoop serving and 50 grams of protein to support muscle recovery, this powder makes the ideal post-workout and between meals shake for sizing up your goals. SERIOUS MASS provides you with the tools you need to support your weight gains goals.', 50, 1818, 0, '2023-05-10 07:40:04', 0),
(160, 20, 'Food Supplements', 'whey.jpg', 'Whey Protein', 'A powdered form of proteins taken from whey, which is the liquid left over when cheese is made from cow\'s milk. Whey protein powder is used to increase protein in the diet and is being studied for possible health benefits.', 50, 750, 0, '2023-05-10 07:40:11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `membershippackages_id` int(11) NOT NULL,
  `instructors_id` int(11) NOT NULL,
  `startdate` date NOT NULL DEFAULT current_timestamp(),
  `enddate` date NOT NULL DEFAULT current_timestamp(),
  `qrcode` text NOT NULL,
  `status` int(1) NOT NULL,
  `proof` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp(),
  `notif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `users_id`, `membershippackages_id`, `instructors_id`, `startdate`, `enddate`, `qrcode`, `status`, `proof`, `date_created`, `notif`) VALUES
(4, 39, 2, 13, '2022-09-01', '2022-09-21', '', 2, '1 (2).png', '2022-09-22', 0),
(24, 48, 7, 13, '2022-11-01', '2022-11-29', '', 2, 'index.jpg', '2022-11-22', 0),
(26, 39, 7, 13, '2022-11-01', '2022-11-30', 'd2f82fbbfe0b8f1b', 1, 'index.jpg', '2022-11-28', 0),
(27, 39, 2, 13, '2022-12-01', '2023-01-02', '', 2, 'index.jpg', '2022-12-07', 0),
(28, 39, 4, 13, '2023-02-01', '2023-02-25', 'b6e4cc8189f58da9', 1, 'caramel-milktea.png', '2023-02-02', 0),
(29, 53, 9, 13, '2023-02-01', '2023-02-02', '', 2, 'caramel-milktea.png', '2023-02-03', 0),
(30, 53, 9, 13, '2023-02-01', '2023-02-28', '', 0, 'fruit-tea.png', '2023-02-03', 0),
(31, 3, 9, 13, '2023-02-01', '2023-02-28', '815bba004e826705', 1, '1 (2).png', '2023-02-18', 0),
(32, 1, 4, 14, '2023-02-01', '2023-02-25', '262a8515aded411d', 1, '', '2023-02-19', 0),
(49, 39, 17, 28, '2023-05-08', '2023-05-31', '', 0, '', '2023-05-09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `total`, `month`, `year`) VALUES
(21, 500, 11, 2022),
(22, 500, 11, 2022),
(23, 800, 2, 2023),
(24, 1000, 2, 2023),
(25, 1000, 2, 2023),
(26, 1000, 2, 2023),
(27, 1000, 2, 2023),
(28, 800, 2, 2023),
(35, 1000, 4, 2023),
(36, 2200, 5, 2023),
(37, 2200, 5, 2023),
(38, 200, 7, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `reserved`
--

CREATE TABLE `reserved` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `membershippackages_id` int(11) NOT NULL,
  `instructors_id` int(11) NOT NULL,
  `startdate` date NOT NULL DEFAULT current_timestamp(),
  `enddate` date NOT NULL DEFAULT current_timestamp(),
  `qrcode` text NOT NULL,
  `status` int(1) NOT NULL,
  `proof` text NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserved`
--

INSERT INTO `reserved` (`id`, `users_id`, `membershippackages_id`, `instructors_id`, `startdate`, `enddate`, `qrcode`, `status`, `proof`, `date_created`) VALUES
(13, 53, 4, 14, '2023-02-01', '2023-02-25', '', 0, '', '2023-02-03'),
(14, 52, 9, 13, '2023-02-01', '2023-02-28', '', 0, '', '2023-02-17'),
(15, 3, 9, 13, '2023-02-01', '2023-02-28', '', 0, '1 (2).png', '2023-02-17'),
(19, 39, 17, 27, '2023-04-27', '2024-04-27', '', 0, '', '2023-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `id` int(11) NOT NULL,
  `revenue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `revenue`
--

INSERT INTO `revenue` (`id`, `revenue`) VALUES
(1, 905500);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(5, '1234', 5, 'dasdasd', 1683561642);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `contact_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timeintimeout`
--

CREATE TABLE `timeintimeout` (
  `id` int(11) NOT NULL,
  `qrcode` text NOT NULL,
  `users_id` int(11) NOT NULL,
  `timein` varchar(20) NOT NULL,
  `timeout` varchar(20) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeintimeout`
--

INSERT INTO `timeintimeout` (`id`, `qrcode`, `users_id`, `timein`, `timeout`, `date`) VALUES
(17, '7c4f2a5b1f9bc094', 39, '01:55:44 PM', '01:56:44 PM', '2022-11-29'),
(18, '7c4f2a5b1f9bc094', 39, '01:56:33 PM', '01:56:44 PM', '2022-11-30'),
(19, '4a51c307313ae333', 53, '07:22:39 PM', '07:22:58 PM', '2023-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_email_address` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `passwordtxt` varchar(50) NOT NULL,
  `user_contact` varchar(15) NOT NULL,
  `user_address` text NOT NULL,
  `code` int(11) NOT NULL,
  `type` int(1) NOT NULL DEFAULT 1,
  `loginstatus` int(1) NOT NULL,
  `qrcode` text NOT NULL,
  `delete_status` int(1) NOT NULL,
  `verification_code` varchar(255) NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `login_code` varchar(255) NOT NULL,
  `login_verified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `img`, `user_first_name`, `user_last_name`, `user_email_address`, `password`, `passwordtxt`, `user_contact`, `user_address`, `code`, `type`, `loginstatus`, `qrcode`, `delete_status`, `verification_code`, `email_verified_at`, `login_code`, `login_verified_at`) VALUES
(2, '326263936_2188170248051950_6130568741775408686_n (2).jpg', 'Christian Lumba ', 'Villanueva', 'admin@admin.com', '$2y$10$np8ZGNPgrIhYPtba/zpG2ukLg3XJzvkAKN1SUvqT2RgS43j0rMeAu', 'admin', '0', '', 22198, 0, 1, '0c5bc914e9e10248', 0, '', NULL, '', NULL),
(27, '', 'Sample', 'Sample', 'staff1@gmail.com', '$2y$10$dLyXG3eDFuYcC7//lqsfye8gfEmt3Udecb6qZQ7udRfQ9v6.tPd3C', 'wakipikik123@', '11111111111', '', 0, 1, 1, '', 0, '', NULL, '', NULL),
(28, '', 'Samplee', 'Sample', 'sample2@gmail.com', '$2y$10$bBloXuXyqzaWpeinbw2uSeEBl79OiMAz0wZHz01RJg6q94X4cKpym', '123', '', '', 0, 2, 0, '', 0, '', NULL, '', NULL),
(29, '326263936_2188170248051950_6130568741775408686_n (2).jpg', 'matt', 'arroyo', 'spaedey@gmail.com', '$2y$10$/1TqWWm1HHTks7T3l3zTFO5nIgjcVVDVV/0Xzpnm3RG18fchDtrCi', '12345678m', '', '', 0, 2, 0, '', 0, '', NULL, '299473', '2023-05-04 15:44:44'),
(37, '', 'louise', 'ruzzele', 'louiseruzzelep@gmail.com', '$2y$10$WGzuzyqQOuC4RlSeMfgug.vzyPre4ujny6XTwAF9rr6FPbu0SDHbK', '123', '', '', 0, 2, 0, '', 0, '398921', '2023-04-30 11:27:54', '717841', '2023-04-30 11:28:23'),
(39, '326263936_2188170248051950_6130568741775408686_n (2).jpg', 'Sample3', 'wadwada', 'wakipikik123@gmail.com', '$2y$10$IFVEhqOLR4P0CUsIMcU8Tubndxe/f.v24UhPnP1PlTuaYBC0kSuD.', '213', '', '', 0, 2, 0, '', 0, '270266', NULL, '349739', '2023-07-16 20:01:05'),
(40, '', 'Jinnel', 'Dungo', 'jdungo.a12034841@umak.edu.ph', '$2y$10$V4RsS9ax5Ym9R.CJ3GHnGOKK78Ht0NeIpQN5X8bAFaP4PJrjrYByi', '12345', '', '', 0, 2, 0, '', 0, '730476', '2023-05-03 15:23:27', '196516', '2023-05-03 15:25:11'),
(41, '', 'Christian  ', 'Villanueva', 'christianlumba23@gmail.com', '$2y$10$mQ8wN66RWOuyUKUJHKqXLOPfsGRB7590IC56v9YrOE/sgNcJjDLbi', '213', '', '', 0, 2, 0, 'b87a9083b8b3db18', 0, '287197', '2023-05-05 13:16:03', '996336', '2023-05-05 13:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `windowpayment`
--

CREATE TABLE `windowpayment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `windowpayment`
--

INSERT INTO `windowpayment` (`id`, `name`, `amount`, `date_created`) VALUES
(0, '111221312312', 211, '2023-07-16'),
(6, 'malik', 200, '2022-09-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audittrail`
--
ALTER TABLE `audittrail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_code`
--
ALTER TABLE `chat_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers_info`
--
ALTER TABLE `customers_info`
  ADD PRIMARY KEY (`customers_info_id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gcash`
--
ALTER TABLE `gcash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Indexes for table `membershippackages`
--
ALTER TABLE `membershippackages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserved`
--
ALTER TABLE `reserved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `timeintimeout`
--
ALTER TABLE `timeintimeout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `windowpayment`
--
ALTER TABLE `windowpayment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audittrail`
--
ALTER TABLE `audittrail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1064;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `chat_code`
--
ALTER TABLE `chat_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customers_info`
--
ALTER TABLE `customers_info`
  MODIFY `customers_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gcash`
--
ALTER TABLE `gcash`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `membershippackages`
--
ALTER TABLE `membershippackages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `reserved`
--
ALTER TABLE `reserved`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `revenue`
--
ALTER TABLE `revenue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
