-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 03:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saiecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `itemname` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` longblob NOT NULL,
  `itemcost` varchar(100) NOT NULL,
  `gender` enum('Men,'women','Unisex') NOT NULL DEFAULT 'Unisex',
  `occasion` enum('Birthday','Valentine','NewBorn','Wedding','Congrats','Christmas') NOT NULL,
  `itembrand` varchar(100) NOT NULL,
  `posted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--
---------------------MEn--------------
INSERT INTO `items` (`id`, `itemname`, `description`, `image`, `itemcost`, `gender`) VALUES
(1, 'MenShoes', 'Biege and black', 'images/Menshoes/jordan1.jpg', '19', 'Men');
INSERT INTO `items` (`id`, `itemname`, `description`, `image`, `itemcost`, `gender`) VALUES
(2, 'MenShoes', 'Blue and White', 'images/Menshoes/jordan2.jpg', '10', 'Men');
INSERT INTO `items` (`id`, `itemname`, `description`, `image`, `itemcost`, `gender`) VALUES
(3, 'MenShoes', 'Gold and white', 'images/Menshoes/jordan3.jpg', '20', 'Men');
INSERT INTO `items` (`id`, `itemname`, `description`, `image`, `itemcost`, `gender`) VALUES
(4, 'MenShoes', 'Mix color dark and white on Front','images/Menshoes/jordan4.jpg' , '21', 'Men');
INSERT INTO `items` (`id`, `itemname`, `description`, `image`, `itemcost`, `gender`) VALUES
(5, 'MenShoes', 'RED and white','images/Menshoes/jordan5.jpg' , '22', 'Men');
------------------Women-----------------------------------------------
INSERT INTO `items` (`id`, `itemname`, `description`, `image`, `itemcost`, `gender`) VALUES
(6, 'WoWomenShoes', 'Biege and black', 'images/WomenShoes/wnikeshoes1.jpg', '19', 'Women');
INSERT INTO `items` (`id`, `itemname`, `description`, `image`, `itemcost`, `gender`) VALUES
(7, 'WoWomenShoes', 'Blue and White', 'images/WomenShoes/wnikeshoes2.jpg', '10', 'Women');
INSERT INTO `items` (`id`, `itemname`, `description`, `image`, `itemcost`, `gender`) VALUES
(8, 'WoWomenShoes', 'Gold and white', 'images/WomenShoes/wnikeshoes3.jpg', '20', 'Women');
INSERT INTO `items` (`id`, `itemname`, `description`, `image`, `itemcost`, `gender`) VALUES
(9, 'WoWomenShoes', 'Mix color dark and white on Front','images/WomenShoes/wnikeshoes4.jpg' , '21', 'Women');
INSERT INTO `items` (`id`, `itemname`, `description`, `image`, `itemcost`, `gender`) VALUES
(10, 'WoWomenShoes', 'RED and white','images/WomenShoes/wnikeshoes5.jpg' , '22', 'Women');




;



;





;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
