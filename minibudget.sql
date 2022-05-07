-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2022 at 06:50 PM
-- Server version: 5.7.33-log
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minibudget`
--

-- --------------------------------------------------------

--
-- Table structure for table `mbudget`
--

CREATE TABLE `mbudget` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `price` float(255,0) NOT NULL,
  `place` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mbudget`
--

INSERT INTO `mbudget` (`id`, `name`, `price`, `place`, `date`, `time`) VALUES
(10, 'На еду', 3000, 'Диане', '2022-04-06', '08:26:38'),
(11, 'На еду', 2000, 'Тёще', '2022-04-06', '08:27:43'),
(12, 'На кредитку', 5000, 'На отпуск', '2022-04-06', '08:28:49'),
(13, 'На кредитку', 154, 'Коммисия', '2022-04-06', '08:29:55'),
(14, 'Apple Music', 124, 'Саше', '2022-04-06', '09:27:01'),
(15, 'Internet', 170, 'Коммунальные', '2022-04-06', '10:27:07'),
(16, 'Moldcell Диана', 132, 'Коммунальные', '2022-04-06', '10:28:14'),
(17, 'Moldcell Макс', 72, 'Коммунальные', '2022-04-06', '10:29:26'),
(18, 'La Placinte', 180, 'Еда вне дома', '2022-04-06', '10:30:35'),
(19, 'Premier Energy', 194, 'Коммунальные', '2022-04-06', '10:31:42'),
(20, 'Netflix', 204, 'Коммунальные', '2022-04-07', '08:27:50'),
(24, 'Vento', 800, 'Машина', '2022-04-08', '13:31:00'),
(25, 'Andys Express', 22, 'Еда вне дома', '2022-04-09', '17:31:00'),
(26, 'Librarius', 222, 'Книга', '2022-04-09', '19:43:00'),
(27, 'Парикмахерская', 100, 'Услуги', '2022-04-09', '16:30:00'),
(28, 'Квартира', 4300, 'Коммунальные', '2022-04-09', '15:21:00'),
(29, 'Отпуск', 4000, 'Отпуск', '2022-04-10', '13:30:00'),
(30, 'На Еду', 700, 'Еда вне дома', '2022-04-10', '13:31:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mbudget`
--
ALTER TABLE `mbudget`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mbudget`
--
ALTER TABLE `mbudget`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
