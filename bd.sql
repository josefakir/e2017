-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-04-2017 a las 01:17:26
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
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividads`
--

INSERT INTO `actividads` (`id`, `id_lead`, `que_hice`, `comentarios`, `que_hare`, `fecha_futura`, `comentarios_futura`, `created_at`, `updated_at`) VALUES
(47, 30, 'Llamada telefónica', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-18 18:11:39', '2017-04-18 18:11:39'),
(48, 30, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-18 18:11:58', '2017-04-18 18:11:58'),
(49, 30, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-18 18:12:23', '2017-04-18 18:12:23'),
(50, 31, 'Llamada telefónica', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-18 18:15:44', '2017-04-18 18:15:44'),
(51, 31, 'Llamada telefónica', 'asdf', 'Llamada telefónica', '2017-04-18 11:37:00', 'asdf', '2017-04-18 18:37:32', '2017-04-18 18:37:32'),
(52, 32, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-18 18:42:33', '2017-04-18 18:42:33');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `detalledesclubs`
--

INSERT INTO `detalledesclubs` (`id`, `id_marca`, `id_lead`, `razon_social`, `RFC`, `contacto`, `puesto`, `telefono_1`, `es_celular_1`, `telefono_2`, `es_celular_2`, `email`, `calle`, `no_exterior`, `no_interior`, `referencia`, `latitud`, `longitud`, `tiene_actividad_calidad`, `actividad_de_calidad`, `comentarios`, `created_at`, `updated_at`) VALUES
(12, 19, 30, 'razon_social', 'rfc', 'contacto', 'puesto', '1234567890', 0, '1234567890', 0, 'example@example.com', 'calle', 'no_exterior', 'no_interior', 'referencia', 'latitud', 'longitud', 0, 'Acrílico', 'comentarios', '2017-04-18 18:11:00', '2017-04-18 18:12:09'),
(13, 20, 31, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '2017-04-18 18:15:20', '2017-04-18 18:15:20'),
(14, 22, 32, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, 'Sticker', 'asdf', '2017-04-18 18:41:55', '2017-04-18 18:43:59');

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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `leads`
--

INSERT INTO `leads` (`id`, `id_marca`, `id_usuario`, `nombre`, `numero_sucursales`, `status`, `tiene_contacto`, `inicio_operaciones`, `created_at`, `updated_at`) VALUES
(30, 19, 3, 'lead', 1, '9', 1, 1, '2017-04-18 18:11:00', '2017-04-18 18:13:45'),
(31, 20, 3, 'Azdf', 1, '9', 0, 0, '2017-04-18 18:15:20', '2017-04-18 18:37:32'),
(32, 22, 3, 'nombre', 1234567, '8', 0, 0, '2017-04-18 18:41:55', '2017-04-18 18:42:33');

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
  `comentarios` text COLLATE utf8_bin NOT NULL,
  `donde_viste` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `llamadas`
--

INSERT INTO `llamadas` (`id`, `id_proyecto`, `tipo`, `nombre`, `paterno`, `materno`, `tipo_tarjeta_seguro`, `calle`, `no_ext`, `no_int`, `cp`, `referencia`, `tipo_tel_1`, `tel_1`, `tipo_tel_2`, `tel_2`, `email`, `marca`, `sucursal`, `id_marca`, `id_categoria`, `comentarios`, `donde_viste`, `created_at`, `updated_at`) VALUES
(1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '2017-04-19 19:27:51', '2017-04-19 19:27:51'),
(2, 2, 'Normal', 'nombre', 'paterno', 'materno', '', 'calle', 'no_ext', 'no_int', 'cp', 'referencia', '', '1234567890', '', '1234567890', 'example@example.com', '', 'sucursal', 19, 1, '<p>ASDF</p>', 'App', '2017-04-19 19:32:06', '2017-04-19 19:32:06');

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
  `id_proyecto` int(11) NOT NULL,
  `id_tipoDeComida` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `web`, `resena`, `extracto`, `imagen`, `autor`, `friendlyUrl`, `especial`, `vimeo`, `logoDesclub`, `autorizadaLead`, `inicio_operaciones`, `id_categoria`, `id_categoria_vive`, `id_proyecto`, `id_tipoDeComida`, `created_at`, `updated_at`) VALUES
(19, 'Marca Cin', 'web', '', 'extracto', 'assets/images/705.jpg', 'autor', 'friendlyUrl', 'especial', 'vimeo', '', 1, 1, 1, 0, 2, 1, '2017-04-18 18:09:24', '2017-04-18 18:13:45'),
(20, 'nombre', 'web', '', 'extracto', 'assets/images/705.jpg', 'autor', 'friendlyUrl', 'especial', 'vimeo', '', 1, 0, 1, 0, 2, 1, '2017-04-18 18:14:53', '2017-04-18 18:15:11'),
(21, 'nombrerechazar', 'web', '', 'extracto', 'assets/images/705.jpg', 'autor', 'friendlyUrl', 'especial', 'vimeo', '', 0, 0, 1, 0, 2, 1, '2017-04-18 18:33:10', '2017-04-18 18:33:10'),
(22, 'nombre', 'web', '', 'extracto', 'assets/images/705.jpg', 'autor', 'friendlyUrl', 'especial', 'vimeo', '', 1, 0, 1, 0, 2, 1, '2017-04-18 18:41:02', '2017-04-18 18:41:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `promocions`
--

INSERT INTO `promocions` (`id`, `id_marca`, `id_proyecto`, `efectivo`, `tarjeta`, `promo`, `detalle_promocion`, `restricciones`, `inicio_actividades`, `fin_actividades`, `created_at`, `updated_at`) VALUES
(25, 19, 2, '12', '12', '12', '12', '12', '2017-04-18', '2017-04-18', '2017-04-18 18:12:58', '2017-04-18 18:12:58'),
(27, 19, 3, '12', '12', '12', '12', '12', '2017-04-18', '2017-04-29', '2017-04-18 18:13:32', '2017-04-18 18:13:32');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sucursals`
--

INSERT INTO `sucursals` (`id`, `id_marca`, `nombre`, `telefono`, `latitud`, `longitud`, `referencia`, `calle`, `no_ext`, `no_int`, `horarios`, `fachada`, `id_estado`, `id_zona`, `restorando`, `restaurantes`, `tuvo_llamada_bienvenida`, `detalle_llamada`, `conoce_vb`, `escala_info`, `motivo_desconoce`, `reforzo_info`, `material_pop`, `calcomanias`, `acrilicos`, `comunicados_desclub`, `comunicados_bbva`, `reloj_colgante`, `calcomanias_desclub`, `tarjetas_desclub`, `nombre_atendio`, `cargo_atendio`, `geolocalicacion_revisada`, `created_at`, `updated_at`) VALUES
(17, 19, 'nombre', '1234567890', 'latitud', 'longitud', 'referencia', 'calle', 'no_ext', 'no_int', 'horarios', '', 1, 1, 'restorando', 'restaurantes', 1, 'Conocen convenio y aplican descuento', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '2017-04-18 18:09:39', '2017-04-19 17:15:07'),
(18, 19, 'nombre 2', '1234567890', 'latitud', 'longitud', 'referencia', 'calle', 'no_ext', 'no_int', 'horarios', '', 1, 1, 'restorando', 'restaurantes', 1, 'Conocen convenio y aplican descuento', 1, 1, 'Sí', 1, 1, 1, 1, 1, 1, 1, 1, 2, 'pepe', 'Encargado', 1, '2017-04-18 18:09:51', '2017-04-19 17:15:02');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `apikey`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'antonio.becerra@grupomedios.com', '5140106451340684a8beddcfae8ccb37', '57cec4137b614c87cb4e24a3d003a3e0', '1', '2017-04-05 00:00:00', '2017-04-05 00:00:00'),
(2, 'cin', '5140106451340684a8beddcfae8ccb37', '', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'afiliador', '5140106451340684a8beddcfae8ccb37', '', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'dondeir', '5140106451340684a8beddcfae8ccb37', '', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `id_estado`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 9, 'Mixcoac', '2017-04-07 20:14:10', '2017-04-07 20:14:10'),
(3, 9, 'Polanco', '2017-04-14 18:21:25', '2017-04-14 18:21:25');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `promocions`
--
ALTER TABLE `promocions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sucursals`
--
ALTER TABLE `sucursals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `tipodecomidas`
--
ALTER TABLE `tipodecomidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;