-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2022 at 06:50 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vms`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `vehicle_reg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `file_name`, `file_type`, `vehicle_reg`) VALUES
(1, 'default_icon.png', 'image', '0'),
(2, '-0-0.jpg', 'image', '0'),
(3, '-0-1.jpg', 'image', '0'),
(4, '-0-0.jpg', 'image', '0'),
(5, '-0-1.jpg', 'image', '0'),
(6, 'SSPDD-0-0.jpg', 'image', '0'),
(13, 'XXX-XXX-0.jpg', 'image', 'XXX'),
(14, 'XXX-XXX-1.jpg', 'image', 'XXX'),
(15, '', 'video', 'ZZZ'),
(17, 'ZZZ-ZZZ-0.jpg', 'image', 'ZZZ'),
(18, 'Sportage-Sportage.butterfly.mp4', 'video', 'Sportage'),
(19, 'Sportage-Sportage-0.jpg', 'image', 'Sportage'),
(20, 'Sportage-Sportage-1.jpg', 'image', 'Sportage');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `pass_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `phone_number` int(11) NOT NULL,
  `account_type` varchar(255) NOT NULL DEFAULT 'normal',
  `created_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`pass_number`, `first_name`, `surname`, `email`, `password`, `phone_number`, `account_type`, `created_on`, `last_login`) VALUES
('1', 'admin', 'aaa', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, 'admin', '2022-03-05 23:17:48', '0000-00-00 00:00:00'),
('DF122', 'DEF', 'Ru', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456, 'd41d8cd98f00b204e9800998ecf8427e', '2022-03-07 23:30:30', '0000-00-00 00:00:00'),
('J45', 'John', 'Smith', 'john@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 12345, 'normal', '2022-03-07 23:07:24', '0000-00-00 00:00:00'),
('KD13', 'KD', 'KD', 'KD@gmail.com', '25d55ad283aa400af464c76d713c07ad', 12345678, 'normal', '2022-03-08 17:52:53', '0000-00-00 00:00:00');

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
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`pass_number`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_reg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
