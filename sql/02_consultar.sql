#consultar todos los registros
select * from pokemons;

#seleciionar solo un campo de la tabla
select name from pokemons;
select name, stamina from pokemons;

#consultar valores distintos o sin repetir
select distinct type from pokemons;

#consultar registros con un registro especifico
select * 
from pokemons
where type = 'agua';

select * 
from pokemons 
where strength < 500;

select * 
from pokemons 
where strength >= 1000;

select * 
from pokemons 
where type <> 'agua';

select *
from pokemons
where type = 'agua' and speed > 1000;

select *
from pokemons
where type = 'agua' and speed > 80;

select *
from pokemons
where stamina between 200 and 300;

#ordenar ascendentemente
select *
from pokemons
order by strength asc; 		#en orden ascendente
order by strength desc; 	#en orden descendente

select *
from pokemons
where speed > 100
order by speed desc;

#limites 
select *
from pokemons
limit 5 
offset 9;

#mostar resultados con varios valores
select *
from pokemons
where type
in ('fuego', 'electrico');

#mostrar resultados dentro de un rango (BETWEEN)
select *
from pokemons
WHERE speed
BETWEEN 90
AND 100;



#crear tabla de entrnadores
CREATE  TABLE trainers (
	id int auto_increment,
	name varchar(32) not null,
	level int not null,
	gym varchar(32) not null,
	primary key(id)
);

#datos de entrenadores
INSERT INTO trainers VALUES(default, "ash ketchup",7,"paleta");
INSERT INTO trainers VALUES(default, "misty",4,"estrella");
INSERT INTO trainers VALUES(default, "brok",6,"tierra");


#ALTERAR O AGREGAR UNA TABLA A POKEMONS
ALTER TABLE pokemons ADD COLUMN trainer_id int NOT NULL AFTER accuracy;

ALTER TABLE pokemons
DROP COLUMN trainer_id;

#RELACIONAR ID DE POKEMON CON FORANEA DE ENTRENADOR

UPDATE pokemons 
SET trainer_id = 1
WHERE id= 1 OR ID = 2 OR ID = 3 OR ID = 4;

UPDATE pokemons 
SET trainer_id = 2
WHERE id= 5 OR ID = 7 OR ID = 9 OR ID = 11 OR ID = 13 OR ID = 15 OR ID = 17 OR ID = 19;


UPDATE pokemons 
SET trainer_id = 3
WHERE id= 6 OR ID = 8 OR ID = 10 OR ID = 12 OR ID = 14 OR ID = 16 OR ID = 18 OR ID = 20;



#inner join
#name_trainer | name_gym | name_pokemon
select trainers.name as name_trainer, gym.name as name_gym, pokemons.name as name_pokemon
from trainers
inner join gyms
on trainers,gym_id = gyms.id
inner join pokemons
on pokemons.trainers_id = trainers.id
group by trainers.name;

#right join
select trainers.name as name_trainer, gym.name as name_gym, pokemons.name as name_pokemon
from trainers
right join gyms
on trainers,gym_id = gyms.id and trainers.id = 1
right join pokemons
on pokemons.trainers_id = trainers.id

#left join
select trainers.name as name_trainer, gym.name as name_gym, pokemons.name as name_pokemon
from trainers
left join gyms
on trainers,gym_id = gyms.id
left join pokemons
on pokemons.trainers_id = trainers.id

#join
select trainers.name as name_trainer, gym.name as name_gym, pokemons.name as name_pokemon
from trainers
join gyms
on trainers,gym_id = gyms.id and trainers.id = 1
join pokemons
on pokemons.trainers_id = trainers.id
order by trainers.name;


#union(unir consultas)
select name from trainers
union
select name from gyms
union
select name from pokemons; 