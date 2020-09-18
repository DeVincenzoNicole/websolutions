-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2017 a las 06:28:54
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web_solutions`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `telefono` int(12) NOT NULL,
  `motivo` varchar(35) NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`nombre`, `apellido`, `correo`, `telefono`, `motivo`, `mensaje`) VALUES
('Elba', 'Espinola', 'eespinola@hotmail.com', 587845184, '', 'Hola, este es un mensaje para Web Solutions.'),
('Elsa', 'Flores', 'elsa@html.com', 1548794612, 'Consulta', 'Buenas noches, esta es una consulta para Web Solutions.'),
('Juana', 'Ramirez', 'holasoyjuana@sdisajdad', 2147483647, 'Presupuesto BÃ¡sico', 'Hola como estas!?'),
('Lola', 'Carpentieri', 'lolita@gmail.com', 1687461481, 'Presupuesto Ava', 'Solicito presupuesto.'),
('Pitu', 'De Vincenzo', 'pitudevinc@gmail.com', 2147483647, 'Consulta', 'Hola, esto es una prueba 05/12'),
('Sol', 'DV', 'soldv@gm.com', 2147483647, 'Presupuesto Avanzado', 'Prueba.'),
('Wanda', 'De Vincenzo', 'wan@hotmail.com', 1564876947, '', 'Hola, este es un mensaje para Web Solutions.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
