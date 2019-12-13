-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Dez-2019 às 16:20
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escolinha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `idaluno` int(11) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `responsavel` varchar(45) NOT NULL,
  `dataNasc` date NOT NULL,
  `obsMedica` varchar(255) DEFAULT NULL,
  `idturma` int(11) NOT NULL,
  `poiscao` varchar(45) NOT NULL,
  `autorizaMedica` varchar(45) NOT NULL,
  `dataInscricao` date NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idaluno`, `nome`, `endereco`, `telefone`, `responsavel`, `dataNasc`, `obsMedica`, `idturma`, `poiscao`, `autorizaMedica`, `dataInscricao`, `status`) VALUES
(1, 'Maria Alice', 'Rua nova 3250, condominio tupinamba casa 06', '98989230432', 'Sandra Maria de Sousa Oliveira', '1995-03-22', ' Nenhuma', 1, 'Volante', 'Sim', '2019-12-10', 'Inativo'),
(10, 'Maria Alice', 'Rua nova 3250, condominio tupinamba casa 06', '98989230432', 'Sandra Maria de Sousa Oliveira', '1995-03-22', ' Nenhuma', 1, 'Volante', 'Sim', '2019-12-10', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instrutor`
--

CREATE TABLE `instrutor` (
  `idinstrutor` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `instrutor`
--

INSERT INTO `instrutor` (`idinstrutor`, `nome`) VALUES
(1, 'Thalles dos Anjos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

CREATE TABLE `itens` (
  `iditens` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `valor` double NOT NULL,
  `quantidade` varchar(45) NOT NULL,
  `tamanho` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamento`
--

CREATE TABLE `pagamento` (
  `idpagamento` int(11) NOT NULL,
  `aluno_idaluno` int(11) NOT NULL,
  `vencimento` varchar(45) NOT NULL,
  `dataPagamento` date NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `idturma` int(11) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `idinstrutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`idturma`, `categoria`, `idinstrutor`) VALUES
(1, 'Sub 6', 1),
(2, 'Sub 17', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `idvendas` int(11) NOT NULL,
  `quantidade` varchar(45) NOT NULL,
  `valor` double NOT NULL,
  `data` date NOT NULL,
  `iditens` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idaluno`),
  ADD KEY `idturma` (`idturma`);

--
-- Índices para tabela `instrutor`
--
ALTER TABLE `instrutor`
  ADD PRIMARY KEY (`idinstrutor`);

--
-- Índices para tabela `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`iditens`);

--
-- Índices para tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD PRIMARY KEY (`idpagamento`),
  ADD KEY `aluno_idaluno` (`aluno_idaluno`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idturma`),
  ADD KEY `idinstrutor` (`idinstrutor`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`idvendas`),
  ADD KEY `iditens` (`iditens`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idaluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `instrutor`
--
ALTER TABLE `instrutor`
  MODIFY `idinstrutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `itens`
--
ALTER TABLE `itens`
  MODIFY `iditens` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `idturma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `idvendas` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_1` FOREIGN KEY (`idturma`) REFERENCES `turma` (`idturma`);

--
-- Limitadores para a tabela `pagamento`
--
ALTER TABLE `pagamento`
  ADD CONSTRAINT `pagamento_ibfk_1` FOREIGN KEY (`aluno_idaluno`) REFERENCES `aluno` (`idaluno`);

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `turma_ibfk_1` FOREIGN KEY (`idinstrutor`) REFERENCES `instrutor` (`idinstrutor`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`iditens`) REFERENCES `itens` (`iditens`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



/*
-- -----------------------------------------------------
-- Schema escolinha
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema escolinha
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS `escolinha` DEFAULT CHARACTER SET utf8 ;
USE `escolinha` ;

-- -----------------------------------------------------
-- Table `escolinha`.`instrutor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `escolinha`.`instrutor` (
  `idinstrutor` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idinstrutor`));

-- -----------------------------------------------------
-- Table `escolinha`.`turma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `escolinha`.`turma` (
  `idturma` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(45) NOT NULL,
  `turno` VARCHAR(45) NOT NULL,
  `quantAlunos` INT NOT NULL,
  `idinstrutor` INT NOT NULL,
  PRIMARY KEY (`idturma`),
  FOREIGN KEY (`idinstrutor`) REFERENCES `escolinha`.`instrutor` (`idinstrutor`)
);


-- -----------------------------------------------------
-- Table `escolinha`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `escolinha`.`aluno` (
  `idaluno` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(70) NOT NULL,
  `endereco` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `responsavel` VARCHAR(45) NOT NULL,
  `dataNasc` DATE NOT NULL,
  `obsMedica` VARCHAR(255) NULL,
  `idturma` INT NOT NULL,
  `poiscao` VARCHAR(45) NOT NULL,
  `autorizaMedica` VARCHAR(45) NOT NULL,
  `dataInscricao` DATE NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idaluno`),
    FOREIGN KEY (`idturma`)
    REFERENCES `escolinha`.`turma` (`idturma`));


-- -----------------------------------------------------
-- Table `escolinha`.`itens`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `escolinha`.`itens` (
  `iditens` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `valor` DOUBLE NOT NULL,
  `quantidade` VARCHAR(45) NOT NULL,
  `tamanho` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iditens`));

-- -----------------------------------------------------
-- Table `escolinha`.`vendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `escolinha`.`vendas` (
  `idvendas` INT NOT NULL AUTO_INCREMENT,
  `quantidade` VARCHAR(45) NOT NULL,
  `valor` DOUBLE NOT NULL,
  `data` DATE NOT NULL,
  `iditens` INT NOT NULL,
  PRIMARY KEY (`idvendas`),
  FOREIGN KEY (`iditens`) REFERENCES `escolinha`.`itens` (`iditens`));

ultimate-triode-261402:us-central1:escolinha
-- -----------------------------------------------------
-- Table `escolinha`.`pagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `escolinha`.`pagamento` (
  `idpagamento` INT NOT NULL,
  `aluno_idaluno` INT NOT NULL,
  `vencimento` VARCHAR(45) NOT NULL,
  `dataPagamento` DATE NOT NULL,
  `valor` DOUBLE NOT NULL,
  PRIMARY KEY (`idpagamento`),
  FOREIGN KEY (`aluno_idaluno`) REFERENCES `escolinha`.`aluno` (`idaluno`));*/



