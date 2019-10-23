#modificar tabla (agregar llave foranea)
alter table pokemons
add foreign key(trainer_id)
references trainers(id);

#modificar tabla(renombrar columna)
alter table trainers
change gym gym_id int not null;

#crear tabla gym
create table gyms(
	id int auto_increment,
	name varchar(32) not null,
	primary key(id));

insert into gyms values (
DEFAULT, "ciudad paleta");

insert into gyms values (
DEFAULT, "ciudad celeste");

insert into gyms values (
DEFAULT, "ciudad fucsia");

insert into gyms values (
DEFAULT, "ciudad azulona");

insert into gyms values (
DEFAULT, "ciudad alivo");