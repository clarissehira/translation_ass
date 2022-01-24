-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 08:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guhindura`
--

-- --------------------------------------------------------

--
-- Table structure for table `indimi`
--

CREATE TABLE `indimi` (
  `id` int(11) NOT NULL,
  `variable` varchar(30) NOT NULL,
  `kinyarwanda` varchar(30) NOT NULL,
  `french` varchar(30) NOT NULL,
  `english` varchar(30) NOT NULL,
  `swahili` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `indimi`
--

INSERT INTO `indimi` (`id`, `variable`, `kinyarwanda`, `french`, `english`, `swahili`) VALUES
(1, 'V_Gura', 'Kugura', 'Acheter', 'Buy', 'kununua'),
(2, 'V_Rangura', 'Kurangura', 'achat', 'Purchase', 'kununua'),
(3, 'V_Tuma', 'Tumiza', 'commander', 'Order', 'agizo'),
(4, 'V_Gurisha', 'Gurisha', 'Vendre', 'Sell', 'Uza'),
(5, 'V_Bara', 'Kubara', 'Compter', 'Count', 'hesabu'),
(6, 'V_Reba', 'Kureba', 'Afficher', 'Show', 'onyesha'),
(19, 'V_nyungu', 'Inyungu', 'Profit', 'Profit', 'Faida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `indimi`
--
ALTER TABLE `indimi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `indimi`
--
ALTER TABLE `indimi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
