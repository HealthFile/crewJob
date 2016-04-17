-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2016 at 08:02 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crewjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_key` smallint(6) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `org_filename` varchar(255) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `file_key`, `filename`, `org_filename`, `file_type`, `project_id`) VALUES
(3, 2, 1, 'Mortal-Kombat-X-Scorpion.jpg', 'Mortal-Kombat-X-Scorpion.jpg', '.jpg', 34),
(4, 2, 1, 'crop-2-Mortal-Kombat-X-Scorpion.jpg', 'crop-2-Mortal-Kombat-X-Scorpion.jpg', 'jpg', 34),
(5, 2, 1, '1.jpg', '1.jpg', '.jpg', 35),
(6, 2, 1, 'crop-2-1.jpg', 'crop-2-1.jpg', 'jpg', 35),
(7, 2, 1, 'mirrorsedge.jpg', 'mirrorsedge.jpg', '.jpg', 36),
(8, 2, 1, 'crop-2-mirrorsedge.jpg', 'crop-2-mirrorsedge.jpg', 'jpg', 36);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `project_id_2` (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
