-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2013 at 08:28 PM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `turtduru_p4_turtdur_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `movie_id` bigint(20) NOT NULL,
  `movie_title` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `created`, `modified`, `user_id`, `first_name`, `last_name`, `movie_id`, `movie_title`, `rating`, `content`) VALUES
(1, 1387766975, 1387766975, 2, '', '', 0, '', 0, 'test'),
(2, 1387767429, 1387767429, 2, '', '', 0, '', 100, 'This movie was great'),
(3, 1387767522, 1387767522, 2, '', '', 0, '', 12, 'Testing saving movie id to DB.'),
(4, 1387767591, 1387767591, 2, '', '', 0, '', 99, 'TEST2'),
(5, 1387767791, 1387767791, 2, '', '', 771315407, '', 52, 'This was a good movie. 771315407'),
(6, 1388004324, 1388004324, 2, '', '', 771315407, '', 10, 'This movies is good'),
(7, 1388029500, 1388029500, 2, '', '', 771249781, '', 100, 'This better f''ing work'),
(8, 1388029542, 1388029542, 2, '', '', 771246543, '', 84, 'REVIEW FOR FROOOOZEN'),
(9, 1388030264, 1388030264, 2, '', '', 771250004, '', 1, 'this movie fucking sucks'),
(10, 1388031206, 1388031206, 2, '', '', 771315407, '', 84, 'BOX OFFICE'),
(11, 1388031218, 1388031218, 2, '', '', 771305721, '', 100, 'OPENING'),
(12, 1388031245, 1388031245, 2, '', '', 771364044, '', 55, 'COMING SOON'),
(13, 1388031791, 1388031791, 2, '', '', 771303861, '', 96, 'HILARIOUS HAHAHA'),
(14, 1388032372, 1388032372, 2, '', '', 9175, '', 100, 'best movie of all time,'),
(15, 1388033453, 1388033453, 2, 'Greg', 'Lustiber', 771315407, '', 85, 'GREG WROTE THIS'),
(16, 1388039778, 1388039778, 2, 'Greg', 'Lustiber', 771315407, 'The Hobbit: The Desolation Of Smaug', 100, 'Should add the title'),
(17, 1388039948, 1388039948, 2, 'Greg', 'Lustiber', 771312656, 'The Conjuring', 51, 'sucks\r\n'),
(18, 1388039987, 1388039987, 2, 'Greg', 'Lustiber', 12911, 'The Godfather', 100, 'best movie of all time'),
(19, 1388076286, 1388076286, 2, 'Greg', 'Lustiber', 771303861, 'Anchorman 2: The Legend Continues', 95, 'i like this movie'),
(20, 1388077659, 1388077659, 2, 'Greg', 'Lustiber', 771315407, 'The Hobbit: The Desolation Of Smaug', 93, '93');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`, `location`, `website`, `profile_pic`) VALUES
(1, 0, 0, '', '', 0, '', 'Sam', 'Seaborn', 'glustiber@yahoo.com', '', '', ''),
(2, 1387337416, 1387760119, '7a48136320f97096fcd9016d883f89554248eb28', 'efa75b4786f4bfe5fa9266a299f8dd933c74a910', 0, '', 'Greg', 'Lustiber', 'glustiber@gmail.com', 'Monroe, CT', 'http://www.turtdur.us', '/uploads/avatars/2.png');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
