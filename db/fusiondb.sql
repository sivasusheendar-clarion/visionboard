-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2013 at 01:03 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

USE `clarioncb_db`;

--
-- Database: `clarioncb_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cb_assets`
--

CREATE TABLE IF NOT EXISTS `cb_assets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dream_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `parameter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cb_assets`
--

INSERT INTO `cb_assets` (`id`, `dream_id`, `title`, `parameter`) VALUES
(1, 1, 'PHP Manual', '');

-- --------------------------------------------------------

--
-- Table structure for table `cb_dreams`
--

CREATE TABLE IF NOT EXISTS `cb_dreams` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL,
  `visionboard_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `parameter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cb_dreams`
--

INSERT INTO `cb_dreams` (`id`, `parent`, `visionboard_id`, `image_id`, `title`, `parameter`) VALUES
(1, 0, 1, 1, 'DREAM 1', ''),
(2, 0, 1, 2, 'DREAM 2', '');

-- --------------------------------------------------------

--
-- Table structure for table `cb_goals`
--

CREATE TABLE IF NOT EXISTS `cb_goals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dream_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `parameter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cb_goals`
--

INSERT INTO `cb_goals` (`id`, `dream_id`, `title`, `parameter`) VALUES
(1, 1, 'String Function', '');

-- --------------------------------------------------------

--
-- Table structure for table `cb_images`
--

CREATE TABLE IF NOT EXISTS `cb_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `tag` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cb_images`
--

INSERT INTO `cb_images` (`id`, `url`, `tag`) VALUES
(1, 'http://www.planet-source-code.com/vb/2010Redesign/images/LangugeHomePages/PHP.png', 'php'),
(2, 'http://www.itvedant.com/wp-content/uploads/2013/03/php1.png', 'php');

-- --------------------------------------------------------

--
-- Table structure for table `cb_obstacles`
--

CREATE TABLE IF NOT EXISTS `cb_obstacles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dream_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `parameter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cb_obstacles`
--

INSERT INTO `cb_obstacles` (`id`, `dream_id`, `title`, `parameter`) VALUES
(1, 1, 'TIME', '');

-- --------------------------------------------------------

--
-- Table structure for table `cb_users`
--

CREATE TABLE IF NOT EXISTS `cb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(1) NOT NULL DEFAULT '0',
  `user_date_created` datetime NOT NULL,
  `user_date_modified` datetime NOT NULL,
  `name` varchar(100) DEFAULT '',
  `user_company` varchar(100) DEFAULT '',
  `user_address_1` varchar(100) DEFAULT '',
  `user_address_2` varchar(100) DEFAULT '',
  `user_city` varchar(45) DEFAULT '',
  `user_state` varchar(35) DEFAULT '',
  `user_zip` varchar(15) DEFAULT '',
  `user_country` varchar(35) DEFAULT '',
  `user_phone` varchar(20) DEFAULT '',
  `user_fax` varchar(20) DEFAULT '',
  `user_mobile` varchar(20) DEFAULT '',
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `user_web` varchar(100) DEFAULT '',
  `user_psalt` char(22) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `cb_users`
--

INSERT INTO `cb_users` (`id`, `type`, `user_date_created`, `user_date_modified`, `name`, `user_company`, `user_address_1`, `user_address_2`, `user_city`, `user_state`, `user_zip`, `user_country`, `user_phone`, `user_fax`, `user_mobile`, `email`, `password`, `user_web`, `user_psalt`) VALUES
(15, 0, '2013-08-22 13:09:23', '2013-08-22 13:09:23', 'test', '', '', '', '', '', '', '', '', '', '', 'test@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cb_visionboards`
--

CREATE TABLE IF NOT EXISTS `cb_visionboards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cb_visionboards`
--

INSERT INTO `cb_visionboards` (`id`, `title`) VALUES
(1, 'VISION BOARD');

-- --------------------------------------------------------

--
-- Table structure for table `fi_users`
--

CREATE TABLE IF NOT EXISTS `fi_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` int(1) NOT NULL DEFAULT '0',
  `user_date_created` datetime NOT NULL,
  `user_date_modified` datetime NOT NULL,
  `user_name` varchar(100) DEFAULT '',
  `user_company` varchar(100) DEFAULT '',
  `user_address_1` varchar(100) DEFAULT '',
  `user_address_2` varchar(100) DEFAULT '',
  `user_city` varchar(45) DEFAULT '',
  `user_state` varchar(35) DEFAULT '',
  `user_zip` varchar(15) DEFAULT '',
  `user_country` varchar(35) DEFAULT '',
  `user_phone` varchar(20) DEFAULT '',
  `user_fax` varchar(20) DEFAULT '',
  `user_mobile` varchar(20) DEFAULT '',
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_web` varchar(100) DEFAULT '',
  `user_psalt` char(22) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `fi_users`
--
?>