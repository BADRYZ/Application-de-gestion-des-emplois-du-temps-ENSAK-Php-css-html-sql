-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 12 jan. 2023 à 06:52
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ttms`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `login` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`login`, `password`) VALUES
('admin', 'pass123');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `nom_salle` varchar(30) NOT NULL,
  `filiere` int(1) NOT NULL,
  `capacite` int(255) NOT NULL,
  `batiment` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`nom_salle`, `filiere`, `capacite`, `batiment`) VALUES
('b3', 2, 556, 'b'),
('d2', 2, 199, 'd'),
('a6', 2, 56, 'a'),
('c3', 2, 500, 'c'),
('c22', 0, 55, 'c'),
('c11', 2, 5, 'c');

-- --------------------------------------------------------

--
-- Structure de la table `emploi1`
--

CREATE TABLE `emploi1` (
  `jour` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploi1`
--

INSERT INTO `emploi1` (`jour`, `period1`, `period2`, `period3`, `period4`) VALUES
('lundi', '', '', '', ''),
('mardi', '', '', '', ''),
('mercredi', '', '', '', ''),
('jeudi', '', '', '', ''),
('vendredi', '', '', '', ''),
('samedi', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `emploi2`
--

CREATE TABLE `emploi2` (
  `jour` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploi2`
--

INSERT INTO `emploi2` (`jour`, `period1`, `period2`, `period3`, `period4`) VALUES
('lundi', '', '', '', ''),
('mardi', '', '', '', ''),
('mercredi', '', '', '', ''),
('jeudi', '', '', '', ''),
('vendredi', '', '', '', ''),
('samedi', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `emploi3`
--

CREATE TABLE `emploi3` (
  `jour` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploi3`
--

INSERT INTO `emploi3` (`jour`, `period1`, `period2`, `period3`, `period4`) VALUES
('lundi', '', '', '', ''),
('mardi', '', '', '', ''),
('mercredi', '', '', '', ''),
('jeudi', '', '', '', ''),
('vendredi', '', '', '', ''),
('samedi', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module` varchar(10) NOT NULL,
  `nom_module` varchar(50) NOT NULL,
  `tp_cours` varchar(15) NOT NULL,
  `semester` int(1) NOT NULL,
  `department` varchar(50) NOT NULL,
  `estreserver` int(1) NOT NULL,
  `prof1` text NOT NULL,
  `prof2` text NOT NULL,
  `prof3` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_module`, `nom_module`, `tp_cours`, `semester`, `department`, `estreserver`, `prof1`, `prof2`, `prof3`) VALUES
('C0011', 'programation java poo', 'THEORY', 7, 'Informatique,Logistique et Mathematique', 1, 'T013', '', ''),
('C0010', 'systèmes embarqués et tps réel', 'THEORY', 7, 'Informatique,Logistique et Mathematique', 1, 'T015', '', ''),
('C0009', 'traduction des langages', 'THEORY', 7, 'Informatique,Logistique et Mathematique', 1, 'T005', '', ''),
('C0006', 'Administration et programmation systèmes', 'THEORY', 7, 'Informatique,Logistique et Mathematique', 1, 'T010', '', ''),
('C0008', 'systèmes de trait', 'THEORY', 7, 'Informatique,Logistique et Mathematique', 1, 'T016', '', ''),
('C0013', 'Administration et programmation systèmes', 'LAB', 7, 'Informatique,Logistique et Mathematique', 0, '', '', ''),
('C0007', 'Administration et Optimisation de bases', 'THEORY', 7, 'Informatique,Logistique et Mathematique', 1, 'T009', '', ''),
('C0014', 'système de traitement', 'LAB', 7, 'Informatique,Logistique et Mathematique', 0, '', '', ''),
('C0015', 'Administration et Optimisation de bases', 'LAB', 7, 'Informatique,Logistique et Mathematique', 0, '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id_prof` varchar(10) NOT NULL,
  `nom_prof` text NOT NULL,
  `alias` varchar(10) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `numero_tele` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id_prof`, `nom_prof`, `alias`, `designation`, `numero_tele`, `email`, `mdp`) VALUES
('T013', 'CHOUGDALI Khalid', 'CK', 'Professor', '212', 'khalid.chougdali@uit.ac.ma', 'azerty'),
('T012', 'BENTALEB Youssef', 'BY', 'Professor', '212', 'youssef.bentaleb@uit.ac.ma', 'azerty'),
('T011', 'EL HAMI Norelislam', 'EHN', 'Professor', '212', 'norelislam.elhami@uit.ac.ma', 'azerty'),
('T010', 'ELOUADI Abdelmajid', 'EA', 'Professor', '212', '	abdelmajid.elouadi@uit.ac.ma', 'azerty'),
('T009', 'CHAOUI Habiba\r\n', 'CH', 'Professor ', '212', 'habiba.chaoui@uit.ac.ma', 'azerty'),
('T008', 'BELGHITI Moulay Taib	', 'BMT	', 'Professor', '212', 'moulaytaib.belghiti@uit.ac.ma', 'azerty'),
('T007', 'ABOUABDELLAH Abdellah	', 'AA', 'Professor', '212', 'abdellah.abouabdellah@uit.ac.ma', 'azerty'),
('T006	', 'MASLOUHI Mostafa	', 'MM', 'Professor', '212', 'mostafa.maslouhi@uit.ac.ma', 'azerty'),
('T005', 'GRETETE Driss	', 'GD', 'Professor', '212', 'driss.gretete@uit.ac.ma', 'azerty'),
('T004', 'MHARZI Hassan	', 'MH', 'Professor', '212', 'h.mharzi@uit.ac.ma', 'azerty'),
('T003', 'HMINA Nabil	', 'HN', 'Professor', '212', 'nabil.hmina@uit.ac.ma	', 'azerty'),
('T002	', '	ABOUTAFAIL Moulay Othman', 'AMO	', 'Professor', '212', 'moulayothman.aboutafail@uit.ac.ma', 'azerty'),
('T001', 'BOUMAZZOU Ibrahim	', 'BI', 'Professor', '212', 'ibrahim.boumazzou@uit.ac.ma	', 'azerty'),
('T014', 'BELFKIH Samir', 'BS', 'Professor', '212', 'samir.belfkih@uit.ac.ma	', 'azerty'),
('T015', 'OUMAIRA Ilham', 'OI', 'Professor', '212', 'moulaytaib.belghiti@uit.ac.ma', 'azerty'),
('T016', 'AMINE Aouatif	', 'AA', 'Professor', '212', 'aouatif.amine@uit.ac.ma	', 'azerty'),
('T017', 'BOUAYAD Anas', 'BA', 'Professor', '212', 'anas.bouayad@uit.ac.ma	', 'azerty'),
('T018', 'EL BOUZEKRI EL IDRISSI Younes', 'EBEIY', 'Professor', '212', 'y.elbouzekri@uit.ac.ma	', 'azerty'),
('T019', 'AIT LAHCEN Ayoub', 'ALA', 'Professor', '212', 'ayoub.aitlahcen@uit.ac.ma', 'azerty'),
('T020', 'HACHIMI Hanaa	', 'HH', 'Professor', '212', 'hanaa.hachimi@uit.ac.ma	', 'azerty'),
('T021', 'BANNARI Rachid\r\n', 'BR', 'Professor ', '212', 'rachid.bannari@uit.ac.ma', 'azerty'),
('T022', 'MABTOUL Samira\r\n', 'MS', 'Professor ', '212', 'samira.mabtoul@uit.ac.ma', 'azerty'),
('T023', 'EL ABBADI Laila\r\n', 'EAL', 'Professor ', '212', 'laila.elabbadi@uit.ac.ma', 'azerty'),
('T024', 'Aymane Ryany', 'AR', 'Professor', '0610746256', 'aymane.ryany@uit.ac.ma', 'azerty');

-- --------------------------------------------------------

--
-- Structure de la table `semester3`
--

CREATE TABLE `semester3` (
  `jour` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `semester3`
--

INSERT INTO `semester3` (`jour`, `period1`, `period2`, `period3`, `period4`) VALUES
('lundi', '', '', '', ''),
('mardi', 'C0006<BR>T010', '', 'C0008<BR>T016', ''),
('mercredi', 'C0007<BR>T009', '', '', ''),
('jeudi', 'C0009<BR>T005', '', 'C0010<BR>T015', ''),
('vendredi', 'C0011<BR>T013', '', '', ''),
('samedi', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `semester5`
--

CREATE TABLE `semester5` (
  `jour` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `semester5`
--

INSERT INTO `semester5` (`jour`, `period1`, `period2`, `period3`, `period4`) VALUES
('lundi', 'cc', '', '', ''),
('mardi', '', '', '', ''),
('mercredi', '', '', '', ''),
('jeudi', '', '', '', ''),
('vendredi', '', '', '', ''),
('samedi', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `semester7`
--

CREATE TABLE `semester7` (
  `jour` varchar(10) NOT NULL,
  `period1` varchar(30) NOT NULL,
  `period2` varchar(30) NOT NULL,
  `period3` varchar(30) NOT NULL,
  `period4` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `semester7`
--

INSERT INTO `semester7` (`jour`, `period1`, `period2`, `period3`, `period4`) VALUES
('lundi', '', '', '', ''),
('mardi', '', '', '', ''),
('mercredi', '', '', '', ''),
('jeudi', '', '', '', ''),
('vendredi', '', '', '', ''),
('samedi', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t001`
--

CREATE TABLE `t001` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t001`
--

INSERT INTO `t001` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('friday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('monday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('saturday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('thursday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('tuesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-'),
('wednesday', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-<br>-', '-');

-- --------------------------------------------------------

--
-- Structure de la table `t002`
--

CREATE TABLE `t002` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t002`
--

INSERT INTO `t002` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t003`
--

CREATE TABLE `t003` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t003`
--

INSERT INTO `t003` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t004`
--

CREATE TABLE `t004` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t004`
--

INSERT INTO `t004` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t005`
--

CREATE TABLE `t005` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t005`
--

INSERT INTO `t005` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t006`
--

CREATE TABLE `t006` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t006`
--

INSERT INTO `t006` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t007`
--

CREATE TABLE `t007` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t007`
--

INSERT INTO `t007` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t008`
--

CREATE TABLE `t008` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t008`
--

INSERT INTO `t008` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t010`
--

CREATE TABLE `t010` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t010`
--

INSERT INTO `t010` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', 'C0006<BR>C1', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t011`
--

CREATE TABLE `t011` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t011`
--

INSERT INTO `t011` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t012`
--

CREATE TABLE `t012` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t012`
--

INSERT INTO `t012` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t013`
--

CREATE TABLE `t013` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t013`
--

INSERT INTO `t013` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('jeudi', '', '', '', '', '', ''),
('lundi', '', '', '', '', '', ''),
('mardi', '', '', '', '', '', ''),
('mercredi', '', '', '', '', '', ''),
('samedi', 'C0011', '', '', '', '', ''),
('vendredi', NULL, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t014`
--

CREATE TABLE `t014` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t014`
--

INSERT INTO `t014` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t015`
--

CREATE TABLE `t015` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t015`
--

INSERT INTO `t015` (`day`, `period1`, `period2`, `period3`, `period4`) VALUES
('JEUDI', '', '', '', ''),
('LUNDI', '', '', '', ''),
('MARDI', '', '', '', ''),
('MERCREDI', '', '', '', ''),
('SAMEDI', '', '', '', ''),
('VENDREDI', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t016`
--

CREATE TABLE `t016` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t016`
--

INSERT INTO `t016` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t017`
--

CREATE TABLE `t017` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t017`
--

INSERT INTO `t017` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t018`
--

CREATE TABLE `t018` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t018`
--

INSERT INTO `t018` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t019`
--

CREATE TABLE `t019` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t019`
--

INSERT INTO `t019` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t020`
--

CREATE TABLE `t020` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t020`
--

INSERT INTO `t020` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', '', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `t024`
--

CREATE TABLE `t024` (
  `day` varchar(10) NOT NULL,
  `period1` varchar(30) DEFAULT NULL,
  `period2` varchar(30) DEFAULT NULL,
  `period3` varchar(30) DEFAULT NULL,
  `period4` varchar(30) DEFAULT NULL,
  `period5` varchar(30) DEFAULT NULL,
  `period6` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `t024`
--

INSERT INTO `t024` (`day`, `period1`, `period2`, `period3`, `period4`, `period5`, `period6`) VALUES
('JEUDI', 'C001', '', '', '', '', ''),
('LUNDI', '', '', '', '', '', ''),
('MARDI', '', '', '', '', '', ''),
('MERCREDI', '', '', '', '', '', ''),
('SAMEDI', '', '', '', '', '', ''),
('VENDREDI', '', '', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`nom_salle`);

--
-- Index pour la table `emploi1`
--
ALTER TABLE `emploi1`
  ADD PRIMARY KEY (`jour`);

--
-- Index pour la table `emploi2`
--
ALTER TABLE `emploi2`
  ADD PRIMARY KEY (`jour`);

--
-- Index pour la table `emploi3`
--
ALTER TABLE `emploi3`
  ADD PRIMARY KEY (`jour`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id_module`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id_prof`);

--
-- Index pour la table `semester3`
--
ALTER TABLE `semester3`
  ADD PRIMARY KEY (`jour`);

--
-- Index pour la table `semester5`
--
ALTER TABLE `semester5`
  ADD PRIMARY KEY (`jour`);

--
-- Index pour la table `semester7`
--
ALTER TABLE `semester7`
  ADD PRIMARY KEY (`jour`);

--
-- Index pour la table `t001`
--
ALTER TABLE `t001`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t002`
--
ALTER TABLE `t002`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t003`
--
ALTER TABLE `t003`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t004`
--
ALTER TABLE `t004`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t005`
--
ALTER TABLE `t005`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t006`
--
ALTER TABLE `t006`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t007`
--
ALTER TABLE `t007`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t008`
--
ALTER TABLE `t008`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t010`
--
ALTER TABLE `t010`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t011`
--
ALTER TABLE `t011`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t012`
--
ALTER TABLE `t012`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t013`
--
ALTER TABLE `t013`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t014`
--
ALTER TABLE `t014`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t015`
--
ALTER TABLE `t015`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t016`
--
ALTER TABLE `t016`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t017`
--
ALTER TABLE `t017`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t018`
--
ALTER TABLE `t018`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t019`
--
ALTER TABLE `t019`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t020`
--
ALTER TABLE `t020`
  ADD PRIMARY KEY (`day`);

--
-- Index pour la table `t024`
--
ALTER TABLE `t024`
  ADD PRIMARY KEY (`day`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
