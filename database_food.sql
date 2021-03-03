-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 19 2020 г., 20:56
-- Версия сервера: 10.4.16-MariaDB
-- Версия PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `database_food`
--

-- --------------------------------------------------------

--
-- Структура таблицы `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `phone_number` int(15) NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `email`, `phone_number`, `city_name`, `password`) VALUES
(1, 'qwer1234', 'ig@gmail.com', 2147483647, 'Алматы', 'qwer1234'),
(2, 'qwer1234', 'iq@gmail.com', 2147483647, 'Астана', 'qwer1234');

-- --------------------------------------------------------

--
-- Структура таблицы `type_food`
--

CREATE TABLE `type_food` (
  `type_food_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `food_name` varchar(225) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type_food_name` varchar(225) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `type_food_price` decimal(10,0) DEFAULT NULL,
  `date_of_insert` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Дамп данных таблицы `type_food`
--

INSERT INTO `type_food` (`type_food_id`, `restaurant_id`, `city_name`, `food_name`, `type_food_name`, `type_food_price`, `date_of_insert`) VALUES
(8, 0, ' ', 'Донер', 'Жека Донер', '500', '2020-11-20');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Индексы таблицы `type_food`
--
ALTER TABLE `type_food`
  ADD PRIMARY KEY (`type_food_id`),
  ADD UNIQUE KEY `restaurant_id` (`restaurant_id`,`type_food_name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `type_food`
--
ALTER TABLE `type_food`
  MODIFY `type_food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
