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
	tiles int(11) unsigned DEFAULT '0',
	players int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_evx_domain_model_gamemaptile'
#
CREATE TABLE tx_evx_domain_model_gamemaptile (

	origin int(11) unsigned DEFAULT '0',
	game int(11) unsigned DEFAULT '0',

);

#
# Table structure for table 'tx_evx_domain_model_gameplayer'
#
CREATE TABLE tx_evx_domain_model_gameplayer (

	title varchar(255) DEFAULT '' NOT NULL,
	game int(11) unsigned DEFAULT '0',

);
