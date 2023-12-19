-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 05:37 AM
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
  `total` varchar(20) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_order`
--

INSERT INTO `id_order` (`id`, `id_order`, `user_id`, `id_bgmarr_name`, `price`, `quantity_hr`, `total`, `date_order`) VALUES
(1, '2312000001', '', 'BGMARR001', '10', '2', '20', '2023-12-19 03:56:04'),
(2, '2312000001', '', 'BGMARR014', '10', '1', '10', '2023-12-19 04:20:50'),
(3, '2312000001', '', 'BGMARR003', '10', '1', '10', '2023-12-19 04:20:55'),
(4, '2312000001', '2', 'BGMARR038', '30', '1', '30', '2023-12-19 04:31:17'),
(5, '2312000001', '2', 'BGMARR038', '30', '1', '30', '2023-12-19 04:33:35'),
(6, '2312000001', '2', 'BGMARR038', '30', '1', '30', '2023-12-19 04:33:57'),
(7, '2312000001', '2', 'BGMARR008', '10', '1', '10', '2023-12-19 04:34:57');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
