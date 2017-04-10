-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 11-04-2017 a las 01:08:00
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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividads`
--

INSERT INTO `actividads` (`id`, `id_lead`, `que_hice`, `comentarios`, `que_hare`, `fecha_futura`, `comentarios_futura`, `created_at`, `updated_at`) VALUES
(14, 18, 'Llamada telefónica', 'contactado', 'Llamada telefónica', '2017-04-10 15:09:00', 'ejemplo de comentarios', '2017-04-10 22:09:25', '2017-04-10 22:09:25'),
(16, 18, 'Llamada telefónica', 'asdf', 'Llamada telefónica', '2017-04-10 15:26:00', 'asdf', '2017-04-10 22:26:23', '2017-04-10 22:26:23'),
(17, 19, 'Llamada telefónica', 'llame', 'Llamada telefónica', '2017-04-10 16:04:00', 'comentarios', '2017-04-10 23:04:43', '2017-04-10 23:04:43'),
(18, 20, 'Llamada telefónica', 'contactado', 'Alta de establecimiento', '2017-04-12 16:09:00', 'asdf', '2017-04-10 23:09:48', '2017-04-10 23:09:48'),
(19, 21, 'Llamada telefónica', 'contacté', 'Llamada telefónica', '2017-04-10 18:28:00', 'comentarios', '2017-04-11 00:28:03', '2017-04-11 00:28:03'),
(20, 21, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-11 00:31:46', '2017-04-11 00:31:46'),
(21, 21, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-11 00:51:36', '2017-04-11 00:51:36'),
(22, 21, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-11 00:52:03', '2017-04-11 00:52:03'),
(23, 21, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-11 00:58:32', '2017-04-11 00:58:32'),
(24, 20, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-11 01:06:46', '2017-04-11 01:06:46');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `detalledesclubs`
--

INSERT INTO `detalledesclubs` (`id`, `id_marca`, `id_lead`, `razon_social`, `RFC`, `contacto`, `puesto`, `telefono_1`, `es_celular_1`, `telefono_2`, `es_celular_2`, `email`, `calle`, `no_exterior`, `no_interior`, `referencia`, `latitud`, `longitud`, `tiene_actividad_calidad`, `actividad_de_calidad`, `comentarios`, `created_at`, `updated_at`) VALUES
(1, 8, 18, 'Razón social', 'rfc', 'contacto', 'puesto', '1234567890123', 0, '1234567890', 0, 'example@example.com', '', '', '', '', '', '', 0, '0', '', '2017-04-10 21:58:17', '2017-04-10 22:38:18'),
(2, 9, 19, 'razon', 'r4fc', 'conta', 'puest', 'tel', 0, 't', 0, 'a@a.com', '', '', '', '', '', '', 0, '0', '', '2017-04-10 23:03:53', '2017-04-10 23:05:02'),
(3, 11, 20, 'razon_social', 'rfcabcddasdfasdfaasdfasdfasdfasdf', 'contacto', 'puesto', '1234567890', 0, '1234567890', 0, 'example@example.com', 'calle', 'no_exterior', 'no_interior', 'referencia', 'latitud', 'longitud', 0, '', 'comentarios', '2017-04-10 23:09:10', '2017-04-10 23:58:46'),
(4, 12, 21, 'razon social', 'añsdkfjalñs dfkla', 'contacto', 'puesto', '5678765f678', 0, '456787654567', 0, 'asdf@asdf.com', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 1, 'Llamada', 'comentarios', '2017-04-11 00:27:06', '2017-04-11 00:29:51');

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
  `tiene_registro` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `leads`
--

INSERT INTO `leads` (`id`, `id_marca`, `id_usuario`, `nombre`, `numero_sucursales`, `status`, `tiene_contacto`, `tiene_registro`, `created_at`, `updated_at`) VALUES
(18, 8, 1, 'test', 6, '4', 1, 0, '2017-04-10 21:58:17', '2017-04-10 22:45:49'),
(19, 9, 1, 'lead de ejemplo', 9, '4', 1, 0, '2017-04-10 23:03:53', '2017-04-10 23:05:02'),
(20, 11, 1, 'nombre de lead', 9, '9', 1, 0, '2017-04-10 23:09:10', '2017-04-11 01:06:46'),
(21, 12, 1, 'lead cin', 19, '9', 1, 0, '2017-04-11 00:27:06', '2017-04-11 00:58:32');

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
  `id_categoria` int(11) NOT NULL,
  `id_categoria_vive` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `id_tipoDeComida` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `web`, `resena`, `extracto`, `imagen`, `autor`, `friendlyUrl`, `especial`, `vimeo`, `logoDesclub`, `autorizadaLead`, `id_categoria`, `id_categoria_vive`, `id_proyecto`, `id_tipoDeComida`, `created_at`, `updated_at`) VALUES
(8, 'La parrilla de becerra', 'asdf', '<p>asdf</p>', 'asdf', 'assets/images/Darth-Vader-Motorcycle-Helmet-e1444573588761.png', 'Pepe', 'la-parrilla-de-becerra', 'La carne', 'vimeo', 'assets/images/wooden-storm-trooper-helmet-mashup.png', 1, 1, 9, 2, 1, '2017-04-07 18:31:11', '2017-04-09 06:07:01'),
(9, 'Ejemplo', 'web', '', 'extracto', 'assets/images/adolfCajas.jpg', 'autor', 'friendlyUrl', 'especial', 'vimeo', 'assets/images/adolfCajas.jpg', 1, 1, 0, 2, 1, '2017-04-09 07:03:42', '2017-04-09 07:11:55'),
(10, 'Ejemplo 2', 'web', '', 'extracto', 'assets/images/adolfCajas.jpg', 'autor', 'friendlyUrl', 'especial', 'vimeo', 'assets/images/adolfCajas.jpg', 1, 1, 0, 2, 1, '2017-04-09 07:30:59', '2017-04-09 07:32:10'),
(11, 'Ejemplo gus ', 'web', '<p>asdf</p>', 'extracto', 'assets/images/63cbab902b42aa6ecb3fae02db5ed606_memes-de-nino-chino-related-nio-japones-meme_360-240.jpeg', 'autor', 'friendlyUrl', 'especial', 'vimeo', 'assets/images/63cbab902b42aa6ecb3fae02db5ed606_memes-de-nino-chino-related-nio-japones-meme_360-240.jpeg', 1, 1, 0, 2, 1, '2017-04-10 23:08:23', '2017-04-10 23:08:56'),
(12, 'Marca Cin', 'web', '<p>asdf asdf asdf</p>', 'extractoasdfasdf ', 'assets/images/705.jpg', 'autor', 'friendlyUrl', 'especial', 'vimeo', 'assets/images/705.jpg', 1, 2, 0, 2, 1, '2017-04-11 00:25:56', '2017-04-11 00:26:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(2, 'Grupo Medios', '2017-04-06 23:00:56', '2017-04-06 23:00:56');

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
  `calle` varchar(255) COLLATE utf8_bin NOT NULL,
  `no_ext` varchar(255) COLLATE utf8_bin NOT NULL,
  `no_int` varchar(255) COLLATE utf8_bin NOT NULL,
  `horarios` varchar(255) COLLATE utf8_bin NOT NULL,
  `fachada` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_zona` int(11) NOT NULL,
  `restorando` varchar(255) COLLATE utf8_bin NOT NULL,
  `restaurantes` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sucursals`
--

INSERT INTO `sucursals` (`id`, `id_marca`, `nombre`, `telefono`, `latitud`, `longitud`, `calle`, `no_ext`, `no_int`, `horarios`, `fachada`, `id_estado`, `id_zona`, `restorando`, `restaurantes`, `created_at`, `updated_at`) VALUES
(4, 8, 'ejemploasdf', '1234567890', 'latitud', 'longitud', 'calle', 'no_ext', 'no_int', 'horarios', 'assets/images/wooden-storm-trooper-helmet-mashup.png', 1, 0, 'restorando', 'restaurantes', '2017-04-07 20:38:26', '2017-04-07 20:38:54');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `apikey`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'antonio.becerra@grupomedios.com', '5140106451340684a8beddcfae8ccb37', '57cec4137b614c87cb4e24a3d003a3e0', '1', '2017-04-05 00:00:00', '2017-04-05 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `id_estado`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 9, 'Mixcoac', '2017-04-07 20:14:10', '2017-04-07 20:14:10');

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
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `autorizacions`
--
ALTER TABLE `autorizacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sucursals`
--
ALTER TABLE `sucursals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipodecomidas`
--
ALTER TABLE `tipodecomidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;