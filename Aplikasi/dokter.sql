-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2022 at 04:01 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dokter`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_jual` varchar(28) DEFAULT NULL,
  `gambar_produk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `deskripsi`, `harga_beli`, `harga_jual`, `gambar_produk`) VALUES
(17, 'Dr. Nita ,Sp.BA', 'Bedah Anak', NULL, '10.00-12.00', '943-dk1.png'),
(18, 'Dr. Ayana,Sp.OG', 'Spesialis Kandungan', NULL, '13.30-15.00', '697-dk2.png'),
(19, 'Dr.Akbar,Sp.P', 'Spesialis Paru', NULL, '19.00-21.00', '58-dk8.png'),
(20, 'Dr.Pudji,Sp.An', 'Spesialis Anestesi', NULL, '20.00-20.45', '941-dk7.png'),
(21, 'Dr.Corla,Sp.M', 'Spesialis Mata', NULL, '07.00-09.00', '763-dk4.png'),
(22, 'Dr.Lesti,Sp.JT', 'Jantung & Pembuluh Darah', NULL, '09.00-11.00', '570-dk9.png'),
(23, 'Dr.Indah,SpKJ', 'Spesialis Kedokteran Jiwa', NULL, '12.00-16.00', '506-dk6.png'),
(24, 'Dr. Zico,Sp.S', 'Spesialis Gigi', NULL, '13.00-15.45', '112-dk10.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
