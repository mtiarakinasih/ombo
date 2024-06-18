-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 12:25 PM
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
-- Database: `ombo`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `roomID` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `alasan` varchar(255) NOT NULL,
  `file` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `userID`, `roomID`, `start_time`, `end_time`, `alasan`, `file`, `created_at`) VALUES
(1, 10, 4, '2024-04-11 15:00:00', '2024-04-11 17:00:00', 'Rapat proker', '', '2024-05-23 18:17:04'),
(2, 9, 2, '2024-04-22 15:00:00', '2024-04-22 16:00:00', 'Temu alumni BPPK', '', '2024-05-23 18:17:04'),
(3, 8, 2, '2024-05-17 13:00:00', '2024-05-17 16:00:00', 'Rapat perdana proker', '', '2024-05-23 18:17:04'),
(4, 7, 1, '2024-05-17 14:00:00', '2024-05-17 17:00:00', 'Latihan pagelaran', '', '2024-05-23 18:17:04'),
(5, 6, 3, '2024-05-17 11:00:00', '2024-05-17 14:00:00', 'Diklat ', '', '2024-05-23 18:17:04'),
(6, 5, 4, '2024-05-17 13:00:00', '2024-05-17 15:00:00', 'Seminar wirausaha', '', '2024-05-23 18:17:04'),
(7, 4, 2, '2024-05-11 09:00:00', '2024-05-18 14:00:00', 'Studi banding GIANTS', '', '2024-05-23 18:17:04'),
(8, 3, 1, '2024-05-11 07:00:00', '2024-05-11 15:00:00', 'Diklat', '', '2024-05-23 18:17:04'),
(9, 2, 2, '2024-04-28 06:00:00', '2024-04-28 10:00:00', 'Doa bersama ', '', '2024-05-23 18:17:04'),
(10, 1, 2, '2024-05-03 08:00:00', '2024-05-03 14:00:00', 'Regenerasi pengurus', '', '2024-05-23 18:17:04'),
(11, 7, 2, '2024-05-18 08:00:00', '2024-05-18 16:00:00', 'Latihan pagelaran gamelan  ', '', '2024-05-23 18:17:04'),
(12, 9, 4, '2024-05-01 16:00:00', '2024-05-01 17:00:00', 'Rapat proker', '', '2024-05-23 18:17:04'),
(13, 12, 2, '2024-05-03 08:00:00', '2024-05-03 13:00:00', 'Rapat bulanan', '', '2024-05-23 18:17:04'),
(14, 13, 1, '2024-04-26 13:00:00', '2024-04-26 16:00:00', 'Musyam', '', '2024-05-23 18:17:04'),
(15, 4, 1, '2024-04-20 06:00:00', '2024-04-21 15:00:00', 'Pelantikan pengurus', '', '2024-05-23 18:17:04'),
(17, 4, 2, '2024-04-27 08:00:00', '2024-04-27 14:00:00', 'Rapat proker', '', '2024-05-23 18:17:04'),
(18, 12, 1, '2024-04-13 07:30:00', '2024-04-13 12:30:00', 'Monitoring sekbid', '', '2024-05-23 18:17:04'),
(19, 13, 2, '2024-03-09 07:30:00', '2024-03-09 14:00:00', 'Rapat persiapan kemah', '', '2024-05-23 18:17:04'),
(20, 14, 3, '2024-05-10 10:00:00', '2024-05-10 13:00:00', 'Rapat bulanan', '', '2024-05-23 18:17:04'),
(21, 8, 2, '2024-03-11 07:00:00', '2024-03-11 15:00:00', 'Clasmeeting', '', '2024-05-23 18:17:04'),
(22, 3, 2, '2024-03-23 07:00:00', '2024-03-23 13:00:00', 'Rapat panitia lomba', '', '2024-05-23 18:17:04'),
(23, 5, 4, '2024-05-10 08:00:00', '2024-05-10 13:00:00', 'Seminar ', '', '2024-05-23 18:17:04'),
(24, 6, 1, '2024-05-11 06:00:00', '2024-05-11 09:00:00', 'Transit persiapan mendaki gunung', '', '2024-05-23 18:17:04'),
(29, 15, 2, '2024-05-19 08:00:00', '2024-05-19 12:00:00', 'tes', 'PROPOSAL BTS 2024 (1).pdf', '2024-05-23 18:17:04'),
(30, 15, 2, '2024-05-19 08:00:00', '2024-05-19 12:00:00', 'tes', 'PROPOSAL BTS 2024 (1).pdf', '2024-05-23 18:17:04'),
(32, 11, 1, '2024-05-12 07:00:00', '2024-05-12 15:00:00', 'Rakor History#4', '08 Mutiara S Kinasih_Kebijakan Abdurrahman Wahid.pdf', '2024-05-25 15:44:20');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_saran`
--

CREATE TABLE `kritik_saran` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `kritik_saran` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `capacity` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `capacity`, `description`) VALUES
(1, 'Ruang Bima SMK Negeri 2 Depok Sleman (Auditorium)', NULL, NULL),
(2, 'Ruang Nakula-Sadewa SMK Negeri 2 Depok Sleman', NULL, NULL),
(3, 'Ruang Yudhstira SMK Negeri 2 Depok Sleman', NULL, NULL),
(4, 'Ruang Arjuna SMK Negeri 2 Depok Sleman', NULL, NULL),
(5, 'Ruang Krisna SMK Negeri 2 Depok Sleman', NULL, ''),
(6, 'Ruang Teori SMK Negeri 2 Depok Sleman', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `foto`, `description`, `last_login`) VALUES
(1, 'KTYME-I', 'ktymeistembayo', '', 'ktymei123', '', 'Seksi Bidang Ketaqwaan Terhadap Tuhan Yang Maha Esa - Islam', NULL),
(2, 'KTYME-K', 'ktymekstembayo', NULL, 'kytmek123', '', 'Seksi Bidang Ketaqwaan Terhadap Tuhan Yang Maha Esa - Kristiani', NULL),
(3, 'KBBP', 'kbbpstembayo', NULL, 'kbbp123', '', 'Seksi Bidang Kehidupan Berbangsa dan Bernegara Pancasila', NULL),
(4, 'KBPL', 'kbplstembayo', NULL, 'kbpl123', '', 'Seksi Bidang Kepribadian Berbudi Pekerti Luhur', NULL),
(5, 'KK', 'kkstembayo', NULL, 'kk123', '', 'Seksi Bidang Keterampilan dan Kewirausahaan', NULL),
(6, 'PPBN', 'ppbnstembayo', NULL, 'ppbn123', '', 'Seksi Bidang Pendidikan Pendahuluan Bela Negara', NULL),
(7, 'PAKS', 'paksstembayo', NULL, 'paks123', '', 'Seksi Bidang Persepsi Apresiasi dan Kreasi Seni', NULL),
(8, 'KJDK', 'kjdkstembayo', NULL, 'kjdk123', '', 'Seksi Bidang Kesegaran Jasmani dan Daya Kreasi Seni', NULL),
(9, 'BPPK', 'bppkstembayo', NULL, 'bppk123', '', 'Seksi Bidang Berbahasa Penerapan Pengetahuan dan Kesastraan', NULL),
(10, 'TASIS', 'tasisstembayo', NULL, 'tasis123', '', 'Seksi Bidang Tata Tertib Siswa', NULL),
(11, 'PK', 'pkstembayo', NULL, 'pk123', '', 'Perwakilan Kelas SMK Negeri 2 Depok Sleman', NULL),
(12, 'OSIS', 'osisstembayo', NULL, 'osis123', '', 'Organisasi Siswa Intra Sekolah SMK Negeri 2 Depok Sleman', NULL),
(13, 'PRAMUKA', 'pramukastembayo', NULL, 'pramuka123', '', 'Praja Muda Karana Pangkalan SMK Negeri 2 Depok Sleman', NULL),
(14, 'HUMTIK', 'humtikstembayo', NULL, 'humtik123', '', 'Seksi Bidang Humas dan TIK SMK Negeri 2 Depok Sleman', NULL),
(15, 'Demo SaaS', 'demo', NULL, 'demo123', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `roomID` (`roomID`);

--
-- Indexes for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`roomID`) REFERENCES `rooms` (`id`);

--
-- Constraints for table `kritik_saran`
--
ALTER TABLE `kritik_saran`
  ADD CONSTRAINT `kritik_saran_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
