-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 05:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel3`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `category_type`, `deleted_at`, `created_at`, `updated_at`, `gender`, `workday`) VALUES
(67, 'pawan', 'testing test', NULL, '2022-05-24', '2022-05-24 09:31:26', 'male', '[\"monday\",\"tuesday\"]');

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `name`, `mobile`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Pawan kumar', '9896172293', 'pawanchhapola@gmail.com', 'eyJpdiI6ImFZNU1SQ1hFOTFsUGtmSW9hZ20zRlE9PSIsInZhbHVlIjoibmpsOFFtdy9Nc2h5dFZnMWxqR1N0dz09IiwibWFjIjoiNTg0MzIzZWM5YjBjNmU4MTE3MWJiYzVkMzBmMTVlYmE0NTYyY2VlYzE2NWZlNGFjOGJlNWZiYTdlNDVhN2IyZCJ9', '2022-04-08 10:52:35', '2022-04-08 10:52:35'),
(2, 'Pawan kumar', '9896172293', 'pawanchhapola@gmail.com', 'eyJpdiI6Imt4eTJwcnVOYXpVRXZ6bHBuRHd3RUE9PSIsInZhbHVlIjoiR1RSRThTTFBwNVBQRk4xL2QzYVVvZz09IiwibWFjIjoiMzI2ODZjZDU1ZWJkMDBhYmRhNTRlMDA1ZGI4YWJmNDA5OTNjOTE1YzRmOGI5MzJiZDZlYmU1YzIyYzVhZjNmZCJ9', '2022-04-08 10:53:17', '2022-04-08 10:53:17');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_12_31_045845_create_tablename_table', 1),
(4, '2021_12_31_050112_create_categories_table', 1),
(5, '2022_01_03_054219_add_gender_to_categories_table', 2),
(6, '2022_01_03_061813_add_workday_to_categories_table', 3),
(7, '2022_01_03_114339_create_tasks_table', 4),
(8, '2022_03_24_185600_create_register_models_table', 5),
(10, '2022_04_08_015427_create_register_table', 6),
(11, '2022_04_08_155415_create_logins_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_models`
--

CREATE TABLE `register_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tablename`
--

CREATE TABLE `tablename` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Schoolname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Major` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `Schoolname`, `Major`, `Degree`, `created_at`, `updated_at`) VALUES
(12, 'JKHJH', 'JHBJHJKN', 'BNJKNK', '2022-01-03 13:13:27', '2022-01-03 13:13:27'),
(13, 'dcc', 'asdsa', 'dsa', '2022-01-03 13:22:23', '2022-01-03 13:22:23'),
(14, 'sadad', 'asdasd', 'dasad', '2022-01-03 13:22:23', '2022-01-03 13:22:23'),
(15, 'asdas', 'asdas', 'asdas', '2022-01-03 13:22:23', '2022-01-03 13:22:23'),
(16, 'nnjn', 'nmnjkkj', 'kjjn', '2022-01-16 12:35:56', '2022-01-16 12:35:56'),
(17, 'jjjjj', 'mmmm', 'nmjjjj', '2022-01-16 12:35:56', '2022-01-16 12:35:56'),
(18, 'hjbjh', 'hjhg', 'jhbyjj', '2022-01-16 12:35:56', '2022-01-16 12:35:56'),
(19, 'jkkuhu', 'huihuih', 'hukihui', '2022-01-16 12:35:56', '2022-01-16 12:35:56'),
(20, 'j', 'guyh', 'hui', '2022-01-16 12:35:56', '2022-01-16 12:35:56'),
(21, 'h', 'bhjbbj', 'jbj', '2022-01-16 12:35:56', '2022-01-16 12:35:56'),
(22, NULL, NULL, NULL, '2022-01-20 23:56:58', '2022-01-20 23:56:58'),
(23, NULL, NULL, NULL, '2022-03-15 11:29:37', '2022-03-15 11:29:37'),
(24, 'pawan', 'chhapola', 'chakkan', '2022-03-15 12:50:18', '2022-03-15 12:50:18'),
(25, 'pawanchhapola', '72293', 'jaipur', '2022-03-15 12:50:18', '2022-03-15 12:50:18'),
(26, 'fer', 'nvnv', 'hnvhn', '2022-04-07 10:20:25', '2022-04-07 10:20:25'),
(27, 'gfgfb', 'gffgff', 'gfgfgfg', '2022-04-07 10:20:25', '2022-04-07 10:20:25'),
(28, 'fgfgfg', 'fgfgfg', 'fgfg', '2022-04-07 10:20:25', '2022-04-07 10:20:25'),
(29, 'ffgf', 'fgggff', 'vvghg', '2022-04-07 10:20:25', '2022-04-07 10:20:25'),
(30, 'fgfgf', 'fgfhghg', 'fggg', '2022-04-07 10:20:25', '2022-04-07 10:20:25'),
(31, 'gghhghg', 'ghhghg', 'ghghghghg', '2022-04-07 10:20:25', '2022-04-07 10:20:25'),
(32, 'ghhghghg', 'ghghghgh', 'ghghgh', '2022-04-07 10:20:25', '2022-04-07 10:20:25');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_models`
--
ALTER TABLE `register_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablename`
--
ALTER TABLE `tablename`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register_models`
--
ALTER TABLE `register_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tablename`
--
ALTER TABLE `tablename`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
