-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Час створення: Жов 07 2018 р., 02:48
-- Версія сервера: 5.7.23
-- Версія PHP: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `vz_shop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_img`) VALUES
(1, 'Berry cupcakes', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/1b173b601ebe7f0851cb66100457d553/5C5E0B56/t51.2885-15/e35/36765456_2113977902207897_8145202878961680384_n.jpg'),
(2, 'Alcohol cupcakes\r\n', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/4ba9e8debec44d47976571799c20f436/5C5251E9/t51.2885-15/e35/36807649_650619978645379_7321468812044271616_n.jpg'),
(3, 'Berry cakes\r\n', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/fcc97feb7046884cd6d85ca53b42059c/5C5809DE/t51.2885-15/e35/32824390_589489604756683_8266340876767199232_n.jpg'),
(4, 'Alcohol cakes\r\n', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/0f236197e3b0352d4d0d5ea1391390a2/5C3FF987/t51.2885-15/e35/31086534_198492197543865_2006967934575968256_n.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` decimal(8,2) NOT NULL,
  `p_desc` text NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `cat_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_price`, `p_desc`, `p_image`, `cat_id`) VALUES
(1, 'berry cupcake #1', '50.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/6ee341a2acacdeeca426bafae05b7270/5C5697EF/t51.2885-15/e35/37938784_1076788639155745_7105385786157039616_n.jpg', '1'),
(2, 'berry cupcake #2', '50.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/bd3cb742e4f2bc0d2904051ed649d0a4/5C47FE90/t51.2885-15/e35/41367071_276051713230065_2124867842851176635_n.jpg', '1'),
(3, 'berry cupcake #3', '50.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/f2a52a54414c8772e739cb9e07ff7be6/5C51341F/t51.2885-15/e35/40026685_141105233496408_1883945158375600844_n.jpg', '1'),
(4, 'alcohol cupcake#1', '50.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/90fcfab23c97e3111b13dccb475e919a/5C5A83E4/t51.2885-15/e35/41860927_257936584926869_7395366757003089025_n.jpg', '2'),
(5, 'alcohol cupcake #2', '50.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/92c1cfdd680069540c67ae05641c3ec9/5C3CF4D7/t51.2885-15/e35/29715578_568712006840434_5649413407779061760_n.jpg', '2'),
(6, 'alcohol cupcake #3', '50.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/c6e62142807e18d7a23bf212d9cd0abb/5C3C8183/t51.2885-15/e35/35999190_197261494317488_5588471841938210816_n.jpg', '2'),
(7, 'berry cake #1', '100.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/ddd5e707937ce24679f2d82356ab6be7/5C4ADA2D/t51.2885-15/e35/30086444_176122749710124_4749758552589991936_n.jpg', '3'),
(8, 'berry cake #2', '100.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/e9210380ab0d54a360a60211904fd3f4/5C3EEB02/t51.2885-15/e35/33178007_235489693890676_5317526832252190720_n.jpg', '3'),
(9, 'berry cake #3', '100.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/1d3b0a6f466d4ce5cebef7d4ce173d4a/5C415F12/t51.2885-15/e35/36086100_2194984630736195_458820601633570816_n.jpg', '3'),
(10, 'alcohol cake #1', '150.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/6ff09f364280a1f2d4bb48c6dedcc5ef/5C41E57B/t51.2885-15/e35/22708641_622971918091949_7059065942554181632_n.jpg', '4'),
(11, 'alcohol cake #2', '150.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/dea49096cbb1b5cf68551f2bdcba36bc/5C54E4DE/t51.2885-15/e35/37803489_505606659897517_8560127106648899584_n.jpg', '4'),
(12, 'alcohol cake #3', '150.00', 'desc', 'https://instagram.fiev11-1.fna.fbcdn.net/vp/f85a2286fc89d50d75c3e41ccc4710de/5C5B59CA/t51.2885-15/e35/26071769_344433386030116_2608659850216865792_n.jpg', '4');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(18, 'qwerty', 'd8578edf8458ce06fbc5bb76a58c5ca4');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Індекси таблиці `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
