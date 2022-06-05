-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 14, 2019 at 05:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `auser`
--

CREATE TABLE `auser` (
  `uid` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(50) NOT NULL,
  `uemail` text NOT NULL,
  `upass` text NOT NULL,
  `uphone` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auser`
--

INSERT INTO `auser` (`uid`, `uname`, `uemail`, `upass`, `uphone`) VALUES
(1, 'Anish Kumar', 'anishkumar1627@gmail.com', '1234567', 9284437311);

-- --------------------------------------------------------

--
-- Table structure for table `gas_sensor`
--

CREATE TABLE `gas_sensor` (
  `gid` bigint(20) UNSIGNED NOT NULL,
  `gdata` varchar(50) NOT NULL,
  `garea` varchar(100) NOT NULL,
  `gtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Table structure for table `noparking`
--

CREATE TABLE `noparking` (
  `nid` bigint(20) UNSIGNED NOT NULL,
  `nstatus` int(11) NOT NULL,
  `narea` varchar(100) NOT NULL,
  `nsno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `noparking`
--

INSERT INTO `noparking` (`nid`, `nstatus`, `narea`, `nsno`) VALUES
(2, 0, 'Gangapur Road 2', 'sensor2');

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `pid` bigint(20) UNSIGNED NOT NULL,
  `pstatus` int(11) NOT NULL,
  `parea` varchar(100) NOT NULL,
  `pstrength` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Table structure for table `soil`
--

CREATE TABLE `soil` (
  `sid` bigint(20) UNSIGNED NOT NULL,
  `sdata` int(11) NOT NULL,
  `sarea` varchar(50) NOT NULL,
  `stno` varchar(50) NOT NULL,
  `sdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `temphum`
--

CREATE TABLE `temphum` (
  `thid` bigint(20) UNSIGNED NOT NULL,
  `temp` int(11) NOT NULL,
  `hum` int(11) NOT NULL,
  `tharea` varchar(50) NOT NULL,
  `thtime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Indexes for table `auser`
--
ALTER TABLE `auser`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uid` (`uid`);

--
-- Indexes for table `gas_sensor`
--
ALTER TABLE `gas_sensor`
  ADD PRIMARY KEY (`gid`),
  ADD UNIQUE KEY `gid` (`gid`);

--
-- Indexes for table `noparking`
--
ALTER TABLE `noparking`
  ADD PRIMARY KEY (`nid`),
  ADD UNIQUE KEY `nid` (`nid`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `pid` (`pid`);

--
-- Indexes for table `soil`
--
ALTER TABLE `soil`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `sid` (`sid`);

--
-- Indexes for table `temphum`
--
ALTER TABLE `temphum`
  ADD PRIMARY KEY (`thid`),
  ADD UNIQUE KEY `thid` (`thid`);