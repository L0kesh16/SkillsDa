-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2023 at 06:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillsda`
--

-- --------------------------------------------------------

--
-- Table structure for table `buzzer`
--

CREATE TABLE `buzzer` (
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `buzzervalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buzzer`
--

INSERT INTO `buzzer` (`time`, `buzzervalue`) VALUES
('2023-04-09 08:19:55', 1),
('2023-04-09 08:36:46', 0),
('2023-04-09 08:36:55', 1),
('2023-04-09 08:36:58', 0),
('2023-04-09 08:37:54', 1),
('2023-04-09 08:49:16', 0),
('2023-04-09 10:59:25', 1),
('2023-04-09 10:59:32', 0),
('2023-04-09 17:08:41', 1),
('2023-04-09 17:08:42', 0),
('2023-04-11 09:01:16', 1),
('2023-04-15 10:45:39', 0),
('2023-04-15 10:45:40', 1),
('2023-04-22 04:42:57', 0),
('2023-04-22 04:43:08', 1),
('2023-04-22 04:43:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `temp` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`temp`, `value`) VALUES
(10, 100),
(20, 10),
(30, 60),
(0, 20),
(50, 80);

-- --------------------------------------------------------

--
-- Table structure for table `fire`
--

CREATE TABLE `fire` (
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `firevalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fire`
--

INSERT INTO `fire` (`time`, `firevalue`) VALUES
('2023-04-09 08:35:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gas`
--

CREATE TABLE `gas` (
  `SNO` int(11) NOT NULL,
  `gasvalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gas`
--

INSERT INTO `gas` (`SNO`, `gasvalue`) VALUES
(1, 188);

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE `industry` (
  `sno` int(11) NOT NULL,
  `vibration` int(11) NOT NULL,
  `pressure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`sno`, `vibration`, `pressure`) VALUES
(1, 177, 44);

-- --------------------------------------------------------

--
-- Table structure for table `moisturesensorgraph`
--

CREATE TABLE `moisturesensorgraph` (
  `SNO` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `moisturesensorgraph`
--

INSERT INTO `moisturesensorgraph` (`SNO`, `x`, `y`) VALUES
(1, 10, 24),
(2, 20, 524),
(3, 30, 224),
(4, 40, 214),
(5, 50, 924);

-- --------------------------------------------------------

--
-- Table structure for table `movement`
--

CREATE TABLE `movement` (
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `movementstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movement`
--

INSERT INTO `movement` (`time`, `movementstatus`) VALUES
('2023-04-09 08:45:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ph`
--

CREATE TABLE `ph` (
  `SNO` int(11) NOT NULL,
  `ph` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ph`
--

INSERT INTO `ph` (`SNO`, `ph`) VALUES
(1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `pump`
--

CREATE TABLE `pump` (
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `pumpvalue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pump`
--

INSERT INTO `pump` (`time`, `pumpvalue`) VALUES
('2023-04-08 16:49:40', 1),
('2023-04-08 16:54:44', 0),
('2023-04-08 17:38:41', 1),
('2023-04-08 17:38:57', 0),
('2023-04-08 17:38:58', 1),
('2023-04-08 17:46:21', 0),
('2023-04-08 17:47:06', 1),
('2023-04-08 17:48:55', 0),
('2023-04-08 17:48:56', 1),
('2023-04-08 17:50:46', 0),
('2023-04-08 17:50:48', 1),
('2023-04-08 17:51:15', 0),
('2023-04-08 17:53:59', 1),
('2023-04-08 17:54:57', 0),
('2023-04-08 17:55:40', 1),
('2023-04-08 17:55:44', 0),
('2023-04-08 17:56:09', 1),
('2023-04-08 17:56:13', 0),
('2023-04-08 17:57:47', 1),
('2023-04-08 17:57:48', 0),
('2023-04-08 17:59:39', 1),
('2023-04-08 18:01:08', 0),
('2023-04-08 18:05:27', 1),
('2023-04-08 18:05:28', 0),
('2023-04-08 18:05:29', 1),
('2023-04-08 18:05:35', 0),
('2023-04-08 18:06:15', 1),
('2023-04-08 18:06:16', 0),
('2023-04-08 18:06:22', 1),
('2023-04-08 18:07:14', 0),
('2023-04-08 18:08:31', 1),
('2023-04-08 18:08:33', 0),
('2023-04-08 18:10:00', 1),
('2023-04-08 18:10:08', 0),
('2023-04-08 18:16:42', 1),
('2023-04-08 18:16:47', 0),
('2023-04-09 02:11:41', 1),
('2023-04-09 02:20:55', 0),
('2023-04-09 02:28:20', 1),
('2023-04-09 17:08:54', 0),
('2023-04-09 17:08:55', 1),
('2023-04-15 10:45:56', 0),
('2023-04-15 10:45:57', 1),
('2023-04-22 04:41:19', 0),
('2023-04-22 04:43:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smartenvironment`
--

CREATE TABLE `smartenvironment` (
  `SNO` int(11) NOT NULL,
  `dust` int(11) NOT NULL,
  `gas` int(11) NOT NULL,
  `air` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `smartenvironment`
--

INSERT INTO `smartenvironment` (`SNO`, `dust`, `gas`, `air`) VALUES
(1, 34, 78, 12);

-- --------------------------------------------------------

--
-- Table structure for table `smarthealth`
--

CREATE TABLE `smarthealth` (
  `SNO` int(11) NOT NULL,
  `heart` int(11) NOT NULL,
  `temperature` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `smarthealth`
--

INSERT INTO `smarthealth` (`SNO`, `heart`, `temperature`) VALUES
(1, 80, 37.7);

-- --------------------------------------------------------

--
-- Table structure for table `smarthome`
--

CREATE TABLE `smarthome` (
  `doortime` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `door` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `smarthome`
--

INSERT INTO `smarthome` (`doortime`, `door`) VALUES
('2023-03-27 14:03:53.450120', 7),
('2023-03-27 14:03:53.634910', 0),
('2023-03-27 14:03:54.103090', 7),
('2023-03-27 14:03:54.414364', 0),
('2023-03-27 14:03:54.800635', 7),
('2023-03-27 14:04:41.429065', 0),
('2023-03-27 14:04:42.083004', 7),
('2023-03-27 14:06:53.334693', 0),
('2023-03-27 14:09:38.542266', 1),
('2023-03-27 14:10:14.290450', 0),
('2023-03-27 14:10:14.866953', 1),
('2023-03-27 14:10:15.473052', 0),
('2023-03-27 17:36:06.874985', 1),
('2023-03-28 14:00:53.465230', 0),
('2023-03-29 14:13:44.064694', 1),
('2023-03-29 14:16:22.525785', 0),
('2023-03-29 14:21:21.371497', 1),
('2023-03-29 15:09:52.360962', 0),
('2023-03-29 15:11:14.619743', 1),
('2023-03-29 15:11:24.904882', 0),
('2023-03-29 15:35:54.556333', 1),
('2023-03-29 15:36:05.047598', 0),
('2023-03-29 15:36:12.982078', 1),
('2023-03-29 15:57:33.594686', 0),
('2023-03-29 15:57:37.509667', 1),
('2023-03-29 15:58:49.354868', 0),
('2023-03-29 15:59:57.880761', 1),
('2023-03-29 15:59:58.334962', 0),
('2023-03-29 15:59:59.757704', 1),
('2023-03-29 16:00:04.628442', 0),
('2023-03-29 16:00:12.365726', 1),
('2023-03-29 16:00:35.775800', 0),
('2023-03-29 16:00:57.636310', 1),
('2023-03-29 16:01:55.775249', 0),
('2023-03-29 16:02:42.554752', 1),
('2023-03-29 16:03:51.334138', 0),
('2023-03-29 16:09:07.961281', 1),
('2023-03-29 16:09:38.327777', 0),
('2023-03-29 16:09:59.874534', 1),
('2023-03-29 16:10:38.723252', 0),
('2023-03-29 16:12:38.910652', 1),
('2023-03-29 16:13:46.106370', 0),
('2023-03-29 16:17:23.857746', 1),
('2023-03-29 16:17:24.247035', 0),
('2023-03-29 16:18:16.207266', 1),
('2023-03-29 16:36:03.766996', 0),
('2023-04-05 07:08:08.476274', 1),
('2023-04-05 07:08:13.090864', 0),
('2023-04-07 07:31:46.252168', 1),
('2023-04-09 08:15:26.605981', 0),
('2023-04-09 08:16:50.818063', 1),
('2023-04-09 08:36:49.033908', 0),
('2023-04-09 08:36:52.359356', 1),
('2023-04-09 08:43:28.410427', 0),
('2023-04-09 08:48:48.945071', 1),
('2023-04-09 08:48:49.668903', 0),
('2023-04-09 08:49:17.629184', 1),
('2023-04-09 10:59:26.232685', 0),
('2023-04-09 10:59:30.976469', 1),
('2023-04-15 10:45:36.581801', 0),
('2023-04-15 10:45:37.639270', 1),
('2023-04-22 04:42:55.139396', 0),
('2023-04-22 04:43:09.744253', 1);

-- --------------------------------------------------------

--
-- Table structure for table `smartparking`
--

CREATE TABLE `smartparking` (
  `SNO` int(10) NOT NULL,
  `Slot 1` int(5) NOT NULL,
  `Slot 2` int(5) NOT NULL,
  `Slot 3` int(5) NOT NULL,
  `Slot 4` int(5) NOT NULL,
  `Slot 5` int(5) NOT NULL,
  `Slot 6` int(5) NOT NULL,
  `Slot 7` int(5) NOT NULL,
  `Slot 8` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `smartparking`
--

INSERT INTO `smartparking` (`SNO`, `Slot 1`, `Slot 2`, `Slot 3`, `Slot 4`, `Slot 5`, `Slot 6`, `Slot 7`, `Slot 8`) VALUES
(1, 2, 0, 0, 1, 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `solenoid`
--

CREATE TABLE `solenoid` (
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `solenoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solenoid`
--

INSERT INTO `solenoid` (`time`, `solenoid`) VALUES
('2023-04-08 17:45:09', 0),
('2023-04-08 17:59:33', 1),
('2023-04-09 02:17:43', 0),
('2023-04-09 02:27:59', 1),
('2023-04-09 02:28:25', 0),
('2023-04-09 02:32:28', 1),
('2023-04-15 10:45:54', 0),
('2023-04-15 10:45:59', 1),
('2023-04-22 04:41:23', 0),
('2023-04-22 04:41:23', 1),
('2023-04-22 04:41:24', 0),
('2023-04-22 04:43:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `email` varchar(100) NOT NULL,
  `home` varchar(10) NOT NULL DEFAULT 'none',
  `agri` varchar(10) NOT NULL DEFAULT 'none',
  `health` varchar(10) NOT NULL DEFAULT 'none',
  `environment` varchar(10) NOT NULL DEFAULT 'none',
  `parking` varchar(10) NOT NULL DEFAULT 'none',
  `power` varchar(10) NOT NULL DEFAULT 'none',
  `traffic` varchar(10) NOT NULL DEFAULT 'none',
  `industry` varchar(10) NOT NULL DEFAULT 'none',
  `water-treatment` varchar(10) DEFAULT 'none',
  `waste-management` varchar(10) NOT NULL DEFAULT 'none',
  `data-center` varchar(10) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`email`, `home`, `agri`, `health`, `environment`, `parking`, `power`, `traffic`, `industry`, `water-treatment`, `waste-management`, `data-center`) VALUES
('demo', 'block', 'block', 'block', 'block', 'block', 'block', 'block', 'block', 'block', 'block', 'block'),
('lokesh16', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('test', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('varathan16', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('1', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('2', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('3', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('4', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('5', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('sec20it112', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none'),
('admin', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `temperaturesensorgraph`
--

CREATE TABLE `temperaturesensorgraph` (
  `SNO` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temperaturesensorgraph`
--

INSERT INTO `temperaturesensorgraph` (`SNO`, `x`, `y`) VALUES
(1, 10, 978),
(1, 10, 978),
(1, 10, 978),
(4, 20, 11),
(5, 30, 142),
(6, 40, 459),
(7, 50, 888);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `Username` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`Username`, `Password`, `email`, `name`, `role`) VALUES
('demo', 'test', 'Demo@gmail.com', 'Demo', 'student'),
('lokesh16', 'Lokesh@123', 'lokiilokesh16@gmail.com', 'Lokesh', 'student'),
('test', 'test', 'test@123gmail.com', 'test', 'student'),
('varathan16', 'test', 'lokiilokesh16@gmail.com', 'Varathan', 'student'),
('1', '1', '1@g', '1', 'student'),
('2', '2', '2@g', '2', 'student'),
('3', '2', '2@g', '2', 'student'),
('4', '2', '4@g', '4', 'student'),
('5', '5', '5@g', '5', 'student'),
('sec20it112', 'asd', 'asdsd@gmail.com', 'main', 'student'),
('admin', 'admin', 'admin@gmail.com', 'admin', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `waterlevel`
--

CREATE TABLE `waterlevel` (
  `value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waterlevel`
--

INSERT INTO `waterlevel` (`value`) VALUES
(68);

-- --------------------------------------------------------

--
-- Table structure for table `waterquality`
--

CREATE TABLE `waterquality` (
  `SNO` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `waterquality`
--

INSERT INTO `waterquality` (`SNO`, `x`, `y`) VALUES
(1, 10, 100),
(2, 20, 155),
(3, 30, 400),
(4, 40, 777),
(5, 50, 121);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
