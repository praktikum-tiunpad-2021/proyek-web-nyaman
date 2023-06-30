-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 12:35 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_nyaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_kamar`
--

CREATE TABLE `detail_kamar` (
  `id_detail` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `luas_kamar` int(11) NOT NULL,
  `ranjang` varchar(255) NOT NULL,
  `ac` varchar(255) NOT NULL,
  `tv` varchar(255) NOT NULL,
  `wifi` varchar(255) NOT NULL,
  `tmp_penyimpanan` varchar(255) NOT NULL,
  `mini_bar` varchar(255) NOT NULL,
  `kamar_mandi` varchar(255) NOT NULL,
  `hair_dryer` varchar(255) NOT NULL,
  `air` varchar(255) NOT NULL,
  `sarapan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_kamar`
--

INSERT INTO `detail_kamar` (`id_detail`, `id_kamar`, `deskripsi`, `luas_kamar`, `ranjang`, `ac`, `tv`, `wifi`, `tmp_penyimpanan`, `mini_bar`, `kamar_mandi`, `hair_dryer`, `air`, `sarapan`) VALUES
(0, 22, '', 27, 'Queen Bed', 'ada', 'ada', 'ada', '', '', '', '', '', ''),
(1, 1, 'Kamar Deluxe ini dilengkapi dengan furnitur eksklusif dan berbagai fasilitas pendukung dan juga pemandangan kota', 27, 'Queen atau Twin Single Bed', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'tidak ada'),
(2, 2, 'Seluruh kamar Deluxe Premium didesain dengan elegan, dilengkapi dengan fasilitas modern yang lengkap untuk memastikan kenyaman Anda selama menginap di Hotel Nyaman', 29, 'Queen atau Twin Single Bed', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada'),
(3, 3, 'Kamar Grand Deluxe seluas 32 meter persegi ini dilengkapi dengan tempat tidur ukuran queen dengan pilihan pemandangan kolam renang, serta dilengkapi fasilitas kamar standar.', 32, 'Queen Bed', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada'),
(4, 4, 'Kamar ini merupakan pilihan yang sempurna bagi para eksekutif dilengkapi dengan fasilitas istimewa untuk seluruh kamar. Fasilitas istimewa yang diperoleh adalah akses eksklusif untuk semua pelayanan yang tersedia di Executive Lounge, diantaranya makan pagi ala kontinental, wine serta cocktail tersedia mulai pukul 18.00 – 20.00.', 27, 'Queen atau Twin Bed', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada'),
(5, 5, 'Untuk tamu kami yang menikmati seluruh waktu bersantai dalam privasi kamar mereka, Suite kami menawarkan ruang tamu yang luas dengan lounge dan meja makan untuk membuat Anda merasa seperti di rumah sendiri. Kamar-kamar dirancang dengan indah di mana para tamu menerima perhatian ekstra, termasuk Minuman Selamat Datang pada saat kedatangan, akses gratis ke Executive Lounge, serta wine dan koktail gratis yang disajikan antara pukul 18:00 dan 20:00 setiap hari.\r\n\r\nKeuntungan kamar Suite:Ruang tamu terpisah, dilengkapi dengan majalah dan koran, Meja Makan, Keranjang buah dalam kamar, Akses ke Executive Club Lounge untuk tamu yang terdaftar, Gratis wine dan koktail antara pukul 18:00-20:00 di Executive Lounge, dan Bebas Asap Rokok', 70, 'Queen Bed', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada'),
(6, 6, 'Terbaik dari yang terbaik. Presidential Suite seluas 82 meter persegi ini didesain secara eksklusif. Setiap kamar memiliki pilihan pemandangan ke kolam yang tenang atau ke arah kota, dan dilengkapi fasilitas kamar yang bagus. \r\n\r\nKeuntungan kamar Presidential Suite: Jus buah segar saat kedatangan (satu kali pengaturan dalam minibar), Ruang tamu terpisah, dilengkapi dengan majalah dan koran, Meja Makan, Keranjang buah dalam kamar, Akses ke Executive Club Lounge untuk tamu yang terdaftar, Gratis wine dan koktail antara pukul 18:00-20:00 di Executive Lounge, dan Bebas Asap Rokok', 82, 'Queen Bed', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kamar`
--

CREATE TABLE `jenis_kamar` (
  `id_kamar` int(11) NOT NULL,
  `jenis_kamar` varchar(30) NOT NULL,
  `harga` float NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`id_kamar`, `jenis_kamar`, `harga`, `gambar`) VALUES
(1, 'Deluxe Room', 300000, 'deluxe-room.jpeg'),
(2, 'Deluxe Premium Room', 350000, 'deluxe-premium-room.jpeg'),
(3, 'Grand Deluxe Room', 400000, 'grand-deluxe.jpeg'),
(4, 'Executive Room', 400000, 'executive-room.jpeg'),
(5, 'Suite Room', 700000, 'suite-room.jpeg'),
(6, 'Presidential Suite Room', 800000, 'presidential-suite-room.jpeg'),
(22, 'Standard Room', 250000, '');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `no_kamar` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `status` enum('kosong','terisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `id_kamar`, `status`) VALUES
(101, 1, 'terisi'),
(102, 2, 'kosong'),
(103, 1, 'kosong'),
(104, 1, 'kosong'),
(105, 1, 'kosong'),
(106, 1, 'kosong'),
(108, 1, 'kosong'),
(110, 1, 'kosong'),
(201, 2, 'kosong'),
(202, 2, 'kosong'),
(203, 2, 'kosong'),
(204, 2, 'kosong'),
(205, 4, 'kosong'),
(301, 3, 'kosong'),
(302, 3, 'kosong'),
(303, 3, 'kosong'),
(304, 3, 'kosong'),
(401, 4, 'kosong'),
(402, 4, 'kosong'),
(403, 4, 'kosong'),
(404, 4, 'kosong'),
(501, 5, 'kosong'),
(502, 5, 'kosong'),
(601, 6, 'kosong'),
(602, 6, 'kosong');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `no_pesanan` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `harga` float NOT NULL,
  `currentTime` datetime NOT NULL,
  `status` enum('Selesai','Belum Selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`no_pesanan`, `username`, `no_kamar`, `checkin`, `checkout`, `harga`, `currentTime`, `status`) VALUES
(1, 'junedi', 101, '2021-12-09', '2021-12-10', 300000, '2021-12-08 06:32:33', 'Belum Selesai'),
(15, 'junedi', 101, '2021-12-09', '2021-12-10', 300000, '2021-12-08 06:32:33', 'Belum Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `first_name`, `last_name`, `email`, `alamat`, `no_hp`, `role`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', NULL, NULL, NULL, NULL, NULL, 'admin'),
('aku9012', '61835ca15a2df9c667072b0e6c247d55', 'aku', 'siapa', 'karisma1@gmail.com', NULL, '082119016755', 'tamu'),
('junedi', '6e8429179524ef0490f99fdcfa3cd629', 'junedi', 'juned', 'junedi12@gmail.com', 'Jl. Mawar No. 123, Kota Bunga', '081112223334', 'tamu'),
('karis', '7f5aceb76e560ec61d5955b9af76e885', 'karism', 'karisma', 'karism@gmail.com', NULL, '+10829999999', 'tamu'),
('momogi', '26689f7dbfc8f2d122cfd9518aa85804', 'Momogi', 'Momo', NULL, NULL, NULL, 'tamu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_kamar`
--
ALTER TABLE `detail_kamar`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`),
  ADD KEY `id_kamar` (`id_kamar`),
  ADD KEY `no_kamar` (`no_kamar`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`no_pesanan`),
  ADD KEY `fk_user` (`username`),
  ADD KEY `fk_nokamar` (`no_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `no_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_kamar`
--
ALTER TABLE `detail_kamar`
  ADD CONSTRAINT `detail_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `jenis_kamar` (`id_kamar`);

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_3` FOREIGN KEY (`id_kamar`) REFERENCES `jenis_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`no_kamar`) REFERENCES `kamar` (`no_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
