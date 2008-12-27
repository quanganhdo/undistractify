# $Id: i18n.sql 7962 2008-12-25 23:30:33Z gwoo $
#
# Copyright 2005-2008,	Cake Software Foundation, Inc.
#
# Licensed under The MIT License
# Redistributions of files must retain the above copyright notice.
# http://www.opensource.org/licenses/mit-license.php The MIT License

CREATE TABLE i18n (
	id int(10) NOT NULL auto_increment,
	locale varchar(6) NOT NULL,
	model varchar(255) NOT NULL,
	foreign_key int(10) NOT NULL,
	field varchar(255) NOT NULL,
	content mediumtext,
	PRIMARY KEY	(id),
#	UNIQUE INDEX I18N_LOCALE_FIELD(locale, model, foreign_key, field),
#	INDEX I18N_LOCALE_ROW(locale, model, foreign_key),
#	INDEX I18N_LOCALE_MODEL(locale, model),
#	INDEX I18N_FIELD(model, foreign_key, field),
#	INDEX I18N_ROW(model, foreign_key),
	INDEX locale (locale),
	INDEX model (model),
	INDEX row_id (foreign_key),
	INDEX field (field)
);
