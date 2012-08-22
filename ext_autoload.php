<?php
$extensionClassesPath = t3lib_extMgm::extPath('be_groups') . 'Classes/';

return array(
	'tx_begroups_service_tcemain_processfieldarray' => $extensionClassesPath . 'Service/TceMain/ProcessFieldArray.php',
	'tx_begroups_servicetcemain_labelhelper' => $extensionClassesPath . 'Service/TceMain/LabelHelper.php',
	'tx_begroups_migrate_userexperience' => $extensionClassesPath . 'Migrate/UserExperience.php',
);