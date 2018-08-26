-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 10:07 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sreekanth`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(6) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `image` mediumblob,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`id`, `name`, `image`, `price`) VALUES
(1, 'Tshirt', 0x747368697274312e6a7067, 500),
(2, 'Tshirt', 0x747368697274322e6a7067, 800),
(3, 'Tshirt', 0x747368697274332e6a7067, 900),
(4, 'Tshirt', 0x747368697274352e6a7067, 700),
(5, 'Suit', 0x73756974312e6a7067, 1600),
(6, 'Suit', 0x73756974322e6a7067, 1200),
(7, 'Suit', 0x73756974332e6a7067, 1500),
(8, 'Suit', 0x73756974362e6a7067, 2000),
(9, 'Jacket', 0x6a61636b6574312e6a7067, 500),
(10, 'Jacket', 0x6a61636b6574322e6a7067, 900),
(11, 'Jacket', 0x6a61636b6574332e6a7067, 800),
(12, 'Jacket', 0x6a61636b6574342e6a7067, 600),
(13, 'Blazer', 0x626c617a6572312e6a7067, 700),
(14, 'Blazer', 0x626c617a6572322e6a7067, 900),
(15, 'Blazer', 0x626c617a6572332e6a7067, 800),
(16, 'Blazer', 0x626c617a6572342e6a7067, 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
