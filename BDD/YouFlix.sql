-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para proyectointegrado
CREATE DATABASE IF NOT EXISTS `proyectointegrado` /*!40100 DEFAULT CHARACTER SET ucs2 COLLATE ucs2_spanish_ci */;
USE `proyectointegrado`;

-- Volcando estructura para tabla proyectointegrado.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categorias` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentarios` int(11) NOT NULL AUTO_INCREMENT,
  `id_videos` int(11) DEFAULT NULL,
  `comentarios` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_comentarios`),
  KEY `FK_comentarios_videos` (`id_videos`),
  CONSTRAINT `FK_comentarios_videos` FOREIGN KEY (`id_videos`) REFERENCES `videos` (`Id_videos`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.foro
CREATE TABLE IF NOT EXISTS `foro` (
  `id_foro` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_foro`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.live
CREATE TABLE IF NOT EXISTS `live` (
  `id_live` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorias` int(11) DEFAULT NULL,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_live`),
  KEY `FK_live_categorías` (`id_categorias`),
  CONSTRAINT `FK_live_categorías` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`Id_categorias`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.mensajes
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id_mensajes` int(11) NOT NULL AUTO_INCREMENT,
  `id_seccion` int(11) DEFAULT NULL,
  `contenido` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `valoracion` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mensajes`),
  KEY `FK_mensajes_sección` (`id_seccion`),
  CONSTRAINT `FK_mensajes_sección` FOREIGN KEY (`Id_sección`) REFERENCES `seccion` (`id_seccion`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.pago
CREATE TABLE IF NOT EXISTS `pago` (
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.seccion
CREATE TABLE IF NOT EXISTS `seccion` (
  `id_seccion` int(11) NOT NULL AUTO_INCREMENT,
  `id_foro` int(11) DEFAULT NULL,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_seccion`),
  KEY `FK_sección_foro` (`id_foro`),
  CONSTRAINT `FK_sección_foro` FOREIGN KEY (`id_foro`) REFERENCES `foro` (`Id_foro`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `password` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `pago_id` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_usuario`),
  KEY `FK_usuario_pago` (`pago_id`),
  CONSTRAINT `FK_usuario_pago` FOREIGN KEY (`pago_id`) REFERENCES `pago` (`Id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id_videos` int(11) NOT NULL AUTO_INCREMENT,
  `id_comentarios` int(11) NOT NULL DEFAULT '0',
  `id_categorias` int(11) DEFAULT NULL,
  `puntuacion` int(11) DEFAULT NULL,
  `titulo` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `url_video` varchar(50) COLLATE ucs2_spanish_ci NOT NULL,
  PRIMARY KEY (`id_videos`),
  KEY `FK_videos_comentarios` (`id_comentarios`),
  KEY `FK_videos_categorías` (`id_categorias`),
  CONSTRAINT `FK_videos_categorías` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`Id_categorias`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
