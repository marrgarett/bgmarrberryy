-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 08:55 AM
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
-- Table structure for table `bgmarr_tbl`
--

CREATE TABLE `bgmarr_tbl` (
  `bgmarr_id` int(6) NOT NULL,
  `bgmarr_name` varchar(100) NOT NULL,
  `bgmarr_desc` mediumtext NOT NULL,
  `bgmarr_us` varchar(100) NOT NULL,
  `bgmarr_pw` varchar(100) NOT NULL,
  `bgmarr_price` varchar(255) NOT NULL,
  `bgmarr_img` varchar(255) NOT NULL,
  `bgmarr_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bgmarr_tbl`
--

INSERT INTO `bgmarr_tbl` (`bgmarr_id`, `bgmarr_name`, `bgmarr_desc`, `bgmarr_us`, `bgmarr_pw`, `bgmarr_price`, `bgmarr_img`, `bgmarr_status`) VALUES
(1, 'BGMARR001', 'Forsaken (Vandal, Operator), Kohaku & Matsuba (Fan), Magepunk 1 (Ghost), Nebula (Phantom), Oni 1 (Phantom), Prime 1 (Vandal), Reaver 1 (Sheriff), Recon (Balisong), RGX 11Z Pro 1 (Vandal), RGX 11Z Pro 2 (Phantom), Sovereign (Marshal)', 'Nitinon', 'BGMARR013_120246', '10', 'BGMARR002_00000.jpg', 'ว่าง'),
(2, 'BGMARR002', 'Celestial (Fan), Endeavour (Operator), Glitchpop 2 (Vandal), Ion 1 (Sheriff), Magepunk 2 (Sheriff), Oni 1 (Phantom), Prime 1 (Classic, Spectre), Reaver 1 (Vandal), Recon (Balisong), Valorant Go! Vol.1 (Melee)', 'weeraponuro2543', 'BGMARR018_120248', '15', 'BGMARR003_00000.jpg', 'ว่าง'),
(3, 'BGMARR003', 'Forsaken (Operator), Endeavour (Ghost), Neptune (Vandal), Oni 1 (Phantom), Origin (Vandal), Prime 2 (Phantom), Prelude to chaos (Vandal), Reaver 2 (Karambit), RGX 11Z Pro 2 (Spectre)', 'banknattawut2001', 'BGMARR012_120245', '20', 'BGMARR004_00000.jpg', 'ว่าง'),
(4, 'BGMARR004', 'Ion 1 (Sheriff, Bucky, Phantom, Operator, Sword), Forsaken (Vandal), Oni 1 (Phantom), Reaver 1 (Operator)', 'palmkan051060', 'BGMARR008_120244', '10', 'BGMARR005_00000.jpg', 'ว่าง'),
(5, 'BGMARR005', 'Celestial (Fan), Ion 1 (Phantom), Magepunk 1 (Marshal), Oni 1 (Shorty), Prelude to chaos (Vandal), Protocol 781-A (Sheriff), Reaver 1 (Vandal, Operator), Recon (Ghost), RGX 11Z Pro 2 (Phantom), Sentinels of light (Sheriff), Sovereign (Stinger)', 'Lllaw9', 'BGMARR003_302106', '15', 'BGMARR006_00000.jpg', 'ว่าง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bgmarr_tbl`
--
ALTER TABLE `bgmarr_tbl`
  ADD PRIMARY KEY (`bgmarr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bgmarr_tbl`
--
ALTER TABLE `bgmarr_tbl`
  MODIFY `bgmarr_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
