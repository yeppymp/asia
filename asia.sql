-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 12, 2017 at 05:59 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `Id_Barang` int(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_Kelamin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(10) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `No_Hp` varchar(14) DEFAULT NULL,
  `no_ktp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `Nama`, `Jenis_Kelamin`, `Tgl_Lahir`, `Alamat`, `No_Hp`, `no_ktp`) VALUES
(34, 'Daffa', 'L', '2000-04-23', 'Sumber', '082231223123', '9347694345'),
(35, 'Daffa', 'L', '2000-04-23', 'Sumber', '082231223123', '9347694345'),
(36, 'Daffa', 'L', '2000-04-23', 'Sumber', '082231223123', '9347694345'),
(37, 'Daffa', 'L', '2000-04-23', 'Sumber', '082231223123', '9347694345'),
(38, 'Daffa', 'L', '2000-04-23', 'Sumber', '082231223123', '9347694345'),
(40, 'Daffa', 'L', '2000-04-23', 'Sumber', '082231223123', '9347694345'),
(42, 'Daffa', 'L', '2000-04-23', 'Sumber', '082231223123', '9347694345'),
(45, 'Yeppy Mangun Puspitajudin', 'L', '1999-01-11', 'Dukupuntang', '087728980880', '9347694345'),
(46, 'Yeppy Mangun Puspitajudin', 'L', '1999-01-11', 'Dukupuntang', '087728980880', '9347694345'),
(47, 'Yeppy Mangun Puspitajudin', 'L', '1999-01-11', 'Dukupuntang', '087728980880', '9347694345'),
(48, 'Yeppy Mangun Puspitajudin', 'L', '1999-01-11', 'Dukupuntang', '087728980880', '9347694345'),
(49, 'Yeppy Mangun Puspitajudin', 'L', '1999-01-11', 'Dukupuntang', '087728980880', '9347694345'),
(50, 'Yeppy Mangun Puspitajudin', 'L', '1999-01-11', 'Dukupuntang', '087728980880', '9347694345'),
(51, 'Yeppy Mangun Puspitajudin', 'L', '1999-01-11', 'Dukupuntang', '087728980880', '9347694345'),
(52, 'Yeppy Mangun Puspitajudin', 'L', '1999-01-11', 'Dukupuntang', '087728980880', '9347694345'),
(53, 'Yeppy Mangun Puspitajudin', 'L', '1999-01-11', 'Dukupuntang', '087728980880', '9347694345'),
(63, 'daffa', 'L', '1999-11-11', 'asd', '1', '1'),
(64, 'ad', 'L', '1999-11-11', 'asd', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembelian`
--

CREATE TABLE `tb_pembelian` (
  `No_Beli` int(10) NOT NULL,
  `Jmlh_Barang` int(10) NOT NULL,
  `Total` int(10) NOT NULL,
  `Id_Karyawan` int(10) NOT NULL,
  `Id_Barang` int(10) NOT NULL,
  `Id_Supplier` int(10) NOT NULL,
  `Tgl_Pembelian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `No_Nota` int(10) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `jmlh_barang` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `id_karyawan` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_supplier` int(10) NOT NULL,
  `no_beli` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `Jenis_Kelamin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`Id_Barang`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD PRIMARY KEY (`No_Beli`),
  ADD KEY `Id_Karyawan` (`Id_Karyawan`),
  ADD KEY `Id_Barang` (`Id_Barang`),
  ADD KEY `Id_Supplier` (`Id_Supplier`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`No_Nota`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_karyawan` (`id_karyawan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembelian`
--
ALTER TABLE `tb_pembelian`
  ADD CONSTRAINT `tb_pembelian_ibfk_1` FOREIGN KEY (`Id_Karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pembelian_ibfk_2` FOREIGN KEY (`Id_Barang`) REFERENCES `tb_barang` (`Id_Barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pembelian_ibfk_3` FOREIGN KEY (`Id_Supplier`) REFERENCES `tb_supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `tb_penjualan_ibfk_2` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penjualan_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`Id_Barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_penjualan_ibfk_4` FOREIGN KEY (`id_member`) REFERENCES `tb_member` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
