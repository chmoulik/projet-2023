-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 06 juin 2023 à 15:49
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
  `matière` varchar(255) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `prix` int(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `couleur`, `matière`, `titre`, `description`, `prix`, `photo`) VALUES
(3, 'samirmerci', 'azedae', 'zeze', 'zezef', 111, 'produit-1684171403-64626a8bd932d-Capture d’écran 2022-12-05 à 13.27.14.png'),
(5, 'efze', 'oijoij', 'iojoijùo', 'top', 112, 'produit-1685023761-646f6c11e3d5d-sql memo.jpeg'),
(6, 'zaad', 'azaz', 'top', 'zedz', 24435, 'produit-1685023788-646f6c2c0997b-sql memo.jpeg'),
(7, 'zaad', 'azaz', 'top', 'zedz', 24435, 'produit-1685024357-646f6e652f329-sql memo.jpeg'),
(8, 'rouge', 'bois', 'zefzeferfer', 'bureau', 200, 'produit-1685024383-646f6e7fd90b4-Capture d’écran 2023-02-22 à 16.03.41.png'),
(9, 'jaune', 'zefz', 'zefzf', 'zefzfe', 1, 'produit-1685024641-646f6f81b0591-Capture d’écran 2022-12-05 à 13.27.14.png'),
(10, 'jaune', 'zefz', 'zefzf', 'zefzfe', 1, 'produit-1685024937-646f70a9062b7-Capture d’écran 2022-12-05 à 13.27.14.png'),
(11, 'jaune', 'azedze', 'zedze', 'zedz', 1, 'produit-1685024951-646f70b7cd51d-Capture d’écran 2022-12-05 à 13.27.14.png'),
(12, 'jaune', 'azer', 'aaaa', 'aaaa', 1111, 'produit-1685025273-646f71f96c3e2-Capture d’écran 2023-03-02 à 23.22.08.png'),
(13, 'rouge', 'sdfg', 'zedze', 'huhuuh', 16, 'produit-1685278159-64734dcf69000-background.jpeg'),
(14, 'jaune', 'bois', 'zedze', 'zdzdzd', 41, 'produit-1685278539-64734f4b8a1b8-background.jpeg');

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
(9, 1);

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
(3, 'chaises', 'produit-1684167972-64625d24d9755-Capture d’écran 2022-12-05 à 13.27.14.png'),
(4, 'accessoires', '');

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
(261, ' robert', ' robert', ' robert', 'robert@yopmail.com', '$2y$10$BGqBY8YNIRgxUG8v10YH5e6jRHH7d9JoYWI4ovS.yYy92EY3dUrgW', NULL, NULL, NULL, 0),
(262, ' tres bien', 'tres bien', ' tres bien', 'tresbien@hotmail.com', '$2y$10$BbSS9AAsnA9ajNa8flRl0uvG9OL0pUWhwhYur2Ur0DbHk1m9p0GGq', NULL, NULL, NULL, 0),
(263, 'belhadry', 'belhadry', 'belhadry', 'belhadry@erferf.com', '$2y$10$SVTLDHDtalGTVBXCsu6mbOkbf8bFPdBhpxi54n0sLWvrDF/Mimq7m', NULL, NULL, NULL, 0),
(264, 'simon', 'simon', 'simon', 'simon@simon.fr', '$2y$10$2OKvOCJnuj5b9bZBT2qEveYNCozjb.sLCqz4iQy4T6k7JRHBzuk3S', NULL, NULL, NULL, 0);

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
  MODIFY `id_article` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=265;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_2` FOREIGN KEY (`id_article`) REFERENCES `article` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `achat_ibfk_3` FOREIGN KEY (`acheteur_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
