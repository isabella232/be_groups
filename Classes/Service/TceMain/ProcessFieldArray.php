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
class Tx_BeGroups_Service_TceMain_ProcessFieldArray {

	/**
	 * Update inc_access_lists value if the table is "be_groups"
	 *
	 * @param array $incomingFieldArray Current record
	 * @param string $table Database table of current record
	 * @param integer $id Uid of current record
	 * @param t3lib_TCEmain  $parentObj
	 *
	 * @return string
	 */
	public function processDatamap_preProcessFieldArray(&$incomingFieldArray, $table, $id, $parentObj) {
		if ($table == 'be_groups') {

				// reset all fields except the relevant for the current selected view
			if (! is_null($this->setIncludeListFlag[$incomingFieldArray['tx_begroups_kind']]) ) {
				$fieldsToKeepArray = array_keys(t3lib_beFunc::getTCAtypes('be_groups', $incomingFieldArray, 1));

				foreach ($incomingFieldArray as $column => $value) {
					if (! in_array($column, $fieldsToKeepArray) && (t3lib_div::testInt($id) === true) ) {
						$incomingFieldArray[$column] = null;
					}
				}
			}

				// hide subgroups if they are not of type meta
			if ($incomingFieldArray['tx_begroups_kind'] == 3) {
				$incomingFieldArray['hide_in_lists'] = 0;
			} else {
				$incomingFieldArray['hide_in_lists'] = 1;
			}

				// update include access list flag
			if ($this->setIncludeListFlag[$incomingFieldArray['tx_begroups_kind']] === true) {
				$incomingFieldArray['inc_access_lists'] = 1;
			} elseif ($this->setIncludeListFlag[$incomingFieldArray['tx_begroups_kind']] === false) {
				$incomingFieldArray['inc_access_lists'] = 0;
			}
		}
	}
}
