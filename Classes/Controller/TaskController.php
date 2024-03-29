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
 * Task-Controller
 *
 * @version $Id$
 * @package TYPO3
 * @subpackage Tx_Elements
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @author Stefan Isak <stefanisak@gmail.com>
 * @author Andreas Lappe <nd@off-pist.de>
 */
class Tx_Elements_Controller_TaskController extends Tx_Elements_MVC_Controller_RESTController {

	/**
	 * @var Tx_Elements_Domain_Repository_TaskRepository
	 */
	protected $taskRepository;

	/**
	 * @var Tx_Elements_Service_UserService
	 */
	protected $userService;

	/**
	 * Init
	 *
	 * @param void
	 * @return void
	 */
	public function initializeAction() {
		$this->taskRepository = t3lib_div::makeInstance('Tx_Elements_Domain_Repository_TaskRepository');
		$this->userService = t3lib_div::makeInstance('Tx_Elements_Service_UserService');
	}

	/**
	 * Index
	 *
	 * @param void
	 * @return string
	 */
	public function indexAction() {
		$this->view->assign('tasks', $this->taskRepository->findByUser($this->userService->getCurrentFrontendUser()));
	}

	/**
	 * Form for a new Task
	 *
	 * @param Tx_Elements_Domain_Model_Task $newTask
	 * @return void
	 */
	public function newAction(Tx_Elements_Domain_Model_Task $newTask = NULL) {
		$this->view->assign('newTask', $newTask);
	}

	/**
	 * Create a task
	 *
	 * @param Tx_Elements_Domain_Model_Task $task
	 * @return void
	 */
	public function createAction(Tx_Elements_Domain_Model_Task $task) {
		$task->setUser($this->userService->getCurrentFrontendUser());
		$this->taskRepository->add($task);
		$this->redirect('index');
	}

	/**
	 * Delete the task
	 *
	 * @param Tx_Elements_Domain_Model_Task $task
	 * @return void
	 */
	public function deleteAction(Tx_Elements_Domain_Model_Task $task) {
		$this->taskRepository->remove($task);
		$this->redirect('index');
	}

}
?>
