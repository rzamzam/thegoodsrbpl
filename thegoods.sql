-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 11:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thegoods`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_07_064016_create_employees_table', 1),
(7, '2023_06_07_081356_create_purchases_table', 1),
(8, '2023_06_08_010458_create_purchase_suppliers_table', 1),
(9, '2023_06_09_140211_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchases_store`
--

CREATE TABLE `purchases_store` (
  `purchase_id` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `sepatu` int(11) NOT NULL,
  `sandal` int(11) NOT NULL,
  `lays` int(11) NOT NULL,
  `cocacola` int(11) NOT NULL,
  `tissue` int(11) NOT NULL,
  `oil` int(11) NOT NULL,
  `gula` int(11) NOT NULL,
  `pasta_gigi` int(11) NOT NULL,
  `sabun_piring` int(11) NOT NULL,
  `detergen` int(11) NOT NULL,
  `totalprice` int(11) DEFAULT NULL,
  `user_id` char(36) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases_store`
--

INSERT INTO `purchases_store` (`purchase_id`, `alamat`, `sepatu`, `sandal`, `lays`, `cocacola`, `tissue`, `oil`, `gula`, `pasta_gigi`, `sabun_piring`, `detergen`, `totalprice`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 27500, '1', '2023-06-10 21:25:24', '2023-06-10 21:25:24'),
(2, NULL, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 205000, '1', '2023-06-10 21:26:58', '2023-06-10 21:26:58'),
(3, NULL, 0, 6, 0, 0, 0, 0, 0, 0, 0, 0, 1050000, '1', '2023-06-10 21:56:12', '2023-06-10 21:56:12'),
(4, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 5, 0, 62500, '1', '2023-06-10 22:03:17', '2023-06-10 22:03:17'),
(5, NULL, 4, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1765000, '1', '2023-06-10 22:03:29', '2023-06-10 22:03:29'),
(6, NULL, 0, 0, 0, 0, 0, 1, 1, 2, 0, 0, 97000, '1', '2023-06-13 06:05:19', '2023-06-13 06:05:19'),
(7, NULL, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 43000, '1', '2023-06-18 02:04:38', '2023-06-18 02:04:38'),
(8, NULL, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 32000, '1', '2023-06-18 02:13:02', '2023-06-18 02:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_suppliers`
--

CREATE TABLE `purchase_suppliers` (
  `purchaseSupplier_id` bigint(20) UNSIGNED NOT NULL,
  `sepatu` int(11) NOT NULL,
  `sandal` int(11) NOT NULL,
  `lays` int(11) NOT NULL,
  `cocacola` int(11) NOT NULL,
  `tissue` int(11) NOT NULL,
  `oil` int(11) NOT NULL,
  `gula` int(11) NOT NULL,
  `pasta_gigi` int(11) NOT NULL,
  `sabun_piring` int(11) NOT NULL,
  `detergen` int(11) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `user_id` char(36) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_suppliers`
--

INSERT INTO `purchase_suppliers` (`purchaseSupplier_id`, `sepatu`, `sandal`, `lays`, `cocacola`, `tissue`, `oil`, `gula`, `pasta_gigi`, `sabun_piring`, `detergen`, `totalprice`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 2, 2, 575000, '1', '2023-06-13 06:12:56', '2023-06-13 06:12:56'),
(2, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 475000, '4', '2023-06-15 19:40:26', '2023-06-15 19:40:26'),
(3, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 27500, '4', '2023-06-15 19:40:46', '2023-06-15 19:40:46'),
(4, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 27500, '4', '2023-06-15 19:42:21', '2023-06-15 19:42:21'),
(5, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 195000, '4', '2023-06-15 19:53:13', '2023-06-15 19:53:13'),
(6, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 195000, '4', '2023-06-15 21:00:28', '2023-06-15 21:00:28'),
(7, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 475000, '4', '2023-06-15 21:00:42', '2023-06-15 21:00:42'),
(8, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 1750000, '4', '2023-06-15 21:01:13', '2023-06-15 21:01:13'),
(9, 0, 0, 2, 2, 0, 0, 0, 0, 0, 0, 60000, '4', '2023-06-18 01:55:45', '2023-06-18 01:55:45'),
(10, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 350000, '4', '2023-06-18 01:57:14', '2023-06-18 01:57:14'),
(11, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 195000, '4', '2023-06-18 02:13:30', '2023-06-18 02:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL DEFAULT '1',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT '123',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `username`, `telepon`, `email`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'buyer', 'buyer', '08123456789', 'buyer@gmail.com', '1', NULL, '$2y$10$kjCJw1kais1uRnQ6XdQ0puunVGR02PTneTzeulwe9.qqOQa36jWcW', NULL, '2023-06-10 21:23:42', '2023-06-10 21:23:42'),
(2, 'store owner', 'store owner', '08123456789', 'storeowner@gmail.com', '4', NULL, '$2y$10$ZkTjtYelSspliJ1lWUFleO4GA/S/7Czyo5KPKk9s7paQBUvHxvNGS', NULL, '2023-06-10 21:30:27', '2023-06-10 21:30:27'),
(3, 'supplier', 'supplier', '08123456789', 'supplier@gmail.com', '3', NULL, '$2y$10$vvtLhaGmK9mv1odEzHkVbOn9Cc1Dmqvlu0tiUlmnvRnnnExHg4eJi', NULL, '2023-06-10 21:32:16', '2023-06-10 21:32:16'),
(4, 'store owner 2', 'store owner 2', '08123456789', 'storeowner2@gmail.com', '2', NULL, '$2y$10$fVT.vETA5ynrpZI6aUNfGeHk11JZ7QSdrdRtoqbeC6wvDo6oA.2/K', NULL, '2023-06-13 06:12:19', '2023-06-13 06:12:19'),
(5, 'Admin', 'Admin', '08123456789', 'admin@gmail.com', '4', NULL, '$2y$10$XApYFB2KN7.54cxf.MRaN.38QmpJzyQIbfM8drm6VWVOudL0m8Okm', NULL, '2023-06-18 01:49:01', '2023-06-18 01:49:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases_store`
--
ALTER TABLE `purchases_store`
  ADD PRIMARY KEY (`purchase_id`);

--
-- Indexes for table `purchase_suppliers`
--
ALTER TABLE `purchase_suppliers`
  ADD PRIMARY KEY (`purchaseSupplier_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchases_store`
--
ALTER TABLE `purchases_store`
  MODIFY `purchase_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `purchase_suppliers`
--
ALTER TABLE `purchase_suppliers`
  MODIFY `purchaseSupplier_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
