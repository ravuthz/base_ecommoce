-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 01:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graduateproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(6) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Electronic', 'It is phone make by something like that '),
(2, 'fashion', 'T-shirt made in china');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `telephone` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `detail` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`telephone`, `email`, `detail`) VALUES
('+66994377365', '56018phd@gmail.com', 'i ahve some '),
('+66994377365', '56018phd@gmail.com', 'I love someone that i cannot tell her i have falled in love w her since i was ITC');

-- --------------------------------------------------------

--
-- Table structure for table `memberrigester`
--

CREATE TABLE `memberrigester` (
  `ID` int(7) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `genda` varchar(10) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `poststation` varchar(30) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `password2` varchar(220) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `memberrigester`
--

INSERT INTO `memberrigester` (`ID`, `Name`, `genda`, `Address`, `Email`, `telephone`, `city`, `district`, `poststation`, `Username`, `password2`, `status`) VALUES
(123, 'jero', 'Male', 'Mahasarakham', 'dara@', '11111', 'Bangkok', 'kc', '44150', 'jjj', '202cb962ac59075b964b07152d234b70', '0'),
(124, 'Jeroom Phon', '', 'Mahasarakham University', '56018phd@gmail.com', '+66994377365', 'Bangkok', '', '44150', 'dara', '202cb962ac59075b964b07152d234b70', '1'),
(125, 'ggg', 'Male', 'Mahasarakham University', '56018phd@gmail.com', '+66994377365', 'Bangkok', '', '44150', 'sokha', '202cb962ac59075b964b07152d234b70', '0'),
(126, 'dara', 'Male', 'Mahasarakham University', '56018phd@gmail.com', '+66994377365', 'Bangkok', '', '44150', 'meng', '202cb962ac59075b964b07152d234b70', '0'),
(127, 'tyty', 'Male', 'Mahasarakham University', '56018phd@gmail.com', '+66994377365', 'Bangkok', '', '44150', 'ty', '202cb962ac59075b964b07152d234b70', '0'),
(128, 'Mew', 'Male', 'Mahasarakham University', '56018phd@gmail.com', '+66994377365', 'Bangkok', 'kantarak', '44150', 'try', '202cb962ac59075b964b07152d234b70', '0'),
(130, 'Dara phon', 'Male', 'dfvadffs', 'fgbsfgbfs', '12345', 'vnsgnsfgnsf', 'fgbsfgbfs', '12344', 'rara', '202cb962ac59075b964b07152d234b70', ''),
(131, 'sokha', 'Male', 'dfvadfva', 'adfvbadfbv', '23443t', 'sfgbfs', 'sbfgsfgb', '12342', 'gyt', '202cb962ac59075b964b07152d234b70', '0'),
(132, 'Dara phon', 'Male', 'dfvdsfbvsgbs', 'fbgsgbsfgbfs', '54646353', 'gfbsgbs', 'fgnsgfns', '24353', 'dar', '202cb962ac59075b964b07152d234b70', '0'),
(133, 'Jeroom Phon', 'Male', 'sfgsgbs', 'sfgbsgbs', '12342', 'fgbsgbs', 'gnbsgfns', '12342', 'far', '202cb962ac59075b964b07152d234b70', '0'),
(134, 'ff4', 'Male', 'dafbdafbs', 'gbsfgbfs', '343', 'fgsfgbsf', 'fgbsgb', '12342', 'guy', '202cb962ac59075b964b07152d234b70', '0'),
(135, 'dydy', 'Male', 'dfadfba', 'adfbad', '123345', 'fgbsfgb', 'sfbsgb', '12342', 'rena', '202cb962ac59075b964b07152d234b70', '2'),
(136, 'sophat', 'Male', 'dfadfav', 'dfvadfv', '1245467', 'sfbgbsb', 'fgbsfgb', '13457', 'sophat', '202cb962ac59075b964b07152d234b70', '2'),
(137, 'sophat', 'Male', 'dfadfav', 'dfvadfv', '1245467', 'sfbgbsb', 'fgbsfgb', '13457', 'reno', '202cb962ac59075b964b07152d234b70', '2'),
(138, 'sophat', 'Male', 'dfadfav', 'dfvadfv', '1245467', 'sfbgbsb', 'fgbsfgb', '13457', 'reno', '81dc9bdb52d04dc20036dbd8313ed055', '2'),
(139, 'bunleng', 'Male', 'daddafva', 'dfvadfva', '1345', 'adfbvsb', 'adfbadfb', '4567', 'fera', '202cb962ac59075b964b07152d234b70', '0'),
(140, 'vandeth', 'Male', 'dfgadsffgs', 'fsgfs', '345', 'fgfsg', 'gfsgsg', '1234', 'van', '202cb962ac59075b964b07152d234b70', '2'),
(141, 'reno', 'Male', 'gsfgsbfgb', 'fgfsgbfsfgbs', '12345', 'gfsgbsf', 'gfdgbdfg', '1245', 'phon', '202cb962ac59075b964b07152d234b70', '0');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `or_id` int(11) NOT NULL,
  `total` int(6) NOT NULL,
  `date` datetime NOT NULL,
  `mem_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`or_id`, `total`, `date`, `mem_id`) VALUES
(1, 1222, '2016-10-31 09:57:28', 0),
(2, 44330, '2016-10-31 10:26:11', 0),
(3, 0, '2016-10-31 10:44:42', 0),
(26, 25222, '2016-10-31 22:27:01', 0),
(27, 1200, '2016-11-01 16:13:52', 0),
(28, 0, '2016-11-02 13:02:19', 124),
(29, 5555, '2016-11-02 13:03:29', 124),
(30, 0, '2016-11-02 13:04:31', 124),
(31, 5555, '2016-11-02 13:06:04', 124),
(32, 7222, '2016-11-02 13:07:52', 124),
(33, 1200, '2016-11-02 13:13:39', 124),
(34, 5555, '2016-11-02 13:14:15', 124),
(35, 16000, '2016-11-02 13:15:16', 124),
(115, 79750, '2016-11-02 13:53:53', 0),
(116, 79750, '2016-11-02 13:53:54', 0),
(117, 79750, '2016-11-02 13:53:54', 0),
(118, 79750, '2016-11-02 13:54:31', 0),
(119, 79750, '2016-11-02 13:54:32', 0),
(135, 88300, '2016-11-02 14:30:44', 126),
(136, 88300, '2016-11-02 14:31:52', 126),
(137, 1200, '2016-11-02 14:49:15', 126),
(138, 1200, '2016-11-02 14:49:16', 126),
(139, 1200, '2016-11-02 14:49:17', 126),
(140, 1200, '2016-11-02 14:49:17', 126),
(141, 1200, '2016-11-02 14:49:18', 126),
(142, 1200, '2016-11-02 14:50:02', 126),
(143, 1200, '2016-11-02 14:50:03', 126),
(144, 20377, '2016-11-02 14:51:20', 126),
(145, 20377, '2016-11-02 14:52:14', 126),
(146, 20377, '2016-11-02 14:52:18', 126),
(147, 20377, '2016-11-02 14:52:19', 126),
(148, 20377, '2016-11-02 15:01:21', 126),
(149, 20377, '2016-11-02 15:01:24', 126),
(150, 20377, '2016-11-02 15:01:25', 126),
(151, 20377, '2016-11-02 15:01:25', 126),
(152, 1200, '2016-11-02 15:02:01', 126),
(153, 1200, '2016-11-02 15:08:53', 126),
(154, 13600, '2016-11-02 15:11:48', 126),
(155, 1222, '2016-11-02 15:16:23', 126),
(156, 1222, '2016-11-02 15:23:47', 126),
(157, 14822, '2016-11-02 15:31:38', 126),
(158, 1222, '2016-11-02 16:04:42', 126),
(159, 1200, '2016-11-02 16:52:54', 126),
(160, 1222, '2016-11-02 16:57:37', 126),
(161, 11555, '2016-11-03 22:28:33', 124),
(162, 16022, '2016-11-08 05:57:58', 126),
(163, 1222, '2016-11-08 07:29:08', 136),
(164, 13600, '2016-11-08 07:33:44', 136);

-- --------------------------------------------------------

--
-- Table structure for table `ord_item`
--

CREATE TABLE `ord_item` (
  `oid` int(7) NOT NULL,
  `p_id` int(7) NOT NULL,
  `item` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ord_item`
--

INSERT INTO `ord_item` (`oid`, `p_id`, `item`) VALUES
(0, 2, 1),
(0, 37, 1),
(156, 3, 1),
(157, 3, 1),
(157, 37, 1),
(158, 3, 1),
(159, 2, 1),
(160, 3, 1),
(161, 12, 1),
(161, 38, 1),
(162, 2, 1),
(162, 3, 1),
(162, 37, 1),
(163, 3, 1),
(164, 37, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(17) NOT NULL,
  `pur_name` varchar(50) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `amount` int(9) NOT NULL,
  `detail` varchar(400) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_acc_name` varchar(13) NOT NULL,
  `bank_acc_number` int(12) NOT NULL,
  `pur_id` int(7) NOT NULL,
  `date_pay` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `pur_name`, `phone`, `amount`, `detail`, `picture`, `bank_name`, `bank_acc_name`, `bank_acc_number`, `pur_id`, `date_pay`) VALUES
(1, 'dadda', '1234', 132434, 'daradadfafvadfb', 'dara.jpg', 'fbadfva', '0', 13324, 0, '0000-00-00 00:00:00'),
(2, 'Jeroom Phon', '994377365', 300, 'dara pay', 'images.jpg', 'tmb', '0', 0, 0, '0000-00-00 00:00:00'),
(3, 'Jeroom Phon', '994377365', 232, 'fdafbva', '14242277_1016476908451617_3474597569913164334_o.jpg', 'adfav', '0', 0, 0, '0000-00-00 00:00:00'),
(4, 'Jeroom Phon', '994377365', 1234, 'daead', '14191562_174152799659574_1690859034_o.jpg', 'dada', '0', 0, 124, '0000-00-00 00:00:00'),
(5, 'Jeroom Phon', '994377365', 1234, 'daead', '14191562_174152799659574_1690859034_o.jpg', 'dada', '0', 0, 124, '0000-00-00 00:00:00'),
(6, 'Jeroom Phon', '994377365', 2323, 'dfvadf', '131214_yarnold_baldeagle_ap.jpg', 'dfvafv', '0', 0, 124, '0000-00-00 00:00:00'),
(7, 'dafa', '122323', 12324, 'gagfba', '14242277_1016476911784950_6475987482943731555_o.jpg', 'agf', '0', 0, 124, '2016-11-06 12:16:39'),
(8, 'dara', '09934243', 200, '34354', '14242277_1016476911784950_6475987482943731555_o.jpg', 'agafg', '0', 0, 124, '2016-11-06 12:20:09'),
(9, 'huhub', '908797', 2345, 'fadaf', '14202524_893069484130996_1911695902507038920_n.jpg', 'daaf', 'dadf', 0, 124, '2016-11-06 12:22:43'),
(10, 'dfgafg', '124', 232, 'dfgadfg', '14287670_492772044265552_1133871005_n.png', 'dfadfadfga', 'gadfgafgadfg', 0, 124, '2016-11-06 12:28:34'),
(11, 'dfgafg', '124', 232, 'dfgadfg', '14287670_492772044265552_1133871005_n.png', 'dfadfadfga', 'gadfgafgadfg', 0, 124, '2016-11-06 12:44:02'),
(12, 'dfgafg', '124', 232, 'dfgadfg', '14287670_492772044265552_1133871005_n.png', 'dfadfadfga', 'gadfgafgadfg', 0, 124, '2016-11-06 12:46:00'),
(13, 'dfgafg', '124', 232, 'dfgadfg', '14287670_492772044265552_1133871005_n.png', 'dfadfadfga', 'gadfgafgadfg', 0, 124, '2016-11-06 12:57:15'),
(14, 'dfgafg', '124', 232, 'dfgadfg', '14287670_492772044265552_1133871005_n.png', 'dfadfadfga', 'gadfgafgadfg', 0, 124, '2016-11-06 12:58:33'),
(15, 'dfgafg', '124', 232, 'dfgadfg', '14287670_492772044265552_1133871005_n.png', 'dfadfadfga', 'gadfgafgadfg', 0, 124, '2016-11-06 01:00:28'),
(16, 'dara', '0978987034', 9090, 'dfafava', '14379791_1016486765117298_6435375272583051911_o.jpg', 'dfvafv', 'dfadfavdfvadf', 13234354, 126, '2016-11-06 10:38:28'),
(17, 'dara', '0978987034', 9090, 'dfafava', '14379791_1016486765117298_6435375272583051911_o.jpg', 'dfvafv', 'dfadfavdfvadf', 13234354, 126, '2016-11-06 10:42:28'),
(18, 'dara', '0978987034', 9090, 'dfafava', '14379791_1016486765117298_6435375272583051911_o.jpg', 'dfvafv', 'dfadfavdfvadf', 13234354, 126, '2016-11-06 10:43:07'),
(19, 'sokha', '0789656434', 300, 'dfaddfvadfva', 'images (2).jpg', 'sokha', 'dafgab', 32142424, 125, '2016-11-07 11:53:08');

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE `pic` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `b_price` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `seller_tel` int(12) NOT NULL,
  `m_id` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`id`, `name`, `text`, `b_name`, `b_price`, `city`, `seller_tel`, `m_id`) VALUES
(2, 'kap.jpg', 'takeo', 'phanna', 1200, '', 0, 124),
(3, 'r1.JPG', 'fff', 'pol', 1222, 'kp', 2147483647, 125),
(37, 'Sony-Xperia-ZX-concept.jpg', 'water proof and camera 20.7 mp', 'sony z4', 13600, 'Bangkok', 2147483647, 126),
(9, '14457557_10154989502611840_5491474922460690049_n.jpg', 'mamamama', 'naro', 1213, 'msu', 12121212, 128),
(11, 'Grain-Bean-Rice-Packing-Machine.jpg', 'dara', 'jj', 5555, 'กันทรวิชัย/ Kantharawichai', 2147483647, 125),
(12, 'Grain-Bean-Rice-Packing-Machine.jpg', 'dara', 'jj', 5555, 'กันทรวิชัย/ Kantharawichai', 2147483647, 126),
(35, 'Huawei-iPhone-6s.jpg', 'It made in China \r\nhigh quality', 'hauwai', 12000, 'mahasarakham', 98098709, 124),
(36, 'images (1).jpg', 'huhu', 'Iphone 6', 16000, 'Bangkok', 2147483647, 124),
(28, 'Copy-of-car(1).jpg', 'Mahasarakham University', 'vans 169 pro', 44150, 'Bangkok', 2147483647, 125),
(29, 'Copy-of-car(1).jpg', 'Mahasarakham University', 'vans 169 pro', 44150, 'Bangkok', 2147483647, 125),
(38, 'ffff.jpg', 'its make in chinese but high quality ', 'Samsung smart watch', 6000, 'mahasarakham', 896978434, 125),
(34, 'eee.jpg', 'there are many product', 'Iphone', 44150, 'Bangkok', 2147483647, 124);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `sell_id` int(7) NOT NULL,
  `shop_name` varchar(50) NOT NULL,
  `Identify_card` int(15) NOT NULL,
  `Warehouse_adr` varchar(300) NOT NULL,
  `city_province` varchar(50) NOT NULL,
  `postal_code` int(6) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `bank_acc_name` varchar(50) NOT NULL,
  `bank_acc_num` int(11) NOT NULL,
  `seller_id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`sell_id`, `shop_name`, `Identify_card`, `Warehouse_adr`, `city_province`, `postal_code`, `bank_name`, `bank_acc_name`, `bank_acc_num`, `seller_id`) VALUES
(1, '0', 12345, '0', '0', 44150, '4', '0', 1324, 124),
(2, '0', 12345, '0', '0', 44150, '4', '0', 1324, 124),
(3, '0', 12345, '0', '0', 44150, '4', '0', 1324, 124),
(9, '0', 12345, '0', '0', 0, '1', '0', 0, 124),
(10, '0', 12345, '0', '0', 13456, '1', '0', 456735, 126),
(11, '0', 0, '0', '0', 0, '1', '0', 0, 126),
(12, '0', 134657, '0', '0', 123657, '1', '0', 12345, 126),
(13, 'Sokha', 12345, 'stay d*fak', '0', 44150, '5', 'Mr. Phon Dara', 1234876895, 126),
(14, 'dfafabvadfba', 4536, 'dada', '  dfafda', 2456, '5', 'DARA PHOM', 25673688, 126),
(15, 'Sokha', 12345, 'stay d*fak', '  dfafa', 44150, '5', 'Mr. Phon Dara', 1234876895, 126);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE `tbl_seller` (
  `seller_id` int(7) NOT NULL,
  `sale_id` int(7) NOT NULL,
  `Name` int(50) NOT NULL,
  `username` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `memberrigester`
--
ALTER TABLE `memberrigester`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `ord_item`
--
ALTER TABLE `ord_item`
  ADD PRIMARY KEY (`oid`,`p_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pic`
--
ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`sell_id`);

--
-- Indexes for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `memberrigester`
--
ALTER TABLE `memberrigester`
  MODIFY `ID` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pic`
--
ALTER TABLE `pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `sell_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  MODIFY `seller_id` int(7) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
