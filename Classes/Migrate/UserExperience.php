<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Michael Klapper <michael.klapper@morphodo.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * This class controls the visibility of available fields from be_groups records.
 *
 * @link http://www.morphodo.com/
 * @author Michael Klapper <michael.klapper@morphodo.com>
 */
class Tx_BeGroups_Migrate_UserExperience {

	public function wizardForm() {
		$step = t3lib_div::_GP('step') ? t3lib_div::_GP('step') : FALSE;
		$hideInListWizardStep = t3lib_div::_GP('hideInListWizardStep') ? TRUE : FALSE;
		$subGroupWizardStep = t3lib_div::_GP('subGroupWizardStep') ? TRUE : FALSE;
		$content = '';
		$formPanel = '<form method="POST">%s</form>';
		$controls = '<input type="hidden" name="step" value="1" />';
		$controls .= '<input type="checkbox" name="hideInListWizardStep" value="1" /> Activate "hide in list" checkbox for records != "META" (' . $this->hideInListWizardAffectsCount() . ' rows).<br />';
		$controls .= '<input type="checkbox" name="subGroupWizardStep" value="1" /> Split be_groups configuration into seperate fields.<br />';
		$controls .= '<input type="submit" value="Submit" />';

		switch($step) {
			case 1:
				$processList = '<ol>%s</ol>';
				$listItem = '';
				$content .= '<h2>Following actions processed:</h2>';
				if ($hideInListWizardStep) {
					$this->setHideInListFlag();
					$listItem .= '<li> - hideInListWizard OK</li>';
				}
				if ($subGroupWizardStep) {
					$listItem .= '<li> - subGroupWizardStep OK</li>';
				}
				$content .= sprintf($processList, $listItem);
				break;
			default:
				$content = sprintf($formPanel, $controls);
				break;
		}

		return $content;
	}

	protected function setHideInListFlag() {
		$GLOBALS['TYPO3_DB']->exec_UPDATEquery('be_groups', 'tx_begroups_kind NOT IN(3)', array('hide_in_lists' => 1));
	}

	/**
	 *
	 */
	protected function hideInListWizardAffectsCount() {
		return $GLOBALS['TYPO3_DB']->exec_SELECTcountRows('*', 'be_groups', 'tx_begroups_kind NOT IN(3) and hide_in_lists = 0');
	}

	public function subGroupWizard() {

	}
}
