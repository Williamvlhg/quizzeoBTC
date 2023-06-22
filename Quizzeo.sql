-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 22 juin 2023 à 14:24
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quizzeo`
--

-- --------------------------------------------------------

--
-- Structure de la table `choix`
--

DROP TABLE IF EXISTS `choix`;
CREATE TABLE IF NOT EXISTS `choix` (
  `IdC` int NOT NULL AUTO_INCREMENT,
  `reponse` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `Breponse` tinyint(1) NOT NULL,
  `IDQuestion` int NOT NULL,
  PRIMARY KEY (`IdC`),
  KEY `IDQUIZ` (`IDQuestion`)
) ENGINE=InnoDB AUTO_INCREMENT=1113 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `choix`
--

INSERT INTO `choix` (`IdC`, `reponse`, `Breponse`, `IDQuestion`) VALUES
(1, 'Brésil', 0, 1),
(2, 'Belgique', 0, 1),
(3, 'Argentine', 0, 1),
(4, 'France', 1, 1),
(5, 'La Première Ligue', 0, 2),
(6, 'La Liga', 0, 2),
(7, 'La Ligue des Champions', 1, 2),
(8, 'La Coupe Du Monde', 0, 2),
(9, 'Michael Jordan', 0, 3),
(10, 'James Naismith', 1, 3),
(11, 'Todd Mitchell', 0, 3),
(12, 'Aleksandr Gomelsky', 0, 3),
(13, 'Michael Porter Jr', 1, 4),
(14, 'Rudy Gobert', 0, 4),
(15, 'Jaren Jackson Jr', 0, 4),
(16, 'Tony Parker', 0, 4),
(17, '25,68 m de long et 9,89 m de large', 0, 5),
(18, '19,87 m de long et 3,24 m de large', 0, 5),
(19, '23,77 m de long et 8, 23 m de large', 1, 5),
(20, '22,49 m de long et 7, 85 m de large', 0, 5),
(21, '32', 0, 6),
(22, '73', 1, 6),
(23, '24', 0, 6),
(24, '59', 0, 6),
(25, 'Dieudonné Engandzas', 1, 7),
(26, 'Samuel Eto\'o', 0, 7),
(27, 'Pierre Ghislain Atcho', 0, 7),
(28, 'Jean-Fidèle Diramba', 0, 7),
(29, 'Seine-et-Marne', 0, 8),
(30, 'Neuilly-sur-Marne', 0, 8),
(31, 'Strasbourg-Chalon-sur-Saône', 1, 8),
(32, 'Saint-Denis', 0, 8),
(33, 'Angleterre', 1, 9),
(34, 'Etats-Unis', 0, 9),
(35, 'Canada', 0, 9),
(36, 'France', 0, 9),
(37, 'Andrew Johns', 0, 10),
(38, 'Jonah Lomu', 1, 10),
(39, 'Fabien Galthié', 0, 10),
(40, 'Josh van der Flier', 0, 10),
(41, 'Batte ', 0, 11),
(42, 'Bâton de relais', 0, 11),
(43, 'Club de golf', 1, 11),
(44, 'Raquette', 0, 11),
(45, 'PGA', 1, 12),
(46, 'La Liga', 0, 12),
(47, 'Playoff', 0, 12),
(48, 'Figaro', 0, 12),
(49, 'Tir à l\'arc', 0, 13),
(50, 'Lancer de poids', 1, 13),
(51, 'Course de relais', 0, 13),
(52, 'Volley-ball', 0, 13),
(53, 'Pelé', 1, 14),
(54, 'Platini', 0, 14),
(55, 'Cristiano Ronaldo', 0, 14),
(56, 'Diego Maradona', 0, 14),
(57, 'Antonio José Diaz', 1, 15),
(58, 'Jonathan Mottram', 0, 15),
(59, 'Douglas Brose', 0, 15),
(60, 'Ko Matsuhisa', 0, 15),
(61, 'Grèce', 1, 16),
(62, 'Angleterre', 0, 16),
(63, 'Sénégal', 0, 16),
(65, 'Japon', 0, 16),
(66, '9', 1, 17),
(67, '7', 0, 17),
(68, '5', 0, 17),
(69, '10', 0, 17),
(70, 'Dwayne Johnson', 0, 18),
(71, 'Michael Jordan', 1, 18),
(72, 'John Cena', 0, 18),
(73, 'John Chacellor', 0, 18),
(74, 'Taekwondo', 0, 19),
(75, 'Sumo', 1, 19),
(76, 'Judo', 0, 19),
(77, 'Karaté', 0, 19),
(78, 'Handball', 1, 20),
(79, 'Basketball', 0, 20),
(80, 'Football', 0, 20),
(81, 'Tennis', 0, 20),
(82, '40,76 million km²', 0, 21),
(83, '30,54 km²', 0, 21),
(84, '30,37million km²', 1, 21),
(85, '22,27 km²', 0, 21),
(86, 'Afrique australe', 0, 22),
(87, 'Amérique du Nord', 1, 22),
(88, 'Amérique du Sud', 0, 22),
(89, 'Europe de l\'Est', 0, 22),
(90, 'Climat méditerranéen', 0, 23),
(91, 'Climat tempéré', 1, 23),
(92, 'Climat continental', 0, 23),
(93, 'Climat désertique', 0, 23),
(94, 'Mont Goda', 0, 24),
(95, 'Mont Kenya', 0, 24),
(96, 'Mont Kilimandjaro', 1, 24),
(97, 'Mont Chélia', 0, 24),
(98, '4', 0, 25),
(99, '9', 0, 25),
(100, '5', 0, 25),
(101, '7', 1, 25),
(102, 'Hanoï', 0, 26),
(103, 'Tokyo', 1, 26),
(104, 'Ottawa', 0, 26),
(105, 'Hong Kong', 0, 26),
(106, 'Savane', 0, 27),
(107, 'Forêt claire', 0, 27),
(108, 'Faune', 0, 27),
(109, 'Forêt dense', 1, 27),
(110, 'Pôle Nord ', 1, 28),
(111, 'Etats-Unis', 0, 28),
(112, 'Espagne', 0, 28),
(113, 'Mexique', 0, 28),
(114, 'Incendi', 0, 29),
(115, 'Pollution', 1, 29),
(116, 'Epidémie', 0, 29),
(117, 'Evaporation', 0, 29),
(118, 'Sculpture', 0, 30),
(119, 'Fossile', 1, 30),
(120, 'Hiéroglyphe égyptienne', 0, 30),
(121, 'Plante', 0, 30),
(122, 'Océan Atlantique', 0, 31),
(123, 'Océan Pacifique', 1, 31),
(124, 'Océan Indien', 0, 31),
(125, 'Océan Arctique ', 0, 31),
(126, 'Panama', 0, 32),
(127, 'Guyane', 0, 32),
(128, 'Colombie', 0, 32),
(129, 'Chili', 1, 32),
(130, 'Barcelone', 0, 33),
(131, 'Andalousie', 0, 33),
(132, 'Madrid', 1, 33),
(133, 'Bogota', 0, 33),
(134, '1,135milliard d\'habitants', 1, 34),
(135, '2,74 milliards d\'habitants', 0, 34),
(136, '30,25 millions d\'habitants', 0, 34),
(137, '50,25 million d\'habitants', 0, 34),
(138, 'Moscou', 1, 35),
(139, 'Lisbonne', 0, 35),
(140, 'New Delhi', 0, 35),
(141, 'Istanbul', 0, 35),
(142, 'Ebolowa', 0, 36),
(143, 'Douala', 1, 36),
(144, 'Yaoundé', 0, 36),
(145, 'Bafoussam', 0, 36),
(146, 'Amérique du Sud', 0, 37),
(147, 'Asie du sud-ouest', 0, 37),
(148, 'Océanie', 1, 37),
(149, 'Europe', 0, 37),
(150, 'Sphynx', 0, 38),
(151, 'Khéops', 1, 38),
(152, 'Gizeh', 0, 38),
(153, 'Mykérinos', 0, 38),
(154, 'Horloge', 0, 39),
(155, 'Boussole', 1, 39),
(156, 'Montre', 0, 39),
(157, 'Radar', 0, 39),
(158, 'Sanaa', 1, 40),
(159, 'Tunis', 0, 40),
(160, 'Dubaï', 0, 40),
(161, 'Cancún', 0, 40),
(162, 'une nuit', 0, 41),
(163, 'une fois', 1, 41),
(164, 'un genre', 0, 41),
(165, 'un matin', 0, 41),
(166, 'Monosyllabe', 0, 42),
(167, 'Dissyllabe', 0, 42),
(168, 'Blasphème', 0, 42),
(169, 'Alexandrin', 1, 42),
(170, 'Il faut', 0, 43),
(171, 'Il fallait', 0, 43),
(172, 'Il fallut', 1, 43),
(173, 'Il faudra', 0, 34),
(174, 'mis', 1, 44),
(175, 'mits', 0, 44),
(176, 'mies', 0, 44),
(177, 'mie', 0, 44),
(178, 'lyrique', 1, 45),
(179, 'satirique', 0, 45),
(180, 'comique', 0, 45),
(181, 'épique', 0, 45),
(182, 'Le Malade Imaginaire', 0, 46),
(183, 'Le Cid', 1, 46),
(184, 'Phèdre', 0, 46),
(185, 'Les Fourberies de Scapin', 0, 46),
(186, 'Présent de narration', 1, 47),
(187, 'Présent récent', 0, 47),
(188, 'Présent du futur', 0, 47),
(189, 'Présent duratif', 0, 47),
(190, 'Connotation', 1, 48),
(191, 'Conotation', 0, 48),
(192, 'Conautation', 0, 48),
(193, 'Conottation', 0, 48),
(194, 'croi', 0, 49),
(195, 'croie', 0, 49),
(196, 'crois', 0, 49),
(197, 'croit', 1, 49),
(198, 'Métonymie', 0, 50),
(199, 'Personnification', 1, 50),
(200, 'Périphrase', 0, 50),
(201, 'Oxymore', 0, 50),
(202, 'Litote', 1, 51),
(203, 'Antiphrase', 0, 51),
(204, 'Métaphore', 0, 51),
(205, 'Pléonasme', 0, 51),
(206, '3', 1, 52),
(207, '2', 0, 52),
(208, '4', 0, 52),
(209, '5', 0, 52),
(210, 'de pluie', 0, 53),
(211, 'foin', 1, 53),
(212, 'de neige', 0, 53),
(213, 'de paille', 0, 53),
(214, 'Gracieuse', 0, 54),
(215, 'Laide', 1, 54),
(216, 'Minable', 0, 54),
(217, 'Arrogante', 0, 54),
(218, 'Le Médecin malgré lui', 1, 55),
(219, 'Les Misérables', 0, 55),
(220, 'LE Cid', 0, 55),
(221, 'Micromégas', 0, 55),
(222, 'Conditionnel', 0, 56),
(223, 'Impératif', 0, 56),
(224, 'Indicatif', 1, 56),
(225, 'Subjonctif', 0, 56),
(226, 'Tomber dans les escaliers', 0, 57),
(227, 'Tomber dans les pommes', 1, 57),
(228, 'Tomber dans la boue', 0, 57),
(229, 'Tomber dans la mer', 0, 57),
(230, 'Perfectionner', 1, 58),
(231, 'Adapter', 0, 58),
(232, 'Diriger', 0, 58),
(233, 'Ranger', 0, 58),
(234, 'La cigale et la fourmi', 0, 59),
(235, 'Le travail notre ami', 1, 59),
(236, 'Le laboureur et ses enfants', 0, 59),
(237, 'Le corbeau et le renard', 0, 59),
(238, 'Jean de la Fontaine', 0, 60),
(239, 'Corneille', 0, 60),
(240, 'Voltaire', 1, 60),
(241, 'Molière', 0, 60),
(242, 'Figure à 3 cotés', 1, 61),
(243, 'Figure à 5 côtés', 0, 61),
(244, 'Figure à 4 côtés', 0, 61),
(245, 'Figure à 6 côtés', 0, 61),
(246, 'Côté x 6', 0, 62),
(247, 'Côté/4', 0, 62),
(248, '4x4', 0, 62),
(249, 'Côté + Côté', 0, 62),
(250, '3,25', 0, 63),
(251, '2,25', 1, 63),
(252, '4,50', 0, 63),
(253, '5,05', 0, 63),
(254, '756', 0, 64),
(255, '1024', 0, 64),
(256, '1350', 1, 64),
(257, '2249', 0, 64),
(258, '2', 1, 65),
(259, '4', 0, 65),
(260, '2,5', 0, 65),
(261, '2,6', 0, 65),
(262, 'AC²=AB²-BC²', 0, 66),
(263, 'AC²=AB²+BC²', 1, 66),
(264, 'AC²= AB²x BC²', 0, 66),
(265, 'AC²=AB²/BC²', 0, 66),
(266, '370L', 0, 67),
(267, '380L', 0, 67),
(268, '367L', 0, 67),
(269, '375L', 1, 67),
(270, 'Division euclidienne', 0, 68),
(271, 'Théorème de Thalès', 0, 68),
(272, 'Pivot de Gauss', 1, 68),
(273, 'Méthode du déterminant', 0, 68),
(274, '2xpixr', 1, 69),
(275, 'pix2', 0, 69),
(276, 'dx2xpi', 0, 69),
(277, 'rxpi', 0, 69),
(278, 'Déterminant', 0, 70),
(279, 'Discriminant', 1, 70),
(280, 'Simplification', 0, 70),
(281, 'Méthode par substitution', 0, 70),
(282, '20', 0, 71),
(283, '26', 1, 71),
(284, '30', 0, 71),
(285, '32', 0, 71),
(286, 'Le litre', 1, 72),
(287, 'Le gramme', 0, 72),
(288, 'Le mètre', 0, 72),
(289, 'Le mètre cube', 0, 72),
(290, '50', 1, 73),
(291, '500', 0, 73),
(292, '55', 0, 73),
(293, '5000', 0, 73),
(294, '1004', 0, 74),
(295, '1200', 0, 74),
(296, '1146', 0, 74),
(297, '1137', 1, 74),
(298, '2', 0, 75),
(299, '4', 1, 75),
(300, '6', 0, 75),
(301, '8', 0, 75),
(302, 'Hexagone', 0, 76),
(303, 'Pentagone', 1, 76),
(304, 'Carré', 0, 76),
(305, 'Rectangle', 0, 76),
(306, '4,5', 0, 77),
(307, '5,6', 0, 77),
(308, '7,9', 1, 77),
(309, '9,10', 0, 77),
(310, '47', 0, 78),
(311, '58', 0, 78),
(312, '48', 1, 78),
(313, '68', 0, 78),
(314, 'f(x)-f(x₀)\r\n________   =f\'(x₀)\r\n x-x₀', 1, 79),
(315, 'f(x₀)-f(x)\r\n________   =f\'(x₀)\r\n x-x₀', 0, 79),
(316, 'f(x)-f\'(x)\r\n________   =f\'(x₀)\r\n x-x₀', 0, 79),
(317, 'f\'(x₀)-f(x)\r\n________   =f\'(x₀)\r\n x\'-x₀', 0, 79),
(318, 'Droites parallèles', 0, 80),
(319, 'Droites sécantes', 0, 80),
(320, 'Droites obliques', 0, 80),
(321, 'Droites perpendiculaires', 1, 80);

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `IdQt` int NOT NULL,
  `intituléQuestion` varchar(255) NOT NULL,
  `Difficulte` int NOT NULL,
  `datedecreation` date NOT NULL,
  `IDQuizz` int NOT NULL,
  PRIMARY KEY (`IdQt`),
  KEY `idquizz` (`IDQuizz`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`IdQt`, `intituléQuestion`, `Difficulte`, `datedecreation`, `IDQuizz`) VALUES
(1, 'Quel est le pays qui a gagné la Coupe du Monde en 1998?', 1, '2023-06-20', 1),
(2, 'Comment appelle-t-on la plus grande compétition du football?', 1, '2023-06-20', 1),
(3, 'Qui a créé le basketball?', 1, '2023-06-20', 1),
(4, 'Lequel de ces joueurs joue en ailier droit en NBA?', 1, '2023-06-20', 1),
(5, 'Combien mesure un terrain de tennis?', 1, '2023-06-20', 1),
(6, 'Combien de titres Serena Williams a-t-elle remporté?', 1, '2023-06-20', 1),
(7, 'Qui était le Président de la FEGAFOOT en 2009?', 1, '2023-06-20', 1),
(8, 'Dans quelle ville se sont déroulés les Play off de basketball de France en 2013?', 1, '2023-06-20', 1),
(9, 'Le rugby est originaire de quel pays ?', 1, '0000-00-00', 1),
(10, 'Qui a été élu meilleur joueur de rugby en 1994?', 1, '2023-06-20', 1),
(11, 'Comment appelle-t-on l\'outil servant à taper dans une balle de golf?', 1, '2023-06-20', 1),
(12, 'Comment appelle-t-on le tournoi de Golf?', 1, '2023-06-20', 1),
(13, 'Comment appelle-t-on le sport dans lequel il faut lancer un  boulet en métal le plus loin possible?', 1, '2023-06-20', 1),
(14, '\"Il semble que Dieu m\'ait mis sur terre avec comme mission de jouer au football\"', 1, '2023-06-20', 1),
(15, 'Qui a été champion du Monde de Karaté en 2012?', 1, '2023-06-20', 1),
(16, 'Pays d\'origine de la Lutte.', 1, '2023-06-20', 1),
(17, 'Combien de joueurs a-t-on besoin pour effectuer un match de baseball?', 1, '2023-06-20', 1),
(18, 'Lequel de ces joueurs ont commencé par le baseball?', 1, '2023-06-20', 1),
(19, 'Mentionné la première fois en 712 dans un livre et pratiqué par deux personnes de gros gabarits aux jeux olympiques.', 1, '2023-06-20', 1),
(20, 'Sport parfois confondu au volley-ball.', 1, '2023-06-20', 1),
(21, 'Quelle est la superficie de l\'Afrique ?', 1, '2023-06-21', 2),
(22, 'Où est situé le Groenland?', 1, '2023-06-21', 2),
(23, 'Quel est le climat de la France?', 1, '2023-06-21', 2),
(24, 'Comment s\'appelle la plus grande montagne d\'Afrique ?', 1, '2023-06-21', 2),
(25, 'Combien de couches constituent l\'atmosphère? ', 1, '2023-06-21', 2),
(26, 'Quel est la capitale du Japon?', 1, '2023-06-21', 2),
(27, 'Humidité , précipitations abondantes , opposées aux forêts claires.', 1, '2023-06-21', 2),
(28, 'Où se trouve le désert polaire?', 1, '2023-06-21', 2),
(29, 'Phénomène entrainant la dégradation de l\'environnement et de l\'air. ', 1, '2023-06-21', 2),
(30, 'Monument représentant l\'organisme d\'un être vivant conservé dans des roches sédimentaires.', 1, '2023-06-21', 2),
(31, 'Quel est plus grand océan?', 1, '2023-06-21', 2),
(32, 'Pays situé au sud-ouest de l\'Amérique du sud.', 1, '2023-06-21', 2),
(33, 'Quel est la capitale de l\'Espagne?', 1, '2023-06-21', 2),
(34, 'Nombre d\'habitants en Chine en 1990.', 1, '2023-06-21', 2),
(35, 'Quel est la capitale de la Russie?', 1, '2023-06-21', 2),
(36, 'Quelle est la ville économique du Cameroun?', 1, '2023-06-21', 2),
(37, 'Où se trouve la Nouvelle-Zélande?', 1, '2023-06-21', 2),
(38, 'Comment s\'appelle la plus grande pyramide d\'Egypte?', 1, '2023-06-21', 2),
(39, 'Objet circulaire fonctionnant avec une aiguille aimantée montée sur un pivot.', 1, '2023-06-21', 2),
(40, 'Quel est la capitale du Yémen?', 1, '2023-06-21', 2),
(41, '\"Il était...\"', 1, '2023-06-21', 3),
(42, 'Comment appelle-t-on un ver de 12 syllabes?', 1, '2023-06-21', 3),
(43, 'Conjugaison du verbe falloir au passé simple de l\'indicatif.', 1, '2023-06-21', 3),
(44, '\"Ils me les ont…\"', 1, '2023-06-21', 3),
(45, 'Poème exprimant les sentiments aux paroles rythmés telle un chant ou déclaration musicalisée est de genre...', 1, '2023-06-21', 3),
(46, '\"Vas, je ne te hais point.\"', 1, '2023-06-21', 3),
(47, 'Présent utilisé dans un texte narratif.', 1, '2023-06-21', 3),
(48, 'Choisir la bonne orthographe.', 1, '2023-06-21', 3),
(49, 'Je crois , tu crois ,il...', 1, '2023-06-21', 3),
(50, '\"Le cabri a dépanné la tortue pendant le trajet\".', 1, '2023-06-21', 3),
(51, 'Quel est la figure de style dans laquelle on dit peu pour exprimer beaucoup?', 1, '2023-06-22', 3),
(52, 'Combien y a-t-il de registres de langues?', 1, '2023-06-22', 3),
(53, '\"Chercher une aiguille dans une botte de...', 1, '2023-06-22', 3),
(54, 'Antonyme de \"Belle\".', 1, '2023-06-22', 3),
(55, 'Dans quel roman trouve-t-on le personnage Sganarelle?', 1, '2023-06-22', 3),
(56, 'Quel est le mode de l\'imparfait?', 1, '2023-06-22', 3),
(57, 'Choisir la bonne expression.', 1, '2023-06-22', 3),
(58, 'Synonyme de \"améliorer\".', 1, '2023-06-22', 3),
(59, '\"Ne soyez pas comme les chats: Friands de poissons , ils détestent la nage\". ', 1, '2023-06-22', 3),
(60, 'Qui est l\'auteur du roman \"Candide ou L\'optimiste\"?', 1, '2023-06-22', 3),
(61, 'Qu\'est ce qu\'un triangle?', 1, '2023-06-22', 4),
(62, 'Quel est le périmètre du carré?', 1, '2023-06-22', 4),
(63, '(1+2)x(3/4)=', 1, '2023-06-22', 4),
(64, '54x25=', 2, '2023-06-22', 4),
(65, '2x = 4;donc x=', 2, '2023-06-22', 4),
(66, 'Quelle est la formule du théorème de Pythagore?', 2, '2023-06-22', 4),
(67, '350L + 25L =', 1, '2023-06-22', 4),
(68, 'Méthode permettant de résoudre les systèmes d\'équations à plusieurs inconnues.', 2, '2023-06-22', 4),
(69, 'Formule du périmètre du cercle.', 1, '2023-06-22', 4),
(70, 'Comment appelle-t-ton la propriété qui permet de déterminer les racines d\'une équation du second degré?', 2, '2023-06-22', 4),
(71, 'Jean a 10 crapeaux et Sélène en a 12. Quel est le total des crapeaux sachant que Roland leur ajoute 2 chacun. ', 2, '2023-06-22', 4),
(72, 'Quel est la mesure de capacité?', 1, '2023-06-22', 4),
(73, '10x5 =', 1, '2023-06-22', 4),
(74, '2274/2 =', 0, '2023-06-22', 4),
(75, 'Quelle est la racine carré de 16?', 2, '2023-06-22', 4),
(76, 'Comment s\'appelle la figure géométrique ayant 5 cotés?', 1, '2023-06-22', 4),
(77, '1,3,5,...,...,11', 1, '2023-06-22', 4),
(78, '12, 24, 36, ...,', 1, '2023-06-22', 4),
(79, 'Formule pour calculer le nombre dérivé.', 2, '2023-06-22', 4),
(80, 'Deux droites formant un angle droit.', 1, '2023-06-22', 4);

-- --------------------------------------------------------

--
-- Structure de la table `quizz`
--

DROP TABLE IF EXISTS `quizz`;
CREATE TABLE IF NOT EXISTS `quizz` (
  `IdQz` int NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Difficulte` int NOT NULL,
  `Datedecreation` date NOT NULL,
  `IDQuizzeur` int NOT NULL,
  PRIMARY KEY (`IdQz`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `quizz`
--

INSERT INTO `quizz` (`IdQz`, `Titre`, `Difficulte`, `Datedecreation`, `IDQuizzeur`) VALUES
(1, 'Sport\r\n', 1, '2023-06-19', 1),
(2, 'Géographie', 1, '2023-06-19', 1),
(3, 'Français', 1, '2023-06-19', 1),
(4, 'Mathématique', 1, '2023-06-19', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) NOT NULL,
  `email` varchar(25) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin', 'Admin'),
(2, 'rami2.0', 'rami@gmail.com', '$2y$10$VGkTQoozNghUxobwu0L74O3o0.UYgrMc0WE7pJUfaPG9wEYGoh9gG');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `choix`
--
ALTER TABLE `choix`
  ADD CONSTRAINT `IDQUIZ` FOREIGN KEY (`IDQuestion`) REFERENCES `question` (`IdQt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `idquizz` FOREIGN KEY (`IDQuizz`) REFERENCES `quizz` (`IdQz`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
