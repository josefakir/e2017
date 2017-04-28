-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-04-2017 a las 10:22:17
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `nombre`, `web`, `resena`, `extracto`, `imagen`, `autor`, `friendlyUrl`, `especial`, `vimeo`, `logoDesclub`, `autorizadaLead`, `inicio_operaciones`, `id_categoria`, `id_categoria_vive`, `id_tipoDeComida`, `created_at`, `updated_at`) VALUES
(27, 'Puerto Gustavia restaurante playero en Insurgentes Sur', 'https://www.facebook.com/puertogustavia/', '<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">La fachada del<strong>&nbsp;restaurante Puerto Gustavia</strong>&nbsp;resalta a unos metros del cruce de&nbsp;<strong>Insurgentes Sur</strong>&nbsp;con la calle de Juventino Rosas, por los decorados de r&uacute;stica madera que se aprecian en sus dos niveles y la techumbre de paja, a manera de una enorme palapa playera levantada en los linderos de la&nbsp;<strong>colonia Florida</strong>.</p>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;"><img style="width: 741px; margin: 10px 0px;" title="Image: https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-07.jpg" src="https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-07.jpg" /></p>\r\n<h2 style="width: 718.766px; line-height: 27px; float: left; font-size: 25px; margin: 0px 0px 20px; padding: 0px 10px; color: #161515; font-family: ''Quattrocento Sans'', sans-serif;">Puerto Gustavia restaurante con carta amplia en mariscos</h2>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">Su relajada atm&oacute;sfera ayuda al comensal a disfrutar de su<strong>&nbsp;carta de pescados y mariscos</strong>.&nbsp;<strong>Ostiones&nbsp;</strong>en su concha y&nbsp;<strong>almejas</strong>&nbsp;chocolatas vivas se despachan a las mesas, sin necesidad de trasladarse hasta la orilla del mar; tampoco faltan los&nbsp;<strong>cocteles</strong>,<strong>&nbsp;tostadas</strong>&nbsp;y<strong>&nbsp;tacos</strong>&nbsp;de diversas alternativas, para abrir boca, o bien para quienes deseen comer algo ligero.</p>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;"><img style="width: 741px; margin: 10px 0px;" title="Image: https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-01.jpg" src="https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-01.jpg" /></p>\r\n<h3 style="width: 741px; float: left; font-size: 20px; font-family: Lato, sans-serif; color: #161515;">Platillos marinos con toque extra en su men&uacute;</h3>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">Para una comida en toda forma con sello marino, cuentan con el solicitado&nbsp;<strong>p&aacute;mpano a la sal</strong>,<strong>&nbsp;pulpo a las brasas</strong>,&nbsp;<strong>salm&oacute;n</strong>,&nbsp;<strong>hamburguesa de at&uacute;n</strong>, cola de<strong>&nbsp;langosta</strong>,<strong>&nbsp;lomo de huachinango</strong>&nbsp;y el mismo huachinango entero, concebido para compartir entre dos personas. Tambi&eacute;n destaca su&nbsp;<strong>parrillada especial de mariscos</strong>, compuesta por un par de&nbsp;<strong>camarones jumbo</strong>, otro par de callos de hacha, 400 gramos de pulpo y una cola de langosta.</p>\r\n<h4 style="float: left; width: 741px; color: #161515; font-family: ''Quattrocento Sans'', sans-serif;"><img style="width: 741px; margin: 10px 0px;" title="Image: https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-02.jpg" src="https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-02.jpg" /></h4>\r\n<h4 style="float: left; width: 741px; color: #161515; font-family: ''Quattrocento Sans'', sans-serif;">Pescados y mariscos hechos a la italiana&nbsp;</h4>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">Una particularidad de la oferta culinaria del lugar, es contar a su vez con&nbsp;<strong>pizzas</strong>,&nbsp;<strong>empanadas</strong>&nbsp;y&nbsp;<strong>pastas</strong>, preparadas con diversas opciones de pescados y mariscos, como la&nbsp;<strong>pizza Gustavia</strong>, la cual lleva camarones, calamares, jitomate, aceituna negra, pi&ntilde;a y perejil.</p>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;"><img style="width: 741px; margin: 10px 0px;" title="Image: https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-03.jpg" src="https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-03.jpg" /></p>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">Los fines de semana su ambiente es m&aacute;s familiar, a diferencia de los d&iacute;as laborables cuando sus mesas suelen ocuparlas las personas que laboran en los alrededores.</p>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;"><img style="width: 741px; margin: 10px 0px;" title="Image: https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-05.jpg" src="https://www.dondeir.com/wp-content/uploads/2017/04/puerto-gustavia-restaurante-playero-en-insurgentes-sur-05.jpg" /></p>\r\n<h5 style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif;">Postres y bebidas uruguayas</h5>\r\n<p style="color: #161515; font-family: ''Quattrocento Sans'', sans-serif; font-size: 15px;">Puerto Gustavia restaurante no s&oacute;lo se encuentra al lado de una sucursal de Don Asado, sino que forma parte del mismo<strong>&nbsp;grupo restaurantero</strong>, famoso por sus cortes al estilo uruguayo; de ah&iacute; que ofrezcan, preparada con fresas, la<strong>&nbsp;chaja&nbsp;</strong>(tradicional postre del pa&iacute;s sudamericano), y tengan en su carta de bebidas&nbsp;<strong>cerveza La Patricia</strong>, importada de Uruguay.&nbsp;</p>', 'Puerto Gustavia restaurante de pescados y mariscos con un menú culinario amplio en pizzas, empanadas y pastas, además de postres y cervezas uruguayas', 'assets/images/14928087281.jpg', 'Pepe', 'puerto-gustavia-restaurante-playero-en-insurgentes-sur', 'Pertenece al grupo restaurantero de Don Asado, caracterizado por su comida de buena calidad, abundantes porciones y precios competitivos.', 'vimeo', 'assets/images/14928087281.jpg', 0, 0, 33, 3, 17, '2017-04-28 10:05:54', '2017-04-28 10:05:54'),
(28, 'Restaurante Al Andalus en Nápoles y Centro Histórico', 'https://www.facebook.com/alandalusmexico/', '<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Pese a haber abierto sus puertas apenas en el a&ntilde;o de 1994, la atm&oacute;sfera que se respira en el&nbsp;<strong>restaurante Al Andalus&nbsp;</strong>parece remontarse a las primeras d&eacute;cadas del siglo anterior, cuando la comunidad &aacute;rabe lleg&oacute; al&nbsp;<strong>Centro Hist&oacute;rico</strong>, para abrir sus negocios que, a la fecha, conservan en el coraz&oacute;n de la ciudad, misma que enriquecieron con su cultura.</p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img src="https://www.dondeir.com/wp-content/uploads/2017/02/restaurante-al-andalus-en-napoles-y-centro-historico-05.jpg" alt="" /></p>\r\n<h2 style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Restaurante Al Andalus: comunidad &aacute;rabe a M&eacute;xico&nbsp;</h2>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Sobre&nbsp;<strong>Mesones</strong>, calle caracterizada por las tiendas de productos papeleros que tiene en ambos lados de su acera, se encuentra el inmueble de dos niveles del siglo XVII ocupado por este restaurante, al que suele acudir los integrantes de la&nbsp;<strong>comunidad &aacute;rabe</strong>&nbsp;que, pese a radicar por otros rumbos de la ciudad, a la fecha, todav&iacute;a operan sus negocios en el barrio, y que ocupan la mesas igual que el resto de los vecinos y los amantes de la&nbsp;<strong>gastronom&iacute;a &aacute;rabe</strong>, que ubican al restaurante entre los mejores de su tipo en la Ciudad de M&eacute;xico.</p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img src="https://www.dondeir.com/wp-content/uploads/2017/02/restaurante-al-andalus-en-napoles-y-centro-historico-02.jpg" alt="" /></p>\r\n<h3 style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Comida con ex&oacute;ticos platillos de la gastronom&iacute;a &aacute;rabe&nbsp;</h3>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Para ordenar de comer, no hay duda: la llamada<strong>&nbsp;"mesa libanesa"</strong>&nbsp;ofrece, con su docena de platillos tradicionales, un muestrario abundante de la<strong>&nbsp;gastronom&iacute;a del Medio Oriente</strong>.&nbsp;</p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Platos de<strong>&nbsp;<em>jocoque</em>&nbsp;seco</strong>,&nbsp;<strong><em>tabule</em></strong>&nbsp;(ensalada elaborada con perejil, trigo y jitomate, entre sus ingredientes principales),&nbsp;<strong>garbanza</strong>&nbsp;y&nbsp;<strong>berenjena</strong>&nbsp;molidas, arroz con lentejas y arroz con fideos,<strong>&nbsp;tacos de col&nbsp;</strong>rellenos de carne de cordero, lo mismo que sus&nbsp;<strong>rollos de hojas de parra</strong>;&nbsp;<em><strong>keppe</strong></em>&nbsp;<strong>crudo</strong>&nbsp;(como carne t&aacute;rtara) y&nbsp;<strong><em>keppe</em>&nbsp;bola</strong>&nbsp;(empanizada y frita), entre otros, llegan a la mesa para recubrirla.</p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img src="https://www.dondeir.com/wp-content/uploads/2017/02/restaurante-al-andalus-en-napoles-y-centro-historico-07.jpg" alt="" /></p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Adicionalmente, el comensal puede escoger entre&nbsp;<strong>brochetas de carne</strong>&nbsp;preparadas a la parrilla, o un<strong>&nbsp;taco &aacute;rabe</strong>&nbsp;de carne de cordero, antecedente directo de nuestros mexican&iacute;simos tacos al pastor.</p>\r\n<h4 style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Para pasar la comida libanesa&nbsp;</h4>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">No falta el<strong><em>&nbsp;arak</em></strong>, el licor tradicional de aquellas latitudes, un destilado con toque anisado de alta graduaci&oacute;n alcoh&oacute;lica, que suele tomarse mezclado con agua, lo cual le hace adquirir un tono lechoso. Adicionalmente, el restaurante Al Andalus tiene su propia etiqueta de&nbsp;<strong>vino</strong>&nbsp;elaborado en&nbsp;<strong>L&iacute;bano</strong>, de diversas variedades de uva.</p>\r\n<h5 style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><img src="https://www.dondeir.com/wp-content/uploads/2017/02/restaurante-al-andalus-en-napoles-y-centro-historico-04.jpg" alt="" /></h5>\r\n<h5 style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Postre casero en Mesones</h5>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Otro elemento emblem&aacute;tico de Al Andalus, y de la gastronom&iacute;a &aacute;rabe en general, es su&nbsp;<strong>reposter&iacute;a</strong>, del que puede ordenarse al final un aut&eacute;ntico&nbsp;<strong>muestrario de dulces</strong>, elaborados con nuez, pistache y miel, que pueden acompa&ntilde;arse con una&nbsp;<strong>jarra de caf&eacute; &aacute;rabe</strong>, que pueden preparar dulce o amargo.&nbsp;</p>\r\n<p style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;</p>\r\n<blockquote style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">El esp&iacute;ritu multicultural del&nbsp;<strong>Centro Hist&oacute;rico</strong>, se hace presente en todo su esplendor en las mesas de este restaurante.</blockquote>', 'Al Andalus abre en 1994 como un restaurante de comida libanesa bajo un menú exótico, con el fin de apoyar a la comunidad árabe que llegó a Mesones', 'assets/images/14879655714.jpg', 'pepe', 'restaurante-al-andalus-en-napoles-y-centro-historico', 'especial', 'vimeo', 'assets/images/14879655714.jpg', 0, 0, 33, 3, 5, '2017-04-28 10:09:27', '2017-04-28 10:09:27'),
(29, 'Don Asado la auténtica parrillada de Uruguay', 'http://www.donasado.com.mx/', '<p><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Su especialidad es servir porciones grandes a precios bajos en platillos que son preparados al calor de las brasas que crean la misma le&ntilde;a, impregnandolos de ese saborcito que les da el humo. Cortes como el asado de tira servido con trozos de costillar son emblem&aacute;ticos de esta embajada gastron&iacute;&shy;mica de Uruguay, acompa&ntilde;ados de un tinto de uva</span><em style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;tannat</em><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">, tambi&eacute;n representativa de aquellas latitudes. Otro atractivo son sus monumentales pizzas despachadas por metro o fracci&oacute;n.</span><br style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;" /><img style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;" src="https://www.dondeir.com/wp-content/uploads/2016/07/don-asado-01.jpg" alt="" /></p>', 'Don Asado es uno de los restaurantes uruguayos clásicos de la ciudad dondeen su menú ofrecen cortes carne, pizza a la leña y cerveza artesanal sudamericana', 'assets/images/14688580844.jpg', 'pp', 'don-asado', 'especial', 'vimeo', 'assets/images/14688580844.jpg', 0, 0, 33, 3, 20, '2017-04-28 10:10:38', '2017-04-28 10:10:38'),
(30, 'The Melting Pot, el templo del fondue', 'http://www.meltingpotmexico.com/index.php', '<p>&nbsp;<span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">En&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">The Melting Pot&nbsp;</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">creamos momentos memorables con la familia, amigos y pareja, regal&aacute;ndote una experiencia &uacute;nica en cada visita. Desde el momento en el que la primer pieza de pan se sumerge y la &uacute;ltima pieza de&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">postre</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;se saborea, descubrir&aacute;s una experiencia gastron&oacute;mica exclusiva.&nbsp;</span></p>\r\n<p><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Durante m&aacute;s de tres d&eacute;cadas,&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">The Melting Pot</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;se ha definido como uno de los lugares predilectos de la escena gastron&oacute;mica de E.U.A. Hoy con m&aacute;s de 143 ubicaciones, ha decidido crecer globalmente llegando primero a Canad&aacute; y ahora a M&eacute;xico.&nbsp;</span><br style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;" /><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">The Melting Pot</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">es el lugar ideal para disfrutar de un&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;"><em>fondue</em></strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;de chocolate despu&eacute;s de una pel&iacute;&shy;cula, celebrar un cumplea&ntilde;os o un aniversario. El lugar perfecto para interactuar y conectar al mismo tiempo que disfruta una deliciosa experiencia.&nbsp;</span><br style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;" /><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Una bell&iacute;&shy;sima casa en el coraz&oacute;n de&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Pedregal</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">, un restaurante vanguardista en&nbsp;</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Sat&eacute;lite</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;el cual brinda intimidad y confort y uno m&aacute;s en</span><strong style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;Interlomas</strong><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;dentro del Centro Comercial, son el perfecto lugar en donde el fondue se convierte en una memorable cena de cuatro tiempos con vinos exquisitos, un ambiente relajado, mesas privadas y un excelente servicio.&nbsp;</span><br style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;" /><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">Si lo que buscas es una deliciosa caja de fresas con chocolate o</span><em style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;aderezos</em><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;y&nbsp;</span><em style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">sazonadores</em><span style="color: #555555; font-family: ''Helvetica Neue'', Helvetica, Arial, sans-serif;">&nbsp;para dar el toque extra especial a sus comidas, The Melting Pot te comparte sus recetas con una variedad de productos que vende en su tienda, adem&aacute;s si eres amante del fondue y te consideras todo un experto te encantar&aacute; saber que tiene un club del fondue, donde obtendr&aacute;s muchos beneficios como promociones, puntos, entre otras sorpresas.&nbsp;</span></p>', 'The Melting pot es una nueva experiencia gastronómica divertida e interactiva, que sin duda te hará ser un ferviente admirador de los fondues', 'assets/images/14688538260.jpg', 'pp', 'the-melting-pot-el-templo-del-fondue', 'especial', 'vimeo', 'assets/images/14688538260.jpg', 0, 0, 33, 3, 11, '2017-04-28 10:11:59', '2017-04-28 10:11:59');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `sucursals`
--

INSERT INTO `sucursals` (`id`, `id_marca`, `nombre`, `telefono`, `latitud`, `longitud`, `referencia`, `calle`, `colonia`, `no_ext`, `no_int`, `horarios`, `fachada`, `id_estado`, `id_zona`, `restorando`, `restaurantes`, `tuvo_llamada_bienvenida`, `detalle_llamada`, `conoce_vb`, `escala_info`, `motivo_desconoce`, `reforzo_info`, `material_pop`, `calcomanias`, `acrilicos`, `comunicados_desclub`, `comunicados_bbva`, `reloj_colgante`, `calcomanias_desclub`, `tarjetas_desclub`, `nombre_atendio`, `cargo_atendio`, `geolocalicacion_revisada`, `created_at`, `updated_at`) VALUES
(31, 27, 'Puerto Gustavia, Insurgentes Sur', '5661 7788/ 5661 7791', '19.3562336', '-99.1845917', 'ref', 'Av. Insurgentes Sur', 'col', '1826', '', 'Mar. a sáb., 13:00 a 22:00; dom., 13:00 a 20:00. ', '', 9, 13, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:07:31', '2017-04-28 10:07:31'),
(32, 30, 'The Melting Pot, Sur', '5280 5220 ', '19.3194424', '-99.2111188', 'ref', 'Plaza Jolie: Av. de las Fuentes', 'colonia', '425', '', 'Lun. a mié., 13:00 a 23:00; jue. a sáb., 13:00 a 00:00; dom., 13:00 a 19:00.', '', 9, 13, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:13:51', '2017-04-28 10:13:51'),
(33, 30, 'The Melting Pot, Poniente', '5290 4189 ', '19.3970866', '-99.2815261', 'ref', 'Centro Comercial Paseo Interlomas: Vialidad de la Barranca', 'col', '06', '2º Piso', 'Lun. a sáb., 13:00 a 00:00; dom., 13:00 a 19:00.', '', 9, 15, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:14:52', '2017-04-28 10:14:52'),
(34, 30, 'The Melting Pot, Satélite', '5393 8370 ', '19.5057188', '-99.2348308', 'ref', 'Cto. Médicos', 'col', '09', '', 'Lun. a sáb., 13:00 a 00:00; dom., 13:00 a 18:00.', '', 9, 11, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:15:43', '2017-04-28 10:15:43'),
(35, 28, 'Al Andalus, Del Valle', '5523 9813', '19.3942519', '-99.1785546', 'ref', 'Nueva York', 'colonia', '91', '', 'Lun. a dom., 09:00 a 18:00.', '', 9, 16, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:17:24', '2017-04-28 10:17:24'),
(36, 28, 'Al Andalus, Centro Histórico', '5522 2528/ 5522 2562.', '19.427802', '-99.1293837', 'ref', 'Mesones', 'colonia', '171', '', 'Lun. a dom., 09:00 a 18:00.', '', 9, 10, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:18:14', '2017-04-28 10:18:14'),
(37, 29, 'Don asado, Polanco ', '2624 2783/ 2624 2785', '19.4352776', '-99.1884848', 'referencia', 'Av. Homero ', 'colonia', '428', '', 'Dom.,13.00 a 19:30; mar. a jue.,13:00 a 23:00', '', 9, 7, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:19:23', '2017-04-28 10:19:23'),
(38, 29, 'Don Asado, Del Valle', '5524 9190', '19.3687294', '-99.1668235', 'referencia', 'Av. Parroquia', 'colonia', '906', '', 'Dom., 13:00 a 19:30; mar. a sáb., 13:00 a 23:00.', '', 9, 16, '', '', 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '2017-04-28 10:20:09', '2017-04-28 10:20:09');

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
