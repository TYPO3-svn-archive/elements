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
 * A basic task.
 *
 * @entity
 * @scope prototype
 * @version $Id:$
 * @package TYPO3
 * @subpackage Tx_Elements
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @author Stefan Isak <stefanisak@gmail.com>
 * @author Andreas Lappe <nd@off-pist.de>
 */
class Tx_Elements_Domain_Model_Task extends Tx_Extbase_DomainObject_AbstractEntity { 

	/**
	 * @var string
	 */
	protected $uuid;

	/**
	 * @var string
	 */
	protected $taskContent;

	/**
	 * Constructor
	 *
	 * @param void
	 * @return void
	 */
	public function __construct() {
		$this->uuid = Tx_Elements_Utility_Uuid::generateUuid();
	}

	/**
	 * Set UUID
	 *
	 * Normally you wouldn't override it, but we need it 
	 * to artificially create objects later on... not pretty.
	 *
	 * @param string $uuid
	 * @return void
	 */
	public function setUuid($uuid) {
		$this->uuid = $uuid;
	}

	/**
	 * Get UUID
	 *
	 * @param void
	 * @return string
	 */
	public function getUuid() {
		return $this->uuid;
	}

	/**
	 * Set taskContent
	 *
	 * @param string $taskContent
	 * @return void
	 */
	public function setTaskContent($taskContent) {
		$this->taskContent = $taskContent;
	}

	/**
	 * Get taskContent
	 *
	 * @param void
	 * @return string
	 */
	public function getTaskContent() {
		return $this->taskContent;
	}

}
?>
