-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2016 a las 04:46:55
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `afa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociacion`
--

CREATE TABLE IF NOT EXISTS `asociacion` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `region` varchar(50) NOT NULL,
  `comuna` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE IF NOT EXISTS `club` (
  `id` int(11) NOT NULL,
  `idlogin` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `cant_series` int(11) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `rut_presidente` varchar(10) NOT NULL,
  `nombre_presidente` varchar(50) NOT NULL,
  `direccion_presidente` varchar(90) NOT NULL,
  `correo_presidente` varchar(90) NOT NULL,
  `fono_presidente` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comite`
--

CREATE TABLE IF NOT EXISTS `comite` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `fono` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE IF NOT EXISTS `fechas` (
`id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_club_local` int(11) NOT NULL,
  `id_club_visita` int(11) NOT NULL,
  `rut_turno` varchar(10) NOT NULL,
  `id_maquina` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE IF NOT EXISTS `jugador` (
  `rut` varchar(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `fono` int(11) NOT NULL,
  `huella` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina`
--

CREATE TABLE IF NOT EXISTS `maquina` (
`id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recup_contraseña`
--

CREATE TABLE IF NOT EXISTS `recup_contraseña` (
`id_recup` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `pregunta_1` varchar(100) NOT NULL,
  `pregunta_2` varchar(100) NOT NULL,
  `pregunta_3` varchar(100) NOT NULL,
  `respuesta_1` varchar(100) NOT NULL,
  `respuesta_2` varchar(100) NOT NULL,
  `respuesta_3` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reg_login`
--

CREATE TABLE IF NOT EXISTS `reg_login` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contraseña` varchar(30) NOT NULL,
  `tipo_usr` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sancion`
--

CREATE TABLE IF NOT EXISTS `sancion` (
  `id` int(11) NOT NULL,
  `rut_jugador` int(11) NOT NULL,
  `sancion` varchar(100) NOT NULL,
  `cantidad_de_fechas` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usr`
--

CREATE TABLE IF NOT EXISTS `tipo_usr` (
`id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traspaso`
--

CREATE TABLE IF NOT EXISTS `traspaso` (
`id` int(11) NOT NULL,
  `id_club_solicitante` int(11) NOT NULL,
  `activo/inactivo` tinyint(1) NOT NULL,
  `rut_jugador` varchar(10) NOT NULL,
  `id_club_destino` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE IF NOT EXISTS `turno` (
  `rut` varchar(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(90) NOT NULL,
  `huella` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`rut`, `nombres`, `apellidos`, `direccion`, `telefono`, `correo`, `huella`) VALUES
('10903059-7', 'Daniel Gerardo', 'Orellana Inostroza', 'Avenida Kennedy #1155', 222222222, 'dasdsa@ff.cl', ''),
('18650761-4', 'Fabian Maximiliano', 'Orellana Troncoso', 'Bueras #40', 93127002, 'dasdsa@ff.cl', ''),
('18658429-5', 'Fabian Alejandro', 'Madrid Diaz', 'Cuevas #73', 22222222, 'fmdgb@gmail.com', ''),
('18678681-5', 'Jaime Fernando', 'Salvo Diaz', 'Ines de Suarez #1482 villa el conquistador', 63554209, 'scram.jsd@gmail.com', ''),
('4249580-8', 'Jose Juan', 'Troncoso Moraga', 'Avenida Kennedy #1155', 83926482, 'jj,troncoso@gmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociacion`
--
ALTER TABLE `asociacion`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comite`
--
ALTER TABLE `comite`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jugador`
--
ALTER TABLE `jugador`
 ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `maquina`
--
ALTER TABLE `maquina`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recup_contraseña`
--
ALTER TABLE `recup_contraseña`
 ADD PRIMARY KEY (`id_recup`);

--
-- Indices de la tabla `reg_login`
--
ALTER TABLE `reg_login`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sancion`
--
ALTER TABLE `sancion`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usr`
--
ALTER TABLE `tipo_usr`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `traspaso`
--
ALTER TABLE `traspaso`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
 ADD PRIMARY KEY (`rut`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `maquina`
--
ALTER TABLE `maquina`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `recup_contraseña`
--
ALTER TABLE `recup_contraseña`
MODIFY `id_recup` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_usr`
--
ALTER TABLE `tipo_usr`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `traspaso`
--
ALTER TABLE `traspaso`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
