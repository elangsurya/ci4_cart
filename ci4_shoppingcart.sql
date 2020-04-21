/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.1.36-MariaDB : Database - ci4_shoppingcart
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ci4_shoppingcart` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ci4_shoppingcart`;

/*Table structure for table `mobile` */

CREATE TABLE `mobile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` text,
  `photo` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `mobile` */

insert  into `mobile`(`id`,`name`,`price`,`status`,`description`,`photo`) values 
(1,'Iphone 8',100,1,'iPhone 8 Plus. Layar Retina HD; Layar lebar LCD Multi-Touch 5,5 inci (diagonal)','iphone-8-plus-gold.png'),
(2,'IPhone 9',150,1,'Apple iPhone 9 smartphone runs on iOS v13.0 operating system.','iphone-9.jpg'),
(3,'Iphone 10',255,1,'Cat16 1024/150 Mbps','iphone-x.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
