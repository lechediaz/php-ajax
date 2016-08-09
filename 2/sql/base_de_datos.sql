CREATE DATABASE IF NOT EXISTS bd_mensajes;

USE bd_mensajes;

CREATE TABLE IF NOT EXISTS mensaje (
    id INT PRIMARY KEY AUTO_INCREMENT,
    mensaje TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO mensaje (mensaje) VALUES 
('Busco mina que sea bien barato sacarla a pasear, mi cel es 123456 y 321654'),
('Hola, me llamo Ana y quiero conocer máquinas, mi cel es 254879');