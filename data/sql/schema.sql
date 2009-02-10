CREATE TABLE tipo (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE categoria_item (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE producto (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE categoria_campaign (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE plaza (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE specialty (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mensajeria (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE campaign (id INT AUTO_INCREMENT, nombre VARCHAR(255) NOT NULL, vendedor_id INT, categoria_id INT, producto_id INT, specialty_id INT, cliente VARCHAR(255), orden VARCHAR(255), facturacion DOUBLE, fecha_inicio DATETIME, fecha_cierre DATETIME, activa TINYINT(1) DEFAULT '1', fecha_ingreso DATETIME, fecha_actualizacion DATETIME, INDEX producto_id_idx (producto_id), INDEX categoria_id_idx (categoria_id), INDEX specialty_id_idx (specialty_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE impresor (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE item (id INT AUTO_INCREMENT, plaza_id INT, categoria_id INT, tipo_id INT, responsable_id INT, prueba_color DATETIME, impresor_id INT, entrada_impresor DATETIME, salida_impresor DATETIME, mensajeria_id INT, guia VARCHAR(255), fecha_envio DATETIME, fecha_recepcion DATETIME, permisionario VARCHAR(255), carroceria VARCHAR(255), compra_directa VARCHAR(255), ruta VARCHAR(255), placas VARCHAR(255), economico VARCHAR(255), instalacion DATETIME, desmontaje DATETIME, evidencia TINYINT(1), fecha_actualizacion DATETIME, INDEX plaza_id_idx (plaza_id), INDEX categoria_id_idx (categoria_id), INDEX tipo_id_idx (tipo_id), INDEX impresor_id_idx (impresor_id), INDEX mensajeria_id_idx (mensajeria_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE campaign ADD FOREIGN KEY (specialty_id) REFERENCES specialty(id);
ALTER TABLE campaign ADD FOREIGN KEY (producto_id) REFERENCES producto(id);
ALTER TABLE campaign ADD FOREIGN KEY (categoria_id) REFERENCES categoria_campaign(id);
ALTER TABLE item ADD FOREIGN KEY (tipo_id) REFERENCES tipo(id);
ALTER TABLE item ADD FOREIGN KEY (plaza_id) REFERENCES plaza(id);
ALTER TABLE item ADD FOREIGN KEY (mensajeria_id) REFERENCES mensajeria(id);
ALTER TABLE item ADD FOREIGN KEY (impresor_id) REFERENCES impresor(id);
ALTER TABLE item ADD FOREIGN KEY (categoria_id) REFERENCES categoria_item(id);
