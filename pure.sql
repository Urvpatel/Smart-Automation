-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2023 at 08:02 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(11, 'cctv camera', 2000, 10, 'security_f.png');

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
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(74, 'reg', '120', 'new.png', 1),
(73, 'NGJ', '212', 'nature-image-for-website.jpg', 1),
(72, 'yo', '22', 'reg.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fire`
--

DROP TABLE IF EXISTS `fire`;
CREATE TABLE IF NOT EXISTS `fire` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

DROP TABLE IF EXISTS `it`;
CREATE TABLE IF NOT EXISTS `it` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(8, 'cctv camera', 1200, 12, 'door.jpeg');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solar`
--

INSERT INTO `solar` (`id`, `name`, `price`, `quantity`, `image`) VALUES
(3, 'panel', 20000, 12, 'sp.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
