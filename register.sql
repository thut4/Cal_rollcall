-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2020 at 04:49 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `calculate`
--

CREATE TABLE `calculate` (
  `cal_id` int(11) NOT NULL,
  `percent` varchar(255) DEFAULT NULL,
  `percent_result` varchar(255) NOT NULL,
  `day` varchar(255) DEFAULT NULL,
  `day_result` varchar(30) NOT NULL,
  `absent` varchar(30) NOT NULL,
  `absent_result` varchar(30) NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calculate`
--

INSERT INTO `calculate` (`cal_id`, `percent`, `percent_result`, `day`, `day_result`, `absent`, `absent_result`, `time`) VALUES
(1, '100', '0', '', '', '', '', '2020-08-01'),
(2, '90', '2', '', '', '', '', '2020-08-01'),
(7, '56', '9', '', '', '', '', '2020-08-01'),
(8, '56', '9', '', '', '', '', '2020-08-01'),
(9, '12', '19days', '', '', '', '', '2020-08-01'),
(10, '12', '19days', '', '', '', '', '2020-08-01'),
(11, '100', '0 days', '', '', '', '', '2020-08-02'),
(12, '95', '1 days', '', '', '', '', '2020-08-02'),
(15, '100', '0 days', '', '', '', '', '2020-08-02'),
(16, '', '', '10', '45%', '', '', '2020-08-02'),
(19, '', '', '', '', '9', '5', '2020-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `year` varchar(25) NOT NULL,
  `major` varchar(15) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `year`, `major`, `rollno`, `name`, `email`, `dob`, `gender`, `address`, `phone`, `password`) VALUES
(1, 'One', 'CST', 1, 'Mya Mya', 'myamya@gmail.com', '2004-01-01', 'Female', 'Magway', '09972532188', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Three', 'CS', 1, 'Ma Hnin See', 'mahninsee@gmail.com', '2020-01-27', 'Female', 'Min Bu', '09972532188', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

CREATE TABLE `relation` (
  `rid` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `cal_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calculate`
--
ALTER TABLE `calculate`
  ADD PRIMARY KEY (`cal_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relation`
--
ALTER TABLE `relation`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `id` (`id`),
  ADD KEY `cal_id` (`cal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calculate`
--
ALTER TABLE `calculate`
  MODIFY `cal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `relation`
--
ALTER TABLE `relation`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `relation`
--
ALTER TABLE `relation`
  ADD CONSTRAINT `relation_ibfk_1` FOREIGN KEY (`id`) REFERENCES `register` (`id`),
  ADD CONSTRAINT `relation_ibfk_2` FOREIGN KEY (`cal_id`) REFERENCES `calculate` (`cal_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
