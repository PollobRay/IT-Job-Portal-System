-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 07:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itjobportalsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Ray', 'pollob@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `applyjob`
--

CREATE TABLE `applyjob` (
  `applied_job_serial_no` int(10) NOT NULL,
  `job_serial_no` int(10) NOT NULL,
  `company_email` varchar(25) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applyjob`
--

INSERT INTO `applyjob` (`applied_job_serial_no`, `job_serial_no`, `company_email`, `user_email`, `status`) VALUES
(21, 14, 'google@gmail.com', 'pollob@gmail.com', 'selected');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `serial_no` int(6) NOT NULL,
  `email` varchar(20) NOT NULL,
  `com_name` varchar(20) NOT NULL,
  `ceo` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cnumber` varchar(15) NOT NULL,
  `loc` varchar(30) NOT NULL,
  `edate` varchar(12) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pennding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`serial_no`, `email`, `com_name`, `ceo`, `password`, `cnumber`, `loc`, `edate`, `status`) VALUES
(5, 'google@gmail.com', 'Google', 'Sundar Pichai', '123456', '01788888888', 'USA', '2010-10-15', 'approved'),
(6, 'microsoft@gmail.com', 'Microsoft', 'satya nadela', '123456', '01725654789', 'USA', '2002-02-15', 'pennding');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_serial` int(6) NOT NULL,
  `com_email` varchar(30) NOT NULL,
  `company` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `experience` int(3) NOT NULL,
  `expert` varchar(15) NOT NULL,
  `degree` int(3) NOT NULL,
  `vacancy` int(10) NOT NULL,
  `salary` int(20) NOT NULL,
  `ddate` date DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pennding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_serial`, `com_email`, `company`, `title`, `description`, `experience`, `expert`, `degree`, `vacancy`, `salary`, `ddate`, `status`) VALUES
(14, 'google@gmail.com', 'Google', 'Need C++ Developer', 'Need some C++ Expert', 0, '0100000000', 3, 5, 100, '2023-03-17', 'approved'),
(15, 'google@gmail.com', 'Google', 'Need Java Developer', 'Need Some Java Expert', 0, '1110000000', 3, 10, 200, '2023-03-10', 'pennding');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `serial_no` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fatname` varchar(30) NOT NULL,
  `matname` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `ssc_school` varchar(50) NOT NULL,
  `ssc_group` varchar(15) NOT NULL,
  `ssc_year` varchar(6) NOT NULL,
  `ssc_board` varchar(20) NOT NULL,
  `ssc_gpa` varchar(10) NOT NULL,
  `hsc_college` varchar(50) NOT NULL,
  `hsc_group` varchar(15) NOT NULL,
  `hsc_year` varchar(6) NOT NULL,
  `hsc_board` varchar(15) NOT NULL,
  `hsc_gpa` varchar(6) NOT NULL,
  `ug_degree` varchar(30) NOT NULL,
  `ug_dept` varchar(50) NOT NULL,
  `ug_cgpa` varchar(6) NOT NULL,
  `ug_uni` varchar(50) NOT NULL,
  `pg_degree` varchar(30) NOT NULL,
  `pg_dept` varchar(50) NOT NULL,
  `pg_cgpa` varchar(6) NOT NULL,
  `pg_uni` varchar(50) NOT NULL,
  `experience` int(5) DEFAULT NULL,
  `expert` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`serial_no`, `email`, `fatname`, `matname`, `address`, `ssc_school`, `ssc_group`, `ssc_year`, `ssc_board`, `ssc_gpa`, `hsc_college`, `hsc_group`, `hsc_year`, `hsc_board`, `hsc_gpa`, `ug_degree`, `ug_dept`, `ug_cgpa`, `ug_uni`, `pg_degree`, `pg_dept`, `pg_cgpa`, `pg_uni`, `experience`, `expert`) VALUES
(1, 'pollob@gmail.com', 'Gosto Ray', 'Hahsi Rani Ray', 'Bogura', 'Banaich Momin Hi-School', 'Humanities', '2015', 'Rajshahi', '4.17', 'BIIT', 'Computer', '2019', 'Technical', '3.70', 'Bsc in Eng.', 'CSE', '3.50', 'DUET', 'M.sc in Eng', 'CSE', '0.00', 'DUET', 0, '1110010100'),
(8, 'prodip@gmail.com', '', '', '', 'Naugaon', 'Science', '2015', 'Rajshahi', '5.00', 'Naugaon Polytechnic Institute ', 'Computer', '2019', 'Technical', '4.00', 'BSc Eng.', 'CSE', '3.70', 'DUET', 'Msc Eng', 'CSE', '3.50', 'DUET', 1, '0100100000'),
(9, 'moksedul@gmail.com', '', '', '', '', '', '', '', '0.00', '', '', '', '', '0.00', '', '', '0.00', '', '', '', '0.00', '', 0, '0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `serial_no` int(6) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cnt_no` varchar(15) NOT NULL,
  `bdate` varchar(12) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pennding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`serial_no`, `email`, `fname`, `lname`, `password`, `cnt_no`, `bdate`, `gender`, `status`) VALUES
(19, 'pollob@gmail.com', 'Pollob', 'Ray', '123456', '01798160884', '1999-12-23', 'male', 'approved'),
(27, 'prodip@gmail.com', 'Prodip', 'Chandra', '123456', '01788888888', '1999-03-17', 'male', 'approved'),
(28, 'moksedul@gmail.com', 'Moksedul', 'Hoque', '123456', '01755555555', '1998-03-09', 'male', 'pennding');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Indexes for table `applyjob`
--
ALTER TABLE `applyjob`
  ADD PRIMARY KEY (`applied_job_serial_no`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`serial_no`,`email`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_serial`,`com_email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`serial_no`,`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`serial_no`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applyjob`
--
ALTER TABLE `applyjob`
  MODIFY `applied_job_serial_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `serial_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_serial` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `serial_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `serial_no` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
