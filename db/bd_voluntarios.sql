-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 18:13:29
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_voluntarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_eventos`
--

CREATE TABLE `tbl_eventos` (
  `id_evento` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_eventos`
--

INSERT INTO `tbl_eventos` (`id_evento`, `nombre`, `descripcion`) VALUES
(1, 'Recogida de alimentos', 'Recogida de alimentos para la gente con bajos recursos'),
(2, 'Cuidado de ancianos', 'Se trata de cuidar a gente mayor con movilidad reducida'),
(3, 'Cuidado de niños', 'Cuidar de niños cuyos padres no se pueden hacer cargo'),
(4, 'Limpieza de playas', 'Recoger basura de playas para evitar la contaminación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inscripcion`
--

CREATE TABLE `tbl_inscripcion` (
  `id` int(11) NOT NULL,
  `id_voluntario` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_inscripcion`
--

INSERT INTO `tbl_inscripcion` (`id`, `id_voluntario`, `id_evento`) VALUES
(23, 1, 1),
(24, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_voluntarios`
--

CREATE TABLE `tbl_voluntarios` (
  `id_voluntario` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `contraseña` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_voluntarios`
--

INSERT INTO `tbl_voluntarios` (`id_voluntario`, `email`, `nombre`, `apellido`, `contraseña`) VALUES
(1, 'pol@gmail.com', 'Pol', 'Garcia', '1fa3356b1eb65f144a367ff8560cb406');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_eventos`
--
ALTER TABLE `tbl_eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `tbl_inscripcion`
--
ALTER TABLE `tbl_inscripcion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `volun_inscrip_fk` (`id_voluntario`),
  ADD KEY `voliun_evento_fk` (`id_evento`);

--
-- Indices de la tabla `tbl_voluntarios`
--
ALTER TABLE `tbl_voluntarios`
  ADD PRIMARY KEY (`id_voluntario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_eventos`
--
ALTER TABLE `tbl_eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_inscripcion`
--
ALTER TABLE `tbl_inscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tbl_voluntarios`
--
ALTER TABLE `tbl_voluntarios`
  MODIFY `id_voluntario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_inscripcion`
--
ALTER TABLE `tbl_inscripcion`
  ADD CONSTRAINT `voliun_evento_fk` FOREIGN KEY (`id_evento`) REFERENCES `tbl_eventos` (`id_evento`),
  ADD CONSTRAINT `volun_inscrip_fk` FOREIGN KEY (`id_voluntario`) REFERENCES `tbl_voluntarios` (`id_voluntario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
