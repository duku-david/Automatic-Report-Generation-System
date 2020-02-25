-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 09:12 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
(1, 'PP/19/S5A/01', 'A01/1', 1, '12', '56', 68, 'C 3', 'AF'),
(2, 'PP/19/S5A/01', 'A01/2', 1, '', '', 0, '', ''),
(3, 'PP/19/S5A/01', 'S07/1', 1, '', '', 0, '', ''),
(4, 'PP/19/S5A/01', 'S07/2', 1, '25', '63', 88, 'D 1', 'DD'),
(5, 'PP/19/S5A/01', 'A03/1', 1, '', '', 0, '', ''),
(6, 'PP/19/S5A/01', 'A03/2', 1, '', '', 0, '', ''),
(7, 'PP/19/S5A/01', 'A03/3', 1, '', '', 0, '', ''),
(8, 'PP/19/S5A/01', 'A05', 1, '', '', 0, '', ''),
(9, 'PP/19/S5A/01', 'B01', 1, '', '', 0, '', ''),
(10, 'PP/19/S5A/01', 'A01/1', 2, '', '', 0, '', ''),
(11, 'PP/19/S5A/01', 'A01/2', 2, '', '', 0, '', ''),
(12, 'PP/19/S5A/01', 'S07/1', 2, '', '', 0, '', ''),
(13, 'PP/19/S5A/01', 'S07/2', 2, '', '', 0, '', ''),
(14, 'PP/19/S5A/01', 'A03/1', 2, '', '', 0, '', ''),
(15, 'PP/19/S5A/01', 'A03/2', 2, '', '', 0, '', ''),
(16, 'PP/19/S5A/01', 'A03/3', 2, '', '', 0, '', ''),
(17, 'PP/19/S5A/01', 'A05', 2, '', '', 0, '', ''),
(18, 'PP/19/S5A/01', 'B01', 2, '', '', 0, '', ''),
(19, 'PP/19/S5A/01', 'A01/1', 3, '', '', 0, '', ''),
(20, 'PP/19/S5A/01', 'A01/2', 3, '', '', 0, '', ''),
(21, 'PP/19/S5A/01', 'S07/1', 3, '', '', 0, '', ''),
(22, 'PP/19/S5A/01', 'S07/2', 3, '', '', 0, '', ''),
(23, 'PP/19/S5A/01', 'A03/1', 3, '', '', 0, '', ''),
(24, 'PP/19/S5A/01', 'A03/2', 3, '', '', 0, '', ''),
(25, 'PP/19/S5A/01', 'A03/3', 3, '', '', 0, '', ''),
(26, 'PP/19/S5A/01', 'A05', 3, '', '', 0, '', ''),
(27, 'PP/19/S5A/01', 'B01', 3, '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `amarksheet`
--

CREATE TABLE `amarksheet` (
  `id` int(11) NOT NULL,
  `Reg_no` varchar(100) NOT NULL,
  `term_id` int(11) NOT NULL,
  `physics` int(11) NOT NULL,
  `mathematics` int(11) NOT NULL,
  `chemistry` int(11) NOT NULL,
  `biology` int(11) NOT NULL,
  `economics` int(11) NOT NULL,
  `history` int(11) NOT NULL,
  `geography` varchar(100) NOT NULL,
  `divinity` varchar(100) NOT NULL,
  `agriculture` varchar(100) NOT NULL,
  `computer` varchar(100) NOT NULL,
  `sub_math` varchar(100) NOT NULL,
  `gp` varchar(100) NOT NULL,
  `lit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amarksheet`
--

INSERT INTO `amarksheet` (`id`, `Reg_no`, `term_id`, `physics`, `mathematics`, `chemistry`, `biology`, `economics`, `history`, `geography`, `divinity`, `agriculture`, `computer`, `sub_math`, `gp`, `lit`) VALUES
(1, 'PP/19/S5A/01', 1, 0, 0, 0, 0, 44, 34, '', '', '', '', '', '', ''),
(2, 'PP/19/S5A/01', 2, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', ''),
(3, 'PP/19/S5A/01', 3, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `astudent`
--

CREATE TABLE `astudent` (
  `stud_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `Reg_no` varchar(100) NOT NULL,
  `form` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `comb` varchar(100) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `astudent`
--

INSERT INTO `astudent` (`stud_id`, `firstname`, `othername`, `Reg_no`, `form`, `gender`, `picture`, `comb`, `year`) VALUES
(1, 'Ayuru', 'Concy', 'PP/19/S5A/01', 'S 5 Art', 'male', 'image/IMG_20190308_183102.jpg', 'HED/SUB_MATHS', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `asubject`
--

CREATE TABLE `asubject` (
  `sub_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sub_cod` varchar(100) NOT NULL,
  `section` varchar(11) NOT NULL,
  `stream` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asubject`
--

INSERT INTO `asubject` (`sub_id`, `name`, `sub_cod`, `section`, `stream`) VALUES
(17, 'HISTORY 1', 'A01/1', 'History', 'Art'),
(18, 'HISTORY 2', 'A01/2', 'History', 'Art'),
(19, 'GEOGRAPHY 1', 'A02/1', 'Geography', 'Art'),
(20, 'GEOGRAPHY 2', 'A02/2', 'Geography', 'Art'),
(21, 'GEOGRAPHY 3', 'A02/3', 'Geography', 'Art'),
(22, 'DIVINITY 1', 'A03/1', 'Divinity', 'Art'),
(23, 'DIVINITY 2', 'A03/2', 'Divinity', 'Art'),
(24, 'DIVINITY 3', 'A03/3', 'Divinity', 'Art'),
(25, 'LITRICTURE 1', 'A04/1', 'Litricture', 'Art'),
(26, 'LITRICTURE 2', 'A04/2', 'Litricture', 'Art'),
(27, 'SUB MATHEMATICS', 'A05', 'Sub_math', 'Art'),
(28, 'GENERAL PAPER', 'B01', 'GP', 'gp'),
(1, 'AGRICULTURE 1', 'S01/1', 'Agriculture', 'Science'),
(2, 'AGRICULTURE 2', 'S01/2', 'Agriculture', 'Science'),
(3, 'AGRICULTURE 3', 'S01/3', 'Agriculture', 'Science'),
(4, 'BIOLOGY 1', 'S02/1', 'Biology', 'Science'),
(5, 'BIOLOGY 2', 'S02/2', 'Biology', 'Science'),
(6, 'BIOLOGY 3', 'S02/3', 'Biology', 'Science'),
(7, 'CHEMISTRY 1', 'S03/1', 'Chemistry', 'Science'),
(8, 'CHEMISTRY 2', 'S03/2', 'Chemistry', 'Science'),
(9, 'CHEMISTRY 3', 'S03/3', 'Chemistry', 'Science'),
(10, 'COMPUTER 1', 'S04/1', 'Computer', 'Science'),
(11, 'COMPUTER 2', 'S04/2', 'Computer', 'Science'),
(12, 'MATHEMATICS 1', 'S05/1', 'Maths', 'Science'),
(13, 'MATHEMATICS 2', 'S05/2', 'Maths', 'Science'),
(14, 'PHYSICS 1', 'S06/1', 'Physics', 'Science'),
(15, 'PHYSICS 2', 'S06/2', 'Physics', 'Science'),
(16, 'PHYSICS 3', 'S06/3', 'Physics', 'Science'),
(29, 'ECONOMICS 1', 'S07/1', 'Economics', 'Science'),
(30, 'ECONOMICS 2', 'S07/2', 'Economics', 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `Reg_no` varchar(100) NOT NULL,
  `sub_cod` varchar(100) NOT NULL,
  `term_id` varchar(11) NOT NULL,
  `mid_term` varchar(11) NOT NULL,
  `end_term` varchar(11) NOT NULL,
  `total` varchar(11) NOT NULL,
  `grade` varchar(1000) NOT NULL,
  `initials` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`id`, `Reg_no`, `sub_cod`, `term_id`, `mid_term`, `end_term`, `total`, `grade`, `initials`) VALUES
(1, 'PP/19/S1A/01', 'S01', '1', '25', '53', '78', 'D 1', 'DD'),
(2, 'PP/19/S1A/01', 'S02', '1', '', '', '', '', ''),
(3, 'PP/19/S1A/01', 'S03', '1', '17', '54', '71', 'D 2', 'OP'),
(4, 'PP/19/S1A/01', 'S04', '1', '', '', '', '', ''),
(5, 'PP/19/S1A/01', 'S05', '1', '', '', '', '', ''),
(6, 'PP/19/S1A/01', 'A01', '1', '24', '56', '80', 'D 1', 'AJ'),
(7, 'PP/19/S1A/01', 'A02', '1', '', '', '', '', ''),
(8, 'PP/19/S1A/01', 'A03', '1', '', '', '', '', ''),
(9, 'PP/19/S1A/01', 'A04', '1', '', '', '', '', ''),
(10, 'PP/19/S1A/01', 'A05', '1', '24', '65', '89', 'D 1', 'AJ'),
(11, 'PP/19/S1A/01', 'A06', '1', '', '', '', '', ''),
(12, 'PP/19/S1A/01', 'S01', '2', '', '', '', '', ''),
(13, 'PP/19/S1A/01', 'S02', '2', '', '', '', '', ''),
(14, 'PP/19/S1A/01', 'S03', '2', '', '', '', '', ''),
(15, 'PP/19/S1A/01', 'S04', '2', '', '', '', '', ''),
(16, 'PP/19/S1A/01', 'S05', '2', '', '', '', '', ''),
(17, 'PP/19/S1A/01', 'A01', '2', '', '', '', '', ''),
(18, 'PP/19/S1A/01', 'A02', '2', '', '', '', '', ''),
(19, 'PP/19/S1A/01', 'A03', '2', '', '', '', '', ''),
(20, 'PP/19/S1A/01', 'A04', '2', '', '', '', '', ''),
(21, 'PP/19/S1A/01', 'A05', '2', '', '', '', '', ''),
(22, 'PP/19/S1A/01', 'A06', '2', '', '', '', '', ''),
(23, 'PP/19/S1A/01', 'S01', '3', '', '', '', '', ''),
(24, 'PP/19/S1A/01', 'S02', '3', '', '', '', '', ''),
(25, 'PP/19/S1A/01', 'S03', '3', '', '', '', '', ''),
(26, 'PP/19/S1A/01', 'S04', '3', '', '', '', '', ''),
(27, 'PP/19/S1A/01', 'S05', '3', '', '', '', '', ''),
(28, 'PP/19/S1A/01', 'A01', '3', '', '', '', '', ''),
(29, 'PP/19/S1A/01', 'A02', '3', '', '', '', '', ''),
(30, 'PP/19/S1A/01', 'A03', '3', '', '', '', '', ''),
(31, 'PP/19/S1A/01', 'A04', '3', '', '', '', '', ''),
(32, 'PP/19/S1A/01', 'A05', '3', '', '', '', '', ''),
(33, 'PP/19/S1A/01', 'A06', '3', '', '', '', '', ''),
(34, 'PP/19/S1A/02', 'S01', '1', '', '', '', '', ''),
(35, 'PP/19/S1A/02', 'S02', '1', '', '', '', '', ''),
(36, 'PP/19/S1A/02', 'S03', '1', '26', '64', '90', 'D 1', 'OP'),
(37, 'PP/19/S1A/02', 'S04', '1', '', '', '', '', ''),
(38, 'PP/19/S1A/02', 'S05', '1', '', '', '', '', ''),
(39, 'PP/19/S1A/02', 'A01', '1', '26', '54', '80', 'D 1', 'AJ'),
(40, 'PP/19/S1A/02', 'A02', '1', '', '', '', '', ''),
(41, 'PP/19/S1A/02', 'A03', '1', '', '', '', '', ''),
(42, 'PP/19/S1A/02', 'A04', '1', '', '', '', '', ''),
(43, 'PP/19/S1A/02', 'A05', '1', '26', '57', '83', 'D 1', 'AJ'),
(44, 'PP/19/S1A/02', 'A06', '1', '', '', '', '', ''),
(45, 'PP/19/S1A/02', 'S01', '2', '', '', '', '', ''),
(46, 'PP/19/S1A/02', 'S02', '2', '', '', '', '', ''),
(47, 'PP/19/S1A/02', 'S03', '2', '', '', '', '', ''),
(48, 'PP/19/S1A/02', 'S04', '2', '', '', '', '', ''),
(49, 'PP/19/S1A/02', 'S05', '2', '', '', '', '', ''),
(50, 'PP/19/S1A/02', 'A01', '2', '', '', '', '', ''),
(51, 'PP/19/S1A/02', 'A02', '2', '', '', '', '', ''),
(52, 'PP/19/S1A/02', 'A03', '2', '', '', '', '', ''),
(53, 'PP/19/S1A/02', 'A04', '2', '', '', '', '', ''),
(54, 'PP/19/S1A/02', 'A05', '2', '', '', '', '', ''),
(55, 'PP/19/S1A/02', 'A06', '2', '', '', '', '', ''),
(56, 'PP/19/S1A/02', 'S01', '3', '', '', '', '', ''),
(57, 'PP/19/S1A/02', 'S02', '3', '', '', '', '', ''),
(58, 'PP/19/S1A/02', 'S03', '3', '', '', '', '', ''),
(59, 'PP/19/S1A/02', 'S04', '3', '', '', '', '', ''),
(60, 'PP/19/S1A/02', 'S05', '3', '', '', '', '', ''),
(61, 'PP/19/S1A/02', 'A01', '3', '', '', '', '', ''),
(62, 'PP/19/S1A/02', 'A02', '3', '', '', '', '', ''),
(63, 'PP/19/S1A/02', 'A03', '3', '', '', '', '', ''),
(64, 'PP/19/S1A/02', 'A04', '3', '', '', '', '', ''),
(65, 'PP/19/S1A/02', 'A05', '3', '', '', '', '', ''),
(66, 'PP/19/S1A/02', 'A06', '3', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `marksheet`
--

CREATE TABLE `marksheet` (
  `id` int(11) NOT NULL,
  `Reg_no` varchar(100) NOT NULL,
  `term_id` varchar(11) NOT NULL,
  `physics` varchar(11) NOT NULL,
  `mathematics` varchar(11) NOT NULL,
  `chemistry` varchar(11) NOT NULL,
  `biology` varchar(11) NOT NULL,
  `english` varchar(11) NOT NULL,
  `history` varchar(11) NOT NULL,
  `geography` varchar(11) NOT NULL,
  `commerce` varchar(11) NOT NULL,
  `agriculture` varchar(11) NOT NULL,
  `CRE` varchar(11) NOT NULL,
  `fine_arts` varchar(11) NOT NULL,
  `total` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marksheet`
--

INSERT INTO `marksheet` (`id`, `Reg_no`, `term_id`, `physics`, `mathematics`, `chemistry`, `biology`, `english`, `history`, `geography`, `commerce`, `agriculture`, `CRE`, `fine_arts`, `total`) VALUES
(1, 'PP/19/S1A/01', '1', '78', '', '71', '', '', '80', '', '89', '', '', '', '318'),
(2, 'PP/19/S1A/01', '2', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'PP/19/S1A/01', '3', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'PP/19/S1A/02', '1', '', '', '90', '', '', '80', '', '83', '', '', '', '253'),
(5, 'PP/19/S1A/02', '2', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'PP/19/S1A/02', '3', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ostudent`
--

CREATE TABLE `ostudent` (
  `stud_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `othername` varchar(100) NOT NULL,
  `Reg_no` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `c_id` varchar(100) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ostudent`
--

INSERT INTO `ostudent` (`stud_id`, `firstname`, `othername`, `Reg_no`, `gender`, `picture`, `c_id`, `year`) VALUES
(1, 'Duku', 'David', 'PP/19/S1A/01', 'male', 'image/BIRTH.jpg', 'S1A', 2019),
(2, 'Modi', 'Emmanuel', 'PP/19/S1A/02', 'male', 'image/20171222_070544.jpg', 'S1A', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `osubject`
--

CREATE TABLE `osubject` (
  `sub_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sub_cod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `osubject`
--

INSERT INTO `osubject` (`sub_id`, `name`, `sub_cod`) VALUES
(6, 'History', 'A01'),
(7, 'Geography', 'A02'),
(8, 'English', 'A03'),
(9, 'C R E', 'A04'),
(10, 'Commerce', 'A05'),
(11, 'Fine Art', 'A06'),
(1, 'Physics', 'S01'),
(2, 'Maths', 'S02'),
(3, 'Chemistry', 'S03'),
(4, 'Biology', 'S04'),
(5, 'Agriculture', 'S05');

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
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `term` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `start_date`, `end_date`, `term`) VALUES
(1, '', '', 'I'),
(2, '2019-07-16', '', 'II'),
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
  ADD PRIMARY KEY (`Reg_no`),
  ADD UNIQUE KEY `id` (`stud_id`);

--
-- Indexes for table `asubject`
--
ALTER TABLE `asubject`
  ADD PRIMARY KEY (`sub_cod`),
  ADD UNIQUE KEY `id` (`sub_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marksheet`
--
ALTER TABLE `marksheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ostudent`
--
ALTER TABLE `ostudent`
  ADD PRIMARY KEY (`Reg_no`),
  ADD UNIQUE KEY `stud_id` (`stud_id`);

--
-- Indexes for table `osubject`
--
ALTER TABLE `osubject`
  ADD PRIMARY KEY (`sub_cod`),
  ADD UNIQUE KEY `sub_id` (`sub_id`);

--
-- Indexes for table `period_of_study`
--
ALTER TABLE `period_of_study`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `amarksheet`
--
ALTER TABLE `amarksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `astudent`
--
ALTER TABLE `astudent`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asubject`
--
ALTER TABLE `asubject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `marksheet`
--
ALTER TABLE `marksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ostudent`
--
ALTER TABLE `ostudent`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `osubject`
--
ALTER TABLE `osubject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `period_of_study`
--
ALTER TABLE `period_of_study`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
