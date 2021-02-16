-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-02-2021 a las 11:14:09
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `masterdual.encuestas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

DROP TABLE IF EXISTS `asignaturas`;
CREATE TABLE IF NOT EXISTS `asignaturas` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profesor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `asignaturas_name_unique` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`id`, `name`, `profesor`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Sistemas Automatizados', 'Jorge Jiménez', 'Contenidos:\r\n‐Programar aplicaciones avanzadas de automatización mediante PLCs\r\n‐Seleccionar las tecnologías adecuadas para la automatización de un proceso industrial\r\n‐Programar y configurar Sistemas de Supervisión y Adquisición de Datos (SCADAs)\r\n‐Introducir métodos de implementación de controladores en los procesos industriales\r\n‐Diseñar e implementar sistemas específicos de adquisición de datos', NULL, NULL),
(2, 'Ingeniería de Datos', 'Joaquín Olivares', 'Contenidos:\r\n‐Utilizar Cloud Computing en entornos industriales\r\n‐Aplicar técnicas de Business Intelligence para la toma de decisiones contextualizada.\r\n‐Blockchain y trazabilidad', NULL, NULL),
(3, 'Comunicaciones Industriales', 'David Rodríguez', 'Contenidos:\r\n‐Diseñar y configurar sistemas de comunicaciones industriales basadas en PROFIBUS, ETHERNET Y MODBUS\r\n‐Seleccionar las tecnologías adecuadas para la automatización de un proceso industrial', NULL, NULL),
(4, 'Sistemas Robotizados', 'Mario Ruz', 'Contenidos:\r\n‐Programar robots industriales y diseñar entornos en los que éstos sean de aplicación.\r\n‐Conocer el potencial de la robótica como herramienta de generación de eficiencia en los procesos productivos.\r\n‐Utilización de herramientas virtuales para la programación y simulación de robots.\r\n‐Programación de aplicaciones avanzadas de seguimiento (tracking)\r\n‐Programación de robots desde PLCs.', NULL, NULL),
(5, 'Instrumentación Industrial', 'Francisco Vázquez', 'Contenidos:\r\n‐Seleccionar la instrumentación adecuada para cada tipo de proceso\r\n‐Seleccionar las tecnologías adecuadas para la automatización de un proceso industrial\r\n‐Diseñar sistemas de control para procesos industriales ', NULL, NULL),
(6, 'IOT Industrial', 'José M. Palomares', 'Contenidos:\r\n‐Placas de prototipado ‐Sensores Analógicos y Digitales, Actuadores y Relés.\r\n‐Sistemas Operativos en Tiempo Real\r\n‐Seleccionar las plataformas de cómputo más adecuadas para el despliegue de infraestructura para IoT.\r\n‐Realizar tareas de preprocesamiento y postprocesamiento a partir de sensores.\r\n‐Aplicar técnicas de compresión y reducción de datos. ‐Diseñar e implementar sistemas específicos de adquisición de datos.\r\n‐Desplegar y programar sistemas empotrados.', NULL, NULL),
(7, 'Comunicaciones Avanzadas y Seguridad', 'Juan C. Gámez', 'Contenidos:\r\n‐Introducción a las redes de computadores y redes de sensores.\r\n‐Configuración de dispositivos de red\r\n‐Sistemas de comunicación inalámbricos\r\n‐Seguridad en dispositivos de red.\r\n‐Comunicaciones seguras en la industria\r\n‐Protocolos de comunicaciones y seguridad en redes IoT.', NULL, NULL),
(8, 'Visión por Computador', 'Joaquín Olivares', 'Contenidos:\r\n‐Fundamentos en procesamiento de imágenes\r\n‐Iluminación\r\n‐Sensores\r\n‐Procesamiento de imágenes ', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas_asignatura_user`
--

DROP TABLE IF EXISTS `encuestas_asignatura_user`;
CREATE TABLE IF NOT EXISTS `encuestas_asignatura_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `estudiante_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asignatura_id` bigint(20) UNSIGNED NOT NULL,
  `pregunta_1` set('0','1','2','3','4','5','NS/NC') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pregunta_2` set('0','1','2','3','4','5','NS/NC') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pregunta_3` set('0','1','2','3','4','5','NS/NC') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pregunta_4` set('0','1','2','3','4','5','NS/NC') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pregunta_5` set('0','1','2','3','4','5','NS/NC') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pregunta_6` set('0','1','2','3','4','5','NS/NC') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `comentarios` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` set('No_Iniciada','Iniciada','Finalizada_Con_Incidencias','Finalizada_Sin_Incidencias') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No_Iniciada',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `encuestas_asignatura_user_estudiante_id_foreign` (`estudiante_id`),
  KEY `encuestas_asignatura_user_asignatura_id_foreign` (`asignatura_id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `encuestas_asignatura_user`
--

INSERT INTO `encuestas_asignatura_user` (`id`, `estudiante_id`, `asignatura_id`, `pregunta_1`, `pregunta_2`, `pregunta_3`, `pregunta_4`, `pregunta_5`, `pregunta_6`, `comentarios`, `estado`, `created_at`, `updated_at`) VALUES
(1, '3f73be45-4795-427c-8147-7d5430826c5e', 1, '1', '2', '4', '4', '5', 'NS/NC', 'dsffdsfdfsd', 'Finalizada_Con_Incidencias', NULL, '2021-02-08 11:43:52'),
(2, '3f73be45-4795-427c-8147-7d5430826c5e', 2, '4', '4', '4', '4', '4', '4', 'sadsadasdsadsadasda', 'Finalizada_Sin_Incidencias', NULL, '2021-02-08 11:44:32'),
(3, '3f73be45-4795-427c-8147-7d5430826c5e', 3, '1', '2', '3', '4', '5', 'NS/NC', 'sadsdasddsa', 'Finalizada_Con_Incidencias', NULL, '2021-02-09 08:57:13'),
(4, '3f73be45-4795-427c-8147-7d5430826c5e', 4, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(5, '3f73be45-4795-427c-8147-7d5430826c5e', 5, '1', '2', '3', '4', '5', 'NS/NC', 'saadsdsadsadsadas', 'No_Iniciada', NULL, '2021-02-08 11:32:50'),
(6, '3f73be45-4795-427c-8147-7d5430826c5h', 1, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(7, '3f73be45-4795-427c-8147-7d5430826c5h', 2, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(8, '3f73be45-4795-427c-8147-7d5430826c5h', 3, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(9, '3f73be45-4795-427c-8147-7d5430826c5h', 4, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(10, '3f73be45-4795-427c-8147-7d5430826c5h', 5, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(11, '3f73be45-4795-427c-8147-7d5430826c5z', 1, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(12, '3f73be45-4795-427c-8147-7d5430826c5z', 2, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(13, '3f73be45-4795-427c-8147-7d5430826c5z', 3, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(14, '3f73be45-4795-427c-8147-7d5430826c5z', 4, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(15, '3f73be45-4795-427c-8147-7d5430826c5z', 5, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(16, '3f73be45-4795-427c-8147-7d5430826c5z', 6, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(17, '3f73be45-4795-427c-8147-7d5430826c5h', 6, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(18, '3f73be45-4795-427c-8147-7d5430826c5e', 6, '1', '2', '3', '4', '5', 'NS/NC', 'sadsaddsadasdaadsas', 'No_Iniciada', NULL, '2021-02-08 11:39:49'),
(19, '3f73be45-4795-427c-8147-7d5430826c5e', 7, '1', '2', '3', '4', '5', 'NS/NC', 'asdsadsasadadas', 'No_Iniciada', NULL, '2021-02-08 11:41:01'),
(20, '3f73be45-4795-427c-8147-7d5430826c5e', 8, '5', '5', '5', '5', '5', '5', 'sadsaasdssadas', 'No_Iniciada', NULL, '2021-02-08 11:41:37'),
(21, '3f73be45-4795-427c-8147-7d5430826c5h', 7, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(22, '3f73be45-4795-427c-8147-7d5430826c5h', 8, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(23, '3f73be45-4795-427c-8147-7d5430826c5z', 7, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL),
(24, '3f73be45-4795-427c-8147-7d5430826c5z', 8, '0', '0', '0', '0', '0', '0', NULL, 'No_Iniciada', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_14_090204_create_roles_table', 1),
(4, '2019_05_14_090204_create_roles_user_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2021_01_28_090204_create_asignaturas_table', 1),
(7, '2021_01_28_100204_create_encuestas_asignatura_user_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `From_user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `To_user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_notification` set('normal','incidencia') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal',
  `estado` set('no_leido','leido','finalizado') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no_leido',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_from_user_id_foreign` (`From_user_id`),
  KEY `notifications_to_user_id_foreign` (`To_user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `notifications`
--

INSERT INTO `notifications` (`id`, `From_user_id`, `To_user_id`, `subject`, `body`, `type_notification`, `estado`, `created_at`, `updated_at`) VALUES
(2, '3f73be45-4795-427c-8147-7d5430826c5e', '90007ebc-378f-4bb6-9a7b-97fe74d2ec8e', 'Evaluación Asignatura', 'El usuario: Alumno 1 ha relizado la encuesta de la asignatura: IOT Industrial, con un grado satisfactorio', 'normal', 'no_leido', '2021-02-08 11:39:49', '2021-02-08 11:39:49'),
(3, '3f73be45-4795-427c-8147-7d5430826c5e', '90007ebc-378f-4bb6-9a7b-97fe74d2ec8e', 'Evaluación Asignatura', 'El usuario: Alumno 1 ha relizado la encuesta de la asignatura: Comunicaciones Avanzadas y Seguridad, con un grado satisfactorio', 'normal', 'no_leido', '2021-02-08 11:41:01', '2021-02-08 11:41:01'),
(4, '3f73be45-4795-427c-8147-7d5430826c5e', '90007ebc-378f-4bb6-9a7b-97fe74d2ec8e', 'Evaluación Asignatura', 'El usuario: Alumno 1 ha relizado la encuesta de la asignatura: Visión por Computador, con un grado insatisfactorio', 'normal', 'no_leido', '2021-02-08 11:41:37', '2021-02-08 11:41:37'),
(5, '3f73be45-4795-427c-8147-7d5430826c5e', '90007ebc-378f-4bb6-9a7b-97fe74d2ec8e', 'Evaluación Asignatura', 'El usuario: Alumno 1 ha relizado la encuesta de la asignatura: Sistemas Automatizados, con un grado insatisfactorio', 'incidencia', 'no_leido', '2021-02-08 11:43:52', '2021-02-08 11:43:52'),
(6, '3f73be45-4795-427c-8147-7d5430826c5e', '90007ebc-378f-4bb6-9a7b-97fe74d2ec8e', 'Evaluación Asignatura', 'El usuario: Alumno 1 ha relizado la encuesta de la asignatura: Ingeniería de Datos, con un grado satisfactorio', 'normal', 'no_leido', '2021-02-08 11:44:32', '2021-02-08 11:44:32'),
(7, '3f73be45-4795-427c-8147-7d5430826c5e', '90007ebc-378f-4bb6-9a7b-97fe74d2ec8e', 'Evaluación Asignatura', 'El usuario: Alumno 1 ha relizado la encuesta de la asignatura: Comunicaciones Industriales, con un grado insatisfactorio', 'incidencia', 'no_leido', '2021-02-09 08:57:13', '2021-02-09 08:57:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full-access` enum('si','no') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `full-access`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin', 'Administrador del Sisitema', 'si', '2021-01-26 23:00:00', '2021-01-26 23:00:00'),
(2, 'Director Máster', 'director', 'Director del Máster Dual', 'si', '2021-01-26 23:00:00', '2021-01-26 23:00:00'),
(3, 'Tutor Entidad', 'tutorEntidad', 'Tutor de la Empresa/Entidad', 'no', '2021-01-26 23:00:00', '2021-01-26 23:00:00'),
(4, 'Tutor Académico', 'tutorAcademico', 'Tutor del Centro Académico', 'no', '2021-01-26 23:00:00', '2021-01-26 23:00:00'),
(5, 'Estudiante', 'student', 'Estudiante del Máster', 'no', '2021-01-26 23:00:00', '2021-01-26 23:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_user_user_id_foreign` (`user_id`),
  KEY `role_user_role_id_foreign` (`role_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, '90007ebc-378f-4bb6-9a7b-97fe74d2ec8e', 1, '2021-01-27 23:00:00', '2021-01-27 23:00:00'),
(2, '3f73be45-4795-427c-8147-7d5430826c5e', 5, '2021-01-27 23:00:00', '2021-01-27 23:00:00'),
(3, '3f73be45-4795-427c-8147-7d5430826c5h', 5, NULL, NULL),
(4, '3f73be45-4795-427c-8147-7d5430826c5z', 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `active`, `created_at`, `updated_at`) VALUES
('90007ebc-378f-4bb6-9a7b-97fe74d2ec8e', 'Administrator', 'aprior@fundecor.es', NULL, '$2a$10$OOo8wBNmtY0IjZ29Cienhe/jc3NTXAszRg9K2UjVHxn8/zVJl.BU2', NULL, 1, '2021-01-26 23:00:00', '2021-01-26 23:00:00'),
('3f73be45-4795-427c-8147-7d5430826c5e', 'Alumno 1', 'alumno1@prueba.com', NULL, '$2a$10$OOo8wBNmtY0IjZ29Cienhe/jc3NTXAszRg9K2UjVHxn8/zVJl.BU2', 'Bnb61yCthecVahoorjjyS1QCOmTBpdbhFAYqLhxsNNCeT3Qp9m0EzgdKxNb4', 1, '2021-01-28 10:35:53', '2021-01-28 10:35:53'),
('3f73be45-4795-427c-8147-7d5430826c5h', 'Alumno 2', 'alumno2@prueba.com', NULL, '$2a$10$OOo8wBNmtY0IjZ29Cienhe/jc3NTXAszRg9K2UjVHxn8/zVJl.BU2', NULL, 1, NULL, NULL),
('3f73be45-4795-427c-8147-7d5430826c5z', 'Alumno 3', 'alumno3@prueba.com', NULL, '$2a$10$OOo8wBNmtY0IjZ29Cienhe/jc3NTXAszRg9K2UjVHxn8/zVJl.BU2', NULL, 1, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
