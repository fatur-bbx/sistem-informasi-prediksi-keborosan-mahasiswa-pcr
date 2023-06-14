-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 04:04 PM
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
-- Database: `ai_nuka`
--

-- --------------------------------------------------------

--
-- Table structure for table `indextable`
--

CREATE TABLE `indextable` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `olshop` text NOT NULL,
  `nongki` text NOT NULL,
  `makandiluar` text NOT NULL,
  `topup` text NOT NULL,
  `organisasi` text NOT NULL,
  `hasil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indextable`
--

INSERT INTO `indextable` (`id`, `nama`, `olshop`, `nongki`, `makandiluar`, `topup`, `organisasi`, `hasil`) VALUES
(1, 'Nurul Khazanah', 'Sering', 'Sering', 'Sering', 'Sering', 'Sering', 'Boros'),
(2, 'Topig', 'Tidak Pernah', 'Sering', 'Jarang', 'Sering', 'Sering', 'Lumayan Boros');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indextable`
--
ALTER TABLE `indextable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indextable`
--
ALTER TABLE `indextable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
