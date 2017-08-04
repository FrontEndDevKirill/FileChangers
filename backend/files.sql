-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 04 2017 г., 21:06
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `files`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bonus`
--

CREATE TABLE IF NOT EXISTS `bonus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `data` time NOT NULL DEFAULT '00:00:00',
  `bonus` float NOT NULL DEFAULT '1',
  `shave` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `bonus`
--

INSERT INTO `bonus` (`id`, `id_user`, `data`, `bonus`, `shave`) VALUES
(2, 18, '00:00:00', 10, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `cash`
--

CREATE TABLE IF NOT EXISTS `cash` (
  `id` int(11) NOT NULL,
  `login_user` varchar(255) NOT NULL,
  `purse_user` varchar(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `cash` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `count_download` int(11) NOT NULL,
  `count_install` int(11) NOT NULL,
  `ip_download` tinytext NOT NULL,
  `src` varchar(510) NOT NULL,
  `image_src` varchar(510) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `id_user`, `data`, `count_download`, `count_install`, `ip_download`, `src`, `image_src`) VALUES
(1, 18, '2017-08-03 21:00:00', 33, 3, '', 'ssilka', 'images_silka'),
(2, 18, '2017-08-01 21:00:00', 44, 4, '', 'ssilka_44', 'ssilka_44_images'),
(3, 18, '2017-08-04 11:47:35', 333, 33, '', 'ssilka4', 'images_silka4'),
(4, 18, '2017-08-04 11:47:40', 444, 44, '', 'ssilka_444', 'ssilka_444_images4');

-- --------------------------------------------------------

--
-- Структура таблицы `Payments`
--

CREATE TABLE IF NOT EXISTS `Payments` (
  `login_user` varchar(255) NOT NULL,
  `purse_user` varchar(255) NOT NULL,
  `system_payout` varchar(255) NOT NULL,
  `cash` int(11) NOT NULL,
  `data` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `rates`
--

CREATE TABLE IF NOT EXISTS `rates` (
  `unique` float NOT NULL,
  `install_amigo` float NOT NULL,
  `shive` float NOT NULL,
  `amigo_shive` float NOT NULL,
  `count_install_full` int(11) NOT NULL,
  `count_install__amigo_full` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `purse` int(40) NOT NULL,
  `pas` varchar(255) NOT NULL,
  `balans` int(11) NOT NULL,
  `profit_install` int(11) NOT NULL,
  `profit_advertisements` int(11) NOT NULL,
  `shive` float NOT NULL,
  `amigo_shive` float NOT NULL,
  `count_install_unique` int(11) NOT NULL,
  `count_install_amigo` int(11) NOT NULL,
  `last_payout` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `login`, `email`, `purse`, `pas`, `balans`, `profit_install`, `profit_advertisements`, `shive`, `amigo_shive`, `count_install_unique`, `count_install_amigo`, `last_payout`) VALUES
(18, '', 'sergey', 'sergey@sergey.ru', 9379992, '$2y$10$UaBGd1U4y32V9jpBixIhVeNG1UJCKlYkUj8u5SAynRZ9anGYfVzfu', 0, 0, 0, 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
