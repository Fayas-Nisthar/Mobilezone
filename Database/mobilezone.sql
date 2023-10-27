-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 06:21 PM
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
-- Database: `mobilezone`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback` varchar(50) NOT NULL,
  `userID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `phoneID` int(4) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `mobileModel` varchar(30) NOT NULL,
  `storage` varchar(10) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `year` date NOT NULL,
  `condition` varchar(15) NOT NULL,
  `price` varchar(10) NOT NULL,
  `location` varchar(30) NOT NULL,
  `ownership` varchar(15) NOT NULL,
  `description` varchar(100) NOT NULL,
  `imageLocation` varchar(100) NOT NULL,
  `userID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`phoneID`, `brand`, `mobileModel`, `storage`, `ram`, `year`, `condition`, `price`, `location`, `ownership`, `description`, `imageLocation`, `userID`) VALUES
(33, 'Apple', 'iphone 14 pro', '0', '0', '2022-12-20', 'Used - Like New', '100000', 'Erattupetta', 'First Hand', 'no scratches', 'upload/0x0.jpg', 1),
(34, 'Samsung', 'Galaxy s22 Ultra', '0', '0', '2022-09-22', 'Used - Good', '80000', 'poonjar', 'Others', 'no complaints', 'upload/637825486901681363_samsung-galaxy-s22-ultra-review-1.jfif', 38),
(35, 'Samsung', 'Galaxy s22', '0', '0', '2022-07-28', 'Used - Fair', '60000', 'poonjar', 'Others', 'display changed', 'upload/galaxy-s22-angled-shot.webp', 38),
(36, 'Apple', 'iphone 12', '0', '0', '2021-01-20', 'Used - Good', '32000', 'Nadackal', 'Second Hand', 'NO complaints\r\nfull box\r\nneat and good', 'upload/images.jfif', 1),
(37, 'Redmi', 'Redmi 5', '0', '0', '2018-03-04', 'Used - Fair', '3000', 'Theekoy', 'First Hand', 'Speaker complaint', 'upload/Xiaomi-Redmi-5-review-tech2-firstpost-1280-720-2.webp', 40),
(38, 'Realme', 'Realme 9', '0', '0', '2019-11-06', 'Used - Good', '11000', 'Erattupetta', 'First Hand', 'scratches only\r\n1 mnth extra warranty', 'upload/Realme-9-5G-SE-Rear-Design-Camera-Module.jpg', 40),
(40, 'Oppo', 'Reno 7 Pro 5G', '256 GB', '6 gb', '2022-11-21', 'Used - Good', '28349', 'Erattupetta', 'First Hand', 'Full box\r\nno complaints\r\nwarranty remaining', 'upload/Reno-7-Pro-5G-review-with-pros-and-cons-9-scaled.webp', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(4) NOT NULL,
  `phoneID` int(4) NOT NULL,
  `userID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'FAYAS', 'fayas@gmail.com', '123', '0003968120', 'etpa'),
(28, 'admin', 'admin@gmail', '789456', '811', 'sdsdf'),
(38, 'ajin', 'ajin@gmail', 'ajin', '852', 'Kottakatt\r\nPoonjar'),
(39, 'farsin', 'farsin@gmail', 'farsin', '001283692', 'Pala'),
(40, 'midhun', 'midhun@gmail.com', '789', '78865402', 'Theekoy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`phoneID`) USING BTREE,
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `orders_ibfk_1` (`phoneID`),
  ADD KEY `orders_ibfk_2` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `phoneID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD CONSTRAINT `mobiles_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`phoneID`) REFERENCES `mobiles` (`phoneID`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
