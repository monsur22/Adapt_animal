-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 07:34 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userrole`
--

-- --------------------------------------------------------

--
-- Table structure for table `adapt_posts`
--

CREATE TABLE `adapt_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `user_id` int(255) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adapt_posts`
--

INSERT INTO `adapt_posts` (`id`, `category`, `title`, `image`, `gender`, `address`, `description`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '2', 'update', 'public/image/2019/gvt2U-042745-N6x.jpg', 'Male', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', 'dfghfgfgfg', 2, '0', '2019-07-19 12:22:48', '2019-07-21 11:53:37'),
(3, '1', 'Alaska malamuti', 'public/image/2019/DDSDY-040322-siN.jpg', 'Male', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', 'best and beautiful dog', 2, '2', '2019-07-20 10:03:22', '2019-07-20 10:03:22'),
(4, '2', 'Alaska malamuti', 'public/image/2019/cerHF-040912-MEv.jpg', 'Male', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', 'best dog', 2, '1', '2019-07-20 10:09:12', '2019-07-21 23:52:17'),
(5, '1', 'Best Cat', 'public/image/2019/oYJdy-042909-N4V.jpg', 'Female', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', 'sfdfdfdfd', 2, '1', '2019-07-20 10:23:29', '2019-07-21 11:53:34'),
(6, '2', 'update title', 'public/image/2019/ug1Ld-054622-UX8.jpg', 'Male', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', '123456', 2, '0', '2019-07-21 11:46:22', '2019-07-21 11:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Cats', 1, '2019-07-19 09:24:10', '2019-07-19 09:38:22'),
(2, 'Dogs', 0, '2019-07-19 09:38:40', '2019-07-19 09:38:40');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2019_07_19_133737_create_categories_table', 2),
(4, '2019_07_19_135351_create_adapt_posts_table', 3),
(5, '2019_07_22_033740_create_volunteers_table', 4),
(6, '2019_07_22_050244_create_contacts_table', 4),
(7, '2019_07_22_065521_create_request_controllers_table', 5),
(8, '2019_07_22_070503_create_request_posts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_posts`
--

CREATE TABLE `request_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_address` text COLLATE utf8mb4_unicode_ci,
  `request_user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_posts`
--

INSERT INTO `request_posts` (`id`, `title`, `post_id`, `post_category`, `post_image`, `post_user_id`, `request_user_id`, `post_address`, `request_user_email`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Alaska malamuti', '4', '2', 'public/image/2019/cerHF-040912-MEv.jpg', '2', '2', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', NULL, '0', '2019-07-22 20:38:36', '2019-07-22 20:38:36'),
(4, 'Best Cat', '5', '1', 'public/image/2019/oYJdy-042909-N4V.jpg', '2', '2', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', 'user@email.com', '0', '2019-07-23 21:34:43', '2019-07-23 21:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$0kItZMsJ.zMnwLOeGhvBEOM62nPGjFGM7zqh6MKepaokMQFivqxES', 'admin', NULL, '2019-07-11 10:35:20', '2019-07-11 10:35:20'),
(2, 'User', 'user@email.com', NULL, '$2y$10$PpEo2SfUyUkbRcuNN78oEOBrHmjxTss9KvYyDt0NonqxhzSdrDjkC', 'user', NULL, '2019-07-11 10:37:14', '2019-07-11 10:37:14'),
(3, 'User 2', 'user2@email.com', NULL, '$2y$10$QPiaK5PATHsTNBMcxuUcZ.InYxFK9VEhksXnRP/ZzKPk6dw.q4eq.', 'user', NULL, '2019-07-22 20:59:17', '2019-07-22 20:59:17'),
(10, 'Monsur Ahmed Shafifq', 'monsurahmedshafiq@gmail.com', NULL, '$2y$10$8uGJaxrrl8acCIg7W4nqNeWU6leypbwqqRi07lZhZtd11ikBDMkhy', 'user', NULL, '2019-07-24 11:27:43', '2019-07-24 11:27:43'),
(12, 'New User', 'newuser@gamil.com', NULL, '$2y$10$BUQIL9qXpA93hhT8mqfI1egVLHxDJFfxHBpN5eFzjLSgRkH91aQE2', 'user', NULL, '2019-07-24 11:31:19', '2019-07-24 11:31:19');

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`id`, `first_name`, `last_name`, `image`, `address`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Monsur Ahmed', 'Shafiq', 'public/volunter-image/2019/B3kyx-034726-5bS.jpg', '30/1,sukrabad,dhanmondi,dhaka\r\ncharpara,karimgonj,kishoregonj', 'monsurahmedshafiq@gmail.com', '12345678', 'sdfghjknbvcx', '2019-07-24 09:47:26', '2019-07-24 09:47:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adapt_posts`
--
ALTER TABLE `adapt_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `request_posts`
--
ALTER TABLE `request_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adapt_posts`
--
ALTER TABLE `adapt_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `request_posts`
--
ALTER TABLE `request_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `volunteers`
--
ALTER TABLE `volunteers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
