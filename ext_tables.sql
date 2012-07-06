#
# Table structure for table 'be_groups'
#
CREATE TABLE be_groups (
	tx_begroups_kind int(11) DEFAULT '0' NOT NULL,
	`subgroup_fm` varchar(255) NOT NULL DEFAULT '',
	`subgroup_pm` varchar(255) NOT NULL DEFAULT '',
	`subgroup_ws` varchar(255) NOT NULL DEFAULT '',
	`subgroup_r` varchar(255) NOT NULL DEFAULT '',
	`subgroup_pa` varchar(255) NOT NULL DEFAULT '',
	`subgroup_ts` varchar(255) NOT NULL DEFAULT '',
	`subgroup_l` varchar(255) NOT NULL DEFAULT ''
);