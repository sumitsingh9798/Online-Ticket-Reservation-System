-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 08:07 AM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `username` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`username`, `gender`, `email`, `mobile`, `address`, `password`) VALUES
('', '', '', '', '', ''),
('SANTANU HALDER', 'male', 'sontanuhalder@gmail.com', '9433148496', 'Mohan LAl Bahalwala Road', '12345678'),
('', '', '', '', '', ''),
('', '', '', '', '', ''),
('Krishna Kanta Halder', 'male', 'krishnakantahalder07@gmail.com', '9874112641', 'Mohan LAl Bahalwala Road', '11111111'),
('Ranggan Bhattacharya', 'male', 'abc@gmail.com', '1234567890', 'kalna', '87654321'),
('sounak Ghosh', 'male', 'xyz@gmail.com', '0987654321', 'Belur', '88888888'),
('Soumalya Bhattacharya', 'male', 'Soumalya@gmail.com', '6289934194', 'Naihati', '22222222');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
