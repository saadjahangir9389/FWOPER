-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 08:22 AM
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
(6521, 'haseeb javaid', 'jm', 'nms', '0000-00-00', 'bsse', 'it', 'rwp'),
(12345, 'ahmad ali', 'GM', 'MS', '0000-00-00', 'MBA', 'HR', 'Karachi'),
(78990, 'Ali Raza', 'AM-IT', 'MS-5', '2018-10-01', 'BS-CS', 'IT DTE', 'Karachi');

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
(1, 'user1', 'user1', 0),
(2, 'user2', 'user2', 1),
(3, 'user3', 'user3', 2),
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
