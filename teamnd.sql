-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2019 at 04:59 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teamnd`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `fruit_id` int(11) NOT NULL,
  `fruit_code` varchar(20) NOT NULL,
  `fruit_name` varchar(50) NOT NULL,
  `fruit_country` varchar(50) NOT NULL,
  `fruit_status` int(11) NOT NULL,
  `fruit_category` varchar(50) NOT NULL,
  `fruit_cost` int(11) NOT NULL,
  `fruit_sale` int(11) NOT NULL,
  `fruit_describe` text NOT NULL,
  `fruit_image` text NOT NULL,
  `fruit_date` year(4) NOT NULL,
  `fruit_expiryDate` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruit`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `admin`) VALUES
(1, 'admin', 'admin', 'Cuong', 'nguyencuong@gmail.com', '0987654321', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`fruit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`username`,`email`,`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `fruit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
