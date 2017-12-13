-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 09:15 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE IF NOT EXISTS `code` (
  `rollno` varchar(20) NOT NULL,
  `code` text NOT NULL,
  `output` text NOT NULL,
  `marks` int(11) NOT NULL,
  `tos` date NOT NULL,
  KEY `rollno` (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exp_detail`
--

CREATE TABLE IF NOT EXISTS `exp_detail` (
  `s_name` varchar(255) NOT NULL,
  `e_id` int(20) NOT NULL,
  `e_aim` varchar(255) DEFAULT NULL,
  `writeup` varchar(255) DEFAULT NULL,
  `dos` date DEFAULT NULL,
  PRIMARY KEY (`s_name`,`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exp_detail`
--

INSERT INTO `exp_detail` (`s_name`, `e_id`, `e_aim`, `writeup`, `dos`) VALUES
('cn', 1, 'Learn Networks', 'LAN,MAN,WAN', '2017-10-18'),
('cn', 2, 'Learn Network devices', 'Switch,Bridge and Hub', '2017-10-19'),
('mp', 1, 'what is micro-processor', 'A microprocessor is a computer processor which incorporates the functions of a computer''s central processing unit (CPU) on a single integrated circuit (IC), or at most a few integrated circuits.', '2017-10-18'),
('mp', 2, 'What is Integrated Circuits', 'An integrated circuit (IC), sometimes called a chip or microchip, is a semiconductor wafer on which thousands or millions of tiny resistors, capacitors, and transistors are fabricated. An IC can function as an amplifier, oscillator, timer, counter, comput', '2017-10-25'),
('os', 1, 'Learn Classes & Objects', 'Class ? A class can be defined as a template/blueprint that describes the behavior/state that the object of its type support.\r\nObjects in Java. ...\r\nClasses in Java. ...\r\nConstructors. ...\r\nCreating an Object. ...\r\nAccessing Instance Variables and Methods', '2017-10-14'),
('os', 2, 'Final in java', 'The final keyword in java is used to restrict the user.', '2017-10-18'),
('soad', 1, 'What is soad', 'A systems analyst is a person who uses analysis and design techniques to solve business problems using information technology. Systems analysts may serve as change agents who identify the organizational improvements needed, design systems to implement tho', '2017-10-05'),
('soad', 2, 'what is system software', 'System software is a type of computer program that is designed to run a computer''s hardware and application programs. If we think of the computer system as a layered model, the system software is the interface between the hardware and user applications.', '2017-10-26'),
('wtl', 1, 'HTML World', 'Hypertext Markup Language, a standardized system for tagging text files to achieve font, colour, graphic, and hyperlink effects on World Wide Web pages.', '2017-10-18'),
('wtl', 2, 'Frameworks of HTML', 'Bootstrap. Sleek, intuitive, and powerful front-end framework for faster and easier web development. ', '2017-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `subject` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `username`, `password`, `subject`) VALUES
(1, 'aamer', 'aamer', 'os'),
(2, 'aamer', 'aamer', 'oopm'),
(3, 'irfan', 'irfan', 'tcs'),
(4, 'irfan', 'irfan', 'dis'),
(5, 'salman', 'salman', 'dbms'),
(6, 'salman', 'salman', 'dbms\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE IF NOT EXISTS `final` (
  `rollno` varchar(20) NOT NULL,
  `file` mediumtext NOT NULL,
  KEY `rollno` (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `rollno` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sem` varchar(25) NOT NULL,
  `password` varchar(200) NOT NULL,
  `registerat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`rollno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `name`, `sem`, `password`, `registerat`) VALUES
('16dco49', 'sana', '6', 'sana', '2017-12-13 07:39:54'),
('16dco51', 'Moin', '3', 'moin', '2017-12-13 06:58:24'),
('16dco52', 'munaf', '4', 'munaf', '2017-12-13 07:39:00'),
('16dco69', 'sobiya', '5', 'sobiya', '2017-12-13 07:39:31');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `code`
--
ALTER TABLE `code`
  ADD CONSTRAINT `code_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `student` (`rollno`);

--
-- Constraints for table `final`
--
ALTER TABLE `final`
  ADD CONSTRAINT `final_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `student` (`rollno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
