-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 06:34 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pakar_penyakit_dalam`
--
CREATE DATABASE IF NOT EXISTS `sistem_pakar_penyakit_dalam` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sistem_pakar_penyakit_dalam`;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` varchar(255) NOT NULL,
  `nama_penyakit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `nama_penyakit`) VALUES
('P0001', 'Kolesterol'),
('P0002', 'Hipertensi'),
('P0003', 'Jantung Koroner'),
('P0004', 'Diabetes'),
('P0005', 'Ginjal'),
('P0006', 'Pneumonia');

-- --------------------------------------------------------

--
-- Table structure for table `disease_symptom`
--

CREATE TABLE `disease_symptom` (
  `disease_id` varchar(255) NOT NULL,
  `symptom_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `disease_symptom`
--

INSERT INTO `disease_symptom` (`disease_id`, `symptom_id`) VALUES
('P0001', 'G0001'),
('P0001', 'G0002'),
('P0001', 'G0003'),
('P0001', 'G0004'),
('P0001', 'G0005'),
('P0001', 'G0006'),
('P0002', 'G0002'),
('P0002', 'G0007'),
('P0002', 'G0008'),
('P0002', 'G0009'),
('P0002', 'G0010'),
('P0002', 'G0011'),
('P0002', 'G0012'),
('P0002', 'G0013'),
('P0002', 'G0014'),
('P0002', 'G0015'),
('P0003', 'G0001'),
('P0003', 'G0002'),
('P0003', 'G0008'),
('P0003', 'G0010'),
('P0003', 'G0011'),
('P0003', 'G0016'),
('P0004', 'G0001'),
('P0004', 'G0003'),
('P0004', 'G0009'),
('P0004', 'G0017'),
('P0004', 'G0018'),
('P0004', 'G0019'),
('P0004', 'G0020'),
('P0004', 'G0021'),
('P0004', 'G0022'),
('P0004', 'G0023'),
('P0004', 'G0024'),
('P0005', 'G0001'),
('P0005', 'G0008'),
('P0005', 'G0010'),
('P0005', 'G0011'),
('P0005', 'G0015'),
('P0005', 'G0022'),
('P0005', 'G0025'),
('P0005', 'G0026'),
('P0005', 'G0027'),
('P0005', 'G0028'),
('P0006', 'G0002'),
('P0006', 'G0008'),
('P0006', 'G0010'),
('P0006', 'G0011'),
('P0006', 'G0029'),
('P0006', 'G0030'),
('P0006', 'G0031'),
('P0006', 'G0032');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` varchar(255) NOT NULL,
  `nama_gejala` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `nama_gejala`) VALUES
('G0001', 'Tubuh Mudah Lelah'),
('G0002', 'Dada Terasa Nyeri'),
('G0003', 'Kaki dan Tangan Mudah Kesemutan'),
('G0004', 'Rasa Sakit Pada Rahang'),
('G0005', 'Xanthoma'),
('G0006', 'Disfungsi Ereksi'),
('G0007', 'Mimisan'),
('G0008', 'Mual'),
('G0009', 'Gangguan Penglihatan'),
('G0010', 'Muntah'),
('G0011', 'Sesak Napas'),
('G0012', 'Telinga Berdenging'),
('G0013', 'Gangguan Irama Jantung'),
('G0014', 'Sakit Kepala'),
('G0015', 'Darah Dalam Urine'),
('G0016', 'Keringat Dingin'),
('G0017', 'Sering Buang Air Kecil'),
('G0018', 'Mudah Haus'),
('G0019', 'Mudah Lapar'),
('G0020', 'Berat Badan Turun Drastis'),
('G0021', 'Luka Yang Sulit Sembuh'),
('G0022', 'Kulit Kering'),
('G0023', 'Infeksi Jamur atau Bakteri'),
('G0024', 'Iritasi Genital'),
('G0025', 'Urine Berbusa'),
('G0026', 'Kram Otot'),
('G0027', 'Pembengkakan Pada Kaki'),
('G0028', 'Sakit Pinggang Belakang'),
('G0029', 'Batuk'),
('G0030', 'Demam'),
('G0031', 'Linglung'),
('G0032', 'Selera Makan Menurun\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama_depan`, `nama_belakang`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Judy', 'McLaughlin', 'ckunde@example.org', '2022-01-01 06:55:15', '$2y$10$fGnu9RNH1sZi7qF72lEvaeMkCaPaL1SHCboxYSFHvIfz3I3fox/C6', 'WDk4QGmVhY', '2022-01-01 06:55:16', '2022-01-01 06:55:16'),
(2, 'Macie', 'Jaskolski', 'pfannerstill.friedrich@example.com', '2022-01-01 06:55:15', '$2y$10$fQV/f27IVepYGachwzqADe.APwGKd7W11GkiNgt6b2c6qPQAk1cUK', 'TbD0O4PyUt', '2022-01-01 06:55:16', '2022-01-01 06:55:16'),
(3, 'Travis', 'Dickens', 'bartoletti.maynard@example.net', '2022-01-01 06:55:15', '$2y$10$cdRh6yBo/dIArLsfC1ZW..I0awP0EEU5S4m1htuwx3E5SY3RAvxIy', 'pJPBzCkdzP', '2022-01-01 06:55:16', '2022-01-01 06:55:16'),
(4, 'Drake', 'Kuhic', 'jaskolski.alycia@example.net', '2022-01-01 06:55:15', '$2y$10$/2kiCPM0YXZuM5zSjxpK7uAWqly13hJDwu3k8TlTL4Q9qvajlvWI.', 'Yjn7QfJtA8', '2022-01-01 06:55:16', '2022-01-01 06:55:16'),
(5, 'Tyrel', 'Schuppe', 'kutch.nellie@example.com', '2022-01-01 06:55:15', '$2y$10$EFnBWHXBxDiCc/owg7aZLOU9ujEMmaN3ihQc2ZfkwCaIo329aDTtW', 'qnMbAgr5FM', '2022-01-01 06:55:16', '2022-01-01 06:55:16'),
(6, 'Vergie', 'Runte', 'reinger.iliana@example.com', '2022-01-01 06:55:15', '$2y$10$Mj0oEWw.89kV7qVx2C5IC.KaIEJyTnJA8jEmBruS7hgN/PGbKeuai', 'qQG2lyC1hj', '2022-01-01 06:55:16', '2022-01-01 06:55:16'),
(7, 'Emmet', 'Rau', 'jamir.mayer@example.com', '2022-01-01 06:55:15', '$2y$10$Y.gNYoQMgW/eSFFTrg5qteN.zoUa7VHy.N.zV0P/peEiQk8quenuS', 'ZMXBf5u1zY', '2022-01-01 06:55:16', '2022-01-01 06:55:16'),
(8, 'Osborne', 'Crooks', 'uarmstrong@example.com', '2022-01-01 06:55:15', '$2y$10$b/9gd/0rtVKYWPdX1ErPnuHhqpH0y7l7FxbCl6.wtIXk0qk/ysjU6', 'H0JcxNz473', '2022-01-01 06:55:16', '2022-01-01 06:55:16'),
(9, 'Darby', 'Reichel', 'rickey42@example.org', '2022-01-01 06:55:15', '$2y$10$cfSBDg4dLYwfbkY1qJqusegGHhRVLtQHfXvgOAOFhDbvOPN/pvozq', 'BSfmhE4cSl', '2022-01-01 06:55:16', '2022-01-01 06:55:16'),
(10, 'Jamison', 'Murray', 'rippin.susanna@example.com', '2022-01-01 06:55:16', '$2y$10$lE4pGzqXhL4q9mAmZMn.gOKtqQirOHkDJIeMW90/wWafJVmMnwRQW', '1BlpvocLTu', '2022-01-01 06:55:16', '2022-01-01 06:55:16'),
(11, 'Ihsan', NULL, 'ihsan@gmail.com', NULL, '$2y$10$QHpxF23j2ab53z3lCwhC/.D8ouoBAbm3atzFKZ/5s0RkdEX8JeuG6', NULL, '2022-01-01 07:23:25', '2022-01-01 07:23:25'),
(12, 'Alex', 'Nax Difabel', 'alex@gmail.com', NULL, '$2y$10$iTEoLeCCC68ysGZomPVlyeuc7b09HqROBlx3HDlP2h/XlT8P.Yr8G', NULL, '2022-01-01 09:10:16', '2022-01-01 09:10:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  ADD PRIMARY KEY (`disease_id`,`symptom_id`),
  ADD KEY `kode_penyakit` (`disease_id`,`symptom_id`),
  ADD KEY `kode_gejala` (`symptom_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disease_symptom`
--
ALTER TABLE `disease_symptom`
  ADD CONSTRAINT `disease_symptom_ibfk_1` FOREIGN KEY (`disease_id`) REFERENCES `diseases` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `disease_symptom_ibfk_2` FOREIGN KEY (`symptom_id`) REFERENCES `symptoms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
