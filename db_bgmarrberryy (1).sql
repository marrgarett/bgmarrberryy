-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2023 at 09:38 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

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
  `bgmarr_status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bgmarr_tbl`
--

INSERT INTO `bgmarr_tbl` (`bgmarr_id`, `bgmarr_name`, `bgmarr_desc`, `bgmarr_us`, `bgmarr_pw`, `bgmarr_price`, `bgmarr_img`, `bgmarr_status`) VALUES
(1, 'BGMARR001', 'ของแทร่ x2', 'u53rn4me', 'p@ssw0rd', '10', 'id1.png', '0'),
(62, 'BGMARR002', 'desc', 'user', 'password', '10', '399424096_7550095971672379_4441974559947996304_n.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `history_tbl`
--

CREATE TABLE `history_tbl` (
  `his_id` int(10) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `bgmarr_id` varchar(10) NOT NULL,
  `his_hr` int(11) NOT NULL,
  `his_price` int(3) NOT NULL,
  `his_start` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `his_end` time NOT NULL,
  `his_payment` text NOT NULL,
  `his_status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history_tbl`
--

INSERT INTO `history_tbl` (`his_id`, `cli_id`, `bgmarr_id`, `his_hr`, `his_price`, `his_start`, `his_end`, `his_payment`, `his_status`) VALUES
(1, 2, 'BGMARR001', 2, 20, '2023-12-04 06:40:50', '14:42:34', 'slip.png', '0'),
(2, 44, 'BGMARR002', 2, 20, '2023-12-04 06:41:08', '14:42:34', 'slip.png', '0'),
(3, 45, 'BGMARR003', 2, 20, '2023-12-04 06:41:04', '14:42:34', 'slip.png', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `useremail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass_word` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `fullname`, `username`, `useremail`, `pass_word`, `regdate`) VALUES
(1, 'kritsana tuntipong', 'mgret', 'sb6560259101@lru.ac.th', '71e599d4143772355df19ec76aa14b15', '2023-11-15 03:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `tblclient`
--

CREATE TABLE `tblclient` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `useremail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass_word` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblclient`
--

INSERT INTO `tblclient` (`id`, `fullname`, `useremail`, `pass_word`, `regdate`, `user_status`) VALUES
(2, 'สังสรรค์', 'clienttest@gmail.com', 'client', '2023-12-04 06:28:37', 'C'),
(44, 'พลวัต', 'qq@gmail.com', '123', '2023-12-04 06:28:41', 'C'),
(45, 'กฤษณะ', 'testregister@gmail.com', 'test', '2023-12-04 06:28:47', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bgmarr_tbl`
--
ALTER TABLE `bgmarr_tbl`
  ADD PRIMARY KEY (`bgmarr_id`);

--
-- Indexes for table `history_tbl`
--
ALTER TABLE `history_tbl`
  ADD PRIMARY KEY (`his_id`),
  ADD KEY `cli_id` (`cli_id`,`bgmarr_id`),
  ADD KEY `bgmarr_id` (`bgmarr_id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclient`
--
ALTER TABLE `tblclient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bgmarr_tbl`
--
ALTER TABLE `bgmarr_tbl`
  MODIFY `bgmarr_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `history_tbl`
--
ALTER TABLE `history_tbl`
  MODIFY `his_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclient`
--
ALTER TABLE `tblclient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
