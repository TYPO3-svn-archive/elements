<?php
/****************************************************************
 *  Copyright notice
 *
 *  (c) 2010 Stefan Isak, Andreas Lappe
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Task-Controller, but accepting JSON input and only
 * giving JSON output.
 *
 * @version $Id$
 * @package TYPO3
 * @subpackage Tx_Elements
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @author Stefan Isak <stefanisak@gmail.com>
 * @author Andreas Lappe <nd@off-pist.de>
 */
class Tx_Elements_Controller_TaskJsonController extends Tx_Elements_Controller_TaskController {

	/**
	 * New Task
	 *
	 * @param void
	 * @return void
	 */
	public function newAction() {
		$this->view->assign('task', t3lib_div::makeInstance('Tx_Elements_Domain_Model_Task'));
	}

	/**
	 * Create a task
	 *
	 * @param string $task
	 * @return void
	 */
	public function createAction($task) {
		$plainObject = Tx_Elements_Utility_Json::getArrayAsObject('Tx_Elements_Domain_Model_Task', json_decode($task));
		parent::createAction($plainObject);
	}

}
?>
