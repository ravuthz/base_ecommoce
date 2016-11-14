-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2016 at 06:39 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advance_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(110) NOT NULL,
  `password` varchar(220) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `fname`, `lname`, `email`, `status`, `date`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Sarawut', 'Inree', 'test@test.com', 'ADMIN', '2016-09-20'),
(2, 'test', '81dc9bdb52d04dc20036dbd8313ed055', 'test', 'test', 'test@test', 'USER', '2016-09-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
