-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 18/03/2019 às 17:16
-- Versão do servidor: 8.0.11
-- Versão do PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `conduapp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbcadusuarios`
--

CREATE TABLE `tbcadusuarios` (
  `idcaduser` int(11) NOT NULL,
  `nomecaduser` varchar(80) DEFAULT NULL,
  `emailcaduser` varchar(100) DEFAULT NULL,
  `senhacaduser` varchar(35) DEFAULT NULL,
  `statuscaduser` char(1) DEFAULT NULL,
  `situcaocaruser` char(1) DEFAULT NULL,
  `tipocaduser` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbmotorista`
--

CREATE TABLE `tbmotorista` (
  `idmotorista` int(11) NOT NULL,
  `nomemot` varchar(80) DEFAULT NULL,
  `cpfmot` varchar(15) DEFAULT NULL,
  `statusmot` char(1) DEFAULT NULL,
  `datacadmot` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbusers`
--

CREATE TABLE `tbusers` (
  `iduser` int(11) NOT NULL,
  `emailuser` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `nomuser` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `adminuser` tinyint(1) DEFAULT NULL,
  `passworduser` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `tokenuser` varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `logadouser` char(2) DEFAULT NULL,
  `statuslog` char(1) DEFAULT 'D',
  `datauser` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tbusers`
--

INSERT INTO `tbusers` (`iduser`, `emailuser`, `nomuser`, `adminuser`, `passworduser`, `tokenuser`, `logadouser`, `statuslog`, `datauser`) VALUES
(1, 'admin@empresa123.com.br', 'toni', 1, '12345678', '52ff8f3249c38b1fe5271dbe7038fa5f', 'M2', 'D', '2019-03-18 13:49:19'),
(2, 'pass@pass.com', 'pass', 2, '12345678', 'c29130a808373a37ea6a7219a6eda779', 'P1', 'A', '2019-03-18 13:18:09');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `tbcadusuarios`
--
ALTER TABLE `tbcadusuarios`
  ADD PRIMARY KEY (`idcaduser`);

--
-- Índices de tabela `tbmotorista`
--
ALTER TABLE `tbmotorista`
  ADD PRIMARY KEY (`idmotorista`);

--
-- Índices de tabela `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `tbmotorista`
--
ALTER TABLE `tbmotorista`
  MODIFY `idmotorista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
