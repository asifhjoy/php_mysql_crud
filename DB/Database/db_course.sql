-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2019 at 07:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_course`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_course`
--

CREATE TABLE `tb_course` (
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `credit` varchar(10) NOT NULL,
  `fac_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_course`
--

INSERT INTO `tb_course` (`course_code`, `course_name`, `credit`, `fac_id`) VALUES
('', '', '', ''),
('BUS201', 'Business Communication', '03', 'ARC'),
('CSC183', 'C Program', '03', 'RF'),
('CSC184', 'C Program LAB', '01', 'RF'),
('CSC247', 'Computer Architecture and Organization', '03', 'SH'),
('CSC383', 'Programming in Java', '03', 'RF'),
('CSC384', 'Java Lab', '01', 'RF'),
('CSC433', 'DBMS', '03', 'AR'),
('CSC434', 'DBMS Lab', '01', 'AR');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dept`
--

CREATE TABLE `tb_dept` (
  `dept_code` varchar(2) NOT NULL,
  `dept_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dept`
--

INSERT INTO `tb_dept` (`dept_code`, `dept_name`) VALUES
('02', 'BBA'),
('03', 'CSE'),
('04', 'CE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_faculty`
--

CREATE TABLE `tb_faculty` (
  `fac_id` varchar(10) NOT NULL,
  `fac_name` varchar(30) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `section` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_faculty`
--

INSERT INTO `tb_faculty` (`fac_id`, `fac_name`, `course_code`, `section`) VALUES
('', '', '', ''),
('AR', 'Arifa Tur Rahman', 'CSC433', 'B'),
('ARC', 'Ananya Raka Chakrabarty', 'BUS201', 'C'),
('RF', 'Rubayea Ferdous', 'CSC383', 'G'),
('SH', 'Shahinur Alam', 'CSC247', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `tb_st`
--

CREATE TABLE `tb_st` (
  `id` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dept_code` varchar(10) NOT NULL,
  `sub1` varchar(10) NOT NULL,
  `sub2` varchar(10) NOT NULL,
  `sub3` varchar(10) NOT NULL,
  `sub4` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_st`
--

INSERT INTO `tb_st` (`id`, `name`, `dept_code`, `sub1`, `sub2`, `sub3`, `sub4`) VALUES
('', '', '', '', '', '', ''),
('18102011', 'Radanul Islam Rahat', '02', 'BUS201', 'CSC183', 'CSC184', 'CSC433'),
('18103029', 'Md. Asif Hossain', '03', 'CSC383', 'CSC384', 'CSC433', 'CSC434'),
('18103127', 'Mahmud Bin Sultan', '03', 'BUS201', 'CSC383', 'CSC183', 'CSC433'),
('18103284', 'Nazmun Nahar Mou', '03', 'CSC247', 'CSC384', 'CSC184', 'CSC434'),
('18104122', 'Borhan Kabir Shishir', '04', 'CSC247', 'CSC383', 'CSC384', 'BUS201');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_course`
--
ALTER TABLE `tb_course`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `tb_dept`
--
ALTER TABLE `tb_dept`
  ADD PRIMARY KEY (`dept_code`);

--
-- Indexes for table `tb_faculty`
--
ALTER TABLE `tb_faculty`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `tb_st`
--
ALTER TABLE `tb_st`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
