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
  `createtime` datetime NOT NULL,
  `updatetime` datetime NOT NULL,
  `denyinfo` varchar(255) default NULL,
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_sitetype`;
CREATE TABLE `un_sitetype` (
  `id` int(8) NOT NULL auto_increment,
  `pid` int(8) NOT NULL default '0',
  `type` int(8) NOT NULL,
  `name` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- adstype:CPC,CPA,CPS,CPM
DROP TABLE IF EXISTS `un_ads`;
CREATE TABLE `un_ads` (
  `id` int(8) NOT NULL auto_increment,
  `ownerid` int(9) NOT NULL default '0',
  `logo` varchar(255) default NULL,
  `name` varchar(32) default NULL,
  `group` int(8) NOT NULL,
  `cate` int(8) NOT NULL,
  `type` int(8) NOT NULL,
  `info` text,
  `viewprice` varchar(32) default NUll,
  `price` double(10,4) default '0.0000',
  `expire` varchar(255) default NULL,
  `isaudit` tinyint(1) NOT NULL default 0,
  `isassign` tinyint(1) NOT NULL default 0,
  `commend` tinyint(1) NOT NULL default 0,
  `createtime` datetime NOT NULL,
  `updatetime` datetime NOT NULL,
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- itmetype:TXT,IMG,FLASH
DROP TABLE IF EXISTS `un_adscode`;
CREATE TABLE `un_adscode` (
  `id` int(8) NOT NULL auto_increment,
  `adsid` int(8) NOT NULL default '0',
  `type` int(8) default NULL,
  `name` varchar(32) default NULL,
  `content` text,
  `commend` tinyint(1) NOT NULL default 0,
  `createtime` datetime NOT NULL,
  `updatetime` datetime NOT NULL,
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_audit`;
CREATE TABLE `un_audit` (
  `id` int(8) NOT NULL auto_increment,
  `siteid` int(8) NOT NULL,
  `adsid` int(8) NOT NULL,
  `createtime` datetime NOT NULL,
  `audittime` datetime NOT NULL,
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `site_ads` (`siteid`,`adsid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_assigncode`;
CREATE TABLE `un_assigncode` (
  `id` int(8) NOT NULL auto_increment,
  `siteid` int(8) NOT NULL,
  `adsid` int(8) NOT NULL,
  `assigncode` varchar(32) NOT NULL,
  `createtime` datetime NOT NULL,
  `audittime` datetime NOT NULL,
  `operator` int(8) NOT NULL default '0',
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `site_ads` (`siteid`,`adsid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `un_report`;
CREATE TABLE `un_report` (
  `id` int(8) NOT NULL auto_increment,
  `siteid` int(8) default '0',
  `linkuid` int(8) default '0',
  `adsid` int(8) default '0',
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
  `siteid` int(8) default '0',
  `linkuid` int(8) default '0',
  `adsid` int(8) default '0',
  `orderno` int(8) NOT NULL default '0',
  `ordermoney` double(12,4) default '0.0000',
  `ordertime` datetime default '0000-00-00 00:00:00',
  `createtime` datetime default '0000-00-00 00:00:00',
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
  `createtime` datetime NOT NULL,
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- newstype:union,advert,placard
DROP TABLE IF EXISTS `un_news`;
CREATE TABLE `un_news` (
  `id` int(8) NOT NULL auto_increment,
  `type` int(8),
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
  `createtime` datetime NOT NULL,
  `updatetime` datetime NOT NULL,
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

DROP TABLE IF EXISTS `un_ads_discount`;
CREATE TABLE `un_settings` (
  `id` int(8) NOT NULL auto_increment,
  `adsid` int(8) NOT NULL,
  `siteid` int(8) NOT NULL,
  `discount` double(3,2) NOT NULL,
  `createtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNION KEY `adsid_siteid`(`adsid`,`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `un_advertiser`;
CREATE TABLE `un_advertiser` (
  `id` int(8) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) default NULL,
  `address` varchar(255) default NULL,
  `contact` varchar(255) default NULL,
  `info` text,
  `createtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `updatetime` datetime NOT NULL default '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  UNION KEY `advertid_siteid`(`advertid`,`siteid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;