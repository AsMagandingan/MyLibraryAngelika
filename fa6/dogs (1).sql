-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2026 at 11:50 AM
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
-- Database: `dog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `breed` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `breed`, `age`, `address`, `color`, `height`, `weight`) VALUES
(10, 'Luna', 'Aspin', 2, 'Las Pinaz', 'Brown', 45.00, 18.00),
(12, 'Buddy', 'Labrador', 3, 'Manila', 'Golden', 60.00, 30.00),
(14, 'Rocky', 'German Sheperd', 4, 'Makati', 'Black/Tan', 40.00, 50.00),
(15, 'Bella', 'Poodle', 1, 'Bulacan', 'pink', 20.00, 15.00),
(16, 'Lucy', 'shih tzu', 2, 'Pasig', 'Blue', 20.00, 18.00),
(17, 'Daisy', 'Golden Retriever', 3, 'Taguig', 'White', 28.00, 35.00),
(18, 'Luna', 'Siberian Husky', 6, 'Pasay', 'Black/White', 55.00, 34.00),
(19, 'Coco', 'Chihuahua', 4, 'Marikina', 'Cream', 20.00, 5.00),
(20, 'Loki', 'Rottweiler', 5, 'Pampanga', 'Brown', 40.00, 35.00),
(21, 'Max', 'Beagle', 3, 'Baguio', 'Brown', 35.00, 12.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
