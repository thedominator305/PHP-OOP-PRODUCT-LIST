-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2020 at 10:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
-- Table structure for table `tbl_base`
--

CREATE TABLE `tbl_base` (
  `id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_base`
--

INSERT INTO `tbl_base` (`id`, `sku`, `name`, `price`) VALUES
(1, 'JVC200123', 'Acme DISC', '1.00 $'),
(2, 'JVC200123', 'Acme DISC', '1.00 $'),
(3, 'JVC200123', 'Acme DISC', '1.00 $'),
(4, 'JVC200123', 'Acme DISC', '1.00 $'),
(5, 'GGWP0007', 'War and Peace', '20.00 $'),
(6, 'GGWP0007', 'War and Peace', '20.00 $'),
(7, 'GGWP0007', 'War and Peace', '20.00 $'),
(8, 'GGWP0007', 'War and Peace', '20.00 $'),
(9, 'TR120555', 'Chair', '40.00 $'),
(10, 'TR120555', 'Chair', '40.00 $'),
(11, 'TR120555', 'Chair', '40.00 $'),
(12, 'TR120555', 'Chair', '40.00 $');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `weight` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `product_id`, `weight`) VALUES
(1, 5, '2 KG'),
(2, 6, '2 KG'),
(3, 7, '2 KG'),
(4, 8, '2 KG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_disk`
--

CREATE TABLE `tbl_disk` (
  `id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_disk`
--

INSERT INTO `tbl_disk` (`id`, `product_id`, `size`) VALUES
(1, 1, '700 MB'),
(2, 2, '700 MB'),
(3, 3, '700 MB'),
(4, 4, '700 MB');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_furniture`
--

CREATE TABLE `tbl_furniture` (
  `id` int(11) NOT NULL,
  `product_id` int(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `width` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_furniture`
--

INSERT INTO `tbl_furniture` (`id`, `product_id`, `height`, `width`, `length`) VALUES
(1, 9, '24', '45', '15'),
(2, 10, '24', '45', '15'),
(3, 11, '24', '45', '15'),
(4, 12, '24', '45', '15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_base`
--
ALTER TABLE `tbl_base`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_disk`
--
ALTER TABLE `tbl_disk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_furniture`
--
ALTER TABLE `tbl_furniture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_base`
--
ALTER TABLE `tbl_base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_disk`
--
ALTER TABLE `tbl_disk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_furniture`
--
ALTER TABLE `tbl_furniture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
