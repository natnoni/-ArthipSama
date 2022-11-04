-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 09:18 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steam_sama`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_send` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`email`, `firstname`, `lastname`, `detail`, `date_send`) VALUES
('asda', 'sdas', 'dasdas', 'dasdasd', '2022-11-04'),
('test1@gmail.com', 'arthip', 'ssss', 'Test หน่อยครับ', '2022-11-03'),
('test', 'test', 'test', 'กรอกด้วยนะจ๊ะ', '2022-11-03'),
('arthipsrain@gmail.com', 'อธิป', 'สระอินทร์', 'สวัสดีครับคุณเพจอิอิ', '2022-11-03'),
('test@gmail.com', 'ไอซ์', 'วิ่งหนี', 'เพื่อนถามกินหมูทะไหม', '2022-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `no` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(16) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product_qty` int(10) NOT NULL COMMENT 'qty'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`no`, `product_name`, `product_price`, `product_img`, `product_qty`) VALUES
(1, 'Steam Wallet [ 50 Baht ]', 55, '1.png', 10),
(2, 'Steam Wallet [ 350 Baht ]\r\n', 358, '2.png', 5),
(3, 'GTA V', 300, '3.png', 0),
(4, 'Dead by Daylight', 279, '4.png', 3),
(5, 'Scum', 195, '5.png', 0),
(6, 'Planet Zoo', 469, '6.jpg', 20),
(7, 'Resident Evil 2', 560, '7.jpg', 0),
(8, 'Windscribe', 50, '8.png', 20);

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_joined` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `date_joined`) VALUES
(15, 'testuser', 'testuser', '1', 'Test', 'User', '2017-05-28'),
(16, 'johndoe', 'johndoe', '403281', 'testProple1', 'SraIOPPd1', '2017-05-28'),
(17, 'harryden', 'harry', '12345', 'Harry', 'Den', '2018-12-24'),
(18, 'arthipsama', '12345', 'arthipsrain@gmail.com', 'นายอธิป', 'สระอินทร์', '2022-11-02'),
(19, 'arthipsama1', '12345', 'test1@gmail.com', 'อธิป', 'สระอินทร์', '2022-11-02'),
(20, 'johndoe1', '12345', 'bangmos35@gmail.com', 'johndoe', 'johndoeieiei', '2022-11-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`detail`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
