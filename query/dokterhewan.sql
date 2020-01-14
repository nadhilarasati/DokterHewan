-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2020 at 02:55 AM
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
-- Table structure for table `antrian_registrasi`
--

CREATE TABLE `antrian_registrasi` (
  `idAntrian` int(5) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `idHewan` int(5) NOT NULL,
  `idPegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian_registrasi`
--

INSERT INTO `antrian_registrasi` (`idAntrian`, `status`, `idHewan`, `idPegawai`) VALUES
(1, 0, 13, 3),
(3, 0, 12, 3),
(4, 0, 13, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `daftar_hewan`
-- (See below for the actual view)
--
CREATE TABLE `daftar_hewan` (
`idHewan` int(5)
,`namaHewan` varchar(50)
,`jenisKelamin` tinyint(1)
,`ras` varchar(50)
,`warna` varchar(50)
,`tanggalLahir` date
,`idPemilik` int(5)
,`status` int(1)
,`foto` varchar(200)
,`jenis` varchar(20)
,`idJenis` int(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `data_medis_view`
-- (See below for the actual view)
--
CREATE TABLE `data_medis_view` (
`idRekamMedis` int(5)
,`tanggal` date
,`gejalaKlinis` varchar(100)
,`suhuBadan` double(10,0)
,`beratBadan` double(10,0)
,`diagnosa` varchar(100)
,`terapi` varchar(100)
,`idHewan` int(5)
,`idPegawai` int(5)
,`namaPegawai` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `detail_laporan_view`
-- (See below for the actual view)
--
CREATE TABLE `detail_laporan_view` (
`tanggal` date
,`idPegawai` int(5)
,`namaPegawai` varchar(50)
,`idHewan` int(5)
,`namaHewan` varchar(50)
,`jenis` varchar(20)
,`namaPemilik` varchar(50)
);

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
  `tanggalLahir` date NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `foto` varchar(200) NOT NULL,
  `idPemilik` int(5) NOT NULL,
  `idTipe` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hewan_peliharaan`
--

INSERT INTO `hewan_peliharaan` (`idHewan`, `namaHewan`, `jenisKelamin`, `ras`, `warna`, `tanggalLahir`, `status`, `foto`, `idPemilik`, `idTipe`) VALUES
(1, 'Mao', 0, 'Golden Retriever', 'Cream', '2009-12-14', 0, '', 1, 2),
(2, 'Opie', 0, 'Poodle', 'Cokelat', '2017-12-14', 1, '', 2, 2),
(3, 'Nanchos', 1, 'Mix', 'Tricolour', '2014-07-14', 0, '', 2, 1),
(4, 'Keroro', 0, 'Campbel', 'Cokelat', '2019-01-31', 0, '', 3, 5),
(5, 'Tita', 1, 'Lokal', 'Tortie', '2011-04-14', 0, '', 4, 1),
(6, 'Skinny', 1, 'Lokal', 'Hitam Putih', '2014-05-14', 0, '', 5, 1),
(7, 'Eldo', 0, 'Toy Poodle', 'Cream', '2015-12-15', 0, '', 6, 2),
(8, 'Naru', 0, 'Persia', 'Cream', '2017-05-15', 0, '', 7, 1),
(9, 'Usagi', 1, 'Angora', 'Putih', '2018-12-15', 0, '', 7, 3),
(10, 'Abu', 0, 'Lokal', 'Orange', '2017-10-15', 0, '', 8, 1),
(11, 'Bintik', 1, 'Mix', 'Hitam Putih', '2016-12-15', 0, '', 9, 1),
(12, 'Juno', 0, 'Poodle', 'Hitam', '2011-04-15', 0, '', 10, 2),
(13, 'Cooper', 0, 'Mongrel', 'Cokelat Putih', '2006-02-16', 0, '', 11, 2);

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
(1, 'Kucing'),
(2, 'Anjing'),
(3, 'Kelinci'),
(4, 'Tupai'),
(5, 'Hamster'),
(6, 'Landak'),
(7, 'Ular'),
(8, 'Burung'),
(9, 'Sugar Glider'),
(10, 'Iguana'),
(11, 'Bunglon'),
(12, 'Kura-Kura'),
(13, 'Lainnya');

-- --------------------------------------------------------

--
-- Stand-in structure for view `laporan_kunjungan_view`
-- (See below for the actual view)
--
CREATE TABLE `laporan_kunjungan_view` (
`tanggal` date
,`idHewan` int(5)
,`jenis` varchar(20)
,`Jumlah` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `list_antrian`
-- (See below for the actual view)
--
CREATE TABLE `list_antrian` (
`idAntrian` int(5)
,`namaPemilik` varchar(50)
,`namaHewan` varchar(50)
,`jenis` varchar(20)
,`status` int(1)
,`namaPegawai` varchar(50)
,`idPegawai` int(11)
,`idHewan` int(5)
);

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
(1, '3506042602660001', 'Sulistyono', 'Jalan Sumbawa no 15, Bandung', '0855555601', 'sulistyono@gmail.com', 'sulis26'),
(2, '3309074509940001', 'Novita Asri', 'Jalan Ahmad Yani no. 192, Bandung', '0898555836', 'novitaasri@yahoo.com', 'novita5'),
(3, '3271064505960013', 'Laras', 'Jalan Wira Angun-Angun no. 12, Bandung', '08118072775', 'laras5596@gmail.com', 'laras5'),
(4, '1371016203570002', 'Zaimah', 'Jalan Terusan Jakarta no. 100, Bandung', '0838555718', 'zaimah@gmail.com', 'zaimah22'),
(5, '1871135106900002', 'Eka Yuni Lestari', 'Jalan Ciumbuleuit No. 205, Bandung', '0812555833', 'lestarieka@yahoo.com', 'lestari11'),
(6, '3507224209890002', 'Frida Wahyu', 'Jalan Gatot Subroto no. 5, Bandung', '085691703421', 'fridawahyu@gmail.com', 'fridaw2'),
(7, '3174101912830003', 'Wahyu Kusumo Aribowo', 'Jalan Badak Singa no. 24, Bandung', '085789469103', 'wahyu.aribowo@gmail.com', 'wahyu19'),
(8, '3172022705730017', 'Hidvan Lawendatu', 'Jalan Bukit Sari no. 145, Bandung', '082312369821', 'lawendatu.hidvan@yahoo.com', 'hidvan2'),
(9, '7398029810', 'Cantika Clarinta', 'Jalan Bali No. 20, Bandung', '081213145678', 'clarinta.canti@gmail.com', 'canti30'),
(10, '3275040909730014', 'Ramli Anwar', 'Jalan Anggrek No. 6, Bandung', '081255568712', 'anwaramli@hotmail.com', 'ramli9'),
(11, '3603286908630002', 'Hadiyah Melanie', 'Jalan Trunojoyo No. 100, Bandung', '081715432896', 'melanieee@yahoo.com', 'melanie29');

-- --------------------------------------------------------

--
-- Stand-in structure for view `pemilik_peliharaan`
-- (See below for the actual view)
--
CREATE TABLE `pemilik_peliharaan` (
`idPemilik` int(5)
,`namaPemilik` varchar(50)
,`alamat` varchar(50)
,`telepon` varchar(12)
,`idHewan` int(5)
,`namaHewan` varchar(50)
,`jenis` varchar(20)
,`tanggalLahir` date
,`jenisKelamin` tinyint(1)
,`ras` varchar(50)
,`warna` varchar(50)
,`status` int(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `idRekamMedis` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `gejalaKlinis` varchar(100) NOT NULL,
  `suhuBadan` double(10,0) NOT NULL,
  `beratBadan` double(10,0) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  `terapi` varchar(100) NOT NULL,
  `idHewan` int(5) NOT NULL,
  `idPegawai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`idRekamMedis`, `tanggal`, `gejalaKlinis`, `suhuBadan`, `beratBadan`, `diagnosa`, `terapi`, `idHewan`, `idPegawai`) VALUES
(1, '2019-12-14', 'Testis kiri bengkak sejak 4 bulan lalu, nafsu makan ok, mukosa rose, 5% dehidrasi, suara jantung nor', 38, 35, 'Kanker testis', 'CBC, Hematologi darah, Xray', 1, 1),
(2, '2019-12-14', 'Cek luka dekat leher, ada nanah, lesi luka meluas setelah dicukur', 38, 5, 'Ringworm', 'Pembersih luka', 2, 1),
(4, '2019-12-14', 'Vaksin booster tahunan; nafsu makan ok, limfonodus ok, CRT <2 detik', 39, 4, 'Sehat', 'Vaksin booster, deworming', 3, 3),
(5, '2019-12-14', 'Gerakan terlihat lambat, kotoran berwarna hijau, ekor basah', 19, 1, 'Wet Tails', 'Pemberian antibiotik', 4, 3),
(6, '2019-12-14', 'Cek anus, bengkak di sekitar anus, anal gland kanan ruptur, tidak ada nanah', 38, 5, 'Vulnus excoriasi', 'Pembersihan luka', 5, 1),
(7, '2019-12-14', 'Sering urinasi, urin berdarah, palpasi ginjal normal', 38, 5, 'Hermaturia', 'Kateter, Pemberian royal canin s/o', 6, 1),
(8, '2019-12-15', 'Kutu seluruh badan, aktif, urin dan bab ok, manja pada owner, agak galak, mukosa rose, suara jantung', 38, 4, 'Kutuan', 'Memberi Revolution Dog', 7, 3),
(9, '2019-12-15', 'Kastrasi', 38, 4, 'Sehat', 'Kastrasi', 8, 1),
(10, '2019-12-15', 'timbul bintik pada bagian tepi telinga, jari kaki membengkak kemerahan', 14, 2, 'Scabies', 'Pemberian obat wormektin', 9, 1),
(11, '2019-12-15', 'Kutu seluruh badan, aktif, urin dan bab ok, manja pada owner, agak galak, mukosa rose, suara jantung', 38, 4, 'Kutuan', 'Memberi Revolution Dog', 1, 1),
(12, '2019-12-15', 'Cek luka, lesi pada bagian kiri perineal mengecil, lesi pada bagian lubang hidung tidak mengecil', 38, 5, 'Sporotrichosis', 'Memberi obat Itraconazole cap dan Vetri DMG Liquid', 10, 3),
(13, '2019-12-15', 'Cek telinga, keluar air bercampur darah dari kedua telinga, mukosa rose, CRT 3 detik, limfonodus sub', 38, 7, 'Otitis externa', 'Pembersihan telinga', 11, 1),
(14, '2019-12-15', 'Terlalu sering menggaruk, bulu rontok di sekitar area gatal', 19, 1, 'Skin Mites', 'Memberikan spray anti kutu', 4, 3),
(15, '2019-12-15', 'Testis kiri bengkak sejak 4 bulan lalu, nafsu makan ok, mukosa rose, 5% dehidrasi, suara jantung nor', 38, 5, 'Kanker testis', 'CBC, Hematologi darah, Xray', 12, 3),
(16, '2019-12-16', 'Kutu seluruh badan, aktif, urin dan bab ok, manja pada owner, agak galak, mukosa rose, suara jantung', 38, 35, 'Kutuan', 'Memberi Revolution Dog', 1, 1),
(17, '2019-12-16', 'Sakit pada bagian kaki, pada 2014 didiagnosa DJD, sebelumnya inap selama 5 hari, mukosa pucat, CRT 3', 38, 18, 'Otitis externa', 'Pembersihan telinga rutin', 13, 3),
(18, '2019-12-16', 'Kastrasi', 38, 4, 'Sehat', 'Kastrasi', 7, 1),
(19, '2019-12-16', 'Kastrasi', 38, 4, 'Sehat', 'Kastrasi', 3, 1);

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
(1, 'Oktavia Pusparini', 'Bukit Cimanggu City R2 no. 7', '081291075064', 1, 'oktaviapsprn@gmail.com', 'okta15'),
(2, 'Alisya Quina', 'Jalan Banteng no. 7', '081318430612', 2, 'alisyaquina@gmail.com', 'quina7'),
(3, 'Vinieta', 'Jalan Guntur', '081282772308', 1, 'vinietaaa@gmail.com', 'ninet15'),
(4, 'Barsya Prastoro', 'Jalan Kawaluyaan', '085860606996', 2, 'barsya96@gmail.com', 'barsya12');

-- --------------------------------------------------------

--
-- Structure for view `daftar_hewan`
--
DROP TABLE IF EXISTS `daftar_hewan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar_hewan`  AS  select `hewan_peliharaan`.`idHewan` AS `idHewan`,`hewan_peliharaan`.`namaHewan` AS `namaHewan`,`hewan_peliharaan`.`jenisKelamin` AS `jenisKelamin`,`hewan_peliharaan`.`ras` AS `ras`,`hewan_peliharaan`.`warna` AS `warna`,`hewan_peliharaan`.`tanggalLahir` AS `tanggalLahir`,`hewan_peliharaan`.`idPemilik` AS `idPemilik`,`hewan_peliharaan`.`status` AS `status`,`hewan_peliharaan`.`foto` AS `foto`,`jenis_hewan`.`jenis` AS `jenis`,`jenis_hewan`.`idJenis` AS `idJenis` from (`hewan_peliharaan` join `jenis_hewan` on((`hewan_peliharaan`.`idTipe` = `jenis_hewan`.`idJenis`))) ;

-- --------------------------------------------------------

--
-- Structure for view `data_medis_view`
--
DROP TABLE IF EXISTS `data_medis_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_medis_view`  AS  select `rekam_medis`.`idRekamMedis` AS `idRekamMedis`,`rekam_medis`.`tanggal` AS `tanggal`,`rekam_medis`.`gejalaKlinis` AS `gejalaKlinis`,`rekam_medis`.`suhuBadan` AS `suhuBadan`,`rekam_medis`.`beratBadan` AS `beratBadan`,`rekam_medis`.`diagnosa` AS `diagnosa`,`rekam_medis`.`terapi` AS `terapi`,`rekam_medis`.`idHewan` AS `idHewan`,`rekam_medis`.`idPegawai` AS `idPegawai`,`staff_klinik`.`namaPegawai` AS `namaPegawai` from (`rekam_medis` join `staff_klinik` on((`rekam_medis`.`idPegawai` = `staff_klinik`.`idPegawai`))) order by `rekam_medis`.`tanggal` desc ;

-- --------------------------------------------------------

--
-- Structure for view `detail_laporan_view`
--
DROP TABLE IF EXISTS `detail_laporan_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_laporan_view`  AS  select `A`.`tanggal` AS `tanggal`,`A`.`idPegawai` AS `idPegawai`,`B`.`namaPegawai` AS `namaPegawai`,`A`.`idHewan` AS `idHewan`,`c`.`namaHewan` AS `namaHewan`,`c`.`jenis` AS `jenis`,`c`.`namaPemilik` AS `namaPemilik` from ((`rekam_medis` `A` join `staff_klinik` `B` on((`A`.`idPegawai` = `B`.`idPegawai`))) join `pemilik_peliharaan` `C` on((`A`.`idHewan` = `c`.`idHewan`))) ;

-- --------------------------------------------------------

--
-- Structure for view `laporan_kunjungan_view`
--
DROP TABLE IF EXISTS `laporan_kunjungan_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan_kunjungan_view`  AS  select `A`.`tanggal` AS `tanggal`,`A`.`idHewan` AS `idHewan`,`C`.`jenis` AS `jenis`,count(`C`.`idJenis`) AS `Jumlah` from ((`rekam_medis` `A` join `hewan_peliharaan` `B` on((`A`.`idHewan` = `B`.`idHewan`))) join `jenis_hewan` `C` on((`B`.`idTipe` = `C`.`idJenis`))) group by `C`.`idJenis`,`A`.`tanggal` order by `A`.`tanggal` desc ;

-- --------------------------------------------------------

--
-- Structure for view `list_antrian`
--
DROP TABLE IF EXISTS `list_antrian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `list_antrian`  AS  select `antrian_registrasi`.`idAntrian` AS `idAntrian`,`pemilik_peliharaan`.`namaPemilik` AS `namaPemilik`,`pemilik_peliharaan`.`namaHewan` AS `namaHewan`,`pemilik_peliharaan`.`jenis` AS `jenis`,`antrian_registrasi`.`status` AS `status`,`staff_klinik`.`namaPegawai` AS `namaPegawai`,`antrian_registrasi`.`idPegawai` AS `idPegawai`,`antrian_registrasi`.`idHewan` AS `idHewan` from ((`antrian_registrasi` join `pemilik_peliharaan` on((`antrian_registrasi`.`idHewan` = `pemilik_peliharaan`.`idHewan`))) join `staff_klinik` on((`antrian_registrasi`.`idPegawai` = `staff_klinik`.`idPegawai`))) order by `antrian_registrasi`.`idAntrian` ;

-- --------------------------------------------------------

--
-- Structure for view `pemilik_peliharaan`
--
DROP TABLE IF EXISTS `pemilik_peliharaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pemilik_peliharaan`  AS  select `pemilik_hewan`.`idPemilik` AS `idPemilik`,`pemilik_hewan`.`namaPemilik` AS `namaPemilik`,`pemilik_hewan`.`alamat` AS `alamat`,`pemilik_hewan`.`telepon` AS `telepon`,`daftar_hewan`.`idHewan` AS `idHewan`,`daftar_hewan`.`namaHewan` AS `namaHewan`,`daftar_hewan`.`jenis` AS `jenis`,`daftar_hewan`.`tanggalLahir` AS `tanggalLahir`,`daftar_hewan`.`jenisKelamin` AS `jenisKelamin`,`daftar_hewan`.`ras` AS `ras`,`daftar_hewan`.`warna` AS `warna`,`daftar_hewan`.`status` AS `status` from (`pemilik_hewan` join `daftar_hewan` on((`pemilik_hewan`.`idPemilik` = `daftar_hewan`.`idPemilik`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian_registrasi`
--
ALTER TABLE `antrian_registrasi`
  ADD PRIMARY KEY (`idAntrian`),
  ADD KEY `hewan` (`idHewan`),
  ADD KEY `pegawai` (`idPegawai`);

--
-- Indexes for table `hewan_peliharaan`
--
ALTER TABLE `hewan_peliharaan`
  ADD PRIMARY KEY (`idHewan`),
  ADD KEY `fk_pemilik` (`idPemilik`);

--
-- Indexes for table `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
  ADD PRIMARY KEY (`idJenis`);

--
-- Indexes for table `pemilik_hewan`
--
ALTER TABLE `pemilik_hewan`
  ADD PRIMARY KEY (`idPemilik`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`idRekamMedis`);

--
-- Indexes for table `staff_klinik`
--
ALTER TABLE `staff_klinik`
  ADD PRIMARY KEY (`idPegawai`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian_registrasi`
--
ALTER TABLE `antrian_registrasi`
  MODIFY `idAntrian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hewan_peliharaan`
--
ALTER TABLE `hewan_peliharaan`
  MODIFY `idHewan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
  MODIFY `idJenis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pemilik_hewan`
--
ALTER TABLE `pemilik_hewan`
  MODIFY `idPemilik` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `idRekamMedis` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `staff_klinik`
--
ALTER TABLE `staff_klinik`
  MODIFY `idPegawai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrian_registrasi`
--
ALTER TABLE `antrian_registrasi`
  ADD CONSTRAINT `hewan` FOREIGN KEY (`idHewan`) REFERENCES `hewan_peliharaan` (`idHewan`),
  ADD CONSTRAINT `pegawai` FOREIGN KEY (`idPegawai`) REFERENCES `staff_klinik` (`idPegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
