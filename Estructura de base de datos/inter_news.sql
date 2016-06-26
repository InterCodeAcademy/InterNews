-- phpMyAdmin SQL Dump
-- version 4.0.10.12
-- http://www.phpmyadmin.net
--
-- Host: 127.5.199.2:3306
-- Generation Time: May 28, 2016 at 05:01 PM
-- Server version: 5.5.45
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inter_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `passw` varchar(25) NOT NULL,
  `class` char(1) NOT NULL DEFAULT 'U',
  `name` varchar(20) DEFAULT NULL,
  `lname` int(30) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`ID`, `username`, `mail`, `ip`, `passw`, `class`, `name`, `lname`) VALUES
(1, 'ICA', 'intercode.noreply@gmail.com', '125.0.0', 'Intercode16', 'A', 'ICA', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
