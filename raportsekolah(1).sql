-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2021 at 05:40 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raportsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama_guru`, `pass_guru`, `agama`, `jenis_kelamin`, `alamat`, `jabatan`, `created_at`, `updated_at`) VALUES
(2, '2020002', 'edit_Yeremia Alfa Susetyo', '12345', 'Kristen Protestan', 'Laki-Laki', 'Salatiga', 'Kepala Sekolah', '2020-11-29 12:31:46', '2020-12-10 18:44:29'),
(4, '2020003', 'Garry Tera', '12345', 'Islam', 'Laki-Laki', 'Kauman 32', 'Wakil Kepala Sekolah', '2020-12-01 00:58:15', '2020-12-06 02:51:16'),
(5, '2020001', 'Hilman', '12345', 'Budha', 'Laki-Laki', 'Kartini no 29', 'Pengajar Matematika', '2020-12-06 02:24:46', '2020-12-06 02:24:46'),
(6, '2020004', 'Hilmansyah Dwi', '12345', 'Khatolik', 'Laki-Laki', 'Diponegoro 92', 'Pengajar Biologi', '2020-12-06 02:29:36', '2020-12-06 02:29:36'),
(7, '2020005', 'Jessica Lim', '12345', 'Budha', 'Perempuan', 'Patimura no 28', 'Pengajar Kimia', '2020-12-06 02:34:14', '2020-12-06 02:34:14'),
(8, '2020006', 'Kevin', '12345', 'Konghuchu', 'Laki-Laki', 'Diponegoro no 21', 'Pengajar Fisika', '2020-12-06 03:15:24', '2020-12-06 03:15:24'),
(9, '2020007', 'Randy Julian', '12345', 'Khatolik', 'Laki-Laki', 'Suprapto no 22', 'Pengajar Biologi', '2020-12-09 02:43:00', '2020-12-09 02:43:00'),
(10, '2020008', 'Gracia Natalia', '12345', 'Budha', 'Perempuan', 'Kauman no 50', 'Pengajar Matematika', '2020-12-09 02:47:10', '2020-12-09 02:47:10'),
(11, '2020009', 'Jason Andrian', '12345', 'Khatolik', 'Laki-Laki', 'Ahmad Yani no 33', 'Pengajar Kimia', '2020-12-09 02:48:21', '2020-12-09 02:48:21'),
(12, '2020010', 'Dwi Ayu Lestari', '12345', 'Islam', 'Perempuan', 'K.S. Tubun no 12', 'Pengajar Fisika', '2020-12-09 02:49:30', '2020-12-09 02:49:30'),
(13, '2020011', 'Agnes Puspita Sari', '12345', 'Khatolik', 'Perempuan', 'D.I. Panjaitan no 10', 'Pengajar Biologi', '2020-12-09 02:50:34', '2020-12-09 02:50:34'),
(14, '2020012', 'Hari Setiawan', '12345', 'Islam', 'Laki-Laki', 'Kartini no 68', 'Pengajar Matematika', '2020-12-09 02:51:42', '2020-12-09 02:51:42'),
(15, '2020013', 'Budi Hartono', '12345', 'Konghuchu', 'Laki-Laki', 'S. Parman no 9', 'Pengajar Kimia', '2020-12-09 02:53:02', '2020-12-09 02:53:02'),
(16, '2020014', 'Graciel Lusia', '12345', 'Kristen Protestan', 'Perempuan', 'Jl. Pahlawan no 29', 'Pengajar Matematika', '2020-12-09 02:54:05', '2020-12-09 02:54:05'),
(17, '2020015', 'Julius Hari Wijaya', '12345', 'Budha', 'Laki-Laki', 'Jl. Merdeka no 24', 'Pengajar Biologi', '2020-12-09 02:55:13', '2020-12-09 02:55:13'),
(18, '2020016', 'Denny Wibowo', '12345', 'Islam', 'Laki-Laki', 'K.S. Tubun no 9', 'Pengajar Kimia', '2020-12-09 02:55:52', '2020-12-09 02:55:52'),
(19, '2020017', 'Michael Sutardjo', '12345', 'Hindu', 'Laki-Laki', 'G.M. Saunan no 1', 'Pengajar Fisika', '2020-12-09 02:56:49', '2020-12-09 02:56:49'),
(20, '2020018', 'Nadia Sandinata', '12345', 'Khatolik', 'Perempuan', 'Imam Bonjol no 13', 'Pengajar Biologi', '2020-12-09 02:58:06', '2020-12-09 02:58:06'),
(21, '2020019', 'Friska Graciella', '12345', 'Konghuchu', 'Perempuan', 'Sisingamangaraja no 19', 'Pengajar Kimia', '2020-12-09 02:59:04', '2020-12-09 02:59:04'),
(22, '2020020', 'William Andreas', '12345', 'Budha', 'Laki-Laki', 'H. Agus Salim no 60', 'Pengajar Biologi', '2020-12-09 02:59:53', '2020-12-09 02:59:53'),
(23, '20190001', 'Nikson', '123456', 'Kristen Protestan', 'Laki-Laki', 'APO', 'Kepala Sekolah', '2020-12-10 18:49:25', '2020-12-10 18:49:25'),
(24, '20190002', 'Saiful', '12345', 'Kristen Protestan', 'Laki-Laki', 'APO', 'Kepala Sekolah', '2020-12-10 18:50:55', '2020-12-10 18:50:55');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_29_124538_create_siswa_table', 1),
(5, '2020_11_29_204536_create_guru_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_mtk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_indo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_inggris` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_agama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nis`, `nama_siswa`, `pass_siswa`, `agama`, `alamat`, `nilai_mtk`, `nilai_indo`, `nilai_inggris`, `nilai_agama`, `nilai_jurusan`, `created_at`, `updated_at`) VALUES
(2, '202003', 'Sandro Lamaher', '03112', 'Kristen Protestan', 'Salatiga', '96', '80', '68', '70', '60', '2020-11-29 09:28:01', '2020-12-06 02:43:34'),
(5, '202004', 'Saifulah', '12234', 'Kristen Protestan', 'APO', '90', '90', '90', '90', '90', '2020-11-29 14:02:21', '2020-11-29 14:02:21'),
(7, '202006', 'Gilbert', '12345', 'Islam', 'Diponegoro', '90', '80', '99', '90', '90', '2020-12-01 01:06:27', '2020-12-01 02:02:30'),
(8, '201001', 'Graciella', '12345', 'Islam', 'Jln. Pattimura no 32', '80', '79', '86', '69', '92', '2020-12-06 02:41:54', '2020-12-06 02:53:49'),
(9, '201002', 'Go Han', '12345', 'Buddha', 'Diponegoro no 39', '98', '89', '77', '92', '79', '2020-12-06 02:43:22', '2020-12-06 02:54:02'),
(10, '202005', 'Gilbert Gnaden', '12345', 'Khatolik', 'Kartini no 294', '98', '87', '88', '92', '99', '2020-12-06 02:44:10', '2020-12-06 02:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@gmail.com', NULL, 'admin', 'adminadmin', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nis` (`nis`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
