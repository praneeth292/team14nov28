-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2018 at 01:22 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `itemname` varchar(1000) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `image` longblob NOT NULL,
  `itembrand` varchar(200) NOT NULL,
  `itemcost` varchar(100) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `items_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `email`, `itemname`, `description`, `image`, `itembrand`, `itemcost`, `add_date`, `items_id`) VALUES
(3, 'sowjanya@gmail.com', 'watch', 'Casio G339 PU Automatic Mens Watch', '', 'casio', '1599', '2018-09-23 21:55:40', 1),
(8, 'sowjanya@gmail.com', 'fkfjg', 'jdffgjk', '', 'Suvij', '987$', '2018-09-23 22:23:22', 5),
(9, 'sowjanya@gmail.com', 'fkfjg', 'jdffgjk', '', 'Suvij', '987$', '2018-09-23 22:23:52', 5),
(10, 'sowjanya@gmail.com', 'fkfjg', 'jdffgjk', '', 'Suvij', '987$', '2018-09-23 22:25:14', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
