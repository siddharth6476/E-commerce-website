-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2022 at 05:24 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pullo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `username`, `password`) VALUES
(1, 'siddharth', '1111'),
(2, 'kartvya', '4455');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `id` int(10) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `price` int(20) NOT NULL,
  `company` varchar(30) NOT NULL,
  `quantity` int(100) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`id`, `product_name`, `price`, `company`, `quantity`, `photo`) VALUES
(41, 'shoes', 1999, 'adidas', 20, 'upload/6694733972.webp'),
(42, 'shoes', 1999, 'Asian ', 20, 'upload/8677466933.webp'),
(43, 'shoes', 2599, 'Asian ', 15, 'upload/678780584.webp'),
(44, 'shoes', 5999, 'puma', 100, 'upload/61hvSySiwqL._AC_UL480_FMwebp_QL65_.webp'),
(45, 'shoes ', 2999, 'puma', 200, 'upload/51itV-6iDmL._AC_UL480_FMwebp_QL65_.webp'),
(46, 'shoes', 1599, 'us polo', 80, 'upload/40489374051Y51Rt5ShL._AC_UL480_FMwebp_QL65_.webp'),
(49, 'shoes', 999, 'bata', 200, 'upload/71LmbTEeL-L._AC_UL480_FMwebp_QL65_ - Copy.jpg'),
(50, 'shoes', 1999, 'bata', 100, 'upload/71Vd2to+cJL._AC_UL480_FMwebp_QL65_.jpg'),
(51, 'shoes', 1999, 'bata', 100, 'upload/713emQ83U7L._AC_UL480_FMwebp_QL65_.jpg'),
(52, 'loafer ', 2399, 'El paso', 80, 'upload/61ZR-UH3JdL._AC_UL480_FMwebp_QL65_.webp'),
(53, 'loafer ', 1999, 'Gucci ', 30, 'upload/71gTGje1dpS._AC_UL480_FMwebp_QL65_.webp'),
(54, 'loafer ', 2999, 'lee cooper', 40, 'upload/719lbjSpQrL._AC_UL480_FMwebp_QL65_.webp'),
(55, 'shoes', 4999, 'woodland', 10, 'upload/0.webp'),
(56, 'shoes', 6999, 'woodland ', 15, 'upload/818ZbfaXqUL._AC_UL480_FMwebp_QL65_.webp'),
(57, 'shoes', 5999, 'woodland ', 12, 'upload/817etURninL._AC_UL480_FMwebp_QL65_.webp'),
(58, 'shoes', 6999, 'puma', 5, 'upload/61B-YZ4Z+WL._AC_UL480_FMwebp_QL65_.webp'),
(59, 'shoes', 7999, 'puma', 2, 'upload/71s0+Hg5aXL._AC_UL480_FMwebp_QL65_.webp'),
(60, 'shoes', 9999, 'puma', 1, 'upload/51ySn3xnTcL._AC_UL480_FMwebp_QL65_.webp'),
(61, 'shoes', 15999, 'nike air', 0, 'upload/nike-air-jordan-1-unc-patent-leather-release-date-price-03.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` text NOT NULL,
  `password` varchar(8) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `email`, `phonenumber`, `password`, `city`) VALUES
(1, 'siddharth', 's@gmail.com', '9081103494', '1111', 'Rajkot'),
(2, 'kartvya', 'k@gmail.com', '6589658964', '6655', 'Rajkot'),
(3, 'sahil', 's@gmail.com', '9574523494', '5874', 'Rajkot'),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, 'vikas', 'v@gmail.com', '6589658964', '4455', 'Rajkot'),
(7, 'ajay', 'a@gmail.com', '12457978548', '9865', 'dhidara'),
(8, 'ravi', 'r@gmail.com', '8965741236', '4488', 'Rajkot'),
(9, 'mehul', 'm@gmail.com', '9574523494', '6655', 'virpur'),
(10, '', '', '9574523494', '6655', 'virpur'),
(11, 'vipul', 'v@gmail.com', '9574523494', '7247', 'virpur'),
(12, 'meet', 'm@rku.ac.in', '999819129', '1129', 'surat'),
(13, 'savan', 's@rku.ac.in', '9998113529', '13529', 'bhandariya'),
(14, 'jigar', 'j@rku.ac.in', '4567885214', '11111', 'rajkot'),
(15, 'kartvya', 's@gmail.com', '', '', ''),
(16, 'kartvya', 's@gmail.com', '', '4455', ''),
(17, 'parth', 'P@rku.ac.in', '9081103494', '1212', 'bhadla'),
(18, 'mohit', 'm@rku.ac.in', '8595874578', 'm12345', 'bhandariya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
