-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 05:21 PM
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
-- Database: `rotigembul`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pemesanan`
--

CREATE TABLE `data_pemesanan` (
  `id` int(11) NOT NULL,
  `no` int(9) NOT NULL,
  `kode` int(9) NOT NULL,
  `no_telp` int(50) NOT NULL,
  `jml_beli` int(9) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `total` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pemesanan`
--

INSERT INTO `data_pemesanan` (`id`, `no`, `kode`, `no_telp`, `jml_beli`, `detail`, `tgl_pesan`, `total`, `updated_at`) VALUES
(4, 123, 123, 123, 123, 'satu', '2023-05-11', '123', '2023-05-30 16:57:51'),
(5, 1234, 1234, 1234, 1234, 'sdasd', '2023-05-11', '1234', '2023-05-30 16:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `id` int(11) NOT NULL,
  `kode` int(9) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` int(9) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`id`, `kode`, `produk`, `harga`, `stok`, `foto`) VALUES
(20, 1, 'Sweetbul Chocomathine', '17000', 1, 'public/images/apx5YcBUio4DFBL4COM7uR3boPl6yzTqXg4cMLZ8.jpg'),
(21, 2, 'Keju Susu', '17000', 1, 'public/images/sVIaRul27tYPGLzgeWgBKbfReu6m6e9XGUHSstXo.jpg'),
(22, 3, 'Original', '10000', 1, 'public/images/YESWgZtrLCaaPhs6EiODn1P87vf7yTkCmR3Bxd9t.jpg'),
(23, 4, 'Tiramisu', '16000', 1, 'public/images/2wm5x1Qe09hJe9h61um25V2L52DSJiTRL2lPu8Ew.jpg'),
(24, 5, 'Oreo Cheese', '17000', 1, 'public/images/lpphKMzke6zVhWvJ1gsEsxD3ChRgwZ1NhgaMCLNU.jpg'),
(25, 6, 'Sweetbul Coklat Keju', '16000', 1, 'public/images/ncFt9DmsYN1NoTsOSEtMgxMMCQwXGZT1oRqV8YPR.jpg'),
(26, 7, 'Sweetbul Coklat Kacang', '16000', 1, 'public/images/Bp9qNdKetvq7OMqknfuIF8IaY0XzEfu3PCwUjoNp.jpg'),
(27, 8, 'Sweetbul GreenTea', '12000', 1, 'public/images/g4tuefOWsCPhgQnJjQr2znm2hy4I3tiBakArGvw4.jpg'),
(28, 9, 'Sweetbul Abon Sapi', '18000', 1, 'public/images/wLypCQrvx4NCqoTsUH5FfVCKTKJLEsIvmdTCHDcs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(36, '2014_10_12_000000_create_users_table', 1),
(37, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(38, '2019_08_19_000000_create_failed_jobs_table', 1),
(39, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(40, '2023_06_05_233235_user__produk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aditya', 'adit@gmail.com', NULL, '$2y$10$LywxBflC5rIwWCAfRgqYw.zgqUp1Mb67aAd11SmdC008qIpkhSBKO', 'admin', NULL, '2023-06-05 16:49:46', '2023-06-05 16:49:46'),
(2, 'petot', 'udin@gmail.com', NULL, '$2y$10$aebmkovacFgU2WGtavFBqOtzQ6uRkbXaoKF1VwI52hQeEwfqiHPse', 'user', NULL, '2023-06-05 16:50:05', '2023-06-06 02:28:27'),
(4, 'rian', 'rian@gmail.com', NULL, '$2y$10$ws56srN70QtNci8Bfy/bgegcLihVulNihFPs9ZY4nE6UVpPWx8RgW', 'user', NULL, '2023-06-06 05:21:25', '2023-06-06 05:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `user_produk`
--

CREATE TABLE `user_produk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `produk_id` int(11) NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah` int(9) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_produk`
--

INSERT INTO `user_produk` (`id`, `produk_id`, `users_id`, `jumlah`, `created_at`, `updated_at`) VALUES
(25, 27, 1, 2, '2023-06-06 00:49:08', '2023-06-06 04:56:37'),
(35, 23, 2, 1, '2023-06-06 06:55:01', '2023-06-06 06:55:01'),
(36, 20, 4, 1, '2023-06-06 07:16:17', '2023-06-06 07:16:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pemesanan`
--
ALTER TABLE `data_pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_produk`
--
ALTER TABLE `user_produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_produk_users_id_foreign` (`users_id`),
  ADD KEY `produk` (`produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pemesanan`
--
ALTER TABLE `data_pemesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_produk`
--
ALTER TABLE `user_produk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_produk`
--
ALTER TABLE `user_produk`
  ADD CONSTRAINT `produk` FOREIGN KEY (`produk_id`) REFERENCES `data_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_produk_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
