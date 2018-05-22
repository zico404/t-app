-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 12:07 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `t-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(7) NOT NULL,
  `user_id` varchar(12) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `password` varchar(70) NOT NULL,
  `picture` varchar(17) NOT NULL,
  `role` varchar(10) NOT NULL,
  `user_ip` varchar(20) NOT NULL,
  `validated` varchar(7) NOT NULL DEFAULT 'false',
  `reg_time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `firstname`, `lastname`, `email`, `gender`, `phone`, `address`, `password`, `picture`, `role`, `user_ip`, `validated`, `reg_time`) VALUES
(1, 'WQ2bCM8013', 'zico', 'mighty', 'zicomighty@gmail.com', '', '', '', '$2y$10$PCBc0rOxjMF5H5Wdx1hkg.Y1wydGW2Jp0XO6PqwFhoBxNds3nXVh.', '', 'tailor', '::1', 'false', 1526978013),
(2, 'DEZUeC0912', 'ezim', 'chinedu', 'ezimchinedu@gmail.com', '', '', '', '$2y$10$6azqU9n0lxbgWd6KCS8Z..RvcR29wo9rneVGBh4Rbml.UBWsRUe2O', '', 'client', '::1', 'false', 1526980913),
(3, 'CSBsgT1576', 'dave', 'williams', 'zicomighty2@gmail.com', '', '', '', '$2y$10$MDkMvmXjePPk.bZhQ8DzM.0yd3UG9GcAfzOaD1efhxb44eEsbRrbG', '', 'tailor', '::1', 'false', 1526981577),
(4, 'w0i6ea3639', 'zico', 'zico', 'zico@gmail.com', '', '', '', '$2y$10$b.ZGYEVObECLTuT.LBAXB.t9Aw3hY3uJPNhli.hmDfKRaat/sCp4u', '', 'tailor', '::1', 'false', 1526983639);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
