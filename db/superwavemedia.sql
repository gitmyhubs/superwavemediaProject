-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 01:37 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superwavemedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `services` varchar(20) NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `name`, `email`, `phone`, `state`, `services`, `time`) VALUES
(1, 'piyush', 'piyush@gmail.com', 8574859688, 'Madya Pradesh', 'Digital Campaign', '3-4 AM'),
(2, 'ashi kaur', 'ashiash382@gmail.com', 7488389646, 'Jharkhand', 'Research & Insights', '12-1 AM'),
(3, 'Abhishek', 'abhishek@gmail.com', 9876543210, 'Assam', 'Software & Developme', '12-1 AM'),
(4, 'Faizan Ahmad', 'ahmad.aam@gmail.com', 7209865795, 'Goa', 'Software & Developme', '11-12 AM'),
(5, 'Ravi shanker', 'ravishanker.9835@gmail.com', 9835912841, 'Jharkhand', 'Research & Insights', '12-1 AM'),
(6, 'Abhinav', 'abhinav.consultancy@gmail.com', 123456789, 'Gujarat', 'Research & Insights', '1-2 AM'),
(7, 'abhineet', 'abhineet@gmail.com', 5874859678, 'Andra Pradesh', 'Research & Insights', '12-1 AM'),
(8, 'abhineet', 'abhineet@gmail.com', 5874859678, 'Andra Pradesh', 'Research & Insights', '12-1 AM'),
(9, 'abhineet', 'abhineet@gmail.com', 5874859678, 'Andra Pradesh', 'Research & Insights', '12-1 AM'),
(10, 'abhineet', 'abhineet@gmail.com', 5874859678, 'Andra Pradesh', 'Research & Insights', '12-1 AM'),
(11, 'abhineet', 'abhineet@gmail.com', 5874859678, 'Andra Pradesh', 'Research & Insights', '12-1 AM'),
(12, 'DK G', 'dkg@gmail.com', 123456789, 'Meghalaya', 'Digital Campaign', '11-12 AM'),
(13, 'DK G', 'dkg@gmail.com', 123456789, 'Meghalaya', 'Digital Campaign', '11-12 AM'),
(14, 'DK G', 'dkg@gmail.com', 123456789, 'Meghalaya', 'Digital Campaign', '11-12 AM');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
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
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
