-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 05:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventori`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `kode_barang` varchar(20) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `kode_barang`, `nama_barang`, `stok`, `satuan`) VALUES
(4, '51077241', 'Dp-191 white ly', 101, 'kg'),
(5, '42226199', 'Dp-191 all white Dy', 104, 'kg'),
(6, '28820824', 'Dp-191 Black', 106, 'kg'),
(7, '90502301', 'Dp-191 broken white', 100, 'kg'),
(8, '38712392', 'Dp-191 white eba', 100, 'kg'),
(9, '47261759', 'Dp-191 parson white CBM', 105, 'kg'),
(10, '56067143', 'Ws-500 A salak brown R', 99, 'kg'),
(11, '43574658', 'Ws-500 A walnut brown R', 108, 'kg'),
(12, '94019756', 'Ws-135 chesnut f2', 100, 'kg'),
(13, '33497270', 'Ws-500A Brown karel', 106, 'kg'),
(14, '62203302', 'Ws_135 yellow jip ', 100, 'kg'),
(15, '35828040', 'Ws- 500 A LC 238', 100, 'kg'),
(17, '30867899', 'biji', 197, 'pcs'),
(18, '64472483', 'sgdfg', 123, 'liter');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `kode`, `nama`, `email`, `telepon`, `alamat`) VALUES
(2, 'CST624', 'TB SINAR', 'sinar@gmail.com', '12345678', 'Jl. Test');

-- --------------------------------------------------------

--
-- Table structure for table `data_toko`
--

CREATE TABLE `data_toko` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(80) DEFAULT NULL,
  `nama_pemilik` varchar(80) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_toko`
--

INSERT INTO `data_toko` (`id`, `nama_toko`, `nama_pemilik`, `no_telepon`, `alamat`) VALUES
(1, 'Toko Manuk Jaya', 'Nugroho', '081299764535', 'Semarang');

-- --------------------------------------------------------

--
-- Table structure for table `detail_keluar`
--

CREATE TABLE `detail_keluar` (
  `no_keluar` varchar(25) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_keluar`
--

INSERT INTO `detail_keluar` (`no_keluar`, `nama_barang`, `jumlah`, `satuan`) VALUES
('TR1679449194', 'Ws-500 A salak brown R', 1, 'kg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_terima`
--

CREATE TABLE `detail_terima` (
  `no_terima` varchar(25) DEFAULT NULL,
  `nama_barang` varchar(80) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id` int(11) NOT NULL,
  `no_terima` varchar(25) DEFAULT NULL,
  `tgl_terima` varchar(25) DEFAULT NULL,
  `jam_terima` varchar(10) DEFAULT NULL,
  `nama_supplier` varchar(80) DEFAULT NULL,
  `nama_petugas` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `no_keluar` varchar(25) DEFAULT NULL,
  `tgl_keluar` varchar(25) DEFAULT NULL,
  `jam_keluar` varchar(10) DEFAULT NULL,
  `nama_customer` varchar(80) DEFAULT NULL,
  `nama_petugas` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `no_keluar`, `tgl_keluar`, `jam_keluar`, `nama_customer`, `nama_petugas`) VALUES
(9, 'TR1679449194', '22/03/2023', '08:39:54', 'TB SINAR', 'Ilham Dhiya Ulhaq');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `kode`, `nama`, `username`, `password`) VALUES
(2, 'PENGGUNA - 94', 'Ilham Dhiya', 'ilham01', 'ilham01'),
(3, 'PENGGUNA - 50', 'sdfsdf', 'sdfsdf', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `kode`, `nama`, `username`, `password`) VALUES
(5, 'PETUGAS - 90', 'ilham', 'iham', 'ilham');

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `id` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `value` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`id`, `satuan`, `value`) VALUES
(1, 'LITER', 'liter'),
(2, 'KILOGRAM', 'kg'),
(3, 'ONS', 'ons'),
(4, 'PCS', 'pcs'),
(5, 'PAK', 'pak');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `kode`, `nama`, `email`, `telepon`, `alamat`) VALUES
(3, 'SPL758', 'kontol', 'kontol@gmail.com', '123123', 'sdasda'),
(4, 'SPL824', 'mabuj', 'ulhaq@gmail.com', '123123123123', 'dfsdfsdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_toko`
--
ALTER TABLE `data_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_terima` (`no_terima`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_keluar` (`no_keluar`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_toko`
--
ALTER TABLE `data_toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
