-- phpMyAdmin SQL Dump
-- version 6.0.0-dev
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2025 at 04:08 PM
-- Server version: 11.7.2-MariaDB
-- PHP Version: 8.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sect`
--
DROP DATABASE IF EXISTS `sect`;
CREATE DATABASE IF NOT EXISTS `sect` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sect`;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
CREATE TABLE `gender` (
  `genderId` bigint(11) NOT NULL,
  `gender` varchar(50) NOT NULL DEFAULT '',
  `dateCreate` datetime DEFAULT current_timestamp(),
  `dateUpdate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genderId`, `gender`, `dateCreate`, `dateUpdate`) VALUES
(1, 'Female', '2025-07-17 16:46:30', '2025-07-17 16:46:30'),
(2, 'Male', '2025-07-17 16:46:30', '2025-07-17 16:46:30'),
(3, 'Rather not say', '2025-07-17 16:46:30', '2025-07-17 16:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `messageId` bigint(11) NOT NULL,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(13) NOT NULL DEFAULT '',
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `dateCreate` datetime DEFAULT current_timestamp(),
  `dateUpdate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageId`, `fullname`, `email`, `phone`, `subject`, `message`, `dateCreate`, `dateUpdate`) VALUES
(1, 'alex okama', 'alex@yahoo.com', '708163639', 'Email Support', 'Hello', '2025-07-17 19:22:06', '2025-07-17 19:22:06'),
(2, 'Ann Okama', 'ann@yahoo.com', '4521323213', 'eLearning Support', 'Hola', '2025-07-17 19:23:41', '2025-07-17 19:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `roleId` bigint(11) NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT '',
  `dateCreate` datetime DEFAULT current_timestamp(),
  `dateUpdate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `role`, `dateCreate`, `dateUpdate`) VALUES
(1, 'Admin', '2025-07-17 16:46:30', '2025-07-17 16:46:30'),
(2, 'Staff', '2025-07-17 16:46:30', '2025-07-17 16:46:30'),
(3, 'Student', '2025-07-17 16:46:30', '2025-07-17 16:46:30'),
(4, 'Customer', '2025-07-17 16:46:30', '2025-07-17 16:46:30'),
(5, 'Owner', '2025-07-17 16:46:30', '2025-07-17 16:46:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `userId` bigint(11) NOT NULL,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(13) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `token` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `roleId` tinyint(1) NOT NULL DEFAULT 0,
  `genderId` tinyint(1) NOT NULL DEFAULT 0,
  `userCreated` datetime DEFAULT current_timestamp(),
  `userUpdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `fullname`, `email`, `phone`, `username`, `password`, `token`, `status`, `roleId`, `genderId`, `userCreated`, `userUpdated`) VALUES
(4, 'Alex okama', 'okama@yahoo.com', '+254785412623', 'alex', '$2y$10$aZgDwu1rNMw36dgod0kvxeTl2UzOwvUqrC0J08za6WMS.A6xvxWW.', NULL, 0, 3, 2, '2025-07-31 19:06:32', '2025-07-31 19:06:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`genderId`),
  ADD UNIQUE KEY `gender` (`gender`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`),
  ADD UNIQUE KEY `role` (`role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `genderId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
