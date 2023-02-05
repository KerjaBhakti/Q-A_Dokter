-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 06:45 AM
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
-- Table structure for table `buat_janji`
--

CREATE TABLE `buat_janji` (
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `umur` int(4) NOT NULL,
  `alamat` text NOT NULL,
  `hari` varchar(10) NOT NULL,
  `dokter` varchar(25) NOT NULL,
  `keluhan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buat_janji`
--

INSERT INTO `buat_janji` (`nama_depan`, `nama_belakang`, `umur`, `alamat`, `hari`, `dokter`, `keluhan`) VALUES
('Nono', 'Setiadi', 30, 'Bandung', '', 'Akbar', 'Dada sakit'),
('', '', 0, '', '', '', ''),
('', '', 0, '', '', '', ''),
('', '', 0, '', '', '', ''),
('Nono', 'Setiadi', 30, 'Bandung', '', 'Akbar', 'Dada sakit'),
('', '', 0, '', '', '', ''),
('', '', 0, '', '', '', ''),
('Nono', 'Setiadi', 30, 'Bandung', '', 'Akbar', 'Dada sakit'),
('Nono', 'Setiadi', 30, 'Bandung', '', 'Akbar', 'Dada sakit'),
('Nono', 'Setiadi', 30, 'Bandung', '', 'Akbar', 'Dada sakit'),
('Nono', 'Setiadi', 30, 'Bandung', '', 'Akbar', 'Dada sakit'),
('ayam', 'mm', 12, 'wa', 'senin', 'asd', 'sad'),
('exel', 'saputra', 12, 'jakarta', 'selasa', 'Dr. Corla', 'pusing demam'),
('Toni', 'Dodi', 24, 'Banyumas', 'jumat', 'Dr. Corla', 'Sesak nafas'),
('Toni', 'Dodi', 24, 'Banyumas', 'jumat', 'Dr. Corla', 'Sesak nafas'),
('Toni', 'Dodi', 24, 'Banyumas', 'jumat', 'Dr. Corla', 'Sesak nafas'),
('Toni', 'Dodi', 24, 'Banyumas', 'jumat', 'Dr. Corla', 'Sesak nafas'),
('Toni', 'Dodi', 24, 'Banyumas', 'jumat', 'Dr. Corla', 'Sesak nafas'),
('Toni', 'Dodi', 24, 'Banyumas', 'jumat', 'Dr. Corla', 'Sesak nafas'),
('Toni', 'Dodi', 24, 'Banyumas', 'jumat', 'Dr. Corla', 'Sesak nafas'),
('Toni', 'Dodi', 24, 'Banyumas', 'jumat', 'Dr. Corla', 'Sesak nafas');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `jam_operasional` varchar(28) DEFAULT NULL,
  `foto_dokter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_dokter`, `deskripsi`, `jam_operasional`, `foto_dokter`) VALUES
(17, 'Dr. Nita ,Sp.BA', 'Bedah Anak', '10.00-12.00', '528-4.jpg'),
(18, 'Dr. Ayana,Sp.OG', 'Spesialis Kandungan', '13.30-15.00', '60-5.jpg'),
(19, 'Dr. Dodi,Sp.P', 'Spesialis Paru', '19.00-21.00', '700-1.jpg'),
(20, 'Dr.Pudji,Sp.An', 'Spesialis Anestesi', '20.00-20.45', '431-2.jpg'),
(21, 'Dr.Corla,Sp.M', 'Spesialis Mata', '07.00-09.00', '115-5.png'),
(22, 'Dr.Lesti,Sp.JT', 'Jantung & Pembuluh Darah', '09.00-11.00', '126-6.png'),
(23, 'Dr.Indah,SpKJ', 'Spesialis Kedokteran Jiwa', '12.00-16.00', '678-7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `email`, `password`) VALUES
('isnaenti', 'ifah', 'isnaenti16@gmail.com', '$2y$10$iJyS2lcoSkDPYx7QGvAnw.BDpVQcnMeli5uoUFMqqFYrAWgCq4IF6'),
('isnaenti', 'ifah', 'isnaenti34', '12345'),
('ratu', 'ratu', 'ratu@gmail.com', '$2y$10$32VwjJAXykamHyHb4AePG.5cRDrridD47/TzTsdFeVq.dO1AtDZky'),
('ifah', 'ifah', 'isnaenti16@gmail.com', '$2y$10$.kXFqxo166wrbA9VXKIRZum7tX7TgVMTA/gaLzQMaJ4sFYX.u1hG2'),
('', '', '', '$2y$10$b0W/teltSBl5uOYE3I2PPO9H1gSUASNfoT4SsCNH9tmErKy6QQmKq'),
('lisa', 'lisa', 'lisa@gmail.com', '$2y$10$19O7aXNTFRK8lLd/ZgKvqe/M5yXAIz4kPweWLMFHtNJ3aCzSEFz4i'),
('zidan', 'zidan', 'zidan@gmail.com', '$2y$10$LPtAU3Z7JHiyy6/gf2YL0uvJKh4z0LDKokBWztQPkiX0ltwCqXyhS'),
('zidan', 'zidan', 'zidan@gmail.com', '$2y$10$aMfNy5OF2CDiSwwE/WmRr.LmTt6mCTqzabZ2HpPWQpGwFVrUstlHq'),
('zidan', 'zidan', 'zidan@gmail.com', '$2y$10$2Shw2Va5e8Che.fl9miwUOjr9pjPQtEuiWqmlCTGait.YkV0Vohki'),
('zidan', 'zidan', 'zidan@gmail.com', '$2y$10$QGQiG2alAbxYYinWr4HzfeN1O2hAjncBPk.Ko4vcNyiw.azSgLbP.'),
('zidan', 'zidan', 'zidan@gmail.com', '$2y$10$TY1qlA8QIY1fJREVDU3MVeuqYpbir4KoE3P1xwxtJQNGCe1ZxU.yC'),
('zidan', 'zidan', 'zidan@gmail.com', '$2y$10$W.MS9cvimNH.Hu6rX2Z38OZ5oT6HNpE9nckAPmSEs.SkPGNWtibTm');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
