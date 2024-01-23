-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 07:50 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bgmarrberryy`
--

-- --------------------------------------------------------

--
-- Table structure for table `id_order`
--

CREATE TABLE `id_order` (
  `id` int(11) NOT NULL,
  `id_order` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `id_bgmarr_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity_hr` varchar(20) NOT NULL,
  `discount` int(11) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_order`
--

INSERT INTO `id_order` (`id`, `id_order`, `user_id`, `id_bgmarr_name`, `price`, `quantity_hr`, `discount`, `date_order`) VALUES
(76, '2312000001', '3', 'BGMARR039', '30', '24', 40, '2024-01-18 18:30:34'),
(79, '2312000001', '3', 'BGMARR027', '20', '1', 0, '2024-01-18 18:47:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `id_order`
--
ALTER TABLE `id_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `id_order`
--
ALTER TABLE `id_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
