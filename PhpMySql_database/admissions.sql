-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 10:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `hobbies` varchar(255) DEFAULT NULL,
  `address` text,
  `dob` date DEFAULT NULL,
  `languages` varchar(200) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `name`, `class`, `gender`, `hobbies`, `address`, `dob`, `languages`, `images`, `created`, `modified`, `is_deleted`) VALUES
(7, 'Raja Stark', '2', 'Male', 'Drawing', 'At molestias sed dol', '2023-04-12', 'Hindi', 'download.jpg', '2024-02-10 10:40:01', '2024-02-10 10:50:07', '0'),
(8, 'Octavia Gutierrez', '1', 'Male', 'Drawing, Dancing', 'Repellendus Vero do', '1981-07-10', 'Bengali', '1707558106download.jpg', '2024-02-10 10:41:46', '2024-02-10 10:41:46', '0'),
(9, 'Rachel Richardson', '1', 'Male', 'Drawing, Dancing, Cooking', 'Ea aliqua Beatae fu', '2016-01-09', 'Bengali', '1707558129download.jpg', '2024-02-10 10:42:09', '2024-02-10 10:42:09', '0'),
(10, 'Stacy Merrill', '3', 'Male', 'Drawing', 'Perspiciatis omnis ', '2024-08-09', 'Bengali, English', '1707558729download.jpg', '2024-02-10 10:52:09', '2024-02-10 10:52:27', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
