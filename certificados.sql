# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.31)
# Base de datos: certificados
# Tiempo de Generación: 2018-03-08 01:37:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla categorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id_categoria` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;

INSERT INTO `categorias` (`id_categoria`, `categoria`)
VALUES
	(1,'Hidraulica'),
	(2,'IZAJE'),
	(3,'Naviera'),
	(4,NULL);

/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla certificados
# ------------------------------------------------------------

DROP TABLE IF EXISTS `certificados`;

CREATE TABLE `certificados` (
  `id_certificado` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(15) DEFAULT NULL,
  `nombre_curso` varchar(60) DEFAULT NULL,
  `fecha_emision` date DEFAULT NULL,
  `fecha_vencimiento` date DEFAULT NULL,
  `id_cliente` int(1) DEFAULT NULL,
  `diploma_img` varchar(30) DEFAULT '',
  `estado` tinyint(1) DEFAULT '1',
  `id_categoria` int(11) DEFAULT NULL,
  `razon_social` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_certificado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `certificados` WRITE;
/*!40000 ALTER TABLE `certificados` DISABLE KEYS */;

INSERT INTO `certificados` (`id_certificado`, `codigo`, `nombre_curso`, `fecha_emision`, `fecha_vencimiento`, `id_cliente`, `diploma_img`, `estado`, `id_categoria`, `razon_social`)
VALUES
	(1,'ws1223321','rigger','2018-02-15','2019-02-15',6,'ws1223321',1,1,'Well Services International Chile'),
	(2,'ws8328978','camion pluma','2018-04-23','2019-04-23',1,'ws8328978',1,1,'Well Services International Chile'),
	(3,'ws1535421','Operacion de carga en petroleros y quimiqueros','2018-02-15','2019-02-15',2,'ws1535421',1,2,'Well Services International Chile'),
	(4,'ws9847872','soldadura ','2018-04-23','2018-04-23',1,'ws9847872',1,3,'Well Services International Chile'),
	(5,'ws1223321','rigger','2018-02-15','2019-02-15',4,'ws1223321',1,1,'Well Services International Chile'),
	(6,'wsic48820','camion pluma','2018-02-20','2019-02-20',1,'wsic48820',1,1,'Well Services International Chile');

/*!40000 ALTER TABLE `certificados` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla certificados_clientes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `certificados_clientes`;

CREATE TABLE `certificados_clientes` (
  `id_certificado_cliente` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `id_certificado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_certificado_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla clientes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id_cliente` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `rut` int(11) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `estado` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;

INSERT INTO `clientes` (`id_cliente`, `rut`, `nombre`, `apellido`, `fecha_nacimiento`, `estado`)
VALUES
	(1,194241267,'Alejandro','Vargas','1996-11-07',1),
	(2,72019939,'Marco','Jara','1965-12-01',1),
	(3,99423840,'Mauricio','Gonzalez','1976-05-03',1),
	(4,533421231,'Ivan','Peña','1994-04-13',1);

/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla cursos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cursos`;

CREATE TABLE `cursos` (
  `id_curso` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `curso` int(11) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
