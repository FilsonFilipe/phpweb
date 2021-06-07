-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Maio-2021 às 21:16
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cambas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `conversas`
--

CREATE TABLE `conversas` (
  `id` int(11) NOT NULL,
  `de` int(11) NOT NULL,
  `para` int(11) NOT NULL,
  `texto` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `dtregisto` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `conversas`
--

INSERT INTO `conversas` (`id`, `de`, `para`, `texto`, `img`, `video`, `status`, `dtregisto`) VALUES
(1, 6, 2, 'Ola Mundo', '', '', 0, '2021-01-26 22:04:24'),
(9, 6, 2, 'o MEU deus', '', '', 0, '2021-01-27 00:11:18'),
(4, 2, 2, 'Hello WIRD', '', '', 0, '2021-01-26 22:08:09'),
(8, 1, 2, 'isso é Benga', '', '', 0, '2021-01-26 23:45:40'),
(10, 1, 2, 'ok', '', '', 0, '2021-01-27 00:15:40'),
(11, 6, 2, 'ola', '', '', 0, '2021-01-27 01:37:23'),
(12, 6, 2, 'ola', '', '', 0, '2021-01-27 01:38:03'),
(13, 6, 2, 'Ola Mundo', '', '', 0, '2021-01-27 01:38:39'),
(14, 6, 1, 'Ola Mundo', '', '', 0, '2021-01-27 01:41:05'),
(16, 0, 0, 'b2xh', '', '', 0, '2021-05-26 20:02:50'),
(17, 8, 1, 'b2xhIE11ZG8=', '', '', 0, '2021-05-26 20:04:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupos`
--

CREATE TABLE `grupos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `admin` int(11) NOT NULL,
  `membros` int(11) NOT NULL,
  `dtregisto` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grupos`
--

INSERT INTO `grupos` (`id`, `nome`, `foto`, `admin`, `membros`, `dtregisto`) VALUES
(1, 'Amigos Chegados', '', 0, 0, '2021-01-26'),
(2, 'Amigos da Banda', '', 0, 0, '2021-01-26');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `autor` int(11) NOT NULL,
  `texto` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL,
  `gostos` int(11) NOT NULL,
  `comentario` int(11) NOT NULL,
  `dtregisto` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `autor`, `texto`, `img`, `video`, `gostos`, `comentario`, `dtregisto`) VALUES
(1, 1, 'Ola Mundo', '', '', 0, 0, '2021-01-26 13:09:05'),
(2, 1, 'Ola mundo2', '', '', 0, 0, '2021-01-26 13:09:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `dtregisto` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `foto`, `email`, `senha`, `dtregisto`) VALUES
(1, 'Nilson Barros', 'BITC.png', 'n@b.com', '$2y$10$gfw0/eQi8ZEafzuMS5okJes.Xt1nYVNDOSXsIGlKsP6.YsR0Y3qay', '2021-01-26'),
(2, 'Marisa Alves', '', 'marisa@alves.com', '$2y$10$VgdqEIgI.nBkkMGQzhcQEOjGLZgurdU9G4FPTRQnGd0CgzSkhLekC', '2021-01-26'),
(3, 'Tonilson Barros', '', 'artenioemilianobarros@gmail.com', '$2y$10$pBOoNUYGf0IcNwrepefCM.97TydAsW2ahO94rCyuRJVjNOIxVMsvS', '2021-01-26'),
(4, 'Deusa Barros', '', 'Deusabarros@blalba.com', '$2y$10$SdOEBluKM9c2XmaS1Ipjp.O.Ea3YcpiBXwI5X3gvBQuPRfDkr4jHa', '2021-01-26'),
(5, 'Golden  Barros', '', 'Goldenbarros@blalba.com', '$2y$10$Y2UZUcnSMUEagUe5kgQE2OvSyvfEA52B8wR/JC2N1oNqPrpL0rjku', '2021-01-26'),
(6, 'Filson FILIPE', '', 'ff@gmail.com', '$2y$10$Q4Me4VmcfddPVpAPSwnckesZD38y5RUWG/o0IYq9XN3/hwzV75NwO', '2021-01-26'),
(8, 'Nilson Barros', '', 'barrosfayenda@gmail.com', '$2y$10$pKR5snF8088bCAtCeMHbOOurFjTGcHXCYLFqOPwIpNH5RA8JN.X32', '2021-05-26');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `conversas`
--
ALTER TABLE `conversas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conversas`
--
ALTER TABLE `conversas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
