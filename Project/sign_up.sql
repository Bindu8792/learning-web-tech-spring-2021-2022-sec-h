-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 06:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sign_up`
--

-- --------------------------------------------------------

--
-- Table structure for table `doc_table`
--

CREATE TABLE `doc_table` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doc_table`
--

INSERT INTO `doc_table` (`first_name`, `last_name`, `email`, `password`) VALUES
('Admin', 'Admin', 'admin@gmail.com', 'admin'),
('Kamran', 'Saifullah', 'dfgh@dfghj.com', 'sdfgh'),
('Mark', 'Don', 'ghjnm@tyui', 'dfghjkl'),
('test', 'rest', 'pest@rest', '1234'),
('reqreq', 'req', 're@ghj.com', 'tfhjg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doc_table`
--
ALTER TABLE `doc_table`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
