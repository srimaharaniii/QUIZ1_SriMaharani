-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 05:28 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz1_srimaharani`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `id` int(11) NOT NULL,
  `nidn` varchar(35) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `rumpun` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`id`, `nidn`, `nama_lengkap`, `rumpun`, `tempat_lahir`, `tgl_lahir`, `email`) VALUES
(1, '1110009999', 'Puan Maharani', 'Islam', 'Jakarta', '2024-11-09', 'puanmaharani@gmail.com'),
(2, '1110009999', 'Puan Maharani', 'Islam', 'Jakarta', '2024-11-09', 'puanmaharani@gmail.com'),
(3, '1110009999', 'Sri maharani', 'Islam', 'aceh singkil', '2024-11-09', 'srimaahaarani@gmail.com'),
(4, '111222777999', 'Sri Maharani', 'Kristen', 'Aceh Singkil', '2024-11-09', 'srimaahaarani@gmail.com'),
(5, '1110009999', 'Puan Maharani', 'Komputer', 'Jakarta', '2024-11-09', 'puanmaharani@gmail.com'),
(6, '111222777999', 'sri maharani', 'Komputer', 'aceh singkil', '2024-11-09', 'srimaahaarani@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
