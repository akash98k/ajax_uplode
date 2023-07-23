-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 07:38 PM
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
-- Database: `user_info_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(250) NOT NULL,
  `day` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `day`, `month`, `year`, `gender`, `course`, `address`, `image`, `status`) VALUES
(39, 'tyguh', 'gfhj', 'sdfg@sdfg.sdgf', '$2y$10$YweBJUrnzww1xqUWI5j7YeS834ik7kmSw6y6VhP8AIMPYokQdZuhK', '3', '02', '2001', 'male', 'bsc,mca,msc', '', '', 1),
(40, 'cvb', 'xcvgb', 'zxg@dfgh.cgh', '$2y$10$m6esrCEWjZA1B9yaSN.qPeHb.wCRsl1A..6iXDMP6Oah7KngkV5S2', '10', '03', '2002', 'other', 'bca,bsc,mca,msc', '', '', 1),
(51, 'Hiran', 'Nandi', 'hi@gm.co', '$2y$10$K4uBDxNZjSpYSOBzcPKXn.s0lbasNAR92bdVYJ8Xpz74V.hK3X9eK', '5', '04', '2005', 'male', 'bca,bsc', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
