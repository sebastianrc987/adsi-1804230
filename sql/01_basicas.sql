#mostrar version de MySql
SELECT version();

#mostrar bases de datos
SHOW databases;

#crear una base de datos
CREATE database adsi1804230;

#conectar a una base de datos
CONNECT mysql;

#usar una base de datos
USE adsi1804230;

#mostrar las tablas de una base de datos
SHOW tables;

#crear tabla
CREATE table pokemons(
    id INT AUTO_INCREMENT,
    name VARCHAR(32) NOT NULL,
    type VARCHAR(32) NOT NULL,
    strength INT NOT NULL,
    stamina INT NOT NULL,
    speed INT NOT NULL,
    accuracy INT NOT NULL,
    PRIMARY KEY(id));

#mostar  o describir la tabla DESCRIBE + (nombre de la tabla)
DESCRIBE pokemons;

#insertar contenido o registro a una tabla
INSERT INTO pokemons VALUES (
	DEFAULT, 'rattata', 'normal', 810, 60, 65, 22 
);


#cr copia de suguridad
mysqldump -u root -p adsi1804230 > C:\Users\AdmSena\Desktop\sebastian\adsi-1804230\sql\backup.sql

#recuperar copia de seguridad
mysql -u root -p adsi1804230 < C:\Users\AdmSena\Desktop\sebastian\adsi-1804230\sql\backup.sql




