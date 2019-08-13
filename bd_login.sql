-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2019 a las 18:59:59
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_fisica`
--

CREATE TABLE `actividad_fisica` (
  `id_actividad_fisica` int(11) NOT NULL,
  `fecha_realizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad_fisica`
--

INSERT INTO `actividad_fisica` (`id_actividad_fisica`, `fecha_realizacion`, `id_estudiante`) VALUES
(2, '2019-08-07 22:16:32', 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_fisica_comportamiento`
--

CREATE TABLE `actividad_fisica_comportamiento` (
  `id_actividad_fisica_comportamiento` int(11) NOT NULL,
  `p64` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_actividad_fisica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad_fisica_comportamiento`
--

INSERT INTO `actividad_fisica_comportamiento` (`id_actividad_fisica_comportamiento`, `p64`, `id_actividad_fisica`) VALUES
(3, '20:0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_fisica_desplazarse`
--

CREATE TABLE `actividad_fisica_desplazarse` (
  `id_actividad_fisica_desplazarse` int(11) NOT NULL,
  `p55` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p56` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p57` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_actividad_fisica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad_fisica_desplazarse`
--

INSERT INTO `actividad_fisica_desplazarse` (`id_actividad_fisica_desplazarse`, `p55`, `p56`, `p57`, `id_actividad_fisica`) VALUES
(1, 'si', '1', '19 horas :18minutos', 1),
(2, 'no', '1', '17:0', 1),
(3, 'no', '1', '18:0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_fisica_sesionlibre`
--

CREATE TABLE `actividad_fisica_sesionlibre` (
  `id_actividad_fisica_sesionlibre` int(11) NOT NULL,
  `p61` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p62` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p63` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_actividad_fisica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad_fisica_sesionlibre`
--

INSERT INTO `actividad_fisica_sesionlibre` (`id_actividad_fisica_sesionlibre`, `p61`, `p62`, `p63`, `id_actividad_fisica`) VALUES
(3, 'si', '1', '18:0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_fisica_tiempolibre`
--

CREATE TABLE `actividad_fisica_tiempolibre` (
  `id_actividad_fisica_tiempolibre` int(11) NOT NULL,
  `p58` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p59` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p60` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_actividad_fisica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad_fisica_tiempolibre`
--

INSERT INTO `actividad_fisica_tiempolibre` (`id_actividad_fisica_tiempolibre`, `p58`, `p59`, `p60`, `id_actividad_fisica`) VALUES
(3, 'no', '1', '23:0', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_fisica_trabajo`
--

CREATE TABLE `actividad_fisica_trabajo` (
  `id_actividad_fisica_trabajo` int(11) NOT NULL,
  `p49` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p50` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p51` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p52` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p53` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p54` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_actividad_fisica` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `actividad_fisica_trabajo`
--

INSERT INTO `actividad_fisica_trabajo` (`id_actividad_fisica_trabajo`, `p49`, `p50`, `p51`, `p52`, `p53`, `p54`, `id_actividad_fisica`) VALUES
(3, 'no', '1', '16:16', 'no', '5', '0:16', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asig_grupo_estudiante`
--

CREATE TABLE `asig_grupo_estudiante` (
  `id_asignacionGrupoEst` int(11) NOT NULL,
  `fecha_asig_estu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_grupo` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asig_grupo_estudiante`
--

INSERT INTO `asig_grupo_estudiante` (`id_asignacionGrupoEst`, `fecha_asig_estu`, `id_grupo`, `id_estudiante`) VALUES
(120, '2019-08-06 01:32:39', 14, 104),
(121, '2019-08-08 02:38:20', 12, 102),
(123, '2019-08-08 02:38:27', 14, 102),
(124, '2019-08-08 04:11:03', 13, 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asig_grupo_profesor`
--

CREATE TABLE `asig_grupo_profesor` (
  `id_asig_grupo_prof` int(11) NOT NULL,
  `fecha_asig_prof` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_grupo` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `asig_grupo_profesor`
--

INSERT INTO `asig_grupo_profesor` (`id_asig_grupo_prof`, `fecha_asig_prof`, `id_grupo`, `id_profesor`) VALUES
(1, '2019-07-27 03:49:15', 12, 14),
(4, '2019-07-27 03:51:20', 12, 48),
(5, '2019-07-27 03:51:23', 13, 48),
(8, '2019-08-08 02:57:05', 14, 14),
(12, '2019-08-08 03:03:40', 13, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coopersmith`
--

CREATE TABLE `coopersmith` (
  `id_coopersmith` int(11) NOT NULL,
  `fecha_realizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `coopersmith`
--

INSERT INTO `coopersmith` (`id_coopersmith`, `fecha_realizacion`, `id_estudiante`) VALUES
(2, '2019-08-05 23:22:45', 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coopersmithcuartobloque`
--

CREATE TABLE `coopersmithcuartobloque` (
  `id_bloque4` int(11) NOT NULL,
  `p31` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p32` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p33` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p34` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p35` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p36` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p37` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p38` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p39` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p40` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_coopersmith` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `coopersmithcuartobloque`
--

INSERT INTO `coopersmithcuartobloque` (`id_bloque4`, `p31`, `p32`, `p33`, `p34`, `p35`, `p36`, `p37`, `p38`, `p39`, `p40`, `id_coopersmith`) VALUES
(2, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coopersmithprimerbloque`
--

CREATE TABLE `coopersmithprimerbloque` (
  `id_bloque1` int(11) NOT NULL,
  `p1` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p2` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p3` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p4` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p5` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p6` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p7` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p8` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p9` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p10` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_coopersmith` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `coopersmithprimerbloque`
--

INSERT INTO `coopersmithprimerbloque` (`id_bloque1`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `id_coopersmith`) VALUES
(2, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'si', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coopersmithquintobloque`
--

CREATE TABLE `coopersmithquintobloque` (
  `id_bloque5` int(11) NOT NULL,
  `p41` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p42` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p43` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p44` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p45` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p46` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p47` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p48` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p49` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p50` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_coopersmith` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `coopersmithquintobloque`
--

INSERT INTO `coopersmithquintobloque` (`id_bloque5`, `p41`, `p42`, `p43`, `p44`, `p45`, `p46`, `p47`, `p48`, `p49`, `p50`, `id_coopersmith`) VALUES
(2, 'si', 'si', 'si', 'si', 'si', 'no', 'no', 'no', 'no', 'no', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coopersmithsegundobloque`
--

CREATE TABLE `coopersmithsegundobloque` (
  `id_bloque2` int(11) NOT NULL,
  `p11` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p12` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p13` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p14` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p15` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p16` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p17` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p18` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p19` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p20` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_coopersmith` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `coopersmithsegundobloque`
--

INSERT INTO `coopersmithsegundobloque` (`id_bloque2`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `id_coopersmith`) VALUES
(2, 'si', 'si', 'si', 'si', 'si', 'no', 'no', 'si', 'no', 'si', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coopersmithsextobloque`
--

CREATE TABLE `coopersmithsextobloque` (
  `id_bloque5` int(11) NOT NULL,
  `p51` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p52` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p53` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p54` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p55` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p56` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p57` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p58` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_coopersmith` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `coopersmithsextobloque`
--

INSERT INTO `coopersmithsextobloque` (`id_bloque5`, `p51`, `p52`, `p53`, `p54`, `p55`, `p56`, `p57`, `p58`, `id_coopersmith`) VALUES
(2, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coopersmithtercerbloque`
--

CREATE TABLE `coopersmithtercerbloque` (
  `id_bloque3` int(11) NOT NULL,
  `p21` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p22` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p23` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p24` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p25` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p26` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p27` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p28` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p29` varchar(10) CHARACTER SET latin1 NOT NULL,
  `p30` varchar(10) CHARACTER SET latin1 NOT NULL,
  `id_coopersmith` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `coopersmithtercerbloque`
--

INSERT INTO `coopersmithtercerbloque` (`id_bloque3`, `p21`, `p22`, `p23`, `p24`, `p25`, `p26`, `p27`, `p28`, `p29`, `p30`, `id_coopersmith`) VALUES
(2, 'si', 'no', 'no', 'no', 'si', 'si', 'no', 'si', 'no', 'si', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `id_encuesta` int(11) NOT NULL,
  `nombre_encuesta` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`id_encuesta`, `nombre_encuesta`, `fecha_creacion`, `id_usuario`) VALUES
(1, 'deportes', '2019-07-19 01:22:27', 188),
(2, 'polideportivo', '2019-07-19 01:39:34', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `semestre` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `id_usuario`, `semestre`, `estado`) VALUES
(98, 127, 10, 1),
(102, 132, 10, 1),
(104, 190, 10, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fantastico`
--

CREATE TABLE `fantastico` (
  `id_fantastico` int(11) NOT NULL,
  `fecha_realizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fantastico`
--

INSERT INTO `fantastico` (`id_fantastico`, `fecha_realizacion`, `id_estudiante`) VALUES
(2, '2019-08-07 21:56:04', 102),
(3, '2019-08-08 01:24:22', 104);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fantastico_as`
--

CREATE TABLE `fantastico_as` (
  `id_fantastico_as` int(11) NOT NULL,
  `as1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `as2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `as3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `as4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `as5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `as6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_fantastico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fantastico_as`
--

INSERT INTO `fantastico_as` (`id_fantastico_as`, `as1`, `as2`, `as3`, `as4`, `as5`, `as6`, `id_fantastico`) VALUES
(8, '0 a 7 tragos', 'A menudo', 'Nunca', 'Casi siempre', 'Casi siempre', 'Casi siempre', 2),
(9, '0 a 7 tragos', 'A menudo', 'Casi nunca', 'Casi siempre', 'Casi siempre', 'Casi siempre', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fantastico_co`
--

CREATE TABLE `fantastico_co` (
  `id_fantastico_co` int(11) NOT NULL,
  `co1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_fantastico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fantastico_co`
--

INSERT INTO `fantastico_co` (`id_fantastico_co`, `co1`, `co2`, `co3`, `co4`, `co5`, `id_fantastico`) VALUES
(8, 'A veces', 'Casi nunca', 'Ocasionalmente', 'Ocasionalmente', 'Menos de 3 por dia', 2),
(9, 'Siempre', 'Siempre', 'Nunca', 'Nunca', 'Menos de 3 por dia', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fantastico_fa`
--

CREATE TABLE `fantastico_fa` (
  `id_fantastico_fa` int(11) NOT NULL,
  `fa1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fa2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fa3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fa4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_fantastico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fantastico_fa`
--

INSERT INTO `fantastico_fa` (`id_fantastico_fa`, `fa1`, `fa2`, `fa3`, `fa4`, `id_fantastico`) VALUES
(8, 'casi siempre', 'casi siempre', 'casi siempre', '4 o mas veces por semana', 2),
(9, 'A veces', 'casi siempre', 'A veces', '4 o mas veces por semana', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fantastico_nt`
--

CREATE TABLE `fantastico_nt` (
  `id_fantastico_nt` int(11) NOT NULL,
  `nt1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nt2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nt3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nt4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nt5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_fantastico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fantastico_nt`
--

INSERT INTO `fantastico_nt` (`id_fantastico_nt`, `nt1`, `nt2`, `nt3`, `nt4`, `nt5`, `id_fantastico`) VALUES
(8, 'casi siempre', 'Ninguna de estas', 'Normal o hasta 4 kilos de mas', 'No en los ultimos 5 aÃ±os', 'Ninguno', 2),
(9, 'casi siempre', 'Alguna de estas veces', 'Normal o hasta 4 kilos de mas', 'No en los ultimos 5 aÃ±os', 'Ninguno', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fantastico_ti`
--

CREATE TABLE `fantastico_ti` (
  `id_fantastico_ti` int(11) NOT NULL,
  `ti1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ti2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ti3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ti4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ti5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_fantastico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fantastico_ti`
--

INSERT INTO `fantastico_ti` (`id_fantastico_ti`, `ti1`, `ti2`, `ti3`, `ti4`, `ti5`, `id_fantastico`) VALUES
(8, 'Casi nunca', 'Casi nunca', 'casi nunca', 'A veces', 'casi siempre', 2),
(9, 'Casi nunca', 'Casi nunca', 'casi siempre', 'casi siempre', 'casi siempre', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `id_grupo` int(11) NOT NULL,
  `nombre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id_grupo`, `nombre`, `fecha_creacion`) VALUES
(12, 'la banda', '2019-07-03 10:29:17'),
(13, 'salon2', '2019-07-16 17:53:59'),
(14, 'el grupo de los inteligentes', '2019-07-24 15:54:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivacioneducativa`
--

CREATE TABLE `motivacioneducativa` (
  `id_motivacionEdu` int(11) NOT NULL,
  `fecha_realizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `motivacioneducativa`
--

INSERT INTO `motivacioneducativa` (`id_motivacionEdu`, `fecha_realizacion`, `id_estudiante`) VALUES
(5, '2019-08-05 23:05:25', 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivacioneducativacuartobloque`
--

CREATE TABLE `motivacioneducativacuartobloque` (
  `id_Mbloque4` int(11) NOT NULL,
  `m22` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m23` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m24` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m25` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m26` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m27` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m28` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_motivacionEdu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `motivacioneducativacuartobloque`
--

INSERT INTO `motivacioneducativacuartobloque` (`id_Mbloque4`, `m22`, `m23`, `m24`, `m25`, `m26`, `m27`, `m28`, `id_motivacionEdu`) VALUES
(2, 'Nada en absoluto', 'Nada en absoluto', 'Nada en absoluto', 'Nada en absoluto', 'Nada en absoluto', 'Nada en absoluto', 'Muy poco', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivacioneducativaprimerbloque`
--

CREATE TABLE `motivacioneducativaprimerbloque` (
  `id_Mbloque1` int(11) NOT NULL,
  `m1` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m2` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m3` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m4` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m5` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m6` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m7` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_motivacionEdu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `motivacioneducativaprimerbloque`
--

INSERT INTO `motivacioneducativaprimerbloque` (`id_Mbloque1`, `m1`, `m2`, `m3`, `m4`, `m5`, `m6`, `m7`, `id_motivacionEdu`) VALUES
(2, 'Muy poco', 'Muy poco', 'Muy poco', 'Muy poco', 'Muy poco', 'Muy poco', 'Muy poco', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivacioneducativasegundobloque`
--

CREATE TABLE `motivacioneducativasegundobloque` (
  `id_Mbloque2` int(11) NOT NULL,
  `m8` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m9` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m10` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m11` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m12` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m13` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m14` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_motivacionEdu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `motivacioneducativasegundobloque`
--

INSERT INTO `motivacioneducativasegundobloque` (`id_Mbloque2`, `m8`, `m9`, `m10`, `m11`, `m12`, `m13`, `m14`, `id_motivacionEdu`) VALUES
(1, 'Nada en absoluto', 'Nada en absoluto', 'Nada en absoluto', 'Nada en absoluto', 'Nada en absoluto', 'Nada en absoluto', 'Nada en absoluto', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivacioneducativatercerbloque`
--

CREATE TABLE `motivacioneducativatercerbloque` (
  `id_Mbloque3` int(11) NOT NULL,
  `m15` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m16` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m17` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m18` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m19` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m20` varchar(255) CHARACTER SET latin1 NOT NULL,
  `m21` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_motivacionEdu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `motivacioneducativatercerbloque`
--

INSERT INTO `motivacioneducativatercerbloque` (`id_Mbloque3`, `m15`, `m16`, `m17`, `m18`, `m19`, `m20`, `m21`, `id_motivacionEdu`) VALUES
(2, 'Nada en absoluto', 'Nada en absoluto', 'Nada en absoluto', 'Muy poco', 'Muy poco', 'Muy poco', 'Muy poco', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcion`
--

CREATE TABLE `opcion` (
  `id_opcion` int(11) NOT NULL,
  `nombreopcion` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_pregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `opcion`
--

INSERT INTO `opcion` (`id_opcion`, `nombreopcion`, `id_pregunta`) VALUES
(1, 'si', 3),
(2, 'no', 3),
(3, 'si', 5),
(4, 'no', 5),
(5, 'si', 1),
(6, 'no', 1),
(7, 'si', 2),
(8, 'no', 2),
(9, 'futbol', 4),
(10, 'baloncesto', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `id_pregunta` int(11) NOT NULL,
  `nombre_pregunta` varchar(255) CHARACTER SET latin1 NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tipo` int(11) NOT NULL,
  `id_encuesta` int(11) NOT NULL,
  `requerido` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT '(*)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`id_pregunta`, `nombre_pregunta`, `fecha_creacion`, `tipo`, `id_encuesta`, `requerido`) VALUES
(1, 'te gusta la actividad fisica', '2019-07-19 01:23:26', 0, 1, '(*)'),
(2, 'te gusta jugar futbol', '2019-07-19 01:24:38', 0, 1, '(*)'),
(3, 'te gusta el polideportivo de integrado sotara', '2019-07-21 03:10:28', 0, 2, '(*)'),
(4, 'cual es tu deporte favorito', '2019-07-22 14:51:54', 1, 2, '(*)'),
(5, 'te gusta jugar', '2019-07-21 03:19:56', 0, 2, '(*)'),
(6, 'da una opinion sobre el polideportivo', '2019-07-22 01:13:06', 1, 2, '(*)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `id_profesor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `profesion` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`id_profesor`, `id_usuario`, `profesion`) VALUES
(14, 145, 'sistemas'),
(48, 188, 'musicos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repuesta`
--

CREATE TABLE `repuesta` (
  `id_respuesta` int(11) NOT NULL,
  `id_pregunta` int(11) NOT NULL,
  `valor` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `repuesta`
--

INSERT INTO `repuesta` (`id_respuesta`, `id_pregunta`, `valor`, `id_estudiante`) VALUES
(1, 1, 'si', 102),
(2, 2, 'si', 102),
(3, 1, 'si', 102),
(4, 2, 'si', 102),
(5, 3, 'si', 102),
(6, 5, 'si', 102),
(7, 4, 'futbol', 102),
(8, 6, 'me gusta', 102);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `cedula` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `genero` int(2) NOT NULL,
  `telefono` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `privilegio` int(2) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `cedula`, `nombre`, `apellidos`, `fecha_nacimiento`, `genero`, `telefono`, `email`, `password`, `privilegio`, `fecha_registro`) VALUES
(1, '123', 'admin', 'admin', '2019-04-02', 1, '123', 'admin@gmail.com', '123', 1, '2019-04-27 02:25:26'),
(127, '1234543211', 'anderssonn', 'anaconas', '2019-06-01', 1, '123', 'anderana@gmail.com', '123', 2, '2019-06-20 03:17:16'),
(132, '104688', 'mariaa', 'majin', '2019-06-06', 2, '199921', 'maria@gmail.com', '123', 2, '2019-07-01 01:05:43'),
(145, '970712', 'andersson', 'ancaona', '1998-07-02', 2, '000000', 'ander@gmail.com', '123', 3, '2019-07-16 22:01:46'),
(188, '123222', 'paola', 'jara', '2000-01-01', 2, '00000', 'paolajara@gmail.com', '123', 3, '2019-07-16 22:30:03'),
(190, '121212', 'chayan', 'stiven campo', '2019-08-15', 1, '1233', 'chayan@gmail.com', '123', 2, '2019-08-06 01:32:15');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad_fisica`
--
ALTER TABLE `actividad_fisica`
  ADD PRIMARY KEY (`id_actividad_fisica`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `actividad_fisica_comportamiento`
--
ALTER TABLE `actividad_fisica_comportamiento`
  ADD PRIMARY KEY (`id_actividad_fisica_comportamiento`),
  ADD KEY `id_actividad_fisica` (`id_actividad_fisica`);

--
-- Indices de la tabla `actividad_fisica_desplazarse`
--
ALTER TABLE `actividad_fisica_desplazarse`
  ADD PRIMARY KEY (`id_actividad_fisica_desplazarse`);

--
-- Indices de la tabla `actividad_fisica_sesionlibre`
--
ALTER TABLE `actividad_fisica_sesionlibre`
  ADD PRIMARY KEY (`id_actividad_fisica_sesionlibre`),
  ADD KEY `id_actividad_fisica` (`id_actividad_fisica`);

--
-- Indices de la tabla `actividad_fisica_tiempolibre`
--
ALTER TABLE `actividad_fisica_tiempolibre`
  ADD PRIMARY KEY (`id_actividad_fisica_tiempolibre`),
  ADD KEY `id_actividad_fisica` (`id_actividad_fisica`);

--
-- Indices de la tabla `actividad_fisica_trabajo`
--
ALTER TABLE `actividad_fisica_trabajo`
  ADD PRIMARY KEY (`id_actividad_fisica_trabajo`),
  ADD KEY `id_actividad_fisica` (`id_actividad_fisica`);

--
-- Indices de la tabla `asig_grupo_estudiante`
--
ALTER TABLE `asig_grupo_estudiante`
  ADD PRIMARY KEY (`id_asignacionGrupoEst`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `asig_grupo_profesor`
--
ALTER TABLE `asig_grupo_profesor`
  ADD PRIMARY KEY (`id_asig_grupo_prof`),
  ADD KEY `id_grupo` (`id_grupo`),
  ADD KEY `id_profesor` (`id_profesor`);

--
-- Indices de la tabla `coopersmith`
--
ALTER TABLE `coopersmith`
  ADD PRIMARY KEY (`id_coopersmith`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `coopersmithcuartobloque`
--
ALTER TABLE `coopersmithcuartobloque`
  ADD PRIMARY KEY (`id_bloque4`),
  ADD KEY `id_coopersmith` (`id_coopersmith`);

--
-- Indices de la tabla `coopersmithprimerbloque`
--
ALTER TABLE `coopersmithprimerbloque`
  ADD PRIMARY KEY (`id_bloque1`),
  ADD KEY `id_coopersmith` (`id_coopersmith`);

--
-- Indices de la tabla `coopersmithquintobloque`
--
ALTER TABLE `coopersmithquintobloque`
  ADD PRIMARY KEY (`id_bloque5`),
  ADD KEY `id_coopersmith` (`id_coopersmith`);

--
-- Indices de la tabla `coopersmithsegundobloque`
--
ALTER TABLE `coopersmithsegundobloque`
  ADD PRIMARY KEY (`id_bloque2`),
  ADD KEY `id_coopersmith` (`id_coopersmith`);

--
-- Indices de la tabla `coopersmithsextobloque`
--
ALTER TABLE `coopersmithsextobloque`
  ADD PRIMARY KEY (`id_bloque5`),
  ADD KEY `id_coopersmith` (`id_coopersmith`);

--
-- Indices de la tabla `coopersmithtercerbloque`
--
ALTER TABLE `coopersmithtercerbloque`
  ADD PRIMARY KEY (`id_bloque3`),
  ADD KEY `id_coopersmith` (`id_coopersmith`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id_encuesta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `fantastico`
--
ALTER TABLE `fantastico`
  ADD PRIMARY KEY (`id_fantastico`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `fantastico_as`
--
ALTER TABLE `fantastico_as`
  ADD PRIMARY KEY (`id_fantastico_as`),
  ADD KEY `id_fantastico` (`id_fantastico`);

--
-- Indices de la tabla `fantastico_co`
--
ALTER TABLE `fantastico_co`
  ADD PRIMARY KEY (`id_fantastico_co`),
  ADD KEY `id_fantastico` (`id_fantastico`);

--
-- Indices de la tabla `fantastico_fa`
--
ALTER TABLE `fantastico_fa`
  ADD PRIMARY KEY (`id_fantastico_fa`),
  ADD KEY `id_fantastico` (`id_fantastico`);

--
-- Indices de la tabla `fantastico_nt`
--
ALTER TABLE `fantastico_nt`
  ADD PRIMARY KEY (`id_fantastico_nt`),
  ADD KEY `id_fantastico` (`id_fantastico`);

--
-- Indices de la tabla `fantastico_ti`
--
ALTER TABLE `fantastico_ti`
  ADD PRIMARY KEY (`id_fantastico_ti`),
  ADD KEY `id_fantastico` (`id_fantastico`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`id_grupo`);

--
-- Indices de la tabla `motivacioneducativa`
--
ALTER TABLE `motivacioneducativa`
  ADD PRIMARY KEY (`id_motivacionEdu`),
  ADD KEY `id_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `motivacioneducativacuartobloque`
--
ALTER TABLE `motivacioneducativacuartobloque`
  ADD PRIMARY KEY (`id_Mbloque4`),
  ADD KEY `id_motivacionEdu` (`id_motivacionEdu`);

--
-- Indices de la tabla `motivacioneducativaprimerbloque`
--
ALTER TABLE `motivacioneducativaprimerbloque`
  ADD PRIMARY KEY (`id_Mbloque1`),
  ADD KEY `id_motivacionEdu` (`id_motivacionEdu`);

--
-- Indices de la tabla `motivacioneducativasegundobloque`
--
ALTER TABLE `motivacioneducativasegundobloque`
  ADD PRIMARY KEY (`id_Mbloque2`),
  ADD KEY `id_motivacionEdu` (`id_motivacionEdu`);

--
-- Indices de la tabla `motivacioneducativatercerbloque`
--
ALTER TABLE `motivacioneducativatercerbloque`
  ADD PRIMARY KEY (`id_Mbloque3`),
  ADD KEY `id_motivacionEdu` (`id_motivacionEdu`);

--
-- Indices de la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD PRIMARY KEY (`id_opcion`),
  ADD KEY `id_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`id_pregunta`),
  ADD KEY `id_encuesta` (`id_encuesta`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`id_profesor`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `repuesta`
--
ALTER TABLE `repuesta`
  ADD PRIMARY KEY (`id_respuesta`),
  ADD KEY `id_estudiante` (`id_estudiante`),
  ADD KEY `id_pregunta` (`id_pregunta`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad_fisica`
--
ALTER TABLE `actividad_fisica`
  MODIFY `id_actividad_fisica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `actividad_fisica_comportamiento`
--
ALTER TABLE `actividad_fisica_comportamiento`
  MODIFY `id_actividad_fisica_comportamiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `actividad_fisica_desplazarse`
--
ALTER TABLE `actividad_fisica_desplazarse`
  MODIFY `id_actividad_fisica_desplazarse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `actividad_fisica_sesionlibre`
--
ALTER TABLE `actividad_fisica_sesionlibre`
  MODIFY `id_actividad_fisica_sesionlibre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `actividad_fisica_tiempolibre`
--
ALTER TABLE `actividad_fisica_tiempolibre`
  MODIFY `id_actividad_fisica_tiempolibre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `actividad_fisica_trabajo`
--
ALTER TABLE `actividad_fisica_trabajo`
  MODIFY `id_actividad_fisica_trabajo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `asig_grupo_estudiante`
--
ALTER TABLE `asig_grupo_estudiante`
  MODIFY `id_asignacionGrupoEst` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT de la tabla `asig_grupo_profesor`
--
ALTER TABLE `asig_grupo_profesor`
  MODIFY `id_asig_grupo_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `coopersmith`
--
ALTER TABLE `coopersmith`
  MODIFY `id_coopersmith` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `coopersmithcuartobloque`
--
ALTER TABLE `coopersmithcuartobloque`
  MODIFY `id_bloque4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `coopersmithprimerbloque`
--
ALTER TABLE `coopersmithprimerbloque`
  MODIFY `id_bloque1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `coopersmithquintobloque`
--
ALTER TABLE `coopersmithquintobloque`
  MODIFY `id_bloque5` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `coopersmithsegundobloque`
--
ALTER TABLE `coopersmithsegundobloque`
  MODIFY `id_bloque2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `coopersmithsextobloque`
--
ALTER TABLE `coopersmithsextobloque`
  MODIFY `id_bloque5` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `coopersmithtercerbloque`
--
ALTER TABLE `coopersmithtercerbloque`
  MODIFY `id_bloque3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id_encuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `fantastico`
--
ALTER TABLE `fantastico`
  MODIFY `id_fantastico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fantastico_as`
--
ALTER TABLE `fantastico_as`
  MODIFY `id_fantastico_as` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `fantastico_co`
--
ALTER TABLE `fantastico_co`
  MODIFY `id_fantastico_co` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `fantastico_fa`
--
ALTER TABLE `fantastico_fa`
  MODIFY `id_fantastico_fa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `fantastico_nt`
--
ALTER TABLE `fantastico_nt`
  MODIFY `id_fantastico_nt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `fantastico_ti`
--
ALTER TABLE `fantastico_ti`
  MODIFY `id_fantastico_ti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
  MODIFY `id_grupo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `motivacioneducativa`
--
ALTER TABLE `motivacioneducativa`
  MODIFY `id_motivacionEdu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `motivacioneducativacuartobloque`
--
ALTER TABLE `motivacioneducativacuartobloque`
  MODIFY `id_Mbloque4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `motivacioneducativaprimerbloque`
--
ALTER TABLE `motivacioneducativaprimerbloque`
  MODIFY `id_Mbloque1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `motivacioneducativasegundobloque`
--
ALTER TABLE `motivacioneducativasegundobloque`
  MODIFY `id_Mbloque2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `motivacioneducativatercerbloque`
--
ALTER TABLE `motivacioneducativatercerbloque`
  MODIFY `id_Mbloque3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `opcion`
--
ALTER TABLE `opcion`
  MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `id_pregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `repuesta`
--
ALTER TABLE `repuesta`
  MODIFY `id_respuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad_fisica`
--
ALTER TABLE `actividad_fisica`
  ADD CONSTRAINT `actividad_fisica_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `actividad_fisica_comportamiento`
--
ALTER TABLE `actividad_fisica_comportamiento`
  ADD CONSTRAINT `actividad_fisica_comportamiento_ibfk_1` FOREIGN KEY (`id_actividad_fisica`) REFERENCES `actividad_fisica` (`id_actividad_fisica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `actividad_fisica_sesionlibre`
--
ALTER TABLE `actividad_fisica_sesionlibre`
  ADD CONSTRAINT `actividad_fisica_sesionlibre_ibfk_1` FOREIGN KEY (`id_actividad_fisica`) REFERENCES `actividad_fisica` (`id_actividad_fisica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `actividad_fisica_tiempolibre`
--
ALTER TABLE `actividad_fisica_tiempolibre`
  ADD CONSTRAINT `actividad_fisica_tiempolibre_ibfk_1` FOREIGN KEY (`id_actividad_fisica`) REFERENCES `actividad_fisica` (`id_actividad_fisica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `actividad_fisica_trabajo`
--
ALTER TABLE `actividad_fisica_trabajo`
  ADD CONSTRAINT `actividad_fisica_trabajo_ibfk_1` FOREIGN KEY (`id_actividad_fisica`) REFERENCES `actividad_fisica` (`id_actividad_fisica`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asig_grupo_estudiante`
--
ALTER TABLE `asig_grupo_estudiante`
  ADD CONSTRAINT `asig_grupo_estudiante_ibfk_1` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asig_grupo_estudiante_ibfk_2` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asig_grupo_profesor`
--
ALTER TABLE `asig_grupo_profesor`
  ADD CONSTRAINT `asig_grupo_profesor_ibfk_1` FOREIGN KEY (`id_profesor`) REFERENCES `profesor` (`id_profesor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `asig_grupo_profesor_ibfk_2` FOREIGN KEY (`id_grupo`) REFERENCES `grupo` (`id_grupo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `coopersmith`
--
ALTER TABLE `coopersmith`
  ADD CONSTRAINT `coopersmith_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `coopersmithcuartobloque`
--
ALTER TABLE `coopersmithcuartobloque`
  ADD CONSTRAINT `coopersmithcuartobloque_ibfk_1` FOREIGN KEY (`id_coopersmith`) REFERENCES `coopersmith` (`id_coopersmith`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `coopersmithprimerbloque`
--
ALTER TABLE `coopersmithprimerbloque`
  ADD CONSTRAINT `coopersmithprimerbloque_ibfk_1` FOREIGN KEY (`id_coopersmith`) REFERENCES `coopersmith` (`id_coopersmith`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `coopersmithquintobloque`
--
ALTER TABLE `coopersmithquintobloque`
  ADD CONSTRAINT `coopersmithquintobloque_ibfk_1` FOREIGN KEY (`id_coopersmith`) REFERENCES `coopersmith` (`id_coopersmith`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `coopersmithsegundobloque`
--
ALTER TABLE `coopersmithsegundobloque`
  ADD CONSTRAINT `coopersmithsegundobloque_ibfk_1` FOREIGN KEY (`id_coopersmith`) REFERENCES `coopersmith` (`id_coopersmith`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `coopersmithsextobloque`
--
ALTER TABLE `coopersmithsextobloque`
  ADD CONSTRAINT `coopersmithsextobloque_ibfk_1` FOREIGN KEY (`id_coopersmith`) REFERENCES `coopersmith` (`id_coopersmith`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `coopersmithtercerbloque`
--
ALTER TABLE `coopersmithtercerbloque`
  ADD CONSTRAINT `coopersmithtercerbloque_ibfk_1` FOREIGN KEY (`id_coopersmith`) REFERENCES `coopersmith` (`id_coopersmith`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD CONSTRAINT `encuesta_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fantastico`
--
ALTER TABLE `fantastico`
  ADD CONSTRAINT `fantastico_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fantastico_as`
--
ALTER TABLE `fantastico_as`
  ADD CONSTRAINT `fantastico_as_ibfk_1` FOREIGN KEY (`id_fantastico`) REFERENCES `fantastico` (`id_fantastico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fantastico_co`
--
ALTER TABLE `fantastico_co`
  ADD CONSTRAINT `fantastico_co_ibfk_1` FOREIGN KEY (`id_fantastico`) REFERENCES `fantastico` (`id_fantastico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fantastico_fa`
--
ALTER TABLE `fantastico_fa`
  ADD CONSTRAINT `fantastico_fa_ibfk_1` FOREIGN KEY (`id_fantastico`) REFERENCES `fantastico` (`id_fantastico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fantastico_nt`
--
ALTER TABLE `fantastico_nt`
  ADD CONSTRAINT `fantastico_nt_ibfk_1` FOREIGN KEY (`id_fantastico`) REFERENCES `fantastico` (`id_fantastico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fantastico_ti`
--
ALTER TABLE `fantastico_ti`
  ADD CONSTRAINT `fantastico_ti_ibfk_1` FOREIGN KEY (`id_fantastico`) REFERENCES `fantastico` (`id_fantastico`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `motivacioneducativa`
--
ALTER TABLE `motivacioneducativa`
  ADD CONSTRAINT `motivacioneducativa_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `motivacioneducativacuartobloque`
--
ALTER TABLE `motivacioneducativacuartobloque`
  ADD CONSTRAINT `motivacioneducativacuartobloque_ibfk_1` FOREIGN KEY (`id_motivacionEdu`) REFERENCES `motivacioneducativa` (`id_motivacionEdu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `motivacioneducativaprimerbloque`
--
ALTER TABLE `motivacioneducativaprimerbloque`
  ADD CONSTRAINT `motivacioneducativaprimerbloque_ibfk_1` FOREIGN KEY (`id_motivacionEdu`) REFERENCES `motivacioneducativa` (`id_motivacionEdu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `motivacioneducativasegundobloque`
--
ALTER TABLE `motivacioneducativasegundobloque`
  ADD CONSTRAINT `motivacioneducativasegundobloque_ibfk_1` FOREIGN KEY (`id_motivacionEdu`) REFERENCES `motivacioneducativa` (`id_motivacionEdu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `motivacioneducativatercerbloque`
--
ALTER TABLE `motivacioneducativatercerbloque`
  ADD CONSTRAINT `motivacioneducativatercerbloque_ibfk_1` FOREIGN KEY (`id_motivacionEdu`) REFERENCES `motivacioneducativa` (`id_motivacionEdu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `opcion`
--
ALTER TABLE `opcion`
  ADD CONSTRAINT `opcion_ibfk_1` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD CONSTRAINT `pregunta_ibfk_1` FOREIGN KEY (`id_encuesta`) REFERENCES `encuesta` (`id_encuesta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `repuesta`
--
ALTER TABLE `repuesta`
  ADD CONSTRAINT `repuesta_ibfk_1` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `repuesta_ibfk_2` FOREIGN KEY (`id_pregunta`) REFERENCES `pregunta` (`id_pregunta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
