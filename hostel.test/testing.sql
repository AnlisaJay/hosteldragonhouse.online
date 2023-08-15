-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 14 2023 г., 10:26
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `filename`) VALUES
(1, 'О нас', 'Главный плюс хостела – это серьезный выигрыш в цене по сравнению с любой гостиницей. Хостел будет всегда дешевле отеля, хоть совсем без звезд.', '2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `catalog`
--

CREATE TABLE `catalog` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `catalog`
--

INSERT INTO `catalog` (`id`, `title`, `price`, `filename`) VALUES
(1, 'Номер для одного', 'от 1500р', 'hostel-roomy.jpg'),
(2, 'Номер для двоих', 'от 1000р', '67e7f4d0fa3af2fb8caf015eee8da534.jpg'),
(3, 'Двухместный номер (Люкс)', 'от 2000р', '6c3a83c0716aaefffd2dac016d506ce7.jpg'),
(4, 'Четырёхместный номер', 'от 700р', 'hostel1.jpg'),
(5, 'Двухместный номер (Люкс)', 'от 2500р', 'o41e37te9xbws0m4x2lb3rnt7r2f2yyo.jpg'),
(6, 'Трёхмесный номер', 'от 900р', 'Semeynyiy-3-h-mestnyiy-Stromyi.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `contact`
--

CREATE TABLE `contact` (
  `id` int UNSIGNED NOT NULL,
  `city` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `contact`
--

INSERT INTO `contact` (`id`, `city`, `phone`, `email`, `filename`, `title`, `description`) VALUES
(1, 'Москва', '+79008008080', 'dragon-house@drag.com', 'dragon-house-logo-design-vector-home-logo-design_811406-5.avif', 'Заголовок страниц', 'Описание страницы');

-- --------------------------------------------------------

--
-- Структура таблицы `footer`
--

CREATE TABLE `footer` (
  `id` int UNSIGNED DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `footer`
--

INSERT INTO `footer` (`id`, `title`) VALUES
(NULL, 'Правила '),
(NULL, 'Адреса'),
(NULL, 'Обратная связь');

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE `header` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `header`
--

INSERT INTO `header` (`id`, `name`, `filename`) VALUES
(1, 'Dragon house', '1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int UNSIGNED NOT NULL,
  `login` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE `uslugi` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `price` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `uslugi`
--

INSERT INTO `uslugi` (`id`, `title`, `price`, `filename`) VALUES
(1, 'Кухня', 'Бесплатно', '5.jpg'),
(2, 'Детская комната', 'Бесплатно', '4.jpg'),
(3, 'Компьютерный клуб', 'Бесплатно', '8.jpg'),
(4, 'Библиотека', 'Бесплатно', '6.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `catalog`
--
ALTER TABLE `catalog`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `footer`
--
ALTER TABLE `footer`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- Индексы таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
