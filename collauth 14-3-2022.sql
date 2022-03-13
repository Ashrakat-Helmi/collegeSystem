-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 11:35 PM
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
-- Database: `collauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `desires`
--

CREATE TABLE `desires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstDesire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondDesire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thirdDesire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `desires`
--

INSERT INTO `desires` (`id`, `firstDesire`, `secondDesire`, `thirdDesire`, `userId`, `created_at`, `updated_at`) VALUES
(64, 'BIS', 'FMI', 'ES', 10, '2022-03-12 17:04:18', '2022-03-12 17:04:18'),
(65, 'FMI', 'BIS', 'ES', 8, '2022-03-12 17:05:38', '2022-03-12 17:05:38'),
(66, 'ES', 'BIS', 'FMI', 11, '2022-03-12 17:07:24', '2022-03-12 17:07:24'),
(67, 'ES', 'FMI', 'BIS', 12, '2022-03-13 20:12:53', '2022-03-13 20:12:53');

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
-- Table structure for table `final_decisions`
--

CREATE TABLE `final_decisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` bigint(20) NOT NULL,
  `preDecisionId` bigint(20) NOT NULL,
  `programId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `final_decisions`
--

INSERT INTO `final_decisions` (`id`, `userId`, `preDecisionId`, `programId`, `status`, `created_at`, `updated_at`) VALUES
(110, 10, 10, 'BIS', 'Approved', NULL, NULL),
(111, 8, 8, 'FMI', 'Approved', NULL, NULL),
(112, 11, 11, 'ES', 'Approved', NULL, NULL),
(113, 12, 12, 'ES', 'Approved', NULL, NULL);

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
(1, '2022_02_19_140836_create_desires_table', 1),
(2, '2022_02_19_140836_create_failed_jobs_table', 1),
(3, '2022_02_19_140836_create_final_decisions_table', 1),
(4, '2022_02_19_140836_create_news_table', 1),
(5, '2022_02_19_140836_create_password_resets_table', 1),
(6, '2022_02_19_140836_create_pre_decisions_table', 1),
(7, '2022_02_19_140836_create_programs_table', 1),
(8, '2022_02_19_140836_create_questions_table', 1),
(9, '2022_02_19_140836_create_theme_table', 1),
(10, '2022_02_19_140836_create_users_table', 1),
(11, '2022_02_19_140837_add_foreign_keys_to_desires_table', 1),
(12, '2022_02_19_140837_add_foreign_keys_to_final_decisions_table', 1),
(13, '2022_02_19_140837_add_foreign_keys_to_pre_decisions_table', 1),
(14, '2022_02_19_140837_add_foreign_keys_to_questions_table', 1),
(15, '2022_02_23_101551_create_admins_table', 2),
(17, '2022_02_19_140836_create_employees_table', 3),
(18, '2022_02_23_144927_create_employees_table', 4),
(19, '2022_02_27_184749_create_admins_table', 0),
(20, '2022_02_27_184749_create_applieddesires_table', 0),
(21, '2022_02_27_184749_create_desires_table', 0),
(22, '2022_02_27_184749_create_employees_table', 0),
(23, '2022_02_27_184749_create_failed_jobs_table', 0),
(24, '2022_02_27_184749_create_final_decisions_table', 0),
(25, '2022_02_27_184749_create_news_table', 0),
(26, '2022_02_27_184749_create_password_resets_table', 0),
(27, '2022_02_27_184749_create_pre_decisions_table', 0),
(28, '2022_02_27_184749_create_programs_table', 0),
(29, '2022_02_27_184749_create_questions_table', 0),
(30, '2022_02_27_184749_create_theme_table', 0),
(31, '2022_02_27_184749_create_users_table', 0),
(32, '2022_02_27_184750_add_foreign_keys_to_applieddesires_table', 0),
(33, '2022_02_27_184750_add_foreign_keys_to_desires_table', 0),
(34, '2022_02_27_184750_add_foreign_keys_to_final_decisions_table', 0),
(35, '2022_02_27_184750_add_foreign_keys_to_news_table', 0),
(36, '2022_02_27_184750_add_foreign_keys_to_pre_decisions_table', 0),
(37, '2022_02_27_184750_add_foreign_keys_to_questions_table', 0),
(38, '2022_03_13_223344_create_admins_table', 0),
(39, '2022_03_13_223344_create_applieddesires_table', 0),
(40, '2022_03_13_223344_create_desires_table', 0),
(41, '2022_03_13_223344_create_employees_table', 0),
(42, '2022_03_13_223344_create_failed_jobs_table', 0),
(43, '2022_03_13_223344_create_final_decisions_table', 0),
(44, '2022_03_13_223344_create_news_table', 0),
(45, '2022_03_13_223344_create_password_resets_table', 0),
(46, '2022_03_13_223344_create_pre_decisions_table', 0),
(47, '2022_03_13_223344_create_programs_table', 0),
(48, '2022_03_13_223344_create_questions_table', 0),
(49, '2022_03_13_223344_create_theme_table', 0),
(50, '2022_03_13_223344_create_users_table', 0),
(51, '2022_03_13_223345_add_foreign_keys_to_applieddesires_table', 0),
(52, '2022_03_13_223345_add_foreign_keys_to_desires_table', 0),
(53, '2022_03_13_223345_add_foreign_keys_to_final_decisions_table', 0),
(54, '2022_03_13_223345_add_foreign_keys_to_news_table', 0),
(55, '2022_03_13_223345_add_foreign_keys_to_pre_decisions_table', 0),
(56, '2022_03_13_223345_add_foreign_keys_to_questions_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminId` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `adminId`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'asdasdasd', NULL, 1, '2022-02-26 13:42:23', NULL),
(2, 'asasasasasa', 'zxxzxzxzxzxzxzxz', NULL, 1, '2022-02-26 14:06:27', NULL),
(3, 'asdasdasdasdasd', 'zXczxczxczxczx', NULL, 1, '2022-02-26 14:09:43', NULL),
(4, 'asq44444', '553434343434234213rasfasdfasdf', NULL, 1, '2022-02-26 14:11:26', NULL),
(5, 'asdasdsa6666666', 'sadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxc', NULL, 1, '2022-02-26 14:09:43', NULL),
(6, '666666666666', 'sadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxcsadfasfasVCzxczxczxc', NULL, 1, '2022-02-26 14:09:43', NULL);

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
-- Table structure for table `pre_decisions`
--

CREATE TABLE `pre_decisions` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pre_decisions`
--

INSERT INTO `pre_decisions` (`id`, `userId`, `status`, `created_at`, `updated_at`) VALUES
(8, 8, 'pending', NULL, NULL),
(10, 10, 'Rejected', NULL, '2022-03-12 20:52:36'),
(11, 11, 'Rejected', NULL, '2022-03-13 20:16:07'),
(12, 12, 'Approved', NULL, '2022-03-13 20:16:10');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'BIS', '2022-02-26 15:58:54', NULL),
(2, 'FMI', '2022-02-26 15:58:55', NULL),
(3, 'ES', '2022-02-26 15:59:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Please wait for our response.',
  `userId` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer`, `userId`, `created_at`, `updated_at`) VALUES
(5, 'What is BIS?', 'Please wait for our response.', 10, '2022-03-12 17:04:59', '2022-03-12 17:04:59'),
(6, 'What \'re the fees of FMI?', 'Please wait for our response.', 10, '2022-03-12 17:05:14', '2022-03-12 17:05:14'),
(7, 'what is FMI?', 'Please wait for our response.', 11, '2022-03-12 17:07:36', '2022-03-12 17:07:36'),
(8, 'What is the fees of BIS?', 'Please wait for our response.', 11, '2022-03-12 17:07:46', '2022-03-12 17:07:46'),
(9, 'sadasd', 'Please wait for our response.', 12, '2022-03-13 20:14:10', '2022-03-13 20:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `englishDegree` int(11) NOT NULL,
  `highSchoolTotalMarks` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `phone`, `gender`, `englishDegree`, `highSchoolTotalMarks`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'sallam', 'sallam@gmail.com', 'tanta', 1288465475, 'Male', 47, 262, NULL, '$2y$10$bmTSORiUPZJJSOQ0DlVSBeKaGkHeXR34up9sa/8t0jsQF1yun2VNm', NULL, '2022-03-10 18:45:35', '2022-03-12 11:30:36'),
(10, 'kilany', 'kilany@gmail.com', 'tanta', 1027555478, 'Male', 49, 289, NULL, '$2y$10$bmTSORiUPZJJSOQ0DlVSBeKaGkHeXR34up9sa/8t0jsQF1yun2VNm', NULL, '2022-03-12 15:14:39', '2022-03-12 16:40:19'),
(11, 'ashrakat', 'ashrakat@gmail.com', 'cairo', 1027555458, 'Male', 59, 287, NULL, '$2y$10$hk/14USTNBUyb2g6ZotG7eSN5H89XD5p.5AZjPoaRXyryHgKoebgK', NULL, '2022-03-12 17:07:10', '2022-03-12 17:07:10'),
(12, 'user', 'user@gmail.com', 'tanta', 1027606747, 'Male', 52, 276, NULL, '$2y$10$VuhJ3krZJ6sl.kbNQ3btIOdA8/J7cn8FlKu9G.A791.VUQpj8bw.y', NULL, '2022-03-13 18:57:51', '2022-03-13 18:57:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desires`
--
ALTER TABLE `desires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firstDesire` (`firstDesire`),
  ADD KEY `secondDesire` (`secondDesire`),
  ADD KEY `thirdDesire` (`thirdDesire`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `final_decisions`
--
ALTER TABLE `final_decisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `predId` (`preDecisionId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminId` (`adminId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pre_decisions`
--
ALTER TABLE `pre_decisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desires`
--
ALTER TABLE `desires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `final_decisions`
--
ALTER TABLE `final_decisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pre_decisions`
--
ALTER TABLE `pre_decisions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `desires`
--
ALTER TABLE `desires`
  ADD CONSTRAINT `desires_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `final_decisions`
--
ALTER TABLE `final_decisions`
  ADD CONSTRAINT `final_decisions_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `final_decisions_ibfk_3` FOREIGN KEY (`preDecisionId`) REFERENCES `pre_decisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`adminId`) REFERENCES `admins` (`id`);

--
-- Constraints for table `pre_decisions`
--
ALTER TABLE `pre_decisions`
  ADD CONSTRAINT `pre_decisions_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
