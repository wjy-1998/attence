# Host: localhost  (Version 5.7.20-log)
# Date: 2019-12-19 20:55:08
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "class"
#

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(255) DEFAULT NULL,
  `banzhang` varchar(255) DEFAULT NULL,
  `banzhuren` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "class"
#

INSERT INTO `class` VALUES (1,'17网络2班','郑登科','杨水华'),(2,'17电商3班','方伟鹏','邱建英'),(3,'18数媒班','何欣怡','蔡长峰'),(4,'18动漫班','李博崎','黄土荣'),(5,'19计应1班','石钊','张桐珲');

#
# Structure for table "kaoqin"
#

DROP TABLE IF EXISTS `kaoqin`;
CREATE TABLE `kaoqin` (
  `Id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(255) DEFAULT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `zhuanye_name` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `kctime` varchar(255) DEFAULT NULL,
  `pingyu` varchar(255) DEFAULT NULL,
  `pingfen` varchar(255) DEFAULT NULL,
  `kaoqin` varchar(255) DEFAULT NULL,
  `jieci` varchar(255) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

#
# Data for table "kaoqin"
#

/*!40000 ALTER TABLE `kaoqin` DISABLE KEYS */;
INSERT INTO `kaoqin` VALUES (1,'201730622240','17网络2班','网络专业','2019-12-19','Thursday','15:44:33',NULL,NULL,'迟到','第六节','16'),(2,'201730622120','17网络2班','网络专业','2019-12-19','Thursday','15:45:10','','','迟到','第六节','16'),(3,'201730622204','17网络2班','网络专业','2019-12-19','Thursday','16:45:18','','','迟到','第七节','16'),(4,'201730622221','17网络2班','网络专业','2019-12-19','Tuesday','16:46:22',NULL,NULL,'迟到','第七节','16'),(5,'201730622245','17电商3班','电商专业','2019-12-19','Thursday','15:46:37',NULL,NULL,'迟到','第六节','16'),(6,'201730622246','17电商3班','电商专业','2019-12-19','Thursday','16:46:51',NULL,NULL,'迟到','第七节','16'),(7,'201730622132','18数媒班','数媒专业','2019-12-16','Monday','15:48:48',NULL,NULL,'迟到','第六节','16'),(8,'201730622444','18动漫班','动漫专业','2019-12-16','Monday','15:49:09',NULL,NULL,'迟到','第六节','16'),(9,'201730622444','18动漫班','动漫专业','2019-12-16','Monday','15:49:14',NULL,NULL,'迟到','第六节','16'),(10,'201730622443','19计应1班','计应专业','2019-12-24','Tuesday','8:49:58',NULL,NULL,'迟到','第一节','17'),(11,'201730624414','19计应1班','计应专业','2019-12-24','Tuesday','8:50:01',NULL,NULL,'迟到','第一节','17'),(12,'201730622213','17网络2班','网络专业','2019-12-19','Tuesday',NULL,NULL,NULL,'旷课','第七节','16'),(17,'201730622213','17网络2班','网络专业','2019-12-19','Thursday',NULL,NULL,'','旷课','第六节','16'),(18,'201730622288','17电商3班','电商专业','2019-12-19','Thursday',NULL,NULL,'','旷课','第七节','16'),(19,'201730622240','17网络2班','网络专业','2019-12-19','Thursday','20:53:59',NULL,NULL,'迟到','第一节','16');
/*!40000 ALTER TABLE `kaoqin` ENABLE KEYS */;

#
# Structure for table "students"
#

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `xuehao` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `class_id` int(15) DEFAULT NULL,
  `zhuanye_id` int(15) DEFAULT NULL,
  `grade` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

#
# Data for table "students"
#

INSERT INTO `students` VALUES (1,'201730622240',123456,'吴金钰',1,1,'17级'),(2,'201730622120',456789,'李婉贞',1,1,'17级'),(3,'201730622204',123457,'陈敏仪',1,1,'17级'),(4,'201730622213',201222,'黄秋婵',1,1,'17级'),(5,'201730622221',123456,'梁丽霞',1,1,'17级'),(6,'201730622246',895623,'梁彩华',2,2,'17级'),(7,'201730622278',784512,'梁文冬',2,2,'17级'),(8,'201730622245',784523,'叶凰靖',2,2,'17级'),(9,'201730622244',784512,'张三',2,2,'17级'),(10,'201730622288',744125,'李斯',2,2,'17级'),(11,'201730622132',852123,'赵青',3,5,'18级'),(12,'201730622155',124578,'富凯翊',3,5,'18级'),(13,'201730622455',121212,'王五',3,5,'18级'),(14,'201730622248',454545,'千万',3,5,'18级'),(15,'201730622144',121221,'林辉',3,5,'18级'),(16,'201730622444',454545,'文文',4,4,'18级'),(17,'201730622445',454555,'李奈',4,4,'18级'),(18,'201730624498',458956,'林浩',4,4,'18级'),(19,'201730622447',121255,'金鱼',4,4,'18级'),(20,'201730622441',656588,'何凯',4,4,'18级'),(21,'201730622443',454555,'李奈蜜',5,3,'19级'),(22,'201730622415',454555,'郭桥',5,3,'19级'),(23,'201730624414',458956,'林浩',5,3,'19级'),(24,'201730622413',121255,'金鱼',5,3,'19级'),(25,'201730622412',656588,'何凯',5,3,'19级');

#
# Structure for table "teacher"
#

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE `teacher` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `jiaoshihao` varchar(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `bumen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "teacher"
#

INSERT INTO `teacher` VALUES (1,'1','谭湘',123456,'信息工程系'),(2,'2','邱建英',456789,'信息工程系'),(3,'3','蔡长峰',123456,'信息工程系'),(4,'4','黄土荣',1245687,'信息工程系'),(5,'fdy','辅导员',123456,'信息工程系');

#
# Structure for table "time"
#

DROP TABLE IF EXISTS `time`;
CREATE TABLE `time` (
  `id` int(12) NOT NULL,
  `sk_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '上课时间',
  `js_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL COMMENT '课程时间',
  `bd_time` varchar(255) DEFAULT NULL,
  `jieci` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "time"
#

/*!40000 ALTER TABLE `time` DISABLE KEYS */;
INSERT INTO `time` VALUES (1,'08:10:00','8:55:00','07:50:00','第一节'),(2,'09:05:00','09:50:00','08:56:00','第二节'),(3,'10:10:00','10:55:00','10:00:00','第三节'),(4,'11:05:00','11:50:00','11:00:00','第四节'),(5,'14:30:00','15:15:00','14:20:00','第五节'),(6,'15:25:00','16:10:00','15:16:00','第六节'),(7,'16:25:00','17:00:00','16:11:00','第七节'),(8,'17:10:00','18:00:00','17:01:00','第八节');
/*!40000 ALTER TABLE `time` ENABLE KEYS */;

#
# Structure for table "week"
#

DROP TABLE IF EXISTS `week`;
CREATE TABLE `week` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `begin` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `end` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `weekend` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#
# Data for table "week"
#

/*!40000 ALTER TABLE `week` DISABLE KEYS */;
INSERT INTO `week` VALUES (1,'2019-09-02','2019-09-08','1'),(2,'2019-09-09','2019-09-15','2'),(3,'2019-09-16','2019-09-22','3'),(4,'2019-09-23','2019-09-29','4'),(5,'2019-9-30','2019-10-6','5'),(6,'2019-10-7','2019-10-13','6'),(7,'2019-10-14','2019-10-20','7'),(8,'2019-10-21','2019-10-27','8'),(9,'2019-10-28','2019-11-3','9'),(10,'2019-11-4','2019-11-10','10'),(11,'2019-11-11','2019-11-17','11'),(12,'2019-11-18','2019-11-24','12'),(13,'2019-11-25','2019-12-1','13'),(14,'2019-12-2','2019-12-8','14'),(15,'2019-12-09','2019-12-15','15'),(16,'2019-12-16','2019-12-22','16'),(17,'2019-12-23','2019-12-29','17');
/*!40000 ALTER TABLE `week` ENABLE KEYS */;

#
# Structure for table "zhuanye"
#

DROP TABLE IF EXISTS `zhuanye`;
CREATE TABLE `zhuanye` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `number` int(11) DEFAULT NULL,
  `mingcheng` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "zhuanye"
#

INSERT INTO `zhuanye` VALUES (1,1,'网络专业'),(2,2,'电商专业'),(3,3,'计应专业'),(4,4,'动漫专业'),(5,5,'数媒专业'),(6,6,'软件专业');
