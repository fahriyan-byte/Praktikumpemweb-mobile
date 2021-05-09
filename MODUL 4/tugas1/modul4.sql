/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.18-MariaDB : Database - mod4
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mod4` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `mod4`;

/*Table structure for table `peminat` */

DROP TABLE IF EXISTS `peminat`;

CREATE TABLE `peminat` (
  `nama` varchar(50) NOT NULL,
  `profesi` varchar(10) NOT NULL,
  `minat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `peminat` */

insert  into `peminat`(`nama`,`profesi`,`minat`) values 
('Radif','Pelajar','FISIKA'),
('Riyan','Pelajar','BIOLOGI'),
('Ali','Pelajar','SOSIOLOGI'),
('Andi','Pelajar','BIOLOGI'),
('Lia','Pelajar','MATEMATIKA'),
('Lina','Pelajar','MATEMATIKA'),
('Siti','Pelajar','EKONOMI'),
('Budi','Pelajar','FISIKA'),
('Aldo','Pelajar','KIMIA'),
('Gio','Pelajar','GEOGRAFI'),
('Naya','Pelajar','MATEMATIKA');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
