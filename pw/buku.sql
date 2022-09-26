-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2022 at 03:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_c_203040163_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(10) NOT NULL,
  `Nama_buku` varchar(225) NOT NULL,
  `Penulis_buku` varchar(225) NOT NULL,
  `Jumlah_halaman` int(255) NOT NULL,
  `Tahun_terbit` year(4) NOT NULL,
  `Gambar_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `Nama_buku`, `Penulis_buku`, `Jumlah_halaman`, `Tahun_terbit`, `Gambar_buku`) VALUES
(1, 'Cinta itu luka', 'Eka Kurniawan', 537, 2002, '01.jpg'),
(2, 'Cerita-cerita Bahagia Hampir Seluruhnya', 'Norman Erikson Pasaribu', 212, 2020, '02.jpg'),
(3, 'Kita pergi hari ini', 'Ziggy Zezsyazeoviennazabrizkie', 192, 2021, '03.jpg'),
(4, ' The Star and I ', 'Ilana Tan', 344, 2021, '04.jpg'),
(5, ' Bibi Gill', 'Tere liye', 358, 2021, '05.jpeg\r\n'),
(6, 'Layangan Putus', 'Mommy ASF', 268, 2021, '06.jpg'),
(7, 'Hujan ', 'Tere liye', 320, 2016, '07.jpg'),
(8, 'Home Sweet Loan ', 'Almira Bastari', 312, 2022, '08.jpg'),
(9, 'Heartbreak Motel\r\n', 'Ika Natassa\r\n', 400, 2022, '09.jpg'),
(10, 'Laut Bercerita ', 'Leila S. Chudori', 389, 2017, '10.jpg'),
(12, 'dasf', 'asf', 0, 0000, 'afasf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
