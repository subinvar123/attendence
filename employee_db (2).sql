-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2022 at 09:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(200) NOT NULL,
  `user_id` int(100) NOT NULL,
  `task` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `working_hours` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `user_id`, `task`, `date`, `start_time`, `end_time`, `working_hours`) VALUES
(46, 24, 'php', '2022-04-01', '08:30:00', '18:08:00', '00:00:00'),
(47, 24, 'php', '2022-04-02', '08:32:00', '18:12:00', '00:00:00'),
(48, 24, 'php', '2022-04-03', '08:30:00', '18:15:00', '00:00:00'),
(49, 24, 'php', '2022-04-04', '08:30:00', '18:16:00', '00:00:00'),
(78, 24, 'php', '2022-04-09', '08:30:00', '10:31:00', '00:00:00'),
(80, 26, 'php', '2022-03-25', '08:48:00', '12:48:00', '00:00:00'),
(81, 26, 'php', '2022-04-13', '08:50:00', '16:18:00', '00:00:00'),
(87, 24, '', '2022-04-07', '08:30:00', '18:30:00', '00:00:10'),
(88, 24, '', '2022-04-08', '08:02:00', '16:29:00', '00:00:08'),
(89, 24, '', '2022-04-11', '08:16:00', '10:17:00', '00:00:02'),
(94, 24, '', '2022-04-13', '08:33:00', '20:33:00', '00:00:12'),
(96, 24, '', '2022-04-08', '08:36:00', '10:36:00', '00:00:02'),
(97, 24, '', '2022-04-10', '07:15:00', '09:15:00', '00:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `id` int(200) NOT NULL,
  `user_id` int(50) NOT NULL,
  `leavetype` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave`
--

INSERT INTO `leave` (`id`, `user_id`, `leavetype`, `status`, `start_date`, `end_date`) VALUES
(72, 24, 'Full Day', 0, '2022-02-24', '2022-02-24'),
(73, 24, 'Half Day', 0, '2022-02-10', '2022-02-10'),
(74, 24, 'Full Day', 0, '2022-04-09', '2022-04-09'),
(78, 26, 'Full Day', 0, '2022-04-13', '2022-04-14'),
(82, 24, 'Half Day', 0, '2022-03-04', '2022-03-04'),
(83, 24, 'Full Day', 1, '2022-04-11', '2022-04-11'),
(88, 24, 'Full Day', 2, '2022-04-08', '2022-04-08'),
(89, 24, 'Full Day', 0, '2022-04-10', '2022-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dateofjoining` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `role`, `address`, `dateofjoining`) VALUES
(1, 'adminfirst', 'adminlast', 'admin@gmail.com', '1aa86bb7935d6925c8a513ab2517db23', 'admin', '1234', '2022-04-06'),
(24, 'subin', 'geevarghese', 'mailtosubin1996@gmail.com', '1bb019ad2c64d40227739307e2210f6f', 'user', 'typo3', '2022-04-13'),
(26, 'right', 'left', 'mail12@gmail.com', '679f0318a048b6ef1d1d96fd76d4c146', 'user', 'nam', '2022-03-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `leave`
--
ALTER TABLE `leave`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
