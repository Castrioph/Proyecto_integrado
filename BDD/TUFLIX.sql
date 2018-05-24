

CREATE DATABASE IF NOT EXISTS `proyectointegrado` ;
USE `proyectointegrado`;

-- Volcando estructura para tabla proyectointegrado.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categorias` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla proyectointegrado.categorias: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla proyectointegrado.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentarios` int(11) NOT NULL AUTO_INCREMENT,
  `id_video` int(11) DEFAULT NULL,
  `comentarios` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_comentarios`),
  KEY `FK_comentarios_videos` (`id_video`),
  CONSTRAINT `FK_comentarios_videos` FOREIGN KEY (`id_video`) REFERENCES `videos` (`Id_videos`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla proyectointegrado.comentarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` (`id_comentarios`, `id_video`, `comentarios`) VALUES
	(1comentarios, 2, NULL),
	(2, 1, 'ohoÃ±h'),
	(3, 1, 'tjweojog'),
	(4, 2, 'jdpdjgas');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;

-- Volcando estructura para tabla proyectointegrado.foro
CREATE TABLE IF NOT EXISTS `foro` (
  `Id_foro` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id_foro`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla proyectointegrado.foro: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `foro` DISABLE KEYS */;
/*!40000 ALTER TABLE `foro` ENABLE KEYS */;

-- Volcando estructura para tabla proyectointegrado.live
CREATE TABLE IF NOT EXISTS `live` (
  `Id_live` int(11) NOT NULL AUTO_INCREMENT,
  `Id_categorias` int(11) DEFAULT NULL,
  `Nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id_live`),
  KEY `FK_live_categorías` (`Id_categorias`),
  CONSTRAINT `FK_live_categorías` FOREIGN KEY (`Id_categorias`) REFERENCES `categorías` (`Id_categorías`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla proyectointegrado.live: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `live` DISABLE KEYS */;
/*!40000 ALTER TABLE `live` ENABLE KEYS */;

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

-- Volcando datos para la tabla proyectointegrado.mensajes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `mensajes` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensajes` ENABLE KEYS */;

-- Volcando estructura para tabla proyectointegrado.pago
CREATE TABLE IF NOT EXISTS `pago` (
  `Id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla proyectointegrado.pago: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pago` DISABLE KEYS */;
/*!40000 ALTER TABLE `pago` ENABLE KEYS */;

-- Volcando estructura para tabla proyectointegrado.sección
CREATE TABLE IF NOT EXISTS `sección` (
  `Id_sección` int(11) NOT NULL AUTO_INCREMENT,
  `Id_foro` int(11) DEFAULT NULL,
  `Nombre` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`Id_sección`),
  KEY `FK_sección_foro` (`Id_foro`),
  CONSTRAINT `FK_sección_foro` FOREIGN KEY (`Id_foro`) REFERENCES `foro` (`Id_foro`)
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla proyectointegrado.sección: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `sección` DISABLE KEYS */;
/*!40000 ALTER TABLE `sección` ENABLE KEYS */;

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

-- Volcando datos para la tabla proyectointegrado.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

-- Volcando estructura para tabla proyectointegrado.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id_video` int(11) NOT NULL AUTO_INCREMENT,
  `id_comentarios` int(11) DEFAULT NULL,
  `Id_categorias` int(11) DEFAULT NULL,
  `descripcion` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `puntuacion` int(11) DEFAULT NULL,
  `titulo` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `miniaturas` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  `media_video` varchar(50) COLLATE ucs2_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_video`),
  KEY `FK_videos_categorías` (`Id_categorias`),
  CONSTRAINT `FK_videos_categorías` FOREIGN KEY (`Id_categorias`) REFERENCES `categorías` (`Id_categorías`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

-- Volcando datos para la tabla proyectointegrado.videos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id_video`, `id_comentarios`, `Id_categorias`, `descripcion`, `puntuacion`, `titulo`, `fecha`, `miniaturas`, `media_video`) VALUES
	(1, NULL, NULL, NULL, NULL, 'LOS RODRIGUEZ 8', '2018-05-23', 'images/2kmini.jpg', 'images/markeparguela.mp4');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
