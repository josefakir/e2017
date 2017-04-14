-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-04-2017 a las 18:46:15
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.0

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividads`
--

INSERT INTO `actividads` (`id`, `id_lead`, `que_hice`, `comentarios`, `que_hare`, `fecha_futura`, `comentarios_futura`, `created_at`, `updated_at`) VALUES
(38, 27, 'Llamada telefónica', 'contactado', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-13 18:53:15', '2017-04-13 18:53:15'),
(39, 27, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-13 18:53:35', '2017-04-13 18:53:35'),
(40, 27, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '0000-00-00 00:00:00', 'comentarios_futura', '2017-04-13 18:53:57', '2017-04-13 18:53:57');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `detalledesclubs`
--

INSERT INTO `detalledesclubs` (`id`, `id_marca`, `id_lead`, `razon_social`, `RFC`, `contacto`, `puesto`, `telefono_1`, `es_celular_1`, `telefono_2`, `es_celular_2`, `email`, `calle`, `no_exterior`, `no_interior`, `referencia`, `latitud`, `longitud`, `tiene_actividad_calidad`, `actividad_de_calidad`, `comentarios`, `created_at`, `updated_at`) VALUES
(9, 16, 27, 'razon_social', 'rfc', 'contacto', 'puesto', '1234567890', 0, '1234567890', 0, 'example@example.com', 'calle', 'no_exterior', 'no_interior', 'referencia', 'latitud', 'longitud', 0, 'Acrílico', 'comentarios', '2017-04-13 18:50:47', '2017-04-13 18:53:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `acronym` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `leads`
--

INSERT INTO `leads` (`id`, `id_marca`, `id_usuario`, `nombre`, `numero_sucursales`, `status`, `tiene_contacto`, `inicio_operaciones`, `created_at`, `updated_at`) VALUES
(27, 16, 3, 'La parrilla de becerra', 9, '9', 1, 1, '2017-04-13 18:50:47', '2017-04-13 19:00:56');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `web`, `resena`, `extracto`, `imagen`, `autor`, `friendlyUrl`, `especial`, `vimeo`, `logoDesclub`, `autorizadaLead`, `inicio_operaciones`, `id_categoria`, `id_categoria_vive`, `id_proyecto`, `id_tipoDeComida`, `created_at`, `updated_at`) VALUES
(16, 'La parrilla de becerra', 'web', '<p>asdf</p>', 'asdf', 'assets/images/Screen Shot 2017-04-12 at 12.03.23 PM.png', 'asdf', 'asdf', 'asdf', 'asdf', 'assets/images/Screen Shot 2017-04-12 at 12.03.23 PM.png', 1, 1, 1, 0, 2, 1, '2017-04-13 18:46:40', '2017-04-13 19:00:56');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `promocions`
--

INSERT INTO `promocions` (`id`, `id_marca`, `id_proyecto`, `efectivo`, `tarjeta`, `promo`, `detalle_promocion`, `restricciones`, `inicio_actividades`, `fin_actividades`, `created_at`, `updated_at`) VALUES
(21, 16, 2, '15', '15', '2x1', 'Unas mollejas gratis en la compra de una cerveza', 'No aplica con otras promociones', '2017-04-13', '2017-04-30', '2017-04-13 19:00:50', '2017-04-13 19:00:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `geolocalicacion_revisada` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sucursals`
--

INSERT INTO `sucursals` (`id`, `id_marca`, `nombre`, `telefono`, `latitud`, `longitud`, `referencia`, `calle`, `no_ext`, `no_int`, `horarios`, `fachada`, `id_estado`, `id_zona`, `restorando`, `restaurantes`, `tuvo_llamada_bienvenida`, `detalle_llamada`, `geolocalicacion_revisada`, `created_at`, `updated_at`) VALUES
(9, 16, 'San jerónimo', '1234567890', 'abc', 'abb', 'ref', 'calle', 'no_ext', 'no_int', 'horarios', '', 1, 3, 'restorando', 'restaurantes', 1, 'Conocen convenio y aplican descuento', 1, '2017-04-14 04:03:23', '2017-04-14 18:23:15'),
(10, 16, 'Santa Fé', '1234567890', 'latitud', 'longitud', '', 'calle', 'no_ext', 'no_int', 'horarios', '', 1, 1, 'restorando', 'restaurantes', 1, 'Desconocen convenio', 1, '2017-04-14 04:03:40', '2017-04-14 18:25:00'),
(11, 16, 'Coapa', '1234567890', 'latitud', 'longitud', '', 'calle', 'no_ext', 'no_int', 'horarios', '', 1, 1, 'restorando', 'restaurantes', 1, 'Conocen convenio y aplican descuento', 1, '2017-04-14 04:03:56', '2017-04-14 18:25:09'),
(12, 16, 'nombre', '1234567890', 'latitud', 'longitud', 'referencia', 'calle', 'no_ext', 'no_int', 'horarios', '', 9, 1, 'restorando', 'restaurantes', 1, 'Conocen convenio y aplican descuento', 1, '2017-04-14 05:33:54', '2017-04-14 18:23:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodecomidas`
--

CREATE TABLE `tipodecomidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `autorizacions`
--
ALTER TABLE `autorizacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `categoriavives`
--
ALTER TABLE `categoriavives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `detalledesclubs`
--
ALTER TABLE `detalledesclubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `promocions`
--
ALTER TABLE `promocions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `sucursals`
--
ALTER TABLE `sucursals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `tipodecomidas`
--
ALTER TABLE `tipodecomidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;