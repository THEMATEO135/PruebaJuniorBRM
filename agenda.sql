-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2022 a las 01:06:54
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `date` date NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`name`, `phone`, `date`, `address`, `email`) VALUES
('mateo', '3122627182', '2013-07-10', 'calle', 'cefde@mail.es'),
('mateo', '312295957182', '2013-07-10', 'calle', 'cefde@mail.es'),
('CARLOS ANDRES CABRERA SAENZ', '+573122627182', '2022-07-19', 'CALLE 21SUR # 30 - 88 APTO 1504', 'themateo135@gmail.com'),
('CARLOS ANDRES CABRERA SAENZ', '31248481', '2022-07-26', 'CALLE 21SUR # 30 - 88 APTO 1504', 'themateo135@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD UNIQUE KEY `phone` (`phone`) USING HASH,
  ADD UNIQUE KEY `phone_2` (`phone`) USING HASH,
  ADD KEY `phone_3` (`phone`(768));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
