-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jun-2020 às 22:02
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `admti`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_equipamentos`
--

CREATE TABLE `tbl_equipamentos` (
  `id_equipamento` int(11) NOT NULL,
  `hostname` varchar(255) NOT NULL,
  `id_keystone` varchar(255) NOT NULL,
  `ip_equipamento` varchar(20) NOT NULL,
  `ip_switch` varchar(20) NOT NULL,
  `porta_switch` int(15) NOT NULL,
  `rack_rede` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_equipamentos`
--

INSERT INTO `tbl_equipamentos` (`id_equipamento`, `hostname`, `id_keystone`, `ip_equipamento`, `ip_switch`, `porta_switch`, `rack_rede`) VALUES
(1, 'IMPRE_ATEND', 'PP3 PT18', '10.54.60.220', '10.54.60.196', 17, 'A'),
(2, 'IMPRE_CART', 'PP1 PT16', '10.54.60.10', '10.54.60.201', 16, 'C'),
(3, 'IMPRE_FIN', 'PP4 PT1', '10.54.60.20', '10.54.60.197', 20, 'A'),
(4, 'IMPRE_GER', 'PP1 PT23', '10.54.60.40', '10.54.60.200', 9, 'B'),
(5, 'IMPRE_RH', 'PP3 PT16', '10.54.60.50', '10.54.60.197', 16, 'A'),
(6, 'IMPRE_RM', 'PP1 PT3', '10.54.60.221', '10.54.60.201', 5, 'C'),
(7, 'PDV - 001', 'PP1 PT18', '10.54.60.101', '10.54.60.200', 1, 'B'),
(8, 'PDV - 002', 'PP1 PT17', '10.54.60.102', '10.54.60.200', 6, 'B'),
(9, 'PDV - 003', 'PP1 PT1', '10.54.60.103', '10.54.60.195', 5, 'A'),
(10, 'PDV - 004', 'PP2 PT2', '10.54.60.104', '10.54.60.196', 1, 'A'),
(11, 'PDV - 005', 'PP1 PT2', '10.54.60.105', '10.54.60.195', 6, 'A'),
(12, 'PDV - 006', 'PP2 PT2', '10.54.60.106', '10.54.60.196', 2, 'A'),
(13, 'PDV - 007', 'PP1 PT3', '10.54.60.107', '10.54.60.195', 7, 'A'),
(14, 'PDV - 008', 'PP2 PT3', '10.54.60.108', '10.54.60.196', 3, 'A'),
(15, 'PDV - 009', 'PP1 PT4', '10.54.60.109', '10.54.60.195', 8, 'A'),
(16, 'PDV - 010', 'PP2 PT4', '10.54.60.110', '10.54.60.196', 4, 'A'),
(17, 'PDV - 011', 'PP1 PT5', '10.54.60.111', '10.54.60.195', 9, 'A'),
(18, 'PDV - 012', 'PP2 PT5', '10.54.60.112', '10.54.60.196', 5, 'A'),
(19, 'PDV - 013', 'PP1 PT6', '10.54.60.113', '10.54.60.195', 10, 'A'),
(20, 'PDV - 014', 'PP2 PT6', '10.54.60.114', '10.54.60.196', 6, 'A'),
(21, 'PDV - 015', 'PP1 PT7', '10.54.60.115', '10.54.60.195', 11, 'A'),
(22, 'PDV - 016', 'PP2 PT7', '10.54.60.116', '10.54.60.196', 7, 'A'),
(23, 'PDV - 017', 'PP1 PT8', '10.54.60.117', '10.54.60.195', 12, 'A'),
(24, 'PDV - 018', 'PP2 PT8', '10.54.60.118', '10.54.60.196', 8, 'A'),
(25, 'PDV - 019', 'PP1 PT9', '10.54.60.119', '10.54.60.195', 13, 'A'),
(26, 'PDV - 020', 'PP2 PT9', '10.54.60.120', '10.54.60.196', 9, 'A'),
(27, 'PDV - 021', 'PP1 PT10', '10.54.60.121', '10.54.60.195', 14, 'A'),
(28, 'PDV - 022', 'PP2 PT10', '10.54.60.122', '10.54.60.196', 10, 'A'),
(29, 'PDV - 023', 'PP1 PT11', '10.54.60.123', '10.54.60.195', 15, 'A'),
(30, 'PDV - 024', 'PP2 PT11', '10.54.60.124', '10.54.60.196', 11, 'A'),
(31, 'PDV - 025', 'PP1 PT12', '10.54.60.125', '10.54.60.195', 16, 'A'),
(32, 'PDV - 026', 'PP2 PT12', '10.54.60.126', '10.54.60.196', 12, 'A'),
(33, 'PDV - 027', 'PP2 PT14', '10.54.60.127', '10.54.60.196', 14, 'A'),
(34, 'RÁDIO', 'PP3 PT17', 'NS', '10.54.60.196', 16, 'A'),
(35, 'TER01', 'falta', '10.54.60.171', '10.54.60.falta', 0, 'falta'),
(36, 'TER02', 'falta', '10.54.60.172', '10.54.60.falta', 0, 'falta'),
(37, 'TER03', 'falta', '10.54.60.173', '10.54.60.falta', 0, 'falta'),
(38, 'TER04', 'falta', '10.54.60.174', '10.54.60.falta', 0, 'falta'),
(39, 'TER05', 'falta', '10.54.60.175', '10.54.60.falta', 0, 'falta'),
(40, 'TER06', 'falta', '10.54.60.176', '10.54.60.falta', 0, 'falta'),
(41, 'TER07', 'falta', '10.54.60.177', '10.54.60.falta', 0, 'falta'),
(42, 'TER08', 'falta', '10.54.60.178', '10.54.60.falta', 0, 'falta'),
(43, 'W093BAL01', 'PP1 PT14', '10.54.60.26', '10.54.60.196', 14, 'A'),
(44, 'W093BAL02', 'PP2 PT16', '10.54.60.24', '10.54.60.196', 15, 'A'),
(45, 'W093CART01', 'PP1 PT15', '10.54.60.85', '10.54.60.201', 15, 'C'),
(46, 'W093FIN01', 'PP1 PT24', '10.54.60.11', '10.54.60.196', 22, 'A'),
(47, 'W093FIN02', 'PP2 PT18', '10.54.60.12', '10.54.60.196', 18, 'A'),
(48, 'W093GER01', 'PP1 PT14', '10.54.60.31', '10.54.60.199', 11, 'B'),
(49, 'W093GER02', 'PP2 PT7', '10.54.60.33', '10.54.60.199', 7, 'B'),
(50, 'W093GER03', 'PP1 PT16', '10.54.60.34', '10.54.60.200', 2, 'B'),
(51, 'W093NUT01', 'PP3 PT16', '10.54.60.96', '10.54.60.197', 8, 'A'),
(52, 'W093PRECO01', 'PP1 PT24', '10.54.60.51', '10.54.60.', 0, 'B'),
(53, 'W093PREV01', 'PP1 PT10', '10.54.60.86', '10.54.60.199', 5, 'B'),
(54, 'W093PREV02', 'PP2 PT22', '10.54.60.87', '10.54.60.195', 22, 'A'),
(55, 'W093RH01', 'PP3 PT14', '10.54.60.41', '10.54.60.197', 14, 'A'),
(56, 'W093RH02', 'PP3 PT12', '10.54.60.42', '10.54.60.197', 13, 'A'),
(57, 'W093RM01', 'PP1 PT2 ', '10.54.60.3', '10.54.60.201', 2, 'C'),
(58, 'W093RM02', 'PP1 PT8', '10.54.60.5', '10.54.60.201', 8, 'C'),
(59, 'W093RM03', 'PP1 PT11', '10.54.60.6', '10.54.60.201', 11, 'C'),
(60, 'W093RM04', 'PP1 PT6', '10.54.60.4', '10.54.60.201', 6, 'C'),
(61, 'W093TELE01', 'PP1 PT20', '10.54.60.61', '10.54.60.200', 4, 'B'),
(62, 'W093TELE02', 'PP1 PT12', '10.54.60.62', '10.54.60.199', 19, 'B'),
(63, 'W093TI01', 'PP1 PT21', '10.54.60.254', '10.54.60.199', 20, 'B'),
(64, 'W093TREI01', 'PP3 PT8', '10.54.60.71', '10.54.60.198', 7, 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_pesaveis`
--

CREATE TABLE `tbl_pesaveis` (
  `id` int(11) NOT NULL,
  `cod_consinco` varchar(255) NOT NULL,
  `descricao_produto` varchar(255) NOT NULL,
  `embalagem` varchar(255) NOT NULL,
  `cod_balanca` int(11) NOT NULL,
  `comprador` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `usuario` varchar(220) NOT NULL,
  `senha` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'miqueias', 'miq.severo@gmail.com', 'miqueias.silva', '$2y$10$aWOOW14xcH4hQvfDSCXrI.pchCAjaZALRV6Ku1WSjY0V.aauZakaa');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbl_equipamentos`
--
ALTER TABLE `tbl_equipamentos`
  ADD PRIMARY KEY (`id_equipamento`);

--
-- Índices para tabela `tbl_pesaveis`
--
ALTER TABLE `tbl_pesaveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbl_equipamentos`
--
ALTER TABLE `tbl_equipamentos`
  MODIFY `id_equipamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de tabela `tbl_pesaveis`
--
ALTER TABLE `tbl_pesaveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
