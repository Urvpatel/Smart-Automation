-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2023 at 02:19 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pure`
--

-- --------------------------------------------------------

--
-- Table structure for table `acescont`
--

DROP TABLE IF EXISTS `acescont`;
CREATE TABLE IF NOT EXISTS `acescont` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `acescont`
--

INSERT INTO `acescont` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(1, 'hrsht', 123, 43, '2F8C602225104344B6BACCF83151A0DE.jpg'),
(2, 'hrsht', 123, 43, '2F8C602225104344B6BACCF83151A0DE.jpg'),
(3, 'hrsht', 123, 43, '2F8C602225104344B6BACCF83151A0DE.jpg'),
(4, 'urv', 120, 12, 'pexels-sebastiaan-stam-1097456.jpg'),
(5, 'urv', 120, 12, 'pexels-sebastiaan-stam-1097456.jpg'),
(6, 'urv', 120, 12, 'pexels-sebastiaan-stam-1097456.jpg'),
(7, 'urv', 123, 12, 'pexels-sebastiaan-stam-1097456.jpg'),
(8, 'urv', 123, 12, 'pexels-sebastiaan-stam-1097456.jpg'),
(9, 'urv', 12, 12, 'pexels-sebastiaan-stam-1097456.jpg'),
(10, 'urv', 12, 120, 'pexels-sebastiaan-stam-1097456.jpg'),
(11, 'urv', 12, 12, 'best-smart-office-automation-system.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

DROP TABLE IF EXISTS `audio`;
CREATE TABLE IF NOT EXISTS `audio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

DROP TABLE IF EXISTS `auto`;
CREATE TABLE IF NOT EXISTS `auto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(2000) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(73, 'NGJ', '212', 'nature-image-for-website.jpg', 1),
(72, 'yo', '22', 'reg.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

DROP TABLE IF EXISTS `security`;
CREATE TABLE IF NOT EXISTS `security` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(1, 'wegsdvs', 122, 21, '36DE35E2568946FF9BAFB981D6AA6712.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL,
  `U_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Confirm_Address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Issue_text` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `dt_book` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solar`
--

DROP TABLE IF EXISTS `solar`;
CREATE TABLE IF NOT EXISTS `solar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solar`
--

INSERT INTO `solar` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(1, 'yo', 123, 33, '2F8C602225104344B6BACCF83151A0DE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

DROP TABLE IF EXISTS `technician`;
CREATE TABLE IF NOT EXISTS `technician` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`id`, `name`, `address`, `email`, `phone`, `image`) VALUES
(11, 'wegsdvs', 'hyy', 'bwrbwbwebweb@email.com', 11, 'AA059A2FEB5540F589D34D80B91ECDE9.jpg'),
(22, 'NGJ', '12e1dwdqwd', '222b@email.com', 12122, '30D5D791E1D747A9A8EB15096FA4CE2C.jpg'),
(122, 'yupp', 'rbrbrbr', '222b@email.com', 12122, 'h1.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
