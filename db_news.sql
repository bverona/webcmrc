/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50548
Source Host           : localhost:3306
Source Database       : db_news

Target Server Type    : MYSQL
Target Server Version : 50548
File Encoding         : 65001

Date: 2016-06-21 18:54:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for item
-- ----------------------------
DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `item` text CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of item
-- ----------------------------
INSERT INTO `item` VALUES ('1', 'navbar', '<div class=\"menubar\">\r\n    <div class=\"container\">\r\n        <div class=\"logo\"><a href=\"#\" title=\"\"><img class=\"logo_img\" src=\"../images/ramoncastilla.png\" alt=\"\"/></a></div>\r\n        <nav>\r\n            <ul>\r\n                <li>\r\n                    <a data-letter=\"Inicio\" href=\"index.php\" title=\"Inicio\" style=\"color: #558b2f;font-weight: bold;font-size: 14px;\">Inicio</a>\r\n                </li>\r\n                <li>\r\n                    <a data-letter=\"Institucional\" href=\"#\" title=\"Institucional\">Institucional</a>\r\n                    <ul>\r\n                        <li><a href=\"misionvision.php\" title=\"Misión y Visión\"><i class=\"fa fa-university\"></i> Misión y Visión</a></li>\r\n                        <li><a href=\"himno.php\" title=\"Himno del Colegio<\"><i class=\"fa fa-university\"></i> Himno del Colegio</a></li>\r\n                        <li><a href=\"instalaciones.php\" title=\"Instalaciones\"><i class=\"fa fa-university\"></i> Instalaciones</a></li>\r\n                    </ul>\r\n                </li>\r\n                <li>\r\n                    <a data-letter=\"Administración\" href=\"#\" title=\"Promociones\">Administración</a>\r\n                    <ul>\r\n                        <li><a href=\"direccion.php\" title=\"Dirección\"><i class=\"fa fa-university\"></i> Dirección</a></li>\r\n                        <li><a href=\"departamentoacademico.php\" title=\"Departamento Académico\"><i class=\"fa fa-university\"></i> Dpto. Académico</a></li>\r\n                        <li><a href=\"#\" title=\"Coord. Actividades<\"><i class=\"fa fa-university\"></i> Coord. Actividades</a></li>\r\n                        <li><a href=\"#\" title=\"OBE - Tutoría\"><i class=\"fa fa-university\"></i> OBE- Tutoría</a></li>\r\n                        <li><a href=\"personalcastillista.php\" title=\"Personal Castillista 2016\"><i class=\"fa fa-university\"></i> Personal Castillista 2016</a></li>\r\n                    </ul>\r\n                </li>\r\n                <li>\r\n                    <a data-letter=\"Noticias\" href=\"noticias.php\" title=\"Noticias\">Noticias</a>\r\n                </li>\r\n                <li>\r\n                    <a data-letter=\"Admisión 2016\" href=\"admision2016.php\" title=\"Admisión 2016\">Admisión 2016</a>\r\n                </li>\r\n            </ul>\r\n        </nav>\r\n        <div class=\"registration-btns\">\r\n            <a class=\"\" href=\"http://www.netschool360.com/cm.ramoncastilla\" target=\"_blank\" title=\"\"><i class=\"fa fa-desktop\"></i> Intranet</a>\r\n            <a class=\"\" href=\"http://www.peru.gob.pe/transparencia/pep_transparencia_lista_planes_frame.asp?id_entidad=15351&id_tema=1\" target=\"_blank\" title=\"\"><i class=\"fa fa-search\"></i> Transparencia</a>\r\n            <a class=\"\" href=\"login.php\" title=\"\"><i class=\"fa fa-envelope-o\"></i> Coorporativo</a>\r\n        </div>\r\n    </div>\r\n</div>\r\n<!-- Menu Bar -->\r\n<div class=\"responsive-header\">\r\n    <div class=\"responsive-bar\">\r\n        <div class=\"logo\">\r\n            <a href=\"index.php\" title=\"\"><img src=\"../images/ramoncastilla.png\" alt=\"\" /></a>\r\n        </div>\r\n        <span><i class=\"fa fa-align-justify\"></i></span>\r\n    </div><!-- Responsive Bar -->\r\n    <div class=\"responsive-menu\">\r\n        <ul>\r\n            <li><a href=\"index.php\" title=\"\">Inicio</a></li>\r\n            <li><a data-letter=\"Institucional\" href=\"#\" title=\"Institucional\">Institucional</a>\r\n                <ul>\r\n                    <!--<li><a href=\"#\" title=\"Presentación\"><i class=\"fa fa-university\"></i> Presentación</a></li>-->\r\n                    <li><a href=\"misionvision.php\" title=\"Misión y Visión\"><i class=\"fa fa-university\"></i> Misión y Visión</a></li>\r\n                    <!--<li><a href=\"#\" title=\"Historia\"><i class=\"fa fa-university\"></i> Historia</a></li>-->\r\n                    <li><a href=\"himno.php\" title=\"Himno del Colegio<\"><i class=\"fa fa-university\"></i> Himno del Colegio</a></li>\r\n                    <li><a href=\"instalaciones.php\" title=\"Instalaciones\"><i class=\"fa fa-university\"></i> Instalaciones</a></li>\r\n                </ul>\r\n            </li>\r\n            <li><a data-letter=\"Administración\" href=\"#\" title=\"Promociones\">Administración</a>\r\n                <ul>\r\n                    <li><a href=\"direccion.php\" title=\"Dirección\"><i class=\"fa fa-university\"></i> Dirección</a></li>\r\n                    <li><a href=\"departamentoacademico.php\" title=\"Departamento Académico\"><i class=\"fa fa-university\"></i> Dpto. Académico</a></li>\r\n                    <li><a href=\"#\" title=\"Coord. Actividades<\"><i class=\"fa fa-university\"></i> Coord. Actividades</a></li>\r\n                    <li><a href=\"#\" title=\"OBE - Tutoría\"><i class=\"fa fa-university\"></i> OBE- Tutoría</a></li>\r\n                    <li><a href=\"personalcastillista.php\" title=\"Personal Castillista 2016\"><i class=\"fa fa-university\"></i> Personal Castillista 2016</a></li>\r\n                </ul>\r\n            </li>\r\n            <li>\r\n                <a data-letter=\"Noticias\" href=\"noticias.php\" title=\"Noticias\">Noticias</a>\r\n            </li>\r\n            <li>\r\n                <a data-letter=\"Admisión 2016\" href=\"admision2016.php\" title=\"Admisión 2016\">Admisión 2016</a>\r\n            </li>\r\n        </ul>\r\n    </div>\r\n    <!-- Responsive Menu -->\r\n</div> ');
INSERT INTO `item` VALUES ('2', 'navbar2', '\r\n<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">\r\n    <div class=\"navbar-header\">\r\n        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">\r\n            <span class=\"sr-only\">Barra de Navegación</span>\r\n            <span class=\"icon-bar\"></span>\r\n            <span class=\"icon-bar\"></span>\r\n            <span class=\"icon-bar\"></span>\r\n        </button>\r\n        <a class=\"navbar-brand\" href=\"index.php\"><img src=\"../images/ramoncastilla.png\" width=\"45px\" height=\"45px\" alt=\"\"/></a>\r\n    </div>\r\n    <!-- /.navbar-header -->\r\n    <ul class=\"nav navbar-top-links navbar-right\">\r\n        <li class=\"dropdown\">\r\n            <a href=\"index.php\"><i class=\"fa fa-sign-out fa-fw\"></i> Cerrar Sesión</a>\r\n            <!-- /.dropdown-user -->\r\n        </li>\r\n        <!-- /.dropdown -->\r\n    </ul>\r\n    <!-- /.navbar-top-links -->\r\n\r\n    <!-- navbar-static-side -->\r\n    <div class=\"navbar-default sidebar\" role=\"navigation\">\r\n\r\n        <div class=\"sidebar-nav navbar-collapse\">\r\n            <ul class=\"nav\" id=\"side-menu\">\r\n                <li>\r\n                    <a href=\"index.php\"><i class=\"glyphicon glyphicon-home\"></i> INICIO</a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"Administrator.php\"><i class=\"fa fa-newspaper-o\"></i> Registrar Noticia</a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"Gestionar.php\"><i class=\"fa fa-cogs\" aria-hidden=\"true\" ></i> Gestionar Noticia</a>\r\n                </li>\r\n                <li>\r\n                    <a href=\"Noticias.php\"><i class=\"fa fa-tasks\" aria-hidden=\"true\"></i> Ir a Noticias</a>\r\n                </li>\r\n\r\n            </ul>\r\n        </div>\r\n\r\n    </div>\r\n\r\n\r\n</nav>\r\n<!-- /Nav Bar -->');

-- ----------------------------
-- Table structure for managers
-- ----------------------------
DROP TABLE IF EXISTS `managers`;
CREATE TABLE `managers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(12) NOT NULL,
  `pass` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of managers
-- ----------------------------
INSERT INTO `managers` VALUES ('1', 'admin', 'f40f9601a0eaa502c45d134f5e78bedd');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `small_photo` varchar(300) CHARACTER SET latin1 DEFAULT 'images/default.jpg',
  `big_photo` varchar(300) CHARACTER SET latin1 DEFAULT 'images/default.jpg',
  `content` text CHARACTER SET latin1,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `state` tinyint(255) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
