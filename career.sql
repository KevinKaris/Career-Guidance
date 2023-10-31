-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 03:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `university` varchar(250) NOT NULL,
  `minimum_grade` varchar(50) NOT NULL,
  `language_grade_required` varchar(50) DEFAULT NULL,
  `bio_chem_grade_required` varchar(50) DEFAULT NULL,
  `physics_grade_required` varchar(50) DEFAULT NULL,
  `mathematics_grade_required` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `university`, `minimum_grade`, `language_grade_required`, `bio_chem_grade_required`, `physics_grade_required`, `mathematics_grade_required`, `description`) VALUES
(1, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(2, 'Bachelor of Architecture', 'The Cooperative University of Kenya', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(3, 'Bachelor of Commerce(B.COM)', 'The Cooperative University of Kenya', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(4, 'Bachelor of Architecture', 'Egerton University', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(5, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(6, 'Bachelor of Construction management', 'Jaramogi Oginga Odinga University of Science and Technology', 'C+', 'c', 'C', 'C', 'c', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(7, 'Bachelor of Science(Finance)', 'Technical University of Mombasa', 'C+', '', 'C', 'C', 'C', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(9, 'Bachelor of Computer Science', 'Kenyatta University', 'C+', '', 'C', 'C', 'C', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(10, 'Bachelor of Construction management', 'Mount Kenya University', 'C+', 'c', 'C', '', 'C', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(11, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(12, 'Bachelor of Architecture', 'Maseno University', 'C+', 'C+', '', '', '', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(13, 'Bachelor of Architecture', 'Kirinyaga University', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(14, 'Bachelor of Information Technology', 'University of Nairobi', 'C+', 'c', '', '', 'C', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(15, 'Bachelor of Information Technology', 'Moi University', 'C+', 'c', '', '', 'C', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(16, 'Bachelor of Architecture', 'Pwani University', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(17, 'Bachelor of Architecture', 'ST Pauls University', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(18, 'Bachelor of Architecture', 'Technical University of Kenya', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(19, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(20, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(21, 'Bachelor of Veterinary', 'Egerton University', 'C+', 'C+', 'C+', '', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(22, 'Bachelor of Architecture', 'The Cooperative University of Kenya', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(23, 'Bachelor of Catering', 'The Cooperative University of Kenya', 'C+', 'c', '', '', '', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(24, 'Bachelor of Architecture', 'Mount Kenya University', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(25, 'Bachelor of Information Technology', 'The Cooperative University of Kenya', 'C+', 'c', 'C', 'C', 'C', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(26, 'Bachelor of Surgery', 'University of Nairobi', 'C+', 'B', 'B', 'B', 'B', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(28, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(29, 'Bachelor of Architecture', 'The Cooperative University of Kenya', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(30, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(31, 'Bachelor of Architecture', 'Kenya Methodist University', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(32, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(33, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(34, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(35, 'Bachelor of Veterinary', 'Kabarak University', 'C+', 'C+', 'C+', '', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(36, 'Bachelor of Architecture', 'ST Pauls University', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(37, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(38, 'Bachelor of Architecture', 'Muranga University of Technology', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(40, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(41, 'Bachelor of Architecture', 'Kenya Methodist University', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(42, 'Bachelor of Law', 'University of Nairobi', 'C+', 'C+', '', '', '', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(43, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(45, 'Bachelor of Surgery', 'Kenyatta University', 'C+', 'B', 'B', 'B', 'B', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(46, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(47, 'Bachelor of Architecture', 'Dedan Kimathi University of Technology', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(50, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(51, 'Bachelor of Architecture', 'University of Nairobi', 'C+', '', 'C+', 'C+', 'C+', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  '),
(52, 'Bachelor of Computer Science', 'Chuka University', 'C+', '', 'C', 'C', 'C', 'This course may also be pursued by a holder of a relevant diploma/professional course from any institution recognized by the University Senate. Duration is 8 semesters plus 12 weeks of industrial attachment for KCSE Certificate holders.  Success...  ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
