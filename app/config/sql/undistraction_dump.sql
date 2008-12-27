# Sequel Pro dump
# Version 254
# http://code.google.com/p/sequel-pro
#
# Host: localhost (MySQL 5.0.41)
# Database: undistraction
# Generation Time: 2008-12-27 16:38:05 +0000
# ************************************************************

# Dump of table urls
# ------------------------------------------------------------

CREATE TABLE `urls` (
  `id` char(36) NOT NULL default '',
  `title` varchar(255) default NULL,
  `address` text, 	
  `lastvisit` datetime default NULL,
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



