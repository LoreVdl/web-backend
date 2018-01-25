-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 25 jan 2018 om 12:38
-- Serverversie: 10.1.28-MariaDB
-- PHP-versie: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackernewsDB`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `votes` int(11) NOT NULL DEFAULT '0',
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `url`, `votes`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Scythe, the most-hyped board game of 2016, delivers', 'https://arstechnica.com/gaming/2016/07/scythe-the-most-hyped-board-game-of-2016-delivers/', 0, 1, '2018-01-25 08:55:54', '2018-01-25 09:16:39', '2018-01-25 09:16:39'),
(2, 'test', 'http://127.0.0.1:8000/article/add', 0, 1, '2018-01-25 09:16:59', '2018-01-25 09:20:05', '2018-01-25 09:20:05'),
(3, 'test', 'http://pascalculator.be/hackernews/public/article/edit/5', 1, 1, '2018-01-25 09:20:14', '2018-01-25 09:44:09', '2018-01-25 09:44:09'),
(4, 'test', 'http://127.0.0.1:8000/article/add', 0, 2, '2018-01-25 09:43:01', '2018-01-25 09:43:07', '2018-01-25 09:43:07'),
(5, 'Scythe, the most-hyped board game of 2016, delivers', 'https://arstechnica.com/gaming/2016/07/scythe-the-most-hyped-board-game-of-2016-delivers/', 1, 2, '2018-01-25 09:43:28', '2018-01-25 09:45:59', NULL),
(6, 'YouTube\'s road to HTTPS', 'https://youtube-eng.googleblog.com/2016/08/youtubes-road-to-https.html', 0, 2, '2018-01-25 09:43:55', '2018-01-25 09:43:55', NULL),
(7, 'Tips from the Pragmatic Programmer (2000)', 'https://pragprog.com/the-pragmatic-programmer/extracts/tips', 0, 1, '2018-01-25 09:45:11', '2018-01-25 10:36:47', '2018-01-25 10:36:47'),
(8, 'Tips from the Pragmatic Programmer (2000)', 'https://pragprog.com/the-pragmatic-programmer/extracts/tips', 0, 1, '2018-01-25 10:37:15', '2018-01-25 10:37:15', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `user_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 'hello', '2018-01-25 09:22:00', '2018-01-25 09:30:07', '2018-01-25 09:30:07'),
(2, 3, 1, 'hello', '2018-01-25 09:30:11', '2018-01-25 09:30:16', '2018-01-25 09:30:16'),
(3, 3, 1, 'test', '2018-01-25 09:30:33', '2018-01-25 09:30:33', NULL),
(4, 5, 1, 'Can someone explain to me why it needed to raise $1.8 Million dollars via Kickstarter? Does that cover production costs as well as development time?\r\n\r\nWouldn\'t it be more fair to consumers if only development cost was covered by the kickstarter and then production costs were covered by actual pre-orders?', '2018-01-25 09:45:23', '2018-01-25 10:01:30', '2018-01-25 10:01:30'),
(5, 5, 1, 'test', '2018-01-25 10:01:33', '2018-01-25 10:11:50', '2018-01-25 10:11:50'),
(6, 5, 1, 'test', '2018-01-25 10:11:56', '2018-01-25 10:14:01', '2018-01-25 10:14:01'),
(7, 5, 1, 'test', '2018-01-25 10:14:06', '2018-01-25 10:36:42', '2018-01-25 10:36:42'),
(8, 5, 1, 'Can someone explain to me why it needed to raise $1.8 Million dollars via Kickstarter? Does that cover production costs as well as development time?\r\n\r\nWouldn\'t it be more fair to consumers if only development cost was covered by the kickstarter and then production costs were covered by actual pre-orders?', '2018-01-25 10:37:27', '2018-01-25 10:37:27', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2018_01_23_131650_create_articles_table', 1),
(8, '2018_01_23_140002_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
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
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Lore', 'lore-vanderlinden@hotmail.com', '$2y$10$H2tgEUxMAszbq4Jx.Ipq/OuEeM2WBgxFJrB.UDqDwjC9nKVovM9E6', 'yjlP6DKrwZU3jqq9AAHVgQE7BbUr3hJPxEfw7kq0dE8ZpHabdlZcN9iwdCl1', '2018-01-25 08:55:28', '2018-01-25 08:55:28'),
(2, 'Jimmy', 'jimmy@telenet.be', '$2y$10$GJyObEPwIlPWghJCNMlyOOQJJ0BngGNw98NlwsVqsw6vqXXgL0wZy', 'oQUG0k89ztCUS3bdueuOjQH21lSGekZ4KvoCxPQU3wnQ7O67KgATWH78opgQ', '2018-01-25 09:40:16', '2018-01-25 09:40:16');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_article_id_index` (`article_id`),
  ADD KEY `comments_user_id_index` (`user_id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Beperkingen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
