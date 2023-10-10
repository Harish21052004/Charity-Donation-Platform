-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 07:13 AM
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
-- Database: `logi`
--

-- --------------------------------------------------------

--
-- Table structure for table `regdata`
--

CREATE TABLE `regdata` (
  `id` int(11) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT current_timestamp(),
  `street_address` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regdata`
--

INSERT INTO `regdata` (`id`, `full_name`, `email`, `phone_number`, `payment_date`, `street_address`, `country`, `city`, `region`, `postal_code`, `amount`) VALUES
(1, 'hari', 'harish.ec21@bitsathy.ac.in', '6380728032', '2023-08-11 00:00:00', 'dsgdgtrhtrhtghgbdfdhhgffdhdd', 'America', 'erode', 'sathy', 635621, 100000),
(2, 'hari', 'harish.ec21@bitsathy.ac.in', '6380728032', '2023-08-24 00:00:00', 'gdghghch', 'India', 'erode', 'sathy', 1, 10),
(3, 'hari', '', '6380728032', '2023-08-13 00:00:00', 'dsgdgtrhtrhtghgbdfdhhgffdhdd', 'America', 'erode', 'sathy', 464, 100),
(4, 'hari', 'harish.ec21@bitsathy.ac.in', '6380728032', '0000-00-00 00:00:00', 'gdghghch', 'England', 'erode', 'sathy', 58, 100),
(5, 'hari', 'hari21052004@gmail.com', '6380728032', '0000-00-00 00:00:00', 'gdghghch', 'Japan', 'erode', 'sathy', 5, 100),
(6, '', 'hari21052004@gmail.com', '6380728032', '2023-08-13 18:27:23', 'dsgdgtrhtrhtghgbdfdhhgffdhdd', 'India', 'erode', 'sathy', 1, 10),
(7, 'hari', 'hari21052004@gmail.com', '6380728032', '2023-08-13 18:27:55', 'dsgdgtrhtrhtghgbdfdhhgffdhdd', 'India', 'erode', 'sathy', 1, 10),
(8, 'hari', 'harish.ec21@bitsathy.ac.in', '6380728032', '2023-08-14 11:30:22', 'dsgdgtrhtrhtghgbdfdhhgffdhdd', 'Singapore', 'erode', 'sathy', 5623, 1000),
(9, 'hari', 'harish.ec21@bitsathy.ac.in', '6380728032', '2023-08-14 11:42:38', 'dsgdgtrhtrhtghgbdfdhhgffdhdd', 'Singapore', 'erode', 'sathy', 685790, 4000),
(10, '', 'd', '6380728032', '2023-08-14 21:35:09', 'dsgdgtrhtrhtghgbdfdhhgffdhdd', 'India', 'erode', 'sathy', 88484, 12300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'HARISH', 'harish.ec21@bitsathy', '12341234'),
(2, 'HARI', 'harish.ec21@bitsathy.ac.in', '12341234'),
(3, 'jai', 'jaiprsad.ec21@bitsathy.ac.in', 'jai1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regdata`
--
ALTER TABLE `regdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regdata`
--
ALTER TABLE `regdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
