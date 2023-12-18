-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 06:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `trainbooking`
--

CREATE TABLE `trainbooking` (
  `uname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pno` varchar(20) NOT NULL,
  `tfrom` varchar(20) NOT NULL,
  `tto` varchar(20) NOT NULL,
  `train` varchar(20) NOT NULL,
  `seating` varchar(20) NOT NULL,
  `adult` varchar(20) NOT NULL,
  `faretype` varchar(20) NOT NULL,
  `ddate` varchar(20) NOT NULL,
  `dtime` varchar(20) NOT NULL,
  `rdate` varchar(20) NOT NULL,
  `rtime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainbooking`
--

INSERT INTO `trainbooking` (`uname`, `email`, `pno`, `tfrom`, `tto`, `train`, `seating`, `adult`, `faretype`, `ddate`, `dtime`, `rdate`, `rtime`) VALUES
('Ratnadip', 'r@gmail.com', '777777777', 'Chinsurah', 'Baly', 'abc1', 'first class', '1', 'on', '09/11/2003', '12:30', '9/11/2003', '23:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
