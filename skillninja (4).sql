-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 23, 2023 at 06:16 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skillninja`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `c_id` int NOT NULL,
  `c_name` varchar(99) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_name`) VALUES
(2, 'CSS'),
(1, 'HTML'),
(3, 'JAVASCRIPT'),
(4, 'C'),
(5, 'PHP'),
(6, 'SQL'),
(7, 'JAVA'),
(8, 'PYTHON'),
(9, 'CPP');

-- --------------------------------------------------------

--
-- Table structure for table `course_users`
--

DROP TABLE IF EXISTS `course_users`;
CREATE TABLE IF NOT EXISTS `course_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `c_id` int NOT NULL,
  `u_id` int NOT NULL,
  `c_date` varchar(99) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course_users`
--

INSERT INTO `course_users` (`id`, `c_id`, `u_id`, `c_date`) VALUES
(138, 3, 77, 'November 22, 2023'),
(135, 1, 76, 'November 22, 2023'),
(137, 1, 77, 'November 23, 2023'),
(139, 1, 48, 'November 23, 2023'),
(140, 3, 48, 'November 23, 2023');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

DROP TABLE IF EXISTS `enquiries`;
CREATE TABLE IF NOT EXISTS `enquiries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Frist_name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Last_Name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Message` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `Frist_name`, `Last_Name`, `Email`, `Message`) VALUES
(5, 'pranav', 'malwatkar', 'pranav@gmail.com', 'hey,This is pranav'),
(14, 'Aaryan', 'Ojha', 'hello1@gmail.com', 'Hello Admin'),
(18, 'pranav', 'malwatkar', 'p@gmail.com', 'hi aaryan how are you');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `u_id` int NOT NULL,
  `c_id` int NOT NULL,
  `Full_Name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Email` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Address` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `City` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `State` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Zip` int DEFAULT NULL,
  `Card_Name` varchar(35) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `Card_Number` int DEFAULT NULL,
  `Expmonth` int DEFAULT NULL,
  `Expyear` int DEFAULT NULL,
  `Cvv` int DEFAULT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `u_id`, `c_id`, `Full_Name`, `Email`, `Address`, `City`, `State`, `Zip`, `Card_Name`, `Card_Number`, `Expmonth`, `Expyear`, `Cvv`, `price`) VALUES
(15, 76, 1, 'll', 'll@gmail.com', 'll', 'll', 'lll', 55, 'lll', 555, 55, 55, 55, 1000),
(18, 77, 1, 'Pranav Raju Malwatkar', 'pranavmalwatkar142@gmail.com', 'wakad', 'pune', 'maharshatra', 411057, 'pranav', 12334, 22, 2003, 22, 1000),
(19, 48, 1, 'Aaryan ojha', 'aa@mail.com', 'pune', 'pune', 'maharshatra', 411057, 'aaryan', 2344, 33, 44, 33, 1000),
(21, 48, 3, 'Aaryan ojha', 'aa@mail.com', 'pune', 'pune', 'maharshatra', 411057, 'aaryan', 234, 33, 33, 33, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(33) NOT NULL,
  `name` varchar(33) NOT NULL,
  `pass` varchar(33) NOT NULL,
  `IsAdmin` tinyint NOT NULL,
  `question1` varchar(99) NOT NULL,
  `question2` varchar(99) NOT NULL,
  `Email` varchar(99) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `fname`, `name`, `pass`, `IsAdmin`, `question1`, `question2`, `Email`) VALUES
(46, 'Admin', 'Admin', 'Admin', 1, 'Admin', 'Admin', ''),
(48, 'Aaryan Ojha', 'aaryan1234', 'aaryan1234', 0, 'Indira', 'Neeti', 'aaryan@gmail.com'),
(76, 'll', 'llll12', 'llll12', 0, 'll', 'll', 'l@gmail.com'),
(77, 'Pranav Raju Malwatkar', 'pranav12', 'pranav12', 0, 'Indira', 'Anita', 'pranav@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(400) NOT NULL,
  `c_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `name`, `c_id`) VALUES
(7, 'html3.mp4', 1),
(6, 'html2.mp4', 1),
(5, 'html1.mp4', 1),
(9, 'html4.mp4', 1),
(15, 'javascript1.mp4', 3),
(16, 'javascript2.mp4', 3),
(17, 'javascript3.mp4', 3),
(18, 'javascript4.mp4', 3),
(19, 'javascript5.mp4', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
