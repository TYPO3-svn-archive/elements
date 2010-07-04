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
 * A user of our service.
 *
 * @version $Id$
 * @package TYPO3
 * @subpackage Tx_Elements
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @author Stefan Isak <stefanisak@gmail.com>
 * @author Andreas Lappe <nd@off-pist.de>
 */
class Tx_Elements_Domain_Model_User extends Tx_Extbase_Domain_Model_FrontendUser { 

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Elements_Domain_Model_List>
	 * @lazy
	 * @cascade remove
	 */
	protected $lists;

	/**
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_Elements_Domain_Model_Tag>
	 * @lazy
	 * @cascade remove
	 */
	protected $tags;

	/**
	 * Add a List
	 *
	 * @param Tx_Elements_Domain_Model_List $list
	 * @return void
	 */
	public function addList(Tx_Elements_Domain_Model_List $list) {
		$this->lists->attach($list);
	}

	/**
	 * Remove a List
	 *
	 * @param Tx_Elements_Domain_Model_List $list
	 * @return void
	 */
	public function removeList(Tx_Elements_Domain_Model_List $list) {
		$this->lists->detach($list);
	}

	/**
	 * Get the lists
	 *
	 * @param void
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getLists() {
		return $this->lists;
	}

	/**
	 * Add a tag
	 *
	 * @param Tx_Elements_Domain_Model_Tag $tag
	 * @return void
	 */
	public function addTag(Tx_Elements_Domain_Model_Tag $tag) {
		$this->tags->attach($tag);
	}

	/**
	 * Remove a tag
	 *
	 * @param Tx_Elements_Domain_Model_Tag $tag
	 * @return void
	 */
	public function removeTag(Tx_Elements_Domain_Model_Tag $tag) {
		$this->tags->detach($tag);
	}

	/**
	 * Get the tags
	 *
	 * @param void
	 * @return Tx_Extbase_Persistence_ObjectStorage
	 */
	public function getTags() {
		return $this->tags;
	}

}
?>
