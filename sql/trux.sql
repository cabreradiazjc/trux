/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : trux

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2018-02-28 17:56:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for item
-- ----------------------------
DROP TABLE IF EXISTS `item`;
CREATE TABLE `item` (
  `idItem` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) DEFAULT NULL,
  `descripcion` text,
  `unidad` varchar(50) DEFAULT NULL,
  `costoUnitario` double DEFAULT NULL,
  `precioVenta` double DEFAULT NULL,
  `stockMinimo` double DEFAULT NULL,
  PRIMARY KEY (`idItem`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of item
-- ----------------------------
INSERT INTO `item` VALUES ('1', '1', 'Barra dual 1 metro curvo', 'Und', '0', '800', '1');
INSERT INTO `item` VALUES ('2', '2', 'Barra dual 1/2 metro recto', 'Und', '0', '400', '1');
INSERT INTO `item` VALUES ('3', '3', 'Barra Ultra luz', 'Und', '0', '300', '1');
INSERT INTO `item` VALUES ('4', '4', 'Barra dual 12 led', 'Par', '0', '250', '1');
INSERT INTO `item` VALUES ('5', '5', 'Foco Led (DAD-844) - H4', 'par', '0', '200', '1');
INSERT INTO `item` VALUES ('6', '6', 'Claxon Bosh caracol', 'Par', '0', '90', '1');
INSERT INTO `item` VALUES ('7', '7', 'Claxon Bosh platillo', 'Par', '0', '80', '1');
INSERT INTO `item` VALUES ('8', '8', 'eleva lunas automatico', 'Und', '0', '200', '1');
INSERT INTO `item` VALUES ('9', '9', 'led cristal fuego', 'Par', '0', '300', '1');
INSERT INTO `item` VALUES ('10', '10', 'luz Neon para faro', 'Par', '0', '250', '1');
INSERT INTO `item` VALUES ('11', '11', 'Claxon hella platillo', 'Und', '0', '60', '1');
INSERT INTO `item` VALUES ('12', '12', 'Claxon Hella Caracol', 'Und', '0', '100', '1');
INSERT INTO `item` VALUES ('13', '13', 'foco led H11 \" Blanco\"', 'Par', '0', '200', '1');
INSERT INTO `item` VALUES ('14', '14', 'foco led H4 - C6F - 6K', 'Und', '0', '200', '1');
INSERT INTO `item` VALUES ('15', '15', 'alarma de retroceso', 'Und', '0', '25', '1');
INSERT INTO `item` VALUES ('16', '16', 'HID - H7', 'Und', '0', '250', '1');
INSERT INTO `item` VALUES ('17', '17', 'Cobertor talla \"M\"', 'Und', '0', '90', '1');
INSERT INTO `item` VALUES ('18', '18', 'foco led estrobo \"ROJO\"', 'Und', '0', '15', '1');
INSERT INTO `item` VALUES ('19', '19', 'foco led estrobo \"Blanco\"', 'Und', '0', '15', '1');
INSERT INTO `item` VALUES ('20', '20', 'foco led estrobo base plana', 'Und', '0', '15', '1');
INSERT INTO `item` VALUES ('21', '21', 'foco led \"Choclo\" 1 contacto', 'Und', '0', '10', '1');
INSERT INTO `item` VALUES ('22', '22', 'Hid - H4 Autoroust', 'Und', '0', '250', '1');
INSERT INTO `item` VALUES ('23', '23', 'radio pioneer X5', 'Und', '0', '550', '1');
INSERT INTO `item` VALUES ('24', '24', 'Ojo de angel AZUL', 'Und', '0', '250', '1');
INSERT INTO `item` VALUES ('25', '25', 'Ojo de angel BLANCO', 'Und', '0', '250', '1');
INSERT INTO `item` VALUES ('26', '26', 'ojo de diablo', 'par', '0', '500', '1');
INSERT INTO `item` VALUES ('27', '27', 'pestillo cobra', 'Und', '0', '180', '1');
INSERT INTO `item` VALUES ('28', '28', 'HID - H11 alsama', 'Und', '0', '250', '1');
INSERT INTO `item` VALUES ('29', '29', 'HID - H1 alsama', 'Und', '0', '250', '1');
INSERT INTO `item` VALUES ('30', '30', 'HID - 9005 alsama', 'Und', '0', '250', '1');
INSERT INTO `item` VALUES ('31', '31', 'sensor de retroceso', 'Und', '0', '200', '1');
INSERT INTO `item` VALUES ('32', '32', 'radio cafini', 'Und', '0', '180', '1');
INSERT INTO `item` VALUES ('33', '33', 'faro pirata redondo led', 'par', '0', '220', '1');
INSERT INTO `item` VALUES ('34', '34', 'faro empotrable led', 'par', '0', '200', '1');
INSERT INTO `item` VALUES ('35', '35', 'barra led ambar', 'par', '0', '150', '1');
INSERT INTO `item` VALUES ('36', '36', 'barra dual 6 led', 'par', '0', '200', '1');
INSERT INTO `item` VALUES ('37', '37', 'foco H4 60/55 narva (amarillo)', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('38', '38', 'foco h4 100/90 narva (amarillo)', 'Und', '0', '25', '1');
INSERT INTO `item` VALUES ('39', '39', 'foco H3 AAA-100w (amarillo)', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('40', '40', 'foco H11 AAA- 100w (amarillo)', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('41', '41', 'foco 9006 AAA-100w (amarillo)', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('42', '42', 'foco H7-narva-55w (amarillo)', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('43', '43', 'foco 2 contacto AAA (amarillo)', 'Und', '0', '2.5', '1');
INSERT INTO `item` VALUES ('44', '44', 'foco 2 contacto Narva (amarillo)', 'Und', '0', '3', '1');
INSERT INTO `item` VALUES ('45', '45', 'foco 1 contacto AAA (amarillo)', 'Und', '0', '1.5', '1');
INSERT INTO `item` VALUES ('46', '46', 'foco 1 contacto Narva (amarillo)', 'Und', '0', '2', '1');
INSERT INTO `item` VALUES ('47', '47', 'foco H4-60/55-OSRAM (amarillo)', 'Und', '0', '30', '1');
INSERT INTO `item` VALUES ('48', '48', 'lagrima 12V Narva (amarillo)', 'Und', '0', '1.5', '1');
INSERT INTO `item` VALUES ('49', '49', 'SuBuffer Pioneer 1400 Wts', 'Und', '0', '450', '1');
INSERT INTO `item` VALUES ('50', '50', 'Componente rockfort  P-165-SE', 'JGO', '0', '550', '1');
INSERT INTO `item` VALUES ('51', '51', 'pantalla pioneer 2850', 'Und', '0', '1400', '1');
INSERT INTO `item` VALUES ('52', '52', 'componente JBL GTO-609C', 'JGO', '0', '500', '1');
INSERT INTO `item` VALUES ('53', '53', 'Parlante redondo Sony x5-FD1030 - 10cm/ 220Wts', 'Und', '0', '180', '1');
INSERT INTO `item` VALUES ('54', '54', 'Parlante redondo Pioneer  350 WTs TS-A16876S', 'Und', '0', '350', '1');
INSERT INTO `item` VALUES ('55', '55', 'Parlante obalado Pioneer 650 Wts TS-A6996S', 'Und', '0', '450', '1');
INSERT INTO `item` VALUES ('56', '56', 'twiter pioneer 250 Wt', 'Par', '0', '250', '1');
INSERT INTO `item` VALUES ('57', '57', 'medio pioneer', 'par', '0', '550', '1');
INSERT INTO `item` VALUES ('58', '58', 'medio rockfort sin pua', 'Par', '0', '580', '1');
INSERT INTO `item` VALUES ('59', '59', 'medio rockfort Bala', 'Par', '0', '580', '1');
INSERT INTO `item` VALUES ('60', '60', 'placa metal kia', 'par', '0', '20', '1');
INSERT INTO `item` VALUES ('61', '61', 'placa metal Nissan', 'Par', '0', '20', '1');
INSERT INTO `item` VALUES ('62', '62', 'placa metal azul', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('63', '63', 'placa metal dorado', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('64', '64', 'forro de timon cuero', 'Und', '0', '40', '1');
INSERT INTO `item` VALUES ('65', '65', 'forro de timon cuerina', 'Und', '0', '30', '1');
INSERT INTO `item` VALUES ('66', '66', 'plumillas #18', 'Und', '0', '25', '1');
INSERT INTO `item` VALUES ('67', '67', 'plumillas #20', 'Und', '0', '30', '1');
INSERT INTO `item` VALUES ('68', '68', 'luces diurna rombo', 'par', '0', '65', '1');
INSERT INTO `item` VALUES ('69', '69', 'Cargador de celular caja roja 1.5 A', 'Und', '0', '15', '1');
INSERT INTO `item` VALUES ('70', '70', 'parlante redondo pioneer 280 Wts', 'Und', '0', '280', '1');
INSERT INTO `item` VALUES ('71', '71', 'parlante redondo pioneer 320Wts', 'Und', '0', '300', '1');
INSERT INTO `item` VALUES ('72', '72', 'parlante redondo pioneer 400 Wts', 'Und', '0', '400', '1');
INSERT INTO `item` VALUES ('73', '73', 'parlante redondo PUNCH 200 Wts', 'Und', '0', '200', '1');
INSERT INTO `item` VALUES ('74', '74', 'parlante obalado MAX POWER 600 Wts', 'Und', '0', '400', '1');
INSERT INTO `item` VALUES ('75', '75', 'componente POWER BASS', 'Und', '0', '450', '1');
INSERT INTO `item` VALUES ('76', '76', 'Amplificador 1200 WTs soundstream', 'Und', '0', '600', '1');
INSERT INTO `item` VALUES ('77', '77', 'radio pioneer X195', 'Und', '0', '350', '1');
INSERT INTO `item` VALUES ('78', '78', 'porta fusible de audio', 'Und', '0', '30', '1');
INSERT INTO `item` VALUES ('79', '79', 'cable RCA \"Y\" para audio', 'Und', '0', '30', '1');
INSERT INTO `item` VALUES ('80', '80', 'kit de instalacion para bajo', 'Und', '0', '250', '1');
INSERT INTO `item` VALUES ('81', '81', 'claxon 2 corneta hella', 'Und', '0', '120', '1');
INSERT INTO `item` VALUES ('82', '82', 'claxon 3 corneta hella', 'Und', '0', '200', '1');
INSERT INTO `item` VALUES ('83', '83', 'conectores para farola', 'Und', '0', '25', '1');
INSERT INTO `item` VALUES ('84', '84', 'foco H4 \"blanco\" 100/90 (PAR)', 'Par', '0', '90', '1');
INSERT INTO `item` VALUES ('85', '85', 'foco H4 \"blanco\" 60/55  (PAR)', 'Par', '0', '70', '1');
INSERT INTO `item` VALUES ('86', '86', 'foco H3 NARVA-100w (amarillo)', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('87', '87', 'lagrima 24V AAA (amarillo)', 'Und', '0', '2', '1');
INSERT INTO `item` VALUES ('88', '88', 'Pestillo SGF', 'caja', '0', '180', '1');
INSERT INTO `item` VALUES ('89', '89', 'Pestillo SGF 5 cables', 'Und', '0', '50', '1');
INSERT INTO `item` VALUES ('90', '90', 'Pestillo SGF 2 cables', 'Und', '0', '30', '1');
INSERT INTO `item` VALUES ('91', '91', 'retrovisor DVR', 'Und', '0', '350', '1');
INSERT INTO `item` VALUES ('92', '92', 'camara de retroceso led', 'Und', '0', '180', '1');
INSERT INTO `item` VALUES ('93', '93', 'convertidor de se?al AXXES', 'Und', '0', '80', '1');
INSERT INTO `item` VALUES ('94', '94', 'Convertidor de se?al STINGER', 'Und', '0', '80', '1');
INSERT INTO `item` VALUES ('95', '95', 'pilas sony 2016', 'Und', '0', '5', '1');
INSERT INTO `item` VALUES ('96', '96', 'pilas sony 2032', 'Und', '0', '5', '1');
INSERT INTO `item` VALUES ('97', '97', 'hid - 9006 alsama', 'Und', '0', '250', '1');
INSERT INTO `item` VALUES ('98', '98', 'luz led para moto', 'Und', '0', null, '1');
INSERT INTO `item` VALUES ('99', '99', 'luz neblinera ROMA', 'par', '0', '120', '1');
INSERT INTO `item` VALUES ('100', '100', 'ojo transformer H14', 'Und', '0', '80', '1');
INSERT INTO `item` VALUES ('101', '101', 'luz platanito', 'Par', '0', '180', '1');
INSERT INTO `item` VALUES ('102', '102', 'ojo transformer H17', 'Und', '0', '80', '1');
INSERT INTO `item` VALUES ('103', '103', 'ojo transformer H16', 'Und', '0', '80', '1');
INSERT INTO `item` VALUES ('104', '104', 'barra led 1 metro', 'Und', '0', '600', '1');
INSERT INTO `item` VALUES ('105', '105', 'ojo transformer H15', 'Und', '0', '80', '1');
INSERT INTO `item` VALUES ('106', '106', 'luce diurna con direccional', 'Und', '0', '85', '1');
INSERT INTO `item` VALUES ('107', '107', 'ojo de diablo de jebe', 'Und', '0', '85', '1');
INSERT INTO `item` VALUES ('108', '108', 'luz led de salon', 'Und', '0', '15', '1');
INSERT INTO `item` VALUES ('109', '109', 'cargador de celular en bolsa', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('110', '110', 'forro de palanca de cambio', 'Und', '0', '40', '1');
INSERT INTO `item` VALUES ('111', '111', 'pitones', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('112', '112', 'tapasol', 'Und', '0', '12', '1');
INSERT INTO `item` VALUES ('113', '113', 'sticker para veh?culo', 'Und', '0', '10', '1');
INSERT INTO `item` VALUES ('114', '114', 'soporte para celular', 'Und', '0', '20', '1');
INSERT INTO `item` VALUES ('115', '115', 'faja de remolque', 'Und', '0', '30', '1');
INSERT INTO `item` VALUES ('116', '116', 'antena de tiburon', 'Und', '0', '70', '1');
INSERT INTO `item` VALUES ('117', '117', 'plumillas 22\"', 'par', '0', '35', '1');
INSERT INTO `item` VALUES ('118', '118', 'caja de bajo', 'Und', '0', '80', '1');
INSERT INTO `item` VALUES ('119', '119', 'portaplaca neon', 'Und', '0', '25', '1');
INSERT INTO `item` VALUES ('120', '120', 'portaplaca led', 'Und', '0', '35', '1');
INSERT INTO `item` VALUES ('121', '121', 'asientos de bolitas', 'Und', '0', '30', '1');
INSERT INTO `item` VALUES ('122', '122', 'pisos', 'Und', '0', '40', '1');
INSERT INTO `item` VALUES ('123', '123', 'lagrimas led rojo', 'Und', '0', '7.5', '1');
INSERT INTO `item` VALUES ('124', '124', 'lagrimas led blanco', 'Und', '0', '7.5', '1');
INSERT INTO `item` VALUES ('125', '125', 'lagrimas led azuk', 'Und', '0', '7.5', '1');
INSERT INTO `item` VALUES ('126', '126', 'suples redondo', 'Und', '0', '15', '1');
INSERT INTO `item` VALUES ('127', '127', 'suples ovalado', 'Und', '0', '15', '1');
INSERT INTO `item` VALUES ('128', '128', 'alarma genius', 'Und', '0', '250', '1');
INSERT INTO `item` VALUES ('129', '129', 'foco H11 KAIER blanco', 'par', '0', '90', '1');
INSERT INTO `item` VALUES ('130', '130', 'camara de retroceso VG', 'Und', '0', '120', '1');
INSERT INTO `item` VALUES ('131', '131', 'adorno para espejo', 'Und', '0', '25', '1');
INSERT INTO `item` VALUES ('132', '132', 'bota agua 7 colores', 'par', '0', '25', '1');
INSERT INTO `item` VALUES ('133', '133', 'bota agua luz azul', 'par', '0', '25', '1');
INSERT INTO `item` VALUES ('134', '134', 'bota agua luz blanco', 'par', '0', '25', '1');
INSERT INTO `item` VALUES ('135', '135', 'portaplaca metal ara?a', 'par', '0', '20', '1');
INSERT INTO `item` VALUES ('136', '136', 'portaplaca metal palmera', 'par', '0', '20', '1');
INSERT INTO `item` VALUES ('137', '137', 'portapla cromada kia', 'par', '0', '20', '1');
INSERT INTO `item` VALUES ('138', '138', 'portapla cromada nissan', 'par', '0', '20', '1');
INSERT INTO `item` VALUES ('139', '139', 'plumilla 14\"', 'par', '0', '20', '1');
INSERT INTO `item` VALUES ('140', '140', 'barra 12 led blanco ', 'par', '0', '180', '1');
INSERT INTO `item` VALUES ('141', '141', 'amplificador 1400 WTs Black Hawk', 'Und', '0', '700', '1');
INSERT INTO `item` VALUES ('142', '142', 'cable RCA \"Y\"  1.5 metros', 'Und', '0', '40', '1');
INSERT INTO `item` VALUES ('143', '143', 'fusibles de u?a (audio)', 'und', '0', '0', '1');
INSERT INTO `item` VALUES ('144', '144', 'Fusibles cartucho (audio)', 'und', '0', '0', '1');
INSERT INTO `item` VALUES ('145', '145', 'cargador para cigarrera', 'Und', '0', '25', '1');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `men_id` int(11) NOT NULL,
  `men_idpadre` int(11) DEFAULT NULL,
  `men_nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `men_url` varchar(500) COLLATE utf8_spanish_ci DEFAULT NULL,
  `men_titulo` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `men_estilo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `men_estado` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`men_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', null, 'Dashboard', '', 'Dashboard', 'fa-tachometer', '0');
INSERT INTO `menu` VALUES ('2', '1', 'Dashboard v1', 'index.php', 'Dashboard v1', 'fa-home', '0');
INSERT INTO `menu` VALUES ('3', null, 'Administrador', null, 'Administrador', 'fa-user', '1');
INSERT INTO `menu` VALUES ('4', '3', 'Usuarios', 'view/usuarios/usuarios.php', 'Usuarios', 'fa-user-o', '1');
INSERT INTO `menu` VALUES ('5', '3', 'Inventario', 'view/inventario/inventario_admin.php', 'Inventario Administrador', 'fa-lock', '1');
INSERT INTO `menu` VALUES ('6', null, 'GestiÃ³n de Inventario', null, 'GestiÃ³n de Inventario', 'fa-binoculars ', '1');
INSERT INTO `menu` VALUES ('7', '6', 'Inventario', 'view/inventario/inventario.php', 'Inventario Vendedor', 'fa-server', '1');
INSERT INTO `menu` VALUES ('8', '12', 'Entrada', 'view/inventario/entrada.php', 'Entrada', 'fa-arrow-circle-down', '1');
INSERT INTO `menu` VALUES ('9', null, 'Reporte', null, 'Reporte', 'fa-bar-chart', '0');
INSERT INTO `menu` VALUES ('10', '9', 'Reporte de inventario', 'view/inventario/reporte_inventario.php', 'Reporte de inventario', 'fa-bars', '0');
INSERT INTO `menu` VALUES ('11', '12', 'Salida', 'view/inventario/salida.php', 'Salida', 'fa-arrow-circle-up', '1');
INSERT INTO `menu` VALUES ('12', null, 'Movimientos', null, 'Movimientos', 'fa-refresh', '1');

-- ----------------------------
-- Table structure for movimientos
-- ----------------------------
DROP TABLE IF EXISTS `movimientos`;
CREATE TABLE `movimientos` (
  `idMovimientos` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `cantidad` double NOT NULL,
  `precioVenta` double DEFAULT NULL,
  `costoUnitario` double DEFAULT NULL,
  `idTipoMovimiento` int(11) NOT NULL,
  `iditem` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idTienda` int(11) NOT NULL,
  `placa` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idMovimientos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of movimientos
-- ----------------------------

-- ----------------------------
-- Table structure for permiso
-- ----------------------------
DROP TABLE IF EXISTS `permiso`;
CREATE TABLE `permiso` (
  `rol_id` int(11) NOT NULL,
  `men_id` int(11) NOT NULL,
  KEY `FK_permiso_menu1` (`men_id`) USING BTREE,
  KEY `FK_permiso_rol` (`rol_id`) USING BTREE,
  CONSTRAINT `permiso_ibfk_1` FOREIGN KEY (`men_id`) REFERENCES `menu` (`men_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `permiso_ibfk_2` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`rol_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of permiso
-- ----------------------------
INSERT INTO `permiso` VALUES ('1', '1');
INSERT INTO `permiso` VALUES ('1', '2');
INSERT INTO `permiso` VALUES ('1', '3');
INSERT INTO `permiso` VALUES ('1', '4');
INSERT INTO `permiso` VALUES ('1', '6');
INSERT INTO `permiso` VALUES ('1', '5');
INSERT INTO `permiso` VALUES ('1', '7');
INSERT INTO `permiso` VALUES ('1', '8');
INSERT INTO `permiso` VALUES ('1', '9');
INSERT INTO `permiso` VALUES ('1', '10');
INSERT INTO `permiso` VALUES ('2', '6');
INSERT INTO `permiso` VALUES ('2', '7');
INSERT INTO `permiso` VALUES ('2', '11');
INSERT INTO `permiso` VALUES ('1', '11');
INSERT INTO `permiso` VALUES ('1', '12');

-- ----------------------------
-- Table structure for rol
-- ----------------------------
DROP TABLE IF EXISTS `rol`;
CREATE TABLE `rol` (
  `rol_id` int(11) NOT NULL AUTO_INCREMENT,
  `rol_nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rolActivo` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`rol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO `rol` VALUES ('1', 'ADMINISTRADOR', '1');
INSERT INTO `rol` VALUES ('2', 'VENDEDOR', '1');

-- ----------------------------
-- Table structure for stock
-- ----------------------------
DROP TABLE IF EXISTS `stock`;
CREATE TABLE `stock` (
  `idStock` int(11) NOT NULL AUTO_INCREMENT,
  `idTienda` int(11) DEFAULT NULL,
  `idItem` int(11) DEFAULT NULL,
  `stock` double DEFAULT NULL,
  PRIMARY KEY (`idStock`)
) ENGINE=InnoDB AUTO_INCREMENT=291 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of stock
-- ----------------------------
INSERT INTO `stock` VALUES ('1', '1', '1', '1');
INSERT INTO `stock` VALUES ('2', '1', '2', '0');
INSERT INTO `stock` VALUES ('3', '1', '3', '3');
INSERT INTO `stock` VALUES ('4', '1', '4', '1');
INSERT INTO `stock` VALUES ('5', '1', '5', '4');
INSERT INTO `stock` VALUES ('6', '1', '6', '5');
INSERT INTO `stock` VALUES ('7', '1', '7', '2');
INSERT INTO `stock` VALUES ('8', '1', '8', '1');
INSERT INTO `stock` VALUES ('9', '1', '9', '1');
INSERT INTO `stock` VALUES ('10', '1', '10', '1');
INSERT INTO `stock` VALUES ('11', '1', '11', '1');
INSERT INTO `stock` VALUES ('12', '1', '12', '1');
INSERT INTO `stock` VALUES ('13', '1', '13', '1');
INSERT INTO `stock` VALUES ('14', '1', '14', '1');
INSERT INTO `stock` VALUES ('15', '1', '15', '4');
INSERT INTO `stock` VALUES ('16', '1', '16', '1');
INSERT INTO `stock` VALUES ('17', '1', '17', '1');
INSERT INTO `stock` VALUES ('18', '1', '18', '18');
INSERT INTO `stock` VALUES ('19', '1', '19', '6');
INSERT INTO `stock` VALUES ('20', '1', '20', '17');
INSERT INTO `stock` VALUES ('21', '1', '21', '7');
INSERT INTO `stock` VALUES ('22', '1', '22', '1');
INSERT INTO `stock` VALUES ('23', '1', '23', '1');
INSERT INTO `stock` VALUES ('24', '1', '24', '1');
INSERT INTO `stock` VALUES ('25', '1', '25', '1');
INSERT INTO `stock` VALUES ('26', '1', '26', '1');
INSERT INTO `stock` VALUES ('27', '1', '27', '1');
INSERT INTO `stock` VALUES ('28', '1', '28', '2');
INSERT INTO `stock` VALUES ('29', '1', '29', '1');
INSERT INTO `stock` VALUES ('30', '1', '30', '1');
INSERT INTO `stock` VALUES ('31', '1', '31', '4');
INSERT INTO `stock` VALUES ('32', '1', '32', '1');
INSERT INTO `stock` VALUES ('33', '1', '33', '1');
INSERT INTO `stock` VALUES ('34', '1', '34', '2');
INSERT INTO `stock` VALUES ('35', '1', '35', '1');
INSERT INTO `stock` VALUES ('36', '1', '36', '1');
INSERT INTO `stock` VALUES ('37', '1', '37', '20');
INSERT INTO `stock` VALUES ('38', '1', '38', '3');
INSERT INTO `stock` VALUES ('39', '1', '39', '3');
INSERT INTO `stock` VALUES ('40', '1', '40', '3');
INSERT INTO `stock` VALUES ('41', '1', '41', '5');
INSERT INTO `stock` VALUES ('42', '1', '42', '2');
INSERT INTO `stock` VALUES ('43', '1', '43', '35');
INSERT INTO `stock` VALUES ('44', '1', '44', '10');
INSERT INTO `stock` VALUES ('45', '1', '45', '69');
INSERT INTO `stock` VALUES ('46', '1', '46', '10');
INSERT INTO `stock` VALUES ('47', '1', '47', '1');
INSERT INTO `stock` VALUES ('48', '1', '48', '20');
INSERT INTO `stock` VALUES ('49', '1', '49', '1');
INSERT INTO `stock` VALUES ('50', '1', '50', '1');
INSERT INTO `stock` VALUES ('51', '1', '51', '0');
INSERT INTO `stock` VALUES ('52', '1', '52', '1');
INSERT INTO `stock` VALUES ('53', '1', '53', '1');
INSERT INTO `stock` VALUES ('54', '1', '54', '1');
INSERT INTO `stock` VALUES ('55', '1', '55', '1');
INSERT INTO `stock` VALUES ('56', '1', '56', '1');
INSERT INTO `stock` VALUES ('57', '1', '57', '1');
INSERT INTO `stock` VALUES ('58', '1', '58', '1');
INSERT INTO `stock` VALUES ('59', '1', '59', '1');
INSERT INTO `stock` VALUES ('60', '1', '60', '1');
INSERT INTO `stock` VALUES ('61', '1', '61', '1');
INSERT INTO `stock` VALUES ('62', '1', '62', '1');
INSERT INTO `stock` VALUES ('63', '1', '63', '1');
INSERT INTO `stock` VALUES ('64', '1', '64', '3');
INSERT INTO `stock` VALUES ('65', '1', '65', '1');
INSERT INTO `stock` VALUES ('66', '1', '66', '1');
INSERT INTO `stock` VALUES ('67', '1', '67', '4');
INSERT INTO `stock` VALUES ('68', '1', '68', '2');
INSERT INTO `stock` VALUES ('69', '1', '69', '2');
INSERT INTO `stock` VALUES ('70', '1', '70', '0');
INSERT INTO `stock` VALUES ('71', '1', '71', '0');
INSERT INTO `stock` VALUES ('72', '1', '72', '0');
INSERT INTO `stock` VALUES ('73', '1', '73', '0');
INSERT INTO `stock` VALUES ('74', '1', '74', '0');
INSERT INTO `stock` VALUES ('75', '1', '75', '0');
INSERT INTO `stock` VALUES ('76', '1', '76', '0');
INSERT INTO `stock` VALUES ('77', '1', '77', '0');
INSERT INTO `stock` VALUES ('78', '1', '78', '3');
INSERT INTO `stock` VALUES ('79', '1', '79', '8');
INSERT INTO `stock` VALUES ('80', '1', '80', '0');
INSERT INTO `stock` VALUES ('81', '1', '81', '0');
INSERT INTO `stock` VALUES ('82', '1', '82', '0');
INSERT INTO `stock` VALUES ('83', '1', '83', '0');
INSERT INTO `stock` VALUES ('84', '1', '84', '2');
INSERT INTO `stock` VALUES ('85', '1', '85', '3');
INSERT INTO `stock` VALUES ('86', '1', '86', '0');
INSERT INTO `stock` VALUES ('87', '1', '87', '30');
INSERT INTO `stock` VALUES ('88', '1', '88', '0');
INSERT INTO `stock` VALUES ('89', '1', '89', '0');
INSERT INTO `stock` VALUES ('90', '1', '90', '0');
INSERT INTO `stock` VALUES ('91', '1', '91', '1');
INSERT INTO `stock` VALUES ('92', '1', '92', '0');
INSERT INTO `stock` VALUES ('93', '1', '93', '0');
INSERT INTO `stock` VALUES ('94', '1', '94', '0');
INSERT INTO `stock` VALUES ('95', '1', '95', '0');
INSERT INTO `stock` VALUES ('96', '1', '96', '0');
INSERT INTO `stock` VALUES ('97', '1', '97', '0');
INSERT INTO `stock` VALUES ('98', '1', '98', '0');
INSERT INTO `stock` VALUES ('99', '1', '99', '0');
INSERT INTO `stock` VALUES ('100', '1', '100', '0');
INSERT INTO `stock` VALUES ('101', '1', '101', '0');
INSERT INTO `stock` VALUES ('102', '1', '102', '0');
INSERT INTO `stock` VALUES ('103', '1', '103', '0');
INSERT INTO `stock` VALUES ('104', '1', '104', '0');
INSERT INTO `stock` VALUES ('105', '1', '105', '0');
INSERT INTO `stock` VALUES ('106', '1', '106', '0');
INSERT INTO `stock` VALUES ('107', '1', '107', '0');
INSERT INTO `stock` VALUES ('108', '1', '108', '0');
INSERT INTO `stock` VALUES ('109', '1', '109', '4');
INSERT INTO `stock` VALUES ('110', '1', '110', '1');
INSERT INTO `stock` VALUES ('111', '1', '111', '0');
INSERT INTO `stock` VALUES ('112', '1', '112', '0');
INSERT INTO `stock` VALUES ('113', '1', '113', '0');
INSERT INTO `stock` VALUES ('114', '1', '114', '0');
INSERT INTO `stock` VALUES ('115', '1', '115', '3');
INSERT INTO `stock` VALUES ('116', '1', '116', '1');
INSERT INTO `stock` VALUES ('117', '1', '117', '0');
INSERT INTO `stock` VALUES ('118', '1', '118', '0');
INSERT INTO `stock` VALUES ('119', '1', '119', '0');
INSERT INTO `stock` VALUES ('120', '1', '120', '0');
INSERT INTO `stock` VALUES ('121', '1', '121', '0');
INSERT INTO `stock` VALUES ('122', '1', '122', '0');
INSERT INTO `stock` VALUES ('123', '1', '123', '0');
INSERT INTO `stock` VALUES ('124', '1', '124', '0');
INSERT INTO `stock` VALUES ('125', '1', '125', '0');
INSERT INTO `stock` VALUES ('126', '1', '126', '0');
INSERT INTO `stock` VALUES ('127', '1', '127', '0');
INSERT INTO `stock` VALUES ('128', '1', '128', '3');
INSERT INTO `stock` VALUES ('129', '1', '129', '1');
INSERT INTO `stock` VALUES ('130', '1', '130', '1');
INSERT INTO `stock` VALUES ('131', '1', '131', '8');
INSERT INTO `stock` VALUES ('132', '1', '132', '2');
INSERT INTO `stock` VALUES ('133', '1', '133', '1');
INSERT INTO `stock` VALUES ('134', '1', '134', '2');
INSERT INTO `stock` VALUES ('135', '1', '135', '1');
INSERT INTO `stock` VALUES ('136', '1', '136', '1');
INSERT INTO `stock` VALUES ('137', '1', '137', '1');
INSERT INTO `stock` VALUES ('138', '1', '138', '1');
INSERT INTO `stock` VALUES ('139', '1', '139', '1');
INSERT INTO `stock` VALUES ('140', '1', '140', '1');
INSERT INTO `stock` VALUES ('141', '1', '141', '1');
INSERT INTO `stock` VALUES ('142', '1', '142', '2');
INSERT INTO `stock` VALUES ('143', '1', '143', '2');
INSERT INTO `stock` VALUES ('144', '1', '144', '2');
INSERT INTO `stock` VALUES ('145', '1', '145', '5');
INSERT INTO `stock` VALUES ('146', '2', '1', '0');
INSERT INTO `stock` VALUES ('147', '2', '2', '1');
INSERT INTO `stock` VALUES ('148', '2', '3', '2');
INSERT INTO `stock` VALUES ('149', '2', '4', '1');
INSERT INTO `stock` VALUES ('150', '2', '5', '0');
INSERT INTO `stock` VALUES ('151', '2', '6', '1');
INSERT INTO `stock` VALUES ('152', '2', '7', '0');
INSERT INTO `stock` VALUES ('153', '2', '8', '0');
INSERT INTO `stock` VALUES ('154', '2', '9', '1');
INSERT INTO `stock` VALUES ('155', '2', '10', '1');
INSERT INTO `stock` VALUES ('156', '2', '11', '1');
INSERT INTO `stock` VALUES ('157', '2', '12', '4');
INSERT INTO `stock` VALUES ('158', '2', '13', '0');
INSERT INTO `stock` VALUES ('159', '2', '14', '2');
INSERT INTO `stock` VALUES ('160', '2', '15', '3');
INSERT INTO `stock` VALUES ('161', '2', '16', '0');
INSERT INTO `stock` VALUES ('162', '2', '17', '1');
INSERT INTO `stock` VALUES ('163', '2', '18', '24');
INSERT INTO `stock` VALUES ('164', '2', '19', '6');
INSERT INTO `stock` VALUES ('165', '2', '20', '10');
INSERT INTO `stock` VALUES ('166', '2', '21', '0');
INSERT INTO `stock` VALUES ('167', '2', '22', '2');
INSERT INTO `stock` VALUES ('168', '2', '23', '1');
INSERT INTO `stock` VALUES ('169', '2', '24', '0');
INSERT INTO `stock` VALUES ('170', '2', '25', '1');
INSERT INTO `stock` VALUES ('171', '2', '26', '0');
INSERT INTO `stock` VALUES ('172', '2', '27', '0');
INSERT INTO `stock` VALUES ('173', '2', '28', '1');
INSERT INTO `stock` VALUES ('174', '2', '29', '1');
INSERT INTO `stock` VALUES ('175', '2', '30', '0');
INSERT INTO `stock` VALUES ('176', '2', '31', '1');
INSERT INTO `stock` VALUES ('177', '2', '32', '0');
INSERT INTO `stock` VALUES ('178', '2', '33', '0');
INSERT INTO `stock` VALUES ('179', '2', '34', '0');
INSERT INTO `stock` VALUES ('180', '2', '35', '0');
INSERT INTO `stock` VALUES ('181', '2', '36', '0');
INSERT INTO `stock` VALUES ('182', '2', '37', '20');
INSERT INTO `stock` VALUES ('183', '2', '38', '3');
INSERT INTO `stock` VALUES ('184', '2', '39', '3');
INSERT INTO `stock` VALUES ('185', '2', '40', '3');
INSERT INTO `stock` VALUES ('186', '2', '41', '2');
INSERT INTO `stock` VALUES ('187', '2', '42', '3');
INSERT INTO `stock` VALUES ('188', '2', '43', '4');
INSERT INTO `stock` VALUES ('189', '2', '44', '10');
INSERT INTO `stock` VALUES ('190', '2', '45', '7');
INSERT INTO `stock` VALUES ('191', '2', '46', '10');
INSERT INTO `stock` VALUES ('192', '2', '47', '8');
INSERT INTO `stock` VALUES ('193', '2', '48', '10');
INSERT INTO `stock` VALUES ('194', '2', '49', '0');
INSERT INTO `stock` VALUES ('195', '2', '50', '0');
INSERT INTO `stock` VALUES ('196', '2', '51', '0');
INSERT INTO `stock` VALUES ('197', '2', '52', '0');
INSERT INTO `stock` VALUES ('198', '2', '53', '0');
INSERT INTO `stock` VALUES ('199', '2', '54', '0');
INSERT INTO `stock` VALUES ('200', '2', '55', '1');
INSERT INTO `stock` VALUES ('201', '2', '56', '0');
INSERT INTO `stock` VALUES ('202', '2', '57', '0');
INSERT INTO `stock` VALUES ('203', '2', '58', '0');
INSERT INTO `stock` VALUES ('204', '2', '59', '0');
INSERT INTO `stock` VALUES ('205', '2', '60', '0');
INSERT INTO `stock` VALUES ('206', '2', '61', '0');
INSERT INTO `stock` VALUES ('207', '2', '62', '0');
INSERT INTO `stock` VALUES ('208', '2', '63', '0');
INSERT INTO `stock` VALUES ('209', '2', '64', '6');
INSERT INTO `stock` VALUES ('210', '2', '65', '0');
INSERT INTO `stock` VALUES ('211', '2', '66', '2');
INSERT INTO `stock` VALUES ('212', '2', '67', '0');
INSERT INTO `stock` VALUES ('213', '2', '68', '1');
INSERT INTO `stock` VALUES ('214', '2', '69', '0');
INSERT INTO `stock` VALUES ('215', '2', '70', '1');
INSERT INTO `stock` VALUES ('216', '2', '71', '1');
INSERT INTO `stock` VALUES ('217', '2', '72', '1');
INSERT INTO `stock` VALUES ('218', '2', '73', '1');
INSERT INTO `stock` VALUES ('219', '2', '74', '1');
INSERT INTO `stock` VALUES ('220', '2', '75', '1');
INSERT INTO `stock` VALUES ('221', '2', '76', '1');
INSERT INTO `stock` VALUES ('222', '2', '77', '1');
INSERT INTO `stock` VALUES ('223', '2', '78', '2');
INSERT INTO `stock` VALUES ('224', '2', '79', '1');
INSERT INTO `stock` VALUES ('225', '2', '80', '1');
INSERT INTO `stock` VALUES ('226', '2', '81', '1');
INSERT INTO `stock` VALUES ('227', '2', '82', '1');
INSERT INTO `stock` VALUES ('228', '2', '83', '14');
INSERT INTO `stock` VALUES ('229', '2', '84', '7');
INSERT INTO `stock` VALUES ('230', '2', '85', '3');
INSERT INTO `stock` VALUES ('231', '2', '86', '10');
INSERT INTO `stock` VALUES ('232', '2', '87', '8');
INSERT INTO `stock` VALUES ('233', '2', '88', '1');
INSERT INTO `stock` VALUES ('234', '2', '89', '0');
INSERT INTO `stock` VALUES ('235', '2', '90', '4');
INSERT INTO `stock` VALUES ('236', '2', '91', '1');
INSERT INTO `stock` VALUES ('237', '2', '92', '1');
INSERT INTO `stock` VALUES ('238', '2', '93', '1');
INSERT INTO `stock` VALUES ('239', '2', '94', '1');
INSERT INTO `stock` VALUES ('240', '2', '95', '8');
INSERT INTO `stock` VALUES ('241', '2', '96', '8');
INSERT INTO `stock` VALUES ('242', '2', '97', '1');
INSERT INTO `stock` VALUES ('243', '2', '98', '1');
INSERT INTO `stock` VALUES ('244', '2', '99', '1');
INSERT INTO `stock` VALUES ('245', '2', '100', '1');
INSERT INTO `stock` VALUES ('246', '2', '101', '1');
INSERT INTO `stock` VALUES ('247', '2', '102', '1');
INSERT INTO `stock` VALUES ('248', '2', '103', '1');
INSERT INTO `stock` VALUES ('249', '2', '104', '1');
INSERT INTO `stock` VALUES ('250', '2', '105', '1');
INSERT INTO `stock` VALUES ('251', '2', '106', '3');
INSERT INTO `stock` VALUES ('252', '2', '107', '2');
INSERT INTO `stock` VALUES ('253', '2', '108', '10');
INSERT INTO `stock` VALUES ('254', '2', '109', '3');
INSERT INTO `stock` VALUES ('255', '2', '110', '5');
INSERT INTO `stock` VALUES ('256', '2', '111', '14');
INSERT INTO `stock` VALUES ('257', '2', '112', '12');
INSERT INTO `stock` VALUES ('258', '2', '113', '8');
INSERT INTO `stock` VALUES ('259', '2', '114', '1');
INSERT INTO `stock` VALUES ('260', '2', '115', '4');
INSERT INTO `stock` VALUES ('261', '2', '116', '1');
INSERT INTO `stock` VALUES ('262', '2', '117', '5');
INSERT INTO `stock` VALUES ('263', '2', '118', '2');
INSERT INTO `stock` VALUES ('264', '2', '119', '8');
INSERT INTO `stock` VALUES ('265', '2', '120', '5');
INSERT INTO `stock` VALUES ('266', '2', '121', '9');
INSERT INTO `stock` VALUES ('267', '2', '122', '2');
INSERT INTO `stock` VALUES ('268', '2', '123', '24');
INSERT INTO `stock` VALUES ('269', '2', '124', '36');
INSERT INTO `stock` VALUES ('270', '2', '125', '16');
INSERT INTO `stock` VALUES ('271', '2', '126', '6');
INSERT INTO `stock` VALUES ('272', '2', '127', '2');
INSERT INTO `stock` VALUES ('273', '2', '128', '2');
INSERT INTO `stock` VALUES ('274', '2', '129', '0');
INSERT INTO `stock` VALUES ('275', '2', '130', '0');
INSERT INTO `stock` VALUES ('276', '2', '131', '0');
INSERT INTO `stock` VALUES ('277', '2', '132', '0');
INSERT INTO `stock` VALUES ('278', '2', '133', '0');
INSERT INTO `stock` VALUES ('279', '2', '134', '0');
INSERT INTO `stock` VALUES ('280', '2', '135', '0');
INSERT INTO `stock` VALUES ('281', '2', '136', '0');
INSERT INTO `stock` VALUES ('282', '2', '137', '0');
INSERT INTO `stock` VALUES ('283', '2', '138', '0');
INSERT INTO `stock` VALUES ('284', '2', '139', '0');
INSERT INTO `stock` VALUES ('285', '2', '140', '0');
INSERT INTO `stock` VALUES ('286', '2', '141', '0');
INSERT INTO `stock` VALUES ('287', '2', '142', '0');
INSERT INTO `stock` VALUES ('288', '2', '143', '0');
INSERT INTO `stock` VALUES ('289', '2', '144', '0');
INSERT INTO `stock` VALUES ('290', '2', '145', '0');

-- ----------------------------
-- Table structure for tienda
-- ----------------------------
DROP TABLE IF EXISTS `tienda`;
CREATE TABLE `tienda` (
  `idTienda` int(11) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `direccion` text,
  PRIMARY KEY (`idTienda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tienda
-- ----------------------------
INSERT INTO `tienda` VALUES ('1', 'Tienda 1', 'Marcabalito - Urb. Santa Teresa de Avila Mz D. Lote 25');
INSERT INTO `tienda` VALUES ('2', 'Tienda 2', 'Av. Federico Villarreal Mz. H Lote 4');

-- ----------------------------
-- Table structure for tipomovimiento
-- ----------------------------
DROP TABLE IF EXISTS `tipomovimiento`;
CREATE TABLE `tipomovimiento` (
  `idTipoMovimiento` int(11) NOT NULL,
  `Descripcion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idTipoMovimiento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tipomovimiento
-- ----------------------------
INSERT INTO `tipomovimiento` VALUES ('1', 'Entrada');
INSERT INTO `tipomovimiento` VALUES ('2', 'Salida');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `appaterno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apmaterno` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dni` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idtipo` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `rol_id` (`idtipo`) USING BTREE,
  CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`idtipo`) REFERENCES `rol` (`rol_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'admin', '0f884aabb3b529f3c9fa27832b69694c', 'Juan ', 'Cabrera', 'Diaz', null, null, null, null, '1');
INSERT INTO `usuario` VALUES ('2', 'jcava', '7dc031d892f71aabb2559680a6b8bc15', 'Jean Carlo', 'Cava', 'Murphy', '', '', '', null, '1');

-- ----------------------------
-- Procedure structure for sp_combos
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_combos`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_combos`(IN `opcion` VARCHAR(100))
BEGIN
IF opcion = 'combo_empresa' THEN
      SELECT idEmpresa,nombre from empresa order by nombre asc;
    END IF;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_control_dashboard
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_control_dashboard`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_control_dashboard`(IN `ve_opcion` VARCHAR(50))
BEGIN

IF ve_opcion='opc_listar_stock' THEN

	SELECT i.idItem, i.descripcion, i.unidad
	,(select s.stock from stock s where s.idTienda = 1 and s.idItem = i.idItem) as Tienda1
	,(select s.stock from stock s where s.idTienda = 2 and s.idItem = i.idItem) as Tienda2
	, i.stockMinimo, (select Tienda1 + Tienda2 - stockMinimo) as resta
	from item i;

END IF;



IF ve_opcion='opc_chartAperturabt' THEN

select fecha, sum(cantidad) as hora from movimientos
where idTipoMovimiento = 2 and fecha >= (select subdate(curdate(),31))
group by fecha;
END IF;

IF ve_opcion='opc_chartt1' THEN

select fecha, sum(cantidad) as hora from movimientos
where idTipoMovimiento = 2 and fecha >= (select subdate(curdate(),31)) and idTienda=1
group by fecha;
END IF;

IF ve_opcion='opc_chartt2' THEN

select fecha, sum(cantidad) as hora from movimientos
where idTipoMovimiento = 2 and fecha >= (select subdate(curdate(),31)) and idTienda=2
group by fecha;
END IF;


IF ve_opcion='opc_nroSalidas' THEN

	select sum(cantidad) from movimientos
	where idTipoMovimiento = 2 and fecha >= (SELECT curdate() - INTERVAL DAYOFMONTH(curdate()) - 1 DAY);

END IF;

IF ve_opcion='opc_stockOut' THEN

	select i.descripcion from movimientos m
	inner join item i on i.idItem = m.iditem
	where idTipoMovimiento = 2 and fecha >= (SELECT curdate() - INTERVAL DAYOFMONTH(curdate()) - 1 DAY)
	group by m.iditem
	order by m.cantidad desc
	limit 1;

END IF;

IF ve_opcion='opc_stockCritico' THEN

	select count(*) from movimientos
	where idTipoMovimiento = 2;

END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_control_inventario
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_control_inventario`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_control_inventario`(IN `opcion` VARCHAR(200))
BEGIN
IF opcion = 'opc_listar_inventario_admin' THEN

	SELECT i.idItem, i.descripcion, i.costoUnitario, i.precioVenta, i.unidad
	,(select s.stock from stock s where s.idTienda = 1 and s.idItem = i.idItem) as Tienda1
	,(select s.stock from stock s where s.idTienda = 2 and s.idItem = i.idItem) as Tienda2
	, i.stockMinimo
	from item i;

end if;

IF opcion = 'opc_listar_entradat1' THEN

	SELECT m.idMovimientos, m.fecha, i.descripcion, m.cantidad, i.unidad, m.costoUnitario, u.usuario
	from movimientos m
	inner join item i on i.idItem = m.iditem
	inner join usuario u on u.idusuario = m.idusuario
	where m.idTipoMovimiento = '1' and m.idTienda= '1' ;

end if;

IF opcion = 'opc_listar_entradat2' THEN

	SELECT m.idMovimientos, m.fecha, i.descripcion, m.cantidad, i.unidad, m.costoUnitario, u.usuario
	from movimientos m
	inner join item i on i.idItem = m.iditem
	inner join usuario u on u.idusuario = m.idusuario
	where m.idTipoMovimiento = '1' and m.idTienda= '2' ;

end if;

IF opcion = 'opc_listar_salidat1' THEN

	SELECT m.idMovimientos, m.fecha, i.descripcion, m.cantidad, i.unidad, m.precioVenta, u.usuario
	from movimientos m
	inner join item i on i.idItem = m.iditem
	inner join usuario u on u.idusuario = m.idusuario
	where m.idTipoMovimiento = '2' and m.idTienda= '1' ;

end if;

IF opcion = 'opc_listar_salidat2' THEN

	SELECT m.idMovimientos, m.fecha, i.descripcion, m.cantidad, i.unidad, m.precioVenta, u.usuario
	from movimientos m
	inner join item i on i.idItem = m.iditem
	inner join usuario u on u.idusuario = m.idusuario
	where m.idTipoMovimiento = '2' and m.idTienda= '2' ;

end if;



END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_control_item
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_control_item`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_control_item`(IN `ve_opcion` VARCHAR(50), IN `ve_idItem` INT)
BEGIN

	IF ve_opcion = 'opc_editar_item' THEN            
				SELECT i.idItem,i.descripcion,i.unidad,i.costoUnitario,i.precioVenta,i.stockMinimo
				FROM item i where i.idItem=ve_idItem;
		END IF;

	IF ve_opcion = 'opc_entrada_item' THEN            
				SELECT i.idItem,i.descripcion
				FROM item i where i.idItem=ve_idItem;
		END IF;

	IF ve_opcion = 'eliminar-item' THEN            
				DELETE FROM item WHERE idItem = ve_idItem;
		END IF;

	IF ve_opcion = 'opc_salida_item' THEN            
				SELECT i.idItem,i.descripcion
				FROM item i where i.idItem=ve_idItem;
		END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_control_movimientos
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_control_movimientos`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_control_movimientos`(IN `opcion` VARCHAR(200), IN `ve_mov` INT)
BEGIN
IF opcion = 'opc_entradat1' THEN

	select m.idMovimientos, m.fecha, i.descripcion, m.cantidad, m.costoUnitario,m.iditem
	from movimientos m
	inner JOIN item i on i.idItem = m.iditem
	where idTipoMovimiento = 1 and idTienda = 1 and m.idMovimientos = ve_mov;

end if;

IF opcion = 'opc_entradat2' THEN

	select m.idMovimientos, m.fecha, i.descripcion, m.cantidad, m.costoUnitario,m.iditem
	from movimientos m
	inner JOIN item i on i.idItem = m.iditem
	where idTipoMovimiento = 1 and idTienda = 2 and m.idMovimientos = ve_mov;

end if;

IF opcion = 'opc_salidat1' THEN

	select m.idMovimientos, m.fecha, i.descripcion, m.cantidad, m.precioVenta,m.iditem
	from movimientos m
	inner JOIN item i on i.idItem = m.iditem
	where idTipoMovimiento = 2 and idTienda = 1 and m.idMovimientos = ve_mov;

end if;

IF opcion = 'opc_salidat2' THEN

	select m.idMovimientos, m.fecha, i.descripcion, m.cantidad, m.precioVenta,m.iditem
	from movimientos m
	inner JOIN item i on i.idItem = m.iditem
	where idTipoMovimiento = 2 and idTienda = 2 and m.idMovimientos = ve_mov;

end if;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_control_usuario
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_control_usuario`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_control_usuario`(IN `ve_opcion` VARCHAR(50), IN `ve_usuId` INT, IN `ve_usuUsuario` VARCHAR(50), IN `ve_usuClave` VARCHAR(50))
BEGIN

if ve_opcion = 'opc_login_respuesta' then       
  SET @CORRECTO = (SELECT COUNT(*) FROM  usuario usu 
        WHERE 
          usu.usuario = ve_usuUsuario AND usu.clave = ve_usuClave);
          
  IF @CORRECTO>0 then
     select '1' as 'respuesta';
  ELSE
     select 'Usuario o clave incorrectos' as 'respuesta';
  END IF;
end if;  


IF ve_opcion='opc_login_listar' THEN
  select u.idusuario, u.usuario, u.nombres, u.appaterno, u.apmaterno,u.email, u.celular, u.img, u.idtipo
  from usuario u         
  where u.usuario = ve_usuUsuario and u.clave = ve_usuClave;
END IF;

IF ve_opcion='opc_listar_menu' THEN
  SELECT DISTINCT 
      men.men_id,
      men.men_idpadre,
      men.men_nombre,
      men.men_url,      
      men.men_titulo,
      men.men_estilo,
      men.men_estado
    FROM usuario usu
    -- JOIN perfil perf  ON usu.idusuario=perf.idusuario
    JOIN rol rol      ON rol.rol_id=usu.idtipo
    JOIN permiso perm ON perm.rol_id=rol.rol_id
    JOIN menu  men    ON men.men_id=perm.men_id
    WHERE usu.idusuario=ve_usuId AND rol.rolActivo=1 AND men.men_estado=1 order by men.men_nombre;

END IF;

IF ve_opcion = 'opc_usuarios_socios_listar' THEN            
      SELECT u.idusuario, u.nombres, CONCAT(u.appaterno,' ', u.apmaterno) as apellidos, u.email, u.celular, s.nombre 
      FROM usuario u
      JOIN socio s on u.idsocio = s.idsocio
      where u.idtipo=2;
    END IF;

if ve_opcion = 'opc_user_respuesta' then       
  SET @CORRECTO = (SELECT COUNT(*) FROM  usuario usu 
        WHERE 
          usu.usuario = ve_usuUsuario);
          
  IF @CORRECTO>0 then
     select '1' as 'respuesta';
  ELSE
     select 'Existe Usuario' as 'respuesta';
  END IF;
end if;  
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_control_usuarios
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_control_usuarios`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_control_usuarios`(IN `ve_opcion` VARCHAR(50), IN `ve_idUsuario` INT)
BEGIN

	IF ve_opcion = 'opc_usuarios_listar' THEN            
				SELECT u.idusuario, u.nombres, u.appaterno, u.apmaterno, u.email, u.celular, u.dni, u.usuario,
				case 
					when u.idtipo=1 then "ADMINISTRADOR" 
					WHEN u.idtipo=2 THEN "VENDEDOR" 
					END as idtipo
				FROM usuario u order by idusuario desc;
			END IF;

	IF ve_opcion = 'opc_editar_usuarios' THEN            
				SELECT u.idusuario, u.nombres, u.appaterno, u.apmaterno, u.email, u.celular, u.dni, u.usuario,
				case 
					when u.idtipo=1 then "ADMINISTRADOR" 
					WHEN u.idtipo=2 THEN "VENDEDOR" 
					END as idtipo
				FROM usuario u where u.idusuario=ve_idUsuario;
		END IF;

	IF ve_opcion = 'eliminar-usuario' THEN            
				DELETE FROM usuario WHERE idusuario = ve_idUsuario;
		END IF;

	IF ve_opcion = 'reset' THEN            
				update usuario 
				set clave = md5(usuario)
				where idusuario = ve_idUsuario;
		END IF;

END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_gestionar_usuario
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_gestionar_usuario`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_gestionar_usuario`(IN `opcion` VARCHAR(200), IN `nombres` VARCHAR(100), IN `paterno` VARCHAR(100), IN `materno` VARCHAR(100), IN `nombre` VARCHAR(100), IN `rubro` VARCHAR(100), IN `ruc` VARCHAR(11), IN `dni` VARCHAR(20), IN `direccion` VARCHAR(200), IN `celular` VARCHAR(100), IN `telefono` VARCHAR(100), IN `usuario` VARCHAR(100), IN `clave` VARCHAR(100), IN `web` varchar(100), IN `email` VARCHAR(100), IN `id` INT )
BEGIN
if opcion = 'opc_usuario_respuesta' THEN            
      SET @CORRECTO = (SELECT COUNT(*) FROM  usuario usu WHERE 
              usu.usuario = usuario AND
              usu.clave = clave AND usu.dni = dni);
      IF @CORRECTO>0 then
         select '1' as 'respuesta';
      ELSE
         select '0' as 'respuesta';
    END IF;
    END IF;
    IF opcion = 'opc_socio_registrar' THEN            
      INSERT INTO socio(nombre, rubro, RUC, direccion, telefono, web, email) VALUES (nombre, rubro, ruc, direccion, telefono, web, email);
    END IF;
    /*IF opcion = 'opc_usuario_registrar2' THEN            
      INSERT INTO usuario( nombres, appaterno, apmaterno, dni, fecharegistro, email) VALUES (nombres, paterno, materno, dni, now(), email);
    SET @USUARIO = (SELECT MAX(idusuario) AS id FROM usuario);  
    INSERT INTO inscripcion (idusuario, fecha, idevento, certificado, pagado) VALUES (@USUARIO, now(), evento, certificado,0);
    END IF;*/
    IF opcion = 'opc_usuario_modificar' THEN            
      UPDATE usuario SET nombres = nombres, appaterno = paterno, apmaterno = materno, dni = dni ,direccion=direccion, celular=celular, usuario=usuario, clave=clave WHERE idusuario = id;
    END IF;
    IF opcion = 'opc_usuario_eliminar' THEN            
      DELETE FROM usuario WHERE idusuario = id;
    END IF;

   IF opcion = 'opc_usuario_registrar1' THEN  
		INSERT INTO usuario(nombres, appaterno, apmaterno, dni, direccion, celular, usuario, clave, idtipo) VALUES (nombres, paterno, materno, dni, direccion,celular, usuario, clave, '1');
    END IF;

   IF opcion = 'opc_usuario_registrar2' THEN  
		INSERT INTO usuario(nombres, appaterno, apmaterno, dni, direccion, celular, usuario, clave, idtipo, idEmpresa) VALUES (nombres, paterno, materno, dni, direccion,celular, usuario, clave, '2', empresa);
    END IF;
END
;;
DELIMITER ;

-- ----------------------------
-- Procedure structure for sp_mostrar_usuario
-- ----------------------------
DROP PROCEDURE IF EXISTS `sp_mostrar_usuario`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_mostrar_usuario`(IN `opcion` VARCHAR(200), IN `id` INT)
BEGIN
IF opcion = 'opc_usuario_mostrar' THEN            
      SELECT u.idusuario, u.nombres, u.appaterno, u.apmaterno, u.dni FROM usuario u;
    END IF;
END
;;
DELIMITER ;
SET FOREIGN_KEY_CHECKS=1;
