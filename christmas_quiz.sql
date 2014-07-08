GRANT USAGE ON *.* TO 'christmas_quiz'@'localhost' IDENTIFIED BY PASSWORD '*AF2BE839D4A115C7F72C8ADDDDFA8688257B71D7';
GRANT ALL PRIVILEGES ON `christmas_quiz`.* TO 'christmas_quiz'@'localhost';


-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2014 at 08:19 PM
-- Server version: 5.5.37
-- PHP Version: 5.3.10-1ubuntu3.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `christmas_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`) VALUES
(1, 'lili', '123'),
(2, 'sando', '123'),
(3, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `ans1` text NOT NULL,
  `ans2` text NOT NULL,
  `ans3` text NOT NULL,
  `ans4` text NOT NULL,
  `correct` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct`) VALUES
(1, 'What happens when my question is really long and I have no idea what to write to make it really long so I can bug my website. I have to add one more sentence  so the effect will be uaaaaauu      ', 'right', 'wrong1', 'wrong2', 'wrong3', 'Answer 1'),
(2, 'my first question', 'a', 'a', 'a', 'b', 'Answer 4'),
(3, 'This is my second question about OOP design...', 'My first answer', 'My second answer', 'My third answer', 'My correct answer', 'Answer 4'),
(4, 'This is another long question...      ', 'first ans', 'second', 'third', 'right', 'Answer 4'),
(5, 'this is my first edit question', 'edit1', 'edit2', 'a', 'b class=', 'Answer 4'),
(6, 'changed                        ', 'a', 'a', 'a', 'lili', 'Answer 1'),
(8, 'my first question      is changed      ', 'a', 'a', 'a', 'ffdsf', 'Answer 1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
