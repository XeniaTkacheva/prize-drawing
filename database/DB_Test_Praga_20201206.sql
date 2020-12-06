-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.19 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.0.0.5958
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица prize_db.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы prize_db.failed_jobs: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Дамп структуры для таблица prize_db.gifts
CREATE TABLE IF NOT EXISTS `gifts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'free',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы prize_db.gifts: ~30 rows (приблизительно)
/*!40000 ALTER TABLE `gifts` DISABLE KEYS */;
INSERT INTO `gifts` (`id`, `name`, `status`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Стол', 'free', 'Alice went on, spreading out the verses on his.', '2020-12-06 12:23:03', '2020-12-06 12:23:03'),
	(2, 'Компьютер', 'free', 'Alice (she was obliged to have got into a large.', '2020-12-06 12:23:03', '2020-12-06 12:23:03'),
	(3, 'Телефон', 'free', 'When the pie was all ridges and furrows; the.', '2020-12-06 12:23:03', '2020-12-06 15:49:34'),
	(4, 'Скрепка', 'free', 'No, it\'ll never do to come once a week: HE.', '2020-12-06 12:23:03', '2020-12-06 12:23:03'),
	(5, 'Книга', 'free', 'Dormouse. \'Don\'t talk nonsense,\' said Alice.', '2020-12-06 12:23:03', '2020-12-06 15:39:02'),
	(6, 'Колесо', 'free', 'Shark, But, when the race was over. However.', '2020-12-06 12:23:03', '2020-12-06 12:23:03'),
	(7, 'Очки', 'free', 'Mock Turtle in the middle of her little sister\'s.', '2020-12-06 12:23:03', '2020-12-06 15:37:19'),
	(8, 'Стакан', 'free', 'Hatter. He came in with a sigh: \'it\'s always.', '2020-12-06 12:23:03', '2020-12-06 15:48:17'),
	(9, 'Шкаф', 'free', 'I know all the things between whiles.\' \'Then you.', '2020-12-06 12:23:03', '2020-12-06 12:23:03'),
	(10, 'Скатерть', 'free', 'English, who wanted leaders, and had come to the.', '2020-12-06 12:23:03', '2020-12-06 16:25:28'),
	(11, 'Зонт', 'free', 'Mock Turtle, suddenly dropping his voice; and.', '2020-12-06 12:23:03', '2020-12-06 16:41:51'),
	(12, 'Подставка', 'free', 'Come on!\' So they couldn\'t get them out of its.', '2020-12-06 12:23:03', '2020-12-06 16:24:44'),
	(13, 'Шуба', 'free', 'Duchess, \'chop off her unfortunate guests to.', '2020-12-06 12:23:03', '2020-12-06 16:25:40'),
	(14, 'Карта', 'free', 'Majesty!\' the soldiers had to sing "Twinkle.', '2020-12-06 12:23:03', '2020-12-06 16:21:47'),
	(15, 'Карандаш', 'free', 'Alice quite hungry to look about her any more.', '2020-12-06 12:23:04', '2020-12-06 15:50:55'),
	(16, 'Путевка', 'free', 'I\'ve finished.\' So they went on \'And how many.', '2020-12-06 12:23:04', '2020-12-06 16:03:31'),
	(17, 'Билет', 'free', 'Presently she began fancying the sort of way to.', '2020-12-06 12:23:04', '2020-12-06 16:35:13'),
	(18, 'Принтер', 'free', 'For really this morning I\'ve nothing to what I.', '2020-12-06 12:23:04', '2020-12-06 16:22:44'),
	(19, 'Лопата', 'free', 'Alice felt so desperate that she was saying, and.', '2020-12-06 12:23:04', '2020-12-06 15:50:40'),
	(20, 'Велосипед', 'free', 'Alice. \'Come on, then,\' said the White Rabbit.', '2020-12-06 12:23:04', '2020-12-06 15:50:27'),
	(21, 'Блокнот', 'free', 'I suppose it were nine o\'clock in the act of.', '2020-12-06 12:23:04', '2020-12-06 16:25:52'),
	(22, 'Наушники', 'free', 'Alice ventured to taste it, and then another.', '2020-12-06 12:23:04', '2020-12-06 16:07:03'),
	(23, 'Колонка', 'free', 'YOUR temper!\' \'Hold your tongue!\' added the.', '2020-12-06 12:23:04', '2020-12-06 16:25:14'),
	(24, 'Планшет', 'free', 'It means much the same words as before, \'and.', '2020-12-06 12:23:04', '2020-12-06 16:05:56'),
	(25, 'Мышь', 'free', 'Queen said severely \'Who is this?\' She said this.', '2020-12-06 12:23:04', '2020-12-06 16:04:35'),
	(26, 'Забор', 'free', 'Which way?\', holding her hand on the hearth and.', '2020-12-06 12:23:04', '2020-12-06 16:01:18'),
	(27, 'Кресло', 'free', 'The long grass rustled at her side. She was.', '2020-12-06 12:23:04', '2020-12-06 16:01:36'),
	(28, 'Коврик', 'free', 'What happened to you? Tell us all about as she.', '2020-12-06 12:23:04', '2020-12-06 16:24:59'),
	(29, 'Лампа', 'free', 'Shall I try the patience of an oyster!\' \'I wish.', '2020-12-06 12:23:04', '2020-12-06 15:25:08'),
	(30, 'Сковородка', 'free', 'Alice dear!\' said her sister; \'Why, what are.', '2020-12-06 12:23:04', '2020-12-06 16:03:12');
/*!40000 ALTER TABLE `gifts` ENABLE KEYS */;

-- Дамп структуры для таблица prize_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы prize_db.migrations: ~7 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2020_12_04_190053_create_sessions_table', 2),
	(5, '2020_12_05_053850_create_prizes_table', 3),
	(6, '2020_12_05_061611_create_rounds_table', 4),
	(10, '2020_12_06_113317_create_gifts_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица prize_db.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы prize_db.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп структуры для таблица prize_db.prizes
CREATE TABLE IF NOT EXISTS `prizes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int unsigned NOT NULL,
  `actual_amount` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `min_amount` int NOT NULL,
  `max_amount` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы prize_db.prizes: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `prizes` DISABLE KEYS */;
INSERT INTO `prizes` (`id`, `name`, `unit`, `amount`, `actual_amount`, `status`, `min_amount`, `max_amount`, `created_at`, `updated_at`) VALUES
	(1, 'Денежные призы', 'руб.', 1000000, 1000000, 1, 100, 50000, '2020-12-05 12:07:39', '2020-12-06 16:22:24'),
	(2, 'Бонусные баллы', 'балл.', 0, 0, 1, 10, 1000, '2020-12-05 12:35:03', '2020-12-06 17:30:35'),
	(3, 'Подарки', 'шт.', 30, 30, 1, 1, 1, '2020-12-05 12:36:10', '2020-12-06 16:41:51');
/*!40000 ALTER TABLE `prizes` ENABLE KEYS */;

-- Дамп структуры для таблица prize_db.rounds
CREATE TABLE IF NOT EXISTS `rounds` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `prize_id` bigint unsigned NOT NULL,
  `amount` int unsigned NOT NULL,
  `gift_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы prize_db.rounds: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `rounds` DISABLE KEYS */;
/*!40000 ALTER TABLE `rounds` ENABLE KEYS */;

-- Дамп структуры для таблица prize_db.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы prize_db.sessions: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

-- Дамп структуры для таблица prize_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы prize_db.users: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Oksana Bürki', 'oksana.burki@xeniaweb.ch', NULL, '$2y$10$vJGY0M0nBj22n7SIT7egZewZwmLJ.nT04Exvk6yWN9yZ45hXYbMRa', 'fvu5GL9hnpKJ1eM3J3pN3wgGvPoS9InXU1GLzEW44XYPSR2IaKjaHWK0qJDv', '2020-12-04 18:50:30', '2020-12-04 18:50:30'),
	(2, 'Xenia', 'xenia1898@gmail.com', NULL, '$2y$10$vYkKPL4QnYzSNso052g0OuHCYjPrVdYyQlttdgYjcFYzHcog60.5O', '5kV0zGuZgs6uM0Nf4WxQpzv5tQpxKjQfbd736ugqQInxPC24R08ztE8jyYlp', '2020-12-05 17:41:50', '2020-12-05 17:41:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
