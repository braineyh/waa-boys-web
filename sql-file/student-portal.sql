-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2024 at 07:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `kcperesults` char(2) DEFAULT NULL,
  `momphone` varchar(15) DEFAULT NULL,
  `dadphone` varchar(15) DEFAULT NULL,
  `healthproblems` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `users_id`, `phone`, `kcperesults`, `momphone`, `dadphone`, `healthproblems`, `dob`, `location`) VALUES
(1, 9, '0769860886', 'A', '0769860886', '0769860886', 'none', '2004-02-01', 'kenya'),
(2, 11, '0769860886', 'A', '0769860886', '0769860886', 'none', '2007-01-01', 'kenay');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'tony', 'lloyd', 'lloyd@gmail.com', '1234'),
(2, 'tony', 'lloyd', 'lloyd33@gmail.com', 'D:42n>5+E$hri_T'),
(3, 'tony', 'lloyd', 'lloy33@gmail.com', '$2y$10$E7hSnX6gdNTfQS/kwUfefuPYZXvuAcgcvAh0rnX/qYnWFEbgfeQXy'),
(4, 'tony', 'lloyd', 'lloy33@gail.com', '$2y$10$/oqXhNLOnTV6iSGEEI7ZCe4bDQQlnwLng5ysNQ87vPKhNZNmcYq36'),
(5, 'tony', 'lloyd', 'lloy33@gail.comgg', '$2y$10$UecUnW/Sb4PwUZOL5EMUbOyX4T75m3sh1STcTAySJo1GwUnPFzcSS'),
(6, 'tony', 'lloyd', 'lloy33@gail.comgggg', '$2y$10$H7IS0rAJLNTy00o4b5kOkON3meiJG5urYtnjfbNrMVEILtiFoGNia'),
(7, 'stabe', 'kafef', 'tonylloyd@gmail.com', '$2y$10$.v7cohFCdCaZrPAyPqRLB..x8VXuvAAFlJuV4io2REm0KtL8JR6te'),
(8, 'ergeg', 'ergweg', 'rg@gmail.com', '$2y$10$3Hvz6rhqpnjeyIwMvX0bPeeyFQ.qdo.A3miYMPvqfj6SSYGcANR9u'),
(9, 'tony', 'katila', 'lloydkatila@gmail.com', '$2y$10$FBuJUF//UDhahLAzJKC/2OuY/ws3ZAhQ0KRyst/EUzHmk6ybNnxJS'),
(10, 'stabe', 'zg', 'lloydkatila@gmail.comxx', '$2y$10$iOxrcpi2GV7Dfr/AyGFAl.y5Z/r0fzzPMvpNizXFK/l7.AvETv7U.'),
(11, 'werty', 'erer', 'lloyd@gmail.comxx', '$2y$10$XqIF/z9c9vR./DmB.sp9fuGjClXHkBhyf7khyr.vZc5JU7nPSHu.W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
