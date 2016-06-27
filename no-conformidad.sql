-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-06-2016 a las 04:42:05
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `no-conformidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE `acciones` (
  `id` int(255) NOT NULL,
  `id_nfc` varchar(100) NOT NULL,
  `acciones` varchar(100) NOT NULL,
  `ruta_adjunto` varchar(100) NOT NULL,
  `id_encargado` varchar(100) NOT NULL,
  `descripcion` text NOT NULL,
  `status` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `int` int(100) NOT NULL,
  `nom_cargo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`int`, `nom_cargo`) VALUES
(1, 'Control Calidad'),
(2, 'Gefe departamento'),
(3, 'Gerente de Area'),
(4, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cierre`
--

CREATE TABLE `cierre` (
  `id` int(11) NOT NULL,
  `id_nfc` varchar(100) NOT NULL,
  `autorizo` varchar(100) NOT NULL,
  `nombre_rh` text NOT NULL,
  `fecha_cierre` date NOT NULL,
  `observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `ID_departamento` int(10) NOT NULL,
  `Departamento` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`ID_departamento`, `Departamento`) VALUES
(1, 'INFORMATICA'),
(2, 'TRAFICO'),
(3, 'OPERACIONES'),
(4, 'GLOSA'),
(5, 'CAPTURA'),
(6, 'FACTURACION'),
(7, 'ADMINISTRACION'),
(8, 'DIRECCION'),
(9, 'CLASIFICACION'),
(10, 'R. HUMANOS'),
(11, 'CUENTAS POR COBRAR'),
(12, 'COMERCIALIZACION'),
(13, 'AUDITORIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_06_16_185539_create_NCF1_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ncf`
--

CREATE TABLE `ncf` (
  `id` int(10) UNSIGNED NOT NULL,
  `numNCF` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `status_doc` int(10) NOT NULL,
  `fecha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_terminacion` date NOT NULL,
  `id_elaboro` int(11) NOT NULL,
  `responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ncf`
--

INSERT INTO `ncf` (`id`, `numNCF`, `status_doc`, `fecha`, `Fecha_terminacion`, `id_elaboro`, `responsable`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'sdfsdf', 0, '12-06-2016', '2016-06-29', 1, '1', 'no elaboro un reporte dfdfgdfgdfgdfgdfgd  dfgdfg   dfgdfg    dfgdfg   dfgdf   dfg  dfgdfg\n dfgdfgfd  dgfghf  fghfg hfghfg', '2016-06-26 21:00:55', '0000-00-00 00:00:00'),
(2, 'sdfsdf', 0, '2016-06-22', '2016-06-02', 1, '1', '1', '2016-06-23 22:24:15', '2016-06-23 03:33:42'),
(3, 'sdf', 0, '2016-06-22', '2016-06-22', 1, '1', 'test de alta de referencia..', '2016-06-23 22:24:18', '2016-06-23 03:39:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rncf_2`
--

CREATE TABLE `rncf_2` (
  `id` int(11) NOT NULL,
  `id_ncf` varchar(100) NOT NULL,
  `causas_raiz` text NOT NULL,
  `id_gerente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rncf_referenciai`
--

CREATE TABLE `rncf_referenciai` (
  `id` int(11) NOT NULL,
  `id_ncf` varchar(100) NOT NULL,
  `referencia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rncf_seguimiento`
--

CREATE TABLE `rncf_seguimiento` (
  `id` int(11) NOT NULL,
  `id_ncf` varchar(100) NOT NULL,
  `fecha_seguimiento` date NOT NULL,
  `resultados` text NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `ID` int(20) NOT NULL,
  `nom_Sucursal` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`ID`, `nom_Sucursal`) VALUES
(1, 'PROGRESO'),
(3, 'MERIDA'),
(4, 'CANCUN'),
(5, 'CD. DEL CARMEN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(11) NOT NULL,
  `id_nfc` varchar(100) NOT NULL,
  `norma` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `observacion` text CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `amenaza` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NombreC` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `sucursal` int(5) NOT NULL,
  `departamento` int(5) NOT NULL,
  `correo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `backup_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` enum('1','2','3','4') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `NombreC`, `sucursal`, `departamento`, `correo`, `backup_pass`, `password`, `nivel`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'kevin', 'Jeen Kevin Dzul Tzuc', 1, 2, 'kevind@aduanaldelvalle.mx', '123', '$2y$10$sH/x8N7d/hyI7oYZDQDkm.FfT6yV23eMNNUM8guAaTf8bq8ynnAGi', '1', 'ZmgmLESVBxmBJ1BQvEP6xL8ZFmNx0LK8WZNv7ptGJ9kJstpwwbHdglHzB3sV', NULL, '2016-06-27 04:47:46'),
(19, 'aaron', 'aaron n', 1, 1, 'aaron@hotmail.com', 'asdf', '$2y$10$NHRX14gBc4YNMkan8PnzU.RYR1fjEZWZNqrjsTJYZ8IwIq58yQGiS', '2', '1eUxiQvDn11ZAvNLbOY90sWuir38by1xOcd5e3ov2SLMUrI1fH5ChSvnh1Gq', '2016-06-24 18:56:55', '2016-06-27 04:48:16'),
(20, 'mariob', 'mario alberto blanco', 3, 6, 'mario@aduanaldelvalle.mx', 'mariob', '$2y$10$FP3fzC9oHCBW3sq3Vja44OqAMRTrjgR0CjFhqFDipZZl7CLiLqOo6', '1', NULL, '2016-06-27 01:52:01', '2016-06-27 01:52:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_nfc` (`id_nfc`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`int`);

--
-- Indices de la tabla `cierre`
--
ALTER TABLE `cierre`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`ID_departamento`);

--
-- Indices de la tabla `ncf`
--
ALTER TABLE `ncf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `numNCF` (`numNCF`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `rncf_2`
--
ALTER TABLE `rncf_2`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_ncf` (`id_ncf`);

--
-- Indices de la tabla `rncf_referenciai`
--
ALTER TABLE `rncf_referenciai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_ncf` (`id_ncf`);

--
-- Indices de la tabla `rncf_seguimiento`
--
ALTER TABLE `rncf_seguimiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_correo_unique` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `int` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cierre`
--
ALTER TABLE `cierre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `ID_departamento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `ncf`
--
ALTER TABLE `ncf`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `rncf_2`
--
ALTER TABLE `rncf_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rncf_referenciai`
--
ALTER TABLE `rncf_referenciai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rncf_seguimiento`
--
ALTER TABLE `rncf_seguimiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
