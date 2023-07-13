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

--
-- Estrutura da tabela `tbl_jogador`
--

CREATE TABLE `tbl_jogador` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `jogador` varchar(45) NOT NULL,
  `idade` varchar(45) NOT NULL,
  `altura` varchar(45) NOT NULL,
  `origem` varchar(45) NOT NULL,
  `for` int(20) NOT NULL,
  `int` int(20) NOT NULL,
  `pre` int(20) NOT NULL,
  `agi` int(20) NOT NULL,
  `vig` int(20) NOT NULL,
  `acrobacia` int(20) NOT NULL,
  `adestramento` int(20) NOT NULL,
  `artes` int(20) NOT NULL,
  `atletismo` int(20) NOT NULL,
  `atualidades` int(20) NOT NULL,
  `ciencias` int(20) NOT NULL,
  `crime` int(20) NOT NULL,
  `diplomacia` int(20) NOT NULL,
  `enganacao` int(20) DEFAULT NULL,
  `fortitude` int(20) DEFAULT NULL,
  `furtividade` int(20) DEFAULT NULL,
  `iniciativa` int(20) DEFAULT NULL,
  `intimidacao` int(20) DEFAULT NULL,
  `intuicao` int(20) DEFAULT NULL,
  `investigacao` int(20) DEFAULT NULL,
  `luta` int(20) DEFAULT NULL,
  `medicina` int(20) DEFAULT NULL,
  `ocultismo` int(20) DEFAULT NULL,
  `percepcao` int(20) DEFAULT NULL,
  `pilotagem` int(20) DEFAULT NULL,
  `pontaria` int(20) DEFAULT NULL,
  `qualProfissao` varchar(20) DEFAULT NULL,
  `profissao` int(20) DEFAULT NULL,
  `reflexos` int(20) DEFAULT NULL,
  `religiao` int(20) DEFAULT NULL,
  `sobrevivencia` int(20) DEFAULT NULL,
  `tatica` int(20) DEFAULT NULL,
  `tecnologia` int(20) DEFAULT NULL,
  `vontade` int(20) DEFAULT NULL,
  `vidaMax` int(20) NOT NULL,
  `vidaMin` int(20) NOT NULL,
  `saniMax` int(20) NOT NULL,
  `saniMin` int(20) NOT NULL,
  `esforMax` int(20) NOT NULL,
  `esforMin` int(20) NOT NULL,
  `resFisica` int(20) DEFAULT NULL,
  `resBalistica` int(20) DEFAULT NULL,
  `resSanidade` int(20) DEFAULT NULL,
  `passiva` int(20) NOT NULL,
  `esquiva` int(20) NOT NULL,
  `arma1` varchar(50) DEFAULT NULL,
  `arma2` varchar(50) DEFAULT NULL,
  `arma3` varchar(50) DEFAULT NULL,
  `arma4` varchar(50) DEFAULT NULL,
  `arma5` varchar(50) DEFAULT NULL,
  `item1` varchar(45) DEFAULT NULL,
  `item2` varchar(45) DEFAULT NULL,
  `item3` varchar(45) DEFAULT NULL,
  `item4` varchar(45) DEFAULT NULL,
  `item5` varchar(45) DEFAULT NULL,
  `item6` varchar(45) DEFAULT NULL,
  `item7` varchar(45) DEFAULT NULL,
  `item8` varchar(45) DEFAULT NULL,
  `info1` varchar(45) DEFAULT NULL,
  `info2` varchar(45) DEFAULT NULL,
  `info3` varchar(45) DEFAULT NULL,
  `info4` varchar(45) DEFAULT NULL,
  `info5` varchar(45) DEFAULT NULL,
  `info6` varchar(45) DEFAULT NULL,
  `info7` varchar(45) DEFAULT NULL,
  `info8` varchar(45) DEFAULT NULL,
  `espaco1` varchar(45) DEFAULT NULL,
  `espaco2` varchar(45) DEFAULT NULL,
  `espaco3` varchar(45) DEFAULT NULL,
  `espaco4` varchar(45) DEFAULT NULL,
  `espaco5` varchar(45) DEFAULT NULL,
  `espaco6` varchar(45) DEFAULT NULL,
  `espaco7` varchar(45) DEFAULT NULL,
  `espaco8` varchar(45) DEFAULT NULL,
  `peso1` varchar(45) DEFAULT NULL,
  `peso2` varchar(45) DEFAULT NULL,
  `peso3` varchar(45) DEFAULT NULL,
  `peso4` varchar(45) DEFAULT NULL,
  `peso5` varchar(45) DEFAULT NULL,
  `peso6` varchar(45) DEFAULT NULL,
  `peso7` varchar(45) DEFAULT NULL,
  `peso8` varchar(45) DEFAULT NULL,
  `textoCaract` varchar(1000) NOT NULL,
  `textohabi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

select * FROM  mydb.tbl_jogador;
--
-- Extraindo dados da tabela `tbl_jogador`
--

INSERT INTO `tbl_jogador` (`id`, `email`, `senha`, `jogador`, `idade`, `altura`, `origem`, `for`, `int`, `pre`, `agi`, `vig`, `acrobacia`, `adestramento`, `artes`, `atletismo`, `atualidades`, `ciencias`, `crime`, `diplomacia`, `enganacao`, `fortitude`, `furtividade`, `iniciativa`, `intimidacao`, `intuicao`, `investigacao`, `luta`, `medicina`, `ocultismo`, `percepcao`, `pilotagem`, `pontaria`, `qualProfissao`, `profissao`, `reflexos`, `religiao`, `sobrevivencia`, `tatica`, `tecnologia`, `vontade`, `vidaMax`, `vidaMin`, `saniMax`, `saniMin`, `esforMax`, `esforMin`, `resFisica`, `resBalistica`, `resSanidade`, `passiva`, `esquiva`, `arma1`, `arma2`, `arma3`, `arma4`, `arma5`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`, `item7`, `item8`, `info1`, `info2`, `info3`, `info4`, `info5`, `info6`, `info7`, `info8`, `espaco1`, `espaco2`, `espaco3`, `espaco4`, `espaco5`, `espaco6`, `espaco7`, `espaco8`, `peso1`, `peso2`, `peso3`, `peso4`, `peso5`, `peso6`, `peso7`, `peso8`, `textoCaract`, `textohabi`) VALUES
(4, 'nicolasalmeida1@yahoo.com', '1', 'Nicolas', '26', '1,72', 'Ti', 2, -20, 5, 2, 8, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 'Desempregado', 22, 23, 24, 25, 26, 27, 28, 201, 25, 12, 9, 8, 3, 1, 2, 3, 12, 20, 'Faca', 'estilingue', 'foice', 'pistola', 'basuca', '1', '2', '3', '4', '5', '6', '7', '8', 'aa', 'bb', 'cc', 'dd', 'ee', 'ff', 'gg', 'hh', '1', '2', '3', '4', '5.5', '6', '7', '8', '11', '22', '33', '44', '55', '66', '77', '88', '                                                                Clayde Mascavo, adora ouvir musica e estudar, fica frustrada quando não vai bem em uma prova pois gosta de ser a melhor em tudo. Cabelos pretos que sempre estão atras das orelhas e sempre se veste com roupas claras.  Mora com seu pai em Franchesco Morato, desde que nasceu, sua mãe faleceu quando era apenas um bebê, por isso ela e seu pai são muito ligados.\r\n                \r\n                \r\n                \r\n                ', '                                                                \r\n            \r\n            \r\n            \r\n            '),
(6, 'Patolino@mickey.com', '1', 'Clayde Mascavo', '18', '1,59', 'Academico', 1, 5, 1, 0, 0, 0, 0, 0, 0, 0, 5, 0, 0, 2, 0, 0, 0, 0, 0, 5, 0, 1, 1, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 26, 26, 20, 20, 4, 4, 0, 0, 0, 10, 10, 'Spray de pimenta - Spray - Curto - 1d4-1 --- 1d4+1', 'Canivete - cortante - curto - 1d4 - 1d6', 'Pistola sinalizadora - Balistico - 1d10 + 1d4 - x2', '', '', 'Bolsa de mão', 'canivete', 'Spray ', '2 Kit medicina.', '', '', '', '', '', 'presente de seu pai', 'presente de seu pai', 'cada kit 2/2 - 2/2', '', '', '', '', '2', '0.5', '1', '2', '0', '0', '0', '0', '5.0', '0.5', '0.5', '4.5', '0', '0', '0', '0', 'Clayde Mascavo, adora ouvir musica e estudar, fica frustrada quando não vai bem em uma prova pois gosta de ser a melhor em tudo. Cabelos pretos que sempre estão atras das orelhas e sempre se veste com roupas claras.  Mora com seu pai em Franchesco Morato, desde que nasceu, sua mãe faleceu quando era apenas um bebê, por isso ela e seu pai são muito ligados.', 'Uma vez por cena, quando fizer um teste usando Intelecto você pode gastar 2 PE para  receber +5 nesse teste.'),
(7, 'aline.vitoria.silva2013@gmail.com', 'aline', 'Lily', '22', '1,63', 'academico', 2, 3, 0, 1, 1, 0, 0, 0, 0, 0, 5, 0, 0, 0, 0, 0, 0, 0, 2, 5, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 2, 24, 0, 17, 0, 3, 0, 1, 0, 0, 11, 10, 'faca -  cortante - curto - 1d6 - 1d6+2', 'spray de pimenta - curto - 1d4-1 - 1d4+1', 'Machado - cortante- curto- 1d8+força - *4', '', '', 'Mochila', 'Guarda chuva', 'Agua', 'Bolacha ', 'faca ', 'celular', '', '', '', 'azul', '2/2', '4/4', '', '', '', '', '1', '0.5', '0.5', '0.5', '1', '0', '0', '0', '0.5', '0.5', '0.5', '0.5', '1', '0.5', '0', '0', '                                Nenhuma\r\n                \r\n                ', '                                Nenhuma habilidade, infelizmente :( \r\n            \r\n            ');

--
-- Índices para tabelas despejadas
--

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
