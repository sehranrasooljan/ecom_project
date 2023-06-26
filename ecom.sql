-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 07:10 AM
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
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `prod_name` varchar(123) NOT NULL,
  `prod_price` int(11) NOT NULL,
  `prod_description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`prod_name`, `prod_price`, `prod_description`) VALUES
('', 0, '999'),
('bucket', 1000, 'this a bucket'),
('mobile', 91929, 'samsung phone'),
('bottle', 150, 'nike bottle'),
('apple', 999, 'this is an apple'),
('apple', 999, 'this is an apple'),
('apple', 999, 'this is an apple'),
('Nike Shoes', 2100, 'this is a nike shoe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u` varchar(255) NOT NULL,
  `e` varchar(255) NOT NULL,
  `p` int(11) NOT NULL,
  `a` int(11) NOT NULL,
  `sq` varchar(123) NOT NULL,
  `sa` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u`, `e`, `p`, `a`, `sq`, `sa`) VALUES
('sehran', 'sehran@gmail.com', 91022828, 21, 'what is your pet name?', 'snmem'),
('sehran', 'sehranmirxa@gmail.com', 123, 22, 'Your First School', 'e'),
('sehran', 'sehranmirxa@gmail.com', 123, 22, 'Your First School', 'e'),
('azhar', 'azhar@gmail.com', 1, 21, 'Your First School', 'snmem');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
