be_groups
=========

TYPO3 Rights-Management for backend user groups

Migrate from older version
==========
UPDATE be_groups SET hide_in_lists = 1 WHERE tx_begroups_kind NOT IN(3);