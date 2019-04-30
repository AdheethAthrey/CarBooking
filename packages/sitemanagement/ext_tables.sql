#
# Table structure for table 'tx_sitemanagement_domain_model_car'
#
CREATE TABLE tx_sitemanagement_domain_model_car (

	id int(11) DEFAULT '0' NOT NULL,
	model varchar(255) DEFAULT '' NOT NULL,
	color varchar(255) DEFAULT '' NOT NULL,
	transmission varchar(255) DEFAULT '' NOT NULL,
	fuel_type varchar(255) DEFAULT '' NOT NULL,
	seating int(11) DEFAULT '0' NOT NULL,
	availability varchar(255) DEFAULT '' NOT NULL,
	booking int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_sitemanagement_domain_model_booking'
#
CREATE TABLE tx_sitemanagement_domain_model_booking (

	car int(11) unsigned DEFAULT '0' NOT NULL,

	booking_id int(11) DEFAULT '0' NOT NULL,
	pick_up_date varchar(255) DEFAULT '' NOT NULL,
	pick_up_location varchar(255) DEFAULT '' NOT NULL,
	drop_off_date varchar(255) DEFAULT '' NOT NULL,
	drop_off_location varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_sitemanagement_domain_model_booking'
#
CREATE TABLE tx_sitemanagement_domain_model_booking (

	car int(11) unsigned DEFAULT '0' NOT NULL,

);
