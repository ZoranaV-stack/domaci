-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 01:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vodjenje_prodaje`
--

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` varchar(3) NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` decimal(10,0) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(1, '123', 3, '660', '2021-06-17'),
(2, '123', 3, '600', '2021-05-01'),
(3, '123', 3, '660', '2021-06-17'),
(4, '124', 3, '396', '2021-06-17'),
(5, '123', 3, '660', '2021-06-17'),
(6, '125', 2, '600', '2021-06-16'),
(7, '123', 3, '660', '2021-06-17'),
(8, '125', 3, '900', '2021-06-16'),
(9, '126', 5, '1250', '2021-05-01'),
(10, '123', 3, '600', '2021-06-16'),
(12, '789', 20, '4400', '2021-06-17'),
(13, '789', 40, '11000', '2021-06-17'),
(14, '789', 10, '2420', '2021-06-17'),
(15, '776', 30, '1500', '2021-05-01'),
(16, '761', 6, '480', '2021-06-15'),
(17, '761', 2, '160', '2021-06-16'),
(18, '761', 3, '240', '2021-06-18'),
(19, '123', 5, '50', '2021-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(3) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
('123', 'cokolada', '200'),
('124', 'banane', '120'),
('125', 'pistaci', '300'),
('126', 'maline', '250'),
('761', 'beli luk', '80'),
('776', 'crni luk', '50'),
('789', 'paradajz', '200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
