/*Primeira tabela*/
create database mydb
default character set utf8
default collate utf8_general_ci;

use mydb;

create table tbl_jogador(
id integer auto_increment,
email varchar(45) unique not null,
senha varchar(15) not null;

primary key


/* Descrevendo a tabela*/
desc tbl_usuario;
desc tbl_jogador;


/*Inserindo na tabela*/
insert into tbl_usuario (email, senha) values ('Riquinho@dolar.com', 'money$');
/*Inserindo na tabela*/
insert into mydb.tbl_jogador ( jogador, idade, altura, origem) values ( 'Maurinho do facão', '47', '152', 'Aventureiro');


/*Selecionando a tabela pessoas*/
SELECT * FROM  tbl_jogador;
/* ou */
select * from mydb.tbl_jogador;	

/* Alterando informação na tabela*/
update tbl_usuario set email = 'Pateta@patetinha.com' where id ='1';

UPDATE `mydb`.`tbl_jogador` SET `senha` = '123' WHERE (`id` = '4');

DELETE FROM tbl_usuario WHERE id = 1 ;
DELETE FROM `mydb`.`tbl_usuario` WHERE (`id` = '1');


/*tabela para a ficha */

create table tbl_jogador(
id integer primary key auto_increment,
jogador varchar(45) not null,
idade integer(99) not null,
altura decimal(3,2) not null,
origem varchar(45) not null,
id_pessoas integer not null,
foreign key (id_pessoas) references tbl_usuario(id)

) default charset = utf8;


ALTER TABLE `mydb`.`tbl_jogador` 
ADD COLUMN `email` VARCHAR(45) NOT NULL AFTER `id`,
ADD COLUMN `senha` VARCHAR(45) NOT NULL AFTER `email`;
;


