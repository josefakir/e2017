-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-04-2017 a las 03:53:23
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `establecimientos2017`
--

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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `leads`
--

INSERT INTO `leads` (`id`, `id_marca`, `id_usuario`, `nombre`, `numero_sucursales`, `status`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 'Lead la parrilla', 6, '2', '2017-04-08 00:00:00', '2017-04-09 06:59:53'),
(2, 9, 1, 'lead de ejemplo', 5, '2', '2017-04-09 07:28:06', '2017-04-09 07:28:21'),
(6, 10, 1, 'asdf', 4, '3', '2017-04-09 07:32:27', '2017-04-09 07:33:07');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `web`, `resena`, `extracto`, `imagen`, `autor`, `friendlyUrl`, `especial`, `vimeo`, `logoDesclub`, `autorizadaLead`, `id_categoria`, `id_categoria_vive`, `id_proyecto`, `id_tipoDeComida`, `created_at`, `updated_at`) VALUES
(8, 'La parrilla de becerra', 'asdf', '<p>asdf</p>', 'asdf', 'assets/images/Darth-Vader-Motorcycle-Helmet-e1444573588761.png', 'Pepe', 'la-parrilla-de-becerra', 'La carne', 'vimeo', 'assets/images/wooden-storm-trooper-helmet-mashup.png', 1, 1, 9, 2, 1, '2017-04-07 18:31:11', '2017-04-09 06:07:01'),
(9, 'Ejemplo', 'web', '', 'extracto', 'assets/images/adolfCajas.jpg', 'autor', 'friendlyUrl', 'especial', 'vimeo', 'assets/images/adolfCajas.jpg', 1, 1, 0, 2, 1, '2017-04-09 07:03:42', '2017-04-09 07:11:55'),
(10, 'Ejemplo 2', 'web', '', 'extracto', 'assets/images/adolfCajas.jpg', 'autor', 'friendlyUrl', 'especial', 'vimeo', 'assets/images/adolfCajas.jpg', 1, 1, 0, 2, 1, '2017-04-09 07:30:59', '2017-04-09 07:32:10');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `id_estado`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 9, 'Mixcoac', '2017-04-07 20:14:10', '2017-04-07 20:14:10');

--
-- Índices para tablas volcadas
--

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
-- AUTO_INCREMENT de la tabla `autorizacions`
--
ALTER TABLE `autorizacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `sucursals`
--
ALTER TABLE `sucursals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipodecomidas`
--
ALTER TABLE `tipodecomidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
