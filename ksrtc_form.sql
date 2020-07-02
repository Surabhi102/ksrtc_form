-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 07:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ksrtc_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `crew_info`
--

CREATE TABLE `crew_info` (
  `id` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `PF_no` varchar(25) NOT NULL,
  `Badge_no` varchar(25) NOT NULL,
  `Bus_no` varchar(25) NOT NULL,
  `Route_no` int(25) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `stautus` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crew_info`
--

INSERT INTO `crew_info` (`id`, `Name`, `PF_no`, `Badge_no`, `Bus_no`, `Route_no`, `date_time`, `stautus`) VALUES
(1, 'shfw', '1234', '1234', '1234', 1234, '2020-06-25 15:50:29', 1),
(4, 'shfw', '1234', '1234', '123', 124, '2020-06-25 16:31:01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `passenger_info`
--

CREATE TABLE `passenger_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `bus_no` varchar(25) NOT NULL,
  `route_no` varchar(25) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger_info`
--

INSERT INTO `passenger_info` (`id`, `name`, `phone`, `bus_no`, `route_no`, `date_time`) VALUES
(1, 'shfw', 1234567890, '123', '124', '2020-06-26 04:16:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crew_info`
--
ALTER TABLE `crew_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger_info`
--
ALTER TABLE `passenger_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crew_info`
--
ALTER TABLE `crew_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `passenger_info`
--
ALTER TABLE `passenger_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
