-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 12:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warnasol`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `kode` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `qty` varchar(10) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  `sesi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `kd_cus` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pw` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`kd_cus`, `nama`, `alamat`, `no_telp`, `username`, `pw`, `gambar`) VALUES
('20170820071826', 'Albertus Magnus Foresta N', 'Bandung, Jawa Barat', '081234567890', 'albertus', '7c222fb2927d828af22f592134e8932480637c0d', '../admin/gambar_customer/foto_profil.jpg'),
('20180205073805', 'niqoweb', 'niqoweb', 'niqoweb', 'niqoweb', '6414e69bf25357d8d63353f469b35a7416963ab1', '');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_kon` int(6) NOT NULL,
  `no_po` varchar(20) NOT NULL,
  `kd_cus` varchar(20) NOT NULL,
  `bayar_via` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `jumlah` int(10) NOT NULL,
  `bukti_transfer` varchar(50) NOT NULL,
  `status` enum('Bayar','Belum') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_kon`, `no_po`, `kd_cus`, `bayar_via`, `tanggal`, `jumlah`, `bukti_transfer`, `status`) VALUES
(20, '20180205073805', '20180205073805', '0', '2018-02-05 07:38:37', 26000, '0', 'Belum'),
(22, '20170820071826', '20170820071826', 'Cash On Delivery (CO', '2018-02-05 09:44:53', 21000, '0', 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `no_po` varchar(20) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `status` enum('Proses','Selesai','Terkirim','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `po_terima`
--

CREATE TABLE `po_terima` (
  `id` int(10) NOT NULL,
  `no_po` varchar(20) NOT NULL,
  `kd_cus` varchar(20) NOT NULL,
  `kode` int(4) NOT NULL,
  `tanggal` datetime NOT NULL,
  `berat` varchar(10) NOT NULL,
  `qty` int(8) NOT NULL,
  `total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `po_terima`
--

INSERT INTO `po_terima` (`id`, `no_po`, `kd_cus`, `kode`, `tanggal`, `berat`, `qty`, `total`) VALUES
(38, '20180205073805', '20180205073805', 17, '2018-02-05 07:38:23', '', 2, 26000),
(39, '20170820071826', '20170820071826', 57, '2018-02-05 09:44:15', '', 1, 6000),
(40, '20170820071826', '20170820071826', 54, '2018-02-05 09:44:19', '', 1, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `harga` int(10) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `stok` int(3) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode`, `nama`, `jenis`, `harga`, `keterangan`, `stok`, `gambar`) VALUES
(17, 'Arabika Gayo', 'Biji Kopi', 70000, 'Biji kopi pilihan dari Aceh dengan aroma yang sangat tajam dan tidak meninggalkan aftertaste yang pahit', 91, 'gambar_produk/Arabica_Gayo.jpeg'),
(18, 'Robusta Lampung', 'Biji Kopi', 80000, 'Biji Kopi Robusta dengan tekstur yang halus dan rasa yang kuat.', 98, 'gambar_produk/Robusta_Lampung.jpeg'),
(19, 'Arabika Jawa', 'Biji Kopi', 90000, 'Biji Kopi Arabika dengan tingkat keasamannya yang sedang dan kekentalannya yang tidak terlalu kental.', 100, 'gambar_produk/Arabica_Jawa.jpeg'),
(20, 'Kintamani Bali', 'Bij', 95000, 'Biji Kopi dengan rasanya yang segar asam ( citrus ) seperti jeruk. Aromanya yang eksotis, teksturnya yang ringan, membuat kopi ini tidak terlalu pahit dan tidak meninggalkan aftertaste yang kental setelahnya.', 100, 'gambar_produk/Kintamani_Bali.jpeg'),
(21, 'Arabika Wamena', 'Biji Kopi', 100000, 'Biji Kopi Arabika berasal dari Papua dengan aroma dan rasa yang ringan.', 100, 'gambar_produk/Arabica_Wamena.jpeg'),
(22, 'Arabika Flores Bajawa', 'Biji Kopi', 121000, 'Kopi ini melalui proses full washed dry hulling sehingga menghasilkan tekstur body yang penuh, keasaman yang rendah, rasa karamel manis, serta aroma ceri dan blueberry. \r\n\r\n', 85, 'gambar_produk/Arabica_Flores_Bajawa.jpeg'),
(23, 'Robusta Gayo', 'Biji Kopi', 78000, 'Ketika menyeduh kopi ini dengan air panas, aroma yang akan muncul seperti gula aren, tembakau, dan cokelat.', 100, 'gambar_produk/Robusta_Gayo.jpeg'),
(24, 'Toraja Peaberry', 'Biji Kopi', 60000, 'Kopi Lanang adalah buah kopi yang mengandung 1 biji kopi karena umumnya terdapat 2 biji kopi dan ini hanya dapat ditemukan 5% dari total panen. Kombinasi yang pas dalam kemasan kantong saring (drip bag) menghasilkan kopi dengan aroma harum, cita rasa khas dan unik, serta bebas ampas.\r\n\r\n', 100, 'gambar_produk/Lanang_Toraja.jpeg'),
(25, 'Robusta Toraja', 'Biji Kopi', 68000, 'Kopi ini memiliki tekstur body yang medium, tingkat keasaman rendah, dan aroma kakao dan ceri.', 100, 'gambar_produk/Robusta_Toraja.jpeg'),
(26, 'Robusta Jawa', 'Biji Kopi', 56000, 'Kopi yang berasal dari Jawa Timur, Indonesia, memiliki rasa pahit dan teksturnya medium sehingga cocok Anda minum pada berbagai kesempatan.\r\n\r\n', 100, 'gambar_produk/Robusta_Jawa.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tmp_po_terima`
--

CREATE TABLE `tmp_po_terima` (
  `id` int(10) NOT NULL,
  `no_po` varchar(10) NOT NULL,
  `kd_cus` varchar(10) NOT NULL,
  `kode` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `qty` int(8) NOT NULL,
  `total` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pw` text NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gambar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `pw`, `fullname`, `gambar`) VALUES
(1, 'albertus', 'a99d4613fbadc61935ffc3a04170d8429e74de5c', 'Albertus Magnus Foresta Noventona', 'gambar_admin/foto_profil.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kd_cus`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_kon`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`no_po`);

--
-- Indexes for table `po_terima`
--
ALTER TABLE `po_terima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `tmp_po_terima`
--
ALTER TABLE `tmp_po_terima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_kon` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `po_terima`
--
ALTER TABLE `po_terima`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `kode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tmp_po_terima`
--
ALTER TABLE `tmp_po_terima`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
