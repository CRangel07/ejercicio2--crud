CREATE DATABASE IF NOT EXISTS `crud-cemento`;
USE `crud-cemento`;

CREATE TABLE IF NOT EXISTS `materiales` (
  material_ID int unsigned NOT NULL AUTO_INCREMENT,
  material_nombre varchar(100) DEFAULT NULL,
  material_unidad varchar(100) DEFAULT NULL,
  material_precio float DEFAULT NULL,
  material_stock int DEFAULT NULL,
  material_total float AS (material_precio * material_stock),
  PRIMARY KEY (`material_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;