-- COMANDOS PARA CREAR LA BASE DE DATOS
-- PARA MECAGEST Y SU INTERACCION CON PHP

-- 1. CREAR KA BASE DE DATOS
CREATE DATABASE db_mecagestt;

-- 2. USAR/ACTIVAR 
USE db_mecagestt;

-- 3. crear la Tabla nde Usuarios
CREATE TABLE usuarios (
       id INT AUTO_INCREMENT PRIMARY KEY,
       nombre VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       password VARCHAR(255) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
       updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
		   ON UPDATE CURRENT_TIMESTAMP,
		status TINYINT DEFAULT 1
);

-- 4. VISUALIZAR LA ESTRUCTURA DE LA TABLA
DESCRIBE usuarios;

-- 5. SELECCIONAR LOS REGISTROS DE LA TABLA
SELECT * FROM usuarios;

-- 6. EJEMPLO DE INSERCION DE UN NUEVO USUARIO
INSERT INTO usuarios VALUES(DEFAULT,"Jeovany vargas", "250900@utxicoctepec.edu.mx",
md5("Vargasvargas11"), now(), null, 1);

-- 7. INSERCION MULTIPLE DE OTROS DOS USUARIOS
INSERT INTO usuarios (nombre,email,password) values ("Edgar Vargas","edgarvargas@gmail.com",
md5("Vargas11")),("juan godinez","juan@gmail.com", md5("12345"));
