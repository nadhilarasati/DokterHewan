-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2019 at 01:49 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dokterhewan`
--

-- --------------------------------------------------------

--
-- Table structure for table `hewan_peliharaan`
--

CREATE TABLE `hewan_peliharaan` (
  `idHewan` int(5) NOT NULL,
  `namaHewan` varchar(50) NOT NULL,
  `jenisKelamin` tinyint(1) NOT NULL,
  `ras` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `tanggalLahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_hewan`
--

CREATE TABLE `jenis_hewan` (
  `idJenis` int(5) NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_hewan`
--

INSERT INTO `jenis_hewan` (`idJenis`, `jenis`) VALUES
(1, 'kucing'),
(2, 'anjing');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_hewan`
--

CREATE TABLE `pemilik_hewan` (
  `idPemilik` int(5) NOT NULL,
  `noKTP` varchar(16) NOT NULL,
  `namaPemilik` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik_hewan`
--

INSERT INTO `pemilik_hewan` (`idPemilik`, `noKTP`, `namaPemilik`, `alamat`, `telepon`, `email`, `password`) VALUES
(1, '123456789', 'Nadhila Larasati', 'wira angun-angun no.12', '08118072775', 'nadhilarasati@gmail.com', 'nadhila5');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `idRekamMedis` int(5) NOT NULL,
  `gejalaKlinis` varchar(50) NOT NULL,
  `suhuBadan` int(2) NOT NULL,
  `beratBadan` int(2) NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `tindakan` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_klinik`
--

CREATE TABLE `staff_klinik` (
  `idPegawai` int(5) NOT NULL,
  `namaPegawai` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `role` tinyint(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_klinik`
--

INSERT INTO `staff_klinik` (`idPegawai`, `namaPegawai`, `alamat`, `telepon`, `role`, `email`, `password`) VALUES
(1, 'Oktavia Pusparini', 'Bukit Cimanggu City R2 no. 7', '081234567890', 1, 'oktaviapsprn@gmail.com', 'oktavia15'),
(2, 'Alisya Quina', 'Bukit Cimanggu City R2 no. 7', '0811223344', 2, 'quinalisya@gmail.com', 'quina7'),
(3, 'Farhan Fazrian', 'antapani', '085726351782', 2, 'farhanff@gmail.com', 'farhan2');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_periksa`
--

CREATE TABLE `transaksi_periksa` (
  `idPeriksa` int(5) NOT NULL,
  `tanggalPeriksa` date NOT NULL,
  `idPegawai` int(5) NOT NULL,
  `idHewan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hewan_peliharaan`
--
ALTER TABLE `hewan_peliharaan`
  ADD PRIMARY KEY (`idHewan`);

--
-- Indexes for table `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
  ADD PRIMARY KEY (`idJenis`);

--
-- Indexes for table `pemilik_hewan`
--
ALTER TABLE `pemilik_hewan`
  ADD PRIMARY KEY (`idPemilik`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`idRekamMedis`);

--
-- Indexes for table `staff_klinik`
--
ALTER TABLE `staff_klinik`
  ADD PRIMARY KEY (`idPegawai`);

--
-- Indexes for table `transaksi_periksa`
--
ALTER TABLE `transaksi_periksa`
  ADD PRIMARY KEY (`idPeriksa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hewan_peliharaan`
--
ALTER TABLE `hewan_peliharaan`
  MODIFY `idHewan` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
  MODIFY `idJenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemilik_hewan`
--
ALTER TABLE `pemilik_hewan`
  MODIFY `idPemilik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `idRekamMedis` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_klinik`
--
ALTER TABLE `staff_klinik`
  MODIFY `idPegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_periksa`
--
ALTER TABLE `transaksi_periksa`
  MODIFY `idPeriksa` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
