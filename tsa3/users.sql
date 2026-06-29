-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2026 at 02:16 AM
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
-- Database: `users_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `birthday`, `email`, `contact`, `created_at`) VALUES
(1, 'Angelika', 'Siervo', 'Magandingan', 'user123', '$2y$10$PF3QYLAoOnvc4Zk80XBAn.7vOG/m4OIs6Fg3EWKZQ5aYOvgXDCuie', '2005-07-26', 'asmagandingan@fit.edu.ph', '09763968372', '2026-06-28 23:03:18'),
(2, 'Angelika', 'Siervo', 'Magandingan', 'mochi_', '$2y$10$V2y.WXHmp1afDXWpaMKsVuN1zk7W32DKYI1/rvzWxRe7AvWGf7HvK', '2005-02-19', 'asmagandingan@fit.edu.ph', '09906786767', '2026-06-28 23:21:12'),
(3, 'Angelika', 'Siervo', 'Magandingan', 'dee_luv', '$2y$10$O8zbmzc8qPzO1XH/N8IM3uxHRHVT2G/GHUC5K3aGvjE2v7RJ9m2Ay', '2003-07-26', 'asmagandingan@gmail.com', '09673961432', '2026-06-28 23:30:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
