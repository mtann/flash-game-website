-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2014 at 03:53 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gameflash`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `id` int(11) NOT NULL,
  `username` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `game_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `game_id` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `avatar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `upload_time` date NOT NULL,
  `totalplay` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `name`, `description`, `status`, `rating`, `avatar`, `link`, `upload_time`, `totalplay`) VALUES
(1, 'Bé tập làm vườn', NULL, 0, NULL, NULL, '', '2014-05-10', 0),
(2, 'Bảo vệ trái đất', NULL, 0, NULL, NULL, '', '2014-05-10', 0),
(3, 'Chú khỉ buồn 17', NULL, 0, NULL, NULL, '', '2014-05-10', 0),
(4, 'Doremon chơi khúc quân cầu', NULL, 0, NULL, NULL, '', '2014-05-10', 0),
(5, 'Du lịch mùa hè', NULL, 0, NULL, NULL, '', '2014-05-10', 0),
(6, 'Giải đấu sinh tử', NULL, 0, NULL, NULL, '', '2014-05-10', 0),
(7, 'Hôn trộm Mr Bean', NULL, 0, NULL, NULL, '', '2014-05-10', 0),
(8, 'Học làm mì lasagna', NULL, 0, NULL, NULL, '', '2014-05-10', 0),
(9, 'Kế hoạch nguy hiểm', NULL, 0, NULL, NULL, '', '2014-05-10', 0),
(10, 'Trả thù xếp', NULL, 0, NULL, NULL, '', '2014-05-10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `play_game`
--

CREATE TABLE IF NOT EXISTS `play_game` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_game` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `total_play` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_game` int(11) NOT NULL,
  `id_account` int(11) NOT NULL,
  `total_good` int(11) unsigned NOT NULL,
  `total_bad` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
