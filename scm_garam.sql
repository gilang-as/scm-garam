-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 06:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scm_garam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_garam`
--

CREATE TABLE `tbl_garam` (
  `id` int(11) NOT NULL,
  `nama_petani` varchar(225) NOT NULL,
  `alamat_petani` varchar(225) NOT NULL,
  `telepon_petani` varchar(225) NOT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `jenis` varchar(100) NOT NULL,
  `harga_awal` double DEFAULT NULL,
  `harga_akhir` double DEFAULT NULL,
  `jumlah_awal` int(11) DEFAULT NULL,
  `terjual` int(11) NOT NULL,
  `lv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_garam`
--

INSERT INTO `tbl_garam` (`id`, `nama_petani`, `alamat_petani`, `telepon_petani`, `kategori`, `jenis`, `harga_awal`, `harga_akhir`, `jumlah_awal`, `terjual`, `lv`) VALUES
(6, 'Mila', 'Juwana', '08676767676', 'Garam yooo', 'Garam Halus', 1000, 7000, 30, 0, 2),
(7, 'Agus', 'Juwana', '08676767676', 'Garam Dangdut', 'Garam Halus', 1000, 5000, 30, 15, 2),
(8, 'Mita', 'Juwana', '08676767676', NULL, 'Garam Halus', 1000, NULL, 50, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `lv` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`username`, `password`, `lv`) VALUES
('administrator', '200ceb26807d6bf99fd6f4f0d1ca54d4', 1),
('keuangan', 'a4151d4b2856ec63368a7c784b1f0a6e', 4),
('produksi', 'edf3017a2946290b95c783bd1a7f0ba7', 2),
('quality', 'd66636b253cb346dbb6240e30def3618', 3),
('suplier', '13b79035464a65b613de7bdeff900e73', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `id` int(11) NOT NULL,
  `id_garam` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double NOT NULL,
  `laba` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`id`, `id_garam`, `tanggal`, `jumlah`, `total`, `laba`) VALUES
(8, 7, '2019-08-09', 3, 15000, 12000),
(9, 7, '2019-08-19', 5, 25000, 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_garam`
--
ALTER TABLE `tbl_garam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_garam` (`id_garam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_garam`
--
ALTER TABLE `tbl_garam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
