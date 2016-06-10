-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 10, 2016 at 02:01 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Project`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `Apllication_id` int(11) NOT NULL AUTO_INCREMENT,
  `Profile_id` int(11) NOT NULL,
  `Post_id` int(11) NOT NULL,
  PRIMARY KEY (`Apllication_id`),
  KEY `Profile_id` (`Profile_id`),
  KEY `Post_id` (`Post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`Apllication_id`, `Profile_id`, `Post_id`) VALUES
(4, 2, 2),
(5, 2, 2),
(7, 2, 2),
(8, 1, 5),
(9, 1, 5),
(10, 1, 7),
(11, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `Comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `Pagepost_id` int(11) NOT NULL,
  `Commenter_id` int(11) NOT NULL,
  PRIMARY KEY (`Comment_id`),
  KEY `Pagepost_id` (`Pagepost_id`),
  KEY `Commenter_id` (`Commenter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company_page`
--

CREATE TABLE IF NOT EXISTS `company_page` (
  `Page_id` int(11) NOT NULL,
  `Company_name` varchar(255) NOT NULL,
  `Bio` longtext NOT NULL,
  `Pageadmin_id` int(11) NOT NULL,
  PRIMARY KEY (`Page_id`),
  KEY `Page_creator_id_fk` (`Pageadmin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `Emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `Page_id` int(11) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Profile_id` int(11) NOT NULL,
  PRIMARY KEY (`Emp_id`),
  KEY `Page_id` (`Page_id`),
  KEY `Profile_id` (`Profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `follower`
--

CREATE TABLE IF NOT EXISTS `follower` (
  `Follower_id` int(11) NOT NULL,
  `Page_id` int(11) NOT NULL,
  `Profile_id` int(11) NOT NULL,
  PRIMARY KEY (`Follower_id`),
  KEY `Page_id_fk` (`Page_id`),
  KEY `Profile_id_fk` (`Profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friendrequest_recv`
--

CREATE TABLE IF NOT EXISTS `friendrequest_recv` (
  `Req_id` int(11) NOT NULL AUTO_INCREMENT,
  `Profile_id` int(11) NOT NULL,
  `Sender_id` int(11) NOT NULL,
  `Req_status` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Sender_name` varchar(255) NOT NULL,
  PRIMARY KEY (`Req_id`),
  KEY `Profile_id` (`Profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `friendrequest_recv`
--

INSERT INTO `friendrequest_recv` (`Req_id`, `Profile_id`, `Sender_id`, `Req_status`, `remember_token`, `created_at`, `updated_at`, `Sender_name`) VALUES
(1, 1, 2, 1, NULL, NULL, NULL, 'isi\r\n'),
(9, 6, 1, 1, NULL, NULL, NULL, 'Ishita'),
(10, 13, 1, 0, NULL, NULL, NULL, 'Ishita'),
(11, 17, 1, 0, NULL, NULL, NULL, 'Ishita'),
(12, 17, 1, 0, NULL, NULL, NULL, 'Ishita'),
(13, 1, 5, 1, NULL, NULL, NULL, 'Firoz'),
(15, 1, 14, 1, NULL, NULL, NULL, 'ami'),
(16, 1, 15, 0, NULL, NULL, NULL, 'hi'),
(17, 22, 1, 0, NULL, NULL, NULL, 'Ishita'),
(18, 1, 34, 0, NULL, NULL, NULL, 'Promi');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `Profile_id` int(11) NOT NULL,
  `Friend_id` int(11) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Friend_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Profile_id`,`Friend_id`),
  KEY `Profile_id` (`Profile_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`Profile_id`, `Friend_id`, `remember_token`, `created_at`, `updated_at`, `Friend_name`) VALUES
(1, 2, NULL, NULL, NULL, 'isi'),
(1, 5, NULL, NULL, NULL, 'Firoz'),
(1, 6, NULL, NULL, NULL, 'methun'),
(1, 14, NULL, NULL, NULL, 'ami'),
(2, 1, NULL, NULL, NULL, 'Ishita'),
(5, 1, NULL, NULL, NULL, 'Ishita'),
(6, 1, NULL, NULL, NULL, 'Ishita'),
(14, 1, NULL, NULL, NULL, 'ami');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE IF NOT EXISTS `jobpost` (
  `Post_id` int(11) NOT NULL AUTO_INCREMENT,
  `Recruiter_id` int(11) NOT NULL,
  `Post_name` varchar(255) NOT NULL,
  `Emp_type` varchar(255) NOT NULL,
  `Experience` varchar(255) NOT NULL,
  `Salary` int(11) NOT NULL,
  PRIMARY KEY (`Post_id`),
  KEY `Recruiter_id` (`Recruiter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`Post_id`, `Recruiter_id`, `Post_name`, `Emp_type`, `Experience`, `Salary`) VALUES
(1, 1, 'Senior executive', 'Engineer', '5', 10000),
(2, 2, 'CSE', 'CSE Engineer', '5 yrs', 300000),
(3, 2, 'EEE', 'CSE Engineeer', '4yrs', 2333333),
(4, 1, 'CSE', 'CSE eng', '2 ', 12222),
(5, 1, 'CSE', 'Engineer', '5', 5000),
(6, 1, 'eee', 'artist', '4', 4500),
(7, 1, 'teacher', 'teacher', '5', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `messagedb`
--

CREATE TABLE IF NOT EXISTS `messagedb` (
  `Message_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sender_id` int(11) NOT NULL,
  `Receiver_id` int(11) NOT NULL,
  `Msg` longtext NOT NULL,
  PRIMARY KEY (`Message_id`),
  KEY `Receiver_id` (`Receiver_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pagepost`
--

CREATE TABLE IF NOT EXISTS `pagepost` (
  `Pagepost_id` int(11) NOT NULL AUTO_INCREMENT,
  `Poster_id` int(11) NOT NULL,
  PRIMARY KEY (`Pagepost_id`),
  KEY `Poster_id` (`Poster_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `Profile_id` int(11) NOT NULL AUTO_INCREMENT,
  `Profile_name` varchar(255) NOT NULL,
  `Education` longtext,
  `Interest` longtext,
  `Experience` longtext,
  `Languageskills` longtext,
  `Projects` longtext,
  `Courses` longtext,
  `Volunteer_exp` longtext,
  `Email` text NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Profession` varchar(255) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL,
  PRIMARY KEY (`Profile_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`Profile_id`, `Profile_name`, `Education`, `Interest`, `Experience`, `Languageskills`, `Projects`, `Courses`, `Volunteer_exp`, `Email`, `Password`, `remember_token`, `created_at`, `updated_at`, `Profession`, `Phone`) VALUES
(1, 'Ishita', 'BUET', 'Books', '', '', '', '', '', 'gmail', '$2y$10$KsSgTPhtFCZi5dIAiWUgo.Zmin0/t1qDg4TP9BvyiYZeCTLM9U.z6', NULL, '2016-06-04 19:46:36', '2016-06-04 19:46:36', NULL, NULL),
(2, 'isi', '', NULL, NULL, NULL, NULL, NULL, NULL, 'isi@gmail.com', '$2y$10$5iMGVcBjDHQkC3TdcZGfh.9J1YB6T8rxloLYqSF3pf026FUWJjg6u', NULL, '2016-06-07 18:39:20', '2016-06-07 18:39:20', NULL, NULL),
(3, 'Ir', '', NULL, NULL, NULL, NULL, NULL, NULL, 'sss', '$2y$10$9LOYYyfqWGeTWfQKp47sSeJ.sxxDl5mSRQcjl4B/sf6kEpmD/LLeW', NULL, '2016-06-08 04:38:34', '2016-06-08 04:38:34', NULL, NULL),
(4, 'ioi', '', NULL, NULL, NULL, NULL, NULL, NULL, 'hhh', '$2y$10$sdNbLcUrECeSePHpS/ASFeEy87Aa7oPC3XiEQ66Sl/6NXHcXJRbwm', NULL, '2016-06-08 04:38:51', '2016-06-08 04:38:51', NULL, NULL),
(5, 'Firoz', '', NULL, NULL, NULL, NULL, NULL, NULL, 'fir@gmail.com', '$2y$10$eYlhVrqCMcU3g5P.nNL.zeQpdBlJlzwq5bXNlW6GPnOiLz231GAja', NULL, '2016-06-08 19:56:14', '2016-06-08 19:56:14', NULL, NULL),
(6, 'methun', '', NULL, NULL, NULL, NULL, NULL, NULL, 'methun@gmail.com', 'methun', NULL, NULL, NULL, NULL, NULL),
(8, 'a', '', NULL, NULL, NULL, NULL, NULL, NULL, 'a@a.a', '0cc175b9c0f1b6a831c399e269772661', NULL, '2016-06-08 21:43:54', '2016-06-08 21:43:54', NULL, NULL),
(12, 'b', '', NULL, NULL, NULL, NULL, NULL, NULL, 'b@b.b', '92eb5ffee6ae2fec3ad71c777531578f', NULL, '2016-06-08 21:56:11', '2016-06-08 21:56:11', NULL, NULL),
(13, 'j', '', NULL, NULL, NULL, NULL, NULL, NULL, 'j@j.j', '363b122c528f54df4a0446b6bab05515', NULL, '2016-06-08 21:59:28', '2016-06-08 21:59:28', NULL, NULL),
(14, 'ami', '', NULL, NULL, NULL, NULL, NULL, NULL, 'ami@gmail.com', '6c5b7de29192b42ed9cc6c7f635c92e0', NULL, '2016-06-08 23:41:06', '2016-06-08 23:41:06', NULL, NULL),
(15, 'hi', '', NULL, NULL, NULL, NULL, NULL, NULL, 'hi@gmail.com', '49f68a5c8493ec2c0bf489821c21fc3b', NULL, '2016-06-08 23:42:36', '2016-06-08 23:42:36', NULL, NULL),
(16, 'Ish', '', NULL, NULL, NULL, NULL, NULL, NULL, 'ish@gmail.com', '8367bdb6eb9cd8725d658c93951ab371', NULL, '2016-06-09 22:06:04', '2016-06-09 22:06:04', NULL, NULL),
(17, 'i', '', NULL, NULL, NULL, NULL, NULL, NULL, 'j@gmail.com', '363b122c528f54df4a0446b6bab05515', NULL, '2016-06-09 22:12:36', '2016-06-09 22:12:36', NULL, NULL),
(18, 'Ha', '', NULL, NULL, NULL, NULL, NULL, NULL, 'ha@gmail.com', '925cc8d2953eba624b2bfedf91a91613', NULL, '2016-06-09 22:17:33', '2016-06-09 22:17:33', NULL, NULL),
(19, 'h', '', NULL, NULL, NULL, NULL, NULL, NULL, 'h@gmail.com', '2510c39011c5be704182423e3a695e91', NULL, '2016-06-09 22:21:36', '2016-06-09 22:21:36', NULL, NULL),
(20, 'jk', '', NULL, NULL, NULL, NULL, NULL, NULL, 'jk@gmail.com', '051a9911de7b5bbc610b76f4eda834a0', NULL, '2016-06-10 02:28:04', '2016-06-10 02:28:04', NULL, NULL),
(21, 'jk', '', NULL, NULL, NULL, NULL, NULL, NULL, 'jk@gmail.com', '051a9911de7b5bbc610b76f4eda834a0', NULL, '2016-06-10 02:28:14', '2016-06-10 02:28:14', NULL, NULL),
(22, 'mo', '', NULL, NULL, NULL, NULL, NULL, NULL, 'mo@gmail.com', '27c9d5187cd283f8d160ec1ed2b5ac89', NULL, '2016-06-10 02:29:05', '2016-06-10 02:29:05', NULL, NULL),
(23, 'kl', '', NULL, NULL, NULL, NULL, NULL, NULL, 'kl@gmail.com', '16ec114932520d2b9c18a28121d515af', NULL, '2016-06-10 02:40:56', '2016-06-10 02:40:56', NULL, NULL),
(24, 's', '', NULL, NULL, NULL, NULL, NULL, NULL, 's@gmail.com', '03c7c0ace395d80182db07ae2c30f034', NULL, '2016-06-10 03:18:07', '2016-06-10 03:18:07', NULL, NULL),
(25, 'h', '', NULL, NULL, NULL, NULL, NULL, NULL, 'g@gmail.com', '8277e0910d750195b448797616e091ad', NULL, '2016-06-10 03:24:00', '2016-06-10 03:24:00', NULL, NULL),
(26, 'd', '', NULL, NULL, NULL, NULL, NULL, NULL, 'd@gmail.com', '8277e0910d750195b448797616e091ad', NULL, '2016-06-10 03:26:20', '2016-06-10 03:26:20', NULL, NULL),
(27, 'h', '', NULL, NULL, NULL, NULL, NULL, NULL, 'u@gmail.com', '03c7c0ace395d80182db07ae2c30f034', NULL, '2016-06-10 03:43:39', '2016-06-10 03:43:39', NULL, NULL),
(28, 'm', '', NULL, NULL, NULL, NULL, NULL, NULL, 't@gmail.com', 'e1671797c52e15f763380b45e841ec32', NULL, '2016-06-10 05:31:45', '2016-06-10 05:31:45', NULL, NULL),
(29, 'g', '', NULL, NULL, NULL, NULL, NULL, NULL, 'gh@gmail.com', '19b19ffc30caef1c9376cd2982992a59', NULL, '2016-06-10 05:44:39', '2016-06-10 05:44:39', NULL, NULL),
(30, 'sa', '', NULL, NULL, NULL, NULL, NULL, NULL, 'sa@gmail.com', 'c12e01f2a13ff5587e1e9e4aedb8242d', NULL, '2016-06-10 05:49:42', '2016-06-10 05:49:42', NULL, NULL),
(31, 'f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f@gmail.com', '8fa14cdd754f91cc6554c9e71929cce7', NULL, '2016-06-10 06:14:58', '2016-06-10 06:14:58', NULL, NULL),
(32, 'bi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bi@gmail.com', '99d4fb3db1563c87da2cdfc0158b37c3', NULL, '2016-06-10 07:24:22', '2016-06-10 07:24:22', NULL, NULL),
(33, 'b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'jg@gmail.com', '1272c19590c3d44ce33ba054edfb9c78', NULL, '2016-06-10 07:35:20', '2016-06-10 07:35:20', NULL, NULL),
(34, 'Promi', 'BUET', 'Movies, books', NULL, NULL, NULL, NULL, NULL, 'promi@gmail.com', 'promi', NULL, NULL, NULL, NULL, NULL),
(36, 'Mashru', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'm@gmail.com', '6f8f57715090da2632453988d9a1501b', NULL, '2016-06-10 09:05:39', '2016-06-10 09:05:39', NULL, NULL),
(37, 'Farah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'f@gmail.com', '8fa14cdd754f91cc6554c9e71929cce7', NULL, '2016-06-10 09:09:17', '2016-06-10 09:09:17', NULL, NULL),
(38, 'U', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'u@gmail.com', '7b774effe4a349c6dd82ad4f4f21d34c', NULL, '2016-06-10 10:06:22', '2016-06-10 10:06:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ishita', 'ishita@gmail.com', '$2y$10$7U5wP.4LiXsxYOgDW1g8COor8rQQcp5Z6pp/cpDnlzgXoS/cw3Kre', NULL, '2016-06-08 19:09:31', '2016-06-08 19:09:31');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `applicant_id_fk` FOREIGN KEY (`Profile_id`) REFERENCES `profile` (`Profile_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `application_id_fk` FOREIGN KEY (`Post_id`) REFERENCES `jobpost` (`Post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `Commenter_id_fk` FOREIGN KEY (`Commenter_id`) REFERENCES `follower` (`Follower_id`),
  ADD CONSTRAINT `Pagepost_id_fk` FOREIGN KEY (`Pagepost_id`) REFERENCES `pagepost` (`Pagepost_id`);

--
-- Constraints for table `company_page`
--
ALTER TABLE `company_page`
  ADD CONSTRAINT `Pageadmin_id_fk` FOREIGN KEY (`Pageadmin_id`) REFERENCES `profile` (`Profile_id`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `Page_id_fk4` FOREIGN KEY (`Page_id`) REFERENCES `company_page` (`Page_id`),
  ADD CONSTRAINT `Profile_id_fk6` FOREIGN KEY (`Profile_id`) REFERENCES `profile` (`Profile_id`);

--
-- Constraints for table `follower`
--
ALTER TABLE `follower`
  ADD CONSTRAINT `Page_id_fk` FOREIGN KEY (`Page_id`) REFERENCES `company_page` (`Page_id`),
  ADD CONSTRAINT `Profile_id_fk` FOREIGN KEY (`Profile_id`) REFERENCES `profile` (`Profile_id`);

--
-- Constraints for table `friendrequest_recv`
--
ALTER TABLE `friendrequest_recv`
  ADD CONSTRAINT `Profile_id_fk3` FOREIGN KEY (`Profile_id`) REFERENCES `profile` (`Profile_id`);

--
-- Constraints for table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `Profile_id_fk2` FOREIGN KEY (`Profile_id`) REFERENCES `profile` (`Profile_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD CONSTRAINT `Req_id_fk` FOREIGN KEY (`Recruiter_id`) REFERENCES `profile` (`Profile_id`);

--
-- Constraints for table `messagedb`
--
ALTER TABLE `messagedb`
  ADD CONSTRAINT `Receiver_id_fk` FOREIGN KEY (`Receiver_id`) REFERENCES `profile` (`Profile_id`);

--
-- Constraints for table `pagepost`
--
ALTER TABLE `pagepost`
  ADD CONSTRAINT `Poster_id_fk` FOREIGN KEY (`Poster_id`) REFERENCES `follower` (`Follower_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
