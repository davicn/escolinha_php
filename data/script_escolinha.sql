
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
  FOREIGN KEY (`aluno_idaluno`) REFERENCES `escolinha`.`aluno` (`idaluno`));



