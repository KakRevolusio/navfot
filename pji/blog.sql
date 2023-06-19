-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 07:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `image`) VALUES
(29, 'Bagaimana Hubungan antara Ekonomi Kreatif dan Industri Kreatif? Berikut Penjelasannya!', 'Ekonomi kreatif dan industri kreatif ternyata saling berkaitan. Kedua istilah tersebut sudah lama dijadikan sebagai gagasan baru dalam sektor perekonomian Indonesia.\r\n\r\nBahkan Kominfo memaparkan bahwa ekonomi kreatif berkembang sangat pesat di angka 5,7% setiap tahunnya dan akan selalu berkembang dari tahun ke tahun.', '11.jpg'),
(30, 'Bagaimana Proses Sebuah Identitas Terbentuk', 'Setiap individu tentunya memiliki identitas. Secara bahasa, identitas berasal dari kata Bahasa Inggris, yaitu identity yang berarti identik atau sesuatu yang mirip antara satu dengan yang lainnya.\r\n\r\nMenurut Kamus Besar Bahasa Indonesia (KBBI), identitas merupakan ciri atau keadaan khusus seseorang yang menunjukkan jati dirinya. Dengan kata lain identitas menjadi refleksi diri seseorang.', '8-Cara-Download-Video-YouTube_03345_TM.jpg'),
(31, 'Jangan Panik, Begini Cara Mengatasi Lupa Kata Sandi Facebook', 'Lupa password Facebook merupakan problematika yang sering dialami banyak pengguna. Apalagi jika nomor handphone yang digunakan untuk mendaftar sudah hangus dan tidak bisa diaktifkan lagi.', 'Jangan-Panik-Begini-Cara-Mengatasi_72366_TM.jpg'),
(33, '12 Modus Penipuan Online yang Harus Kamu Waspadai!', 'Penipuan online atau penipuan digital merupakan jenis kejahatan dunia maya yang marak terjadi seiring dengan majunya teknologi. Tak dipungkiri, hal ini semakin membuat was-was para pengguna teknologi.\r\n\r\nRisiko peretasan akun dan data-data pribadi pun semakin tinggi akibat adanya online fraud ini. Untuk menghindarinya, Kamu perlu mengetahui seperti apa sih modus penipuan online itu.', '414.jpg'),
(34, 'Mayor of Kingstown Season 2: Mampukah Keluarga McLusky Menjaga Stabilitas Kota?', 'Serial televisi garapan MTV Entertainment Studio ini akhirnya mendapat perpanjangan ke musim kedua. Menghadirkan cerita yang tak kalah seru dari season 1, Mayor of Kingstown Season 2 akan menjadi tontonan menarik bagi para penggemar serial dengan genre thriller.\r\n\r\nSerial yang tayang sebanyak 10 episode ini masih dibintangi oleh para pemain lama. Beberapa di antaranya yaitu Jeremy Renner dan Dianne Wiest. Sedangkan penggarapannya masih ditangani oleh Taylor Sheridan dan Hugh Dillon yang juga turut berperan di dalamnya.\r\n\r\nMayor of Kingstown menghadirkan alur cerita lebih cepat yang akan membawa penonton pada penjelajahan dunia gelap di sebuah kota bernama Kingstown yang dipenuhi bahaya dan kekejaman. Tayang eksklusif di MOLA, tentunya cerita di season 2 ini akan semakin kompleks dan mengerikan.\r\n\r\n', 'Mayor-of-Kingstown-Season-2_72567_TM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`) VALUES
(9, 'sdfsd', 'dsfsdf'),
(10, 'punya', 'assaas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
