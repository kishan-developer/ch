-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2024 at 11:52 AM
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
-- Database: `riya`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`, `image`) VALUES
(1, 'llllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllllll', 'bgi.png'),
(2, 'ooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', 'cr.png');

-- --------------------------------------------------------

--
-- Table structure for table `ac`
--

CREATE TABLE `ac` (
  `id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ac`
--

INSERT INTO `ac` (`id`, `image`) VALUES
(1, 'ac1.jpeg'),
(2, 'ac2.jpeg'),
(3, 'ac3.jpeg'),
(4, 'ac4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`, `name`) VALUES
(1, '123456', 'nikhil');

-- --------------------------------------------------------

--
-- Table structure for table `admit`
--

CREATE TABLE `admit` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tracking_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `image`) VALUES
(23, 'js7.jpeg'),
(24, 'js8.jpeg'),
(25, 'js9.jpeg'),
(30, 'WhatsApp Image 2024-09-29 at 6.03.00 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `cert`
--

CREATE TABLE `cert` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tracking_number` varchar(100) NOT NULL,
  `hindhi2` varchar(100) NOT NULL,
  `hindhi3` varchar(100) NOT NULL,
  `english` varchar(100) NOT NULL,
  `english2` varchar(100) NOT NULL,
  `english3` varchar(100) NOT NULL,
  `science1` varchar(100) NOT NULL,
  `science3` varchar(100) NOT NULL,
  `gk` varchar(100) NOT NULL,
  `social` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cert`
--

INSERT INTO `cert` (`id`, `name`, `email`, `mobile`, `pincode`, `image`, `tracking_number`, `hindhi2`, `hindhi3`, `english`, `english2`, `english3`, `science1`, `science3`, `gk`, `social`) VALUES
(4, 'swati', 'swati@gmail.com', '9696656966', '276404', 'js9.jpeg', '123456', '96', '96', '56', '56', '45', '63', '23', '56', '45'),
(5, 'nikhil shrivastava', 'nikhil@gmail.com', '07269022906', '2345', 'img', '555', '56', '89', '85', '', '52', '22', '22', '22', '67'),
(6, 'swati', 'swati@gmail.com', '9696569696', '969696', 'gltt.jpeg', '9696', '56', '89', '85', '', '52', '22', '22', '22', '67');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'nikhil', 'nikhil@gmail.com', 'nnn', 'vvvvvv'),
(2, 'swati', 'swati@gmail.com', 'hiii', 'hii how are yoy '),
(3, 'swati', 'swati@gmail.com', 'hiii', 'hii how are yoy '),
(4, 'swati', 'swati@gmail.com', 'hiii', 'hii how are yoy '),
(5, 'nikhil shrivastava', 'nikhil@gmail.com', '07269022906', '2345'),
(6, 'nikhil shrivastava', 'nikhil@gmail.com', '07269022906', '2345'),
(7, 'nikhil shrivastava', 'nikhil@gmail.com', '07269022906', '2345');

-- --------------------------------------------------------

--
-- Table structure for table `firstscrollimage`
--

CREATE TABLE `firstscrollimage` (
  `id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `firstscrollimage`
--

INSERT INTO `firstscrollimage` (`id`, `image`) VALUES
(8, 'WhatsApp Image 2024-09-29 at 6.02.47 AM.jpeg'),
(9, 'WhatsApp Image 2024-09-29 at 6.02.48 AM (1).jpeg'),
(10, 'WhatsApp Image 2024-09-29 at 6.02.48 AM.jpeg'),
(11, 'WhatsApp Image 2024-09-29 at 6.02.49 AM (1).jpeg'),
(12, 'WhatsApp Image 2024-09-29 at 6.02.49 AM.jpeg'),
(13, 'WhatsApp Image 2024-09-29 at 6.02.50 AM.jpeg'),
(16, 'WhatsApp Image 2024-09-29 at 6.02.52 AM (2).jpeg'),
(17, 'WhatsApp Image 2024-09-29 at 6.02.52 AM (1).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `village` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `email`, `mobile`, `address`, `pincode`, `village`) VALUES
(1, 'nikhil shrivastava', 'nikhil@gmail.com', '07269022906', 'naithi azamgrah', '2345', 'vvvvv'),
(2, 'nikhil shrivastava', 'nikhil@gmail.com', '07269022906', 'naithi azamgrah', '2345', 'vvvvv'),
(3, 'nikhil shrivastava', 'nikhil@gmail.com', '07269022906', 'naithi azamgrah', '2345', 'vvvvv');

-- --------------------------------------------------------

--
-- Table structure for table `form_submissions`
--

CREATE TABLE `form_submissions` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `aadhaar` varchar(12) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `profession` varchar(50) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `full_address` text DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_submissions`
--

INSERT INTO `form_submissions` (`id`, `name`, `dob`, `sex`, `aadhaar`, `contact`, `email`, `country`, `profession`, `office_address`, `full_address`, `education`, `photo`) VALUES
(7, 'suraj ', '0000-00-00', 'Female', '896569656965', '9696969696', 'nikhil@gmail.com', 'United Kingdom', 'komm', 'naithi azamgrah', 'naithi azamgrah\r\ngggg', 'B.tech', 'team1.png'),
(8, 'dilpi', '0000-00-00', 'Female', '896569656965', '9696969696', 'nikhil@gmail.com', 'Barbados', 'komm', 'villllll', 'villllll', 'B.tech', 'cont.jpeg'),
(9, 'dilpi', '0000-00-00', 'Female', '896569656965', '9696969696', 'nikhil@gmail.com', 'Barbados', 'komm', 'villllll', 'villllll', 'B.tech', 'cont.jpeg'),
(10, 'jitu', '0000-00-00', 'Female', '896569656965', '9696969696', 'nikhil@gmail.com', 'India', 'ggg', 'naithi azamgrah', 'naithi azamgrah', 'mca', 'jp.jpeg'),
(11, 'jitu', '0000-00-00', 'Female', '896569656965', '9696969696', 'nikhil@gmail.com', 'India', 'ggg', 'naithi azamgrah', 'naithi azamgrah', 'mca', 'jlogo.jpeg'),
(12, 'jitendra kumar', '2002-02-21', 'Male', '896569656965', '9759521466', 'jbaghel906@gmail.com', 'India', 'ggg', 'naithi azamgrah', 'gyugeyegdygduys', 'B.tech', 'jabt.jpeg'),
(13, 'Aman', '0000-00-00', 'Female', '3454455444', '345444444444444', 'nikhishrivastav72@gmail.com', 'India', 'sssssff', 'mubarakpur', 'mubarakpur', 'B.tech', 'images (22).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE `gallary` (
  `id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`id`, `image`, `content`) VALUES
(25, 'gt.jpeg', '');

-- --------------------------------------------------------

--
-- Table structure for table `icard`
--

CREATE TABLE `icard` (
  `tracking_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `icard`
--

INSERT INTO `icard` (`tracking_number`) VALUES
('123456');

-- --------------------------------------------------------

--
-- Table structure for table `icardd`
--

CREATE TABLE `icardd` (
  `id` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pincode` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tracking_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `icardd`
--

INSERT INTO `icardd` (`id`, `name`, `email`, `mobile`, `pincode`, `image`, `tracking_number`) VALUES
(1, 'nikhil shrivastava', 'nikhil@gmail.com', '07269022906', '2345', 'blog.jpeg', '6363'),
(2, 'nikhil shrivastava', 'nikhil@gmail.com', '07269022906', '2345', 'blog.jpeg', '6363');

-- --------------------------------------------------------

--
-- Table structure for table `kitchen`
--

CREATE TABLE `kitchen` (
  `id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kitchen`
--

INSERT INTO `kitchen` (`id`, `image`) VALUES
(1, 'k.jpeg'),
(2, 'k1.jpeg'),
(3, 'k2.jpeg'),
(4, 'k3.jpeg'),
(5, 'k4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pest`
--

CREATE TABLE `pest` (
  `id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pest`
--

INSERT INTO `pest` (`id`, `image`) VALUES
(1, 'p1.jpeg'),
(2, 'p2.jpeg'),
(3, 'p3.jpeg'),
(4, 'p4.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `riya`
--

CREATE TABLE `riya` (
  `id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riya`
--

INSERT INTO `riya` (`id`, `image`) VALUES
(1, 'u1.jpg'),
(2, 'u2.jpg'),
(3, 'u3.jpg'),
(4, 's45.jpg'),
(5, 's46.jpg'),
(6, 's47.jpg'),
(7, 'c1.jpg'),
(8, 'c2.jpg'),
(9, 'c3.jpg'),
(10, 'c4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`) VALUES
(56, 'ab.png'),
(61, 'rr.png'),
(62, 'Footer.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ac`
--
ALTER TABLE `ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admit`
--
ALTER TABLE `admit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cert`
--
ALTER TABLE `cert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firstscrollimage`
--
ALTER TABLE `firstscrollimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_submissions`
--
ALTER TABLE `form_submissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icardd`
--
ALTER TABLE `icardd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kitchen`
--
ALTER TABLE `kitchen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pest`
--
ALTER TABLE `pest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riya`
--
ALTER TABLE `riya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ac`
--
ALTER TABLE `ac`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admit`
--
ALTER TABLE `admit`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cert`
--
ALTER TABLE `cert`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `firstscrollimage`
--
ALTER TABLE `firstscrollimage`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form_submissions`
--
ALTER TABLE `form_submissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `icardd`
--
ALTER TABLE `icardd`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kitchen`
--
ALTER TABLE `kitchen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pest`
--
ALTER TABLE `pest`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `riya`
--
ALTER TABLE `riya`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
