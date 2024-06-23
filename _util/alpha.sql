-- Copiando estrutura do banco de dados para alpha
CREATE DATABASE IF NOT EXISTS `alpha` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `alpha`;

-- Copiando estrutura para tabela alpha.ap_categoria
CREATE TABLE IF NOT EXISTS `ap_categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(300) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Copiando dados para a tabela alpha.ap_categoria: ~0 rows (aproximadamente)
DELETE FROM `ap_categoria`;
/*!40000 ALTER TABLE `ap_categoria` DISABLE KEYS */;
INSERT INTO `ap_categoria` (`id_categoria`, `nome_categoria`) VALUES
	(1, 'Categoria 1'),
	(2, 'Categoria 2'),
	(3, 'Categoria 3'),
	(4, 'Categoria 4');
/*!40000 ALTER TABLE `ap_categoria` ENABLE KEYS */;

-- Copiando estrutura para tabela alpha.ap_produto
CREATE TABLE IF NOT EXISTS `ap_produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `codigo` varchar(100) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `preco_unitario` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_produto`),
  UNIQUE KEY `descricao_UNIQUE` (`descricao`),
  KEY `ap_produto_id_categoria_idx` (`id_categoria`),
  CONSTRAINT `ap_produto_id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `ap_categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;



