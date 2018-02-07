/* This file is created by MySQLReback 2016-12-10 10:42:43 */
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
 INSERT INTO `hotel_employe` VALUES ('1001','张三','e10adc3949ba59abbe56e057f20f883e','2000-02-09','13229758247','440201200002091123','广州市从化区广从大道13号','2016-12-10 09:09:59'),('1002','王丽','96e79218965eb72c92a549dd5a330112','1999-06-09','13584444478','342302199906093423','广州市天河区棠德南苑','2016-12-07 01:00:10'),('1003','张栩','e10adc3949ba59abbe56e057f20f883e','2016-02-09','13680969855','451502199408010124','广州市天河区珠江新城','0000-00-00 00:00:00'),('1005','李文','e10adc3949ba59abbe56e057f20f883e','1968-02-06','13125645156','441502196802063215','广州市白云区增槎路','0000-00-00 00:00:00');/* MySQLReback Separation */
 /* 创建表结构 `hotel_log` */
 DROP TABLE IF EXISTS `hotel_log`;/* MySQLReback Separation */ CREATE TABLE `hotel_log` (
  `logid` int(10) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `operation` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `operator` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `room_id` int(4) NOT NULL,
  `order_id` int(4) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_log` */
 INSERT INTO `hotel_log` VALUES ('3','2016-12-02 11:12:28','办理入住','1001','103','248'),('4','2016-12-02 13:12:40','办理入住','1001','103','248'),('6','2016-12-02 13:12:21','办理入住','1001','103','248'),('7','2016-12-02 13:12:13','办理改签','1001','110','248'),('8','2016-12-02 13:12:35','办理改签(103 改为 110)','1001','110','248'),('9','2016-12-02 13:12:31','办理到店客户入住','1001','205','0'),('10','2016-12-02 13:12:01','办理到店客户入住','1001','106','254'),('11','2016-12-02 13:12:55','办理到店客户入住','1001','103','255'),('12','2016-12-02 13:12:34','办理到店客户入住','1001','113','256'),('13','2016-12-03 14:12:50','客房售卖商品','1001','103','63'),('14','2016-12-03 16:12:40','客房售卖商品','1001','103','64'),('15','2016-12-05 15:12:01','办理到店客户入住','1001','113','267'),('16','2016-12-05 15:12:41','办理到店客户入住','1001','203','268'),('17','2016-12-05 15:12:14','办理入住','1001','105','270'),('18','2016-12-05 15:12:55','办理改签(105 房改为 113 房)','1001','113','270'),('19','2016-12-05 15:12:16','办理退房','1001','113','270'),('20','2016-12-07 00:12:52','办理改签(103 房改为 113 房)','1001','113','272'),('21','2016-12-07 00:12:10','办理退房','1001','113','272'),('22','2016-12-07 00:12:10','办理入住','1001','102','273'),('23','2016-12-07 00:12:52','办理入住(到店付订单)','1001','102','273'),('24','2016-12-07 00:12:53','办理退房','1001','102','273'),('25','2016-12-07 01:12:34','客房售卖商品','1002','102','65'),('26','2016-12-08 16:12:34','办理入住(到店付订单)','1001','101','274'),('42','2016-12-10 10:12:51','办理入住','1001','103','290'),('43','2016-12-10 10:12:05','办理改签(103 房改为 110 房)','1001','110','290'),('44','2016-12-10 10:12:13','客房售卖商品','1001','110','68'),('45','2016-12-10 10:12:02','办理退房','1001','110','290');/* MySQLReback Separation */
 /* 创建表结构 `hotel_production` */
 DROP TABLE IF EXISTS `hotel_production`;/* MySQLReback Separation */ CREATE TABLE `hotel_production` (
  `production_id` int(4) NOT NULL AUTO_INCREMENT,
  `production_name` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `production_price` varchar(50) DEFAULT NULL,
  `production_number` int(11) DEFAULT NULL,
  PRIMARY KEY (`production_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_production` */
 INSERT INTO `hotel_production` VALUES ('1','纯净水','2.5','337'),('2','方便面','5.5','29'),('3','牙膏','3','126'),('4','牙刷','4','150'),('5','毛巾','10','160');/* MySQLReback Separation */
 /* 创建表结构 `hotel_production_order` */
 DROP TABLE IF EXISTS `hotel_production_order`;/* MySQLReback Separation */ CREATE TABLE `hotel_production_order` (
  `p_order_id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `description` varchar(200) CHARACTER SET gb2312 NOT NULL,
  `sum` varchar(50) NOT NULL,
  `pay_time` datetime NOT NULL,
  `operator` varchar(50) NOT NULL,
  PRIMARY KEY (`p_order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_production_order` */
 INSERT INTO `hotel_production_order` VALUES ('62','3013','纯净水1 件，方便面0 件，牙膏0 件，牙刷0 件，毛巾0 件。','2.5','2016-12-02 13:52:31','1001'),('63','3013','纯净水0 件，方便面0 件，牙膏1 件，牙刷0 件，毛巾0 件。','3','2016-12-02 14:06:50','1001'),('64','3013','纯净水1 件，方便面0 件，牙膏0 件，牙刷0 件，毛巾0 件。','2.5','2016-12-03 16:49:40','1001'),('65','3032','纯净水0 件，方便面0 件，牙膏1 件，牙刷0 件，毛巾0 件。','3','2016-12-07 01:00:33','1002'),('68','3034','纯净水1 件，方便面0 件，牙膏0 件，牙刷0 件，毛巾0 件。','2.5','2016-12-10 10:41:13','1001');/* MySQLReback Separation */
 /* 创建表结构 `hotel_room` */
 DROP TABLE IF EXISTS `hotel_room`;/* MySQLReback Separation */ CREATE TABLE `hotel_room` (
  `room_id` int(4) NOT NULL AUTO_INCREMENT,
  `room_price` int(4) NOT NULL,
  `room_category` varchar(50) CHARACTER SET gb2312 NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2032 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_room` */
 INSERT INTO `hotel_room` VALUES ('101','300','豪华双人房'),('102','250','豪华单人房'),('103','150','标准单人房'),('104','200','标准双人房'),('105','150','标准单人房'),('106','200','标准双人房'),('107','250','豪华单人房'),('109','250','豪华单人房'),('110','150','标准单人房'),('113','150','标准单人房'),('201','200','标准双人房'),('202','300','豪华双人房'),('203','150','标准单人房'),('204','200','标准双人房'),('205','200','标准双人房'),('206','150','标准单人房'),('207','300','豪华双人房'),('208','300','豪华双人房');/* MySQLReback Separation */
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
  `order_status` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `price` double(50,2) NOT NULL,
  `instatus` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `order_time` datetime NOT NULL,
  `operator` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `out_time` datetime DEFAULT NULL,
  `real_money` varchar(50) CHARACTER SET gb2312 DEFAULT NULL,
  `in_time` datetime DEFAULT NULL,
  `cancel_time` datetime DEFAULT NULL,
  PRIMARY KEY (`r_order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=291 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('37','101','豪华单人房','3013','张三','13680969299','651502196805074221','2016-03-07','2016-03-08','已支付','200.00','已退房','2016-11-07 01:49:08','1001','2016-03-08 12:24:59','200','2016-03-08 16:03:56',''),('38','101','豪华单人房','3011','张三','13680912345','441502199409080123','2016-06-08','2016-06-09','已支付','200.00','已退房','2016-11-07 01:50:21','1001','2016-06-09 23:32:02','200','2016-06-08 16:04:02',''),('39','203','标准双人房','3051','王五','13680969200','441502196803031234','2016-03-08','2016-03-11','已支付','250.00','已退房','2016-11-07 01:51:12','1001','2016-12-11 23:32:11','250','2016-03-08 16:04:11',''),('40','204','标准双人房','3052','王五','13680969200','441502196803031234','2016-03-21','2016-03-22','已支付','250.00','已退房','2016-11-07 01:51:24','1002','2016-03-22 23:32:21','250','2016-03-21 16:04:18',''),('41','206','标准双人房','3015','
李文莉','13680969200','441502199409080123','2016-08-11','2016-08-12','已支付','250.00','已退房','2016-11-07 01:51:34','1002','2016-08-12 23:32:31','250','2016-08-11 16:04:27',''),('42','206','标准双人房','3009','
李文莉','13680969200','441502199409080123','2016-08-24','2016-08-25','已支付','250.00','已退房','2016-11-07 01:51:40','1002','2016-08-25 23:32:40','250','2016-08-25 16:04:48',''),('43','207','标准双人房','3010','王五','13680969200','441502196803031234','2016-11-06','2016-11-07','已支付','250.00','已退房','2016-11-07 01:53:38','1001','2016-11-07 23:32:53','250','2016-11-07 16:05:00',''),('44','201','标准单人房','3002','李四','13680969200','441502196803031234','2016-11-07','2016-11-09','已支付','160.00','已退房','2016-11-07 01:55:51','1001','2016-11-09 15:20:34','160','2016-11-07 16:05:13',''),('45','202','标准单人房','3001','张思','13680969200','441502196803031234','2016-11-07','2016-11-08','已支付','160.00','已退房','2016-11-07 01:55:58','1001','2016-11-08 15:20:50','160','2016-11-07 16:05:18',''),('46','202','标准单人房','3002','张三','13680969200','441502196803031234','2016-11-19','2016-11-20','已支付','160.00','已退房','2016-11-07 09:23:06','1001','2016-11-08 15:20:56','160','2016-11-19 16:07:05',''),('47','202','标准单人房','3003','王五','13680969200','441502196803031234','2016-08-08','2016-08-09','已支付','160.00','已退房','2016-11-07 09:23:18','1001','2016-11-25 15:21:02','160','2016-08-08 16:07:19',''),('48','202','标准单人房','3023','李四','13680969200','441502199408080908','2016-08-09','2016-08-10','已支付','160.00','已退房','2016-11-07 09:26:20','1001','2016-08-08 15:21:24','160','2016-08-09 16:07:24',''),('49','104','豪华双人房','3013','
李文莉','13680969200','441502199409080123','2016-08-14','2016-08-15','已支付','250.00','已退房','2016-11-13 19:54:10','3013','2016-08-17 15:21:35','250','2016-08-14 16:07:33',''),('50','103','标准双人房','3013','李四','13680969200','441502199408080908','2016-08-14','2016-08-15','已支付','250.00','已退房','2016-08-13 19:54:22','1002','2016-08-15 15:21:42','250','2016-08-14 16:07:39',''),('79','105','标准单人房','3014','李四','13680969200','441502199409080123','2016-08-14','2016-08-15','已支付','150.00','已退房','2016-11-15 16:09:11','1001','2016-08-08 15:21:55','150','2016-08-14 16:07:47',''),('80','103','标准单人房','3014','王婉','13680969200','441502199408080908','2016-11-17','2016-11-18','已支付','150.00','已退房','2016-11-16 16:11:28','1001','2016-11-18 15:29:38','150','2016-11-17 16:07:54',''),('81','102','豪华单人房','3014','
李文莉','13680969200','441502199409080123','2016-08-16','2016-08-17','已支付','250.00','已退房','2016-11-16 16:13:09','1001','2016-08-17 15:29:45','250','2016-08-16 16:08:01',''),('82','107','豪华单人房','3014','王婉','13680969200','441502199409080123','2016-11-18','2016-11-19','已支付','250.00','已退房','2016-11-16 16:17:47','1001','2016-11-21 17:11:49','250','2016-11-18 16:08:11',''),('181','104','标准双人房','3013','刘伟','13680969200','441502199408080908','2016-11-28','2016-11-29','取消','200.00','待入住','2016-11-18 11:56:51','3013','','0','','2016-11-28 15:19:05'),('201','113','标准单人房','3014','王婉','13680969200','441502200001032131','2016-09-19','2016-09-21','已支付','246.00','已退房','2016-11-19 14:24:42','1001','2016-11-21 17:11:49','246','2016-09-19 16:08:21',''),('202','102','豪华单人房','3014','刘伟','13680969200','441502199408080908','2016-09-20','2016-09-21','已支付','250.00','已退房','2016-11-19 16:05:47','1001','2016-11-21 17:11:49','250','2016-11-20 01:11:38',''),('203','103','标准单人房','3014','刘伟','13680969200','441502200001032131','2016-08-20','2016-08-21','已支付','123.00','已退房','2016-11-19 16:06:17','1001','2016-11-21 17:11:49','123','2016-11-20 01:11:11',''),('204','101','豪华双人房','3014','李文','13680969200','441502199408080908','2016-11-19','2016-11-20','已支付','300.00','已退房','2016-11-19 16:08:24','1001','2016-11-19 18:11:25','300','2016-11-19 17:11:59','');/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('205','107','豪华单人房','3014','王婉','13680969200','441502199409080123','2016-11-20','2016-11-21','已支付','250.00','已退房','2016-11-19 16:18:39','1001','2016-11-21 17:11:49','250','2016-11-20 15:11:04','');/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('206','105','标准单人房','3016','刘伟','13680969200','441502199408080908','2016-11-20','2016-11-21','已支付','123.00','已退房','2016-11-19 17:13:24','1001','2016-11-21 17:11:49','123','2016-11-20 01:11:39',''),('207','104','标准双人房','3016','
李文莉','13680969200','441502199409080123','2016-11-27','2016-11-28','已支付','200.00','已退房','2016-11-19 17:16:20','1001','2016-11-21 17:11:49','200','2016-11-27 16:08:31',''),('208','205','标准双人房','3016','李文','13680969200','441502199409080123','2016-11-27','2016-11-28','已支付','200.00','已退房','2016-11-19 17:20:29','1001','2016-11-21 17:11:49','200','2016-11-27 16:08:45',''),('209','110','标准单人房','3014','李文','13680969200','441502199408080908','2016-11-20','2016-11-21','已支付','123.00','已退房','2016-11-19 22:57:55','1001','2016-11-21 17:11:49','123','2016-11-20 16:08:54',''),('210','113','标准单人房','3015','王婉','13680969200','441502199409080123','2016-11-20','2016-11-21','已支付','123.00','已退房','2016-11-19 23:03:10','1001','2016-11-21 17:11:49','123','2016-11-20 16:09:05',''),('211','103','标准单人房','3014','
李文莉','13680969200','441502199409080123','2016-11-21','2016-11-22','已支付','123.00','已退房','2016-11-21 01:36:41','1001','2016-11-22 18:11:48','49.2','2016-11-21 16:09:14',''),('212','105','标准单人房','3014','李文','13680969200','441502199408080908','2016-11-21','2016-11-22','已支付','123.00','已退房','2016-11-21 01:39:46','1001','2016-11-22 14:11:21','49.2','2016-11-21 16:09:26',''),('213','110','标准单人房','3014','
李文莉','13680969200','441502199409080123','2016-11-21','2016-11-23','已支付','246.00','已退房','2016-11-21 01:42:11','1001','2016-11-21 17:11:49','246','2016-11-21 16:10:28',''),('214','113','标准单人房','3014','刘伟','13680969200','441502199408080908','2016-04-21','2016-04-22','已支付','123.00','已退房','2016-11-21 01:49:57','3014','2016-11-21 17:11:49','123','2016-04-21 16:10:51',''),('215','203','标准单人房','3014','刘强东','13685269874','441502199408080908','2016-11-21','2016-11-22','已支付','123.00','已退房','2016-11-21 09:26:41','1001','2016-11-21 17:11:49','123','2016-11-21 16:11:00',''),('216','206','标准单人房','3014','刘强东','13685269874','441502199409080123','2016-07-21','2016-07-22','已支付','123.00','已退房','2016-11-21 09:29:50','1001','2016-11-21 17:11:49','123','2016-07-21 16:11:08',''),('217','102','豪华单人房','3014','刘伟','18819446036','441502199408080908','2016-07-21','2016-07-22','已支付','100.00','已退房','2016-11-21 13:20:59','1001','2016-11-21 17:11:49','100','2016-11-21 17:11:49',''),('218','107','豪华单人房','3014','完美','18819446036','461802198008080241','2016-11-21','2016-11-22','已支付','250.00','已退房','2016-11-21 13:50:04','1002','2016-11-21 17:11:49','250','2016-11-21 17:11:49',''),('219','109','豪华单人房','3014','刘伟','18819446036','441502199409080123','2016-10-21','2016-10-27','已支付','1500.00','已退房','2016-11-21 13:50:23','1002','2016-11-21 17:11:49','1500','2016-11-21 17:11:49',''),('220','102','豪华单人房','3014','刘伟','18819446036','441502199408080908','2016-11-27','2016-11-28','已支付','250.00','已退房','2016-11-21 13:57:05','1002','2016-11-21 17:11:49','250','2016-11-21 17:11:49',''),('224','206','标准单人房','3014','李沫','18819446036','441502199408086222','2016-10-21','2016-10-22','已支付','123.00','已退房','2016-11-21 16:11:19','1002','2016-11-21 17:11:49','123','2016-11-21 17:11:49',''),('227','101','豪华双人房','3014','王婉','18819446036','441502199408086222','2016-11-22','2016-11-23','已支付','300.00','已退房','2016-11-21 16:11:08','1001','2016-11-21 17:11:49','300','2016-11-22 18:11:51',''),('229','105','标准单人房','3013','张三','13229732466','441502199408075212','2016-11-22','2016-11-23','已支付','150.00','已退房','2016-11-22 14:03:31','1001','2016-11-22 14:11:11','150','2016-11-22 14:11:17',''),('230','103','标准单人房','3013','李文','13229732466','441502199408080908','2016-10-23','2016-10-31','已支付','1200.00','已退房','2016-11-22 14:55:20','3013','2016-11-21 17:11:49','1200','2016-11-21 17:11:49',''),('231','105','标准单人房','3013','刘伟','13229732466','441502199408073506','2016-12-23','2016-12-30','已支付','1050.00','已退房','2016-11-22 14:56:05','1002','2016-11-21 17:11:49','1050','2016-11-21 17:11:49',''),('232','103','标准单人房','3016','张三','1322976355','441502199409070872','2016-12-23','2016-12-24','已支付','150.00','已退房','2016-11-22 15:01:26','1002','2016-11-21 17:11:49','150','2016-11-21 17:11:49',''),('233','103','标准单人房','3013','李文','18819446036','441502199408080908','2016-09-22','2016-09-23','已支付','150.00','已退房','2016-11-22 18:42:17','1002','2016-11-21 17:11:49','150','2016-11-21 17:11:49','');/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('234','103','标准单人房','3011','范义晋','18819446036','441502197409070851','2016-11-23','2016-11-24','已支付','150.00','已退房','2016-11-23 00:11:06','1001','2016-11-21 17:11:49','150','2016-11-21 17:11:49','');/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('235','206','标准单人房','3016','张伟','13229768475','441502197409070822','2016-06-26','2016-06-27','已支付','150.00','已退房','2016-11-26 21:37:32','1001','2016-11-26 21:11:40','150','2016-11-26 21:11:04',''),('236','101','豪华双人房','3016','张大伟','13680969258','441502197409070851','2016-11-26','2016-11-29','已支付','900.00','已退房','2016-11-26 21:55:39','1001','2016-11-26 22:11:55','420','2016-11-26 22:11:23',''),('237','203','标准单人房','88888','张晓薇','18819446036','441502199408070365','2016-11-26','2016-11-27','已支付','150.00','已退房','2016-11-26 22:11:44','1002','2016-11-21 17:11:49','150','2016-11-21 17:11:49',''),('238','207','豪华双人房','88888','刘生','18819446036','441501196808082131','2016-11-26','2016-11-27','已支付','300.00','已退房','2016-11-26 22:11:18','1001','2016-11-21 17:11:49','300','2016-11-21 17:11:49',''),('239','103','标准单人房','3014','张三','13229732466','441502197409070822','2016-11-28','2016-11-29','已支付','150.00','已退房','2016-11-28 00:41:56','3014','2016-11-21 17:11:49','150','2016-11-21 17:11:49',''),('240','104','标准单人房','88888','李文','18819446036','441502197409070822','2016-11-28','2016-11-29','已支付','150.00','已退房','2016-11-28 01:11:26','1002','2016-11-21 17:11:49','150','2016-11-21 17:11:49',''),('241','103','标准单人房','3014','王婉','13680969200','441502197409070822','2016-11-29','2016-11-30','已支付','150.00','已退房','2016-11-28 17:03:37','3014','2016-11-21 17:11:49','150','2016-11-21 17:11:49',''),('242','203','标准单人房','88888','王婉','13680969200','441502197409070812','2016-11-28','2016-11-29','已支付','150.00','已退房','2016-11-28 17:11:32','1002','2016-11-21 17:11:49','150','2016-11-21 17:11:49',''),('243','201','标准双人房','88888','李文','13680969200','441502199409080123','2016-11-28','2016-11-29','已支付','200.00','已退房','2016-11-28 17:11:01','1002','2016-11-21 17:11:49','200','2016-11-21 17:11:49',''),('244','207','豪华双人房','88888','张三','13680969200','441502197409070888','2016-11-28','2016-11-29','已支付','300.00','已退房','2016-11-28 17:11:30','1002','2016-11-21 17:11:49','300','2016-11-21 17:11:49',''),('245','105','标准单人房','88888','李文','13680969200','441502197409070111','2016-11-28','2016-11-29','已支付','150.00','已退房','2016-11-28 17:11:12','1001','2016-11-21 17:11:49','150','2016-11-29 00:11:25',''),('246','102','豪华单人房','3014','阿斯达','13229732466','441502197409070812','2016-11-29','2016-11-30','已支付','250.00','已退房','2016-11-29 00:32:37','1002','2016-11-21 17:11:49','2500','2016-11-21 17:11:49',''),('247','102','豪华单人房','3014','王婉','13229732466','441502197409070812','2016-12-01','2016-12-09','取消','2000.00','待入住','2016-12-01 19:42:33','3014','','0','','2016-11-21 17:11:49'),('248','110','标准单人房','3014','王站','13229732466','441502197409070822','2016-12-02','2016-12-03','已支付','150.00','已退房','2016-12-02 10:36:34','1001','2016-12-02 13:12:20','150','2016-12-02 13:12:40',''),('253','104','标准双人房','88888','张三','13680969200','441502197409070820','2016-12-03','2016-12-04','已支付','200.00','已退房','2016-12-02 13:12:09','1001','2016-11-21 17:11:49','200','2016-11-21 17:11:49',''),('254','106','标准双人房','88888','张三','13680969200','441502197409070821','2016-12-03','2016-12-04','已支付','200.00','已退房','2016-12-02 13:12:01','1001','2016-11-21 17:11:49','200','2016-11-21 17:11:49',''),('255','103','标准单人房','3013','王婉','13229732466','441502199402020641','2016-12-02','2016-12-03','已支付','150.00','已退房','2016-12-02 13:12:55','1001','2016-11-21 17:11:49','150','2016-11-21 17:11:49',''),('256','113','标准单人房','88888','王婉','13680969200','441502199402020640','2016-12-02','2016-12-03','已支付','150.00','已退房','2016-12-02 13:12:34','1001','2016-11-21 17:11:49','150','2016-11-21 17:11:49',''),('269','103','标准单人房','3032','大大','1322973246','441502197409070822','2016-12-05','2016-12-06','已支付','150.00','已退房','2016-12-05 15:20:25','1002','2016-11-21 17:11:49','150','2016-11-21 17:11:49',''),('270','113','标准单人房','3032','李文','18819446129','441502197409070123','2016-12-05','2016-12-06','已支付','150.00','已退房','2016-12-05 15:27:43','1001','2016-12-05 15:12:16','150','2016-12-05 15:12:44',''),('271','103','标准单人房','3032','刘达桓','13229732466','441502199409070213','2016-12-07','2016-12-08','取消','150.00','待入住','2016-12-07 00:45:08','3032','2016-12-07 19:20:01','0','','2016-12-07 19:18:00'),('272','113','标准单人房','3032','刘达桓','13229732466','441502199409080123','2016-12-07','2016-12-08','已支付  ','150.00','已退房','2016-12-07 00:46:17','1001','2016-12-07 00:12:10','150','2016-12-07 00:12:38','');/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('273','102','豪华单人房','3032','刘达桓','13229732466','441502199409070213','2016-12-07','2016-12-11','已支付  ','1000.00','已退房','2016-12-07 00:50:48','1001','2016-12-07 00:12:53','400','2016-12-07 00:12:52','');/* MySQLReback Separation */
 /* 插入数据 `hotel_room_order` */
 INSERT INTO `hotel_room_order` VALUES ('274','101','豪华双人房','3032','刘达桓','13226545286','441502199408080123','2016-12-08','2016-12-09','已支付  ','300.00','已入住','2016-12-08 16:36:59','1001','','','2016-12-08 16:12:34',''),('281','107','豪华单人房','3032','张三','13680969266','441502199408080100','2016-12-09','2016-12-10','已支付','250.00','已入住','2016-12-09 01:05:23','1001','','','',''),('290','110','标准单人房','3034','刘达桓','13229785214','441502199409070213','2016-12-10','2016-12-11','已支付','150.00','已退房','2016-12-10 10:40:22','1001','2016-12-10 10:12:02','150','2016-12-10 10:12:51','');/* MySQLReback Separation */
 /* 创建表结构 `hotel_room_show` */
 DROP TABLE IF EXISTS `hotel_room_show`;/* MySQLReback Separation */ CREATE TABLE `hotel_room_show` (
  `room_category` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `room_description` varchar(255) CHARACTER SET gb2312 NOT NULL,
  `room_pictures` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`room_category`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_room_show` */
 INSERT INTO `hotel_room_show` VALUES ('标准单人房','入住人数：2人| 建筑面积：20m<sup>2</sup> | 床　型：大床  |上网方式：客房wifi</p>窗户：有	| 无烟处理','/hotel/Uploads/2016-12-10/1481333108_1226008152.jpg'),('标准双人房','入住人数：2-3人| 建筑面积：25m<sup>2</sup>| 床 型：大床|上网方式：客房wifi</p>窗户：有|无烟处理','/hotel/Uploads/2016-12-05/1480869455_1819804049.jpg'),('豪华单人房','入住人数：2人| 建筑面积：25m<sup>2</sup> | 床　型：大床                        上网方式：客房wifi</p>窗户：有	|无烟处理','/hotel/Uploads/2016-12-03/1480755463_279203662.jpg'),('豪华双人房','入住人数：2-4人| 建筑面积：29m<sup>2</sup> | 床　型：大床                        上网方式：客房wifi</p>窗户：有	|无烟处理','/hotel/Uploads/2016-12-08/1481185764_1126017721.jpg');/* MySQLReback Separation */
 /* 创建表结构 `hotel_roomer` */
 DROP TABLE IF EXISTS `hotel_roomer`;/* MySQLReback Separation */ CREATE TABLE `hotel_roomer` (
  `roomer_id` int(4) NOT NULL,
  `roomer_name` varchar(50) CHARACTER SET gb2312 NOT NULL,
  `roomer_password` varchar(50) NOT NULL,
  `last_login_time` datetime NOT NULL,
  PRIMARY KEY (`roomer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_roomer` */
 INSERT INTO `hotel_roomer` VALUES ('4001','刘希','e10adc3949ba59abbe56e057f20f883e','2016-12-10 09:10:04');/* MySQLReback Separation */
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
) ENGINE=InnoDB AUTO_INCREMENT=3035 DEFAULT CHARSET=latin1;/* MySQLReback Separation */
 /* 插入数据 `hotel_user` */
 INSERT INTO `hotel_user` VALUES ('3000','heric','马科斯','531502198006011299','96e79218965eb72c92a549dd5a330112','13680969123','正常','1@qq.com','','2016-01-09 21:21:26','0'),('3001','apple','李宁','441502198006011214','4297f44b13955235245b2497399d7a93','13680969124','正常','2@qq.com','b4025bd702d17a89f438d0bba89ea0d9','2016-02-02 21:21:29','1480389275'),('3002','banana','毛阿敏','531502198006011123','96e79218965eb72c92a549dd5a330112','13680969125','正常','3@qq.com','','2016-11-16 21:21:32','0'),('3003','carman','邓紫棋','151502195058547412','96e79218965eb72c92a549dd5a330112','18819446128','正常','4@qq.com','','2016-11-15 21:21:36','0'),('3004','dogge','王伟','441502196408086051','96e79218965eb72c92a549dd5a330112','13680969126','正常','123@qq.com','','2016-11-01 21:21:36','0'),('3005','eligible','王维','151502197408086013','96e79218965eb72c92a549dd5a330112','13680969127','正常','123@qq.com','','2016-05-01 21:21:36','0'),('3006','first','张三','151502200001020321','96e79218965eb72c92a549dd5a330112','13680969128','正常','1111@qq.com','','2016-02-18 21:21:36','0'),('3007','girl','刘达','441502199409070851','96e79218965eb72c92a549dd5a330112','13229788888','正常','111@qq.com','','2016-11-01 21:21:36','0'),('3008','mainly','李震','441502197408086021','96e79218965eb72c92a549dd5a330112','13680969291','正常','123@qq.com','','2016-12-01 18:26:16','0'),('3009','check','张悦','531502196408086051','96e79218965eb72c92a549dd5a330112','13229732466','正常','123@qq.com','','2016-12-01 18:26:06','0'),('3010','testw','乌苏','511502196408086021','96e79218965eb72c92a549dd5a330112','13680969292','正常','123@qq.com','','2016-08-07 18:26:03','0'),('3011','zero','范义晋','441502197409070851','96e79218965eb72c92a549dd5a330112','13229788888','正常','11111@qq.com','','2016-07-07 18:25:59','0'),('3013','test','邓晓','151502199402020641','96e79218965eb72c92a549dd5a330112','13680969129','正常','123@qq.com','','2016-09-06 18:25:53','0'),('3014','酷鱼12','李沫','151502199408086222','96e79218965eb72c92a549dd5a330112','13229732467','正常','497123@qq.com','','2016-06-07 18:25:49','0'),('3015','蓝搜12','张思','511502199458547412','96e79218965eb72c92a549dd5a330112','13680969130','正常','123112313@qq.com','','2016-10-07 18:26:53','0'),('3016','teee','张温馨','441502199408086052','96e79218965eb72c92a549dd5a330112','13680969131','正常','111@qq.com','','2016-12-01 18:25:44','0'),('3019','香菇12','王寺','151502200108086026','4297f44b13955235245b2497399d7a93','13680969132','正常','125@qq.com','1d7859f8d2e76a1c1bdaa05900e8016d','2016-11-14 16:42:56','0'),('3020','感温线1','王思聪','511502199408086049','4297f44b13955235245b2497399d7a93','13229732467','正常','126@qq.com','88862932b312abb1b51aa2f9dd183831','2016-11-14 16:44:37','0'),('3021','qweq','张思思','441502198408086048','4297f44b13955235245b2497399d7a93','13680969133','正常','127@qq.com','38d41e3eefd743934d727013be0d2286','2016-11-14 16:46:03','0'),('3022','asda','范仲淹','441502199408086047','4297f44b13955235245b2497399d7a93','13680969134','正常','128@qq.com','cc8c7bc431c24fdd2a67a46bf5b2a4b2','2016-11-14 16:47:14','0'),('3023','qqqq','叶婷','441502199408086046','4297f44b13955235245b2497399d7a93','13680969135','正常','7@qq.com','98302ec350641cf78d188888cc64ed34','2016-11-14 17:33:41','0'),('3024','哇塞哇塞','黄培','531502198006011213','d0970714757783e6cf17b26fb8e2298f','13548625348','正常','231@qq.com','89993f0635969642f3a406addd73a6c8','2016-11-14 22:22:32','1479600133'),('3026','dada','王吉祥','441502199408086054','4297f44b13955235245b2497399d7a93','13229732467','正常','4948069@qq.com','5cd83d0a17518b5972472d89138f2855','2016-11-19 23:14:55','0'),('3030','艾希尔浅','郭金','511502199408086077','4297f44b13955235245b2497399d7a93','13680969136','正常','20@qq.com','e8137e71e2184e0a29e9c80918f307c1','2016-11-19 23:28:17','1480389229'),('3031','sdas','李盛世','511502197002013012','4297f44b13955235245b2497399d7a93','13680969138','正常','4971231@qq.com','4762d6afd4c1b0a83825114bf7bbf681','2016-11-29 10:32:55','0'),('3032','davan12','刘达达','441502199408086000','e10adc3949ba59abbe56e057f20f883e','13680969137','黑名单','494806@qq.com','cf7dbe36afa7f095b99b2a732788a042','2016-12-06 21:21:36','1480865781'),('3034','davan','刘达桓','441502199409070213','e10adc3949ba59abbe56e057f20f883e','18819446129','正常','494806199@qq.com','a673879f5025dadc5c985a66785536ab','2016-12-10 07:21:35','');/* MySQLReback Separation */