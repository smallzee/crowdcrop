-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 05, 2022 at 03:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `web_crowdcrop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `bank_code`, `name`, `created_at`, `updated_at`) VALUES
(1, '044', 'Access Bank', NULL, NULL),
(2, '023', 'Citibank', NULL, NULL),
(3, '063', 'Access Bank (Diamond)', NULL, NULL),
(4, '035A', 'ALAT by WEMA', NULL, NULL),
(5, '050', 'Ecobank Nigeria', NULL, NULL),
(6, '070', 'Fidelity Bank Nigeria', NULL, NULL),
(7, '011', 'First Bank of Nigeria', NULL, NULL),
(8, '214', 'First City Monument Bank', NULL, NULL),
(9, '058', 'Guaranty Trust Bank', NULL, NULL),
(10, '030', 'Heritage Bank Plc', NULL, NULL),
(11, '301', 'Jaiz Bank', NULL, NULL),
(12, '082', 'Keystone Bank Limited', NULL, NULL),
(13, '101', 'Providus Bank Plc', NULL, NULL),
(14, '076', 'Polaris Bank', NULL, NULL),
(15, '221', 'Stanbic IBTC Bank Nigeria Limited', NULL, NULL),
(16, '068', 'Standard Chartered Bank', NULL, NULL),
(17, '232', 'Sterling Bank', NULL, NULL),
(18, '100', 'Suntrust Bank Nigeria Limited', NULL, NULL),
(19, '032', 'Union Bank of Nigeria', NULL, NULL),
(20, '033', 'United Bank for Africa', NULL, NULL),
(21, '215', 'Unity Bank Plc', NULL, NULL),
(22, '035', 'Wema Bank', NULL, NULL),
(23, '057', 'Zenith Bank', NULL, NULL),
(24, '51211', 'TCF MFB', NULL, NULL),
(25, '51310', 'Sparkle Microfinance Bank', NULL, NULL),
(26, '125', 'Rubies MFB', NULL, NULL),
(27, '526', 'Parallex Bank', NULL, NULL),
(28, '50211', 'Kuda Bank', NULL, NULL);

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
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `buyer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buyer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `farmer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_sold` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_due` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_per_kg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_id` int(11) NOT NULL,
  `withness_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_id` int(11) NOT NULL DEFAULT 0,
  `status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `authorized_by_id` int(11) NOT NULL DEFAULT 0,
  `approved_by_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`id`, `buyer_email`, `buyer_name`, `farmer_name`, `phone_number`, `account_number`, `lga`, `volume_sold`, `amount_due`, `price_per_kg`, `bank_id`, `withness_name`, `account_name`, `application_id`, `partner_id`, `status`, `authorized_by_id`, `approved_by_id`, `created_at`, `updated_at`) VALUES
(1, '', '', 'oluwagbenga matanmi', '07032077894', '0183930393', 'aa', '10', '40', '091', 3, '', 'ADEKUNLE ADEWALE UTHMAN', '1D6A8334', 1, 'approved', 1, 1, '2022-10-09 16:35:56', '2022-10-09 17:12:17');

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
(4, '2022_10_07_160839_create_settings_table', 2),
(5, '2022_10_09_163424_create_banks_table', 3),
(6, '2022_10_09_164902_create_farmer_table', 4),
(7, '2022_10_27_180945_create_role_table', 5),
(8, '2022_10_27_191555_create_partners_table', 6),
(9, '2022_11_03_103449_add_fields_to_farmer_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`id`, `image`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, '1666903601FireShot Capture 022 - Auto Trades FX - 500 - 127.0.0.1.png', 'AgroEnkor', 'AgroEknor is a food and agricultural business with farming operations across over 5 states in Nigeria.', 1, '2022-10-27 19:46:41', '2022-10-27 19:46:41');

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
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'super admin', '2022-10-27 19:39:32', '2022-10-27 19:39:32'),
(2, 'agent', '2022-10-27 19:39:35', '2022-10-27 19:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `settings_key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `settings_type` enum('website information') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'website information',
  `settings_input_type` enum('text','number','checkbox') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'text',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `settings_key`, `settings_value`, `settings_description`, `settings_type`, `settings_input_type`, `created_at`, `updated_at`) VALUES
(1, 'office_address', 'address', 'Office Address', 'website information', 'text', '2022-10-08 11:11:37', '2022-10-08 11:11:37'),
(2, 'official_email', 'support@crowdcrop.com', 'Official Email', 'website information', 'text', '2022-10-08 11:11:37', '2022-10-19 17:27:36'),
(3, 'office_contact', '090', 'Official Contact', 'website information', 'text', '2022-10-08 11:11:37', '2022-10-08 11:11:37'),
(4, 'site_key', '6LeZlWUiAAAAAChLEimTQ7xGVJU8Gk6mDxecetiy', 'reCAPTCHA Site Key', 'website information', 'text', '2022-10-08 11:11:37', '2022-10-08 11:11:37'),
(5, 'secret_key', '6LeZlWUiAAAAAH4V_2xnN6i8fnTUlLeskVOrBKLe', 'reCAPTCHA Secret Key', 'website information', 'text', '2022-10-08 11:11:37', '2022-10-08 11:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `partner_id` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `role_id`, `partner_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agrofarm', 'support@agrofarm.com', '07033333002', 1, 0, '2022-10-07 13:30:29', '$2y$10$Sj2fY6fkmT/9OKFapX6dhOD1u7qhWUrjEuDyRCjwMqPkDkVCsNIse', NULL, '2022-10-07 13:30:29', '2022-10-08 10:04:23'),
(3, 'oluwagbenga matanmi', 'oluwagbengamatanmi50@gmail.com', '09069588201', 1, 0, NULL, '$2y$10$T76a0sbtZWJCgaWsSGPBIeksdiMDhYIYkRzSeK0AufytGTwK4sqz2', NULL, '2022-10-08 10:48:41', '2022-10-08 10:48:41'),
(4, 'oluwagbenga matanmi', 'tech4all583@gmail.com', '07032216593', 2, 1, NULL, '$2y$10$krjCnKTAI4jq1y82xjx.T.KPvlefmCzM/VRLA8HBTZLQYLJa2uHmO', NULL, '2022-10-27 20:44:15', '2022-10-27 20:44:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
