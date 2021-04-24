-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 12:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lat_dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblmhs`
--

CREATE TABLE `tblmhs` (
  `Nim` int(9) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Job_date` date NOT NULL,
  `Age` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmhs`
--

INSERT INTO `tblmhs` (`Nim`, `FirstName`, `LastName`, `Job_date`, `Age`) VALUES
(1, 'Feri', 'Irawan', '2020-10-28', 20),
(2, 'karna', 'karni', '2019-05-01', 21),
(3, 'Diki', 'Setiawan', '2018-05-01', 22),
(4, 'abdul', 'basit', '2018-11-01', 19),
(5, 'mul', 'yana', '2017-08-09', 23);

-- --------------------------------------------------------

--
-- Table structure for table `tblnilai`
--

CREATE TABLE `tblnilai` (
  `nim` int(9) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `matakuliah` varchar(20) NOT NULL,
  `uts` float(5,2) NOT NULL,
  `uas` float(5,2) NOT NULL,
  `tugas` float(5,2) NOT NULL,
  `jmlhadir` int(2) NOT NULL,
  `nilaiakhir` int(11) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnilai`
--

INSERT INTO `tblnilai` (`nim`, `nama_mhs`, `matakuliah`, `uts`, `uas`, `tugas`, `jmlhadir`, `nilaiakhir`, `grade`, `keterangan`) VALUES
(171000008, 'Feri Irawan', 'Teknik Informatika', 30.00, 40.00, 20.00, 100, 100, 'A', 'LULUS'),
(179000008, 'Andre', 'Informatika', 27.00, 36.00, 18.00, 100, 91, 'A', 'LULUS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblmhs`
--
ALTER TABLE `tblmhs`
  ADD PRIMARY KEY (`Nim`);

--
-- Indexes for table `tblnilai`
--
ALTER TABLE `tblnilai`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblmhs`
--
ALTER TABLE `tblmhs`
  MODIFY `Nim` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblnilai`
--
ALTER TABLE `tblnilai`
  MODIFY `nim` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179000009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
