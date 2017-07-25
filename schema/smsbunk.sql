-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 25 Juillet 2017 à 19:18
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `smsbunk`
--

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE `comptes` (
  `idcompte` int(11) NOT NULL,
  `nomEts` varchar(250) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comptes`
--

INSERT INTO `comptes` (`idcompte`, `nomEts`, `contact`, `email`, `code`) VALUES
(1, 'divintic', '96205549', 'joezerbouraima@yahoo.fr', 7555213),
(2, 'abetic', '94662237', 'joezer@together.com', 5630682),
(3, 'df', 'hdfghd', 'joezer@together.com', 2156860);

-- --------------------------------------------------------

--
-- Structure de la table `credit`
--

CREATE TABLE `credit` (
  `idcredit` int(11) NOT NULL,
  `montant` bigint(20) NOT NULL,
  `date` bigint(20) NOT NULL,
  `sms` int(11) NOT NULL,
  `idcompte` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `credit`
--

INSERT INTO `credit` (`idcredit`, `montant`, `date`, `sms`, `idcompte`) VALUES
(1, 5000, 1500984414, 333, 1),
(2, 10000, 1500984777, 666, 1),
(3, 150, 1500987203, 10, 1),
(4, 10000, 1500987225, 666, 1),
(5, 50000, 1500987413, 3333, 2),
(6, 20000, 1500987506, 1333, 2),
(7, 50000, 1500990702, 3333, 1);

-- --------------------------------------------------------

--
-- Structure de la table `debit`
--

CREATE TABLE `debit` (
  `iddebit` int(11) NOT NULL,
  `date` bigint(20) NOT NULL,
  `sms` int(11) NOT NULL,
  `idcompte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `debit`
--

INSERT INTO `debit` (`iddebit`, `date`, `sms`, `idcompte`) VALUES
(1, 12544782225, 4660, 2),
(2, 1501008296, 1, 2),
(3, 1501008440, 1, 2),
(4, 1501009582, 3, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `comptes`
--
ALTER TABLE `comptes`
  ADD PRIMARY KEY (`idcompte`);

--
-- Index pour la table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`idcredit`);

--
-- Index pour la table `debit`
--
ALTER TABLE `debit`
  ADD PRIMARY KEY (`iddebit`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `comptes`
--
ALTER TABLE `comptes`
  MODIFY `idcompte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `credit`
--
ALTER TABLE `credit`
  MODIFY `idcredit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `debit`
--
ALTER TABLE `debit`
  MODIFY `iddebit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
