-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2018 at 04:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latwb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `F_name` text NOT NULL,
  `username` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `day` int(5) NOT NULL,
  `month` text NOT NULL,
  `year` int(7) NOT NULL,
  `sex` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`F_name`, `username`, `Email`, `password`, `day`, `month`, `year`, `sex`) VALUES
('pankaj', 'pankaj07pk', 'pankajj162@gmail.com', 'pankaj1998', 7, 'Jul', 1998, 'Mele'),
('prince', 'prince24', 'prince0924pk@gmail.com', 'prince0924', 24, 'Sep', 2002, 'Mele');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `Email` (`Email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
