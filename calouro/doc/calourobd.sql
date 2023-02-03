-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Fev-2023 às 16:39
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
-- Banco de dados: `calourobd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `espaco`
--

CREATE TABLE `espaco` (
  `id` int(11) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `obs` varchar(250) DEFAULT NULL,
  `latitude` float(10,6) DEFAULT NULL,
  `longitude` float(10,6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `espaco`
--

INSERT INTO `espaco` (`id`, `descricao`, `obs`, `latitude`, `longitude`) VALUES
(4, 'Núcleo da Terra parou de girar e pode se inverter, sugere estudo ', '              ', 0.000000, 0.000000),
(5, 'Núcleo da Terra parou de girar e pode se inverter, sugere estudo ', '              ', 0.000000, 0.000000),
(7, 'Badalada casa de shows de NY dobra uso de reconhecimento facial para barrar advogados rivais', '              ', 0.000000, 0.000000),
(8, 'Não sou o substituto do Google, afirma ChatGPT ao ser entrevistado ', '              ', 0.000000, 0.000000),
(9, 'Inteligência Artificial pode reduzir quadro de funcionários de big techs, diz especialista ', '              ', 0.000000, 0.000000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id` int(11) NOT NULL,
  `espaco_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id`, `espaco_id`, `file_name`, `uploaded_on`, `status`) VALUES
(1, 4, '35056_22D0A7E23B34D6E8-3.png', '2023-02-03 12:30:21', '1'),
(2, 5, '230123161752-01-meteorite-antarctica-discovery.png', '2023-02-03 12:31:25', '1'),
(3, 7, '11697_88014E6DA15DBED3.png', '2023-02-03 12:36:26', '1'),
(4, 8, 'uso_computador_unsplash.png', '2023-02-03 12:37:27', '1'),
(5, 9, 'felipepelaquim-9HcTOHKEJRs-unsplash.png', '2023-02-03 12:39:01', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'mv.dev212@gmail.com', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `espaco`
--
ALTER TABLE `espaco`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_imagens_espaco_idx` (`espaco_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `espaco`
--
ALTER TABLE `espaco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_ibfk_1` FOREIGN KEY (`espaco_id`) REFERENCES `espaco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
