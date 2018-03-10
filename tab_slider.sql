-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2018 at 10:16 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multipage`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab_slider`
--

CREATE TABLE `tab_slider` (
  `id` int(11) NOT NULL,
  `page` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tab_slider`
--

INSERT INTO `tab_slider` (`id`, `page`, `content`) VALUES
(1, 'Oh, you like dogs?', ' <img src=\"img/roxie1.jpg\">\r\n <div class=\"carousel-caption\"> \r\n <p>This is my partner in crime, Roxie.</p>\r\n </div>'),
(2, 'You have work to do?', '<img src=\"img/roxie2.jpg\">\r\n <div class=\"carousel-caption\">\r\n <p>Roxie does not care. She demands pets all day, every day.</p>\r\n </div>'),
(3, 'Do you like snow?', ' <img src=\"img/roxie3.jpg\">\r\n <div class=\"carousel-caption\">\r\n <p>So does she!</p>\r\n </div>'),
(4, 'Family photo!', ' <img src=\"img/roxie4.jpg\">\r\n <div class=\"carousel-caption\">\r\n <p>One of a thousand!.</p>\r\n </div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab_slider`
--
ALTER TABLE `tab_slider`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
