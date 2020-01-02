-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 08:31 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moresio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `aid` int(50) NOT NULL,
  `aname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `staff` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `aid`, `aname`, `email`, `phone`, `uname`, `staff`) VALUES
(1, 101, 'Saurabh More', 'saurabhmore230@gmail.com', '9156497169', 'sam@0298', 'Admin'),
(2, 102, 'Akshay Wakchaure', 'akshaywakchaure04@gmail.com', '9881323622', 'akshu@17398', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pword` varchar(16) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `staff` varchar(15) NOT NULL,
  `code` int(6) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `name`, `mname`, `sname`, `email`, `phone`, `uname`, `pword`, `gender`, `staff`, `code`, `status`) VALUES
(1, 'Saurabh', 'Anant', 'More', 'moresaurabh230@gmail.com', '8208075826', 'sam@0298', '$@Ur@b#0298', 'male', 'Admin', 0, '1'),
(2, 'Akshay', 'Madhav', 'Wakchaure', 'akshaywakchaure04@gmail.com', '9881323622', 'akshay@1998', '@k$hay1998', 'male', 'Admin', 0, '1'),
(9, 'Harish', 'Omprakash', 'Prajapti', 'arjunop8399@gmail.com', '9922087148', 'harish@123', '0147852369', 'Male', 'Principal', 8396, '1'),
(11, 'Santosh', 'Mahesh', 'Pattar', 'pattarsantosh04@gmail.com', '9258741360', 'santosh@123', '1478963250', 'Male', 'HOD', 5243, '1'),
(12, 'Harshal', 'Nilkanth', 'Kaklij', 'harshalkaklij92@gmail.com', '8806635361', 'harsh@123', '0321654987', 'Male', 'Teacher', 10999, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
