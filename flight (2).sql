-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2023 at 01:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flight_ticket_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `departure` varchar(1000) NOT NULL,
  `destination` varchar(1000) NOT NULL,
  `airline` varchar(1000) NOT NULL,
  `seating` varchar(1000) NOT NULL,
  `journey_date` date NOT NULL,
  `journey_time` time NOT NULL,
  `adult` varchar(1000) NOT NULL,
  `children` varchar(1000) NOT NULL,
  `infant` varchar(1000) NOT NULL,
  `fare` varchar(1000) NOT NULL,
  `return_date` date NOT NULL,
  `return_time` time NOT NULL,
  `feedback` varchar(1000) NOT NULL,
  `fullname` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `payment_code` varchar(1000) NOT NULL,
  `select_payment_method` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `departure`, `destination`, `airline`, `seating`, `journey_date`, `journey_time`, `adult`, `children`, `infant`, `fare`, `return_date`, `return_time`, `feedback`, `fullname`, `phone`, `details`, `payment_code`, `select_payment_method`) VALUES
(33, 'xy', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(34, 'xy', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(35, 'xy', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(36, 'xy', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(37, 'xy', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(38, 'xy', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(39, 'xy', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(40, 'xy', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(41, 'xy', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(42, '', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', '', ' ', ' ', '', ''),
(43, '', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', '', ' ', ' ', '', ''),
(45, 'xy', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(50, '', ' ', '', ' ', '0000-00-00', '00:00:00', ' ', '', '', ' ', '0000-00-00', '00:00:00', ' ', '', ' ', ' ', '', ''),
(51, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:00', ' ', '2', '1', ' 1', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(52, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:00', ' ', '2', '1', ' 1', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(53, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:00', ' ', '2', '1', ' 1', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(54, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '2', ' 1', '0000-00-00', '00:00:00', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(55, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '2', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(56, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(57, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(59, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '2', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(60, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(61, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(62, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(63, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(64, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(65, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(66, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' ', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(67, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' ', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(68, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' ', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(69, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' ', '0000-00-00', '00:00:05', ' ', '2', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', ''),
(70, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '1', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', 'credit card'),
(71, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '1', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', 'credit card'),
(72, 'xy', 'Mumbai Chhatrapati Shivaji_Maharaj ', 'Kolkata Netaji Subhas Chandra Bose', ' Indian Airline', '0000-00-00', '00:00:05', ' ', '1', '1', ' 1', '0000-00-00', '00:00:05', ' ', 'good', ' 9564788414', ' c@g.c', '', 'credit card');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
