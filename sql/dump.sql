-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.38 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица bwt7.hotels
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы bwt7.hotels: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` (`id`, `user_id`, `name`, `address`, `description`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 0, 'trtretretr', 'tretretretre', 'tretretretreter', '1528363831.jpg', '2018-06-07 09:30:31', '2018-06-07 09:30:31'),
	(2, 0, 'Vernon', 'Pouros', 'Vero illo laboriosam nulla quia facilis non iste ullam.', '91944bfd3c72570d2df62f536f24ac9f.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(3, 0, 'Arvid', 'Howe', 'Dolor culpa nam iste aut.', 'a2d16bf8c96cac34e09055e6d019aa08.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(4, 0, 'Ewell', 'Bahringer', 'Quod suscipit dolorem praesentium vel pariatur labore.', '5d8c1c905ef0ac58762f48566d97256a.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(5, 0, 'Lewis', 'Tillman', 'Quia amet corporis nihil omnis perferendis magnam.', '5245ff73a94b2ca13da436937ca9bcc5.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(6, 0, 'Quinton', 'Baumbach', 'Repellat officia ipsum ut voluptate porro.', '49f960014fec9ab0206e73151409fbb9.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(7, 0, 'Nelle', 'Conn', 'In est a modi non sit sit sit.', '831375c788652a3c6459e434facc7099.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(8, 0, 'Ephraim', 'Armstrong', 'Laudantium quia quaerat porro quidem accusamus nam praesentium.', 'f073acf3ad9e6553752e6a634cce90eb.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(9, 0, 'Thea', 'Morar', 'Neque autem eaque sit quibusdam.', '291414d7af774beee1269fa2cfbdcc28.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(10, 0, 'Estella', 'Doyle', 'Debitis est quas ad.', '2ac9cc569c9184803a0b0961ae8693c2.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(11, 0, 'Hudson', 'Douglas', 'Placeat reiciendis numquam ad id occaecati vel aperiam.', '68b89ea98248a6e836563588333c69b2.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(12, 0, 'Moses', 'Schuppe', 'Inventore quia ipsam eaque minima neque repellat.', 'ae5c809f6309a5445da6f2724ab71f6c.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(13, 0, 'Karlie', 'Batz', 'Quo dolores omnis maiores qui aperiam in occaecati ipsa.', '9fd82105110941b007a1e100534352c5.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(14, 0, 'Susana', 'Corkery', 'Perspiciatis ea deserunt dignissimos quos vitae magnam.', 'c0c6e7b923b1fb91e10bd0fa893570a3.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(15, 0, 'Cathy', 'Fritsch', 'Laboriosam at totam maxime dicta laboriosam velit.', '23294d59a3225a1c818b0ac55ce773ba.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(16, 0, 'Grayson', 'Nicolas', 'Nobis officia eaque similique aperiam.', '52082f715258dd18ff31bee4435b70c6.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(17, 0, 'Clifford', 'Aufderhar', 'Recusandae perspiciatis omnis velit occaecati illo.', '858358d5018edbd2e858210733ceaf25.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(18, 0, 'Kelly', 'O\'Reilly', 'Consequatur sit laboriosam natus qui neque ut.', 'f72be5c7c4bfbd4507a853f3daad8a68.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(19, 0, 'Danny', 'Larson', 'Velit tenetur soluta voluptas eum commodi sint.', 'f8da562a7bf50da331ee1360d63f1fa3.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18'),
	(20, 0, 'Cary', 'Kuhic', 'Aut tempore accusamus et tenetur iure sit explicabo.', '7a876b23af016d0714a047d605751155.jpg', '2018-06-07 10:03:18', '2018-06-07 10:03:18');
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;

-- Дамп структуры для таблица bwt7.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы bwt7.migrations: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_100000_create_password_resets_table', 1),
	(2, '2018_05_24_135434_create_users_table', 1),
	(4, '2018_06_01_054529_create_rooms_table', 1),
	(5, '2018_06_03_173433_create_user_hotels_table', 1),
	(6, '2018_05_31_144154_create_hotels_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Дамп структуры для таблица bwt7.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы bwt7.password_resets: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Дамп структуры для таблица bwt7.rooms
CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hotel_id` int(10) unsigned NOT NULL DEFAULT '1',
  `price` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rooms_hotel_id_foreign` (`hotel_id`),
  CONSTRAINT `rooms_hotel_id_foreign` FOREIGN KEY (`hotel_id`) REFERENCES `hotels` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы bwt7.rooms: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;
INSERT INTO `rooms` (`id`, `hotel_id`, `price`, `type`, `room`, `created_at`, `updated_at`) VALUES
	(1, 1, '787878', 'Single', '0.20592800 1528363831.jpg', '2018-06-07 09:30:31', '2018-06-07 09:30:31'),
	(2, 1, '48392', 'Krystal', 'dc88d2ebf291c53241e3c8bef0858f1f.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(3, 13, '29453', 'Pasquale', '6b5c37836000a1a2daa2a6e5af269622.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(4, 5, '60', 'Adam', 'dba7035172a31c749355c61227189d77.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(5, 12, '234728', 'Bailey', '02d7a51d320417d5dd73ac4b5cd3b2b3.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(6, 17, '771', 'Onie', '12ffdb8ca09faebfa386cfd81de1a6fc.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(7, 7, '6078037', 'Dean', '4f32507a1dab252246a51a100274ce13.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(8, 5, '9', 'Raphael', 'f31944a27d19e7eea721223b8a9ee54b.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(9, 4, '819', 'Julio', '287d12483f492cd8f2c70fad57a4c624.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(10, 17, '11362850', 'Trevor', '48bfefe544f79fd20f26141a16a839aa.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(11, 14, '1', 'Gerardo', '9ffa159de1cd64814e0024361401dfb6.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(12, 10, '29106668', 'Elissa', '48b900dd968da93cba19f554fdbd0e67.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(13, 16, '43714', 'Donnie', 'df982ad8d97c5d826510d333346be58f.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(14, 19, '724086539', 'Madge', '6093e017da3bd7d9a75d1fb46b6cf533.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(15, 17, '8889978', 'Franz', '25eb3fd55221d8fb447b65c7e6d59b71.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(16, 9, '3035601', 'Davon', 'a1fff36681d63a46c2cdc8f0ace80352.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(17, 4, '7', 'Abagail', '10459a028d6cf59703a8c3a16548a579.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(18, 13, '71227', 'Allan', '2a8aa2ec738948e145199625a58ba66b.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(19, 3, '9556', 'Kayley', '294be96b77f52582703418f6b9bd093f.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(20, 18, '455115', 'Eloise', 'a052fce849969548b10bc278538b750d.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(21, 12, '1', 'Lexie', '367e0c03999d1923001c7d5592e764bb.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(22, 6, '173464509', 'Efren', 'ca28eb2a2f6e48167de6627bb1ef4d14.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(23, 20, '880031806', 'Amelia', '86ce67af0338caa7f9f21a50db257e4d.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(24, 13, '37026261', 'Pedro', '34182d178d6a77929e62e5461ebb8223.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(25, 20, '1252', 'Terrance', 'fcfd51b1bb2a7530155b51a06e4d31b3.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(26, 16, '343773', 'Stan', '9d6163eb1e1c2125482f9a5d9535f6bf.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(27, 3, '88256', 'Finn', 'cacf7adcd0b1f51d50bdd691b0bbb383.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(28, 20, '91', 'Jakob', '4a1c24b631d6b12b795f7b3f59eaea44.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(29, 4, '45', 'Amari', '5d791b9a26c2f9621b6548eb31e6fe9b.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(30, 6, '56691602', 'Raheem', 'd96ba48892698b979ff5e171f03baa5c.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(31, 17, '903', 'Herminio', '4f7946e775596eda3d9498b31880caf3.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(32, 14, '37758219', 'Leanne', '2fc0280140e01cdf2a17dbd8afe0fb28.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(33, 8, '78', 'William', 'a70e1fa2e4645fa5668e0d19034fdb67.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(34, 11, '3843166', 'Claudine', 'faf3446939e852341176193e7bb3d518.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(35, 16, '133810', 'Dana', '4a9343f407223929dfdaf4965c73d125.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(36, 16, '760493', 'Ernestine', '6c4757fd395f9a12aa7afbdd87e674af.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(37, 2, '299538035', 'Nathanial', '9ad062056e4dd9126f53f6f65a337a0a.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(38, 6, '2', 'Rodrigo', 'a690e9cbfca8a3903bd2fcc8026efb0b.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(39, 10, '439', 'Teagan', '3544ee4fe923d98149524121914d65ea.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(40, 8, '55', 'Cloyd', 'faa493f124167dc89bf01b3697d4d371.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(41, 1, '1', 'Natalia', '5660916612d2abdac43d1b9cfcc42110.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(42, 19, '157', 'Marques', '84d8726c468ce3939d2193fb5870fa87.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(43, 3, '20911', 'Bette', '63134df99f38dd497cf1e4c99d1ef7c9.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(44, 8, '211488924', 'Ima', '466c42f77faabbc81b7223bda2d84e99.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(45, 4, '93487', 'Jarrell', 'ace476180030434aefc21fad26fb8113.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(46, 2, '53', 'Vicky', '7464488031dd5df09d7be73f843a3bd3.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(47, 10, '71', 'Vilma', '8c3aedd97275f9dc6232e8d5b54349b4.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(48, 1, '7', 'Cristina', 'ed06adf8e91fac520db372be43a501c3.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(49, 4, '882738', 'Lavinia', 'fb5898156db659337c7cee243236444e.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(50, 16, '9', 'Camila', '39ed6019b5600ccc58f862371c5479b4.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21'),
	(51, 13, '733618', 'Hunter', '851ac8a5f58aa80dc347b7847a17e8a3.jpg', '2018-06-07 12:18:21', '2018-06-07 12:18:21');
/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;

-- Дамп структуры для таблица bwt7.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `photo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'one.jpg',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы bwt7.users: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `photo`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Tom', 'admin@gmail.com', '$2y$10$fSMxOpYQ6ZYZDHCg70gHQ.eiZh1gM4qH01/6IJVw0YB373IHyBP1W', 'admin', '1528370374.jpg', NULL, 'AWjbwcPPSbfS3Ljh19OJQWapfZPUi62OXMDfaJEpj5IkMxcToHg674MYXb2B', '2018-06-04 18:30:33', '2018-06-07 11:19:34'),
	(2, 'Miky', 'zz@zz.com', '$2y$10$HVMbjJf5bBbJ2DVyiyR8S.Xq/0kgRVremZCOP3huWbXpjSQHSTlXG', 'user', 'one.jpg', NULL, NULL, '2018-06-07 11:47:30', '2018-06-07 12:03:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Дамп структуры для таблица bwt7.user_hotels
CREATE TABLE IF NOT EXISTS `user_hotels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Дамп данных таблицы bwt7.user_hotels: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `user_hotels` DISABLE KEYS */;
INSERT INTO `user_hotels` (`id`, `user_id`, `hotel_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2018-06-07 09:30:31', '2018-06-07 09:30:31'),
	(2, 2, 6, '2018-06-07 12:22:52', '2018-06-07 12:22:52'),
	(3, 2, 12, '2018-06-07 12:23:00', '2018-06-07 12:23:00');
/*!40000 ALTER TABLE `user_hotels` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
