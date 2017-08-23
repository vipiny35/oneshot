-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 23, 2017 at 04:42 PM
-- Server version: 5.7.19-0ubuntu0.17.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oneshot`
--

-- --------------------------------------------------------

--
-- Table structure for table `shots`
--

CREATE TABLE `shots` (
  `id` int(11) NOT NULL,
  `url1` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shots`
--

INSERT INTO `shots` (`id`, `url1`, `msg`) VALUES
(1, 'RfeWyjV', 'erre'),
(2, '5q1O0y3', 'ererere'),
(3, 'XMEjA3z', 'erer'),
(4, 'Pnk5sjc', 'ererer'),
(5, 'hdceNYy', 'errer'),
(6, 'wvnNd84', 'erreer'),
(7, 'q7ABRJS', 'erer'),
(8, 'F1kenWY', 'erere'),
(9, 'Ly7Xgfh', 'erer'),
(10, 'kHfpohv', ''),
(11, 'SlZjXRI', 'erer'),
(12, 'nfyNT8z', 'er'),
(13, '1Uv0phq', 'ere'),
(14, 'skUuFYV', 'erer'),
(15, 'EtIk8cl', 'er'),
(16, '4TcQn25', 'er'),
(17, '541UW8t', 'er'),
(18, 'eXPEaSV', 'ERE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shots`
--
ALTER TABLE `shots`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shots`
--
ALTER TABLE `shots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
