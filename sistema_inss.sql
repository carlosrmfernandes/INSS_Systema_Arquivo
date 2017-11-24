-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Dez-2016 às 01:24
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_inss`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `anexo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contrato`
--

INSERT INTO `contrato` (`id`, `titulo`, `descricao`, `anexo`) VALUES
(1, 'Carlos Fernandes', 'Termo', './Documentos/1413836786.pdf'),
(2, 'Unesc', 'Boleto', './Documentos/sabado.rtf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `despacho`
--

CREATE TABLE `despacho` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `anexo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `despacho`
--

INSERT INTO `despacho` (`id`, `titulo`, `descricao`, `anexo`) VALUES
(1, 'Carlos Fernandes', 'FinanÃ§as', './Documentos/241-17014-1-PB.pdf'),
(2, 'Aristoteles Lopes', 'Boleto', './Documentos/241-17014-1-PB.pdf'),
(3, 'Oliveira Kiala', 'Unesc', './Documentos/CAPÃTULO IV.docx'),
(4, 'Euclides ', 'Internet', './Documentos/Marta Quilobo.pdf'),
(5, 'Gerson Mavinga', 'Onibos', './Documentos/EMANUEL1.docx');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pes_pcm`
--

CREATE TABLE `pes_pcm` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `anexo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pes_pcm`
--

INSERT INTO `pes_pcm` (`id`, `titulo`, `descricao`, `anexo`) VALUES
(1, 'Marta Binza', 'Contrato', './Documentos/Marta Quilobo.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `despacho`
--
ALTER TABLE `despacho`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pes_pcm`
--
ALTER TABLE `pes_pcm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `despacho`
--
ALTER TABLE `despacho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pes_pcm`
--
ALTER TABLE `pes_pcm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
