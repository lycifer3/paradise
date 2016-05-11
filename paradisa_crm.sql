-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 27 2014 г., 22:16
-- Версия сервера: 5.6.13-log
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `paradisa_crm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_admin`
--

CREATE TABLE IF NOT EXISTS `paradise_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_login` varchar(50) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_email` varchar(70) NOT NULL,
  `admin_activity` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `paradise_admin`
--

INSERT INTO `paradise_admin` (`admin_id`, `admin_login`, `admin_password`, `admin_email`, `admin_activity`) VALUES
(1, 'elena', 'e10adc3949ba59abbe56e057f20f883e', 'elena1808@i.ua', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_bonuses`
--

CREATE TABLE IF NOT EXISTS `paradise_bonuses` (
  `bonus_id` int(11) NOT NULL AUTO_INCREMENT,
  `bonus_date` date NOT NULL,
  `employee_id` int(11) NOT NULL,
  `bonus_reason` varchar(255) NOT NULL,
  `bonus_sum` int(11) NOT NULL,
  `bonus_type` int(11) NOT NULL,
  PRIMARY KEY (`bonus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `paradise_bonuses`
--

INSERT INTO `paradise_bonuses` (`bonus_id`, `bonus_date`, `employee_id`, `bonus_reason`, `bonus_sum`, `bonus_type`) VALUES
(7, '2014-01-27', 10, 'ркрке', 45, 2),
(8, '2014-01-27', 8, 'Пиздато отработал, Красавчик', 500, 1),
(9, '2014-01-27', 10, 'ароп', 200, 1),
(10, '2014-01-21', 8, 'рпкпркпр', 300, 1),
(11, '2014-01-27', 10, 'кркнрек', 300, 2),
(12, '2014-01-27', 8, 'куку', 2000, 2),
(13, '2014-01-28', 8, 'кнкенке', 2000, 2),
(14, '2014-01-28', 10, 'укнкене', 3000, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_documents`
--

CREATE TABLE IF NOT EXISTS `paradise_documents` (
  `document_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_id` int(11) NOT NULL,
  `document_name` varchar(80) NOT NULL,
  `document_file` varchar(80) NOT NULL,
  `document_extension` varchar(10) NOT NULL,
  PRIMARY KEY (`document_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `paradise_documents`
--

INSERT INTO `paradise_documents` (`document_id`, `employee_id`, `document_name`, `document_file`, `document_extension`) VALUES
(1, 8, 'sdfsdfdsf', 'f8656d597d.docx', 'docx'),
(2, 8, 'dsfsdafsdafdsafdsa', 'cb8e3c7f6f.zip', 'zip'),
(3, 8, '34', 'c7ce118351.rar', 'rar');

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_employee`
--

CREATE TABLE IF NOT EXISTS `paradise_employee` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `employee_surname` varchar(50) NOT NULL,
  `employee_name` varchar(50) NOT NULL,
  `employee_middlename` varchar(50) NOT NULL,
  `employee_birthday` date NOT NULL,
  `employee_email` varchar(100) NOT NULL,
  `employee_skype` varchar(50) NOT NULL,
  `employee_phone` varchar(13) NOT NULL,
  `employee_country` varchar(30) NOT NULL,
  `employee_city` varchar(30) NOT NULL,
  `employee_pasport` text NOT NULL,
  `employee_code` varchar(10) NOT NULL,
  `employee_gender` varchar(10) NOT NULL,
  `employee_activity` int(11) NOT NULL,
  `employee_files` varchar(80) NOT NULL,
  `employee_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `paradise_employee`
--

INSERT INTO `paradise_employee` (`employee_id`, `employee_surname`, `employee_name`, `employee_middlename`, `employee_birthday`, `employee_email`, `employee_skype`, `employee_phone`, `employee_country`, `employee_city`, `employee_pasport`, `employee_code`, `employee_gender`, `employee_activity`, `employee_files`, `employee_status`) VALUES
(8, 'Никитенко', 'Максим', 'Викторович', '1986-12-08', 'Lycifer3@ukr.net', 'ferlyci3', '0971161171', 'Украина', 'Киев', 'АН698040', '3366517175', '1', 0, '3d0e98ac27.jpg', 1),
(10, 'Маленко', 'Александр', 'Радионович', '1986-12-15', 'lycifer3.mn@ukr.net', 'bitrop', '0937207009', 'Украина', 'Киев', 'фу3434456', '1212121212', '1', 1, '6d2e298bfa.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_events`
--

CREATE TABLE IF NOT EXISTS `paradise_events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_date` datetime NOT NULL,
  `event_name` varchar(250) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `paradise_events`
--

INSERT INTO `paradise_events` (`event_id`, `event_date`, `event_name`) VALUES
(8, '2014-01-23 00:00:00', 'Сходить в магаз'),
(10, '2014-01-12 00:00:00', 'ghjghjggh'),
(11, '2014-03-08 00:00:00', 'Международный день женщин'),
(12, '2014-01-27 00:00:00', 'ншнегнгне');

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_masters`
--

CREATE TABLE IF NOT EXISTS `paradise_masters` (
  `master_id` int(11) NOT NULL AUTO_INCREMENT,
  `visit_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`master_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `paradise_masters`
--

INSERT INTO `paradise_masters` (`master_id`, `visit_id`, `employee_id`) VALUES
(1, 1, 8),
(2, 2, 8),
(3, 2, 10),
(4, 3, 10),
(5, 4, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_products`
--

CREATE TABLE IF NOT EXISTS `paradise_products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `product_price_purchases` varchar(13) NOT NULL,
  `product_price` varchar(13) NOT NULL,
  `product_count` int(11) NOT NULL,
  `product_gram` varchar(255) NOT NULL,
  `product_activity` varchar(12) NOT NULL,
  `product_photo` varchar(30) NOT NULL,
  `product_date` datetime NOT NULL,
  `product_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `paradise_products`
--

INSERT INTO `paradise_products` (`product_id`, `product_name`, `product_description`, `product_price_purchases`, `product_price`, `product_count`, `product_gram`, `product_activity`, `product_photo`, `product_date`, `product_status`) VALUES
(4, '33333', 'rthytjuthj', '100', '200', 258, '250', '1', 'f4e1f8df88.jpg', '2013-12-26 23:08:09', 1),
(5, 'tytytyty', 'tytytyt', '365', '666', 132, '23', '1', '8eb329b3c8.jpg', '2013-12-25 14:37:47', 0),
(6, 'dsasd222', 'asdasdasd222', '2002', '4562', 402, '1202', '0', 'a3cd4f7e9a.jpg', '2013-12-25 18:07:06', 0),
(7, 'rrrrrr', 'rrrrrrrrrrr', '30', '200', 2, '300', '1', '9520e37d21.jpg', '2014-01-15 19:58:07', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_services`
--

CREATE TABLE IF NOT EXISTS `paradise_services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(100) NOT NULL,
  `service_description` text NOT NULL,
  `service_price` varchar(13) NOT NULL,
  `service_activity` varchar(10) NOT NULL,
  `service_date` datetime NOT NULL,
  `service_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `paradise_services`
--

INSERT INTO `paradise_services` (`service_id`, `service_name`, `service_description`, `service_price`, `service_activity`, `service_date`, `service_status`) VALUES
(4, 'uuuuu', 'uuuuu                               ', '3333', '1', '2013-12-25 14:33:41', 1),
(5, 'xcf', 'ururururowpwepwoepwirpir', '456', '1', '2013-12-26 19:10:21', 1),
(6, 'fgh', 'fghfh           ', '546', '1', '2013-12-25 17:57:50', 0),
(7, 'fgh55555', '                                                                   fgdhdf                                     ', '54', '1', '2013-12-25 17:58:02', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_shopping`
--

CREATE TABLE IF NOT EXISTS `paradise_shopping` (
  `shopping_id` int(11) NOT NULL AUTO_INCREMENT,
  `visit_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `product_count` int(11) NOT NULL DEFAULT '1',
  `shopping_type` int(11) NOT NULL,
  PRIMARY KEY (`shopping_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `paradise_shopping`
--

INSERT INTO `paradise_shopping` (`shopping_id`, `visit_id`, `item_id`, `product_count`, `shopping_type`) VALUES
(1, 1, 7, 5, 1),
(2, 1, 4, 1, 2),
(3, 2, 4, 3, 1),
(4, 2, 7, 2, 1),
(5, 2, 4, 3, 2),
(6, 2, 5, 1, 2),
(7, 3, 4, 1, 1),
(8, 3, 4, 1, 2),
(9, 4, 4, 1, 1),
(10, 4, 7, 1, 1),
(11, 4, 4, 1, 2),
(12, 4, 5, 1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_users`
--

CREATE TABLE IF NOT EXISTS `paradise_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_surname` varchar(50) DEFAULT NULL,
  `user_middlename` varchar(50) DEFAULT NULL,
  `user_email` varchar(40) DEFAULT NULL,
  `user_birthday` date DEFAULT NULL,
  `user_skype` varchar(25) DEFAULT NULL,
  `user_phone` varchar(25) DEFAULT NULL,
  `user_gender` int(11) NOT NULL,
  `user_activity` int(11) NOT NULL DEFAULT '1',
  `user_role` int(11) NOT NULL DEFAULT '0',
  `user_country` varchar(50) DEFAULT NULL,
  `user_city` varchar(50) DEFAULT NULL,
  `user_avatar` varchar(100) DEFAULT NULL,
  `user_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп данных таблицы `paradise_users`
--

INSERT INTO `paradise_users` (`user_id`, `user_name`, `user_surname`, `user_middlename`, `user_email`, `user_birthday`, `user_skype`, `user_phone`, `user_gender`, `user_activity`, `user_role`, `user_country`, `user_city`, `user_avatar`, `user_status`) VALUES
(8, 'Максим', 'Никитенко', 'Викторович', 'lycifer3@gmail.com', '1986-01-09', 'ferlyci3', '0971161171', 1, 1, 0, 'Украина', 'Киев', '9322629bd9.jpg', 1),
(12, 'петя', 'пупкин', 'петрович', 'petya@mail.ru', '1989-01-25', 'petya', '0971161171', 1, 1, 0, 'Украина', 'Киев', '4a52bb3c17.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `paradise_visits`
--

CREATE TABLE IF NOT EXISTS `paradise_visits` (
  `visit_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `visit_discount` varchar(5) NOT NULL,
  `visit_date` datetime NOT NULL,
  PRIMARY KEY (`visit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `paradise_visits`
--

INSERT INTO `paradise_visits` (`visit_id`, `user_id`, `visit_discount`, `visit_date`) VALUES
(1, 8, '2', '2014-01-23 00:00:00'),
(2, 11, '3', '2014-01-23 00:00:00'),
(3, 8, '4', '2014-01-23 00:00:00'),
(4, 8, '3', '2014-01-25 00:00:00');
