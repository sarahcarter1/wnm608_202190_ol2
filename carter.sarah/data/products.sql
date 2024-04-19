-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2024 at 04:50 PM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wnm608_sarahcarter`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(32) NOT NULL,
  `date_create` datetime NOT NULL,
  `thumbnail` varchar(128) NOT NULL,
  `images` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `url`, `price`, `category`, `date_create`, `thumbnail`, `images`) VALUES
(1, 'Tree Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug1.php', 25.00, 'mug', '2024-04-10 13:55:37', 'mug1_thumb.jpg', 'mug1.jpg'),
(2, 'Tea Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug2.php', 25.00, 'mug', '2024-04-10 14:00:33', 'mug2_thumb.jpg', 'mug2.jpg'),
(3, '90s Van Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug3.php', 25.00, 'mug', '2024-04-10 16:17:53', 'mug3_thumb.jpg', 'mug3.jpg'),
(4, 'California Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug4.php', 25.00, 'mug', '2024-04-10 16:22:13', 'mug4_thumb.jpg', 'mug4.jpg'),
(5, 'Raccoon Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug5.php', 25.00, 'mug', '2024-04-10 16:24:17', 'mug5_thumb.jpg', 'mug5.jpg'),
(6, 'Sea Foam Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug6.php', 25.00, 'mug', '2024-04-10 16:29:07', 'mug6_thumb.jpg', 'mug6.jpg'),
(7, 'Llama Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug7.php', 25.00, 'mug', '2024-04-10 16:30:40', 'mug7_thumb.jpg', 'mug7.jpg'),
(8, 'Pink Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug8.php', 25.00, 'mug', '2024-04-10 16:33:11', 'mug8_thumb.jpg', 'mug8.jpg'),
(9, 'Stay Home Club Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug9.php', 25.00, 'mug', '2024-04-10 16:34:12', 'mug9_thumb.jpg', 'mug9.jpg'),
(10, 'White Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug10.php', 25.00, 'mug', '2024-04-10 16:35:43', 'mug10_thumb.jpg', 'mug10.jpg'),
(11, 'Blue Speckled Mug ', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug11.php', 25.00, 'mug', '2024-04-10 16:39:13', 'mug11_thumb.jpg', 'mug11.jpg'),
(12, 'Zodiac Mug', 'https://sarahcarterdesigns.com/aau/wnm608/carter.sarah/product_list/mug12.php', 25.00, 'mug', '2024-04-10 16:47:49', 'mug12_thumb.jpg', 'mug12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
