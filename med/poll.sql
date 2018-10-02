-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 02, 2018 at 02:45 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbadministrators`
--

DROP TABLE IF EXISTS `tbadministrators`;
CREATE TABLE IF NOT EXISTS `tbadministrators` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbadministrators`
--

INSERT INTO `tbadministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Olusegun', 'Gyibrilla', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(5, 'sam', 'olu', 'olubayosamuelolalekan@gmail.com', '3935bfa0eaf624700f0cd1c6bf0b1038'),
(10, 'samuel', 'olalekan', 'olubayosamuelolalekan@gmail.com', '3935bfa0eaf624700f0cd1c6bf0b1038');

-- --------------------------------------------------------

--
-- Table structure for table `tbcandidates`
--

DROP TABLE IF EXISTS `tbcandidates`;
CREATE TABLE IF NOT EXISTS `tbcandidates` (
  `candidate_id` int(5) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(45) NOT NULL,
  `candidate_position` varchar(45) NOT NULL,
  `candidate_cvotes` int(11) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbcandidates`
--

INSERT INTO `tbcandidates` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_cvotes`) VALUES
(1, 'Mamun', 'PRESIDENT', 0),
(2, 'Emran', 'PRESIDENT', 1),
(3, 'Sabuj', 'VICE-PRESIDENT', 1),
(4, 'Sajedul', 'VICE-PRESIDENT', 0),
(5, 'Ibrahim', 'Chairman', 0),
(8, 'tobi', 'Secretary', 1),
(9, 'ade', 'Vice-Secretary', 1),
(10, 'seun', 'Treasurer', 1),
(11, 'wande', 'Vice-Treasurer', 1),
(12, 'titi', 'Member', 1),
(13, 'yemi', 'Woman-Member', 0),
(14, 'igneous', 'Woman-Member', 1),
(15, 'sia', 'Chairman', 1),
(17, 'bolt', 'Organizing-Secretary', 1),
(18, 'sampam', 'Executive-Officer', 1),
(19, 'mary', 'Executive-Officer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbmembers`
--

DROP TABLE IF EXISTS `tbmembers`;
CREATE TABLE IF NOT EXISTS `tbmembers` (
  `member_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `voter_id` varchar(128) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `haveVote` int(11) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmembers`
--

INSERT INTO `tbmembers` (`member_id`, `first_name`, `last_name`, `voter_id`, `email`, `password`, `haveVote`) VALUES
(1, 'Md. Rezwanul', 'Haque', '14', 'rezwan@gmail.com', '7d9b087beffc9879ead55e7291d6b541', 0),
(2, 'Mahbub', 'Alam', '43', 'mahbub@gmail.com', '939d2ad38c88fda9c0bad11086e4e057', 0),
(3, 'samuel', 'olubayo', '123', 'olusam@gmail.com', '3935bfa0eaf624700f0cd1c6bf0b1038', 0),
(4, 'samuel', 'olalekan', '23', 'olubayosamuelolalekan@gmail.com', '3935bfa0eaf624700f0cd1c6bf0b1038', 1),
(5, 'don', 'tac', '30', 'bigsam@gmail.com', '3935bfa0eaf624700f0cd1c6bf0b1038', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbparty`
--

DROP TABLE IF EXISTS `tbparty`;
CREATE TABLE IF NOT EXISTS `tbparty` (
  `party_id` int(5) NOT NULL AUTO_INCREMENT,
  `party_name` varchar(45) NOT NULL,
  `party_position` varchar(45) NOT NULL,
  `party_cvotes` int(11) NOT NULL,
  PRIMARY KEY (`party_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbparty`
--

INSERT INTO `tbparty` (`party_id`, `party_name`, `party_position`, `party_cvotes`) VALUES
(1, 'PDP', 'PRESIDENT', 0),
(2, 'APC', 'PRESIDENT', 0),
(3, 'Accord party', 'VICE-PRESIDENT', 0),
(4, 'ACN', 'VICE-PRESIDENT', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbpositions`
--

DROP TABLE IF EXISTS `tbpositions`;
CREATE TABLE IF NOT EXISTS `tbpositions` (
  `position_id` int(5) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(45) NOT NULL,
  `voteStatus` int(3) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpositions`
--

INSERT INTO `tbpositions` (`position_id`, `position_name`, `voteStatus`) VALUES
(1, 'PRESIDENT', 0),
(2, 'VICE-PRESIDENT', 0),
(3, 'Secretary', 0),
(4, 'Vice-Secretary', 0),
(5, 'Organizing-Secretary', 0),
(6, 'Treasurer', 0),
(7, 'Vice-Treasurer', 0),
(8, 'Member', 0),
(9, 'Woman-Member', 0),
(10, 'Chairman', 0),
(11, 'Executive-Officer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `validateprint`
--

DROP TABLE IF EXISTS `validateprint`;
CREATE TABLE IF NOT EXISTS `validateprint` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `status` int(5) NOT NULL,
  `print_id` int(5) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validateprint`
--

INSERT INTO `validateprint` (`id`, `status`, `print_id`, `info`) VALUES
(1, 1, 23, 'this is the patient we are talking about');

-- --------------------------------------------------------

--
-- Table structure for table `validateprintmed`
--

DROP TABLE IF EXISTS `validateprintmed`;
CREATE TABLE IF NOT EXISTS `validateprintmed` (
  `id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `info` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validateprintmed`
--

INSERT INTO `validateprintmed` (`id`, `status`, `patient_id`, `info`) VALUES
(1, 0, 0, 'the real nigga');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
