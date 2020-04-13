-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2020 at 04:36 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `datasekolah_tbl`
--

CREATE TABLE `datasekolah_tbl` (
  `kecamatan` varchar(50) NOT NULL,
  `sd_negeri` int(3) NOT NULL,
  `sd_swasta` int(3) NOT NULL,
  `smp_negeri` int(3) NOT NULL,
  `smp_swasta` int(3) NOT NULL,
  `sma_negeri` int(3) NOT NULL,
  `sma_swasta` int(3) NOT NULL,
  `smk_negeri` int(3) NOT NULL,
  `smk_swasta` int(3) NOT NULL,
  `slb_negeri` int(3) NOT NULL,
  `slb_swasta` int(3) NOT NULL,
  `id_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datasekolah_tbl`
--

INSERT INTO `datasekolah_tbl` (`kecamatan`, `sd_negeri`, `sd_swasta`, `smp_negeri`, `smp_swasta`, `sma_negeri`, `sma_swasta`, `smk_negeri`, `smk_swasta`, `slb_negeri`, `slb_swasta`, `id_kecamatan`) VALUES
('Semarang Barat', 27, 18, 4, 15, 1, 12, 0, 8, 0, 1, 1),
('Pedurungan', 32, 17, 4, 12, 1, 4, 0, 6, 0, 5, 2),
('Banyumanik', 31, 13, 4, 13, 2, 7, 1, 5, 0, 1, 3),
('Semarang Tengah', 13, 21, 5, 15, 2, 6, 0, 10, 0, 4, 4),
('Gunung Pati', 33, 6, 3, 9, 1, 4, 0, 5, 0, 0, 5),
('Tembalang', 21, 13, 4, 11, 1, 0, 0, 4, 1, 3, 6),
('Semarang Selatan', 14, 16, 4, 7, 2, 3, 5, 2, 0, 0, 7),
('Semarang Timur', 14, 14, 2, 9, 0, 4, 4, 5, 0, 0, 8),
('Mijen', 24, 7, 3, 8, 2, 3, 0, 4, 0, 0, 9),
('Ngaliyan', 28, 8, 2, 5, 2, 1, 0, 3, 0, 0, 10),
('Semarang Utara', 13, 19, 1, 7, 1, 1, 2, 2, 0, 1, 11),
('Candisari', 17, 10, 2, 8, 0, 3, 0, 5, 0, 1, 12),
('Genuk', 17, 7, 3, 6, 1, 2, 0, 5, 0, 0, 13),
('Gajahmungkur', 14, 7, 2, 6, 0, 6, 0, 5, 0, 0, 14),
('Gayamsari', 16, 5, 1, 8, 0, 3, 0, 7, 0, 0, 15),
('Tugu', 13, 1, 1, 4, 0, 1, 0, 1, 0, 0, 16),
('unnes', 90, 80, 22, 20, 35, 34, 21, 45, 46, 21, 17);

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` int(1) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `username`, `password`, `level`, `nama`) VALUES
(6, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 'Daud Dimas Prasetyo'),
(7, 'operator1', '37832cda757792aef82ce5e21f542006', 2, 'Adam Maulidani'),
(8, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 3, 'Hasyim Dahlan Attaufiqi'),
(21, 'daud', 'e5d31ab7180cd8d9e0376a9f2d67c64d', 2, 'daud'),
(22, 'dadad', '421f39a8ff4dd996a3e57877c3d98146', 2, 'dimas'),
(24, 'aidkjwoiakjwdoiajo', 'bcd0deb5caec2a67fa3967127b8e3d06', 2, 'aidkiwakdiak'),
(25, 'okofkofkok', 'c777cf89a2b16d5240cf999eb589b89a', 2, 'alkdwpoalkwodko'),
(26, 'lpolokokokoko', '148315709690bcb6986bad46f9fd7760', 2, 'lookokokokokok'),
(27, 'zectre', '4b4b49bd75d0a3831d3210d9e2df9266', 2, 'zectre'),
(28, 'oaloakokaokaoko', 'd78090533ee18af17c58bd9d2028aac7', 2, 'oloalkolkaolaoaloalo'),
(29, 'plplplplplpl', 'bf1c35f70da26488ec10b18b50763e6a', 2, 'kf,mkfkafokfoakfoako'),
(30, 'a', '0cc175b9c0f1b6a831c399e269772661', 2, 'alkdwpoalkwodko'),
(31, 'okaoakoak', '73671110d175f2c66571dc42fe0cc525', 2, 'akmakaokak'),
(32, 'l,kolkololkokok', '353d8c42c589051b487d6e9f20af0f2e', 2, 'lk,l,l,l,l,'),
(33, 'l,kolkololkokok', '353d8c42c589051b487d6e9f20af0f2e', 2, 'lk,l,l,l,l,'),
(35, 'kaga', '807659cd883fc0a63f6ce615893b3558', 2, 'yoga'),
(36, 'dauddaud', '11ffef83c85fa1623ef7bb48ac378c11', 3, 'dauddddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datasekolah_tbl`
--
ALTER TABLE `datasekolah_tbl`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datasekolah_tbl`
--
ALTER TABLE `datasekolah_tbl`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
