-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 06:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mehealthgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(4) NOT NULL,
  `id_kategori` int(4) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `judul`, `deskripsi`, `created_at`) VALUES
(1, 2, 'Latihan Dasar', 'tes coba duu', '2023-01-16'),
(2, 1, 'Artikel Mental 1', 'Lorem, ipsum dolor sit amet consectetur ', '2023-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_artikel`
--

CREATE TABLE `gambar_artikel` (
  `id_gambar` int(4) NOT NULL,
  `id_artikel` int(4) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gambar_artikel`
--

INSERT INTO `gambar_artikel` (`id_gambar`, `id_artikel`, `nama_gambar`) VALUES
(2, 1, '63c81e258d564-apk (2).png'),
(3, 2, '63c81e5100bf4-apk (5).png'),
(4, 1, '63c84378664cc-mawar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_user` int(4) NOT NULL,
  `detail_jawaban` text NOT NULL,
  `nilai` int(11) NOT NULL,
  `hasil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `id_user`, `detail_jawaban`, `nilai`, `hasil`) VALUES
(455, 5, '[\"{kuis: 1 | nilai: 1}\",\"{kuis: 2 | nilai: 3}\",\"{kuis: 3 | nilai: 3}\",\"{kuis: 4 | nilai: 3}\",\"{kuis: 5 | nilai: 2}\",\"{kuis: 6 | nilai: 2}\",\"{kuis: 7 | nilai: 3}\",\"{kuis: 8 | nilai: 3}\",\"{kuis: 9 | nilai: 4}\",\"{kuis: 10 | nilai: 3}\",\"{kuis: 11 | nilai: 4}\",\"{kuis: 12 | nilai: 4}\",\"{kuis: 13 | nilai: 3}\",\"{kuis: 14 | nilai: 3}\",\"{kuis: 15 | nilai: 3}\",\"{kuis: 16 | nilai: 2}\",\"{kuis: 17 | nilai: 3}\",\"{kuis: 18 | nilai: 4}\",\"{kuis: 19 | nilai: 4}\",\"{kuis: 20 | nilai: 3}\",\"{kuis: 21 | nilai: 3}\",\"{kuis: 22 | nilai: 3}\",\"{kuis: 23 | nilai: 3}\",\"{kuis: 24 | nilai: 3}\",\"{kuis: 25 | nilai: 3}\",\"{kuis: 26 | nilai: 3}\",\"{kuis: 27 | nilai: 4}\",\"{kuis: 28 | nilai: 4}\",\"{kuis: 29 | nilai: 3}\",\"{kuis: 30 | nilai: 2}\",\"{kuis: 31 | nilai: 3}\",\"{kuis: 32 | nilai: 3}\",\"{kuis: 33 | nilai: 3}\",\"{kuis: 34 | nilai: 3}\",\"{kuis: 35 | nilai: 3}\",\"{kuis: 36 | nilai: 3}\",\"{kuis: 37 | nilai: 3}\",\"{kuis: 38 | nilai: 3}\"]', 115, 'Mengalami depresi'),
(456, 5, '[\"{kuis: 1 | nilai: 5}\",\"{kuis: 4 | nilai: 4}\",\"{kuis: 38 | nilai: 5}\",\"{kuis: 37 | nilai: 3}\",\"{kuis: 36 | nilai: 4}\",\"{kuis: 2 | nilai: 4}\",\"{kuis: 3 | nilai: 4}\",\"{kuis: 5 | nilai: 3}\",\"{kuis: 6 | nilai: 3}\",\"{kuis: 7 | nilai: 3}\",\"{kuis: 8 | nilai: 3}\",\"{kuis: 9 | nilai: 3}\",\"{kuis: 10 | nilai: 3}\",\"{kuis: 11 | nilai: 3}\",\"{kuis: 12 | nilai: 3}\",\"{kuis: 13 | nilai: 3}\",\"{kuis: 14 | nilai: 3}\",\"{kuis: 15 | nilai: 3}\",\"{kuis: 16 | nilai: 3}\",\"{kuis: 17 | nilai: 3}\",\"{kuis: 18 | nilai: 3}\",\"{kuis: 19 | nilai: 3}\",\"{kuis: 20 | nilai: 3}\",\"{kuis: 21 | nilai: 3}\",\"{kuis: 22 | nilai: 3}\",\"{kuis: 23 | nilai: 3}\",\"{kuis: 24 | nilai: 3}\",\"{kuis: 25 | nilai: 3}\",\"{kuis: 26 | nilai: 3}\",\"{kuis: 27 | nilai: 3}\",\"{kuis: 28 | nilai: 3}\",\"{kuis: 29 | nilai: 3}\",\"{kuis: 30 | nilai: 3}\",\"{kuis: 31 | nilai: 3}\",\"{kuis: 32 | nilai: 3}\",\"{kuis: 33 | nilai: 3}\",\"{kuis: 34 | nilai: 3}\",\"{kuis: 35 | nilai: 3}\"]', 122, 'Mengalami depresi'),
(457, 5, '[\"{kuis: 1 | nilai: 5}\",\"{kuis: 4 | nilai: 4}\",\"{kuis: 38 | nilai: 5}\",\"{kuis: 37 | nilai: 3}\",\"{kuis: 36 | nilai: 4}\",\"{kuis: 2 | nilai: 4}\",\"{kuis: 3 | nilai: 4}\",\"{kuis: 5 | nilai: 3}\",\"{kuis: 6 | nilai: 3}\",\"{kuis: 7 | nilai: 3}\",\"{kuis: 8 | nilai: 3}\",\"{kuis: 9 | nilai: 3}\",\"{kuis: 10 | nilai: 3}\",\"{kuis: 11 | nilai: 3}\",\"{kuis: 12 | nilai: 3}\",\"{kuis: 13 | nilai: 3}\",\"{kuis: 14 | nilai: 3}\",\"{kuis: 15 | nilai: 3}\",\"{kuis: 16 | nilai: 3}\",\"{kuis: 17 | nilai: 3}\",\"{kuis: 18 | nilai: 3}\",\"{kuis: 19 | nilai: 3}\",\"{kuis: 20 | nilai: 3}\",\"{kuis: 21 | nilai: 3}\",\"{kuis: 22 | nilai: 3}\",\"{kuis: 23 | nilai: 3}\",\"{kuis: 24 | nilai: 3}\",\"{kuis: 25 | nilai: 3}\",\"{kuis: 26 | nilai: 3}\",\"{kuis: 27 | nilai: 3}\",\"{kuis: 28 | nilai: 3}\",\"{kuis: 29 | nilai: 3}\",\"{kuis: 30 | nilai: 3}\",\"{kuis: 31 | nilai: 3}\",\"{kuis: 32 | nilai: 3}\",\"{kuis: 33 | nilai: 3}\",\"{kuis: 34 | nilai: 3}\",\"{kuis: 35 | nilai: 3}\"]', 0, 'Tidak mengalami depresi');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(4) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Mental'),
(2, 'Cuaca');

-- --------------------------------------------------------

--
-- Table structure for table `konsultan`
--

CREATE TABLE `konsultan` (
  `id_konsultan` int(4) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `noHp` varchar(13) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `imageUrl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konsultan`
--

INSERT INTO `konsultan` (`id_konsultan`, `nama`, `noHp`, `pekerjaan`, `alamat`, `imageUrl`) VALUES
(3, 'AMIRINZA NAVILYAH PUTRI', '+628214097923', '', '', '63e5ba8134987-img_20230123_095827_606.jpg'),
(4, 'Ns. M. Elyas Arif Budiman, S.Kep., M.Kep.', '+628384748777', '', '', '63e5bab9b39c2-whatsapp image 2023-02-10 at 10.03.41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id_kuisioner` int(11) NOT NULL,
  `nomor` varchar(3) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kuisioner`
--

INSERT INTO `kuisioner` (`id_kuisioner`, `nomor`, `pertanyaan`) VALUES
(1, '1', 'Saya bahagia, puas, atau senang dengan kehidupan pribadi saya'),
(2, '2', 'Saya merasa kesepian'),
(3, '3', 'Saya takut atau gelisah ketika dihadapkan pada situasi yang tidak terduga'),
(4, '4', 'Saya merasa masa depan terlihat penuh harapan dan menjanjikan bagi saya'),
(5, '5', 'Kehidupan sehari-hari saya dipenuhi oleh hal-hal yang menarik'),
(6, '6', 'Saya merasa tenang dan terbebas dari perasaan tertekan'),
(7, '7', 'Saya menikmati hal-hal yang sedang saya lakukan'),
(8, '8', 'Saya menyadari jika saya kehilangan kendali untuk bertindak, berbicara,\r\nberpikir, merasakan, atau mengingat'),
(9, '9', 'Saya merasa sangat sedih dan tertekan'),
(10, '10', 'Saya merasa dicintai dan dibutuhkan'),
(11, '11', 'Saya merasa penuh kecemasan'),
(12, '12', 'Saya berharap memiliki hari yang menarik atau menyenangkan saat bangun di\r\npagi hari\r\n'),
(13, '13', 'Saya merasa tegang atau penuh emosi'),
(14, '14', 'Saya mampu mengendalikan perilaku, pikiran, emosi atau perasaan saya\r\ndengan penuh kesadaran'),
(15, '15', 'Tangan saya pernah gemetar ketika sedang mencoba melakukan sesuatu'),
(16, '16', 'Saya merasa bahwa tidak ada sesuatu yang saya inginkan'),
(17, '17', 'Saya merasa tenang dan damai'),
(18, '18', 'Saya merasa bahwa emosi saya stabil'),
(19, '19', 'Saya merasa murung dan sedih'),
(20, '20', 'Saya merasa ingin menangis'),
(21, '21', 'Saya merasa bahwa orang lain akan merasa lebih baik apabila saya meninggal'),
(22, '22', 'Saya dapat merasa santai dengan mudah'),
(23, '23', 'Saya merasa bahwa hubungan cinta saya penuh dengan perasaan mencintai dan dicintai'),
(24, '24', 'Saya merasa bahwa segala sesuatu yang terjadi tidak sesuai dengan keinginan\r\nsaya'),
(25, '25', 'Saya terganggu oleh rasa gelisah, atau kebingungan'),
(26, '26', 'Saya merasa bahwa hidup adalah suatu pengalaman yang amat menarik dan\r\nmenyenangkan'),
(27, '27', 'Saya merasa sangat sedih sehingga tidak ada yang dapat menghibur saya'),
(28, '28', 'Saya berpikir untuk mengakhiri hidup saya'),
(29, '29', 'Saya merasa gelisah, tidak tenang atau tidak sabar'),
(30, '30', 'Saya menjadi murung atau merenung karena suatu hal'),
(31, '31', 'Saya gembira dan bersenang hati'),
(32, '32', 'Saya mengalami kebingungan, marah atau gugup'),
(33, '33', 'Saya merasa khawatir'),
(34, '34', 'Saya bahagia'),
(35, '35', 'Saya mencoba untuk menenangkan diri'),
(36, '36', 'Saya merasa kurang bersemangat'),
(37, '37', 'Saya merasa segar dan bugar ketika bangun tidur'),
(38, '38', 'Saya berada dalam keadaan tegang, stres atau tertekan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `password` varchar(60) NOT NULL,
  `asal_sekolah` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `name`, `jenis_kelamin`, `umur`, `password`, `asal_sekolah`, `role`) VALUES
(1, 'admin', 'Admin Me-HealthGo', '-', '-', '21232f297a57a5a743894a0e4a801fc3', '', 'admin'),
(3, 'dimas', 'dimas', 'Laki-laki', '22', '81dc9bdb52d04dc20036dbd8313ed055', 'asdwd', 'user'),
(4, 'mahfud', 'mahfud', 'Laki-laki', '40', '1234', 'awdawdaw', 'user'),
(5, 'bahrul@gmail.com', 'Moh Bahrul Ulum', 'Laki-laki', '22', '81dc9bdb52d04dc20036dbd8313ed055', 'adwdwdaw', 'user'),
(7, 'Dimas Fany Azzuzi ', 'dimas', 'Laki-laki', '21', '4abf6b9b55aa45ef1e1200d0df5a9eb8', 'MAN 2 SITUBONDO ', 'user'),
(8, 'uguhu', 'awaw', 'Laki-laki', '22', '5c69e64cebfa6578475dc7f68c8b4085', 'uuhhu', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `gambar_artikel`
--
ALTER TABLE `gambar_artikel`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_user_3` (`id_user`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konsultan`
--
ALTER TABLE `konsultan`
  ADD PRIMARY KEY (`id_konsultan`);

--
-- Indexes for table `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gambar_artikel`
--
ALTER TABLE `gambar_artikel`
  MODIFY `id_gambar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=478;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `konsultan`
--
ALTER TABLE `konsultan`
  MODIFY `id_konsultan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gambar_artikel`
--
ALTER TABLE `gambar_artikel`
  ADD CONSTRAINT `gambar_artikel_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
