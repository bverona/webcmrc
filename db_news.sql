/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50548
Source Host           : localhost:3306
Source Database       : db_news

Target Server Type    : MYSQL
Target Server Version : 50548
File Encoding         : 65001

Date: 2016-06-17 18:06:08
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
INSERT INTO `item` VALUES ('2', 'navbar2', '    <div class=\"menubar\">\r\n        <div class=\"container\">\r\n            <div class=\"logo\"><a href=\"#\" title=\"\"><img class=\"logo_img\" src=\"../images/ramoncastilla.png\" alt=\"\"/></a></div>\r\n            <nav>\r\n                <ul>\r\n                    <li>\r\n                        <a data-letter=\"Inicio\" href=\"index.php\" title=\"Inicio\" style=\"color: #558b2f;font-weight: bold;font-size: 14px;\">Inicio</a>\r\n                    </li>\r\n                    <li>\r\n                        <a data-letter=\"Institucional\" href=\"#\" title=\"Institucional\">Institucional</a>\r\n                        <ul>\r\n                            <li><a href=\"misionvision.php\" title=\"Misión y Visión\"><i class=\"fa fa-university\"></i> Misión y Visión</a></li>\r\n                            <li><a href=\"himno.php\" title=\"Himno del Colegio<\"><i class=\"fa fa-university\"></i> Himno del Colegio</a></li>\r\n                            <li><a href=\"instalaciones.php\" title=\"Instalaciones\"><i class=\"fa fa-university\"></i> Instalaciones</a></li>\r\n                        </ul>\r\n                    </li>\r\n                    <li>\r\n                        <a data-letter=\"Administración\" href=\"#\" title=\"Promociones\">Administración</a>\r\n                        <ul>\r\n                            <li><a href=\"direccion.php\" title=\"Dirección\"><i class=\"fa fa-university\"></i> Dirección</a></li>\r\n                            <li><a href=\"departamentoacademico.php\" title=\"Departamento Académico\"><i class=\"fa fa-university\"></i> Dpto. Académico</a></li>\r\n                            <li><a href=\"#\" title=\"Coord. Actividades<\"><i class=\"fa fa-university\"></i> Coord. Actividades</a></li>\r\n                            <li><a href=\"#\" title=\"OBE - Tutoría\"><i class=\"fa fa-university\"></i> OBE- Tutoría</a></li>\r\n                            <li><a href=\"personalcastillista.php\" title=\"Personal Castillista 2016\"><i class=\"fa fa-university\"></i> Personal Castillista 2016</a></li>\r\n                        </ul>\r\n                    </li>\r\n                    <li>\r\n                        <a data-letter=\"Noticias\" href=\"noticias.php\" title=\"Noticias\">Noticias</a>\r\n                    </li>\r\n                    <li>\r\n                        <a data-letter=\"Admisión 2016\" href=\"admision2016.php\" title=\"Admisión 2016\">Admisión 2016</a>\r\n                    </li>\r\n                </ul>\r\n            </nav>\r\n            <div class=\"registration-btns\">\r\n                <a class=\"\" href=\"http://www.netschool360.com/cm.ramoncastilla\" target=\"_blank\" title=\"\"><i class=\"fa fa-desktop\"></i> Intranet</a>\r\n                <a class=\"\" href=\"Gestionar.php\" title=\"\"><i class=\"fa fa-envelope-o\"></i> Gestionar Noticias</a>\r\n                <a class=\"\" href=\"index.php\" title=\"\"><i class=\"fa fa-envelope-o\"></i> Salir</a>\r\n\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <!-- Menu Bar -->\r\n    <div class=\"responsive-header\">\r\n        <div class=\"responsive-bar\">\r\n            <div class=\"logo\">\r\n                <a href=\"index.php\" title=\"\"><img src=\"../images/ramoncastilla.png\" alt=\"\" /></a>\r\n            </div>\r\n            <span><i class=\"fa fa-align-justify\"></i></span>\r\n        </div><!-- Responsive Bar -->\r\n        <div class=\"responsive-menu\">\r\n            <ul>\r\n                <li><a href=\"index.php\" title=\"\">Inicio</a></li>\r\n                <li><a data-letter=\"Institucional\" href=\"#\" title=\"Institucional\">Institucional</a>\r\n                    <ul>\r\n                        <!--<li><a href=\"#\" title=\"Presentación\"><i class=\"fa fa-university\"></i> Presentación</a></li>-->\r\n                        <li><a href=\"misionvision.php\" title=\"Misión y Visión\"><i class=\"fa fa-university\"></i> Misión y Visión</a></li>\r\n                        <!--<li><a href=\"#\" title=\"Historia\"><i class=\"fa fa-university\"></i> Historia</a></li>-->\r\n                        <li><a href=\"himno.php\" title=\"Himno del Colegio<\"><i class=\"fa fa-university\"></i> Himno del Colegio</a></li>\r\n                        <li><a href=\"instalaciones.php\" title=\"Instalaciones\"><i class=\"fa fa-university\"></i> Instalaciones</a></li>\r\n                    </ul>\r\n                </li>\r\n                <li><a data-letter=\"Administración\" href=\"#\" title=\"Promociones\">Administración</a>\r\n                    <ul>\r\n                        <li><a href=\"direccion.php\" title=\"Dirección\"><i class=\"fa fa-university\"></i> Dirección</a></li>\r\n                        <li><a href=\"departamentoacademico.php\" title=\"Departamento Académico\"><i class=\"fa fa-university\"></i> Dpto. Académico</a></li>\r\n                        <li><a href=\"#\" title=\"Coord. Actividades<\"><i class=\"fa fa-university\"></i> Coord. Actividades</a></li>\r\n                        <li><a href=\"#\" title=\"OBE - Tutoría\"><i class=\"fa fa-university\"></i> OBE- Tutoría</a></li>\r\n                        <li><a href=\"personalcastillista.php\" title=\"Personal Castillista 2016\"><i class=\"fa fa-university\"></i> Personal Castillista 2016</a></li>\r\n                    </ul>\r\n                </li>\r\n                <li>\r\n                    <a data-letter=\"Noticias\" href=\"noticias.php\" title=\"Noticias\">Noticias</a>\r\n                </li>\r\n                <li>\r\n                    <a data-letter=\"Admisión 2016\" href=\"admision2016.php\" title=\"Admisión 2016\">Admisión 2016</a>\r\n                </li>\r\n            </ul>\r\n        </div>\r\n        <!-- Responsive Menu -->\r\n    </div>\r\n    <!-- Responsive Header -->');
INSERT INTO `item` VALUES ('3', 'sesion', 'session_start();\r\n$_SESSION[\'login\']=\'\';\r\nsession_destroy();\r\n');
INSERT INTO `item` VALUES ('4', 'sesion2', '<?php\r\nsession_start();\r\nif(empty($_SESSION[\'login_user\']))\r\n{\r\n    header(\'Location: index.php\');\r\n}\r\n?>');

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
INSERT INTO `managers` VALUES ('1', 'admin', '0cc175b9c0f1b6a831c399e269772661');

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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('10', 'Inauguración Olimpiadas de Ex Cadetes Verano 2016', 'notice05.jpg', 'noticeext05.jpg', 'Con la concurrida presencia de las diferentes promociones de Ex Cadetes del Colegio Militar, se llevÃ³ a cabo el dÃ­a domingo 24 de Enero la Gran InauguraciÃ³n de las Olimpiadas de Verano - 2016 de Ex Cadetes Castillistas organizado por la XXVI PROMOCION \"TARAPACÃ\" 1989 - 1991 que estuvo amenizado por la Orquesta \"Los CaribeÃ±os de Guadalupe, donde se presenciaron diferentes espectÃ¡culos con la exhibiciÃ³n de caballos de paso y la PolicÃ­a Canina.\r\nFelicitamos a la PromociÃ³n \"TarapacÃ¡\" por la excelente organizaciÃ³n.', '2016-06-15 16:29:52', '1');
INSERT INTO `news` VALUES ('11', 'Clausura Quincuagesimo Primer Curso de Monitores 2016', 'notice06.jpg', 'noticeext03.jpg', 'DespuÃ©s de dos semanas de rigurosa instrucciÃ³n, el dÃ­a lunes 29 de Febrero a las 1100 hrs., en el patio de la InstituciÃ³n Educativa PÃºblica Militar â€œGran Mariscal RamÃ³n Castillaâ€ se realizÃ³ la ceremonia de Clausura del QuincuagÃ©simo Primer Curso de Monitores, acto que estuvo presidida por el Sr. Crl. EP JosÃ© MartÃ­n Yale Avila, Director del plantel y en la que se contÃ³ con la presencia de los padres de familia de los cadetes monitores y el personal del Colegio Militar.\r\nLos cadetes graduados recibieron los certificados y la imposiciÃ³n de insignias de mano de sus instructores que los acredita como cadetes monitores encargados de comandar con el ejemplo al BatallÃ³n de Cadetes en el presente AÃ±o AcadÃ©mico 2016; ellos fueron preparados rigurosamente dentro de las normas de conducta, cortesÃ­a militar, cualidades de don de mando y formaciÃ³n castrense.\r\nEn su discurso de orden el Sr. Crl Director JosÃ© MartÃ­n Yale Ãvila reconociÃ³ el incondicional apoyo de los seÃ±ores padres de familia y apoderados que con ardua abnegaciÃ³n y bastante sacrificio vienen impulsando a sus hijos a conocer el Ã©xito. Asimismo felicitÃ³ a los instructores militares que con profesionalismo han vertido sus conocimientos, inculcando a los jÃ³venes cadetes la enorme responsabilidad y liderazgo que tienen que asumir. Y a los estudiantes cadetes los exhortÃ³ a comandar con firme decisiÃ³n y don de mando al batallÃ³n de cadetes, constituyendo el ejemplo permanente.\r\nFinalmente dio por clausurado el QuincuagÃ©simo Primer Curso de Monitores 2016.', '2016-06-15 16:36:30', '1');
INSERT INTO `news` VALUES ('12', 'Ceremonia de Incorporación de cadetes', 'notice04.jpg', 'noticeext04.jpg', 'El dÃ­a lunes 07 de Marzo a las 1000 hrs. el Colegio Militar â€œGran Mariscal RamÃ³n Castillaâ€ abriÃ³ sus puertas y dio la bienvenida a 107 jÃ³venes ingresantes entre damas y varones que han sido previamente evaluados y seleccionados en base a sus conocimientos, aptitud fÃ­sica y mÃ©dico, quienes se incorporaron para integrar la QuincuagÃ©sima Tercera PromociÃ³n de esta prestigiosa InstituciÃ³n Educativa y dar inicio a sus clases acadÃ©micas a partir del Tercer AÃ±o de EducaciÃ³n Secundaria; donde paralelamente estarÃ¡n cumpliendo con su servicio militar voluntario en el sistema no acuartelado.', '2016-06-15 16:38:39', '0');
INSERT INTO `news` VALUES ('13', 'Colegio Militar Ramón Castilla apertura año académico 2016', 'notice03.jpg', 'noticeext02.jpg', 'Con la concurrida presencia de padres de familia se realizÃ³ el dÃ­a lunes 14 de Marzo a las 1100 hrs. en el Patio de Armas del Colegio Militar Gran â€œMariscal RamÃ³n Castillaâ€ La Ceremonia de Apertura del AÃ±o AcadÃ©mico 2016, acto que estuvo presidido por el Gobernador Regional de la Libertad Luis Valdez FarÃ­as, quien estuvo acompaÃ±ado por distinguidas autoridades de la localidad de Trujillo, entre ellos el Sr. Elidio Espinoza Quispe, Alcalde de la Municipalidad de Trujillo, el Sr. Gral Brig Rafael GarcÃ­a Panta, Comandante General de la 32 Brigada de InfanterÃ­a, el Sr. Rafael Moya Rondo, Gerente Regional de EducaciÃ³n de la Libertad, la Sra. Rosa Gallardo SÃ¡nchez, Gobernadora del distrito de Huanchaco; entre otros.\r\nEl Sr. Crl EP JosÃ© MartÃ­n Yale Ãvila, Director del Colegio Militar, manifestÃ³ en su discurso de orden su satisfacciÃ³n por la labor encomendada por el Comando del EjÃ©rcito para seguir cumpliendo con honor, compromiso y con total responsabilidad y entrega su labor como Director de la InstituciÃ³n inculcando a los estudiantes cadetes la trilogÃ­a de principio y valores rectores del Colegio Militar: DISCIPLINA, MORALIDAD Y TRABAJO.\r\nLas palabras de apertura del AÃ±o AcadÃ©mico 2016 estuvo a cargo del Gobernador Regional de la Libertad, Luis Valdez FarÃ­as quien en su palabras pidiÃ³ a los estudiantes cadetes se esfuercen al mÃ¡ximo para asegurar el futuro que se viene, trazÃ¡ndose objetivos sin mirar lÃ­mites y alcanzar el Ã©xito. Asimismo pidiÃ³ a los padres de familia y los docentes todo el apoyo para cumplir con Ã©xito la gran responsabilidad en la formaciÃ³n y educaciÃ³n de los jÃ³venes estudiantes. Finalmente declarÃ³ por aperturado el AÃ±o AcadÃ©mico 2016, de la IEPM â€œGMRCâ€.', '2016-06-15 16:40:17', '1');
INSERT INTO `news` VALUES ('14', 'Ministro de Defensa visitÃ³ Colegio Militar RamÃ³n Castilla', 'notice02.jpg', 'noticeext01.jpg', 'El dÃ­a 07 de Abril a las 15.00 hrs. el Colegio Militar â€œGran Mariscal RamÃ³n Castillaâ€ recibiÃ³ la visita el Ministro de Defensa JAKKE VALAKIVI ÃLVAREZ y su comitiva, la cual fue integrada por el Viceministro de Recursos para la Defensa Julio de la Puente de la Borda y el Almirante Jorge Ricardo Moscoso Flores, Jefe del Comando Conjunto de la Fuerzas Armada, como parte de su agenda de visitas en la RegiÃ³n de la Libertad para el desarrollo normal del proceso electoral a llevarse a cabo este domingo 10 de Abril.\r\nEn su visita el Ministro de Defensa, estuvo acompaÃ±ado por el Gral Div. Manuel GÃ³mez De La Torre Aranibar, Comandante General de la 1Âº Div. del Ejercito, y el Gral Brig Rafael Roberto GarcÃ­a Panta, Comandante General de la 32Âº Brigada de InfanterÃ­a, quienes fueron recibidos por el Crl EP JosÃ© Martin Yale Ãvila, Director del Colegio Militar, quien luego de presentar su saludo hicieron un recorrido por las diferentes instalaciones del Colegio Militar como el Ã¡rea de las cocinas, Ã¡rea de RobÃ³tica, Laboratorios de CÃ³mputo, Pabellones de Aulas, Museo de RamÃ³n Castilla, entre otros. \r\nAl tÃ©rmino de su visita, el Ministro de Defensa felicitÃ³ al personal que labora en esta InstituciÃ³n Educativa por el trabajo que realizan en provecho de los estudiantes cadetes, exhortÃ¡ndoles a seguir trabajando a fin de cumplir con los objetivos propuestos en la gestiÃ³n del presente aÃ±o.', '2016-06-15 16:41:35', '1');
INSERT INTO `news` VALUES ('15', 'Cadetes del Taller de RobÃ³tica recibieron reconocimiento', 'notice01.jpg', 'ramoncastilla.png', 'El pasado martes 03 de Mayo el Colegio Militar realizÃ³ el reconocimiento a los estudiantes cadetes, que con su esfuerzo y dedicaciÃ³n elaboraron el proyecto denominado â€œDiseÃ±o Y ProducciÃ³n De Materiales DidÃ¡cticos Asociado a Robots Educativosâ€, el cual que estuvo bajo el asesoramiento en una primera fase por el Prof. Marco Antonio Corcuera de los Santos, participando de manera destacada en diferentes eventos de ciencia y tecnologÃ­a a nivel local y regional, logrando la acreditaciÃ³n del colegio para participar en el concurso \"Proyecto Multimedia x- Informatrixâ€ organizado por la Sociedad Latinoamericana de Ciencia y TecnologÃ­a â€“ Solacyt, realizado del 17 al 20 de Abril en la universidad AutÃ³noma de Guadalajara de los estados unidos mexicanos, asesorados en esta etapa final por el Mg. Luis RamÃ­rez GÃ¡lvez, permitiendo obtener el tercer puesto (medalla de bronce) en este evento internacional.\r\nEste reconocimiento estuvo a cargo del Sr. Crl Director JosÃ© Martin Yale Ãvila junto al Dr. Martin Moya Rondo Gerente de EducaciÃ³n de la RegiÃ³n La Libertad.', '2016-06-15 16:43:54', '1');
INSERT INTO `news` VALUES ('16', 'Colegio Militar recibe donaciÃ³n de laptops por parte de ', 'notice07.jpg', 'noticeext01.jpg', 'Gracias a la ardua labor y perseverancia de la comunidad educativa del Colegio Militar â€œGran Mariscal RamÃ³n Castillaâ€ se estÃ¡ haciendo realidad el Proyecto denominado â€œINTERCONEXION DE LAS AULAS CON CABLEADO DE DATOS Y EQUIPAMIENTO MULTIMEDIAâ€ cuya finalidad es contribuir al logro de aprendizajes mÃ¡s significativos de nuestros estudiantes cadetes. Lo docentes de FormaciÃ³n Ciudadana y CÃ­vica junto con los estudiantes participaron y ganaron el concurso de comprobantes de pago organizado por la SUNAT lo que nos ha permitido adquirir siete proyectores de multimedia, los cuales hemos instalado en igual nÃºmero de aulas. El gran esfuerzo desplegado por nuestros estudiantes cadetes y docentes necesita ser complementado con la adquisiciÃ³n de LAPTOS para cada proyector, motivo por el cual estamos solicitando a los ex cadetes apadrinar la implementaciÃ³n tecnolÃ³gica de UNA AULA FUNCIONAL donando una LAPTOP. La primera promociÃ³n representada por los seÃ±ores JosÃ© Brito y German Gordillo Loyola se hicieron presentes donando dos laptos, el ex cadete Fredy Loarte Arteaga de la novena promociÃ³n donÃ³ una LAPTOP, el cual se hizo entrega a travÃ©s de su hermana la Sra. Consuelo Loarte. El Director del Colegio Militar Crl EP JosÃ© Martin Yale Avila junto con la Sub Directora de FormaciÃ³n General Mg. Mercedes Honores Salas agradecieron este gesto de solidaridad de los ex cadetes con su alma mater. Esperamos que esta convocatoria denominada: â€œApadrina la implementaciÃ³n tecnolÃ³gica de UNA AULA FUNCIONAL donando una LAPTOPâ€ tenga eco en todos los ex cadetes y se pueda hacer realidad este ambicioso proyecto en beneficio de nuestros estudiantes cadetes.', '2016-06-15 16:45:02', '1');
INSERT INTO `news` VALUES ('17', 'Colegio Militar realizÃ³ actividad social en hogar de la niÃ±a', 'notice08.jpg', 'noticedonacion.jpg', 'El pasado 31 de Mayo a las 3:30 pm en el Hogar de la NiÃ±a los estudiantes cadetes de 3er aÃ±o con el apoyo psicopedagÃ³gico de sus tutores compartieron momentos de solidaridad y alegrÃ­a con las niÃ±as del Hogar en menciÃ³n con el obsequio de presentes. La actividad se desarrollÃ³ con juegos, animaciones y bailes por parte de los estudiantes cadetes, quienes tuvieron la posibilidad de conocer otras realidades e interrelacionarse con otras personas con necesidades afectivas y materiales. La Directora del Hogar de la NiÃ±a, Sra. Blanca Castillo Martell agradeciÃ³ a los Docentes Tutores y a los estudiantes cadetes, en especial el gesto de la DirecciÃ³n de la IEPM CMRC, representada en nuestro Director Crl EP JosÃ© Martin Yale Avila, por participar a su comunidad con actos de solidaridad con los mÃ¡s necesitados.', '2016-06-15 16:45:59', '1');
INSERT INTO `news` VALUES ('18', 'Cadetes del Taller de RobÃ³tica recibieron reconocimiento', 'notice01.jpg', 'ramoncastilla.png', 'El pasado martes 03 de Mayo el Colegio Militar realizÃ³ el reconocimiento a los estudiantes cadetes, que con su esfuerzo y dedicaciÃ³n elaboraron el proyecto denominado â€œDiseÃ±o Y ProducciÃ³n De Materiales DidÃ¡cticos Asociado a Robots Educativosâ€, el cual que estuvo bajo el asesoramiento en una primera fase por el Prof. Marco Antonio Corcuera de los Santos, participando de manera destacada en diferentes eventos de ciencia y tecnologÃ­a a nivel local y regional, logrando la acreditaciÃ³n del colegio para participar en el concurso \"Proyecto Multimedia x- Informatrixâ€ organizado por la Sociedad Latinoamericana de Ciencia y TecnologÃ­a â€“ Solacyt, realizado del 17 al 20 de Abril en la universidad AutÃ³noma de Guadalajara de los estados unidos mexicanos, asesorados en esta etapa final por el Mg. Luis RamÃ­rez GÃ¡lvez, permitiendo obtener el tercer puesto (medalla de bronce) en este evento internacional.\r\nEste reconocimiento estuvo a cargo del Sr. Crl Director JosÃ© Martin Yale Ãvila junto al Dr. Martin Moya Rondo Gerente de EducaciÃ³n de la RegiÃ³n La Libertad.', '2016-06-15 16:43:54', '1');
INSERT INTO `news` VALUES ('20', 'Cadetes del Taller de RobÃ³tica recibieron reconocimiento', 'lawyer.png', 'ramoncastilla.png', 'El pasado martes 03 de Mayo el Colegio Militar realizÃ³ el reconocimiento a los estudiantes cadetes, que con su esfuerzo y dedicaciÃ³n elaboraron el proyecto denominado â€œDiseÃ±o Y ProducciÃ³n De Materiales DidÃ¡cticos Asociado a Robots Educativosâ€, el cual que estuvo bajo el asesoramiento en una primera fase por el Prof. Marco Antonio Corcuera de los Santos, participando de manera destacada en diferentes eventos de ciencia y tecnologÃ­a a nivel local y regional, logrando la acreditaciÃ³n del colegio para participar en el concurso \"Proyecto Multimedia x- Informatrixâ€ organizado por la Sociedad Latinoamericana de Ciencia y TecnologÃ­a â€“ Solacyt, realizado del 17 al 20 de Abril en la universidad AutÃ³noma de Guadalajara de los estados unidos mexicanos, asesorados en esta etapa final por el Mg. Luis RamÃ­rez GÃ¡lvez, permitiendo obtener el tercer puesto (medalla de bronce) en este evento internacional.\r\nEste reconocimiento estuvo a cargo del Sr. Crl Director JosÃ© Martin Yale Ãvila junto al Dr. Martin Moya Rondo Gerente de EducaciÃ³n de la RegiÃ³n La Libertad.', '2016-06-15 16:43:54', '1');
INSERT INTO `news` VALUES ('21', 'Cadetes del Taller de RobÃ³tica recibieron reconocimiento', 'notice01.jpg', 'ramoncastilla.png', 'El pasado martes 03 de Mayo el Colegio Militar realizÃ³ el reconocimiento a los estudiantes cadetes, que con su esfuerzo y dedicaciÃ³n elaboraron el proyecto denominado â€œDiseÃ±o Y ProducciÃ³n De Materiales DidÃ¡cticos Asociado a Robots Educativosâ€, el cual que estuvo bajo el asesoramiento en una primera fase por el Prof. Marco Antonio Corcuera de los Santos, participando de manera destacada en diferentes eventos de ciencia y tecnologÃ­a a nivel local y regional, logrando la acreditaciÃ³n del colegio para participar en el concurso \"Proyecto Multimedia x- Informatrixâ€ organizado por la Sociedad Latinoamericana de Ciencia y TecnologÃ­a â€“ Solacyt, realizado del 17 al 20 de Abril en la universidad AutÃ³noma de Guadalajara de los estados unidos mexicanos, asesorados en esta etapa final por el Mg. Luis RamÃ­rez GÃ¡lvez, permitiendo obtener el tercer puesto (medalla de bronce) en este evento internacional.\r\nEste reconocimiento estuvo a cargo del Sr. Crl Director JosÃ© Martin Yale Ãvila junto al Dr. Martin Moya Rondo Gerente de EducaciÃ³n de la RegiÃ³n La Libertad.', '2016-06-15 16:43:54', '1');
INSERT INTO `news` VALUES ('22', 'Cadetes del Taller de RobÃ³tica recibieron reconocimiento', 'notice01.jpg', 'ramoncastilla.png', 'El pasado martes 03 de Mayo el Colegio Militar realizÃ³ el reconocimiento a los estudiantes cadetes, que con su esfuerzo y dedicaciÃ³n elaboraron el proyecto denominado â€œDiseÃ±o Y ProducciÃ³n De Materiales DidÃ¡cticos Asociado a Robots Educativosâ€, el cual que estuvo bajo el asesoramiento en una primera fase por el Prof. Marco Antonio Corcuera de los Santos, participando de manera destacada en diferentes eventos de ciencia y tecnologÃ­a a nivel local y regional, logrando la acreditaciÃ³n del colegio para participar en el concurso \"Proyecto Multimedia x- Informatrixâ€ organizado por la Sociedad Latinoamericana de Ciencia y TecnologÃ­a â€“ Solacyt, realizado del 17 al 20 de Abril en la universidad AutÃ³noma de Guadalajara de los estados unidos mexicanos, asesorados en esta etapa final por el Mg. Luis RamÃ­rez GÃ¡lvez, permitiendo obtener el tercer puesto (medalla de bronce) en este evento internacional.\r\nEste reconocimiento estuvo a cargo del Sr. Crl Director JosÃ© Martin Yale Ãvila junto al Dr. Martin Moya Rondo Gerente de EducaciÃ³n de la RegiÃ³n La Libertad.', '2016-06-15 16:43:54', '1');
INSERT INTO `news` VALUES ('23', 'prueba franciscosdasdasdasdasd jkaajsjajasjas', 'admisioninicio.jpg', 'examenadm01.jpg', 'assssss', '2016-06-17 12:42:30', '1');