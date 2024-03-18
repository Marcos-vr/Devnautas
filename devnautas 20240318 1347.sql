-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema devnautas
--

CREATE DATABASE IF NOT EXISTS devnautas;
USE devnautas;

--
-- Definition of table `adm`
--

DROP TABLE IF EXISTS `adm`;
CREATE TABLE `adm` (
  `idadm` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(75) NOT NULL DEFAULT '',
  `senha` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`idadm`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adm`
--

/*!40000 ALTER TABLE `adm` DISABLE KEYS */;
INSERT INTO `adm` (`idadm`,`nome`,`email`,`senha`) VALUES 
 (1,'Programador','programador@gmail.com','3f8f4nhu5');
/*!40000 ALTER TABLE `adm` ENABLE KEYS */;


--
-- Definition of table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idcliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `idpagamento` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`idcliente`,`idpagamento`),
  KEY `cliente_pagamento` (`idpagamento`),
  CONSTRAINT `cliente_pagamento` FOREIGN KEY (`idpagamento`) REFERENCES `pagamento` (`idpagamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cliente`
--

/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;


--
-- Definition of table `membros`
--

DROP TABLE IF EXISTS `membros`;
CREATE TABLE `membros` (
  `idMembros` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `idproprietario` int(10) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`idMembros`,`idproprietario`),
  KEY `membros_proprietario` (`idproprietario`),
  CONSTRAINT `membros_proprietario` FOREIGN KEY (`idproprietario`) REFERENCES `proprietario` (`idproprietario`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membros`
--

/*!40000 ALTER TABLE `membros` DISABLE KEYS */;
INSERT INTO `membros` (`idMembros`,`nome`,`idproprietario`) VALUES 
 (1,'Pedro Henrique',1),
 (2,'Letícia Velozo',1),
 (3,'Eagles Barbosa',1),
 (4,'Laís Luciano',1),
 (5,'Daniele de Oliveira ',1),
 (6,'Késia Vitória',2),
 (7,'Laila Vitória',2),
 (8,'Geovana Rodrigues',2),
 (9,'Talita Freitas ',2),
 (10,'Guilherme Eduardo',3),
 (11,'Victor Cauã',3),
 (12,'Fênix Ousalo',3),
 (13,'Elion de Oliveira',3),
 (15,'Cauan pablo',3),
 (17,'Lucas Alves',4),
 (18,'Iury Ferreira',4),
 (19,'Ana Lage',4),
 (21,'Thiago Nogueira',4);
/*!40000 ALTER TABLE `membros` ENABLE KEYS */;


--
-- Definition of table `pagamento`
--

DROP TABLE IF EXISTS `pagamento`;
CREATE TABLE `pagamento` (
  `idpagamento` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dinheiro` varchar(45) NOT NULL DEFAULT '',
  `cartao` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`idpagamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pagamento`
--

/*!40000 ALTER TABLE `pagamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagamento` ENABLE KEYS */;


--
-- Definition of table `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
  `idproduto` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idproprietario` int(10) unsigned NOT NULL,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `foto` blob DEFAULT NULL,
  `detalhes` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`idproduto`,`idproprietario`),
  KEY `produto_proprietario` (`idproprietario`),
  CONSTRAINT `produto_proprietario` FOREIGN KEY (`idproprietario`) REFERENCES `proprietario` (`idproprietario`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produto`
--

/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` (`idproduto`,`idproprietario`,`nome`,`foto`,`detalhes`) VALUES 
 (12,1,'Marquinhos',NULL,'Volante, arco de suporte, inspiração, placa'),
 (13,2,'Red sena - comprido ',NULL,'Cinto de 5 bichos, obrigado na fórmula sae, controles também exigidos, aerofólio'),
 (14,3,'estilo fórmula 1',NULL,'Luzes led  verdes, banco, área do piloto e volante'),
 (15,4,'Scuderia',NULL,'Ele acompanha um v8 dgger viver, suspensão a ar, acolchoado de couro, disco de platina, feito de fibra de carbono, gaiola dentro para redução de peso'),
 (16,5,'Fittipaldi',NULL,'Fibra de carbono no chassi, motor v16, banco de couro puro, nitro, dois tubos de nós, led, body kit, aerofólio removíve');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;


--
-- Definition of table `proprietario`
--

DROP TABLE IF EXISTS `proprietario`;
CREATE TABLE `proprietario` (
  `idproprietario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `foto` blob DEFAULT NULL,
  PRIMARY KEY (`idproprietario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proprietario`
--

/*!40000 ALTER TABLE `proprietario` DISABLE KEYS */;
INSERT INTO `proprietario` (`idproprietario`,`nome`,`foto`) VALUES 
 (1,'Eagle Racing',NULL),
 (2,'Red sena ',NULL),
 (3,'FBM- Fábrica Brasileira de motores',NULL),
 (4,'Scuderia',NULL),
 (5,'Fittipaldi',NULL);
/*!40000 ALTER TABLE `proprietario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
