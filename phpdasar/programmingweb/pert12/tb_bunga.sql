-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 05:48 PM
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
-- Database: `db_tugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bunga`
--

CREATE TABLE `tb_bunga` (
  `kode` varchar(10) NOT NULL,
  `nmbunga` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `jmlbeli` int(100) NOT NULL,
  `kirim` varchar(50) NOT NULL,
  `jarak` char(50) NOT NULL,
  `pembayaran` varchar(50) NOT NULL,
  `byakirim` int(100) NOT NULL,
  `tharga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_bunga`
--

INSERT INTO `tb_bunga` (`kode`, `nmbunga`, `harga`, `jmlbeli`, `kirim`, `jarak`, `pembayaran`, `byakirim`, `tharga`) VALUES
('AG-003', 'ANGGREK', 12000, 0, '', '', '', 0, 0),
('ML-002', 'MELATI', 8000, 0, '', '', '', 0, 0),
('MW-001', 'MAWAR', 10000, 0, '', '', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bunga`
--
ALTER TABLE `tb_bunga`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
