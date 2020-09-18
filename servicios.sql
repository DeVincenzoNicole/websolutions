-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2017 a las 06:30:07
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
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `servicio` varchar(20) NOT NULL,
  `precio` int(4) NOT NULL,
  `total` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `servicio`, `precio`, `total`) VALUES
(1, 'autoadm_no', 500, 0),
(2, 'autoadm_si', 1500, 0),
(7, 'hosting_no', 0, 0),
(8, 'hosting_si', 1000, 0),
(10, 'onepage', 200, 0),
(11, 'pag_10a15', 500, 0),
(12, 'pag_15', 600, 0),
(13, 'pag_4a6', 300, 0),
(14, 'pag_7a10', 400, 0),
(25, 'disenio_si', 1000, 0),
(26, 'disenio_no', 0, 0),
(27, 'mantenimiento_si', 600, 0),
(28, 'mantenimiento_no', 0, 0),
(29, 'tienda_si', 1500, 0),
(30, 'tienda_no', 0, 0),
(31, 'formulario_si', 200, 0),
(32, 'formulario_no', 0, 0),
(33, 'galimg_si', 300, 0),
(34, 'galimg_no', 0, 0),
(35, 'galvideos_si', 600, 0),
(36, 'redes_si', 200, 0),
(37, 'redes_no', 0, 0),
(38, 'galvideos_no', 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
