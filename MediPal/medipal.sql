-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2016 at 03:30 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medipal`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(200) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gmc_no` int(200) NOT NULL,
  `trust_hospital` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `firstname`, `lastname`, `gmc_no`, `trust_hospital`, `email`, `mobile_no`, `passwd`, `created_at`, `modified_at`) VALUES
(1, 'rahul', 'mudgan', 852147, 'sims', 'shephali23gupta@gmail.com', 2147483647, '7c4a8d09ca3762af61e59520943dc26494f8941b', '2016-09-07 00:00:00', '0000-00-00 00:00:00'),
(2, 'vipul', 'raipur', 456321, 'sims', 'shephali2gupta@gmail.co', 2147483647, '7c4a8d09ca3762af61e59520943dc26494f8941b', '2016-09-07 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(200) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `address3` varchar(255) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `nhs_number` int(100) NOT NULL,
  `mobile_no` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `craeted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patient_id`, `firstname`, `lastname`, `dob`, `gender`, `address1`, `address2`, `address3`, `postcode`, `nhs_number`, `mobile_no`, `email`, `passwd`, `craeted_at`, `updated_at`) VALUES
(1, 'shephali', 'gupta', '0000-00-00', 'female', '', '', '', '', 0, 2147483647, 'shephali23gupta@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2016-09-06 00:00:00', '0000-00-00 00:00:00'),
(3, 'heena', 'chande', '0000-00-00', '', '', '', '', '', 0, 2147483647, 'heena@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2016-09-07 00:00:00', '0000-00-00 00:00:00'),
(4, 'vipul', 'raipur', '0000-00-00', '', '', '', '', '', 0, 2147483647, 'vipul@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2016-09-07 00:00:00', '0000-00-00 00:00:00'),
(5, 'rahul', 'idontknow', '0000-00-00', '', '', '', '', '', 0, 2147483647, 'rahul@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2016-09-07 00:00:00', '0000-00-00 00:00:00'),
(6, 'piyush', 'moon', '0000-00-00', '', '', '', '', '', 0, 2147483647, 'piyush@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2016-09-07 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
