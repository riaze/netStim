-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 08 oct. 2019 à 23:18
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `products`
--

-- --------------------------------------------------------

--
-- Structure de la table `product_details`
--

DROP TABLE IF EXISTS `product_details`;
CREATE TABLE IF NOT EXISTS `product_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) NOT NULL,
  `descrip` varchar(500) NOT NULL,
  `Marque` varchar(30) NOT NULL,
  `NomDuProduit` varchar(30) NOT NULL,
  `Categorie` varchar(30) NOT NULL,
  `Resolution` varchar(30) NOT NULL,
  `system_dexploitation` varchar(30) NOT NULL,
  `Ram` int(10) NOT NULL,
  `CPU` varchar(30) NOT NULL,
  `NombreDeCoeurs` int(5) NOT NULL,
  `Poids` int(5) NOT NULL,
  `Couleur` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product_details`
--

INSERT INTO `product_details` (`id`, `price`, `descrip`, `Marque`, `NomDuProduit`, `Categorie`, `Resolution`, `system_dexploitation`, `Ram`, `CPU`, `NombreDeCoeurs`, `Poids`, `Couleur`) VALUES
(1, 500, 'Dell PC Portable au design elegant - Ecran 17,3\" HD SVA anti-reflets retroeclaire WLED - Processeur Intel core i5 4 coeurs - RAM 4 Go - Disque dur 500 Go', 'Dell', 'DELL PC Portable - Inspiron ', 'ORDINATEUR PORTABLE', 'riaze1920 x 1080 (Full HD)', 'Windows 10', 20, 'Intel Core i5', 4, 2, 'gris'),
(2, 400, 'HP Notebook 17-ca0037nf au design elegant - Ecran 17,3\" HD SVA anti-reflets retroeclaire WLED - Processeur AMD E2-9000e 2 coeurs - RAM 4 Go - Disque dur 500 Go', 'Hp', 'HP PC Portable 17-ca0037nf', 'ORDINATEUR PORTABLE', '1768 x 1366(Full HD)', 'Linux', 8, 'Intel Core i3 ', 10, 2, 'Argent'),
(3, 350, 'Technologie ASUS SPLENDID Video Intelligence, anti-eblouissement, gamme de couleurs etendue NTSC de 72 %, ASUS EyeCare Technology, angle de visualisation horizontal et vertical a 178', 'Asus', 'Asus vivobook', 'ORDINATEUR PORTABLE', '1920 x 1080 (Full HD)', 'Windows 10 Edition Familiale', 8, 'Intel Core i7 ', 12, 2, 'Gris quartz'),
(4, 350, 'Technologie ASUS SPLENDID Video Intelligence, anti-eblouissement, gamme de couleurs etendue NTSC de 72 %, ASUS EyeCare Technology, angle de visualisation horizontal et vertical a 178', 'Asus', 'Asus SPLENDID s130', 'ORDINATEUR PORTABLE', '1920 x 1080 (Full HD)', 'Windows 10 Edition Familiale', 8, 'Intel Core i7 ', 12, 2, 'Gris quartz');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
