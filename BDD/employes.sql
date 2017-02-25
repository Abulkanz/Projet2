-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 24 Février 2017 à 17:44
-- Version du serveur :  5.7.9
-- Version de PHP :  5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test4`
--

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

DROP TABLE IF EXISTS `employes`;
CREATE TABLE IF NOT EXISTS `employes` (
  `idEmploye` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Référence de l''employé',
  `nomEmploye` char(40) NOT NULL COMMENT 'Nom de l''employé',
  `prenomEmploye` char(40) NOT NULL COMMENT 'Nom de l''employé',
  `fonction` varchar(40) NOT NULL COMMENT 'Fonction occupée par l''employé',
  `motDePasse` text NOT NULL COMMENT 'Mot de passe de l''employé',
  `avatar` varchar(40) NOT NULL DEFAULT 'avatarDefaut.png' COMMENT 'Nom de l''image',
  `adresse_mail` varchar(40) DEFAULT NULL COMMENT 'Adresse mail de l''employé',
  `login` varchar(40) NOT NULL COMMENT 'Login de l''employé',
  `droits` smallint(6) NOT NULL COMMENT 'Droits : 1 = Stagiaire / 2 = Vétérinaire-Chef / 3 = Administrateur',
  `idSexe` int(11) NOT NULL COMMENT 'Référence sexe : 1 = Masculin/2 = Féminin',
  PRIMARY KEY (`idEmploye`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `employes`
--

INSERT INTO `employes` (`nomEmploye`, `prenomEmploye`, `fonction`, `motDePasse`, `avatar`, `adresse_mail`, `login`, `droits`, `idSexe`) VALUES
('Lacroix', 'Valérie', 'Administrateur', '9047e04c46b2daec5d9aca7b74a8793c', 'userlogof.png', 'vlacroix@ouhouhin.fr', 'vlacroix', 3, 2),
('Courtemanche', 'Eugéne', 'Chef Animalier', '293ba93a2f275fa27842cfde0ba575c6', 'userlogom.jpg', 'ecourtemanche@ouhouhin.fr', 'ecourtemanche', 2, 1),
('Poisson', 'Tyson', 'Vétérinaire', 'b9b0bf75ed6678ceeea8b79596a867a6', 'userlogom.jpg', 'tpoisson@ouhouhin.fr', 'tpoisson', 2, 1),
('Bler', 'Théodore', 'Vétérinaire', '268c85994b8c6a225665566ec4b4284c', 'userlogom.jpg', 'tbler@ouhouhin.fr', 'tbler', 2, 1),
('Béland', 'Océane', 'Stagiaire', '835e60e0eda2dc62c847f934ab7e9457', 'userlogof.png', 'obeland@ouhouhin.fr', 'obeland', 1, 2),
('Avare', 'Désiré', 'Stagiaire', 'c461fcacf7a5522d34e0cefa9e5ccd56', 'userlogof.png', 'davare@ouhouhin.fr', 'davare', 1, 2),
('Poirier', 'Charles', 'Stagiaire', 'de527297835fbb36d9a89ad34f72e7ff', 'userlogom.jpg', 'cpoirier@ouhouhin.fr', 'cpoirier', 1, 1),
('Gaulin', 'Arianne', 'Stagiaire', 'be36d6606b8939adc8a34e00e61bfc4d', 'userlogof.png', 'agaulin@ouhouhin.fr', 'agaulin', 1, 2),
('Théberge', 'Suzette', 'Stagiaire', '69e3c2692c4266f656e417afc7ef3587', 'userlogof.png', 'stheberge@ouhouhin.fr', 'stheberge', 1, 2),
('Desjardins', 'Marjollaine', 'Stagiaire', '9c118cb45a6944cca2e829537ccbf92c', 'userlogof.png', 'mdesjardins@ouhouhin.fr', 'mdesjardins', 1, 2),
('Duhamel', 'Mirabelle', 'Stagiaire', '6434d8f710a4cac2c051ba9a419a18d2', 'userlogof.png', 'mduhamel@ouhouhin.fr', 'mduhamel', 1, 2),
('Lampron', 'Jérôme', 'Stagiaire', '98737b751b39324b4a38d64af2554c70', 'userlogom.jpg', 'jlampron@ouhouhin.fr', 'jlampron', 1, 1),
('Couet', 'Angelette', 'Stagiaire', 'f483d464e1b0f8e2a6e3d55ed3f789da', 'userlogof.png', 'acouet@ouhouhin.fr', 'acouet', 1, 2),
('Tanguay', 'Yolande', 'Stagiaire', '2f8122ab74efd683707986c63883a77a', 'userlogof.png', 'ytanguay@ouhouhin.fr', 'ytanguay', 1, 2),
('Richer', 'Mélodie', 'Stagiaire', 'a96051a7e2967c4d17abc383acd8fecf', 'userlogof.png', 'mricher@ouhouhin.fr', 'mricher', 1, 2),
('Riquier', 'Didier', 'Stagiaire', '2496daa026796d46fa577d723df9ec22', 'userlogom.jpg', 'driquier@ouhouhin.fr', 'driquier', 1, 1),
('rossignol', 'anhony', 'Administrateur', '991bc95708d7b05fc5e299a1c18275f5', 'userlogom.jpg', 'arossignol3@ouhouhin.fr', 'arossignol', 3, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
