#
# Table structure for table 'tx_evx_domain_model_map'
#
CREATE TABLE tx_evx_domain_model_map (

	title varchar(255) DEFAULT '' NOT NULL,
	tiles int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_evx_domain_model_maptile'
#
CREATE TABLE tx_evx_domain_model_maptile (

	x int(11) DEFAULT '0' NOT NULL,
	y int(11) DEFAULT '0' NOT NULL,
	map int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_evx_domain_model_game'
#
CREATE TABLE tx_evx_domain_model_game (

	title varchar(255) DEFAULT '' NOT NULL,
	map int(11) unsigned DEFAULT '0',

);