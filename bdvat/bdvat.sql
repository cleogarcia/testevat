-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/05/2023 às 21:26
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdvat`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
  `nome_cliente` varchar(50) NOT NULL,
  `dt_cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `dt_cadastro`) VALUES
(321, 'Minduim Garcia de Melo', '2023-05-27 04:00:00'),
(322, 'Roberto Garcia', '2023-05-27 04:00:00'),
(325, 'PITOCO GALISTEU', '2023-05-27 04:00:00'),
(326, 'cliente teste', '2001-02-02 04:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `os`
--

CREATE TABLE `os` (
  `id_os` int(10) UNSIGNED NOT NULL,
  `dt_cadastro` date NOT NULL DEFAULT current_timestamp(),
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `tx_situacao` varchar(20) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `nome_servico` varchar(50) NOT NULL,
  `desc_servico` text NOT NULL,
  `dt_atualizacao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `os`
--

INSERT INTO `os` (`id_os`, `dt_cadastro`, `id_usuario`, `tx_situacao`, `id_cliente`, `nome_servico`, `desc_servico`, `dt_atualizacao`) VALUES
(2, '2023-05-27', 123, 'Andamento', 0, '', 'troca de oleo', '2023-05-27'),
(15, '0000-00-00', 123, 'Andamento', 322, 'automotivo', 'trocar de oleo e pneu', '0000-00-00'),
(17, '0000-00-00', 0, '[Parado]', 0, '[Automotivo]', '[trocar de pneu]', '0000-00-00'),
(19, '2023-05-27', 124, 'Parado', 322, 'Automotivo', 'trocar de pneu', '2023-05-26'),
(20, '2023-05-27', 124, 'Parado', 322, 'Automotivo', 'trocar de pneu', '2023-05-27'),
(22, '2023-05-27', 124, '', 0, 'teste', 'cococoococ', '2023-05-27'),
(30, '2023-05-27', 124, '2', 0, 'Tosa', 'escovar os dentes, banho aparar a barba do minduim', '2023-05-27'),
(31, '2023-05-27', 124, '3', 321, 'Tosa', 'corta topete do Minduim', '2023-05-27'),
(34, '2023-05-27', 138, '2', 325, 'TOSA', '     APARAR O ESPORÃO DO GALO PITOCO', '2023-05-27'),
(35, '2023-05-27', 139, '1', 326, 'limpeza', 'LImpar tudo que deve sempre', '2023-05-27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) UNSIGNED NOT NULL,
  `nome_usuario` varchar(50) NOT NULL,
  `dt_cadastro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `dt_cadastro`) VALUES
(123, 'Melissa dog ', '2023-05-27'),
(134, 'Amelly Jolly', '2023-05-27'),
(137, 'cleo', '2023-05-27'),
(138, 'PITUCA BLAK', '2023-05-27'),
(139, 'CLIENTE TESTE', '2000-02-01');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id_os`),
  ADD KEY `fk_id_usuario` (`id_usuario`),
  ADD KEY `fk_id_cliente` (`id_cliente`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT de tabela `os`
--
ALTER TABLE `os`
  MODIFY `id_os` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
