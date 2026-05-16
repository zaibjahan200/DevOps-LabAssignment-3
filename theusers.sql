-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 29, 2023 at 04:15 AM
-- Server version: 10.3.9-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devopsterminal`
--
CREATE DATABASE IF NOT EXISTS `devopsterminal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `devopsterminal`;
-- --------------------------------------------------------

--
-- Table structure for table `theusers`
--

DROP TABLE IF EXISTS `theusers`;
CREATE TABLE IF NOT EXISTS `theusers` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(128) CHARACTER SET latin7 COLLATE latin7_general_cs NOT NULL,
  `user_type` char(1) NOT NULL,
  `user_isactive` bit(1) NOT NULL DEFAULT b'1',
  `user_creationdate` datetime NOT NULL DEFAULT current_timestamp(),
  `user_lastlogindate` datetime NOT NULL DEFAULT current_timestamp(),
  `user_selector` char(16) DEFAULT NULL,
  `user_token` char(64) DEFAULT NULL,
  `user_tokenexpiry` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2407 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theusers`
--

INSERT INTO `theusers` (`user_id`, `user_email`, `user_password`, `user_type`, `user_isactive`, `user_creationdate`, `user_lastlogindate`, `user_selector`, `user_token`, `user_tokenexpiry`) VALUES
(1, 'admin@localhost.com', 'devopsterminal', 'F', b'1', '2023-10-29 01:34:22', '2023-10-29 01:34:22', '60d285bd6f4a04fc', '160671874dbeb23bb4761120cb74cbbe14eb1c94155db69faf779dd9fe6b3a51', 1637991903);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
