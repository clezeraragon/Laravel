/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50620
Source Host           : localhost:3306
Source Database       : edukee

Target Server Type    : MYSQL
Target Server Version : 50620
File Encoding         : 65001

Date: 2014-10-23 11:30:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flag` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', 'Console', 'Console');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_15_201200_create_produto_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_16_172913_create_Vendas_table', '2');
INSERT INTO `migrations` VALUES ('2014_10_16_173756_create_Venda_item_table', '3');
INSERT INTO `migrations` VALUES ('2014_10_17_143643_add_deleted_column_to_produto_table', '4');
INSERT INTO `migrations` VALUES ('2014_10_21_135355_create_categoria_table', '5');
INSERT INTO `migrations` VALUES ('2014_10_21_142742_add_categoria_to_produto_table', '6');

-- ----------------------------
-- Table structure for produto
-- ----------------------------
DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descrisao` text COLLATE utf8_unicode_ci NOT NULL,
  `valor` float(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `categorias_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produto_categorias_id_foreign` (`categorias_id`),
  CONSTRAINT `produto_categorias_id_foreign` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of produto
-- ----------------------------
INSERT INTO `produto` VALUES ('1', 'clezer', 'bicicleta', '5000.00', '2014-10-15 20:38:56', '2014-10-22 15:56:21', '2014-10-22 15:56:21', null);
INSERT INTO `produto` VALUES ('2', 'carro amarelo lam', 'playstation 4', '2000.00', '2014-10-15 20:56:08', '2014-10-22 16:21:08', null, '1');
INSERT INTO `produto` VALUES ('3', 'jonathan', 'playstation 4', '2000.00', '2014-10-16 17:04:19', '2014-10-16 17:04:19', null, '1');
INSERT INTO `produto` VALUES ('4', 'cleber', 'xbox one', '2000.00', '2014-10-16 17:07:08', '2014-10-16 17:07:08', null, null);
INSERT INTO `produto` VALUES ('11', 'cleber araogn ramos', 'xbox one', '2000.00', '2014-10-16 18:05:02', '2014-10-16 18:05:02', null, null);
INSERT INTO `produto` VALUES ('12', 'cleber araogn ramos', 'xbox one', '2000.00', '2014-10-16 18:07:36', '2014-10-16 18:07:36', null, null);
INSERT INTO `produto` VALUES ('13', 'cleber araogn ramos', 'xbox one', '2000.00', '2014-10-16 18:09:06', '2014-10-16 18:09:06', null, null);
INSERT INTO `produto` VALUES ('33', 'Fernado', 'cadeira de madeira velha', '500.00', '2014-10-17 14:45:11', '2014-10-17 15:03:45', null, null);
INSERT INTO `produto` VALUES ('34', 'Fernado', 'cadeira de madeira velha', '500.00', '2014-10-17 14:45:14', '2014-10-17 14:45:14', null, null);
INSERT INTO `produto` VALUES ('35', 'Fernado', 'cadeira de madeira velha', '500.00', '2014-10-17 14:45:15', '2014-10-17 14:45:15', null, null);
INSERT INTO `produto` VALUES ('36', 'Fernado', 'cadeira de madeira velha', '500.00', '2014-10-17 14:45:16', '2014-10-17 14:45:16', null, null);
INSERT INTO `produto` VALUES ('37', 'Fernado', 'cadeira de madeira velha', '500.00', '2014-10-17 14:45:17', '2014-10-17 14:45:17', null, null);
INSERT INTO `produto` VALUES ('38', 'Fernado', 'cadeira de madeira velha', '500.00', '2014-10-17 15:06:40', '2014-10-17 15:06:40', null, null);
INSERT INTO `produto` VALUES ('39', 'cleber araogn ramos', 'xbox one', '2000.00', '2014-10-21 15:23:54', '2014-10-21 15:23:54', null, null);
INSERT INTO `produto` VALUES ('40', 'cleber araogn ramos', 'xbox one', '2000.00', '2014-10-21 15:24:45', '2014-10-21 15:24:45', null, null);
INSERT INTO `produto` VALUES ('41', 'cleber araogn ramos', 'xbox one', '2000.00', '2014-10-21 15:26:28', '2014-10-21 15:26:28', null, null);
INSERT INTO `produto` VALUES ('42', 'cleber araogn ramos', 'xbox one', '2000.00', '2014-10-21 15:27:42', '2014-10-21 15:27:42', null, null);
INSERT INTO `produto` VALUES ('43', 'Nintendo Wii', 'Console da Nintendo', '1020.00', '2014-10-21 19:29:00', '2014-10-21 19:29:00', null, '1');
INSERT INTO `produto` VALUES ('44', 'teste via API', 'Xbox 360 API', '6000.00', '2014-10-22 15:59:22', '2014-10-22 15:59:22', null, null);
INSERT INTO `produto` VALUES ('45', 'teste via API clezer', 'Xbox 360 API', '6000.00', '2014-10-22 16:04:07', '2014-10-22 16:04:07', null, null);

-- ----------------------------
-- Table structure for venda
-- ----------------------------
DROP TABLE IF EXISTS `venda`;
CREATE TABLE `venda` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome_cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of venda
-- ----------------------------
INSERT INTO `venda` VALUES ('6', 'john Deve', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `venda` VALUES ('7', 'john Deve', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `venda` VALUES ('8', 'john Deve', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `venda` VALUES ('9', 'john Deve', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `venda` VALUES ('10', 'john Deve', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `venda` VALUES ('11', 'john Deve', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `venda` VALUES ('12', 'john Deve', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for venda_item
-- ----------------------------
DROP TABLE IF EXISTS `venda_item`;
CREATE TABLE `venda_item` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `venda_id` int(10) unsigned NOT NULL,
  `produto_id` int(10) unsigned NOT NULL,
  `qtde` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `venda_item_venda_id_foreign` (`venda_id`),
  KEY `venda_item_produto_id_foreign` (`produto_id`),
  CONSTRAINT `venda_item_produto_id_foreign` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`id`),
  CONSTRAINT `venda_item_venda_id_foreign` FOREIGN KEY (`venda_id`) REFERENCES `venda` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of venda_item
-- ----------------------------
INSERT INTO `venda_item` VALUES ('1', '6', '1', '10');
INSERT INTO `venda_item` VALUES ('5', '7', '1', '8');
INSERT INTO `venda_item` VALUES ('6', '8', '1', '8');
INSERT INTO `venda_item` VALUES ('7', '9', '1', '8');
INSERT INTO `venda_item` VALUES ('8', '10', '2', '8');
INSERT INTO `venda_item` VALUES ('9', '11', '2', '8');
INSERT INTO `venda_item` VALUES ('10', '6', '43', '30');
INSERT INTO `venda_item` VALUES ('16', '6', '43', '30');
