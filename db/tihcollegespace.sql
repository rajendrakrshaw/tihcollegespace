-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2021 at 10:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tihcollegespace`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_class`
--

CREATE TABLE `schedule_class` (
  `id` int(250) NOT NULL,
  `faculty_id` int(50) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_class`
--

INSERT INTO `schedule_class` (`id`, `faculty_id`, `faculty_name`, `stream`, `sem`, `section`, `subject`, `topic`, `date`, `time`) VALUES
(1, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Algorithms and Flow Chart', '2021-11-27', '11:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(11) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `streams_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `sem`, `streams_id`) VALUES
(1, 'SEM1', 1),
(2, 'SEM2', 1),
(3, 'SEM3', 1),
(4, 'SEM4', 1),
(5, 'SEM5', 1),
(6, 'SEM6', 1),
(7, 'SEM1', 2),
(8, 'SEM2', 2),
(9, 'SEM3', 2),
(10, 'SEM4', 2),
(11, 'SEM5', 2),
(12, 'SEM6', 2),
(13, 'SEM1', 3),
(14, 'SEM2', 3),
(15, 'SEM3', 3),
(16, 'SEM4', 3),
(17, 'SEM1', 4),
(18, 'SEM2', 4),
(19, 'SEM3', 4),
(20, 'SEM4', 4);

-- --------------------------------------------------------

--
-- Table structure for table `streams`
--

CREATE TABLE `streams` (
  `id` int(11) NOT NULL,
  `stream` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `streams`
--

INSERT INTO `streams` (`id`, `stream`) VALUES
(1, 'BCA'),
(2, 'BBA'),
(3, 'MCA'),
(4, 'MSC');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `semesters_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `semesters_id`) VALUES
(1, 'C Programming', 1),
(2, 'Digital Electronics', 1),
(3, 'Basic Mathematics Computation', 1),
(4, 'PC Software Lab', 1),
(5, 'C Programming Lab', 1),
(6, 'Soft Skills', 1),
(7, 'Data Structure using C', 2),
(8, 'Computer Architecture', 2),
(9, 'English Communication', 2),
(10, 'Advanced Mathematics Computati', 2),
(11, 'Data Structure Lab', 2),
(12, 'C++ Programming', 3),
(13, 'Operating System', 3),
(14, 'Maths', 3),
(15, 'C++ Lab', 3),
(16, 'Soft Skills', 3),
(17, 'Aptitude', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `midname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `bca` int(10) NOT NULL,
  `bba` int(11) NOT NULL,
  `mca` int(11) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `firstname`, `midname`, `lastname`, `dob`, `gender`, `bca`, `bba`, `mca`, `phone`, `email`, `password`, `photo`) VALUES
(2, 'Rahul', '', 'Shaw', '2001-06-25', 'male', 1, 0, 0, '2147483647', 'mailforhacking2345@gmail.com', '5e74fe0d1b00155a43e0592d9bf57d7e', 'images/20210307_105301.jpg'),
(3, '', '', '', '0000-00-00', 'male', 0, 0, 0, '0', '', 'bd8790397bcb1318413dc20c6070af27', 'images/20210307_105301.jpg'),
(4, '', '', '', '0000-00-00', 'male', 0, 0, 0, '0', '', '32b0845bd9e9dcb144fb3dbc55b88005', 'images/20210307_105301.jpg'),
(5, '', '', '', '0000-00-00', 'male', 0, 0, 0, '0', '', '827ccb0eea8a706c4c34a16891f84e7b', 'images/20210307_105301.jpg'),
(6, 'Rahul', '', 'Shaw', '2021-12-13', 'male', 0, 0, 0, '2147483647', 'mailforrahul01@gmail.com', 'bd8790397bcb1318413dc20c6070af27', 'images/20210307_105301.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `verification_data`
--

CREATE TABLE `verification_data` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verification_data`
--

INSERT INTO `verification_data` (`id`, `email`, `role`) VALUES
(1, 'mailforrahul01@gmail.com', 'teacher'),
(2, 'mailforhacking2345@gmail.com', 'student'),
(3, 'ronitsingh7003@gmail.com', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_class`
--
ALTER TABLE `schedule_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streams`
--
ALTER TABLE `streams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verification_data`
--
ALTER TABLE `verification_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule_class`
--
ALTER TABLE `schedule_class`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `streams`
--
ALTER TABLE `streams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `verification_data`
--
ALTER TABLE `verification_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
