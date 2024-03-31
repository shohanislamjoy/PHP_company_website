-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 01:03 PM
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
(36, 'Farhana Ahmed', 'farhana.ahmed@gmail.com', ' An experienced developer interested in collaborating with your company on web development projects. Proficient in frontend and backend development, I aim to contribute to the success of your web initiatives.'),
(37, 'Mohammad Rahman', 'mohammad.rahman@yahoo.com', ' A game development expert keen to join your team for gaming projects. With a track record of creating captivating gaming experiences, I am eager to bring my skills to your gaming endeavors.'),
(38, 'Tasnim Akter', 'tasnim.akter@gmail.com', 'Tasnim is enthusiastic about working with your company on inventory management solutions. With her proficiency in inventory control and system optimization, she aims to enhance your inventory management processes.'),
(39, 'Aisha Khan', 'aisha.khan@yahoo.com', ' An ERP solutions architect expressing interest in collaborating on ERP implementation projects. With expertise in designing and deploying tailored ERP systems, I aim to support your ERP initiatives.');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `website_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `description`, `image_url`, `website_link`) VALUES
(6, 'Togu Mogu', 'We have created a complete platform for new parents or prospective parents in Bangladesh. From family planning, and pregnancy to parents of 10-year-old children, our app is equipped with all the necessary information, services and products.', 'frontend/img/project_pictures/togumogu.png', 'https://togumogu.com/'),
(7, 'Financial Express', 'The Financial Express is an English-language daily published from Dhaka, Bangladesh, established in 1993. As of 2021 it was the second largest English language newspaper in Bangladesh. Its stories focus mostly on business and economic issues, including international economic news', 'frontend/img/project_pictures/fin_ex.PNG', 'https://thefinancialexpress.com.bd/'),
(9, 'Daily Cricket', 'dailycricket.com.bd, a fully owned subsidy of ONE DIGITAL BD, is a sports based news website, covering exclusively the game of cricket. The site features extensive and insightful editorial coverage; news, reports, articles, fixtures; and ball by ball live update of all international and major domestic cricket competitions from around the world.', 'frontend/img/project_pictures/daily_cri.png', 'https://dailycricket.com.bd/en'),
(10, 'Runner', 'Runner Automobiles PLC.. is committed to achieve business excellence through ultimate customer satisfaction, preventing environmental pollution and ensuring healthy work atmosphere. RA PLC’s manufacturing plant is located in Bhaluka,', 'frontend/img/project_pictures/runner.png', 'https://runnerautomobiles.com/'),
(13, 'CX Construction', 'CXConstruction, an Ontario-based commercial construction firm, boasts 15+ years of experience. Originating as a 2003 renovation startup, we have grown to specialize in commercial and institutional sectors with hundreds of projects completed all across Ontario.', 'frontend/img/project_pictures/cx_con.PNG', 'https://cxconstruction.com/');

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
(40, 'Tamim Ahmed', 'Marketing Manager at zenotech', 'Battery Low Interactives web development team created a stunning website for our company that perfectly encapsulated our brand identity. Their attention to detail and commitment to excellence ensured that our online presence stood out in a crowded digital landscape. Highly recommended!', 5),
(41, 'Karim Jabbar', 'Game Developer', 'Working with Battery Low Interactive on game development projects has been an absolute pleasure. Their expertise in both traditional and cutting-edge technologies like AR and VR is unmatched. They brought our game concepts to life with creativity and precision, delivering top-notch experiences that captivated players worldwide.', 5),
(42, 'Zina Aktar', 'Operations Manager', 'Battery Low Interactives inventory management system has revolutionized how we handle our products. The system they developed for us is user-friendly, secure, and tailored perfectly to our needs. Thanks to their solution, we now have complete control over our inventory, leading to improved efficiency and cost savings.', 4),
(43, 'Miraz Hossian', 'CEO', 'Battery Low Interactives custom ERP solution has been instrumental in streamlining our business processes. Their team took the time to understand our unique requirements and delivered a robust system that integrates seamlessly across all departments.', 5),
(44, 'Jessica Lee', ' Product Manager', 'Battery Low Interactives expertise in application development is unparalleled. They guided us through every stage of the development process, from conceptualization to launch, with professionalism and skill. Their in-house applications are a testament to their innovation and dedication to excellence.', 4),
(45, 'David Anderson', 'Marketing Director', ' Battery Low Interactive is not just a creative agency; they are visionaries who understand the power of storytelling. Their creative marketing campaigns have elevated our brand to new heights, resonating with our audience on a deep emotional level. Collaborating with them has been a game-changer for our companys growth trajectory.', 5);

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
(2, 'Admin', 'admin@gmail.com', '6461234464', '$2y$10$En73U9pX74MjHmUIXY7UN.BvuW0eOKYYxx27E25KZzeBZp2h7v5v6');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
