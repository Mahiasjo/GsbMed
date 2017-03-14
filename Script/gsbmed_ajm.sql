-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 14 Mars 2017 à 13:30
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gsbmed_ajm`
--

-- --------------------------------------------------------

--
-- Structure de la table `gsb_composition`
--

CREATE TABLE IF NOT EXISTS `gsb_composition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `COM_Libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Contenu de la table `gsb_composition`
--

INSERT INTO `gsb_composition` (`id`, `COM_Libelle`) VALUES
(1, 'Triamcinolone (acétonide)'),
(2, 'Amoxicilline'),
(3, 'Acide'),
(4, 'Tyrothricine'),
(5, 'Tétracaïne'),
(6, 'Acide ascorbique (Vitamine C)'),
(7, 'Erythromycine'),
(8, 'Dextropropoxyphène'),
(9, 'Paracétamol'),
(10, 'Acide acétylsalicylique (aspirine)'),
(11, 'Clarithromycine'),
(12, 'Clomipramine'),
(13, 'Mirtazapine'),
(14, 'Doxylamine'),
(15, 'Méclozine'),
(16, 'Adrafinil');

-- --------------------------------------------------------

--
-- Structure de la table `gsb_famille`
--

CREATE TABLE IF NOT EXISTS `gsb_famille` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FAM_Libelle` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Contenu de la table `gsb_famille`
--

INSERT INTO `gsb_famille` (`id`, `FAM_Libelle`) VALUES
(4, 'Corticoïde'),
(5, 'Antibiotique de la famille des béta-lactamines (pénicilline A)'),
(6, 'Antibiotique local (ORL)'),
(7, 'Antibiotique antiacnéique local'),
(8, 'Antibiotique de la famille des macrolides'),
(9, 'Antalgiques antipyrétiques en association'),
(10, 'Antidépresseur imipraminique (tricyclique)'),
(11, 'Antidépresseur d''action centrale'),
(12, 'Hypnotique antihistaminique'),
(13, 'Antivertigineux antihistaminique H1'),
(14, 'Psychostimulant, antiasthénique');

-- --------------------------------------------------------

--
-- Structure de la table `gsb_medicament`
--

CREATE TABLE IF NOT EXISTS `gsb_medicament` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `MED_DepotLegal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MED_Nomcommercial` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MED_Effets` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MED_ContreIndication` longtext COLLATE utf8_unicode_ci NOT NULL,
  `MED_PrixEchantillon` double DEFAULT NULL,
  `famille_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_69AC8D5D97A77B84` (`famille_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Contenu de la table `gsb_medicament`
--

INSERT INTO `gsb_medicament` (`id`, `MED_DepotLegal`, `MED_Nomcommercial`, `MED_Effets`, `MED_ContreIndication`, `MED_PrixEchantillon`, `famille_id`) VALUES
(1, '3MYC7', 'TRIMYCINE', 'Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un antifongique, utilisé en application locale dans certaines atteintes cutanées surinfectées.', 'Ce médicament est contre-indiqué en cas d''allergie à l''un des constituants, d''infections de la peau ou de parasitisme non traités, d''acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusif.', NULL, 4),
(2, 'ADIMOL9', 'ADIMOL', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux pénicillines ou aux céphalosporines.', NULL, 5),
(3, 'AMOPIL7', 'AMOPIL', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux pénicillines. Il doit être administré avec prudence en cas d''allergie aux céphalosporines.', NULL, 5),
(4, 'AMOX45', 'AMOXAR', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.    ', NULL, 5),
(5, 'AMOXIG12', 'AMOXI Gé', 'Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.', 'Ce médicament est contre-indiqué en cas d''allergie aux pénicillines. Il doit être administré avec prudence en cas d''allergie aux céphalosporines.   ', NULL, 5),
(6, 'APATOUX22', 'APATOUX Vitamine C', 'Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.', 'Ce médicament est contre-indiqué en cas d''allergie à  l''un des constituants, en cas de phénylcétonurie et chez l''enfant de moins de 6 ans. ', NULL, 6),
(7, 'BACTIG10', 'BACTIGEL', 'Ce médicament est utilisé en application locale pour traiter l''acné et les infections cutanées bactériennes associées.', 'Ce médicament est contre-indiqué en cas d''allergie aux antibiotiques de la famille des macrolides ou des lincosanides.  ', NULL, 7),
(8, 'BACTIV13', 'BACTIVIL', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. ', 'Ce médicament est contre-indiqué en cas d''allergie aux macrolides (dont le chef de file est l''érythromycine). ', NULL, 8),
(9, 'BITALV', 'BIVALIC', 'Ce médicament est utilisé pour traiter les douleurs d''intensité modérée ou intense. ', 'Ce médicament est contre-indiqué en cas d''allergie aux médicaments de cette famille, d''insuffisance hépatique ou d''insuffisance rénale. ', NULL, 9),
(10, 'CARTION6', 'CARTION', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre. ', 'Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d''ulcère gastroduodénal, maladies graves du foie. ', NULL, 9),
(11, 'CLAZER6', 'CLAZER', 'Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l''ulcère gastro-duodénal, en association avec d''autres médicaments. ', 'Ce médicament est contre-indiqué en cas d''allergie aux macrolides (dont le chef de file est l''érythromycine).', NULL, 8),
(12, 'DEPRIL9', 'DEPRAMIL', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l''enfant.  ', 'Ce médicament est contre-indiqué en cas de glaucome ou d''adénome de la prostate, d''infarctus récent, ou si vous avez eu un traitement par IMAO durant les 2 semaines précédentes ou en cas d''allergie aux antidépresseurs imipraminiques.', NULL, 10),
(13, 'DIMIRTAM6', 'DIMIRTAM', 'Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.', 'La prise de ce produit est contre-indiquée en cas de d''allergie à l''un des constituants.', NULL, 11),
(14, 'DOLRIL7', 'DOLORIL', 'Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.', 'Ce médicament est contre-indiqué en cas d''allergie au paracétamol ou aux salicylates.', NULL, 9),
(15, 'DORNOM8', 'NORMADOR', 'Ce médicament est utilisé pour traiter l''insomnie chez l''adulte.', 'Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l''enfant de moins de 15 ans.', NULL, 12),
(16, 'EQUILARX6', 'EQUILAR', 'Ce médicament est utilisé pour traiter les vertiges et pour prévenir et pour prévenir le mal des transports.', 'Ce médicament ne doit pas être utilisé en cas d''allergie au produit, en cas de glaucome ou de rétention urinaire.', NULL, 13),
(17, 'EVILR7', 'EVEILLOR', 'Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet agé.', 'Ce médicament est contre-indiqué en cas d''allergie à l''un des constituants.', NULL, 14);

-- --------------------------------------------------------

--
-- Structure de la table `medicament_composition`
--

CREATE TABLE IF NOT EXISTS `medicament_composition` (
  `medicament_id` int(11) NOT NULL,
  `composition_id` int(11) NOT NULL,
  PRIMARY KEY (`medicament_id`,`composition_id`),
  KEY `IDX_8EBE6429AB0D61F7` (`medicament_id`),
  KEY `IDX_8EBE642987A2E12` (`composition_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `medicament_composition`
--

INSERT INTO `medicament_composition` (`medicament_id`, `composition_id`) VALUES
(1, 1),
(2, 2),
(2, 3),
(3, 2),
(4, 2),
(5, 2),
(6, 4),
(6, 5),
(6, 6),
(7, 7),
(8, 7),
(9, 8),
(9, 9),
(10, 6),
(10, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 6),
(14, 9),
(14, 10),
(15, 14),
(16, 15),
(17, 16);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `gsb_medicament`
--
ALTER TABLE `gsb_medicament`
  ADD CONSTRAINT `FK_69AC8D5D97A77B84` FOREIGN KEY (`famille_id`) REFERENCES `gsb_famille` (`id`);

--
-- Contraintes pour la table `medicament_composition`
--
ALTER TABLE `medicament_composition`
  ADD CONSTRAINT `FK_8EBE642987A2E12` FOREIGN KEY (`composition_id`) REFERENCES `gsb_composition` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_8EBE6429AB0D61F7` FOREIGN KEY (`medicament_id`) REFERENCES `gsb_medicament` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
