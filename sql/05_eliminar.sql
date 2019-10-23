#eliminar
delete from trainers
where id = 5;

#eliminar todos los registros de una tabla
delete * from triners;

#vaciar una tabla
truncate triners;



#transacciones;
begin;

delete from trainers
where id > 2;

#los cambios don permanentes
#commit;

#rebuelve los cambios
rollback;

#alias
select t.name AS name_triner,
	   t.name AS name_pokemon,
	   t.name AS type_pokemon
from triners AS t, pokemon as p
where t.id = p.triner_id;

select t.name as name_triner,
	p.name as name_pokemon,
	p.type as type_pokemon
from triners as t, pokemons as p
where t.id = p.trainer_id
order by t.name asc;

select t.name as name_triner,
	p.name as name_pokemon,
	p.type as type_pokemon
from triners as t, pokemons as p
where t.id = p.trainer_id
and p.type = "agua" or p.type = "fuego"
order by t.name asc;

SELECT COUNT(p.id) AS number_pokemons
from pokemons as p, trainers as t
where t.id = p.triner_id
and t.id = 1;

SELECT DISTINCT t.name as name_trainer, count(p.id) as number_pokemons
from pokemons as p, trainers as t
where t.id = p.trainer_id
group by t.name;