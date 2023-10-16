-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 09:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmf`
--

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `authorization_number` int(11) NOT NULL,
  `employment_name` varchar(30) NOT NULL,
  `id_number` int(10) NOT NULL,
  `date_birth` date NOT NULL,
  `date_employ` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employment_categories`
--

CREATE TABLE `employment_categories` (
  `id` int(11) NOT NULL,
  `id_employment` int(11) NOT NULL,
  `id_categories` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainer_skill`
--

CREATE TABLE `trainer_skill` (
  `id` int(11) NOT NULL,
  `categories` varchar(4) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainer_skill`
--

INSERT INTO `trainer_skill` (`id`, `categories`, `detail`) VALUES
(1, 'BI', 'Perform Teaching basic training'),
(2, 'BE', 'Perform Examine basic training'),
(3, 'BPI', 'Perform practical basic training'),
(4, 'BPA', 'Perform assess pract. basic training'),
(5, 'TI', 'Perform teaching type training'),
(6, 'TE', 'Perform examine type training'),
(7, 'TPI', 'Perform practical type training'),
(8, 'TPA', 'Perform assess pract. type training'),
(9, 'GT', 'Perform teaching for general/special training');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(5, 'testing', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id_number`),
  ADD UNIQUE KEY `authorization_number` (`authorization_number`);

--
-- Indexes for table `employment_categories`
--
ALTER TABLE `employment_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_employment` (`id_employment`),
  ADD KEY `id_categories` (`id_categories`);

--
-- Indexes for table `trainer_skill`
--
ALTER TABLE `trainer_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employment_categories`
--
ALTER TABLE `employment_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainer_skill`
--
ALTER TABLE `trainer_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employment_categories`
--
ALTER TABLE `employment_categories`
  ADD CONSTRAINT `employment_categories_ibfk_1` FOREIGN KEY (`id_employment`) REFERENCES `employment` (`id_number`),
  ADD CONSTRAINT `employment_categories_ibfk_2` FOREIGN KEY (`id_categories`) REFERENCES `trainer_skill` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
