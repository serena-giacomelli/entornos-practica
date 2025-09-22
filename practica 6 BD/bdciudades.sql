CREATE DATABASE Capitales;
USE Capitales;

CREATE TABLE Ciudades (
  id INT AUTO_INCREMENT PRIMARY KEY,
  ciudad VARCHAR(50),
  pais VARCHAR(50),
  habitantes DECIMAL(10,2),
  superficie DECIMAL(10,2),
  tieneMetro TINYINT(1),
  codigoPostal INT
);