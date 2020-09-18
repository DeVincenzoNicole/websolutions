-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2017 a las 06:29:50
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
-- Estructura de tabla para la tabla `presup_solicitado`
--

CREATE TABLE `presup_solicitado` (
  `id_presup_solicitado` int(11) NOT NULL,
  `nombre_cliente` varchar(60) NOT NULL,
  `correo_cliente` varchar(60) NOT NULL,
  `disenio` varchar(20) NOT NULL,
  `mantenimiento` varchar(20) DEFAULT NULL,
  `tienda` varchar(20) NOT NULL,
  `autoadministrable` varchar(20) NOT NULL,
  `paginas` varchar(20) NOT NULL,
  `formulario` varchar(20) NOT NULL,
  `galeria_imagenes` varchar(20) NOT NULL,
  `galeria_videos` varchar(20) NOT NULL,
  `redes` varchar(20) NOT NULL,
  `hosting` varchar(20) NOT NULL,
  `total` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `presup_solicitado`
--

INSERT INTO `presup_solicitado` (`id_presup_solicitado`, `nombre_cliente`, `correo_cliente`, `disenio`, `mantenimiento`, `tienda`, `autoadministrable`, `paginas`, `formulario`, `galeria_imagenes`, `galeria_videos`, `redes`, `hosting`, `total`) VALUES
(11, 'niqui', 'probando', 'disenio_si', 'mantenimiento_si', 'tienda_no', 'autoadm_si', 'pag_15', 'formulario_no', 'galimg_si', 'galvideos_si', 'redes_no', 'hosting_no', 4600),
(12, 'Elba', 'Espinola@html.com', 'disenio_no', 'mantenimiento_si', 'tienda_no', 'autoadm_no', 'pag_4a6', 'formulario_no', 'galimg_no', 'galvideos_no', 'redes_si', 'hosting_no', 1600),
(13, 'Horacio', 'dsdiasd@hotmail.c', 'disenio_si', 'mantenimiento_no', 'tienda_no', 'autoadm_no', 'pag_7a10', 'formulario_no', 'galimg_si', 'galvideos_no', 'redes_si', 'hosting_si', 3400),
(14, 'Jana', 'janitajd@fjksd.com', 'disenio_si', 'mantenimiento_no', 'tienda_no', 'autoadm_no', 'pag_7a10', 'formulario_no', 'galimg_no', 'galvideos_no', 'redes_no', 'hosting_no', 1900),
(15, 'Wanda', 'devincenzo@html.com', 'disenio_si', 'mantenimiento_si', 'tienda_si', 'autoadm_si', 'onepage', 'formulario_si', 'galimg_si', 'galvideos_si', 'redes_si', 'hosting_si', 7100),
(16, 'Probando Redireccionamiento', 'prueba@html.com', 'disenio_si', 'mantenimiento_si', 'tienda_no', 'autoadm_no', 'pag_15', 'formulario_si', 'galimg_si', 'galvideos_no', 'redes_si', 'hosting_si', 4400),
(17, 'Probando Redireccionamiento', 'prueba@html.com', 'disenio_si', 'mantenimiento_si', 'tienda_no', 'autoadm_no', 'pag_15', 'formulario_si', 'galimg_si', 'galvideos_no', 'redes_si', 'hosting_si', 4400),
(18, 'Probando Redireccionamiento', 'prueba@html.com', 'disenio_si', 'mantenimiento_si', 'tienda_no', 'autoadm_no', 'pag_15', 'formulario_si', 'galimg_si', 'galvideos_no', 'redes_si', 'hosting_si', 4400),
(19, 'Probando Redireccionamiento', 'prueba@html.com', 'disenio_si', 'mantenimiento_si', 'tienda_no', 'autoadm_no', 'pag_15', 'formulario_si', 'galimg_si', 'galvideos_no', 'redes_si', 'hosting_si', 4400),
(20, 'Prueba', 'hola@html.com', 'disenio_no', 'mantenimiento_no', 'tienda_si', 'autoadm_si', 'pag_10a15', 'formulario_no', 'galimg_no', 'galvideos_no', 'redes_no', 'hosting_si', 4500);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `presup_solicitado`
--
ALTER TABLE `presup_solicitado`
  ADD PRIMARY KEY (`id_presup_solicitado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `presup_solicitado`
--
ALTER TABLE `presup_solicitado`
  MODIFY `id_presup_solicitado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
