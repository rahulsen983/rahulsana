-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 12:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emrul_kayes`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_list`
--

CREATE TABLE `blood_list` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(20) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood_list`
--

INSERT INTO `blood_list` (`id`, `name`, `age`, `blood_group`, `city`, `phone`) VALUES
(5, 'Mehedi Hasan', '23', 'A+', 'Dinajpur', '01302840538'),
(7, 'Prodipto', '23', 'AB+', 'Bagerhat', '01365478545'),
(16, 'Joy Sarkar', '24', 'B+', 'Dinajpur', '01542874523'),
(20, 'Fahim Hasan', '23', 'AB-', 'Dinajpur', '01365478545'),
(22, 'Milon', '23', 'A+', 'Dinajpur', '01365478545'),
(23, 'Nahid hasan', '23', 'B+', 'Dinajpur', '01302820552'),
(25, 'Md. Ruhul ', '25', 'B+', 'Bogura', '01365478564'),
(29, 'Aysha Shiddika', '22', 'O+', 'Dinajpur', '01302840552');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_list`
--
ALTER TABLE `blood_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_list`
--
ALTER TABLE `blood_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
