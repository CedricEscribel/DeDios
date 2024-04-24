-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 01:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dedios`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `ScheduleID` int(11) NOT NULL,
  `UserID` varchar(128) NOT NULL,
  `Date` varchar(128) NOT NULL,
  `ContactNumber` varchar(128) NOT NULL,
  `Department` varchar(128) NOT NULL,
  `Service` varchar(128) NOT NULL,
  `Message` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `Role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`UserID`, `Name`, `Email`, `Password`, `Role`) VALUES
(1, '0', 'Email@gmail.com', '$2y$10$1FALPqOeHveWz6c9PY7RWOChBJRu24mSfdxFakRV89.YBwGzq0OC2', 'user'),
(2, '0', 'sample2@gmail.c', '$2y$10$dH7debbcSjcKUFSd3aBKWeg1uHGD0f95.zHgyITcUBeiLt.IqQgRa', 'user'),
(3, 'sample2', 'sample2@g.', '$2y$10$J6CpaC4dp2d7u3yL3g/mnOMat6sSKZlh9i/e9e7coDqWY.uvTI5Lu', 'user'),
(4, 'Sample2', 'Login2@g', '$2y$10$2i8YSOERLx57rkL692WuLOoP/plpZKT1whVUKsnDJwlznhYfKzcma', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
