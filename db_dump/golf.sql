-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 03:40 AM
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
-- Database: `golf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `IdAdmin` int(10) NOT NULL,
  `NamaAdmin` varchar(20) NOT NULL,
  `KataLaluan` varchar(10) NOT NULL,
  `EmailAdmin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IdAdmin`, `NamaAdmin`, `KataLaluan`, `EmailAdmin`) VALUES
(1, 'Alex', 'password', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `IdPelanggan` int(8) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `PKataLaluan` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`IdPelanggan`, `Nama`, `PKataLaluan`, `Email`) VALUES
(9, 'Kim Turtle Rabbit Jisoo', 'password', 'jichu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tempahan`
--

CREATE TABLE `tempahan` (
  `Id` int(8) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `padanggolf` text NOT NULL,
  `masa` time NOT NULL,
  `tarikh` date NOT NULL,
  `method` text NOT NULL,
  `bank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempahan`
--

INSERT INTO `tempahan` (`Id`, `user_email`, `padanggolf`, `masa`, `tarikh`, `method`, `bank`) VALUES
(103, 'jichu@gmail.com', 'Link', '10:30:00', '2021-01-26', 'Online Banking', 'Maybank');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`IdPelanggan`);

--
-- Indexes for table `tempahan`
--
ALTER TABLE `tempahan`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `IdAdmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `IdPelanggan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tempahan`
--
ALTER TABLE `tempahan`
  MODIFY `Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
