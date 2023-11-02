-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 10:29 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentresult`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbclass`
--

CREATE TABLE `tbclass` (
  `id` int(11) NOT NULL,
  `class_name` varchar(191) NOT NULL,
  `section` varchar(191) NOT NULL,
  `creation_date` date NOT NULL,
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbclass`
--

INSERT INTO `tbclass` (`id`, `class_name`, `section`, `creation_date`, `updation_date`) VALUES
(1, 'Information Technology', 'IT', '2023-08-10', '2023-09-04'),
(2, 'Account', 'Acc', '2023-08-18', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbresult`
--

CREATE TABLE `tbresult` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `marks` varchar(191) NOT NULL,
  `posting_date` datetime NOT NULL,
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbstudent`
--

CREATE TABLE `tbstudent` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `roll_id` varchar(191) NOT NULL,
  `gender` varchar(191) NOT NULL,
  `dob` date NOT NULL,
  `class_id` int(11) NOT NULL,
  `creation_date` date NOT NULL,
  `updation_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=blocked, 1=active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbstudent`
--

INSERT INTO `tbstudent` (`id`, `name`, `roll_id`, `gender`, `dob`, `class_id`, `creation_date`, `updation_date`, `status`) VALUES
(1, 'peng vuthy', 'cc-001-23', 'Male', '1992-12-08', 1, '2023-09-09', '0000-00-00', 1),
(2, 'teb kanha', 'cc-009-23', 'Female', '2000-06-14', 4, '2023-09-09', '0000-00-00', 0),
(3, 'Chea Chan', 'cc-002-23', 'Male', '2007-06-13', 4, '2023-09-09', '0000-00-00', 0),
(4, 'Chea Chan', 'cc-001-23', 'Male', '2023-09-07', 1, '2023-09-19', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbsubject`
--

CREATE TABLE `tbsubject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(191) NOT NULL,
  `subject_code` varchar(191) NOT NULL,
  `creation_date` date NOT NULL,
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbsubject`
--

INSERT INTO `tbsubject` (`id`, `subject_name`, `subject_code`, `creation_date`, `updation_date`) VALUES
(1, 'Bussiness', 'B001', '2023-09-05', '0000-00-00'),
(2, 'Mobile', 'M001', '2023-09-05', '0000-00-00'),
(4, 'java', 'j1', '2023-09-05', '0000-00-00'),
(5, 'php', 'p1', '2023-09-19', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbsubjectcombination`
--

CREATE TABLE `tbsubjectcombination` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=deactive, 1=active',
  `creation_date` date NOT NULL,
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbsubjectcombination`
--

INSERT INTO `tbsubjectcombination` (`id`, `class_id`, `subject_id`, `status`, `creation_date`, `updation_date`) VALUES
(1, 1, 4, 1, '2023-09-05', '0000-00-00'),
(2, 2, 1, 1, '2023-09-05', '0000-00-00'),
(3, 4, 1, 0, '2023-09-06', '0000-00-00'),
(4, 1, 5, 1, '2023-09-19', '0000-00-00'),
(5, 1, 2, 1, '2023-09-19', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbclass`
--
ALTER TABLE `tbclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbresult`
--
ALTER TABLE `tbresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbstudent`
--
ALTER TABLE `tbstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsubject`
--
ALTER TABLE `tbsubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbsubjectcombination`
--
ALTER TABLE `tbsubjectcombination`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbclass`
--
ALTER TABLE `tbclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbresult`
--
ALTER TABLE `tbresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbstudent`
--
ALTER TABLE `tbstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbsubject`
--
ALTER TABLE `tbsubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbsubjectcombination`
--
ALTER TABLE `tbsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
