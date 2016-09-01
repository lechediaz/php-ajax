CREATE DATABASE IF NOT EXISTS base_de_datos;

USE base_de_datos;

CREATE TABLE IF NOT EXISTS amigo (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(60) NOT NULL,
    ciudad VARCHAR(200) NOT NULL
);

INSERT INTO amigo (nombre, ciudad) VALUES
('Pedro Carlos Ramirez', 'Neiva'),
('Sara Miguel Rojas', 'Cali'),
('Manuela Pausini', 'Cali'),
('Santiago Julian Trujillo', 'Bogotá'),
('Marisol Sanchez', 'Bogotá'),
('Jhoan Verdana', 'Neiva'),
('Camila Katherine Polania', 'Cali');