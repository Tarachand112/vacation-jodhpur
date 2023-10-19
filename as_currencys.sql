-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 03:01 PM
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
-- Database: `protect_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `as_currencys`
--

CREATE TABLE `as_currencys` (
  `id` int(11) NOT NULL,
  `currency_code` varchar(3) NOT NULL,
  `currency_name` varchar(50) NOT NULL,
  `stripe` enum('0','1') NOT NULL DEFAULT '1',
  `paypal` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `as_currencys`
--

INSERT INTO `as_currencys` (`id`, `currency_code`, `currency_name`, `stripe`, `paypal`) VALUES
(1, 'EUR', 'Euro', '1', '1'),
(2, 'AUD', 'Australian Dollar', '1', '1'),
(3, 'GBP', 'British Pound Sterling', '1', '1'),
(4, 'CAD', 'Canadian Dollar', '1', '1'),
(5, 'JPY', 'Japanese Yen', '1', '1'),
(6, 'MXN', 'Mexican Peso', '1', '1'),
(7, 'NOK', 'Norwegian Krone', '1', '1'),
(8, 'SGD', 'Singapore Dollar', '1', '1'),
(9, 'SEK', 'Swedish Krona', '1', '1'),
(10, 'CHF', 'Swiss Franc', '1', '1'),
(11, 'USD', 'US Dollar', '1', '1')

 
--
-- Indexes for dumped tables
--

--
-- Indexes for table `as_currencys`
--
ALTER TABLE `as_currencys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `as_currencys`
--
ALTER TABLE `as_currencys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
