-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2015 at 12:28 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE IF NOT EXISTS `new_record` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `trn_date` datetime NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (username) REFERENCES users(username)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;


-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `firstname`, `lastname`,`address`,`contact``contact`) VALUES
(1, 1, 'awd', 'daw', 'a'),
(2, 3, 'dasdas', 'asddas', 'dasdasd'),
(3, 3, 'asd', 'asd', '123');
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
