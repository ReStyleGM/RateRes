drop database projetoRateRes;

create database projetoRateRes;
use projetoRateRes;

create table login(
cod_usuario int NOT NULL AUTO_INCREMENT,
usuario varchar(20),
senha varchar(15),
PRIMARY KEY (cod_usuario)
);

create table dadosUsuario(
cod_dadosUsuario int NOT NULL AUTO_INCREMENT,
cod_usuario int NOT NULL,
nome varchar(50),
idade int(3),
genero char(1),
email varchar(50),
dataNasc date,
PRIMARY KEY (cod_dadosUsuario),
foreign key (cod_usuario) REFERENCES login(cod_usuario)
);

insert into login(usuario, senha) values ("administrador", "administrador");
insert into login(usuario, senha) values ("PudimBR", "senha");

select * from dadosUsuario;
select * from login;


insert into dadosUsuario(cod_usuario, nome, idade, genero, email, dataNasc) values (1,"O Admin",999,"M","administrador@administrador.com","0000-01-01");
insert into dadosUsuario(cod_usuario, nome, idade, genero, email, dataNasc) values (2,"Pudim",17,"M","pudim@pudim.com","2006-04-17");