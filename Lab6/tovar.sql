-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3307
-- Час створення: Гру 15 2022 р., 02:27
-- Версія сервера: 8.0.30
-- Версія PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `lab12`
--

-- --------------------------------------------------------

--
-- Структура таблиці `tovar`
--

CREATE TABLE `tovar` (
  `id` int NOT NULL,
  `name` varchar(20) NOT NULL,
  `cost` int NOT NULL,
  `kol` int NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `cost`, `kol`, `date`) VALUES
(1, 'Xліб', 24, 100, '2022-10-21'),
(2, 'Сир', 50, 30, '2022-11-29'),
(3, 'Вода', 30, 50, '2022-12-01'),
(4, 'Ковбаса', 55, 32, '2022-12-02'),
(5, 'Масло', 35, 40, '2022-11-28'),
(6, 'Чай', 43, 110, '2022-11-23'),
(7, 'Кава', 45, 30, '2022-11-28'),
(8, 'Піца', 23, 12, '2022-12-01'),
(9, 'Яблука', 10, 55, '2022-11-30'),
(10, 'Апельсини', 23, 45, '2022-11-28'),
(11, 'Мандарини', 20, 45, '2022-11-28');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
