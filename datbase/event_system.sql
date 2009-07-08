-- phpMyAdmin SQL Dump
-- version 2.11.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2009 at 07:52 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `event_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `u_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `u_name`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'rajib', 'rajib'),
(3, 'tarek', 'tarek');

-- --------------------------------------------------------

--
-- Table structure for table `admin_advertise`
--

CREATE TABLE `admin_advertise` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `admin_advertise`
--

INSERT INTO `admin_advertise` (`id`, `title`, `details`, `image_path`, `start_date`, `end_date`, `status`) VALUES
(18, 'asdas', 'asdasd', 'Sunset.jpg', '2009-07-24', '2009-07-10', 1),
(17, 'asdasd', 'asdasd', 'Water lilies.jpg', '2009-07-16', '2009-07-31', 1),
(15, 'ad1', 'hello', 'Blue hills.jpg', '2009-07-04', '2009-07-05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `broker_add`
--

CREATE TABLE `broker_add` (
  `id` int(25) NOT NULL auto_increment,
  `e_id` int(24) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` int(12) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `broker_add`
--

INSERT INTO `broker_add` (`id`, `e_id`, `image_path`, `start_date`, `end_date`, `status`) VALUES
(20, 0, '', '0000-00-00', '0000-00-00', 0),
(19, 0, '', '0000-00-00', '0000-00-00', 0),
(18, 0, '', '0000-00-00', '0000-00-00', 0),
(17, 0, '', '0000-00-00', '0000-00-00', 0),
(16, 0, '', '0000-00-00', '0000-00-00', 0),
(15, 0, '', '0000-00-00', '0000-00-00', 0),
(14, 0, '', '2009-07-02', '2009-07-29', 0),
(13, 0, '', '2009-07-11', '2009-07-31', 0),
(12, 0, '', '2009-07-11', '2009-07-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `broker_user`
--

CREATE TABLE `broker_user` (
  `id` int(15) NOT NULL auto_increment,
  `b_name` varchar(255) NOT NULL,
  `b_address` varchar(255) NOT NULL,
  `b_phone` int(28) NOT NULL,
  `b_email` varchar(255) NOT NULL,
  `b_user_name` varchar(212) NOT NULL,
  `b_password` varchar(212) NOT NULL,
  `status` int(19) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `broker_user`
--

INSERT INTO `broker_user` (`id`, `b_name`, `b_address`, `b_phone`, `b_email`, `b_user_name`, `b_password`, `status`) VALUES
(2, 'sajiba', 'Dhaka', 183749832, 'sajib@yahoo.com', 'sajib', 'sajib', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(12) NOT NULL auto_increment,
  `cat_name` varchar(200) NOT NULL,
  `p_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `p_id`) VALUES
(3, 'movies', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `e_id` int(12) NOT NULL auto_increment,
  `cat_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_place` varchar(255) NOT NULL,
  `event_details` varchar(255) NOT NULL,
  `event_start_date` date NOT NULL,
  `event_end_date` date NOT NULL,
  PRIMARY KEY  (`e_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `event`
--


-- --------------------------------------------------------

--
-- Table structure for table `latest_news`
--

CREATE TABLE `latest_news` (
  `id` int(11) NOT NULL auto_increment,
  `l_title` varchar(255) NOT NULL,
  `l_details` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `latest_news`
--

INSERT INTO `latest_news` (`id`, `l_title`, `l_details`, `status`) VALUES
(4, 'New Title 2', 'New Title 2 New Title 2 New Title 2 New Title 2', ''),
(2, 'New Title 1', 'New Title 2 New Title 2 New Title 2 New Title 2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(15) NOT NULL auto_increment,
  `b_id` int(12) NOT NULL,
  `e_id` int(16) NOT NULL,
  `ticket_number` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` varchar(14) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ticket`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(255) NOT NULL,
  PRIMARY KEY  (`u_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `name`, `address`, `email`, `phone`, `username`, `password`, `status`) VALUES
(23, 'dasds', 'asds', 'asd', 11, 'asd', 'asd', 0),
(5, 'asds', 'asd', 'asd', 123123, 'dsad', 'asd', 0),
(58, 'Farhad Uddin Rajib', 'dhakad', 'fardhad@yahoo.com', 123456, 'abc', 'abc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE `user_comments` (
  `id` int(25) NOT NULL auto_increment,
  `u_id` int(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`id`, `u_id`, `title`, `details`, `status`) VALUES
(9, 58, 'test', 'ad', 0),
(2, 0, 'jurnals', 'sadsadasx', 1),
(3, 0, 'sadasd', 'asdasdasd', 1);
