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
 * Tag-Controller
 *
 * @version $Id$
 * @package TYPO3
 * @subpackage Tx_Elements
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @author Stefan Isak <stefanisak@gmail.com>
 * @author Andreas Lappe <nd@off-pist.de>
 */
class Tx_Elements_Controller_TagController extends Tx_Elements_MVC_Controller_RESTController {

	/**
	 * @var Tx_Elements_Service_UserService
	 */
	protected $userService;

	/**
	 * @var Tx_Elements_Domain_Repository_TagRepository
	 */
	protected $tagRepository;

	/**
	 * Init
	 *
	 * @param void
	 * @return void
	 */
	public function initializeAction() {
		$this->userService = t3lib_div::makeInstance('Tx_Elements_Service_UserService');
		$this->tagRepository = t3lib_div::makeInstance('Tx_Elements_Domain_Repository_TagRepository');
	}

	/**
	 * Index
	 *
	 * @param void
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('tags', $this->tagRepository->findByUser($this->userService->getCurrentFrontendUser()));
	}

	/**
	 * New
	 *
	 * @param Tx_Elements_Domain_Model_Tag $newTag
	 * @return void
	 */
	public function newAction(Tx_Elements_Domain_Model_Tag $newTag = NULL) {
		$this->view->assign('newTag', $newTag);
	}

	/**
	 * Create
	 *
	 * @param Tx_Elements_Domain_Model_Tag $tag
	 * @return void
	 */
	public function createAction(Tx_Elements_Domain_Model_Tag $tag) {
		$tag->setUser($this->userService->getCurrentFrontendUser());
		$this->tagRepository->add($tag);
		$this->redirect('index');
	}

	/**
	 * Delete
	 * 
	 * @param Tx_Elements_Domain_Model_Tag $tag
	 * @return void
	 */
	public function deleteAction(Tx_Elements_Domain_Model_Tag $tag) {
		$this->tagRepository->remove($tag);
	}
		

}
?>
