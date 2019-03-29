-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2019 at 06:08 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstDb`
--

-- --------------------------------------------------------

--
-- Table structure for table `db1_users`
--

CREATE TABLE `db1_users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gpa` float NOT NULL,
  `gradelevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db1_users`
--

INSERT INTO `db1_users` (`name`, `email`, `password`, `gpa`, `gradelevel`) VALUES
('Jacques', 'andrej@harrisoncsd.org', 'iAmJacques', 2.1, 11),
('Allistair ', 'blabla@harrisoncsd.org', 'iAmAllistair', 1, 10),
('Asafe ', 'brandaoa@harrisoncsd.org', 'asafe007', 3, 10),
('Isaque', 'brandaoi1@harrisoncsd.org', '84322281', 4, 11),
('Sam', 'glasers@harrisoncsd.org', 'iAmSam', 3.5, 12),
('Ryan', 'ryan@666.com', 'iAmRyan', 3.7, 11),
('Noah', 'vassn@harrisoncsd.org', 'iAmNoah', 2, 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db1_users`
--
ALTER TABLE `db1_users`
  ADD UNIQUE KEY `emailIndex` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
