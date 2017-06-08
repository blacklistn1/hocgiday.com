-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 06:57 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoc_gi_day`
--

-- --------------------------------------------------------

--
-- Table structure for table `hgd_periods`
--

CREATE TABLE `hgd_periods` (
  `pr_id` int(11) NOT NULL,
  `pr_period` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hgd_periods_teaching_forms`
--

CREATE TABLE `hgd_periods_teaching_forms` (
  `tf_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hgd_price_list`
--

CREATE TABLE `hgd_price_list` (
  `u_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `tf_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hgd_subjects`
--

CREATE TABLE `hgd_subjects` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hgd_subjects_teaching_forms`
--

CREATE TABLE `hgd_subjects_teaching_forms` (
  `s_id` int(11) NOT NULL,
  `tf_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hgd_teachers`
--

CREATE TABLE `hgd_teachers` (
  `u_id` int(11) NOT NULL,
  `t_first_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_last_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_full_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_teaching_level` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_experience` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_location` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_introduction` text COLLATE utf8_unicode_ci,
  `t_avatar` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_cover` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `t_achievements` text COLLATE utf8_unicode_ci,
  `t_bachelor` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hgd_teachers_subjects`
--

CREATE TABLE `hgd_teachers_subjects` (
  `u_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hgd_teaching_forms`
--

CREATE TABLE `hgd_teaching_forms` (
  `tf_id` int(11) NOT NULL,
  `tf_name` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hgd_users`
--

CREATE TABLE `hgd_users` (
  `u_id` int(11) NOT NULL,
  `u_level` int(11) DEFAULT NULL,
  `u_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_password` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `u_creation_date` datetime DEFAULT NULL,
  `u_status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hgd_periods`
--
ALTER TABLE `hgd_periods`
  ADD PRIMARY KEY (`pr_id`);

--
-- Indexes for table `hgd_periods_teaching_forms`
--
ALTER TABLE `hgd_periods_teaching_forms`
  ADD KEY `tf_id` (`tf_id`),
  ADD KEY `pr_id` (`pr_id`);

--
-- Indexes for table `hgd_price_list`
--
ALTER TABLE `hgd_price_list`
  ADD KEY `pr_id` (`pr_id`),
  ADD KEY `tf_id` (`tf_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `hgd_subjects`
--
ALTER TABLE `hgd_subjects`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_name` (`s_name`);

--
-- Indexes for table `hgd_subjects_teaching_forms`
--
ALTER TABLE `hgd_subjects_teaching_forms`
  ADD KEY `s_id` (`s_id`),
  ADD KEY `tf_id` (`tf_id`);

--
-- Indexes for table `hgd_teachers`
--
ALTER TABLE `hgd_teachers`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `hgd_teachers_subjects`
--
ALTER TABLE `hgd_teachers_subjects`
  ADD KEY `u_id` (`u_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `hgd_teaching_forms`
--
ALTER TABLE `hgd_teaching_forms`
  ADD PRIMARY KEY (`tf_id`),
  ADD UNIQUE KEY `tf_name` (`tf_name`);

--
-- Indexes for table `hgd_users`
--
ALTER TABLE `hgd_users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_name_UNIQUE` (`u_name`),
  ADD UNIQUE KEY `u_email_UNIQUE` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hgd_periods`
--
ALTER TABLE `hgd_periods`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hgd_subjects`
--
ALTER TABLE `hgd_subjects`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hgd_teaching_forms`
--
ALTER TABLE `hgd_teaching_forms`
  MODIFY `tf_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hgd_users`
--
ALTER TABLE `hgd_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `hgd_periods_teaching_forms`
--
ALTER TABLE `hgd_periods_teaching_forms`
  ADD CONSTRAINT `hgd_periods_teaching_forms_ibfk_1` FOREIGN KEY (`tf_id`) REFERENCES `hgd_teaching_forms` (`tf_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hgd_periods_teaching_forms_ibfk_2` FOREIGN KEY (`pr_id`) REFERENCES `hgd_periods` (`pr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hgd_price_list`
--
ALTER TABLE `hgd_price_list`
  ADD CONSTRAINT `hgd_price_list_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `hgd_teachers` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hgd_price_list_ibfk_2` FOREIGN KEY (`s_id`) REFERENCES `hgd_subjects_teaching_forms` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hgd_price_list_ibfk_3` FOREIGN KEY (`tf_id`) REFERENCES `hgd_periods_teaching_forms` (`tf_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hgd_price_list_ibfk_4` FOREIGN KEY (`pr_id`) REFERENCES `hgd_periods_teaching_forms` (`pr_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hgd_subjects_teaching_forms`
--
ALTER TABLE `hgd_subjects_teaching_forms`
  ADD CONSTRAINT `hgd_subjects_teaching_forms_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `hgd_subjects` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hgd_subjects_teaching_forms_ibfk_2` FOREIGN KEY (`tf_id`) REFERENCES `hgd_teaching_forms` (`tf_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hgd_teachers`
--
ALTER TABLE `hgd_teachers`
  ADD CONSTRAINT `hgd_teachers_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `hgd_users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hgd_teachers_subjects`
--
ALTER TABLE `hgd_teachers_subjects`
  ADD CONSTRAINT `hgd_teachers_subjects_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `hgd_subjects` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hgd_teachers_subjects_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `hgd_users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
