-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2020 at 05:28 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_registration`
--

CREATE TABLE `doctor_registration` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `id_card_number` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `pmc_certificate_no` varchar(50) NOT NULL,
  `clinic_address_line1` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `time_from` varchar(10) NOT NULL,
  `time_to` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_registration`
--

INSERT INTO `doctor_registration` (`doctor_id`, `doctor_name`, `email`, `mobile`, `id_card_number`, `qualification`, `experience`, `specialization`, `pmc_certificate_no`, `clinic_address_line1`, `country`, `state`, `city`, `pincode`, `time_from`, `time_to`, `username`, `password`, `status`) VALUES
(1, 'rafeek', 'rafeek@gmail.com', 86521, '789654123', 'mbbs', '5', 'cardiology', '75463210', 'kollam', 'india', 'kerala', 'kollam', '123524', '3', '8', 'rafeek', 'rafeek', 'approved'),
(2, 'john', 'john@gmail.com', 987654321, 'YTS-987654', 'MBBS', '6', 'cardiology', '123456', 'tvm', 'india', 'kerala', 'sreekaryam', '987654', '4', '10', 'john', 'john', 'approved'),
(3, 'rosamma', 'rosamma@gmail.com', 9876543215, 'yts987654', 'MBBS MD', '10', 'oncology', '9745210', 'kozhikode', 'india', 'kerala', 'kozhikode', '987456', '10', '6', 'rosamma', 'rosamma', 'approved'),
(4, 'sabu siril', 'sabu@gmail.com', 9876543214, 'dsfgh', 'MBBS', '8', 'ophthalmology', 'wedv2345', 'kozhikode', 'india', 'state', 'kozhikode', '12345', '11', '7', 'sabu', 'sabu', 'approved'),
(5, 'sameera aj', 'sameera@gmail.com', 9874563210, 'qwedfg34', 'MBBS MD', '2', 'neurology', 'xscdfsgf3456', 'kannur', 'india', 'kerala', 'kannur', '123654', '10', '2', 'sameera', 'sameer', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE `patient_registration` (
  `patient_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `id_card_no` varchar(50) NOT NULL,
  `medical_history` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `apoint_date` date NOT NULL,
  `appoint_time` time NOT NULL,
  `appoint_doctor` varchar(50) NOT NULL,
  `appoint_status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`patient_id`, `first_name`, `last_name`, `gender`, `age`, `email`, `mobile`, `address`, `id_card_no`, `medical_history`, `username`, `password`, `apoint_date`, `appoint_time`, `appoint_doctor`, `appoint_status`) VALUES
(1, 'athulya', 's job', 'female', 22, 'athulya@gmail.com', 9774563215, 'kollam', 'xuz12345', 'fever', 'athulya', 'athulya', '0000-00-00', '00:00:00', '', 'pending'),
(2, 'jpv', 'chakki', 'male', 40, 'john@gmail.com', 9876543215, 'kochi', 'yts-123456', 'psychological disorder', 'jpv', 'jpv', '2020-01-10', '05:07:00', 'rafeek', 'Confirmed'),
(3, 'varghese', 'thomas', 'male', 60, 'varghese@gmail.com', 987654321, 'kollam', 'yts123354', 'heart issues', 'varghese', 'varghese', '2020-01-04', '23:00:00', 'sameera aj', 'Confirmed'),
(4, 'jesse', 'thomas', 'female', 35, 'jesse@gmail.com', 65478913, 'tvm', 'sdfvdbgtr', 'viral fever', 'jesse', 'jesse', '0000-00-00', '00:00:00', '', 'pending'),
(5, 'anu', 'kk', 'female', 20, 'anu@gmail.com', 9876543210, 'kottayam', 'asdfsgh', 'headache', 'anu', 'anu', '0000-00-00', '00:00:00', '', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_registration`
--
ALTER TABLE `doctor_registration`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id_card_number` (`id_card_number`),
  ADD UNIQUE KEY `pmc_certificate_no` (`pmc_certificate_no`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id_card_no` (`id_card_no`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor_registration`
--
ALTER TABLE `doctor_registration`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `patient_registration`
--
ALTER TABLE `patient_registration`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
