-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2021 at 04:44 PM
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
(6, 'Presidential Suite Room', 800000, 'presidential-suite-room.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `no_kamar` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `no_kamar` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(16) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id_reservasi`),
  ADD KEY `username` (`username`),
  ADD KEY `no_kamar` (`no_kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_kamar`
--
ALTER TABLE `detail_kamar`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_2` FOREIGN KEY (`no_kamar`) REFERENCES `reservasi` (`no_kamar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kamar_ibfk_3` FOREIGN KEY (`id_kamar`) REFERENCES `jenis_kamar` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `reservasi` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
