-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: gamepay
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `product` (
  `id` int(11) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_desc` varchar(1000) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Minecraft','Игра-песочница Minecraft откроет перед своими игроками великолепный многообразный мир, позволяющий создавать различные объекты в трехмерной окружающей среде. Более того, став собственником такой игры вы получите в своё расположение большое количество инструментов, дающих возможность реализовывать любые архитектурные проекты и задумки, независимо от их сложности. Проще говоря, вы сможете строить и разрушать всё что угодно, так как в этом мире вы Бог.',1999,100),(2,'Red Dead Redemption 2','Америка, 1899 год. Эпоха Дикого Запада подходит к концу. Служители закона методично охотятся на остатки банд. Тех, кто не желает сдаваться, убивают.\n\nПосле сорвавшегося ограбления банка в западном городе Блэкуотер Артур Морган и другие подручные Датча ван дер Линде вынуждены пуститься в бега. Их банде предстоит участвовать в кражах, грабежах и перестрелках в самом сердце Америки, на неприветливой земле, где каждый день – это борьба за выживание.\n\nПо их следу идут федеральные агенты и лучшие в стране охотники за головами, а саму банду разрывают внутренние противоречия. Артуру предстоит выбрать, что для него важнее: его собственные идеалы или же верность людям, которые его взрастили.\n\nИгра Red Dead Redemption 2 от создателей Grand Theft Auto V и Red Dead Redemption – это грандиозное повествование о жизни в Америке на заре современной эпохи.',2249,100),(3,'Terraria','Копайте, сражайтесь, исследуйте, стройте! Нет ничего невозможного в этой насыщенной событиями приключенческой игре. Весь мир — ваше полотно, а вся земля — ваши краски!\nХватайте инструменты и вперед! Создавайте оружие, чтобы сражаться с различными врагами в разных биомах. Копайте глубже, чтобы найти драгоценности, деньги и кучу других полезных вещей. Собирайте ресурсы, чтобы создать всё, что вам нужно, и сделать мир таким, каким вы хотите его видеть. Постройте свой дом, крепость или даже замок! Люди переедут к вам жить и может быть даже продадут вам вещи, которые помогут вам в ваших путешествиях.',149,200),(4,'World of warcraft: Battle of Azeroth','Ценой огромных жертв Азероту удалось остановить ужасное вторжение Пылающего Легиона. И хотя раны самого мира стали затягиваться, Альянс и Орда оказались не готовы забыть былые обиды. Многолетний конфликт разгорается с новой силой, и вам теперь предстоит объединить своих союзников и вступить в бой во имя своей фракции, ибо в пламени новой войны родится будущее Азерота.',1799,0);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-11-04  0:56:00
