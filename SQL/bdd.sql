-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 28 juin 2023 à 07:54
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `projet_2023`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `id_achat` int(10) NOT NULL,
  `acheteur_id` int(10) NOT NULL,
  `id_article` int(10) NOT NULL,
  `prix` int(10) NOT NULL,
  `date_achat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_expedition` date NOT NULL,
  `numero_colis` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(10) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `matière` varchar(20) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `prix` int(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `couleur`, `matière`, `titre`, `description`, `prix`, `photo`) VALUES
(5, 'efze', 'oijoij', 'iojoijùo', 'top', 112, 'produit-1685023761-646f6c11e3d5d-sql memo.jpeg'),
(6, 'zaad', 'azaz', 'top', 'zedz', 24435, 'produit-1685023788-646f6c2c0997b-sql memo.jpeg'),
(7, 'zaad', 'azaz', 'top', 'zedz', 24435, 'produit-1685024357-646f6e652f329-sql memo.jpeg'),
(8, 'rouge', 'bois', 'zefzeferfer', 'bureau', 200, 'produit-1685024383-646f6e7fd90b4-Capture d’écran 2023-02-22 à 16.03.41.png'),
(11, 'jaune', 'azedze', 'zedze', 'zedz', 1, '718I-+9AmFL._AC_SX679_.jpg'),
(12, 'jaune', 'azer', 'aaaa', 'aaaa', 1111, 'produit-1685025273-646f71f96c3e2-Capture d’écran 2023-03-02 à 23.22.08.png'),
(13, 'rouge', 'sdfg', 'zedze', 'huhuuh', 16, 'produit-1685278159-64734dcf69000-background.jpeg'),
(15, 'blanc', 'bois', 'bureau', 'zdzed', 11, 'images-4.jpg'),
(16, 'blanc', 'bois', 'bureau', 'zdzed', 11, 'bureau-assis-debout-complet-yourdesk-gris-haut-plateau-blanc-profil_1800x1800.jpeg'),
(19, 'azs', 'azsa', 'azsa', 'azsaz', 1, 'produit-1687454225-64948211c5d16-GUEST_9bba0261-1a73-4fb5-8ea2-882465d4c9e4.jpeg'),
(20, 'zedz', 'zedzed', 'zedzd', 'zedzed', 123, 'produit-1687458254-649491ce93ba9-images.jpg'),
(21, 'erf', 'er', 'er', 'erf', 432, 'images-5.jpg'),
(22, '\'rf\'er', '\'rrf', '&quot;\'rr', 'eferf', 30, 'images-3.jpg'),
(26, 'rouge', 'zed', 'zedze', 'reretr', 111, 'produit-1687695809-649831c118a13-31tqIiAv+2L._AC_US40_.jpg'),
(27, 'rouge', 'tyjyuj', 'yujyuj', 'yujyuj', 12, 'produit-1687695827-649831d39e9a2-71vXktUGmmL._AC_UL400_.jpg'),
(28, 'rouge', 'zed', 'erfg', 'thyh', 1121, 'produit-1687695853-649831edb7c06-7168710_1_6_e7d0a9bf-10bb-4d68-a08b-5d827c4447d4.jpg'),
(29, 'dythtyh', 'tyhtyj', 'tyhty', 'erfer', 34, 'produit-1687695876-649832045d619-download-1.jpg'),
(30, 'dtyhty', 'tyytj', 'tyjty', 'tyjtyjt', 6, 'produit-1687695900-6498321c770d2-images-1.jpg'),
(31, 'df', 'sdfcsd', 'sds', 'gftgf', 4, 'produit-1687696648-64983508d0037-download.jpg'),
(37, 'Noir', 'Tissu', 'Chaise Ergonomique InformatiDesk', '• assise ergonomique avec support lombaire\r\n• revêtement en maille respirable, capitonnage de haute densité\r\n• mécanisme d\'inclinaison de 3 positions \r\n• accoudoirs ajustables en hauteur, coussinets en caoutchouc\r\n• piétement solide en acier chromé\r\n• modèle de grande qualité : certifié din en 1335:2019', 369, 'produit-1687458286-649491ee1d96b-fauteuil-ergonomique-direction.jpeg'),
(44, 'erfe', 'erferf', 'referf', 'erfe', 11, 'produit-1687705694-6498585ea7569-téléchargement.jpeg'),
(45, 'zeze', 'zeze', 'zed', 'zed', 2, 'produit-1687706229-64985a7591efe-siege-baquet-de-bureau-renault-sport-0_1.png'),
(47, 'zdz', 'zedzed', 'zedzed', 'zedzedzed', 2323, 'produit-1687454225-64948211c5d16-GUEST_9bba0261-1a73-4fb5-8ea2-882465d4c9e4.jpeg'),
(49, 'rouge', 'eze', 'zeze', 'zeze', 2323, 'produit-1687706168-64985a389e2e2-siege-baquet-de-bureau-renault-sport-0_1.png'),
(50, '23e23e', '23e23e', '23eze', 'zedze', 2323, 'produit-1687706181-64985a4589ba8-fauteuil-ergonomique-direction.jpeg'),
(52, '23e23', '23e23e', '23e23e', '23e2', 23, 'produit-1687706229-64985a7591efe-siege-baquet-de-bureau-renault-sport-0_1.png'),
(53, '23e', '23e', '23e', '23e', 3, 'produit-1687706244-64985a8497468-thumbs.jpeg'),
(54, '2zd', 'ssdfs', 'fsdfsd', 'sdfsf', 232, 'produit-1687706256-64985a90314cb-fauteuil-ergonomique-direction.jpeg'),
(55, '23e23e', 'dsfsd', 'sdfs', 'sdfs', 232, 'produit-1687706267-64985a9b9681d-siege-baquet-de-bureau-renault-sport-0_1.png'),
(56, 'rouge', '34r', '34r', '34r', 23, 'produit-1687706279-64985aa763412-thumbs.jpeg'),
(57, '323e', '23e', '23e', '23e', 23, 'produit-1687706306-64985ac2ee303-fauteuil-ergonomique-direction.jpeg'),
(58, '23e', '23e23', '23e23e', '23e2', 232, 'produit-1687706318-64985ace32d0e-fauteuil-ergonomique-direction.jpeg'),
(59, '232', '23e23', '2323', '232', 23, 'produit-1687706327-64985ad7e898d-fauteuil-ergonomique-direction.jpeg'),
(60, 'ze', 'zed', 'zed', 'zed', 23, 'produit-1687706756-64985c8410e7d-71vXktUGmmL._AC_UL400_.jpg'),
(61, 'zedze', 'zedze', 'zedzed', 'zedze', 2323, 'produit-1687706790-64985ca670a85-images-4.jpg'),
(62, 'zdzed', 'zedzed', 'zedzed', 'zedzed', 323, 'produit-1687706803-64985cb34ee12-images-3.jpg'),
(63, '2323', '23e23', '23e23ee', '32e2', 23, 'produit-1687706819-64985cc3b4032-images-2.jpg'),
(65, 'rougez', 'zedz', 'zedze', 'zedz', 23, 'produit-1687706906-64985d1a1fd54-download.jpg'),
(66, 'ze', 'zefz', 'zedz', 'zedz', 342323, 'produit-1687707044-64985da4d7263-images-5.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `article_categorie`
--

CREATE TABLE `article_categorie` (
  `article_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article_categorie`
--

INSERT INTO `article_categorie` (`article_id`, `categorie_id`) VALUES
(3, 1),
(14, 3),
(9, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 3),
(20, 4),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 4),
(27, 4),
(28, 4),
(29, 4),
(30, 4),
(31, 4),
(32, 4),
(0, 4),
(0, 4),
(0, 4),
(33, 4),
(0, 4),
(0, 4),
(0, 4),
(34, 4),
(0, 4),
(0, 4),
(35, 4),
(36, 4),
(0, 3),
(37, 3),
(0, 3),
(38, 3),
(39, 4),
(40, 4),
(41, 4),
(43, 4),
(44, 4),
(45, 4),
(46, 4),
(47, 4),
(48, 4),
(49, 3),
(50, 3),
(51, 4),
(52, 3),
(53, 3),
(54, 3),
(55, 3),
(56, 3),
(57, 3),
(58, 3),
(59, 3),
(60, 4),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 4),
(66, 1);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_de_categorie` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_de_categorie`, `image`) VALUES
(1, 'bureaux', 'bureau.png'),
(3, 'chaises', 'fauteuil-ergonomique-direction copie.jpeg'),
(4, 'accessoires', 'support-bras-pour-ecran-simple-ergo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `code_postal` int(5) UNSIGNED ZEROFILL DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `last_name`, `first_name`, `login`, `email`, `password`, `ville`, `code_postal`, `adresse`, `statut`) VALUES
(254, '        profil', 'sessiondansadmin', '        modif1', 'modif11770770@hotmail.com', '$2y$10$qYtdu/9M2XvQU8Ql1rJ6A.zsU1ZJP92e89qX/HlTOTuloZ8biWYC.', '', 00000, '', 1),
(260, 'mare', 'mare', 'mare', 'chmoulik77070@hotmail.com', '$2y$10$z9CxD0GNgK/u/QzdBMtGyu077QXCLCT8Lx9AUVdkDT4eyAFaBie4G', '', 00000, '', 1),
(261, ' robert', ' robert', ' robert', 'robert@yopmail.com', 'a', NULL, NULL, NULL, 0),
(262, ' tres bien', 'tres bien', ' tres bien', 'tresbien@hotmail.com', '$2y$10$BbSS9AAsnA9ajNa8flRl0uvG9OL0pUWhwhYur2Ur0DbHk1m9p0GGq', NULL, NULL, NULL, 0),
(266, 'caronnet', 'vincent', 'top', 'chmoulik770770@hotmail.com', '$2y$10$f3PB9PaIs5zkXkMN9vRkcOeclbyiVP8Ev6LG4GV67eTWUU9y7GU2G', NULL, NULL, NULL, 0),
(268, '  az', 'aziza', '  az', 'az@simon.fr', '$2y$10$FKUnX8HP6AWqNHZJV7s3r.DRGiX0o7WD5mpNXF.pSSaqZeuvJaJHu', NULL, NULL, NULL, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`id_achat`),
  ADD KEY `id_article` (`id_article`),
  ADD KEY `acheteur_id` (`acheteur_id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `achat`
--
ALTER TABLE `achat`
  MODIFY `id_achat` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `achat_ibfk_3` FOREIGN KEY (`acheteur_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
