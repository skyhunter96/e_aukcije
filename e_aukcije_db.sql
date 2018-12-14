-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2018 at 10:49 PM
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
-- Database: `e_aukcije_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `descript` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `meta_name` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `endate` date DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `offers` int(255) DEFAULT NULL,
  `offered_by` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auctions`
--

INSERT INTO `auctions` (`id`, `name`, `descript`, `meta_name`, `meta_keyword`, `price`, `pic`, `endate`, `end_date`, `offers`, `offered_by`) VALUES
(1, 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, NULL, NULL, '2018-09-30', '2018-12-16 23:00:28', 52, 24),
(2, 'bbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', NULL, NULL, NULL, NULL, '2018-10-09', '2018-11-19 03:59:59', 10, 0),
(3, 'desc', 'Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. but the majority have suffered alteration in some form, by injected humour', NULL, NULL, NULL, NULL, NULL, '2018-11-27 19:36:14', NULL, 14),
(4, 'Telefon', 'Neki telefon', NULL, NULL, NULL, 'pics/1544385154.jpg', NULL, '2018-12-24 19:36:00', NULL, NULL),
(5, 'Laptop', 'Nekilaptop', NULL, NULL, NULL, 'pics/1544385285.jpg', NULL, '2018-12-24 19:36:07', NULL, 14);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_surname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `place` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` int(255) DEFAULT NULL,
  `coupon` int(255) DEFAULT NULL,
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name_surname`, `email`, `phone`, `user`, `pass`, `city`, `place`, `address`, `zip`, `coupon`, `img_path`, `role_id`, `remember_token`, `created_at`, `updated_at`, `verified`) VALUES
(2, 'Mladen Karićsss', 'misteryx96s@yahoo.com', '06163423798', 'misteryx962', 'd5b5f3ac8157efd4189a9822d323aabc', '', '', '', 0, 0, '', 1, NULL, NULL, NULL, 0),
(4, 'Mladen Karić', 'misteryx96sdsdds@yahoo.com', '0616342379', 'misteryx9622', '7731f702ff9d469cb8304bb3734268cb', '', '', '', 0, 0, '', 1, NULL, NULL, NULL, 0),
(5, 'Mladen Karić', 'misteryxsdsdds96@ygmms.com', '0616342379', 'misteryx96222', '942ceda62bfdc0cd3612b44b3923cbaf', '', '', '', 0, 0, '', 1, NULL, NULL, NULL, 0),
(6, 'Mladen Karić', 'mistery2x96@yahoo.com', '0616342379', 'misteryx962222fff', 'a192215dc6207b1758e94bc1f73ea567', '', '', '', 0, 0, '', 1, NULL, NULL, NULL, 0),
(8, 'Mladen Karić', 'misteryx9226@yahoo.com', '0616342379', 'misteryx96222fff', 'dccbd3771700ef57d0cd6e20f76d89ed', '', '', '', 0, 0, '', 1, NULL, NULL, NULL, 0),
(9, 'Mladen Karić', 'Mladen Karić', '0616342379', 'misteryx96222fffsss11112222', '0b9886030cef85ee2163d5d1ec263cfe', '', '', '', 0, 0, '', 1, NULL, NULL, NULL, 1),
(14, 'Admin Adminkovic', 'adminko@yahoo.com', '0616342379', 'adminko', '16fe10fcda557c737c178dedd0cd205b', '', '', '', 0, 0, '', 1, NULL, NULL, NULL, 1),
(16, 'Mladen Karić', 'misteryx96@yahoo.com', '0616342379', 'misteryx96', 'dccbd3771700ef57d0cd6e20f76d89ed', '', '', '', 0, 0, '', 1, NULL, NULL, NULL, 1),
(17, 'Mirko Cvetković', 'mirkosd@yahppssss.com', '0616342379', 'zebrta', 'dccbd3771700ef57d0cd6e20f76d89ed', '', '', '', 0, 0, '', 1, NULL, NULL, NULL, 0),
(18, 'Mladen Karić', 'email@yahoo.com', '0614444444', 'mirkosdsd111111', 'fdc68ea4cf2763996cf215451b291c63', '', '', '', 0, 0, '', 1, NULL, NULL, NULL, 0),
(19, 'Mladen Karids', 'msdksdk@skdksdk.com', '45558888', 'hfffeii', '3dbf1acdccdda404cc2a23671e0955a3', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-09-18 15:01:45', NULL, 0),
(20, 'Mladen kari', 'asdsda@sdsdsdsd', '788555', 'sdsdsd', '93dfcaf3d923ec47edb8580667473987', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-09-18 18:40:37', NULL, 1),
(21, 'Mladen kariaaaaaa', 'asdsda@sdsdsdsd', '7885555555555', 'sdsdsdaaa', 'cc5f881d1f282d0f2d246e186c71156e', 'aaaaaaa', 'aaaaa', 'aaaaaaaa', 198, 555, NULL, 1, NULL, '2018-09-18 18:45:52', NULL, 1),
(22, 'Mladen Krr', 'mids@yahoo.com', '4555888', 'skksdksdk', '0241a0da58ce5f4bcb76802dfb3986f5', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-10-05 22:50:50', NULL, 0),
(23, 'Mladen Karc', 'mladen@yahoo.com', '4545454', 'mladen96', '3fc0276c9eaca9d0c586d847c4465cda', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-10-13 18:28:30', NULL, 1),
(24, 'Miran Mirankovic222', 'miranko@yahoo.com', '0616342379', 'miran', '0a9509bd345f22aab2b0c8423f929609', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2018-11-09 21:00:41', NULL, 1),
(25, 'Mihajlo Kukubašić22222311111', 'mihailov@gmail.com', '0616342379', 'mihailov', 'caf24d88c54f419f80a55947500fb588', NULL, NULL, NULL, NULL, NULL, 'pics/1542995180.png', 1, NULL, '2018-11-09 21:04:11', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`user_id`, `token`, `created_at`, `updated_at`) VALUES
(4, 'uUFThzCRKpFqcH3LLwtUpcbRKQOpHV9881jyOj8q', NULL, NULL),
(5, 'Ml1zGC8sceoTI3FnPdMZvFggtp6Cvi5aT1KZAwyQ', NULL, NULL),
(6, '0KUyeZNpwAjmJKVYJHc9F5p44s4iWxEVhbqGnTry', NULL, NULL),
(7, 'UnITUkOMIQ9ipqKuI9oeID0wJfqE4iWI2UMbL5iE', NULL, NULL),
(8, 'p7mnyhksga62FEimgn829hIWYfHdX1dBMEdcjR1h', NULL, NULL),
(9, 'RKWFjYPWfODzI17xhC6KqCk9lKR6098IZRf42ShJ', NULL, NULL),
(10, '5A8joHey96cshR098h83BB9DM6tGyFbLEtJsrLMT', NULL, NULL),
(11, '9B0bkAwAmRQYQZvwQtebPuyvXnNTAqqDKbl3vZT1', NULL, NULL),
(12, '1uW5e9fAM5CQTBv792wRwyDgFQzs8wKF6YOHGO4f', NULL, NULL),
(13, 'cg22fsdqvrqiFumwT2gvf5fqHAjPCvQTzLLtTV6s', NULL, NULL),
(14, 'EvjVJWVOewRcyfdD8IOEI4wjgnfNa7NVvT07Tk9s', NULL, NULL),
(16, 'syw3Est8FKRcFJVYl5wqAQkn7xlFYjubzYMNdocV', NULL, NULL),
(19, 'SOpqOUpNBbzSaLEQpWZ9yMxXZCMi7ayeWHawI8vL', NULL, NULL),
(22, 'gVtQJfAyE8CV1d9o7Bqe8EQOgLW7OsqRph26IjFj', NULL, NULL),
(23, 'YfqrqhlNNBX9IwQZBvAYmxXfzcul58dAxmhVKs5A', NULL, NULL),
(24, 'BOXEN4SNlbwVu3kQH2ACogWuJaelYzzW17Z9rX0W', NULL, NULL),
(25, '2B2sq53U9gW1GG0aEAhejzOsxweKqeBFjyMEV64N', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
