-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2023 pada 02.39
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

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
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(4) NOT NULL,
  `id_kategori` int(4) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_kategori`, `judul`, `deskripsi`) VALUES
(1, 2, 'Latihan Dasar', 'tes coba duu'),
(2, 1, 'Artikel Mental 1', 'Lorem, ipsum dolor sit amet consectetur ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_artikel`
--

CREATE TABLE `gambar_artikel` (
  `id_gambar` int(4) NOT NULL,
  `id_artikel` int(4) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gambar_artikel`
--

INSERT INTO `gambar_artikel` (`id_gambar`, `id_artikel`, `nama_gambar`) VALUES
(2, 1, '63c81e258d564-apk (2).png'),
(3, 2, '63c81e5100bf4-apk (5).png'),
(4, 1, '63c84378664cc-mawar.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(4) NOT NULL,
  `id_user` int(4) NOT NULL,
  `id_kuisioner` int(4) NOT NULL,
  `jawaban` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(4) NOT NULL,
  `nama` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'Mental'),
(2, 'Cuaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultan`
--

CREATE TABLE `konsultan` (
  `id_konsultan` int(4) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `noHp` varchar(13) NOT NULL,
  `imageUrl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konsultan`
--

INSERT INTO `konsultan` (`id_konsultan`, `nama`, `noHp`, `imageUrl`) VALUES
(1, 'Moh Bahrul Ulum', '089516295079', '63ccb69b11dbb-dsc_1662 - copy.jpg'),
(2, 'Dimas Fany Azzuzi', '089619713034', '63ccb718eef56-20210216_131727.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuisioner`
--

CREATE TABLE `kuisioner` (
  `id_kuisioner` int(11) NOT NULL,
  `pertanyaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kuisioner`
--

INSERT INTO `kuisioner` (`id_kuisioner`, `pertanyaan`) VALUES
(1, 'Saya bahagia, puas, atau senang dengan kehidupan saya'),
(2, 'Saya merasa kesepian'),
(3, 'Saya takut atau gelisah ketika dihadapkan pada situasi yang tidak terduga'),
(4, 'Saya merasa masa depan terlihat penuh harapan dan menjanjikan bagi saya'),
(5, 'Kehidupan sehari-hari saya dipenuhi oleh hal-hal yang menarik'),
(6, 'Saya merasa tenang dan terbebas dari perasaan tertekan'),
(7, 'Saya menikmati hal-hal yang sedang saya lakukan'),
(8, 'Saya menyadari jika saya kehilangan kendali untuk bertindak, berbicara, berpikir, merasakan, atau mengingat'),
(9, 'Saya merasa sangat sedih dan tertekan'),
(10, 'Saya merasa dicintai dan dibutuhkan'),
(11, 'Saya merasa penuh kecemasan'),
(12, 'Saya berharap memiliki hari yang menarik atau menyenangkan saat bangun di pagi hari'),
(13, 'Saya merasa tegang atau penuh emosi'),
(14, 'Saya mampu mengendalikan perilaku, pikiran, emosi atau perasaan saya dengan penuh kesadaran'),
(15, 'Tangan saya pernah gemetar ketika sedang mencoba melakukan sesuatu'),
(16, 'Saya merasa bahwa tidak ada sesuatu yang saya inginkan'),
(17, 'Saya merasa tenang dan damai'),
(18, 'Saya merasa bahwa emosi saya stabil'),
(19, 'Saya merasa murung dan sedih'),
(20, 'Saya merasa ingin menangis'),
(21, 'Saya merasa bahwa orang lain akan merasa lebih baik apabila saya meninggal'),
(22, 'Saya dapat merasa santai dengan mudah'),
(23, 'Saya merasa bahwa hubungan cinta saya penuh dengan perasaan mencintai dan dicintai'),
(24, 'Saya merasa bahwa segala sesuatu yang terjadi tidak sesuai dengan keinginan saya'),
(25, 'Saya terganggu oleh rasa gelisah, atau kebingungan'),
(26, 'Saya merasa bahwa hidup adalah suatu pengalaman yang amat menarik dan menyenangkan'),
(27, 'Saya merasa sangat sedih sehingga tidak ada yang dapat menghibur saya'),
(28, 'Saya berpikir untuk mengakhiri hidup saya'),
(29, 'Saya merasa gelisah, tidak tenang atau tidak sabar'),
(30, 'Saya menjadi murung atau merenung karena suatu hal'),
(31, 'Saya gembira dan bersenang hati'),
(32, 'Saya mengalami kebingungan, marah atau gugup'),
(33, 'Saya merasa khawatir'),
(34, 'Saya bahagia'),
(35, 'Saya mencoba untuk menenangkan diri'),
(36, 'Saya merasa kurang bersemangat'),
(37, 'Saya merasa segar dan bugar ketika bangun tidur'),
(38, 'Saya berada dalam keadaan tegang, stres atau tertekan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(4) NOT NULL,
  `username` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `name`, `password`, `role`) VALUES
(1, 'admin', 'Admin Me-HealthGo', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(3, 'dimas', 'dimas', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(4, 'mahfud', 'mahfud', '1234', 'user'),
(5, 'bahrul@gmail.com', 'Moh Bahrul Ulum', '81dc9bdb52d04dc20036dbd8313ed055', 'user'),
(6, 'azril', 'Azril Nur Rahman', '81dc9bdb52d04dc20036dbd8313ed055', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `gambar_artikel`
--
ALTER TABLE `gambar_artikel`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id_artikel` (`id_artikel`);

--
-- Indeks untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kuisioner` (`id_kuisioner`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `konsultan`
--
ALTER TABLE `konsultan`
  ADD PRIMARY KEY (`id_konsultan`);

--
-- Indeks untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  ADD PRIMARY KEY (`id_kuisioner`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `gambar_artikel`
--
ALTER TABLE `gambar_artikel`
  MODIFY `id_gambar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `konsultan`
--
ALTER TABLE `konsultan`
  MODIFY `id_konsultan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kuisioner`
--
ALTER TABLE `kuisioner`
  MODIFY `id_kuisioner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `gambar_artikel`
--
ALTER TABLE `gambar_artikel`
  ADD CONSTRAINT `gambar_artikel_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`);

--
-- Ketidakleluasaan untuk tabel `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `jawaban_ibfk_2` FOREIGN KEY (`id_kuisioner`) REFERENCES `kuisioner` (`id_kuisioner`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
