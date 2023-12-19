-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 04:35 AM
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
  `bgmarr_url` varchar(250) NOT NULL,
  `bgmarr_us` varchar(100) NOT NULL,
  `bgmarr_pw` varchar(100) NOT NULL,
  `bgmarr_price` varchar(255) NOT NULL,
  `bgmarr_img` varchar(255) NOT NULL,
  `bgmarr_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bgmarr_tbl`
--

INSERT INTO `bgmarr_tbl` (`bgmarr_id`, `bgmarr_name`, `bgmarr_desc`, `bgmarr_url`, `bgmarr_us`, `bgmarr_pw`, `bgmarr_price`, `bgmarr_img`, `bgmarr_status`) VALUES
(1, 'BGMARR001', 'Forsaken (Classic, Spectre, Vandal, Operator, Blade), Oni 1 (Phantom)', 'https://drive.google.com/drive/folders/1wDZ23ucDWe0U8kl8rDcOE1TdTidvqduA', 'Ekurea_513', 'BGMARR002_221001', '10', 'BGMARR001_00000.jpg', 'Available'),
(2, 'BGMARR002', 'Celestial (Fan), Ion 1 (Phantom), Magepunk 1 (Marshal), Oni 1 (Shorty), Prelude to chaos (Vandal), Protocol 781-A (Sheriff), Reaver 1 (Vandal, Operator), Recon (Ghost), RGX 11Z Pro 2 (Phantom), Sentinels of light (Sheriff), Sovereign (Stinger)', 'https://drive.google.com/drive/folders/1hivRjtLQ33MSYrhk_7u64XqqMz3JMI8J', 'Lllaw9', 'BGMARR003_302106', '10', 'BGMARR002_00000.jpg', 'Available'),
(3, 'BGMARR003', 'Glitchpop 2 (Classic, Phantom, Vandal, Operator, Axe), Origin (Frenzy), Prime 1 (Spectre), Prime 2 (Phantom)		', 'https://drive.google.com/drive/folders/1zf5UYDEgKeSYbOI-NRbwVxP0zm-YPhXN', 'venscarlet07', 'BGMARR006_120243', '10', 'BGMARR003_00000.jpg', 'Available'),
(4, 'BGMARR004', 'Oni 1 (Shorty, Bucky, Guardian, Phantom, Claw), Elderflame (Vandal), Endeavour (Ghost), Prime 1 (Classic, Axe)		', 'https://drive.google.com/drive/folders/1zf5UYDEgKeSYbOI-NRbwVxP0zm-YPhXN', 'Poomsira123', 'BGMARR007_302107', '10', 'BGMARR004_00000.jpg', 'Available'),
(5, 'BGMARR005', 'Ion 1 (Sheriff, Bucky, Phantom, Operator, Sword), Forsaken (Vandal), Oni 1 (Phantom), Reaver 1 (Operator)		', 'https://drive.google.com/drive/folders/1cpnLvm5_bqkB2b9dKnDxGPShiPZqBT6W', 'palmkan051060', 'BGMARR008_120244', '10', 'BGMARR005_00000.jpg', 'Available'),
(6, 'BGMARR006', 'BlastX (Phantom), Elderflame (Judge), Glitchpop 1 (Frenzy), Glitchpop 2 (Vandal), Oni 1 (Guardian, Phantom, Claw), Prime 1 (Spectre), Prism (Spectre, Operator), Spline (Operator)		', 'https://drive.google.com/drive/folders/1bIjm7zpD57jgVDQGVLqnAYIUHWi-kK--', 'FiatZoGood', 'BGMARR009_250544', '10', 'BGMARR006_00000.jpg', 'Available'),
(7, 'BGMARR008', 'Forsaken (Operator), Endeavour (Ghost), Neptune (Vandal), Oni 1 (Phantom), Origin (Vandal), Prime 2 (Phantom), Prelude to chaos (Vandal), Reaver 2 (Karambit), RGX 11Z Pro 2 (Spectre)', 'https://drive.google.com/drive/folders/1ztXxyS5x5vMv-84y0McX-GnkFyOsGJ1V', 'banknattawut2001', 'BGMARR012_120245', '10', 'BGMARR008_00000.jpg', 'Available'),
(8, 'BGMARR009', 'Forsaken (Vandal, Operator), Kohaku & Matsuba (Fan), Magepunk 1 (Ghost), Nebula (Phantom), Oni 1 (Phantom), Prime 1 (Vandal), Reaver 1 (Sheriff), Recon (Balisong), RGX 11Z Pro 1 (Vandal), RGX 11Z Pro 2 (Phantom), Sovereign (Marshal)', 'https://drive.google.com/drive/folders/13MiOar_WLJWzAKzMDJ8YsSbX1iaOl9ZG', 'Nitinon', 'BGMARR013_120246', '10', 'BGMARR009_00000.jpg', 'Available'),
(9, 'BGMARR010', 'Reaver 2 (Ghost, Sperctre, Phantom, Odin, Karambit), BlastX (Phantom), Forsaken (Vandal), RGX 11Z Pro 2 (Phantom)', 'https://drive.google.com/drive/folders/1SUPJjSYu9exLPsVpRBhmzQk6whjWOSqu', 'kukza112', 'BGMARR014_120247', '10', 'BGMARR010_00000.jpg', 'Available'),
(10, 'BGMARR012', 'Celestial (Fan), Endeavour (Operator), Glitchpop 2 (Vandal), Ion 1 (Sheriff), Magepunk 2 (Sheriff), Oni 1 (Phantom), Prime 1 (Classic, Spectre), Reaver 1 (Vandal), Recon (Balisong), Valorant Go! Vol.1 (Melee)', 'https://drive.google.com/drive/folders/1IAxp6UOpsnBefF698gJ8fJl8DfaRktTz', 'weeraponuro2543', 'BGMARR018_120248', '10', 'BGMARR012_00000.jpg', 'Available'),
(11, 'BGMARR013', 'Celestial (Fan), Glitchpop 1 (Dagger), Luxe (Melee), Minima (Spectre), Oni 1 (Bucky), Origin (Vandal), Reaver 1 (Vandal), Recon (Balisong), Sentinels of light (Vandal), Spectrum (Phantom)', 'https://drive.google.com/drive/folders/1V5sXiGYgBQXLA7rjBXRsWsFd73Cm9-8h', 'fenderparin', 'BGMARR019_060452', '10', 'BGMARR013_00000.jpg', 'Available'),
(12, 'BGMARR014', 'Celestial (Fan), Ion 1 (Operator), Magepunk 1 (Spectre), Prime 2 (Phantom), Protocol 781-A (Phantom), Reaver 1 (Vandal), RGX 11Z Pro 1 (Vandal),  Singularity (Sheriff), Sovereign (Ghost), Xenohunter (Knife)', 'https://drive.google.com/drive/folders/1xtc-fpKp79mC6X-XV-RBvF70P49r_3Z4', 'Xmashmallowsx', 'BGMARR020_060456', '10', 'BGMARR014_00000.jpg', 'Available'),
(13, 'BGMARR015', 'Elderflame (Operator), Forsaken (Vandal), Ion 1 (Phantom), Luxe (Operator), Nunca Olvidados (Melee), Oni 1 (Phantom), Prime 1 (Vandal), Prime 2 (Phantom), Reaver 1 (Vandal), Recon (Phantom), Valorant Go! Vol.2 (Melee)', 'https://drive.google.com/drive/folders/1mgu_J9QwXi2w-aDfVkGJAyZzEyc7Xr9f', 'lionelfoei', 'BGMARR021_120248', '10', 'BGMARR015_00000.jpg', 'Available'),
(14, 'BGMARR018', 'Spectrum (Classic, Bulldog, Guardian, Phantom, Melee), BlastX (Spectre), Glitchpop 1 (Frenzy), Prime 1 (Spectre), Protocol 781-A (Phantom), Reaver 1 (Sheriff, Vandal, Operator), Recon (Balisong), RGX 11Z Pro 1 (Vandal), Singularity (Sheriff), Sovereign (Marshal)', 'https://drive.google.com/drive/folders/1biCejSG93CR-8KGU0WrjCcsVMaPUp5Dm', 'liotkukuy123', 'BGMARR026_300632', '15', 'BGMARR018_00000.jpg', 'Available'),
(15, 'BGMARR019', 'Celestial (Fan), Elderflame (Operator), Forsaken (Vandal), Magepunk 1 (Spectre), Prime 1 (Vandal), Prime 2 (Phantom, Karambit), Reaver 1 (Vandal), Recon (Spectre), RGX 11Z Pro 2 (Firefly), Ruination (Ghost, Phantom), Sentinels of light (Sheriff)', 'https://drive.google.com/drive/folders/19f2StEMZSlEyV-es12NDbpZALZZRVEhL', 'pom00lol', 'BGMARR028_120250', '15', 'BGMARR019_00000.jpg', 'Available'),
(16, 'BGMARR020', 'Champions 2022 (Phantom, Knife), Elderflame (Operator), Glitchpop 1 (Judge), Origin (Vandal), Prime 1 (Guardian), Protocol 781-A (Spectre), Reaver 1 (Sheriff)', 'https://drive.google.com/drive/folders/12BJfzrX5wrqLEh2fWgpwjaeQUy6eV9jc', 'Peachhub11', 'BGMARR029_120251', '15', 'BGMARR020_00000.jpg', 'Available'),
(17, 'BGMARR021', 'RGX 11Z Pro 2 (Classic, Spectre, Phantom, Operator, Firefly), Arcane (Sheriff), Elderflame (Operator), Forsaken (Vandal), Magepunk 1 (Marshal), Oni 1 (Phantom), Origin (Vandal), Prime 2 (Odin), Protocol 781-A (Phantom), Reaver 1 (Vandal), Recon (Melee), Snowfall (Classic), Wasteland (Sheriff)', 'https://drive.google.com/drive/folders/1magVfYBTruD4liR8_YCMPvCff9us98vB', 'shiphailaew', 'BGMARR030_120251', '15', 'BGMARR021_00000.jpg', 'Available'),
(18, 'BGMARR022', 'Ion 2 (Frenzy, Spectre, Vandal, Ares, Karambit), Champions 2022 (Phantom), Chrimsonbeast (Hammer), Forsaken (Operator), Neptune (Vandal), Reaver 2 (Phantom), Recon (Phantom), RGX 11Z Pro 1 (Vandal, Katana), Oni 1 (Phantom), Sentinels of light (Sheriff)', 'https://drive.google.com/drive/folders/1UdcNvDAyU-xCi7_5kKkCceV5Qfks5DJg', 'youforever8', 'BGMARR032_221014', '15', 'BGMARR022_00000.jpg', 'Available'),
(19, 'BGMARR024', 'Elderflame (Judge), Forsaken (Classic, Vandal, Operator), Glitchpop 2 (Phantom), Magepunk 1 (Marshal), Minima (Sheriff), Prime 2 (Phantom), Reaver 1 (Sheriff), Recon (Ghost, Spectre, Guardian), RGX 11Z Pro 1 (Vandal, Katana), Valorant Go! Vol.1 (Melee)', 'https://drive.google.com/drive/folders/1xp6r1Z4NP30PsdE6fc2zfIkF7dhcqcaf', 'Itadoriyujij94', 'BGMARR036_120254', '15', 'BGMARR024_00000.jpg', 'Available'),
(20, 'BGMARR025', 'Spectrum (Classic, Bulldog, Guardian, Phantom, Melee), Arcane (Sheriff), Forsaken (Vandal), Oni 1 (Phantom), Origin (Operator), Singularity (Sheriff)		', 'https://drive.google.com/drive/folders/1NCyLPZW_Jh89kZoHqfujQTvdkYOksVNQ', 'beck0203', 'BGMARR037_252347', '15', 'BGMARR025_00000.jpg', 'Available'),
(21, 'BGMARR027', 'BlastX (Odin), Celestial (Fan), Elderflame (Frenzy, Operator, Dagger), Forsaken (Vandal), Glitchpop 1 (Judge), Glitchpop 2 (Classic), Infantry (Guardian), Magepunk 2 (Sheriff, Operator), Nunca Olvidados (Melee), Oni 1 (Phantom), Prime 2 (Karambit), Protocol 781-A (Phantom), Recon (Balisong), Sentinels of light (Vandal), Singularity (Sheriff, Spectre), Valorant Go! Vol.1 (Melee)', 'https://drive.google.com/drive/folders/1Qy-sAqla-zj8iw9nxn4BnDmg4MmGPjMz', 'ulineok02', 'BGMARR040_120254', '20', 'BGMARR027_00000.jpg', 'Available'),
(22, 'BGMARR028', 'BlastX (Odin), Forsaken (Vandal), Glitchpop 1 (Frenzy, Bulldog, Dagger), Glitchpop 2 (Vandal), Ion 1 (Phantom), Origin (Vandal), Prime 1 (Vandal), Radiant Crisis 001 (Phantom), Reaver 1 (Vanalm Operator), RGX 11Z Pro 1 (Vandal), RGX 11Z Pro 2 (Guardian), Oni 1 (Phantom), Singularity (Sheriff, Spectre, Ares), Sovereign (Stinger, Marshal), Spline (Phantom), Team Ace (Vandal), Valorant Go! Vol.1 (Melee)', 'https://drive.google.com/drive/folders/1SPQexkl8q4ZdHkIymf-V6U1J-e0yyYn3', 'Paosupachokk', 'BGMARR041_131810', '20', 'BGMARR028_00000.jpg', 'Available'),
(23, 'BGMARR029', 'Glitchpop 1 (Frenzy, Judge, Bulldog, Odin, Dagger), Chronovoid (Vandal), Elderflame (Operator, Melee), Luxe (Knife), Oni 1 (Shorty, Phantom), Prime 1 (Classic, Spectre, Vandal), Reaver 1 (Sheriff), Reaver 2 (Ghost), Sovereign (Guardian)', 'https://drive.google.com/drive/folders/1E2JjkDtzBRspRmgzP0YizCLrpId8QqEH', 'MikazzaJr', 'BGMARR042_120256', '20', 'BGMARR029_00000.jpg', 'Available'),
(24, 'BGMARR031', 'Champions 2022 (Phantom, Butterfly), BlastX (Phantom), Celestial (Fan), Elderflame (Frenzy, Vandal), Forsaken (Classic, Blade), Glitchpop 2 (Vandal, Operator), Neptune (Vandal), Oni 1 (Phantom), Origin (Blade), Prime 1 (Vandal), Protocol 781-A (Sheriff), Reaver 1 (Vandal), Reaver 2 (Phantom), RGX 11Z Pro 1 (Guardian, Vandal, Katana), RGX 11Z Pro 2 (Phantom, Operator), Ruination (Spectre, Phantom, Blade), Sentinels of light (Vandal), Sovereign (Marshal), Spectrum (Phantom)', 'https://drive.google.com/drive/folders/11HCGLPSbPKwnKPVUfkdho3ITW6W3jgck', 'Sixkyyz', 'BGMARR044_101311', '20', 'BGMARR031_00000.jpg', 'Available'),
(25, 'BGMARR034', 'Snowfall (Classic, Judge, Phantom, Ares, Wand), Elderflame (Dagger), Glitchpop 1 (Frenzy, Odin, Dagger), Magepunk 2 (Ares), Oni 1 (Bucky, Phantom), Origin (Operator), Prime 1 (Vandal), Prism II (Stinger), Reaver 1 (Vandal, Operator), Recon (Phantom), Ruination (Ghost, Guardian), Sensation (Stinger), Sentinels of light (Sheriff, Vandal), Singularity (Spectre, Phantom), Spectrum (Classic, Bulldog, Phantom), Tethered Realms (Prosperity), Valorant Go! Vol.2 (Melee)', 'https://drive.google.com/drive/folders/1jbUQ69cYvoyGtymyVd18BBPnGCAiREDR', 'musiobrfearth', 'BGMARR049_302117', '20', 'BGMARR034_00000.jpg', 'Available'),
(26, 'BGMARR038', 'Ruination (Ghost, Spectre, Guardian, Phantom, Blade), Sentinels of light  (Sheriff, Vandal, Operator, Ares, Relic), Spectrum  (Classic, Bulldog, Guardian, Phantom, Melee), BlastX (Frenzy), Forsaken (Operator), Glitchpop 2 (Vandal), G.U.N (Operator), Nunca Olvidados (Melee), Oni 1 (Phantom), Origin (Vandal), Prime 1 (Classic, Spectre), Prime 2 (Phantom), Reaver 1 (Vandal, Knife), Recon (Phantom), RGX 11Z Pro 1 (Blade), Sovereign (Ghost), Team Ace (Vandal), Valorant Go! Vol.1 (Knife), Valorant Go! Vol.2 (Melee)', 'https://drive.google.com/drive/folders/1XJMy2gRkYYAqd8t7ru0MKQqaaAU81tq0', 'AmaruTwists', 'BGMARR057_302121', '30', 'BGMARR038_00000.jpg', 'Available'),
(27, 'BGMARR039', 'Endeavour (Ghost, Bulldog, Vandal, Operator, Ares), Recon (Ghost, Spectre, Guardian, Phantom, Balisong), RGX 11Z Pro 2 (Classic, Spectre, Phantom, Operator, Firefly), Forsaken (Classic), Glitchpop 2 (Classic), Ion 1 (Bucky), Magepunk 2 (Guardian), Prime 1 (Classic, Vandal), Protocol 781-A (Spectre, Bulldog), Radiant crisis 001 (Phantom), RGX 11Z Pro 1 (Stinge, Vandal, Blade), Ruination (Guardian), Singularity (Sheriff), Spectrum Phantom), Valorant Go! Vol.1 (knife)', 'https://drive.google.com/drive/folders/1kbecUfali0iYjAeNLOBC2pSseKe16_eD', 'Insanesoapman', 'BGMARR060_061422', '30', 'BGMARR039_00000.jpg', 'Available'),
(28, 'BGMARR043', 'Champions 2021 (Vandal, Melee), Forsaken (Classic, Spectre, Vandal, Operator, Melee), Infantry (Ghost, Spectre, Guardian, Operator, Ares), Magepunk 2 (Sheriff, Guardian, Operator, Ares, Melee), Minima (Sheriff, Spectre, Phantom, Operator, Ares), Prime 2 (Frenzy, Bucky, Phantom, Odin, Melee), Protocol 781-A (Sheriff, Spectre, Bulldog, Phantom, Melee), Reaver 1 (Sheriff, Guardian, Vandal, Operator, Melee), RGX 11Z Pro 1 (Frenzy, Stinger, Guardian, Vandal, Melee), Spectrum (Classic, Bulldog, Guardian, Phantom, Melee), Arcane (Sheriff), BlastX (Phantom), Celestial (Melee), Elderflame (Operator), Glitchpop 2 (Vandal), G.U.N (Classic), Magepunk 1 (Spectre, Marshal), Ion 1 (Sheriff), Oni (Phantom), Origin (Vandal), Nunca Olvidados (Melee), Prime 1 (Vandal), Recon (Phantom, Melee), Ruination (Phantom), Sentinels of light (Sheriff, Vandal, Operator), Singularity (Spectre, Phantom), Snowfall (Phantom), Sovereign (Ghost, Stinger), Spline (Spectre), Tethered Realms (Melee)', 'https://drive.google.com/drive/folders/1LF9CPFifvMkjodG9ZH79iPmgdm2Es2hD', 'GGAUTO20', 'BGMARR065_252350', '70', 'BGMARR043_00000.jpg', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `history_tbl`
--

CREATE TABLE `history_tbl` (
  `his_id` int(10) NOT NULL,
  `cli_id` int(11) NOT NULL,
  `bgmarr_id` int(6) NOT NULL,
  `his_hr` int(11) NOT NULL,
  `his_price` int(3) NOT NULL,
  `his_start` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `his_end` time NOT NULL,
  `his_payment` text NOT NULL,
  `his_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `his_status`
--

CREATE TABLE `his_status` (
  `id` int(11) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `his_status`
--

INSERT INTO `his_status` (`id`, `status`) VALUES
(0, 'In progress'),
(1, 'Finished');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Available'),
(2, 'Unavailable');

-- --------------------------------------------------------

--
-- Table structure for table `tblclient`
--

CREATE TABLE `tblclient` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblclient`
--

INSERT INTO `tblclient` (`id`, `fullname`, `useremail`, `pass_word`, `regdate`, `user_status`) VALUES
(1, 'Admin', 'ad@ad.ad', '21232f297a57a5a743894a0e4a801fc3', '2023-12-15 07:19:42', 'A'),
(2, 'Client Client', 'cli@cli.cli', '62608e08adc29a8d6dbc9754e659f125', '2023-12-19 03:04:56', 'C');

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
-- Indexes for table `his_status`
--
ALTER TABLE `his_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
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
  MODIFY `bgmarr_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `history_tbl`
--
ALTER TABLE `history_tbl`
  MODIFY `his_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `his_status`
--
ALTER TABLE `his_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblclient`
--
ALTER TABLE `tblclient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
