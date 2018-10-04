
show DATABASES;
create database db_estadocivil;
use db_estadocivil;

create table if not exists estados_civiles(
	id_estado double(2,0) not null auto_increment comment 'Clave Primaria',
    nombre_estado varchar(15) not null default '' comment 'Estado Civl',
     primary key(`id_estado`)
)engine=InnoDB default charset=utf8mb4 comment = 'Tabla de estado civiles';

INSERT INTO estados_civiles (nombre_estado) VALUES ('SOLTERO');
INSERT INTO estados_civiles (nombre_estado) VALUES ('CASADO');
INSERT INTO estados_civiles (nombre_estado) VALUES ('DIVORCIADO');
INSERT INTO estados_civiles (nombre_estado) VALUES ('VIUDO');

select * from estados_civiles;