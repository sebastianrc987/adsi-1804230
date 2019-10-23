
#insertar de forma corta (no se especifican los nombre de las columnas)
INSERT INTO trainers VALUES(default, "ash ketchup",7,"paleta");
INSERT INTO trainers VALUES(default, "misty",4,"estrella");
INSERT INTO trainers VALUES(default, "brok",6,"tierra");


#insertar de forma larga (se especifican los nombres de las columnas)
INSERT INTO trainers (id, name, level, gym) VALUES (
DEFAULT, "serena", 4, "diamante");

INSERT INTO trainers (id, name, level, gym) VALUES (
DEFAULT, "oak", 9, "escuela");


#tabla de tipos
create table types (
	id int auto_increment,
	name varchar(32) not null,
	primary key(id));