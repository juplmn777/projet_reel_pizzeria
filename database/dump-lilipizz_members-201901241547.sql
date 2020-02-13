-- MySQL dump 10.16  Distrib 10.2.21-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: lilipizz_members
-- ------------------------------------------------------
-- Server version	10.2.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `USERS`
--

DROP TABLE IF EXISTS `USERS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USERS` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USERS`
--

LOCK TABLES `USERS` WRITE;
/*!40000 ALTER TABLE `USERS` DISABLE KEYS */;
INSERT INTO `USERS` VALUES (1,'test','$2y$10$2IywI6QUMmSNhDGOO1DpDOdBqFf.ljclimaWGzyD7x0gObBTb3nii'),(2,'test','$2y$10$3mJtk/CshUkzcPHo5iJxHeDMe/B81E9QDNuQ0X8y8tD75LafWDi1i'),(3,'test','$2y$10$e1bX.XJOI4SkwYKulXm2ceKv7lUl/b.2P9DruIyxUMncSG2Cz/6P.'),(4,'test','$2y$10$2WffsCXvM9B1Zyv3pAFEs.RJ036ycsYI8bnamIACLT5xFPd46l8Y6'),(5,'test','$2y$10$fjWmnwwX4Pe7qv8E.JVxSOmpvvQlHnwuG9/y17XQUzq4oIw2YJyhS'),(6,'','$2y$10$BD6IQ3zv9CAE3ThBsx2GuOSyuMjKuw2aVglcUSf43uqYdTjf38Q6e'),(7,'','$2y$10$9nV0lpZAd0zgqfTeTTo.BO5NTP7jjhgabRxJ3xQEvCNTxFZRmlFxm'),(8,'test2','$2y$10$w09/EMaLNTyUZkLudKMC9e0Eea36uwN.L1XcspsyjmXkUp1uQJ5S2'),(9,'bla','$2y$10$Iavj8kd9QOWXkcQgHvvaX.90qi7kg7kDmG2nbK3x4ozBzMH2JmsvS'),(10,'ju','$2y$10$.YWwjm7Q.tBDCrS2lLo0KuFxMQsUjE3detaMqsHxf9h7TsUlIiTqi'),(11,'felix','$2y$10$VrTnRDjHRsxy1xmpFrRyQeoWMsp3ISiRodIlxF8WJbQtZ..FrLGTa'),(12,'matthieu','$2y$10$1MFeOJC4bY89F.8K8zhOC.3l3v.7p1zj1Zps1rfWuMylI2tDHC4Pi'),(13,'julien','$2y$10$sT1sEqNFWIle6od9XKZ4IuHbxFCZMi8.uWUBUBV9H.9e4vu3Y5Q0G'),(14,'','$2y$10$N.wipZfprZsgmCHu/0Jd7eDvd3MZgXnjY8qviZ.yCfqhR6Jk6Deim'),(15,'','$2y$10$c/veUlDiL1su/1S9kvRAAe5gR3RecnrUmedxb7fI2/ywtuBgBjD9G'),(16,'pizza','$2y$10$6ynH.SIrXsVKBYnQMoJU3eo.PEev/n7EGHaiZ3rLmAfypqYZT4qgK'),(17,'truc','$2y$10$r88cmOztVYhEVNjQjaGwT.KEDcKceJitNHqw.bELAFPefVTp55hmS'),(18,'theodore','$2y$10$yM..VmoiGryrDwrYbaz2Qunsw.4ozM.xmjfohwQCRRzMGg6O1rLHC'),(19,'ju','$2y$10$r1MHH7uQnPNs5DlxI0DiZeYURJZFTmLz4EQk5SYKcrV.zln1vSREm'),(20,'bla','$2y$10$oobNG/Ppq8so9QDZDtPaouU4f.7.Oy15N/eLWt5QIVLSxIIQMLVGi'),(21,'','$2y$10$fwFcH./q.3E6DRnKVSqoBOfOF9xvGLFmYTomvvqliDYdUWxfxcIhe'),(22,'','$2y$10$A3QKIeyL0eNd3QxU/nGSteP2sydhcJt0VZohi.ljRXpsapk/bpKb2'),(23,'','$2y$10$ryE685xN4KbOvChBhA8z9OXiLxHyYWbCM0FzX4LVQPzkoA4VMvWJW'),(24,'felix','$2y$10$ZxNtArTDRkAYxxO4o6IJ2Ox0cG4mtajcIijm5XB0DiKmyx/HAz2uW'),(25,'test','$2y$10$NnCKIcfnnCtkg.UaPtY4zOMkMk5xuLr3GnWz4aKYBkr6FJ8whJO/e');
/*!40000 ALTER TABLE `USERS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'pizzas'),(2,'speciales'),(3,'salades'),(4,'desserts');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produits`
--

DROP TABLE IF EXISTS `produits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(100) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `prix` float NOT NULL,
  `images` varchar(255) NOT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_categorie` (`id_categorie`),
  CONSTRAINT `produits_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produits`
--

LOCK TABLES `produits` WRITE;
/*!40000 ALTER TABLE `produits` DISABLE KEYS */;
INSERT INTO `produits` VALUES (1,'Margarita','Mozzarella, Olives',7,'margarita.jpg',1),(2,'Reine','sauce tomate, jambon supérieur et mozzarella',8.5,'reine.jpg',1),(3,'Régina','sauce tomate, jambon supérieur, champignons frais et mozzarella',9,'regina.jpg',1),(4,'Sicilienne','sauce tomate, mozzarella, anchois, olives et beurre provençal',9,'Sicilienne.jpg',1),(5,'4 Fromagères','sauce tomate, chèvre, roquefort AOC, emmental et mozzarella',10,'4Fromageres.jpg',1),(6,'Calzone','sauce tomate, jambon supérieur, mozzarella et oeuf de plein air',10,'calzone.jpg',1),(7,'Biquette','crème fraîche, lardons, chèvre et mozzarella sauce tomate, jambon supérieur, champignons frais et mozzarella',9.5,'biquette.jpg',1),(8,'Mielette','sauce tomate, jambon supérieur, chèvre, miel et mozzarella',9.5,'mielette.jpg',1),(9,'Normande','crème fraîche, bacon, camembert, pommes et mozzarella',10,'normande.jpg',1),(10,'Carbonara','sauce tomate ail, tagliatelles, lardons, crème fraîche et mozzarella',11,'carbonara.jpg',1),(11,'Raclette','crème fraîche, pomme de terre, lardons, raclette, mozzarella, Jambon cru italien et cornichons',12,'raclette.jpg',1),(12,'Bolognaise','sauce bolognaise, tagliatelles, boeuf haché VBF et mozzarella',10.5,'bolognaise.jpg',1),(13,'Végétarienne','sauce tomate, poivrons, courgettes, aubergines, oignons et mozzarella',9.5,'vegetarienne.jpg',1),(14,'Piquette','sauce tomate, merguez, chorizo cular, poivrons et mozzarella',10,'piquette.jpg',1),(15,'Welsh','sauce tomate, jambon supérieur, cheddar, mozzarella et oeuf de plein air',10,'welsh.jpg',1),(16,'Chinoise','sauce soja, boeuf haché VBF, oignons rouges, nouilles chinoises, et mozzarella',11,'chinoise.jpg',1),(17,'Burger','sauce burger, boeuf haché VBF, oignons, cheddar, oeuf de plein air et roquette',11,'burger.jpg',1),(18,'Kébab','sauce pita, émincés de volaille, oignons rouges, mozzarella, roquette et tomates',11,'kebab.jpg',1),(19,'Atlantique','crème fraîche, mozzarella, saumon fumé, citron, roquette et crème de balsamique',12,'atlantique.jpg',1),(20,'Montagnarde','crème fraîche, jambon supérieur, pomme de terre, reblochon AOP, mozzarella',12,'montagnarde.jpg',1),(21,'Ch\'ti','crème fraiche au curry, émincés de poulet, maroille, cheddar, graines de sésame',12,'chti.jpg',1),(22,'La flammekueche','crème fraîche, lardons, oignons rouges, mozzarella',10,'flammekueche.jpg',1),(23,'La gamine','sauce tomate, jambon supérieur et mozzarella',5.5,'gamine.jpg',2),(24,'La 50/50','deux moitiés de pizza au choix dans la carte',12,'50.jpg',2),(25,'La lilipizz','crème, moutarde à l’ancienne, émincés de poulet, fromage, ail et fines herbes, cheddar, mozzarella, oeuf de plein air et oignons frits',12,'lilipizz.jpg',2),(26,'La pizalett','une moitié pizza et une demi-salade dans la carte',14,'pizalett.jpg',2),(27,'La mamijo','crème fraîche, saumon frais, poireaux, pesto, mozzarella, vinaigre balsamique\n',13,'mamijo.jpg',2),(28,'La savoyarde','salade, tomates, croûtons, lardons, bacons, raclette et oignons frits',9,'savoyarde.jpg',3),(29,'Périgourdine','salade, tomates, croûtons, lardons, gésiers, oignons frits et pépites de foie gras',12,'indisponible.jpg',3),(30,'Mouillette','salade, tomates, croûtons, lardons, oeuf mollet, jambon cru italien et oignons frits',11,'mouillette.jpg',3),(31,'Pacifique','salade, tomates, croûtons, saumon fumé, oignons frits et citron',11,'pacifique.jpg',3),(32,'Chèvre','salade, tomates cerise, croûtons, lardons, crottin chavignol et oignons frits',10.5,'chevre.jpg',3),(33,'Nutella','Nutella et sucre glace',7,'indisponible.jpg',4),(34,'Spéculoos','Spéculos et sucre glace',7,'indisponible.jpg',4),(35,'Snickers','Caramel beurre salé maison, chocolat, cacahuètes et sucre glace',8,'snickers.jpg',4);
/*!40000 ALTER TABLE `produits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tournee`
--

DROP TABLE IF EXISTS `tournee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tournee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jour` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `postal` int(11) DEFAULT NULL,
  `ville` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tournee`
--

LOCK TABLES `tournee` WRITE;
/*!40000 ALTER TABLE `tournee` DISABLE KEYS */;
INSERT INTO `tournee` VALUES (1,'lundi','Fermé',0,'Fermé'),(2,'mardi',' Place de l’hôtel de ville',62219,'Longuenesse'),(3,'mercredi','170 rue de Thérouanne',62575,'Thérouanne'),(4,'jeudi','12 route nationale',62570,'Bientques'),(5,'vendredi','160 avenue du Général de Gaulle',62510,'Arques'),(6,'samedi','Fermé',0,'Fermé'),(7,'dimanche','Place Roger Salengro',62510,'Arques');
/*!40000 ALTER TABLE `tournee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'lilipizz_members'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-24 15:47:40
