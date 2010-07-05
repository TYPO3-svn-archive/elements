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
 * A tag.
 *
 * @entity
 * @scope prototype
 * @version $Id$
 * @package TYPO3
 * @subpackage Tx_Elements
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @author Stefan Isak <stefanisak@gmail.com>
 * @author Andreas Lappe <nd@off-pist.de>
 */
class Tx_Elements_Domain_Model_Tag extends Tx_Extbase_DomainObject_AbstractEntity { 

	/**
	 * @var string
	 */
	protected $uuid;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var Tx_Extbase_Domain_Model_FrontendUser
	 */
	protected $user;

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
	 * Set uuid
	 *
	 * @param string $uuid
	 * @return void
	 */
	public function setUuid($uuid) {
		$this->uuid = $uuid;
	}

	/**
	 * Get uuid
	 *
	 * @param void
	 * @return string
	 */
	public function getUuid() {
		return $this->uuid;
	}

	/**
	 * Set name
	 * 
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Get name
	 *
	 * @param void
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Set user
	 *
	 * @param Tx_Extbase_Domain_Model_FrontendUser $user
	 * @return void
	 */
	public function setUser(Tx_Extbase_Domain_Model_FrontendUser $user) {
		$this->user = $user;
	}

	/**
	 * Get user
	 *
	 * @param void
	 * @return Tx_Extbase_Domain_Model_FrontendUser
	 */
	public function getUser() {
		return $this->user;
	}

}
?>
