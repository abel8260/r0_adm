-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Jun-2023 às 13:24
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `r0botech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `collection_30`
--

DROP TABLE IF EXISTS `collection_30`;
CREATE TABLE IF NOT EXISTS `collection_30` (
  `id_30` int(11) NOT NULL AUTO_INCREMENT,
  `src_30` varchar(255) NOT NULL,
  `nome_30` varchar(255) NOT NULL,
  PRIMARY KEY (`id_30`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `collection_30`
--

INSERT INTO `collection_30` (`id_30`, `src_30`, `nome_30`) VALUES
(1, '../../../../../img/pieces_h234_col_P.png', 'collection_P'),
(2, '../../../../../img/pieces_h234_col_P.png', 'collection_P'),
(3, '../../../../../img/pieces_h234_col_P.png', 'collection_PC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emblem_1_2_4`
--

DROP TABLE IF EXISTS `emblem_1_2_4`;
CREATE TABLE IF NOT EXISTS `emblem_1_2_4` (
  `id_e124` int(11) NOT NULL AUTO_INCREMENT,
  `src_e124` varchar(255) NOT NULL,
  `pw_e124` int(11) NOT NULL,
  `name_e124` varchar(255) NOT NULL,
  PRIMARY KEY (`id_e124`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `emblem_1_2_4`
--

INSERT INTO `emblem_1_2_4` (`id_e124`, `src_e124`, `pw_e124`, `name_e124`) VALUES
(1, '../../../../../img/e14_7.png', 40, 'e14_7'),
(2, '../../../../../img/e14_7.png', 40, 'e14_7_generic_a24'),
(3, '../../../../../img/e14_7.png', 3, 'h234 por c434'),
(4, '../../../../../img/e14_7.png', 3, 'h234 por c434');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mecha`
--

DROP TABLE IF EXISTS `mecha`;
CREATE TABLE IF NOT EXISTS `mecha` (
  `id_psl` int(11) NOT NULL AUTO_INCREMENT,
  `nome_psl` varchar(255) NOT NULL,
  `url_psl` varchar(5000) NOT NULL,
  PRIMARY KEY (`id_psl`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mecha`
--

INSERT INTO `mecha` (`id_psl`, `nome_psl`, `url_psl`) VALUES
(1, 'mecha_41', '../../../../../img/mecha_41.png'),
(2, 'mecha_42_generic', '../../../../../img/mecha_41.png'),
(3, 'mecha_41_gen_e14', '../../../../../img/mecha_41.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pieces_1_7`
--

DROP TABLE IF EXISTS `pieces_1_7`;
CREATE TABLE IF NOT EXISTS `pieces_1_7` (
  `id_p17` int(11) NOT NULL AUTO_INCREMENT,
  `src_p17` varchar(255) NOT NULL,
  `name_p17` varchar(255) NOT NULL,
  `pw_p17` int(11) NOT NULL,
  `effect_p17` varchar(255) NOT NULL,
  PRIMARY KEY (`id_p17`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pieces_1_7`
--

INSERT INTO `pieces_1_7` (`id_p17`, `src_p17`, `name_p17`, `pw_p17`, `effect_p17`) VALUES
(1, '../../../../../img/pieces_h234.png', 'h234s piece', 40, 'aparafusa h145'),
(2, '../../../../../img/pieces_h234.png', 'h234', 5, 'aparafusa e14_7');

-- --------------------------------------------------------

--
-- Estrutura da tabela `plastic_7`
--

DROP TABLE IF EXISTS `plastic_7`;
CREATE TABLE IF NOT EXISTS `plastic_7` (
  `id_pl7` int(11) NOT NULL AUTO_INCREMENT,
  `src_pl7` varchar(255) NOT NULL,
  `name_pl7` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pl7`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `plastic_7`
--

INSERT INTO `plastic_7` (`id_pl7`, `src_pl7`, `name_pl7`) VALUES
(1, '../../../../../img/pieces_h234_piecepl.svg', 'piece plastica from piece  h234'),
(3, '../../../../../img/pieces_h234_piecepl.svg', 'h234_pl'),
(4, '../../../../../img/pieces_h234.png', 'gi_joe_char'),
(5, '../../../../../img/pieces_h234.png', 'gi_joe_char');

-- --------------------------------------------------------

--
-- Estrutura da tabela `project_6`
--

DROP TABLE IF EXISTS `project_6`;
CREATE TABLE IF NOT EXISTS `project_6` (
  `id_6` int(11) NOT NULL AUTO_INCREMENT,
  `name_6` varchar(255) NOT NULL,
  `texto_6` varchar(5000) NOT NULL,
  PRIMARY KEY (`id_6`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `project_6`
--

INSERT INTO `project_6` (`id_6`, `name_6`, `texto_6`) VALUES
(1, 'projeto_re6', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(2, 'gundam sangoku sd ', 'fronte'),
(3, 'gundam frontier ', 'add');

-- --------------------------------------------------------

--
-- Estrutura da tabela `repor_pedido`
--

DROP TABLE IF EXISTS `repor_pedido`;
CREATE TABLE IF NOT EXISTS `repor_pedido` (
  `id_reporpddpc` int(11) NOT NULL AUTO_INCREMENT,
  `nome_reporpddpc` varchar(255) NOT NULL,
  `nompdd_reporpddpc` varchar(255) NOT NULL,
  `src_reporpddpc` varchar(255) NOT NULL,
  PRIMARY KEY (`id_reporpddpc`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `repor_pedido`
--

INSERT INTO `repor_pedido` (`id_reporpddpc`, `nome_reporpddpc`, `nompdd_reporpddpc`, `src_reporpddpc`) VALUES
(1, 'h234 pra revisar', 'h234', '../../../../../img/pdd86_p.png'),
(2, 'h234 repor com e238', 'h234', '../../../../../img/pdd86_p.png'),
(3, 'h234 por c434', 'h234', '../../../../../img/pdd86_p.png'),
(4, 'associar parafuso', 'trocar h234 por e14_7', ' 	../../../../../img/pdd86_p.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `roldana_124`
--

DROP TABLE IF EXISTS `roldana_124`;
CREATE TABLE IF NOT EXISTS `roldana_124` (
  `id_no124` int(11) NOT NULL AUTO_INCREMENT,
  `src_no124` varchar(255) NOT NULL,
  `name_no124` varchar(255) NOT NULL,
  PRIMARY KEY (`id_no124`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `roldana_124`
--

INSERT INTO `roldana_124` (`id_no124`, `src_no124`, `name_no124`) VALUES
(2, '../../../../../img/pieces_h234_roldana.png', 'roldana para h234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `set_136`
--

DROP TABLE IF EXISTS `set_136`;
CREATE TABLE IF NOT EXISTS `set_136` (
  `id_136` int(11) NOT NULL AUTO_INCREMENT,
  `src_136` varchar(255) NOT NULL,
  `pw_136` varchar(255) NOT NULL,
  `name_136` varchar(255) NOT NULL,
  PRIMARY KEY (`id_136`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `set_136`
--

INSERT INTO `set_136` (`id_136`, `src_136`, `pw_136`, `name_136`) VALUES
(1, '../../../../../img/pieces_h234.png', 'apertar set h234', 'set_h_e234'),
(2, '../../../../../img/pieces_h234.png', 'apertar set h234', 'set_h_e234'),
(3, '../../../../../img/pieces_h234.png', 'apertar set h234', 'set_h_e234'),
(4, '../../../../../img/pieces_h234.png', 'apertar set h234', 'set_h_e234'),
(5, '../../../../../img/pieces_h234.png', 'apertar set h234', 'set_h_e234'),
(6, '../../../../../img/pieces_h234.png', 'apertar set h234', 'set_h_e234'),
(7, '../../../../../img/pieces_h234.png', 'apertar set h234', 'set_h_e234'),
(8, '../../../../../img/pieces_h234.png', 'por fora da h234', 'h234_cover');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo_1_2`
--

DROP TABLE IF EXISTS `veiculo_1_2`;
CREATE TABLE IF NOT EXISTS `veiculo_1_2` (
  `id_v12` int(11) NOT NULL AUTO_INCREMENT,
  `nome_v12` varchar(255) NOT NULL,
  `ite1_v12` varchar(255) NOT NULL,
  `ite2_v12` varchar(255) NOT NULL,
  `ite3_v12` varchar(255) NOT NULL,
  `ite4_v12` varchar(255) NOT NULL,
  `src_v12` varchar(255) NOT NULL,
  PRIMARY KEY (`id_v12`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `veiculo_1_2`
--

INSERT INTO `veiculo_1_2` (`id_v12`, `nome_v12`, `ite1_v12`, `ite2_v12`, `ite3_v12`, `ite4_v12`, `src_v12`) VALUES
(1, 'veiculo_6h12', '../../../../../img/pieces_h234.png', '../../../../../img/pieces_h234.png', '../../../../../img/pieces_h234.png', '../../../../../img/pieces_h234.png', '../../../../../img/v12_8.png'),
(5, 'veiculo_6h12_gen_a8', '../../../../../img/pieces_h234.png', '../../../../../img/pieces_h234.png', '../../../../../img/pieces_h234.png', '../../../../../img/e14_7.png', '../../../../../img/v12_8.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
