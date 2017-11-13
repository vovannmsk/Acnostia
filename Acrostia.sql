-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 14 2017 г., 00:56
-- Версия сервера: 5.5.50
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Acrostia`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Type_of_work`
--

CREATE TABLE IF NOT EXISTS `Type_of_work` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL COMMENT 'тип работы (логотип, дизайн и проч)'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Type_of_work`
--

INSERT INTO `Type_of_work` (`id`, `type`) VALUES
(1, 'Photography'),
(2, 'Logo design'),
(3, 'Web design');

-- --------------------------------------------------------

--
-- Структура таблицы `Works`
--

CREATE TABLE IF NOT EXISTS `Works` (
  `id` int(11) NOT NULL,
  `Name_of_work` varchar(50) NOT NULL COMMENT 'наименование работы',
  `name_file` varchar(100) NOT NULL COMMENT 'имя файла с работой',
  `id_type` int(11) NOT NULL COMMENT 'id типа работы'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Works`
--

INSERT INTO `Works` (`id`, `Name_of_work`, `name_file`, `id_type`) VALUES
(1, 'Aenean a eeee', 'work1.jpg', 1),
(2, 'Aliquam', 'work2.jpg', 1),
(3, 'Suspendisse libero', 'work3.jpg', 1),
(4, 'Maecenas fringilla', 'work4.jpg', 1),
(5, 'Donec vehicula', 'work5.jpg', 1),
(6, 'Ut et sapien', 'work6.jpg', 1),
(7, 'quis malesuada', 'work7.jpg', 1),
(8, 'Vestibulum ante', 'work8.jpg', 1),
(9, 'VW', 'logo1.png', 2),
(10, 'VW2', 'logo2.jpg', 2),
(11, 'Шар', 'logo3.png', 2),
(12, 'Nike', 'logo4.png', 2),
(13, 'VW3', 'logo5.jpg', 2),
(14, 'BMV', 'logo6.jpg', 2),
(15, 'Dell', 'logo7.jpg', 2),
(16, 'Cisco', 'logo8.png', 2),
(17, 'qua1', 'design1.jpg', 3),
(18, 'qua2', 'design2.jpg', 3),
(19, 'qua3', 'design3.jpg', 3),
(20, 'qua4', 'design4.jpg', 3),
(21, 'qua5', 'design5.jpg', 3),
(22, 'qua6', 'design6.jpg', 3),
(23, 'web1', 'design7.jpg', 3),
(24, 'web2', 'design8.jpg', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Type_of_work`
--
ALTER TABLE `Type_of_work`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Индексы таблицы `Works`
--
ALTER TABLE `Works`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Type_of_work`
--
ALTER TABLE `Type_of_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `Works`
--
ALTER TABLE `Works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
