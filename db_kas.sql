-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 20, 2022 at 02:47 PM
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
-- Database: `db_kas`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keluars`
--

CREATE TABLE `keluars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keluars`
--

INSERT INTO `keluars` (`id`, `kode`, `tanggal`, `keterangan`, `jumlah`, `created_at`, `updated_at`) VALUES
(10, 'K001', '2022-01-30', 'Kost, Belanja, Makan Dll', '1400000', '2022-03-05 15:28:12', '2022-03-05 15:36:17'),
(11, 'K002', '2022-02-27', 'Kost, Belanja, Makan Dll', '1300000', '2022-03-05 15:36:43', '2022-03-05 15:36:43'),
(12, 'K003', '2022-03-06', 'Kost, Makan', '500000', '2022-03-05 15:39:03', '2022-03-05 15:39:03'),
(13, 'K004', '2022-03-06', 'Top Up bibit', '100000', '2022-03-06 02:18:45', '2022-03-06 02:18:45'),
(14, 'K005', '2022-03-07', 'Uang Makan', '100000', '2022-03-07 00:12:58', '2022-03-07 00:12:58'),
(15, 'K006', '2022-03-16', 'Makan seminggu', '100000', '2022-03-16 23:19:17', '2022-03-16 23:19:17'),
(16, 'K007', '2022-03-21', 'Makan', '100000', '2022-03-23 15:55:25', '2022-03-23 15:55:25'),
(17, 'K008', '2022-03-23', 'Beli mainan Ponakan', '100000', '2022-03-23 15:57:17', '2022-03-23 15:57:17'),
(18, 'K009', '2022-03-24', 'Makan', '100000', '2022-03-23 15:58:32', '2022-03-23 15:58:32'),
(19, 'K010', '2022-04-01', 'Makan', '100000', '2022-03-31 23:48:23', '2022-03-31 23:48:23'),
(20, 'K011', '2022-04-01', 'Top Up dana & Beli mainan', '100000', '2022-03-31 23:49:17', '2022-03-31 23:49:17'),
(21, 'K012', '2022-04-04', 'Makan', '100000', '2022-04-05 17:48:39', '2022-04-05 17:49:40'),
(22, 'K013', '2022-04-06', 'Beli Ebook', '400000', '2022-04-05 17:50:20', '2022-04-05 17:50:20'),
(23, 'K014', '2022-04-06', 'Bibit', '100000', '2022-04-05 17:59:11', '2022-04-05 17:59:11'),
(24, 'K015', '2022-04-12', 'Makan, Bukber', '200000', '2022-04-14 21:22:45', '2022-04-14 21:22:45'),
(25, 'K016', '2022-04-15', 'Kost', '400000', '2022-04-14 21:30:53', '2022-04-14 21:30:53');

-- --------------------------------------------------------

--
-- Table structure for table `masuks`
--

CREATE TABLE `masuks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masuks`
--

INSERT INTO `masuks` (`id`, `kode`, `tanggal`, `keterangan`, `jumlah`, `created_at`, `updated_at`) VALUES
(8, 'M001', '2022-01-06', 'Gaji Bulan Desember', '2150000', '2022-01-07 20:42:51', '2022-01-07 20:42:51'),
(9, 'M002', '2022-01-09', 'Tabungan', '900000', '2022-01-09 03:05:40', '2022-03-05 15:30:30'),
(10, 'M003', '2022-02-06', 'Gaji', '2400000', '2022-03-05 15:24:39', '2022-03-05 15:29:36'),
(11, 'M004', '2022-03-06', 'Gaji', '2250000', '2022-03-05 15:30:02', '2022-03-05 15:30:02'),
(12, 'K005', '2022-04-06', 'Gaji', '2400000', '2022-04-05 17:49:12', '2022-04-05 17:49:12'),
(13, 'K006', '2022-04-12', 'Project Luar', '400000', '2022-04-14 21:30:25', '2022-04-14 21:30:25');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_03_30_015549_create_sessions_table', 1),
(7, '2021_03_30_020901_create_masuks_table', 1),
(8, '2021_03_30_020913_create_keluars_table', 1);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JAuVos51QR7LRcFszij63BVJOY7Zy0gXvttXOa8a', 2, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiN01rS0FvencwcGV2U2c3ZU9abXFLakhXazZUSTdYVU5ZY0E0ZnRENiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkS2tYSDRwQkMyN0FvLm1rUTV0a1dYT0lQNTV4Zm9YM0xjc3NSWVFKRjdsWDBnQXlLa0lIaTYiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEtrWEg0cEJDMjdBby5ta1E1dGtXWE9JUDU1eGZvWDNMY3NzUllRSkY3bFgwZ0F5S2tJSGk2Ijt9', 1650014628),
('LgJb84AObO3RCE9PGvvxfEG5Tcn20ggalnUqg1SP', 2, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.60 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSHIyMmY1VzM5UTJqemVxY3VsNmVlN3N5OGp0UXJ6emh5OTFYc2hmWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rZWx1YXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkS2tYSDRwQkMyN0FvLm1rUTV0a1dYT0lQNTV4Zm9YM0xjc3NSWVFKRjdsWDBnQXlLa0lIaTYiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJEtrWEg0cEJDMjdBby5ta1E1dGtXWE9JUDU1eGZvWDNMY3NzUllRSkY3bFgwZ0F5S2tJSGk2Ijt9', 1649207042),
('pqAJ4SsrYat3PEHjGQLAro5U7ekls1e4eXPyaD1Z', NULL, '127.0.0.1', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.75 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWGwyNlVhckp1WUEwUWRobkt0Z0F5U1M1NzNBMGxvcDdYSFNKODlqRSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1649997070);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin123', 'admin@gmail.com', NULL, '$2y$10$Z/C1iQjjgH.xpqcsobaEQuoapw6BfzidRU2W5pz5unhavNxzoK8nS', NULL, NULL, NULL, NULL, 'profile-photos/kmEhqgZA3KVEsiNWZKf7i1JgZhCJNK3KBay4W62O.png', '2021-03-29 19:18:53', '2021-03-29 23:36:06'),
(2, 'aldi', 'aldiansyah@gmail.com', NULL, '$2y$10$KkXH4pBC27Ao.mkQ5tkWXOIP55xfoX3LcssRYQJF7lX0gAyKkIHi6', NULL, NULL, 'Bi8lWOWajqguGiqGGRUZ5EvKxPvmXgFD0UWkDdp6nQyN6LUROO6owepy9knh', NULL, 'profile-photos/K1WLzhn4XbW2Lx7y6vbXn1TA7al9cpKzIccxhw2O.png', '2022-01-07 20:41:37', '2022-03-22 02:25:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `keluars`
--
ALTER TABLE `keluars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masuks`
--
ALTER TABLE `masuks`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `keluars`
--
ALTER TABLE `keluars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `masuks`
--
ALTER TABLE `masuks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
