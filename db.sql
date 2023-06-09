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

INSERT INTO materiales(material_nombre, material_unidad, material_precio, material_stock) VALUES ("CEMENTO BLANCO CEMEX 25", "KILOGRAMOS", 4120, 230), ("ARENA FINA", "KILOGRAMOS", 10000, 40), ("CHAROLA PARA MEZCLAR", "PIEZAS", 45, 225), ("ADHESIVO PARA CONCRETO FESTERBOND 19 L", "LITROS", 30, 3499), ("CEMENTO EXTRA GRIS CEMEX 25 KG", "KILOGRAMOS", 300, 135), ("ARENA VOLCÁNICA GRIS 50 KG", "KILOGRAMOS", 100, 73), ("ARENA SÍLICA BEIGE 1.5 KG", "KILOGRAMOS", 100, 42), ("BLOCK HUECO (6 PULGADAS) 15 X 20 CM 2 HOYOS", "PIEZAS", 5000, 16), ("TABIQUE MULTEX-6 (6X12X24)", "PIEZAS", 3000, 4.20);