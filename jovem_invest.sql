create database jovem_invest;
use jovem_invest;
create table usuarios (
id_usuario int(8) not null auto_increment,
nome varchar(50) not null,
email varchar(30) not null,
senha varchar(20) not null,
primary key (id_usuario),
unique (id_usuario));
create table perfil_usuario (
id_perfil int(8) not null auto_increment,
id_usuario int(8) not null,
faixa_etaria varchar (15) not null,
renda varchar(80) not null,
divida varchar(80) not null,
gerenciamento varchar(80) not null,
experiencia varchar(80) not null,
risco varchar(80) not null,
conhecimento varchar(80) not null,
primary key (id_perfil),
foreign key (id_usuario) references usuarios(id_usuario),
unique (id_perfil));
