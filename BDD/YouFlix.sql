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

-- Volcando estructura para tabla proyectointegrado.categorías
CREATE TABLE IF NOT EXISTS `categorías` (
  `Id_categorías` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id_categorías`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.foro
CREATE TABLE IF NOT EXISTS `foro` (
  `Id_foro` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id_foro`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.live
CREATE TABLE IF NOT EXISTS `live` (
  `Id_live` int(11) NOT NULL AUTO_INCREMENT,
  `Id_categorias` int(11) DEFAULT NULL,
  `Nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id_live`),
  KEY `FK_live_categorías` (`Id_categorias`),
  CONSTRAINT `FK_live_categorías` FOREIGN KEY (`Id_categorias`) REFERENCES `categorías` (`Id_categorías`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.mensajes
CREATE TABLE IF NOT EXISTS `mensajes` (
  `Id_mensajes` int(11) NOT NULL AUTO_INCREMENT,
  `Id_sección` int(11) DEFAULT NULL,
  `Contenido` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `Valoración` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_mensajes`),
  KEY `FK_mensajes_sección` (`Id_sección`),
  CONSTRAINT `FK_mensajes_sección` FOREIGN KEY (`Id_sección`) REFERENCES `sección` (`Id_sección`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.pago
CREATE TABLE IF NOT EXISTS `pago` (
  `Id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.sección
CREATE TABLE IF NOT EXISTS `sección` (
  `Id_sección` int(11) NOT NULL AUTO_INCREMENT,
  `Id_foro` int(11) DEFAULT NULL,
  `Nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id_sección`),
  KEY `FK_sección_foro` (`Id_foro`),
  CONSTRAINT `FK_sección_foro` FOREIGN KEY (`Id_foro`) REFERENCES `foro` (`Id_foro`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `Usuario` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `Password` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `Pago_id` int(11) DEFAULT NULL,
  `Id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id_usuario`),
  KEY `FK_usuario_pago` (`Pago_id`),
  CONSTRAINT `FK_usuario_pago` FOREIGN KEY (`Pago_id`) REFERENCES `pago` (`Id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla proyectointegrado.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `Id_videos` int(11) NOT NULL AUTO_INCREMENT,
  `Id_categorias` int(11) DEFAULT NULL,
  `Comentarios` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `Puntuación` int(11) DEFAULT NULL,
  `Título` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`Id_videos`),
  KEY `FK_videos_categorías` (`Id_categorias`),
  CONSTRAINT `FK_videos_categorías` FOREIGN KEY (`Id_categorias`) REFERENCES `categorías` (`Id_categorías`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
