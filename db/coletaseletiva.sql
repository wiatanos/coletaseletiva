-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Set-2017 às 22:27
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coletaseletiva`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nome_empresa` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `lng` varchar(255) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `data_coleta` date NOT NULL,
  `peso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `nome_empresa`, `email`, `telefone`, `endereco`, `bairro`, `lat`, `lng`, `cep`, `data_coleta`, `peso`) VALUES
(21, 'aaa', 'aa', 'aa', 'aa', 'aa', '', '', 'aa', '0000-00-00', 'aa'),
(22, 'Beatriz', 'email@email.com', '(11) 1111-111', 'Rua sÃ£o benedito', 'centro', 'centro', 'centro', '11661-000', '0000-00-00', '11.11'),
(23, 'Jao', '23423423434243@gmail.com', '(11) 1111-111', 'Centro', 'sÃ£o benedito', '-23.6203072', '-45.41333700000001', '11661-000', '0000-00-00', '11.11'),
(24, '3mpres@', 'email@email.com', '(32) 4242-334', 'rua sÃ£o benedito, 436', 'Centro', '-23.6203719', '-45.41349389999999', '11660-000', '0000-00-00', '10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'aa', 'aa@aa', 'aa', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
