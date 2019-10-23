#modificar
update trainers
set name = "brock", level = 5
where id = 3;

update pokemons
set trainer_id = 4
where id = 15
or id = 17
or id = 19;

update pokemons
set triner_id = 5
where