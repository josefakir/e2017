-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-04-2017 a las 00:50:18
-- Versión del servidor: 5.5.42
-- Versión de PHP: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `establecimientos2017`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividads`
--

CREATE TABLE `actividads` (
  `id` int(11) NOT NULL,
  `id_lead` int(11) NOT NULL,
  `que_hice` varchar(255) COLLATE utf8_bin NOT NULL,
  `comentarios` text COLLATE utf8_bin NOT NULL,
  `que_hare` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha_futura` datetime NOT NULL,
  `comentarios_futura` text COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividads`
--

INSERT INTO `actividads` (`id`, `id_lead`, `que_hice`, `comentarios`, `que_hare`, `fecha_futura`, `comentarios_futura`, `created_at`, `updated_at`) VALUES
(53, 33, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-21 01:04:35', '2017-04-21 01:04:35'),
(54, 34, 'Llamada telefónica', 'sadf', 'Alta de establecimiento', '2017-04-24 13:57:00', 'asdf', '2017-04-24 20:57:32', '2017-04-24 20:57:32'),
(55, 34, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-24 20:58:11', '2017-04-24 20:58:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autorizacions`
--

CREATE TABLE `autorizacions` (
  `id` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Restaurantes', '0000-00-00 00:00:00', '2017-04-06 22:36:57'),
(2, 'Antros y Bares', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'asdf', '2017-04-09 07:02:07', '2017-04-09 07:02:07'),
(4, 'Prueba', '2017-04-09 07:12:30', '2017-04-09 07:12:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriavives`
--

CREATE TABLE `categoriavives` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalledesclubs`
--

CREATE TABLE `detalledesclubs` (
  `id` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_lead` int(11) NOT NULL,
  `razon_social` varchar(255) COLLATE utf8_bin NOT NULL,
  `RFC` varchar(255) COLLATE utf8_bin NOT NULL,
  `contacto` varchar(255) COLLATE utf8_bin NOT NULL,
  `puesto` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefono_1` varchar(255) COLLATE utf8_bin NOT NULL,
  `es_celular_1` tinyint(1) NOT NULL,
  `telefono_2` varchar(255) COLLATE utf8_bin NOT NULL,
  `es_celular_2` tinyint(1) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `calle` varchar(255) COLLATE utf8_bin NOT NULL,
  `no_exterior` varchar(255) COLLATE utf8_bin NOT NULL,
  `no_interior` varchar(255) COLLATE utf8_bin NOT NULL,
  `referencia` varchar(255) COLLATE utf8_bin NOT NULL,
  `latitud` varchar(255) COLLATE utf8_bin NOT NULL,
  `longitud` varchar(255) COLLATE utf8_bin NOT NULL,
  `tiene_actividad_calidad` tinyint(1) NOT NULL,
  `actividad_de_calidad` varchar(255) COLLATE utf8_bin NOT NULL,
  `comentarios` text COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `detalledesclubs`
--

INSERT INTO `detalledesclubs` (`id`, `id_marca`, `id_lead`, `razon_social`, `RFC`, `contacto`, `puesto`, `telefono_1`, `es_celular_1`, `telefono_2`, `es_celular_2`, `email`, `calle`, `no_exterior`, `no_interior`, `referencia`, `latitud`, `longitud`, `tiene_actividad_calidad`, `actividad_de_calidad`, `comentarios`, `created_at`, `updated_at`) VALUES
(15, 23, 33, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '2017-04-21 01:04:05', '2017-04-21 01:04:05'),
(16, 24, 34, 'razon_social', 'rfc', 'contacto', 'puesto', '1234567890', 0, '1234567890', 0, 'example@example.com', 'calle', 'no_exterior', 'no_interior', 'referencia', 'latitud', 'longitud', 0, 'Llamada', 'comentarios', '2017-04-24 20:57:03', '2017-04-24 20:57:52'),
(17, 0, 35, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '2017-04-25 00:23:07', '2017-04-25 00:23:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `acronym` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `nombre`, `acronym`) VALUES
(1, 'Aguascalientes', 'AGS'),
(2, 'Baja California', 'BC'),
(3, 'Baja California Sur', 'BCS'),
(4, 'Campeche', 'CMP'),
(5, 'Chiapas', 'CHS'),
(6, 'Chihuahua', 'CHI'),
(7, 'Coahuila de Zaragoza', 'COA'),
(8, 'Colima', 'COL'),
(9, 'Distrito Federal', 'DF'),
(10, 'Durango', 'DGO'),
(11, 'Guanajuato', 'GTO'),
(12, 'Guerrero', 'GRO'),
(13, 'Hidalgo', 'HGO'),
(14, 'Jalisco', 'JAL'),
(15, 'Michoacán de Ocampo', 'MCH'),
(16, 'Morelos', 'MOR'),
(17, 'México', 'MEX'),
(18, 'Nayarit', 'NAY'),
(19, 'Nuevo León', 'NL'),
(20, 'Oaxaca', 'OAX'),
(21, 'Puebla', 'PUE'),
(22, 'Querétaro', 'QRO'),
(23, 'Quintana Roo', 'QR'),
(24, 'San Luis Potosí', 'SLP'),
(25, 'Sinaloa', 'SIN'),
(26, 'Sonora', 'SON'),
(27, 'Tabasco', 'TAB'),
(28, 'Tamaulipas', 'TMS'),
(29, 'Tlaxcala', 'TLX'),
(30, 'Veracruz de Ignacio de la Llave', 'VER'),
(31, 'Yucatán', 'YUC'),
(32, 'Zacatecas', 'ZAC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapaunos`
--

CREATE TABLE `etapaunos` (
  `id` int(11) NOT NULL,
  `id_ruta` int(11) NOT NULL,
  `pasaje` float(11,2) NOT NULL,
  `transportes` text CHARACTER SET latin1 NOT NULL,
  `status_establecimiento` varchar(255) CHARACTER SET latin1 NOT NULL,
  `calc_desclub` tinyint(1) NOT NULL,
  `cual_calc_desc` text CHARACTER SET latin1 NOT NULL,
  `calc_otras` tinyint(1) NOT NULL,
  `cual_calc_otras` text CHARACTER SET latin1 NOT NULL,
  `conoce_programa` tinyint(1) NOT NULL,
  `cual_programa` text CHARACTER SET latin1 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `etapaunos`
--

INSERT INTO `etapaunos` (`id`, `id_ruta`, `pasaje`, `transportes`, `status_establecimiento`, `calc_desclub`, `cual_calc_desc`, `calc_otras`, `cual_calc_otras`, `conoce_programa`, `cual_programa`, `created_at`, `updated_at`) VALUES
(6, 1, 10.50, 'a:3:{i:0;s:7:"Camión";i:1;s:5:"Metro";i:2;s:4:"Otro";}', 'Abierto', 1, 'a:4:{i:0;s:5:"honda";i:1;s:5:"lexus";i:2;s:5:"mazda";i:3;s:6:"nissan";}', 1, 'tdu', 1, 'a:4:{i:0;s:5:"honda";i:1;s:5:"lexus";i:2;s:5:"mazda";i:3;s:6:"nissan";}', '2017-04-25 22:53:10', '2017-04-25 22:53:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leads`
--

CREATE TABLE `leads` (
  `id` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `numero_sucursales` int(11) NOT NULL,
  `status` char(1) COLLATE utf8_bin NOT NULL,
  `tiene_contacto` tinyint(1) NOT NULL,
  `inicio_operaciones` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `leads`
--

INSERT INTO `leads` (`id`, `id_marca`, `id_usuario`, `nombre`, `numero_sucursales`, `status`, `tiene_contacto`, `inicio_operaciones`, `created_at`, `updated_at`) VALUES
(33, 23, 1, 'La miscelanea lead', 2, '9', 0, 1, '2017-04-21 01:04:05', '2017-04-21 01:05:23'),
(34, 24, 1, 'asdf', 1, '9', 1, 0, '2017-04-24 20:57:03', '2017-04-24 20:58:11'),
(35, 0, 0, '', 0, '2', 0, 0, '2017-04-25 00:23:06', '2017-04-25 00:23:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamadas`
--

CREATE TABLE `llamadas` (
  `id` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `paterno` varchar(255) COLLATE utf8_bin NOT NULL,
  `materno` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo_tarjeta_seguro` varchar(255) COLLATE utf8_bin NOT NULL,
  `calle` varchar(255) COLLATE utf8_bin NOT NULL,
  `no_ext` varchar(255) COLLATE utf8_bin NOT NULL,
  `no_int` varchar(255) COLLATE utf8_bin NOT NULL,
  `cp` varchar(255) COLLATE utf8_bin NOT NULL,
  `referencia` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo_tel_1` varchar(255) COLLATE utf8_bin NOT NULL,
  `tel_1` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo_tel_2` varchar(255) COLLATE utf8_bin NOT NULL,
  `tel_2` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `marca` varchar(255) COLLATE utf8_bin NOT NULL,
  `sucursal` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `fecha_visita` date NOT NULL,
  `comentarios` text COLLATE utf8_bin NOT NULL,
  `donde_viste` varchar(255) COLLATE utf8_bin NOT NULL,
  `status` char(1) COLLATE utf8_bin NOT NULL,
  `acuerdo` char(1) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `llamadas`
--

INSERT INTO `llamadas` (`id`, `id_proyecto`, `tipo`, `nombre`, `paterno`, `materno`, `tipo_tarjeta_seguro`, `calle`, `no_ext`, `no_int`, `cp`, `referencia`, `tipo_tel_1`, `tel_1`, `tipo_tel_2`, `tel_2`, `email`, `marca`, `sucursal`, `id_marca`, `id_categoria`, `fecha_visita`, `comentarios`, `donde_viste`, `status`, `acuerdo`, `created_at`, `updated_at`) VALUES
(21, 3, 'Queja Establecimiento', 'nombre', 'paterno', 'materno', 'Auto - Seguro', 'calle', 'no_ext', 'no_int', 'cp', 'referencia', 'Normal', '1234567890', 'Normal', '1234567890', 'example@example.com', 'marca', 'sucursal', 23, 1, '0000-00-00', '<p>asdfasdf</p>', 'App', '3', '4', '2017-04-21 01:20:19', '2017-04-21 01:21:53'),
(22, 3, 'Información Plataforma', 'nombre', 'paterno', 'materno', 'Auto - Seguro', 'calle', 'no_ext', 'no_int', 'cp', 'referencia', 'Normal', '1234567890', 'Normal', '1234567890', 'example@example.com', 'marca', 'sucursal', 23, 1, '0000-00-00', '', 'App', '0', '', '2017-04-21 01:20:30', '2017-04-21 01:20:30'),
(23, 4, 'Afiliar establecimiento', 'nombre', 'paterno', 'materno', 'Auto - Seguro', 'calle', 'no_ext', 'no_int', 'cp', 'referencia', 'Normal', '1234567890', 'Normal', '1234567890', 'example@example.com', 'marca', 'sucursal', 23, 1, '0000-00-00', '', 'App', '0', '', '2017-04-21 01:20:44', '2017-04-21 01:20:44'),
(24, 3, 'Queja Establecimiento', 'José Antonio', 'Becerra', 'Romero', 'Cheques', '', '', '', '', '', '044', '5512952409', '', '', 'jbecerraromero@gmail.com', '', 'sucursal', 23, 0, '2017-04-21', '<p>asdf</p>', 'Guía Impresa', '1', '5', '2017-04-21 17:29:33', '2017-04-24 19:25:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `web` varchar(255) COLLATE utf8_bin NOT NULL,
  `resena` text COLLATE utf8_bin NOT NULL,
  `extracto` varchar(255) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(255) COLLATE utf8_bin NOT NULL,
  `autor` varchar(255) COLLATE utf8_bin NOT NULL,
  `friendlyUrl` varchar(255) COLLATE utf8_bin NOT NULL,
  `especial` varchar(255) COLLATE utf8_bin NOT NULL,
  `vimeo` varchar(255) COLLATE utf8_bin NOT NULL,
  `logoDesclub` varchar(255) COLLATE utf8_bin NOT NULL,
  `autorizadaLead` tinyint(1) NOT NULL,
  `inicio_operaciones` tinyint(1) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_categoria_vive` int(11) NOT NULL,
  `id_tipoDeComida` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `web`, `resena`, `extracto`, `imagen`, `autor`, `friendlyUrl`, `especial`, `vimeo`, `logoDesclub`, `autorizadaLead`, `inicio_operaciones`, `id_categoria`, `id_categoria_vive`, `id_tipoDeComida`, `created_at`, `updated_at`) VALUES
(23, 'La miscelanea', 'http://www.google.com', '<p>Rese&ntilde;a</p>', 'extracto', 'assets/images/084.png', 'autor', 'friendlyUrl', 'especial', 'vimeo', 'assets/images/705.jpg', 1, 1, 1, 0, 1, '2017-04-21 01:02:06', '2017-04-21 01:05:23'),
(24, 'test', 'web', '', 'extracto', 'assets/images/63cbab902b42aa6ecb3fae02db5ed606_memes-de-nino-chino-related-nio-japones-meme_360-240.jpeg', 'autor', 'friendlyUrl', 'especial', 'vimeo', 'assets/images/63cbab902b42aa6ecb3fae02db5ed606_memes-de-nino-chino-related-nio-japones-meme_360-240.jpeg', 1, 0, 1, 0, 1, '2017-04-24 20:56:12', '2017-04-24 20:56:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocions`
--

CREATE TABLE `promocions` (
  `id` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `efectivo` varchar(255) COLLATE utf8_bin NOT NULL,
  `tarjeta` varchar(255) COLLATE utf8_bin NOT NULL,
  `promo` varchar(255) COLLATE utf8_bin NOT NULL,
  `detalle_promocion` text COLLATE utf8_bin NOT NULL,
  `restricciones` text COLLATE utf8_bin NOT NULL,
  `inicio_actividades` date NOT NULL,
  `fin_actividades` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `promocions`
--

INSERT INTO `promocions` (`id`, `id_marca`, `id_proyecto`, `efectivo`, `tarjeta`, `promo`, `detalle_promocion`, `restricciones`, `inicio_actividades`, `fin_actividades`, `created_at`, `updated_at`) VALUES
(28, 23, 0, '15', '10', '2x1 en chelas', 'detalle_promo', 'restricciones', '2017-04-20', '2018-05-30', '2017-04-21 01:05:17', '2017-04-21 01:05:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(2, 'Grupo Medios', '2017-04-06 23:00:56', '2017-04-06 23:00:56'),
(3, 'Bancomer', '2017-04-11 23:07:37', '2017-04-11 23:07:37'),
(4, 'Edenred', '2017-04-11 23:07:43', '2017-04-11 23:07:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `tipo_ruta` varchar(255) COLLATE utf8_bin NOT NULL,
  `actividad` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `mistery` tinyint(1) NOT NULL,
  `etapa1` tinyint(1) NOT NULL,
  `etapa2` tinyint(1) NOT NULL,
  `etapa3` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `id_usuario`, `id_proyecto`, `id_sucursal`, `tipo_ruta`, `actividad`, `fecha_inicio`, `fecha_fin`, `mistery`, `etapa1`, `etapa2`, `etapa3`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, 2, 19, 'Sucursales nuevas', 'calidad', '2017-04-24', '2017-04-29', 0, 1, 0, 0, 0, '2017-04-25 01:08:26', '2017-04-25 22:53:10'),
(2, 7, 2, 21, 'Sucursales nuevas', 'mistery', '2017-04-24', '2017-04-29', 0, 0, 0, 0, 0, '2017-04-25 01:08:26', '2017-04-25 01:08:26'),
(3, 7, 2, 19, 'Sucursales nuevas', 'calidad', '2017-04-25', '2017-04-30', 0, 0, 0, 0, 0, '2017-04-25 17:22:17', '2017-04-25 17:22:17'),
(4, 7, 2, 21, 'Sucursales nuevas', 'calidad', '2017-04-25', '2017-04-30', 0, 0, 0, 0, 0, '2017-04-25 17:22:17', '2017-04-25 17:22:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientos`
--

CREATE TABLE `seguimientos` (
  `id` int(11) NOT NULL,
  `id_llamada` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentarios` text COLLATE utf8_bin NOT NULL,
  `status` char(1) COLLATE utf8_bin NOT NULL,
  `acuerdo` char(1) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `seguimientos`
--

INSERT INTO `seguimientos` (`id`, `id_llamada`, `id_usuario`, `comentarios`, `status`, `acuerdo`, `created_at`, `updated_at`) VALUES
(41, 21, 1, 'me tiene que mandar ticket', '1', '5', '2017-04-21 01:21:08', '2017-04-21 01:21:08'),
(42, 21, 1, 'Ya me mandó ticket', '1', '5', '2017-04-21 01:21:26', '2017-04-21 01:21:26'),
(43, 21, 1, 'tengo ticket', '2', '5', '2017-04-21 01:21:39', '2017-04-21 01:21:39'),
(44, 21, 1, 'aceptó reembolso', '3', '4', '2017-04-21 01:21:53', '2017-04-21 01:21:53'),
(45, 24, 1, 'asdf', '1', '5', '2017-04-24 19:25:59', '2017-04-24 19:25:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursals`
--

CREATE TABLE `sucursals` (
  `id` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(255) COLLATE utf8_bin NOT NULL,
  `latitud` varchar(255) COLLATE utf8_bin NOT NULL,
  `longitud` varchar(255) COLLATE utf8_bin NOT NULL,
  `referencia` varchar(255) COLLATE utf8_bin NOT NULL,
  `calle` varchar(255) COLLATE utf8_bin NOT NULL,
  `colonia` varchar(255) COLLATE utf8_bin NOT NULL,
  `no_ext` varchar(255) COLLATE utf8_bin NOT NULL,
  `no_int` varchar(255) COLLATE utf8_bin NOT NULL,
  `horarios` varchar(255) COLLATE utf8_bin NOT NULL,
  `fachada` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL,
  `restorando` varchar(255) COLLATE utf8_bin NOT NULL,
  `restaurantes` varchar(255) COLLATE utf8_bin NOT NULL,
  `tuvo_llamada_bienvenida` tinyint(1) NOT NULL,
  `detalle_llamada` varchar(255) COLLATE utf8_bin NOT NULL,
  `conoce_vb` tinyint(1) NOT NULL,
  `escala_info` tinyint(1) NOT NULL,
  `motivo_desconoce` varchar(255) COLLATE utf8_bin NOT NULL,
  `reforzo_info` tinyint(1) NOT NULL,
  `material_pop` tinyint(1) NOT NULL,
  `calcomanias` int(11) NOT NULL,
  `acrilicos` int(11) NOT NULL,
  `comunicados_desclub` int(11) NOT NULL,
  `comunicados_bbva` int(11) NOT NULL,
  `reloj_colgante` int(11) NOT NULL,
  `calcomanias_desclub` int(11) NOT NULL,
  `tarjetas_desclub` int(11) NOT NULL,
  `nombre_atendio` varchar(255) COLLATE utf8_bin NOT NULL,
  `cargo_atendio` varchar(255) COLLATE utf8_bin NOT NULL,
  `geolocalicacion_revisada` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sucursals`
--

INSERT INTO `sucursals` (`id`, `id_marca`, `nombre`, `telefono`, `latitud`, `longitud`, `referencia`, `calle`, `colonia`, `no_ext`, `no_int`, `horarios`, `fachada`, `id_estado`, `id_zona`, `restorando`, `restaurantes`, `tuvo_llamada_bienvenida`, `detalle_llamada`, `conoce_vb`, `escala_info`, `motivo_desconoce`, `reforzo_info`, `material_pop`, `calcomanias`, `acrilicos`, `comunicados_desclub`, `comunicados_bbva`, `reloj_colgante`, `calcomanias_desclub`, `tarjetas_desclub`, `nombre_atendio`, `cargo_atendio`, `geolocalicacion_revisada`, `created_at`, `updated_at`) VALUES
(19, 23, 'Palmas', '1234567890', 'fdfasd', 'asfdasdf', 'referenciaasdfasdf', 'calle', 'colonia', 'no_ext', 'no_int', 'horarios', 'assets/images/084.png', 9, 0, 'restorando', 'restaurantes', 1, 'Conocen convenio y aplican descuento', 1, 1, 'Cambiaron de administración', 1, 1, 1, 1, 1, 2, 2, 3, 2, 'asdf', 'Gerente sucursal', 1, '2017-04-21 01:02:38', '2017-04-25 18:13:08'),
(20, 23, 'nombre', '1234567890', 'latitud', 'longitud', 'referencia', 'calle', 'colonia', 'no_ext', 'no_int', 'horarios', 'assets/images/705.jpg', 9, 0, 'restorando', 'restaurantes', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-21 01:02:51', '2017-04-25 18:13:24'),
(21, 23, 'nombre', '1234567890', 'latitud', 'longitud', 'referencia', 'calle', 'colonia', 'no_ext', 'no_int', 'horarios', '', 9, 0, 'restorando', 'restaurantes', 1, 'Descompuesto / Sin servicio', 1, 1, '', 1, 1, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '2017-04-21 17:53:54', '2017-04-25 18:13:32'),
(22, 24, 'nombre', '1234567890', 'latitud', 'longitud', 'referencia', 'calle', 'colonia', 'no_ext', 'no_int', 'horarios', '', 9, 0, 'restorando', 'restaurantes', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-24 20:56:27', '2017-04-25 18:13:37'),
(23, 24, 'nombre', '1234567890', 'latitud', 'longitud', 'referencia', 'calle', 'colonia', 'no_ext', 'no_int', 'horarios', '', 9, 0, 'restorando', 'restaurantes', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-24 20:56:36', '2017-04-25 18:13:43'),
(24, 23, 'nombre', '1234567890', 'latitud', 'longitud', 'referencia', 'calle', 'ejemplo colonia', 'no_ext', 'no_int', 'horarios', '', 1, 0, 'restorando', 'restaurantes', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-25 18:10:08', '2017-04-25 18:13:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodecomidas`
--

CREATE TABLE `tipodecomidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipodecomidas`
--

INSERT INTO `tipodecomidas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Alemana', '2017-04-06 23:02:42', '2017-04-06 23:03:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `apikey` varchar(255) COLLATE utf8_bin NOT NULL,
  `rol` char(1) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `apikey`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'antonio.becerra@grupomedios.com', '5140106451340684a8beddcfae8ccb37', '57cec4137b614c87cb4e24a3d003a3e0', '1', '2017-04-05 00:00:00', '2017-04-05 00:00:00'),
(2, 'cin', '5140106451340684a8beddcfae8ccb37', '', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'afiliador', '5140106451340684a8beddcfae8ccb37', '', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'dondeir', '5140106451340684a8beddcfae8ccb37', '', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'peyi', 'b1a398e4669aac6776846bae211cacfb', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'gerentecalidad', '5140106451340684a8beddcfae8ccb37', '', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'calidad1', '5140106451340684a8beddcfae8ccb37', '', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'calidad2', '5140106451340684a8beddcfae8ccb37', '', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'calidad3', '5140106451340684a8beddcfae8ccb37', '', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'asoycalidad', '5140106451340684a8beddcfae8ccb37', '', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `id_estado`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 9, 'Mixcoac', '2017-04-07 20:14:10', '2017-04-07 20:14:10'),
(3, 9, 'Polanco', '2017-04-14 18:21:25', '2017-04-14 18:21:25'),
(4, 10, 'Ejemplo durango', '2017-04-24 22:54:46', '2017-04-24 22:54:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividads`
--
ALTER TABLE `actividads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `autorizacions`
--
ALTER TABLE `autorizacions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoriavives`
--
ALTER TABLE `categoriavives`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalledesclubs`
--
ALTER TABLE `detalledesclubs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etapaunos`
--
ALTER TABLE `etapaunos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `promocions`
--
ALTER TABLE `promocions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_marca` (`id_marca`,`id_proyecto`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursals`
--
ALTER TABLE `sucursals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodecomidas`
--
ALTER TABLE `tipodecomidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividads`
--
ALTER TABLE `actividads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT de la tabla `autorizacions`
--
ALTER TABLE `autorizacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `categoriavives`
--
ALTER TABLE `categoriavives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalledesclubs`
--
ALTER TABLE `detalledesclubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `etapaunos`
--
ALTER TABLE `etapaunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `promocions`
--
ALTER TABLE `promocions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `sucursals`
--
ALTER TABLE `sucursals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `tipodecomidas`
--
ALTER TABLE `tipodecomidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;