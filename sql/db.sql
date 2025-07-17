-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 17, 2025 at 04:48 PM
-- Server version: 11.4.0-MariaDB
-- PHP Version: 8.3.3

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
CREATE TABLE IF NOT EXISTS `gender` (
  `genderId` bigint(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(50) NOT NULL DEFAULT '',
  `dateCreate` datetime DEFAULT current_timestamp(),
  `dateUpdate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`genderId`),
  UNIQUE KEY `gender` (`gender`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
CREATE TABLE IF NOT EXISTS `messages` (
  `messageId` bigint(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(13) NOT NULL DEFAULT '',
  `subject` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `dateCreate` datetime DEFAULT current_timestamp(),
  `dateUpdate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`messageId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
CREATE TABLE IF NOT EXISTS `roles` (
  `roleId` bigint(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(50) NOT NULL DEFAULT '',
  `dateCreate` datetime DEFAULT current_timestamp(),
  `dateUpdate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`roleId`),
  UNIQUE KEY `role` (`role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
CREATE TABLE IF NOT EXISTS `users` (
  `userId` bigint(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(13) NOT NULL DEFAULT '',
  `username` varchar(50) NOT NULL DEFAULT '',
  `roleId` tinyint(1) NOT NULL,
  `genderId` tinyint(1) NOT NULL,
  `dateCreate` datetime DEFAULT current_timestamp(),
  `dateUpdate` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
