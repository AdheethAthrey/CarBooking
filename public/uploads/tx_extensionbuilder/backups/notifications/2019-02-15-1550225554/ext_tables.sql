#
# Table structure for table 'tx_notifications_domain_model_offer'
#
CREATE TABLE tx_notifications_domain_model_offer (

	notification int(11) unsigned DEFAULT '0' NOT NULL,

	id int(11) DEFAULT '0' NOT NULL,
	description varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_notifications_domain_model_newsletter'
#
CREATE TABLE tx_notifications_domain_model_newsletter (

	notification int(11) unsigned DEFAULT '0' NOT NULL,

	id int(11) DEFAULT '0' NOT NULL,
	description varchar(255) DEFAULT '' NOT NULL,

);

#
# Table structure for table 'tx_notifications_domain_model_notification'
#
CREATE TABLE tx_notifications_domain_model_notification (

	id int(11) DEFAULT '0' NOT NULL,
	date varchar(255) DEFAULT '' NOT NULL,
	newsletter int(11) unsigned DEFAULT '0' NOT NULL,
	offer int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_notifications_domain_model_newsletter'
#
CREATE TABLE tx_notifications_domain_model_newsletter (

	notification int(11) unsigned DEFAULT '0' NOT NULL,

);

#
# Table structure for table 'tx_notifications_domain_model_offer'
#
CREATE TABLE tx_notifications_domain_model_offer (

	notification int(11) unsigned DEFAULT '0' NOT NULL,

);
