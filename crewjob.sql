-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.8-MariaDB
-- PHP Version: 5.6.14

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
-- Структура на таблица `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_deleted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `icon`, `date_added`, `date_deleted`) VALUES
(1, 'Freelance', '', 'sgb', '2016-04-16 15:47:15', '0000-00-00');

-- --------------------------------------------------------

--
-- Структура на таблица `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_key` smallint(6) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `org_filename` varchar(255) NOT NULL,
  `crop_file` varchar(255) DEFAULT NULL,
  `file_type` varchar(50) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `files`
--

INSERT INTO `files` (`id`, `user_id`, `file_key`, `filename`, `org_filename`, `crop_file`, `file_type`, `project_id`) VALUES
(34, 1, 1, 'secondarytile.png', 'secondarytile.png', 'crop-1-secondarytile.png', '.png', 59),
(35, 1, 0, 'chrome_100_percent.pak', 'chrome_100_percent.pak', NULL, '.pak', 0),
(36, 1, 1, 'BAnner-002.jpg', 'BAnner-002.jpg', 'crop-1-BAnner-002.jpg', '.jpg', 60),
(37, 1, 1, 'BANNER-003.jpg', 'BANNER-003.jpg', 'crop-1-BANNER-003.jpg', '.jpg', 61),
(38, 1, 1, 'BILL-01.jpg', 'BILL-01.jpg', 'crop-1-BILL-01.jpg', '.jpg', 62),
(39, 5, 1, 'BANNER-0031.jpg', 'BANNER-003.jpg', 'crop-5-BANNER-0031.jpg', '.jpg', 63);

-- --------------------------------------------------------

--
-- Структура на таблица `links`
--

CREATE TABLE `links` (
  `link_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_note` varchar(1024) NOT NULL,
  `link` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `links`
--

INSERT INTO `links` (`link_id`, `user_id`, `link_note`, `link`) VALUES
(19, 5, 'кудсхсдкудс', 'http://dir.bg');

-- --------------------------------------------------------

--
-- Структура на таблица `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date_added` datetime NOT NULL,
  `date_deleted` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `date_added`, `date_deleted`, `user_id`, `status`) VALUES
(60, 'first project', 'p into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2016-04-17 00:00:00', '0000-00-00', 1, 0),
(61, 'second project', 'p into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2016-04-17 00:00:00', '0000-00-00', 1, 0),
(62, 'thirth project', 'p into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '2016-04-17 00:00:00', '0000-00-00', 1, 0),
(63, 'sagfsefseweaf', 'рифтове. Този начин не само е оцелял повече от 5 века, но е навлязъл и в публикуването на електронни издания като е запазен почти без промяна. Популяризиран е през 60те години на 20ти век със издаването на Letraset листи, съдържащи Lorem Ipsum пасажи, популярен е и в наши дни във софтуер за печатни издания като Aldus PageMaker, който включва различни версии на Lorem Ip', '2016-04-17 00:00:00', '0000-00-00', 5, 0);

-- --------------------------------------------------------

--
-- Структура на таблица `project_application`
--

CREATE TABLE `project_application` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `project_application`
--

INSERT INTO `project_application` (`id`, `project_id`, `user_id`, `date_added`) VALUES
(4, 60, 5, '2016-04-16 21:00:00');

-- --------------------------------------------------------

--
-- Структура на таблица `project_category_rel`
--

CREATE TABLE `project_category_rel` (
  `id` int(11) NOT NULL,
  `category_ID` int(11) NOT NULL,
  `project_ID` int(11) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `project_category_rel`
--

INSERT INTO `project_category_rel` (`id`, `category_ID`, `project_ID`, `date_added`) VALUES
(41, 1, 60, '2016-04-17 00:00:00'),
(42, 1, 61, '2016-04-17 00:00:00'),
(43, 1, 62, '2016-04-17 00:00:00'),
(44, 1, 63, '2016-04-17 00:00:00');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `avatar` varchar(100) NOT NULL,
  `user_note` text NOT NULL,
  `date_create` date NOT NULL,
  `date_delete` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `user_name`, `gender`, `date_of_birth`, `avatar`, `user_note`, `date_create`, `date_delete`) VALUES
(1, 'elp_vr1@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Емил Петров', 0, '1971-02-22', '', 'dfjhydfyhufdk', '2016-04-16', NULL),
(2, 'elp_vr2@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'ime ime', 0, '2016-03-29', '', 'uiydsgdcuygdiu', '2016-04-16', NULL),
(3, 'elp_vr3@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 'kjahdsnkjds', 1, '2016-03-29', '', 'sdkjbdsjkfbdskj', '2016-04-16', NULL),
(4, 'elp_vr4@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '', NULL, NULL, '', '', '2016-04-17', NULL),
(5, 'ipetrovbg@abv.bg', '81dc9bdb52d04dc20036dbd8313ed055', '', NULL, NULL, '', '', '2016-04-17', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `users_categories`
--

CREATE TABLE `users_categories` (
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users_categories`
--

INSERT INTO `users_categories` (`user_id`, `category_id`) VALUES
(1, 1),
(1, 3),
(1, 8),
(5, 1),
(5, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`link_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `project_application`
--
ALTER TABLE `project_application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `project_category_rel`
--
ALTER TABLE `project_category_rel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_ID` (`category_ID`),
  ADD KEY `project_ID` (`project_ID`),
  ADD KEY `project_ID_2` (`project_ID`),
  ADD KEY `project_ID_3` (`project_ID`),
  ADD KEY `project_ID_4` (`project_ID`),
  ADD KEY `category_ID_2` (`category_ID`),
  ADD KEY `category_ID_3` (`category_ID`),
  ADD KEY `project_ID_5` (`project_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `project_application`
--
ALTER TABLE `project_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `project_category_rel`
--
ALTER TABLE `project_category_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
