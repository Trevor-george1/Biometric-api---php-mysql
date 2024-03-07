-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 07:52 AM
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
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `registration_number` int(30) NOT NULL,
  `id_number` int(25) NOT NULL,
  `membership_number` int(30) NOT NULL,
  `domicile_branch` varchar(50) NOT NULL,
  `registration_staff_number` int(30) NOT NULL,
  `registration_date` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `id_front_photo` varchar(35) NOT NULL,
  `id_back_photo` varchar(45) NOT NULL,
  `finger_print` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`registration_number`, `id_number`, `membership_number`, `domicile_branch`, `registration_staff_number`, `registration_date`, `photo`, `id_front_photo`, `id_back_photo`, `finger_print`) VALUES
(234552, 4, 660016, 'science and tech', 453, '2024-03-05 07:06:59', '', '', '', ''),
(12234, 4567, 9808, 'to', 453, '2024-02-27 09:30:05', '', '', '', ''),
(12234, 4577, 9808, 'to', 453, '2024-02-27 09:50:39', '', '', '', ''),
(234552, 7654, 34, 'ooo', 9876, '2024-02-27 07:53:41', '', '', '', ''),
(234556, 9472, 660016, 'Durk', 3453, '2024-02-24 22:17:05', '', '', '', ''),
(234552, 213123, 66866, 'trev', 456789, '2024-02-21 11:44:47', '', '', '', ''),
(234552, 213124, 66866, 'trev', 456789, '2024-02-24 22:08:55', '', '', '', ''),
(660016, 35782826, 35782826, 'wolf', 7676, '2024-03-07 07:50:15', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
