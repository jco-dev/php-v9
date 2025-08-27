create table tareas(
	id int not null auto_increment,
	titulo text not null,
	color varchar(7) not null default '#000000',
	completado boolean not null default false,
	primary key(id)
);


insert into tareas (titulo, color, completado) values ('Aprender PHP', '#0000FF', 1),
 ('Aprender VUE', '#00FF00', 0),
 ('Aprender LARAVEL', '#FF0000', 0);