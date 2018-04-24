/*
SQLyog Community v13.0.0 (64 bit)
MySQL - 10.1.8-MariaDB : Database - uts_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`uts_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `uts_db`;

/*Table structure for table `books` */

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial` varchar(20) DEFAULT NULL,
  `title` varchar(30) DEFAULT NULL,
  `author` varchar(45) DEFAULT NULL,
  `synopsis` text,
  `id_books_categories` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=445 DEFAULT CHARSET=latin1;

/*Data for the table `books` */

insert  into `books`(`id`,`serial`,`title`,`author`,`synopsis`,`id_books_categories`) values 
(1,'ghgj','ghjgj','gjgj','',0),
(3,'dsf','jghj','gjg','jhgjjggh\r\n\r\n',1),
(4,'gh','ghg','hg','aa',1),
(444,'gjhjh','gjg','gjgjg','gjggj',0);

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2424 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`description`) values 
(1,'gfgh','jhjg'),
(2,'irma rahma','cantik banget'),
(3,'sdf','ewrw'),
(8,'rendy','coba'),
(34,'sdsd','ini adalah'),
(2312,'fhfh','fhf'),
(2423,'gjhgj','gjgjgj');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`last_name`,`username`,`email`,`password`) values 
(1,'rendy','ganteng','banget@rendy.com','banget@rendy.com','dhgkxsasjlkdkjlags'),
(2,'rendy','ganteng','banget@rendy.com','banget@rendy.com','banget@rendy.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
