-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 01:55 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reportgeneration`
--

-- --------------------------------------------------------

--
-- Table structure for table `amarks`
--

CREATE TABLE `amarks` (
  `mark_id` int(11) NOT NULL,
  `Reg_no` varchar(100) NOT NULL,
  `sub_cod` varchar(100) NOT NULL,
  `term_id` int(11) NOT NULL,
  `mid_term` varchar(10) NOT NULL,
  `end_term` varchar(10) NOT NULL,
  `total` int(11) NOT NULL,
  `grade` varchar(100) NOT NULL,
  `initials` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amarks`
--

INSERT INTO `amarks` (`mark_id`, `Reg_no`, `sub_cod`, `term_id`, `mid_term`, `end_term`, `total`, `grade`, `initials`) VALUES
(1, 'PP/19/S5A/01', 'A01/1', 1, '21', '63', 84, 'D 1', 'AJ'),
(2, 'PP/19/S5A/01', 'A01/2', 1, '21', '63', 84, 'D 1', 'AJ'),
(3, 'PP/19/S5A/01', 'S07/1', 1, '25', '49', 74, 'D 2', 'AJ'),
(4, 'PP/19/S5A/01', 'S07/2', 1, '18', '46', 64, 'C 4', 'AJ'),
(5, 'PP/19/S5A/01', 'A02/1', 1, '21', '63', 84, 'D 1', 'AJ'),
(6, 'PP/19/S5A/01', 'A02/2', 1, '21', '63', 84, 'D 1', 'AJ'),
(7, 'PP/19/S5A/01', 'A02/3', 1, '21', '63', 84, 'D 1', 'AJ'),
(8, 'PP/19/S5A/01', 'A05', 1, '21', '63', 84, 'D 1', 'AJ'),
(9, 'PP/19/S5A/01', 'B01', 1, '21', '63', 84, 'D 1', 'AJ'),
(10, 'PP/19/S5A/01', 'A01/1', 2, '', '', 0, '', ''),
(11, 'PP/19/S5A/01', 'A01/2', 2, '', '', 0, '', ''),
(12, 'PP/19/S5A/01', 'S07/1', 2, '', '', 0, '', ''),
(13, 'PP/19/S5A/01', 'S07/2', 2, '', '', 0, '', ''),
(14, 'PP/19/S5A/01', 'A02/1', 2, '', '', 0, '', ''),
(15, 'PP/19/S5A/01', 'A02/2', 2, '', '', 0, '', ''),
(16, 'PP/19/S5A/01', 'A02/3', 2, '', '', 0, '', ''),
(17, 'PP/19/S5A/01', 'A05', 2, '', '', 0, '', ''),
(18, 'PP/19/S5A/01', 'B01', 2, '', '', 0, '', ''),
(19, 'PP/19/S5A/01', 'A01/1', 3, '', '', 0, '', ''),
(20, 'PP/19/S5A/01', 'A01/2', 3, '', '', 0, '', ''),
(21, 'PP/19/S5A/01', 'S07/1', 3, '', '', 0, '', ''),
(22, 'PP/19/S5A/01', 'S07/2', 3, '', '', 0, '', ''),
(23, 'PP/19/S5A/01', 'A02/1', 3, '', '', 0, '', ''),
(24, 'PP/19/S5A/01', 'A02/2', 3, '', '', 0, '', ''),
(25, 'PP/19/S5A/01', 'A02/3', 3, '', '', 0, '', ''),
(26, 'PP/19/S5A/01', 'A05', 3, '', '', 0, '', ''),
(27, 'PP/19/S5A/01', 'B01', 3, '', '', 0, '', ''),
(28, 'PP/19/S5S/01', 'S06/1', 1, '21', '63', 84, 'D 1', 'AJ'),
(29, 'PP/19/S5S/01', 'S06/2', 1, '21', '63', 84, 'D 1', 'AJ'),
(30, 'PP/19/S5S/01', 'S06/3', 1, '21', '63', 84, 'D 1', 'AJ'),
(31, 'PP/19/S5S/01', 'S07/1', 1, '19', '54', 73, 'D 2', 'AJ'),
(32, 'PP/19/S5S/01', 'S07/2', 1, '23', '54', 77, 'D 1', 'AJ'),
(33, 'PP/19/S5S/01', 'S05/1', 1, '21', '63', 84, 'D 1', 'AJ'),
(34, 'PP/19/S5S/01', 'S05/2', 1, '21', '63', 84, 'D 1', 'AJ'),
(35, 'PP/19/S5S/01', 'S04/1', 1, '21', '63', 84, 'D 1', 'AJ'),
(36, 'PP/19/S5S/01', 'S04/2', 1, '21', '63', 84, 'D 1', 'AJ'),
(37, 'PP/19/S5S/01', 'B01', 1, '21', '63', 84, 'D 1', 'AJ'),
(38, 'PP/19/S5S/01', 'S06/1', 2, '', '', 0, '', ''),
(39, 'PP/19/S5S/01', 'S06/2', 2, '', '', 0, '', ''),
(40, 'PP/19/S5S/01', 'S06/3', 2, '', '', 0, '', ''),
(41, 'PP/19/S5S/01', 'S07/1', 2, '', '', 0, '', ''),
(42, 'PP/19/S5S/01', 'S07/2', 2, '', '', 0, '', ''),
(43, 'PP/19/S5S/01', 'S05/1', 2, '', '', 0, '', ''),
(44, 'PP/19/S5S/01', 'S05/2', 2, '', '', 0, '', ''),
(45, 'PP/19/S5S/01', 'S04/1', 2, '', '', 0, '', ''),
(46, 'PP/19/S5S/01', 'S04/2', 2, '', '', 0, '', ''),
(47, 'PP/19/S5S/01', 'B01', 2, '', '', 0, '', ''),
(48, 'PP/19/S5S/01', 'S06/1', 3, '', '', 0, '', ''),
(49, 'PP/19/S5S/01', 'S06/2', 3, '', '', 0, '', ''),
(50, 'PP/19/S5S/01', 'S06/3', 3, '', '', 0, '', ''),
(51, 'PP/19/S5S/01', 'S07/1', 3, '', '', 0, '', ''),
(52, 'PP/19/S5S/01', 'S07/2', 3, '', '', 0, '', ''),
(53, 'PP/19/S5S/01', 'S05/1', 3, '', '', 0, '', ''),
(54, 'PP/19/S5S/01', 'S05/2', 3, '', '', 0, '', ''),
(55, 'PP/19/S5S/01', 'S04/1', 3, '', '', 0, '', ''),
(56, 'PP/19/S5S/01', 'S04/2', 3, '', '', 0, '', ''),
(57, 'PP/19/S5S/01', 'B01', 3, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `amarksheet`
--

CREATE TABLE `amarksheet` (
  `id` int(11) NOT NULL,
  `Reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_id` int(11) NOT NULL,
  `Physics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mathematics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Chemistry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Biology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Economics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `History` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Geography` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Divinity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Agriculture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Computer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sub_math` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Litricture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amarksheet`
--

INSERT INTO `amarksheet` (`id`, `Reg_no`, `term_id`, `Physics`, `Mathematics`, `Chemistry`, `Biology`, `Economics`, `History`, `Geography`, `Divinity`, `Agriculture`, `Computer`, `Sub_math`, `GP`, `Litricture`) VALUES
(1, 'PP/19/S5A/01', 1, '', '', '', '', '69', '', '', '', '', '', '', '', ''),
(2, 'PP/19/S5A/01', 2, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'PP/19/S5A/01', 3, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'PP/19/S5S/01', 1, '', '', '', '', '75', '', '', '', '', '', '', '', ''),
(5, 'PP/19/S5S/01', 2, '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'PP/19/S5S/01', 3, '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `astudent`
--

CREATE TABLE `astudent` (
  `stud_id` int(11) NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `othername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `astudent`
--

INSERT INTO `astudent` (`stud_id`, `firstname`, `othername`, `Reg_no`, `gender`, `comb`, `picture`, `c_id`, `year`) VALUES
(1, 'Ayuru', 'Concy', 'PP/19/S5A/01', 'female', 'HEG/SUB_MATHS', 'image/IMG_20190308_183205.jpg', 'S5ART', 2019),
(2, 'Malesh', 'Stanley', 'PP/19/S5S/01', 'male', 'PEM/ICT', 'image/IMG_20170417_094127.jpg', 'S5SCIENCE', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `asubject`
--

CREATE TABLE `asubject` (
  `sub_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stream` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asubject`
--

INSERT INTO `asubject` (`sub_id`, `name`, `sub_cod`, `section`, `stream`) VALUES
(1, 'HISTORY 1', 'A01/1', 'History', 'ART'),
(2, 'HISTORY 2', 'A01/2', 'History', 'ART'),
(3, 'GEOGRAPHY 1', 'A02/1', 'Geography', 'ART'),
(4, 'GEOGRAPHY 2', 'A02/2', 'Geography', 'ART'),
(5, 'GEOGRAPHY 3', 'A02/3', 'Geography', 'ART'),
(6, 'DIVINITY 1', 'A03/1', 'Divinity', 'ART'),
(7, 'DIVINITY 2', 'A03/2', 'Divinity', 'ART'),
(8, 'DIVINITY 3', 'A03/3', 'Divinity', 'ART'),
(9, 'LITRICTURE 1', 'A04/1', 'Litricture', 'ART'),
(10, 'LITRICTURE 2', 'A04/2', 'Litricture', 'ART'),
(11, 'SUB MATHEMATICS', 'A05', 'Sub_math', 'ART'),
(12, 'GENERAL PAPER', 'B01', 'GP', 'GP'),
(13, 'AGRICULTURE 1', 'S01/1', 'Agriculture', 'SCIENCE'),
(14, 'AGRICULTURE 2', 'S01/2', 'Agriculture', 'SCIENCE'),
(15, 'AGRICULTURE 3', 'S01/3', 'Agriculture', 'SCIENCE'),
(16, 'BIOLOGY 1', 'S02/1', 'Biology', 'SCIENCE'),
(17, 'BIOLOGY 2', 'S02/2', 'Biology', 'SCIENCE'),
(18, 'BIOLOGY 3', 'S02/3', 'Biology', 'SCIENCE'),
(19, 'CHEMISTRY 1', 'S03/1', 'Chemistry', 'SCIENCE'),
(20, 'CHEMISTRY 2', 'S03/2', 'Chemistry', 'SCIENCE'),
(21, 'CHEMISTRY 3', 'S03/3', 'Chemistry', 'SCIENCE'),
(22, 'COMPUTER 1', 'S04/1', 'Computer', 'SCIENCE'),
(23, 'COMPUTER 2', 'S04/2', 'Computer', 'SCIENCE'),
(24, 'MATHEMATICS 1', 'S05/1', 'Mathematics', 'SCIENCE'),
(25, 'MATHEMATICS 2', 'S05/2', 'Mathematics', 'SCIENCE'),
(26, 'PHYSICS 1', 'S06/1', 'Physics', 'SCIENCE'),
(27, 'PHYSICS 2', 'S06/2', 'Physics', 'SCIENCE'),
(28, 'PHYSICS 3', 'S06/3', 'Physics', 'SCIENCE'),
(29, 'ECONOMICS 1', 'S07/1', 'Economics', 'SCIENCE'),
(30, 'ECONOMICS 2', 'S07/2', 'Economics', 'SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `asubjecttakenbyteacher`
--

CREATE TABLE `asubjecttakenbyteacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `asubjecttakenbyteacher`
--

INSERT INTO `asubjecttakenbyteacher` (`id`, `c_id`, `sub_cod`, `initials`) VALUES
(1, 'S5SCIENCE', 'S07/1', 'AJ'),
(2, 'S5SCIENCE', 'S07/2', 'AJ');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `attendedid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `c_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stream` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `c_id`, `c_name`, `stream`) VALUES
(1, 'S1A', 'ONE', 'A'),
(2, 'S1B', 'ONE', 'B'),
(3, 'S2A', 'TWO', 'A'),
(4, 'S2B', 'TWO', 'B'),
(5, 'S3A', 'THREE', 'A'),
(6, 'S3B', 'THREE', 'B'),
(7, 'S4', 'FOUR', 'A'),
(8, 'S5ART', 'FIVE', 'ART'),
(9, 'S5SCIENCE', 'FIVE', 'SCIENCE'),
(10, 'S6ART', 'SIX', 'ART'),
(11, 'S5SCIENCE', 'SIX', 'SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `sub_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mid_term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'F 9',
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `Reg_no`, `term_id`, `sub_cod`, `mid_term`, `end_term`, `total`, `grade`, `initials`) VALUES
(1, 'PP/19/S1A/01', '1', 'A01', '', '', '', 'F 9', ''),
(2, 'PP/19/S1A/01', '2', 'A01', '', '', '', 'F 9', ''),
(3, 'PP/19/S1A/01', '3', 'A01', '', '', '', 'F 9', ''),
(4, 'PP/19/S1A/01', '1', 'A02', '', '', '', 'F 9', ''),
(5, 'PP/19/S1A/01', '2', 'A02', '', '', '', 'F 9', ''),
(6, 'PP/19/S1A/01', '3', 'A02', '', '', '', 'F 9', ''),
(7, 'PP/19/S1A/01', '1', 'A03', '', '', '', 'F 9', ''),
(8, 'PP/19/S1A/01', '2', 'A03', '', '', '', 'F 9', ''),
(9, 'PP/19/S1A/01', '3', 'A03', '', '', '', 'F 9', ''),
(10, 'PP/19/S1A/01', '1', 'A04', '', '', '', 'F 9', ''),
(11, 'PP/19/S1A/01', '2', 'A04', '', '', '', 'F 9', ''),
(12, 'PP/19/S1A/01', '3', 'A04', '', '', '', 'F 9', ''),
(13, 'PP/19/S1A/01', '1', 'A05', '', '', '', 'F 9', ''),
(14, 'PP/19/S1A/01', '2', 'A05', '', '', '', 'F 9', ''),
(15, 'PP/19/S1A/01', '3', 'A05', '', '', '', 'F 9', ''),
(16, 'PP/19/S1A/01', '1', 'A06', '', '', '', 'F 9', ''),
(17, 'PP/19/S1A/01', '2', 'A06', '', '', '', 'F 9', ''),
(18, 'PP/19/S1A/01', '3', 'A06', '', '', '', 'F 9', ''),
(19, 'PP/19/S1A/01', '1', 'S01', '22', '65', '87', 'D 1', 'DD'),
(20, 'PP/19/S1A/01', '2', 'S01', '', '', '', 'F 9', ''),
(21, 'PP/19/S1A/01', '3', 'S01', '', '', '', 'F 9', ''),
(22, 'PP/19/S1A/01', '1', 'S02', '19', '61', '80', 'D 1', 'DD'),
(23, 'PP/19/S1A/01', '2', 'S02', '', '', '', 'F 9', ''),
(24, 'PP/19/S1A/01', '3', 'S02', '', '', '', 'F 9', ''),
(25, 'PP/19/S1A/01', '1', 'S03', '', '', '', 'F 9', ''),
(26, 'PP/19/S1A/01', '2', 'S03', '', '', '', 'F 9', ''),
(27, 'PP/19/S1A/01', '3', 'S03', '', '', '', 'F 9', ''),
(28, 'PP/19/S1A/01', '1', 'S04', '', '', '', 'F 9', ''),
(29, 'PP/19/S1A/01', '2', 'S04', '', '', '', 'F 9', ''),
(30, 'PP/19/S1A/01', '3', 'S04', '', '', '', 'F 9', ''),
(31, 'PP/19/S1A/01', '1', 'S05', '', '', '', 'F 9', ''),
(32, 'PP/19/S1A/01', '2', 'S05', '', '', '', 'F 9', ''),
(33, 'PP/19/S1A/01', '3', 'S05', '', '', '', 'F 9', ''),
(34, 'PP/19/S1B/01', '1', 'A01', '', '', '', 'F 9', ''),
(35, 'PP/19/S1B/01', '2', 'A01', '', '', '', 'F 9', ''),
(36, 'PP/19/S1B/01', '3', 'A01', '', '', '', 'F 9', ''),
(37, 'PP/19/S1B/01', '1', 'A02', '', '', '', 'F 9', ''),
(38, 'PP/19/S1B/01', '2', 'A02', '', '', '', 'F 9', ''),
(39, 'PP/19/S1B/01', '3', 'A02', '', '', '', 'F 9', ''),
(40, 'PP/19/S1B/01', '1', 'A03', '', '', '', 'F 9', ''),
(41, 'PP/19/S1B/01', '2', 'A03', '', '', '', 'F 9', ''),
(42, 'PP/19/S1B/01', '3', 'A03', '', '', '', 'F 9', ''),
(43, 'PP/19/S1B/01', '1', 'A04', '', '', '', 'F 9', ''),
(44, 'PP/19/S1B/01', '2', 'A04', '', '', '', 'F 9', ''),
(45, 'PP/19/S1B/01', '3', 'A04', '', '', '', 'F 9', ''),
(46, 'PP/19/S1B/01', '1', 'A05', '', '', '', 'F 9', ''),
(47, 'PP/19/S1B/01', '2', 'A05', '', '', '', 'F 9', ''),
(48, 'PP/19/S1B/01', '3', 'A05', '', '', '', 'F 9', ''),
(49, 'PP/19/S1B/01', '1', 'A06', '', '', '', 'F 9', ''),
(50, 'PP/19/S1B/01', '2', 'A06', '', '', '', 'F 9', ''),
(51, 'PP/19/S1B/01', '3', 'A06', '', '', '', 'F 9', ''),
(52, 'PP/19/S1B/01', '1', 'S01', '21', '58', '79', 'D 1', 'DD'),
(53, 'PP/19/S1B/01', '2', 'S01', '', '', '', 'F 9', ''),
(54, 'PP/19/S1B/01', '3', 'S01', '', '', '', 'F 9', ''),
(55, 'PP/19/S1B/01', '1', 'S02', '24', '53', '77', 'D 1', 'DD'),
(56, 'PP/19/S1B/01', '2', 'S02', '', '', '', 'F 9', ''),
(57, 'PP/19/S1B/01', '3', 'S02', '', '', '', 'F 9', ''),
(58, 'PP/19/S1B/01', '1', 'S03', '', '', '', 'F 9', ''),
(59, 'PP/19/S1B/01', '2', 'S03', '', '', '', 'F 9', ''),
(60, 'PP/19/S1B/01', '3', 'S03', '', '', '', 'F 9', ''),
(61, 'PP/19/S1B/01', '1', 'S04', '', '', '', 'F 9', ''),
(62, 'PP/19/S1B/01', '2', 'S04', '', '', '', 'F 9', ''),
(63, 'PP/19/S1B/01', '3', 'S04', '', '', '', 'F 9', ''),
(64, 'PP/19/S1B/01', '1', 'S05', '', '', '', 'F 9', ''),
(65, 'PP/19/S1B/01', '2', 'S05', '', '', '', 'F 9', ''),
(66, 'PP/19/S1B/01', '3', 'S05', '', '', '', 'F 9', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privillage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `privillage`, `initials`, `status`, `remember_token`) VALUES
(1, 'Admin', '0e7517141fb53f21ee439b355b5a1d0a', 'administrator', 'DD', 'active', NULL),
(2, 'Aciga James', '056b2b98c677b9fe057b1d3222e01e37', 'standard', 'AJ', 'active', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_id` int(11) NOT NULL,
  `Physics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mathematics` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Chemistry` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Biology` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `English` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `History` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Geography` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Commerce` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Agriculture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CRE` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fine_Art` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `Reg_no`, `term_id`, `Physics`, `Mathematics`, `Chemistry`, `Biology`, `English`, `History`, `Geography`, `Commerce`, `Agriculture`, `CRE`, `Fine_Art`, `total`) VALUES
(1, 'PP/19/S1A/01', 1, '87', '80', '', '', '', '', '', '', '', '', '', 167),
(2, 'PP/19/S1A/01', 2, '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 'PP/19/S1A/01', 3, '', '', '', '', '', '', '', '', '', '', '', 0),
(4, 'PP/19/S1B/01', 1, '79', '77', '', '', '', '', '', '', '', '', '', 156),
(5, 'PP/19/S1B/01', 2, '', '', '', '', '', '', '', '', '', '', '', 0),
(6, 'PP/19/S1B/01', 3, '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ostudent`
--

CREATE TABLE `ostudent` (
  `stud_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `othername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ostudent`
--

INSERT INTO `ostudent` (`stud_id`, `firstname`, `othername`, `Reg_no`, `gender`, `picture`, `c_id`, `year`) VALUES
(1, 'Duku', 'David', 'PP/19/S1A/01', 'male', 'image/BIRTH.jpg', 'S1A', 2019),
(2, 'Modi', 'Emmanuel', 'PP/19/S1B/01', 'male', 'image/20171222_070544.jpg', 'S1B', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `osubject`
--

CREATE TABLE `osubject` (
  `sub_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `osubject`
--

INSERT INTO `osubject` (`sub_id`, `name`, `sub_cod`) VALUES
(1, 'History', 'A01'),
(2, 'Geography', 'A02'),
(3, 'English', 'A03'),
(4, 'CRE', 'A04'),
(5, 'Commerce', 'A05'),
(6, 'Fine_Art', 'A06'),
(7, 'Physics', 'S01'),
(8, 'Mathematics', 'S02'),
(9, 'Chemistry', 'S03'),
(10, 'Biology', 'S04'),
(11, 'Agriculture', 'S05');

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `sub_cod` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `number`, `sub_cod`) VALUES
(1, 1, 'A01'),
(2, 2, 'A01');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `Reg_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `month` int(11) NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Reg_no`, `amount`, `month`, `year`) VALUES
(1, 'PP/19/S1A/01', 50000, 5, '2019');

-- --------------------------------------------------------

--
-- Table structure for table `period_of_study`
--

CREATE TABLE `period_of_study` (
  `id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `term_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `period_of_study`
--

INSERT INTO `period_of_study` (`id`, `year`, `term_id`) VALUES
(1, 2019, 1),
(2, 2019, 2),
(3, 2019, 3),
(4, 2020, 1),
(5, 2020, 2),
(6, 2020, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subjecttakenbyteacher`
--

CREATE TABLE `subjecttakenbyteacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_cod` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjecttakenbyteacher`
--

INSERT INTO `subjecttakenbyteacher` (`id`, `c_id`, `sub_cod`, `initials`) VALUES
(1, 'S1A', 'S01', 'DD'),
(2, 'S1B', 'S01', 'DD'),
(3, 'S1B', 'S02', 'DD'),
(4, 'S1A', 'S02', 'DD');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `othername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`staff_id`, `firstname`, `othername`, `gender`, `picture`, `initials`, `year`) VALUES
(1, 'Admin', 'Admin', 'male', 'image/2018-01-28-18-37-25-796.jpg', 'DD', 2019),
(2, 'Aciga', 'James', 'male', 'image/20180119_184017.jpg', 'AJ', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `start_date`, `end_date`, `term`) VALUES
(1, '2019-11-13', '', 'I'),
(2, '', '', 'II'),
(3, '', '', 'III');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amarks`
--
ALTER TABLE `amarks`
  ADD PRIMARY KEY (`mark_id`);

--
-- Indexes for table `amarksheet`
--
ALTER TABLE `amarksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `astudent`
--
ALTER TABLE `astudent`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `asubject`
--
ALTER TABLE `asubject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `asubjecttakenbyteacher`
--
ALTER TABLE `asubjecttakenbyteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examschedule`
--
ALTER TABLE `examschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ostudent`
--
ALTER TABLE `ostudent`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `osubject`
--
ALTER TABLE `osubject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `period_of_study`
--
ALTER TABLE `period_of_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjecttakenbyteacher`
--
ALTER TABLE `subjecttakenbyteacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amarks`
--
ALTER TABLE `amarks`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `amarksheet`
--
ALTER TABLE `amarksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `astudent`
--
ALTER TABLE `astudent`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `asubject`
--
ALTER TABLE `asubject`
  MODIFY `sub_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `asubjecttakenbyteacher`
--
ALTER TABLE `asubjecttakenbyteacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `examschedule`
--
ALTER TABLE `examschedule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ostudent`
--
ALTER TABLE `ostudent`
  MODIFY `stud_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `osubject`
--
ALTER TABLE `osubject`
  MODIFY `sub_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `period_of_study`
--
ALTER TABLE `period_of_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subjecttakenbyteacher`
--
ALTER TABLE `subjecttakenbyteacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `staff_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
