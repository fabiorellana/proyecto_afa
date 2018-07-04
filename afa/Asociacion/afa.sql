-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2016 a las 20:42:30
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `afa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociacion`
--

CREATE TABLE `asociacion` (
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

CREATE TABLE `club` (
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

--
-- Volcado de datos para la tabla `club`
--

INSERT INTO `club` (`id`, `idlogin`, `nombre`, `cant_series`, `direccion`, `rut_presidente`, `nombre_presidente`, `direccion_presidente`, `correo_presidente`, `fono_presidente`) VALUES
(26, 28, 'asdasd', 3, 'asdasd', 'sdfsd', 'sdfs', 'asdasd', 'criquelmemoreno@gmail.com', 123),
(25, 27, 'sdfsdf', 2, 'fsdf', 'sdfsd', 'sdfs', 'sdfsdf', 'criquelmemoreno@gmail.com', 2131),
(24, 26, 'asasdasdasd', 2, 'qweq', 'qweqe', 'qweqw', 'weqwe', 'criquelmemoreno@gmail.com', 112313),
(23, 23, 'claudio', 2, 'fsdf', '23123123', 'sdfsdf', 'asdasd', 'sdfsd@sdf.cl', 21312);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comite`
--

CREATE TABLE `comite` (
  `id` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `fono` int(11) NOT NULL,
  `correo_representante` varchar(30) NOT NULL,
  `Rut_representante` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comite`
--

INSERT INTO `comite` (`id`, `id_login`, `fono`, `correo_representante`, `Rut_representante`) VALUES
(1, 25, 5654, 'danixx_x21@hotmail.cl', '1323');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_club_local` int(11) NOT NULL,
  `id_club_visita` int(11) NOT NULL,
  `rut_turno` varchar(10) NOT NULL,
  `id_maquina` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`id`, `fecha`, `id_club_local`, `id_club_visita`, `rut_turno`, `id_maquina`) VALUES
(1, '0000-00-00', 0, 0, 'Seleccione', 0),
(2, '0000-00-00', 23, 25, 'Seleccione', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informe`
--

CREATE TABLE `informe` (
  `id` int(11) NOT NULL,
  `id_turno` int(11) NOT NULL,
  `informe` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

CREATE TABLE `jugador` (
  `id` int(11) NOT NULL,
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `huella` blob NOT NULL,
  `id_club` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maquina`
--

CREATE TABLE `maquina` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recup_contraseña`
--

CREATE TABLE `recup_contraseña` (
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

CREATE TABLE `reg_login` (
  `id` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `tipo_usr` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reg_login`
--

INSERT INTO `reg_login` (`id`, `correo`, `contrasena`, `tipo_usr`) VALUES
(28, 'criquelmemoreno@gmail.com', 'criquelmemoreno@gmail.com', 2),
(27, 'criquelmemoreno@gmail.com', 'criquelmemoreno@gmail.com', 2),
(26, 'criquelmemoreno@gmail.com', 'criquelmemoreno@gmail.com', 2),
(25, 'danixx_x21@hotmail.cl', 'danixx_x21@hotmail.cl', 3),
(24, 'cr@cr.cl', 'hola', 1),
(23, 'sdfsd@sdf.cl', 'sdfsd@sdf.cl', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sancion`
--

CREATE TABLE `sancion` (
  `id` int(11) NOT NULL,
  `id_jugador` int(11) NOT NULL,
  `sancion` varchar(100) NOT NULL,
  `cantidad_de_fechas` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcalendario`
--

CREATE TABLE `tcalendario` (
  `id` int(255) NOT NULL,
  `fecha` date NOT NULL,
  `evento` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usr`
--

CREATE TABLE `tipo_usr` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usr`
--

INSERT INTO `tipo_usr` (`id`, `descripcion`) VALUES
(1, 'Asociacion'),
(2, 'club'),
(3, 'comite de disiplina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traspaso`
--

CREATE TABLE `traspaso` (
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

CREATE TABLE `turno` (
  `rut` varchar(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fono` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `huella` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`rut`, `nombre`, `apellidos`, `direccion`, `fono`, `correo`, `huella`) VALUES
('185219607', 'sd', 'sad', 'sad', 0, 'asdasda@sad.cl', 0x6e756c6c),
('', '', '', '', 0, '', ''),
('18521953', 'sd', 'asd', 'sad', 0, 'asdasda@sad.cl', 0x6e756c6c);

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
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `tcalendario`
--
ALTER TABLE `tcalendario`
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
-- AUTO_INCREMENT de la tabla `club`
--
ALTER TABLE `club`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `comite`
--
ALTER TABLE `comite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- AUTO_INCREMENT de la tabla `tcalendario`
--
ALTER TABLE `tcalendario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21340;
--
-- AUTO_INCREMENT de la tabla `tipo_usr`
--
ALTER TABLE `tipo_usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `traspaso`
--
ALTER TABLE `traspaso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
