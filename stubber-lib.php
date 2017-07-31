<?
/**
 * This file is part of Stubber - Shortlink generator and manager.
 *
 * Stubber is free software distributed under the terms of the GNU Lesser
 * General Public License version 3 as published by the Free Software Foundation.
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code. 
 *
 * @link        https://github.com/Nodws/Stubber
 * @copyright   2010-2016 Nodws
 * @license     http://www.gnu.org/licenses/lgpl.txt LGPL version 3
 */

function stub($id,$rev=0){
	if($rev)
	return intval($id,36);
	return base_convert($id, 10, 36);
}

?>