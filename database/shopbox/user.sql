-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2020 at 12:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopmedz`
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
(1, 'Sanika Zinjad', 'Sanika', '$2y$10$2SZ5VnB0s5su4GufnEvyQ./', '1234ab', '9146619863', '102, Apurva, Ahmednagar'),
(8, 'Zinjad', 'Sanika.17151158', '$2y$10$77Mh10iEQS5n/gdzewvF/.N', '123456y', '9146619863', '102, Apurva, Ahmednagar'),
(9, 'Sanika Zinjad', '17151158', '$2y$10$u0IYd6/mGoC4oNjVP3AKr.e', '1234rt', '2345456868', 'aafdsc dfdsgv'),
(10, 'Sanika Navanath Zinjad', 'Sanika17151158', '$2y$10$kbf5A3rY117OoJUH7xSDgO/', '1234yu', '2345456868', 'erfsg243'),
(11, 'Sanika Navanath Zinjad', 'Sanika Zinjad', '$2y$10$Rkfy.1uE9DBQwmc350VW9el', '1122as', '9864735291', '102, Apurva, Ahmednagar'),
(12, 'Sanika Zinjad', '1234', '$2y$10$HKTL3oiL0QEL5Athxx6QNui', '1234ab', '9146619863', '102, Apurva, Ahmednagar'),
(13, 'sanika', 'sanikazinjad', '$2y$10$FfKsqO5PMsLu0FH.DkS0zuS', 'abc@123', '9146619863', '102, Apurva, Ahmednagar'),
(14, 'Sanika Zinjad', 'Sanikaz', '$2y$10$whwsy9LLhT04uhE3.Rnbuer', 'abc@1234', '9822865192', 'Ahmednagar'),
(15, 'Sanika Zinjad', 'zsanika', '$2y$10$GoYuTcs.obgRMhkdtz.Shes', 'abc@8799', '9822865192', 'Ahmednagar'),
(16, 'Sanika Zinjad', 'sanu', '$2y$10$xaRCM9si0YLCfWFRVtG9yu5', 'abc@099', '9822865192', 'Ahmednagar'),
(17, 'Sanika Zinjad', 'sani', '$2y$10$tZG7fCRBCxqsam5WMr1c.uaI8hXPMwn.fiI8kZdnxZrXDeJ2ibq.y', 'abc@8799', '9146619863', 'Ahmednagar'),
(18, 'Sanika Zinjad', '12345', '$2y$10$ZH1viZWbi3GEo9vDRrVAvOYfVymC8MpY72owBhdbL9uQ9zDDfvGna', '1234@s', '9585720187', 'Anagar'),
(19, 'SNZ', 'SNZ', '$2y$10$0q3oPcrD48lF8Uh0YW2H2O07EjiFtjVekS/cVEOnk0/.vRFLKr/fu', 'asdfgh', '9822865192', 'Anagar'),
(20, 'SNZ', 'SNZD', '$2y$10$2FABF76pbCdL.gHVhrzcAeT3W3lq/o4w8gf1Fy7ErV7QWXr86PUIi', '12345678', '9822865192', 'Anagar'),
(21, 'Sanika Zinjad', 'SNZinjad', '$2y$10$U3iBPYImr4GUpGsefnPJf.YyB0o3PKgdrJF.neZ1VnLmrBiPiwgZ.', 'qwerty', '9146619863', 'ahmednagar'),
(22, 'Sanika Navanath Zinjad', 'Sanikazin', '$2y$10$iD9ser7W19IR/L5mjDMXteEmDyn/gFBEbnHq.L2QpFNZJ8OrkM1S.', 'asdfghj', '9146619863', '102, Apurva, Ahmednagar'),
(23, 'Sanika Zinjad', 'SANIK', '$2y$10$GK/s6.LI/v3gxZXxh3GOhu/.oZ6EsU/7n6CP6yc4rXhNWCQ.2ECGy', '1234asdf', '9146619863', '102, Apurva, Ahmednagar'),
(24, 'Sanika Zinjad', 'SanikaN', '$2y$10$7e59Kk85WmjM0uuaq5JUdOZjgNCmBsee7YQvzU1of2yhHRNvkptem', '123456a', '9146619863', 'Ahmednagar'),
(25, 'Sanika Zinjad', 'sanz', '$2y$10$.LoBNvnBrwrfrwJzUUoYk.brlsy5REmDiaop1/Zby5C84rg.1pIWu', '12345abc', '9822865192', '102, Apurva, Ahmednagar'),
(26, 'Zinjad', 'zinj', '$2y$10$PsmKWeBfGTuwnvVXMEEOjeUUNCrkazBOg5AhdKEezEB7KHaOb2ru2', 'asdcvb', '9146619863', 'Anagar'),
(27, 'Sanika Zinjad', 'saniz', '$2y$10$heRkcjAiZ/JOnzSryHtQ5uvtvULYWpl0MDysSKB4ZeOx6bk/VVsDe', 'sani123', '9146619863', '102, Apurva, Ahmednagar'),
(28, 'Sanika Zinjad', 'zinjs', '$2y$10$POPjYKJfTPrjazWUI.WlyuDqfKlDT/a3N/jndTG5GZ8I/SPWl5TpK', 'asdf123', '9146619863', 'Ahmednagar'),
(29, 'Sanika Navanath Zinjad', 'Manik', '$2y$10$.mDGJYPxWS7QYHn12PB/ruApDT85u7pLY2c6OGb9Llh6YEOxWlLgy', 'poiu7890', '9823415678', 'Nagar'),
(30, 'Sanika Navanath Zinjad', 'iska', '$2y$10$1/elf/WPTcI/2qlW5CaOWO3WCOfYSZF.S/tUN5AC0x690WWEloTQy', 'poiu7890', '9823415678', 'Nagar'),
(31, 'Zinjad', 'Sanika.', '$2y$10$uxa1jCoDWPP3Q1ay1GaV/OzJ8qL0np7RS8XSwwsJ9ComjQTYpFniS', '123ewq', '9146619863', '102, Apurva, Ahmednagar'),
(32, 'JAY', 'jays', '$2y$10$93CvewrMe8dHOStekyZIjuEj3WnBKgvTrsqwzAipzm3Zu/n7yr/Ny', 'asdfrewq', '9146619863', '102, Apurva, Ahmednagar'),
(33, 'Sanika Zinjad', '1715', '$2y$10$aF2gjyYBSbQQMSyL1qaX4.B3OsEM3d2pSdP17Fcq9aWayW/MleEF6', 'zxcdsa', '9146619863', 'Ahmednagar'),
(34, 'Cxsc', 'asdf', '$2y$10$RMbLYtEXKFPP5FO2ArCCRumJiU1pKVGJWwW9fMJlW4qJlV3Cp0Gmm', 'poijkl', '9146619863', 'Ahmednagar'),
(35, 'Sanika Zinjad', 'zxcv', '$2y$10$Nd4fMpiJFtwkuvScyc5cBOaM1GbOdXZQDurYlgX8qDWKfNlSsRvra', 'mnbhjk', '9822865192', '102, Apurva, Ahmednagar'),
(36, 'afcsfqwert', 'qwert', '$2y$10$jgs62up9Ai3bPLcu9syWze/OiCQcS6D9gQBT3mcW1nYOlKb8Jr.ni', 'qwerty', '9146619863', 'Ahmednagar'),
(37, 'zxcvb', 'zxcvb', '$2y$10$Iyf.ixLiEa7ZyZu2rA63P.H.sW7RW3DtRV.aTUhGCurZEW8gPOtyC', 'zxcvbn1', '9876450321', 'ahmed'),
(38, 'Sanika Zinjad', 'sanzi', '$2y$10$VRmn58Sw5MdbcYRrFxzYz..8XCjBrcSWLvG7mfPrkOaSGtuoWoMnm', 'sanzi7', '9864735291', 'Ahmednagar'),
(39, 'Jay Zinjad', 'jzinjad', '$2y$10$pQ0H8HaMIj7rLpT7CDJ5CevS/.DUMvB22f6skjrabN1iCf6Y9Pu6y', 'zinjad1', '9822865192', 'erfsg243'),
(40, 'Sanika N Zinjad', 'sanikanaz', '$2y$10$Lz8PtQQzOITKYHFHN.QZwu7/h9InMmwYSnHTX/50PPyPP2CWO2.zC', 'sanika89', '9865403527', 'Nagar'),
(41, 'Zinjad', 'zinja', '$2y$10$mnjZvaZYUY0e5AOUTY1XJOrUtV3aqelGfQPkDUsCfJ9W5ntG0s4fu', 'zinj890', '9822865192', 'Anagar'),
(42, 'Sanika Navanath Zinjad', 'sanikazn', '$2y$10$e3zEL9EuQwlWfxy2vLBkXeaTTB4WI2Qxsj18zJYi0jVLhbxrv6s9C', 'sanika78', '9146619863', '102, Apurva, Ahmednagar'),
(43, 'sanika', 'saniknz', '$2y$10$zvW5B8lKgqj.ANnKboFCiOHneZrb5foIge5eL1Ehatl12AlT.44tS', 'sani87', '9146619863', '102, Apurva, Ahmednagar'),
(44, 'asdsad', 'asdasd', '$2y$10$LP60Qgzml4h697mORRgj4OTjdqIFyQTOdoy1C8SB2F5VZPqjr5xlm', 'asdfgh', '9146619863', 'Ahmednagar'),
(45, 'Sanika Zinjad', 'zinjadsn', '$2y$10$UxxtUVYfR2632qG1ZqTN7.15YYrQzBDGLRy7Nk8v/AZAApdl7FGTm', 'zinjad87', '9146619863', 'Ahmednagar'),
(46, 'sanika', 'sanzinj', '$2y$10$JgG91.aCyFbWeEfImNy8EugyezN8PwMwJRAMmhCot4S8JLjnHEXsS', 'sanj90', '9146619863', 'Nagar'),
(47, 'Sanika Zinjad', 'jayi', '$2y$10$9I9ZaY6FR2dCZtzqsevMNeqv.yqiM0lcQkDCpvNQ0zBI8h/wCBjqe', 'jayi87', '9146619863', 'Nagar'),
(48, 'Sourabh', 'sonu', '$2y$10$jWQvjpu/V4T/lJPLzdXOouVfRGvpzd2dTWOTdQGohaaasGc9jurvO', 'sonu@123', '8308399146', 'Akluj'),
(49, 'Sourabh', 'SSS', '$2y$10$hNUGIkOduJOwWYmOTPkWa.tCk.ERPyDBu1oELEkBbIvSCilDwYCxa', 'sourabh@00', '9876352109', 'Akluj'),
(50, 'Shopbox', 'shop', '$2y$10$sP3Nsu7Icz/.RhNpah5ASOezkm1iMxQG1JNnSAkPKonVv8y31j9hC', 'shop123', '9876542109', 'Ahmednagar');

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
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
