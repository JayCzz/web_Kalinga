-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 19, 2023 at 10:15 PM
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
-- Database: `capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `type` enum('Admin','Doctor','Nurse','Citizen') NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `middleInitial` varchar(1) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` int NOT NULL,
  `sex` enum('Male','Female') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adminNumber` varchar(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` bigint NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `verify_token` varchar(255) NOT NULL,
  `verify_status` tinyint(1) DEFAULT '0' COMMENT '0 = no, 1 = yes',
  `otp` varchar(255) NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `recovery_time` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `firstName` (`firstName`),
  KEY `lastName` (`lastName`),
  KEY `birthday` (`birthday`),
  KEY `age` (`age`),
  KEY `sex` (`sex`),
  KEY `adminNumber` (`adminNumber`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `phoneNumber` (`phoneNumber`),
  KEY `middleName` (`middleName`),
  KEY `middleInitial` (`middleInitial`),
  KEY `suffix` (`suffix`),
  KEY `verify_token` (`verify_token`),
  KEY `verify_status` (`verify_status`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `type`, `firstName`, `middleName`, `middleInitial`, `lastName`, `suffix`, `birthday`, `age`, `sex`, `adminNumber`, `username`, `email`, `phoneNumber`, `password`, `image`, `verify_token`, `verify_status`, `otp`, `activation_code`, `recovery_time`) VALUES
(1, 8895796828849, 'Admin', 'Marife', '', '', 'Obama', '', '1976-01-05', 47, 'Female', 'AD-01004', 'marife05', 'marife@gmail.com', 9123456789, 'marife05', '', '', 0, '', '', '0000-00-00 00:00:00'),
(2, 37902449718055365, 'Admin', 'Lebron', '', '', 'James', '', '1984-12-30', 38, 'Male', 'AD-01001', 'admin123', 'lebron.james@gmail.com', 9123456789, 'admin123', '2544.png', '', 0, '', '', '0000-00-00 00:00:00'),
(3, 551841738, 'Admin', 'Jimmy', '', '', 'Butler', '', '1989-09-14', 33, 'Male', 'AD-01022', 'jimmy22', 'j.buckets@gmail.com', 9123456789, 'jimmy22', '', '', 0, '', '', '0000-00-00 00:00:00'),
(4, 2405454626350408020, 'Admin', 'Jimmy', '', '', 'Butler', '', '1989-09-14', 33, 'Male', 'AD-01022', 'jimmy22', 'j.buckets@gmail.com', 9123456789, 'jimmy22', '', '', 0, '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `consultation_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `adress` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `familyNumber` varchar(8) NOT NULL,
  `cnumber` bigint NOT NULL,
  `consultation` varchar(1000) NOT NULL,
  KEY `adress` (`adress`),
  KEY `date` (`date`),
  KEY `familyNumber` (`familyNumber`),
  KEY `cnumber` (`cnumber`),
  KEY `consultation` (`consultation`(250)),
  KEY `consultation_name` (`consultation_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

DROP TABLE IF EXISTS `consultations`;
CREATE TABLE IF NOT EXISTS `consultations` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `familyNumber` varchar(8) NOT NULL,
  `cnumber` bigint NOT NULL,
  `consultation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `address` (`address`),
  KEY `date` (`date`),
  KEY `familyNumber` (`familyNumber`),
  KEY `cnumber` (`cnumber`),
  KEY `consultation` (`consultation`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `name`, `address`, `date`, `familyNumber`, `cnumber`, `consultation`) VALUES
(1, 'Rozelle Macaraeg', 'Nangka, Marikina City', '0000-00-00', '', 0, ''),
(2, 'Rozelle Macaraeg', 'Nangka, Marikina City', '0000-00-00', '', 0, ''),
(3, 'Rozelle Macaraeg', 'Nangka, Marikina City', '2023-04-30', 'FN-01005', 7698546815, 'Heavy cough and fever'),
(4, 'LeBron James', 'Nangka, Marikina City', '2023-04-30', 'FN-01007', 7465830599584826, 'High fever'),
(5, 'Natsu Dragneel', 'Nangka, Marikina City', '2023-04-30', 'FN-01001', 1637790318133398323, 'LBM'),
(6, 'Lorena Santos', 'Nangka, Marikina City', '2023-05-03', 'FN-01002', 652946296, 'Flu'),
(7, 'Juan Dela Cruz', 'Nangka, Marikina City', '2023-05-06', 'FN-01006', 9066614, 'High fever'),
(8, 'Juan Dela Cruz', 'Nangka, Marikina City', '2023-05-06', 'FN-01006', 9066614, 'High fever'),
(9, 'Juan Dela Cruz', 'Nangka, Marikina City', '2023-05-06', 'FN-01006', 9066614, 'High fever'),
(10, 'Natsu Dragneel', 'Nangka, Marikina City', '2023-05-06', 'FN-01001', 1637790318133398323, 'Dry cough'),
(11, 'Lorena Santos', 'Nangka, Marikina City', '2023-05-07', 'FN-01002', 652946296, 'High Fever'),
(12, 'Natsu Dragneel', 'Nangka, Marikina City', '2023-05-23', 'FN-01001', 1637790318133398323, 'Adsadadsadsa');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

DROP TABLE IF EXISTS `doctor`;
CREATE TABLE IF NOT EXISTS `doctor` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `type` enum('Doctor') NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `middleInitial` varchar(1) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` bigint NOT NULL,
  `sex` enum('Male','Female') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `doctorNumber` varchar(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` bigint NOT NULL,
  `password` varchar(100) NOT NULL,
  `verify_token` varchar(255) NOT NULL,
  `verify_status` tinyint NOT NULL DEFAULT '0' COMMENT '0 = no, 1 = yes',
  `otp` varchar(255) NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `recovery_time` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `firstName` (`firstName`),
  KEY `lastName` (`lastName`),
  KEY `birthday` (`birthday`),
  KEY `age` (`age`),
  KEY `sex` (`sex`),
  KEY `doctorNumber` (`doctorNumber`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `phoneNumber` (`phoneNumber`),
  KEY `middleName` (`middleName`),
  KEY `middleInitial` (`middleInitial`),
  KEY `suffix` (`suffix`),
  KEY `verify_token` (`verify_token`),
  KEY `verify_status` (`verify_status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `user_id`, `type`, `firstName`, `middleName`, `middleInitial`, `lastName`, `suffix`, `birthday`, `age`, `sex`, `doctorNumber`, `username`, `email`, `phoneNumber`, `password`, `verify_token`, `verify_status`, `otp`, `activation_code`, `recovery_time`) VALUES
(1, 6898, 'Doctor', 'Grace', '', '', 'Chua', '', '1980-08-25', 42, 'Female', 'DN-01001', 'chua25', 'grace@gmail.com', 9798456123, 'chua25', '', 0, '', '', '0000-00-00 00:00:00'),
(2, 507539, 'Doctor', 'Jomar', '', '', 'Dela Pena', '', '1998-01-03', 25, 'Male', 'DN-01002', 'doctor123', 'jom.delapena@gmail.com', 9123498765, 'doctor123', '', 0, '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `type` varchar(255) NOT NULL,
  `quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`id`, `name`, `type`, `quantity`, `image`) VALUES
(9, 'Losartan', 'ARB', '100', ''),
(12, 'Vitamin B12', 'Vitamins', '100', ''),
(11, 'Mefenamic acid', 'NSAID', '100', ''),
(10, 'Metformin', 'Non-sulfonylureas', '100', ''),
(13, 'Robitussin', 'Expectorants', '100', '');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

DROP TABLE IF EXISTS `nurse`;
CREATE TABLE IF NOT EXISTS `nurse` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `type` enum('Nurse') NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `middleInitial` varchar(1) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` bigint NOT NULL,
  `sex` enum('m','f') NOT NULL,
  `nurseNumber` varchar(8) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` bigint NOT NULL,
  `password` varchar(100) NOT NULL,
  `verify_token` varchar(255) NOT NULL,
  `verify_status` tinyint NOT NULL DEFAULT '0' COMMENT '0 = no, 1 = yes',
  `otp` varchar(255) NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `recovery_time` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `firstName` (`firstName`),
  KEY `lastName` (`lastName`),
  KEY `birthday` (`birthday`),
  KEY `age` (`age`),
  KEY `sex` (`sex`),
  KEY `nurseNumber` (`nurseNumber`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `phoneNumber` (`phoneNumber`),
  KEY `verify_token` (`verify_token`),
  KEY `verify_status` (`verify_status`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `user_id`, `type`, `firstName`, `middleName`, `middleInitial`, `lastName`, `suffix`, `birthday`, `age`, `sex`, `nurseNumber`, `username`, `email`, `phoneNumber`, `password`, `verify_token`, `verify_status`, `otp`, `activation_code`, `recovery_time`) VALUES
(1, 589359300, 'Nurse', 'Lucy', '', '', 'Parker', '', '1992-09-08', 30, 'f', 'NN-01002', 'lparker08', 'parker0908@gmail.com', 9123789456, 'lparker08', '', 0, '', '', '0000-00-00 00:00:00'),
(2, 62150284570216927, 'Nurse', 'Maria', '', '', 'Clara', '', '2000-01-01', 23, 'f', 'NN-01001', 'nurse123', 'm.clara@gmail.com', 9123654987, 'nurse123', '', 0, '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

DROP TABLE IF EXISTS `prescriptions`;
CREATE TABLE IF NOT EXISTS `prescriptions` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `familyNumber` varchar(8) NOT NULL,
  `cnumber` bigint NOT NULL,
  `prescription` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `address` (`address`),
  KEY `date` (`date`),
  KEY `familyNumber` (`familyNumber`),
  KEY `cnumber` (`cnumber`),
  KEY `prescription` (`prescription`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `name`, `address`, `date`, `familyNumber`, `cnumber`, `prescription`) VALUES
(1, 'James Carlos Yap', 'Nangka, Marikina City', '2023-05-03', 'FN-01007', 7042025769213999, '- Biogesic 3x a day\r\n- Bioflu 2x a day');

-- --------------------------------------------------------

--
-- Table structure for table `qr_code`
--

DROP TABLE IF EXISTS `qr_code`;
CREATE TABLE IF NOT EXISTS `qr_code` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `qr_code`
--

INSERT INTO `qr_code` (`id`, `name`, `image`) VALUES
(14, 'FN-01004', 'FN-01004.png'),
(15, 'FN-01005', 'FN-01005.png'),
(16, 'FN-01006', 'FN-01006.png'),
(11, 'FN-01001', 'FN-01001.png'),
(18, 'FN-01002', 'FN-01002.png'),
(13, 'FN-01003', 'FN-01003.png'),
(17, 'FN-01007', 'FN-01007.png');

-- --------------------------------------------------------

--
-- Table structure for table `queue_id_value`
--

DROP TABLE IF EXISTS `queue_id_value`;
CREATE TABLE IF NOT EXISTS `queue_id_value` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `queue_id_value`
--

INSERT INTO `queue_id_value` (`id`) VALUES
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12);

-- --------------------------------------------------------

--
-- Table structure for table `queue_list`
--

DROP TABLE IF EXISTS `queue_list`;
CREATE TABLE IF NOT EXISTS `queue_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `queue_id` varchar(255) NOT NULL,
  `qnumber` bigint NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Medical','Dental') NOT NULL,
  `status` enum('Active','Waiting','Done','No Show') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `queue_list`
--

INSERT INTO `queue_list` (`id`, `queue_id`, `qnumber`, `name`, `type`, `status`) VALUES
(1, 'QUEUE 0001', 0, 'James Mendoza', 'Medical', 'No Show'),
(2, 'QUEUE 0002', 0, 'James Carlos Yap', 'Medical', 'Done'),
(3, 'QUEUE 0003', 0, 'Lebron James', 'Medical', 'Done'),
(4, 'QUEUE 0004', 0, 'Dwyane Wade', 'Medical', 'No Show'),
(5, 'QUEUE 0005', 0, 'Jimmy Butler', 'Medical', 'Active'),
(6, 'QUEUE 0006', 0, 'Rozelle Macaraeg', 'Medical', 'Done'),
(7, 'QUEUE 0007', 0, 'Armando Candelaria', 'Medical', 'Done'),
(8, 'QUEUE 0008', 0, 'Jayc Espina', 'Medical', 'Done'),
(9, 'QUEUE 0009', 0, 'Rozelle Macaraeg', 'Medical', 'Done'),
(10, 'QUEUE 0010', 0, 'Trevor Ariza', 'Medical', 'Done'),
(11, 'QUEUE 0011', 0, 'James Harden', 'Medical', 'Done'),
(12, 'QUEUE 0012', 1637790318133398323, 'Tyler Herro', 'Medical', 'Done'),
(13, 'QUEUE 0013', 62150284570216927, 'Lee Nara', 'Medical', 'Done'),
(14, 'QUEUE 0014', 62150284570216927, 'Jimmy Butler', 'Medical', 'Done'),
(15, 'QUEUE 0015', 62150284570216927, 'Jio Jalalon', 'Medical', 'Done'),
(16, 'QUEUE 0016', 62150284570216927, 'Bam Adebayo', 'Medical', 'Done'),
(17, 'QUEUE 0017', 62150284570216927, 'Bam Adebayo', 'Medical', 'Done'),
(18, 'QUEUE 0018', 62150284570216927, 'Bam Adebayo', 'Medical', 'Done'),
(19, 'QUEUE 0019', 62150284570216927, 'Victor Oladipo', 'Medical', 'Done'),
(20, 'QUEUE 0020', 62150284570216927, 'Victor Oladipo', 'Medical', 'Done'),
(21, 'QUEUE 0021', 62150284570216927, 'Max Struss', 'Medical', 'Done'),
(22, 'QUEUE 0022', 62150284570216927, 'Cody Zeller', 'Medical', 'Done'),
(23, 'QUEUE 0023', 62150284570216927, 'Kevin Durant', 'Medical', 'Done'),
(24, 'QUEUE 0024', 62150284570216927, 'Kevin Durant', 'Medical', 'Done'),
(25, 'QUEUE 0025', 62150284570216927, 'Shaun Rafael', 'Medical', 'Done'),
(26, 'QUEUE 0026', 62150284570216927, 'Josh Hart', 'Medical', 'Done'),
(27, 'QUEUE 0027', 62150284570216927, 'Tristan Thompson', 'Medical', 'Done'),
(28, 'QUEUE 0028', 62150284570216927, 'James Carlos Yap', 'Medical', 'Done'),
(29, 'QUEUE 0029', 62150284570216927, 'Luka Doncic', 'Medical', 'Done'),
(30, 'QUEUE 0030', 1637790318133398323, 'Armando Candelaria', 'Medical', 'Done'),
(31, 'QUEUE 0031', 62150284570216927, 'Jimmy Butler', 'Medical', 'Done'),
(32, 'QUEUE 0032', 62150284570216927, 'Jason Kidd', 'Medical', 'Done'),
(33, 'QUEUE 0033', 62150284570216927, 'Duncan Robinson', 'Medical', 'Done'),
(34, 'QUEUE 0034', 37902449718055365, 'Nikola Jokic', 'Dental', 'Done'),
(35, 'QUEUE 0035', 37902449718055365, 'Julius Randle', 'Dental', 'No Show'),
(36, 'QUEUE 0036', 37902449718055365, 'Caleb Martin', 'Medical', 'Done'),
(37, 'QUEUE 0037', 37902449718055365, 'Maria Clara', 'Medical', 'Done'),
(38, 'Queue 0038', 37902449718055365, 'Anthony Davis', 'Dental', 'No Show'),
(39, 'Queue 0039', 37902449718055365, 'Gabe Vincent', 'Medical', 'Waiting'),
(40, 'Queue 0040', 37902449718055365, 'Kevin Love', 'Medical', 'Waiting'),
(41, 'Queue 0041', 37902449718055365, 'Nikola Jovic', 'Medical', 'Waiting'),
(42, 'Queue 0042', 37902449718055365, 'Devin Booker', 'Medical', 'Waiting'),
(43, 'Queue 0043', 37902449718055365, 'Pj Simon', 'Medical', 'Waiting'),
(44, 'Queue 0001', 37902449718055365, 'Jason Tatum', 'Medical', 'Done'),
(45, 'Queue 0002', 37902449718055365, 'Marcus Smart', 'Medical', 'Done'),
(46, 'Queue 0003', 37902449718055365, 'Adrian Wong', 'Medical', 'Done'),
(47, 'Queue 0004', 37902449718055365, 'Taylor Swift', 'Medical', 'Done'),
(48, 'Queue 0005', 37902449718055365, 'Evan Turner', 'Medical', 'No Show'),
(49, 'Queue 0006', 37902449718055365, 'Marc Pingris', 'Dental', 'No Show'),
(50, 'Queue 0007', 37902449718055365, 'Trae Young', 'Dental', 'Active'),
(51, 'Queue 0008', 37902449718055365, 'James Carlos Yap', 'Dental', 'Waiting'),
(52, 'Queue 0009', 37902449718055365, 'Armando Candelaria', 'Medical', 'Waiting'),
(53, 'Queue 0010', 62150284570216927, 'Robert Cruz', 'Medical', ''),
(54, 'Queue 0011', 1637790318133398323, 'Lebron James', 'Medical', 'Waiting'),
(55, 'Queue 0012', 1637790318133398323, 'Stepen Sorry', 'Dental', 'Waiting');

--
-- Triggers `queue_list`
--
DROP TRIGGER IF EXISTS `getID`;
DELIMITER $$
CREATE TRIGGER `getID` BEFORE INSERT ON `queue_list` FOR EACH ROW BEGIN
	INSERT INTO queue_id_value VALUES (NULL);
    SET NEW.queue_id = CONCAT("Queue " , LPAD(LAST_INSERT_ID(), 4,"0"));
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

DROP TABLE IF EXISTS `schedule_list`;
CREATE TABLE IF NOT EXISTS `schedule_list` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(7, 'Dental Cleaning', 'Clean your teeth', '2023-02-03 12:00:00', '2023-02-03 15:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `title`, `description`, `image`) VALUES
(1, 'Medical Consultation', 'Free checkups are provided for the residents.', 'service01.png'),
(2, 'Emergency Help', 'Emergency hotlines to text or call.', 'service02.png'),
(3, 'First Aid', 'Free first aid services for patients.', 'service03.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`) VALUES
(1, 'Medical Consultation', 'Free checkups are provided for the residents.', 'service01.png'),
(2, 'Emergency Help', 'Emergency hotlines to text or call.', 'service02.png'),
(3, 'First Aid', 'Free first aid services for patients.', 'service03.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `user_id` bigint NOT NULL,
  `type` enum('Citizen') NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `middleInitial` varchar(1) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `age` bigint NOT NULL,
  `sex` enum('Male','Female') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `familyNumber` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `height` bigint NOT NULL,
  `weight` bigint NOT NULL,
  `bp` varchar(8) NOT NULL,
  `updated` date NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneNumber` bigint NOT NULL,
  `password` varchar(100) NOT NULL,
  `verify_token` varchar(255) NOT NULL,
  `verify_status` tinyint NOT NULL DEFAULT '0' COMMENT '0 = no, 1 = yes',
  `otp` varchar(255) NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `recovery_time` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `firstName` (`firstName`),
  KEY `lastName` (`lastName`),
  KEY `birthday` (`birthday`),
  KEY `age` (`age`),
  KEY `sex` (`sex`),
  KEY `familyNumber` (`familyNumber`),
  KEY `username` (`username`),
  KEY `email` (`email`),
  KEY `phoneNumber` (`phoneNumber`),
  KEY `height` (`height`),
  KEY `weight` (`weight`),
  KEY `bp` (`bp`),
  KEY `updated` (`updated`),
  KEY `midleName` (`middleName`),
  KEY `middleInitial` (`middleInitial`),
  KEY `suffix` (`suffix`),
  KEY `verify_token` (`verify_token`),
  KEY `verify_status` (`verify_status`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `type`, `firstName`, `middleName`, `middleInitial`, `lastName`, `suffix`, `birthday`, `age`, `sex`, `familyNumber`, `height`, `weight`, `bp`, `updated`, `username`, `email`, `phoneNumber`, `password`, `verify_token`, `verify_status`, `otp`, `activation_code`, `recovery_time`) VALUES
(3, 1637790318133398323, 'Citizen', 'Natsu', '', '', 'Dragneel', '', '2000-07-27', 22, 'Male', 'FN-01001', 168, 79, '120/90', '2023-05-06', 'natsu27', 'natsu.dragneel.main0727@gmail.com', 9074403149, '789789', '0', 0, '416328', '82ixpwbjdgfkcream7zhsqtlnu5v7yo8', '2023-11-15 14:02:26'),
(4, 7580310745353323131, 'Citizen', 'Dwyane', '', '', 'Wade', '', '1982-02-16', 41, 'Male', 'FN-01002', 193, 100, '125/80', '2023-04-25', 'dwade03', 'd.wade03@gmail.com', 9123455678, 'dwade4ever', '0', 0, '831706', 'sa7otuhfx7p7mbwv9d6k1jeclziqn8ryg', '2023-11-13 17:45:01'),
(5, 7265107912895991, 'Citizen', '', '', '', 'Candelaria', '', '2000-10-05', 22, 'Male', 'FN-01003', 0, 0, '', '0000-00-00', 'armin05', 'qavcandelaria@tip.edu.ph', 9452385340, 'arminpogi', '0', 0, '841305', 'p8i3yjgck0sa8ohtfn06bmlxvuedw4rqz', '2023-11-02 13:30:59'),
(6, 76972479655037, 'Citizen', 'Jerry', '', '', 'Clarito', '', '1967-10-09', 55, 'Male', 'FN-01004', 0, 0, '', '0000-00-00', 'jerryclarito', 'bbclarito09@gmail.com', 9053902090, 'jerry1', '0', 0, '', '', '0000-00-00 00:00:00'),
(7, 7111055, 'Citizen', 'Concepcion', '', '', 'Clarito', '', '1967-10-09', 55, 'Female', 'FN-01004', 0, 0, '', '0000-00-00', 'conc', 'bbclarito09@gmail.com', 9123456789, '123123', '0', 0, '', '', '0000-00-00 00:00:00'),
(8, 69071362844102318, 'Citizen', 'James', '', '', 'Mendoza', '', '2000-07-09', 22, 'Male', 'FN-01005', 0, 0, '', '0000-00-00', 'james123', 'james.mendoza@gmail.com', 9987654321, 'james123', '0', 0, '', '', '0000-00-00 00:00:00'),
(9, 155011987532, 'Citizen', 'Jayc', '', '', 'Espina', '', '2000-01-01', 23, 'Male', 'FN-01006', 0, 0, '', '0000-00-00', 'jayc01', 'jayc.espina@gmail.com', 9456789123, '123456', '0', 0, '', '', '0000-00-00 00:00:00'),
(10, 9066614, 'Citizen', 'Juan', '', '', 'Dela Cruz', '', '2000-05-01', 23, 'Male', 'FN-01006', 0, 0, '', '0000-00-00', 'juan11', 'james.mendoza@gmail.com', 9452385341, 'juan11', '0', 0, '', '', '0000-00-00 00:00:00'),
(11, 7042025769213999, 'Citizen', 'James Carlos', '', '', 'Yap', '', '2000-07-18', 22, 'Male', 'FN-01007', 188, 94, '120/90', '2023-04-26', 'jcyap18', 'jcyap18@gmail.com', 9234561231, 'jcy1800', '0', 0, '327690', 'pqj7wuy6ctogbarlsf31vexim2k4nh2zd', '2023-11-14 11:11:57'),
(12, 7465830599584826, 'Citizen', 'LeBron', '', '', 'James', '', '1984-12-30', 38, 'Male', 'FN-01007', 205, 100, '120/90', '2023-03-23', 'lbj23', 'lebron.james@gmail.com', 9452385340, 'lbj23', '0', 0, '057326', '7rk5vzohicb6wuepdjgmqax3tlf3n3ys1', '2023-11-13 17:51:44'),
(13, 652946296, 'Citizen', 'Lorena', '', '', 'Santos', '', '1950-02-22', 72, 'Female', 'FN-01002', 155, 59, '125/90', '2023-04-26', 'lsantos', 'lorena@gmail.com', 9123456789, 'lsantos', '0', 0, '287605', '7et8oliy6xvsnaumbwpqzgd4j2r8k3hfc', '2023-11-14 12:01:04'),
(14, 7698546815, 'Citizen', 'Rozelle', '', '', 'Macaraeg', '', '2000-07-25', 22, 'Female', 'FN-01005', 0, 0, '', '0000-00-00', 'zellegearacam', 'roselle.macaraeg@gmail.com', 9458011141, 'haduken1234', '0', 0, '203179', 'wa5gbfn7i0qpvs5y2etoklhdrjuzm0xc', '2023-11-02 17:15:55'),
(15, 849696174405, 'Citizen', 'Terence', '', '', 'Romeo', '', '2000-06-22', 22, 'Male', 'FN-01001', 0, 0, '', '0000-00-00', '12345', 'tr7@gmail.com', 9123456782, '12345', '0', 0, '', '', '0000-00-00 00:00:00'),
(16, 17281382106, 'Citizen', 'Rodrigo', '', '', 'Bato', '', '2000-07-09', 22, 'Male', 'FN-01001', 0, 0, '', '0000-00-00', 'rrb123', 'bigboygaming582@gmail.com', 9074403149, 'rrb123', '0', 0, '980457', 'iv1yrwp4utdf0macez1ohgskn64qb9lxj', '2023-11-19 19:28:51'),
(17, 948706184928995932, 'Citizen', 'Rodrigo', 'Rona', 'R', 'Bato', '', '2000-07-09', 22, 'Male', 'FN-01001', 0, 0, '', '0000-00-00', 'rrb123', 'bigboygaming582@gmail.com', 9074403149, 'rrb123', '0', 0, '980457', 'iv1yrwp4utdf0macez1ohgskn64qb9lxj', '2023-11-19 19:28:51'),
(18, 686777744717144033, 'Citizen', 'Jack', 'Nano', 'N', 'Poy', 'Jr', '2000-05-01', 23, '', 'FN-01001', 0, 0, '', '0000-00-00', 'jnp123', 'jnp123@gmail.com', 9123456785, 'jnp123', '0', 0, '', '', '0000-00-00 00:00:00'),
(19, 6619, 'Citizen', 'Ma', 'Dee', 'D', 'Kit', '', '1982-02-16', 40, 'Female', 'FN-01002', 0, 0, '', '0000-00-00', 'mdk123', 'mdk123@gmail.com', 9074403148, 'mdk123', '0', 0, '613089', 'nl2rymub2egopkia5qw0xzsdt62hvj6fc', '2023-11-14 18:32:34'),
(20, 11956, 'Citizen', 'Jaime', 'Jason', 'J', 'Jaques', 'Jr', '1999-01-02', 24, 'Male', 'FN-01002', 0, 0, '', '0000-00-00', 'jjjj11', 'jaimejaquez@gmail.com', 9123456765, 'jjjj11', '5', 0, '', '', '0000-00-00 00:00:00'),
(21, 35274541, 'Citizen', 'Orlando', 'Magic', 'M', 'Robinson', '', '2000-07-09', 23, 'Male', 'FN-01001', 0, 0, '', '0000-00-00', 'omr25', 'bigboygaming582@gmail.com', 9074403149, 'omr25', '0', 0, '980457', 'iv1yrwp4utdf0macez1ohgskn64qb9lxj', '2023-11-19 19:28:51'),
(22, 7559817057262110, 'Citizen', 'Peter', 'June', 'J', 'Simon', '', '2000-05-01', 23, 'Male', 'FN-01001', 0, 0, '', '0000-00-00', 'pj08', 'bigboygaming582@gmail.com', 9074403149, 'pj08', '792168', 0, '980457', 'iv1yrwp4utdf0macez1ohgskn64qb9lxj', '2023-11-19 19:28:51'),
(23, 22686424320785, 'Citizen', 'Jason', 'Will', 'W', 'Richardson', 'Jr', '0000-00-00', 22, 'Male', 'FN-01002', 0, 0, '', '0000-00-00', 'jr00', 'bigboygaming582@gmail.com', 9074403149, 'jr00', '77994', 0, '980457', 'iv1yrwp4utdf0macez1ohgskn64qb9lxj', '2023-11-19 19:28:51'),
(24, 11800882225, 'Citizen', 'Tyler', 'Tio', 'T', 'Johnson', 'Jr', '0000-00-00', 22, 'Male', 'FN-01004', 0, 0, '', '0000-00-00', 'qwerty123', 'bigboygaming582@gmail.com', 0, 'qwerty123', '994666', 0, '980457', 'iv1yrwp4utdf0macez1ohgskn64qb9lxj', '2023-11-19 19:28:51'),
(27, 43466, 'Citizen', 'Jason', 'William', 'W', 'Castro', 'Jr', '2000-07-17', 23, 'Male', 'FN-01002', 0, 0, '', '0000-00-00', 'jayson17', 'theophilus052527@gmail.com', 9150371233, '123456', '77d49d5cdbd63d14175e1ba1fa901f40', 0, '', '', '2023-11-19 20:25:08'),
(28, 10301, 'Citizen', 'Emmanuel', 'Tite', 'T', 'Jumauan', 'none', '2006-10-14', 17, 'Male', 'FN-01001', 0, 0, '', '0000-00-00', 'kaiju14', 'asrofcandelaria@gmail.con', 9074403149, 'kaiju14', '19c718b363f1574a614f285b06c362fb', 0, '', '', '0000-00-00 00:00:00'),
(29, 2174640833, 'Citizen', 'Paul', 'Dalistan', 'D', 'Lee', '', '2000-07-09', 23, 'Male', 'FN-01002', 0, 0, '', '0000-00-00', 'poli03', 'zaffre.san@gmail.com', 9150371233, 'poli03', '59d4dbe3b43d18383f26e5b608e0ebf1', 1, '', '', '0000-00-00 00:00:00'),
(30, 544489973535640028, 'Citizen', 'Zayden', 'Macaraeg', 'M', 'Candelaria', '', '2000-07-27', 23, 'Male', 'FN-01001', 0, 0, '', '0000-00-00', 'zaydenmc', 'babykulet27@gmail.com', 9150371233, 'zaydenmc', '30166a1a9d914ac5c93046c9bd17f594', 1, '', '', '0000-00-00 00:00:00'),
(31, 5420184842739315579, 'Citizen', 'Ma. Aramae', 'Villanueva', 'V', 'Candelaria', '', '2004-09-08', 19, 'Female', 'FN-01002', 0, 0, '', '0000-00-00', 'aramae1849', 'aracandelaria59@gmail.com', 9123456785, 'aramae1849', '22829c356b555dcbc08507da4721b313', 1, '761932', 'srftmojlq8nke5a91xuhwivc4zg2dyp3b', '2023-11-19 19:31:56'),
(32, 944254142107, 'Citizen', 'Emmanuel', 'Tite', 'T', 'Jumauan', '', '2006-10-14', 17, 'Male', 'FN-01001', 0, 0, '', '0000-00-00', 'kaiju14', 'asrofcandelaria@gmail.com', 9074403149, 'kaiju14', 'c31ea9f187d6032ee806d2b3aa77556d', 0, '', '', '0000-00-00 00:00:00'),
(33, 63334028116209, 'Citizen', 'adsadad', 'sadasd', 's', 'dsadsad', 'Jr', '2000-07-09', 23, '', 'FN-01003', 0, 0, '', '0000-00-00', 'tipsyd', 'zaffre.sana@gmail.com', 9150371233, 'tipsyd', 'a18af55a6a0e3b394a8cc790dfd97249', 0, '', '', '0000-00-00 00:00:00'),
(34, 547115970236283, 'Citizen', 'Brian', 'Smug', 'S', 'Lao', '', '2000-01-05', 23, 'Male', 'FN-01003', 0, 0, '', '0000-00-00', 'smuglaz', 'armin.candelaria.s@gmail.com', 9074403149, 'smuglaz', 'cecb005e5e833a399fc66521a4370e95', 0, '', '', '0000-00-00 00:00:00'),
(35, 3080, 'Citizen', 'Lei', 'Concepcion', 'C', 'Butler', '', '2000-01-05', 23, 'Female', 'FN-01003', 0, 0, '', '0000-00-00', 'chocolate', 'chocolate012345@gmail.com', 9074403187, 'chocolate', '5307a64a618281ab405011684d7907b5', 0, '', '', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
