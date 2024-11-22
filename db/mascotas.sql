-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2024 a las 17:39:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mascotas_sami27avila`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id_mascota` int(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `tipo` varchar(3) NOT NULL,
  `raza` varchar(300) NOT NULL,
  `sexo` varchar(2) NOT NULL,
  `nombre_del_cliente` varchar(20) NOT NULL,
  `fecha_de_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id_mascota`, `nombre`, `tipo`, `raza`, `sexo`, `nombre_del_cliente`, `fecha_de_nacimiento`) VALUES
(1, 'Aurora', 'P', 'Pastor Aleman', 'M', 'Gabriel Gonzalez', '1981-03-10'),
(2, 'Mermelada', 'G', 'Siames', 'F', 'Amanda Rivero', '2000-11-06'),
(3, 'Fisgon', 'A', 'Pelucilla', 'F', 'Bruno Avila', '1991-01-11'),
(4, 'Mich', 'G', 'Ragdoll', 'M', 'Gabriela Mijares', '2003-07-23'),
(5, 'Spong', 'P', 'Beagle', 'M', 'Chris Sanchez', '1987-04-15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id_mascota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id_mascota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
