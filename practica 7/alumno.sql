CREATE DATABASE base2;
USE base2;
CREATE TABLE alumnos (
  codigo INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50),
  codigocurso INT,
  mail VARCHAR(50)
);
