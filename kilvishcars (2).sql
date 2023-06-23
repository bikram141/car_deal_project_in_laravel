-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 05:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kilvishcars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone_number`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '7064155716', NULL, '$2y$10$rGJmlxkvzuCCIILiFbO2UO1S4YptaxLo0mpbOQBPsE9RujsTbOcA6', NULL, '2022-03-09 14:52:49', '2022-03-09 14:52:49');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alternative_phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `Name`, `mobile_no`, `alternative_phone_no`, `email`, `subject`, `date`, `car_name`, `address`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'd', '23552', '525', 'admin@admin.com', 'ddd', '2022-03-17', 'rgtfrdewre', 'ghj', 'xcgh', 'in progress', '2022-03-20 06:46:00', '2022-03-20 06:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `car_brands`
--

CREATE TABLE `car_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_brands`
--

INSERT INTO `car_brands` (`id`, `brand_name`, `Image`, `created_at`, `updated_at`) VALUES
(1, 'HONDA', '1647546215.png', NULL, '2022-03-17 14:13:35'),
(2, 'TOYOTA', '1647546517.png', NULL, '2022-03-17 14:18:37'),
(3, 'FORD', '1647546459.png', NULL, '2022-03-17 14:17:39'),
(4, 'TATA', '1647546470.png', NULL, '2022-03-17 14:17:50'),
(5, 'SUZUKI', '1647546483.png', NULL, '2022-03-17 14:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `car_fuel_types`
--

CREATE TABLE `car_fuel_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fuel_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_fuel_types`
--

INSERT INTO `car_fuel_types` (`id`, `fuel_type`, `created_at`, `updated_at`) VALUES
(1, 'PETROL', NULL, NULL),
(2, 'DISEL', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `car_sells`
--

CREATE TABLE `car_sells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Kilometer_run` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Year_of_registration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fuel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Brand` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_sells`
--

INSERT INTO `car_sells` (`id`, `Name`, `Type`, `Model`, `Kilometer_run`, `Year_of_registration`, `Price`, `Fuel`, `Brand`, `Color`, `Image`, `images`, `created_at`, `updated_at`) VALUES
(59, 'BALENO DELTA', 'Used vehicle', 'Baleno Delta', '7000km', '2021', '7,00,000', 'PETROL', 'SUZUKI', NULL, '1647023977.png', '', '2022-03-11 13:09:37', '2022-03-11 13:09:37'),
(60, 'HYUNDAI I20', 'Used vehicle', '2013', '80000', '2013', '3,50,000', 'PETROL', NULL, 'White', '1647024443.png', '', '2022-03-11 13:17:23', '2022-03-11 13:17:23'),
(61, 'HYUNDAI I20', 'Used vehicle', 'Sportz model', '35000', '2014', ' 4,10,000', 'PETROL', NULL, 'Gray', '1647024591.jpeg', '', '2022-03-11 13:19:51', '2022-03-11 13:19:51'),
(62, 'BOLERO PICKUP', 'Used vehicle', 'BOLERO PICKUP', '60000 km', '2020', '7,10,000', 'PETROL', NULL, 'White', '1647024777.png', '', '2022-03-11 13:22:57', '2022-03-11 13:22:57'),
(63, 'HYUNDAI I10', 'Used vehicle', '2013 model', '40000', '2013', '2,50,000', 'PETROL', NULL, 'Blue', '1647024976.png', '', '2022-03-11 13:26:16', '2022-03-11 13:26:16'),
(64, 'SCORPIO', 'Used vehicle', '2009 model', '100000', '2009', '3,00,000', 'PETROL', NULL, 'White', '1647025157.png', '', '2022-03-11 13:29:17', '2022-03-11 13:29:17'),
(65, 'WAGON', 'Used vehicle', 'Wagon VXI', '30000 km', '2019', ' 4,00,000', 'PETROL', 'SUZUKI', NULL, '1647025297.png', '', '2022-03-11 13:31:37', '2022-03-11 13:31:37'),
(66, 'SUZUKI S-CROSS', 'Used vehicle', 'S-CROSS', '43000', NULL, '6,50,000', 'DISEL', 'SUZUKI', NULL, '1647025471.jpg', '', '2022-03-11 13:34:31', '2022-03-11 13:34:31'),
(67, 'FORD ECOSPORT', 'Used vehicle', '2014', '60300', '2014', '5,90,000', 'PETROL', 'FORD', 'black', '1647025607.jpg', '', '2022-03-11 13:36:47', '2022-03-11 13:36:47'),
(68, 'SWIFT ZXI', 'Used vehicle', 'SWIFT ZXI', '13000 km', NULL, '6,20,000', 'PETROL', 'SWIFT', 'blue', '1647025737.png', '', '2022-03-11 13:38:57', '2022-03-11 13:38:57'),
(69, 'TUV 300', 'Used vehicle', 'TUV 300', '72000 km', NULL, ' 6,30,000', 'PETROL', NULL, 'White', '1647025826.png', '', '2022-03-11 13:40:26', '2022-03-11 13:40:26'),
(70, 'I20 ACTIVE', 'Used vehicle', '2015', NULL, '2015', ' 5,60,000', 'PETROL', NULL, NULL, '1647025928.png', '', '2022-03-11 13:42:08', '2022-03-11 13:42:08'),
(71, 'Suzuki swift vxi', 'Used vehicle', 'Vxi', '54000', '2015', '330000', 'PETROL', 'SUZUKI', 'Silver', '1647460131.jpg', '', '2022-03-16 14:18:51', '2022-03-16 14:18:51'),
(72, 'Swift', 'Used vehicle', 'Swift', '40000', '2015', '4.2lac', 'PETROL', 'SWIFT', 'Red', '1647760991.jpg', '', '2022-03-20 01:53:11', '2022-03-20 01:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `car_types`
--

CREATE TABLE `car_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `car_types`
--

INSERT INTO `car_types` (`id`, `car_type`, `created_at`, `updated_at`) VALUES
(1, 'Used vehicle', NULL, NULL);

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
(6, '2021_12_27_024539_create_admins_table', 1),
(9, '2022_03_08_220319_create_car_brands_table', 1),
(10, '2022_03_08_220411_create_car_fuel_types_table', 1),
(11, '2022_03_08_220501_create_car_types_table', 1),
(14, '2022_03_10_095206_create_multiple_images_table', 2),
(20, '2022_03_09_100207_create_bookings_table', 3),
(21, '2022_03_08_194955_create_sessions_table', 4),
(25, '2022_03_08_191817_create_car_sells_table', 5),
(26, '2022_03_20_033935_add_images_to_car_sells', 6);

-- --------------------------------------------------------

--
-- Table structure for table `multiple_images`
--

CREATE TABLE `multiple_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `car_sells_id` bigint(20) UNSIGNED DEFAULT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('NSZoTlLevkoGzC0nJ6Nio5ZoDKvVcuBXzvFiDOKD', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.82 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUDlFNzN1N0FWdldPNDVHUWtZZTg3UnZxbWZBVTNGTHYzcXV1amdyeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1647965304);

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
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_brands`
--
ALTER TABLE `car_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_fuel_types`
--
ALTER TABLE `car_fuel_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_sells`
--
ALTER TABLE `car_sells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_types`
--
ALTER TABLE `car_types`
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
-- Indexes for table `multiple_images`
--
ALTER TABLE `multiple_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `multiple_images_car_sells_id_foreign` (`car_sells_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_brands`
--
ALTER TABLE `car_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `car_fuel_types`
--
ALTER TABLE `car_fuel_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_sells`
--
ALTER TABLE `car_sells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `car_types`
--
ALTER TABLE `car_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `multiple_images`
--
ALTER TABLE `multiple_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `multiple_images`
--
ALTER TABLE `multiple_images`
  ADD CONSTRAINT `multiple_images_car_sells_id_foreign` FOREIGN KEY (`car_sells_id`) REFERENCES `car_sells` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
