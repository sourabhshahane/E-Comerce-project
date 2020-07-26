-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 02:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(30) NOT NULL,
  `Mno` varchar(10) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `password`, `confirm_password`, `Mno`, `address`) VALUES
(1, 'Sourabh Sunil Shahane', 'Sonu', '$2y$10$Se6tHCNNRKBYn0TtZ3H49OiTb1bfBI54O/id7HdcNQd3OUBlcqe4q', '123456', '8308399146', 'Akluj'),
(2, 'Sanika Navanath Zinjad', 'Sanu', '$2y$10$DpLX41PYMlVAyzfc1qlrveNOlSXJc5yzAboKQfSCAI4hjYpQcZbra', '123@abc', '9146699863', 'Ahmednagar'),
(3, 'Aniruddha Joshi', 'Ani', '$2y$10$w9q6ZNN0V8Cu09fYXhR/5OBiqHQ2DgwoFv4sv.oVusGQD/RY3BJly', '@123456AJ', '9809788989', 'Sangli'),
(4, 'Siddhi Khadatare', 'Sid', '$2y$10$2vFa9aBzTGI9aP7AtvfFXuuwtG7zhbSNVc7oDzlG5bwnC1aOydnIi', 'abc@123', '7865436261', 'Pune');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
