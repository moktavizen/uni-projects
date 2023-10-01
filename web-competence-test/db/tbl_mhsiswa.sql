-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 07:26 AM
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
-- Database: `db_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhsiswa`
--

CREATE TABLE `tbl_mhsiswa` (
  `id_mhsiswa` int(7) NOT NULL,
  `nrp` varchar(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mhsiswa`
--

INSERT INTO `tbl_mhsiswa` (`id_mhsiswa`, `nrp`, `nama_lengkap`, `alamat`) VALUES
(3, '3121521012', 'Ahmad Faiz Izzul Islam', 'Madiun'),
(6, '3120521026', 'Adrian Syahputra', 'Gresik'),
(7, '3121521001', 'Ika Nur Rohmawati Janatul Usma	', 'Tuban'),
(8, '3121521003', 'Isnanda Yunita Saputri', 'Bojonegoro'),
(9, '3121521006', 'Wahyu Nur Hidayat', 'Gresik'),
(10, '3121521007', 'Muhammad Chusnul Hadi', 'Tulungagung'),
(11, '3121521011', 'Ilham Raga Danu Nayoko	', 'Pasuruan'),
(12, '3121521014', 'Muhammad Zaki', 'Lamongan'),
(13, '3121521016', 'Yogi Pratama', 'Trenggalek'),
(14, '3121521018', 'Faris Saifullah', 'Lamongan'),
(15, '3121521019', 'Zulfian Nafis', 'Lamongan'),
(16, '3121521020', 'Dimas Arifudin Firmansyah	', 'Lamongan'),
(17, '3121521022', 'Indaha Badiatul Wafiroh	', 'Lamongan'),
(18, '3121521024	', 'Moh. Fiqi Fajrul Falah	', 'Sidoarjo'),
(19, '3121521025', 'Nadya Shafa Annisa	', 'Lamongan'),
(20, '3121521026', 'Muhammad Akhmal Akbar Nurrizky', 'Lamongan'),
(21, '3121521028	', 'Achmad Izzuddin	', 'Sidoarjo'),
(22, '3121521030	', 'Rus Dina Kusumaning Pratiwi	', 'Lamongan'),
(23, '3121521017', 'Moh Oktavi Aziz Nugraha', 'Gresik'),
(24, '3121521021', 'Mishbahus Salam', 'Pucangro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mhsiswa`
--
ALTER TABLE `tbl_mhsiswa`
  ADD PRIMARY KEY (`id_mhsiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_mhsiswa`
--
ALTER TABLE `tbl_mhsiswa`
  MODIFY `id_mhsiswa` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
