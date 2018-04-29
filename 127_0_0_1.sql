-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 12:31 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telem1`
--
CREATE DATABASE IF NOT EXISTS `telem1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `telem1`;

-- --------------------------------------------------------

--
-- Table structure for table `accepts`
--

CREATE TABLE `accepts` (
  `did` int(11) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `aid` int(11) NOT NULL,
  `special` varchar(40) DEFAULT NULL,
  `dname` varchar(40) DEFAULT NULL,
  `dat` date DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `tim` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `special`, `dname`, `dat`, `email`, `tim`) VALUES
(11, '1', '1', '2018-02-23', 'lohi@gmail.com', '8'),
(12, '1', '1', '2018-02-23', 'lohi@gmail.com', '7'),
(13, '1', '1', '2018-02-24', 'lohi@gmail.com', '7'),
(14, '1', '1', '2018-03-20', 'lohitha@gmail.com', '5'),
(15, '2', 'Saritha', '2018-03-20', 'lohitha.maddipoti@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `did` int(11) NOT NULL,
  `dname` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `sex` varchar(40) NOT NULL,
  `age1` int(2) NOT NULL,
  `special` varchar(40) NOT NULL,
  `email` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`did`, `dname`, `pass`, `pno`, `sex`, `age1`, `special`, `email`) VALUES
(151112101, 'Aruna', 'Aruna1@', '9192939495', 'F', 35, 'Gastroenterology', 'aruna@gmail.com'),
(151112102, 'Saritha', 'Saritha2@', '9192939496', 'F', 40, 'Nephrology', 'saritha@gmail.com'),
(151112103, 'Akash', 'Akash3@', '9192939407', 'M', 38, 'Urology', 'akash@gmail.com'),
(151112104, 'Ram', 'Ram4@', '9192939498', 'M', 39, 'Orthopeadology', 'ram@gmail.com'),
(151112105, 'VenugopalRao', 'VenugopalRao5@', '9192939499', 'M', 49, 'Neurology', 'venu@gmail.com'),
(151112106, 'Anand', 'Anand6@', '9192939490', 'M', 41, 'Neurology', 'anand@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pid` int(11) NOT NULL,
  `pname` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `age` varchar(2) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `tno` int(10) DEFAULT NULL,
  `bgrp` varchar(40) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `weight` varchar(40) DEFAULT NULL,
  `height` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pid`, `pname`, `email`, `pass`, `age`, `gender`, `tno`, `bgrp`, `address`, `weight`, `height`) VALUES
(3, 'lohi', 'lohitha@gmail.com', 'lohitha', '24', 'f', 12345678, 'o', 'bpl', '56', '140'),
(4, 'lohitha', 'lohitha.maddipoti@gmail.com', 'lohitha', '55', 'f', 123456789, 'o', 'bpl', '55', '140'),
(5, 'sai', 'sai@gmail.com', '', '20', 'm', 898989889, 'b', 'bhopal', '23', '6'),
(6, 'sai', 'lohi@gmail.com', '', '20', 'm', 898989889, 'b', 'bhopal', '23', '6');

-- --------------------------------------------------------

--
-- Table structure for table `treats`
--

CREATE TABLE `treats` (
  `pid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `disease` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accepts`
--
ALTER TABLE `accepts`
  ADD PRIMARY KEY (`did`,`aid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`did`),
  ADD UNIQUE KEY `pwd` (`pass`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `treats`
--
ALTER TABLE `treats`
  ADD PRIMARY KEY (`pid`,`did`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151112107;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
