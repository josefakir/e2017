-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-05-2017 a las 11:18:38
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
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `actividads`
--

INSERT INTO `actividads` (`id`, `id_lead`, `que_hice`, `comentarios`, `que_hare`, `fecha_futura`, `comentarios_futura`, `created_at`, `updated_at`) VALUES
(71, 38, 'Llamada telefónica', 'mandar convenio', 'Tuve una reunión', '2017-05-11 13:02:00', 'llevar material pop', '2017-05-03 12:06:16', '2017-05-03 12:06:16'),
(72, 38, 'Envio de correo', 'solicitud de fotos ', 'Llamada telefónica', '2017-05-11 13:07:00', 'dassasas', '2017-05-03 12:08:34', '2017-05-03 12:08:34'),
(73, 38, 'Alta de establecimiento', 'se dieron de alta suc participantes', 'Alta de establecimiento', '2017-05-04 13:15:00', 'dasda', '2017-05-03 12:16:37', '2017-05-03 12:16:37'),
(74, 39, 'Llamada telefónica', 'setret', 'Llamada telefónica', '2017-05-10 14:00:00', 'gfgfdgdf', '2017-05-03 13:00:19', '2017-05-03 13:00:19'),
(75, 39, 'Alta de establecimiento', 'sdvdz', 'Alta de establecimiento', '2017-05-10 14:15:00', 'ssfsf', '2017-05-03 13:15:21', '2017-05-03 13:15:21'),
(76, 39, 'Alta de establecimiento', 'sdvdz', 'Alta de establecimiento', '2017-05-10 14:15:00', 'ssfsf', '2017-05-03 13:15:48', '2017-05-03 13:15:48'),
(77, 40, 'Llamada telefónica', 'aasdf', 'Alta de establecimiento', '2017-05-04 11:20:00', 'asdf', '2017-05-04 09:17:35', '2017-05-04 09:17:35'),
(78, 40, 'Llamada telefónica', 'aasdf', 'Alta de establecimiento', '2017-05-04 10:26:00', 'asdf', '2017-05-04 09:26:23', '2017-05-04 09:26:23'),
(79, 40, 'Alta de establecimiento', 'comentarios', 'Alta de establecimiento', '2017-05-04 10:26:00', 'comentarios_futura', '2017-05-04 09:27:03', '2017-05-04 09:27:03'),
(80, 40, 'Llamada telefónica', 'asdf', 'Llamada telefónica', '2017-05-04 13:27:00', 'asdf', '2017-05-04 09:28:17', '2017-05-04 09:28:17'),
(81, 41, 'Llamada telefónica', 'le llame y le gusto', 'Llamada telefónica', '2017-05-04 17:30:00', 'llamale a las 530', '2017-05-04 15:31:11', '2017-05-04 15:31:11'),
(82, 41, 'Alta de establecimiento', 'ñaskldfj', 'Alta de establecimiento', '2017-05-04 16:32:00', 'sdfghj', '2017-05-04 15:33:00', '2017-05-04 15:33:00'),
(83, 41, 'Alta de establecimiento', 'asdfghjkl', 'Alta de establecimiento', '2017-05-04 16:33:00', 'dfghjk', '2017-05-04 15:34:34', '2017-05-04 15:34:34'),
(84, 0, '', '', '', '0000-00-00 00:00:00', '', '2017-05-08 17:18:16', '2017-05-08 17:18:16');

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(7, 'ACT. RECREATIVAS', '2017-04-28 09:21:39', '2017-04-28 09:21:39'),
(8, 'AUTOMOTRIZ', '2017-04-28 09:21:46', '2017-04-28 09:21:46'),
(9, 'BARES', '2017-04-28 09:21:52', '2017-04-28 09:21:52'),
(10, 'BELLEZA', '2017-04-28 09:21:59', '2017-04-28 09:21:59'),
(11, 'CAFETERÍA', '2017-04-28 09:22:06', '2017-04-28 09:22:06'),
(12, 'CALZADO', '2017-04-28 09:22:12', '2017-04-28 09:22:12'),
(13, 'CLÍNICAS', '2017-04-28 09:25:10', '2017-04-28 09:25:10'),
(14, 'DECORACIÓN', '2017-04-28 09:25:17', '2017-04-28 09:25:17'),
(15, 'ESCUELA/UNIVERSIDADES', '2017-04-28 09:25:24', '2017-04-28 09:25:24'),
(16, 'ESPACIO PÚBLICO', '2017-04-28 09:25:32', '2017-04-28 09:25:32'),
(17, 'FARMACIAS', '2017-04-28 09:25:39', '2017-04-28 09:25:39'),
(18, 'FITNESS', '2017-04-28 09:25:53', '2017-04-28 09:25:53'),
(19, 'FLORERÍA', '2017-04-28 09:26:04', '2017-04-28 09:26:04'),
(20, 'HELADERÍAS', '2017-04-28 09:26:09', '2017-04-28 09:26:09'),
(21, 'HOTELES', '2017-04-28 09:26:15', '2017-04-28 09:26:15'),
(22, 'JOYERÍAS', '2017-04-28 09:26:24', '2017-04-28 09:26:24'),
(23, 'JUGUETERÍAS', '2017-04-28 09:26:32', '2017-04-28 09:26:32'),
(24, 'LABORATORIOS', '2017-04-28 09:26:39', '2017-04-28 09:26:39'),
(25, 'LIBRERÍAS', '2017-04-28 09:26:45', '2017-04-28 09:26:45'),
(26, 'MASCOTAS', '2017-04-28 09:26:50', '2017-04-28 09:26:50'),
(27, 'MENSAJERÍA', '2017-04-28 09:26:58', '2017-04-28 09:26:58'),
(28, 'MUSEOS', '2017-04-28 09:27:07', '2017-04-28 09:27:07'),
(29, 'ÓPTICAS', '2017-04-28 09:27:18', '2017-04-28 09:27:18'),
(30, 'PAPELERÍAS', '2017-04-28 09:27:26', '2017-04-28 09:27:26'),
(31, 'PASTELERÍAS', '2017-04-28 09:27:33', '2017-04-28 09:27:33'),
(32, 'PIZZERÍAS', '2017-04-28 09:27:39', '2017-04-28 09:27:39'),
(33, 'RESTAURANTES', '2017-04-28 09:27:44', '2017-04-28 09:27:44'),
(34, 'ROPA', '2017-04-28 09:27:54', '2017-04-28 09:27:54'),
(35, 'SPA', '2017-04-28 09:28:03', '2017-04-28 09:28:03'),
(36, 'TAQUERÍAS', '2017-04-28 09:28:09', '2017-04-28 09:28:09'),
(37, 'TEATROS', '2017-04-28 09:28:16', '2017-04-28 09:28:16'),
(38, 'TECNOLOGÍA', '2017-04-28 09:28:22', '2017-04-28 09:28:22'),
(39, 'TINTORERÍAS', '2017-04-28 09:28:27', '2017-04-28 09:28:27'),
(40, 'TURISMO', '2017-04-28 09:28:34', '2017-04-28 09:28:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriavives`
--

CREATE TABLE `categoriavives` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `categoriavives`
--

INSERT INTO `categoriavives` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(3, 'VIVE SABORES', '2017-04-28 09:28:55', '2017-04-28 09:28:55'),
(4, 'VIVE BIENESTAR', '2017-04-28 09:29:01', '2017-04-28 09:29:01'),
(5, 'VIVE PLACERES', '2017-04-28 09:29:13', '2017-04-28 09:29:13'),
(6, 'VIVE IDEAS', '2017-04-28 09:29:19', '2017-04-28 09:29:19'),
(7, 'VIVE SOLUCIONES', '2017-04-28 09:29:24', '2017-04-28 09:29:24');

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `detalledesclubs`
--

INSERT INTO `detalledesclubs` (`id`, `id_marca`, `id_lead`, `razon_social`, `RFC`, `contacto`, `puesto`, `telefono_1`, `es_celular_1`, `telefono_2`, `es_celular_2`, `email`, `calle`, `no_exterior`, `no_interior`, `referencia`, `latitud`, `longitud`, `tiene_actividad_calidad`, `actividad_de_calidad`, `comentarios`, `created_at`, `updated_at`) VALUES
(20, 32, 38, 'Kidzania Mexico Sa De Cv', 'KME940630DR2', 'Cynthya Luna', 'Mkt', '5591404050', 0, '5591403950', 0, 'cluna@desclub.com.mx', 'Vasco de Quiroga', '3800', '1', '', '19.3597647', '-99.2748733', 1, 'Acrílico', 'solo recibe acrilicos', '2017-05-03 12:00:58', '2017-05-03 12:11:17'),
(21, 34, 39, 'Ice Station Pista De Hielo', 'lklkom', 'ferwfaw', 'sfefas', '5567267111', 0, '', 0, 'info@desclub.com.mx', 'Av. Insurgentes Sur', '4303', '', '', '19.2796545', '-99.1719001', 1, 'Reloj', 'wfesfsd', '2017-05-03 12:59:42', '2017-05-03 13:02:22'),
(22, 28, 40, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '2017-05-04 09:17:04', '2017-05-04 09:17:04'),
(23, 30, 41, 'bla', 'bal', 'bla', 'bla', 'bla', 0, 'bla', 0, 'a@a.com', '', 'dfgh', 'fgh', 'fgh', 'jgfh', 'fgh', 1, 'Ministicker', 'ghjkl', '2017-05-04 15:30:04', '2017-05-04 15:33:46'),
(24, 33, 43, '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', 0, '', '', '2017-05-08 15:48:59', '2017-05-08 15:48:59');

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
(9, 'Ciudad de México', 'CDMX'),
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
-- Estructura de tabla para la tabla `etapados`
--

CREATE TABLE `etapados` (
  `id` int(11) NOT NULL,
  `id_ruta` int(11) NOT NULL,
  `encargado_conoce` tinyint(1) NOT NULL,
  `porque_no_conoce` varchar(255) COLLATE utf8_bin NOT NULL,
  `cual_conoce` text COLLATE utf8_bin NOT NULL,
  `da_a_conocer` tinyint(1) NOT NULL,
  `porque_no_da_a_conocer` varchar(255) COLLATE utf8_bin NOT NULL,
  `cuantas_tarjetas` varchar(255) COLLATE utf8_bin NOT NULL,
  `proporciona_pop` tinyint(1) NOT NULL,
  `porque_no_proporciona_pop` varchar(255) COLLATE utf8_bin NOT NULL,
  `no_acrilicos` int(11) NOT NULL,
  `coloco_acrilicos` tinyint(1) NOT NULL,
  `no_calcomanias` int(11) NOT NULL,
  `coloco_calcomanias` tinyint(1) NOT NULL,
  `no_com_desclub` int(11) NOT NULL,
  `coloco_com_desclub` tinyint(1) NOT NULL,
  `no_com_bbva` int(11) NOT NULL,
  `coloco_com_bbva` tinyint(1) NOT NULL,
  `no_reloj` int(11) NOT NULL,
  `coloco_reloj` tinyint(1) NOT NULL,
  `capacitaste` tinyint(1) NOT NULL,
  `porque_no_capacitaste` varchar(255) COLLATE utf8_bin NOT NULL,
  `proyectos_capacitaste` text COLLATE utf8_bin NOT NULL,
  `banco_adquiriente` varchar(255) COLLATE utf8_bin NOT NULL,
  `proporciona_afiliacion` tinyint(1) NOT NULL,
  `no_afiliacion` varchar(255) COLLATE utf8_bin NOT NULL,
  `c1_nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `c1_puesto` varchar(255) COLLATE utf8_bin NOT NULL,
  `c1_tel` varchar(255) COLLATE utf8_bin NOT NULL,
  `c1_correo` varchar(255) COLLATE utf8_bin NOT NULL,
  `c1_forma_contacto` varchar(255) COLLATE utf8_bin NOT NULL,
  `c2_nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `c2_puesto` varchar(255) COLLATE utf8_bin NOT NULL,
  `c2_tel` varchar(255) COLLATE utf8_bin NOT NULL,
  `c2_correo` varchar(255) COLLATE utf8_bin NOT NULL,
  `c2_forma_contacto` varchar(255) COLLATE utf8_bin NOT NULL,
  `c3_nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `c3_puesto` varchar(255) COLLATE utf8_bin NOT NULL,
  `c3_tel` varchar(255) COLLATE utf8_bin NOT NULL,
  `c3_correo` varchar(255) COLLATE utf8_bin NOT NULL,
  `c3_forma_contacto` varchar(255) COLLATE utf8_bin NOT NULL,
  `latitud` varchar(100) COLLATE utf8_bin NOT NULL,
  `longitud` varchar(100) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `etapados`
--

INSERT INTO `etapados` (`id`, `id_ruta`, `encargado_conoce`, `porque_no_conoce`, `cual_conoce`, `da_a_conocer`, `porque_no_da_a_conocer`, `cuantas_tarjetas`, `proporciona_pop`, `porque_no_proporciona_pop`, `no_acrilicos`, `coloco_acrilicos`, `no_calcomanias`, `coloco_calcomanias`, `no_com_desclub`, `coloco_com_desclub`, `no_com_bbva`, `coloco_com_bbva`, `no_reloj`, `coloco_reloj`, `capacitaste`, `porque_no_capacitaste`, `proyectos_capacitaste`, `banco_adquiriente`, `proporciona_afiliacion`, `no_afiliacion`, `c1_nombre`, `c1_puesto`, `c1_tel`, `c1_correo`, `c1_forma_contacto`, `c2_nombre`, `c2_puesto`, `c2_tel`, `c2_correo`, `c2_forma_contacto`, `c3_nombre`, `c3_puesto`, `c3_tel`, `c3_correo`, `c3_forma_contacto`, `latitud`, `longitud`, `created_at`, `updated_at`) VALUES
(5, 11, 0, 'dfghj', 's:0:"";', 1, '', '10-20', 1, '', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', 'a:2:{i:0;s:5:"honda";i:1;s:5:"lexus";}', 'BBVA', 1, '12345678', '', 'Seleccione', '', '', 'Seleccione', '', 'Seleccione', '', '', 'Seleccione', '', 'Seleccione', '', '', 'Seleccione', '', '', '2017-05-04 16:11:09', '2017-05-04 16:11:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapatres`
--

CREATE TABLE `etapatres` (
  `id` int(11) NOT NULL,
  `id_ruta` int(11) NOT NULL,
  `tipo_foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `latitud` varchar(100) COLLATE utf8_bin NOT NULL,
  `longitud` varchar(100) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `etapatres`
--

INSERT INTO `etapatres` (`id`, `id_ruta`, `tipo_foto`, `descripcion`, `foto`, `latitud`, `longitud`, `created_at`, `updated_at`) VALUES
(6, 11, '', 'sdfghjk', 'assets/images/testigos/20170504041201logotipo.png', '', '', '2017-05-04 16:12:01', '2017-05-04 16:12:01');

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
  `latitud` varchar(100) COLLATE utf8_bin NOT NULL,
  `longitud` varchar(100) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `etapaunos`
--

INSERT INTO `etapaunos` (`id`, `id_ruta`, `pasaje`, `transportes`, `status_establecimiento`, `calc_desclub`, `cual_calc_desc`, `calc_otras`, `cual_calc_otras`, `conoce_programa`, `cual_programa`, `latitud`, `longitud`, `created_at`, `updated_at`) VALUES
(13, 11, 0.00, 's:7:"s:0:"";";', 'Abierto', 1, 'a:1:{i:0;s:5:"honda";}', 1, 'sdfgh', 0, 's:0:"";', '', '', '2017-05-04 16:08:53', '2017-05-04 16:08:53');

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `leads`
--

INSERT INTO `leads` (`id`, `id_marca`, `id_usuario`, `nombre`, `numero_sucursales`, `status`, `tiene_contacto`, `inicio_operaciones`, `created_at`, `updated_at`) VALUES
(38, 32, 3, 'Kidzania Santa Fe', 3, '9', 1, 1, '2017-05-03 12:00:58', '2017-05-03 12:33:41'),
(39, 34, 3, 'icedome', 1, '9', 0, 1, '2017-05-03 12:59:42', '2017-05-04 16:02:26'),
(40, 28, 1, 'Al andalus', 10, '4', 0, 0, '2017-05-04 09:17:04', '2017-05-04 09:28:17'),
(41, 30, 1, 'lead pepe', 19, '9', 1, 1, '2017-05-04 15:30:04', '2017-05-04 15:35:56'),
(43, 33, 1, 'Ejemplo de lead pp', 123, '2', 0, 0, '2017-05-08 15:48:59', '2017-05-10 10:17:35');

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `llamadas`
--

INSERT INTO `llamadas` (`id`, `id_proyecto`, `tipo`, `nombre`, `paterno`, `materno`, `tipo_tarjeta_seguro`, `calle`, `no_ext`, `no_int`, `cp`, `referencia`, `tipo_tel_1`, `tel_1`, `tipo_tel_2`, `tel_2`, `email`, `marca`, `sucursal`, `id_marca`, `id_categoria`, `fecha_visita`, `comentarios`, `donde_viste`, `status`, `acuerdo`, `created_at`, `updated_at`) VALUES
(26, 10, 'Afiliar establecimiento', 'Teresa', 'Balderas', 'Carrillo', '', 'coahuila ', '70', '70', '04280', 'cerca de soriana', 'Normal', '91404096', '', '', 'mayteve89@hotmail.com', 'GOMITAS', 'CONDESA', 0, 33, '0000-00-00', '<p>COMIDA CHATARRA</p>', 'Página Web', '0', '', '2017-05-02 12:33:03', '2017-05-02 12:33:03'),
(27, 11, 'Queja Establecimiento', 'Teresa ', 'Balderas', 'Carrillo', 'Infinite', '', '', '', '', '', 'Lada', '0193814253640', '', '', 'mayteve89@hotmail.com', '', 'coyoacán', 29, 0, '2017-05-01', '<p>no respetaron descuento</p>', 'App', '2', '3', '2017-05-02 12:36:19', '2017-05-02 12:41:09'),
(28, 10, 'Información Plataforma', 'Teresa', 'Balderas', 'Carrillo', '', 'palmas ', '731', '1104', '11000', 'frenta a inbursa', '044', '0445585330996', 'Normal', '91404096', 'mayteve89@hotmail.com', 'carls jr', 'colima', 0, 33, '0000-00-00', '<p>desea conocer el descuento</p>', 'App', '0', '', '2017-05-02 12:49:42', '2017-05-02 12:49:42'),
(29, 8, 'Queja Establecimiento', 'JOSE ANTONIO', 'BECERRA', 'ROMERO', 'Auto - Seguro', '', '', '', '', '', 'Normal', '5512952409', '', '', 'antonio.becerra@grupomedios.com', '', 'palmas', 30, 0, '2017-05-04', '<p>no hicieron valido mi descuento</p>', 'App', '1', '', '2017-05-04 15:44:03', '2017-05-04 15:44:03'),
(30, 8, 'Queja Establecimiento', 'nombre', 'paterno', 'materno', 'Auto - Seguro', 'calle', 'no_ext', 'no_int', 'cp', 'referencia', 'Normal', '1234567890', 'Normal', '1234567890', 'antonio.becerra@grupomedios.com', 'marca', 'sucursal', 32, 7, '0000-00-00', '', 'App', '1', '', '2017-05-08 11:19:37', '2017-05-08 11:19:37');

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
  `taxonomias` text COLLATE utf8_bin NOT NULL,
  `importancia` varchar(100) COLLATE utf8_bin NOT NULL,
  `presencia` varchar(100) COLLATE utf8_bin NOT NULL,
  `comentarios` text COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `web`, `resena`, `extracto`, `imagen`, `autor`, `friendlyUrl`, `especial`, `vimeo`, `logoDesclub`, `autorizadaLead`, `inicio_operaciones`, `id_categoria`, `id_categoria_vive`, `id_tipoDeComida`, `taxonomias`, `importancia`, `presencia`, `comentarios`, `created_at`, `updated_at`) VALUES
(27, 'Puerto Gustavia restaurante playero en Insurgentes Surs', 'https://www.facebook.com/puertogustavia/', '<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">La fachada del<strong>&nbsp;restaurante Puerto Gustavia</strong>&nbsp;resalta a unos metros del cruce de&nbsp;<strong>Insurgentes Sur</strong>&nbsp;con la calle de Juventino Rosas, por los decorados de r&uacute;stica madera que se aprecian en sus dos niveles y la techumbre de paja, a manera de una enorme palapa playera levantada en los linderos de la&nbsp;<strong>colonia Florida</strong>.</p>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;"><img style="width: 741px; margin: 10px 0px;" title="Image: https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-07.jpg" src="https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-07.jpg" /></p>\r\n<h2 style="width: 718.766px; line-height: 27px; float: left; font-size: 25px; margin: 0px 0px 20px; padding: 0px 10px; color: #161515; font-family: ''Quattrocento Sans'', sans-serif;">Puerto Gustavia restaurante con carta amplia en mariscos</h2>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">Su relajada atm&oacute;sfera ayuda al comensal a disfrutar de su<strong>&nbsp;carta de pescados y mariscos</strong>.&nbsp;<strong>Ostiones&nbsp;</strong>en su concha y&nbsp;<strong>almejas</strong>&nbsp;chocolatas vivas se despachan a las mesas, sin necesidad de trasladarse hasta la orilla del mar; tampoco faltan los&nbsp;<strong>cocteles</strong>,<strong>&nbsp;tostadas</strong>&nbsp;y<strong>&nbsp;tacos</strong>&nbsp;de diversas alternativas, para abrir boca, o bien para quienes deseen comer algo ligero.</p>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;"><img style="width: 741px; margin: 10px 0px;" title="Image: https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-01.jpg" src="https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-01.jpg" /></p>\r\n<h3 style="width: 741px; float: left; font-size: 20px; font-family: Lato, sans-serif; color: #161515;">Platillos marinos con toque extra en su men&uacute;</h3>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">Para una comida en toda forma con sello marino, cuentan con el solicitado&nbsp;<strong>p&aacute;mpano a la sal</strong>,<strong>&nbsp;pulpo a las brasas</strong>,&nbsp;<strong>salm&oacute;n</strong>,&nbsp;<strong>hamburguesa de at&uacute;n</strong>, cola de<strong>&nbsp;langosta</strong>,<strong>&nbsp;lomo de huachinango</strong>&nbsp;y el mismo huachinango entero, concebido para compartir entre dos personas. Tambi&eacute;n destaca su&nbsp;<strong>parrillada especial de mariscos</strong>, compuesta por un par de&nbsp;<strong>camarones jumbo</strong>, otro par de callos de hacha, 400 gramos de pulpo y una cola de langosta.</p>\r\n<h4 style="float: left; width: 741px; color: #161515; font-family: ''Quattrocento Sans'', sans-serif;"><img style="width: 741px; margin: 10px 0px;" title="Image: https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-02.jpg" src="https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-02.jpg" /></h4>\r\n<h4 style="float: left; width: 741px; color: #161515; font-family: ''Quattrocento Sans'', sans-serif;">Pescados y mariscos hechos a la italiana&nbsp;</h4>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">Una particularidad de la oferta culinaria del lugar, es contar a su vez con&nbsp;<strong>pizzas</strong>,&nbsp;<strong>empanadas</strong>&nbsp;y&nbsp;<strong>pastas</strong>, preparadas con diversas opciones de pescados y mariscos, como la&nbsp;<strong>pizza Gustavia</strong>, la cual lleva camarones, calamares, jitomate, aceituna negra, pi&ntilde;a y perejil.</p>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;"><img style="width: 741px; margin: 10px 0px;" title="Image: https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-03.jpg" src="https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-03.jpg" /></p>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">Los fines de semana su ambiente es m&aacute;s familiar, a diferencia de los d&iacute;as laborables cuando sus mesas suelen ocuparlas las personas que laboran en los alrededores.</p>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;"><img style="width: 741px; margin: 10px 0px;" title="Image: https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-05.jpg" src="https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-05.jpg" /></p>\r\n<h5 style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif;">Postres y bebidas uruguayas</h5>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">Puerto Gustavia restaurante no s&oacute;lo se encuentra al lado de una sucursal de Don Asado, sino que forma parte del mismo<strong>&nbsp;grupo restaurantero</strong>, famoso por sus cortes al estilo uruguayo; de ah&iacute; que ofrezcan, preparada con fresas, la<strong>&nbsp;chaja&nbsp;</strong>(tradicional postre del pa&iacute;s sudamericano), y tengan en su carta de bebidas&nbsp;<strong>cerveza La Patricia</strong>, importada de Uruguay.&nbsp;</p>', 'Puerto Gustavia restaurante de pescados y mariscos con un menú culinario amplio en pizzas, empanadas y pastas, además de postres y cervezas uruguayas', 'assets/images/14928087281.jpg', 'Pepe', 'puerto-gustavia-restaurante-playero-en-insurgentes-sur', 'Pertenece al grupo restaurantero de Don Asado, caracterizado por su comida de buena calidad, abundantes porciones y precios competitivos.', 'vimeo', 'assets/images/14928087281.jpg', 0, 0, 33, 0, 17, 'ASDF,ASDF,ASDF,hola', 'A', '', '', '2017-04-28 10:05:54', '2017-05-09 14:50:30'),
(28, 'Restaurante Al Andalus en Nápoles y Centro Histórico', 'https://www.facebook.com/alandalusmexico/', '<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Pese a haber abierto sus puertas apenas en el a&ntilde;o de 1994, la atm&oacute;sfera que se respira en el&nbsp;<strong>restaurante Al Andalus&nbsp;</strong>parece remontarse a las primeras d&eacute;cadas del siglo anterior, cuando la comunidad &aacute;rabe lleg&oacute; al&nbsp;<strong>Centro Hist&oacute;rico</strong>, para abrir sus negocios que, a la fecha, conservan en el coraz&oacute;n de la ciudad, misma que enriquecieron con su cultura.</p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img src="https://www.dondeir.com/wp-content/uploads/2017/02/restaurante-al-andalus-en-napoles-y-centro-historico-05.jpg" alt="" /></p>\r\n<h2 style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Restaurante Al Andalus: comunidad &aacute;rabe a M&eacute;xico&nbsp;</h2>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Sobre&nbsp;<strong>Mesones</strong>, calle caracterizada por las tiendas de productos papeleros que tiene en ambos lados de su acera, se encuentra el inmueble de dos niveles del siglo XVII ocupado por este restaurante, al que suele acudir los integrantes de la&nbsp;<strong>comunidad &aacute;rabe</strong>&nbsp;que, pese a radicar por otros rumbos de la ciudad, a la fecha, todav&iacute;a operan sus negocios en el barrio, y que ocupan la mesas igual que el resto de los vecinos y los amantes de la&nbsp;<strong>gastronom&iacute;a &aacute;rabe</strong>, que ubican al restaurante entre los mejores de su tipo en la Ciudad de M&eacute;xico.</p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img src="https://www.dondeir.com/wp-content/uploads/2017/02/restaurante-al-andalus-en-napoles-y-centro-historico-02.jpg" alt="" /></p>\r\n<h3 style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Comida con ex&oacute;ticos platillos de la gastronom&iacute;a &aacute;rabe&nbsp;</h3>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Para ordenar de comer, no hay duda: la llamada<strong>&nbsp;"mesa libanesa"</strong>&nbsp;ofrece, con su docena de platillos tradicionales, un muestrario abundante de la<strong>&nbsp;gastronom&iacute;a del Medio Oriente</strong>.&nbsp;</p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Platos de<strong>&nbsp;<em>jocoque</em>&nbsp;seco</strong>,&nbsp;<strong><em>tabule</em></strong>&nbsp;(ensalada elaborada con perejil, trigo y jitomate, entre sus ingredientes principales),&nbsp;<strong>garbanza</strong>&nbsp;y&nbsp;<strong>berenjena</strong>&nbsp;molidas, arroz con lentejas y arroz con fideos,<strong>&nbsp;tacos de col&nbsp;</strong>rellenos de carne de cordero, lo mismo que sus&nbsp;<strong>rollos de hojas de parra</strong>;&nbsp;<em><strong>keppe</strong></em>&nbsp;<strong>crudo</strong>&nbsp;(como carne t&aacute;rtara) y&nbsp;<strong><em>keppe</em>&nbsp;bola</strong>&nbsp;(empanizada y frita), entre otros, llegan a la mesa para recubrirla.</p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img src="https://www.dondeir.com/wp-content/uploads/2017/02/restaurante-al-andalus-en-napoles-y-centro-historico-07.jpg" alt="" /></p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Adicionalmente, el comensal puede escoger entre&nbsp;<strong>brochetas de carne</strong>&nbsp;preparadas a la parrilla, o un<strong>&nbsp;taco &aacute;rabe</strong>&nbsp;de carne de cordero, antecedente directo de nuestros mexican&iacute;simos tacos al pastor.</p>\r\n<h4 style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Para pasar la comida libanesa&nbsp;</h4>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">No falta el<strong><em>&nbsp;arak</em></strong>, el licor tradicional de aquellas latitudes, un destilado con toque anisado de alta graduaci&oacute;n alcoh&oacute;lica, que suele tomarse mezclado con agua, lo cual le hace adquirir un tono lechoso. Adicionalmente, el restaurante Al Andalus tiene su propia etiqueta de&nbsp;<strong>vino</strong>&nbsp;elaborado en&nbsp;<strong>L&iacute;bano</strong>, de diversas variedades de uva.</p>\r\n<h5 style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img src="https://www.dondeir.com/wp-content/uploads/2017/02/restaurante-al-andalus-en-napoles-y-centro-historico-04.jpg" alt="" /></h5>\r\n<h5 style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Postre casero en Mesones</h5>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Otro elemento emblem&aacute;tico de Al Andalus, y de la gastronom&iacute;a &aacute;rabe en general, es su&nbsp;<strong>reposter&iacute;a</strong>, del que puede ordenarse al final un aut&eacute;ntico&nbsp;<strong>muestrario de dulces</strong>, elaborados con nuez, pistache y miel, que pueden acompa&ntilde;arse con una&nbsp;<strong>jarra de caf&eacute; &aacute;rabe</strong>, que pueden preparar dulce o amargo.&nbsp;</p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;</p>\r\n<blockquote style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">El esp&iacute;ritu multicultural del&nbsp;<strong>Centro Hist&oacute;rico</strong>, se hace presente en todo su esplendor en las mesas de este restaurante.</blockquote>', 'Al Andalus abre en 1994 como un restaurante de comida libanesa bajo un menú exótico, con el fin de apoyar a la comunidad árabe que llegó a Mesones', 'assets/images/14879655714.jpg', 'pepe', 'restaurante-al-andalus-en-napoles-y-centro-historico', 'especial', 'vimeo', 'assets/images/14879655714.jpg', 1, 0, 33, 3, 5, '', 'A', '', '', '2017-04-28 10:09:27', '2017-05-04 09:16:32'),
(29, 'Don Asado la auténtica parrillada de Uruguay', 'http://www.donasado.com.mx/', '<p><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Su especialidad es servir porciones grandes a precios bajos en platillos que son preparados al calor de las brasas que crean la misma le&ntilde;a, impregnandolos de ese saborcito que les da el humo. Cortes como el asado de tira servido con trozos de costillar son emblem&aacute;ticos de esta embajada gastron&iacute;&shy;mica de Uruguay, acompa&ntilde;ados de un tinto de uva</span><em style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;tannat</em><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">, tambi&eacute;n representativa de aquellas latitudes. Otro atractivo son sus monumentales pizzas despachadas por metro o fracci&oacute;n.</span><br style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;" /><img style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;" src="https://www.dondeir.com/wp-content/uploads/2016/07/don-asado-01.jpg" alt="" /></p>', 'Don Asado es uno de los restaurantes uruguayos clásicos de la ciudad dondeen su menú ofrecen cortes carne, pizza a la leña y cerveza artesanal sudamericana', 'assets/images/14688580844.jpg', 'pp', 'don-asado', 'especial', 'vimeo', 'assets/images/14688580844.jpg', 0, 0, 33, 3, 20, '', 'A', '', '', '2017-04-28 10:10:38', '2017-04-28 10:10:38'),
(30, 'The Melting Pot, el templo del fondue', 'http://www.meltingpotmexico.com/index.php', '<p>&nbsp;<span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">En&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">The Melting Pot&nbsp;</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">creamos momentos memorables con la familia, amigos y pareja, regal&aacute;ndote una experiencia &uacute;nica en cada visita. Desde el momento en el que la primer pieza de pan se sumerge y la &uacute;ltima pieza de&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">postre</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;se saborea, descubrir&aacute;s una experiencia gastron&oacute;mica exclusiva.&nbsp;</span></p>\r\n<p><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Durante m&aacute;s de tres d&eacute;cadas,&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">The Melting Pot</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;se ha definido como uno de los lugares predilectos de la escena gastron&oacute;mica de E.U.A. Hoy con m&aacute;s de 143 ubicaciones, ha decidido crecer globalmente llegando primero a Canad&aacute; y ahora a M&eacute;xico.&nbsp;</span><br style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;" /><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">The Melting Pot</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">es el lugar ideal para disfrutar de un&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><em>fondue</em></strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;de chocolate despu&eacute;s de una pel&iacute;&shy;cula, celebrar un cumplea&ntilde;os o un aniversario. El lugar perfecto para interactuar y conectar al mismo tiempo que disfruta una deliciosa experiencia.&nbsp;</span><br style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;" /><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Una bell&iacute;&shy;sima casa en el coraz&oacute;n de&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Pedregal</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">, un restaurante vanguardista en&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Sat&eacute;lite</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;el cual brinda intimidad y confort y uno m&aacute;s en</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;Interlomas</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;dentro del Centro Comercial, son el perfecto lugar en donde el fondue se convierte en una memorable cena de cuatro tiempos con vinos exquisitos, un ambiente relajado, mesas privadas y un excelente servicio.&nbsp;</span><br style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;" /><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Si lo que buscas es una deliciosa caja de fresas con chocolate o</span><em style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;aderezos</em><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;y&nbsp;</span><em style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">sazonadores</em><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;para dar el toque extra especial a sus comidas, The Melting Pot te comparte sus recetas con una variedad de productos que vende en su tienda, adem&aacute;s si eres amante del fondue y te consideras todo un experto te encantar&aacute; saber que tiene un club del fondue, donde obtendr&aacute;s muchos beneficios como promociones, puntos, entre otras sorpresas.&nbsp;</span></p>', 'The Melting pot es una nueva experiencia gastronómica divertida e interactiva, que sin duda te hará ser un ferviente admirador de los fondues', 'assets/images/14688538260.jpg', 'pp', 'the-melting-pot-el-templo-del-fondue', 'especial', 'vimeo', 'assets/images/14688538260.jpg', 1, 1, 33, 3, 11, '', 'A', '', '', '2017-04-28 10:11:59', '2017-05-04 15:35:56'),
(31, 'nombre', 'web', '', 'extracto', 'assets/images/084.png', 'autor', 'friendlyUrl', 'especial', 'vimeo', 'assets/images/084.png', 0, 0, 0, 0, 0, '', 'A', '', '', '2017-05-02 15:23:11', '2017-05-02 15:23:11'),
(32, 'kidzania CL', 'www.kidzania.com', '<p>dddasdas</p>', 'parque de diversiones', 'assets/images/logoBBVA.png', 'dsdsdfsf', 'dssdfsdfs', 'sdfsdfsdfsdf', 'dfsdfsdfs', 'assets/images/Kidzania_Logo.png', 1, 1, 7, 0, 0, '', 'A', '', '', '2017-05-03 11:43:43', '2017-05-03 12:33:41'),
(33, 'EF Education First', 'www.ef.com.mx', '', 'lklk', 'assets/images/2571_foto.jpg', 'dww', 'wdwd', 'dwdwdwdw', 'dwdwdw', 'assets/images/original_EF_WHite.png', 1, 0, 15, 7, 0, '', 'A', 'Local', 'asdf', '2017-05-03 12:21:28', '2017-05-09 17:21:16'),
(34, 'Icedome', 'www.ice-station.com.mx', '<p>ghhgh</p>', 'hhghg', 'assets/images/11472_foto.jpg', 'grew', 'erewre', 'dfdfasf', 'addsff', 'assets/images/11472_logo.jpg', 1, 1, 7, 0, 4, '', 'A', '', '', '2017-05-03 12:56:18', '2017-05-04 16:02:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `misteries`
--

CREATE TABLE `misteries` (
  `id` int(11) NOT NULL,
  `id_ruta` int(11) NOT NULL,
  `pasaje` float(11,2) NOT NULL,
  `transportes` text COLLATE utf8_bin NOT NULL,
  `tarjetas_presentadas` text COLLATE utf8_bin NOT NULL,
  `calc_desclub` tinyint(1) NOT NULL,
  `cual_calc_desclub` text COLLATE utf8_bin NOT NULL,
  `material_pop` tinyint(1) NOT NULL,
  `cual_material_pop` text COLLATE utf8_bin NOT NULL,
  `calc_otras` tinyint(1) NOT NULL,
  `cual_calc_otras` varchar(255) COLLATE utf8_bin NOT NULL,
  `calificacion` varchar(255) COLLATE utf8_bin NOT NULL,
  `conoce_programa` tinyint(1) NOT NULL,
  `razon_negado` varchar(255) COLLATE utf8_bin NOT NULL,
  `pregunta_gerente` tinyint(1) NOT NULL,
  `otorgaron_descuento` tinyint(1) NOT NULL,
  `efectivo` varchar(255) COLLATE utf8_bin NOT NULL,
  `tarjeta` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo_foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto1` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto2` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto3` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto4` varchar(255) COLLATE utf8_bin NOT NULL,
  `latitud` varchar(100) COLLATE utf8_bin NOT NULL,
  `longitud` varchar(100) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `misteries`
--

INSERT INTO `misteries` (`id`, `id_ruta`, `pasaje`, `transportes`, `tarjetas_presentadas`, `calc_desclub`, `cual_calc_desclub`, `material_pop`, `cual_material_pop`, `calc_otras`, `cual_calc_otras`, `calificacion`, `conoce_programa`, `razon_negado`, `pregunta_gerente`, `otorgaron_descuento`, `efectivo`, `tarjeta`, `tipo_foto`, `descripcion`, `foto1`, `foto2`, `foto3`, `foto4`, `latitud`, `longitud`, `created_at`, `updated_at`) VALUES
(4, 12, 23456.00, 'a:3:{i:0;s:7:"Camión";i:1;s:5:"Metro";i:2;s:4:"Otro";}', 'a:2:{i:0;s:7:"DescluB";i:1;s:15:"Tarjeta Virtual";}', 0, 'a:2:{i:0;s:7:"DescluB";i:1;s:15:"Tarjeta Virtual";}', 0, 'a:5:{i:0;s:0:"";i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";i:4;s:0:"";}', 0, 's:5:"dfghj";', 'Excelente', 0, 'Seleccione', 0, 0, '', '', 'Seleccione', '', '', '', '', '', '', '', '2017-05-04 16:18:42', '2017-05-04 16:18:42');

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `promocions`
--

INSERT INTO `promocions` (`id`, `id_marca`, `id_proyecto`, `efectivo`, `tarjeta`, `promo`, `detalle_promocion`, `restricciones`, `inicio_actividades`, `fin_actividades`, `created_at`, `updated_at`) VALUES
(30, 32, 10, '20', '20', 'descuento en la compra de boletos de entrada.', '20%', 'Indispensable mostrar tarjeta. Válido en la compra máxima de 5 boletos y dónde por lo menos uno de ellos sea de niño. Sujeta a disponibilidad. No aplica en grupos, fiestas infantiles, eventos especiales ni con otras promociones. No canjeable por dinero en efectivo.', '2017-05-01', '2018-03-31', '2017-05-03 12:33:32', '2017-05-03 12:33:32'),
(31, 34, 9, '10', '10', 'descuento en cuenta total', '10%', 'NO aplican restriciones', '2017-05-01', '2018-02-01', '2017-05-03 15:28:12', '2017-05-03 15:28:12'),
(32, 34, 8, '15', '15', 'descuento en la renta de tiempo libre', '15%', 'No aplica con otras promociones.', '2017-04-01', '2018-04-01', '2017-05-03 15:31:47', '2017-05-03 15:31:47'),
(33, 34, 10, '15', '15', 'descuento en la renta de tiempo libre();=', '15%', 'No aplica con otras promociones.', '2017-04-01', '2018-04-01', '2017-05-03 15:33:30', '2017-05-03 15:41:01'),
(34, 34, 15, '15', '15', 'descuento en la compra de tiempo libre ioueoioeioeuioeioeuiodiduoiqwuoiuqowieuoqiwueoiqwueoiquwoeiuqwoieuoiqwueoiqwueoiquweiouqowieuqoiwueoqiwueoqiwueoqiwueoiqwueoiqwueoiqwueoiqwueoiqwueoiqwueoqiwueoqiwueoiqwueoqiwueoiqwueoqiuweoiqueoiqwuowiqeuoqwieuoqiwu', 'oqweuqoiweuoqwieuoqiwueoqiwueoqiwueoiqwueoiqwueoiquweoiqwuoieuqioweuoqiwueoqiwueoiqwueoiqwueoiqwueoiqwueoiqwueoqiwueoiqwueoiqwueoiquweioquwoeiuqwoieuqowieuqoiwueoqiwueoqiweuoqiwueoqiwueoqiweuoqiweuoqiwueoiqwueoiqwueoqiwueoqiwueoiqwueoiqwueoqiweuoqiwueoiqweuoqiweuoiqwueoqiweuoiqwueoqiwueoiqwueoiqwue', 'oqweuqoiweuoqwieuoqiwueoqiwueoqiwueoiqwueoiqwueoiquweoiqwuoieuqioweuoqiwueoqiwueoiqwueoiqwueoiqwueoiqwueoiqwueoqiwueoiqwueoiqwueoiquweioquwoeiuqwoieuqowieuqoiwueoqiwueoqiweuoqiwueoqiwueoqiweuoqiweuoqiwueoiqwueoiqwueoqiwueoqiwueoiqwueoiqwueoqiweuoqiwueoiqweuoqiweuoiqwueoqiweuoiqwueoqiwueoiqwueoiqwue', '2017-05-01', '2017-11-30', '2017-05-03 15:34:38', '2017-05-03 15:34:38'),
(35, 34, 11, 'XXXXX', 'XX', '$400 pesos de descuento en el total de la compra', '$400', 'No aplica con otras promociones.', '2017-05-01', '2018-09-30', '2017-05-03 15:36:04', '2017-05-03 15:36:04'),
(38, 30, 8, '15', '15', '2x1', 'ñadskfjñldsf', 'ñlksdfjñas', '2017-05-04', '2017-05-31', '2017-05-04 15:35:31', '2017-05-04 15:35:31'),
(39, 34, 14, '15', '15', '123', '1234', '1234', '2017-05-01', '2017-05-31', '2017-05-04 16:02:19', '2017-05-04 16:02:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(8, 'Bancario ( Vida Bancomer )', '2017-04-28 09:32:38', '2017-04-28 09:32:38'),
(9, 'Credito Al Consumo', '2017-04-28 09:32:44', '2017-04-28 09:32:44'),
(10, 'Desclub', '2017-04-28 09:32:51', '2017-04-28 09:32:51'),
(11, 'Guia Affluent Bbva', '2017-04-28 09:32:57', '2017-04-28 09:32:57'),
(12, 'Guia Azul Y Oro Bbva', '2017-04-28 09:33:03', '2017-04-28 09:33:03'),
(13, 'Negocios + Vida', '2017-04-28 09:33:08', '2017-04-28 09:33:08'),
(14, 'Scotiabank', '2017-04-28 09:33:14', '2017-04-28 09:33:14'),
(15, 'Visita Relanzamiento Desclub', '2017-04-28 09:33:18', '2017-04-28 09:33:18');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservacions`
--

CREATE TABLE `reservacions` (
  `id` int(11) NOT NULL,
  `restaurante` varchar(255) COLLATE utf8_bin NOT NULL,
  `mesa_a_nombre_de` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(255) COLLATE utf8_bin NOT NULL,
  `personas` int(11) NOT NULL,
  `area` varchar(255) COLLATE utf8_bin NOT NULL,
  `clave` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `tolerancia` varchar(255) COLLATE utf8_bin NOT NULL,
  `se_logro_reservacion` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `reservacions`
--

INSERT INTO `reservacions` (`id`, `restaurante`, `mesa_a_nombre_de`, `fecha`, `hora`, `personas`, `area`, `clave`, `nombre`, `tolerancia`, `se_logro_reservacion`, `created_at`, `updated_at`) VALUES
(4, 'los canarios', 'Teresa Balderas', '2017-05-04', '18:00', 0, 'no fumadores', '2530', 'Teresa Balderas', '15 minutos', 0, '2017-05-02 12:57:18', '2017-05-02 12:57:18'),
(5, 'El califa', 'Pepe Becerra', '2017-05-04', '3:30', 0, 'fumar', '12345678', 'sdfghjkl', '15', 0, '2017-05-04 15:53:25', '2017-05-04 15:53:25'),
(6, 'La parrilla de becerra', 'pepe', '2017-05-08', '3:30', 0, 'fumar', 'asdf', '', '15 min', 0, '2017-05-08 11:50:41', '2017-05-08 11:50:41'),
(7, 'restaurante', 'mesa_a_nombre_de', '2017-05-08', 'hora', 4, 'area', 'clave', '', 'tolerancia', 0, '2017-05-08 11:54:13', '2017-05-08 11:54:13'),
(8, 'restaurante', 'mesa_a_nombre_de', '0000-00-00', 'hora', 1, 'area', 'clave', '', 'tolerancia', 1, '2017-05-08 11:54:43', '2017-05-08 11:54:43'),
(9, 'restaurante', 'mesa_a_nombre_de', '0000-00-00', 'hora', 1, 'area', 'clave', '', 'tolerancia', 0, '2017-05-08 11:55:05', '2017-05-08 11:55:05');

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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id`, `id_usuario`, `id_proyecto`, `id_sucursal`, `tipo_ruta`, `actividad`, `fecha_inicio`, `fecha_fin`, `mistery`, `etapa1`, `etapa2`, `etapa3`, `status`, `created_at`, `updated_at`) VALUES
(15, 7, 8, 33, 'Sucursales nuevas', 'calidad', '2017-05-01', '2017-05-31', 0, 0, 0, 0, 0, '2017-05-09 10:28:28', '2017-05-09 10:28:28'),
(16, 7, 8, 32, 'Sucursales nuevas', 'calidad', '2017-05-01', '2017-05-31', 0, 0, 0, 0, 0, '2017-05-09 10:28:54', '2017-05-09 10:28:54'),
(17, 7, 10, 41, 'Sucursales nuevas', 'calidad', '2017-05-01', '2017-05-31', 0, 0, 0, 0, 0, '2017-05-09 11:43:52', '2017-05-09 11:43:52'),
(18, 7, 8, 41, 'Sucursales nuevas', 'mistery', '2017-05-01', '2017-05-31', 0, 0, 0, 0, 0, '2017-05-09 12:03:50', '2017-05-09 12:03:50');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `seguimientos`
--

INSERT INTO `seguimientos` (`id`, `id_llamada`, `id_usuario`, `comentarios`, `status`, `acuerdo`, `created_at`, `updated_at`) VALUES
(47, 27, 11, 'se le otorga un vale de descuento', '2', '3', '2017-05-02 12:41:09', '2017-05-02 12:41:09');

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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sucursals`
--

INSERT INTO `sucursals` (`id`, `id_marca`, `nombre`, `telefono`, `latitud`, `longitud`, `referencia`, `calle`, `colonia`, `no_ext`, `no_int`, `horarios`, `fachada`, `id_estado`, `id_zona`, `restorando`, `restaurantes`, `tuvo_llamada_bienvenida`, `detalle_llamada`, `conoce_vb`, `escala_info`, `motivo_desconoce`, `reforzo_info`, `material_pop`, `calcomanias`, `acrilicos`, `comunicados_desclub`, `comunicados_bbva`, `reloj_colgante`, `calcomanias_desclub`, `tarjetas_desclub`, `nombre_atendio`, `cargo_atendio`, `geolocalicacion_revisada`, `created_at`, `updated_at`) VALUES
(31, 27, 'Puerto Gustavia, Insurgentes Sur', '5661 7788/ 5661 7791', '19.3562336', '-99.1845917', 'ref', 'Av. Insurgentes Sur', 'col', '1826', '', 'Mar. a sáb., 13:00 a 22:00; dom., 13:00 a 20:00. ', '', 9, 13, '', '', 1, 'No contestan', 1, 1, '', 1, 1, 0, 0, 0, 0, 0, 0, 0, '', '', 1, '2017-04-28 10:07:31', '2017-05-04 16:03:30'),
(32, 30, 'The Melting Pot, Sur', '5280 5220 ', '19.3194424', '-99.2111188', 'ESTA ES LA REFERENCIA', 'Plaza Jolie: Av. de las Fuentes', 'colonia', '425', '', 'Lun. a mié., 13:00 a 23:00; jue. a sáb., 13:00 a 00:00; dom., 13:00 a 19:00.', '', 9, 13, '', '', 1, 'Conocen convenio y aplican descuento', 1, 1, 'La empresa / corporativo no ha enviado la información', 1, 1, 1, 1, 1, 0, 0, 0, 0, 'dfghjkl', 'Gerente sucursal', 1, '2017-04-28 10:13:51', '2017-05-04 15:39:03'),
(33, 30, 'The Melting Pot, Poniente', '5290 4189 ', '19.3970866', '-99.2815261', 'ref', 'Centro Comercial Paseo Interlomas: Vialidad de la Barranca', 'col', '06', '2º Piso', 'Lun. a sáb., 13:00 a 00:00; dom., 13:00 a 19:00.', '', 9, 10, '', '', 1, 'Conocen convenio y aplican descuento', 1, 1, '', 1, 1, 0, 0, 0, 0, 0, 0, 0, 'asdf', 'Cajero', 1, '2017-04-28 10:14:52', '2017-05-08 14:01:08'),
(34, 30, 'The Melting Pot, Satélite', '5393 8370 ', '19.5057188', '-99.2348308', 'ref', 'Cto. Médicos', 'col', '09', '', 'Lun. a sáb., 13:00 a 00:00; dom., 13:00 a 18:00.', '', 9, 11, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:15:43', '2017-04-28 10:15:43'),
(35, 28, 'Al Andalus, Del Valle', '5523 9813', '19.3942519', '-99.1785546', 'ref', 'Nueva York', 'colonia', '91', '', 'Lun. a dom., 09:00 a 18:00.', '', 9, 16, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:17:24', '2017-04-28 10:17:24'),
(36, 28, 'Al Andalus, Centro Histórico', '5522 2528/ 5522 2562.', '19.427802', '-99.1293837', 'ref', 'Mesones', 'colonia', '171', '', 'Lun. a dom., 09:00 a 18:00.', '', 9, 10, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:18:14', '2017-04-28 10:18:14'),
(37, 29, 'Don asado, Polanco ', '2624 2783/ 2624 2785', '19.4352776', '-99.1884848', 'referencia', 'Av. Homero ', 'colonia', '428', '', 'Dom.,13.00 a 19:30; mar. a jue.,13:00 a 23:00', '', 9, 7, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:19:23', '2017-04-28 10:19:23'),
(38, 29, 'Don Asado, Del Valle', '5524 9190', '19.3687294', '-99.1668235', 'referencia', 'Av. Parroquia', 'colonia', '906', '', 'Dom., 13:00 a 19:30; mar. a sáb., 13:00 a 23:00.', '', 9, 16, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:20:09', '2017-04-28 10:20:09'),
(39, 32, 'Kidzania Santa fe', '5591774700', '19.3597647', '-99.2748733', 'Centro Comercial Santa Fe', 'Vasco de Quiroga', 'Santa Fe', '3800', 'Loc. 1', '9 a 19 hrs', 'assets/images/9967_foto.jpg', 9, 0, 'yuiuiy', 'yuyuy', 1, 'Conocen convenio y aplican descuento', 1, 1, '', 1, 1, 0, 0, 0, 0, 0, 0, 0, 'Arturo', 'Cajero', 1, '2017-05-03 12:13:53', '2017-05-04 15:57:09'),
(40, 32, 'Kidzania Monterrey', '8181334900', '25.6393454', '-100.3171271', 'Centro Comercial Valle Oriente', 'Av. Lazaro Cardenas', 'Valle Oriente', '900A', '', '9 a 19 hrs', 'assets/images/9967_foto.jpg', 19, 0, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-05-03 12:15:39', '2017-05-03 12:15:39'),
(41, 34, 'Icedome Pista De Hielo', '5567267111', '19.2796545', '-99.1719001', 'dfhrtjty', 'Av. Insurgentes Sur', 'Santa Ursula Xitla', 'No. 4303', '', '10 a 21 hrs', 'assets/images/11472_foto.jpg', 9, 7, 'rgtryhtgf', 'vbvcncv', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-05-03 13:14:31', '2017-05-03 13:14:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodecomidas`
--

CREATE TABLE `tipodecomidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipodecomidas`
--

INSERT INTO `tipodecomidas` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(4, 'Americana', '2017-04-28 09:34:48', '2017-04-28 09:34:48'),
(5, 'Árabe', '2017-04-28 09:34:53', '2017-04-28 09:34:53'),
(6, 'Argentina', '2017-04-28 09:34:58', '2017-04-28 09:34:58'),
(7, 'Brasileña', '2017-04-28 09:35:03', '2017-04-28 09:35:03'),
(8, 'Bares', '2017-04-28 09:35:08', '2017-04-28 09:35:08'),
(9, 'China', '2017-04-28 09:35:13', '2017-04-28 09:35:13'),
(10, 'Española', '2017-04-28 09:35:18', '2017-04-28 09:35:18'),
(11, 'Francesa', '2017-04-28 09:35:23', '2017-04-28 09:35:23'),
(12, 'India', '2017-04-28 09:35:27', '2017-04-28 09:35:27'),
(13, 'Internacional', '2017-04-28 09:35:31', '2017-04-28 09:35:31'),
(14, 'Italiana', '2017-04-28 09:35:35', '2017-04-28 09:35:35'),
(15, 'Japonesa', '2017-04-28 09:35:39', '2017-04-28 09:35:39'),
(16, 'Mexicana', '2017-04-28 09:35:44', '2017-04-28 09:35:44'),
(17, 'Pescados y mariscos', '2017-04-28 09:35:49', '2017-04-28 09:35:49'),
(18, 'Vegetariana', '2017-04-28 09:35:54', '2017-04-28 09:35:54'),
(19, 'Uruguaya', '2017-04-28 09:35:58', '2017-04-28 09:35:58'),
(20, 'Carnes', '2017-04-28 09:36:02', '2017-04-28 09:36:02'),
(21, 'Hamburguesas', '2017-04-28 09:36:36', '2017-04-28 09:36:36'),
(22, 'Comida Rápida', '2017-04-28 09:36:41', '2017-04-28 09:36:41'),
(23, 'Saludable', '2017-04-28 09:36:45', '2017-04-28 09:36:45'),
(24, 'Cafetería', '2017-04-28 09:36:49', '2017-04-28 09:36:49'),
(25, 'Postres', '2017-04-28 09:36:53', '2017-04-28 09:36:53');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`, `apikey`, `rol`, `created_at`, `updated_at`) VALUES
(1, 'antonio.becerra@grupomedios.com', '5140106451340684a8beddcfae8ccb37', '57cec4137b614c87cb4e24a3d003a3e0', '1', '2017-04-05 00:00:00', '2017-04-05 00:00:00'),
(2, 'gerenteafiliacion', 'e8a6d986f2443fe478c504b69f251fcb', '', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'afiliador', 'e8a6d986f2443fe478c504b69f251fcb', '', '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'dondeir', 'e8a6d986f2443fe478c504b69f251fcb', '', '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'peyi', 'e8a6d986f2443fe478c504b69f251fcb', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'gerentecalidad', 'e8a6d986f2443fe478c504b69f251fcb', '', '5', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'calidad1', 'e8a6d986f2443fe478c504b69f251fcb', '', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'calidad2', 'e8a6d986f2443fe478c504b69f251fcb', '', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'calidad3', 'e8a6d986f2443fe478c504b69f251fcb', '', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'calidad4', 'e8a6d986f2443fe478c504b69f251fcb', '', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'telemarketing', 'e8a6d986f2443fe478c504b69f251fcb', '', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'admin', 'e8a6d986f2443fe478c504b69f251fcb', '', '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `id_estado`, `nombre`, `created_at`, `updated_at`) VALUES
(7, 9, 'Polanco', '2017-04-28 09:50:07', '2017-04-28 09:50:07'),
(8, 9, 'Juárez', '2017-04-28 09:50:16', '2017-04-28 09:50:16'),
(9, 9, 'Condesa', '2017-04-28 09:50:20', '2017-04-28 09:50:20'),
(10, 9, 'Centro', '2017-04-28 09:50:28', '2017-04-28 09:50:28'),
(11, 9, 'Satélite', '2017-04-28 09:50:32', '2017-04-28 09:50:32'),
(12, 9, 'Cuauhtémoc', '2017-04-28 09:50:37', '2017-04-28 09:50:37'),
(13, 9, 'Sur (Coapa, Pedregal)', '2017-04-28 09:50:42', '2017-04-28 09:50:42'),
(14, 9, 'San ángel', '2017-04-28 09:50:47', '2017-04-28 09:50:47'),
(15, 9, 'Poniente', '2017-04-28 09:50:51', '2017-04-28 09:50:51'),
(16, 9, 'Del Valle/ Nápoles', '2017-04-28 09:50:56', '2017-04-28 09:50:56'),
(17, 9, 'Coyoacán', '2017-04-28 09:51:01', '2017-04-28 09:51:01'),
(18, 9, 'Roma', '2017-04-28 09:51:07', '2017-04-28 09:51:07'),
(19, 9, 'Santa Fe', '2017-05-04 15:56:42', '2017-05-04 15:56:42');

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
-- Indices de la tabla `etapados`
--
ALTER TABLE `etapados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `etapatres`
--
ALTER TABLE `etapatres`
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
-- Indices de la tabla `misteries`
--
ALTER TABLE `misteries`
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
-- Indices de la tabla `reservacions`
--
ALTER TABLE `reservacions`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT de la tabla `autorizacions`
--
ALTER TABLE `autorizacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `categoriavives`
--
ALTER TABLE `categoriavives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `detalledesclubs`
--
ALTER TABLE `detalledesclubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `etapados`
--
ALTER TABLE `etapados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `etapatres`
--
ALTER TABLE `etapatres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `etapaunos`
--
ALTER TABLE `etapaunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `misteries`
--
ALTER TABLE `misteries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `promocions`
--
ALTER TABLE `promocions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `reservacions`
--
ALTER TABLE `reservacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `seguimientos`
--
ALTER TABLE `seguimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `sucursals`
--
ALTER TABLE `sucursals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `tipodecomidas`
--
ALTER TABLE `tipodecomidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;