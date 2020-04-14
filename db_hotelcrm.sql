-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 09:07 AM
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
-- Table structure for table `checkin`
--

CREATE TABLE `checkin` (
  `nomor_checkin` int(20) NOT NULL,
  `no_kamar` int(5) DEFAULT NULL,
  `email_pemesan` varchar(100) DEFAULT NULL,
  `arrival` date DEFAULT NULL,
  `depart` date DEFAULT NULL,
  `lama_menginap` int(3) DEFAULT NULL,
  `harga_awal` float DEFAULT NULL,
  `bf` int(20) DEFAULT NULL,
  `extra_bed` int(20) DEFAULT NULL,
  `total_harga` int(20) DEFAULT NULL,
  `pax` int(5) DEFAULT NULL,
  `hu` int(5) DEFAULT NULL,
  `remark` enum('WALK IN','HOUSE USE','PEGI PEGI','TRAVELOKA','TIKET.COM','COMPLIMENT','AGODA') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkin`
--

INSERT INTO `checkin` (`nomor_checkin`, `no_kamar`, `email_pemesan`, `arrival`, `depart`, `lama_menginap`, `harga_awal`, `bf`, `extra_bed`, `total_harga`, `pax`, `hu`, `remark`) VALUES
(2, 103, 'mutia@gmail.com', '2020-03-18', '2020-03-20', 2, 580000, 20000, 100000, 1000000, 2, 1, 'WALK IN');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas_kamar`
--

CREATE TABLE `fasilitas_kamar` (
  `id_fasilitas` int(5) NOT NULL,
  `kd_kategori` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas_kamar`
--

INSERT INTO `fasilitas_kamar` (`id_fasilitas`, `kd_kategori`) VALUES
(2, 'K-121'),
(2, 'K-122'),
(2, 'K-123'),
(2, 'K-124'),
(2, 'K-125'),
(2, 'K-126'),
(2, 'K-127'),
(2, 'K-128'),
(2, 'K-129'),
(2, 'K-130'),
(2, 'K-131'),
(2, 'K-132'),
(2, 'K-133'),
(2, 'K-134'),
(2, 'K-135'),
(2, 'K-136'),
(3, 'K-122'),
(3, 'K-124'),
(3, 'K-126'),
(3, 'K-128'),
(3, 'K-130'),
(3, 'K-132'),
(3, 'K-134'),
(3, 'K-136'),
(9, 'K-121'),
(9, 'K-123'),
(9, 'K-125'),
(9, 'K-127'),
(9, 'K-129'),
(9, 'K-131'),
(9, 'K-133'),
(9, 'K-135'),
(10, 'K-122'),
(10, 'K-124'),
(10, 'K-126'),
(10, 'K-128'),
(10, 'K-130'),
(10, 'K-132'),
(10, 'K-134'),
(10, 'K-136'),
(11, 'K-121'),
(11, 'K-123'),
(11, 'K-125'),
(11, 'K-127'),
(11, 'K-129'),
(11, 'K-131'),
(11, 'K-133'),
(11, 'K-135');

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

--
-- Dumping data for table `menu_resto`
--

INSERT INTO `menu_resto` (`kd_menu`, `kd_jns_menu`, `nama_menu`, `harga`, `ket`) VALUES
(1, 1, 'Spaghetti Bolognaise', 45000, NULL),
(2, 1, 'Nasi Goreng', 35000, 'Pedas');

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
('NR-1', 'PAKET ARISAN', 'IDR', 100000, 'pax', 'Min 15 Orang', 'NON RESIDENTIAL'),
('NR-2', 'PAKET ULANG TAHUN', 'IDR', 175000, 'pax', 'Min 50 Orang', 'NON RESIDENTIAL'),
('NR-3', 'PAKET REUNI', 'IDR', 250000, 'pax', 'Min 100 Orang', 'NON RESIDENTIAL'),
('R-1', 'HALF DAY MEETING', 'IDR', 145000, 'pax', '1X Coffe Break, Lunch / Dinner', 'RESIDENTIAL'),
('R-2', 'FULL DAY MEETING A', 'IDR', 180000, 'pax', '2x Coffe Break, Lunch / Dinner', 'RESIDENTIAL'),
('R-3', 'FULL DAY MEETING B', 'IDR', 290000, 'pax', '2x Coffe Break, Lunch & Dinner', 'RESIDENTIAL'),
('R-4', 'FULLBOARD MEETING', 'IDR', 450000, 'pax', '2x Coffe Break, Breakfast, Lunch & Dinner', 'RESIDENTIAL');

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
(2, 'Wifi Access'),
(3, 'Breakfast'),
(4, 'Restaurant'),
(5, '24-hour room service'),
(6, 'Large Parking Space'),
(7, 'Smoking Area'),
(8, 'Non-Smoking Area'),
(9, 'Non-Breakfast'),
(10, 'Free Cancellation'),
(11, 'Non-Refundable');

-- --------------------------------------------------------

--
-- Table structure for table `m_fotokamar`
--

CREATE TABLE `m_fotokamar` (
  `id_fotokamar` int(11) NOT NULL,
  `nama_foto` varchar(200) DEFAULT NULL,
  `kd_kategori` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_fotokamar`
--

INSERT INTO `m_fotokamar` (`id_fotokamar`, `nama_foto`, `kd_kategori`) VALUES
(9, 'K-122--03-04-2020--superior.jpg', 'K-124'),
(10, 'K-125--03-04-2020--superiortwin.jpg', 'K-130'),
(11, 'K-127--03-04-2020--rumahkayu.jpg', 'K-134'),
(12, 'K-123--03-04-2020--twin.jpg', 'K-126'),
(14, 'K-126--03-04-2020--family.jpg', 'K-132'),
(27, 'K-122--03-04-2020--20200312_092827.jpg', 'K-122'),
(30, 'K-136--09-04-2020--1.jpg', 'K-136'),
(31, 'K-135--09-04-2020--1.jpg', 'K-135'),
(32, 'K-133--09-04-2020--rumahkayu2.jpg', 'K-133'),
(33, 'K-131--09-04-2020--family3.jpg', 'K-131'),
(34, 'K-129--09-04-2020--superiortwin2.jpg', 'K-129'),
(36, 'K-125--09-04-2020--twin2.jpg', 'K-125'),
(37, 'K-123--09-04-2020--superior2.jpg', 'K-123'),
(38, 'K-121--09-04-2020--standar2.jpg', 'K-121'),
(39, 'K-127--09-04-2020--20200308_154612.jpg', 'K-127'),
(40, 'K-128--09-04-2020--supking.jpg', 'K-128');

-- --------------------------------------------------------

--
-- Table structure for table `m_fotoroom`
--

CREATE TABLE `m_fotoroom` (
  `id_room` int(11) NOT NULL,
  `nama_foto` varchar(200) DEFAULT NULL,
  `kd_room` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_fotoroom`
--

INSERT INTO `m_fotoroom` (`id_room`, `nama_foto`, `kd_room`) VALUES
(8, 'RM-1--09-04-2020--malaka-a.jpg', 'RM-1'),
(9, 'RM-2--09-04-2020--malaka-b.jpg', 'RM-2'),
(10, 'RM-4--09-04-2020--pent.jpg', 'RM-4'),
(12, 'RM-3--09-04-2020--ballroom2.jpg', 'RM-3');

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
(2, 'minuman'),
(3, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `m_kamar`
--

CREATE TABLE `m_kamar` (
  `no_kamar` int(5) NOT NULL,
  `lantai` int(3) DEFAULT NULL,
  `kd_kategori` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kamar`
--

INSERT INTO `m_kamar` (`no_kamar`, `lantai`, `kd_kategori`) VALUES
(1, 2, 'K-134'),
(2, 2, 'K-134'),
(3, 2, 'K-134'),
(4, 2, 'K-134'),
(5, 2, 'K-134'),
(6, 2, 'K-134'),
(101, 1, 'K-130'),
(102, 1, 'K-128'),
(103, 1, 'K-132'),
(104, 1, 'K-128'),
(105, 1, 'K-132'),
(106, 1, 'K-126'),
(107, 1, 'K-132'),
(108, 1, 'K-128'),
(109, 1, 'K-128'),
(110, 1, 'K-128'),
(111, 1, 'K-126'),
(112, 1, 'K-126'),
(114, 1, 'K-126'),
(115, 1, 'K-128'),
(201, 1, 'K-122'),
(202, 1, 'K-128'),
(203, 1, 'K-122'),
(204, 1, 'K-130'),
(205, 1, 'K-128'),
(206, 1, 'K-130'),
(207, 1, 'K-128'),
(208, 1, 'K-126'),
(209, 1, 'K-136'),
(210, 1, 'K-128'),
(211, 1, 'K-122'),
(301, 2, 'K-122'),
(302, 2, 'K-122'),
(303, 2, 'K-126'),
(304, 2, 'K-126'),
(305, 2, 'K-126'),
(306, 2, 'K-128'),
(307, 2, 'K-128'),
(308, 2, 'K-128'),
(309, 2, 'K-128'),
(310, 2, 'K-122'),
(311, 2, 'K-128'),
(312, 2, 'K-124'),
(314, 2, 'K-128'),
(315, 2, 'K-124'),
(316, 2, 'K-128'),
(317, 2, 'K-126'),
(318, 2, 'K-126'),
(319, 2, 'K-126');

-- --------------------------------------------------------

--
-- Table structure for table `m_kategori`
--

CREATE TABLE `m_kategori` (
  `kd_kategori` varchar(6) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `keterangan` text,
  `harga_permalam` float DEFAULT NULL,
  `rating_kamar` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_kategori`
--

INSERT INTO `m_kategori` (`kd_kategori`, `kategori`, `keterangan`, `harga_permalam`, `rating_kamar`) VALUES
('K-121', 'STANDARD', '1 Guest', 225000, NULL),
('K-122', 'STANDARD', '1 Guest', 270000, 3.5),
('K-123', 'SUPERIOR SINGLE', '2 Guest', 305000, NULL),
('K-124', 'SUPERIOR SINGLE', '2 Guest', 350000, 4),
('K-125', 'SUPERIOR TWIN', '2 Guest', 305000, NULL),
('K-126', 'SUPERIOR TWIN', '2 Guest', 350000, 4),
('K-127', 'SUPERIOR KING', '2 Guest', 305000, NULL),
('K-128', 'SUPERIOR KING', '2 Guest', 350000, 4.5),
('K-129', 'TRIPLE', '3 Guest', 455000, NULL),
('K-130', 'TRIPLE', '3 Guest', 500000, 4.5),
('K-131', 'FAMILY KING', '4 Guest', 555000, NULL),
('K-132', 'FAMILY KING', '4 Guest', 600000, 4.5),
('K-133', 'RUMAH KAYU', '2 Guest', 455000, NULL),
('K-134', 'RUMAH KAYU', '2 Guest', 500000, 5),
('K-135', 'JUNIOR SUITE', '2 Guest', 655000, NULL),
('K-136', 'JUNIOR SUITE', '2 Guest', 700000, 5);

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
  `class` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_room`
--

INSERT INTO `m_room` (`kd_room`, `room`, `location`, `size`, `theatre`, `u-shape`, `class`) VALUES
('RM-1', 'MALAKA A', '1st Floor', '14 sqm', 20, 15, 20),
('RM-2', 'MALAKA C', '1st Floor', '45 sqm', 100, 60, 70),
('RM-3', 'BALLROOM', '1st Floor', '170 sqm', 300, 100, 250),
('RM-4', 'PENT HOUSE', '2nd Floor', '35 sqm', 70, 60, 60);

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

--
-- Dumping data for table `paket_makan`
--

INSERT INTO `paket_makan` (`kd_paket`, `nama_paket`, `harga`, `satuan`, `ket`, `kategori`) VALUES
(1, 'IFTAR RAMADHAN', 50000, 'Orang/Pax', 'All You Can Eat (Ala Prasmanan)', 'Standard');

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
  `email` varchar(100) DEFAULT NULL,
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

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `created_at`, `updated_at`, `login_at`, `aktif`, `role_id`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$fneSqtaM7IBYtxjtZgOo0eOosIOn7kNXyjLA3nVP8kZKT.U1KdYN6', '2019-07-17 10:51:09', '2020-02-08 02:27:45', '2020-04-09 02:14:09', 'Y', 1),
(11, 'operator', NULL, '$2y$10$Jf88CHp8yZiGnh5qyxehoeeLpttHH5lMm8N3kI71unK0qVszx4RUe', '2019-09-08 06:00:00', '2019-10-05 12:58:48', NULL, 'Y', 2),
(13, 'op2', NULL, '$2y$10$w8Ccueynr7Sv.YxkhaRURO9AghhTQsg/ylz7iGE05v9TGHQoz.6DK', '2019-10-23 03:00:00', '2019-10-23 03:16:29', NULL, 'Y', 2),
(38, 'pppp', 'pqp@gmail.com', '$2y$10$L7zEFffbalNlfhw7zN.zQeUUTQckyjMMSUTK2ajWV2zpAoNbXrIrq', NULL, '2020-03-06 13:08:24', NULL, NULL, 1),
(42, 'lmn', 'lmn@gmail.com', '$2y$10$tny5UKmUzcLrshvALhtWEeXdNPCLuaYBfEFlvBBvMmNpykuZjc4Ii', NULL, '2020-03-06 13:14:00', NULL, NULL, 1);

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
(1, 'Admin', '', '0000-00-00', 'Pria', '', NULL, '', '1.PNG', 1),
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
(1, 'Front Office'),
(2, 'Manager'),
(3, 'Resto'),
(4, 'Marketing'),
(5, 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`nomor_checkin`);

--
-- Indexes for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD PRIMARY KEY (`id_fasilitas`,`kd_kategori`),
  ADD KEY `kd_kategori` (`kd_kategori`),
  ADD KEY `id_fasilitas` (`id_fasilitas`);

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
-- Indexes for table `m_fotokamar`
--
ALTER TABLE `m_fotokamar`
  ADD PRIMARY KEY (`id_fotokamar`),
  ADD KEY `kd_kategori` (`kd_kategori`);

--
-- Indexes for table `m_fotoroom`
--
ALTER TABLE `m_fotoroom`
  ADD PRIMARY KEY (`id_room`),
  ADD KEY `m_fotoroom_ibfk_1` (`kd_room`);

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
-- AUTO_INCREMENT for table `checkin`
--
ALTER TABLE `checkin`
  MODIFY `nomor_checkin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_resto`
--
ALTER TABLE `menu_resto`
  MODIFY `kd_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `m_fasilitas`
--
ALTER TABLE `m_fasilitas`
  MODIFY `kd_fasilitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `m_fotokamar`
--
ALTER TABLE `m_fotokamar`
  MODIFY `id_fotokamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `m_fotoroom`
--
ALTER TABLE `m_fotoroom`
  MODIFY `id_room` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `m_jenismakanan`
--
ALTER TABLE `m_jenismakanan`
  MODIFY `kd_jns_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket_makan`
--
ALTER TABLE `paket_makan`
  MODIFY `kd_paket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trans_resto`
--
ALTER TABLE `trans_resto`
  MODIFY `kd_trans_resto` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users_profile`
--
ALTER TABLE `users_profile`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users_role`
--
ALTER TABLE `users_role`
  MODIFY `id_role` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas_kamar`
--
ALTER TABLE `fasilitas_kamar`
  ADD CONSTRAINT `fasilitas_kamar_ibfk_1` FOREIGN KEY (`id_fasilitas`) REFERENCES `m_fasilitas` (`kd_fasilitas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fasilitas_kamar_ibfk_2` FOREIGN KEY (`kd_kategori`) REFERENCES `m_kategori` (`kd_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_resto`
--
ALTER TABLE `menu_resto`
  ADD CONSTRAINT `menu_resto_ibfk_1` FOREIGN KEY (`kd_jns_menu`) REFERENCES `m_jenismakanan` (`kd_jns_menu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `m_fotokamar`
--
ALTER TABLE `m_fotokamar`
  ADD CONSTRAINT `m_fotokamar_ibfk_1` FOREIGN KEY (`kd_kategori`) REFERENCES `m_kategori` (`kd_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `m_fotoroom`
--
ALTER TABLE `m_fotoroom`
  ADD CONSTRAINT `m_fotoroom_ibfk_1` FOREIGN KEY (`kd_room`) REFERENCES `m_room` (`kd_room`) ON DELETE CASCADE ON UPDATE CASCADE;

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
