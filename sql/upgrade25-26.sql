CREATE TABLE IF NOT EXISTS `plugin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `plugin_name` varchar(100) NOT NULL,
  `plugin_url` varchar(250) NULL,
  `plugin_description` text NULL,
  `plugin_active` tinyint(4) DEFAULT '0',
  `plugin_installed` tinyint(4) DEFAULT '0',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `plugin_name` (`plugin_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

UPDATE `settings` SET `db_version` = '26' WHERE `id`=1 LIMIT 1;
UPDATE `settings` SET `ushahidi_version` = '2.0b3' WHERE `id`=1 LIMIT 1;