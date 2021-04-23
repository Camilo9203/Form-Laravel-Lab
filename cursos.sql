-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-04-2021 a las 11:52:13
-- Versión del servidor: 10.3.27-MariaDB-0+deb10u1
-- Versión de PHP: 7.3.27-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cursos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamentos` int(11) NOT NULL,
  `nombreDepartamentos` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id_departamentos`, `nombreDepartamentos`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlantico'),
(5, 'Bolivar'),
(6, 'Boyaca'),
(7, 'Caldas'),
(8, 'Caqueta'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Choco'),
(13, 'Cordoba'),
(14, 'Cundinamarca'),
(15, 'Guainia'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nariño'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindio'),
(25, 'Risaralda'),
(26, 'San Andres y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupes'),
(32, 'Vichada'),
(33, 'Bogotá');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichaCaracterizacion`
--

CREATE TABLE `fichaCaracterizacion` (
  `idfichaCaracterizacion` int(11) NOT NULL,
  `tipoDocumento` varchar(45) DEFAULT NULL,
  `numeroDocumento` varchar(45) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `nacionalidad` varchar(100) DEFAULT NULL,
  `genero` varchar(15) DEFAULT NULL,
  `cargo` varchar(200) DEFAULT NULL,
  `entidad` varchar(100) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `municipio` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `grupoEtnico` varchar(500) DEFAULT NULL,
  `discapacidad` varchar(500) DEFAULT NULL,
  `victimaConflicto` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usuariosCursos_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_25_141213_users', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariosCursos`
--

CREATE TABLE `usuariosCursos` (
  `idUsuario` int(11) NOT NULL,
  `usuarioCurso` varchar(100) NOT NULL,
  `passCurso` varchar(200) NOT NULL,
  `emailCurso` varchar(200) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `curso` varchar(200) NOT NULL,
  `ciudad` varchar(200) NOT NULL,
  `pais` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamentos`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `fichaCaracterizacion`
--
ALTER TABLE `fichaCaracterizacion`
  ADD PRIMARY KEY (`idfichaCaracterizacion`),
  ADD KEY `fk_fichaCaracterizacion_usuariosCursos_idx` (`usuariosCursos_idUsuario`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuariosCursos`
--
ALTER TABLE `usuariosCursos`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id_departamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fichaCaracterizacion`
--
ALTER TABLE `fichaCaracterizacion`
  MODIFY `idfichaCaracterizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuariosCursos`
--
ALTER TABLE `usuariosCursos`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `fichaCaracterizacion`
--
ALTER TABLE `fichaCaracterizacion`
  ADD CONSTRAINT `fk_fichaCaracterizacion_usuariosCursos` FOREIGN KEY (`usuariosCursos_idUsuario`) REFERENCES `usuariosCursos` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
