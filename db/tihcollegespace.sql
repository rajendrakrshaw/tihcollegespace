-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 06:23 PM
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
  `time` time NOT NULL,
  `classlink` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_class`
--

INSERT INTO `schedule_class` (`id`, `faculty_id`, `faculty_name`, `stream`, `sem`, `section`, `subject`, `topic`, `date`, `time`, `classlink`) VALUES
(24, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Combined', 'C Programming', 'Algorithms and Flowchart', '2021-12-10', '10:00:00', ''),
(25, 1, 'Subrata Saha', 'BCA', 'SEM3', 'Combined', 'C++ Programming', 'Polymorphism', '2021-12-07', '11:20:00', 'https://meet.google.com/mon-vwbi-ign'),
(27, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Installing Turbo C', '2021-12-18', '12:40:00', ''),
(28, 1, 'Subrata Saha', 'BCA', 'SEM2', 'Alpha', 'Data Structure using C', 'Algorithms and Flowchart', '2021-12-18', '10:00:00', ''),
(29, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Beta', 'C Programming', 'Algorithms and Flowchart', '2021-12-16', '11:00:00', ''),
(30, 1, 'Subrata Saha', 'BCA', 'SEM4', 'Alpha', 'Programming with Java', 'Inheritance', '2021-12-09', '11:20:00', ''),
(31, 1, 'Subrata Saha', 'BCA', 'SEM4', 'Beta', 'Programming Lab with Java', 'Inheritance', '2021-12-08', '10:00:00', ''),
(32, 1, 'Subrata Saha', 'BCA', 'SEM2', 'Combined', 'Data Structure using C', 'Algorithms and Flowchart', '2021-12-16', '02:30:00', ''),
(33, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Installing Turbo C', '2021-12-09', '10:00:00', ''),
(34, 1, 'Subrata Saha', 'BCA', 'SEM4', 'Alpha', 'Programming with Java', 'Polymorphism', '2021-12-16', '11:20:00', ''),
(35, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Algorithms and Flowchart', '2021-12-10', '12:40:00', '');

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
(17, 'Aptitude', 3),
(18, 'OS Lab', 3),
(19, 'Programming with Java', 4),
(20, 'Programming Lab with Java', 4);

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE `updates` (
  `id` int(250) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `title` varchar(150) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `file` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `stream`, `year`, `title`, `message`, `file`, `date`, `time`) VALUES
(1, 'BCA', 'Third Year', 'College Reopening', 'It is informed that offline classes of 3rd year is started from 16th November 2021.\r\nRoutine will be given very soon.', '', '2021-12-02', '17:09:42'),
(2, 'BCA', 'Third Year', 'College Reopening', 'It is informed that offline classes of 3rd year is started from 16th November 2021.\r\nRoutine will be given very soon.\r\n\r\n', '', '2021-12-02', '17:11:59'),
(3, 'BBA', 'Second Yea', 'BBA 2nd yr', 'It is informed that offline classes of 3rd year is started from 16th November 2021.\r\nRoutine will be given very soon.\r\n\r\n', '', '2021-12-02', '17:18:20'),
(8, 'BCA', 'First Year', 'Admit Card', 'It is informed that offline classes of 3rd year is started from 16th November 2021.\r\nRoutine will be given very soon.\r\n\r\n', 'Updates/ADMIT CARD SEM1.pdf', '2021-12-02', '17:26:58');

-- --------------------------------------------------------

--
-- Table structure for table `update_sem`
--

CREATE TABLE `update_sem` (
  `id` int(11) NOT NULL,
  `sem` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `update_sem`
--

INSERT INTO `update_sem` (`id`, `sem`) VALUES
(1, 'All Sem'),
(2, 'SEM1'),
(3, 'SEM2'),
(4, 'SEM3'),
(5, 'SEM4'),
(6, 'SEM5'),
(7, 'SEM6');

-- --------------------------------------------------------

--
-- Table structure for table `update_streams`
--

CREATE TABLE `update_streams` (
  `id` int(11) NOT NULL,
  `stream` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `update_streams`
--

INSERT INTO `update_streams` (`id`, `stream`) VALUES
(1, 'ALL'),
(2, 'BCA'),
(3, 'BBA'),
(4, 'MCA'),
(5, 'MSC');

-- --------------------------------------------------------

--
-- Table structure for table `upload_notes`
--

CREATE TABLE `upload_notes` (
  `id` int(250) NOT NULL,
  `faculty_id` int(50) NOT NULL,
  `faculty_name` varchar(50) NOT NULL,
  `stream` varchar(10) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(250) NOT NULL,
  `recordinglink` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_notes`
--

INSERT INTO `upload_notes` (`id`, `faculty_id`, `faculty_name`, `stream`, `sem`, `section`, `subject`, `topic`, `date`, `file`, `recordinglink`) VALUES
(1, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-03', 'Notes/class.cpp', ''),
(2, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-11-29', 'Notes/EXAMPLE.CPP', 'https://youtu.be/XcVuLO2DlB8'),
(3, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/C:xampp	mpphpF698.tmp,Notes/C:xampp	mpphpF6A9.tmp,Notes/C:xampp	mpphpF6AA.tmp,', ''),
(4, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/C:xampp	mpphpCF48.tmp,Notes/C:xampp	mpphpCF49.tmp,Notes/C:xampp	mpphpCF4A.tmp,', ''),
(5, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/C:xampp	mpphp6AD6.tmp,Notes/C:xampp	mpphp6AD7.tmp,Notes/C:xampp	mpphp6AD8.tmp,', ''),
(6, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/C:xampp	mpphp46B2.tmp,Notes/C:xampp	mpphp46C2.tmp,Notes/C:xampp	mpphp46C3.tmp,', ''),
(7, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/C:xampp	mpphpCE34.tmp,Notes/C:xampp	mpphpCE35.tmp,Notes/C:xampp	mpphpCE36.tmp,', ''),
(8, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/C:xampp	mpphp57CA.tmp,Notes/C:xampp	mpphp57CB.tmp,Notes/C:xampp	mpphp57CC.tmp,', ''),
(9, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/C:xampp	mpphp7BAC.tmp,Notes/C:xampp	mpphp7BAD.tmp,Notes/C:xampp	mpphp7BBD.tmp,', ''),
(10, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/C:xampp	mpphp8270.tmp,Notes/C:xampp	mpphp8271.tmp,Notes/C:xampp	mpphp8272.tmp,', ''),
(11, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/C:xampp	mpphpF523.tmp,Notes/C:xampp	mpphpF524.tmp,Notes/C:xampp	mpphpF534.tmp,', ''),
(12, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/C:xampp	mpphpC8E1.tmp,Notes/C:xampp	mpphpC8F2.tmp,Notes/C:xampp	mpphpC8F3.tmp,', ''),
(13, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/atm.cpp,Notes/BankingSystem.cpp,Notes/C++ File Handling.docx,', ''),
(14, 1, 'Subrata Saha', 'BCA', 'SEM1', 'Alpha', 'C Programming', 'Codechef code', '2021-12-01', 'Notes/atm.cpp,Notes/BankingSystem.cpp,Notes/C++ File Handling.docx,', '');

-- --------------------------------------------------------

--
-- Table structure for table `years`
--

CREATE TABLE `years` (
  `id` int(11) NOT NULL,
  `year` varchar(50) NOT NULL,
  `stream_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `years`
--

INSERT INTO `years` (`id`, `year`, `stream_id`) VALUES
(1, 'First Year', 2),
(2, 'Second Year', 2),
(3, 'Third Year', 2),
(4, 'First Year', 3),
(5, 'Second Year', 3),
(6, 'Third Year', 3),
(7, 'First Year', 4),
(8, 'Second Year', 4),
(9, 'First Year', 5),
(10, 'Second Year', 5),
(11, 'ALL', 1);

--
-- Indexes for dumped tables
--

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
-- Indexes for table `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_sem`
--
ALTER TABLE `update_sem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_streams`
--
ALTER TABLE `update_streams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_notes`
--
ALTER TABLE `upload_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `years`
--
ALTER TABLE `years`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedule_class`
--
ALTER TABLE `schedule_class`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `update_sem`
--
ALTER TABLE `update_sem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `update_streams`
--
ALTER TABLE `update_streams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upload_notes`
--
ALTER TABLE `upload_notes`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `years`
--
ALTER TABLE `years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
