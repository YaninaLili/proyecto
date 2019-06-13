-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-06-2019 a las 21:54:53
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `username` varchar(32) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `dni` char(8) NOT NULL,
  `sexo` char(4) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `username`, `apellidos`, `dni`, `sexo`, `direccion`, `telefono`, `email`, `password`) VALUES
(1, 'Cielo', 'bagre', 'Uchupe Moreno', '71397325', 'f', 'Lima', '921072712', 'bagre1999@gmail.com', '502ff82f7f1f8218dd41201fe4353687'),
(2, 'Jhordi', 'hueso', 'Huancas Guerrero', '61387542', 'm', 'Lima-Rimac', '921072712', 'hueso@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Gisela', 'pendejo', 'Trebejo Curo', '71397325', 'f', 'Lima', '921072712', 'pendejo@gmail.com', '8bbcd857dcde8c92502f868383810b08'),
(4, 'lufy', 'luffy', 'flores', '45785356', 'm', 'Lima', '921072712', 'lufy@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Omar', 'Rata', 'Flores', '71397325', 'f', 'Lima', '921072712', 'wdewd@rata.com', 'ee49fd837946480cd4e90d33aa6283c5');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
