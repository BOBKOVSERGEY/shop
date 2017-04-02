-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 02 2017 г., 11:14
-- Версия сервера: 5.7.16
-- Версия PHP: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `super_mag`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Рубашки', 1, 1),
(2, 'Платья', 5, 1),
(3, 'Футболки', 3, 1),
(4, 'Майки', 4, 1),
(5, 'Сумки', 2, 1),
(6, 'Чемоданы', 6, 1),
(7, 'Брюки', 7, 1),
(8, 'Пиджаки', 8, 1),
(9, 'Галстуки', 9, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(1, 'Рубашка Brave Soul', 1, 12345, 1610, 1, 'Brave Soul', 'rubaska.jpg', 'Рубашка Brave Soul выполнена из хлопкового материала. Модель приталенного кроя. Детали: воротник баттен-даун, планка и манжеты на пуговицах, накладной карман на груди, удлиненная спинка.', 0, 0, 1),
(2, 'Платье A.Karina', 2, 67890, 4600, 1, 'A.Karina', 'platie.jpg', 'Платье A.Karina выполнена из хлопкового материала. Модель приталенного кроя. Детали: воротник баттен-даун, планка и манжеты на пуговицах, накладной карман на груди, удлиненная спинка.', 1, 0, 1),
(3, 'Футболка Modis', 3, 9746, 1000, 0, 'Modis', 'futbolka.jpg', 'Товар Футболка Modis находится на складе Lamoda и может быть доставлен вам в кратчайшие сроки. Узнайте сроки доставки в ваш город.', 0, 0, 1),
(4, 'Майка oodji', 4, 45643, 799, 1, 'oodji', 'maiki.jpg', 'Товар Майка oodji находится на складе Lamoda и может быть доставлен вам в кратчайшие сроки. Узнайте сроки доставки в ваш город.', 0, 1, 1),
(5, 'Сумка Afina', 5, 87311, 4009, 1, 'Afina', 'sumki.jpg', 'Сумка Afina выполнена из натуральной кожи. Детали: застежка на молнию, внутри один карман на молнии и два без застежки, снаружи два кармана на молнии.', 0, 0, 1),
(6, 'Пиджак Topman', 8, 87474, 6770, 1, 'Topman', 'pidjak.jpg', 'Классический пиджак прямого кроя от Topman выполнен из текстиля.Детали: воротник с лацканами, застежка на пуговицы, два внутренних и два внешних кармана, шлица, подкладка.', 1, 1, 1),
(7, 'Чемодан REACH Quiksilver', 6, 84750, 13050, 1, 'Quiksilver', 'chemodan.jpg', 'Чемодан на колесах REACH от Quiksilver выполнен из прочной износостойкой ткани 600D. Детали: два основных отделения по системе «сэндвич» (одно над другим), набивная ручка для переноски в руках, телескопическая ручка, отдельный потайной карман, легкая литая основа, вес – 3,2 кг.', 1, 1, 1),
(8, 'Чиносы Selected Homme', 7, 74935, 465, 1, 'Selected Homme', 'bruki.jpg', 'Чиносы прямого кроя от Selected Homme выполнены из хлопкового текстиля. Детали: застежка на молнию и пуговицу, четыре кармана, шлевки для ремня, ремень в комплекте.', 0, 1, 1),
(10, 'Платье Calvin Klein Jeans', 2, 74653, 981, 1, 'Calvin Klein Jeans', 'platie-2.jpg', 'Товар Платье Calvin Klein Jeans находится на складе Lamoda и может быть доставлен вам в кратчайшие сроки. Узнайте сроки доставки в ваш город.', 1, 0, 1),
(11, 'Платье Topshop', 2, 98745, 7645, 1, 'Topshop', 'platie-3.jpg', 'Товар Платье Topshop находится на складе Lamoda и может быть доставлен вам в кратчайшие сроки. Узнайте сроки доставки в ваш город.', 0, 0, 1),
(12, 'Пиджак Topman', 8, 87364, 4567, 1, 'Topman', 'pidjak-2.jpg', 'Пиджак Topman выполнен из фактурного текстиля в клетку. Модель приталенного кроя. Детали: застежка на пуговицы; воротник с лацканами; два внутренних кармана; легкая подкладка; три внешних кармана.', 1, 1, 1),
(13, 'Чиносы H.I.S', 7, 7394, 199, 1, 'H.I.S', 'bruki-2.jpg', 'Чиносы от H.I.S выполнены из хлопкового материала. Модель зауженного фасона. Детали: застежка на молнию и пуговицу, шлевки под ремень, четыре кармана.', 0, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(1, 'vzlk@yandex.ru', '9670587507', '111111111111111111', 0, '2017-03-29 11:04:59', '{\"1\":1}', 1),
(2, 'Сергей', '9266668737', 'wwwwwwwwwwwwwwwwwww', 0, '2017-03-29 11:06:23', '{\"5\":1}', 1),
(3, 'Бобков Сергей', '9670587507', 'dddddddddddddd', 3, '2017-03-29 11:09:01', '{\"12\":1}', 1),
(4, 'Сергей', '9266668737', 'wwwwwwwwwwww', 0, '2017-03-29 11:16:54', '{\"12\":1}', 1),
(5, 'Сергей', '9266668737', 'ccccccccccccccccccccccccc', 0, '2017-03-29 12:04:37', '{\"12\":1}', 1),
(6, 'Сергей', '9670587507', 'eeeeeeeeeeeeeeee', 0, '2017-03-30 05:06:00', '{\"12\":1}', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Николай', 'sergey_bobkov@inbox.ru', '123456', 'admin'),
(2, 'Бобков Сергей', 'vs@vs.ru', '1234567', ''),
(3, 'Бобков Сергей', 'vs@vss.ru', '1234567', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
