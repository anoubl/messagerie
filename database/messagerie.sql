-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 18 mars 2023 à 23:02
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `messagerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `discussion`
--

DROP TABLE IF EXISTS `discussion`;
CREATE TABLE IF NOT EXISTS `discussion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) DEFAULT NULL,
  `id_em` int(11) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  `created_at` time DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_em` (`id_em`),
  KEY `group_name` (`group_name`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `discussion`
--

INSERT INTO `discussion` (`id`, `group_name`, `id_em`, `message`, `created_at`) VALUES
(17, 'php', 4, 'salam ana ahmed amine anoubl', '15:30:51'),
(18, 'php', 5, 'bonjour cava ', '15:31:03'),
(19, 'php', 4, 'oui et vous', '15:31:16'),
(20, 'php', 5, 'bien est ce que tu peux envoyer le cours de c', '15:32:43'),
(21, 'php', 4, 'bien sur attend 15 minute', '15:33:18'),
(22, 'family anoubl', 6, 'hello amine labase elik', '15:34:12'),
(23, 'family anoubl', 4, 'wa fin akhay rayan hani', '15:34:23'),
(24, 'family anoubl', 6, 'hmdlah onta labse', '15:34:35'),
(25, 'family anoubl', 4, 'hmdlah', '15:34:56'),
(26, 'family anoubl', 4, 'kif dayra danya', '15:35:02'),
(28, 'php', 4, 'c++', '17:00:48'),
(29, 'php', 4, 'makaynch rada', '17:01:15'),
(30, 'groupe1', 6, 'salam', '21:10:27'),
(31, 'groupe1', 6, 'ana rayane', '21:10:55'),
(32, 'groupe1', 4, 'ana ahmed hani liya koÃ lchi mzn', '21:11:29');

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `freind_id` int(11) DEFAULT NULL,
  `date_friends` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `emeteur_id` (`user_id`),
  KEY `recepteur_id` (`freind_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `freind_id`, `date_friends`) VALUES
(8, 5, 4, '2023-03-05 20:37:07'),
(7, 4, 5, '2023-03-05 20:37:07'),
(9, 5, 3, '2023-03-05 20:39:34'),
(10, 3, 5, '2023-03-05 20:39:34'),
(11, 5, 2, '2023-03-05 20:42:34'),
(12, 2, 5, '2023-03-05 20:42:34'),
(13, 4, 3, '2023-03-05 20:47:21'),
(14, 3, 4, '2023-03-05 20:47:21'),
(15, 4, 2, '2023-03-05 21:02:05'),
(16, 2, 4, '2023-03-05 21:02:05'),
(17, 6, 4, '2023-03-06 19:41:21'),
(18, 4, 6, '2023-03-06 19:41:21'),
(19, 2, 3, '2023-03-08 18:07:54'),
(20, 3, 2, '2023-03-08 18:07:54');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date_group` timestamp NULL DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `etat` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `user_id`, `date_group`, `name`, `etat`) VALUES
(23, 5, '2023-03-08 19:54:01', 'php', 0),
(22, 4, '2023-03-08 19:54:01', 'php', 1),
(17, 4, '2023-03-06 19:52:40', 'family anoubl', 1),
(18, 6, '2023-03-06 19:52:40', 'family anoubl', 0),
(34, 5, '2023-03-18 20:10:07', 'groupe1', 0),
(33, 3, '2023-03-18 20:10:07', 'groupe1', 0),
(32, 4, '2023-03-18 20:10:07', 'groupe1', 1),
(35, 6, '2023-03-18 20:10:07', 'groupe1', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jour` int(11) NOT NULL,
  `mois` varchar(20) NOT NULL,
  `anne` int(11) NOT NULL,
  `connecter` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `prenom`, `nom`, `email`, `password`, `genre`, `status`, `jour`, `mois`, `anne`, `connecter`) VALUES
(2, 'nourdine', 'anoubl', 'nourdine@nourdine.com', '123456', 'man', 'celebatire', 12, 'October', 1999, 0),
(3, 'karima', 'anoubl', 'kamale@gmail.com', '123456', 'Woman', 'Single', 14, 'january', 1980, 0),
(4, 'Ahmed Amine', 'anoubl', 'ahmed@gmail.com', '123456', 'Man', 'Single', 18, 'october', 1980, 0),
(5, 'yassine', 'tissi', 'yassine@gmail.com', '123456', 'man', 'single', 12, '12', 1999, 0),
(6, 'rayan', 'anoubl', 'rayan@gmail.com', '123456', 'Man', 'Single', 12, 'december', 2001, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
