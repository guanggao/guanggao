USE `guanggao`;

DROP TABLE IF EXISTS `un_users`;
CREATE TABLE `un_users` (
  `id` int(8) NOT NULL auto_increment,
  `email` varchar(64) NOT NULL,
  `password` char(32) NOT NULL,
  `nickname` varchar(32) default NULL,
  `realname` varchar(64) default NULL,
  `address` varchar(255) default NULL,
  `zip` varchar(255) default NULL,
  `tel` varchar(255) default NULL,
  `mobile` varchar(255) default NULL,
  `qq` varchar(255) default NULL,
  `bank` int(8) default NULL,
  `bankcard` varchar(32) default NULL,
  `idcard` varchar(32) default NULL,
  `regtime` datetime NOT NULL,
  `regip` char(15) NOT NULL,
  `logintime` datetime NOT NULL default '0000-00-00 00:00:00',
  `loginip` char(15) NOT NULL default '0.0.0.0',
  `loginnum` int(8) NOT NULL default '0',
  `lockinfo` varchar(255) default NULL,
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_site`;
CREATE TABLE `un_site` (
  `id` int(8) NOT NULL auto_increment,
  `uid` int(8) NOT NULL,
  `type` int(5) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(255) NOT NULL,
  `hash` char(32) NOT NULL,
  `info` text,
  `pr` varchar(32) NOT NULL,
  `createtime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `updatetime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `denyinfo` varchar(255) default NULL,
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_category`;
CREATE TABLE `un_category` (
  `id` int(8) NOT NULL auto_increment,
  `pid` int(8) NOT NULL default '0',
  `type` int(8) NOT NULL,
  `name` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- adstype:CPC,CPA,CPS,CPM
DROP TABLE IF EXISTS `un_advert`;
CREATE TABLE `un_advert` (
  `id` int(8) NOT NULL auto_increment,
  `advid` int(9) NOT NULL default '0',
  `logo` varchar(255) default NULL,
  `name` varchar(32) default NULL,
  `cate` int(8) NOT NULL default 0,
  `type` int(8) NOT NULL default 0,
  `info` text,
  `viewprice` varchar(32) default NUll,
  `price` double(10,4) default '0.0000',
  `expire` varchar(255) default NULL,
  `isaudit` tinyint(1) NOT NULL default 0,
  `isassign` tinyint(1) NOT NULL default 0,
  `iscommend` tinyint(1) NOT NULL default 0,
  `createtime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `updatetime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- itmetype:TXT,IMG,FLASH
DROP TABLE IF EXISTS `un_advcode`;
CREATE TABLE `un_advcode` (
  `id` int(8) NOT NULL auto_increment,
  `advid` int(8) NOT NULL default '0',
  `type` int(8) default NULL,
  `name` varchar(32) default NULL,
  `size` varchar(32) default NULL,
  `content` text,
  `createtime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `updatetime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_advapply`;
CREATE TABLE `un_advapply` (
  `id` int(8) NOT NULL auto_increment,
  `userid` int(8) NOT NULL,
  `siteid` int(8) NOT NULL,
  `advid` int(8) NOT NULL,
  `createtime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `audittime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `site_adv` (`siteid`,`advid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_assigncode`;
CREATE TABLE `un_assigncode` (
  `id` int(8) NOT NULL auto_increment,
  `siteid` int(8) NOT NULL,
  `advid` int(8) NOT NULL,
  `assigncode` varchar(32) NOT NULL,
  `createtime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `audittime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `site_adv` (`siteid`,`advid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_report`;
CREATE TABLE `un_report` (
  `id` int(8) NOT NULL auto_increment,
  `userid` int(8) default '0',
  `siteid` int(8) default '0',
  `linkuid` int(8) default '0',
  `advid` int(8) default '0',
  `pv0` int(8) default '0',
  `pc0` int(8) default '0',
  `uc0` int(8) default '0',
  `ip0` int(8) default '0',
  `pv1` int(8) default '0',
  `pc1` int(8) default '0',
  `uc1` int(8) default '0',
  `ip1` int(8) default '0',
  `pv2` int(8) default '0',
  `pc2` int(8) default '0',
  `uc2` int(8) default '0',
  `ip2` int(8) default '0',
  `price` double(12,4) default '0.0000',
  `priceadv` double(12,4) default '0.0000',
  `money0` double(12,4) default '0.0000',
  `money1` double(12,4) default '0.0000',
  `money2` double(12,4) default '0.0000',
  `day` date default '0000-00-00',
  `addtime` datetime default '0000-00-00 00:00:00',
  `status` tinyint(3) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


DROP TABLE IF EXISTS `un_orders`;
CREATE TABLE `un_orders` (
  `orderid` int(8) NOT NULL auto_increment,
  `userid` int(8) default '0',
  `siteid` int(8) default '0',
  `linkuid` int(8) default '0',
  `advid` int(8) default '0',
  `orderno` int(8) NOT NULL default '0',
  `ordermoney` double(12,4) default '0.0000',
  `ordertime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `createtime` datetime NOT NULL  default '0000-00-00 00:00:00',
  `confirmtime` date default '0000-00-00',
  `status` tinyint(3) default '0',
  PRIMARY KEY  (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=gbk AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_message`;
CREATE TABLE `un_message` (
  `id` int(8) NOT NULL auto_increment,
  `pid` int(8) NOT NULL,
  `senduser` int(8) NOT NULL,
  `touser` int(8) default '0',
  `subject` varchar(255) NOT NULL,
  `content` text,
  `isadmin` tinyint(1) NOT NULL default '1',
  `createtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- newstype:union,advert,placard
DROP TABLE IF EXISTS `un_news`;
CREATE TABLE `un_news` (
  `id` int(8) NOT NULL auto_increment,
  `type` int(8) NOT NULL default 0,
  `advid` int(8) NOT NULL default 0,
  `title` varchar(255) NOT NULL default '',
  `content` text,
  `createtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_admin`;
CREATE TABLE `un_admin` (
  `id` int(8) NOT NULL auto_increment,
  `roleid` int(8) NOT NULL,
  `username` varchar(32) NOT NULL default '',
  `password` char(32) NOT NULL,
  `info` varchar(255) NOT NULL,
  `createtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `logintime` datetime NOT NULL default '0000-00-00 00:00:00',
  `loginip` char(15) NOT NULL,
  `loginnum` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_role`;
CREATE TABLE `un_role` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(32) NOT NULL default '',
  `action`text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_loginlog`;
CREATE TABLE `un_loginlog` (
  `id` int(8) NOT NULL auto_increment,
  `username` varchar(32) NOT NULL,
  `action` varchar(255) NOT NULL,
  `data` text,
  `loginip` char(15) NOT NULL,
  `logintime` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_sessions`;
CREATE TABLE `un_sessions` (
  `id` char(32) NOT NULL,
  `expires` int(10)  NOT NULL default '0',
  `data` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `un_settings`;
CREATE TABLE `un_settings` (
  `id` int(8) NOT NULL auto_increment,
  `title` varchar(32) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `un_advdiscount`;
CREATE TABLE `un_advdiscount` (
  `id` int(8) NOT NULL auto_increment,
  `advid` int(8) NOT NULL,
  `siteid` int(8) NOT NULL,
  `discount` double(3,2) NOT NULL,
  `createtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `advid_siteid`(`advid`,`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `un_advertiser`;
CREATE TABLE `un_advertiser` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) default NULL,
  `address` varchar(255) default NULL,
  `linkman` varchar(255) default NULL,
  `contact` varchar(255) default NULL,
  `info` text,
  `createtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


INSERT INTO `un_category`(`id`,`name`,status) VALUES (1,'导购社区',1),(2,'返利网站',1),(3,'比价购物',1),(4,'购物搜索',1),(5,'商品点评',1),(6,'消费资讯',1),(7,'网址导航',1),(8,'健身美容',1),(9,'服装时尚',1),(10,'社区交友',1),(11,'数码硬件',1),(12,'软件下载',1),(13,'语言教育',1),(14,'金融财经',1),(15,'招聘求职',1),(16,'旅游度假',1),(17,'积分返点',1),(18,'医疗健康',1),(19,'母婴育儿',1),(20,'体育运动',1),(21,'影视音乐',1),(22,'文学艺术',1),(23,'综合门户',1),(24,'地域门户',1),(25,' 客户端',1),(26,'个人博客',1),(27,'信息港',1),(28,'运营商',1),(29,'优惠券网站',1),(30,'其他',1);
INSERT INTO `un_category`(`type`,`name`,`status`) VALUES (1,'综合商城',1),(1,'运动户外',1),(1,'箱包/眼镜/鞋类',1),(1,'团购',1),(1,'电视购物',1),(1,'教育培训',1),(1,'机票酒店',1),(1,'金融理财',1),(1,'网络游戏',1),(1,'娱乐交友',1),(1,'网络服务/其他',1),(1,'汽车用品',1),(1,'成人保健',1),(1,'服装服饰',1),(1,'手机/数码/家电',1),(1,'美容化妆 家居家饰',1),(1,'女性/内衣',1),(1,'母婴/儿童用品',1),(1,'图书音像',1),(1,'鲜花礼品',1),(1,'珠宝首饰',1),(1,'食品/茶叶/酒水',1),(1,'医药健康',1),(1,'票务旅游',1);
