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
 * Service to e.g. get the current FE User
 *
 * @version $Id:$
 * @package TYPO3
 * @subpackage Tx_Elements
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @author Stefan Isak <stefanisak@gmail.com>
 * @author Andreas Lappe <nd@off-pist.de>
 */
class Tx_Elements_Service_UserService implements t3lib_Singleton {

	/**
	 * @var Tx_Extbase_Domain_Repository_FrontendUserRepository
	 */
	protected $frontendUserRepository;

	/**
	 * Get current FE-User
	 *
	 * @param void
	 * @return Tx_Extbase_Domain_Model_FrontendUser
	 */
	public function getCurrentFrontendUser() {
		$this->frontendUserRepository = t3lib_div::makeInstance('Tx_Extbase_Domain_Repository_FrontendUserRepository');
		return $this->frontendUserRepository->findOneByUid($GLOBALS['TSFE']->fe_user->user['uid']);
	}


}
?>
