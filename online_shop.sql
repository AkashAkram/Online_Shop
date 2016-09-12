-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2016 at 01:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce-new`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `has_child` int(10) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `parent_id`, `has_child`, `created_at`, `updated_at`) VALUES
(1, 'Men', 0, 1, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(2, 'Women', 0, 1, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(3, 'Electronic', 0, 1, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(4, 'Gift', 0, 1, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(5, 'T-Shirt', 1, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(6, 'Shirt', 1, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(7, 'Gents-pant', 1, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(8, 'Gents-sunglass', 1, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(9, 'Gents-watch', 1, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(10, 'Wallet', 1, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(11, 'hand-bag', 2, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(12, 'sandel', 2, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(13, 'ladies-cosmetics', 2, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(14, 'ladies-ornaments', 2, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(15, 'smartphone', 3, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(16, 'laptop', 3, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(17, 'pendrive', 3, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(18, 'trimmer', 3, 0, '2016-09-03 14:01:23', '2016-09-03 14:01:33'),
(20, 'Saari', 2, 0, '2016-09-04 09:53:07', '2016-09-04 09:53:07'),
(21, 'Salwar', 2, 0, '2016-09-04 09:53:07', '2016-09-04 09:53:07'),
(22, 'Scarf', 2, 0, '2016-09-04 09:53:51', '2016-09-04 09:53:51'),
(23, 'Hijab', 2, 0, '2016-09-04 09:53:51', '2016-09-04 09:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `default_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'noimage.jpg',
  `quantity` int(10) UNSIGNED DEFAULT NULL,
  `product_sku` int(10) UNSIGNED DEFAULT NULL,
  `price` decimal(10,2) UNSIGNED DEFAULT '100.00',
  `reduced_price` decimal(10,2) UNSIGNED DEFAULT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `featured` int(11) DEFAULT '0',
  `description` text COLLATE utf8_unicode_ci,
  `specification` text COLLATE utf8_unicode_ci,
  `size_req` tinyint(1) NOT NULL DEFAULT '0',
  `color_req` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `product_name`, `default_image`, `quantity`, `product_sku`, `price`, `reduced_price`, `cat_id`, `brand_id`, `featured`, `description`, `specification`, `size_req`, `color_req`, `created_at`, `updated_at`) VALUES
(29, 'dcc', 'T-Shirt 1', 'T-S-1.jpg', NULL, NULL, '350.00', NULL, 5, NULL, 0, 'This is our first tshirt.', '100% cotton, half Sleave, genuine Brand.', 0, 0, '2016-09-04 04:20:02', '2016-09-04 04:20:02'),
(30, 'cscsc', 'Casual Shirt 1', 'Shi-1.jpg', NULL, NULL, '1200.00', NULL, 6, NULL, 0, 'This is our first shirt.', 'yjyjn yjnyn yjyjn ', 0, 0, '2016-09-04 04:20:32', '2016-09-04 04:20:32'),
(31, 'bdb', 'Denim Jeans 1', 'Gen-1.jpg', NULL, NULL, '1500.00', NULL, 7, NULL, 0, 'This is our first geans.', 'nmhnm yjny yjnjy ', 0, 0, '2016-09-04 04:21:01', '2016-09-04 04:21:01'),
(32, 'sr1', 'Saari 1', 'Saa-1.jpg', NULL, NULL, '5000.00', NULL, 20, NULL, 0, 'This is a saari', 'yjhyjh hmnhymn yjyh ', 0, 0, '2016-09-04 04:22:04', '2016-09-04 04:22:04'),
(33, 'sr2', 'Shirt 2', 'Shi-2.jpg', NULL, NULL, '1500.00', NULL, 6, NULL, 0, 'Another Shirt', 'Full sleave', 0, 0, '2016-09-04 04:23:31', '2016-09-04 04:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `color_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `nickname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8_unicode_ci,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
