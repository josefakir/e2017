-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-04-2017 a las 09:55:14
-- Versión del servidor: 5.6.32-78.1-log
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bluegeni_establecimientospepe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividads`
--

CREATE TABLE IF NOT EXISTS `actividads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_lead` int(11) NOT NULL,
  `que_hice` varchar(255) COLLATE utf8_bin NOT NULL,
  `comentarios` text COLLATE utf8_bin NOT NULL,
  `que_hare` varchar(255) COLLATE utf8_bin NOT NULL,
  `fecha_futura` datetime NOT NULL,
  `comentarios_futura` text COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=71 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autorizacions`
--

CREATE TABLE IF NOT EXISTS `autorizacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_marca` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_marca` (`id_marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=41 ;

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

CREATE TABLE IF NOT EXISTS `categoriavives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

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

CREATE TABLE IF NOT EXISTS `detalledesclubs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `acronym` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

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
-- Estructura de tabla para la tabla `etapados`
--

CREATE TABLE IF NOT EXISTS `etapados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapatres`
--

CREATE TABLE IF NOT EXISTS `etapatres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ruta` int(11) NOT NULL,
  `tipo_foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `descripcion` text COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapaunos`
--

CREATE TABLE IF NOT EXISTS `etapaunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leads`
--

CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_marca` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `numero_sucursales` int(11) NOT NULL,
  `status` char(1) COLLATE utf8_bin NOT NULL,
  `tiene_contacto` tinyint(1) NOT NULL,
  `inicio_operaciones` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_marca` (`id_marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=38 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamadas`
--

CREATE TABLE IF NOT EXISTS `llamadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE IF NOT EXISTS `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=27 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `misteries`
--

CREATE TABLE IF NOT EXISTS `misteries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocions`
--

CREATE TABLE IF NOT EXISTS `promocions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_marca` (`id_marca`,`id_proyecto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=30 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE IF NOT EXISTS `proyectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

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

CREATE TABLE IF NOT EXISTS `reservacions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE IF NOT EXISTS `rutas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimientos`
--

CREATE TABLE IF NOT EXISTS `seguimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_llamada` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comentarios` text COLLATE utf8_bin NOT NULL,
  `status` char(1) COLLATE utf8_bin NOT NULL,
  `acuerdo` char(1) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=47 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursals`
--

CREATE TABLE IF NOT EXISTS `sucursals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=31 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodecomidas`
--

CREATE TABLE IF NOT EXISTS `tipodecomidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=26 ;

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

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `apikey` varchar(255) COLLATE utf8_bin NOT NULL,
  `rol` char(1) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

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
(10, 'asoycalidad', '5140106451340684a8beddcfae8ccb37', '', '6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'telemarketing', '5140106451340684a8beddcfae8ccb37', '', '7', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE IF NOT EXISTS `zonas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estado` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_bin NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

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
(18, 9, 'Roma', '2017-04-28 09:51:07', '2017-04-28 09:51:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
