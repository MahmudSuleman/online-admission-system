-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 12:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uds`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `admin_name`, `password`, `date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `eligibility`
--

CREATE TABLE `eligibility` (
  `id` int(11) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `male_cut` int(11) NOT NULL,
  `female_cut` int(11) NOT NULL,
  `core_one` varchar(50) NOT NULL,
  `mark_one` int(11) NOT NULL,
  `core_two` varchar(50) NOT NULL,
  `mark_two` int(11) NOT NULL,
  `core_three` varchar(50) NOT NULL,
  `mark_three` int(11) NOT NULL,
  `core_four` varchar(50) NOT NULL,
  `mark_four` int(11) NOT NULL,
  `elective_one` varchar(50) NOT NULL,
  `e_mark_one` int(11) NOT NULL,
  `elective_two` varchar(50) NOT NULL,
  `e_mark_two` int(11) NOT NULL,
  `elective_three` varchar(50) NOT NULL,
  `e_mark_three` int(11) NOT NULL,
  `elective_four` varchar(50) NOT NULL,
  `e_mark_four` int(11) NOT NULL,
  `elective_five` varchar(50) NOT NULL,
  `e_mark_five` int(11) NOT NULL,
  `elective_six` varchar(50) NOT NULL,
  `e_mark_six` int(11) NOT NULL,
  `elective_seven` varchar(50) NOT NULL,
  `e_mark_seven` int(11) NOT NULL,
  `elective_eight` varchar(50) NOT NULL,
  `e_mark_eight` int(11) NOT NULL,
  `elective_nine` varchar(50) NOT NULL,
  `e_mark_nine` int(11) NOT NULL,
  `elective_ten` varchar(50) NOT NULL,
  `e_mark_ten` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eligibility`
--

INSERT INTO `eligibility` (`id`, `faculty`, `program`, `male_cut`, `female_cut`, `core_one`, `mark_one`, `core_two`, `mark_two`, `core_three`, `mark_three`, `core_four`, `mark_four`, `elective_one`, `e_mark_one`, `elective_two`, `e_mark_two`, `elective_three`, `e_mark_three`, `elective_four`, `e_mark_four`, `elective_five`, `e_mark_five`, `elective_six`, `e_mark_six`, `elective_seven`, `e_mark_seven`, `elective_eight`, `e_mark_eight`, `elective_nine`, `e_mark_nine`, `elective_ten`, `e_mark_ten`, `date`) VALUES
(1, 'FMS', 'BSc Computer Science', 25, 30, 'social', 7, 'english', 5, 'c_maths', 3, 'science', 3, 'Mathematics(Elective)', 4, 'Physics', 5, 'Economics', 6, 'Geography', 6, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 00:19:52'),
(2, 'FMS', 'BSc Actuarial Science', 25, 28, 'social', 7, 'english', 5, 'c_maths', 3, 'science', 3, 'Mathematics(Elective)', 4, 'Economics', 5, 'Physics', 5, 'Geography', 5, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 09:39:04'),
(3, 'FMS', 'BSc Financial Mathematics', 28, 30, 'social', 7, 'english', 5, 'c_maths', 3, 'science', 4, 'Mathematics(Elective)', 5, 'Economics', 6, 'Accounting', 4, 'Business Management', 6, 'Costing', 5, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 09:41:38'),
(4, 'FMS', 'BED Mathematics (Mathematics Science)', 26, 28, 'social', 7, 'english', 6, 'c_maths', 3, 'science', 3, 'Mathematics(Elective)', 4, 'Economics', 5, 'Physics', 4, 'Geography', 4, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 09:45:03'),
(5, 'FMS', 'BSc Mathematics with Economics', 26, 28, 'social', 6, 'english', 5, 'c_maths', 3, 'science', 3, 'Mathematics(Elective)', 3, 'Economics', 4, 'Geography', 4, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 09:48:25'),
(6, 'FAS', 'BSc Applied Biology', 26, 28, 'social', 7, 'english', 5, 'c_maths', 3, 'science', 3, 'Mathematics(Elective)', 3, 'Biology', 3, 'Chemistry', 3, 'Physics', 4, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 10:00:04'),
(7, 'FAS', 'BSc Applied Chemistry', 26, 28, 'social', 6, 'english', 5, 'c_maths', 3, 'science', 3, 'Mathematics(Elective)', 4, 'Biology', 3, 'Chemistry', 3, 'Physics', 5, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 10:01:17'),
(8, 'FAS', 'BSc Biochemistry', 26, 28, 'social', 5, 'english', 5, 'c_maths', 3, 'science', 3, 'Mathematics(Elective)', 4, 'Biology', 3, 'Chemistry', 3, 'Physics', 3, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 10:03:16'),
(9, 'FEES', 'BSc Earth Science', 27, 30, 'social', 6, 'english', 5, 'c_maths', 4, 'science', 3, 'Mathematics(Elective)', 4, 'Physics', 4, 'Chemistry', 3, 'Biology', 3, 'Geography', 5, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 10:06:11'),
(10, 'FEES', 'BSc Environmental Science', 28, 30, 'social', 6, 'english', 5, 'c_maths', 4, 'science', 3, 'Mathematics(Elective)', 4, 'Biology', 3, 'Chemistry', 3, 'Physics', 3, 'Geography', 5, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 10:08:10'),
(11, 'FEES', 'BSc Geological Science', 28, 30, 'social', 7, 'english', 6, 'c_maths', 4, 'science', 3, 'Mathematics(Elective)', 4, 'Geography', 6, 'Physics', 3, 'Biology', 3, 'Chemistry', 3, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 10:09:52'),
(12, 'FOA', 'BSc Agriculture Technology', 28, 30, 'social', 6, 'english', 5, 'c_maths', 4, 'science', 3, 'Mathematics(Elective)', 4, 'Animal Husbandry', 3, 'Crop Husbandry', 3, 'Chemistry', 4, 'Biology', 3, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 10:13:32'),
(13, 'FOA', 'BSc Family and Consumer Science', 28, 30, 'social', 7, 'english', 5, 'c_maths', 4, 'science', 4, 'Mathematics(Elective)', 4, 'Animal husbandry', 3, 'Crop husbandry', 3, 'Chemistry', 4, 'Biology ', 3, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 10:17:29'),
(14, 'FOA', 'BED Agriculture Science', 28, 30, 'social', 7, 'english', 5, 'c_maths', 3, 'science', 4, 'Mathematics(Elective)', 4, 'Animal Husbandry', 3, 'Crop Husbandry', 3, 'Chemistry', 4, 'Biology', 4, '', 0, '', 0, '', 0, '', 0, '', 0, '2020-06-01 10:22:08');

-- --------------------------------------------------------

--
-- Table structure for table `program_table`
--

CREATE TABLE `program_table` (
  `pid` int(11) NOT NULL,
  `degree_type` varchar(50) NOT NULL,
  `campus` varchar(10) NOT NULL,
  `faculty` varchar(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `male_cut` varchar(10) NOT NULL,
  `female_cut` varchar(10) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_table`
--

INSERT INTO `program_table` (`pid`, `degree_type`, `campus`, `faculty`, `program`, `duration`, `male_cut`, `female_cut`, `date`) VALUES
(1, 'bachelor', 'Navrongo', 'FMS', 'BSc Computer Science', '4', '24', '30', '2020-05-28 06:05:12'),
(2, 'diploma', 'Navrongo', 'FMS', 'Diploma Computer Science', '2', '32', '36', '2020-05-28 06:10:26'),
(3, 'bachelor', 'Wa', 'FIDS', 'BA Integrated Development Studies', '4', '20', '25', '2020-05-28 14:18:03'),
(4, 'bachelor', 'Wa', 'FIDS', 'BA Environmental and Resources Management', '4', '20', '24', '2020-05-28 14:19:43'),
(5, 'bachelor', 'Wa', 'FIDS', 'BA Economics', '4', '20', '25', '2020-05-28 14:20:22'),
(6, 'bachelor', 'Wa', 'FIDS', 'BA Entrepreneurship', '4', '20', '25', '2020-05-28 14:22:18'),
(7, 'bachelor', 'Wa', 'FIDS', 'BA Development Communication', '4', '21', '26', '2020-05-28 14:23:06'),
(8, 'bachelor', 'Wa', 'FIDS', 'BA Social and Development Administration', '4', '22', '26', '2020-05-28 14:24:21'),
(9, 'diploma', 'Wa', 'FIDS', 'Diploma in Integrated Community Development', '2', '22', '26', '2020-05-28 14:25:22'),
(10, 'bachelor', 'Wa', 'FPLM', 'BA Integrated Community Development', '4', '22', '26', '2020-05-28 14:26:59'),
(11, 'bachelor', 'Wa', 'FPLM', 'BSc Planning', '4', '24', '26', '2020-05-28 14:27:46'),
(12, 'bachelor', 'Wa', 'FPLM', 'BSc Real Estate', '4', '22', '26', '2020-05-28 14:28:49'),
(13, 'bachelor', 'Wa', 'FPLM', 'BSc Land Management', '4', '22', '25', '2020-05-28 14:29:39'),
(14, 'bachelor', 'Wa', 'FPLM', 'BSc Development Management', '4', '22', '25', '2020-05-28 14:30:24'),
(15, 'diploma', 'Wa', 'FPLM', 'Diploma in Development Management', '2', '24', '25', '2020-05-28 14:31:26'),
(16, 'bachelor', 'Wa', 'SBL', 'BA Integrated Business Studies', '4', '24', '26', '2020-05-28 14:33:11'),
(17, 'bachelor', 'Wa', 'SBL', 'BSc Accounting', '4', '24', '26', '2020-05-28 14:33:48'),
(18, 'bachelor', 'Wa', 'SBL', 'BSc Accounting with Finance', '4', '22', '24', '2020-05-28 14:35:21'),
(19, 'bachelor', 'Wa', 'SBL', 'Bachelor of Commerce', '4', '22', '24', '2020-05-28 14:36:27'),
(20, 'diploma', 'Wa', 'SBL', 'Diploma in Integrated Business Studies', '2', '24', '26', '2020-05-28 14:37:26'),
(21, 'bachelor', 'Tamale', 'SMHS', 'Medicine (MB ChB)', '6', '6', '8', '2020-05-28 14:39:32'),
(22, 'bachelor', 'Tamale', 'SMHS', 'Doctor of Pharmacy (PharmD)', '6', '6', '8', '2020-05-28 14:40:45'),
(23, 'diploma', 'Tamale', 'SMHS', 'BSc Nursing Anaethesia ', '2', '15', '17', '2020-05-28 14:41:54'),
(24, 'bachelor', 'Tamale', 'SAHS', 'BSc Community Nutrition ', '4', '16', '18', '2020-05-28 14:43:18'),
(25, 'bachelor', 'Tamale', 'SAHS', 'BSc Nursing', '4', '15', '17', '2020-05-28 14:44:17'),
(26, 'bachelor', 'Tamale', 'SAHS', 'BSc Midwifery', '4', '16', '18', '2020-05-28 14:44:49'),
(27, 'bachelor', 'Tamale', 'SAHS', 'BSc Pediatric Nursing', '4', '18', '18', '2020-05-28 14:47:50'),
(28, 'bachelor', 'Tamale', 'SAHS', 'Doctor of Medical Laboratory Science(MLS.D))', '6', '15', '17', '2020-05-28 14:49:01'),
(29, 'bachelor', 'Tamale', 'FOE', 'BA Development Education', '4', '22', '24', '2020-05-28 14:50:18'),
(30, 'bachelor', 'Tamale', 'FOE', 'BED in Basic Education', '4', '20', '22', '2020-05-28 14:51:14'),
(31, 'bachelor', 'Tamale', 'FOE', 'B.ED in Early Childhood Care and Education', '4', '22', '24', '2020-05-28 14:52:24'),
(32, 'diploma', 'Tamale', 'FOE', 'Diploma in Development Education', '2', '22', '24', '2020-05-28 14:53:35'),
(33, 'diploma', 'Tamale', 'FOE', 'Diploma in Basic Education', '2', '22', '24', '2020-05-28 14:54:49'),
(34, 'diploma', 'Tamale', 'FOE', 'Diploma in Early Childhood Care and Education', '2', '22', '24', '2020-05-28 14:55:36'),
(35, 'bachelor', 'Nyankpala', 'FOA', 'BSc Agriculture Technology', '4', '20', '22', '2020-05-28 15:15:24'),
(36, 'bachelor', 'Nyankpala', 'FOA', 'BSc Family and Consumer Science', '4', '20', '22', '2020-05-28 15:00:11'),
(37, 'bachelor', 'Nyankpala', 'FOA', 'BED Agriculture Science', '4', '22', '24', '2020-05-28 15:01:00'),
(38, 'bachelor', 'Nyankpala', 'FOA', 'BSc Veterinary Nursing', '4', '20', '22', '2020-05-28 15:02:12'),
(39, 'bachelor', 'Nyankpala', 'FOA', 'BSc Food Processing Technology', '4', '20', '22', '2020-05-28 15:03:05'),
(40, 'bachelor', 'Nyankpala', 'FOA', 'BSc Biotechnology and Molecular Biology', '4', '20', '22', '2020-05-28 15:04:29'),
(41, 'bachelor', 'Nyankpala', 'FACS', 'BSc Agribusiness', '4', '22', '24', '2020-05-28 15:16:59'),
(42, 'bachelor', 'Nyankpala', 'FACS', 'BSc Social Change in Communication', '4', '22', '24', '2020-05-28 15:22:35'),
(43, 'bachelor', 'Nyankpala', 'FNRE', 'BSc Fisheries and Aquaculture ', '4', '24', '24', '2020-05-28 15:07:03'),
(45, 'diploma', 'Nyankpala', 'FNRE', 'Diploma in Natural Resource Management', '2', '24', '24', '2020-05-28 15:09:05'),
(46, 'diploma', 'Nyankpala', 'FACS', 'Diploma in Social Change in Communication', '2', '24', '24', '2020-05-28 15:07:58'),
(47, 'bachelor', 'Nyankpala', 'FNRE', 'BSc Renewable Natural Resource', '4', '22', '24', '2020-05-28 15:25:32'),
(48, 'bachelor', 'Navrongo', 'FMS', 'BSc Actuarial Science', '4', '20', '24', '2020-05-28 15:28:42'),
(49, 'bachelor', 'Navrongo', 'FMS', 'BSc Financial Mathematics', '4', '20', '24', '2020-05-28 15:30:06'),
(50, 'bachelor', 'Navrongo', 'FMS', 'BSc Mathematical Science', '4', '20', '22', '2020-05-28 15:30:54'),
(51, 'bachelor', 'Navrongo', 'FMS', 'BSc Mathematics with Economics', '4', '20', '24', '2020-05-28 15:31:55'),
(52, 'bachelor', 'Navrongo', 'FMS', 'BSc Accounting with Computer', '4', '20', '24', '2020-05-28 15:32:36'),
(53, 'bachelor', 'Navrongo', 'FMS', 'BSc Information Technology', '4', '20', '24', '2020-05-28 15:33:17'),
(54, 'diploma', 'Navrongo', 'FMS', 'Diploma in Statistics ', '2', '22', '24', '2020-05-28 15:34:45'),
(55, 'diploma', 'Navrongo', 'FMS', 'Diploma in Computer Science', '2', '20', '24', '2020-05-28 15:35:29'),
(56, 'bachelor', 'Navrongo', 'FAS', 'BSc Applied Biology', '4', '20', '22', '2020-05-28 15:36:03'),
(57, 'bachelor', 'Navrongo', 'FAS', 'BSc Applied Chemistry', '4', '20', '24', '2020-05-28 15:36:41'),
(58, 'bachelor', 'Navrongo', 'FAS', 'BSc Biochemistry', '4', '18', '19', '2020-05-28 15:37:20'),
(59, 'bachelor', 'Navrongo', 'FAS', 'BSc Applied Physics', '4', '16', '18', '2020-05-28 15:38:19'),
(60, 'bachelor', 'Navrongo', 'FAS', 'BED Mathematics (Physical Science)', '4', '19', '20', '2020-05-28 15:39:37'),
(61, 'bachelor', 'Navrongo', 'FMS', 'BED Mathematics (Mathematics Science)', '4', '20', '24', '2020-05-28 15:40:38'),
(62, 'bachelor', 'Navrongo', 'FEES', 'BSc Earth Science', '4', '20', '24', '2020-05-28 15:41:23'),
(63, 'bachelor', 'Navrongo', 'FEES', 'BSc Environmental Science', '4', '20', '24', '2020-05-28 15:42:26'),
(64, 'bachelor', 'Navrongo', 'FEES', 'BSc Geological Science', '4', '20', '24', '2020-05-28 15:43:26'),
(65, 'bachelor', 'Nyankpala', 'SoE', 'BSc Mechanical engineering ', '4', '18', '22', '2020-05-28 15:44:37'),
(66, 'bachelor', 'Nyankpala', 'SoE', 'BSc Agricultural Engineering', '4', '20', '24', '2020-05-28 15:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `category` varchar(30) NOT NULL,
  `uid` varchar(15) NOT NULL,
  `pid` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`id`, `username`, `firstname`, `middlename`, `lastname`, `gender`, `email`, `category`, `uid`, `pid`, `password`, `date`) VALUES
(1, 'rahim', 'alhassan', '', 'abdul-rahim', 'male', 'user@gmail.com', 'undergraduate', '2456', '24235', '827ccb0eea8a706c4c34a16891f84e7b', '2020-06-01 05:52:23'),
(2, 'latifa', 'alhassan', '', 'latifa', 'female', 'user2@gmail.com', 'postgraduate', '2425', '`3243', 'e69248dcdc9ccb1121d7aec4afbb2aa7', '2020-06-01 16:32:25');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `core` varchar(50) NOT NULL,
  `elective` varchar(50) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `core`, `elective`, `date`) VALUES
(1, 'Mathematics(Core)', 'Mathematics(Elective)', '0000-00-00 00:00:00'),
(2, 'English Language', 'Economics', '0000-00-00 00:00:00'),
(3, 'Intergrated Science', 'Geography', '0000-00-00 00:00:00'),
(4, 'Social Studies', 'Physics', '0000-00-00 00:00:00'),
(5, '', 'Chemistry', '0000-00-00 00:00:00'),
(6, '', 'Biology', '0000-00-00 00:00:00'),
(7, '', 'Business Management', '0000-00-00 00:00:00'),
(8, '', 'Animal Husbandry', '0000-00-00 00:00:00'),
(9, '', 'Crop Husbandry', '0000-00-00 00:00:00'),
(10, '', 'Accounting', '0000-00-00 00:00:00'),
(11, '', 'Management in Living', '0000-00-00 00:00:00'),
(12, '', 'Costing', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eligibility`
--
ALTER TABLE `eligibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_table`
--
ALTER TABLE `program_table`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `eligibility`
--
ALTER TABLE `eligibility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `program_table`
--
ALTER TABLE `program_table`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
