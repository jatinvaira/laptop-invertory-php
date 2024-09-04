-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2024 at 01:41 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `LaptopID` int(11) NOT NULL,
  `LaptopName` varchar(255) NOT NULL,
  `LaptopDescription` text NOT NULL,
  `QuantityAvailable` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `ProductAddedBy` varchar(255) NOT NULL,
  `ReleaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptops`
--

INSERT INTO `laptops` (`LaptopID`, `LaptopName`, `LaptopDescription`, `QuantityAvailable`, `Price`, `ProductAddedBy`, `ReleaseDate`) VALUES
(6, 'Dell XPS 13', '13.3\" 4K UHD+ Touch Display, Intel Core i7-1165G7, 16GB RAM, 512GB SSD, Windows 10', 10, 1599.99, 'admin', '2024-06-12'),
(7, 'HP Spectre x360', '13.3\" FHD Touchscreen, Intel Core i7-1165G7, 16GB RAM, 1TB SSD, Windows 10', 15, 1599.99, 'admin', '2024-06-13'),
(8, 'Apple MacBook Pro', '13-inch, Apple M1 Chip with 8-Core CPU and 8-Core GPU, 8GB RAM, 256GB SSD, macOS', 12, 1299.00, 'admin', '2024-06-14'),
(9, 'Lenovo ThinkPad X1 Carbon', '14\" WQHD IPS Display, Intel Core i7-1165G7, 16GB RAM, 512GB SSD, Windows 10 Pro', 18, 1499.99, 'admin', '2024-06-15'),
(10, 'Microsoft Surface Laptop 4', '13.5\" Touchscreen, AMD Ryzen 5 4680U, 8GB RAM, 256GB SSD, Windows 11', 20, 1099.99, 'admin', '2024-06-16'),
(11, 'ASUS ZenBook 14', '14\" Full HD IPS Display, AMD Ryzen 7 5700U, 16GB RAM, 1TB SSD, Windows 10 Home', 14, 999.99, 'admin', '2024-06-17'),
(12, 'Acer Swift 5', '14\" Full HD IPS Touchscreen, Intel Core i7-1165G7, 16GB RAM, 1TB SSD, Windows 10 Home', 16, 1199.99, 'admin', '2024-06-18'),
(13, 'Razer Blade Stealth 13', '13.3\" FHD Matte Display, Intel Core i7-1165G7, 16GB RAM, 512GB SSD, Windows 10', 22, 1599.99, 'admin', '2024-06-19'),
(14, 'LG Gram 14', '14\" Full HD IPS Display, Intel Core i7-1165G7, 16GB RAM, 512GB SSD, Windows 10 Home', 25, 1299.99, 'admin', '2024-06-20'),
(15, 'Samsung Galaxy Book Pro 360', '15.6\" FHD AMOLED Touchscreen, Intel Core i7-1165G7, 16GB RAM, 1TB SSD, Windows 10', 30, 1599.99, 'admin', '2024-06-21'),
(16, 'Dell Inspiron 14 2-in-1', '14\" FHD Touch Display, Intel Core i5-1135G7, 8GB RAM, 512GB SSD, Windows 11 Home', 11, 799.99, 'admin', '2024-06-22'),
(17, 'HP Envy 13', '13.3\" FHD Touchscreen, Intel Core i7-1165G7, 16GB RAM, 512GB SSD, Windows 10 Home', 19, 1099.99, 'admin', '2024-06-23'),
(18, 'Lenovo Yoga C940', '14\" FHD Touchscreen, Intel Core i7-1065G7, 16GB RAM, 512GB SSD, Windows 10 Home', 17, 1199.99, 'admin', '2024-06-24'),
(19, 'Microsoft Surface Pro 8', '13\" Touchscreen, Intel Core i5-1135G7, 8GB RAM, 256GB SSD, Windows 11 Home', 21, 999.99, 'admin', '2024-06-25'),
(20, 'ASUS ROG Zephyrus G14', '14\" QHD Display, AMD Ryzen 9 5900HS, 16GB RAM, 1TB SSD, Windows 10 Home', 24, 1499.99, 'admin', '2024-06-26'),
(21, 'Acer Chromebook Spin 713', '13.5\" 2K VertiView IPS Touch, Intel Core i5-1135G7, 8GB RAM, 256GB SSD, Chrome OS', 28, 629.99, 'admin', '2024-06-27'),
(22, 'Razer Book 13', '13.4\" FHD+ Touchscreen, Intel Core i7-1165G7, 16GB RAM, 256GB SSD, Windows 10', 32, 1599.99, 'admin', '2024-06-28'),
(23, 'Samsung Galaxy Book S', '13.3\" FHD Touchscreen, Qualcomm Snapdragon 8cx, 8GB RAM, 256GB SSD, Windows 10 Home', 26, 999.99, 'admin', '2024-06-29'),
(24, 'LG Gram 17', '17\" WQXGA IPS Display, Intel Core i7-1165G7, 16GB RAM, 1TB SSD, Windows 10 Home', 29, 1599.99, 'admin', '2024-06-30'),
(25, 'Apple MacBook Air', '13.3\" Retina Display with True Tone, Apple M1 Chip with 8-Core CPU and 7-Core GPU, 8GB RAM, 256GB SSD, macOS', 35, 999.00, 'admin', '2024-07-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`LaptopID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `LaptopID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
