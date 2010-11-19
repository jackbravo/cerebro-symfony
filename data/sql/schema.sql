CREATE TABLE campaign (id INT AUTO_INCREMENT, nombre VARCHAR(255) NOT NULL, vendedor_id INT, categoria_id INT, producto_id INT, specialty_id INT, cliente VARCHAR(255), orden VARCHAR(255), facturacion DOUBLE, fecha_inicio DATETIME NOT NULL, fecha_cierre DATETIME NOT NULL, activa TINYINT(1) DEFAULT '1', fecha_ingreso DATETIME NOT NULL, fecha_actualizacion DATETIME NOT NULL, INDEX producto_id_idx (producto_id), INDEX categoria_id_idx (categoria_id), INDEX specialty_id_idx (specialty_id), INDEX vendedor_id_idx (vendedor_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE categoria_campaign (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE categoria_item (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE impresor (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE item (id INT AUTO_INCREMENT, campaign_id INT, plaza_id INT, position INT, categoria_id INT, tipo_id INT, responsable_id INT, prueba_color DATETIME, impresor_id INT, entrada_impresor DATETIME, salida_impresor DATETIME, mensajeria_id INT, guia VARCHAR(255), fecha_envio DATETIME, fecha_recepcion DATETIME, permisionario VARCHAR(255), carroceria VARCHAR(255), compra_directa VARCHAR(255), ruta VARCHAR(255), placas VARCHAR(255), economico VARCHAR(255), instalacion DATETIME, desmontaje DATETIME, evidencia TINYINT(1) DEFAULT '0', fecha_actualizacion DATETIME NOT NULL, INDEX campaign_id_idx (campaign_id), INDEX plaza_id_idx (plaza_id), INDEX categoria_id_idx (categoria_id), INDEX tipo_id_idx (tipo_id), INDEX impresor_id_idx (impresor_id), INDEX mensajeria_id_idx (mensajeria_id), INDEX responsable_id_idx (responsable_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mensajeria (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE perfil (id INT AUTO_INCREMENT, nombre VARCHAR(255), correo VARCHAR(255), telefono VARCHAR(255), user_id INT, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE plaza (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE producto (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE specialty (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE tipo (id INT AUTO_INCREMENT, nombre VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id INT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id INT, permission_id INT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id INT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id INT AUTO_INCREMENT, user_id INT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id, ip_address)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id INT AUTO_INCREMENT, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id INT, group_id INT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id INT, permission_id INT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE campaign ADD CONSTRAINT campaign_vendedor_id_sf_guard_user_id FOREIGN KEY (vendedor_id) REFERENCES sf_guard_user(id);
ALTER TABLE campaign ADD CONSTRAINT campaign_specialty_id_specialty_id FOREIGN KEY (specialty_id) REFERENCES specialty(id);
ALTER TABLE campaign ADD CONSTRAINT campaign_producto_id_producto_id FOREIGN KEY (producto_id) REFERENCES producto(id);
ALTER TABLE campaign ADD CONSTRAINT campaign_categoria_id_categoria_campaign_id FOREIGN KEY (categoria_id) REFERENCES categoria_campaign(id);
ALTER TABLE item ADD CONSTRAINT item_tipo_id_tipo_id FOREIGN KEY (tipo_id) REFERENCES tipo(id);
ALTER TABLE item ADD CONSTRAINT item_responsable_id_sf_guard_user_id FOREIGN KEY (responsable_id) REFERENCES sf_guard_user(id);
ALTER TABLE item ADD CONSTRAINT item_plaza_id_plaza_id FOREIGN KEY (plaza_id) REFERENCES plaza(id);
ALTER TABLE item ADD CONSTRAINT item_mensajeria_id_mensajeria_id FOREIGN KEY (mensajeria_id) REFERENCES mensajeria(id);
ALTER TABLE item ADD CONSTRAINT item_impresor_id_impresor_id FOREIGN KEY (impresor_id) REFERENCES impresor(id);
ALTER TABLE item ADD CONSTRAINT item_categoria_id_categoria_item_id FOREIGN KEY (categoria_id) REFERENCES categoria_item(id);
ALTER TABLE item ADD CONSTRAINT item_campaign_id_campaign_id FOREIGN KEY (campaign_id) REFERENCES campaign(id) ON DELETE CASCADE;
ALTER TABLE perfil ADD CONSTRAINT perfil_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id);
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
