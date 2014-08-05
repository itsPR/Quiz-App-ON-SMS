-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.2.58.130:3306
-- Generation Time: Aug 05, 2014 at 04:39 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trivarc`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE IF NOT EXISTS `a` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `qid` int(50) NOT NULL,
  `a` varchar(200) NOT NULL,
  `mhash` varchar(100) NOT NULL,
  `p` varchar(50) NOT NULL,
  `time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0;



-- --------------------------------------------------------

--
-- Table structure for table `id`
--

CREATE TABLE IF NOT EXISTS `id` (
  `idm` int(50) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `id`
--

INSERT INTO `id` (`idm`, `id`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `q`
--

CREATE TABLE IF NOT EXISTS `q` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `que` varchar(1000) NOT NULL,
  `1` varchar(500) NOT NULL,
  `2` varchar(500) NOT NULL,
  `3` varchar(500) NOT NULL,
  `4` varchar(500) NOT NULL,
  `wa` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `q`
--

INSERT INTO `q` (`id`, `que`, `1`, `2`, `3`, `4`, `wa`) VALUES
(1, 'When and where the 1st world cup football held?', 'Uruguay', 'India', 'Brazil', 'Spain', '1'),
(2, 'Which Country will host the 2014 world cup football?', 'Uruguay', 'India', 'Brazil', 'Spain', '3'),
(3, 'What is the World cup football 2014 mascot?', 'Gauchito', 'Ciao', 'Football', 'Fuleco', '4'),
(4, 'Which country was banned by FIFA for 2018 world cup football?', 'Myanmar', 'Spain', 'Brazil', 'U.S', '1'),
(5, 'Which company makes the world cup football?', 'Google', 'Adidas', 'Nike', 'Levis', '2'),
(6, 'Who was tallest world cup football player?', 'Messi', 'Ronaldo', 'Peter Crouch', 'Sachin', '3'),
(7, 'Which was the first country to host the World Cup football twice?', 'Mexico', 'Brazil', 'India', 'Pakistan', '1'),
(8, 'Which Was The First African Nation To Play In The Final Stages?', 'Australia', 'Spain', 'Amerika', 'Ezypt', '4'),
(9, 'Which Is The Only Country To Have Played In Every World Cup Since It Started In 1930?', 'Myanmar', 'Spain', 'Brazil', 'U.S', '3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
