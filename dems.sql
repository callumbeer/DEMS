-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 04, 2022 at 01:42 PM
-- Server version: 10.2.43-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dems`
--

-- --------------------------------------------------------

--
-- Table structure for table `case`
--

CREATE TABLE `case` (
  `case_no` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `case_type` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `createdBy` varchar(50) NOT NULL DEFAULT 'current_timestamp()'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case`
--

INSERT INTO `case` (`case_no`, `title`, `description`, `case_type`, `date_created`, `createdBy`) VALUES
(37, 'test case', '                                            	                                            	<p>case</p>                                                                                        ', 'Theft', '2022-05-13 00:00:00', '2'),
(38, 'test', '<p>test</p>', 'Theft', '2022-05-06 00:00:00', '2');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `vehicle_reg` varchar(255) NOT NULL,
  `case_no` int(11) NOT NULL,
  `file_hash` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file_name`, `file_type`, `vehicle_reg`, `case_no`, `file_hash`) VALUES
(69, '-37.sample-mp4-file-small.mp4', 'video', '', 37, '5c31d513e48b136a676e2f46e012785c'),
(71, '37-37-0.jpg', 'image', '', 37, '88312a98a41166a61f41966bd949637c'),
(72, '-38.sample-mp4-file-small.mp4', 'video', '', 38, '5c31d513e48b136a676e2f46e012785c'),
(73, '-38-0.jpg', 'image', '', 38, '7bd7f98935ff294e3c2df0a6828739a1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `account_type` varchar(255) NOT NULL DEFAULT 'normal',
  `created_on` datetime NOT NULL DEFAULT current_timestamp(),
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `surname`, `email`, `password`, `phone_number`, `account_type`, `created_on`, `last_login`) VALUES
(2, 'admin', 'aaa', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'admin', '2022-03-05 23:17:48', '0000-00-00 00:00:00'),
(4, 'DEF', 'Ru', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'd41d8cd98f00b204e9800998ecf8427e', '2022-03-07 23:30:30', '0000-00-00 00:00:00'),
(5, 'John', 'Smith', 'john@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '12345', 'normal', '2022-03-07 23:07:24', '0000-00-00 00:00:00'),
(6, 'KD', 'KD', 'KD@gmail.com', '25d55ad283aa400af464c76d713c07ad', '12345678', 'normal', '2022-03-08 17:52:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_reg` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `fuel_type` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `createdBy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_reg`, `title`, `description`, `fuel_type`, `year`, `createdBy`) VALUES
('Sportage', 'Sportage', '<p>Sportage desc</p>', 'diesel', 2021, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case`
--
ALTER TABLE `case`
  ADD PRIMARY KEY (`case_no`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case`
--
ALTER TABLE `case`
  MODIFY `case_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
