-- mysql -u root -p myappdb < bd_sircar.sql      Esto es para Linux
-- mysql -u root -p myappdb --execute="source bd_sircar.sql;" para Powershell en Windows
-- SHOW VARIABLES WHERE Variable_name = 'hostname';   la dirección ip o el Hostname
-- SHOW VARIABLES WHERE Variable_name = 'port';  en qué puerto está saliendo
-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS myappdb;
USE myappdb;

-- Crear la tabla de roles
CREATE TABLE roles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL UNIQUE,
    descripcion TEXT
);

-- Insertar los roles en la tabla 'roles'
INSERT INTO roles (nombre, descripcion)
VALUES
('Administrador', 'Usuario con acceso completo al sistema y configuración.'),
('Técnico', 'Usuario encargado del soporte técnico.'),
('Profesor', 'Usuario responsable de la enseñanza y gestión académica.'),
('Entrevistador', 'Usuario encargado de realizar entrevistas y evaluaciones.');

-- Crear la tabla de usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    rol_id INT NOT NULL,
    FOREIGN KEY (rol_id) REFERENCES roles(id)
);

-- Ejemplo de inserción de usuarios
INSERT INTO usuarios (nombre, correo, password, rol_id)
VALUES
('Juan Pérez', 'admin@example.com', 'admin123', 1), -- Administrador
('María López', 'tecnico@example.com', 'tecnico123', 2), -- Técnico
('Luis Martínez', 'profesor@example.com', 'profesor123', 3), -- Profesor
('Ana García', 'entrevistador@example.com', 'entrevistador123', 4); -- Entrevistador

-- Consultar datos (opcional)
SELECT * FROM roles;
SELECT * FROM usuarios;


