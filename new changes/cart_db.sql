-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2023 at 11:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `acescont`
--

CREATE TABLE `acescont` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acescont`
--

INSERT INTO `acescont` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(1, 'hrsht', 123, 43, '2F8C602225104344B6BACCF83151A0DE.jpg'),
(2, 'hrsht', 123, 43, '2F8C602225104344B6BACCF83151A0DE.jpg'),
(3, 'hrsht', 123, 43, '2F8C602225104344B6BACCF83151A0DE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(2, 'qwfqwwf', 11111, 21, '36DE35E2568946FF9BAFB981D6AA6712.jpg'),
(3, '222', 21212, 12, '6111643464134AFF8A2D7C9DCDD3A833.png'),
(4, 'NGJ', 321, 50, 'door.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(2, 'yo', 222, 100, '3AB46EBCDF75432490343E2CD1423C09.png'),
(3, 'hrsht', 21122, 12, '36DE35E2568946FF9BAFB981D6AA6712.jpg'),
(4, 'wegsdvs', 322, 211, '2F8C602225104344B6BACCF83151A0DE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(71, 'hrsht', '22', 'door.jpeg', 1),
(66, 'wegsdvs', '55', '82837016FDA644039D2326A022B06D05.jpg', 1),
(67, 'yo', '22', 'reg.jpeg', 2),
(68, 'Neell', '90', '1488904D7BBA43AB91DC9E6F1159AB3B.jpg', 2),
(70, 'yobro', '43', '334B809A4F59421B9454E6732860D4DF.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(44, 'wegsdvs', 55, '21', '82837016FDA644039D2326A022B06D05.jpg'),
(45, 'yo', 22, '11', 'reg.jpeg'),
(46, 'NGJ', 212, '21', 'nature-image-for-website.jpg'),
(47, 'hrsht', 22, '11', 'door.jpeg'),
(48, 'Neell', 90, '99', '1488904D7BBA43AB91DC9E6F1159AB3B.jpg'),
(49, 'yobro', 43, '22', '334B809A4F59421B9454E6732860D4DF.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(1, 'wegsdvs', 122, 21, '36DE35E2568946FF9BAFB981D6AA6712.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(255) NOT NULL,
  `U_name` varchar(255) NOT NULL,
  `Confirm_Address` varchar(255) NOT NULL,
  `Issue_text` varchar(255) NOT NULL,
  `dt_book` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solar`
--

CREATE TABLE `solar` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solar`
--

INSERT INTO `solar` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(1, 'yo', 123, 33, '2F8C602225104344B6BACCF83151A0DE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `name`, `address`, `email`, `phone`, `image`) VALUES
(1, 'wegsdvs', '12e', '222b@email.com', 3, '36DE35E2568946FF9BAFB981D6AA6712.jpg'),
(11, 'wegsdvs', 'hyy', 'bwrbwbwebweb@email.com', 11, 'AA059A2FEB5540F589D34D80B91ECDE9.jpg'),
(22, 'NGJ', '12e1dwdqwd', '222b@email.com', 12122, '30D5D791E1D747A9A8EB15096FA4CE2C.jpg'),
(122, 'yupp', 'rbrbrbr', '222b@email.com', 12122, 'h1.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acescont`
--
ALTER TABLE `acescont`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solar`
--
ALTER TABLE `solar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acescont`
--
ALTER TABLE `acescont`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `solar`
--
ALTER TABLE `solar`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
