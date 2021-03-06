-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para datosdebase
CREATE DATABASE IF NOT EXISTS `datosdebase` /*!40100 DEFAULT CHARACTER SET utf16 COLLATE utf16_spanish2_ci */;
USE `datosdebase`;

-- Volcando estructura para tabla datosdebase.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categorias` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf16_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- Volcando datos para la tabla datosdebase.categorias: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id_categorias`, `nombre`) VALUES
	(1, 'videojuegos'),
	(2, 'tecnologia'),
	(3, 'robotica'),
	(4, 'programacion');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Volcando estructura para tabla datosdebase.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id_comentarios` int(11) NOT NULL AUTO_INCREMENT,
  `id_video` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `comentarios` varchar(50) COLLATE utf16_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id_comentarios`),
  KEY `FK_comentarios_usuarios` (`id_usuario`),
  KEY `FK_comentarios_videos` (`id_video`),
  CONSTRAINT `FK_comentarios_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  CONSTRAINT `FK_comentarios_videos` FOREIGN KEY (`id_video`) REFERENCES `videos` (`id_videos`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- Volcando datos para la tabla datosdebase.comentarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
INSERT INTO `comentarios` (`id_comentarios`, `id_video`, `id_usuario`, `comentarios`) VALUES
	(1, 1, 1, 'ameising'),
	(2, 2, 1, 'video'),
	(3, 3, 1, 'tutorial');
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;

-- Volcando estructura para tabla datosdebase.estrellas
CREATE TABLE IF NOT EXISTS `estrellas` (
  `id_estrellas` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_video` int(11) DEFAULT NULL,
  `estrellas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_estrellas`),
  KEY `FK_estrellas_usuarios` (`id_usuario`),
  KEY `FK_estrellas_videos` (`id_video`),
  CONSTRAINT `FK_estrellas_usuarios` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  CONSTRAINT `FK_estrellas_videos` FOREIGN KEY (`id_video`) REFERENCES `videos` (`id_videos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- Volcando datos para la tabla datosdebase.estrellas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `estrellas` DISABLE KEYS */;
/*!40000 ALTER TABLE `estrellas` ENABLE KEYS */;

-- Volcando estructura para tabla datosdebase.pago
CREATE TABLE IF NOT EXISTS `pago` (
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `metodo` varchar(50) COLLATE utf16_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- Volcando datos para la tabla datosdebase.pago: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pago` DISABLE KEYS */;
/*!40000 ALTER TABLE `pago` ENABLE KEYS */;

-- Volcando estructura para tabla datosdebase.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) COLLATE utf16_spanish2_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf16_spanish2_ci DEFAULT NULL,
  `id_pago` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `FK_usuarios_pago` (`id_pago`),
  CONSTRAINT `FK_usuarios_pago` FOREIGN KEY (`id_pago`) REFERENCES `pago` (`id_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- Volcando datos para la tabla datosdebase.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `id_pago`) VALUES
	(1, 'machakasaurio', 'password', NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

-- Volcando estructura para tabla datosdebase.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id_videos` int(11) NOT NULL AUTO_INCREMENT,
  `id_categorias` int(11) DEFAULT NULL,
  `descripcion` varchar(50) COLLATE utf16_spanish2_ci DEFAULT NULL,
  `puntuacion` int(11) DEFAULT NULL,
  `titulo` varchar(50) COLLATE utf16_spanish2_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `miniaturas` varchar(500) COLLATE utf16_spanish2_ci DEFAULT NULL,
  `media_video` varchar(500) COLLATE utf16_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id_videos`),
  KEY `FK_videos_categorias` (`id_categorias`),
  CONSTRAINT `FK_videos_categorias` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- Volcando datos para la tabla datosdebase.videos: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id_videos`, `id_categorias`, `descripcion`, `puntuacion`, `titulo`, `fecha`, `miniaturas`, `media_video`) VALUES
	(4, 1, NULL, NULL, 'Dark Souls 3', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/2.jpg', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/Dark+Souls+III+-+Opening+Cinematic+Trailer++PS4%2C+XB1%2C+PC.mp4'),
	(5, 1, NULL, NULL, 'Cuphead', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/3.jpg', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/ALL+CUPHEAD+TRAILERS+2013-2017.mp4'),
	(6, 1, NULL, NULL, 'COD black ops 4', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/4.jpg', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/Official+Call+of+Duty+Black+Ops+4+%C2%A0Multiplayer+Reveal+Trailer.mp4'),
	(7, 1, NULL, NULL, 'Hyper Light Drifter', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/5.jpg', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/Hyper+Light+Drifter+-+Release+Trailer.mp4'),
	(8, 1, NULL, NULL, 'Furi', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/6.jpg', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/Furi+-+Announcement+Trailer.mp4'),
	(9, 1, NULL, NULL, 'Black desert', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/7.jpg', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/Black+Desert+Online+Sorceress+PVP+Montage+9+-+Goodbye.mp4'),
	(10, 1, NULL, NULL, 'League of legends', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/8.jpg', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/League+of+Legends+Cinematic+A+New+Dawn.mp4'),
	(11, 1, NULL, NULL, 'WoW', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/1.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/videojuegos/World+of+Warcraft+Battle+for+Azeroth+Cinematic+Trailer.mp4'),
	(12, 2, NULL, NULL, '5 mitos absurdos del pc gaming', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/1.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/5+mitos+ABSURDOS+del+PC+GAMING.mp4'),
	(13, 2, NULL, NULL, 'AMD Ryzen 2 Cuál deberias comprar', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/2.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/AMD+Ryzen+2+Cu%C3%A1l+debes+comprar+R7+2700X+vs+R5+2600X+vs+i7+8700K.mp4'),
	(14, 2, NULL, NULL, 'Mini PC', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/3.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/EL+MINI+PC+GAMING+M%C3%81S+POTENTE+DEL+MUNDO+2018++Intel+y+AMD+se+unen+para+crear+esto.mp4'),
	(15, 2, NULL, NULL, 'Monitor gaming curvo', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/4.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/Monitor+GAMING+CURVO+de+144hz+-+MSI+Optix+G27C+analisis+en+espa%C3%B1ol.mp4'),
	(16, 2, NULL, NULL, 'La leyenda de Crysis', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/5.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/Qu%C3%A9+hace+tan+especial+a+este+juego+La+leyenda+de+CRYSIS%2C+el+videojuego.mp4'),
	(17, 2, NULL, NULL, 'Teclado mecánico', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/6.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/Vale+la+pena+un+Teclado+Mec%C3%A1nico++Diferencia+de+Teclado+Mec%C3%A1nico+vs+Membrana+Proto+HW.mp4'),
	(18, 2, NULL, NULL, 'Unboxing GeForce GTX 1070', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/7.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/UNBOXING+Nvidia+GeForce+GTX+1070Ti+Founders+Edition+en+Espa%C3%B1ol.mp4'),
	(19, 2, NULL, NULL, 'Diferencia de frames al jugar', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/8.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/tecnologia/Hay+DIFERENCIA+entre+jugar+a+30FPS60FPS120FPS144FPS165FPS++Mi+opini%C3%B3n%2C+mi+experiencia.mp4'),
	(20, 3, NULL, NULL, 'Getting some air, Atlas', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/1.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/Getting+some+air%2C+Atlas.mp4'),
	(21, 3, NULL, NULL, 'Can you give me a hand', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/2.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/Hey+Buddy%2C+Can+You+Give+Me+a+Hand.mp4'),
	(22, 3, NULL, NULL, 'Humanoid robot tells jokes', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/3.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/Humanoid+Robot+Tells+Jokes+on+GMB++Good+Morning+Britain.mp4'),
	(23, 3, NULL, NULL, 'MIT cheetah robot lands the running jump', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/4.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/MIT+cheetah+robot+lands+the+running+jump.mp4'),
	(24, 3, NULL, NULL, 'Sophia Robot with creators', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/5.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/Sophia+Robot+With+Creators+%EF%B8%8F+++Technowarpro++Sophia+Robot+With+Advanced+Artificial+intelligence.mp4'),
	(25, 3, NULL, NULL, 'Terminator arm', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/6.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/Terminator+arm+is+worlds+most+advanced+prosthetic+limb.mp4'),
	(26, 3, NULL, NULL, 'Robot arm prosthetic controlled by thought', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/7.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/The+Robot-Arm+Prosthetic+Controlled+by+Thought.mp4'),
	(27, 3, NULL, NULL, 'Sophia robot', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/8.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/robotica/Watch+Sophia+the+robot+walk+for+the+first+time+2018.mp4'),
	(28, 4, NULL, NULL, 'A day in the life of a software engineer', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/1.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/a+day+in+the+life+of+a+software+engineer.mp4'),
	(29, 4, NULL, NULL, 'JSON curso práctico completo', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/2.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/API+REST+-+JSON++Curso+Practico+Completo+R%C3%A1pido.mp4'),
	(30, 4, NULL, NULL, 'Vida de programador', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/3.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/Antes+de+Aprender+a+Programar+Considera+Esto++Vida+de+Programador+47.mp4'),
	(31, 4, NULL, NULL, 'Curso de programación de videojuegos', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/4robotica.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/Curso+de+programaci%C3%B3n+de+videojuegos+-+Parte+1.mp4'),
	(32, 4, NULL, NULL, 'No sirvo para programar', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/5robotica.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/No+sirvo+para+programar+-+EDvlog+17.mp4'),
	(33, 4, NULL, NULL, 'The poetry of programming Linda Lukas', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/6robotica.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/The+poetry+of+programming++Linda+Liukas++TEDxCERN.mp4'),
	(34, 4, NULL, NULL, 'Uncle Bob Martin', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/7robotica.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/Uncle+Bob+Martin+-+The+Future+of+Programming.mp4'),
	(35, 4, NULL, NULL, 'What do programmers actually do', NULL, 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/8robotica.JPG', 'https://s3.eu-west-3.amazonaws.com/proyectointegrado/videos/programacion/API+REST+-+JSON++Curso+Practico+Completo+R%C3%A1pido.mp4');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
