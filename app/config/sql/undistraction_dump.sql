# Sequel Pro dump
# Version 254
# http://code.google.com/p/sequel-pro
#
# Host: localhost (MySQL 5.0.41)
# Database: undistraction
# Generation Time: 2008-12-27 16:38:05 +0000
# ************************************************************

# Dump of table logs
# ------------------------------------------------------------

CREATE TABLE `logs` (
  `id` int(11) NOT NULL auto_increment,
  `date` date default NULL,
  `url_id` char(36) default NULL,
  `visits` int(11) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table urls
# ------------------------------------------------------------

CREATE TABLE `urls` (
  `id` char(36) NOT NULL default '',
  `name` varchar(255) default NULL,
  `address` text,
  `limit` int(11) default '10',
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



