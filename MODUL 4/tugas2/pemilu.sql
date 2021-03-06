/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.18-MariaDB : Database - pemilu
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pemilu` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pemilu`;

/*Table structure for table `suara` */

DROP TABLE IF EXISTS `suara`;

CREATE TABLE `suara` (
  `IDPemilih` varchar(6) NOT NULL,
  `NamaPemilih` varchar(16) DEFAULT NULL,
  `Pilihan` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`IDPemilih`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `suara` */

insert  into `suara`(`IDPemilih`,`NamaPemilih`,`Pilihan`) values 
('001','Jamher','Fahriyan'),
('002','Ebol','Radif'),
('003','tuni','Fahriyan'),
('004','Anwar','Inaya'),
('005','Taufiq','Fahriyan');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
