create schema if not exists db default charset=latin1 collate=latin1_spanish_ci; -- utf8mb4;

set sql_safe_updates=0;

use db;


create table db.datos_personales
(
id int not null auto_increment,
nombre varchar(10) not null,
appat varchar(20) not null,
apmat varchar(20) not null,
edo_civil bit not null,
fecha_registro date not null,
fecha_nac datetime not null,
mail varchar(20) not null,
idcarrera int not null,
constraint pkid primary key(id),
constraint fkidcarrera foreign key (idcarrera) references db.carreras(idcarrera)
)engine=innodb;

drop table db.datos_personales;

create table db.carreras
(
idcarrera int not null auto_increment,
carrera varchar(10) not null,
 constraint pkidcarrera primary key(idcarrera)
)engine=innodb;

drop table db.carreras;
 select * from db.datos_personales;
 select * from db.carreras;

insert into db.carreras(carrera) values("Informatica");
insert into db.carreras(carrera) values("TICS");
insert into db.carreras(carrera) values("Sistemas Computacionales");

delete from carreras where idcarrera = 6;



