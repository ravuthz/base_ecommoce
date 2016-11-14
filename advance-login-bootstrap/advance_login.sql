-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 22, 2016 at 04:50 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(110) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `u_id`) VALUES
(1, 'รองเท้ายางพารา', 1),
(2, 'กระเป๋าหนังกระทิง', 2),
(3, 'กระเป๋าสะพายหลัง', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
