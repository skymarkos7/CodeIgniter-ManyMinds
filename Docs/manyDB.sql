-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.11.2-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para many_minds
CREATE DATABASE IF NOT EXISTS `many_minds` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `many_minds`;

-- Copiando estrutura para tabela many_minds.colaborador
CREATE TABLE IF NOT EXISTS `colaborador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `level_acess` varchar(20) DEFAULT NULL,
  `usuario_fornecedor` varchar(20) DEFAULT NULL,
  `ativo_inativo` varchar(20) DEFAULT NULL,
  `nome_colaborador` varchar(50) DEFAULT NULL,
  `data_cadastro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Copiando dados para a tabela many_minds.colaborador: ~7 rows (aproximadamente)
INSERT INTO `colaborador` (`id`, `user`, `pass`, `level_acess`, `usuario_fornecedor`, `ativo_inativo`, `nome_colaborador`, `data_cadastro`, `cidade`, `estado`, `cep`, `rua`) VALUES
	(2, NULL, NULL, NULL, 'fornecedor', 'inativo', 'coca-cola', '10/02/2023', 'recife', 'CE', '55668422', 'tereaz manira '),
	(5, NULL, NULL, NULL, 'fornecedor', 'ativo', 'P&G', '15/01/2020', 'são paulo', 'SP', '11332545', 'manguezal craibas'),
	(6, 'marcos@teste.com', 'cm9vdA==', 'Administrador', 'usuario', 'ativo', 'marcos homologacao', '01/01/2000', 'são miguel', 'AL', '57669554', 'bom jesus dos milagres'),
	(33, 'marcosrealbmata@gmail.com', 'MzIx', 'Administrador', 'usuario', NULL, 'marcos lourenço', '2023-03-01', 'boca da mata', 'Alagoas', '57680000', 'alecanar'),
	(34, 'master@gmail.com', 'bWFzdGVy', 'Administrador', 'usuario', NULL, 'zeca', '2022-02-01', 'bm', 'CE', '55546288', 'santa terezinha'),
	(35, 'comum@gmail.com', 'Y29tdW0=', 'Nível Comum', 'usuario', NULL, 'zezinho', '2022-02-01', 'bm', 'SP', '66321555', 'praça da vitoria'),
	(52, NULL, NULL, NULL, 'fornecedor', 'ativo', 'marcos lourenço', '20/20/2020', 'boca da mata', 'Alagoas', '57680000', 'manoel cavalcante');

-- Copiando estrutura para tabela many_minds.logs
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `json` longtext NOT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `tentativas` int(11) DEFAULT NULL,
  `os` varchar(50) DEFAULT NULL,
  `data` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Copiando dados para a tabela many_minds.logs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela many_minds.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fornecedor_produto` varchar(50) DEFAULT NULL,
  `observacao` longtext DEFAULT NULL,
  `ativo_finalizado` varchar(20) DEFAULT NULL,
  `quantidade` varchar(5) DEFAULT NULL,
  `preco_unitario` varchar(5) DEFAULT NULL,
  `produto` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Copiando dados para a tabela many_minds.pedidos: ~5 rows (aproximadamente)
INSERT INTO `pedidos` (`id`, `fornecedor_produto`, `observacao`, `ativo_finalizado`, `quantidade`, `preco_unitario`, `produto`) VALUES
	(1, 'P&G', 'fio dental', 'ativo', '1', '5,60', 'fio dental 5m'),
	(2, 'rolex', 'vendedor de relogios', 'ativo', '2', '10000', 'relógio'),
	(3, 'jhonson&jhnson', 'mandar tamanho grande', 'finalizado', '200', '22,30', 'fralda'),
	(4, 'jhonson&jhnson', 'mandar tamanho pequeno', 'ativo', '60', '18,90', 'fralda'),
	(5, 'jhonson&jhnson', 'mandar sortido', 'ativo', '2', '22,30', 'fralda'),
	(6, 'logitec', 'alta qualidade', 'ativo', '5', '180', 'mouse');

-- Copiando estrutura para tabela many_minds.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(50) DEFAULT NULL,
  `fornecedor_produto` varchar(50) DEFAULT NULL,
  `ativo_inativo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Copiando dados para a tabela many_minds.produtos: ~5 rows (aproximadamente)
INSERT INTO `produtos` (`id`, `nome_produto`, `fornecedor_produto`, `ativo_inativo`) VALUES
	(1, 'escova de dentes', 'P&G', 'inativo'),
	(2, 'fio dental', 'P&G', 'inativo'),
	(3, 'fanta 2 L', 'coca-cola', 'ativo'),
	(4, 'pepsi ks', 'pepsi', 'ativo'),
	(5, 'açucar ', 'caétes', 'ativo');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
