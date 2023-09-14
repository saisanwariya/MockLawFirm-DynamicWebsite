-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2018 at 01:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psl`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_info`
--

CREATE TABLE `appointment_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `appointment_date` date NOT NULL,
  `type` text NOT NULL,
  `preferred_timings` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_info`
--

INSERT INTO `appointment_info` (`id`, `name`, `email`, `age`, `occupation`, `appointment_date`, `type`, `preferred_timings`, `message`, `created_at`) VALUES
(5, 'James Smith', 'jamesmith@gmail.com', 26, 'Doctor', '2018-04-18', 'Corporate', '01:00pm to 03:00pm', 'NEED HELP', '2018-02-19 09:17:33'),
(6, 'Wiz Khalifa', 'wizk@kalifa.com', 34, 'Singer', '2018-02-20', 'Antitrust', '09:00am to 12:00pm', 'I NEED HELP', '2018-02-19 09:18:38'),
(7, 'Maria Garcia', 'mariag@gmail.com', 27, 'Criminologists', '2018-02-21', 'Antitrust', '04:00pm to 08:00pm', 'I need help', '2018-02-19 09:19:48'),
(8, 'Michael Wilson', 'mikew9@yahoo.com', 34, 'Certified Translators', '2018-02-22', 'Real Estate', '04:00pm to 08:00pm', 'Important', '2018-02-19 09:21:54'),
(9, 'Maria Rodriguez', 'maria56@yahoo.com', 56, 'Psychologists', '2018-02-28', 'Takeover &amp; Merger', '09:00am to 12:00pm', 'i need as fast as possible', '2018-02-19 09:23:23'),
(10, 'James macron', 'jamesm12@gmail.com', 42, 'Certified Interpreters', '2018-02-24', 'Sports &amp; Entertainment', '09:00am to 12:00pm', 'my teams is on fire', '2018-02-19 09:24:11'),
(11, 'Lite Dite', 'info@litedite.com', 15, 'Dieticians', '2018-02-24', 'Takeover &amp; Merger', '09:00am to 12:00pm', 'We are merging with another firm', '2018-02-19 09:25:26'),
(12, 'HERNANDEZ  LOPEZ', 'hernandez34@gmail.com', 38, 'Engineer', '2018-02-28', 'Environmental', '01:00pm to 03:00pm', 'Help', '2018-02-19 09:26:26'),
(13, 'James Johnson', 'jj@jhonson.com', 63, 'Speech Therapists', '2018-02-28', 'Bankruptcy', '01:00pm to 03:00pm', 'HELP', '2018-02-19 09:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `attorneys`
--

CREATE TABLE `attorneys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT '0',
  `practice` int(11) DEFAULT '0',
  `office` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attorneys`
--

INSERT INTO `attorneys` (`id`, `name`, `position`, `practice`, `office`) VALUES
(1, 'Harvey Specter', 153, 36, 7),
(2, 'Mike Ross', 121, 36, 7),
(3, 'Louis Litt', 153, 36, 10),
(4, 'Rachel Zane', 114, 141, 10),
(5, 'Donna Paulsen', 147, 3, 6),
(6, 'Jessica Pearson', 153, 3, 12),
(7, 'Katrina Bennett', 114, 5, 6),
(8, ' Robert Zane', 152, 34, 6),
(9, ' Gretchen', 118, 141, 7),
(10, 'Harold Gunderson', 145, 36, 10),
(11, 'Jeff Malone', 131, 10, 7),
(12, ' Sean Cahill', 121, 4, 12),
(13, 'Daniel Hardman', 146, 36, 6),
(14, ' Oliver Grady', 114, 34, 12),
(15, 'Dana Scott', 146, 36, 10),
(16, 'Jack Soloff', 146, 10, 10),
(17, 'Jack Soloff', 146, 10, 10),
(18, 'Jonathan Sidwell', 131, 10, 7),
(19, 'Jonathan Sidwell', 131, 10, 7),
(20, 'Sheila Sazs', 152, 141, 7),
(21, 'Tara Messer', 114, 141, 10),
(22, 'Sidney Charles', 114, 36, 10),
(23, 'Yareli Webb', 154, 34, 12),
(24, 'Yareli Webb', 154, 34, 12),
(25, 'Bianca Bradford', 154, 36, 12),
(26, 'Andy Mccarty', 114, 4, 12),
(27, 'Andy Mccarty', 114, 4, 12),
(28, 'Marie Allen', 132, 141, 6),
(29, 'Donte Baxter', 132, 4, 7),
(30, 'Joseph Townsend', 134, 5, 7),
(31, 'Joseph Townsend', 134, 5, 7),
(32, 'Grayson Reese', 114, 34, 12),
(33, 'Kimora Griffith', 114, 10, 6),
(34, 'Kimora Griffith', 114, 10, 6),
(35, 'Emily Harvey', 145, 10, 10),
(36, 'Abel Riggs', 145, 5, 7),
(37, 'Kayley Oconnell', 121, 5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `name`, `qualification`, `file_name`, `created_at`) VALUES
(1, 'Tom Call', '3', 'Resume-tom.docx', '2018-02-19 11:33:10'),
(2, 'Uday Rahul', '2', 'udh-Resume.docx', '2018-02-19 11:33:47'),
(3, 'Kelly Derbi', '7', 'Resume-kelly.docx', '2018-02-19 11:34:14'),
(4, 'John Alex', '6', 'john-Resume.docx', '2018-02-19 11:34:50'),
(5, 'Barry Allen', '5', 'berry-Resume.docx', '2018-02-19 11:35:06'),
(6, 'Henry Rashford ', '4', 'rashford-Resume.docx', '2018-02-19 11:35:36');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `msg`, `created_at`) VALUES
(1, 'Kayden Lowery', 'kaydenl@dm.com', 'msg', '2018-02-19 11:44:24'),
(2, 'Kyle Bernard', 'kbernard@gmail.com', 'msg', '2018-02-19 11:45:04'),
(3, 'Keenan Morris', 'keenanmorris12@yahoo.com', 'msg', '2018-02-19 11:45:33'),
(4, 'Alfonso Vance', 'alfonsov@who.com', 'msg', '2018-02-19 11:46:00'),
(5, 'Dominique Zimmerman', 'dzimmerman@home.com', 'msg', '2018-02-19 11:46:33'),
(6, 'Kiera Williams', 'kwilliams@illms.com', 'msg', '2018-02-19 11:47:04'),
(7, 'Landen Haley', 'landenh@hall.com', 'msg', '2018-02-19 11:47:45'),
(8, 'Tiara Barry', 'tiara@barry.com', 'msg', '2018-02-19 11:48:26'),
(9, 'Tiara Barry', 'tiara@barry.com', 'msg', '2018-02-19 11:48:26'),
(10, 'Israel Cherry', 'israel@cherry.com', 'msg', '2018-02-19 11:48:55'),
(11, 'Luz Whitaker', 'whitaker@luz.com', 'msg', '2018-02-19 11:49:37');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_pass` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `user_name`, `user_pass`) VALUES
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `name`) VALUES
(6, 'Melbourne'),
(7, 'New York'),
(10, 'Sydney'),
(12, 'Washington, D.C.');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`id`, `name`) VALUES
(114, 'Associate'),
(118, 'Partner'),
(121, 'Senior Counsel'),
(131, 'Special Counsel'),
(132, 'Of Counsel'),
(134, 'European Counsel'),
(145, 'Managing Clerk'),
(146, 'Retired Partner'),
(147, 'Senior Chairman'),
(152, 'Special Counsel - Pro Bono'),
(153, 'Chairman'),
(154, 'Practice Area Associate');

-- --------------------------------------------------------

--
-- Table structure for table `practice`
--

CREATE TABLE `practice` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practice`
--

INSERT INTO `practice` (`id`, `name`) VALUES
(3, 'Antitrust'),
(4, 'Criminal Law'),
(5, 'Litigation'),
(10, 'Environmental'),
(34, 'Real Estate'),
(36, 'Takeover &amp; Merger'),
(37, 'Corporate'),
(141, 'Bankruptcy'),
(142, 'Sports &amp; Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `pro_bono_info`
--

CREATE TABLE `pro_bono_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `case_info` varchar(255) NOT NULL,
  `situation` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_bono_info`
--

INSERT INTO `pro_bono_info` (`id`, `name`, `age`, `case_info`, `situation`, `income`, `created_at`) VALUES
(1, 'Waylon Dalton', 34, '2', 'currently not in a state to get a lawyer', '5', '2018-02-19 11:37:37'),
(2, 'Justine Henderson', 61, '2', ' all sons left me no money to fight for my property', '4', '2018-02-19 11:38:07'),
(3, 'Abdullah Lang', 64, '3', 'my son died. the bank has cheated me to get insurance money.', '2', '2018-02-19 11:39:03'),
(4, 'Angela Walker', 31, '2', 'My son is blamed for murdering someone he is just 11 n=and i am sure he would not do this', '4', '2018-02-19 11:40:02'),
(5, 'Lia Shelton', 43, '4', 'Cheated with my bakery. already running in losses  ', '2', '2018-02-19 11:40:42'),
(6, 'Joanna Shaffer', 61, '2', 'my husband has given the property to charity my son stole it from them ', '3', '2018-02-19 11:41:26'),
(7, 'Hadassah Hartman', 81, '4', 'i was cheated my company is stolen ', '3', '2018-02-19 11:42:53'),
(8, 'Marcus Cruz', 41, '2', 'My firm cheated me ', '3', '2018-02-19 11:43:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_info`
--
ALTER TABLE `appointment_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attorneys`
--
ALTER TABLE `attorneys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice`
--
ALTER TABLE `practice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pro_bono_info`
--
ALTER TABLE `pro_bono_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_info`
--
ALTER TABLE `appointment_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `attorneys`
--
ALTER TABLE `attorneys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `practice`
--
ALTER TABLE `practice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `pro_bono_info`
--
ALTER TABLE `pro_bono_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
