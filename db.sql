/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.6.21 : Database - logon
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`logon` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `logon`;

/*Table structure for table `agen` */

DROP TABLE IF EXISTS `agen`;

CREATE TABLE `agen` (
  `idagen` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `namaagen` varchar(30) DEFAULT NULL,
  `telpon` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`idagen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `agen` */

insert  into `agen`(`idagen`,`namaagen`,`telpon`) values (1,'PT Barometer Phone','024'),(2,'Sumber Baru Phone','024'),(3,'Erafone','024');

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `namabarang` varchar(50) DEFAULT NULL,
  `idkategori` int(5) NOT NULL DEFAULT '1',
  `idsubkategori` int(5) NOT NULL DEFAULT '1',
  `stok` int(10) DEFAULT '0',
  `harga` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `barang` */

insert  into `barang`(`id`,`namabarang`,`idkategori`,`idsubkategori`,`stok`,`harga`) values (1,'Baterai',1,2,750,43000),(2,'Powerbank',2,2,700,100000),(3,'Softcase',4,5,1000,5000),(4,'Gorila Glass',4,5,1000,250000),(5,'LED USB',4,5,1000,2500),(6,'Tempered Glass',4,5,1000,7500),(7,'Baterai Double Power',1,3,1000,5000),(8,'USB Data Cable',4,5,1000,150000);

/*Table structure for table `barangagen` */

DROP TABLE IF EXISTS `barangagen`;

CREATE TABLE `barangagen` (
  `idbarangagen` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `idbarang` int(5) NOT NULL,
  `idagen` int(5) NOT NULL,
  `stokbarang` int(10) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idbarangagen`,`idbarang`,`idagen`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `barangagen` */

insert  into `barangagen`(`idbarangagen`,`idbarang`,`idagen`,`stokbarang`,`timestamp`) values (1,1,1,200,'2016-02-15 13:28:50'),(2,2,1,300,'2016-02-15 13:29:13'),(3,1,3,50,'2016-02-15 13:39:24');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `idkategori` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `namakategori` varchar(20) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`idkategori`,`namakategori`,`keterangan`) values (1,'Baterai',NULL),(2,'Powerbank',NULL),(3,'Charger',NULL),(4,'Aksesoris',NULL);

/*Table structure for table `subkategori` */

DROP TABLE IF EXISTS `subkategori`;

CREATE TABLE `subkategori` (
  `idsubkategori` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `namasubkategori` varchar(25) DEFAULT NULL,
  `keterangan` text,
  PRIMARY KEY (`idsubkategori`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `subkategori` */

insert  into `subkategori`(`idsubkategori`,`namasubkategori`,`keterangan`) values (1,'Samsung',NULL),(2,'Toshiba',NULL),(3,'Logon',NULL),(4,'Strength',NULL),(5,'Global',NULL);

/*Table structure for table `tracktransaction` */

DROP TABLE IF EXISTS `tracktransaction`;

CREATE TABLE `tracktransaction` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `transaksi` text,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tracktransaction` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`level`) values (1,'admin','admin','distributo'),(2,'tendy','tendy','agen1'),(3,'ninda','ninda','agen2'),(4,'nindy','nindy','agen3'),(5,'angela','angela','agen4'),(6,'farhat','farhat','agen5');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
