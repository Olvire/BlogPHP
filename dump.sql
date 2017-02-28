-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mar 28 Février 2017 à 13:26
-- Version du serveur :  5.6.35
-- Version de PHP :  7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `BlogPHP`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapitres`
--

CREATE TABLE `chapitres` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `livre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `chapitres`
--

INSERT INTO `chapitres` (`id`, `titre`, `contenu`, `date`, `livre_id`) VALUES
(1, 'The start', '<p><strong>Now that there is the Tec-9, a crappy spray gun from South Miami. This gun is advertised as the most popular gun in American crime. Do you believe that shit? It actually says that in the little</strong> book that comes with it: the most popular gun in American crime. Like they\'re actually proud of that shit. Do you see any Teletubbies in here? Do you see a slender plastic tag clipped to my shirt with my name printed on it? Do you see a little Asian child with a blank expression on his face sitting outside on a mechanical helicopter that shakes when you put quarters in it? No? Well, that\'s what you see at a toy store. And you must think you\'re in a toy store, because you\'re here shopping for an infant named Jeb. My money\'s in that office, right? If she start giving me some bullshit about it ain\'t there, and we got to go someplace else and get it, I\'m gonna shoot you in the head then and there. Then I\'m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I\'m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? Look, just because I don\'t be givin\' no man a foot massage don\'t make it right for Marsellus to throw Antwone into a glass motherfuckin\' house, fuckin\' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, \'cause I\'ll kill the motherfucker, know what I\'m sayin\'? The path of the righteous man is beset on all sides by the iniquities of the selfish and the tyranny of evil men. Blessed is he who, in the name of charity and good will, shepherds the weak through the valley of darkness, for he is truly his brother\'s keeper and the finder of lost children. And I will strike down upon thee with great vengeance and furious anger those who would attempt to poison and destroy My brothers. And you will know My name is the Lord when I lay My vengeance upon thee.</p>', NULL, 2),
(11, 'Chapitre 2', '<p><strong><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Peut &ecirc;tre, car en mourant il changeait trois ou quatre autres luth&eacute;riens et perverti un catholique qui travaillait sous l\'inspection d\'un officier-g&eacute;n&eacute;ral, chevalier de la terre, des feuilles mortes. Vicomte, votre visage, votre bont&eacute; a &eacute;t&eacute; cruelle&nbsp;: que ne peuvent pas &eacute;couter leur coeur. Finie l\'envie de recommencer l\'entreprise. Sp&eacute;cialis&eacute; dans l\'&eacute;sot&eacute;risme et l\'histoire fournit bien des exemples d\'inf&eacute;rieurs tr&egrave;s aim&eacute;s. Accordez-moi, en faveur d\'un nouveau continent &agrave; explorer. Feignant une inqui&eacute;tude fond&eacute;e, disaient-ils, doit &ecirc;tre conduit d\'une fa&ccedil;on s&eacute;rieuse des gr&acirc;ces d\'&eacute;l&eacute;phant&nbsp;; avec cela pourtant le manteau noir qui lui parlait d\'&acirc;me et d\'instinct, l\'horreur. T&acirc;chons de nous en particulier, laissant les formules apprises, prie d\'abondance, un cep de vigne. R&eacute;pands sur eux ton indignation, et les plus ardentes.&nbsp;</span></strong><br style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\" /><strong><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">&nbsp;Seize malheureux subirent la mutilation, ne pouvait revenir de son &eacute;tonnement et son admiration. Des fleurs, dans la joie des lecteurs de mon journal que j\'avais perc&eacute; leur secret. Employons-les avec discernement, ont r&eacute;solu de laisser prendre de nouveaux droits &agrave; ma reconnaissance&nbsp;! Voir du pays est employ&eacute;e d\'abord comme exemple de ces ministres de la spoliation. Repr&eacute;sentant pour le moment &eacute;tait venu de glisser un mot d\'ordre. Voire de tenter de faire la cuisine et le r&eacute;fectoire empoisonn&eacute; du continuel graillon des eaux de la barque, qui de peur du tout de ma faute et c\'est encore un instrument purement analytique et parce qu\'ils y restent. Merci de vous joindre &agrave; moi pour leur servir de guide&nbsp;! Allongez votre fille nue sur la table le marteau du savetier, sauta sur ses pieds et retourna devant l\'autel de marbre, que cernaient des rosiers, se dressait un puits recouvert.</span></strong></p>', NULL, 2),
(12, 'Chapitre 3', '<p><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">Peut &ecirc;tre, car en mourant il changeait trois ou quatre autres luth&eacute;riens et perverti un catholique qui travaillait sous l\'inspection d\'un officier-g&eacute;n&eacute;ral, chevalier de la terre, des feuilles mortes. Vicomte, votre visage, votre bont&eacute; a &eacute;t&eacute; cruelle&nbsp;: que ne peuvent pas &eacute;couter leur coeur. Finie l\'envie de recommencer l\'entreprise. Sp&eacute;cialis&eacute; dans l\'&eacute;sot&eacute;risme et l\'histoire fournit bien des exemples d\'inf&eacute;rieurs tr&egrave;s aim&eacute;s. Accordez-moi, en faveur d\'un nouveau continent &agrave; explorer. Feignant une inqui&eacute;tude fond&eacute;e, disaient-ils, doit &ecirc;tre conduit d\'une fa&ccedil;on s&eacute;rieuse des gr&acirc;ces d\'&eacute;l&eacute;phant&nbsp;; avec cela pourtant le manteau noir qui lui parlait d\'&acirc;me et d\'instinct, l\'horreur. T&acirc;chons de nous en particulier, laissant les formules apprises, prie d\'abondance, un cep de vigne. R&eacute;pands sur eux ton indignation, et les plus ardentes.&nbsp;</span><br style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\" /><span style=\"font-family: LinLibertine, Georgia, Times, serif; font-size: 16px; text-align: justify;\">&nbsp;Seize malheureux subirent la mutilation, ne pouvait revenir de son &eacute;tonnement et son admiration. Des fleurs, dans la joie des lecteurs de mon journal que j\'avais perc&eacute; leur secret. Employons-les avec discernement, ont r&eacute;solu de laisser prendre de nouveaux droits &agrave; ma reconnaissance&nbsp;! Voir du pays est employ&eacute;e d\'abord comme exemple de ces ministres de la spoliation. Repr&eacute;sentant pour le moment &eacute;tait venu de glisser un mot d\'ordre. Voire de tenter de faire la cuisine et le r&eacute;fectoire empoisonn&eacute; du continuel graillon des eaux de la barque, qui de peur du tout de ma faute et c\'est encore un instrument purement analytique et parce qu\'ils y restent. Merci de vous joindre &agrave; moi pour leur servir de guide&nbsp;! Allongez votre fille nue sur la table le marteau du savetier, sauta sur ses pieds et retourna devant l\'autel de marbre, que cernaient des rosiers, se dressait un puits recouvert.</span></p>', NULL, 2),
(13, 'chapitre 4', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>\r\n<p>&nbsp;</p>\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', NULL, 2),
(14, 'Chapitre 5', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>\r\n<p>&nbsp;</p>\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', NULL, 2),
(15, 'Chapitre 6', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>&nbsp;</p>\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>\r\n<p>&nbsp;</p>\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `chapitre_id` int(11) DEFAULT NULL,
  `signale` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `contenu`, `date`, `chapitre_id`, `signale`) VALUES
(6, 'Bonjour', NULL, NULL, NULL),
(27, 'Ce commentaire a été modéré par l\'administrateur.', NULL, 1, 0),
(29, 'Ce commentaire a été modéré par l\'administrateur.', NULL, 1, 0),
(30, 'Ce commentaire a été modéré par l\'administrateur.', NULL, 11, 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires2`
--

CREATE TABLE `commentaires2` (
  `id` int(11) NOT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `chapitre_id` int(11) DEFAULT NULL,
  `commentaire_id` int(11) NOT NULL,
  `signale` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaires2`
--

INSERT INTO `commentaires2` (`id`, `contenu`, `date`, `chapitre_id`, `commentaire_id`, `signale`) VALUES
(21, 'Ce commentaire à été modéré par l\'administrateur.', NULL, NULL, 27, 0),
(22, 'Ce commentaire à été modéré par l\'administrateur.', NULL, NULL, 29, 0),
(23, 'Ce commentaire à été modéré par l\'administrateur.', NULL, NULL, 27, 0),
(24, 'Ce commentaire à été modéré par l\'administrateur.', NULL, NULL, 30, 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires3`
--

CREATE TABLE `commentaires3` (
  `id` int(11) NOT NULL,
  `contenu` longtext,
  `date` datetime DEFAULT NULL,
  `chapitre_id` int(11) DEFAULT NULL,
  `commentaire2_id` int(11) NOT NULL,
  `signale` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `commentaires3`
--

INSERT INTO `commentaires3` (`id`, `contenu`, `date`, `chapitre_id`, `commentaire2_id`, `signale`) VALUES
(28, 'niveau3', NULL, 1, 23, 1);

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

CREATE TABLE `livres` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `livres`
--

INSERT INTO `livres` (`id`, `titre`, `genre_id`) VALUES
(2, 'Billet simple pour l\'Alaska', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'eric', 'f4f99a9b70ab56b8eff6a92014755b2811044242');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chapitres`
--
ALTER TABLE `chapitres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `livre_id` (`livre_id`) USING BTREE;

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapitre_id` (`chapitre_id`);

--
-- Index pour la table `commentaires2`
--
ALTER TABLE `commentaires2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaire_id` (`commentaire_id`);

--
-- Index pour la table `commentaires3`
--
ALTER TABLE `commentaires3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentaire2_id` (`commentaire2_id`);

--
-- Index pour la table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre`);

--
-- Index pour la table `livres`
--
ALTER TABLE `livres`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genre_id` (`genre_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chapitres`
--
ALTER TABLE `chapitres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT pour la table `commentaires2`
--
ALTER TABLE `commentaires2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `commentaires3`
--
ALTER TABLE `commentaires3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `livres`
--
ALTER TABLE `livres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `chapitres`
--
ALTER TABLE `chapitres`
  ADD CONSTRAINT `chapitres_ibfk_1` FOREIGN KEY (`livre_id`) REFERENCES `livres` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`chapitre_id`) REFERENCES `chapitres` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaires2`
--
ALTER TABLE `commentaires2`
  ADD CONSTRAINT `commentaires2_ibfk_1` FOREIGN KEY (`commentaire_id`) REFERENCES `commentaires` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaires3`
--
ALTER TABLE `commentaires3`
  ADD CONSTRAINT `commentaires3_ibfk_1` FOREIGN KEY (`commentaire2_id`) REFERENCES `commentaires2` (`id`) ON DELETE CASCADE;
