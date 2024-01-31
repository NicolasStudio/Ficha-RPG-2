/*Primeira tabela*/
create database mydb
default character set utf8
default collate utf8_general_ci;

use mydb;

CREATE TABLE tbl_usuario(
    id INT AUTO_INCREMENT,
    email VARCHAR(45) UNIQUE NOT NULL,
    senha VARCHAR(15) NOT NULL,
    PRIMARY KEY (id)
);

RENAME TABLE tbl_jogador TO tbl_usuario;


/* Descrevendo a tabela*/
desc tbl_usuario;
desc tbl_jogador;


/*Inserindo na tabela*/
insert into tbl_usuario (email, senha) values ('nicolasalmeida1@yahoo.com', '1');
/*Inserindo na tabela*/
insert into mydb.tbl_jogador ( jogador, idade, altura, origem) values ( 'Maurinho do facão', '47', '152', 'Aventureiro');


/*Selecionando a tabela pessoas*/
SELECT * FROM  tbl_usuario;
/* ou */
select * from mydb.tbl_jogador;	

/* Alterando informação na tabela*/
update tbl_usuario set email = 'Pateta@patetinha.com' where id ='1';

UPDATE `mydb`.`tbl_jogador` SET `senha` = '123' WHERE (`id` = '4');

DELETE FROM tbl_usuario WHERE id = 1 ;
DELETE FROM `mydb`.`tbl_usuario` WHERE (`id` = '1');


/*tabela para a ficha */

ALTER TABLE `mydb`.`tbl_jogador` 
ADD COLUMN `email` VARCHAR(45) NOT NULL AFTER `id`,
ADD COLUMN `senha` VARCHAR(45) NOT NULL AFTER `email`;
;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jun-2023 às 13:37
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--
-- --------------------------------------------------------
DROP TABLE IF EXISTS `tbl_usuario`;
--
-- Estrutura da tabela `tbl_jogador`
--

CREATE TABLE `tbl_jogador` (
    `id` INT(11) NOT NULL,
    `email` VARCHAR(45) NOT NULL,
    `senha` VARCHAR(45) NOT NULL,
    `jogador` VARCHAR(45) NOT NULL,
    `idade` VARCHAR(45) NOT NULL,
    `altura` VARCHAR(45) NOT NULL,
    `origem` VARCHAR(45) NOT NULL,
    `for` INT(20) NOT NULL,
    `int` INT(20) NOT NULL,
    `pre` INT(20) NOT NULL,
    `agi` INT(20) NOT NULL,
    `vig` INT(20) NOT NULL,
    `acrobacia` INT(20) NOT NULL,
    `adestramento` INT(20) NOT NULL,
    `artes` INT(20) NOT NULL,
    `atletismo` INT(20) NOT NULL,
    `atualidades` INT(20) NOT NULL,
    `ciencias` INT(20) NOT NULL,
    `crime` INT(20) NOT NULL,
    `diplomacia` INT(20) NOT NULL,
    `enganacao` INT(20) DEFAULT NULL,
    `fortitude` INT(20) DEFAULT NULL,
    `furtividade` INT(20) DEFAULT NULL,
    `iniciativa` INT(20) DEFAULT NULL,
    `intimidacao` INT(20) DEFAULT NULL,
    `intuicao` INT(20) DEFAULT NULL,
    `investigacao` INT(20) DEFAULT NULL,
    `luta` INT(20) DEFAULT NULL,
    `medicina` INT(20) DEFAULT NULL,
    `ocultismo` INT(20) DEFAULT NULL,
    `percepcao` INT(20) DEFAULT NULL,
    `pilotagem` INT(20) DEFAULT NULL,
    `pontaria` INT(20) DEFAULT NULL,
    `qualProfissao` VARCHAR(20) DEFAULT NULL,
    `profissao` INT(20) DEFAULT NULL,
    `reflexos` INT(20) DEFAULT NULL,
    `religiao` INT(20) DEFAULT NULL,
    `sobrevivencia` INT(20) DEFAULT NULL,
    `tatica` INT(20) DEFAULT NULL,
    `tecnologia` INT(20) DEFAULT NULL,
    `vontade` INT(20) DEFAULT NULL,
    `vidaMax` INT(20) NOT NULL,
    `vidaMin` INT(20) NOT NULL,
    `saniMax` INT(20) NOT NULL,
    `saniMin` INT(20) NOT NULL,
    `esforMax` INT(20) NOT NULL,
    `esforMin` INT(20) NOT NULL,
    `resFisica` INT(20) DEFAULT NULL,
    `resBalistica` INT(20) DEFAULT NULL,
    `resSanidade` INT(20) DEFAULT NULL,
    `passiva` INT(20) NOT NULL,
    `esquiva` INT(20) NOT NULL,
    `arma1` VARCHAR(50) DEFAULT NULL,
    `arma2` VARCHAR(50) DEFAULT NULL,
    `arma3` VARCHAR(50) DEFAULT NULL,
    `arma4` VARCHAR(50) DEFAULT NULL,
    `arma5` VARCHAR(50) DEFAULT NULL,
    `item1` VARCHAR(45) DEFAULT NULL,
    `item2` VARCHAR(45) DEFAULT NULL,
    `item3` VARCHAR(45) DEFAULT NULL,
    `item4` VARCHAR(45) DEFAULT NULL,
    `item5` VARCHAR(45) DEFAULT NULL,
    `item6` VARCHAR(45) DEFAULT NULL,
    `item7` VARCHAR(45) DEFAULT NULL,
    `item8` VARCHAR(45) DEFAULT NULL,
    `info1` VARCHAR(45) DEFAULT NULL,
    `info2` VARCHAR(45) DEFAULT NULL,
    `info3` VARCHAR(45) DEFAULT NULL,
    `info4` VARCHAR(45) DEFAULT NULL,
    `info5` VARCHAR(45) DEFAULT NULL,
    `info6` VARCHAR(45) DEFAULT NULL,
    `info7` VARCHAR(45) DEFAULT NULL,
    `info8` VARCHAR(45) DEFAULT NULL,
    `espaco1` VARCHAR(45) DEFAULT NULL,
    `espaco2` VARCHAR(45) DEFAULT NULL,
    `espaco3` VARCHAR(45) DEFAULT NULL,
    `espaco4` VARCHAR(45) DEFAULT NULL,
    `espaco5` VARCHAR(45) DEFAULT NULL,
    `espaco6` VARCHAR(45) DEFAULT NULL,
    `espaco7` VARCHAR(45) DEFAULT NULL,
    `espaco8` VARCHAR(45) DEFAULT NULL,
    `peso1` VARCHAR(45) DEFAULT NULL,
    `peso2` VARCHAR(45) DEFAULT NULL,
    `peso3` VARCHAR(45) DEFAULT NULL,
    `peso4` VARCHAR(45) DEFAULT NULL,
    `peso5` VARCHAR(45) DEFAULT NULL,
    `peso6` VARCHAR(45) DEFAULT NULL,
    `peso7` VARCHAR(45) DEFAULT NULL,
    `peso8` VARCHAR(45) DEFAULT NULL,
    `textoCaract` VARCHAR(1000) NOT NULL,
    `textohabi` VARCHAR(1000) NOT NULL
)  ENGINE=INNODB DEFAULT CHARSET=UTF8;

select * FROM  mydb.tbl_jogador;


select * FROM  mydb.tbl_jogador;


--
-- Extraindo dados da tabela `tbl_jogador`
--

INSERT INTO `tbl_jogador` (`id`, `email`, `senha`, `jogador`, `idade`, `altura`, `origem`, `for`, `int`, `pre`, `agi`, `vig`, `acrobacia`, `adestramento`, `artes`, `atletismo`, `atualidades`, `ciencias`, `crime`, `diplomacia`, `enganacao`, `fortitude`, `furtividade`, `iniciativa`, `intimidacao`, `intuicao`, `investigacao`, `luta`, `medicina`, `ocultismo`, `percepcao`, `pilotagem`, `pontaria`, `qualProfissao`, `profissao`, `reflexos`, `religiao`, `sobrevivencia`, `tatica`, `tecnologia`, `vontade`, `vidaMax`, `vidaMin`, `saniMax`, `saniMin`, `esforMax`, `esforMin`, `resFisica`, `resBalistica`, `resSanidade`, `passiva`, `esquiva`, `arma1`, `arma2`, `arma3`, `arma4`, `arma5`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `info1`, `info2`, `info3`, `info4`, `info5`, `info6`, `info7`, `info8`, `espaco1`, `espaco2`, `espaco3`, `espaco4`, `espaco5`, `espaco6`, `espaco7`, `espaco8`, `peso1`, `peso2`, `peso3`, `peso4`, `peso5`, `peso6`, `peso7`, `peso8`, `textoCaract`, `textohabi`) VALUES
(1, 'nicolasalmeida1@yahoo.com', '1', 'Nicolas', '26', '1,72', 'Ti', 2, -20, 5, 2, 8, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 'Desempregado', 22, 23, 24, 25, 26, 27, 28, 201, 25, 12, 9, 8, 3, 1, 2, 3, 12, 20, 'Faca', 'estilingue', 'foice', 'pistola', 'basuca', '1', '2', '3', '4', '5', '6', '7', '8', 'aa', 'bb', 'cc', 'dd', 'ee', 'ff', 'gg', 'hh', '1', '2', '3', '4', '5.5', '6', '7', '8', '11', '22', '33', '44', '55', '66', '77', '88', '                                                                Clayde Mascavo, adora ouvir musica e estudar, fica frustrada quando não vai bem em uma prova pois gosta de ser a melhor em tudo. Cabelos pretos que sempre estão atras das orelhas e sempre se veste com roupas claras.  Mora com seu pai em Franchesco Morato, desde que nasceu, sua mãe faleceu quando era apenas um bebê, por isso ela e seu pai são muito ligados.\r\n                \r\n                \r\n                \r\n                ', '                                                                \r\n            \r\n            \r\n            \r\n            ');

--
-- Índices para tabelas despejadas
--
DELETE FROM tbl_jogador WHERE id = 0;

--
-- Índices para tabela `tbl_jogador`
--
ALTER TABLE `tbl_jogador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_jogador`
--
ALTER TABLE `tbl_jogador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


use mydb;
