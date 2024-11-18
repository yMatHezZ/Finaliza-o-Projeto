-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12-Ago-2024 às 11:03
-- Versão do servidor: 8.0.33-0ubuntu0.20.04.2
-- versão do PHP: 7.4.3-4ubuntu2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `MC`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `produto_id` int NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` text COLLATE utf8mb4_general_ci,
  `imagem` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`produto_id`, `nome`, `preco`, `descricao`, `imagem`) VALUES
(1, 'hgfhhgf', '12222.00', 'gjgjglyuguy', NULL),
(2, 'PATI15555', '44444.00', 'hlihliuhiui', 'images/flu.png'),
(3, 'hbhhgvgv', '45454.00', 'hfgfctfc', 'images/golem.png'),
(4, 'diego', '2.00', 'careca', 'images/golem.png'),
(5, 'jaca', '56.00', 'fdsf', 'images/lixos.png'),
(6, 'abner', '2.50', 'ev', 'images/golem.png'),
(7, 'sdfghjkl', '858.00', 'lknjkbh', 'images/Captura de tela_2024-02-22_11-57-51.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `email`, `data_nascimento`) VALUES
(1, 'helena', '12345678', 'helena@gmail.com', '2024-06-05'),
(7, 'Maria', '12345678', 'aparecida.ferreira@gmail.com', '2024-06-02'),
(8, 'APARECIDA DA SILVA FERREIRA', '123456789', 'batata@gmail.com', '2024-06-06'),
(10, 'terno', '12345678', 'terno@gmail.com', '2024-06-01'),
(13, 'junes4122222', '12345678', 'meudeus@meudeus', '2024-06-05'),
(17, 'eu', '123456789', 'eu@gmail.com', '2024-05-28'),
(18, 'nossa', '12345678', 'nossa@gmail.com', '2024-06-11'),
(19, 'tudo', '123456789999', 'tudo@gmail.com', '2024-05-27'),
(21, 'jaca', '45896', 'matheus@gmail', '2024-05-30'),
(22, 'polz', '14532', 'loi@gmail', '2024-05-05'),
(23, 'diego', '4564231', 'diego@gmail', '2024-03-12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`produto_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `produto_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
