-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2017 г., 09:06
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tickets`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$nk/bqWD5wWN9GYZ9atuqHeV5lfD79G6efnV/.A9vzFj73usuRS1J6', 'g0DMWQhcooJOU5fT1qwfumZvcO9eZNsJEcAFa81FRTkSQlbZMvH9nAkiwf2Z', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `conferences`
--

CREATE TABLE IF NOT EXISTS `conferences` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `conferences`
--

INSERT INTO `conferences` (`id`, `title`, `place`, `time`, `created_at`, `updated_at`) VALUES
(1, 'Вступительная конференция edt', 'Большой зал', '2017-10-01 12:00:00', NULL, '2017-12-18 02:53:39'),
(2, 'Международная конференция', 'Большой зал', '2017-10-02 12:00:00', NULL, NULL),
(3, 'Научная конференция', 'Открытый зал', '2017-10-02 15:00:00', NULL, NULL),
(4, 'Закрытая конференция', 'Малый зал', '2017-10-04 17:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `conference_speaker`
--

CREATE TABLE IF NOT EXISTS `conference_speaker` (
  `conference_id` int(10) unsigned NOT NULL,
  `speaker_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `conference_speaker`
--

INSERT INTO `conference_speaker` (`conference_id`, `speaker_id`) VALUES
(4, 1),
(1, 2),
(2, 2),
(1, 3),
(2, 3),
(4, 3),
(2, 4),
(2, 5),
(1, 6),
(3, 6),
(1, 7),
(3, 7),
(4, 7),
(3, 8),
(3, 9),
(1, 10),
(4, 10),
(1, 13),
(3, 13);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2017_09_13_120504_create_donations_table', 1),
(24, '2014_10_12_000000_create_users_table', 2),
(25, '2014_10_12_100000_create_password_resets_table', 2),
(26, '2017_09_11_155237_create_admins_table', 2),
(27, '2017_09_13_120534_create_conferences_table', 2),
(28, '2017_09_13_121128_create_speakers_table', 2),
(29, '2017_09_13_121238_create_tickets_table', 2),
(30, '2017_09_13_151502_create_sponsors_table', 2),
(31, '2017_09_14_060505_create_conference_speaker_table', 2),
(32, '2017_09_14_100052_create_ticket_user_table', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `speakers`
--

CREATE TABLE IF NOT EXISTS `speakers` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `speakers`
--

INSERT INTO `speakers` (`id`, `name`, `info`, `created_at`, `updated_at`) VALUES
(1, 'Спикер Один', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.', NULL, NULL),
(2, 'Спикер Два', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.', NULL, NULL),
(3, 'Спикер Три', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.', NULL, NULL),
(4, 'Спикер Четыре', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.', NULL, NULL),
(5, 'Спикер Пять', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.', NULL, NULL),
(6, 'Спикер Шесть', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.', NULL, NULL),
(7, 'Спикер Семь', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.', NULL, NULL),
(8, 'Спикер Восемь', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.', NULL, NULL),
(9, 'Спикер Девять', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.', NULL, NULL),
(10, 'Спикер Десять', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam laoreet posuere arcu a rutrum. Phasellus eu diam pulvinar, cursus tortor ut, ullamcorper eros.', NULL, NULL),
(13, 'fdndnf', 'dnfdndfnfdn', '2017-12-15 16:29:24', '2017-12-15 16:29:24');

-- --------------------------------------------------------

--
-- Структура таблицы `sponsors`
--

CREATE TABLE IF NOT EXISTS `sponsors` (
  `id` int(10) unsigned NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `donation` int(10) unsigned NOT NULL,
  `card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sponsors`
--

INSERT INTO `sponsors` (`id`, `organization`, `donation`, `card`, `created_at`, `updated_at`) VALUES
(1, 'OOO Ромашечка', 100011, '9999 9999 9999 9999', '2017-09-14 08:56:36', '2017-09-14 08:56:36'),
(2, 'ООО Ромашечка', 1111, '1111 1111 1111 1111', '2017-09-14 09:00:39', '2017-09-14 09:00:39'),
(3, 'ООО Ромашечка', 11111, '1111 1111 1111 1111', '2017-09-14 09:01:45', '2017-09-14 09:01:45'),
(4, 'qqqqqqq', 11111, '1111 1111 1111 1111', '2017-12-15 16:28:08', '2017-12-15 16:28:08');

-- --------------------------------------------------------

--
-- Структура таблицы `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id` int(10) unsigned NOT NULL,
  `conference_id` int(10) unsigned NOT NULL,
  `price` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`id`, `conference_id`, `price`) VALUES
(1, 1, 50),
(2, 2, 100),
(3, 3, 100),
(4, 4, 150),
(5, 1, 500),
(6, 2, 1000),
(7, 3, 1000),
(8, 4, 1500);

-- --------------------------------------------------------

--
-- Структура таблицы `ticket_user`
--

CREATE TABLE IF NOT EXISTS `ticket_user` (
  `id` int(10) unsigned NOT NULL,
  `ticket_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ticket_user`
--

INSERT INTO `ticket_user` (`id`, `ticket_id`, `user_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 6, 1),
(4, 4, 1),
(5, 7, 2),
(6, 8, 2),
(7, 1, 2),
(8, 1, 2),
(9, 1, 2),
(10, 1, 2),
(11, 1, 2),
(12, 1, 2),
(13, 8, 2),
(14, 8, 2),
(15, 8, 2),
(16, 1, 2),
(17, 1, 2),
(18, 1, 2),
(19, 1, 2),
(20, 2, 2),
(21, 2, 2),
(22, 2, 2),
(23, 2, 2),
(24, 2, 2),
(25, 6, 2),
(26, 2, 2),
(27, 2, 2),
(28, 1, 1),
(29, 2, 1),
(30, 2, 1),
(31, 2, 1),
(32, 2, 1),
(33, 1, 6),
(34, 4, 6),
(35, 8, 6),
(36, 1, 6),
(37, 4, 6),
(38, 2, 6),
(39, 3, 6),
(40, 8, 6),
(41, 1, 6),
(42, 1, 6),
(43, 1, 6),
(44, 7, 6),
(45, 7, 6),
(46, 7, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `check` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `company`, `position`, `check`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Пользователь Один', 'one@gmail.com', '$2y$10$TciiwZmkbwBKj5W3onejG.RJ3gubJ1ws2KM7FhcZyO8PnwyC/qGv2', 'Комания Один', 'Директор', 1, 'lcD3Cr7eRwPxMFPUzeHaHMeLv5Rf8ivG4OyxHi4UcTXGFk4eXx5afFsOwP2E', NULL, NULL),
(2, 'Пользователь Два', 'two@gmail.com', '$2y$10$m4OYoGOJwgxYSCspR9Q8LOZViviMfEW2kuS/cqyuxTuEldjo2M6Wq', 'Комания Два', 'Бухгалтер', 1, 'DvmlBJ8aq1ASsA2sdnr0jtj68RUVBkspJ2u9oPRBNLhnrbVO6rN9LhHUf2vc', NULL, NULL),
(3, 'Пользователь Три', 'three@gmail.com', '$2y$10$fyQEyi9EijjenMKV.ULW5ufO/wMrMBiA7zKrSVsrwQSF1Q8AUp.cu', 'Комания Три', 'Продавец', 1, NULL, NULL, NULL),
(4, 'Пользователь Четыре', 'four@gmail.com', '$2y$10$p2NCwJxpmHcGzSH6uIwMaOJswVdqZtElRt2X0dSlLOVLtkoJZi3BC', 'Комания Четыре', 'Стажер', 1, NULL, NULL, NULL),
(5, 'Пользователь Пять', 'five@gmail.com', '$2y$10$Ij3pOTy1vebx5wYwwGkaH.QJdbcYUNUZDl8HspDiaElIMJN8.3.U.', 'Комания Пять', 'Юрист', 1, NULL, NULL, NULL),
(6, 'Николай', 'nik@qwert.com', '$2y$10$AOAVaz9qNNOxn05SUg302.jmntKm8DdObDLC1/wT0jqLFGTS/FYWO', 'впывипвы', 'увпвып', 1, NULL, '2017-12-15 16:23:36', '2017-12-15 16:23:36');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Индексы таблицы `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `conference_speaker`
--
ALTER TABLE `conference_speaker`
  ADD PRIMARY KEY (`conference_id`,`speaker_id`),
  ADD KEY `conference_speaker_speaker_id_foreign` (`speaker_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_conference_id_foreign` (`conference_id`);

--
-- Индексы таблицы `ticket_user`
--
ALTER TABLE `ticket_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticket_user_ticket_id_foreign` (`ticket_id`),
  ADD KEY `ticket_user_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `conferences`
--
ALTER TABLE `conferences`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT для таблицы `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `ticket_user`
--
ALTER TABLE `ticket_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `conference_speaker`
--
ALTER TABLE `conference_speaker`
  ADD CONSTRAINT `conference_speaker_conference_id_foreign` FOREIGN KEY (`conference_id`) REFERENCES `conferences` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `conference_speaker_speaker_id_foreign` FOREIGN KEY (`speaker_id`) REFERENCES `speakers` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_conference_id_foreign` FOREIGN KEY (`conference_id`) REFERENCES `conferences` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `ticket_user`
--
ALTER TABLE `ticket_user`
  ADD CONSTRAINT `ticket_user_ticket_id_foreign` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ticket_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
