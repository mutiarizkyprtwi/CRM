-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 01:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotelcrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_resto`
--

CREATE TABLE `menu_resto` (
  `kd_menu` int(5) NOT NULL,
  `kd_jns_menu` int(5) DEFAULT NULL,
  `nama_menu` varchar(100) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `ket` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `m_ballroom`
--

CREATE TABLE `m_ballroom` (
  `kd_ballroom` varchar(5) NOT NULL,
  `jenis_ballroom` varchar(100) DEFAULT NULL,
  `mata_uang` enum('IDR','USD') DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `satuan` enum('pax') NOT NULL DEFAULT 'pax',
  `detail` varchar(200) DEFAULT NULL,
  `kategori` enum('RESIDENTIAL','NON RESIDENTIAL') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_ballroom`
--

INSERT INTO `m_ballroom` (`kd_ballroom`, `jenis_ballroom`, `mata_uang`, `harga`, `satuan`, `detail`, `kategori`) VALUES
('R-1', 'HALF DAY MEETING', 'IDR', 145000, 'pax', '1X Coffe Break, Lunch / Dinner', 'RESIDENTIAL');

-- --------------------------------------------------------

--
-- Table structure for table `m_fasilitas`
--

CREATE TABLE `m_fasilitas` (
  `kd_fasilitas` int(5) NOT NULL,
  `fasilitas` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_fasilitas`
--

INSERT INTO `m_fasilitas` (`kd_fasilitas`, `fasilitas`) VALUES
(1, 'Swimming Pool'),
(2, 'Wifi Access');

-- --------------------------------------------------------

--
-- Table structure for table `m_jenismakanan`
--

CREATE TABLE `m_jenismakanan` (
  `kd_jns_menu` int(5) NOT NULL,
  `jns_menu` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_jenismakanan`
--

INSERT INTO `m_jenismakanan` (`kd_jns_menu`, `jns_menu`) VALUES
(1, 'makanan'),
(2, 'minuman');

-- --------------------------------------------------------

--
-- Table structure for table `m_kamar`
--

CREATE TABLE `m_kamar` (
  `no_kamar` varchar(5) NOT NULL,
  `lantai` int(10) DEFAULT NULL,
  `kd_kategori` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kamar`
--

INSERT INTO `m_kamar` (`no_kamar`, `lantai`, `kd_kategori`) VALUES
('101', 1, 'K-123');

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori`
--

CREATE TABLE `m_kategori` (
  `kd_kategori` varchar(6) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `harga` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kategori`
--

INSERT INTO `m_kategori` (`kd_kategori`, `kategori`, `keterangan`, `harga`) VALUES
('K-123', 'Standard', NULL, 270000),
('K-124', 'Superior', NULL, 350000),
('K-125', 'Triple', NULL, 500000),
('K-126', 'Family', NULL, 600000);

-- --------------------------------------------------------

--
-- Table structure for table `m_room`
--

CREATE TABLE `m_room` (
  `kd_room` varchar(5) NOT NULL,
  `room` varchar(100) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `theatre` int(5) DEFAULT NULL,
  `u-shape` int(5) DEFAULT NULL,
  `round` int(5) DEFAULT NULL,
  `class` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_room`
--

INSERT INTO `m_room` (`kd_room`, `room`, `location`, `size`, `theatre`, `u-shape`, `round`, `class`) VALUES
('RM-1', 'MALAKA 1', '1 Floor', '14 sqm', 40, 20, NULL, 25);

-- --------------------------------------------------------

--
-- Table structure for table `paket_makan`
--

CREATE TABLE `paket_makan` (
  `kd_paket` int(5) NOT NULL,
  `nama_paket` varchar(200) DEFAULT NULL,
  `harga` float DEFAULT NULL,
  `satuan` enum('Orang/Pax') DEFAULT NULL,
  `ket` varchar(200) DEFAULT NULL,
  `kategori` enum('Standard','VIP') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trans_resto`
--

CREATE TABLE `trans_resto` (
  `kd_trans_resto` int(5) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `jumlah_beli` int(5) DEFAULT NULL,
  `ppn` float DEFAULT NULL,
  `total_resto` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `login_at` timestamp NULL DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT NULL,
  `role_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `created_at`, `updated_at`, `login_at`, `aktif`, `role_id`) VALUES
(1, 'admin', '$2y$10$fneSqtaM7IBYtxjtZgOo0eOosIOn7kNXyjLA3nVP8kZKT.U1KdYN6', '2019-07-17 10:51:09', '2020-02-08 02:27:45', '2019-08-15 04:15:15', 'Y', 1),
(11, 'operator', '$2y$10$Jf88CHp8yZiGnh5qyxehoeeLpttHH5lMm8N3kI71unK0qVszx4RUe', '2019-09-08 06:00:00', '2019-10-05 12:58:48', NULL, 'Y', 2),
(13, 'op2', '$2y$10$w8Ccueynr7Sv.YxkhaRURO9AghhTQsg/ylz7iGE05v9TGHQoz.6DK', '2019-10-23 03:00:00', '2019-10-23 03:16:29', NULL, 'Y', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE `users_profile` (
  `id_profil` int(11) NOT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('Pria','Wanita') DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `kontak` varchar(20) DEFAULT NULL,
  `foto` varchar(100) DEFAULT 'default.png',
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`id_profil`, `nama_depan`, `nama_belakang`, `tgl_lahir`, `jk`, `alamat`, `email`, `kontak`, `foto`, `id_user`) VALUES
(1, 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, 'default.png', 1),
(11, 'operator', NULL, NULL, NULL, NULL, NULL, NULL, 'default.png', 11),
(13, 'Operator 2', NULL, NULL, NULL, NULL, NULL, NULL, 'default.png', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users_role`
--

CREATE TABLE `users_role` (
  `id_role` int(2) NOT NULL,
  `role` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_role`
--

INSERT INTO `users_role` (`id_role`, `role`) VALUES
(1, 'Administrator'),
(2, 'Operator'),
(3, 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_resto`
--
ALTER TABLE `menu_resto`
  ADD PRIMARY KEY (`kd_menu`),
  ADD KEY `kd_jns_menu` (`kd_jns_menu`);

--
-- Indexes for table `m_ballroom`
--
ALTER TABLE `m_ballroom`
  ADD PRIMARY KEY (`kd_ballroom`);

--
-- Indexes for table `m_fasilitas`
--
ALTER TABLE `m_fasilitas`
  ADD PRIMARY KEY (`kd_fasilitas`);

--
-- Indexes for table `m_jenismakanan`
--
ALTER TABLE `m_jenismakanan`
  ADD PRIMARY KEY (`kd_jns_menu`);

--
-- Indexes for table `m_kamar`
--
ALTER TABLE `m_kamar`
  ADD PRIMARY KEY (`no_kamar`),
  ADD KEY `kd_kategori` (`kd_kategori`);

--
-- Indexes for table `m_kategori`
--
ALTER TABLE `m_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `m_room`
--
ALTER TABLE `m_room`
  ADD PRIMARY KEY (`kd_room`);

--
-- Indexes for table `paket_makan`
--
ALTER TABLE `paket_makan`
  ADD PRIMARY KEY (`kd_paket`);

--
-- Indexes for table `trans_resto`
--
ALTER TABLE `trans_resto`
  ADD PRIMARY KEY (`kd_trans_resto`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `users_profile`
--
ALTER TABLE `users_profile`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users_role`
--
ALTER TABLE `users_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_resto`
--
ALTER TABLE `menu_resto`
  MODIFY `kd_menu` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_fasilitas`
--
ALTER TABLE `m_fasilitas`
  MODIFY `kd_fasilitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_jenismakanan`
--
ALTER TABLE `m_jenismakanan`
  MODIFY `kd_jns_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket_makan`
--
ALTER TABLE `paket_makan`
  MODIFY `kd_paket` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trans_resto`
--
ALTER TABLE `trans_resto`
  MODIFY `kd_trans_resto` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_profile`
--
ALTER TABLE `users_profile`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id_role` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_resto`
--
ALTER TABLE `menu_resto`
  ADD CONSTRAINT `menu_resto_ibfk_1` FOREIGN KEY (`kd_jns_menu`) REFERENCES `m_jenismakanan` (`kd_jns_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `m_kamar`
--
ALTER TABLE `m_kamar`
  ADD CONSTRAINT `m_kamar_ibfk_1` FOREIGN KEY (`kd_kategori`) REFERENCES `m_kategori` (`kd_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trans_resto`
--
ALTER TABLE `trans_resto`
  ADD CONSTRAINT `trans_resto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `users_role` (`id_role`);

--
-- Constraints for table `users_profile`
--
ALTER TABLE `users_profile`
  ADD CONSTRAINT `users_profile_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
