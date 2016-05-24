-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Час створення: Трв 22 2016 р., 18:41
-- Версія сервера: 5.6.12-log
-- Версія PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `guestbook`
--
CREATE DATABASE IF NOT EXISTS `guestbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `guestbook`;

-- --------------------------------------------------------

--
-- Структура таблиці `guestbook`
--

CREATE TABLE IF NOT EXISTS `guestbook` (
  `gb_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `body` text CHARACTER SET utf8,
  PRIMARY KEY (`gb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Дамп даних таблиці `guestbook`
--

INSERT INTO `guestbook` (`gb_id`, `name`, `email`, `body`) VALUES
(1, 'Константин', '', 'Сегодня праздник у девчат - сегодня будут танцы'),
(2, 'Валерчик', '', 'Ну даете'),
(3, 'User1', 'user@gmkl.com', 'Hello, world!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
