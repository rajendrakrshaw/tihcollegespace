-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 11:37 AM
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
-- Database: `scheduleclass`
--

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(11) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `stream_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `sem`, `stream_id`) VALUES
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
(1, 'bca'),
(2, 'bba'),
(3, 'mca'),
(4, 'msc');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `semester_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `semester_id`) VALUES
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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
