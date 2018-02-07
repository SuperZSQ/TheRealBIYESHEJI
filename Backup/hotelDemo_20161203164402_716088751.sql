/* This file is created by MySQLReback 2016-12-03 16:44:02 */
 /* 创建表结构 `hotel_employe` */
 DROP TABLE IF EXISTS `hotel_employe`;/* MySQLReback Separation */ CREATE TABLE `hotel_employe` (
  `employe_id` int(4) NOT NULL AUTO_INCREMENT,
  `employe_name` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `employe_password` varchar(50) NOT NULL,
  `employe_birthday` date NOT NULL,
  `employe_mobile` varchar(50) NOT NULL,
  `employe_idcard` varchar(50) NOT NULL,
  `employe_address` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `last_login_time` datetime DEFAULT NULL,
  PRIMARY KEY (`employe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1006 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_employe` */
 INSERT INTO `hotel_employe` VALUES ('1001','张三','e10adc3949ba59abbe56e057f20f883e','2000-02-09','13229758247','440201200002091123','广州市从化区广从大道13号','2016-12-03 01:11:12'),('1002','王丽','96e79218965eb72c92a549dd5a330112','1999-06-09','13584444478','342302199906093423','广州市天河区棠德南苑','2016-11-26 23:19:59'),('1003','张栩','e10adc3949ba59abbe56e057f20f883e','2016-02-09','13680969855','451502199408010124','广州市天河区珠江新城',''),('1005','李文','e10adc3949ba59abbe56e057f20f883e','1968-02-06','13125645156','441502196802063215','广州市白云区增槎路','');/* MySQLReback Separation */
 /* 创建表结构 `hotel_log` */
 DROP TABLE IF EXISTS `hotel_log`;/* MySQLReback Separation */ CREATE TABLE `hotel_log` (
  `logid` int(10) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `operation` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `operator` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `room_id` int(4) NOT NULL,
  `order_id` int(4) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_log` */
 INSERT INTO `hotel_log` VALUES ('3','2016-12-02 11:12:28','办理入住','1001','103','248'),('4','2016-12-02 13:12:40','办理入住','1001','103','248'),('6','2016-12-02 13:12:21','办理入住','1001','103','248'),('7','2016-12-02 13:12:13','办理改签','1001','110','248'),('8','2016-12-02 13:12:35','办理改签(103 改为 110)','1001','110','248'),('9','2016-12-02 13:12:31','办理到店客户入住','1001','205','0'),('10','2016-12-02 13:12:01','办理到店客户入住','1001','106','254'),('11','2016-12-02 13:12:55','办理到店客户入住','1001','103','255'),('12','2016-12-02 13:12:34','办理到店客户入住','1001','113','256'),('13','2016-12-03 14:12:50','客房售卖商品','1001','103','63');/* MySQLReback Separation */
 /* 创建表结构 `hotel_production` */
 DROP TABLE IF EXISTS `hotel_production`;/* MySQLReback Separation */ CREATE TABLE `hotel_production` (
  `production_id` int(4) NOT NULL AUTO_INCREMENT,
  `production_name` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `production_price` varchar(50) DEFAULT NULL,
  `production_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`production_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_production` */
 INSERT INTO `hotel_production` VALUES ('1','纯净水','2.5','60'),('2','方便面','5.5','50'),('3','牙膏','3','60'),('4','牙刷','4','50'),('5','毛巾','10','60');/* MySQLReback Separation */
 /* 创建表结构 `hotel_production_order` */
 DROP TABLE IF EXISTS `hotel_production_order`;/* MySQLReback Separation */ CREATE TABLE `hotel_production_order` (
  `p_order_id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `description` varchar(200) CHARACTER SET gb2312 NOT NULL,
  `sum` varchar(50) NOT NULL,
  `pay_time` datetime NOT NULL,
  `operator` varchar(50) NOT NULL,
  PRIMARY KEY (`p_order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_production_order` */
 INSERT INTO `hotel_production_order` VALUES ('62','3013','纯净水1 件，方便面0 件，牙膏0 件，牙刷0 件，毛巾0 件。','2.5','2016-12-02 13:52:31','1001'),('63','3013','纯净水0 件，方便面0 件，牙膏1 件，牙刷0 件，毛巾0 件。','3','2016-12-02 14:06:50','1001');/* MySQLReback Separation */
 /* 创建表结构 `hotel_room` */
 DROP TABLE IF EXISTS `hotel_room`;/* MySQLReback Separation */ CREATE TABLE `hotel_room` (
  `room_id` int(4) NOT NULL AUTO_INCREMENT,
  `room_price` int(4) NOT NULL,
  `room_category` varchar(50) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=208 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_room` */
 INSERT INTO `hotel_room` VALUES ('101','300','豪华双人房'),('102','250','豪华单人房'),('103','150','标准单人房'),('104','200','标准双人房'),('105','150','标准单人房'),('106','200','标准双人房'),('107','250','豪华单人房'),('109','250','豪华单人房'),('110','150','标准单人房'),('113','150','标准单人房'),('201','200','标准双人房'),('202','300','豪华双人房'),('203','150','标准单人房'),('204','200','标准双人房'),('205','200','标准双人房'),('206','150','标准单人房'),('207','300','豪华双人房');/* MySQLReback Separation */
 /* 创建表结构 `hotel_room_order` */
 DROP TABLE IF EXISTS `hotel_room_order`;/* MySQLReback Separation */ CREATE TABLE `hotel_room_order` (
  `r_order_id` int(4) NOT NULL AUTO_INCREMENT,
  `room_id` int(4) NOT NULL,
  `category` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `user_id` int(4) NOT NULL,
  `user_name` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `user_mobile` varchar(11) CHARACTER SET gb2312 DEFAULT NULL,
  `user_idcard` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `starttime` date DEFAULT NULL,
  `endtime` date DEFAULT NULL,
  `order_status` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `price` double(50,2) DEFAULT NULL,
  `instatus` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `order_time` datetime DEFAULT NULL,
  `operator` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `out_time` datetime DEFAULT NULL,
  `real_money` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `in_time` datetime DEFAULT NULL,
  `cancel_time` datetime DEFAULT NULL,
  PRIMARY KEY (`r_order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=257 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('37','101','豪华单人房','3013','张三','13680969874','123','2016-03-07','2016-03-08','已支付','200.00','待入住','2016-11-07 01:49:08','3013','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('38','101','豪华单人房','3011','张三','','124','2016-06-08','2016-06-09','已支付','200.00','待入住','2016-11-07 01:50:21','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('39','203','标准双人房','3051','王五','','125','2016-03-08','2016-03-11','已支付','250.00','待入住','2016-11-07 01:51:12','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('40','204','标准双人房','3052','王五','1','125','2016-03-21','2016-03-22','已支付','250.00','待入住','2016-11-07 01:51:24','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('41','206','标准双人房','3015','张三','','123','2016-08-11','2016-08-12','已支付','250.00','待入住','2016-11-07 01:51:34','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('42','206','标准双人房','3009','张思','','126','2016-08-24','2016-08-25','已支付','250.00','待入住','2016-11-07 01:51:40','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('43','207','标准双人房','3010','王五','1','125','2016-11-06','2016-11-07','已支付','250.00','待入住','2016-11-07 01:53:38','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('44','201','标准单人房','3002','李四','','124','2016-11-07','2016-11-09','取消','160.00','待入住','2016-11-07 01:55:51','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('45','202','标准单人房','3001','张思','','125','2016-11-07','2016-11-08','取消','160.00','待入住','2016-11-07 01:55:58','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('46','202','标准单人房','3002','张三','','123','2016-11-19','2016-11-20','取消','160.00','待入住','2016-11-07 09:23:06','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('47','202','标准单人房','3003','王五','','125','2016-11-08','2016-11-09','取消','160.00','已入住','2016-11-07 09:23:18','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('48','202','标准单人房','3023','李四','1','124','2016-11-09','2016-11-10','取消','160.00','已入住','2016-11-07 09:26:20','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('49','104','豪华双人房','3013','礼物','1231','123123','2016-11-14','2016-11-15','取消','4.00','已入住','2016-11-13 19:54:10','3013','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('50','103','标准双人房','3013','李四','qeqw','124','2016-11-14','2016-11-15','取消','2.00','已入住','2016-11-13 19:54:22','1002','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('79','105','标准单人房','3014','李四','431234','124','2016-11-14','2016-11-15','取消','150.00','待入住','2016-11-15 16:09:11','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('80','103','标准单人房','3014','132','1231','','2016-11-17','2016-11-18','取消','150.00','待入住','2016-11-16 16:11:28','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('81','102','豪华单人房','3014','123','123123','','2016-11-16','2016-11-17','取消','250.00','待入住','2016-11-16 16:13:09','1001','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('82','107','豪华单人房','3014','12312','1231','12321','2016-11-18','2016-11-19','已支付','250.00','待入住','2016-11-16 16:17:47','1001','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('181','104','标准双人房','3013','4234','3123','312','2016-11-28','2016-11-29','取消','200.00','待入住','2016-11-18 11:56:51','3013','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('201','113','标准单人房','3014','1231','312','3123','2016-11-19','2016-11-21','在线支付','246.00','待入住','2016-11-19 14:24:42','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('202','102','豪华单人房','3014','312','3123','312','2016-11-20','2016-11-21','到店付','250.00','已入住','2016-11-19 16:05:47','1001','0000-00-00 00:00:00','','2016-11-20 01:11:38','0000-00-00 00:00:00'),('203','103','标准单人房','3014','3123','3123','1231','2016-11-20','2016-11-21','到店付','123.00','已入住','2016-11-19 16:06:17','1001','0000-00-00 00:00:00','','2016-11-20 01:11:11','0000-00-00 00:00:00'),('204','101','豪华双人房','3014','123','3123','3123','2016-11-19','2016-11-20','已支付','300.00','已退房','2016-11-19 16:08:24','1001','2016-11-19 18:11:25','300','2016-11-19 17:11:59','0000-00-00 00:00:00'),('205','107','豪华单人房','3014','2131','31231','1231','2016-11-20','2016-11-21','到店付','250.00','待入住','2016-11-19 16:18:39','1001','0000-00-00 00:00:00','','2016-11-20 15:11:04','0000-00-00 00:00:00');/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('206','105','标准单人房','3016','312','3123','3123','2016-11-20','2016-11-21','已支付','123.00','已入住','2016-11-19 17:13:24','1001','0000-00-00 00:00:00','','2016-11-20 01:11:39','0000-00-00 00:00:00');/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('207','104','标准双人房','3016','3123','3123','13231','2016-11-27','2016-11-28','已支付','200.00','待入住','2016-11-19 17:16:20','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('208','205','标准双人房','3016','31231','3123','31231','2016-11-27','2016-11-28','已支付','200.00','待入住','2016-11-19 17:20:29','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('209','110','标准单人房','3014','312','3123','132123','2016-11-20','2016-11-21','已支付','123.00','待入住','2016-11-19 22:57:55','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('210','113','标准单人房','3015','312312','312312','3123','2016-11-20','2016-11-21','已支付','123.00','待入住','2016-11-19 23:03:10','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('211','103','标准单人房','3014','31231','3123','1323','2016-11-21','2016-11-22','已支付','123.00','已退房','2016-11-21 01:36:41','1001','2016-11-22 18:11:48','49.2','0000-00-00 00:00:00','0000-00-00 00:00:00'),('212','105','标准单人房','3014','31231','3123','1323','2016-11-21','2016-11-22','已支付','123.00','已退房','2016-11-21 01:39:46','1001','2016-11-22 14:11:21','49.2','0000-00-00 00:00:00','0000-00-00 00:00:00'),('213','110','标准单人房','3014','31231','3123','1323','2016-11-21','2016-11-23','已支付','246.00','已入住','2016-11-21 01:42:11','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('214','113','标准单人房','3014','31231','3123','1323','2016-11-21','2016-11-22','已支付','123.00','待入住','2016-11-21 01:49:57','3014','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('215','203','标准单人房','3014','掌握','13685269874','441502199408080908','2016-11-21','2016-11-22','已支付','123.00','待入住','2016-11-21 09:26:41','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('216','206','标准单人房','3014','掌握','13685269874','441502199408080908','2016-11-21','2016-11-22','取消','123.00','待入住','2016-11-21 09:29:50','3014','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('217','102','豪华单人房','3014','123','123','213','2016-11-21','2016-11-22','到店付','0.00','已入住','2016-11-21 13:20:59','','0000-00-00 00:00:00','','2016-11-21 17:11:49','0000-00-00 00:00:00'),('218','107','豪华单人房','3014','完美','13236874125','461802198008080241','2016-11-21','2016-11-22','已支付','250.00','待入住','2016-11-21 13:50:04','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('219','109','豪华单人房','3014','123','123','123','2016-11-21','2016-11-27','已支付','1500.00','已入住','2016-11-21 13:50:23','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('220','102','豪华单人房','3014','123123','13231','3123','2016-11-27','2016-11-28','已支付','250.00','待入住','2016-11-21 13:57:05','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('224','206','标准单人房','3014','李沫','','441502199408086222','2016-11-21','2016-11-22','已支付','123.00','待入住','2016-11-21 16:11:19','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('227','101','豪华双人房','3014','李沫','','441502199408086222','2016-11-22','2016-11-23','已支付','300.00','已入住','2016-11-21 16:11:08','1001','0000-00-00 00:00:00','','2016-11-22 18:11:51','0000-00-00 00:00:00'),('229','105','标准单人房','3013','张三','13229732466','441502199408075212','2016-11-22','2016-11-23','已支付','150.00','待入住','2016-11-22 14:03:31','1001','2016-11-22 14:11:11','150','2016-11-22 14:11:17','0000-00-00 00:00:00'),('230','103','标准单人房','3013','皇室典范','13229732466','441502199408073506','2016-12-23','2016-12-31','取消','1200.00','待入住','2016-11-22 14:55:20','3013','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('231','105','标准单人房','3013','皇室典范','13229732466','441502199408073506','2016-12-23','2016-12-30','到店付','1050.00','待入住','2016-11-22 14:56:05','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('232','103','标准单人房','3016','张三','1322976355','441502199409070872','2016-12-23','2016-12-24','已支付','150.00','待入住','2016-11-22 15:01:26','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('233','103','标准单人房','3013','31231','1231','3123','2016-11-22','2016-11-23','已支付','150.00','待入住','2016-11-22 18:42:17','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('234','103','标准单人房','3011','范义晋','','441502197409070851','2016-11-23','2016-11-24','已支付','150.00','已入住','2016-11-23 00:11:06','1001','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00');/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('235','206','标准单人房','3016','张伟','13229768475','441502197409070822','2016-11-26','2016-11-27','已支付','150.00','已退房','2016-11-26 21:37:32','1001','2016-11-26 21:11:40','150','2016-11-26 21:11:04','0000-00-00 00:00:00');/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('236','101','豪华双人房','3016','张大伟','13680969258','441502197409070851','2016-11-26','2016-11-29','已支付','900.00','已入住','2016-11-26 21:55:39','1001','2016-11-26 22:11:55','420','2016-11-26 22:11:23','0000-00-00 00:00:00'),('237','203','标准单人房','88888','张晓薇','','441502199408070365','2016-11-26','2016-11-27','已支付','150.00','已入住','2016-11-26 22:11:44','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('238','207','豪华双人房','88888','刘生','','441501196808082131','2016-11-26','2016-11-27','已支付','300.00','已入住','2016-11-26 22:11:18','1001','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('239','103','标准单人房','3014','张三','13229732466','441502197409070822','2016-11-28','2016-11-29','取消','150.00','待入住','2016-11-28 00:41:56','3014','0000-00-00 00:00:00','','0000-00-00 00:00:00','2016-11-28 01:11:58'),('240','0','标准单人房','88888','阿斯达','','441502197409070822','2016-11-28','2016-11-29','已支付','150.00','已入住','2016-11-28 01:11:26','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('241','103','标准单人房','3014','1','123123','441502197409070822','2016-11-29','2016-11-30','已支付','150.00','待入住','2016-11-28 17:03:37','3014','0000-00-00 00:00:00','','0000-00-00 00:00:00','2016-11-28 17:11:12'),('242','203','标准单人房','88888','阿斯达','','441502197409070812','2016-11-28','2016-11-29','已支付','150.00','已入住','2016-11-28 17:11:32','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('243','201','标准双人房','88888','四大皆空','','4502196801051234','2016-11-28','2016-11-29','已支付','200.00','已入住','2016-11-28 17:11:01','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('244','207','豪华双人房','88888','张三','','441502197409070888','2016-11-28','2016-11-29','已支付','300.00','已入住','2016-11-28 17:11:30','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('245','105','标准单人房','88888','新注册','','441502197409070111','2016-11-28','2016-11-29','已支付','150.00','已入住','2016-11-28 17:11:12','1001','0000-00-00 00:00:00','','2016-11-29 00:11:25','0000-00-00 00:00:00'),('246','102','豪华单人房','3014','阿斯达','13229732466','441502197409070812','2016-11-29','2016-11-30','已支付','250.00','待入住','2016-11-29 00:32:37','','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('247','102','豪华单人房','3014','电话交换机','13229732466','441502197409070812','2016-12-01','2016-12-09','取消','2000.00','待入住','2016-12-01 19:42:33','3014','0000-00-00 00:00:00','','0000-00-00 00:00:00','2016-12-01 19:12:50'),('248','110','标准单人房','3014','站','13229732466','441502197409070822','2016-12-02','2016-12-03','已支付','150.00','已入住','2016-12-02 10:36:34','1001','2016-12-02 13:12:20','150','2016-12-02 13:12:40','0000-00-00 00:00:00'),('253','104','标准双人房','88888','张三','','441502197409070820','2016-12-03','2016-12-04','已支付','200.00','已入住','2016-12-02 13:12:09','1001','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('254','106','标准双人房','88888','张三','','441502197409070821','2016-12-03','2016-12-04','已支付','200.00','已入住','2016-12-02 13:12:01','1001','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('255','103','标准单人房','3013','大','13229732466','441502199402020641','2016-12-02','2016-12-03','已支付','150.00','已入住','2016-12-02 13:12:55','1001','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00'),('256','113','标准单人房','88888','大','','441502199402020640','2016-12-02','2016-12-03','已支付','150.00','已入住','2016-12-02 13:12:34','1001','0000-00-00 00:00:00','','0000-00-00 00:00:00','0000-00-00 00:00:00');/* MySQLReback Separation */
 /* 创建表结构 `hotel_room_show` */
 DROP TABLE IF EXISTS `hotel_room_show`;/* MySQLReback Separation */ CREATE TABLE `hotel_room_show` (
  `room_category` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `room_description` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `room_pictures` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`room_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_room_show` */
 INSERT INTO `hotel_room_show` VALUES ('标准单人房','入住人数：2人| 建筑面积：20m<sup>2</sup> | 床　型：大床  |上网方式：客房wifi</p>窗户：有	| 无烟处理','/hotel/Public/images/bzdr.jpg'),('标准双人房','入住人数：2-3人| 建筑面积：25m<sup>2</sup> | 床 型：大床|上网方式：客房wifi</p>窗户：有|无烟处理','/hotel/Public/images/bzsr.jpg'),('豪华单人房','入住人数：2人| 建筑面积：25m<sup>2</sup> | 床　型：大床                        上网方式：客房wifi</p>窗户：有	|无烟处理','/hotel/Public/images/hhdr.jpg'),('豪华双人房','入住人数：2-4人&nbsp;| 建筑面积：29m<sup>2</sup> | 床　型：大床
                        &nbsp;&nbsp;上网方式：客房wifi</p>窗户：有	|&nbsp;无烟处理','/hotel/Public/images/hhsr.jpg');/* MySQLReback Separation */
 /* 创建表结构 `hotel_roomer` */
 DROP TABLE IF EXISTS `hotel_roomer`;/* MySQLReback Separation */ CREATE TABLE `hotel_roomer` (
  `roomer_id` int(4) NOT NULL,
  `roomer_name` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `roomer_password` varchar(50) NOT NULL,
  `last_login_time` datetime NOT NULL,
  PRIMARY KEY (`roomer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_roomer` */
 INSERT INTO `hotel_roomer` VALUES ('4001','刘希','96e79218965eb72c92a549dd5a330112','2016-12-03 16:43:54');/* MySQLReback Separation */
 /* 创建表结构 `hotel_user` */
 DROP TABLE IF EXISTS `hotel_user`;/* MySQLReback Separation */ CREATE TABLE `hotel_user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `user_nickname` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_IDcard` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_password` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_mobile` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_status` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `user_token` varchar(50) CHARACTER SET gbk DEFAULT NULL,
  `regtime` datetime DEFAULT NULL,
  `repass_time` int(12) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3032 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_user` */
 INSERT INTO `hotel_user` VALUES ('1','heric','1','461502198006011299','96e79218965eb72c92a549dd5a330112','13685741256','正常','1@qq.com','','2016-11-09 21:21:26','0'),('3001','3001','300dsf','461502198006011214','96e79218965eb72c92a549dd5a330112','18819446125','正常','11@qq.com','b4025bd702d17a89f438d0bba89ea0d9','2016-11-02 21:21:29','1480389275'),('3002','1','test','461502198006011123','96e79218965eb72c92a549dd5a330112','13102033631','正常','12@qq.com','','2016-11-01 21:21:32','0'),('3003','davan','da','441502195058547412','96e79218965eb72c92a549dd5a330112','18819446128','正常','13@qq.com','','2016-11-16 14:58:06','0'),('3004','','???','441502196408086051','96e79218965eb72c92a549dd5a330112','15900870589','正常','123@qq.com','','2016-11-01 21:21:36','0'),('3005','','???','441502197408086051','96e79218965eb72c92a549dd5a330112','13680985741','正常','124@qq.com','','2016-02-03 14:57:05','0'),('3006','','张三','441502200099999999','96e79218965eb72c92a549dd5a330112','15900108521','正常','1111@qq.com','','2016-08-11 14:58:01','0'),('3007','1111','刘达','441502199409070851','96e79218965eb72c92a549dd5a330112','13229788888','正常','111@qq.com','','2016-06-03 14:57:10','0'),('3008','2221','张三','461502197408086021','96e79218965eb72c92a549dd5a330112','13229732466','正常','14@qq.com','','2016-07-27 14:57:55','0'),('3009','2222','张三','531502196408086051','96e79218965eb72c92a549dd5a330112','13229732466','正常','15@qq.com','','2016-02-10 13:57:15','0'),('3010','3333','张三','441502196408086021','96e79218965eb72c92a549dd5a330112','13229732466','正常','16@qq.com','','2016-06-15 14:57:23','0'),('3011','11111','范义晋','441502197409070851','96e79218965eb72c92a549dd5a330112','13229788888','正常','17@qq.com','','2016-11-03 14:57:29','0'),('3013','test','测试','441502199402020641','96e79218965eb72c92a549dd5a330112','13229732466','正常','18@qq.com','','2016-05-03 14:57:34','0'),('3014','酷鱼12','李沫','441502199408086222','96e79218965eb72c92a549dd5a330112','13229732467','黑名单','19@qq.com','','2016-06-29 14:57:39','0'),('3015','1111','张思','441502199458547412','96e79218965eb72c92a549dd5a330112','13229732466','正常','20@qq.com','','2016-10-26 14:57:45','0'),('3016','teee','翻译机','441502199408086052','96e79218965eb72c92a549dd5a330112','13229732466','正常','21@qq.com','','2016-09-27 14:57:49','0'),('3019','4444','阿斯达','441502200108086026','96e79218965eb72c92a549dd5a330112','13229732466','正常','125@qq.com','1d7859f8d2e76a1c1bdaa05900e8016d','2016-11-14 16:42:56','0'),('3020','1321','撒嗒','441502199408086049','96e79218965eb72c92a549dd5a330112','13229732467','正常','126@qq.com','88862932b312abb1b51aa2f9dd183831','2016-11-14 16:44:37','0'),('3021','9999','萨达完全','441502198408086048','96e79218965eb72c92a549dd5a330112','13229732466','正常','127@qq.com','38d41e3eefd743934d727013be0d2286','2016-11-14 16:46:03','0'),('3022','8888','副主席','441502199408086047','96e79218965eb72c92a549dd5a330112','13229732466','正常','128@qq.com','cc8c7bc431c24fdd2a67a46bf5b2a4b2','2016-11-14 16:47:14','0'),('3023','7777','阿斯达','441502199408086046','96e79218965eb72c92a549dd5a330112','13229732466','正常','22@qq.com','98302ec350641cf78d188888cc64ed34','2016-11-14 17:33:41','0'),('3024','1122','阿打算','461502198006011213','96e79218965eb72c92a549dd5a330112','13548625348','正常','23@qq.com','89993f0635969642f3a406addd73a6c8','2016-11-14 22:22:32','1479600133'),('3026','dada','撒嗒','441502199408086054','96e79218965eb72c92a549dd5a330112','13229732467','正常','24@qq.com','5cd83d0a17518b5972472d89138f2855','2016-11-19 23:14:55','0'),('3030','123123','大声的','441502199408086077','96e79218965eb72c92a549dd5a330112','13229732466','正常','25@qq.com','e8137e71e2184e0a29e9c80918f307c1','2016-11-19 23:28:17','1480389229'),('3031','sdas','仿盛大','444444444444444444','96e79218965eb72c92a549dd5a330112','13229732466','待激活','26@qq.com','4762d6afd4c1b0a83825114bf7bbf681','2016-11-29 10:32:55','0');/* MySQLReback Separation */