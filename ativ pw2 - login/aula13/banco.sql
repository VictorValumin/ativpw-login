create database banco;
use banco;

create table perfil
(
	username varchar (100) primary key,
	email varchar (100),
	senha char (20)
);

select * from perfil;	