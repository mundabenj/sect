
DROP DATABASE IF EXISTS `sect`;
CREATE DATABASE IF NOT EXISTS `sect`; 
USE `sect`;

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
);