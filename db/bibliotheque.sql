-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 19 nov. 2019 à 08:00
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `mat_agent` varchar(50) NOT NULL,
  `nom_agent` varchar(50) NOT NULL,
  `postnom_agent` varchar(50) NOT NULL,
  `prenom_agent` varchar(50) NOT NULL,
  `uname_agent` varchar(50) NOT NULL,
  `upass_agent` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`mat_agent`, `nom_agent`, `postnom_agent`, `prenom_agent`, `uname_agent`, `upass_agent`) VALUES
('1223', 'ikobia', 'ikobia', 'yvve', 'yve', '$2y$10$w/a3qNaiV7mVFodo1B7RMOm/iRIp9ExjdbMhd0pFfNVzAcB8VbPeW'),
('1235', 'belangani', 'bellas', 'patrick', 'bella', '$2y$10$1sQ4ujyENR16yYEVQSWNuOR76SuSWNJjs6SkZWSC8C0EO6ZrgNrLW'),
('1235', 'bella', 'bella', 'patrick', 'bella', '$2y$10$A7OWNS3.4TP5YM9tSHHW5.hRgi2e8o.0Ky1Ot0BGdrZ0ZuN924/wW');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `id_auteur` varchar(20) NOT NULL,
  `libelle_auteur` varchar(100) NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `libelle_auteur`) VALUES
('Pnmls', 'Pnmls'),
('Gouv', 'Gouvernement'),
('PT', 'Partenaire'),
('Unive', 'Université');

-- --------------------------------------------------------

--
-- Structure de la table `category_usager`
--

DROP TABLE IF EXISTS `category_usager`;
CREATE TABLE IF NOT EXISTS `category_usager` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_cat_usag` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category_usager`
--

INSERT INTO `category_usager` (`id_cat`, `libelle_cat_usag`) VALUES
(1, 'Professeur'),
(2, 'Etudiant'),
(3, 'Personnel d\'entreprise'),
(4, 'Chercheur'),
(5, 'Elève'),
(6, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `centre`
--

DROP TABLE IF EXISTS `centre`;
CREATE TABLE IF NOT EXISTS `centre` (
  `id_centre` varchar(30) NOT NULL,
  `libelle_centre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_centre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `centre`
--

INSERT INTO `centre` (`id_centre`, `libelle_centre`) VALUES
('ET', 'Etude'),
('Pub', 'Publication'),
('RU', 'Recherches universitaires'),
('-', '-'),
('EQ', 'Enquêtes');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `id_classe` varchar(30) NOT NULL,
  `libelle_classe` varchar(200) NOT NULL,
  PRIMARY KEY (`id_classe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id_classe`, `libelle_classe`) VALUES
('AST', 'Amélioration de l’accès aux soins et traitement '),
('BPD', 'Bonnes pratiques et Directives '),
('DP', 'Développements et pauvreté '),
('FOR', 'Formations '),
('JDH', 'Justices et Droits Humains '),
('PN', 'Politique Nationale '),
('PL', 'Plans '),
('PREV', 'Prévention du VIH/sida '),
('PEF', 'Promotion d’un environnement favorable aux PVV et PA'),
('RAA', 'Rapport annuel et autres '),
('RE', 'Recherches et Enquêtes '),
('TL', 'Textes légaux '),
('DA', 'Documents administratifs '),
('-', '-');

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

DROP TABLE IF EXISTS `consultation`;
CREATE TABLE IF NOT EXISTS `consultation` (
  `id_cons` int(100) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `jour_cons` int(2) NOT NULL,
  `mois_cons` int(2) NOT NULL,
  `annee_cons` int(4) NOT NULL,
  `heure_cons` varchar(15) NOT NULL,
  `nombre` int(50) NOT NULL,
  PRIMARY KEY (`id_cons`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `consultation`
--

INSERT INTO `consultation` (`id_cons`, `id`, `jour_cons`, `mois_cons`, `annee_cons`, `heure_cons`, `nombre`) VALUES
(1, 1, 28, 8, 2019, '09:56:31', 1),
(2, 1, 28, 8, 2019, '10:00:48', 1),
(3, 1, 28, 8, 2019, '10:00:57', 1),
(4, 1, 28, 8, 2019, '10:01:06', 1),
(5, 1, 28, 8, 2019, '10:01:15', 1),
(6, 2, 28, 8, 2019, '10:02:55', 1),
(7, 2, 28, 8, 2019, '10:03:42', 1),
(8, 1, 26, 9, 2019, '16:17:47', 1),
(9, 1, 27, 9, 2019, '05:59:22', 1),
(10, 1, 27, 9, 2019, '08:59:17', 1),
(11, 1, 27, 9, 2019, '08:59:33', 1),
(12, 1, 27, 9, 2019, '09:00:40', 1),
(13, 1, 27, 9, 2019, '09:00:59', 1),
(14, 1, 27, 9, 2019, '10:26:53', 1),
(15, 1, 2, 10, 2019, '13:12:36', 1),
(16, 1, 21, 10, 2019, '12:12:24', 1),
(17, 1, 6, 11, 2019, '10:23:49', 1),
(18, 1, 7, 11, 2019, '13:43:34', 1),
(19, 1, 8, 11, 2019, '09:55:00', 1),
(20, 1, 10, 11, 2019, '06:56:20', 1),
(21, 1, 11, 11, 2019, '13:52:51', 1),
(22, 1, 12, 11, 2019, '10:12:06', 1),
(23, 1, 12, 11, 2019, '13:07:48', 1),
(24, 1, 13, 11, 2019, '10:46:59', 1),
(25, 1, 13, 11, 2019, '14:01:05', 1),
(26, 1, 13, 11, 2019, '19:44:49', 1),
(27, 1, 14, 11, 2019, '12:39:47', 1),
(28, 1, 14, 11, 2019, '14:16:30', 1),
(29, 1, 15, 11, 2019, '10:27:34', 1),
(30, 1, 17, 11, 2019, '10:31:00', 1),
(31, 1, 18, 11, 2019, '09:16:22', 1),
(32, 1, 18, 11, 2019, '18:48:55', 1);

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

DROP TABLE IF EXISTS `document`;
CREATE TABLE IF NOT EXISTS `document` (
  `id_doc` int(11) NOT NULL AUTO_INCREMENT,
  `id_classe` varchar(10) NOT NULL,
  `id_type` varchar(10) NOT NULL,
  `id_centre` varchar(20) NOT NULL,
  `id_auteur` varchar(20) NOT NULL,
  `titre_ouvrage` varchar(250) NOT NULL,
  `auteur` text NOT NULL,
  `nombre_page` int(10) NOT NULL,
  `maison_edit` varchar(200) NOT NULL,
  `annee_edit` varchar(4) NOT NULL,
  `organ_fin` varchar(230) NOT NULL,
  `fichier_livre` text NOT NULL,
  `lien_fichier_livre` text NOT NULL,
  `images` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_doc`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `document`
--

INSERT INTO `document` (`id_doc`, `id_classe`, `id_type`, `id_centre`, `id_auteur`, `titre_ouvrage`, `auteur`, `nombre_page`, `maison_edit`, `annee_edit`, `organ_fin`, `fichier_livre`, `lien_fichier_livre`, `images`, `description`) VALUES
(1, 'PREV', 'RAP', '-', 'PT', 'Rapport Annuel PNLS 2015', 'PNLS', 102, 'mediaspaul', '2016', 'Unicef', 'Rapport Annuel PNLS 2015.pdf', 'uploads/Rapport Annuel PNLS 2015.pdf', 'Capture8.PNG', 'L’information, l’éducation et la communication de la population en vue du changement de comportement et d’un accès large aux SERVICES de prévention, soins, traitement et soutien en rapport '),
(2, 'JDH', '-', '-', 'PT', 'Revu du Cadre Juridique Congolais de la Riposte Au VIH/SIDA', 'PNUD', 89, 'Pnmls', '2009', 'Unesco', 'PNUD - REVUE DU CADRE JURIDIQUE CONGOLAIS DE LA RIPOSTE AU  VIH-SIDA.pdf', 'uploads/PNUD - REVUE DU CADRE JURIDIQUE CONGOLAIS DE LA RIPOSTE AU  VIH-SIDA.pdf', 'Capture2.PNG', 'Ces droits de l’homme et libertés fondamentales sont consignés dans des traités et conventions internationaux que la RDC a dûment ratifiés ainsi que dans la Constitution et les lois congolaises. '),
(4, 'PREV', 'RAP', '-', 'Pnmls', 'Rapport annuel sur la riposte Nationale au VIH/sida en 2014', 'PNMLS', 90, 'Pnmls', '2018', 'PNUD', 'Rapport PNMLS 2014.pdf', 'uploads/Rapport PNMLS 2014.pdf', 'Capture6.PNG', ' 	L’information, l’éducation et la communication de la population en vue du changement de comportement et d’un accès large aux SERVICES de prévention, soins, traitement et soutien en rapport '),
(5, 'AST', 'RAP', '-', 'Pnmls', 'Evaluation rapide des besoins relatifs au vih des populations deplacées  et affectées dans la region du kasai', 'PNMLS', 80, 'Pnmls', '2016', 'Pnmls', 'Rapport PDI Kasai 2018.pdf', 'uploads/Rapport PDI Kasai 2018.pdf', 'Capture7.PNG', ' 	L’information, l’éducation et la communication de la population en vue du changement de comportement et d’un accès large aux SERVICES de prévention, soins, traitement et soutien en rapport '),
(9, 'JDH', 'LV', '-', 'Gouv', 'Lois portant protection des PVV et PA, Protection de l\'enfant et contre VS J.O. n° Spécial du 25 mai 2009', 'GOUVERNEMENT CONGOLAIS', 35, 'Pnmls', '2016', 'Pnmls', 'loi.pdf', 'uploads/loi.pdf', 'Capture.PNG', '1'),
(6, 'PEF', 'RAP', '-', 'PT', 'Rapport d\'enquete sur l\'index et la discrimination des personnes vivants avec le vih', 'PNUD', 130, 'UNAIDS', '2012', 'Unicef', 'PNUD-INDEX DE STIGMATISATION.pdf', 'uploads/PNUD-INDEX DE STIGMATISATION.pdf', 'Capture3.PNG', ' 	L’information, l’éducation et la communication de la population en vue du changement de comportement et d’un accès large aux SERVICES de prévention, soins, traitement et soutien en rapport '),
(7, 'PREV', 'RAP', '-', 'Pnmls', 'Rapport narratif de la campagne de sensibilisation  d\'offre gratuite des services integés de dépistage au vih', 'PNMLS', 30, 'Pnmls', '2013', 'Pnmls', 'Rapport narratif campagne.pdf', 'uploads/Rapport narratif campagne.pdf', 'Capture4.PNG', ' 	L’information, l’éducation et la communication de la population en vue du changement de comportement et d’un accès large aux SERVICES de prévention, soins, traitement et soutien en rapport '),
(8, 'AST', 'Rev', '-', 'Pnmls', '2eme conférence nationale sur le vih/sida et Ist', 'PNMLS', 50, 'Pnmls', '2013', 'Pnmls', 'CNSida 2013 Abstracts.pdf', 'uploads/CNSida 2013 Abstracts.pdf', 'Capture5.PNG', ' 	L’information, l’éducation et la communication de la population en vue du changement de comportement et d’un accès large aux SERVICES de prévention, soins, traitement et soutien en rapport '),
(11, '-', '-', '-', 'PT', 'Outils generique', 'ONUSIDA', 30, 'ONUSIDA', '2018', 'ONUSIDA', 'Env fav  Effet 5.1.xls', 'uploads/Env fav  Effet 5.1.xls', 'psn2.JPG', 'L\'effet 5.1 de la statégie 5 de l\'environnement favorable pour le PSN 2019'),
(13, '-', 'JN', 'RU', 'Unive', 'Estimated Rate of Treatment Failure in First-line Antiretroviral Treatment in Kinshasa_Case of the ACS AMO-CONGO', 'Université de Kinshasa', 7, '-', '-', '-', 'Estimated Rate of Treatment Failure in First-line Antiretroviral Treatment in Kinshasa_Case of the ACS AMO-CONGO.pdf', 'uploads/Estimated Rate of Treatment Failure in First-line Antiretroviral Treatment in Kinshasa_Case of the ACS AMO-CONGO.pdf', 'jour_medi_trait.JPG', ' Estimate the rate of treatment failure in first-line antiretroviral therapy in treatment centers in Kinshasa'),
(14, '-', 'LV', 'Pub', 'Unive', 'Gender Difference in Early Treatment Patients for Human Immunodeficiency Virus Type 1 Infection in Kinshasa, Democratic Republic of Congo', 'Berry Ikolango Bongenya1, Ramazani Nemwanjare Bukongo1, Ben Ilunga Bulanda1, Divine chuga1, Jean Yves Debels Kabasele1, Medard Omakoy Okonda1, Christian Tshisumbu1, Erick Ntambwe kamangu*', 4, '-', '2018', '-', 'Gender Difference in Early Treatment Patients for Human Immunodeficiency Virus Type 1 Infection in Kinshasa, Democratic Republic of Congo.pdf', 'uploads/Gender Difference in Early Treatment Patients for Human Immunodeficiency Virus Type 1 Infection in Kinshasa, Democratic Republic of Congo.pdf', 'pub.JPG', 'Human Immunodeficiency Virus (HIV) infection reaches alllevels of society around the world. For the year 2014, morethan 35 million people have been reported infected with HIVaccording to the World Health Organization (WHO) [1]. Nearlytwo-thirds of those infected are located in sub-Saharan Africa,which carries the heavy burden of this epidemic [1].'),
(15, '-', 'LV', 'ET', 'Unive', 'PROFILE OF ANTIRETROVIRAL TREATMENT CENTERS IN KINSHASA, DEMOCRATIC REPUBLIC OF CONGO', 'KAMANGU NTAMBWE Erick1*, KALALA NDIBU Hervé', 1, '-', '-', '-', 'Profile of Antiretroviral Treatment Centers in Kinshasa, Democratic Republic of Congo_Poster ASLM 2012.pdf', 'uploads/Profile of Antiretroviral Treatment Centers in Kinshasa, Democratic Republic of Congo_Poster ASLM 2012.pdf', 'profil.JPG', ' This work aimed to evaluate and develop a profile of the different centers of care for patients living with HIV/AIDS in the city of Kinshasa.'),
(16, '-', 'LV', 'ET', 'Unive', 'Analyse Comparative des Taux Lipidiques Sériques des Personnes Infectées par le VIH à Kinshasa', 'KAMANGU NTAMBWE ERICK1, MESIA KAHUNU GAUTHIER2', 1, '-', '-', '-', 'Analyse Comparative .pdf', 'uploads/Analyse Comparative .pdf', 'analyse.JPG', 'Le profil des taux lipidiques sériques est un marqueur couramment utilisée en clinique. Comme l’infection à VIH induit des modifications des taux lipidiques sériques, l’analyse du profil lipidique sérique en relation avec les stades cliniques des patients pourrait servir de méthode complémentaire ou alternative de suivi des patients infectés par le VIH.'),
(17, '-', 'LV', 'ET', 'Unive', 'Comparative Analysis of Electrophoresis’ profile of sera proteins of people infected by HIV and people not infected by HIV in Kinshasa_Poster ASLM 2012', 'KAMANGU NTAMBWE ERICK1, KALALA LUGANZA RICHARD1, MVUMBI LELO GEORGES1, MESIA KAHUNU GAUTHIER', 1, '-', '-', '-', 'Comparative Analysis .pdf', 'uploads/Comparative Analysis .pdf', 'analysis2.JPG', ' The aim of the study was to establish a comparison between the electrophoresis’ profile of sera proteins of\r\npeople infected by HIV, naïve of treatment, and people not infected by HIV. They could be used as an alternative\r\nmean of HIV patients’ follow-up in limited resources areas.'),
(18, 'AST', 'LV', 'ET', 'Unive', 'Comparative Analysis of Serum protein electrophoresis profiles of people infeted with HIV and those not infected with HIV in Kinshasa', 'KAMANGU NTAMBWE ERICK1*, KALALA LUNGANZA RICHARD1, MVUMBI LELO GEORGES1, MESIA KAHUNU GAUTHIER2', 9, '-', '-', '-', 'Comparative Analysis of Serum protein electrophoresis.pdf', 'uploads/Comparative Analysis of Serum protein electrophoresis.pdf', 'compara_analysis.JPG', ' The aim of the study was to establish a comparison between the electrophoresis’ profile of sera proteins of people infected by HIV naïve of treatment and people not infected by HIV.'),
(19, '-', 'LV', 'ET', 'Unive', 'Comparison of an In-House Quantitative Real-Time PCR and COBAS Ampliprep TaqMan Roche for Determination of Viral Load for HIV Type 1 Non-B', 'Erick Ntambwe Kamangu1*, Adawaye Chatte2, Raphael Boreux3, Fabrice Susin4, Richard Lunganza Kalala1, Georges Lelo Mvumbi1, Patrick De Mol3, Marie-Pierre Hayette3,4, Dolores Vaira4', 7, '-', '2015', '-', 'Comparison of an In-House Quantitative .pdf', 'uploads/Comparison of an In-House Quantitative .pdf', 'comaprison.JPG', ' The Antiretroviral Treatment (ART) seeks suppression of viremia in patients infected with Human Immunodeficiency\r\nVirus (HIV) [1]-[4]. The effect of ART suppressing HIV replication is measured by the monitoring of\r\nplasma Viral Load (VL), specially looking at treatment adherence or failure. Thus we speak of therapeutic success\r\nwhen the VL is undetectable or below the limit of detection (<20 - 100 copies/ml) [1]-[4]. In its guide to the\r\ntreatment of People Living with HIV (PLHIV) published in 2010, the World Health Organization (WHO) recommends\r\nmeasuring the VL as a key marker in monitoring of patients [4].\r\nSeveral techniques are commercially available for the determination of VL');

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

DROP TABLE IF EXISTS `galerie`;
CREATE TABLE IF NOT EXISTS `galerie` (
  `id_galerie` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(200) NOT NULL,
  `images` text NOT NULL,
  PRIMARY KEY (`id_galerie`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `galerie`
--

INSERT INTO `galerie` (`id_galerie`, `auteur`, `images`) VALUES
(23, 'Sécrétaire Exécutif National Adjoint du PNMLS', 'kis-Dr-Bossoky.jpg'),
(22, 'Sécrétaire Exécutif National du PNMLS', 'Mr-Lievin-Kapend.jpg'),
(21, 'Vice Président du CNMLS', 'ilunga.jpg'),
(20, 'Président du CNMLS', 'images.jpg'),
(19, '1er Mars Zero discrimination', '1 MARS.jpg'),
(24, 'Le Direteur du Département de Suivi et Evaluation du PNMLS', 'IMG_20170804_093959.jpg'),
(25, 'JMS', 'jms.jpg'),
(26, 'Faisons nous dépister volontairement', 'IMG_2655.JPG'),
(27, 'Ensemble luttons contre le VIH.SIDA', 'images (1).jpg'),
(28, 'Réunion', 'photo_pnmls1.jpg'),
(29, 'VIH/SIDA Activités', 'img_2175-l.jpg'),
(30, 'Luttons tous pour une génération sans sida à bunia', 'bunia-wordaidsday-2016-banner_0.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `livre_telechar`
--

DROP TABLE IF EXISTS `livre_telechar`;
CREATE TABLE IF NOT EXISTS `livre_telechar` (
  `id_doc` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jour` int(2) NOT NULL,
  `mois` int(2) NOT NULL,
  `annee` int(4) NOT NULL,
  `heure` varchar(30) NOT NULL,
  `nombre` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre_telechar`
--

INSERT INTO `livre_telechar` (`id_doc`, `id`, `jour`, `mois`, `annee`, `heure`, `nombre`) VALUES
(1, 1, 28, 8, 2019, '09:58:25', 1),
(2, 1, 28, 8, 2019, '09:58:42', 1),
(4, 1, 28, 8, 2019, '09:58:55', 1),
(5, 1, 28, 8, 2019, '09:59:06', 1),
(6, 1, 28, 8, 2019, '09:59:15', 1),
(7, 1, 28, 8, 2019, '09:59:24', 1),
(8, 1, 28, 8, 2019, '09:59:33', 1),
(9, 1, 28, 8, 2019, '09:59:42', 1),
(1, 2, 28, 8, 2019, '10:03:09', 1),
(2, 2, 28, 8, 2019, '10:03:17', 1),
(4, 2, 28, 8, 2019, '10:03:23', 1),
(5, 2, 28, 8, 2019, '10:03:28', 1),
(1, 1, 27, 9, 2019, '06:08:43', 1),
(2, 1, 11, 11, 2019, '10:35:44', 1),
(2, 1, 11, 11, 2019, '10:38:11', 1),
(2, 1, 11, 11, 2019, '10:40:43', 1),
(14, 1, 18, 11, 2019, '13:20:45', 1),
(16, 1, 18, 11, 2019, '13:39:55', 1),
(15, 1, 18, 11, 2019, '13:40:35', 1),
(14, 1, 18, 11, 2019, '13:40:47', 1),
(13, 1, 18, 11, 2019, '13:40:56', 1),
(16, 1, 18, 11, 2019, '13:41:06', 1),
(16, 1, 18, 11, 2019, '13:42:36', 1),
(17, 1, 18, 11, 2019, '13:50:02', 1),
(18, 1, 18, 11, 2019, '13:57:19', 1),
(19, 1, 18, 11, 2019, '14:05:05', 1),
(19, 1, 18, 11, 2019, '14:08:41', 1);

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id_pays` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_pays` varchar(150) NOT NULL,
  PRIMARY KEY (`id_pays`)
) ENGINE=MyISAM AUTO_INCREMENT=196 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id_pays`, `libelle_pays`) VALUES
(1, 'Afrique du Sud'),
(2, 'Algérie'),
(3, 'Angola'),
(4, 'Bénin'),
(5, 'Botswana'),
(6, 'Burkina Faso Burkina Faso '),
(7, 'Burundi'),
(8, 'Cameroun'),
(9, 'Cap-Vert'),
(10, 'République centrafricaine'),
(11, 'Comores'),
(12, 'République du Congo'),
(13, 'République démocratique du Congo'),
(14, 'Côte d’Ivoire'),
(15, 'Djibouti'),
(16, 'Égypte'),
(17, 'Érythrée'),
(18, 'Éthiopie'),
(19, 'Gabon'),
(20, 'Gambie'),
(21, 'Ghana'),
(22, 'Guinée'),
(23, 'Guinée-Bissau'),
(24, 'Guinée équatoriale'),
(25, 'Kenya'),
(26, 'Lesotho'),
(27, 'Liberia'),
(28, 'Libye'),
(29, 'Madagascar'),
(30, 'Malawi'),
(31, 'Mali'),
(32, 'Maroc'),
(33, 'Maurice'),
(34, 'Mauritanie'),
(35, 'Mozambique'),
(36, 'Namibie'),
(37, 'Niger'),
(38, 'Nigeria'),
(39, 'Ouganda'),
(40, 'Rwanda'),
(41, 'São Tomé-et-Principe'),
(42, 'Sénégal'),
(43, 'Seychelles'),
(44, 'Sierra Leone'),
(45, 'Somalie'),
(46, 'Soudan'),
(47, 'Soudan du Sud'),
(48, 'Swaziland'),
(49, 'Tanzanie'),
(50, 'Tchad'),
(51, 'Togo'),
(52, 'Tunisie'),
(53, 'Zambie'),
(54, 'Zimbabwe'),
(55, 'Albanie'),
(56, 'Allemagne'),
(57, 'Andorre'),
(58, 'Autriche'),
(59, 'Belgique'),
(60, 'Biélorussie'),
(61, 'Bosnie-Herzégovine'),
(62, 'Bulgarie'),
(63, 'Chypre'),
(64, 'Croatie'),
(65, 'Danemark'),
(66, 'Espagne'),
(67, 'Estonie'),
(68, 'Féroé (îles) '),
(69, 'Finlande'),
(70, 'France\r\n'),
(71, 'Grèce'),
(72, 'Groenland'),
(73, 'Hongrie'),
(74, 'Irlande'),
(75, 'Islande'),
(76, 'Italie'),
(77, 'Jersey-Guernesey'),
(78, 'Kosovo'),
(79, 'Lettonie'),
(80, 'Liechtenstein'),
(81, 'Lituanie'),
(82, 'Luxembourg'),
(83, 'Macédoine'),
(84, 'Malte'),
(85, 'Moldavie'),
(86, 'Monaco'),
(87, 'Monténégro'),
(88, 'Norvège'),
(89, 'Pays-Bas'),
(90, 'Pologne'),
(91, 'Portugal'),
(92, 'République tchèque'),
(93, 'Roumanie'),
(94, 'Royaume-Uni'),
(95, 'Russie'),
(96, 'Saint Marin'),
(97, 'Serbie'),
(98, 'Slovaquie'),
(99, 'Slovénie'),
(100, 'Suède'),
(101, 'Suisse'),
(102, 'Ukraine'),
(103, 'Vatican'),
(104, 'Canada'),
(105, 'Costa Rica'),
(106, 'Dominique'),
(107, 'Salvador'),
(108, 'États-Unis'),
(109, 'Guatemala'),
(110, 'Guadeloupe'),
(111, 'Haïti'),
(112, 'Honduras'),
(113, 'Jamaïque'),
(114, 'Martinique'),
(115, 'Mexique'),
(116, 'Panama'),
(117, 'Porto Rico'),
(118, 'République dominicaine'),
(119, 'Trinité-et-Tobago'),
(120, 'Argentine '),
(121, ' Bolivie'),
(122, ' Brésil '),
(123, ' Chili'),
(124, 'Colombie '),
(125, 'Équateur'),
(126, 'Guyana '),
(127, 'Guyane'),
(128, 'îles Malouines'),
(129, 'Paraguay'),
(130, 'Pérou '),
(131, 'Suriname '),
(132, 'Uruguay '),
(133, 'Venezuela'),
(134, 'Afghanistan'),
(135, 'Arabie saoudite'),
(136, 'Arménie'),
(137, 'Azerbaïdjan'),
(138, 'Bahreïn'),
(139, 'Bangladesh'),
(140, 'Bhoutan'),
(141, 'Birmanie'),
(142, 'Brunei'),
(143, 'Cambodge'),
(144, 'Chine'),
(145, 'Corée du Nord'),
(146, 'Corée du Sud'),
(147, 'Émirats arabes unis'),
(148, 'Géorgie'),
(149, 'Inde'),
(150, 'Indonésie'),
(151, 'Irak'),
(152, 'Iran'),
(153, 'Israël'),
(154, 'Japon'),
(155, 'Jordanie'),
(156, 'Kazakhstan'),
(157, 'Kirghizistan'),
(158, 'Koweït'),
(159, 'Koweït'),
(160, 'Laos'),
(161, 'Liban'),
(162, 'Malaisie'),
(163, 'Maldives'),
(164, 'Mongolie'),
(165, 'Népal'),
(166, 'Oman'),
(167, 'Ouzbékistan'),
(168, 'Pakistan'),
(169, 'Palestine'),
(170, 'Philippines'),
(171, 'Qatar'),
(172, 'Singapour'),
(173, 'Sri Lanka'),
(174, 'Syrie'),
(175, 'Tadjikistan'),
(176, 'Thaïlande'),
(177, 'Timor oriental'),
(178, 'Turkménistan'),
(179, 'Turquie'),
(180, 'Viêt Nam'),
(181, 'Yémen'),
(182, 'Australie'),
(183, 'Fidji'),
(184, 'Kiribati'),
(185, 'Îles Marshall'),
(186, 'Micronésie'),
(187, 'Nauru'),
(188, 'Nouvelle-Zélande'),
(189, 'Palaos'),
(190, 'Papouasie-Nouvelle-Guinée'),
(191, 'Îles Salomon'),
(192, 'Samoa Samoa'),
(193, 'Tonga'),
(194, 'Tuvalu'),
(195, 'Vanuatu');

-- --------------------------------------------------------

--
-- Structure de la table `sexe`
--

DROP TABLE IF EXISTS `sexe`;
CREATE TABLE IF NOT EXISTS `sexe` (
  `code_sexe` varchar(1) NOT NULL,
  `lib_sexe` varchar(20) NOT NULL,
  PRIMARY KEY (`code_sexe`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sexe`
--

INSERT INTO `sexe` (`code_sexe`, `lib_sexe`) VALUES
('M', 'MASCULIN'),
('F', 'FEMININ');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id_type` varchar(10) NOT NULL,
  `libelle_type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `libelle_type`) VALUES
('LV', 'Livre'),
('RAP', 'Rapport'),
('-', '-'),
('Rev', 'Revue'),
('OT', 'Outils'),
('JN', 'Journal');

-- --------------------------------------------------------

--
-- Structure de la table `usager`
--

DROP TABLE IF EXISTS `usager`;
CREATE TABLE IF NOT EXISTS `usager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `postnom` varchar(30) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `code_sexe` varchar(1) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL,
  `id_pays` int(11) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `id_cat` varchar(50) NOT NULL,
  `entre_institut` varchar(150) NOT NULL,
  `date_inscrit` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `usager`
--

INSERT INTO `usager` (`id`, `username`, `postnom`, `prenom`, `code_sexe`, `telephone`, `email`, `password`, `id_pays`, `ville`, `id_cat`, `entre_institut`, `date_inscrit`) VALUES
(1, 'belangani', 'bella', 'patrick', 'M', '0817711903', 'patrickbelangani@gmail.com', '$2y$10$vAybxjwMHj13N14aIfeIsekQGBz6E0sgArJ3w1MtIgQLzxDe9pE1y', 13, 'kinshasa', '3', 'Pnmls', '2019-08-28 07:46:54'),
(2, 'BENGA', 'WEMBA', 'Patrick', 'M', '0976164329', 'patrick.wemba@pnmls.cd', '$2y$10$8vV8mXHsQnqlbBGAUrIjp.OEYAuhD8Yc9uKxLqvppa4xictChbdE.', 13, 'kinshasa', '3', 'Pnmls', '2019-08-28 09:02:45');

-- --------------------------------------------------------

--
-- Structure de la table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `location` varchar(500) NOT NULL,
  `images` text NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `videos`
--

INSERT INTO `videos` (`video_id`, `title`, `location`, `images`) VALUES
(81, 'goloa', 'google.com', 'images.jpg'),
(82, 'duue', 'youtube.com', 'jms.jpg'),
(83, 'dlopd', 'facebook.com', '1 MARS.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
