-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Мар 21 2021 г., 05:05
-- Версия сервера: 5.5.64-MariaDB
-- Версия PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `YKTPLACES`
--

-- --------------------------------------------------------

--
-- Структура таблицы `OBJECT`
--

CREATE TABLE IF NOT EXISTS `OBJECT` (
  `ID` int(11) NOT NULL,
  `NAME` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `DESCRIPTION` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PHOTO` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`PHOTO`)),
  `FILES` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`FILES`)),
  `LAT` double NOT NULL,
  `LNG` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `OBJECT`
--

INSERT INTO `OBJECT` (`ID`, `NAME`, `DESCRIPTION`, `PHOTO`, `FILES`, `LAT`, `LNG`) VALUES
(3, 'Братская могила политических ссыльных, ставших жертвой «Монастыревской трагедии» 22 марта 1889 г. – С.Я. Гурвич, Я. Ноткина, Г. Шура, С. Пик, убитых во время протеста, А.Г. Гаусмана и М.М. Коган-Бернштейна, повешенных по «суду» 7 августа 1889 г.', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 62.034482696715386, 129.69401447800936),
(6, 'Дом, в котором жил Аммосов Максим Кирович – партийный и государственный деятель республики', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 62.13748269671539, 129.69401447800936),
(7, 'Братская могила борцов за власть, погибших в гражданской войне', '$description', '{"photos":123}', '{"photos":123}', 62.08748269671539, 129.70401547800935),
(9, 'Танк - памятник воинам-землякам, погибшим в годы Великой Отечественной войны (1941-1945)', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 62.14748269671539, 129.69401447800936),
(10, 'Братская могила 47 командиров и сотрудников штаба командующего войсками Якутской губернии и Северного края Н.А. Калаидарашвили и Второго Северного отряда имени Дедушки Калаидарашвили, павших в 1922 г.', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 62.14748269671539, 129.69401447400935),
(11, 'Братская могила 49 борцов за власть Советов, павших в Техтюрском, Кильдемском и Тулагинском боях с белобандитами в июне 1922 г.', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 62.14748269671539, 129.69301447400935),
(12, 'Могила Жиркова Марка Николаевича (1892-1951) – первого якутского профессионального композитора, заслуженного деятеля искусства РСФСР и ЯАССР', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 62.14748269671539, 129.70301447400934),
(13, 'qwsdcqwdc', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 62.15748269671539, 129.70301447400934),
(14, 'qwsdcqwdc', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 62.14746726967154, 129.7031147400934),
(15, 'qwsdcqwdc', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 62.13448269671539, 129.69401447800936),
(16, 'qwsdcqwdc', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 61.14748269671539, 129.69401447800936),
(17, 'qwsdcqwdc', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 61.64748269671539, 129.69401447800936),
(18, 'qwsdcqwdc', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 61.74748269671539, 129.69401447800936),
(19, 'qwsdcqwdc', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 61.79748269671539, 129.71401447800935),
(20, 'qwsdcqwdc', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 61.79748269671539, 129.63401447800936),
(21, 'qwsdcqwdc', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 61.79748269671539, 129.66401447800936),
(22, 'qwsdcqwdc', 'qsdcqwdc', '{"qwdcqwdcq":123}', '{"qwdcqwdcq":123}', 61.79748269671539, 129.76401447800936);

-- --------------------------------------------------------

--
-- Структура таблицы `USER`
--

CREATE TABLE IF NOT EXISTS `USER` (
  `ID` int(11) NOT NULL,
  `LOGIN` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `HASH` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `SALT` tinytext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `USER`
--

INSERT INTO `USER` (`ID`, `LOGIN`, `HASH`, `SALT`) VALUES
(21, 'danil.zelenskiy.2005@mail.ru', '853a87a51dd104f38c1fe53e73e9e067e2fe6b9cb278eb7bbc769e2f4a7b840083f95ae979755e1b6811d35c14b067fbbedf058eda600faa25ad824f27c21924', 'f9J10Tscop'),
(35, 'lol@lol.lol', '4d0dd4337b339dd8376bfc47474c800c7b04cd40355b0785e4141a28e1154be06e5246e18aa0bffeb0cca194b53a5691499c3e421cd4d7a4dc20ab00b2555bb8', 'Za3JMCDbAQ'),
(36, 'rgfdfkgj@mail.ru', 'a7b7c59de08fc493d325b50872ed87e62da987c3d56c2623c674b30f215af88d31842a2da0a14e6181af5acb53d8ec88f3768b137391a1e8d77803c357e97186', 'I9g5oDjcxH'),
(37, 'bykovvadim18@gmail.com', '0c86a62afeac7cc494640eba138b63eb07c45237b3aef26a589cafed6a564fa6bf918651349b6485755d970a01748747f87fa762afdc0bdf442c07905042d5dc', 'vavuX4m6Wf');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `OBJECT`
--
ALTER TABLE `OBJECT`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `OBJECT`
--
ALTER TABLE `OBJECT`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT для таблицы `USER`
--
ALTER TABLE `USER`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
