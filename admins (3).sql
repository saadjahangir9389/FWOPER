-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 11:47 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admins`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees_data`
--

CREATE TABLE `employees_data` (
  `emp_no` int(255) NOT NULL,
  `emp_name` varchar(255) NOT NULL,
  `emp_appointment` varchar(255) NOT NULL,
  `emp_cat` varchar(255) NOT NULL,
  `emp_doe` date NOT NULL,
  `emp_qualification` varchar(255) NOT NULL,
  `emp_dir` varchar(255) NOT NULL,
  `emp_pro_loc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees_data`
--

INSERT INTO `employees_data` (`emp_no`, `emp_name`, `emp_appointment`, `emp_cat`, `emp_doe`, `emp_qualification`, `emp_dir`, `emp_pro_loc`) VALUES
(5566, 'Saad Jahangir', 'IT-DTE', 'GM', '2021-07-08', 'BSSE', 'IT', 'RWP'),
(6521, 'haseeb javaid', 'jm', 'nms', '0000-00-00', 'bsse', 'it', 'rwp'),
(12345, 'ahmad ali', 'AM', 'MS', '2021-07-01', 'MBA', 'HR', 'Karachi'),
(78990, 'Ali Raza', 'AM-IT', 'MS-5', '2018-10-01', 'BS-CS', 'IT DTE', 'Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `part1`
--

CREATE TABLE `part1` (
  `id` int(20) NOT NULL,
  `emp_name` varchar(50) DEFAULT NULL,
  `period_from` date DEFAULT NULL,
  `period_to` date DEFAULT NULL,
  `warnings` varchar(20) DEFAULT NULL,
  `relevantduties` varchar(20) DEFAULT NULL,
  `emp_no` int(50) DEFAULT NULL,
  `count` int(1) NOT NULL,
  `insert_date_time` date DEFAULT NULL,
  `req_count` int(5) NOT NULL,
  `1a` int(5) DEFAULT NULL,
  `1b` int(5) DEFAULT NULL,
  `1c` int(5) DEFAULT NULL,
  `1d` int(5) DEFAULT NULL,
  `1e` int(5) DEFAULT NULL,
  `1f` int(5) DEFAULT NULL,
  `1g` int(5) DEFAULT NULL,
  `1h` int(5) DEFAULT NULL,
  `1i` int(5) DEFAULT NULL,
  `1_total` float DEFAULT NULL,
  `2a` float DEFAULT NULL,
  `2b` float DEFAULT NULL,
  `2c` float DEFAULT NULL,
  `2d` float DEFAULT NULL,
  `2e` float DEFAULT NULL,
  `2f` float DEFAULT NULL,
  `2g` float DEFAULT NULL,
  `2h` float DEFAULT NULL,
  `2i` float DEFAULT NULL,
  `2j` float DEFAULT NULL,
  `2_total` float DEFAULT NULL,
  `3a` int(5) DEFAULT NULL,
  `3b` int(5) DEFAULT NULL,
  `3c` int(5) DEFAULT NULL,
  `3d` int(5) DEFAULT NULL,
  `3e` int(5) DEFAULT NULL,
  `3f` int(5) DEFAULT NULL,
  `3_total` float DEFAULT NULL,
  `pen_picture` text DEFAULT NULL,
  `strength` text DEFAULT NULL,
  `weakness` text DEFAULT NULL,
  `training` text DEFAULT NULL,
  `io_name` varchar(255) DEFAULT NULL,
  `io_designation` varchar(255) DEFAULT NULL,
  `io_assesment_agree` varchar(255) DEFAULT NULL,
  `io_assesment_reason` text DEFAULT NULL,
  `employment_recom` varchar(255) DEFAULT NULL,
  `pay_prom_recom` varchar(255) DEFAULT NULL,
  `special_assignment` varchar(255) DEFAULT NULL,
  `spec_assgn_desc` text DEFAULT NULL,
  `endorsement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `part1`
--

INSERT INTO `part1` (`id`, `emp_name`, `period_from`, `period_to`, `warnings`, `relevantduties`, `emp_no`, `count`, `insert_date_time`, `req_count`, `1a`, `1b`, `1c`, `1d`, `1e`, `1f`, `1g`, `1h`, `1i`, `1_total`, `2a`, `2b`, `2c`, `2d`, `2e`, `2f`, `2g`, `2h`, `2i`, `2j`, `2_total`, `3a`, `3b`, `3c`, `3d`, `3e`, `3f`, `3_total`, `pen_picture`, `strength`, `weakness`, `training`, `io_name`, `io_designation`, `io_assesment_agree`, `io_assesment_reason`, `employment_recom`, `pay_prom_recom`, `special_assignment`, `spec_assgn_desc`, `endorsement`) VALUES
(0, 'ahmad ali', '2021-07-01', '2021-07-28', 'NIL', 'yes', 12345, 1, '2021-07-28', 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 45, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 20, 5, 5, 5, 5, 5, 5, 30, 'Test picture', 'No strength', 'No weakness', 'No need ', 'Fahad', 'AM', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'haseeb javaid', '2021-07-01', '2021-07-28', 'NIL', 'yes', 6521, 1, '2021-07-28', 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'Ali Raza', '2021-01-01', '2021-07-28', '3', 'yes', 78990, 1, '2021-07-28', 0, 5, 5, 5, 5, 5, 5, 5, 5, 5, 45, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 20, 5, 5, 5, 5, 5, 5, 30, 'Test Pen picture', 'Test strength', 'test weakness', 'test training', 'Haseeb', 'AM', '', '', 'yes', 'raise', 'no', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `part2`
--

CREATE TABLE `part2` (
  `id` int(20) NOT NULL,
  `emp_no` int(50) DEFAULT NULL,
  `emp_name` varchar(100) DEFAULT NULL,
  `1a` int(10) DEFAULT NULL,
  `1b` int(10) DEFAULT NULL,
  `1c` int(10) DEFAULT NULL,
  `1d` int(10) DEFAULT NULL,
  `1e` int(10) DEFAULT NULL,
  `1f` int(10) DEFAULT NULL,
  `1g` int(10) DEFAULT NULL,
  `1h` int(10) DEFAULT NULL,
  `1i` int(10) DEFAULT NULL,
  `2a` int(10) DEFAULT NULL,
  `2b` int(10) DEFAULT NULL,
  `2c` int(10) DEFAULT NULL,
  `2d` int(10) DEFAULT NULL,
  `2e` int(10) DEFAULT NULL,
  `2f` int(10) DEFAULT NULL,
  `2g` int(10) DEFAULT NULL,
  `2h` int(10) DEFAULT NULL,
  `2i` int(10) DEFAULT NULL,
  `2j` int(10) DEFAULT NULL,
  `3a` int(10) DEFAULT NULL,
  `3b` int(10) DEFAULT NULL,
  `3c` int(10) DEFAULT NULL,
  `3d` int(10) DEFAULT NULL,
  `3e` int(10) DEFAULT NULL,
  `3f` int(10) DEFAULT NULL,
  `pen_picture` varchar(200) DEFAULT NULL,
  `strength` varchar(200) DEFAULT NULL,
  `weakness` varchar(200) DEFAULT NULL,
  `training_needs` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'RO', 'ro', 0),
(2, 'IO', 'io', 1),
(3, 'SRO', 'sro', 2),
(4, 'user4', 'user4', 3),
(5, 'user5', 'user5', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees_data`
--
ALTER TABLE `employees_data`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `part1`
--
ALTER TABLE `part1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`),
  ADD UNIQUE KEY `id_3` (`id`),
  ADD KEY `id_4` (`id`);

--
-- Indexes for table `part2`
--
ALTER TABLE `part2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `part1`
--
ALTER TABLE `part1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `part2`
--
ALTER TABLE `part2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
