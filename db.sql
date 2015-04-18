-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2015 at 06:06 PM
-- Server version: 5.5.33
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `oguzgelal`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `desc` text NOT NULL,
  `image` varchar(500) NOT NULL DEFAULT 'default.jpg',
  `builtwith` text NOT NULL,
  `github_link` text,
  `other_link` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `desc`, `image`, `builtwith`, `github_link`, `other_link`) VALUES
(1, 'Social Web', 'This extension lets you have an instant chat with the people that are viewing the same page. I app is my senior project.', 'default.jpg', 'Chrome Extension,Javascript,MeteorJS,NodeJS,MongoDB', 'https://github.com/oguzgelal/socialweb', NULL),
(2, 'oguzgelal.com', 'My personal website. The one you are currently viewing :)', 'default.jpg', 'PHP,Slim Framework,MySQL,Javascript,jQuery,Less', 'https://github.com/oguzgelal/oguzgelal.com', 'http://oguzgelal.com');
