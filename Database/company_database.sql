-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 10:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(7, '646464', '5211313@fsdfas', 'asdasdas'),
(8, 'safkhakshf', 'asfasfas@sadA', 'asfasFdasF'),
(9, 'gggggg', 'saaaaa@sdaas', 'sfasfgasFasfA'),
(10, 'ksadkashkdhfa', 'fashfvhajsvf@hdfkhklds', 'safkjgajkfga'),
(11, 'ksadkashkdhfa', 'fashfvhajsvf@hdfkhklds', 'safkjgajkfga'),
(12, 'SADASD', 'SADASDA@sdfsdf', 'sdfsdfqwsda'),
(13, 'SADASD', 'SADASDA@sdfsdf', 'sdfsdfqwsda');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `description`, `image_url`) VALUES
(1, 'haklshdklas', 'kasfksah', 'frontend/img/project_pictures/Someday.jpg'),
(2, 'ihkfhasdf', 'asdasd', 'frontend/img/project_pictures/icon_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `occupation`, `message`, `rating`) VALUES
(3, 'fthjfhjfhjf', 'fhtjfhfhj@sihdohs', 'dfsfsdfsdf', 4),
(4, '879489564', '85946464@94964jkhghjfg', 'ihkuftykgblikhjio', 4),
(6, 'asdasdas', 'DSAASD@dsadas', 'sadfsdgijksdhklgfa', 4),
(11, 'skhddlah', 'askfhksa', 'laskjdljalf', 4),
(12, 'admin', 'tttttt', 'sfkjashfklhasfhn', 5),
(13, 'kjfhgaskhfdas', 'usayftgiuasg', 'shahin is a bad boy\r\n', 4),
(14, 'memo', ' student', 'memo is a good boy', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'Shohan', 'shohan@gmail.com', '76464358635163164', '$2y$10$Xx3P42ClTL3VdFfVOSAIQ..Di5FNHbK8JcY8nX7GV6OrLn5uRpTUK'),
(2, 'Admin', 'admin@gmail.com', '6461234464', '$2y$10$En73U9pX74MjHmUIXY7UN.BvuW0eOKYYxx27E25KZzeBZp2h7v5v6'),
(3, 'asd', 'adas@gmail.com', '5456464', '$2y$10$4MEm161Lbb4smfElxiwktu9h7GGbHRQueWsmZ8HNQKiQEUNpiVgj2'),
(5, 'asd', 'asdasd@gmail.com', '6749864653465', '$2y$10$td64cECMB8RzPwptiwkziuu2zhsdylsSVyhafgvoRLSa8BPwjtoiG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
