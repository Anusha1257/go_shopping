-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 10:08 AM
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
-- Table structure for table `woman`
--

CREATE TABLE `woman` (
  `id` int(6) NOT NULL COMMENT 'AUTO_INCREMENT',
  `name` varchar(30) DEFAULT NULL,
  `image` mediumblob,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `woman`
--

INSERT INTO `woman` (`id`, `name`, `image`, `price`) VALUES
(1, 'Top', 0x746f7031312e6a7067, 700),
(2, 'Top', 0x746f7031322e6a7067, 800),
(3, 'Top', 0x746f7031332e6a7067, 900),
(4, 'Top', 0x746f7031342e6a7067, 700),
(5, 'Kurta', 0x6b75727461312e6a7067, 1600),
(6, 'Kurta', 0x6b75727461322e6a7067, 1200),
(7, 'Kurta', 0x6b75727461332e6a7067, 1500),
(8, 'Kurta', 0x6b75727461362e6a7067, 2000),
(9, 'Jacket', 0x6a61636b6574362e6a7067, 600),
(10, 'Jacket', 0x6a61636b6574372e6a7067, 900),
(11, 'Jacket', 0x6a61636b6574382e6a7067, 800),
(12, 'Jacket', 0x6a61636b6574392e6a7067, 900),
(13, 'Shrug', 0x7368727567312e6a7067, 1000),
(14, 'Shrug', 0x7368727567322e6a7067, 900),
(15, 'shrug', 0x7368727567332e6a7067, 800),
(16, 'Shrug', 0x7368727567342e6a7067, 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `woman`
--
ALTER TABLE `woman`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
