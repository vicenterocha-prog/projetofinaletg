-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13-Dez-2024 às 21:59
-- Versão do servidor: 8.3.0
-- versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
CREATE TABLE IF NOT EXISTS `avaliacoes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `avaliacao` int NOT NULL,
  `comentarios` text NOT NULL,
  `data` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `nome`, `avaliacao`, `comentarios`, `data`) VALUES
(1, 'Vicente', 5, 'Ééégua mano! Comida boa, equipe competente e preço justo!! ', '2024-12-13 00:33:27'),
(2, 'Vicente', 5, 'Ééégua mano! Comida boa, equipe competente e preço justo!! ', '2024-12-13 00:34:37'),
(3, 'Vicente', 5, 'Ééégua mano! Comida boa, equipe competente e preço justo!! ', '2024-12-13 00:36:38');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_clientes` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  PRIMARY KEY (`id_clientes`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `nome`, `email`, `telefone`, `data_nascimento`) VALUES
(1, 'Roberto Carlos', 'robe@gmail.com', '6198766-2321', '1950-02-28'),
(2, 'Maria Clara', 'clarinha@hotmail.com', '6199999-1234', '1998-10-02'),
(3, 'Júlia Alencar', 'julinha@globo.com', '6297867-4321', '2002-12-16'),
(4, 'Marcos Silva', 'msilva@gmail.com', '6197867-7890', '2000-07-05'),
(5, 'Moisés Santos', 'moser@gmail.com', '6199897-3456', '1987-12-22'),
(6, 'Ivete Marangoni', 'ivetem@gmail.com', '618497-4321', '1995-11-18'),
(7, 'Waldomiro Oliveira', 'dodo@hotmail.com', '618888-9999', '1969-05-20'),
(8, 'Juliana Ventura', 'jujuba@hotmail.com', '619988-7659', '1989-03-27'),
(9, 'Márcia Alves', 'marcinha@gmail.com', '6198677-7891', '2003-09-17'),
(10, 'Jason Lima', 'jason@gmail.com', '6199897-1200', '1998-05-21');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregas`
--

DROP TABLE IF EXISTS `entregas`;
CREATE TABLE IF NOT EXISTS `entregas` (
  `id_entrega` int NOT NULL AUTO_INCREMENT,
  `id_pedido` int DEFAULT NULL,
  `entregador` varchar(40) NOT NULL,
  `data_entrega` date DEFAULT NULL,
  `status_Entrega` varchar(30) NOT NULL,
  PRIMARY KEY (`id_entrega`),
  KEY `id_pedido` (`id_pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `entregas`
--

INSERT INTO `entregas` (`id_entrega`, `id_pedido`, `entregador`, `data_entrega`, `status_Entrega`) VALUES
(1, 1, 'Paulo Arthur', '2024-11-19', 'Entregue'),
(2, 2, 'João Grilo', '2024-11-19', 'Aguardando'),
(3, 3, 'João Grilo', '2024-11-19', 'Aguardando'),
(4, 4, 'Gustavo Silva', '2024-11-19', 'Entregue'),
(5, 5, 'Marcos José', '2024-11-19', 'Em rota'),
(6, 6, 'Marcos José', '2024-11-19', 'Entregue'),
(7, 7, 'Geraldo Magela', '2024-11-19', 'Entregue'),
(8, 8, 'Gabriel Maia', '2024-11-19', 'Aguardando'),
(9, 9, 'Cláudio Rocha', '2024-11-19', 'Entregue'),
(10, 10, 'Fernando Costa', '2024-11-19', 'Em rota');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int NOT NULL AUTO_INCREMENT,
  `id_cliente` int DEFAULT NULL,
  `data_pedido` date DEFAULT NULL,
  `valor_unitário` decimal(10,2) DEFAULT NULL,
  `forma_pagamento` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `id_cliente` (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `data_pedido`, `valor_unitário`, `forma_pagamento`) VALUES
(1, 2, '2024-11-19', 89.90, 'crédito'),
(2, 1, '2024-11-19', 54.00, 'crédito'),
(3, 4, '2024-11-19', 79.90, 'pix'),
(4, 3, '2024-11-19', 99.50, 'débito'),
(5, 6, '2024-11-19', 90.00, 'pix'),
(6, 5, '2024-11-19', 69.00, 'débito'),
(7, 7, '2024-11-19', 54.20, 'crédito'),
(8, 9, '2024-11-19', 88.90, 'crédito'),
(9, 10, '2024-11-19', 92.80, 'débito'),
(10, 8, '2024-11-19', 79.70, 'crédito');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) NOT NULL,
  `quantidade` int NOT NULL,
  `categoria` varchar(40) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `preco`, `quantidade`, `categoria`, `status`) VALUES
(1, 'Pato no Tucupi ', 89.90, 2, 'carnes', 'Pronto'),
(2, 'Moqueca de Pescado ', 90.00, 2, 'peixes', 'Preparando'),
(3, 'Feijoada Paraense ', 79.90, 1, 'carnes', 'Preparando'),
(4, 'Vatapá', 99.50, 1, 'carnes', 'Pronto'),
(5, 'Farofa de Mandioca', 25.75, 1, 'legumes', 'Pronto'),
(6, 'Açaí ', 19.90, 1, 'frutas', 'Pronto'),
(7, 'Cupuaçu', 21.90, 1, 'frutas', 'Pronto'),
(8, 'Tacacá', 39.90, 2, 'legumes', 'Preparando'),
(9, 'Paçoca de Amendoim', 29.80, 1, 'legumes', 'Pronto'),
(10, 'Sorvete de Açaí', 24.79, 2, 'frutas', 'Pronto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `cpf`, `endereco`, `cep`) VALUES
(1, 'Vicente', '49489577120', 'Rua 12', '71909-540'),
(2, 'Giane', '49489577121', 'Rua 12', '71909-540'),
(3, 'Vitória', '54678908844', 'Rua 12', '71909-540');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
