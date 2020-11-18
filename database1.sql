-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 02:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database1`
--

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `name`, `mobile`, `password`, `usertype`) VALUES
(1, 'p', 'kmsk', 5454, '5545', 'student'),
(2, 'admin', 'Prateek', 9450527484, 'admin', 'admin'),
(3, 'admin', 'admin', 9450527484, 'admin', 'student'),
(5, 'admin', 'admin', 6, 'admin', 'teacher'),
(6, 'prateek1', 'prateek', 914098, '12345', 'teacher'),
(7, 'pratee', 'prtaeek', 9140986356, '12345', 'teacher'),
(9, 'mayank', 'mayank', 9454151515156, '12345', 'student'),
(10, 'bhai', 'prateek', 9123456778, '1234', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
