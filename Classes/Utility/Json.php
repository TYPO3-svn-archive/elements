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
 * Helper class for JSON-related output/input
 *
 * @version $Id:$
 * @package TYPO3
 * @subpackage Tx_Elements
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 * @author Stefan Isak <stefanisak@gmail.com>
 * @author Andreas Lappe <nd@off-pist.de>
 */
class Tx_Elements_Utility_Json {

	/**
	 * Get all methods starting with get* as they should be
	 * public getters, add the appropriate property to our array
	 * and set the value to the result of the get* method.
	 *
	 * @param mixed $object
	 * @return array
	 */
	static public function getObjectAsArray($object) {
		$publicObject = Array();
		$methods = get_class_methods(get_class($object));
		foreach($methods as $method) {
			if(preg_match('/^get.*/', $method)) {
				$propertyName = lcfirst(preg_replace('/^get(.*)$/', '\1', $method));
				$publicObject[$propertyName] = $object->$method();
			}
		}
		return $publicObject;
	}

}
?>
