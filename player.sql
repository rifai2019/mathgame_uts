-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 03:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `skor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`id`, `nama`, `email`, `skor`) VALUES
(1, 'Amir', 'amirsragen@gmail.com', 80),
(2, 'Habib', 'habib2020@gmail.com', 140),
(3, 'Faris', 'farisklaten@gmail.com', 70),
(4, 'Indah', 'indahfisika@gmail.com', 60),
(5, 'Mila', 'mila20@gmail.com', 100),
(6, 'Nikola', 'nikolaaja@gmail.com', 90),
(7, 'Sinta', 'sintakopma@gmail.com', 80),
(8, 'Sulastri', 'sulastrisiap@gmail.com', 90),
(9, 'Diki', 'dikimath@gmail.com', 200),
(46, '', '', 50),
(47, '', '', 50),
(48, '', '', 50),
(49, '', '', 50),
(50, '', '', 50),
(51, '', '', 50),
(52, '', '', 50),
(53, '', '', 50),
(54, '', '', 50),
(55, '', '', 50),
(56, '', '', 50),
(57, '', '', 50),
(58, '', '', 50),
(59, '', '', 50),
(60, '', '', 50),
(61, '', '', 50),
(62, '', '', 50),
(63, '', '', 50),
(64, '', '', 0),
(65, '', '', 0),
(66, '', '', 0),
(67, '', '', 0),
(68, '', '', 0),
(69, '', '', 0),
(70, '', '', 0),
(71, '', '', 0),
(72, '', '', 0),
(73, '', '', 0),
(74, '', '', 0),
(75, '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
