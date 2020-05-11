create database AdmTI;
use AdmTI;
create table tbl_usuarios(
	id int not null auto_increment,
    nome varchar(220) not null,
    email varchar(220) not null,
    usuario varchar(220) not null,
    senha varchar(220) not null,
    primary key(id));
insert into tbl_usuarios values(null,'miqueias','miq.severo@gmail.com','miqueias.silva','$2y$10$aWOOW14xcH4hQvfDSCXrI.pchCAjaZALRV6Ku1WSjY0V.aauZakaa');
    