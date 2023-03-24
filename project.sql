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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(52, 'urv', '100000', 'pexels-sebastiaan-stam-1097456.jpg', 1),
(53, 'rp sir', '12', 'Hermione Granger😍.jfif', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clnt`
--

DROP TABLE IF EXISTS `clnt`;
CREATE TABLE IF NOT EXISTS `clnt` (
  `T_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Service_Id` int NOT NULL,
  `Service_date` date NOT NULL,
  `Feedback` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clnt`
--

INSERT INTO `clnt` (`T_id`, `Service_Id`, `Service_date`, `Feedback`, `Cost`) VALUES
('t1', 24353456, '2023-02-23', 'erdfghfdstyuiolkjhgfdsawertyuikjhdsaqwertyuhjgfd', 3456),
('T_id', 456789, '4444-03-31', 'rtyuioplkjhygtfretyuiop[poiuytrtyuiop', 555),
('T_id', 359304, '2322-12-20', 'its amazing', 250),
('T_id', 0, '6767-07-06', 'ygugugyu', 32);

-- --------------------------------------------------------

--
-- Table structure for table `clnt_reg`
--

DROP TABLE IF EXISTS `clnt_reg`;
CREATE TABLE IF NOT EXISTS `clnt_reg` (
  `F_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `L_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Address_1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Gender` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Phn_no` int NOT NULL,
  PRIMARY KEY (`Username`),
  UNIQUE KEY `Phn_no` (`Phn_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clnt_reg`
--

INSERT INTO `clnt_reg` (`F_name`, `L_name`, `Username`, `Address_1`, `Email`, `Password`, `Gender`, `Phn_no`) VALUES
('rtyuio', 'rtyuio', '5r6ty7iuop', 'retyuio', 'ert@mail.com', '3wert456', 'Femal', 345678),
('arya', 'bhavsar', 'arya18', 'a-4 yash flat', 'arya@gmail.com', '12345', 'Male', 2147483647),
('ertyuio', 'ertyui', 'ertyui', 'ertyui', 'ertyui@gamil.co', 'fghjkl;', 'Femal', 3456789),
('URV', 'PATEL', 'urvurvurv', 'yuyuy', 'urv@gmail.com', '3456789', 'Male', 1234567890),
('[drtyhujl]', '[]', '[rtyguhi]', '[rtyuio]', '[erty@gmail.com', '[tdyuio67]', '[Male', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Username` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `number` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(20) NOT NULL,
  `flat` varchar(2000) NOT NULL,
  `street` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pin_code` int NOT NULL,
  `total_product` varchar(2000) NOT NULL,
  `total_price` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `flat`, `street`, `city`, `state`, `country`, `pin_code`, `total_product`, `total_price`) VALUES
(11, 'neel', 134567890, 'ADHYA313@gmail.com', 'credit cart', 'iuhiuh', 'uhiuhui', 'iuhihu', 'joi', 'iuhiuhui', 12345, '0', '133'),
(10, 'urv', 2147483647, 'urvpatelhitack313@gmail.com', 'paypal', 'ghfhfgh', 'uygug', 'trdtrdtrd', 'ghhgcvhv', 'trdtrd', 12345, '0', '900'),
(12, 'urv', 1234567890, 'urvpatelhitack313@gmail.com', 'paypal', 'gfcgfc', 'fgcfgc', 'fgcfgc', 'gfcgc', 'gfcgcf', 12345, 'rytrfytf (1) , urv (1) ', '133'),
(13, 'urv', 1234567890, 'surrjune3@netxansh.media', 'paypal', 'ghfhfgh', 'uygug', 'ahm', 'jgh', 'ind', 123456, 'arya (2) , urv (3) ', '340000'),
(14, 'YTF', 1234567890, 'urvpatelhitack313@gmail.com', 'paypal', 'tyguyg', 'uygug', 'trdtrdtrd', 'ghhgcvhv', 'yugug', 123456, 'urv (1) ', '100000'),
(15, 'rajdeep', 1234567890, 'rajdeep@gmail.com', 'credit cart', 'tyguyg', 'wdsasd', 'ahm', 'uygug', 'trdtrd', 12345, 'urv (1) , rp sir (1) ', '100012');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(65, 'arya', '20000', 'new.png'),
(64, 'urv', '100000', 'pexels-sebastiaan-stam-1097456.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `service_book`
--

DROP TABLE IF EXISTS `service_book`;
CREATE TABLE IF NOT EXISTS `service_book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `U_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Confirm_Address` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Issue_text` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dt_book` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `U_name` (`U_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_book`
--

INSERT INTO `service_book` (`id`, `U_name`, `Confirm_Address`, `Issue_text`, `dt_book`) VALUES
(1, '', '', '', '0000-00-00'),
(5, 'urv', 'fudguswyfg', 'uguguy', '0001-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `tech`
--

DROP TABLE IF EXISTS `tech`;
CREATE TABLE IF NOT EXISTS `tech` (
  `T_id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `T_address` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `T_email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cn_no` int NOT NULL,
  `password` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `T_proof` int NOT NULL,
  PRIMARY KEY (`T_id`),
  UNIQUE KEY `cn_no` (`cn_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tech`
--

INSERT INTO `tech` (`T_id`, `name`, `T_address`, `T_email`, `cn_no`, `password`, `T_proof`) VALUES
('fesdv', 'urv', 'YTF', 'rgfv@gmail.com', 2147483647, 'yuguygyug', 0),
('qwerthyjuki', 'qaswgfrhy', 'qagtfrhyjuki', '', 12345678, 'wdefrghy', 0),
('t1', 'ARYA', 'SDSFFW', 'astd@gamil.com', 132454, '1w312', 0),
('[tydfg]', '[dfgh]', '[]', '[rtf@gmail.com]', 0, '[esdrtfygu', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
