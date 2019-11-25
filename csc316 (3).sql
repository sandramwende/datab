-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 10:26 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csc316`
--

-- --------------------------------------------------------

--
-- Table structure for table `st`
--

CREATE TABLE `st` (
  `ST_ID` int(11) NOT NULL,
  `ST_NAME` varchar(100) NOT NULL,
  `ST_UNIT` int(10) DEFAULT NULL,
  `ST_STATUS` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st`
--

INSERT INTO `st` (`ST_ID`, `ST_NAME`, `ST_UNIT`, `ST_STATUS`) VALUES
(1, 'Sandra', 1, 2),
(2, 'Mwende', 2, 1),
(3, 'Davis', 3, 1),
(4, 'Ian', 4, 1),
(5, 'Christine', 1, 2),
(6, 'Davis', 2, 1),
(7, 'Mwangi', 3, 1),
(8, 'Marvin', 4, 1),
(9, 'Mercy', 1, 2),
(10, 'Edwin', 2, 1),
(11, 'Wambui', 3, 1),
(12, 'Kieran', 4, 1),
(13, 'Jurgen', 1, 1),
(14, 'Bruce', 2, 1),
(15, 'John', 3, 1),
(16, 'Ngaruiya', 4, 1),
(17, 'Victoria', 1, 1),
(18, 'Nancy', 2, 1),
(19, 'Kiptoo', 3, 2),
(20, 'Joy', 4, 1),
(21, 'Kendi', 1, 1),
(22, 'Joanna', 2, 1),
(23, 'Kinuthia', 3, 1),
(24, 'Lelo', 4, 1),
(25, 'Whitney', 1, 1),
(26, 'Cecilia', 2, 1),
(27, 'Eve', 3, 1),
(28, 'Ivy', 4, 1),
(29, 'Maxine', 1, 1),
(30, 'Kevin', 2, 1),
(31, 'Stacy', 3, 1),
(32, 'Gary', 4, 2),
(33, 'Wachira', 1, 1),
(34, 'Humphrey', 2, 1),
(35, 'Harry', 3, 1),
(36, 'Daphone', 4, 2),
(37, '', 0, 1),
(38, 'Caleb Mwaura', 4, 2),
(39, 'Davis Ronoh', 1, 2),
(40, 'Eve Kibuchie', 4, 2),
(41, 'Kipkirui', 3, 1),
(42, '', 0, 1),
(43, '', 0, 1),
(44, 'Kipkirui', 6, 1),
(45, 'victoria', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `password`) VALUES
(1, 'kiptoo', 'gvhj'),
(2, 'kiptoo', '5d90c7293f965c8f411231cfa89eea02'),
(3, 'kiptoo', '4efbc191ba97b1fb49cf095313d3ecb8'),
(4, 'leila', '2a75079a0a1db8cc7e75b5b5d95fa371'),
(5, 'leila', 'e5bb23797bfea314a3db43d07dbd6a74'),
(6, 'leila', '6fca2b0eae7d6e3b9830baad3ef9a55b'),
(7, 'kiptoo', '87e1e76a69a1d79a24f6cd02fc499748'),
(8, 'kiptoo', '87e1e76a69a1d79a24f6cd02fc499748'),
(9, 'kiptoo', '87e1e76a69a1d79a24f6cd02fc499748'),
(10, 'kiptoo', '34cb77728dbdc77989d0d751f9bdedb3'),
(11, 'kiptoo', 'u08uio'),
(12, 'kiptoo', 'u08uio'),
(13, 'kiptoo', 'u08uio'),
(14, 'kiptoo', 'u08uio'),
(15, '', ''),
(16, '', ''),
(17, '', ''),
(18, 'itadmin', 'jnfjnvfd'),
(19, 'itadmin', 'mkmvdf'),
(20, 'itadmin', 'snadra'),
(21, 'kiptoo', 'iidjiuhu'),
(22, 'itadmin', 'hgjgh'),
(23, 'itadmin', 'ceferc'),
(24, 'kiptoo', 'rbfg'),
(25, 'kiptoo', 'refcers'),
(26, 'kiptoo', 'utfjgt'),
(27, 'kiptoo', '7890'),
(28, 'itadmin', 'gfhhdf'),
(29, 'kiptoo', 'hjjhgkj'),
(30, 'kiptoo', 'kngbklf');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `UNIT_ID` int(11) NOT NULL,
  `UNIT_NAME` varchar(500) NOT NULL,
  `UNIT_CODE` varchar(500) NOT NULL,
  `UNIT_STATUS` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`UNIT_ID`, `UNIT_NAME`, `UNIT_CODE`, `UNIT_STATUS`) VALUES
(1, 'Business Information Systems', 'CSC217', 1),
(2, 'Advanced Web', 'CSC316', 1),
(3, 'Operating System', 'CSC401', 1),
(4, 'Business Economics', 'ECO101', 2),
(5, 'Tax Culture', 'TAX101', 2),
(6, 'Introduction to Education', 'EDU101', 1),
(7, 'business law', 'BSL101', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `st`
--
ALTER TABLE `st`
  ADD PRIMARY KEY (`ST_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`UNIT_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `st`
--
ALTER TABLE `st`
  MODIFY `ST_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `UNIT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
