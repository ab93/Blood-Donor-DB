-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2014 at 10:39 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdcd`
--
CREATE DATABASE IF NOT EXISTS `bdcd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bdcd`;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `user_id` varchar(10) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `avail_units` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`user_id`, `password`, `name`, `address`, `city`, `state`, `zip`, `phone_no`, `email`, `avail_units`) VALUES
('b1', 'b1', 'Youth Red', 'Girish Park', 'Kolkata', 'West Bengal', '700045', '4170389012', 'abc@rediff.com', 300),
('b2', 'bank2', 'Red Cross', 'Barakhamba', 'Delhi', 'Delhi', '110089', '0978653412', 'rc@yahoo.com', 450);

-- --------------------------------------------------------

--
-- Table structure for table `donationreport`
--

CREATE TABLE IF NOT EXISTS `donationreport` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `blood_group` char(3) NOT NULL,
  `type` char(10) NOT NULL,
  `hospital_id` varchar(15) NOT NULL,
  PRIMARY KEY (`report_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `donationreport`
--

INSERT INTO `donationreport` (`report_id`, `user_id`, `date`, `amount`, `blood_group`, `type`, `hospital_id`) VALUES
(1, 'd1', '2014-04-29', 5, 'A+', 'platelets', 'h1'),
(2, 'd5', '2014-04-18', 4, 'O+', 'platelets', 'h2');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `user_id` varchar(10) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` char(20) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `zip` varchar(10) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` char(1) NOT NULL,
  `DOB` date NOT NULL,
  `last_donation` date NOT NULL,
  `blood_group` char(3) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `user_id` (`user_id`),
  KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`user_id`, `password`, `name`, `address`, `city`, `state`, `zip`, `phone_no`, `email`, `gender`, `DOB`, `last_donation`, `blood_group`) VALUES
('d1', 'pass1', 'Avik Basu', 'Indirapuram', 'Delhi', 'Delhi', '201010', '9600751795', 'avikbasu93@gmail.com', 'M', '1993-02-20', '2014-04-01', 'A+'),
('d2', 'pass2', 'Tushar Bamrara', 'Rohini', 'Delhi', 'Delhi', '110091', '1234567890', 'reddevils@gmail.com', 'M', '1993-02-15', '2014-04-10', 'B-'),
('d3', 'pass3', 'Dishant Mittal', 'East Patel Nagar', 'Delhi', 'Delhi', '110090', '56856222', 'dm@yahoo.co.in', 'M', '2014-04-10', '2014-04-11', 'O+'),
('d4', 'pass4', 'Pooja', 'Saket', 'Delhi', 'Delhi', '110082', '56856232', 'pg@yahoo.co.in', 'F', '2014-04-10', '2014-04-07', 'A-'),
('d5', 'pass5', 'Niharika', 'Medha Apartments', 'Delhi', 'Delhi', '110098', '6589741230', 'nr@gmail.com', 'F', '2014-01-15', '2014-04-23', 'O+'),
('d6', 'pass6', 'Devansh Dabral', 'Mahatma Gandhi Road', 'Kolkata', 'West Bengal', '700042', '4720389123', 'devdrocks@gmail.com', 'M', '1994-02-08', '2014-04-24', 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `healthreport`
--

CREATE TABLE IF NOT EXISTS `healthreport` (
  `user_id` varchar(15) NOT NULL,
  `height` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `haemo_level` int(11) NOT NULL,
  `allergies` varchar(20) DEFAULT NULL,
  `present_cond` varchar(20) NOT NULL,
  `last_updated` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `healthreport`
--

INSERT INTO `healthreport` (`user_id`, `height`, `weight`, `haemo_level`, `allergies`, `present_cond`, `last_updated`) VALUES
('d1', 130, 32, 12, '', 'great', '2014-04-18'),
('d2', 165, 80, 14, NULL, 'viral', '2014-04-24'),
('d3', 168, 59, 15, NULL, 'healthy', '2014-04-09'),
('d4', 200, 90, 20, '', 'healthy', '2014-04-02'),
('d5', 160, 62, 12, NULL, 'healthy', '2014-04-02');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `user_id` varchar(10) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` char(20) NOT NULL,
  `state` char(20) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`user_id`, `password`, `name`, `address`, `city`, `state`, `zip`, `phone_no`, `email`, `type`) VALUES
('h1', 'h1', 'Apollo', 'Preet VIhar', 'Delhi', 'Delhi', '110067', '1324657980', 'apollo@gmail.com', 'P'),
('h2', 'h2', 'Jeevan', 'Mayur vihar', 'Delhi', 'Delhi', '110092', '2135468790', 'jeevan@gmail.com', 'G'),
('h3', 'h3', 'Max', 'West CR park', 'Delhi', 'Delhi', '110058', '3256417890', 'xyz@gmail.com', 'P'),
('h4', 'adsd', 'Dabral', 'adsssdadad', 'sadsa', 'dassa', '1233', '9600751791', 'asdasds@asd', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `login_status` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`user_id`),
  KEY `password` (`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`, `login_status`) VALUES
('b1', 'b1', 'N'),
('b2', 'bank2', 'N'),
('d1', 'pass1', 'N'),
('d2', 'pass2', 'N'),
('d3', 'pass3', 'N'),
('d4', 'pass4', 'N'),
('d5', 'pass5', 'N'),
('d6', 'pass6', 'Y'),
('h1', 'h1', 'N'),
('h2', 'h2', 'N'),
('h3', 'h3', 'N'),
('h4', 'adsd', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `pending_report`
--

CREATE TABLE IF NOT EXISTS `pending_report` (
  `report_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `blood_group` char(3) NOT NULL,
  `type` char(10) NOT NULL,
  `hospital_id` varchar(15) NOT NULL,
  PRIMARY KEY (`report_id`),
  KEY `hospital_id` (`hospital_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `pending_report`
--

INSERT INTO `pending_report` (`report_id`, `user_id`, `date`, `amount`, `blood_group`, `type`, `hospital_id`) VALUES
(5, 'd6', '2014-04-25', 6, 'AB+', 'plasma', 'h1'),
(6, 'd3', '2014-04-27', 4, 'A-', 'platelets', 'h1'),
(7, 'd2', '2014-04-21', 4, 'B-', 'platelets', 'h1');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank`
--
ALTER TABLE `bank`
  ADD CONSTRAINT `bank_ibfk_1` FOREIGN KEY (`password`) REFERENCES `login` (`password`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `c3` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `c1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `p1` FOREIGN KEY (`password`) REFERENCES `login` (`password`);

--
-- Constraints for table `healthreport`
--
ALTER TABLE `healthreport`
  ADD CONSTRAINT `healthreport_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `donor` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hospital`
--
ALTER TABLE `hospital`
  ADD CONSTRAINT `c2` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pending_report`
--
ALTER TABLE `pending_report`
  ADD CONSTRAINT `pending_report_ibfk_2` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pending_report_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `donor` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
