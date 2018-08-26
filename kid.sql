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
-- Table structure for table `kid`
--

CREATE TABLE `kid` (
  `id` int(6) NOT NULL COMMENT 'AUTO_INCREMENT',
  `name` varchar(30) DEFAULT NULL,
  `image` mediumblob,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kid`
--

INSERT INTO `kid` (`id`, `name`, `image`, `price`) VALUES
(1, 'Jacket', 0x6a61636b657431312e6a7067, 500),
(2, 'Jacket', 0x6a61636b657431322e6a7067, 800),
(3, 'Jacket', 0x6a61636b657431332e6a7067, 900),
(4, 'Jacket', 0x6a61636b657431342e6a7067, 700),
(5, 'Sherwani', 0x7368657277616e69332e6a7067, 2000),
(6, 'Sherwani', 0x7368657277616e69342e6a7067, 2100),
(7, 'Sherwani', 0x7368657277616e69352e6a7067, 1950),
(8, 'Sherwani', 0x7368657277616e69372e6a7067, 2120),
(9, 'Top', 0x746f70312e6a7067, 600),
(10, 'Top', 0x746f70322e6a7067, 700),
(11, 'Top', 0x746f70332e6a7067, 800),
(12, 'Top', 0x746f70342e6a7067, 900),
(13, 'Dress', 0x6472657373312e6a7067, 1100),
(14, 'Dress', 0x6472657373322e6a7067, 1500),
(15, 'Dress', 0x6472657373332e6a7067, 1200),
(16, 'Dress', 0x6472657373342e6a7067, 800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kid`
--
ALTER TABLE `kid`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
