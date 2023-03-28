-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2023 a las 09:16:08
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `altasbajas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_cat_categorias`
--

CREATE TABLE `t_cat_categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_categoria` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `t_cat_categorias`
--

INSERT INTO `t_cat_categorias` (`id`, `tipo_categoria`, `created_at`, `updated_at`) VALUES
(1, 'Soporte Tecnico', '2023-03-23 23:32:52', '2023-03-23 23:32:52'),
(2, 'Desarrollo de Aplicaciones', '2023-03-23 23:33:07', '2023-03-23 23:33:07'),
(3, 'Cine', '2023-03-23 23:35:07', '2023-03-23 23:35:07'),
(4, 'Spotify', '2023-03-23 23:35:14', '2023-03-23 23:35:14'),
(5, 'Netflix', '2023-03-23 23:35:20', '2023-03-23 23:35:20'),
(6, 'Servicios Medicos', '2023-03-23 23:35:27', '2023-03-23 23:35:27'),
(7, 'Servicios Domesticos', '2023-03-23 23:35:39', '2023-03-23 23:35:39'),
(8, 'Transporte', '2023-03-23 23:36:00', '2023-03-23 23:36:00'),
(9, 'Vestimenta', '2023-03-23 23:36:55', '2023-03-23 23:36:55'),
(10, 'Calzado', '2023-03-23 23:37:09', '2023-03-23 23:37:09'),
(11, 'Desarrollo Web', '2023-03-23 23:37:51', '2023-03-23 23:37:51'),
(12, 'Comida', '2023-03-23 23:38:00', '2023-03-23 23:38:00'),
(13, 'Bebidas Alcoholicas', '2023-03-23 23:38:14', '2023-03-23 23:38:14'),
(14, 'Electrodomesticos', '2023-03-23 23:39:01', '2023-03-23 23:39:01'),
(15, 'Papeleria', '2023-03-23 23:40:34', '2023-03-23 23:40:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_cat_categorias`
--
ALTER TABLE `t_cat_categorias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_cat_categorias`
--
ALTER TABLE `t_cat_categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
