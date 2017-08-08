-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 08 2017 г., 22:49
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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
  `size` int(11) NOT NULL,
  `src` varchar(510) NOT NULL,
  `image_src` varchar(510) NOT NULL,
  `name_file` varchar(255) NOT NULL,
  `fake_download` int(11) NOT NULL DEFAULT '0',
  `fake_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `id_user`, `data`, `count_download`, `count_install`, `ip_download`, `size`, `src`, `image_src`, `name_file`, `fake_download`, `fake_date`) VALUES
(1, 18, '2017-08-08 18:42:29', 33, 3, '', 123, 'uploasd/ziper.zip', 'images_silka', '', 722, '0000-00-00 00:00:00'),
(2, 18, '2017-08-08 07:59:52', 44, 4, '', 12312, 'uploasd/ziper.zip', 'ssilka_44_images', '', 123, '0000-00-00 00:00:00'),
(3, 18, '2017-08-08 07:59:53', 333, 33, '', 345, 'ssilka4', 'images_silka4', '', 234, '0000-00-00 00:00:00'),
(4, 18, '2017-08-08 18:59:14', 444, 44, '', 543, 'ssilka_444', 'ssilka_444_images4', 'Имя файла', 345, '0000-00-00 00:00:00');

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unique` float DEFAULT NULL,
  `install_amigo` float DEFAULT NULL,
  `shive` float DEFAULT NULL,
  `amigo_shive` float DEFAULT NULL,
  `count_install_full` int(11) DEFAULT NULL,
  `count_install__amigo_full` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `rates`
--

INSERT INTO `rates` (`id`, `unique`, `install_amigo`, `shive`, `amigo_shive`, `count_install_full`, `count_install__amigo_full`) VALUES
(3, NULL, NULL, 4, NULL, NULL, NULL);

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
