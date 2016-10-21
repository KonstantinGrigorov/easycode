-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Жов 21 2016 р., 10:03
-- Версія сервера: 5.6.12-log
-- Версія PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `script`
--
CREATE DATABASE IF NOT EXISTS `script` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `script`;

-- --------------------------------------------------------

--
-- Структура таблиці `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` text NOT NULL,
  PRIMARY KEY (`department_id`),
  KEY `department_id` (`department_id`),
  KEY `department_id_2` (`department_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп даних таблиці `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'technical'),
(2, 'analytical'),
(3, 'marketing');

-- --------------------------------------------------------

--
-- Структура таблиці `paymenttype`
--

CREATE TABLE IF NOT EXISTS `paymenttype` (
  `paymenttype_id` int(11) NOT NULL AUTO_INCREMENT,
  `paymenttype_name` varchar(50) NOT NULL,
  PRIMARY KEY (`paymenttype_id`),
  KEY `paymenttype_id` (`paymenttype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп даних таблиці `paymenttype`
--

INSERT INTO `paymenttype` (`paymenttype_id`, `paymenttype_name`) VALUES
(1, 'per_month'),
(2, 'per_hour');

-- --------------------------------------------------------

--
-- Структура таблиці `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) NOT NULL,
  PRIMARY KEY (`position_id`),
  KEY `position_id` (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп даних таблиці `position`
--

INSERT INTO `position` (`position_id`, `position_name`) VALUES
(1, 'employee'),
(2, 'top-manager');

-- --------------------------------------------------------

--
-- Структура таблиці `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
  `rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `hour_rate` smallint(6) NOT NULL,
  PRIMARY KEY (`rate_id`),
  KEY `rate_id` (`rate_id`),
  KEY `rate_id_2` (`rate_id`),
  KEY `rate_id_3` (`rate_id`),
  KEY `rate_id_4` (`rate_id`),
  KEY `rate_id_5` (`rate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп даних таблиці `rate`
--

INSERT INTO `rate` (`rate_id`, `hour_rate`) VALUES
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(4, 'admin1', 'admin1');

-- --------------------------------------------------------

--
-- Структура таблиці `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `worker_id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `position_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `paymenttype_id` int(11) NOT NULL,
  PRIMARY KEY (`worker_id`),
  KEY `department_id` (`department_id`),
  KEY `paymenttype_id` (`paymenttype_id`),
  KEY `position_id` (`position_id`),
  KEY `worker_id` (`worker_id`),
  KEY `worker_id_2` (`worker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп даних таблиці `worker`
--

INSERT INTO `worker` (`worker_id`, `fio`, `birthdate`, `position_id`, `department_id`, `paymenttype_id`) VALUES
(3, 'Сергеев Сергей Сергеевич', '1970-04-05', 1, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `workerhours`
--

CREATE TABLE IF NOT EXISTS `workerhours` (
  `worker_id` int(11) NOT NULL,
  `work_date` date NOT NULL,
  `hours_count` smallint(6) NOT NULL,
  `worker_rate_id` int(11) NOT NULL,
  KEY `worker_id` (`worker_id`),
  KEY `worker_rate_id` (`worker_rate_id`),
  KEY `worker_id_2` (`worker_id`),
  KEY `worker_rate_id_2` (`worker_rate_id`),
  KEY `worker_rate_id_3` (`worker_rate_id`),
  KEY `worker_rate_id_4` (`worker_rate_id`),
  KEY `worker_rate_id_5` (`worker_rate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `worker_ibfk_2` FOREIGN KEY (`paymenttype_id`) REFERENCES `paymenttype` (`paymenttype_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `worker_ibfk_3` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Обмеження зовнішнього ключа таблиці `workerhours`
--
ALTER TABLE `workerhours`
  ADD CONSTRAINT `workerhours_ibfk_2` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `workerhours_ibfk_3` FOREIGN KEY (`worker_rate_id`) REFERENCES `rate` (`rate_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
