-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 04:56 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parsuap_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc_requests`
--

CREATE TABLE `acc_requests` (
  `acc_request_id` int(11) NOT NULL,
  `request_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `alumni_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc_requests`
--

INSERT INTO `acc_requests` (`acc_request_id`, `request_at`, `status`, `alumni_id`) VALUES
(7, '2021-10-26 07:33:34', 0, 11),
(8, '2021-10-26 18:25:31', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `street` varchar(255) NOT NULL DEFAULT 'na',
  `barangay` varchar(255) NOT NULL DEFAULT 'na',
  `city_municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL DEFAULT 'na'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `alumni_id` int(11) NOT NULL,
  `profile` varchar(255) NOT NULL DEFAULT 'http://parsuap.ph/dist/images/63457.png',
  `fname` varchar(80) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `birthdate` date NOT NULL,
  `sex` varchar(7) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cp_num` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumni_id`, `profile`, `fname`, `lname`, `birthdate`, `sex`, `email`, `cp_num`, `password`) VALUES
(11, 'http://parsuap.ph/dist/images/63457.png', 'John', 'Doe', '1998-09-28', 'female', 'bea.jeandelle17@gmail.com', '', '$2y$10$1gO3I9yjP0VJE7RTv/rqeer8dpGkmAp.CJPR2uNLUXdO3pZ0a95p2'),
(12, 'http://parsuap.ph/dist/images/63457.png', 'Ryan Czar', 'Abugao', '1995-08-15', 'male', 'nhenhe17@gmail.com', '', '$2y$10$hZ4xm1cGOwHr5CFXMmFu4OSkqI/iCJPr2PWVsy98TpWWzNKzj1xUu');

-- --------------------------------------------------------

--
-- Table structure for table `alumni_address`
--

CREATE TABLE `alumni_address` (
  `alumni_address_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `alumni_education`
--

CREATE TABLE `alumni_education` (
  `education_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `year_graduated` varchar(4) NOT NULL,
  `campus` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `archive_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `intro` text NOT NULL,
  `file` varchar(255) NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `alumni_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` int(11) NOT NULL,
  `batch_type` varchar(15) NOT NULL,
  `batch_year` varchar(4) NOT NULL,
  `alumni_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `batch_type`, `batch_year`, `alumni_id`) VALUES
(1, 'both', '2020', 12),
(2, 'both', '2012', 12);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(16) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `campus` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `forum_id` int(11) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL,
  `alumni_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`forum_id`, `topic`, `created_at`, `status`, `alumni_id`) VALUES
(28, 'This is a thread or topic', '2021-10-26 18:54:02', 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `forum_post_id` int(11) NOT NULL,
  `post_code` varchar(20) NOT NULL,
  `post` varchar(255) NOT NULL,
  `posted_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `alumni_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_posts`
--

INSERT INTO `forum_posts` (`forum_post_id`, `post_code`, `post`, `posted_at`, `alumni_id`, `forum_id`) VALUES
(19, 'PC-1635321242', 'This is a sample post', '2021-10-26 18:54:02', 12, 28);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `friend_id` int(11) NOT NULL,
  `alumni_id` int(11) NOT NULL,
  `friend_alumni_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc_requests`
--
ALTER TABLE `acc_requests`
  ADD PRIMARY KEY (`acc_request_id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumni_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `alumni_address`
--
ALTER TABLE `alumni_address`
  ADD PRIMARY KEY (`alumni_address_id`),
  ADD KEY `member_id` (`alumni_id`),
  ADD KEY `address_id` (`address_id`);

--
-- Indexes for table `alumni_education`
--
ALTER TABLE `alumni_education`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `member_id` (`alumni_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`archive_id`),
  ADD KEY `archive_ibfk_1` (`alumni_id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`batch_id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`forum_id`),
  ADD KEY `alumni_id` (`alumni_id`);

--
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`forum_post_id`),
  ADD KEY `alumni_id` (`alumni_id`),
  ADD KEY `forum_id` (`forum_id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`friend_id`),
  ADD KEY `alumni_id` (`alumni_id`),
  ADD KEY `friend_alumni_id` (`friend_alumni_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc_requests`
--
ALTER TABLE `acc_requests`
  MODIFY `acc_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `alumni_address`
--
ALTER TABLE `alumni_address`
  MODIFY `alumni_address_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alumni_education`
--
ALTER TABLE `alumni_education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `archive_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `batch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `forum_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `friend_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acc_requests`
--
ALTER TABLE `acc_requests`
  ADD CONSTRAINT `acc_requests_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`alumni_id`) ON DELETE CASCADE;

--
-- Constraints for table `alumni_address`
--
ALTER TABLE `alumni_address`
  ADD CONSTRAINT `alumni_address_ibfk_1` FOREIGN KEY (`address_id`) REFERENCES `address` (`address_id`),
  ADD CONSTRAINT `alumni_address_ibfk_2` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`alumni_id`);

--
-- Constraints for table `alumni_education`
--
ALTER TABLE `alumni_education`
  ADD CONSTRAINT `alumni_education_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `alumni_education_ibfk_2` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`alumni_id`);

--
-- Constraints for table `archive`
--
ALTER TABLE `archive`
  ADD CONSTRAINT `archive_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`alumni_id`) ON DELETE CASCADE;

--
-- Constraints for table `batch`
--
ALTER TABLE `batch`
  ADD CONSTRAINT `batch_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`alumni_id`) ON DELETE CASCADE;

--
-- Constraints for table `forum`
--
ALTER TABLE `forum`
  ADD CONSTRAINT `forum_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`alumni_id`) ON DELETE CASCADE;

--
-- Constraints for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD CONSTRAINT `forum_posts_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni` (`alumni_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `forum_posts_ibfk_2` FOREIGN KEY (`forum_id`) REFERENCES `forum` (`forum_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
