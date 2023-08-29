-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 07:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbalumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `education` varchar(500) NOT NULL,
  `pskills` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `fullname`, `education`, `pskills`) VALUES
(1, 'VINCENT', 'BSIT', 'NONE'),
(2, 'VINCENT', 'BSIT', 'NONE'),
(3, 'VINCENT', 'BSIT', 'NONE'),
(4, 'VINCENT', 'BSIT', 'NONE'),
(5, 'james', 'BSIT', 'NONE'),
(6, 'VINCENT', 'BSIT', 'teaching'),
(7, 'VINCENT', 'BSIT', 'teaching'),
(8, 'VINCENT', 'BSIT', 'teaching'),
(9, 'VINCENT', 'BSIT', 'teaching'),
(10, 'VINCENT', 'BSIT', 'teaching'),
(11, 'mahaliah', 'BSIT', 'NONE'),
(12, 'VINCENT', 'BSIT', 'teaching'),
(13, 'VINCENT', 'BSIT', 'NONE');

-- --------------------------------------------------------

--
-- Table structure for table `employed_data`
--

CREATE TABLE `employed_data` (
  `employed_data_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `employment_status` varchar(10) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `qualifications` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `skills` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `generalinfo`
--

CREATE TABLE `generalinfo` (
  `general_info_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `permanent_address` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `telephone_number` varchar(11) NOT NULL,
  `civil_status` varchar(30) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `date_of_birth` date NOT NULL,
  `religion` varchar(50) NOT NULL,
  `region` varchar(10) NOT NULL,
  `province` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `generalinfo`
--

INSERT INTO `generalinfo` (`general_info_id`, `fullname`, `permanent_address`, `email_address`, `telephone_number`, `civil_status`, `sex`, `date_of_birth`, `religion`, `region`, `province`) VALUES
(15, 'mahaliah', 'sankanan', 'SENPAIYUKI43@GMAIL.COM', '9486106902', 'Single', 'Male', '2023-06-27', 'Iglesia Ni Cristo', 'Region 10', 'BUKIDNON'),
(16, 'VINCENT', 'MANOLO', 'SENPAIYUKI43@GMAIL.COM', '9486106902', 'Married', 'Male', '2023-06-28', 'Iglesia Ni Cristo', 'Region 3', 'BUKIDNON'),
(17, 'VINCENT', 'MANOLO', 'SENPAIYUKI43@GMAIL.COM', '9486106902', 'Separeted', 'Male', '2023-07-26', 'Iglesia Ni Cristo', 'Region 10', 'BUKIDNON'),
(18, '', '', '', '', '', '', '0000-00-00', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `selfemployed`
--

CREATE TABLE `selfemployed` (
  `self_employed_data_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `business` varchar(255) NOT NULL,
  `related` varchar(255) NOT NULL,
  `reasons` varchar(255) NOT NULL,
  `noofemployee` varchar(10) NOT NULL,
  `skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `unemployed`
--

CREATE TABLE `unemployed` (
  `unemployed_data_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `seek` varchar(10) NOT NULL,
  `doing` varchar(255) NOT NULL,
  `finance` varchar(100) NOT NULL,
  `desire` varchar(10) NOT NULL,
  `consider` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `fullname`, `username`, `password`) VALUES
(1, 'Gerwin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `employed_data`
--
ALTER TABLE `employed_data`
  ADD PRIMARY KEY (`employed_data_id`);

--
-- Indexes for table `generalinfo`
--
ALTER TABLE `generalinfo`
  ADD PRIMARY KEY (`general_info_id`);

--
-- Indexes for table `selfemployed`
--
ALTER TABLE `selfemployed`
  ADD PRIMARY KEY (`self_employed_data_id`);

--
-- Indexes for table `unemployed`
--
ALTER TABLE `unemployed`
  ADD PRIMARY KEY (`unemployed_data_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employed_data`
--
ALTER TABLE `employed_data`
  MODIFY `employed_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generalinfo`
--
ALTER TABLE `generalinfo`
  MODIFY `general_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `selfemployed`
--
ALTER TABLE `selfemployed`
  MODIFY `self_employed_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unemployed`
--
ALTER TABLE `unemployed`
  MODIFY `unemployed_data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
