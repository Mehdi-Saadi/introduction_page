-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2023 at 08:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `introduction`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `location` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `instagram` text NOT NULL,
  `linkedin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `location`, `phone`, `email`, `instagram`, `linkedin`) VALUES
(1, 'Tehran, Iran', '+989339514886', 'mehdi.0.saadi@gmail.com', 'https://www.instagram.com/mehdi.saadi__/', 'https://www.linkedin.com/in/mehdi-saadi-926a57235/');

-- --------------------------------------------------------

--
-- Table structure for table `myname`
--

CREATE TABLE `myname` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myname`
--

INSERT INTO `myname` (`id`, `content`) VALUES
(1, 'Hi, my name is Mehdi and i live in qom. I\'m a student in Hamedan university.'),
(2, 'Hi , my name is Mehdi and i live in Qom. I really like to know more about web development and cyber security'),
(3, 'We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Table structure for table `myskills`
--

CREATE TABLE `myskills` (
  `id` int(11) NOT NULL,
  `php` int(11) NOT NULL,
  `laravel` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `css` int(11) NOT NULL,
  `bs` int(11) NOT NULL,
  `js` int(11) NOT NULL,
  `jquery` int(11) NOT NULL,
  `mysql` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myskills`
--

INSERT INTO `myskills` (`id`, `php`, `laravel`, `html`, `css`, `bs`, `js`, `jquery`, `mysql`) VALUES
(1, 80, 50, 70, 50, 40, 40, 30, 60);

-- --------------------------------------------------------

--
-- Table structure for table `pandc`
--

CREATE TABLE `pandc` (
  `id` int(11) NOT NULL,
  `projects` int(11) DEFAULT NULL,
  `clients` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pandc`
--

INSERT INTO `pandc` (`id`, `projects`, `clients`) VALUES
(1, 12, 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myname`
--
ALTER TABLE `myname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myskills`
--
ALTER TABLE `myskills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pandc`
--
ALTER TABLE `pandc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myname`
--
ALTER TABLE `myname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `myskills`
--
ALTER TABLE `myskills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pandc`
--
ALTER TABLE `pandc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
