# Sequel Pro dump
# Version 254
# http://code.google.com/p/sequel-pro
#
# Host: localhost (MySQL 5.0.41)
# Database: undistractify
# Generation Time: 2009-01-09 17:15:02 +0000
# ************************************************************

# Dump of table urls
# ------------------------------------------------------------

CREATE TABLE `urls` (
  `id` char(36) NOT NULL default '',
  `title` varchar(255) default NULL,
  `address` text,
  `lastvisit` datetime default NULL,
  `created` datetime default NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) default NULL,
  `interval` varchar(255) NOT NULL default '1 hour',
  `created` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



