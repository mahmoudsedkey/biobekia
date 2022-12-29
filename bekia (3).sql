-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 29, 2022 at 01:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bekia`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `c_name`, `created_at`, `updated_at`) VALUES
(1, 'minia', NULL, NULL),
(2, 'assuit', NULL, NULL),
(3, 'geza', NULL, NULL),
(4, 'cairo', NULL, NULL),
(5, 'qena', NULL, NULL),
(6, 'qalibia', NULL, NULL),
(7, 'alex', NULL, NULL),
(8, 'alexandrai', NULL, NULL),
(9, 'alex2', NULL, NULL),
(10, 'alex3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `Date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userName`, `address`, `phone`, `photo`, `state`, `Date`, `created_at`, `updated_at`) VALUES
(18, '[ppooopp', 'المنيا', '01009760566', 'upload.img', 0, '2022-05-29', '2022-05-30 17:57:42', '2022-05-30 17:57:42'),
(19, 'science', 'minia', '01009760566', 'upload.img', 1, '2022-05-29', '2022-05-30 18:00:06', '2022-12-28 17:58:32'),
(21, 'pppppp', 'المنيا', '01009760566', 'upload.img', 0, '2022-05-29', '2022-05-30 18:14:01', '2022-05-30 18:14:01'),
(28, 'mahmoud', 'minia', '0100000000', 'upload.img', 0, '2022-05-29', '2022-05-31 10:30:16', '2022-05-31 10:30:16'),
(31, 'jgjgjgjjg', 'ggjgjjg', '10010101010', 'upload.img', 1, '2022-05-29', '2022-05-31 10:52:54', '2022-07-27 11:05:14'),
(36, 'mahmoud', 'المنيا', '01009760566', 'upload/jcrAyPOJ0ZaTRcyyfApSFUoaxKSv8WZ3Dyo4olpO.jpg', 0, '2022-05-29', '2022-12-28 15:47:38', '2022-12-28 15:47:38'),
(37, 'mahmoud', 'المنيا', '01009760566', 'orders/MQacYq2hHeGU6ANlvZTa8BSKTnDfdZ7rYLcCirnb.jpg', 0, '2022-05-29', '2022-12-28 19:56:49', '2022-12-28 19:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, '2Vodafone', 'logo.png', '2022-05-27 22:00:00', '2022-06-02 16:37:59'),
(4, '2CMS', 'logo.png', '2022-06-02 17:16:06', '2022-07-27 13:16:45'),
(11, 'jnn', 'partners/HTNQkFfXdEGQ5auJWzC3M4o5fCDHZwp5YXpnPBZB.png', '2022-12-28 21:33:48', '2022-12-28 21:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `discription`, `photo`, `price`, `created_at`, `updated_at`) VALUES
(60, 'نحاس', 'لكل طن', 'products/aShWJsrd3ur7AeYQef0vkwXtrUwTGRoEKslxKW7h.jpg', 500, '2022-12-29 09:10:34', '2022-12-29 09:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `fullName`, `email`, `phone`, `password`, `group_id`, `created_at`, `active`, `updated_at`) VALUES
(2, 'mahmoud', 'hhhhhh', 'mahmoud@gmail.com', NULL, '$2y$10$gSUkF52YP7IZ46yPudPOTenOfytJXGMvDs4M6Xa44k6mH7TLwiAI2', 0, '2022-05-31 20:58:00', 0, '2022-07-27 20:16:52'),
(10, 't', 't', 't@rkr', NULL, '$2y$10$hpox3s0hoAOlqo1yb6Rl5O4ZkbohTefgKlxfsmweoMB/TzYNR36CS', 0, '2022-05-31 21:26:58', 0, '2022-05-31 21:26:58'),
(12, 'l', 'm', 'M@uuuuu', NULL, '$2y$10$mc5.8PJYmDGdcr2zb3X7UOe0GPgH3DmfH3.7cFuTbbcbS7gr4M/4K', 0, '2022-05-31 21:42:05', 0, '2022-05-31 21:42:05'),
(14, 'fjjfj', 'jfjfjjfjf', 'm@jdjdjd', NULL, '$2y$10$CTOAvXE1HfrZRtvoTZHTteBftConlHrkpO2qoTSWfRP1MZRznStHi', 0, '2022-05-31 22:16:27', 0, '2022-05-31 22:16:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
