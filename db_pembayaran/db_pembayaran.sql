/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.0.27-community-nt-log : Database - db_pembayaran
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_pembayaran` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_pembayaran`;

/*Table structure for table `tbl_mahasiswa` */

DROP TABLE IF EXISTS `tbl_mahasiswa`;

CREATE TABLE `tbl_mahasiswa` (
  `npm` char(9) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jurusan` varchar(20) NOT NULL default '',
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  PRIMARY KEY  (`npm`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_mahasiswa` */

insert  into `tbl_mahasiswa`(`npm`,`nama`,`jurusan`,`tgl_lahir`,`jenis_kelamin`,`alamat`,`agama`) values ('13311532','Dawud Kurniawan','Sistem Informasi','1994-10-20','Laki-laki','Way Halim','Islam'),('13311533','Anggun Aji Saputra','Sistem Informasi','1995-10-20','Laki-laki','Ratu dibalau','Islam'),('13311534','Melisa Anggun','Sistem Informasi','1995-12-20','Wanita','Kemiling','Islam');

/*Table structure for table `tbl_pembayaran` */

DROP TABLE IF EXISTS `tbl_pembayaran`;

CREATE TABLE `tbl_pembayaran` (
  `no_transaksi` char(10) NOT NULL,
  `npm` char(9) NOT NULL,
  `tgl_pembayaran` date default NULL,
  `jenis_pembayaran` varchar(50) default NULL,
  `b_pendaftaran` decimal(10,0) default NULL,
  `b_produksi` decimal(10,0) default NULL,
  `b_pembangunan` decimal(10,0) default NULL,
  `bpp_semester` decimal(10,0) default NULL,
  `sks` decimal(10,0) default NULL,
  `lain_lain` decimal(10,0) default NULL,
  `keterangan` varchar(15) default NULL,
  PRIMARY KEY  (`no_transaksi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_pembayaran` */

insert  into `tbl_pembayaran`(`no_transaksi`,`npm`,`tgl_pembayaran`,`jenis_pembayaran`,`b_pendaftaran`,`b_produksi`,`b_pembangunan`,`bpp_semester`,`sks`,`lain_lain`,`keterangan`) values ('12345','13311532','2016-07-20','SP','300','9000','9000','900','900','900','Lunas'),('12346','13311533','2016-07-20','SP','300','700','6000','900','900','600','Lunas'),('12304','13311534','2016-07-21','SG','555','4545','333','666','565','545','Lunas');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
