-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2025 at 05:06 PM
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
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_Name` varchar(100) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_Name`, `Admin_Password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `biling`
--

CREATE TABLE `biling` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `period` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biling`
--

INSERT INTO `biling` (`id`, `name`, `period`, `price`) VALUES
(1234, '', '26/12/2002', ''),
(1234, '', '26/12/2002', ''),
(1234, '', '26/12/2002', ''),
(1234, '', '26/12/2002', ''),
(1234, '', '26/12/2002', ''),
(1234, '', '26/12/2002', ''),
(1, 'madhav', '26/12/2002', '222'),
(2, 'durgesh', '25/6/2003', '5000'),
(2, 'durgesh', '25/6/2003', '5000'),
(2, 'durgesh', '25/6/2003', '5000'),
(2, 'durgesh', '25/6/2003', '5000'),
(2, 'durgesh', '25/6/2003', '5000'),
(2, 'durgesh', '25/6/2003', '5000'),
(2, 'durgesh', '25/6/2003', '5000'),
(2, 'durgesh', '25/6/2003', '5000'),
(2, 'durgesh', '25/6/2003', '5000'),
(1234, '', '26/12/2002', ''),
(0, '', '', ''),
(3, 'dhruv singh', '12-02-2024', '150');

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `DATE` varchar(20) NOT NULL,
  `EXPERIENCE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`ID`, `NAME`, `DATE`, `EXPERIENCE`) VALUES
(1, 'singh divyanshu', '', '1year+'),
(0, '', '', ''),
(0, '', '', ''),
(1, 'singh divyanshu', '', '1year+'),
(1, 'singh divyanshu', '', '1year+'),
(1, 'singh divyanshu', '', '1year+'),
(1, 'singh divyanshu', '', '1year+'),
(1, 'singh divyanshu', '', '1year+'),
(1, 'singh divyanshu', '', '1year+'),
(1, 'singh divyanshu', '26/5/2001', '1year+');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `NAME` int(11) NOT NULL,
  `DATE` int(11) NOT NULL,
  `D-O-B` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `DATE` varchar(20) NOT NULL,
  `D-O-B` varchar(20) NOT NULL,
  `PHONE` varchar(20) NOT NULL,
  `COACH` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `NAME`, `DATE`, `D-O-B`, `PHONE`, `COACH`) VALUES
(1, 'sammer', '25/05/2023', '02/05/2002', '1111111111', 'sahil'),
(2, 'mishra aman', '25/06/2023', '02/02/2000', '2222222222', 'dm'),
(0, '', '', '', '258285', ''),
(0, 'singh anuj', '20/04/2023', '30/04/2005', '11111111111', 'Amar yadav'),
(0, 'singh anuj', '20/04/2023', '30/04/2005', '11111111111', 'Amar yadav'),
(2, 'singh anuj', '20/04/2023', '30/04/2005', '11111111111', 'Amar yadav'),
(2, 'singh anuj', '20/04/2023', '30/04/2005', '11111111111', 'Amar yadav'),
(3, 'SHARMA DURGESH', '30/04/2024', '30/06/2002', '9987523149', 'Amar yadav');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`id`, `name`, `date`, `dob`, `phone`, `email`) VALUES
(1, '0', '12', '20', '1234567890', '0'),
(1, 'dhruv singh', '12/06/2023', '20/04/2000', '1234567890', 'dhruv@example.com'),
(1, 'sameer shaikh', '12/06/2023', '20/04/2000', '1234567890', 'sameer@example.com'),
(3, 'ankit singh', '30/02/2024', '30/06/2003', '12345678900', 'akash');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `email`, `password`) VALUES
(0, 'sameer shaikh', 'sameer@example.com', '$2y$10$7XRhQZG./ZwCNUQs3qkT1.CqEIbjJfdntDYEeWUGW9KiIfFrvXoR6'),
(0, 'Administrator', 'Administrator@Admin.com', '$2y$10$9aQ0IBCDi0kQfU3ZJ.zsrO.BzTtx.Ol.dfAUcUGmRXOOzWsWW4OM.'),
(0, 'DURGESH SHARMA', 'dmsharma9987@gmail.com', '$2y$10$oTmeWhFoGsU6J2RD7Tyz8uniakyPVqcOtKc4H8J2R1nKam5RD6GEi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
