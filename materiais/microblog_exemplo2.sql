-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2023 às 21:03
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `microblog_exemplo2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` enum('admin','editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(1, 'Marcelo Gomes de Andrade ', 'gomesgomes123321@gmail.com', '1234', 'admin'),
(4, 'maria sonha', 'dac@gmail.com', '$2y$10$p/yIVZz0nxU3hpooeMjfJu4VDywmKHyWNqtP/oODQv4H/PdKYlOfW', 'editor'),
(5, 'Helio Gomes de Andrade', 'sac.bearmais@gmail.com', '$2y$10$t61H4ClV6HjZpu00ZwDr7.OBO7WtcjcpS4RUoPi6RpZpBZ74KV9K2', 'editor'),
(6, 'Geandro Lopes ', 'amigo@bearplus.net', '$2y$10$x.fVx4G.vL0hOE1a31jEHe5L.H/XrgcRupLDkqbm2HjP80CNTBtjW', 'editor'),
(7, 'Rodrigo Natura ', 'bear@bearplus.net', '$2y$10$3Woql2omqPXapHuL7rV3J.i.IOqBAjuY41K2r1K2l2b.8gFXdDcDW', 'editor'),
(8, 'João Carlos ', 'equipe@bearplus.net', '$2y$10$y0sd.cChYVZxFtozieub2eIrCGzEYJJOREAQiOS/Chxhh78/rYAQK', 'editor');

--
-- Índices para tabelas despejadas
--

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
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
