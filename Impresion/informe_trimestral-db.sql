-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2019 a las 15:05:01
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `informe_trimestral`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sustancias`
--

CREATE TABLE `sustancias` (
  `id_sustancia` int(4) NOT NULL,
  `sustancia` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `medicion` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` decimal(10,3) DEFAULT NULL,
  `cantidad_comprada` decimal(10,3) DEFAULT NULL,
  `comprada_historial` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `usado_al_final_del_ciclo` decimal(10,3) NOT NULL,
  `fecha_de_compra` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_documento` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `numero_de_proveedor_sedronar` varchar(60) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `sustancias`
--
ALTER TABLE `sustancias`
  ADD PRIMARY KEY (`id_sustancia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `sustancias`
--
ALTER TABLE `sustancias`
  MODIFY `id_sustancia` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
